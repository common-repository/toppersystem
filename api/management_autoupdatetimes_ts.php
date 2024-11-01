<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileAutoUpdatetimes {
    public static function result_domain_name($url){
        $url=str_replace("://","[TsostituisciS]",$url);
        $url=explode("/",$url)["0"];
        $url=explode("?",$url)["0"];
        $url=explode("#",$url)["0"];
        $url=str_replace("[TsostituisciS]","://",$url);    
        return $url;
    }

    public static function result_page_name_no_domain($url){
        $url=str_replace(TopperSystemSetFileAutoUpdatetimes::result_domain_name($url),"",$url);
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
                            TopperSystemSetFileAutoUpdatetimes::leggiDir ($list, $fullname);
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

            TopperSystemSetFileAutoUpdatetimes::leggiDir ($lista_path, $directory);

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

    public static function extractstringa($stringa, $inizio, $fine) {
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
		unset($stringa);
		unset($inizio);
		unset($fine);
		unset($stringa_confronta_inizio);
		unset($stringa_confronta_fine);
		unset($ini);
		unset($len);		
        return $stringa_restituisci;
    }
}

class TopperSystemExecuteFileAutoUpdatetimes {
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
			   $txtts4="ore";
			   $txtts5="ora";
			   $txtts9="minuti";
			   $txtts10="Subito";
			   $txtts11="Aggiornamenti automatici delle pagine ottimizzate lato client";
			   $txtts12="Le pagine ottimizzate saranno ottimizzate nuovamente solo all'atterraggio di un utente navigatore";
			   $txtts3="Aggiornamenti automatici delle pagine ottimizzate lato server";
			   $txtts14="Le pagine ottimizzate saranno ottimizzate nuovamente anche da una richiesta da parte i Motori di Ricerca";
			   $txtts15="Topper System SEO utilizza i certificati digitali per salvare le pagine ottimizzate del tuo sito in modo da aumentare notevolmente la sicurezza, la velocità di caricamento e alleggerire il carico di lavoro del tuo web server.";
			   $txtts16="Da qui puoi gestire i tempi degli aggiornamenti automatici delle pagine ottimizzate che vengono modificate da qualsiasi utente abilitato.";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts6="قم بتطبيق التغييرات التي تم إجراؤها";
			   $txtts7="يحفظ";
			   $txtts8="يلغي";
			   $txtts4="ساعات";
			   $txtts5="ساعة";
			   $txtts9="دقائق";
			   $txtts10="فورا";
			   $txtts11="التحديثات التلقائية للصفحات المحسنة من جانب العميل";
			   $txtts12="سيتم تحسين الصفحات المحسنة مرة أخرى فقط عندما يصل مستخدم المتصفح";
			   $txtts3="التحديثات التلقائية للصفحات المحسنة من جانب الخادم";
			   $txtts14="سيتم أيضًا تحسين الصفحات المحسنة مرة أخرى بناءً على طلب من محركات البحث";
			   $txtts15="يستخدم Topper System SEO الشهادات الرقمية لحفظ الصفحات المحسنة لموقعك من أجل زيادة الأمان وسرعة التحميل بشكل كبير وتخفيف عبء العمل على خادم الويب الخاص بك.";
			   $txtts16="من هنا يمكنك إدارة توقيت التحديثات التلقائية للصفحات المحسنة التي يتم تعديلها بواسطة أي مستخدم ممكّن.";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts6="Übernehmen Sie die vorgenommenen Änderungen";
			   $txtts7="Speichern";
			   $txtts8="Abbrechen";
			   $txtts4="Std";
			   $txtts5="Stunde";
			   $txtts9="Protokoll";
			   $txtts10="Sofort";
			   $txtts11="Automatische Aktualisierung clientseitig optimierter Seiten";
			   $txtts12="Die optimierten Seiten werden erst dann erneut optimiert, wenn ein Surfer-Benutzer landet";
			   $txtts3="Automatische Updates serverseitig optimierter Seiten";
			   $txtts14="Auch die optimierten Seiten werden durch eine Anfrage der Suchmaschinen noch einmal optimiert";
			   $txtts15="Topper System SEO verwendet digitale Zertifikate, um die optimierten Seiten Ihrer Website zu speichern, um die Sicherheit und Ladegeschwindigkeit deutlich zu erhöhen und die Arbeitslast Ihres Webservers zu verringern.";
			   $txtts16="Von hier aus können Sie den Zeitpunkt der automatischen Aktualisierungen der optimierten Seiten verwalten, die von jedem aktivierten Benutzer geändert werden.";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts6="Aplicar los cambios realizados";
			   $txtts7="Ahorrar";
			   $txtts8="Cancelar";
			   $txtts4="horas";
			   $txtts5="hora";
			   $txtts9="minutos";
			   $txtts10="De inmediato";
			   $txtts11="Actualizaciones automáticas de páginas optimizadas del lado del cliente";
			   $txtts12="Las páginas optimizadas se optimizarán nuevamente solo cuando llegue un usuario navegante.";
			   $txtts3="Actualizaciones automáticas de páginas optimizadas del lado del servidor";
			   $txtts14="Las páginas optimizadas también se optimizarán nuevamente a petición de los motores de búsqueda.";
			   $txtts15="Topper System SEO utiliza certificados digitales para guardar las páginas optimizadas de su sitio con el fin de aumentar significativamente la seguridad, la velocidad de carga y aligerar la carga de trabajo de su servidor web.";
			   $txtts16="Desde aquí puede gestionar el tiempo de las actualizaciones automáticas de las páginas optimizadas que modifica cualquier usuario habilitado.";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts6="Appliquer les modifications apportées";
			   $txtts7="Sauvegarder";
			   $txtts8="Annuler";
			   $txtts4="heures";
			   $txtts5="heure";
			   $txtts9="minutes";
			   $txtts10="De suite";
			   $txtts11="Mises à jour automatiques des pages optimisées côté client";
			   $txtts12="Les pages optimisées ne seront à nouveau optimisées que lorsqu'un utilisateur internaute atterrira";
			   $txtts3="Mises à jour automatiques des pages optimisées côté serveur";
			   $txtts14="Les pages optimisées seront également à nouveau optimisées par une requête des moteurs de recherche";
			   $txtts15="Topper System SEO utilise des certificats numériques pour sauvegarder les pages optimisées de votre site afin d'augmenter considérablement la sécurité, la vitesse de chargement et alléger la charge de travail de votre serveur web.";
			   $txtts16="De là, vous pouvez gérer le calendrier des mises à jour automatiques des pages optimisées qui sont modifiées par tout utilisateur activé.";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts6="किए गए परिवर्तनों को लागू करें";
			   $txtts7="सहेजें";
			   $txtts8="रद्द करें";
			   $txtts4="घंटे";
			   $txtts5="घंटा";
			   $txtts9="मिनट";
			   $txtts10="बिल्कुल अभी";
			   $txtts11="क्लाइंट-साइड अनुकूलित पृष्ठों का स्वचालित अपडेट";
			   $txtts12="अनुकूलित पेजों को दोबारा तभी अनुकूलित किया जाएगा जब कोई सर्फ़र उपयोगकर्ता उतरेगा";
			   $txtts3="सर्वर-साइड अनुकूलित पृष्ठों का स्वचालित अपडेट";
			   $txtts14="खोज इंजनों के अनुरोध पर अनुकूलित पृष्ठों को भी फिर से अनुकूलित किया जाएगा";
			   $txtts15="टॉपर सिस्टम एसईओ सुरक्षा, लोडिंग गति को बढ़ाने और आपके वेब सर्वर के कार्यभार को हल्का करने के लिए आपकी साइट के अनुकूलित पृष्ठों को सहेजने के लिए डिजिटल प्रमाणपत्रों का उपयोग करता है।";
			   $txtts16="यहां से आप किसी भी सक्षम उपयोगकर्ता द्वारा संशोधित अनुकूलित पृष्ठों के स्वचालित अपडेट के समय को प्रबंधित कर सकते हैं।";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts6="行った変更を適用します";
			   $txtts7="保存する";
			   $txtts8="キャンセル";
			   $txtts4="時間";
			   $txtts5="時間";
			   $txtts9="時間";
			   $txtts10="すぐに";
			   $txtts11="クライアント側で最適化されたページの自動更新";
			   $txtts12="最適化されたページは、サーファー ユーザーがアクセスした場合にのみ再度最適化されます。";
			   $txtts3="サーバー側で最適化されたページの自動更新";
			   $txtts14="最適化されたページは、検索エンジンからのリクエストによっても再度最適化されます。";
			   $txtts15="Topper System SEO は、セキュリティ、読み込み速度を大幅に向上させ、Web サーバーの負荷を軽減するために、デジタル証明書を使用してサイトの最適化されたページを保存します。";
			   $txtts16="ここから、有効なユーザーによって変更された最適化されたページの自動更新のタイミングを管理できます。";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts6="Zastosuj wprowadzone zmiany";
			   $txtts7="Zapisać";
			   $txtts8="Anuluj";
			   $txtts4="godziny";
			   $txtts5="godzina";
			   $txtts9="minuty";
			   $txtts10="Od razu";
			   $txtts11="Automatyczne aktualizacje stron zoptymalizowanych po stronie klienta";
			   $txtts12="Zoptymalizowane strony zostaną ponownie zoptymalizowane dopiero po wejściu na stronę użytkownika surfującego";
			   $txtts3="Automatyczne aktualizacje stron zoptymalizowanych po stronie serwera";
			   $txtts14="Zoptymalizowane strony zostaną również ponownie zoptymalizowane na żądanie wyszukiwarek";
			   $txtts15="Topper System SEO wykorzystuje certyfikaty cyfrowe do zapisywania zoptymalizowanych stron Twojej witryny, aby znacznie zwiększyć bezpieczeństwo, szybkość ładowania i odciążyć Twój serwer WWW.";
			   $txtts16="Stąd możesz zarządzać czasem automatycznych aktualizacji zoptymalizowanych stron, które są modyfikowane przez dowolnego włączonego użytkownika.";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts6="Aplique as alterações feitas";
			   $txtts7="Salve";
			   $txtts8="Cancelar";
			   $txtts4="horas";
			   $txtts5="hora";
			   $txtts9="minutos";
			   $txtts10="Agora mesmo";
			   $txtts11="Atualizações automáticas de páginas otimizadas do lado do cliente";
			   $txtts12="As páginas otimizadas serão otimizadas novamente somente quando um usuário surfista acessar";
			   $txtts3="Atualizações automáticas de páginas otimizadas do lado do servidor";
			   $txtts14="As páginas otimizadas também serão otimizadas novamente por solicitação dos motores de busca";
			   $txtts15="O Topper System SEO utiliza certificados digitais para salvar as páginas otimizadas do seu site a fim de aumentar significativamente a segurança, a velocidade de carregamento e aliviar a carga de trabalho do seu servidor web.";
			   $txtts16="A partir daqui você pode gerenciar o tempo das atualizações automáticas das páginas otimizadas que são modificadas por qualquer usuário habilitado.";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts6="Применить внесенные изменения";
			   $txtts7="Сохранять";
			   $txtts8="Отмена";
			   $txtts4="часы";
			   $txtts5="час";
			   $txtts9="минуты";
			   $txtts10="Сразу";
			   $txtts11="Автоматические обновления страниц, оптимизированных на стороне клиента.";
			   $txtts12="Оптимизированные страницы будут оптимизированы снова только тогда, когда на них зайдет пользователь-серфер.";
			   $txtts3="Автоматические обновления страниц, оптимизированных на стороне сервера.";
			   $txtts14="Оптимизированные страницы также будут снова оптимизированы по запросу поисковых систем.";
			   $txtts15="Topper System SEO использует цифровые сертификаты для сохранения оптимизированных страниц вашего сайта, чтобы значительно повысить безопасность, скорость загрузки и облегчить нагрузку на ваш веб-сервер.";
			   $txtts16="Отсюда вы можете управлять временем автоматического обновления оптимизированных страниц, измененных любым включенным пользователем.";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts6="应用所做的更改";
			   $txtts7="保存";
			   $txtts8="取消";
			   $txtts4="小时";
			   $txtts5="小时";
			   $txtts9="分钟";
			   $txtts10="马上";
			   $txtts11="自动更新客户端优化页面";
			   $txtts12="只有当冲浪者用户登陆时，优化后的页面才会再次优化";
			   $txtts3="服务器端优化页面自动更新";
			   $txtts14="优化后的页面也会根据搜索引擎的请求再次优化";
			   $txtts15="Topper System SEO 使用数字证书保存网站的优化页面，以显着提高安全性、加载速度并减轻网络服务器的工作负载。";
			   $txtts16="从这里，您可以管理由任何启用的用户修改的优化页面的自动更新时间。";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts6="החל את השינויים שבוצעו";
			   $txtts7="להציל";
			   $txtts8="לְבַטֵל";
			   $txtts4="שעות";
			   $txtts5="שעה";
			   $txtts9="דקות";
			   $txtts10="מיד";
			   $txtts11="עדכונים אוטומטיים של דפים מותאמים בצד הלקוח";
			   $txtts12="הדפים שעברו אופטימיזציה יעברו שוב אופטימיזציה רק ​​כאשר משתמש גולש ינחת";
			   $txtts3="עדכונים אוטומטיים של דפים מותאמים בצד השרת";
			   $txtts14="גם הדפים שעברו אופטימיזציה יעברו אופטימיזציה שוב על ידי בקשה של מנועי החיפוש";
			   $txtts15="Topper System SEO משתמש בתעודות דיגיטליות כדי לשמור את הדפים המותאמים באתר שלך על מנת להגביר משמעותית את האבטחה, מהירות הטעינה ולהקל על עומס העבודה של שרת האינטרנט שלך.";
			   $txtts16="מכאן תוכל לנהל את התזמון של העדכונים האוטומטיים של הדפים המותאמים אשר משתנים על ידי כל משתמש מופעל.";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts6="Applicare mutationes factae";
			   $txtts7="salvare";
			   $txtts8="Cancel";
			   $txtts4="horae";
			   $txtts5="hora";
			   $txtts9="minuta";
			   $txtts10="Ilicet";
			   $txtts11="Automatic updates ex parte clientis paginae optimized";
			   $txtts12="Paginae optimizatae iterum solum erunt optimized cum terras surfer usor";
			   $txtts3="Automatic updates ex parte optimized paginae servo";
			   $txtts14="Paginae optimizatae erunt etiam optimized per petitionem machinarum inquisitionis";
			   $txtts15="Topper System SEO utitur libellis digitalibus ad conservandas paginas optimized tuae situs ut signanter securitatem augeas, celeritatem loading et iniuram servientis telae tuae leves.";
			   $txtts16="Hinc leo automatariorum paginarum optimizedium momenta administrare potes quae ab aliquo usuario modificantur.";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts6="Apply the changes made";
			   $txtts7="Save";
			   $txtts8="Cancel";
			   $txtts4="hours";
			   $txtts5="hour";
			   $txtts9="minutes";
			   $txtts10="Right away";
			   $txtts11="Automatic updates of client-side optimized pages";
			   $txtts12="The optimized pages will be optimized again only when a surfer user lands";
			   $txtts3="Automatic updates of server-side optimized pages";
			   $txtts14="The optimized pages will also be optimized again by a request from the Search Engines";
			   $txtts15="Topper System SEO uses digital certificates to save the optimized pages of your site in order to significantly increase security, loading speed and lighten the workload of your web server.";
			   $txtts16="From here you can manage the timing of the automatic updates of the optimized pages that are modified by any enabled user.";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        $pathfileloadercss=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";

						$look_form=0;
						$add_position_left_right=""; 
                        $add_save=""; 
                        $fileCssLoaderl_ts="$pathfileloadercss";
						if(file_exists($fileCssLoaderl_ts)){
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
								$par_get_timesautoupdatetimes_prel_part1=TopperSystemSetFileAutoUpdatetimes::extractstringa($par_get_timesautoupdatetimes_toppersystem, 'par_get_timesautoupdate_spider_toppersystem="', '";');
                                $selected120="";
                                $selected300="";                                    
                                $selected600="";
                                $selected900="";
                                $selected1800="";
                                $selected7200="";
                                $selected14400="";
                                $selected28800="";
                                $selected43200="";
                                $selected57600="";
                                $selected72000="";
                                $selected86400="";
                                $selected3600="";
                                if($par_get_timesautoupdatetimes_prel_part1 == "120"){
                                   $selected120=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "300"){
                                   $selected300=" selected=\"selected\"";                                    
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "600"){
                                   $selected600=" selected=\"selected\"";  
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "900"){
                                   $selected900=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "1800"){
                                   $selected1800=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "7200"){
                                   $selected7200=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "14400"){
                                   $selected14400=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "28800"){
                                   $selected28800=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "43200"){
                                   $selected43200=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "57600"){
                                   $selected57600=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "72000"){
                                   $selected72000=" selected=\"selected\""; 
                                }else if($par_get_timesautoupdatetimes_prel_part1 == "86400"){
                                   $selected86400=" selected=\"selected\""; 
                                }else{
                                    $selected3600=" selected=\"selected\"";
                                }

								$par_get_timesautoupdatetimes_prel_part2=TopperSystemSetFileAutoUpdatetimes::extractstringa($par_get_timesautoupdatetimes_toppersystem, 'par_get_timesautoupdate_user_toppersystem="', '";');
                                $selected12_2="";
                                $selected120_2="";                              
                                $selected300_2="";
                                $selected900_2="";
                                $selected1800_2="";
                                $selected3600_2="";
                                $selected7200_2="";
                                $selected14400_2="";
                                $selected28800_2="";
                                $selected43200_2="";
                                $selected57600_2="";
                                $selected72000_2="";
                                $selected86400_2="";
                                $selected600_2="";
                                if($par_get_timesautoupdatetimes_prel_part2 == "12"){
                                   $selected12_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "120"){
                                   $selected120_2=" selected=\"selected\"";                                 
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "300"){
                                   $selected300_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "900"){
                                   $selected900_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "1800"){
                                   $selected1800_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "3600"){
                                   $selected3600_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "7200"){
                                   $selected7200_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "14400"){
                                   $selected14400_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "28800"){
                                   $selected28800_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "43200"){
                                   $selected43200_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "57600"){
                                   $selected57600_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "72000"){
                                   $selected72000_2=" selected=\"selected\"";
                                }else if($par_get_timesautoupdatetimes_prel_part2 == "86400"){
                                   $selected86400_2=" selected=\"selected\"";
                                }else{
                                   $selected600_2=" selected=\"selected\"";
                                }

                                $add_position_left_right.="<tr><td class=\"eventstd_ts\"><strong>$txtts11</strong><br><small>$txtts12</small></td><td class=\"eventstd_ts\"><select id=\"pos_sel_autoupdatetimes2_toppersystem_send\" name=\"pos_sel_autoupdatetimes2_toppersystem_send\"><option value=\"12\"$selected12_2>$txtts10</option><option value=\"120\"$selected120_2>2 $txtts9</option><option value=\"300\"$selected300_2>5 $txtts9</option><option value=\"600\"$selected600_2>10 $txtts9</option><option value=\"900\"$selected900_2>15 $txtts9</option><option value=\"1800\"$selected1800_2>30 $txtts9</option><option value=\"3600\"$selected3600_2>1 $txtts5</option><option value=\"7200\"$selected7200_2>2 $txtts4</option><option value=\"14400\"$selected14400_2>4 $txtts4</option><option value=\"28800\"$selected28800_2>8 $txtts4</option><option value=\"43200\"$selected43200_2>12 $txtts4</option><option value=\"57600\"$selected57600_2>16 $txtts4</option><option value=\"72000\"$selected72000_2>20 $txtts4</option><option value=\"86400\"$selected86400_2>24 $txtts4</option></select></td></tr>";
                                
                                $add_position_left_right.="<tr style=\"display:none;\"><td class=\"eventstd_ts\"><strong>$txtts3</strong><br><small>$txtts14</small></td><td class=\"eventstd_ts\"><select id=\"pos_sel_autoupdatetimes1_toppersystem_send\" name=\"pos_sel_autoupdatetimes1_toppersystem_send\"><option value=\"120\"$selected120>2 $txtts9</option><option value=\"300\"$selected300>5 $txtts9</option><option value=\"600\"$selected600>10 $txtts9</option><option value=\"900\"$selected900>15 $txtts9</option><option value=\"1800\"$selected1800>30 $txtts9</option><option value=\"3600\"$selected3600>1 $txtts5</option><option value=\"7200\"$selected7200>2 $txtts4</option><option value=\"14400\"$selected14400>4 $txtts4</option><option value=\"28800\"$selected28800>8 $txtts4</option><option value=\"43200\"$selected43200>12 $txtts4</option><option value=\"57600\"$selected57600>16 $txtts4</option><option value=\"72000\"$selected72000>20 $txtts4</option><option value=\"86400\"$selected86400>24 $txtts4</option></select></td></tr>";

                                $add_save="<tr><td class=\"eventstd_ts\"><small>$txtts6</small></td><td class=\"eventstd_ts\" style=\"width:20%;\"><div id=\"block_save_details_autoupdatetimes_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_events_autoupdatetimes_toppersystem();\">$txtts7</a>&nbsp;&nbsp;<a rel=\"nofollow\" href=\"javascript:close_events_autoupdatetimes_toppersystem();\">$txtts8</a></div><div id=\"block_save_details_loading_autoupdatetimes_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></td></tr>";
							}
						}			

                        $box_general="<div id=\"box_general_request_events_toppersystem\"><div class=\"msg_banner_toppersystem\"><small>$txtts15<br><br>$txtts16</small></div><table class=\"eventstables_ts margin0\">".$add_position_left_right."".$add_save."</table></div>";
					
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
@add_action('init', @TopperSystemExecuteFileAutoUpdatetimes::runts(), 2);
}
}

}
}
}
?>