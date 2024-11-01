<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFilemanagementts {
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
}

class TopperSystemExecuteFilemanagementts {
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
			   $txtts3="Servizi";
			   $txtts4="Azioni";
			   $txtts5="Salva";
			   $txtts6="Gestisci";
			   $txtts7="I servizi supplemantari Topper System SEO non sono attivabili perché è stato rilevato il file .htaccess nella root del website vuoto.";
			   $txtts8="I servizi supplemantari Topper System SEO non sono attivabili perché non è stato rilevato il file .htaccess nella root del website.";
			   $txtts9="Antispam";
			   $txtts10="Cache";
			   $txtts11="I servizi supplementari Topper System SEO sono gratuiti, di supporto a proteggere il website dagli spam boot e ad aumentare la velocità di caricamento delle pagine pubbliche.<br>Antispam e Cache dialogano direttamente con il file .htaccess,  Disabilita WP-CRON agisce sul file wp-config.php. E' possibile si verifichino casi di non compatibilità. In tal caso vi invitiamo a disabilitare il servizio non compatibile.<br>CO2 Application fornisce ai navigatori il risultato espresso in percentuale della CO2 ridotta dalla ottimizzazione della pagina. Il servizio funziona solo per le pagine ottimizzate da Topper System SEO.";
			   $txtts12="Disabilita WP-CRON";
			   $txtts14="Non è possibile gestire WP-CRON da Topper System SEO perché risulta impostato manualmente o per mezzo di un altro plugin.";
			   $txtts15="Non è possibile gestire WP-CRON da Topper System SEO perché il file wp-config.php risulta vuoto.";
			   $txtts16="Non è possibile gestire WP-CRON perché il file wp-config.php non è stato rilevato.";
			   $txtts17="CO2 Application";
			   $txtts18="Non è possibile gestire CO2 Application perché il file general.php risulta vuoto.";
			   $txtts19="Non è possibile gestire CO2 Application perché il file general.php non è stato rilevato.";
			   $txtts20="Aggiornamento automatico";
			   $txtts21="Non è possibile gestire l'aggiornamento automatico delle pagine ottimizzate perché il file general.php risulta vuoto.";
			   $txtts22="Non è possibile gestire l'aggiornamento automatico delle pagine ottimizzate perché il file general.php non è stato rilevato.";	
			   $txtts23="Protegge il sito web dagli spam boot bloccando le richieste da ip non autorizzati.";
			   $txtts24="E' possibile impostare e personalizzare le eccezioni di blocco.";
			   $txtts25="Il servizio è completamente gratuito.";
			   $txtts26="Imposta via htaccess una cache forte al sito.";
			   $txtts27="Tale modalità di attivazione della cache è consigliabile per siti le cui pagine non subiscono frequenti modifiche. Non è consigliabile per siti e-commerce.";
			   $txtts28="Il servizio è completamente gratuito.";
			   $txtts29="Disabilitando la funzionalità WP-CRON la navigazione delle pagine risulta più veloce perché sono evitate frequenti chiamate interne causa di possibili sovraccarichi del webserver.";
			   $txtts30="Se hai impostato gli aggiornamenti automatici ai plugin con WP-CRON disabilitato dovrai effettuarli manualmente.";
			   $txtts31="Il servizio è completamente gratuito.";
			   $txtts32="Alle pagine ottimizzate aggiungiamo una funzionalità pubblica che permette di calcolare la percentuale di CO2 abbattuta.";
			   $txtts33="Il servizio è completamente gratuito anche se è applicabile solo alle pagine ottimizzate.";
			   $txtts34="Ad ogni variazione dei codici sorgenti originali delle pagine ottimizzate sarà richiesta una nuova ottimizzazione della pagina.";	
			   $txtts35="Le informazioni precedentemente salvate saranno riutilizzate in fase di nuova ottimizzazione.";
			   $txtts36="E' consigliabile utilizzare questa funzionalità con un piano di abbonamento attivo collegato a questo sito web.";
			   $txtts37="I servizi supplementari Topper System SEO sono gratuiti, di supporto ad aumentare la sicurezza, la velocità di caricamento delle pagine pubbliche e la reputazione del tuo sito web.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Non è possibile gestire Smart Image Lazy-Loading perché il file general.php non è stato rilevato.";	
			   $txtts40="Aumenti la velocità di caricamento delle pagine perché sono applicate alle immagini le regole di lazy loading in modo dinamico e seo friendly.";
               $txtts41="Ottimizzazione risorse Javascript";
               $txtts42="Imposta il tuo modello preferito di ottimizzazione delle risorse javascript esterne la pagina. Per aumentare la velocità di caricamento delle pagine web.";
               $txtts43="La funzionalità è compresa nel processo di ottimizzazione delle pagine.";			   
			   $txtts44="Ottimizzazione risorse css";
			   $txtts45="La ottimizzazione delle risorse css esterne la pagina permette di aumentare la velocità di caricamento delle pagine web.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Pulizia cache delle ottimizzazioni";
               $txtts49="Rimuovi tutte le pagine, immagini, risorse javascript e css ottimizzati con il plugin. E' possiile rimuovere anche i file di log generati durante i processi di ottimizzazione.";
               $txtts50="Si ricorda che la cancellazione della cache del plugin è un processo irreversile. Sarà comunque possiile eseguire nuovamente le ottimizzazioni delle pagine.";
               $txtts51="Indirizzo versione di stage e di produzione del sito";
               $txtts52="Informazioni utili su come abilitare la ApiKey della versione del sito di stage in caso risieda su un sotto dominio (es: https://stage.mywebsite.com).";
               $txtts53="Inoltre è possibile modificare l'indirizzo del sito nella versione stage.";
               $txtts54="Attiva il servizio";
               $txtts55="Importa o esporta CSV";
               $txtts56="Genera un file CSV con tutte le informazioni sulle pagine ottimizzate.";
               $txtts57="Lavora sul file CSV e importa le modifiche rapidamente.";
               $txtts58="Intelligenza artificiale";
               $txtts59="Connetti Chat GPT al processo di ottimizzazione delle pagine.";
               $txtts60="Le api agiranno sui metadati title e description.";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="خدمات";
			   $txtts4="أجراءات";
			   $txtts5="حفظ";
			   $txtts6="يدير";
			   $txtts7="لا يمكن تفعيل خدمات نظام Topper الإضافية لأنه تم العثور على ملف htaccess في جذر موقع الويب الفارغ.";
			   $txtts8="لا يمكن تنشيط خدمات نظام Topper الإضافية لأنه لم يتم العثور على ملف htaccess في جذر موقع الويب.";
			   $txtts9="مكافحة البريد المزعج";
			   $txtts10="مخبأ";
			   $txtts11="الخدمات التكميلية لنظام Topper مجانية ، للمساعدة في حماية موقع الويب من التمهيد العشوائي وزيادة سرعة تحميل الصفحات العامة.<br>يتواصل Antispam و Cache مباشرة مع ملف .htaccess ، ويعمل Disable WP-CRON على ملف wp-config.php. من الممكن أن تكون هناك حالات عدم توافق. في هذه الحالة ندعوك لتعطيل الخدمة غير المتوافقة.<br>يوفر تطبيق CO2 للمتصفحين النتيجة المعبر عنها كنسبة مئوية من CO2 مخفضة بواسطة تحسين الصفحة. تعمل الخدمة فقط مع الصفحات التي تم تحسينها بواسطة نظام Topper.";
			   $txtts12="قم بتعطيل WP-CRON";
			   $txtts14="لا يمكن إدارة WP-CRON من Topper System SEO لأنه تم ضبطه يدويًا أو عن طريق مكون إضافي آخر.";
			   $txtts15="لا يمكن إدارة WP-CRON من Topper System SEO لأن ملف wp-config.php فارغ.";
			   $txtts16="لا يمكن إدارة WP-CRON نظرًا لعدم العثور على ملف wp-config.php.";
			   $txtts17="تطبيق CO2";
			   $txtts18="لا يمكن إدارة تطبيق CO2 لأن ملف general.php فارغ.";
			   $txtts19="لا يمكن إدارة تطبيق CO2 لأنه لم يتم اكتشاف ملف general.php.";
			   $txtts20="تحديث أوتوماتيكي";
			   $txtts21="لا يمكن إدارة التحديث التلقائي للصفحات المحسّنة لأن ملف general.php فارغ.";
			   $txtts22="لا يمكن إدارة التحديث التلقائي للصفحات المحسنة لأنه لم يتم اكتشاف ملف general.php.";
			   $txtts23="يحمي موقع الويب من التمهيد غير المرغوب فيه عن طريق حظر الطلبات من عناوين IP غير المصرح بها.";
			   $txtts24="يمكن تعيين استثناءات الحظر وتخصيصها.";
			   $txtts25="وهذه الخدمة مجانية تماما.";
			   $txtts26="قم بإعداد ذاكرة تخزين مؤقت قوية للموقع عبر htaccess.";
			   $txtts27="يوصى بهذه الطريقة في تنشيط ذاكرة التخزين المؤقت للمواقع التي لا تخضع صفحاتها لتغييرات متكررة. لا ينصح به لمواقع التجارة الإلكترونية.";
			   $txtts28="وهذه الخدمة مجانية تماما.";
			   $txtts29="من خلال تعطيل وظيفة WP-CRON ، يكون التنقل في الصفحات أسرع لأنه يتم تجنب المكالمات الداخلية المتكررة بسبب الأحمال الزائدة المحتملة لخادم الويب.";
			   $txtts30="إذا قمت بتعيين تحديثات البرنامج المساعد التلقائية مع تعطيل WP-CRON ، فستحتاج إلى القيام بها يدويًا.";
			   $txtts31="وهذه الخدمة مجانية تماما.";
			   $txtts32="إلى الصفحات المحسّنة ، نضيف ميزة عامة تسمح لك بحساب النسبة المئوية لتخفيض ثاني أكسيد الكربون.";
			   $txtts33="الخدمة مجانية تمامًا حتى لو كانت قابلة للتطبيق فقط على الصفحات المحسّنة.";
			   $txtts34="لكل شكل من أشكال رموز المصدر الأصلية للصفحات المحسّنة ، سيكون من الضروري إجراء تحسين جديد للصفحة.";	
			   $txtts35="سيتم إعادة استخدام المعلومات المحفوظة مسبقًا في مرحلة التحسين الجديدة.";
			   $txtts36="يُنصح باستخدام هذه الميزة مع خطة اشتراك نشطة مرتبطة بهذا الموقع.";
			   $txtts37="الخدمات الإضافية لـ Topper System SEO مجانية للمساعدة في زيادة الأمان وسرعة التحميل للصفحات العامة وسمعة موقع الويب الخاص بك.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="لا يمكن معالجة التحميل البطيء للصور الذكية نظرًا لعدم اكتشاف ملف general.php.";
			   $txtts40="أنت تزيد من سرعة تحميل الصفحة لأن قواعد التحميل البطيء يتم تطبيقها على الصور بطريقة ديناميكية وسهلة الاستخدام.";
               $txtts41="تحسين موارد جافا سكريبت";
               $txtts42="قم بتعيين نموذج تحسين موارد جافا سكريبت المفضل لديك خارج الصفحة. لزيادة سرعة تحميل صفحات الويب.";
               $txtts43="يتم تضمين الوظيفة في عملية تحسين الصفحة.";			   
			   $txtts44="تحسين موارد css";
			   $txtts45="يسمح تحسين موارد css خارج الصفحة بزيادة سرعة تحميل صفحات الويب.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="مسح ذاكرة التخزين المؤقت للتحسينات";
               $txtts49="قم بإزالة كافة الصفحات والصور وموارد جافا سكريبت و css المحسنة باستخدام المكون الإضافي. من الممكن أيضًا إزالة ملفات السجل التي تم إنشاؤها أثناء عمليات التحسين.";
               $txtts50="تذكر أن حذف ذاكرة التخزين المؤقت للملحق عملية لا رجوع عنها. ستظل قادرًا على أداء تحسينات الصفحة مرة أخرى.";
               $txtts51="عنوان المرحلة ونسخة الإنتاج الخاصة بالموقع";
               $txtts52="معلومات مفيدة حول كيفية تمكين ApiKey لإصدار موقع المرحلة إذا كان موجودًا في مجال فرعي (على سبيل المثال: https://stage.mywebsite.com).";
               $txtts53="من الممكن أيضًا تغيير عنوان الموقع في إصدار المرحلة.";
               $txtts54="تفعيل الخدمة";
               $txtts55="استيراد أو تصدير CSV";
               $txtts56="قم بإنشاء ملف CSV يحتوي على كافة المعلومات حول الصفحات المحسنة.";
               $txtts57="العمل على ملف CSV واستيراد التغييرات بسرعة.";
               $txtts58="الذكاء الاصطناعي";
               $txtts59="قم بتوصيل Chat GPT بعملية تحسين صفحتك.";
               $txtts60="سيعمل النحل على البيانات الوصفية للعنوان والوصف.";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Dienstleistungen";
			   $txtts4="Aktionen";
			   $txtts5="sparen";
			   $txtts6="Verwalten";
			   $txtts7="Die zusätzlichen Topper System SEO-Dienste können nicht aktiviert werden, da die .htaccess-Datei im Stammverzeichnis der leeren Website gefunden wurde.";
			   $txtts8="Die zusätzlichen Topper System SEO-Dienste können nicht aktiviert werden, da die .htaccess-Datei nicht im Website-Stammverzeichnis gefunden wurde.";
			   $txtts9="Antispam";
			   $txtts10="Zwischenspeicher";
			   $txtts11="Die zusätzlichen Topper System SEO-Dienste sind kostenlos, um die Website vor Spam-Boot zu schützen und die Ladegeschwindigkeit öffentlicher Seiten zu erhöhen.<br>Antispam und Cache kommunizieren direkt mit der .htaccess-Datei. Disable WP-CRON wirkt auf die Datei wp-config.php. Es kann Fälle von Inkompatibilität geben. In diesem Fall laden wir Sie ein, den inkompatiblen Dienst zu deaktivieren.<br>CO2 Application liefert Surfern das Ergebnis, ausgedrückt als Prozentsatz des durch die Seitenoptimierung reduzierten CO2. Der Dienst funktioniert nur für Seiten, die von Topper System SEO optimiert wurden.";
			   $txtts12="Deaktivieren Sie WP-CRON";
			   $txtts14="Es ist nicht möglich, WP-CRON über das Topper-System zu verwalten, da es manuell oder mithilfe eines anderen Plugins festgelegt wird.";
			   $txtts15="Es ist nicht möglich, WP-CRON von Topper System SEO aus zu verwalten, da die Datei wp-config.php leer ist.";
			   $txtts16="WP-CRON kann nicht verwaltet werden, da die Datei wp-config.php nicht gefunden wurde.";
			   $txtts17="CO2-Anwendung";
			   $txtts18="Die CO2-Anwendung kann nicht verwaltet werden, da die Datei general.php leer ist.";
			   $txtts19="Die CO2-Anwendung kann nicht verwaltet werden, da die Datei general.php nicht erkannt wurde.";
			   $txtts20="Automatisches Update";
			   $txtts21="Es ist nicht möglich, die automatische Aktualisierung von optimierten Seiten zu verwalten, da die Datei general.php leer ist.";
			   $txtts22="Es ist nicht möglich, die automatische Aktualisierung von optimierten Seiten zu verwalten, da die Datei general.php nicht erkannt wurde.";		
			   $txtts23="Schützt die Website vor Spam-Booten, indem Anfragen von nicht autorisierten IPs blockiert werden.";
			   $txtts24="Blockierungsausnahmen können eingestellt und angepasst werden.";
			   $txtts25="Der Dienst ist völlig kostenlos.";
			   $txtts26="Richten Sie über htaccess einen starken Cache für die Site ein.";
			   $txtts27="Diese Art der Cache-Aktivierung wird für Sites empfohlen, deren Seiten nicht häufig geändert werden. Es wird nicht für E-Commerce-Sites empfohlen.";
			   $txtts28="Der Dienst ist völlig kostenlos.";
			   $txtts29="Durch das Deaktivieren der WP-CRON-Funktion wird die Navigation der Seiten schneller, da häufige interne Anrufe aufgrund möglicher Überlastung des Webservers vermieden werden.";
			   $txtts30="Wenn Sie automatische Plugin-Updates mit deaktiviertem WP-CRON eingestellt haben, müssen Sie diese manuell durchführen.";
			   $txtts31="Der Dienst ist völlig kostenlos.";
			   $txtts32="Zu den optimierten Seiten fügen wir eine öffentliche Funktion hinzu, mit der Sie den Prozentsatz der reduzierten CO2 berechnen können.";
			   $txtts33="Der Service ist völlig kostenlos, auch wenn er nur für optimierte Seiten gilt.";
			   $txtts34="Für jede Variation des ursprünglichen Quellcodes der optimierten Seiten ist eine erneute Optimierung der Seite erforderlich.";	
			   $txtts35="Die zuvor gespeicherten Informationen werden in der neuen Optimierungsphase wiederverwendet.";
			   $txtts36="Es wird empfohlen, diese Funktion mit einem aktiven Abonnement zu verwenden, das mit dieser Website verknüpft ist.";			
			   $txtts37="Die Zusatzdienste von Topper System SEO sind kostenlos, um die Sicherheit, die Ladegeschwindigkeit öffentlicher Seiten und den Ruf Ihrer Website zu erhöhen.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Smart Image Lazy-Loading kann nicht verarbeitet werden, da die Datei general.php nicht erkannt wurde.";
			   $txtts40="Sie erhöhen die Seitenladegeschwindigkeit, da die Regeln des Lazy Loading auf dynamische und SEO-freundliche Weise auf die Bilder angewendet werden."; 
               $txtts41="Javascript-Ressourcenoptimierung";
               $txtts42="Legen Sie Ihr bevorzugtes JavaScript-Ressourcenoptimierungsmodell außerhalb der Seite fest. Um die Ladegeschwindigkeit von Webseiten zu erhöhen.";
               $txtts43="Die Funktionalität ist im Seitenoptimierungsprozess enthalten.";			   
			   $txtts44="CSS-Ressourcen optimieren";
			   $txtts45="Die Optimierung von CSS-Ressourcen außerhalb der Seite ermöglicht es, die Ladegeschwindigkeit von Webseiten zu erhöhen.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Optimierungscache leeren";
               $txtts49="Entfernen Sie alle mit dem Plugin optimierten Seiten, Bilder, Javascript-Ressourcen und CSS. Es ist auch möglich, die während der Optimierungsprozesse generierten Protokolldateien zu entfernen.";
               $txtts50="Denken Sie daran, dass das Löschen des Plugin-Cache ein irreversibler Vorgang ist. Sie können weiterhin Seitenoptimierungen durchführen.";
               $txtts51="Adresse der Bühnen- und Produktionsversion der Site";
               $txtts52="Nützliche Informationen zum Aktivieren des ApiKey der Stage-Site-Version, wenn diese sich in einer Subdomain befindet (z. B.: https://stage.mywebsite.com).";
               $txtts53="Es ist auch möglich, die Site-Adresse in der Stage-Version zu ändern.";
               $txtts54="Aktivieren Sie den Dienst";
               $txtts55="CSV importieren oder exportieren";
               $txtts56="Generieren Sie eine CSV-Datei mit allen Informationen zu den optimierten Seiten.";
               $txtts57="Arbeiten Sie an der CSV-Datei und importieren Sie Änderungen schnell.";
               $txtts58="Künstliche Intelligenz";
               $txtts59="Verbinden Sie Chat GPT mit Ihrem Seitenoptimierungsprozess.";
               $txtts60="Die Bienen reagieren auf die Titel- und Beschreibungsmetadaten.";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Servicios";
			   $txtts4="Comportamiento";
			   $txtts5="Salvar";
			   $txtts6="Gestionar";
			   $txtts7="Los servicios adicionales del Sistema Topper no se pueden activar porque el archivo .htaccess se encontró en la raíz del sitio web vacío.";
			   $txtts8="Los servicios adicionales del Sistema Topper no se pueden activar porque el archivo .htaccess no se encontró en la raíz del sitio web.";
			   $txtts9="Antispam";
			   $txtts10="Cache";
			   $txtts11="Los servicios adicionales de Topper System SEO son gratuitos, para ayudar a proteger el sitio web del inicio de spam y aumentar la velocidad de carga de las páginas públicas.<br>Antispam y Cache se comunican directamente con el archivo .htaccess, Disable WP-CRON actúa sobre el archivo wp-config.php. Es posible que existan casos de incompatibilidad. En este caso le invitamos a desactivar el servicio incompatible.<br>La aplicación CO2 proporciona a los navegantes el resultado expresado como un porcentaje del CO2 reducido por la optimización de la página. El servicio funciona solo para páginas optimizadas por Topper System SEO.";
			   $txtts12="Desactivar WP-CRON";
			   $txtts14="No es posible administrar WP-CRON desde Topper System SEO porque se configura manualmente o mediante otro complemento.";
			   $txtts15="No es posible administrar WP-CRON desde Topper System SEO porque el archivo wp-config.php está vacío.";
			   $txtts16="WP-CRON no se puede administrar porque no se encontró el archivo wp-config.php.";
			   $txtts17="Aplicación de CO2";
			   $txtts18="La aplicación CO2 no se puede administrar porque el archivo general.php está vacío.";
			   $txtts19="La aplicación CO2 no se puede administrar porque no se detectó el archivo general.php.";
			   $txtts20="Actualización automática";
			   $txtts21="No es posible administrar la actualización automática de páginas optimizadas porque el archivo general.php está vacío.";
			   $txtts22="No es posible gestionar la actualización automática de páginas optimizadas porque no se detectó el archivo general.php.";	
			   $txtts23="Protege el sitio web del arranque de spam bloqueando las solicitudes de direcciones IP no autorizadas.";
			   $txtts24="Las excepciones de bloqueo se pueden configurar y personalizar.";
			   $txtts25="El servicio es completamente gratuito.";
			   $txtts26="Configure un caché fuerte para el sitio a través de htaccess.";
			   $txtts27="Esta forma de activar la caché se recomienda para sitios cuyas páginas no sufren cambios frecuentes. No se recomienda para sitios de comercio electrónico.";
			   $txtts28="El servicio es completamente gratuito.";
			   $txtts29="Al deshabilitar la función WP-CRON, la navegación de las páginas es más rápida porque se evitan frecuentes llamadas internas debido a posibles sobrecargas del servidor web.";
			   $txtts30="Si ha configurado actualizaciones automáticas de complementos con WP-CRON deshabilitado, deberá hacerlo manualmente.";
			   $txtts31="El servicio es completamente gratuito.";
			   $txtts32="A las páginas optimizadas agregamos una función pública que le permite calcular el porcentaje de CO2 reducido.";
			   $txtts33="El servicio es completamente gratuito incluso si es aplicable solo a páginas optimizadas.";
			   $txtts34="Para cada variación de los códigos fuente originales de las páginas optimizadas, se requerirá una nueva optimización de la página.";	
			   $txtts35="La información previamente guardada se reutilizará en la nueva fase de optimización.";
			   $txtts36="Es recomendable utilizar esta función con un plan de suscripción activo vinculado a este sitio web.";		
			   $txtts37="Los servicios complementarios de Topper System SEO son gratuitos para ayudar a aumentar la seguridad, la velocidad de carga de las páginas públicas y la reputación de su sitio web.";	
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Smart Image Lazy-Loading no se puede manejar porque no se detectó el archivo general.php.";
			   $txtts40="Aumentas la velocidad de carga de la página porque las reglas de carga diferida se aplican a las imágenes de una manera dinámica y amigable con el SEO.";
               $txtts41="Optimización de recursos Javascript";
               $txtts42="Configure su modelo de optimización de recursos javascript favorito fuera de la página. Para aumentar la velocidad de carga de las páginas web.";	
               $txtts43="La funcionalidad está incluida en el proceso de optimización de la página.";			   
			   $txtts44="Optimización de recursos css";
			   $txtts45="La optimización de recursos css externos a la página permite aumentar la velocidad de carga de las páginas web.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Borrar caché de optimizaciones";
               $txtts49="Elimine todas las páginas, imágenes, recursos javascript y css optimizados con el complemento. También es posible eliminar los archivos de registro generados durante los procesos de optimización.";
               $txtts50="Recuerde que eliminar el caché del complemento es un proceso irreversible. Aún podrá realizar optimizaciones de página nuevamente.";
               $txtts51="Dirección del escenario y versión de producción del sitio";
               $txtts52="Información útil sobre cómo habilitar la ApiKey de la versión del sitio de etapa si reside en un subdominio (por ejemplo: https://stage.mywebsite.com)";
               $txtts53="También es posible cambiar la dirección del sitio en la versión de escenario.";
               $txtts54="Activar el servicio";
               $txtts55="Importar o exportar CSV";
               $txtts56="Genera un archivo CSV con toda la información de las páginas optimizadas.";
               $txtts57="Trabaje en el archivo CSV e importe los cambios rápidamente.";
               $txtts58="Inteligencia artificial";
               $txtts59="Conecte Chat GPT al proceso de optimización de su página.";
               $txtts60="Las abejas actuarán sobre los metadatos del título y la descripción.";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Prestations de service";
			   $txtts4="Actions";
			   $txtts5="sauver";
			   $txtts6="Gérer";
			   $txtts7="Les services supplémentaires du système Topper ne peuvent pas être activés car le fichier .htaccess a été trouvé à la racine du site Web vide.";
			   $txtts8="Les services supplémentaires du système Topper ne peuvent pas être activés car le fichier .htaccess est introuvable à la racine du site Web.";
			   $txtts9="Anti-spam";
			   $txtts10="Cache";
			   $txtts11="Les services supplémentaires du système Topper sont gratuits, pour aider à protéger le site Web contre le démarrage du spam et augmenter la vitesse de chargement des pages publiques.<br>Antispam et Cache communiquent directement avec le fichier .htaccess, Disable WP-CRON agit sur le fichier wp-config.php. Il est possible qu'il y ait des cas d'incompatibilité. Dans ce cas, nous vous invitons à désactiver le service incompatible.<br>CO2 Application fournit aux internautes le résultat exprimé en pourcentage du CO2 réduit par l'optimisation de la page. Le service ne fonctionne que pour les pages optimisées par Topper System SEO.";
			   $txtts12="Désactiver WP-CRON";
			   $txtts14="Il n'est pas possible de gérer WP-CRON à partir de Topper System SEO car il est défini manuellement ou au moyen d'un autre plugin.";
			   $txtts15="Il n'est pas possible de gérer WP-CRON à partir de Topper System SEO car le fichier wp-config.php est vide.";
			   $txtts16="WP-CRON ne peut pas être géré car le fichier wp-config.php est introuvable.";
			   $txtts17="Demande de CO2";
			   $txtts18="L'application CO2 ne peut pas être gérée car le fichier general.php est vide.";
			   $txtts19="L'application CO2 ne peut pas être gérée car le fichier general.php n'a pas été détecté.";
			   $txtts20="Mise à jour automatique";
			   $txtts21="Il n'est pas possible de gérer la mise à jour automatique des pages optimisées car le fichier general.php est vide.";
			   $txtts22="Il n'est pas possible de gérer la mise à jour automatique des pages optimisées car le fichier general.php n'a pas été détecté.";	
			   $txtts23="Protège le site Web du démarrage de spam en bloquant les demandes provenant d'adresses IP non autorisées.";
			   $txtts24="Les exceptions de blocage peuvent être définies et personnalisées.";
			   $txtts25="Le service est entièrement gratuit.";
			   $txtts26="Configurez un cache fort sur le site via htaccess.";
			   $txtts27="Cette façon d'activer le cache est recommandée pour les sites dont les pages ne subissent pas de changements fréquents. Il n'est pas recommandé pour les sites de commerce électronique.";
			   $txtts28="Le service est entièrement gratuit.";
			   $txtts29="En désactivant la fonction WP-CRON, la navigation des pages est plus rapide car les appels internes fréquents sont évités en raison d'éventuelles surcharges du serveur web.";
			   $txtts30="Si vous avez configuré les mises à jour automatiques des plugins avec WP-CRON désactivé, vous devrez les faire manuellement.";
			   $txtts31="Le service est entièrement gratuit.";
			   $txtts32="Aux pages optimisées, nous ajoutons une fonctionnalité publique qui vous permet de calculer le pourcentage de CO2 réduit.";
			   $txtts33="Le service est entièrement gratuit même s'il n'est applicable qu'aux pages optimisées.";
			   $txtts34="Pour chaque variation des codes sources originaux des pages optimisées, une nouvelle optimisation de la page sera nécessaire.";	
			   $txtts35="Les informations précédemment enregistrées seront réutilisées dans la nouvelle phase d'optimisation.";
			   $txtts36="Il est conseillé d'utiliser cette fonctionnalité avec un plan d'abonnement actif lié à ce site Web.";		
			   $txtts37="Les services supplémentaires Topper System SEO sont gratuits pour aider à augmenter la sécurité, la vitesse de chargement des pages publiques et la réputation de votre site Web.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Le chargement différé des images intelligentes ne peut pas être géré car le fichier general.php n'a pas été détecté.";
			   $txtts40="Vous augmentez la vitesse de chargement des pages car les règles de chargement paresseux sont appliquées aux images de manière dynamique et seo friendly.";
               $txtts41="Optimisation des ressources Javascript";
               $txtts42="Définissez votre modèle d'optimisation des ressources javascript préféré en dehors de la page. Pour augmenter la vitesse de chargement des pages Web.";	
               $txtts43="La fonctionnalité est incluse dans le processus d'optimisation de la page.";
			   $txtts44="Optimiser les ressources CSS";
			   $txtts45="L'optimisation des ressources css externes à la page permet d'augmenter la vitesse de chargement des pages web.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Effacer le cache des optimisations";
               $txtts49="Supprimer toutes les pages, images, ressources javascript et css optimisées avec le plugin. Il est également possible de supprimer les fichiers journaux générés lors des processus d'optimisation.";
               $txtts50="N'oubliez pas que la suppression du cache du plugin est un processus irréversible. Vous pourrez toujours effectuer à nouveau des optimisations de page.";
               $txtts51="Adresse de la version scénique et de production du site";
               $txtts52="Informations utiles sur la façon d'activer l'ApiKey de la version du site de stage s'il réside sur un sous-domaine (par exemple : https://stage.mywebsite.com).";
               $txtts53="Il est aussi possible de changer l'adresse du site dans la version stage.";
               $txtts54="Activer le service";
               $txtts55="Importer ou exporter CSV";
               $txtts56="Générez un fichier CSV avec toutes les informations sur les pages optimisées.";
               $txtts57="Travaillez sur le fichier CSV et importez rapidement les modifications.";
               $txtts58="Intelligence artificielle";
               $txtts59="Connectez Chat GPT à votre processus d'optimisation de page.";
               $txtts60="Les abeilles agiront sur les métadonnées de titre et de description.";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="सेवाएं";
			   $txtts4="क्रिया";
			   $txtts5="सहेजें";
			   $txtts6="प्रबंधित";
			   $txtts7="अतिरिक्त टॉपर सिस्टम सेवाओं को सक्रिय नहीं किया जा सकता है क्योंकि खाली वेबसाइट की जड़ में .htaccess फ़ाइल पाई गई थी।";
			   $txtts8="अतिरिक्त टॉपर सिस्टम सेवाओं को सक्रिय नहीं किया जा सकता है। क्योंकि वेबसाइट रूट में .htaccess फ़ाइल नहीं मिली।";
			   $txtts9="स्पैम - विरोधी";
			   $txtts10="कैश";
			   $txtts11="अतिरिक्त टॉपर सिस्टम सेवाएं मुफ्त हैं, वेबसाइट को स्पैम बूट से बचाने और सार्वजनिक पृष्ठों की लोडिंग गति बढ़ाने में मदद करने के लिए।<br>एंटीस्पैम और कैश सीधे .htaccess फ़ाइल के साथ संवाद करते हैं, WP-CRON को wp-config.pp फ़ाइल पर कार्य करता है। यह संभव है कि असंगति के मामले हैं। इस मामले में हम आपको असंगत सेवा को अक्षम करने के लिए आमंत्रित करते हैं।<br>CO2 एप्लिकेशन सर्फर्स को पृष्ठ अनुकूलन द्वारा कम किए गए CO2 के प्रतिशत के रूप में व्यक्त परिणाम प्रदान करता है। सेवा केवल टॉपर सिस्टम द्वारा अनुकूलित पृष्ठों के लिए काम करती है।";
			   $txtts12="WP-CRON को अक्षम करें";
			   $txtts14="टॉपर सिस्टम से WP-CRON को प्रबंधित करना संभव नहीं है क्योंकि यह मैन्युअल रूप से या किसी अन्य प्लगइन के माध्यम से सेट किया गया है।";
			   $txtts15="WP-CRON को टॉपर सिस्टम से प्रबंधित करना संभव नहीं है क्योंकि wp-config.php फ़ाइल खाली है।";
			   $txtts16="WP-CRON को प्रबंधित नहीं किया जा सकता क्योंकि wp-config.php फ़ाइल नहीं मिली।";
			   $txtts17="CO2 आवेदन";
			   $txtts18="CO2 एप्लिकेशन को प्रबंधित नहीं किया जा सकता क्योंकि General.php फ़ाइल खाली है।";
			   $txtts19="CO2 एप्लिकेशन को प्रबंधित नहीं किया जा सकता क्योंकि General.php फ़ाइल का पता नहीं चला था।";
			   $txtts20="स्वचालित अपडेट";
			   $txtts21="सामान्य.php फ़ाइल खाली होने के कारण अनुकूलित पृष्ठों के स्वत: अद्यतनीकरण को प्रबंधित करना संभव नहीं है।";
			   $txtts22="सामान्य.php फ़ाइल का पता नहीं लगने के कारण अनुकूलित पृष्ठों के स्वत: अद्यतनीकरण को प्रबंधित करना संभव नहीं है।";	
			   $txtts23="अनधिकृत आईपी से अनुरोधों को अवरुद्ध करके वेबसाइट को स्पैम बूट से बचाता है।";
			   $txtts24="ब्लॉकिंग अपवादों को सेट और अनुकूलित किया जा सकता है।";
			   $txtts25="सर्विस पूरी तरह से फ्री है।";
			   $txtts26="htaccess के माध्यम से साइट पर एक मजबूत कैश सेट करें।";
			   $txtts27="कैश को सक्रिय करने का यह तरीका उन साइटों के लिए अनुशंसित है जिनके पृष्ठ बार-बार परिवर्तन से नहीं गुजरते हैं। यह ई-कॉमर्स साइटों के लिए अनुशंसित नहीं है।";
			   $txtts28="सेवा पूरी तरह से नि:शुल्क है।";
			   $txtts29="WP-CRON फ़ंक्शन को अक्षम करके, पृष्ठों का नेविगेशन तेज़ होता है क्योंकि वेबसर्वर के संभावित अधिभार के कारण बार-बार आंतरिक कॉल से बचा जाता है।";
			   $txtts30="यदि आपने WP-CRON अक्षम के साथ स्वचालित प्लगइन अपडेट सेट किया है, तो आपको उन्हें मैन्युअल रूप से करने की आवश्यकता होगी।";
			   $txtts31="सेवा पूरी तरह से नि:शुल्क है।";
			   $txtts32="अनुकूलित पृष्ठों में हम एक सार्वजनिक सुविधा जोड़ते हैं जो आपको घटे हुए CO2 के प्रतिशत की गणना करने की अनुमति देती है।";
			   $txtts33="सेवा पूरी तरह से निःशुल्क है, भले ही यह केवल अनुकूलित पृष्ठों पर लागू हो।";
			   $txtts34="अनुकूलित पृष्ठों के मूल स्रोत कोड की प्रत्येक भिन्नता के लिए, पृष्ठ के एक नए अनुकूलन की आवश्यकता होगी।";	
			   $txtts35="पहले से सहेजी गई जानकारी का नए अनुकूलन चरण में पुन: उपयोग किया जाएगा।";
			   $txtts36="इस वेबसाइट से जुड़ी एक सक्रिय सदस्यता योजना के साथ इस सुविधा का उपयोग करने की सलाह दी जाती है।";		
			   $txtts37="टॉपर सिस्टम पूरक सेवाएं सुरक्षा, सार्वजनिक पृष्ठों की लोडिंग गति और आपकी वेबसाइट की प्रतिष्ठा बढ़ाने में मदद करने के लिए स्वतंत्र हैं। ";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="स्मार्ट छवि आलसी-लोडिंग को नियंत्रित नहीं किया जा सकता क्योंकि सामान्य.php फ़ाइल का पता नहीं चला था।";
			   $txtts40="आप पेज लोड करने की गति बढ़ाते हैं क्योंकि आलसी लोडिंग के नियम छवियों पर गतिशील और एसईओ के अनुकूल तरीके से लागू होते हैं।";	   
               $txtts41="जावास्क्रिप्ट संसाधन अनुकूलन";
               $txtts42="पृष्ठ के बाहर अपना पसंदीदा जावास्क्रिप्ट संसाधन अनुकूलन मॉडल सेट करें। वेब पेजों की लोडिंग गति बढ़ाने के लिए।";
               $txtts43="कार्यक्षमता पृष्ठ अनुकूलन प्रक्रिया में शामिल है।";			   
			   $txtts44="सीएसएस संसाधनों का अनुकूलन";
			   $txtts45="पृष्ठ के बाहरी सीएसएस संसाधनों का अनुकूलन वेब पृष्ठों की लोडिंग गति को बढ़ाने की अनुमति देता है।";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="अनुकूलन कैश साफ़ करें";
               $txtts49="प्लगइन के साथ अनुकूलित सभी पृष्ठों, छवियों, जावास्क्रिप्ट संसाधनों और सीएसएस को हटा दें। अनुकूलन प्रक्रियाओं के दौरान उत्पन्न लॉग फ़ाइलों को हटाना भी संभव है।";
               $txtts50="याद रखें कि प्लगइन कैश को हटाना एक अपरिवर्तनीय प्रक्रिया है। आप फिर भी पेज अनुकूलन फिर से करने में सक्षम होंगे।";
               $txtts51="साइट के मंच और उत्पादन संस्करण का पता";
               $txtts52="स्टेज साइट संस्करण की ApiKey को सक्षम करने के तरीके पर उपयोगी जानकारी, यदि यह उपडोमेन पर स्थित है (उदाहरण: https://stage.mywebsite.com)";
               $txtts53="स्टेज संस्करण में साइट का पता बदलना भी संभव है।";
               $txtts54="सेवा सक्रिय करें";
               $txtts55="सीएसवी आयात या निर्यात करें";
               $txtts56="अनुकूलित पृष्ठों के बारे में सारी जानकारी के साथ एक CSV फ़ाइल बनाएँ।";
               $txtts57="CSV फ़ाइल पर काम करें और परिवर्तनों को शीघ्रता से आयात करें।";
               $txtts58="कृत्रिम होशियारी";
               $txtts59="चैट जीपीटी को अपनी पेज अनुकूलन प्रक्रिया से कनेक्ट करें।";
               $txtts60="मधुमक्खियाँ शीर्षक और विवरण मेटाडेटा पर कार्य करेंगी।";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="サービス";
			   $txtts4="行動";
			   $txtts5="保存する";
			   $txtts6="管理する";
			   $txtts7="空のWebサイトのルートで.htaccessファイルが見つかったため、追加のTopper System SEOサービスをアクティブ化できません。";
			   $txtts8="Webサイトのルートに.htaccessファイルが見つからなかったため、追加のTopper System SEOサービスをアクティブ化できません。";
			   $txtts9="アンチスパム";
			   $txtts10="キャッシュ";
			   $txtts11="Topper System SEOの補足サービスは無料で、Webサイトをスパムの起動から保護し、公開ページの読み込み速度を上げるのに役立ちます。<br>アンチスパムとキャッシュは.htaccessファイルと直接通信し、WP-CRONを無効にするとwp-config.phpファイルに作用します。互換性がない場合がある可能性があります。この場合、互換性のないサービスを無効にすることをお勧めします。<br>CO2アプリケーションは、ページの最適化によって削減されたCO2のパーセンテージとして表される結果をサーファーに提供します。 このサービスは、TopperSystemによって最適化されたページに対してのみ機能します。";
			   $txtts12="WP-CRONを無効にする";
			   $txtts14="WP-CRONは手動または別のプラグインによって設定されているため、TopperSystemから管理することはできません。";
			   $txtts15="wp-config.phpファイルが空であるため、TopperSystemからWP-CRONを管理することはできません。";
			   $txtts16="wp-config.phpファイルが見つからなかったため、WP-CRONを管理できません。";
			   $txtts17="CO2アプリケーション";
			   $txtts18="general.phpファイルが空であるため、CO2アプリケーションを管理できません。";
			   $txtts19="general.phpファイルが検出されなかったため、CO2アプリケーションを管理できません。";
			   $txtts20="自動更新";
			   $txtts21="general.phpファイルが空であるため、最適化されたページの自動更新を管理することはできません。";
			   $txtts22="general.phpファイルが検出されなかったため、最適化されたページの自動更新を管理することはできません。";	
			   $txtts23="不正なIPからのリクエストをブロックすることにより、スパムブートからWebサイトを保護します。";
			   $txtts24="ブロッキング例外を設定およびカスタマイズできます。";
			   $txtts25="サービスは完全に無料です。";
			   $txtts26="htaccessを介してサイトに強力なキャッシュを設定します。";
			   $txtts27="キャッシュをアクティブ化するこの方法は、ページが頻繁に変更されないサイトに推奨されます。 eコマースサイトにはお勧めしません。";
			   $txtts28="サービスは完全に無料です。";
			   $txtts29="WP-CRON機能を無効にすると、Webサーバーの過負荷の可能性による頻繁な内部呼び出しが回避されるため、ページのナビゲーションが高速になります。";
			   $txtts30="WP-CRONを無効にしてプラグインの自動更新を設定した場合は、手動で行う必要があります。";
			   $txtts31="サービスは完全に無料です。";
			   $txtts32="最適化されたページに、削減されたCO2の割合を計算できる公開機能を追加します。";
			   $txtts33="最適化されたページにのみ適用できる場合でも、このサービスは完全に無料です。";
			   $txtts34="最適化されたページの元のソースコードのバリエーションごとに、ページの新しい最適化が必要になります。";	
			   $txtts35="以前に保存された情報は、新しい最適化フェーズで再利用されます。";
			   $txtts36="この機能は、このWebサイトにリンクされているアクティブなサブスクリプションプランで使用することをお勧めします。";	
			   $txtts37="トッパーシステムの補足サービスは、セキュリティ、公開ページの読み込み速度、およびWebサイトの評判を高めるのに役立つ無料のサービスです。";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Smart Image Lazy-general.phpファイルが検出されなかったため、読み込みを処理できません。";
			   $txtts40="遅延読み込みのルールが動的でSEOに適した方法で画像に適用されるため、ページの読み込み速度が向上します。";	
               $txtts41="Javascript リソースの最適化";
               $txtts42="ページ外でお気に入りの JavaScript リソース最適化モデルを設定します。 ウェブページの読み込み速度を上げるため。";	
               $txtts43="この機能は、ページの最適化プロセスに含まれています。";
			   $txtts44="CSSリソースの最適化";
			   $txtts45="ページの外部の CSS リソースを最適化することで、Web ページの読み込み速度を向上させることができます。";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts4​​8="最適化キャッシュをクリア";
               $txtts4​​9="プラグインで最適化されたすべてのページ、画像、JavaScript リソース、CSS を削除します。最適化プロセス中に生成されたログ ファイルを削除することもできます。";
               $txtts50="プラグイン キャッシュの削除は元に戻せないプロセスであることに注意してください。ページの最適化を再度実行することは可能です。";
               $txtts51="サイトのステージ版および製品版のアドレス";
               $txtts52="ステージ サイト バージョンがサブドメイン (例: https://stage.mywebsite.com) に存在する場合に、そのバージョンの ApiKey を有効にする方法に関する役立つ情報。";
               $txtts53="ステージ版ではサイトアドレスを変更することも可能です。";
               $txtts54="サービスをアクティブ化する";
               $txtts55="CSVのインポートまたはエクスポート";
               $txtts56="最適化されたページに関するすべての情報を含む CSV ファイルを生成します。";
               $txtts57="CSV ファイルで作業し、変更をすばやくインポートします。";
               $txtts58="人工知能";
               $txtts59="Chat GPT をページ最適化プロセスに接続します。";
               $txtts60="ミツバチはタイトルと説明のメタデータに基づいて動作します。";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Usługi";
			   $txtts4="działania";
			   $txtts5="Zapisać";
			   $txtts6="Zarządzać";
			   $txtts7="Nie można aktywować dodatkowych usług Topper System SEO, ponieważ plik .htaccess został znaleziony w katalogu głównym pustej witryny.";
			   $txtts8="Nie można aktywować dodatkowych usług Topper System SEO, ponieważ w katalogu głównym witryny nie znaleziono pliku .htaccess.";
			   $txtts9="Anty spam";
			   $txtts10="Pamięć podręczna";
			   $txtts11="Dodatkowe usługi Topper System SEO są bezpłatne, aby pomóc chronić witrynę przed uruchomieniem spamu i zwiększyć prędkość ładowania stron publicznych.<br>Antyspam i pamięć podręczna komunikują się bezpośrednio z plikiem .htaccess, Wyłącz WP-CRON działa na pliku wp-config.php. Mogą wystąpić przypadki niekompatybilności. W takim przypadku zapraszamy do wyłączenia niekompatybilnej usługi.<br>Aplikacja CO2 zapewnia internautom wynik wyrażony jako procent CO2 pomniejszony o optymalizację strony. Usługa działa tylko dla stron zoptymalizowanych przez Topper System SEO.";
			   $txtts12="Wyłącz WP-CRON";
			   $txtts14="Nie można zarządzać WP-CRON z Topper System SEO, ponieważ jest to ustawiane ręcznie lub za pomocą innej wtyczki.";
			   $txtts15="Nie można zarządzać WP-CRON z systemu Topper, ponieważ plik wp-config.php jest pusty.";
			   $txtts16="Nie można zarządzać WP-CRON, ponieważ nie znaleziono pliku wp-config.php.";
			   $txtts17="Aplikacja CO2";
			   $txtts18="Aplikacja CO2 nie może być zarządzana, ponieważ plik general.php jest pusty.";
			   $txtts19="Aplikacja CO2 nie może być zarządzana, ponieważ plik general.php nie został wykryty.";
			   $txtts20="Automatyczna aktualizacja";
			   $txtts21="Nie można zarządzać automatyczną aktualizacją zoptymalizowanych stron, ponieważ plik general.php jest pusty.";
			   $txtts22="Nie jest możliwe zarządzanie automatyczną aktualizacją zoptymalizowanych stron, ponieważ plik general.php nie został wykryty.";	
			   $txtts23="Chroni witrynę przed spamem, blokując żądania z nieautoryzowanych adresów IP.";
			   $txtts24="Wyjątki blokowania można ustawić i dostosować.";
			   $txtts25="Usługa jest całkowicie bezpłatna.";
			   $txtts26="Skonfiguruj silną pamięć podręczną na stronie przez htaccess.";
			   $txtts27="Ten sposób aktywacji pamięci podręcznej jest zalecany dla witryn, których strony nie ulegają częstym zmianom. Nie jest zalecany dla witryn e-commerce.";
			   $txtts28="Usługa jest całkowicie bezpłatna.";
			   $txtts29="Wyłączając funkcję WP-CRON, nawigacja po stronach jest szybsza, ponieważ unika się częstych połączeń wewnętrznych z powodu możliwych przeciążeń serwera WWW.";
			   $txtts30="Jeśli ustawiłeś automatyczne aktualizacje wtyczek z wyłączonym WP-CRON, musisz zrobić to ręcznie.";
			   $txtts31="Usługa jest całkowicie bezpłatna.";
			   $txtts32="Do zoptymalizowanych stron dodajemy funkcję publiczną, która pozwala obliczyć procent zredukowanego CO2.";
			   $txtts33="Usługa jest całkowicie darmowa, nawet jeśli dotyczy tylko zoptymalizowanych stron.";
			   $txtts34="Dla każdej odmiany oryginalnych kodów źródłowych zoptymalizowanych stron wymagana będzie nowa optymalizacja strony.";	
			   $txtts35="Wcześniej zapisane informacje zostaną ponownie wykorzystane w nowej fazie optymalizacji.";
			   $txtts36="Zaleca się korzystanie z tej funkcji z aktywnym planem subskrypcji powiązanym z tą witryną.";	
			   $txtts37="Dodatkowe usługi Topper System SEO są bezpłatne, aby pomóc zwiększyć bezpieczeństwo, szybkość ładowania stron publicznych i reputację Twojej witryny.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Nie można obsłużyć inteligentnego ładowania obrazu z opóźnieniem, ponieważ plik general.php nie został wykryty.";
			   $txtts40="Zwiększasz szybkość ładowania strony, ponieważ zasady leniwego ładowania są stosowane do obrazów w sposób dynamiczny i przyjazny dla SEO.";	 
               $txtts41="Optymalizacja zasobów JavaScript";
               $txtts42="Ustaw swój ulubiony model optymalizacji zasobów JavaScript poza stroną. Aby zwiększyć szybkość ładowania stron internetowych.";  
               $txtts43="Funkcjonalność zawarta jest w procesie optymalizacji strony.";			   
			   $txtts44="Optymalizacja zasobów css";
			   $txtts45="Optymalizacja zasobów css zewnętrznych względem strony pozwala na zwiększenie szybkości ładowania stron internetowych.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Wyczyść pamięć podręczną optymalizacji";
               $txtts49="Usuń wszystkie strony, obrazy, zasoby javascript i css zoptymalizowane za pomocą wtyczki. Możliwe jest również usunięcie plików dziennika wygenerowanych podczas procesów optymalizacji.";
               $txtts50="Pamiętaj, że usunięcie pamięci podręcznej wtyczek jest procesem nieodwracalnym. Nadal będziesz mógł ponownie przeprowadzić optymalizację strony.";
               $txtts51="Adres wersji scenicznej i produkcyjnej strony";
               $txtts52="Przydatne informacje o tym, jak włączyć ApiKey wersji strony stage, jeśli znajduje się ona w subdomenie (np.: https://stage.mywebsite.com).";
               $txtts53="Możliwa jest również zmiana adresu strony w wersji scenicznej.";
               $txtts54="Aktywuj usługę";
               $txtts55="Importuj lub eksportuj plik CSV";
               $txtts56="Wygeneruj plik CSV ze wszystkimi informacjami o zoptymalizowanych stronach.";
               $txtts57="Pracuj nad plikiem CSV i szybko importuj zmiany.";
               $txtts58="Sztuczna inteligencja";
               $txtts59="Połącz Chat GPT z procesem optymalizacji strony.";
               $txtts60="Pszczoły będą działać na podstawie metadanych tytułu i opisu.";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Serviços";
			   $txtts4="Ações";
			   $txtts5="Salve";
			   $txtts6="Gerir";
			   $txtts7="Os serviços adicionais do Topper System SEO não podem ser ativados porque o arquivo .htaccess foi encontrado na raiz do site vazio.";
			   $txtts8="Os serviços adicionais do Topper System SEO não podem ser ativados porque o arquivo .htaccess não foi encontrado na raiz do site.";
			   $txtts9="Antispam";
			   $txtts10="Cache";
			   $txtts11="Os serviços complementares do Sistema Topper são gratuitos, para ajudar a proteger o site da inicialização de spam e aumentar a velocidade de carregamento das páginas públicas.<br>O Antispam e o Cache se comunicam diretamente com o arquivo .htaccess. Desabilitar WP-CRON atua no arquivo wp-config.php. É possível que haja casos de incompatibilidade. Neste caso, convidamos você a desativar o serviço incompatível.<br>A aplicação CO2 fornece aos surfistas o resultado expresso como uma porcentagem do CO2 reduzido pela otimização da página. O serviço funciona apenas para páginas otimizadas pelo Sistema Topper.";
			   $txtts12="Desativar WP-CRON";
			   $txtts14="Não é possível gerenciar o WP-CRON a partir do Sistema Topper porque ele é configurado manualmente ou por meio de outro plugin.";
			   $txtts15="Não é possível gerenciar o WP-CRON a partir do Sistema Topper porque o arquivo wp-config.php está vazio.";
			   $txtts16="WP-CRON não pode ser gerenciado porque o arquivo wp-config.php não foi encontrado.";
			   $txtts17="Aplicação de CO2";
			   $txtts18="A aplicação de CO2 não pode ser gerenciada porque o arquivo general.php está vazio.";
			   $txtts19="A aplicação de CO2 não pode ser gerenciada porque o arquivo general.php não foi detectado.";
			   $txtts20="Atualização automática";
			   $txtts21="Não é possível gerenciar a atualização automática de páginas otimizadas porque o arquivo general.php está vazio.";
			   $txtts22="Não é possível gerenciar a atualização automática de páginas otimizadas porque o arquivo general.php não foi detectado.";	
			   $txtts23="Protege o site da inicialização de spam, bloqueando solicitações de IPs não autorizados.";
			   $txtts24="As exceções de bloqueio podem ser definidas e personalizadas.";
			   $txtts25="O serviço é completamente gratuito.";
			   $txtts26="Configure um cache forte para o site via htaccess.";
			   $txtts27="Esta forma de ativar o cache é recomendada para sites cujas páginas não sofrem alterações frequentes. Não é recomendado para sites de comércio eletrônico.";
			   $txtts28="O serviço é completamente gratuito.";
			   $txtts29="Ao desabilitar a função WP-CRON, a navegação nas páginas é mais rápida, pois as freqüentes chamadas internas são evitadas devido a possíveis sobrecargas do servidor web.";
			   $txtts30="Se você configurou atualizações automáticas de plug-ins com o WP-CRON desativado, precisará fazê-las manualmente.";
			   $txtts31="O serviço é completamente gratuito.";
			   $txtts32="Às páginas otimizadas adicionamos um recurso público que permite calcular a porcentagem de CO2 reduzida.";
			   $txtts33="O serviço é totalmente gratuito, mesmo que seja aplicável apenas a páginas otimizadas.";
			   $txtts34="Para cada variação dos códigos-fonte originais das páginas otimizadas, uma nova otimização da página será necessária.";	
			   $txtts35="As informações salvas anteriormente serão reutilizadas na nova fase de otimização.";
			   $txtts36="É aconselhável usar este recurso com um plano de assinatura ativo vinculado a este site.";	
			   $txtts37="Os serviços complementares do Sistema Topper são gratuitos para ajudar a aumentar a segurança, a velocidade de carregamento das páginas públicas e a reputação do seu site.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="O carregamento lento de imagem inteligente não pode ser tratado porque o arquivo general.php não foi detectado.	";
			   $txtts40="Você aumenta a velocidade de carregamento da página porque as regras de carregamento lento são aplicadas às imagens de maneira dinâmica e amigável ao SEO.";  
               $txtts41="Otimização de recursos Javascript";
               $txtts42="Defina seu modelo de otimização de recursos javascript favorito fora da página. Para aumentar a velocidade de carregamento de páginas da web."; 
               $txtts43="A funcionalidade está incluída no processo de otimização da página.";			   
			   $txtts44="Otimizando recursos css";
			   $txtts45="A otimização dos recursos CSS externos à página permite aumentar a velocidade de carregamento das páginas web.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Limpar cache de otimizações";
               $txtts49="Remover todas as páginas, imagens, recursos javascript e css otimizados com o plugin. Também é possível remover os arquivos de log gerados durante os processos de otimização.";
               $txtts50="Lembre-se que deletar o cache do plugin é um processo irreversível. Você ainda poderá realizar otimizações de página novamente.";
               $txtts51="Endereço do palco e versão de produção do site";
               $txtts52="Informações úteis sobre como habilitar o ApiKey da versão do site stage se ele residir em um subdomínio (por exemplo: https://stage.mywebsite.com).";
               $txtts53="Também é possível alterar o endereço do site na versão de palco.";
               $txtts54="Ative o serviço";
               $txtts55="Importar ou exportar CSV";
               $txtts56="Gere um arquivo CSV com todas as informações das páginas otimizadas.";
               $txtts57="Trabalhe no arquivo CSV e importe as alterações rapidamente.";
               $txtts58="Inteligência artificial";
               $txtts59="Conecte o Chat GPT ao processo de otimização da sua página.";
               $txtts60="As abelhas atuarão nos metadados do título e da descrição.";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Сервисы";
			   $txtts4="действия";
			   $txtts5="Сохранить";
			   $txtts6="управлять";
			   $txtts7="Дополнительные сервисы Topper System SEO не могут быть активированы, так как файл .htaccess был найден в корне пустого сайта.";
			   $txtts8="Дополнительные службы Topper System SEO не могут быть активированы, поскольку файл .htaccess не найден в корне веб-сайта.";
			   $txtts9="Защита от спама";
			   $txtts10="кэш";
			   $txtts11="Дополнительные услуги Topper System SEO бесплатны, они помогают защитить веб-сайт от загрузки спама и увеличить скорость загрузки общедоступных страниц.<br>Антиспам и кэш напрямую взаимодействуют с файлом .htaccess. Отключение WP-CRON воздействует на файл wp-config.php. Не исключено, что есть случаи несовместимости. В этом случае мы предлагаем вам отключить несовместимый сервис.<br>Приложение CO2 предоставляет пользователям результат, выраженный в процентах от СО2, уменьшенного за счет оптимизации страницы. Сервис работает только для страниц, оптимизированных системой Topper.";
			   $txtts12="Отключить WP-CRON";
			   $txtts14="Невозможно управлять WP-CRON из Topper System SEO, потому что он установлен вручную или с помощью другого плагина.";
			   $txtts15="Невозможно управлять WP-CRON из системы Topper, потому что файл wp-config.php пуст.";
			   $txtts16="WP-CRON не может управляться, поскольку файл wp-config.php не найден.";
			   $txtts17="CO2 приложение";
			   $txtts18="Приложение CO2 не может управляться, потому что файл general.php пуст.";
			   $txtts19="Приложение CO2 не может управляться, потому что файл general.php не был обнаружен.";
			   $txtts20="Автоматическое обновление";
			   $txtts21="Невозможно управлять автоматическим обновлением оптимизированных страниц, потому что файл general.php пуст.";
			   $txtts22="Невозможно управлять автоматическим обновлением оптимизированных страниц, потому что файл general.php не был обнаружен.";		
			   $txtts23="Защищает сайт от загрузки спама, блокируя запросы с неавторизованных IP-адресов.";
			   $txtts24="Блокирующие исключения можно установить и настроить.";
			   $txtts25="Услуга полностью бесплатна.";
			   $txtts26="Настроить надежный кеш для сайта через htaccess.";
			   $txtts27="Такой способ активации кеша рекомендуется для сайтов, страницы которых не претерпевают частых изменений. Не рекомендуется для сайтов электронной коммерции.";
			   $txtts28="Услуга полностью бесплатна.";
			   $txtts29="Отключение функции WP-CRON ускоряет навигацию по страницам, так как частые внутренние вызовы избегаются из-за возможных перегрузок веб-сервера.";
			   $txtts30="Если вы установили автоматическое обновление плагинов с отключенным WP-CRON, вам нужно будет сделать их вручную.";
			   $txtts31="Услуга полностью бесплатна.";
			   $txtts32="На оптимизированные страницы мы добавляем общедоступную функцию, которая позволяет рассчитать процент снижения выбросов CO2.";
			   $txtts33="Услуга полностью бесплатна, даже если она применима только к оптимизированным страницам.";
			   $txtts34="Для каждого варианта исходных исходных кодов оптимизированных страниц потребуется новая оптимизация страницы.";	
			   $txtts35="Ранее сохраненная информация будет повторно использована на новом этапе оптимизации.";
			   $txtts36="Рекомендуется использовать эту функцию с активным планом подписки, связанным с этим веб-сайтом.";	
			   $txtts37="Дополнительные услуги Topper System SEO бесплатны для повышения безопасности, скорости загрузки общедоступных страниц и репутации вашего веб-сайта.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Отложенная загрузка Smart Image не может быть обработана, так как файл general.php не обнаружен.";
			   $txtts40="Вы увеличиваете скорость загрузки страницы, потому что правила ленивой загрузки применяются к изображениям динамичным и оптимизированным для SEO способом.	";
               $txtts41="Оптимизация ресурсов Javascript";
               $txtts42="Установите свою любимую модель оптимизации ресурсов JavaScript за пределами страницы. Для увеличения скорости загрузки веб-страниц.";
               $txtts43="Функционал включен в процесс оптимизации страницы.";			   
			   $txtts44="Оптимизация ресурсов css";
			   $txtts45="Оптимизация внешних по отношению к странице css-ресурсов позволяет увеличить скорость загрузки веб-страниц.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Очистить кеш оптимизации";
               $txtts49="Удалите все страницы, изображения, ресурсы javascript и css, оптимизированные с помощью плагина. Также можно удалить файлы журнала, созданные в процессе оптимизации.";
               $txtts50="Помните, что удаление кеша плагинов является необратимым процессом. Вы все равно сможете снова выполнить оптимизацию страницы.";
               $txtts51="Адрес рабочей и рабочей версии сайта";
               $txtts52="Полезная информация о том, как включить ключ ApiKey тестовой версии сайта, если он находится на поддомене (например, https://stage.mywebsite.com).";
               $txtts53="В тестовой версии также возможно изменить адрес сайта.";
               $txtts54="Активировать услугу";
               $txtts55="Импорт или экспорт CSV";
               $txtts56="Создайте файл CSV со всей информацией об оптимизированных страницах.";
               $txtts57="Работайте с файлом CSV и быстро импортируйте изменения.";
               $txtts58="Искусственный интеллект";
               $txtts59="Подключите Chat GPT к процессу оптимизации страницы.";
               $txtts60="Пчелы будут действовать на основе метаданных заголовка и описания.";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="服务";
			   $txtts4="动作";
			   $txtts5="保存";
			   $txtts6="管理";
			   $txtts7="由于在空网站的根目录中找到了.htaccess文件，因此无法激活其他Topper System SEO服务。";
			   $txtts8="无法在网站根目录中找到.htaccess文件，因此无法激活其他Topper System SEO服务。";
			   $txtts9="反垃圾邮件";
			   $txtts10="快取";
			   $txtts11="附加的Topper System SEO服务是免费的，以帮助保护网站免受垃圾邮件引导并提高公共页面的加载速度。<br>反垃圾邮件和缓存直接与.htaccess文件通信，“禁用WP-CRON”作用于wp-config.php文件。可能存在不兼容的情况。在这种情况下，我们邀请您禁用不兼容的服务。<br>CO2 Application 向浏览者提供结果，该结果表示为页面优化所减少的 CO2 的百分比。 该服务仅适用于由 Topper System SEO 优化的页面。";
			   $txtts12="禁用WP-CRON";
			   $txtts14="无法从Topper System SEO管理WP-CRON，因为它是手动设置或通过其他插件设置的。";
			   $txtts15="由于wp-config.php文件为空，因此无法从Topper System SEO管理WP-CRON。";
			   $txtts16="由于找不到wp-config.php文件，因此无法管理WP-CRON。";
			   $txtts17="二氧化碳应用";
			   $txtts18="由于general.php 文件为空，无法管理CO2 Application。";
			   $txtts19="无法管理 CO2 应用程序，因为未检测到 general.php 文件。";
			   $txtts20="自动更新";
			   $txtts21="无法管理优化页面的自动更新，因为general.php 文件为空。";
			   $txtts22="由于未检测到general.php 文件，因此无法管理优化页面的自动更新。";		
			   $txtts23="通过阻止来自未经授权的 IP 的请求，保护网站免遭垃圾邮件启动。";
			   $txtts24="可以设置和自定义阻止异常。";
			   $txtts25="该服务是完全免费的。";
			   $txtts26="通过 htaccess 为站点设置强大的缓存。";
			   $txtts27="对于页面不经常更改的站点，建议使用这种激活缓存的方式。不推荐用于电子商务网站。";
			   $txtts28="该服务是完全免费的。";
			   $txtts29="通过禁用 WP-CRON 功能，页面导航会更快，因为避免了由于网络服务器可能过载而导致的频繁内部调用。";
			   $txtts30="如果您在禁用 WP-CRON 的情况下设置了自动插件更新，则需要手动进行。";
			   $txtts31="该服务是完全免费的。";
			   $txtts32="我们为优化页面添加了一项公共功能，可让您计算二氧化碳减少的百分比。";
			   $txtts33="即使仅适用于优化页面，该服务也是完全免费的。";
			   $txtts34="对于优化页面的原始源代码的每个变体，都需要对页面进行新的优化。";	
			   $txtts35="之前保存的信息将在新的优化阶段重复使用。";
			   $txtts36="建议将此功能与链接到本网站的有效订阅计划一起使用。";		
			   $txtts37="Topper System SEO 补充服务是免费的，可帮助提高公共页面的安全性、加载速度和您网站的声誉。";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="无法处理智能图像延迟加载，因为未检测到 general.php 文件。";
			   $txtts40="您提高了页面加载速度，因为延迟加载规则以动态和 seo 友好的方式应用于图像。";	
               $txtts41="Javascript资源优化";
               $txtts42="在页面外设置你最喜欢的 javascript 资源优化模型。 提高网页的加载速度。";
               $txtts43="该功能包含在页面优化过程中。";			   
			   $txtts44="优化CSS资源";
			   $txtts45="页面外部css资源的优化可以提高网页的加载速度。";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts4​​8="清除优化缓存";
               $txtts4​​9="删除使用该插件优化的所有页面、图像、javascript 资源和 css。还可以删除优化过程中生成的日志文件。";
               $txtts50="请记住，删除插件缓存是一个不可逆的过程。您仍然可以再次执行页面优化。";
               $txtts51="该站点的舞台和生产版本的地址";
               $txtts52="有关如何启用阶段站点版本的 ApiKey（如果它驻留在子域上）的有用信息（例如：https://stage.mywebsite.com）。";
               $txtts53="也可以在阶段版本中更改站点地址。";
               $txtts54="激活服务";
               $txtts55="导入或导出 CSV";
               $txtts56="生成一个 CSV 文件，其中包含有关优化页面的所有信息。";
               $txtts57="处理 CSV 文件并快速导入更改。";
               $txtts58="人工智能";
               $txtts59="将 Chat GPT 连接到您的页面优化流程。";
               $txtts60="蜜蜂将根据标题和描述元数据采取行动。";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="שירותים";
			   $txtts4="פעולות";
			   $txtts5="לשמור";
			   $txtts6="לנהל";
			   $txtts7="לא ניתן להפעיל את שירותי ה- Topper System SEO הנוספים מכיוון שקובץ ה- .htaccess נמצא בשורש האתר הריק.";
			   $txtts8="לא ניתן להפעיל את שירותי ה- Topper System SEO הנוספים מכיוון שקובץ ה- .htaccess לא נמצא בשורש האתר.";
			   $txtts9="אנטי - ספאם";
			   $txtts10="מטמון";
			   $txtts11="שירותי Topper System SEO הנוספים הם בחינם, בכדי לסייע בהגנה על האתר מפני אתחול דואר זבל ולהגדיל את מהירות הטעינה של דפים ציבוריים.<br>Antispam ו- Cache מתקשרים ישירות עם קובץ .htaccess, השבת WP-CRON פועל על קובץ wp-config.php. יתכן שישנם מקרים של אי התאמה. במקרה זה אנו מזמינים אתכם להשבית את השירות שאינו תואם.<br>יישום CO2 מספק לגולשים את התוצאה המתבטאת באחוזים מ- CO2 המופחת על ידי אופטימיזציה של העמוד. השירות פועל רק עבור דפים המותאמים על ידי מערכת Topper.";
			   $txtts12="השבת את WP-CRON";
			   $txtts14="לא ניתן לנהל את WP-CRON מ- Topper System SEO מכיוון שהוא מוגדר באופן ידני או באמצעות תוסף אחר.";
			   $txtts15="לא ניתן לנהל את WP-CRON ממערכת Topper כיוון שקובץ wp-config.php ריק.";
			   $txtts16="לא ניתן לנהל את WP-CRON מכיוון שקובץ wp-config.php לא נמצא.";
			   $txtts17="יישום CO2";
			   $txtts18="לא ניתן לנהל את יישום CO2 מכיוון שהקובץ general.php ריק.";
			   $txtts19="לא ניתן לנהל את יישום CO2 מכיוון שקובץ general.php לא זוהה.";
			   $txtts20="עדכון אוטומטי";
			   $txtts21="לא ניתן לנהל עדכון אוטומטי של דפים מותאמים מכיוון שקובץ general.php ריק.";
			   $txtts22="לא ניתן לנהל עדכון אוטומטי של דפים מותאמים מכיוון שקובץ general.php לא זוהה.";	
			   $txtts23="מגן על האתר מפני אתחול דואר זבל על ידי חסימת בקשות ממחשבי IP לא מורשים.";
			   $txtts24="ניתן להגדיר ולהתאים חריגים לחסימה.";
			   $txtts25="השירות הוא בחינם לחלוטין.";
			   $txtts26="הגדר מטמון חזק לאתר באמצעות htaccess.";
			   $txtts27="דרך זו להפעלת המטמון מומלצת לאתרים שדפיהם אינם עוברים שינויים תכופים. זה לא מומלץ לאתרי מסחר אלקטרוני.";
			   $txtts28="השירות הוא בחינם לחלוטין.";
			   $txtts29="על ידי השבתת הפונקציה WP-CRON, הניווט בדפים מהיר יותר מכיוון שנמנעים משיחות פנימיות תכופות עקב עומס יתר של שרת האינטרנט.";
			   $txtts30="אם הגדרת עדכוני תוספים אוטומטיים כאשר WP-CRON מושבת, יהיה עליך לבצע אותם באופן ידני.";
			   $txtts31="השירות הוא בחינם לחלוטין.";
			   $txtts32="לדפים המותאמים אנו מוסיפים תכונה ציבורית המאפשרת לך לחשב את אחוז הפחתת CO2.";
			   $txtts33="השירות הוא בחינם לחלוטין גם אם הוא ישים רק לדפים מותאמים.";
			   $txtts34="עבור כל וריאציה של קודי המקור המקוריים של הדפים המותאמים, יידרש אופטימיזציה חדשה של הדף.";	
			   $txtts35="המידע שנשמר בעבר ייעשה שימוש חוזר בשלב האופטימיזציה החדש.";
			   $txtts36="רצוי להשתמש בתכונה זו עם תוכנית מנוי פעילה המקושרת לאתר זה.";	
			   $txtts37="השירותים הנוספים של מערכת Topper System SEO הם בחינם כדי לסייע בהגברת האבטחה, מהירות הטעינה של דפים ציבוריים והמוניטין של האתר שלך.  ";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="לא ניתן לטפל ב-Smart Image Lazy-Loading מכיוון שקובץ general.php לא זוהה.";
			   $txtts40="אתה מגדיל את מהירות טעינת הדפים מכיוון שכללי הטעינה העצלנית מוחלים על התמונות בצורה דינאמית וידידותית לקידום אתרים.";	   
               $txtts41="אופטימיזציה של משאבי Javascript";
               $txtts42="הגדר את מודל האופטימיזציה של משאבי javascript המועדף עליך מחוץ לדף. כדי להגביר את מהירות הטעינה של דפי אינטרנט.";
               $txtts43="הפונקציונליות כלולה בתהליך אופטימיזציית העמוד.";			   
			   $txtts44="אופטימיזציה של משאבי css";
			   $txtts45="האופטימיזציה של משאבי css חיצוניים לדף מאפשרת להגביר את מהירות הטעינה של דפי אינטרנט.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="נקה מטמון אופטימיזציות";
               $txtts49="הסר את כל הדפים, התמונות, משאבי ה-Javascript ו-CSS שעברו אופטימיזציה באמצעות התוסף. אפשר גם להסיר את קובצי היומן שנוצרו במהלך תהליכי אופטימיזציה.";
               $txtts50="זכור שמחיקת מטמון הפלאגין היא תהליך בלתי הפיך. עדיין תוכל לבצע שוב אופטימיזציות של דפים.";
               $txtts51="כתובת הבמה וגרסת ההפקה של האתר";
               $txtts52="מידע שימושי כיצד להפעיל את ה-ApiKey של גרסת אתר הבמה אם הוא נמצא בתת-דומיין (למשל: https://stage.mywebsite.com).";
               $txtts53="אפשר גם לשנות את כתובת האתר בגרסת הבמה.";
               $txtts54="הפעל את השירות";
               $txtts55="ייבוא ​​או ייצא CSV";
               $txtts56="צור קובץ CSV עם כל המידע על הדפים שעברו אופטימיזציה.";
               $txtts57="עבוד על קובץ ה-CSV וייבא שינויים במהירות.";
               $txtts58="בינה מלאכותית";
               $txtts59="חבר את Chat GPT לתהליך האופטימיזציה של הדף שלך.";
               $txtts60="הדבורים יפעלו לפי המטא נתונים של הכותרת והתיאור.";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Services";
			   $txtts4="Actus";
			   $txtts5="Salvare";
			   $txtts6="Curo";
			   $txtts7="Topper additional muneris Ratio est, quia non potest activated .htaccess lima inventa radix in in inanis website.";
			   $txtts8="Topper et additional muneris system non potest activated .htaccess lima, quia non esset inventa radix in website.";
			   $txtts9="Antispam";
			   $txtts10="Cache";
			   $txtts11="Topper et additional muneris system possunt ad auxilium praesidio a website quod proventus tabernus spam pages loading celeritas publica.<br>Antispam Cache et communicant immediate cum .htaccess lima, lima config.php wp- inactivare WP-CRON non agit in partem. De casibus non potest esse repugnantia. Hic nos invitare te ad disable in ministerio congruit.<br>Applicationem providet co2 superficies ita expressa recipis partem redactum CO2 pagina nulla. Ministerium operatur nisi per paginas optimized Topper System SEO.";
			   $txtts12="WP-CRON inactivare";
			   $txtts14="Non potest administrare WP-CRON ex Topper manually aut per aliud pone Ratio est quia plugin.";
			   $txtts15="Non potest administrare WP-CRON a Ratio Topper quod wp- config.php file vacua remansit.";
			   $txtts16="WP-CRON confici non possit quod wp- config.php file non inveni.";
			   $txtts17="Application co2";
			   $txtts18="Application CO2 confici non possit quod file general.php vacua remansit.";
			   $txtts19="Application CO2 confici non possit quod file general.php non iudicaretur.";
			   $txtts20="latae update";
			   $txtts21="Non potest administrare ipso quod updating in paginis optimized general.php file vacua remansit.";
			   $txtts22="Non potest administrare latae sententiae favent optimized pages file general.php quia non iudicaretur.";	
			   $txtts23="Alienum a website tuetur spam violenta preces premendo IPS.";
			   $txtts24="Clausus excipi possit, et posuit nativus.";
			   $txtts25="Ministerium est omnino libera.";
			   $txtts26="Fortis cache extruxerat ad situm htaccess via.";
			   $txtts27="Cache Haec est via ad activum subibit crebris suadetur situm non mutantur cuius paginae. Suadetur, quia non est E-commerce sites.";
			   $txtts28="Ministerium est omnino libera.";
			   $txtts29="Per inactivare ad ZE-Friend munus, quod citius est nauigatio ad paginas et frequentes internum vocat vitabuntur vitia maxime ex oneraverit et webserver.";
			   $txtts30="Si profectus est cum automatic updates plugin WP-Friend erret necesse est facite ea manually.";
			   $txtts31="Ministerium est omnino libera.";
			   $txtts32="Optimized paginae ad nos addere pluma ut sino vos publico recipis CO2 rationem redegit.";
			   $txtts33="Ministerium est omnino liber est, etiam si interdictum est optimized pages.";
			   $txtts34="Nam quisque ex fonte originale codices optimized pages, ipsum novi ex pagina non requiri.";	
			   $txtts35="Cum antea salvus et notitia in palimpsesto relata novae ipsum tempus.";
			   $txtts36="Is est advisable utor is pluma consilium coniunctum cum activae subscriptionem huius website.";		
			   $txtts37="Ratio est Topper accessiones officia esse possunt auxilium in incremento securitatem loading celeritas Paginae publicam et ad existimationem ordinis vestri website.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Captiosus Image Lazy-Loading tractari non potest quod generalis.php fasciculus non detectus est.";
			   $txtts40="Paginam loading celeritatis auges quia regulae loading pigrorum imaginibus modo dynamico et seo applicatae sunt.";	
               $txtts41="Javascript resource ipsum";
               $txtts42="Vestri ventus html optimization exemplar extra paginam constitue. Ad celeritatem paginarum oneratam augendam.";
               $txtts43="Officina in pagina optimizationis processu comprehenditur.";			   
			   $txtts44="Optimizing css opibus";
			   $txtts45="Optimizatio facultatum css externarum ad paginam permittit augere celeritatem oneratam paginarum.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Clar optimizations cache";
               $txtts49="Remove omnes paginas, imagines, opes html et css optimized cum plugin. Potest etiam removere tabellas electronicas in processibus optimizationis";
               $txtts50="Memento ut plugin cache deleto processum irreversibilem esse. pagina optimizations iterum praestare poteris".
               $txtts51="Oratio scaenae et versionis situs productionis";
               $txtts52="Usilis notitia in quo ApiKey versio scaenicae sinit in subdomain (v.g.: https://stage.mywebsite.com)";
               $txtts53="Potest etiam locum inscriptionis in scaena versionis mutare";
               $txtts54="Activate ministerium";
               $txtts55="Importo vel export CSV";
               $txtts56="Fasciculum CSV generare cum omnibus informationibus de paginis optimized.";
               $txtts57="Opus in tabella CSV et mutationes importat celeriter.";
               $txtts58="Intelligentia artificialis";
               $txtts59="Coniungere Chat GPT ad paginae optimization processus.";
               $txtts60="Apes in titulo et descriptione metadata aget.";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Services";
			   $txtts4="Actions";
			   $txtts5="Save";
			   $txtts6="Manage";
			   $txtts7="The additional Topper System SEO services cannot be activated because the .htaccess file was found in the root of the empty website.";
			   $txtts8="The additional Topper System SEO services cannot be activated because the .htaccess file was not found in the website root.";
			   $txtts9="Antispam";
			   $txtts10="Cache";
			   $txtts11="The additional Topper System SEO services are free, to help protect the website from spam boot and increase the loading speed of public pages.<br>Antispam and Cache communicate directly with the .htaccess file, Disable WP-CRON acts on the wp-config.php file. There may be cases of incompatibility. In this case we invite you to disable the incompatible service.<br>CO2 Application provides surfers with the result expressed as a percentage of the CO2 reduced by the page optimization. The service works only for pages optimized by Topper System SEO.";
			   $txtts12="Disable WP-CRON";
			   $txtts14="It is not possible to manage WP-CRON from Topper System SEO because it is set manually or by means of another plugin.";
			   $txtts15="It is not possible to manage WP-CRON from Topper System SEO because the wp-config.php file is empty.";
			   $txtts16="WP-CRON cannot be managed because the wp-config.php file was not found.";
			   $txtts17="CO2 Application";
			   $txtts18="CO2 Application cannot be managed because the general.php file is empty.";
			   $txtts19="CO2 Application cannot be managed because the general.php file was not detected.";
			   $txtts20="Automatic update";
			   $txtts21="It is not possible to manage automatic updating of optimized pages because the general.php file is empty.";
			   $txtts22="It is not possible to manage automatic updating of optimized pages because the general.php file was not detected.";	
			   $txtts23="Protects the website from spam boot by blocking requests from unauthorized IPs.";
			   $txtts24="Blocking exceptions can be set and customized.";
			   $txtts25="The service is completely free.";
			   $txtts26="Set up a strong cache to the site via htaccess.";
			   $txtts27="This way of activating the cache is recommended for sites whose pages do not undergo frequent changes. It is not recommended for e-commerce sites.";
			   $txtts28="The service is completely free.";
			   $txtts29="By disabling the WP-CRON function, the navigation of the pages is faster because frequent internal calls are avoided due to possible overloads of the webserver.";
			   $txtts30="If you have set automatic plugin updates with WP-CRON disabled you will need to do them manually.";
			   $txtts31="The service is completely free.";
			   $txtts32="To the optimized pages we add a public feature that allows you to calculate the percentage of CO2 reduced.";
			   $txtts33="The service is completely free even if it is only applicable to optimized pages.";
			   $txtts34="For each variation of the original source codes of the optimized pages, a new page optimization will be required.";	
			   $txtts35="The information previously saved will be reused in the new optimization phase.";
			   $txtts36="It is advisable to use this feature with an active subscription plan linked to this website.";	
			   $txtts37="The Topper System SEO supplementary services are free to help increase the security, loading speed of public pages and the reputation of your website.";
			   $txtts38="Smart Image Lazy-Loading";
			   $txtts39="Smart Image Lazy-Loading cannot be handled because the general.php file was not detected.";
			   $txtts40="You increase the page loading speed because the rules of lazy loading are applied to the images in a dynamic and seo friendly way.";	
               $txtts41="Javascript resource optimization";
               $txtts42="Set your favorite javascript resource optimization model outside the page. To increase the loading speed of web pages.";
               $txtts43="The functionality is included in the page optimization process.";			   
			   $txtts44="Optimizing CSS resources";
			   $txtts45="The optimization of css resources external to the page allows to increase the loading speed of web pages.";
			   $txtts46="Esclusion set";
			   $txtts47="Not esclusion set";
               $txtts48="Clear optimizations cache";
               $txtts49="Remove all pages, images, javascript and css resources optimized with the plugin. It is also possible to remove the log files generated during optimization processes.";
               $txtts50="Remember that deleting the plugin cache is an irreversiile process. You will still be able to perform page optimizations again.";
               $txtts51="Address of the stage and production version of the site";
               $txtts52="Useful information on how to enable the ApiKey of the stage site version if it resides on a subdomain (e.g.: https://stage.mywebsite.com).";
               $txtts53="It is also possible to change the site address in the stage version.";
               $txtts54="Activate the service";
               $txtts55="Import or export CSV";
               $txtts56="Generate a CSV file with all the information about the optimized pages.";
               $txtts57="Work on the CSV file and import changes quickly.";
               $txtts58="Artificial intelligence";
               $txtts59="Connect Chat GPT to your page optimization process.";
               $txtts60="The bees will act on the title and description metadata.";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
					
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){               
                        $pathfilegeneral=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";
                        $pathfileactivenoneresourcetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveNoneResourceToppersystem.txt";
                        $pathfileactivedefertoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveDeferToppersystem.txt";
                        $pathfileactivedelayjavascripttoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveDelayJavascriptToppersystem.txt";
						$pathfileexcludecsstoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExcludeCSSToppersystem.txt";
                        $pathfilenocsscriticalinlinetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/NoCSScriticalInline.txt";
                        $pathfilenoactivecssforstyletoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/NoActiveCSSforStyle.txt";

                        $loading_block="<table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table>";
						
						$fileHtaxxess_ts=TopperSystemSetFilemanagementts::detect_pathfile()."."."ht"."acc"."ess";
						if(file_exists($fileHtaxxess_ts)){
							$htaxxess_toppersystem=@file_get_contents($fileHtaxxess_ts);			
							if(trim($htaxxess_toppersystem) != ""){
								#verifica gli stati
								if((str_replace("errordocument 403","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem"))||(str_replace("order allow,deny","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem"))){
									$check_antispam="";
                                    $class_link_aspmts="display_none_ts";
                                    $class_nolink_aspmts="colorgreytext_toppersystem";
								}else{
									$check_antispam=" checked";
                                    $class_link_aspmts="";
                                    $class_nolink_aspmts="colorgreytext_toppersystem display_none_ts";
								}
								
								$add_htaxxess_new_toppersystem="1";
								if(str_replace("<ifmodule mod_deflate.c>","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
									$add_htaxxess_new_toppersystem="0";
								}									
								if(str_replace("<ifmodule mod_expires.c>","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
									$add_htaxxess_new_toppersystem="0";
								}
								if(str_replace("<ifmodule mod_headers.c>","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
									$add_htaxxess_new_toppersystem="0";
								}
								if(str_replace("<ifmodule litespeed>","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
									$add_htaxxess_new_toppersystem="0";
								}
								if(str_replace("header set connection keep-alive","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
									$add_htaxxess_new_toppersystem="0";
								}									
								if(str_replace("<ifmodule pagespeed_module>","",strtolower($htaxxess_toppersystem)) == strtolower("$htaxxess_toppersystem")){
									$add_htaxxess_new_toppersystem="0";
								}				
								if($add_htaxxess_new_toppersystem == "0"){
									$check_cache="";
								}else{
									$check_cache=" checked";
								}
							
								$scrivi_message="";
								$scrivi_save_status_cache="<a rel=\"nofollow\" href=\"javascript:save_status_cache();\">$txtts5</a>";								
								$scrivi_save_status_aspmts="<a rel=\"nofollow\" href=\"javascript:save_status_aspmts();\">$txtts5</a>";								
								$scrivi_goto_exceptions_aspmts="| <small><span id=\"look_link_toppersystem_goto_exceptions_aspmts\" class=\"$class_link_aspmts\"><a rel=\"nofollow\" href=\"javascript:goto_exceptions_aspmts();\">$txtts6</a></span><span id=\"nolook_link_toppersystem_goto_exceptions_aspmts\" class=\"$class_nolink_aspmts\" title=\"$txtts54\">$txtts6</span></small>";								
							}else{
								$scrivi_message="<div class=\"msg_error_toppersystem\">$txtts7</div>";
								$scrivi_save_status_cache="";								
								$scrivi_save_status_aspmts="";
								$scrivi_goto_exceptions_aspmts="";
								$check_antispam="";
								$check_cache="";
							}
							$htaxxess_toppersystem="";
						}else{
							$scrivi_message="<div class=\"msg_error_toppersystem\">$txtts8</div>";
							$scrivi_save_status_cache="";								
							$scrivi_save_status_aspmts="";
							$scrivi_goto_exceptions_aspmts="";
							$check_antispam="";
							$check_cache="";
						}
				
						$mostra_line_preleva3="1";
						$scrivi_message2="";		
						$fileWpConfig_ts=TopperSystemSetFilemanagementts::detect_pathfile()."wp-config.php";
						if(file_exists($fileWpConfig_ts)){
							$handle_wpconfig = fopen($fileWpConfig_ts, "r");
							if (FALSE === $handle_wpconfig) {
								$wpconfig_toppersystem="";
							}else{
								$wpconfig_toppersystem = '';
								while (!feof($handle_wpconfig)) {
									$wpconfig_toppersystem .= fread($handle_wpconfig, 8192);
								}
								fclose($handle_wpconfig);
							}
							unset($handle_wpconfig);
							if(trim($wpconfig_toppersystem) != ""){
								if((str_replace("\$table_prefix","",$wpconfig_toppersystem) != "$wpconfig_toppersystem")&&(str_replace("define('DISABLE_WP_CRON', 'true'); //set toppersystem\n","",$wpconfig_toppersystem) != "$wpconfig_toppersystem")){
									$check_wpconfig=" checked";
									$scrivi_save_status_wpconfig="<a rel=\"nofollow\" href=\"javascript:save_status_wpcron();\">$txtts5</a>";
								}else if(str_replace("DISABLE_WP_CRON","",$wpconfig_toppersystem) != "$wpconfig_toppersystem"){
									$scrivi_message2="<div class=\"msg_error_toppersystem\">$txtts14</div>";
									$check_wpconfig="";
									$scrivi_save_status_wpconfig="";
									$mostra_line_preleva3="0";
								}else{									
									if(str_replace("\$table_prefix","",$wpconfig_toppersystem) != "$wpconfig_toppersystem"){
										$check_wpconfig="";
										$scrivi_save_status_wpconfig="<a rel=\"nofollow\" href=\"javascript:save_status_wpcron();\">$txtts5</a>";
									}else{
										$check_wpconfig="";
										$scrivi_save_status_wpconfig="";
										$mostra_line_preleva3="0";
									}
								}
							}else{
								$scrivi_message2="<div class=\"msg_error_toppersystem\">$txtts15</div>";
								$check_wpconfig="";
								$scrivi_save_status_wpconfig="";
								$mostra_line_preleva3="0";
							}
							unset($wpconfig_toppersystem);
						}else{
							$scrivi_message2="<div class=\"msg_error_toppersystem\">$txtts16</div>";
							$check_wpconfig="";
							$scrivi_save_status_wpconfig="";
							$mostra_line_preleva3="0";
						}

						unset($fileWpConfig_ts);
						if($mostra_line_preleva3 == "1"){
							$line_preleva3="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a3\" onclick=\"help_services_toppersystem('3')\"><span id=\"box_services_b3\">&oplus;</span> <span id=\"guideboxts23\" class=\"\" tabindex=\"0\">$txtts12</span></span><div id=\"box_services_c3\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('3')\"><small>$txtts29<br>$txtts30<br><i>$txtts31</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><div id=\"block_save_wpcron_toppersystem\" class=\"\"><input id=\"wpcron_service_save\" name=\"wpcron_service_save\" type=\"checkbox\" $check_wpconfig> $scrivi_save_status_wpconfig</div><div id=\"block_save_loading_wpcron_toppersystem\" class=\"display_none_ts\">$loading_block</div></center></td></tr>";
						}else{
							$line_preleva3="";
						}

						$mostra_line_preleva4="1";
						$scrivi_message3="";

						$mostra_line_preleva5="1";
						$scrivi_message4="";

						$mostra_line_preleva6="1";
						$scrivi_message5="";

						#$fileGeneral_ts="../components/general.php";
                        $fileGeneral_ts="$pathfilegeneral";
						if(file_exists($fileGeneral_ts)){
							$handle_general = fopen($fileGeneral_ts, "r");
							if (FALSE === $handle_general) {
								$general_toppersystem="";
							}else{
								$general_toppersystem = '';
								while (!feof($handle_general)) {
									$general_toppersystem .= fread($handle_general, 8192);
								}
								fclose($handle_general);
							}
							unset($handle_general);
							if(trim($general_toppersystem) != ""){
								if((str_replace("\$par_co2application_toppersystem=","",$general_toppersystem) != "$general_toppersystem")&&(str_replace("\$par_co2application_toppersystem=\"1\"","",$general_toppersystem) != "$general_toppersystem")){
									$check_general=" checked";

                                    $class_link_co2application="";
                                    $class_nolink_co2application="colorgreytext_toppersystem display_none_ts";

									$scrivi_save_status_general="<a rel=\"nofollow\" href=\"javascript:save_status_co2application();\">$txtts5</a>";
									$scrivi_goto_exceptions_co2application="| <small><span id=\"look_link_toppersystem_goto_exceptions_co2application\" class=\"$class_link_co2application\"><a rel=\"nofollow\" href=\"javascript:goto_exceptions_co2application();\">$txtts6</a></span><span id=\"nolook_link_toppersystem_goto_exceptions_co2application\" class=\"$class_nolink_co2application\" title=\"$txtts54\">$txtts6</span></small>";
								}else{									
									if(str_replace("\$par_co2application_toppersystem=","",$general_toppersystem) != "$general_toppersystem"){
										$check_general="";

                                        $class_link_co2application="display_none_ts";
                                        $class_nolink_co2application="colorgreytext_toppersystem";

										$scrivi_save_status_general="<a rel=\"nofollow\" href=\"javascript:save_status_co2application();\">$txtts5</a>";
										$scrivi_goto_exceptions_co2application="| <small><span id=\"look_link_toppersystem_goto_exceptions_co2application\" class=\"$class_link_co2application\"><a rel=\"nofollow\" href=\"javascript:goto_exceptions_co2application();\">$txtts6</a></span><span id=\"nolook_link_toppersystem_goto_exceptions_co2application\" class=\"$class_nolink_co2application\" title=\"$txtts54\">$txtts6</span></small>";
									}else{
										$check_general="";
										$scrivi_save_status_general="";
										$scrivi_goto_exceptions_co2application="";
										$mostra_line_preleva4="0";
									}
								}
							}else{
								$scrivi_message3="<div class=\"msg_error_toppersystem\">$txtts18</div>";
								$check_general="";
								$scrivi_save_status_general="";
								$scrivi_goto_exceptions_co2application="";
								$mostra_line_preleva4="0";
							}
							
							if(trim($general_toppersystem) != ""){
								if((str_replace("\$par_activateautoupdatets_toppersystem=","",$general_toppersystem) != "$general_toppersystem")&&(str_replace("\$par_activateautoupdatets_toppersystem=\"1\"","",$general_toppersystem) != "$general_toppersystem")){
									$check_general2=" checked";

                                    $class_link_activateautoupdatets="";
                                    $class_nolink_activateautoupdatets="colorgreytext_toppersystem display_none_ts";

									$scrivi_save_status_general2="<a rel=\"nofollow\" href=\"javascript:save_status_autoupdate();\">$txtts5</a>";
								}else{									
									if(str_replace("\$par_activateautoupdatets_toppersystem=","",$general_toppersystem) != "$general_toppersystem"){
										$check_general2="";

                                        $class_link_activateautoupdatets="display_none_ts";
                                        $class_nolink_activateautoupdatets="colorgreytext_toppersystem";

										$scrivi_save_status_general2="<a rel=\"nofollow\" href=\"javascript:save_status_autoupdate();\">$txtts5</a>";
									}else{
										$check_general2="";
										$scrivi_save_status_general2="";
										$mostra_line_preleva5="0";
									}
								}

                                if($scrivi_save_status_general2 != ""){
								    if((str_replace("\$par_get_timesautoupdate_spider_toppersystem=","",$general_toppersystem) != "$general_toppersystem")){
									    $add_management_to_autoupdate_ts="| <small><span id=\"look_link_toppersystem_goto_exceptions_activateautoupdatets\" class=\"$class_link_activateautoupdatets\"><a rel=\"nofollow\" href=\"javascript:goto_exceptions_autoupdatetimes();\">$txtts6</a></span><span id=\"nolook_link_toppersystem_goto_exceptions_activateautoupdatets\" class=\"$class_nolink_activateautoupdatets\" title=\"$txtts54\">$txtts6</span></small>";
								    }else{									
                                        $add_management_to_autoupdate_ts="";
								    }
                                }else{									
                                    $add_management_to_autoupdate_ts="";
								}
							}else{
								$scrivi_message4="<div class=\"msg_error_toppersystem\">$txtts21</div>";
								$check_general2="";
								$scrivi_save_status_general2="";
								$mostra_line_preleva5="0";
                                $add_management_to_autoupdate_ts="";
							}

							if(trim($general_toppersystem) != ""){
								if((str_replace("\$par_lazyloadingts_toppersystem=","",$general_toppersystem) != "$general_toppersystem")&&(str_replace("\$par_lazyloadingts_toppersystem=\"1\"","",$general_toppersystem) != "$general_toppersystem")){
									$check_general4=" checked";

                                    $class_link_lazyloadingts="";
                                    $class_nolink_lazyloadingts="colorgreytext_toppersystem display_none_ts";
									$scrivi_save_status_general4="<a rel=\"nofollow\" href=\"javascript:save_status_lazyloadingts();\">$txtts5</a>";
									$scrivi_goto_exceptions_lazyloadingts="| <small><span id=\"look_link_toppersystem_goto_exceptions_lazyloadingts\" class=\"$class_link_lazyloadingts\"><a rel=\"nofollow\" href=\"javascript:goto_exceptions_lazyloadingts();\">$txtts6</a></span><span id=\"nolook_link_toppersystem_goto_exceptions_lazyloadingts\" class=\"$class_nolink_lazyloadingts\" title=\"$txtts54\">$txtts6</span></small>";
								}else{									
									if(str_replace("\$par_lazyloadingts_toppersystem=","",$general_toppersystem) != "$general_toppersystem"){
                                        $check_general4="";

                                        $class_link_lazyloadingts="display_none_ts";
                                        $class_nolink_lazyloadingts="colorgreytext_toppersystem";										
										$scrivi_save_status_general4="<a rel=\"nofollow\" href=\"javascript:save_status_lazyloadingts();\">$txtts5</a>";
										$scrivi_goto_exceptions_lazyloadingts="| <small><span id=\"look_link_toppersystem_goto_exceptions_lazyloadingts\" class=\"$class_link_lazyloadingts\"><a rel=\"nofollow\" href=\"javascript:goto_exceptions_lazyloadingts();\">$txtts6</a></span><span id=\"nolook_link_toppersystem_goto_exceptions_lazyloadingts\" class=\"$class_nolink_lazyloadingts\" title=\"$txtts54\">$txtts6</span></small>";
									}else{
										$check_general4="";
										$scrivi_save_status_general4="";
										$scrivi_goto_exceptions_lazyloadingts="";
										$mostra_line_preleva6="0";
									}
								}
							}else{
								$scrivi_message5="<div class=\"msg_error_toppersystem\">$txtts39</div>";
								$check_general4="";
								$scrivi_save_status_general4="";
								$scrivi_goto_exceptions_lazyloadingts="";
								$mostra_line_preleva6="0";
							}							
							unset($general_toppersystem);
						}else{
							$scrivi_message3="<div class=\"msg_error_toppersystem\">$txtts19</div>";
							$check_general="";
							$scrivi_save_status_general="";
							$mostra_line_preleva4="0";
							
							$scrivi_message4="<div class=\"msg_error_toppersystem\">$txtts22</div>";
							$check_general2="";
							$scrivi_save_status_general2="";
							$mostra_line_preleva5="0";
							
							$scrivi_message5="<div class=\"msg_error_toppersystem\">$txtts39</div>";
							$check_general4="";
							$scrivi_save_status_general4="";
							$scrivi_goto_exceptions_lazyloadingts="";
							$mostra_line_preleva6="0";
						}
						unset($fileGeneral_ts);

						if($mostra_line_preleva4 == "1"){
							$line_preleva4="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a4\" onclick=\"help_services_toppersystem('4')\"><span id=\"box_services_b4\">&oplus;</span> <span id=\"guideboxts24\" class=\"\" tabindex=\"0\">$txtts17</span></span> $scrivi_goto_exceptions_co2application<div id=\"box_services_c4\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('4')\"><small>$txtts32<br><i>$txtts33</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><div id=\"block_save_co2application_toppersystem\" class=\"\"><input id=\"co2application_service_save\" name=\"co2application_service_save\" type=\"checkbox\" $check_general> $scrivi_save_status_general</div><div id=\"block_save_loading_co2application_toppersystem\" class=\"display_none_ts\">$loading_block</div></center></td></tr>";
						}else{
							$line_preleva4="";
						}
						
						if($mostra_line_preleva5 == "1"){
							$line_preleva5="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a5\" onclick=\"help_services_toppersystem('5')\"><span id=\"box_services_b5\">&oplus;</span> <span id=\"guideboxts27\" class=\"\" tabindex=\"0\">$txtts20</span></span> $add_management_to_autoupdate_ts<div id=\"box_services_c5\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('5')\"><small>$txtts34<br>$txtts35<br><i>$txtts36</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><div id=\"block_save_autoupdate_toppersystem\" class=\"\"><input id=\"autoupdate_service_save\" name=\"autoupdate_service_save\" type=\"checkbox\" $check_general2> $scrivi_save_status_general2</div><div id=\"block_save_loading_autoupdate_toppersystem\" class=\"display_none_ts\">$loading_block</div></center></td></tr>";
						}else{
							$line_preleva5="";
						}
					
						if($mostra_line_preleva6 == "1"){
							$line_preleva6="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a6\" onclick=\"help_services_toppersystem('6')\"><span id=\"box_services_b6\">&oplus;</span> <span id=\"guideboxts22\" class=\"\" tabindex=\"0\">$txtts38</span></span> $scrivi_goto_exceptions_lazyloadingts<div id=\"box_services_c6\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('6')\"><small>$txtts40<br><i>$txtts25</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><div id=\"block_save_smartlazyloadts_toppersystem\" class=\"\"><input id=\"smartlazyloadts_service_save\" name=\"smartlazyloadts_service_save\" type=\"checkbox\" $check_general4> $scrivi_save_status_general4</div><div id=\"block_save_loading_smartlazyloadts_toppersystem\" class=\"display_none_ts\">$loading_block</div></center></td></tr>";
						}else{
							$line_preleva6="";
						}

					    $line_preleva7="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a7\" onclick=\"help_services_toppersystem('7')\"><span id=\"box_services_b7\">&oplus;</span> <span id=\"guideboxts25\" class=\"\" tabindex=\"0\">$txtts41</span></span> | <small><a rel=\"nofollow\" href=\"javascript:goto_exceptions_deferts();\"><span id=\"check_defer_management_toppersystem\">$txtts6</span></a></small><div id=\"box_services_c7\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('7')\"><small>$txtts42<br><i>$txtts43</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><a rel=\"nofollow\" href=\"javascript:goto_exceptions_deferts();\">$txtts6</a></center></td></tr>";
						
						$line_preleva8="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a8\" onclick=\"help_services_toppersystem('8')\"><span id=\"box_services_b8\">&oplus;</span> <span id=\"guideboxts26\" class=\"\" tabindex=\"0\">$txtts44</span></span> | <small><a rel=\"nofollow\" href=\"javascript:goto_exceptions_cssfilests();\"><span id=\"check_cssfiles_management_toppersystem\">$txtts6</span></a></small><div id=\"box_services_c8\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('8')\"><small>$txtts45<br><i>$txtts43</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><a rel=\"nofollow\" href=\"javascript:goto_exceptions_cssfilests();\">$txtts6</a></center></td></tr>";

                        $line_preleva9="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a9\" onclick=\"help_services_toppersystem('9')\"><span id=\"box_services_b9\">&oplus;</span> <span id=\"guideboxts28\" class=\"\" tabindex=\"0\">$txtts48</span></span></small><div id=\"box_services_c9\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('9')\"><small>$txtts49<br><i>$txtts50</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><a rel=\"nofollow\" href=\"javascript:goto_clean_cachets();\">$txtts6</a></center></td></tr>";

                        $line_preleva10="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a10\" onclick=\"help_services_toppersystem('10')\"><span id=\"box_services_b10\">&oplus;</span> <span id=\"guideboxts29\" class=\"\" tabindex=\"0\">$txtts51</span></span></small><div id=\"box_services_c10\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('10')\"><small>$txtts52<br><i>$txtts53</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><a rel=\"nofollow\" href=\"javascript:goto_block_stage_websitets();\">$txtts6</a></center></td></tr>";	

                        $line_preleva11="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a11\" onclick=\"help_services_toppersystem('11')\"><span id=\"box_services_b11\">&oplus;</span> <span id=\"guideboxts30\" class=\"\" tabindex=\"0\">$txtts55</span></span></small><div id=\"box_services_c11\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('11')\"><small>$txtts56<br><i>$txtts57</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><a rel=\"nofollow\" href=\"javascript:goto_import_export_csvts();\">$txtts6</a></center></td></tr>";

                        $line_preleva12="<tr><td class=\"eventstd_ts\"><span id=\"box_services_a12\" onclick=\"help_services_toppersystem('12')\"><span id=\"box_services_b12\">&oplus;</span> <span id=\"guideboxts31\" class=\"\" tabindex=\"0\">$txtts58</span></span></small><div id=\"box_services_c12\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('12')\"><small>$txtts59<br><i>$txtts60</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><a rel=\"nofollow\" href=\"javascript:goto_intelligence_artificial_ts();\">$txtts6</a></center></td></tr>";
					
						$line_preleva2="<table class=\"eventstables_ts margin0\"><tr><td class=\"eventstd_ts\"><strong>$txtts3</strong></td><td class=\"eventstd_ts\"><center><strong>$txtts4</strong></center></td></tr><tr><td class=\"eventstd_ts\"><span id=\"box_services_a1\" onclick=\"help_services_toppersystem('1')\"><span id=\"box_services_b1\">&oplus;</span> <span id=\"guideboxts20\" class=\"\" tabindex=\"0\">$txtts9</span></span> $scrivi_goto_exceptions_aspmts<div id=\"box_services_c1\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('1')\"><small>$txtts23<br>$txtts24<br><i>$txtts25</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><div id=\"block_save_aspmts_toppersystem\" class=\"\"><input id=\"aspmts_service_save\" name=\"aspmts_service_save\" type=\"checkbox\" $check_antispam> $scrivi_save_status_aspmts</div><div id=\"block_save_loading_aspmts_toppersystem\" class=\"display_none_ts\">$loading_block</div></center></td></tr><tr><td class=\"eventstd_ts\"><span id=\"box_services_a2\" onclick=\"help_services_toppersystem('2')\"><span id=\"box_services_b2\">&oplus;</span> <span id=\"guideboxts21\" class=\"\" tabindex=\"0\">$txtts10</span></span><div id=\"box_services_c2\" class=\"display_none_ts\" onclick=\"close_help_services_toppersystem('2')\"><small>$txtts26<br>$txtts27<br><i>$txtts28</i></small></div></td><td class=\"eventstd_ts wxdthb\"><center><div id=\"block_save_cache_toppersystem\" class=\"\"><input id=\"cache_service_save\" name=\"cache_service_save\" type=\"checkbox\" $check_cache> $scrivi_save_status_cache</div><div id=\"block_save_loading_cache_toppersystem\" class=\"display_none_ts\">$loading_block</div></center></td></tr>$line_preleva6$line_preleva3$line_preleva4$line_preleva7$line_preleva8$line_preleva5$line_preleva9$line_preleva10$line_preleva11$line_preleva12</table>";
                        $box_page="<div id=\"box_page_request_management_toppersystem\">$scrivi_message"."$scrivi_message2"."$scrivi_message3"."$scrivi_message4"."$scrivi_message5"."$line_preleva2<div class=\"pxdding12\"><small>$txtts37</small></div>";
                        
                        $contenuto_link_sito_send="$box_page";

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
@add_action('init', @TopperSystemExecuteFilemanagementts::runts(), 2);
}
}

}
}
}
?>