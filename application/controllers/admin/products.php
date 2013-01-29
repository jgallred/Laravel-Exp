<?php

class Admin_Products_Controller extends Base_Controller {

	public function action_index()
	{
		// code here..

		return View::make('admin.products.index');
	}

	public function action_add()
	{
		// code here..

		return View::make('admin.products.add');
	}

	public function action_remove()
	{
		// code here..

		return View::make('admin.products.remove');
	}

	public function action_update()
	{
		// code here..

		return View::make('admin.products.update');
	}

}
