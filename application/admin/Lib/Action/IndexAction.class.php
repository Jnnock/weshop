<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends BaseAction {
	public function login() {
		if ($_SESSION['adminUserId']) {
			$this->display("index");
		} else {
			$this->display("login");
		}
	}

	public function sign() {
		$user   = M("Users");
		$result = $user->where("phone={$_POST['email']}")->find();
		if ($result['status'] != 2) {
			echo 0;
		} elseif (md5($_POST['pwd']) != $result['password']) {
			echo 2;
		} else {
			$_SESSION['adminUserId'] = $result['id'];
			echo 1;
		}
	}

	public function index() {
		//$managers = M('managers');

		//$TokenResult=$managers->autoCheckToken($_POST);
		//echo $TokenResult;
		//$name=$_POST['name'];
		//$psw=$_POST['password'];

		$this->display("");
	}

	public function out() {
		$_SESSION['adminUserId'] = "";
		if ($_SESSION['adminUserId'] == '') {
			echo 1;
		} else {
			echo 2;
		}
	}

	public function addType() {
		$category      = M("Category");
		$data['name']  = $_GET['name'];
		$data['count'] = 0;
		$result        = $category->add($data);
		if ($result) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function delType() {
		$category = M("Category");
		$result   = $category->where("id={$_GET['typeid']}")->delete();
		if ($result) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function modType() {
		$category = M("Category");
		$result   = $category->where("id={$_GET['typeid']}")->setField('name', $_GET['newName']);
		if ($result) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function manageType() {
		if ($_SESSION['adminUserId']) {
			$category   = M('Category');
			$this->type = $category->select();
			$this->display('manageType');
		} else {
			$this->display("login");
		}
	}

	public function addGoods() {
		if ($_SESSION['adminUserId']) {
			$category   = M('Category');
			$this->type = $category->select();
			$this->display('addGoods');
		} else {
			$this->display("login");
		}
	}

	public function upload() {
		import('ORG.Net.UploadFile');
		$file             = new UploadFile();
		$file->maxSize    = '-1';
		$file->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
		$file->allowTypes = array('image/png', 'image/jpg', 'image/pjpeg', 'image/gif', 'image/jpeg');
		$file->savePath   = './Public/upload/';
		if ($file->upload()) {
			$info = $file->getUploadFileInfo();
		} else {
			echo $file->getErrorMsg();
		}
		$goods = M("Goods");
		$goods->create();
		$newName      = rand();
		$goods->image = $info[0]['savename'];
		$goods->add();
		$this->mark = '1';
		header("Location: ./list");
	}

	public function listAction() {
		$goods = M("Goods");
		if ($_SESSION['adminUserId']) {
			if ($_GET['method'] == 0) {
				$commodity = $goods->select();
			}
			$category   = M('Category');
			$this->type = $category->select();
			$this->display('list');
		} else {
			$this->display("login");
		}
	}

	public function users() {
		$this->display('users');
	}
}
?>