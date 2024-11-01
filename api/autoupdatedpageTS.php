<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

require("safeclass.php");

class TopperSystemSetFileautoupdatepagets {
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

    public static function file_curlts_contents($url,$resend_toppersystem,$resendCentraltoppersystem,$language_toppersystem_send,$language_toppersystem,$keyword_toppersystem_send){

        $fields = array(
            "action" => "componentstoppersystem31ajax",
            "canonical_toppersystem_send" => $url,
            "language_toppersystem_send" => $language_toppersystem_send,
            "title_toppersystem_send" => "",
            "check_title_toppersystem_send" => "true",
            "description_toppersystem_send" => "",
            "check_description_toppersystem_send" => "true",
            "keywords_toppersystem_send" => "",
            "check_keywords_toppersystem_send" => "true",
            "keyword_toppersystem_send" => trim($keyword_toppersystem_send),
            "category_toppersystem_send" => "",
            "authcode_toppersystem" => TopperSystemAuthTS::AuthTopperSystem()."".md5($url),
            "images_toppersystem_send" => "1",
            "resolution_images_toppersystem_send" => "76",
            "stronglazyload_images_toppersystem_send" => "0",
            "stronglazyload_video_toppersystem_send" => "1",
            "text_ia_toppersystem_send" => "0",
            "destination_toppersystem" => "/api/rec_toppersystem_v19.php",
            "resend_toppersystem" => $resend_toppersystem,
            "hreflang_toppersystem" => $language_toppersystem,
            "check_privacy_toppersystem_send" => "true",
            "check_norescrive_toppersystem" => "true",
            "sbm_toppersystem_send" => md5(TopperSystemAuthTS::AuthTopperSystem()),
            "reqcentral_toppersystem_send" => trim($resendCentraltoppersystem),
            "toppersystem_update" => true
        );

        $headers_send = [
            'Access-Control-Allow-Origin: *',
            'Access-Control-Allow-Methods: POST, GET, OPTIONS,',
            'Access-Control-Allow-Headers: Content-Type',
        ];

        $options = array(		
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST 		   => true,
            CURLOPT_POSTFIELDS     => $fields,
            CURLOPT_HEADER         => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING       => "",
	        CURLOPT_USERAGENT      => TopperSystemSetFileautoupdatepagets::getRandomUserAgent(),
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 16,
            CURLOPT_TIMEOUT        => 16,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => $headers_send,
            CURLOPT_DNS_USE_GLOBAL_CACHE => false
        );

        $ch= curl_init( admin_url( 'admin-ajax.php' ) );
        curl_setopt_array( $ch, $options );
        if(curl_errno($ch)){
            $content = "";
        }else{
            $content = curl_exec( $ch );
        }    
        curl_close( $ch );
        return "$content";
    }

