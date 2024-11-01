<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileReqExceptionsAspmts {
    public static function safeDecrypt($encrypted,$key){
	    $message_decrypter=openssl_decrypt("$encrypted","aes128","$key");
	    $plain=$message_decrypter;
	    return $plain;
    }

    public static function decode_value_aspmts($value,$auth_memory){
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

                $value_decript=TopperSystemSetFileReqExceptionsAspmts::safeDecrypt("$value","$code_memory");
                $return="$value_decript";
		    }else{
                $return="";
		    }
	    }else{
		    $return="";
	    }
	    return $return;
    }
}

class TopperSystemExecuteFileReqExceptionsAspmts {
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
			   $txtts3="Cancella";
			   $txtts4="Nessuna eccezione salvata";
			   $txtts5="Valore";
			   $txtts6="IP";
			   $txtts7="Richiesta";
			   $txtts8="User Agent";
			   $txtts9="Nome Server";
			   $txtts10="IP Server";
			   $txtts11="Azione";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="واضح";
			   $txtts4="لم يتم حفظ أي استثناءات";
			   $txtts5="القيمة";
			   $txtts6="IP";
			   $txtts7="طلب";
			   $txtts8="وكيل المستخدم";
			   $txtts9="اسم الخادم";
			   $txtts10="خادم IP";
			   $txtts11="عمل";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="klar";
			   $txtts4="Keine Ausnahmen gespeichert";
			   $txtts5="Wert";
			   $txtts6="IP";
			   $txtts7="Anfrage";
			   $txtts8="User-Agent";
			   $txtts9="Servername";
			   $txtts10="IP Server";
			   $txtts11="Aktion";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Claro";
			   $txtts4="No hay excepciones guardadas";
			   $txtts5="Valor";
			   $txtts6="IP";
			   $txtts7="Solicitud";
			   $txtts8="Agente de usuario";
			   $txtts9="Nombre del servidor";
			   $txtts10="Servidor IP";
			   $txtts11="Acción";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Clair";
			   $txtts4="Aucune exception enregistrée";
			   $txtts5="Valeur";
			   $txtts6="IP";
			   $txtts7="Demande";
			   $txtts8="Agent utilisateur";
			   $txtts9="Nom du serveur";
			   $txtts10="Serveur IP";
			   $txtts11="Action";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="स्पष्ट";
			   $txtts4="कोई अपवाद नहीं बचा";
			   $txtts5="मूल्य";
			   $txtts6="आईपी";
			   $txtts7="निवेदन";
			   $txtts8="उपभोक्ता अभिकर्ता";
			   $txtts9="सर्वर का नाम";
			   $txtts10="आईपी ​​सर्वर";
			   $txtts11="कार्य";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="晴れ";
			   $txtts4="保存された例外はありません";
			   $txtts5="値";
			   $txtts6="IP";
			   $txtts7="リクエスト";
			   $txtts8="ユーザーエージェント";
			   $txtts9="サーバー名";
			   $txtts10="IPサーバー";
			   $txtts11="アクション";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Jasny";
			   $txtts4="Nie zapisano żadnych wyjątków";
			   $txtts5="Wartość";
			   $txtts6="IP";
			   $txtts7="Żądanie";
			   $txtts8="Agent użytkownika";
			   $txtts9="Nazwa serwera";
			   $txtts10="Serwer IP";
			   $txtts11="Akcja";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Claro";
			   $txtts4="Nenhuma exceção salva";
			   $txtts5="Valor";
			   $txtts6="IP";
			   $txtts7="Solicitação";
			   $txtts8="Agente de usuário";
			   $txtts9="Nome do servidor";
			   $txtts10="Servidor IP";
			   $txtts11="Açao";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Очистить";
			   $txtts4="Исключения не сохранены";
			   $txtts5="Стоимость";
			   $txtts6="IP";
			   $txtts7="Запрос";
			   $txtts8="Пользовательский агент";
			   $txtts9="Название сервера";
			   $txtts10="IP-сервер";
			   $txtts11="действие";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="明确";
			   $txtts4="没有保存例外";
			   $txtts5="值";
			   $txtts6="知识产权";
			   $txtts7="请求";
			   $txtts8="用户代理";
			   $txtts9="服务器名称";
			   $txtts10="IP服务器";
			   $txtts11="行动";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="ברור";
			   $txtts4="לא נשמרו חריגים";
			   $txtts5="ערך";
			   $txtts6="IP";
			   $txtts7="בַּקָשָׁה";
			   $txtts8="סוכן משתמש";
			   $txtts9="שם שרת";
			   $txtts10="שרת IP";
			   $txtts11="פעולה";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Liquet";
			   $txtts4="Non dictarum excepcionium, salvus";
			   $txtts5="Valorem";
			   $txtts6="IP";
			   $txtts7="Request";
			   $txtts8="User Agent";
			   $txtts9="Servo nomen eius";
			   $txtts10="Servo IP";
			   $txtts11="Actum";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Clear";
			   $txtts4="No exceptions saved";
			   $txtts5="Value";
			   $txtts6="IP";
			   $txtts7="Request";
			   $txtts8="User Agent";
			   $txtts9="Server name";
			   $txtts10="IP Server";
			   $txtts11="Action";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){ 
                        $pathfileexceptionaspmtoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExceptionAspmToppersystem.txt";

						$scrivi="";
						
						if(file_exists("$pathfileexceptionaspmtoppersystem")){
							$contenuto_file_index_toppersystem=@file_get_contents("$pathfileexceptionaspmtoppersystem");
							if(trim($contenuto_file_index_toppersystem) != ""){
								$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
								$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
								$contenuto_file_index_toppersystem="";
								
								for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
									
									if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
											
										$array_riga=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
										if(isset($array_riga["5"])){											
											if(trim($array_riga["5"]) != ""){
												$riga_tot=trim($contenuto_file_index_toppersystem_array[$i]);
												$valore=trim($array_riga["0"]);

												$valore=TopperSystemSetFileReqExceptionsAspmts::decode_value_aspmts("$valore","$auth_memory");

                                                if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                                                    $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                                                    $part_url_transform2=site_url();
                                                    $valore=str_replace("$part_url_transform1","$part_url_transform2",$valore);
                                                }

												$valore=strtr($valore, get_html_translation_table(HTML_ENTITIES));
												$ip=trim($array_riga["1"]);
												if($ip == "1"){
													$ip="<span class=\"green_ts\">&check;</span>";
												}else{
													$ip="<span class=\"red_ts\">&cross;</span>";
												}
												
												$page=trim($array_riga["2"]);
												if($page == "1"){
													$page="<span class=\"green_ts\">&check;</span>";
												}else{
													$page="<span class=\"red_ts\">&cross;</span>";
												}												
												
												$user_agent=trim($array_riga["3"]);
												if($user_agent == "1"){
													$user_agent="<span class=\"green_ts\">&check;</span>";
												}else{
													$user_agent="<span class=\"red_ts\">&cross;</span>";
												}
												
												$server_name=trim($array_riga["4"]);
												if($server_name == "1"){
													$server_name="<span class=\"green_ts\">&check;</span>";
												}else{
													$server_name="<span class=\"red_ts\">&cross;</span>";
												}												
												
												$ip_server_name=trim($array_riga["5"]);
												if($ip_server_name == "1"){
													$ip_server_name="<span class=\"green_ts\">&check;</span>";
												}else{
													$ip_server_name="<span class=\"red_ts\">&cross;</span>";
												}						
	
												$scrivi.="<tr><td class=\"eventstd_ts\">$valore</td><td class=\"eventstd_ts\"><center>$ip</center></td><td class=\"eventstd_ts\"><center>$page</center></td><td class=\"eventstd_ts\"><center>$user_agent</center></td><td class=\"eventstd_ts\"><center>$server_name</center></td><td class=\"eventstd_ts\"><center>$ip_server_name</center></td><td class=\"eventstd_ts\"><center><a rel=\"nofollow\" href=\"javascript:delete_exception_aspmts('$riga_tot');\">$txtts3</a></center></td>";
												
												$riga_tot="";
												$valore="";
												$ip="";
												$page="";
												$user_agent="";
												$server_name="";
												$ip_server_name="";
											}											
										}
										
										if(is_array($array_riga)){$array_riga=array();}else{$array_riga="";}										
										$contenuto_file_index_toppersystem_array[$i]=""; 								 
									}
									
								}
								if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
								
								if($scrivi == ""){
									$scrivi="<div class=\"pxddinglx12\">$txtts4</div>";
								}else{
									$scrivi="<table class=\"eventstables_ts margin0\"><tr><td class=\"eventstd_ts\"><strong>$txtts5</strong></td><td class=\"eventstd_ts\"><center><strong>$txtts6</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts7</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts8</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts9</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts10</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts11</strong></center></td></tr>$scrivi</tr></table>";
								}								
							}else{
								$scrivi="<div class=\"pxddinglx12\">$txtts4</div>";
							}
						}else{
							$scrivi="<div class=\"pxddinglx12\">$txtts4</div>";
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

			echo "<textarea>".esc_textarea("$contenuto_link_sito_send")."</textarea>";

        }
    }
}
}
}
if(( current_user_can( 'administrator' ) )){
@add_action('init', @TopperSystemExecuteFileReqExceptionsAspmts::runts(), 2);
}
}

}
}
}
?>