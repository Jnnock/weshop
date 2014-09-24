<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends BaseAction {
	public function index() {
		$this->display("");
	}

	public function reg() {
		$user = M("Users");
		if ($user->where("phone={$_POST['phone']}")->find()) {
			echo 2;
			return;
		} else if ($user->where("email={$_POST['email']}")->find()) {
			echo 3;
			return;
		}
		$data['email']      = $_POST['email'];
		$data['phone']      = $_POST['phone'];
		$data['password']   = md5($_POST['pwd']);
		$result             = $user->add($data);
		$id                 = $user->where("phone={$_POST['phone']}")->getField('id');
		$_SESSION["userId"] = $id;
		$info               = M("Info");
		$datas['user_id']   = $id;
		$datas['name']      = $_POST['phone'];
		$info->add($datas);
		if ($result) {
			echo 0;
		} else {
			echo 1;
		}
	}

	public function sign() {
		$user    = M("Users");
		$account = $user->where("phone={$_POST['email']}")->find();
		if (md5($_POST['pwd']) == $account['password']) {
			$_SESSION['userId'] = $account['id'];
			echo 0;
		} else {
			echo 1;
		}
	}

	public function home() {
		if ($_SESSION['userId']) {
			$info           = M("Info");
			$user           = M("Users");
			$this->name     = $info->where("user_id={$_SESSION['userId']}")->getField('name');
			$this->nowTime  = date('Y年m月d日 H时');
			$this->bornTime = $user->where("id={$_SESSION['userId']}")->getField('reg_time');
			$this->display("home");
		} else {
			$this->display("login");
		}
	}

	public function saveName() {
		$info   = M("Info");
		$result = $info->where("user_id={$_SESSION['userId']}")->setField('name', $_GET['newname']);
		if ($result) {
			echo 1;
		} else {
			echo 2;
		}
	}

	public function saveArd() {
		$address          = M("Address");
		$data['user_id']  = $_SESSION['userId'];
		$data['province'] = $_GET['province'];
		$data['city']     = $_GET['city'];
		$data['area']     = $_GET['area'];
		$data['detail']   = $_GET['detail'];
		$result           = $address->add($data);
		if ($result) {
			echo 1;
		} else {
			echo 2;
		}
	}

	public function address() {
		$info       = M("Info");
		$address    = M("Address");
		$this->name = $info->where("user_id={$_SESSION['userId']}")->getField("name");
		$this->adr  = $address->where("user_id={$_SESSION['userId']}")->select();
		$this->display("userAddress");
	}

	public function pwd() {
		$user       = M("User");
		$info       = M("Info");
		$this->name = $info->where("user_id={$_SESSION['userId']}")->getField("name");
		$this->display("userPwd");
	}

	public function checkPwd() {
		$user = M("Users");
		$pwd  = $user->where("id={$_SESSION['userId']}")->getField('password');
		//$this->error();
		echo $pwd;
	}

	public function savePwd() {
		$user               = M("Users");
		$result             = $user->where("id={$_SESSION['userId']}")->setField("password", $_GET['newPwd']);
		$_SESSION['userId'] = "";
		if ($result) {
			echo 1;
		} else {
			echo 2;
		}
	}

	public function out() {
		$_SESSION['userId'] = "";
		echo "<script>window.location='__APP__/Index';</script>";
	}

	public function aboutus() {
		$this->display("aboutus");
	}

	public function successexample() {

		$this->display("successexample");
	}
}
?>