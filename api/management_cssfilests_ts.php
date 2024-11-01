<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemExecuteFilecssfilests {
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
			   $txtts3="Escludi le risorse CSS";
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
			   $txtts15="Es: https://mywebsite.com/css/file.css";
			   $txtts16="NB: Per aggiungere più valori i separatori consentiti sono: a capo, spazio, virgola";
			   $txtts17="Defer";
			   $txtts18="Le pagine web dovranno essere riottimizzate. Consigliamo di farlo subito dopo aver salvato!";
               $txtts19="Lista delle risorse CSS ottimizzate";
               $txtts20="Critical CSS inline";
               $txtts21="I vantaggi dei CSS critical inline sono principalmente legati al miglioramento delle prestazioni di un sito web.";
               $txtts22="Quando si utilizza il CSS critical inline, il codice CSS necessario per visualizzare i contenuti essenziali di una pagina web viene incorporato direttamente nel codice HTML. Questo significa che il browser non deve scaricare il file CSS separato, il che può migliorare notevolmente i tempi di caricamento della pagina.";
               $txtts23="Inline";
               $txtts24="Separa i fogli di stile dal corpo della pagina";
               $txtts25="I fogli di stile separati vengono caricati solo una volta, indipendentemente da quante volte sono utilizzati.";
               $txtts26="Questo può migliorare la velocità di caricamento delle pagine web, in particolare per i siti web con molti fogli di stile.";
               $txtts27="style separati";
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
			   $txtts15="مثال: https://mywebsite.com/css/file.css";
			   $txtts16="ملاحظة: لإضافة المزيد من القيم ، الفواصل المسموح بها هي: سطر جديد ، مسافة ، فاصلة";
			   $txtts17="Defer";
			   $txtts18="سوف تحتاج صفحات الويب إلى إعادة التحسين. نوصي بعمل هذا مباشرة بعد الحفظ!";
               $txtts19="قائمة موارد CSS المحسنة";
               $txtts20="Critical CSS inline";
               $txtts21="ترتبط فوائد CSS الحرجة المضمنة بشكل أساسي بتحسين أداء موقع الويب.";
               $txtts22="عند استخدام CSS المضمن المهم، يتم تضمين كود CSS المطلوب لعرض المحتوى الأساسي لصفحة الويب مباشرة في كود HTML. وهذا يعني أن المتصفح لا يحتاج إلى تنزيل ملف CSS منفصل، مما قد يؤدي إلى تحسين أوقات تحميل الصفحة بشكل كبير.";
               $txtts23="Inline";
               $txtts24="أوراق أنماط منفصلة عن نص الصفحة";
               $txtts25="يتم تحميل أوراق الأنماط المنفصلة مرة واحدة فقط، بغض النظر عن عدد مرات استخدامها.";
               $txtts26="يمكن أن يؤدي ذلك إلى تحسين سرعة تحميل صفحات الويب، خاصة لمواقع الويب التي تحتوي على العديد من أوراق الأنماط.";
               $txtts27="style مفصولة";
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
			   $txtts15="Beispiel: https://mywebsite.com/css/file.css";
			   $txtts16="Hinweis: Um weitere Werte hinzuzufügen, sind die zulässigen Trennzeichen: Zeilenumbruch, Leerzeichen, Komma";
			   $txtts17="Defer";
			   $txtts18="Die Webseiten müssen neu optimiert werden. Wir empfehlen, dies direkt nach dem Speichern zu tun! ";
               $txtts19="Liste optimierter CSS-Ressourcen";
               $txtts20="Critical CSS inline";
               $txtts21="Die Vorteile von kritischem Inline-CSS hängen hauptsächlich mit der Verbesserung der Leistung einer Website zusammen.";
               $txtts22="Bei der Verwendung von kritischem Inline-CSS wird der CSS-Code, der zum Anzeigen des wesentlichen Inhalts einer Webseite erforderlich ist, direkt in den HTML-Code eingebettet. Das bedeutet, dass der Browser die separate CSS-Datei nicht herunterladen muss, was die Seitenladezeiten deutlich verbessern kann.";
               $txtts23="Inline";
               $txtts24="Trennen Sie Stylesheets vom Hauptteil der Seite";
               $txtts25="Separate Stylesheets werden nur einmal geladen, unabhängig davon, wie oft sie verwendet werden.";
               $txtts26="Dies kann die Ladegeschwindigkeit von Webseiten verbessern, insbesondere bei Websites mit vielen Stylesheets.";
               $txtts27="style getrennt";
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
			   $txtts15="Ej: https://mywebsite.com/css/file.css";
			   $txtts16="NB: Para agregar más valores, los separadores permitidos son: nueva línea, espacio, coma";
			   $txtts17="Defer";
			   $txtts18="Las páginas web deberán volver a optimizarse. ¡Recomendamos hacer esto inmediatamente después de guardar! ";
               $txtts19="Lista de recursos CSS optimizados";
               $txtts20="Critical CSS inline";
               $txtts21="Los beneficios del CSS crítico en línea están relacionados principalmente con la mejora del rendimiento de un sitio web.";
               $txtts22="Cuando se utiliza CSS en línea crítico, el código CSS necesario para mostrar el contenido esencial de una página web se incrusta directamente en el código HTML. Esto significa que el navegador no tiene que descargar el archivo CSS por separado, lo que puede mejorar significativamente los tiempos de carga de la página.";
               $txtts23="Inline";
               $txtts24="Separe las hojas de estilo del cuerpo de la página.";
               $txtts25="Las hojas de estilo independientes se cargan sólo una vez, independientemente de cuántas veces se utilicen.";
               $txtts26="Esto puede mejorar la velocidad de carga de las páginas web, especialmente para sitios web con muchas hojas de estilo.";
               $txtts27="style separados";
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
			   $txtts15="Ex : https://mywebsite.com/css/file.css";
			   $txtts16="NB : Pour ajouter plus de valeurs, les séparateurs autorisés sont : retour à la ligne, espace, virgule";
			   $txtts17="Defer";
			   $txtts18="Les pages Web devront être ré-optimisées. Nous vous recommandons de le faire immédiatement après l'enregistrement !";
               $txtts19="Liste des ressources CSS optimisées";
               $txtts20="Critical CSS inline";
               $txtts21="Les avantages du CSS critique en ligne sont principalement liés à l’amélioration des performances d’un site Web.";
               $txtts22="Lors de l'utilisation de CSS en ligne critiques, le code CSS nécessaire pour afficher le contenu essentiel d'une page Web est intégré directement dans le code HTML. Cela signifie que le navigateur n'a pas besoin de télécharger le fichier CSS séparé, ce qui peut améliorer considérablement les temps de chargement des pages.";
               $txtts23="Inline";
               $txtts24="Séparer les feuilles de style du corps de la page";
               $txtts25="Les feuilles de style distinctes ne sont chargées qu'une seule fois, quel que soit le nombre de fois où elles sont utilisées.";
               $txtts26="Cela peut améliorer la vitesse de chargement des pages Web, en particulier pour les sites Web comportant de nombreuses feuilles de style.";
               $txtts27="style séparé";
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
			   $txtts15="उदाहरण: https://mywebsite.com/css/file.css";
			   $txtts16="एनबी: अधिक मान जोड़ने के लिए, अनुमत विभाजक हैं: न्यूलाइन, स्पेस, कॉमा";
			   $txtts17="Defer";
			   $txtts18="वेब पेजों को फिर से अनुकूलित करने की आवश्यकता होगी। हम बचत करने के तुरंत बाद ऐसा करने की सलाह देते हैं!";
               $txtts19="अनुकूलित सीएसएस संसाधनों की सूची";
               $txtts20="Critical CSS inline";
               $txtts21="इनलाइन क्रिटिकल सीएसएस के लाभ मुख्य रूप से किसी वेबसाइट के प्रदर्शन को बेहतर बनाने से संबंधित हैं।";
               $txtts22="महत्वपूर्ण इनलाइन सीएसएस का उपयोग करते समय, वेब पेज की आवश्यक सामग्री को प्रदर्शित करने के लिए आवश्यक सीएसएस कोड सीधे HTML कोड में एम्बेड किया जाता है। इसका मतलब है कि ब्राउज़र को अलग सीएसएस फ़ाइल डाउनलोड करने की ज़रूरत नहीं है, जो पेज लोड समय में काफी सुधार कर सकता है।";
               $txtts23="Inline";
               $txtts24="स्टाइल शीट को पेज के मुख्य भाग से अलग करें";
               $txtts25="अलग-अलग स्टाइल शीट केवल एक बार लोड की जाती हैं, भले ही उनका कितनी बार उपयोग किया गया हो।";
               $txtts26="इससे वेब पेजों की लोडिंग गति में सुधार हो सकता है, खासकर कई स्टाइल शीट वाली वेबसाइटों के लिए।";
               $txtts27="style अलग हो गया";
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
			   $txtts15="例: https://mywebsite.com/css/file.css";
			   $txtts16="注意: さらに値を追加するために使用できる区切り記号は次のとおりです: 改行、スペース、カンマ";
			   $txtts17="Defer";
			   $txtts18="Web ページを再度最適化する必要があります。 保存したらすぐにこれを行うことをお勧めします。";
               $txtts19="最適化された CSS リソースのリスト";
               $txtts20="Critical CSS inline";
               $txtts21="インライン クリティカル CSS の利点は、主に Web サイトのパフォーマンスの向上に関係しています。";
               $txtts22="重要なインライン CSS を使用する場合、Web ページの重要なコンテンツを表示するために必要な CSS コードが HTML コードに直接埋め込まれます。 これは、ブラウザーが個別の CSS ファイルをダウンロードする必要がないことを意味し、ページの読み込み時間を大幅に短縮できます。";
               $txtts23="Inline";
               $txtts24="ページの本文からスタイルシートを分離する";
               $txtts25="個別のスタイル シートは、使用回数に関係なく、1 回だけロードされます。";
               $txtts26="これにより、特に多くのスタイル シートを含む Web サイトの場合、Web ページの読み込み速度が向上します。";
               $txtts27="style 分離されました";
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
			   $txtts15="Np.: https://mywebsite.com/css/file.css";
			   $txtts16="NB: Aby dodać więcej wartości, dozwolone separatory to: znak nowej linii, spacja, przecinek";
			   $txtts17="Defer";
			   $txtts18="Strony internetowe będą musiały zostać ponownie zoptymalizowane. Zalecamy zrobienie tego natychmiast po zapisaniu!";
               $txtts19="Lista zoptymalizowanych zasobów CSS"; 
               $txtts20="Critical CSS inline";
               $txtts21="Korzyści z wbudowanego krytycznego CSS są związane głównie z poprawą wydajności strony internetowej.";
               $txtts22="Podczas korzystania z krytycznego wbudowanego CSS, kod CSS potrzebny do wyświetlenia istotnej zawartości strony internetowej jest osadzany bezpośrednio w kodzie HTML. Oznacza to, że przeglądarka nie musi pobierać osobnego pliku CSS, co może znacznie skrócić czas ładowania strony.";
               $txtts23="Inline";
               $txtts24="Oddziel arkusze stylów od treści strony";
               $txtts25="Oddzielne arkusze stylów są ładowane tylko raz, niezależnie od tego, ile razy były używane.";
               $txtts26="Może to poprawić szybkość ładowania stron internetowych, szczególnie w przypadku witryn z wieloma arkuszami stylów.";
               $txtts27="style oddzielony";
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
			   $txtts15="Ex: https://mywebsite.com/css/file.css";
			   $txtts16="NB: Para adicionar mais valores, os separadores permitidos são: nova linha, espaço, vírgula";
			   $txtts17="Defer";
			   $txtts18="As páginas da web precisarão ser re-otimizadas. Recomendamos fazer isso imediatamente após salvar!";
               $txtts19="Lista de recursos CSS otimizados"; 
               $txtts20="Critical CSS inline";
               $txtts21="Os benefícios do CSS crítico inline estão principalmente relacionados à melhoria do desempenho de um site.";
               $txtts22="Ao usar CSS in-line crítico, o código CSS necessário para exibir o conteúdo essencial de uma página da web é incorporado diretamente no código HTML. Isso significa que o navegador não precisa baixar o arquivo CSS separado, o que pode melhorar significativamente o tempo de carregamento da página.";
               $txtts23="Inline";
               $txtts24="Separar folhas de estilo do corpo da página";
               $txtts25="Folhas de estilo separadas são carregadas apenas uma vez, independentemente de quantas vezes forem usadas.";
               $txtts26="Isso pode melhorar a velocidade de carregamento de páginas da web, especialmente para sites com muitas folhas de estilo.";
               $txtts27="style separado";
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
			   $txtts15="Пример: https://mywebsite.com/css/file.css";
			   $txtts16="NB: Чтобы добавить больше значений, разрешены следующие разделители: новая строка, пробел, запятая.";
			   $txtts17="Defer";
			   $txtts18="Веб-страницы должны быть заново оптимизированы. Мы рекомендуем сделать это сразу после сохранения!";
               $txtts19="Список оптимизированных ресурсов CSS";
               $txtts20="Critical CSS inline";
               $txtts21="Преимущества встроенного критического CSS в основном связаны с повышением производительности веб-сайта.";
               $txtts22="При использовании критического встроенного CSS код CSS, необходимый для отображения основного содержимого веб-страницы, встраивается непосредственно в код HTML. Это означает, что браузеру не нужно загружать отдельный файл CSS, что может значительно сократить время загрузки страницы.";
               $txtts23="Inline";
               $txtts24="Отделите таблицы стилей от тела страницы.";
               $txtts25="Отдельные таблицы стилей загружаются только один раз, независимо от того, сколько раз они используются.";
               $txtts26="Это может повысить скорость загрузки веб-страниц, особенно для веб-сайтов с множеством таблиц стилей.";
               $txtts27="style разделены";
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
			   $txtts15="例如：https://mywebsite.com/css/file.css";
			   $txtts16="注意：要添加更多值，允许的分隔符是：换行符、空格、逗号";
			   $txtts17="Defer";
			   $txtts18="网页将需要重新优化。 我们建议在保存后立即执行此操作！";
               $txtts19="优化的 CSS 资源列表";
               $txtts20="Critical CSS inline";
               $txtts21="内联关键 CSS 的好处主要与提高网站的性能有关。";
               $txtts22="使用关键内联 CSS 时，显示网页基本内容所需的 CSS 代码直接嵌入到 HTML 代码中。 这意味着浏览器不必下载单独的 CSS 文件，这可以显着缩短页面加载时间。";
               $txtts23="Inline";
               $txtts24="将样式表与页面正文分开";
               $txtts25="单独的样式表仅加载一次，无论使用多少次。";
               $txtts26="这可以提高网页的加载速度，特别是对于样式表较多的网站。";
               $txtts27="style 分离";
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
			   $txtts15="לדוגמה: https://mywebsite.com/css/file.css";
			   $txtts16="הערה: כדי להוסיף ערכים נוספים, המפרידים המותרים הם: שורה חדשה, רווח, פסיק";
			   $txtts17="Defer";
			   $txtts18="יהיה צורך לבצע אופטימיזציה מחדש של דפי האינטרנט. אנו ממליצים לעשות זאת מיד לאחר השמירה! "; 
               $txtts19="רשימת משאבי CSS מותאמים";
               $txtts20="Critical CSS inline";
               $txtts21="היתרונות של CSS קריטי מוטבע קשורים בעיקר לשיפור הביצועים של אתר אינטרנט.";
               $txtts22="בעת שימוש ב-CSS מוטבע קריטי, קוד ה-CSS הדרוש להצגת התוכן החיוני של דף אינטרנט מוטבע ישירות בקוד ה-HTML. המשמעות היא שהדפדפן לא צריך להוריד את קובץ ה-CSS הנפרד, מה שיכול לשפר משמעותית את זמני טעינת הדפים.";
               $txtts23="Inline";
               $txtts24="הפרד גיליונות סגנונות מגוף העמוד";
               $txtts25="גיליונות סגנונות נפרדים נטענים פעם אחת בלבד, ללא קשר למספר הפעמים שבהם נעשה בהם שימוש.";
               $txtts26="זה יכול לשפר את מהירות הטעינה של דפי אינטרנט, במיוחד עבור אתרים עם גיליונות סגנונות רבים.";
               $txtts27="נפרד style";
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
			   $txtts15="Ex: https://mywebsite.com/css/file.css";
			   $txtts16="NB: Ad plura bona addere licet separatores sunt: ​​newline, spatium, comma";
			   $txtts17="Defer";
			   $txtts18="Paginae interretiales necesse erit re-optimized. Hoc praecipimus statim post salutari!";
               $txtts19="Index optimized CSS resources";
               $txtts20="Critical CSS inline";
               $txtts21="Beneficia inlineorum criticorum CSS maxime pertinent ad meliorationem faciendam interventus.";
               $txtts22="Cum in linea critica CSS utens, codice CSS necessarius est ut documentum essentiale paginae interretialis in HTML codice infixa sit. Hoc significat navigatrum non habere limam separatam CSS, quae signanter emendare paginam oneris temporibus potest.";
               $txtts23="Inline";
               $txtts24="Separate a corpore paginae stilo schedae";
               $txtts25="Laminae stili separati semel tantum onerata sunt, pro quotiens adhibentur.";
               $txtts26="Haec celeritas paginarum interretialium ampliare potest, praesertim websites cum multis schedulis stili.";
               $txtts27="separatum style";
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
			   $txtts15="Ex: https://mywebsite.com/css/file.css";
			   $txtts16="NB: To add more values, the allowed separators are: newline, space, comma";
			   $txtts17="Defer";
			   $txtts18="The web pages will need to be re-optimized. We recommend doing this immediately after saving! ";
               $txtts19="List of optimized CSS resources";
               $txtts20="Critical CSS inline";
               $txtts21="The benefits of inline critical CSS are mainly related to improving the performance of a website.";
               $txtts22="When using critical inline CSS, the CSS code needed to display the essential content of a web page is embedded directly into the HTML code. This means that the browser does not have to download the separate CSS file, which can significantly improve page load times.";
               $txtts23="Inline";
               $txtts24="Separate style sheets from the body of the page";
               $txtts25="Separate style sheets are loaded only once, regardless of how many times they are used.";
               $txtts26="This can improve the loading speed of web pages, especially for websites with many style sheets.";
               $txtts27="style separated";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){
                        $pathfileexcludedefertoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/ExcludeCSSToppersystem.txt";
                        $pathfilelistcssoptimizetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyCSS.txt";
                        $pathfilenocsscriticalinlinetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/NoCSScriticalInline.txt";
                        $pathfilenoactivecssforstyletoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/NoActiveCSSforStyle.txt";

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

                        if(file_exists($pathfilelistcssoptimizetoppersystem)){
	                        if(is_readable("$pathfilelistcssoptimizetoppersystem")){
		                        if(filesize($pathfilelistcssoptimizetoppersystem) <= 8192){
			                        $contenuto_file_css_optimize_toppersystem=@file_get_contents($pathfilelistcssoptimizetoppersystem);
		                        }else{
			                        $handle2 = fopen($pathfilelistcssoptimizetoppersystem, "r");
			                        if (FALSE === $handle2) {
				                        $contenuto_file_css_optimize_toppersystem="";
			                        }else{
				                        $contenuto_file_css_optimize_toppersystem = '';
				                        while (!feof($handle2)) {
					                         $contenuto_file_css_optimize_toppersystem .= fread($handle2, 8192);
				                        }
				                        fclose($handle2);
			                        }
			                        unset($handle2);
		                        }
	                        }else{
		                        $contenuto_file_css_optimize_toppersystem="";
	                        }
                        }else{
	                        $contenuto_file_css_optimize_toppersystem="";
                        }
                        $public_list_css_toppersystem="";
                        if(trim($contenuto_file_css_optimize_toppersystem) != ""){
                            $array_contenuto_file_css_optimize_toppersystem=explode("\n",$contenuto_file_css_optimize_toppersystem);
                            for($i=0;$i<=count($array_contenuto_file_css_optimize_toppersystem);$i++){
						        if((isset($array_contenuto_file_css_optimize_toppersystem[$i]))&&(trim($array_contenuto_file_css_optimize_toppersystem[$i]) != "")){
                                    $array_dato=explode("||||",trim($array_contenuto_file_css_optimize_toppersystem[$i]));
                                    if(isset($array_dato["1"])){
                                        if(trim($array_dato["1"]) != ""){
                                            if(trim($array_dato["0"]) != ""){
                                                if(str_replace("toppersystem","",$array_dato["0"]) == $array_dato["0"]){
                                                    $public_list_css_toppersystem.=trim($array_dato["0"])."<br>";
                                                }
                                            }              
                                        }
                                    }
                                    $array_dato=array();
                                    $array_contenuto_file_css_optimize_toppersystem[$i]="";
                                }
                            }
                            $array_contenuto_file_css_optimize_toppersystem=array();
                            unset($contenuto_file_css_optimize_toppersystem);
                        }
                        if($public_list_css_toppersystem != ""){
                            $onpage_public_list_css_toppersystem="<br><strong>$txtts19</strong><br><div style=\"padding:2px; border: solid 1px #999999; background-color: #707070; color: #f0f0f0; width: 100%; height: 100px; overflow-y: auto;\"><small>$public_list_css_toppersystem</small></div><br>";
                        }else{
                            $onpage_public_list_css_toppersystem="";
                        }

                        if(file_exists($pathfilenocsscriticalinlinetoppersystem)){                                                            
                            $check_css_critical_inline="";
                        }else{                                                  
                            $check_css_critical_inline=" checked";
                        }

                        if(file_exists($pathfilenoactivecssforstyletoppersystem)){                                                            
                            $check_noactive_css_for_style="";
                        }else{                                                  
                            $check_noactive_css_for_style=" checked";
                        }

                        $add_position="<tr style=\"background-color:#f0f0f0;\"><td class=\"eventstd_ts\"><strong>$txtts24</strong><br><small>$txtts25<br>$txtts26</small><br></td><td class=\"eventstd_ts\"><div style=\"white-space: nowrap;\"><input id=\"sel_cssforstyle_toppersystem_send\" name=\"sel_cssforstyle_toppersystem_send\" type=\"checkbox\" $check_noactive_css_for_style> $txtts27</div></td></tr>";

                        $add_position.="<tr style=\"background-color:#2271b1;\"><td class=\"eventstd_ts\" style=\"color:#f0f0f0;\"><strong>$txtts20</strong><br><small>$txtts21<br>$txtts22</small><br></td><td class=\"eventstd_ts\" style=\"color:#f0f0f0;\"><div style=\"white-space: nowrap;\"><input id=\"sel_csscriticalinline_toppersystem_send\" name=\"sel_csscriticalinline_toppersystem_send\" type=\"checkbox\" $check_css_critical_inline> $txtts23</div></td></tr>";

						$add_position.="<tr style=\"background-color:#f0f0f0;\"><td class=\"eventstd_ts\"><strong>$txtts3</strong><textareatoppersystem id=\"exclusionlink_defer_toppersystem\" style=\"width:100%;height:100px;\">$contenuto_file_defer_exclude_toppersystem</textareatoppersystem><br><small><i>$txtts15<br>$txtts16</i></small><br>$onpage_public_list_css_toppersystem</td><td class=\"eventstd_ts\">&nbsp;</td></tr>";
						
                        $add_save="<tr><td class=\"eventstd_ts\"><small>$txtts6<br>$txtts18</small></td><td class=\"eventstd_ts\" style=\"width:20%;\"><div id=\"block_save_details_cssfilests_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_events_cssfilests_toppersystem();\">$txtts7</a>&nbsp;&nbsp;<a rel=\"nofollow\" href=\"javascript:close_events_cssfilests_toppersystem();\">$txtts8</a></div><div id=\"block_save_details_loading_cssfilests_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></td></tr>";
							
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
@add_action('init', @TopperSystemExecuteFilecssfilests::runts(), 2);
}
}

}
}
}
?>