    public static function get_sendfile_toppersystem($url,$resend_toppersystem,$resendCentraltoppersystem,$language_toppersystem_send,$language_toppersystem,$keyword_toppersystem_send) {

        $headers_send_wp = [
            'Access-Control-Allow-Origin: *',
            'Access-Control-Allow-Methods: POST, GET, OPTIONS,',
            'Access-Control-Allow-Headers: Content-Type',
        ];

        $postdata_new = array(
            "action" => "componentstoppersystem31ajax",
            "canonical_toppersystem_send" => $url,
            "language_toppersystem_send" => $language_toppersystem_send,
            "title_toppersystem_send" => "",
            "check_title_toppersystem_send" => "true",
            "description_toppersystem_send" => "",
            "check_description_toppersystem_send" => "true",
            "keywords_toppersystem_send" => "",
            "check_keywords_toppersystem_send" => "true",
            "keyword_toppersystem_send" => trim($keyword_toppersystem_send),
            "category_toppersystem_send" => "",
            "authcode_toppersystem" => TopperSystemAuthTS::AuthTopperSystem()."".md5($url),
            "images_toppersystem_send" => "1",
            "resolution_images_toppersystem_send" => "76",
            "stronglazyload_images_toppersystem_send" => "0",
            "stronglazyload_video_toppersystem_send" => "1",
            "text_ia_toppersystem_send" => "0",
            "destination_toppersystem" => "/api/rec_toppersystem_v19.php",
            "resend_toppersystem" => $resend_toppersystem,
            "hreflang_toppersystem" => $language_toppersystem,
            "check_privacy_toppersystem_send" => "true",
            "check_norescrive_toppersystem" => "true",
            "sbm_toppersystem_send" => md5(TopperSystemAuthTS::AuthTopperSystem()),
            "reqcentral_toppersystem_send" => trim($resendCentraltoppersystem),
            "toppersystem_update" => true
        );
        $argarr = array(
	        'timeout'     => 16,
	        'redirection' => 0,
	        'user-agent'  => TopperSystemSetFileautoupdatepagets::getRandomUserAgent(),
	        'httpversion' => '1.0',
	        'blocking'    => true,
	        'headers'     => $headers_send_wp,
	        'body'        => $postdata_new,
	        'cookies'     => array(),
	        'sslverify'   => false
        );

        if ( ! defined( 'TOPPERSYSTEM_PLUGIN_MOD_REQUEST' ) ) {

            $contenuto_link_sito_send = wp_remote_post(admin_url( 'admin-ajax.php' ), $argarr);

            if ( is_wp_error( $contenuto_link_sito_send ) ) {
                $wperror_report_ts=$contenuto_link_sito_send->get_error_message();
                $contenuto_link_sito_send="";
            }else{
                $wperror_report_ts="";
                $contenuto_link_sito_send=$contenuto_link_sito_send['body'];
            }

            if($contenuto_link_sito_send == ""){

                $postdata = http_build_query(
	                array(
                        "action" => "componentstoppersystem31ajax",
                        "canonical_toppersystem_send" => $url,
                        "language_toppersystem_send" => $language_toppersystem_send,
                        "title_toppersystem_send" => "",
                        "check_title_toppersystem_send" => "true",
                        "description_toppersystem_send" => "",
                        "check_description_toppersystem_send" => "true",
                        "keywords_toppersystem_send" => "",
                        "check_keywords_toppersystem_send" => "true",
                        "keyword_toppersystem_send" => trim($keyword_toppersystem_send),
                        "category_toppersystem_send" => "",
                        "authcode_toppersystem" => TopperSystemAuthTS::AuthTopperSystem()."".md5($url),
                        "images_toppersystem_send" => "1",
                        "resolution_images_toppersystem_send" => "76",
                        "stronglazyload_images_toppersystem_send" => "0",
                        "stronglazyload_video_toppersystem_send" => "0",
                        "text_ia_toppersystem_send" => "0",
                        "destination_toppersystem" => "/api/rec_toppersystem_v19.php",
                        "resend_toppersystem" => $resend_toppersystem,
                        "hreflang_toppersystem" => $language_toppersystem,
                        "check_privacy_toppersystem_send" => "true",
                        "check_norescrive_toppersystem" => "true",
                        "sbm_toppersystem_send" => md5(TopperSystemAuthTS::AuthTopperSystem()),
                        "reqcentral_toppersystem_send" => trim($resendCentraltoppersystem),
                        "toppersystem_update" => true
	                )
                );

                $headers_send = [
                    'Access-Control-Allow-Origin: *',
                    'Access-Control-Allow-Methods: POST, GET, OPTIONS,',
                    'Access-Control-Allow-Headers: Content-Type',
                ];
                $opts = array('http' =>
                    array(
                        'timeout' => 16,
                        'user_agent' => TopperSystemSetFileautoupdatepagets::getRandomUserAgent(),
                        'max_redirects' => 10,
                        'method'  => 'POST',
                        'header' => $headers_send,
                        'content' => $postdata
                    )
                );

                $context = stream_context_create($opts);
                $contenuto_link_sito_send = @file_get_contents(admin_url( 'admin-ajax.php' ), false, $context);
            }
        }else{
            $contenuto_link_sito_send = wp_remote_post(admin_url( 'admin-ajax.php' ), $argarr);

            if ( is_wp_error( $contenuto_link_sito_send ) ) {
                $wperror_report_ts=$contenuto_link_sito_send->get_error_message();
                $contenuto_link_sito_send="";
            }else{
                $wperror_report_ts="";
                $contenuto_link_sito_send=$contenuto_link_sito_send['body'];
            }

            if($contenuto_link_sito_send == ""){
                $contenuto_link_sito_send=@TopperSystemSetFileautoupdatepagets::file_curlts_contents($url,$resend_toppersystem,$resendCentraltoppersystem,$language_toppersystem_send,$language_toppersystem,$keyword_toppersystem_send);
            }    
        }

	    return "$contenuto_link_sito_send";
    }
}

