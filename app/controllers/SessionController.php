<?php

class SessionController extends BaseController
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

	public function getLogin()
	{
		return View::make("login");
	}

    public function postLogin()
    {
        if (Auth::attempt(array("name" => Input::get("name"), "password" => Input::get("password")))) {
            return Redirect::intended("/")
                ->with("message", "Inloggad!");
        }

        return Redirect::route("login")
            ->with("warning", "Inloggning misslyckades")
            ->withInput();
    }

    public function getLogout()
    {
        Auth::logout();

        return Redirect::route("home")
            ->with("message", "Du är nu utloggad");
    }
}
