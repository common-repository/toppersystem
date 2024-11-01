<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileco2app {
    public static function result_domain_name($url){
        $url=str_replace("://","[TsostituisciS]",$url);
        $url=explode("/",$url)["0"];
        $url=explode("?",$url)["0"];
        $url=explode("#",$url)["0"];
        $url=str_replace("[TsostituisciS]","://",$url);    
        return $url;
    }

    public static function result_page_name_no_domain($url){
        $url=str_replace(TopperSystemSetFileco2app::result_domain_name($url),"",$url);
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
                            TopperSystemSetFileco2app::leggiDir ($list, $fullname);
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

            TopperSystemSetFileco2app::leggiDir ($lista_path, $directory);

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

class TopperSystemExecuteFileco2app {
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
			   $txtts3="Visualizzazione in pagina &#127811;";
			   $txtts4="Sinistra";
			   $txtts5="Destra";
			   $txtts6="Applica le modifiche apportate";
			   $txtts7="Salva";
			   $txtts8="Annulla";
			   $txtts9="Per modificare il layout di CO2 Application puoi seguire le seguenti istruzioni:";
			   $txtts10="1. Apri il file toppersystem/css/loader.css";
			   $txtts11="2. .co2ts e .co2tsresult sono i css principali che puoi modificare a piacimento.";
			   $txtts12="3. Salva le modifiche e ricarica una pagina ottimizzata per visualizzare gli effetti delle modifiche apportate. Consigliamo di cancellare la cache del browser prima di ricaricare la pagina scelta.";
               $txtts15="Alle pagine ottimizzate aggiungiamo il simbolo di una fogliolina verde che attraverso un semplice click restituisce al navigatore il risultato del calcolo in tempo reale perché:";
	           $txtts16="sono misurate le dimensioni della pagina e delle risorse che la costituiscono";
	           $txtts17="successivamente sono confrontati i risultati con quelli precedenti ai processi di ottimizzazione eseguiti";
	           $txtts18="per infine, restituire la differenza espressa in percentuale in modo preciso e in tempo reale";
	           $txtts19="I risultati variano a seconda del browser e dispositivo utilizzato.";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="عرض الصفحة";
			   $txtts4="اليسار";
			   $txtts5="الصحيح";
			   $txtts6="قم بتطبيق التغييرات التي تم إجراؤها";
			   $txtts7="يحفظ";
			   $txtts8="يلغي";
			   $txtts9="لتغيير تصميم تطبيق CO2 ، يمكنك اتباع التعليمات التالية:";
			   $txtts10="1. افتح ملف toppersystem/css/loader.css";
			   $txtts11="2.co2ts و .co2tsresult هما CSSs الرئيسيان اللذان يمكنك تعديلهما حسب الرغبة.";
			   $txtts12="3. احفظ التغييرات وأعد تحميل صفحة محسّنة لمشاهدة تأثيرات التغييرات. نوصي بمسح ذاكرة التخزين المؤقت للمتصفح قبل إعادة تحميل الصفحة المختارة.";
               $txtts15="نضيف رمز الورقة الخضراء الصغيرة إلى الصفحات المحسنة والتي، بنقرة بسيطة، تُرجع نتيجة الحساب إلى المستكشف في الوقت الفعلي للأسباب التالية:";
	           $txtts16="يتم قياس أبعاد الصفحة والموارد التي تتكون منها";
	           $txtts17="وبعد ذلك تتم مقارنة النتائج مع تلك التي سبقت عمليات التحسين التي تم إجراؤها";
	           $txtts18="وأخيرًا، لإرجاع الفرق المعبر عنه كنسبة مئوية بدقة وفي الوقت الفعلي";
	           $txtts19="تختلف النتائج حسب المتصفح والجهاز المستخدم.";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Seitenanzeige &#127811;";
			   $txtts4="Links";
			   $txtts5="Rechts";
			   $txtts6="Übernehmen Sie die vorgenommenen Änderungen";
			   $txtts7="Speichern";
			   $txtts8="Abbrechen";
			   $txtts9="Um das Layout der CO2-Anwendung zu ändern, können Sie die folgenden Anweisungen befolgen:";
			   $txtts10="1. Öffnen Sie die Datei toppersystem/css/loader.css";
			   $txtts11="2. .co2ts und .co2tsresult sind die wichtigsten CSSs, die Sie nach Belieben bearbeiten können.";
			   $txtts12="3. Speichern Sie Ihre Änderungen und laden Sie eine optimierte Seite neu, um die Auswirkungen Ihrer Änderungen zu sehen. Wir empfehlen, den Cache Ihres Browsers zu leeren, bevor Sie die ausgewählte Seite neu laden.";
               $txtts15="Wir fügen den optimierten Seiten das Symbol eines kleinen grünen Blattes hinzu, das mit einem einfachen Klick das Ergebnis der Berechnung in Echtzeit an den Navigator zurückgibt, weil:";
	           $txtts16="Die Abmessungen der Seite und der sie bildenden Ressourcen werden gemessen";
	           $txtts17="Anschließend werden die Ergebnisse mit denen vor den durchgeführten Optimierungsprozessen verglichen";
	           $txtts18="schließlich, um die als Prozentsatz ausgedrückte Differenz präzise und in Echtzeit zurückzugeben";
	           $txtts19="Die Ergebnisse variieren je nach verwendetem Browser und Gerät.";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Visualización de página &#127811;";
			   $txtts4="Izquierda";
			   $txtts5="derecho";
			   $txtts6="Aplicar los cambios realizados";
			   $txtts7="Ahorrar";
			   $txtts8="Cancelar";
			   $txtts9="Para cambiar el diseño de la aplicación CO2, puede seguir las instrucciones a continuación:";
			   $txtts10="1. Abra el archivo toppersystem/css/loader.css";
			   $txtts11="2. .co2ts y .co2tsresult son los CSS principales que puede editar a voluntad.";
			   $txtts12="3. Guarde sus cambios y vuelva a cargar una página optimizada para ver los efectos de sus cambios. Recomendamos borrar la memoria caché de su navegador antes de volver a cargar la página elegida.";
               $txtts15="Añadimos a las páginas optimizadas el símbolo de una pequeña hoja verde que, con un simple clic, devuelve el resultado del cálculo al navegador en tiempo real porque:";
	           $txtts16="Se miden las dimensiones de la página y de los recursos que la constituyen.";
	           $txtts17="posteriormente se comparan los resultados con los anteriores a los procesos de optimización realizados";
	           $txtts18="finalmente, devolver la diferencia expresada en porcentaje de forma precisa y en tiempo real";
	           $txtts19="Los resultados varían según el navegador y el dispositivo utilizado.";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Affichage de la page &#127811;";
			   $txtts4="À gauche";
			   $txtts5="Droit";
			   $txtts6="Appliquer les modifications apportées";
			   $txtts7="Sauvegarder";
			   $txtts8="Annuler";
			   $txtts9="Pour modifier la présentation de l'application CO2, vous pouvez suivre les instructions ci-dessous :";
			   $txtts10="1. Ouvrez le fichier toppersystem/css/loader.css";
			   $txtts11="2. .co2ts et .co2tsresult sont les principaux CSS que vous pouvez éditer à volonté.";
			   $txtts12="3. Enregistrez vos modifications et rechargez une page optimisée pour voir les effets de vos modifications. Nous vous recommandons de vider le cache de votre navigateur avant de recharger la page choisie.";
               $txtts15="Nous ajoutons le symbole d'une petite feuille verte aux pages optimisées qui, d'un simple clic, renvoie le résultat du calcul au navigateur en temps réel car:";
	           $txtts16="les dimensions de la page et des ressources qui la constituent sont mesurées";
	           $txtts17="ensuite, les résultats sont comparés à ceux antérieurs aux processus d'optimisation effectués";
	           $txtts18="enfin, de restituer la différence exprimée en pourcentage avec précision et en temps réel";
	           $txtts19="Les résultats varient en fonction du navigateur et de l'appareil utilisé.";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="पृष्ठ प्रदर्शन &#127811;";
			   $txtts4="बाएं";
			   $txtts5="अधिकार";
			   $txtts6="किए गए परिवर्तनों को लागू करें";
			   $txtts7="सहेजें";
			   $txtts8="रद्द करें";
			   $txtts9="CO2 एप्लिकेशन के लेआउट को बदलने के लिए आप नीचे दिए गए निर्देशों का पालन कर सकते हैं:";
			   $txtts10="1. टॉपरसिस्टम /css/loader.css फ़ाइल खोलें";
			   $txtts11="2. .co2ts और .co2tsresult मुख्य CSS हैं जिन्हें आप इच्छानुसार संपादित कर सकते हैं।";
			   $txtts12="3. अपने परिवर्तन सहेजें और अपने परिवर्तनों के प्रभावों को देखने के लिए एक अनुकूलित पृष्ठ को पुनः लोड करें। हम अनुशंसा करते हैं कि चुने गए पृष्ठ को पुनः लोड करने से पहले अपना ब्राउज़र कैश साफ़ करें।";
               $txtts15="हम अनुकूलित पृष्ठों में एक छोटी हरी पत्ती का प्रतीक जोड़ते हैं, जो एक साधारण क्लिक के साथ, वास्तविक समय में नेविगेटर को गणना का परिणाम लौटाता है क्योंकि:";
	           $txtts16="पृष्ठ के आयाम और उसे बनाने वाले संसाधनों को मापा जाता है";
	           $txtts17="बाद में परिणामों की तुलना प्रदर्शन की गई अनुकूलन प्रक्रियाओं से पहले के परिणामों से की जाती है";
	           $txtts18="अंत में, प्रतिशत के रूप में व्यक्त अंतर को सटीक और वास्तविक समय में लौटाना";
	           $txtts19="उपयोग किए गए ब्राउज़र और डिवाइस के आधार पर परिणाम अलग-अलग होते हैं।";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="ページ表示 ＆#127811;";
			   $txtts4="左";
			   $txtts5="正しい";
			   $txtts6="行った変更を適用します";
			   $txtts7="保存する";
			   $txtts8="キャンセル";
			   $txtts9="CO2アプリケーションのレイアウトを変更するには、以下の手順に従ってください。";
			   $txtts10="1. toppersystem/css/loader.cssファイルを開きます";
			   $txtts11="2. .co2tsと.co2tsresultは、自由に編集できる主要なCSSです。";
			   $txtts12="3.変更を保存し、最適化されたページをリロードして、変更の効果を確認します。 選択したページをリロードする前に、ブラウザのキャッシュをクリアすることをお勧めします。";
               $txtts15="最適化されたページに小さな緑の葉のシンボルを追加します。これは、次の理由から、クリックするだけでリアルタイムで計算結果をナビゲーターに返します。";
	           $txtts16="ページとそれを構成するリソースのサイズが測定されます";
	           $txtts17="その後、結果が最適化プロセスが実行される前の結果と比較されます。";
	           $txtts18="最後に、パーセンテージとして表現された差異を正確かつリアルタイムで返します。";
	           $txtts19="結果は使用するブラウザとデバイスによって異なります。";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Wyświetlanie strony &#127811;";
			   $txtts4="Lewo";
			   $txtts5="prawidłowy";
			   $txtts6="Zastosuj wprowadzone zmiany";
			   $txtts7="Zapisać";
			   $txtts8="Anuluj";
			   $txtts9="Aby zmienić wygląd Aplikacji CO2 postępuj zgodnie z poniższą instrukcją:";
			   $txtts10="1. Otwórz plik toppersystem/css/loader.css";
			   $txtts11="2. .co2ts i .co2tsresult to główne CSS, które możesz dowolnie edytować.";
			   $txtts12="3. Zapisz zmiany i ponownie załaduj zoptymalizowaną stronę, aby zobaczyć efekty swoich zmian. Zalecamy wyczyszczenie pamięci podręcznej przeglądarki przed ponownym załadowaniem wybranej strony.";
               $txtts15="Do zoptymalizowanych stron dodajemy symbol małego zielonego listka, który jednym kliknięciem zwraca wynik obliczeń do nawigatora w czasie rzeczywistym, ponieważ:";
	           $txtts16="mierzone są wymiary strony i tworzących ją zasobów";
	           $txtts17="następnie wyniki porównywane są z wynikami sprzed przeprowadzenia procesów optymalizacyjnych";
	           $txtts18="wreszcie, aby dokładnie i w czasie rzeczywistym zwrócić różnicę wyrażoną w procentach";
	           $txtts19="Wyniki różnią się w zależności od używanej przeglądarki i urządzenia.";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Exibição da página &#127811;";
			   $txtts4="Deixou";
			   $txtts5="Direito";
			   $txtts6="Aplique as alterações feitas";
			   $txtts7="Salve";
			   $txtts8="Cancelar";
			   $txtts9="Para alterar o layout da Aplicação de CO2, você pode seguir as instruções abaixo:";
			   $txtts10="1. Abra o arquivo toppersystem/css/loader.css";
			   $txtts11="2. .co2ts e .co2tsresult são os principais CSSs que você pode editar à vontade.";
			   $txtts12="3. Salve suas alterações e recarregue uma página otimizada para ver os efeitos de suas alterações. Recomendamos limpar o cache do navegador antes de recarregar a página escolhida.";
               $txtts15="Adicionamos às páginas otimizadas o símbolo de uma pequena folha verde que, com um simples clique, retorna o resultado do cálculo ao navegador em tempo real porque:";
	           $txtts16="medem-se as dimensões da página e dos recursos que a constituem";
	           $txtts17="posteriormente os resultados são comparados com aqueles anteriores aos processos de otimização realizados";
	           $txtts18="finalmente, retornar a diferença expressa em porcentagem com precisão e em tempo real";
	           $txtts19="Os resultados variam dependendo do navegador e do dispositivo utilizado.";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Отображение страницы &#27811;";
			   $txtts4="Левый";
			   $txtts5="правильно";
			   $txtts6="Применить внесенные изменения";
			   $txtts7="Сохранять";
			   $txtts8="Отмена";
			   $txtts9="Чтобы изменить макет приложения CO2, следуйте инструкциям ниже:";
			   $txtts10="1. Откройте файл toppersystem/css/loader.css.";
			   $txtts11="2. .co2ts и .co2tsresult - это основные CSS-файлы, которые вы можете редактировать по своему желанию.";
			   $txtts12="3. Сохраните изменения и перезагрузите оптимизированную страницу, чтобы увидеть эффект от ваших изменений. Мы рекомендуем очистить кеш браузера перед перезагрузкой выбранной страницы.";
               $txtts15="На оптимизированные страницы мы добавляем символ маленького зеленого листочка, который простым кликом возвращает результат расчета в навигатор в режиме реального времени, потому что:";
	           $txtts16="измеряются размеры страницы и составляющих ее ресурсов";
	           $txtts17="впоследствии результаты сравниваются с результатами, полученными до выполнения процессов оптимизации.";
	           $txtts18="наконец, чтобы точно и в реальном времени вернуть разницу, выраженную в процентах";
	           $txtts19="Результаты различаются в зависимости от используемого браузера и устройства.";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="页面显示 &#127811;";
			   $txtts4="剩下";
			   $txtts5="对";
			   $txtts6="应用所做的更改";
			   $txtts7="保存";
			   $txtts8="取消";
			   $txtts9="要更改 CO2 应用程序的布局，您可以按照以下说明操作：";
			   $txtts10="1.打开toppersystem/css/loader.css文件";
			   $txtts11="2. .co2ts 和.co2tsresult 是主要的CSS，可以随意编辑。";
			   $txtts12="3. 保存更改并重新加载优化页面以查看更改的效果。 我们建议在重新加载所选页面之前清除浏览器缓存。";
               $txtts15="我们将小绿叶的符号添加到优化的页面中，只需单击一下，即可将计算结果实时返回到导航器，因为：";
	           $txtts16="测量页面的尺寸以及构成页面的资源的尺寸";
	           $txtts17="随后将结果与执行优化过程之前的结果进行比较";
	           $txtts18="最后，实时精确地返回以百分比表示的差异";
	           $txtts19="结果因所使用的浏览器和设备而异。";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="תצוגת עמוד;";
			   $txtts4="שמאלה";
			   $txtts5="ימין";
			   $txtts6="החל את השינויים שבוצעו";
			   $txtts7="להציל";
			   $txtts8="לְבַטֵל";
			   $txtts9="כדי לשנות את הפריסה של CO2 Application אתה יכול לבצע את ההוראות שלהלן:";
			   $txtts10="1. פתח את הקובץ toppersystem/css/loader.css";
			   $txtts11="2. .co2ts ו-.co2tsresult הם ה-CSS העיקריים שאתה יכול לערוך כרצונך.";
			   $txtts12="3. שמור את השינויים שלך וטען מחדש דף מותאם כדי לראות את ההשפעות של השינויים שלך. אנו ממליצים לנקות את מטמון הדפדפן שלך לפני טעינת הדף הנבחר מחדש.";
               $txtts15="אנו מוסיפים לדפים המותאמים את הסמל של עלה ירוק קטן, אשר בלחיצה פשוטה מחזיר את תוצאת החישוב לנווט בזמן אמת מכיוון:";
	           $txtts16="נמדדים מידות הדף ושל המשאבים המרכיבים אותו";
	           $txtts17="לאחר מכן התוצאות מושוות לאלו שקדמו לתהליכי האופטימיזציה שבוצעו";
	           $txtts18="לבסוף, להחזיר את ההפרש מבוטא באחוזים במדויק ובזמן אמת";
	           $txtts19="התוצאות משתנות בהתאם לדפדפן ולמכשיר בשימוש.";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Page display &#127811;";
			   $txtts4="left";
			   $txtts5="ius";
			   $txtts6="Applicare mutationes factae";
			   $txtts7="salvare";
			   $txtts8="Cancel";
			   $txtts9="Mutare extensionem CO2 Applicationem instructiones infra sequi potes:";
			   $txtts10="1. Aperi toppersystem/css/loader.css fasciculi";
			   $txtts11="2. .co2ts et .co2tsresult sunt principale CSSs quod recensere potes ad libitum.";
			   $txtts12="3. Serva tuas mutationes et paginam optimized ad videndum effectus mutationum tuarum. Suadeo purgando navigatrum cella antequam paginam electam reloading.";
               $txtts15="Symbolum folii viridis addimus ad paginas optimizedis, quae, cum simplici strepita, eventum calculi reddit naviganti in tempore reali, quia:";
	           $txtts16="dimensiones paginarum et facultatum quae eam constituunt mensurantur";
	           $txtts17="postea eventus comparantur cum illis prioribus cum processibus optimizationibus factis";
	           $txtts18="postremo, referre differentiam, quam expressam recipis praecise et in tempore reali";
	           $txtts19="Proventus variantur pendentes in navigatro et artificio usus.";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Page display &#127811;";
			   $txtts4="Left";
			   $txtts5="right";
			   $txtts6="Apply the changes made";
			   $txtts7="Save";
			   $txtts8="Cancel";
			   $txtts9="To change the layout of CO2 Application you can follow the instructions below:";
			   $txtts10="1. Open the toppersystem/css/loader.css file";
			   $txtts11="2. .co2ts and .co2tsresult are the main CSSs that you can edit at will.";
			   $txtts12="3. Save your changes and reload an optimized page to see the effects of your changes. We recommend clearing your browser cache before reloading the chosen page.";
               $txtts15="We add the symbol of a small green leaf to the optimized pages which, with a simple click, returns the result of the calculation to the navigator in real time because:";
	           $txtts16="the dimensions of the page and of the resources that constitute it are measured";
	           $txtts17="subsequently the results are compared with those prior to the optimization processes performed";
	           $txtts18="finally, to return the difference expressed as a percentage precisely and in real time";
	           $txtts19="Results vary depending on the browser and device used.";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        if(str_replace("\\","",__DIR__) != __DIR__){
                            $hu4="\css\loader.css";
                            $pathfileloadercss=str_replace("toppersystem\api","toppersystem",__DIR__).$hu4;
                        }else{
                            $hu4="/css/loader.css";
                            $pathfileloadercss=str_replace("toppersystem/api","toppersystem",__DIR__).$hu4;
                        }

						$look_form=0;
						$add_position_left_right="";    
						#$fileCssLoaderl_ts="../css/loader.css";
                        $fileCssLoaderl_ts="$pathfileloadercss";
						if(file_exists($fileCssLoaderl_ts)){
							$handle_cssloader = fopen($fileCssLoaderl_ts, "r");
							if (FALSE === $handle_cssloader) {
								$cssloader_toppersystem="";
							}else{
								$cssloader_toppersystem = '';
								while (!feof($handle_cssloader)) {
									$cssloader_toppersystem .= fread($handle_cssloader, 8192);
								}
								fclose($handle_cssloader);
							}
							unset($handle_cssloader);
							if(trim($cssloader_toppersystem) != ""){
								$css_prel_part1=TopperSystemSetFileco2app::extractstringa($cssloader_toppersystem, '.co2ts{', '}');
								$css_prel_part2=TopperSystemSetFileco2app::extractstringa($cssloader_toppersystem, '.co2tsresult{', '}');
								if((str_replace(array(";left:", ";right:"),"",$css_prel_part1) != $css_prel_part1)&&(str_replace(array(";left:", ";right:"),"",$css_prel_part2) != $css_prel_part2)){
									if(str_replace(";right:","",$css_prel_part1) != $css_prel_part1){
										$extract_pos_css_prel_part1="right";
									}else if(str_replace(";left:","",$css_prel_part1) != $css_prel_part1){
										$extract_pos_css_prel_part1="left";
									}else{
										$extract_pos_css_prel_part1="";
									}
									
									if(str_replace(";right:","",$css_prel_part2) != $css_prel_part2){
										$extract_pos_css_prel_part2="right";
									}else if(str_replace(";left:","",$css_prel_part2) != $css_prel_part2){
										$extract_pos_css_prel_part2="left";
									}else{
										$extract_pos_css_prel_part2="";
									}
									
									if((($extract_pos_css_prel_part1 != "")&&($extract_pos_css_prel_part2 != ""))&&($extract_pos_css_prel_part1 == "$extract_pos_css_prel_part2")){

										if($extract_pos_css_prel_part1 == "right"){
											$check_right=" checked=\"checked\"";
											$check_left="";
										}else if($extract_pos_css_prel_part1 == "left"){
											$check_right="";
											$check_left=" checked=\"checked\"";
										}else{
											$check_right="";
											$check_left="";
										}
										
										if(($check_right != "")||($check_left != "")){
											$add_position_left_right="<tr><td class=\"eventstd_ts\"><strong>$txtts3</strong></td><td class=\"eventstd_ts\"><div class=\"pxdding4\" style=\"white-space: nowrap;\"><input type=\"radio\" name=\"pos_sel_co2application_toppersystem_send\" value=\"0\"$check_left> $txtts4</div><div class=\"pxdding4\" style=\"white-space: nowrap;\"><input type=\"radio\" name=\"pos_sel_co2application_toppersystem_send\" value=\"1\"$check_right> $txtts5</div></td></tr>";
											$look_form++;
										}
									}
								}
							}
						}					
						
						if($look_form == "0"){
							$add_save="<tr><td class=\"eventstd_ts\">$txtts9<br><br>$txtts10<br>$txtts11<br>$txtts12</td></tr>";
						}else{
							$add_save="<tr><td class=\"eventstd_ts\"><small>$txtts6</small></td><td class=\"eventstd_ts\" style=\"width:20%;\"><div id=\"block_save_details_co2application_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_events_co2application_toppersystem();\">$txtts7</a>&nbsp;&nbsp;<a rel=\"nofollow\" href=\"javascript:close_events_co2application_toppersystem();\">$txtts8</a></div><div id=\"block_save_details_loading_co2application_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></td></tr>";							
						}
						
                        $box_general="<div id=\"box_general_request_events_toppersystem\"><div class=\"msg_banner_toppersystem\"><small>$txtts15<br>&bull; <strong>$txtts16</strong><br>&bull; <strong>$txtts17</strong><br>&bull; <strong>$txtts18</strong><br><br>$txtts19</small></div><table class=\"eventstables_ts margin0\">".$add_position_left_right."".$add_save."</table></div>";
					
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
@add_action('init', @TopperSystemExecuteFileco2app::runts(), 2);
}
}

}
}
}
?>