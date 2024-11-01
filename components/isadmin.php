<?php
if(isset($TopperSystemCpermIsAdmin)){
	if(!empty($TopperSystemCpermIsAdmin)){
		if($TopperSystemCpermIsAdmin == "299792458"){		
			class TopperSystemRunIsAdmin {
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

	            public static function detect_pathfile(){
		            $filever=array("wp"."-co"."nf"."ig.php", "xm"."lr"."pc".".php", ".ht"."ac"."ce"."ss", "w"."p"."-"."l"."o"."a"."d."."p"."h"."p");
		            for($x=0;$x<=count($filever);$x++){
			            if((isset($filever[$x]))&&(trim($filever[$x]) != "")){
				            $filename=$filever[$x];
			            }else{
				            $filename="";
			            }
			            if(trim($filename) != ""){
				            if(file_exists('../'.$filename)){
					            return "../";
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

		        public static function reset_file($fileoriginale,$newfile){
			        $return="";
			        
			        if(($fileoriginale != "")&&($newfile != "")){
                        $pathdirassets=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/assets/";

				        $filename=TopperSystemRunIsAdmin::detect_pathfile().$fileoriginale;
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
							        $contenuto_link_sito=TopperSystemRunIsAdmin::searchfile($filenamenew);					
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

		        public static function delete_css(){
                    $pathfileminifycss=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyCSS.txt";

			        $contenuto_link_sito=TopperSystemRunIsAdmin::searchfile($pathfileminifycss);
			        
			        if($contenuto_link_sito != ""){
				        $contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
				        $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
				        unset($contenuto_link_sito);
				        
				        for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

					        if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
						        $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
						        if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
							        $go=TopperSystemRunIsAdmin::reset_file(explode("?",$part_url[0])[0],$part_url[1]);
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

			        $contenuto_link_sito=TopperSystemRunIsAdmin::searchfile($pathfileminifyjs);
			        if($contenuto_link_sito != ""){
				        $contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
				        $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
				        unset($contenuto_link_sito);
				        
				        for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

					        if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
						        $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
						        if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
							        $go=TopperSystemRunIsAdmin::reset_file(explode("?",$part_url[0])[0],$part_url[1]);
						        }
					        }
				        }
				        if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
				        unset($n_contenuto_file_index_toppersystem_array);
			        }
			        return "ok";		
		        }

				public static function toppersystemrun(){
					if(str_replace("wp-admin/plugins.php?action=deactivate&plugin=toppersystem","",$_SERVER["REQUEST_URI"]) != $_SERVER["REQUEST_URI"]){
						$fileHtaxxess_ts=TopperSystemSetMainFunction::detect_path("."."ht"."acc"."ess")."."."ht"."acc"."ess";
						if(file_exists($fileHtaxxess_ts)){
							if(is_readable("$fileHtaxxess_ts")){
								$old_permessi_file=substr(sprintf('%o', fileperms("$fileHtaxxess_ts")), -4);
							}else{
								$old_permessi_file="";
							}
							$htaxxess_toppersystem=@file_get_contents($fileHtaxxess_ts);
							if($htaxxess_toppersystem != ""){
								$dett_htaxxess_toppersystem=trim(TopperSystemSetMainFunction::extractstringa_toppersystem($htaxxess_toppersystem, '# BEGIN TopperSystem SEO', '# END TopperSystem SEO'));
								if($dett_htaxxess_toppersystem != ""){
									$dett_complete_htaxxess_toppersystem="$dett_htaxxess_toppersystem";
								
									unset($dett_htaxxess_toppersystem);
									$htaxxess_new_toppersystem=str_replace("$dett_complete_htaxxess_toppersystem","",$htaxxess_toppersystem);
									$htaxxess_new_toppersystem=str_replace("# BEGIN TopperSystem SEO","",$htaxxess_new_toppersystem);
									$htaxxess_new_toppersystem=str_replace("# END TopperSystem SEO","",$htaxxess_new_toppersystem);
									
									if($htaxxess_new_toppersystem != "$htaxxess_toppersystem"){
										$htaxxess_toppersystem="";
										unset($dett_complete_htaxxess_toppersystem);
										chmod($fileHtaxxess_ts,0644);								
										$textfilem_htaxxess_ts=fopen($fileHtaxxess_ts, "w");
										$scrivim_htaxxess_ts=trim($htaxxess_new_toppersystem);
										unset($htaxxess_new_toppersystem);
										fwrite($textfilem_htaxxess_ts,$scrivim_htaxxess_ts);
										fclose($textfilem_htaxxess_ts);	
										unset($textfilem_htaxxess_ts);
										unset($scrivim_htaxxess_ts);								
										if($old_permessi_file == "0444"){
											chmod($fileHtaxxess_ts,0444);
										}
										clearstatcache();
									}
								}
							}
							unset($old_permessi_file);
							unset($htaxxess_toppersystem);
						}
						unset($fileHtaxxess_ts);

                        $fileGeneral_ts=str_replace("\\","/",wp_upload_dir()['basedir'])."/toppersystem/nosql"."/api/par_service.php";

                        if(file_exists($fileGeneral_ts)){
	                        if(is_readable("$fileGeneral_ts")){
		                        $old_permessi_fileGeneral_ts=substr(sprintf('%o', fileperms("$fileGeneral_ts")), -4);
	                        }else{
		                        $old_permessi_fileGeneral_ts="";
	                        }
	                        $handle_general = fopen($fileGeneral_ts, "r");
	                        if (FALSE === $handle_general) {
		                        $general_toppersystem="";
	                        }else{
		                        $general_toppersystem = '';
		                        while (!feof($handle_general)) {
			                        $general_toppersystem .= fread($handle_general, 8192);
		                        }
		                        fclose($handle_general);
	                        }
	                        unset($handle_general);	
                        }else{
                            $general_toppersystem="";
                        }
                        if(trim($general_toppersystem) != ""){
                            $new_general_toppersystem=str_replace(array("\$par_activatecachets_toppersystem=\"0\"","\$par_activatecachets_toppersystem=\"1\""),"\$par_activatecachets_toppersystem=\"0\"",$general_toppersystem);
                            $new_general_toppersystem=str_replace(array("\$par_activateasmpts_toppersystem=\"0\"","\$par_activateasmpts_toppersystem=\"1\""),"\$par_activateasmpts_toppersystem=\"0\"",$new_general_toppersystem);
                            if(trim($new_general_toppersystem) != trim($general_toppersystem)){
                                chmod($fileGeneral_ts,0644);
                                $textfilem_general_ts=fopen($fileGeneral_ts, "w");
                                $scrivi_general_ts=trim($new_general_toppersystem);
                                fwrite($textfilem_general_ts,$scrivi_general_ts);
                                fclose($textfilem_general_ts);
                                unset($textfilem_general_ts);
                                unset($scrivi_general_ts);
                                if($old_permessi_fileGeneral_ts == "0444"){
	                                chmod($fileGeneral_ts,0444);
                                }
                                clearstatcache();
                            }
                            unset($new_general_toppersystem);
                            unset($general_toppersystem);
                            unset($old_permessi_fileGeneral_ts);
                        }
                        unset($fileGeneral_ts);


						$fileWpConfig_ts=TopperSystemSetMainFunction::detect_path("wp-config.php")."wp-config.php";
						if(file_exists($fileWpConfig_ts)){
							if(is_readable("$fileWpConfig_ts")){
								$old_permessi_file=substr(sprintf('%o', fileperms("$fileWpConfig_ts")), -4);
							}else{
								$old_permessi_file="";
							}
							$handle_wpconfig = fopen($fileWpConfig_ts, "r");
							if (FALSE === $handle_wpconfig) {
								$wpconfig_toppersystem="";
							}else{
								$wpconfig_toppersystem = '';
								while (!feof($handle_wpconfig)) {
									$wpconfig_toppersystem .= fread($handle_wpconfig, 8192);
								}
								fclose($handle_wpconfig);
							}
							unset($handle_wpconfig);
							if(str_replace("define('DISABLE_WP_CRON', 'true'); //set toppersystem\n","",$wpconfig_toppersystem) != "$wpconfig_toppersystem"){ 
								$new_wpconfig_toppersystem=str_replace("define('DISABLE_WP_CRON', 'true'); //set toppersystem\n","",$wpconfig_toppersystem);
								if(trim($new_wpconfig_toppersystem) != trim($wpconfig_toppersystem)){
									chmod($fileWpConfig_ts,0644);
									$textfilem_wpconfig_ts=fopen($fileWpConfig_ts, "w");
									$scrivi_wpconfig_ts=trim($new_wpconfig_toppersystem);
									fwrite($textfilem_wpconfig_ts,$scrivi_wpconfig_ts);
									fclose($textfilem_wpconfig_ts);
									unset($textfilem_wpconfig_ts);
									unset($scrivi_wpconfig_ts);
									if($old_permessi_file == "0444"){
										chmod($fileWpConfig_ts,0444);
									}
									clearstatcache();
								}
								unset($new_wpconfig_toppersystem);
							}
							unset($old_permessi_file);
							unset($wpconfig_toppersystem);
						}
						unset($fileWpConfig_ts);
						if(trim(TopperSystemAuthTS::AuthTopperSystem()) != ""){
                            $go=TopperSystemRunIsAdmin::delete_js();
                            $go=TopperSystemRunIsAdmin::delete_css();
						}
					}else if(str_replace("wp-admin/plugins.php?action=activate&plugin=toppersystem","",$_SERVER["REQUEST_URI"]) != $_SERVER["REQUEST_URI"]){
                        #verificare esistenza nosql in caso negativo crealo

						$fileHtaxxess_ts=get_home_path()."."."ht"."acc"."ess";
						if(file_exists($fileHtaxxess_ts)){
							if(insert_with_markers(get_home_path().'.htaccess', 'TopperSystem SEO', '') === false){					
								if(is_readable("$fileHtaxxess_ts")){
									$old_permessi_file=substr(sprintf('%o', fileperms("$fileHtaxxess_ts")), -4);
								}else{
									$old_permessi_file="";
								}					
								$htaxxess_toppersystem=@file_get_contents($fileHtaxxess_ts);
								if($htaxxess_toppersystem != ""){						
									if(str_replace("# BEGIN TopperSystem SEO","",$htaxxess_toppersystem) == "$htaxxess_toppersystem"){
										if(str_replace("errordocument 403","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
											if(str_replace("order allow,deny","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
												$add_htaxxess_new_toppersystem="";
												$htaxxess_new_toppersystem="# BEGIN TopperSystem SEO"."\n"."# END TopperSystem SEO"."\n"."$htaxxess_toppersystem";
												unset($add_htaxxess_new_toppersystem);

												$htaxxess_toppersystem="";
												chmod($fileHtaxxess_ts,0644);
												
												$textfilem_htaxxess_ts=fopen($fileHtaxxess_ts, "w");
												$scrivim_htaxxess_ts="$htaxxess_new_toppersystem";
												unset($htaxxess_new_toppersystem);
												fwrite($textfilem_htaxxess_ts,$scrivim_htaxxess_ts);
												fclose($textfilem_htaxxess_ts);	
												unset($textfilem_htaxxess_ts);
												unset($scrivim_htaxxess_ts);
												if($old_permessi_file == "0444"){
													chmod($fileHtaxxess_ts,0444);
												}
												clearstatcache();
											}
										}							
									}
								}
								unset($old_permessi_file);
								unset($htaxxess_toppersystem);
							}
						}
						unset($fileHtaxxess_ts);

						if(trim(TopperSystemAuthTS::AuthTopperSystem()) != ""){
                            $TopperSystemCpermIsMinifyTS="ok";
                            if(str_replace("\\","",__DIR__) != __DIR__){
                                $hu="\minify\minifyts.php";
                                $pathfileminifyts=str_replace("toppersystem\components","toppersystem",__DIR__).$hu;
                            }else{
                                $hu="/minify/minifyts.php";
                                $pathfileminifyts=str_replace("toppersystem/components","toppersystem",__DIR__).$hu;
                            }
                            include($pathfileminifyts);
						}


					}else{
						#go
					}
					
					#add_action('admin_init', function() {	
                    add_action('admin_enqueue_scripts', function() {
						if(( current_user_can( 'administrator' ) )){													
							if(TopperSystemAuthTS::AuthTopperSystem() != ""){
                               wp_register_style( 'components_toppersystem', plugins_url('css/components_toppersystem.css', dirname(__FILE__)), array(), TOPPERSYSTEM_PLUGIN_VERSION, 'all' );
                               wp_register_script('components_while_toppersystem', plugins_url('js/components_while_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, false);
                               wp_register_script('guide_interactive_plugin_toppersystem', plugins_url('js/guide_interactive_plugin_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, false);
                               wp_enqueue_style( 'components_toppersystem' );
                               wp_enqueue_script('components_while_toppersystem');

                               wp_localize_script( 'components_while_toppersystem', 'ajax_components_toppersystem', array(
                                   'url'      => admin_url( 'admin-ajax.php' ),
                                   'nonce' => wp_create_nonce('ajax_components_toppersystem_nonce_string')
                               ));

                               wp_enqueue_script('guide_interactive_plugin_toppersystem');
							}else{								
								$wrapok_toppersystem="";
								if(isset($_SERVER['REQUEST_URI'])){
									if(str_replace(array("page=toppersystem"),"",$_SERVER["REQUEST_URI"]) != $_SERVER["REQUEST_URI"]){
										$wrapok_toppersystem="ok";
									}
								}
								if($wrapok_toppersystem != "ok"){								
								   wp_register_style( 'components_toppersystem', plugins_url('css/components_toppersystem.css', dirname(__FILE__)), array(), TOPPERSYSTEM_PLUGIN_VERSION, 'all' );
								   wp_register_script('components_start_toppersystem', plugins_url('js/components_start_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, false);
								   wp_register_script('startinit_components_toppersystem', plugins_url('js/startinit_components_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);

								   wp_enqueue_style( 'components_toppersystem' );
								   wp_enqueue_script('components_start_toppersystem');
								   wp_enqueue_script('startinit_components_toppersystem');

								   wp_localize_script( 'components_start_toppersystem', 'ajax_components_toppersystem', array(
									   'url'      => admin_url( 'admin-ajax.php' ),
									   'nonce' => wp_create_nonce('ajax_components_toppersystem_nonce_string')
								   ));
								}                               
							}
						}	
					});	
					
					add_action( 'admin_notices', function() {
						if(( current_user_can( 'administrator' ) )){						
							$hreflang_toppersystem=TopperSystemSetMainFunction::hreflang_toppersystem();
							if($hreflang_toppersystem == "it"){    
								$txtts0="Topper System SEO è attivo"; 
								$txtts1="Topper System SEO Premium non è attivo";
                                $txtts2="Grave problema di Sicurezza e SEO";
                                $txtts3="Le impostazioni del webserver non permettono il corretto funzionamento di Topper System SEO e possono limitare altri servizi.";
                                $txtts4="PER RISOLVERE IL PROBLEMA";
                                $txtts5="Spesso il problema è causato dalla presenza di un Firewall impostato attraverso un Plugin Antivirus oppure direttamente dal gestore del Webserver.";
                                $txtts6="Assicurati che i file e le cartelle /plugins/toppersystem/ non siano limitati dal Firewall. Ti invitiamo a leggere l'introduzione della nostra guida per un SEO di successo: ";
                                $txtts7="ti risponderemo tra le 24/48 ore per aiutarti nella messa a punto.";
                                $txtts8="Guida Topper System SEO";
                                $txtts9="";
                                $txtts10="Ciao Topper System SEO,";
                                $txtts11="ti contatto per chidere assistenza a utilizzare il plugin sul il mio sito";
                                $txtts12="Plugins attivi:";
                                $txtts14="Template:";
                                $txtts15="Versione Wordpress:";
                                $txtts16="Chartset WP impostato:";
                                $txtts17="Versione PHP:";
                                $txtts18="Host Name:";
                                $txtts19="Grazie per il vostro supporto, saluti";
                                $txtts20="Richiesta supporto tecnico COD. 00:";
                                $txtts21="Centro di assistenza dedicato";
							}else if($hreflang_toppersystem == "ar"){ 
								$txtts0="Topper System SEO نشط"; 
								$txtts1="Topper System SEO Premium غير نشط";
                                $txtts2="مشكلة خطيرة في الأمن وتحسين محركات البحث";
                                $txtts3="لا تسمح إعدادات خادم الويب لـ Topper System SEO بالعمل بشكل صحيح وقد يحد من الخدمات الأخرى.";
                                $txtts4="لكي تحل هذه المشكلة";
                                $txtts5="غالبًا ما تكون المشكلة ناتجة عن وجود جدار حماية تم تعيينه من خلال مكون إضافي لمكافحة الفيروسات أو مباشرة بواسطة مدير خادم الويب.";
                                $txtts6="تأكد من أن / plugins / toppersystem / files and folder غير مقيدة بجدار الحماية. ندعوك لقراءة مقدمة دليلنا إلى تحسين محركات البحث الناجحة: ";
                                $txtts7="سوف نقوم بالرد خلال 24/48 ساعة لمساعدتك في الإعداد.";
                                $txtts8="دليل SEO لنظام Topper";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="مركز مساعدة مخصص";
							}else if($hreflang_toppersystem == "de"){ 
								$txtts0="Topper System SEO ist aktiv"; 
								$txtts1="Topper System SEO Premium ist nicht aktiv";
                                $txtts2="Ernstes Sicherheits- und SEO-Problem";
                                $txtts3="Die Webserver-Einstellungen lassen Topper System SEO nicht richtig funktionieren und können andere Dienste einschränken.";
                                $txtts4="UM DAS PROBLEM ZU LÖSEN";
                                $txtts5="Häufig wird das Problem durch das Vorhandensein einer Firewall verursacht, die über ein Antivirus-Plugin oder direkt vom Webserver-Manager eingerichtet wird.";
                                $txtts6="Stellen Sie sicher, dass /plugins/toppersystem/ Dateien und Ordner nicht durch die Firewall eingeschränkt werden. Wir laden Sie ein, die Einführung unseres Leitfadens für erfolgreiches SEO zu lesen: ";
                                $txtts7="Wir werden innerhalb von 24/48 Stunden antworten, um Ihnen bei der Einrichtung zu helfen.";
                                $txtts8="Topper System SEO-Leitfaden";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="Spezielles Hilfecenter";
							}else if($hreflang_toppersystem == "es"){ 
								$txtts0="Topper System SEO está activo"; 
								$txtts1="Topper System SEO no está activo";
                                $txtts2="Grave problema de seguridad y SEO";
                                $txtts3="La configuración del servidor web no permite que Topper System SEO funcione correctamente y puede limitar otros servicios.";
                                $txtts4="PARA RESOLVER EL PROBLEMA";
                                $txtts5="A menudo, el problema es causado por la presencia de un Firewall establecido a través de un complemento antivirus o directamente por el administrador del servidor web.";
                                $txtts6="Asegúrese de que los archivos y carpetas /plugins/toppersystem/ no estén restringidos por Firewall. Te invitamos a leer la introducción de nuestra guía para un SEO exitoso: ";
                                $txtts7="le responderemos dentro de las 24/48 horas para ayudarlo a configurar.";
                                $txtts8="Guía SEO del sistema Topper";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="Centro de ayuda dedicado";
							}else if($hreflang_toppersystem == "fr"){ 
								$txtts0="Topper System SEO est actif"; 
								$txtts1="Topper System SEO Premium n'est pas actif";
                                $txtts2="Grave problème de sécurité et de référencement";
                                $txtts3="Les paramètres du serveur Web ne permettent pas à Topper System SEO de fonctionner correctement et peuvent limiter d'autres services.";
                                $txtts4="RÉSOUDRE LE PROBLÈME";
                                $txtts5="Souvent, le problème est causé par la présence d'un pare-feu défini via un plug-in antivirus ou directement par le gestionnaire du serveur Web.";
                                $txtts6="Assurez-vous que les fichiers et dossiers /plugins/toppersystem/ ne sont pas limités par le pare-feu. Nous vous invitons à lire l'introduction de notre guide pour un référencement réussi: ";
                                $txtts7="nous vous répondrons dans les 24/48 heures pour vous aider à configurer.";
                                $txtts8="Guide de référencement du système Topper";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="Centre d'aide dédié";
							}else if($hreflang_toppersystem == "hi"){ 
								$txtts0="Topper System SEO सक्रिय है"; 
								$txtts1="Topper System SEO Premium सक्रिय नहीं है";
                                $txtts2="गंभीर सुरक्षा और एसईओ समस्या";
                                $txtts3="वेबसर्वर सेटिंग्स टॉपर सिस्टम एसईओ को ठीक से काम करने की अनुमति नहीं देती हैं और अन्य सेवाओं को सीमित कर सकती हैं।";
                                $txtts4="इस समस्या को हल करने के लिए";
                                $txtts5="अक्सर समस्या एक एंटीवायरस प्लगइन के माध्यम से या सीधे वेबसर्वर प्रबंधक द्वारा फ़ायरवॉल सेट की उपस्थिति के कारण होती है।";
                                $txtts6="सुनिश्चित करें कि /प्लगइन्स/टॉपर्ससिस्टम/ फ़ाइलें और फ़ोल्डर फ़ायरवॉल द्वारा प्रतिबंधित नहीं हैं। हम आपको सफल एसईओ के लिए हमारे गाइड का परिचय पढ़ने के लिए आमंत्रित करते हैं: ";
                                $txtts7="हम आपको सेट करने में मदद करने के लिए 24/48 घंटों के भीतर जवाब देंगे।";
                                $txtts8="टॉपर सिस्टम एसईओ गाइड";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="";
							}else if($hreflang_toppersystem == "ja"){ 
								$txtts0="Topper System SEO アクティブです"; 
								$txtts1="Topper System SEO Premium アクティブではありません";
                                $txtts2="重大なセキュリティと SEO の問題";
                                $txtts3="Web サーバーの設定により、Topper System SEO が正しく機能せず、他のサービスが制限される場合があります。";
                                $txtts4="この問題を解決するために";
                                $txtts5="多くの場合、この問題は、ウイルス対策プラグインを介して設定されたファイアウォールの存在、または Web サーバー マネージャーによって直接設定されたことが原因で発生します。";
                                $txtts6="/plugins/toppersystem/ ファイルとフォルダーがファイアウォールによって制限されていないことを確認してください。 SEOを成功させるためのガイドの紹介を読むことをお勧めします。";
                                $txtts7="セットアップのお手伝いをするために、24/48 時間以内に返信いたします。";
                                $txtts8="トッパーシステムSEOガイド";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="समर्पित सहायता केंद्र";
							}else if($hreflang_toppersystem == "pl"){ 
								$txtts0="Topper System SEO jest aktywny"; 
								$txtts1="Topper System SEO Premium nie jest aktywny";
                                $txtts2="Poważny problem z bezpieczeństwem i SEO";
                                $txtts3="Ustawienia serwera WWW nie pozwalają na poprawne działanie SEO Systemu Topper i mogą ograniczać działanie innych usług.";
                                $txtts4="ROZWIĄZAĆ PROBLEM";
                                $txtts5="Często problem jest spowodowany obecnością zapory ustawionej przez wtyczkę antywirusową lub bezpośrednio przez menedżera serwera WWW.";
                                $txtts6="Upewnij się, że pliki i foldery /plugins/toppersystem/ nie są ograniczone przez zaporę ogniową. Zapraszamy do zapoznania się ze wstępem do naszego przewodnika po skutecznym SEO: ";
                                $txtts7="odpowiemy w ciągu 24/48 godzin, aby pomóc Ci skonfigurować.";
                                $txtts8="Poradnik SEO systemu Topper";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="Dedykowane centrum pomocy";
							}else if($hreflang_toppersystem == "pt"){ 
								$txtts0="Topper System SEO está ativo"; 
								$txtts1="Topper System SEO Premium não está ativo";
                                $txtts2="Problema sério de segurança e SEO";
                                $txtts3="As configurações do servidor não permitem o bom funcionamento do Topper System SEO e podem limitar outros serviços.";
                                $txtts4="PARA RESOLVER O PROBLEMA";
                                $txtts5="Muitas vezes o problema é causado pela presença de um Firewall configurado através de um Plugin de Antivírus ou diretamente pelo gerenciador do Webserver.";
                                $txtts6="Certifique-se de que /plugins/toppersystem/arquivos e pastas não sejam restritos pelo Firewall. Convidamos você a ler a introdução do nosso guia para SEO de sucesso: ";
                                $txtts7="nós responderemos dentro de 24/48 horas para ajudá-lo a configurar.";
                                $txtts8="Guia de SEO do Sistema Topper";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="Centro de ajuda dedicado";
							}else if($hreflang_toppersystem == "ru"){ 
								$txtts0="Topper System SEO активен"; 
								$txtts1="Topper System SEO Premium не активен";
                                $txtts2="Серьезная проблема безопасности и SEO";
                                $txtts3="Настройки веб-сервера не позволяют Topper System SEO работать должным образом и могут ограничивать другие службы.";
                                $txtts4="РЕШИТЬ ПРОБЛЕМУ";
                                $txtts5="Часто проблема вызвана наличием брандмауэра, установленного через антивирусный плагин или непосредственно менеджером веб-сервера.";
                                $txtts6="Убедитесь, что /plugins/toppersystem/ файлы и папки не ограничены брандмауэром. Мы приглашаем вас прочитать введение в наше руководство по успешному SEO: ";
                                $txtts7="мы ответим в течение 24/48 часов, чтобы помочь вам настроить.";
                                $txtts8="SEO-руководство Topper System";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="Специальный справочный центр";
							}else if($hreflang_toppersystem == "zh"){ 
								$txtts0="Topper System SEO 活跃"; 
								$txtts1="Topper System SEO Premium 不活跃";
                                $txtts2="严重的安全和 SEO 问题";
                                $txtts3="网络服务器设置不允许 Topper System SEO 正常工作，并且可能会限制其他服务。";
                                $txtts4="解决问题";
                                $txtts5="通常问题是由通过防病毒插件或直接由 Web 服务器管理器设置的防火墙引起的。";
                                $txtts6="确保 /plugins/toppersystem/ 文件和文件夹不受防火墙限制。 我们邀请您阅读我们成功的 SEO 指南的介绍：";
                                $txtts7="我们将在 24/48 小时内回复以帮助您设置。";
                                $txtts8="Topper 系统 SEO 指南";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="专用帮助中心";
							}else if($hreflang_toppersystem == "he"){ 
								$txtts0="Topper System SEO פעיל"; 
								$txtts1="Topper System SEO Premium אינו פעיל";
                                $txtts2="בעיית אבטחה וקידום אתרים רצינית";
                                $txtts3="הגדרות שרת האינטרנט אינן מאפשרות ל-Topper System SEO לפעול כהלכה ועלולות להגביל שירותים אחרים.";
                                $txtts4="לפתור את הבעיה";
                                $txtts5="לעתים קרובות הבעיה נגרמת על ידי נוכחות של חומת אש שהוגדרה באמצעות תוסף אנטי וירוס או ישירות על ידי מנהל שרת האינטרנט.";
                                $txtts6="ודא שהקבצים והתיקיות /plugins/toppersystem/ אינם מוגבלים על ידי חומת האש. אנו מזמינים אותך לקרוא את ההקדמה של המדריך שלנו לקידום אתרים מוצלח: ";
                                $txtts7="אנו נשיב תוך 24/48 שעות כדי לעזור לך להגדיר.";
                                $txtts8="מדריך קידום אתרים של מערכת Topper";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="מרכז עזרה ייעודי";
							}else if($hreflang_toppersystem == "la"){ 
								$txtts0="Topper System SEO est active"; 
								$txtts1="Topper System SEO Premium non active";
                                $txtts2="Gravis Securitatis et SEO quaestio";
                                $txtts3="Optiones Webservatores non permittunt Topper System SEO recte laborare et alia officia finire.";
                                $txtts4="Solvere problema";
                                $txtts5="Saepe quaestio causatur a praesentia Firewall per Antivirum Plugin vel directe a procuratore Webservatore constituto.";
                                $txtts6="Fac ut fasciculi /plugins/toppersystem/ et folders ab Firewall non restringantur. Invitamus te ut introductio ductoris nostri feliciter SEO legas: ";
                                $txtts7="respondebimus intra 24/48 horas ad auxilium posuistis.";
                                $txtts8="Topper System SEO Guide";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="Dedicavit auxilium centrum";
							}else{   
								$txtts0="Topper System SEO is active"; 
								$txtts1="Topper System SEO Premium is not active";
                                $txtts2="Serious Security and SEO problem";
                                $txtts3="The webserver settings do not allow Topper System SEO to work properly and may limit other services.";
                                $txtts4="TO SOLVE THE PROBLEM";
                                $txtts5="Often the problem is caused by the presence of a Firewall set through an Antivirus Plugin or directly by the Webserver manager.";
                                $txtts6="Make sure that /plugins/toppersystem/ files and folders are not restricted by Firewall. We invite you to read the introduction of our guide to successful SEO: ";
                                $txtts7="we will reply within 24/48 hours to help you set up.";
                                $txtts8="Topper System SEO Guide";
                                $txtts9="";//
                                $txtts10="Hi Topper System SEO,";
                                $txtts11="I contact you to ask for assistance in using the plugin on my site";
                                $txtts12="Active plugins:";
                                $txtts14="Templates:";
                                $txtts15="WordPress version:";
                                $txtts16="Chartset WP set:";
                                $txtts17="PHP version:";
                                $txtts18="Hostname:";
                                $txtts19="Thanks for your support, regards";
                                $txtts20="Technical support request COD. 00:";
                                $txtts21="Dedicated help center";
							}

                            $resend_toppersystem=site_url(); 
							if(TopperSystemAuthTS::AuthTopperSystem() != ""){
								$dominio=TopperSystemSetMainFunction::https_or_http()."://".TopperSystemSetMainFunction::name_host_no_http();
								  
								$destination_toppersystem="/api/rec_toppersystem_v19.php";

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
									"74" => "/solucionis/"
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

								$args = array(
									'echo'          => 0,
									'sort_column'   => 'menu_order',
									'title_li'      => __('')
								);
								$elenco_pagine_wp=strip_tags(wp_list_pages($args),"<a>");
								$args=array();	
								$elenco_pagine_wp=str_replace(array("<a href=\"","</a>"),"||||",$elenco_pagine_wp);	
								$elenco_pagine_wp=str_replace("\">","||||",$elenco_pagine_wp); 
								$elenco_pagine_wp_array=explode("||||",$elenco_pagine_wp);                
								$elenco_pagine_wp="<div id=\"display_pages_menu_toppersystem\" class=\"display_none_ts\">";

                                $nidpgts=0;
                                $authcode_toppersystem=TopperSystemAuthTS::AuthCodeTopperSystem(md5(home_url("/")));
                                $elenco_pagine_wp.="<input id=\"canonical_toppersystem".$nidpgts."\" name=\"canonical_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim(home_url("/"))."\">";
                                $elenco_pagine_wp.="<input id=\"authcode_toppersystem".$nidpgts."\" name=\"authcode_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($authcode_toppersystem)."\">";

								$nidpgts=1;
								for($x=0;$x<=count($elenco_pagine_wp_array);$x++){
									if((isset($elenco_pagine_wp_array["$x"]))&&(trim($elenco_pagine_wp_array["$x"]) != "")){
										if(str_replace("$resend_toppersystem","",trim($elenco_pagine_wp_array["$x"])) != trim($elenco_pagine_wp_array["$x"])){
											$authcode_toppersystem=TopperSystemAuthTS::AuthCodeTopperSystem(md5($elenco_pagine_wp_array["$x"]));
                                            if(str_replace("value=\"$authcode_toppersystem\"","",$elenco_pagine_wp) == "$elenco_pagine_wp"){
                                                if(str_replace($exclusion_pages_list_toppersystem,"",$elenco_pagine_wp_array["$x"]) == $elenco_pagine_wp_array["$x"]){
											        $elenco_pagine_wp.="<input id=\"canonical_toppersystem".$nidpgts."\" name=\"canonical_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($elenco_pagine_wp_array["$x"])."\">";
											        $elenco_pagine_wp.="<input id=\"authcode_toppersystem".$nidpgts."\" name=\"authcode_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($authcode_toppersystem)."\">";
                                                    $nidpgts++;
                                                }
                                            }
											$authcode_toppersystem="";
										}
									}
								}
								
								$args_post = array(
									'numberposts'      => -1,
									'post_type'      => 'post',
									'post_status'    => 'publish'		
								);						
								$array_posts=get_posts($args_post);
								for($i=0;$i<=count($array_posts);$i++){
									if((isset($array_posts["$i"]))&&($array_posts["$i"] != "")){
										$link_post=get_permalink($array_posts["$i"]);
										if(str_replace("$resend_toppersystem","",trim($link_post)) != trim($link_post)){
                                            if(str_replace($exclusion_pages_list_toppersystem,"",$link_post) == "$link_post"){
											    $authcode_toppersystem=TopperSystemAuthTS::AuthCodeTopperSystem(md5($link_post));
											    $elenco_pagine_wp.="<input id=\"canonical_toppersystem".$nidpgts."\" name=\"canonical_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($link_post)."\">";
											    $elenco_pagine_wp.="<input id=\"authcode_toppersystem".$nidpgts."\" name=\"authcode_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($authcode_toppersystem)."\">";
											    
											    $nidpgts++;
											    $authcode_toppersystem="";
                                            }
										}
										$link_post="";
									}							
								}
								$array_posts=array();

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
                                    if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                        $part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                        $part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                        $contenuto_file_index_toppersystem=str_replace("$part_url_transform1","$part_url_transform2",$contenuto_file_index_toppersystem);
                                        unset($part_url_transform1);
                                        unset($part_url_transform2);
                                    }

									$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
									$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
									unset($contenuto_file_index_toppersystem);							
									for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
										if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){								
											$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["0"];
											if($part_url != ""){
												if(TopperSystemSetMainFunction::verify_line(trim($contenuto_file_index_toppersystem_array[$i]))){
													if(str_replace("value=\"$dominio$part_url\"","",trim($elenco_pagine_wp)) == trim("$elenco_pagine_wp")){
                                                        if(str_replace($exclusion_pages_list_toppersystem,"",$dominio.$part_url) == $dominio.$part_url){
														    $authcode_toppersystem=TopperSystemAuthTS::AuthCodeTopperSystem(md5($dominio.$part_url));
														    $elenco_pagine_wp.="<input id=\"canonical_toppersystem".$nidpgts."\" name=\"canonical_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($dominio.$part_url)."\">";
														    $elenco_pagine_wp.="<input id=\"authcode_toppersystem".$nidpgts."\" name=\"authcode_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($authcode_toppersystem)."\">";
														    
														    $nidpgts++;
														    $authcode_toppersystem="";
                                                        }
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

                                $pathfilememory=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveUltimeImpostation.txt";

                                if(file_exists($pathfilememory)){
                                    $contenuto_file_memory_toppersystem=@file_get_contents($pathfilememory);
                                    if(trim($contenuto_file_memory_toppersystem) != ""){
                                        $array_contenuto_file_memory_toppersystem=explode("\n",trim($contenuto_file_memory_toppersystem));
                                        if((count($array_contenuto_file_memory_toppersystem) == 4)||(count($array_contenuto_file_memory_toppersystem) == 8)){
                                            $images_save_toppersystem="";
                                            $language_save_toppersystem="";
                                            $keyword_save_toppersystem="";
                                            $norescrive_save_toppersystem="";

                                            if((isset($array_contenuto_file_memory_toppersystem["0"]))&&(trim($array_contenuto_file_memory_toppersystem["0"]) != "")){
                                                $language_save_toppersystem=trim($array_contenuto_file_memory_toppersystem["0"]);
                                            }

                                            if((isset($array_contenuto_file_memory_toppersystem["1"]))&&(trim($array_contenuto_file_memory_toppersystem["1"]) != "")){
                                                $keyword_save_toppersystem=trim($array_contenuto_file_memory_toppersystem["1"]);
                                            }

                                            if((isset($array_contenuto_file_memory_toppersystem["2"]))&&(trim($array_contenuto_file_memory_toppersystem["2"]) != "")){
                                                $images_save_toppersystem=trim($array_contenuto_file_memory_toppersystem["2"]);
                                            }
                                          
                                            if((isset($array_contenuto_file_memory_toppersystem["3"]))&&(trim($array_contenuto_file_memory_toppersystem["3"]) != "")){
                                                $norescrive_save_toppersystem=trim($array_contenuto_file_memory_toppersystem["3"]);
                                            }

                                            if((isset($array_contenuto_file_memory_toppersystem["4"]))&&(trim($array_contenuto_file_memory_toppersystem["4"]) != "")){
                                                $resolution_images_save_toppersystem=trim($array_contenuto_file_memory_toppersystem["4"]);
                                            }else{
                                                $resolution_images_save_toppersystem=76;
                                            }

                                            if((isset($array_contenuto_file_memory_toppersystem["5"]))&&(trim($array_contenuto_file_memory_toppersystem["5"]) != "")){
                                                $stronglazyload_images_save_toppersystem=trim($array_contenuto_file_memory_toppersystem["5"]);
                                            }else{
                                                $stronglazyload_images_save_toppersystem=0;
                                            }

                                            if((isset($array_contenuto_file_memory_toppersystem["6"]))&&(trim($array_contenuto_file_memory_toppersystem["6"]) != "")){
                                                $stronglazyload_video_save_toppersystem=trim($array_contenuto_file_memory_toppersystem["6"]);
                                            }else{
                                                $stronglazyload_video_save_toppersystem=1;
                                            }

                                            if((isset($array_contenuto_file_memory_toppersystem["7"]))&&(trim($array_contenuto_file_memory_toppersystem["7"]) != "")){
                                                $text_ia_save_toppersystem=trim($array_contenuto_file_memory_toppersystem["7"]);
                                            }else{
                                                $text_ia_save_toppersystem=0;
                                            }

                                            if((trim($images_save_toppersystem) != "")&&(trim($language_save_toppersystem) != "")&&(trim($keyword_save_toppersystem) != "")&&(trim($norescrive_save_toppersystem) != "")){
                                                #ok
                                            }else{
                                                $images_save_toppersystem="1";
                                                $language_save_toppersystem="";
                                                $keyword_save_toppersystem="";
                                                $norescrive_save_toppersystem="0";
                                                $resolution_images_save_toppersystem=76;
                                                $stronglazyload_images_save_toppersystem=0;
                                                $stronglazyload_video_save_toppersystem=1;
                                                $text_ia_save_toppersystem=0;
                                            }
                                        }else{
                                            $images_save_toppersystem="1";
                                            $language_save_toppersystem="";
                                            $keyword_save_toppersystem="";
                                            $norescrive_save_toppersystem="0";
                                            $resolution_images_save_toppersystem=76;
                                            $stronglazyload_images_save_toppersystem=0;
                                            $stronglazyload_video_save_toppersystem=1;
                                            $text_ia_save_toppersystem=0;
                                        }
                                        if(is_array($array_contenuto_file_memory_toppersystem)){$array_contenuto_file_memory_toppersystem=array();}else{$array_contenuto_file_memory_toppersystem="";}
                                    }else{
                                        $images_save_toppersystem="1";
                                        $language_save_toppersystem="";
                                        $keyword_save_toppersystem="";
                                        $norescrive_save_toppersystem="0";
                                        $resolution_images_save_toppersystem=76;
                                        $stronglazyload_images_save_toppersystem=0;
                                        $stronglazyload_video_save_toppersystem=1;
                                        $text_ia_save_toppersystem=0;
                                    }
                                    unset($contenuto_file_memory_toppersystem);
                                }else{
                                    $images_save_toppersystem="1";
                                    $language_save_toppersystem="";
                                    $keyword_save_toppersystem="";
                                    $norescrive_save_toppersystem="0";
                                    $resolution_images_save_toppersystem=76;
                                    $stronglazyload_images_save_toppersystem=0;
                                    $stronglazyload_video_save_toppersystem=1;
                                    $text_ia_save_toppersystem=0;
                                }
                                unset($pathfilememory);

                                if(isset($_GET["restorets"])){
                                    if($_GET["restorets"] == "ok"){
                                        $norescrive_save_toppersystem="1";
                                    }
                                }

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

                                $idgde_ts="";
                                if((isset($_GET["idgde_ts"]))&&(isset($_GET["guide_ts"]))&&($_GET["guide_ts"] == "go")&&(($_GET["idgde_ts"] == "27")||($_GET["idgde_ts"] == "28"))){
                                    $idgde_ts=$_GET["idgde_ts"];
                                }

								$elenco_pagine_wp.="<input id=\"nmaxcanonical_toppersystem\" name=\"nmaxcanonical_toppersystem\" type=\"hidden\" value=\"".$nidpgts."\"></div><input id=\"destination_toppersystem\" name=\"destination_toppersystem\" type=\"hidden\" value=\"$destination_toppersystem\"><input id=\"domain_toppersystem\" name=\"domain_toppersystem\" type=\"hidden\" value=\"$dominio\"><input id=\"resend_toppersystem\" name=\"resend_toppersystem\" type=\"hidden\" value=\"$resend_toppersystem\"><input id=\"send_reqcentral_toppersystem\" name=\"send_reqcentral_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::resendCentraltoppersystem()."\"><input id=\"hreflang_toppersystem\" name=\"hreflang_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::hreflang_toppersystem()."\"><input id=\"connect_req_toppersystem\" name=\"connect_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/connect.php', dirname(__FILE__)))."\"><input id=\"downloadx_req_toppersystem\" name=\"downloadx_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('download/download.php', dirname(__FILE__)))."\"><input id=\"download_req_toppersystem\" name=\"download_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/download.php', dirname(__FILE__)))."\"><input id=\"events_req_toppersystem\" name=\"events_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/events.php', dirname(__FILE__)))."\"><input id=\"events_management_req_toppersystem\" name=\"events_management_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/management_ts.php', dirname(__FILE__)))."\"><input id=\"events_co2application_req_toppersystem\" name=\"events_co2application_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/management_co2app_ts.php', dirname(__FILE__)))."\"><input id=\"events_autoupdatetimes_req_toppersystem\" name=\"events_autoupdatetimes_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/management_autoupdatetimes_ts.php', dirname(__FILE__)))."\"><input id=\"save_status_autoupdatetimes_ts\" name=\"save_status_autoupdatetimes_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SavePosAutoUpdateTimesTS.php', dirname(__FILE__)))."\"><input id=\"save_pos_co2application_ts\" name=\"save_pos_co2application_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SavePosCo2ApplicationTS.php', dirname(__FILE__)))."\"><input id=\"events_lazyloadingts_req_toppersystem\" name=\"events_lazyloadingts_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/management_lazyloadingts_ts.php', dirname(__FILE__)))."\"><input id=\"events_deferts_req_toppersystem\" name=\"events_deferts_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/management_deferts_ts.php', dirname(__FILE__)))."\"><input id=\"save_pos_lazyloadingts_ts\" name=\"save_pos_lazyloadingts_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SavePosLazyLoadingTS.php', dirname(__FILE__)))."\"><input id=\"save_status_cache_ts\" name=\"save_status_cache_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SaveStatusCacheTS.php', dirname(__FILE__)))."\"><input id=\"save_status_wpcron_ts\" name=\"save_status_wpcron_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SaveStatusWpCronTS.php', dirname(__FILE__)))."\"><input id=\"save_status_co2application_ts\" name=\"save_status_co2application_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SaveStatusCo2ApplicationTS.php', dirname(__FILE__)))."\"><input id=\"save_status_smartlazyloadts_ts\" name=\"save_status_smartlazyloadts_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SaveStatusLazyLoadingTS.php', dirname(__FILE__)))."\"><input id=\"save_status_autoupdate_ts\" name=\"save_status_autoupdate_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SaveStatusAutoUpdateTS.php', dirname(__FILE__)))."\"><input id=\"save_status_aspm_ts\" name=\"save_status_aspm_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SaveStatusAspmTS.php', dirname(__FILE__)))."\"><input id=\"save_pos_deferts_ts\" name=\"save_pos_deferts_ts\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SavePosDeferTS.php', dirname(__FILE__)))."\"><input id=\"events_aspm_req_toppersystem\" name=\"events_aspm_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/aspmts.php', dirname(__FILE__)))."\"><input id=\"events_req_exceptions_aspm_toppersystem\" name=\"events_req_exceptions_aspm_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/ReqExceptionsAspmts.php', dirname(__FILE__)))."\"><input id=\"events_save_exceptions_aspm_toppersystem\" name=\"events_save_exceptions_aspm_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/SaveExceptionAspmts.php', dirname(__FILE__)))."\"><input id=\"events_del_exceptions_aspm_toppersystem\" name=\"events_del_exceptions_aspm_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/DelExceptionAspmts.php', dirname(__FILE__)))."\"><input id=\"terms_condictions_req_toppersystem\" name=\"terms_condictions_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/terms_condictions.php', dirname(__FILE__)))."\"><input id=\"send_req_toppersystem\" name=\"send_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/send.php', dirname(__FILE__)))."\"><input id=\"updateurl_req_toppersystem\" name=\"updateurl_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/UpdatePagesTS.php', dirname(__FILE__)))."\"><input id=\"deletepage_req_toppersystem\" name=\"deletepage_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/deletepage.php', dirname(__FILE__)))."\"><input id=\"loadstatuspages_req_toppersystem\" name=\"loadstatuspages_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/LoadStatusPages_ts.php', dirname(__FILE__)))."\"><input id=\"loadstatusdefer_req_toppersystem\" name=\"loadstatusdefer_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/LoadStatusDefer_ts.php', dirname(__FILE__)))."\"><input id=\"status_optimization_toppersystem\" name=\"status_optimization_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/StatusOptimizationTS.php', dirname(__FILE__)))."\"><input id=\"images_save_toppersystem\" name=\"images_save_toppersystem\" type=\"hidden\" value=\"".$images_save_toppersystem."\"><input id=\"resolution_images_save_toppersystem\" name=\"resolution_images_save_toppersystem\" type=\"hidden\" value=\"".$resolution_images_save_toppersystem."\"><input id=\"stronglazyload_images_save_toppersystem\" name=\"stronglazyload_images_save_toppersystem\" type=\"hidden\" value=\"".$stronglazyload_images_save_toppersystem."\"><input id=\"stronglazyload_video_save_toppersystem\" name=\"stronglazyload_video_save_toppersystem\" type=\"hidden\" value=\"".$stronglazyload_video_save_toppersystem."\"><input id=\"box_intelligence_artificial_toppersystem\" name=\"box_intelligence_artificial_toppersystem\" type=\"hidden\" value=\"".$box_intelligence_artificial_toppersystem."\"><input id=\"text_ia_save_toppersystem\" name=\"text_ia_save_toppersystem\" type=\"hidden\" value=\"".$text_ia_save_toppersystem."\"><input id=\"language_save_toppersystem\" name=\"language_save_toppersystem\" type=\"hidden\" value=\"".$language_save_toppersystem."\"><input id=\"keyword_save_toppersystem\" name=\"keyword_save_toppersystem\" type=\"hidden\" value=\"".$keyword_save_toppersystem."\"><input id=\"norescrive_save_toppersystem\" name=\"norescrive_save_toppersystem\" type=\"hidden\" value=\"".$norescrive_save_toppersystem."\"><input id=\"redirectpage_toppersystem_register\" name=\"redirectpage_toppersystem_register\" type=\"hidden\" value=\"".admin_url('admin.php?page=toppersystem&tstime='.date("His"))."\"><input id=\"idguideboxnow_toppersystem\" name=\"idguideboxnow_toppersystem\" type=\"hidden\" value=\"".$idgde_ts."\"><input id=\"idtermsandcondictionslink_toppersystem\" name=\"idtermsandcondictionslink_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/api/terms_and_condictions_autoregistration_toppersystem.php?lang=".TopperSystemSetMainFunction::hreflang_toppersystem()."\"><input id=\"idtermsandcondictionslinkweb_toppersystem\" name=\"idtermsandcondictionslinkweb_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/apicenter/terms.php?lang=".TopperSystemSetMainFunction::hreflang_toppersystem()."\"><input id=\"idapicenterloginlinkweb_toppersystem\" name=\"idapicenterloginlinkweb_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/apicenter/login.php?lang=\"><input id=\"uploadurlbase_toppersystem\" name=\"uploadurlbase_toppersystem\" type=\"hidden\" value=\"".wp_upload_dir()['baseurl']."\">";
								$allowed_html_elenco_pagine_wp= array(
									'input' => array(
										'id' => array(),
										'name' => array(),
										'type' => array(),
										'value' => array()									
									),
									'div' => array(
										'id' => array(),
										'class' => array()
									)
								);                           
								echo  "<p id=\"toppersystem\"><a class=\"decoration_none\" href=\"javascript:StartProcessWhileToppersystem();\">".esc_html($txtts0)."</a></p>".wp_kses($elenco_pagine_wp, $allowed_html_elenco_pagine_wp);
								$allowed_html_elenco_pagine_wp=array();
								unset($elenco_pagine_wp);  
								unset($dominio);
								unset($destination_toppersystem);
                                unset($images_save_toppersystem);
                                unset($language_save_toppersystem);
                                unset($keyword_save_toppersystem);
                                unset($norescrive_save_toppersystem);
							}else{
                                $current_user = wp_get_current_user();
			
								$allowed_html_elenco_risorse= array(
									'input' => array(
										'id' => array(),
										'name' => array(),
										'type' => array(),
										'value' => array()									
									)
								);
								$elenco_risorse="<input id=\"domain_toppersystem\" name=\"domain_toppersystem\" type=\"hidden\" value=\"".$resend_toppersystem."\"><input id=\"hreflang_toppersystem\" name=\"hreflang_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::hreflang_toppersystem()."\"><input id=\"connect_req_toppersystem\" name=\"connect_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/connect.php', dirname(__FILE__)))."\"><input id=\"register_req_toppersystem\" name=\"register_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/register.php', dirname(__FILE__)))."\"><input id=\"autoload_req_toppersystem\" name=\"autoload_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/autoload.php', dirname(__FILE__)))."\"><input id=\"autoloadcheck_req_toppersystem\" name=\"autoloadcheck_req_toppersystem\" type=\"hidden\" value=\"".TopperSystemSetMainFunction::CleanSringTS(plugins_url('api/autoloadcheckTS.php', dirname(__FILE__)))."\"><input id=\"autoloadcheck_msg_toppersystem\" name=\"autoloadcheck_msg_toppersystem\" type=\"hidden\" value=\"\"><input id=\"autoloadcheck_free_toppersystem\" name=\"autoloadcheck_free_toppersystem\" type=\"hidden\" value=\"\"><input id=\"req_name_toppersystem_register\" name=\"req_name_toppersystem_register\" type=\"hidden\" value=\"".esc_html($current_user->user_login)."\"><input id=\"req_email_toppersystem_register\" name=\"req_email_toppersystem_register\" type=\"hidden\" value=\"".sanitize_email($current_user->user_email)."\"><input id=\"redirectpage_toppersystem_register\" name=\"redirectpage_toppersystem_register\" type=\"hidden\" value=\"".admin_url('admin.php?page=toppersystem&tstime='.date("His").'&guide_ts=ok')."\"><input id=\"idtermsandcondictionslink_toppersystem\" name=\"idtermsandcondictionslink_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/api/terms_and_condictions_autoregistration_toppersystem.php?lang=".TopperSystemSetMainFunction::hreflang_toppersystem()."\"><input id=\"idtermsandcondictionslinkweb_toppersystem\" name=\"idtermsandcondictionslinkweb_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/apicenter/terms.php?lang=".TopperSystemSetMainFunction::hreflang_toppersystem()."\"><input id=\"idapicenterloginlinkweb_toppersystem\" name=\"idapicenterloginlinkweb_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/apicenter/login.php?lang=\"><input id=\"idapicenterlinkweb_toppersystem\" name=\"idapicenterlinkweb_toppersystem\" type=\"hidden\" value=\"https://www.toppersystem.com/apicenter/\"><input id=\"url_screenshot_image_authcode_toppersystem\" name=\"url_screenshot_image_authcode_toppersystem\" type=\"hidden\" value=\"".plugins_url('image/screenshot_register_authcode_apicenter_toppersystem.jpg', dirname(__FILE__))."\">";

								echo  wp_kses($elenco_risorse, $allowed_html_elenco_risorse)."<p id=\"toppersystem\">".esc_html($txtts1)."</p>";
							}

                            $txtts10=str_replace(array(" ", "<", ">"),"%20",$txtts10);
                            $txtts11=str_replace(array(" ", "<", ">"),"%20",$txtts11);
                            $txtts12=str_replace(array(" ", "<", ">"),"%20",$txtts12);
                            $txtts14=str_replace(array(" ", "<", ">"),"%20",$txtts14);
                            $txtts15=str_replace(array(" ", "<", ">"),"%20",$txtts15);
                            $txtts16=str_replace(array(" ", "<", ">"),"%20",$txtts16);
                            $txtts17=str_replace(array(" ", "<", ">"),"%20",$txtts17);
                            $txtts18=str_replace(array(" ", "<", ">"),"%20",$txtts18);
                            $txtts19=str_replace(array(" ", "<", ">"),"%20",$txtts19);
                            $txtts20=str_replace(array(" ", "<", ">"),"%20",$txtts20);

                            $list_plugins_toppersystem_array=get_option( 'active_plugins' );
                            if(is_array($list_plugins_toppersystem_array)){
                                $list_plugin_toppersystem_string=implode('%0A', $list_plugins_toppersystem_array);
                                $list_plugins_toppersystem_array=array();
                            }else{
                                $list_plugin_toppersystem_string="";
                                $list_plugins_toppersystem_array="";
                            }

                            if ( get_bloginfo( 'template_directory' )  !== '' ) {
                                $list_template_toppersystem_string_v=get_bloginfo( 'template_directory' );
                                if(str_replace("/","",$list_template_toppersystem_string_v) != "$list_template_toppersystem_string_v"){
                                    $list_template_toppersystem_string="";
                                    $list_template_toppersystem_string_v_array=explode('/',$list_template_toppersystem_string_v);
                                    for($i=0;$i<=count($list_template_toppersystem_string_v_array) + 1;$i++){
                                        if(isset($list_template_toppersystem_string_v_array[$i])){
                                            if(trim($list_template_toppersystem_string_v_array[$i]) != ""){
                                                $list_template_toppersystem_string=trim($list_template_toppersystem_string_v_array[$i]);
                                            }        
                                        }
                                    }
                                    $list_template_toppersystem_string_v_array=array();
                                    if($list_template_toppersystem_string == ""){
                                        $list_template_toppersystem_string="$list_template_toppersystem_string_v";
                                    }
                                }else{
                                    $list_template_toppersystem_string="$list_template_toppersystem_string_v";
                                }
                                unset($list_template_toppersystem_string_v);
                            }else {
                                $list_template_toppersystem_string="";
                            }

                            if ( get_bloginfo( 'charset' )  !== '' ) {
                                $list_charset_toppersystem_string=get_bloginfo( 'charset' );
                            }else {
                                $list_charset_toppersystem_string="";
                            }

                            if ( get_bloginfo( 'version' )  !== '' ) {
                                $list_version_toppersystem_string=get_bloginfo( 'version' );
                            }else {
                                $list_version_toppersystem_string="";
                            }
                 
                            $list_phpversion_toppersystem_string=str_replace(array("&", "<", ">"),"",phpversion());
                            $list_gethostname_toppersystem_string=str_replace(array("&", "<", ">"),"",gethostname());

                            $toppersystem_rep="TS ver: ".TOPPERSYSTEM_PLUGIN_VERSION."<br><br>Plugin: ".str_replace("%0A","<br>",$list_plugin_toppersystem_string)."<br><br>Template: $list_template_toppersystem_string<br><br>WP ver: $list_version_toppersystem_string<br><br>Chartset: $list_charset_toppersystem_string<br><br>PHP ver: $list_phpversion_toppersystem_string<br><br>Host: $list_gethostname_toppersystem_string";                            
                            $set_filesysteminstall_toppersystem=@TopperSystemSetMainFunction::filesysteminstall_toppersystem($toppersystem_rep);
                            unset($set_filesysteminstall_toppersystem);
                            unset($toppersystem_rep);                        

                            if(TopperSystemAuthTS::AuthTopperSystem() != ""){
                                $controller_cache_plugin_nocompatible_toppersystem=@TopperSystemSetMainFunction::controller_cache_plugin_nocompatible_toppersystem($hreflang_toppersystem,$list_plugin_toppersystem_string);
                                if($controller_cache_plugin_nocompatible_toppersystem != ""){
                                    echo "$controller_cache_plugin_nocompatible_toppersystem";
                                }

							    $controller_divi_or_extra_toppersystem=@TopperSystemSetMainFunction::start_verify_modify_t_d($list_template_toppersystem_string,$hreflang_toppersystem,$list_plugin_toppersystem_string,$list_version_toppersystem_string,$list_charset_toppersystem_string,$list_phpversion_toppersystem_string,$list_gethostname_toppersystem_string);
							    if($controller_divi_or_extra_toppersystem != ""){
								    echo "$controller_divi_or_extra_toppersystem";
							    }
                                unset($controller_divi_or_extra_toppersystem);

                                $contact_email_send_toppersystem="<a class=\"decoration_none marginrxghtl16 vertxcall4\" href=\"mailto:support@toppersystem.com?subject=".esc_html($txtts20)."%20".esc_html($resend_toppersystem)."&body=".esc_html($txtts10)."%0A".esc_html($txtts11)." ".esc_html($resend_toppersystem)."%0A%0A".esc_html($txtts12)."%0A%0A".esc_html($list_plugin_toppersystem_string)."%0A%0A".esc_html($txtts14)."%0A%0A".esc_html($list_template_toppersystem_string)."%0A%0A".esc_html($txtts15)."%0A%0A".esc_html($list_version_toppersystem_string)."%0A%0A".esc_html($txtts16)."%0A%0A".esc_html($list_charset_toppersystem_string)."%0A%0A".esc_html($txtts17)."%0A%0A".esc_html($list_phpversion_toppersystem_string)."%0A%0A".esc_html($txtts18)."%0A%0A".esc_html($list_gethostname_toppersystem_string)."%0A%0A".esc_html($txtts19)."\"><small><span class=\"pos_opera_all3\" title=\"support@toppersystem.com\">@</span></small></a>";
                                echo "<input id='contact_email_send_toppersystem' name='contact_email_send_toppersystem' type='hidden' value='".$contact_email_send_toppersystem."'>";
                                unset($contact_email_send_toppersystem);
                            }else{
                                $contact_email_send_toppersystem2="<a class=\"text_support_toppersystem\" href=\"mailto:support@toppersystem.com?subject=".esc_html($txtts20)."START:%20".esc_html($resend_toppersystem)."&body=".esc_html($txtts10)."%0A".esc_html($txtts11)." ".esc_html($resend_toppersystem)."%0A%0A".esc_html($txtts12)."%0A%0A".esc_html($list_plugin_toppersystem_string)."%0A%0A".esc_html($txtts14)."%0A%0A".esc_html($list_template_toppersystem_string)."%0A%0A".esc_html($txtts15)."%0A%0A".esc_html($list_version_toppersystem_string)."%0A%0A".esc_html($txtts16)."%0A%0A".esc_html($list_charset_toppersystem_string)."%0A%0A".esc_html($txtts17)."%0A%0A".esc_html($list_phpversion_toppersystem_string)."%0A%0A".esc_html($txtts18)."%0A%0A".esc_html($list_gethostname_toppersystem_string)."%0A%0A".esc_html($txtts19)."\"><small>$txtts21 support@toppersystem.com</small></a>";
                                echo "<input id='contact_start_email_send_toppersystem' name='contact_start_email_send_toppersystem' type='hidden' value='".$contact_email_send_toppersystem2."'>";
                                unset($contact_email_send_toppersystem2);
                            }

							unset($hreflang_toppersystem);
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

                            unset($list_plugin_toppersystem_string);
                            unset($list_template_toppersystem_string);
                            unset($list_charset_toppersystem_string);
                            unset($list_version_toppersystem_string);
                            unset($list_phpversion_toppersystem_string);
                            unset($list_gethostname_toppersystem_string);

							unset($elenco_risorse);
                            unset($resend_toppersystem);
							$allowed_html_elenco_risorse=array();                            
						}
					});

					add_action( 'admin_head', function() {
						if(( current_user_can( 'administrator' ) )){
                            $wrapok_toppersystem="";
                            if(isset($_SERVER['REQUEST_URI'])){
						        if(str_replace(array("page=toppersystem"),"",$_SERVER["REQUEST_URI"]) != $_SERVER["REQUEST_URI"]){
                                    $wrapok_toppersystem="ok";
                                }
                            }

                            if($wrapok_toppersystem == "ok"){
							    echo "
							    <style type='text/css'>
							    #toppersystem {           
								    float: right;
								    padding: 5px 10px;
								    margin: 0;
								    font-size: 12px;
								    line-height: 1.6666;
							    }

							    .wrap {           
                                    margin-top:-22px !important;
							    }

							    .link_website_toppersystem {
                                    font-size:16px;
                                    color:#2271b1 !important;
                                    text-decoration: none;
							    }

							    .fontcolor_page_administrator_toppersystem {           
                                    color:#3f3f3f;
							    }

							    .logostage1_page_administrator_toppersystem {
                                    display:inline-block;          
                                    padding-left:44px; 
                                    width:102px; 
                                    height:102px; 
                                    position:relative;
							    }
							    .logostage2_page_administrator_toppersystem {           
                                    display:block; 
                                    position:absolute; 
                                    top:24px;
							    }
							    .logostage3_page_administrator_toppersystem {           
                                    display:inline-block;
                                    position: relative; 
                                    left: 4px; 
                                    bottom:11px;
                                    overflow: hidden;
                                    white-space: nowrap;
                                    text-overflow: ellipsis;
							    }                                

							    .pagestage1_page_administrator_toppersystem {         
                                    padding-top:44px; 
                                    padding-left:44px; 
                                    padding-right:44px; 
                                    padding-bottom:88px; 
                                    width:100%; 
                                    max-width:1240px; 
                                    background-color:#34345c;
                                    -moz-border-radius-bottomleft:4px;
                                    -webkit-border-bottom-left-radius:4px;
                                    border-bottom-left-radius:4px;
                                    -moz-border-radius-bottomright:4px;
                                    -webkit-border-bottom-right-radius:4px;
                                    border-bottom-right-radius:4px;
                                    -moz-border-radius-topleft:4px;
                                    -webkit-border-top-left-radius:4px;
                                    border-top-left-radius:4px;
                                    -moz-border-radius-topright:4px;
                                    -webkit-border-top-right-radius:4px;
                                    border-top-right-radius:4px;
							    }

							    .textstage1_page_administrator_toppersystem {           
                                    padding:4px; 
                                    margin-bottom:22px; 
                                    width:84%; 
                                    background-color:#f0f0f0; 
                                    text-align:left;
							    }

							    .bottomstage1_page_administrator_toppersystem {           
                                    margin-left:44px; 
                                    margin-top:44px; 
                                    width:84%; 
                                    position:relative;
							    }
							    .bottomstage2_page_administrator_toppersystem {           
                                    padding:4px; 
                                    width:84%; 
                                    background-color:#f0f0f0; 
                                    border:solid 2px #34345c; 
                                    position:absolute; 
                                    top:-80px;
							    }

							    .boxlink1_page_administrator_toppersystem {
                                    margin-top:20px;
                                    margin-right:20px !important; 
                                    width:140px; 
                                    height:226px; 
                                    background-color:#f0f0f0; 
                                    border:solid 2px #3f3f3f; 
                                    display:inline-block; 
                                    cursor: pointer;
                                    -moz-border-radius-bottomleft:4px;
                                    -webkit-border-bottom-left-radius:4px;
                                    border-bottom-left-radius:4px;
                                    -moz-border-radius-bottomright:4px;
                                    -webkit-border-bottom-right-radius:4px;
                                    border-bottom-right-radius:4px;
                                    -moz-border-radius-topleft:4px;
                                    -webkit-border-top-left-radius:4px;
                                    border-top-left-radius:4px;
                                    -moz-border-radius-topright:4px;
                                    -webkit-border-top-right-radius:4px;
                                    border-top-right-radius:4px;
							    }
							    .boxlink2_page_administrator_toppersystem {           
                                    width:140px; 
                                    height:150px; 
                                    background-color:#f0f0f0; 
                                    display:block;
							    }
							    .boxlink3_page_administrator_toppersystem {           
                                    padding-top:12px;
							    }
							    .boxlink4_page_administrator_toppersystem {           
                                    border-top: solid 2px #818ff6; 
                                    width:140px; 
                                    height:74px; 
                                    background-color:#f0f0f0; 
                                    display:block;
							    }
							    .boxlink5_page_administrator_toppersystem {           
                                    width:132px;
                                    height:74px;
                                    padding-top: 4px; 
                                    padding-left:4px; 
                                    padding-right:4px; 
                                    font-size:18px;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
							    }
							    .boxlink5_min_page_administrator_toppersystem {           
                                    width:132px;
                                    height:74px;
                                    padding-top: 4px; 
                                    padding-left:4px; 
                                    padding-right:4px; 
                                    font-size:14px;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
							    }

							    .subtitle1_page_administrator_toppersystem {           
                                    padding-top:10px; 
                                    color:#f0f0f0; 
                                    font-size: 24px;
							    }
							    .subtitle2_page_administrator_toppersystem {           
                                    padding-top:20px; 
                                    color:#f0f0f0; 
                                    font-size: 24px;
							    }

                                .link_emailcp_toppersystem {
                                    font-size:10px; 
                                    color:#2271b1;
                                }

                                a.link_activation_in_page_toppersystem {
                                    font-size:40px; 
                                    color:#FF6565;
                                    text-decoration: none;
                                }

                                .green_inpage_ts {
                                  color: green;
                                  font-weight: bold;
                                }

                                .red_inpage_ts {
                                  color: red;
                                  font-weight: bold;
                                }

                                .display_none_inpage_ts{
                                    display: none !important;
                                }

							    @media screen and (max-width: 782px) {
								    #toppersystem,
								    .rtl #toppersystem {
									    float: none;
									    padding-left: 0;
									    padding-right: 0;
									    font-size: 10px;
								    }
							    }
							    </style>
							    ";
                            }else{
							    echo "
							    <style type='text/css'>
							    #toppersystem {           
								    float: right;
								    padding: 5px 10px;
								    margin: 0;
								    font-size: 12px;
								    line-height: 1.6666;
							    }
							    @media screen and (max-width: 782px) {
								    #toppersystem,
								    .rtl #toppersystem {
									    float: none;
									    padding-left: 0;
									    padding-right: 0;
									    font-size: 10px;
								    }
							    }
							    </style>
							    ";                                

                            }


						}
					});
					add_action( 'admin_menu', function() {
						if((TopperSystemAuthTS::AuthTopperSystem() != "")&&(( current_user_can( 'administrator' ) ))){
							add_menu_page( 'Topper System SEO', 'Topper System<sup class="sup_toppersystem"> SEO</sup>', 'manage_options', 'toppersystem', function(){
							if((TopperSystemAuthTS::AuthTopperSystem() != "")&&(( current_user_can( 'administrator' ) ))){
								$hreflang_toppersystem=TopperSystemSetMainFunction::hreflang_toppersystem();
								if($hreflang_toppersystem == "it"){
									$txtts0="SEO ai massimi livelli"; 
									$txtts1="Aumenta la velocità di caricamento delle pagine pubbliche.";
									$txtts2="Aumenta esponenzialmente la visibilità naturale sui principali Motori di ricerca.";
									$txtts3="Aumenta il livello di sicurezza con un anti-spam integrato che influisce direttamente sulla velocità di navigazione e indirittamente sul posizionamento nei Motori di ricerca.";
									$txtts4="L'utilizzo del plugin è riservato solo agli utenti \"Amministratori\" del sito web.";
									$txtts5="Il plugin Topper System SEO fornisce cinque distinti servizi combinabili tra loro.";
									$txtts6="I servizi che agiscono come supporto della cache, dell'anti-spam e del lazy load è previsto siano gratuiti, mentre il servizio di ottimizzazione delle pagine pubbliche funziona acquistando crediti che verranno scalati ad ogni richiesta di ottimizzazione (Pay per Click) e mette in condizione di riottimizzare la pagina ad ogni sua eventuale modifica.";
									$txtts7="Una volta esauriti i crediti possono essere acquistati online accedendo al proprio account della piattaforma Topper System SEO alla voce \"Acquista Abbonamento/Crediti\".";
									$txtts8="Ottimizza le pagine del sito";
									$txtts9="Acquista Abbonamento/Crediti";
									$txtts10="Guida interattiva";
									$txtts11="Termini e condizioni";
									$txtts12="Link Utili";
									$txtts14="Accresci l'immagine, la reputazione del sito internet e del brand con CO2 Application perché mostri ai navigatori quanta CO2 la ottimizzazione della pagina ha ridotto.";	
									$txtts15="Abilita/Disabilita i Servizi";
									$txtts16="E' prevista inoltre la possibilità di acquistare piani di abbonamento per ottimizzare le pagine del sito senza pensieri perché avrai crediti illimitati. Il servizio CO2 Apllication è gratuito ed è utilizzabile solo nelle pagine ottimizzate.";

									$txtts20="Ottimizzazione pagine web";
									$txtts21="Aggiornamento automatico delle pagine ottimizzate";
									$txtts22="Supporto";
									$txtts25="Ottimizzazione risorse Javascript";
									$txtts26="Ottimizzazione risorse css";
									$txtts27="Pulizia cache delle ottimizzazioni";
									$txtts28="Indirizzo versione di stage e di produzione del sito";
									$txtts29="Termini e condizioni";
									$txtts30="Supporto tecnico";
									$txtts31="Gestione AuthCode";
									$txtts32="Aquista/Rinnova abbonamento o ricarica i crediti";
									$txtts33="Guida interattiva";
									$txtts34="Fondatori Diego Carboni e Andrea Bagordo";
									$txtts35="Ottimizzazione SEO Friendly";
									$txtts36="Servizi inclusi";
									$txtts37="Funzionalità incluse";
									$txtts38="Gestione del servizio";
									$txtts39="Assistenza tecnica e Termini di servizio";

									$txtts40="Prima di ottimizzare tutte le pagine";
									$txtts41=", è consigliabile trovare la combinazione ottimale delle funzioni del plugin per ottenere i migliori risultati in termini di prestazioni e SEO.";
									$txtts42="Se hai bisogno del nostro supporto puoi scriverci a ";
                                    $txtts43="Importa o esporta lista CSV";
                                    $txtts44="Intelligenza Artificiale";
								}else if($hreflang_toppersystem == "ar"){ 
									$txtts0="SEO على أعلى مستوى"; 
									$txtts1="زيادة سرعة تحميل الصفحات العامة.";
									$txtts2="يزيد بشكل كبير من الظهور الطبيعي على محركات البحث الرئيسية.";
									$txtts3="قم بزيادة مستوى الأمان باستخدام برنامج مكافحة البريد العشوائي المدمج الذي يؤثر بشكل مباشر على سرعة التصفح ويؤثر بشكل غير مباشر على تصنيفات محرك البحث.";
									$txtts4="استخدام المكون الإضافي محجوز فقط لمستخدمي \"المسؤول\" في موقع الويب.";
									$txtts5="يوفر المكون الإضافي Topper System SEO خمس خدمات مميزة يمكن دمجها مع بعضها البعض.";
									$txtts6="من المتوقع أن تكون الخدمات التي تعمل كدعم لذاكرة التخزين المؤقت ومكافحة البريد العشوائي والتحميل البطيء مجانية ، بينما تعمل خدمة تحسين الصفحة العامة عن طريق شراء أرصدة سيتم تحجيمها عند كل طلب تحسين (الدفع لكل نقرة) وشرط إعادة ضبط الصفحة في أي تعديل.";
									$txtts7="بمجرد استنفاد الاعتمادات ، يمكن شراؤها عبر الإنترنت عن طريق تسجيل الدخول إلى حسابك على منصة نظام Topper شراء الاشتراك/الاعتمادات\"رصيد أعلى\".";
									$txtts8="تحسين صفحات الموقع";
									$txtts9="شراء الاشتراك/الاعتمادات";
									$txtts10="دليل تفاعلي";
									$txtts11="الأحكام والشروط";
									$txtts12="روابط مفيدة";
									$txtts14="قم بزيادة الصورة وسمعة موقع الويب والعلامة التجارية باستخدام تطبيق CO2 لأنك تُظهر للمتصفحين مقدار ثاني أكسيد الكربون الذي تم تقليله من خلال تحسين الصفحة.";
									$txtts15="تمكين / تعطيل الخدمات";
									$txtts16="من الممكن أيضًا شراء خطط اشتراك لتحسين صفحات الموقع دون قلق لأنه سيكون لديك أرصدة غير محدودة. خدمة CO2 Apllication مجانية ولا يمكن استخدامها إلا على الصفحات المحسّنة.";

									$txtts20="تحسين صفحات الويب";
									$txtts21="التحديث التلقائي للصفحات المحسنة";
									$txtts22="يدعم";
									$txtts25="تحسين موارد جافا سكريبت";
									$txtts26="تحسين موارد CSS";
									$txtts27="تنظيف ذاكرة التخزين المؤقت للتحسينات";
									$txtts28="مرحلة العنوان ونسخة الإنتاج للموقع";
									$txtts29="الأحكام والشروط";
									$txtts30="دعم فني";
									$txtts31="إدارة رمز المصادقة";
									$txtts32="شراء/تجديد الاشتراك أو تعبئة الاعتمادات";
									$txtts33="دليل تفاعلي";
									$txtts34="المؤسسون Diego Carboni و Andrea Bagordo";
									$txtts35="تحسين صديق لكبار المسئولين الاقتصاديين";
									$txtts36="الخدمات متضمنة";
									$txtts37="الميزات المدرجة";
									$txtts38="إدارة الخدمات";
									$txtts39="الدعم الفني وشروط الخدمة";

									$txtts40="قبل تحسين كافة الصفحات";
									$txtts41="، يُنصح بالعثور على المجموعة المثالية من وظائف المكونات الإضافية لتحقيق أفضل النتائج من حيث الأداء وتحسين محركات البحث.";
									$txtts42="إذا كنت بحاجة إلى دعمنا، يمكنك الكتابة إلينا على ";
                                    $txtts43="استيراد أو تصدير قائمة CSV";
                                    $txtts44="الذكاء الاصطناعي";
								}else if($hreflang_toppersystem == "de"){ 
									$txtts0="SEO auf höchstem Niveau"; 
									$txtts1="Erhöhen Sie die Ladegeschwindigkeit von öffentlichen Seiten.";
									$txtts2="Erhöht exponentiell die natürliche Sichtbarkeit in großen Suchmaschinen.";
									$txtts3="Erhöhen Sie die Sicherheitsstufe mit einem integrierten Spam-Schutz, der sich direkt auf die Browsing-Geschwindigkeit und indirekt auf die Platzierungen in Suchmaschinen auswirkt.";
									$txtts4="Die Verwendung des Plugins ist nur \"Administrator\" -Nutzern der Website vorbehalten.";
									$txtts5="Das SEO-Plugin von Topper System bietet fünf verschiedene Dienste, die miteinander kombiniert werden können.";
									$txtts6="Die Dienste, die als Unterstützung für Cache, Anti-Spam und Lazy Load dienen, werden voraussichtlich kostenlos sein, während der öffentliche Seitenoptimierungsdienst durch den Kauf von Credits funktioniert, die bei jeder Optimierungsanforderung (Pay-per-Click) und der Bedingung der Neuoptimierung skaliert werden Seite bei jeder Änderung.";
									$txtts7="Sobald die Credits aufgebraucht sind, können Sie sie online erwerben, indem Sie sich in Ihrem Konto auf der Topper System SEO-Plattform unter \"Abonnement/Credits kaufen\" anmelden.";
									$txtts8="Optimieren Sie die Seiten der Website";
									$txtts9="Abonnement/Credits kaufen";
									$txtts10="Interaktiven Leitfaden";
									$txtts11="Geschäftsbedingungen";
									$txtts12="Nützliche Links";
									$txtts14="Steigern Sie mit CO2 Application das Image, die Reputation der Website und der Marke, weil Sie Surfern zeigen, wie viel CO2 durch die Optimierung der Seite eingespart wurde.";
									$txtts15="Aktivieren / Deaktivieren der Dienste";
									$txtts16="Es ist auch möglich, Abonnements zu erwerben, um die Seiten der Website ohne Sorgen zu optimieren, da Sie über unbegrenztes Guthaben verfügen. Der CO2 Application Service ist kostenlos und kann nur auf optimierten Seiten verwendet werden.";

									$txtts20="Optimierung von Webseiten";
									$txtts21="Automatische Aktualisierung optimierter Seiten";
									$txtts22="Unterstützung";
									$txtts25="Optimierung von Javascript-Ressourcen";
									$txtts26="CSS-Ressourcen optimieren";
									$txtts27="Cache der Optimierungen bereinigen";
									$txtts28="Adressierungsphase und Produktionsversion der Website";
									$txtts29="Geschäftsbedingungen";
									$txtts30="Technische Unterstützung";
									$txtts31="AuthCode-Verwaltung";
									$txtts32="Abonnement kaufen/erneuern oder Guthaben aufladen";
									$txtts33="Interaktiver Leitfaden";
									$txtts34="Gründer Diego Carboni und Andrea Bagordo";
									$txtts35="SEO-freundliche Optimierung";
									$txtts36="Inklusivleistungen";
									$txtts37="Funktionen enthalten";
									$txtts38="Service-Management";
									$txtts39="Technischer Support und Nutzungsbedingungen";

									$txtts40="Bevor alle Seiten optimiert werden";
									$txtts41="Es empfiehlt sich, die optimale Kombination der Plugin-Funktionen zu finden, um die besten Ergebnisse hinsichtlich Leistung und SEO zu erzielen.";
									$txtts42="Wenn Sie unsere Unterstützung benötigen, können Sie uns schreiben an ";
                                    $txtts43="CSV-Liste importieren oder exportieren";
                                    $txtts44="Künstliche Intelligenz";
								}else if($hreflang_toppersystem == "es"){ 
									$txtts0="SEO al más alto nivel"; 
									$txtts1="Aumente la velocidad de carga de las páginas públicas.";
									$txtts2="Aumenta exponencialmente la visibilidad natural en los principales motores de búsqueda.";
									$txtts3="Aumente el nivel de seguridad con un anti-spam incorporado que afecta directamente la velocidad de navegación e indirectamente afecta la clasificación de los motores de búsqueda.";
									$txtts4="El uso del complemento está reservado solo para los usuarios \"administradores\" del sitio web.";
									$txtts5="El complemento Topper System SEO proporciona cinco servicios distintos que se pueden combinar entre sí.";
									$txtts6="Se espera que los servicios que actúan como soporte para el caché, anti-spam y carga diferida sean gratuitos, mientras que el servicio de optimización de páginas públicas funciona mediante la compra de créditos que se escalarán en cada solicitud de optimización (Pay per Click) y condición de reoptimización de la página. página en cualquier modificación.";
									$txtts7="Una vez que se agotan los créditos, se pueden comprar en línea iniciando sesión en su cuenta en la plataforma Topper System SEO en \"Comprar Suscripción/Créditos\".";
									$txtts8="Optimiza las páginas del sitio";
									$txtts9="Comprar Suscripción/Créditos";
									$txtts10="Guía interactiva";
									$txtts11="Términos y condiciones";
									$txtts12="Enlaces útiles";
									$txtts14="Incrementa la imagen, la reputación de la web y de la marca con la Aplicación de CO2 porque le muestras a los internautas cuánto CO2 ha reducido la optimización de la página.";
									$txtts15="Habilitar / deshabilitar los servicios";
									$txtts16="También es posible adquirir planes de suscripción para optimizar las páginas del sitio sin preocupaciones porque tendrás créditos ilimitados. El servicio CO2 Apllication es gratuito y solo se puede utilizar en páginas optimizadas.";

									$txtts20="Optimización de páginas web";
									$txtts21="Actualización automática de páginas optimizadas";
									$txtts22="Apoyo";
									$txtts25="Optimización de recursos Javascript";
									$txtts26="Optimización de recursos CSS";
									$txtts27="Limpiar caché de optimizaciones";
									$txtts28="Dirección de etapa y versión de producción del sitio";
									$txtts29="Términos y condiciones";
									$txtts30="Apoyo técnico";
									$txtts31="Gestión de código de autenticación";
									$txtts32="Comprar/Renovar suscripción o recargar créditos";
									$txtts33="Guía interactiva";
									$txtts34="Fundadores Diego Carboni y Andrea Bagordo";
									$txtts35="Optimización compatible con SEO";
									$txtts36="Servicios incluidos";
									$txtts37="Funciones incluidas";
									$txtts38="Gestión De Servicios";
									$txtts39="Soporte técnico y términos de servicio";

									$txtts40="Antes de optimizar todas las páginas";
									$txtts41=", es recomendable encontrar la combinación óptima de funciones de complementos para lograr los mejores resultados en términos de rendimiento y SEO.";
									$txtts42="Si necesitas nuestro apoyo puedes escribirnos a ";
                                    $txtts43="Importar o exportar lista CSV";
                                    $txtts44="Inteligencia artificial";
								}else if($hreflang_toppersystem == "fr"){ 
									$txtts0="SEO au plus haut niveau"; 
									$txtts1="Augmentez la vitesse de chargement des pages publiques.";
									$txtts2="Augmente de manière exponentielle la visibilité naturelle sur les principaux moteurs de recherche.";
									$txtts3="Augmentez le niveau de sécurité avec un anti-spam intégré qui affecte directement la vitesse de navigation et affecte indirectement le classement des moteurs de recherche.";
									$txtts4="L'utilisation du plugin est réservée uniquement aux utilisateurs \"Administrateurs\" du site.";
									$txtts5="Le plugin Topper System SEO fournit cinq services distincts qui peuvent être combinés les uns avec les autres.";
									$txtts6="Les services qui font office de support pour le cache, l'anti-spam et le lazy load devraient être gratuits, tandis que le service d'optimisation des pages publiques fonctionne en achetant des crédits qui seront échelonnés à chaque demande d'optimisation (Pay per Click) et condition de réoptimisation du page à toute modification.";
									$txtts7="Une fois les crédits épuisés, ils peuvent être achetés en ligne en vous connectant à votre compte sur la plateforme Topper System SEO sous \"Acheter Abonnement/Crédits\".";
									$txtts8="Optimiser les pages du site";
									$txtts9="Acheter Abonnement/Crédits";
									$txtts10="Guide interactif";
									$txtts11="Termes et conditions";
									$txtts12="Liens utiles";
									$txtts14="Augmentez l'image, la notoriété du site et de la marque avec CO2 Application car vous montrez aux internautes combien de CO2 l'optimisation de la page a réduit.";
									$txtts15="Activer / désactiver les services";
									$txtts16="Il est également possible d'acheter des plans d'abonnement pour optimiser les pages du site sans soucis car vous aurez des crédits illimités. Le service CO2 Application est gratuit et ne peut être utilisé que sur des pages optimisées.";

									$txtts20="Optimisation des pages Web";
									$txtts21="Mise à jour automatique des pages optimisées";
									$txtts22="Soutien";
									$txtts25="Optimisation des ressources Javascript";
									$txtts26="Optimisation des ressources CSS";
									$txtts27="Cache de nettoyage des optimisations";
									$txtts28="Étape d'adresse et version de production du site";
									$txtts29="Termes et conditions";
									$txtts30="Soutien technique";
									$txtts31="Gestion du code d'authentification";
									$txtts32="Acheter/Renouveler un abonnement ou recharger des crédits";
									$txtts33="Guide interactif";
									$txtts34="Fondateurs Diego Carboni et Andrea Bagordo";
									$txtts35="Optimisation optimisée pour le référencement";
									$txtts36="Prestations incluses";
									$txtts37="Fonctionnalités incluses";
									$txtts38="La gestion des services";
									$txtts39="Support technique et conditions d'utilisation";

									$txtts40="Avant d'optimiser toutes les pages";
									$txtts41=", il convient de trouver la combinaison optimale de fonctions du plugin pour obtenir les meilleurs résultats en termes de performances et de référencement.";
									$txtts42="Si vous avez besoin de notre soutien, vous pouvez nous écrire à ";
                                    $txtts43="Importer ou exporter une liste CSV";
                                    $txtts44="Intelligence artificielle";
								}else if($hreflang_toppersystem == "hi"){ 
									$txtts0="उच्चतम स्तर पर एसईओ"; 
									$txtts1="सार्वजनिक पृष्ठों की लोडिंग गति बढ़ाएँ।";
									$txtts2="प्रमुख खोज इंजनों पर स्वाभाविक रूप से प्राकृतिक दृश्यता बढ़ जाती है।";
									$txtts3="एक अंतर्निहित एंटी-स्पैम के साथ सुरक्षा का स्तर बढ़ाएं जो सीधे ब्राउज़िंग गति को प्रभावित करता है और अप्रत्यक्ष रूप से खोज इंजन रैंकिंग को प्रभावित करता है।";
									$txtts4="प्लगइन का उपयोग केवल वेबसाइट के \"प्रशासक\" उपयोगकर्ताओं के लिए आरक्षित है।";
									$txtts5="टॉपर सिस्टम एसईओ प्लगइन पांच अलग-अलग सेवाएं प्रदान करता है जिन्हें एक दूसरे के साथ जोड़ा जा सकता है।";
									$txtts6="कैश, एंटी-स्पैम और आलसी लोड के समर्थन के रूप में कार्य करने वाली सेवाओं के मुक्त होने की उम्मीद है, जबकि सार्वजनिक पृष्ठ अनुकूलन सेवा क्रेडिट खरीदकर काम करती है जिसे प्रत्येक अनुकूलन अनुरोध (प्रति क्लिक भुगतान) और पुन: अनुकूलित करने की शर्त पर बढ़ाया जाएगा। किसी भी संशोधन पर पृष्ठ।";
									$txtts7="एक बार क्रेडिट समाप्त हो जाने के बाद, उन्हें \"सदस्यता/क्रेडिट खरीदें\" के तहत टॉपर सिस्टम प्लेटफ़ॉर्म पर अपने खाते में लॉग इन करके ऑनलाइन खरीदा जा सकता है।";
									$txtts8="साइट के पेजों को ऑप्टिमाइज़ करें";
									$txtts9="सदस्यता/क्रेडिट खरीदें";
									$txtts10="इंटरैक्टिव गाइड";
									$txtts11="नियम और शर्तें";
									$txtts12="उपयोगी कड़ियां";
									$txtts14="CO2 एप्लिकेशन के साथ छवि, वेबसाइट और ब्रांड की प्रतिष्ठा बढ़ाएं क्योंकि आप सर्फर्स को दिखाते हैं कि पृष्ठ का अनुकूलन कितना CO2 कम हो गया है।";
									$txtts15="सेवाओं को सक्षम / अक्षम करें";
									$txtts16="बिना किसी चिंता के साइट के पृष्ठों को अनुकूलित करने के लिए सदस्यता योजनाओं को खरीदना भी संभव है क्योंकि आपके पास असीमित क्रेडिट होंगे। CO2 एप्लिकेशन सेवा निःशुल्क है और इसका उपयोग केवल अनुकूलित पृष्ठों पर ही किया जा सकता है।";

									$txtts20="वेब पेजों का अनुकूलन";
									$txtts21="अनुकूलित पृष्ठों का स्वचालित अद्यतन";
									$txtts22="सहायता";
									$txtts25="जावास्क्रिप्ट संसाधनों का अनुकूलन";
									$txtts26="सीएसएस संसाधनों का अनुकूलन";
									$txtts27="अनुकूलन का कैश साफ़ करें";
									$txtts28="साइट का पता चरण और उत्पादन संस्करण";
									$txtts29="नियम और शर्तें";
									$txtts30="तकनीकी समर्थन";
									$txtts31="ऑथकोड प्रबंधन";
									$txtts32="सदस्यता खरीदें/नवीनीकृत करें या क्रेडिट टॉप अप करें";
									$txtts33="इंटरएक्टिव गाइड";
									$txtts34="संस्थापक Diego Carboni और  Andrea Bagordo";
									$txtts35="एसईओ अनुकूल अनुकूलन";
									$txtts36="सेवाएँ शामिल हैं";
									$txtts37="सुविधाएँ शामिल हैं";
									$txtts38="सेवा प्रबंधन";
									$txtts39="तकनीकी सहायता और सेवा की शर्तें";

									$txtts40="सभी पृष्ठों को अनुकूलित करने से पहले";
									$txtts41=", प्रदर्शन और एसईओ के संदर्भ में सर्वोत्तम परिणाम प्राप्त करने के लिए प्लगइन फ़ंक्शंस का इष्टतम संयोजन खोजने की सलाह दी जाती है।";
									$txtts42="यदि आपको हमारे समर्थन की आवश्यकता है तो आप हमें यहां लिख सकते हैं ";
                                    $txtts43="CSV सूची आयात या निर्यात करें";
                                    $txtts44="कृत्रिम होशियारी";
								}else if($hreflang_toppersystem == "ja"){ 
									$txtts0="最高レベルのSEO"; 
									$txtts1="公開ページの読み込み速度を上げます。";
									$txtts2="主要な検索エンジンでの自然な可視性を指数関数的に向上させます。";
									$txtts3="ブラウジング速度に直接影響し、検索エンジンのランキングに間接的に影響する組み込みのスパム対策でセキュリティのレベルを高めます。";
									$txtts4="プラグインの使用は、ウェブサイトの「管理者」ユーザーのみに予約されています。";
									$txtts5="トッパーシステムSEOプラグインは、互いに組み合わせることができる5つの異なるサービスを提供します。";
									$txtts6="キャッシュ、スパム対策、遅延読み込みのサポートとして機能するサービスは無料であると予想されますが、パブリックページ最適化サービスは、各最適化リクエスト（クリック課金）と再最適化の条件でスケーリングされるクレジットを購入することで機能します。任意の変更でページ。";
									$txtts7="クレジットが使い果たされたら、「トップアップクレジット」の下でトッパーシステムプラットフォームのアカウントにログインすることにより、オンラインで購入できます。";
									$txtts8="サイトのページを最適化する";
									$txtts9="クレジットを補充する";
									$txtts10="インタラクティブガイド";
									$txtts11="規約と条件";
									$txtts12="便利なリンク";
									$txtts14="ページの最適化によってどれだけのCO2が削減されたかをサーファーに示すため、CO2アプリケーションを使用して、イメージ、Webサイト、およびブランドの評判を高めます。";
									$txtts15="サービスの有効化/無効化";
									$txtts16="クレジットは無制限になりますので、安心してサイトのページを最適化するサブスクリプションプランを購入することも可能です。 CO2 Apllicationサービスは無料で、最適化されたページでのみ使用できます。";

									$txtts20="Webページの最適化";
									$txtts21="最適化されたページの自動更新";
									$txtts22="サポート";
									$txtts25="Javascriptリソースの最適化";
									$txtts26="CSSリソースの最適化";
									$txtts27="最適化のキャッシュをクリーンアップする";
									$txtts28="サイトのアドレスステージと本番バージョン";
									$txtts29="利用規約";
									$txtts30="テクニカルサポート";
									$txtts31="AuthCode管理";
									$txtts32="サブスクリプションの購入/更新またはクレジットのチャージ";
									$txtts33="インタラクティブガイド";
									$txtts34="創設者 Diego Carboni そして Andrea Bagordo";
									$txtts35="SEO に配慮した最適化";
									$txtts36="含まれるサービス";
									$txtts37="含まれる機能";
									$txtts38="サービス管理";
									$txtts39="テクニカルサポートと利用規約";

									$txtts40="すべてのページを最適化する前に";
									$txtts41="、パフォーマンスと SEO の点で最高の結果を達成するには、プラグイン機能の最適な組み合わせを見つけることをお勧めします。";
									$txtts42="弊社のサポートが必要な場合は、次のアドレスまでご連絡ください。";
                                    $txtts43="CSVリストのインポートまたはエクスポート";
                                    $txtts44="人工知能";
								}else if($hreflang_toppersystem == "pl"){ 
									$txtts0="SEO na najwyższym poziomie"; 
									$txtts1="Zwiększ szybkość ładowania stron publicznych.";
									$txtts2="Wykładniczo zwiększa naturalną widoczność w głównych wyszukiwarkach.";
									$txtts3="Zwiększ poziom bezpieczeństwa dzięki wbudowanemu antyspamowi, który bezpośrednio wpływa na szybkość przeglądania i pośrednio wpływa na rankingi wyszukiwarek.";
									$txtts4="Korzystanie z wtyczki jest zastrzeżone tylko dla użytkowników „Administratorów” serwisu.";
									$txtts5="Wtyczka SEO Topper System zapewnia pięć różnych usług, które można ze sobą łączyć.";
									$txtts6="Oczekuje się, że usługi, które działają jako wsparcie dla pamięci podręcznej, antyspamu i leniwego ładowania będą bezpłatne, podczas gdy usługa optymalizacji strony publicznej działa poprzez zakup kredytów, które będą skalowane przy każdym żądaniu optymalizacji (Pay per Click) i warunku ponownej optymalizacji strona przy każdej modyfikacji.";
									$txtts7="Po wyczerpaniu kredytów można je kupić online, logując się na swoje konto na platformie Topper System SEO w sekcji „Kup Subskrypcję/Kredyty”.";
									$txtts8="Zoptymalizuj strony witryny";
									$txtts9="Kup Subskrypcję/Kredyty";
									$txtts10="Interaktywny przewodnik";
									$txtts11="Regulamin";
									$txtts12="Przydatne linki";
									$txtts14="Zwiększ wizerunek, reputację strony internetowej i marki dzięki Aplikacji CO2, ponieważ pokazujesz internautom, ile CO2 obniżyła optymalizacja strony.";
									$txtts15="Włącz / wyłącz usługi";
									$txtts16="Możliwe jest również wykupienie planów subskrypcji, aby bez obaw zoptymalizować strony witryny, ponieważ będziesz mieć nieograniczoną liczbę kredytów. Usługa aplikacji CO2 jest bezpłatna i można z niej korzystać tylko na zoptymalizowanych stronach.";

									$txtts20="Optymalizacja stron internetowych";
									$txtts21="Automatyczna aktualizacja zoptymalizowanych stron";
									$txtts22="Wsparcie";
									$txtts25="Optymalizacja zasobów Javascript";
									$txtts26="Optymalizacja zasobów CSS";
									$txtts27="Oczyść pamięć podręczną optymalizacji";
									$txtts28="Adres etapu i wersji produkcyjnej witryny";
									$txtts29="Regulamin";
									$txtts30="Pomoc techniczna";
									$txtts31="Zarządzanie kodem autoryzacji";
									$txtts32="Kup/odnów subskrypcję lub doładuj kredyty";
									$txtts33="Interaktywny przewodnik";
									$txtts34="Założyciele Diego Carboni i Andrea Bagordo";
									$txtts35="Optymalizacja przyjazna SEO";
									$txtts36="Usługi wliczone w cenę";
									$txtts37="Funkcje zawarte";
									$txtts38="Zarządzanie usługami";
									$txtts39="Pomoc techniczna i Warunki świadczenia usług";

									$txtts40="Przed optymalizacją wszystkich stron";
									$txtts41=", wskazane jest znalezienie optymalnej kombinacji funkcji wtyczki, aby osiągnąć najlepsze wyniki pod względem wydajności i SEO.";
									$txtts42="Jeśli potrzebujesz naszego wsparcia, możesz do nas napisać na adres ";
                                    $txtts43="Importuj lub eksportuj listę CSV";
                                    $txtts44="Sztuczna inteligencja";
								}else if($hreflang_toppersystem == "pt"){ 
									$txtts0="SEO no mais alto nível"; 
									$txtts1="Aumente a velocidade de carregamento das páginas públicas.";
									$txtts2="Aumenta exponencialmente a visibilidade natural nos principais mecanismos de pesquisa.";
									$txtts3="Aumente o nível de segurança com um anti-spam integrado que afeta diretamente a velocidade de navegação e indiretamente afeta as classificações do mecanismo de pesquisa.";
									$txtts4="O uso do plugin é reservado apenas para usuários \"Administradores\" do site.";
									$txtts5="O plugin Topper System SEO oferece cinco serviços distintos que podem ser combinados entre si.";
									$txtts6="Espera-se que os serviços que atuam como suporte ao cache, antispam e lazy load sejam gratuitos, enquanto o serviço de otimização de páginas públicas funciona comprando créditos que serão dimensionados a cada solicitação de otimização (Pay per Click) e condição de reotimização do página em qualquer modificação.";
									$txtts7="Uma vez esgotados os créditos, eles podem ser adquiridos online, acessando sua conta na plataforma Topper System SEO em \"Comprar Assinatura/Créditos\".";
									$txtts8="Otimize as páginas do site";
									$txtts9="Comprar Assinatura/Créditos";
									$txtts10="Guia interativo";
									$txtts11="Termos e Condições";
									$txtts12="Links Úteis";
									$txtts14="Aumente a imagem, a reputação do site e da marca com o Aplicativo CO2 porque você mostra aos surfistas o quanto de CO2 a otimização da página reduziu.";
									$txtts15="Habilitar / Desabilitar os Serviços";
									$txtts16="Também é possível adquirir planos de assinatura para otimizar as páginas do site sem preocupações, pois você terá créditos ilimitados. O serviço de aplicação de CO2 é gratuito e só pode ser utilizado em páginas otimizadas.";

									$txtts20="Otimizando páginas da web";
									$txtts21="Atualização automática de páginas otimizadas";
									$txtts22="Apoiar";
									$txtts25="Otimização de recursos Javascript";
									$txtts26="Otimizando recursos CSS";
									$txtts27="Limpar cache de otimizações";
									$txtts28="Estágio de endereço e versão de produção do site";
									$txtts29="Termos e Condições";
									$txtts30="Suporte técnico";
									$txtts31="Gerenciamento de código de autenticação";
									$txtts32="Compre/renove assinatura ou recarregue créditos";
									$txtts33="Guia interativo";
									$txtts34="Fundadores Diego Carboni e Andrea Bagordo";
									$txtts35="Otimização amigável de SEO";
									$txtts36="Serviços incluídos";
									$txtts37="Recursos incluídos";
									$txtts38="Gerenciamento de serviços";
									$txtts39="Suporte Técnico e Termos de Serviço";

									$txtts40="Antes de otimizar todas as páginas";
									$txtts41=", é aconselhável encontrar a combinação ideal de funções do plugin para obter os melhores resultados em termos de desempenho e SEO.";
									$txtts42="Se precisar do nosso apoio, você pode nos escrever para ";
                                    $txtts43="Importar ou exportar lista CSV";
                                    $txtts44="Inteligência artificial";
								}else if($hreflang_toppersystem == "ru"){ 
									$txtts0="SEO на высшем уровне"; 
									$txtts1="Увеличьте скорость загрузки публичных страниц.";
									$txtts2="Экспоненциально увеличивает естественную видимость в основных поисковых системах.";
									$txtts3="Повысьте уровень безопасности с помощью встроенного антиспама, который напрямую влияет на скорость просмотра и косвенно влияет на рейтинг в поисковых системах.";
									$txtts4="Использование плагина разрешено только для пользователей веб-сайта \"Администратор\".";
									$txtts5="Плагин Topper System SEO предоставляет пять различных сервисов, которые можно комбинировать друг с другом.";
									$txtts6="Ожидается, что службы, поддерживающие кеширование, защиту от спама и отложенную загрузку, будут бесплатными, в то время как общедоступная служба оптимизации страниц работает путем покупки кредитов, которые будут масштабироваться при каждом запросе на оптимизацию (оплата за клик) и при условии повторной оптимизации страницы. страницы при любых изменениях.";
									$txtts7="Как только кредиты будут исчерпаны, их можно будет приобрести онлайн, войдя в свою учетную запись на платформе Topper System SEO в разделе \"Kупить Подписку/Kредиты\".";
									$txtts8="Оптимизировать страницы сайта";
									$txtts9="Kупить Подписку/Kредиты";
									$txtts10="Интерактивное руководство";
									$txtts11="Условия и положения";
									$txtts12="Полезные ссылки";
									$txtts14="Увеличьте имидж, репутацию веб-сайта и бренда с помощью приложения CO2, потому что вы показываете пользователям, на сколько CO2 снизилась оптимизация страницы.";
									$txtts15="Включение / отключение служб";
									$txtts16="Также можно приобрести планы подписки, чтобы без проблем оптимизировать страницы сайта, потому что у вас будет неограниченное количество кредитов. Служба CO2 Apllication бесплатна и может использоваться только на оптимизированных страницах.";

									$txtts20="Оптимизация веб-страниц";
									$txtts21="Автоматическое обновление оптимизированных страниц";
									$txtts22="Поддерживать";
									$txtts25="Оптимизация ресурсов Javascript";
									$txtts26="Оптимизация ресурсов CSS";
									$txtts27="Очистка кеша оптимизаций";
									$txtts28="Адрес стадии и рабочей версии сайта";
									$txtts29="Условия и положения";
									$txtts30="Техническая поддержка";
									$txtts31="Управление кодом авторизации";
									$txtts32="Купить/обновить подписку или пополнить кредиты";
									$txtts33="Интерактивный гид";
									$txtts34="Основатели Diego Carboni и Andrea Bagordo";
									$txtts35="SEO-оптимизация";
									$txtts36="Услуги включены";
									$txtts37="Включенные функции";
									$txtts38="Управление услугами";
									$txtts39="Техническая поддержка и Условия обслуживания";

									$txtts40="Прежде чем оптимизировать все страницы";
									$txtts41=", желательно найти оптимальное сочетание функций плагина для достижения наилучших результатов с точки зрения производительности и SEO.";
									$txtts42="Если вам нужна наша поддержка, вы можете написать нам по адресу: ";
                                    $txtts43="Импортировать или экспортировать список CSV";
                                    $txtts44="Искусственный интеллект";
								}else if($hreflang_toppersystem == "zh"){ 
									$txtts0="最高级别的SEO"; 
									$txtts1="提高公共页面的加载速度。";
									$txtts2="指数级地增加了主要搜索引擎的自然可见度。";
									$txtts3="内置的反垃圾邮件可提高安全级别，该反垃圾邮件直接影响浏览速度，并间接影响搜索引擎排名。";
									$txtts4="该插件的使用仅保留给网站的“管理员”用户。";
									$txtts5="Topper System SEO 插件提供了五种不同的服务，可以相互组合。";
									$txtts6="支持缓存、反垃圾邮件和延迟加载的服务预计是免费的，而公共页面优化服务通过购买积分来工作，积分将在每次优化请求（按点击付费）和重新优化的条件下进行扩展任何修改的页面。";
									$txtts7="积分用尽后，可以通过在Topper System SEO平台上的“购买订阅/积分”下登录您的帐户来在线购买积分。";
									$txtts8="优化网站页面";
									$txtts9="购买订阅/积分";
									$txtts10="互动指南";
									$txtts11="条款和条件";
									$txtts12="有用的链接";
									$txtts14="使用 CO2 应用程序增加图像、网站和品牌的声誉，因为您可以向浏览者展示页面优化减少了多少 CO2。";
									$txtts15="启用/禁用服务";
									$txtts16="也可以购买订阅计划来优化网站页面而无需担心，因为您将拥有无限积分。 CO2 Application 服务是免费的，只能在优化页面上使用。";

									$txtts20="优化网页";
									$txtts21="自动更新优化页面";
									$txtts22="支持";
									$txtts25="Javascript资源优化";
									$txtts26="优化CSS资源";
									$txtts27="清理优化缓存";
									$txtts28="地址阶段和网站的生产版本";
									$txtts29="条款和条件";
									$txtts30="技术支援";
									$txtts31="授权码管理";
									$txtts32="购买/续订订阅或充值积分";
									$txtts33="互动指南";
									$txtts34="创始人 Diego Carboni 和 Andrea Bagordo";
									$txtts35="SEO友好优化";
									$txtts36="包含的服务";
									$txtts37="包含的功能";
									$txtts38="服务管理";
									$txtts39="技术支持和服务条款";

									$txtts40="优化所有页面之前";
									$txtts41="，建议找到插件功能的最佳组合，以在性能和SEO方面达到最佳效果。";
									$txtts42="如果您需要我们的支持，您可以写信给我们： ";
                                    $txtts43="导入或导出 CSV 列表";
                                    $txtts44="人工智能";
								}else if($hreflang_toppersystem == "he"){ 
									$txtts0="קידום אתרים ברמה הגבוהה ביותר"; 
									$txtts1="הגדל את מהירות הטעינה של דפים ציבוריים.";
									$txtts2="מגביר באופן אקספונטיבי את הנראות הטבעית במנועי החיפוש הגדולים.";
									$txtts3="הגדל את רמת האבטחה באמצעות אנטי ספאם מובנה המשפיע ישירות על מהירות הגלישה ומשפיע בעקיפין על דירוגי מנועי החיפוש.";
									$txtts4="השימוש בתוסף שמור רק למשתמשי \"מנהל מערכת\" באתר.";
									$txtts5="תוסף Topper System SEO מספק חמישה שירותים נפרדים שניתן לשלב זה עם זה.";
									$txtts6="השירותים המשמשים כתמיכה במטמון, אנטי ספאם ועומס עצלן צפויים להיות חינמיים, בעוד ששירות אופטימיזציית הדפים הציבוריים פועל על ידי רכישת זיכויים שיודלו בכל בקשת אופטימיזציה (תשלום לפי קליק) ותנאי אופטימיזציה מחדש של עמוד בכל שינוי.";
									$txtts7="לאחר סיום הזיכויים, ניתן לרכוש אותם באופן מקוון על ידי כניסה לחשבונך בפלטפורמת Topper System SEO קנה מנוי / קרדיטים\"נקודות זיכוי מלאות\".";
									$txtts8="ייעל את דפי האתר";
									$txtts9="קנה מנוי / קרדיטים";
									$txtts10="מדריך אינטראקטיבי";
									$txtts11="תנאים";
									$txtts12="קישורים שימושיים";
									$txtts14="הגדל את התדמית, המוניטין של האתר ושל המותג באמצעות CO2 Application מכיוון שאתה מראה לגולשים עד כמה CO2 אופטימיזציה של הדף הפחיתה.";
									$txtts15="הפעל / השבת את השירותים";
									$txtts16="כמו כן, ניתן לרכוש תוכניות מנוי על מנת לייעל את דפי האתר ללא חששות מכיוון שיהיו לך זיכויים בלתי מוגבלים. שירות יישום CO2 הוא בחינם וניתן להשתמש בו רק בדפים מותאמים.";

									$txtts20="אופטימיזציה של דפי אינטרנט";
									$txtts21="עדכון אוטומטי של דפים מותאמים";
									$txtts22="תמיכה";
									$txtts25="אופטימיזציה של משאבי Javascript";
									$txtts26="אופטימיזציה של משאבי css";
									$txtts27="ניקוי מטמון של אופטימיזציות";
									$txtts28="כתובת שלב וגרסת הפקה של האתר";
									$txtts29="תנאים";
									$txtts30="תמיכה טכנית";
									$txtts31="ניהול AuthCode";
									$txtts32="קנה/חדש מנוי או הטען זיכויים";
									$txtts33="מדריך אינטראקטיבי";
									$txtts34="מייסדים Diego Carboni ו Andrea Bagordo";
									$txtts35="אופטימיזציה ידידותית לקידום אתרים";
									$txtts36="שירותים כלולים";
									$txtts37="תכונות כלולות";
									$txtts38="ניהול שירות";
									$txtts39="תמיכה טכנית ותנאים והגבלות";

									$txtts40="לפני ביצוע אופטימיזציה של כל הדפים";
									$txtts41=", מומלץ למצוא את השילוב האופטימלי של פונקציות תוסף כדי להשיג את התוצאות הטובות ביותר מבחינת ביצועים ו-SEO.";
									$txtts42="אם אתה צריך את התמיכה שלנו אתה יכול לכתוב לנו בכתובת ";
                                    $txtts43="ייבוא ​​או ייצא רשימת CSV";
                                    $txtts44="בינה מלאכותית";
								}else if($hreflang_toppersystem == "la"){ 
									$txtts0="SEO ad summum"; 
									$txtts1="Paginae loading celeritate proventus publica.";
									$txtts2="Maioribus auget exponentially naturae visibilis tormenta quaerere.";
									$txtts3="Cum integrated securitatem campester of proventus anti-spam, quod pertinet ad pasco celeritas engine rankings et indirecte afficiunt quaero.";
									$txtts4="Usus est quia plugin non servatur \"Administrator\" users de website.";
									$txtts5="Topper System SEO Plugin praebet quinque officia distincta quae inter se coniungi possunt.";
									$txtts6="Officia quae in subsidium cella, anti-spam et onus pigrum agunt, libera esse censentur, dum publica pagina optimizationis opera opera credita emendis, quae ad singulas petitiones optimiizationis scandendas erunt (Pay per Click) et condicionem reoptimizationis. pagina quavis modificatione.";
									$txtts7="Participium indicem Cum defecere, qui emi potest esse online in logging in ratione vestra in Topper Ratio platform per \"Buy Subscription/Credits\".";
									$txtts8="Ad optimize paginis in locum";
									$txtts9="Buy Subscription/Credits";
									$txtts10="Interactive dux";
									$txtts11="Terms and Conditions";
									$txtts12="Nexus utilis";
									$txtts14="Auget imaginem et de fama website et cum CO2 Application notam ostendere quod superficies quanto CO2 paginae comeditque pretium ipsum.";
									$txtts15="Admitte / inactivare in Services";
									$txtts16="Est etiam maxime consilia mercari subscriptione ad optimize paginis in locum sine curarum et quia omnipotens et participium indicem. Quod est muneris CO2 Apllication liberi et non potest esse in paginis optimized.";

									$txtts20="Paginas interretiales optimizing";
									$txtts21="Automatic renovatio paginarum optimized";
									$txtts22="Support";
									$txtts25="Optimization of Javascript resources";
									$txtts26="Optimizing CSS resources";
									$txtts27="Tersus cache of optimizations";
									$txtts28="Oratio scaena et versio productio situs";
									$txtts29="Leges condicionesque";
									$txtts30="Technica firmamentum";
									$txtts31="AuthCode procuratio";
									$txtts32="Buy / innova subscriptione vel SUPERMITTO credit";
									$txtts33="Interactive dux";
									$txtts34="Fundatores Diego Carboni et Andrea Bagordo";
									$txtts35="SEO Friendly Optimization";
									$txtts36="Officia inclusa";
									$txtts37="Features inclusa";
									$txtts38="Servitium procuratio";
									$txtts39="Technical Support and Terms of Service";

									$txtts40="Ante omnes optimizing paginas";
									$txtts41=", opportunum est invenire functiones plugin optimales compositiones ad optimos proventus perfectionis et SEO.";
									$txtts42="Si subsidio nostro indiges, scribere nobis potes ";
                                    $txtts43="Importo vel export CSV list";
                                    $txtts44="Intelligentia artificialis";
								}else{   
									$txtts0="SEO at the highest level"; 
									$txtts1="Increase the loading speed of public pages.";
									$txtts2="Exponentially increases natural visibility on major search engines.";
									$txtts3="Increase the level of security with a built-in anti-spam that directly affects the browsing speed and indirectly affects search engine rankings.";
									$txtts4="The use of the plugin is reserved only for \"Administrator\" users of the website.";
									$txtts5="The Topper System SEO plugin provides five distinct services that can be combined with each other.";
									$txtts6="The services that act as support for the cache, anti-spam and lazy load are expected to be free, while the public page optimization service works by purchasing credits that will be scaled at each optimization request (Pay per Click) and condition of reoptimizing the page at any modification.";
									$txtts7="Once the credits are exhausted, they can be purchased online by logging into your account on the Topper System SEO platform under \"Buy Subscription/Credits\".";
									$txtts8="Optimize the pages of the site";
									$txtts9="Buy Subscription/Credits";
									$txtts10="Interactive Guide";
									$txtts11="Terms and conditions";
									$txtts12="Useful links";
									$txtts14="Increase the image, the reputation of the website and of the brand with CO2 Application because you show surfers how much CO2 the optimization of the page has reduced.";
									$txtts15="Enable / Disable the Services";
									$txtts16="It is also possible to purchase subscription plans to optimize the pages of the site without worries because you will have unlimited credits. The CO2 Apllication service is free and can only be used on optimized pages.";

									$txtts20="Optimizing web pages";
									$txtts21="Automatic update of optimized pages";
									$txtts22="Support";
									$txtts25="Optimization of Javascript resources";
									$txtts26="Optimizing css resources";
									$txtts27="Cleanup cache of optimizations";
									$txtts28="Address stage and production version of the site";
									$txtts29="Terms and conditions";
									$txtts30="Technical support";
									$txtts31="AuthCode management";
									$txtts32="Buy/Renew subscription or top up credits";
									$txtts33="Interactive guide";
									$txtts34="Founders Diego Carboni and Andrea Bagordo";
									$txtts35="SEO Friendly Optimization";
									$txtts36="Services included";
									$txtts37="Features included";
									$txtts38="Service management";
									$txtts39="Technical Support and Terms of Service";

									$txtts40="Before optimizing all pages";
									$txtts41=", it is advisable to find the optimal combination of plugin functions to achieve the best results in terms of performance and SEO.";
									$txtts42="If you need our support you can write to us at ";
                                    $txtts43="Import or export CSV list";
                                    $txtts44="Artificial intelligence";
								}

								echo "                                
								<div class=\"wrap\" class=\"fontcolor_page_administrator_toppersystem\">
                                    <h1>&nbsp;</h1>

                                    <div class=\"logostage1_page_administrator_toppersystem\"><img class=\"logostage2_page_administrator_toppersystem\" src=\"".plugins_url('image/toppersystemseo.png', dirname(__FILE__))."\"></div>
                                    <div class=\"logostage3_page_administrator_toppersystem\"><big><strong>Best SEO Friendly Solution</strong></big></div>
                                    <div class=\"pagestage1_page_administrator_toppersystem\">
                                        
                                        <div class=\"textstage1_page_administrator_toppersystem\">
									        <p>
										        <big><i>".esc_html($txtts1)."<br>
										        ".esc_html($txtts2)."<br>
										        ".esc_html($txtts3)."<br>
										        ".esc_html($txtts14)."</i></big><br><br>
										        ".esc_html($txtts4)."
									        </p>
                                        </div>

                                        <div>
                                            <div class=\"subtitle1_page_administrator_toppersystem\"><strong>".esc_html("$txtts35")."</strong></div>                                              
                                            <div id=\"box1_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessWhileToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/optimizationts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts20")."
                                                    </div>
                                                </div>                                                
                                            </div>

                                            <div id=\"box18_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenGuideToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/guidets.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts33")."
                                                    </div>
                                                </div>                                                
                                            </div> 

                                            <div id=\"box2_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessServicesToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/autoupdatets.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_min_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts21")."
                                                    </div>
                                                </div>                                                
                                            </div>

                                            <div id=\"box7_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenManagementJavascriptToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/javascriptts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts25")."
                                                    </div>
                                                </div>                                                
                                            </div>  

                                            <div id=\"box8_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenManagementCSSToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/cssts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts26")."
                                                    </div>
                                                </div>                                                
                                            </div> 
                                        </div>

                                        <div>
                                            <div class=\"subtitle2_page_administrator_toppersystem\"><strong>".esc_html("$txtts36")."</strong></div>  
                                            <div id=\"box3_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessServicesToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/aspmts2.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts22 Anti-spam ASPMTS")."
                                                    </div>
                                                </div>                                                
                                            </div>  

                                            <div id=\"box4_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessServicesToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/cachets.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("Cache System")."
                                                    </div>
                                                </div>                                                
                                            </div> 

                                            <div id=\"box5_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessServicesToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/smartimagelazyloadingts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("Smart Image Lazy-Loading")."
                                                    </div>
                                                </div>                                                
                                            </div>   

                                            <div id=\"box6_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessServicesToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/co2applicationts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("CO2 Application")."
                                                    </div>
                                                </div>                                                
                                            </div> 

                                            <div id=\"box15_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessServicesToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/artificialintelligence.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts44")."
                                                    </div>
                                                </div>                                                
                                            </div> 
                                        </div>  

                                        <div>
                                            <div class=\"subtitle2_page_administrator_toppersystem\"><strong>".esc_html("$txtts37")."</strong></div> 
                                            <div id=\"box9_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenCleanCachesToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/cleancachests.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_min_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts27")."
                                                    </div>
                                                </div>                                                
                                            </div>  

                                            <div id=\"box10_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenStagingServiceToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/stagingsitets.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_min_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts28")."
                                                    </div>
                                                </div>                                                
                                            </div>  

                                            <div id=\"box19_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenImportExportToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/uploaddownloadts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_min_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts43")."
                                                    </div>
                                                </div>                                                
                                            </div> 
                                        </div>

                                        <div>
                                            <div class=\"subtitle2_page_administrator_toppersystem\"><strong>".esc_html("$txtts38")."</strong></div>
                                            <div id=\"box11_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenApiCenterToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/apicenterts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("Api Center Topper System SEO")."
                                                    </div>
                                                </div>                                                
                                            </div>  

                                            <div id=\"box16_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenApiCenterToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/apikeyts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts31")."
                                                    </div>
                                                </div>                                                
                                            </div> 

                                            <div id=\"box17_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenApiCenterToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/paymentts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_min_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts32")."
                                                    </div>
                                                </div>                                                
                                            </div>                      
                                        </div>
                                        <div>
                                            <div class=\"subtitle2_page_administrator_toppersystem\"><strong>".esc_html("$txtts39")."</strong></div>
                                            <div id=\"box14_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenTecnicalSupportToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/supportts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts30")." <span class=\"link_emailcp_toppersystem\">support@toppersystem.com<span>
                                                    </div>
                                                </div>                                                
                                            </div> 
                                            <div id=\"box12_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenAgrementToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/agrementts.png', dirname(__FILE__))."\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts29")."
                                                    </div>
                                                </div>                                                
                                            </div> 
                                        </div>                                        
                                    </div>
                                    <div class=\"bottomstage1_page_administrator_toppersystem\">
                                        <div class=\"bottomstage2_page_administrator_toppersystem\">
                                            $txtts34<br>
                                            <a target=\"_blank\" class=\"link_website_toppersystem\" href=\"https://www.toppersystem.com/?lang=$hreflang_toppersystem\">toppersystem.com</a>
                                        </div> 
                                    </div>                                    
								</div>					
								";

                                $idgde_ts="";
                                if((isset($_GET["idgde_ts"]))&&(isset($_GET["guide_ts"]))&&($_GET["guide_ts"] == "go")&&(($_GET["idgde_ts"] == "27")||($_GET["idgde_ts"] == "28"))){
                                    $idgde_ts="ok";
                                }
								
                                if(isset($_GET["load_management_js_ts"])){
                                    wp_register_script('start_components_jsmanagement_toppersystem', plugins_url('js/start_components_jsmanagement_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);
                                    wp_enqueue_script('start_components_jsmanagement_toppersystem');
                                }else if(isset($_GET["load_management_css_ts"])){
                                    wp_register_script('start_components_cssmanagement_toppersystem', plugins_url('js/start_components_cssmanagement_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);
                                    wp_enqueue_script('start_components_cssmanagement_toppersystem');
                                }else if(isset($_GET["guide_ts"])){
                                    if($idgde_ts == "ok"){
                                        wp_register_script('startgo_management_guide_interactive_plugin_toppersystem', plugins_url('js/startgo_management_guide_interactive_plugin_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);
                                        wp_enqueue_script('startgo_management_guide_interactive_plugin_toppersystem');
                                    }else{
                                        if($_GET["guide_ts"] == "ok"){
                                            echo "<input type=\"hidden\" id=\"open_first_banner_toppersystem\" name=\"open_first_banner_toppersystem\" value=\"<strong>$txtts40</strong>$txtts41<br><i>$txtts42 support@toppersystem.com</i>\">";
                                        }
                                        wp_register_script('start_guide_interactive_plugin_toppersystem', plugins_url('js/start_guide_interactive_plugin_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);
                                        wp_enqueue_script('start_guide_interactive_plugin_toppersystem');
                                    }
                                }else{
                                    wp_register_script('start_components_while_toppersystem', plugins_url('js/start_components_while_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, true);
                                    wp_enqueue_script('start_components_while_toppersystem');
                                }

								unset($hreflang_toppersystem);
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
							}}, plugins_url('image/logo_menu_toppersystem.png', dirname(__FILE__)), 3 );
						}else if((TopperSystemAuthTS::AuthTopperSystem() == "")&&(( current_user_can( 'administrator' ) ))){		
							add_menu_page( 'Topper System SEO', 'Topper System<sup class="sup_toppersystem"> SEO</sup>', 'manage_options', 'toppersystem', function(){
							if((TopperSystemAuthTS::AuthTopperSystem() == "")&&(( current_user_can( 'administrator' ) ))){
								$hreflang_toppersystem=TopperSystemSetMainFunction::hreflang_toppersystem();
								if($hreflang_toppersystem == "it"){
									$txtts1="Aumenta la velocità di caricamento delle pagine pubbliche.";
									$txtts2="Aumenta esponenzialmente la visibilità naturale sui principali Motori di ricerca.";
									$txtts3="Aumenta il livello di sicurezza con un anti-spam integrato che influisce direttamente sulla velocità di navigazione e indirittamente sul posizionamento nei Motori di ricerca.";
									$txtts4="L'utilizzo del plugin è riservato solo agli utenti \"Amministratori\" del sito web.";
									$txtts14="Accresci l'immagine, la reputazione del sito internet e del brand con CO2 Application perché mostri ai navigatori quanta CO2 la ottimizzazione della pagina ha ridotto.";
									$txtts29="Termini e condizioni";
									$txtts30="Supporto tecnico";
									$txtts34="Fondatori Diego Carboni e Andrea Bagordo";
									$txtts39="Assistenza tecnica e Termini di servizio";
                                    $txtts40="PER ATTIVARE LA VERSIONE PREMIUM CLICCA QUI!";
                                    $txtts41="Stato dei servizi";
                                    $txtts42="Ottimizzazione sorgenti";
                                    $txtts43="Ti informiamo che non è possibile attivare la versione Premium del plugin. Al momento del caricamento dei file JavaScript, abbiamo riscontrato un errore";
                                    $txtts44="Prova a ricaricare la pagina. Se l'errore persiste, contattaci per ricevere assistenza.";
                                    $txtts45="Nel frattempo, puoi comunque utilizzare la versione gratuita del plugin, che include la funzione Smart Image Lazy Load. Questa funzione aiuta a migliorare le prestazioni del tuo sito web, riducendo i tempi di caricamento delle pagine.";
								}else if($hreflang_toppersystem == "ar"){ 
									$txtts0="SEO على أعلى مستوى"; 
									$txtts1="زيادة سرعة تحميل الصفحات العامة.";
									$txtts2="يزيد بشكل كبير من الظهور الطبيعي على محركات البحث الرئيسية.";
									$txtts3="قم بزيادة مستوى الأمان باستخدام برنامج مكافحة البريد العشوائي المدمج الذي يؤثر بشكل مباشر على سرعة التصفح ويؤثر بشكل غير مباشر على تصنيفات محرك البحث.";
									$txtts4="استخدام المكون الإضافي محجوز فقط لمستخدمي \"المسؤول\" في موقع الويب.";
									$txtts14="قم بزيادة الصورة وسمعة موقع الويب والعلامة التجارية باستخدام تطبيق CO2 لأنك تُظهر للمتصفحين مقدار ثاني أكسيد الكربون الذي تم تقليله من خلال تحسين الصفحة.";
									$txtts29="الأحكام والشروط";
									$txtts30="دعم فني";
									$txtts34="المؤسسون Diego Carboni و Andrea Bagordo";
									$txtts39="الدعم الفني وشروط الخدمة";
                                    $txtts40="لتنشيط الإصدار المميز، انقر هنا!";
                                    $txtts41="حالة الخدمات";
                                    $txtts42="تحسين المصدر";
                                    $txtts43="نبلغك أنه ليس من الممكن تفعيل الإصدار المميز من البرنامج الإضافي. عند تحميل ملفات JavaScript، واجهنا خطأ";
                                    $txtts44="حاول إعادة تحميل الصفحة. إذا استمر الخطأ، فاتصل بنا للحصول على المساعدة.";
                                    $txtts45="في هذه الأثناء، لا يزال بإمكانك استخدام الإصدار المجاني من البرنامج الإضافي، والذي يتضمن ميزة Smart Image Lazy Load. تساعد هذه الميزة على تحسين أداء موقع الويب الخاص بك عن طريق تقليل أوقات تحميل الصفحة.";
								}else if($hreflang_toppersystem == "de"){ 
									$txtts1="Erhöhen Sie die Ladegeschwindigkeit von öffentlichen Seiten.";
									$txtts2="Erhöht exponentiell die natürliche Sichtbarkeit in großen Suchmaschinen.";
									$txtts3="Erhöhen Sie die Sicherheitsstufe mit einem integrierten Spam-Schutz, der sich direkt auf die Browsing-Geschwindigkeit und indirekt auf die Platzierungen in Suchmaschinen auswirkt.";
									$txtts4="Die Verwendung des Plugins ist nur \"Administrator\" -Nutzern der Website vorbehalten.";
									$txtts14="Steigern Sie mit CO2 Application das Image, die Reputation der Website und der Marke, weil Sie Surfern zeigen, wie viel CO2 durch die Optimierung der Seite eingespart wurde.";
									$txtts29="Geschäftsbedingungen";
									$txtts30="Technische Unterstützung";
									$txtts34="Gründer Diego Carboni und Andrea Bagordo";
									$txtts39="Technischer Support und Nutzungsbedingungen";
                                    $txtts40="UM DIE PREMIUM-VERSION ZU AKTIVIEREN, KLICKEN SIE HIER!";
                                    $txtts41="Status der Dienste";
                                    $txtts42="Quellenoptimierung";
                                    $txtts43="Wir informieren Sie, dass es nicht möglich ist, die Premium-Version des Plugins zu aktivieren. Beim Laden der JavaScript-Dateien ist ein Fehler aufgetreten";
                                    $txtts44="Versuchen Sie, die Seite neu zu laden. Wenn der Fehler weiterhin besteht, kontaktieren Sie uns für Hilfe.";
                                    $txtts45="In der Zwischenzeit können Sie weiterhin die kostenlose Version des Plugins verwenden, die die Smart Image Lazy Load-Funktion enthält. Diese Funktion trägt dazu bei, die Leistung Ihrer Website zu verbessern, indem die Seitenladezeiten verkürzt werden.";
								}else if($hreflang_toppersystem == "es"){
									$txtts1="Aumente la velocidad de carga de las páginas públicas.";
									$txtts2="Aumenta exponencialmente la visibilidad natural en los principales motores de búsqueda.";
									$txtts3="Aumente el nivel de seguridad con un anti-spam incorporado que afecta directamente la velocidad de navegación e indirectamente afecta la clasificación de los motores de búsqueda.";
									$txtts4="El uso del complemento está reservado solo para los usuarios \"administradores\" del sitio web.";
									$txtts14="Incrementa la imagen, la reputación de la web y de la marca con la Aplicación de CO2 porque le muestras a los internautas cuánto CO2 ha reducido la optimización de la página.";
									$txtts29="Términos y condiciones";
									$txtts30="Apoyo técnico";
									$txtts34="Fundadores Diego Carboni y Andrea Bagordo";
									$txtts39="Soporte técnico y términos de servicio";
                                    $txtts40="PARA ACTIVAR LA VERSIÓN PREMIUM ¡HAGA CLIC AQUÍ!";
                                    $txtts41="Estado de los servicios";
                                    $txtts42="Optimización de fuente";
                                    $txtts43="Le informamos que no es posible activar la versión Premium del complemento. Al cargar los archivos JavaScript, encontramos un error.";
                                    $txtts44="Intente recargar la página. Si el error persiste, contáctenos para obtener ayuda.";
                                    $txtts45="Mientras tanto, aún puedes utilizar la versión gratuita del complemento, que incluye la función Smart Image Lazy Load. Esta función ayuda a mejorar el rendimiento de su sitio web al reducir los tiempos de carga de la página.";
								}else if($hreflang_toppersystem == "fr"){
									$txtts1="Augmentez la vitesse de chargement des pages publiques.";
									$txtts2="Augmente de manière exponentielle la visibilité naturelle sur les principaux moteurs de recherche.";
									$txtts3="Augmentez le niveau de sécurité avec un anti-spam intégré qui affecte directement la vitesse de navigation et affecte indirectement le classement des moteurs de recherche.";
									$txtts4="L'utilisation du plugin est réservée uniquement aux utilisateurs \"Administrateurs\" du site.";
									$txtts14="Augmentez l'image, la notoriété du site et de la marque avec CO2 Application car vous montrez aux internautes combien de CO2 l'optimisation de la page a réduit.";
									$txtts29="Termes et conditions";
									$txtts30="Soutien technique";
									$txtts34="Fondateurs Diego Carboni et Andrea Bagordo";
									$txtts39="Support technique et conditions d'utilisation";
                                    $txtts40="POUR ACTIVER LA VERSION PREMIUM CLIQUEZ ICI!";
                                    $txtts41="Statut des services";
                                    $txtts42="Optimisation des sources";
                                    $txtts43="Nous vous informons qu'il n'est pas possible d'activer la version Premium du plugin. Lors du chargement des fichiers JavaScript, nous avons rencontré une erreur";
                                    $txtts44="Essayez de recharger la page. Si l'erreur persiste, contactez-nous pour obtenir de l'aide.";
                                    $txtts45="En attendant, vous pouvez toujours utiliser la version gratuite du plugin, qui inclut la fonctionnalité Smart Image Lazy Load. Cette fonctionnalité permet d'améliorer les performances de votre site Web en réduisant les temps de chargement des pages.";
								}else if($hreflang_toppersystem == "hi"){ 
									$txtts1="सार्वजनिक पृष्ठों की लोडिंग गति बढ़ाएँ।";
									$txtts2="प्रमुख खोज इंजनों पर स्वाभाविक रूप से प्राकृतिक दृश्यता बढ़ जाती है।";
									$txtts3="एक अंतर्निहित एंटी-स्पैम के साथ सुरक्षा का स्तर बढ़ाएं जो सीधे ब्राउज़िंग गति को प्रभावित करता है और अप्रत्यक्ष रूप से खोज इंजन रैंकिंग को प्रभावित करता है।";
									$txtts4="प्लगइन का उपयोग केवल वेबसाइट के \"प्रशासक\" उपयोगकर्ताओं के लिए आरक्षित है।";
									$txtts14="CO2 एप्लिकेशन के साथ छवि, वेबसाइट और ब्रांड की प्रतिष्ठा बढ़ाएं क्योंकि आप सर्फर्स को दिखाते हैं कि पृष्ठ का अनुकूलन कितना CO2 कम हो गया है।";
									$txtts29="नियम और शर्तें";
									$txtts30="तकनीकी समर्थन";
									$txtts34="संस्थापक Diego Carboni और  Andrea Bagordo";
									$txtts39="तकनीकी सहायता और सेवा की शर्तें";
                                    $txtts40="प्रीमियम संस्करण को सक्रिय करने के लिए यहां क्लिक करें!";
                                    $txtts41="सेवाओं की स्थिति";
                                    $txtts42="स्रोत अनुकूलन";
                                    $txtts43="हम आपको सूचित करते हैं कि प्लगइन के प्रीमियम संस्करण को सक्रिय करना संभव नहीं है। जावास्क्रिप्ट फ़ाइलें लोड करते समय, हमें एक त्रुटि का सामना करना पड़ा";
                                    $txtts44="पृष्ठ को पुनः लोड करने का प्रयास करें. यदि त्रुटि बनी रहती है, तो सहायता के लिए हमसे संपर्क करें।";
                                    $txtts45="इस बीच, आप अभी भी प्लगइन के मुफ़्त संस्करण का उपयोग कर सकते हैं, जिसमें स्मार्ट इमेज लेज़ी लोड सुविधा शामिल है। यह सुविधा पेज लोड समय को कम करके आपकी वेबसाइट के प्रदर्शन को बेहतर बनाने में मदद करती है।";
								}else if($hreflang_toppersystem == "ja"){
									$txtts1="公開ページの読み込み速度を上げます。";
									$txtts2="主要な検索エンジンでの自然な可視性を指数関数的に向上させます。";
									$txtts3="ブラウジング速度に直接影響し、検索エンジンのランキングに間接的に影響する組み込みのスパム対策でセキュリティのレベルを高めます。";
									$txtts4="プラグインの使用は、ウェブサイトの「管理者」ユーザーのみに予約されています。";
									$txtts14="ページの最適化によってどれだけのCO2が削減されたかをサーファーに示すため、CO2アプリケーションを使用して、イメージ、Webサイト、およびブランドの評判を高めます。";
									$txtts29="利用規約";
									$txtts30="テクニカルサポート";
									$txtts34="創設者 Diego Carboni そして Andrea Bagordo";
									$txtts39="テクニカルサポートと利用規約";
                                    $txtts40="プレミアムバージョンをアクティベートするには、ここをクリックしてください!";
                                    $txtts41="サービスの状況";
                                    $txtts42="ソースの最適化";
                                    $txtts43="プラグインのプレミアム バージョンをアクティブ化できないことをお知らせします。 JavaScript ファイルをロードするときにエラーが発生しました";
                                    $txtts44="ページをリロードしてみてください。 エラーが解決しない場合は、弊社までご連絡ください。";
                                    $txtts45="それまでの間は、Smart Image Lazy Load 機能を含むプラグインの無料版を引き続き使用できます。 この機能は、ページの読み込み時間を短縮し、Web サイトのパフォーマンスを向上させるのに役立ちます。";
								}else if($hreflang_toppersystem == "pl"){ 
									$txtts1="Zwiększ szybkość ładowania stron publicznych.";
									$txtts2="Wykładniczo zwiększa naturalną widoczność w głównych wyszukiwarkach.";
									$txtts3="Zwiększ poziom bezpieczeństwa dzięki wbudowanemu antyspamowi, który bezpośrednio wpływa na szybkość przeglądania i pośrednio wpływa na rankingi wyszukiwarek.";
									$txtts4="Korzystanie z wtyczki jest zastrzeżone tylko dla użytkowników „Administratorów” serwisu.";
									$txtts14="Zwiększ wizerunek, reputację strony internetowej i marki dzięki Aplikacji CO2, ponieważ pokazujesz internautom, ile CO2 obniżyła optymalizacja strony.";
									$txtts29="Regulamin";
									$txtts30="Pomoc techniczna";
									$txtts34="Założyciele Diego Carboni i Andrea Bagordo";
									$txtts39="Pomoc techniczna i Warunki świadczenia usług";
                                    $txtts40="ABY AKTYWOWAĆ WERSJĘ PREMIUM KLIKNIJ TUTAJ!";
                                    $txtts41="Stan usług";
                                    $txtts42="Optymalizacja źródła";
                                    $txtts43="Informujemy, że nie ma możliwości aktywacji wersji Premium wtyczki. Podczas ładowania plików JavaScript napotkaliśmy błąd";
                                    $txtts44="Spróbuj ponownie załadować stronę. Jeśli błąd będzie się powtarzał, skontaktuj się z nami w celu uzyskania pomocy.";
                                    $txtts45="W międzyczasie nadal możesz korzystać z darmowej wersji wtyczki, która zawiera funkcję Smart Image Lazy Load. Ta funkcja pomaga poprawić wydajność Twojej witryny, skracając czas ładowania strony.";
								}else if($hreflang_toppersystem == "pt"){ 
									$txtts1="Aumente a velocidade de carregamento das páginas públicas.";
									$txtts2="Aumenta exponencialmente a visibilidade natural nos principais mecanismos de pesquisa.";
									$txtts3="Aumente o nível de segurança com um anti-spam integrado que afeta diretamente a velocidade de navegação e indiretamente afeta as classificações do mecanismo de pesquisa.";
									$txtts4="O uso do plugin é reservado apenas para usuários \"Administradores\" do site.";
									$txtts14="Aumente a imagem, a reputação do site e da marca com o Aplicativo CO2 porque você mostra aos surfistas o quanto de CO2 a otimização da página reduziu.";
									$txtts29="Termos e Condições";
									$txtts30="Suporte técnico";
									$txtts34="Fundadores Diego Carboni e Andrea Bagordo";
									$txtts39="Suporte Técnico e Termos de Serviço";
                                    $txtts40="PARA ATIVAR A VERSÃO PREMIUM CLIQUE AQUI!";
                                    $txtts41="Estado dos serviços";
                                    $txtts42="Otimização de fonte";
                                    $txtts43="Informamos que não é possível ativar a versão Premium do plugin. Ao carregar os arquivos JavaScript, encontramos um erro";
                                    $txtts44="Tente recarregar a página. Se o erro persistir, entre em contato conosco para obter assistência.";
                                    $txtts45="Enquanto isso, você ainda pode usar a versão gratuita do plugin, que inclui o recurso Smart Image Lazy Load. Esse recurso ajuda a melhorar o desempenho do seu site, reduzindo o tempo de carregamento da página.";
								}else if($hreflang_toppersystem == "ru"){ 
									$txtts1="Увеличьте скорость загрузки публичных страниц.";
									$txtts2="Экспоненциально увеличивает естественную видимость в основных поисковых системах.";
									$txtts3="Повысьте уровень безопасности с помощью встроенного антиспама, который напрямую влияет на скорость просмотра и косвенно влияет на рейтинг в поисковых системах.";
									$txtts4="Использование плагина разрешено только для пользователей веб-сайта \"Администратор\".";
									$txtts14="Увеличьте имидж, репутацию веб-сайта и бренда с помощью приложения CO2, потому что вы показываете пользователям, на сколько CO2 снизилась оптимизация страницы.";
									$txtts29="Условия и положения";
									$txtts30="Техническая поддержка";
									$txtts34="Основатели Diego Carboni и Andrea Bagordo";
									$txtts39="Техническая поддержка и Условия обслуживания";
                                    $txtts40="ЧТОБЫ АКТИВИРОВАТЬ ПРЕМИУМ-ВЕРСИЮ, НАЖМИТЕ ЗДЕСЬ!";
                                    $txtts41="Статус услуг";
                                    $txtts42="Оптимизация источника";
                                    $txtts43="Сообщаем вам, что активировать Премиум-версию плагина невозможно. При загрузке файлов JavaScript возникла ошибка";
                                    $txtts44="Попробуйте перезагрузить страницу. Если ошибка не исчезнет, ​​обратитесь к нам за помощью.";
                                    $txtts45="Тем временем вы все еще можете использовать бесплатную версию плагина, которая включает функцию отложенной загрузки Smart Image. Эта функция помогает повысить производительность вашего веб-сайта за счет сокращения времени загрузки страниц.";
								}else if($hreflang_toppersystem == "zh"){ 
									$txtts1="提高公共页面的加载速度。";
									$txtts2="指数级地增加了主要搜索引擎的自然可见度。";
									$txtts3="内置的反垃圾邮件可提高安全级别，该反垃圾邮件直接影响浏览速度，并间接影响搜索引擎排名。";
									$txtts4="该插件的使用仅保留给网站的“管理员”用户。";
									$txtts14="使用 CO2 应用程序增加图像、网站和品牌的声誉，因为您可以向浏览者展示页面优化减少了多少 CO2。";
									$txtts29="条款和条件";
									$txtts30="技术支援";
									$txtts34="创始人 Diego Carboni 和 Andrea Bagordo";
									$txtts39="技术支持和服务条款";
                                    $txtts40="要激活高级版本，请单击此处！";
                                    $txtts41="服务状况";
                                    $txtts42="源码优化";
                                    $txtts43="我们通知您，无法激活该插件的高级版本。 加载 JavaScript 文件时，我们遇到错误";
                                    $txtts44="尝试重新加载页面。 如果错误仍然存​​在，请联系我们寻求帮助。";
                                    $txtts45="与此同时，您仍然可以使用该插件的免费版本，其中包括智能图像延迟加载功能。 此功能通过减少页面加载时间来帮助提高网站的性能。";
								}else if($hreflang_toppersystem == "he"){ 
									$txtts1="הגדל את מהירות הטעינה של דפים ציבוריים.";
									$txtts2="מגביר באופן אקספונטיבי את הנראות הטבעית במנועי החיפוש הגדולים.";
									$txtts3="הגדל את רמת האבטחה באמצעות אנטי ספאם מובנה המשפיע ישירות על מהירות הגלישה ומשפיע בעקיפין על דירוגי מנועי החיפוש.";
									$txtts4="השימוש בתוסף שמור רק למשתמשי \"מנהל מערכת\" באתר.";
									$txtts14="הגדל את התדמית, המוניטין של האתר ושל המותג באמצעות CO2 Application מכיוון שאתה מראה לגולשים עד כמה CO2 אופטימיזציה של הדף הפחיתה.";
									$txtts29="תנאים";
									$txtts30="תמיכה טכנית";
									$txtts34="מייסדים Diego Carboni ו Andrea Bagordo";
									$txtts39="תמיכה טכנית ותנאים והגבלות";
                                    $txtts40="כדי להפעיל את גרסת הפרימיום לחץ כאן!";
                                    $txtts41="מצב השירותים";
                                    $txtts42="אופטימיזציה של מקורות";
                                    $txtts43="אנו מודיעים לך שלא ניתן להפעיל את גרסת הפרימיום של התוסף. בעת טעינת קבצי JavaScript, נתקלנו בשגיאה";
                                    $txtts44="נסה לטעון מחדש את העמוד. אם השגיאה נמשכת, פנה אלינו לקבלת סיוע.";
                                    $txtts45="בינתיים, אתה עדיין יכול להשתמש בגרסה החינמית של התוסף, הכוללת את תכונת Smart Image Lazy Load. תכונה זו עוזרת לשפר את ביצועי האתר שלך על ידי הפחתת זמני הטעינה של הדפים.";
								}else if($hreflang_toppersystem == "la"){ 
									$txtts1="Paginae loading celeritate proventus publica.";
									$txtts2="Maioribus auget exponentially naturae visibilis tormenta quaerere.";
									$txtts3="Cum integrated securitatem campester of proventus anti-spam, quod pertinet ad pasco celeritas engine rankings et indirecte afficiunt quaero.";
									$txtts4="Usus est quia plugin non servatur \"Administrator\" users de website.";
									$txtts14="Auget imaginem et de fama website et cum CO2 Application notam ostendere quod superficies quanto CO2 paginae comeditque pretium ipsum.";
									$txtts29="Leges condicionesque";
									$txtts30="Technica firmamentum";
									$txtts34="Fundatores Diego Carboni et Andrea Bagordo";
									$txtts39="Technical Support and Terms of Service";
                                    $txtts40="Ad movere Magnum VERSION Click Hic!";
                                    $txtts41="Status officia";
                                    $txtts42="Source ipsum";
                                    $txtts43="Tibi notificamus non posse versionem Magnum plugin movere. Cum JavaScript lima onerantes, errorem invenimus";
                                    $txtts44="Conare paginam reloading. Si error persistit, tange nos in auxilium.";
                                    $txtts45="Interim adhuc libera versione plugin uti potes quae in pluma Smert Image Lazy Load includit. Pluma haec factura adiuvat ad meliorationem paginae oneris temporis tui website reducendo.";
								}else{   
									$txtts1="Increase the loading speed of public pages.";
									$txtts2="Exponentially increases natural visibility on major search engines.";
									$txtts3="Increase the level of security with a built-in anti-spam that directly affects the browsing speed and indirectly affects search engine rankings.";
									$txtts4="The use of the plugin is reserved only for \"Administrator\" users of the website.";
									$txtts14="Increase the image, the reputation of the website and of the brand with CO2 Application because you show surfers how much CO2 the optimization of the page has reduced.";
									$txtts29="Terms and conditions";
									$txtts30="Technical support";
									$txtts34="Founders Diego Carboni and Andrea Bagordo";
									$txtts39="Technical Support and Terms of Service";
                                    $txtts40="TO ACTIVATE THE PREMIUM VERSION CLICK HERE!";
                                    $txtts41="Status of services";
                                    $txtts42="Source optimization";
                                    $txtts43="We inform you that it is not possible to activate the Premium version of the plugin. When loading the JavaScript files, we encountered an error";
                                    $txtts44="Try reloading the page. If the error persists, contact us for assistance.";
                                    $txtts45="In the meantime, you can still use the free version of the plugin, which includes the Smart Image Lazy Load feature. This feature helps improve the performance of your website by reducing page load times.";
								}

								echo "                                
								<div class=\"wrap\" class=\"fontcolor_page_administrator_toppersystem\">
                                    <h1>&nbsp;</h1>

                                    <div class=\"logostage1_page_administrator_toppersystem\"><img class=\"logostage2_page_administrator_toppersystem\" src=\"".plugins_url('image/toppersystemseo.png', dirname(__FILE__))."\" alt=\"\"></div>
                                    <div class=\"logostage3_page_administrator_toppersystem\"><big><strong>Best SEO Friendly Solution</strong></big></div>
                                    <div class=\"pagestage1_page_administrator_toppersystem\">
                                        
                                        <div class=\"textstage1_page_administrator_toppersystem\">
									        <p>
										        <big><i>".esc_html($txtts1)."<br>
										        ".esc_html($txtts2)."<br>
										        ".esc_html($txtts3)."<br>
										        ".esc_html($txtts14)."</i></big><br><br>
										        ".esc_html($txtts4)."
									        </p>
                                        </div>

                                        <div class=\"textstage1_page_administrator_toppersystem\">
									        <p>
                                                <big>".esc_html($txtts41)."<br>
                                                <span class=\"green_inpage_ts\">&check;</span> <strong>Smart Image Lazy-Loading</strong><br>
                                                <span class=\"red_inpage_ts\">&cross;</span> Antispam - <i>Premium</i><br>
                                                <span class=\"red_inpage_ts\">&cross;</span> Cache - <i>Premium</i><br>                                             
                                                <span class=\"red_inpage_ts\">&cross;</span> ".esc_html($txtts42)." (html, css, js, img + keyword injection) - <i>Premium</i><br>
                                                <span class=\"red_inpage_ts\">&cross;</span> CO2 Application - <i>Premium</i><br>
                                                </big>                                               
									        </p>
                                        </div>                                        

                                        <div id=\"block_for_active_premium_toppersystem\" class=\"textstage1_page_administrator_toppersystem\">
									        <p>
                                                <div id=\"block_load_activation_start_toppersystem\" class=\"\"><a class=\"link_activation_in_page_toppersystem\" href=\"javascript:start_optimization_onpage_toppersystem();\">".esc_html("$txtts40")."</a></div>
                                                <div id=\"block_load_activation_onload_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div>
									        </p>
                                        </div>
                                        <div id=\"block_message_error_for_premium_toppersystem\" class=\"display_none_inpage_ts\">
                                            <p>
                                                <strong>".esc_html("$txtts43")." <span id=\"block_messagebody_error_for_premium_toppersystem\">&nbsp;</span>.</strong><br>
                                                ".esc_html("$txtts44")."<br>
                                                ".esc_html("$txtts45")."
                                            </p>
                                        </div>

                                        <div>
                                            <div class=\"subtitle2_page_administrator_toppersystem\"><strong>".esc_html("$txtts39")."</strong></div>
                                            <div id=\"box14_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenTecnicalSupportToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/supportts.png', dirname(__FILE__))."\" alt=\"\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts30")." <span class=\"link_emailcp_toppersystem\">support@toppersystem.com<span>
                                                    </div>
                                                </div>                                                
                                            </div> 
                                            <div id=\"box12_page_toppersystem\" class=\"boxlink1_page_administrator_toppersystem\" onclick=\"StartProcessOpenAgrementToppersystem()\">
                                                <div class=\"boxlink2_page_administrator_toppersystem\">                                                
                                                    <center><img class=\"boxlink3_page_administrator_toppersystem\" src=\"".plugins_url('image/agrementts.png', dirname(__FILE__))."\" alt=\"\"></center>
                                                </div>
                                                <div class=\"boxlink4_page_administrator_toppersystem\">                                                
                                                    <div class=\"boxlink5_page_administrator_toppersystem\">
                                                       ".esc_html("$txtts29")."
                                                    </div>
                                                </div>                                                
                                            </div> 											
                                        </div>
                                        
                                    </div>
                                    <div class=\"bottomstage1_page_administrator_toppersystem\">
                                        <div class=\"bottomstage2_page_administrator_toppersystem\">
                                            $txtts34<br>
                                            <a target=\"_blank\" class=\"link_website_toppersystem\" href=\"https://www.toppersystem.com/?lang=$hreflang_toppersystem\">toppersystem.com</a>
                                        </div> 
                                    </div>                                    
								</div>

                                <script>
                                    function verify_get_file_js_toppersystem(){
				                        var http = new XMLHttpRequest();
				                        http.onreadystatechange = function() {
					                        if(http.readyState == 4) {
                                                if(http.status == 200){
                                                    //npt
                                                }else{
                                                    if(document.getElementById('block_for_active_premium_toppersystem')){
                                                        document.getElementById('block_for_active_premium_toppersystem').className = \"display_none_inpage_ts\";
                                                        document.getElementById('block_message_error_for_premium_toppersystem').className = \"textstage1_page_administrator_toppersystem\";
                                                        document.getElementById('block_messagebody_error_for_premium_toppersystem').innerHTML = http.status;
                                                    }
                                                }
					                        }else{
						                        if(http.readyState == 1) {						

						                        }else if(http.readyState == 2) {

						                        }else if(http.readyState == 3) {
						                        
						                        }				                        
					                        }
				                        }				                    
				                        var url = \"".plugins_url('js/components_start_toppersystem.js', dirname(__FILE__))."\";
				                        http.open(\"GET\", url, true);
				                        http.send();
                                    }
                                </script>
                                <script>
                                    document.addEventListener(\"DOMContentLoaded\",verify_get_file_js_toppersystem());
                                </script>					
								";

								wp_register_style( 'components_toppersystem', plugins_url('css/components_toppersystem.css', dirname(__FILE__)), array(), TOPPERSYSTEM_PLUGIN_VERSION, 'all' );
								wp_register_script('components_start_toppersystem', plugins_url('js/components_start_toppersystem.js', dirname(__FILE__)), false, TOPPERSYSTEM_PLUGIN_VERSION, false);

								wp_enqueue_style( 'components_toppersystem' );
								wp_enqueue_script('components_start_toppersystem');

								wp_localize_script( 'components_start_toppersystem', 'ajax_components_toppersystem', array(
									'url'      => admin_url( 'admin-ajax.php' ),
									'nonce' => wp_create_nonce('ajax_components_toppersystem_nonce_string')
								));

								unset($hreflang_toppersystem);
							}}, plugins_url('image/logo_menu_toppersystem.png', dirname(__FILE__)), 3 );							
						}else{
							#npt
						}
					});
				}
			}
			TopperSystemRunIsAdmin::toppersystemrun();			
		}
	}
}
?>