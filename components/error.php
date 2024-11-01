<?php
if(isset($TopperSystemCpermErrorServer)){
	if(!empty($TopperSystemCpermErrorServer)){
		if($TopperSystemCpermErrorServer == "31415926535"){
			class TopperSystemRunError {
				public static function toppersystemrun(){	
                    add_action( 'admin_notices', function() {
                        if(( current_user_can( 'administrator' ) )){
				            if(get_locale() != ""){        
					            $hreflang_toppersystem=strtolower(explode("-",str_replace("_","-",get_locale()))["0"]);
				            }else{        
					            $hreflang_toppersystem="en";
				            }
                            if($hreflang_toppersystem == "it"){    
	                            $txtts0="Topper System SEO non è attivo";
                                $txtts1="Abbiamo rilevato un grave problema di configurazione del tuo web server.";
                                $txtts2="Assicurati che il file php.ini abbia impostato il valore di allow_url_fopen su On oppure che sia correttamente installata e abilitata la libreria Curl.";
                                $txtts3="Per farlo contatta il tuo gestore del Web Hosting e richiedi assistenza al problema.";
                                $txtts4="Una volta che questo semplice problema sarà risolto potrai iniziare a ottimizzare il sito web in modo efficace.";
                                $txtts5="Attenzione !!!!";
                                $txtts6="Prova gratuita di 30 giorni";
                                $txtts7="Il plugin Topper System SEO non può essere testato su questo ambiente di test.";
                                $txtts8="Per provarlo, installalo sul tuo sito e utilizzalo gratuitamente per 30 giorni.";
                                $txtts9="Nessuna carta di credito richiesta.";
                                $txtts10="Prova Topper System SEO oggi e inizia a vedere i risultati!";
                                $txtts11="Clicca qui per iniziare";
                            }else if($hreflang_toppersystem == "ar"){ 
	                            $txtts0="Topper System SEO غير نشط";
                                $txtts1="لقد اكتشفنا مشكلة تكوين خطيرة في خادم الويب الخاص بك.";
                                $txtts2="تأكد من أن ملف php.ini قد قام بتعيين قيمة allow_url_fopen إلى On أو أن مكتبة Curl مثبتة وممكَّنة بشكل صحيح.";
                                $txtts3="للقيام بذلك ، اتصل بمدير استضافة الويب واطلب المساعدة لحل المشكلة.";
                                $txtts4="بمجرد حل هذه المشكلة البسيطة ، يمكنك البدء في تحسين موقع الويب بشكل فعال.";
                                $txtts5="حذر !!!!";
                                $txtts6="تجربة مجانية لمدة 30 يوم";
                                $txtts7="لا يمكن اختبار المكون الإضافي Topper System SEO في بيئة الاختبار هذه.";
                                $txtts8="لتجربته، قم بتثبيته على موقعك واستخدمه مجانًا لمدة 30 يومًا.";
                                $txtts9="بطاقة الإئتمان غير مطالب بها.";
                                $txtts10="جرب Topper System SEO اليوم وابدأ في رؤية النتائج!";
                                $txtts11="انقر هنا لتبدأ";
                            }else if($hreflang_toppersystem == "de"){
	                            $txtts0="Topper System SEO ist nicht aktiv";
                                $txtts1="Wir haben ein schwerwiegendes Konfigurationsproblem mit Ihrem Webserver festgestellt.";
                                $txtts2="Stellen Sie sicher, dass die Datei php.ini den Wert von allow_url_fopen auf On gesetzt hat oder dass die Curl-Bibliothek korrekt installiert und aktiviert ist.";
                                $txtts3="Wenden Sie sich dazu an Ihren Webhosting-Manager und fordern Sie Unterstützung bei dem Problem an.";
                                $txtts4="Sobald dieses einfache Problem gelöst ist, können Sie mit der effektiven Optimierung der Website beginnen.";
                                $txtts5="Vorsicht !!!!";
                                $txtts6="30 Tage kostenlose Testversion";
                                $txtts7="Das Topper System SEO-Plugin kann in dieser Testumgebung nicht getestet werden.";
                                $txtts8="Um es auszuprobieren, installieren Sie es auf Ihrer Website und nutzen Sie es 30 Tage lang kostenlos.";
                                $txtts9="Keine Kreditkarte benötigt.";
                                $txtts10="Probieren Sie Topper System SEO noch heute aus und sehen Sie erste Ergebnisse!";
                                $txtts11="Klicke hier, um zu starten";
                            }else if($hreflang_toppersystem == "es"){ 
	                            $txtts0="Topper System SEO no está activo";
                                $txtts1="Hemos detectado un problema grave de configuración en su servidor web.";
                                $txtts2="Asegúrese de que el archivo php.ini haya establecido el valor de allow_url_fopen en Activado o que la biblioteca Curl esté correctamente instalada y habilitada.";
                                $txtts3="Para ello, contacta con tu responsable de Web Hosting y solicita asistencia con el problema.";
                                $txtts4="Una vez que se resuelva este simple problema, puede comenzar a optimizar el sitio web de manera efectiva.";
                                $txtts5="Precaución !!!!";
                                $txtts6="Prueba gratuita de 30 días";
                                $txtts7="El complemento Topper System SEO no se puede probar en este entorno de prueba.";
                                $txtts8="Para probarlo, instálalo en tu sitio y úsalo gratis durante 30 días.";
                                $txtts9="No se requiere tarjeta de crédito.";
                                $txtts10="¡Pruebe Topper System SEO hoy y comience a ver resultados!";
                                $txtts11="Haz clic para comenzar";
                            }else if($hreflang_toppersystem == "fr"){ 
	                            $txtts0="Topper System SEO n'est pas actif";
                                $txtts1="Nous avons détecté un grave problème de configuration avec votre serveur Web.";
                                $txtts2="Assurez-vous que le fichier php.ini a défini la valeur de allow_url_fopen sur On ou que la bibliothèque Curl est correctement installée et activée.";
                                $txtts3="Pour ce faire, contactez votre gestionnaire d'hébergement Web et demandez de l'aide pour résoudre le problème.";
                                $txtts4="Une fois ce problème simple résolu, vous pouvez commencer à optimiser efficacement le site Web.";
                                $txtts5="Mise en garde !!!!";
                                $txtts6="30 jours d'essai gratuit";
                                $txtts7="Le plugin Topper System SEO ne peut pas être testé sur cet environnement de test.";
                                $txtts8="Pour l'essayer, installez-le sur votre site et utilisez-le gratuitement pendant 30 jours.";
                                $txtts9="Pas de carte de crédit nécessaire.";
                                $txtts10="Essayez Topper System SEO aujourd'hui et commencez à voir des résultats!";
                                $txtts11="Cliquez ici pour commencer";
                            }else if($hreflang_toppersystem == "hi"){ 
	                            $txtts0="Topper System SEO सक्रिय नहीं है";
                                $txtts1="हमें आपके वेब सर्वर के साथ एक गंभीर कॉन्फ़िगरेशन समस्या का पता चला है।";
                                $txtts2="सुनिश्चित करें कि php.ini फ़ाइल ने allow_url_fopen का मान चालू पर सेट किया है या कर्ल लाइब्रेरी सही ढंग से स्थापित और सक्षम है।";
                                $txtts3="ऐसा करने के लिए, अपने वेब होस्टिंग प्रबंधक से संपर्क करें और समस्या के लिए सहायता का अनुरोध करें।";
                                $txtts4="एक बार जब यह सरल समस्या हल हो जाती है तो आप वेबसाइट को प्रभावी ढंग से अनुकूलित करना शुरू कर सकते हैं।";
                                $txtts5="सावधानी !!!!";
                                $txtts6="30 दिन मुफ्त प्रयास";
                                $txtts7="इस परीक्षण वातावरण पर Topper System SEO प्लगइन का परीक्षण नहीं किया जा सकता है।";
                                $txtts8="इसे आज़माने के लिए, इसे अपनी साइट पर इंस्टॉल करें और 30 दिनों तक निःशुल्क उपयोग करें।";
                                $txtts9="किसी क्रेडिट कार्ड की आवश्यकता नहीं।";
                                $txtts10="आज ही Topper System SEO आज़माएं और परिणाम देखना शुरू करें!";
                                $txtts11="शुरू करने के लिए यहां क्लिक करें";
                            }else if($hreflang_toppersystem == "ja"){ 
	                            $txtts0="Topper System SEO アクティブではありません";
                                $txtts1="Webサーバーで重大な構成の問題が検出されました。";
                                $txtts2="php.iniファイルでallow_url_fopenの値がOnに設定されていること、またはCurlライブラリが正しくインストールされて有効になっていることを確認してください。";
                                $txtts3="これを行うには、Webホスティングマネージャーに連絡して、問題の支援を依頼してください。";
                                $txtts4="この単純な問題が解決されたら、Webサイトの最適化を効果的に開始できます。";
                                $txtts5="注意 ！！！！";
                                $txtts6="30日間の無料トライアル";
                                $txtts7="Topper System SEO プラグインは、このテスト環境ではテストできません。";
                                $txtts8="試してみるには、サイトにインストールし、30 日間無料で使用してください。";
                                $txtts9="クレジットカードは必要ありません。";
                                $txtts10="今すぐ Topper System SEO を試して、結果を見てみましょう!";
                                $txtts11="ここをクリックして始めましょう";
                            }else if($hreflang_toppersystem == "pl"){ 
	                            $txtts0="Topper System SEO nie jest aktywny";
                                $txtts1="Wykryliśmy poważny problem z konfiguracją Twojego serwera WWW.";
                                $txtts2="Upewnij się, że plik php.ini ma ustawioną wartość allow_url_fopen na On lub że biblioteka Curl jest poprawnie zainstalowana i włączona.";
                                $txtts3="Aby to zrobić, skontaktuj się z menedżerem hostingu i poproś o pomoc w rozwiązaniu problemu.";
                                $txtts4="Po rozwiązaniu tego prostego problemu możesz zacząć skutecznie optymalizować witrynę.";
                                $txtts5="Ostrożność !!!!";
                                $txtts6="30 dniowy okres próbny";
                                $txtts7="Wtyczka Topper System SEO nie może być testowana w tym środowisku testowym.";
                                $txtts8="Aby wypróbować, zainstaluj go na swojej stronie i korzystaj bezpłatnie przez 30 dni.";
                                $txtts9="Nie wymagamy karty kredytowej.";
                                $txtts10="Wypróbuj Topper System SEO już dziś i zacznij widzieć rezultaty!";
                                $txtts11="Kliknij tutaj, aby rozpocząć";
                            }else if($hreflang_toppersystem == "pt"){ 
	                            $txtts0="Topper System SEO não está ativo";
                                $txtts1="Detectamos um sério problema de configuração com seu servidor web.";
                                $txtts2="Certifique-se de que o arquivo php.ini tenha definido o valor de allow_url_fopen para On ou que a biblioteca Curl esteja instalada e habilitada corretamente.";
                                $txtts3="Para fazer isso, entre em contato com seu gerente de hospedagem na web e solicite assistência para o problema.";
                                $txtts4="Uma vez resolvido este problema simples, você pode começar a otimizar o site de forma eficaz.";
                                $txtts5="Cuidado !!!!";
                                $txtts6="Teste gratuito de 30 dias";
                                $txtts7="O plugin Topper System SEO não pode ser testado neste ambiente de teste.";
                                $txtts8="Para experimentá-lo, instale-o em seu site e use-o gratuitamente por 30 dias.";
                                $txtts9="Não é necessário cartão de crédito.";
                                $txtts10="Experimente o Topper System SEO hoje e comece a ver resultados!";
                                $txtts11="Clique aqui para começar";
                            }else if($hreflang_toppersystem == "ru"){ 
	                            $txtts0="Topper System SEO не активен";
                                $txtts1="Мы обнаружили серьезную проблему с конфигурацией вашего веб-сервера.";
                                $txtts2="Убедитесь, что в файле php.ini для параметра allow_url_fopen задано значение On или что библиотека Curl правильно установлена ​​и включена.";
                                $txtts3="Для этого обратитесь к своему менеджеру веб-хостинга и попросите помощи в решении проблемы.";
                                $txtts4="Как только эта простая проблема решена, вы можете приступить к эффективной оптимизации сайта.";
                                $txtts5="Осторожность !!!!";
                                $txtts6="30-дневная бесплатная пробная версия";
                                $txtts7="Плагин Topper System SEO нельзя протестировать в этой тестовой среде.";
                                $txtts8="Чтобы попробовать, установите его на свой сайт и используйте бесплатно в течение 30 дней.";
                                $txtts9="Кредитная карта не требуется.";
                                $txtts10="Попробуйте Topper System SEO сегодня и начните видеть результаты!";
                                $txtts11="Нажмите здесь что бы начать";
                            }else if($hreflang_toppersystem == "zh"){ 
	                            $txtts0="Topper System SEO 不活跃";
                                $txtts1="我们检测到您的 Web 服务器存在严重的配置问题。";
                                $txtts2="确保 php.ini 文件已将 allow_url_fopen 的值设置为 On 或 Curl 库已正确安装并启用。";
                                $txtts3="为此，请联系您的虚拟主机经理并请求有关问题的帮助。";
                                $txtts4="一旦解决了这个简单的问题，您就可以开始有效地优化网站。";
                                $txtts5="小心！！！！";
                                $txtts6="30 天免费试用";
                                $txtts7="Topper System SEO 插件无法在此测试环境上进行测试。";
                                $txtts8="要试用它，请将其安装在您的网站上并免费使用 30 天。";
                                $txtts9="无需信用卡。";
                                $txtts10="立即尝试 Topper System SEO 并开始看到结果！";
                                $txtts11="点击这里开始";
                            }else if($hreflang_toppersystem == "he"){ 
	                            $txtts0="Topper System SEO אינו פעיל";
                                $txtts1="זיהינו בעיית תצורה רצינית בשרת האינטרנט שלך.";
                                $txtts2="ודא שקובץ php.ini הגדיר את הערך של allow_url_fopen ל-On או שספריית Curl מותקנת ומופעלת כהלכה.";
                                $txtts3="לשם כך, פנה למנהל אירוח אתרים ובקש עזרה בבעיה.";
                                $txtts4="לאחר שהבעיה הפשוטה הזו נפתרה תוכלו להתחיל לבצע אופטימיזציה יעילה של האתר.";
                                $txtts5="זהירות!!!!";
                                $txtts6="30 יום ניסיון חינם";
                                $txtts7="לא ניתן לבדוק את התוסף Topper System SEO בסביבת בדיקה זו.";
                                $txtts8="כדי לנסות אותו, התקן אותו באתר שלך והשתמש בו בחינם למשך 30 יום.";
                                $txtts9="אין צורך בכרטיס אשראי.";
                                $txtts10="נסה את Topper System SEO היום והתחיל לראות תוצאות!";
                                $txtts11="לחץ כאן כדי להתחיל";
                            }else if($hreflang_toppersystem == "la"){ 
	                            $txtts0="Topper System SEO non active";
                                $txtts1="Gravis configurationis problema deprehendimus cum servo interreti tuo.";
                                $txtts2="Fac ut php.ini fasciculus valorem permittit_url_fopen ad On vel ad bibliothecam Curl recte instituendam et parandam apposuit.";
                                $txtts3="Ad hoc fac, procuratorem Web Hosting tange et auxilium petentibus cum problematis.";
                                $txtts4="Cum haec quaestio simplex problema solvitur, efficaciter pagina optimizing incipere potes.";
                                $txtts5="Cautus esto!!!!";
                                $txtts6="XXX dies liberum iudicium";
                                $txtts7="Plugin Topper System SEO in hoc experimento environment probatum esse non potest.";
                                $txtts8="Ut eam experiaris, eam in locum tuum institue et eam gratis per XXX dies utere.";
                                $txtts9="Non requiritur fidem card.";
                                $txtts10="Conare Topper System SEO hodie et incipe videre eventum!";
                                $txtts11="Preme hic ut incipiat";
                            }else{
                                $hreflang_toppersystem="en";
                 
	                            $txtts0="Topper System SEO is not active";
                                $txtts1="We have detected a serious configuration problem with your web server.";
                                $txtts2="Make sure that the php.ini file has set the value of allow_url_fopen to On or that the Curl library is correctly installed and enabled.";
                                $txtts3="To do this, contact your Web Hosting manager and request assistance with the problem.";
                                $txtts4="Once this simple problem is solved you can start optimizing the website effectively.";
                                $txtts5="Caution !!!!";
                                $txtts6="30 day free trial";
                                $txtts7="The Topper System SEO plugin cannot be tested on this test environment.";
                                $txtts8="To try it, install it on your site and use it free for 30 days.";
                                $txtts9="No credit card required.";
                                $txtts10="Try Topper System SEO today and start seeing results!";
                                $txtts11="Click here to get started";
                            }

                            $msg_toppersystem="0";
				            if(isset($_SERVER['SERVER_NAME'])){
                                if(str_replace("playground.wordpress.net","",$_SERVER['SERVER_NAME']) != $_SERVER['SERVER_NAME']){
                                    $msg_toppersystem="1";
                                }
				            }
                            if($msg_toppersystem == "1"){
                                echo "<div id=\"toppersystem\" class=\"notice notice-success\"><p><img src=\"".plugins_url('image/toppersystemseo.png', dirname(__FILE__))."\"><br><big><strong>".esc_html($txtts6)."</strong></big><br>".esc_html($txtts7)."<br>".esc_html($txtts8)."<br><br><strong>".esc_html($txtts9)."<br>".esc_html($txtts10)."</strong><br><br><a target=\"_blank\" class=\"button-primary\" href=\"https://www.toppersystem.com/?lang=$hreflang_toppersystem\">".esc_html("$txtts11")."</a> toppersystem.com</p></div>";
                            }else{
                                echo "<div id=\"toppersystem\" class=\"notice notice-error\"><p><big>".esc_html($txtts5)."<br><br><strong>".esc_html($txtts0)."<br>".esc_html($txtts1)."</strong><br><br>".esc_html($txtts2)."<br>".esc_html($txtts3)."<br><br>".esc_html($txtts4)."</big></p></div>";
                            }
                        }
                    });
				}
			}
			TopperSystemRunError::toppersystemrun();
		}
	}
}
?>