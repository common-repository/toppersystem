<?php
if(isset($TopperSystemCpermFileinApi)){
if(!empty($TopperSystemCpermFileinApi)){
if($TopperSystemCpermFileinApi == "1234"){

if(isset($_POST["authcode_toppersystem"])) {
require("safeclass.php");

class TopperSystemSetFileSavePosCleanCachets {
    public static function setautoupdatets($autoupdate_service_save){
        $pathfilegeneral=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/api/par_service.php";

        $return="";

        $fileGeneral_ts="$pathfilegeneral";
        if(file_exists($fileGeneral_ts)){
            if(is_readable("$fileGeneral_ts")){
	            $old_permessi_file=substr(sprintf('%o', fileperms("$fileGeneral_ts")), -4);
            }else{
	            $old_permessi_file="";
            }
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
            if($autoupdate_service_save == "true"){
	            if(trim($general_toppersystem) != ""){
		            if(str_replace("\$par_activateautoupdatets_toppersystem=\"0\"","",$general_toppersystem) != "$general_toppersystem"){ 
			            $new_general_toppersystem=str_replace("\$par_activateautoupdatets_toppersystem=\"0\"","\$par_activateautoupdatets_toppersystem=\"1\"",$general_toppersystem);
			            if(trim($new_general_toppersystem) != trim($general_toppersystem)){
				            chmod($fileGeneral_ts,0644);
				            $textfilem_general_ts=fopen($fileGeneral_ts, "w");
				            $scrivi_general_ts=trim($new_general_toppersystem);
				            fwrite($textfilem_general_ts,$scrivi_general_ts);
				            fclose($textfilem_general_ts);
				            unset($textfilem_general_ts);
				            unset($scrivi_general_ts);
				            if($old_permessi_file == "0444"){
					            chmod($fileGeneral_ts,0444);
				            }
				            clearstatcache();
				            
				            $return="ok";
			            }
			            unset($new_general_toppersystem);
		            }
	            }else{
		            $return="$txtts5";
	            }
	            unset($old_permessi_file);
	            unset($general_toppersystem);
            }else if($autoupdate_service_save == "false"){
	            if(trim($general_toppersystem) != ""){
		            if(str_replace("\$par_activateautoupdatets_toppersystem=\"1\"","",$general_toppersystem) != "$general_toppersystem"){ 
			            $new_general_toppersystem=str_replace("\$par_activateautoupdatets_toppersystem=\"1\"","\$par_activateautoupdatets_toppersystem=\"0\"",$general_toppersystem);
			            if(trim($new_general_toppersystem) != trim($general_toppersystem)){
				            chmod($fileGeneral_ts,0644);
				            $textfilem_general_ts=fopen($fileGeneral_ts, "w");
				            $scrivi_general_ts=trim($new_general_toppersystem);
				            fwrite($textfilem_general_ts,$scrivi_general_ts);
				            fclose($textfilem_general_ts);
				            unset($textfilem_general_ts);
				            unset($scrivi_general_ts);
				            if($old_permessi_file == "0444"){
					            chmod($fileGeneral_ts,0444);
				            }
				            clearstatcache();
				            
				            $return="ok";
			            }
			            unset($new_general_toppersystem);
		            }
	            }else{
		            $return="$txtts5";
	            }
	            unset($old_permessi_file);
	            unset($general_toppersystem);					
            }else{
	            #niente
            }
        }
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
					    $fullname = ($dir . "/" . $name);					    
					    array_push ($list, $fullname);
					    if (is_dir ($fullname)){
						    TopperSystemSetFileSavePosCleanCachets::leggiDir ($list, $fullname);
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

    public static function extract_file_nelle_directory($directory){	    
	    $conta_occorrenze=0;	    
		$lista_trovati = array('lista_trovati' => null);
		$lista_path = array('lista_path' => null);		    
		TopperSystemSetFileSavePosCleanCachets::leggiDir ($lista_path, $directory);
		foreach ($lista_path as $path)
		{
            if(file_exists($path)){			    
			    $lista_trovati[$conta_occorrenze]=$path;
			    $conta_occorrenze++;		    			
            }
            $path="";
		}	    
	    if($conta_occorrenze == "0"){
		    $return=0;
	    }else{
		    $return=$lista_trovati;
	    }
	    $directory="";
	    $conta_occorrenze="";
	    if(is_array($lista_trovati)){$lista_trovati = array();}
	    if(is_array($lista_path)){$lista_path = array();}
	    return $return;
    }

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
						return "../"."../"."../"."..";
					}else{			
						#$path="../../";
                        $path="../";
						for($i=2;$i<=count(explode("/",str_replace("\\","/",__DIR__)));$i++){
							if(file_exists($path.$filename)){
								return substr($path, 0, strlen($path)-1);
							}
							$path.="../";
						}			
					}
				}
			}
			return false;
		}

		public static function searchfile($filename){
			if($filename != ""){
				if(file_exists($filename)){
					$handle = fopen($filename, "r");
					if (FALSE === $handle) {
						$contenuto_link_sito="";
					}else{
						$filesize=filesize($filename);
						if($filesize == 0){ 
							$contenuto_link_sito="";
						}else if(($filesize >= 1)&&($filesize <= 8192)){    
							$contenuto_link_sito=fread($handle, $filesize);
						}else{
							$contenuto_link_sito = '';
							while (!feof($handle)) {
								$contenuto_link_sito .= fread($handle, 8192);
							}
						}
						fclose($handle);
						unset($filesize);
					}
					unset($handle);
				}else{
					$contenuto_link_sito="";
				}
				unset($filename);
			}else{
				$contenuto_link_sito="";
			}
			return "$contenuto_link_sito";
		}

		public static function reset_file($fileoriginale,$newfile){
			$return="";
			
			if(($fileoriginale != "")&&($newfile != "")){
                $pathdirassets=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/assets/";

				$filename=TopperSystemSetFileSavePosCleanCachets::detect_pathfile().$fileoriginale;
				$filenamenew=$pathdirassets.$newfile;
				if(file_exists($filename)){
					if(is_readable($filename)){
						$old_permessi_file=substr(sprintf('%o', fileperms($filename)), -4);
					}else{
						$old_permessi_file="";
					}	
					
					if(file_exists($filenamenew)){
						chmod($filenamenew,0644);
						if(filemtime($filenamenew) >= filemtime($filename)){
							$contenuto_link_sito=TopperSystemSetFileSavePosCleanCachets::searchfile($filenamenew);					
							if(trim($contenuto_link_sito) != ""){		
								chmod($filename,0644);							
								$textfilem=fopen($filename, "w");
								fwrite($textfilem,$contenuto_link_sito);
								fclose($textfilem);
								if($old_permessi_file == "0444"){
									chmod($filename,0444);
								}
								
								@unlink($filenamenew);
								
								clearstatcache();
								$return="ok";
							}
							unset($contenuto_link_sito);
						}else{
							chmod($filenamenew,0644);
							@unlink($filenamenew);
						}
					}
				}
			}		
			return "$return";
		}

		public static function delete_js(){
            $pathfileminifyjs=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyJS.txt";

			$contenuto_link_sito=TopperSystemSetFileSavePosCleanCachets::searchfile($pathfileminifyjs);
			if($contenuto_link_sito != ""){
				$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
				$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
				unset($contenuto_link_sito);
				
				for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

					if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
						$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
						if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
							$go=TopperSystemSetFileSavePosCleanCachets::reset_file(explode("?",$part_url[0])[0],$part_url[1]);
						}
					}
				}
				if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
				unset($n_contenuto_file_index_toppersystem_array);
			}
			return "ok";		
		}

		public static function delete_css(){
            $pathfileminifycss=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/MinifyCSS.txt";

			$contenuto_link_sito=TopperSystemSetFileSavePosCleanCachets::searchfile($pathfileminifycss);
			
			if($contenuto_link_sito != ""){
				$contenuto_file_index_toppersystem_array=explode("\n",$contenuto_link_sito);
				$n_contenuto_file_index_toppersystem_array=count($contenuto_file_index_toppersystem_array);
				unset($contenuto_link_sito);
				
				for($i=0;$i<=$n_contenuto_file_index_toppersystem_array;$i++){

					if((isset($contenuto_file_index_toppersystem_array[$i]))&&(trim($contenuto_file_index_toppersystem_array[$i]) != "")){
						$part_url=explode("||||",trim($contenuto_file_index_toppersystem_array[$i]));
						if((isset($part_url[1]))&&(trim($part_url[1]) != "")){
							$go=TopperSystemSetFileSavePosCleanCachets::reset_file(explode("?",$part_url[0])[0],$part_url[1]);
						}
					}
				}
				if(is_array($contenuto_file_index_toppersystem_array)){$contenuto_file_index_toppersystem_array=array();}else{$contenuto_file_index_toppersystem_array="";}
				unset($n_contenuto_file_index_toppersystem_array);
			}
			return "ok";
		}
}



