<?php
class BaseAction extends Action
{
	public function _initialize()
	{
		$base='base_miao~';
		$this->assign("base",$base);
	}
}
?>