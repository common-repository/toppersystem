<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemExecuteFileclean_cachets {
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
			   $txtts8="Annulla"; //
			   $txtts3="Rimuovi tutte le immagini ottimizzate";
			   $txtts4="La copia delle immagini compresse saranno eliminate.";
			   $txtts5="Il processo di nuova ottimizzazione avviene in automatico durante il primo caricamento di ogni pagina ottimizzata";
			   $txtts6="Avvia il processo di rimozione della cache del plugin...";
			   $txtts7="Avvia";
			   $txtts9="Rimuovi tutte le risorse Javascript ottimizzate";
               $txtts10="Le risorse interne Javascript ottimizzate saranno cancellate e ripristinate allo stato iniziale.";
			   $txtts11="Il processo di nuova ottimizzazione delle risorse Javascript avviene durante la fase di ottimizzazione di ogni pagina.";			   
			   $txtts12="Rimuovi tutte le risorse CSS ottimizzate";
               $txtts14="Le risorse interne CSS ottimizzate saranno cancellate e ripristinate allo stato iniziale.";
			   $txtts15="Il processo di nuova ottimizzazione delle risorse CSS avviene durante la fase di ottimizzazione di ogni pagina.";
			   $txtts16="Rimuovi tutte le pagine ottimizzate";
			   $txtts17="Le pagine ottimizzate saranno cancellate e ripristinate allo stato iniziale.";
			   $txtts18="Terminato il processo potrai ottimizzare nuovamente le pagine del sito! In caso siano abilitati gli aggiornamenti automatici del servizio di ottimizzazione il primo avvio dovrai eseguirlo manualmente.";
			   $txtts19="Rimuovi tutti i file di log, gli indici e le pagine ottimizzate";
               $txtts20="I file di log, gli indici e le pagine ottimizzate saranno cancellati. Le pagine del sito saranno ripristinate allo stato iniziale.";
			   $txtts21="Il processo di nuova ottimizzazione delle pagine permetterà di ricostruire i file di log, gli indici e le pagine web.";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts8="يلغي";
                $txtts3="أزل كل الصور المحسنة";
                $txtts4​​="نسخ الصور المضغوطة سيتم حذفها.";
                $txtts5="تتم عملية إعادة التحسين تلقائيًا أثناء التحميل الأول لكل صفحة محسّنة";
                $txtts6="بدء عملية إزالة ذاكرة التخزين المؤقت للمكونات الإضافية ...";
                $txtts7="ابدأ";
                $txtts9="قم بإزالة كافة موارد جافا سكريبت المحسنة";
                $txtts10="سيتم حذف الموارد الداخلية المحسنة لجافا سكريبت واستعادتها إلى حالتها الأولية.";
                $txtts11="تحدث عملية إعادة تحسين موارد جافا سكريبت أثناء مرحلة التحسين لكل صفحة.";
                $txtts12="إزالة كافة أصول CSS المحسّنة";
                $txtts14="سيتم حذف موارد CSS الداخلية المحسنة وإعادتها إلى حالتها الأولية.";
                $txtts15="تحدث عملية إعادة تحسين موارد CSS أثناء مرحلة التحسين لكل صفحة.";
                $txtts16="إزالة كافة الصفحات المحسنة";
                $txtts17="سيتم حذف الصفحات المحسنة وإعادتها إلى حالتها الأولية.";
                $txtts18="في نهاية العملية ستتمكن من تحسين صفحات الموقع مرة أخرى! إذا تم تمكين التحديثات التلقائية لخدمة التحسين ، فسيتعين عليك تشغيلها يدويًا في المرة الأولى التي تبدأ فيها.";
                $txtts19="قم بإزالة كافة ملفات السجل والفهارس والصفحات المحسنة";
                $txtts20="سيتم حذف ملفات السجل والفهارس والصفحات المحسنة. ستتم إعادة صفحات الموقع إلى حالتها الأولية.";
                $txtts21="ستعيد عملية تحسين الصفحة الجديدة إنشاء ملفات السجل والفهارس وصفحات الويب.";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts8="Absagen";
                $txtts3="Alle optimierten Bilder entfernen";
                $txtts4="Kopierte komprimierte Bilder werden gelöscht.";
                $txtts5="Der Neuoptimierungsprozess findet automatisch beim ersten Laden jeder optimierten Seite statt";
                $txtts6="Plugin-Cache-Entfernungsprozess starten...";
                $txtts7="Start";
                $txtts9="Alle optimierten Javascript-Ressourcen entfernen";
                $txtts10="Die optimierten internen Javascript-Ressourcen werden gelöscht und in ihren ursprünglichen Zustand zurückversetzt.";
                $txtts11="Der Prozess der Neuoptimierung von Javascript-Ressourcen findet während der Optimierungsphase jeder Seite statt.";
                $txtts12="Alle optimierten CSS-Ressourcen entfernen";
                $txtts14="Die optimierten internen CSS-Ressourcen werden gelöscht und in ihren ursprünglichen Zustand zurückversetzt.";
                $txtts15="Der Prozess der Neuoptimierung von CSS-Ressourcen findet während der Optimierungsphase jeder Seite statt.";
                $txtts16="Alle optimierten Seiten entfernen";
                $txtts17="Die optimierten Seiten werden gelöscht und in ihren ursprünglichen Zustand zurückversetzt.";
                $txtts18="Am Ende des Prozesses können Sie die Seiten der Website erneut optimieren! Wenn die automatischen Updates des Optimierungsdienstes aktiviert sind, müssen Sie ihn beim ersten Start manuell ausführen.";
                $txtts19="Alle Protokolldateien, Indizes und optimierten Seiten entfernen";
                $txtts20="Protokolldateien, Indizes und optimierte Seiten werden gelöscht. Die Seiten der Website werden in ihrem ursprünglichen Zustand wiederhergestellt.";
                $txtts21="Der neue Seitenoptimierungsprozess erstellt Protokolldateien, Indizes und Webseiten neu.";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts8="Cancelar";
                $txtts3="Eliminar todas las imágenes optimizadas";
                $txtts4="Las imágenes comprimidas copiadas serán eliminadas.";
                $txtts5="El proceso de reoptimización se lleva a cabo automáticamente durante la primera carga de cada página optimizada";
                $txtts6="Iniciar proceso de eliminación de caché del complemento...";
                $txtts7="Inicio";
                $txtts9="Eliminar todos los recursos optimizados de Javascript";
                $txtts10="Los recursos internos optimizados de Javascript serán eliminados y restaurados a su estado inicial.";
                $txtts11="El proceso de reoptimización de los recursos Javascript ocurre durante la fase de optimización de cada página.";
                $txtts12="Eliminar todos los recursos CSS optimizados";
                $txtts14="Los recursos internos CSS optimizados serán eliminados y restaurados a su estado inicial.";
                $txtts15="El proceso de reoptimización de los recursos CSS ocurre durante la fase de optimización de cada página.";
                $txtts16="Eliminar todas las páginas optimizadas";
                $txtts17="Las páginas optimizadas serán eliminadas y restauradas a su estado inicial.";
                $txtts18="¡Al final del proceso podrá optimizar las páginas del sitio nuevamente! Si las actualizaciones automáticas del servicio de optimización están habilitadas, deberá ejecutarlo manualmente la primera vez que lo inicie.";
                $txtts19="Eliminar todos los archivos de registro, índices y páginas optimizadas";
                $txtts20="Los archivos de registro, los índices y las páginas optimizadas se eliminarán. Las páginas del sitio se restaurarán a su estado inicial.";
                $txtts21="El nuevo proceso de optimización de páginas reconstruirá archivos de registro, índices y páginas web."; 
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts8="Annuler";
                $txtts3="Supprimer toutes les images optimisées";
                $txtts4="Les images compressées copiées seront supprimées.";
                $txtts5="Le processus de ré-optimisation se déroule automatiquement lors du premier chargement de chaque page optimisée";
                $txtts6="Démarrer le processus de suppression du cache du plugin...";
                $txtts7="Démarrer";
                $txtts9="Supprimer toutes les ressources Javascript optimisées";
                $txtts10="Les ressources internes Javascript optimisées seront supprimées et restaurées à leur état initial.";
                $txtts11="Le processus de réoptimisation des ressources Javascript se produit pendant la phase d'optimisation de chaque page.";
                $txtts12="Supprimer tous les éléments CSS optimisés";
                $txtts14="Les ressources internes CSS optimisées seront supprimées et restaurées à leur état initial.";
                $txtts15="Le processus de réoptimisation des ressources CSS se produit pendant la phase d'optimisation de chaque page.";
                $txtts16="Supprimer toutes les pages optimisées";
                $txtts17="Les pages optimisées seront supprimées et restaurées à leur état initial.";
                $txtts18="A la fin du processus vous pourrez à nouveau optimiser les pages du site ! Si les mises à jour automatiques du service d'optimisation sont activées, au premier démarrage vous devrez le lancer manuellement.";
                $txtts19="Supprimer tous les fichiers journaux, index et pages optimisées";
                $txtts20="Les fichiers journaux, les index et les pages optimisées seront supprimés. Les pages du site seront restaurées à leur état initial.";
                $txtts21="Le nouveau processus d'optimisation des pages reconstruira les fichiers journaux, les index et les pages Web.";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts8="रद्द करना";
                $txtts3="सभी अनुकूलित छवियाँ हटाएँ";
                $txtts4="संपीड़ित छवियों की प्रतिलिपि हटा दी जाएगी।";
                $txtts5="पुन: अनुकूलन प्रक्रिया प्रत्येक अनुकूलित पृष्ठ की पहली लोडिंग के दौरान स्वचालित रूप से होती है";
                $txtts6="प्लगइन कैश हटाने की प्रक्रिया प्रारंभ करें...";
                $txtts7="प्रारंभ करें";
                $txtts9="सभी अनुकूलित जावास्क्रिप्ट संसाधन हटाएँ";
                $txtts10="अनुकूलित जावास्क्रिप्ट आंतरिक संसाधनों को हटा दिया जाएगा और उनकी प्रारंभिक स्थिति में पुनर्स्थापित किया जाएगा।";
                $txtts11="जावास्क्रिप्ट संसाधनों को पुनः अनुकूलित करने की प्रक्रिया प्रत्येक पृष्ठ के अनुकूलन चरण के दौरान होती है।";
                $txtts12="सभी अनुकूलित सीएसएस परिसंपत्तियाँ हटाएँ";
                $txtts14="अनुकूलित सीएसएस आंतरिक संसाधनों को हटा दिया जाएगा और उनकी प्रारंभिक स्थिति में पुनर्स्थापित किया जाएगा।";
                $txtts15="सीएसएस संसाधनों को पुनः अनुकूलित करने की प्रक्रिया प्रत्येक पृष्ठ के अनुकूलन चरण के दौरान होती है।";
                $txtts16="सभी अनुकूलित पृष्ठ हटाएँ";
                $txtts17="अनुकूलित पृष्ठ हटा दिये जायेंगे और उनकी प्रारंभिक स्थिति में पुनर्स्थापित कर दिये जायेंगे।";
                $txtts18="प्रक्रिया के अंत में आप साइट पृष्ठों को फिर से अनुकूलित करने में सक्षम होंगे! यदि अनुकूलन सेवा के स्वचालित अपडेट सक्षम हैं, तो आपको इसे पहली बार शुरू करते समय मैन्युअल रूप से चलाना होगा।";
                $txtts19="सभी लॉग फ़ाइलें, अनुक्रमणिका और अनुकूलित पृष्ठ हटाएँ";
                $txtts20="लॉग फ़ाइलें, अनुक्रमणिका और अनुकूलित पृष्ठ हटा दिए जाएंगे। साइट पृष्ठ उनकी प्रारंभिक स्थिति में पुनर्स्थापित कर दिए जाएंगे।";
                $txtts21="नई पेज अनुकूलन प्रक्रिया लॉग फ़ाइलों, इंडेक्स और वेब पेजों का पुनर्निर्माण करेगी।";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts8="キャンセル";
                $txtts3="最適化された画像をすべて削除します";
                $txtts4​​="圧縮された画像のコピーは削除されます。";
                $txtts5="再最適化プロセスは、最適化された各ページの最初の読み込み中に自動的に行われます。";
                $txtts6="プラグイン キャッシュの削除プロセスを開始します...";
                $txtts7="開始";
                $txtts9="最適化された Javascript リソースをすべて削除します";
                $txtts10="最適化された Javascript 内部リソースは削除され、初期状態に復元されます。";
                $txtts11="JavaScript リソースを再最適化するプロセスは、各ページの最適化フェーズ中に発生します。";
                $txtts12="最適化された CSS リソースをすべて削除します";
                $txtts14="最適化された CSS 内部リソースは削除され、初期状態に復元されます。";
                $txtts15="CSS リソースを再最適化するプロセスは、各ページの最適化フェーズ中に発生します。";
                $txtts16="最適化されたページをすべて削除";
                $txtts17="最適化されたページは削除され、初期状態に復元されます。";
                $txtts18="プロセスの最後に、サイト ページを再び最適化できるようになります! 最適化サービスの自動更新が有効になっている場合は、初めて開始するときに手動で実行する必要があります。";
                $txtts19="すべてのログ ファイル、インデックス、最適化されたページを削除します";
                $txtts20="ログ ファイル、インデックス、最適化されたページは削除されます。サイト ページは初期状態に復元されます。";
                $txtts21="新しいページ最適化プロセスにより、ログ ファイル、インデックス、Web ページが再構築されます。";


            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts8="Anulować";
                $txtts3="Usuń wszystkie zoptymalizowane obrazy";
                $txtts4="Kopiowane obrazy skompresowane zostaną usunięte.";
                $txtts5="Proces ponownej optymalizacji odbywa się automatycznie podczas pierwszego ładowania każdej zoptymalizowanej strony";
                $txtts6="Rozpocznij proces usuwania pamięci podręcznej wtyczek...";
                $txtts7="Start";
                $txtts9="Usuń wszystkie zoptymalizowane zasoby Javascript";
                $txtts10="Zoptymalizowane wewnętrzne zasoby Javascript zostaną usunięte i przywrócone do stanu początkowego.";
                $txtts11="Proces ponownej optymalizacji zasobów Javascript ma miejsce podczas fazy optymalizacji każdej strony.";
                $txtts12="Usuń wszystkie zoptymalizowane zasoby CSS";
                $txtts14="Zoptymalizowane wewnętrzne zasoby CSS zostaną usunięte i przywrócone do stanu początkowego.";
                $txtts15="Proces ponownej optymalizacji zasobów CSS ma miejsce podczas fazy optymalizacji każdej strony.";
                $txtts16="Usuń wszystkie zoptymalizowane strony";
                $txtts17="Zoptymalizowane strony zostaną usunięte i przywrócone do stanu początkowego.";
                $txtts18="Pod koniec procesu będziesz mógł ponownie optymalizować strony witryny! Jeśli automatyczne aktualizacje usługi optymalizacji są włączone, przy pierwszym uruchomieniu będziesz musiał uruchomić ją ręcznie.";
                $txtts19="Usuń wszystkie pliki dziennika, indeksy i zoptymalizowane strony";
                $txtts20="Pliki dziennika, indeksy i zoptymalizowane strony zostaną usunięte. Strony witryny zostaną przywrócone do stanu początkowego.";
                $txtts21="Nowy proces optymalizacji strony odbuduje pliki dziennika, indeksy i strony internetowe.";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts8="Cancelar";
                $txtts3="Remover todas as imagens otimizadas";
                $txtts4="Copiar imagens compactadas será deletado.";
                $txtts5="O processo de reotimização ocorre automaticamente durante o primeiro carregamento de cada página otimizada";
                $txtts6="Iniciar o processo de remoção do cache do plug-in...";
                $txtts7="Iniciar";
                $txtts9="Remover todos os recursos Javascript otimizados";
                $txtts10="Os recursos internos Javascript otimizados serão excluídos e restaurados ao seu estado inicial.";
                $txtts11="O processo de reotimização dos recursos Javascript ocorre durante a fase de otimização de cada página.";
                $txtts12="Remover todos os ativos CSS otimizados";
                $txtts14="Os recursos internos de CSS otimizados serão excluídos e restaurados ao seu estado inicial.";
                $txtts15="O processo de reotimização dos recursos CSS ocorre durante a fase de otimização de cada página.";
                $txtts16="Remover todas as páginas otimizadas";
                $txtts17="As páginas otimizadas serão excluídas e restauradas ao seu estado inicial.";
                $txtts18="Ao final do processo você poderá otimizar as páginas do site novamente! Se as atualizações automáticas do serviço de otimização estiverem habilitadas, você deverá executá-lo manualmente na primeira vez que o iniciar.";
                $txtts19="Remover todos os arquivos de log, índices e páginas otimizadas";
                $txtts20="Arquivos de log, índices e páginas otimizadas serão excluídos. As páginas do site serão restauradas ao seu estado inicial.";
                $txtts21="O novo processo de otimização de página irá reconstruir arquivos de log, índices e páginas da web."; 
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts8="Отмена";
                $txtts3="Удалить все оптимизированные изображения";
                $txtts4="Копировать сжатые изображения будут удалены.";
                $txtts5="Процесс повторной оптимизации происходит автоматически при первой загрузке каждой оптимизированной страницы";
                $txtts6="Начать процесс удаления кеша плагинов...";
                $txtts7="Начать";
                $txtts9="Удалить все оптимизированные ресурсы Javascript";
                $txtts10="Оптимизированные внутренние ресурсы Javascript будут удалены и восстановлены до исходного состояния.";
                $txtts11="Процесс повторной оптимизации ресурсов Javascript происходит на этапе оптимизации каждой страницы.";
                $txtts12="Удалить все оптимизированные ресурсы CSS";
                $txtts14="Оптимизированные внутренние ресурсы CSS будут удалены и возвращены в исходное состояние.";
                $txtts15="Процесс повторной оптимизации ресурсов CSS происходит на этапе оптимизации каждой страницы.";
                $txtts16="Удалить все оптимизированные страницы";
                $txtts17="Оптимизированные страницы будут удалены и возвращены в исходное состояние.";
                $txtts18="По окончании процесса вы снова сможете оптимизировать страницы сайта! Если включены автоматические обновления службы оптимизации, вам придется запускать ее вручную при первом запуске.";
                $txtts19="Удалить все файлы журналов, индексы и оптимизированные страницы";
                $txtts20="Файлы журналов, индексы и оптимизированные страницы будут удалены. Страницы сайта будут восстановлены в исходное состояние.";
                $txtts21="Новый процесс оптимизации страниц перестроит файлы журналов, индексы и веб-страницы."; 
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts8="取消";
                $txtts3="删除所有优化图像";
                $txtts4​​="复制压缩图片将被删除。";
                $txtts5="重新优化过程在每个优化页面首次加载期间自动进行";
                $txtts6="开始插件缓存删除过程...";
                $txtts7="开始";
                $txtts9="删除所有优化的Javascript资源";
                $txtts10="优化后的Javascript内部资源将被删除并恢复到初始状态。";
                $txtts11="重新优化Javascript资源的过程发生在每个页面的优化阶段。";
                $txtts12="删除所有优化的 CSS 资源";
                $txtts14="优化后的CSS内部资源将被删除并恢复到初始状态。";
                $txtts15="重新优化CSS资源的过程发生在每个页面的优化阶段。";
                $txtts16="删除所有优化页面";
                $txtts17="优化后的页面将被删除并恢复到初始状态。";
                $txtts18="在该过程结束时，您将能够再次优化网站页面！如果启用了优化服务的自动更新，则您必须在第一次启动时手动运行它。";
                $txtts19="删除所有日志文件、索引和优化页面";
                $txtts20="日志文件、索引和优化页面将被删除。网站页面将恢复到初始状态。";
                $txtts21="新的页面优化过程将重建日志文件、索引和网页。";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts8="לְבַטֵל";
                $txtts3="הסר את כל התמונות שעברו אופטימיזציה";
                $txtts4="העתקת תמונות דחוסות תימחק.";
                $txtts5="תהליך האופטימיזציה מחדש מתרחש באופן אוטומטי במהלך הטעינה הראשונה של כל עמוד שעבר אופטימיזציה";
                $txtts6="התחל תהליך הסרת מטמון תוסף...";
                $txtts7="התחל";
                $txtts9="הסר את כל משאבי Javascript שעברו אופטימיזציה";
                $txtts10="המשאבים הפנימיים המותאמים של Javascript יימחקו וישוחזרו למצבם ההתחלתי.";
                $txtts11="התהליך של אופטימיזציה מחדש של משאבי Javascript מתרחש במהלך שלב האופטימיזציה של כל עמוד.";
                $txtts12="הסר את כל נכסי ה-CSS שעברו אופטימיזציה";
                $txtts14="משאבי ה-CSS הפנימיים האופטימליים יימחקו וישוחזרו למצבם ההתחלתי.";
                $txtts15="התהליך של אופטימיזציה מחדש של משאבי CSS מתרחש במהלך שלב האופטימיזציה של כל עמוד.";
                $txtts16="הסר את כל הדפים שעברו אופטימיזציה";
                $txtts17="הדפים שעברו אופטימיזציה יימחקו וישוחזרו למצבם ההתחלתי.";
                $txtts18="בסוף התהליך תוכל לבצע שוב אופטימיזציה של דפי האתר! אם העדכונים האוטומטיים של שירות האופטימיזציה מופעלים, בהתחלה הראשונה תצטרך להפעיל אותו באופן ידני.";
                $txtts19="הסר את כל קובצי היומן, האינדקסים והדפים שעברו אופטימיזציה";
                $txtts20="קובצי יומן, אינדקסים ודפים מותאמים יימחקו. דפי האתר ישוחזרו למצבם ההתחלתי.";
                $txtts21="תהליך אופטימיזציית הדפים החדש יבנה מחדש קובצי יומן, אינדקסים ודפי אינטרנט.";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts8="Cancel";
                $txtts3="Remove omnes optimized imagines";
                $txtts4="Copy imagines compressae delebuntur";
                $txtts5="Processus re-optimizationis statim fit in prima cuiusque paginae oneratione optimized";
                $txtts6="Incipit plugin cache remotionem processus...";
                $txtts7="Start";
                $txtts9="Remove omnes optimized Javascript resources";
                $txtts10="Opum internorum Javascript optimized ad statum suum initialem delebitur et restituetur";
                $txtts11="Processus subsidiorum Javascript re-optimisandi occurs in optimizatione cuiusque paginae";
                $txtts12="Remove omnes optimized CSS opes";
                $txtts14="Opum internorum optimized CSS delebitur et in statum suum pristinum restituetur".
                $txtts15="Processus subsidiorum re-optimizationis CSS occurs in optimizatione cuiusque paginae";
                $txtts16="Remove omnes paginas optimized";
                $txtts17="Paginae optimizedis delebuntur et in statum suum pristinum restituentur.";
                $txtts18="In fine processus paginas rursus optimize poteris! Si automatariae updates servitii optimiizationis dandae sunt, illud manually primum quod incipis, currere debebis";
                $txtts19="Remove omnes tabulas logas, indices et paginas optimized";
                $txtts20="Liciculi, indices et paginae optimized delebuntur. Paginae in initiali restituentur";
                $txtts21="Novus pagina optimization processus tabulas logas, indices et paginas reaedificabit.";	   
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts8="Cancel";
                $txtts3="Remove all optimized images";
                $txtts4="Copy compressed images will be deleted.";
                $txtts5="The re-optimization process takes place automatically during the first loading of each optimized page";
                $txtts6="Start plugin cache removal process...";
                $txtts7="Start";
                $txtts9="Remove all optimized Javascript resources";
                $txtts10="The optimized Javascript internal resources will be deleted and restored to their initial state.";
                $txtts11="The process of re-optimizing Javascript resources occurs during the optimization phase of each page.";
                $txtts12="Remove all optimized CSS assets";
                $txtts14="The optimized CSS internal resources will be deleted and restored to their initial state.";
                $txtts15="The process of re-optimizing CSS resources occurs during the optimization phase of each page.";
                $txtts16="Remove all optimized pages";
                $txtts17="The optimized pages will be deleted and restored to their initial state.";
                $txtts18="At the end of the process you will be able to optimize the pages of the site again! If the automatic updates of the optimization service are enabled, the first start you will have to run it manually.";
                $txtts19="Remove all log files, indexes and optimized pages";
                $txtts20="Log files, indexes and optimized pages will be deleted. Site pages will be restored to their initial state.";
                $txtts21="The new page optimization process will rebuild log files, indexes and web pages.";
            }
			
            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){                    
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){
                        $pathfilesavecleancachetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveCleanCacheToppersystem.txt";  


                        $fileCleanCache_ts="$pathfilesavecleancachetoppersystem";
						if(file_exists($fileCleanCache_ts)){

                            $check_save1="";
                            $check_save2="";
                            $check_save3="";
                            $check_save4="";
                            $check_save5="";
	                        
	                        $handle_savecleancache = fopen($pathfilesavecleancachetoppersystem, "r");
	                        if (FALSE === $handle_savecleancache) {
		                        $savecleancache_toppersystem="";
	                        }else{
		                        $savecleancache_toppersystem = '';
		                        while (!feof($handle_savecleancache)) {
			                        $savecleancache_toppersystem .= fread($handle_savecleancache, 8192);
		                        }
		                        fclose($handle_savecleancache);
	                        }
	                        unset($handle_savecleancache);

                            if(trim($savecleancache_toppersystem) != ""){
                                $array_savecleancache_toppersystem=explode("||||",$savecleancache_toppersystem);
                                if(count($array_savecleancache_toppersystem) == "5"){
                                    if($array_savecleancache_toppersystem["0"] == "true"){
                                        $check_save1=" checked";
                                    }

                                    if($array_savecleancache_toppersystem["1"] == "true"){
                                        $check_save2=" checked";
                                    }

                                    if($array_savecleancache_toppersystem["2"] == "true"){
                                        $check_save3=" checked";
                                    }

                                    if($array_savecleancache_toppersystem["3"] == "true"){
                                        $check_save4=" checked";
                                    }

                                    if($array_savecleancache_toppersystem["4"] == "true"){
                                        $check_save5=" checked";
                                    }

                                }
                            }

						}else{
                            $check_save1="";
                            $check_save2="";
                            $check_save3="";
                            $check_save4="";
                            $check_save5="";
						}
						unset($fileCleanCache_ts);

                        $n_add_position="1";
                        $check_save="$check_save1";
                        $add_position="<tr><td class=\"eventstd_ts\"><strong>$txtts3</strong><br>$txtts4<br><small><i>$txtts5</i></small><br></td><td class=\"eventstd_ts\"><center><input id=\"clean_cachets_service_save$n_add_position\" name=\"clean_cachets_service_save$n_add_position\" type=\"checkbox\" $check_save></center></td></tr>";

                        $n_add_position="2";
                        $check_save="$check_save2";
                        $add_position.="<tr><td class=\"eventstd_ts\"><strong>$txtts9</strong><br>$txtts10<br><small><i>$txtts11</i></small><br></td><td class=\"eventstd_ts\"><center><input id=\"clean_cachets_service_save$n_add_position\" name=\"clean_cachets_service_save$n_add_position\" type=\"checkbox\" $check_save></center></td></tr>";

                        $n_add_position="3";
                        $check_save="$check_save3";
                        $add_position.="<tr><td class=\"eventstd_ts\"><strong>$txtts12</strong><br>$txtts14<br><small><i>$txtts15</i></small><br></td><td class=\"eventstd_ts\"><center><input id=\"clean_cachets_service_save$n_add_position\" name=\"clean_cachets_service_save$n_add_position\" type=\"checkbox\" $check_save></center></td></tr>";

                        $n_add_position="4";
                        $check_save="$check_save4";
                        $add_position.="<tr><td class=\"eventstd_ts\"><strong>$txtts16</strong><br>$txtts17<br></td><td class=\"eventstd_ts\"><center><input id=\"clean_cachets_service_save$n_add_position\" name=\"clean_cachets_service_save$n_add_position\" type=\"checkbox\" $check_save></center></td></tr>";

                        $n_add_position="5";
                        $check_save="$check_save5";
                        $add_position.="<tr><td class=\"eventstd_ts\"><strong>$txtts19</strong><br>$txtts20<br><small><i>$txtts21</i></small><br></td><td class=\"eventstd_ts\"><center><input id=\"clean_cachets_service_save$n_add_position\" name=\"clean_cachets_service_save$n_add_position\" type=\"checkbox\" $check_save></center></td></tr>";

                        $add_save="<tr><td class=\"eventstd_ts\"><small>$txtts6<br>$txtts18</small></td><td class=\"eventstd_ts\" style=\"width:20%;\"><center><div id=\"block_save_details_clean_cachets_toppersystem\" class=\"\"><a rel=\"nofollow\" href=\"javascript:save_events_clean_cachets_toppersystem();\">$txtts7</a>&nbsp;&nbsp;<a rel=\"nofollow\" href=\"javascript:close_events_clean_cachets_toppersystem();\">$txtts8</a></div><div id=\"block_save_details_loading_clean_cachets_toppersystem\" class=\"display_none_ts\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></center></td></tr></table></div></td></tr>";
							
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
@add_action('init', @TopperSystemExecuteFileclean_cachets::runts(), 2);
}
}

}
}
}
?>