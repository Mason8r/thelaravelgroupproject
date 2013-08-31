<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BetTrackr - Track bets with friends">
    <meta name="author" content="BetTrackr Team">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>BetTrackr</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!--FontAwesome-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<style>
/* Sticky footer styles
-------------------------------------------------- */

html,
body {
  height: 100%;
  /* The html and body elements cannot have any padding or margin. */
}

/* Wrapper for page content to push down footer */
#wrap {
  min-height: 100%;
  height: auto !important;
  height: 100%;
  /* Negative indent footer by its height */
  margin: 0 auto -60px;
  /* Pad bottom by footer height */
  padding: 60px 0 60px;
}

/* Set the fixed height of the footer here */
#footer {
  height: 60px;
}

</style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Wrap all page content here -->
    <div id="wrap">

@include('templates.menu')

      <div class="container">
        <div class="page-header">
           <h1>BetTrackr</h1>
        </div>


    <div class="row">
        <div class="col-xs-12 col-md-12">
        	<!--CONTENT-->
        	@yield('content')
        </div>
     </div>

      <hr />

      <!--<div class="row">
        <div class="col-xs-12 col-md-4">
          <p>Side Bar</p>
        </div>
        <div class="col-xs-12 col-md-8">
          <p>Content</p>
        </div>
      </div>-->

      </div><!--Ends Container-->

    </div><!--Ends Wrap-->

    <div id="footer">
      <div class="container container-footer">
        <p class="text-muted credit">BetTrackr</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
