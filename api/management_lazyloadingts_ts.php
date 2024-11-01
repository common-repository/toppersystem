<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFilelazyloadingts {
    public static function result_domain_name($url){
        $url=str_replace("://","[TsostituisciS]",$url);
        $url=explode("/",$url)["0"];
        $url=explode("?",$url)["0"];
        $url=explode("#",$url)["0"];
        $url=str_replace("[TsostituisciS]","://",$url);    
        return $url;
    }

    public static function result_page_name_no_domain($url){
        $url=str_replace(TopperSystemSetFilelazyloadingts::result_domain_name($url),"",$url);
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
                            TopperSystemSetFilelazyloadingts::leggiDir ($list, $fullname);
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

            TopperSystemSetFilelazyloadingts::leggiDir ($lista_path, $directory);

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

class TopperSystemExecuteFilelazyloadingts {
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
			   $txtts3="Imposta il livello di profondità di analisi delle immagini";
			   $txtts4="Alto";
			   $txtts5="Medio";
			   $txtts6="Applica le modifiche apportate";
			   $txtts7="Salva";
			   $txtts8="Annulla";
			   $txtts9="Per modificare il livello di profondità di analisi di Smart Image Lazy-Loading TS puoi seguire le seguenti istruzioni:";
			   $txtts10="1. Apri i files toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. imposta la funzione su startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") secondo le tue esigenze.";
			   $txtts12="3. Salva le modifiche e ricarica una pagina ottimizzata per visualizzare gli effetti delle modifiche apportate. Consigliamo di cancellare la cache del browser prima di ricaricare la pagina scelta.";
			   $txtts14="Basso";
			   $txtts15="La libreria Smart Lazy Load Images by toppersystem.com aggiunge l'effetto alle immagini dichiarate nei tag &lt;img&gt; a cui è dichiarato l'attributo src e non quello data-src.";
			   $txtts16="E' possibile scegliere tra i seguenti livelli di personalizzazione:";
			   $txtts17="tutte";
			   $txtts18="oppure";
			   $txtts19="Smart Lazy Load Images si attiva alle immagini delle pagine non ottimizzate con il plugin, mentre a quelle ottimizzate è applicato il lazy-load nativo dei browser.";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="يحدد عمق تحليل الصورة";
			   $txtts4="متوسط";
			   $txtts5="متوسط";
			   $txtts6="قم بتطبيق التغييرات التي تم إجراؤها";
			   $txtts7="يحفظ";
			   $txtts8="يلغي";
			   $txtts9="لتغيير عمق تحليل Smart Image Lazy-Loading TS ، يمكنك اتباع التعليمات التالية:";
			   $txtts10="1. افتح الملفات toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. تعيين الوظيفة إلى startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") وفقا لمتطلباتك.";
			   $txtts12="3. احفظ التغييرات وأعد تحميل صفحة محسّنة لمشاهدة تأثيرات التغييرات. نوصي بمسح ذاكرة التخزين المؤقت للمتصفح قبل إعادة تحميل الصفحة المختارة.";
			   $txtts14="صوت عميق";
               $txtts15="يضيف Smart Lazy Load Images من مكتبة toppersystem.com التأثير إلى الصور المعلنة في العلامات &lt;img&gt; التي تم الإعلان عن السمة src وليس على data-src واحد.";
               $txtts16="يمكنك الاختيار بين مستويات التخصيص التالية:";
               $txtts17="الكل";
               $txtts18="أو";
               $txtts19="يتم تنشيط Smart Lazy Load Images على صور الصفحات التي لم يتم تحسينها باستخدام المكون الإضافي ، بينما يتم تطبيق التحميل البطيء الأصلي للمتصفحات على المستعرضات المحسنة.";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Legt die Tiefe der Bildanalyse fest";
			   $txtts4="Hoch";
			   $txtts5="Mittel";
			   $txtts6="Wenden Sie die vorgenommenen Änderungen an";
			   $txtts7="Speichern";
			   $txtts8="Absagen";
			   $txtts9="Um die Analysetiefe von Smart Image Lazy-Loading TS zu ändern, können Sie die folgenden Anweisungen befolgen:";
			   $txtts10="1. Öffnen Sie die Dateien toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. Stellen Sie die Funktion entsprechend Ihren Anforderungen auf startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") ein.";
			   $txtts12="3. Speichern Sie Ihre Änderungen und laden Sie eine optimierte Seite neu, um die Auswirkungen Ihrer Änderungen zu sehen. Wir empfehlen, Ihren Browser-Cache zu löschen, bevor Sie die ausgewählte Seite neu laden.";
			   $txtts14="Bass";
               $txtts15="Die Smart Lazy Load Images by toppersystem.com-Bibliothek fügt den Effekt zu Bildern hinzu, die in &lt;img&gt;-Tags deklariert sind, die das src-Attribut deklariert haben und nicht das data-src-Attribut.";
               $txtts16="Sie können zwischen den folgenden Anpassungsstufen wählen:";
               $txtts17="all";
               $txtts18="oder";
               $txtts19="Smart Lazy Load Images wird auf Bildern von Seiten aktiviert, die nicht mit dem Plugin optimiert wurden, während das native Lazy Load von Browsern auf optimierte Seiten angewendet wird.";   
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Establece la profundidad del análisis de la imagen.";
			   $txtts4="Alto";
			   $txtts5="Medio";
			   $txtts6="Aplicar los cambios realizados";
			   $txtts7="Guardar";
			   $txtts8="Cancelar";
			   $txtts9="Para cambiar la profundidad de análisis de Smart Image Lazy-Loading TS, puede seguir las instrucciones a continuación:";
			   $txtts10="1. Abre los archivos toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. Establezca la función en startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") según sus requisitos.";
			   $txtts12="3. Guarde sus cambios y vuelva a cargar una página optimizada para ver los efectos de sus cambios. Recomendamos borrar la memoria caché de su navegador antes de volver a cargar la página elegida.";
			   $txtts14="Bajo";
               $txtts15="La biblioteca Smart Lazy Load Images by toppersystem.com agrega el efecto a las imágenes declaradas en las etiquetas &lt;img&gt; que tienen declarado el atributo src y no data-src.";
               $txtts16="Puedes elegir entre los siguientes niveles de personalización:";
               $txtts17="todos";
               $txtts18="o";
               $txtts19="Las imágenes de carga diferida inteligente se activan en imágenes de páginas no optimizadas con el complemento, mientras que la carga diferida nativa de los navegadores se aplica a las optimizadas.";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Définit la profondeur de l'analyse de l'image";
			   $txtts4="Haut";
			   $txtts5="Moyen";
			   $txtts6="Appliquer les modifications apportées";
			   $txtts7="Sauver";
			   $txtts8="Annuler";
			   $txtts9="Pour modifier la profondeur d'analyse de Smart Image Lazy-Loading TS, vous pouvez suivre les instructions ci-dessous:";
			   $txtts10="1. Ouvrez les fichiers toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. Réglez la fonction sur startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") selon vos besoins.";
			   $txtts12="3. Enregistrez vos modifications et rechargez une page optimisée pour voir les effets de vos modifications. Nous vous recommandons de vider le cache de votre navigateur avant de recharger la page choisie.";
			   $txtts14="Bas";
               $txtts15="La bibliothèque Smart Lazy Load Images de toppersystem.com ajoute l'effet aux images déclarées dans les balises &lt;img&gt; qui ont l'attribut src déclaré et non celui data-src.";
               $txtts16="Vous pouvez choisir entre les niveaux de personnalisation suivants :";
               $txtts17="tout";
               $txtts18="ou";
               $txtts19="Smart Lazy Load Images est activé sur les images des pages non optimisées avec le plugin, tandis que le lazy-load natif des navigateurs est appliqué aux pages optimisées.";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="छवि विश्लेषण की गहराई निर्धारित करता है";
			   $txtts4="ऊँचा";
			   $txtts5="मध्यम";
			   $txtts6="किए गए परिवर्तनों को लागू करें";
			   $txtts7="बचाना";
			   $txtts8="रद्द करना";
			   $txtts9="स्मार्ट इमेज लेज़ी-लोडिंग टीएस के विश्लेषण की गहराई को बदलने के लिए आप नीचे दिए गए निर्देशों का पालन कर सकते हैं:";
			   $txtts10="1. फ़ाइलें खोलें toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. फ़ंक्शन को अपनी आवश्यकता के अनुसार startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") पर सेट करें।";
			   $txtts12="3. अपने परिवर्तन सहेजें और अपने परिवर्तनों के प्रभावों को देखने के लिए एक अनुकूलित पृष्ठ को पुनः लोड करें। हम अनुशंसा करते हैं कि चुने गए पृष्ठ को पुनः लोड करने से पहले अपना ब्राउज़र कैश साफ़ करें।";
			   $txtts14="बास";
               $txtts15="topperssystem.com लाइब्रेरी की स्मार्ट लेज़ी लोड इमेज &lt;img&gt; टैग में घोषित छवियों पर प्रभाव जोड़ती है, जिनमें src विशेषता घोषित होती है, न कि data-src";
               $txtts16="आप निम्नलिखित अनुकूलन स्तरों के बीच चयन कर सकते हैं:";
               $txtts17="सभी";
               $txtts18="या";
               $txtts19="स्मार्ट लेज़ी लोड इमेज उन पृष्ठों की छवियों पर सक्रिय होती है जो प्लगइन के साथ अनुकूलित नहीं हैं, जबकि ब्राउज़र का मूल लेज़ी-लोड अनुकूलित वाले पर लागू होता है।";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="画像解析の深さを設定します";
			   $txtts4="高い";
			   $txtts5="中くらい";
			   $txtts6="行った変更を適用します";
			   $txtts7="保存する";
			   $txtts8="キャンセル";
			   $txtts9="Smart Image Lazy-Loading TSの分析の深​​さを変更するには、以下の手順に従ってください。";
			   $txtts10="1.ファイルを開きます toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2.必要に応じて、関数をstartlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\")に設定します。";
			   $txtts12="3.変更を保存し、最適化されたページをリロードして、変更の効果を確認します。 選択したページをリロードする前に、ブラウザのキャッシュをクリアすることをお勧めします。";
			   $txtts14="ベース";
               $txtts15="toppersystem.com ライブラリによる Smart Lazy Load Images は、data-src 属性ではなく src 属性が宣言されている &lt;img&gt; タグで宣言された画像に効果を追加します。";
               $txtts16="次のカスタマイズ レベルから選択できます:";
               $txtts17="すべて";
               $txtts18="または";
               $txtts19="スマート遅延ロード画像は、プラグインで最適化されていないページの画像に対してアクティブ化されますが、ブラウザーのネイティブ遅延読み込みは最適化されたページに適用されます。";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Ustawia głębię analizy obrazu";
			   $txtts4="Wysoki";
			   $txtts5="Średni";
			   $txtts6="Zastosuj wprowadzone zmiany";
			   $txtts7="Ratować";
			   $txtts8="Anulować";
			   $txtts9="Aby zmienić głębokość analizy Smart Image Lazy-Loading TS, możesz postępować zgodnie z poniższymi instrukcjami:";
			   $txtts10="1. Otwórz pliki toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. Ustaw funkcję na startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") zgodnie z wymaganiami.";
			   $txtts12="3. Zapisz zmiany i ponownie załaduj zoptymalizowaną stronę, aby zobaczyć efekty swoich zmian. Zalecamy wyczyszczenie pamięci podręcznej przeglądarki przed ponownym załadowaniem wybranej strony.";
			   $txtts14="Gitara basowa";
               $txtts15="Biblioteka Smart Lazy Load Images firmy toppersystem.com dodaje efekt do obrazów zadeklarowanych w znacznikach &lt;img&gt;, które mają zadeklarowany atrybut src, a nie data-src.";
               $txtts16="Możesz wybrać pomiędzy następującymi poziomami dostosowania:";
               $txtts17="wszystko";
               $txtts18="lub";
               $txtts19="Inteligentne leniwe ładowanie obrazów jest aktywowane na obrazach stron niezoptymalizowanych za pomocą wtyczki, podczas gdy natywne leniwe ładowanie przeglądarek jest stosowane dla zoptymalizowanych.";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Define a profundidade da análise da imagem";
			   $txtts4="Alto";
			   $txtts5="Médio";
			   $txtts6="Aplique as alterações feitas";
			   $txtts7="Salve";
			   $txtts8="Cancelar";
			   $txtts9="Para alterar a profundidade da análise do Smart Image Lazy-Loading TS, você pode seguir as instruções abaixo:";
			   $txtts10="1. Abra os arquivos toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. Defina a função para startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") de acordo com sua necessidade.";
			   $txtts12="3. Salve suas alterações e recarregue uma página otimizada para ver os efeitos de suas alterações. Recomendamos limpar o cache do navegador antes de recarregar a página escolhida.";
			   $txtts14="Graves";
               $txtts15="A biblioteca Smart Lazy Load Images da toppersystem.com adiciona o efeito às imagens declaradas em tags &lt;img&gt; que possuem o atributo src declarado e não o data-src.";
               $txtts16="Você pode escolher entre os seguintes níveis de personalização:";
               $txtts17="todos";
               $txtts18="ou";
               $txtts19="Smart Lazy Load Images é ativado em imagens de páginas não otimizadas com o plug-in, enquanto o carregamento lento nativo de navegadores é aplicado a páginas otimizadas.";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Устанавливает глубину анализа изображения";
			   $txtts4="Высоко";
			   $txtts5="Середина";
			   $txtts6="Примените внесенные изменения";
			   $txtts7="Сохранять";
			   $txtts8="Отмена";
			   $txtts9="Чтобы изменить глубину анализа Smart Image Lazy-Loading TS, вы можете следовать приведенным ниже инструкциям:";
			   $txtts10="1. Откройте файлы toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. Установите функцию на startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") в соответствии с вашими требованиями.";
			   $txtts12="3. Сохраните изменения и перезагрузите оптимизированную страницу, чтобы увидеть результаты ваших изменений. Мы рекомендуем очистить кеш браузера перед перезагрузкой выбранной страницы.";
			   $txtts14="Бас";
               $txtts15="Библиотека Smart Lazy Load Images от toppersystem.com добавляет эффект к изображениям, объявленным в тегах &lt;img&gt;, у которых объявлен атрибут src, а не атрибут data-src.";
               $txtts16="Вы можете выбрать один из следующих уровней настройки:";
               $txtts17="все";
               $txtts18="или";
               $txtts19="Умная отложенная загрузка изображений активируется для изображений страниц, не оптимизированных с помощью плагина, а для оптимизированных применяется встроенная отложенная загрузка браузеров.";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="设置图像分析的深度应用所做的更改";
			   $txtts4="Hight";
			   $txtts5="Medium";
			   $txtts6="Low";
			   $txtts7="节省";
			   $txtts8="取消";
			   $txtts9="要更改 Smart Image Lazy-Loading TS 的分析深度，您可以按照以下说明进行操作：";
			   $txtts10="1. 打开文件 toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2.根据您的要求将功能设置为startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\")。";
			   $txtts12="3. 保存更改并重新加载优化页面以查看更改的效果。 我们建议在重新加载所选页面之前清除浏览器缓存。";
			   $txtts14="低音";
               $txtts15="toppersystem.com 库的智能延迟加载图像将效果添加到声明了 src 属性而不是 data-src 属性的 &lt;img&gt; 标记中声明的图像。";
               $txtts16="您可以选择以下自定义级别：";
               $txtts17="全部";
               $txtts18="或";
               $txtts19="智能延迟加载图像在未使用插件优化的页面图像上激活，而浏览器的本机延迟加载则应用于优化的页面。";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="מגדיר את עומק ניתוח התמונה";
			   $txtts4="גָבוֹהַ";
			   $txtts5="בינוני";
			   $txtts6="החל את השינויים שבוצעו";
			   $txtts7="להציל";
			   $txtts8="לְבַטֵל";
			   $txtts9="כדי לשנות את עומק הניתוח של Smart Image Lazy-Loading TS תוכל לבצע את ההוראות שלהלן:";
			   $txtts10="1. פתח את הקבצים toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. הגדר את הפונקציה ל-startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") בהתאם לדרישתך.";
			   $txtts12="3. שמור את השינויים שלך וטען מחדש דף מותאם כדי לראות את ההשפעות של השינויים שלך. אנו ממליצים לנקות את מטמון הדפדפן שלך לפני טעינת הדף הנבחר מחדש.";
			   $txtts14="בַּס";
               $txtts15="ספריית ה-Smart Lazy Load Images מאת toppersystem.com מוסיפה את האפקט לתמונות המוצהרות בתגיות &lt;img&gt; עם תכונת src המוצהרת ולא זו data-src.";
               $txtts16="אתה יכול לבחור בין רמות ההתאמה האישית הבאות:";
               $txtts17="הכל";
               $txtts18="או";
               $txtts19="Smart Lazy Load Images מופעלת בתמונות של דפים שלא עברו אופטימיזציה באמצעות התוסף, בעוד שהטעינה העצלה של דפדפנים מופעלת על דפים שעברו אופטימיזציה.";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Altitudinem imaginis analysis ponit";
			   $txtts4="Summus";
			   $txtts5="Medium";
			   $txtts6="Applicare mutationes factae";
			   $txtts7="Salvare";
			   $txtts8="Cancel";
			   $txtts9="Profundum analysin analyseos Smert Image Lazy-Loading TS mutare potes instructiones infra:";
			   $txtts10="1. Aperi files toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. munus constitue ad startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") secundum postulationem tuam.";
			   $txtts12="3. Serva tuas mutationes et paginam optimized ad videndum effectus mutationum tuarum. Suadeo purgando navigatrum cella antequam paginam electam reloading.";
			   $txtts14="Bass";
               $txtts15="The Smart Lazy Load Images by toppersystem.com library addit the effect to images declarated in &lt;img&gt; tags that have the src attributum declaravit and not the data-src one.";
               $txtts16="Potes eligere inter sequentes gradus customizationem:";
               $txtts17="all";
               $txtts18="or";
               $txtts19="Smert Lazy Load Images activated in images of pages non optimized cum plugino, dum indigena navigantium pigra ad optimized ones applicatur.";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Sets the depth of image analysis";
			   $txtts4="High";
			   $txtts5="Medium";
			   $txtts6="Apply the changes made";
			   $txtts7="Save";
			   $txtts8="Cancel";
			   $txtts9="To change the depth of analysis of Smart Image Lazy-Loading TS you can follow the instructions below:";
			   $txtts10="1. Open the files toppersystem/js/lazyloading_ts.js e toppersystem/js/smartlazyloading_ts.js";
			   $txtts11="2. Set the function to startlazy_ts(\"hight\"), startlazy_ts(\"medium\") oppure startlazy_ts(\"low\") according to your requirement.";
			   $txtts12="3. Save your changes and reload an optimized page to see the effects of your changes. We recommend clearing your browser cache before reloading the chosen page.";
			   $txtts14="Bass";
               $txtts15="The Smart Lazy Load Images by toppersystem.com library adds the effect to images declared in &lt;img&gt; tags that have the src attribute declared and not the data-src one.";
               $txtts16="You can choose between the following customization levels:";
               $txtts17="all";
               $txtts18="or";
               $txtts19="Smart Lazy Load Images is activated on images of pages not optimized with the plugin, while the native lazy-load of browsers is applied to optimized ones.";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        if(str_replace("\\","",__DIR__) != __DIR__){
                            $hu4="\js\lazyloading_ts.js";
                            $pathfilelazyloading_ts=str_replace("toppersystem\api","toppersystem",__DIR__).$hu4;
                        }else{
                            $hu4="/js/lazyloading_ts.js";
                            $pathfilelazyloading_ts=str_replace("toppersystem/api","toppersystem",__DIR__).$hu4;
                        }                        

						$look_form=0;
						$add_position="";    
						#$fileJSlazyloading_ts="../js/lazyloading_ts.js";
                        $fileJSlazyloading_ts="$pathfilelazyloading_ts";
						if(file_exists($fileJSlazyloading_ts)){
							$handle_jsJSlazyloading_ts = fopen($fileJSlazyloading_ts, "r");
							if (FALSE === $handle_jsJSlazyloading_ts) {
								$jslazyloading_toppersystem="";
							}else{
								$jslazyloading_toppersystem = '';
								while (!feof($handle_jsJSlazyloading_ts)) {
									$jslazyloading_toppersystem .= fread($handle_jsJSlazyloading_ts, 8192);
								}
								fclose($handle_jsJSlazyloading_ts);
							}
							unset($handle_jsJSlazyloading_ts);
							if(trim($jslazyloading_toppersystem) != ""){

								if(str_replace(array("startlazy_ts(\"hight\")", "startlazy_ts(\"medium\")", "startlazy_ts(\"low\")"),"",$jslazyloading_toppersystem) != "$jslazyloading_toppersystem"){
									
									if(str_replace("startlazy_ts(\"hight\")","",$jslazyloading_toppersystem) != "$jslazyloading_toppersystem"){
										$extract_val_file="hight";
									}else if(str_replace("startlazy_ts(\"medium\")","",$jslazyloading_toppersystem) != "$jslazyloading_toppersystem"){
										$extract_val_file="medium";
									}else if(str_replace("startlazy_ts(\"low\")","",$jslazyloading_toppersystem) != "$jslazyloading_toppersystem"){
										$extract_val_file="low";
									}else{
										$extract_val_file="";
									}
									if($extract_val_file != ""){
										if($extract_val_file == "hight"){
											$check_hight=" checked=\"checked\"";
											$check_medium="";
											$check_low="";
										}else if($extract_val_file == "medium"){
											$check_hight="";
											$check_medium=" checked=\"checked\"";
											$check_low="";
										}else if($extract_val_file == "low"){
											$check_hight="";
											$check_medium="";
											$check_low=" checked=\"checked\"";
										}else{
											$check_hight="";
											$check_medium="";
											$check_low="";
										}										
										if(($check_hight != "")||($check_medium != "")||($check_low != "")){
											$add_position="<tr><td class=\"eventstd_ts\"><strong>$txtts3</strong><br><small>$txtts15<br><br>$txtts16<br>&bull; <strong>$txtts4 (hight)</strong>: &quot;<i>$txtts17</i>&quot;.<br><br>&bull; <strong>$txtts5 (medium)</strong>: &quot;<i>width</i>&quot; $txtts18, &quot;<i>height</i>&quot; $txtts18, &quot;<i>class</i>&quot; $txtts18, &quot;<i>style</i>&quot; $txtts18, &quot;<i>loading</i>&quot;.<br><br>&bull; <strong>$txtts14 (low)</strong>: &quot;<i>width</i>&quot; $txtts18, &quot;<i>height</i>&quot; $txtts18, &quot;<i>loading</i>&quot;.<br><br>$txtts19</small></td><td class=\"eventstd_ts\"><div class=\"pxdding4\" style=\"white-space: nowrap;\"><input type=\"radio\" name=\"pos_sel_lazyloadingts_toppersystem_send\" value=\"0\"$check_hight> $txtts4</div><div class=\"pxdding4\" style=\"white-space: nowrap;\"><input type=\"radio\" name=\"pos_sel_lazyloadingts_toppersystem_send\" value=\"1\"$check_medium> $txtts5</div><div class=\"pxdding4\" style=\"white-space: nowrap;\"><input type=\"radio\" name=\"pos_sel_lazyloadingts_toppersystem_send\" value=\"2\"$check_low> $txtts14</div></td></tr>";
											$look_form++;
										}
									}
								}
							}
						}

						if($look_form == "0"){
							$add_save="<tr><td class=\"eventstd_ts\">$txtts9<br><br>$txtts10<br>$txtts11<br>$txtts12</td></tr>";
						}else{
							$add_save="<tr><td class=\"eventstd_ts\"><small>$txtts6</small></td><td class=\"eventstd_ts\" style=\"width:20%;\"><div id=\"block_save_details_lazyloadingts_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_events_lazyloadingts_toppersystem();\">$txtts7</a>&nbsp;&nbsp;<a rel=\"nofollow\" href=\"javascript:close_events_lazyloadingts_toppersystem();\">$txtts8</a></div><div id=\"block_save_details_loading_lazyloadingts_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></td></tr>";							
						}						
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
@add_action('init', @TopperSystemExecuteFilelazyloadingts::runts(), 2);
}
}

}
}
}
?>