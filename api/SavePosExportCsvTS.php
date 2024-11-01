<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "0123"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileSavePosExportCsvts {
    public static function toppersystem_cleanup_min_and_decode_url($url){
        $array_url=explode("?",$url);
        if(isset($array_url["1"])){
            $return=str_replace("%2f","/",strtolower(urldecode($array_url["0"])));
            $return=str_replace("%3a",":",$return);
            $return=$return."?".$array_url["1"];
        }else{
            $return=str_replace("%2f","/",strtolower(urldecode("$url")));
            $return=str_replace("%3a",":",$return);        
        }
        $url="";
        return "$return";
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
        $url=str_replace(TopperSystemSetFileSavePosExportCsvts::result_domain_name($url),"",$url);
        return $url;
    }

    public static function validete_url_export($url_export) {

        $url_export=TopperSystemSetFileSavePosExportCsvts::toppersystem_cleanup_min_and_decode_url($url_export);

        if(str_replace("://","",$url_export) == "$url_export"){
            $url_export=TopperSystemSetFileSavePosExportCsvts::result_domain_name(site_url())."$url_export";
        }

        return "$url_export";
    }

    public static function verify_line($stringa){
	    $return=false;
	    if(trim($stringa) != ""){
		    $array_stringa=explode("||||",$stringa);
		    if(count($array_stringa) >= 3){			    
			    if(trim($array_stringa["0"]) != ""){
                    if(substr(trim($array_stringa["0"]), 0, 1) == "/"){
					    if(str_replace("start_new","",trim($array_stringa["1"])) != trim($array_stringa["1"])){
						    if(strlen(trim($array_stringa["2"])) == 19){
							    $return=true;
						    }
					    }
                    }
			    }
			    $array_stringa=array();
		    }
		    unset($stringa);
	    }
	    return $return;
    }

    public static function validete_string_import($string_import) {
        $ris2_array=explode("|",$string_import);
        $ris2="";
        for($i=0;$i<=count($ris2_array) + 1;$i++){
	        if((isset($ris2_array[$i]))&&(trim($ris2_array[$i]) != "")){
		        $ris2.=trim($ris2_array[$i])." | ";
		        
		        $ris2_array[$i]="";
	        }
        }
        $ris2_array=array();
        $ris2=trim($ris2);

        $ultimo_carattere=substr($ris2, strlen($ris2)-1);
        if($ultimo_carattere == "|"){
	        $ris2=substr($ris2, 0, strlen($ris2)-1);
        }
        return str_replace(array("\\\"","\""),"",$ris2);
    }

    public static function export_csv_in_toppersystem() {
        $contenuto_file_salvato_save="";

        $pathfileindex=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/IndexToppersystem.txt";
        $pathfilesavetoppersystem2=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveToppersystem";

        #INIZIO
        #salva stato su file index							
        $pathfileindex="$pathfileindex";
        if(file_exists($pathfileindex)){
            /*
            if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
                $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
                $part_url_transform2=site_url();
                $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);    
            }else{
                $canonical_toppersystem_send2="$canonical_toppersystem_send";    
            }
	        */
            $canonical_toppersystem_send2="$canonical_toppersystem_send";
        
	        $canonical_toppersystem_send_no_domain=TopperSystemSetFileSavePosExportCsvts::result_page_name_no_domain("$canonical_toppersystem_send2");
	        
	        if(filesize($pathfileindex) <= 8192){
		        $contenuto_file_index_toppersystem=@file_get_contents($pathfileindex);
	        }else{
		        $handle = fopen($pathfileindex, "r");
		        if (FALSE === $handle) {
			        $contenuto_file_index_toppersystem="";
		        }else{
			        $contenuto_file_index_toppersystem = '';
			        while (!feof($handle)) {
				         $contenuto_file_index_toppersystem .= fread($handle, 8192);
			        }
			        fclose($handle);
		        }
		        unset($handle);
	        }

	        $num_line_tot=0;
	        $contenuto_file_salvato_index="";								
	        $num_line_tot_preleva="";
	        $line_preleva="";
	        if(trim($contenuto_file_index_toppersystem != "")){	
		        
		        $contenuto_file_index_toppersystem_array=explode("\n",$contenuto_file_index_toppersystem);
		        $n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
		        unset($contenuto_file_index_toppersystem);							
		        for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){
			        if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){								
				        $line=trim($contenuto_file_index_toppersystem_array[$i]);
				        $part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]))["0"];
				        if($part_url != ""){
					           if(trim($line) != ""){
							        if(TopperSystemSetFileSavePosExportCsvts::verify_line(trim($line))){
								        $num_line_tot++;
							        }
					           }
				        }   
				        $part_url="";
				        $contenuto_file_index_toppersystem_array[$i]="";
			        }        
		        }
		        unset($n_contenuto_file_index_toppersystem_array);
		        if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}		

	        }
	        unset($contenuto_file_salvato_index);
	        $line_preleva="";
        }else{
	        $num_line_tot=0;
        }

        $nlinesave=40;
        $nmax_cicle=ceil(($num_line_tot) / $nlinesave);
        /*
        if(TOPPERSYSTEM_PLUGIN_TRANSFORM_SITE_URL == "1"){
            #$part_url_transform1=TopperSystemSetMainFunction::result_page_name_no_domain(TOPPERSYSTEM_PLUGIN_GET_SITE_URL);
            #$part_url_transform2=TopperSystemSetMainFunction::result_page_name_no_domain(site_url());
            $part_url_transform1=TOPPERSYSTEM_PLUGIN_GET_SITE_URL;
            $part_url_transform2=site_url();
            $canonical_toppersystem_send2=str_replace("$part_url_transform2","$part_url_transform1",$canonical_toppersystem_send);    
        }else{
            $canonical_toppersystem_send2="$canonical_toppersystem_send";    
        }
        */
        $canonical_toppersystem_send2="$canonical_toppersystem_send";

        $canonical_toppersystem_send_no_domain=TopperSystemSetFileSavePosExportCsvts::result_page_name_no_domain("$canonical_toppersystem_send2");
        $trovato="";
        $line_preleva="NO";

        for($nc=0;$nc<=$nmax_cicle;$nc++){
            if($nc == "0"){
	            $nc_w="";
            }else{
	            $nc_w="$nc";
            }
            $pathfilesave="$pathfilesavetoppersystem2$nc_w.txt";
            if(file_exists($pathfilesave)){
	            
	            if(filesize($pathfilesave) <= 8192){
		            $contenuto_file_salvato_toppersystem=@file_get_contents($pathfilesave);
	            }else{
		            $handle = fopen($pathfilesave, "r");
		            if (FALSE === $handle) {
			            $contenuto_file_salvato_toppersystem="";
		            }else{
			            $contenuto_file_salvato_toppersystem = '';
			            while (!feof($handle)) {
				             $contenuto_file_salvato_toppersystem .= fread($handle, 8192);
			            }
			            fclose($handle);
		            }
		            unset($handle);
	            }

	            $num_line_tot=0;	
	            $num_line_tot_preleva="";
	            $line_preleva="";
	            if(trim($contenuto_file_salvato_toppersystem != "")){	
		            
		            $contenuto_file_salvato_toppersystem_array=explode("\n",$contenuto_file_salvato_toppersystem);
		            $n_contenuto_file_salvato_toppersystem_array=count($contenuto_file_salvato_toppersystem_array);
		            unset($contenuto_file_salvato_toppersystem);							
		            for($i=0;$i<=$n_contenuto_file_salvato_toppersystem_array;$i++){
			            if((isset($contenuto_file_salvato_toppersystem_array[$i]))&&(trim($contenuto_file_salvato_toppersystem_array[$i]) != "")){
				            $line=trim($contenuto_file_salvato_toppersystem_array[$i]);
				            $part_url=explode("||||",trim($contenuto_file_salvato_toppersystem_array[$i]))["0"];
				            if($part_url != ""){
					            if(trim($line) != ""){ 
                                    $title_inpage_toppersystem="";
                                    $description_inpage_toppersystem="";
                                    $keywords_inpage_toppersystem="";

						            $part_file_array=explode("||||",trim($contenuto_file_salvato_toppersystem_array[$i]));

                                    if((isset($part_file_array["0"]))&&(trim($part_file_array["0"]) != "")){
                                        $url_toppersystem=TopperSystemSetFileSavePosExportCsvts::validete_url_export($part_file_array["0"]);

                                        if($url_toppersystem != ""){
                                            $array_get_inpage=TopperSystemSetMainFunction::toppersystem_get_info_page_optimized("$url_toppersystem");
                                            if($array_get_inpage["0"] != ""){
	                                            $title_inpage_toppersystem=$array_get_inpage["0"];
                                            }
                                            if($array_get_inpage["1"] != ""){
	                                            $description_inpage_toppersystem=$array_get_inpage["1"];
                                            }
                                            if($array_get_inpage["2"] != ""){
	                                            $keywords_inpage_toppersystem=$array_get_inpage["2"];
                                            }						
                                            $array_get_inpage=array();
                                        }

                                    }else{
                                        $url_toppersystem="";
                                    }
						                                
                                    if((isset($part_file_array["1"]))&&(trim($part_file_array["1"]) != "")){
                                        $language_toppersystem=$part_file_array["1"];
                                    }else{
                                        $language_toppersystem="";
                                    }

                                    if((isset($part_file_array["2"]))&&(trim($part_file_array["2"]) != "")){
                                        $title_toppersystem=$part_file_array["2"];
                                    }else{
                                        if($title_inpage_toppersystem != ""){
                                            $title_toppersystem="$title_inpage_toppersystem";
                                        }else{
                                            $title_toppersystem="";
                                        }
                                    }

                                    if((isset($part_file_array["4"]))&&(trim($part_file_array["4"]) != "")){
                                        $description_toppersystem=$part_file_array["4"];
                                    }else{
                                        if($description_inpage_toppersystem != ""){
                                            $description_toppersystem="$description_inpage_toppersystem";
                                        }else{
                                            $description_toppersystem="";
                                        }
                                    }

                                    if((isset($part_file_array["6"]))&&(trim($part_file_array["6"]) != "")){
                                        $keywords_toppersystem=$part_file_array["6"];
                                    }else{
                                        if($keywords_inpage_toppersystem != ""){
                                            $keywords_toppersystem="$keywords_inpage_toppersystem";
                                        }else{
                                            $keywords_toppersystem="";
                                        }
                                    }

                                    if((isset($part_file_array["8"]))&&(trim($part_file_array["8"]) != "")){
                                        $keyword_toppersystem=$part_file_array["8"];
                                    }else{
                                        $keyword_toppersystem="";
                                    }

                                    if((isset($part_file_array["9"]))&&(trim($part_file_array["9"]) != "")){
                                        $category_toppersystem=$part_file_array["9"];
                                    }else{
                                        $category_toppersystem="";
                                    }

                                    if((isset($part_file_array["10"]))&&(trim($part_file_array["10"]) != "")){
                                        $images_toppersystem=(int)$part_file_array["10"];
                                    }else{
                                        $images_toppersystem="0";
                                    }

                                    if((isset($part_file_array["11"]))&&(trim($part_file_array["11"]) != "")){
                                        $resolution_images_toppersystem=(int)$part_file_array["11"];
                                    }else{
                                        $resolution_images_toppersystem="76";
                                    }

                                    if((isset($part_file_array["12"]))&&(trim($part_file_array["12"]) != "")){
                                        $stronglazyload_images_toppersystem=(int)$part_file_array["12"];
                                    }else{
                                        $stronglazyload_images_toppersystem="0";
                                    }

                                    if((isset($part_file_array["13"]))&&(trim($part_file_array["13"]) != "")){
                                        $stronglazyload_video_toppersystem=(int)$part_file_array["13"];
                                    }else{
                                        $stronglazyload_video_toppersystem="1";
                                    }

                                    if((isset($part_file_array["14"]))&&(trim($part_file_array["14"]) != "")){
                                        $text_ia_toppersystem=(int)$part_file_array["14"];
                                    }else{
                                        $text_ia_toppersystem="0";
                                    }		

						            $contenuto_file_salvato_save.="\"$url_toppersystem\",\"$language_toppersystem\",\"$keyword_toppersystem\",\"$title_toppersystem\",\"$description_toppersystem\",\"$keywords_toppersystem\",\"$category_toppersystem\",\"$images_toppersystem\",\"$resolution_images_toppersystem\",\"$stronglazyload_images_toppersystem\",\"$stronglazyload_video_toppersystem\",\"$text_ia_toppersystem\"\n";
						            $num_line_tot++;
                                    $part_file_array=array();
					            }
				            }   
				            $part_url="";
				            $contenuto_file_salvato_toppersystem_array[$i]="";
			            }        
		            }
		            unset($n_contenuto_file_salvato_toppersystem_array);
		            if(is_array($contenuto_file_salvato_toppersystem_array)){$contenuto_file_salvato_toppersystem_array=array();}else{$contenuto_file_salvato_toppersystem_array="";}		

	            }	    
            }
        } 
        #FINE
        return "$contenuto_file_salvato_save";
    }
}
class TopperSystemExecuteFileSavePosExportCsvts {
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
			   $txtts3="Salvataggio avvenuto con successo";
               $txtts4="Le pagine web devono essere ottimizzate nuovamente";
               $txtts5="url";
               $txtts6="lingua (it-IT)";
               $txtts7="parola chiave principale";
               $txtts8="titolo";
               $txtts9="descrizione";
               $txtts10="parole chiave";
               $txtts11="categoria";
               $txtts12="ottimizzazione immagini(0-1-2)";
               $txtts14="risoluzione immagini(40-100)";
               $txtts15="delay immagini(0-1)";
               $txtts16="delay video(0-1)";
               $txtts17="title-description ia(0-1)";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
			   $txtts3="نجح الإنقاذ";
               $txtts4="تحتاج صفحات الويب إلى التحسين مرة أخرى";
               $txtts5="عنوان URL";
               $txtts6="اللغة (ar-AR)";
               $txtts7="الكلمة الرئيسية";
               $txtts8="عنوان";
               $txtts9="وصف";
               $txtts10="الكلمة الرئيسية";
               $txtts11="فئة";
               $txtts12="تحسين الصورة(0-1-2)";
               $txtts14="دقة الصورة (40-100)";
               $txtts15="تأخير الصورة (0-1)";
               $txtts16="تأخير الفيديو(0-1)";
               $txtts17="وصف العنوان ia(0-1)";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
			   $txtts3="Rettung erfolgreich";
               $txtts4="Webseiten müssen erneut optimiert werden";
               $txtts5="URL";
               $txtts6="Sprache (de-DE)";
               $txtts7="Hauptschlüsselwort";
               $txtts8="Titel";
               $txtts9="Beschreibung";
               $txtts10="Stichwort";
               $txtts11="Kategorie";
               $txtts12="Bildoptimierung (0-1-2)";
               $txtts14="Bildauflösung (40-100)";
               $txtts15="Bildverzögerung (0-1)";
               $txtts16="Videoverzögerung (0-1)";
               $txtts17="Titelbeschreibung ia(0-1)";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Rescate exitoso";
               $txtts4="Las páginas web deben optimizarse nuevamente";
               $txtts5="URL";
               $txtts6="idioma (es-ES)";
               $txtts7="palabra clave principal";
               $txtts8="título";
               $txtts9="descripción";
               $txtts10="palabra clave";
               $txtts11="categoría";
               $txtts12="optimización de imagen(0-1-2)";
               $txtts14="resolución de imagen (40-100)";
               $txtts15="retraso de imagen (0-1)";
               $txtts16="retraso de vídeo (0-1)";
               $txtts17="descripción del título ia(0-1)";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
			   $txtts3="Sauvetage réussi";
               $txtts4="Les pages Web doivent être à nouveau optimisées";
               $txtts5="URL";
               $txtts6="langue (fr-FR)";
               $txtts7="mot-clé principal";
               $txtts8="titre";
               $txtts9="description";
               $txtts10="mot-clé";
               $txtts11="catégorie";
               $txtts12="optimisation des images (0-1-2)";
               $txtts14="résolution d'image (40-100)";
               $txtts15="délai d'image (0-1)";
               $txtts16="délai vidéo (0-1)";
               $txtts17="titre-description ia(0-1)";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
			   $txtts3="बचाव सफल";
               $txtts4="वेब पेजों को फिर से अनुकूलित करने की आवश्यकता है";
               $txtts5="यूआरएल";
               $txtts6="भाषा (hi-IN)";
               $txtts7="मुख्य कीवर्ड";
               $txtts8="शीर्षक";
               $txtts9="विवरण";
               $txtts10="कीवर्ड";
               $txtts11="वर्ग";
               $txtts12="छवि अनुकूलन(0-1-2)";
               $txtts14="छवि रिज़ॉल्यूशन(40-100)";
               $txtts15="छवि विलंब(0-1)";
               $txtts16="वीडियो विलंब(0-1)";
               $txtts17="शीर्षक-विवरण ia(0-1)";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
			   $txtts3="レスキュー成功";
               $txtts4="Web ページを再度最適化する必要がある";
               $txtts5="URL";
               $txtts6="言語（ja-JP）";
               $txtts7="メインキーワード";
               $txtts8="タイトル";
               $txtts9="説明";
               $txtts10="キーワード";
               $txtts11="カテゴリー";
               $txtts12="画像の最適化(0-1-2)";
               $txtts14="画像解像度(40-100)";
               $txtts15="画像遅延(0-1)";
               $txtts16="ビデオ遅延(0-1)";
               $txtts17="タイトル-説明 ia(0-1)";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
			   $txtts3="Udało się ratować";
               $txtts4="Strony internetowe wymagają ponownej optymalizacji";
               $txtts5="adres URL";
               $txtts6="język (pl-PL)";
               $txtts7="główne słowo kluczowe";
               $txtts8="tytuł";
               $txtts9="opis";
               $txtts10="słowo kluczowe";
               $txtts11="Kategoria";
               $txtts12="optymalizacja obrazu(0-1-2)";
               $txtts14="rozdzielczość obrazu (40-100)";
               $txtts15="opóźnienie obrazu (0-1)";
               $txtts16="opóźnienie wideo (0-1)";
               $txtts17="tytuł-opis ia(0-1)";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
			   $txtts3="Resgate bem-sucedido";
               $txtts4="As páginas da web precisam ser otimizadas novamente";
               $txtts5="url";
               $txtts6="idioma (pt-PT)";
               $txtts7="palavra-chave principal";
               $txtts8="título";
               $txtts9="descrição";
               $txtts10="palavra-chave";
               $txtts11="categoria";
               $txtts12="otimização de imagem (0-1-2)";
               $txtts14="resolução da imagem (40-100)";
               $txtts15="atraso de imagem (0-1)";
               $txtts16="atraso de vídeo (0-1)";
               $txtts17="título-descrição ia(0-1)";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
			   $txtts3="Спасение прошло успешно";
               $txtts4="Веб-страницы необходимо снова оптимизировать";
               $txtts5="URL";
               $txtts6="язык (ru-RU)";
               $txtts7="главное ключевое слово";
               $txtts8="заголовок";
               $txtts9="описание";
               $txtts10="ключевое слово";
               $txtts11="категория";
               $txtts12="оптимизация изображения(0-1-2)";
               $txtts14="разрешение изображения (40-100)";
               $txtts15="задержка изображения (0-1)";
               $txtts16="задержка видео(0-1)";
               $txtts17="название-описание ia(0-1)";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
			   $txtts3="救援成功";
               $txtts4="网页需要再次优化";
               $txtts5="网址";
               $txtts6="语言（zh-CN）";
               $txtts7="主要关键词";
               $txtts8="标题";
               $txtts9="描述";
               $txtts10="关键词";
               $txtts11="类别";
               $txtts12="图像优化(0-1-2)";
               $txtts14="图像分辨率(40-100)";
               $txtts15="图像延迟(0-1)";
               $txtts16="视频延迟(0-1)";
               $txtts17="标题-描述 ia(0-1)";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
			   $txtts3="החילוץ הצליח";
               $txtts4="דפי אינטרנט צריכים לעבור אופטימיזציה שוב";
               $txtts5="כתובת אתר";
               $txtts6="שפה (he-IL)";
               $txtts7="מילת המפתח העיקרית";
               $txtts8="כותרת";
               $txtts9="תיאור";
               $txtts10="מילת מפתח";
               $txtts11="קטגוריה";
               $txtts12="אופטימיזציה של תמונה (0-1-2)";
               $txtts14="רזולוציית תמונה (40-100)";
               $txtts15="עיכוב תמונה (0-1)";
               $txtts16="עיכוב וידאו (0-1)";
               $txtts17="title-description ia(0-1)";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
			   $txtts3="Eripe felix";
               $txtts4="Paginae interretiales necesse est ut optimized iterum";
               $txtts5="url";
               $txtts6="lingua (la-VA)";
               $txtts7="principalis keyword";
               $txtts8="titulus";
               $txtts9="descriptio";
               $txtts10="keyword";
               $txtts11="genus";
               $txtts12="imago ipsum (0-1-2)";
               $txtts14="imago resolutio (40-100)";
               $txtts15="imago mora (0-1)";
               $txtts16="video mora (0-1)";
               $txtts17="title-descriptio ia (0-1)";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
			   $txtts3="Rescue successful";
               $txtts4="Web pages need to be optimized again";
               $txtts5="url";
               $txtts6="language (en-GB)";
               $txtts7="main keyword";
               $txtts8="title";
               $txtts9="description";
               $txtts10="keyword";
               $txtts11="category";
               $txtts12="image optimization(0-1-2)";
               $txtts14="image resolution(40-100)";
               $txtts15="image delay(0-1)";
               $txtts16="video delay(0-1)";
               $txtts17="title-description ia(0-1)";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){
                        $file_export="export_toppersystem_".date("Y-m-d-H-i").".csv";
                        $return="$file_export";                        
                        $file_export_ts=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/download/".$file_export;

                        $export="\"[*] $txtts5\",\"[*] $txtts6\",\"[*] $txtts7\",\"$txtts8\",\"$txtts9\",\"$txtts10\",\"$txtts11\",\"[*] $txtts12\",\"[*] $txtts14\",\"[*] $txtts15\",\"[*] $txtts16\",\"[*] $txtts17\"\n";
                        $export.=TopperSystemSetFileSavePosExportCsvts::export_csv_in_toppersystem();

                        $textfilex=fopen($file_export_ts, "w");          
                        fwrite($textfilex,$export);
                        fclose($textfilex);

                        $contenuto_link_sito_send="[startdownloadnow]$return";                        
                    }else{
		                $contenuto_link_sito_send="$txtts0";
	                }
                }else{
		            $contenuto_link_sito_send="$txtts1";
	            }
	        }else{
		        $contenuto_link_sito_send="$txtts2";
	        }

            echo wp_kses("$contenuto_link_sito_send", array());
        }
    }
}
}
}
if(( current_user_can( 'administrator' ) )){
@add_action('init', TopperSystemExecuteFileSavePosExportCsvts::runts(), 2);
}
}

}
}
}
?>