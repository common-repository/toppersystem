/*! Topper System SEO | Author: Andrea Bagordo | (c) toppersytem.com | https://www.gnu.org/licenses/gpl-3.0.html */
<!--
function ControllerFunction() {	
	
	if((document.getElementById('button_toppersystem'))&&(document.getElementById('hreflang_toppersystem'))){
		var result = true;	
	}else{
		var result = false;
	}
	
	return result;
}

function ControllerFunction2() {	
	
	if((document.getElementById('domain_toppersystem'))&&(!document.getElementById('button_toppersystem'))&&(document.getElementById('hreflang_toppersystem'))&&(document.getElementById('connect_req_toppersystem'))&&(document.getElementById('register_req_toppersystem'))){
		var result = true;	
	}else{
		var result = false;
	}
	
	return result;
}

function ok_write_authcode()
{
	if(ControllerFunction2() == true){
		    if(document.getElementById('authcode_toppersystem_register')){		
                document.getElementById('authcode_toppersystem_register').className="inputform_toppersystem";
            }
	}
}

function ok_write_privacy()
{
	if((ControllerFunction() == true)||(ControllerFunction2() == true)){
		    if(document.getElementById('check_privacy_toppersystem_send')){		
                document.getElementById('check_privacy_toppersystem_send').className="";
            }
	}
}

function GotoStartToppersystem()
{
	if(document.getElementById('redirectpage_toppersystem_register')){        
		setTimeout("GotoStartToppersystem2()", 800);
	}
}

function GotoStartToppersystem2()
{
	if(document.getElementById('redirectpage_toppersystem_register')){        
		window.location.assign(document.getElementById('redirectpage_toppersystem_register').value.trim());
	}
}

function CloseProcessStartToppersystem()
{
	if(document.getElementById('management_toppersystem')){
        if(document.getElementById('block_load_activation_start_toppersystem')){
            document.getElementById('block_load_activation_start_toppersystem').className = "";
            document.getElementById('block_load_activation_onload_toppersystem').className = "display_none_ts";
        }
       
        var p=document.getElementById('management_toppersystem');       
		document.body.removeChild(p);
		setTimeout("start_optimization_noautoload_toppersystem()", 80);
	}
}

function render_view_terms_condictions_toppersystem()
{
	if((ControllerFunction() == true)||(ControllerFunction2() == true)){
        if(document.getElementById("noloading_frame_terms_condictions_toppersystem")){
            if(document.getElementById("noloading_frame_terms_condictions_toppersystem").className == "wxdth100_txtleft_toppersystem"){
                //npt
            }else{            
                document.getElementById("loading_frame_terms_condictions_toppersystem").className="display_none_ts";
		        document.getElementById("frame_terms_condictions_toppersystem").className="ready_terms_condictions_toppersystem wxdth100_toppersystem";
            }
        }
	}
}

function rendernoload_view_terms_condictions_toppersystem()
{
	if((ControllerFunction() == true)||(ControllerFunction2() == true)){
        document.getElementById("wait_load_ts").className="display_none_ts";
		document.getElementById("noloading_frame_terms_condictions_toppersystem").className="wxdth100_txtleft_toppersystem";
	}
}

function close_open_screenshot_image_authcode_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_block_stage_websitets_toppersystem')){
			var screen = document.getElementById("render_events_block_stage_websitets_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function open_screenshot_image_authcode_toppersystem() {
   if(ControllerFunction2() == true){ 
        var add = document.createElement("div");
        add.setAttribute("id", "render_events_block_stage_websitets_toppersystem");
        add.setAttribute("class", "events_toppersystem");
        add.onclick = function () {close_open_screenshot_image_authcode_toppersystem()};
        add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\" style=\"background-color: white; height:0px; min-height:0px\"></div><div id=\"request_events_block_stage_websitets_toppersystem\" class=\"stxle_request_events_all_toppersystem\" style=\"overflow-y:hidden;\"><img src=\"" + document.getElementById('url_screenshot_image_authcode_toppersystem').value.trim() + "\" style=\"width:100%;\" alt=\"\"></div></center>";
        document.body.appendChild(add);
   }
}

function close_copy_auth_register_code_toppersystem()
{
    if(document.getElementById('alertmsgcopy_auth_register_code_toppersystem')){
        var screen = document.getElementById("alertmsgcopy_auth_register_code_toppersystem");
        document.body.removeChild(screen);
    }
}

function copy_auth_register_code_toppersystem() {
   if(ControllerFunction2() == true){
        if(!document.getElementById('alertmsgcopy_auth_register_code_toppersystem')){
            var text = document.getElementById("idauth_register_code_toppersystem").innerHTML;
            document.getElementById("idauth_register_code_toppersystem").className = "auth_register_code_toppersystem";
            navigator.clipboard.writeText(text)
            .then(() => {
                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
                var txtts0;
                var txtts1="Api Center Topper System SEO";
                if(hreflang_toppersystem == "it"){
                    txtts0="Incolla la URL copiata su";
                }else if(hreflang_toppersystem == "ar"){
                    txtts0="الصق عنوان URL المنسوخ في";
                }else if(hreflang_toppersystem == "de"){
                    txtts0="Fügen Sie die kopierte URL ein";
                }else if(hreflang_toppersystem == "es"){
                    txtts0="Pegue la URL copiada en";
                }else if(hreflang_toppersystem == "fr"){
                    txtts0="Collez l'URL copiée dans";
                }else if(hreflang_toppersystem == "hi"){
                    txtts0="कॉपी किए गए यूआरएल को पेस्ट करें";
                }else if(hreflang_toppersystem == "ja"){
                    txtts0="コピーしたURLを貼り付けます";
                }else if(hreflang_toppersystem == "pl"){
                    txtts0="Wklej skopiowany adres URL do";
                }else if(hreflang_toppersystem == "pt"){
                    txtts0="Cole o URL copiado em";
                }else if(hreflang_toppersystem == "ru"){
                    txtts0="Вставьте скопированный URL-адрес в";
                }else if(hreflang_toppersystem == "zh"){
                    txtts0="将复制的 URL 粘贴到";
                }else if(hreflang_toppersystem == "he"){
                    txtts0="הדבק את כתובת האתר שהועתקה אל";
                }else if(hreflang_toppersystem == "la"){
                    txtts0="Crustulum copied URL ad";
                }else{
                    txtts0="Paste the copied URL to";
                }
                var add=document.createElement("div");
                add.setAttribute("id","alertmsgcopy_auth_register_code_toppersystem");
                add.setAttribute("class","copy_auth_register_code_toppersystem animate_y_bottom");
                add.onclick = function () {close_copy_auth_register_code_toppersystem()};
                add.innerHTML="<span>" + txtts0 + "<br><strong>" + txtts1 + "</strong></span>";
                document.body.appendChild(add);
                setTimeout("close_copy_auth_register_code_toppersystem()", 6000);
            })
            .catch(err => {
                //npt
            });
        }
   }
}

function StartProcessStartToppersystem()
{
	if(ControllerFunction() == true){
        if(document.getElementById('block_load_activation_start_toppersystem')){
            document.getElementById('block_load_activation_start_toppersystem').className = "display_none_ts";
            document.getElementById('block_load_activation_onload_toppersystem').className = "";
        }        
        var p=document.getElementById('button_toppersystem');       
		document.body.removeChild(p);
		setTimeout("StartProcessStartToppersystem2()", 80);
	}
}

