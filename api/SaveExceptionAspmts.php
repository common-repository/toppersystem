<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileSaveExceptionAspmts {
    public static function safeEncrypt($message,$key){
	    $message_crypter=@openssl_encrypt("$message","aes128","$key");
	    $cipher=$message_crypter;
	    return $cipher;
    }

    public static function code_value_aspmts($value,$auth_memory){
	    if(trim($value) != ""){
		    if($auth_memory != ""){
                $code_memory="";
                $code_memory = preg_replace("/[a-z]+/i", "", $auth_memory); 
                $n_caratteri_negativi=strlen($code_memory);	
                $caratteri_negativi="";
                for($ipp=0;$ipp<=$n_caratteri_negativi;$ipp++) {	
	                $pulisci=substr($caratteri_negativi,$ipp,1);
	                $code_memory=str_replace("$pulisci"," ",$code_memory);	
	                $pulisci="";
                }

                $value_encript=TopperSystemSetFileSaveExceptionAspmts::safeEncrypt("$value","$code_memory");
                $return="$value_encript";
		                }else{
                $return="";
		    }
	    }else{
		    $return="";
	    }
	    return $return;
    }
}
		
class TopperSystemExecuteFileSaveExceptionAspmts {
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

			if((isset($_POST["value_ts"]) && trim($_POST["value_ts"]) != "")) {
		        $value_ts=wp_check_invalid_utf8(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['value_ts'])));	
	        }else{
		        $value_ts="";
	        }
			
			if((isset($_POST["ip_aspmts_save"]) && trim($_POST["ip_aspmts_save"]) != "")) {
		        $ip_aspmts_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['ip_aspmts_save'])), array());	
				if(($ip_aspmts_save == "true")||($ip_aspmts_save == "1")){
					$ip_aspmts_save="1";
				}else{
					$ip_aspmts_save="0";
				}
	        }else{
		        $ip_aspmts_save="";
	        }

			if((isset($_POST["page_aspmts_save"]) && trim($_POST["page_aspmts_save"]) != "")) {
		        $page_aspmts_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['page_aspmts_save'])), array());
				if(($page_aspmts_save == "true")||($page_aspmts_save == "1")){
					$page_aspmts_save="1";
				}else{
					$page_aspmts_save="0";
				}				
	        }else{
		        $page_aspmts_save="";
	        }

			if((isset($_POST["useragent_aspmts_save"]) && trim($_POST["useragent_aspmts_save"]) != "")) {
		        $useragent_aspmts_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['useragent_aspmts_save'])), array());
				if(($useragent_aspmts_save == "true")||($useragent_aspmts_save == "1")){
					$useragent_aspmts_save="1";
				}else{
					$useragent_aspmts_save="0";
				}				
	        }else{
		        $useragent_aspmts_save="";
	        }

			if((isset($_POST["servername_aspmts_save"]) && trim($_POST["servername_aspmts_save"]) != "")) {
		        $servername_aspmts_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['servername_aspmts_save'])), array());
				if(($servername_aspmts_save == "true")||($servername_aspmts_save == "1")){
					$servername_aspmts_save="1";
				}else{
					$servername_aspmts_save="0";
				}				
	        }else{
		        $servername_aspmts_save="";
	        }

			if((isset($_POST["ipservername_aspmts_save"]) && trim($_POST["ipservername_aspmts_save"]) != "")) {
		        $ipservername_aspmts_save=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['ipservername_aspmts_save'])), array());
				if(($ipservername_aspmts_save == "true")||($ipservername_aspmts_save == "1")){
					$ipservername_aspmts_save="1";
				}else{
					$ipservername_aspmts_save="0";
				}
	        }else{
		        $ipservername_aspmts_save="";
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
			   $txtts3="Il valore risulta duplicato";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="القيمة مكررة";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Der Wert wird dupliziert";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="El valor está duplicado.";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="La valeur est dupliquée";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="मान डुप्लिकेट है";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
               $txtts3="値が重複しています";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Wartość jest zduplikowana";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="O valor é duplicado";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Значение дублируется";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="该值重复";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="הערך משוכפל";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="De valore decursu duplicata est";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="The value is duplicated";
            }			
			
			$pass_check="ok";
			if((trim($ip_aspmts_save) == "0")&&(trim($page_aspmts_save) == "0")&&(trim($useragent_aspmts_save) == "0")&&(trim($servername_aspmts_save) == "0")&&(trim($ipservername_aspmts_save) == "0")){
				$pass_check="no";
			}			

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(trim($value_ts) != "")&&(trim($ip_aspmts_save) != "")&&(trim($page_aspmts_save) != "")&&(trim($useragent_aspmts_save) != "")&&(trim($servername_aspmts_save) != "")&&(trim($ipservername_aspmts_save) != "")&&($pass_check == "ok")){

                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){					
                        $pathfileexceptionaspmtoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExceptionAspmToppersystem.txt";

						$value_ts=TopperSystemSetFileSaveExceptionAspmts::code_value_aspmts("$value_ts","$auth_memory");
						$save="$value_ts||||$ip_aspmts_save||||$page_aspmts_save||||$useragent_aspmts_save||||$servername_aspmts_save||||$ipservername_aspmts_save\n";

						#$pathfilesave="../log/ExceptionAspmToppersystem.txt";
                        $pathfilesave="$pathfileexceptionaspmtoppersystem";
						if(file_exists($pathfilesave)){
							$contenuto_file_index_toppersystem=@file_get_contents($pathfilesave);
							if(trim($contenuto_file_index_toppersystem) != ""){
								$ris_salvato="noexist";
								
								$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
								$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
								$contenuto_file_index_toppersystem="";
								
								for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){									
									if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){											
										$array_riga=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
										if(isset($array_riga["5"])){											
											if(trim($array_riga["5"]) != ""){
												if($array_riga["0"] == "$value_ts"){
													$ris_salvato="exist";
												}
											}
										}										
										if(is_array($array_riga)){$array_riga=array();}else{$array_riga="";}										
										$contenuto_file_index_toppersystem_array[$i]=""; 								 
									}									
								}
								if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
								
								if($ris_salvato == "noexist"){
									chmod("$pathfilesave",0644);
									$textfilem=fopen($pathfilesave, "a");
									$scrivim="$save";
									fwrite($textfilem,$scrivim);
									fclose($textfilem);
									chmod("$pathfilesave",0444);
									$textfilem="";
									$scrivim="";									
									
									$scrivi="ok";
								}else{
									$scrivi="$txtts3";
								}
							}else{
								chmod("$pathfilesave",0644);
								$textfilem=fopen($pathfilesave, "w");
								$scrivim="$save";
								fwrite($textfilem,$scrivim);
								fclose($textfilem);
								chmod("$pathfilesave",0444);
								$textfilem="";
								$scrivim="";							
								
								$scrivi="ok";
							}
						}else{
							$textfilem=fopen($pathfilesave, "w");
							$scrivim="$save";
							fwrite($textfilem,$scrivim);
							fclose($textfilem);
							chmod("$pathfilesave",0444);
							$textfilem="";
							$scrivim="";							
							
							$scrivi="ok";
						}					
						
						$contenuto_link_sito_send="$scrivi";

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
@add_action('init', @TopperSystemExecuteFileSaveExceptionAspmts::runts(), 2);
}
}

}
}
}
?>