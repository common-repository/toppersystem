<?php
if(((isset($_POST["tsaction"]))&&(trim($_POST["tsaction"]) != ""))||(isset($TopperSystemCpermIsMinifyTS))){
    if(str_replace("\\","",__DIR__) != __DIR__){
        $hu="\api\JSMin.php";
        $pathfileminifyjs=str_replace("toppersystem\minify","toppersystem",__DIR__).$hu;

        $hu2="\api\Compressor.php";
        $pathfileminifycss=str_replace("toppersystem\minify","toppersystem",__DIR__).$hu2;
    }else{
        $hu="/api/JSMin.php";
        $pathfileminifyjs=str_replace("toppersystem/minify","toppersystem",__DIR__).$hu;

        $hu2="/api/Compressor.php";
        $pathfileminifycss=str_replace("toppersystem/minify","toppersystem",__DIR__).$hu2;
    }
	require($pathfileminifyjs);
	require($pathfileminifycss);
	class TopperSystemSetFileminifyts {
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

		public static function clean_javascript($stringa_sito){
			if($stringa_sito != ""){
				if(((str_replace(array("[","]","{","}"),"",$stringa_sito) != "$stringa_sito")&&(str_replace(array("="),"",$stringa_sito) != "$stringa_sito"))||(str_replace(array("document.","function(",".getElement","var "),"",$stringa_sito) != "$stringa_sito")){
					if(TopperSystemSetFileminifyts::is_script_accettable_ts($stringa_sito) == "ok"){
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
					$stringa_sito=TopperSystemSetFileminifyts::add_font_display_swap_to_css_ts("$stringa_sito");
					if(TopperSystemSetFileminifyts::is_script_accettable_ts($stringa_sito) == "ok"){
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

		public static function reset_file($fileoriginale,$newfile){
			$return="";
			
			if(($fileoriginale != "")&&($newfile != "")){
                $pathdirassets=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/assets/";

				$filename=TopperSystemSetFileminifyts::detect_pathfile().$fileoriginale;
				$filenamenew=$pathdirassets.$newfile;
				if(file_exists($filename)){
					if(is_readable($filename)){
						$old_permessi_file=substr(sprintf('%o', fileperms($filename)), -4);
					}else{
						$old_permessi_file="";
					}	
					
					if(file_exists($filenamenew)){
						chmod($filenamenew,0644);
						if(filemtime($filenamenew) >= filemtime($filename)){
							$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($filenamenew);					
							if(trim($contenuto_link_sito) != ""){		
								chmod($filename,0644);							
								$textfilem=fopen($filename, "w");
								fwrite($textfilem,$contenuto_link_sito);
								fclose($textfilem);
								if($old_permessi_file == "0444"){
									chmod($filename,0444);
								}
								
								@unlink($filenamenew);
								
								clearstatcache();
								$return="ok";
							}
							unset($contenuto_link_sito);
						}else{
							chmod($filenamenew,0644);
							@unlink($filenamenew);
						}
					}
				}
			}		
			return "$return";
		}
		
		public static function modify_js($fileoriginale,$newfile){
			$return="";
			if(($fileoriginale != "")&&($newfile != "")){
                $pathdirassets=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/assets/";

				$filename=TopperSystemSetFileminifyts::detect_pathfile().$fileoriginale;
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
							$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($filename);					
							if(trim($contenuto_link_sito) != ""){	
								$new=TopperSystemSetFileminifyts::clean_javascript($contenuto_link_sito);
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
						$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($filename);
						if(trim($contenuto_link_sito) != ""){		
							$new=TopperSystemSetFileminifyts::clean_javascript($contenuto_link_sito);
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

		public static function go_js(){
            $pathfileminifyjs=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyJS.txt";

			$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($pathfileminifyjs);			
			if($contenuto_link_sito != ""){
				$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
				$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
				unset($contenuto_link_sito);
				
				for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

					if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
						$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
						if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
							$go=TopperSystemSetFileminifyts::modify_js(explode("?",$part_url[0])[0],$part_url[1]);
						}
					}
				}
				if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
				unset($n_contenuto_file_index_toppersystem_array);
			}
			return "ok";
		}

		public static function delete_js(){
            $pathfileminifyjs=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyJS.txt";

			$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($pathfileminifyjs);
			if($contenuto_link_sito != ""){
				$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
				$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
				unset($contenuto_link_sito);
				
				for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

					if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
						$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
						if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
							$go=TopperSystemSetFileminifyts::reset_file(explode("?",$part_url[0])[0],$part_url[1]);
						}
					}
				}
				if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
				unset($n_contenuto_file_index_toppersystem_array);
			}
			return "ok";		
		}

		public static function modify_css($fileoriginale,$newfile){
			$return="";
			if(($fileoriginale != "")&&($newfile != "")){
                $pathdirassets=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/assets/";

				$filename=TopperSystemSetFileminifyts::detect_pathfile().$fileoriginale;
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
							$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($filename);					
							if(trim($contenuto_link_sito) != ""){		
								$new=TopperSystemSetFileminifyts::clean_css($contenuto_link_sito);
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
						$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($filename);
						if(trim($contenuto_link_sito) != ""){		
							$new=TopperSystemSetFileminifyts::clean_css($contenuto_link_sito);
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
			return "$return";
		}

		public static function go_css(){
            $pathfileminifycss=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyCSS.txt";

			$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($pathfileminifycss);
			if($contenuto_link_sito != ""){
				$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
				$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
				unset($contenuto_link_sito);
				
				for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

					if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
						$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
						if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
							$go=TopperSystemSetFileminifyts::modify_css(explode("?",$part_url[0])[0],$part_url[1]);
						}
					}
				}
				if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
				unset($n_contenuto_file_index_toppersystem_array);
			}
			return "ok";
		}	
		
		public static function delete_css(){
            $pathfileminifycss=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyCSS.txt";

			$contenuto_link_sito=TopperSystemSetFileminifyts::searchfile($pathfileminifycss);
			
			if($contenuto_link_sito != ""){
				$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
				$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
				unset($contenuto_link_sito);
				
				for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

					if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
						$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
						if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
							$go=TopperSystemSetFileminifyts::reset_file(explode("?",$part_url[0])[0],$part_url[1]);
						}
					}
				}
				if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
				unset($n_contenuto_file_index_toppersystem_array);
			}
			return "ok";
		}
	}
	
	class TopperSystemExecuteFileminifyts {
		public static function runts($TopperSystemCpermIsMinifyTS){
            if($TopperSystemCpermIsMinifyTS == "ok"){
                $go=TopperSystemSetFileminifyts::go_js();
                $go=TopperSystemSetFileminifyts::go_css();
            }else{
			    if($_POST["action"] == "active"){		
				    if((isset($_POST["a"]))&&(trim($_POST["a"]) != "")){
					    if((trim($_POST["a"]) == trim(TopperSystemAuthTS::AuthTopperSystem()))){
						    $go=TopperSystemSetFileminifyts::go_js();
						    $go=TopperSystemSetFileminifyts::go_css();
					    }
				    }
			    }else if($_POST["tsaction"] == "delete"){
				    if((isset($_POST["a"]))&&(trim($_POST["a"]) != "")){
					    if((trim($_POST["a"]) == trim(TopperSystemAuthTS::AuthTopperSystem()))){
						    $go=TopperSystemSetFileminifyts::delete_js();
						    $go=TopperSystemSetFileminifyts::delete_css();
					    }
				    }
			    }else{
				    #niente
			    }
            }
		}
	}
    if ( ! defined( 'TOPPERSYSTEM_UPLOAD_FILES_NOSQL' ) ) {
	    define( 'TOPPERSYSTEM_UPLOAD_FILES_NOSQL', str_replace("\\","/",wp_upload_dir()['basedir']));
    }
    if(!isset($TopperSystemCpermIsMinifyTS)){
        $TopperSystemCpermIsMinifyTS="";
    }
	@add_action('init', @TopperSystemExecuteFileminifyts::runts($TopperSystemCpermIsMinifyTS), 2);
}
?>