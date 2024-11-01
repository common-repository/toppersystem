<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem_register"])) {
class TopperSystemSetFileregister{
	public static function detect_path(){
		if(file_exists('../'.'../'.'../'.'../'.'w'.'p'.'-'.'l'.'o'.'a'.'d.'.'p'.'h'.'p')){
			return "../"."../"."../"."../";
		}else{
            $path="../";
			for($i=2;$i<=count(explode("/",str_replace("\\","/",__DIR__)));$i++){
				if(file_exists($path.'w'.'p'.'-'.'l'.'o'.'a'.'d.'.'p'.'h'.'p')){
					return $path;
				}
				$path.="../";
			}			
		}
		return false;
	}
}

require("safeclass.php");

class TopperSystemExecuteFileregister {
public static function runts(){
$return="";
if(isset($_SERVER["HTTP_REFERER"])){
$paginaprovenienzats=$_SERVER["HTTP_REFERER"];
}else{
$paginaprovenienzats="";
}
$paginaprovenienzats_controllo=str_replace($_SERVER['SERVER_NAME'],"",$paginaprovenienzats);

if((isset($_POST["hreflang_toppersystem"]) && trim($_POST["hreflang_toppersystem"]) != "")) {
    $hreflang_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['hreflang_toppersystem'])), array());	
}else{
    $hreflang_toppersystem="en";
}
if($hreflang_toppersystem == "it"){    
    $txtts0="Accesso non autorizzato. Verifica il corretto funzionamento della variabile ambiente HTTP_REFERER";
    $txtts1="Non abbiamo rilevato la variabile ambiente REMOTE_ADDR";
    $txtts2="Non abbiamo rilevato la variabile ambiente HTTP_USER_AGENT";
    $txtts3="Auth Code da inserire risulta non valido";
    $txtts4="Il file api/toppersystem.php non esiste. Ti consigliamo di disinstallare il plugin e reinstallarlo nuovamente";
    $txtts5="Il file api/toppersystem.php non è valido. Ti consigliamo di disinstallare il plugin e reinstallarlo nuovamente";
    $txtts6="Auth Code risulta già inserito. Ti consigliamo di cancellare la cache del tuo browser e ricaricare la pagina";
    $txtts7="Auth Code risulta già inserito e memorizzato nel plugin. Ti consigliamo di cancellare la cache del tuo browser e ricaricare la pagina";
    $txtts8="I file non risultano scrivibili. Verifica i permessi dei file e/o cartelle sul tuo server";
}else if($hreflang_toppersystem == "ar"){ 
    $txtts0="دخول غير مرخص. تحقق من أن متغير البيئة HTTP_REFERER يعمل بشكل صحيح";
    $txtts1="لم نكتشف متغير البيئة REMOTE_ADDR";
    $txtts2="لم نكتشف متغير البيئة HTTP_USER_AGENT";
    $txtts3="كود المصادقة المراد إدخاله غير صالح";
    $txtts4="ملف api / toppersystem.php غير موجود. نوصي بإلغاء تثبيت المكون الإضافي وإعادة تثبيته مرة أخرى";
    $txtts5="ملف api / toppersystem.php غير صالح. نوصي بإلغاء تثبيت المكون الإضافي وإعادة تثبيته مرة أخرى";
    $txtts6="تم إدراج رمز المصادقة بالفعل. نوصي بمسح ذاكرة التخزين المؤقت للمتصفح وإعادة تحميل الصفحة";
    $txtts7="تم بالفعل إدخال رمز المصادقة وتخزينه في المكون الإضافي. نوصي بمسح ذاكرة التخزين المؤقت للمتصفح وإعادة تحميل الصفحة";
    $txtts8="الملفات غير قابلة للكتابة. تحقق من أذونات الملفات و / أو المجلدات الموجودة على الخادم الخاص بك";
}else if($hreflang_toppersystem == "de"){ 
    $txtts0="Unautorisierter Zugriff. Stellen Sie sicher, dass die Umgebungsvariable HTTP_REFERER ordnungsgemäß funktioniert";
    $txtts1="Wir haben die Umgebungsvariable REMOTE_ADDR nicht erkannt";
    $txtts2="Wir haben die Umgebungsvariable HTTP_USER_AGENT nicht erkannt";
    $txtts3="Der einzugebende Auth-Code ist ungültig";
    $txtts4="Die Datei api/toppersystem.php existiert nicht. Wir empfehlen, das Plugin zu deinstallieren und erneut zu installieren";
    $txtts5="Die Datei api / toppersystem.php ist ungültig. Wir empfehlen, das Plugin zu deinstallieren und erneut zu installieren";
    $txtts6="Auth-Code ist bereits eingefügt. Wir empfehlen Ihnen, Ihren Browser-Cache zu leeren und die Seite neu zu laden";
    $txtts7="Der Auth-Code ist bereits eingefügt und im Plugin gespeichert. Wir empfehlen Ihnen, Ihren Browser-Cache zu leeren und die Seite neu zu laden";
    $txtts8="Die Dateien sind nicht beschreibbar. Überprüfen Sie die Berechtigungen der Dateien und/oder Ordner auf Ihrem Server";
}else if($hreflang_toppersystem == "es"){ 
    $txtts0="Acceso no autorizado. Verifique que la variable de entorno HTTP_REFERER esté funcionando correctamente";
    $txtts1="No detectamos la variable de entorno REMOTE_ADDR";
    $txtts2="No detectamos la variable de entorno HTTP_USER_AGENT";
    $txtts3="El código de autenticación que se va a ingresar no es válido";
    $txtts4="El archivo api/toppersystem.php no existe. Le recomendamos que desinstale el complemento y lo vuelva a instalar.";
    $txtts5="El archivo api/toppersystem.php no es válido. Le recomendamos que desinstale el complemento y lo vuelva a instalar.";
    $txtts6="El código de autenticación ya está insertado. Le recomendamos que borre la memoria caché de su navegador y vuelva a cargar la página.";
    $txtts7="El código de autenticación ya está insertado y almacenado en el complemento. Le recomendamos que borre la memoria caché de su navegador y vuelva a cargar la página.";
    $txtts8="Los archivos no se pueden escribir. Verifica los permisos de los archivos y/o carpetas en tu servidor";
}else if($hreflang_toppersystem == "fr"){ 
    $txtts0="L'accès non autorisé. Vérifiez que la variable d'environnement HTTP_REFERER fonctionne correctement";
    $txtts1="Nous n'avons pas détecté la variable d'environnement REMOTE_ADDR";
    $txtts2="Nous n'avons pas détecté la variable d'environnement HTTP_USER_AGENT";
    $txtts3="Le code d'authentification à saisir n'est pas valide";
    $txtts4="Le fichier api/toppersystem.php n'existe pas. Nous vous recommandons de désinstaller le plugin et de le réinstaller à nouveau";
    $txtts5="Le fichier api/toppersystem.php n'est pas valide. Nous vous recommandons de désinstaller le plugin et de le réinstaller à nouveau";
    $txtts6="Le code d'authentification est déjà inséré. Nous vous recommandons de vider le cache de votre navigateur et de recharger la page";
    $txtts7="Le code d'authentification est déjà inséré et stocké dans le plugin. Nous vous recommandons de vider le cache de votre navigateur et de recharger la page";
    $txtts8="Les fichiers ne sont pas inscriptibles. Vérifiez les permissions des fichiers et/ou dossiers sur votre serveur";
}else if($hreflang_toppersystem == "hi"){ 
    $txtts0="अनाधिकृत उपयोग। सत्यापित करें कि HTTP_REFERER पर्यावरण चर ठीक से काम कर रहा है";
    $txtts1="हमने REMOTE_ADDR पर्यावरण चर का पता नहीं लगाया";
    $txtts2="हमने HTTP_USER_AGENT पर्यावरण चर का पता नहीं लगाया";
    $txtts3="दर्ज किया जाने वाला प्रामाणिक कोड अमान्य है";
    $txtts4="एपीआई / toppersystem.php फ़ाइल मौजूद नहीं है। हम अनुशंसा करते हैं कि आप प्लगइन को अनइंस्टॉल करें और इसे फिर से इंस्टॉल करें";
    $txtts5="api /toppersystem.php फ़ाइल मान्य नहीं है। हम अनुशंसा करते हैं कि आप प्लगइन को अनइंस्टॉल करें और इसे फिर से इंस्टॉल करें";
    $txtts6="प्रामाणिक कोड पहले ही डाला जा चुका है। हम अनुशंसा करते हैं कि आप अपना ब्राउज़र कैश साफ़ करें और पृष्ठ को पुनः लोड करें";
    $txtts7="प्रमाणीकरण कोड पहले से ही प्लग इन में डाला और संग्रहीत किया गया है। हम अनुशंसा करते हैं कि आप अपना ब्राउज़र कैश साफ़ करें और पृष्ठ को पुनः लोड करें";
    $txtts8="फ़ाइलें लिखने योग्य नहीं हैं। अपने सर्वर पर फ़ाइलों और / या फ़ोल्डरों की अनुमतियों की जाँच करें";
}else if($hreflang_toppersystem == "ja"){ 
    $txtts0="不正アクセス。 HTTP_REFERER環境変数が正しく機能していることを確認します";
    $txtts1="REMOTE_ADDR環境変数が検出されませんでした";
    $txtts2="HTTP_USER_AGENT環境変数が検出されませんでした";
    $txtts3="入力する認証コードが無効です";
    $txtts4="api/toppersystem.phpファイルが存在しません。プラグインをアンインストールしてから再インストールすることをお勧めします";
    $txtts5="api/toppersystem.phpファイルが無効です。プラグインをアンインストールしてから再インストールすることをお勧めします";
    $txtts6="認証コードはすでに挿入されています。ブラウザのキャッシュをクリアしてページをリロードすることをお勧めします";
    $txtts7="認証コードはすでにプラグインに挿入され、保存されています。ブラウザのキャッシュをクリアしてページをリロードすることをお勧めします";
    $txtts8="ファイルは書き込み可能ではありません。サーバー上のファイルやフォルダの権限を確認してください";
}else if($hreflang_toppersystem == "pl"){ 
    $txtts0="Nieautoryzowany dostęp. Sprawdź, czy zmienna środowiskowa HTTP_REFERER działa poprawnie";
    $txtts1="Nie wykryliśmy zmiennej środowiskowej REMOTE_ADDR";
    $txtts2="Nie wykryliśmy zmiennej środowiskowej HTTP_USER_AGENT";
    $txtts3="Kod autoryzacji do wprowadzenia jest nieprawidłowy";
    $txtts4="Plik api / toppersystem.php nie istnieje. Zalecamy odinstalowanie wtyczki i ponowne zainstalowanie";
    $txtts5="Plik api / toppersystem.php jest nieprawidłowy. Zalecamy odinstalowanie wtyczki i ponowne zainstalowanie";
    $txtts6="Kod autoryzacji jest już wstawiony. Zalecamy wyczyszczenie pamięci podręcznej przeglądarki i ponowne załadowanie strony";
    $txtts7="Auth Code jest już wstawiony i zapisany we wtyczce. Zalecamy wyczyszczenie pamięci podręcznej przeglądarki i ponowne załadowanie strony";
    $txtts8="Pliki nie są zapisywalne. Sprawdź uprawnienia plików i/lub folderów na swoim serwerze";
}else if($hreflang_toppersystem == "pt"){ 
    $txtts0="Acesso não autorizado. Verifique se a variável de ambiente HTTP_REFERER está funcionando corretamente";
    $txtts1="Não detectamos a variável de ambiente REMOTE_ADDR";
    $txtts2="Não detectamos a variável de ambiente HTTP_USER_AGENT";
    $txtts3="O código de autenticação a ser inserido é inválido";
    $txtts4="O arquivo api/toppersystem.php não existe. Recomendamos que você desinstale o plug-in e reinstale-o novamente";
    $txtts5="O arquivo api/toppersystem.php não é válido. Recomendamos que você desinstale o plug-in e reinstale-o novamente";
    $txtts6="O código de autenticação já está inserido. Recomendamos que você limpe o cache do seu navegador e recarregue a página";
    $txtts7="O código de autenticação já está inserido e armazenado no plugin. Recomendamos que você limpe o cache do seu navegador e recarregue a página";
    $txtts8="Os arquivos não são graváveis. Verifique as permissões dos arquivos e/ou pastas em seu servidor";
}else if($hreflang_toppersystem == "ru"){ 
    $txtts0="Не авторизованный доступ. Убедитесь, что переменная среды HTTP_REFERER работает правильно.";
    $txtts1="Мы не обнаружили переменную окружения REMOTE_ADDR.";
    $txtts2="Мы не обнаружили переменную среды HTTP_USER_AGENT.";
    $txtts3="Вводимый код авторизации недействителен";
    $txtts4="Файл api/toppersystem.php не существует. Мы рекомендуем вам удалить плагин и переустановить его снова.";
    $txtts5="Файл api/toppersystem.php недействителен. Мы рекомендуем вам удалить плагин и переустановить его снова.";
    $txtts6="Код авторизации уже вставлен. Рекомендуем очистить кеш браузера и перезагрузить страницу";
    $txtts7="Код авторизации уже вставлен и сохранен в плагине. Рекомендуем очистить кеш браузера и перезагрузить страницу";
    $txtts8="Файлы недоступны для записи. Проверьте права доступа к файлам и/или папкам на вашем сервере";
}else if($hreflang_toppersystem == "zh"){ 
    $txtts0="越权存取。验证 HTTP_REFERER 环境变量是否正常工作";
    $txtts1="我们没有检测到 REMOTE_ADDR 环境变量";
    $txtts2="我们没有检测到 HTTP_USER_AGENT 环境变量";
    $txtts3="要输入的验证码无效";
    $txtts4="api/toppersystem.php 文件不存在。我们建议您卸载插件并重新安装";
    $txtts5="api/toppersystem.php 文件无效。我们建议您卸载插件并重新安装";
    $txtts6="验证码已插入。我们建议您清除浏览器缓存并重新加载页面";
    $txtts7="验证码已插入并存储在插件中。我们建议您清除浏览器缓存并重新加载页面";
    $txtts8="文件不可写。检查服务器上文件和/或文件夹的权限";
}else if($hreflang_toppersystem == "he"){ 
    $txtts0="גישה לא מורשית. ודא שמשתנה הסביבה HTTP_REFERER פועל כהלכה";
    $txtts1="לא זיהינו את משתנה הסביבה REMOTE_ADDR";
    $txtts2="לא זיהינו את משתנה הסביבה HTTP_USER_AGENT";
    $txtts3="קוד האימות שיש להזין אינו חוקי";
    $txtts4="הקובץ api / toppersystem.php אינו קיים. אנו ממליצים להסיר את התוסף ולהתקין אותו מחדש";
    $txtts5="הקובץ api / toppersystem.php אינו חוקי. אנו ממליצים להסיר את התוסף ולהתקין אותו מחדש";
    $txtts6="קוד אימות כבר הוכנס. אנו ממליצים לנקות את המטמון של הדפדפן ולטעון מחדש את הדף";
    $txtts7="קוד אימות כבר הוכנס ומאוחסן בתוסף. אנו ממליצים לנקות את המטמון של הדפדפן ולטעון מחדש את הדף";
    $txtts8="הקבצים אינם ניתנים לכתיבה. בדוק את ההרשאות של הקבצים ו/או התיקיות בשרת שלך";
}else if($hreflang_toppersystem == "la"){ 
    $txtts0="Aditum alienum. Cognoscere quod HTTP_REFERER ambitus variabilis est, recte laborat";
    $txtts1="REMOTE_ADDR ambitus variabilis non deprehendebamus";
    $txtts2="Nos ambitum variabilem HTTP_USER_AGENT deprehendere non potuimus";
    $txtts3="Auth Code ut intravit invalidum est";
    $txtts4="Api / toppersystem.php fasciculus non est. Praecipimus ut plugin te amoveas et iterum restituas";
    $txtts5="Api / toppersystem.php lima non valet. Praecipimus ut plugin te amoveas et iterum restituas";
    $txtts6="Iam inseruit Codex Auth. Commendamus ut navigatrum purgaveris et paginam reload";
    $txtts7="Auth Codex iam insertus et in plugin repositus est. Commendamus ut navigatrum purgaveris et paginam reload";
    $txtts8="Documenta writable non sunt. Reprehendo licentias files et / vel folder in vestri server";
}else{   
    $txtts0="Unauthorized access. Verify that the HTTP_REFERER environment variable is working correctly";
    $txtts1="We did not detect the REMOTE_ADDR environment variable";
    $txtts2="We did not detect the HTTP_USER_AGENT environment variable";
    $txtts3="Auth Code to be entered is invalid";
    $txtts4="The api / toppersystem.php file does not exist. We recommend that you uninstall the plugin and reinstall it again";
    $txtts5="The api / toppersystem.php file is not valid. We recommend that you uninstall the plugin and reinstall it again";
    $txtts6="Auth Code is already inserted. We recommend that you clear your browser cache and reload the page";
    $txtts7="Auth Code is already inserted and stored in the plugin. We recommend that you clear your browser cache and reload the page";
    $txtts8="The files are not writable. Check the permissions of the files and / or folders on your server";
}

