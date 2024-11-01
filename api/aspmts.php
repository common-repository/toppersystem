<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileaspmts {
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

    public static function result_domain_name($url){
        $url=str_replace("://","[TsostituisciS]",$url);
        $url=explode("/",$url)["0"];
        $url=explode("?",$url)["0"];
        $url=explode("#",$url)["0"];
        $url=str_replace("[TsostituisciS]","://",$url);    
        return $url;
    }

    public static function result_page_name_no_domain($url){
        $url=str_replace(TopperSystemSetFileaspmts::result_domain_name($url),"",$url);
        return $url;
    }


    public static function leggiDir (&$list, $dir)
    {
        if(is_dir($dir)){
            if (($hdir = opendir ($dir)) !== FALSE)
            {
	            while (($name = readdir ($hdir)) !== FALSE)
	            {
                    if ($name != "." && $name != "..")
                    {

	                    #$fullname = realpath ($dir . "/" . $name);
	                    $fullname = ($dir . "/" . $name);
	                    
	                    array_push ($list, $fullname);

	                    if (is_dir ($fullname)){
                            TopperSystemSetFileaspmts::leggiDir ($list, $fullname);
	                    }

                    }

                    $name="";
                    $fullname="";
	            }

	            closedir ($hdir);
            }
	    }
	    
	    $dir="";
	    $hdir="";
    }

    public static function verifica_esistenza_file_nelle_directory($stringa,$directory){
	    
	    $conta_occorrenze=0;
	    if(trim($stringa) != ""){
	    
            $lista_trovati = array('lista_trovati' => null);
            $lista_path = array('lista_path' => null);

            TopperSystemSetFileaspmts::leggiDir ($lista_path, $directory);

            foreach ($lista_path as $path)
            {
	            $path_verifica=str_replace("/$stringa","",$path);
	            if($path != $path_verifica){

                    $lista_trovati[$conta_occorrenze]=$path;
                    $conta_occorrenze++;

	            }	
                $path_verifica="";
                $path="";
            }

	    }
	    
	    if($conta_occorrenze == "0"){
            $return=array('lista_trovati' => null);
	    }else{
            $return=$lista_trovati;
	    }

	    $stringa="";
	    $directory="";
	    $conta_occorrenze="";
	    if(is_array($lista_trovati)){$lista_trovati = array();}
	    if(is_array($lista_path)){$lista_path = array();}
	    return $return;
    }

    public static function ectract_data_file($n_file_received,$cat_file,$list_data_all){
        $line_preleva="";
        if($n_file_received != ""){
            if($cat_file != ""){        
                if($n_file_received >= 1){
                    $pathdirlog=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log";

                    for($i=0;$i<=$n_file_received;$i++){
                        if($i == "0"){
                            $nfile="";
                        }else{
                            $nfile="$i";
                        }      
                        $pathfileindex="$pathdirlog/$cat_file$nfile.txt";
                        if(file_exists($pathfileindex)){

                        $pathfilecontents=file_get_contents("$pathfileindex");
                        if($pathfilecontents != ""){
	                        $nstblok=count(explode("\n",$pathfilecontents));
	                        $block=$nstblok*4000;
                        }else{
	                        $block=32*32;
                        }
                        $pathfilecontents="";
                        $nstblok="";
                        $fh="";
                        $num_line_tot=0;
                        if ($fh = fopen("$pathfileindex", "r")) { 
                            $left='';
                            while (!feof($fh)) {// read the file
                                $temp = fread($fh, $block);  
                                $fgetslines = explode("\n",$temp);
                                $fgetslines[0]=$left.$fgetslines[0];
                                if(!feof($fh) )$left = array_pop($lines);           
                                    foreach ($fgetslines as $k => $line) {
                                        if(trim($line) != ""){
                                            if(isset(explode("||||",$line)["5"])){ 
                                                if(explode("||||",$line)["1"] != ""){      
                                                    $line_preleva=explode("||||",$line)["1"]."||||".explode("||||",$line)["0"]."||||".explode("||||",$line)["2"]."||||".explode("||||",$line)["3"]."||||".explode("||||",$line)["4"]."||||".explode("||||",$line)["5"];
                                                    array_push ($list_data_all, $line_preleva);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            fclose($fh);

                            $fh="";
                        }

                    }
                
                }

            }
        }
        return $list_data_all;
    }

    public static function verify_date($data){
        $return="";
        if(trim($data) != ""){
            $data_array=explode("-",trim($data));
            if((isset($data_array["0"]))&&(isset($data_array["1"]))&&(isset($data_array["2"]))){
                if((strlen(trim($data_array["0"])) == "4")&&(strlen(trim($data_array["1"])) == "2")&&(strlen(trim($data_array["2"])) == "2")){    
                    $return="ok";
                }
            }
            $data_array=array();
            $data="";
        }
        return $return;
    }

    public static function verify_time($data){
        $return="";
        if(trim($data) != ""){
            $data_array=explode(":",trim($data));
            if((isset($data_array["0"]))&&(isset($data_array["1"]))&&(isset($data_array["2"]))){
                if((strlen(trim($data_array["0"])) == "2")&&(strlen(trim($data_array["1"])) == "2")&&(strlen(trim($data_array["2"])) == "2")){    
                    $return="ok";
                }
            }
            $data_array=array();
            $data="";
        }
        return $return;
    }

    public static function renderhtml($data_ok){
        $return="";
        if(trim($data_ok) != ""){
            $array_data_ok=explode("||||",trim($data_ok));
            if((isset($array_data_ok["1"]))&&(isset($array_data_ok["2"]))&&(isset($array_data_ok["3"]))&&(isset($array_data_ok["4"]))&&(isset($array_data_ok["5"]))){

                $status_ok="ok";

                if($status_ok != ""){    
                    $array_campo_data=explode(" ",$array_data_ok["0"]);
                    if((isset($array_campo_data["0"]))&&(isset($array_campo_data["1"]))){
                        $campo_data_ok=trim($array_campo_data["0"]);    
                        $campo_ora_ok=trim($array_campo_data["1"]); 
                        if((TopperSystemSetFileaspmts::verify_date("$campo_data_ok") == "ok")&&(TopperSystemSetFileaspmts::verify_time("$campo_ora_ok") == "ok")){
	                $ip=$array_data_ok["1"];
	                $url=$array_data_ok["2"];
	                $useragent=$array_data_ok["3"];
	                $servername=$array_data_ok["4"];
	                $ipserver=$array_data_ok["5"];
	                
                $return="<tr><td class=\"eventstd_ts\">$campo_data_ok</td><td class=\"eventstd_ts\">$campo_ora_ok</td><td class=\"eventstd_ts\">$ip</td><td class=\"eventstd_ts\">$url</td><td class=\"eventstd_ts\">$useragent</td><td class=\"eventstd_ts\">$servername</td><td class=\"eventstd_ts\">$ipserver</td></tr>"; 
                        }          
                    }
                }
            
            }
        }
        return $return;
    }
}

class TopperSystemExecuteFileaspmts {
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
			   $txtts3="Data";
			   $txtts4="Ora";
			   $txtts5="IP";
			   $txtts6="Richiesta";
			   $txtts7="User Agent";
			   $txtts8="Nome Server";
			   $txtts9="IP Server";
			   $txtts10="Valore";
			   $txtts11="Azione";
			   $txtts12="Salva";
			   $txtts14="Eccezioni salvate";
			   $txtts15="Aggiungi nuova eccezione";
               $txtts16="Nessun dato disponibile";
			   $txtts17="Il servizio non è disponibile ne attivabile perché è stato rilevato il file .htaccess nella root del website vuoto.";
			   $txtts18="Il servizio non è disponibile ne attivabile perché non è stato rilevato il file .htaccess nella root del website.";
			   $txtts19="Il servizio risulta disattivato! Per abilitarlo";
               $txtts20="clicca qui";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="تاريخ";
			   $txtts4="الآن";
			   $txtts5="IP";
			   $txtts6="طلب";
			   $txtts7="وكيل المستخدم";
			   $txtts8="اسم الخادم";
			   $txtts9="خادم IP";
			   $txtts10="القيمة";
			   $txtts11="عمل";
			   $txtts12="حفظ";
			   $txtts14="تم حفظ الاستثناءات";
			   $txtts15="أضف استثناء جديد";
               $txtts16="لا تتوافر بيانات";
			   $txtts17="الخدمة غير متاحة أو يمكن تفعيلها لأنه تم اكتشاف ملف .htaccess في جذر موقع الويب الفارغ.";
			   $txtts18="الخدمة غير متاحة أو يمكن تفعيلها لأنه لم يتم اكتشاف ملف .htaccess الموجود في جذر موقع الويب.";
			   $txtts19="الخدمة معطلة! لتمكينه";
               $txtts20="انقر هنا";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Datum";
			   $txtts4="Jetzt";
			   $txtts5="IP";
			   $txtts6="Anfrage";
			   $txtts7="User-Agent";
			   $txtts8="Servername";
			   $txtts9="IP Server";
			   $txtts10="Wert";
			   $txtts11="Aktion";
			   $txtts12="Sparen";
			   $txtts14="Ausnahmen gespeichert";
			   $txtts15="Neue Ausnahme hinzufügen";
               $txtts16="Keine Daten verfügbar";
			   $txtts17="Der Dienst ist nicht verfügbar oder kann nicht aktiviert werden, da die .htaccess-Datei im Stammverzeichnis der leeren Website erkannt wurde.";
			   $txtts18="Der Dienst ist nicht verfügbar oder kann nicht aktiviert werden, da die .htaccess-Datei im Stammverzeichnis der Website nicht erkannt wurde.";
			   $txtts19="Der Dienst ist deaktiviert! Um es zu aktivieren";
               $txtts20="klicken Sie hier";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Fecha";
			   $txtts4="Ahora";
			   $txtts5="IP";
			   $txtts6="Solicitud";
			   $txtts7="Agente de usuario";
			   $txtts8="Nombre del servidor";
			   $txtts9="Servidor IP";
			   $txtts10="Valor";
			   $txtts11="Acción";
			   $txtts12="Salvar";
			   $txtts14="Excepciones guardadas";
			   $txtts15="Agregar nueva excepción";
               $txtts16="Datos no disponibles";
			   $txtts17="El servicio no está disponible o no se puede activar porque se ha detectado el archivo .htaccess en la raíz de la web vacía.";
			   $txtts18="El servicio no está disponible o se puede activar porque no se ha detectado el archivo .htaccess en la raíz del sitio web.";
			   $txtts19="¡El servicio está deshabilitado! para habilitarlo";
               $txtts20="haga clic aquí";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Date";
			   $txtts4="Maintenant";
			   $txtts5="IP";
			   $txtts6="Demande";
			   $txtts7="Agent utilisateur";
			   $txtts8="Nom du serveur";
			   $txtts9="Serveur IP";
			   $txtts10="Valeur";
			   $txtts11="Action";
			   $txtts12="Sauver";
			   $txtts14="Exceptions enregistrées";
			   $txtts15="Ajouter une nouvelle exception";
               $txtts16="Pas de données disponibles";
			   $txtts17="Le service n'est pas disponible ou peut être activé car le fichier .htaccess a été détecté à la racine du site vide.";
			   $txtts18="Le service n'est pas disponible ou peut être activé car le fichier .htaccess à la racine du site n'a pas été détecté.";
			   $txtts19="Le service est désactivé ! Pour l'activer";
               $txtts20="cliquez ici";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="तारीख";
			   $txtts4="अभी";
			   $txtts5="आईपी";
			   $txtts6="निवेदन";
			   $txtts7="उपभोक्ता अभिकर्ता";
			   $txtts8="सर्वर का नाम";
			   $txtts9="आईपी ​​सर्वर";
			   $txtts10="मूल्य";
			   $txtts11="कार्य";
			   $txtts12="सहेजें";
			   $txtts14="अपवाद सहेजे गए";
			   $txtts15="नया अपवाद जोड़ें";
               $txtts16="कोई डेटा मौजूद नहीं";
			   $txtts17="सेवा उपलब्ध नहीं है या सक्रिय नहीं की जा सकती क्योंकि .htaccess फ़ाइल खाली वेबसाइट के रूट में पाई गई है।";
			   $txtts18="सेवा उपलब्ध नहीं है या सक्रिय नहीं की जा सकती क्योंकि वेबसाइट के रूट में .htaccess फ़ाइल का पता नहीं चला है।";
			   $txtts19="सेवा अक्षम है! इसे सक्षम करने के लिए";
               $txtts20="यहाँ क्लिक करें";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="日付";
			   $txtts4="今";
			   $txtts5="IP";
			   $txtts6="リクエスト";
			   $txtts7="ユーザーエージェント";
			   $txtts8="サーバー名";
			   $txtts9="IPサーバー";
			   $txtts10="値";
			   $txtts11="アクション";
			   $txtts12="保存する";
			   $txtts14="保存された例外";
			   $txtts15="新しい例外を追加";
               $txtts16="データなし";
			   $txtts17="空の Web サイトのルートで .htaccess ファイルが検出されたため、サービスは利用できないか、アクティブ化できません。";
			   $txtts18="Web サイトのルートにある .htaccess ファイルが検出されないため、サービスは利用できないか、アクティブ化できません。";
			   $txtts19="サービスが無効になっています! 有効にするには";
               $txtts20="ここをクリック";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Data";
			   $txtts4="Teraz";
			   $txtts5="IP";
			   $txtts6="Żądanie";
			   $txtts7="Agent użytkownika";
			   $txtts8="Nazwa serwera";
			   $txtts9="Serwer IP";
			   $txtts10="Wartość";
			   $txtts11="Akcja";
			   $txtts12="Zapisać";
			   $txtts14="Wyjątki zostały zapisane";
			   $txtts15="Dodaj nowy wyjątek";
               $txtts16="Brak dostępnych danych";
			   $txtts17="Usługa nie jest dostępna lub można ją aktywować, ponieważ w katalogu głównym pustej witryny wykryto plik .htaccess.";
			   $txtts18="Usługa nie jest dostępna lub można ją aktywować, ponieważ nie wykryto pliku .htaccess w katalogu głównym witryny.";
			   $txtts19="Usługa jest wyłączona! Aby to włączyć";
               $txtts20="kliknij tutaj";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Encontro";
			   $txtts4="Agora";
			   $txtts5="IP";
			   $txtts6="Solicitação";
			   $txtts7="Agente de usuário";
			   $txtts8="Nome do servidor";
			   $txtts9="Servidor IP";
			   $txtts10="Valor";
			   $txtts11="Açao";
			   $txtts12="Salve";
			   $txtts14="Exceções salvas";
			   $txtts15="Adicionar nova exceção";
               $txtts16="Nenhum dado disponível";
			   $txtts17="O serviço não está disponível ou pode ser ativado porque o arquivo .htaccess foi detectado na raiz do site vazio.";
			   $txtts18="O serviço não está disponível ou pode ser ativado porque o arquivo .htaccess na raiz do site não foi detectado.";
			   $txtts19="O serviço está desativado! Para habilitá-lo";
               $txtts20="clique aqui";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Дата";
			   $txtts4="Сейчас";
			   $txtts5="IP";
			   $txtts6="Запрос";
			   $txtts7="Пользовательский агент";
			   $txtts8="Название сервера";
			   $txtts9="IP-сервер";
			   $txtts10="Стоимость";
			   $txtts11="действие";
			   $txtts12="Сохранить";
			   $txtts14="Исключения сохранены";
			   $txtts15="Добавить новое исключение";
               $txtts16="Данные недоступны";
			   $txtts17="Услуга недоступна или может быть активирована, поскольку в корне пустого сайта обнаружен файл .htaccess.";
			   $txtts18="Услуга недоступна или может быть активирована, поскольку не обнаружен файл .htaccess в корне сайта.";
			   $txtts19="Услуга отключена! Чтобы включить его";
               $txtts20="кликните сюда";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="日期";
			   $txtts4="现在";
			   $txtts5="知识产权";
			   $txtts6="请求";
			   $txtts7="用户代理";
			   $txtts8="服务器名称";
			   $txtts9="IP服务器";
			   $txtts10="值";
			   $txtts11="行动";
			   $txtts12="保存";
			   $txtts14="例外已保存";
			   $txtts15="添加新的例外";
               $txtts16="无可用数据";
			   $txtts17="由于在空网站的根目录中检测到 .htaccess 文件，因此该服务不可用或无法激活。";
			   $txtts18="由于未检测到网站根目录中的 .htaccess 文件，该服务不可用或无法激活。";
			   $txtts19="该服务被禁用！ 启用它";
               $txtts20="点击这里";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="תַאֲרִיך";
			   $txtts4="עַכשָׁיו";
			   $txtts5="IP";
			   $txtts6="בַּקָשָׁה";
			   $txtts7="סוכן משתמש";
			   $txtts8="שם שרת";
			   $txtts9="שרת IP";
			   $txtts10="ערך";
			   $txtts11="פעולה";
			   $txtts12="לשמור";
			   $txtts14="חריגים שנשמרו";
			   $txtts15="הוסף חריג חדש";
               $txtts16="אין נתונים זמינים";
			   $txtts17="השירות אינו זמין או שניתן להפעילו מכיוון שקובץ ה-.htaccess זוהה בשורש האתר הריק.";
			   $txtts18="השירות אינו זמין או שניתן להפעילו מכיוון שקובץ ה-.htaccess בשורש האתר לא זוהה.";
			   $txtts19="השירות מושבת! כדי לאפשר את זה";
               $txtts20="לחץ כאן";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Date";
			   $txtts4="Autem";
			   $txtts5="IP";
			   $txtts6="Request";
			   $txtts7="User Agent";
			   $txtts8="Servo nomen eius";
			   $txtts9="Servo IP";
			   $txtts10="Valorem";
			   $txtts11="Actum";
			   $txtts12="Salvare";
			   $txtts14="Exceptiones salvus";
			   $txtts15="Exceptis addere novum";
               $txtts16="Nulla notitia available";
			   $txtts17="Ministerium praesto non est vel emoveri potest quia fasciculus .htaccessus in radice vacui loci deprehensus est.";
			   $txtts18="Ministerium praesto non est vel emoveri potest quia fasciculus .htaccessus in radice paginae non detectus est.";
			   $txtts19="Ministerium erret! Ad enable it";
               $txtts20="clige hic";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Date";
			   $txtts4="Now";
			   $txtts5="IP";
			   $txtts6="Request";
			   $txtts7="User Agent";
			   $txtts8="Server name";
			   $txtts9="IP Server";
			   $txtts10="Value";
			   $txtts11="Action";
			   $txtts12="Save";
			   $txtts14="Exceptions saved";
			   $txtts15="Add new exception";
               $txtts16="No data available";
			   $txtts17="The service is not available or can be activated because the .htaccess file has been detected in the root of the empty website.";
			   $txtts18="The service is not available or can be activated because the .htaccess file in the root of the website has not been detected.";
			   $txtts19="The service is disabled! To enable it";
               $txtts20="click here";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

						$fileHtaxxess_ts=TopperSystemSetFileaspmts::detect_pathfile()."."."ht"."acc"."ess";
						if(file_exists($fileHtaxxess_ts)){
							$htaxxess_toppersystem=@file_get_contents($fileHtaxxess_ts);			
							if(trim($htaxxess_toppersystem) != ""){
								#verifica gli stati
								if((str_replace("errordocument 403","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem"))||(str_replace("order allow,deny","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem"))){
									$check_antispam="";
                                    $scrivi_message="<div class=\"msg_error_toppersystem\"><small><br>$txtts19 <a rel=\"nofollow\" href=\"javascript:GoIntX21fromMenuGuideToppersystem();\">$txtts20</a>.<br>&nbsp;</small></div>";
								}else{
									$check_antispam=" checked";
                                    $scrivi_message="";
								}						
							}else{
								$scrivi_message="<div class=\"msg_error_toppersystem\"><small><br>$txtts17<br>&nbsp;</small></div>";
							}
							$htaxxess_toppersystem="";
						}else{
							$scrivi_message="<div class=\"msg_error_toppersystem\"><small><br>$txtts18<br>&nbsp;</small></div>";
						}

                        $pathdirlog=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log";

                        $list_data_all=array('list_data_all' => null);
                        $n_file_received=count(TopperSystemSetFileaspmts::verifica_esistenza_file_nelle_directory("ControlAspmToppersystem","$pathdirlog")) - 1;
                        $list_data_all1=TopperSystemSetFileaspmts::ectract_data_file($n_file_received,"ControlAspmToppersystem",$list_data_all);
                        
                        $line_preleva="";                        
                        array_multisort($list_data_all1, SORT_DESC, SORT_STRING, $list_data_all1);
		                foreach ($list_data_all1 as $data_ok)
		                {
                            if($data_ok != ""){
			                    $line_preleva.=TopperSystemSetFileaspmts::renderhtml($data_ok);                                
                            }
		                }

                        if(trim($line_preleva) == ""){
                            $box_general="<div id=\"box_general_request_events_toppersystem\" class=\"display_none_ts\"><table class=\"eventstables_ts margin0\"><tr><tr><td class=\"eventstdnodata_ts wxdthe\">$txtts16</td></tr></table></div>";
                        }else{                        
                            $box_general="<div id=\"box_general_request_events_toppersystem\" class=\"display_none_ts\"><table class=\"eventstables_ts margin0\"><tr><td class=\"eventstd_ts\"><strong>$txtts3</strong></td><td class=\"eventstd_ts\"><strong>$txtts4</strong></td><td class=\"eventstd_ts\"><strong>$txtts5</strong></td><td class=\"eventstd_ts\"><strong>$txtts6</strong></td><td class=\"eventstd_ts\"><strong>$txtts7</strong></td><td class=\"eventstd_ts\"><strong>$txtts8</strong></td><td class=\"eventstd_ts\"><strong>$txtts9</strong></td></tr>$line_preleva</table></div>";
                        }
						
						$line_preleva2="<div class=\"pxdding12\"><big>$txtts15</big></div><table class=\"eventstables_ts margin0\"><tr><td class=\"eventstd_ts\"><strong>$txtts10</strong></td><td class=\"eventstd_ts\"><center><strong>$txtts5</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts6</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts7</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts8</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts9</strong></center></td><td class=\"eventstd_ts\"><center><strong>$txtts11</strong></center></td></tr><tr><td class=\"eventstd_ts\"><input id=\"value_ts\" type=\"text\" name=\"value_ts\" value=\"\"></td><td class=\"eventstd_ts\"><center><input id=\"ip_aspmts_save\" name=\"ip_aspmts_save\" type=\"checkbox\"></center></td><td class=\"eventstd_ts\"><center><input id=\"page_aspmts_save\" name=\"page_aspmts_save\" type=\"checkbox\"></center></td><td class=\"eventstd_ts\"><center><input id=\"useragent_aspmts_save\" name=\"useragent_aspmts_save\" type=\"checkbox\"></center></td><td class=\"eventstd_ts\"><center><input id=\"servername_aspmts_save\" name=\"servername_aspmts_save\" type=\"checkbox\"></center></td><td class=\"eventstd_ts\"><center><input id=\"ipservername_aspmts_save\" name=\"ipservername_aspmts_save\" type=\"checkbox\"></center></td><td class=\"eventstd_ts\"><center><div id=\"block_save_details_aspmts_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_exception_aspmts();\">$txtts12</a></div><div id=\"block_save_details_loading_aspmts_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center></td></tr></table>";

                        $box_page="<div id=\"box_page_request_events_toppersystem\">$line_preleva2<br><br><div class=\"pxdding12\"><big>$txtts14</big></div><div id=\"box_exceptions_request_events_toppersystem\">&nbsp;</div></div>";
                        
                        $contenuto_link_sito_send="$scrivi_message$box_page$box_general";

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
@add_action('init', @TopperSystemExecuteFileaspmts::runts(), 2);
}
}

}
}
}
?>