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
               $italy_ts="Italia";
               $italian_ts="Italiano";   
		       $txtts0="Verifica le autorizzazioni per utilizzare Topper System SEO"; 
               $txtts1="Verifica le autorizzazioni per utilizzare Topper System SEO";
               $txtts2="Qualcosa è andato storto. Assicurati di aver copilato correttamente il form e riprova.";
		       $txtts3="Lingua";
		       $txtts4="Codice accettato";
		       $txtts5="Download";
		       $txtts6="Esporta i dati delle ottimizzazioni su file CSV";
		       $txtts7="Upload file CSV";
		       $txtts8="lingue accettate";
		       $txtts9="Importa";
            }else if($hreflang_toppersystem == "ar"){
               $italy_ts="Italy";
               $italian_ts="Italian"; 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
		       $txtts3="لسان";
		       $txtts4="تم قبول الرمز";
		       $txtts5="التحميلات";
		       $txtts6="تصدير بيانات التحسين إلى ملف CSV";
		       $txtts7="تحميل ملف CSV";
		       $txtts8="اللغات المقبولة";
		       $txtts9="يستورد";
            }else if($hreflang_toppersystem == "de"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
		       $txtts3="Zunge";
		       $txtts4="Code akzeptiert";
		       $txtts5="Downloads";
		       $txtts6="Optimierungsdaten in eine CSV-Datei exportieren";
		       $txtts7="CSV-Datei hochladen";
		       $txtts8="Sprachen akzeptiert";
		       $txtts9="Importieren";
            }else if($hreflang_toppersystem == "es"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
		       $txtts3="Lengua";
		       $txtts4="Código aceptado";
		       $txtts5="Descargas";
		       $txtts6="Exportar datos de optimización a un archivo CSV";
		       $txtts7="Subir archivo CSV";
		       $txtts8="idiomas aceptados";
		       $txtts9="Importar";
            }else if($hreflang_toppersystem == "fr"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
		       $txtts3="Langue";
		       $txtts4="Code accepté";
		       $txtts5="Téléchargements";
		       $txtts6="Exporter les données d'optimisation vers un fichier CSV";
		       $txtts7="Télécharger le fichier CSV";
		       $txtts8="langues acceptées";
		       $txtts9="Importer";
            }else if($hreflang_toppersystem == "hi"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
		       $txtts3="जीभ";
		       $txtts4="कोड स्वीकृत";
		       $txtts5="डाउनलोड";
		       $txtts6="सीएसवी फ़ाइल में अनुकूलन डेटा निर्यात करें";
		       $txtts7="सीएसवी फ़ाइल अपलोड करें";
		       $txtts8="भाषाएँ स्वीकृत";
		       $txtts9="आयात";
            }else if($hreflang_toppersystem == "ja"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
		       $txtts3="舌";
		       $txtts4="コードが受け入れられました";
		       $txtts5="ダウンロード";
		       $txtts6="最適化データをCSVファイルにエクスポート";
		       $txtts7="CSVファイルをアップロードする";
		       $txtts8="受け入れられる言語";
		       $txtts9="輸入";
            }else if($hreflang_toppersystem == "pl"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
		       $txtts3="Język";
		       $txtts4="Kod zaakceptowany";
		       $txtts5="Pliki do pobrania";
		       $txtts6="Eksportuj dane optymalizacyjne do pliku CSV";
		       $txtts7="Prześlij plik CSV";
		       $txtts8="akceptowane języki";
		       $txtts9="Import";
            }else if($hreflang_toppersystem == "pt"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
		       $txtts3="Língua";
		       $txtts4="Código aceito";
		       $txtts5="Transferências";
		       $txtts6="Exportar dados de otimização para arquivo CSV";
		       $txtts7="Carregar arquivo CSV";
		       $txtts8="idiomas aceitos";
		       $txtts9="Importar";
            }else if($hreflang_toppersystem == "ru"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
		       $txtts3="Язык";
		       $txtts4="Код принят";
		       $txtts5="Загрузки";
		       $txtts6="Экспорт данных оптимизации в файл CSV.";
		       $txtts7="Загрузить CSV-файл";
		       $txtts8="языки принимаются";
		       $txtts9="Импортировать";
            }else if($hreflang_toppersystem == "zh"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
		       $txtts3="舌头";
		       $txtts4="代码已接受";
		       $txtts5="下载";
		       $txtts6="将优化数据导出到 CSV 文件";
		       $txtts7="上传 CSV 文件";
		       $txtts8="接受的语言";
		       $txtts9="进口";
            }else if($hreflang_toppersystem == "he"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
		       $txtts3="לָשׁוֹן";
		       $txtts4="הקוד מתקבל";
		       $txtts5="הורדות";
		       $txtts6="ייצוא נתוני אופטימיזציה לקובץ CSV";
		       $txtts7="העלה קובץ CSV";
		       $txtts8="שפות מקובלות";
		       $txtts9="יְבוּא";
            }else if($hreflang_toppersystem == "la"){
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
		       $txtts3="lingua";
		       $txtts4="Code accepit";
		       $txtts5="Downloads";
		       $txtts6="Optimization exportare notitias ad fasciculum CSV";
		       $txtts7="CSV fasciculi onerati";
		       $txtts8="linguae accepit";
		       $txtts9="Import";
            }else{
               $italy_ts="Italy";
               $italian_ts="Italian";
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
		       $txtts3="Tongue";
		       $txtts4="Code accepted";
		       $txtts5="Downloads";
		       $txtts6="Export optimization data to CSV file";
		       $txtts7="Upload CSV file";
		       $txtts8="languages accepted";
		       $txtts9="Import";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        $language_accept = [
                            ['Abkhazian (ab)', 'ab'],
                            ['Abkhazian - Russian Federation (ab-RU)', 'ab-RU'],
                            ['Afar (aa)', 'aa'],
                            ['Afar - Ethiopia (aa-ET)', 'aa-ET'],
                            ['Afrikaans (af)', 'af'],
                            ['Afrikaans - South Africa (af-ZA)', 'af-ZA'],
                            ['Akan (ak)', 'ak'],
                            ['Akan - Ghana (ak-GH)', 'ak-GH'],
                            ['Albanian (sq)', 'sq'],
                            ['Albanian - Albania (sq-AL)', 'sq-AL'],
                            ['Albanian - Kosovo (sq-KS)', 'sq-KS'],
                            ['Amharic (am)', 'am'],
                            ['Amharic - Ethiopia (am-ET)', 'am-ET'],
                            ['Arabic (ar)', 'ar'],
                            ['Arabic - Arabic (ar-AR)', 'ar-AR'],
                            ['Arabic - Algeria (ar-DZ)', 'ar-DZ'],
                            ['Arabic - Bahrain (ar-BH)', 'ar-BH'],
                            ['Arabic - Chad (ar-TD)', 'ar-TD'],
                            ['Arabic - Comoros (ar-KM)', 'ar-KM'],
                            ['Arabic - Djibouti (ar-DJ)', 'ar-DJ'],
                            ['Arabic - Egypt (ar-EG)', 'ar-EG'],
                            ['Arabic - Eritrea (ar-ER)', 'ar-ER'],
                            ['Arabic - Iraq (ar-IQ)', 'ar-IQ'],
                            ['Arabic - Israel (ar-IL)', 'ar-IL'],
                            ['Arabic - Jordan (ar-JO)', 'ar-JO'],
                            ['Arabic - Kuwait (ar-KW)', 'ar-KW'],
                            ['Arabic - Lebanon (ar-LB)', 'ar-LB'],
                            ['Arabic - Libya (ar-LY)', 'ar-LY'],
                            ['Arabic - Mauritania (ar-MR)', 'ar-MR'],
                            ['Arabic - Morocco (ar-MA)', 'ar-MA'],
                            ['Arabic - Oman (ar-OM)', 'ar-OM'],
                            ['Arabic - Qatar (ar-QA)', 'ar-QA'],
                            ['Arabic - Saudi Arabia (ar-SA)', 'ar-SA'],
                            ['Arabic - Somalia (ar-SO)', 'ar-SO'],
                            ['Arabic - Sudan (ar-SD)', 'ar-SD'],
                            ['Arabic - Syria (ar-SY)', 'ar-SY'],
                            ['Arabic - Tunisia (ar-TN)', 'ar-TN'],
                            ['Arabic - United Arab Emirates (ar-AE)', 'ar-AE'],
                            ['Arabic - West Bank and Gaza (ar-PS)', 'ar-PS'],
                            ['Arabic - Western Sahara (ar-EH)', 'ar-EH'],
                            ['Arabic - Yemen (ar-YE)', 'ar-YE'],
                            ['Aragonese (an)', 'an'],
                            ['Aragonese - Spain (an-ES)', 'an-ES'],
                            ['Aragonés - Spain (an-ES)', 'an-ES'],
                            ['Armenian (hy)', 'hy'],
                            ['Armenian - Armenia (hy-AM)', 'hy-AM'],
                            ['Assamese (as)', 'as'],
                            ['Assamese - India (as-IN)', 'as-IN'],
                            ['Avaric (av)', 'av'],
                            ['Avaric - Russian Federation (av-RU)', 'av-RU'],
                            ['Avestan (ae)', 'ae'],
                            ['Avestan - Afghanistan (ae-AF)', 'ae-AF'],
                            ['Avestan - China (ae-CN)', 'ae-CN'],
                            ['Avestan - Iran (ae-IR)', 'ae-IR'],
                            ['Avestan - Mongolia (ae-MN)', 'ae-MN'],
                            ['Avestan - Russian Federation (ae-RU)', 'ae-RU'],
                            ['Aymara (ay)', 'ay'],
                            ['Aymara - Bolivia (ay-BO)', 'ay-BO'],
                            ['Aymara - Chile (ay-CL)', 'ay-CL'],
                            ['Aymara - Peru (ay-PE)', 'ay-PE'],
                            ['Azerbaijani (az)', 'az'],
                            ['Azerbaijani - Azerbaijan (az-AZ)', 'az-AZ'],
                            ['Azerbaijani - Afghanistan (az-AF)', 'az-AF'],
                            ['Azerbaijani - Georgia (az-GE)', 'az-GE'],
                            ['Azerbaijani - Iran (az-IR)', 'az-IR'],
                            ['Azerbaijani - Iraq (az-IQ)', 'az-IQ'],
                            ['Azerbaijani - Kazakhstan (az-KZ)', 'az-KZ'],
                            ['Azerbaijani - Kyrgyzstan (az-KZ)', 'az-KZ'],
                            ['Azerbaijani - Russian Federation (az-RU)', 'az-RU'],
                            ['Azerbaijani - Turkey (az-TR)', 'az-TR'],
                            ['Azerbaijani - Turkmenistan (az-TM)', 'az-TM'],
                            ['Azerbaijani - Ukraine (az-UA)', 'az-UA'],
                            ['Azerbaijani - Uzbekistan (az-UZ)', 'az-UZ'],
                            ['Bambara (bm)', 'bm'],
                            ['Bambara - Mali (bm-ML)', 'bm-ML'],
                            ['Bashkir (ba)', 'ba'],
                            ['Bashkir - Bashkortostan (ba-BA)', 'ba-BA'],
                            ['Bashkir - Russian Federation (ba-RU)', 'ba-RU'],
                            ['Basque (eu)', 'eu'],
                            ['Basque - Spain (eu-ES)', 'eu-ES'],
                            ['Belarusian (be)', 'be'],
                            ['Belarusian - Belarus (be-BY)', 'be-BY'],
                            ['Bengali (Bangla)', 'bn'],
                            ['Bengali - Bangladesh (bn-BD)', 'bn-BD'],
                            ['Bengali - India (bn-IN)', 'bn-IN'],
                            ['Bihari (bh)', 'bh'],
                            ['Bihari - Asia (bh-AS)', 'bh-AS'],
                            ['Bihari - Belize (bh-BZ)', 'bh-BZ'],
                            ['Bihari - Colombia (bh-CO)', 'bh-CO'],
                            ['Bihari - Costa Rica (bh-CR)', 'bh-CR'],
                            ['Bihari - Guatemala (bh-GT)', 'bh-GT'],
                            ['Bihari - Honduras (bh-HN)', 'bh-HN'],
                            ['Bihari - Mexico (bh-MX)', 'bh-MX'],
                            ['Bihari - Nicaragua (bh-NI)', 'bh-NI'],
                            ['Bihari - United States (bh-US)', 'bh-US'],
                            ['Bihari - Venezuela (bh-VE)', 'bh-VE'],
                            ['Bislama (bi)', 'bi'],
                            ['Bislama - Australia (bi-AU)', 'bi-AU'],
                            ['Bislama - Vanuatu (bi-VU)', 'bi-VU'],
                            ['Bosnian (bs)', 'bs'],
                            ['Bosnian - Bosnia and Herzegovina (bs-BA)', 'bs-BA'],
                            ['Breton (br)', 'br'],
                            ['Breton - France (br-FR)', 'br-FR'],
                            ['Bulgarian (bg)', 'bg'],
                            ['Bulgarian - Bulgaria (bg-BG)', 'bg-BG'],
                            ['Burmese (my)', 'my'],
                            ['Burmese (my-MM)', 'my-MM'],
                            ['Catalan (ca)', 'ca'],
                            ['Catalan - Andorra (ca-AD)', 'ca-AD'],
                            ['Catalan - Spain (ca-ES)', 'ca-ES'],
                            ['Cebuano - Philippines (ceb-CH)', 'ceb-CH'],
                            ['Chamorro (ch)', 'ch'],
                            ['Chamorro - Guam (ch-GU)', 'ch-GU'],
                            ['Chamorro - United States (ch-US)', 'ch-US'],
                            ['Chechen (ce)', 'ce'],
                            ['Chechen - Russian Federation (ce-RU)', 'ce-RU'],
                            ['Chichewa - Malawi (ny-MW)', 'ny-MW'],
                            ['Chichewa - Mozambique (ny-MZ)', 'ny-MZ'],
                            ['Chichewa - Zambia (ny-ZM)', 'ny-ZM'],
                            ['Chichewa - Zimbabwe (ny-ZW)', 'ny-ZW'],
                            ['Chichewa - Chewa - Nyanja (ny)', 'ny'],
                            ['Chinese (zh)', 'zh'],
                            ['Chinese - China (zh-CN)', 'zh-CN'],
                            ['Chinese (Simplified)', 'zh-Hans'],
                            ['Chinese (Traditional)', 'zh-Hant'],
                            ['Chinese - Hong Kong (zh-HK)', 'zh-HK'],
                            ['Chinese - Macao (zh-MO)', 'zh-MO'],
                            ['Chinese - Singapore (zh-SG)', 'zh-SG'],
                            ['Chinese - Taiwan (zh-TW)', 'zh-TW'],
                            ['Chuvash (cv)', 'cv'],
                            ['Chuvash - Russian Federation (cv-RU)', 'cv-RU'],
                            ['Cornish (kw)', 'kw'],
                            ['Corsican (co)', 'co'],
                            ['Corsican - France (co-FR)', 'co-FR'],
                            ['Corsican - '.$italy_ts.' (co-IT)', 'co-IT'],
                            ['Cree (cr)', 'cr'],
                            ['Cree - Canada (cr-CA)', 'cr-CA'],
                            ['Croatian (hr)', 'hr'],
                            ['Croatian - Croatia (hr-HR)', 'hr-HR'],
                            ['Croatian - Bosnia and Herzegovina (hr-BA)', 'hr-BA'],
                            ['Czech (cs)', 'cs'],
                            ['Czech - Czech Republic (cs-CZ)', 'cs-CZ'],
                            ['Czech - Slovak Republic (cs-SK)', 'cs-SK'],
                            ['Danish (da)', 'da'],
                            ['Danish - Denmark (da-DK)', 'da-DK'],
                            ['Danish - Faeroe Islands (da-FO)', 'da-FO'],
                            ['Danish - Greenland (da-GL)', 'da-GL'],
                            ['Divehi - India (dv-IN)', 'dv-IN'],
                            ['Divehi - Dhivehi - Maldivian (dv)', 'dv'],
                            ['Dutch (nl)', 'nl'],
                            ['Dutch - Netherlands (nl-NL)', 'nl-NL'],
                            ['Dutch - Aruba (nl-AW)', 'nl-AW'],
                            ['Dutch - Belgium (nl-BE)', 'nl-BE'],
                            ['Dutch - Curaçao (nl-CW)', 'nl-CW'],
                            ['Dutch - Netherlands Antilles (nl-AN)', 'nl-AN'],
                            ['Dutch - Sint Maarten - Dutch part) (nl-SX)', 'nl-SX'],
                            ['Dutch - Suriname (nl-SR)', 'nl-SR'],
                            ['Dzongkha (dz)', 'dz'],
                            ['Dzongkha - Bhutan (dz-BT)', 'dz-BT'],
                            ['English (en)', 'en'],
                            ['English - United Kingdom (en-GB)', 'en-GB'],
                            ['English - United States (en-US)', 'en-US'],
                            ['English - American Samoa (en-AS)', 'en-AS'],
                            ['English - Anguilla (en-AI)', 'en-AI'],
                            ['English - Antigua and Barbuda (en-AG)', 'en-AG'],
                            ['English - Australia (en-AU)', 'en-AU'],
                            ['English - Bangladesh (en-BD)', 'en-BD'],
                            ['English - Barbados (en-BB)', 'en-BB'],
                            ['English - Belize (en-BZ)', 'en-BZ'],
                            ['English - Bermuda (en-BM)', 'en-BM'],
                            ['English - Botswana (en-BW)', 'en-BW'],
                            ['English - British Virgin Islands (en-VG)', 'en-VG'],
                            ['English - Cameroon (en-CM)', 'en-CM'],
                            ['English - Canada (en-CA)', 'en-CA'],
                            ['English - Cayman Islands (en-KY)', 'en-KY'],
                            ['English - Cook Islands (en-CK)', 'en-CK'],
                            ['English - Curaçao (en-CW)', 'en-CW'],
                            ['English - Dominica (en-DM)', 'en-DM'],
                            ['English - Eritrea (en-ER)', 'en-ER'],
                            ['English - Falkland Islands (en-FK)', 'en-FK'],
                            ['English - Fiji (en-FJ)', 'en-FJ'],
                            ['English - Ghana (en-GH)', 'en-GH'],
                            ['English - Gibraltar (en-GI)', 'en-GI'],
                            ['English - Grenada (en-GD)', 'en-GD'],
                            ['English - Guam (en-GU)', 'en-GU'],
                            ['English - Guernsey (en-GG)', 'en-GG'],
                            ['English - Guyana (en-GY)', 'en-GY'],
                            ['English - Hong Kong (en-HK)', 'en-HK'],
                            ['English - India (en-IN)', 'en-IN'],
                            ['English - Ireland (en-IE)', 'en-IE'],
                            ['English - Isle of Man (en-IM)', 'en-IM'],
                            ['English - Jamaica (en-JM)', 'en-JM'],
                            ['English - Jersey (en-JE)', 'en-JE'],
                            ['English - Kenya (en-KE)', 'en-KE'],
                            ['English - Kiribati (en-KI)', 'en-KI'],
                            ['English - Lesotho (en-LS)', 'en-LS'],
                            ['English - Liberia (en-LR)', 'en-LR'],
                            ['English - Malawi (en-MW)', 'en-MW'],
                            ['English - Malaysia (en-MY)', 'en-MY'],
                            ['English - Malta (en-MT)', 'en-MT'],
                            ['English - Marshall Islands (en-MH)', 'en-MH'],
                            ['English - Mauritius (en-MU)', 'en-MU'],
                            ['English - Micronesia (en-FM)', 'en-FM'],
                            ['English - Montserrat (en-MS)', 'en-MS'],
                            ['English - Namibia (en-NA)', 'en-NA'],
                            ['English - Nauru (en-NR)', 'en-NR'],
                            ['English - New Zealand (en-NZ)', 'en-NZ'],
                            ['English - Nigeria (en-NG)', 'en-NG'],
                            ['English - Niue (en-NU)', 'en-NU'],
                            ['English - Northern Mariana Islands (en-MP)', 'en-MP'],
                            ['English - Pakistan (en-PK)', 'en-PK'],
                            ['English - Palau (en-PW)', 'en-PW'],
                            ['English - Papua New Guinea (en-PG)', 'en-PG'],
                            ['English - Philippines (en-PH)', 'en-PH'],
                            ['English - Pirate (en-PI)', 'en-PI'],
                            ['English - Pitcairn Islands (en-PN)', 'en-PN'],
                            ['English - Puerto Rico (en-PR)', 'en-PR'],
                            ['English - Rwanda (en-RW)', 'en-RW'],
                            ['English - Saint Helena (en-SH)', 'en-SH'],
                            ['English - Samoa (en-WS)', 'en-WS'],
                            ['English - Seychelles (en-SC)', 'en-SC'],
                            ['English - Sierra Leone (en-SL)', 'en-SL'],
                            ['English - Singapore (en-SG)', 'en-SG'],
                            ['English - Solomon Islands (en-SB)', 'en-SB'],
                            ['English - Somalia (en-SO)', 'en-SO'],
                            ['English - South Africa (en-ZA)', 'en-ZA'],
                            ['English - South Sudan (en-SS)', 'en-SS'],
                            ['English - Sri Lanka (en-LK)', 'en-LK'],
                            ['English - St. Kitts and Nevis (en-KN)', 'en-KN'],
                            ['English - St. Lucia (en-LC)', 'en-LC'],
                            ['English - St. Vincent and the Grenadines (en-VC)', 'en-VC'],
                            ['English - Sudan (en-SD)', 'en-SD'],
                            ['English - Switzerland (en-CH)', 'en-CH'],
                            ['English - Tanzania (en-TZ)', 'en-TZ'],
                            ['English - The Bahamas (en-BS)', 'en-BS'],
                            ['English - The Gambia (en-GM)', 'en-GM'],
                            ['English - Tonga (en-TO)', 'en-TO'],
                            ['English - Trinidad and Tobago (en-TT)', 'en-TT'],
                            ['English - Turks and Caicos Islands (en-TC)', 'en-TC'],
                            ['English - Tuvalu (en-TV)', 'en-TV'],
                            ['English - Uganda (en-UG)', 'en-UG'],
                            ['English - United States Virgin Islands (en-VI)', 'en-VI'],
                            ['English - Upside Down (en-UD)', 'en-UD'],
                            ['English - Vanuatu (en-VU)', 'en-VU'],
                            ['English - Zambia (en-ZM)', 'en-ZM'],
                            ['English - Zimbabwe (en-ZW)', 'en-ZW'],
                            ['Esperanto (eo)', 'eo'],
                            ['Esperanto - Esperanto (eo-EO)', 'eo-EO'],
                            ['Estonian (et)', 'et'],
                            ['Estonian - Estonia (et-EE)', 'et-EE'],
                            ['Ewe (ee)', 'ee'],
                            ['Ewe - Ghana (ee-GH)', 'ee-GH'],
                            ['Ewe - Togo (ee-TG)', 'ee-TG'],
                            ['Faroese (fo)', 'fo'],
                            ['Faroese - Faeroe Islands (fo-FO)', 'fo-FO'],
                            ['Fijian (fj)', 'fj'],
                            ['Fijian - Fiji (fj-FJ)', 'fj-FJ'],
                            ['Filipino - Philippines (tl-PH)', 'tl-PH'],
                            ['Finnish (fi)', 'fi'],
                            ['Finnish - Finland (fi-FI)', 'fi-FI'],
                            ['French (fr)', 'fr'],
                            ['French - France (fr-FR)', 'fr-FR'],
                            ['French - Belgium (fr-BE)', 'fr-BE'],
                            ['French - Benin (fr-BJ)', 'fr-BJ'],
                            ['French - Burkina Faso (fr-BF)', 'fr-BF'],
                            ['French - Burundi (fr-BI)', 'fr-BI'],
                            ['French - Cameroon (fr-CM)', 'fr-CM'],
                            ['French - Canada (fr-CA)', 'fr-CA'],
                            ['French - Central African Republic (fr-CF)', 'fr-CF'],
                            ['French - Chad (fr-TD)', 'fr-TD'],
                            ['French - Comoros (fr-KM)', 'fr-KM'],
                            ['French - Congo (fr-CG)', 'fr-CG'],
                            ['French - Côte d’Ivoire (fr-CI)', 'fr-CI'],
                            ['French - Democratic Republic of the Congo (fr-CD)', 'fr-CD'],
                            ['French - Djibouti (fr-DJ)', 'fr-DJ'],
                            ['French - Equatorial Guinea (fr-GQ)', 'fr-GQ'],
                            ['French - French Guianna (fr-GF)', 'fr-GF'],
                            ['French - French Polynesia (fr-PM)', 'fr-PF'],
                            ['French - Gabon (fr-GA)', 'fr-GA'],
                            ['French - Grenada (fr-GD)', 'fr-GD'],
                            ['French - Guadeloupe (fr-GP)', 'fr-GP'],
                            ['French - Guinea (fr-GN)', 'fr-GN'],
                            ['French - Haiti (fr-HT)', 'fr-HT'],
                            ['French - Luxembourg (fr-LU)', 'fr-LU'],
                            ['French - Madagascar (fr-MG)', 'fr-MG'],
                            ['French - Mali (fr-ML)', 'fr-ML'],
                            ['French - Martinique (fr-MQ)', 'fr-MQ'],
                            ['French - Mauritius (fr-MU)', 'fr-MU'],
                            ['French - Mayotte (fr-YT)', 'fr-YT'],
                            ['French - Monaco (fr-MC)', 'fr-MC'],
                            ['French - New Caledonia (fr-NC)', 'fr-NC'],
                            ['French - Niger (fr-NE)', 'fr-NE'],
                            ['French - Rwanda (fr-RW)', 'fr-RW'],
                            ['French - Réunion (fr-RE)', 'fr-RE'],
                            ['French - Saint Pierre and Miquelon (fr-PM)', 'fr-PM'],
                            ['French - Senegal (fr-SN)', 'fr-SN'],
                            ['French - Seychelles (fr-SC)', 'fr-SC'],
                            ['French - St. Lucia (fr-LC)', 'fr-LC'],
                            ['French - St. Martin - French part) (fr-MF)', 'fr-MF'],
                            ['French - Switzerland (fr-CH)', 'fr-CH'],
                            ['French - Togo (fr-TG)', 'fr-TG'],
                            ['French - Vanuatu (fr-VU)', 'fr-VU'],
                            ['French - Wallis and Futuna (fr-WF)', 'fr-WF'],
                            ['Frisian - Netherlands (fy-NL)', 'fy-NL'],
                            ['Fula - Benin (ff-BJ)', 'ff-BJ'],
                            ['Fula - Burkina Faso (ff-BF)', 'ff-BF'],
                            ['Fula - Cape Verde (ff-CV)', 'ff-CV'],
                            ['Fula - Côte d\'Ivoire (ff-CI)', 'ff-CI'],
                            ['Fula - Gambia (ff-GM)', 'ff-GM'],
                            ['Fula - Ghana (ff-GH)', 'ff-GH'],
                            ['Fula - Guinea (ff-GN)', 'ff-GN'],
                            ['Fula - Guinea Bissau (ff-GW)', 'ff-GW'],
                            ['Fula - Liberia (ff-LR)', 'ff-LR'],
                            ['Fula - Mali (ff-ML)', 'ff-ML'],
                            ['Fula - Mauritania (ff-MR)', 'ff-MR'],
                            ['Fula - Niger (ff-NE)', 'ff-NE'],
                            ['Fula - Nigeria (ff-NG)', 'ff-NG'],
                            ['Fula - Senegal (ff-SN)', 'ff-SN'],
                            ['Fula - Sierra Leone (ff-SL)', 'ff-SL'],
                            ['Fula - Togo (ff-TG)', 'ff-TG'],
                            ['Fula - Fulah - Pulaar - Pular (ff)', 'ff'],
                            ['Gaelic (Manx)', 'gv'],
                            ['Gaelic (Scottish)', 'gd'],
                            ['Gaelic Manx - (gv-IM)', 'gv-IM'],
                            ['Gaelic Scottish - Canada (gd-CA)', 'gd-CA'],
                            ['Gaelic Scottish - United Kingdom (gd-UK)', 'gd-UK'],
                            ['Galician (gl)', 'gl'],
                            ['Galician - Spain (gl-ES)', 'gl-ES'],
                            ['Georgian (ka)', 'ka'],
                            ['Georgian - Georgia (ka-GE)', 'ka-GE'],
                            ['German (de)', 'de'],
                            ['German - Germany (de-DE)', 'de-DE'],
                            ['German - Austria (de-AT)', 'de-AT'],
                            ['German - Belgium (de-BE)', 'de-BE'],
                            ['German - Liechtenstein (de-LI)', 'de-LI'],
                            ['German - Luxembourg (de-LU)', 'de-LU'],
                            ['German - Namibia (de-NA)', 'de-NA'],
                            ['German - Switzerland (de-CH)', 'de-CH'],
                            ['Greek (el)', 'el'],
                            ['Greek - Greece (el-GR)', 'el-GR'],
                            ['Greek - Cyprus (el-CY)', 'el-CY'],
                            ['Greenlandic (kl)', 'kl'],
                            ['Greenlandic - Greenland (kl-GL)', 'kl-GL'],
                            ['Guarani (gn)', 'gn'],
                            ['Guarani - Argentina (gn-AR)', 'gn-AR'],
                            ['Guarani - Bolivia (gn-BO)', 'gn-BO'],
                            ['Guarani - Mercosur (gn-BR)', 'gn-BR'],
                            ['Guarani - Paraguay (gn-PY)', 'gn-PY'],
                            ['Gujarati (gu)', 'gu'],
                            ['Gujarati - India (gu-IN)', 'gu-IN'],
                            ['Gujarati - Kenya (gu-KE)', 'gu-KE'],
                            ['Gujarati - Pakistan (gu-PK)', 'gu-PK'],
                            ['Gujarati - Tanzania (gu-TZ)', 'gu-TZ'],
                            ['Haitian Creole (ht)', 'ht'],
                            ['Haitian Creole - Bahamas (ht-BS)', 'ht-BS'],
                            ['Haitian Creole - Cayman Islands (ht-KY)', 'ht-KY'],
                            ['Haitian Creole - Costa Rica (ht-CR)', 'ht-CR'],
                            ['Haitian Creole - Cuba (ht-CU)', 'ht-CU'],
                            ['Haitian Creole - Dominican Republic (ht-DO)', 'ht-DO'],
                            ['Haitian Creole - Florida (ht-US)', 'ht-US'],
                            ['Haitian Creole - Haiti (ht-HT)', 'ht-HT'],
                            ['Haitian Creole - Jamaica (ht-JM)', 'ht-JM'],
                            ['Haitian Creole - United States Minor Outlying Islands (ht-UM)', 'ht-UM'],
                            ['Hausa (ha)', 'ha'],
                            ['Hausa - Benin (ha-BJ)', 'ha-BJ'],
                            ['Hausa - Cameroon (ha-CM)', 'ha-CM'],
                            ['Hausa - Chad (ha-TD)', 'ha-TD'],
                            ['Hausa - Ghana (ha-GH)', 'ha-GH'],
                            ['Hausa - Niger (ha-NE)', 'ha-NE'],
                            ['Hausa - Nigeria (ha-NG)', 'ha-NG'],
                            ['Hausa - Sudan (ha-SD)', 'ha-SD'],
                            ['Hausa - Togo (ha-TG)', 'ha-TG'],
                            ['Hebrew (he)', 'he'],
                            ['Hebrew - Israel (he-IL)', 'he-IL'],
                            ['Herero (hz)', 'hz'],
                            ['Herero - Botswana (hz-BW)', 'hz-BW'],
                            ['Herero - Namibia (hz-NA)', 'hz-NA'],
                            ['Hindi (hi)', 'hi'],
                            ['Hindi - India (hi-IN)', 'hi-IN'],
                            ['Hindi - Fiji (hi-FJ)', 'hi-FJ'],
                            ['Hindi - Pakistan (hi-PK)', 'hi-PK'],
                            ['Hiri Motu (ho)', 'ho'],
                            ['Hiri Motu - Papua New Guinea (ho-PG)', 'ho-PG'],
                            ['Hungarian (hu)', 'hu'],
                            ['Hungarian - Hungary (hu-HU)', 'hu-HU'],
                            ['Icelandic (is)', 'is'],
                            ['Icelandic - Iceland (is-IS)', 'is-IS'],
                            ['Ido (io)', 'io'],
                            ['Ido - France (io-FR)', 'io-FR'],
                            ['Ido - Germany (io-DE)', 'io-DE'],
                            ['Igbo (ig)', 'ig'],
                            ['Igbo - Cameroon (ig-CM)', 'ig-CM'],
                            ['Igbo - Equatorial Guinea (ig-GQ)', 'ig-GQ'],
                            ['Igbo - Nigeria (ig-NG)', 'ig-NG'],
                            ['Indonesian (id, in)', 'id, in'],
                            ['Indonesian - Indonesia (id-ID)', 'id-ID'],
                            ['Interlingua (ia)', 'ia'],
                            ['Interlingua - Finland (ia-FI)', 'ia-FI'],
                            ['Interlingua - Norway (ia-NO)', 'ia-NO'],
                            ['Interlingua - Sweden (ia-SE)', 'ia-SE'],
                            ['Interlingua - United Kingdom (ia-UK)', 'ia-UK'],
                            ['Interlingua - United States (ia-US)', 'ia-US'],
                            ['Interlingue (ie)', 'ie'],
                            ['Inuktitut (iu)', 'iu'],
                            ['Inuktitut - Canada (iu-CA)', 'iu-CA'],
                            ['Inupiak (ik)', 'ik'],
                            ['Inupiak - Alaska (ik-KK)', 'ik-KK'],
                            ['Irish (ga)', 'ga'],
                            ['Irish - Ireland (ga-IE)', 'ga-IE'],
                            ['Irish - United Kingdom (ga-GB)', 'ga-GB'],
                            [$italian_ts.' (it)', 'it'],
                            [$italian_ts.' - '.$italy_ts.' (it-IT)', 'it-IT'],
                            [$italian_ts.' - San Marino (it-SM)', 'it-SM'],
                            [$italian_ts.' - Switzerland (it-CH)', 'it-CH'],
                            [$italian_ts.' - Vatican City (it-VA)', 'it-VA'],
                            ['Japanese (ja)', 'ja'],
                            ['Japanese - Japan (ja-JP)', 'ja-JP'],
                            ['Japanese - Palau (ja-PW)', 'ja-PW'],
                            ['Javanese (jv)', 'jv'],
                            ['Javanese (jv-ID)', 'jv-ID'],
                            ['Kalaallisut - Greenlandic (kl)', 'kl'],
                            ['Kannada (kn)', 'kn'],
                            ['Kannada - India (kn-IN)', 'kn-IN'],
                            ['Kanuri (kr)', 'kr'],
                            ['Kanuri - Cameroon (kr-CM)', 'kr-CM'],
                            ['Kanuri - Chad (kr-TD)', 'kr-TD'],
                            ['Kanuri - Libya (kr-LY)', 'kr-LY'],
                            ['Kanuri - Niger (kr-NE)', 'kr-NE'],
                            ['Kanuri - Nigeria (kr-NG)', 'kr-NG'],
                            ['Kanuri - Sudan (kr-SG)', 'kr-SG'],
                            ['Kashmiri (ks)', 'ks'],
                            ['Kashmiri - India (ks-IN)', 'ks-IN'],
                            ['Kazakh (kk)', 'kk'],
                            ['Kazakh - China (kk-CN)', 'kk-CN'],
                            ['Kazakh - Kazakhstan (kk-KZ)', 'kk-KZ'],
                            ['Kazakh - Kyrgyzstan (kk-KG)', 'kk-KG'],
                            ['Kazakh - Mongolia (kk-MN)', 'kk-MN'],
                            ['Kazakh - Russian Federation (kk-RU)', 'kk-RU'],
                            ['Kazakh - Turkey (kk-TR)', 'kk-TR'],
                            ['Kazakh - Turkmenistan (kk-TM)', 'kk-TM'],
                            ['Kazakh - Uzbekistan (kk-UZ)', 'kk-UZ'],
                            ['Khmer (km)', 'km'],
                            ['Khmer - Cambodia (km-KH)', 'km-KH'],
                            ['Kikuyu (ki)', 'ki'],
                            ['Kikuyu - Kenya (ki-KE)', 'ki-KE'],
                            ['Kinyarwanda (Rwanda)', 'rw'],
                            ['Kinyarwanda - Democratic Republic of the Congo (rw-CD)', 'rw-CD'],
                            ['Kinyarwanda - Rwanda (rw-RW)', 'rw-RW'],
                            ['Kinyarwanda - Uganda (rw-UG)', 'rw-UG'],
                            ['Kirundi (rn)', 'rn'],
                            ['Kirundi - Burundi (rn-BI)', 'rn-BI'],
                            ['Komi (kv)', 'kv'],
                            ['Komi - Russian Federation (kv-RU)', 'kv-RU'],
                            ['Kongo (kg)', 'kg'],
                            ['Kongo - Angola (kg-AO)', 'kg-AO'],
                            ['Kongo - Democratic Republic of the Congo (kg-CD)', 'kg-CD'],
                            ['Kongo - Gabon (kg-GA)', 'kg-GA'],
                            ['Korean (ko)', 'ko'],
                            ['Korean - DPRK (ko-KP)', 'ko-KP'],
                            ['Korean - South Korea (ko-KR)', 'ko-KR'],
                            ['Kurdish (ku)', 'ku'],
                            ['Kurdish - Turkey (ku-TR)', 'ku-TR'],
                            ['Kwanyama (kj)', 'kj'],
                            ['Kwanyama - Angola (kj-AO)', 'kj-AO'],
                            ['Kwanyama - Namibia (kj-NA)', 'kj-NA'],
                            ['Kyrgyz (ky)', 'ky'],
                            ['Kyrgyz (ky)', 'ky'],
                            ['Kyrgyz - China (ky-CN)', 'ky-CN'],
                            ['Kyrgyz - Kyrgyzstan (ky-KG)', 'ky-KG'],
                            ['Lao (lo)', 'lo'],
                            ['Lao - Cambodia (lo-KH)', 'lo-KH'],
                            ['Lao - Laos (lo-LA)', 'lo-LA'],
                            ['Lao - Thailand (lo-TH)', 'lo-TH'],
                            ['Lao - Vietnam (lo-VN)', 'lo-VN'],
                            ['Latin (la)', 'la'],
                            ['Latin - Vatican City (la-VA)', 'la-VA'],
                            ['Latvian (Lettish)', 'lv'],
                            ['Latvian - Latvia (lv-LV)', 'lv-LV'],
                            ['Limburgish ( Limburger)', 'li'],
                            ['Limburgish (Limburger) - Belgium (li-BE)', 'li-BE'],
                            ['Limburgish (Limburger) - Germany (li-DE)', 'li-DE'],
                            ['Limburgish (Limburger) - Netherlands (li-NL)', 'li-NL'],
                            ['Lingala (ln)', 'ln'],
                            ['Lingala - Angola (ln-AO)', 'ln-AO'],
                            ['Lingala - Central African Republic (ln-CF)', 'ln-CF'],
                            ['Lingala - Congo (ln-CG)', 'ln-CG'],
                            ['Lingala - Democratic Republic of the Congo (ln-CD)', 'ln-CD'],
                            ['Lingala - South Sudan (ln-SS)', 'ln-SS'],
                            ['Lithuanian (lt)', 'lt'],
                            ['Lithuanian - Lithuania (fb-LT)', 'lt-LT'],
                            ['Luga-Katanga (lu)', 'lu'],
                            ['Luga-Katanga - Democratic Republic of the Congo (lu-CD)', 'lu-CD'],
                            ['Luganda - Uganda (lg-UG)', 'lg-UG'],
                            ['Luganda - Ganda (lg)', 'lg'],
                            ['Luxembourgish (lb)', 'lb'],
                            ['Luxembourgish - Luxembourg (lb-LU)', 'lb-LU'],
                            ['Luxembourgish - Belgium (lb-BE)', 'lb-BE'],
                            ['Luxembourgish - France (lb-FR)', 'lb-FR'],
                            ['Luxembourgish - Germany (lb-DE)', 'lb-DE'],
                            ['Macedonian (mk)', 'mk'],
                            ['Macedonian - Macedonia (mk-MK)', 'mk-MK'],
                            ['Malagasy (mg)', 'mg'],
                            ['Malagasy - Madagascar (mg-MG)', 'mg-MG'],
                            ['Malay (ms)', 'ms'],
                            ['Malay - Malaysia (ms-MY)', 'ms-MY'],
                            ['Malay - Brunei (ms-BN)', 'ms-BN'],
                            ['Malay - Indonesia (ms-ID)', 'ms-ID'],
                            ['Malay - Singapore (ms-SG)', 'ms-SG'],
                            ['Malayalam (ml)', 'ml'],
                            ['Malayalam - India (ml-IN)', 'ml-IN'],
                            ['Maltese (mt)', 'mt'],
                            ['Maltese - Malta (mt-MT)', 'mt-MT'],
                            ['Manx (gv)', 'gv'],
                            ['Manx - Isle of Man (gv-IM)', 'gv-IM'],
                            ['Maori (mi)', 'mi'],
                            ['Maori - New Zeland (mi-NZ)', 'mi-NZ'],
                            ['Marathi (mr)', 'mr'],
                            ['Marathi - India (mr-IN)', 'mr-IN'],
                            ['Marshallese (mh)', 'mh'],
                            ['Marshallese - Marshall Islands (mh-MH)', 'mh-MH'],
                            ['Moldavian (mo)', 'mo'],
                            ['Moldavian - Moldova (mo-MD)', 'mo-MD'],
                            ['Moldavian - Ukraine (mo-UA)', 'mo-UA'],
                            ['Mongolian (mn)', 'mn'],
                            ['Mongolian - China (mn-CN)', 'mn-CN'],
                            ['Mongolian - Kyrgyzstan (mn-KG)', 'mn-KG'],
                            ['Mongolian - Mongolia (mn-MN)', 'mn-MN'],
                            ['Mongolian - Russian Federation (mn-RU)', 'mn-RU'],
                            ['Nauru (na)', 'na'],
                            ['Nauru - Nauru (na-NR)', 'na-NR'],
                            ['Navajo (nv)', 'nv'],
                            ['Navajo - United States (nv-US)', 'nv-US'],
                            ['Ndonga (ng)', 'ng'],
                            ['Ndonga - Angola (ng-AO)', 'ng-AO'],
                            ['Ndonga - Namibia (ng-NA)', 'ng-NA'],
                            ['Nepali (ne)', 'ne'],
                            ['Nepali - Nepal (ne-NP)', 'ne-NP'],
                            ['Northern Ndebele (nd)', 'nd'],
                            ['Northern Ndebele - Zimbabwe (nd-ZW)', 'nd-ZW'],
                            ['Norwegian (no)', 'no'],
                            ['Norwegian - Norway (no-NO)', 'no-NO'],
                            ['Norwegian Bokmål - Norway (nb-NO)', 'nb-NO'],
                            ['Norwegian Nynorsk - Norway (nn-NO)', 'nn-NO'],
                            ['Norwegian bokmål (nb)', 'nb'],
                            ['Norwegian nynorsk (nn)', 'nn'],
                            ['Norwegian nynorsk - Norway (nn-NO)', 'nn-NO'],
                            ['Nuosu (ii)', 'ii'],
                            ['Nuosu - China (ii-CN)', 'ii-CN'],
                            ['Occitan (oc)', 'oc'],
                            ['Occitan - France (oc-FR)', 'oc-FR'],
                            ['Occitan - Spain (oc-ES)', 'oc-ES'],
                            ['Ojibwe (oj)', 'oj'],
                            ['Ojibwe - Canada (oj-CA)', 'oj-CA'],
                            ['Ojibwe - United States (oj-US)', 'oj-US'],
                            ['Old Church Slavonic - Bulgaria (cu-BG)', 'cu-BG'],
                            ['Old Church Slavonic - Czechia (cu-EZ)', 'cu-EZ'],
                            ['Old Church Slavonic - Poland (cu-PL)', 'cu-PL'],
                            ['Old Church Slavonic - Russian Federation (cu-RU)', 'cu-RU'],
                            ['Old Church Slavonic - Serbia (cu-RS)', 'cu-RS'],
                            ['Old Church Slavonic - Slovakia (cu-SK)', 'cu-SK'],
                            ['Old Church Slavonic - Slovenia (cu-SI)', 'cu-SI'],
                            ['Old Church Slavonic - Old Bulgarian (cu)', 'cu'],
                            ['Oriya (or)', 'or'],
                            ['Oriya - India (or-IN)', 'or-IN'],
                            ['Oromo (Afaan Oromo)', 'om'],
                            ['Oromo - Ethiopia (om-ET)', 'om-ET'],
                            ['Oromo - Kenya (om-KE)', 'om-KE'],
                            ['Ossetian (os)', 'os'],
                            ['Ossetian - Georgia (os-GE)', 'os-GE'],
                            ['Ossetian - Russian Federation (os-RU)', 'os-RU'],
                            ['Pashto - Afghanistan (ps-AF)', 'ps-AF'],
                            ['Pashto - Pushto (ps)', 'ps'],
                            ['Persian (Farsi)', 'fa'],
                            ['Persian - Afghanistan (fa-AF)', 'fa-AF'],
                            ['Persian - Iran (fa-IR)', 'fa-IR'],
                            ['Polish (pl)', 'pl'],
                            ['Polish - Poland (pl-PL)', 'pl-PL'],
                            ['Portuguese (pt)', 'pt'],
                            ['Portuguese - Portugal (pt-PT)', 'pt-PT'],
                            ['Portuguese - Angola (pt-AO)', 'pt-AO'],
                            ['Portuguese - Brazil (pt-BR)', 'pt-BR'],
                            ['Portuguese - Cape Verde (pt-CV)', 'pt-CV'],
                            ['Portuguese - Equatorial Guinea (pt-GQ)', 'pt-GQ'],
                            ['Portuguese - Guinea-Bissau (pt-GW)', 'pt-GW'],
                            ['Portuguese - Macao (pt-MO)', 'pt-MO'],
                            ['Portuguese - Mozambique (pt-MZ)', 'pt-MZ'],
                            ['Portuguese - São Tomé and Principe (pt-ST)', 'pt-ST'],
                            ['Portuguese - Timor-Leste (pt-TL)', 'pt-TL'],
                            ['Punjabi (Eastern)', 'pa'],
                            ['Punjabi - India (pa-IN)', 'pa-IN'],
                            ['PÄli (pi)', 'pi'],
                            ['PÄli - Bangladesh (pi-BD)', 'pi-BD'],
                            ['PÄli - Cambodia (pi-KH)', 'pi-KH'],
                            ['PÄli - India (pi-IN)', 'pi-IN'],
                            ['PÄli - Laos (pi-LA)', 'pi-LA'],
                            ['PÄli - Myanmar (pi-MN)', 'pi-MN'],
                            ['PÄli - Nepal (pi-NP)', 'pi-NP'],
                            ['PÄli - Sri Lanka (pi-LK)', 'pi-LK'],
                            ['PÄli - Thailand (pi-TH)', 'pi-TH'],
                            ['Quechua (qu)', 'qu'],
                            ['Quechua - Argentina (qu-AR)', 'qu-AR'],
                            ['Quechua - Bolivia (qu-BO)', 'qu-BO'],
                            ['Quechua - Chile (qu-CL)', 'qu-CL'],
                            ['Quechua - Colombia (qu-CO)', 'qu-CO'],
                            ['Quechua - Ecuador (qu-EC)', 'qu-EC'],
                            ['Quechua - Peru (qu-PE)', 'qu-PE'],
                            ['Romanian (ro)', 'ro'],
                            ['Romanian - Romania (ro-RO)', 'ro-RO'],
                            ['Romanian - Moldova (ro-MD)', 'ro-MD'],
                            ['Romansh (rm)', 'rm'],
                            ['Romansh - '.$italy_ts.' (rm-IT)', 'rm-IT'],
                            ['Romansh - Switzerland (rm-CH)', 'rm-CH'],
                            ['Russian (ru)', 'ru'],
                            ['Russian - Russian Federation (ru-RU)', 'ru-RU'],
                            ['Russian - Belarus (ru-BY)', 'ru-BY'],
                            ['Russian - Kazakhstan (ru-KZ)', 'ru-KZ'],
                            ['Russian - Kyrgyz Republic (ru-KG)', 'ru-KG'],
                            ['Russian - Tajikistan (ru-TJ)', 'ru-TJ'],
                            ['Sami (se)', 'se'],
                            ['Sami Samoan - Finland (se-FI)', 'se-FI'],
                            ['Sami Samoan - Norway (se-NO)', 'se-NO'],
                            ['Sami Samoan - Russian Federation (se-RU)', 'se-RU'],
                            ['Sami Samoan - Sweden (se-SE)', 'se-SE'],
                            ['Samoan (sm)', 'sm'],
                            ['Sango (sg)', 'sg'],
                            ['Sango - Central African Republic (sg-CF)', 'sg-CF'],
                            ['Sango - Chad (sg-TD)', 'sg-TD'],
                            ['Sango - Democratic Republic of the Congo (sg-CD)', 'sg-CD'],
                            ['Sanskrit (sa)', 'sa'],
                            ['Sanskrit - Bangladesh (sa-BD)', 'sa-BD'],
                            ['Sanskrit - Brunei Darussalam (sa-BD)', 'sa-BD'],
                            ['Sanskrit - Cambodia (sa-KH)', 'sa-KH'],
                            ['Sanskrit - India (sa-IN)', 'sa-IN'],
                            ['Sanskrit - Indonesia (sa-ID)', 'sa-ID'],
                            ['Sanskrit - Laos (sa-LA)', 'sa-LA'],
                            ['Sanskrit - Malaysia (sa-MY)', 'sa-MY'],
                            ['Sanskrit - Myanmar (sa-MN)', 'sa-MN'],
                            ['Sanskrit - Pakistan (sa-PK)', 'sa-PK'],
                            ['Sanskrit - Philippines (sa-PH)', 'sa-PH'],
                            ['Sanskrit - Singapore (sa-SG)', 'sa-SG'],
                            ['Sanskrit - Sri Lanka (sa-LK)', 'sa-LK'],
                            ['Sanskrit - Thailand (sa-TH)', 'sa-TH'],
                            ['Sanskrit - Timor-Leste (sa-TL)', 'sa-TL'],
                            ['Sanskrit - Vietnam (sa-VN)', 'sa-VN'],
                            ['Serbian (sr)', 'sr'],
                            ['Serbian - Serbia (sr-RS)', 'sr-RS'],
                            ['Serbian - Bosnia and Herzegovina (sr-BA)', 'sr-BA'],
                            ['Serbian - Montenegro (sr-ME)', 'sr-ME'],
                            ['Serbo-Croatian (sh)', 'sh'],
                            ['Serbo-Croatian - Serbia (sh-RS)', 'sh-RS'],
                            ['Serbo-Croatian - Croatia (sh-HR)', 'sh-HR'],
                            ['Serbo-Croatian - Bosnia and Herzegovina (sh-BA)', 'sh-BA'],
                            ['Serbo-Croatian - Czech Republic (sh-CZ)', 'sh-CZ'],
                            ['Serbo-Croatian - Slovakia (sh-SK)', 'sh-SK'],
                            ['Serbo-Croatian - Austria (sh-AT)', 'sh-AT'],
                            ['Serbo-Croatian - Hungary (sh-HU)', 'sh-HU'],
                            ['Serbo-Croatian - '.$italy_ts.' (sh-IT)', 'sh-IT'],
                            ['Serbo-Croatian - Kosovo (sh-XK)', 'sh-XK'],
                            ['Serbo-Croatian - Macedonia (sh-MK)', 'sh-MK'],
                            ['Serbo-Croatian - Montenegro (sh-ME)', 'sh-ME'],
                            ['Serbo-Croatian - Romania (sh-RO)', 'sh-RO'],
                            ['Sesotho (st)', 'st'],
                            ['Sesotho - Lesotho (st-LS)', 'st-LS'],
                            ['Sesotho - South Africa (st-ZA)', 'st-ZA'],
                            ['Sesotho - Zimbabwe (st-ZW)', 'st-ZW'],
                            ['Setswana (tn)', 'tn'],
                            ['Setswana - Botswana (tn-BW)', 'tn-BW'],
                            ['Setswana - Namibia (tn-NA)', 'tn-NA'],
                            ['Setswana - South Africa (tn-ZA)', 'tn-ZA'],
                            ['Setswana - Zimbabwe (tn-ZW)', 'tn-ZW'],
                            ['Shona (sn)', 'sn'],
                            ['Shona - Botswana (sn-BW)', 'sn-BW'],
                            ['Shona - Mozambique (sn-MZ)', 'sn-MZ'],
                            ['Shona - Zimbabwe (sn-ZW)', 'sn-ZW'],
                            ['Sichuan Yi (ii)', 'ii'],
                            ['Sichuan Yi - China (ii-CN)', 'ii-CN'],
                            ['Sindhi (sd)', 'sd'],
                            ['Sindhi - India (sd-IN)', 'sd-IN'],
                            ['Sindhi - Pakistan (sd-PK)', 'sd-PK'],
                            ['Sinhala (si-LK)', 'si-LK'],
                            ['Sinhalese (si)', 'si'],
                            ['Siswati (ss)', 'ss'],
                            ['Siswati - Eswatini (ss-WZ)', 'ss-WZ'],
                            ['Siswati - Lesotho (ss-LS)', 'ss-LS'],
                            ['Siswati - Mozambique (ss-MZ)', 'ss-MZ'],
                            ['Siswati - South Africa (ss-ZA)', 'ss-ZA'],
                            ['Slovak (sk)', 'sk'],
                            ['Slovak - Czech Republic (sk-CZ)', 'sk-CZ'],
                            ['Slovak - Slovakia (sk-SK)', 'sk-SK'],
                            ['Slovenian (sl)', 'sl'],
                            ['Slovenian - Slovenia (sl-SI)', 'sl-SI'],
                            ['Somali (so)', 'so'],
                            ['Somali - Somalia (so-SO)', 'so-SO'],
                            ['Somali - Djibouti (so-DJ)', 'so-DJ'],
                            ['Somali - Ethiopia (so-ET)', 'so-ET'],
                            ['Somali - Kenya (so-KE)', 'so-KE'],
                            ['Southern Ndebele (nr)', 'nr'],
                            ['Southern Ndebele - South Africa (nr-ZA)', 'nr-ZA'],
                            ['Spanish (es)', 'es'],
                            ['Spanish - Spain (es-ES)', 'es-ES'],
                            ['Spanish - Spanish (es-LA)', 'es-LA'],
                            ['Spanish - Argentina (es-AR)', 'es-AR'],
                            ['Spanish - Bolivia (es-BO)', 'es-BO'],
                            ['Spanish - Chile (es-CL)', 'es-CL'],
                            ['Spanish - Colombia (es-CO)', 'es-CO'],
                            ['Spanish - Costa Rica (es-CR)', 'es-CR'],
                            ['Spanish - Cuba (es-CU)', 'es-CU'],
                            ['Spanish - Dominican Republic (es-DO)', 'es-DO'],
                            ['Spanish - Ecuador (es-EC)', 'es-EC'],
                            ['Spanish - El Salvador (es-SV)', 'es-SV'],
                            ['Spanish - Equatorial Guinea (es-GQ)', 'es-GQ'],
                            ['Spanish - Gibraltar (es-GI)', 'es-GI'],
                            ['Spanish - Guatemala (es-GT)', 'es-GT'],
                            ['Spanish - Honduras (es-HN)', 'es-HN'],
                            ['Spanish - Mexico (es-MX)', 'es-MX'],
                            ['Spanish - Nicaragua (es-NI)', 'es-NI'],
                            ['Spanish - Panama (es-PA)', 'es-PA'],
                            ['Spanish - Paraguay (es-PY)', 'es-PY'],
                            ['Spanish - Peru (es-PE)', 'es-PE'],
                            ['Spanish - Puerto Rico (es-PR)', 'es-PR'],
                            ['Spanish - United States (es-US)', 'es-US'],
                            ['Spanish - Uruguay (es-UY)', 'es-UY'],
                            ['Spanish - Venezuela (es-VE)', 'es-VE'],
                            ['Sundanese (su)', 'su'],
                            ['Sundanese - Indonesia (su-ID)', 'su-ID'],
                            ['Swahili (Kiswahili)', 'sw'],
                            ['Swahili - Kenya (sw-KE)', 'sw-KE'],
                            ['Swati (ss)', 'ss'],
                            ['Swedish (sv)', 'sv'],
                            ['Swedish - Sweden (sv-SE)', 'sv-SE'],
                            ['Swedish - Finland (sv-FI)', 'sv-FI'],
                            ['Tagalog (tl)', 'tl'],
                            ['Tahitian (ty)', 'ty'],
                            ['Tahitian - French Polynesia (ty-FP)', 'ty-FP'],
                            ['Tajik (tg)', 'tg'],
                            ['Tajik - Tajikistan (tg-TJ)', 'tg-TJ'],
                            ['Tajik - Afghanistan (tg-AF)', 'tg-AF'],
                            ['Tajik - Russian Federation (tg-RU)', 'tg-RU'],
                            ['Tajik - Uzbekistan (tg-UZ)', 'tg-UZ'],
                            ['Tamil (ta)', 'ta'],
                            ['Tamil - India (ta-IN)', 'ta-IN'],
                            ['Tamil - Sri Lanka (ta-LK)', 'ta-LK'],
                            ['Tatar (tt)', 'tt'],
                            ['Tatar - Russian Federation (tt-RU)', 'tt-RU'],
                            ['Telugu (te)', 'te'],
                            ['Telugu - India (te-IN)', 'te-IN'],
                            ['Thai (th)', 'th'],
                            ['Thai - Thailand (th-TH)', 'th-TH'],
                            ['Tibetan (bo)', 'bo'],
                            ['Tibetan - Tibet (bo-CN)', 'bo-CN'],
                            ['Tigrinya (ti)', 'ti'],
                            ['Tigrinya - Eritrea (ti-ER)', 'ti-ER'],
                            ['Tigrinya - Ethiopia (ti-ET)', 'ti-ET'],
                            ['Tigrinya - Israel (ti-IL)', 'ti-IL'],
                            ['Tonga (to)', 'to'],
                            ['Tonga - Tonga (to-TO)', 'to-TO'],
                            ['Tsonga (ts)', 'ts'],
                            ['Tsonga - Mozambique (ts-MZ)', 'ts-MZ'],
                            ['Tsonga - South Africa (ts-ZA)', 'ts-ZA'],
                            ['Tsonga - Zimbabwe (ts-ZW)', 'ts-ZW'],
                            ['Turkish (tr)', 'tr'],
                            ['Turkish - Turkey (tr-TR)', 'tr-TR'],
                            ['Turkish - Cyprus (tr-CY)', 'tr-CY'],
                            ['Turkmen (tk)', 'tk'],
                            ['Turkmen - Turkmenistan (tk-TM)', 'tk-TM'],
                            ['Turkmen - Afghanistan (tk-AF)', 'tk-AF'],
                            ['Turkmen - Iran (tk-IR)', 'tk-IR'],
                            ['Turkmen - Pakistan (tk-PK)', 'tk-PK'],
                            ['Turkmen - Russian Federation (tk-RU)', 'tk-RU'],
                            ['Turkmen - Tajikistan (tk-TJ)', 'tk-TJ'],
                            ['Turkmen - Uzbekistan (tk-UZ)', 'tk-UZ'],
                            ['Twi (tw)', 'tw'],
                            ['Twi - Ghana (tw-GH)', 'tw-GH'],
                            ['Twi - Ivory Coast (tw-IV)', 'tw-IV'],
                            ['Uighur - China (ug-CN)', 'ug-CN'],
                            ['Ukrainian (uk)', 'uk'],
                            ['Ukrainian - Ukraine (uk-UA)', 'uk-UA'],
                            ['Urdu (ur)', 'ur'],
                            ['Urdu - Afghanistan (ur-AF)', 'ur-AF'],
                            ['Urdu - Bangladesh (ur-BD)', 'ur-BD'],
                            ['Urdu - India (ur-IN)', 'ur-IN'],
                            ['Urdu - Nepal (ur-NP)', 'ur-NP'],
                            ['Urdu - Pakistan (ur-PK)', 'ur-PK'],
                            ['Urdu - South Africa (ur-ZA)', 'ur-ZA'],
                            ['Uyghur (ug)', 'ug'],
                            ['Uzbek (uz)', 'uz'],
                            ['Uzbek - Uzbekistan (uz-UZ)', 'uz-UZ'],
                            ['Venda (ve)', 've'],
                            ['Venda - South Africa (ve-ZA)', 've-ZA'],
                            ['Venda - Zimbabwe (ve-ZW)', 've-ZW'],
                            ['Vietnamese (vi)', 'vi'],
                            ['Vietnamese - Vietnam (vi-VN)', 'vi-VN'],
                            ['Volapük (vo)', 'vo'],
                            ['Volapük - Europe (vo-EU)', 'vo-EU'],
                            ['Wallon (wa)', 'wa'],
                            ['Wallon - Belgium (wa-BE)', 'wa-BE'],
                            ['Wallon - France (wa-FR)', 'wa-FR'],
                            ['Wallon - United States (wa-US)', 'wa-US'],
                            ['Welsh (cy)', 'cy'],
                            ['Welsh - United Kingdom (cy-GB)', 'cy-GB'],
                            ['Western Frisian (fy)', 'fy'],
                            ['Wolof (wo)', 'wo'],
                            ['Wolof - Senegal (wo-SN)', 'wo-SN'],
                            ['Wolof - Gambia (wo-GM)', 'wo-GM'],
                            ['Wolof - Mauritania (wo-MR)', 'wo-MR'],
                            ['Xhosa (xh)', 'xh'],
                            ['Xhosa - Lesotho (xh-LS)', 'xh-LS'],
                            ['Xhosa - South Africa (xh-ZA)', 'xh-ZA'],
                            ['Yiddish (yi, ji)', 'yi, ji'],
                            ['Yiddish - Germany (yi-DE)', 'yi-DE'],
                            ['Yiddish - Israel (yi-IL)', 'yi-IL'],
                            ['Yiddish - Belarus (yi-BY)', 'yi-BY'],
                            ['Yiddish - Bosnia and Herzegovina (yi-BA)', 'yi-BA'],
                            ['Yiddish - Netherlands (yi-NL)', 'yi-NL'],
                            ['Yiddish - Poland (yi-PL)', 'yi-PL'],
                            ['Yiddish - Romania (yi-RO)', 'yi-RO'],
                            ['Yiddish - Russian Federation (yi-RU)', 'yi-RU'],
                            ['Yiddish - Sweden (yi-SE)', 'yi-SE'],
                            ['Yiddish - Ukraine (yi-UA)', 'yi-UA'],
                            ['Yoruba (yo)', 'yo'],
                            ['Yoruba - Benin (yo-BJ)', 'yo-BJ'],
                            ['Yoruba - Nigeria (yo-NG)', 'yo-NG'],
                            ['Yoruba - Togo (yo-TG)', 'yo-TG'],
                            ['Zhuang - China (za-CN)', 'za-CN'],
                            ['Zhuang - Chuang (za)', 'za'],
                            ['Zulu (zu)', 'zu'],
                            ['Zulu - Malawi (zu-MW)', 'zu-MW'],
                            ['Zulu - Mozambique (zu-MZ)', 'zu-MZ'],
                            ['Zulu - South Africa (zu-ZA)', 'zu-ZA'],
                            ['Zulu - Swaziland (zu-SZ)', 'zu-SZ']
                        ];

                        $write_language="<table class=\"eventstables_ts margin0\"><tr><td class=\"eventstd_ts\">$txtts3</td><td class=\"eventstd_ts\"><strong>$txtts4</strong></td></tr>";
                        for($i=0;$i<=count($language_accept);$i++){
	                        if((isset($language_accept[$i]["0"]))&&(trim($language_accept[$i]["0"]) != "")){
		                        $write_language.="<tr><td class=\"eventstd_ts\">".trim($language_accept[$i]["0"])."</td><td class=\"eventstd_ts\"><strong>".trim($language_accept[$i]["1"])."</strong></td></tr>";
		                        
		                        $language_accept[$i]="";
	                        }
                        }
                        $write_language.="</table>";

                        $add_position="<tr><td><div id=\"box_nolistlanguage_importexportcsv_toppersystem\" class=\"\"><div id=\"box_export_toppersystem\" class=\"box_export_toppersystem\"><center><big>$txtts5</big><br><br><a href=\"javascript:start_download_file_csv_toppersystem()\" class=\"button-primary white_color_toppersystem\">$txtts6</a><br><br><small><div id=\"status_download_file_csv_toppersystem\">&nbsp;</div></small><input type=\"hidden\" id=\"name_fileexport_csv_toppersystem\" name=\"name_fileexport_csv_toppersystem\" value=\"\"></center></div><div id=\"box_import_toppersystem\" class=\"box_import_toppersystem\"><center><form id=\"file_import_csv_form_toppersystem\" enctype=\"multipart/form-data\"><big>$txtts7</big> <small><a href=\"javascript:open_box_listlanguage_importexportcsv_toppersystem()\" style=\"color:#2271b1;\">$txtts8</a></small><br><br><input type=\"file\" id=\"file_csv_toppersystem\" name=\"file_csv_toppersystem\"><a href=\"javascript:save_upload_file_csv_toppersystem()\" class=\"button-primary white_color_toppersystem\">$txtts9</a></form><br><small><div id=\"status_upload_file_csv_toppersystem\">&nbsp;</div></small><input type=\"hidden\" id=\"name_file_csv_toppersystem\" name=\"name_file_csv_toppersystem\" value=\"\"></center></div></div><div id=\"box_listlanguage_importexportcsv_toppersystem\" class=\"display_none_ts\">$write_language</div></td></tr>";
							
                        $box_general="<div id=\"box_general_request_events_toppersystem\"><table class=\"eventstables_ts margin0\">".$add_position."</table></div>";
					
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