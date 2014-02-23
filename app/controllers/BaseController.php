<?php

class BaseController extends Controller
{
	public function __construct()
	{
		$user = null;

		if (Auth::check()) {
			$user = User::find(Auth::getUser()->id);
		}

		View::share("user", $user);
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}