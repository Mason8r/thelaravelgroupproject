<?php

//Default Menu
$default_links = array (
	'pages/about' => 'About',
	'pages/contact' => 'Contact',
	);

$menu = '';
foreach ($default_links as $uri => $name) {
	
	$menu .= '<li';
	
	if($uri==Request::path()) {
		
		$menu .= ' class="active">';

	} else {

		$menu .= '>';

	}

	$menu .= '<a href="'.url().'/'.$uri.'">'.$name.'</a></li>';

}

//User Menu
$user_links = array (
  'login' => 'Login',
  'user/signup' => 'Sign Up',
  );

$user_menu = '';

if(Sentry::check()) {
  //User is logged in
  $user_menu .= '<li><a href="'.url().'/user/home">'.Sentry::getUser()->first_name.' '.Sentry::getUser()->last_name.'</a></li>';
  $user_menu .= '<li><a href="'.url().'/login/logout">Logout</a></li>';

} else {
//User Needs to Login or Sign up
  foreach ($user_links as $uri => $name) {
    $user_menu .= '<li><a href="'.url().'/'.$uri.'">'.$name.'</a></li>';
  }

}

?>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url()}}">BetTrackr</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              {{$menu}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
              {{$user_menu}}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>