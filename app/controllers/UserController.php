<?php
class UserController extends BaseController
{
	public function _construct(){
		# Make sure Base controller is called first
 		parent::_construct();

        $this->beforeFilter('guest',array('only' => array('getSignup','getLogin')));

	}

    # Show the new user sign up form
	public function getSignup(){

       return View::make('user_signup');
	}

	public function postSignup(){

		#step 1 : define the rules
		$rules = array(
			             'email'    => 'required|email|unique:users,email',
			             'password' =>  'required|min:6',
			             'name'     =>  'required|alpha'
			           );
	   #step 2  : 
	   $validator = Validator::make(Input::all(),$rules);

	   #step 3  :
	   if($validator->fails()){
	   	      return Redirect::to('/signup')
	   	                     ->with('flash_message','Signup failed,please fix the errors listed below')
	   	                     ->withInput()
	   	                     ->withErrors($validator);

	   } 
	   $user = new User();
	   $user->email = Input::get('email');
	   $user->password = Hash::make(Input::get('password'));
       $user->name = Input::get('name');
	   try{
	   	$user->save();
	   }
	   catch (Exception $e){
        return Redirect::to('/signup')
                         ->with('flash_message','Sign up failed;Please try again')
                         ->withInput();
       }

      #Log in

       Auth::login($user);

       return Redirect::to('/')->with('flash_message','Welcome '. $user->name.' to What is for dinner today');
	}

	/*Display the login form
	 @return View
	*/

	 public function getLogin(){

	 	return View::make('user_login');
	 }

	/* Process the login form
	 @return View
	*/
  
    public function postLogin(){

    	$credentials = Input::only('email','password');

    	# Check the database to see if the credentials entered matches the one in Users table
        if(Auth::attempt($credentials,$remember = true))
        {
           	 return Redirect::intended('/')->with('flash_message','Welcome Back '.Auth::user()->name);
        }
        else
        {
        	 return Redirect::to('/login')
        	                 ->with('flash_message','Login failed ;Please try again !')
        	                 ->withInput();
        }
    }
    /*Logout
	 @return Redirect
	*/
    public function getLogout(){

    	#Log out
    	Auth::logout();

    	#Redirect to Home page

    	return Redirect::to('/');


    }

}