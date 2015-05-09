<?php
  $number = array('oh!', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
  $description = array (
    401 =>  "sorry, you need to authenticate<br />yourself first to access this page",
    403 =>  "sorry, I cannot show you a page<br />you have not been granted access to",
    404 =>  'sorry, that page doesn\'t<br />exist or has been moved',
    500 =>  "sorry,<br />the server failed to process this page"
  );
  if ( array_key_exists( $_GET["code"] , $description ) ) {
    $code = $_GET["code"];
  } else {
  	$code = '500';
  }
?>
<!doctype html>
<html>
  <head>
    <title>
    	<?php
	    	echo strtoupper(
	    					$number[ $code[ 0 ] ]
	    	. ' ' . $number[ $code[ 1 ] ]
	    	. ' ' . $number[ $code[ 2 ] ]
	    	);
    	?>
    </title>
    <meta name="robots" content="noindex">
    <style type="text/css">
      @font-face{
        font-family:'GothamBold';
        src:url("/gothambold.otf") format("opentype");
      }
      @font-face{
        font-family:'GothamLight';
        src:url("/gothamlight.otf") format("opentype");
      }
      body {
        font-family:"GothamBold";
        overflow: hidden;
        background: #f7f7f7;
        text-transform: uppercase;
      }
      .light {
        font-family:'GothamLight';
      }
      * {
        margin: 0;
        padding: 0;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      #main {
        display: block;
        width: 620px;
        height: 400px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -200px 0 0 -310px;
        text-align: center;
        color: #111;
      }
      .code {
        line-height: 1;
        font-size: 6em;
        margin-bottom: 0.2em;
      }
      .code p {
        line-height: 1em;
      }
      .small {
        font-size: 0.5em;
      }
      .line {
        margin: 2em;
        height: 2px;
        width: 100px;
        background-color: #111;
        display: inline-block;
      }
      a, a:hover, a:active, a:link {
        font-family: "GothamBold";
        text-decoration: none;
        color: #111;
      }
    </style>

  </head>
  <body>
    <div id="main">
      <div class="code">
        <p><?=$number[ $code[ 0 ] ]?></p>
        <p <?php if ( $code[ 2 ] != 0 )  echo 'class="small"' ?>><?=$number[ $code[ 1 ] ]?></p>
        <p <?php if ( $code[ 2 ] == 0 )  echo 'class="small"' ?>><?=$number[ $code[ 2 ] ]?></p>
      </div>
      <div class="description light">
      <?=$description[ $code ]?>
      </div>
      <div class="line"></div>
      <div class="description light">
        <a target="_blank" href="https://twitter.com/syn2cat">contact us</a><br />if you think this is a mistake
      </div>
    </div>
  </body>
</html>
