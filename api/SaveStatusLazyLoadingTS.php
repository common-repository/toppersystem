<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemExecuteFileSaveStatusLazyLoadingTS {
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

	        if((isset($_POST["smartlazyloadts_service_save"]) && trim($_POST["smartlazyloadts_service_save"]) != "")) {
		        $smartlazyloadts_service_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['smartlazyloadts_service_save'])), array());	
	        }else{
		        $smartlazyloadts_service_save="";
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
			   $txtts3="Smart Image Lazy-Loading è stato attivato con successo";
			   $txtts4="Smart Image Lazy-Loading è disattivato con successo";
			   $txtts5="Il file general.php è stato trovato vuoto";
			   $txtts6="Il file general.php non è stato trovato";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="تم تفعيل تطبيق Smart Image Lazy-Loading";
			   $txtts4="تم إلغاء تنشيط تطبيق Smart Image Lazy-Loading";
			   $txtts5="تم العثور على ملف general.php فارغًا";
			   $txtts6="لم يتم العثور على ملف general.php";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Smart Image Lazy-Loading wurde erfolgreich aktiviert";
			   $txtts4="Smart Image Lazy-Loading wurde erfolgreich deaktiviert";
			   $txtts5="Die Datei general.php wurde leer gefunden";
			   $txtts6="Die Datei general.php wurde nicht gefunden";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Smart Image Lazy-Loading se ha activado con éxito";
			   $txtts4="Smart Image Lazy-Loading se ha deactivado con éxito";
			   $txtts5="El archivo general.php se encontró vacío";
			   $txtts6="No se encontró el archivo general.php";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Smart Image Lazy-Loading a été activée avec succès";
			   $txtts4="Smart Image Lazy-Loading est désactivée avec succès";
			   $txtts5="Le fichier general.php a été trouvé vide";
			   $txtts6="Le fichier general.php n'a pas été trouvé";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="Smart Image Lazy-Loading को सफलतापूर्वक सक्रिय कर दिया गया है";
			   $txtts4="Smart Image Lazy-Loading सफलतापूर्वक निष्क्रिय कर दिया गया है";
			   $txtts5="General.php फ़ाइल खाली पाई गई";
			   $txtts6="सामान्य.php फ़ाइल नहीं मिली";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="Smart Image Lazy-Loadingアプリケーションが正常にアクティブ化されました";
			   $txtts4="Smart Image Lazy-Loadingアプリケーションが正常に非アクティブ化されました";
			   $txtts5="general.phpファイルが空であることが判明しました";
			   $txtts6="general.phpファイルが見つかりませんでした";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Smart Image Lazy-Loading została pomyślnie aktywowana";
			   $txtts4="Smart Image Lazy-Loading została pomyślnie dezaktywowana";
			   $txtts5="Plik general.php został znaleziony pusty";
			   $txtts6="Nie znaleziono pliku general.php";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Smart Image Lazy-Loading foi ativada com sucesso";
			   $txtts4="Smart Image Lazy-Loading foi desativada com sucesso";
			   $txtts5="O arquivo general.php foi encontrado vazio";
			   $txtts6="O arquivo general.php não foi encontrado";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Smart Image Lazy-Loading успешно активировано";
			   $txtts4="Smart Image Lazy-Loading успешно деактивировано";
			   $txtts5="Файл general.php оказался пустым";
			   $txtts6="Файл general.php не найден";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="Smart Image Lazy-Loading 应用程序已成功激活";
			   $txtts4="Smart Image Lazy-Loading 应用程序已成功停用";
			   $txtts5="发现general.php文件为空";
			   $txtts6="没有找到general.php文件";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="Smart Image Lazy-Loading הופעל בהצלחה";
			   $txtts4="Smart Image Lazy-Loading בוטל בהצלחה";
			   $txtts5="הקובץ general.php נמצא ריק";
			   $txtts6="הקובץהקובץ general.php לא נמצא";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Smart Image Lazy-Loading sunt prospere activated";
			   $txtts4="Smart Image Lazy-Loading est deactivated";
			   $txtts5="Et inanis inventa file general.php";
			   $txtts6="Et general.php file non inveni";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Smart Image Lazy-Loading has been successfully activated";
			   $txtts4="Smart Image Lazy-Loading is successfully deactivated";
			   $txtts5="The wp-general.php file was found empty";
			   $txtts6="The general.php file was not found";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(($smartlazyloadts_service_save == "true")||($smartlazyloadts_service_save == "false"))){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){ 
                        $pathfilegeneral=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";

						$return="";

                        #$fileGeneral_ts="../components/general.php";
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
							if($smartlazyloadts_service_save == "true"){
								if(trim($general_toppersystem) != ""){
									if(str_replace("\$par_lazyloadingts_toppersystem=\"0\"","",$general_toppersystem) != "$general_toppersystem"){ 
										$new_general_toppersystem=str_replace("\$par_lazyloadingts_toppersystem=\"0\"","\$par_lazyloadingts_toppersystem=\"1\"",$general_toppersystem);
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
							}else if($smartlazyloadts_service_save == "false"){
								if(trim($general_toppersystem) != ""){
									if(str_replace("\$par_lazyloadingts_toppersystem=\"1\"","",$general_toppersystem) != "$general_toppersystem"){ 
										$new_general_toppersystem=str_replace("\$par_lazyloadingts_toppersystem=\"1\"","\$par_lazyloadingts_toppersystem=\"0\"",$general_toppersystem);
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
@add_action('init', @TopperSystemExecuteFileSaveStatusLazyLoadingTS::runts(), 2);
}
}

}
}
}
?>