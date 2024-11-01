<?php
if(isset($TopperSystemCpermFileinApi)){
	if(!empty($TopperSystemCpermFileinApi)){
		if($TopperSystemCpermFileinApi == "0123"){

            if(isset($authcode_toppersystem)) {

            class TopperSystemSetFilereceived {
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

                public static function result_domain_name($url){
                    $url=str_replace("://","[TsostituisciS]",$url);
                    $url=explode("/",$url)["0"];
                    $url=explode("?",$url)["0"];
                    $url=explode("#",$url)["0"];
                    $url=str_replace("[TsostituisciS]","://",$url);    
                    return $url;
                }

                public static function result_page_name_no_domain($url){
                    $url=str_replace(TopperSystemSetFilereceived::result_domain_name($url),"",$url);
                    return $url;
                }

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
						                TopperSystemSetFilereceived::leggiDir ($list, $fullname);
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

                public static function verifica_esistenza_file_nelle_directory($stringa,$directory){
	                
	                $conta_occorrenze=0;
	                if(trim($stringa) != ""){
	                
		                $lista_trovati = array('lista_trovati' => null);
		                $lista_path = array('lista_path' => null);
		                
		                TopperSystemSetFilereceived::leggiDir ($lista_path, $directory);

		                foreach ($lista_path as $path)
		                {
			                $path_verifica=str_replace("/$stringa","",$path);
			                if($path != $path_verifica){
				                
				                $lista_trovati[$conta_occorrenze]=$path;
				                $conta_occorrenze++;

			                }			
			                $path_verifica="";
                            $path="";
		                }
		                
	                }
	                
	                if($conta_occorrenze == "0"){
		                $return=array('lista_trovati' => null);
	                }else{
		                $return=$lista_trovati;
	                }

	                $stringa="";
	                $directory="";
	                $conta_occorrenze="";
	                if(is_array($lista_trovati)){$lista_trovati = array();}
	                if(is_array($lista_path)){$lista_path = array();}
	                return $return;
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
					            #$path="../../";
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
	            
                #elabora css e js
	            public static function is_script_accettable_ts($stringa_sito){
		            if($stringa_sito != ""){
                        $return="ok";
                        $stringa_sito_array=explode("\n",$stringa_sito);
                        $n_stringa_sito_array=count($stringa_sito_array);
                		for($i=0;$i<=$n_stringa_sito_array;$i++){
				            if((isset($stringa_sito_array[$i]))&&(trim($stringa_sito_array[$i]) != "")){
					            if(strlen($stringa_sito_array[$i]) >= 4000){
						            $return="no";
					            }
				            }
			            }
			            if(is_array($stringa_sito_array)){$stringa_sito_array=array();}else{$stringa_sito_array="";}
                        unset($n_stringa_sito_array);
		            }else{
			            $return="no";
		            }
		            unset($stringa_sito);
		            return "$return";
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

                public static function extractstringa($stringa, $inizio, $fine) {
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

                public static function work_attributo($attributo,$stringa_analizza){
	                $return="";
	                $return_content="";
	                
	                $go="ok";
	                $from=' '.$attributo.'="';
	                $to='"';
	                $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
	                if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
		                $from=' '.$attributo.'= "';
		                $to='"';
		                $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
		                if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
			                $from=' '.$attributo.' = "';
			                $to='"';
			                $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
			                if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
				                $from=' '.$attributo.' ="';
				                $to='"';
				                $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
				                if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
					                $from=' '.$attributo.'=\'';
					                $to='\'';
					                $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
					                if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
						                $from=' '.$attributo.'= \'';
						                $to='\'';
						                $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
						                if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
							                $from=' '.$attributo.' = \'';
							                $to='\'';
							                $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
							                if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
								                $from=' '.$attributo.' =\'';
								                $to='\'';
								                $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
								                if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
                                                    $from=' '.ucfirst($attributo).'="';
                                                    $to='"';
                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
	                                                    $from=' '.ucfirst($attributo).'= "';
	                                                    $to='"';
	                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
	                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
		                                                    $from=' '.ucfirst($attributo).' = "';
		                                                    $to='"';
		                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
		                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
			                                                    $from=' '.ucfirst($attributo).'= "';
			                                                    $to='"';
			                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
			                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
				                                                    $from=' '.ucfirst($attributo).'=\'';
				                                                    $to='\'';
				                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
				                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
					                                                    $from=' '.ucfirst($attributo).'= \'';
					                                                    $to='\'';
					                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
					                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
						                                                    $from=' '.ucfirst($attributo).' = \'';
						                                                    $to='\'';
						                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
						                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
							                                                    $from=' '.ucfirst($attributo).' =\'';
							                                                    $to='\'';
							                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
							                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
								                                                    $from=' '.strtoupper($attributo).'="';
								                                                    $to='"';
								                                                    $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
								                                                    if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
                                                                                        $from=' '.strtoupper($attributo).'= "';
                                                                                        $to='"';
                                                                                        $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
                                                                                        if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
	                                                                                        $from=' '.strtoupper($attributo).' ="';
	                                                                                        $to='"';
	                                                                                        $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
	                                                                                        if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
		                                                                                        $from=' '.strtoupper($attributo).' = "';
		                                                                                        $to='"';
		                                                                                        $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
		                                                                                        if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
			                                                                                        $from=' '.strtoupper($attributo).'=\'';
			                                                                                        $to='\'';
			                                                                                        $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
			                                                                                        if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
				                                                                                        $from=' '.strtoupper($attributo).'= \'';
				                                                                                        $to='\'';
				                                                                                        $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
				                                                                                        if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
					                                                                                        $from=' '.strtoupper($attributo).' = \'';
					                                                                                        $to='\'';
					                                                                                        $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
					                                                                                        if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
						                                                                                        $from=' '.strtoupper($attributo).' =\'';
						                                                                                        $to='\'';
						                                                                                        $ris=TopperSystemSetFilereceived::extractstringa($stringa_analizza, $from, $to);
						                                                                                        if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
							                                                                                        $go="no";
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
				                }
			                }
		                }
	                }	
	                
	                if($go == "ok"){
		                $return="$from$ris$to";
		                $return_content="$ris";
	                }
	                unset($attributo);
	                unset($stringa_analizza);
	                unset($ris);
	                unset($from);
	                unset($ris);
	                unset($to);	
	                return array("$return","$return_content");
                }

	            public static function add_font_display_swap_to_css_ts($stringa_sito){
		            if(trim($stringa_sito) != ""){
			            if(str_replace(array("@font-face{","@font-face {"),"",strtolower($stringa_sito)) != strtolower("$stringa_sito")){			
				            if(str_replace(array("font-display:swap","font-display: swap"),"",strtolower($stringa_sito)) == strtolower("$stringa_sito")){
					            $new_s="";
					            $stringa_sito=str_replace(array("@font-face{","@font-face {","@font-face\n{","@font-face \n{","@font-face\n {"),"@font-face{font-display:swap;",$stringa_sito);
					            $contenuto_link_sito_analizza="$stringa_sito";			
					            preg_match_all("'{font-display:swap;(.*?)}'is", trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
					            $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
					            for($i=0;$i<=count($contenuto_link_sito_analizza) + 1;$i++){
						            if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){		
							            if(str_replace("font-display:","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i])){					
								            if(str_replace(array("font-display:swap;","font-display: swap;","font-display:auto;","font-display: auto;","font-display:block;","font-display: block;","font-display:optional;","font-display: optional;","font-display:fallback;","font-display: fallback;"),"",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){		
									            $new_s=str_replace(array("font-display:swap;","font-display: swap;","font-display:auto;","font-display: auto;","font-display:block;","font-display: block;","font-display:optional;","font-display: optional;","font-display:fallback;","font-display: fallback;"),"",$contenuto_link_sito_analizza[$i]);			
								            }else if(str_replace(array("font-display:swap !important;","font-display: swap !important;","font-display:auto !important;","font-display: auto !important;","font-display:block !important;","font-display: block !important;","font-display:optional !important;","font-display: optional !important;","font-display:fallback !important;","font-display: fallback !important;"),"",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){		
									            $new_s=str_replace(array("font-display:swap !important;","font-display: swap !important;","font-display:auto !important;","font-display: auto !important;","font-display:block !important;","font-display: block !important;","font-display:optional !important;","font-display: optional !important;","font-display:fallback !important;","font-display: fallback !important;"),"",$contenuto_link_sito_analizza[$i]);			
								            }else if(str_replace(array("font-display:swap!important;","font-display: swap!important;","font-display:auto!important;","font-display: auto!important;","font-display:block!important;","font-display: block!important;","font-display:optional!important;","font-display: optional!important;","font-display:fallback!important;","font-display: fallback!important;"),"",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){		
									            $new_s=str_replace(array("font-display:swap!important;","font-display: swap!important;","font-display:auto!important;","font-display: auto!important;","font-display:block!important;","font-display: block!important;","font-display:optional!important;","font-display: optional!important;","font-display:fallback!important;","font-display: fallback!important;"),"",$contenuto_link_sito_analizza[$i]);			
								            }else if(str_replace(array("font-display:swap !important","font-display: swap !important","font-display:auto !important","font-display: auto !important","font-display:block !important","font-display: block !important","font-display:optional !important","font-display: optional !important","font-display:fallback !important","font-display: fallback !important"),"",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){		
									            $new_s=str_replace(array("font-display:swap !important","font-display: swap !important","font-display:auto !important","font-display: auto !important","font-display:block !important","font-display: block !important","font-display:optional !important","font-display: optional !important","font-display:fallback !important","font-display: fallback !important"),"",$contenuto_link_sito_analizza[$i]);			
								            }else if(str_replace(array("font-display:swap!important","font-display: swap!important","font-display:auto!important","font-display: auto!important","font-display:block!important","font-display: block!important","font-display:optional!important","font-display: optional!important","font-display:fallback!important","font-display: fallback!important"),"",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){		
									            $new_s=str_replace(array("font-display:swap!important","font-display: swap!important","font-display:auto!important","font-display: auto!important","font-display:block!important","font-display: block!important","font-display:optional!important","font-display: optional!important","font-display:fallback!important","font-display: fallback!important"),"",$contenuto_link_sito_analizza[$i]);			
								            }else if(str_replace(array("font-display:swap","font-display: swap","font-display:auto","font-display: auto","font-display:block","font-display: block","font-display:optional","font-display: optional","font-display:fallback","font-display: fallback"),"",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){		
									            $new_s=str_replace(array("font-display:swap","font-display: swap","font-display:auto","font-display: auto","font-display:block","font-display: block","font-display:optional","font-display: optional","font-display:fallback","font-display: fallback"),"",$contenuto_link_sito_analizza[$i]);			
								            }else{
									            $new_s="";
								            }					
								            if((trim($new_s) != "")&&(trim($new_s) != trim($contenuto_link_sito_analizza[$i]))){
									            $stringa_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_s",$stringa_sito);
								            }
								            $new_s="";
							            }
							            $contenuto_link_sito_analizza[$i]="";
						            }
					            }
					            if(is_array($contenuto_link_sito_analizza)){$contenuto_link_sito_analizza=array();}else{$contenuto_link_sito_analizza="";}
					            unset($new_s);
				            }
			            }
		            }else{
			            $stringa_sito="";
		            }
		            return "$stringa_sito";
	            }	
	            
	            public static function clean_css($stringa_sito){
		            if($stringa_sito != ""){
			            if(((str_replace("{","",$stringa_sito) != "$stringa_sito")&&(str_replace("}","",$stringa_sito) != "$stringa_sito"))){
				            $stringa_sito=TopperSystemSetFilereceived::add_font_display_swap_to_css_ts("$stringa_sito");
				            if(TopperSystemSetFilereceived::is_script_accettable_ts($stringa_sito) == "ok"){
					            $output=TopperSystemAndMinifyCSSCompressor::process($stringa_sito);
				            }else{
					            $output="$stringa_sito";
				            }
			            }else{
				            $output="$stringa_sito";
			            }
		            }else{
			            $output="";
		            }
		            unset($stringa_sito);
		            return "$output";
	            }

                public static function extract_font_inline_from_code_function($contenuto_link_sito){

                    $lista_trovati_font="";
                    if($contenuto_link_sito != ""){
                        $contenuto_link_sito_prep=str_replace("\n","",$contenuto_link_sito);
                        $contenuto_link_sito_prep=str_replace(";",";\n",$contenuto_link_sito_prep);
                        $contenuto_link_sito_prep=str_replace("url(","\nurl(",$contenuto_link_sito_prep);
                        $array_contenuto_link_sito_prep=explode("\n",$contenuto_link_sito_prep);

                        $n_array_contenuto_link_sito_prep=count($array_contenuto_link_sito_prep);
                        for($i=0;$i<=$n_array_contenuto_link_sito_prep;$i++){
                            if((isset($array_contenuto_link_sito_prep[$i]))&&(trim($array_contenuto_link_sito_prep[$i]) != "")){
                                $record_array=trim($array_contenuto_link_sito_prep[$i]);
                                $url=trim(TopperSystemSetFilereceived::extractstringa_toppersystem($record_array, 'url(', ')'));
                                if($url != ""){
                                    $url=str_replace(array("\"","'"),"",$url);
                                    $url_min=strtolower($url);
                                    if(str_replace(array(".etx",".sfp",".sfd",".fot",".pfa",".pfb",".eot",".pfm",".afm",".fnt",".ttf",".woff2",".woff"),"",$url_min) != "$url_min"){
                                        $array_url_min=explode(".",$url_min);       						                        
                                        if(isset($array_url_min["1"])){
						                    if(trim($array_url_min["1"]) != ""){
                                                $pass="no";
                                                if(str_replace("//","",$url) != "$url"){
                                                    if(substr($url, 0, 2) == "//"){
                                                        $pass="ok";
                                                    }
                                                }                                             
                                                if((str_replace(array("https://","http://"),"",$url) != "$url")||($pass == "ok")){
                                                    $go="ok";
                                                }else{
                                                    if(file_exists($url)){
                                                        $go="ok";
                                                    }else{
                                                        $go="no";
                                                    }
                                                }
                                                if($go == "ok"){
                                                    $exstention=trim(end($array_url_min));
                                                    if($exstention == "etx"){
                                                        $lista_trovati_font.="$url,;"; 
                                                    }else if($exstention == "sfp"){
                                                        $lista_trovati_font.="$url,;";     
                                                    }else if($exstention == "sfd"){
                                                        $lista_trovati_font.="$url,;";     
                                                    }else if($exstention == "fot"){
                                                        $lista_trovati_font.="$url,;";   
                                                    }else if($exstention == "pfa"){
                                                        $lista_trovati_font.="$url,;";    
                                                    }else if($exstention == "pfb"){
                                                        $lista_trovati_font.="$url,;";    
                                                    }else if($exstention == "eot"){
                                                        $lista_trovati_font.="$url,;";    
                                                    }else if($exstention == "pfm"){
                                                        $lista_trovati_font.="$url,;";   
                                                    }else if($exstention == "afm"){
                                                        $lista_trovati_font.="$url,;";    
                                                    }else if($exstention == "fnt"){
                                                        $lista_trovati_font.="$url,;";    
                                                    }else if($exstention == "ttf"){
                                                        $lista_trovati_font.="$url,;";    
                                                    }else if($exstention == "woff"){
                                                        $lista_trovati_font.="$url,;";    
                                                    }else if($exstention == "woff2"){
                                                        $lista_trovati_font.="$url,;";    
                                                    }else{
                                                       #npt 
                                                    }
                                                    $exstention="";
                                                }
						                    }
                                        }
                                        $array_url_min=array();
                                    }
                                    $url_min="";
                                }
                                $record_array="";
                                $url="";
                                $array_contenuto_link_sito_prep[$i]="";
                            }
                        }
                        $array_contenuto_link_sito_prep=array();
                    }
                    return "$lista_trovati_font";
                }

                public static function extract_font_inline_from_code($contenuto_link_sito,$extract_class_css_from_page,$compare_if_class_exist){
                    $lista_trovati_font="";

                    if($contenuto_link_sito != ""){
                        if($compare_if_class_exist == "1"){

                            if($extract_class_css_from_page != ""){
                                $extract_class_css_from_page_array=explode(",;",$extract_class_css_from_page);
                                $n_extract_class_css_from_page_array=count($extract_class_css_from_page_array);

                                $element = explode('}', $contenuto_link_sito);
                                foreach ($element as $element2) {
                                    if($element2 != ""){
                                        $a_name = explode('{', $element2);
                                        $name = $a_name[0];
                                        if($name != ""){

                                            for($i=0;$i<=$n_extract_class_css_from_page_array;$i++){
                                                if((isset($extract_class_css_from_page_array[$i]))&&(trim($extract_class_css_from_page_array[$i]) != "")){
                                                    if(str_replace(trim($extract_class_css_from_page_array[$i]),"",$name) != "$name"){
                                                        $lista_trovati_font.=TopperSystemSetFilereceived::extract_font_inline_from_code_function($element2);
                                                    }
                                                }
                                            }

                                        }
                                        $name="";
                                        $a_name=array();
                                    }                                         
                                }
                                $element2="";
                                $extract_class_css_from_page_array=array();
                                $element=array();
                                unset($n_extract_class_css_from_page_array);                                
                            }
                        }else{
                            $lista_trovati_font.=TopperSystemSetFilereceived::extract_font_inline_from_code_function($contenuto_link_sito);
                        }

                    }                    

                    return "$lista_trovati_font";
                }

                public static function modify_css($fileoriginale,$newfile,$extract_class_css_from_page){
	                $return="";
                    $lista_trovati_font="";

	                if(($fileoriginale != "")&&($newfile != "")){
                        $pathdirassets=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/assets/";

		                $filename=TopperSystemSetFilereceived::detect_pathfile().$fileoriginale;
		                $filenamenew=$pathdirassets.$newfile;
		                if(file_exists($filename)){
                            $contenuto_link_sito=TopperSystemSetFilereceived::searchfile($filename);
			                if(is_readable($filename)){
				                $old_permessi_file=substr(sprintf('%o', fileperms($filename)), -4);
			                }else{
				                $old_permessi_file="";
			                }			
			                
			                if(file_exists($filenamenew)){
				                if(filemtime($filenamenew) >= filemtime($filename)){
					                #niente
				                }else{
					                if(trim($contenuto_link_sito) != ""){		
						                $new=TopperSystemSetFilereceived::clean_css($contenuto_link_sito);
						                chmod($filename,0644);
						                $textfilem=fopen($filename, "w");
						                fwrite($textfilem,$new);
						                fclose($textfilem);
						                if($old_permessi_file == "0444"){
							                chmod($filename,0444);
						                }						
						                
						                chmod($filenamenew,0644);
						                $textfilev=fopen($filenamenew, "w");
						                fwrite($textfilev,$contenuto_link_sito);
						                fclose($textfilev);
						                chmod($filenamenew,0444);
						                
						                clearstatcache();
						                
						                unset($new);
						                $return="ok";
					                }
					                unset($contenuto_link_sito);
				                }
			                }else{
				                if(trim($contenuto_link_sito) != ""){		
					                $new=TopperSystemSetFilereceived::clean_css($contenuto_link_sito);
					                chmod($filename,0644);
					                $textfilem=fopen($filename, "w");
					                fwrite($textfilem,$new);
					                fclose($textfilem);
					                if($old_permessi_file == "0444"){
						                chmod($filename,0444);
					                }

					                $textfilev=fopen($filenamenew, "w");
					                fwrite($textfilev,$contenuto_link_sito);
					                fclose($textfilev);
					                chmod($filenamenew,0444);
					                
					                clearstatcache();
					                
					                unset($new);
					                $return="ok";
				                }
				                unset($contenuto_link_sito);
			                }
		                }
	                }
	                return array("$return","$lista_trovati_font");
                }

                public static function go_css($contenuto_link_sito,$extract_class_css_from_page){
                    $lista_trovati_font="";
	                if($contenuto_link_sito != ""){
		                $pathfileminifycss=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyCSS.txt";

		                $filename="$pathfileminifycss";
		                if(file_exists($filename)){			
			                $log=TopperSystemSetFilereceived::searchfile($filename);
			                $crea="0";
		                }else{
			                $log="";
			                $crea="1";
		                }
		                $scrivi="";		
		                
		                $contenuto_file_index_toppersystem_array=explode(",;",$contenuto_link_sito);
		                $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
		                unset($contenuto_link_sito);
		                
		                for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

			                if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
				                $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
				                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
					                $lista_trovati_font.=TopperSystemSetFilereceived::modify_css(explode("?",$part_url[0])[0],$part_url[1],$extract_class_css_from_page)["1"];
					                if(str_replace(trim($contenuto_file_index_toppersystem_array[$i]),"",$log) == "$log"){
						                $scrivi.=trim($contenuto_file_index_toppersystem_array[$i])."\n";
					                }					
				                }
			                }
		                }
		                if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
		                unset($n_contenuto_file_index_toppersystem_array);
		                
		                if($scrivi != ""){
			                if($crea == "1"){
                                if(file_exists($filename)){
                                    chmod("$filename",0644);
                                }
				                $textfilem=fopen($filename, "w");
				                fwrite($textfilem,$scrivi);
				                fclose($textfilem);
				                chmod("$filename",0444);
			                }else{
				                chmod("$filename",0644);
				                $textfilem=fopen($filename, "a");
				                fwrite($textfilem,$scrivi);
				                fclose($textfilem);	
				                chmod("$filename",0444);
			                }			
		                }		
	                }
	                return trim($lista_trovati_font);
                }

                public static function extract_body_css_for_inline($css_toppersystem_send){
                    $list_css=array('list_css' => null);
	                if($css_toppersystem_send != ""){             
		                $contenuto_file_index_toppersystem_array=explode(",;",$css_toppersystem_send);
		                $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
		                #unset($css_toppersystem_send);
		                $n=0;
		                for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
			                if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
				                $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
				                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
                                    $fileoriginale=explode("?",$part_url[0])[0];
		                            $filename=TopperSystemSetFilereceived::detect_pathfile().$fileoriginale;
		                            if(file_exists($filename)){
                                        $body_file=TopperSystemSetFilereceived::searchfile($filename);
                                        if(trim($body_file) != ""){
                                            if(str_replace(array("./","@IMPORT","@import","URL(","url("),"",$body_file) == "$body_file"){
                                                $list_css[$n][0] = $part_url[0];
                                                $list_css[$n][1] = "$body_file";
                                                $n++;
                                            }
                                        }
                                        $body_file="";
                                    }
                                    $fileoriginale="";
                                    $filename="";			
				                }
			                }
		                }
		                if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
		                unset($n_contenuto_file_index_toppersystem_array);		
	                }
	                return $list_css;
                }

                public static function add_css_inline_save($contenuto_link_sito,$elimina,$list_css,$excludecssurl_toppersystem){
                    $nc=0;
		            if(trim($excludecssurl_toppersystem) != ""){
			            $excludecssurl_toppersystem_new=str_replace(array(" ",","),"\n",$excludecssurl_toppersystem);
			            $excludecssurl_toppersystem_new_array=explode("\n",$excludecssurl_toppersystem_new);
			            unset($excludecssurl_toppersystem_new);
			            $excludecssurl_toppersystem_go="";

			            #$excludecssurl_toppersystem_ok="";
			            $nc=0;
			            $excludecssurl_toppersystem_ok = array('excludecssurl_toppersystem_ok' => null);
			            for($i=0;$i<=count($excludecssurl_toppersystem_new_array);$i++){
				            if((isset($excludecssurl_toppersystem_new_array["$i"]))&&($excludecssurl_toppersystem_new_array["$i"] != "")){
					            $link_post=trim($excludecssurl_toppersystem_new_array["$i"]);
					            if(($link_post != "")&&(str_replace(array("fonts.googleapis","FONTS.GOOGLEAPIS"),"",$link_post) == "$link_post")){
					               $excludecssurl_toppersystem_ok[$nc]=explode("?",strtolower($link_post))["0"];
					               $nc++;
					               $excludecssurl_toppersystem_go="1";
					            }
					            $link_post="";
					            $excludecssurl_toppersystem_new_array["$i"]="";
				            }							
			            }
			            if(is_array($excludecssurl_toppersystem_new_array)){$excludecssurl_toppersystem_new_array=array();}
			            unset($nc);
		            }else{
			            $excludecssurl_toppersystem_go="";
		            }

                    $url_css_ok="";
                    $body_css_ok="";
                    $url_css_remove="";
                    for($cssi=0;$cssi<=count($list_css);$cssi++){
                        if((isset($list_css[$cssi][0]))&&(trim($list_css[$cssi][0]) != "")&&($body_css_ok == "")){
                            $url_css=trim($list_css[$cssi][0]);
                            if(str_replace("$url_css","",$elimina) != "$elimina"){
                                if((isset($list_css[$cssi][1]))&&(trim($list_css[$cssi][1]) != "")){

						            $procedi_exclude="ok";
						            if($excludecssurl_toppersystem_go == "1"){
							            $procedi_exclude="no";
							            if(str_replace($excludecssurl_toppersystem_ok,"",strtolower($url_css)) == strtolower($url_css)){
								            $procedi_exclude="ok";
							            }
						            }
                                    if((trim($url_css) != "")&&($procedi_exclude == "ok")){
                                        $url_css_ok="$url_css";
                                        $body_css_ok=trim($list_css[$cssi][1]);
                                    }
                                }         
                            }        
                            $url_css="";
                        }
                    }
                    if($url_css_ok != ""){
                        $ris_attributo_analisy_id=TopperSystemSetFilereceived::work_attributo("id",$elimina);
                        $ris_attributo_analisy_id_complete=$ris_attributo_analisy_id["0"];

                        $ris_attributo_analisy_type=TopperSystemSetFilereceived::work_attributo("type",$elimina);
                        $ris_attributo_analisy_type_complete=$ris_attributo_analisy_type["0"];

                        $styleinline="<style".$ris_attributo_analisy_id_complete.$ris_attributo_analisy_type_complete.">".$body_css_ok."</style>";

	                    preg_match_all("'<\s*style[^>]*[^/]>(.*?)<\s*/\s*style\s*>'is", $styleinline , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {		
		                    $pattern = '!/\*[^*]*\*+([^/][^*]*\*+)*/!'; 
		                    $stringa_sito_new = preg_replace($pattern, '', $stringa_sito);	

		                    $stringa_sito_new = preg_replace('/\/\*((?!\*\/).)*\*\//','',$stringa_sito_new);
		                    $stringa_sito_new = preg_replace('/\s{2,}/',' ',$stringa_sito_new);
		                    $stringa_sito_new = preg_replace('/\s*([:;{}])\s*/','$1',$stringa_sito_new);
		                    $stringa_sito_new = preg_replace('/;}/','}',$stringa_sito_new);
		                    
		                    $styleinline=str_replace("$stringa_sito","$stringa_sito_new",$styleinline);
		                    $stringa_sito_new="";
		                    $stringa_sito="";
		                    
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                    
	                    preg_match_all("'<\s*style>(.*?)<\s*/\s*style\s*>'is", $styleinline , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {				
		                    $pattern = '!/\*[^*]*\*+([^/][^*]*\*+)*/!'; 
		                    $stringa_sito_new = preg_replace($pattern, '', $stringa_sito);	

		                    $stringa_sito_new = preg_replace('/\/\*((?!\*\/).)*\*\//','',$stringa_sito_new);
		                    $stringa_sito_new = preg_replace('/\s{2,}/',' ',$stringa_sito_new);
		                    $stringa_sito_new = preg_replace('/\s*([:;{}])\s*/','$1',$stringa_sito_new);
		                    $stringa_sito_new = preg_replace('/;}/','}',$stringa_sito_new);
		                    
		                    $styleinline=str_replace("$stringa_sito","$stringa_sito_new",$styleinline);
		                    $stringa_sito_new="";
		                    $stringa_sito="";
	                    }
	                    if(is_array($risultato)){$risultato=array();}
                        $contenuto_link_sito_old="$contenuto_link_sito";
                        $contenuto_link_sito=str_replace("$elimina","$styleinline",$contenuto_link_sito);

                        if($contenuto_link_sito != "$contenuto_link_sito_old"){
                            $url_css_remove=trim($url_css_ok);   
                        }

                        $contenuto_link_sito_old="";
                        $ris_attributo_analisy_id=array();
                        $ris_attributo_analisy_id_complete="";
                        $ris_attributo_analisy_type=array();
                        $ris_attributo_analisy_type_complete="";
                        $styleinline="";
                        $url_css_ok="";                             
                    }

                    return array("$contenuto_link_sito","$url_css_remove");
                }

                public static function remove_preload_tag($contenuto_link_sito,$css_url){
                    if(($contenuto_link_sito != "")&&($css_url != "")){
                        $contenuto_link_sito_analizza=explode("</head>",$contenuto_link_sito)["0"];
	                    preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
	                    $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
	                    for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
		                    if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){

			                    if((explode(" ",strtolower($contenuto_link_sito_analizza[$i]))["0"] == "link")||(explode(" ",strtolower($contenuto_link_sito_analizza[$i]))["0"] == "link[jaccapoespaziob]")){
				                    $taglink=$contenuto_link_sito_analizza[$i];
                                    if(str_replace("$css_url","",$taglink) != "$taglink"){

                                        $ris_attributo_analisy_rel=TopperSystemSetFilereceived::work_attributo("rel","$taglink");
                                        $ris_attributo_analisy_rel_complete=$ris_attributo_analisy_rel["0"];
                                        $ris_attributo_analisy_rel_content=$ris_attributo_analisy_rel["1"];
                                        if(trim($ris_attributo_analisy_rel_complete) != ""){
	                                        if(trim(strtolower($ris_attributo_analisy_rel_content)) == "preload"){

                                                $ris_attributo_analisy_as=TopperSystemSetFilereceived::work_attributo("as","$taglink");
                                                $ris_attributo_analisy_as_complete=$ris_attributo_analisy_as["0"];
                                                $ris_attributo_analisy_as_content=$ris_attributo_analisy_as["1"];
                                                if(trim($ris_attributo_analisy_as_complete) != ""){
	                                                if(trim(strtolower($ris_attributo_analisy_as_content)) == "style"){

                                                        $ris_attributo_analisy_href=TopperSystemSetFilereceived::work_attributo("href","$taglink");
                                                        $ris_attributo_analisy_href_complete=$ris_attributo_analisy_href["0"];
                                                        $ris_attributo_analisy_href_content=$ris_attributo_analisy_href["1"];
                                                        if(trim($ris_attributo_analisy_href_content) != ""){
	                                                        if(str_replace("$css_url","",$ris_attributo_analisy_href_content) != "$ris_attributo_analisy_href_content"){
							                                    $go="ok";
							                                    $ris='<'.$taglink.' />';
							                                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
								                                    $ris='<'.$taglink.'/>';
								                                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
									                                    $ris='<'.$taglink.'>';
									                                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
										                                    $go="no";
									                                    }
								                                    }
							                                    }
							                                    if($go == "ok"){
                                                                    $space_inject="[jaccapoespaziob] ";
                                                                    if(str_replace(array("$ris</link>","$ris</LINK>","$ris$space_inject</link>","$ris$space_inject</LINK>"),"",$contenuto_link_sito) != "$contenuto_link_sito"){
                                                                        $contenuto_link_sito=str_replace(array("$ris</link>","$ris</LINK>","$ris$space_inject</link>","$ris$space_inject</LINK>"),"",$contenuto_link_sito);
                                                                    }else{
                                                                        $contenuto_link_sito=str_replace("$ris","",$contenuto_link_sito);
                                                                    }
                                                                    $space_inject="";                                                
                                                                }
                                                                $ris="";
	                                                        }
                                                        }
                                                        $ris_attributo_analisy_href=array();
                                                        $ris_attributo_analisy_href_complete="";
                                                        $ris_attributo_analisy_href_content="";
                                                    }
                                                }
                                                $ris_attributo_analisy_as=array();
                                                $ris_attributo_analisy_as_complete="";
                                                $ris_attributo_analisy_as_content="";
                                            }
                                        }
                                        $ris_attributo_analisy_rel=array();
                                        $ris_attributo_analisy_rel_complete="";
                                        $ris_attributo_analisy_rel_content="";
                                    }                                
                                    $taglink="";
			                    }
                                $contenuto_link_sito_analizza[$i]="";
		                    }
	                    }
                    }

                    return "$contenuto_link_sito";
                }

                public static function add_css_inline($contenuto_link_sito,$css_toppersystem_send){
                    if(($contenuto_link_sito != "")&&($css_toppersystem_send != "")){
                        $list_css=TopperSystemSetFilereceived::extract_body_css_for_inline($css_toppersystem_send);

	                    preg_match_all("'<\s*noscript[^>]*[^/]>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {	
		                    $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
		                    $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
		                    $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	

		                    $stringa_sito="";
		                    $stringa_sito_new="";
	                    }
	                    if(is_array($risultato)){$risultato=array();}

	                    preg_match_all("'<\s*noscript>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {	
		                    $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
		                    $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
		                    $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	

		                    $stringa_sito="";
		                    $stringa_sito_new="";
	                    }
	                    if(is_array($risultato)){$risultato=array();}	                    
	                    
	                    preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {											
		                    #echo $stringa_sito."<br><br>";
		                    $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
		                    $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
		                    $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);

		                    $stringa_sito="";
		                    $stringa_sito_new="";		
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                    
	                    preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {											
		                    #echo $stringa_sito."<br><br>";
		                    $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
		                    $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
		                    $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);

		                    $stringa_sito="";
		                    $stringa_sito_new="";		
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                    
	                    preg_match_all("'<\s*style[^>]*[^/]>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {											
		                    $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
		                    $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);			
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                    $stringa_sito="";
		                    $stringa_sito_new="";		
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                    
	                    preg_match_all("'<\s*style>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {
		                    $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
		                    $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);			
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                    $stringa_sito="";
		                    $stringa_sito_new="";		
	                    }
	                    if(is_array($risultato)){$risultato=array();}

                        $excludecssurl_toppersystem="";

                        $pathfileexcludecsstoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExcludeCSSToppersystem.txt";
                        $fileCSSexclude_ts="$pathfileexcludecsstoppersystem";
                        if(file_exists($fileCSSexclude_ts)){
	                        $handle_cssexclude = fopen($fileCSSexclude_ts, "r");
	                        if (FALSE === $handle_cssexclude) {
		                        $excludecssurl_toppersystem="";
	                        }else{
		                        $excludecssurl_toppersystem = '';
		                        while (!feof($handle_cssexclude)) {
			                        $excludecssurl_toppersystem .= fread($handle_cssexclude, 8192);
		                        }
		                        fclose($handle_cssexclude);
	                        }
	                        unset($handle_cssexclude);
                        }else{
	                        $excludecssurl_toppersystem="";
                        }
                        unset($fileCSSexclude_ts);
                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                            $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                            $part_url_transform2=site_url();
                            $excludecssurl_topersystem=str_replace("$part_url_transform1","$part_url_transform2",$excludecssurl_toppersystem);                          
                        }

                        $array_remove_preload_css = array('array_remove_preload_css' => null);
                        $n_array_remove_preload_css=0;

	                    $contenuto_link_sito_analizza=explode("</head>",$contenuto_link_sito)["0"];
	                    $contenuto_link_sito_analizza_indice = array('contenuto_link_sito_analizza_indice' => null);
	                    $n_indice=0;
	                    preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
	                    $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
	                    for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
		                    if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){

			                    if((((explode(" ",strtolower($contenuto_link_sito_analizza[$i]))["0"] == "link")||(explode(" ",strtolower($contenuto_link_sito_analizza[$i]))["0"] == "link[jaccapoespaziob]"))&&(str_replace(array('stylesheet','text/css'),"",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i])))||(explode(" ",strtolower($contenuto_link_sito_analizza[$i]))["0"] == "/link")||(substr(strtolower($contenuto_link_sito_analizza[$i]), 0, 5) == "/link")||(substr(strtolower($contenuto_link_sito_analizza[$i]), 0, 6) == "/ link")){
				                    $contenuto_link_sito_analizza_indice[$n_indice]=$contenuto_link_sito_analizza[$i];
				                    $n_indice++;
			                    }

		                    }
	                    }
                        if(is_array($contenuto_link_sito_analizza)){$contenuto_link_sito_analizza=array();}else{$contenuto_link_sito_analizza="";}

	                    for($i=0;$i<=count($contenuto_link_sito_analizza_indice);$i++){
		                    if((isset($contenuto_link_sito_analizza_indice[$i]))&&(trim($contenuto_link_sito_analizza_indice[$i]) != "")){

			                    if((explode(" ",strtolower($contenuto_link_sito_analizza_indice[$i]))["0"] == "link")||(explode(" ",strtolower($contenuto_link_sito_analizza_indice[$i]))["0"] == "link[jaccapoespaziob]")||(explode(" ",strtolower($contenuto_link_sito_analizza_indice[$i]))["0"] == "/link")||(substr(strtolower($contenuto_link_sito_analizza_indice[$i]), 0, 5) == "/link")||(substr(strtolower($contenuto_link_sito_analizza_indice[$i]), 0, 6) == "/ link")){			
	                    
				                    
				                    if(explode(" ",strtolower($contenuto_link_sito_analizza_indice[$i]))["0"] == "/link"){
					                    #niente
				                    }else{
						                    
					                    if((isset($contenuto_link_sito_analizza_indice[$i + 1]))&&(trim($contenuto_link_sito_analizza_indice[$i + 1]) != "")){
						                    if((explode(" ",strtolower($contenuto_link_sito_analizza_indice[$i + 1]))["0"] == "/link")||(substr(strtolower($contenuto_link_sito_analizza_indice[$i + 1]), 0, 5) == "/link")||(substr(strtolower($contenuto_link_sito_analizza_indice[$i + 1]), 0, 6) == "/ link")){
								                    
							                    $ris=TopperSystemSetFilereceived::extractstringa($contenuto_link_sito, '<'.$contenuto_link_sito_analizza_indice[$i].'>', '<'.$contenuto_link_sito_analizza_indice[$i + 1].'>');
							                    $elimina="<".$contenuto_link_sito_analizza_indice[$i].">".$ris."<".$contenuto_link_sito_analizza_indice[$i + 1].">";					
                                                
                                                if(str_replace("$elimina","",$contenuto_link_sito) != "$contenuto_link_sito"){
                                                    $contenuto_link_sito_transform_array=TopperSystemSetFilereceived::add_css_inline_save("$contenuto_link_sito","$elimina",$list_css,$excludecssurl_toppersystem);
							                        $contenuto_link_sito=$contenuto_link_sito_transform_array["0"];
                                                    $url_css_ok=$contenuto_link_sito_transform_array["1"];
                                                    if($url_css_ok != ""){
                                                        $array_remove_preload_css[$n_array_remove_preload_css]="$url_css_ok";
                                                        $n_array_remove_preload_css++;
                                                    }
                                                    $url_css_ok="";
                                                    $contenuto_link_sito_transform_array=array();
                                                }

						                    }else{
							                    $go="ok";
							                    $ris='<'.$contenuto_link_sito_analizza_indice[$i].' />';
							                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
								                    $ris='<'.$contenuto_link_sito_analizza_indice[$i].'/>';
								                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
									                    $ris='<'.$contenuto_link_sito_analizza_indice[$i].'>';
									                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
										                    $go="no";
									                    }
								                    }
							                    }
							                    if($go == "ok"){
								                    $elimina=$ris;
                                                    $contenuto_link_sito_transform_array=TopperSystemSetFilereceived::add_css_inline_save("$contenuto_link_sito","$elimina",$list_css,$excludecssurl_toppersystem);
							                        $contenuto_link_sito=$contenuto_link_sito_transform_array["0"];
                                                    $url_css_ok=$contenuto_link_sito_transform_array["1"];
                                                    if($url_css_ok != ""){
                                                        $array_remove_preload_css[$n_array_remove_preload_css]="$url_css_ok";
                                                        $n_array_remove_preload_css++;
                                                    }
                                                    $url_css_ok="";
                                                    $contenuto_link_sito_transform_array=array();
							                    }						
						                    }
					                    }else{
						                    $go="ok";
						                    $ris='<'.$contenuto_link_sito_analizza_indice[$i].' />';
						                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
							                    $ris='<'.$contenuto_link_sito_analizza_indice[$i].'/>';
							                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
								                    $ris='<'.$contenuto_link_sito_analizza_indice[$i].'>';
								                    if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
									                    $go="no";
								                    }
							                    }
						                    }
						                    if($go == "ok"){
							                    $elimina=$ris;
                                                $contenuto_link_sito_transform_array=TopperSystemSetFilereceived::add_css_inline_save("$contenuto_link_sito","$elimina",$list_css,$excludecssurl_toppersystem);
							                    $contenuto_link_sito=$contenuto_link_sito_transform_array["0"];
                                                $url_css_ok=$contenuto_link_sito_transform_array["1"];
                                                if($url_css_ok != ""){
                                                    $array_remove_preload_css[$n_array_remove_preload_css]="$url_css_ok";
                                                    $n_array_remove_preload_css++;
                                                }
                                                $url_css_ok="";
                                                $contenuto_link_sito_transform_array=array();
						                    }
					                    }
				                    }
			                    }	
		                    }
	                    }
                        if(is_array($list_css)){$list_css=array();}
                        $contenuto_link_sito_analizza_indice=array();

                        for($i=0;$i<=count($array_remove_preload_css);$i++){
                            if((isset($array_remove_preload_css[$i]))&&(trim($array_remove_preload_css[$i]) != "")){
                                if(trim($array_remove_preload_css[$i]) != "null"){
                                    $contenuto_link_sito=TopperSystemSetFilereceived::remove_preload_tag("$contenuto_link_sito",trim($array_remove_preload_css[$i]));           
                                }
                                $array_remove_preload_css[$i]="";
                            }
                        }
                        $array_remove_preload_css=array();                     

	                    preg_match_all("'<\s*noscript[^>]*[^/]>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {
		                    $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
		                    $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
		                    $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);	
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                    
		                    $stringa_sito="";
		                    $stringa_sito_new="";
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                    
	                    preg_match_all("'<\s*noscript>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {
		                    $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
		                    $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
		                    $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);
		                    
		                    $stringa_sito="";
		                    $stringa_sito_new="";
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                    
	                    preg_match_all("'<\s*style[^>]*[^/]>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {
		                    $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
		                    $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                    $stringa_sito="";
		                    $stringa_sito_new="";		
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                    
	                    preg_match_all("'<\s*style>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {
		                    $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
		                    $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                    $stringa_sito="";
		                    $stringa_sito_new="";		
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                    
	                    preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {											
		                    #echo $stringa_sito."\n\n";
		                    $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
		                    $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);			
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                    $stringa_sito="";
		                    $stringa_sito_new="";		
	                    }
	                    if(is_array($risultato)){$risultato=array();}	
	                    
	                    preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
	                    foreach ($risultato[1] as $stringa_sito) {											
		                    #echo $stringa_sito."\n\n";
		                    $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
		                    $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);
		                    $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);			
		                    $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                    $stringa_sito="";
		                    $stringa_sito_new="";		
	                    }
	                    if(is_array($risultato)){$risultato=array();}
	                }
	                return $contenuto_link_sito;
                }	

                public static function clean_javascript($stringa_sito){
	                if($stringa_sito != ""){
		                if(((str_replace(array("[","]","{","}"),"",$stringa_sito) != "$stringa_sito")&&(str_replace(array("="),"",$stringa_sito) != "$stringa_sito"))||(str_replace(array("document.","function(",".getElement","var "),"",$stringa_sito) != "$stringa_sito")){
			                if(TopperSystemSetFilereceived::is_script_accettable_ts($stringa_sito) == "ok"){
				                $output=TopperSystemAndJSMin::minify($stringa_sito);
			                }else{
				                $output="$stringa_sito";
			                }
		                }else{
			                $output="$stringa_sito";
		                }
	                }else{
		                $output="";
	                }
	                unset($stringa_sito);
	                return "$output";
                }

                public static function modify_js($fileoriginale,$newfile){
	                $return="";
	                if(($fileoriginale != "")&&($newfile != "")){
                        $pathdirassets=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/assets/";

		                $filename=TopperSystemSetFilereceived::detect_pathfile().$fileoriginale;
		                $filenamenew=$pathdirassets.$newfile;
		                if(file_exists($filename)){
			                if(is_readable($filename)){
				                $old_permessi_file=substr(sprintf('%o', fileperms($filename)), -4);
			                }else{
				                $old_permessi_file="";
			                }			
			                
			                if(file_exists($filenamenew)){
				                if(filemtime($filenamenew) >= filemtime($filename)){
					                #niente
				                }else{					
					                $contenuto_link_sito=TopperSystemSetFilereceived::searchfile($filename);					
					                if(trim($contenuto_link_sito) != ""){		
						                $new=TopperSystemSetFilereceived::clean_javascript($contenuto_link_sito);
                                        if($new != ""){
						                    chmod($filename,0644);
						                    $textfilem=fopen($filename, "w");
						                    fwrite($textfilem,$new);
						                    fclose($textfilem);
						                    if($old_permessi_file == "0444"){
							                    chmod($filename,0444);
						                    }						
						                    
						                    chmod($filenamenew,0644);
						                    $textfilev=fopen($filenamenew, "w");
						                    fwrite($textfilev,$contenuto_link_sito);
						                    fclose($textfilev);
						                    chmod($filenamenew,0444);
						                    
						                    clearstatcache();
						                }
						                unset($new);
						                $return="ok";
					                }
					                unset($contenuto_link_sito);
				                }
			                }else{
				                $contenuto_link_sito=TopperSystemSetFilereceived::searchfile($filename);
				                if(trim($contenuto_link_sito) != ""){		
					                $new=TopperSystemSetFilereceived::clean_javascript($contenuto_link_sito);
                                    if($new != ""){
					                    chmod($filename,0644);
					                    $textfilem=fopen($filename, "w");
					                    fwrite($textfilem,$new);
					                    fclose($textfilem);
					                    if($old_permessi_file == "0444"){
						                    chmod($filename,0444);
					                    }

					                    $textfilev=fopen($filenamenew, "w");
					                    fwrite($textfilev,$contenuto_link_sito);
					                    fclose($textfilev);
					                    chmod($filenamenew,0444);
					                    
					                    clearstatcache();
					                }
					                unset($new);
					                $return="ok";
				                }
				                unset($contenuto_link_sito);
			                }
		                }
	                }
	                return "$return";
                }

                public static function go_js($contenuto_link_sito){	
	                if($contenuto_link_sito != ""){
                        $pathfileminifyjs=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyJS.txt";
		                
		                $filename="$pathfileminifyjs";
		                if(file_exists($filename)){			
			                $log=TopperSystemSetFilereceived::searchfile($filename);
			                $crea="0";
		                }else{
			                $log="";
			                $crea="1";
		                }
		                $scrivi="";
		                
		                $contenuto_file_index_toppersystem_array=explode(",;",$contenuto_link_sito);
		                $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
		                unset($contenuto_link_sito);
		                
		                for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

			                if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
				                $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
				                if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
					                $go=TopperSystemSetFilereceived::modify_js(explode("?",$part_url[0])[0],$part_url[1]);
					                if(str_replace(trim($contenuto_file_index_toppersystem_array[$i]),"",$log) == "$log"){
						                $scrivi.=trim($contenuto_file_index_toppersystem_array[$i])."\n";
					                }
				                }
			                }
		                }
		                if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
		                unset($n_contenuto_file_index_toppersystem_array);
		                
		                if($scrivi != ""){
			                if($crea == "1"){
                                if(file_exists($filename)){
                                    chmod("$filename",0644);
                                }
				                $textfilem=fopen($filename, "w");
				                fwrite($textfilem,$scrivi);
				                fclose($textfilem);
				                chmod("$filename",0444);
			                }else{
				                chmod("$filename",0644);
				                $textfilem=fopen($filename, "a");
				                fwrite($textfilem,$scrivi);
				                fclose($textfilem);	
				                chmod("$filename",0444);
			                }			
		                }		
	                }
	                return "ok";
                }

                public static function rel2abs_ts($rel, $base){
                    if (parse_url($rel, PHP_URL_SCHEME) != '') return $rel;
                    if ($rel[0]=='#' || $rel[0]=='?') return $base.$rel;
                    extract(parse_url($base));
                    $path = preg_replace('#/[^/]*$#', '', $path);
                    if ($rel[0] == '/') $path = '';
                    $abs = "$host$path/$rel";
                    $re = array('#(/\.?/)#', '#/(?!\.\.)[^/]+/\.\./#');
                    for($n=1; $n>0;$abs=preg_replace($re,'/', $abs,-1,$n)){}
                    $abs=str_replace("../","",$abs);
                    return $scheme.'://'.$abs;
                }
                public static function perfect_url_ts($u,$b){
	                $bp=parse_url($b);
                    if(($bp['path']!="/" && $bp['path']!="") || $bp['path']==''){
		                if($bp['scheme']==""){$scheme="http";}else{$scheme=$bp['scheme'];}
		                $b=$scheme."://".$bp['host']."/";
                    }
                    if(substr($u,0,2)=="//"){
		                $u="http:".$u;
                    }
                    if(substr($u,0,4)!="http"){
		                $u=TopperSystemSetFilereceived::rel2abs_ts($u,$b);
                    }
                    return $u;
                }

                public static function perfect_url_ts2($url_rel,$url_link_sito){
	                
	                $url_link_sito=str_replace("//","[JdoppioslashesB]",$url_link_sito);
	                $url_link_sito_array=explode("/",$url_link_sito);
	                $url_link_sito_array_n=count($url_link_sito_array) - 1;
	                if($url_link_sito_array_n < 0){
		                $url_link_sito_array_n=0;
	                }
	                $url_link_sito="";
	                
	                $url_rel=str_replace("//","[JdoppioslashesB]",$url_rel);
	                $url_rel_array=explode("/",$url_rel);
	                $url_rel_array_n=count($url_rel_array) - 1;	
	                if($url_rel_array_n < 0){
		                $url_rel_array_n=0;
	                }
	                $url_rel="";
	                
	                $url_rel_costruct="";
	                $conta_elem_da_scalare=0;
	                for($i=0;$i<=$url_rel_array_n;$i++){
		                if((isset($url_rel_array["$i"]))&&($url_rel_array["$i"] != "")){
			                if($url_rel_array["$i"] == "."){
				                #niente
			                }else if($url_rel_array["$i"] == ".."){
				                $conta_elem_da_scalare++;
			                }else{
				                $url_rel_costruct.=$url_rel_array["$i"]."/";
			                }
			                $url_rel_array["$i"]="";
		                }
	                }
	                
	                $url_rel_array=array();
	                $url_rel_array_n="";
	                
	                $ultimo_carattere=substr($url_rel_costruct, strlen($url_rel_costruct)-1);
	                if($ultimo_carattere == "/"){
		                $url_rel_costruct=substr($url_rel_costruct, 0, strlen($url_rel_costruct)-1);
	                }
	                $ultimo_carattere="";
	                
	                $url_link_sito_costruct="";
	                for($i=0;$i<=$url_link_sito_array_n - $conta_elem_da_scalare - 1;$i++){
		                if((isset($url_link_sito_array["$i"]))&&($url_link_sito_array["$i"] != "")){
			                $url_link_sito_costruct.=$url_link_sito_array["$i"]."/";
			                
			                $url_link_sito_array["$i"]="";
		                }
	                }
	                
	                $url_link_sito_array=array();
	                unset($url_link_sito_array_n);
	                unset($conta_elem_da_scalare);
	                
	                $link_ok=$url_link_sito_costruct.$url_rel_costruct;
	                $link_ok=str_replace("[JdoppioslashesB]","//",$link_ok);
	                unset($url_link_sito_costruct);
	                unset($url_rel_costruct);

	                return $link_ok;
                }

                public static function get_headers_curlts($url){
	                #$url=str_replace(" ","%20",$url);
                    $options = array(		
                        CURLOPT_HEADER         => true,
                        CURLOPT_NOBODY         => true,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_CONNECTTIMEOUT => 8,
                        CURLOPT_TIMEOUT        => 8,
	                    CURLOPT_SSL_VERIFYPEER => false,
	                    CURLOPT_DNS_USE_GLOBAL_CACHE => false
                    );
                    $ch= curl_init( $url );
                    curl_setopt_array( $ch, $options );
                    if(curl_errno($ch)){
                        $content = "";
                    }else{
                        $content = curl_exec( $ch );
                    }    
                    curl_close( $ch );
	                return "$content";
                }

                public static function file_curlimagets_contents($url){
	                #$url=str_replace(" ","%20",$url);
                    $options = array(		
	                    CURLOPT_RETURNTRANSFER => true,
	                    CURLOPT_HEADER         => false,
	                    CURLOPT_FOLLOWLOCATION => true,
	                    CURLOPT_ENCODING       => "",
	                    CURLOPT_AUTOREFERER    => true,
                        CURLOPT_CONNECTTIMEOUT => 8,
                        CURLOPT_TIMEOUT        => 8,
	                    CURLOPT_SSL_VERIFYPEER => false,
	                    CURLOPT_DNS_USE_GLOBAL_CACHE => false
                    );
                    $ch= curl_init( $url );
                    curl_setopt_array( $ch, $options );
                    if(curl_errno($ch)){
                        $content = "";
                    }else{
                        $content = curl_exec( $ch );
                    }    
                    curl_close( $ch );
	                return "$content";
                }

                public static function img_exists($url){
                    if(function_exists('curl_init')) {
                        $headers=TopperSystemSetFilereceived::get_headers_curlts($url);
                        $n=0;
                        if(str_replace(array("200"),"",$headers) != "$headers"){
                            $n++;
                            if(str_replace(array("image/jpeg", "image/png"),"",$headers) != "$headers"){
                                $n++;
                            }
                        }
                        if($n == "2"){
	                        $return=true;
                        }else{
		                    $return=false;
	                    }
                        unset($n);
                    }else{
                        stream_context_set_default( [
                            'ssl' => [
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                            ],
                        ]);
                        $headers=get_headers($url);
                        $n=0;
                        foreach($headers as $result){
	                        if(trim($result) != ""){
		                        if(str_replace(array("200 OK", "image/jpeg", "image/png"),"",$result) != "$result"){
			                       $n++;
		                        }
	                        }
		                    $result="";
                        }
	                    if(is_array($headers)){$headers=array();}
                        if($n == "2"){
	                        $return=true;
                        }else{
		                    $return=false;
	                    }            
                    }
                    return $return;
                }

                public static function getBytesFromHexString($hexdata)
                {
	                for($count = 0; $count < strlen($hexdata); $count+=2){
		                $bytes[] = chr(hexdec(substr($hexdata, $count, 2)));
	                }
	                unset($hexdata);
	                return implode($bytes);
                }

                public static function getImageMimeType($imagedata)
                {
	                $imagemimetypes = array( 
		                "jpeg" => "FFD8", 
		                "png" => "89504E470D0A1A0A", 
		                "gif" => "474946",
		                "bmp" => "424D", 
		                "tiff" => "4949",
		                "tiff" => "4D4D"
	                );

                    foreach ($imagemimetypes as $mime => $hexbytes)
                    {		
		                $bytes = TopperSystemSetFilereceived::getBytesFromHexString($hexbytes);
		                if (substr($imagedata, 0, strlen($bytes)) == $bytes){
			                return $mime;
		                }		
		                $mine="";
		                $bytes="";
		                $hexbytes="";
                    }
                    
	                unset($imagedata);
	                $imagemimetypes=array();
                    return NULL;
                }

                public static function getImageWidthHeight($immagine){
	                $result="0-0";
	                if(trim($immagine) != ""){
                        if(function_exists('curl_init')) {
                            $data=@TopperSystemSetFilereceived::file_curlimagets_contents("$immagine");
                        }else{
                            $data=@file_get_contents("$immagine",false);
                        }
               
		                if(($data == "Page not found")||($data == "false")||(trim($data == ""))||($data == false)||($data == "false google")){
			                $result="0-0";		
		                }
		                if($result != "noimageload"){
			                $mimetype = TopperSystemSetFilereceived::getImageMimeType($data);
			                if($mimetype == "png"){	
				                $type="3";
			                }else if($mimetype == "gif"){
				                $type="1";		
			                }else if($mimetype == "jpeg"){
				                $type="2";
			                }else{
				                $type="0";
			                }	
			                  
			                if($type != "0"){
				                $im = @( imagecreatefromstring( $data ) );	 
				                $x=(int) @imagesx( $im );
				                $y=(int) @imagesy( $im );			

				                if(($x == 0)||($y == 0)||($x == "")||($y == "")){				
					                $result="0-0";
				                }else{
					                $result="$x-$y";
				                }
				                
				                @ ( Imagedestroy( $im ) );
				                
			                }else{
				                $result="0-0";
			                }
		                }
	                }
	                unset($immagine);
	                unset($data);
	                unset($mimetype);
	                unset($type);
	                unset($im);
	                unset($x);
	                unset($y);
	                
	                return $result;
                }

                public static function extract_class_css_from_page($contenuto_link_sito){
                    $list_class_in_page="html,;body,;";
                    if($contenuto_link_sito != ""){

                        $contenuto_link_sito=str_replace("\n","[JaccapoespazioB] ",$contenuto_link_sito);

                        $contenuto_link_sito_analizza="$contenuto_link_sito";
                        $n_indice=0;	
                        preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
                        $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
                        for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
	                        if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
		                        if((str_replace("class=","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("class[jaccapoespaziob] = ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("[jaccapoespaziob] class= ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){

                                    $ris_attributo_class=TopperSystemSetFilereceived::work_attributo("class",$contenuto_link_sito_analizza[$i]);
                                    $ris_attributo_class_content=$ris_attributo_class["1"];
                                    if($ris_attributo_class_content == ""){
                                        $ris_attributo_class=TopperSystemSetFilereceived::work_attributo("class[jaccapoespaziob]",$contenuto_link_sito_analizza[$i]);
                                        $ris_attributo_class_content=$ris_attributo_class["1"];
                                    }

                                    if($ris_attributo_class_content != ""){
                                        $ris_attributo_class_content_array=explode(" ",$ris_attributo_class_content);
                                        for($ix=0;$ix<=count($ris_attributo_class_content_array);$ix++){
	                                        if((isset($ris_attributo_class_content_array[$ix]))&&(trim($ris_attributo_class_content_array[$ix]) != "")){
                                                $classe=trim($ris_attributo_class_content_array[$ix]);
                                                if(str_replace("$classe,;","",$list_class_in_page) == "$list_class_in_page"){
                                                    $list_class_in_page.="$classe,;";
                                                }
                                                $classe="";
                                            }
                                        }
                                    }                             
                                }
                                $contenuto_link_sito_analizza[$i]="";
                            }
                        }
                        if(is_array($contenuto_link_sito_analizza)){$contenuto_link_sito_analizza=array();}else{$contenuto_link_sito_analizza="";}
                    }

                    return "$list_class_in_page";
                }


                public static function add_preload_font_in_page($contenuto_link_sito,$lista_trovati_font,$resend_toppersystem,$resendCentraltoppersystem){
                    if($lista_trovati_font != ""){

                        $lista_trovati_font_array_unique=array_unique(explode(",;",$lista_trovati_font));
                        $n_lista_trovati_font_array_unique=count($lista_trovati_font_array_unique);

                        $lista_font_ok="";
                        for($ia=0;$ia<=$n_lista_trovati_font_array_unique;$ia++){
                            if((isset($lista_trovati_font_array_unique[$ia]))&&(trim($lista_trovati_font_array_unique[$ia]) != "")){
                                $lista_font_ok.=trim($lista_trovati_font_array_unique[$ia]).",;";                     
                            }
                        }


                        $contenuto_link_sito_analizza="$contenuto_link_sito";
                        $n_indice=0;	
                        preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
                        $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
                        for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
	                        if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
		                        if((str_replace("link ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("link[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){

                                    for($ia=0;$ia<=$n_lista_trovati_font_array_unique;$ia++){
                                        if((isset($lista_trovati_font_array_unique[$ia]))&&(trim($lista_trovati_font_array_unique[$ia]) != "")){
                                            $record_array=trim($lista_trovati_font_array_unique[$ia]);
                                            if(str_replace("$record_array","",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){
                                                $lista_font_ok=str_replace("$record_array,;","",$lista_font_ok);
                                            }
                                            $record_array="";
                                        }
                                    }

                                    if(str_replace($resendCentraltoppersystem."toppersystem/css/loader.css","",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){
                                        if(str_replace(array("rel=\"preload\"","rel='preload'"),"",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){
                                            $contenuto_link_sito=str_replace("<".$contenuto_link_sito_analizza[$i],"<ADDICTION_FONT_PRELOAD_TOPPERSYSTEM><".$contenuto_link_sito_analizza[$i],$contenuto_link_sito);
                                        }                        
                                    }                   

                                }
                                $contenuto_link_sito_analizza[$i]="";
                            }
                        }	

                        if($lista_font_ok != ""){
                            $array_lista_font_ok=explode(",;",$lista_font_ok);
                            $n_array_lista_font_ok=count($array_lista_font_ok);
                            $write_lista_font_ok="";
                            for($ia=0;$ia<=$n_array_lista_font_ok;$ia++){
                                if((isset($array_lista_font_ok[$ia]))&&(trim($array_lista_font_ok[$ia]) != "")){                    
                                    $extecntion=end(explode(".",trim($array_lista_font_ok[$ia])));
                                    $write_lista_font_ok.="<link rel=\"preload\" href=\"".trim($array_lista_font_ok[$ia])."\" as=\"font\" type=\"font/".$extecntion."\" crossorigin />\n";
                                    $extecntion="";
                                }
                            }
                            $array_lista_font_ok=array();
                            unset($n_array_lista_font_ok);
                            $contenuto_link_sito=str_replace("<ADDICTION_FONT_PRELOAD_TOPPERSYSTEM>","$write_lista_font_ok",$contenuto_link_sito); 

                        }else{
                            $contenuto_link_sito=str_replace("<ADDICTION_FONT_PRELOAD_TOPPERSYSTEM>","",$contenuto_link_sito);
                        }
                    }

                    return "$contenuto_link_sito";
                }

                public static function verify_preload_image_toppersystem($add_preload_image,$contenuto_link_sito){
                    $return="ok";
                    if((trim($add_preload_image) != "")&&(trim($contenuto_link_sito) != "")){

                        $ris_attributo_href=TopperSystemSetFilereceived::work_attributo("href",$add_preload_image);
                        $ris_attributo_href_complete=$ris_attributo_href["0"];
                        $ris_attributo_href_content=$ris_attributo_href["1"];
                        if(trim($ris_attributo_href_complete) != ""){
                            $ris_attributo_imagesrcset=TopperSystemSetFilereceived::work_attributo("imagesrcset",$add_preload_image);
                            $ris_attributo_imagesrcset_complete=$ris_attributo_imagesrcset["0"];
                            $ris_attributo_imagesrcset_content=$ris_attributo_imagesrcset["1"];

		                    $contenuto_link_sito_analizza=explode("</head>",$contenuto_link_sito)["0"];
		                    preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
		                    $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
		                    for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
			                    if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
				                    if((str_replace("link ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("link[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){
						                if((str_replace("preload","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))&&($return == "ok")){
							                
							                $ris_attributo_analisy_rel=TopperSystemSetFilereceived::work_attributo("rel",$contenuto_link_sito_analizza[$i]);
							                $ris_attributo_analisy_rel_complete=$ris_attributo_analisy_rel["0"];
                                            $ris_attributo_analisy_rel_content=$ris_attributo_analisy_rel["1"];
							                if(trim($ris_attributo_analisy_rel_complete) != ""){
								                if(trim(strtolower($ris_attributo_analisy_rel_content)) == "preload"){

							                        $ris_attributo_analisy_as=TopperSystemSetFilereceived::work_attributo("as",$contenuto_link_sito_analizza[$i]);
							                        $ris_attributo_analisy_as_complete=$ris_attributo_analisy_as["0"];
                                                    $ris_attributo_analisy_as_content=$ris_attributo_analisy_as["1"];
							                        if(trim($ris_attributo_analisy_as_complete) != ""){
								                        if(trim(strtolower($ris_attributo_analisy_as_content)) == "image"){

							                                $ris_attributo_analisy_href=TopperSystemSetFilereceived::work_attributo("href",$contenuto_link_sito_analizza[$i]);
							                                $ris_attributo_analisy_href_complete=$ris_attributo_analisy_href["0"];
                                                            $ris_attributo_analisy_href_content=$ris_attributo_analisy_href["1"];
							                                if(trim($ris_attributo_analisy_href_complete) != ""){
								                                if(trim(strtolower($ris_attributo_analisy_href_content)) == trim(strtolower($ris_attributo_href_content))){
									                                $return="no";
								                                }
							                                }
							                                $ris_attributo_analisy_href=array();
							                                $ris_attributo_analisy_href_complete="";
                                                            $ris_attributo_analisy_href_content="";

							                                if(($return == "ok")&&(trim($ris_attributo_imagesrcset_content) != "")){

							                                    $ris_attributo_analisy_imagesrcset=TopperSystemSetFilereceived::work_attributo("imagesrcset",$contenuto_link_sito_analizza[$i]);
							                                    $ris_attributo_analisy_imagesrcset_complete=$ris_attributo_analisy_imagesrcset["0"];
                                                                $ris_attributo_analisy_imagesrcset_content=$ris_attributo_analisy_imagesrcset["1"];
							                                    if(trim($ris_attributo_analisy_imagesrcset_complete) != ""){
								                                    if(trim(strtolower($ris_attributo_analisy_imagesrcset_content)) == trim(strtolower($ris_attributo_imagesrcset_content))){
									                                    $return="no";
								                                    }
							                                    }
							                                    $ris_attributo_analisy_imagesrcset=array();
							                                    $ris_attributo_analisy_imagesrcset_complete="";
                                                                $ris_attributo_analisy_imagesrcset_content="";                                                    

							                                }
									                        
								                        }
							                        }
							                        $ris_attributo_analisy_as=array();
							                        $ris_attributo_analisy_as_complete="";
                                                    $ris_attributo_analisy_as_content="";
									                
								                }
							                }
							                $ris_attributo_analisy_rel=array();
							                $ris_attributo_analisy_rel_complete="";
                                            $ris_attributo_analisy_rel_content="";

						                }

					                }	
				                    $contenuto_link_sito_analizza[$i]="";
			                    }               
			                    
		                    }
		                    $contenuto_link_sito_analizza=array();       

                        }

                    }
                    $ris_attributo_href=array();
                    $ris_attributo_href_complete="";
                    $add_preload_image="";
                    $contenuto_link_sito="";
                    unset($add_preload_image);
                    unset($contenuto_link_sito);
                    return $return;
                }

                public static function add_imglazy_and_imgpreload($contenuto_link_sito,$url_link_sito,$resend_toppersystem,$level_parsing_img=0,$resendCentraltoppersystem,$stronglazyload_images_toppersystem_send){	                
                    if($contenuto_link_sito != ""){
		                preg_match_all("'<\s*noscript[^>]*[^/]>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*noscript>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}

		                preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image[^>]*[^/]>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}	
		                
		                preg_match_all("'<\s*picture[^>]*[^/]>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}

		                preg_match_all("'<\s*style[^>]*[^/]>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {											
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);			
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
			                $stringa_sito="";
			                $stringa_sito_new="";		
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*style>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);			
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
			                $stringa_sito="";
			                $stringa_sito_new="";		
		                }
		                if(is_array($risultato)){$risultato=array();}

                        if($level_parsing_img != "0"){
                            if($stronglazyload_images_toppersystem_send != "1"){			            
		                        $contenuto_link_sito_analizza="$contenuto_link_sito";
		                        $n_indice=0;	
                                $stop="";
                                $norepeat="";
                                $add_preload_image="";
                                $block_remove_loading_stop="";
		                        preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
		                        $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
		                        for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
			                        if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
				                        if((str_replace("img ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("img[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){

                                            $ris_attributo_fetchpriority=TopperSystemSetFilereceived::work_attributo("fetchpriority",$contenuto_link_sito_analizza[$i]);
                                            $ris_attributo_fetchpriority_complete=$ris_attributo_fetchpriority["0"];
                                            $ris_attributo_fetchpriority_content=$ris_attributo_fetchpriority["1"];
                                            if(strtolower($ris_attributo_fetchpriority_content) == "high"){
                                                $fetchpriority_hight="ok";
                                            }else{
                                                $fetchpriority_hight="no";
                                            }

					                        if(str_replace(array("-srcset=", "-srcset =", "srcset-", "-src=", "-src =", "src-", "-sizes=", "-sizes =", "sizes-", "_srcset=", "_srcset =", "srcset_", "_src=", "_src =", "src_", "_sizes=", "_sizes =", "sizes_", "data-lazyload"),"",strtolower($contenuto_link_sito_analizza[$i])) == strtolower($contenuto_link_sito_analizza[$i])){

                                                $ris_attributo_width=TopperSystemSetFilereceived::work_attributo("width",$contenuto_link_sito_analizza[$i]);
                                                $ris_attributo_width_complete=$ris_attributo_width["0"];
                                                $ris_attributo_width_content=(int) $ris_attributo_width["1"];

                                                if((($ris_attributo_width_content >= 320)&&($stop == "")&&($norepeat == "")&&($level_parsing_img == "2"))||(($fetchpriority_hight == "ok")&&($level_parsing_img != "0")&&($stop == "")&&($norepeat == ""))){
                                                    $ris_attributo_src=TopperSystemSetFilereceived::work_attributo("src",$contenuto_link_sito_analizza[$i]);
                                                    $ris_attributo_src_complete=$ris_attributo_src["0"];
                                                    $ris_attributo_src_content=$ris_attributo_src["1"];

                                                    $ris_attributo_srcset=TopperSystemSetFilereceived::work_attributo("srcset",$contenuto_link_sito_analizza[$i]);
                                                    $ris_attributo_srcset_complete=$ris_attributo_srcset["0"];
                                                    $ris_attributo_srcset_content=$ris_attributo_srcset["1"];

                                                    if((trim($ris_attributo_src_content) != "")||(trim($ris_attributo_src_content) != "")){
                                                        if(trim($ris_attributo_src_content) != ""){
                                                            $add_preload_image_src=" href=\"$ris_attributo_src_content\"";
                                                        }else{
                                                            $add_preload_image_src="";
                                                        }

                                                        if(trim($ris_attributo_srcset_content) != ""){
                                                            $add_preload_image_srcset=" imagesrcset=\"$ris_attributo_srcset_content\"";
                                                        }else{
                                                            $add_preload_image_srcset="";
                                                        }

                                                        $add_preload_image="<link rel=\"preload\"$add_preload_image_src as=\"image\"$add_preload_image_srcset />";
                                                        $stop="ok";
                                                        $work_continue="no";
                                                    }else{
                                                       $norepeat="ok";
                                                       $work_continue="ok"; 
                                                    }
                                                    $ris_attributo_src=array();  
                                                    $ris_attributo_srcset_content=array();  
                                                    
                                                }else{
                                                    $work_continue="ok"; 
                                                }
                                                
                                                if($work_continue == "ok"){
                                                    if(str_replace(array("data-ts-width=", "data-ts-height"),"",$contenuto_link_sito_analizza[$i]) != $contenuto_link_sito_analizza[$i]){
                                                        
                                                        $new_blocco=$contenuto_link_sito_analizza[$i];

                                                        $ris_attributo_class=TopperSystemSetFilereceived::work_attributo("class",$contenuto_link_sito_analizza[$i]);
                                                        $ris_attributo_class_complete=$ris_attributo_class["0"];
                                                        $ris_attributo_class_content=$ris_attributo_class["1"];

                                                        if(trim($ris_attributo_class_complete) != ""){

                                                            $verifica_tipo_virgolette=substr(trim($ris_attributo_class_complete), strlen(trim($ris_attributo_class_complete))-1);
                                                            if($verifica_tipo_virgolette == "'"){
                                                                $ris_attributo_class_complete_new=str_replace("'".$ris_attributo_class_content."'","'nolazy_toppersystem ".$ris_attributo_class_content."'",$ris_attributo_class_complete);
                                                            }else{							
                                                                $ris_attributo_class_complete_new=str_replace("\"".$ris_attributo_class_content."\"","\"nolazy_toppersystem ".$ris_attributo_class_content."\"",$ris_attributo_class_complete);
                                                            }
                                                            $new_blocco=str_replace("$ris_attributo_class_complete","$ris_attributo_class_complete_new",$new_blocco);
                                                        
                                                        }else{
                                                            #aggiungi class
                                                            $new_blocco.=" class=\"nolazy_toppersystem\"";
                                                        }

                                                        if($contenuto_link_sito_analizza[$i] != "$new_blocco"){
                                                            $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$contenuto_link_sito_analizza[$i]);
                                                            $ris_attributo_loading_complete=$ris_attributo_loading["0"];
                                                            $ris_attributo_loading_content=$ris_attributo_loading["1"];
                                                            if(trim($ris_attributo_loading_complete) != ""){
                                                                $new_blocco=str_replace("$ris_attributo_loading_complete","",$new_blocco);
                                                            }
                                                            $ris_attributo_loading=array();

                                                            $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$contenuto_link_sito_analizza[$i]);
                                                            $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
                                                            $ris_attributo_decoding_content=$ris_attributo_decoding["1"];
                                                            if(trim($ris_attributo_decoding_complete) != ""){
                                                                $new_blocco=str_replace("$ris_attributo_decoding_complete","",$new_blocco);
                                                            }
                                                            $ris_attributo_decoding=array();

                                                            if(str_replace("data-ts-width=","",$new_blocco) != "$new_blocco"){
                                                                $ris_attributo_data_ts_width=TopperSystemSetFilereceived::work_attributo("data-ts-width",$contenuto_link_sito_analizza[$i]);
                                                                $ris_attributo_data_ts_width_complete=$ris_attributo_data_ts_width["0"];

                                                                if(trim($ris_attributo_data_ts_width_complete) != ""){
                                                                    $verifica_tipo_virgolette=substr(trim($ris_attributo_data_ts_width_complete), strlen(trim($ris_attributo_data_ts_width_complete))-1);
                                                                    if($fetchpriority_hight == "ok"){
                                                                        if($verifica_tipo_virgolette == "'"){
                                                                            $new_blocco=str_replace("data-ts-width=","fetchpriority='high' decoding='async' data-ts-width=",$new_blocco);
                                                                        }else{							
                                                                            $new_blocco=str_replace("data-ts-width=","fetchpriority=\"high\" decoding=\"async\" data-ts-width=",$new_blocco);
                                                                        }                                                            
                                                                    }else{
                                                                        if($verifica_tipo_virgolette == "'"){
                                                                            $new_blocco=str_replace("data-ts-width=","loading='lazy' decoding='async' data-ts-width=",$new_blocco);
                                                                        }else{							
                                                                            $new_blocco=str_replace("data-ts-width=","loading=\"lazy\" decoding=\"async\" data-ts-width=",$new_blocco);
                                                                        }
                                                                    }                                 
                                                                
                                                                }                                            
                                                            }else{
                                                                $ris_attributo_data_ts_height=TopperSystemSetFilereceived::work_attributo("data-ts-height",$contenuto_link_sito_analizza[$i]);
                                                                $ris_attributo_data_ts_height_complete=$ris_attributo_data_ts_height["0"];

                                                                if(trim($ris_attributo_data_ts_height_complete) != ""){
                                                                    $verifica_tipo_virgolette=substr(trim($ris_attributo_data_ts_height_complete), strlen(trim($ris_attributo_data_ts_height_complete))-1);
                                                                    if($fetchpriority_hight == "ok"){
                                                                        if($verifica_tipo_virgolette == "'"){
                                                                            $new_blocco=str_replace("data-ts-height=","fetchpriority='high' decoding='async' data-ts-height=",$new_blocco);
                                                                        }else{							
                                                                            $new_blocco=str_replace("data-ts-height=","fetchpriority=\"high\" decoding=\"async\" data-ts-height=",$new_blocco);
                                                                        }
                                                                    }else{
                                                                        if($verifica_tipo_virgolette == "'"){
                                                                            $new_blocco=str_replace("data-ts-height=","loading='lazy' decoding='async' data-ts-height=",$new_blocco);
                                                                        }else{							
                                                                            $new_blocco=str_replace("data-ts-height=","loading=\"lazy\" decoding=\"async\" data-ts-height=",$new_blocco);
                                                                        }
                                                                    }                                   
                                                                
                                                                }
                                                            }
                                                            
                                                            $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                        }
                                                        $new_blocco="";
                                                        $ris_attributo_class=array();
                                                    }else{
                                                        $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$contenuto_link_sito_analizza[$i]);
                                                        $ris_attributo_loading_complete=$ris_attributo_loading["0"];
                                                        $ris_attributo_loading_content=$ris_attributo_loading["1"];
                                                        if(trim($ris_attributo_loading_complete) == ""){
                                                            
                                                            $new_blocco=$contenuto_link_sito_analizza[$i];

                                                            $ris_attributo_class=TopperSystemSetFilereceived::work_attributo("class",$contenuto_link_sito_analizza[$i]);
                                                            $ris_attributo_class_complete=$ris_attributo_class["0"];
                                                            $ris_attributo_class_content=$ris_attributo_class["1"];

                                                            if(trim($ris_attributo_class_complete) != ""){

                                                                $verifica_tipo_virgolette=substr(trim($ris_attributo_class_complete), strlen(trim($ris_attributo_class_complete))-1);
                                                                if($verifica_tipo_virgolette == "'"){
                                                                    $ris_attributo_class_complete_new=str_replace("'".$ris_attributo_class_content."'","'nolazy_toppersystem ".$ris_attributo_class_content."'",$ris_attributo_class_complete);
                                                                }else{							
                                                                    $ris_attributo_class_complete_new=str_replace("\"".$ris_attributo_class_content."\"","\"nolazy_toppersystem ".$ris_attributo_class_content."\"",$ris_attributo_class_complete);
                                                                }
                                                                $new_blocco=str_replace("$ris_attributo_class_complete","$ris_attributo_class_complete_new",$new_blocco);
                                                                $ris_attributo_class_complete_new="";
                                                            }else{
                                                                #aggiungi class
                                                                $new_blocco.=" class=\"nolazy_toppersystem\"";
                                                            }

                                                            if($contenuto_link_sito_analizza[$i] != "$new_blocco"){
                                                                $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$contenuto_link_sito_analizza[$i]);
                                                                $ris_attributo_loading_complete=$ris_attributo_loading["0"];
                                                                $ris_attributo_loading_content=$ris_attributo_loading["1"];
                                                                if(trim($ris_attributo_loading_complete) != ""){
                                                                    $new_blocco=str_replace("$ris_attributo_loading_complete","",$new_blocco);
                                                                }
                                                                $ris_attributo_loading=array();

                                                                $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$contenuto_link_sito_analizza[$i]);
                                                                $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
                                                                $ris_attributo_decoding_content=$ris_attributo_decoding["1"];
                                                                if(trim($ris_attributo_decoding_complete) != ""){
                                                                    $new_blocco=str_replace("$ris_attributo_decoding_complete","",$new_blocco);
                                                                }
                                                                $ris_attributo_decoding=array();

                                                                $ris_attributo_classnew=TopperSystemSetFilereceived::work_attributo("class",$new_blocco);
                                                                $ris_attributo_classnew_complete=$ris_attributo_classnew["0"];

                                                                if(trim($ris_attributo_classnew_complete) != ""){
                                                                    $verifica_tipo_virgolette=substr(trim($ris_attributo_classnew_complete), strlen(trim($ris_attributo_classnew_complete))-1);
                                                                    if($fetchpriority_hight == "ok"){
                                                                        if($verifica_tipo_virgolette == "'"){
                                                                            $new_blocco=str_replace("$ris_attributo_classnew_complete"," fetchpriority='high' decoding='async' $ris_attributo_classnew_complete",$new_blocco);
                                                                        }else{							
                                                                            $new_blocco=str_replace("$ris_attributo_classnew_complete"," fetchpriority=\"high\" decoding=\"async\" $ris_attributo_classnew_complete",$new_blocco);
                                                                        }                                                                
                                                                    }else{
                                                                        if($verifica_tipo_virgolette == "'"){
                                                                            $new_blocco=str_replace("$ris_attributo_classnew_complete"," loading='lazy' decoding='async' $ris_attributo_classnew_complete",$new_blocco);
                                                                        }else{							
                                                                            $new_blocco=str_replace("$ris_attributo_classnew_complete"," loading=\"lazy\" decoding=\"async\" $ris_attributo_classnew_complete",$new_blocco);
                                                                        }
                                                                    }                                   
                                                                                                                
                                                                }                                             
                                                                $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                            }
                                                            $new_blocco="";
                                                            $ris_attributo_class=array();
                                                            

                                                        }else{
                                                            $new_blocco=$contenuto_link_sito_analizza[$i];

                                                            $ris_attributo_class=TopperSystemSetFilereceived::work_attributo("class",$contenuto_link_sito_analizza[$i]);
                                                            $ris_attributo_class_complete=$ris_attributo_class["0"];
                                                            $ris_attributo_class_content=$ris_attributo_class["1"];

                                                            if(trim($ris_attributo_class_complete) != ""){

                                                                $verifica_tipo_virgolette=substr(trim($ris_attributo_class_complete), strlen(trim($ris_attributo_class_complete))-1);
                                                                if($verifica_tipo_virgolette == "'"){
                                                                    $ris_attributo_class_complete_new=str_replace("'".$ris_attributo_class_content."'","'nolazy_toppersystem ".$ris_attributo_class_content."'",$ris_attributo_class_complete);
                                                                }else{							
                                                                    $ris_attributo_class_complete_new=str_replace("\"".$ris_attributo_class_content."\"","\"nolazy_toppersystem ".$ris_attributo_class_content."\"",$ris_attributo_class_complete);
                                                                }
                                                                $new_blocco=str_replace("$ris_attributo_class_complete","$ris_attributo_class_complete_new",$new_blocco);
                                                                $ris_attributo_class_complete_new="";
                                                            }else{
                                                                #aggiungi class
                                                                $new_blocco.=" class=\"nolazy_toppersystem\"";
                                                            }
                                                            
                                                            #preleva loading e aggiungi decoding
                                                            $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$contenuto_link_sito_analizza[$i]);
                                                            $ris_attributo_loading_complete=$ris_attributo_loading["0"];
                                                            $ris_attributo_loading_content=$ris_attributo_loading["1"];
                                                            if(trim($ris_attributo_loading_complete) != ""){
                                                                $new_blocco=str_replace("$ris_attributo_loading_complete","",$new_blocco);
                                                            }
                                                            $ris_attributo_loading=array();

                                                            $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$contenuto_link_sito_analizza[$i]);
                                                            $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
                                                            $ris_attributo_decoding_content=$ris_attributo_decoding["1"];
                                                            if(trim($ris_attributo_decoding_complete) != ""){
                                                                $new_blocco=str_replace("$ris_attributo_decoding_complete","",$new_blocco);
                                                            }
                                                            $ris_attributo_decoding=array();

                                                            $ris_attributo_classnew=TopperSystemSetFilereceived::work_attributo("class",$new_blocco);
                                                            $ris_attributo_classnew_complete=$ris_attributo_classnew["0"];

                                                            if(trim($ris_attributo_classnew_complete) != ""){
                                                                $verifica_tipo_virgolette=substr(trim($ris_attributo_classnew_complete), strlen(trim($ris_attributo_classnew_complete))-1);
                                                                if($fetchpriority_hight == "ok"){
                                                                    if($verifica_tipo_virgolette == "'"){
                                                                        $new_blocco=str_replace("$ris_attributo_classnew_complete"," fetchpriority='high' decoding='async' $ris_attributo_classnew_complete",$new_blocco);
                                                                    }else{							
                                                                        $new_blocco=str_replace("$ris_attributo_classnew_complete"," fetchpriority=\"high\" decoding=\"async\" $ris_attributo_classnew_complete",$new_blocco);
                                                                    }
                                                                }else{
                                                                    if($verifica_tipo_virgolette == "'"){
                                                                        $new_blocco=str_replace("$ris_attributo_classnew_complete"," loading='lazy' decoding='async' $ris_attributo_classnew_complete",$new_blocco);
                                                                    }else{							
                                                                        $new_blocco=str_replace("$ris_attributo_classnew_complete"," loading=\"lazy\" decoding=\"async\" $ris_attributo_classnew_complete",$new_blocco);
                                                                    }
                                                                }                                                                                                        
                                                            }

                                                            if($contenuto_link_sito_analizza[$i] != "$new_blocco"){                                            
                                                                $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                            }
                                                            $new_blocco="";
                                                            $ris_attributo_class=array();

                                                        }
                                                    }
                                                    
                                                }else{
                                                    if($add_preload_image != ""){
                                                        if(str_replace("$add_preload_image","",$contenuto_link_sito) == "$contenuto_link_sito"){
                                                            $modeager="no";
                                                            $ver1=count(explode("fetchpriority=\"high\"",strtolower($contenuto_link_sito))) - 1;
                                                            $ver2=count(explode("fetchpriority='high'",strtolower($contenuto_link_sito)))  - 1;
                                                            $ver3=count(explode("fetchpriority =\"high\"",strtolower($contenuto_link_sito))) - 1;
                                                            $ver4=count(explode("fetchpriority ='high'",strtolower($contenuto_link_sito))) - 1;
                                                            $ver5=count(explode("fetchpriority= \"high\"",strtolower($contenuto_link_sito))) - 1;
                                                            $ver6=count(explode("fetchpriority= 'high'",strtolower($contenuto_link_sito))) - 1;
                                                            $ver7=count(explode("fetchpriority = \"high\"",strtolower($contenuto_link_sito))) - 1;
                                                            $ver8=count(explode("fetchpriority = 'high'",strtolower($contenuto_link_sito))) - 1;
                                                            if($fetchpriority_hight == "ok"){
                                                                if(($ver1 >= 2)||($ver2 >= 2)||($ver3 >= 2)||($ver4 >= 2)||($ver5 >= 2)||($ver6 >= 2)||($ver7 >= 2)||($ver8 >= 2)){
                                                                    $modeager="ok";
                                                                }
                                                            }else{
                                                                if(($ver1 >= 1)||($ver2 >= 1)||($ver3 >= 1)||($ver4 >= 1)||($ver5 >= 1)||($ver6 >= 1)||($ver7 >= 1)||($ver8 >= 1)){
                                                                    $modeager="ok";
                                                                }
                                                            }

                                                            if($modeager == "ok"){
                                                                $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$contenuto_link_sito_analizza[$i]);
                                                                $ris_attributo_loading_complete=$ris_attributo_loading["0"];
                                                                $ris_attributo_loading_content=$ris_attributo_loading["1"];
                                                                $new_blocco=$contenuto_link_sito_analizza[$i];
                                                                if(trim($ris_attributo_loading_complete) != ""){
                                                                    $new_blocco=str_replace("$ris_attributo_loading_complete"," loading=\"eager\"",$contenuto_link_sito_analizza[$i]);

                                                                    $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$new_blocco);
                                                                    $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
                                                                    $ris_attributo_decoding_content=$ris_attributo_decoding["1"];
                                                                    if(trim($ris_attributo_decoding_complete) != ""){
                                                                        $new_blocco=str_replace("$ris_attributo_decoding_complete"," decoding=\"async\"",$new_blocco);                                                
                                                                    }else{
                                                                        $new_blocco=str_replace(" loading=\"eager\""," loading=\"eager\" decoding=\"async\"",$new_blocco);
                                                                        $new_blocco=str_replace(" loading='eager'"," loading='eager' decoding='async'",$new_blocco); 
                                                                    }
                                                                    $ris_attributo_decoding=array();
                                                                    $ris_attributo_decoding_complete="";
                                                                    $ris_attributo_decoding_content="";

                                                                    $ris_attributo_fetchpriority=TopperSystemSetFilereceived::work_attributo("fetchpriority",$new_blocco);
                                                                    $ris_attributo_fetchpriority_complete=$ris_attributo_fetchpriority["0"];
                                                                    $ris_attributo_fetchpriority_content=$ris_attributo_fetchpriority["1"];
                                                                    if(trim($ris_attributo_fetchpriority_complete) != ""){
                                                                        $new_blocco=str_replace("$ris_attributo_fetchpriority_complete","",$new_blocco);                                                
                                                                    }
                                                                    $ris_attributo_fetchpriority=array();
                                                                    $ris_attributo_fetchpriority_complete="";
                                                                    $ris_attributo_fetchpriority_content="";

                                                                    $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito); 
                                                                    $block_remove_loading_stop="$new_blocco";                                                      
                                                                }else{
                                                                    $ris_attributo_src=TopperSystemSetFilereceived::work_attributo("src",$contenuto_link_sito_analizza[$i]);
                                                                    $ris_attributo_src_complete=$ris_attributo_src["0"];

                                                                    if($ris_attributo_src_complete != ""){
                                                                        $new_blocco=str_replace("$ris_attributo_src_complete","$ris_attributo_src_complete loading=\"eager\"",$contenuto_link_sito_analizza[$i]);

                                                                        $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$new_blocco);
                                                                        $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
                                                                        $ris_attributo_decoding_content=$ris_attributo_decoding["1"];
                                                                        if(trim($ris_attributo_decoding_complete) != ""){
                                                                            $new_blocco=str_replace("$ris_attributo_decoding_complete"," decoding=\"async\"",$new_blocco);                                                
                                                                        }else{
                                                                            $new_blocco=str_replace(" loading=\"eager\""," loading=\"eager\" decoding=\"async\"",$new_blocco);
                                                                            $new_blocco=str_replace(" loading='eager'"," loading='eager' decoding='async'",$new_blocco);
                                                                        }
                                                                        $ris_attributo_decoding=array();
                                                                        $ris_attributo_decoding_complete="";
                                                                        $ris_attributo_decoding_content="";

                                                                        $ris_attributo_fetchpriority=TopperSystemSetFilereceived::work_attributo("fetchpriority",$new_blocco);
                                                                        $ris_attributo_fetchpriority_complete=$ris_attributo_fetchpriority["0"];
                                                                        $ris_attributo_fetchpriority_content=$ris_attributo_fetchpriority["1"];
                                                                        if(trim($ris_attributo_fetchpriority_complete) != ""){
                                                                            $new_blocco=str_replace("$ris_attributo_fetchpriority_complete","",$new_blocco);                                                
                                                                        }
                                                                        $ris_attributo_fetchpriority=array();
                                                                        $ris_attributo_fetchpriority_complete="";
                                                                        $ris_attributo_fetchpriority_content="";

                                                                        $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                                        $block_remove_loading_stop="$new_blocco";                                                            
                                                                    }
                                                                    $ris_attributo_src=array();
                                                                    $ris_attributo_src_complete="";
                                                                }
                                                                $ris_attributo_loading=array();
                                                                $ris_attributo_loading_complete="";
                                                                $ris_attributo_loading_content="";                                            

                                                                $new_blocco="";
                                                                if(TopperSystemSetFilereceived::verify_preload_image_toppersystem("$add_preload_image","$contenuto_link_sito") == "ok"){
                                                                    $contenuto_link_sito=str_replace("</head>","\n".$add_preload_image."</head>",$contenuto_link_sito);
                                                                }
                                                            }else{
                                                                $ris_attributo_fetchpriority=TopperSystemSetFilereceived::work_attributo("fetchpriority",$contenuto_link_sito_analizza[$i]);
                                                                $ris_attributo_fetchpriority_complete=$ris_attributo_fetchpriority["0"];
                                                                $ris_attributo_fetchpriority_content=$ris_attributo_fetchpriority["1"];
                                                                $new_blocco=$contenuto_link_sito_analizza[$i];
                                                                if(trim($ris_attributo_fetchpriority_complete) != ""){
                                                                    $new_blocco=str_replace("$ris_attributo_fetchpriority_complete"," fetchpriority=\"high\"",$contenuto_link_sito_analizza[$i]);

                                                                    $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$new_blocco);
                                                                    $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
                                                                    $ris_attributo_decoding_content=$ris_attributo_decoding["1"];
                                                                    if(trim($ris_attributo_decoding_complete) != ""){
                                                                        $new_blocco=str_replace("$ris_attributo_decoding_complete"," decoding=\"async\"",$new_blocco);                                                
                                                                    }else{
                                                                        $new_blocco=str_replace(" fetchpriority=\"high\""," fetchpriority=\"high\" decoding=\"async\"",$new_blocco);
                                                                        $new_blocco=str_replace(" fetchpriority='high'"," fetchpriority='high' decoding='async'",$new_blocco); 
                                                                    }
                                                                    $ris_attributo_decoding=array();
                                                                    $ris_attributo_decoding_complete="";
                                                                    $ris_attributo_decoding_content="";

                                                                    $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$new_blocco);
                                                                    $ris_attributo_loading_complete=$ris_attributo_loading["0"];
                                                                    $ris_attributo_loading_content=$ris_attributo_loading["1"];
                                                                    if(trim($ris_attributo_loading_complete) != ""){
                                                                        $new_blocco=str_replace("$ris_attributo_loading_complete","",$new_blocco);                                                
                                                                    }
                                                                    $ris_attributo_loading=array();
                                                                    $ris_attributo_loading_complete="";
                                                                    $ris_attributo_loading_content="";

                                                                    $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito); 
                                                                    $block_remove_loading_stop="$new_blocco";                                                      
                                                                }else{
                                                                    $ris_attributo_src=TopperSystemSetFilereceived::work_attributo("src",$contenuto_link_sito_analizza[$i]);
                                                                    $ris_attributo_src_complete=$ris_attributo_src["0"];

                                                                    if($ris_attributo_src_complete != ""){
                                                                        $new_blocco=str_replace("$ris_attributo_src_complete","$ris_attributo_src_complete fetchpriority=\"high\"",$contenuto_link_sito_analizza[$i]);

                                                                        $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$new_blocco);
                                                                        $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
                                                                        $ris_attributo_decoding_content=$ris_attributo_decoding["1"];
                                                                        if(trim($ris_attributo_decoding_complete) != ""){
                                                                            $new_blocco=str_replace("$ris_attributo_decoding_complete"," decoding=\"async\"",$new_blocco);                                                
                                                                        }else{
                                                                            $new_blocco=str_replace(" fetchpriority=\"high\""," fetchpriority=\"high\" decoding=\"async\"",$new_blocco);
                                                                            $new_blocco=str_replace(" fetchpriority='high'"," fetchpriority='high' decoding='async'",$new_blocco);
                                                                        }
                                                                        $ris_attributo_decoding=array();
                                                                        $ris_attributo_decoding_complete="";
                                                                        $ris_attributo_decoding_content="";

                                                                        $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$new_blocco);
                                                                        $ris_attributo_loading_complete=$ris_attributo_loading["0"];
                                                                        $ris_attributo_loading_content=$ris_attributo_loading["1"];
                                                                        if(trim($ris_attributo_loading_complete) != ""){
                                                                            $new_blocco=str_replace("$ris_attributo_loading_complete","",$new_blocco);                                                
                                                                        }
                                                                        $ris_attributo_loading=array();
                                                                        $ris_attributo_loading_complete="";
                                                                        $ris_attributo_loading_content="";

                                                                        $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                                        $block_remove_loading_stop="$new_blocco";                                                            
                                                                    }
                                                                    $ris_attributo_src=array();
                                                                    $ris_attributo_src_complete="";
                                                                }
                                                                $ris_attributo_loading=array();
                                                                $ris_attributo_loading_complete="";
                                                                $ris_attributo_loading_content="";                                         

                                                                $new_blocco="";
                                                            }
                                                        }
                                                    }
                                                }                                         
                                                $ris_attributo_width=array();                            
                                            }else{
                                                $ris_attributo_width=TopperSystemSetFilereceived::work_attributo("width",$contenuto_link_sito_analizza[$i]);
                                                $ris_attributo_width_complete=$ris_attributo_width["0"];
                                                $ris_attributo_width_content=(int) $ris_attributo_width["1"];
                                                if((($ris_attributo_width_content >= 320)||($fetchpriority_hight == "ok"))&&($stop == "")&&($norepeat == "")){
                                                    $norepeat="ok";
                                                    $ris_attributo_src=array();  
                                                    $ris_attributo_srcset_content=array(); 
                                                    $block_remove_loading_stop=$contenuto_link_sito_analizza[$i];                                            
                                                }
                                                $ris_attributo_width=array();
                                            }
						                    
				                        }
				                        $contenuto_link_sito_analizza[$i]="";
                                        $add_preload_image="";
			                        }               
			                        
		                        }
		                        $contenuto_link_sito_analizza=array();

                                if(($block_remove_loading_stop != "")&&($level_parsing_img != "0")){
                                    $stop="";
		                            $contenuto_link_sito_analizza="$contenuto_link_sito";
		                            preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
		                            $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
		                            for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
			                            if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
				                            if((str_replace("img ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("img[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){
						                        if($stop == ""){							                
							                        $contenuto_link_sito_analizza_new=$contenuto_link_sito_analizza[$i];

                                                    if($contenuto_link_sito_analizza_new != "$block_remove_loading_stop"){

							                            $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$contenuto_link_sito_analizza_new);
							                            $ris_attributo_loading_complete=$ris_attributo_loading["0"];
							                            if(trim($ris_attributo_loading_complete) != ""){
									                        $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_loading_complete","",$contenuto_link_sito_analizza_new);
							                            }	
							                            $ris_attributo_loading=array();
							                            $ris_attributo_loading_complete="";                                            
                                                        
							                            if($contenuto_link_sito_analizza[$i] != "$contenuto_link_sito_analizza_new"){
								                            $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$contenuto_link_sito_analizza_new",$contenuto_link_sito);	
							                            }
                                                    }else{
                                                        $stop="stop";
                                                    }
							                        $contenuto_link_sito_analizza_new="";

						                        }
					                        }	
				                            $contenuto_link_sito_analizza[$i]="";
			                            }               
			                            
		                            }
		                            $contenuto_link_sito_analizza=array();
                                }		

		                        $contenuto_link_sito_analizza="$contenuto_link_sito";
		                        preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
		                        $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
		                        for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
			                        if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
				                        if((str_replace("img ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("img[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){
						                    if(str_replace(array("-srcset=", "-srcset =", "srcset-", "-src=", "-src =", "src-", "-sizes=", "-sizes =", "sizes-", "_srcset=", "_srcset =", "srcset_", "_src=", "_src =", "src_", "_sizes=", "_sizes =", "sizes_", "data-lazyload"),"",strtolower($contenuto_link_sito_analizza[$i])) == strtolower($contenuto_link_sito_analizza[$i])){
							                    
							                    $contenuto_link_sito_analizza_new=$contenuto_link_sito_analizza[$i];

							                    $ris_attributo_width=TopperSystemSetFilereceived::work_attributo("width",$contenuto_link_sito_analizza_new);
							                    $ris_attributo_width_complete=$ris_attributo_width["0"];
							                    if(trim($ris_attributo_width_complete) != ""){
								                    if(count(explode("$ris_attributo_width_complete",$contenuto_link_sito_analizza_new)) > 2){
									                    $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_width_complete","",$contenuto_link_sito_analizza_new)."$ris_attributo_width_complete";
								                    }
							                    }
							                    $ris_attributo_width=array();
							                    $ris_attributo_width_complete="";

							                    $ris_attributo_height=TopperSystemSetFilereceived::work_attributo("height",$contenuto_link_sito_analizza_new);
							                    $ris_attributo_height_complete=$ris_attributo_height["0"];
							                    if(trim($ris_attributo_height_complete) != ""){
								                    if(count(explode("$ris_attributo_height_complete",$contenuto_link_sito_analizza_new)) > 2){
									                    $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_height_complete","",$contenuto_link_sito_analizza_new)."$ris_attributo_height_complete";
								                    }
							                    }	
							                    $ris_attributo_height=array();
							                    $ris_attributo_height_complete="";

							                    $ris_attributo_data_ts_width=TopperSystemSetFilereceived::work_attributo("data-ts-width",$contenuto_link_sito_analizza_new);
							                    $ris_attributo_data_ts_width_complete=$ris_attributo_data_ts_width["0"];
							                    if(trim($ris_attributo_data_ts_width_complete) != ""){
								                    if(count(explode("$ris_attributo_data_ts_width_complete",$contenuto_link_sito_analizza_new)) > 2){
									                    $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_data_ts_width_complete","",$contenuto_link_sito_analizza_new)."$ris_attributo_data_ts_width_complete";
								                    }
							                    }
							                    $ris_attributo_data_ts_width=array();
							                    $ris_attributo_data_ts_width_complete="";

							                    $ris_attributo_data_ts_height=TopperSystemSetFilereceived::work_attributo("data-ts-height",$contenuto_link_sito_analizza_new);
							                    $ris_attributo_data_ts_height_complete=$ris_attributo_data_ts_height["0"];
							                    if(trim($ris_attributo_data_ts_height_complete) != ""){
								                    if(count(explode("$ris_attributo_data_ts_height_complete",$contenuto_link_sito_analizza_new)) > 2){
									                    $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_data_ts_height_complete","",$contenuto_link_sito_analizza_new)."$ris_attributo_data_ts_height_complete";
								                    }
							                    }						
							                    $ris_attributo_data_ts_heigh=array();
							                    $ris_attributo_data_ts_heigh_complete="";

							                    $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$contenuto_link_sito_analizza_new);
							                    $ris_attributo_loading_complete=$ris_attributo_loading["0"];
							                    if(trim($ris_attributo_loading_complete) != ""){
								                    if(count(explode("$ris_attributo_loading_complete",$contenuto_link_sito_analizza_new)) > 2){
									                    $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_loading_complete","",$contenuto_link_sito_analizza_new)."$ris_attributo_loading_complete";
								                    }
							                    }	
							                    $ris_attributo_loading=array();
							                    $ris_attributo_loading_complete="";

							                    $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$contenuto_link_sito_analizza_new);
							                    $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
							                    if(trim($ris_attributo_decoding_complete) != ""){
								                    if(count(explode("$ris_attributo_decoding_complete",$contenuto_link_sito_analizza_new)) > 2){
									                    $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_decoding_complete","",$contenuto_link_sito_analizza_new)."$ris_attributo_decoding_complete";
								                    }
							                    }	
							                    $ris_attributo_decoding=array();
							                    $ris_attributo_decoding_complete="";

							                    $ris_attributo_fetchpriority=TopperSystemSetFilereceived::work_attributo("fetchpriority",$contenuto_link_sito_analizza_new);
							                    $ris_attributo_fetchpriority_complete=$ris_attributo_fetchpriority["0"];
							                    if(trim($ris_attributo_fetchpriority_complete) != ""){
								                    if(count(explode("$ris_attributo_fetchpriority_complete",$contenuto_link_sito_analizza_new)) > 2){
									                    $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_fetchpriority_complete","",$contenuto_link_sito_analizza_new)."$ris_attributo_fetchpriority_complete";
								                    }
							                    }	
							                    $ris_attributo_fetchpriority=array();
							                    $ris_attributo_fetchpriority_complete="";

							                    $ris_attributo_class=TopperSystemSetFilereceived::work_attributo("class",$contenuto_link_sito_analizza_new);
							                    $ris_attributo_class_complete=$ris_attributo_class["0"];
							                    if(trim($ris_attributo_class_complete) != ""){
								                    if(count(explode("$ris_attributo_class_complete",$contenuto_link_sito_analizza_new)) > 2){
									                    $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_class_complete","",$contenuto_link_sito_analizza_new)."$ris_attributo_class_complete";
								                    }
							                    }
							                    $ris_attributo_class=array();
							                    $ris_attributo_class_complete="";

							                    if($contenuto_link_sito_analizza[$i] != "$contenuto_link_sito_analizza_new"){
								                    $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$contenuto_link_sito_analizza_new",$contenuto_link_sito);	
							                    }
							                    $contenuto_link_sito_analizza_new="";
						                    }
					                    }	
				                        $contenuto_link_sito_analizza[$i]="";
			                        }               
			                        
		                        }
		                        $contenuto_link_sito_analizza=array();
                            }
                        }

                        if($stronglazyload_images_toppersystem_send == "1"){
                            if(str_replace(array("</body>","</BODY>"),"",$contenuto_link_sito) != "$contenuto_link_sito"){
                                $count_transformers=0;
		                        $contenuto_link_sito_analizza="$contenuto_link_sito";
		                        preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
		                        $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
		                        for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
			                        if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
				                        if((str_replace("img ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("img[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){
						                    if(str_replace(array("-srcset=", "-srcset =", "srcset-", "-src=", "-src =", "src-", "-sizes=", "-sizes =", "sizes-", "_srcset=", "_srcset =", "srcset_", "_src=", "_src =", "src_", "_sizes=", "_sizes =", "sizes_", "data-lazyload"),"",strtolower($contenuto_link_sito_analizza[$i])) == strtolower($contenuto_link_sito_analizza[$i])){
							                    
							                    $contenuto_link_sito_analizza_new=$contenuto_link_sito_analizza[$i];

                                                if($contenuto_link_sito_analizza_new != ""){
							                        $ris_attributo_width=TopperSystemSetFilereceived::work_attributo("width",$contenuto_link_sito_analizza_new);
							                        $ris_attributo_width_complete=$ris_attributo_width["0"];
                                                    $ris_attributo_width_content=$ris_attributo_width["1"];

							                        $ris_attributo_height=TopperSystemSetFilereceived::work_attributo("height",$contenuto_link_sito_analizza_new);
							                        $ris_attributo_height_complete=$ris_attributo_height["0"];
                                                    $ris_attributo_height_content=$ris_attributo_height["1"];

							                        if((is_numeric($ris_attributo_width_content))&&(is_numeric($ris_attributo_height_content))){

							                            $ris_attributo_src=TopperSystemSetFilereceived::work_attributo("src",$contenuto_link_sito_analizza_new);
							                            $ris_attributo_src_complete=$ris_attributo_src["0"];
                                                        $ris_attributo_src_content=$ris_attributo_src["1"];
                                                        if(trim($ris_attributo_src_content) != ""){
                                                            
							                                $ris_attributo_loading=TopperSystemSetFilereceived::work_attributo("loading",$contenuto_link_sito_analizza_new);
							                                $ris_attributo_loading_complete=$ris_attributo_loading["0"];
							                                if(trim($ris_attributo_loading_complete) != ""){
                                                                $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_loading_complete","",$contenuto_link_sito_analizza_new);
							                                }	
							                                $ris_attributo_loading=array();
							                                $ris_attributo_loading_complete="";

							                                $ris_attributo_decoding=TopperSystemSetFilereceived::work_attributo("decoding",$contenuto_link_sito_analizza_new);
							                                $ris_attributo_decoding_complete=$ris_attributo_decoding["0"];
							                                if(trim($ris_attributo_decoding_complete) != ""){
                                                                $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_decoding_complete","",$contenuto_link_sito_analizza_new);
							                                }	
							                                $ris_attributo_decoding=array();
							                                $ris_attributo_decoding_complete="";

							                                $ris_attributo_fetchpriority=TopperSystemSetFilereceived::work_attributo("fetchpriority",$contenuto_link_sito_analizza_new);
							                                $ris_attributo_fetchpriority_complete=$ris_attributo_fetchpriority["0"];
							                                if(trim($ris_attributo_fetchpriority_complete) != ""){
                                                                $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_fetchpriority_complete","",$contenuto_link_sito_analizza_new);
							                                }	
							                                $ris_attributo_fetchpriority=array();
							                                $ris_attributo_fetchpriority_complete="";

                                                            if(str_replace("data:","",strtolower($ris_attributo_src_content)) == strtolower($ris_attributo_src_content)){
                                                                
                                                                $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_src_complete"," src=\"data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20".$ris_attributo_width_content."%20".$ris_attributo_height_content."'%3E%3C/svg%3E\" data-toppersystem-src=\"$ris_attributo_src_content\"",$contenuto_link_sito_analizza_new);

                                                                if($contenuto_link_sito_analizza[$i] != "$contenuto_link_sito_analizza_new"){
							                                        $ris_attributo_srcset=TopperSystemSetFilereceived::work_attributo("srcset",$contenuto_link_sito_analizza_new);
							                                        $ris_attributo_srcset_complete=$ris_attributo_srcset["0"];
                                                                    $ris_attributo_srcset_content=$ris_attributo_srcset["1"];
                                                                    if(trim($ris_attributo_srcset_content) != ""){
                                                                        $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_srcset_complete"," data-toppersystem-srcset=\"$ris_attributo_srcset_content\"",$contenuto_link_sito_analizza_new);

							                                            $ris_attributo_sizes=TopperSystemSetFilereceived::work_attributo("sizes",$contenuto_link_sito_analizza_new);
							                                            $ris_attributo_sizes_complete=$ris_attributo_sizes["0"];
                                                                        $ris_attributo_sizes_content=$ris_attributo_sizes["1"];
                                                                        if(trim($ris_attributo_sizes_content) != ""){
                                                                            $contenuto_link_sito_analizza_new=str_replace("$ris_attributo_sizes_complete"," data-toppersystem-sizes=\"$ris_attributo_sizes_content\"",$contenuto_link_sito_analizza_new);
                                                                        }
                                                                        $ris_attributo_sizes=array();
							                                            $ris_attributo_sizes_complete="";
                                                                        $ris_attributo_sizes_content="";
                                                                    }
                                                                    $ris_attributo_srcset=array();
							                                        $ris_attributo_srcset_complete="";
                                                                    $ris_attributo_srcset_content="";
                                                                }
                                                            }
                                                            $count_transformers++;
                                                        }
                                                        $ris_attributo_src=array();
                                                        $ris_attributo_src_complete="";
                                                        $ris_attributo_src_content="";
							                        }
							                        $ris_attributo_width=array();
                                                    $ris_attributo_height=array();
							                        $ris_attributo_width_complete="";
                                                    $ris_attributo_width_content="";
							                        $ris_attributo_height_complete="";
                                                    $ris_attributo_height_content="";

							                        if($contenuto_link_sito_analizza[$i] != "$contenuto_link_sito_analizza_new"){
								                        $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$contenuto_link_sito_analizza_new",$contenuto_link_sito);	
							                        }
							                    }
							                    $contenuto_link_sito_analizza_new="";
						                    }
					                    }	
				                        $contenuto_link_sito_analizza[$i]="";
			                        }               
			                        
		                        }
		                        $contenuto_link_sito_analizza=array();
                                if($count_transformers >= 1){
                                    $contenuto_link_sito=str_replace(array("</body>","</BODY>"),"<input type=\"hidden\" name=\"nolazy_toppersystem\" value=\"nolazy_toppersystem\"><script>function RenderimageToppersystem() {var itemimagetoppersystem = document.querySelectorAll(\"img[data-toppersystem-src]\");for (var i = 0; i < itemimagetoppersystem.length; i++) {if (itemimagetoppersystem[i]) {var lazyImage = itemimagetoppersystem[i];lazyImage.src = lazyImage.getAttribute(\"data-toppersystem-src\");lazyImage.removeAttribute(\"data-toppersystem-src\");if (lazyImage.getAttribute(\"data-toppersystem-srcset\")) {lazyImage.setAttribute(\"srcset\", lazyImage.getAttribute(\"data-toppersystem-srcset\"));lazyImage.removeAttribute(\"data-toppersystem-srcset\");if (lazyImage.getAttribute(\"data-toppersystem-sizes\")) {lazyImage.setAttribute(\"sizes\", lazyImage.getAttribute(\"data-toppersystem-sizes\"));lazyImage.removeAttribute(\"data-toppersystem-sizes\");}}itemimagetoppersystem[i] = \"\";lazyImage = \"\";}}}const eventListImagesToppersystem = [\"keydown\", \"mousemove\", \"touchmove\", \"touchstart\", \"touchend\", \"wheel\"];eventListImagesToppersystem.forEach(function(event) {window.addEventListener(event, triggerImagesToppersystem, {passive: true})});function triggerImagesToppersystem() {RenderimageToppersystem();eventListImagesToppersystem.forEach(function(event) {window.removeEventListener(event, triggerImagesToppersystem, { passive: true });});}</script></body>",$contenuto_link_sito);                                
                                }
                            }
                        }
			            
		                preg_match_all("'<\s*noscript[^>]*[^/]>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*noscript>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}

		                preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image[^>]*[^/]>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture[^>]*[^/]>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}

		                preg_match_all("'<\s*style[^>]*[^/]>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
			                $stringa_sito="";
			                $stringa_sito_new="";		
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*style>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
			                $stringa_sito="";
			                $stringa_sito_new="";		
		                }
		                if(is_array($risultato)){$risultato=array();}	                
                    }

	                return $contenuto_link_sito;
                }

                public static function rewrite_img_src($contenuto_link_sito,$url_link_sito,$resend_toppersystem,$level_parsing_img=0,$resendCentraltoppersystem,$resolution_images_toppersystem_send){

	                if($level_parsing_img != "0"){
		                preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image[^>]*[^/]>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}	
		                
		                preg_match_all("'<\s*picture[^>]*[^/]>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}		

		                $contenuto_link_sito_analizza="$contenuto_link_sito";
		                $n_indice=0;	
		                preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
		                $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
		                for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
			                if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
				                if((str_replace("img ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("img[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){
					                if(str_replace(array("srcset=", "srcset ="),"",strtolower($contenuto_link_sito_analizza[$i])) == strtolower($contenuto_link_sito_analizza[$i])){
						                
						                $ris_attributo_src=TopperSystemSetFilereceived::work_attributo("src",$contenuto_link_sito_analizza[$i]);
						                $ris_attributo_src_complete=$ris_attributo_src["0"];
						                $ris_attributo_src_content=$ris_attributo_src["1"];			
						                
						                if((trim($ris_attributo_src_content) != "")&&(strlen(trim($ris_attributo_src_content)) >= 5)){
							                $verifica_tipo_gif=substr(trim($ris_attributo_src_content), strlen(trim($ris_attributo_src_content))-4);

            #aggiungi verifica svg image blocca come fosse gif sia link .svg che data:
							                if((strtolower($verifica_tipo_gif) != ".gif")&&(strtolower($verifica_tipo_gif) != ".avi")&&(strtolower($verifica_tipo_gif) != ".mp4")&&(strtolower($verifica_tipo_gif) != ".txt")&&(strtolower($verifica_tipo_gif) != ".xml")&&(strtolower($verifica_tipo_gif) != ".ico")&&(strtolower($verifica_tipo_gif) != ".svg")&&(str_replace("data:image","",strtolower($ris_attributo_src_content)) == strtolower($ris_attributo_src_content))){
						                
								                $ris_attributo_src_content=str_replace(" ","%20",$ris_attributo_src_content);
								                if(str_replace(array("https:", "http:"),"",strtolower($ris_attributo_src_content)) != strtolower($ris_attributo_src_content)){
                                                    $urlimage=trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content));
								                }else{
                                                    $urlimage=TopperSystemSetFilereceived::perfect_url_ts(trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content)),$url_link_sito); 
                                                    if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
	                                                    $urlimage=str_replace(array("http://", "HTTP://"),"https://",$urlimage);
                                                    }
                                                    if(!TopperSystemSetFilereceived::img_exists($urlimage)){
	                                                    
	                                                    $urlimage=TopperSystemSetFilereceived::perfect_url_ts2(trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content)),$url_link_sito); 
	                                                    if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
		                                                    $urlimage=str_replace(array("http://", "HTTP://"),"https://",$urlimage);
	                                                    }
	                                                    if(!TopperSystemSetFilereceived::img_exists($urlimage)){
		                                                    $urlimage="noexist";
	                                                    }
                                                    }
								                }
								                if(trim($urlimage) != "noexist"){
                                                    $dim=TopperSystemSetFilereceived::getImageWidthHeight($urlimage);
                                                    if($dim != "0-0"){
	                                                    $dim_array=explode("-",$dim);
	                                                    $image_widtn=(int) $dim_array["0"];
                                                        if((isset($dim_array["1"]))&&(trim($dim_array["1"]) != "")){
                                                            $image_height=(int) $dim_array["1"];
                                                        }else{
		                                                    $image_height="";
	                                                    }
	                                                    $dim_array=array();
	                                                    
	                                                    if($level_parsing_img == "2"){
		                                                    $stagewidthmax=100;
	                                                    }else{
		                                                    $stagewidthmax=100;
	                                                    }
	                                                    
	                                                    if($image_widtn <= $stagewidthmax){
                                                            if($level_parsing_img == "2"){
	                                                            $verifica_tipo_virgolette=substr(trim($ris_attributo_src_complete), strlen(trim($ris_attributo_src_complete))-1);	                                            
                                                                $new_blocco=$contenuto_link_sito_analizza[$i];
                                                                
                                                                $ris_attributo_width=TopperSystemSetFilereceived::work_attributo("width",$contenuto_link_sito_analizza[$i]);
						                                        $ris_attributo_width_complete=$ris_attributo_width["0"];
						                                        $ris_attributo_width_content=$ris_attributo_width["1"];	
                                                                if(trim($ris_attributo_width_complete) == ""){
                                                                    if($image_widtn != ""){
	                                                                    if($verifica_tipo_virgolette == "'"){
		                                                                    $new_blocco=$new_blocco." width='".$image_widtn."' data-ts-width='1'";
	                                                                    }else{							
		                                                                    $new_blocco=$new_blocco." width=\"".$image_widtn."\" data-ts-width=\"1\"";
	                                                                    }                                                        
                                                                    }
                                                                    $ris_attributo_width=array();
                                                                }                                            

                                                                $ris_attributo_height=TopperSystemSetFilereceived::work_attributo("height",$contenuto_link_sito_analizza[$i]);
						                                        $ris_attributo_height_complete=$ris_attributo_height["0"];
						                                        $ris_attributo_height_content=$ris_attributo_height["1"];	
                                                                if(trim($ris_attributo_height_complete) == ""){
                                                                    if($image_height != ""){
	                                                                    if($verifica_tipo_virgolette == "'"){
		                                                                    $new_blocco=$new_blocco." height='".$image_height."' data-ts-height='1'";
	                                                                    }else{							
		                                                                    $new_blocco=$new_blocco." height=\"".$image_height."\" data-ts-height=\"1\"";
	                                                                    }
                                                                    }
                                                                    $ris_attributo_height=array();
                                                                }						                    
                                                                if($contenuto_link_sito_analizza[$i] != "$new_blocco"){
	                                                                $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                                }
                                                                $new_blocco="";
                                                            }
		                                                    $urlimage="noexist";
	                                                    }
                                                    }else{
	                                                    $urlimage="noexist";
                                                    }
                                                    $dim="";
								                }
									            if(trim($urlimage) != "noexist"){
                                                    $urlimage_encode=urlencode("$urlimage");
			                                                    
                                                    $srcset="";
                                                    if($level_parsing_img == "0"){
                                                        $srcset="";
                                                    }else{
	                                                    if(($image_widtn > 100)&&($image_widtn <= 320)){
		                                                    $srcset="$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=".$image_widtn."&t=".$resolution_images_toppersystem_send." ".$image_widtn."w";
	                                                    }else if(($image_widtn > 320)&&($image_widtn <= 480)){
		                                                    $srcset="$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=".$image_widtn."&t=".$resolution_images_toppersystem_send." ".$image_widtn."w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=320&t=".$resolution_images_toppersystem_send." 320w";
	                                                    }else if(($image_widtn > 480)&&($image_widtn <= 768)){
		                                                    $srcset="$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=".$image_widtn."&t=".$resolution_images_toppersystem_send." ".$image_widtn."w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=480&t=".$resolution_images_toppersystem_send." 480w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=320&t=".$resolution_images_toppersystem_send." 320w";
	                                                    }else if(($image_widtn > 768)&&($image_widtn <= 1024)){
		                                                    $srcset="$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=".$image_widtn."&t=".$resolution_images_toppersystem_send." ".$image_widtn."w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=768&t=".$resolution_images_toppersystem_send." 768w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=480&t=".$resolution_images_toppersystem_send." 480w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=320&t=".$resolution_images_toppersystem_send." 320w";
	                                                    }else if(($image_widtn > 1024)&&($image_widtn <= 1280)){
		                                                    $srcset="$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=".$image_widtn."&t=".$resolution_images_toppersystem_send." ".$image_widtn."w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=1024&t=".$resolution_images_toppersystem_send." 1024w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=768&t=".$resolution_images_toppersystem_send." 768w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=480&t=".$resolution_images_toppersystem_send." 480w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=320&t=".$resolution_images_toppersystem_send." 320w";
	                                                    }else{	
		                                                    if($image_widtn > 1280){	
			                                                    $srcset="$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=".$image_widtn."&t=".$resolution_images_toppersystem_send." ".$image_widtn."w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=1280&t=".$resolution_images_toppersystem_send." 1280w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=1024&t=".$resolution_images_toppersystem_send." 1024w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=768&t=".$resolution_images_toppersystem_send." 768w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=480&t=".$resolution_images_toppersystem_send." 480w, $resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=320&t=".$resolution_images_toppersystem_send." 320w";
		                                                    }else{
			                                                    $srcset="";
		                                                    }
	                                                    }
                                                    }
                                                    
                                                    if($srcset != ""){
	                                                    $verifica_tipo_virgolette=substr(trim($ris_attributo_src_complete), strlen(trim($ris_attributo_src_complete))-1);
	                                                    if($verifica_tipo_virgolette == "'"){
		                                                    $ris_attributo_src_complete_new="$ris_attributo_src_complete srcset='$srcset' sizes='(max-width: ".$image_widtn."px) 100vw, ".$image_widtn."px'";
	                                                    }else{							
		                                                    $ris_attributo_src_complete_new="$ris_attributo_src_complete srcset=\"$srcset\" sizes=\"(max-width: ".$image_widtn."px) 100vw, ".$image_widtn."px\"";
	                                                    }
	                                                    $srcset="";
	                                                    
	                                                    $new_blocco=str_replace("$ris_attributo_src_complete","$ris_attributo_src_complete_new",$contenuto_link_sito_analizza[$i]);
                                                        if($level_parsing_img == "2"){
                                                            $ris_attributo_width=TopperSystemSetFilereceived::work_attributo("width",$contenuto_link_sito_analizza[$i]);
						                                    $ris_attributo_width_complete=$ris_attributo_width["0"];
						                                    $ris_attributo_width_content=$ris_attributo_width["1"];	
                                                            if(trim($ris_attributo_width_complete) == ""){
                                                                if($image_widtn != ""){
	                                                                if($verifica_tipo_virgolette == "'"){
		                                                                $new_blocco=$new_blocco." width='".$image_widtn."' data-ts-width='1'";
	                                                                }else{							
		                                                                $new_blocco=$new_blocco." width=\"".$image_widtn."\" data-ts-width=\"1\"";
	                                                                }
                                                                    
                                                                }
                                                                $ris_attributo_width=array();
                                                            }                                            

                                                            $ris_attributo_height=TopperSystemSetFilereceived::work_attributo("height",$contenuto_link_sito_analizza[$i]);
						                                    $ris_attributo_height_complete=$ris_attributo_height["0"];
						                                    $ris_attributo_height_content=$ris_attributo_height["1"];	
                                                            if(trim($ris_attributo_height_complete) == ""){
                                                                if($image_height != ""){
	                                                                if($verifica_tipo_virgolette == "'"){
		                                                                $new_blocco=$new_blocco." height='".$image_height."' data-ts-height='1'";
	                                                                }else{							
		                                                                $new_blocco=$new_blocco." height=\"".$image_height."\" data-ts-height=\"1\"";
	                                                                }
                                                                }
                                                                $ris_attributo_height=array();
                                                            }						                    
                                                        }
	                                                    $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                    }
                                                    
                                                    $urlimage_encode="";
                                                    $ris_attributo_src_complete_new="";
                                                    $new_blocco="";
                                                    $verifica_tipo_virgolette="";
								                }				
								                
								                $urlimage="";
								                $image_widtn="";
							                }
							                $verifica_tipo_gif="";
						                }
						                $ris_attributo_src=array();
						                $ris_attributo_src_complete="";
						                $ris_attributo_src_content="";
						                
					                }else{
						                ##inizio
						                $ris_attributo_srcset=TopperSystemSetFilereceived::work_attributo("srcset",$contenuto_link_sito_analizza[$i]);
						                $ris_attributo_srcset_complete=$ris_attributo_srcset["0"];
						                $ris_attributo_srcset_content=$ris_attributo_srcset["1"];
						                
						                $ris_attributo_srcset_complete_new="$ris_attributo_srcset_complete";
						                if(trim($ris_attributo_srcset_content) != ""){
							                $array_image_srcset=explode(",",trim($ris_attributo_srcset_content));
							                for($imn=0;$imn<=count($array_image_srcset);$imn++){
								                if((isset($array_image_srcset[$imn]))&&(trim($array_image_srcset[$imn]) != "")){
                                                    if(str_replace("/?actimgts=render&src=","",$array_image_srcset[$imn]) == $array_image_srcset[$imn]){
	                                                    $array_porzione_image_srcset=explode(" ",trim($array_image_srcset[$imn]));
	                                                    if((isset($array_porzione_image_srcset["1"]))&&(trim($array_porzione_image_srcset["1"]) != "")){
		                                                    if(str_replace("w","",$array_porzione_image_srcset["1"]) != $array_porzione_image_srcset["1"]){
			                                                    $url_image_srcset=trim($array_porzione_image_srcset["0"]);
			                                                    $width_image_srcset=str_replace("w","",trim($array_porzione_image_srcset["1"]));
			                                                    if(($url_image_srcset != "")&&(trim($width_image_srcset) != "")){
				                                                    
				                                                    if((trim($url_image_srcset) != "")&&(strlen(trim($url_image_srcset)) >= 5)){
					                                                    $verifica_tipo_gif=substr(trim($url_image_srcset), strlen(trim($url_image_srcset))-4);
					                                                    if((strtolower($verifica_tipo_gif) != ".gif")&&(strtolower($verifica_tipo_gif) != ".avi")&&(strtolower($verifica_tipo_gif) != ".mp4")&&(strtolower($verifica_tipo_gif) != ".txt")&&(strtolower($verifica_tipo_gif) != ".xml")&&(strtolower($verifica_tipo_gif) != ".ico")&&(strtolower($verifica_tipo_gif) != ".svg")&&(str_replace("data:image","",strtolower($url_image_srcset)) == strtolower($url_image_srcset))){

						                                                    $url_image_srcset=str_replace(" ","%20",$url_image_srcset);
						                                                    if(str_replace(array("https:", "http:"),"",strtolower($url_image_srcset)) != strtolower($url_image_srcset)){
							                                                    $urlimagesrcset_ok=trim(str_replace("[JaccapoespazioB] ","",$url_image_srcset));
						                                                    }else{
							                                                    $urlimagesrcset_ok=TopperSystemSetFilereceived::perfect_url_ts(trim(str_replace("[JaccapoespazioB] ","",$url_image_srcset)),$url_link_sito); 
							                                                    if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
								                                                    $urlimagesrcset_ok=str_replace(array("http://", "HTTP://"),"https://",$urlimagesrcset_ok);
							                                                    }
							                                                    if(!TopperSystemSetFilereceived::img_exists($urlimagesrcset_ok)){
								                                                    
								                                                    $urlimagesrcset_ok=TopperSystemSetFilereceived::perfect_url_ts2(trim(str_replace("[JaccapoespazioB] ","",$url_image_srcset)),$url_link_sito); 
								                                                    if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
                                                                                        $urlimagesrcset_ok=str_replace(array("http://", "HTTP://"),"https://",$urlimagesrcset_ok);
								                                                    }
								                                                    if(!TopperSystemSetFilereceived::img_exists($urlimagesrcset_ok)){			
                                                                                        $urlimagesrcset_ok="noexist";
								                                                    }
							                                                    }
						                                                    }
						                                                    if(trim($urlimagesrcset_ok) != "noexist"){
							                                                    $dim=TopperSystemSetFilereceived::getImageWidthHeight($urlimagesrcset_ok);
							                                                    if($dim != "0-0"){
								                                                    $dim_array=explode("-",$dim);
								                                                    $image_widtn=(int) $dim_array["0"];
								                                                    $dim_array=array();				

								                                                    $stagewidthmax=100;
								                                                    
								                                                    if($image_widtn <= $stagewidthmax){
                                                                                        $urlimagesrcset_ok="noexist";
								                                                    }
								                                                    $stagewidthmax="";
							                                                    }else{
								                                                    $urlimagesrcset_ok="noexist";
							                                                    }
							                                                    $dim="";
						                                                    }
						                                                    if(trim($urlimagesrcset_ok) != "noexist"){
							                                                    $urlimagesrcset_ok_encode=urlencode("$urlimagesrcset_ok");
							                                                    $new_porz_image_srcset="$resend_toppersystem/?actimgts=render&src=$urlimagesrcset_ok_encode&w=".$width_image_srcset."&t=".$resolution_images_toppersystem_send." ".trim($array_porzione_image_srcset["1"]);
							                                                    $ris_attributo_srcset_complete_new=str_replace(trim($array_image_srcset[$imn]),"$new_porz_image_srcset",$ris_attributo_srcset_complete_new);
							                                                    $urlimagesrcset_ok_encode="";
							                                                    $new_porz_image_srcset="";
						                                                    }
						                                                    $urlimagesrcset_ok="";
					                                                    }
					                                                    $verifica_tipo_gif="";
				                                                    }
			                                                    }
			                                                    $url_image_srcset="";
			                                                    $width_image_srcset="";
		                                                    }
	                                                    }
	                                                    $array_porzione_image_srcset=array();
                                                    }
                                                    $array_image_srcset[$imn]="";
								                }
							                }
							                $array_image_srcset=array();	
						                }
						                if(($ris_attributo_srcset_complete != "")&&($ris_attributo_srcset_complete_new != "")){
							                if($ris_attributo_srcset_complete != "$ris_attributo_srcset_complete_new"){		
								                $new_tag_image_complete=str_replace("$ris_attributo_srcset_complete","$ris_attributo_srcset_complete_new",$contenuto_link_sito_analizza[$i]);
								                $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_tag_image_complete",$contenuto_link_sito);
								                $new_tag_image_complete="";	
							                }
						                }
						                $ris_attributo_srcset=array();
						                $ris_attributo_srcset_complete="";						
						                $ris_attributo_srcset_content="";
						                $ris_attributo_srcset_complete_new="";
						                ##fine
					                }

				                }
				                $contenuto_link_sito_analizza[$i]="";
			                }
			                
		                }
		                $contenuto_link_sito_analizza=array();            
	                
		                preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image[^>]*[^/]>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture[^>]*[^/]>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
	                }

	                return $contenuto_link_sito;
                }

                public static function rewrite_img_data_src($contenuto_link_sito,$url_link_sito,$resend_toppersystem,$level_parsing_img=0,$resendCentraltoppersystem,$resolution_images_toppersystem_send){

	                if($level_parsing_img == "2"){
		                preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image[^>]*[^/]>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}	
		                
		                preg_match_all("'<\s*picture[^>]*[^/]>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}		

		                $contenuto_link_sito_analizza="$contenuto_link_sito";
		                $n_indice=0;	
		                preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
		                $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
		                for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
			                if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
				                if((str_replace("img ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("img[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){
					                if(str_replace(array("srcset=", "srcset ="),"",strtolower($contenuto_link_sito_analizza[$i])) == strtolower($contenuto_link_sito_analizza[$i])){
						                
						                $ris_attributo_src=TopperSystemSetFilereceived::work_attributo("data-src",$contenuto_link_sito_analizza[$i]);
						                $ris_attributo_src_complete=$ris_attributo_src["0"];
						                $ris_attributo_src_content=$ris_attributo_src["1"];			
						                
						                if((trim($ris_attributo_src_content) != "")&&(strlen(trim($ris_attributo_src_content)) >= 5)){
							                $verifica_tipo_gif=substr(trim($ris_attributo_src_content), strlen(trim($ris_attributo_src_content))-4);
							                if((strtolower($verifica_tipo_gif) != ".gif")&&(strtolower($verifica_tipo_gif) != ".avi")&&(strtolower($verifica_tipo_gif) != ".mp4")&&(strtolower($verifica_tipo_gif) != ".txt")&&(strtolower($verifica_tipo_gif) != ".xml")&&(strtolower($verifica_tipo_gif) != ".ico")&&(strtolower($verifica_tipo_gif) != ".svg")&&(str_replace("data:image","",strtolower($ris_attributo_src_content)) == strtolower($ris_attributo_src_content))){
						                
								                $ris_attributo_src_content=str_replace(" ","%20",$ris_attributo_src_content);
								                if(str_replace(array("https:", "http:"),"",strtolower($ris_attributo_src_content)) != strtolower($ris_attributo_src_content)){
                                                    $urlimage=trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content));
								                }else{
                                                    $urlimage=TopperSystemSetFilereceived::perfect_url_ts(trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content)),$url_link_sito); 
                                                    if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
	                                                    $urlimage=str_replace(array("http://", "HTTP://"),"https://",$urlimage);
                                                    }
                                                    if(!TopperSystemSetFilereceived::img_exists($urlimage)){
	                                                    
	                                                    $urlimage=TopperSystemSetFilereceived::perfect_url_ts2(trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content)),$url_link_sito); 
	                                                    if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
		                                                    $urlimage=str_replace(array("http://", "HTTP://"),"https://",$urlimage);
	                                                    }
	                                                    if(!TopperSystemSetFilereceived::img_exists($urlimage)){
		                                                    $urlimage="noexist";
	                                                    }
                                                    }
								                }
								                if(trim($urlimage) != "noexist"){
                                                    $dim=TopperSystemSetFilereceived::getImageWidthHeight($urlimage);
                                                    if($dim != "0-0"){
	                                                    $dim_array=explode("-",$dim);
	                                                    $image_widtn=(int) $dim_array["0"];
	                                                    $dim_array=array();
	                                                    
	                                                    if($level_parsing_img == "2"){
		                                                    $stagewidthmax=100;
	                                                    }else{
		                                                    $stagewidthmax=100;
	                                                    }
	                                                    
	                                                    if($image_widtn <= $stagewidthmax){
		                                                    $urlimage="noexist";
	                                                    }
                                                    }else{
	                                                    $urlimage="noexist";
                                                    }
                                                    $dim="";
								                }
								                if(trim($urlimage) != "noexist"){
                                                    $urlimage_encode=urlencode("$urlimage");
                                                    
                                                    $ris_attributo_src_complete_new=str_replace("$ris_attributo_src_content","$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=$image_widtn&t=&t=$resolution_images_toppersystem_send",$ris_attributo_src_complete);								
                                                    $new_blocco=str_replace("$ris_attributo_src_complete","$ris_attributo_src_complete_new",$contenuto_link_sito_analizza[$i]);							
                                                    $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                    
                                                    $urlimage_encode="";
                                                    $ris_attributo_src_complete_new="";
                                                    $new_blocco="";
                                                    $verifica_tipo_virgolette="";
								                }				
								                
								                $urlimage="";
								                $image_widtn="";
							                }
							                $verifica_tipo_gif="";
						                }
						                $ris_attributo_src=array();
						                $ris_attributo_src_complete="";
						                $ris_attributo_src_content="";
						                
					                }
				                }
				                $contenuto_link_sito_analizza[$i]="";
			                }
			                
		                }
		                $contenuto_link_sito_analizza=array();
		                
		                preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image[^>]*[^/]>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture[^>]*[^/]>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
	                }

	                return $contenuto_link_sito;
                }

                public static function rewrite_img_data_lazyload($contenuto_link_sito,$url_link_sito,$resend_toppersystem,$level_parsing_img=0,$resendCentraltoppersystem,$resolution_images_toppersystem_send){

	                if($level_parsing_img == "2"){
		                preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image[^>]*[^/]>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}	
		                
		                preg_match_all("'<\s*picture[^>]*[^/]>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
			                $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
			                $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
			                $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}		

		                $contenuto_link_sito_analizza="$contenuto_link_sito";
		                $n_indice=0;	
		                preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
		                $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
		                for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
			                if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
				                if((str_replace("img ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))||(str_replace("img[jaccapoespaziob] ","",strtolower($contenuto_link_sito_analizza[$i])) != strtolower($contenuto_link_sito_analizza[$i]))){
					                if(str_replace(array("srcset=", "srcset ="),"",strtolower($contenuto_link_sito_analizza[$i])) == strtolower($contenuto_link_sito_analizza[$i])){
						                
						                $ris_attributo_src=TopperSystemSetFilereceived::work_attributo("data-lazyload",$contenuto_link_sito_analizza[$i]);
						                $ris_attributo_src_complete=$ris_attributo_src["0"];
						                $ris_attributo_src_content=$ris_attributo_src["1"];			
						                
						                if((trim($ris_attributo_src_content) != "")&&(strlen(trim($ris_attributo_src_content)) >= 5)){
							                $verifica_tipo_gif=substr(trim($ris_attributo_src_content), strlen(trim($ris_attributo_src_content))-4);
							                if((strtolower($verifica_tipo_gif) != ".gif")&&(strtolower($verifica_tipo_gif) != ".avi")&&(strtolower($verifica_tipo_gif) != ".mp4")&&(strtolower($verifica_tipo_gif) != ".txt")&&(strtolower($verifica_tipo_gif) != ".xml")&&(strtolower($verifica_tipo_gif) != ".ico")&&(strtolower($verifica_tipo_gif) != ".svg")&&(str_replace("data:image","",strtolower($ris_attributo_src_content)) == strtolower($ris_attributo_src_content))){
						                
								                $ris_attributo_src_content=str_replace(" ","%20",$ris_attributo_src_content);
								                if(str_replace(array("https:", "http:"),"",strtolower($ris_attributo_src_content)) != strtolower($ris_attributo_src_content)){
                                                    $urlimage=trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content));
								                }else{
                                                    $urlimage=TopperSystemSetFilereceived::perfect_url_ts(trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content)),$url_link_sito);
                                                    if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
	                                                    $urlimage=str_replace(array("http://", "HTTP://"),"https://",$urlimage);
                                                    }
                                                    if(!TopperSystemSetFilereceived::img_exists($urlimage)){
	                                                    
	                                                    $urlimage=TopperSystemSetFilereceived::perfect_url_ts2(trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content)),$url_link_sito);
	                                                    if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
		                                                    $urlimage=str_replace(array("http://", "HTTP://"),"https://",$urlimage);
	                                                    }
	                                                    if(!TopperSystemSetFilereceived::img_exists($urlimage)){
		                                                    $urlimage="noexist";
	                                                    }
                                                    }
								                }
								                if(trim($urlimage) != "noexist"){
                                                    $dim=TopperSystemSetFilereceived::getImageWidthHeight($urlimage);
                                                    if($dim != "0-0"){
	                                                    $dim_array=explode("-",$dim);
	                                                    $image_widtn=(int) $dim_array["0"];
	                                                    $dim_array=array();
	                                                    
	                                                    if($level_parsing_img == "2"){
		                                                    $stagewidthmax=100;
	                                                    }else{
		                                                    $stagewidthmax=100;
	                                                    }
	                                                    
	                                                    if($image_widtn <= $stagewidthmax){
		                                                    $urlimage="noexist";
	                                                    }
                                                    }else{
	                                                    $urlimage="noexist";
                                                    }
                                                    $dim="";
								                }
								                if(trim($urlimage) != "noexist"){
                                                    $urlimage_encode=urlencode("$urlimage");
                                                    
                                                    $ris_attributo_src_complete_new=str_replace("$ris_attributo_src_content","$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=$image_widtn&t=$resolution_images_toppersystem_send",$ris_attributo_src_complete);								
                                                    $new_blocco=str_replace("$ris_attributo_src_complete","$ris_attributo_src_complete_new",$contenuto_link_sito_analizza[$i]);							
                                                    $contenuto_link_sito=str_replace($contenuto_link_sito_analizza[$i],"$new_blocco",$contenuto_link_sito);
                                                    
                                                    $urlimage_encode="";
                                                    $ris_attributo_src_complete_new="";
                                                    $new_blocco="";
                                                    $verifica_tipo_virgolette="";
								                }				
								                
								                $urlimage="";
								                $image_widtn="";
							                }
							                $verifica_tipo_gif="";
						                }
						                $ris_attributo_src=array();
						                $ris_attributo_src_complete="";
						                $ris_attributo_src_content="";
						                
					                }
				                }
				                $contenuto_link_sito_analizza[$i]="";
			                }
			                
		                }
		                $contenuto_link_sito_analizza=array();
		                
		                preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image[^>]*[^/]>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*image>(.*?)<\s*/\s*image\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture[^>]*[^/]>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }	
		                if(is_array($risultato)){$risultato=array();}
		                
		                preg_match_all("'<\s*picture>(.*?)<\s*/\s*picture\s*>'is", $contenuto_link_sito , $risultato);
		                foreach ($risultato[1] as $stringa_sito) {		
			                $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
			                $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
			                $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);		
			                $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);			
		                }
		                if(is_array($risultato)){$risultato=array();}
	                }

	                return $contenuto_link_sito;
                }

                public static function rewrite_img_css($contenuto_link_sito,$url_link_sito,$resend_toppersystem,$level_parsing_img=0,$resendCentraltoppersystem,$resolution_images_toppersystem_send){
	                if($level_parsing_img != "0"){
		                if(($contenuto_link_sito != "")&&($resend_toppersystem != "")){
			                preg_match_all("'url\((.*?)\)'is", $contenuto_link_sito , $risultato);
			                foreach ($risultato[0] as $stringa_sito) {
				                if($stringa_sito != ""){
					                if((str_replace(strtolower($resend_toppersystem),"",strtolower($stringa_sito)) != strtolower($stringa_sito))&&(str_replace(array(".png",".jpg",".jpeg"),"",strtolower($stringa_sito)) != strtolower($stringa_sito))){
						                $contento=trim(TopperSystemSetFilereceived::extractstringa($stringa_sito, "(", ")"));
						                if($contento != ""){
							                $verifica_tipo_virgolette=substr(trim($contento), strlen(trim($contento))-1);
							                if($verifica_tipo_virgolette == "'"){								
								                $contento_ok=trim(TopperSystemSetFilereceived::extractstringa($contento, "'", "'"));
							                }else if($verifica_tipo_virgolette == "\""){
								                $contento_ok=trim(TopperSystemSetFilereceived::extractstringa($contento, "\"", "\""));
							                }else{
								                $contento_ok="$contento";
							                }
							                $verifica_tipo_virgolette="";
							                
							                if(($contento_ok != "")&&(strlen(trim($contento_ok)) >= 5)){
                                                $verifica_tipo_gif=substr(trim($contento_ok), strlen(trim($contento_ok))-4);
							                    if((strtolower($verifica_tipo_gif) != ".gif")&&(strtolower($verifica_tipo_gif) != ".avi")&&(strtolower($verifica_tipo_gif) != ".mp4")&&(strtolower($verifica_tipo_gif) != ".txt")&&(strtolower($verifica_tipo_gif) != ".xml")&&(strtolower($verifica_tipo_gif) != ".ico")&&(strtolower($verifica_tipo_gif) != ".svg")&&(str_replace("data:image","",strtolower($contento_ok)) == strtolower($contento_ok))){
								                    $ris_attributo_src_content=str_replace(" ","%20",$contento_ok);
								                    if(str_replace(array("https:", "http:"),"",strtolower($ris_attributo_src_content)) != strtolower($ris_attributo_src_content)){
                                                        $urlimage=trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content));
								                                                        }else{
                                                        $urlimage=TopperSystemSetFilereceived::perfect_url_ts(trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content)),$url_link_sito); 
                                                        if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
	                                                        $urlimage=str_replace(array("http://", "HTTP://"),"https://",$urlimage);
                                                        }
                                                        if(!TopperSystemSetFilereceived::img_exists($urlimage)){
	                                                        
	                                                        $urlimage=TopperSystemSetFilereceived::perfect_url_ts2(trim(str_replace("[JaccapoespazioB] ","",$ris_attributo_src_content)),$url_link_sito); 
	                                                        if(str_replace("https://","",strtolower($url_link_sito)) != strtolower($url_link_sito)){
		                                                        $urlimage=str_replace(array("http://", "HTTP://"),"https://",$urlimage);
	                                                        }
	                                                        if(!TopperSystemSetFilereceived::img_exists($urlimage)){	
		                                                        $urlimage="noexist";
	                                                        }
                                                        }
								                    }
								                    if(trim($urlimage) != "noexist"){
                                                        $dim=TopperSystemSetFilereceived::getImageWidthHeight($urlimage);
                                                        if($dim != "0-0"){
	                                                        $dim_array=explode("-",$dim);
	                                                        $image_widtn=(int) $dim_array["0"];
	                                                        $dim_array=array();
	                                                        
	                                                        if($level_parsing_img == "2"){
		                                                        $stagewidthmax=100;
	                                                        }else{
		                                                        $stagewidthmax=100;
	                                                        }
	                                                        
	                                                        if($image_widtn <= $stagewidthmax){
		                                                        $urlimage="noexist";
	                                                        }
                                                        }else{
	                                                        $urlimage="noexist";
                                                        }
                                                        $dim="";
								                    }
								                    if(trim($urlimage) != "noexist"){
                                                        $urlimage_encode=urlencode("$urlimage");

                                                        $ris_attributo_src_complete_new=str_replace("$ris_attributo_src_content","$resend_toppersystem/?actimgts=render&src=$urlimage_encode&w=$image_widtn&t=$resolution_images_toppersystem_send",$stringa_sito);
                                                        $contenuto_link_sito=str_replace("$stringa_sito","$ris_attributo_src_complete_new",$contenuto_link_sito);	

                                                        $urlimage_encode="";
                                                        $ris_attributo_src_complete_new="";
								                    }				

								                    $urlimage="";
								                    $image_widtn="";								
								                    $contento_ok="";								
							                    }
                                                $verifica_tipo_gif="";
                                            }
						                }
						                $contento="";
					                }
				                }
				                $stringa_sito="";
			                }
		                }else{
			                $contenuto_link_sito="";
		                }
	                }
	                return "$contenuto_link_sito";
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

                public static function chek_memory_toppersystem(){
                    $memory_limit="";
                    $memory_usage="";
                    $memorypeak_usage="";
                    $memory_free_perc="";

                    if ( ! defined( 'WP_MEMORY_LIMIT' ) ) {
                        $wp_memory_limit_ts="0";
                    }else{
                        $wp_memory_limit_ts=(int) WP_MEMORY_LIMIT;
                    }

                    if ( ! defined( 'WP_MAX_MEMORY_LIMIT' ) ) {
                        $wp_max_memory_limit_ts="0";
                    }else{
                        $wp_max_memory_limit_ts=(int) WP_MAX_MEMORY_LIMIT;
                    }

                    $return=1;
                    if(null !== ini_get('memory_limit')){
                        $memory_limit = ini_get('memory_limit');
                        if (preg_match('/^(\d+)(.)$/', $memory_limit, $matches)) {
                            if (($matches[2] == 'M')||($matches[2] == 'm')) {
                                $memory_limit = $matches[1] * 1024 * 1024;
                            } else if (($matches[2] == 'K')||($matches[2] == 'k')) {
                                $memory_limit = $matches[1] * 1024;
                            } else if (($matches[2] == 'G')||($matches[2] == 'g')) {
                                $memory_limit = $matches[1] * 1024 * 1024 * 1024;
                            }else{
                                $memory_limit="";
                            }
                        }else{
                            $memory_limit="";
                        }
                    }else{
                        $memory_limit="";
                    }
                    if($memory_limit != ""){
                        if(null !== memory_get_usage(1)){
                            $memory_usage=memory_get_usage(1);
                            if($memory_usage != ""){
                                if($memory_usage <= $memory_limit){
                                    $memory_free_perc=round(((($memory_limit - $memory_usage) / $memory_limit) * 100 ), 0);
                                    if($memory_free_perc <= 40){
                                        $return=0;
                                    }else{
                                        if(null !== memory_get_peak_usage(1)){
                                            $memorypeak_usage=memory_get_peak_usage(1);
                                            if($memorypeak_usage != ""){
                                                if($memorypeak_usage <= $memory_limit){
                                                    $memory_free_perc=round(((($memory_limit - $memorypeak_usage) / $memory_limit) * 100 ), 0);
                                                    if($memory_free_perc <= 40){
                                                        $return=0;
                                                    }           
                                                }else{
                                                    $return=0;
                                                }
                                            }
                                        }
                                    }            
                                }else{
                                    $return=0;
                                }
                            }
                        }
                    }  
                    return array("$return","$memory_limit","$memory_usage","$memorypeak_usage","$memory_free_perc","$wp_memory_limit_ts","$wp_max_memory_limit_ts");
                }

                public static function message_limit_memory_display_toppersystem($n,$hreflang_toppersystem,$memory_limit_check_memory_disponible,$memory_usage_check_memory_disponible,$memorypeak_usage_check_memory_disponible,$memory_free_perc_check_memory_disponible,$wp_memory_limit_ts_check_memory_disponible,$wp_max_memory_limit_ts_check_memory_disponible){
                    if($hreflang_toppersystem == "it"){    
	                    $txtts4="Servizio temporaneamente non disponibile. Riprova più tardi.";
                    }else if($hreflang_toppersystem == "ar"){ 
	                    $txtts4="الخدمة غير متاحة مؤقتا. حاول لاحقا.";
                    }else if($hreflang_toppersystem == "de"){ 
	                    $txtts4="Dienst vorübergehend nicht verfügbar. Versuche es später.";
                    }else if($hreflang_toppersystem == "es"){ 
	                    $txtts4="Servicio temporalmente no disponible. Intenta más tarde.";
                    }else if($hreflang_toppersystem == "fr"){ 
	                    $txtts4="Service temporairement indisponible. Essayer plus tard.";
                    }else if($hreflang_toppersystem == "hi"){ 
	                    $txtts4="सेवा अस्थाई रूप से अनुपलब्ध। बाद में कोशिश करें।";
                    }else if($hreflang_toppersystem == "ja"){ 
	                    $txtts4="サービスは一時的に利用できません。 後で試してください。";
                    }else if($hreflang_toppersystem == "pl"){ 
	                    $txtts4="Usługa chwilowo niedostępna. Spróbuj później.";
                    }else if($hreflang_toppersystem == "pt"){ 
	                    $txtts4="Usługa chwilowo niedostępna. Riprova più tardi.";
                    }else if($hreflang_toppersystem == "ru"){ 
	                    $txtts4="Временно недоступный сервис. Рипрова più tardi.";
                    }else if($hreflang_toppersystem == "zh"){ 
	                    $txtts4="服务暂时不可用。 等会再试。";
                    }else if($hreflang_toppersystem == "he"){ 
	                    $txtts4="זמנית, השירות אינו זמין. נסה מאוחר יותר.";
                    }else if($hreflang_toppersystem == "la"){ 
	                    $txtts4="Temporaliter Unavailable Service. Conare postea.";
                    }else{   
                        $txtts4="Service temporarily unavailable. Try later.";
                    }

                    if(($memory_limit_check_memory_disponible != "")&&(($memory_usage_check_memory_disponible != "")||($memorypeak_usage_check_memory_disponible != ""))){
                        if($memory_usage_check_memory_disponible == ""){
                            $memory_usage_check_memory_disponible="$memorypeak_usage_check_memory_disponible";
	                    }
                        $memory_limit_check_memory_disponible=round(($memory_limit_check_memory_disponible/1000000)*8, 4); 
                        $memory_usage_check_memory_disponible=round(($memory_usage_check_memory_disponible/1000000)*8, 4);

                        if($hreflang_toppersystem == "it"){    
                            $txtts0="E' disponibile solo il $memory_free_perc_check_memory_disponible% della memoria del tuo webserver"; 
                            $txtts1="Totale memoria:";
                            $txtts2="Memoria occupata:";
                            $txtts3="Riprova più tardi oppure aumenta il limite massimo di memoria.";
                        }else if($hreflang_toppersystem == "ar"){ 
                            $txtts0="يتوفر فقط $memory_free_perc_check_memory_disponible% من ذاكرة خادم الويب الخاص بك"; 
                            $txtts1="الذاكرة الاجمالية:";
                            $txtts2="الذاكرة المحتلة:";
                            $txtts3="يرجى المحاولة مرة أخرى لاحقًا أو زيادة الحد الأقصى للذاكرة.";
                        }else if($hreflang_toppersystem == "de"){ 
                            $txtts0="Es sind nur $memory_free_perc_check_memory_disponible% des Speichers Ihres Webservers verfügbar"; 
                            $txtts1="Gesamtspeicher:";
                            $txtts2="Speicher belegt:";
                            $txtts3="Bitte versuchen Sie es später noch einmal oder erhöhen Sie das maximale Speicherlimit.";
                        }else if($hreflang_toppersystem == "es"){ 
                            $txtts0="Sólo $memory_free_perc_check_memory_disponible% de la memoria de su servidor web está disponible"; 
                            $txtts1="Memoria total:";
                            $txtts2="Memoria ocupada:";
                            $txtts3="Inténtelo de nuevo más tarde o aumente el límite máximo de memoria.";
                        }else if($hreflang_toppersystem == "fr"){ 
                            $txtts0="Seul $memory_free_perc_check_memory_disponible% de la mémoire de votre serveur web est disponible"; 
                            $txtts1="Mémoire totale:";
                            $txtts2="Mémoire occupée:";
                            $txtts3="Veuillez réessayer plus tard ou augmenter la limite maximale de mémoire.";
                        }else if($hreflang_toppersystem == "hi"){ 
                            $txtts0="आपके वेबसर्वर की केवल $memory_free_perc_check_memory_disponible% मेमोरी उपलब्ध है"; 
                            $txtts1="कुल स्मृति:";
                            $txtts2="मेमोरी पर कब्ज़ा:";
                            $txtts3="कृपया बाद में पुनः प्रयास करें या अधिकतम मेमोरी सीमा बढ़ाएँ।";
                        }else if($hreflang_toppersystem == "ja"){ 
                            $txtts0="ウェブサーバーのメモリの $memory_free_perc_check_memory_disponible% のみが使用可能です"; 
                            $txtts1="総メモリ:";
                            $txtts2="占有メモリ:";
                            $txtts3="後で再試行するか、最大メモリ制限を増やしてください。";
                        }else if($hreflang_toppersystem == "pl"){ 
                            $txtts0="Dostępna jest tylko $memory_free_perc_check_memory_disponible% pamięci Twojego serwera"; 
                            $txtts1="Całkowita pamięć:";
                            $txtts2="Zajęta pamięć:";
                            $txtts3="Spróbuj ponownie później lub zwiększ maksymalny limit pamięci.";
                        }else if($hreflang_toppersystem == "pt"){ 
                            $txtts0="Apenas $memory_free_perc_check_memory_disponible% da memória do seu servidor web está disponível"; 
                            $txtts1="Memória total:";
                            $txtts2="Memória ocupada:";
                            $txtts3="Tente novamente mais tarde ou aumente o limite máximo de memória.";
                        }else if($hreflang_toppersystem == "ru"){ 
                            $txtts0="Доступно только $memory_free_perc_check_memory_disponible% памяти вашего веб-сервера."; 
                            $txtts1="Общая память:";
                            $txtts2="Память занята:";
                            $txtts3="Пожалуйста, повторите попытку позже или увеличьте максимальный лимит памяти.";
                        }else if($hreflang_toppersystem == "zh"){ 
                            $txtts0="您的网络服务器内存中只有 $memory_free_perc_check_memory_disponible% 可用"; 
                            $txtts1="总内存：";
                            $txtts2="占用内存：";
                            $txtts3="请稍后重试或增加最大内存限制。";
                        }else if($hreflang_toppersystem == "he"){ 
                            $txtts0="רק $memory_free_perc_check_memory_disponible% מזיכרון שרת האינטרנט שלך זמין"; 
                            $txtts1="סך הזיכרון:";
                            $txtts2="זיכרון תפוס:";
                            $txtts3="אנא נסה שוב מאוחר יותר או הגדל את מגבלת הזיכרון המקסימלית.";
                        }else if($hreflang_toppersystem == "la"){ 
                            $txtts0="Tantum $memory_free_perc_check_memory_disponible% tui webserver memoria praesto est"; 
                            $txtts1="Summa memoria:";
                            $txtts2="Memoria occupata est:";
                            $txtts3="Mox iterum conare vel maximam memoriam augere terminum.";
                        }else{   
                            $txtts0="Only $memory_free_perc_check_memory_disponible% of your webserver's memory is available"; 
                            $txtts1="Total memory:";
                            $txtts2="Memory occupied:";
                            $txtts3="Please try again later or increase the maximum memory limit.";
                        }
                      
                        $msgmemory="$txtts0 ($txtts1 ".$memory_limit_check_memory_disponible."M | $txtts2 ".$memory_usage_check_memory_disponible."M). $txtts3";
	                    $contenuto_link_sito_send="Err-Code M$n limit memory. $msgmemory";
                    }else{
                        $contenuto_link_sito_send="Err-Code M$n limit memory. $txtts4";
                    }

                    return "ErrorServerTS ServiceNotAvailable $contenuto_link_sito_send";
                }
	            
	            public static function verify_state_connection_toppersystem($url){	
		            $return=0;
		            if($url != ""){
                        $pathfileprocessing=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/processing.txt";

			            if(file_exists("$pathfileprocessing")){
				            $return=1;
			            }else{
				            $return=0;
			            }
		            }else{
			            $return=0;
		            }
		            return $return;
	            }

                public static function save_log_limit_memory_display_toppersystem($n,$canonical_toppersystem_send,$saveMemTopperSystemSEO){
                    if(($n != "")&&($canonical_toppersystem_send != "")&&($saveMemTopperSystemSEO != "")){
                        $ncca="\n";
                        $pathfilesavememtoppersystemseo=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveLogMemoryOptimization.txt";
                        $filesaveMemTopperSystemSEO_ts="$pathfilesavememtoppersystemseo";
                        if(file_exists($filesaveMemTopperSystemSEO_ts)){
                            if(filesize($filesaveMemTopperSystemSEO_ts) >= "500000"){
                                if(file_exists($filesaveMemTopperSystemSEO_ts)){
                                    chmod("$filesaveMemTopperSystemSEO_ts",0644);
                                }
                                $textfilemts=fopen($filesaveMemTopperSystemSEO_ts, "w");
                                $scrivimts=date("Y-m-d H:i:s")." | $canonical_toppersystem_send | $saveMemTopperSystemSEO $ncca";
                                fwrite($textfilemts,$scrivimts);
                                fclose($textfilemts);

                                chmod("$filesaveMemTopperSystemSEO_ts",0444);
                                $textfilemts="";
                                $scrivimts="";
                            }else{
                                if(file_exists($filesaveMemTopperSystemSEO_ts)){
                                    chmod("$filesaveMemTopperSystemSEO_ts",0644);
                                }
                                $textfilemts=fopen($filesaveMemTopperSystemSEO_ts, "a");
                                $scrivimts=date("Y-m-d H:i:s")." | $canonical_toppersystem_send | $saveMemTopperSystemSEO $ncca";
                                fwrite($textfilemts,$scrivimts);
                                fclose($textfilemts);

                                chmod("$filesaveMemTopperSystemSEO_ts",0444);
                                $textfilemts="";
                                $scrivimts="";                
                            }
                        }else{
                            if(file_exists($filesaveMemTopperSystemSEO_ts)){
                                chmod("$filesaveMemTopperSystemSEO_ts",0644);
                            }
                            $textfilemts=fopen($filesaveMemTopperSystemSEO_ts, "w");
                            $scrivimts=date("Y-m-d H:i:s")." | $canonical_toppersystem_send | $saveMemTopperSystemSEO $ncca";
                            fwrite($textfilemts,$scrivimts);
                            fclose($textfilemts);

                            chmod("$filesaveMemTopperSystemSEO_ts",0444);
                            $textfilemts="";
                            $scrivimts="";
                        }
                    }
                    $n="";
                    $canonical_toppersystem_send="";
                    $saveMemTopperSystemSEO="";
                    $ncca="";

                    return true;
                }

                public static function chatgpt_toppersystem($code_ia,$language_toppersystem,$max_tokens,$text_original,$keyword_toppersystem){
                    if(($code_ia != "")&&($language_toppersystem != "")&&($max_tokens != "")&&($text_original != "")&&($keyword_toppersystem != "")){
			            $ch = curl_init();

			            $url = "https://api.openai.com/v1/chat/completions";
			            $api_key = "$code_ia";
			            $query = "Source:\"$text_original\"\nrewrite in $language_toppersystem language Source\"\" and return max $max_tokens characters. Include the word: $keyword_toppersystem";

			            $post_fields = array(
				            "model" => "gpt-3.5-turbo",
				            "messages" => array(
					            array(
						            "role" => "user",
						            "content" => $query
					            )
				            ),				
				            "temperature" => 0
			            );
			            #"max_tokens" => 1024,
			            $header  = [
				            'Content-Type: application/json',
				            'Authorization: Bearer ' . $api_key
			            ];

			            curl_setopt($ch, CURLOPT_URL, $url);
			            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			            curl_setopt($ch, CURLOPT_POST, 1);
			            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_fields));
			            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

			            $result = curl_exec($ch);
			            if (curl_errno($ch)) {
				            #echo 'Error: ' . curl_error($ch);
                            $contenuto="";
			            }else{		
				            $response = json_decode($result);
				            $contenuto=$response->choices[0]->message->content;				
				            $contenuto=str_replace(array("\n", "\r", "\a", "\b", "\t", "\v")," ",$contenuto);		
				            $contenuto=trim(str_replace(array("  ","   ")," ",$contenuto));
                            $contenuto=trim(str_replace(array("\"","<",">","(","[","{",")","]","}"),"",$contenuto));
                            $contenuto=trim(str_replace(array("Fonte:","fonte:","Source:","source:","מָקוֹר: ","来源：","Источник:","источник:","Źródło:","zródło:","ソース：","स्रोत:","Fuente:","fuente:","Quelle:","quelle:","مصدر:"),"",$contenuto));
                            $contenuto=trim(str_replace("'","&#39;",$contenuto));				
			            }
			            curl_close($ch);
                    }else{
                        $contenuto="";
                    }
                    return "$contenuto";
                }

                public static function get_tag_and_description_toppersystem($contenuto_link_sito){
                    $tag_complete="";
                    $text_tag="";
                    if($contenuto_link_sito != ""){
                        $contenuto_link_sito_analizza=explode("</head>",$contenuto_link_sito)["0"];
	                    preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
	                    $contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
	                    for($i=0;$i<=count($contenuto_link_sito_analizza);$i++){
		                    if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
                                if($tag_complete == ""){
			                        if((explode(" ",strtolower($contenuto_link_sito_analizza[$i]))["0"] == "meta")||(explode(" ",strtolower($contenuto_link_sito_analizza[$i]))["0"] == "meta[jaccapoespaziob]")){
				                        $taglink=$contenuto_link_sito_analizza[$i];
                                        if($taglink != ""){
                                            $ris_attributo_analisy_rel=TopperSystemSetFilereceived::work_attributo("name","$taglink");
                                            $ris_attributo_analisy_rel_complete=$ris_attributo_analisy_rel["0"];
                                            $ris_attributo_analisy_rel_content=$ris_attributo_analisy_rel["1"];
                                            if(trim($ris_attributo_analisy_rel_complete) != ""){
	                                            if(trim(strtolower($ris_attributo_analisy_rel_content)) == "description"){

                                                    $ris_attributo_analisy_as=TopperSystemSetFilereceived::work_attributo("content","$taglink");
                                                    $ris_attributo_analisy_as_complete=$ris_attributo_analisy_as["0"];
                                                    $ris_attributo_analisy_as_content=$ris_attributo_analisy_as["1"];
                                                    if(trim($ris_attributo_analisy_as_complete) != ""){
	                                                    if(trim(strtolower($ris_attributo_analisy_as_content)) != ""){
                                                            $go="ok";
                                                            $ris='<'.$taglink.' />';
                                                            if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
	                                                            $ris='<'.$taglink.'/>';
	                                                            if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
		                                                            $ris='<'.$taglink.'>';
		                                                            if(str_replace("$ris","",$contenuto_link_sito) == "$contenuto_link_sito"){
			                                                            $go="no";
		                                                            }
	                                                            }
                                                            }
                                                            if($go == "ok"){
                                                                $tag_complete="$ris";
                                                                $text_tag="$ris_attributo_analisy_as_content";
                                                            }
                                                            $ris="";

                                                        }
                                                    }
                                                    $ris_attributo_analisy_as=array();
                                                    $ris_attributo_analisy_as_complete="";
                                                    $ris_attributo_analisy_as_content="";
                                                }
                                            }
                                            $ris_attributo_analisy_rel=array();
                                            $ris_attributo_analisy_rel_complete="";
                                            $ris_attributo_analisy_rel_content="";
                                        }                                
                                        $taglink="";
			                        }
                                }
                                $contenuto_link_sito_analizza[$i]="";
		                    }
	                    }
                    }

                    return array("$tag_complete","$text_tag");
                }

                public static function apikey_openai(){
                    if(file_exists(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/openai.php")){
                        include(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/openai.php");
                        if(isset($par_apikeyopenai_toppersystem)){
                            if(empty($par_apikeyopenai_toppersystem)){
                                $par_apikeyopenai_toppersystem="";
                            }
                        }else{
                            $par_apikeyopenai_toppersystem="";
                        }
                    }else{
	                    $par_apikeyopenai_toppersystem="";
                    }

                    return "$par_apikeyopenai_toppersystem";
                }

                public static function add_title_description_ia($contenuto_link_sito,$keyword_toppersystem,$language_toppersystem){

                    if((function_exists('curl_init'))&&($language_toppersystem != "")&&($keyword_toppersystem != "")){
                        $code_ia=TopperSystemSetFilereceived::apikey_openai();
                        if($code_ia != ""){
                            preg_match_all("'<\s*noscript[^>]*[^/]>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {	
	                            $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
	                            $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	

	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

                            preg_match_all("'<\s*noscript>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {	
	                            $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
	                            $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
	                            $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	

	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

                            $noscript=TopperSystemSetFilereceived::extractstringa($contenuto_link_sito, '<noscript>', '</noscript>');
                            $contenuto_link_sito=str_replace("<noscript>$noscript</noscript>","-N00SCRIPT-",$contenuto_link_sito);

                            preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {	
	                            #echo $stringa_sito."<br><br>";
	                            $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
	                            $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
	                            $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);

	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

                            preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {	
	                            #echo $stringa_sito."<br><br>";
	                            $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
	                            $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
	                            $stringa_sito_new=str_replace(":","[JduepuntiB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("/","[JslashB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(".","[JpuntoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace(";","[JpuntoevirgolaB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("€","[JeuroB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("#","[JcancellettoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("!","[JpuntoesclamativoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("?","[JpuntointerrogativoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("'","[JapostrofoB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("\"","[JdoppievirgoletteB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("style","[JstxleB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("Style","[JStxleB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("STYLE","[JSTXLEB]",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("script","[JscrxptB]",$stringa_sito_new);
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);

	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

                            preg_match_all("'<\s*style[^>]*[^/]>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {	
	                            $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
	                            $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	
	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

                            preg_match_all("'<\s*style>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {
	                            $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
	                            $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);	
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	
	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

	                        preg_match_all("'<\s*iframe[^>]*[^/]>(.*?)<\s*/\s*iframe\s*>'is", $contenuto_link_sito , $risultato);
	                        foreach ($risultato[1] as $stringa_sito) {
		                        $stringa_sito_new=str_replace("<","[JminoreB]",$stringa_sito);
		                        $stringa_sito_new=str_replace(">","[JmaggioreB]",$stringa_sito_new);			
		                        $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	
		                        
		                        $stringa_sito="";
		                        $stringa_sito_new="";
	                        }
	                        if(is_array($risultato)){$risultato=array();}

                            #TITLE
                            $text_title="";
                            $tag_title="";
                            $get_text_title=TopperSystemSetFilereceived::extractstringa_toppersystem($contenuto_link_sito, '<title>', '</title>');
                            if($get_text_title != ""){
                                $get_tag_title="<title>$get_text_title</title>";
                                if(str_replace("$get_tag_title","",$contenuto_link_sito) != "$contenuto_link_sito"){
                                    $text_title="$get_text_title";
                                    $tag_title="$get_tag_title";
                                }                        
                            }else{
                                $get_text_title=TopperSystemSetFilereceived::extractstringa_toppersystem($contenuto_link_sito, '<TITLE>', '</TITLE>');
                                if($get_text_title != ""){
                                    $get_tag_title="<title>$get_text_title</title>";
                                    if(str_replace("$get_tag_title","",$contenuto_link_sito) != "$contenuto_link_sito"){
                                        $text_title="$get_text_title";
                                        $tag_title="$get_tag_title";
                                    }                        
                                }                            
                            }
                            $new_text_title="";
                            if(($tag_title != "")&&($text_title != "")){
                                $new_text_title=TopperSystemSetFilereceived::chatgpt_toppersystem("$code_ia","$language_toppersystem","90","$text_title","$keyword_toppersystem");
                                if($new_text_title != ""){
                                    $new_tag_title=str_replace("$text_title","$new_text_title",$tag_title);
                                    if($new_tag_title != "$tag_title"){
                                        $contenuto_link_sito=str_replace("$tag_title","$new_tag_title",$contenuto_link_sito);
                                    }
                                }
                            }

                            #DESCRIPTION
                            $array_get_tag_and_description_toppersystem=TopperSystemSetFilereceived::get_tag_and_description_toppersystem($contenuto_link_sito);
                            $tag_description=$array_get_tag_and_description_toppersystem["0"];
                            $text_description=$array_get_tag_and_description_toppersystem["1"];
                            $new_text_description="";
                            if(($tag_description != "")&&($text_description != "")){
                                $new_text_description=TopperSystemSetFilereceived::chatgpt_toppersystem("$code_ia","$language_toppersystem","120","$text_description","$keyword_toppersystem");
                                if($new_text_description != ""){
                                    $new_tag_description=str_replace("$text_description","$new_text_description",$tag_description);
                                    if($new_tag_description != "$tag_description"){
                                        $contenuto_link_sito=str_replace("$tag_description","$new_tag_description",$contenuto_link_sito);
                                    }
                                }
                            }

                            $contenuto_link_sito=str_replace("-N00SCRIPT-","<noscript>$noscript</noscript>",$contenuto_link_sito);
                            preg_match_all("'<\s*noscript[^>]*[^/]>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {
	                            $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
	                            $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
	                            $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);	
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	
	                            
	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

                            preg_match_all("'<\s*noscript>(.*?)<\s*/\s*noscript\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {
	                            $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
	                            $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
	                            $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);
	                            
	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}


                            preg_match_all("'<\s*style[^>]*[^/]>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {
	                            $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
	                            $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	
	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

                            preg_match_all("'<\s*style>(.*?)<\s*/\s*style\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {
	                            $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
	                            $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);	
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	
	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}

                            preg_match_all("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {	
	                            #echo $stringa_sito."\n\n";
	                            $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
	                            $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);	
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	
	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}	

                            preg_match_all("'<\s*script>(.*?)<\s*/\s*script\s*>'is", $contenuto_link_sito , $risultato);
                            foreach ($risultato[1] as $stringa_sito) {	
	                            #echo $stringa_sito."\n\n";
	                            $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
	                            $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JduepuntiB]",":",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JslashB]","/",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoB]",".",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoevirgolaB]",";",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JeuroB]","€",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JcancellettoB]","#",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntoesclamativoB]","!",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JpuntointerrogativoB]","?",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JapostrofoB]","'",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JdoppievirgoletteB]","\"",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JstxleB]","style",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JStxleB]","Style",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JSTXLEB]","STYLE",$stringa_sito_new);
	                            $stringa_sito_new=str_replace("[JscrxptB]","script",$stringa_sito_new);	
	                            $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);	
	                            $stringa_sito="";
	                            $stringa_sito_new="";
                            }
                            if(is_array($risultato)){$risultato=array();}
	                        
	                        preg_match_all("'<\s*iframe[^>]*[^/]>(.*?)<\s*/\s*iframe\s*>'is", $contenuto_link_sito , $risultato);
	                        foreach ($risultato[1] as $stringa_sito) {
		                        $stringa_sito_new=str_replace("[JminoreB]","<",$stringa_sito);
		                        $stringa_sito_new=str_replace("[JmaggioreB]",">",$stringa_sito_new);			
		                        $contenuto_link_sito=str_replace("$stringa_sito","$stringa_sito_new",$contenuto_link_sito);

		                        $stringa_sito="";
		                        $stringa_sito_new="";		
	                        }
	                        if(is_array($risultato)){$risultato=array();}
                        }
                    }

                    return "$contenuto_link_sito";
                }

            }
            class TopperSystemExecuteFilereceived {

            public static function runts($action,$canonical_toppersystem_send,$level_parsing_img,$resend_toppersystem,$css_toppersystem_send,$js_toppersystem_send,$credits_toppersystem_send,$sb_toppersystem_send,$authcode_toppersystem,$hreflang_toppersystem,$check_privacy_toppersystem_send,$vp_toppersystem,$nco_toppersystem,$resendCentral_toppersystem_send,$toppersystem_update,$page_toppersystem_send,$resolution_images_toppersystem_send,$stronglazyload_images_toppersystem_send,$text_ia_toppersystem_send,$language_toppersystem_send,$keyword_toppersystem_send){							

            if(isset($_SERVER["HTTP_REFERER"])){
            $paginaprovenienzats=$_SERVER["HTTP_REFERER"];
            }else{
            $paginaprovenienzats="";
            }

            if(isset($_SERVER["SERVER_NAME"])){
                $paginaprovenienzats_controllo=str_replace($_SERVER['SERVER_NAME'],"",$paginaprovenienzats);
                if(($paginaprovenienzats == "$paginaprovenienzats_controllo")||($paginaprovenienzats != "$paginaprovenienzats_controllo")){
                    if((isset($_SERVER["REMOTE_ADDR"]))&&(trim($_SERVER["REMOTE_ADDR"]) != "")){

		                if((isset($_SERVER["HTTP_USER_AGENT"]))&&(trim($_SERVER["HTTP_USER_AGENT"]) != "")){ 
 
                            if((isset($authcode_toppersystem) && trim($authcode_toppersystem) != "")) {

                                if((isset($canonical_toppersystem_send) && trim($canonical_toppersystem_send) != "")) {                        
                                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();

                                    if(($auth_memory != "")){
                                        $i_rec=date("i");
                                        if(($i_rec == "0")||($i_rec == "00")){
                                           $i_rec_sec=59; 
                                        }else{
                                            $length = 2;
                                            $string = $i_rec-1;
                                            $i_rec_sec=str_pad($string,$length,"0", STR_PAD_LEFT);
                                        }
                                        if(($auth_memory.trim(md5(trim($canonical_toppersystem_send))).md5(date("Y-m-d")."-$i_rec") == "$authcode_toppersystem")||($auth_memory.trim(md5(trim($canonical_toppersystem_send))).md5(date("Y-m-d")."-$i_rec_sec") == "$authcode_toppersystem")) {


	                                        if((isset($canonical_toppersystem_send) && trim($canonical_toppersystem_send) != "")) {
		                                        $canonical_toppersystem_send=trim(TopperSystemSafeNOSQL::sanitizeNosql($canonical_toppersystem_send));
                                                $canonical_toppersystem_send=TopperSystemSetMainFunction::toppersystem_cleanup_min_and_encode_url($canonical_toppersystem_send);
	                                        }else{
		                                        $canonical_toppersystem_send="";
	                                        }

	                                        if((isset($level_parsing_img) && trim($level_parsing_img) != "")) {
		                                        $level_parsing_img=(int) $level_parsing_img;	
	                                        }else{
		                                        $level_parsing_img=0;
	                                        }

	                                        if((isset($resolution_images_toppersystem_send) && trim($resolution_images_toppersystem_send) != "")) {
		                                        $resolution_images_toppersystem_send=(int) $resolution_images_toppersystem_send;	
	                                        }else{
		                                        $resolution_images_toppersystem_send=76;
	                                        }

	                                        if((isset($stronglazyload_images_toppersystem_send) && trim($stronglazyload_images_toppersystem_send) != "")) {
		                                        $stronglazyload_images_toppersystem_send=(int) $stronglazyload_images_toppersystem_send;	
	                                        }else{
		                                        $stronglazyload_images_toppersystem_send=0;
	                                        }

	                                        if((isset($text_ia_toppersystem_send) && trim($text_ia_toppersystem_send) != "")) {
		                                        $text_ia_toppersystem=(int) $text_ia_toppersystem_send;	
	                                        }else{
		                                        $text_ia_toppersystem=0;
	                                        }

	                                        if((isset($language_toppersystem_send) && trim($language_toppersystem_send) != "")) {
		                                        $language_toppersystem=trim($language_toppersystem_send);	
	                                        }else{
		                                        $language_toppersystem="";
	                                        }

	                                        if((isset($keyword_toppersystem_send) && trim($keyword_toppersystem_send) != "")) {
		                                        $keyword_toppersystem=trim($keyword_toppersystem_send);	
	                                        }else{
		                                        $keyword_toppersystem="";
	                                        }

	                                        if((isset($resend_toppersystem) && trim($resend_toppersystem) != "")) {
		                                        $resend_toppersystem=trim(TopperSystemSafeNOSQL::sanitizeNosql($resend_toppersystem));	
	                                        }else{
		                                        $resend_toppersystem="";
	                                        }

	                                        if((isset($page_toppersystem_send) && trim($page_toppersystem_send) != "")) {
												$page_toppersystem_send=trim($page_toppersystem_send);
	                                        }else{
		                                        $page_toppersystem_send="";
	                                        }
								            
	                                        if((isset($css_toppersystem_send) && trim($css_toppersystem_send) != "")) {
		                                        $css_toppersystem_send=trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($css_toppersystem_send));	
	                                        }else{
		                                        $css_toppersystem_send="";
	                                        }
								            
	                                        if((isset($js_toppersystem_send) && trim($js_toppersystem_send) != "")) {
		                                        $js_toppersystem_send=trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($js_toppersystem_send));	
	                                        }else{
		                                        $js_toppersystem_send="";
	                                        }
	                                        
                                            if((isset($credits_toppersystem_send) && trim($credits_toppersystem_send) != "")) {
		                                        $credits_toppersystem_send=trim(TopperSystemSafeNOSQL::sanitizeNosql($credits_toppersystem_send));	
	                                        }else{
		                                        $credits_toppersystem_send="";
	                                        }

                                            if((isset($sb_toppersystem_send) && trim($sb_toppersystem_send) != "")) {
		                                        $sb_toppersystem_send=trim(TopperSystemSafeNOSQL::sanitizeNosql($sb_toppersystem_send));	
	                                        }else{
		                                        $sb_toppersystem_send="";
	                                        }

	                                        if((isset($check_privacy_toppersystem_send) && trim($check_privacy_toppersystem_send) != "")) {
		                                        $check_privacy_toppersystem_send=trim(TopperSystemSafeNOSQL::sanitizeNosql($check_privacy_toppersystem_send));	
	                                        }else{
		                                        $check_privacy_toppersystem_send="";
	                                        }

	                                        if((isset($vp_toppersystem) && trim($vp_toppersystem) != "")) {
		                                        $vp_toppersystem=trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($vp_toppersystem));	
	                                        }else{
		                                        $vp_toppersystem="";
	                                        }

	                                        if((isset($nco_toppersystem) && trim($nco_toppersystem) != "")) {
		                                        $nco_toppersystem=trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($nco_toppersystem));	
	                                        }else{
		                                        $nco_toppersystem="";
	                                        }

								            if((isset($resendCentral_toppersystem_send) && trim($resendCentral_toppersystem_send) != "")) {
									            $resendCentraltoppersystem=trim(TopperSystemSafeNOSQL::sanitizeNosql($resendCentral_toppersystem_send));	
								            }else{
									            $resendCentraltoppersystem="";
								            }
								            
	                                        if((isset($hreflang_toppersystem) && trim($hreflang_toppersystem) != "")) {
		                                        $hreflang_toppersystem=trim(TopperSystemSafeNOSQL::sanitizeNosql($hreflang_toppersystem));	
	                                        }else{
		                                        $hreflang_toppersystem="en";
	                                        }

                                            if($hreflang_toppersystem == "it"){    
		                                       $txtts0="Pagina al Topper the Top"; 
                                               $txtts1="crediti:";
                                               $txtts2="Qualcosa è andato storto. Assicurati di aver copilato correttamente il form e riprova.";
                                            }else if($hreflang_toppersystem == "ar"){ 
		                                       $txtts0="صفحة Topper the Top"; 
                                               $txtts1="ائتمانات:";
                                               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
                                            }else if($hreflang_toppersystem == "de"){ 
		                                       $txtts0="Seite Topper the Top"; 
                                               $txtts1="credits:";
                                               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
                                            }else if($hreflang_toppersystem == "es"){ 
		                                       $txtts0="Pagina al Topper the Top"; 
                                               $txtts1="crediti:";
                                               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
                                            }else if($hreflang_toppersystem == "fr"){ 
		                                       $txtts0="Página Topper the Top"; 
                                               $txtts1="créditos:";
                                               $txtts2="Qualcosa è andato storto. Assicurati di aver copilato correttamente il form e riprova.";
                                            }else if($hreflang_toppersystem == "hi"){ 
		                                       $txtts0="पेज Topper the Top"; 
                                               $txtts1="क्रेडिट:";
                                               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
                                            }else if($hreflang_toppersystem == "ja"){ 
		                                       $txtts0="ページ Topper the Top"; 
                                               $txtts1="クレジット：";
                                               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
                                            }else if($hreflang_toppersystem == "pl"){ 
		                                       $txtts0="Strona Topper the Top"; 
                                               $txtts1="ECTS:";
                                               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
                                            }else if($hreflang_toppersystem == "pt"){ 
		                                       $txtts0="Página Topper the Top"; 
                                               $txtts1="créditos:";
                                               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
                                            }else if($hreflang_toppersystem == "ru"){ 
		                                       $txtts0="страница Topper the Top"; 
                                               $txtts1="кредиты:";
                                               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
                                            }else if($hreflang_toppersystem == "zh"){ 
		                                       $txtts0="页 Topper the Top"; 
                                               $txtts1="积分：";
                                               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
                                            }else if($hreflang_toppersystem == "he"){ 
		                                       $txtts0="דף Topper the Top"; 
                                               $txtts1="זיכויים:";
                                               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
                                            }else if($hreflang_toppersystem == "la"){ 
		                                       $txtts0="Page Topper the Top"; 
                                               $txtts1="promeritum:";
                                               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
                                            }else{   
		                                       $txtts0="Page Topper the Top"; 
                                               $txtts1="credits:";
                                               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
                                            }
                                           
	                                        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($resendCentraltoppersystem) != "")&&(trim($auth_memory) != "")&&(trim($page_toppersystem_send) != "")&&(trim($hreflang_toppersystem) != "")&&(trim($check_privacy_toppersystem_send) == "true")&&(md5(strlen(trim("$page_toppersystem_send"))) == "$vp_toppersystem")){

                                                if(TopperSystemSetFilereceived::verify_state_connection_toppersystem("$canonical_toppersystem_send") == 1){

                                                    $array_check_memory_disponible3=TopperSystemSetFilereceived::chek_memory_toppersystem();
                                                    $pass_check_memory_disponible3=$array_check_memory_disponible3["0"];
                                                    $memory_limit_check_memory_disponible3=$array_check_memory_disponible3["1"];
                                                    $memory_usage_check_memory_disponible3=$array_check_memory_disponible3["2"];
                                                    $memorypeak_usage_check_memory_disponible3=$array_check_memory_disponible3["3"];
                                                    $memory_free_perc_check_memory_disponible3=$array_check_memory_disponible3["4"];
                                                    $wp_memory_limit_ts_check_memory_disponible3=$array_check_memory_disponible3["5"];
                                                    $wp_max_memory_limit_ts_check_memory_disponible3=$array_check_memory_disponible3["6"];

                                                    $saveMemTopperSystemSEO3=TopperSystemSetFilereceived::message_limit_memory_display_toppersystem("3","en", "$memory_limit_check_memory_disponible3", "$memory_usage_check_memory_disponible3", "$memorypeak_usage_check_memory_disponible3", "$memory_free_perc_check_memory_disponible3", "$wp_memory_limit_ts_check_memory_disponible3", "$wp_max_memory_limit_ts_check_memory_disponible3");
                                                    $save_log_limit_memory_display_toppersystem=TopperSystemSetFilereceived::save_log_limit_memory_display_toppersystem("3",$canonical_toppersystem_send,$saveMemTopperSystemSEO3);
                                                    $save_log_limit_memory_display_toppersystem="";
                                                    $saveMemTopperSystemSEO3="";

										            if($pass_check_memory_disponible3 == "1"){
                                                        $pathfilereceivedtoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ReceivedToppersystem.txt";
                                                        $pathfilereceivedtoppersystemnotxt=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ReceivedToppersystem";
                                                        $pathdirlog=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log";
                                                        $pathfileindex=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/IndexToppersystem.txt";
                                                        $pathfilestartnewnotxt=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/db/start_new";
                                                        $pathfilesaveultimeimpostation=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveUltimeImpostation.txt";
                                                        $pathfileactivenoneresourcetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveNoneResourceToppersystem.txt";
                                                        $pathfilenocsscriticalinlinetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/NoCSScriticalInline.txt";

                                                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                            #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                                            #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                                            $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                                            $part_url_transform2=site_url();
                                                            $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
                                                        }else{
                                                            $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
                                                        }

											            $canonical_toppersystem_send_no_domain=TopperSystemSetFilereceived::result_page_name_no_domain("$canonical_toppersystem_send2");
											            
											            #$pathfileindex="../log/IndexToppersystem.txt";
											            if(file_exists($pathfileindex)){
												            if(is_readable("$pathfileindex")){
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
													            $contenuto_file_index_exist_toppersystem=1;
												            }else{
													            $contenuto_file_index_toppersystem="";
													            $contenuto_file_index_exist_toppersystem=0;
												            }
											            }else{
												            $contenuto_file_index_toppersystem="";
												            $contenuto_file_index_exist_toppersystem=0;
											            }
											            unset($pathfileindex);
											            if(trim($contenuto_file_index_toppersystem != "")){
												            $num_line_tot=0;
												            $line_preleva="";
												            
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
																		            if(TopperSystemSetFilereceived::verify_line(trim($line))){
																			            $line_preleva="$line";
																			            $num_line_tot_preleva=$num_line_tot;
																		            }
																               }
															               }
															               if(trim($line) != ""){
																	            if(TopperSystemSetFilereceived::verify_line(trim($line))){
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
												            if($line_preleva == ""){ 
													            $nnnn=$num_line_tot;                                
												            }else{
													            $nnnn=$num_line_tot_preleva;
												            }								
											            
											            }else{
												            $nnnn=0;
											            }
			            
											            if($contenuto_file_index_exist_toppersystem == 1){
                                                            $array_check_memory_disponible4=TopperSystemSetFilereceived::chek_memory_toppersystem();
                                                            $pass_check_memory_disponible4=$array_check_memory_disponible4["0"];
                                                            $memory_limit_check_memory_disponible4=$array_check_memory_disponible4["1"];
                                                            $memory_usage_check_memory_disponible4=$array_check_memory_disponible4["2"];
                                                            $memorypeak_usage_check_memory_disponible4=$array_check_memory_disponible4["3"];
                                                            $memory_free_perc_check_memory_disponible4=$array_check_memory_disponible4["4"];
                                                            $wp_memory_limit_ts_check_memory_disponible4=$array_check_memory_disponible4["5"];
                                                            $wp_max_memory_limit_ts_check_memory_disponible4=$array_check_memory_disponible4["6"];

                                                            $saveMemTopperSystemSEO4=TopperSystemSetFilereceived::message_limit_memory_display_toppersystem("4","en", "$memory_limit_check_memory_disponible4", "$memory_usage_check_memory_disponible4", "$memorypeak_usage_check_memory_disponible4", "$memory_free_perc_check_memory_disponible4", "$wp_memory_limit_ts_check_memory_disponible4", "$wp_max_memory_limit_ts_check_memory_disponible4");
                                                            $save_log_limit_memory_display_toppersystem=TopperSystemSetFilereceived::save_log_limit_memory_display_toppersystem("4",$canonical_toppersystem_send,$saveMemTopperSystemSEO4);
                                                            $save_log_limit_memory_display_toppersystem="";
                                                            $saveMemTopperSystemSEO4="";

												            if($pass_check_memory_disponible4 == "1"){ 
													            #sostituisci e salva
													            $line_preleva_new=trim($canonical_toppersystem_send_no_domain)."||||".date("Y-m-d H:i:s")."\n";
													            
													            #salva stato su file
													            $pathfile="$pathfilereceivedtoppersystem";
													            if(file_exists($pathfile)){
														            chmod("$pathfile",0644);
														            $textfilex=fopen($pathfile, "a");
														            $scrivix="$line_preleva_new";                                            
														            fwrite($textfilex,$scrivix);
														            fclose($textfilex);
														            chmod("$pathfile",0444);
													            }else{
                                                                    if(file_exists($pathfile)){
                                                                        chmod("$pathfile",0644);
                                                                    }
														            $textfilex=fopen($pathfile, "w");
														            $scrivix="$line_preleva_new";                                            
														            fwrite($textfilex,$scrivix);
														            fclose($textfilex);
														            chmod("$pathfile",0444);
													            }

													            $path = "$pathfilereceivedtoppersystem";
													            $rows = count(file($path));                                                
													            if($rows >= 1000){ 
														            $n_file_assegna=count(TopperSystemSetFilereceived::verifica_esistenza_file_nelle_directory("ReceivedToppersystem","$pathdirlog")) - 1;
														            chmod("$pathfile",0644);
														            rename("$pathfile","$pathfilereceivedtoppersystemnotxt$n_file_assegna.txt");
														            chmod("$pathfilereceivedtoppersystemnotxt$n_file_assegna.txt",0444);

														            $textfilex=fopen($pathfile, "w");                                           
														            fclose($textfilex);
														            chmod("$pathfile",0444);
													            }                    
													            													            
													            $go=TopperSystemSetFilereceived::go_css("$css_toppersystem_send","");                                                                
													            $go=TopperSystemSetFilereceived::go_js("$js_toppersystem_send");

													            $page_toppersystem_send=str_replace("\n","[JaccapoespazioB] ",$page_toppersystem_send);                                                               
																$page_toppersystem_send=TopperSystemSetFilereceived::rewrite_img_src($page_toppersystem_send,"$canonical_toppersystem_send","$resend_toppersystem","$level_parsing_img","$resendCentraltoppersystem","$resolution_images_toppersystem_send");
																
																$page_toppersystem_send=TopperSystemSetFilereceived::rewrite_img_data_src($page_toppersystem_send,"$canonical_toppersystem_send","$resend_toppersystem","$level_parsing_img","$resendCentraltoppersystem","$resolution_images_toppersystem_send");
																
																$page_toppersystem_send=TopperSystemSetFilereceived::rewrite_img_data_lazyload($page_toppersystem_send,"$canonical_toppersystem_send","$resend_toppersystem","$level_parsing_img","$resendCentraltoppersystem","$resolution_images_toppersystem_send");
															
																$page_toppersystem_send=TopperSystemSetFilereceived::rewrite_img_css($page_toppersystem_send,"$canonical_toppersystem_send","$resend_toppersystem","$level_parsing_img","$resendCentraltoppersystem","$resolution_images_toppersystem_send");

																$page_toppersystem_send=TopperSystemSetFilereceived::add_imglazy_and_imgpreload($page_toppersystem_send,"$canonical_toppersystem_send","$resend_toppersystem","$level_parsing_img","$resendCentraltoppersystem","$stronglazyload_images_toppersystem_send");

                                                                if(!file_exists($pathfilenocsscriticalinlinetoppersystem)){
                                                                    $page_toppersystem_send=TopperSystemSetFilereceived::add_css_inline($page_toppersystem_send,$css_toppersystem_send);
                                                                }
                                                                
                                                                if($text_ia_toppersystem == "1"){
                                                                    $page_toppersystem_send=TopperSystemSetFilereceived::add_title_description_ia($page_toppersystem_send,"$keyword_toppersystem","$language_toppersystem");
                                                                }                                                   

													            $page_toppersystem_send=str_replace("[JaccapoespazioB] ","\n",$page_toppersystem_send);
													            
													            #salva stato su file
													            $pathfile="$pathfilestartnewnotxt$nnnn.txt";
													            chmod("$pathfile",0644);
													            $textfilex=fopen($pathfile, "w");
													            $scrivix="$page_toppersystem_send";                                            
													            fwrite($textfilex,$scrivix);
													            fclose($textfilex);
													            chmod("$pathfile",0444);

													            $add_cvn="";
													            if(trim($page_toppersystem_send) != ""){
														            $add_cvn="\n$nco_toppersystem";
													            }
													            unset($page_toppersystem_send);
													            
													            if($sb_toppersystem_send == "ok"){													            

                                                                    $pathfileautoupdate=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";
                                                                    $fileautoupdate_ts="$pathfileautoupdate";
                                                                    if(file_exists($fileautoupdate_ts)){
                                                                        $pathfileautoupdateinsert=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/autoupdateinsert.txt";

	                                                                    if(is_readable("$fileautoupdate_ts")){
		                                                                    $old_permessi_file=substr(sprintf('%o', fileperms("$fileautoupdate_ts")), -4);
	                                                                    }else{
		                                                                    $old_permessi_file="";
	                                                                    }
	                                                                    $handle_autoupdate = fopen($fileautoupdate_ts, "r");
	                                                                    if (FALSE === $handle_autoupdate) {
		                                                                    $autoupdate_toppersystem="";
	                                                                    }else{
		                                                                    $autoupdate_toppersystem = '';
		                                                                    while (!feof($handle_autoupdate)) {
			                                                                    $autoupdate_toppersystem .= fread($handle_autoupdate, 8192);
		                                                                    }
		                                                                    fclose($handle_autoupdate);
	                                                                    }
	                                                                    unset($handle_autoupdate);

                                                                        if(trim($autoupdate_toppersystem) != ""){
	                                                                        if(str_replace("\$par_activateautoupdatets_toppersystem=\"0\"","",$autoupdate_toppersystem) != "$autoupdate_toppersystem"){ 
		                                                                        $new_autoupdate_toppersystem=str_replace(array("\$par_activateautoupdatets_toppersystem=\"0\"","\$par_activateautoupdatets_toppersystem=\"1\""),"\$par_activateautoupdatets_toppersystem=\"1\"",$autoupdate_toppersystem);
		                                                                        if(trim($new_autoupdate_toppersystem) != trim($autoupdate_toppersystem)){
			                                                                        chmod($fileautoupdate_ts,0644);
			                                                                        $textfilem_autoupdate_ts=fopen($fileautoupdate_ts, "w");
			                                                                        $scrivi_autoupdate_ts=trim($new_autoupdate_toppersystem);
			                                                                        fwrite($textfilem_autoupdate_ts,$scrivi_autoupdate_ts);
			                                                                        fclose($textfilem_autoupdate_ts);
			                                                                        unset($textfilem_autoupdate_ts);
			                                                                        unset($scrivi_autoupdate_ts);
			                                                                        if($old_permessi_file == "0444"){
                                                                                        chmod($fileautoupdate_ts,0444);
			                                                                        }

                                                                                    if(!file_exists($pathfileautoupdateinsert)){
			                                                                            $textfilem_autoupdateinsert_ts=fopen($pathfileautoupdateinsert, "w");
			                                                                            $scrivi_autoupdateinsert_ts="ok";
			                                                                            fwrite($textfilem_autoupdateinsert_ts,$scrivi_autoupdateinsert_ts);
			                                                                            fclose($textfilem_autoupdateinsert_ts);
                                                                                        chmod($pathfileautoupdateinsert,0444);
                                                                                    }				
		                                                                        }
		                                                                        unset($new_autoupdate_toppersystem);
	                                                                        }
                                                                        }
                                                                        unset($old_permessi_file);
                                                                        unset($autoupdate_toppersystem);
                                                                    }

                                                                    $contenuto_link_sito_send="$txtts0$add_cvn";
													            }else{                                                                    
                                                                    $pathfileautoupdateinsert=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/autoupdateinsert.txt";
                                                                    if(file_exists($pathfileautoupdateinsert)){  
                                                                        $pathfileautoupdate=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";
                                                                        $fileautoupdate_ts="$pathfileautoupdate";

                                                                        if(is_readable("$fileautoupdate_ts")){
	                                                                        $old_permessi_file=substr(sprintf('%o', fileperms("$fileautoupdate_ts")), -4);
                                                                        }else{
	                                                                        $old_permessi_file="";
                                                                        }
                                                                        $handle_autoupdate = fopen($fileautoupdate_ts, "r");
                                                                        if (FALSE === $handle_autoupdate) {
	                                                                        $autoupdate_toppersystem="";
                                                                        }else{
	                                                                        $autoupdate_toppersystem = '';
	                                                                        while (!feof($handle_autoupdate)) {
		                                                                        $autoupdate_toppersystem .= fread($handle_autoupdate, 8192);
	                                                                        }
	                                                                        fclose($handle_autoupdate);
                                                                        }
                                                                        unset($handle_autoupdate);

                                                                        if(str_replace("\$par_activateautoupdatets_toppersystem=\"1\"","",$autoupdate_toppersystem) != "$autoupdate_toppersystem"){
                                                                            $new_autoupdate_toppersystem=str_replace(array("\$par_activateautoupdatets_toppersystem=\"0\"","\$par_activateautoupdatets_toppersystem=\"1\""),"\$par_activateautoupdatets_toppersystem=\"0\"",$autoupdate_toppersystem);
                                                                            if(trim($new_autoupdate_toppersystem) != trim($autoupdate_toppersystem)){
	                                                                            chmod($fileautoupdate_ts,0644);
	                                                                            $textfilem_autoupdate_ts=fopen($fileautoupdate_ts, "w");
	                                                                            $scrivi_autoupdate_ts=trim($new_autoupdate_toppersystem);
	                                                                            fwrite($textfilem_autoupdate_ts,$scrivi_autoupdate_ts);
	                                                                            fclose($textfilem_autoupdate_ts);
	                                                                            unset($textfilem_autoupdate_ts);
	                                                                            unset($scrivi_autoupdate_ts);
	                                                                            if($old_permessi_file == "0444"){
                                                                                    chmod($fileautoupdate_ts,0444);
	                                                                            }
                                                                                @unlink("$pathfileautoupdateinsert");				
                                                                            }
                                                                        }
                                                                    }

														            $contenuto_link_sito_send="$txtts0 ($txtts1 $credits_toppersystem_send)$add_cvn";
													            }
													            unset($sb_toppersystem_send);
												            }else{
                                                                $contenuto_link_sito_send=TopperSystemSetFilereceived::message_limit_memory_display_toppersystem("4","$hreflang_toppersystem", "$memory_limit_check_memory_disponible4", "$memory_usage_check_memory_disponible4", "$memorypeak_usage_check_memory_disponible4", "$memory_free_perc_check_memory_disponible4", "$wp_memory_limit_ts_check_memory_disponible4", "$wp_max_memory_limit_ts_check_memory_disponible4");
												            }
											            }else{
												            $contenuto_link_sito_send="ErrorServerTS ServiceNotAvailable Err-Code 4.";
											            }
                                                        $array_check_memory_disponible4=array();
                                                        unset($pass_check_memory_disponible4);
                                                        unset($memory_limit_check_memory_disponible4);
                                                        unset($memory_usage_check_memory_disponible4);
                                                        unset($memorypeak_usage_check_memory_disponible4);
                                                        unset($memory_free_perc_check_memory_disponible4);
                                                        unset($wp_memory_limit_ts_check_memory_disponible4);
                                                        unset($wp_max_memory_limit_ts_check_memory_disponible4);
										            }else{
                                                        $contenuto_link_sito_send=TopperSystemSetFilereceived::message_limit_memory_display_toppersystem("3","$hreflang_toppersystem", "$memory_limit_check_memory_disponible3", "$memory_usage_check_memory_disponible3", "$memorypeak_usage_check_memory_disponible3", "$memory_free_perc_check_memory_disponible3", "$wp_memory_limit_ts_check_memory_disponible3", "$wp_max_memory_limit_ts_check_memory_disponible3");
										            }
                                                    $array_check_memory_disponible3=array();
                                                    unset($pass_check_memory_disponible3);
                                                    unset($memory_limit_check_memory_disponible3);
                                                    unset($memory_usage_check_memory_disponible3);
                                                    unset($memorypeak_usage_check_memory_disponible3);
                                                    unset($memory_free_perc_check_memory_disponible3);
                                                    unset($wp_memory_limit_ts_check_memory_disponible3);
                                                    unset($wp_max_memory_limit_ts_check_memory_disponible3);
									            }else{
										            $contenuto_link_sito_send="ErrorServerTS ServiceNotAvailable ErrorRequestTS ServiceNotAvailable";
									            }
	                                        }else{ 
		                                        $contenuto_link_sito_send="ErrorServerTS ServiceNotAvailable $txtts2";
	                                        }
                                            return wp_json_encode("$contenuto_link_sito_send");
                                        }else{
								            return wp_json_encode("ErrorServerTS ServiceNotAvailable");
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
            
			
            }
		}
	}
}
?>