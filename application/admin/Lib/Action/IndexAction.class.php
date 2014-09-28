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
		if ($_SESSION['adminUserId']) {
			$goods = M("Goods");
			if ($_GET['method'] != 0) {
				$this->commodity = $goods->where("category_id={$_GET['method']}")->select();
				$this->value     = $_GET['method'];
			} else if ($_GET['method'] == 0) {
				$this->value     = 0;
				$this->commodity = $goods->select();
			} else {
				$this->value     = 0;
				$this->commodity = $goods->select();
			}
			$category       = M('Category');
			$this->classify = $category->select();
			$this->display('list');
		} else {
			$this->display("login");
		}
	}

	public function users() {
		if ($_SESSION['adminUserId']) {
			$user  = M('Users');
			$count = $user->count();
			import("ORG.Util.Page");
			$p    = new Page($count, 10);
			$page = $p->show();
			$list = $user->order('reg_time DESC')->limit($p->firstRow . ',' . $p->listRows)->select();
			$this->assign('list', $list);
			$this->assign('page', $page);
			$this->display('users');
		} else {
			$this->display("login");
		}
	}

	public function selfInvite() {
		if ($_SESSION['adminUserId']) {
			$selfInvite = M('Invite');
			$count      = $selfInvite->count();
			import("ORG.Util.Page");
			$p    = new Page($count, 15);
			$page = $p->show();
			$list = $selfInvite->order('id')->limit($p->firstRow . ',' . $p->listRows)->select();
			$this->assign('list', $list);
			$this->assign('page', $page);
			$city  = M('City');
			$bCity = $city->where('status=1')->select();
			$this->assign('city', $bCity);
			$this->display('selfInvite');
		} else {
			$this->display("login");
		}
	}

	public function getArea() {
		$area     = M("City");
		$result   = $area->where("parent={$_GET['city']} AND status=2")->select();
		$resultjs = json_encode($result);
		echo $resultjs;
	}

	public function addAdr() {
		$city           = M("City");
		$c              = $city->where("id={$_GET['city']}")->getField('city');
		$a              = $city->where("id={$_GET['area']}")->getField('area');
		$data['city']   = $c;
		$data['area']   = $a;
		$data['detail'] = $_GET['detail'];
		$invite         = M("Invite");
		$result         = $invite->add($data);
		if ($result) {
			echo 1;
		} else {
			echo 2;
		}
	}

	public function delAdr() {
		$invite = M("Invite");
		$result = $invite->where("id={$_GET['adrid']}")->delete();
		if ($result) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
?>