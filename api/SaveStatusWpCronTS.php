<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileSaveStatusWpCronTS {
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
	    
	    $stringa="";
	    $inizio="";
	    $fine="";
	    $stringa_confronta_inizio="";
	    $stringa_confronta_fine="";
	    $ini="";
	    $len="";
	    return $stringa_restituisci;
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
		}
		return false;
	}
}

class TopperSystemExecuteFileSaveStatusWpCronTS {
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

	        if((isset($_POST["wpcron_service_save"]) && trim($_POST["wpcron_service_save"]) != "")) {
		        $wpcron_service_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['wpcron_service_save'])), array());	
	        }else{
		        $wpcron_service_save="";
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
			   $txtts3="WP-CRON è stato attivato con successo";
			   $txtts4="WP-CRON è disattivato con successo";
			   $txtts5="Il file wp-config.php è stato trovato nella root del website vuoto";
			   $txtts6="Il file wp-config.php non è stato trovato nella root del website";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="تم تنشيط WP-CRON بنجاح";
			   $txtts4="تم إلغاء تنشيط WP-CRON بنجاح";
			   $txtts5="تم العثور على ملف wp-config.php في جذر موقع الويب الفارغ";
			   $txtts6="لم يتم العثور على ملف wp-config.php في جذر موقع الويب";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="WP-CRON wurde erfolgreich aktiviert";
			   $txtts4="WP-CRON wurde erfolgreich deaktiviert";
			   $txtts5="Die Datei wp-config.php wurde im Stammverzeichnis der leeren Website gefunden";
			   $txtts6="Die Datei wp-config.php wurde nicht im Website-Stammverzeichnis gefunden";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="WP-CRON se ha activado con éxito";
			   $txtts4="WP-CRON se desactivó con éxito";
			   $txtts5="El archivo wp-config.php se encontró en la raíz del sitio web vacío";
			   $txtts6="El archivo wp-config.php no se encontró en la raíz del sitio web";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="WP-CRON a été activé avec succès";
			   $txtts4="WP-CRON a été désactivé avec succès";
			   $txtts5="Le fichier wp-config.php a été trouvé à la racine du site Web vide";
			   $txtts6="Le fichier wp-config.php est introuvable à la racine du site Web";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="WP-CRON को सफलतापूर्वक सक्रिय किया गया है";
			   $txtts4="WP-CRON सफलतापूर्वक निष्क्रिय कर दिया गया है";
			   $txtts5="Wp-config.php फाइल खाली वेबसाइट के रूट में मिली";
			   $txtts6="वेबसाइट रूट में wp-config.php फ़ाइल नहीं मिली";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="WP-CRONが正常にアクティブ化されました";
			   $txtts4="WP-CRONは正常に非アクティブ化されています";
			   $txtts5="wp-config.phpファイルが空のWebサイトのルートで見つかりました";
			   $txtts6="wp-config.phpファイルがWebサイトのルートに見つかりませんでした";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="WP-CRON został pomyślnie aktywowany";
			   $txtts4="WP-CRON został pomyślnie dezaktywowany";
			   $txtts5="Plik wp-config.php został znaleziony w katalogu głównym pustej witryny";
			   $txtts6="Plik wp-config.php nie został znaleziony w katalogu głównym witryny";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="WP-CRON foi ativado com sucesso";
			   $txtts4="WP-CRON foi desativado com sucesso";
			   $txtts5="O arquivo wp-config.php foi encontrado na raiz do site vazio";
			   $txtts6="O arquivo wp-config.php não foi encontrado na raiz do site";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="WP-CRON успешно активирован";
			   $txtts4="WP-CRON успешно деактивирован";
			   $txtts5="Файл wp-config.php был найден в корне пустого веб-сайта.";
			   $txtts6="Файл wp-config.php не найден в корне сайта";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="WP-CRON已成功激活";
			   $txtts4="WP-CRON已成功停用";
			   $txtts5="在空网站的根目录中找到wp-config.php文件";
			   $txtts6="在网站根目录中找不到wp-config.php文件";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="WP-CRON הופעל בהצלחה";
			   $txtts4="WP-CRON הושבת בהצלחה";
			   $txtts5="הקובץ wp-config.php נמצא בשורש האתר הריק";
			   $txtts6="הקובץ wp-config.php לא נמצא בשורש האתר";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="WP-CRON activated percurrenda sunt prospere";
			   $txtts4="WP-CRON bene sit deactivated";
			   $txtts5="Et inventum est in radix of lima wp-config.php vacua website";
			   $txtts6="Quod wp-config.php file non inventa radix in website";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="WP-CRON has been successfully activated";
			   $txtts4="WP-CRON is successfully deactivated";
			   $txtts5="The wp-config.php file was found in the root of the empty website";
			   $txtts6="The wp-config.php file was not found in the website root";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(($wpcron_service_save == "true")||($wpcron_service_save == "false"))){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){             
						$return="";

						$fileWpConfig_ts=TopperSystemSetFileSaveStatusWpCronTS::detect_pathfile()."wp-config.php";
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
							if($wpcron_service_save == "true"){
								if(trim($wpconfig_toppersystem) != ""){
									$pzs_ts=TopperSystemSetFileSaveStatusWpCronTS::extractstringa_toppersystem("$wpconfig_toppersystem", "\$table_prefix", ";");
								}else{
									$pzs_ts="";
									$return="$txtts5";
								}
								if((str_replace("\$table_prefix$pzs_ts;\n","",$wpconfig_toppersystem) != "$wpconfig_toppersystem")&&(str_replace(array("'DISABLE_WP_CRON'","\"DISABLE_WP_CRON\""),"",$wpconfig_toppersystem) == "$wpconfig_toppersystem")){ 
									$new_wpconfig_toppersystem=str_replace("\$table_prefix$pzs_ts;\n","\$table_prefix$pzs_ts;\ndefine('DISABLE_WP_CRON', 'true'); //set toppersystem\n",$wpconfig_toppersystem);
									if(trim($new_wpconfig_toppersystem) != trim($wpconfig_toppersystem)){
										chmod($fileWpConfig_ts,0644);
										$textfilem_wpconfig_ts=fopen($fileWpConfig_ts, "w");
										$scrivi_wpconfig_ts=trim($new_wpconfig_toppersystem);
										fwrite($textfilem_wpconfig_ts,$scrivi_wpconfig_ts);
										fclose($textfilem_wpconfig_ts);
										if($old_permessi_file == "0444"){
											chmod($fileWpConfig_ts,0444);
										}
										clearstatcache();
										unset($textfilem_wpconfig_ts);
										unset($scrivi_wpconfig_ts);
										
										$return="$txtts4";
									}
									unset($new_wpconfig_toppersystem);
								}
								unset($old_permessi_file);
								unset($wpconfig_toppersystem);
								unset($pzs_ts);
							}else if($wpcron_service_save == "false"){
								if(trim($wpconfig_toppersystem) != ""){
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
											
											$return="$txtts3";
										}
										unset($new_wpconfig_toppersystem);
									}
								}else{
									$return="$txtts5";
								}
								unset($old_permessi_file);
								unset($wpconfig_toppersystem);					
							}else{
								#niente
							}			
						}else{
							$return="$txtts6";
						}
						unset($fileWpConfig_ts);					
                
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
@add_action('init', @TopperSystemExecuteFileSaveStatusWpCronTS::runts(), 2);
}
}

}
}
}
?>