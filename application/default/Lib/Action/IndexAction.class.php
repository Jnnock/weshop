<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends BaseAction {
	public function index() {
		$this->display("");
	}

	public function reg() {
		$user               = M("Users");
		$data['email']      = $_POST['email'];
		$data['phone']      = $_POST['phone'];
		$data['password']   = md5($_POST['pwd']);
		$result             = $user->add($data);
		$id                 = $user->where("phone={$_POST['phone']}")->getField('id');
		$_SESSION["userId"] = $id;
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

	public function login() {
		if ($_SESSION['userId']) {
			$this->display("home");
		} else {
			$this->display("login");
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