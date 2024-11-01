<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileSaveStatusAspmTS {
    public static function result_domain_name($url){
        $url=str_replace("://","[TsostituisciS]",$url);
        $url=explode("/",$url)["0"];
        $url=explode("?",$url)["0"];
        $url=explode("#",$url)["0"];
        $url=str_replace("[TsostituisciS]","://",$url);    
        return $url;
    }

    public static function result_page_name_no_domain($url){
        $url=str_replace(TopperSystemSetFileSaveStatusAspmTS::result_domain_name($url),"",$url);
        return $url;
    }

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

class TopperSystemExecuteFileSaveStatusAspmTS {
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

	        if((isset($_POST["aspmts_service_save"]) && trim($_POST["aspmts_service_save"]) != "")) {
		        $aspmts_service_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['aspmts_service_save'])), array());	
	        }else{
		        $aspmts_service_save="";
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
			   $txtts3="Antispam integrato Topper System SEO è stato attivato con successo";
			   $txtts4="Antispam integrato Topper System SEO è stato disattivato con successo";
			   $txtts5="Il file .htaccess è stato trovato nella root del website vuoto";
			   $txtts6="Il file .htaccess non è stato trovato nella root del website";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="تم تفعيل نظام مكافحة البريد التطفلي المتكامل بنجاح";
			   $txtts4="تم تعطيل نظام مكافحة البريد العشوائي المتكامل بنجاح";
			   $txtts5="تم العثور على ملف htaccess في جذر موقع الويب الفارغ";
			   $txtts6="لم يتم العثور على ملف htaccess في جذر موقع الويب";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Das integrierte Antispam Topper System SEO wurde erfolgreich aktiviert";
			   $txtts4="Das integrierte Antispam-Topper-System wurde erfolgreich deaktiviert";
			   $txtts5="Die .htaccess-Datei wurde im Stammverzeichnis der leeren Website gefunden";
			   $txtts6="Die .htaccess-Datei wurde nicht im Stammverzeichnis der Website gefunden";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="El Sistema Integrado Antispam Topper ha sido activado exitosamente";
			   $txtts4="El Sistema Integrado Antispam Topper ha sido deshabilitado con éxito";
			   $txtts5="El archivo .htaccess se encontró en la raíz del sitio web vacío";
			   $txtts6="El archivo .htaccess no se encontró en la raíz del sitio web";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Le système antispam Topper intégré a été activé avec succès";
			   $txtts4="Le système antispam Topper intégré a été désactivé avec succès";
			   $txtts5="Le fichier .htaccess a été trouvé à la racine du site Web vide";
			   $txtts6="Le fichier .htaccess est introuvable à la racine du site Web";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="एकीकृत एंटीस्पैम टॉपर सिस्टम को सफलतापूर्वक सक्रिय किया गया है";
			   $txtts4="इंटीग्रेटेड एंटीस्पैम टॉपर सिस्टम को सफलतापूर्वक अक्षम कर दिया गया है";
			   $txtts5="खाली वेबसाइट की जड़ में .htaccess फ़ाइल मिली";
			   $txtts6="वेबसाइट रूट में .htaccess फ़ाइल नहीं मिली";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="統合スパム対策トッパーシステムが正常にアクティブ化されました";
			   $txtts4="統合スパム対策トッパーシステムが正常に無効化されました";
			   $txtts5="空のWebサイトのルートに.htaccessファイルが見つかりました";
			   $txtts6=".htaccessファイルがウェブサイトのルートに見つかりませんでした";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Zintegrowany system antyspamowy został pomyślnie aktywowany";
			   $txtts4="Zintegrowany system antyspamowy został pomyślnie wyłączony";
			   $txtts5="Plik .htaccess został znaleziony w katalogu głównym pustej witryny internetowej";
			   $txtts6="W katalogu głównym witryny nie znaleziono pliku .htaccess";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="O sistema anti-spam Topper integrado foi ativado com sucesso";
			   $txtts4="O sistema antispam topper integrado foi desativado com sucesso";
			   $txtts5="O arquivo .htaccess foi encontrado na raiz do site vazio";
			   $txtts6="O arquivo .htaccess não foi encontrado na raiz do site";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Интегрированная система защиты от спама успешно активирована";
			   $txtts4="Интегрированная система защиты от спама успешно отключена";
			   $txtts5="Файл .htaccess найден в корне пустого сайта";
			   $txtts6="Файл .htaccess не найден в корне сайта";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="集成反垃圾邮件礼帽系统已成功激活";
			   $txtts4="集成反垃圾邮件礼帽系统已成功禁用";
			   $txtts5=".htaccess文件在空网站的根目录中找到";
			   $txtts6=".htaccess文件在网站根目录中找不到";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="מערכת טופר אנטי ספאם משולבת הופעלה בהצלחה";
			   $txtts4="מערכת טופר אנטי-ספאם משולבת הושבתה בהצלחה";
			   $txtts5="קובץ ה- .htaccess נמצא בשורש האתר הריק";
			   $txtts6="קובץ ה- .htaccess לא נמצא בשורש האתר";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Topper integrated Antispam Ratio percurrenda sunt prospere activated";
			   $txtts4="Topper integrated Antispam Ratio percurrenda sunt prospere erret";
			   $txtts5="Et .htaccess lima inventa radix in in inanis website";
			   $txtts6=".Htaccess lima quod non in radix website";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Integrated Antispam Topper System SEO has been successfully activated";
			   $txtts4="Integrated Antispam Topper System SEO has been successfully disabled";
			   $txtts5="The .htaccess file was found in the root of the empty website";
			   $txtts6="The .htaccess file was not found in the website root";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(($aspmts_service_save == "true")||($aspmts_service_save == "false"))){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        if(str_replace("\\","",__DIR__) != __DIR__){
                            $hu4="\components\general.php";
                            $pathfilegeneral=str_replace("toppersystem\api","toppersystem",__DIR__).$hu4;
                        }else{
                            $hu4="/components/general.php";
                            $pathfilegeneral=str_replace("toppersystem/api","toppersystem",__DIR__).$hu4;
                        }
                        $pathfilegeneral=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";
						$return="";
						
						$fileHtaxxess_ts=TopperSystemSetFileSaveStatusAspmTS::detect_pathfile()."."."ht"."acc"."ess";
						if(file_exists($fileHtaxxess_ts)){
							if(is_readable("$fileHtaxxess_ts")){
								$old_permessi_file=substr(sprintf('%o', fileperms("$fileHtaxxess_ts")), -4);
							}else{
								$old_permessi_file="";
							}							
							$htaxxess_new_toppersystem="";
							$htaxxess_toppersystem=@file_get_contents($fileHtaxxess_ts);			
							if(trim($htaxxess_toppersystem) != ""){
								if(str_replace("# begin toppersystem seo","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
									if($aspmts_service_save == "true"){
										if(str_replace("errordocument 403","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
											$htaxxess_new_toppersystem="# BEGIN TopperSystem SEO"."\n"."ErrorDocument 403 https://google.com"."\n\n"."order allow,deny"."\n"."allow from all"."\n"."# END TopperSystem SEO"."\n"."$htaxxess_toppersystem";
										}else{
											$htaxxess_new_toppersystem="# BEGIN TopperSystem SEO"."\n"."order allow,deny"."\n"."allow from all"."\n"."# END TopperSystem SEO"."\n"."$htaxxess_toppersystem";
										}
										
										$return="code1tsresp $txtts3";										
									}else if($aspmts_service_save == "false"){
										$htaxxess_new_toppersystem="# BEGIN TopperSystem SEO"."\n"."# END TopperSystem SEO"."\n"."$htaxxess_toppersystem";
										
										$return="code0tsresp $txtts4";
									}else{
										#niente
									}
									
									if($htaxxess_new_toppersystem != ""){
										chmod($fileHtaxxess_ts,0644);								
										$textfilem_htaxxess_ts=fopen($fileHtaxxess_ts, "w");
										$scrivim_htaxxess_ts="$htaxxess_new_toppersystem";
										$htaxxess_new_toppersystem="";
										fwrite($textfilem_htaxxess_ts,$scrivim_htaxxess_ts);
										fclose($textfilem_htaxxess_ts);	
										$textfilem_htaxxess_ts="";
										$scrivim_htaxxess_ts="";							
										if($old_permessi_file == "0444"){
											chmod($fileHtaxxess_ts,0444);
										}

                                        $fileGeneral_ts="$pathfilegeneral";
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
                                            if($aspmts_service_save == "true"){
                                                $new_general_toppersystem=str_replace(array("\$par_activateasmpts_toppersystem=\"0\"","\$par_activateasmpts_toppersystem=\"1\""),"\$par_activateasmpts_toppersystem=\"1\"",$general_toppersystem);
                                            }else if($aspmts_service_save == "false"){
                                                $new_general_toppersystem=str_replace(array("\$par_activateasmpts_toppersystem=\"0\"","\$par_activateasmpts_toppersystem=\"1\""),"\$par_activateasmpts_toppersystem=\"0\"",$general_toppersystem);
									        }else{
										        #niente
                                                $new_general_toppersystem="$general_toppersystem";
									        }
                                            if(trim($new_general_toppersystem) != trim($general_toppersystem)){
                                                #salva nuovo
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
                                            }                                            
                                        }
									}
								}else{
									$dett_htaxxess_toppersystem=trim(TopperSystemSetFileSaveStatusAspmTS::extractstringa_toppersystem($htaxxess_toppersystem, '# BEGIN TopperSystem SEO', '# END TopperSystem SEO'));
									
									if($aspmts_service_save == "true"){
										$add_htaxxess_new_toppersystem="";
										
										if(str_replace("errordocument 403","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
											$add_htaxxess_new_toppersystem.="ErrorDocument 403 https://google.com\n\n";
										}										
										if(str_replace("allow from all","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
											$add_htaxxess_new_toppersystem.="order allow,deny"."\n"."allow from all"."\n\n";
										}
										$dett_new_htaxxess_toppersystem="# BEGIN TopperSystem SEO"."\n"."$add_htaxxess_new_toppersystem"."$dett_htaxxess_toppersystem"."\n"."# END TopperSystem SEO";

										$htaxxess_new_toppersystem=str_replace("$dett_htaxxess_toppersystem","",$htaxxess_toppersystem);
										$htaxxess_new_toppersystem=str_replace("# BEGIN TopperSystem SEO","",$htaxxess_new_toppersystem);
										$htaxxess_new_toppersystem=trim(str_replace("# END TopperSystem SEO","",$htaxxess_new_toppersystem));
										$htaxxess_new_toppersystem="$dett_new_htaxxess_toppersystem"."\n"."$htaxxess_new_toppersystem";
										if($htaxxess_new_toppersystem != "$htaxxess_toppersystem"){
											$return="code1tsresp $txtts3";
										}
									}else if($aspmts_service_save == "false"){										
										$dett_new_htaxxess_toppersystem=str_replace("ErrorDocument 403 https://google.com","",$dett_htaxxess_toppersystem);
										$ipmem_dett_htaxxess_toppersystem=trim(TopperSystemSetFileSaveStatusAspmTS::extractstringa_toppersystem($dett_new_htaxxess_toppersystem, 'order allow,deny', 'allow from all'));
										if($ipmem_dett_htaxxess_toppersystem != ""){
											$dett_new_htaxxess_toppersystem=str_replace("$ipmem_dett_htaxxess_toppersystem","",$dett_new_htaxxess_toppersystem);
										}										
										$dett_new_htaxxess_toppersystem=str_replace("order allow,deny","",$dett_new_htaxxess_toppersystem);
										$dett_new_htaxxess_toppersystem=trim(str_replace("allow from all","",$dett_new_htaxxess_toppersystem));										
										$dett_new_htaxxess_toppersystem=str_replace("\ndeny from all","order allow,deny\ndeny from all",$dett_new_htaxxess_toppersystem);
										
										$dett_new_htaxxess_toppersystem="# BEGIN TopperSystem SEO"."\n"."$dett_new_htaxxess_toppersystem"."\n"."# END TopperSystem SEO";
										
										
										$htaxxess_new_toppersystem=str_replace("$dett_htaxxess_toppersystem","",$htaxxess_toppersystem);
										$htaxxess_new_toppersystem=str_replace("# BEGIN TopperSystem SEO","",$htaxxess_new_toppersystem);
										$htaxxess_new_toppersystem=trim(str_replace("# END TopperSystem SEO","",$htaxxess_new_toppersystem));
										$htaxxess_new_toppersystem="$dett_new_htaxxess_toppersystem"."\n"."$htaxxess_new_toppersystem";										
										if($htaxxess_new_toppersystem != "$htaxxess_toppersystem"){
											$return="code0tsresp $txtts4";
										}
									}else{
										#niente
									}
									if($htaxxess_new_toppersystem != ""){
										if($htaxxess_new_toppersystem != "$htaxxess_toppersystem"){
											chmod($fileHtaxxess_ts,0644);								
											$textfilem_htaxxess_ts=fopen($fileHtaxxess_ts, "w");
											$scrivim_htaxxess_ts="$htaxxess_new_toppersystem";
											$htaxxess_new_toppersystem="";
											fwrite($textfilem_htaxxess_ts,$scrivim_htaxxess_ts);
											fclose($textfilem_htaxxess_ts);	
											$textfilem_htaxxess_ts="";
											$scrivim_htaxxess_ts="";							
											if($old_permessi_file == "0444"){
												chmod($fileHtaxxess_ts,0444);
											}

                                            $fileGeneral_ts="$pathfilegeneral";
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
                                                if($aspmts_service_save == "true"){
                                                    $new_general_toppersystem=str_replace(array("\$par_activateasmpts_toppersystem=\"0\"","\$par_activateasmpts_toppersystem=\"1\""),"\$par_activateasmpts_toppersystem=\"1\"",$general_toppersystem);
                                                }else if($aspmts_service_save == "false"){
                                                    $new_general_toppersystem=str_replace(array("\$par_activateasmpts_toppersystem=\"0\"","\$par_activateasmpts_toppersystem=\"1\""),"\$par_activateasmpts_toppersystem=\"0\"",$general_toppersystem);
									            }else{
										            #niente
                                                    $new_general_toppersystem="$general_toppersystem";
									            }
                                                if(trim($new_general_toppersystem) != trim($general_toppersystem)){
                                                    #salva nuovo
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
                                                }                                            
                                            }
										}
									}									
								}								
							}else{
								$return="$txtts5";
							}
							$htaxxess_toppersystem="";
						}else{
							$return="$txtts6";
						}						
                
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
@add_action('init', @TopperSystemExecuteFileSaveStatusAspmTS::runts(), 2);
}
}

}
}
}
?>