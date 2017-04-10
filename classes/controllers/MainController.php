<?php
class MainController
{
	public function actionMain()
	{
		$mod = new mainModel;
		$mod->test();

	}
}