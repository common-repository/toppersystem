<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileSavePosAutoUpdatetimesTS {
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
}

class TopperSystemExecuteFileSavePosAutoUpdatetimesTS {
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

	        if((isset($_POST["pos_sel_autoupdatetimes1_toppersystem_send"]) && trim($_POST["pos_sel_autoupdatetimes1_toppersystem_send"]) != "")) {
		        $pos_sel_autoupdatetimes1_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['pos_sel_autoupdatetimes1_toppersystem_send'])), array());	
	        }else{
		        $pos_sel_autoupdatetimes1_toppersystem_send="";
	        }

	        if((isset($_POST["pos_sel_autoupdatetimes2_toppersystem_send"]) && trim($_POST["pos_sel_autoupdatetimes2_toppersystem_send"]) != "")) {
		        $pos_sel_autoupdatetimes2_toppersystem_send=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['pos_sel_autoupdatetimes2_toppersystem_send'])), array());	
	        }else{
		        $pos_sel_autoupdatetimes2_toppersystem_send="";
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
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="نجح الإنقاذ";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Rettung erfolgreich";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Rescate exitoso";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Sauvetage réussi";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="बचाव सफल";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="レスキュー成功";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Udało się ratować";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Resgate bem-sucedido";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Спасение прошло успешно";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="救援成功";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="החילוץ הצליח";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Eripe felix";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Rescue successful";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&($pos_sel_autoupdatetimes1_toppersystem_send != "")&&($pos_sel_autoupdatetimes2_toppersystem_send != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        $pathfileloadercss=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";
            
						$return="";
						$look_form="1";

                        $fileCssLoaderl_ts="$pathfileloadercss";
						if(file_exists($fileCssLoaderl_ts)){
							if(is_readable("$fileCssLoaderl_ts")){
								$old_permessi_file=substr(sprintf('%o', fileperms("$fileCssLoaderl_ts")), -4);
							}else{
								$old_permessi_file="";
							}							
							
							$handle_cssloader = fopen($fileCssLoaderl_ts, "r");
							if (FALSE === $handle_cssloader) {
								$par_get_timesautoupdatetimes_toppersystem="";
							}else{
								$par_get_timesautoupdatetimes_toppersystem = '';
								while (!feof($handle_cssloader)) {
									$par_get_timesautoupdatetimes_toppersystem .= fread($handle_cssloader, 8192);
								}
								fclose($handle_cssloader);
							}
							unset($handle_cssloader);
							if(trim($par_get_timesautoupdatetimes_toppersystem) != ""){
								$par_get_timesautoupdatetimes_prel_part1=TopperSystemSetFileSavePosAutoUpdatetimesTS::extractstringa_toppersystem($par_get_timesautoupdatetimes_toppersystem, 'par_get_timesautoupdate_spider_toppersystem="', '";');
								$par_get_timesautoupdatetimes_prel_part2=TopperSystemSetFileSavePosAutoUpdatetimesTS::extractstringa_toppersystem($par_get_timesautoupdatetimes_toppersystem, 'par_get_timesautoupdate_user_toppersystem="', '";');

                                if($par_get_timesautoupdatetimes_prel_part1 == ""){
                                    if(str_replace("par_get_timesautoupdate_spider_toppersystem=\"\";","",$par_get_timesautoupdatetimes_toppersystem) == "$par_get_timesautoupdatetimes_toppersystem"){
                                        $look_form="0";
                                    }
                                }
                                if($par_get_timesautoupdatetimes_prel_part2 == ""){
                                    if(str_replace("par_get_timesautoupdate_user_toppersystem=\"\";","",$par_get_timesautoupdatetimes_toppersystem) == "$par_get_timesautoupdatetimes_toppersystem"){
                                        $look_form="0";
                                    }
                                }                              
							}
                            clearstatcache();
						}						
						
						if($look_form == "0"){
							$return="$txtts2";
						}else{
                            $savedts="";

                            #part1
							if($par_get_timesautoupdatetimes_prel_part1 != "$pos_sel_autoupdatetimes1_toppersystem_send"){ 

                                $pathfilegeneral=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";                               
                                
                                $fileParService_ts="$pathfilegeneral";
						        if(file_exists($fileParService_ts)){
							        if(is_readable("$fileParService_ts")){
								        $old_permessi_file=substr(sprintf('%o', fileperms("$fileParService_ts")), -4);
							        }else{
								        $old_permessi_file="";
							        }							
							        
							        $handle_parservice = fopen($fileParService_ts, "r");
							        if (FALSE === $handle_parservice) {
								        $parservice_toppersystem="";
							        }else{
								        $parservice_toppersystem = '';
								        while (!feof($handle_parservice)) {
									        $parservice_toppersystem .= fread($handle_parservice, 8192);
								        }
								        fclose($handle_parservice);
							        }
							        unset($handle_parservice);
							        if(trim($parservice_toppersystem) != ""){

                                        if($pos_sel_autoupdatetimes1_toppersystem_send != ""){
$new_parservice_toppersystem=str_replace("par_get_timesautoupdate_spider_toppersystem=\"$par_get_timesautoupdatetimes_prel_part1\"","par_get_timesautoupdate_spider_toppersystem=\"$pos_sel_autoupdatetimes1_toppersystem_send\"",$parservice_toppersystem);
                                            if($new_parservice_toppersystem != "$parservice_toppersystem"){
                                                chmod($fileParService_ts,0644);
                                                $textfilex=fopen($fileParService_ts, "w");
                                                $scrivix="$new_parservice_toppersystem";                                            
                                                fwrite($textfilex,$scrivix);
                                                fclose($textfilex);
								                if($old_permessi_file == "0444"){
									                chmod($fileParService_ts,0444);
								                }
                                                $savedts="ok";
                                            }
                                        }
							        }
						        }                                							
								clearstatcache();
                            }
                            $parservice_toppersystem="";

                            #part2
                            if($par_get_timesautoupdatetimes_prel_part2 != "$pos_sel_autoupdatetimes2_toppersystem_send"){  

                                $pathfilegeneral=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";
                              
                                $fileParService_ts="$pathfilegeneral";
						        if(file_exists($fileParService_ts)){
							        if(is_readable("$fileParService_ts")){
								        $old_permessi_file=substr(sprintf('%o', fileperms("$fileParService_ts")), -4);
							        }else{
								        $old_permessi_file="";
							        }							
							        
							        $handle_parservice = fopen($fileParService_ts, "r");
							        if (FALSE === $handle_parservice) {
								        $parservice_toppersystem="";
							        }else{
								        $parservice_toppersystem = '';
								        while (!feof($handle_parservice)) {
									        $parservice_toppersystem .= fread($handle_parservice, 8192);
								        }
								        fclose($handle_parservice);
							        }
							        unset($handle_parservice);
							        if(trim($parservice_toppersystem) != ""){

                                        if($pos_sel_autoupdatetimes2_toppersystem_send != ""){
$new_parservice_toppersystem=str_replace("par_get_timesautoupdate_user_toppersystem=\"$par_get_timesautoupdatetimes_prel_part2\"","par_get_timesautoupdate_user_toppersystem=\"$pos_sel_autoupdatetimes2_toppersystem_send\"",$parservice_toppersystem);
                                            if($new_parservice_toppersystem != "$parservice_toppersystem"){
                                                chmod($fileParService_ts,0644);
                                                $textfilex=fopen($fileParService_ts, "w");
                                                $scrivix="$new_parservice_toppersystem";                                            
                                                fwrite($textfilex,$scrivix);
                                                fclose($textfilex);
								                if($old_permessi_file == "0444"){
									                chmod($fileParService_ts,0444);
								                }
                                                $savedts="ok";
                                            }
                                        }
							        }
						        }								
							}

                            $return="";
                            if($savedts == "ok"){
                                $return="$txtts3";
                            }
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
@add_action('init', TopperSystemExecuteFileSavePosAutoUpdatetimesTS::runts(), 2);
}
}

}
}
}
?>