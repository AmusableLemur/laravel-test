<?php

class ProfileController extends BaseController
{
	public function getIndex($name = null)
	{
		if ($name === null) {
			$profile = Auth::user();
		}
		else {
			$profile = User::where("name", "=", $name)->first();
		}

		if ($profile === null) {
			return App::abort(404);
		}

		return View::make("profile")
			->with("profile", $profile);
	}
}