class TopperSystemFileSavePosCleanCachets {
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

	        if((isset($_POST["clean_cachets_service_save1_toppersystem_send"]) && trim($_POST["clean_cachets_service_save1_toppersystem_send"]) != "")) {
		        $clean_cachets_service_save1_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['clean_cachets_service_save1_toppersystem_send'])), array());	
	        }else{
		        $clean_cachets_service_save1_toppersystem="";
	        }

	        if((isset($_POST["clean_cachets_service_save2_toppersystem_send"]) && trim($_POST["clean_cachets_service_save2_toppersystem_send"]) != "")) {
		        $clean_cachets_service_save2_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['clean_cachets_service_save2_toppersystem_send'])), array());	
	        }else{
		        $clean_cachets_service_save2_toppersystem="";
	        }

	        if((isset($_POST["clean_cachets_service_save3_toppersystem_send"]) && trim($_POST["clean_cachets_service_save3_toppersystem_send"]) != "")) {
		        $clean_cachets_service_save3_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['clean_cachets_service_save3_toppersystem_send'])), array());	
	        }else{
		        $clean_cachets_service_save3_toppersystem="";
	        }

	        if((isset($_POST["clean_cachets_service_save4_toppersystem_send"]) && trim($_POST["clean_cachets_service_save4_toppersystem_send"]) != "")) {
		        $clean_cachets_service_save4_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['clean_cachets_service_save4_toppersystem_send'])), array());	
	        }else{
		        $clean_cachets_service_save4_toppersystem="";
	        }

	        if((isset($_POST["clean_cachets_service_save5_toppersystem_send"]) && trim($_POST["clean_cachets_service_save5_toppersystem_send"]) != "")) {
		        $clean_cachets_service_save5_toppersystem=wp_kses(trim(TopperSystemSafeNOSQL::sanitizeNosql($_POST['clean_cachets_service_save5_toppersystem_send'])), array());	
	        }else{
		        $clean_cachets_service_save5_toppersystem="";
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

			   $txtts3="Cancellazione della cache avvenuta con successo !";
			   $txtts4="Immagini ottimizzate";
			   $txtts5="Risorse javascript";
			   $txtts6="Risorse css";
			   $txtts7="Pagine ottimizzate";
			   $txtts8="File di log, indici e pagine ottimizzate";
            }else if($hreflang_toppersystem == "ar"){ 
		       $txtts0="تحقق من الأذونات لاستخدام نظام Topper System SEO"; 
               $txtts1="تحقق من الأذونات لاستخدام نظام Topper System SEO";
               $txtts2="حدث خطأ ما. تأكد من نسخ النموذج بشكل صحيح وحاول مرة أخرى.";
                $txtts3="تم مسح ذاكرة التخزين المؤقت بنجاح!";
                $txtts4​​="الصور محسنة";
                $txtts5="مصادر جافا سكريبت";
                $txtts6="موارد CSS";
                $txtts7="صفحات محسنة";
                $txtts8="ملفات السجل والفهارس والصفحات المحسنة";
            }else if($hreflang_toppersystem == "de"){ 
		       $txtts0="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO"; 
               $txtts1="Überprüfen Sie die Berechtigungen zur Verwendung des Topper System SEO";
               $txtts2="Etwas ist schief gelaufen. Stellen Sie sicher, dass Sie das Formular korrekt kopiert haben, und versuchen Sie es erneut.";
                $txtts3="Cache-Löschen erfolgreich!";
                $txtts4="Bilder optimiert";
                $txtts5="Javascript-Ressourcen";
                $txtts6="CSS-Ressourcen";
                $txtts7="Optimierte Seiten";
                $txtts8="Protokolldateien, Indizes und optimierte Seiten";
            }else if($hreflang_toppersystem == "es"){ 
		       $txtts0="Verifique los permisos para usar el Topper System SEO"; 
               $txtts1="Verifique los permisos para usar el Topper System SEO";
               $txtts2="Algo salió mal. Asegúrese de haber copiado correctamente el formulario e intente nuevamente.";
			   $txtts3="Rescate exitoso";
            }else if($hreflang_toppersystem == "fr"){ 
		       $txtts0="Vérifiez les autorisations pour utiliser le Topper System SEO"; 
               $txtts1="Vérifiez les autorisations pour utiliser le Topper System SEO";
               $txtts2="Quelque chose a mal tourné. Assurez-vous d'avoir correctement copié le formulaire et réessayez.";
                $txtts3="Effacement du cache réussi !";
                $txtts4="Images optimisées";
                $txtts5="ressources javascript";
                $txtts6="Ressources CSS";
                $txtts7="Pages optimisées";
                $txtts8="Fichiers journaux, index et pages optimisées";
            }else if($hreflang_toppersystem == "hi"){ 
		       $txtts0="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO"; 
               $txtts1="उपयोग करने के लिए अनुमतियों की जाँच करें Topper System SEO";
               $txtts2="कुछ गड़बड़ हो गई। सुनिश्चित करें कि आपने फ़ॉर्म को सही तरीके से कॉपी किया है और फिर से प्रयास करें।";
                $txtts3="कैश समाशोधन सफल!";
                $txtts4="छवियाँ अनुकूलित";
                $txtts5="जावास्क्रिप्ट संसाधन";
                $txtts6="सीएसएस संसाधन";
                $txtts7="अनुकूलित पृष्ठ";
                $txtts8="लॉग फ़ाइलें, अनुक्रमणिका और अनुकूलित पृष्ठ";
            }else if($hreflang_toppersystem == "ja"){ 
		       $txtts0="使用する権限を確認してください Topper System SEO"; 
               $txtts1="使用する権限を確認してください Topper System SEO";
               $txtts2="問題が発生しました。 フォームを正しくコピーしたことを確認して、もう一度お試しください。";
                $txtts3="キャッシュのクリアに成功しました!";
                $txtts4​​="画像の最適化";
                $txtts5="JavaScript リソース";
                $txtts6="CSS リソース";
                $txtts7="最適化されたページ";
                $txtts8="ログ ファイル、インデックス、最適化されたページ";
            }else if($hreflang_toppersystem == "pl"){ 
		       $txtts0="Sprawdź uprawnienia do korzystania z Topper System SEO"; 
               $txtts1="Sprawdź uprawnienia do korzystania z Topper System SEO";
               $txtts2="Coś poszło nie tak. Upewnij się, że poprawnie skopiowałeś formularz i spróbuj ponownie.";
                $txtts3="Czyszczenie pamięci podręcznej powiodło się!";
                $txtts4="Zoptymalizowane obrazy";
                $txtts5="zasoby javascript";
                $txtts6="Zasoby CSS";
                $txtts7="Zoptymalizowane strony";
                $txtts8="Pliki dziennika, indeksy i zoptymalizowane strony";
            }else if($hreflang_toppersystem == "pt"){ 
		       $txtts0="Verifique as permissões para usar o Topper System SEO"; 
               $txtts1="Verifique as permissões para usar o Topper System SEO";
               $txtts2="Algo deu errado. Verifique se você copiou corretamente o formulário e tente novamente.";
                $txtts3="Cache limpo com sucesso!";
                $txtts4="Imagens otimizadas";
                $txtts5="recursos javascript";
                $txtts6="Recursos CSS";
                $txtts7="Páginas otimizadas";
                $txtts8="Arquivos de log, índices e páginas otimizadas";
            }else if($hreflang_toppersystem == "ru"){ 
		       $txtts0="Проверьте разрешения на использование Topper System SEO"; 
               $txtts1="Проверьте разрешения на использование Topper System SEO";
               $txtts2="Что-то пошло не так Убедитесь, что вы правильно скопировали форму и повторите попытку.";
                $txtts3="Очистка кэша прошла успешно!";
                $txtts4="Изображения оптимизированы";
                $txtts5="ресурсы JavaScript";
                $txtts6="Ресурсы CSS";
                $txtts7="Оптимизированные страницы";
                $txtts8="Файлы журналов, индексы и оптимизированные страницы";
            }else if($hreflang_toppersystem == "zh"){ 
		       $txtts0="检查使用权限 Topper System SEO"; 
               $txtts1="检查使用权限 Topper System SEO";
               $txtts2="出了点问题。 确保您已正确复制表格，然后重试。";
                $txtts3="缓存清除成功！";
                $txtts4​​="图像已优化";
                $txtts5="javascript 资源";
                $txtts6="CSS 资源";
                $txtts7="优化页面";
                $txtts8="日志文件、索引和优化页面";
            }else if($hreflang_toppersystem == "he"){ 
		       $txtts0="Topper System SEO בדוק את ההרשאות לשימוש"; 
               $txtts1="Topper System SEO בדוק את ההרשאות לשימוש";
               $txtts2="משהו השתבש. וודא שהעתקת נכון את הטופס ונסה שוב.";
                $txtts3="ניקוי המטמון הצליח!";
                $txtts4="תמונות מותאמות";
                $txtts5="משאבי javascript";
                $txtts6="משאבי CSS";
                $txtts7="דפים מותאמים";
                $txtts8="קובצי יומן, אינדקסים ודפים מותאמים";
            }else if($hreflang_toppersystem == "la"){ 
		       $txtts0="Reprehendo permissions ut Topper System SEO"; 
               $txtts1="Reprehendo permissions ut Topper System SEO";
               $txtts2="Aliquid abiit iniuriam. Rursum fac recte copilato formam.";
                $txtts3="Cache clearing successful!";
                $txtts4="Images optimized";
                $txtts5="javascript resources";
                $txtts6="CSS Resources";
                $txtts7="Optimized pages";
                $txtts8="Log files, index and optimized pages";
            }else{   
		       $txtts0="Check the permissions to use the Topper System SEO"; 
               $txtts1="Check the permissions to use the Topper System SEO";
               $txtts2="Something went wrong. Make sure you have correctly copied the form and try again.";
                $txtts3="Cache clearing successful!";
                $txtts4="Images optimized";
                $txtts5="javascript resources";
                $txtts6="CSS Resources";
                $txtts7="Optimized pages";
                $txtts8="Log files, indexes and optimized pages";
            }

            $contenuto_link_sito_send="";

	        if((trim($canonical_toppersystem_send) != "")&&(trim($resend_toppersystem) != "")&&(trim($hreflang_toppersystem) != "")&&($clean_cachets_service_save1_toppersystem != "")&&($clean_cachets_service_save2_toppersystem != "")&&($clean_cachets_service_save3_toppersystem != "")&&($clean_cachets_service_save4_toppersystem != "")&&($clean_cachets_service_save5_toppersystem != "")){

                #inserire controllo autorizzazione
                $authcode_toppersystem_verifica=str_replace(md5("$canonical_toppersystem_send"),"",$authcode_toppersystem);
                if(($authcode_toppersystem_verifica != "")&&($authcode_toppersystem_verifica != "$authcode_toppersystem")){
                    $auth_memory=TopperSystemAuthTS::AuthTopperSystem();                
                    if(($authcode_toppersystem_verifica == "$auth_memory")){

                        $pathfilesavecleancachetoppersystem=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/log/SaveCleanCacheToppersystem.txt";                        

                        $return="";
                        $save="";

                        $savecleancache_toppersystem_ok="$clean_cachets_service_save1_toppersystem||||$clean_cachets_service_save2_toppersystem||||$clean_cachets_service_save3_toppersystem||||$clean_cachets_service_save4_toppersystem||||$clean_cachets_service_save5_toppersystem";

                        if(file_exists($pathfilesavecleancachetoppersystem)){
	                        if(is_readable("$pathfilesavecleancachetoppersystem")){
		                        $old_permessi_file=substr(sprintf('%o', fileperms("$pathfilesavecleancachetoppersystem")), -4);
	                        }else{
		                        $old_permessi_file="";
	                        }	
	                        
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
                        }else{
                            $savecleancache_toppersystem="";
                            $old_permessi_file="";
                        }

                        if(file_exists($pathfilesavecleancachetoppersystem)){
                            chmod($pathfilesavecleancachetoppersystem,0644);
                            $textfilem_general_ts=fopen($pathfilesavecleancachetoppersystem, "w");
                            $scrivi_general_ts=trim($savecleancache_toppersystem_ok);
                            fwrite($textfilem_general_ts,$scrivi_general_ts);
                            fclose($textfilem_general_ts);
                            unset($textfilem_general_ts);
                            unset($scrivi_general_ts);
                            if($old_permessi_file == "0444"){
                                chmod($pathfilesavecleancachetoppersystem,0444);
                            }
                        }else{
                            $textfilem_general_ts=fopen($pathfilesavecleancachetoppersystem, "w");
                            $scrivi_general_ts=trim($savecleancache_toppersystem_ok);
                            fwrite($textfilem_general_ts,$scrivi_general_ts);
                            fclose($textfilem_general_ts);
                            unset($textfilem_general_ts);
                            unset($scrivi_general_ts);
                            chmod($pathfilesavecleancachetoppersystem,0444); 
                        }

                        $start_cachets_service_save1_toppersystem="";
                        $start_cachets_service_save2_toppersystem="";
                        $start_cachets_service_save3_toppersystem="";
                        $start_cachets_service_save4_toppersystem="";
                        $start_cachets_service_save5_toppersystem="";

                        if($clean_cachets_service_save5_toppersystem == "true"){
                            $clean_cachets_service_save4_toppersystem="";
                            $start_cachets_service_save5_toppersystem="ok";
                            $save="1";                         
                        }
                        if($clean_cachets_service_save4_toppersystem == "true"){
                            $start_cachets_service_save4_toppersystem="ok";
                            $save="1";                      
                        }
                        if($clean_cachets_service_save3_toppersystem == "true"){
                            $start_cachets_service_save3_toppersystem="ok";
                            $save="1";                      
                        }
                        if($clean_cachets_service_save2_toppersystem == "true"){
                            $start_cachets_service_save2_toppersystem="ok";
                            $save="1";
                        }
                        if($clean_cachets_service_save1_toppersystem == "true"){
                            $start_cachets_service_save1_toppersystem="ok";
                            $save="1";
                        }

                        if($save == "1"){
                            #blocca gli aggiornamenti automatici in caso siano ailitati
                            if(TOPPERSYSTEM_PLUGIN_GET_activateautoupdatets == "1"){
                                $setautoupdate=@TopperSystemSetFileSavePosCleanCachets::setautoupdatets("false");
                                $auto_update_page_toppersystem="1";
                            }else{
                                $auto_update_page_toppersystem="0";
                            }
                        }


                        if($start_cachets_service_save1_toppersystem == "ok"){
                            #Rimuovi tutte le immagini ottimizzate

                            $upload_dir=TOPPERSYSTEM_UPLOAD_FILES_NOSQL;
                            if(file_exists($upload_dir."/toppersystem/nosql/img")){
                                $array_lista_file_img=TopperSystemSetFileSavePosCleanCachets::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/img");
                                if($array_lista_file_img != "0"){ 
                                    for($i=0;$i<=count($array_lista_file_img);$i++){
                                        if((isset($array_lista_file_img[$i]))&&(trim($array_lista_file_img[$i]) != "")){
                                            $filepath=str_replace("\\","/",trim($array_lista_file_img[$i]));
                                            $name_filepath=end(explode('/',$filepath));
                                            if(str_replace("htaccess","",$name_filepath) == "$name_filepath"){
                                                if(file_exists($filepath)){
                                                    chmod($upload_dir."/toppersystem/nosql/img/".$name_filepath,0644);
                                                    @unlink($filepath);     
                                                }
                                            }
                                            $filepath=""; 
                                            $name_filepath="";
                                        }
                                    }
                                    $array_lista_file_img=array();
                                }
                            }

                            $txtts3.="\n"."$txtts4";
                        }

                        if($start_cachets_service_save2_toppersystem == "ok"){
                            #Rimuovi tutte le risorse Javascript ottimizzate
                            $go=TopperSystemSetFileSavePosCleanCachets::delete_js();

                            $pathfileminifyjs=$upload_dir."/toppersystem/nosql"."/log/MinifyJS.txt";
                            if(file_exists($pathfileminifyjs)){
                                chmod($upload_dir."/toppersystem/nosql/log/MinifyJS.txt",0644); 
                                @unlink($pathfileminifyjs);                             
                            }

                            $txtts3.="\n"."$txtts5";                      
                        }

                        if($start_cachets_service_save3_toppersystem == "ok"){
                            #Rimuovi tutte le risorse CSS ottimizzate
                            $go=TopperSystemSetFileSavePosCleanCachets::delete_css();

                            $pathfileminifycss=$upload_dir."/toppersystem/nosql"."/log/MinifyCSS.txt";
                            if(file_exists($pathfileminifycss)){
                                chmod($upload_dir."/toppersystem/nosql/log/MinifyCSS.txt",0644); 
                                @unlink($pathfileminifycss);                              
                            }

                            $txtts3.="\n"."$txtts6";
                        }

                        if($start_cachets_service_save4_toppersystem == "ok"){
                            #Rimuovi tutte le pagine ottimizzate

                            $upload_dir=TOPPERSYSTEM_UPLOAD_FILES_NOSQL;
                            if(file_exists($upload_dir."/toppersystem/nosql/db")){
                                $array_lista_file_db=TopperSystemSetFileSavePosCleanCachets::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/db");
                                if($array_lista_file_db != "0"){ 
                                    for($i=0;$i<=count($array_lista_file_db);$i++){
                                        if((isset($array_lista_file_db[$i]))&&(trim($array_lista_file_db[$i]) != "")){
                                            $filepath=str_replace("\\","/",trim($array_lista_file_db[$i]));
                                            $name_filepath=end(explode('/',$filepath));
                                            if(str_replace("htaccess","",$name_filepath) == "$name_filepath"){
                                                if(file_exists($filepath)){
                                                    chmod($upload_dir."/toppersystem/nosql/db/".$name_filepath,0644);
                                                    @unlink($filepath);     
                                                }
                                            }
                                            $filepath=""; 
                                            $name_filepath="";
                                        }
                                    }
                                    $array_lista_file_db=array();
                                }
                            }
                            $txtts3.="\n"."$txtts7";
                        }

                        if($start_cachets_service_save5_toppersystem == "ok"){
                            #Rimuovi tutti i file di log, gli indici e le pagine ottimizzate

                            $upload_dir=TOPPERSYSTEM_UPLOAD_FILES_NOSQL;
                            if(file_exists($upload_dir."/toppersystem/nosql/db")){
                                $array_lista_file_db=TopperSystemSetFileSavePosCleanCachets::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/db");
                                if($array_lista_file_db != "0"){ 
                                    for($i=0;$i<=count($array_lista_file_db);$i++){
                                        if((isset($array_lista_file_db[$i]))&&(trim($array_lista_file_db[$i]) != "")){
                                            $filepath=str_replace("\\","/",trim($array_lista_file_db[$i]));
                                            $name_filepath=end(explode('/',$filepath));
                                            if(str_replace("htaccess","",$name_filepath) == "$name_filepath"){
                                                if(file_exists($filepath)){
                                                    chmod($upload_dir."/toppersystem/nosql/db/".$name_filepath,0644);
                                                    @unlink($filepath);     
                                                }
                                            }
                                            $filepath=""; 
                                            $name_filepath="";
                                        }
                                    }
                                    $array_lista_file_db=array();
                                }
                            }

                            if(file_exists($upload_dir."/toppersystem/nosql/log")){
                                $array_lista_file_log=TopperSystemSetFileSavePosCleanCachets::extract_file_nelle_directory($upload_dir."/toppersystem/nosql/log");
                                if($array_lista_file_log != "0"){ 
                                    for($i=0;$i<=count($array_lista_file_log);$i++){
                                        if((isset($array_lista_file_log[$i]))&&(trim($array_lista_file_log[$i]) != "")){
                                            $filepath=str_replace("\\","/",trim($array_lista_file_log[$i]));
                                            $name_filepath=end(explode('/',$filepath));
                                            if(str_replace(array("htaccess","IndexToppersystem.txt","SaveToppersystem.txt","MinifyJS.txt","MinifyCSS.txt","ActiveNoneResourceToppersystem.txt","SaveCleanCacheToppersystem.txt","ExcludeDeferToppersystem.txt","ActiveDeferToppersystem.txt","ActiveDelayJavascriptToppersystem.txt","ExcludeCSSToppersystem.txt","NoCSScriticalInline.txt","NoActiveCSSforStyle.txt"),"",$name_filepath) == "$name_filepath"){
                                                if(file_exists($filepath)){
                                                    chmod($upload_dir."/toppersystem/nosql/log/".$name_filepath,0644);
                                                    @unlink($filepath);     
                                                }
                                            }
                                            $filepath=""; 
                                            $name_filepath="";
                                        }
                                    }
                                    $array_lista_file_log=array();
                                }
                            }

                            $pathfileindex=$upload_dir."/toppersystem/nosql"."/log/IndexToppersystem.txt";
                            if(file_exists($pathfileindex)){
                                chmod($upload_dir."/toppersystem/nosql/log/IndexToppersystem.txt",0644);
                                $textfileindex=fopen($pathfileindex, "w");
                                fwrite($textfileindex,"");
                                fclose($textfileindex);                               
                            }

                            $pathfilesavetoppersystem=$upload_dir."/toppersystem/nosql"."/log/SaveToppersystem.txt";
                            if(file_exists($pathfilesavetoppersystem)){
                                chmod($upload_dir."/toppersystem/nosql/log/SaveToppersystem.txt",0644);
                                $textfilesave=fopen($pathfilesavetoppersystem, "w");
                                fwrite($textfilesave,"");
                                fclose($textfilesave);                               
                            }

                            $txtts3.="\n"."$txtts8";
                        }

                        if($save == "1"){
                            if($auto_update_page_toppersystem == "1"){
                                #riabilita gli aggiornamenti automatici
                                $setautoupdate=@TopperSystemSetFileSavePosCleanCachets::setautoupdatets("true");
                            }
                        }

                        if($save == "1"){
                            $return="$txtts3";
                        }
                
                        $contenuto_link_sito_send="$return";

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
@add_action('init', TopperSystemFileSavePosCleanCachets::runts(), 2);
}
}

}
}
}
?>