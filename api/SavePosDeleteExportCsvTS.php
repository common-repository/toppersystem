<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFunctionDeleteExportCsvts {
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
						    TopperSystemSetFunctionDeleteExportCsvts::leggiDir ($list, $fullname);
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

    public static function extract_file_nelle_directory($directory){	    
	    $conta_occorrenze=0;	    
		$lista_trovati = array('lista_trovati' => null);
		$lista_path = array('lista_path' => null);		    
		TopperSystemSetFunctionDeleteExportCsvts::leggiDir ($lista_path, $directory);
		foreach ($lista_path as $path)
		{
            if(file_exists($path)){			    
			    $lista_trovati[$conta_occorrenze]=$path;
			    $conta_occorrenze++;		    			
            }
            $path="";
		}	    
	    if($conta_occorrenze == "0"){
		    $return=0;
	    }else{
		    $return=$lista_trovati;
	    }
	    $directory="";
	    $conta_occorrenze="";
	    if(is_array($lista_trovati)){$lista_trovati = array();}
	    if(is_array($lista_path)){$lista_path = array();}
	    return $return;
    }

}

class TopperSystemExecuteFileSavePosDeleteExportCsvts {
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

	        if((isset($_POST["name_fileexport_csv_toppersystem"]) && trim($_POST["name_fileexport_csv_toppersystem"]) != "")) {
		        $name_fileexport_csv_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['name_fileexport_csv_toppersystem'])), array());	
	        }else{
		        $name_fileexport_csv_toppersystem="";
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
			   $txtts3="Salvataggio avvenuto con successo";
               $txtts4="Le pagine web devono essere ottimizzate nuovamente";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="نجح الإنقاذ";
               $txtts4="تحتاج صفحات الويب إلى التحسين مرة أخرى";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Rettung erfolgreich";
               $txtts4="Webseiten müssen erneut optimiert werden";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Rescate exitoso";
               $txtts4="Las páginas web deben optimizarse nuevamente";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Sauvetage réussi";
               $txtts4="Les pages Web doivent être à nouveau optimisées";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="बचाव सफल";
               $txtts4="वेब पेजों को फिर से अनुकूलित करने की आवश्यकता है";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="レスキュー成功";
               $txtts4="Web ページを再度最適化する必要がある";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Udało się ratować";
               $txtts4="Strony internetowe wymagają ponownej optymalizacji";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Resgate bem-sucedido";
               $txtts4="As páginas da web precisam ser otimizadas novamente";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Спасение прошло успешно";
               $txtts4="Веб-страницы необходимо снова оптимизировать";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="救援成功";
               $txtts4="网页需要再次优化";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="החילוץ הצליח";
               $txtts4="דפי אינטרנט צריכים לעבור אופטימיזציה שוב";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Eripe felix";
               $txtts4="Paginae interretiales necesse est ut optimized iterum";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Rescue successful";
               $txtts4="Web pages need to be optimized again";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(trim($name_fileexport_csv_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){
                       
                        $file_export_ts=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/download/".$name_fileexport_csv_toppersystem;
                        @unlink($file_export_ts);

                        $upload_dir=TOPPERSYSTEM_UPLOAD_FILES_NOSQL;
                        $array_lista_file_download=TopperSystemSetFunctionDeleteExportCsvts::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/download");
                        if($array_lista_file_download != "0"){ 
                            for($i=0;$i<=count($array_lista_file_download);$i++){
                                if((isset($array_lista_file_download[$i]))&&(trim($array_lista_file_download[$i]) != "")){
                                    $filepath=str_replace("\\","/",trim($array_lista_file_download[$i]));
                                    $name_filepath=end(explode('/',$filepath));
                                    if(file_exists($filepath)){
                                        chmod($upload_dir."/toppersystem/nosql/download/".$name_filepath,0644);
                                        @unlink($filepath);     
                                    }
                                    $filepath=""; 
                                    $name_filepath="";
                                }
                            }
                            $array_lista_file_download=array();
                        }

                        $contenuto_link_sito_send="ok";                        
                    }else{
		                $contenuto_link_sito_send="$txtts0";
	                }
                }else{
		            $contenuto_link_sito_send="$txtts1";
	            }
	        }else{
		        $contenuto_link_sito_send="$txtts2";
	        }

            echo wp_kses("$contenuto_link_sito_send", array());
        }
    }
}
}
}
if(( current_user_can( 'administrator' ) )){
@add_action('init', TopperSystemExecuteFileSavePosDeleteExportCsvts::runts(), 2);
}
}

}
}
}
?>