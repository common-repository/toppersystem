<?php
if(str_replace("\\","",__DIR__) != __DIR__){
    $hu="\minify\Compressor.php";
    $pathfileminifycss=str_replace("toppersystem\api","toppersystem",__DIR__).$hu;
}else{
    $hu="/minify/Compressor.php";
    $pathfileminifycss=str_replace("toppersystem/api","toppersystem",__DIR__).$hu;
}
include($pathfileminifycss);
?>