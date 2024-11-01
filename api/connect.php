<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){
class TopperSystemExecuteFileConnectRequest {
public static function runts(){
$contenuto_link_sito_send="
<html>
<head>
<title>Connect Topper System</title>
</head>
<body>
&nbsp;
</body>
</html>
";
$allowed_html_elenco_risorse=array(
	'title' => array(),
	'html' => array(),
	'head' => array(),
	'body' => array()
);									
echo wp_kses("$contenuto_link_sito_send", $allowed_html_elenco_risorse);
}
}
if(( current_user_can( 'administrator' ) )){
@add_action('init', @TopperSystemExecuteFileConnectRequest::runts(), 2);
}
}
}
}
?>