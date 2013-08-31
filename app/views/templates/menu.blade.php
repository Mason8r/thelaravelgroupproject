<?php

//Menu
$default_links = array (
	'login' => 'Login',
	'static/about' => 'About',
	'static/contact' => 'Contact',
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
              <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Option 1</a></li>
                  <li><a href="#">Option 2</a></li>
                  <li><a href="#">Option 3</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Divider</li>
                  <li><a href="#">Second 1</a></li>
                  <li><a href="#">Second 2</a></li>
                </ul>
              </li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>