<?php
if(isset($TopperSystemCpermFileinApi)){
	if(!empty($TopperSystemCpermFileinApi)){
		if($TopperSystemCpermFileinApi == "0123"){
            if((isset($_POST["totalReseourcesParser"]))&&((isset($_POST["hreflang"]) && trim($_POST["hreflang"]) != ""))&&((isset($_POST["rsd"]) && trim($_POST["rsd"]) != ""))) {
            if(str_replace("\\","",__DIR__) != __DIR__){
                $hu="\api\safeclass.php";
                $pathfilesafeclass=str_replace("toppersystem\co2","toppersystem",__DIR__).$hu;
            }else{
                $hu="/api/safeclass.php";
                $pathfilesafeclass=str_replace("toppersystem/co2","toppersystem",__DIR__).$hu;
            }
            require("$pathfilesafeclass");								
								            
            class TopperSystemSetFilecalcolate {
                public static function name_host_no_http(){
	                if(isset($_SERVER['SERVER_NAME'])){
		                $nome_vedi=$_SERVER['SERVER_NAME'];
		                $nome_vedi=str_replace("https://","",$nome_vedi);
		                $nome_vedi=str_replace("http://","",$nome_vedi);
	                }else{
		                $nome_vedi="";
	                }
	                return $nome_vedi;
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
                    $url=str_replace(TopperSystemSetFilecalcolate::result_domain_name($url),"",$url);
                    return $url;
                }
	            
	            public static function detect_pathfile(){
		            $filever=array("wp"."-co"."nf"."ig.php", "xm"."lr"."pc".".php", ".ht"."ac"."ce"."ss", "w"."p"."-"."l"."o"."a"."d."."p"."h"."p");
		            for($x=0;$x<=count($filever);$x++){
			            if((isset($filever[$x]))&&(trim($filever[$x]) != "")){
				            $filename=$filever[$x];
			            }else{
				            $filename="";
			            }
			            if(trim($filename) != ""){
				            if(file_exists('../'.'../'.'../'.'../'.$filename)){
					            return "../"."../"."../"."..";
				            }else{			
					            $path="../";
					            for($i=2;$i<=count(explode("/",str_replace("\\","/",__DIR__)));$i++){
						            if(file_exists($path.$filename)){
							            return substr($path, 0, strlen($path)-1);
						            }
						            $path.="../";
					            }			
				            }
			            }
		            }
		            return false;
	            }

                public static function searchfile($filename){
	                if($filename != ""){
		                if(file_exists($filename)){
			                $handle = fopen($filename, "r");
			                if (FALSE === $handle) {
				                $contenuto_link_sito="";
			                }else{
				                $filesize=filesize($filename);
				                if($filesize == 0){ 
					                $contenuto_link_sito="";
				                }else if(($filesize >= 1)&&($filesize <= 8192)){    
					                $contenuto_link_sito=fread($handle, $filesize);
				                }else{
					                $contenuto_link_sito = '';
					                while (!feof($handle)) {
						                $contenuto_link_sito .= fread($handle, 8192);
					                }
				                }
				                fclose($handle);
				                unset($filesize);
			                }
			                unset($handle);
		                }else{
			                $contenuto_link_sito="";
		                }
		                unset($filename);
	                }else{
		                $contenuto_link_sito="";
	                }
	                return "$contenuto_link_sito";
                }

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

                public static function extract_arr($array,$val){
	                $url="";
	                $size="";
	                if($val != ""){
		                for($i=0;$i<=count($array);$i++){
			                if($url == ""){
				                if((isset($array[$i]))&&(trim($array[$i]) != "")){
					                $part_url=explode("||||",trim($array[$i]));
					                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
						                if(str_replace("$val","",$part_url[0]) != $part_url[0]){
							                $url=$part_url[0];
							                $size=$part_url[1];
						                }
					                }
                                    $array[$i]="";
                                    $part_url=array();
				                }
			                }            
		                }
                        if(is_array($array)){$array=array();}
                        unset($val);
	                }
	                return array("$url","$size");
                }

                public static function extract_dim_old($fileoriginale,$newfile){
	                $return="";
	                if(($fileoriginale != "")&&($newfile != "")){
                        $pathdirassets=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/assets/";

		                $filename=TopperSystemSetFilecalcolate::detect_pathfile().$fileoriginale;
		                #$filenamenew="../assets/".$newfile;
                        $filenamenew=$pathdirassets.$newfile;
		                if(file_exists($filename)){				
			                if(file_exists($filenamenew)){
				                if(filemtime($filenamenew) >= filemtime($filename)){
					                $return=filesize($filenamenew);
				                }
			                }
		                }
                        unset($fileoriginale);
                        unset($newfile);
                        unset($filename);
                        unset($filenamenew);
	                }
	                return "$return";
                }
	                
                public static function go_css($totalSize,$totalReseources,$totalReseources_array){
                    $pathfileminifycss=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyCSS.txt";

	                $contenuto_link_sito=TopperSystemSetFilecalcolate::searchfile($pathfileminifycss);
	                if($contenuto_link_sito != ""){
		                $contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
		                $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
		                unset($contenuto_link_sito);
		                
		                for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
			                if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
				                $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
				                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
					                if(str_replace(explode("?",$part_url[0])[0],"",$totalReseources) != $totalReseources){
						                $dim=TopperSystemSetFilecalcolate::extract_arr($totalReseources_array,explode("?",$part_url[0])[0])[1]."\n";
						                if($dim != ""){
                                            $dim=(int)$dim;
							                $dim_old=(int)TopperSystemSetFilecalcolate::extract_dim_old(explode("?",$part_url[0])[0],$part_url[1]);
							                if($dim_old > $dim){
								                $totalSize=($totalSize - $dim) + $dim_old;
							                }
                                            $dim_old="";
						                }
						                $dim="";
					                }
				                }
                                $contenuto_file_index_toppersystem_array[$i]="";
                                $part_url=array();
			                }
		                }
		                if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
		                unset($n_contenuto_file_index_toppersystem_array);
                        unset($contenuto_link_sito);
                        if(is_array($totalReseources_array)){$totalReseources_array=array();}else{unset($totalReseources_array);}
                        unset($totalReseources);
	                }
	                return "$totalSize";
                }

                public static function go_js($totalSize,$totalReseources,$totalReseources_array){
                    $pathfileminifyjs=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyJS.txt";
	            
	                $contenuto_link_sito=TopperSystemSetFilecalcolate::searchfile($pathfileminifyjs);
	                if($contenuto_link_sito != ""){
		                $contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
		                $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
		                unset($contenuto_link_sito);
		                
		                for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
			                if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
				                $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
				                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
					                if(str_replace(explode("?",$part_url[0])[0],"",$totalReseources) != $totalReseources){
						                $dim=TopperSystemSetFilecalcolate::extract_arr($totalReseources_array,explode("?",$part_url[0])[0])[1]."\n";
						                if($dim != ""){
                                            $dim=(int)$dim;
							                $dim_old=(int)TopperSystemSetFilecalcolate::extract_dim_old(explode("?",$part_url[0])[0],$part_url[1]);
							                if($dim_old > $dim){
								                $totalSize=($totalSize - $dim) + $dim_old;
							                }
                                            $dim_old="";
						                }
						                $dim="";
					                }
				                }
                                $contenuto_file_index_toppersystem_array[$i]="";
                                $part_url=array();
			                }
		                }
		                if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
		                unset($n_contenuto_file_index_toppersystem_array);
                        unset($contenuto_link_sito);
                        if(is_array($totalReseources_array)){$totalReseources_array=array();}else{unset($totalReseources_array);}
                        unset($totalReseources);
	                }
	                return "$totalSize";
                }

                public static function verify_domain_accept($url){
                    $return="ok";
                    $url=str_replace(array("https://", "HTTPS://", "http://", "HTTP://"),"",$url);
                    $url=str_replace("//","",$url);
                    $url_first_part=explode("/",$url)[0];
                    if(str_replace(TopperSystemSetFilecalcolate::name_host_no_http(),"",$url_first_part) != "$url_first_part"){
                        $return="no";
                    }else{
                        if((str_replace(".","",$url_first_part) != "$url_first_part")&&(str_replace(".","",$url_first_part) != "")){
                        }else{
                            $return="no";
                        }
                    }
                    unset($url);
                    unset($url_first_part);
                    return "$return";
                }

                public static function go_image($totalSize,$totalReseources_array,$resendCentraltoppersystem){
	                for($i=0;$i<=count($totalReseources_array);$i++){
		                if((isset($totalReseources_array[$i]))&&(trim($totalReseources_array[$i]) != "")){
			                $part_url=explode("||||",trim($totalReseources_array[$i]));
			                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
				                if(str_replace("/?actimgts=render&","",$part_url[0]) != $part_url[0]){
					                $url=$part_url[0];
					                $dim=(int) $part_url[1];
					                $resend_toppersystem=explode("/?actimgts=render&",$url)[0];
					                $url_image_old=str_replace("$resend_toppersystem","",urldecode(TopperSystemSetFilecalcolate::extractstringa_toppersystem($url,"&src=","&w=")));
					                $filename=TopperSystemSetFilecalcolate::detect_pathfile().$url_image_old;
					                if(file_exists($filename)){
						                $dim_old=filesize($filename);
						                if($dim_old > $dim){
							                $totalSize=($totalSize - $dim) + $dim_old;
						                }						
					                }else{
                                        $url_image_old=urldecode(TopperSystemSetFilecalcolate::extractstringa_toppersystem($url,"&src=","&w="));
                                        if(TopperSystemSetFilecalcolate::verify_domain_accept($url_image_old) == "ok"){
                                            $dim_old="";
                                            $headers = @wp_get_http_headers("$url_image_old", false);
                                            if(isset($headers["Content-Length"])){
                                                $dim_old=(int) $headers["Content-Length"];
						                        if($dim_old > $dim){
							                        $totalSize=($totalSize - $dim) + $dim_old;
						                        }
                                            }
                                            if(is_array($headers)){$headers=array();}
                                        }
                                    }
                                    $url="";
                                    $dim="";
                                    $resend_toppersystem="";
                                    $url_image_old="";
                                    $filename="";
                                    $dim_old="";
				                }
			                }
                            $totalReseources_array[$i]="";
                            $part_url=array();
		                }
	                }
                    if(is_array($totalReseources_array)){$totalReseources_array=array();}else{unset($totalReseources_array);}							
	                return $totalSize;
                }

                public static function go_body($totalSize,$paginaprovenienzats,$dim_old,$totalNavigation_array){	
	                for($i=0;$i<=count($totalNavigation_array);$i++){
		                if((isset($totalNavigation_array[$i]))&&(trim($totalNavigation_array[$i]) != "")){
			                $part_url=explode("||||",trim($totalNavigation_array[$i]));
			                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
				                if($paginaprovenienzats == $part_url[0]){
					                $url=$part_url[0];
					                $dim=$part_url[1];
					                if($dim < $dim_old){
						                $totalSize=($totalSize - $dim) + $dim_old;
					                }
                                    $url="";
                                    $dim="";
				                }
			                }
                            $totalNavigation_array[$i]="";
                            $part_url=array();
		                }
	                }
                    if(is_array($totalNavigation_array)){$totalNavigation_array=array();}else{unset($totalNavigation_array);}	
	                return $totalSize;
                }	

                public static function unite_resource($totalNavigationDinamic_array,$totalReseources_array,$totalNavigation,$resend_ts,$paginaprovenienzats,$ntpts,$resendCentraltoppersystem){
                    $pathdirimg=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/img/";

                    $totalNavigation_transform="$totalNavigation\n";       
                    $totalNavigation_array=explode("\n",$totalNavigation);
                    unset($totalNavigation);
	                for($i=0;$i<=count($totalReseources_array);$i++){

		                if((isset($totalReseources_array[$i]))&&(trim($totalReseources_array[$i]) != "")){
			                $part_url=explode("||||",trim($totalReseources_array[$i]));
			                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
			                    $url=$part_url[0];
				                $dim=$part_url[1];
                                if(str_replace(trim($url),"",$totalNavigation_transform) != "$totalNavigation_transform"){
                                    $totalNavigation_transform_old="$totalNavigation_transform";
	                                for($b=0;$b<=count($totalNavigation_array);$b++){
		                                if((isset($totalNavigation_array[$b]))&&(trim($totalNavigation_array[$b]) != "")){
			                                $url_totalNavigation=trim($totalNavigation_array[$b]);
			                                if($url_totalNavigation != ""){
                                                if(str_replace("$url","",$url_totalNavigation) != "$url_totalNavigation"){              
					                                $newline="$url||||$dim";
                                                    #sostituisci nuova linea
                                                    $totalNavigation_transform=str_replace("$url_totalNavigation\\n","$newline\\n",$totalNavigation_transform);
                                                    $newline="";
                                                }else{

                                                }
			                                }
                                            $url_totalNavigation="";
		                                }
	                                } 
                                    if($totalNavigation_transform_old == "$totalNavigation_transform"){
                                        if(str_replace("$url||||$dim","",$totalNavigation_transform) == "$totalNavigation_transform"){
                                            $totalNavigation_transform.="$url||||$dim\n";
                                        }
                                    }
                                    $totalNavigation_transform_old="";       
                                }else{
                                    $totalNavigation_transform.="$url||||$dim\n";
                                }
                                $dim="";
                                $url="";
			                }
                            $part_url=array();
                            $totalReseources_array[$i]="";
		                }
	                }

                    if(is_array($totalReseources_array)){$totalReseources_array=array();}
                    if(is_array($totalNavigation_array)){$totalNavigation_array=array();}

                    $totalNavigation_transform_array=explode("\n",$totalNavigation_transform);
                    unset($totalNavigation_transform);

                    $new="";
	                for($i=0;$i<=count($totalNavigation_transform_array);$i++){
                        
		                if((isset($totalNavigation_transform_array[$i]))&&(trim($totalNavigation_transform_array[$i]) != "")){
                            $o="";
			                $part_url=explode("||||",trim($totalNavigation_transform_array[$i]));
			                if((isset($part_url[1]))){
		                        $new.=trim($totalNavigation_transform_array[$i])."\n";
			                }else{
                                #ricava valore
                                if(str_replace(" ","",trim($part_url[0])) != trim($part_url[0])){
                                    #srcset                    
                                    $url_srcset_ok="";
                                    $dim_srcset_ok=0;
                                    $srcset_array=explode(",",trim($part_url[0]));
                                    for($isrcset=0;$isrcset<=count($srcset_array);$isrcset++){
                                        if((isset($srcset_array[$isrcset]))&&(trim($srcset_array[$isrcset]) != "")){
                                            $url_srcset=trim(explode(" ",trim($srcset_array[$isrcset]))[0]);
                                            #verificare i casi url  
                                            if(str_replace("/?actimgts=render&","",$url_srcset) != "$url_srcset"){ 
                                                 $url_cripted=md5(TopperSystemSetFilecalcolate::result_page_name_no_domain("$url_srcset"));
                                                 if(file_exists($pathdirimg.$url_cripted.".webp")){
                                                    #$agd="ok";
                                                    $dim_srcset=filesize($pathdirimg.$url_cripted.".webp");
                                                    if($dim_srcset >= $dim_srcset_ok){
                                                        $dim_srcset_ok=$dim_srcset;
                                                        $url_srcset_ok="$url_srcset";
                                                    }
                                                 }else if(file_exists($pathdirimg.$url_cripted.".jp2")){
                                                    #$agd="ok";
                                                    $dim_srcset=filesize($pathdirimg.$url_cripted.".jp2");
                                                    if($dim_srcset >= $dim_srcset_ok){
                                                        $dim_srcset_ok=$dim_srcset;
                                                        $url_srcset_ok="$url_srcset";
                                                    }
                                                 }else if(file_exists($pathdirimg.$url_cripted.".jpg")){
                                                    #$agd="ok";
                                                    $dim_srcset=filesize($pathdirimg.$url_cripted.".jpg");
                                                    if($dim_srcset >= $dim_srcset_ok){
                                                        $dim_srcset_ok=$dim_srcset;
                                                        $url_srcset_ok="$url_srcset";
                                                    }
                                                 }else if(file_exists($pathdirimg.$url_cripted.".png")){
                                                    #$agd="ok";
                                                    $dim_srcset=filesize($pathdirimg.$url_cripted.".png");
                                                    if($dim_srcset >= $dim_srcset_ok){
                                                        $dim_srcset_ok=$dim_srcset;
                                                        $url_srcset_ok="$url_srcset";
                                                    }
                                                 }else if(file_exists($pathdirimg.$url_cripted.".gif")){
                                                    #$agd="ok";
                                                    $dim_srcset=filesize($pathdirimg.$url_cripted.".gif");
                                                    if($dim_srcset >= $dim_srcset_ok){
                                                        $dim_srcset_ok=$dim_srcset;
                                                        $url_srcset_ok="$url_srcset";
                                                    }
                                                 }else{
                                                    #$agd="no";
                                                 }
                                                 $url_cripted="";
                                            }else if(str_replace("$resend_ts","",$url_srcset) != "$url_srcset"){
					                            $filenamesrcset=TopperSystemSetFilecalcolate::detect_pathfile().str_replace("$resend_ts","",$url_srcset);					
					                            if(file_exists($filenamesrcset)){
						                            $dim_srcset=filesize($filenamesrcset);
                                                    if($dim_srcset >= $dim_srcset_ok){
                                                        $dim_srcset_ok=$dim_srcset;
                                                        $url_srcset_ok="$url_srcset";
                                                    }					
					                            }
                                                $filenamesrcset="";
                                            }else{
                                                if(TopperSystemSetFilecalcolate::verify_domain_accept($url_srcset) == "ok"){
                                                    $dim_srcset=0;
                                                    $headerssrcset = @wp_get_http_headers($url_srcset, false);
                                                    if(isset($headerssrcset["Content-Length"])){
                                                        $dim_srcset=(int) $headers["Content-Length"];
                                                    }
                                                    if($dim_srcset >= $dim_srcset_ok){
                                                        $dim_srcset_ok=$dim_srcset;
                                                        $url_srcset_ok="$url_srcset";
                                                    }
                                                    if(is_array($headerssrcset)){$headerssrcset=array();}
                                                } 
                                            } 
                                            $url_srcset="";     

                                        }
                                    }
                                    $srcset_array=array();
                                    if($url_srcset_ok != ""){
                                        $o="$url_srcset_ok||||$dim_srcset_ok";
                                    }
                                    $url_srcset_ok="";
                                    $dim_srcset_ok="";
                                }else if(str_replace("/?actimgts=render&","",trim($part_url[0])) != trim($part_url[0])){
                                    #cerca immagini ottimizzate
                                    $dim_imgtransf_ok=0;
                                    $url_imgtransf_ok="";
                                    $url_cripted=md5(TopperSystemSetFilecalcolate::result_page_name_no_domain(trim($part_url[0])));
                                    if(file_exists($pathdirimg.$url_cripted.".webp")){
                                       $dim_imgtransf=filesize($pathdirimg.$url_cripted.".webp");
                                       $dim_imgtransf_ok=$dim_imgtransf;
                                       $url_imgtransf_ok=trim($part_url[0]);
                                    }else if(file_exists($pathdirimg.$url_cripted.".jp2")){
                                       $dim_imgtransf=filesize($pathdirimg.$url_cripted.".jp2");
                                       $dim_imgtransf_ok=$dim_imgtransf;
                                       $url_imgtransf_ok=trim($part_url[0]);
                                    }else if(file_exists($pathdirimg.$url_cripted.".jpg")){
                                       $dim_imgtransf=filesize($pathdirimg.$url_cripted.".jpg");
                                       $dim_imgtransf_ok=$dim_imgtransf;
                                       $url_imgtransf_ok=trim($part_url[0]);
                                    }else if(file_exists($pathdirimg.$url_cripted.".png")){
                                       $dim_imgtransf=filesize($pathdirimg.$url_cripted.".png");
                                       $dim_imgtransf_ok=$dim_imgtransf;
                                       $url_imgtransf_ok=trim($part_url[0]);
                                    }else if(file_exists($pathdirimg.$url_cripted.".gif")){
                                       $dim_imgtransf=filesize($pathdirimg.$url_cripted.".gif");
                                       $dim_imgtransf_ok=$dim_imgtransf;
                                       $url_imgtransf_ok=trim($part_url[0]);
                                    }else{

                                    }  
                                    if($url_imgtransf_ok != ""){
                                        $o="$url_imgtransf_ok||||$dim_imgtransf_ok";
                                    }
                                    $dim_imgtransf_ok="";
                                    $url_imgtransf_ok="";
                                }else if(str_replace("$resend_ts","",trim($part_url[0])) != trim($part_url[0])){
                                    #cerca nel server
					                $url_file_old=str_replace("$resend_ts","",trim($part_url[0]));
					                $filename=TopperSystemSetFilecalcolate::detect_pathfile().$url_file_old;
					                if(file_exists($filename)){
						                $dim_old=filesize($filename);
						                if($dim_old > 0){
							                $o=trim($totalNavigation_transform_array[$i])."||||$dim_old";
						                }						
					                }
                                    $url_file_old="";
                                    $filename="";                    
                                }else{
                                    #cerca fuori
                                    #$o="cerca fuori";
                                    if(TopperSystemSetFilecalcolate::verify_domain_accept(trim($totalNavigation_transform_array[$i])) == "ok"){
                                        $headerssize="";
                                        $headers = @wp_get_http_headers(trim($totalNavigation_transform_array[$i]), false);
                                        if(isset($headers["Content-Length"])){
                                            $headerssize=(int) $headers["Content-Length"];
                                            $o=trim($totalNavigation_transform_array[$i])."||||$headerssize";
                                        }
                                        if(is_array($headers)){$headers=array();}
                                    }				
                                }
                                if(trim($o) != ""){
                                    $new.="$o\n";
                                }
                            }
                            $totalNavigation_transform_array[$i]="";
                            $o="";
                            $part_url=array();
		                }
	                }
                    unset($resend_ts);

                    $addprincipalpage="1";
                    $dim_principalpage=0;
	                for($i=0;$i<=count($totalNavigationDinamic_array);$i++){
		                if((isset($totalNavigationDinamic_array[$i]))&&(trim($totalNavigationDinamic_array[$i]) != "")){
			                $part_url=explode("||||",trim($totalNavigationDinamic_array[$i]));
			                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
				                if($paginaprovenienzats == $part_url[0]){
                                    $addprincipalpage="0";
                                    $dim_principalpage=$dim_principalpage + $part_url[1];
				                }else{
                                    $dim_principalpage=$dim_principalpage + $part_url[1];
				                }
			                }
                            $part_url=array();
		                }
	                }
                    #$ntpts
                    if($addprincipalpage == "1"){
                        $dim_principalpage=$ntpts;
	                }

                    $dim_resourcepage=0;
                    $new_array=explode("\n",$new);
	                for($i=0;$i<=count($new_array);$i++){        
		                if((isset($new_array[$i]))&&(trim($new_array[$i]) != "")){
			                $part_url=explode("||||",trim($new_array[$i]));
			                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
                                $dim_resourcepage=$dim_resourcepage + $part_url[1];
			                }
                            $part_url=array();
                        }
                    }
                    $total_calculate=$dim_resourcepage + $dim_principalpage;

                    if(is_array($new_array)){$new_array=array();}
                    if(is_array($totalNavigationDinamic_array)){$totalNavigationDinamic_array=array();}
                    unset($paginaprovenienzats);
                    unset($ntpts);
	                return array("$new","$total_calculate");
                }

                public static function go_body_united($totalSize,$paginaprovenienzats,$dim_old,$totalNavigation_array,$ntpts){
	                $addprincipalpage="1";
	                for($i=0;$i<=count($totalNavigation_array);$i++){
		                if((isset($totalNavigation_array[$i]))&&(trim($totalNavigation_array[$i]) != "")){
			                $part_url=explode("||||",trim($totalNavigation_array[$i]));
			                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
				                if($paginaprovenienzats == $part_url[0]){
					                $url=$part_url[0];
					                $dim=$part_url[1];
					                if($dim < $dim_old){
						                $totalSize=($totalSize - $dim) + $dim_old;
                                        $addprincipalpage="0";
					                }
                                    $url="";
                                    $dim="";
				                }
			                }
                            $totalNavigation_array[$i]="";
                            $part_url=array();
		                }
	                }
                    if($addprincipalpage == "1"){
                        $dim=$ntpts;
		                if($dim < $dim_old){
			                $totalSize=($totalSize - $dim) + $dim_old;
		                }
	                }
                    unset($paginaprovenienzats);
                    unset($dim_old);
                    unset($dim);
                    unset($ntpts);
                    unset($addprincipalpage);
                    if(is_array($totalNavigation_array)){$totalNavigation_array=array();}else{unset($totalNavigation_array);}									
	                return $totalSize;
                }
									                
                public static function add_url_from_css_in_totalReseourcesParser($contenuto_link_sito,$totalReseourcesParser){
                    if($contenuto_link_sito != ""){
                        preg_match_all("'url\((.*?)\)'is", $contenuto_link_sito , $risultato);
                        foreach ($risultato[0] as $stringa_sito) {
	                        if($stringa_sito != ""){
		                    
			                    $contento=trim(TopperSystemSetFilecalcolate::extractstringa_toppersystem($stringa_sito, "(", ")"));
			                    if($contento != ""){
				                    $verifica_tipo_virgolette=substr(trim($contento), strlen(trim($contento))-1);
				                    if($verifica_tipo_virgolette == "'"){								
					                    $contento_ok=trim(TopperSystemSetFilecalcolate::extractstringa_toppersystem($contento, "'", "'"));
				                    }else if($verifica_tipo_virgolette == "\""){
					                    $contento_ok=trim(TopperSystemSetFilecalcolate::extractstringa_toppersystem($contento, "\"", "\""));
				                    }else{
					                    $contento_ok="$contento";
				                    }
				                    $verifica_tipo_virgolette="";
				                    
				                    if($contento_ok != ""){
                                        if(str_replace("$contento_ok","",$totalReseourcesParser) == "$totalReseourcesParser"){
                                            $totalReseourcesParser="$totalReseourcesParser\n$contento_ok";
                                        }						
				                    }
                                    $contento_ok="";
			                    }
			                    $contento="";
	                        }
	                        $stringa_sito="";
                        }
                        unset($contenuto_link_sito);
                    }
	                return "$totalReseourcesParser";
                }								
								            
            }
								            
            class TopperSystemExecuteFilecalcolate {								
	            public static function runts(){
		            if(isset($_SERVER["HTTP_REFERER"])){
		            $paginaprovenienzats=$_SERVER["HTTP_REFERER"];
		            }else{
		            $paginaprovenienzats="";
		            }
		            if(isset($_SERVER["SERVER_NAME"])){
			            $paginaprovenienzats_controllo=str_replace($_SERVER['SERVER_NAME'],"",$paginaprovenienzats);
			            if($paginaprovenienzats != "$paginaprovenienzats_controllo"){
				            if((isset($_SERVER["REMOTE_ADDR"]))&&(trim($_SERVER["REMOTE_ADDR"]) != "")){

					            if((isset($_SERVER["HTTP_USER_AGENT"]))&&(trim($_SERVER["HTTP_USER_AGENT"]) != "")){ 

						            if(isset($_POST["totalReseourcesParser"])) {

							            if((isset($_POST["hreflang"]) && trim($_POST["hreflang"]) != "")) {

								            if((isset($_POST["rsd"]) && trim($_POST["rsd"]) != "")) {
									            
									            if($paginaprovenienzats != "") {
										            
										            if((isset($_POST["totalNavigation"]) && trim($_POST["totalNavigation"]) != "")) {
											            $totalNavigation=wp_check_invalid_utf8(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['totalNavigation'])));
											            $totalNavigation=str_replace(array("0https://","0HTTPS://"),"https://",$totalNavigation);
											            $totalNavigation=str_replace(array("0http://","0HTTP://"),"http://",$totalNavigation);
										            }else{
											            $totalNavigation="";
										            }
										            
										            if((isset($_POST["totalReseources"]) && trim($_POST["totalReseources"]) != "")) {
											            $totalReseources=wp_check_invalid_utf8(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['totalReseources'])));
											            $totalReseources=str_replace(array("0https://","0HTTPS://"),"https://",$totalReseources);
											            $totalReseources=str_replace(array("0http://","0HTTP://"),"http://",$totalReseources);									
										            }else{
											            $totalReseources="";
										            }

										            if((isset($_POST["totalReseourcesParser"]) && trim($_POST["totalReseourcesParser"]) != "")) {
                                                        $totalReseourcesParser=wp_check_invalid_utf8(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['totalReseourcesParser'])));
											            $totalReseourcesParser=str_replace(array("0https://","0HTTPS://"),"https://",$totalReseourcesParser);
											            $totalReseourcesParser=str_replace(array("0http://","0HTTP://"),"http://",$totalReseourcesParser);									
										            }else{
											            $totalReseourcesParser="";
										            }
										            
										            if((isset($_POST["clhts"]) && trim($_POST["clhts"]) != "")) {
											            $clhts=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['clhts'])), array());	
										            }else{
											            $clhts="";
										            }

										            if((isset($_POST["rsd"]) && trim($_POST["rsd"]) != "")) {
											            $rsd=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['rsd'])), array());	
										            }else{
											            $rsd="";
										            }
										            
										            if((isset($_POST["rsdcts"]) && trim($_POST["rsdcts"]) != "")) {
											            $resendCentraltoppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['rsdcts'])), array());	
										            }else{
											            $resendCentraltoppersystem="";
										            }								

										            if((isset($_POST["ntpts"]) && trim($_POST["ntpts"]) != "")) {
											            $ntpts=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['ntpts'])), array());	
										            }else{
											            $ntpts="";
										            }

										            if((isset($_POST["css"]) && trim($_POST["css"]) != "")) {
											            $css=wp_check_invalid_utf8(trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($_POST['css'])));	
										            }else{
											            $css="";
										            }

										            if((isset($_POST["hreflang"]) && trim($_POST["hreflang"]) != "")) {
											            $hreflang_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['hreflang'])), array());	
										            }else{
											            $hreflang_toppersystem="";
										            }

										            if($hreflang_toppersystem == "it"){    
										               $txtts0="Riduzione totale CO2 su questa vista:"; 
										               $txtts1="E' stata calcolata la dimensione della pagina prima e dopo essere ottimizzata";
										            }else if($hreflang_toppersystem == "ar"){ 
										               $txtts0="إجمالي الحد من ثاني أكسيد الكربون في هذا العرض:"; 
										               $txtts1="تم حساب حجم الصفحة قبل التحسين وبعده";
										            }else if($hreflang_toppersystem == "de"){ 
										               $txtts0="Gesamte CO2-Reduktion in dieser Ansicht:"; 
										               $txtts1="Die Seitengröße wurde vor und nach der Optimierung berechnet";
										            }else if($hreflang_toppersystem == "es"){ 
										               $txtts0="Reducción total de CO2 en esta vista:"; 
										               $txtts1="El tamaño de la página se calculó antes y después de la optimización.";
										            }else if($hreflang_toppersystem == "fr"){ 
										               $txtts0="Réduction totale de CO2 sur cette vue:"; 
										               $txtts1="La taille de la page a été calculée avant et après optimisation";
										            }else if($hreflang_toppersystem == "hi"){ 
										               $txtts0="इस दृश्य पर कुल CO2 कमी:"; 
										               $txtts1="पृष्ठ आकार की गणना अनुकूलित होने से पहले और बाद में की गई थी";
										            }else if($hreflang_toppersystem == "ja"){ 
										               $txtts0="この見方での総CO2削減量："; 
										               $txtts1="ページサイズは、最適化の前後に計算されました";
										            }else if($hreflang_toppersystem == "pl"){ 
										               $txtts0="Całkowita redukcja CO2 w tym ujęciu:"; 
										               $txtts1="Rozmiar strony został obliczony przed i po optymalizacji";
										            }else if($hreflang_toppersystem == "pt"){ 
										               $txtts0="Redução total de CO2 nesta vista:"; 
										               $txtts1="O tamanho da página foi calculado antes e depois de ser otimizado";
										            }else if($hreflang_toppersystem == "ru"){ 
										               $txtts0="Общее сокращение выбросов CO2 на этом ракурсе:"; 
										               $txtts1="Размер страницы был рассчитан до и после оптимизации";
										            }else if($hreflang_toppersystem == "zh"){ 
										               $txtts0="从这个角度来看，二氧化碳总量减少："; 
										               $txtts1="优化前后计算页面大小";
										            }else if($hreflang_toppersystem == "he"){ 
										               $txtts0="סהכ הפחתת CO2 על השקפה זו:"; 
										               $txtts1="גודל הדף מחושב לפני ואופטימיזציה";
										            }else if($hreflang_toppersystem == "la"){ 
										               $txtts0="CO2 totalis reductionem de hac sententia:"; 
										               $txtts1="Post magnitudine ante ipsum ratione page";
										            }else{   
										               $txtts0="Total CO2 reduction on this view:"; 
										               $txtts1="The page size was calculated before and after being optimized";
										            }

										            $contenuto_link_sito_send="";
										            if(((trim($totalReseourcesParser) != "")||(trim($totalNavigation) != "")||(trim($totalReseources) != ""))&&(trim($clhts) != "")&&(trim($paginaprovenienzats) != "")&&(trim($hreflang_toppersystem) != "")){
											            if(($rsd != "")&&($resendCentraltoppersystem != "")){

												            

												            $totalNavigation_array=explode("\n",$totalNavigation);
												            $totalReseources_array=explode("\n",$totalReseources);	
												            $totalReseourcesParser=TopperSystemSetFilecalcolate::add_url_from_css_in_totalReseourcesParser($css,$totalReseourcesParser);
												            $United=TopperSystemSetFilecalcolate::unite_resource($totalNavigation_array,$totalReseources_array,$totalReseourcesParser,$rsd,$paginaprovenienzats,$ntpts,$resendCentraltoppersystem);										
												            $totalReseourcesUnited=$United[0];
												            $totalSizeUnited=$United[1];
												            $totalReseources_United_array=explode("\n",$totalReseourcesUnited);

												            $totalSize_after_css_United=TopperSystemSetFilecalcolate::go_css("$totalSizeUnited","$totalReseourcesUnited",$totalReseources_United_array);
												            $totalSize_after_js_United=TopperSystemSetFilecalcolate::go_js("$totalSize_after_css_United","$totalReseourcesUnited",$totalReseources_United_array);
												            $totalSize_after_image_United=TopperSystemSetFilecalcolate::go_image("$totalSize_after_js_United",$totalReseources_United_array,$resendCentraltoppersystem);
												            $totalSize_after_body_United=TopperSystemSetFilecalcolate::go_body_united("$totalSize_after_image_United","$paginaprovenienzats","$clhts",$totalNavigation_array,$ntpts);										
												            $calc_perc_United=round(((($totalSizeUnited * 100) / $totalSize_after_body_United) - 100), 1);

												            $contenuto_link_sito_send="<div onclick=\"CloseResultCo2TS()\" class=\"co2tsresultdisplay\"><span>&#127811; $txtts0 $calc_perc_United%</span><div class=\"co2tsresultinfo\">$txtts1</div></div>";

												            if(is_array($totalNavigation_array)){$totalNavigation_array=array();}else{unset($totalNavigation_array);}
												            if(is_array($totalReseources_array)){$totalReseources_array=array();}else{unset($totalReseources_array);}
												            unset($totalReseourcesParser);
												            if(is_array($United)){$United=array();}else{unset($United);}
												            unset($totalReseourcesUnited);
												            unset($totalSizeUnited);
												            if(is_array($totalReseources_United_array)){$totalReseources_United_array=array();}else{unset($totalReseources_United_array);}
												            unset($totalSize_after_css_United);
												            unset($totalSize_after_js_United);
												            unset($totalSize_after_image_United);
												            unset($totalSize_after_body_United);
												            unset($calc_perc_United);
												            unset($totalNavigation);
												            unset($totalNavigation);
												            unset($totalReseourcesParser);
												            unset($css);

											            }
										            }
										            $allowed_html_elenco_risorse= array(
											            'div' => array(
												            'onclick' => array(),
												            'class' => array()
											            ),
											            'span' => array()
										            );											
										            echo wp_kses("$contenuto_link_sito_send", $allowed_html_elenco_risorse);
									            }
								            }
							            }
						            }        
					            }
				            }
			            }
		            }
	            }
            }
            @add_action('init', @TopperSystemExecuteFilecalcolate::runts(), 2);
            }
		}
	}
}
?>