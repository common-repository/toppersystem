<?php
if(isset($TopperSystemCpermFileinApi)){
	if(!empty($TopperSystemCpermFileinApi)){
		if($TopperSystemCpermFileinApi == "0123"){

            if(isset($_POST["authcode_toppersystem"])) {
            require("safeclass.php");
            require("JSMin.php");
            require("Compressor.php");

            class TopperSystemSetFilesend {
                public static function getRandomUserAgent() {
                    srand((double)microtime()*1000000);
                    $someUA = array (
	                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:72.0) Gecko/20100101 Firefox/72.0",
	                "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
	                "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
	                "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
	                "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/116.0",
	                "Mozilla/5.0 (Macintosh; Intel Mac OS X 13.5; rv:109.0) Gecko/20100101 Firefox/116.0",
	                "Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/116.0",
	                "Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/116.0",
	                "Mozilla/5.0 (Macintosh; Intel Mac OS X 13_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Safari/605.1.15",
	                "Mozilla/5.0 (Macintosh; Intel Mac OS X 13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/115.0.1901.203",
	                "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/115.0.1901.203"
                    );
                    return $someUA[rand(0,count($someUA)-1)];
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
                    $url=str_replace(TopperSystemSetFilesend::result_domain_name($url),"",$url);
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

					                #$fullname = realpath ($dir . "/" . $name);
					                $fullname = ($dir . "/" . $name);
					                
					                array_push ($list, $fullname);

					                if (is_dir ($fullname)){
						                TopperSystemSetFilesend::leggiDir ($list, $fullname);
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
		                
		                TopperSystemSetFilesend::leggiDir ($lista_path, $directory);

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
		                $return=false;
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

	            public static function cleancharsts($stringa){
		            if(trim($stringa) != ""){
			            $stringa=str_replace('"','',$stringa);
			            $stringa=str_replace("&quot;","",$stringa);
		            }else{
			            $stringa="";
		            }
		            
		            if(trim($stringa) != ""){
			            $stringa_array=explode(",",$stringa);
			            $stringa="";
			            for($i=0;$i<=count($stringa_array) + 1;$i++){
				            if((isset($stringa_array[$i]))&&(trim($stringa_array[$i]) != "")){
					            $stringa.=trim($stringa_array[$i]).", ";
					            
					            $stringa_array[$i]="";
				            }
			            }
			            $stringa_array=array();
			            $stringa=trim($stringa);	
			            
			            $ultimo_carattere=substr($stringa, strlen($stringa)-1);
			            if($ultimo_carattere == ","){
				            $stringa=substr($stringa, 0, strlen($stringa)-1);
			            }
			            $ultimo_carattere="";
			            $stringa=trim($stringa);		
			            
			            $stringa_array=explode("|",$stringa);
			            $stringa="";
			            for($i=0;$i<=count($stringa_array) + 1;$i++){
				            if((isset($stringa_array[$i]))&&(trim($stringa_array[$i]) != "")){
					            $stringa.=trim($stringa_array[$i])." | ";
					            
					            $stringa_array[$i]="";
				            }
			            }
			            $stringa_array=array();
			            $stringa=trim($stringa);	
			            
			            $ultimo_carattere=substr($stringa, strlen($stringa)-1);
			            if($ultimo_carattere == "|"){
				            $stringa=substr($stringa, 0, strlen($stringa)-1);
			            }
			            $ultimo_carattere="";	
			            unset($ultimo_carattere);
			            $stringa=trim($stringa);
		            }	
		            return $stringa;
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

	            public static function rewrite_indexfile(){
                    $pathfileindex=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/IndexToppersystem.txt";

		            $return="";
		            if(file_exists("$pathfileindex")){
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
				            
				            if(trim($contenuto_file_index_toppersystem != "")){
					            
					            $path_save_array = array('path_save_array' => null);
					            $num_path_save_tot=0;
					            
					            $contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
					            $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
					            $contenuto_file_index_new_toppersystem="";
					            $num_line_tot=0;

					            for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
						            if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
							            $line=trim($contenuto_file_index_toppersystem_array[$i]);
							            if(TopperSystemSetFilesend::verify_line(trim($line))){
								            $line_array=explode("||||",$line);
								            if(str_replace("||||start_new".$num_line_tot.".txt||||","",$line) == "$line"){									
									            if(isset($line_array["3"])){
										            $line=$line_array["0"]."||||".str_replace($line_array["1"],"start_new".$num_line_tot.".txt",$line_array["1"])."||||".$line_array["2"]."||||".$line_array["3"];
									            }else{
										            $line=$line_array["0"]."||||".str_replace($line_array["1"],"start_new".$num_line_tot.".txt",$line_array["1"])."||||".$line_array["2"];
									            }									
								            }
								            if(!in_array($line_array["0"], $path_save_array)){
									            array_push($path_save_array, $line_array["0"]);
									            $contenuto_file_index_new_toppersystem.="$line\n";
									            $num_line_tot++;
								            }								
								            $line_array=array();
							            }					
							            $line="";
							            $contenuto_file_index_toppersystem_array[$i]="";
						            }
					            }
					            if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
					            unset($n_contenuto_file_index_toppersystem_array);
					            unset($num_line_tot);
					            $path_save_array=array();
					            if($contenuto_file_index_toppersystem != "$contenuto_file_index_new_toppersystem"){
						            chmod("$pathfileindex",0644);
						            $textfilem=fopen($pathfileindex, "w");
						            fwrite($textfilem,$contenuto_file_index_new_toppersystem);
						            fclose($textfilem);
						            chmod("$pathfileindex",0444);	
						            clearstatcache();
					            }
					            $return="$contenuto_file_index_new_toppersystem";
					            #cancella variabili
					            unset($contenuto_file_index_toppersystem);
					            unset($contenuto_file_index_new_toppersystem);
				            }
			            }else{
				            $return="block";
			            }				
		            }else{
			            $return="block";
		            }		
		            return "$return";
	            }
	            
	            public static function file_get_contents_toppersystem($pathfileget){
		            if(file_exists($pathfileget)){
			            if(is_readable("$pathfileget")){
				            $contenuto_file_save_toppersystem="";
				            if(filesize($pathfileget) <= 8192){
					            $contenuto_file_save_toppersystem=@file_get_contents($pathfileget);
				            }else{
					            $handle = fopen($pathfileget, "r");
					            if (FALSE === $handle) {
						            $contenuto_file_save_toppersystem="";
					            }else{
						            $contenuto_file_save_toppersystem = '';
						            while (!feof($handle)) {
							             $contenuto_file_save_toppersystem .= fread($handle, 8192);
						            }
						            fclose($handle);
					            }
					            unset($handle);
				            }	
			            }else{
				            $contenuto_file_save_toppersystem="";
			            }
		            }else{
			            $contenuto_file_save_toppersystem="";
		            }
		            
		            return "$contenuto_file_save_toppersystem";
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

                    return "$contenuto_link_sito_send";
                }
	            
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

                public static function save_log_limit_memory_display_toppersystem($n,$canonical_toppersystem_send,$saveMemTopperSystemSEO){
                    if(($n != "")&&($canonical_toppersystem_send != "")&&($saveMemTopperSystemSEO != "")){

                        if($n == "1"){
                            $ncca="\n";
                        }else{
                            $ncca="";
                        }

                        $pathfilesavememtoppersystemseo=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveLogMemoryOptimization.txt";
                        $filesaveMemTopperSystemSEO_ts="$pathfilesavememtoppersystemseo";
                        if(file_exists($filesaveMemTopperSystemSEO_ts)){
                            if(filesize($filesaveMemTopperSystemSEO_ts) >= "500000"){
                                if(file_exists($filesaveMemTopperSystemSEO_ts)){
                                    chmod("$filesaveMemTopperSystemSEO_ts",0644);
                                }
                                $textfilemts=fopen($filesaveMemTopperSystemSEO_ts, "w");
                                $scrivimts="$ncca".date("Y-m-d H:i:s")." | $canonical_toppersystem_send | $saveMemTopperSystemSEO\n";
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
                                $scrivimts="$ncca".date("Y-m-d H:i:s")." | $canonical_toppersystem_send | $saveMemTopperSystemSEO\n";
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
                            $scrivimts="$ncca".date("Y-m-d H:i:s")." | $canonical_toppersystem_send | $saveMemTopperSystemSEO\n";
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

                public static function get_internal_page_html_by_url($url) {
	                
                    $argarr = array(
                        'redirection' => 0,
                        'user-agent'  => 'toppersystemnet',
                        'httpversion' => '1.0',
                        'blocking'    => true,
                        'headers'     => array(),
                        'cookies'     => array(),
                        'sslverify'   => false
                    );	                

                    $response = wp_remote_get($url, $argarr);

                    if (is_wp_error($response)) {
                        return false;
                    }

                    $body = wp_remote_retrieve_body($response);

                    return $body;
                }	
            }


            class TopperSystemExecuteFilesend {
            public static function runts(){
            $pass="";
            if(isset($_SERVER["HTTP_REFERER"])){
                $paginaprovenienzats=$_SERVER["HTTP_REFERER"];
            }else{
                $paginaprovenienzats="";
                if((isset($_POST["sbm_toppersystem_send"]))&&(trim($_POST["sbm_toppersystem_send"]) == md5(TopperSystemAuthTS::AuthTopperSystem()))){
                    $pass="ok";
                }
            }
            $paginaprovenienzats_controllo=str_replace($_SERVER['SERVER_NAME'],"",$paginaprovenienzats);
            if(($paginaprovenienzats != "$paginaprovenienzats_controllo") || ($pass == "ok")){
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

	                    if((isset($_POST["language_toppersystem_send"]) && trim($_POST["language_toppersystem_send"]) != "")) {
		                    $language_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['language_toppersystem_send'])), array());	
				            $language_toppersystem_send=wp_check_invalid_utf8(TopperSystemSetFilesend::cleancharsts(stripslashes($language_toppersystem_send)));
	                    }else{
		                    $language_toppersystem_send="";
	                    }

	                    if((isset($_POST["title_toppersystem_send"]) && trim($_POST["title_toppersystem_send"]) != "")) {
		                    $title_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['title_toppersystem_send'])), array());
				            $title_toppersystem_send=wp_check_invalid_utf8(TopperSystemSetFilesend::cleancharsts(stripslashes($title_toppersystem_send)));			
	                    }else{
		                    $title_toppersystem_send="";
	                    }

	                    if((isset($_POST["check_title_toppersystem_send"]) && trim($_POST["check_title_toppersystem_send"]) != "")) {
		                    $check_title_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['check_title_toppersystem_send'])), array());	
	                    }else{
		                    $check_title_toppersystem_send="";
	                    }

	                    if((isset($_POST["description_toppersystem_send"]) && trim($_POST["description_toppersystem_send"]) != "")) {
		                    $description_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['description_toppersystem_send'])), array());
				            $description_toppersystem_send=wp_check_invalid_utf8(TopperSystemSetFilesend::cleancharsts(stripslashes($description_toppersystem_send)));
	                    }else{
		                    $description_toppersystem_send="";
	                    }

	                    if((isset($_POST["check_description_toppersystem_send"]) && trim($_POST["check_description_toppersystem_send"]) != "")) {
		                    $check_description_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['check_description_toppersystem_send'])), array());	
	                    }else{
		                    $check_description_toppersystem_send="";
	                    }

	                    if((isset($_POST["keywords_toppersystem_send"]) && trim($_POST["keywords_toppersystem_send"]) != "")) {
		                    $keywords_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['keywords_toppersystem_send'])), array());	
				            $keywords_toppersystem_send=wp_check_invalid_utf8(TopperSystemSetFilesend::cleancharsts(stripslashes($keywords_toppersystem_send)));
	                    }else{
		                    $keywords_toppersystem_send="";
	                    }

	                    if((isset($_POST["check_keywords_toppersystem_send"]) && trim($_POST["check_keywords_toppersystem_send"]) != "")) {
		                    $check_keywords_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['check_keywords_toppersystem_send'])), array());	
	                    }else{
		                    $check_keywords_toppersystem_send="";
	                    }

	                    if((isset($_POST["keyword_toppersystem_send"]) && trim($_POST["keyword_toppersystem_send"]) != "")) {
		                    $keyword_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['keyword_toppersystem_send'])), array());
				            $keyword_toppersystem_send=wp_check_invalid_utf8(TopperSystemSetFilesend::cleancharsts(stripslashes($keyword_toppersystem_send)));
	                    }else{
		                    $keyword_toppersystem_send="";
	                    }

	                    if((isset($_POST["category_toppersystem_send"]) && trim($_POST["category_toppersystem_send"]) != "")) {
		                    $category_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['category_toppersystem_send'])), array());
				            $category_toppersystem_send=wp_check_invalid_utf8(TopperSystemSetFilesend::cleancharsts(stripslashes($category_toppersystem_send)));
	                    }else{
		                    $category_toppersystem_send="";
	                    }

	                    if((isset($_POST["destination_toppersystem"]) && trim($_POST["destination_toppersystem"]) != "")) {
		                    $destination_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['destination_toppersystem'])), array());	
	                    }else{
		                    $destination_toppersystem="";
	                    }

	                    if((isset($_POST["resend_toppersystem"]) && trim($_POST["resend_toppersystem"]) != "")) {
		                    $resend_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['resend_toppersystem'])), array());	
	                    }else{
		                    $resend_toppersystem="";
	                    }

			            if((isset($_POST["reqcentral_toppersystem_send"]) && trim($_POST["reqcentral_toppersystem_send"]) != "")) {
		                    $resendCentraltoppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['reqcentral_toppersystem_send'])), array());	
	                    }else{
		                    $resendCentraltoppersystem="";
	                    }

	                    if((isset($_POST["check_privacy_toppersystem_send"]) && trim($_POST["check_privacy_toppersystem_send"]) != "")) {
		                    $check_privacy_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['check_privacy_toppersystem_send'])), array());	
	                    }else{
		                    $check_privacy_toppersystem_send="";
	                    }

	                    if((isset($_POST["hreflang_toppersystem"]) && trim($_POST["hreflang_toppersystem"]) != "")) {
		                    $hreflang_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['hreflang_toppersystem'])), array());	
	                    }else{
		                    $hreflang_toppersystem="en";
	                    }

	                    if((isset($_POST["class_all_toppersystem_send"]) && trim($_POST["class_all_toppersystem_send"]) != "")) {
		                    $class_all_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['class_all_toppersystem_send'])), array());	
	                    }else{
		                    $class_all_toppersystem_send="";
	                    }
			            
			            if((isset($_POST["images_toppersystem_send"]) && trim($_POST["images_toppersystem_send"]) != "")) {
		                    $images_toppersystem_send=(int)$_POST['images_toppersystem_send'];	
	                    }else{
		                    $images_toppersystem_send=1;
	                    }

			            if((isset($_POST["resolution_images_toppersystem_send"]) && trim($_POST["resolution_images_toppersystem_send"]) != "")) {
		                    $resolution_images_toppersystem_send=(int)$_POST['resolution_images_toppersystem_send'];	
	                    }else{
		                    $resolution_images_toppersystem_send="76";
	                    }

			            if((isset($_POST["stronglazyload_images_toppersystem_send"]) && trim($_POST["stronglazyload_images_toppersystem_send"]) != "")) {
		                    $stronglazyload_images_toppersystem_send=(int)$_POST['stronglazyload_images_toppersystem_send'];	
	                    }else{
		                    $stronglazyload_images_toppersystem_send=0;
	                    }

			            if((isset($_POST["stronglazyload_video_toppersystem_send"]) && trim($_POST["stronglazyload_video_toppersystem_send"]) != "")) {
		                    $stronglazyload_video_toppersystem_send=(int)$_POST['stronglazyload_video_toppersystem_send'];	
	                    }else{
		                    $stronglazyload_video_toppersystem_send=1;
	                    }

			            if((isset($_POST["text_ia_toppersystem_send"]) && trim($_POST["text_ia_toppersystem_send"]) != "")) {
		                    $text_ia_toppersystem_send=(int)$_POST['text_ia_toppersystem_send'];	
	                    }else{
		                    $text_ia_toppersystem_send=0;
	                    }
			            
	                    if((isset($_POST["check_norescrive_toppersystem"]) && trim($_POST["check_norescrive_toppersystem"]) != "")) {
		                    $check_norescrive_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['check_norescrive_toppersystem'])), array());	
	                    }else{
		                    $check_norescrive_toppersystem="";
	                    }

	                    if((isset($_POST["tsr_toppersystem"]) && trim($_POST["tsr_toppersystem"]) == "ok")) {

                            if((trim($keyword_toppersystem_send) != "")&&(trim($language_toppersystem_send) != "")&&(trim($keyword_toppersystem_send) != "")&&((trim($check_norescrive_toppersystem) == "true")||(trim($check_norescrive_toppersystem) == "false"))){
                                if(trim($check_norescrive_toppersystem) == "true"){
                                    $write_norescrive_toppersystem="1";
                                }else{
                                    $write_norescrive_toppersystem="0";
                                }
                                $tsr_toppersystem=$language_toppersystem_send."\n".$keyword_toppersystem_send."\n".$images_toppersystem_send."\n".$write_norescrive_toppersystem."\n".$resolution_images_toppersystem_send."\n".$stronglazyload_images_toppersystem_send."\n".$stronglazyload_video_toppersystem_send."\n".$text_ia_toppersystem_send;
                            }else{
                                $tsr_toppersystem="";
                            }


	                    }else{
		                    $tsr_toppersystem="";
	                    }

                        if($hreflang_toppersystem == "it"){    
		                   $txtts0="Verifica le autorizzazioni per utilizzare Topper System SEO"; 
                           $txtts1="Verifica le autorizzazioni per utilizzare Topper System SEO";
                           $txtts2="Qualcosa è andato storto. Assicurati di aver copilato correttamente il form e riprova.";
                           $txtts3="Connessione non riuscita";
			               $txtts4="Servizio temporaneamente non disponibile. Riprova più tardi.";
                        }else if($hreflang_toppersystem == "ar"){ 
		                   $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
                           $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
                           $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
                           $txtts3="فشل الاتصال";
			               $txtts4="الخدمة غير متاحة مؤقتا. حاول لاحقا.";
                        }else if($hreflang_toppersystem == "de"){ 
		                   $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
                           $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
                           $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
                           $txtts3="Verbindung fehlgeschlagen";
			               $txtts4="Dienst vorübergehend nicht verfügbar. Versuche es später.";
                        }else if($hreflang_toppersystem == "es"){ 
		                   $txtts0="Verifique los permisos para usar el Topper System SEO"; 
                           $txtts1="Verifique los permisos para usar el Topper System SEO";
                           $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
                           $txtts3="Conexión fallida";
			               $txtts4="Servicio temporalmente no disponible. Intenta más tarde.";
                        }else if($hreflang_toppersystem == "fr"){ 
		                   $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
                           $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
                           $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
                           $txtts3="La connexion a échoué";
			               $txtts4="Service temporairement indisponible. Essayer plus tard.";
                        }else if($hreflang_toppersystem == "hi"){ 
		                   $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
                           $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
                           $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
                           $txtts3="कनेक्शन विफल हुआ";
			               $txtts4="सेवा अस्थाई रूप से अनुपलब्ध। बाद में कोशिश करें।";
                        }else if($hreflang_toppersystem == "ja"){ 
		                   $txtts0="使用する権限を確認してください Topper System SEO"; 
                           $txtts1="使用する権限を確認してください Topper System SEO";
                           $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
                           $txtts3="接続できませんでした";
			               $txtts4="サービスは一時的に利用できません。 後で試してください。";
                        }else if($hreflang_toppersystem == "pl"){ 
		                   $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
                           $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
                           $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
                           $txtts3="Połączenie nieudane";
			               $txtts4="Usługa chwilowo niedostępna. Spróbuj później.";
                        }else if($hreflang_toppersystem == "pt"){ 
		                   $txtts0="Verifique as permissões para usar o Topper System SEO"; 
                           $txtts1="Verifique as permissões para usar o Topper System SEO";
                           $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
                           $txtts3="Falha na conexão";
			               $txtts4="Usługa chwilowo niedostępna. Riprova più tardi.";
                        }else if($hreflang_toppersystem == "ru"){ 
		                   $txtts0="Проверьте разрешения на использование Topper System SEO"; 
                           $txtts1="Проверьте разрешения на использование Topper System SEO";
                           $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
                           $txtts3="Ошибка подключения";
			               $txtts4="Временно недоступный сервис. Рипрова più tardi.";
                        }else if($hreflang_toppersystem == "zh"){ 
		                   $txtts0="检查使用权限 Topper System SEO"; 
                           $txtts1="检查使用权限 Topper System SEO";
                           $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
                           $txtts3="连接失败";
			               $txtts4="服务暂时不可用。 等会再试。";
                        }else if($hreflang_toppersystem == "he"){ 
		                   $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
                           $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
                           $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
                           $txtts3="החיבור נכשל";
			               $txtts4="זמנית, השירות אינו זמין. נסה מאוחר יותר.";
                        }else if($hreflang_toppersystem == "la"){ 
		                   $txtts0="Reprehendo permissions ut Topper System SEO"; 
                           $txtts1="Reprehendo permissions ut Topper System SEO";
                           $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
                           $txtts3="Deficio Connection";
			               $txtts4="Temporaliter Unavailable Service. Conare postea.";
                        }else{   
		                   $txtts0="Check the permissions to use the Topper System SEO"; 
                           $txtts1="Check the permissions to use the Topper System SEO";
                           $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
                           $txtts3="Connection failed";
			               $txtts4="Service temporarily unavailable. Try later.";
                        }
                        
	                    if((trim($canonical_toppersystem_send) != "")&&(trim($destination_toppersystem) != "")&&(trim($language_toppersystem_send) != "")&&(trim($keyword_toppersystem_send) != "")&&(trim($hreflang_toppersystem) != "")&&($check_privacy_toppersystem_send == true)){

                            $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);

                            if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
                                define('DEFAULT_URL_TOPPERSYSTEM', 'https://www.toppersystem.com');
                                $auth_memory=TopperSystemAuthTS::AuthTopperSystem();  
                         
                                if(($authcode_toppersystem_verifica == "$auth_memory")){
									$pathfileexcludecsstoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExcludeCSSToppersystem.txt";
                                    $pathfileexcludedefertoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExcludeDeferToppersystem.txt";
                                    $pathfileactivedefertoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveDeferToppersystem.txt";
                                    $pathfileactivenoneresourcetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveNoneResourceToppersystem.txt";
                                    $pathfileactivedelayjavascripttoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveDelayJavascriptToppersystem.txt";
                                    $pathdirdb=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/db/";
                                    $pathfileindex=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/IndexToppersystem.txt";
                                    $pathfilesavetoppersystem2=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveToppersystem";
                                    $pathfilesaveultimeimpostation=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveUltimeImpostation.txt";
                                    $pathfilenoactivecssforstyletoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/NoActiveCSSforStyle.txt";


						            if(TopperSystemSetFilesend::add_state_connection_toppersystem("$canonical_toppersystem_send") == 1){
                                        $array_check_memory_disponible=TopperSystemSetFilesend::chek_memory_toppersystem();
                                        $pass_check_memory_disponible=$array_check_memory_disponible["0"];
                                        $memory_limit_check_memory_disponible=$array_check_memory_disponible["1"];
                                        $memory_usage_check_memory_disponible=$array_check_memory_disponible["2"];
                                        $memorypeak_usage_check_memory_disponible=$array_check_memory_disponible["3"];
                                        $memory_free_perc_check_memory_disponible=$array_check_memory_disponible["4"];
                                        $wp_memory_limit_ts_check_memory_disponible=$array_check_memory_disponible["5"];
                                        $wp_max_memory_limit_ts_check_memory_disponible=$array_check_memory_disponible["6"];

                                        $saveMemTopperSystemSEO=TopperSystemSetFilesend::message_limit_memory_display_toppersystem("1","en", "$memory_limit_check_memory_disponible", "$memory_usage_check_memory_disponible", "$memorypeak_usage_check_memory_disponible", "$memory_free_perc_check_memory_disponible", "$wp_memory_limit_ts_check_memory_disponible", "$wp_max_memory_limit_ts_check_memory_disponible");
                                        $save_log_limit_memory_display_toppersystem=TopperSystemSetFilesend::save_log_limit_memory_display_toppersystem("1",$canonical_toppersystem_send,$saveMemTopperSystemSEO);
                                        $save_log_limit_memory_display_toppersystem="";
                                        $saveMemTopperSystemSEO="";
                                     
							            if($pass_check_memory_disponible == "1"){
								            $rewrite_index_file=TopperSystemSetFilesend::rewrite_indexfile();
								            if($rewrite_index_file != "block"){
									            if($check_norescrive_toppersystem == "true"){
										            
										            $contenuto_file_index_toppersystem="$rewrite_index_file";
										            unset($rewrite_index_file);
										            if($contenuto_file_index_toppersystem != ""){							
											            $contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
											            $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
											            $contenuto_file_index_toppersystem="";						
										            
											            $nlinesave_toppersystem=40;
											            $nmax_cicle_toppersystem=ceil(($n_contenuto_file_index_toppersystem_array -1 ) / $nlinesave_toppersystem);
											            $trovato="";
											            for($nc=0;$nc<$nmax_cicle_toppersystem;$nc++){
												            if($trovato == ""){ 
													            if($nc == "0"){
														            $nc_w="";
													            }else{
														            $nc_w="$nc";
													            }                  
													            $part_file="";
													            
													            $contenuto_file_save_toppersystem=TopperSystemSetFilesend::file_get_contents_toppersystem($pathfilesavetoppersystem2.$nc_w.".txt");
													            if($contenuto_file_save_toppersystem != ""){
                                                                    if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                                        #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                                                        #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                                                        $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                                                        $part_url_transform2=site_url();
                                                                        $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
                                                                    }else{
                                                                        $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
                                                                    }                     
														            $canonical_toppersystem_send_no_domain=TopperSystemSetFilesend::result_page_name_no_domain("$canonical_toppersystem_send2");
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

											            if($part_file != ""){
												            $part_file_array=explode("||||",$part_file);
												            $language_toppersystem_send=$part_file_array["1"];
												            $title_toppersystem_send=$part_file_array["2"];
												            $check_title_toppersystem_send=$part_file_array["3"];
												            $description_toppersystem_send=$part_file_array["4"];
												            $check_description_toppersystem_send=$part_file_array["5"];
												            $keywords_toppersystem_send=$part_file_array["6"];
												            $check_keywords_toppersystem_send=$part_file_array["7"];
												            $keyword_toppersystem_send=$part_file_array["8"];
												            $category_toppersystem_send=$part_file_array["9"];
												            $images_toppersystem_send=(int)$part_file_array["10"];

                                                            if((isset($part_file_array["11"]))&&(trim($part_file_array["11"]) != "")){
                                                                $resolution_images_toppersystem_send=(int)$part_file_array["11"];
                                                            }else{
                                                                $resolution_images_toppersystem_send="76";
                                                            }

                                                            if((isset($part_file_array["12"]))&&(trim($part_file_array["12"]) != "")){
                                                                $stronglazyload_images_toppersystem_send=(int)$part_file_array["12"];
                                                            }else{
                                                                $stronglazyload_images_toppersystem_send="0";
                                                            }

                                                            if((isset($part_file_array["13"]))&&(trim($part_file_array["13"]) != "")){
                                                                $stronglazyload_video_toppersystem_send=(int)$part_file_array["13"];
                                                            }else{
                                                                $stronglazyload_video_toppersystem_send="1";
                                                            }

                                                            if((isset($part_file_array["14"]))&&(trim($part_file_array["14"]) != "")){
                                                                $text_ia_toppersystem_send=(int)$part_file_array["14"];
                                                            }else{
                                                                $text_ia_toppersystem_send="0";
                                                            }

												            $part_file_array=array();
											            }
										            }						
									            }		

									            $date_start_request=date("Y-m-d H:i:s");						
									            $oldcvn="";	
									            
									            #salva stato su file index
									            $pathfileindex="$pathfileindex";
									            if(file_exists($pathfileindex)){
										            if(is_readable("$pathfileindex")){
                                                        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                            #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                                            #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                                            $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                                            $part_url_transform2=site_url();
                                                            $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
                                                        }else{
                                                            $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
                                                        }
											            $canonical_toppersystem_send_no_domain=TopperSystemSetFilesend::result_page_name_no_domain("$canonical_toppersystem_send2");
											            
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
											            $cvn_ok="";
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
																	            if(TopperSystemSetFilesend::verify_line(trim($line))){
																		            $line_preleva="$line";
																		            $num_line_tot_preleva=$num_line_tot;
																		            if(isset(explode("||||",$line)["3"])){
																			            $oldcvn=explode("||||",$line)["3"];
																		            }						
																	            }
																            }
															            }
															            if(trim($line) != ""){
																            if(TopperSystemSetFilesend::verify_line(trim($line))){
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
												            #niente
											            }else{
												            if($oldcvn != ""){
													            $cvn_ok="||||$oldcvn";									
												            }								
												            
												            #sostituisci e salva
												            $line_preleva_new=trim($canonical_toppersystem_send_no_domain)."||||"."start_new$num_line_tot_preleva.txt"."||||".$date_start_request.$cvn_ok;
												            $contenuto_file_salvato_index=str_replace("$line_preleva","$line_preleva_new",$contenuto_file_salvato_index);
												            
												            chmod("$pathfileindex",0644);
												            $textfilem=fopen($pathfileindex, "w");
												            $scrivim="$contenuto_file_salvato_index";
												            fwrite($textfilem,$scrivim);
												            fclose($textfilem);

												            chmod("$pathfileindex",0444);
												            clearstatcache();
												            $textfilem="";
												            $scrivim="";

											            }								
											            $contenuto_file_salvato_index="";
											            $line_preleva="";
																            
											            #################

                                                        $array_check_memory_disponible2=TopperSystemSetFilesend::chek_memory_toppersystem();
                                                        $pass_check_memory_disponible2=$array_check_memory_disponible2["0"];
                                                        $memory_limit_check_memory_disponible2=$array_check_memory_disponible2["1"];
                                                        $memory_usage_check_memory_disponible2=$array_check_memory_disponible2["2"];
                                                        $memorypeak_usage_check_memory_disponible2=$array_check_memory_disponible2["3"];
                                                        $memory_free_perc_check_memory_disponible2=$array_check_memory_disponible2["4"];
                                                        $wp_memory_limit_ts_check_memory_disponible2=$array_check_memory_disponible2["5"];
                                                        $wp_max_memory_limit_ts_check_memory_disponible2=$array_check_memory_disponible2["6"];

                                                        $saveMemTopperSystemSEO2=TopperSystemSetFilesend::message_limit_memory_display_toppersystem("2","en", "$memory_limit_check_memory_disponible2", "$memory_usage_check_memory_disponible2", "$memorypeak_usage_check_memory_disponible2", "$memory_free_perc_check_memory_disponible2", "$wp_memory_limit_ts_check_memory_disponible2", "$wp_max_memory_limit_ts_check_memory_disponible2");
                                                        $save_log_limit_memory_display_toppersystem=TopperSystemSetFilesend::save_log_limit_memory_display_toppersystem("2",$canonical_toppersystem_send,$saveMemTopperSystemSEO2);
                                                        $save_log_limit_memory_display_toppersystem="";
                                                        $saveMemTopperSystemSEO2="";
                                                  
											            if($pass_check_memory_disponible2 == "1"){

						                                    $fileActivateDefer_ts="$pathfileactivedefertoppersystem";
						                                    if(file_exists($fileActivateDefer_ts)){
                                                                $activejsdefer_toppersystem="1";
						                                    }else{
                                                                $activejsdefer_toppersystem="0";
						                                    }
						                                    unset($fileActivateDefer_ts);

                                                            $fileJSdefer_ts="$pathfileexcludedefertoppersystem";
                                                            if(file_exists($fileJSdefer_ts)){
	                                                            $handle_jsdefer = fopen($fileJSdefer_ts, "r");
	                                                            if (FALSE === $handle_jsdefer) {
		                                                            $jsdefer_toppersystem="";
	                                                            }else{
		                                                            $jsdefer_toppersystem = '';
		                                                            while (!feof($handle_jsdefer)) {
			                                                            $jsdefer_toppersystem .= fread($handle_jsdefer, 8192);
		                                                            }
		                                                            fclose($handle_jsdefer);
	                                                            }
	                                                            unset($handle_jsdefer);
                                                            }else{
                                                                $jsdefer_toppersystem="";
                                                            }
                                                            unset($fileJSdefer_ts);

                                                            if(file_exists($pathfileactivenoneresourcetoppersystem)){                                                            
                                                                $activejsdefer_toppersystem="2";
                                                            }

                                                            if(file_exists($pathfileactivedelayjavascripttoppersystem)){                                                            
                                                                $delayjs_toppersystem_send="1";
                                                            }else{                                                            
                                                                $delayjs_toppersystem_send="";
                                                            }
															
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
                                                            
                                                            if(file_exists($pathfilenoactivecssforstyletoppersystem)){                                                            
                                                                $css_for_style_active_toppersystem="0";
                                                            }else{                                                            
                                                                $css_for_style_active_toppersystem="1";
                                                            }

                                                            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                                #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                                                #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                                                $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                                                $part_url_transform2=site_url();
                                                                $jsdefer_toppersystem=str_replace("$part_url_transform1","$part_url_transform2",$jsdefer_toppersystem);
                                                                $excludecssurl_toppersystem=str_replace("$part_url_transform1","$part_url_transform2",$excludecssurl_toppersystem);                          
                                                            }

                                                            $html_toppersystem = TopperSystemSetFilesend::get_internal_page_html_by_url($canonical_toppersystem_send);
                                                            if ($html_toppersystem) {
                                                                #npt	
                                                            } else {
                                                                $html_toppersystem="";
                                                            }										

												            $postdata_new = array(
                                                                "ajx_toppersystem_send" => admin_url( 'admin-ajax.php' ),
													            "canonical_toppersystem_send" => trim($canonical_toppersystem_send),
													            "language_toppersystem_send" => trim($language_toppersystem_send),
													            "title_toppersystem_send" => trim($title_toppersystem_send),		
													            "check_title_toppersystem_send" => trim($check_title_toppersystem_send),
													            "description_toppersystem_send" => trim($description_toppersystem_send),
													            "check_description_toppersystem_send" => trim($check_description_toppersystem_send),
													            "keywords_toppersystem_send" => trim($keywords_toppersystem_send),
													            "check_keywords_toppersystem_send" => trim($check_keywords_toppersystem_send),                    
													            "keyword_toppersystem_send" => trim($keyword_toppersystem_send),
													            "images_toppersystem_send" => trim($images_toppersystem_send),
                                                                "resolution_images_toppersystem_send" => trim($resolution_images_toppersystem_send),
                                                                "stronglazyload_images_toppersystem_send" => trim($stronglazyload_images_toppersystem_send),
                                                                "stronglazyload_video_toppersystem_send" => trim($stronglazyload_video_toppersystem_send),
                                                                "text_ia_toppersystem_send" => trim($text_ia_toppersystem_send),
													            "authcode_toppersystem" => $authcode_toppersystem.md5(date("Y-m-d-i")),
													            "category_toppersystem_send" => trim($category_toppersystem_send),
													            "resend_toppersystem" => trim($resend_toppersystem),
													            "hreflang_toppersystem" => trim($hreflang_toppersystem),
													            "check_privacy_toppersystem_send" => trim($check_privacy_toppersystem_send),
													            "resendCentral_toppersystem_send" => trim($resendCentraltoppersystem),
                                                                "activejsdefer_toppersystem_send" => trim($activejsdefer_toppersystem),
                                                                "excludejsdefer_toppersystem_send" => trim($jsdefer_toppersystem),
                                                                "delayjs_toppersystem_send" => trim($delayjs_toppersystem_send),
																"excludecssurl_toppersystem_send" => trim($excludecssurl_toppersystem),
                                                                "css_for_style_send" => trim($css_for_style_active_toppersystem),
                                                                "html_toppersystem_send" => $html_toppersystem,
													            "timezone_toppersystem_send" => date_default_timezone_get()
												            );
												            $argarr = array(
													            'timeout'     => 480,
													            'redirection' => 0,
													            'user-agent'  => TopperSystemSetFilesend::getRandomUserAgent(),
													            'httpversion' => '1.0',
													            'blocking'    => true,
													            'headers'     => array(),
													            'body'        => $postdata_new,
													            'cookies'     => array(),
													            'sslverify'   => false
												            );
												            $contenuto_link_sito_send = wp_remote_post(DEFAULT_URL_TOPPERSYSTEM.$destination_toppersystem, $argarr);
                                                            $html_toppersystem="";									

												            if ( is_wp_error( $contenuto_link_sito_send ) ) {
													            $wperror_report_ts=$contenuto_link_sito_send->get_error_message();
													            $contenuto_link_sito_send="";
												            }else{
													            $wperror_report_ts="";
													            $contenuto_link_sito_send=$contenuto_link_sito_send['body'];
												            }

															if(($contenuto_link_sito_send != "")&&($wperror_report_ts == "")){
																$TopperSystemCpermFileinApi="0123";
																include("received.php");																
																$contenuto_link_sito_send_array=explode("########TOPPERSYSTEMAPIREQUESTPLUGIN#########",$contenuto_link_sito_send);
                                                                if((isset($contenuto_link_sito_send_array["1"]))&&(trim($contenuto_link_sito_send_array["1"]) != "")){
                                                                    $page_toppersystem_send=trim($contenuto_link_sito_send_array["1"]);                                                               
                                                                																
																	$string_params=$contenuto_link_sito_send_array["0"];																	
																	$string_params_array=explode("(:-))",$string_params);
																	
																	if((isset($string_params_array["0"]))&&(trim($string_params_array["0"]) != "")){
																		$action_received_array=explode(":x:",trim($string_params_array["0"]));
																		if($action_received_array["0"] == "action"){
																			if((isset($action_received_array["1"]))&&(trim($action_received_array["1"]) != "")){
																				$action_received=trim($action_received_array["1"]);
																			}else{
																				$action_received="";
																			}
																		}else{
																			$action_received="";
																		}
																	}else{
																		$action_received="";
																	}
																	
																	if((isset($string_params_array["1"]))&&(trim($string_params_array["1"]) != "")){
																		$action_canonical_toppersystem_send_array=explode(":x:",trim($string_params_array["1"]));
																		if($action_canonical_toppersystem_send_array["0"] == "canonical_toppersystem_send"){
																			if((isset($action_canonical_toppersystem_send_array["1"]))&&(trim($action_canonical_toppersystem_send_array["1"]) != "")){
																				$action_canonical_toppersystem_send=trim($action_canonical_toppersystem_send_array["1"]);
																			}else{
																				$action_canonical_toppersystem_send="";
																			}
																		}else{
																			$action_canonical_toppersystem_send="";
																		}
																	}else{
																		$action_canonical_toppersystem_send="";
																	}

																	if((isset($string_params_array["2"]))&&(trim($string_params_array["2"]) != "")){
																		$action_level_parsing_img_array=explode(":x:",trim($string_params_array["2"]));
																		if($action_level_parsing_img_array["0"] == "level_parsing_img"){
																			if((isset($action_level_parsing_img_array["1"]))&&(trim($action_level_parsing_img_array["1"]) != "")){
																				$action_level_parsing_img=trim($action_level_parsing_img_array["1"]);
																			}else{
																				$action_level_parsing_img="";
																			}
																		}else{
																			$action_level_parsing_img="";
																		}
																	}else{
																		$action_level_parsing_img="";
																	}

																	if((isset($string_params_array["3"]))&&(trim($string_params_array["3"]) != "")){
																		$action_resend_toppersystem_array=explode(":x:",trim($string_params_array["3"]));
																		if($action_resend_toppersystem_array["0"] == "resend_toppersystem"){
																			if((isset($action_resend_toppersystem_array["1"]))&&(trim($action_resend_toppersystem_array["1"]) != "")){
																				$action_resend_toppersystem=trim($action_resend_toppersystem_array["1"]);
																			}else{
																				$action_resend_toppersystem="";
																			}
																		}else{
																			$action_resend_toppersystem="";
																		}
																	}else{
																		$action_resend_toppersystem="";
																	}

																	if((isset($string_params_array["4"]))&&(trim($string_params_array["4"]) != "")){
																		$action_css_toppersystem_send_array=explode(":x:",trim($string_params_array["4"]));
																		if($action_css_toppersystem_send_array["0"] == "css_toppersystem_send"){
																			if((isset($action_css_toppersystem_send_array["1"]))&&(trim($action_css_toppersystem_send_array["1"]) != "")){
																				$action_css_toppersystem_send=trim($action_css_toppersystem_send_array["1"]);
																			}else{
																				$action_css_toppersystem_send="";
																			}
																		}else{
																			$action_css_toppersystem_send="";
																		}
																	}else{
																		$action_css_toppersystem_send="";
																	}

																	if((isset($string_params_array["5"]))&&(trim($string_params_array["5"]) != "")){
																		$action_js_toppersystem_send_array=explode(":x:",trim($string_params_array["5"]));
																		if($action_js_toppersystem_send_array["0"] == "js_toppersystem_send"){
																			if((isset($action_js_toppersystem_send_array["1"]))&&(trim($action_js_toppersystem_send_array["1"]) != "")){
																				$action_js_toppersystem_send=trim($action_js_toppersystem_send_array["1"]);
																			}else{
																				$action_js_toppersystem_send="";
																			}
																		}else{
																			$action_js_toppersystem_send="";
																		}
																	}else{
																		$action_js_toppersystem_send="";
																	}

																	if((isset($string_params_array["6"]))&&(trim($string_params_array["6"]) != "")){
																		$action_credits_toppersystem_send_array=explode(":x:",trim($string_params_array["6"]));
																		if($action_credits_toppersystem_send_array["0"] == "credits_toppersystem_send"){
																			if((isset($action_credits_toppersystem_send_array["1"]))&&(trim($action_credits_toppersystem_send_array["1"]) != "")){
																				$action_credits_toppersystem_send=trim($action_credits_toppersystem_send_array["1"]);
																			}else{
																				$action_credits_toppersystem_send="";
																			}
																		}else{
																			$action_credits_toppersystem_send="";
																		}
																	}else{
																		$action_credits_toppersystem_send="";
																	}

																	if((isset($string_params_array["7"]))&&(trim($string_params_array["7"]) != "")){
																		$action_sb_toppersystem_send_array=explode(":x:",trim($string_params_array["7"]));
																		if($action_sb_toppersystem_send_array["0"] == "sb_toppersystem_send"){
																			if((isset($action_sb_toppersystem_send_array["1"]))&&(trim($action_sb_toppersystem_send_array["1"]) != "")){
																				$action_sb_toppersystem_send=trim($action_sb_toppersystem_send_array["1"]);
																			}else{
																				$action_sb_toppersystem_send="";
																			}
																		}else{
																			$action_sb_toppersystem_send="";
																		}
																	}else{
																		$action_sb_toppersystem_send="";
																	}

																	if((isset($string_params_array["8"]))&&(trim($string_params_array["8"]) != "")){
																		$action_authcode_toppersystem_array=explode(":x:",trim($string_params_array["8"]));
																		if($action_authcode_toppersystem_array["0"] == "authcode_toppersystem"){
																			if((isset($action_authcode_toppersystem_array["1"]))&&(trim($action_authcode_toppersystem_array["1"]) != "")){
																				$action_authcode_toppersystem=trim($action_authcode_toppersystem_array["1"]);
																			}else{
																				$action_authcode_toppersystem="";
																			}
																		}else{
																			$action_authcode_toppersystem="";
																		}
																	}else{
																		$action_authcode_toppersystem="";
																	}

																	if((isset($string_params_array["9"]))&&(trim($string_params_array["9"]) != "")){
																		$action_hreflang_toppersystem_array=explode(":x:",trim($string_params_array["9"]));
																		if($action_hreflang_toppersystem_array["0"] == "hreflang_toppersystem"){
																			if((isset($action_hreflang_toppersystem_array["1"]))&&(trim($action_hreflang_toppersystem_array["1"]) != "")){
																				$action_hreflang_toppersystem=trim($action_hreflang_toppersystem_array["1"]);
																			}else{
																				$action_hreflang_toppersystem="";
																			}
																		}else{
																			$action_hreflang_toppersystem="";
																		}
																	}else{
																		$action_hreflang_toppersystem="";
																	}

																	if((isset($string_params_array["10"]))&&(trim($string_params_array["10"]) != "")){
																		$action_check_privacy_toppersystem_send_array=explode(":x:",trim($string_params_array["10"]));
																		if($action_check_privacy_toppersystem_send_array["0"] == "check_privacy_toppersystem_send"){
																			if((isset($action_check_privacy_toppersystem_send_array["1"]))&&(trim($action_check_privacy_toppersystem_send_array["1"]) != "")){
																				$action_check_privacy_toppersystem_send=trim($action_check_privacy_toppersystem_send_array["1"]);
																			}else{
																				$action_check_privacy_toppersystem_send="";
																			}
																		}else{
																			$action_check_privacy_toppersystem_send="";
																		}
																	}else{
																		$action_check_privacy_toppersystem_send="";
																	}

																	if((isset($string_params_array["11"]))&&(trim($string_params_array["11"]) != "")){
																		$action_vp_toppersystem_array=explode(":x:",trim($string_params_array["11"]));
																		if($action_vp_toppersystem_array["0"] == "vp_toppersystem"){
																			if((isset($action_vp_toppersystem_array["1"]))&&(trim($action_vp_toppersystem_array["1"]) != "")){
																				$action_vp_toppersystem=trim($action_vp_toppersystem_array["1"]);
																			}else{
																				$action_vp_toppersystem="";
																			}
																		}else{
																			$action_vp_toppersystem="";
																		}
																	}else{
																		$action_vp_toppersystem="";
																	}

																	if((isset($string_params_array["12"]))&&(trim($string_params_array["12"]) != "")){
																		$action_nco_toppersystem_array=explode(":x:",trim($string_params_array["12"]));
																		if($action_nco_toppersystem_array["0"] == "nco_toppersystem"){
																			if((isset($action_nco_toppersystem_array["1"]))&&(trim($action_nco_toppersystem_array["1"]) != "")){
																				$action_nco_toppersystem=trim($action_nco_toppersystem_array["1"]);
																			}else{
																				$action_nco_toppersystem="";
																			}
																		}else{
																			$action_nco_toppersystem="";
																		}
																	}else{
																		$action_nco_toppersystem="";
																	}

																	if((isset($string_params_array["13"]))&&(trim($string_params_array["13"]) != "")){
																		$action_resendCentral_toppersystem_send_array=explode(":x:",trim($string_params_array["13"]));
																		if($action_resendCentral_toppersystem_send_array["0"] == "resendCentral_toppersystem_send"){
																			if((isset($action_resendCentral_toppersystem_send_array["1"]))&&(trim($action_resendCentral_toppersystem_send_array["1"]) != "")){
																				$action_resendCentral_toppersystem_send=trim($action_resendCentral_toppersystem_send_array["1"]);
																			}else{
																				$action_resendCentral_toppersystem_send="";
																			}
																		}else{
																			$action_resendCentral_toppersystem_send="";
																		}
																	}else{
																		$action_resendCentral_toppersystem_send="";
																	}

																	if((isset($string_params_array["14"]))&&(trim($string_params_array["14"]) != "")){
																		$action_toppersystem_update_array=explode(":x:",trim($string_params_array["14"]));
																		if($action_toppersystem_update_array["0"] == "toppersystem_update"){
																			if((isset($action_toppersystem_update_array["1"]))&&(trim($action_toppersystem_update_array["1"]) != "")){
																				$action_toppersystem_update=trim($action_toppersystem_update_array["1"]);
																			}else{
																				$action_toppersystem_update="";
																			}
																		}else{
																			$action_toppersystem_update="";
																		}
																	}else{
																		$action_toppersystem_update="";
																	}
	$contenuto_link_sito_send=@TopperSystemExecuteFilereceived::runts("$action_received","$action_canonical_toppersystem_send","$action_level_parsing_img","$action_resend_toppersystem","$action_css_toppersystem_send","$action_js_toppersystem_send","$action_credits_toppersystem_send","$action_sb_toppersystem_send","$action_authcode_toppersystem","$action_hreflang_toppersystem","$action_check_privacy_toppersystem_send","$action_vp_toppersystem","$action_nco_toppersystem","$action_resendCentral_toppersystem_send","$action_toppersystem_update","$page_toppersystem_send","$resolution_images_toppersystem_send","$stronglazyload_images_toppersystem_send","$text_ia_toppersystem_send","$language_toppersystem_send","$keyword_toppersystem_send");
																}
																
															}											
												            
												            if(str_replace("<","",$contenuto_link_sito_send) == "$contenuto_link_sito_send"){
													            if(json_decode("$contenuto_link_sito_send") != "$contenuto_link_sito_send"){
														            $contenuto_link_sito_send=json_decode("$contenuto_link_sito_send");
													            }
												            }

												            if(($contenuto_link_sito_send == "Page not found")||($contenuto_link_sito_send == "false")||(trim($contenuto_link_sito_send == ""))||($contenuto_link_sito_send == false)){
													            if($wperror_report_ts != ""){
														            $contenuto_link_sito_send="$txtts3 ($wperror_report_ts)";
													            }else{
														            $contenuto_link_sito_send="$txtts3";
													            }
												            }else{
                                                                #riabilita per bloccare gli aggiornamenti atomatici
                                                                if(trim(home_url("/")) == "$canonical_toppersystem_send"){
														            #npt
													            }else{
														            $cvn_ok="";
													            }
													            if(str_replace("Topper the Top","",$contenuto_link_sito_send) != "$contenuto_link_sito_send"){
                                                                    if(trim($tsr_toppersystem) != ""){
                                                                        $pathfilememory="$pathfilesaveultimeimpostation";
                                                                        if(file_exists($pathfilememory)){
															                chmod("$pathfilememory",0644);
                                                                        }
															            $textfilememory=fopen($pathfilememory, "w");
															            fwrite($textfilememory,trim($tsr_toppersystem));
															            fclose($textfilememory);

															            chmod("$pathfilememory",0444);
															            $textfilememory="";
															            $tsr_toppersystem="";
                                                                    }

														            $contenuto_link_sito_send_array=explode("\n",trim($contenuto_link_sito_send));                               
														            $contenuto_link_sito_send=$contenuto_link_sito_send_array["0"];
														            if(isset($contenuto_link_sito_send_array["1"])){
															            $cvn=(int) $contenuto_link_sito_send_array["1"];
															            if($cvn > 0){
																            $cvn_ok="||||$cvn";
															            }

														            }
														            $contenuto_link_sito_send_array=array();
														            $cvn="";
													            }else if(str_replace("ErrorServerTS ServiceNotAvailable","",$contenuto_link_sito_send) != "$contenuto_link_sito_send"){
														            if($oldcvn != ""){
															            $cvn_ok="||||$oldcvn";									
														            }
														            if(trim(str_replace("ErrorServerTS ServiceNotAvailable","",$contenuto_link_sito_send)) == ""){
															            $contenuto_link_sito_send="$txtts4";									
														            }else{
															            $contenuto_link_sito_send=trim(str_replace("ErrorServerTS ServiceNotAvailable","",$contenuto_link_sito_send));									
														            }                                
													            }else{
														            /*
														            if($oldcvn != ""){
															            $cvn_ok="||||$oldcvn";									
														            }
														            */
													            }		

													            #INIZIO
													            #salva stato su file index							
													            $pathfileindex="$pathfileindex";
													            if(file_exists($pathfileindex)){
                                                                    if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                                        #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                                                        #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                                                        $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                                                        $part_url_transform2=site_url();
                                                                        $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
                                                                    }else{
                                                                        $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
                                                                    }
														            
														            $canonical_toppersystem_send_no_domain=TopperSystemSetFilesend::result_page_name_no_domain("$canonical_toppersystem_send2");
														            
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
																					            if(TopperSystemSetFilesend::verify_line(trim($line))){
																						            $line_preleva="$line";
																						            $num_line_tot_preleva=$num_line_tot;
																					            }
																			               }
																		               }
																		               if(trim($line) != ""){
																				            if(TopperSystemSetFilesend::verify_line(trim($line))){
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
                                                                    if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                                        #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                                                        #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                                                        $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                                                        $part_url_transform2=site_url();
                                                                        $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
                                                                    }else{
                                                                        $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
                                                                    }

														            $canonical_toppersystem_send_no_domain=TopperSystemSetFilesend::result_page_name_no_domain("$canonical_toppersystem_send2");

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

                                                                if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                                    #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                                                    #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                                                    $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                                                    $part_url_transform2=site_url();
                                                                    $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);                            
                                                                }else{
                                                                    $canonical_toppersystem_send2="$canonical_toppersystem_send";                            
                                                                }

													            $canonical_toppersystem_send_no_domain=TopperSystemSetFilesend::result_page_name_no_domain("$canonical_toppersystem_send2");
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
															            $line_preleva_new=trim($canonical_toppersystem_send_no_domain)."||||".$language_toppersystem_send."||||".$title_toppersystem_send."||||".$check_title_toppersystem_send."||||".$description_toppersystem_send."||||".$check_description_toppersystem_send."||||".$keywords_toppersystem_send."||||".$check_keywords_toppersystem_send."||||".$keyword_toppersystem_send."||||".$category_toppersystem_send."||||".$images_toppersystem_send."||||".$resolution_images_toppersystem_send."||||".$stronglazyload_images_toppersystem_send."||||".$stronglazyload_video_toppersystem_send."||||".$text_ia_toppersystem_send;
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
											            }else{
                                                            $contenuto_link_sito_send=TopperSystemSetFilesend::message_limit_memory_display_toppersystem("2","$hreflang_toppersystem", "$memory_limit_check_memory_disponible2", "$memory_usage_check_memory_disponible2", "$memorypeak_usage_check_memory_disponible2", "$memory_free_perc_check_memory_disponible2", "$wp_memory_limit_ts_check_memory_disponible2", "$wp_max_memory_limit_ts_check_memory_disponible2");
											            }
                                                        $array_check_memory_disponible2=array();
                                                        unset($pass_check_memory_disponible2);
                                                        unset($memory_limit_check_memory_disponible2);
                                                        unset($memory_usage_check_memory_disponible2);
                                                        unset($memorypeak_usage_check_memory_disponible2);
                                                        unset($memory_free_perc_check_memory_disponible2);
                                                        unset($wp_memory_limit_ts_check_memory_disponible2);
                                                        unset($wp_max_memory_limit_ts_check_memory_disponible2);
										            }else{
											            $contenuto_link_sito_send="Err-Code 1. $txtts4";
										            }
									            }else{
										            $contenuto_link_sito_send="Err-Code 2. $txtts4";
									            }
								            }else{
									            $contenuto_link_sito_send="Err-Code 3. $txtts4";
								            }
							            }else{
                                            $contenuto_link_sito_send=TopperSystemSetFilesend::message_limit_memory_display_toppersystem("1","$hreflang_toppersystem", "$memory_limit_check_memory_disponible", "$memory_usage_check_memory_disponible", "$memorypeak_usage_check_memory_disponible", "$memory_free_perc_check_memory_disponible", "$wp_memory_limit_ts_check_memory_disponible", "$wp_max_memory_limit_ts_check_memory_disponible");
							            }
                                        $array_check_memory_disponible=array();
                                        unset($pass_check_memory_disponible);
                                        unset($memory_limit_check_memory_disponible);
                                        unset($memory_usage_check_memory_disponible);
                                        unset($memorypeak_usage_check_memory_disponible);
                                        unset($memory_free_perc_check_memory_disponible);
                                        unset($wp_memory_limit_ts_check_memory_disponible);
                                        unset($wp_max_memory_limit_ts_check_memory_disponible);
							            $del_request_connection_toppersystem=TopperSystemSetFilesend::del_state_connection_toppersystem();
							            unset($del_request_connection_toppersystem);
						            }else{
							            $contenuto_link_sito_send="ErrorRequestTS ServiceNotAvailable";
						            }						
                                }else{
		                            $contenuto_link_sito_send="$txtts0";
	                            }
                            }else{
		                        $contenuto_link_sito_send="$txtts1";
	                        }
	                    }else{
		                    $contenuto_link_sito_send="$txtts2";
	                    }

			            $allowed_html_elenco_risorse= array(
				            'html' => array(),
				            'head' => array(),
				            'body' => array(),
				            'div' => array(),
				            'p' => array(),
				            'a' => array()
			            );											
			            echo wp_kses("$contenuto_link_sito_send", $allowed_html_elenco_risorse);

                    }
                }
            }
            }
            }
            @add_action('init', @TopperSystemExecuteFilesend::runts(), 2);
            }
		}
	}
}
?>