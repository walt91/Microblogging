<?php

class HomeController extends BaseController {


	public function getIndex()
	{
		$this->layout->nest('content', 'home.index');
	}

}
