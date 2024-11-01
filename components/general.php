<?php
if(isset($TopperSystemCpermGeneral)){
	if(!empty($TopperSystemCpermGeneral)){
		if($TopperSystemCpermGeneral == "1000000000000000"){	
			class TopperSystemSetMainFunction {
			public static function https_or_http(){
				$isSecure = false;
				if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
					$isSecure = true;
				}elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
					$isSecure = true;
				}

				if($isSecure == true){
					$http_scrivi="https";
				}else{
					$http_scrivi="http";
				}
				unset($isSecure);
				return $http_scrivi;
			}

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

            public static function file_curlts_contents($url){
	            $url=str_replace(" ","%20",$url);
                $options = array(		
	                CURLOPT_RETURNTRANSFER => true,
	                CURLOPT_HEADER         => false,
	                CURLOPT_FOLLOWLOCATION => true,
	                CURLOPT_ENCODING       => "",
	                CURLOPT_AUTOREFERER    => true,
                    CURLOPT_CONNECTTIMEOUT => 2,
                    CURLOPT_TIMEOUT        => 2,
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

            public static function file_curl_post_ts_contents($url,$fields){
	            $url=str_replace(" ","%20",$url);
                $options = array(		
	                CURLOPT_RETURNTRANSFER => true,
		            CURLOPT_POST 		   => true,
		            CURLOPT_POSTFIELDS     => $fields,
	                CURLOPT_HEADER         => false,
	                CURLOPT_FOLLOWLOCATION => true,
	                CURLOPT_ENCODING       => "",
	                CURLOPT_AUTOREFERER    => true,
                    CURLOPT_CONNECTTIMEOUT => 24,
                    CURLOPT_TIMEOUT        => 24,
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

            public static function file_curlfast_post_ts_contents($url,$fields){
	            $url=str_replace(" ","%20",$url);
                $options = array(
                    CURLOPT_FRESH_CONNECT  => true,
                    CURLOPT_FORBID_REUSE   => true,
	                CURLOPT_RETURNTRANSFER => true,
		            CURLOPT_POST 		   => true,
		            CURLOPT_POSTFIELDS     => $fields,
	                CURLOPT_HEADER         => false,
	                CURLOPT_FOLLOWLOCATION => true,
	                CURLOPT_ENCODING       => "",
                    CURLOPT_USERAGENT      => TopperSystemASPMTS::getRandomUserAgentAspmTs(),
	                CURLOPT_AUTOREFERER    => true,
                    CURLOPT_TIMEOUT_MS     => 100,
	                CURLOPT_SSL_VERIFYPEER => false,
	                CURLOPT_DNS_USE_GLOBAL_CACHE => false
                );
                $ch= curl_init( $url );
                curl_setopt_array( $ch, $options );
                if(curl_errno($ch)){
                    $content = "";
                }else{
                    $content = curl_exec( $ch );
                    $content = "";
                }                
                curl_close( $ch );
	            return "$content";
            }

            public static function chek_memory_toppersystem(){
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
                                        unset($memorypeak_usage);
                                    }
                                }            
                            }else{
                                $return=0;
                            }
                        }
                        unset($memory_usage);
                    }
                }
                unset($memory_limit);    
                return $return;
            }
			
			public static function work_attributo($attributo,$stringa_analizza){
				$return="";
				$return_content="";
				
				$go="ok";
				$from=' '.$attributo.'="';
				$to='"';
				$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
				if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
					$from=' '.$attributo.'= "';
					$to='"';
					$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
					if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
						$from=' '.$attributo.' = "';
						$to='"';
						$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
						if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
							$from=' '.$attributo.' ="';
							$to='"';
							$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
							if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
								$from=' '.$attributo.'=\'';
								$to='\'';
								$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
								if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
									$from=' '.$attributo.'= \'';
									$to='\'';
									$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
									if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
										$from=' '.$attributo.' = \'';
										$to='\'';
										$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
										if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
											$from=' '.$attributo.' =\'';
											$to='\'';
											$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
											if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
												$from=' '.ucfirst($attributo).'="';
												$to='"';
												$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
												if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
													$from=' '.ucfirst($attributo).'= "';
													$to='"';
													$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
													if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
														$from=' '.ucfirst($attributo).' = "';
														$to='"';
														$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
														if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
															$from=' '.ucfirst($attributo).'= "';
															$to='"';
															$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
															if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																$from=' '.ucfirst($attributo).'=\'';
																$to='\'';
																$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																	$from=' '.ucfirst($attributo).'= \'';
																	$to='\'';
																	$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																	if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																		$from=' '.ucfirst($attributo).' = \'';
																		$to='\'';
																		$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																		if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																			$from=' '.ucfirst($attributo).' =\'';
																			$to='\'';
																			$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																			if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																				$from=' '.strtoupper($attributo).'="';
																				$to='"';
																				$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																				if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																					$from=' '.strtoupper($attributo).'= "';
																					$to='"';
																					$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																					if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																						$from=' '.strtoupper($attributo).' ="';
																						$to='"';
																						$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																						if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																							$from=' '.strtoupper($attributo).' = "';
																							$to='"';
																							$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to,0);
																							if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																								$from=' '.strtoupper($attributo).'=\'';
																								$to='\'';
																								$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																								if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																									$from=' '.strtoupper($attributo).'= \'';
																									$to='\'';
																									$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																									if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																										$from=' '.strtoupper($attributo).' = \'';
																										$to='\'';
																										$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
																										if(str_replace("$from$ris$to","",$stringa_analizza) == $stringa_analizza){
																											$from=' '.strtoupper($attributo).' =\'';
																											$to='\'';
																											$ris=TopperSystemSetMainFunction::extractstringa_toppersystem($stringa_analizza, $from, $to);
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

            public static function name_ex(){
	            $verreq="23";
	            $verreq.=".";
	            $verreq.="141";
	            $verreq.=".";
	            $verreq.="108";
	            $verreq.=".";
	            $verreq.="65";
	            return $verreq;
            }

            public static function name_ex2(){
	            $verreq="13";
	            $verreq.=".";
	            $verreq.="18";
	            $verreq.=".";
	            $verreq.="108";
	            $verreq.=".";
	            $verreq.="65";
	            return $verreq;
            }

            public static function verify_request_server_api_toppersystem(){
                $return="";
                if(isset($_SERVER["HTTP_USER_AGENT"])){
	                $user_agent=trim($_SERVER["HTTP_USER_AGENT"]);
	                if(trim($_SERVER["HTTP_USER_AGENT"]) != ""){
                        if(str_replace("toppersystemnet","",strtolower($_SERVER["HTTP_USER_AGENT"])) != strtolower($_SERVER["HTTP_USER_AGENT"])){
	                        $return="ok";	
                        }
                    }
                }
                if($return != "ok"){
                    if(isset($_SERVER["REMOTE_ADDR"])){
                        if(trim($_SERVER["REMOTE_ADDR"]) != ""){
                            $server_request_ip_toppersystem=trim($_SERVER["REMOTE_ADDR"]);
                            if((((str_replace(TopperSystemSetMainFunction::name_ex(),"",$server_request_ip_toppersystem) != "$server_request_ip_toppersystem")||(str_replace(TopperSystemSetMainFunction::name_ex2(),"",$server_request_ip_toppersystem) != "$server_request_ip_toppersystem")))){
                                $return="ok";
                            }
                            unset($server_request_ip_toppersystem);
                        }
                    }
                }

                return "$return";
            }

            public static function toppersystem_cleanup_min_and_url($url){
                $array_url=explode("?",$url);
                if(isset($array_url["1"])){
                    $return=strtolower($array_url["0"])."?".$array_url["1"];
                }else{
                    $return=strtolower("$url");
                }
                $url="";
                return "$return";
			}

            public static function toppersystem_cleanup_min_and_decode_url($url){
                $array_url=explode("?",$url);
                if(isset($array_url["1"])){
                    $return=strtolower(urldecode($array_url["0"]))."?".$array_url["1"];
                }else{
                    $return=strtolower(urldecode("$url"));
                }
                $url="";
                return "$return";
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

			public static function toppersystem_get_canonicalurl($contenuto_link_sito_analizza){
				$verify="";
				$ris1="";
				$ris2="";				
				if($contenuto_link_sito_analizza != ""){
					preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
					$contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
					for($i=0;$i<=count($contenuto_link_sito_analizza) + 1;$i++){
						if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
							if($verify == ""){						
								$ris_attributo_rel=TopperSystemSetMainFunction::work_attributo("rel",$contenuto_link_sito_analizza[$i]);
								$ris_attributo_rel_complete=$ris_attributo_rel["0"];
								$ris_attributo_rel_content=$ris_attributo_rel["1"];	
									
								$ris_attributo_href=TopperSystemSetMainFunction::work_attributo("href",$contenuto_link_sito_analizza[$i]);
								$ris_attributo_href_complete=$ris_attributo_href["0"];
								$ris_attributo_href_content=$ris_attributo_href["1"];	

								if((trim(strtolower($ris_attributo_rel_content)) == "canonical")&&($ris_attributo_href_complete != "")&&($ris_attributo_href_content != "")){
									$ris1=trim($contenuto_link_sito_analizza[$i]);
									$ris2="$ris_attributo_href_content";
									$verify="1";
								}

								$ris_attributo_rel=array();
								$ris_attributo_href=array();
								$ris_attributo_rel_complete="";
								$ris_attributo_rel_content="";
								$ris_attributo_href_complete="";
								$ris_attributo_href_content="";
							}
							$contenuto_link_sito_analizza[$i]="";
						}
					}
					$contenuto_link_sito_analizza=array();
				}
				unset($verify);
				
				return array("$ris1","$ris2");
			}			

			public static function toppersystem_get_ogurl($contenuto_link_sito_analizza){
				$verify="";
				$ris1="";
				$ris2="";				
				if($contenuto_link_sito_analizza != ""){
					preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
					$contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
					for($i=0;$i<=count($contenuto_link_sito_analizza) + 1;$i++){
						if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
							if($verify == ""){						
								$ris_attributo_rel=TopperSystemSetMainFunction::work_attributo("property",$contenuto_link_sito_analizza[$i]);
								$ris_attributo_rel_complete=$ris_attributo_rel["0"];
								$ris_attributo_rel_content=$ris_attributo_rel["1"];	
									
								$ris_attributo_href=TopperSystemSetMainFunction::work_attributo("content",$contenuto_link_sito_analizza[$i]);
								$ris_attributo_href_complete=$ris_attributo_href["0"];
								$ris_attributo_href_content=$ris_attributo_href["1"];	

								if((trim(strtolower($ris_attributo_rel_content)) == "og:url")&&($ris_attributo_href_complete != "")&&($ris_attributo_href_content != "")){
									$ris1=trim($contenuto_link_sito_analizza[$i]);
									$ris2="$ris_attributo_href_content";
									$verify="1";
								}

								$ris_attributo_rel=array();
								$ris_attributo_href=array();
								$ris_attributo_rel_complete="";
								$ris_attributo_rel_content="";
								$ris_attributo_href_complete="";
								$ris_attributo_href_content="";
							}
							$contenuto_link_sito_analizza[$i]="";
						}
					}
					$contenuto_link_sito_analizza=array();
				}
				unset($verify);
				
				return array("$ris1","$ris2");
			}
			
			public static function toppersystem_get_canonical($contenuto_link_sito_analizza){		
				$verify="";
				$ris1="";
				$ris2="";				
				if($contenuto_link_sito_analizza != ""){
					$contenuto_link_sito_analizza=str_replace(array("\n", "\r", "\a", "\b", "\t", "\v")," ",$contenuto_link_sito_analizza);
					
					$canonical_toppersystem_array=TopperSystemSetMainFunction::toppersystem_get_canonicalurl("$contenuto_link_sito_analizza");
					$canonical_toppersystem_complete=$canonical_toppersystem_array["0"];
					$canonical_toppersystem_url=$canonical_toppersystem_array["1"];
					
					if((trim($canonical_toppersystem_complete) != "")&&(trim($canonical_toppersystem_url) != "")){
						$ris1="$canonical_toppersystem_complete";
						$ris2=trim("$canonical_toppersystem_url");
						$verify="1";						
					}else{						
						$canonical_toppersystem_array2=TopperSystemSetMainFunction::toppersystem_get_ogurl("$contenuto_link_sito_analizza");
						$canonical_toppersystem_complete=$canonical_toppersystem_array2["0"];
						$canonical_toppersystem_url=$canonical_toppersystem_array2["1"];
						if((trim($canonical_toppersystem_complete) != "")&&(trim($canonical_toppersystem_url) != "")){
							$ris1="$canonical_toppersystem_complete";
							$ris2=trim("$canonical_toppersystem_url");
							$verify="2";						
						}						
						$canonical_toppersystem_array2=array();						
					}
					
					$canonical_toppersystem_array=array();
					unset($canonical_toppersystem_complete);
					unset($canonical_toppersystem_url);
					unset($contenuto_link_sito_analizza);
				}
				
				$ris2=str_replace(" ","",$ris2);
				return array("$ris1","$ris2","$verify");
			}
			
			public static function hreflang_toppersystem(){
				if(get_locale() != ""){        
					return strtolower(explode("-",str_replace("_","-",get_locale()))["0"]);
				}else{        
					return "en";
				}
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
				  $url=str_replace(TopperSystemSetMainFunction::result_domain_name($url),"",$url);
				  return $url;
			}

			public static function CleanSringTS($str){				       
				return str_replace(site_url(),"",$str);
			}

			public static function resendCentraltoppersystem(){				       
				return str_replace(site_url(),"",plugins_url())."/";
			}
			
			public static function detect_path($filename){
				if(trim($filename) != ""){
					if(file_exists('../'.$filename)){
						return "../";
					}else{			
						$path="";
						for($i=0;$i<=count(explode("/",str_replace("\\","/",__DIR__)));$i++){
							if(file_exists($path.$filename)){
								return $path;
							}
							$path.="../";
						}			
					}
				}
				return false;
			}	

			public static function toppersystem_get_title($output){
				$output=str_replace("< ","<",$output);
				$output=str_replace(">"," >",$output);
				$output=str_replace("  "," ",$output);
				$return="";

				$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, '<title>', '</title>');
				if(trim($return) == ""){
					$return=esc_html( get_the_title() );
				}        
				unset($output);
				return $return;
			}

			public static function toppersystem_get_description($output){
				$output=str_replace(" =","=",$output);
				$output=str_replace("= ","=",$output);
				$output=str_replace("  "," ",$output);
				$return="";
				$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'name="description" content="', '"');
				if(trim($return) == ""){
					$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'name=\'description\' content=\'', '\'');
					if(trim($return) == ""){
						$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'property="og:description" content="', '"');
						if(trim($return) == ""){
							$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'property=\'og:description\' content=\'', '\'');
							if(trim($return) == ""){
								$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'property="twitter:description" content="', '"');
								if(trim($return) == ""){
									$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'property=\'twitter:description\' content=\'', '"');
									if(trim($return) == ""){
										$return=get_bloginfo( 'description' );
									}
								}
							} 
						} 
					} 
				}        
				unset($output);
				return $return;
			}

			public static function toppersystem_get_keywords($output){
				$output=str_replace(" =","=",$output);
				$output=str_replace("= ","=",$output);
				$output=str_replace("  "," ",$output);
				$return="";
				$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'name="keywords" content="', '"');
				if(trim($return) == ""){
					$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'name=\'keywords\' content=\'', '\'');
				}        
				unset($output);
				return $return;
			}

			public static function toppersystem_get_category($output){
				$output=str_replace(" =","=",$output);
				$output=str_replace("= ","=",$output);
				$output=str_replace("  "," ",$output);
				$return="";
				$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'property="og:type" content="', '"');
				if(trim($return) == ""){
					$return=TopperSystemSetMainFunction::extractstringa_toppersystem($output, 'property=\'og:type\' content=\'', '\'');
				}        
				unset($output);
				return $return;
			}

			public static function toppersystem_get_description_inpage($contenuto_link_sito_analizza){
				$verify="";
				$ris1="";
				$ris2="";				
				if($contenuto_link_sito_analizza != ""){
					preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
					$contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
					for($i=0;$i<=count($contenuto_link_sito_analizza) + 1;$i++){
						if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
							if($verify == ""){						
								$ris_attributo_rel=TopperSystemSetMainFunction::work_attributo("name",$contenuto_link_sito_analizza[$i]);
								$ris_attributo_rel_complete=$ris_attributo_rel["0"];
								$ris_attributo_rel_content=$ris_attributo_rel["1"];	
									
								$ris_attributo_href=TopperSystemSetMainFunction::work_attributo("content",$contenuto_link_sito_analizza[$i]);
								$ris_attributo_href_complete=$ris_attributo_href["0"];
								$ris_attributo_href_content=$ris_attributo_href["1"];	

								if((trim(strtolower($ris_attributo_rel_content)) == "description")&&($ris_attributo_href_complete != "")&&($ris_attributo_href_content != "")){
									$ris1=trim($contenuto_link_sito_analizza[$i]);
									$ris2="$ris_attributo_href_content";
									$verify="1";
								}

								$ris_attributo_rel=array();
								$ris_attributo_href=array();
								$ris_attributo_rel_complete="";
								$ris_attributo_rel_content="";
								$ris_attributo_href_complete="";
								$ris_attributo_href_content="";
							}
							$contenuto_link_sito_analizza[$i]="";
						}
					}
					$contenuto_link_sito_analizza=array();
				}
				unset($verify);

				if(trim($ris2) != ""){
					$ris2_array=explode(",",$ris2);
					$ris2="";
					for($i=0;$i<=count($ris2_array) + 1;$i++){
						if((isset($ris2_array[$i]))&&(trim($ris2_array[$i]) != "")){
							$ris2.=trim($ris2_array[$i]).", ";
							
							$ris2_array[$i]="";
						}
					}
					$ris2_array=array();
					$ris2=trim($ris2);					
					
					$ultimo_carattere=substr($ris2, strlen($ris2)-1);
					if($ultimo_carattere == ","){
						$ris2=substr($ris2, 0, strlen($ris2)-1);
					}
					$ultimo_carattere="";
					$ris2=trim($ris2);
					
					$ris2_array=explode("|",$ris2);
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
					$ultimo_carattere="";					
					unset($ultimo_carattere);
					$ris2=trim($ris2);

				}				
				return array("$ris1","$ris2");
			}

			public static function toppersystem_get_keywords_inpage($contenuto_link_sito_analizza){
				$verify="";
				$ris1="";
				$ris2="";				
				if($contenuto_link_sito_analizza != ""){
					preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($contenuto_link_sito_analizza), $contenuto_link_sito_analizza);
					$contenuto_link_sito_analizza = ($contenuto_link_sito_analizza[1]);
					for($i=0;$i<=count($contenuto_link_sito_analizza) + 1;$i++){
						if((isset($contenuto_link_sito_analizza[$i]))&&(trim($contenuto_link_sito_analizza[$i]) != "")){
							if($verify == ""){						
								$ris_attributo_rel=TopperSystemSetMainFunction::work_attributo("name",$contenuto_link_sito_analizza[$i]);
								$ris_attributo_rel_complete=$ris_attributo_rel["0"];
								$ris_attributo_rel_content=$ris_attributo_rel["1"];	
									
								$ris_attributo_href=TopperSystemSetMainFunction::work_attributo("content",$contenuto_link_sito_analizza[$i]);
								$ris_attributo_href_complete=$ris_attributo_href["0"];
								$ris_attributo_href_content=$ris_attributo_href["1"];	

								if((trim(strtolower($ris_attributo_rel_content)) == "keywords")&&($ris_attributo_href_complete != "")&&($ris_attributo_href_content != "")){
									$ris1=trim($contenuto_link_sito_analizza[$i]);
									$ris2="$ris_attributo_href_content";
									$verify="1";
								}

								$ris_attributo_rel=array();
								$ris_attributo_href=array();
								$ris_attributo_rel_complete="";
								$ris_attributo_rel_content="";
								$ris_attributo_href_complete="";
								$ris_attributo_href_content="";
							}
							$contenuto_link_sito_analizza[$i]="";
						}
					}
					$contenuto_link_sito_analizza=array();
				}
				unset($verify);
				
				if(trim($ris2) != ""){
					$ris2_array=explode(",",$ris2);
					$ris2="";
					for($i=0;$i<=count($ris2_array) + 1;$i++){
						if((isset($ris2_array[$i]))&&(trim($ris2_array[$i]) != "")){
							$ris2.=trim($ris2_array[$i]).", ";
							
							$ris2_array[$i]="";
						}
					}
					$ris2_array=array();
					$ris2=trim($ris2);					
					
					$ultimo_carattere=substr($ris2, strlen($ris2)-1);
					if($ultimo_carattere == ","){
						$ris2=substr($ris2, 0, strlen($ris2)-1);
					}
					$ultimo_carattere="";
					$ris2=trim($ris2);
					
					$ris2_array=explode("|",$ris2);
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
					$ultimo_carattere="";					
					unset($ultimo_carattere);
					$ris2=trim($ris2);
				}				
				return array("$ris1","$ris2");
			}			
			
			public static function toppersystem_get_info_page_optimized($url){
				$get_title="";	
				$get_description="";
				$get_keywords="";			
				$part_file="";
				if($url != ""){
                    $filename=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/IndexToppersystem.txt";

					if(file_exists($filename)){
						if(filesize($filename) <= 8192){
							$contenuto_file_index_toppersystem=@file_get_contents($filename);
						}else{
							$handle = fopen($filename, "r");
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
					}else{
						$contenuto_file_index_toppersystem="";
					}
					unset($filename);
					unset($hu);
					if($contenuto_file_index_toppersystem != ""){
						$canonical_toppersystem_send_no_domain=TopperSystemSetMainFunction::result_page_name_no_domain("$url");
						$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
						$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
						unset($contenuto_file_index_toppersystem);
						
						for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
							if($part_file == ""){
								if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
									$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["0"];
									if($part_url != ""){
										if($part_url == "$canonical_toppersystem_send_no_domain"){
											if(isset(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["1"])){
												$part_file=trim(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["1"]);
											}
										}
									}
									$part_url="";
									$contenuto_file_index_toppersystem_array[$i]="";
								}
							}
						}		
						if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
						unset($canonical_toppersystem_send_no_domain);
						if($part_file != ""){
                            $part_file=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/db/$part_file";

							if(file_exists($part_file)){				
								if(filesize($part_file) <= 8192){
									$contenuto_file_page_toppersystem=@file_get_contents($part_file);
								}else{
									$handle = fopen($part_file, "r");
									if (FALSE === $handle) {
										$contenuto_file_page_toppersystem="";
									}else{
										$contenuto_file_page_toppersystem = '';
										while (!feof($handle)) {
											 $contenuto_file_page_toppersystem .= fread($handle, 8192);
										}
										fclose($handle);
									}
									unset($handle);
								}
								
								if(trim($contenuto_file_page_toppersystem) != ""){
									$contenuto_file_page_toppersystem=str_replace("  "," ",str_replace("\n"," ",$contenuto_file_page_toppersystem));

									$get_title=TopperSystemSetMainFunction::extractstringa_toppersystem($contenuto_file_page_toppersystem, '<title>', '</title>');
									if($get_title == ""){
										$get_title=TopperSystemSetMainFunction::extractstringa_toppersystem($contenuto_file_page_toppersystem, '<TITLE>', '</TITLE>');
									}
									if(trim($get_title) != ""){
										$ris2_array=explode(",",$get_title);
										$get_title="";
										for($i=0;$i<=count($ris2_array) + 1;$i++){
											if((isset($ris2_array[$i]))&&(trim($ris2_array[$i]) != "")){
												$get_title.=trim($ris2_array[$i]).", ";
												
												$ris2_array[$i]="";
											}
										}
										$ris2_array=array();
										$get_title=trim($get_title);					
										
										$ultimo_carattere=substr($get_title, strlen($get_title)-1);
										if($ultimo_carattere == ","){
											$get_title=substr($get_title, 0, strlen($get_title)-1);
										}
										$ultimo_carattere="";
										$get_title=trim($get_title);
										
										$ris2_array=explode("|",$get_title);
										$get_title="";
										for($i=0;$i<=count($ris2_array) + 1;$i++){
											if((isset($ris2_array[$i]))&&(trim($ris2_array[$i]) != "")){
												$get_title.=trim($ris2_array[$i])." | ";
												
												$ris2_array[$i]="";
											}
										}
										$ris2_array=array();
										$get_title=trim($get_title);					
										
										$ultimo_carattere=substr($get_title, strlen($get_title)-1);
										if($ultimo_carattere == "|"){
											$get_title=substr($get_title, 0, strlen($get_title)-1);
										}
										$ultimo_carattere="";					
										unset($ultimo_carattere);
										$get_title=trim($get_title);
									}
									
									$get_description=TopperSystemSetMainFunction::toppersystem_get_description_inpage("$contenuto_file_page_toppersystem")["1"];
									
									$get_keywords=TopperSystemSetMainFunction::toppersystem_get_keywords_inpage("$contenuto_file_page_toppersystem")["1"];
								}
								unset($contenuto_file_page_toppersystem);				
							}
							unset($hua);
						}
					}
				}

				return array("$get_title","$get_description","$get_keywords");
			}

			public static function get_filetime_res_ts($directory_file,$nome_file){
                $return="1";
                if($nome_file != ""){
					if(str_replace("\\","",TOPPERSYSTEM_PLUGIN_DIRECTORY) != TOPPERSYSTEM_PLUGIN_DIRECTORY){
						$hu="\\$directory_file\\$nome_file";
						$filename=TOPPERSYSTEM_PLUGIN_DIRECTORY.$hu;
					}else{
						$hu="/$directory_file/$nome_file";
						$filename=TOPPERSYSTEM_PLUGIN_DIRECTORY.$hu;
					}
                    $return=@filemtime($filename);
                }
                unset($nome_file);
                unset($directory_file);
                unset($hu);
                unset($filename);
				return $return;
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

            public static function safeEncrypt_toppersystem($message,$key){
	            $message_crypter=@openssl_encrypt("$message","aes128","$key");
	            return $message_crypter;
            }

            public static function filesysteminstall_toppersystem($toppersystem_rep){
                $toppersystem_rep_ecr=@TopperSystemSetMainFunction::safeEncrypt_toppersystem($toppersystem_rep,"encr0812AE!PPokv21-54UiP");
                $pathfilesavesettingdebugoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SettingSystemToppersystem.txt";
                if(!file_exists($pathfilesavesettingdebugoppersystem)){
                    $textfilex=fopen($pathfilesavesettingdebugoppersystem, "w");
                    fwrite($textfilex,$toppersystem_rep_ecr);
                    fclose($textfilex);
                    chmod("$pathfilesavesettingdebugoppersystem",0444);    
                }else{
                    $savefilesavesettingdebugoppersystem=@file_get_contents($pathfilesavesettingdebugoppersystem);
                    if($savefilesavesettingdebugoppersystem != "$toppersystem_rep_ecr"){
                        chmod("$pathfilesavesettingdebugoppersystem",0644);
                        $textfilex=fopen($pathfilesavesettingdebugoppersystem, "w");
                        fwrite($textfilex,$toppersystem_rep_ecr);
                        fclose($textfilex);
                        chmod("$pathfilesavesettingdebugoppersystem",0444); 
                      
                    }
                    unset($savefilesavesettingdebugoppersystem);
                }
                unset($toppersystem_rep);
                unset($toppersystem_rep_ecr);
                unset($pathfilesavesettingdebugoppersystem);
                $textfilex="";
                unset($textfilex);
                return "ok";
            }	
			
			public static function get_browser_name_ts($user_agent){
				$return='No user agent detect';
				if(trim($user_agent) != ""){
					$t = strtolower($user_agent);
					$t = " " . $t;    
					if(strpos($t, 'opera') || strpos($t, 'opr/')){
						$return='Opera';
					}else if (strpos($t, 'edge')){
						$return='Edge';
					}else if (strpos($t, 'chrome')){
						$return='Chrome';
					}else if (strpos($t, 'safari')){
						$return='Safari';
					}else if (strpos($t, 'firefox')){
						$return='Firefox';
					}else if (strpos($t, 'msie') || strpos($t, 'trident/7')){
						$return='Internet Explorer';
					}else if (strpos($t, 'google')){
						$return='[Bot] Googlebot';
					}else if (strpos($t, 'bing')){
						$return='[Bot] Bingbot';
					}else if (strpos($t, 'slurp')){
						$return='[Bot] Yahoo! Slurp';
					}else if (strpos($t, 'duckduckgo')){
						$return='[Bot] DuckDuckBot';
					}else if (strpos($t, 'baidu')){
						$return='[Bot] Baidu';
					}else if (strpos($t, 'yandex')){
						$return='[Bot] Yandex';
					}else if (strpos($t, 'sogou')){
						$return='[Bot] Sogou';
					}else if (strpos($t, 'exabot')){
						$return='[Bot] Exabot';
					}else if (strpos($t, 'msn')){
						$return='[Bot] MSN';
					}else if (strpos($t, 'mj12bot')){
						$return='[Bot] Majestic';
					}else if (strpos($t, 'ahrefs')){
						$return='[Bot] Ahrefs';
					}else if (strpos($t, 'semrush')){
						$return='[Bot] SEMRush';
					}else if (strpos($t, 'rogerbot') || strpos($t, 'dotbot')){
						$return='[Bot] Moz or OpenSiteExplorer';
					}else if (strpos($t, 'frog') || strpos($t, 'screaming')){
						$return='[Bot] Screaming Frog';
					}else if (strpos($t, 'facebook')){
						$return='[Bot] Facebook';
					}else if (strpos($t, 'pinterest')){
						$return='[Bot] Pinterest';
					}else if (strpos($t, 'crawler') || strpos($t, 'api') || strpos($t, 'spider') || strpos($t, 'http') || strpos($t, 'bot') || strpos($t, 'archive') || strpos($t, 'info') || strpos($t, 'data')){
						$return='[Bot] Other';
					}else{
						$return='Other (Unknown)';
					}
					unset($t);
					unset($user_agent);
				}
				return $return;
			}
		
			public static function rendering_redirect_toppersystem($url,$resend_toppersystem,$nome_file,$toppersystem_page_preview,$old_size_page,$old_update_page,$resendCentraltoppersystem){
				if(count($_POST) == "0"){
                    $filename=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/db/$nome_file";

					if(file_exists($filename)){
						$handle = fopen($filename, "r");
						if (FALSE === $handle) {
							$contenuto_link_sito="";
						}else{
							$filesize=filesize($filename);
							if($filesize == 0){ 
								$contenuto_link_sito="";
							}else if(($filesize >= 1)&&($filesize <= 8192)){    
								$contenuto_link_sito=fread($handle, filesize($filename));
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
					$filename="";
					$hu="";         
                    if($contenuto_link_sito !=  ""){
                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                            $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                            $part_url_transform2="$resend_toppersystem";
                            $part_url_transform3=urlencode(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                            $part_url_transform4=urlencode("$resend_toppersystem");
                            $contenuto_link_sito=str_replace("$part_url_transform1","$part_url_transform2",$contenuto_link_sito);
                            $contenuto_link_sito=str_replace("$part_url_transform3","$part_url_transform4",$contenuto_link_sito);
                            unset($part_url_transform1);
                            unset($part_url_transform2);
                            unset($part_url_transform3);
                            unset($part_url_transform4);
                        } 

						$newcontenttype="";
						if(isset($_SERVER['HTTP_USER_AGENT'])){
							$http_user_agent=$_SERVER['HTTP_USER_AGENT'];
						}else{
							$http_user_agent="";
						}
						if($http_user_agent != ""){
							if (strstr($http_user_agent, 'Safari') !== false) {
								if ((preg_match('/Version\/(?P<version>[0-9]{1})/', $http_user_agent, $parameters)) && ($parameters['version'] >= 6)) {            
									if(extension_loaded('imagick') || class_exists("Imagick")){
										$newcontenttype="jp2";
									}
								}
								if(is_array($parameters)){$parameters=array();}else{unset($parameters);}
							}
                            if($newcontenttype == ""){
                                if(str_replace("CriOS","",$http_user_agent) == "$http_user_agent"){
	                                if (preg_match('/iPhone|iPod|iPad/', $http_user_agent)) {
		                                $aresult = explode('/', stristr($http_user_agent, 'Version'));
		                                if (isset($aresult[1])) {
			                                $version=explode(' ', $aresult[1])[0];
			                                if($version >= 5.1){
									            if(extension_loaded('imagick') || class_exists("Imagick")){
										            $newcontenttype="jp2";
									            }
			                                }
			                                unset($version);
		                                }
		                                $aresult=array();
	                                }
                                }
                            }
						}
						if($newcontenttype == ""){
							if(isset($_SERVER['HTTP_ACCEPT'])){
								if (true == strpos($_SERVER['HTTP_ACCEPT'], 'image/webp')) {
								  $newcontenttype="webp";
								}else if (false == strpos($_SERVER['HTTP_ACCEPT'], 'image/webp')) {
								  $newcontenttype="";
								}else{
								  $newcontenttype="";
								}
							}else{
								if($http_user_agent != ""){
									$browser=TopperSystemSetMainFunction::get_browser_name_ts($http_user_agent); 
									if($browser == "Chrome"){
										$newcontenttype="webp";
									}else if($browser == "Firefox"){
										$newcontenttype="webp";
									}else if($browser == "Edge"){
										$newcontenttype="webp";
									}else if($browser == "Opera"){
										$newcontenttype="webp";
									}else if($browser == "[Bot] Googlebot"){
										$newcontenttype="webp";
									}else{
										$newcontenttype="";
									}
									unset($browser);
								}else{
								  $newcontenttype="";
								}
							}
						}
						unset($http_user_agent);
#####################
                        $return=str_replace("</body>", "<input type=\"hidden\" id=\"credits_toppersystem\" name=\"credits_toppersystem\" value=\"Topper System SEO\"></body>", $contenuto_link_sito);

                        $return=str_replace("?actimgts=render&src=", "?actimgts=render&r=$newcontenttype&src=", $return);                        
                        $lazyloadingts=TOPPERSYSTEM_PLUGIN_GET_lazyloadingts;
                        if($lazyloadingts == "1"){
                            if($newcontenttype != ""){
                                if(str_replace("lazy_toppersystem","",$return) != "$return"){
                                    $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/loaderpage.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION, $return);
                                }else{
                                    if ( ! defined( 'TOPPERSYSTEM_PLUGIN_VERSION_lazyloading_ts' ) ) {
                                        $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/lazyloading_ts.js?ver=".TopperSystemSetMainFunction::get_filetime_res_ts("js","lazyloading_ts.js"), $return);
                                    }else{
                                        $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/lazyloading_ts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION_lazyloading_ts, $return);
                                    }
                                }
                            }else{
                                $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/loaderpage.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION, $return);
                            }
                        }else{
                            $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/loaderpage.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION, $return);
                        }
						unset($lazyloadingts);
                        $co2applicationts=TOPPERSYSTEM_PLUGIN_GET_co2application;
                        if($co2applicationts == "1"){
                            if(str_replace("toppersystemLazyLoadScripts","",$return) != "$return"){                          
                                $return_co2app=str_replace("</head>", "<script type=\"toppersystemlazyloadscript\" id=\"co2appts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/co2appts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" defer></script></head>", $return);
                                if($return_co2app != "$return"){
                                    $return="$return_co2app";                                
                                }else{
                                    $return=str_replace("</html>", "<script type=\"toppersystemlazyloadscript\" id=\"co2ts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/co2ts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $return);
                                }
                            }else{
                                $return_co2app=str_replace("</head>", "<script id=\"co2appts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/co2appts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" defer></script></head>", $return);
                                if($return_co2app != "$return"){
                                    $return="$return_co2app";                                
                                }else{
                                    $return=str_replace("</html>", "<script id=\"co2ts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/co2ts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $return);
                                }
                            }
                            unset($return_co2app);
						    $return=str_replace("</body>", "<input type=\"hidden\" id=\"rsdts\" name=\"rsdts\" value=\"$resend_toppersystem\"><input type=\"hidden\" id=\"rsdajxts\" name=\"rsdajxts\" value=\"".admin_url( 'admin-ajax.php' )."\"><input type=\"hidden\" id=\"rsdcts\" name=\"rsdcts\" value=\"$resendCentraltoppersystem\"><input type=\"hidden\" id=\"clhts\" name=\"clhts\" value=\"0\"></body>", $return);
                        }
						unset($newcontenttype);
                        unset($co2applicationts);

                        if(str_replace("/loader.css","",$return) != "$return"){
                            if ( ! defined( 'TOPPERSYSTEM_PLUGIN_VERSION_loaderts' ) ) {
                                $return=str_replace($resendCentraltoppersystem."toppersystem/css/loader.css", $resendCentraltoppersystem."toppersystem/css/loader.css?ver=".TopperSystemSetMainFunction::get_filetime_res_ts("css","loader.css"), $return);
                            }else{
						        $return=str_replace($resendCentraltoppersystem."toppersystem/css/loader.css", $resendCentraltoppersystem."toppersystem/css/loader.css?ver=".TOPPERSYSTEM_PLUGIN_VERSION_loaderts, $return);
                            }
                        }
                        $return=str_replace("</body>", "<input type=\"hidden\" id=\"auurlts\" name=\"auurlts\" value=\"$url\"></body>", $return);

						if((str_replace(array("\"$url\"","'$url'"),"",$return) == "$return")||($toppersystem_page_preview == "1")){
							$return=str_replace(array("index,follow","index, follow","noindex,nofollow","noindex, nofollow","noindex,follow","noindex, follow","index,nofollow","index, nofollow"),"noindex,follow",$return);
						}else{
                            $activateautoupdatets=TOPPERSYSTEM_PLUGIN_GET_activateautoupdatets;
                            if($activateautoupdatets == "1"){
                                if(($url != "")&&($return != "")&&($old_size_page != "")&&($old_size_page > 0)){
                                $date = new DateTime("$old_update_page");
                                $data_last_update=$date->format('U');
                                if($data_last_update < date("U") - intval(TOPPERSYSTEM_PLUGIN_GET_timesautoupdate_user)){
                                    if(str_replace("toppersystemLazyLoadScripts","",$return) != "$return"){
                                        $return=str_replace("</html>", "<script type=\"toppersystemlazyloadscript\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/automatic_update.min.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $return);
                                    }else{
                                        $return=str_replace("</html>", "<script src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/automatic_update.min.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $return);
                                    }
                                    $return=str_replace("</body>", "<input type=\"hidden\" id=\"aursdts\" name=\"aursdts\" value=\"$resend_toppersystem\"><input type=\"hidden\" id=\"aursseddts\" name=\"aursseddts\" value=\"$resendCentraltoppersystem\"><input type=\"hidden\" id=\"oldchartnumberts\" name=\"oldchartnumberts\" value=\"$old_size_page\"><input type=\"hidden\" id=\"auajaxts\" name=\"auajaxts\" value=\"".admin_url( 'admin-ajax.php' )."\"></body>", $return);
                                }
                                unset($date);
                                unset($data_last_update);

                                }
                            }
                            unset($activateautoupdatets);
                        } 

                    }else{
                        $return="";
                    }
					unset($contenuto_link_sito);
				}else{
					$return="";
				}
                unset($old_size_page);
                unset($old_update_page);
				unset($nome_file);
				unset($url);
				unset($resend_toppersystem);
				unset($resendCentraltoppersystem);
                unset($toppersystem_page_preview);
				return $return;
			}
		
			public static function rendering_toppersystem($output,$url,$resend_toppersystem,$nome_file,$toppersystem_page_preview,$old_size_page,$old_update_page,$resendCentraltoppersystem){
				if((str_replace(array("\"$url\"","'$url'"),"",$output) != "$output")&&(count($_POST) == "0")){
                    if($toppersystem_page_preview == "1"){
                        $filename=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/db/$nome_file";

					    if(file_exists($filename)){
						    $handle = fopen($filename, "r");
						    if (FALSE === $handle) {
							    $contenuto_link_sito="";
						    }else{
							    $filesize=filesize($filename);
							    if($filesize == 0){ 
								    $contenuto_link_sito="";
							    }else if(($filesize >= 1)&&($filesize <= 8192)){    
								    $contenuto_link_sito=fread($handle, filesize($filename));
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
					    $filename="";
					    $hu="";         
                    }else{
                        if(str_replace("<input type=\"hidden\" id=\"credits_toppersystem\" name=\"credits_toppersystem\" value=\"Topper System SEO\">","",$output) != "$output"){
                            $contenuto_link_sito="$output";
                        }else{
                            $contenuto_link_sito="";
                        }
                    }
					if($contenuto_link_sito != ""){

						$return=str_replace($output, $contenuto_link_sito, $output);

                        if($toppersystem_page_preview == "1"){
                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                $part_url_transform2="$resend_toppersystem";
                                $part_url_transform3=urlencode(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                $part_url_transform4=urlencode("$resend_toppersystem");
                                $contenuto_link_sito=str_replace("$part_url_transform1","$part_url_transform2",$contenuto_link_sito);
                                $contenuto_link_sito=str_replace("$part_url_transform3","$part_url_transform4",$contenuto_link_sito);
                                unset($part_url_transform1);
                                unset($part_url_transform2);
                                unset($part_url_transform3);
                                unset($part_url_transform4);
                            } 

						    $newcontenttype="";
						    if(isset($_SERVER['HTTP_USER_AGENT'])){
							    $http_user_agent=$_SERVER['HTTP_USER_AGENT'];
						    }else{
							    $http_user_agent="";
						    }
						    if($http_user_agent != ""){
							    if (strstr($http_user_agent, 'Safari') !== false) {
								    if ((preg_match('/Version\/(?P<version>[0-9]{1})/', $http_user_agent, $parameters)) && ($parameters['version'] >= 6)) {            
									    if(extension_loaded('imagick') || class_exists("Imagick")){
										    $newcontenttype="jp2";
									    }
								    }
								    if(is_array($parameters)){$parameters=array();}else{unset($parameters);}
							    }
                                if($newcontenttype == ""){
                                    if(str_replace("CriOS","",$http_user_agent) == "$http_user_agent"){
	                                    if (preg_match('/iPhone|iPod|iPad/', $http_user_agent)) {
		                                    $aresult = explode('/', stristr($http_user_agent, 'Version'));
		                                    if (isset($aresult[1])) {
			                                    $version=explode(' ', $aresult[1])[0];
			                                    if($version >= 5.1){
									                if(extension_loaded('imagick') || class_exists("Imagick")){
										                $newcontenttype="jp2";
									                }
			                                    }
			                                    unset($version);
		                                    }
		                                    $aresult=array();
	                                    }
                                    }
                                }
						    }
						    if($newcontenttype == ""){
							    if(isset($_SERVER['HTTP_ACCEPT'])){
								    if (true == strpos($_SERVER['HTTP_ACCEPT'], 'image/webp')) {
								      $newcontenttype="webp";
								    }else if (false == strpos($_SERVER['HTTP_ACCEPT'], 'image/webp')) {
								      $newcontenttype="";
								    }else{
								      $newcontenttype="";
								    }
							    }else{
								    if($http_user_agent != ""){
									    $browser=TopperSystemSetMainFunction::get_browser_name_ts($http_user_agent); 
									    if($browser == "Chrome"){
										    $newcontenttype="webp";
									    }else if($browser == "Firefox"){
										    $newcontenttype="webp";
									    }else if($browser == "Edge"){
										    $newcontenttype="webp";
									    }else if($browser == "Opera"){
										    $newcontenttype="webp";
									    }else if($browser == "[Bot] Googlebot"){
										    $newcontenttype="webp";
									    }else{
										    $newcontenttype="";
									    }
									    unset($browser);
								    }else{
								      $newcontenttype="";
								    }
							    }
						    }
						    unset($http_user_agent);

                            $return=str_replace("?actimgts=render&src=", "?actimgts=render&r=$newcontenttype&src=", $return);                        
                            $lazyloadingts=TOPPERSYSTEM_PLUGIN_GET_lazyloadingts;
                            if($lazyloadingts == "1"){
                                if($newcontenttype != ""){
                                    if(str_replace("lazy_toppersystem","",$return) != "$return"){
                                        $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/loaderpage.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION, $return);
                                    }else{
                                        $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/lazyloading_ts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION_lazyloading_ts, $return);
                                    }
                                }else{
                                    $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/loaderpage.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION, $return);
                                }
                            }else{
                                $return=str_replace($resendCentraltoppersystem."toppersystem/js/loaderpage.js", $resendCentraltoppersystem."toppersystem/js/loaderpage.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION, $return);
                            }
						    unset($lazyloadingts);
                            $co2applicationts=TOPPERSYSTEM_PLUGIN_GET_co2application;
                            if($co2applicationts == "1"){
                                if(str_replace("toppersystemLazyLoadScripts","",$return) != "$return"){                          
                                    $return_co2app=str_replace("</head>", "<script type=\"toppersystemlazyloadscript\" id=\"co2appts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/co2appts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" defer></script></head>", $return);
                                    if($return_co2app != "$return"){
                                        $return="$return_co2app";                                
                                    }else{
                                        $return=str_replace("</html>", "<script type=\"toppersystemlazyloadscript\" id=\"co2ts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/co2ts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $return);
                                    }
                                }else{
                                    $return_co2app=str_replace("</head>", "<script id=\"co2appts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/co2appts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" defer></script></head>", $return);
                                    if($return_co2app != "$return"){
                                        $return="$return_co2app";                                
                                    }else{
                                        $return=str_replace("</html>", "<script id=\"co2ts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/co2ts.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $return);
                                    }
                                }
                                unset($return_co2app);
						        $return=str_replace("</body>", "<input type=\"hidden\" id=\"rsdts\" name=\"rsdts\" value=\"$resend_toppersystem\"><input type=\"hidden\" id=\"rsdajxts\" name=\"rsdajxts\" value=\"".admin_url( 'admin-ajax.php' )."\"><input type=\"hidden\" id=\"rsdcts\" name=\"rsdcts\" value=\"$resendCentraltoppersystem\"><input type=\"hidden\" id=\"clhts\" name=\"clhts\" value=\"0\"></body>", $return);
                            }
						    unset($newcontenttype);
                            unset($co2applicationts);
						    $return=str_replace($resendCentraltoppersystem."toppersystem/css/loader.css", $resendCentraltoppersystem."toppersystem/css/loader.css?ver=".TOPPERSYSTEM_PLUGIN_VERSION_loaderts, $return);
                            $return=str_replace("</body>", "<input type=\"hidden\" id=\"auurlts\" name=\"auurlts\" value=\"$url\"></body>", $return);

						    if((str_replace(array("\"$url\"","'$url'"),"",$return) == "$return")||($toppersystem_page_preview == "1")){
							    $return=str_replace(array("index,follow","index, follow","noindex,nofollow","noindex, nofollow","noindex,follow","noindex, follow","index,nofollow","index, nofollow"),"noindex,follow",$return);
						    }else{
                                $activateautoupdatets=TOPPERSYSTEM_PLUGIN_GET_activateautoupdatets;
                                if($activateautoupdatets == "1"){
                                    if(($url != "")&&($return != "")&&($return != "$output")&&($old_size_page != "")&&($old_size_page > 0)){
                                    $date = new DateTime("$old_update_page");
                                    $data_last_update=$date->format('U');
                                    if($data_last_update < date("U") - intval(TOPPERSYSTEM_PLUGIN_GET_timesautoupdate_user)){
                                        if(str_replace("toppersystemLazyLoadScripts","",$return) != "$return"){
                                            $return=str_replace("</html>", "<script type=\"toppersystemlazyloadscript\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/automatic_update.min.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $return);
                                        }else{
                                            $return=str_replace("</html>", "<script src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/automatic_update.min.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $return);
                                        }
                                        $return=str_replace("</body>", "<input type=\"hidden\" id=\"aursdts\" name=\"aursdts\" value=\"$resend_toppersystem\"><input type=\"hidden\" id=\"aursseddts\" name=\"aursseddts\" value=\"$resendCentraltoppersystem\"><input type=\"hidden\" id=\"oldchartnumberts\" name=\"oldchartnumberts\" value=\"$old_size_page\"><input type=\"hidden\" id=\"auajaxts\" name=\"auajaxts\" value=\"".admin_url( 'admin-ajax.php' )."\"></body>", $return);
                                    }
                                    unset($date);
                                    unset($data_last_update);

                                    }
                                }
                                unset($activateautoupdatets);
                            } 
                        }
					}else{
						$return=$output;
					}
					unset($contenuto_link_sito);
				}else{
					$return=$output;
					$return=str_replace(array("index,follow","index, follow","noindex,nofollow","noindex, nofollow","noindex,follow","noindex, follow","index,nofollow","index, nofollow"),"noindex,follow",$return);
				}
                unset($old_size_page);
                unset($old_update_page);
				unset($output);
				unset($nome_file);
				unset($url);
				unset($resend_toppersystem);
				unset($resendCentraltoppersystem);
                unset($toppersystem_page_preview);
				return $return;
			}

			public static function add_smartlazyloading_toppersystem($return,$resend_toppersystem,$resendCentraltoppersystem){
                $lazyloadingts=TOPPERSYSTEM_PLUGIN_GET_lazyloadingts;
                if($lazyloadingts == "1"){				
					if(str_replace(array("js/smartlazyloading_ts.js","toppersystem/js/loaderpage.js","toppersystem/js/lazyloading_ts.js"),"",$return) == "$return"){
                        if ( ! defined( 'TOPPERSYSTEM_PLUGIN_VERSION_smartlazyloading_ts' ) ) {
                            $ts_date=TopperSystemSetMainFunction::get_filetime_res_ts("js","smartlazyloading_ts.js");
                        }else{
                            $ts_date=TOPPERSYSTEM_PLUGIN_VERSION_smartlazyloading_ts;
                        }
						$return=str_replace("</head>", "<link rel=\"preload\" href=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/smartlazyloading_ts.js?ver=".$ts_date."\" as=\"script\" /></head>", $return);					
						$return=str_replace("</body>", "<script id=\"smartlazyloading_ts\" src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/smartlazyloading_ts.js?ver=".$ts_date."\" defer=\"defer\"></script></body>", $return);
                        unset($ts_date);
					}
				}
				unset($lazyloadingts);
				return $return;
			}

			public static function verify_modify_t_d($list_template_toppersystem_string,$table_options_d,$record_options_d1,$record_options_d2,$option_name_ins_ts,$val_search_option_name_ins_ts,$page_admin_redirect_on_ins_ts,$page_admin_redirect_no_ins_ts,$new_val_db_ins_ts){
				$returnv_write="";
				$mod_css_toppersystem="";
				if(($list_template_toppersystem_string == "divi")||($list_template_toppersystem_string == "extra")){
					global $wpdb;		
					if ( null !== $wpdb ) {
						if(($table_options_d != "")&&($record_options_d1 != "")&&($record_options_d2 != "")&&($option_name_ins_ts != "")&&($val_search_option_name_ins_ts != "")&&($page_admin_redirect_on_ins_ts != "")&&($page_admin_redirect_no_ins_ts != "")&&($new_val_db_ins_ts != "")){						
							$option_name="$option_name_ins_ts";
							$val_search_option_name="$val_search_option_name_ins_ts";
							$page_admin_redirect_on="admin.php?page=$page_admin_redirect_on_ins_ts";
							$page_admin_redirect_no="admin.php?page=$page_admin_redirect_no_ins_ts";				
							$new_val_db="$new_val_db_ins_ts";							
						}else{
							$option_name="";
						}

						if($option_name != ""){
							$returnv="no";
							$postsss = $wpdb->get_results("SELECT $record_options_d2 FROM $table_options_d WHERE $record_options_d1=$option_name LIMIT 0,1");
							if(count($postsss) == "1"){			
								$postsss_var=@var_export($postsss, true);
								$postsss_var=str_replace("\n","",$postsss_var);
								$postsss_var=str_replace("array (","",$postsss_var);
								$postsss_var=str_replace("0 =>","",$postsss_var);
								$postsss_var=str_replace("(object)","",$postsss_var);
								$postsss_var=str_replace("array(","",$postsss_var);
								$postsss_var=str_replace("'$record_options_d2' => '","",$postsss_var);
								$postsss_var=str_replace("'$record_options_d2' => '","",$postsss_var);
								$postsss_var=str_replace("),)","",$postsss_var);
								$postsss_var=str_replace("}',","}",$postsss_var);
								$postsss_var=trim($postsss_var);

								if(str_replace("$val_search_option_name","",$postsss_var) != "$postsss_var"){
									$explode_postsss_var=explode("$val_search_option_name",$postsss_var);
									if((isset($explode_postsss_var["1"]))&&(trim($explode_postsss_var["1"]) != "")){
										$explode_postsss_var_partok=$explode_postsss_var["1"];

										$explode_postsss_var2=explode("\";",$explode_postsss_var_partok);
										if((isset($explode_postsss_var2["1"]))&&(trim($explode_postsss_var2["1"]) != "")){
											$explode_postsss_var_partok2=$explode_postsss_var2["1"];
											if(str_replace("on","",$explode_postsss_var_partok2) != "$explode_postsss_var_partok2"){
												$returnv="on";		
											}else if(str_replace("false","",$explode_postsss_var_partok2) != "$explode_postsss_var_partok2"){
												$returnv="false";
											}else{
												$returnv="no";
											}
										}
                                        if(is_array($explode_postsss_var2)){$explode_postsss_var2=array();}else{$explode_postsss_var2=""; unset($explode_postsss_var2);}
                                        unset($explode_postsss_var_partok);
									}
                                    if(is_array($explode_postsss_var)){$explode_postsss_var=array();}else{$explode_postsss_var=""; unset($explode_postsss_var);}
								}
							}
                            if(is_array($postsss)){$postsss=array();}else{$postsss=""; unset($postsss);}
						}else{
							$returnv="";
						}
					}else{
						$returnv="no";
					}

					if($returnv == "on"){
						$returnv_write=admin_url($page_admin_redirect_on);

						$valor_rewrite="\"$val_search_option_name\";$explode_postsss_var_partok2\";";
						if(str_replace("$valor_rewrite","",$postsss_var) != "$postsss_var"){				
							$postsss_var_new=str_replace("$valor_rewrite","$new_val_db",$postsss_var);
							$postsss_var_new_count_puntoevirgola=count(explode(";",$postsss_var_new));
							$postsss_var_new_count_duepunti=count(explode(":",$postsss_var_new));
							
							$postsss_var_count_puntoevirgola=count(explode(";",$postsss_var));
							$postsss_var_count_duepunti=count(explode(":",$postsss_var));							
							
							if(($postsss_var != "$postsss_var_new")&&($postsss_var_new_count_puntoevirgola == "$postsss_var_count_puntoevirgola")&&($postsss_var_new_count_duepunti == "$postsss_var_count_duepunti")){
								$wpdb->query($wpdb->prepare("UPDATE $table_options_d SET $record_options_d2='$postsss_var_new' WHERE $record_options_d1=$option_name"));

								$postsssnew = $wpdb->get_results("SELECT $record_options_d2 FROM $table_options_d WHERE $record_options_d1=$option_name LIMIT 0,1");
								if(count($postsssnew) == "1"){			
									$postsssnew_var=@var_export($postsssnew, true);
									$postsssnew_var=str_replace("\n","",$postsssnew_var);
									$postsssnew_var=str_replace("array (","",$postsssnew_var);
									$postsssnew_var=str_replace("0 =>","",$postsssnew_var);
									$postsssnew_var=str_replace("(object)","",$postsssnew_var);
									$postsssnew_var=str_replace("array(","",$postsssnew_var);
									$postsssnew_var=str_replace("'$record_options_d2' => '","",$postsssnew_var);
									$postsssnew_var=str_replace("),)","",$postsssnew_var);
									$postsssnew_var=str_replace("}',","}",$postsssnew_var);
									$postsssnew_var=trim($postsssnew_var);

									if($postsssnew_var == "$postsss_var_new"){
										$returnv_write=admin_url('admin.php?page=toppersystem');
										$mod_css_toppersystem="ok";	
									}
								}
                                if(is_array($postsssnew)){$postsssnew=array();}else{$postsssnew=""; unset($postsssnew);}				
							}#else{
								#$returnv="no";
								#$returnv_write=admin_url($page_admin_redirect_no);
							#}
						}
					}else if($returnv == "no"){
						$returnv_write=admin_url($page_admin_redirect_no);			
					}else{
						$returnv_write="";
					}

				}else{
					$returnv_write="";
				}

                $list_template_toppersystem_string="";
                $table_options_d="";
                $record_options_d1="";
                $record_options_d2="";
                $option_name_ins_ts="";
                $val_search_option_name_ins_ts="";
                $page_admin_redirect_on_ins_ts="";
                $page_admin_redirect_no_ins_ts="";
                $new_val_db_ins_ts="";
                $option_name="";
                $val_search_option_name="";
                $page_admin_redirect_on="";
                $page_admin_redirect_no="";				
                $new_val_db="";
                $returnv="";
                $postsss_var="";
                $explode_postsss_var_partok2="";
                $valor_rewrite="";
                $postsss_var_new="";
                $postsss_var_new_count_puntoevirgola="";
                $postsss_var_new_count_duepunti="";
                $postsss_var_count_puntoevirgola="";
                $postsss_var_count_duepunti="";
                $postsssnew="";

                unset($list_template_toppersystem_string);
                unset($table_options_d);
                unset($record_options_d1);
                unset($record_options_d2);
                unset($option_name_ins_ts);
                unset($val_search_option_name_ins_ts);
                unset($page_admin_redirect_on_ins_ts);
                unset($page_admin_redirect_no_ins_ts);
                unset($new_val_db_ins_ts);
                unset($option_name);
                unset($val_search_option_name);
                unset($page_admin_redirect_on);
                unset($page_admin_redirect_no);
                unset($new_val_db);
                unset($returnv);
                unset($postsss_var);
                unset($explode_postsss_var_partok2);
                unset($valor_rewrite);
                unset($postsss_var_new);
                unset($postsss_var_new_count_puntoevirgola);
                unset($postsss_var_new_count_duepunti);
                unset($postsss_var_count_puntoevirgola);
                unset($postsss_var_count_duepunti);
                unset($postsssnew);

				return array("$returnv_write","$mod_css_toppersystem");
			}

			public static function go_to_delete_minify_toppersystem($mod_css_toppersystem){
				if($mod_css_toppersystem == "ok"){
					if(trim(TopperSystemAuthTS::AuthTopperSystem()) != ""){
						if ( ! defined( 'TOPPERSYSTEM_PLUGIN_MOD_REQUEST' ) ) {
							$postdata = http_build_query(
								array(
									"action" => "componentstoppersystem33ajax",
									"tsaction" => "delete",
									"a" => trim(TopperSystemAuthTS::AuthTopperSystem()),
									"toppersystem_update" => true
								)
							);
							$opts = array('http' =>
								array(
									'method'  => 'POST',
									'header'  => 'Content-type: application/x-www-form-urlencoded',
									'content' => $postdata
								)
							);
							$context=stream_context_create($opts);
							$go=@file_get_contents(admin_url( 'admin-ajax.php' ), false, $context);
							unset($go);
							$opts=array();
							unset($postdata);
							unset($context);
						}else{
							$fields = array(
								"action" => "componentstoppersystem33ajax",
								"tsaction" => "delete",
								"a" => trim(TopperSystemAuthTS::AuthTopperSystem()),
								"toppersystem_update" => true
							);
							$go=@TopperSystemSetMainFunction::file_curl_post_ts_contents(admin_url( 'admin-ajax.php' ), $fields);
							unset($go);
							$fields=array();
						}
					}	
				}
                $mod_css_toppersystem="";
                unset($mod_css_toppersystem);
				return "ok";
			}
				
			public static function start_verify_modify_t_d($list_template_toppersystem_string,$hreflang_toppersystem,$list_plugin_toppersystem_string,$list_version_toppersystem_string,$list_charset_toppersystem_string,$list_phpversion_toppersystem_string,$list_gethostname_toppersystem_string){
				$return="";
				if($hreflang_toppersystem == "it"){    
					$txtts9="ti risponderemo tra le 24/48 ore per aiutarti nella messa a punto.";
					$txtts10="Ciao Topper System SEO,";
					$txtts11="ti contatto per chidere assistenza a utilizzare il plugin sul il mio sito";
					$txtts12="Plugins attivi:";
					$txtts14="Template:";
					$txtts15="Versione Wordpress:";
					$txtts16="Chartset WP impostato:";
					$txtts17="Versione PHP:";
					$txtts18="Host Name:";
					$txtts19="Grazie per il vostro supporto, saluti";
					$txtts20="Richiesta supporto tecnico COD. 01 Divi/Extra:";
					$txtts0="Abbiamo disattivato automaticamente la funzione \"Critcal CSS\" del tema Divi"; 
					$txtts1="Disattiva subito la funzione \"Critcal CSS\" del tema Divi";
					$txtts2="Abbiamo disattivato automaticamente la funzione \"Dynamic CSS\" del tema Divi";
					$txtts3="Disattiva subito la funzione \"Dynamic CSS\" del tema Divi";
					$txtts4="Abbiamo disattivato automaticamente la funzione \"Dynamic Icons\" del tema Divi";
					$txtts5="Disattiva subito la funzione \"Dynamic Icons\" del tema Divi";
					$txtts6="Abbiamo disattivato automaticamente la funzione \"Load Dynamic Stylesheet In-line\" del tema Divi";
					$txtts7="Disattiva subito la funzione \"Load Dynamic Stylesheet In-line\" del tema Divi";
					$txtts8="Abbiamo disattivato automaticamente la funzione \"Enable Divi Gallery\" del tema Divi";
					$txtts21="Disattiva subito la funzione \"Enable Divi Gallery\" del tema Divi";
					$txtts22="Per disattivare manualmete le funzioni del tema Divi:";
					$txtts23="Clicca qui";
					$txtts24="Subito dopo aver disabilitato le funzioni elencate procedi a ottimizzare le pagine con Topper System SEO";
					$txtts25="Ti consigliamo di ottimizzare subito le pagine con Topper System SEO:";
					$txtts26="Info";
					$txtts27="Abbiamo disattivato automaticamente la funzione \"Critcal CSS\" del tema Extra di Divi";
					$txtts28="Disattiva subito la funzione \"Critcal CSS\" del tema Extra di Divi";
					$txtts29="Abbiamo disattivato automaticamente la funzione \"Dynamic CSS\" del tema Extra di Divi";
					$txtts30="Disattiva subito la funzione \"Dynamic CSS\" del tema Extra di Divi";
					$txtts31="Abbiamo disattivato automaticamente la funzione \"Dynamic Icons\" del tema Extra di Divi";
					$txtts32="Disattiva subito la funzione \"Dynamic Icons\" del tema Extra di Divi";
					$txtts33="Abbiamo disattivato automaticamente la funzione \"Load Dynamic Stylesheet In-line\" del tema Extra di Divi";
					$txtts34="Disattiva subito la funzione \"Load Dynamic Stylesheet In-line\" del tema Extra di Divi";

                    $txtts40="\"Critcal CSS\" del tema Extra di Divi";
					$txtts41="\"Dynamic CSS\" del tema Extra di Divi";
					$txtts42="\"Dynamic Icons\" del tema Extra di Divi";
					$txtts43="\"Load Dynamic Stylesheet In-line\" del tema Extra di Divi";
                    $txtts44="Leader nelle ottimizzazioni dei siti web";
                    $txtts45="Per garantire le massime prestazioni e una perfetta compatibilità tra Topper System SEO e il tema Extra di Divi è necessario <strong><i><u>mantenere sempre disabilitate</u></i></strong> le seguenti funzionalità:";
                    $txtts46="Per garantire le massime prestazioni e una perfetta compatibilità tra Topper System SEO e il tema Divi è necessario <strong><i><u>mantenere sempre disabilitate</u></i></strong> le seguenti funzionalità:";
                    $txtts47="\"Critcal CSS\" del tema Divi";
                    $txtts48="\"Dynamic CSS\" del tema Divi";
                    $txtts49="\"Dynamic Icons\" del tema Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" del tema Divi";
                    $txtts51="\"Enable Divi Gallery\" del tema Divi";
				}else if($hreflang_toppersystem == "ar"){ 
					$txtts9="سوف نقوم بالرد خلال 24/48 ساعة لمساعدتك في الإعداد.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
					$txtts0="لقد قمنا تلقائيًا بتعطيل ميزة -Critcal CSS- الخاصة بسمة Divi"; 
					$txtts1="قم بتعطيل ميزة Divi theme -Critcal CSS- الآن";
					$txtts2="لقد قمنا تلقائيًا بتعطيل ميزة -Dynamic CSS- الخاصة بسمة Divi";
					$txtts3="قم بتعطيل ميزة Divi theme -Dynamic CSS- الآن";
					$txtts4="لقد قمنا تلقائيًا بتعطيل ميزة -Dynamic Icons- الخاصة بسمة Divi";
					$txtts5="تعطيل -Dynamic Icons- سمة Divi الآن";
					$txtts6="لقد قمنا تلقائيًا بتعطيل ميزة -Load Dynamic Stylesheet In-line- لموضوع Divi";
					$txtts7="قم بتعطيل ميزة -Load Dynamic Stylesheet In-line- الخاصة بموضوع Divi الآن";
					$txtts8="لقد قمنا تلقائيًا بتعطيل ميزة -Enable Divi Gallery- لموضوع Divi";
					$txtts21="قم بتعطيل ميزة Divi theme's -Enable Divi Gallery- الآن";
					$txtts22="لتعطيل ميزات سمة Divi يدويًا:";
					$txtts23="انقر هنا";
					$txtts24="مباشرة بعد تعطيل الوظائف المدرجة ، تابع تحسين الصفحات باستخدام Topper System SEO";
					$txtts25="نوصي بتحسين صفحاتك باستخدام Topper System SEO الآن:";
					$txtts26="معلومات";
					$txtts27="لقد قمنا تلقائيًا بتعطيل ميزة -Critcal CSS- لموضوع Divi Extra";
					$txtts28="قم بتعطيل ميزة Divi Extra theme -Critcal CSS- الآن";
					$txtts29="لقد قمنا تلقائيًا بتعطيل ميزة -Dynamic CSS- لموضوع Divi Extra";
					$txtts30="تعطيل -Dynamic CSS- ميزة Divi Extra Theme الآن";
					$txtts31="لقد قمنا تلقائيًا بتعطيل ميزة -Dynamic Icons- الخاصة بموضوع Divi Extra";
					$txtts32="قم بتعطيل -Dynamic Icons- سمة Divi Extra الآن";
					$txtts33="لقد قمنا تلقائيًا بتعطيل ميزة -Load Dynamic Stylesheet In-line- لموضوع Divi Extra";
					$txtts34="قم بتعطيل ميزة -Load Dynamic Stylesheet In-line- لموضوع Divi Extra الآن";
                    $txtts40="\"Critcal CSS\" من الموضوع Divi Extra";
					$txtts41="\"Dynamic CSS\" من الموضوع Divi Extra";
					$txtts42="\"Dynamic Icons\" من الموضوع Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" من الموضوع Divi Extra";
                    $txtts44="رائدة في تحسين موقع الويب";
                    $txtts45="لضمان أقصى قدر من الأداء والتوافق المثالي بين Topper System SEO وموضوع Divi Extra، يجب عليك <strong><i><u>تعطيل الميزات التالية دائمًا</u></i></strong>:";
                    $txtts46="لضمان أقصى قدر من الأداء والتوافق المثالي بين Topper System SEO وموضوع Divi، من الضروري <strong><i><u>تعطيل الميزات التالية دائمًا</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" من الموضوع Divi";
                    $txtts48="\"Dynamic CSS\" من الموضوع Divi";
                    $txtts49="\"Dynamic Icons\" من الموضوع Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" من الموضوع Divi";
                    $txtts51="\"Enable Divi Gallery\" من الموضوع Divi";
				}else if($hreflang_toppersystem == "de"){ 
					$txtts9="Wir werden innerhalb von 24/48 Stunden antworten, um Ihnen bei der Einrichtung zu helfen.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="Wir haben die \"Critcal CSS\"-Funktion des Divi-Themes automatisch deaktiviert";
                    $txtts1="Deaktivieren Sie jetzt die Funktion \"Critcal CSS\" des Divi-Themes";
                    $txtts2="Wir haben die Funktion \"Dynamisches CSS\" des Divi-Themes automatisch deaktiviert";
                    $txtts3="Deaktivieren Sie jetzt die Funktion \"Dynamisches CSS\" des Divi-Themes";
                    $txtts4="Wir haben die Funktion \"Dynamische Symbole\" des Divi-Themes automatisch deaktiviert";
                    $txtts5="Deaktivieren Sie jetzt die Funktion \"Dynamische Symbole\" des Divi-Themes";
                    $txtts6="Wir haben die Funktion \"Dynamisches Stylesheet Inline laden\" des Divi-Themes automatisch deaktiviert";
                    $txtts7="Deaktivieren Sie jetzt die Funktion \"Dynamisches Stylesheet Inline laden\" des Divi-Themes";
                    $txtts8="Wir haben die Funktion \"Divi-Galerie aktivieren\" des Divi-Themes automatisch deaktiviert";
                    $txtts21="Deaktivieren Sie sofort die Funktion \"Divi-Galerie aktivieren\" des Divi-Designs";
                    $txtts22="So deaktivieren Sie Divi-Designfunktionen manuell:";
                    $txtts23="Hier klicken";
                    $txtts24="Unmittelbar nach der Deaktivierung der aufgeführten Funktionen fahren Sie mit der Optimierung der Seiten mit Topper System SEO fort";
                    $txtts25="Wir empfehlen Ihnen, Ihre Seiten jetzt mit Topper System SEO zu optimieren:";
                    $txtts26="Info";
                    $txtts27="Wir haben die \"Critcal CSS\"-Funktion des Divi Extra-Themes automatisch deaktiviert";
                    $txtts28="Deaktivieren Sie jetzt das Divi Extra-Theme \"Critcal CSS\"";
                    $txtts29="Wir haben die Funktion \"Dynamisches CSS\" des Divi-Extra-Themes automatisch deaktiviert";
                    $txtts30="Deaktivieren Sie jetzt die Funktion \"Dynamisches CSS\" des Divi-Extra-Themes";
                    $txtts31="Wir haben die Funktion \"Dynamische Symbole\" des Divi Extra-Designs automatisch deaktiviert";
                    $txtts32="Deaktivieren Sie sofort die Funktion \"Dynamische Symbole\" des Divi-Extra-Designs";
                    $txtts33="Wir haben die Funktion \"Dynamisches Stylesheet Inline laden\" des Divi-Extra-Themes automatisch deaktiviert";
                    $txtts34="Deaktivieren Sie sofort die Funktion \"Dynamisches Stylesheet Inline laden\" des Divi-Extra-Designs";
                    $txtts40="\"Critcal CSS\" des Themas Divi Extra";
					$txtts41="\"Dynamic CSS\" des Themas Divi Extra";
					$txtts42="\"Dynamic Icons\" des Themas Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" des Themas Divi Extra";
                    $txtts44="Führend in der Website-Optimierung";
                    $txtts45="Um maximale Leistung und perfekte Kompatibilität zwischen Topper System SEO und dem Divi Extra-Theme zu gewährleisten, müssen Sie <strong><i><u>die folgenden Funktionen immer deaktiviert lassen</u></i></strong>:";
                    $txtts46="Um maximale Leistung und perfekte Kompatibilität zwischen Topper System SEO und dem Divi-Theme zu gewährleisten, ist es notwendig, <strong><i><u>die folgenden Funktionen immer deaktiviert zu lassen</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" des Themas Divi";
                    $txtts48="\"Dynamic CSS\" des Themas Divi";
                    $txtts49="\"Dynamic Icons\" des Themas Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" des Themas Divi";
                    $txtts51="\"Enable Divi Gallery\" des Themas Divi";
				}else if($hreflang_toppersystem == "es"){ 
					$txtts9="le responderemos dentro de las 24/48 horas para ayudarlo a configurar.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="Hemos deshabilitado automáticamente la característica \"Critcal CSS\" del tema Divi";
                    $txtts1="Desactive ahora la función \"Critcal CSS\" del tema Divi";
                    $txtts2="Hemos deshabilitado automáticamente la función \"CSS dinámico\" del tema Divi";
                    $txtts3="Deshabilitar ahora la función \"CSS dinámico\" del tema Divi";
                    $txtts4="Hemos deshabilitado automáticamente la función \"Iconos dinámicos\" del tema Divi";
                    $txtts5="Desactive ahora la función \"Iconos dinámicos\" del tema Divi";
                    $txtts6="Hemos deshabilitado automáticamente la función \"Cargar hoja de estilo dinámica en línea\" del tema Divi";
                    $txtts7="Desactive ahora la función \"Cargar hoja de estilo dinámica en línea\" del tema Divi";
                    $txtts8="Hemos deshabilitado automáticamente la función \"Habilitar galería Divi\" del tema Divi";
                    $txtts21="Desactivar inmediatamente la función \"Activar galería Divi\" del tema Divi";
                    $txtts22="Para deshabilitar manualmente las funciones del tema Divi:";
                    $txtts23="Haga clic aquí";
                    $txtts24="Inmediatamente después de deshabilitar las funciones listadas proceder a optimizar las páginas con Topper System SEO";
                    $txtts25="Le recomendamos que optimice sus páginas con Topper System SEO ahora:";
                    $txtts26="Información";
                    $txtts27="Hemos deshabilitado automáticamente la característica \"Critcal CSS\" del tema Divi Extra";
                    $txtts28="Deshabilitar el tema Divi Extra \"Critcal CSS\" ahora";
                    $txtts29="Hemos deshabilitado automáticamente la función \"CSS dinámico\" del tema Divi Extra";
                    $txtts30="Deshabilitar ahora la función Divi Extra Theme \"Dynamic CSS\"";
                    $txtts31="Hemos deshabilitado automáticamente la función \"Iconos dinámicos\" del tema Divi Extra";
                    $txtts32="Desactivar inmediatamente la función \"Iconos dinámicos\" del tema Divi Extra";
                    $txtts33="Hemos deshabilitado automáticamente la función \"Cargar hoja de estilo dinámica en línea\" del tema Divi Extra";
                    $txtts34="Desactivar inmediatamente la función \"Cargar hoja de estilo dinámica en línea\" del tema Divi Extra";
                    $txtts40="\"Critcal CSS\" del tema Divi Extra";
					$txtts41="\"Dynamic CSS\" del tema Divi Extra";
					$txtts42="\"Dynamic Icons\" del tema Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" del tema Divi Extra";
                    $txtts44="Líder en optimización de sitios web";
                    $txtts45="Para garantizar el máximo rendimiento y la perfecta compatibilidad entre Topper System SEO y el tema Divi Extra, debes <strong><i><u>mantener siempre las siguientes funciones deshabilitadas</u></i></strong>:";
                    $txtts46="Para garantizar el máximo rendimiento y la perfecta compatibilidad entre Topper System SEO y el tema Divi es necesario <strong><i><u>mantener siempre las siguientes funciones deshabilitadas</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" del tema Divi";
                    $txtts48="\"Dynamic CSS\" del tema Divi";
                    $txtts49="\"Dynamic Icons\" del tema Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" del tema Divi";
                    $txtts51="\"Enable Divi Gallery\" del tema Divi";
				}else if($hreflang_toppersystem == "fr"){ 
					$txtts9="nous vous répondrons dans les 24/48 heures pour vous aider à configurer.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="Nous avons automatiquement désactivé la fonctionnalité \"Critique CSS\" du thème Divi";
                    $txtts1="Désactivez maintenant la fonctionnalité \"CSS critique\" du thème Divi";
                    $txtts2="Nous avons automatiquement désactivé la fonctionnalité \"CSS dynamique\" du thème Divi";
                    $txtts3="Désactivez la fonctionnalité Divi Theme \"Dynamic CSS\" maintenant";
                    $txtts4="Nous avons automatiquement désactivé la fonctionnalité \"Icônes dynamiques\" du thème Divi";
                    $txtts5="Désactivez maintenant la fonctionnalité \"Dynamic Icons\" du thème Divi";
                    $txtts6="Nous avons automatiquement désactivé la fonctionnalité \"Load Dynamic Stylesheet In-line\" du thème Divi";
                    $txtts7="Désactivez maintenant la fonctionnalité \"Charger la feuille de style dynamique en ligne\" du thème Divi";
                    $txtts8="Nous avons automatiquement désactivé la fonctionnalité \"Activer Divi Gallery\" du thème Divi";
                    $txtts21="Désactiver immédiatement la fonctionnalité \"Activer Divi Gallery\" du thème Divi";
                    $txtts22="Pour désactiver manuellement les fonctionnalités du thème Divi :";
                    $txtts23="Cliquez ici";
                    $txtts24="Immédiatement après la désactivation des fonctions répertoriées, procédez à l'optimisation des pages avec Topper System SEO";
                    $txtts25="Nous vous recommandons d'optimiser dès maintenant vos pages avec Topper System SEO :";
                    $txtts26="Infos";
                    $txtts27="Nous avons automatiquement désactivé la fonctionnalité \"Critcal CSS\" du thème Divi Extra";
                    $txtts28="Désactivez le thème Divi Extra \"Critcal CSS\" maintenant";
                    $txtts29="Nous avons automatiquement désactivé la fonctionnalité \"CSS dynamique\" du thème Divi Extra";
                    $txtts30="Désactivez maintenant la fonctionnalité \"CSS dynamique\" du thème Divi Extra";
                    $txtts31="Nous avons automatiquement désactivé la fonctionnalité \"Icônes dynamiques\" du thème Divi Extra";
                    $txtts32="Désactiver immédiatement la fonctionnalité \"Dynamic Icons\" du thème Divi Extra";
                    $txtts33="Nous avons automatiquement désactivé la fonctionnalité \"Load Dynamic Stylesheet In-line\" du thème Divi Extra";
                    $txtts34="Désactivez immédiatement la fonctionnalité \"Load Dynamic Stylesheet In-line\" du thème Divi Extra";
                    $txtts40="\"Critcal CSS\" du thème Divi Extra";
					$txtts41="\"Dynamic CSS\" du thème Divi Extra";
					$txtts42="\"Dynamic Icons\" du thème Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" du thème Divi Extra";
                    $txtts44="Leader en optimisation de sites Web";
                    $txtts45="Pour garantir des performances maximales et une parfaite compatibilité entre Topper System SEO et le thème Divi Extra, vous devez <strong><i><u>toujours garder les fonctionnalités suivantes désactivées</u></i></strong>:";
                    $txtts46="Pour assurer des performances maximales et une parfaite compatibilité entre Topper System SEO et le thème Divi il est nécessaire de <strong><i><u>toujours garder les fonctionnalités suivantes désactivées</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" du thème Divi";
                    $txtts48="\"Dynamic CSS\" du thème Divi";
                    $txtts49="\"Dynamic Icons\" du thème Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" du thème Divi";
                    $txtts51="\"Enable Divi Gallery\" du thème Divi";
				}else if($hreflang_toppersystem == "hi"){ 
					$txtts9="हम आपको सेट करने में मदद करने के लिए 24/48 घंटों के भीतर जवाब देंगे।";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="हमने Divi थीम की \"क्रिटिकल CSS\" विशेषता को स्वचालित रूप से अक्षम कर दिया है";
                    $txtts1="Divi थीम की \"क्रिटिकल CSS\" सुविधा को अभी अक्षम करें";
                    $txtts2="हमने Divi थीम की \"डाइनैमिक CSS\" सुविधा को अपने आप अक्षम कर दिया है";
                    $txtts3="Divi थीम \"डायनामिक CSS\" सुविधा को अभी अक्षम करें";
                    $txtts4="हमने Divi थीम की \"डाइनैमिक आइकॉन\" सुविधा को अपने आप अक्षम कर दिया है";
                    $txtts5="Divi थीम की \"डाइनैमिक आइकॉन\" सुविधा को अभी अक्षम करें";
                    $txtts6="हमने Divi थीम की \"डायनेमिक स्टाइलशीट इन-लाइन लोड करें\" सुविधा को स्वचालित रूप से अक्षम कर दिया है";
                    $txtts7="Divi थीम की \"डाइनैमिक स्टाइलशीट इन-लाइन लोड करें\" सुविधा अभी अक्षम करें";
                    $txtts8="हमने Divi थीम की \"दिवि गैलरी सक्षम करें\" विशेषता को स्वचालित रूप से अक्षम कर दिया है";
                    $txtts21="दिवि थीम की \"दिवि गैलरी सक्षम करें\" सुविधा को तुरंत अक्षम करें";
                    $txtts22="Divi थीम सुविधाओं को मैन्युअल रूप से अक्षम करने के लिए:";
                    $txtts23="यहां क्लिक करें";
                    $txtts24="सूचीबद्ध कार्यों को अक्षम करने के तुरंत बाद टॉपर सिस्टम एसईओ के साथ पृष्ठों को अनुकूलित करने के लिए आगे बढ़ें";
                    $txtts25="हम अनुशंसा करते हैं कि आप अपने पृष्ठों को अब टॉपर सिस्टम एसईओ के साथ अनुकूलित करें:";
                    $txtts26="जानकारी";
                    $txtts27="हमने Divi एक्स्ट्रा थीम की \"क्रिटिकल CSS\" सुविधा को स्वचालित रूप से अक्षम कर दिया है";
                    $txtts28="Divi एक्स्ट्रा थीम \"क्रिटिकल CSS\" को अभी अक्षम करें";
                    $txtts29="हमने Divi एक्स्ट्रा थीम की \"डाइनैमिक CSS\" सुविधा को अपने आप अक्षम कर दिया है";
                    $txtts30="Divi एक्स्ट्रा थीम \"डाइनैमिक CSS\" सुविधा को अभी अक्षम करें";
                    $txtts31="हमने Divi एक्स्ट्रा थीम की \"डाइनैमिक आइकॉन\" सुविधा को अपने आप अक्षम कर दिया है";
                    $txtts32="दिवि एक्स्ट्रा थीम के \"डाइनैमिक आइकॉन\" फ़ीचर को तुरंत अक्षम करें";
                    $txtts33="हमने दिवि एक्स्ट्रा थीम की \"डायनेमिक स्टाइलशीट इन-लाइन लोड करें\" सुविधा को स्वचालित रूप से अक्षम कर दिया है";
                    $txtts34="दिवि एक्स्ट्रा थीम की \"डायनेमिक स्टाइलशीट इन-लाइन लोड करें\" सुविधा को तुरंत अक्षम करें";
                    $txtts40="\"Critcal CSS\" विषय का Divi Extra";
					$txtts41="\"Dynamic CSS\" विषय का Divi Extra";
					$txtts42="\"Dynamic Icons\" विषय का Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" विषय का Divi Extra";
                    $txtts44="वेबसाइट अनुकूलन में अग्रणी";
                    $txtts45="Topper System SEO और Divi Extra थीम के बीच अधिकतम प्रदर्शन और पूर्ण अनुकूलता सुनिश्चित करने के लिए <strong><i><u>निम्नलिखित सुविधाओं को हमेशा अक्षम रखना आवश्यक है</u></i></strong>:";
                    $txtts46="Topper System SEO और Divi थीम के बीच अधिकतम प्रदर्शन और पूर्ण अनुकूलता सुनिश्चित करने के लिए <strong><i><u>निम्नलिखित सुविधाओं को हमेशा अक्षम रखना</u></i></strong> आवश्यक है:";
                    $txtts47="\"Critcal CSS\" विषय का Divi";
                    $txtts48="\"Dynamic CSS\" विषय का Divi";
                    $txtts49="\"Dynamic Icons\" विषय का Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" विषय का Divi";
                    $txtts51="\"Enable Divi Gallery\" विषय का Divi";
				}else if($hreflang_toppersystem == "ja"){ 
					$txtts9="セットアップのお手伝いをするために、24/48 時間以内に返信いたします。";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="Divi テーマの「Critcal CSS」機能を自動的に無効にしました";
                    $txtts1="Divi テーマの「Critcal CSS」機能を今すぐ無効にします";
                    $txtts2="Divi テーマの「ダイナミック CSS」機能を自動的に無効にしました";
                    $txtts3="Divi テーマの「ダイナミック CSS」機能を今すぐ無効にします";
                    $txtts4​​="Divi テーマの「ダイナミック アイコン」機能を自動的に無効にしました";
                    $txtts5="Divi テーマの「ダイナミック アイコン」機能を今すぐ無効にします";
                    $txtts6="Divi テーマの「動的スタイルシートのインライン読み込み」機能を自動的に無効にしました";
                    $txtts7="Divi テーマの「動的スタイルシートをインラインで読み込む」機能を今すぐ無効にします";
                    $txtts8="Divi テーマの「Divi Gallery を有効にする」機能を自動的に無効にしました";
                    $txtts21="Divi テーマの「Divi ギャラリーを有効にする」機能を直ちに無効にします";
                    $txtts22="Divi テーマの機能を手動で無効にするには:";
                    $txtts23="ここをクリック";
                    $txtts24="リストされた機能を無効にした直後に、Topper System SEO によるページの最適化に進みます";
                    $txtts25="今すぐ Topper System SEO を使用してページを最適化することをお勧めします:";
                    $txtts26="情報";
                    $txtts27="Divi Extra テーマの「Critcal CSS」機能を自動的に無効にしました";
                    $txtts28="Divi Extra テーマ「Critcal CSS」を今すぐ無効にします";
                    $txtts29="Divi Extra テーマの「ダイナミック CSS」機能を自動的に無効にしました";
                    $txtts30="Divi Extra テーマの「ダイナミック CSS」機能を今すぐ無効にします";
                    $txtts31="Divi Extra テーマの「ダイナミック アイコン」機能を自動的に無効にしました";
                    $txtts32="Divi Extra テーマの「ダイナミック アイコン」機能を直ちに無効にします";
                    $txtts33="Divi Extra テーマの「動的スタイルシートのインライン読み込み」機能を自動的に無効にしました";
                    $txtts34="Divi Extra テーマの「動的スタイルシートをインラインでロード」機能を直ちに無効にします";
                    $txtts40="\"Critcal CSS\" テーマの Divi Extra";
					$txtts41="\"Dynamic CSS\" テーマの Divi Extra";
					$txtts42="\"Dynamic Icons\" テーマの Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" テーマの Divi Extra";
                    $txtts44="ウェブサイト最適化のリーダー";
                    $txtts45="Topper System SEO と Divi Extra テーマの間で最大限のパフォーマンスと完全な互換性を確保するには、<strong><i><u>常に次の機能を無効にしておく</u></i></strong>必要があります。";
                    $txtts46="Topper System SEO と Divi テーマの間で最大限のパフォーマンスと完全な互換性を確保するには、<strong><i><u>常に次の機能を無効にしておく</u></i></strong>必要があります。";
                    $txtts47="\"Critcal CSS\" テーマの Divi";
                    $txtts48="\"Dynamic CSS\" テーマの Divi";
                    $txtts49="\"Dynamic Icons\" テーマの Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" テーマの Divi";
                    $txtts51="\"Enable Divi Gallery\" テーマの Divi";
				}else if($hreflang_toppersystem == "pl"){ 
					$txtts9="odpowiemy w ciągu 24/48 godzin, aby pomóc Ci skonfigurować.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="Automatycznie wyłączyliśmy funkcję \"Krytyczny CSS\" motywu Divi";
                    $txtts1="Wyłącz teraz funkcję \"Critcal CSS\" motywu Divi";
                    $txtts2="Automatycznie wyłączyliśmy funkcję \"Dynamiczny CSS\" motywu Divi";
                    $txtts3="Wyłącz teraz funkcję Divi Theme \"Dynamic CSS\"";
                    $txtts4="Automatycznie wyłączyliśmy funkcję \"Dynamiczne ikony\" motywu Divi";
                    $txtts5="Wyłącz teraz funkcję \"Dynamiczne ikony\" motywu Divi";
                    $txtts6="Automatycznie wyłączyliśmy funkcję \"Ładuj dynamiczny arkusz stylów w wierszu\" motywu Divi";
                    $txtts7="Wyłącz teraz funkcję \"Ładuj dynamiczny arkusz stylów w wierszu\" motywu Divi";
                    $txtts8="Automatycznie wyłączyliśmy funkcję \"Włącz galerię Divi\" motywu Divi";
                    $txtts21="Natychmiast wyłącz funkcję \"Włącz galerię Divi\" motywu Divi";
                    $txtts22="Aby ręcznie wyłączyć funkcje motywu Divi:";
                    $txtts23="Kliknij tutaj";
                    $txtts24="Natychmiast po wyłączeniu wymienionych funkcji przystąp do optymalizacji stron za pomocą Topper System SEO";
                    $txtts25="Zalecamy teraz optymalizację stron za pomocą Topper System SEO:";
                    $txtts26="Informacje";
                    $txtts27="Automatycznie wyłączyliśmy funkcję \"Critcal CSS\" motywu Divi Extra";
                    $txtts28="Wyłącz teraz motyw Divi Extra \"Krytyczny CSS\"";
                    $txtts29="Automatycznie wyłączyliśmy funkcję \"Dynamiczny CSS\" motywu Divi Extra";
                    $txtts30="Wyłącz teraz funkcję Divi Extra Theme \"Dynamic CSS\"";
                    $txtts31="Automatycznie wyłączyliśmy funkcję \"Dynamiczne ikony\" motywu Divi Extra";
                    $txtts32="Natychmiast wyłącz funkcję \"Dynamiczne ikony\" motywu Divi Extra";
                    $txtts33="Automatycznie wyłączyliśmy funkcję \"Ładuj dynamiczny arkusz stylów w wierszu\" motywu Divi Extra";
                    $txtts34="Natychmiast wyłącz funkcję \"Ładuj dynamiczny arkusz stylów w wierszu\" motywu Divi Extra";
                    $txtts40="\"Critcal CSS\" tematu Divi Extra";
					$txtts41="\"Dynamic CSS\" tematu Divi Extra";
					$txtts42="\"Dynamic Icons\" tematu Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" tematu Divi Extra";
                    $txtts44="Lider optymalizacji stron internetowych";
                    $txtts45="Aby zapewnić maksymalną wydajność i doskonałą kompatybilność między SEO Topper System a motywem Divi Extra, musisz <strong><i><u>zawsze wyłączać następujące funkcje</u></i></strong>:";
                    $txtts46="Aby zapewnić maksymalną wydajność i doskonałą kompatybilność pomiędzy SEO Topper System a motywem Divi, konieczne jest <strong><i><u>zawsze wyłączanie następujących funkcji</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" tematu Divi";
                    $txtts48="\"Dynamic CSS\" tematu Divi";
                    $txtts49="\"Dynamic Icons\" tematu Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" tematu Divi";
                    $txtts51="\"Enable Divi Gallery\" tematu Divi";
				}else if($hreflang_toppersystem == "pt"){ 
					$txtts9="nós responderemos dentro de 24/48 horas para ajudá-lo a configurar.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="Desativamos automaticamente o recurso \"Critcal CSS\" do tema Divi";
                    $txtts1="Desative o recurso \"Critcal CSS\" do tema Divi agora";
                    $txtts2="Desativamos automaticamente o recurso \"Dynamic CSS\" do tema Divi";
                    $txtts3="Desative o recurso Divi Theme \"Dynamic CSS\" agora";
                    $txtts4="Desativamos automaticamente o recurso \"Ícones dinâmicos\" do tema Divi";
                    $txtts5="Desabilite o recurso \"Ícones Dinâmicos\" do tema Divi agora";
                    $txtts6="Desativamos automaticamente o recurso \"Carregar folha de estilo dinâmica em linha\" do tema Divi";
                    $txtts7="Desabilite o recurso \"Carregar Folha de Estilo Dinâmica In-line\" do tema Divi agora";
                    $txtts8="Desativamos automaticamente o recurso \"Ativar Divi Gallery\" do tema Divi";
                    $txtts21="Desative imediatamente o recurso \"Ativar Divi Gallery\" do tema Divi";
                    $txtts22="Para desativar manualmente os recursos do tema Divi:";
                    $txtts23="Clique aqui";
                    $txtts24="Imediatamente após desabilitar as funções listadas proceder à otimização das páginas com Topper System SEO";
                    $txtts25="Recomendamos que você otimize suas páginas com Topper System SEO agora:";
                    $txtts26="Informações";
                    $txtts27="Desativamos automaticamente o recurso \"Critcal CSS\" do tema Divi Extra";
                    $txtts28="Desative o tema Divi Extra \"Critcal CSS\" agora";
                    $txtts29="Desativamos automaticamente o recurso \"Dynamic CSS\" do tema Divi Extra";
                    $txtts30="Desabilite o recurso Divi Extra Theme \"Dynamic CSS\" imediatamente";
                    $txtts31="Desativamos automaticamente o recurso \"Ícones dinâmicos\" do tema Divi Extra";
                    $txtts32="Desative imediatamente o recurso \"Ícones Dinâmicos\" do tema Divi Extra";
                    $txtts33="Desativamos automaticamente o recurso \"Carregar folha de estilo dinâmica em linha\" do tema Divi Extra";
                    $txtts34="Desative imediatamente o recurso \"Carregar Folha de Estilo Dinâmica In-line\" do tema Divi Extra";
                    $txtts40="\"Critcal CSS\" do tema Divi Extra";
					$txtts41="\"Dynamic CSS\" do tema Divi Extra";
					$txtts42="\"Dynamic Icons\" do tema Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" do tema Divi Extra";
                    $txtts44="Líder em otimização de sites";
                    $txtts45="Para garantir o máximo desempenho e perfeita compatibilidade entre o Topper System SEO e o tema Divi Extra, você deve <strong><i><u>manter sempre desativados os seguintes recursos</u></i></strong>:";
                    $txtts46="Para garantir o máximo desempenho e perfeita compatibilidade entre o Topper System SEO e o tema Divi é necessário <strong><i><u>manter sempre desativados os seguintes recursos</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" do tema Divi";
                    $txtts48="\"Dynamic CSS\" do tema Divi";
                    $txtts49="\"Dynamic Icons\" do tema Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" do tema Divi";
                    $txtts51="\"Enable Divi Gallery\" do tema Divi";
				}else if($hreflang_toppersystem == "ru"){ 
					$txtts9="мы ответим в течение 24/48 часов, чтобы помочь вам настроить.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="Мы автоматически отключили функцию \"Critical CSS\" темы Divi";
                    $txtts1="Отключите функцию \"Critical CSS\" темы Divi прямо сейчас";
                    $txtts2="Мы автоматически отключили функцию \"Динамический CSS\" темы Divi";
                    $txtts3="Отключите функцию \"Динамический CSS\" темы Divi прямо сейчас";
                    $txtts4="Мы автоматически отключили функцию \"Динамические значки\" темы Divi";
                    $txtts5="Отключите функцию \"Динамические значки\" темы Divi прямо сейчас";
                    $txtts6="Мы автоматически отключили функцию \"Загрузить динамическую таблицу стилей в строке\" темы Divi";
                    $txtts7="Отключите функцию \"Загрузить динамическую таблицу стилей в линию\" темы Divi прямо сейчас";
                    $txtts8="Мы автоматически отключили функцию \"Включить галерею Divi\" темы Divi";
                    $txtts21="Немедленно отключите функцию \"Включить галерею Divi\" темы Divi";
                    $txtts22="Чтобы отключить функции темы Divi вручную:";
                    $txtts23="Нажмите здесь";
                    $txtts24="Сразу после отключения перечисленных функций приступить к оптимизации страниц с помощью Topper System SEO";
                    $txtts25="Мы рекомендуем оптимизировать ваши страницы с помощью Topper System SEO прямо сейчас:";
                    $txtts26="Информация";
                    $txtts27="Мы автоматически отключили функцию \"Critical CSS\" темы Divi Extra";
                    $txtts28="Отключите тему Divi Extra \"Critcal CSS\" сейчас";
                    $txtts29="Мы автоматически отключили функцию \"Динамический CSS\" темы Divi Extra";
                    $txtts30="Отключите функцию \"Динамический CSS\" в дополнительной теме Divi";
                    $txtts31="Мы автоматически отключили функцию \"Динамические значки\" темы Divi Extra";
                    $txtts32="Немедленно отключите функцию \"Динамические значки\" темы Divi Extra";
                    $txtts33="Мы автоматически отключили функцию \"Загрузить динамическую таблицу стилей в строке\" темы Divi Extra";
                    $txtts34="Немедленно отключите функцию \"Загрузить динамическую таблицу стилей в строке\" темы Divi Extra";
                    $txtts40="\"Critcal CSS\" темы Divi Extra";
					$txtts41="\"Dynamic CSS\" темы Divi Extra";
					$txtts42="\"Dynamic Icons\" темы Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" темы Divi Extra";
                    $txtts44="Лидер в оптимизации веб-сайтов";
                    $txtts45="Чтобы обеспечить максимальную производительность и идеальную совместимость между Topper System SEO и темой Divi Extra, вы должны <strong><i><u>всегда отключать следующие функции</u></i></strong>:";
                    $txtts46="Чтобы обеспечить максимальную производительность и идеальную совместимость между Topper System SEO и темой Divi, необходимо <strong><i><u>всегда отключать следующие функции</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" темы Divi";
                    $txtts48="\"Dynamic CSS\" темы Divi";
                    $txtts49="\"Dynamic Icons\" темы Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" темы Divi";
                    $txtts51="\"Enable Divi Gallery\" темы Divi";
				}else if($hreflang_toppersystem == "zh"){ 
					$txtts9="我们将在 24/48 小时内回复以帮助您设置。";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="我们已经自动禁用了 Divi 主题的\"关键 CSS\"功能";
                    $txtts1="现在禁用 Divi 主题的\"关键 CSS\"功能";
                    $txtts2="我们已经自动禁用了 Divi 主题的\"动态 CSS\"功能";
                    $txtts3="现在禁用 Divi 主题\"动态 CSS\" 功能";
                    $txtts4​​="我们已经自动禁用了 Divi 主题的\"动态图标\"功能";
                    $txtts5="现在禁用 Divi 主题的\"动态图标\"功能";
                    $txtts6="我们已经自动禁用了 Divi 主题的\"在线加载动态样式表\"功能";
                    $txtts7="现在禁用 Divi 主题的\"内联加载动态样式表\"功能";
                    $txtts8="我们已经自动禁用了 Divi 主题的\"启用 Divi Gallery\"功能";
                    $txtts21="立即禁用 Divi 主题的\"启用 Divi Gallery\"功能";
                    $txtts22="手动禁用 Divi 主题功能：";
                    $txtts23="点击此处";
                    $txtts24="禁用列出的功能后立即继续使用 Topper System SEO 优化页面";
                    $txtts25="我们建议您现在使用 Topper System SEO 优化您的页面：";
                    $txtts26="信息";
                    $txtts27="我们已经自动禁用了 Divi Extra 主题的\"关键 CSS\"功能";
                    $txtts28="现在禁用 Divi Extra 主题\"Critcal CSS\"";
                    $txtts29="我们已经自动禁用了 Divi Extra 主题的\"动态 CSS\"功能";
                    $txtts30="现在禁用 Divi Extra Theme \"Dynamic CSS\" 功能";
                    $txtts31="我们已经自动禁用了 Divi Extra 主题的\"动态图标\"功能";
                    $txtts32="立即禁用 Divi Extra 主题的\"动态图标\"功能";
                    $txtts33="我们已经自动禁用了 Divi Extra 主题的\"在线加载动态样式表\"功能";
                    $txtts34="立即禁用 Divi Extra 主题的\"内联加载动态样式表\"功能";
                    $txtts40="\"Critcal CSS\" 主题的 Divi Extra";
					$txtts41="\"Dynamic CSS\" 主题的 Divi Extra";
					$txtts42="\"Dynamic Icons\" 主题的 Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" 主题的 Divi Extra";
                    $txtts44="网站优化的领导者";
                    $txtts45="为了确保 Topper System SEO 和 Divi Extra 主题之间的最佳性能和完美兼容性，您必须<strong><i><u>始终禁用以下功能</u></i></strong>：";
                    $txtts46="为了确保 Topper System SEO 和 Divi 主题之间的最佳性能和完美兼容性，有必要<strong><i><u>始终禁用以下功能</u></i></strong>：";
                    $txtts47="\"Critcal CSS\" 主题的 Divi";
                    $txtts48="\"Dynamic CSS\" 主题的 Divi";
                    $txtts49="\"Dynamic Icons\" 主题的 Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" 主题的 Divi";
                    $txtts51="\"Enable Divi Gallery\" 主题的 Divi";
				}else if($hreflang_toppersystem == "he"){ 
					$txtts9="אנו נשיב תוך 24/48 שעות כדי לעזור לך להגדיר.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="השבתנו אוטומטית את תכונת \"CSS קריטי\" של ערכת הנושא Divi";
                    $txtts1="השבת את התכונה \"CSS קריטי\" של ערכת הנושא Divi כעת";
                    $txtts2="השבתנו אוטומטית את התכונה \"CSS דינמית\" של ערכת הנושא Divi";
                    $txtts3="השבת את התכונה של Divi Theme \"CSS דינמי\" כעת";
                    $txtts4="השבתנו אוטומטית את התכונה \"אייקונים דינמיים\" של ערכת הנושא Divi";
                    $txtts5="השבת את התכונה \"אייקונים דינמיים\" של ערכת הנושא Divi כעת";
                    $txtts6="השבתנו אוטומטית את התכונה \"טען גיליון סגנונות דינמי בשורה\" של ערכת הנושא Divi";
                    $txtts7="השבת כעת את התכונה \"טען גיליון סגנונות דינמי בשורה\" של ערכת הנושא Divi";
                    $txtts8="השבתנו אוטומטית את התכונה \"הפעל Divi Gallery\" של ערכת הנושא של Divi";
                    $txtts21="השבת מיד את התכונה \"הפעל Divi Gallery\" של ערכת הנושא Divi";
                    $txtts22="כדי להשבית תכונות ערכת נושא Divi באופן ידני:";
                    $txtts23="לחץ כאן";
                    $txtts24="מיד לאחר השבתת הפונקציות המפורטות המשך לייעל את הדפים עם Topper System SEO";
                    $txtts25="אנו ממליצים שתבצע אופטימיזציה של הדפים שלך עם קידום אתרים של מערכת Topper כעת:";
                    $txtts26="מידע";
                    $txtts27="השבתנו אוטומטית את תכונת \"CSS קריטי\" של ערכת הנושא Divi Extra";
                    $txtts28="השבת את ערכת הנושא של Divi Extra \"CSS קריטי\" כעת";
                    $txtts29="השבתנו אוטומטית את תכונת \"CSS דינמית\" של ערכת הנושא Divi Extra";
                    $txtts30="השבת את התכונה של Divi Extra Theme \"CSS דינמי\" באופן מיידי";
                    $txtts31="השבתנו אוטומטית את התכונה \"אייקונים דינמיים\" של ערכת הנושא Divi Extra";
                    $txtts32="השבת מיד את התכונה \"אייקונים דינמיים\" של ערכת הנושא Divi Extra";
                    $txtts33="השבתנו אוטומטית את התכונה \"טען גיליון סגנונות דינמי בשורה\" של ערכת הנושא Divi Extra";
                    $txtts34="השבת מיד את התכונה \"טען גיליון סגנונות דינמי בשורה\" של ערכת הנושא Divi Extra";
                    $txtts40="\"Critcal CSS\" של הנושא Divi Extra";
					$txtts41="\"Dynamic CSS\" של הנושא Divi Extra";
					$txtts42="\"Dynamic Icons\" של הנושא Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" של הנושא Divi Extra";
                    $txtts44="מוביל באופטימיזציה של אתרים";
                    $txtts45="כדי להבטיח ביצועים מקסימליים ותאימות מושלמת בין Topper System SEO לנושא Divi Extra, עליך <strong><i><u>לשמור תמיד על התכונות הבאות מושבתות</u></i></strong>:";
                    $txtts46="כדי להבטיח ביצועים מקסימליים ותאימות מושלמת בין Topper System SEO לנושא Divi יש צורך <strong><i><u>לשמור תמיד על התכונות הבאות מושבתות</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" של הנושא Divi";
                    $txtts48="\"Dynamic CSS\" של הנושא Divi";
                    $txtts49="\"Dynamic Icons\" של הנושא Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" של הנושא Divi";
                    $txtts51="\"Enable Divi Gallery\" של הנושא Divi";
				}else if($hreflang_toppersystem == "la"){ 
					$txtts9="respondebimus intra 24/48 horas ad auxilium posuistis.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="automatice notam \"Critcal CSS\" Divi thematis debilitavimus";
                    $txtts1="Disable the Divi theme's \"Critcal CSS\" feature now";
                    $txtts2="Nos notam \"Dynamic CSS\" Divi thematis ipso debilitavimus";
                    $txtts3="Disable the Divi Theme \"Dynamic CSS\" feature now";
                    $txtts4="Nos notam \"Dynamic Icones\" Divi thematis ipso debilitavimus";
                    $txtts5="Disable the Divi theme's \"Dynamic Icons\" feature now";
                    $txtts6="Load \"Dynamic Stylesheet in-linea\" thematis Divi thematis automatice debilitavimus";
                    $txtts7="Disable the Divi thema's \"Load Dynamic Stylesheet In-linea\" nunc pluma";
                    $txtts8="Admitte \"Divi Gallery\" notam thematis Divi thematis automatice debilitavimus";
                    $txtts21="Immediately disable the feature of the Divi thematis \"activare Divi Gallery\"";
                    $txtts22="To disable Theme features manually:";
                    $txtts23="Click here";
                    $txtts24="Protinus inactivare functiones enumeratas procedere ad optimize paginas cum Topper System SEO";
                    $txtts25="Monemus te paginas tuas optimize cum Systemate Topper SEO nunc:";
                    $txtts26="Info";
                    $txtts27="Nos automatice notam \"Criscalem CSS\" Divi Extra thematis debilitavimus";
                    $txtts28="Disable the Divi Extra thema \"Critcal CSS\" now";
                    $txtts29="automatice notam \"Dynamic CSS\" Divi Extra thematis debilitavimus";
                    $txtts30="Disable the Divi Extra Theme \"Dynamic CSS\" pluma nunc";
                    $txtts31="Nos notam \"Dynamic Iconum\" Divi Extra thematis sponte debilitavimus";
                    $txtts32="Immediate disable notam \"Dynamic Icones\" Divi Extra thematis";
                    $txtts33="Load \"Dynamic Stylesheet in linea\" Divi Extra thematis automatice debilitavimus";
                    $txtts34="Immediate disable the feature \"Dynamic Stylesheet In-line\" pluma Divi Extra thematis";
                    $txtts40="\"Critcal CSS\" thematis Divi Extra";
					$txtts41="\"Dynamic CSS\" thematis Divi Extra";
					$txtts42="\"Dynamic Icons\" thematis Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" thematis Divi Extra";
                    $txtts44="Dux in website ipsum";
                    $txtts45="Ut maximam observantiam et perfectam convenientiam inter Topper System SEO et Divi Extra thema curet, oportet <strong><i><u> semper sequentes notas debiles</u></i></strong> custodire oportet:";
                    $txtts46="Ad maximam observantiam et perfectam convenientiam inter Topper System SEO et Divi thema curandum necesse est <strong><i><u> semper lineamenta sequentes debiles</u></i></strong> custodire necesse est:";
                    $txtts47="\"Critcal CSS\" thematis Divi";
                    $txtts48="\"Dynamic CSS\" thematis Divi";
                    $txtts49="\"Dynamic Icons\" thematis Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" thematis Divi";
                    $txtts51="\"Enable Divi Gallery\" thematis Divi";
				}else{   
					$txtts9="we will reply within 24/48 hours to help you set up.";
					$txtts10="Hi Topper System SEO,";
					$txtts11="I contact you to ask for assistance in using the plugin on my site";
					$txtts12="Active plugins:";
					$txtts14="Templates:";
					$txtts15="WordPress version:";
					$txtts16="Chartset WP set:";
					$txtts17="PHP version:";
					$txtts18="Hostname:";
					$txtts19="Thanks for your support, regards";
					$txtts20="Technical support request COD. 01 Divi/Extra:";
                    $txtts0="We have automatically disabled the \"Critcal CSS\" feature of the Divi theme";
                    $txtts1="Disable the Divi theme's \"Critcal CSS\" feature now";
                    $txtts2="We have automatically disabled the \"Dynamic CSS\" feature of the Divi theme";
                    $txtts3="Disable the Divi Theme \"Dynamic CSS\" feature now";
                    $txtts4="We have automatically disabled the \"Dynamic Icons\" feature of the Divi theme";
                    $txtts5="Disable the Divi theme's \"Dynamic Icons\" feature now";
                    $txtts6="We have automatically disabled the \"Load Dynamic Stylesheet In-line\" feature of the Divi theme";
                    $txtts7="Disable the Divi theme's \"Load Dynamic Stylesheet In-line\" feature now";
                    $txtts8="We have automatically disabled the \"Enable Divi Gallery\" feature of the Divi theme";
                    $txtts21="Immediately disable the \"Enable Divi Gallery\" feature of the Divi theme";
                    $txtts22="To disable Divi theme features manually:";
                    $txtts23="Click here";
                    $txtts24="Immediately after disabling the listed functions proceed to optimize the pages with Topper System SEO";
                    $txtts25="We recommend that you optimize your pages with Topper System SEO now:";
                    $txtts26="Info";
                    $txtts27="We have automatically disabled the \"Critcal CSS\" feature of the Divi Extra theme";
                    $txtts28="Disable the Divi Extra theme \"Critcal CSS\" now";
                    $txtts29="We have automatically disabled the \"Dynamic CSS\" feature of the Divi Extra theme";
                    $txtts30="Disable the Divi Extra Theme \"Dynamic CSS\" feature immediately";
                    $txtts31="We have automatically disabled the \"Dynamic Icons\" feature of the Divi Extra theme";
                    $txtts32="Immediately disable the \"Dynamic Icons\" feature of the Divi Extra theme";
                    $txtts33="We have automatically disabled the \"Load Dynamic Stylesheet In-line\" feature of the Divi Extra theme";
                    $txtts34="Immediately disable the \"Load Dynamic Stylesheet In-line\" feature of the Divi Extra theme";
                    $txtts40="\"Critcal CSS\" of the theme Divi Extra";
					$txtts41="\"Dynamic CSS\" of the theme Divi Extra";
					$txtts42="\"Dynamic Icons\" of the theme Divi Extra";
					$txtts43="\"Load Dynamic Stylesheet In-line\" of the theme Divi Extra";
                    $txtts44="Leader in website optimization";
                    $txtts45="To ensure maximum performance and perfect compatibility between Topper System SEO and the Divi Extra theme, you must <strong><i><u>always keep the following features disabled</u></i></strong>:";
                    $txtts46="To ensure maximum performance and perfect compatibility between Topper System SEO and the Divi theme it is necessary to <strong><i><u>always keep the following features disabled</u></i></strong>:";
                    $txtts47="\"Critcal CSS\" of the theme Divi";
                    $txtts48="\"Dynamic CSS\" of the theme Divi";
                    $txtts49="\"Dynamic Icons\" of the theme Divi";
                    $txtts50="\"Load Dynamic Stylesheet In-line\" of the theme Divi";
                    $txtts51="\"Enable Divi Gallery\" of the theme Divi";
				}
				
				if($list_template_toppersystem_string == "divi"){
					$returnv_write="";
					$returnv_write2="";
					$returnv_write3="";
					$returnv_write4="";
					$returnv_write5="";

					$mod_css_toppersystem="";
					$mod_css_toppersystem2="";
					$mod_css_toppersystem3="";
					$mod_css_toppersystem4="";
					$mod_css_toppersystem5="";

					$write_banner_toppersystem="";

					$table_options_d="wp_options";
					$record_options_d1="option_name";
					$record_options_d2="option_value";	

					$option_name_ins_ts="'et_divi'";
					$val_search_option_name_ins_ts="divi_gallery_layout_enable";
					$page_admin_redirect_on_ins_ts="et_divi_options";
					$page_admin_redirect_no_ins_ts="et_divi_options";
					$new_val_db_ins_ts="\"divi_gallery_layout_enable\";s:5:\"false\";";	
				$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
					$returnv_write5=$array_verify_modify_t_d["0"];
					$mod_css_toppersystem5=$array_verify_modify_t_d["1"];
                    $array_verify_modify_t_d=array();

					$option_name_ins_ts="'et_divi'";
					$val_search_option_name_ins_ts="divi_critical_css";
					$page_admin_redirect_on_ins_ts="et_divi_options#general-2";
					$page_admin_redirect_no_ins_ts="et_divi_options";
					$new_val_db_ins_ts="\"divi_critical_css\";s:5:\"false\";";	
				$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
					$returnv_write=$array_verify_modify_t_d["0"];
					$mod_css_toppersystem=$array_verify_modify_t_d["1"];
                    $array_verify_modify_t_d=array();
                    
					$option_name_ins_ts="'et_divi'";
					$val_search_option_name_ins_ts="divi_dynamic_css";
					$page_admin_redirect_on_ins_ts="et_divi_options#general-2";
					$page_admin_redirect_no_ins_ts="et_divi_options";
					$new_val_db_ins_ts="\"divi_dynamic_css\";s:5:\"false\";";	
				$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
					$returnv_write2=$array_verify_modify_t_d["0"];
					$mod_css_toppersystem2=$array_verify_modify_t_d["1"];
                    $array_verify_modify_t_d=array();					


					if($mod_css_toppersystem2 != ""){
						$option_name_ins_ts="'et_divi'";
						$val_search_option_name_ins_ts="divi_dynamic_icons";
						$page_admin_redirect_on_ins_ts="et_divi_options#general-2";
						$page_admin_redirect_no_ins_ts="et_divi_options";
						$new_val_db_ins_ts="\"divi_dynamic_icons\";s:5:\"false\";";	
					$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
						$returnv_write3=$array_verify_modify_t_d["0"];
						$mod_css_toppersystem3=$array_verify_modify_t_d["1"];
                        $array_verify_modify_t_d=array();

						$option_name_ins_ts="'et_divi'";
						$val_search_option_name_ins_ts="divi_inline_stylesheet";
						$page_admin_redirect_on_ins_ts="et_divi_options#general-2";
						$page_admin_redirect_no_ins_ts="et_divi_options";
						$new_val_db_ins_ts="\"divi_inline_stylesheet\";s:5:\"false\";";	
					$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
						$returnv_write4=$array_verify_modify_t_d["0"];
						$mod_css_toppersystem4=$array_verify_modify_t_d["1"];
                        $array_verify_modify_t_d=array();
					}
                    

					if(($mod_css_toppersystem != "")||($mod_css_toppersystem2 != "")){
						if(($mod_css_toppersystem != "")&&($mod_css_toppersystem2 != "")){
							$go_to_delete_minify_toppersystem=@TopperSystemSetMainFunction::go_to_delete_minify_toppersystem($mod_css_toppersystem);
						}else if(($mod_css_toppersystem != "")&&($mod_css_toppersystem2 == "")){
							$go_to_delete_minify_toppersystem=@TopperSystemSetMainFunction::go_to_delete_minify_toppersystem($mod_css_toppersystem);
						}else if(($mod_css_toppersystem == "")&&($mod_css_toppersystem2 != "")){
							$go_to_delete_minify_toppersystem=@TopperSystemSetMainFunction::go_to_delete_minify_toppersystem($mod_css_toppersystem2);
						}else{
							#niente
						}
					}

					if(($returnv_write != "")||($returnv_write2 != "")||($returnv_write3 != "")||($returnv_write4 != "")||($returnv_write5 != "")){
						$nooptimization_val_toppersystem="no";
						$nomsgfinalbanner_val_toppersystem="no";

						if($returnv_write != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write) != "$returnv_write"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts0")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts1")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}

						if($returnv_write2 != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write2) != "$returnv_write2"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts2")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts3")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}

						if($returnv_write3 != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write3) != "$returnv_write3"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts4")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts5")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}

						if($returnv_write4 != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write4) != "$returnv_write4"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts6")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts7")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}

						if($returnv_write5 != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write5) != "$returnv_write5"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts8")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts21")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}						

						$array_returnv_write_all_ts=array("$returnv_write","$returnv_write2","$returnv_write3","$returnv_write4","$returnv_write5");
						$array_returnv_write_all_ts_unique=array_unique($array_returnv_write_all_ts);                        

						$optimization_val_toppersystem="no";
						$optimization_now_write_toppersystem="";

						foreach($array_returnv_write_all_ts_unique as $write_all_ts_unique){
							if($write_all_ts_unique != ""){
								$linewrite_return_toppersystem="$write_all_ts_unique";
								if(str_replace("admin.php?page=toppersystem","",$linewrite_return_toppersystem) != "$linewrite_return_toppersystem"){
									$optimization_val_toppersystem="ok";
									$optimization_now_write_toppersystem="$linewrite_return_toppersystem";
								}else{
									$write_banner_toppersystem.=esc_html("$txtts22")." <a class=\"button-primary\" href=\"".$linewrite_return_toppersystem."\">".esc_html("$txtts23")."</a><br>";
								}		
								$linewrite_return_toppersystem="";
								$write_all_ts_unique="";
							}
						}
                        $array_returnv_write_all_ts=array();
                        $array_returnv_write_all_ts_unique=array();
				
						if(TopperSystemAuthTS::AuthTopperSystem() != ""){
							if($optimization_val_toppersystem == "ok"){
								if($nooptimization_val_toppersystem == "ok"){
									$write_banner_toppersystem.="<br><strong>".esc_html("$txtts24")."</strong><br>";
								}else{
									$write_banner_toppersystem.="<br><strong>".esc_html("$txtts25")."</strong> <a class=\"button-primary\" href=\"".$optimization_now_write_toppersystem."\">".esc_html("$txtts23")."</a><br>";
								}
							}
						}

						if(($nomsgfinalbanner_val_toppersystem == "ok")&&($nooptimization_val_toppersystem == "ok")){		
							$write_banner_toppersystem.="<br><a href=\"mailto:support@toppersystem.com?subject=".esc_html($txtts20)."%20".esc_html($resend_toppersystem)."&body=".esc_html($txtts10)."%0A".esc_html($txtts11)." ".esc_html($resend_toppersystem)."%0A%0A".esc_html($txtts12)."%0A%0A".esc_html($list_plugin_toppersystem_string)."%0A%0A".esc_html($txtts14)."%0A%0A".esc_html($list_template_toppersystem_string)."%0A%0A".esc_html($txtts15)."%0A%0A".esc_html($list_version_toppersystem_string)."%0A%0A".esc_html($txtts16)."%0A%0A".esc_html($list_charset_toppersystem_string)."%0A%0A".esc_html($txtts17)."%0A%0A".esc_html($list_phpversion_toppersystem_string)."%0A%0A".esc_html($txtts18)."%0A%0A".esc_html($list_gethostname_toppersystem_string)."%0A%0A".esc_html($txtts19)."\">support@toppersystem.com</a> ".esc_html($txtts9);
						}		

						$return="<div id=\"error_boxadmin_toppersystem\" class=\"notice notice-error animate_load_toppersystem\"><p><big><strong>$txtts26 Topper System SEO</strong></big><br><br></strong>".$write_banner_toppersystem."</p></div>";
					}

				}else if($list_template_toppersystem_string == "extra"){
					$returnv_write="";
					$returnv_write2="";
					$returnv_write3="";
					$returnv_write4="";

					$mod_css_toppersystem="";
					$mod_css_toppersystem2="";
					$mod_css_toppersystem3="";
					$mod_css_toppersystem4="";	

					$write_banner_toppersystem="";

					$table_options_d="wp_options";
					$record_options_d1="option_name";
					$record_options_d2="option_value";

					$option_name_ins_ts="'et_extra'";
					$val_search_option_name_ins_ts="extra_critical_css";
					$page_admin_redirect_on_ins_ts="et_extra_options#general-2";
					$page_admin_redirect_no_ins_ts="et_extra_options";
					$new_val_db_ins_ts="\"extra_critical_css\";s:5:\"false\";";	$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
					$returnv_write=$array_verify_modify_t_d["0"];
					$mod_css_toppersystem=$array_verify_modify_t_d["1"];
                    $array_verify_modify_t_d=array();
                    
					$option_name_ins_ts="'et_extra'";
					$val_search_option_name_ins_ts="extra_dynamic_css";
					$page_admin_redirect_on_ins_ts="et_extra_options#general-2";
					$page_admin_redirect_no_ins_ts="et_extra_options";
					$new_val_db_ins_ts="\"extra_dynamic_css\";s:5:\"false\";";	
				$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
					$returnv_write2=$array_verify_modify_t_d["0"];
					$mod_css_toppersystem2=$array_verify_modify_t_d["1"];
                    $array_verify_modify_t_d=array();

					if($mod_css_toppersystem2 != ""){
						$option_name_ins_ts="'et_extra'";
						$val_search_option_name_ins_ts="extra_dynamic_icons";
						$page_admin_redirect_on_ins_ts="et_extra_options#general-2";
						$page_admin_redirect_no_ins_ts="et_extra_options";
						$new_val_db_ins_ts="\"extra_dynamic_icons\";s:5:\"false\";";	
					$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
						$returnv_write3=$array_verify_modify_t_d["0"];
						$mod_css_toppersystem3=$array_verify_modify_t_d["1"];
                        $array_verify_modify_t_d=array();

						$option_name_ins_ts="'et_extra'";
						$val_search_option_name_ins_ts="extra_inline_stylesheet";
						$page_admin_redirect_on_ins_ts="et_extra_options#general-2";
						$page_admin_redirect_no_ins_ts="et_extra_options";
						$new_val_db_ins_ts="\"extra_inline_stylesheet\";s:5:\"false\";";	
					$array_verify_modify_t_d=@TopperSystemSetMainFunction::verify_modify_t_d("$list_template_toppersystem_string","$table_options_d","$record_options_d1","$record_options_d2","$option_name_ins_ts","$val_search_option_name_ins_ts","$page_admin_redirect_on_ins_ts","$page_admin_redirect_no_ins_ts","$new_val_db_ins_ts");
						$returnv_write4=$array_verify_modify_t_d["0"];
						$mod_css_toppersystem4=$array_verify_modify_t_d["1"];
                        $array_verify_modify_t_d=array();	
					}						
                    
					if(($mod_css_toppersystem != "")||($mod_css_toppersystem2 != "")){
						if(($mod_css_toppersystem != "")&&($mod_css_toppersystem2 != "")){
							$go_to_delete_minify_toppersystem=@TopperSystemSetMainFunction::go_to_delete_minify_toppersystem($mod_css_toppersystem);
						}else if(($mod_css_toppersystem != "")&&($mod_css_toppersystem2 == "")){
							$go_to_delete_minify_toppersystem=@TopperSystemSetMainFunction::go_to_delete_minify_toppersystem($mod_css_toppersystem);
						}else if(($mod_css_toppersystem == "")&&($mod_css_toppersystem2 != "")){
							$go_to_delete_minify_toppersystem=@TopperSystemSetMainFunction::go_to_delete_minify_toppersystem($mod_css_toppersystem2);
						}else{
							#niente
						}
					}

					if(($returnv_write != "")||($returnv_write2 != "")||($returnv_write3 != "")||($returnv_write4 != "")){
						$nooptimization_val_toppersystem="no";
						$nomsgfinalbanner_val_toppersystem="no";

						if($returnv_write != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write) != "$returnv_write"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts27")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts28")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}

						if($returnv_write2 != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write2) != "$returnv_write2"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts29")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts30")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}

						if($returnv_write3 != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write3) != "$returnv_write3"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts31")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts32")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}

						if($returnv_write4 != ""){
							if(str_replace("admin.php?page=toppersystem","",$returnv_write4) != "$returnv_write4"){
								$write_banner_toppersystem.="&bull; ".esc_html("$txtts33")."<br>";
							}else{
								$write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts34")."</strong><br>";
								$nooptimization_val_toppersystem="ok";
								$nomsgfinalbanner_val_toppersystem="ok";
							}			
						}	


						$array_returnv_write_all_ts=array("$returnv_write","$returnv_write2","$returnv_write3","$returnv_write4");
						$array_returnv_write_all_ts_unique=array_unique($array_returnv_write_all_ts);

						$optimization_val_toppersystem="no";
						$optimization_now_write_toppersystem="";

						foreach($array_returnv_write_all_ts_unique as $write_all_ts_unique){
							if($write_all_ts_unique != ""){
								$linewrite_return_toppersystem="$write_all_ts_unique";
								if(str_replace("admin.php?page=toppersystem","",$linewrite_return_toppersystem) != "$linewrite_return_toppersystem"){
									$optimization_val_toppersystem="ok";
									$optimization_now_write_toppersystem="$linewrite_return_toppersystem";
								}else{
									$write_banner_toppersystem.=esc_html("Per disattivare manualmete le funzioni del tema Extra di Divi:")." <a class=\"button-primary\" href=\"".$linewrite_return_toppersystem."\">".esc_html("$txtts23")."</a><br>";
								}		
								$linewrite_return_toppersystem="";
								$write_all_ts_unique="";
							}
						}
                        $array_returnv_write_all_ts=array();
                        $array_returnv_write_all_ts_unique=array();
				
						if(TopperSystemAuthTS::AuthTopperSystem() != ""){
							if($optimization_val_toppersystem == "ok"){
								if($nooptimization_val_toppersystem == "ok"){
									$write_banner_toppersystem.="<br><strong>".esc_html("$txtts24")."</strong><br>";
								}else{
									$write_banner_toppersystem.="<br><strong>".esc_html("$txtts25")."</strong> <a class=\"button-primary\" href=\"".$optimization_now_write_toppersystem."\">".esc_html("$txtts23")."</a><br>";
								}
							}
						}

						if(($nomsgfinalbanner_val_toppersystem == "ok")&&($nooptimization_val_toppersystem == "ok")){		
							$write_banner_toppersystem.="<br><a href=\"mailto:support@toppersystem.com?subject=".esc_html($txtts20)."%20".esc_html($resend_toppersystem)."&body=".esc_html($txtts10)."%0A".esc_html($txtts11)." ".esc_html($resend_toppersystem)."%0A%0A".esc_html($txtts12)."%0A%0A".esc_html($list_plugin_toppersystem_string)."%0A%0A".esc_html($txtts14)."%0A%0A".esc_html($list_template_toppersystem_string)."%0A%0A".esc_html($txtts15)."%0A%0A".esc_html($list_version_toppersystem_string)."%0A%0A".esc_html($txtts16)."%0A%0A".esc_html($list_charset_toppersystem_string)."%0A%0A".esc_html($txtts17)."%0A%0A".esc_html($list_phpversion_toppersystem_string)."%0A%0A".esc_html($txtts18)."%0A%0A".esc_html($list_gethostname_toppersystem_string)."%0A%0A".esc_html($txtts19)."\">support@toppersystem.com</a> ".esc_html($txtts9);
						}		

						$return="<div id=\"error_boxadmin_toppersystem\" class=\"notice notice-error animate_load_toppersystem\"><p><big><strong>$txtts26 Topper System SEO</strong></big><br><br></strong>".$write_banner_toppersystem."</p></div>";
					}	

				}else{
					#niente
					$return="";
				}

                if($return == ""){
                    if($list_template_toppersystem_string == "extra"){
                        $write_banner_toppersystem="";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts40")."</strong><br>";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts41")."</strong><br>";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts42")."</strong><br>";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts43")."</strong><br>";
                        $return="<div id=\"error_boxadmin_toppersystem\" class=\"notice notice-success is-dismissible\"><p><big><strong>$txtts26 Topper System SEO</strong></big><br><i>$txtts44</i><br>$txtts45<br>".$write_banner_toppersystem."</p></div>";
                    }else if($list_template_toppersystem_string == "divi"){
                        $write_banner_toppersystem="";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts47")."</strong><br>";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts48")."</strong><br>";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts49")."</strong><br>";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts50")."</strong><br>";
                        $write_banner_toppersystem.="&bull; <strong>".esc_html("$txtts51")."</strong><br>";
                        $return="<div id=\"error_boxadmin_toppersystem\" class=\"notice notice-success is-dismissible\"><p><big><strong>$txtts26 Topper System SEO</strong></big><br><i>$txtts44</i><br>$txtts46<br>".$write_banner_toppersystem."</p></div>";
                    }else{
                        $return="";
                    }
                }

                unset($txtts0);
                unset($txtts1);
                unset($txtts2);
                unset($txtts3);
                unset($txtts4);
                unset($txtts5);
                unset($txtts6);
                unset($txtts7);
                unset($txtts8);
                unset($txtts9);
                unset($txtts10);
                unset($txtts11);
                unset($txtts12);
                unset($txtts14);
                unset($txtts15);
                unset($txtts16);
                unset($txtts17);
                unset($txtts18);
                unset($txtts19);
                unset($txtts20);
                unset($txtts21);
                unset($txtts22);
                unset($txtts23);
                unset($txtts24);
                unset($txtts25);
                unset($txtts26);
                unset($txtts27);
                unset($txtts28);
                unset($txtts29);
                unset($txtts30);
                unset($txtts31);
                unset($txtts32);
                unset($txtts33);
                unset($txtts34);
                unset($txtts40);
                unset($txtts41);
                unset($txtts42);
                unset($txtts43);
                unset($txtts44);
                unset($txtts45);
                unset($txtts46);
                unset($txtts47);
                unset($txtts48);
                unset($txtts49);
                unset($txtts50);
                unset($txtts51);
                unset($list_template_toppersystem_string);
                unset($hreflang_toppersystem);

				$returnv_write="";
				$returnv_write2="";
				$returnv_write3="";
				$returnv_write4="";
				$returnv_write5="";
				$mod_css_toppersystem="";
				$mod_css_toppersystem2="";
				$mod_css_toppersystem3="";
				$mod_css_toppersystem4="";
				$mod_css_toppersystem5="";
				$write_banner_toppersystem="";
				$table_options_d="";
				$record_options_d1="";
				$record_options_d2="";
				$option_name_ins_ts="";
				$val_search_option_name_ins_ts="";
				$page_admin_redirect_on_ins_ts="";
				$page_admin_redirect_no_ins_ts="";
				$new_val_db_ins_ts="";
                $go_to_delete_minify_toppersystem="";
                $nooptimization_val_toppersystem="";
                $nomsgfinalbanner_val_toppersystem="";
                $optimization_val_toppersystem="";
    		    $optimization_now_write_toppersystem="";
                $list_plugin_toppersystem_string="";
                $list_version_toppersystem_string="";
                $list_charset_toppersystem_string="";
                $list_phpversion_toppersystem_string="";
                $list_gethostname_toppersystem_string="";


                unset($returnv_write);
                unset($returnv_write2);
                unset($returnv_write3);
                unset($returnv_write4);
                unset($returnv_write5);
                unset($mod_css_toppersystem);
                unset($mod_css_toppersystem2);
                unset($mod_css_toppersystem3);
                unset($mod_css_toppersystem4);
                unset($mod_css_toppersystem5);
                unset($write_banner_toppersystem);
                unset($table_options_d);
                unset($record_options_d1);
                unset($record_options_d2);
                unset($option_name_ins_ts);
                unset($val_search_option_name_ins_ts);
                unset($page_admin_redirect_on_ins_ts);
                unset($page_admin_redirect_no_ins_ts);
                unset($new_val_db_ins_ts);
                unset($go_to_delete_minify_toppersystem);
                unset($nooptimization_val_toppersystem);
                unset($nomsgfinalbanner_val_toppersystem);
                unset($optimization_val_toppersystem);
                unset($optimization_now_write_toppersystem);
                unset($list_plugin_toppersystem_string);
                unset($list_version_toppersystem_string);
                unset($list_charset_toppersystem_string);
                unset($list_phpversion_toppersystem_string);
                unset($list_gethostname_toppersystem_string);
				
				return "$return";
			}
			public static function controller_cache_plugin_nocompatible_toppersystem($hreflang_toppersystem,$list_plugin_toppersystem_string){

				if($hreflang_toppersystem == "it"){    
                    $txtts0="Info Topper System SEO";
                    $txtts1="Per sfruttare tutte le petenzialità dei processi di ottimizzazione di Topper System SEO ti invitiamo a disabilitare la funzione di cache oppure a rimuovore:";
                    $txtts2="Il plugin";
				}else if($hreflang_toppersystem == "ar"){
                    $txtts0="معلومات Topper System SEO";
                    $txtts1="للاستفادة من جميع إمكانات عمليات التحسين الخاصة بـ Topper System SEO، ندعوك إلى تعطيل وظيفة ذاكرة التخزين المؤقت أو إزالة:";
                    $txtts2="البرنامج المساعد";
				}else if($hreflang_toppersystem == "de"){ 
                    $txtts0="Info Topper System SEO";
                    $txtts1="Um das volle Potenzial der Optimierungsprozesse von Topper System SEO auszuschöpfen, laden wir Sie ein, die Cache-Funktion zu deaktivieren oder Folgendes zu entfernen:";
                    $txtts2="Das Plugin";
				}else if($hreflang_toppersystem == "es"){
                    $txtts0="Información Topper System SEO";
                    $txtts1="Para aprovechar todo el potencial de los procesos de optimización de Topper System SEO, te invitamos a desactivar la función de caché o eliminar:";
                    $txtts2="El complemento";
				}else if($hreflang_toppersystem == "fr"){ 
                    $txtts0="Informations Topper System SEO";
                    $txtts1="Pour profiter de tout le potentiel des processus d'optimisation de Topper System SEO, nous vous invitons à désactiver la fonction cache ou à supprimer:";
                    $txtts2="Le plugin";
				}else if($hreflang_toppersystem == "hi"){ 
                    $txtts0="जानकारी Topper System SEO";
                    $txtts1="Topper System SEO की अनुकूलन प्रक्रियाओं की सभी संभावनाओं का लाभ उठाने के लिए, हम आपको कैश फ़ंक्शन को अक्षम करने या हटाने के लिए आमंत्रित करते हैं:";
                    $txtts2="प्लगइन";
				}else if($hreflang_toppersystem == "ja"){ 
                    $txtts0="情報 Topper System SEO";
                    $txtts1="Topper System SEO の最適化プロセスの可能性を最大限に活用するには、キャッシュ機能を無効にするか、以下を削除することをお勧めします。";
                    $txtts2="プラグイン";
				}else if($hreflang_toppersystem == "pl"){ 
                    $txtts0="Informacje Topper System SEO";
                    $txtts1="Aby wykorzystać cały potencjał procesów optymalizacyjnych Topper System SEO, zapraszamy do wyłączenia funkcji pamięci podręcznej lub usunięcia:";
                    $txtts2="Wtyczka";
				}else if($hreflang_toppersystem == "pt"){ 
                    $txtts0="Informações Topper System SEO";
                    $txtts1="Para aproveitar todo o potencial dos processos de otimização do Topper System SEO, convidamos você a desabilitar a função cache ou remover:";
                    $txtts2="O plug-in";
				}else if($hreflang_toppersystem == "ru"){ 
                    $txtts0="Информация Topper System SEO";
                    $txtts1="Чтобы воспользоваться всем потенциалом процессов оптимизации Topper System SEO, мы предлагаем вам отключить функцию кэширования или удалить:";
                    $txtts2="Плагин";
				}else if($hreflang_toppersystem == "zh"){ 
                    $txtts0="信息 Topper System SEO";
                    $txtts1="为了充分利用 Topper System SEO 优化过程的所有潜力，我们邀请您禁用缓存功能或删除：";
                    $txtts2="插件";
				}else if($hreflang_toppersystem == "he"){ 
                    $txtts0="מידע Topper System SEO";
                    $txtts1="כדי לנצל את כל הפוטנציאל של תהליכי האופטימיזציה של Topper System SEO, אנו מזמינים אותך להשבית את פונקציית המטמון או להסיר:";
                    $txtts2="התוסף";
				}else if($hreflang_toppersystem == "la"){ 
                    $txtts0="Info Topper System SEO";
                    $txtts1="Ut utaris omnibus processibus optimizationis possibilitatis Topper System SEO, rogamus te ut munus cache disable vel removere:";
                    $txtts2="Plugin";
				}else{
                    $txtts0="Info Topper System SEO";
                    $txtts1="To take advantage of all the potential of Topper System SEO's optimization processes, we invite you to disable the cache function or remove:";
                    $txtts2="The plugin";
				}


                $list_plugin_toppersystem_string=explode("%0A",$list_plugin_toppersystem_string);

                $list_plugin_incompatible["urlplugin"]["0"]="wp-rocket/wp-rocket.php";
                $list_plugin_incompatible["nameplugin"]["0"]="WP Rocket";

                $list_plugin_incompatible["urlplugin"]["1"]="wp-fastest-cache/wpFastestCache.php";
                $list_plugin_incompatible["nameplugin"]["1"]="WP Fastest Cache";

                $list_plugin_incompatible["urlplugin"]["2"]="speedycache/speedycache.php";
                $list_plugin_incompatible["nameplugin"]["2"]="Speedy Cache";

                $list_plugin_incompatible["urlplugin"]["3"]="redis-cache/redis-cache.php";
                $list_plugin_incompatible["nameplugin"]["3"]="Redis Cache";

                $list_plugin_incompatible["urlplugin"]["4"]="wp-optimize/wp-optimize.php";
                $list_plugin_incompatible["nameplugin"]["4"]="WP Optimize";

                $list_plugin_incompatible["urlplugin"]["5"]="hyper-cache/plugin.php";
                $list_plugin_incompatible["nameplugin"]["5"]="Hyper Cache";

                $list_plugin_incompatible["urlplugin"]["6"]="wp-super-cache/wp-cache.php";
                $list_plugin_incompatible["nameplugin"]["6"]="WP Super Cache";

                $list_plugin_incompatible["urlplugin"]["7"]="w3-total-cache/w3-total-cache.php";
                $list_plugin_incompatible["nameplugin"]["7"]="W3 Total Cache";

                $list_plugin_incompatible["urlplugin"]["8"]="cache-enabler/cache-enabler.php";
                $list_plugin_incompatible["nameplugin"]["8"]="Cache Enabler";

                $list_plugin_toppersystem_stringv="";
                for($i=0;$i<=count($list_plugin_incompatible["urlplugin"]);$i++){
                    if((isset($list_plugin_incompatible["urlplugin"][$i]))&&(trim($list_plugin_incompatible["urlplugin"][$i]) != "")){
                        if (in_array($list_plugin_incompatible["urlplugin"][$i], $list_plugin_toppersystem_string)) {
                            $list_plugin_toppersystem_stringv.="<div>&bull; $txtts2 ".$list_plugin_incompatible["nameplugin"][$i]."</div>";
                        }
                    }
                }

                if ($list_plugin_toppersystem_stringv != "") {
                    $write_banner_toppersystem="";
                    $write_banner_toppersystem.="<strong>$list_plugin_toppersystem_stringv</strong>";
                    $return="<div id=\"error_boxadmin2_toppersystem\" class=\"notice notice-error is-dismissible\"><p><big><strong>$txtts0</strong></big><br>$txtts1".$write_banner_toppersystem."</p></div>";
                }else{
                    $return="";
                }              
                return "$return";
            }
			}
			
			class TopperSystemRunHeaders {
			public static function toppersystemrun(){
			add_action( 'init', function() {
                register_post_type('toppersystem_update', array(array(), 'public' => false, 'publicly_queryable' => false));

                if((isset($_GET["actimgts"]))&&($_GET["actimgts"] == "render")&&(TopperSystemAuthTS::AuthTopperSystem() != "")){
                    if(str_replace("\\","",__DIR__) != __DIR__){
                        $hu="\image\image.php";
                        $filename=str_replace("toppersystem\components","toppersystem",__DIR__).$hu;
                    }else{
                        $hu="/image/image.php";
                        $filename=str_replace("toppersystem/components","toppersystem",__DIR__).$hu;
                    }
                    $TopperSystemCpermFileImage="01234567";
                    include("$filename");
                    unset($TopperSystemCpermFileImage);                  
                    die();
                }else{
                    $activatecachets=TOPPERSYSTEM_PLUGIN_GET_activatecachets;
                    $activateasmpts=TOPPERSYSTEM_PLUGIN_GET_activateasmpts;		
				    if(function_exists('wp_get_current_user')){
					    $current_user = wp_get_current_user();
					    if ( 0 == $current_user->ID ) {
						    if(isset($_SERVER["HTTP_REFERER"])){
						    $pagerequest=$_SERVER["HTTP_REFERER"];
						    }else{
						    $pagerequest="";
						    }
						    if($pagerequest != str_replace($_SERVER['SERVER_NAME'],"",$pagerequest)){
							    #no
                                if($activatecachets == "1"){
                                    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                }
						    }else{
							    if(str_replace(array("xmlrpc.php","wp-cron.php","ajax","IndexToppersystem","SaveToppersystem","ReceivedToppersystem","DeleteToppersystem","ControlAspmToppersystem","connect.php","send.php","received.php","image.php","minify.php","minifyts.php",".xml",".jpg",".jpeg",".png",".gif",".svg",".ico","data:",".css",".js",".webp",".jp2",".mp4",".avi","json",".otf",".woff",".woff2",".ttf",".eot",".txt"),"",$_SERVER["REQUEST_URI"]) == $_SERVER["REQUEST_URI"]){
                                    if($activateasmpts == "1"){
								        $verifica_boot_toppersystem=1;
                                        if((isset($_POST["toppersystem_update"]))||(TopperSystemSetMainFunction::verify_request_server_api_toppersystem() == "ok")){
                                           $verifica_boot_toppersystem=0; 
                                        }
								        if($verifica_boot_toppersystem == "1"){
									        if(TopperSystemAuthTS::AuthTopperSystem() != ""){									
										        if(isset($_SERVER['HTTP_USER_AGENT'])){
											        if (stripos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false):
											        $verifica_codified=TopperSystemASPMTS::topper_validation_codified(str_replace(array("toppersystem/components/general.php"),"",plugins_url('general.php',__FILE__)));
											        endif;
										        }else{
											        $verifica_codified=TopperSystemASPMTS::topper_validation_codified(str_replace(array("toppersystem/components/general.php"),"",plugins_url('general.php',__FILE__)));
										        }                                    
									        }
								        }
								        unset($verifica_boot_toppersystem);
                                    }
                                    if((count($_POST) >= "1")||(TopperSystemSetMainFunction::verify_request_server_api_toppersystem() == "ok")){
						                header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
						                header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
						                header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
						                header("Cache-Control: post-check=0, pre-check=0", false);
						                header("Pragma: no-cache");
					                }else{
                                        if($activatecachets == "1"){
                                            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                        }
                                    }
							    }
						    }
						    unset($pagerequest);
					    }else{
							header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
							header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
							header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
							header("Cache-Control: post-check=0, pre-check=0", false);
							header("Pragma: no-cache");
					    }
					    unset($current_user);
				    }
                    unset($activatecachets);
                    unset($activateasmpts);
                }
			});
			}
			}
			TopperSystemRunHeaders::toppersystemrun();
		}
	}
}
?>