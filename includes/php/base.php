<?php
	# ---- Error Codes ----
	$err_404 = "Die Seite wurde nicht gefunden.";
	
	# Shows an error
	# $err:		Error text to show
	# $data:	Optional string data to show
	function err($err, $data=""){
		print "# ".$err."<br />";
		if( strlen($data) > 0 ) print " - ".$data."</br >";
	}
	
	# ---- String Functions ----
	
	# Checks if string starts with substring
	# $str:		String to check
	# $sub:		Substring to check for
	# return:	true if $sub is at beginning of $str, false otherwise
	function startsWith( $str, $sub ) {
		return ( substr( $str, 0, strlen( $sub ) ) === $sub );
	}
	
	# Checks if string ends with substring
	# $str:		String to check
	# $sub:		Substring to check for
	# return:	true if $sub is at ends of $str, false otherwise
	function endsWith( $str, $sub ) {
		return ( substr( $str, strlen( $str ) - strlen( $sub ) ) === $sub );
	}
	
	# Adds extension to url, if not already there
	# $url:		URL to check and add extension
	# $ext:		Extension to add [default: ".php"]
	# return:	$url with extension $ext
	function addExtension($url, $ext=".php"){
		if( endsWith($url, $ext) ){
			return $url;
		}
		
		return $url.$ext;
	}
	
	
	# ---- Content Include Functions ----
	
	# Includes and shows a content site from global $content path
	# $site:	Site name or file to include
	function get($site){
		global $content, $err_404;
		$url = $content.$site;
		$url = addExtension($url);
		
		if( file_exists($url) ) include( $url );
		else err( $err_404, $url );
	}
	
	# Includes and shows a js file from global $js path
	# $site:	Js name or file to include
	function getJs($site){
		global $js, $err_404;
		$url = $js.$site;
		$url = addExtension($url, ".js");
		
		if( file_exists($url) ) include( $url );
		else err( $err_404, $url );
	}
	
	# Includes and shows a css site from global $css path
	# $site:	Css name or file to include
	function getCss($site){
		global $css, $err_404;
		$url = $css.$site;
		$url = addExtension($url, ".css");
		
		if( file_exists($url) ) include( $url );
		else err( $err_404, $url );
	}
	
	# Shows the link to an assets content from global $assets path
	# $data:		Data file to print link
	function src($data){
		global $assets;
		$url = $assets.$data;
		
		if( file_exists($url) ) print( $url );
		else print "error";
	}
