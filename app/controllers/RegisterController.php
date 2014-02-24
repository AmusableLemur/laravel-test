<?php

class RegisterController extends BaseController
{
    public static $rules = array(
        "name" => "required|alpha_num",
        "password" => "required|min:6|confirmed",
        "password_confirmation" => "required",
        "rules" => "required"
    );

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->beforeFilter("csrf", array("on" => "post"));
    }

	public function getIndex()
	{
		return View::make("register");
	}

    public function postIndex()
    {
        $validator = Validator::make(Input::all(), self::$rules);

        if ($validator->passes()) {
            $user = new User;
            $user->name = Input::get("name");
            $user->password = Hash::make(Input::get("password"));
            $user->email = null;
            $user->save();

            Auth::login($user);

            return Redirect::route("home")->with("message", "Registrering lyckades");
        }

        return Redirect::route("register")
            ->withErrors($validator)
            ->withInput();
    }
}
