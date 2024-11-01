<?php
if ( ( defined( 'TOPPERSYSTEM_PLUGIN_BASENAME' ) ) && ( defined( 'TOPPERSYSTEM_PLUGIN_DIRECTORY' ) ) ){

class TopperSystemSetFunctionAssetstsTransistor {
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

    public static function get_css_status_co2applicationts($fileCssLoaderl_ts) {
        $return="";
        if($fileCssLoaderl_ts != ""){
            $look_form=0;
            if(file_exists($fileCssLoaderl_ts)){
	            
	            $handle_cssloader = fopen($fileCssLoaderl_ts, "r");
	            if (FALSE === $handle_cssloader) {
		            $cssloader_toppersystem="";
	            }else{
		            $cssloader_toppersystem = '';
		            while (!feof($handle_cssloader)) {
			            $cssloader_toppersystem .= fread($handle_cssloader, 8192);
		            }
		            fclose($handle_cssloader);
	            }
	            unset($handle_cssloader);
	            if(trim($cssloader_toppersystem) != ""){
		            $css_prel_part1=TopperSystemSetFunctionAssetstsTransistor::extractstringa_toppersystem($cssloader_toppersystem, '.co2ts{', '}');
		            $css_prel_part2=TopperSystemSetFunctionAssetstsTransistor::extractstringa_toppersystem($cssloader_toppersystem, '.co2tsresult{', '}');
		            if((str_replace(array(";left:", ";right:"),"",$css_prel_part1) != $css_prel_part1)&&(str_replace(array(";left:", ";right:"),"",$css_prel_part2) != $css_prel_part2)){
			            if(str_replace(";right:","",$css_prel_part1) != $css_prel_part1){
				            $extract_pos_css_prel_part1="right";
			            }else if(str_replace(";left:","",$css_prel_part1) != $css_prel_part1){
				            $extract_pos_css_prel_part1="left";
			            }else{
				            $extract_pos_css_prel_part1="";
			            }
			            
			            if(str_replace(";right:","",$css_prel_part2) != $css_prel_part2){
				            $extract_pos_css_prel_part2="right";
			            }else if(str_replace(";left:","",$css_prel_part2) != $css_prel_part2){
				            $extract_pos_css_prel_part2="left";
			            }else{
				            $extract_pos_css_prel_part2="";
			            }
			            
			            if((($extract_pos_css_prel_part1 != "")&&($extract_pos_css_prel_part2 != ""))&&($extract_pos_css_prel_part1 == "$extract_pos_css_prel_part2")){

				            if($extract_pos_css_prel_part1 == "right"){
					            $check_right="1";
					            $check_left="";
					            $new_css_prel_part1=str_replace(";right:",";left:",$css_prel_part1);
					            $new_cssloader_toppersystem=str_replace("$css_prel_part1","$new_css_prel_part1",$cssloader_toppersystem);
					            $new_css_prel_part2=str_replace(";right:",";left:",$css_prel_part2);
					            $new_cssloader_toppersystem=str_replace("$css_prel_part2","$new_css_prel_part2",$new_cssloader_toppersystem);
				            }else if($extract_pos_css_prel_part1 == "left"){
					            $check_right="";
					            $check_left="1";
					            $new_css_prel_part1=str_replace(";left:",";right:",$css_prel_part1);
					            $new_cssloader_toppersystem=str_replace("$css_prel_part1","$new_css_prel_part1",$cssloader_toppersystem);
					            $new_css_prel_part2=str_replace(";left:",";right:",$css_prel_part2);
					            $new_cssloader_toppersystem=str_replace("$css_prel_part2","$new_css_prel_part2",$new_cssloader_toppersystem);
				            }else{
					            $check_right="";
					            $check_left="";
					            $new_cssloader_toppersystem="";
				            }
				            
				            if(($check_right != "")||($check_left != "")){
					            if(($check_right == "1")||($check_left == "1")){
                                    $look_form++;
					            }
				            }

			            }
		            }
	            }
            }

            if($look_form == "0"){
	            #$return="";
            }else{
	            if(($new_cssloader_toppersystem != "")&&($new_cssloader_toppersystem != "$cssloader_toppersystem")){		
		            $return="$extract_pos_css_prel_part1";
	            }else{
		            $return="";
	            }
            }
        }               
        return "$return";
    }

    public static function get_js_status_lazyloadingts($fileJSlazyloading_ts) {
        $return="";
        if($fileJSlazyloading_ts != ""){
            if(file_exists($fileJSlazyloading_ts)){
	            $handle_jslazyloading = fopen($fileJSlazyloading_ts, "r");
	            if (FALSE === $handle_jslazyloading) {
		            $jslazyloading_toppersystem="";
	            }else{
		            $jslazyloading_toppersystem = '';
		            while (!feof($handle_jslazyloading)) {
			            $jslazyloading_toppersystem .= fread($handle_jslazyloading, 8192);
		            }
		            fclose($handle_jslazyloading);
	            }
	            unset($handle_jslazyloading);	
	            $new_jslazyloading_toppersystem="";
	            if(trim($jslazyloading_toppersystem) != ""){
		            if(str_replace(array("startlazy_ts(\"hight\")", "startlazy_ts(\"medium\")", "startlazy_ts(\"low\")"),"",$jslazyloading_toppersystem) != "$jslazyloading_toppersystem"){

			            if(str_replace(array("startlazy_ts(\"hight\")"),"",$jslazyloading_toppersystem) != "$jslazyloading_toppersystem"){
				            $return="hight";
			            }else if(str_replace(array("startlazy_ts(\"medium\")"),"",$jslazyloading_toppersystem) != "$jslazyloading_toppersystem"){
				            $return="medium";
			            }else if(str_replace(array("startlazy_ts(\"low\")"),"",$jslazyloading_toppersystem) != "$jslazyloading_toppersystem"){
				            $return="low";
			            }else{
				            $return="";
			            }
			            
		            }
	            }
            }
        }
        return "$return";
    }
}

class TopperSystemRunAssetstsPlugin {
public static function toppersystemrun(){
    add_action('init', function(){
        if(( current_user_can( 'administrator' ) )){

                $upload_dir=TOPPERSYSTEM_UPLOAD_FILES_NOSQL;
                if(!file_exists($upload_dir."/toppersystem/nosql")){

                    $plugin_dir=str_replace("\\","/",TOPPERSYSTEM_PLUGIN_DIRECTORY);             

                    if(!file_exists($upload_dir."/toppersystem")){
                        wp_mkdir_p($upload_dir."/toppersystem");
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql")){
                        wp_mkdir_p($upload_dir."/toppersystem/nosql");
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/api")){
                        wp_mkdir_p($upload_dir."/toppersystem/nosql/api");
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/db")){
                        wp_mkdir_p($upload_dir."/toppersystem/nosql/db");
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/log")){
                        wp_mkdir_p($upload_dir."/toppersystem/nosql/log");
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/img")){
                        wp_mkdir_p($upload_dir."/toppersystem/nosql/img");
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/assets")){
                        wp_mkdir_p($upload_dir."/toppersystem/nosql/assets");
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/download")){
                        wp_mkdir_p($upload_dir."/toppersystem/nosql/download");
                    }

                    if(file_exists($plugin_dir."/api")){
                        if(file_exists($plugin_dir."/api/toppersystem.php")){
                            $content_upgrade_file=trim(@file_get_contents($plugin_dir."/api/toppersystem.php"));
                            if(($content_upgrade_file != "")&&(str_replace("return","",$content_upgrade_file) != "$content_upgrade_file")){
                                if(!file_exists($upload_dir."/toppersystem/nosql/api/private.php")){
                                    $auth_memory=trim(TopperSystemSetFunctionAssetstsTransistor::extractstringa_toppersystem("$content_upgrade_file", "return \"", "\";"));
                                    if(strlen($auth_memory) == "32"){
                                        $textfilex=fopen($upload_dir."/toppersystem/nosql/api/private.php", "w");
                                        $scrivix="<?php\n\$toppersystemapikeysecretsite=\"$auth_memory\";\n?>";            
                                        fwrite($textfilex,$scrivix);
                                        fclose($textfilex);
                                        chmod($upload_dir."/toppersystem/nosql/api/private.php",0444);
                                    }else{
                                        $textfilex=fopen($upload_dir."/toppersystem/nosql/api/private.php", "w");
                                        $scrivix="<?php\n\$toppersystemapikeysecretsite=\"\";\n?>";            
                                        fwrite($textfilex,$scrivix);
                                        fclose($textfilex);
                                    }
                                    clearstatcache();
                                }
                            }
                        }
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/api/private.php")){
                        $textfilex=fopen($upload_dir."/toppersystem/nosql/api/private.php", "w");
                        $scrivix="<?php\n\$toppersystemapikeysecretsite=\"\";\n?>";            
                        fwrite($textfilex,$scrivix);
                        fclose($textfilex);
                    }

                    if(!file_exists($upload_dir."/toppersystem/nosql/api/par_service.php")){
                        $get_status_prtoppersystemts=site_url();
                        if(file_exists($plugin_dir."/components/general.php")){
                            $content_file_general=@file_get_contents($plugin_dir."/components/general.php");

                            if(str_replace("\$co2applicationts=\"0\"","",$content_file_general) != "$content_file_general"){
                                $get_status_co2applicationts="0";
                            }else if(str_replace("\$co2applicationts=\"1\"","",$content_file_general) != "$content_file_general"){
                                $get_status_co2applicationts="1";
                            }else{
                                $get_status_co2applicationts="1";
                            }

                            if(str_replace("\$activateautoupdatets=\"0\"","",$content_file_general) != "$content_file_general"){
                                $get_status_activateautoupdatets="0";
                            }else if(str_replace("\$activateautoupdatets=\"1\"","",$content_file_general) != "$content_file_general"){
                                $get_status_activateautoupdatets="1";
                            }else{
                                $get_status_activateautoupdatets="0";
                            }

                            if(str_replace("\$activatecachets=\"0\"","",$content_file_general) != "$content_file_general"){
                                $get_status_activatecachets="0";
                            }else if(str_replace("\$activatecachets=\"1\"","",$content_file_general) != "$content_file_general"){
                                $get_status_activatecachets="1";
                            }else{
                                $get_status_activatecachets="0";
                            }

                            if(str_replace("\$activateasmpts=\"0\"","",$content_file_general) != "$content_file_general"){
                                $get_status_activateasmpts="0";
                            }else if(str_replace("\$activateasmpts=\"1\"","",$content_file_general) != "$content_file_general"){
                                $get_status_activateasmpts="1";
                            }else{
                                $get_status_activateasmpts="0";
                            }

                            if(str_replace("\$lazyloadingts=\"0\"","",$content_file_general) != "$content_file_general"){
                                $get_status_lazyloadingts="0";
                            }else if(str_replace("\$lazyloadingts=\"1\"","",$content_file_general) != "$content_file_general"){
                                $get_status_lazyloadingts="1";
                            }else{
                                $get_status_lazyloadingts="1";
                            }

                            if(($get_status_co2applicationts != "")||($get_status_activateautoupdatets != "")||($get_status_activatecachets != "")||($get_status_activateasmpts != "")||($get_status_lazyloadingts != "")){
                                if(!file_exists($upload_dir."/toppersystem/nosql/api/par_service.php")){
                                    $get_css_status_co2applicationts=TopperSystemSetFunctionAssetstsTransistor::get_css_status_co2applicationts($plugin_dir."/css/loader.css");
                                    if(($get_css_status_co2applicationts != "left")&&($get_css_status_co2applicationts != "right")){
                                        $get_css_status_co2applicationts="right";
                                    }

                                    $get_js_status_lazyloadingts=TopperSystemSetFunctionAssetstsTransistor::get_js_status_lazyloadingts($plugin_dir."/js/lazyloading_ts.js");
                                    if(($get_js_status_lazyloadingts != "hight")&&($get_js_status_lazyloadingts != "medium")&&($get_js_status_lazyloadingts != "low")){
                                        $get_js_status_lazyloadingts="medium";
                                    }

                                    $textfilex2=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                    $scrivix2="<?php\n\$par_co2application_toppersystem=\"$get_status_co2applicationts\";\n\$par_activateautoupdatets_toppersystem=\"$get_status_activateautoupdatets\";\n\$par_activatecachets_toppersystem=\"$get_status_activatecachets\";\n\$par_activateasmpts_toppersystem=\"$get_status_activateasmpts\";\n\$par_lazyloadingts_toppersystem=\"$get_status_lazyloadingts\";\n\$par_status_co2applicationts_toppersystem=\"$get_css_status_co2applicationts\";\n\$par_status_lazyloadingts_toppersystem=\"$get_js_status_lazyloadingts\";\n\$par_status_prtoppersystemts_toppersystem=\"$get_status_prtoppersystemts\";\n\$par_get_timesautoupdate_spider_toppersystem=\"3600\";\n\$par_get_timesautoupdate_user_toppersystem=\"600\";\n?>";            
                                    fwrite($textfilex2,$scrivix2);
                                    fclose($textfilex2);
                                    chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                    clearstatcache();
                                }
                            }else{
                                if(!file_exists($upload_dir."/toppersystem/nosql/api/par_service.php")){
                                    $textfilex2=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                    $scrivix2="<?php\n\$par_co2application_toppersystem=\"1\";\n\$par_activateautoupdatets_toppersystem=\"0\";\n\$par_activatecachets_toppersystem=\"0\";\n\$par_activateasmpts_toppersystem=\"0\";\n\$par_lazyloadingts_toppersystem=\"1\";\n\$par_status_co2applicationts_toppersystem=\"right\";\n\$par_status_lazyloadingts_toppersystem=\"medium\";\n\$par_status_prtoppersystemts_toppersystem=\"$get_status_prtoppersystemts\";\n\$par_get_timesautoupdate_spider_toppersystem=\"3600\";\n\$par_get_timesautoupdate_user_toppersystem=\"600\";\n?>";            
                                    fwrite($textfilex2,$scrivix2);
                                    fclose($textfilex2);
                                    chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                    clearstatcache();
                                }
                            }                         
                        }else{
                            if(!file_exists($upload_dir."/toppersystem/nosql/api/par_service.php")){
                                $textfilex2=fopen($upload_dir."/toppersystem/nosql/api/par_service.php", "w");
                                $scrivix2="<?php\n\$par_co2application_toppersystem=\"1\";\n\$par_activateautoupdatets_toppersystem=\"0\";\n\$par_activatecachets_toppersystem=\"0\";\n\$par_activateasmpts_toppersystem=\"0\";\n\$par_lazyloadingts_toppersystem=\"1\";\n\$par_status_co2applicationts_toppersystem=\"right\";\n\$par_status_lazyloadingts_toppersystem=\"medium\";\n\$par_status_prtoppersystemts_toppersystem=\"$get_status_prtoppersystemts\";\n\$par_get_timesautoupdate_spider_toppersystem=\"3600\";\n\$par_get_timesautoupdate_user_toppersystem=\"600\";\n?>";            
                                fwrite($textfilex2,$scrivix2);
                                fclose($textfilex2);
                                chmod($upload_dir."/toppersystem/nosql/api/par_service.php",0444);
                                clearstatcache();
                            }                             

                        }
                    }

                    if(!file_exists($upload_dir."/toppersystem/nosql/log/IndexToppersystem.txt")){
                        $textfilex=fopen($upload_dir."/toppersystem/nosql/log/IndexToppersystem.txt", "w");
                        $scrivix="";            
                        fwrite($textfilex,$scrivix);
                        fclose($textfilex);
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/log/SaveToppersystem.txt")){
                        $textfilex=fopen($upload_dir."/toppersystem/nosql/log/SaveToppersystem.txt", "w");
                        $scrivix="";            
                        fwrite($textfilex,$scrivix);
                        fclose($textfilex);
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/log/ActiveNoneResourceToppersystem.txt")){
                        $textfilex=fopen($upload_dir."/toppersystem/nosql/log/ActiveNoneResourceToppersystem.txt", "w");
                        $scrivix="";            
                        fwrite($textfilex,$scrivix);
                        fclose($textfilex);
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/log/NoActiveCSSforStyle.txt")){
                        $textfilex=fopen($upload_dir."/toppersystem/nosql/log/NoActiveCSSforStyle.txt", "w");
                        $scrivix="";            
                        fwrite($textfilex,$scrivix);
                        fclose($textfilex);
                    }
                    if(!file_exists($upload_dir."/toppersystem/nosql/log/NoCSScriticalInline.txt")){
                        $textfilex=fopen($upload_dir."/toppersystem/nosql/log/NoCSScriticalInline.txt", "w");
                        $scrivix="";            
                        fwrite($textfilex,$scrivix);
                        fclose($textfilex);
                    }
                }
        }
    }, 0); 

}
}
TopperSystemRunAssetstsPlugin::toppersystemrun();
}
?>