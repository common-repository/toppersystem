<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileSavePosImportCsvTS {

    public static function add_state_connection_toppersystem($url){
	    $return=1;

        $pathfileprocessing=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/processing.txt";

	    if($url != ""){
		    if(file_exists("$pathfileprocessing")){
			    if(filemtime("$pathfileprocessing") + 480 <= date("U")){
				    $filenamed="$pathfileprocessing";
                    chmod("$filenamed",0644);
				    $textfilem=fopen($filenamed, "w");
				    fwrite($textfilem,$url);
				    fclose($textfilem);	

				    unset($filenamed);
				    unset($textfilem);
				    unset($scrivim);
				    
				    $return=1;
			    }else{
				    $return=0;
			    }
			    
		    }else{
			    $filenamed="$pathfileprocessing";
			    $textfilem=fopen($filenamed, "w");
			    fwrite($textfilem,$url);
			    fclose($textfilem);	

			    unset($filenamed);
			    unset($textfilem);
			    unset($scrivim);
			    
			    $return=1;
		    }		
		    unset($url);
	    }else{
		    $return=0;
	    }
	    return "$return";
    }	

public static function del_state_connection_toppersystem(){
    $pathfileprocessing=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/processing.txt";

	if(file_exists("$pathfileprocessing")){
		$filenamed="$pathfileprocessing";
        chmod("$filenamed",0644);
		@unlink("$pathfileprocessing");
        unset($filenamed);
	}
	return "";
}

    public static function toppersystem_cleanup_min_and_encode_url($url){
        $array_url=explode("?",$url);
        if(isset($array_url["1"])){
            $return=str_replace("%2f","/",strtolower(urlencode($array_url["0"])));
            $return=str_replace("%3a",":",$return);
            $return=$return."?".$array_url["1"];
        }else{
            $return=str_replace("%2f","/",strtolower(urlencode("$url")));
            $return=str_replace("%3a",":",$return);        
        }
        $url="";
        return "$return";
    }

    public static function result_domain_name($url){
        $url=str_replace("://","[TsostituisciS]",$url);
        $url=explode("/",$url)["0"];
        $url=explode("?",$url)["0"];
        $url=explode("#",$url)["0"];
        $url=str_replace("[TsostituisciS]","://",$url);    
        return $url;
    }

    public static function result_page_name_no_domain($url){
        $url=str_replace(TopperSystemSetFileSavePosImportCsvTS::result_domain_name($url),"",$url);
        return $url;
    }


    public static function verify_line($stringa){
	    $return=false;
	    if(trim($stringa) != ""){
		    $array_stringa=explode("||||",$stringa);
		    if(count($array_stringa) >= 3){			    
			    if(trim($array_stringa["0"]) != ""){
                    if(substr(trim($array_stringa["0"]), 0, 1) == "/"){
					    if(str_replace("start_new","",trim($array_stringa["1"])) != trim($array_stringa["1"])){
						    if(strlen(trim($array_stringa["2"])) == 19){
							    $return=true;
						    }
					    }
                    }
			    }
			    $array_stringa=array();
		    }
		    unset($stringa);
	    }
	    return $return;
    }

    public static function validete_url_import($url_import) {

        $url_import=TopperSystemSetFileSavePosImportCsvTS::toppersystem_cleanup_min_and_encode_url($url_import);
        /*
        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
            $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
            $part_url_transform2=site_url();
            $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$url_import);                            
        }else{
            $canonical_toppersystem_send2="$url_import";                            
        }
        */
        $canonical_toppersystem_send2="$url_import";	    

	    $url_import=TopperSystemSetFileSavePosImportCsvTS::result_page_name_no_domain("$canonical_toppersystem_send2");

        if(str_replace("://","",$url_import) != "$url_import"){
            $url_import="";
        }
        return "$url_import";
    }

    public static function validete_language_import($language_import) {

        $language_accept=array('ab','ab-RU','aa','aa-ET','af','af-ZA','ak','ak-GH','sq','sq-AL','sq-KS','am','am-ET','ar','ar-AR','ar-DZ','ar-BH','ar-TD','ar-KM','ar-DJ','ar-EG','ar-ER','ar-IQ','ar-IL','ar-JO','ar-KW','ar-LB','ar-LY','ar-MR','ar-MA','ar-OM','ar-QA','ar-SA','ar-SO','ar-SD','ar-SY','ar-TN','ar-AE','ar-PS','ar-EH','ar-YE','an','an-ES','an-ES','hy','hy-AM','as','as-IN','av','av-RU','ae','ae-AF','ae-CN','ae-IR','ae-MN','ae-RU','ay','ay-BO','ay-CL','ay-PE','az','az-AZ','az-AF','az-GE','az-IR','az-IQ','az-KZ','az-KZ','az-RU','az-TR','az-TM','az-UA','az-UZ','bm','bm-ML','ba','ba-BA','ba-RU','eu','eu-ES','be','be-BY','bn','bn-BD','bn-IN','bh','bh-AS','bh-BZ','bh-CO','bh-CR','bh-GT','bh-HN','bh-MX','bh-NI','bh-US','bh-VE','bi','bi-AU','bi-VU','bs','bs-BA','br','br-FR','bg','bg-BG','my','my-MM','ca','ca-AD','ca-ES','ceb-CH','ch','ch-GU','ch-US','ce','ce-RU','ny-MW','ny-MZ','ny-ZM','ny-ZW','ny','zh','zh-CN','zh-Hans','zh-Hant','zh-HK','zh-MO','zh-SG','zh-TW','cv','cv-RU','kw','co','co-FR','co-IT','cr','cr-CA','hr','hr-HR','hr-BA','cs','cs-CZ','cs-SK','da','da-DK','da-FO','da-GL','dv-IN','dv','nl','nl-NL','nl-AW','nl-BE','nl-CW','nl-AN','nl-SX','nl-SR','dz','dz-BT','en','en-GB','en-US','en-AS','en-AI','en-AG','en-AU','en-BD','en-BB','en-BZ','en-BM','en-BW','en-VG','en-CM','en-CA','en-KY','en-CK','en-CW','en-DM','en-ER','en-FK','en-FJ','en-GH','en-GI','en-GD','en-GU','en-GG','en-GY','en-HK','en-IN','en-IE','en-IM','en-JM','en-JE','en-KE','en-KI','en-LS','en-LR','en-MW','en-MY','en-MT','en-MH','en-MU','en-FM','en-MS','en-NA','en-NR','en-NZ','en-NG','en-NU','en-MP','en-PK','en-PW','en-PG','en-PH','en-PI','en-PN','en-PR','en-RW','en-SH','en-WS','en-SC','en-SL','en-SG','en-SB','en-SO','en-ZA','en-SS','en-LK','en-KN','en-LC','en-VC','en-SD','en-CH','en-TZ','en-BS','en-GM','en-TO','en-TT','en-TC','en-TV','en-UG','en-VI','en-UD','en-VU','en-ZM','en-ZW','eo','eo-EO','et','et-EE','ee','ee-GH','ee-TG','fo','fo-FO','fj','fj-FJ','tl-PH','fi','fi-FI','fr','fr-FR','fr-BE','fr-BJ','fr-BF','fr-BI','fr-CM','fr-CA','fr-CF','fr-TD','fr-KM','fr-CG','fr-CI','fr-CD','fr-DJ','fr-GQ','fr-GF','fr-PF','fr-GA','fr-GD','fr-GP','fr-GN','fr-HT','fr-LU','fr-MG','fr-ML','fr-MQ','fr-MU','fr-YT','fr-MC','fr-NC','fr-NE','fr-RW','fr-RE','fr-PM','fr-SN','fr-SC','fr-LC','fr-MF','fr-CH','fr-TG','fr-VU','fr-WF','fy-NL','ff-BJ','ff-BF','ff-CV','ff-CI','ff-GM','ff-GH','ff-GN','ff-GW','ff-LR','ff-ML','ff-MR','ff-NE','ff-NG','ff-SN','ff-SL','ff-TG','ff','gv','gd','gv-IM','gd-CA','gd-UK','gl','gl-ES','ka','ka-GE','de','de-DE','de-AT','de-BE','de-LI','de-LU','de-NA','de-CH','el','el-GR','el-CY','kl','kl-GL','gn','gn-AR','gn-BO','gn-BR','gn-PY','gu','gu-IN','gu-KE','gu-PK','gu-TZ','ht','ht-BS','ht-KY','ht-CR','ht-CU','ht-DO','ht-US','ht-HT','ht-JM','ht-UM','ha','ha-BJ','ha-CM','ha-TD','ha-GH','ha-NE','ha-NG','ha-SD','ha-TG','he','he-IL','hz','hz-BW','hz-NA','hi','hi-IN','hi-FJ','hi-PK','ho','ho-PG','hu','hu-HU','is','is-IS','io','io-FR','io-DE','ig','ig-CM','ig-GQ','ig-NG','id, in','id-ID','ia','ia-FI','ia-NO','ia-SE','ia-UK','ia-US','ie','iu','iu-CA','ik','ik-KK','ga','ga-IE','ga-GB','it','it-IT','it-SM','it-CH','it-VA','ja','ja-JP','ja-PW','jv','jv-ID','kl','kn','kn-IN','kr','kr-CM','kr-TD','kr-LY','kr-NE','kr-NG','kr-SG','ks','ks-IN','kk','kk-CN','kk-KZ','kk-KG','kk-MN','kk-RU','kk-TR','kk-TM','kk-UZ','km','km-KH','ki','ki-KE','rw','rw-CD','rw-RW','rw-UG','rn','rn-BI','kv','kv-RU','kg','kg-AO','kg-CD','kg-GA','ko','ko-KP','ko-KR','ku','ku-TR','kj','kj-AO','kj-NA','ky','ky','ky-CN','ky-KG','lo','lo-KH','lo-LA','lo-TH','lo-VN','la','la-VA','lv','lv-LV','li','li-BE','li-DE','li-NL','ln','ln-AO','ln-CF','ln-CG','ln-CD','ln-SS','lt','lt-LT','lu','lu-CD','lg-UG','lg','lb','lb-LU','lb-BE','lb-FR','lb-DE','mk','mk-MK','mg','mg-MG','ms','ms-MY','ms-BN','ms-ID','ms-SG','ml','ml-IN','mt','mt-MT','gv','gv-IM','mi','mi-NZ','mr','mr-IN','mh','mh-MH','mo','mo-MD','mo-UA','mn','mn-CN','mn-KG','mn-MN','mn-RU','na','na-NR','nv','nv-US','ng','ng-AO','ng-NA','ne','ne-NP','nd','nd-ZW','no','no-NO','nb-NO','nn-NO','nb','nn','nn-NO','ii','ii-CN','oc','oc-FR','oc-ES','oj','oj-CA','oj-US','cu-BG','cu-EZ','cu-PL','cu-RU','cu-RS','cu-SK','cu-SI','cu','or','or-IN','om','om-ET','om-KE','os','os-GE','os-RU','ps-AF','ps','fa','fa-AF','fa-IR','pl','pl-PL','pt','pt-PT','pt-AO','pt-BR','pt-CV','pt-GQ','pt-GW','pt-MO','pt-MZ','pt-ST','pt-TL','pa','pa-IN','pi','pi-BD','pi-KH','pi-IN','pi-LA','pi-MN','pi-NP','pi-LK','pi-TH','qu','qu-AR','qu-BO','qu-CL','qu-CO','qu-EC','qu-PE','ro','ro-RO','ro-MD','rm','rm-IT','rm-CH','ru','ru-RU','ru-BY','ru-KZ','ru-KG','ru-TJ','se','se-FI','se-NO','se-RU','se-SE','sm','sg','sg-CF','sg-TD','sg-CD','sa','sa-BD','sa-BD','sa-KH','sa-IN','sa-ID','sa-LA','sa-MY','sa-MN','sa-PK','sa-PH','sa-SG','sa-LK','sa-TH','sa-TL','sa-VN','sr','sr-RS','sr-BA','sr-ME','sh','sh-RS','sh-HR','sh-BA','sh-CZ','sh-SK','sh-AT','sh-HU','sh-IT','sh-XK','sh-MK','sh-ME','sh-RO','st','st-LS','st-ZA','st-ZW','tn','tn-BW','tn-NA','tn-ZA','tn-ZW','sn','sn-BW','sn-MZ','sn-ZW','ii','ii-CN','sd','sd-IN','sd-PK','si-LK','si','ss','ss-WZ','ss-LS','ss-MZ','ss-ZA','sk','sk-CZ','sk-SK','sl','sl-SI','so','so-SO','so-DJ','so-ET','so-KE','nr','nr-ZA','es','es-ES','es-LA','es-AR','es-BO','es-CL','es-CO','es-CR','es-CU','es-DO','es-EC','es-SV','es-GQ','es-GI','es-GT','es-HN','es-MX','es-NI','es-PA','es-PY','es-PE','es-PR','es-US','es-UY','es-VE','su','su-ID','sw','sw-KE','ss','sv','sv-SE','sv-FI','tl','ty','ty-FP','tg','tg-TJ','tg-AF','tg-RU','tg-UZ','ta','ta-IN','ta-LK','tt','tt-RU','te','te-IN','th','th-TH','bo','bo-CN','ti','ti-ER','ti-ET','ti-IL','to','to-TO','ts','ts-MZ','ts-ZA','ts-ZW','tr','tr-TR','tr-CY','tk','tk-TM','tk-AF','tk-IR','tk-PK','tk-RU','tk-TJ','tk-UZ','tw','tw-GH','tw-IV','ug-CN','uk','uk-UA','ur','ur-AF','ur-BD','ur-IN','ur-NP','ur-PK','ur-ZA','ug','uz','uz-UZ','ve','ve-ZA','ve-ZW','vi','vi-VN','vo','vo-EU','wa','wa-BE','wa-FR','wa-US','cy','cy-GB','fy','wo','wo-SN','wo-GM','wo-MR','xh','xh-LS','xh-ZA','yi, ji','yi-DE','yi-IL','yi-BY','yi-BA','yi-NL','yi-PL','yi-RO','yi-RU','yi-SE','yi-UA','yo','yo-BJ','yo-NG','yo-TG','za-CN','za','zu','zu-MW','zu-MZ','zu-ZA','zu-SZ');

        if (in_array("$language_import", $language_accept)) {
            #npt
        }else{
            $language_import="";
        }

        return "$language_import";
    }

    public static function validete_string_import($string_import) {
        $ris2_array=explode("|",$string_import);
        $ris2="";
        for($i=0;$i<=count($ris2_array) + 1;$i++){
	        if((isset($ris2_array[$i]))&&(trim($ris2_array[$i]) != "")){
		        $ris2.=trim($ris2_array[$i])." | ";
		        
		        $ris2_array[$i]="";
	        }
        }
        $ris2_array=array();
        $ris2=trim($ris2);

        $ultimo_carattere=substr($ris2, strlen($ris2)-1);
        if($ultimo_carattere == "|"){
	        $ris2=substr($ris2, 0, strlen($ris2)-1);
        }
        return str_replace(array("\\\"","\""),"",$ris2);
    }



    public static function import_csv_in_toppersystem($url_import, $language_import, $keyword_import, $title_import, $description_import, $keywords_list_import, $category_import, $image_level_import, $image_resolution_import, $image_delay_import, $video_delay_import, $texts_ia_import) {
        $return="1";
        if(($url_import == "")||($language_import == "")||($keyword_import == "")){
            $return="0";
        }else{

            $pathfileindex=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/IndexToppersystem.txt";
            $pathfilesavetoppersystem2=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveToppersystem";
            $cvn_ok="||||100";
            $date_start_request=date("Y-m-d H:i:s");

            $canonical_toppersystem_send="$url_import";
            $language_toppersystem_send="$language_import";

            $title_toppersystem_send="$title_import";
            if(trim($title_toppersystem_send) == ""){
                $check_title_toppersystem_send="true";
            }else{
                $check_title_toppersystem_send="false";
            }

            $description_toppersystem_send="$description_import";
            if(trim($description_toppersystem_send) == ""){
                $check_description_toppersystem_send="true";
            }else{
                $check_description_toppersystem_send="false";
            }

            $keywords_toppersystem_send="$keywords_list_import";
            if(trim($keywords_toppersystem_send) == ""){
                $check_keywords_toppersystem_send="true";
            }else{
                $check_keywords_toppersystem_send="false";
            }

            $keyword_toppersystem_send="$keyword_import";
            $category_toppersystem_send="$category_import";
            $images_toppersystem_send="$image_level_import";
            $resolution_images_toppersystem_send="$image_resolution_import";
            $stronglazyload_images_toppersystem_send="$image_delay_import";
            $stronglazyload_video_toppersystem_send="$video_delay_import";
            $text_ia_toppersystem_send="$texts_ia_import";


            #INIZIO
            #salva stato su file index							
            $pathfileindex="$pathfileindex";
            if(file_exists($pathfileindex)){
                /*
                if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                    $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                    $part_url_transform2=site_url();
                    $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
                }else{
                    $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
                }
	            */
                $canonical_toppersystem_send2="$canonical_toppersystem_send"; 

	            $canonical_toppersystem_send_no_domain=TopperSystemSetFileSavePosImportCsvTS::result_page_name_no_domain("$canonical_toppersystem_send2");
	            
	            if(filesize($pathfileindex) <= 8192){
		            $contenuto_file_index_toppersystem=@file_get_contents($pathfileindex);
	            }else{
		            $handle = fopen($pathfileindex, "r");
		            if (FALSE === $handle) {
			            $contenuto_file_index_toppersystem="";
		            }else{
			            $contenuto_file_index_toppersystem = '';
			            while (!feof($handle)) {
				             $contenuto_file_index_toppersystem .= fread($handle, 8192);
			            }
			            fclose($handle);
		            }
		            unset($handle);
	            }

	            $num_line_tot=0;
	            $contenuto_file_salvato_index="";								
	            $num_line_tot_preleva="";
	            $line_preleva="";
	            if(trim($contenuto_file_index_toppersystem != "")){	
		            
		            $contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
		            $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
		            unset($contenuto_file_index_toppersystem);							
		            for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
			            if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){								
				            $line=trim($contenuto_file_index_toppersystem_array[$i]);
				            $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["0"];
				            if($part_url != ""){
					               if(($line_preleva == "")&&(trim($line) != "")){
						               if(explode("||||",$line)["0"] == "$canonical_toppersystem_send_no_domain"){
								            if(TopperSystemSetFileSavePosImportCsvTS::verify_line(trim($line))){
									            $line_preleva="$line";
									            $num_line_tot_preleva=$num_line_tot;
								            }
						               }
					               }
					               if(trim($line) != ""){
							            if(TopperSystemSetFileSavePosImportCsvTS::verify_line(trim($line))){
								            $contenuto_file_salvato_index.="$line\n";
								            $num_line_tot++;
							            }
					               }
				            }   
				            $part_url="";
				            $contenuto_file_index_toppersystem_array[$i]="";
			            }        
		            }
		            unset($n_contenuto_file_index_toppersystem_array);
		            if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}		

	            }

	            if($line_preleva == ""){
		            $num_line_tot=$num_line_tot;
		            chmod("$pathfileindex",0644);
		            $textfilem=fopen($pathfileindex, "a");
		            $scrivim=trim($canonical_toppersystem_send_no_domain)."||||"."start_new$num_line_tot.txt"."||||".$date_start_request.$cvn_ok."\n";
		            fwrite($textfilem,$scrivim);
		            fclose($textfilem);
		            
		            chmod("$pathfileindex",0444);
		            $textfilem="";
		            $scrivim="";
	            
	            }else{
		            #sostituisci e salva
		            $line_preleva_new=trim($canonical_toppersystem_send_no_domain)."||||"."start_new$num_line_tot_preleva.txt"."||||".$date_start_request.$cvn_ok;
		            $contenuto_file_salvato_index=str_replace("$line_preleva","$line_preleva_new",$contenuto_file_salvato_index);

                    if(file_exists($pathfileindex)){
		                chmod("$pathfileindex",0644);
                    }
		            $textfilem=fopen($pathfileindex, "w");
		            $scrivim="$contenuto_file_salvato_index";
		            fwrite($textfilem,$scrivim);
		            fclose($textfilem);

		            chmod("$pathfileindex",0444);
		            $textfilem="";
		            $scrivim="";
	            }

	            unset($contenuto_file_salvato_index);
	            $line_preleva="";
            }else{
	            #crea primo file
                /*
                if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                    #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                    #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                    $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                    $part_url_transform2=site_url();
                    $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
                }else{
                    $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
                }
                */
                $canonical_toppersystem_send2="$canonical_toppersystem_send";

	            $canonical_toppersystem_send_no_domain=TopperSystemSetFileSavePosImportCsvTS::result_page_name_no_domain("$canonical_toppersystem_send2");

	            $textfilem=fopen($pathfileindex, "w");
	            $scrivim=trim($canonical_toppersystem_send_no_domain)."||||"."start_new0.txt"."||||".$date_start_request.$cvn_ok."\n";
	            fwrite($textfilem,$scrivim);
	            fclose($textfilem);

	            chmod("$pathfileindex",0444);
	            $textfilem="";
	            $scrivim="";
	            $num_line_tot=0;
            }

            $nlinesave=40;
            $nmax_cicle=ceil(($num_line_tot) / $nlinesave);
            /*
            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                $part_url_transform2=site_url();
                $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
            }else{
                $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
            }
            */
            $canonical_toppersystem_send2="$canonical_toppersystem_send";

            $canonical_toppersystem_send_no_domain=TopperSystemSetFileSavePosImportCsvTS::result_page_name_no_domain("$canonical_toppersystem_send2");
            $trovato="";
            $line_preleva="NO";
            for($nc=0;$nc<=$nmax_cicle;$nc++){
	            if($trovato == ""){
		            #salva dati post su file save
		            if($nc == "0"){
			            $nc_w="";
		            }else{
			            $nc_w="$nc";
		            }
		            $pathfilesave="$pathfilesavetoppersystem2$nc_w.txt";
		            if(file_exists($pathfilesave)){
			            
			            if(filesize($pathfilesave) <= 8192){
				            $contenuto_file_salvato_toppersystem=@file_get_contents($pathfilesave);
			            }else{
				            $handle = fopen($pathfilesave, "r");
				            if (FALSE === $handle) {
					            $contenuto_file_salvato_toppersystem="";
				            }else{
					            $contenuto_file_salvato_toppersystem = '';
					            while (!feof($handle)) {
						             $contenuto_file_salvato_toppersystem .= fread($handle, 8192);
					            }
					            fclose($handle);
				            }
				            unset($handle);
			            }

			            $num_line_tot=0;
			            $contenuto_file_salvato_save="";
			            $num_line_tot_preleva="";
			            $line_preleva="";
			            if(trim($contenuto_file_salvato_toppersystem != "")){	
				            
				            $contenuto_file_salvato_toppersystem_array=explode("\n",$contenuto_file_salvato_toppersystem);
				            $n_contenuto_file_salvato_toppersystem_array=count($contenuto_file_salvato_toppersystem_array);
				            unset($contenuto_file_salvato_toppersystem);							
				            for($i=0;$i<=$n_contenuto_file_salvato_toppersystem_array;$i++){
					            if((isset($contenuto_file_salvato_toppersystem_array[$i]))&&(trim($contenuto_file_salvato_toppersystem_array[$i]) != "")){
						            $line=trim($contenuto_file_salvato_toppersystem_array[$i]);
						            $part_url=explode("||||",trim($contenuto_file_salvato_toppersystem_array[$i]))["0"];
						            if($part_url != ""){
							            if(($line_preleva == "")&&(trim($line) != "")){
								            if(explode("||||",$line)["0"] == "$canonical_toppersystem_send_no_domain"){
									            $line_preleva="$line";
									            $num_line_tot_preleva=$num_line_tot;
									            $trovato="ok";
								            }
							            }
							            if(trim($line) != ""){
								            $contenuto_file_salvato_save.="$line\n";
								            $num_line_tot++;
							            }
						            }   
						            $part_url="";
						            $contenuto_file_salvato_toppersystem_array[$i]="";
					            }        
				            }
				            unset($n_contenuto_file_salvato_toppersystem_array);
				            if(is_array($contenuto_file_salvato_toppersystem_array)){$contenuto_file_salvato_toppersystem_array=array();}else{$contenuto_file_salvato_toppersystem_array="";}		

			            }
			            
		            }
	            }
	            if($num_line_tot <= $nlinesave - 1){
		            $trovato="ok";
	            }

            }
            if($line_preleva != "NO"){
	            if($line_preleva == ""){
		            $num_line_tot=$num_line_tot;
		            chmod("$pathfilesave",0644);
		            $textfilem=fopen($pathfilesave, "a");
		            $scrivim=trim($canonical_toppersystem_send_no_domain)."||||".$language_toppersystem_send."||||".$title_toppersystem_send."||||".$check_title_toppersystem_send."||||".$description_toppersystem_send."||||".$check_description_toppersystem_send."||||".$keywords_toppersystem_send."||||".$check_keywords_toppersystem_send."||||".$keyword_toppersystem_send."||||".$category_toppersystem_send."||||".$images_toppersystem_send."||||".$resolution_images_toppersystem_send."||||".$stronglazyload_images_toppersystem_send."||||".$stronglazyload_video_toppersystem_send."||||".$text_ia_toppersystem_send."\n";
		            fwrite($textfilem,$scrivim);
		            fclose($textfilem);
		            
		            chmod("$pathfilesave",0444);
		            $textfilem="";
		            $scrivim="";
	            }else{
		            #sostituisci e salva
		            $line_preleva_new=trim($canonical_toppersystem_send_no_domain)."||||".$language_toppersystem_send."||||".$title_toppersystem_send."||||".$check_title_toppersystem_send."||||".$description_toppersystem_send."||||".  $check_description_toppersystem_send."||||".$keywords_toppersystem_send."||||".$check_keywords_toppersystem_send."||||".$keyword_toppersystem_send."||||".$category_toppersystem_send."||||".$images_toppersystem_send."||||".$resolution_images_toppersystem_send."||||".$stronglazyload_images_toppersystem_send."||||".$stronglazyload_video_toppersystem_send."||||".$text_ia_toppersystem_send;
		            $contenuto_file_salvato_save=str_replace("$line_preleva","$line_preleva_new",$contenuto_file_salvato_save);

                    if(file_exists($pathfilesave)){
		                chmod("$pathfilesave",0644);
                    }
		            $textfilem=fopen($pathfilesave, "w");
		            $scrivim="$contenuto_file_salvato_save";
		            fwrite($textfilem,$scrivim);
		            fclose($textfilem);

		            chmod("$pathfilesave",0444);
		            $textfilem="";
		            $scrivim="";
	            }
            }

            $contenuto_file_salvato_save="";
            $line_preleva=""; 
            #FINE
        }

        return "$return";
    }
}
class TopperSystemExecuteFileSavePosImportCsvts {
public static function runts(){
if(isset($_SERVER["HTTP_REFERER"])){
$paginaprovenienzats=$_SERVER["HTTP_REFERER"];
}else{
$paginaprovenienzats="";
}
$paginaprovenienzats_controllo=str_replace($_SERVER['SERVER_NAME'],"",$paginaprovenienzats);
if(($paginaprovenienzats != "$paginaprovenienzats_controllo")){
    if((isset($_SERVER["REMOTE_ADDR"]))&&(trim($_SERVER["REMOTE_ADDR"]) != "")){
		if((isset($_SERVER["HTTP_USER_AGENT"]))&&(trim($_SERVER["HTTP_USER_AGENT"]) != "")){

	        if((isset($_POST["authcode_toppersystem"]) && trim($_POST["authcode_toppersystem"]) != "")) {
		        $authcode_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['authcode_toppersystem'])), array());	
	        }else{
		        $authcode_toppersystem="";
	        }

	        if((isset($_POST["canonical_toppersystem_send"]) && trim($_POST["canonical_toppersystem_send"]) != "")) {
		        $canonical_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['canonical_toppersystem_send'])), array());	
	        }else{
		        $canonical_toppersystem_send="";
	        }

	        if((isset($_POST["resend_toppersystem"]) && trim($_POST["resend_toppersystem"]) != "")) {
		        $resend_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['resend_toppersystem'])), array());	
	        }else{
		        $resend_toppersystem="";
	        }

	        if((isset($_POST["name_file_csv_toppersystem"]) && trim($_POST["name_file_csv_toppersystem"]) != "")) {
		        $name_file_csv_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['name_file_csv_toppersystem'])), array());	
	        }else{
		        $name_file_csv_toppersystem="";
	        }	
			
	        if((isset($_POST["hreflang_toppersystem"]) && trim($_POST["hreflang_toppersystem"]) != "")) {
		        $hreflang_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['hreflang_toppersystem'])), array());	
	        }else{
		        $hreflang_toppersystem="en";
	        }
            if($hreflang_toppersystem == "it"){    
		       $txtts0="Verifica le autorizzazioni per utilizzare Topper System SEO"; 
               $txtts1="Verifica le autorizzazioni per utilizzare Topper System SEO";
               $txtts2="Qualcosa è andato storto. Assicurati di aver copilato correttamente il form e riprova.";
			   $txtts3="Salvataggio avvenuto con successo";
               $txtts4="Le pagine web devono essere ottimizzate nuovamente";
               $txtts5="Nessuna riga è stata importata!";
               $txtts6="Assicurati che i campi delimitatori del file CSV siano la \",\" e che ogni riga sia costituita da 12 record.";
               $txtts7="Ti consigliamo di scaricare il modello disponibile effettuando il download dei dati in memoria.";
               $txtts8="Verifica che i valori dei record siano conformi al corretto formato e riprova!";
               $txtts9="righe importate con successo!";
               $txtts10="Ottimizza subito le pagine del sito..";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="نجح الإنقاذ";
               $txtts4="تحتاج صفحات الويب إلى التحسين مرة أخرى";
               $txtts5="لم يتم استيراد أي صفوف!";
               $txtts6="تأكد من أن الحقول المحددة لملف CSV هي \"،\" وأن كل صف يتكون من 12 سجلاً.";
               $txtts7="نوصي بتنزيل النموذج المتاح عن طريق تنزيل البيانات في الذاكرة.";
               $txtts8="تأكد من أن قيم السجل تتوافق مع التنسيق الصحيح وحاول مرة أخرى!";
               $txtts9="تم استيراد الصفوف بنجاح!";
               $txtts10="قم بتحسين صفحات موقعك الآن.";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Rettung erfolgreich";
               $txtts4="Webseiten müssen erneut optimiert werden";
               $txtts5="Es wurden keine Zeilen importiert!";
               $txtts6="Stellen Sie sicher, dass die Trennfelder der CSV-Datei \",\" lauten und dass jede Zeile aus 12 Datensätzen besteht.";
               $txtts7="Wir empfehlen Ihnen, das verfügbare Modell herunterzuladen, indem Sie die Daten in den Speicher herunterladen.";
               $txtts8="Überprüfen Sie, ob die Datensatzwerte dem richtigen Format entsprechen, und versuchen Sie es erneut!";
               $txtts9="Zeilen erfolgreich importiert!";
               $txtts10="Optimieren Sie jetzt Ihre Website-Seiten.";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Rescate exitoso";
               $txtts4="Las páginas web deben optimizarse nuevamente";
               $txtts5="¡No se importaron filas!";
               $txtts6="Asegúrese de que los campos delimitadores del archivo CSV sean \",\" y que cada fila consta de 12 registros.";
               $txtts7="Le recomendamos descargar el modelo disponible descargando los datos en la memoria.";
               $txtts8="¡Compruebe que los valores de los registros se ajusten al formato correcto y vuelva a intentarlo!";
               $txtts9="¡Las filas se importaron correctamente!";
               $txtts10="Optimice las páginas de su sitio ahora.";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Sauvetage réussi";
               $txtts4="Les pages Web doivent être à nouveau optimisées";
               $txtts5="Aucune ligne n'a été importée !";
               $txtts6="Assurez-vous que les champs de délimitation du fichier CSV sont \",\" et que chaque ligne comprend 12 enregistrements.";
               $txtts7="Nous vous recommandons de télécharger le modèle disponible en téléchargeant les données en mémoire.";
               $txtts8="Vérifiez que les valeurs d'enregistrement sont conformes au bon format et réessayez !";
               $txtts9="lignes importées avec succès !";
               $txtts10="Optimisez les pages de votre site maintenant.";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="बचाव सफल";
               $txtts4="वेब पेजों को फिर से अनुकूलित करने की आवश्यकता है";
               $txtts5="कोई पंक्तियाँ आयात नहीं की गईं!";
               $txtts6="सुनिश्चित करें कि CSV फ़ाइल के सीमांकक फ़ील्ड \",\" हैं और प्रत्येक पंक्ति में 12 रिकॉर्ड हैं।";
               $txtts7="हम अनुशंसा करते हैं कि आप डेटा को मेमोरी में डाउनलोड करके उपलब्ध मॉडल डाउनलोड करें।";
               $txtts8="जांचें कि रिकॉर्ड मान सही प्रारूप के अनुरूप हैं और पुनः प्रयास करें!";
               $txtts9="पंक्तियाँ सफलतापूर्वक आयात की गईं!";
               $txtts10="अभी अपनी साइट के पृष्ठों को अनुकूलित करें।";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="レスキュー成功";
               $txtts4="Web ページを再度最適化する必要がある";
               $txtts5="行はインポートされませんでした。";
               $txtts6="CSV ファイルの区切り文字フィールドが \",\" であり、各行が 12 レコードで構成されていることを確認してください。";
               $txtts7="データをメモリにダウンロードして、利用可能なモデルをダウンロードすることをお勧めします。";
               $txtts8="レコード値が正しい形式に準拠していることを確認して、再試行してください。";
               $txtts9="行が正常にインポートされました。";
               $txtts10="今すぐサイトのページを最適化してください。";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Udało się ratować";
               $txtts4="Strony internetowe wymagają ponownej optymalizacji";
               $txtts5="Nie zaimportowano żadnych wierszy!";
               $txtts6="Upewnij się, że pola ogranicznika pliku CSV to ,, , a każdy wiersz składa się z 12 rekordów.";
               $txtts7="Zalecamy pobranie dostępnego modelu poprzez pobranie danych do pamięci.";
               $txtts8="Sprawdź, czy wartości rekordów są zgodne z właściwym formatem i spróbuj ponownie!";
               $txtts9="wiersze zaimportowano pomyślnie!";
               $txtts10="Zoptymalizuj teraz strony swojej witryny.";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Resgate bem-sucedido";
               $txtts4="As páginas da web precisam ser otimizadas novamente";
               $txtts5="Nenhuma linha foi importada!";
               $txtts6="Certifique-se de que os campos delimitadores do arquivo CSV sejam \",\" e que cada linha consista em 12 registros.";
               $txtts7="Recomendamos que você baixe o modelo disponível baixando os dados na memória.";
               $txtts8="Verifique se os valores dos registros estão no formato correto e tente novamente!";
               $txtts9="linhas importadas com sucesso!";
               $txtts10="Otimize as páginas do seu site agora.";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Спасение прошло успешно";
               $txtts4="Веб-страницы необходимо снова оптимизировать";
               $txtts5="Ни одна строка не была импортирована!";
               $txtts6="Убедитесь, что поля-разделители в файле CSV имеют значение \",\" и что каждая строка состоит из 12 записей.";
               $txtts7="Рекомендуем скачать имеющуюся модель, загрузив данные в память.";
               $txtts8="Убедитесь, что значения записи соответствуют правильному формату и повторите попытку!";
               $txtts9="строки успешно импортированы!";
               $txtts10="Оптимизируйте страницы вашего сайта прямо сейчас.";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="救援成功";
               $txtts4="网页需要再次优化";
               $txtts5="没有导入任何行！";
               $txtts6="确保 CSV 文件的分隔符字段为 \",\" 并且每行包含 12 条记录。";
               $txtts7="我们建议您通过将数据下载到内存中来下载可用模型。";
               $txtts8="检查记录值是否符合正确的格式，然后重试！";
               $txtts9="行导入成功！";
               $txtts10="立即优化您的网站页面。";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="החילוץ הצליח";
               $txtts4="דפי אינטרנט צריכים לעבור אופטימיזציה שוב";
               $txtts5="לא יובאו שורות!";
               $txtts6="ודא ששדות המפריד של קובץ ה-CSV הם' ,' ושכל שורה מורכבת מ-12 רשומות.";
               $txtts7="אנו ממליצים להוריד את הדגם הזמין על ידי הורדת הנתונים לזיכרון.";
               $txtts8="בדוק שערכי הרשומה תואמים לפורמט הנכון ונסה שוב!";
               $txtts9="שורות יובאו בהצלחה!";
               $txtts10="בצע אופטימיזציה של דפי האתר שלך כעת.";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Eripe felix";
               $txtts4="Paginae interretiales necesse est ut optimized iterum";
               $txtts5="nullae ordines adlatae sunt!";
               $txtts6="Fac ut agri delimitatores fasciculi CSV sint \",\" et quod uterque ordo ex XII commentariis constat.";
               $txtts7="Commendamus ut exemplar promptum deprimas, ex data in memoriam deprimas.";
               $txtts8="Reprehendo quod valor recordus rectae formae conformet et iterum conare!";
               $txtts9="ordines feliciter importari!";
               $txtts10="Optimize your site pages nunc.";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Rescue successful";
               $txtts4="Web pages need to be optimized again";
               $txtts5="No rows were imported!";
               $txtts6="Make sure that the delimiter fields of the CSV file are \",\" and that each row consists of 12 records.";
               $txtts7="We recommend that you download the available model by downloading the data into memory.";
               $txtts8="Check that the record values conform to the correct format and try again!";
               $txtts9="rows imported successfully!";
               $txtts10="Optimize your site pages now.";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(trim($name_file_csv_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){
                        $return="";
                        $save="";
                        $file_ts=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/download/".trim($name_file_csv_toppersystem);

#verifica e aggiungi un blocco alle ottimizzazioni

                        if(TopperSystemSetFileSavePosImportCsvTS::add_state_connection_toppersystem("uploadfilecsw") == 1){
                            if(file_exists($file_ts)){

    # url,lingua,parola chiave principale,titolo,descrizione,parole chiave,categoria,immagini(0-1-2),risoluzione(40-100),delay immagini(0-1),delay video(0-1),text ia(0-1)
                                $row = 0;
                                $row_import = 0;
                                if (($handle = fopen($file_ts, "r")) !== FALSE) {
                                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                        $num = count($data);
                                        if($num == 12){
                                            if(str_replace("/","",$data[0]) != $data[0]){                                      
                                                $url_import=TopperSystemSetFileSavePosImportCsvTS::validete_url_import($data[0]);
                                                $language_import=TopperSystemSetFileSavePosImportCsvTS::validete_language_import($data[1]);
                                                $keyword_import=TopperSystemSetFileSavePosImportCsvTS::validete_string_import($data[2]);
                                                $title_import=TopperSystemSetFileSavePosImportCsvTS::validete_string_import($data[3]);
                                                $description_import=TopperSystemSetFileSavePosImportCsvTS::validete_string_import($data[4]);
                                                $keywords_list_import=TopperSystemSetFileSavePosImportCsvTS::validete_string_import($data[5]);
                                                $category_import=TopperSystemSetFileSavePosImportCsvTS::validete_string_import($data[6]);
                                                $image_level_import=(int) $data[7];
                                                $image_resolution_import=(int) $data[8];
                                                $image_delay_import=(int) $data[9];
                                                $video_delay_import=(int) $data[10];
                                                $texts_ia_import=(int) $data[11];
                                                $row++;
                                                if(TopperSystemSetFileSavePosImportCsvTS::import_csv_in_toppersystem("$url_import", "$language_import", "$keyword_import", "$title_import", "$description_import", "$keywords_list_import", "$category_import", "$image_level_import", "$image_resolution_import", "$image_delay_import", "$video_delay_import", "$texts_ia_import") == "1"){
                                                    $row_import++;
                                                }
                                            }
                                        }
                                    }
                                    fclose($handle);
                                }

                                $delete_file=@unlink($file_ts);

                                if($row == "0"){
                                    $return="$txtts5\n\n$txtts6\n\n$txtts7";
                                }else{
                                    if($row_import == 0){
                                        $return="$txtts8";
                                    }else{
                                        $return="[optimizenow]$name_file_csv_toppersystem: $row_import $txtts9\n$txtts10";
                                    }
                                }
                                $del_request_connection_toppersystem=TopperSystemSetFileSavePosImportCsvTS::del_state_connection_toppersystem();
                            }
                        }else{
                            $return="repeatciclets";
                        }
                        $contenuto_link_sito_send="$return";

                    }else{
		                $contenuto_link_sito_send="$txtts0";
	                }
                }else{
		            $contenuto_link_sito_send="$txtts1";
	            }
	        }else{
		        $contenuto_link_sito_send="$txtts2";
	        }

            echo wp_kses("$contenuto_link_sito_send", array());
        }
    }
}
}
}
if(( current_user_can( 'administrator' ) )){
@add_action('init', TopperSystemExecuteFileSavePosImportCsvts::runts(), 2);
}
}

}
}
}
?>