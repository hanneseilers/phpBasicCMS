<!DOCTYPE HTML>

<?php
	# file-system config
	$content = "content/";
	$assets = "assets/";
	$includes = "includes/";
	$js = $includes."js/";
	$css = $includes."css/";
	$php = $includes."php/";
	
	include( $php."base.php" );	
?>

<html>
	<head>
	
		<?php get("header"); ?>
		
	</head>
	<body>
	
		<?php get( "nav" ); ?>

		<?php
		
			# get page content
			# following page specification is allowed:
			# <URL>?page=<PAGE>
			# <URL>?p=<PAGE>
			# <URL>?<PAGE>
			# where <URL> is the site url and <PAGE> the page name
			# if no page is selected. 'home' will be shown.
			$page = getPage( $_GET );
			if( $page ) get($page);
			else get( "home" );
			
		?>
		
		<?php get( "footer" ); ?>

	</body>
</htm