if(($paginaprovenienzats != "$paginaprovenienzats_controllo")&&($paginaprovenienzats != "")){
    if((isset($_SERVER["REMOTE_ADDR"]))&&(trim($_SERVER["REMOTE_ADDR"]) != "")){
		if((isset($_SERVER["HTTP_USER_AGENT"]))&&(trim($_SERVER["HTTP_USER_AGENT"]) != "")){

	        if((isset($_POST["authcode_toppersystem_register"]) && trim($_POST["authcode_toppersystem_register"]) != "")) {
		        $authcode_toppersystem_register=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['authcode_toppersystem_register'])), array());	
	        }else{
		        $authcode_toppersystem_register="";
	        }
 
            if($authcode_toppersystem_register != ""){
                $pathfiletoppersystemphp=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/private.php";
                $pathfileindextoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/IndexToppersystem.txt";
                $pathfilesavetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveToppersystem.txt";

                #$pathfileindex="toppersystem.php";
                $pathfileindex="$pathfiletoppersystemphp";
                if(file_exists($pathfileindex)){
                    $block =32*32;
                    $fh="";
                    $num_line_tot=0;
                    if ($fh = fopen("$pathfileindex", "r")) { 
                       $left='';
                        $contenuto_file_salvato_index="";

                        while (!feof($fh)) {
                            $temp = fread($fh, $block);  
                            $fgetslines = explode("\n",$temp);
                            $fgetslines[0]=$left.$fgetslines[0];
                            if(!feof($fh) )$left = array_pop($lines);           
                                foreach ($fgetslines as $k => $line) {
                                    $contenuto_file_salvato_index.="$line\n";
                                }
                            }
                       }
                       fclose($fh);
                       if(str_replace("toppersystemapikeysecretsite","",$contenuto_file_salvato_index) != "$contenuto_file_salvato_index"){
                            if(str_replace("=\"\";","",$contenuto_file_salvato_index) != "$contenuto_file_salvato_index"){
								
                                $auth_memory=TopperSystemAuthTS::AuthTopperSystem();
                                if(($auth_memory == "")){
                                    if (is_writable($pathfileindex)) {
                                        $contenuto_file_salva_index=str_replace("=\"\";","=\"$authcode_toppersystem_register\";",$contenuto_file_salvato_index);                                
                                        chmod("$pathfileindex",0644);
                                        $textfilem=fopen($pathfileindex, "w");
                                        $scrivim=trim($contenuto_file_salva_index);
                                        fwrite($textfilem,$scrivim);
                                        fclose($textfilem);

                                        chmod("$pathfileindex",0444);
                                        chmod("$pathfileindextoppersystem",0444);
                                        chmod("$pathfilesavetoppersystem",0444); 

                                        $return="ok";
                                    }else{
                                        $return="$txtts8";
                                    }
                                }else{
                                    $return="$txtts7";
                                }
                            }else{
                                $return="$txtts6";
                            }
                       }else{
                            $return="$txtts5";
                       }
                  }else{
                    $return="$txtts4";
                  }
              }else{
                $return="$txtts3";
              }
        }else{
            $return="$txtts2";
        }
    }else{
        $return="$txtts1";
    }
}else{
    $return="$txtts0";
}
echo wp_kses("$return", array());
}
}
if(( current_user_can( 'administrator' ) )){
@add_action('init', @TopperSystemExecuteFileregister::runts(), 2);
}
}

}
}
}
?>