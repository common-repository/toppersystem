<?php
/**
 * Trigger this file on plugin uninstall
 *
 * @package TopperSystem[*]
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

class TopperSystemSetFunctionDeletePlugin {
    public static function leggiDir (&$list, $dir)
    {
        if(is_dir($dir)){
		    if (($hdir = opendir ($dir)) !== FALSE)
		    {
			    while (($name = readdir ($hdir)) !== FALSE)
			    {
				    if ($name != "." && $name != "..")
				    {
					    $fullname = ($dir . "/" . $name);					    
					    array_push ($list, $fullname);
					    if (is_dir ($fullname)){
						    TopperSystemSetFunctionDeletePlugin::leggiDir ($list, $fullname);
					    }
				    }				    
				    $name="";
				    $fullname="";
			    }
			    closedir ($hdir);
		    }
	    }	    
	    $dir="";
	    $hdir="";
    }

    public static function extract_file_nelle_directory($directory){	    
	    $conta_occorrenze=0;	    
		$lista_trovati = array('lista_trovati' => null);
		$lista_path = array('lista_path' => null);		    
		TopperSystemSetFunctionDeletePlugin::leggiDir ($lista_path, $directory);
		foreach ($lista_path as $path)
		{
            if(file_exists($path)){			    
			    $lista_trovati[$conta_occorrenze]=$path;
			    $conta_occorrenze++;		    			
            }
            $path="";
		}	    
	    if($conta_occorrenze == "0"){
		    $return=0;
	    }else{
		    $return=$lista_trovati;
	    }
	    $directory="";
	    $conta_occorrenze="";
	    if(is_array($lista_trovati)){$lista_trovati = array();}
	    if(is_array($lista_path)){$lista_path = array();}
	    return $return;
    }

}

class TopperSystemRunDeletePlugin {
public static function toppersystemrun(){
        $upload_dir=str_replace("\\","/",wp_upload_dir()['basedir']);

        if(file_exists($upload_dir."/toppersystem/nosql/api")){
            $array_lista_file_api=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/api");
            if($array_lista_file_api != "0"){ 
                for($i=0;$i<=count($array_lista_file_api);$i++){
                    if((isset($array_lista_file_api[$i]))&&(trim($array_lista_file_api[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_api[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/nosql/api/".$name_filepath,0644);
                            @unlink($filepath);     
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_api=array();
            }
            if (is_dir($upload_dir."/toppersystem/nosql/api")) {
                @rmdir($upload_dir."/toppersystem/nosql/api");
            }
        }

        if(file_exists($upload_dir."/toppersystem/nosql/db")){
            $array_lista_file_db=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/db");
            if($array_lista_file_db != "0"){ 
                for($i=0;$i<=count($array_lista_file_db);$i++){
                    if((isset($array_lista_file_db[$i]))&&(trim($array_lista_file_db[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_db[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/nosql/db/".$name_filepath,0644);
                            @unlink($filepath);     
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_db=array();
            }
            if (is_dir($upload_dir."/toppersystem/nosql/db")) {
                @rmdir($upload_dir."/toppersystem/nosql/db");
            }
        }

        if(file_exists($upload_dir."/toppersystem/nosql/log")){
            $array_lista_file_log=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/log");
            if($array_lista_file_log != "0"){ 
                for($i=0;$i<=count($array_lista_file_log);$i++){
                    if((isset($array_lista_file_log[$i]))&&(trim($array_lista_file_log[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_log[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/nosql/log/".$name_filepath,0644);
                            @unlink($filepath);        
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_log=array();
            }
            if (is_dir($upload_dir."/toppersystem/nosql/log")) {
                @rmdir($upload_dir."/toppersystem/nosql/log");
            }
        }

        if(file_exists($upload_dir."/toppersystem/nosql/img")){
            $array_lista_file_img=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/img");
            if($array_lista_file_img != "0"){ 
                for($i=0;$i<=count($array_lista_file_img);$i++){
                    if((isset($array_lista_file_img[$i]))&&(trim($array_lista_file_img[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_img[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/nosql/img/".$name_filepath,0644);
                            @unlink($filepath);     
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_img=array();
            }
            if (is_dir($upload_dir."/toppersystem/nosql/img")) {
                @rmdir($upload_dir."/toppersystem/nosql/img");
            }
        }

        if(file_exists($upload_dir."/toppersystem/nosql/assets")){
            $array_lista_file_assets=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/assets");
            if($array_lista_file_assets != "0"){ 
                for($i=0;$i<=count($array_lista_file_assets);$i++){
                    if((isset($array_lista_file_assets[$i]))&&(trim($array_lista_file_assets[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_assets[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/nosql/assets/".$name_filepath,0644);
                            @unlink($filepath);     
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_assets=array();
            }
            if (is_dir($upload_dir."/toppersystem/nosql/assets")) {
                @rmdir($upload_dir."/toppersystem/nosql/assets");
            }
        }

        if(file_exists($upload_dir."/toppersystem/nosql/download")){
            $array_lista_file_download=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/download");
            if($array_lista_file_download != "0"){ 
                for($i=0;$i<=count($array_lista_file_download);$i++){
                    if((isset($array_lista_file_download[$i]))&&(trim($array_lista_file_download[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_download[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/nosql/download/".$name_filepath,0644);
                            @unlink($filepath);     
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_download=array();
            }
            if (is_dir($upload_dir."/toppersystem/nosql/download")) {
                @rmdir($upload_dir."/toppersystem/nosql/download");
            }
        }

        if (is_dir($upload_dir."/toppersystem/nosql")) {
            @rmdir($upload_dir."/toppersystem/nosql");
        }

        if(file_exists($upload_dir."/toppersystem/api")){
            $array_lista_file_api=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/api");
            if($array_lista_file_api != "0"){ 
                for($i=0;$i<=count($array_lista_file_api);$i++){
                    if((isset($array_lista_file_api[$i]))&&(trim($array_lista_file_api[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_api[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/api/".$name_filepath,0644);
                            @unlink($filepath);     
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_api=array();
            }
            if (is_dir($upload_dir."/toppersystem/api")) {
                @rmdir($upload_dir."/toppersystem/api");
            }
        }

        if(file_exists($upload_dir."/toppersystem/db")){
            $array_lista_file_db=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/db");
            if($array_lista_file_db != "0"){ 
                for($i=0;$i<=count($array_lista_file_db);$i++){
                    if((isset($array_lista_file_db[$i]))&&(trim($array_lista_file_db[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_db[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/db/".$name_filepath,0644);
                            @unlink($filepath);     
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_db=array();
            }
            if (is_dir($upload_dir."/toppersystem/db")) {
                @rmdir($upload_dir."/toppersystem/db");
            }
        }

        if(file_exists($upload_dir."/toppersystem/log")){
            $array_lista_file_log=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/log");
            if($array_lista_file_log != "0"){ 
                for($i=0;$i<=count($array_lista_file_log);$i++){
                    if((isset($array_lista_file_log[$i]))&&(trim($array_lista_file_log[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_log[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/log/".$name_filepath,0644);
                            @unlink($filepath);        
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_log=array();
            }
            if (is_dir($upload_dir."/toppersystem/log")) {
                @rmdir($upload_dir."/toppersystem/log");
            }
        }

        if(file_exists($upload_dir."/toppersystem/img")){
            $array_lista_file_img=TopperSystemSetFunctionDeletePlugin::extract_file_nelle_directory($upload_dir."/toppersystem/img");
            if($array_lista_file_img != "0"){ 
                for($i=0;$i<=count($array_lista_file_img);$i++){
                    if((isset($array_lista_file_img[$i]))&&(trim($array_lista_file_img[$i]) != "")){
                        $filepath=str_replace("\\","/",trim($array_lista_file_img[$i]));
                        $name_filepath=end(explode('/',$filepath));
                        if(file_exists($filepath)){
                            chmod($upload_dir."/toppersystem/img/".$name_filepath,0644);
                            @unlink($filepath);     
                        }
                        $filepath=""; 
                        $name_filepath="";
                    }
                }
                $array_lista_file_img=array();
            }
            if (is_dir($upload_dir."/toppersystem/img")) {
                @rmdir($upload_dir."/toppersystem/img");
            }
        }

        if (is_dir($upload_dir."/toppersystem")) {
            @rmdir($upload_dir."/toppersystem");
        }

    }

}
TopperSystemRunDeletePlugin::toppersystemrun();