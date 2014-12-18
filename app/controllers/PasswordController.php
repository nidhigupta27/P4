<?php

class PasswordController extends BaseController {

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function remind()
	{
		return View::make('password.remind');
	}

	public function request()
    {
      $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));
 
       $response = Password::remind(Input::only('email'), function($message)
       {
             $message->subject('Password Reminder');

       });

       switch($response)
       {
       	case Password::INVALID_USER:
                return Redirect::back()->with('error', Lang::get($response));

        case Password::REMINDER_SENT:
                return Redirect::back()->with('flash_message', 'An email has been sent, please follow the link to reset your password');
        }
       
     }

    public function reset($token)
    {
  
      return View::make('password.reset')->with('token', $token);
     } 
     public function update()
     {
      $credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);
     
     $response = Password::reset($credentials, function($user, $password)
      {
       $user->password = Hash::make($password);
 
       $user->save();

       });
 
        switch ($response)
		{
			case Password::INVALID_PASSWORD:
			case Password::INVALID_TOKEN:
			case Password::INVALID_USER:
				return Redirect::back()->with('error', Lang::get($response))
                               ->withInput();

			case Password::PASSWORD_RESET:
				return Redirect::to('/login')->with('flash_message', 'Your password has been successfully reset. You may proceed to login now!');
	   }
	    
    }

}
