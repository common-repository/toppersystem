<?php
class TopperSystemAuthTS {
public static function AuthTopperSystem(){
    if(file_exists(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/private.php")){
        include(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/private.php");
    }else{
        $toppersystemapikeysecretsite="";
    }
    return "$toppersystemapikeysecretsite";
}

public static function AuthCodeTopperSystem($string){

    if((isset($_SERVER["REMOTE_ADDR"]))&&(trim($_SERVER["REMOTE_ADDR"]) != "")){
		if((isset($_SERVER["HTTP_USER_AGENT"]))&&(trim($_SERVER["HTTP_USER_AGENT"]) != "")){
            if(( current_user_can( 'administrator' ) )){
                if(defined('ABSPATH')){
                    $return=TopperSystemAuthTS::AuthTopperSystem()."$string"; 
                }else{
                    $return=""; 
                }
            }else{
                $return=""; 
            }
        }else{
            $return=""; 
        }    
    }else{
        $return=""; 
    }
    return "$return";
}
}
?>