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

	public function aboutus() {
		$this->display("aboutus");
	}

	public function successexample() {

		$this->display("successexample");
	}
}
?>