function StartProcessStartToppersystem2()
{
    if(ControllerFunction2() == true){	
        if(!document.getElementById('button_toppersystem')){          
            var txtts0;
            var txtts1;
            var txtts2;
            var txtts3;
            var txtts4;
            var txtts5;
            var txtts6;
            var txtts7;
            var txtts8;
            var txtts9;
            var txtts10;
            var txtts11;
            var txtts12;
            var txtts14;
            var txtts15;
            var txtts16;
            var txtts17;
            var txtts18;
            var txtts19;
            var txtts20;
            var txtts21;
            var txtts22;
            var txtts23;
            var txtts24;
            var txtts25;
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
            var hreflang_link_apicenter_toppersystem="";
            if((hreflang_toppersystem == "it")||(hreflang_toppersystem == "ar")||(hreflang_toppersystem == "de")||(hreflang_toppersystem == "es")||(hreflang_toppersystem == "fr")||(hreflang_toppersystem == "hi")||(hreflang_toppersystem == "ja")||(hreflang_toppersystem == "pl")||(hreflang_toppersystem == "pt")||(hreflang_toppersystem == "ru")||(hreflang_toppersystem == "zh")||(hreflang_toppersystem == "he")||(hreflang_toppersystem == "la")||(hreflang_toppersystem == "en")){
                hreflang_link_apicenter_toppersystem=hreflang_toppersystem;    
            }else{
                hreflang_link_apicenter_toppersystem="en";    
            }

            var render_contact_email_toppersystem="";
            if(document.getElementById('contact_start_email_send_toppersystem')){
                render_contact_email_toppersystem=document.getElementById('contact_start_email_send_toppersystem').value.trim();
            }
          
            var email_msg="";
            if(document.getElementById('req_email_toppersystem_register')){
                if(document.getElementById('req_email_toppersystem_register').value != ""){
                    email_msg="<strong>" + document.getElementById('req_email_toppersystem_register').value + "</strong>";
                }
            }

            var link_api_center_toppersystem="<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_link_apicenter_toppersystem + "\">Api Center Topper System SEO</a>";

            
            if(hreflang_toppersystem == "it"){
                txtts0="Inserisci il codice AuthCode";
                txtts1="E&acute; possibile registrare solo un AuthCode per sito. Se ne inserisci uno errato il sistema non funzioner&agrave;! Dovrai disinstallare il plugin e ripetere la procedura dall&acute;inizio.";
                txtts2="Attiva adesso";
                txtts3="Chiudi";
                txtts4="Ottimizza il tuo sito per aumentare la sua velocit&agrave; e avere pi&ugrave; visibilit&agrave; in rete";
                //txtts5="<strong>Configura e attiva Topper System SEO</strong><br>Configura il tuo <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">account Topper System SEO</a> per generare l&acute;AuthCode ed iniziare ad ottimizzare le pagine di questo sito web.<br><strong>30 giorni di prova gratuita</strong> per verificare l'efficacia dei nostri servizi!";
                txtts5="<strong>Configura e attiva Topper System SEO</strong><br>Configura il tuo <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">account Topper System SEO</a> per generare l&acute;AuthCode ed iniziare ad ottimizzare le pagine di questo sito web.";
                txtts6="Cartella principale sito";
                txtts7="Genera AuthCode Topper System SEO";
                txtts8="Copia e incolla la url su " + link_api_center_toppersystem + " per generare l&acute;AuthCode";
                txtts9="<strong>Configura e attiva Topper System SEO</strong><br>Configura il tuo <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">account Topper System SEO</a> per generare l&acute;AuthCode ed iniziare ad ottimizzare le pagine di questo sito web.<br><strong>6 mesi di prova gratuita</strong> per verificare l'efficacia dei nostri servizi!";

                txtts10="Per attivare un nuovo AuthCode puoi accedere al tuo account " + email_msg + " su " + link_api_center_toppersystem + ".";
                txtts11="Attenzione!";
                txtts12="Il sito risulta registrato da un utente con una email diversa da questo account amministratore di WP.";
                txtts14="opzione 1)";
                txtts15="Registrati su " + link_api_center_toppersystem + " e segui la procedura per rivendicare l'AuthCode di questo dominio.";
                txtts16="opzione 2)";
                txtts17="In caso fossi in possesso delle credenziali del legittimo proprietario accedi su " + link_api_center_toppersystem + " e recupera l'AuthCode.";
                txtts18="Hai due opzioni per attivare il plugin:";
                txtts19="Per attivare il plugin accedi al tuo account " + email_msg + " su " + link_api_center_toppersystem + " e recupera l'AuthCode.";
                txtts20="Il sito risulta registrato da un utente con una email diversa da questo account amministratore di WP.";
                txtts21="Hai due opzioni per attivare il plugin:";
                txtts22="Accedi al tuo account " + email_msg + " su " + link_api_center_toppersystem + " e segui la procedura per rivendicare l'AuthCode di questo dominio.";
                txtts23="In caso fossi in possesso delle credenziali del legittimo proprietario accedi su " + link_api_center_toppersystem + " e recupera l'AuthCode.";
                txtts24="Ho letto e accetto le condizioni d&acute;uso di Topper System SEO.";
                txtts25="Condizioni d&acute;uso di Topper System SEO";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="أدخل رمز AuthCode";
                txtts1="يمكن تسجيل رمز مصادقة واحد فقط لكل موقع. إذا أدخلت الخطأ ، فلن يعمل النظام! سيتعين عليك إلغاء تثبيت المكون الإضافي وتكرار الإجراء من البداية.";
                txtts2="فعِّل الآن";
                txtts3="قريب";
                txtts4="قم بتحسين موقعك لزيادة سرعته والحصول على مزيد من الرؤية على الشبكة";
                //txtts5="<strong> تكوين نظام Topper وتفعيله </strong> <br> تكوين <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\"> حساب Topper System SEO </a> لإنشاء AuthCode وبدء تحسين صفحات هذا الموقع.<br><strong>إصدار تجريبي مجاني لمدة 30 يومًا</strong> للتحقق من فعالية خدماتنا!";
                txtts5="<strong> تكوين نظام Topper وتفعيله </strong> <br> تكوين <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\"> حساب Topper System SEO </a> لإنشاء AuthCode وبدء تحسين صفحات هذا الموقع.";
                txtts6="مجلد الموقع الرئيسي";
                txtts7="إنشاء نظام AuthCode Topper System SEO";
                txtts8="انسخ عنوان url والصقه في " + link_api_center_toppersystem + " لإنشاء رمز المصادقة";
                txtts9="<strong> تكوين نظام Topper وتفعيله </strong> <br> تكوين <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\"> حساب Topper System SEO </a> لإنشاء AuthCode وبدء تحسين صفحات هذا الموقع.<br><strong>نسخة تجريبية مجانية لمدة 6 أشهر</strong> للتحقق من فعالية خدماتنا!";

                txtts10="لتنشيط رمز AuthCode الجديد ، يمكنك الوصول إلى حساب " + email_msg + " الخاص بك على " + link_api_center_toppersystem + ".";
                txtts11="انتباه!";
                txtts12="تم تسجيل الموقع بواسطة مستخدم بعنوان بريد إلكتروني مختلف عن حساب مسؤول WP هذا.";
                txtts14="الخيار 1)";
                txtts15="سجل على " + link_api_center_toppersystem + " واتبع الإجراء للمطالبة برمز AuthCode لهذا المجال.";
                txtts16="الخيار 2)";
                txtts17="إذا كانت لديك بيانات اعتماد المالك الشرعي ، فقم بالوصول إلى " + link_api_center_toppersystem + " واسترد رمز AuthCode.";
                txtts18="لديك خياران لتنشيط المكون الإضافي:";
                txtts19="لتنشيط المكون الإضافي ، قم بالوصول إلى حساب " + email_msg + " الخاص بك على " + link_api_center_toppersystem + " واسترداد رمز AuthCode.";
                txtts20="تم تسجيل الموقع بواسطة مستخدم بعنوان بريد إلكتروني مختلف عن حساب مسؤول WP هذا.";
                txtts21="لديك خياران لتنشيط المكون الإضافي:";
                txtts22="قم بتسجيل الدخول إلى حساب " + email_msg + " الخاص بك على " + link_api_center_toppersystem + " واتبع الإجراء الخاص بالمطالبة برمز AuthCode لهذا المجال.";
                txtts23="إذا كانت لديك بيانات اعتماد المالك الشرعي ، فقم بالوصول إلى " + link_api_center_toppersystem + " واسترجع رمز المصادقة.";
                txtts24="لقد قرأت وقبلت شروط الاستخدام Topper System SEO";
                txtts25="شروط الاستخدام Topper System SEO";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Geben Sie den AuthCode ein";
                txtts1="Pro Site kann nur ein AuthCode registriert werden. Wenn Sie die falsche eingeben, funktioniert das System nicht! Sie müssen das Plugin deinstallieren und den Vorgang von Anfang an wiederholen.";
                txtts2="Jetzt aktivieren";
                txtts3="Schließen";
                txtts4="Optimieren Sie Ihre Website, um ihre Geschwindigkeit zu erhöhen und mehr Sichtbarkeit im Netz zu erhalten";
                //txtts5="<strong>Konfigurieren und Aktivieren des Topper System SEO</strong><br>Konfigurieren Sie Ihr <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO konto</a>, um AuthCode zu generieren und die Seiten dieser Website zu optimieren.<br><strong>30-tägige kostenlose Testversion</strong>, um die Wirksamkeit unserer Dienste zu überprüfen!";
                txtts5="<strong>Konfigurieren und Aktivieren des Topper System SEO</strong><br>Konfigurieren Sie Ihr <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO konto</a>, um AuthCode zu generieren und die Seiten dieser Website zu optimieren.";
                txtts6="Hauptseitenordner";
                txtts7="Generieren Sie das AuthCode Topper System SEO";
                txtts8="Kopieren Sie die URL und fügen Sie sie in " + link_api_center_toppersystem + " ein, um den AuthCode zu generieren";
                txtts9="<strong>Konfigurieren und Aktivieren des Topper System SEO</strong><br>Konfigurieren Sie Ihr <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO konto</a>, um AuthCode zu generieren und die Seiten dieser Website zu optimieren.<br><strong>6 Monate kostenlos testen</strong>, um die Wirksamkeit unserer Dienste zu überprüfen!";

                txtts10="Um einen neuen AuthCode zu aktivieren, können Sie auf Ihr " + email_msg + "-Konto unter " + link_api_center_toppersystem + " zugreifen.";
                txtts11="Achtung!";
                txtts12="Die Site wurde von einem Benutzer mit einer anderen E-Mail-Adresse als diesem WP-Administratorkonto registriert.";
                txtts14="Option 1)";
                txtts15="Registrieren Sie sich auf " + link_api_center_toppersystem + " und folgen Sie dem Verfahren, um den AuthCode dieser Domain anzufordern.";
                txtts16="Option 2)";
                txtts17="Wenn Sie über die Anmeldeinformationen des rechtmäßigen Eigentümers verfügen, greifen Sie auf " + link_api_center_toppersystem + " zu und rufen Sie den AuthCode ab.";
                txtts18="Sie haben zwei Möglichkeiten, das Plugin zu aktivieren:";
                txtts19="Um das Plugin zu aktivieren, greifen Sie auf Ihr " + email_msg + "-Konto unter " + link_api_center_toppersystem + " zu und rufen Sie den AuthCode ab.";
                txtts20="Die Site wurde von einem Benutzer mit einer anderen E-Mail-Adresse als diesem WP-Administratorkonto registriert.";
                txtts21="Sie haben zwei Möglichkeiten, das Plugin zu aktivieren:";
                txtts22="Melden Sie sich bei Ihrem " + email_msg + "-Konto unter " + link_api_center_toppersystem + " an und folgen Sie dem Verfahren, um den AuthCode dieser Domain anzufordern.";
                txtts23="Wenn Sie über die Anmeldeinformationen des rechtmäßigen Eigentümers verfügen, greifen Sie auf " + link_api_center_toppersystem + " zu und rufen Sie den AuthCode ab.";
                txtts24="Ich habe das gelesen und akzeptiert Nutzungsbedingungen von Topper System SEO.";
                txtts25="Nutzungsbedingungen von Topper System SEO";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Ingrese el código AuthCode";
                txtts1="Solo se puede registrar un AuthCode por sitio. ¡Si ingresa el incorrecto, el sistema no funcionará! Deberá desinstalar el complemento y repetir el procedimiento desde el principio.";
                txtts2="Activar ahora";
                txtts3="Cerca";
                txtts4="Optimice su sitio para aumentar su velocidad y tener más visibilidad en la red";
                //txtts5="<strong>Configurar y activar Topper System SEO</strong><br> Configure su <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Cuenta del Topper System SEO</a> para generar AuthCode y comenzar a optimizar las páginas de este sitio web.<br><strong>Prueba gratuita de 30 días</strong> para comprobar la eficacia de nuestros servicios.";
                txtts5="<strong>Configurar y activar Topper System SEO</strong><br> Configure su <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Cuenta del Topper System SEO</a> para generar AuthCode y comenzar a optimizar las páginas de este sitio web.";
                txtts6="Carpeta del sitio principal";
                txtts7="Generar AuthCode Topper System SEO";
                txtts8="Kopieren Sie die URL und fügen Sie sie in " + link_api_center_toppersystem + " ein, um den AuthCode zu generieren";
                txtts9="<strong>Configurar y activar Topper System SEO</strong><br> Configure su <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Cuenta del Topper System SEO</a> para generar AuthCode y comenzar a optimizar las páginas de este sitio web.<br><strong>6 meses de prueba gratis</strong> para comprobar la eficacia de nuestros servicios.";

                txtts10="Para activar un nuevo AuthCode puede acceder a su cuenta " + email_msg + " en " + link_api_center_toppersystem + ".";
                txtts11="¡Atención!";
                txtts12="El sitio está registrado por un usuario con un correo electrónico diferente al de esta cuenta de administrador de WP.";
                txtts14="opción 1)";
                txtts15="Regístrese en " + link_api_center_toppersystem + " y siga el procedimiento para reclamar el AuthCode de este dominio.";
                txtts16="opción 2)";
                txtts17="Si tiene las credenciales del propietario legítimo, acceda a " + link_api_center_toppersystem + " y recupere el AuthCode.";
                txtts18="Tiene dos opciones para activar el complemento:";
                txtts19="Para activar el complemento acceda a su cuenta " + email_msg + " en " + link_api_center_toppersystem + " y recupere el AuthCode.";
                txtts20="El sitio está registrado por un usuario con un correo electrónico diferente al de esta cuenta de administrador de WP.";
                txtts21="Tiene dos opciones para activar el complemento:";
                txtts22="Inicie sesión en su cuenta " + email_msg + " en " + link_api_center_toppersystem + " y siga el procedimiento para reclamar el AuthCode de este dominio.";
                txtts23="Si tiene las credenciales del propietario legítimo, acceda a " + link_api_center_toppersystem + " y recupere el AuthCode.";
                txtts24="He leído y acepto el condiciones de uso por el Topper System SEO.";
                txtts25="Condiciones de uso de Topper System SEO";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Entrez le code AuthCode";
                txtts1="Un seul AuthCode peut être enregistré par site. Si vous entrez le mauvais, le système ne fonctionnera pas! Vous devrez désinstaller le plugin et répéter la procédure depuis le début.";
                txtts2="Activez maintenant";
                txtts3="Proche";
                txtts4="Optimisez votre site pour augmenter sa vitesse et avoir plus de visibilité sur le net";
                //txtts5="<strong>Configurer et activer le Topper System SEO</strong><br>Configurez votre <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Compte Topper System SEO</a> pour générer AuthCode et commencer à optimiser les pages de ce site Web.<br><strong>Essai gratuit de 30 jours</strong> pour vérifier l'efficacité de nos services !";
                txtts5="<strong>Configurer et activer le Topper System SEO</strong><br>Configurez votre <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Compte Topper System SEO</a> pour générer AuthCode et commencer à optimiser les pages de ce site Web.";
                txtts6="Dossier du site principal";
                txtts7="Générer le système Topper AuthCode";
                txtts8="Copiez et collez l'URL dans " + link_api_center_toppersystem + " pour générer l'AuthCode";
                txtts9="<strong>Configurer et activer le Topper System SEO</strong><br>Configurez votre <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Compte Topper System SEO</a> pour générer AuthCode et commencer à optimiser les pages de ce site Web.<br><strong>6 mois d'essai gratuit</strong> pour vérifier l'efficacité de nos services !";

                txtts10="Pour activer un nouveau AuthCode, vous pouvez accéder à votre compte " + email_msg + " sur " + link_api_center_toppersystem + ".";
                txtts11="Attention !";
                txtts12="Le site est enregistré par un utilisateur avec une adresse e-mail différente de celle de ce compte administrateur WP.";
                txtts14="option 1)";
                txtts15="Inscrivez-vous sur " + link_api_center_toppersystem + " et suivez la procédure pour réclamer l'AuthCode de ce domaine.";
                txtts16="option 2)";
                txtts17="Si vous disposez des informations d'identification du propriétaire légitime, accédez à " + link_api_center_toppersystem + " et récupérez l'AuthCode.";
                txtts18="Vous avez deux options pour activer le plugin :";
                txtts19="Pour activer le plugin, accédez à votre compte " + email_msg + " sur " + link_api_center_toppersystem + " et récupérez l'AuthCode.";
                txtts20="Le site est enregistré par un utilisateur avec une adresse e-mail différente de celle de ce compte administrateur WP.";
                txtts21="Vous avez deux options pour activer le plugin :";
                txtts22="Connectez-vous à votre compte " + email_msg + " sur " + link_api_center_toppersystem + " et suivez la procédure pour réclamer l'AuthCode de ce domaine.";
                txtts23="Si vous disposez des informations d'identification du propriétaire légitime, accédez à " + link_api_center_toppersystem + " et récupérez l'AuthCode.";
                txtts24="J'ai lu et j'accepte le conditions d'utilisation par Topper System SEO.";
                txtts25="Conditions d&acute;utilisation de Topper System SEO";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="AuthCode कोड दर्ज करें";
                txtts1="प्रति साइट पर केवल एक AuthCode पंजीकृत किया जा सकता है। यदि आप गलत दर्ज करते हैं, तो सिस्टम काम नहीं करेगा! आपको प्लगइन को अनइंस्टॉल करना होगा और प्रक्रिया को शुरुआत से दोहराना होगा।";
                txtts2="अब सक्रिय करें";
                txtts3="पास";
                txtts4="अपनी गति बढ़ाने के लिए अपनी साइट का अनुकूलन करें और नेट पर अधिक दृश्यता रखें";
                //txtts5="<strong> टॉपर सिस्टम को कॉन्फ़िगर करें और सक्रिय करें </strong><br>अपने <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">खाता Topper System SEO</a> ।<br>हमारी सेवाओं की प्रभावशीलता की जांच करने के लिए <strong> 30-दिन का निःशुल्क परीक्षण </strong>!";
                txtts5="<strong> टॉपर सिस्टम को कॉन्फ़िगर करें और सक्रिय करें </strong><br>अपने <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">खाता Topper System SEO</a> ।";
                txtts6="मुख्य साइट फ़ोल्डर";
                txtts7="AuthCode Topper System SEO उत्पन्न करें";
                txtts8="AuthCode जनरेट करने के लिए URL को " + link_api_center_toppersystem + " पर कॉपी और पेस्ट करें";
                txtts9="<strong> टॉपर सिस्टम को कॉन्फ़िगर करें और सक्रिय करें </strong><br>अपने <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">खाता Topper System SEO</a> ।<br>हमारी सेवाओं की प्रभावशीलता की जांच करने के लिए <strong>6 महीने का निःशुल्क परीक्षण</strong>!";

                txtts10="नया ऑथकोड सक्रिय करने के लिए आप " + link_api_center_toppersystem + " पर अपने " + email_msg + " खाते तक पहुंच सकते हैं।";
                txtts11="सावधान!";
                txtts12="साइट इस WP व्यवस्थापक खाते से भिन्न ईमेल वाले उपयोगकर्ता द्वारा पंजीकृत है।";
                txtts14="विकल्प 1)";
                txtts15="" + link_api_center_toppersystem + " पर पंजीकरण करें और इस डोमेन के ऑथकोड का दावा करने के लिए प्रक्रिया का पालन करें।";
                txtts16="विकल्प 2)";
                txtts17="यदि आपके पास असली मालिक के प्रमाण हैं, तो " + link_api_center_toppersystem + " पर पहुंचें और ऑथकोड पुनः प्राप्त करें।";
                txtts18="प्लगइन को सक्रिय करने के लिए आपके पास दो विकल्प हैं:";
                txtts19="प्लगइन को सक्रिय करने के लिए " + link_api_center_toppersystem + " पर अपने " + email_msg + " खाते तक पहुंचें और ऑथकोड पुनः प्राप्त करें।";
                txtts20="साइट इस WP व्यवस्थापक खाते से भिन्न ईमेल वाले उपयोगकर्ता द्वारा पंजीकृत है।";
                txtts21="प्लगइन को सक्रिय करने के लिए आपके पास दो विकल्प हैं:";
                txtts22="'" + link_api_center_toppersystem + " पर अपने " + email_msg + " खाते में लॉग इन करें और इस डोमेन के ऑथकोड का दावा करने के लिए प्रक्रिया का पालन करें।'";
                txtts23="यदि आपके पास असली मालिक के प्रमाण हैं, तो " + link_api_center_toppersystem + " पर पहुंचें और ऑथकोड पुनः प्राप्त करें।";
                txtts24="मैंने उपयोग की शर्तों को पढ़ लिया है और उन्हें स्वीकार करता हूँ";
                txtts25="उपयोग की शर्तें Topper System SEO";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="AuthCodeコードを入力してください";
                txtts1="サイトごとに登録できるAuthCodeは1つだけです。 間違ったものを入力すると、システムは動作しません！ プラグインをアンインストールして、最初から手順を繰り返す必要があります。";
                txtts2="今すぐアクティベート";
                txtts3="近いです";
                txtts4="サイトを最適化して速度を上げ、ネット上での視認性を高めます";
                //txtts5="<strong>トッパーシステムの構成とアクティブ化</strong><br><a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">アカウント</a>をクリックして、AuthCodeを生成し、このWebサイトのページの最適化を開始します。<br><strong>30日間の無料トライアル</strong>でサービスの有効性を確認してください。";
                txtts5="<strong>トッパーシステムの構成とアクティブ化</strong><br><a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">アカウント</a>をクリックして、AuthCodeを生成し、このWebサイトのページの最適化を開始します。";
                txtts6="メインサイトフォルダー";
                txtts7="AuthCode Topper System SEO を生成する";
                txtts8="URL をコピーして " + link_api_center_toppersystem + " に貼り付け、AuthCode を生成します。";
                txtts9="<strong>トッパーシステムの構成とアクティブ化</strong><br><a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">アカウント</a>をクリックして、AuthCodeを生成し、このWebサイトのページの最適化を開始します。<br><strong>6か月の無料トライアル</strong>でサービスの有効性を確認してください。";

                txtts10="新しい AuthCode をアクティブにするには、" + link_api_center_toppersystem + " で " + email_msg + " アカウントにアクセスできます。";
                txtts11="注意!";
                txtts12="サイトは、この WP 管理者アカウントとは異なる電子メールを使用するユーザーによって登録されています。";
                txtts14="オプション 1)";
                txtts15="" + link_api_center_toppersystem + " に登録し、このドメインの AuthCode を要求する手順に従ってください。";
                txtts16="オプション 2)";
                txtts17="正当な所有者の資格情報をお持ちの場合は、" + link_api_center_toppersystem + " にアクセスして AuthCode を取得してください。";
                txtts18="プラグインをアクティブ化するには 2 つのオプションがあります:";
                txtts19="プラグインをアクティブにするには、" + link_api_center_toppersystem + " で " + email_msg + " アカウントにアクセスし、AuthCode を取得します。";
                txtts20="サイトは、この WP 管理者アカウントとは異なる電子メールを使用するユーザーによって登録されています。";
                txtts21="プラグインをアクティブ化するには 2 つのオプションがあります:";
                txtts22="" + link_api_center_toppersystem + " で " + email_msg + " アカウントにログインし、このドメインの AuthCode を要求する手順に従ってください。";
                txtts23="正当な所有者の資格情報をお持ちの場合は、" + link_api_center_toppersystem + " にアクセスして AuthCode を取得してください。";
                txtts24="利用条件を読んで同意します";
                txtts25="Topper System SEO利用規約";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Wpisz kod AuthCode";
                txtts1="Tylko jedna AuthCode może być zarejestrowana na stronę. Jeśli wpiszesz niewłaściwy, system nie będzie działał! Będziesz musiał odinstalować wtyczkę i powtórzyć procedurę od początku.";
                txtts2="Aktywuj teraz";
                txtts3="Blisko";
                txtts4="Zoptymalizuj swoją witrynę, aby zwiększyć jej szybkość i zwiększyć widoczność w sieci";
                //txtts5="<strong>Skonfiguruj i aktywuj Topper System SEO</strong> <br> Skonfiguruj swój<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">konto Topper System SEO</a>, aby wygenerować kod AuthCode i rozpocząć optymalizację stron tej witryny.<br><strong>30-dniowy bezpłatny okres próbny</strong>, aby sprawdzić skuteczność naszych usług!";
                txtts5="<strong>Skonfiguruj i aktywuj Topper System SEO</strong> <br> Skonfiguruj swój<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">konto Topper System SEO</a>, aby wygenerować kod AuthCode i rozpocząć optymalizację stron tej witryny.";
                txtts6="Główny folder witryny";
                txtts7="Wygeneruj AuthCode";
                txtts8="Skopiuj i wklej adres URL do " + link_api_center_toppersystem + ", aby wygenerować kod uwierzytelniający";
                txtts9="<strong>Skonfiguruj i aktywuj Topper System SEO</strong> <br> Skonfiguruj swój<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">konto Topper System SEO</a>, aby wygenerować kod AuthCode i rozpocząć optymalizację stron tej witryny.<br><strong>6 miesięcy bezpłatnego okresu próbnego</strong>, aby sprawdzić skuteczność naszych usług!";

                txtts10="Aby aktywować nowy kod AuthCode, możesz wejść na swoje konto " + email_msg + " pod adresem " + link_api_center_toppersystem + ".";
                txtts11="Uwaga!";
                txtts12="Witryna została zarejestrowana przez użytkownika z innym adresem e-mail niż to konto administratora WP.";
                txtts14="opcja 1)";
                txtts15="Zarejestruj się na " + link_api_center_toppersystem + " i postępuj zgodnie z procedurą uzyskania kodu AuthCode dla tej domeny.";
                txtts16="opcja 2)";
                txtts17="Jeśli posiadasz dane uwierzytelniające prawowitego właściciela, wejdź na " + link_api_center_toppersystem + " i pobierz kod AuthCode.";
                txtts18="Masz dwie możliwości aktywacji wtyczki:";
                txtts19="Aby aktywować wtyczkę, wejdź na swoje konto " + email_msg + " pod adresem " + link_api_center_toppersystem + " i pobierz kod AuthCode.";
                txtts20="Witryna została zarejestrowana przez użytkownika z innym adresem e-mail niż to konto administratora WP.";
                txtts21="Masz dwie możliwości aktywacji wtyczki:";
                txtts22="Zaloguj się na swoje konto " + email_msg + " na " + link_api_center_toppersystem + " i postępuj zgodnie z procedurą, aby uzyskać kod AuthCode dla tej domeny.";
                txtts23="Jeśli posiadasz dane uwierzytelniające prawowitego właściciela, wejdź na " + link_api_center_toppersystem + " i pobierz kod AuthCode.";
                txtts24="Przeczytałem i akceptuję warunki użytkowania przez Topper System SEO.";
                txtts25="Warunki korzystania z Topper System SEO";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Digite o código AuthCode";
                txtts1="Somente um AuthCode pode ser registrado por site. Se você digitar o incorreto, o sistema não funcionará! Você precisará desinstalar o plug-in e repetir o procedimento desde o início.";
                txtts2="Ativar agora";
                txtts3="Perto";
                txtts4="Otimize seu site para aumentar sua velocidade e ter mais visibilidade na rede";
                //txtts5="<strong>Configure e ative o Topper System SEO</strong><br>Configure seu <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">conta Topper System SEO</a> para gerar o AuthCode e começar a otimizar as páginas deste site.<br><strong>30 dias de teste gratuito </strong> para verificar a eficácia dos nossos serviços!";
                txtts5="<strong>Configure e ative o Topper System SEO</strong><br>Configure seu <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">conta Topper System SEO</a> para gerar o AuthCode e começar a otimizar as páginas deste site.";
                txtts6="Pasta principal do site";
                txtts7="Gerar AuthCode Topper System SEO";
                txtts8="Copie e cole a URL em " + link_api_center_toppersystem + " para gerar o AuthCode";
                txtts9="<strong>Configure e ative o Topper System SEO</strong><br>Configure seu <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">conta Topper System SEO</a> para gerar o AuthCode e começar a otimizar as páginas deste site.<br><strong>6 meses de teste grátis</strong> para verificar a eficácia dos nossos serviços!";

                txtts10="Para ativar um novo AuthCode você pode acessar sua conta " + email_msg + " em " + link_api_center_toppersystem + ".";
                txtts11="Atenção!";
                txtts12="O site é registrado por um usuário com um e-mail diferente desta conta de administrador do WP.";
                txtts14="opção 1)";
                txtts15="Cadastre-se em " + link_api_center_toppersystem + " e siga o procedimento para solicitar o AuthCode deste domínio.";
                txtts16="opção 2)";
                txtts17="Se você possui as credenciais do legítimo proprietário, acesse " + link_api_center_toppersystem + " e recupere o AuthCode.";
                txtts18="Você tem duas opções para ativar o plugin:";
                txtts19="Para ativar o plugin acesse sua conta " + email_msg + " em " + link_api_center_toppersystem + " e recupere o AuthCode.";
                txtts20="O site é registrado por um usuário com um e-mail diferente desta conta de administrador do WP.";
                txtts21="Você tem duas opções para ativar o plugin:";
                txtts22="Faça login na sua conta " + email_msg + " em " + link_api_center_toppersystem + " e siga o procedimento para solicitar o AuthCode deste domínio.";
                txtts23="Se você possui as credenciais do legítimo proprietário, acesse " + link_api_center_toppersystem + " e recupere o AuthCode.";
                txtts24="Eu li e aceito o condições de uso pelo Topper System SEO.";
                txtts25="Termos de uso do Topper System SEO";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="Введите код AuthCode";
                txtts1="Только один AuthCode может быть зарегистрирован на сайте. Если вы введете неправильный, система не будет работать! Вам придется удалить плагин и повторить процедуру с самого начала.";
                txtts2="Активировать сейчас";
                txtts3="близко";
                txtts4="Оптимизируйте свой сайт, чтобы увеличить его скорость и иметь больше видимости в сети";
                //txtts5="<strong>Настройка и активация Topper System SEO</strong><br>Настройте <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">account Topper System SEO</a>, чтобы создать AuthCode и начать оптимизацию страниц этого сайта.<br><strong>30-дневная бесплатная пробная версия</strong> для проверки эффективности наших услуг!";
                txtts5="<strong>Настройка и активация Topper System SEO</strong><br>Настройте <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">account Topper System SEO</a>, чтобы создать AuthCode и начать оптимизацию страниц этого сайта.";
                txtts6="Основная папка сайта";
                txtts7="Создать AuthCode Topper System SEO";
                txtts8="Скопируйте и вставьте URL-адрес в " + link_api_center_toppersystem + ", чтобы сгенерировать код AuthCode.";
                txtts9="<strong>Настройка и активация Topper System SEO</strong><br>Настройте <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">account Topper System SEO</a>, чтобы создать AuthCode и начать оптимизацию страниц этого сайта.<br><strong>6 месяцев бесплатного пробного периода</strong> для проверки эффективности наших услуг!";

                txtts10="Чтобы активировать новый AuthCode, вы можете получить доступ к своей учетной записи " + email_msg + " по адресу " + link_api_center_toppersystem + ".";
                txtts11="Внимание!";
                txtts12="Сайт зарегистрирован пользователем с адресом электронной почты, отличным от этой учетной записи администратора WP.";
                txtts14="вариант 1)";
                txtts15="Зарегистрируйтесь на " + link_api_center_toppersystem + " и выполните процедуру, чтобы запросить AuthCode этого домена.";
                txtts16="вариант 2)";
                txtts17="Если у вас есть учетные данные законного владельца, зайдите на " + link_api_center_toppersystem + " и получите AuthCode.";
                txtts18="У вас есть два варианта активации плагина:";
                txtts19="Чтобы активировать плагин, войдите в свою учетную запись " + email_msg + " по адресу " + link_api_center_toppersystem + " и получите AuthCode.";
                txtts20="Сайт зарегистрирован пользователем с адресом электронной почты, отличным от этой учетной записи администратора WP.";
                txtts21="У вас есть два варианта активации плагина:";
                txtts22="Войдите в свою учетную запись " + email_msg + " по адресу " + link_api_center_toppersystem + " и выполните процедуру, чтобы запросить AuthCode этого домена.";
                txtts23="Если у вас есть учетные данные законного владельца, зайдите на " + link_api_center_toppersystem + " и получите AuthCode.";
                txtts24="Я прочитал и принимаю условия использования по Topper System SEO.";
                txtts25="Условия использования Topper System SEO";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="输入AuthCode代码";
                txtts1="每个站点只能注册一个AuthCode。 如果输入错误，系统将无法运行！ 您将必须卸载插件并从头开始重复该过程。";
                txtts2="立即激活";
                txtts3="关闭";
                txtts4="优化您的网站以提高其速度并在网络上获得更多可见度";
                //txtts5="<strong>配置并激活</strong><br>配置<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">帐户Topper System SEO</a>生成AuthCode并开始优化此网站的页面。<br><strong>30 天免费试用 </strong> 检查我们服务的有效性！";
                txtts5="<strong>配置并激活</strong><br>配置<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">帐户Topper System SEO</a>生成AuthCode并开始优化此网站的页面。";
                txtts6="主站点文件夹";
                txtts7="产生AuthCode Topper System SEO";
                txtts8="将 url 复制并粘贴到 " + link_api_center_toppersystem + " 以生成 AuthCode";
                txtts9="<strong>配置并激活</strong><br>配置<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">帐户Topper System SEO</a>生成AuthCode并开始优化此网站的页面。<br><strong>6个月免费试用</strong> 检查我们服务的有效性！";

                txtts10="要激活新的授权码，您可以通过 " + link_api_center_toppersystem + " 访问您的 " + email_msg + " 帐户。";
                txtts11="注意！";
                txtts12="该网站是由与此 WP 管理员帐户不同的电子邮件地址的用户注册的。";
                txtts14="选项1)";
                txtts15="在 " + link_api_center_toppersystem + " 上注册并按照流程索取该域名的 AuthCode。";
                txtts16="选项2)";
                txtts17="如果您拥有合法所有者的凭据，请访问 " + link_api_center_toppersystem + " 并检索 AuthCode。";
                txtts18="您有两个选项来激活该插件：";
                txtts19="要激活该插件，请访问您的 " + email_msg + " 帐户（网址为 " + link_api_center_toppersystem + "）并检索 AuthCode。";
                txtts20="该网站是由与此 WP 管理员帐户不同的电子邮件地址的用户注册的。";
                txtts21="您有两个选项来激活插件：";
                txtts22="通过 " + link_api_center_toppersystem + " 登录您的 " + email_msg + " 帐户，然后按照流程获取该域的 AuthCode。";
                txtts23="如果您拥有合法所有者的凭据，请访问 " + link_api_center_toppersystem + " 并检索 AuthCode。";
                txtts24="我已阅读并接受使用条件";
                txtts25="Topper System SEO 使用条款";
            }else if(hreflang_toppersystem == "he"){
                txtts0="הזן את קוד AuthCode";
                txtts1="ניתן לרשום רק AuthCode אחד באתר. אם אתה מזין לא נכון, המערכת לא תעבוד! יהיה עליך להסיר את ההתקנה של התוסף ולחזור על ההליך מההתחלה.";
                txtts2="הפעל כעת";
                txtts3="סגירה";
                txtts4="בצע אופטימיזציה לאתר שלך כדי להגביר את המהירות שלו ולראות יותר רשת ברשת";
                //txtts5="<strong> הגדר והפעל </ strong><br> הגדר את ה <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\"> חשבון Topper System SEO</a> כדי ליצור AuthCode ולהתחיל לבצע אופטימיזציה של דפי אתר זה.<br><strong> ניסיון חינם למשך 30 יום</strong> כדי לבדוק את יעילות השירותים שלנו!";
                txtts5="<strong> הגדר והפעל </ strong><br> הגדר את ה <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\"> חשבון Topper System SEO</a> כדי ליצור AuthCode ולהתחיל לבצע אופטימיזציה של דפי אתר זה.!";
                txtts6="תיקיית אתרים ראשית";
                txtts7="צור AuthCode";
                txtts8="העתק והדבק את כתובת האתר ל-" + link_api_center_toppersystem + " כדי ליצור את ה-AuthCode";
                txtts9="<strong> הגדר והפעל </ strong><br> הגדר את ה <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\"> חשבון Topper System SEO</a> כדי ליצור AuthCode ולהתחיל לבצע אופטימיזציה של דפי אתר זה.<br><strong>6 חודשי ניסיון חינם</strong> כדי לבדוק את יעילות השירותים שלנו!";

                txtts10="כדי להפעיל AuthCode חדש אתה יכול לגשת לחשבון " + email_msg + " שלך בכתובת " + link_api_center_toppersystem + ".";
                txtts11="שימו לב!";
                txtts12="האתר רשום על ידי משתמש עם דוא''ל שונה מחשבון הניהול הזה של WP.";
                txtts14="אופציה 1)";
                txtts15="הירשם ב-" + link_api_center_toppersystem + " ובצע את ההליך כדי לתבוע את ה-AuthCode של הדומיין הזה.";
                txtts16="אופציה 2)";
                txtts17="אם יש לך את האישורים של הבעלים החוקי, גש ל-" + link_api_center_toppersystem + " ואחזר את ה-AuthCode.";
                txtts18="יש לך שתי אפשרויות להפעיל את התוסף:";
                txtts19="כדי להפעיל את הפלאגין גש לחשבון " + email_msg + " שלך בכתובת " + link_api_center_toppersystem + " ואחזר את ה-AuthCode.";
                txtts20="האתר רשום על ידי משתמש עם דוא ''ל שונה מחשבון הניהול הזה של WP.";
                txtts21="יש לך שתי אפשרויות להפעיל את התוסף:";
                txtts22="התחבר לחשבון " + email_msg + " שלך בכתובת " + link_api_center_toppersystem + " ובצע את ההליך כדי לתבוע את ה-AuthCode של דומיין זה.";
                txtts23="אם יש לך את האישורים של הבעלים החוקי, גש אל " + link_api_center_toppersystem + " ואחזר את ה-AuthCode.";
                txtts24="קראתי ומקבל את תנאי השימוש";
                txtts25="תנאי השימוש של Topper System SEO";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Intra codice AUTHCODE";
                txtts1="E' possunt nisi in recordarentur AUTHCODE site. Si autem non intrabit in falsa systema operis? Vos mos postulo ut amoveas plugin quod satus iterum.";
                txtts2="nunc strenuus";
                txtts3="prope";
                txtts4="Est ad optimize vestri website celeritate proventus suum et ultra visibilitàin Network";
                //txtts5="<strong>Setup et Activate</strong> Latin configurare rationi<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO</a> ideo generare AUTHCODE optimizing paginas huius website quod satus.<br><strong>30-day free trial</strong> ad reprimendam efficaciam servitiorum nostrorum!";
                txtts5="<strong>Setup et Activate</strong> Latin configurare rationi<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO</a> ideo generare AUTHCODE optimizing paginas huius website quod satus.";
                txtts6="Situs Pellentesque";
                txtts7="AUTHCODE generate";
                txtts8="Effingo et crustulum url ad " + link_api_center_toppersystem + " systematis ad generandum AuthCode";
                txtts9="<strong>Setup et Activate</strong> Latin configurare rationi<a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO</a> ideo generare AUTHCODE optimizing paginas huius website quod satus.<br><strong>VI menses liberum iudicium</strong> ad reprimendam efficaciam servitiorum nostrorum!";

                txtts10="Novum AuthCode movere potes accedere tuum " + email_msg + " rationem apud " + link_api_center_toppersystem + ".";
                txtts11="Attention!";
                txtts12=" Situs a user cum alia inscriptione relatus est quam hanc rationem WP admin.";
                txtts14="option 1)";
                txtts15="Register in " + link_api_center_toppersystem + " et modum procedendi ad vindicandi AuthCode huius areae";
                txtts16="option 2)";
                txtts17="Si documentorum iuris possessoris habes, accessum " + link_api_center_toppersystem + " et AuthCode recupera.";
                txtts18="Habes duas optiones ad activate plugin:";
                txtts19="Ad excitandum plugin accessum tuum " + email_msg + " rationem apud " + link_api_center_toppersystem + " et recuperare AuthCode.";
                txtts20=" Situs ab usore relatus est cum alia inscriptione quam hoc WP admin ob";
                txtts21="Habes duas optiones ad activate plugin:";
                txtts22="Login to your " + email_msg + " rationem in " + link_api_center_toppersystem + " et modum procedendi ut petat AuthCode huius areae";
                txtts23="Si documentorum iuris possessoris habes, accessum " + link_api_center_toppersystem + " et AuthCode recupera.";
                txtts24="Legi et ego: et conveniunt ad conditionibus usus Topper System SEO.";
                txtts25="Topper System SEO Terms of Use";
            }else{
                txtts0="Enter the AuthCode code";
                txtts1="Only one AuthCode can be registered at a website.";
                txtts2="Activate now";
                txtts3="Close";
                txtts4="Optimize your site to increase its speed and have more visibility Network";
                //txtts5="<strong>Configure and activate Topper System SEO</strong><br>Configure your <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO account</a> to generate AuthCode and start optimizing the pages of this website.<br><strong>30-day free trial</strong> to check the effectiveness of our services!";
                txtts5="<strong>Configure and activate Topper System SEO</strong><br>Configure your <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO account</a> to generate AuthCode and start optimizing the pages of this website.";
                txtts6="Main site folder";
                txtts7="Generate AuthCode Topper System SEO";
                txtts8="Copy and paste the url to " + link_api_center_toppersystem + " to generate the AuthCode";
                txtts9="<strong>Configure and activate Topper System SEO</strong><br>Configure your <a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\">Topper System SEO account</a> to generate AuthCode and start optimizing the pages of this website.<br><strong>6 months free trial</strong> to check the effectiveness of our services!";

                txtts10="To activate a new AuthCode you can access your " + email_msg + " account at " + link_api_center_toppersystem + ".";
                txtts11="Attention!";
                txtts12="The site is registered by a user with a different email than this WP admin account.";
                txtts14="option 1)";
                txtts15="Register on " + link_api_center_toppersystem + " and follow the procedure to claim the AuthCode of this domain.";
                txtts16="option 2)";
                txtts17="If you have the credentials of the rightful owner, access " + link_api_center_toppersystem + " and retrieve the AuthCode.";
                txtts18="You have two options to activate the plugin:";
                txtts19="To activate the plugin access your " + email_msg + " account at " + link_api_center_toppersystem + " and retrieve the AuthCode.";
                txtts20="The site is registered by a user with a different email than this WP admin account.";
                txtts21="You have two options to activate the plugin:";
                txtts22="Login to your " + email_msg + " account at " + link_api_center_toppersystem + " and follow the procedure to claim the AuthCode of this domain.";
                txtts23="If you have the credentials of the rightful owner, access " + link_api_center_toppersystem + " and retrieve the AuthCode.";
                txtts24="I have read and accept the conditions of use of the Topper System SEO.";
                txtts25="Topper System SEO Terms of Use";
            }

            var class_get_ts="management_toppersystem_activation";
            var response_alert;
            var add_autoloadcheck_msg_toppersystem;
            if(document.getElementById('autoloadcheck_msg_toppersystem')){
                if(document.getElementById('autoloadcheck_msg_toppersystem').value.trim() != ""){
                    if(parseFloat(document.getElementById('autoloadcheck_msg_toppersystem').value) == "1"){
                        response_alert="<br><div class=\"green_mask_register_toppersystem\"><small>" + txtts10 + "</small></div>";

                        class_get_ts="management_toppersystem_activation_with_banner";
                    }else if(parseFloat(document.getElementById('autoloadcheck_msg_toppersystem').value) == "2"){
                        response_alert="<br><div class=\"red_mask_register_toppersystem\"><small><big><strong>" + txtts11 + "</strong></big><br>" + txtts12 + "<br><strong>" + txtts18 + "</strong><br><strong>" + txtts14 + "</strong> " + txtts15 + "<br><strong>" + txtts16 + "</strong> " + txtts17 + "</small></div>";

                        class_get_ts="management_toppersystem_activation_with_banner";
                    }else if(parseFloat(document.getElementById('autoloadcheck_msg_toppersystem').value) == "3"){
                        response_alert="<br><div class=\"red_mask_register_toppersystem\"><small><big><strong>" + txtts11 + "</strong></big><br>" + txtts19 + "</small></div>";

                        class_get_ts="management_toppersystem_activation";
                    }else if(parseFloat(document.getElementById('autoloadcheck_msg_toppersystem').value) == "4"){
                        response_alert="<br><div class=\"red_mask_register_toppersystem\"><small><big><strong>" + txtts11 + "</strong></big><br>" + txtts20 + "<br><strong>" + txtts21 + "</strong><br><strong>" + txtts14 + "</strong> " + txtts22 + "<br><strong>" + txtts16 + "</strong> " + txtts23 + "</small></div>";

                        class_get_ts="management_toppersystem_activation_with_banner";
                    }else{
                        response_alert="";
                    }

                    add_autoloadcheck_msg_toppersystem=response_alert;
                }else{
                    add_autoloadcheck_msg_toppersystem="";
                }                
            }else{
                add_autoloadcheck_msg_toppersystem="";
            }
		    var date_now = new Date();
		    var date_finish_promotion = new Date('09/30/2023');
		    if(date_now < date_finish_promotion){
			    //txtts5=txtts9;
		    }

            var free_test_toppersystem="<br><div class=\"auth_register_text_toppersystem\"><small>"+ txtts5 + "</small></div>";

            if(document.getElementById('autoloadcheck_free_toppersystem')){
                if(document.getElementById('autoloadcheck_free_toppersystem').value.trim() != ""){
                    free_test_toppersystem="";
                }
                document.getElementById('autoloadcheck_free_toppersystem').value="";
            }            

            var iframe_terms_condictions_toppersystem="<div id=\"box_request_terms_condiction_all_toppersystem\" class=\"box_request_terms_condiction_all_toppersystem\"><iframe id=\"frame_terms_condictions_toppersystem\" sandbox src=\"" + document.getElementById('idtermsandcondictionslink_toppersystem').value.trim() + "\" class=\"termsandcondictions_toppersystem_hidden wxdth100_toppersystem\" onload=\"render_view_terms_condictions_toppersystem()\" onunload=\"rendernoload_view_terms_condictions_toppersystem()\">" + document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim() + "</iframe><div id=\"loading_frame_terms_condictions_toppersystem\" class=\"box_request_terms_condiction_all_toppersystem wxdth100_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div id=\"wait_load_ts\" class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div><div id=\"noloading_frame_terms_condictions_toppersystem\" class=\"wxdth100_txtleft_toppersystem display_none_ts\"><small><small>" + txtts25 + "<br><a target=\"_blank\" rel=\"nofollow\" href=\"" + document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim() + "\">" + document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim() + "</a></small></small></div></td></tr></table></div></div>";

            var url_toppersystem=document.getElementById('domain_toppersystem').value;
		    var add = document.createElement("div");
		    add.setAttribute("id", "management_toppersystem");
            add.setAttribute("class", class_get_ts + " animate_y_bottom");
		    add.innerHTML="<div class=\"auth_register_title_toppersystem\"><big><strong>"+ txtts4 + "</strong></big></div>" + add_autoloadcheck_msg_toppersystem + free_test_toppersystem + "<div>" + render_contact_email_toppersystem + "</div><br><div id=\"idauth_register_code_toppersystem\" class=\"auth_register_code_toppersystem guidebox_checkbox_selected_ts\" onclick=\"copy_auth_register_code_toppersystem()\">"+ url_toppersystem + "</div>&nbsp;&nbsp;<div class=\"white_space_nxwrap_toppersystem\"><i>" + txtts6 + "</i></div><br><small><i>" + txtts8 + "</i> <a rel=\"nofollow\" class=\"text_support_toppersystem\" href=\"javascript:open_screenshot_image_authcode_toppersystem();\">(i)</a></small><br><br><input id=\"authcode_toppersystem_register\" name=\"authcode_toppersystem_register\" type=\"text\" placeholder=\"" + txtts0 + "\" value=\"\" class=\"inputform_toppersystem\" onclick=\"ok_write_authcode()\">&nbsp;&nbsp;<div class=\"white_space_nxwrap_toppersystem\"><a rel=\"nofollow\" target=\"_blank\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_toppersystem + "\"><small>" + txtts7 + "</small></a></div><br><br><br>" + iframe_terms_condictions_toppersystem + "<small><small>" + txtts1 + "<br><input id=\"check_privacy_toppersystem_send\" name=\"check_privacy_toppersystem_send\" type=\"checkbox\" onclick=\"ok_write_privacy()\" class=\"\"> " + txtts24 + "</small></small><br><br><a rel=\"nofollow\" id=\"go_toppersystem_send\" class=\"button-primary white_color_toppersystem\" href=\"javascript:SendProcessStartToppersystem();\">" + txtts2 + "</a>&nbsp;&nbsp; <a rel=\"nofollow\" id=\"close_toppersystem_send\" class=\"button-primary white_color_toppersystem\" href=\"javascript:CloseProcessStartToppersystem();\">" + txtts3 + "</a>";
		    document.body.appendChild(add);
            setTimeout("rendernoload_view_terms_condictions_toppersystem()", 2000);

            if(document.getElementById('autoloadcheck_msg_toppersystem')){
                document.getElementById('autoloadcheck_msg_toppersystem').value="";
            }
	    }
    }
}

