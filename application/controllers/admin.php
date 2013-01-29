<?php

class Admin_Controller extends Base_Controller {

//	public function action_index()
//	{
//		// code here..
//
//		return View::make('admin.index');
//	}

	public function action_orders()
	{
		// code here..

		return View::make('admin.orders');
	}

	public function action_stats()
	{
		// code here..

		return View::make('admin.stats');
	}

}
