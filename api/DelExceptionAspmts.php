<?php
if(isset($TopperSystemCpermFileinApi)){
	if(!empty($TopperSystemCpermFileinApi)){
		if($TopperSystemCpermFileinApi == "0123"){

            if(isset($_POST["authcode_toppersystem"])) {
            require("safeclass.php");

            class TopperSystemExecuteFileDelExceptionAspmts {
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

			            if((isset($_POST["req"]) && trim($_POST["req"]) != "")) {
		                    $req_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['req'])), array());	
	                    }else{
		                    $req_toppersystem="";
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

	                    if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&(trim($req_toppersystem) != "")){

                            $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                            if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                                $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                                if(($authcode_toppersystem_verifica == "$auth_memory")){
						            $pathfileexceptionaspmtoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExceptionAspmToppersystem.txt";

                                    $pathfilesave="$pathfileexceptionaspmtoppersystem";
						            if(file_exists($pathfilesave)){
							            $contenuto_file_index_toppersystem=@file_get_contents($pathfilesave);
							            if(trim($contenuto_file_index_toppersystem) != ""){
								            $contenuto_file_index_toppersystem_new=str_replace("$req_toppersystem\n","",$contenuto_file_index_toppersystem);
								            if($contenuto_file_index_toppersystem_new != "$contenuto_file_index_toppersystem"){
									            chmod("$pathfilesave",0644);
                                                if(trim($contenuto_file_index_toppersystem_new) != ""){
									                $textfilem=fopen($pathfilesave, "w");
									                $scrivim="$contenuto_file_index_toppersystem_new";
									                fwrite($textfilem,$scrivim);
									                fclose($textfilem);
									                chmod("$pathfilesave",0444);
									                $textfilem="";
									                $scrivim="";
                                                }else{
                                                    @unlink($pathfilesave);
								                }
									            $scrivi="ok";
								            }else{
									            $scrivi="no";
								            }
							            }else{
								            $scrivi="no";
							            }
						            }else{
							            $scrivi="no";
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
            @add_action('init', @TopperSystemExecuteFileDelExceptionAspmts::runts(), 2);
            }
            }
		}
	}
}
?>