<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemExecuteFileblock_stage_websitets {
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
			   $txtts3="Indirizzo rilevato";
			   $txtts4="Indirizzo di stage";
			   $txtts5="Per farlo segui le istruzioni, è molto semplice e veloce:";
			   $txtts9="In caso la url di stage sia ad es: https://tuosito.com/stage e quella di produzione sia https://tuosito.com non dovrai apportare modifiche al pannello relativo la ApiKey registrata.";
			   $txtts10="In caso la url di stage sia ad es: https://stage.tuosito.com e quella di produzione sia https://tuosito.com dovrai aggiungere al pannello relativo la ApiKey registrata.";
			   $txtts11="1) Accedi su Api Center Topper System:";
			   $txtts12="2) Clicca su \"modifica\" in corrispondenza l'ApiKey del sito";
			   $txtts14="3) Aggiungi il nome a dominio che corrisponde al tuo sito in produzione";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts6="قم بتطبيق التغييرات التي تم إجراؤها";
			   $txtts7="يحفظ";
			   $txtts8="يلغي";
                $txtts3="تم الكشف عن العنوان";
                $txtts4​​="عنوان التدريب";
                $txtts5="للقيام بذلك ، اتبع التعليمات ، الأمر بسيط وسريع جدًا:";
                $txtts9="إذا كان عنوان url الخاص بالمرحلة على سبيل المثال: https://yoursite.com/stage وعنوان URL للإنتاج هو https://yoursite.com ، فلن تضطر إلى إجراء أي تغييرات على اللوحة المتعلقة بـ ApiKey المسجل.";
                $txtts10="إذا كان عنوان url الخاص بالمرحلة على سبيل المثال: https://stage.yoursite.com وعنوان URL للإنتاج هو https://yoursite.com ، فستحتاج إلى إضافة مفتاح ApiKey المسجل إلى اللوحة ذات الصلة.";
                $txtts11="1) تسجيل الدخول إلى نظام Api Center Topper:";
                $txtts12="2) انقر فوق تعديل المقابل لمفتاح ApiKey الخاص بالموقع";
                $txtts14="3) أضف اسم المجال الذي يتوافق مع موقعك في الإنتاج";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts6="Wenden Sie die vorgenommenen Änderungen an";
			   $txtts7="Speichern";
			   $txtts8="Absagen";
                $txtts3="Adresse erkannt";
                $txtts4="Praktikumsadresse";
                $txtts5="Folgen Sie dazu den Anweisungen, es geht ganz einfach und schnell:";
                $txtts9="Wenn die Bühnen-URL beispielsweise https://yoursite.com/stage und die Produktions-URL https://yoursite.com lautet, müssen Sie keine Änderungen am Panel vornehmen, die sich auf den registrierten ApiKey beziehen.";
                $txtts10="Wenn die Bühnen-URL beispielsweise https://stage.yoursite.com und die Produktions-URL https://yoursite.com lautet, müssen Sie den registrierten ApiKey zum entsprechenden Panel hinzufügen.";
                $txtts11="1) Melden Sie sich beim Api Center Topper System an:";
                $txtts12="2) Klicken Sie auf „Bearbeiten“, entsprechend dem ApiKey der Site";
                $txtts14="3) Fügen Sie den Domänennamen hinzu, der Ihrer Site in der Produktion entspricht";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts6="Aplicar los cambios realizados";
			   $txtts7="Guardar";
			   $txtts8="Cancelar";
                $txtts3="Dirección detectada";
                $txtts4="Dirección de prácticas";
                $txtts5="Para ello sigue las instrucciones, es muy sencillo y rápido:";
                $txtts9="Si la URL de etapa es, por ejemplo: https://yoursite.com/stage y la URL de producción es https://yoursite.com, no tendrá que realizar ningún cambio en el panel relacionado con la ApiKey registrada. ";
                $txtts10="Si la URL de etapa es, por ejemplo: https://stage.yoursite.com y la URL de producción es https://yoursite.com, deberá agregar la ApiKey registrada al panel correspondiente.";
                $txtts11="1) Iniciar sesión en Api Center Topper System:";
                $txtts12="2) Haga clic en \"editar\" correspondiente a la ApiKey del sitio";
                $txtts14="3) Agrega el nombre de dominio que corresponde a tu sitio en producción";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts6="Appliquer les modifications apportées";
			   $txtts7="Sauver";
			   $txtts8="Annuler";
                $txtts3="Adresse trouvée";
                $txtts4="Adresse du stage";
                $txtts5="Pour cela, suivez les instructions, c'est très simple et rapide :";
                $txtts9="Si l'url de stage est par exemple : https://votresite.com/stage et que l'url de production est https://votresite.com vous n'aurez pas à apporter de modifications au panel relatif à l'ApiKey enregistrée. ";
                $txtts10="Si l'url de stage est par exemple : https://stage.yoursite.com et que l'url de production est https://yoursite.com, vous devrez ajouter l'ApiKey enregistrée au panneau relatif.";
                $txtts11="1) Connectez-vous au système Api Center Topper :";
                $txtts12="2) Cliquez sur \"modifier\" correspondant à l'ApiKey du site";
                $txtts14="3) Ajoutez le nom de domaine qui correspond à votre site en production";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts6="किए गए परिवर्तनों को लागू करें";
			   $txtts7="बचाना";
			   $txtts8="रद्द करना";
                $txtts3="पता पता चला";
                $txtts4="इंटर्नशिप पता";
                $txtts5="ऐसा करने के लिए, निर्देशों का पालन करें, यह बहुत सरल और तेज़ है:";
                $txtts9="उदाहरण के लिए यदि स्टेज यूआरएल है: https://yoursite.com/stage और प्रोडक्शन यूआरएल https://yoursite.com है तो आपको पंजीकृत ApiKey से संबंधित पैनल में कोई बदलाव नहीं करना होगा। ";
                $txtts10="उदाहरण के लिए यदि स्टेज यूआरएल है: https://stage.yoursite.com और प्रोडक्शन यूआरएल https://yoursite.com है तो आपको पंजीकृत ApiKey को संबंधित पैनल में जोड़ना होगा।";
                $txtts11="1) एपीआई सेंटर टॉपर सिस्टम में लॉगिन करें:";
                $txtts12="2) साइट के ApiKey के अनुरूप \"संपादित करें\" पर क्लिक करें";
                $txtts14="3) वह डोमेन नाम जोड़ें जो उत्पादन में आपकी साइट से मेल खाता हो";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts6="行った変更を適用します";
			   $txtts7="保存する";
			   $txtts8="キャンセル";
                $txtts3="アドレスが検出されました";
                $txtts4​​="インターンシップの住所";
                $txtts5="これを行うには、指示に従ってください。非常に簡単で高速です:";
                $txtts9="ステージ URL がたとえば https://yoursite.com/stage で、本番 URL が https://yoursite.com である場合、登録された ApiKey に関連するパネルに変更を加える必要はありません。";
                $txtts10="ステージ URL が https://stage.yoursite.com で、プロダクション URL が https://yoursite.com である場合、登録された ApiKey を関連するパネルに追加する必要があります。";
                $txtts11="1) API Center Topper システムにログインします:";
                $txtts12="2) サイトの ApiKey に対応する「編集」をクリックします。";
                $txtts14="3) 本番環境のサイトに対応するドメイン名を追加します";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts6="Zastosuj wprowadzone zmiany";
			   $txtts7="Ratować";
			   $txtts8="Anulować";
                $txtts3="Wykryto adres";
                $txtts4="Adres stażu";
                $txtts5="Aby to zrobić, postępuj zgodnie z instrukcjami, jest to bardzo proste i szybkie:";
                $txtts9="Jeśli adres url etapu to na przykład: https://yoursite.com/stage a url produkcji to https://yoursite.com nie będziesz musiał wprowadzać żadnych zmian w panelu związanych z zarejestrowanym kluczem ApiKey. ";
                $txtts10="Jeśli adres url etapu to na przykład: https://stage.yoursite.com, a url produkcji to https://yoursite.com, musisz dodać zarejestrowany klucz ApiKey do odpowiedniego panelu.";
                $txtts11="1) Zaloguj się do systemu Api Center Topper:";
                $txtts12="2) Kliknij \"edytuj\" odpowiadające kluczowi ApiKey witryny";
                $txtts14="3) Dodaj nazwę domeny odpowiadającą Twojej witrynie w produkcji";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts6="Aplique as alterações feitas";
			   $txtts7="Salve";
			   $txtts8="Cancelar";
                $txtts3="Endereço detectado";
                $txtts4="Endereço do estágio";
                $txtts5="Para isso, siga as instruções, é muito simples e rápido:";
                $txtts9="Se a url do palco for por exemplo: https://seusite.com/stage e a url da produção for https://seusite.com você não precisará fazer nenhuma alteração no painel referente ao ApiKey registrado. ";
                $txtts10="Se a url do estágio for, por exemplo: https://stage.yoursite.com e a url da produção for https://yoursite.com, você precisará adicionar o ApiKey registrado ao painel relevante.";
                $txtts11="1) Acesse o sistema Api Center Topper:";
                $txtts12="2) Clique em \"editar\" correspondente ao ApiKey do site";
                $txtts14="3) Adicione o nome de domínio correspondente ao seu site em produção";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts6="Примените внесенные изменения";
			   $txtts7="Сохранять";
			   $txtts8="Отмена";
                $txtts3="Адрес найден";
                $txtts4="Адрес стажировки";
                $txtts5="Для этого следуйте инструкциям, это очень просто и быстро:";
                $txtts9="Если URL-адрес стадии, например: https://yoursite.com/stage, а рабочий URL-адрес - https://yoursite.com, вам не нужно будет вносить какие-либо изменения в панель, связанные с зарегистрированным ключом ApiKey. ";
                $txtts10="Если URL-адрес сцены, например: https://stage.yoursite.com, а рабочий URL-адрес - https://yoursite.com, вам нужно будет добавить зарегистрированный ключ ApiKey на соответствующую панель.";
                $txtts11="1) Войдите в систему Api Center Topper:";
                $txtts12="2) Нажмите \"изменить\", соответствующий ApiKey сайта";
                $txtts14="3) Добавьте доменное имя, соответствующее вашему рабочему сайту";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts6="Apply the changes made";
			   $txtts7="节省";
			   $txtts8="取消";
                $txtts3="找到地址";
                $txtts4​​="实习地址";
                $txtts5="要执行此操作，请按照说明进行操作，非常简单快捷：";
                $txtts9="例如，如果阶段 URL 为：https://yoursite.com/stage 并且生产 URL 为 https://yoursite.com，则您无需对与注册 ApiKey 相关的面板进行任何更改。";
                $txtts10="如果阶段 URL 例如：https://stage.yoursite.com，生产 URL 是 https://yoursite.com，则需要将注册的 ApiKey 添加到相关面板。";
                $txtts11="1) 登录Api Center Topper系统：";
                $txtts12="2) 点击站点ApiKey对应的 编辑";
                $txtts14="3) 添加与您的生产站点相对应的域名";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts6="החל את השינויים שבוצעו";
			   $txtts7="להציל";
			   $txtts8="לְבַטֵל";
                $txtts3="נמצאה כתובת";
                $txtts4="כתובת התמחות";
                $txtts5="כדי לעשות זאת, עקוב אחר ההוראות, זה מאוד פשוט ומהיר:";
                $txtts9="אם כתובת האתר של הבמה היא למשל: https://yoursite.com/stage וכתובת האתר של הייצור היא https://yoursite.com, לא תצטרכו לבצע שינויים כלשהם בפאנל המתייחס ל-ApiKey הרשום. ";
                $txtts10="אם כתובת האתר של הבמה היא למשל: https://stage.yoursite.com וכתובת האתר של הייצור היא https://yoursite.com, תצטרכו להוסיף את ה-ApiKey הרשום לפאנל הרלוונטי.";
                $txtts11="1) כניסה למערכת Api Center Topper:";
                $txtts12="2) לחץ על ערוך המתאים ל-ApiKey של האתר";
                $txtts14="3) הוסף את שם הדומיין המתאים לאתר שלך בייצור";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts6="Applicare mutationes factae";
			   $txtts7="Salvare";
			   $txtts8="Cancel";
                $txtts3="Oratio inventa";
                $txtts4="Internship address";
                $txtts5="Hoc facere, praecepta sequere, simplex et ieiunium est";
                $txtts9="Si theatrum domicilium est exempli causa: https://yoursite.com/stage et productio url est https://yoursite.com non habebis mutationes in tabula referente ApiKey descripserunt.";
                $txtts10="Si scenae domicilium est exempli causa: https://stage.yoursite.com et productio url est https://yoursite.com necesse est addere descriptum ApiKey ad tabulam pertinentem";
                $txtts11="1) Login to Api Center Topper System:";
                $txtts12="2) Click on \"edit\" correspondens situs ApiKey";
                $txtts14="3) Adde nomen regio, quod tuo situ in productione correspondet"; 
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts6="Apply the changes made";
			   $txtts7="Save";
			   $txtts8="Cancel";
                $txtts3="Address detected";
                $txtts4="Internship address";
                $txtts5="To do this, follow the instructions, it's very simple and fast:";
                $txtts9="If the stage url is for example: https://yoursite.com/stage and the production url is https://yoursite.com you will not have to make any changes to the panel relating to the registered ApiKey.";
                $txtts10="If the stage url is for example: https://stage.yoursite.com and the production url is https://yoursite.com you will need to add the registered ApiKey to the relative panel.";
                $txtts11="1) Login to Api Center Topper System:";
                $txtts12="2) Click on \"edit\" corresponding to the site's ApiKey";
                $txtts14="3) Add the domain name that corresponds to your site in production";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        if(file_exists(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/par_service.php")){
                            include(TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql/api/par_service.php");
                            if(isset($par_status_prtoppersystemts_toppersystem)){
                                if(empty($par_status_prtoppersystemts_toppersystem)){
                                    $par_status_prtoppersystemts_toppersystem="$resend_toppersystem";
                                }
                            }else{
                                $par_status_prtoppersystemts_toppersystem="$resend_toppersystem";
                            }
                            $contenuto_file_siste_stage_toppersystem="$par_status_prtoppersystemts_toppersystem";

                        }else{
	                        $contenuto_file_siste_stage_toppersystem="$resend_toppersystem";
                        }

                        $add_position="<tr><td class=\"eventstd_ts\"><small><i>$txtts3</i><br><strong>$resend_toppersystem</strong><br><br></small><i>$txtts4</i><br><input id=\"block_stage_websitets_service_save\" name=\"block_stage_websitets_service_save\" type=\"text\" placeholder=\"\" value=\"".$contenuto_file_siste_stage_toppersystem."\" class=\"inputform_toppersystem\"><input id=\"block_stage_websitets_service_save_old\" name=\"block_stage_websitets_service_save_old\" type=\"hidden\" value=\"".$contenuto_file_siste_stage_toppersystem."\"><br><br><small><strong>(i)</strong> $txtts9<br><br><strong>(i)</strong> $txtts10<br><strong>$txtts5</strong><br>$txtts11 <a target=\"_blank\" href=\"https://www.toppersystem.com/apicenter/login.php?lang=$hreflang_toppersystem\">https://www.toppersystem.com/apicenter/</a><br>$txtts12<br>$txtts14</small></td><td class=\"eventstd_ts\">&nbsp;</td></tr>";
						
                        $add_save="<tr><td class=\"eventstd_ts\"><small>$txtts6</small></td><td class=\"eventstd_ts\" style=\"width:20%;\"><div id=\"block_save_details_block_stage_websitets_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_events_block_stage_websitets_toppersystem();\">$txtts7</a>&nbsp;&nbsp;<a rel=\"nofollow\" href=\"javascript:close_events_block_stage_websitets_toppersystem();\">$txtts8</a></div><div id=\"block_save_details_loading_block_stage_websitets_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></td></tr>";
							
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
@add_action('init', @TopperSystemExecuteFileblock_stage_websitets::runts(), 2);
}
}

}
}
}
?>