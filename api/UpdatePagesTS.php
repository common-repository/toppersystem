<?php
if(isset($TopperSystemCpermFileinApi)){
	if(!empty($TopperSystemCpermFileinApi)){
		if($TopperSystemCpermFileinApi == "0123"){

            if(isset($_POST["authcode_toppersystem"])) {
            require("safeclass.php");

            class TopperSystemSetFileUpdatePagesTS {
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

                public static function getRandomUserAgent() {
                    srand((double)microtime()*1000000);
                    $someUA = array (
	                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:72.0; toppersystemnet) Gecko/20100101 Firefox/72.0",
	                "Mozilla/5.0 (Windows NT 10.0; Win64; x64; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
	                "Mozilla/5.0 (Windows NT 10.0; WOW64; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
	                "Mozilla/5.0 (Windows NT 10.0; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
	                "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0; toppersystemnet) Gecko/20100101 Firefox/116.0",
	                "Mozilla/5.0 (Macintosh; Intel Mac OS X 13.5; rv:109.0; toppersystemnet) Gecko/20100101 Firefox/116.0",
	                "Mozilla/5.0 (X11; Linux i686; rv:109.0; toppersystemnet) Gecko/20100101 Firefox/116.0",
	                "Mozilla/5.0 (X11; Linux x86_64; rv:109.0; toppersystemnet) Gecko/20100101 Firefox/116.0",
	                "Mozilla/5.0 (Macintosh; Intel Mac OS X 13_5; toppersystemnet) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Safari/605.1.15",
	                "Mozilla/5.0 (Macintosh; Intel Mac OS X 13_5; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/115.0.1901.203",
	                "Mozilla/5.0 (Windows NT 10.0; Win64; x64; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/115.0.1901.203"
                    );
                    return $someUA[rand(0,count($someUA)-1)];
                }

                public static function file_curlts_contents($url){
	                $url=str_replace(" ","%20",$url);
                    $headers_send = [
                        'Expires: Tue, 01 Jan 2000 00:00:00 GMT',
                        'Last-Modified: '.gmdate("D, d M Y H:i:s").' GMT',
                        'Cache-Control: no-store, no-cache, must-revalidate, max-age=0',
                        'Cache-Control:  post-check=0, pre-check=0',
                        'Pragma: no-cache',
                    ];
                    $options_cache = array(		
	                    CURLOPT_RETURNTRANSFER => true,
	                    CURLOPT_HEADER         => false,
	                    CURLOPT_FOLLOWLOCATION => true,
	                    CURLOPT_ENCODING       => "",
		                CURLOPT_USERAGENT      => TopperSystemSetFileUpdatePagesTS::getRandomUserAgent(),
	                    CURLOPT_AUTOREFERER    => true,
                        CURLOPT_CONNECTTIMEOUT => 8,
                        CURLOPT_TIMEOUT        => 8,
                        CURLOPT_MAXREDIRS      => 10,
	                    CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_HTTPHEADER => $headers_send,
	                    CURLOPT_DNS_USE_GLOBAL_CACHE => false
                    );
                    $options = array(		
	                    CURLOPT_RETURNTRANSFER => true,
	                    CURLOPT_HEADER         => false,
	                    CURLOPT_FOLLOWLOCATION => true,
	                    CURLOPT_ENCODING       => "",
		                CURLOPT_USERAGENT      => TopperSystemSetFileUpdatePagesTS::getRandomUserAgent(),
	                    CURLOPT_AUTOREFERER    => true,
                        CURLOPT_CONNECTTIMEOUT => 8,
                        CURLOPT_TIMEOUT        => 8,
                        CURLOPT_MAXREDIRS      => 10,
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
	            
	            public static function get_array_url_html_file_xml_toppersystem($resend_toppersystem,$url,$array_escludi,$url_html) {

                    $headers_send = [
                        'Expires: Tue, 01 Jan 2000 00:00:00 GMT',
                        'Last-Modified: '.gmdate("D, d M Y H:i:s").' GMT',
                        'Cache-Control: no-store, no-cache, must-revalidate, max-age=0',
                        'Cache-Control:  post-check=0, pre-check=0',
                        'Pragma: no-cache',
                    ];
                    $opts_cache = array('http' =>
	                    array(
		                    'timeout' => 8,
                            'user_agent' => TopperSystemSetFileUpdatePagesTS::getRandomUserAgent(),
                            'max_redirects' => 10,
                            'method' => 'GET',
                            'header' => $headers_send
	                    )
                    );
                    $opts = array('http' =>
	                    array(
		                    'timeout' => 8,
                            'user_agent' => TopperSystemSetFileUpdatePagesTS::getRandomUserAgent(),
                            'max_redirects' => 10,
                            'method' => 'GET'
	                    )
                    );

                    if ( ! defined( 'TOPPERSYSTEM_PLUGIN_MOD_REQUEST' ) ) {
                        $contenuto_sitemap_index_array=wp_remote_get( $url, $opts );
                        if ( is_wp_error( $contenuto_sitemap_index_array ) ) {
	                        $wperror_report_ts=$contenuto_sitemap_index_array->get_error_message();
	                        $contenuto_sitemap_index="";
                        }else{
	                        $wperror_report_ts="";
	                        $contenuto_sitemap_index=$contenuto_sitemap_index_array['body'];
                        }

                        if($contenuto_sitemap_index == ""){
		                    $context = stream_context_create($opts);
		                    $contenuto_sitemap_index = @file_get_contents("$url", false, $context);
                        }
                    }else{
                        $contenuto_sitemap_index_array=wp_remote_get( $url, $opts );
                        if ( is_wp_error( $contenuto_sitemap_index_array ) ) {
	                        $wperror_report_ts=$contenuto_sitemap_index_array->get_error_message();
	                        $contenuto_sitemap_index="";
                        }else{
	                        $wperror_report_ts="";
	                        $contenuto_sitemap_index=$contenuto_sitemap_index_array['body'];
                        }

                        if($contenuto_sitemap_index == ""){
		                    $contenuto_sitemap_index=@TopperSystemSetFileUpdatePagesTS::file_curlts_contents($url);
                        }                        
                    }
		            if(($contenuto_sitemap_index == "Page not found")||($contenuto_sitemap_index == "false")||(trim($contenuto_sitemap_index == ""))||($contenuto_sitemap_index == false)){
			            $return="";
		            }else{
						$contenuto_sitemap_index=str_replace("<loc>","\n<loc>",$contenuto_sitemap_index);
						$contenuto_sitemap_index=str_replace("</loc>","</loc>\n",$contenuto_sitemap_index);
			            $array_file=explode("\n",$contenuto_sitemap_index);

			            for($i=0;$i<=count($array_file);$i++){
				            if((isset($array_file["$i"]))&&(trim($array_file["$i"]) != "")){
                                $riga=trim($array_file["$i"]);		
                                $url=trim(TopperSystemSetFileUpdatePagesTS::extractstringa_toppersystem($riga, '<loc>', '</loc>'));
                                if(trim($url) != ""){
	                                if(str_replace("$resend_toppersystem","",$url) != "$url"){
		                                
		                                if(str_replace($array_escludi,"",$url) == "$url"){
			                                
			                                if(str_replace(".xml","",$url) != "$url"){
				                                #niente
			                                }else{
				                                if(!in_array(trim($url), $url_html)){			
                                                    array_push($url_html,trim("$url"));
				                                }			
			                                }	
		                                }
	                                }	
                                }		
                                $riga="";
                                $url="";
				            }
			            }
			            $array_file=array();	
		            }
		            $contenuto_sitemap_index="";

		            return $url_html;
	            }

	            public static function get_url_sitemap_toppersystem($resend_toppersystem) {
		            $return="";

                    $headers_send = [
                        'Expires: Tue, 01 Jan 2000 00:00:00 GMT',
                        'Last-Modified: '.gmdate("D, d M Y H:i:s").' GMT',
                        'Cache-Control: no-store, no-cache, must-revalidate, max-age=0',
                        'Cache-Control:  post-check=0, pre-check=0',
                        'Pragma: no-cache',
                    ];
                    $opts_cache = array('http' =>
	                    array(
		                    'timeout' => 8,
                            'user_agent' => TopperSystemSetFileUpdatePagesTS::getRandomUserAgent(),
                            'max_redirects' => 10,
                            'method' => 'GET',
                            'header' => $headers_send
	                    )
                    );
                    $opts = array('http' =>
	                    array(
		                    'timeout' => 8,
                            'user_agent' => TopperSystemSetFileUpdatePagesTS::getRandomUserAgent(),
                            'max_redirects' => 10,
                            'method' => 'GET'
	                    )
                    );

                    if ( ! defined( 'TOPPERSYSTEM_PLUGIN_MOD_REQUEST' ) ) {
                        $contenuto_sitemap_index_array=wp_remote_get( $resend_toppersystem."/sitemap.xml", $opts );
                        if ( is_wp_error( $contenuto_sitemap_index_array ) ) {
	                        $wperror_report_ts=$contenuto_sitemap_index_array->get_error_message();
	                        $contenuto_sitemap_index="";
                        }else{
	                        $wperror_report_ts="";
	                        $contenuto_sitemap_index=$contenuto_sitemap_index_array['body'];
                        }

                        if($contenuto_sitemap_index == ""){
		                    $context = stream_context_create($opts);
		                    $contenuto_sitemap_index = @file_get_contents($resend_toppersystem."/sitemap.xml", false, $context);
                        }

                    }else{
                        $contenuto_sitemap_index_array=wp_remote_get( $resend_toppersystem."/sitemap.xml", $opts );
                        if ( is_wp_error( $contenuto_sitemap_index_array ) ) {
	                        $wperror_report_ts=$contenuto_sitemap_index_array->get_error_message();
	                        $contenuto_sitemap_index="";
                        }else{
	                        $wperror_report_ts="";
	                        $contenuto_sitemap_index=$contenuto_sitemap_index_array['body'];
                        }

                        if($contenuto_sitemap_index == ""){
		                    $contenuto_sitemap_index=@TopperSystemSetFileUpdatePagesTS::file_curlts_contents($resend_toppersystem."/sitemap.xml");
                        }                        
                    }
		            if(($contenuto_sitemap_index == "Page not found")||($contenuto_sitemap_index == "false")||(trim($contenuto_sitemap_index == ""))||($contenuto_sitemap_index == false)){
			            $return="";
		            }else{
			            $array_escludi=array("carrello","sitemap.html","wishlist","checkout","cart","account","admin");
			            $url_xml = array('url_xml' => null);
			            $n_url_xml=0;
			            $url_html = array('url_html' => null);
			            $n_url_html=0;
						$contenuto_sitemap_index=str_replace("<loc>","\n<loc>",$contenuto_sitemap_index);
						$contenuto_sitemap_index=str_replace("</loc>","</loc>\n",$contenuto_sitemap_index);						
			            $array_file=explode("\n",$contenuto_sitemap_index);

			            for($i=0;$i<=count($array_file);$i++){
				            if((isset($array_file["$i"]))&&(trim($array_file["$i"]) != "")){
                                $riga=trim($array_file["$i"]);		
                                $url=trim(TopperSystemSetFileUpdatePagesTS::extractstringa_toppersystem($riga, '<loc>', '</loc>'));
                                if(trim($url) != ""){
	                                if(str_replace("$resend_toppersystem","",$url) != "$url"){
		                                if(str_replace($array_escludi,"",$url) == "$url"){
			                                
			                                if(str_replace(".xml","",$url) != "$url"){
				                                if(!in_array(trim($url), $url_xml)){
                                                    array_push($url_xml,trim("$url"));
                                                    $n_url_xml++;
				                                }
			                                }else{
				                                if(!in_array(trim($url), $url_html)){
                                                    array_push($url_html,trim("$url"));
                                                    $n_url_html++;
				                                }
			                                }	
		                                }
	                                }	
                                }		
                                $riga="";
                                $url="";
				            }
			            }
			            $array_file=array();
			            
			            if($n_url_xml >= 1){
				            for($i=0;$i<=count($url_xml);$i++){
                                if((isset($url_xml["$i"]))&&(trim($url_xml["$i"]) != "")){
	                                $url=trim($url_xml["$i"]);
	                                if(str_replace("$resend_toppersystem","",$url) != "$url"){
		                                $url_html=TopperSystemSetFileUpdatePagesTS::get_array_url_html_file_xml_toppersystem("$resend_toppersystem","$url",$array_escludi,$url_html);
	                                }
	                                $url="";
                                }
				            }
			            }

			            $url_html_ok = array('url_html_ok' => null);
			            $n_array_results_text_unique=0;
			            $array_results_text_unique=array_unique($url_html);
			            foreach($array_results_text_unique as $strItem){
				            $url_ok=$strItem;
				            if($url_ok != ""){
                                if(str_replace("$resend_toppersystem","",$url_ok) != "$url_ok"){
	                                $url_html_ok[$n_array_results_text_unique]="$url_ok";
	                                $n_array_results_text_unique++;
                                }
				            }
			            }
			            
			            if($n_array_results_text_unique >= "1"){
				            $return=$url_html_ok;
			            }else{
				            $return="";
			            }
		            }
		            return $return;
	            }
            }

					            
            class TopperSystemExecuteFileUpdatePagesTS {
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
			            
	                    if((isset($_POST["pages_menu_toppersystem"]) && trim($_POST["pages_menu_toppersystem"]) != "")) {
		                    $pages_menu_toppersystem=wp_check_invalid_utf8(stripslashes(trim(TopperSystemSafeNOSQL::sanitizeNosqlUTF($_POST['pages_menu_toppersystem']))));
				            
	                    }else{
		                    $pages_menu_toppersystem="";
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
			               $txtts3="Nessuna pagina è stata aggiunta alla lista";
                        }else if($hreflang_toppersystem == "ar"){ 
		                   $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
                           $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
                           $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			               $txtts3="لم يتم إضافة صفحات إلى القائمة";
                        }else if($hreflang_toppersystem == "de"){ 
		                   $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
                           $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
                           $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			               $txtts3="Der Liste wurden keine Seiten hinzugefügt";
                        }else if($hreflang_toppersystem == "es"){ 
		                   $txtts0="Verifique los permisos para usar el Topper System SEO"; 
                           $txtts1="Verifique los permisos para usar el Topper System SEO";
                           $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			               $txtts3="No se han agregado páginas a la lista";
                        }else if($hreflang_toppersystem == "fr"){ 
		                   $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
                           $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
                           $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			               $txtts3="Aucune page n'a été ajoutée à la liste";
                        }else if($hreflang_toppersystem == "hi"){ 
		                   $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
                           $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
                           $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			               $txtts3="सूची में कोई पृष्ठ नहीं जोड़े गए हैं";
                        }else if($hreflang_toppersystem == "ja"){ 
		                   $txtts0="使用する権限を確認してください Topper System SEO"; 
                           $txtts1="使用する権限を確認してください Topper System SEO";
                           $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			               $txtts3="リストにページが追加されていません";
                        }else if($hreflang_toppersystem == "pl"){ 
		                   $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
                           $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
                           $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			               $txtts3="Żadne strony nie zostały dodane do listy";
                        }else if($hreflang_toppersystem == "pt"){ 
		                   $txtts0="Verifique as permissões para usar o Topper System SEO"; 
                           $txtts1="Verifique as permissões para usar o Topper System SEO";
                           $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			               $txtts3="Nenhuma página foi adicionada à lista";
                        }else if($hreflang_toppersystem == "ru"){ 
		                   $txtts0="Проверьте разрешения на использование Topper System SEO"; 
                           $txtts1="Проверьте разрешения на использование Topper System SEO";
                           $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			               $txtts3="В список не добавлено ни одной страницы";
                        }else if($hreflang_toppersystem == "zh"){ 
		                   $txtts0="检查使用权限 Topper System SEO"; 
                           $txtts1="检查使用权限 Topper System SEO";
                           $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			               $txtts3="没有页面被添加到列表中";
                        }else if($hreflang_toppersystem == "he"){ 
		                   $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
                           $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
                           $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			               $txtts3="לא נוספו עמודים לרשימה";
                        }else if($hreflang_toppersystem == "la"){ 
		                   $txtts0="Reprehendo permissions ut Topper System SEO"; 
                           $txtts1="Reprehendo permissions ut Topper System SEO";
                           $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			               $txtts3="Paginae quae non additum est a album";
                        }else{   
		                   $txtts0="Check the permissions to use the Topper System SEO"; 
                           $txtts1="Check the permissions to use the Topper System SEO";
                           $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			               $txtts3="No pages have been added to the list";
                        }

                        $contenuto_link_sito_send="";

	                    if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(trim($pages_menu_toppersystem) != "")){

                            $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                            if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                                $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                                if(($authcode_toppersystem_verifica == "$auth_memory")){
						            
						            $array_elenco_pagine_wp=TopperSystemSetFileUpdatePagesTS::get_url_sitemap_toppersystem("$resend_toppersystem");	

						            if($array_elenco_pagine_wp == ""){
							            $contenuto_link_sito_send="$txtts3";
						            }else{
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

							            $elenco_pagine_wp="";
							            $nidpgts=(int) trim(TopperSystemSetFileUpdatePagesTS::extractstringa_toppersystem(trim($pages_menu_toppersystem), '<input id="nmaxcanonical_toppersystem" name="nmaxcanonical_toppersystem" type="hidden" value="', '">'));
							            $nidpgts_original=$nidpgts;
							            for($x=0;$x<=count($array_elenco_pagine_wp);$x++){
								            if((isset($array_elenco_pagine_wp["$x"]))&&(trim($array_elenco_pagine_wp["$x"]) != "")){
									            if(str_replace("$resend_toppersystem","",trim($array_elenco_pagine_wp["$x"])) != trim($array_elenco_pagine_wp["$x"])){
										            if(str_replace("\"".trim($array_elenco_pagine_wp["$x"])."\"","",trim($pages_menu_toppersystem)) == trim($pages_menu_toppersystem)){
                                                        if(str_replace($exclusion_pages_list_toppersystem,"",$array_elenco_pagine_wp["$x"]) == $array_elenco_pagine_wp["$x"]){
											                $authcode_toppersystem=$auth_memory.md5($array_elenco_pagine_wp["$x"]);
											                $elenco_pagine_wp.="<input id=\"canonical_toppersystem".$nidpgts."\" name=\"canonical_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($array_elenco_pagine_wp["$x"])."\">";
											                $elenco_pagine_wp.="<input id=\"authcode_toppersystem".$nidpgts."\" name=\"authcode_toppersystem".$nidpgts."\" type=\"hidden\" value=\"".trim($authcode_toppersystem)."\">";
											                
											                $nidpgts++;
											                $authcode_toppersystem="";
                                                        }
										            }
									            }									
									            $array_elenco_pagine_wp["$x"]="";
								            }
							            }
							            $array_elenco_pagine_wp=array();
							            if($nidpgts == "$nidpgts_original"){
								            $contenuto_link_sito_send="$txtts3";
							            }else{
								            $new_pages_menu_toppersystem=str_replace("<input id=\"nmaxcanonical_toppersystem\" name=\"nmaxcanonical_toppersystem\" type=\"hidden\" value=\"$nidpgts_original\">","<input id=\"nmaxcanonical_toppersystem\" name=\"nmaxcanonical_toppersystem\" type=\"hidden\" value=\"$nidpgts\">",$pages_menu_toppersystem);
								            
								            $contenuto_link_sito_send="$elenco_pagine_wp$new_pages_menu_toppersystem";
							            }
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
			            echo wp_kses("$contenuto_link_sito_send", $allowed_html_elenco_pagine_wp);
                    }
                }
            }
            }
            }
            if(( current_user_can( 'administrator' ) )){
            @add_action('init', @TopperSystemExecuteFileUpdatePagesTS::runts(), 2);
            }
            }
		}
	}
}
?>