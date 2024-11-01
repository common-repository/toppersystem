<?php
if(str_replace("\\","",__DIR__) != __DIR__){
    $hu="\minify\JSMin.php";
    $pathfileminifyjs=str_replace("toppersystem\api","toppersystem",__DIR__).$hu;
}else{
    $hu="/minify/JSMin.php";
    $pathfileminifyjs=str_replace("toppersystem/api","toppersystem",__DIR__).$hu;
}
include($pathfileminifyjs);
?>