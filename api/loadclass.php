<?php
class TopperSystemStartIstance {
	public static function detect_path(){
		if(file_exists('../'.'../'.'../'.'../'.'w'.'p'.'-'.'l'.'o'.'a'.'d.'.'p'.'h'.'p')){
			return "../"."../"."../"."../";
		}else{			
			$path="../../";
			for($i=2;$i<=count(explode("/",str_replace("\\","/",__DIR__)));$i++){
				if(file_exists($path.'w'.'p'.'-'.'l'.'o'.'a'.'d.'.'p'.'h'.'p')){
					return $path;
				}
				$path.="../";
			}			
		}
		return false;
	}
}
if(str_replace(array("/toppersystem/api/", "/toppersystem/aspmts/", "/toppersystem/co2/", "/toppersystem/download/", "/toppersystem/image/", "/toppersystem/minify/", "/toppersystem/js/"),"",$_SERVER["REQUEST_URI"]) != $_SERVER["REQUEST_URI"]){
require_once(TopperSystemStartIstance::detect_path().'w'.'p'.'-'.'l'.'o'.'a'.'d.'.'p'.'h'.'p');
}
?>