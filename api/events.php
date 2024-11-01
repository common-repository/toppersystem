<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileevents {
    public static function result_domain_name($url){
        $url=str_replace("://","[TsostituisciS]",$url);
        $url=explode("/",$url)["0"];
        $url=explode("?",$url)["0"];
        $url=explode("#",$url)["0"];
        $url=str_replace("[TsostituisciS]","://",$url);    
        return $url;
    }

    public static function result_page_name_no_domain($url){
        $url=str_replace(TopperSystemSetFileevents::result_domain_name($url),"",$url);
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
						    TopperSystemSetFileevents::leggiDir ($list, $fullname);
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
		    
		    TopperSystemSetFileevents::leggiDir ($lista_path, $directory);

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


    public static function ectract_data_file($n_file_received,$cat_file,$list_data_all){
        $line_preleva="";
        if($n_file_received != ""){
            if($cat_file != ""){
                if($n_file_received >= 1){
                    $pathdirlog=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log";

                    for($i=0;$i<=$n_file_received;$i++){
                        if($i == "0"){
                            $nfile="";        
                        }else{
                            $nfile="$i";
                        }          
                        $pathfileindex="$pathdirlog/$cat_file$nfile.txt";
                        if(file_exists($pathfileindex)){

                        $pathfilecontents=file_get_contents("$pathfileindex");
                        if($pathfilecontents != ""){
	                        $nstblok=count(explode("\n",$pathfilecontents));
	                        $block=$nstblok*4000;
                        }else{
	                        $block=32*32;
                        }
                        $pathfilecontents="";
                        $nstblok="";
                        $fh="";
                        $num_line_tot=0;
                        if ($fh = fopen("$pathfileindex", "r")) { 
                            $left='';
                            while (!feof($fh)) {// read the file
                                $temp = fread($fh, $block);
                                if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                    $part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
                                    $part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
                                    $temp=str_replace("$part_url_transform1","$part_url_transform2",$temp);                            
                                }
                                $fgetslines = explode("\n",$temp);
                                $fgetslines[0]=$left.$fgetslines[0];
                                if(!feof($fh) )$left = array_pop($lines);           
                                    foreach ($fgetslines as $k => $line) {
                                        if(trim($line) != ""){
                                            if(isset(explode("||||",$line)["1"])){ 
                                                if(explode("||||",$line)["1"] != ""){
                                                    $line_preleva=explode("||||",$line)["1"]."||||".explode("||||",$line)["0"]."||||$cat_file";
                                                    array_push ($list_data_all, $line_preleva);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            fclose($fh);

                            $fh="";
                        }

                    }

                }

            }
        }
        return $list_data_all;
    }

    public static function verify_date($data){
        $return="";
        if(trim($data) != ""){
            $data_array=explode("-",trim($data));
            if((isset($data_array["0"]))&&(isset($data_array["1"]))&&(isset($data_array["2"]))){
                if((strlen(trim($data_array["0"])) == "4")&&(strlen(trim($data_array["1"])) == "2")&&(strlen(trim($data_array["2"])) == "2")){    
                    $return="ok";
                }
            }
            $data_array=array();
            $data="";
        }
        return $return;
    }

    public static function verify_time($data){
        $return="";
        if(trim($data) != ""){
            $data_array=explode(":",trim($data));
            if((isset($data_array["0"]))&&(isset($data_array["1"]))&&(isset($data_array["2"]))){
                if((strlen(trim($data_array["0"])) == "2")&&(strlen(trim($data_array["1"])) == "2")&&(strlen(trim($data_array["2"])) == "2")){    
                    $return="ok";
                }
            }
            $data_array=array();
            $data="";
        }
        return $return;
    }

    public static function renderhtml($data_ok){
        $return="";
        if(trim($data_ok) != ""){
            $array_data_ok=explode("||||",trim($data_ok));
            if((isset($array_data_ok["1"]))&&(isset($array_data_ok["2"]))){

                $status=trim($array_data_ok["2"]);
                if($status == "ReceivedToppersystem"){
                    $status_ok="<span class=\"green_ts\">&check;</span>";
                }else if($status == "DeleteToppersystem"){
                    $status_ok="<span class=\"red_ts\">&cross;</span>";
                }else{
                    $status_ok="";
                }
                if($status_ok != ""){
                    $page_ok=$array_data_ok["1"];
                    $array_campo_data=explode(" ",$array_data_ok["0"]);
                    if((isset($array_campo_data["0"]))&&(isset($array_campo_data["1"]))){
                        $campo_data_ok=trim($array_campo_data["0"]);    
                        $campo_ora_ok=trim($array_campo_data["1"]); 
                        if((TopperSystemSetFileevents::verify_date("$campo_data_ok") == "ok")&&(TopperSystemSetFileevents::verify_time("$campo_ora_ok") == "ok")){
                            $return="<tr><td class=\"eventstd_ts wxdtha\">$campo_data_ok</td><td class=\"eventstd_ts wxdthb\">$campo_ora_ok</td><td class=\"eventstd_ts wxdthc\">".TopperSystemSetMainFunction::toppersystem_cleanup_min_and_decode_url($page_ok)."</td><td class=\"eventstd_ts wxdthd\">$status_ok</td></tr>"; 
                        }          
                    }
                }
            
            }
        }
        return $return;
    }
}
		
class TopperSystemExecuteFileevents {
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

	        if((isset($_POST["hreflang_toppersystem"]) && trim($_POST["hreflang_toppersystem"]) != "")) {
		        $hreflang_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['hreflang_toppersystem'])), array());	
	        }else{
		        $hreflang_toppersystem="en";
	        }
            if($hreflang_toppersystem == "it"){    
		       $txtts0="Verifica le autorizzazioni per utilizzare Topper System SEO"; 
               $txtts1="Verifica le autorizzazioni per utilizzare Topper System SEO";
               $txtts2="Qualcosa è andato storto. Assicurati di aver copilato correttamente il form e riprova.";
               $txtts3="Nessun dato disponibile";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
               $txtts3="لا تتوافر بيانات";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
               $txtts3="Keine Daten verfügbar";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
               $txtts3="Datos no disponibles";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
               $txtts3="Pas de données disponibles";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
               $txtts3="कोई डेटा मौजूद नहीं";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
               $txtts3="データなし";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
               $txtts3="Brak dostępnych danych";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
               $txtts3="Nenhum dado disponível";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
               $txtts3="Данные недоступны";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
               $txtts3="无可用数据";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
               $txtts3="אין נתונים זמינים";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
               $txtts3="Nulla notitia available";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
               $txtts3="No data available";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
					
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){ 
                        $pathdirlog=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log";

                        $list_data_all=array('list_data_all' => null);
                        $n_file_received=count(TopperSystemSetFileevents::verifica_esistenza_file_nelle_directory("ReceivedToppersystem","$pathdirlog")) - 1;
                        $list_data_all1=TopperSystemSetFileevents::ectract_data_file($n_file_received,"ReceivedToppersystem",$list_data_all);
                        
                        $n_file_delete=count(TopperSystemSetFileevents::verifica_esistenza_file_nelle_directory("DeleteToppersystem","$pathdirlog")) - 1;
                        $list_data_all2=TopperSystemSetFileevents::ectract_data_file($n_file_delete,"DeleteToppersystem",$list_data_all1);


                        $canonical_toppersystem_send_no_domain=TopperSystemSetFileevents::result_page_name_no_domain("$canonical_toppersystem_send");

                        $line_preleva="";
                        $line_preleva2="";
                        array_multisort($list_data_all2, SORT_DESC, SORT_STRING, $list_data_all2);
		                foreach ($list_data_all2 as $data_ok)
		                {
                            if($data_ok != ""){
			                    $line_preleva.=TopperSystemSetFileevents::renderhtml($data_ok);
                                if(trim(explode("||||",$data_ok)["1"]) == "$canonical_toppersystem_send_no_domain"){
                                    $line_preleva2.=TopperSystemSetFileevents::renderhtml($data_ok);
                                }
                                
                            }
		                }

                        if(trim($line_preleva) == ""){
                            $line_preleva="<tr><td class=\"eventstdnodata_ts wxdthe\">$txtts3</td></tr>";
                        }

                        if(trim($line_preleva2) == ""){
                            $line_preleva2="<tr><td class=\"eventstdnodata_ts wxdthe\">$txtts3</td></tr>";
                        }
                        
                        $box_general="<div id=\"box_general_request_events_toppersystem\" class=\"display_none_ts\"><table class=\"eventstables_ts margin0\">$line_preleva</table></div>";
                        $box_page="<div id=\"box_page_request_events_toppersystem\"><table class=\"eventstables_ts margin0\">$line_preleva2</table></div>";
                        
                        $contenuto_link_sito_send="$box_page$box_general";

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
				'div' => array(
					'id' => array(),
					'class' => array()
				),
				'table' => array(
					'id' => array(),
					'class' => array()
				),
				'tr' => array(
					'id' => array(),
					'class' => array()
				),
				'td' => array(
					'id' => array(),
					'class' => array()
				),
				'span' => array(
					'id' => array(),
					'class' => array()
				),
				'p' => array(),
				'a' => array()
			);											
			echo wp_kses("$contenuto_link_sito_send", $allowed_html_elenco_risorse);

        }
    }
}
}
}
if(( current_user_can( 'administrator' ) )){
@add_action('init', @TopperSystemExecuteFileevents::runts(), 2);
}
}

}
}
}
?>