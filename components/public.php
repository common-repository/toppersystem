<?php
if(isset($TopperSystemCpermPublic)){
	if(!empty($TopperSystemCpermPublic)){
		if($TopperSystemCpermPublic == "1618033"){
			class TopperSystemRunPublic {
				public static function toppersystemrun(){
                
                #add_action( "init", function(){
                add_action( "wp_enqueue_scripts", function(){
                    if((((isset($_GET["preview"]))&&($_GET["preview"] == "true")&&(TopperSystemAuthTS::AuthTopperSystem() != ""))||((isset($_GET["previewts"]))&&($_GET["previewts"] == "true")&&(TopperSystemAuthTS::AuthTopperSystem() != "")))&&(( current_user_can( 'administrator' ) ))){
                       if ( ! defined( 'TOPPERSYSTEM_PLUGIN_VERSION_smartlazyloading_ts' ) ) {
                           define( 'TOPPERSYSTEM_PLUGIN_VERSION_smartlazyloading_ts', TopperSystemSetMainFunction::get_filetime_res_ts("js","smartlazyloading_ts.js"));
                       }

                       wp_register_style( 'components_toppersystem', plugins_url('css/components_toppersystem.css', dirname(__FILE__)), array(), TOPPERSYSTEM_PLUGIN_VERSION, 'all' );

                       wp_register_script('components_toppersystem', plugins_url('js/components_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);
                       wp_register_script('start_components_toppersystem', plugins_url('js/start_components_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);

                       wp_enqueue_style( 'components_toppersystem' );
                       wp_enqueue_script('components_toppersystem');
                       wp_enqueue_script('start_components_toppersystem');

                       wp_localize_script( 'components_toppersystem', 'ajax_components_toppersystem', array(
                           'url'      => admin_url( 'admin-ajax.php' ),
                           'nonce' => wp_create_nonce('ajax_components_toppersystem_nonce_string')
                       ));
                    }else{
                       #mem
                       if ( ! defined( 'TOPPERSYSTEM_PLUGIN_VERSION_loaderts' ) ) {
                           define( 'TOPPERSYSTEM_PLUGIN_VERSION_loaderts', TopperSystemSetMainFunction::get_filetime_res_ts("css","loader.css"));
                       }
                       if ( ! defined( 'TOPPERSYSTEM_PLUGIN_VERSION_smartlazyloading_ts' ) ) {
                           define( 'TOPPERSYSTEM_PLUGIN_VERSION_smartlazyloading_ts', TopperSystemSetMainFunction::get_filetime_res_ts("js","smartlazyloading_ts.js"));
                       }
                       if ( ! defined( 'TOPPERSYSTEM_PLUGIN_VERSION_lazyloading_ts' ) ) {
                           define( 'TOPPERSYSTEM_PLUGIN_VERSION_lazyloading_ts', TopperSystemSetMainFunction::get_filetime_res_ts("js","lazyloading_ts.js"));
                       }

                       wp_register_style( 'loaderts', plugins_url('css/loader.css', dirname(__FILE__)), array(), TOPPERSYSTEM_PLUGIN_VERSION_loaderts, 'all' );

					   wp_register_script('co2appts', plugins_url('js/co2appts.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, false);
                       wp_register_script('co2ts', plugins_url('js/co2ts.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);
                       wp_register_script('loaderpagets', plugins_url('js/loaderpage.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, false);
                       wp_register_script('smartlazyloading_ts', plugins_url('js/smartlazyloading_ts.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION_smartlazyloading_ts, true);
                       wp_register_script('lazyloading_ts', plugins_url('js/lazyloading_ts.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION_lazyloading_ts, false);                     
                    }
                });

                add_action( "setup_theme", function(){
					$url=TopperSystemSetMainFunction::toppersystem_cleanup_min_and_url(TopperSystemSetMainFunction::https_or_http()."://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]);
					$url_toppersystem_page_preview=str_replace(array("?toppersystem_page_preview=true","&toppersystem_page_preview=true"),"",$url);
					if($url != "$url_toppersystem_page_preview"){
						$url="$url_toppersystem_page_preview";
						$toppersystem_page_preview=1;
					}else{
						$toppersystem_page_preview=0;
					}

                    #$output="'$url'";

					$dominio=TopperSystemSetMainFunction::https_or_http()."://".TopperSystemSetMainFunction::name_host_no_http();
					$resend_toppersystem=site_url();
					$resendCentraltoppersystem=TopperSystemSetMainFunction::resendCentraltoppersystem();
					if(isset(explode("/",$resendCentraltoppersystem)["1"])){
						$resendCentralWtoppersystem=explode("/",$resendCentraltoppersystem)["1"];
					}else{
						$resendCentralWtoppersystem="";
					}
					$part_file="";
					$old_size_page="";
					$old_update_page="";
					if(str_replace(array("robots.txt","xmlrpc.php","wp-config.php","wp-config-sample.php","wp-activate.php","wp-blog-header.php","wp-comments-post.php","wp-cron.php","wp-links-opml.php","wp-load.php","wp-login.php","wp-mail.php","wp-settings.php","wp-signup.php","wp-trackback.php","IndexToppersystem","SaveToppersystem","ReceivedToppersystem","DeleteToppersystem","ControlAspmToppersystem",".xml","/wp-admin/","/$resendCentralWtoppersystem/","/wp-includes/"),"",$url) == "$url"){
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
                        define( 'TOPPERSYSTEM_FILE_INDEX_DB', $contenuto_file_index_toppersystem);

						if($contenuto_file_index_toppersystem != ""){
							$canonical_toppersystem_send_no_domain=TopperSystemSetMainFunction::result_page_name_no_domain("$url");
							$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
							$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);

                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                $part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                $part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());                                
                            }

							unset($contenuto_file_index_toppersystem);
							
							for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
								if($part_file == ""){
									if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
										$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["0"];
                                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                            $part_url=str_replace("$part_url_transform1","$part_url_transform2",$part_url);
                                        }
										if($part_url != ""){
											if($part_url == "$canonical_toppersystem_send_no_domain"){
												if(isset(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["1"])){
													$part_file=trim(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["1"]);
													if(isset(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["3"])){
														$old_update_page=trim(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["2"]);
														$old_size_page=trim(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["3"]);
													}
												}
											}
										}
										$part_url="";
										$contenuto_file_index_toppersystem_array[$i]="";
									}
								}
							}

                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                unset($part_url_transform1);
                                unset($part_url_transform2);                                
                            }

							if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
							unset($canonical_toppersystem_send_no_domain);
						}else{
							$n_contenuto_file_index_toppersystem_array=1;
							$part_file="";
						}
					}else{
						$n_contenuto_file_index_toppersystem_array=1;
						$part_file="";
					}
					if((isset($_POST["toppersystem_update"]))||(TopperSystemSetMainFunction::verify_request_server_api_toppersystem() == "ok")){
					   $part_file=""; 
					}
					if($part_file != ""){
						if(function_exists('wp_get_current_user')){
							$current_user = wp_get_current_user();
							if ( 0 == $current_user->ID ) {
								$return=TopperSystemSetMainFunction::rendering_redirect_toppersystem($url,$resend_toppersystem,"$part_file",$toppersystem_page_preview,$old_size_page,$old_update_page,$resendCentraltoppersystem);
                                if($return != ""){
                                    echo "$return";
                                    exit();
                                }
							}
						}
					}
                });  

                ob_start( function($toppersystem_get_page){return apply_filters('final_output', $toppersystem_get_page);} );

				add_filter('final_output', function($output) {
					$url=TopperSystemSetMainFunction::toppersystem_cleanup_min_and_url(TopperSystemSetMainFunction::https_or_http()."://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]);
					$url_toppersystem_page_preview=str_replace(array("?toppersystem_page_preview=true","&toppersystem_page_preview=true"),"",$url);
					if($url != "$url_toppersystem_page_preview"){
						$url="$url_toppersystem_page_preview";
						$toppersystem_page_preview=1;
					}else{
						$toppersystem_page_preview=0;
					}
					$dominio=TopperSystemSetMainFunction::https_or_http()."://".TopperSystemSetMainFunction::name_host_no_http();
					$resend_toppersystem=site_url();
					$resendCentraltoppersystem=TopperSystemSetMainFunction::resendCentraltoppersystem();
					if(isset(explode("/",$resendCentraltoppersystem)["1"])){
						$resendCentralWtoppersystem=explode("/",$resendCentraltoppersystem)["1"];
					}else{
						$resendCentralWtoppersystem="";
					}
					$part_file="";
					$old_size_page="";
					$old_update_page="";
					if(str_replace(array("robots.txt","xmlrpc.php","wp-config.php","wp-config-sample.php","wp-activate.php","wp-blog-header.php","wp-comments-post.php","wp-cron.php","wp-links-opml.php","wp-load.php","wp-login.php","wp-mail.php","wp-settings.php","wp-signup.php","wp-trackback.php","IndexToppersystem","SaveToppersystem","ReceivedToppersystem","DeleteToppersystem","ControlAspmToppersystem",".xml","/wp-admin/","/$resendCentralWtoppersystem/","/wp-includes/"),"",$url) == "$url"){

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

                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                $part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                $part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());                                
                            }

							unset($contenuto_file_index_toppersystem);
							
							for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
								if($part_file == ""){
									if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
										$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["0"];
                                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                            $part_url=str_replace("$part_url_transform1","$part_url_transform2",$part_url);
                                        }
										if($part_url != ""){
											if($part_url == "$canonical_toppersystem_send_no_domain"){
												if(isset(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["1"])){
													$part_file=trim(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["1"]);
													if(isset(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["3"])){
														$old_update_page=trim(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["2"]);
														$old_size_page=trim(explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["3"]);
													}
												}
											}
										}
										$part_url="";
										$contenuto_file_index_toppersystem_array[$i]="";
									}
								}
							}

                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                unset($part_url_transform1);
                                unset($part_url_transform2);                                
                            }

							if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
							unset($canonical_toppersystem_send_no_domain);
						}else{
							$n_contenuto_file_index_toppersystem_array=1;
							$part_file="";
						}
					}else{
						$n_contenuto_file_index_toppersystem_array=1;
						$part_file="";
					}
					if((isset($_POST["toppersystem_update"]))||(TopperSystemSetMainFunction::verify_request_server_api_toppersystem() == "ok")){
					   $part_file=""; 
					}
					if($part_file != ""){
						if(function_exists('wp_get_current_user')){
							$current_user = wp_get_current_user();
							if ( 0 == $current_user->ID ) {
								$return=TopperSystemSetMainFunction::rendering_toppersystem($output,$url,$resend_toppersystem,"$part_file",$toppersystem_page_preview,$old_size_page,$old_update_page,$resendCentraltoppersystem);
							}else{
								if($toppersystem_page_preview == "1"){
									$return=TopperSystemSetMainFunction::rendering_toppersystem($output,$url,$resend_toppersystem,"$part_file",$toppersystem_page_preview,$old_size_page,$old_update_page,$resendCentraltoppersystem);
								}else{
									$return="$output";
								}
							}
						}else{        
							$return=TopperSystemSetMainFunction::rendering_toppersystem($output,$url,$resend_toppersystem,"$part_file",$toppersystem_page_preview,$old_size_page,$old_update_page,$resendCentraltoppersystem);
						}
					}else{
						if((((isset($_GET["preview"]))&&($_GET["preview"] == "true")&&(TopperSystemAuthTS::AuthTopperSystem() != ""))||((isset($_GET["previewts"]))&&($_GET["previewts"] == "true")&&(TopperSystemAuthTS::AuthTopperSystem() != "")))&&(( current_user_can( 'administrator' ) ))){
							$status_canonical_toppersystem="ok";
							if(wp_get_canonical_url() != ""){
								$canonical_toppersystem=TopperSystemSetMainFunction::toppersystem_cleanup_min_and_encode_url(TopperSystemSetMainFunction::toppersystem_get_canonical("$output")["1"]);
                                $canonical_toppersystem=str_replace(array("?previewts=true","&previewts=true"),"",$canonical_toppersystem);
								if($canonical_toppersystem != ""){
									$page_toppersystem=TopperSystemSetMainFunction::https_or_http()."://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
									if(($page_toppersystem != "")&&($canonical_toppersystem != "")&&(str_replace("$canonical_toppersystem","",$page_toppersystem) == "$page_toppersystem")){
										$canonical_toppersystem="";
										$status_canonical_toppersystem="1";
									}
									unset($page_toppersystem);
								}else{
									$canonical_toppersystem="";
									$status_canonical_toppersystem="2";
								}
							}else{
								$canonical_toppersystem="";
								$status_canonical_toppersystem="3";
							}

							if(str_replace("?","",$canonical_toppersystem) != "$canonical_toppersystem"){
								$canonical_preview_toppersystem=$canonical_toppersystem."&toppersystem_page_preview=true";
							}else{
								$canonical_preview_toppersystem=$canonical_toppersystem."?toppersystem_page_preview=true";
							}

							$nlinesave_toppersystem=40;
							$nmax_cicle_toppersystem=ceil(($n_contenuto_file_index_toppersystem_array -1 ) / $nlinesave_toppersystem);
							$trovato="";

                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                $part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                $part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());                         
                            }

							for($nc=0;$nc<$nmax_cicle_toppersystem;$nc++){
								if($trovato == ""){ 
									if($nc == "0"){
										$nc_w="";
									}else{
										$nc_w="$nc";
									}                  
									$part_file="";
                                    if ( ! defined( 'TOPPERSYSTEM_PLUGIN_DIRECTORY' ) ) {
                                        if ( ! defined( 'TOPPERSYSTEM_PLUGIN_MOD_REQUEST' ) ) {
                                            $contenuto_file_save_toppersystem=@file_get_contents(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."toppersystem/nosql/log/SaveToppersystem".$nc_w.".txt");
                                        }else{
                                            $contenuto_file_save_toppersystem=@TopperSystemSetMainFunction::file_curlts_contents(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/log/SaveToppersystem".$nc_w.".txt");
                                        }
                                    }else{
                                        $nome_file_save_toppersystem="SaveToppersystem".$nc_w.".txt";

                                        $filename_file_save_toppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/$nome_file_save_toppersystem";
                   
					                    if(file_exists($filename_file_save_toppersystem)){
						                    $handle_file_save_toppersystem = fopen($filename_file_save_toppersystem, "r");
						                    if (FALSE === $handle_file_save_toppersystem) {
							                    $contenuto_file_save_toppersystem="";
						                    }else{
							                    $filesize_file_save_toppersystem=filesize($filename_file_save_toppersystem);
							                    if($filesize_file_save_toppersystem == 0){ 
								                    $contenuto_file_save_toppersystem="";
							                    }else if(($filesize_file_save_toppersystem >= 1)&&($filesize_file_save_toppersystem <= 8192)){    
								                    $contenuto_file_save_toppersystem=fread($handle_file_save_toppersystem, filesize($filename_file_save_toppersystem));
							                    }else{
								                    $contenuto_file_save_toppersystem = '';
								                    while (!feof($handle_file_save_toppersystem)) {
									                    $contenuto_file_save_toppersystem .= fread($handle_file_save_toppersystem, 8192);
								                    }
							                    }
							                    fclose($handle_file_save_toppersystem);
							                    $filesize_file_save_toppersystem="";
						                    }
						                    $handle_file_save_toppersystem="";
					                    }else{
						                    $contenuto_file_save_toppersystem="";
					                    }
					                    $filename_file_save_toppersystem="";
					                    $hu_file_save_toppersystem=""; 
                                        $nome_file_save_toppersystem=""; 
                                    }
                                    
									if($contenuto_file_save_toppersystem != ""){
                                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                            $contenuto_file_save_toppersystem=str_replace("$part_url_transform1","$part_url_transform2",$contenuto_file_save_toppersystem);                            
                                        }

										$canonical_toppersystem_send_no_domain=TopperSystemSetMainFunction::result_page_name_no_domain("$canonical_toppersystem");
										$contenuto_file_save_toppersystem_array=explode("\n",$contenuto_file_save_toppersystem);
										$contenuto_file_save_toppersystem="";
										
										for($i=0;$i<=count($contenuto_file_save_toppersystem_array);$i++){
											if($part_file == ""){
												if((isset($contenuto_file_save_toppersystem_array[$i]))&&(trim($contenuto_file_save_toppersystem_array[$i]) != "")){
													$part_url=explode("||||",trim($contenuto_file_save_toppersystem_array[$i]))["0"];
													if($part_url != ""){
														if($part_url == "$canonical_toppersystem_send_no_domain"){
															if(isset(explode("||||",trim($contenuto_file_save_toppersystem_array[$i]))["9"])){
																$part_file=trim($contenuto_file_save_toppersystem_array[$i]);
																$trovato="ok";
															}
														}
													}                                                
													$part_url="";
													$contenuto_file_save_toppersystem_array[$i]="";
												}
											}
										}
										if(is_array($contenuto_file_save_toppersystem_array)){$contenuto_file_save_toppersystem_array=array();}else{$contenuto_file_save_toppersystem_array="";}
									}else{
										$part_file="";
									}
								}
							}

                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                unset($part_url_transform1);
                                unset($part_url_transform2);                        
                            }

							if($part_file != ""){
								$part_file_array=explode("||||",$part_file);
								$language_toppersystem=$part_file_array["1"];                        
								$title_toppersystem=$part_file_array["2"];
								$check_title_toppersystem=$part_file_array["3"];
								$description_toppersystem=$part_file_array["4"];
								$check_description_toppersystem=$part_file_array["5"];
								$keywords_toppersystem=$part_file_array["6"];
								$check_keywords_toppersystem=$part_file_array["7"];
								$keyword_toppersystem=$part_file_array["8"];
								$category_toppersystem=$part_file_array["9"];
								$images_toppersystem=(int)$part_file_array["10"];

                                if((isset($part_file_array["11"]))&&(trim($part_file_array["11"]) != "")){
                                    $resolution_images_toppersystem=(int)$part_file_array["11"];
                                }else{
                                    $resolution_images_toppersystem="76";
                                }

                                if((isset($part_file_array["12"]))&&(trim($part_file_array["12"]) != "")){
                                    $stronglazyload_images_toppersystem=(int)$part_file_array["12"];
                                }else{
                                    $stronglazyload_images_toppersystem="0";
                                }

                                if((isset($part_file_array["13"]))&&(trim($part_file_array["13"]) != "")){
                                    $stronglazyload_video_toppersystem=(int)$part_file_array["13"];
                                }else{
                                    $stronglazyload_video_toppersystem="1";
                                }

                                if((isset($part_file_array["14"]))&&(trim($part_file_array["14"]) != "")){
                                    $text_ia_toppersystem=(int)$part_file_array["14"];
                                }else{
                                    $text_ia_toppersystem="0";
                                }

								$part_file_array=array();
							}else{
								$language_toppersystem=str_replace("_","-",get_locale());
								$title_toppersystem=TopperSystemSetMainFunction::toppersystem_get_title("$output");
								$check_title_toppersystem="true";
								$description_toppersystem=TopperSystemSetMainFunction::toppersystem_get_description("$output");
								$check_description_toppersystem="true";
								$keywords_toppersystem=TopperSystemSetMainFunction::toppersystem_get_keywords("$output");
								$check_keywords_toppersystem="true";
								$keyword_toppersystem="";
								$category_toppersystem=TopperSystemSetMainFunction::toppersystem_get_category("$output");
								$images_toppersystem="1";
                                $resolution_images_toppersystem="76";
                                $stronglazyload_images_toppersystem="0";
                                $stronglazyload_video_toppersystem="1";
                                $stronglazyload_ia_toppersystem="0";
							}
							
							$array_get_inpage=TopperSystemSetMainFunction::toppersystem_get_info_page_optimized("$canonical_toppersystem");
							if($array_get_inpage["0"] != ""){
								$title_toppersystem=$array_get_inpage["0"];
							}
							if($array_get_inpage["1"] != ""){
								$description_toppersystem=$array_get_inpage["1"];
							}
							if($array_get_inpage["2"] != ""){
								$keywords_toppersystem=$array_get_inpage["2"];
							}						
							$array_get_inpage=array();

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
                            if($par_apikeyopenai_toppersystem != ""){
                                $box_intelligence_artificial_toppersystem="1";
                            }else{
                                $box_intelligence_artificial_toppersystem="";
                            }
							
							$authcode_toppersystem=TopperSystemAuthTS::AuthCodeTopperSystem(md5("$canonical_toppersystem"));
							$destination_toppersystem="/api/rec_toppersystem_v19.php";

							$return=$output;
							$return=str_replace(array("index,follow","index, follow","noindex,nofollow","noindex, nofollow","noindex,follow","noindex, follow","index,nofollow","index, nofollow"),"noindex,follow",$return);

							$return=str_replace(array("< / body>","< / BODY>","</body >","</BODY >","</ body>","</ BODY>","</body>","</BODY>"),"<input id=\"status_canonical_toppersystem\" name=\"status_canonical_toppersystem\" type=\"hidden\" value=\"$status_canonical_toppersystem\"><input id=\"canonical_toppersystem\" name=\"canonical_toppersystem\" type=\"hidden\" value=\"$canonical_toppersystem\"><input id=\"canonical_preview_toppersystem\" name=\"canonical_preview_toppersystem\" type=\"hidden\" value=\"$canonical_preview_toppersystem\"><input id=\"language_toppersystem\" name=\"language_toppersystem\" type=\"hidden\" value=\"$language_toppersystem\"><input id=\"title_toppersystem\" name=\"title_toppersystem\" type=\"hidden\" value=\"$title_toppersystem\"><input id=\"description_toppersystem\" name=\"description_toppersystem\" type=\"hidden\" value=\"$description_toppersystem\"><input id=\"keywords_toppersystem\" name=\"keywords_toppersystem\" type=\"hidden\" value=\"$keywords_toppersystem\"><input id=\"category_toppersystem\" name=\"category_toppersystem\" type=\"hidden\" value=\"$category_toppersystem\"><input id=\"authcode_toppersystem\" name=\"authcode_toppersystem\" type=\"hidden\" value=\"$authcode_toppersystem\"><input id=\"destination_toppersystem\" name=\"destination_toppersystem\" type=\"hidden\" value=\"$destination_toppersystem\"><input id=\"domain_toppersystem\" name=\"domain_toppersystem\" type=\"hidden\" value=\"$dominio\"><input id=\"resend_toppersystem\" name=\"resend_toppersystem\" type=\"hidden\" value=\"$resend_toppersystem\"><input id=\"send_reqcentral_toppersystem\" name=\"send_reqcentral_toppersystem\" type=\"hidden\" value=\"$resendCentraltoppersystem\"><input id=\"hreflang_toppersystem\" name=\"hreflang_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::hreflang_toppersystem()."\"><input id=\"check_title_toppersystem\" name=\"check_title_toppersystem\" type=\"hidden\" value=\"$check_title_toppersystem\"><input id=\"check_description_toppersystem\" name=\"check_description_toppersystem\" type=\"hidden\" value=\"$check_description_toppersystem\"><input id=\"check_keywords_toppersystem\" name=\"check_keywords_toppersystem\" type=\"hidden\" value=\"$check_keywords_toppersystem\"><input id=\"keyword_toppersystem\" name=\"keyword_toppersystem\" type=\"hidden\" value=\"$keyword_toppersystem\"><input id=\"images_toppersystem\" name=\"images_toppersystem\" type=\"hidden\" value=\"$images_toppersystem\"><input id=\"resolution_images_toppersystem\" name=\"resolution_images_toppersystem\" type=\"hidden\" value=\"$resolution_images_toppersystem\"><input id=\"stronglazyload_images_toppersystem\" name=\"stronglazyload_images_toppersystem\" type=\"hidden\" value=\"$stronglazyload_images_toppersystem\"><input id=\"stronglazyload_video_toppersystem\" name=\"stronglazyload_video_toppersystem\" type=\"hidden\" value=\"$stronglazyload_video_toppersystem\"><input id=\"box_intelligence_artificial_toppersystem\" name=\"box_intelligence_artificial_toppersystem\" type=\"hidden\" value=\"".$box_intelligence_artificial_toppersystem."\"><input id=\"text_ia_toppersystem\" name=\"text_ia_toppersystem\" type=\"hidden\" value=\"$text_ia_toppersystem\"><input id=\"deletepage_req_toppersystem\" name=\"deletepage_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/deletepage.php', dirname(__FILE__)))."\"><input id=\"connect_req_toppersystem\" name=\"connect_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/connect.php', dirname(__FILE__)))."\"><input id=\"downloadx_req_toppersystem\" name=\"downloadx_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('download/download.php', dirname(__FILE__)))."\"><input id=\"download_req_toppersystem\" name=\"download_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/download.php', dirname(__FILE__)))."\"><input id=\"events_req_toppersystem\" name=\"events_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/events.php', dirname(__FILE__)))."\"><input id=\"status_req_toppersystem\" name=\"status_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/status.php', dirname(__FILE__)))."\"><input id=\"status_optimization_toppersystem\" name=\"status_optimization_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/StatusOptimizationTS.php', dirname(__FILE__)))."\"><input id=\"loadstatusdefer_req_toppersystem\" name=\"loadstatusdefer_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/LoadStatusDefer_ts.php', dirname(__FILE__)))."\"><input id=\"terms_condictions_req_toppersystem\" name=\"terms_condictions_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/terms_condictions.php', dirname(__FILE__)))."\"><input id=\"send_req_toppersystem\" name=\"send_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/send.php', dirname(__FILE__)))."\"><input id=\"pageplugin_req_toppersystem\" name=\"pageplugin_req_toppersystem\" type=\"hidden\" value=\"".admin_url( "admin.php?page=toppersystem&load_management_js_ts=true" )."\"><input id=\"pageplugin_reqcss_toppersystem\" name=\"pageplugin_reqcss_toppersystem\" type=\"hidden\" value=\"".admin_url( "admin.php?page=toppersystem&load_management_css_ts=true" )."\"><input id=\"idtermsandcondictionslink_toppersystem\" name=\"idtermsandcondictionslink_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/api/terms_and_condictions_autoregistration_toppersystem.php?lang=".TopperSystemSetMainFunction::hreflang_toppersystem()."\"><input id=\"idtermsandcondictionslinkweb_toppersystem\" name=\"idtermsandcondictionslinkweb_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/apicenter/terms.php?lang=".TopperSystemSetMainFunction::hreflang_toppersystem()."\"></body>",$return);

							unset($canonical_preview_toppersystem);
							unset($status_canonical_toppersystem);
						}else{
                            if(isset($_SERVER["REQUEST_URI"])){
                                if($_SERVER["REQUEST_URI"] != ""){
                                    if(str_replace(array(".","//","wp-json","wp-admin","wp-content","wp-includes"),"",strtolower($_SERVER["REQUEST_URI"])) == strtolower($_SERVER["REQUEST_URI"])){
					                    if((count($_POST) == "0")&&(count($_GET) == "0")&&(TopperSystemAuthTS::AuthTopperSystem() != "")){                                           
                                            if(TopperSystemSetMainFunction::verify_request_server_api_toppersystem() == "ok"){
                                                #niente
                                            }else{
	                                            $ultimo_carattere_url_toppersystem=substr($_SERVER["REQUEST_URI"], strlen($_SERVER["REQUEST_URI"])-1);
	                                            if($ultimo_carattere_url_toppersystem == "/"){
												    $exclusion_pages_list_toppersystem1=[
													    "0" => "/white-list/",
													    "1" => "/whitelist/",
													    "2" => "/wishlist/",
													    "3" => "/wish-list/",
													    "4" => "/cart/",
													    "5" => "/payment/",
													    "6" => "/lista-bianca/",
													    "7" => "/lista-bianca/",
													    "8" => "/listadeidesideri/",
													    "9" => "/listadesideri/",
													    "10" => "/lista-desideri/",
													    "11" => "/lista-dei-desideri/",
													    "12" => "/carrello/",
													    "13" => "/pagamento/",
													    "14" => "/".strtolower(urlencode("weiße-Liste"))."/",
													    "15" => "/whitelist/",
													    "16" => "/wunschzettel/",
													    "17" => "/wagen/",
													    "18" => "/zahlung/",
													    "19" => "/listablanca/",
													    "20" => "/lista-blanca/",
													    "21" => "/listadedeseos/",
													    "22" => "/lista-de-deseos/",
													    "23" => "/lista-deseos/",
													    "24" => "/listadeseos/",
													    "25" => "/carro/",
													    "26" => "/pago/",
													    "27" => "/listeblanche/",
													    "28" => "/liste-blanche/",
													    "29" => "/liste-de-souhaits/",
													    "30" => "/listedesouhaits/",
													    "31" => "/liste-souhaits/",
													    "32" => "/listesouhaits/",
													    "33" => "/chariot/",
													    "34" => "/paiement/",
													    "35" => "/".strtolower(urlencode("सफेद-सूची"))."/",
													    "36" => "/".strtolower(urlencode("श्वेत-सूची"))."/",
													    "37" => "/".strtolower(urlencode("इच्छा-सूची"))."/",
													    "38" => "/".strtolower(urlencode("विश-सूची"))."/",
													    "39" => "/".strtolower(urlencode("कार्ट"))."/",
													    "40" => "/".strtolower(urlencode("भुगतान"))."/",
													    "41" => "/".strtolower(urlencode("ホワイトリスト"))."/",
													    "42" => "/".strtolower(urlencode("ウィッシュリスト"))."/",
													    "43" => "/".strtolower(urlencode("カート"))."/",
													    "44" => "/".strtolower(urlencode("支払い"))."/",
													    "45" => "/".strtolower(urlencode("białalista"))."/",
													    "46" => "/".strtolower(urlencode("biała-lista"))."/",
													    "47" => "/".strtolower(urlencode("listażyczeń"))."/",
													    "48" => "/".strtolower(urlencode("lista-życzeń"))."/",
													    "49" => "/".strtolower(urlencode("wózek"))."/",
													    "50" => "/".strtolower(urlencode("zapłata"))."/",
													    "51" => "/listabranca/",
													    "52" => "/lista-branca/",
													    "53" => "/lista-de-desejos/",
													    "54" => "/listadedesejos/",
													    "55" => "/lista-desejos/",
													    "56" => "/listadesejos/",
													    "57" => "/carrinho/",
													    "58" => "/pagamento/",
													    "59" => "/".strtolower(urlencode("белыйсписок"))."/",
													    "60" => "/".strtolower(urlencode("белый-список"))."/",
													    "61" => "/".strtolower(urlencode("списокжеланий"))."/",
													    "62" => "/".strtolower(urlencode("список-желаний"))."/",
													    "63" => "/".strtolower(urlencode("тележка"))."/",
													    "64" => "/".strtolower(urlencode("оплата"))."/",
													    "65" => "/".strtolower(urlencode("白名单"))."/",
													    "66" => "/".strtolower(urlencode("愿望清单"))."/",
													    "67" => "/".strtolower(urlencode("大车"))."/",
													    "68" => "/".strtolower(urlencode("支付"))."/",
													    "69" => "/album-album/",
													    "70" => "/whitelist/",
													    "71" => "/wishlist/",
													    "72" => "/vis-album/",
													    "73" => "/plaustrum/",
													    "74" => "/solucionis/",
													    "75" => "http://",
													    "76" => "data:image",
													    "77" => "favicon.ico",
													    "78" => "xmlrpc.php",
													    "78" => "wp-cron.php",
													    "79" => "ajax.php",
													    "80" => "connect.php",
													    "81" => "send.php",
													    "82" => "received.php",
													    "83" => "image.php",
													    "84" => "minify.php",
													    "85" => ".xml",
													    "86" => ".jpg",
													    "87" => ".jpeg",
													    "88" => ".png",
													    "89" => ".gif",
													    "90" => ".svg",
													    "91" => ".ico",
													    "92" => "data:",
													    "93" => ".css",
													    "94" => ".js",
													    "95" => ".webp",
													    "96" => ".jp2",
													    "97" => ".mp4",
													    "98" => ".avi",
													    "99" => ".json",
													    "100" => ".otf",
													    "101" => ".woff",
													    "102" => ".woff2",
													    "103" => ".ttf",
													    "104" => ".eot",
													    "105" => ".txt"
												    ];							

												    $exclusion_pages_list_toppersystem2=[
													    "0" => "/".strtolower(urlencode("قسط"))."/",
													    "1" => "/".strtolower(urlencode("عربة-التسوق"))."/",
													    "2" => "/".strtolower(urlencode("قائمة-الرغبات"))."/",
													    "3" => "/".strtolower(urlencode("قائمةالرغبات"))."/",
													    "4" => "/".strtolower(urlencode("القائمة-البيضاء"))."/",
													    "5" => "/".strtolower(urlencode("القائمةالبيضاء"))."/"
												    ];

												    $exclusion_pages_list_toppersystem3=[
													    "0" => "/".strtolower(urlencode("רשימתמשאלות"))."/",
													    "1" => "/".strtolower(urlencode("רשימת-משאלות"))."/",
													    "2" => "/".strtolower(urlencode("רשימת-הלבנים"))."/",
													    "3" => "/".strtolower(urlencode("הרשימה-הלבנה"))."/",
													    "4" => "/".strtolower(urlencode("רשימתמשאלות"))."/",
													    "5" => "/".strtolower(urlencode("רשימתהלבנים"))."/",
													    "6" => "/".strtolower(urlencode("הרשימההלבנה"))."/",
													    "7" => "/".strtolower(urlencode("תַשְׁלוּם"))."/",
													    "8" => "/".strtolower(urlencode("עֲגָלָה"))."/"
												    ];
                                                    if((function_exists('wc_get_cart_url'))&&(function_exists('wc_get_checkout_url'))){
                                                        $exclusion_pages_list_toppersystem0=array(wc_get_cart_url(),wc_get_checkout_url());
                                                        $exclusion_pages_list_toppersystem=array_merge($exclusion_pages_list_toppersystem0, $exclusion_pages_list_toppersystem1, $exclusion_pages_list_toppersystem2, $exclusion_pages_list_toppersystem3);
                                                        $exclusion_pages_list_toppersystem0=array();
                                                    }else{
                                                        $exclusion_pages_list_toppersystem=array_merge($exclusion_pages_list_toppersystem1, $exclusion_pages_list_toppersystem2, $exclusion_pages_list_toppersystem3);
                                                    }
                                                    $exclusion_pages_list_toppersystem1=array();
                                                    $exclusion_pages_list_toppersystem2=array();
                                                    $exclusion_pages_list_toppersystem3=array();
                                                    if(str_replace($exclusion_pages_list_toppersystem,"",$url) == $url){
                                                        if(TopperSystemSetMainFunction::chek_memory_toppersystem() == 1){
                                                            if ( ! defined( 'TOPPERSYSTEM_PLUGIN_MOD_REQUEST' ) ) {
	                                                            $postdata = http_build_query(
		                                                            array(
                                                                        "action" => "componentstoppersystem44ajax",
                                                                        "aursdts" => $resend_toppersystem,			                                    
                                                                        "aursseddts" => trim($resendCentraltoppersystem),
                                                                        "auurlts" => $url,
                                                                        "hreflang_toppersystem" => "en",
                                                                        "sbm_toppersystem_send" => md5(TopperSystemAuthTS::AuthTopperSystem())		                                    
		                                                            )
	                                                            );

	                                                            $opts = array('http' =>
		                                                            array(
                                                                        'timeout' => 0.1,
			                                                            'user_agent' => TopperSystemASPMTS::getRandomUserAgentAspmTs(),
			                                                            'method'  => 'POST',
			                                                            'header'  => 'Content-type: application/x-www-form-urlencoded',
			                                                            'content' => $postdata
		                                                            )
	                                                            );

	                                                            $context=stream_context_create($opts);
                                                                $contenuto_link_sito_send=@file_get_contents(admin_url( 'admin-ajax.php' ), false, $context);
	                                                            unset($contenuto_link_sito_send);
                                                                unset($context);                                        
                                                                $opts=array();
                                                                unset($postdata);
                                                            }else{
                                                                $fields = array(
                                                                    "action" => "componentstoppersystem44ajax",
                                                                    "aursdts" => $resend_toppersystem,			                                    
                                                                    "aursseddts" => trim($resendCentraltoppersystem),
                                                                    "auurlts" => $url,
                                                                    "hreflang_toppersystem" => "en",
                                                                    "sbm_toppersystem_send" => md5(TopperSystemAuthTS::AuthTopperSystem())	
                                                                );
                                                                $contenuto_link_sito_send=@TopperSystemSetMainFunction::file_curlfast_post_ts_contents(admin_url( 'admin-ajax.php' ), $fields);
                                                                unset($contenuto_link_sito_send);
                                                                $fields=array();
                                                            }

                                                            $output=str_replace(array("</head>","</HEAD>"), "<link rel=\"preload\" href=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/css/loader.css?ver=".TOPPERSYSTEM_PLUGIN_VERSION_loaderts."\" as=\"style\" /><link href=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/css/loader.css?ver=".TOPPERSYSTEM_PLUGIN_VERSION_loaderts."\" rel=\"stylesheet\" type=\"text/css\" /></head>", $output);
                                                            $output=str_replace(array("</html>","</HTML>"), "<script src=\"".$resend_toppersystem.$resendCentraltoppersystem."toppersystem/js/automatic_update.min.js?ver=".TOPPERSYSTEM_PLUGIN_VERSION."\" async></script></html>", $output);
                                                            $output=str_replace(array("</body>","</BODY>"), "<input type=\"hidden\" id=\"aursdts\" name=\"aursdts\" value=\"$resend_toppersystem\"><input type=\"hidden\" id=\"auurlts\" name=\"auurlts\" value=\"$url\"><input type=\"hidden\" id=\"aursseddts\" name=\"aursseddts\" value=\"$resendCentraltoppersystem\"><input type=\"hidden\" id=\"auajaxts\" name=\"auajaxts\" value=\"".admin_url( 'admin-ajax.php' )."\"></body>", $output);
                                                        }
                                                    }
                                                }
                                            } 
					                    }
                                    }
                                }
                            }
							$return=$output;
						}
					}
					if(!isset($_POST["toppersystem_update"])){
                        if(TopperSystemSetMainFunction::verify_request_server_api_toppersystem() == "ok"){
                            #niente
                        }else{
						    $return=TopperSystemSetMainFunction::add_smartlazyloading_toppersystem("$return","$resend_toppersystem","$resendCentraltoppersystem");
						    if(str_replace(array("\"$url\"","'$url'"),"",$return) == "$return"){
							    $return=str_replace(array("index,follow","index, follow","noindex,nofollow","noindex, nofollow","noindex,follow","noindex, follow","index,nofollow","index, nofollow"),"noindex,follow",$return);
						    }
                        }
					}

					unset($old_update_page);
					unset($old_size_page);
					unset($part_file);
					$canonical_toppersystem=""; 
					unset($canonical_toppersystem);               
					$language_toppersystem="";
					unset($language_toppersystem); 
					$title_toppersystem="";
					unset($title_toppersystem); 
					$description_toppersystem="";
					unset($description_toppersystem); 
					$keywords_toppersystem=""; 
					unset($keywords_toppersystem);                    
					$authcode_toppersystem="";
					unset($authcode_toppersystem); 
					$destination_toppersystem="";
					unset($destination_toppersystem); 
					$check_title_toppersystem="";
					unset($check_title_toppersystem); 
					$check_description_toppersystem="";
					unset($check_description_toppersystem); 
					$check_keywords_toppersystem="";
					unset($check_keywords_toppersystem); 
					$keyword_toppersystem="";
					unset($keyword_toppersystem); 
					$category_toppersystem="";
					unset($category_toppersystem); 

					$output="";
					unset($output); 
					$url="";
					unset($url); 
					$dominio="";
					unset($dominio); 
					$toppersystem_page_preview="";
					unset($toppersystem_page_preview);
					$url_toppersystem_page_preview="";
					unset($url_toppersystem_page_preview);				
					$resendCentraltoppersystem="";
					unset($resendCentraltoppersystem);
					$resendCentralWtoppersystem="";
					unset($resendCentralWtoppersystem);
					
					return $return;
				});			
				
				add_action('wp_head', function(){
					if( is_admin_bar_showing() ){
						$url=TopperSystemSetMainFunction::https_or_http()."://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
						$url_canonical=wp_get_canonical_url();
						if(($url_canonical != "")&&($url_canonical == "$url")&&(TopperSystemAuthTS::AuthTopperSystem() != "")&&(!isset($_GET["preview"]))&&(!isset($_GET["previewts"]))&&(!isset($_GET["toppersystem_page_preview"]))&&(( current_user_can( 'administrator' ) ))){
							$img=plugins_url("toppersystem/image/logo_toppersystem.png");
							echo '<style>
								#wp-admin-bar-toppersystem{
									display:inline-block !important;
								}
								#wp-admin-bar-toppersystem .icon_toppersystem{
									float:left; 
									width: 22px !important; 
									height: 22px !important; 
									margin-left: 5px; 
									margin-right: 5px;
									margin-top: 5px !important; 
									background-image:url(\''.$img.'\')
								}
								#wp-admin-bar-toppersystem .textshort_toppersystem{
									display:none !important;
								}
								#wp-admin-bar-toppersystem .textlong_toppersystem{
									display:inline-block !important;
								}
								#wp-admin-bar-toppersystem sup.sup_toppersystem{
									vertical-align: 28% !important;
									font-size:44% !important;
								}
								@media screen and (max-width: 768px) {
									#wp-admin-bar-toppersystem .icon_toppersystem{
										margin-top: 12px !important
									}								
									#wp-admin-bar-toppersystem .textshort_toppersystem{
										display:inline-block !important;
									}
									#wp-admin-bar-toppersystem .textlong_toppersystem{
										display:none !important;
									}
								}							
							</style>';
							unset($img);
						}
						unset($url);
						unset($url_canonical);
					}
				});	
				
				add_action( 'admin_bar_menu', function($admin_bar) {
					if( is_admin_bar_showing() ){
						$url=TopperSystemSetMainFunction::https_or_http()."://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
						$link_redirect=wp_get_canonical_url();
						if(($link_redirect != "")&&($link_redirect == "$url")&&(TopperSystemAuthTS::AuthTopperSystem() != "")&&(!isset($_GET["preview"]))&&(!isset($_GET["previewts"]))&&(!isset($_GET["toppersystem_page_preview"]))&&(( current_user_can( 'administrator' ) ))){
							if(str_replace("?","",$link_redirect) != "$link_redirect"){
								$link_redirect=$link_redirect."&previewts=true";
							}else{
								$link_redirect=$link_redirect."?previewts=true";
							}					
							$args = array(
								'id'    => 'toppersystem',
								'title' => '<span class="custom-icon icon_toppersystem"> </span> <span class="textshort_toppersystem">TS</span><span class="textlong_toppersystem">Topper System<sup class="sup_toppersystem"> SEO</sup></span>',
								'href'   => $link_redirect,
								'meta'   => false
							);
						}else{
							$args = array();
						}				
						$admin_bar->add_node( $args );
						
						$args=array();
						unset($link_redirect);
						unset($url);
					}				
				},999 );
				}
			}
			TopperSystemRunPublic::toppersystemrun();
		}
	}
}
?>