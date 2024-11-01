<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemExecuteFiledeferts {
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
			   $txtts3="Preload model";
			   $txtts4="Soluzione compatibile con tutti i template e plugin.";
			   $txtts5="Le chiamate verso i file javascript sono ottimizzate applicando la tecnica di preload.";
			   $txtts6="Applica le modifiche apportate";
			   $txtts7="Salva";
			   $txtts8="Annulla";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Soluzione indicata a utenti esperti.";
			   $txtts12="Le chiamate verso i file javascript sono ottimizzate applicando la tecnica di defer.";
			   $txtts14="Aggiungi eccezioni";
			   $txtts15="Es: https://mywebsite.com/js/file.js";
			   $txtts16="NB: Per aggiungere più valori i separatori consentiti sono: a capo, spazio, virgola";
			   $txtts17="Defer";
			   $txtts18="Le pagine web dovranno essere riottimizzate. Consigliamo di farlo subito dopo aver salvato!";
               $txtts19="Automatic model";
               $txtts20="I tag corrispondenti restano invariati."; //
               $txtts21="Automatic";
               $txtts22="Le risorse javascript presenti nelle pagine sono minimizzate automaticamente."; //
               $txtts23="Ritarda il caricamento";
               $txtts24="L'esecuzione delle risorse javascript è rimandata alla prima interazione dell'utente.";
               $txtts25="Le performance di caricamento delle pagine aumentano notevolmente.";
               $txtts26="Questa funzione è combinabile con il modello preferito.";
               $txtts27="Alle url indicate non non sarà generato il tag di preload, non sarà assegnato l'attributo defer e non saranno caricate in modalità delay.";
               $txtts28="Delay";
               $txtts29="Lista delle risorse JavaScript ottimizzate";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="Preload model";
			   $txtts4="حل متوافق مع جميع القوالب والإضافات.";
			   $txtts5="يتم تحسين استدعاءات ملفات جافا سكريبت من خلال تطبيق تقنية التحميل المسبق.";
			   $txtts6="قم بتطبيق التغييرات التي تم إجراؤها";
			   $txtts7="يحفظ";
			   $txtts8="يلغي";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="حل مناسب للمستخدمين الخبراء.";
			   $txtts12="يتم تحسين استدعاءات ملفات جافا سكريبت من خلال تطبيق تقنية التأجيل.";
			   $txtts14="أضف استثناءات";
			   $txtts15="مثال: https://mywebsite.com/js/file.js";
			   $txtts16="ملاحظة: لإضافة المزيد من القيم ، الفواصل المسموح بها هي: سطر جديد ، مسافة ، فاصلة";
			   $txtts17="Defer";
			   $txtts18="سوف تحتاج صفحات الويب إلى إعادة التحسين. نوصي بعمل هذا مباشرة بعد الحفظ!";
               $txtts19="Automatic model";
               $txtts20="العلامات المقابلة تبقى دون تغيير.";
               $txtts21="Automatic";
               $txtts22="يتم تصغير موارد جافا سكريبت الموجودة في الصفحات تلقائيًا.";
               $txtts23="يؤخر التحميل";
               $txtts24="تم تأجيل تنفيذ موارد جافا سكريبت إلى أول تفاعل للمستخدم.";
               $txtts25="يزداد أداء تحميل الصفحة بشكل ملحوظ.";
               $txtts26="يمكن دمج هذه الوظيفة مع الطراز المفضل لديك.";
               $txtts27="لن يتم إنشاء علامة تحميل مسبق لعناوين URL المشار إليها، ولن يتم تعيين سمة التأجيل ولن يتم تحميلها في وضع التأخير.";
               $txtts28="Delay";
               $txtts29="قائمة موارد جافا سكريبت المحسنة";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Preload model";
			   $txtts4="Lösung kompatibel mit allen Templates und Plugins.";
			   $txtts5="Aufrufe von Javascript-Dateien werden durch Anwendung der Preload-Technik optimiert.";
			   $txtts6="Wenden Sie die vorgenommenen Änderungen an";
			   $txtts7="Speichern";
			   $txtts8="Absagen";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Lösung geeignet für erfahrene Benutzer.";
			   $txtts12="Aufrufe von Javascript-Dateien werden durch Anwendung der Defer-Technik optimiert.";
			   $txtts14="Ausnahmen hinzufügen";
			   $txtts15="Beispiel: https://mywebsite.com/js/file.js";
			   $txtts16="Hinweis: Um weitere Werte hinzuzufügen, sind die zulässigen Trennzeichen: Zeilenumbruch, Leerzeichen, Komma";
			   $txtts17="Defer";
			   $txtts18="Die Webseiten müssen neu optimiert werden. Wir empfehlen, dies direkt nach dem Speichern zu tun! ";
               $txtts19="Automatic model";
               $txtts20="Die entsprechenden Tags bleiben unverändert.";
               $txtts21="Automatic";
               $txtts22="Die auf den Seiten vorhandenen Javascript-Ressourcen werden automatisch minimiert.";
               $txtts23="Verzögert das Laden";
               $txtts24="Die Ausführung von Javascript-Ressourcen wird auf die erste Benutzerinteraktion verschoben.";
               $txtts25="Die Leistung beim Laden von Seiten erhöht sich deutlich.";
               $txtts26="Diese Funktion ist mit Ihrem Lieblingsmodell kombinierbar.";
               $txtts27="Für die angegebenen URLs wird kein Preload-Tag generiert, das Defer-Attribut wird nicht zugewiesen und sie werden nicht im Verzögerungsmodus geladen.";
               $txtts28="Delay";
               $txtts29="Liste optimierter JavaScript-Ressourcen";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Preload model";
			   $txtts4="Solución compatible con todas las plantillas y complementos.";
			   $txtts5="Las llamadas a archivos javascript se optimizan aplicando la técnica de precarga.";
			   $txtts6="Aplicar los cambios realizados";
			   $txtts7="Guardar";
			   $txtts8="Cancelar";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Solución apta para usuarios expertos.";
			   $txtts12="Las llamadas a archivos javascript se optimizan aplicando la técnica de aplazamiento.";
			   $txtts14="Agregar excepciones";
			   $txtts15="Ej: https://mywebsite.com/js/file.js";
			   $txtts16="NB: Para agregar más valores, los separadores permitidos son: nueva línea, espacio, coma";
			   $txtts17="Defer";
			   $txtts18="Las páginas web deberán volver a optimizarse. ¡Recomendamos hacer esto inmediatamente después de guardar! ";
               $txtts19="Automatic model";
               $txtts20="Las etiquetas correspondientes permanecen sin cambios.";
               $txtts21="Automatic";
               $txtts22="Los recursos de JavaScript presentes en las páginas se minimizan automáticamente.";
               $txtts23="Retrasos en la carga";
               $txtts24="La ejecución de recursos javascript se pospone a la primera interacción del usuario.";
               $txtts25="El rendimiento de carga de páginas aumenta significativamente.";
               $txtts26="Esta función se puede combinar con tu modelo favorito.";
               $txtts27="Las URL indicadas no tendrán etiqueta de precarga generada, no tendrán asignado el atributo defer y no se cargarán en modo retardado.";
               $txtts28="Delay";
               $txtts29="Lista de recursos de JavaScript optimizados";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
    		   $txtts3="Preload model";
			   $txtts4="Solution compatible avec tous les templates et plugins.";
			   $txtts5="Les appels aux fichiers javascript sont optimisés en appliquant la technique de préchargement.";
			   $txtts6="Appliquer les modifications apportées";
			   $txtts7="Sauver";
			   $txtts8="Annuler";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Solution adaptée aux utilisateurs experts.";
			   $txtts12="Les appels aux fichiers javascript sont optimisés en appliquant la technique de report.";
			   $txtts14="Ajouter des exceptions";
			   $txtts15="Ex : https://mywebsite.com/js/file.js";
			   $txtts16="NB : Pour ajouter plus de valeurs, les séparateurs autorisés sont : retour à la ligne, espace, virgule";
			   $txtts17="Defer";
			   $txtts18="Les pages Web devront être ré-optimisées. Nous vous recommandons de le faire immédiatement après l'enregistrement !";
               $txtts19="Automatic model";
               $txtts20="Les balises correspondantes restent inchangées.";
               $txtts21="Automatic";
               $txtts22="Les ressources javascript présentes dans les pages sont automatiquement minifiées.";
               $txtts23="Retards de chargement";
               $txtts24="L'exécution des ressources javascript est reportée à la première interaction utilisateur.";
               $txtts25="Les performances de chargement des pages augmentent considérablement.";
               $txtts26="Cette fonction peut être combinée avec votre modèle préféré.";
               $txtts27="Les URL indiquées n'auront pas de balise de préchargement générée, n'auront pas l'attribut defer attribué et ne seront pas chargées en mode différé.";
               $txtts28="Delay";
               $txtts29="Liste des ressources JavaScript optimisées";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="Preload model";
			   $txtts4="सभी टेम्पलेट्स और प्लगइन्स के साथ संगत समाधान।";
			   $txtts5="प्रीलोड तकनीक को लागू करके जावास्क्रिप्ट फाइलों पर कॉल को अनुकूलित किया जाता है।";
			   $txtts6="किए गए परिवर्तनों को लागू करें";
			   $txtts7="बचाना";
			   $txtts8="रद्द करना";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="विशेषज्ञ उपयोगकर्ताओं के लिए उपयुक्त समाधान।";
			   $txtts12="डिफर तकनीक को लागू करके जावास्क्रिप्ट फाइलों पर कॉल को अनुकूलित किया जाता है।";
			   $txtts14="अपवाद जोड़ें";
			   $txtts15="उदाहरण: https://mywebsite.com/js/file.js";
			   $txtts16="एनबी: अधिक मान जोड़ने के लिए, अनुमत विभाजक हैं: न्यूलाइन, स्पेस, कॉमा";
			   $txtts17="Defer";
			   $txtts18="वेब पेजों को फिर से अनुकूलित करने की आवश्यकता होगी। हम बचत करने के तुरंत बाद ऐसा करने की सलाह देते हैं!";
               $txtts19="Automatic model";
               $txtts20="संबंधित टैग अपरिवर्तित रहते हैं.";
               $txtts21="Automatic";
               $txtts22="पृष्ठों में मौजूद जावास्क्रिप्ट संसाधन स्वचालित रूप से छोटा हो जाते हैं।";
               $txtts23="लोडिंग में देरी हो रही है";
               $txtts24="जावास्क्रिप्ट संसाधनों का निष्पादन पहले उपयोगकर्ता इंटरैक्शन तक स्थगित कर दिया गया है।";
               $txtts25="पेज लोडिंग प्रदर्शन में उल्लेखनीय वृद्धि होती है।";
               $txtts26="इस फ़ंक्शन को आपके पसंदीदा मॉडल के साथ जोड़ा जा सकता है।";
               $txtts27="बताए गए यूआरएल में प्रीलोड टैग जेनरेट नहीं होगा, डिफ़र विशेषता निर्दिष्ट नहीं होगी और विलंब मोड में लोड नहीं किया जाएगा।";
               $txtts28="Delay";
               $txtts29="अनुकूलित जावास्क्रिप्ट संसाधनों की सूची";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="Preload model";
			   $txtts4="すべてのテンプレートとプラグインと互換性のあるソリューション。";
			   $txtts5="JavaScript ファイルへの呼び出しは、プリロード手法を適用することで最適化されます。";
			   $txtts6="行った変更を適用します";
			   $txtts7="保存する";
			   $txtts8="キャンセル";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="エキスパートユーザーに適したソリューション。";
			   $txtts12="javascript ファイルへの呼び出しは、defer 手法を適用することによって最適化されます。";
			   $txtts14="例外を追加";
			   $txtts15="例: https://mywebsite.com/js/file.js";
			   $txtts16="注意: さらに値を追加するために使用できる区切り記号は次のとおりです: 改行、スペース、カンマ";
			   $txtts17="Defer";
			   $txtts18="Web ページを再度最適化する必要があります。 保存したらすぐにこれを行うことをお勧めします。";
               $txtts19="Automatic model";
               $txtts20="対応するタグは変更されません。";
               $txtts21="Automatic";
               $txtts22="ページ内に存在する JavaScript リソースは自動的に縮小されます。";
               $txtts23="読み込みが遅れる";
               $txtts24="JavaScript リソースの実行は、最初のユーザー操作まで延期されます。";
               $txtts25="ページ読み込みパフォーマンスが大幅に向上します。";
               $txtts26="この機能はお好みのモデルと組み合わせることができます。";
               $txtts27="示された URL には、プリロード タグが生成されず、defer 属性が割り当てられず、遅延モードでロードされません。";
               $txtts28="Delay";
               $txtts29="最適化された JavaScript リソースのリスト";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Preload model";
			   $txtts4="Rozwiązanie kompatybilne ze wszystkimi szablonami i wtyczkami.";
			   $txtts5="Wywołania do plików JavaScript są optymalizowane przez zastosowanie techniki wstępnego ładowania.";
			   $txtts6="Zastosuj wprowadzone zmiany";
			   $txtts7="Ratować";
			   $txtts8="Anulować";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Rozwiązanie odpowiednie dla doświadczonych użytkowników.";
			   $txtts12="Wywołania do plików JavaScript są optymalizowane przez zastosowanie techniki odroczenia.";
			   $txtts14="Dodaj wyjątki";
			   $txtts15="Np.: https://mywebsite.com/js/file.js";
			   $txtts16="NB: Aby dodać więcej wartości, dozwolone separatory to: znak nowej linii, spacja, przecinek";
			   $txtts17="Defer";
			   $txtts18="Strony internetowe będą musiały zostać ponownie zoptymalizowane. Zalecamy zrobienie tego natychmiast po zapisaniu!";
               $txtts19="Automatic model";
               $txtts20="Odpowiednie znaczniki pozostają niezmienione.";
               $txtts21="Automatic";
               $txtts22="Zasoby JavaScript obecne na stronach są automatycznie minimalizowane.";
               $txtts23="Opóźnia ładowanie";
               $txtts24="Wykonanie zasobów javascript zostaje przesunięte na pierwszą interakcję użytkownika.";
               $txtts25="Wydajność ładowania strony znacznie wzrasta.";
               $txtts26="Funkcję tę można połączyć z ulubionym modelem.";
               $txtts27="Wskazane adresy URL nie będą miały wygenerowanego tagu wstępnego ładowania, nie będą miały przypisanego atrybutu odroczenia i nie będą ładowane w trybie opóźnienia.";
               $txtts28="Delay";
               $txtts29="Lista zoptymalizowanych zasobów JavaScript";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Preload model";
			   $txtts4="Solução compatível com todos os templates e plugins.";
			   $txtts5="As chamadas para arquivos javascript são otimizadas aplicando a técnica de pré-carregamento.";
			   $txtts6="Aplique as alterações feitas";
			   $txtts7="Salve";
			   $txtts8="Cancelar";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Solução adequada para usuários experientes.";
			   $txtts12="As chamadas para arquivos javascript são otimizadas aplicando a técnica de defer.";
			   $txtts14="Adicionar exceções";
			   $txtts15="Ex: https://mywebsite.com/js/file.js";
			   $txtts16="NB: Para adicionar mais valores, os separadores permitidos são: nova linha, espaço, vírgula";
			   $txtts17="Defer";
			   $txtts18="As páginas da web precisarão ser re-otimizadas. Recomendamos fazer isso imediatamente após salvar!";
               $txtts19="Automatic model";
               $txtts20="As tags correspondentes permanecem inalteradas.";
               $txtts21="Automatic";
               $txtts22="Os recursos javascript presentes nas páginas são automaticamente minificados.";
               $txtts23="Atrasa o carregamento";
               $txtts24="A execução dos recursos javascript é adiada para a primeira interação do usuário.";
               $txtts25="O desempenho de carregamento da página aumenta significativamente.";
               $txtts26="Esta função pode ser combinada com o seu modelo favorito.";
               $txtts27="As URLs indicadas não terão tag de pré-carregamento gerada, não terão o atributo defer atribuído e não serão carregadas em modo delay.";
               $txtts28="Delay";
               $txtts29="Lista de recursos JavaScript otimizados";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Preload model";
			   $txtts4="Решение совместимо со всеми шаблонами и плагинами.";
			   $txtts5="Вызовы файлов javascript оптимизируются за счет применения метода предварительной загрузки.";
			   $txtts6="Примените внесенные изменения";
			   $txtts7="Сохранять";
			   $txtts8="Отмена";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Решение подходит для опытных пользователей.";
			   $txtts12="Вызовы файлов javascript оптимизируются за счет применения техники отсрочки.";
			   $txtts14="Добавить исключения";
			   $txtts15="Пример: https://mywebsite.com/js/file.js";
			   $txtts16="NB: Чтобы добавить больше значений, разрешены следующие разделители: новая строка, пробел, запятая.";
			   $txtts17="Defer";
			   $txtts18="Веб-страницы должны быть заново оптимизированы. Мы рекомендуем сделать это сразу после сохранения!";
               $txtts19="Automatic model";
               $txtts20="Соответствующие теги остаются неизменными.";
               $txtts21="Automatic";
               $txtts22="Ресурсы JavaScript, присутствующие на страницах, автоматически минимизируются.";
               $txtts23="Задерживает загрузку";
               $txtts24="Выполнение ресурсов JavaScript откладывается до первого взаимодействия с пользователем.";
               $txtts25="Скорость загрузки страниц значительно увеличивается.";
               $txtts26="Эту функцию можно совместить с любимой моделью.";
               $txtts27="Для указанных URL-адресов не будет создан тег предварительной загрузки, не будет назначен атрибут defer и они не будут загружены в режиме задержки.";
               $txtts28="Delay";
               $txtts29="Список оптимизированных ресурсов JavaScript";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="Preload model";
			   $txtts4="与所有模板和插件兼容的解决方案。";
			   $txtts5="通过应用预加载技术优化对 javascript 文件的调用。";
			   $txtts6="Apply the changes made";
			   $txtts7="节省";
			   $txtts8="取消";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="适合专家用户的解决方案。";
			   $txtts12="通过应用延迟技术优化对 javascript 文件的调用。";
			   $txtts14="添加例外";
			   $txtts15="例如：https://mywebsite.com/js/file.js";
			   $txtts16="注意：要添加更多值，允许的分隔符是：换行符、空格、逗号";
			   $txtts17="Defer";
			   $txtts18="网页将需要重新优化。 我们建议在保存后立即执行此操作！";
               $txtts19="Automatic model";
               $txtts20="相应的标签保持不变。";
               $txtts21="Automatic";
               $txtts22="页面中存在的 javascript 资源会自动缩小。";
               $txtts23="延迟加载";
               $txtts24="javascript 资源的执行被推迟到第一次用户交互时。";
               $txtts25="页面加载性能显着提高。";
               $txtts26="此功能可以与您喜欢的型号结合使用。";
               $txtts27="指示的 URL 将不会生成预加载标记，不会分配 defer 属性，并且不会以延迟模式加载。";
               $txtts28="Delay";
               $txtts29="优化的 JavaScript 资源列表";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="Preload model";
			   $txtts4="פתרון תואם לכל התבניות והתוספים.";
			   $txtts5="קריאות לקבצי javascript עוברות אופטימיזציה על ידי יישום טכניקת טעינה מוקדמת.";
			   $txtts6="החל את השינויים שבוצעו";
			   $txtts7="להציל";
			   $txtts8="לְבַטֵל";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="פתרון מתאים למשתמשים מומחים.";
			   $txtts12="קריאות לקובצי javascript עוברות אופטימיזציה על ידי יישום טכניקת הדחה.";
			   $txtts14="הוסף חריגים";
			   $txtts15="לדוגמה: https://mywebsite.com/js/file.js";
			   $txtts16="הערה: כדי להוסיף ערכים נוספים, המפרידים המותרים הם: שורה חדשה, רווח, פסיק";
			   $txtts17="Defer";
			   $txtts18="יהיה צורך לבצע אופטימיזציה מחדש של דפי האינטרנט. אנו ממליצים לעשות זאת מיד לאחר השמירה! "; 
               $txtts19="Automatic model";
               $txtts20="התגים המתאימים נשארים ללא שינוי.";
               $txtts21="Automatic";
               $txtts22="משאבי ה-Javascript הקיימים בדפים ממוזערים באופן אוטומטי.";
               $txtts23="עיכוב בטעינה";
               $txtts24="ביצוע משאבי javascript נדחה לאינטראקציה הראשונה של המשתמש.";
               $txtts25="ביצועי טעינת הדפים עולים משמעותית.";
               $txtts26="ניתן לשלב פונקציה זו עם הדגם האהוב עליך.";
               $txtts27="לכתובות ה-URL המצוינות לא ייווצר תג טעינה מראש, לא תוקצה תכונת ה-defer ולא ייטענו במצב השהייה.";
               $txtts28="Delay";
               $txtts29="רשימה של משאבי JavaScript מותאמים";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Preload model";
			   $txtts4="Solutio cum omnibus exemplaribus et plugins compatibilis.";
			   $txtts5="Vocatus ad tabulas electronicas optimized est applicando technicam preload.";
			   $txtts6="Applicare mutationes factae";
			   $txtts7="Salvare";
			   $txtts8="Cancel";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Solutio aptum utentibus peritis.";
			   $txtts12="Vocatus ad files html sunt optimized artis applicando.";
			   $txtts14="Addere exceptiones";
			   $txtts15="Ex: https://mywebsite.com/js/file.js";
			   $txtts16="NB: Ad plura bona addere licet separatores sunt: ​​newline, spatium, comma";
			   $txtts17="Defer";
			   $txtts18="Paginae interretiales necesse erit re-optimized. Hoc praecipimus statim post salutari!";
               $txtts19="Automatic model";
               $txtts20="Congruentes tags non mutatur.";
               $txtts21="Automatic";
               $txtts22="Facultates Javascripte quae in paginis praesentem sunt automatice minuuntur.";
               $txtts23="Moras loading";
               $txtts24="Executio facultatum electronicarum differtur primo usuario commercio.";
               $txtts25="Pagina loading effectus signanter auget.";
               $txtts26="Hoc munus cum exemplari tuo dilectissimo coniungi potest.";
               $txtts27="Domicilia indicata preload tag generatum non habebunt, dilationem attributam assignatam non habebunt, nec modus in mora cumulabitur.";
               $txtts28="Delay";
               $txtts29="Index optimized opibus JavaScript";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Preload model";
			   $txtts4="Solution compatible with all templates and plugins.";
			   $txtts5="Calls to javascript files are optimized by applying the preload technique.";
			   $txtts6="Apply the changes made";
			   $txtts7="Save";
			   $txtts8="Cancel";
			   $txtts9="Preload";
			   $txtts10="Defer model";
			   $txtts11="Solution suitable for expert users.";
			   $txtts12="Calls to javascript files are optimized by applying the defer technique.";
			   $txtts14="Add exceptions";
			   $txtts15="Ex: https://mywebsite.com/js/file.js";
			   $txtts16="NB: To add more values, the allowed separators are: newline, space, comma";
			   $txtts17="Defer";
			   $txtts18="The web pages will need to be re-optimized. We recommend doing this immediately after saving! ";
               $txtts19="Automatic model";
               $txtts20="The corresponding tags remain unchanged.";
               $txtts21="Automatic";
               $txtts22="The javascript resources present in the pages are automatically minified.";
               $txtts23="Delays loading";
               $txtts24="The execution of javascript resources is postponed to the first user interaction.";
               $txtts25="Page loading performance increases significantly.";
               $txtts26="This function can be combined with your favorite model.";
               $txtts27="The URLs indicated will not have a preload tag generated, will not have the defer attribute assigned and will not be loaded in delay mode.";
               $txtts28="Delay";
               $txtts29="List of optimized JavaScript resources";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){
                        $pathfileexcludedefertoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExcludeDeferToppersystem.txt";
                        $pathfileactivedefertoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveDeferToppersystem.txt";
                        $pathfileactivenoneresourcetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveNoneResourceToppersystem.txt";
                        $pathfileactivedelayjavascripttoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ActiveDelayJavascriptToppersystem.txt";
                        $pathfilelistjavascriptoptimizetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyJS.txt";

                        $fileDefer_ts="$pathfileactivedefertoppersystem";
						if(file_exists($pathfileactivenoneresourcetoppersystem)){
                            $check_none=" checked=\"checked\"";
                            $check_hight="";
                            $check_low="";
						}else if(file_exists($fileDefer_ts)){
                            $check_none="";
                            $check_hight=" checked=\"checked\"";
                            $check_low="";
						}else{
                            $check_none="";
                            $check_hight="";
                            $check_low=" checked=\"checked\"";
						}
						unset($fileDefer_ts);

                        if(file_exists($pathfileactivedelayjavascripttoppersystem)){                                                            
                            $check_delay_javascript=" checked";
                        }else{                                                            
                            $check_delay_javascript="";
                        }

                        $pathfiledeferexclude="$pathfileexcludedefertoppersystem";
                        if(file_exists($pathfiledeferexclude)){
	                        if(is_readable("$pathfiledeferexclude")){
		                        if(filesize($pathfiledeferexclude) <= 8192){
			                        $contenuto_file_defer_exclude_toppersystem=@file_get_contents($pathfiledeferexclude);
		                        }else{
			                        $handle = fopen($pathfiledeferexclude, "r");
			                        if (FALSE === $handle) {
				                        $contenuto_file_defer_exclude_toppersystem="";
			                        }else{
				                        $contenuto_file_defer_exclude_toppersystem = '';
				                        while (!feof($handle)) {
					                         $contenuto_file_defer_exclude_toppersystem .= fread($handle, 8192);
				                        }
				                        fclose($handle);
			                        }
			                        unset($handle);
		                        }
	                        }else{
		                        $contenuto_file_defer_exclude_toppersystem="";
	                        }
                        }else{
	                        $contenuto_file_defer_exclude_toppersystem="";
                        }
                        unset($pathfiledeferexclude);

                        if(file_exists($pathfilelistjavascriptoptimizetoppersystem)){
	                        if(is_readable("$pathfilelistjavascriptoptimizetoppersystem")){
		                        if(filesize($pathfilelistjavascriptoptimizetoppersystem) <= 8192){
			                        $contenuto_file_javascript_optimize_toppersystem=@file_get_contents($pathfilelistjavascriptoptimizetoppersystem);
		                        }else{
			                        $handle2 = fopen($pathfilelistjavascriptoptimizetoppersystem, "r");
			                        if (FALSE === $handle2) {
				                        $contenuto_file_javascript_optimize_toppersystem="";
			                        }else{
				                        $contenuto_file_javascript_optimize_toppersystem = '';
				                        while (!feof($handle2)) {
					                         $contenuto_file_javascript_optimize_toppersystem .= fread($handle2, 8192);
				                        }
				                        fclose($handle2);
			                        }
			                        unset($handle2);
		                        }
	                        }else{
		                        $contenuto_file_javascript_optimize_toppersystem="";
	                        }
                        }else{
	                        $contenuto_file_javascript_optimize_toppersystem="";
                        }
                        $public_list_javascript_toppersystem="";
                        if(trim($contenuto_file_javascript_optimize_toppersystem) != ""){
                            $array_contenuto_file_javascript_optimize_toppersystem=explode("\n",$contenuto_file_javascript_optimize_toppersystem);
                            for($i=0;$i<=count($array_contenuto_file_javascript_optimize_toppersystem);$i++){
						        if((isset($array_contenuto_file_javascript_optimize_toppersystem[$i]))&&(trim($array_contenuto_file_javascript_optimize_toppersystem[$i]) != "")){
                                    $array_dato=explode("||||",trim($array_contenuto_file_javascript_optimize_toppersystem[$i]));
                                    if(isset($array_dato["1"])){
                                        if(trim($array_dato["1"]) != ""){
                                            if(trim($array_dato["0"]) != ""){
                                                if(str_replace("toppersystem","",$array_dato["0"]) == $array_dato["0"]){
                                                    $public_list_javascript_toppersystem.=trim($array_dato["0"])."<br>";
                                                }
                                            }              
                                        }
                                    }
                                    $array_dato=array();
                                    $array_contenuto_file_javascript_optimize_toppersystem[$i]="";
                                }
                            }
                            $array_contenuto_file_javascript_optimize_toppersystem=array();
                            unset($contenuto_file_javascript_optimize_toppersystem);
                        }
                        if($public_list_javascript_toppersystem != ""){
                            $onpage_public_list_javascript_toppersystem="<br><strong>$txtts29</strong><br><div style=\"padding:2px; border: solid 1px #999999; background-color: #707070; color: #f0f0f0; width: 100%; height: 100px; overflow-y: auto;\"><small>$public_list_javascript_toppersystem</small></div><br>";
                        }else{
                            $onpage_public_list_javascript_toppersystem="";
                        }

                        $add_position="<tr style=\"background-color:#f0f0f0;\"><td class=\"eventstd_ts\"><strong>$txtts19</strong><br><small><i>$txtts4</i><br>$txtts22<br>$txtts20</small><br></td><td class=\"eventstd_ts\"><div style=\"white-space: nowrap;\"><input type=\"radio\" name=\"pos_sel_deferts_toppersystem_send\" value=\"0\"$check_none> $txtts21</div></td></tr><tr style=\"background-color:#f0f0f0;\"><td class=\"eventstd_ts\"><strong>$txtts3</strong><br><small><i>$txtts4</i><br>$txtts5<br>$txtts22</small><br></td><td class=\"eventstd_ts\"><div style=\"white-space: nowrap;\"><input type=\"radio\" name=\"pos_sel_deferts_toppersystem_send\" value=\"1\"$check_low> $txtts9</div></td></tr><tr style=\"background-color:#f0f0f0;\"><td class=\"eventstd_ts\"><strong>$txtts10</strong><br><small>$txtts12<br>$txtts22</small><br></td><td class=\"eventstd_ts\"><div style=\"white-space: nowrap;\"><input type=\"radio\" name=\"pos_sel_deferts_toppersystem_send\" value=\"2\"$check_hight> $txtts17</div></td></tr><tr style=\"background-color:#2271b1;\"><td class=\"eventstd_ts\" style=\"color:#f0f0f0;\"><strong>$txtts23</strong><br><small>$txtts24<br>$txtts25<br>$txtts26</small><br></td><td class=\"eventstd_ts\" style=\"color:#f0f0f0;\"><div style=\"white-space: nowrap;\"><input id=\"sel_delayjavascript_toppersystem_send\" name=\"sel_delayjavascript_toppersystem_send\" type=\"checkbox\" $check_delay_javascript> $txtts28</div></td></tr><tr style=\"background-color:#f0f0f0;\"><td class=\"eventstd_ts\"><strong>$txtts14</strong><br><small>$txtts27</small><br><textareatoppersystem id=\"exclusionlink_defer_toppersystem\" style=\"width:100%;height:100px;\">$contenuto_file_defer_exclude_toppersystem</textareatoppersystem><br><small><i>$txtts15<br>$txtts16</i></small><br>$onpage_public_list_javascript_toppersystem</td><td class=\"eventstd_ts\">&nbsp;</td></tr>";

                        $add_save="<tr><td class=\"eventstd_ts\"><small>$txtts6<br>$txtts18</small></td><td class=\"eventstd_ts\" style=\"width:20%;\"><div id=\"block_save_details_deferts_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_events_deferts_toppersystem();\">$txtts7</a>&nbsp;&nbsp;<a rel=\"nofollow\" href=\"javascript:close_events_deferts_toppersystem();\">$txtts8</a></div><div id=\"block_save_details_loading_deferts_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></td></tr>";
							
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
@add_action('init', @TopperSystemExecuteFiledeferts::runts(), 2);
}
}

}
}
}
?>