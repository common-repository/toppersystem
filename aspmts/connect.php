<?php
if(isset($TopperSystemCpermFileinApi)){
	if(!empty($TopperSystemCpermFileinApi)){
		if($TopperSystemCpermFileinApi == "0123"){

            if((isset($_POST["t"]))&&(isset($_POST["r"]))&&(isset($_POST["a"]))&&($_POST["t"] != "")&&(trim($_POST["r"]) != "")&&($_POST["a"] != "")){

                if(str_replace("\\","",__DIR__) != __DIR__){
                    $hu="\api\safeclass.php";
                    $pathfilesafeclass=str_replace("toppersystem\aspmts","toppersystem",__DIR__).$hu;

                    $hu2="\api\toppersystem.php";
                    $pathfiletoppersystem=str_replace("toppersystem\aspmts","toppersystem",__DIR__).$hu2;

                    $hu3="\aspmts\aspmts.php";
                    $pathfileaspmts=str_replace("toppersystem\aspmts","toppersystem",__DIR__).$hu3;
                }else{
                    $hu="/api/safeclass.php";
                    $pathfilesafeclass=str_replace("toppersystem/aspmts","toppersystem",__DIR__).$hu;

                    $hu2="/api/toppersystem.php";
                    $pathfiletoppersystem=str_replace("toppersystem/aspmts","toppersystem",__DIR__).$hu2;

                    $hu3="/aspmts/aspmts.php";
                    $pathfileaspmts=str_replace("toppersystem/aspmts","toppersystem",__DIR__).$hu3;
                }

	            require_once("$pathfilesafeclass");
	            if(isset($_POST["z"])){
		            date_default_timezone_set(wp_kses(TopperSystemSafeNOSQL::sanitizeNosqlUTF($_POST["z"]), array()));
	            }
	            require_once("$pathfiletoppersystem");
	            include_once("$pathfileaspmts");

	            class TopperSystemSetFileconnect {
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
		            
		            public static function detect_pathfile($filename){
			            if(trim($filename) != ""){
				            if(file_exists('../'.'../'.'../'.'../'.$filename)){
					            return "../"."../"."../"."../";
				            }else{			
					            #$path="../../";
                                $path="../";
					            for($i=2;$i<=count(explode("/",str_replace("\\","/",__DIR__)));$i++){
						            if(file_exists($path.$filename)){
							            return $path;
						            }
						            $path.="../";
					            }			
				            }
			            }
			            return false;
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
			            
		            public static function safeDecrypt($encrypted,$key){
			            $message_decrypter=openssl_decrypt("$encrypted","aes128","$key");
			            $plain=$message_decrypter;
			            unset($encrypted);
			            unset($key);
			            unset($message_decrypter);
			            return $plain;
		            }			

		            public static function decode_value_aspmts($value,$auth_memory){
			            if(trim($value) != ""){
				            if($auth_memory != ""){
					            $code_memory="";
					            $code_memory = preg_replace("/[a-z]+/i", "", $auth_memory); 
					            $n_caratteri_negativi=strlen($code_memory);	
					            $caratteri_negativi="";				
					            for($ipp=0;$ipp<=$n_caratteri_negativi;$ipp++) {
						            $pulisci=substr($caratteri_negativi,$ipp,1);
						            $code_memory=str_replace("$pulisci"," ",$code_memory);	
						            $pulisci="";
					            }						
								            
					            $value_decript=TopperSystemSetFileconnect::safeDecrypt("$value","$code_memory");
					            $return="$value_decript";
				            }else{
					            $return="";
				            }
			            }else{
				            $return="";
			            }
			            return $return;
		            }
	            }
	            
	            class TopperSystemExecuteFileconnect {
		            public static function runts(){
                        $pathfileexceptionaspmtoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExceptionAspmToppersystem.txt";
                        $pathfilecontrolaspmtoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ControlAspmToppersystem.txt";
                        $pathfilecontrolaspm1toppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ControlAspmToppersystem1.txt";

			            $autorizecode=TopperSystemASPMTS::AutorizationCodeToppersystem();
			            $t=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($_POST["t"])), array());

			            if($autorizecode != ""){
				            $autorizecode=TopperSystemASPMTS::md8ts("$autorizecode","$t");
			            }

			            $autorizecode_post=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($_POST["a"])), array());

			            if((trim($autorizecode) != "")&&(trim($autorizecode_post) != "")&&($autorizecode == "$autorizecode_post")){
				            $passaspmts="ok";
				            
				            if(trim($_POST["r"]) != ""){
					            $servername_verifica=trim(gethostbyaddr(wp_kses(trim($_POST["r"]), array())));
					            $server_request_name="$servername_verifica";
					            $ipservername_verifica=gethostbynamel(gethostbyaddr(wp_kses(trim($_POST["r"]), array())))["0"];
					            $server_request_name_ping_ip="$ipservername_verifica";
				            }else{
					            $servername_verifica="";
					            $ipservername_verifica="";
					            $server_request_name="";
					            $server_request_name_ping_ip="";
				            }	
				            
				            if(isset($_POST["u"])){
					            $useragent_verifica=wp_kses($_POST["u"], array());
					            $useragent="$useragent_verifica";
				            }else{
					            $useragent_verifica="";
					            $useragent="";
				            }		
				            
				            #$pathfileexception="../log/ExceptionAspmToppersystem.txt";
                            $pathfileexception="$pathfileexceptionaspmtoppersystem";
				            if(file_exists($pathfileexception)){
					            $contenuto_file_exceptions_toppersystem=@file_get_contents($pathfileexception);
					            unset($pathfileexception);
					            if(trim($contenuto_file_exceptions_toppersystem) != ""){
						            
						            $auth_memory=TopperSystemAuthTS::AuthTopperSystem();
						            if($auth_memory != ""){
							            $ip_verifica=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($_POST["r"])), array());
							            $page_verifica=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($_POST["f"])), array());
						            
							            $contenuto_file_exceptions_toppersystem_array=explode("\n",$contenuto_file_exceptions_toppersystem);
							            $n_contenuto_file_exceptions_toppersystem_array=count($contenuto_file_exceptions_toppersystem_array);
							            unset($contenuto_file_exceptions_toppersystem);

                                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                            $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                            $part_url_transform2=site_url();
                                        }
											            
							            for($i=0;$i<=$n_contenuto_file_exceptions_toppersystem_array;$i++){									
								            if((isset($contenuto_file_exceptions_toppersystem_array[$i]))&&(trim($contenuto_file_exceptions_toppersystem_array[$i]) != "")&&($passaspmts == "ok")){											
									            $array_riga=explode("||||",trim($contenuto_file_exceptions_toppersystem_array[$i]));
									            if(isset($array_riga["5"])){											
										            if(trim($array_riga["5"]) != ""){

											            if($array_riga["0"] != ""){
												            $value_saved=TopperSystemSetFileconnect::decode_value_aspmts($array_riga["0"],"$auth_memory");
                                                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                                $value_saved=str_replace("$part_url_transform1","$part_url_transform2",$value_saved);                         
                                                            }

												            if($value_saved != ""){
													            $ip_saved=$array_riga["1"];
													            $page_saved=$array_riga["2"];
													            $useragent_saved=$array_riga["3"];
													            $servername_saved=$array_riga["4"];
													            $ipservername_saved=$array_riga["5"];
													            
													            if(($ip_saved == "1")&&($ip_verifica != "")){
														            if(str_replace("$value_saved","",$ip_verifica) != "$ip_verifica"){
															            $passaspmts="no";
														            }
													            }
													            
													            if(($page_saved == "1")&&($page_verifica != "")){
														            if(str_replace("$value_saved","",$page_verifica) != "$page_verifica"){
															            $passaspmts="no";
														            }
													            }
													            
													            if(($useragent_saved == "1")&&($useragent_verifica != "")){
														            if(str_replace("$value_saved","",$useragent_verifica) != "$useragent_verifica"){
															            $passaspmts="no";
														            }
													            }
													            
													            if(($servername_saved == "1")&&($servername_verifica != "")){
														            if(str_replace("$value_saved","",$servername_verifica) != "$servername_verifica"){
															            $passaspmts="no";
														            }
													            }
													            
													            if(($ipservername_saved == "1")&&($ipservername_verifica != "")){
														            if(str_replace("$value_saved","",$ipservername_verifica) != "$ipservername_verifica"){
															            $passaspmts="no";
														            }
													            }											
													            
													            $ip_saved="";
													            $page_saved="";
													            $useragent_saved="";
													            $servername_saved="";
													            $ipservername_saved="";
												            }
												            $value_saved="";										
											            }
										            }
									            }										
									            if(is_array($array_riga)){$array_riga=array();}else{$array_riga="";}										
									            $contenuto_file_exceptions_toppersystem_array[$i]=""; 								 
								            }									
							            }
							            if(is_array($contenuto_file_exceptions_toppersystem_array)){$contenuto_file_exceptions_toppersystem_array=array();}else{$contenuto_file_exceptions_toppersystem_array="";}
							            unset($ip_verifica);
							            unset($page_verifica);
							            unset($n_contenuto_file_exceptions_toppersystem_array);
                                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                            unset($part_url_transform1);
                                            unset($part_url_transform2);
                                        }
						            }
						            unset($auth_memory);	
					            }
				            }        
			            }else{
				            $passaspmts="no";
			            }

			            if((($server_request_name != "")&&((str_replace(TopperSystemSetFileconnect::name_ex(),"",$server_request_name) != "$server_request_name")||(str_replace(TopperSystemSetFileconnect::name_ex2(),"",$server_request_name) != "$server_request_name")))){
				            $passaspmts="no";
			            }

                        if((str_replace("google","",$server_request_name) != "$server_request_name")||(str_replace("google","",$server_request_name_ping_ip) != "$server_request_name_ping_ip")||(str_replace("gtranslate","",$server_request_name) != "$server_request_name")||(str_replace("gtranslate","",$server_request_name_ping_ip) != "$server_request_name_ping_ip")){
                            $passaspmts="no";
                        }

                        if($passaspmts == "ok"){
                            $page_request=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($_POST["f"])), array());
                            $dir_verify_ts=str_replace(array(site_url(), "/uploads"),"",wp_upload_dir()['baseurl']);
			                if((($page_request != "")&&(str_replace("$dir_verify_ts","",$page_request) != "$page_request"))){
				                $passaspmts="no";
			                }else if((($page_request != "")&&(str_replace(array("data:image", "favicon.ico", "xmlrpc.php", "wp-cron.php", "ajax", "connect.php", "send.php", "received.php", "image.php", "minify.php", ".xml", ".jpg", ".jpeg", ".png", ".gif", ".svg", ".ico", "data:", ".css", ".js", ".webp", ".jp2", ".mp4", ".avi", "json", ".otf", ".woff", ".woff2", ".ttf", ".eot", ".txt"),"",strtolower($page_request)) != strtolower("$page_request")))){
				                $passaspmts="no";
			                }else if((($useragent != "")&&(str_replace(array("facebook", "whatsapp", "lighthouse"),"",strtolower($useragent)) != strtolower("$useragent")))){
				                $passaspmts="no";
			                }else{
                                #empty
			                }
                            unset($page_request);
                            unset($dir_verify_ts);
                        }

			            if($passaspmts == "ok"){
				            $continua="";
				            $fileHtaxxess_ts=TopperSystemSetFileconnect::detect_pathfile("."."ht"."acc"."ess")."."."ht"."acc"."ess";
				            if(file_exists($fileHtaxxess_ts)){
					            $htaxxess_toppersystem=@file_get_contents($fileHtaxxess_ts);			
					            if(trim($htaxxess_toppersystem) != ""){
						            $continua="ok";
						            if(str_replace("# begin toppersystem seo","",strtolower($htaxxess_toppersystem)) == strtolower($htaxxess_toppersystem)){
                                        $continua="";				
						            }else{
							            $dett_htaxxess_toppersystem=trim(TopperSystemASPMTS::extractstringa_topper_codified($htaxxess_toppersystem, '# BEGIN TopperSystem SEO', '# END TopperSystem SEO'));
							            if($dett_htaxxess_toppersystem != ""){
								            if(str_replace("order allow,deny","",$dett_htaxxess_toppersystem) != "$dett_htaxxess_toppersystem"){
									            if(str_replace("allow from all","",$dett_htaxxess_toppersystem) != "$dett_htaxxess_toppersystem"){
										            #niente
									            }else{
										            $continua="";
									            }
								            }else{
									            $continua="";
								            }
							            }else{
								            $continua="";
							            }
							            unset($dett_htaxxess_toppersystem);					
						            }			
					            }
					            unset($htaxxess_toppersystem);
				            }
				            
				            if($continua == "ok"){
					            $save=TopperSystemASPMTS::topper_validation_save_codified_execute(wp_kses(trim($_POST["r"]), array()),TopperSystemSetFileconnect::detect_pathfile("."."ht"."acc"."ess"));
				            }
				            
				            $allowed_html_elenco_risorse= array(
					            'title' => array(),
					            'html' => array(),
					            'head' => array(),
					            'body' => array()
				            );									
				            echo wp_kses("<html><head><title>Aspm Topper System</title></head><body>aspmts</body></html>", $allowed_html_elenco_risorse);
				            
				            if($continua == "ok"){
					            if(isset($_POST["f"])){
						            $save_provenienza=wp_kses($_POST["f"], array());	
						            #$pathfile="../log/ControlAspmToppersystem.txt";		
						            $pathfile="$pathfilecontrolaspmtoppersystem";
						            if(file_exists($pathfile)){				
							            chmod("$pathfile",0644);
							            $textfilex=fopen($pathfile, "a");
							            $scrivix=wp_kses(trim($_POST["r"]), array())."||||".date("Y-m-d H:i:s")."||||$save_provenienza||||$useragent||||$server_request_name||||$server_request_name_ping_ip\n";
							            fwrite($textfilex,$scrivix);
							            fclose($textfilex);
							            chmod("$pathfile",0444);
						            }else{ 
							            $textfilex=fopen($pathfile, "w");
							            $scrivix=wp_kses(trim($_POST["r"]), array())."||||".date("Y-m-d H:i:s")."||||$save_provenienza||||$useragent||||$server_request_name||||$server_request_name_ping_ip\n";
							            fwrite($textfilex,$scrivix);
							            fclose($textfilex);
							            chmod("$pathfile",0444);
						            }
						            unset($save_provenienza);			

						            $rows = count(file($pathfile));            
						            if($rows >= 400){
							            #$filecontrol1_ts="../log/ControlAspmToppersystem1.txt";
                                        $filecontrol1_ts="$pathfilecontrolaspm1toppersystem";
							            if(file_exists($filecontrol1_ts)){
								            chmod("$filecontrol1_ts",0644);
								            @unlink($filecontrol1_ts);
							            }

							            chmod("$pathfile",0644);
							            rename("$pathfile","$filecontrol1_ts");
							            chmod("$filecontrol1_ts",0444);
							            
							            $textfilex=fopen($pathfile, "w");       
							            fclose($textfilex);
							            chmod("$pathfile",0444);

							            unset($filecontrol1_ts);
						            }
						            unset($pathfile);
						            unset($textfilex);
						            unset($scrivix);
						            unset($rows);

					            }
				            }
				            unset($continua);
				            unset($fileHtaxxess_ts);
					               
			            }
			            unset($passaspmts);
			            unset($autorizecode);
			            unset($autorizecode_post);
			            unset($t);
			            unset($servername_verifica);
			            unset($server_request_name);
			            unset($ipservername_verifica);
			            unset($useragent_verifica);
		            }
	            }
	            @add_action('init', @TopperSystemExecuteFileconnect::runts(), 2);
            }
		}
	}
}
?>