class TopperSystemExecuteFileautoupdatepagets {
public static function runts(){
$pass="";
if(isset($_SERVER["HTTP_REFERER"])){
    $paginaprovenienzats=$_SERVER["HTTP_REFERER"];
}else{
    if((isset($_POST["sbm_toppersystem_send"]))&&(trim($_POST["sbm_toppersystem_send"]) == md5(TopperSystemAuthTS::AuthTopperSystem()))){
        $pass="ok";
    }
    $paginaprovenienzats="";
}
$paginaprovenienzats_controllo=str_replace($_SERVER['SERVER_NAME'],"",$paginaprovenienzats);
if(($paginaprovenienzats != "$paginaprovenienzats_controllo")||($pass == "ok")){
    if((isset($_SERVER["REMOTE_ADDR"]))&&(trim($_SERVER["REMOTE_ADDR"]) != "")){
		if((isset($_SERVER["HTTP_USER_AGENT"]))&&(trim($_SERVER["HTTP_USER_AGENT"]) != "")){

	        if((isset($_POST["aursseddts"]) && trim($_POST["aursseddts"]) != "")) {
		        $resendCentraltoppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['aursseddts'])), array());	
	        }else{
		        $resendCentraltoppersystem="";
	        }

	        if((isset($_POST["auurlts"]) && trim($_POST["auurlts"]) != "")) {
		        $url=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['auurlts'])), array());	
	        }else{
		        $url="";
	        }

	        if((isset($_POST["aursdts"]) && trim($_POST["aursdts"]) != "")) {
		        $resend_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['aursdts'])), array());	
	        }else{
		        $resend_toppersystem="";
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
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
            }

            $contenuto_link_sito_send="";

	        if((trim($url) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                if(($auth_memory != "")){

                    $go="ok";
                    $pathfileprocessing=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/processing.txt";
                    if($go == "ok"){
                        $stop="";
                        for($i=0;$i<=1;$i++){
                            if($stop == ""){
                                if(!file_exists($pathfileprocessing)){
                                    $language_toppersystem_send=str_replace("_","-",get_locale());
                                    $language_toppersystem=explode("-",$language_toppersystem_send)["0"];
                                    $keyword_toppersystem_send=get_bloginfo( 'name' );
$get_sendfile_toppersystem=@TopperSystemSetFileautoupdatepagets::get_sendfile_toppersystem("$url","$resend_toppersystem","$resendCentraltoppersystem","$language_toppersystem_send","$language_toppersystem","$keyword_toppersystem_send");
                                    if(str_replace("Topper the Top","",$get_sendfile_toppersystem) != "$get_sendfile_toppersystem"){            
                                        $contenuto_link_sito_send="ok";
                                        $stop="stop";
                                    }else{
                                        $contenuto_link_sito_send="no";
                                    }                                    
                                }
                                clearstatcache();
                            }
                        }                   
                        
                    }else{
                        $contenuto_link_sito_send="no";
                    }                                                          

                }else{
                    $contenuto_link_sito_send="$txtts1";
                }
            }else{
                $contenuto_link_sito_send="$txtts3";
            }

            echo wp_kses("$contenuto_link_sito_send", array());
        }
    }
}
}
}
if ( 0 == wp_get_current_user()->ID ) {
@add_action('init', @TopperSystemExecuteFileautoupdatepagets::runts(), 2);
}
}

}
}
?>