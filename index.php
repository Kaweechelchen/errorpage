<?php
	$code = $_GET["code"];
	$number = array('oh!', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
	$description = array (
		401	=>	"of something you cannot see<br />because you are not logged in",
		403	=>	"of something you should<br />probably not be looking for",
		404	=>	'sorry, that page doesn\'t<br />exist or has been moved',
		500	=>	"of something that cannot be shown<br />because the server failed to process it"
	);
?>
<!doctype html>
<html>
	<head>
		<title>Error <?php echo $_GET["code"]?></title>
		<meta name="robots" content="noindex">
		<style type="text/css">@font-face{font-family:GothamBold;src:url(gothambold.otf) format("opentype")}@font-face{font-family:GothamLight;src:url(gothamlight.otf) format("opentype")}body{font-family:GothamBold;overflow:hidden;background:#f7f7f7;text-transform:uppercase}.light{font-family:GothamLight}*{margin:0;padding:0;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}#main{display:block;width:620px;height:400px;position:absolute;top:50%;left:50%;margin:-200px 0 0 -310px;text-align:center;color:#111}.code{line-height:1;font-size:6em}.code p{line-height:1em}.code p:nth-child(2){font-size:.5em}.line{margin:2em;height:2px;width:100px;background-color:#111;display:inline-block}a,a:active,a:hover,a:link{font-family:GothamBold;text-decoration:none;color:#111}</style>
	</head>
	<body>
		<div id="main">
			<div class="code">
				<p><?=$number[ $code[ 0 ] ]?></p>
				<p <? if ( $code[ 2 ] != 0 )  echo 'class="small"' ?>><?=$number[ $code[ 1 ] ]?></p>
				<p <? if ( $code[ 2 ] == 0 )  echo 'class="small"' ?>><?=$number[ $code[ 2 ] ]?></p>
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