<?php
if ( ( defined( 'TOPPERSYSTEM_PLUGIN_BASENAME' ) ) && ( defined( 'TOPPERSYSTEM_PLUGIN_DIRECTORY' ) ) ){

class TopperSystemSetFunctionUploadTransistor {
    public static function extractstringa_toppersystem($stringa, $inizio, $fine) {
	    $stringa_confronta_inizio=str_replace("$inizio","",$stringa);
	    $stringa_confronta_fine=str_replace("$fine","",$stringa);
	    
	    if(($stringa_confronta_inizio != "$stringa")&&($stringa_confronta_fine != "$stringa")){
		    $stringa = " ".$stringa;
		    $ini = strpos($stringa, $inizio);
		    if ($ini == 0) return "";
		    $ini += strlen($inizio);
		    $len = strpos($stringa, $fine, $ini) - $ini;
		    $stringa_restituisci=substr($stringa, $ini, $len);
	    }else{
		    $stringa_restituisci="";
	    }
	    
	    unset($stringa);
	    unset($inizio);
	    unset($fine);
	    unset($stringa_confronta_inizio);
	    unset($stringa_confronta_fine);
	    unset($ini);
	    unset($len);
	    return $stringa_restituisci;
    }
}

class TopperSystemRunUpdatePlugin {
public static function toppersystemrun(){  
    add_action( 'upgrader_process_complete', function( $upgrader_object, $options ){
            $our_plugin = TOPPERSYSTEM_PLUGIN_BASENAME;
            if( $options['action'] == 'update' && $options['type'] == 'plugin' && isset( $options['plugins'] ) ) {
                foreach( $options['plugins'] as $plugin ) {
                    if( $plugin == $our_plugin ) {                        

                        $upload_dir=str_replace("\\","/",wp_upload_dir()['basedir']);
                        $save_dir=str_replace("\\","/",TOPPERSYSTEM_PLUGIN_DIRECTORY);                    

                        if(file_exists($upload_dir."/toppersystem/nosql/api/par_service.php")){
                            $content_file=@file_get_contents($upload_dir."/toppersystem/nosql/api/par_service.php");                            

                            $get_css_status_co2applicationts=trim(TopperSystemSetFunctionUploadTransistor::extractstringa_toppersystem("$content_file", "\$par_status_co2applicationts_toppersystem=\"", "\";"));
                            $get_js_status_lazyloadingts=trim(TopperSystemSetFunctionUploadTransistor::extractstringa_toppersystem("$content_file", "\$par_status_lazyloadingts_toppersystem=\"", "\";"));
                            $get_status_prtoppersystemts=trim(TopperSystemSetFunctionUploadTransistor::extractstringa_toppersystem("$content_file", "\$par_status_prtoppersystemts_toppersystem=\"", "\";"));
                            $get_status_prttimesautoupdate_spider_ts=trim(TopperSystemSetFunctionUploadTransistor::extractstringa_toppersystem("$content_file", "\$par_get_timesautoupdate_spider_toppersystem=\"", "\";"));
                            $get_status_prttimesautoupdate_user_ts=trim(TopperSystemSetFunctionUploadTransistor::extractstringa_toppersystem("$content_file", "\$par_get_timesautoupdate_user_toppersystem=\"", "\";"));


                            if(($get_css_status_co2applicationts == "left")||($get_css_status_co2applicationts == "right")){
                                if(file_exists($save_dir."/css/loader.css")){
                                    $content_file_co2applicationts=@file_get_contents($save_dir."/css/loader.css");
                                    $new_content_file_co2applicationts=str_replace("right:0.2em;","$get_css_status_co2applicationts:0.2em;",$content_file_co2applicationts);
                                    if((trim($content_file_co2applicationts) != "")&&(trim($content_file_co2applicationts) != "$new_content_file_co2applicationts")){
                                        chmod($save_dir."/css/loader.css",0644);
                                        $textfilex=fopen($save_dir."/css/loader.css", "w");
                                        $scrivix="$new_content_file_co2applicationts";        
                                        fwrite($textfilex,$scrivix);
                                        fclose($textfilex);
                                    }
                                }
                            }

                            if(($get_js_status_lazyloadingts == "low")||($get_js_status_lazyloadingts == "medium")||($get_js_status_lazyloadingts == "hight")){
                                if(file_exists($save_dir."/js/lazyloading_ts.js")){
                                    $content_file_lazyloading_ts=@file_get_contents($save_dir."/js/lazyloading_ts.js");
                                    $new_content_file_lazyloading_ts=str_replace(array("startlazy_ts(\"hight\")", "startlazy_ts(\"medium\")", "startlazy_ts(\"low\")"),"startlazy_ts(\"$get_js_status_lazyloadingts\")",$content_file_lazyloading_ts);
                                    if((trim($content_file_lazyloading_ts) != "")&&(trim($content_file_lazyloading_ts) != "$new_content_file_lazyloading_ts")){
                                        chmod($save_dir."/js/lazyloading_ts.js",0644);
                                        $textfilex=fopen($save_dir."/js/lazyloading_ts.js", "w");
                                        $scrivix="$new_content_file_lazyloading_ts";        
                                        fwrite($textfilex,$scrivix);
                                        fclose($textfilex);
                                    }
                                }

                                if(file_exists($save_dir."/js/smartlazyloading_ts.js")){
                                    $content_file_smartlazyloading_ts=@file_get_contents($save_dir."/js/smartlazyloading_ts.js");
                                    $new_content_file_smartlazyloading_ts=str_replace(array("startlazy_ts(\"hight\")", "startlazy_ts(\"medium\")", "startlazy_ts(\"low\")"),"startlazy_ts(\"$get_js_status_lazyloadingts\")",$content_file_smartlazyloading_ts);
                                    if((trim($content_file_smartlazyloading_ts) != "")&&(trim($content_file_smartlazyloading_ts) != "$new_content_file_smartlazyloading_ts")){
                                        chmod($save_dir."/js/smartlazyloading_ts.js",0644);
                                        $textfilex=fopen($save_dir."/js/smartlazyloading_ts.js", "w");
                                        $scrivix="$new_content_file_smartlazyloading_ts";        
                                        fwrite($textfilex,$scrivix);
                                        fclose($textfilex);
                                    }
                                }
                            }

                            if($get_status_prtoppersystemts == ""){
                                if(trim($content_file) != ""){
                                    $get_status_prtoppersystemts=site_url();
                                    if(str_replace("par_status_prtoppersystemts_toppersystem","",$content_file) == "$content_file"){     
                                        $new_content_file_prtoppersystemts=str_replace("?>","\$par_status_prtoppersystemts_toppersystem=\"$get_status_prtoppersystemts\";\n"."?>",$content_file);
                                        if($new_content_file_prtoppersystemts != "$content_file"){
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0644);
                                            $textfilex=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                            $scrivix="$new_content_file_prtoppersystemts";        
                                            fwrite($textfilex,$scrivix);
                                            fclose($textfilex);
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                        }
                                    }else{
                                        $new_content_file_prtoppersystemts=str_replace("par_status_prtoppersystemts_toppersystem=\"\";","par_status_prtoppersystemts_toppersystem=\"$get_status_prtoppersystemts\";",$content_file);
                                        if($new_content_file_prtoppersystemts != "$content_file"){
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0644);
                                            $textfilex=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                            $scrivix="$new_content_file_prtoppersystemts";        
                                            fwrite($textfilex,$scrivix);
                                            fclose($textfilex);
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                        }                                        
                                    }
                                }
                            }

                            if($get_status_prttimesautoupdate_spider_ts == ""){
                                if(trim($content_file) != ""){
                                    $get_status_prttimesautoupdate_spider_ts="3600";
                                    if(str_replace("par_get_timesautoupdate_spider_toppersystem","",$content_file) == "$content_file"){     
                                        $new_content_file_prttimesautoupdate_spider_ts=str_replace("?>","\$par_get_timesautoupdate_spider_toppersystem=\"$get_status_prttimesautoupdate_spider_ts\";\n"."?>",$content_file);
                                        if($new_content_file_prttimesautoupdate_spider_ts != "$content_file"){
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0644);
                                            $textfilex=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                            $scrivix="$new_content_file_prttimesautoupdate_spider_ts";        
                                            fwrite($textfilex,$scrivix);
                                            fclose($textfilex);
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                        }
                                    }else{
                                        $new_content_file_prttimesautoupdate_spider_ts=str_replace("par_get_timesautoupdate_spider_toppersystem=\"\";","par_get_timesautoupdate_spider_toppersystem=\"$get_status_prttimesautoupdate_spider_ts\";",$content_file);
                                        if($new_content_file_prttimesautoupdate_spider_ts != "$content_file"){
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0644);
                                            $textfilex=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                            $scrivix="$new_content_file_prttimesautoupdate_spider_ts";        
                                            fwrite($textfilex,$scrivix);
                                            fclose($textfilex);
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                        }                                        
                                    }
                                }
                            }
                            if($get_status_prttimesautoupdate_user_ts == ""){
                                if(trim($content_file) != ""){
                                    $get_status_prttimesautoupdate_user_ts="600";
                                    if(str_replace("par_get_timesautoupdate_user_toppersystem","",$content_file) == "$content_file"){     
                                        $new_content_file_prttimesautoupdate_user_ts=str_replace("?>","\$par_get_timesautoupdate_user_toppersystem=\"$get_status_prttimesautoupdate_user_ts\";\n"."?>",$content_file);
                                        if($new_content_file_prttimesautoupdate_user_ts != "$content_file"){
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0644);
                                            $textfilex=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                            $scrivix="$new_content_file_prttimesautoupdate_user_ts";        
                                            fwrite($textfilex,$scrivix);
                                            fclose($textfilex);
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                        }
                                    }else{
                                        $new_content_file_prttimesautoupdate_user_ts=str_replace("par_get_timesautoupdate_user_toppersystem=\"\";","par_get_timesautoupdate_user_toppersystem=\"$get_status_prttimesautoupdate_user_ts\";",$content_file);
                                        if($new_content_file_prttimesautoupdate_user_ts != "$content_file"){
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0644);
                                            $textfilex=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                            $scrivix="$new_content_file_prttimesautoupdate_user_ts";        
                                            fwrite($textfilex,$scrivix);
                                            fclose($textfilex);
                                            chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                        }                                        
                                    }
                                }
                            }
                        }
                    }
                }
            }
    }, 10, 2);

}
}
TopperSystemRunUpdatePlugin::toppersystemrun();
}
?>