function SendProcessStartToppersystem()
{
	if(ControllerFunction2() == true){
		setTimeout("SendProcessStartToppersystem2()", 80);
	}
}

function SendProcessStartToppersystem2()
{
	if(ControllerFunction2() == true){

		if((document.getElementById('authcode_toppersystem_register'))&&(document.getElementById('domain_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))){

            if((document.getElementById('authcode_toppersystem_register').value.trim() == "")||(document.getElementById('authcode_toppersystem_register').value.length != 32)){		
                document.getElementById('authcode_toppersystem_register').className="inputform_toppersystem border_red";
            }
            if(document.getElementById('check_privacy_toppersystem_send').checked != true){		
                document.getElementById('check_privacy_toppersystem_send').className="border_red";
                var hreflang_toppersystem_privacy=document.getElementById('hreflang_toppersystem').value.trim();                            
                var txtts_check_privacy;
                if(hreflang_toppersystem_privacy == "it"){    
                   txtts_check_privacy="Il campo condizioni d'uso è obbligatorio";
                }else if(hreflang_toppersystem_privacy == "ar"){ 
                   txtts_check_privacy="شروط مجال الاستخدام إلزامية";
                }else if(hreflang_toppersystem_privacy == "de"){ 
                   txtts_check_privacy="Das Feld Nutzungsbedingungen ist obligatorisch";
                }else if(hreflang_toppersystem_privacy == "es"){ 
                   txtts_check_privacy="El campo de condiciones de uso es obligatorio";
                }else if(hreflang_toppersystem_privacy == "fr"){ 
                   txtts_check_privacy="Le champ des conditions d'utilisation est obligatoire";
                }else if(hreflang_toppersystem_privacy == "hi"){ 
                   txtts_check_privacy="उपयोग क्षेत्र की शर्तें अनिवार्य हैं";
                }else if(hreflang_toppersystem_privacy == "ja"){ 
                   txtts_check_privacy="利用条件欄は必須です";
                }else if(hreflang_toppersystem_privacy == "pl"){ 
                   txtts_check_privacy="Warunki użytkowania pola są obowiązkowe";
                }else if(hreflang_toppersystem_privacy == "pt"){ 
                   txtts_check_privacy="O campo de condições de uso é obrigatório";
                }else if(hreflang_toppersystem_privacy == "ru"){ 
                   txtts_check_privacy="Поле условий использования является обязательным";
                }else if(hreflang_toppersystem_privacy == "zh"){ 
                   txtts_check_privacy="使用条件字段为必填项";
                }else if(hreflang_toppersystem_privacy == "he"){ 
                   txtts_check_privacy="תנאי השימוש בשדה חובה";
                }else if(hreflang_toppersystem_privacy == "la"){ 
                   txtts_check_privacy="In agro conditionibus usus sit amet";
                }else{   
                   txtts_check_privacy="The conditions of use field is mandatory";
                }
                alert(txtts_check_privacy);
            }
			if(((document.getElementById('authcode_toppersystem_register').value.trim() != "")&&(document.getElementById('authcode_toppersystem_register').value.length == 32))&&(document.getElementById('domain_toppersystem').value.trim() != "")&&(document.getElementById('check_privacy_toppersystem_send').checked == true)){

				var xhr = new XMLHttpRequest();
                xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
				xhr.send();
				xhr.addEventListener("readystatechange", processRequest, false);
				function processRequest(e) {
					if (xhr.readyState == 4) {
						if (xhr.status >= 200 && xhr.status < 304) {			
				            var http = new XMLHttpRequest();

				            http.onreadystatechange = function() {
					            if(http.readyState == 4 && http.status == 200) {
						            if(http.responseText != ""){
                                        var response="";
						                if(http.responseText.trim() == "ok"){
                                            if(document.getElementById('toppersystem')){
                                                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
                                                var txtts0;                                        
									            if(hreflang_toppersystem == "it"){    
										            txtts0="Topper System SEO è attivo";
									            }else if(hreflang_toppersystem == "ar"){ 
										            txtts0="Topper System SEO نشط"; 
									            }else if(hreflang_toppersystem == "de"){ 
										            txtts0="Topper System SEO ist aktiv"; 
									            }else if(hreflang_toppersystem == "es"){ 
										            txtts0="Topper System SEO está activo"; 
									            }else if(hreflang_toppersystem == "fr"){ 
										            txtts0="Topper System SEO est actif"; 
									            }else if(hreflang_toppersystem == "hi"){ 
										            txtts0="Topper System SEO सक्रिय है"; 
									            }else if(hreflang_toppersystem == "ja"){ 
										            txtts0="Topper System SEO アクティブです"; 
									            }else if(hreflang_toppersystem == "pl"){ 
										            txtts0="Topper System SEO jest aktywny"; 
									            }else if(hreflang_toppersystem == "pt"){ 
										            txtts0="Topper System SEO está ativo"; 
									            }else if(hreflang_toppersystem == "ru"){ 
										            txtts0="Topper System SEO активен"; 
									            }else if(hreflang_toppersystem == "zh"){ 
										            txtts0="Topper System SEO 活跃"; 
									            }else if(hreflang_toppersystem == "he"){ 
										            txtts0="Topper System SEO פעיל"; 
									            }else if(hreflang_toppersystem == "la"){ 
										            txtts0="Topper System SEO est active"; 
									            }else{   
										            txtts0="Topper System SEO is active";
									            }
							            
							                    document.getElementById('toppersystem').innerHTML=txtts0;
                                            }
	                                        if(document.getElementById('management_toppersystem')){             
		                                        document.body.removeChild(document.getElementById('management_toppersystem'));
	                                        }
	                                        if(document.getElementById('button_toppersystem')){ 
                                        		document.body.removeChild(document.getElementById('button_toppersystem'));
	                                        }
                                            response=http.responseText.trim();						
						                }else if(http.responseText.trim() == "toppersystem error 0"){
                                            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;                                      
                                            if(hreflang_toppersystem == "it"){    
	                                            response="La configurazione impostata per questo sito non permette il corretto funzionamento del plugin. Non siamo riusciti a trovare il file wp-load.php";
                                            }else if(hreflang_toppersystem == "ar"){ 
	                                            response="مجموعة التكوين لهذا الموقع لا تسمح للمكون الإضافي بالعمل بشكل صحيح. لم نتمكن من العثور على ملف wp-load.php";
                                            }else if(hreflang_toppersystem == "de"){ 
	                                            response="Die für diese Seite festgelegte Konfiguration lässt das Plugin nicht richtig funktionieren. Wir konnten die Datei wp-load.php nicht finden"; 
                                            }else if(hreflang_toppersystem == "es"){ 
	                                            response="La configuración establecida para este sitio no permite que el complemento funcione correctamente. No pudimos encontrar el archivo wp-load.php";
                                            }else if(hreflang_toppersystem == "fr"){ 
	                                            response="La configuration définie pour ce site ne permet pas au plugin de fonctionner correctement. Nous n'avons pas pu trouver le fichier wp-load.php";
                                            }else if(hreflang_toppersystem == "hi"){ 
	                                            response="इस साइट के लिए सेट किया गया कॉन्फ़िगरेशन प्लग इन को ठीक से काम करने की अनुमति नहीं देता है। हमें wp-load.php फ़ाइल नहीं मिली";
                                            }else if(hreflang_toppersystem == "ja"){ 
	                                            response="このサイトの構成セットでは、プラグインが正しく機能しません。 wp-load.phpファイルが見つかりませんでした";
                                            }else if(hreflang_toppersystem == "pl"){ 
	                                            response="Konfiguracja ustawiona dla tej witryny nie pozwala na poprawne działanie wtyczki. Nie mogliśmy znaleźć pliku wp-load.php";
                                            }else if(hreflang_toppersystem == "pt"){ 
	                                            response="A configuração definida para este site não permite que o plugin funcione corretamente. Não foi possível encontrar o arquivo wp-load.php";
                                            }else if(hreflang_toppersystem == "ru"){ 
	                                            response="Набор настроек для этого сайта не позволяет плагину работать корректно. Не удалось найти файл wp-load.php";
                                            }else if(hreflang_toppersystem == "zh"){ 
	                                            response="此站点的配置集不允许插件正常运行。我们找不到 wp-load.php 文件";
                                            }else if(hreflang_toppersystem == "he"){ 
	                                            response="הגדרת התצורה עבור אתר זה אינה מאפשרת לפלאגין לפעול כהלכה. לא הצלחנו למצוא את הקובץ wp-load.php";
                                            }else if(hreflang_toppersystem == "la"){ 
	                                            response="Configuratio posita huius situs plugin recte operari non patitur. Non potuimus invenire wp-load.php lima";
                                            }else{   
	                                            response="The configuration set for this site does not allow the plugin to function correctly. We could not find the wp-load.php file";
                                            }                                
                                        }else{
                                            response=http.responseText.trim();
                                        }				

                                        alert(response);
                                        if(http.responseText.trim() == "ok"){
                                            setTimeout("GotoStartToppersystem()", 1600);
                                        }					
						            }
					            }else if(http.readyState == 4 && http.status != 200) {
                                    if(document.getElementById('toppersystem')){
                                        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
                                        var txtts1;        
                                        if(hreflang_toppersystem == "it"){    
	                                        txtts1="Abbiamo trovato un problema di dialogo con il tuo server. Il codice di stato rilevato è: " + http.status;
                                        }else if(hreflang_toppersystem == "ar"){ 
	                                        txtts1="وجدنا مشكلة حوار مع الخادم الخاص بك. رمز الحالة المكتشف هو: " + http.status;
                                        }else if(hreflang_toppersystem == "de"){ 
	                                        txtts1="Wir haben ein Dialogproblem mit Ihrem Server gefunden. Der erkannte Statuscode lautet: " + http.status; 
                                        }else if(hreflang_toppersystem == "es"){ 
	                                        txtts1="Encontramos un problema de diálogo con su servidor. El código de estado detectado es: " + http.status; 
                                        }else if(hreflang_toppersystem == "fr"){ 
	                                        txtts1="Nous avons trouvé un problème de dialogue avec votre serveur. Le code d'état détecté est: " + http.status; 
                                        }else if(hreflang_toppersystem == "hi"){ 
	                                        txtts1="हमें आपके सर्वर के साथ एक संवाद समस्या मिली। पता चला स्थिति कोड है0: " + http.status; 
                                        }else if(hreflang_toppersystem == "ja"){ 
	                                        txtts1="サーバーとの対話の問題が見つかりました。検出されたステータスコードは次のとおりです。 " + http.status;
                                        }else if(hreflang_toppersystem == "pl"){ 
	                                        txtts1="Znaleźliśmy problem z dialogiem na Twoim serwerze. Wykryty kod stanu to: " + http.status; 
                                        }else if(hreflang_toppersystem == "pt"){ 
	                                        txtts1="Encontramos um problema de diálogo com seu servidor. O código de status detectado é: " + http.status; 
                                        }else if(hreflang_toppersystem == "ru"){ 
	                                        txtts1="Мы обнаружили проблему диалога с вашим сервером. Обнаруженный код состояния: " + http.status; 
                                        }else if(hreflang_toppersystem == "zh"){ 
	                                        txtts1="我们发现您的服务器存在对话问题。检测到的状态码为： " + http.status; 
                                        }else if(hreflang_toppersystem == "he"){ 
	                                        txtts1="מצאנו בעיית דיאלוג עם השרת שלך. קוד המצב שזוהה הוא: " + http.status;
                                        }else if(hreflang_toppersystem == "la"){ 
	                                        txtts1="Difficultas dialogi invenimus cum servo tuo. Deprehensio status codice is: " + http.status; 
                                        }else{   
	                                        txtts1="We found a dialogue problem with your server. The detected status code is: " + http.status;
                                        }							
                                        alert(txtts1.trim());
                                    }
					            }else{
						            if(http.readyState == 1) {						

						            }else if(http.readyState == 2) {

						            }else if(http.readyState == 3) {
						            
						            }
				                    
					            }
				            }
				            
				            var url = ajax_components_toppersystem.url;
                            var params = "action=componentstoppersystem2ajax&_nonce=" + ajax_components_toppersystem.nonce + "&authcode_toppersystem_register=" + encodeURIComponent(document.getElementById('authcode_toppersystem_register').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
				            http.open("POST", url, true);
				            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				            http.send(params);			
			            }else{
							var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
							var txtts0;
							if(hreflang_toppersystem == "it"){    
							   txtts0="Connessione non riuscita";
							}else if(hreflang_toppersystem == "ar"){ 
							   txtts0="فشل الاتصال";
							}else if(hreflang_toppersystem == "de"){ 
							   txtts0="Verbindung fehlgeschlagen";
							}else if(hreflang_toppersystem == "es"){ 
							   txtts0="Conexión fallida";
							}else if(hreflang_toppersystem == "fr"){ 
							   txtts0="La connexion a échoué";
							}else if(hreflang_toppersystem == "hi"){ 
							   txtts0="कनेक्शन विफल हुआ";
							}else if(hreflang_toppersystem == "ja"){ 
							   txtts0="接続できませんでした";
							}else if(hreflang_toppersystem == "pl"){ 
							   txtts0="Połączenie nieudane";
							}else if(hreflang_toppersystem == "pt"){ 
							   txtts0="Falha na conexão";
							}else if(hreflang_toppersystem == "ru"){ 
							   txtts0="Ошибка подключения";
							}else if(hreflang_toppersystem == "zh"){ 
							   txtts0="连接失败";
							}else if(hreflang_toppersystem == "he"){ 
							   txtts0="החיבור נכשל";
							}else if(hreflang_toppersystem == "la"){ 
							   txtts0="Deficio Connection";
							}else{   
							   txtts0="Connection failed";
							}
							alert(txtts0);
						}
					}
				}

            }
		}else{

		}
	}
}

function ProcessStartAutoLoadToppersystem()
{
	if(ControllerFunction() == true){
        if(document.getElementById('check_privacy_toppersystem_send')){
            if(document.getElementById('check_privacy_toppersystem_send').checked != true){		
                 document.getElementById('check_privacy_toppersystem_send').className="border_red";
                 var hreflang_toppersystem_privacy=document.getElementById('hreflang_toppersystem').value.trim();      
                 var txtts_check_privacy;
                 if(hreflang_toppersystem_privacy == "it"){    
                    txtts_check_privacy="Il campo condizioni d'uso è obbligatorio";
                 }else if(hreflang_toppersystem_privacy == "ar"){ 
                    txtts_check_privacy="شروط مجال الاستخدام إلزامية";
                 }else if(hreflang_toppersystem_privacy == "de"){ 
                    txtts_check_privacy="Das Feld Nutzungsbedingungen ist obligatorisch";
                 }else if(hreflang_toppersystem_privacy == "es"){ 
                    txtts_check_privacy="El campo de condiciones de uso es obligatorio";
                 }else if(hreflang_toppersystem_privacy == "fr"){ 
                    txtts_check_privacy="Le champ des conditions d'utilisation est obligatoire";
                 }else if(hreflang_toppersystem_privacy == "hi"){ 
                    txtts_check_privacy="उपयोग क्षेत्र की शर्तें अनिवार्य हैं";
                 }else if(hreflang_toppersystem_privacy == "ja"){ 
                    txtts_check_privacy="利用条件欄は必須です";
                 }else if(hreflang_toppersystem_privacy == "pl"){ 
                    txtts_check_privacy="Warunki użytkowania pola są obowiązkowe";
                 }else if(hreflang_toppersystem_privacy == "pt"){ 
                    txtts_check_privacy="O campo de condições de uso é obrigatório";
                 }else if(hreflang_toppersystem_privacy == "ru"){ 
                    txtts_check_privacy="Поле условий использования является обязательным";
                 }else if(hreflang_toppersystem_privacy == "zh"){ 
                    txtts_check_privacy="使用条件字段为必填项";
                 }else if(hreflang_toppersystem_privacy == "he"){ 
                    txtts_check_privacy="תנאי השימוש בשדה חובה";
                 }else if(hreflang_toppersystem_privacy == "la"){ 
                    txtts_check_privacy="In agro conditionibus usus sit amet";
                 }else{   
                    txtts_check_privacy="The conditions of use field is mandatory";
                 }
                 alert(txtts_check_privacy);
             }else{
                 setTimeout("ProcessStartAutoLoadToppersystem2()", 80);           
             }
         }else{
             setTimeout("close_request_automatic_register_toppersystem()", 80);
         }
	}
}

function ProcessStartAutoLoadToppersystem2()
{
	if(ControllerFunction() == true){

        if((document.getElementById('autoload_req_toppersystem'))&&(document.getElementById('domain_toppersystem'))&&(document.getElementById('req_email_toppersystem_register'))&&(document.getElementById('req_name_toppersystem_register'))){

            if(((document.getElementById('autoload_req_toppersystem').value.trim() != "")&&(document.getElementById('req_email_toppersystem_register').value.trim() != ""))&&(document.getElementById('domain_toppersystem').value.trim() != "")){

                document.getElementById('box_request_automatic_register_toppersystem').className = "stxle_request_events_terms_condictions_toppersystem display_none_ts";
                document.getElementById('stxle_request_automatic_register_toppersystem').className = "stxle_request_events_terms_condictions_toppersystem";

				var xhr = new XMLHttpRequest();
                xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
				xhr.send();
				xhr.addEventListener("readystatechange", processRequest, false);
				function processRequest(e) {
					if (xhr.readyState == 4) {
						if (xhr.status >= 200 && xhr.status < 304) {			
				            var http = new XMLHttpRequest();

				            http.onreadystatechange = function() {

                                 var hreflang_toppersystem_error=document.getElementById('hreflang_toppersystem').value.trim();      
                                 var txtts1_error_msg;
                                 var txtts2_error_msg;
                                 var txtts3_error_msg;
                                 if(hreflang_toppersystem_error == "it"){    
                                    txtts1_error_msg="Spiacenti!";
                                    txtts2_error_msg="Il processo di registrazione automatica su Api Center Topper System SEO non è andato a buon fine.";
                                    txtts3_error_msg="Ti consigliamo di registrarti manualmente:";
                                 }else if(hreflang_toppersystem_error == "ar"){ 
                                    txtts1_error_msg="آسف!";
                                    txtts2_error_msg="لم تنجح عملية التسجيل التلقائي في Api Center Topper System SEO.";
                                    txtts3_error_msg="نوصي بالتسجيل يدويًا:";
                                 }else if(hreflang_toppersystem_error == "de"){ 
                                    txtts1_error_msg="Entschuldigung!";
                                    txtts2_error_msg="Der automatische Registrierungsprozess auf Api Center Topper System SEO war nicht erfolgreich.";
                                    txtts3_error_msg="Wir empfehlen die manuelle Registrierung:";
                                 }else if(hreflang_toppersystem_error == "es"){ 
                                    txtts1_error_msg="¡Lo siento!";
                                    txtts2_error_msg="El proceso de registro automático en Api Center Topper System SEO no fue exitoso.";
                                    txtts3_error_msg="Recomendamos registrarse manualmente:";
                                 }else if(hreflang_toppersystem_error == "fr"){ 
                                    txtts1_error_msg="Désolé!";
                                    txtts2_error_msg="Le processus d'enregistrement automatique sur Api Center Topper System SEO n'a pas abouti.";
                                    txtts3_error_msg="Nous vous recommandons de vous inscrire manuellement:";
                                 }else if(hreflang_toppersystem_error == "hi"){ 
                                    txtts1_error_msg="क्षमा मांगना!";
                                    txtts2_error_msg="Api Center Topper System SEO पर स्वचालित पंजीकरण प्रक्रिया सफल नहीं रही।";
                                    txtts3_error_msg="हम मैन्युअल रूप से पंजीकरण करने की अनुशंसा करते हैं:";
                                 }else if(hreflang_toppersystem_error == "ja"){ 
                                    txtts1_error_msg="ごめん！";
                                    txtts2_error_msg="Api Center Topper System SEO の自動登録プロセスは成功しませんでした。";
                                    txtts3_error_msg="手動で登録することをお勧めします。";
                                 }else if(hreflang_toppersystem_error == "pl"){ 
                                    txtts1_error_msg="Przepraszam!";
                                    txtts2_error_msg="Proces automatycznej rejestracji na Api Center Topper System SEO nie powiódł się.";
                                    txtts3_error_msg="Zalecamy rejestrację ręczną:";
                                 }else if(hreflang_toppersystem_error == "pt"){ 
                                    txtts1_error_msg="Desculpe!";
                                    txtts2_error_msg="O processo de registro automático no Api Center Topper System SEO não foi bem-sucedido.";
                                    txtts3_error_msg="Recomendamos registrar manualmente:";
                                 }else if(hreflang_toppersystem_error == "ru"){ 
                                    txtts1_error_msg="Извини!";
                                    txtts2_error_msg="Процесс автоматической регистрации на Api Center Topper System SEO не увенчался успехом.";
                                    txtts3_error_msg="Рекомендуем зарегистрироваться вручную:";
                                 }else if(hreflang_toppersystem_error == "zh"){ 
                                    txtts1_error_msg="对不起！";
                                    txtts2_error_msg="Api Center Topper System SEO 上的自动注册过程未成功。";
                                    txtts3_error_msg="我们建议手动注册：";
                                 }else if(hreflang_toppersystem_error == "he"){ 
                                    txtts1_error_msg="מצטער!";
                                    txtts2_error_msg="תהליך הרישום האוטומטי ב- Api Center Topper System SEO לא הצליח.";
                                    txtts3_error_msg="אנו ממליצים להירשם באופן ידני:";
                                 }else if(hreflang_toppersystem_error == "la"){ 
                                    txtts1_error_msg="Ignosce!";
                                    txtts2_error_msg="Processus registrationis latis in Api Center Topper System SEO felix non fuit.";
                                    txtts3_error_msg="Commendamus perscriptum manually:";
                                 }else{   
                                    txtts1_error_msg="Sorry!";
                                    txtts2_error_msg="The automatic registration process on Api Center Topper System SEO was not successful.";
                                    txtts3_error_msg="We recommend registering manually:";
                                 }
                                var txtts_error_msg=txtts1_error_msg + "\n" + txtts2_error_msg + "\n" + txtts3_error_msg + "\n" + document.getElementById('idapicenterlinkweb_toppersystem').value.trim();

					            if(http.readyState == 4 && http.status == 200) {
						            if(http.responseText != ""){
                                        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
                                        var response="";
                                        var httpresponse="";
                                        var pswresponse="";
                                        var arr_valore;
                                        var valore_ver;
                                        var httpresponseblock=http.responseText.trim();
                                        valore_ver = http.responseText.trim().replace('||||', '');
                                        if(httpresponseblock != valore_ver){
                                            arr_valore=httpresponseblock.split("||||");
                                            if(arr_valore[1]){
                                                httpresponse=arr_valore[0];
                                                pswresponse=arr_valore[1];
                                            }else{
                                                httpresponse=http.responseText.trim();
                                            }
                                        }else{
                                            httpresponse=http.responseText.trim();
                                        }
						                if(httpresponse == "ok"){
                                            var txtts1;
                                            var txtts2;
                                            var txtts3;
                                            var txtts4;
                                            if(hreflang_toppersystem == "it"){    
	                                            response="Topper System SEO è stato attivato con successo! Inizia a ottimizzare adesso le pagine del tuo sito web... Per ottenere il massimo dei risultati attiva anche i nostri Servizi inclusi nel plugin.";
                                                txtts1="IMPORTANTE";
                                                txtts2="Le tue credenziali per accedere su Api Center Topper System SEO";
                                                txtts3="Utente:";
                                                txtts4="Password:";
                                            }else if(hreflang_toppersystem == "ar"){ 
	                                            response="تم تفعيل Topper System SEO بنجاح! ابدأ في تحسين صفحات موقعك على الويب الآن ... للحصول على أفضل النتائج ، قم أيضًا بتنشيط خدماتنا المضمنة في المكون الإضافي.";
                                                txtts1="هام";
                                                txtts2="بيانات الاعتماد الخاصة بك للوصول إلى Api Center Topper System SEO";
                                                txtts3="المستخدم:";
                                                txtts4="كلمة المرور:";
                                            }else if(hreflang_toppersystem == "de"){ 
	                                            response="Topper System SEO wurde erfolgreich aktiviert! Beginnen Sie jetzt mit der Optimierung Ihrer Website-Seiten ... Um die besten Ergebnisse zu erzielen, aktivieren Sie auch unsere im Plugin enthaltenen Dienste."; 
                                                txtts1="WICHTIG";
                                                txtts2="Ihre Zugangsdaten für den Zugriff auf Api Center Topper System SEO";
                                                txtts3="Benutzer:";
                                                txtts4="Passwort:";
                                            }else if(hreflang_toppersystem == "es"){ 
	                                            response="Topper System SEO ha sido activado exitosamente! Comience a optimizar las páginas de su sitio web ahora... Para obtener los mejores resultados, active también nuestros Servicios incluidos en el complemento.";
                                                txtts1="IMPORTANTE";
                                                txtts2="Tus credenciales para acceder a Api Center Topper System SEO";
                                                txtts3="Usuario:";
                                                txtts4="Contraseña:";
                                            }else if(hreflang_toppersystem == "fr"){ 
	                                            response="Topper System SEO a été activé avec succès ! Commencez dès maintenant à optimiser les pages de votre site Web... Pour obtenir les meilleurs résultats, activez également nos services inclus dans le plugin.";
                                                txtts1="IMPORTANT";
                                                txtts2="Vos identifiants pour accéder à Api Center Topper System SEO";
                                                txtts3="Utilisateur:";
                                                txtts4="Mot de passe:";
                                            }else if(hreflang_toppersystem == "hi"){ 
	                                            response="टॉपर सिस्टम SEO को सफलतापूर्वक सक्रिय कर दिया गया है! अपने वेबसाइट पेजों को अभी अनुकूलित करना शुरू करें... सर्वोत्तम परिणाम प्राप्त करने के लिए, प्लगइन में शामिल हमारी सेवाओं को भी सक्रिय करें।";
                                                txtts1="महत्वपूर्ण";
                                                txtts2="Api Center Topper System SEO तक पहुंचने के लिए आपकी साख";
                                                txtts3="उपयोगकर्ता:";
                                                txtts4="पासवर्ड:";
                                            }else if(hreflang_toppersystem == "ja"){ 
	                                            response="Topper System SEO の有効化に成功しました！ ウェブサイト ページの最適化を今すぐ始めましょう... 最良の結果を得るには、プラグインに含まれるサービスも有効にしてください。";
                                                txtts1="重要";
                                                txtts2="Api Center Topper System SEO にアクセスするための資格情報";
                                                txtts3="ユーザー:";
                                                txtts4="パスワード:";
                                            }else if(hreflang_toppersystem == "pl"){ 
	                                            response="Topper System SEO został pomyślnie aktywowany! Zacznij optymalizować strony swojej witryny już teraz... Aby uzyskać najlepsze wyniki, aktywuj również nasze Usługi zawarte we wtyczce.";
                                                txtts1="WAŻNE";
                                                txtts2="Twoje poświadczenia dostępu do Api Center Topper System SEO";
                                                txtts3="Użytkownik:";
                                                txtts4="Hasło:";
                                            }else if(hreflang_toppersystem == "pt"){ 
	                                            response="Topper System SEO foi ativado com sucesso! Comece já a otimizar as páginas do seu site... Para obter os melhores resultados, ative também os nossos Serviços incluídos no plugin.";
                                                txtts1="IMPORTANTE";
                                                txtts2="Suas credenciais para acessar o Api Center Topper SystemSEO";
                                                txtts3="Usuário:";
                                                txtts4="Senha:";
                                            }else if(hreflang_toppersystem == "ru"){ 
	                                            response="Topper System SEO успешно активирована! Начните оптимизировать страницы своего веб-сайта прямо сейчас... Чтобы получить наилучшие результаты, также активируйте наши Услуги, включенные в плагин.";
                                                txtts1="ВАЖНО";
                                                txtts2="Ваши учетные данные для доступа к Api Center Topper System SEO";
                                                txtts3="Пользователь:";
                                                txtts4="Пароль:";
                                            }else if(hreflang_toppersystem == "zh"){ 
	                                            response="Topper System SEO 已成功激活！ 立即开始优化您的网站页面... 要获得最佳结果，还请激活插件中包含的我们的服务。";
                                                txtts1="重要";
                                                txtts2="您访问 Api Center Topper System SEO 的凭据";
                                                txtts3="用户：";
                                                txtts4="密码：";
                                            }else if(hreflang_toppersystem == "he"){ 
	                                            response="Topper System SEO הופעל בהצלחה! התחל לבצע אופטימיזציה של דפי האתר שלך עכשיו... כדי לקבל את התוצאות הטובות ביותר, הפעל גם את השירותים שלנו הכלולים בתוסף.";
                                                txtts1="חשוב";
                                                txtts2="האישורים שלך לגישה ל- Api Center Topper System SEO";
                                                txtts3="משתמש:";
                                                txtts4="סיסמה:";
                                            }else if(hreflang_toppersystem == "la"){ 
	                                            response="Topper System SEO has been successfully activated! Satus optimizing paginas paginas tuas nunc... Ut optimos proventus efficias, operas nostras etiam strenue in plugin inclusas.";
                                                txtts1="Important";
                                                txtts2="documentorum Tuorum accedere Api Center Topper System SEO";
                                                txtts3="User:";
                                                txtts4="Password:";
                                            }else{   
	                                            response="Topper System SEO has been successfully activated! Start optimizing your website pages now... To get the best results, also activate our Services included in the plugin.";
                                                txtts1="IMPORTANT";
                                                txtts2="Your credentials to access Api Center Topper System SEO";
                                                txtts3="User:";
                                                txtts4="Password:";
                                            }					            
						                }else if(httpresponse == "toppersystem error 0"){                                                                     
                                            if(hreflang_toppersystem == "it"){    
	                                            response="La configurazione impostata per questo sito non permette il corretto funzionamento del plugin. Non siamo riusciti a trovare il file wp-load.php";
                                            }else if(hreflang_toppersystem == "ar"){ 
	                                            response="مجموعة التكوين لهذا الموقع لا تسمح للمكون الإضافي بالعمل بشكل صحيح. لم نتمكن من العثور على ملف wp-load.php";
                                            }else if(hreflang_toppersystem == "de"){ 
	                                            response="Die für diese Seite festgelegte Konfiguration lässt das Plugin nicht richtig funktionieren. Wir konnten die Datei wp-load.php nicht finden"; 
                                            }else if(hreflang_toppersystem == "es"){ 
	                                            response="La configuración establecida para este sitio no permite que el complemento funcione correctamente. No pudimos encontrar el archivo wp-load.php";
                                            }else if(hreflang_toppersystem == "fr"){ 
	                                            response="La configuration définie pour ce site ne permet pas au plugin de fonctionner correctement. Nous n'avons pas pu trouver le fichier wp-load.php";
                                            }else if(hreflang_toppersystem == "hi"){ 
	                                            response="इस साइट के लिए सेट किया गया कॉन्फ़िगरेशन प्लग इन को ठीक से काम करने की अनुमति नहीं देता है। हमें wp-load.php फ़ाइल नहीं मिली";
                                            }else if(hreflang_toppersystem == "ja"){ 
	                                            response="このサイトの構成セットでは、プラグインが正しく機能しません。 wp-load.phpファイルが見つかりませんでした";
                                            }else if(hreflang_toppersystem == "pl"){ 
	                                            response="Konfiguracja ustawiona dla tej witryny nie pozwala na poprawne działanie wtyczki. Nie mogliśmy znaleźć pliku wp-load.php";
                                            }else if(hreflang_toppersystem == "pt"){ 
	                                            response="A configuração definida para este site não permite que o plugin funcione corretamente. Não foi possível encontrar o arquivo wp-load.php";
                                            }else if(hreflang_toppersystem == "ru"){ 
	                                            response="Набор настроек для этого сайта не позволяет плагину работать корректно. Не удалось найти файл wp-load.php";
                                            }else if(hreflang_toppersystem == "zh"){ 
	                                            response="此站点的配置集不允许插件正常运行。我们找不到 wp-load.php 文件";
                                            }else if(hreflang_toppersystem == "he"){ 
	                                            response="הגדרת התצורה עבור אתר זה אינה מאפשרת לפלאגין לפעול כהלכה. לא הצלחנו למצוא את הקובץ wp-load.php";
                                            }else if(hreflang_toppersystem == "la"){ 
	                                            response="Configuratio posita huius situs plugin recte operari non patitur. Non potuimus invenire wp-load.php lima";
                                            }else{   
	                                            response="The configuration set for this site does not allow the plugin to function correctly. We could not find the wp-load.php file";
                                            }                                
                                        }else{
                                            response=httpresponse;
                                        }				

                                        if(httpresponse == "ok"){
                                            alert(response + "\n\n" + txtts1 + "\n" + txtts2 + "\n" + document.getElementById('idapicenterlinkweb_toppersystem').value.trim() + "\n\n" + txtts3 + " " + document.getElementById('req_email_toppersystem_register').value.trim() + "\n" + txtts4 + " " + pswresponse.trim());
                                            document.getElementById('end_autoregister_toppersystem').className="";
                                            setTimeout("GotoStartToppersystem()", 1600);
                                        }else if(httpresponse == "no"){
                                            alert(txtts_error_msg);                                
                                            setTimeout("close_request_automatic_register_toppersystem()", 80);
                                        }else{
                                            alert(txtts_error_msg + "\n\n" + response);
                                            setTimeout("close_request_automatic_register_toppersystem()", 80);                               
                                        }					
						            }else{
                                        alert(txtts_error_msg);
                                        setTimeout("close_request_automatic_register_toppersystem()", 80);
                                    }
					            }else if(http.readyState == 4 && http.status != 200) {
                                    if(document.getElementById('toppersystem')){
                                        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
                                        var txtts1;        
                                        if(hreflang_toppersystem == "it"){    
	                                        txtts1="Abbiamo trovato un problema di dialogo con il tuo server. Il codice di stato rilevato è: " + http.status;
                                        }else if(hreflang_toppersystem == "ar"){ 
	                                        txtts1="وجدنا مشكلة حوار مع الخادم الخاص بك. رمز الحالة المكتشف هو: " + http.status;
                                        }else if(hreflang_toppersystem == "de"){ 
	                                        txtts1="Wir haben ein Dialogproblem mit Ihrem Server gefunden. Der erkannte Statuscode lautet: " + http.status; 
                                        }else if(hreflang_toppersystem == "es"){ 
	                                        txtts1="Encontramos un problema de diálogo con su servidor. El código de estado detectado es: " + http.status; 
                                        }else if(hreflang_toppersystem == "fr"){ 
	                                        txtts1="Nous avons trouvé un problème de dialogue avec votre serveur. Le code d'état détecté est: " + http.status; 
                                        }else if(hreflang_toppersystem == "hi"){ 
	                                        txtts1="हमें आपके सर्वर के साथ एक संवाद समस्या मिली। पता चला स्थिति कोड है0: " + http.status; 
                                        }else if(hreflang_toppersystem == "ja"){ 
	                                        txtts1="サーバーとの対話の問題が見つかりました。検出されたステータスコードは次のとおりです。 " + http.status;
                                        }else if(hreflang_toppersystem == "pl"){ 
	                                        txtts1="Znaleźliśmy problem z dialogiem na Twoim serwerze. Wykryty kod stanu to: " + http.status; 
                                        }else if(hreflang_toppersystem == "pt"){ 
	                                        txtts1="Encontramos um problema de diálogo com seu servidor. O código de status detectado é: " + http.status; 
                                        }else if(hreflang_toppersystem == "ru"){ 
	                                        txtts1="Мы обнаружили проблему диалога с вашим сервером. Обнаруженный код состояния: " + http.status; 
                                        }else if(hreflang_toppersystem == "zh"){ 
	                                        txtts1="我们发现您的服务器存在对话问题。检测到的状态码为： " + http.status; 
                                        }else if(hreflang_toppersystem == "he"){ 
	                                        txtts1="מצאנו בעיית דיאלוג עם השרת שלך. קוד המצב שזוהה הוא: " + http.status;
                                        }else if(hreflang_toppersystem == "la"){ 
	                                        txtts1="Difficultas dialogi invenimus cum servo tuo. Deprehensio status codice is: " + http.status; 
                                        }else{   
	                                        txtts1="We found a dialogue problem with your server. The detected status code is: " + http.status;
                                        }							
                                        alert(txtts_error_msg + "\n\n" + txtts1.trim());
                                        setTimeout("close_request_automatic_register_toppersystem()", 80);
                                    }
					            }else{
						            if(http.readyState == 1) {						

						            }else if(http.readyState == 2) {

						            }else if(http.readyState == 3) {
						            
						            }
				                    
					            }
				            }
				            
				            var url = ajax_components_toppersystem.url;
                            var params = "action=componentstoppersystem1ajax&_nonce=" + ajax_components_toppersystem.nonce + "&email_toppersystem_register=" + encodeURIComponent(document.getElementById('req_email_toppersystem_register').value) + "&name_toppersystem_register=" + encodeURIComponent(document.getElementById('req_name_toppersystem_register').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('domain_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
				            http.open("POST", url, true);
				            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				            http.send(params);			
			            }else{
							var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
							var txtts0;
							if(hreflang_toppersystem == "it"){    
							   txtts0="Connessione non riuscita";
							}else if(hreflang_toppersystem == "ar"){ 
							   txtts0="فشل الاتصال";
							}else if(hreflang_toppersystem == "de"){ 
							   txtts0="Verbindung fehlgeschlagen";
							}else if(hreflang_toppersystem == "es"){ 
							   txtts0="Conexión fallida";
							}else if(hreflang_toppersystem == "fr"){ 
							   txtts0="La connexion a échoué";
							}else if(hreflang_toppersystem == "hi"){ 
							   txtts0="कनेक्शन विफल हुआ";
							}else if(hreflang_toppersystem == "ja"){ 
							   txtts0="接続できませんでした";
							}else if(hreflang_toppersystem == "pl"){ 
							   txtts0="Połączenie nieudane";
							}else if(hreflang_toppersystem == "pt"){ 
							   txtts0="Falha na conexão";
							}else if(hreflang_toppersystem == "ru"){ 
							   txtts0="Ошибка подключения";
							}else if(hreflang_toppersystem == "zh"){ 
							   txtts0="连接失败";
							}else if(hreflang_toppersystem == "he"){ 
							   txtts0="החיבור נכשל";
							}else if(hreflang_toppersystem == "la"){ 
							   txtts0="Deficio Connection";
							}else{   
							   txtts0="Connection failed";
							}
                            document.getElementById('box_request_automatic_register_toppersystem').className = "stxle_request_events_terms_condictions_toppersystem";
                            document.getElementById('stxle_request_automatic_register_toppersystem').className = "stxle_request_events_terms_condictions_toppersystem display_none_ts";
							alert(txtts0);
						}
					}
				}

            }
		}else{

		}
	}
}

function close_request_automatic_register_toppersystem()
{
	if(ControllerFunction() == true){	
		if(document.getElementById('render_request_automatic_register_toppersystem')){
			var screen = document.getElementById("render_request_automatic_register_toppersystem");
			document.body.removeChild(screen);
            setTimeout("StartProcessStartToppersystem()", 400);
		}
	}
}

function ProcessAutorizationAutoLoadToppersystem()
{
	if(ControllerFunction() == true){
	    if(document.getElementById('hreflang_toppersystem')){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
            var txtts1;
            var txtts2;	
            var txtts3;			
			if(hreflang_toppersystem == "it"){
				txtts1="REGISTRAZIONE SU API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Chiudi";
                txtts3="Attendi ancora qualche istante il completamento del processo..";
			}else if(hreflang_toppersystem == "ar"){
				txtts1="التسجيل في API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="قريب";
                txtts3="انتظر بضع لحظات حتى تكتمل العملية ..";
			}else if(hreflang_toppersystem == "de"){
				txtts1="REGISTRIERUNG AUF API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Schließen";
                txtts3="Warten Sie einen Moment, bis der Vorgang abgeschlossen ist.";
			}else if(hreflang_toppersystem == "es"){
				txtts1="REGISTRO EN API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Cerca";
                txtts3="Espere unos momentos para que se complete el proceso..";
			}else if(hreflang_toppersystem == "fr"){
				txtts1="INSCRIPTION SUR API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Proche";
                txtts3="Attendez quelques instants que le processus se termine..";
			}else if(hreflang_toppersystem == "hi"){
				txtts1="API CENTER TOPPER SYSTEM<sup> SEO</sup> पर पंजीकरण";
				txtts2="पास";
                txtts3="प्रक्रिया पूरी होने के लिए कुछ क्षण प्रतीक्षा करें..";
			}else if(hreflang_toppersystem == "ja"){
				txtts1="API CENTER TOPPER SYSTEM<sup> SEO</sup> への登録";
				txtts2="近いです";
                txtts3="プロセスが完了するまでしばらくお待ちください。";
			}else if(hreflang_toppersystem == "pl"){
				txtts1="REJESTRACJA W API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Blisko";
                txtts3="Poczekaj chwilę, aż proces się zakończy.";
			}else if(hreflang_toppersystem == "pt"){
				txtts1="INSCRIÇÃO NO API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Perto";
                txtts3="Aguarde alguns instantes para que o processo seja concluído.";
			}else if(hreflang_toppersystem == "ru"){
				txtts1="РЕГИСТРАЦИЯ НА API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="близко";
                txtts3="Подождите несколько секунд, пока процесс завершится.";
			}else if(hreflang_toppersystem == "zh"){
				txtts1="在 API CENTER TOPPER SYSTEM<sup> SEO</sup> 上注册";
				txtts2="关闭";
                txtts3="稍等片刻，该过程完成。";
			}else if(hreflang_toppersystem == "he"){
				txtts1="הרשמה ב-API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="סגירה";
                txtts3="המתן מספר רגעים עד להשלמת התהליך..";
			}else if(hreflang_toppersystem == "la"){
				txtts1="ADNOTATIONES DE API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Prope";
                txtts3="Exspecta paulisper processum ad perficiendum.";
			}else{
				txtts1="REGISTRATION ON API CENTER TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Close";
                txtts3="Wait a few moments for the process to complete..";
			}

            var add = document.createElement("div");
			add.setAttribute("id", "render_request_automatic_register_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_request_automatic_register_toppersystem();\">" + txtts2 + "</a></span></div><div id=\"stxle_request_automatic_register_toppersystem\" class=\"stxle_request_events_terms_condictions_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div><div id=\"end_autoregister_toppersystem\" class=\"display_none_ts\">" + txtts3 + "</div></div></td></tr></table></div><div id=\"box_request_automatic_register_toppersystem\" class=\"stxle_request_events_terms_condictions_toppersystem display_none_ts\">&nbsp;</div></center>";
			document.body.appendChild(add);

            setTimeout("ProcessAutorizationAutoLoadToppersystem2()", 80);
	    }
	}
}

function ProcessAutorizationAutoLoadToppersystem2()
{	
	if(ControllerFunction() == true){
		
		if((document.getElementById('domain_toppersystem'))&&(document.getElementById('render_request_automatic_register_toppersystem'))){
		    
			if(document.getElementById('domain_toppersystem').value.trim() != ""){

                if(document.getElementById('stxle_request_automatic_register_toppersystem')){											
                    document.getElementById('stxle_request_automatic_register_toppersystem').className = "stxle_request_events_terms_condictions_toppersystem display_none_ts";

                    var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
                    var hreflang_link_apicenter_toppersystem="";
                    if((hreflang_toppersystem == "it")||(hreflang_toppersystem == "ar")||(hreflang_toppersystem == "de")||(hreflang_toppersystem == "es")||(hreflang_toppersystem == "fr")||(hreflang_toppersystem == "hi")||(hreflang_toppersystem == "ja")||(hreflang_toppersystem == "pl")||(hreflang_toppersystem == "pt")||(hreflang_toppersystem == "ru")||(hreflang_toppersystem == "zh")||(hreflang_toppersystem == "he")||(hreflang_toppersystem == "la")||(hreflang_toppersystem == "en")){
                        hreflang_link_apicenter_toppersystem=hreflang_toppersystem;    
                    }else{
                        hreflang_link_apicenter_toppersystem="en";    
                    }
                  
                    var email_msg="";
                    if(document.getElementById('req_email_toppersystem_register')){
                        if(document.getElementById('req_email_toppersystem_register').value != ""){
                            email_msg="<strong>" + document.getElementById('req_email_toppersystem_register').value + "</strong>";
                        }
                    }

                    var link_api_center_toppersystem="<a rel=\"nofollow\" target=\"_blank\" class=\"text_support_toppersystem\" href=\"" + document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + hreflang_link_apicenter_toppersystem + "\">Api Center Topper System SEO</a>";

                    var txtts1;
                    var txtts2;
                    var txtts3;
                    var txtts4;
                    var txtts5;
                    var txtts6;
                    var txtts7;
                    var txtts8;
                    var txtts9;	
			        if(hreflang_toppersystem == "it"){
				        txtts1="REGISTRAZIONE AUTOMATICA AL SERVIZIO";
				        //txtts2="Sarà creato un account utente " + email_msg + " e attivato un Authcode su " + link_api_center_toppersystem + " automaticamente senza obbligarti a inserire alcuna carta di credito.";
                        txtts2="<big><strong>Ora è il tuo momento di farti notare!</strong></big><br><br>Il plugin Topper System SEO è un'opportunità unica per migliorare il posizionamento del tuo sito web sui Motori di Ricerca. Con questo plugin, puoi implementare tutte le migliori pratiche SEO in modo semplice e veloce.<br><br><strong>Affrettati, le prime 10.000 attivazioni sono gratuite!</strong><br>Scopri come altri siti hanno ottenuto risultati strabilianti con Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=it\">Case Study</a>.<br><br>Sarà creato un account utente " + email_msg + " e attivato un Authcode su " + link_api_center_toppersystem + " automaticamente.";
                        txtts3="L'innovativo servizio di ottimizzazione delle pagine del sito e di CO2 Application sono rilasciati gratuitamente per 6 mesi";
                        txtts4="Al termine del periodo di prova gratuita potrai scegliere liberamente di sottoscrivere un abbonamento annuale di &euro; 37.00, oppure di acquistare crediti a &euro; 0.02 ciascuno, oppure niente.<br>In caso decidessi di non aquistare un abbonamento annuale o un pacchetto di crediti potrai mantenere attivo il plugin e utilizzare i seguenti servizi:";
                        txtts5="Ho letto e accetto i Termini e condizioni d'uso";
                        txtts6="Avvia la registrazione automatica";
                        txtts7="Preferisco procedere manualmente";
                        txtts8="L'innovativo servizio di ottimizzazione delle pagine del sito e di CO2 Application sono rilasciati gratuitamente per 30 giorni";
                        txtts9="Condizioni d&acute;uso di Topper System SEO";
			        }else if(hreflang_toppersystem == "ar"){
				        txtts1="التسجيل التلقائي في الخدمة";
				        //txtts2="سيتم إنشاء حساب مستخدم " + email_msg + " وسيتم تنشيط كود المصادقة على " + link_api_center_toppersystem + " تلقائيًا دون إجبارك على إدخال أي بطاقة ائتمان.";
                        txtts2="<big><strong>الآن هو الوقت المناسب لجذب الانتباه!</strong></big><br><br>يُعد المكون الإضافي Topper System SEO فرصة فريدة لتحسين وضع موقعك على الويب على محركات البحث. باستخدام هذا المكون الإضافي، يمكنك تنفيذ أفضل ممارسات تحسين محركات البحث (SEO) بسرعة وسهولة.<br><br><strong>أسرع، أول 10.000 عملية تنشيط مجانية!</strong><br>اكتشف كيف حققت المواقع الأخرى نتائج مذهلة مع Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=ar\">دراسة حالة</a>. <br><br>سيتم إنشاء حساب مستخدم " + email_msg + " وتفعيل رمز المصادقة على " + link_api_center_toppersystem + " تلقائيًا.";
				        txtts3="يتم إصدار خدمة تحسين صفحة الموقع المبتكرة و CO2 Application مجانًا لمدة 6 أشهر";
				        txtts4="نهاية الفترة التجريبية المجانية ، يمكنك الاختيار بحرية الاشتراك في اشتراك سنوي مقابل &dollar; 42.00 ، أو شراء أرصدة مقابل &dollar; 0.022 لكل اشتراك ، أو لا شيء. <br> إذا قررت عدم شراء اشتراك سنوي أو حزمة من الائتمانات ، يمكنك الاحتفاظ بالملحقات واستخدام الخدمات التالية:";
				        txtts5="لقد قرأت وقبلت شروط وأحكام الاستخدام";
				        txtts6="ابدأ التسجيل التلقائي";
				        txtts7="أفضل القيام بذلك يدويًا";
				        txtts8="يتم إصدار خدمة تحسين صفحة الموقع المبتكرة و CO2 Application مجانًا لمدة 30 يومًا";
                        txtts9="شروط الاستخدام Topper System SEO";
			        }else if(hreflang_toppersystem == "de"){
				        txtts1="AUTOMATISCHE REGISTRIERUNG ZUM DIENST";
				        //txtts2="Es wird ein " + email_msg + "-Benutzerkonto erstellt und automatisch ein Authcode auf " + link_api_center_toppersystem + " aktiviert, ohne dass Sie eine Kreditkarte angeben müssen.";
                        txtts2="<big><strong>Jetzt ist es an der Zeit, Aufmerksamkeit zu erregen!</strong></big><br><br>Das Topper System SEO-Plugin ist eine einzigartige Gelegenheit, die Positionierung Ihrer Website in der Suchmaschinensuche zu verbessern. Mit diesem Plugin können Sie die besten SEO-Praktiken schnell und einfach umsetzen.<br><br><strong>Beeilen Sie sich, die ersten 10.000 Aktivierungen sind kostenlos!</strong><br>Finden Sie heraus, wie andere Websites erstaunliche Ergebnisse erzielt haben mit Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=de\">Fallstudie</a>.<br><br>Ein Benutzerkonto wird automatisch erstellt " + email_msg + " und ein Authcode aktiviert auf " + link_api_center_toppersystem + " automatisch.";
				        txtts3="Der innovative Website-Seitenoptimierungsdienst und CO2 Application werden 6 Monate lang kostenlos zur Verfügung gestellt";
				        txtts4="Am Ende des kostenlosen Testzeitraums haben Sie die freie Wahl, ein Jahresabonnement für &euro; 37.00 zu abonnieren oder Credits für jeweils &euro; 0.02 oder gar nichts zu kaufen.<br>Wenn Sie sich gegen den Kauf eines Jahresabonnements oder eines Credit-Pakets entscheiden können Sie die Plugins behalten und folgende Dienste nutzen:";
				        txtts5="Ich habe die Nutzungsbedingungen gelesen und akzeptiere sie";
				        txtts6="Starten Sie die automatische Registrierung";
				        txtts7="Ich mache es lieber manuell";
				        txtts8="Der innovative Website-Seitenoptimierungsdienst und CO2 Application werden 30 Tage lang kostenlos zur Verfügung gestellt";
                        txtts9="Nutzungsbedingungen von Topper System SEO";
			        }else if(hreflang_toppersystem == "es"){
				        txtts1="REGISTRO AUTOMÁTICO AL SERVICIO";
				        //txtts2="Se creará una cuenta de usuario " + email_msg + " y se activará un Authcode en " + link_api_center_toppersystem + " automáticamente sin obligarlo a insertar ninguna tarjeta de crédito.";
                        txtts2="<big><strong>¡Ahora es tu momento de hacerte notar!</strong></big><br><br>El complemento Topper System SEO es una oportunidad única para mejorar el posicionamiento de tu sitio web en los motores de búsqueda. Con este complemento, puedes implementar todas las mejores prácticas de SEO de forma rápida y sencilla.<br><br><strong>¡Date prisa, las primeras 10.000 activaciones son gratis!</strong><br>Descubre cómo otros sitios han logrado resultados sorprendentes. con Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=es\">Estudio de caso</a>. <br><br>Se creará una cuenta de usuario " + email_msg + " y se activará un código de autenticación en " + link_api_center_toppersystem + " automáticamente.";
				        txtts3="El innovador servicio de optimización de la página del sitio y CO2 Application se lanzan de forma gratuita durante 6 meses.";
				        txtts4="Al final del período de prueba gratuito, puede optar libremente por suscribirse a una suscripción anual por &euro; 37.00, o comprar créditos por &euro; 0.02 cada uno, o nada.<br>Si decide no comprar una suscripción anual o un paquete de créditos , puede conservar los complementos y utilizar los siguientes servicios:";
				        txtts5="He leído y acepto los Términos y condiciones de uso";
				        txtts6="Iniciar registro automático";
				        txtts7="prefiero hacerlo manualmente";
				        txtts8="El innovador servicio de optimización de la página del sitio y CO2 Application se lanzan de forma gratuita durante 30 días.";
                        txtts9="Condiciones de uso de Topper System SEO";
			        }else if(hreflang_toppersystem == "fr"){
				        txtts1="INSCRIPTION AUTOMATIQUE AU SERVICE";
				        //txtts2="Un compte utilisateur " + email_msg + " sera créé et un Authcode sera automatiquement activé sur " + link_api_center_toppersystem + " sans vous obliger à insérer une carte de crédit.";
                        txtts2="<big><strong>Il est maintenant temps de vous faire remarquer!</strong></big><br><br>Le plugin Topper System SEO est une opportunité unique d'améliorer le positionnement de votre site Web sur les moteurs de recherche. Avec ce plugin, vous pouvez mettre en œuvre toutes les meilleures pratiques SEO rapidement et facilement.<br><br><strong>Dépêchez-vous, les 10.000 premières activations sont gratuites !</strong><br>Découvrez comment d'autres sites ont obtenu des résultats étonnants. avec Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=fr\">Étude de cas</a>.<br><br>Un compte utilisateur sera créé " + email_msg + " et un Authcode activé sur " + link_api_center_toppersystem + " automatiquement.";
				        txtts3="Le service innovant d'optimisation des pages du site et CO2 Application sont mis gratuitement à disposition pendant 6 mois";
				        txtts4="À la fin de la période d'essai gratuite, vous pouvez librement choisir de souscrire à un abonnement annuel pour &euro; 37.00, ou d'acheter des crédits pour &euro; 0.02 chacun, ou rien.<br>Si vous décidez de ne pas acheter un abonnement annuel ou un pack de crédits , vous pouvez conserver les plugins et utiliser les services suivants:";
				        txtts5="J'ai lu et j'accepte les Termes et conditions d'utilisation";
				        txtts6="Démarrer l'enregistrement automatique";
				        txtts7="je préfère le faire manuellement";
				        txtts8="Le service innovant d'optimisation des pages du site et CO2 Application sont gratuits pendant 30 jours";
                        txtts9="Conditions d&acute;utilisation de Topper System SEO";
			        }else if(hreflang_toppersystem == "hi"){
				        txtts1="सेवा के लिए स्वचालित पंजीकरण";
				        //txtts2="एक " + email_msg + " उपयोगकर्ता खाता बनाया जाएगा और आपको कोई क्रेडिट कार्ड डालने के लिए मजबूर किए बिना " + link_api_center_toppersystem + " पर एक ऑथकोड स्वचालित रूप से सक्रिय हो जाएगा।";
                        txtts2="<big><strong>अब आपका ध्यान आकर्षित करने का समय है!</strong></big><br><br>Topper System SEO प्लगइन सर्च इंजन सर्च पर आपकी वेबसाइट की स्थिति को बेहतर बनाने का एक अनूठा अवसर है। इस प्लगइन के साथ, आप सभी सर्वोत्तम एसईओ प्रथाओं को जल्दी और आसानी से लागू कर सकते हैं।<br><br><strong>जल्दी करें, पहले 10.000 सक्रियण निःशुल्क हैं!</strong><br>पता लगाएं कि अन्य साइटों ने कैसे आश्चर्यजनक परिणाम प्राप्त किए हैं Topper System SEO के साथ। <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=hi\">केस स्टडी</a>। <br><br>एक उपयोगकर्ता खाता " + email_msg + " बनाया जाएगा और एक ऑथकोड स्वचालित रूप से " + link_api_center_toppersystem + " पर सक्रिय हो जाएगा।";
				        txtts3="इनोवेटिव साइट पेज ऑप्टिमाइज़ेशन सेवा और CO2 Application 6 महीने के लिए निःशुल्क जारी किए जाते हैं";
				        txtts4="नि:शुल्क परीक्षण अवधि के अंत में, आप स्वतंत्र रूप से  &dollar; 42.00 के लिए वार्षिक सदस्यता लेने का विकल्प चुन सकते हैं, या  &dollar; 0.022 प्रत्येक के लिए क्रेडिट खरीद सकते हैं, या कुछ भी नहीं।<br>यदि आप वार्षिक सदस्यता या क्रेडिट का पैकेज नहीं खरीदने का निर्णय लेते हैं , आप प्लगइन्स रख सकते हैं और निम्नलिखित सेवाओं का उपयोग कर सकते हैं:";
				        txtts5="मैंने उपयोग के नियम और शर्तें पढ़ ली हैं और उन्हें स्वीकार करता हूं";
				        txtts6="स्वचालित पंजीकरण प्रारंभ करें";
				        txtts7="मैं इसे मैन्युअल रूप से करना पसंद करता हूं";
				        txtts8="इनोवेटिव साइट पेज ऑप्टिमाइज़ेशन सेवा और CO2 Application 30 दिनों के लिए निःशुल्क जारी किए जाते हैं";
                        txtts9="उपयोग की शर्तें Topper System SEO";
			        }else if(hreflang_toppersystem == "ja"){
				        txtts1="サービスへの自動登録";
				        //txtts2="" + email_msg + " ユーザー アカウントが作成され、クレジット カードの挿入を強制することなく、" + link_api_center_toppersystem + " で認証コードが自動的に有効になります。";
                        txtts2="<big><strong>今こそ注目を集める時です!</strong></big><br><br>Topper System SEO プラグインは、検索エンジンでの Web サイトのランキングを向上させるまたとない機会です。このプラグインを使用すると、SEO のベスト プラクティスをすべて迅速かつ簡単に実装できます。<br><br><strong>お急ぎください。最初の 10.000 件のアクティベーションは無料です。</strong><br>他のサイトがどのように素晴らしい成果を上げているかをご覧ください。 Topper System SEO による結果。<a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=ja\"> ケーススタディ</a>.<br><br>ユーザー アカウントが " + email_msg + " で作成され、認証コードが " + link_api_center_toppersystem + " で自動的にアクティブ化されます。";
				        txtts3="革新的なサイトページ最適化サービスとCO2App​​licationXVを6か月間無料でリリース";
				        txtts4="無料トライアル期間の終了時には、&dollar; 42.00 円の年間サブスクリプションに登録するか、各 &dollar; 0.022 のクレジットを購入するか、何も購入しないかを自由に選択できます。<br>年間サブスクリプションまたはクレジットのパッケージを購入しない場合は、 、プラグインを保持したまま、次のサービスを使用できます。";
				        txtts5="利用規約を読んで同意します";
				        txtts6="自動登録を開始する";
				        txtts7="手動で行うことを好みます";
				        txtts8="革新的なサイトページ最適化サービスとCO2App​​licationXVを30日間無料でリリース";
                        txtts9="Topper System SEO利用規約";
			        }else if(hreflang_toppersystem == "pl"){
				        txtts1="AUTOMATYCZNA REJESTRACJA W SERWISIE";
				        //txtts2="Konto użytkownika " + email_msg + " zostanie utworzone, a kod uwierzytelniający zostanie aktywowany automatycznie na stronie " + link_api_center_toppersystem + " bez konieczności wkładania karty kredytowej.";
                        txtts2="<big><strong>Teraz nadszedł czas, aby zostać zauważonym!</strong></big><br><br>Wtyczka Topper System SEO to wyjątkowa szansa na poprawę rankingu Twojej witryny w wyszukiwarkach Dzięki tej wtyczce możesz szybko i łatwo wdrożyć wszystkie Topper System SEO.<br><br><strong>Pospiesz się, pierwsze 10.000 aktywacji jest bezpłatne!</strong><br>Dowiedz się, jak inne witryny osiągnęły niesamowite sukcesy wyniki dzięki SEO Topper System. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=pl\"> Studium przypadku</a>.<br><br>Konto użytkownika zostanie utworzone " + email_msg + " i kod autoryzacyjny aktywowany w " + link_api_center_toppersystem + " automatycznie.";
				        txtts3="Innowacyjna usługa optymalizacji strony serwisu oraz CO2 Application są udostępniane bezpłatnie na okres 6 miesięcy";
				        txtts4="Pod koniec bezpłatnego okresu próbnego możesz swobodnie wykupić roczną subskrypcję za &euro; 37.00 lub kupić kredyty za &euro; 0.02 za sztukę lub nic.<br>Jeśli nie zdecydujesz się na zakup rocznej subskrypcji lub pakietu kredytów , możesz zachować wtyczki i korzystać z następujących usług:";
				        txtts5="Przeczytałem i akceptuję Warunki użytkowania";
				        txtts6="Rozpocznij automatyczną rejestrację";
				        txtts7="Wolę to zrobić ręcznie";
				        txtts8="Innowacyjna usługa optymalizacji strony serwisu i CO2 Application są udostępniane bezpłatnie przez 30 dni";
                        txtts9="Warunki korzystania z Topper System SEO";
			        }else if(hreflang_toppersystem == "pt"){
				        txtts1="REGISTO AUTOMÁTICO AO SERVIÇO";
				        //txtts2="Uma conta de usuário " + email_msg + " será criada e um Authcode será ativado em " + link_api_center_toppersystem + " automaticamente sem forçar a inserção de nenhum cartão de crédito.";
                        txtts2="<big><strong>Agora é sua hora de ser notado!</strong></big><br><br>O plugin Topper System SEO é uma oportunidade única para melhorar a classificação do seu site nos motores de busca . Com este plugin, você pode implementar todas as melhores práticas de SEO de forma rápida e fácil.<br><br><strong>Depressa, as primeiras 10.000 ativações são gratuitas!</strong><br>Descubra como outros sites alcançaram resultados incríveis. resultados com Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=pt\"> Estudo de caso</a>.<br><br>Uma conta de usuário será criada " + email_msg + " e um Authcode ativado em " + link_api_center_toppersystem + " automaticamente.";
				        txtts3="O serviço inovador de otimização de página do site e o CO2 Application são lançados gratuitamente por 6 meses";
				        txtts4="No final do período de teste gratuito, você pode optar livremente por assinar uma assinatura anual por &euro; 37.00, ou comprar créditos por &euro; 0.02 cada, ou nada.<br>Se você decidir não comprar uma assinatura anual ou um pacote de créditos , você pode manter os plugins e usar os seguintes serviços:";
				        txtts5="Li e aceito os Termos e condições de uso";
				        txtts6="Iniciar registro automático";
				        txtts7="prefiro fazer manualmente";
				        txtts8="O serviço inovador de otimização de página do site e o CO2 Application são liberados gratuitamente por 30 dias";
                        txtts9="Termos de uso do Topper System SEO";
			        }else if(hreflang_toppersystem == "ru"){
				        txtts1="АВТОМАТИЧЕСКАЯ РЕГИСТРАЦИЯ В СЕРВИСЕ";
				        //txtts2="Будет создана учетная запись пользователя " + email_msg + ", а код авторизации будет автоматически активирован на " + link_api_center_toppersystem + " без необходимости вставлять какую-либо кредитную карту.";
                        txtts2="<big><strong>Пришло ваше время, чтобы вас заметили!</strong></big><br><br>Плагин Topper System SEO – это уникальная возможность улучшить рейтинг вашего сайта в поисковых системах. . С помощью этого плагина вы сможете быстро и легко реализовать все лучшие практики SEO.<br><br><strong>Спешите, первые 10 000 активаций бесплатны!</strong><br>Узнайте, как другие сайты добились потрясающих результатов. результаты с помощью Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=ru\"> Пример использования</a>.<br><br>Учетная запись пользователя будет создана " + email_msg + " и код авторизации активирован в " + link_api_center_toppersystem + " автоматически.";
				        txtts3="Инновационный сервис оптимизации страниц сайта и CO2 Application выпускаются бесплатно на 6 месяцев.";
				        txtts4="По окончании бесплатного пробного периода вы можете по своему выбору подписаться на годовую подписку за RUB 3792.00, приобрести кредиты по RUB 2.05 каждый или ничего.<br>Если вы решите не приобретать годовую подписку или пакет кредитов , вы можете оставить плагины и пользоваться следующими сервисами:";
				        txtts5="Я прочитал и принимаю Условия использования";
				        txtts6="Начать автоматическую регистрацию";
				        txtts7="Я предпочитаю делать это вручную";
				        txtts8="Инновационный сервис оптимизации страниц сайта и CO2 Application выпускаются бесплатно на 30 дней.";
                        txtts9="Условия использования Topper System SEO";
			        }else if(hreflang_toppersystem == "zh"){
				        txtts1="自动注册服务";
				        //txtts2="将创建一个 " + email_msg + " 用户帐户，并自动在 " + link_api_center_toppersystem + " 上激活授权码，而无需强制您插入任何信用卡。";
                        txtts2="<big><strong>现在是您获得关注的时候了！</strong></big><br><br>Topper System SEO 插件是提高您网站在搜索引擎上排名的独特机会. 使用此插件，您可以快速轻松地实施所有最佳 SEO 实践。<br><br><strong>快点，前 10.000 次激活是免费的！</strong><br>了解其他网站如何取得惊人的成就Topper System SEO 的结果。<a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=zh\">案例研究</a>.<br><br>将创建一个用户帐户" + email_msg + " ，并自动在" + link_api_center_toppersystem + " 上激活一个授权码。";
				        txtts3="创新的网站页面优化服务和CO2App​​licationXV免费发布6个月";
				        txtts4="免费试用期结束后，您可以自由选择以 &yen; 294.00 的价格订阅年度订阅，或以每个 &yen; 0.16 的积分购买，或什么都不购买。<br>如果您决定不购买年度订阅或积分包，您可以保留插件并使用以下服务：";
				        txtts5="我已阅读并接受使用条款和条件";
				        txtts6="开始自动注册";
				        txtts7="我更喜欢手动完成";
				        txtts8="创新的网站页面优化服务和CO2App​​licationXV免费发布30天";
                        txtts9="Topper System SEO 使用条款";                        
			        }else if(hreflang_toppersystem == "he"){
				        txtts1="רישום אוטומטי לשירות";
				        //txtts2="חשבון משתמש " + email_msg + " ייווצר וקוד אימות יופעל ב-" + link_api_center_toppersystem + " באופן אוטומטי מבלי להכריח אותך להכניס כרטיס אשראי כלשהו.";
                        txtts2="<big><strong>עכשיו זה הזמן שלך לשים לב!</strong></big><br><br>תוסף Topper System SEO הוא הזדמנות ייחודית לשפר את דירוג האתר שלך במנועי חיפוש . עם תוסף זה, אתה יכול ליישם את כל שיטות ה-SEO הטובות ביותר במהירות ובקלות.<br><br><strong>מהר, 10.000 ההפעלות הראשונות הן בחינם!</strong><br>גלה כיצד אתרים אחרים הגיעו להישגים מדהימים תוצאות עם Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=he\"> תיאור מקרה</a>.<br><br>ייצור חשבון משתמש " + email_msg + " וקוד אימות יופעל ב- " + link_api_center_toppersystem + " באופן אוטומטי.";
				        txtts3="שירות אופטימיזציית דפי האתר החדשני ו-CO2 Application משוחררים ללא תשלום למשך 6 חודשים";
				        txtts4="בתום תקופת הניסיון בחינם, אתה יכול לבחור באופן חופשי להירשם למנוי שנתי תמורת &dollar; 42.00, או לרכוש זיכויים עבור &dollar; 0.022 כל אחד, או כלום.<br>אם תחליט לא לרכוש מנוי שנתי או חבילת זיכויים , אתה יכול לשמור את התוספים ולהשתמש בשירותים הבאים:";
				        txtts5="קראתי ואני מקבל את תנאי השימוש";
				        txtts6="התחל רישום אוטומטי";
				        txtts7="אני מעדיף לעשות את זה ידנית";
				        txtts8="שירות אופטימיזציית דפי האתר החדשני ו-CO2 Application משוחררים ללא תשלום למשך 30 יום";
                        txtts9="תנאי השימוש של Topper System SEO";
			        }else if(hreflang_toppersystem == "la"){
				        txtts1="AUTOMATARIUM ADNOTATIO SERVICE";
				        //txtts2="An " + email_msg + " usoris ratio creabitur et Authcode in " + link_api_center_toppersystem + " excitabitur, statim sine te inserere fidem card.";
                        txtts2="<big><strong>Nunc tempus tuum est animadvertere!</strong></big><br><br>Topper System SEO plugin unica occasio est ad amplio ordinem tui website in Engines Quaerere Hoc plugin, Topper System SEO exercitia cito ac facile peragere potes.<br><br><strong>Cito, prima 10.000 activationum libera sunt!</strong><br>Perspice quomodo alii situs mirabiles assecuti sint. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=la\"> Case Study</a>.<br><br>Ratio usoris creabitur " + email_msg + " et in Authcode reducitur " + link_api_center_toppersystem + " automatice.";
				        txtts3="Pagina optimizationis muneris ac CO2 Application porttitor situs gratuitus soluuntur per 6 menses";
				        txtts4="In fine liberi iudicii periodi, libere eligere potes subscriptioni subscriptio annuae pro &euro; 37.00, vel credita emere pro singulis &euro; 0.02, vel nihil.<br>Si annuam subscriptionem vel sarcinam creditorum emere non statuis. , plugins servare potes et sequentibus officiis utere:";
				        txtts5="Legi et accipere Terms and Conditions of use";
				        txtts6="Satus automatic registration";
				        txtts7="Malo manually facere";
				        txtts8="Pagina in porttitor situs optimizationis muneris ac CO2 Application liberati gratis per XXX dies sunt";
                        txtts9="Topper System SEO Terms of Use";
			        }else{
				        txtts1="AUTOMATIC REGISTRATION TO THE SERVICE";
				        //txtts2="An " + email_msg + " user account will be created and an Authcode will be activated on " + link_api_center_toppersystem + " automatically without forcing you to insert any credit card.";
                        txtts2="<big><strong>Now is your time to get noticed!</strong></big><br><br>The Topper System SEO plugin is a unique opportunity to improve the ranking of your website on Search Engines. With this plugin, you can implement all the best SEO practices quickly and easily.<br><br><strong>Hurry, the first 10.000 activations are free!</strong><br>Find out how others sites have achieved amazing results with Topper System SEO. <a target=\"_blank\" class=\"text_support_toppersystem\" href=\"https://www.toppersystem.com/casehistory.php?lang=en\"> Case Study</a>.<br><br>A user account will be created " + email_msg + " and an Authcode activated on " + link_api_center_toppersystem + " automatically.";
				        txtts3="The innovative site page optimization service and CO2 Application are released free of charge for 6 months";
				        txtts4="At the end of the free trial period you can freely choose to subscribe to an annual subscription of &dollar; 42.00, or to purchase credits at &dollar; 0.022 each, or nothing.<br>If you decide not to purchase an annual subscription or a package of credits, you can keep the plugin active and use the following services:";
				        txtts5="I have read and accept the Terms and conditions of use";
				        txtts6="Start automatic registration";
				        txtts7="I prefer to do it manually";
				        txtts8="The innovative site page optimization service and CO2 Application are released free of charge for 30 days";
                        txtts9="Topper System SEO Terms of Use";
			        }

		            var date_now = new Date();
		            var date_finish_promotion = new Date('09/30/2023');
		            if(date_now < date_finish_promotion){
			            txtts8=txtts3;
		            }                  

                    var iframe_terms_condictions_toppersystem="<div id=\"box_request_terms_condiction_all_toppersystem\" class=\"box_request_terms_condiction_all_toppersystem\"><iframe id=\"frame_terms_condictions_toppersystem\" sandbox src=\"" + document.getElementById('idtermsandcondictionslink_toppersystem').value.trim() + "\" class=\"termsandcondictions_toppersystem_hidden wxdth100_toppersystem\" onload=\"render_view_terms_condictions_toppersystem()\" onunload=\"rendernoload_view_terms_condictions_toppersystem()\">" + document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim() + "</iframe><div id=\"loading_frame_terms_condictions_toppersystem\" class=\"box_request_terms_condiction_all_toppersystem wxdth100_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div id=\"wait_load_ts\" class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div><div id=\"noloading_frame_terms_condictions_toppersystem\" class=\"wxdth100_txtleft_toppersystem display_none_ts\"><small><small>" + txtts9 + "<br><a target=\"_blank\" rel=\"nofollow\" href=\"" + document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim() + "\">" + document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim() + "</a></small></small></div></td></tr></table></div></div>";

                    //document.getElementById('box_request_automatic_register_toppersystem').innerHTML="<small>" + txtts2 + "<br><strong>" + txtts8 + "</strong>.<br><br>" + txtts4 + " Cache-Control, Antispam ASPMTS, Smart Image Lazy Loading.</small><br><br>" + iframe_terms_condictions_toppersystem + "<input id=\"check_privacy_toppersystem_send\" name=\"check_privacy_toppersystem_send\" type=\"checkbox\" onclick=\"ok_write_privacy()\" class=\"\"> <small>" + txtts5 + "</small><br><div class=\"botton_space_terms_condictions_toppersystem\"><a rel=\"nofollow\" id=\"go_toppersystem_send\" class=\"button-primary white_color_toppersystem\" href=\"javascript:ProcessStartAutoLoadToppersystem();\">" + txtts6 + "</a></div>&nbsp;&nbsp; <div class=\"botton_space_terms_condictions_toppersystem\"><a rel=\"nofollow\" id=\"close_toppersystem_send\" class=\"button-primary white_color_toppersystem\" href=\"javascript:close_request_automatic_register_toppersystem();\">" + txtts7 + "</a></div>";
                    document.getElementById('box_request_automatic_register_toppersystem').innerHTML="<small>" + txtts2 + "</small><br><br>" + iframe_terms_condictions_toppersystem + "<input id=\"check_privacy_toppersystem_send\" name=\"check_privacy_toppersystem_send\" type=\"checkbox\" onclick=\"ok_write_privacy()\" class=\"\"> <small>" + txtts5 + "</small><br><div class=\"botton_space_terms_condictions_toppersystem\"><a rel=\"nofollow\" id=\"go_toppersystem_send\" class=\"button-primary white_color_toppersystem\" href=\"javascript:ProcessStartAutoLoadToppersystem();\">" + txtts6 + "</a></div>&nbsp;&nbsp; <div class=\"botton_space_terms_condictions_toppersystem\"><a rel=\"nofollow\" id=\"close_toppersystem_send\" class=\"button-primary white_color_toppersystem\" href=\"javascript:close_request_automatic_register_toppersystem();\">" + txtts7 + "</a></div>";

                    document.getElementById('box_request_automatic_register_toppersystem').className="stxle_request_events_terms_condictions_toppersystem";
                    setTimeout("rendernoload_view_terms_condictions_toppersystem()", 2000);                    
                }
            }
	    }     
	}
}

function ProcessStartCheckAutoLoadToppersystem()
{
	if(ControllerFunction() == true){
        setTimeout("ProcessStartCheckAutoLoadToppersystem2()", 80);	
	}
}

function ProcessStartCheckAutoLoadToppersystem2()
{
	if(ControllerFunction() == true){

        if((document.getElementById('autoloadcheck_msg_toppersystem'))&&(document.getElementById('autoloadcheck_req_toppersystem'))&&(document.getElementById('domain_toppersystem'))&&(document.getElementById('req_email_toppersystem_register'))&&(document.getElementById('req_name_toppersystem_register'))){

            if(((document.getElementById('autoloadcheck_req_toppersystem').value.trim() != "")&&(document.getElementById('req_email_toppersystem_register').value.trim() != ""))&&(document.getElementById('domain_toppersystem').value.trim() != "")){

			    var xhr = new XMLHttpRequest();
                xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
			    xhr.send();
			    xhr.addEventListener("readystatechange", processRequest, false);
			    function processRequest(e) {
				    if (xhr.readyState == 4) {
					    if (xhr.status >= 200 && xhr.status < 304) {
			
				            var http = new XMLHttpRequest();

				            http.onreadystatechange = function() {
					            if(http.readyState == 4 && http.status == 200) {
						            if(http.responseText != ""){
                                        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
                                        var response="";
						                if(http.responseText.trim() == "ok"){
                                            //npt			            
                                        }else{
                                            response=http.responseText.trim();
                                        }				

                                        if(http.responseText.trim() == "ok"){
                                            setTimeout("ProcessAutorizationAutoLoadToppersystem()", 400);
                                        }else if(http.responseText.trim() == "no"){                              
                                            setTimeout("StartProcessStartToppersystem()", 400);
                                        }else if(http.responseText.trim() == "no1"){
                                            document.getElementById('autoloadcheck_msg_toppersystem').value="1";                                                          
                                            setTimeout("StartProcessStartToppersystem()", 400);
                                        }else if(http.responseText.trim() == "no2"){
                                            document.getElementById('autoloadcheck_msg_toppersystem').value="2";
                                            document.getElementById('autoloadcheck_free_toppersystem').value="0";                          
                                            setTimeout("StartProcessStartToppersystem()", 400);
                                        }else if(http.responseText.trim() == "no3"){                                
                                            document.getElementById('autoloadcheck_msg_toppersystem').value="3";
                                            document.getElementById('autoloadcheck_free_toppersystem').value="0";                              
                                            setTimeout("StartProcessStartToppersystem()", 400);
                                        }else if(http.responseText.trim() == "no4"){
                                            document.getElementById('autoloadcheck_msg_toppersystem').value="4"
                                            document.getElementById('autoloadcheck_free_toppersystem').value="0";                           
                                            setTimeout("StartProcessStartToppersystem()", 400);
                                        }else{
                                            alert(response);                                
                                        }					
						            }else{
                                        setTimeout("StartProcessStartToppersystem()", 80);
                                    }
					            }else if(http.readyState == 4 && http.status != 200) {
                                    if(document.getElementById('toppersystem')){
                                        setTimeout("StartProcessStartToppersystem()", 400);
                                    }
					            }else{
						            if(http.readyState == 1) {						

						            }else if(http.readyState == 2) {

						            }else if(http.readyState == 3) {
						            
						            }
				                    
					            }
				            }
				            
				            var url = ajax_components_toppersystem.url;
                            var params = "action=componentstoppersystem43ajax&_nonce=" + ajax_components_toppersystem.nonce + "&email_toppersystem_register=" + encodeURIComponent(document.getElementById('req_email_toppersystem_register').value) + "&name_toppersystem_register=" + encodeURIComponent(document.getElementById('req_name_toppersystem_register').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('domain_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
				            http.open("POST", url, true);
				            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				            http.send(params);			
			            }else{
                            setTimeout("StartProcessStartToppersystem()", 400);
						}
					}
				}
            }

		}else{

		}
	}
}

function start_optimization_noautoload_toppersystem()
{
	if(document.body){
		if(!document.getElementById('button_toppersystem')){

            var lang = navigator.language || navigator.userLanguage;
            var newlang = lang.replace(/_/, '-'); 
            var hreflang_toppersystem = newlang.split("-")[0];            
            var txtts0;           
            if(hreflang_toppersystem == "it"){
                txtts0="Avvio processo di attivazione Topper System SEO";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="بدء تشغيل نظام Topper";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Starten Sie das Topper System SEO";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Start Topper System SEO";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Démarrer le Topper System SEO";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="शुरू Topper System SEO";
            }else if(hreflang_toppersystem == "ja"){
                 txtts0="開始 Topper System SEO";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Uruchom Topper System SEO";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Iniciar o Topper System SEO";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="Запустить Topper System SEO";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="开始 Topper System SEO";
            }else if(hreflang_toppersystem == "he"){
                txtts0="התחל Topper System SEO";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Initium Topper System SEO";
            }else{
                txtts0="Start Topper System SEO";
            }

			var add = document.createElement("div");
			add.setAttribute("id", "button_toppersystem");
            add.setAttribute("class", "button_toppersystem");
			add.innerHTML="<a rel=\"nofollow\" href=\"javascript:StartProcessStartToppersystem();\">" + txtts0 + "</a>";	
			document.body.appendChild(add);
		}
	}
}

function start_optimization_toppersystem()
{
	if(document.body){
		if(!document.getElementById('button_toppersystem')){

            var lang = navigator.language || navigator.userLanguage;
            var newlang = lang.replace(/_/, '-'); 
            var hreflang_toppersystem = newlang.split("-")[0];            
            var txtts0;           
            if(hreflang_toppersystem == "it"){
                txtts0="Avvio processo di attivazione Topper System SEO";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="بدء تشغيل نظام Topper";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Starten Sie das Topper System SEO";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Start Topper System SEO";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Démarrer le Topper System SEO";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="शुरू Topper System SEO";
            }else if(hreflang_toppersystem == "ja"){
                 txtts0="開始 Topper System SEO";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Uruchom Topper System SEO";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Iniciar o Topper System SEO";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="Запустить Topper System SEO";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="开始 Topper System SEO";
            }else if(hreflang_toppersystem == "he"){
                txtts0="התחל Topper System SEO";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Initium Topper System SEO";
            }else{
                txtts0="Start Topper System SEO";
            }

			var add = document.createElement("div");
			add.setAttribute("id", "button_toppersystem");
            add.setAttribute("class", "button_toppersystem");
			add.innerHTML="<a rel=\"nofollow\" href=\"javascript:StartProcessStartToppersystem();\">" + txtts0 + "</a>";	
			document.body.appendChild(add);

			var xhr = new XMLHttpRequest();
            xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
			xhr.send();
			xhr.addEventListener("readystatechange", processRequest, false);
			function processRequest(e) {
				if (xhr.readyState == 4) {
					if (xhr.status >= 200 && xhr.status < 304) {
                        setTimeout("ProcessStartCheckAutoLoadToppersystem()", 80);
                    }else{
                        setTimeout("StartProcessStartToppersystem()", 400);
                    }
                }
            }
		}
	}
}

function start_optimization_onpage_toppersystem()
{
	if(document.body){
		if(!document.getElementById('button_toppersystem')){
            document.getElementById('block_load_activation_start_toppersystem').className = "display_none_ts";
            document.getElementById('block_load_activation_onload_toppersystem').className = "";
            setTimeout("start_optimization_toppersystem()", 400);
        }else{
            setTimeout("StartProcessStartToppersystem()", 400);
        }
	}
}

function StartProcessOpenTecnicalSupportToppersystem()
{
    if(document.body){
        alert("support@toppersystem.com");
    }
}

function StartProcessOpenAgrementToppersystem()
{
    if(document.body){
        if(document.getElementById('idtermsandcondictionslinkweb_toppersystem')){
            window.location.assign(document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim());
        }
    }
}
//-->