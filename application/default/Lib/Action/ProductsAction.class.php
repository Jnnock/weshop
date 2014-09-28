<?php
// 本类由系统自动生成，仅供测试用途
class ProductsAction extends BaseAction {
	public function index() {
		/*$arr = array();
		for ($i = 5; $i <= 18; $i++) {
		$arr[] = $i;
		}
		$this->assign("shuzi", $arr);*/
		$this->display("");
	}

	public function theProduct() {
		$good       = M("Goods");
		$commodity  = $good->where("id={$_GET['good']}")->find();
		$category   = M("Category");
		$this->type = $category->where("id={$commodity['category_id']}")->getField('name');
		$this->assign('commodity', $commodity);
		$this->display("theProduct");
	}

	public function cart() {
		$this->display("cart");
	}

}
?>