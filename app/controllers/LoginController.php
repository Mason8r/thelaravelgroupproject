<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return View::make('login.login');
	}

	public function postLogin()
	{
		
        $credentials = array(
            'email'    => Input::get('email'),
            'password' => Input::get('password')
        );
 
        try
        {
            $user = Sentry::authenticate($credentials, false);
 
            if ($user)
            {
                return Redirect::route('user.home');
            }
            
        }
        catch(\Exception $e)
        {
            return Redirect::route('login')->withErrors(array('login' => $e->getMessage()));
        }
	}

	public function getLogout()
	{
		Sentry::logout();
    	
    	return Redirect::route('login')
    		->with('flash_notice', 'Good luck with those bets.');

    }


	/*
	public function getSocial()
	{
		try {
			Hybrid_Endpoint::process();
		}
		catch (Exception $e) {
			// redirect back to http://URL/social/
			return Redirect::route('hybridauth');
		}
		
		return;
	
		try {
			// create a HybridAuth object
			$socialAuth = new Hybrid_Auth(app_path() . '/config/hybridauth.php');
			// authenticate with Google
			$provider = $socialAuth->authenticate("twitter");
			// fetch user profile
			$userProfile = $provider->getUserProfile();
		}
	
		catch(Exception $e) {
			// exception codes can be found on HybBridAuth's web site
			return $e->getMessage();
		}

		// access user profile data
		echo "Connected with: <b>{$provider->id}</b><br />";
		echo "As: <b>{$userProfile->displayName}</b><br />";
		echo "<pre>" . print_r( $userProfile, true ) . "</pre><br />";

		// logout
		$provider->logout();
	}
	*/

}