<?php

class ProductsAction extends BaseAction {
	public function index() {
		$category = M("Category");
		$this->c = $category->select();
		$goods = M("Goods");
		import("ORG.Util.Page");
		if ($_GET['type'] == 0) {
			$list = $goods->order('id DESC')->select();
			$this->value = $_GET['type'];
			$count = $goods->count();
		} else if ($_GET['type'] != 0) {
			$list = $goods->where("category_id={$_GET['type']}")->order('id DESC')->select();
			$this->value = $_GET['type'];
			$count = $goods->where("category_id={$_GET['type']}")->count();
		} else {
			$list = $goods->order('id DESC')->select();
			$this->value = 0;
			$count = $goods->count();
		}
		//$count = $goods->count();
		$p = new Page($count, 10);
		$page = $p->show();
		$this->assign('list', $list);
		$this->assign('page', $page);
		$this->assign('show', $show);
		$this->display("index");
	}

	public function theProduct() {
		$category = M("Category");
		$this->c = $category->select();
		$good = M("Goods");
		$commodity = $good->where("id={$_GET['good']}")->find();
		$this->types = $category->where("id={$commodity['category_id']}")->getField('name');
		$this->assign('commodity', $commodity);
		$this->hot = $good->order('rand()')->limit(1)->find();
		$this->new = $good->order('rand()')->limit(1)->find();
		$this->display("theProduct");
	}

	public function cart() {
		if ($_SESSION['userId'] == "") {
			$category = M("Category");
			$this->c = $category->select();
			$this->display("Index/login");
		} else {
			$cart = M("Cart");
			$this->need = $cart->where("user_id={$_SESSION['userId']}")->select();
			//$this->assign("user", $SESSION['userId']);
			$this->display("cart");
		}
	}

	public function addCart() {
		if ($_SESSION['userId'] == "") {
			echo 2;
		} else {
			$cart = M("Cart");
			$data['goods_id'] = $_GET['goods'];
			$data['user_id'] = $_SESSION['userId'];
			$result = $cart->add($data);
			if ($result) {
				echo 1;
			} else {
				echo 0;
			}
		}
	}

	public function delCart() {
		$cart = M("Cart");
		$result = $cart->where("id=" . $_GET['goods'])->delete();
		if ($result) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
?>