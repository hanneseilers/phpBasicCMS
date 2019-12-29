<!DOCTYPE HTML>

<?php
	# file-system config
	$content = "content/";
	$assests = "assets/";
	$includes = "includes/";
	$js = $includes."js/";
	$css = $includes."cs/";
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
			get("home");
		?>
		
		<?php get( "footer" ); ?>

	</body>
</htm
