<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemExecuteFileintelligence_artificial_ts {
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
			   $txtts6="Applica le modifiche apportate";
			   $txtts7="Salva";
			   $txtts8="Annulla";
			   $txtts3="Inserisci la tua API Key di Chat GPT";
			   $txtts4="I meta dati title e description saranno corretti da Chat GPT 3.5 Turbo su tutte le pagine che desideri.";
			   $txtts5="I costi del servizio sono calcolati e applicati direttamente da Open AI.";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts6="قم بتطبيق التغييرات التي تم إجراؤها";
			   $txtts7="يحفظ";
			   $txtts8="يلغي";
			   $txtts3="أدخل مفتاح GPT Chat API الخاص بك";
			   $txtts4="سيتم تصحيح البيانات التعريفية للعنوان والوصف بواسطة Chat GPT 3.5 Turbo على أي عدد تريده من الصفحات.";
			   $txtts5="يتم حساب تكاليف الخدمة وتطبيقها مباشرة بواسطة Open AI.";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts6="Wenden Sie die vorgenommenen Änderungen an";
			   $txtts7="Speichern";
			   $txtts8="Absagen";
			   $txtts3="Geben Sie Ihren GPT-Chat-API-Schlüssel ein";
			   $txtts4="Die Titel- und Beschreibungsmetadaten werden von Chat GPT 3.5 Turbo auf beliebig vielen Seiten korrigiert.";
			   $txtts5="Servicekosten werden direkt von Open AI berechnet und angewendet.";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts6="Aplicar los cambios realizados";
			   $txtts7="Guardar";
			   $txtts8="Cancelar";
			   $txtts3="Ingrese su clave API de chat GPT";
			   $txtts4="Chat GPT 3.5 Turbo corregirá los metadatos del título y la descripción en tantas páginas como desee.";
			   $txtts5="Los costos del servicio son calculados y aplicados directamente por Open AI.";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts6="Appliquer les modifications apportées";
			   $txtts7="Sauver";
			   $txtts8="Annuler";
			   $txtts3="Entrez votre clé API GPT Chat";
			   $txtts4="Les métadonnées du titre et de la description seront corrigées par Chat GPT 3.5 Turbo sur autant de pages que vous le souhaitez.";
			   $txtts5="Les coûts de service sont calculés et appliqués directement par Open AI.";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts6="किए गए परिवर्तनों को लागू करें";
			   $txtts7="बचाना";
			   $txtts8="रद्द करना";
			   $txtts3="अपनी GPT चैट API कुंजी दर्ज करें";
			   $txtts4="शीर्षक और विवरण मेटा डेटा को चैट जीपीटी 3.5 टर्बो द्वारा जितने चाहें उतने पृष्ठों पर सही किया जाएगा।";
			   $txtts5="सेवा लागत की गणना और सीधे ओपन एआई द्वारा लागू की जाती है।";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts6="行った変更を適用します";
			   $txtts7="保存する";
			   $txtts8="キャンセル";
			   $txtts3="GPT チャット API キーを入力してください";
			   $txtts4="タイトルと説明のメタデータは、必要なページ数だけ Chat GPT 3.5 Turbo によって修正されます。";
			   $txtts5="サービスコストは Open AI によって直接計算および適用されます。";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts6="Zastosuj wprowadzone zmiany";
			   $txtts7="Ratować";
			   $txtts8="Anulować";
			   $txtts3="Wpisz swój klucz API czatu GPT";
			   $txtts4="Metadane tytułu i opisu zostaną poprawione przez Chat GPT 3.5 Turbo na dowolnej liczbie stron.";
			   $txtts5="Koszty usług są obliczane i naliczane bezpośrednio przez Open AI.";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts6="Aplique as alterações feitas";
			   $txtts7="Salve";
			   $txtts8="Cancelar";
			   $txtts3="Insira sua chave de API do GPT Chat";
			   $txtts4="Os metadados de título e descrição serão corrigidos pelo Chat GPT 3.5 Turbo em quantas páginas você desejar.";
			   $txtts5="Os custos do serviço são calculados e aplicados diretamente pela Open AI.";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts6="Примените внесенные изменения";
			   $txtts7="Сохранять";
			   $txtts8="Отмена";
			   $txtts3="Введите свой ключ API чата GPT";
			   $txtts4="Метаданные заголовка и описания будут исправлены Chat GPT 3.5 Turbo на любом количестве страниц.";
			   $txtts5="Стоимость услуг рассчитывается и применяется непосредственно Open AI.";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts6="Apply the changes made";
			   $txtts7="节省";
			   $txtts8="取消";
			   $txtts3="输入您的 GPT 聊天 API 密钥";
			   $txtts4="Chat GPT 3.5 Turbo 将在您想要的任意多个页面上更正标题和描述元数据。";
			   $txtts5="服务成本由 Open AI 直接计算和应用。";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts6="החל את השינויים שבוצעו";
			   $txtts7="להציל";
			   $txtts8="לְבַטֵל";
			   $txtts3="הזן את מפתח ה-API של GPT Chat";
			   $txtts4="מטא נתוני הכותרת והתיאור יתוקנו על ידי Chat GPT 3.5 Turbo בכמה דפים שתרצו.";
			   $txtts5="עלויות השירות מחושבות ומיושמות ישירות על ידי Open AI.";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts6="Applicare mutationes factae";
			   $txtts7="Salvare";
			   $txtts8="Cancel";
			   $txtts3="Nulla GPT Chat API Key";
			   $txtts4="Titulus et descriptio meta notitiarum a Chat GPT 3.5 Turbo emendabuntur quot paginas quot vis.";
			   $txtts5="Sumptus servitii computantur et directe applicantur ab Open AI.";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts6="Apply the changes made";
			   $txtts7="Save";
			   $txtts8="Cancel";
			   $txtts3="Enter your GPT Chat API Key";
			   $txtts4="The title and description meta data will be corrected by Chat GPT 3.5 Turbo on as many pages as you want.";
			   $txtts5="Service costs are calculated and applied directly by Open AI.";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        if(file_exists(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/openai.php")){
                            include(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/openai.php");
                            if(isset($par_apikeyopenai_toppersystem)){
                                if(empty($par_apikeyopenai_toppersystem)){
                                    $par_apikeyopenai_toppersystem="";
                                }
                            }else{
                                $par_apikeyopenai_toppersystem="";
                            }
                        }else{
	                        $par_apikeyopenai_toppersystem="";
                        }

                        $add_position="<tr><td class=\"eventstd_ts\" style=\"background-color: #dcd7ca;\"><small><i>$txtts3</i><br><strong>$txtts4</strong><br><br></small><input id=\"intelligence_artificial_ts_service_save\" name=\"intelligence_artificial_ts_service_save\" type=\"text\" placeholder=\"\" value=\"".$par_apikeyopenai_toppersystem."\" class=\"inputform_toppersystem\"> <i>API Key</i><br><br><small><strong>(i)</strong> $txtts5</small></td><td class=\"eventstd_ts\" style=\"background-color: #dcd7ca;\">&nbsp;</td></tr>";
						
                        $add_save="<tr><td class=\"eventstd_ts\" style=\"background-color: #dcd7ca;\"><small>$txtts6</small></td><td class=\"eventstd_ts\" style=\"width:20%;\"><div id=\"block_save_details_intelligence_artificial_ts_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_events_intelligence_artificial_ts_toppersystem();\">$txtts7</a>&nbsp;&nbsp;<a rel=\"nofollow\" href=\"javascript:close_events_intelligence_artificial_ts_toppersystem();\">$txtts8</a></div><div id=\"block_save_details_loading_intelligence_artificial_ts_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></td></tr>";
							
                        $box_general="<div id=\"box_general_request_events_toppersystem\"><table class=\"eventstables_ts margin0\">".$add_position."".$add_save."</table></div>";
					
						$contenuto_link_sito_send="$box_general";
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
@add_action('init', @TopperSystemExecuteFileintelligence_artificial_ts::runts(), 2);
}
}

}
}
}
?>