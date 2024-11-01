<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemExecuteFileSaveStatusCo2ApplicationTS {
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

	        if((isset($_POST["co2application_service_save"]) && trim($_POST["co2application_service_save"]) != "")) {
		        $co2application_service_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['co2application_service_save'])), array());	
	        }else{
		        $co2application_service_save="";
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
			   $txtts3="CO2 Application è stato attivato con successo";
			   $txtts4="CO2 Application è disattivato con successo";
			   $txtts5="Il file general.php è stato trovato vuoto";
			   $txtts6="Il file general.php non è stato trovato";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="تم تفعيل تطبيق CO2 بنجاح";
			   $txtts4="تم إلغاء تنشيط تطبيق CO2 بنجاح";
			   $txtts5="تم العثور على ملف general.php فارغًا";
			   $txtts6="لم يتم العثور على ملف general.php";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="CO2-Anwendung wurde erfolgreich aktiviert";
			   $txtts4="CO2-Anwendung wurde erfolgreich deaktiviert";
			   $txtts5="Die Datei general.php wurde leer gefunden";
			   $txtts6="Die Datei general.php wurde nicht gefunden";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="La aplicación CO2 se ha activado con éxito";
			   $txtts4="La aplicación CO2 se ha deactivado con éxito";
			   $txtts5="El archivo general.php se encontró vacío";
			   $txtts6="No se encontró el archivo general.php";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="L'application CO2 a été activée avec succès";
			   $txtts4="L'application CO2 est désactivée avec succès";
			   $txtts5="Le fichier general.php a été trouvé vide";
			   $txtts6="Le fichier general.php n'a pas été trouvé";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="CO2 एप्लिकेशन को सफलतापूर्वक सक्रिय कर दिया गया है";
			   $txtts4="CO2 एप्लिकेशन सफलतापूर्वक निष्क्रिय कर दिया गया है";
			   $txtts5="General.php फ़ाइल खाली पाई गई";
			   $txtts6="सामान्य.php फ़ाइल नहीं मिली";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="CO2アプリケーションが正常にアクティブ化されました";
			   $txtts4="CO2アプリケーションが正常に非アクティブ化されました";
			   $txtts5="general.phpファイルが空であることが判明しました";
			   $txtts6="general.phpファイルが見つかりませんでした";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Aplikacja CO2 została pomyślnie aktywowana";
			   $txtts4="Aplikacja CO2 została pomyślnie dezaktywowana";
			   $txtts5="Plik general.php został znaleziony pusty";
			   $txtts6="Nie znaleziono pliku general.php";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="A aplicação de CO2 foi ativada com sucesso";
			   $txtts4="A aplicação de CO2 foi desativada com sucesso";
			   $txtts5="O arquivo general.php foi encontrado vazio";
			   $txtts6="O arquivo general.php não foi encontrado";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Приложение CO2 успешно активировано";
			   $txtts4="Приложение CO2 успешно деактивировано";
			   $txtts5="Файл general.php оказался пустым";
			   $txtts6="Файл general.php не найден";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="CO2 应用程序已成功激活";
			   $txtts4="CO2 应用程序已成功停用";
			   $txtts5="发现general.php文件为空";
			   $txtts6="没有找到general.php文件";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="יישום CO2 הופעל בהצלחה";
			   $txtts4="יישום CO2 בוטל בהצלחה";
			   $txtts5="הקובץ general.php נמצא ריק";
			   $txtts6="הקובץהקובץ general.php לא נמצא";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Application percurrenda sunt prospere activated CO2";
			   $txtts4="Bene usus est deactivated CO2";
			   $txtts5="Et inanis inventa file general.php";
			   $txtts6="Et general.php file non inveni";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="CO2 Application has been successfully activated";
			   $txtts4="CO2 Application is successfully deactivated";
			   $txtts5="The wp-general.php file was found empty";
			   $txtts6="The general.php file was not found";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(($co2application_service_save == "true")||($co2application_service_save == "false"))){

                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){ 
                        $pathfilegeneral=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";

						$return="";

                        $fileGeneral_ts="$pathfilegeneral";
						if(file_exists($fileGeneral_ts)){
							if(is_readable("$fileGeneral_ts")){
								$old_permessi_file=substr(sprintf('%o', fileperms("$fileGeneral_ts")), -4);
							}else{
								$old_permessi_file="";
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
							if($co2application_service_save == "true"){
								if(trim($general_toppersystem) != ""){
									if(str_replace("\$par_co2application_toppersystem=\"0\"","",$general_toppersystem) != "$general_toppersystem"){ 
										$new_general_toppersystem=str_replace("\$par_co2application_toppersystem=\"0\"","\$par_co2application_toppersystem=\"1\"",$general_toppersystem);
										if(trim($new_general_toppersystem) != trim($general_toppersystem)){
											chmod($fileGeneral_ts,0644);
											$textfilem_general_ts=fopen($fileGeneral_ts, "w");
											$scrivi_general_ts=trim($new_general_toppersystem);
											fwrite($textfilem_general_ts,$scrivi_general_ts);
											fclose($textfilem_general_ts);
											unset($textfilem_general_ts);
											unset($scrivi_general_ts);
											if($old_permessi_file == "0444"){
												chmod($fileGeneral_ts,0444);
											}
											clearstatcache();
											
											$return="code1tsresp $txtts3";
										}
										unset($new_general_toppersystem);
									}
								}else{
									$return="$txtts5";
								}
								unset($old_permessi_file);
								unset($general_toppersystem);
							}else if($co2application_service_save == "false"){
								if(trim($general_toppersystem) != ""){
									if(str_replace("\$par_co2application_toppersystem=\"1\"","",$general_toppersystem) != "$general_toppersystem"){ 
										$new_general_toppersystem=str_replace("\$par_co2application_toppersystem=\"1\"","\$par_co2application_toppersystem=\"0\"",$general_toppersystem);
										if(trim($new_general_toppersystem) != trim($general_toppersystem)){
											chmod($fileGeneral_ts,0644);
											$textfilem_general_ts=fopen($fileGeneral_ts, "w");
											$scrivi_general_ts=trim($new_general_toppersystem);
											fwrite($textfilem_general_ts,$scrivi_general_ts);
											fclose($textfilem_general_ts);
											unset($textfilem_general_ts);
											unset($scrivi_general_ts);
											if($old_permessi_file == "0444"){
												chmod($fileGeneral_ts,0444);
											}
											clearstatcache();
											
											$return="code0tsresp $txtts4";
										}
										unset($new_general_toppersystem);
									}
								}else{
									$return="$txtts5";
								}
								unset($old_permessi_file);
								unset($general_toppersystem);					
							}else{
								#niente
							}			
						}else{
							$return="$txtts6";
						}
						unset($fileGeneral_ts);					
                
                        $contenuto_link_sito_send="$return";

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
@add_action('init', @TopperSystemExecuteFileSaveStatusCo2ApplicationTS::runts(), 2);
}
}

}
}
}
?>