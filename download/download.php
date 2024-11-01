<?php
ini_set('memory_limit', '-1');
ini_set('default_charset', 'UTF-8');
ini_set('allow_url_fopen', 'On');
set_time_limit (32);

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 
include("../api/loadclass.php");
class TopperSystemExecuteFiledownload {
public static function runts(){
if(isset($_SERVER["HTTP_REFERER"])){
$paginaprovenienzatuscaningcom=$_SERVER["HTTP_REFERER"];
}else{
$paginaprovenienzatuscaningcom="";
}

$paginaprovenienzatuscaningcom_controllo=str_replace($_SERVER['SERVER_NAME'],"",$paginaprovenienzatuscaningcom);
if(($paginaprovenienzatuscaningcom != "$paginaprovenienzatuscaningcom_controllo")){


if(str_replace("\\","",__DIR__) != __DIR__){
    $hu="\download\mytransactions.txt";
    $pathfilemytransactions=str_replace("toppersystem\download","toppersystem",__DIR__).$hu;
}else{
    $hu="/download/mytransactions.txt";
    $pathfilemytransactions=str_replace("toppersystem/download","toppersystem",__DIR__).$hu;
}
$file="mytransactions.txt";

if(file_exists($pathfilemytransactions)){

$zip = new ZipArchive;
if ($zip->open($pathfilemytransactions.'.zip', ZipArchive::CREATE) === TRUE)
{
    // Add files to the zip file
    $zip->addFile($file);
 
    // All files are added, so close the zip file.
    $zip->close();
}

header("Content-Disposition: attachment; filename=\"$file.zip\"");
readfile($pathfilemytransactions.'.zip');

unlink($pathfilemytransactions.".zip");
unlink($pathfilemytransactions);	

}
}
}
}
if(( current_user_can( 'administrator' ) )){
@add_action('init', @TopperSystemExecuteFiledownload::runts(), 2);
}
?>