<!--
function GoGuideIndexToppersystem()
{
    if(ControllerFunction2() == true){
        if(document.getElementById('render_events_all_toppersystem')){        
            setTimeout("close_events_all_toppersystem();", 40);
        }

        setTimeout("StartProcessGuideCPT1oppersystem();", 80);
    }
}

function goto_noconnect_guide_toppersystem()
{
    if(ControllerFunction2() == true){
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

//INIZIO sezione 1
function Go1fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go1fromMenuGuideToppersystem2()", 80);
    }
}
function Go1fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts4')){
            document.getElementById('idguideboxnow_toppersystem').value="0";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go2fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go2fromMenuGuideToppersystem2()", 80);
    }
}
function Go2fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts5')){
            document.getElementById('idguideboxnow_toppersystem').value="1";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go3fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go3fromMenuGuideToppersystem2()", 80);
    }
}
function Go3fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts6')){
            document.getElementById('idguideboxnow_toppersystem').value="2";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go4fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go4fromMenuGuideToppersystem2()", 80);
    }
}
function Go4fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts7')){
            document.getElementById('idguideboxnow_toppersystem').value="3";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go5fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go5fromMenuGuideToppersystem2()", 80);
    }
}
function Go5fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts8')){
            document.getElementById('idguideboxnow_toppersystem').value="4";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go6fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go6fromMenuGuideToppersystem2()", 80);
    }
}
function Go6fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts9')){
            document.getElementById('idguideboxnow_toppersystem').value="5";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go7fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go7fromMenuGuideToppersystem2()", 80);
    }
}
function Go7fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts10')){        
            document.getElementById('idguideboxnow_toppersystem').value="6";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go8fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go8fromMenuGuideToppersystem2()", 80);
    }
}
function Go8fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts11')){
            document.getElementById('idguideboxnow_toppersystem').value="7";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go9fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go9fromMenuGuideToppersystem2()", 80);
    }
}
function Go9fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts12')){ 
            document.getElementById('idguideboxnow_toppersystem').value="8";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go10fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go10fromMenuGuideToppersystem2()", 80);
    }
}
function Go10fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts14')){
            document.getElementById('idguideboxnow_toppersystem').value="9";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}
//FINE sezione 1

//INIZIO sezione 2
function Go11fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go11fromMenuGuideToppersystem2()", 80);
    }
}
function Go11fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="10";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
//FINE sezione 2

//INIZIO sezione 3
function Go12fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go12fromMenuGuideToppersystem2()", 80);
    }
}
function Go12fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="11";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go14fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    document.getElementById('idguideboxnow_toppersystem').value="0";
                    setTimeout("events_aspm_toppersystem()", 80);
                    setTimeout("Go14fromMenuGuideToppersystem2()", 800);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go14fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="14";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt14fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("all_events_toppersystem()", 80);
        setTimeout("GoInt14fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt14fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="14";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go15fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_aspm_toppersystem()", 80);
                    setTimeout("Go15fromMenuGuideToppersystem2()", 800);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go15fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        setTimeout("current_events_toppersystem()", 20);
        document.getElementById('idguideboxnow_toppersystem').value="15";
        setTimeout("go_guide_toppersystem()", 80);
        setTimeout("GoInt15fromMenuGuideToppersystem3()", 800);
    }
}
function GoInt15fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("current_events_toppersystem()", 80);
                    setTimeout("GoInt15fromMenuGuideToppersystem2()", 80);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function GoInt15fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        setTimeout("current_events_toppersystem()", 20);
        document.getElementById('idguideboxnow_toppersystem').value="15";
        setTimeout("go_guide_toppersystem()", 80);
        setTimeout("GoInt15fromMenuGuideToppersystem3()", 800);
    }
}
function GoInt15fromMenuGuideToppersystem3()
{
    if(ControllerFunction2() == true){
        if(document.getElementById('guideboxts14')){
            document.getElementById('guideboxts14').className="marginrxghtl16 vertxcall4";
        }
    }
}

function GoIntX21fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("close_events_all_toppersystem()", 20);
                    setTimeout("events_management_toppersystem()", 80);
                    if(document.getElementById('idguideboxnow_toppersystem').value != ""){
                        setTimeout("GoIntX21fromMenuGuideToppersystem2()", 2000);
                    }
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function GoIntX21fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="19";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
//FINE sezione 3

//INIZIO sezione 4
function Go18fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go18fromMenuGuideToppersystem2()", 80);
    }
}
function Go18fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="12";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go16fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    document.getElementById('idguideboxnow_toppersystem').value="0";
                    setTimeout("events_toppersystem()", 80);
                    setTimeout("Go16fromMenuGuideToppersystem2()", 800);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go16fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="16";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go17fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_toppersystem()", 80);
                    setTimeout("Go17fromMenuGuideToppersystem2()", 800);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go17fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="17";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
//FINE sezione 4

//INIZIO sezione 5
function Go19fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("Go19fromMenuGuideToppersystem2()", 80);
    }
}
function Go19fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="13";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go20fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    document.getElementById('idguideboxnow_toppersystem').value="0";
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go20fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go20fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="18";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt20fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt20fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt20fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="18";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go21fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go21fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go21fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="19";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt21fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt21fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt21fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="19";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go22fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go22fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go22fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="20";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt22fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt22fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt22fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="20";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go23fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go23fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go23fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="21";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt23fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt23fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt23fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts18')){
            document.getElementById('idguideboxnow_toppersystem').value="21";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go24fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go24fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go24fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="22";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt24fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt24fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt24fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="22";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go25fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go25fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go25fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="23";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt25fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt25fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt25fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts20')){
            document.getElementById('idguideboxnow_toppersystem').value="23";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go26fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go26fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go26fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="24";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt26fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt26fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt26fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts21')){
            document.getElementById('idguideboxnow_toppersystem').value="24";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go27fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go27fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go27fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="25";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt27fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt27fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt27fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts22')){
            document.getElementById('idguideboxnow_toppersystem').value="25";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go28fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go28fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go28fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="26";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt28fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt28fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt28fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="26";
        setTimeout("go_guide_toppersystem()", 80);
    }
}

function Go29fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go29fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go29fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="27";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt29fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt29fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt29fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts24')){
            document.getElementById('idguideboxnow_toppersystem').value="27";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go30fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go30fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go30fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="28";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt30fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt30fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt30fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts25')){
            document.getElementById('idguideboxnow_toppersystem').value="28";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go31fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go31fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go31fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="29";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt31fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt31fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt31fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts50')){
            document.getElementById('idguideboxnow_toppersystem').value="29";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}

function Go32fromMenuGuideToppersystem()
{
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
    xhr.send();
    xhr.addEventListener("readystatechange", processRequest, false);
    function processRequest(e) {
	    if (xhr.readyState == 4) {
		    if (xhr.status >= 200 && xhr.status < 304) {
                if(ControllerFunction2() == true){
                    setTimeout("events_management_toppersystem()", 80);
                    setTimeout("Go32fromMenuGuideToppersystem2()", 2000);
                }
            }else{
                setTimeout("goto_noconnect_guide_toppersystem()", 80);
            }
        }
    }
}
function Go32fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="30";
        setTimeout("go_guide_toppersystem()", 80);
    }
}
function GoInt32fromMenuGuideToppersystem()
{
    if(ControllerFunction2() == true){
        setTimeout("GoInt32fromMenuGuideToppersystem2()", 80);
    }
}
function GoInt32fromMenuGuideToppersystem2()
{
    if(ControllerFunction2() == true){
        if(!document.getElementById('index_guide_ts51')){
            document.getElementById('idguideboxnow_toppersystem').value="30";
            setTimeout("go_guide_toppersystem()", 80);
        }
    }
}
//INIZIO sezione 5

function index_guide_toppersystem()
{
    if(ControllerFunction2() == true){
         if(document.getElementById('idguideboxnow_toppersystem')){
             if(document.getElementById('idguideboxnow_toppersystem').value != ""){
                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
                var txtts;
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
                var txtts26;
                var txtts27;
                var txtts28;
                var txtts29;
                var txtts30;
                var txtts31;
                var txtts32;
                var txtts33;
                var txtts34;
                var txtts35;
                var txtts36;
                var txtts37;
                if(hreflang_toppersystem == "it"){
                    txtts0="Indice Generale";

                    txtts1="Ottimizzazione delle pagine pubbliche";
                    txtts2="Aggiornamento lista url";
                    txtts3="Selezione delle pagine da ottimizzare";
                    txtts4="Impostazione della lingua";
                    txtts5="Parola chiave principale";
                    txtts6="Livello di ottimizzazione delle immagini";
                    txtts7="Ottimizzazione risorse Javascript";
                    txtts8="Ottimizzazione delle risorse CSS";
                    txtts9="Dati salvati precedentemente";
                    txtts10="Termini e condizioni";
                    txtts11="Ottimizzazione delle pagine";

                    txtts12="[@] Supporto tecnico";
                    txtts14="Richiesta di assistenza tramite email";

                    txtts15="[A] Servizio Antispam";
                    txtts16="Supporto anti-spam compatibile ASPMTS";
                    txtts17="Elenco delle attività di ASPMTS";
                    txtts18="ASPMTS gestione delle eccezioni";

                    txtts19="[&rlarr;] Attività di ottimizzazione";
                    txtts34="Elenco delle ottimizzazioni e rimozioni";
                    txtts20="Elenco delle attività di ottimizzazione";
                    txtts21="Download delle attività di ottimizzazione";

                    txtts22="[&check;] Attivazione dei Servizi e gestione delle funzionalità";
                    txtts35="Servizi e fuzionalità varie";
                    txtts23="Stato dei servizi e funzionalità";
                    txtts24="Attivazione supporto anti-spam ASPMTS";
                    txtts25="Attivazione supporto cache";
                    txtts26="Attivazione e gestione Smart Image Lazy-Loading";
                    txtts27="Attivazione funzione Disabilita WP-CRON";
                    txtts28="Attivazione e gestione CO2 Application";
                    txtts29="Gestione ottimizzazione risorse Javascript";
                    txtts30="Gestione ottimizzazione delle risorse CSS";
                    txtts31="Attivazione aggiornamento automatico delle pagine ottimizzate";
                    txtts32="Gestione rimozione cache delle ottimizzazioni";
                    txtts33="Gestione indirizzo versione di stage e di produzione del sito";
                    txtts36="Gestione importazione e esportazione CSV";
                    txtts37="Gestione Intelligenza Artificiale";
                }else if(hreflang_toppersystem == "ar"){
                    txtts0="فهرس عام";

                    txtts1="تحسين الصفحات العامة";
                    txtts2="تحديث قائمة عناوين url";
                    txtts3="تحديد الصفحات لتحسينها";
                    txtts4="إعداد اللغة";
                    txtts5="الكلمة الأساسية الرئيسية";
                    txtts6="مستوى تحسين الصورة";
                    txtts7="تحسين موارد جافا سكريبت";
                    txtts8="تحسين موارد CSS";
                    txtts9="البيانات المحفوظة مسبقًا";
                    txtts10="الشروط والأحكام"; 
                    txtts11="تحسين الصفحة";

                    txtts12="[@] دعم فني";
                    txtts14="طلب الدعم عبر البريد الإلكتروني"; 

                    txtts15="[A] خدمة مكافحة البريد العشوائي";
                    txtts16="دعم مكافحة البريد العشوائي المتوافق مع ASPMTS"; 
                    txtts17="قائمة نشاط ASPMTS"; 
                    txtts18="معالجة استثناءات ASPMTS";

                    txtts19="[&rlarr;] نشاط التحسين";
                    txtts34="قائمة التحسينات والإزالة";
                    txtts20="قائمة مهام التحسين";
                    txtts21="تنزيل مهام التحسين";

                    txtts22="[&check;] تنشيط الخدمات وإدارة الميزات";
                    txtts35="الخدمات والميزات المتنوعة";
                    txtts23="حالة الخدمات والميزات"; 
                    txtts24="تنشيط دعم مكافحة البريد العشوائي ASPMTS"; 
                    txtts25="تنشيط دعم ذاكرة التخزين المؤقت";
                    txtts26="تنشيط وإدارة التحميل البطيء للصور الذكية";
                    txtts27="تنشيط تعطيل وظيفة WP-CRON";
                    txtts28="تنشيط وإدارة تطبيق CO2";
                    txtts29="مدير تحسين موارد جافا سكريبت";
                    txtts30="إدارة تحسين موارد CSS";
                    txtts31="تنشيط التحديث التلقائي للصفحات المحسنة";
                    txtts32="تحسين إدارة إزالة ذاكرة التخزين المؤقت";
                    txtts33="إدارة مرحلة الموقع وعنوان إصدار الإنتاج";
                    txtts36="إدارة استيراد وتصدير CSV";
                    txtts37="إدارة الذكاء الاصطناعي";
                }else if(hreflang_toppersystem == "de"){
                    txtts0="Allgemeiner Index";

                    txtts1="Optimierung öffentlicher Seiten";
                    txtts2="URL-Liste wird aktualisiert";
                    txtts3="Auswahl der zu optimierenden Seiten";
                    txtts4="Spracheinstellung";
                    txtts5="Hauptschlüsselwort";
                    txtts6="Bildoptimierungsstufe";
                    txtts7="Optimierung von Javascript-Ressourcen";
                    txtts8="CSS-Ressourcen optimieren";
                    txtts9="Zuvor gespeicherte Daten";
                    txtts10="Allgemeine Geschäftsbedingungen";
                    txtts11="Seitenoptimierung";

                    txtts12="[@] Technischer Support";
                    txtts14="Support per E-Mail anfordern";

                    txtts15="[A] Antispam-Dienst";
                    txtts16="ASPMTS-kompatible Anti-Spam-Unterstützung";
                    txtts17="ASPMTS-Aktivitätsliste";
                    txtts18="ASPMTS-Ausnahmebehandlung";

                    txtts19="[&rlarr;] Optimierungsaktivität";
                    txtts34="Liste der Optimierungen und Entfernungen";
                    txtts20="Liste der Optimierungsaufgaben";
                    txtts21="Optimierungsaufgaben herunterladen";

                    txtts22="[&check;] Aktivierung der Dienste und Verwaltung der Funktionen";
                    txtts35="Dienste und verschiedene Funktionen";
                    txtts23="Status der Dienste und Funktionen";
                    txtts24="Aktivierung der ASPMTS-Anti-Spam-Unterstützung";
                    txtts25="Cache-Unterstützung aktivieren";
                    txtts26="Smart Image Lazy-Loading aktivieren und verwalten";
                    txtts27="Aktivieren und Deaktivieren der WP-CRON-Funktion";
                    txtts28="Aktivierung und Verwaltung der CO2 Application";
                    txtts29="Javascript-Ressourcenoptimierungsmanager";
                    txtts30="CSS-Ressourcenoptimierungsmanagement";
                    txtts31="Automatische Aktualisierung optimierter Seiten aktivieren";
                    txtts32="Optimierung der Cache-Entfernungsverwaltung";
                    txtts33="Site-Stufen- und Produktionsversionsadresse verwalten";
                    txtts36="CSV-Import- und Exportverwaltung";
                    txtts37="Künstliche Intelligenz-Management";
                }else if(hreflang_toppersystem == "es"){
                    txtts0="Índice general";

                    txtts1="Optimización de páginas públicas";
                    txtts2="Actualizando lista de URL";
                    txtts3="Selección de páginas a optimizar";
                    txtts4="Configuración de idioma";
                    txtts5="Palabra clave principal";
                    txtts6="Nivel de optimización de imagen";
                    txtts7="Optimizando los recursos de Javascript";
                    txtts8="Optimizando recursos CSS";
                    txtts9="Datos guardados anteriormente";
                    txtts10="Términos y condiciones";
                    txtts11="Optimización de página";

                    txtts12="[@] Soporte técnico";
                    txtts14="Solicitar soporte por correo electrónico";

                    txtts15="[A] Servicio Antispam";
                    txtts16="Soporte antispam compatible con ASPMTS";
                    txtts17="Lista de actividades ASPMTS";
                    txtts18="Manejo de excepciones ASPMTS";

                    txtts19="[&rlarr;] Actividad de optimización";
                    txtts34="Lista de optimizaciones y eliminaciones";
                    txtts20="Lista de tareas de optimización";
                    txtts21="Descargar tareas de optimización";

                    txtts22="[&check;] Activación de los Servicios y gestión de las funcionalidades";
                    txtts35="Servicios y funcionalidades varias";
                    txtts23="Estado de servicios y funcionalidades";
                    txtts24="Activación del soporte antispam ASPMTS";
                    txtts25="Activar soporte de caché";
                    txtts26="Activar y administrar Smart Image Lazy-Loading";
                    txtts27="Activar Desactivar función WP-CRON";
                    txtts28="Activación y gestión de CO2 Application";
                    txtts29="Administrador de optimización de recursos Javascript";
                    txtts30="Gestión de optimización de recursos CSS";
                    txtts31="Activar actualización automática de páginas optimizadas";
                    txtts32="Optimización de la gestión de eliminación de caché";
                    txtts33="Administrar la etapa del sitio y la dirección de la versión de producción";
                    txtts36="Gestión de importación y exportación CSV";
                    txtts37="Gestión de Inteligencia Artificial";
                }else if(hreflang_toppersystem == "fr"){
                    txtts0="Index général";

                    txtts1="Optimisation des pages publiques";
                    txtts2="Mise à jour de la liste d'URL";
                    txtts3="Sélection des pages à optimiser";
                    txtts4="Paramètre de langue";
                    txtts5="Mot-clé principal";
                    txtts6="Niveau d'optimisation de l'image";
                    txtts7="Optimisation des ressources Javascript";
                    txtts8="Optimisation des ressources CSS";
                    txtts9="Données précédemment enregistrées";
                    txtts10="Termes et conditions";
                    txtts11="Optimisation des pages";

                    txtts12="[@] Assistance technique";
                    txtts14="Demande d'assistance par e-mail";

                    txtts15="[A] Service anti-spam";
                    txtts16="Prise en charge anti-spam compatible ASPMTS";
                    txtts17="Liste des activités ASPMTS";
                    txtts18="Gestion des exceptions ASPMTS";

                    txtts19="[&rlarr;] Activité d'optimisation";
                    txtts34="Liste des optimisations et suppressions";
                    txtts20="Liste des tâches d'optimisation";
                    txtts21="Télécharger les tâches d'optimisation";

                    txtts22="[&check;] Activation des Services et gestion des fonctionnalités";
                    txtts35="Services et fonctionnalités diverses";
                    txtts23="Statut des services et fonctionnalités";
                    txtts24="Activation du support anti-spam ASPMTS";
                    txtts25="Activer la prise en charge du cache";
                    txtts26="Activer et gérer le chargement différé des images intelligentes";
                    txtts27="Activer la fonction Désactiver WP-CRON";
                    txtts28="Activation et gestion de CO2 Application";
                    txtts29="Gestionnaire d'optimisation des ressources Javascript";
                    txtts30="Gestion de l'optimisation des ressources CSS";
                    txtts31="Activer la mise à jour automatique des pages optimisées";
                    txtts32="Gestion de la suppression du cache d'optimisation";
                    txtts33="Gérer l'étape du site et l'adresse de la version de production";
                    txtts36="Gestion des importations et exportations CSV";
                    txtts37="Gestion de l'intelligence artificielle";
                }else if(hreflang_toppersystem == "hi"){
                    txtts0="सामान्य सूचकांक";

                    txtts1="सार्वजनिक पृष्ठों का अनुकूलन";
                    txtts2="यूआरएल सूची अद्यतन कर रहा है";
                    txtts3="अनुकूलन हेतु पृष्ठों का चयन";
                    txtts4="भाषा सेटिंग";
                    txtts5="मुख्य कीवर्ड";
                    txtts6="छवि अनुकूलन स्तर";
                    txtts7="जावास्क्रिप्ट संसाधनों का अनुकूलन";
                    txtts8="सीएसएस संसाधनों का अनुकूलन";
                    txtts9="पहले से सहेजा गया डेटा";
                    txtts10="नियम एवं शर्तें";
                    txtts11="पेज अनुकूलन";

                    txtts12="[@] तकनीकी सहायता";
                    txtts14="ईमेल द्वारा समर्थन का अनुरोध करें";

                    txtts15="[A] एंटीस्पैम सेवा";
                    txtts16="ASPMTS संगत एंटी-स्पैम समर्थन";
                    txtts17="ASPMTS गतिविधि सूची";
                    txtts18="ASPMTS अपवाद प्रबंधन";

                    txtts19="[&rlarr;] अनुकूलन गतिविधि";
                    txtts34="अनुकूलन और निष्कासन की सूची";
                    txtts20="अनुकूलन कार्यों की सूची";
                    txtts21="अनुकूलन कार्य डाउनलोड करें";

                    txtts22="[&check;] सेवाओं का सक्रियण और सुविधाओं का प्रबंधन";
                    txtts35="सेवाएँ और विभिन्न सुविधाएँ";
                    txtts23="सेवाओं और सुविधाओं की स्थिति";
                    txtts24="ASPMTS एंटी-स्पैम समर्थन सक्रियण";
                    txtts25="कैश समर्थन सक्रिय करें";
                    txtts26="स्मार्ट इमेज लेज़ी-लोडिंग को सक्रिय और प्रबंधित करें";
                    txtts27="सक्रिय करें, WP-CRON फ़ंक्शन अक्षम करें";
                    txtts28="CO2 Application सक्रियण और प्रबंधन";
                    txtts29="जावास्क्रिप्ट संसाधन अनुकूलन प्रबंधक";
                    txtts30="सीएसएस संसाधन अनुकूलन प्रबंधन";
                    txtts31="अनुकूलित पृष्ठों का स्वचालित अद्यतन सक्रिय करें";
                    txtts32="अनुकूलन कैश निष्कासन प्रबंधन";
                    txtts33="साइट चरण और उत्पादन संस्करण पता प्रबंधित करें";
                    txtts36="सीएसवी आयात और निर्यात प्रबंधन";
                    txtts37="कृत्रिम बुद्धिमत्ता प्रबंधन";
                }else if(hreflang_toppersystem == "ja"){
                    txtts0="総合インデックス";

                    txtts1="公開ページの最適化";
                    txtts2="URLリストを更新中";
                    txtts3="最適化するページの選択";
                    txtts4="言語設定";
                    txtts5="メインキーワード";
                    txtts6="画像の最適化レベル";
                    txtts7="JavaScript リソースの最適化";
                    txtts8="CSS リソースの最適化";
                    txtts9="以前に保存したデータ";
                    txtts10="利用規約";
                    txtts11="ページの最適化";

                    txtts12="[@] テクニカル サポート";
                    txtts14="電子メールでサポートをリクエスト";

                    txtts15="[A] スパム対策サービス";
                    txtts16="ASPMTS 互換のスパム対策サポート";
                    txtts17="ASPMTS アクティビティ リスト";
                    txtts18="ASPMTS 例外処理";

                    txtts19="[&rlarr;] 最適化アクティビティ";
                    txtts34="最適化と削除のリスト";
                    txtts20="最適化タスクのリスト";
                    txtts21="ダウンロード最適化タスク";

                    txtts22="[&check;] サービスのアクティブ化と機能の管理";
                    txtts35="サービスとさまざまな機能";
                    txtts23="サービスと機能のステータス";
                    txtts24="ASPMTS スパム対策サポートのアクティブ化";
                    txtts25="キャッシュ サポートをアクティブ化";
                    txtts26="Smart Image Lazy-Loading のアクティブ化と管理";
                    txtts27="WP-CRON機能の有効化・無効化";
                    txtts28="CO2 アプリケーションのアクティブ化と管理";
                    txtts29="Javascript リソース最適化マネージャー";
                    txtts30="CSS リソース最適化管理";
                    txtts31="最適化されたページの自動更新を有効にする";
                    txtts32="最適化キャッシュ削除管理";
                    txtts33="サイトのステージと製品バージョンのアドレスを管理";
                    txtts36="CSVインポートおよびエクスポート管理";
                    txtts37="人工知能管理";
                }else if(hreflang_toppersystem == "pl"){
                    txtts0="Indeks ogólny";

                    txtts1="Optymalizacja stron publicznych";
                    txtts2="Aktualizowanie listy adresów URL";
                    txtts3="Wybór stron do optymalizacji";
                    txtts4="Ustawienie języka";
                    txtts5="Główne słowo kluczowe";
                    txtts6="Poziom optymalizacji obrazu";
                    txtts7="Optymalizacja zasobów Javascript";
                    txtts8="Optymalizacja zasobów CSS";
                    txtts9="Wcześniej zapisane dane";
                    txtts10="Warunki";
                    txtts11="Optymalizacja strony";

                    txtts12="[@] Wsparcie techniczne";
                    txtts14="Poproś o wsparcie przez e-mail";

                    txtts15="[A] Usługa antyspamowa";
                    txtts16="Wsparcie antyspamowe kompatybilne z ASPMTS";
                    txtts17="Lista działań ASPMTS";
                    txtts18="Obsługa wyjątków ASPMTS";

                    txtts19="[&rlarr;] Działanie optymalizacyjne";
                    txtts34="Lista optymalizacji i usunięć";
                    txtts20="Lista zadań optymalizacyjnych";
                    txtts21="Pobierz zadania optymalizacji";

                    txtts22="[&check;] Aktywacja Usług i zarządzanie funkcjami";
                    txtts35="Usługi i różne funkcje";
                    txtts23="Stan usług i funkcji";
                    txtts24="Aktywacja obsługi antyspamowej ASPMTS";
                    txtts25="Aktywuj obsługę pamięci podręcznej";
                    txtts26="Aktywuj inteligentne ładowanie obrazu i zarządzaj nim";
                    txtts27="Aktywuj funkcję wyłączania WP-CRON";
                    txtts28="Aktywacja i zarządzanie CO2 Application";
                    txtts29="Menedżer optymalizacji zasobów JavaScript";
                    txtts30="Zarządzanie optymalizacją zasobów CSS";
                    txtts31="Aktywuj automatyczną aktualizację zoptymalizowanych stron";
                    txtts32="Zarządzanie usuwaniem pamięci podręcznej optymalizacji";
                    txtts33="Zarządzaj etapem witryny i adresem wersji produkcyjnej";
                    txtts36="Zarządzanie importem i eksportem CSV";
                    txtts37="Zarządzanie sztuczną inteligencją";
                }else if(hreflang_toppersystem == "pt"){
                    txtts0="Índice Geral";

                    txtts1="Otimização de páginas públicas";
                    txtts2="Atualizando lista de urls";
                    txtts3="Seleção de páginas para otimizar";
                    txtts4="Configuração de idioma";
                    txtts5="Palavra-chave principal";
                    txtts6="Nível de otimização da imagem";
                    txtts7="Otimizando Recursos Javascript";
                    txtts8="Otimizando recursos CSS";
                    txtts9="Dados salvos anteriormente";
                    txtts10="Termos e condições";
                    txtts11="Otimização da página";

                    txtts12="[@] Suporte Técnico";
                    txtts14="Solicitar suporte por e-mail";

                    txtts15="[A] Serviço Antispam";
                    txtts16="Suporte anti-spam compatível com ASPMTS";
                    txtts17="Lista de atividades ASPMTS";
                    txtts18="Tratamento de exceções ASPMTS";

                    txtts19="[&rlarr;] Atividade de otimização";
                    txtts34="Lista de otimizações e remoções";
                    txtts20="Lista de tarefas de otimização";
                    txtts21="Download de tarefas de otimização";

                    txtts22="[&check;] Ativação dos Serviços e gestão das funcionalidades";
                    txtts35="Serviços e vários recursos";
                    txtts23="Estado dos serviços e funcionalidades";
                    txtts24="Ativação do suporte anti-spam ASPMTS";
                    txtts25="Ativar suporte de cache";
                    txtts26="Ativar e gerenciar Smart Image Lazy-Loading";
                    txtts27="Ativar Desativar função WP-CRON";
                    txtts28="Ativação e gerenciamento do CO2 Application";
                    txtts29="Gerenciador de otimização de recursos Javascript";
                    txtts30="Gerenciamento de Otimização de Recursos CSS";
                    txtts31="Ativar atualização automática de páginas otimizadas";
                    txtts32="Otimização de gerenciamento de remoção de cache";
                    txtts33="Gerenciar estágio do site e endereço da versão de produção";
                    txtts36="Gerenciamento de importação e exportação de CSV";
                    txtts37="Gestão de Inteligência Artificial";
                }else if(hreflang_toppersystem == "ru"){
                    txtts0 = "Общий указатель";

                    txtts1="Оптимизация общедоступных страниц";
                    txtts2="Обновление списка URL-адресов";
                    txtts3="Выбор страниц для оптимизации";
                    txtts4="Настройка языка";
                    txtts5="Основное ключевое слово";
                    txtts6="Уровень оптимизации изображения";
                    txtts7="Оптимизация ресурсов Javascript";
                    txtts8="Оптимизация ресурсов CSS";
                    txtts9="Ранее сохраненные данные";
                    txtts10="Положения и условия";
                    txtts11="Оптимизация страницы";

                    txtts12="[@] Техническая поддержка";
                    txtts14="Запросить поддержку по электронной почте";

                    txtts15="[A] Служба защиты от спама";
                    txtts16="ASPMTS-совместимая поддержка защиты от спама";
                    txtts17="Список действий ASPMTS";
                    txtts18="Обработка исключений ASPMTS";

                    txtts19="[&rlarr;] Активность по оптимизации";
                    txtts34="Список оптимизаций и удалений";
                    txtts20="Список задач по оптимизации";
                    txtts21="Загрузить задачи оптимизации";

                    txtts22="[&check;] Активация Сервисов и управление функциями";
                    txtts35="Услуги и различные функции";
                    txtts23="Статус услуг и функций";
                    txtts24="Активация поддержки защиты от спама ASPMTS";
                    txtts25="Активировать поддержку кеша";
                    txtts26="Активировать отложенную загрузку смарт-изображений и управлять ею";
                    txtts27="Активировать Отключить функцию WP-CRON";
                    txtts28="Активация CO2 Application и управление им";
                    txtts29="Менеджер оптимизации ресурсов JavaScript";
                    txtts30="Управление оптимизацией ресурсов CSS";
                    txtts31="Активировать автоматическое обновление оптимизированных страниц";
                    txtts32="Управление удалением кеша оптимизации";
                    txtts33="Управление адресом этапа и рабочей версии сайта";
                    txtts36="Управление импортом и экспортом CSV";
                    txtts37="Управление искусственным интеллектом";
                }else if(hreflang_toppersystem == "zh"){
                    txtts0="综合索引";

                    txtts1="公共页面优化";
                    txtts2="正在更新网址列表";
                    txtts3="选择要优化的页面";
                    txtts4="语言设置";
                    txtts5="主关键字";
                    txtts6="图像优化级别";
                    txtts7="优化Javascript资源";
                    txtts8="优化 CSS 资源";
                    txtts9="之前保存的数据";
                    txtts10="条款和条件";
                    txtts11="页面优化";

                    txtts12="[@]技术支持";
                    txtts14="通过电子邮件请求支持";

                    txtts15="[A] 反垃圾邮件服务";
                    txtts16="ASPMTS 兼容反垃圾邮件支持";
                    txtts17="ASPMTS 活动列表";
                    txtts18="ASPMTS异常处理";

                    txtts19="[&rlarr;] 优化活动";
                    txtts34="优化和删除列表";
                    txtts20="优化任务列表";
                    txtts21="下载优化任务";

                    txtts22="[&check;] 服务激活和功能管理";
                    txtts35="服务和各种功能";
                    txtts23="服务和功能的状态";
                    txtts24="ASPMTS 反垃圾邮件支持激活";
                    txtts25="激活缓存支持";
                    txtts26="激活和管理智能图像延迟加载";
                    txtts27="激活禁用 WP-CRON 功能";
                    txtts28="CO2 应用程序激活和管理";
                    txtts29="Javascript资源优化管理器";
                    txtts30="CSS资源优化管理";
                    txtts31="激活优化页面自动更新";
                    txtts32="优化缓存清除管理";
                    txtts33="管理站点阶段和生产版本地址";
                    txtts36="CSV导入导出管理";
                    txtts37="人工智能管理";
                }else if(hreflang_toppersystem == "he"){
                    txtts0="אינדקס כללי";

                    txtts1="אופטימיזציה של דפים ציבוריים";
                    txtts2="מעדכן רשימת כתובות אתרים";
                    txtts3="בחירת דפים לאופטימיזציה";
                    txtts4="הגדרת שפה";
                    txtts5="מילת מפתח עיקרית";
                    txtts6="רמת אופטימיזציה של תמונה";
                    txtts7="אופטימיזציה של משאבי Javascript";
                    txtts8="אופטימיזציה של משאבי CSS";
                    txtts9="נתונים שנשמרו בעבר";
                    txtts10="תנאים והגבלות";
                    txtts11="אופטימיזציה של עמודים";

                    txtts12="[@] תמיכה טכנית";
                    txtts14="בקש תמיכה בדואל";

                    txtts15="[A] שירות אנטי ספאם";
                    txtts16="תמיכה נגד ספאם תואמת ASPMTS";
                    txtts17="רשימת פעילויות ASPMTS";
                    txtts18="טיפול חריג ASPMTS";

                    txtts19="[&rlarr;] פעילות אופטימיזציה";
                    txtts34="רשימת אופטימיזציות והסרות";
                    txtts20="רשימת משימות אופטימיזציה";
                    txtts21="הורד משימות אופטימיזציה";

                    txtts22="[&check;] הפעלת השירותים וניהול התכונות";
                    txtts35="שירותים ותכונות שונות";
                    txtts23="סטטוס של שירותים ותכונות";
                    txtts24="הפעלת תמיכה ב-ASPMTS נגד ספאם";
                    txtts25="הפעל תמיכה במטמון";
                    txtts26="הפעל ונהל טעינת תמונה חכמה בעצלתיים";
                    txtts27="הפעל השבת את פונקציית WP-CRON";
                    txtts28="וניהול של יישומי CO2 Application";
                    txtts29="מנהל אופטימיזציה של משאבי Javascript";
                    txtts30="ניהול אופטימיזציה של משאבי CSS";
                    txtts31="הפעל עדכון אוטומטי של דפים מותאמים";
                    txtts32="ניהול הסרת מטמון אופטימיזציה";
                    txtts33="ניהול שלב האתר וכתובת גרסת הייצור";
                    txtts36="ניהול ייבוא ​​וייצוא CSV";
                    txtts37="ניהול בינה מלאכותית";
                }else if(hreflang_toppersystem == "la"){
                    txtts0="Index Generalis";

                    txtts1="Optimization of pages";
                    txtts2="Updating url list";
                    txtts3="Selection paginarum ad optimize";
                    txtts4="Language setting";
                    txtts5="Main keyword";
                    txtts6="Image optimization level";
                    txtts7="Optimizing Javascript Resources";
                    txtts8="Optimizing CSS resources";
                    txtts9="Previous data servavit";
                    txtts10="Terms and Conditions";
                    txtts11="Page optimization";

                    txtts12="[@] Technical Support";
                    txtts14="Request support by email";

                    txtts15="[A] Antispam Service";
                    txtts16="ASPMTS compatible anti-spam subsidium";
                    txtts17="ASPMTS album actio";
                    txtts18="ASPMTS exceptis tractandis";

                    txtts19="[&rlarr;] Optimization actio";
                    txtts34="Index optimizationum et remotionum";
                    txtts20="List of optimization tasks";
                    txtts21="Download optimization tasks";

                    txtts22="[&check;] Activatio muneris et administratione lineamentorum";
                    txtts35="Servicia et varia lineamenta";
                    txtts23="Status officiorum et lineamentorum";
                    txtts24="ASPMTS anti-spam support activation";
                    txtts25="Activate cache support";
                    txtts26="Activate et administrare Smart Image Lazy-Loading";
                    txtts27="Activate inactivare WP-CRON functionem";
                    txtts28="CO2 Application activationem et administrationem";
                    txtts29="Javascript resource optimization manager";
                    txtts30="CSS Resource Optimization Management";
                    txtts31="Activate automatic renovatio paginarum optimized";
                    txtts32="Optimization cache remotionem procuratio";
                    txtts33="Curo situs scaena et electronica versio productio";
                    txtts36="CSV importare et exportare procurationem";
                    txtts37="Artificialis Intelligentia Management";
                }else{
                    txtts0="General Index";

                    txtts1="Optimization of public pages";
                    txtts2="Updating url list";
                    txtts3="Selection of pages to optimize";
                    txtts4="Language setting";
                    txtts5="Main keyword";
                    txtts6="Image optimization level";
                    txtts7="Optimizing Javascript Resources";
                    txtts8="Optimizing CSS resources";
                    txtts9="Previously saved data";
                    txtts10="Terms and conditions";
                    txtts11="Page optimization";

                    txtts12="[@] Technical Support";
                    txtts14="Request support by email";

                    txtts15="[A] Antispam Service";
                    txtts16="ASPMTS compatible anti-spam support";
                    txtts17="ASPMTS activity list";
                    txtts18="ASPMTS exception handling";

                    txtts19="[&rlarr;] Optimization activity";
                    txtts34="List of optimizations and removals";
                    txtts20="List of optimization tasks";
                    txtts21="Download optimization tasks";

                    txtts22="[&check;] Activation of the Services and management of the features";
                    txtts35="Services and various features";
                    txtts23="Status of services and features";
                    txtts24="ASPMTS anti-spam support activation";
                    txtts25="Activate cache support";
                    txtts26="Activate and manage Smart Image Lazy-Loading";
                    txtts27="Activate Disable WP-CRON function";
                    txtts28="CO2 Application activation and management";
                    txtts29="Javascript resource optimization manager";
                    txtts30="CSS Resource Optimization Management";
                    txtts31="Activate automatic update of optimized pages";
                    txtts32="Optimization cache removal management";
                    txtts33="Manage site stage and production version address";
                    txtts36="CSV import and export management";
                    txtts37="Artificial Intelligence Management";
                }

                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 0){
                    if(document.getElementById('index_guide_ts0')){
                        document.getElementById('index_guide_ts0').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts0 + "</strong><br><br><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br><strong>" + txtts12 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go11fromMenuGuideToppersystem();\">" + txtts14 + "</a><br><br><strong>" + txtts15 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go12fromMenuGuideToppersystem();\">" + txtts16 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go14fromMenuGuideToppersystem();\">" + txtts17 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go15fromMenuGuideToppersystem();\">" + txtts18 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br><br><strong>" + txtts19 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go18fromMenuGuideToppersystem();\">" + txtts34 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go16fromMenuGuideToppersystem();\">" + txtts20 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go17fromMenuGuideToppersystem();\">" + txtts21 + "</a><br><br><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go19fromMenuGuideToppersystem();\">" + txtts35 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go32fromMenuGuideToppersystem();\">" + txtts37 + "</a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 1){
                    if(document.getElementById('index_guide_ts4')){
                        document.getElementById('index_guide_ts4').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; " + txtts2 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 2){
                    if(document.getElementById('index_guide_ts5')){
                        document.getElementById('index_guide_ts5').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; " + txtts3 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 3){
                    if(document.getElementById('index_guide_ts6')){
                        document.getElementById('index_guide_ts6').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; " + txtts4 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 4){
                    if(document.getElementById('index_guide_ts7')){
                        document.getElementById('index_guide_ts7').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; " + txtts5 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 5){
                    if(document.getElementById('index_guide_ts8')){
                        document.getElementById('index_guide_ts8').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; " + txtts6 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 6){
                    if(document.getElementById('index_guide_ts9')){
                        document.getElementById('index_guide_ts9').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; " + txtts7 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 7){
                    if(document.getElementById('index_guide_ts10')){
                        document.getElementById('index_guide_ts10').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; " + txtts8 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 8){
                    if(document.getElementById('index_guide_ts11')){
                        document.getElementById('index_guide_ts11').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; " + txtts9 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 9){
                    if(document.getElementById('index_guide_ts12')){
                        document.getElementById('index_guide_ts12').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; " + txtts10 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:Go10fromMenuGuideToppersystem();\">" + txtts11 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 10){
                    if(document.getElementById('index_guide_ts14')){
                        document.getElementById('index_guide_ts14').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts1 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go1fromMenuGuideToppersystem();\">" + txtts2 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go2fromMenuGuideToppersystem();\">" + txtts3 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go3fromMenuGuideToppersystem();\">" + txtts4 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go4fromMenuGuideToppersystem();\">" + txtts5 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go5fromMenuGuideToppersystem();\">" + txtts6 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go6fromMenuGuideToppersystem();\">" + txtts7 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go7fromMenuGuideToppersystem();\">" + txtts8 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go8fromMenuGuideToppersystem();\">" + txtts9 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go9fromMenuGuideToppersystem();\">" + txtts10 + "</a><br>&bull; " + txtts11 + "<br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 11){

                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 12){
                    if(document.getElementById('index_guide_ts1')){
                        document.getElementById('index_guide_ts1').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts15 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go14fromMenuGuideToppersystem();\">" + txtts17 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go15fromMenuGuideToppersystem();\">" + txtts18 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 13){
                    if(document.getElementById('index_guide_ts2')){
                        document.getElementById('index_guide_ts2').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts19 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go16fromMenuGuideToppersystem();\">" + txtts20 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go17fromMenuGuideToppersystem();\">" + txtts21 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 14){
                    if(document.getElementById('index_guide_ts3')){
                        document.getElementById('index_guide_ts3').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:Go32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 15){
                    if(document.getElementById('index_guide_ts26')){
                        document.getElementById('index_guide_ts26').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts15 + "</strong><br><br>&bull; " + txtts17 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt15fromMenuGuideToppersystem();\">" + txtts18 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoIntX21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }                    
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 16){
                    if(document.getElementById('index_guide_ts27')){                    
                        document.getElementById('index_guide_ts27').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts15 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt14fromMenuGuideToppersystem();\">" + txtts17 + "</a><br>&bull; " + txtts18 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoIntX21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 17){
                    if(document.getElementById('index_guide_ts28')){
                        document.getElementById('index_guide_ts28').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts19 + "</strong><br><br>&bull; " + txtts20 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:go_guide_toppersystem();\">" + txtts21 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 18){
                    if(document.getElementById('index_guide_ts29')){
                        document.getElementById('index_guide_ts29').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts19 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:back_guide_toppersystem();\">" + txtts20 + "</a><br>&bull; " + txtts21 + "<br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 19){
                    if(document.getElementById('index_guide_ts15')){
                        document.getElementById('index_guide_ts15').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; " + txtts23 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 20){
                    if(document.getElementById('index_guide_ts16')){
                        document.getElementById('index_guide_ts16').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; " + txtts24 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 21){
                    if(document.getElementById('index_guide_ts17')){
                        document.getElementById('index_guide_ts17').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; " + txtts25 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 22){
                    if(document.getElementById('index_guide_ts18')){
                        document.getElementById('index_guide_ts18').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; " + txtts26 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 23){
                    if(document.getElementById('index_guide_ts19')){
                        document.getElementById('index_guide_ts19').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; " + txtts27 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 24){
                    if(document.getElementById('index_guide_ts20')){
                        document.getElementById('index_guide_ts20').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; " + txtts28 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 25){
                    if(document.getElementById('index_guide_ts21')){
                        document.getElementById('index_guide_ts21').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; " + txtts29 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 26){
                    if(document.getElementById('index_guide_ts22')){
                        document.getElementById('index_guide_ts22').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; " + txtts30 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 27){
                    if(document.getElementById('index_guide_ts23')){
                        document.getElementById('index_guide_ts23').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; " + txtts31 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }

                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 28){
                    if(document.getElementById('index_guide_ts24')){
                        document.getElementById('index_guide_ts24').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; " + txtts32 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 29){
                    if(document.getElementById('index_guide_ts25')){
                        document.getElementById('index_guide_ts25').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; " + txtts33 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 30){
                    if(document.getElementById('index_guide_ts50')){
                        document.getElementById('index_guide_ts50').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; " + txtts36 + "<br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt32fromMenuGuideToppersystem();\">" + txtts37 + "</a><br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 31){
                    if(document.getElementById('index_guide_ts51')){
                        document.getElementById('index_guide_ts51').innerHTML="<br><div class=\"guidebox_list_menu_ts\"><strong>" + txtts22 + "</strong><br><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt20fromMenuGuideToppersystem();\">" + txtts23 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt21fromMenuGuideToppersystem();\">" + txtts24 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt22fromMenuGuideToppersystem();\">" + txtts25 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt23fromMenuGuideToppersystem();\">" + txtts26 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt24fromMenuGuideToppersystem();\">" + txtts27 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt25fromMenuGuideToppersystem();\">" + txtts28 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt26fromMenuGuideToppersystem();\">" + txtts29 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt27fromMenuGuideToppersystem();\">" + txtts30 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt28fromMenuGuideToppersystem();\">" + txtts31 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt29fromMenuGuideToppersystem();\">" + txtts32 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt30fromMenuGuideToppersystem();\">" + txtts33 + "</a><br>&bull; <a rel=\"nofollow\" href=\"javascript:GoInt31fromMenuGuideToppersystem();\">" + txtts36 + "</a><br>&bull; " + txtts37 + "<br><br>&larrhk; <a rel=\"nofollow\" href=\"javascript:GoGuideIndexToppersystem();\"><strong>" + txtts0 + "</strong></a></div>";
                    }
                }else{
                    //niente
                }
            }
        }
    }
}

function close_guide_toppersystem(n)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('idguideboxnow_toppersystem')){
            var id_now=parseFloat(document.getElementById('idguideboxnow_toppersystem').value);

            if((id_now >= 0)&&(id_now <= 31)){
                if(document.getElementById('guideboxts1')){
                    document.getElementById('guideboxts1').className="link_loader_toppersystem";                    
                    document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem";
                }
                if(document.getElementById('check_canonical_toppersystem_send0')){
                    if(document.getElementById('nmaxcanonical_toppersystem')){
                        for(i=0;i<=parseFloat(document.getElementById('nmaxcanonical_toppersystem').value);i++){ 
                            if(document.getElementById("canonical_toppersystem" + i.toString())){
                                if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                                    document.getElementById("check_canonical_toppersystem_send" + i.toString()).className="";							    
                                }
                            }
                        }
                    }
                }
                if(document.getElementById('language_toppersystem_send')){
                    if(document.getElementById('language_toppersystem_send').className == "inputform_toppersystem border_red"){
                        document.getElementById('language_toppersystem_send').className="inputform_toppersystem border_red";
                    }else{
                        document.getElementById('language_toppersystem_send').className="inputform_toppersystem";
                    }
                }
                if(document.getElementById('keyword_toppersystem_send')){
                    if(document.getElementById('keyword_toppersystem_send').className == "inputform_toppersystem border_red"){
                        document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem border_red";
                    }else{
                        document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem";
                    }
                }
                if(document.getElementById('guideboxts4')){
                    document.getElementById('guideboxts4').className="";
                }
                if(document.getElementById('guideboxts5')){
                    document.getElementById('guideboxts5').className="";
                }
                if(document.getElementById('guideboxts6')){
                    document.getElementById('guideboxts6').className="";
                }
                if(document.getElementById('guideboxts7')){
                    document.getElementById('guideboxts7').className="";
                }
                if(document.getElementById('check_privacy_toppersystem_send')){
                    if(document.getElementById('check_privacy_toppersystem_send').className != "border_red"){
                        document.getElementById('check_privacy_toppersystem_send').className="";
                    }
                }
                if(document.getElementById('go_all_toppersystem_send')){
                    document.getElementById('go_all_toppersystem_send').className="button-primary white_color_toppersystem";
                }
                if(document.getElementById('guideboxts8')){
                    document.getElementById('guideboxts8').className="";
                }
                if(document.getElementById('guideboxts9')){
                    document.getElementById('guideboxts9').className="pos_opera_all";
                }
                if(document.getElementById('guideboxts10')){
                    document.getElementById('guideboxts10').className="pos_opera_all";
                }
                if(document.getElementById('guideboxts11')){
                    document.getElementById('guideboxts11').className="pos_opera_all";
                }
                if(document.getElementById('guideboxts12')){
                    document.getElementById('guideboxts12').className="marginrxghtl16 vertxcall4";
                }
                if(document.getElementById('guideboxts14')){
                    document.getElementById('guideboxts14').className="marginrxghtl16 vertxcall4";
                }
                if(document.getElementById('guideboxts15')){
                    document.getElementById('guideboxts15').className="marginrxghtl16 vertxcall4";
                }
                if(document.getElementById('guideboxts16')){
                    document.getElementById('guideboxts16').className="marginrxghtl16 vertxcall4";
                }
                if(document.getElementById('guideboxts17')){
                    document.getElementById('guideboxts17').className="marginrxghtl16 vertxcall4";
                }
                if(document.getElementById('guideboxts18')){
                    document.getElementById('guideboxts18').className="marginrxghtl16 vertxcall4";
                }
                if(document.getElementById('guideboxts20')){
                    document.getElementById('guideboxts20').className="";
                }
                if(document.getElementById('guideboxts21')){
                    document.getElementById('guideboxts21').className="";
                }
                if(document.getElementById('guideboxts22')){
                    document.getElementById('guideboxts22').className="";
                }
                if(document.getElementById('guideboxts23')){
                    document.getElementById('guideboxts23').className="";
                }
                if(document.getElementById('guideboxts24')){
                    document.getElementById('guideboxts24').className="";
                }
                if(document.getElementById('guideboxts25')){
                    document.getElementById('guideboxts25').className="";
                }
                if(document.getElementById('guideboxts26')){
                    document.getElementById('guideboxts26').className="";
                }
                if(document.getElementById('guideboxts27')){
                    document.getElementById('guideboxts27').className="";
                }
                if(document.getElementById('guideboxts28')){
                    document.getElementById('guideboxts28').className="";
                }
                if(document.getElementById('guideboxts29')){
                    document.getElementById('guideboxts29').className="";
                }
                if(document.getElementById('guideboxts30')){
                    document.getElementById('guideboxts30').className="";
                }
                if(document.getElementById('guideboxts31')){
                    document.getElementById('guideboxts31').className="";
                }
            }

            if(document.getElementById('guideresponsets1')){
                document.getElementById('guideresponsets1').className="";
                document.getElementById('guideresponsets1').innerHTML="&nbsp;";
                document.getElementById('idguideboxnow_toppersystem').value="";
            }

            if(document.getElementById('guideresponsets2')){
                document.getElementById('guideresponsets2').className="";
                document.getElementById('guideresponsets2').innerHTML="&nbsp;";
                document.getElementById('idguideboxnow_toppersystem').value="";
            }

            if(document.getElementById('guideresponsets3')){
                document.getElementById('guideresponsets3').className="";
                document.getElementById('guideresponsets3').innerHTML="&nbsp;";
                document.getElementById('idguideboxnow_toppersystem').value="";
            }

            if(document.getElementById('guideresponsets4')){
                document.getElementById('guideresponsets4').className="";
                document.getElementById('guideresponsets4').innerHTML="&nbsp;";
                document.getElementById('idguideboxnow_toppersystem').value="";
            }

            if(n == "1"){
                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
                var txtts0;
                var txtts1;
                var txtts2;
                if(hreflang_toppersystem == "it"){
                    txtts0="Fine della Guida interattiva";
                    txtts1="Adesso sei pronto a scalare ogni vetta !";
                    txtts2="Buon Lavoro";
                }else if(hreflang_toppersystem == "ar"){
                    txtts0="نهاية الدليل التفاعلي";
                    txtts1="أنت الآن جاهز لتسلق أي قمة !";
                    txtts2="عمل جيد";
                }else if(hreflang_toppersystem == "de"){
                    txtts0="Ende des interaktiven Leitfadens";
                    txtts1="Jetzt sind Sie bereit, jeden Gipfel zu besteigen !";
                    txtts2="Gute Arbeit";
                }else if(hreflang_toppersystem == "es"){
                    txtts0="Fin de la guía interactiva";
                    txtts1="¡Ya estás listo para escalar cualquier pico!";
                    txtts2="Buen trabajo";
                }else if(hreflang_toppersystem == "fr"){
                    txtts0="Fin du guide interactif";
                    txtts1="Vous êtes maintenant prêt à gravir n'importe quel sommet !";
                    txtts2="Bon travail";
                }else if(hreflang_toppersystem == "hi"){
                    txtts0="इंटरैक्टिव गाइड का अंत";
                    txtts1="अब आप किसी भी चोटी पर चढ़ने के लिए तैयार हैं !";
                    txtts2="अच्छा काम";
                }else if(hreflang_toppersystem == "ja"){
                    txtts0="インタラクティブガイドの終了";
                    txtts1="これで、どんな山でも登る準備が整いました。";
                    txtts2="よくできました";
                }else if(hreflang_toppersystem == "pl"){
                    txtts0="Koniec interaktywnego przewodnika";
                    txtts1="Teraz możesz wspiąć się na dowolny szczyt !";
                    txtts2="Dobra robota";
                }else if(hreflang_toppersystem == "pt"){
                    txtts0="Fim do guia interativo";
                    txtts1="Agora você está pronto para escalar qualquer pico !";
                    txtts2="Bom trabalho";
                }else if(hreflang_toppersystem == "ru"){
                    txtts0="Конец интерактивного руководства";
                    txtts1="Теперь вы готовы покорить любую вершину !";
                    txtts2="Хорошая работа";
                }else if(hreflang_toppersystem == "zh"){
                    txtts0="互动指南结束";
                    txtts1="您现在已准备好攀登任何高峰！";
                    txtts2="干得好";
                }else if(hreflang_toppersystem == "he"){
                    txtts0="סוף המדריך האינטראקטיבי";
                    txtts1="עכשיו אתה מוכן לטפס על כל פסגה !";
                    txtts2="עבודה טובה";
                }else if(hreflang_toppersystem == "la"){
                    txtts0="Finis interactive dux";
                    txtts1="Nunc parati estis ad aliquem apicem ascendere !";
                    txtts2="Opus bonum instructus";
                }else{
                    txtts0="End of the interactive guide";
                    txtts1="You are now ready to climb any peak !";
                    txtts2="Good work";
                }
                alert(txtts0 + "\n" + txtts1 + "\n" + txtts2);
                setTimeout("close_events_all_toppersystem()", 80);               
            }      
        }
	}
}

function go_guide_toppersystem()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('idguideboxnow_toppersystem')){
            var n=13;
            if(document.getElementById('guideresponsets2')){
                n=15;
            }
            if(document.getElementById('guideresponsets3')){
                n=17;
            }
            if(document.getElementById('guideresponsets4')){
                n=30;
            }

            if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) <= n){
                var id_go=parseFloat(document.getElementById('idguideboxnow_toppersystem').value) + 1;
                document.getElementById('idguideboxnow_toppersystem').value=id_go;
                setTimeout("render_guide_toppersystem2()", 80);
            }
        }
	}
}

function back_guide_toppersystem()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('idguideboxnow_toppersystem')){
            var id_go=parseFloat(document.getElementById('idguideboxnow_toppersystem').value) - 1;
            document.getElementById('idguideboxnow_toppersystem').value=id_go;
            setTimeout("render_guide_toppersystem2()", 80);
        }
	}
}

function go_guide_aspmts_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_all_toppersystem')){
			var screen = document.getElementById("render_events_all_toppersystem");
			document.body.removeChild(screen);

            if(document.getElementById('idguideboxnow_toppersystem')){
                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "16"){
                    document.getElementById('idguideboxnow_toppersystem').value="14";
                    setTimeout("back_guide_toppersystem()", 20);
                }
            }
		}
	}
}

function go_guide_activity_toppersystem()
{
	if(ControllerFunction2() == true){	

		if(document.getElementById('render_events_all_toppersystem')){
			var screen = document.getElementById("render_events_all_toppersystem");
			document.body.removeChild(screen);

            if(document.getElementById('idguideboxnow_toppersystem')){
                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "18"){
                    document.getElementById('idguideboxnow_toppersystem').value="15";
                    setTimeout("back_guide_toppersystem()", 20);
                }
            }
		}
	}
}

function go_to_aspmts_js_toppersystem(){
    if(ControllerFunction2() == true){
        if(document.getElementById('idguideboxnow_toppersystem')){
            if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "12"){                
                document.getElementById('idguideboxnow_toppersystem').value="19";
                setTimeout("events_management_toppersystem()", 1400);
                setTimeout("go_guide_toppersystem()", 2200);   
            }
        }
    }
}

function render_guide_toppersystem2()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('idguideboxnow_toppersystem')){
            var id_now=parseFloat(document.getElementById('idguideboxnow_toppersystem').value);

            if((id_now >= 0)&&(id_now <= 14)){

                if(document.getElementById('guideboxts1')){
                    document.getElementById('guideboxts1').className="link_loader_toppersystem";                    
                    document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem";
                }
                if(document.getElementById('check_canonical_toppersystem_send0')){
                    if(document.getElementById('nmaxcanonical_toppersystem')){
                        for(i=0;i<=parseFloat(document.getElementById('nmaxcanonical_toppersystem').value);i++){ 
                            if(document.getElementById("canonical_toppersystem" + i.toString())){
                                if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                                    document.getElementById("check_canonical_toppersystem_send" + i.toString()).className="";							    
                                }
                            }
                        }
                    }
                }
                if(document.getElementById('language_toppersystem_send')){
                    if(document.getElementById('language_toppersystem_send').className == "inputform_toppersystem border_red"){
                        document.getElementById('language_toppersystem_send').className="inputform_toppersystem border_red";
                    }else{
                        document.getElementById('language_toppersystem_send').className="inputform_toppersystem";
                    }
                }
                if(document.getElementById('keyword_toppersystem_send')){
                    if(document.getElementById('keyword_toppersystem_send').className == "inputform_toppersystem border_red"){
                        document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem border_red";
                    }else{
                        document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem";
                    }
                }
                if(document.getElementById('guideboxts4')){
                    document.getElementById('guideboxts4').className="";
                }
                if(document.getElementById('guideboxts5')){
                    document.getElementById('guideboxts5').className="";
                }
                if(document.getElementById('guideboxts6')){
                    document.getElementById('guideboxts6').className="";
                }
                if(document.getElementById('guideboxts7')){
                    document.getElementById('guideboxts7').className="";
                }
                if(document.getElementById('check_privacy_toppersystem_send')){
                    if(document.getElementById('check_privacy_toppersystem_send').className != "border_red"){
                        document.getElementById('check_privacy_toppersystem_send').className="";
                    }
                }
                if(document.getElementById('go_all_toppersystem_send')){
                    document.getElementById('go_all_toppersystem_send').className="button-primary white_color_toppersystem";
                }
                if(document.getElementById('guideboxts8')){
                    document.getElementById('guideboxts8').className="";
                }
                if(document.getElementById('guideboxts9')){
                    document.getElementById('guideboxts9').className="pos_opera_all";
                }
                if(document.getElementById('guideboxts10')){
                    document.getElementById('guideboxts10').className="pos_opera_all";
                }
                if(document.getElementById('guideboxts11')){
                    document.getElementById('guideboxts11').className="pos_opera_all";
                }

            }

            if((id_now >= 15)&&(id_now <= 16)){
                if(document.getElementById('guideresponsets2')){

                    if(document.getElementById('guideboxts12')){
                        document.getElementById('guideboxts12').className="marginrxghtl16 vertxcall4";
                    }

                    if(document.getElementById('guideboxts14')){
                        document.getElementById('guideboxts14').className="marginrxghtl16 vertxcall4";
                    }
                   
                }
            }

            if((id_now >= 17)&&(id_now <= 18)){
                if(document.getElementById('guideresponsets3')){

                    if(document.getElementById('guideboxts15')){
                        document.getElementById('guideboxts15').className="marginrxghtl16 vertxcall4";
                    }

                    if(document.getElementById('guideboxts16')){
                        document.getElementById('guideboxts16').className="marginrxghtl16 vertxcall4";
                    }
                  
                }
            }

            if((id_now >= 19)&&(id_now <= 31)){
                if(document.getElementById('guideresponsets4')){

                    if(document.getElementById('guideboxts17')){
                        document.getElementById('guideboxts17').className="marginrxghtl16 vertxcall4";
                    }

                    if(document.getElementById('guideboxts18')){
                        document.getElementById('guideboxts18').className="marginrxghtl16 vertxcall4";
                    }

                    if(document.getElementById('guideboxts20')){
                        document.getElementById('guideboxts20').className="";
                    }

                    if(document.getElementById('guideboxts21')){
                        document.getElementById('guideboxts21').className="";
                    }

                    if(document.getElementById('guideboxts22')){
                        document.getElementById('guideboxts22').className="";
                    }

                    if(document.getElementById('guideboxts23')){
                        document.getElementById('guideboxts23').className="";
                    }

                    if(document.getElementById('guideboxts24')){
                        document.getElementById('guideboxts24').className="";
                    }

                    if(document.getElementById('guideboxts25')){
                        document.getElementById('guideboxts25').className="";
                    }

                    if(document.getElementById('guideboxts26')){
                        document.getElementById('guideboxts26').className="";
                    }

                    if(document.getElementById('guideboxts27')){
                        document.getElementById('guideboxts27').className="";
                    }

                    if(document.getElementById('guideboxts28')){
                        document.getElementById('guideboxts28').className="";
                    }

                    if(document.getElementById('guideboxts29')){
                        document.getElementById('guideboxts29').className="";
                    }

                    if(document.getElementById('guideboxts30')){
                        document.getElementById('guideboxts30').className="";
                    }

                    if(document.getElementById('guideboxts31')){
                        document.getElementById('guideboxts31').className="";
                    }
                  
                }
            }

            setTimeout("render_guide_toppersystem()", 80);
        }
	}
}


function render_guide_toppersystem()
{
	if(ControllerFunction2() == true){
         if(document.getElementById('idguideboxnow_toppersystem')){
             var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
             var txtts;
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
             var txtts26;
             var txtts27;
             var txtts28;
             var txtts29;
             var txtts30;
             var txtts31;
             var txtts32;

            if(hreflang_toppersystem == "it"){
                txtts="Fine";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Fase";
            }else if(hreflang_toppersystem == "ar"){
                txtts="نهاية";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="المرحلة";
            }else if(hreflang_toppersystem == "de"){
                txtts="Ende";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Phase";
            }else if(hreflang_toppersystem == "es"){
                txtts="Fin";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Fase";
            }else if(hreflang_toppersystem == "fr"){
                txtts="Fin";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Phase";
            }else if(hreflang_toppersystem == "hi"){
                txtts="समाप्त";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="चरण";
            }else if(hreflang_toppersystem == "ja"){
                txtts="終了";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="フェーズ";
            }else if(hreflang_toppersystem == "pl"){
                txtts="Koniec";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Faza";
            }else if(hreflang_toppersystem == "pt"){
                txtts="Fim";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Fase";
            }else if(hreflang_toppersystem == "ru"){
                txtts="Конец";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Фаза";
            }else if(hreflang_toppersystem == "zh"){
                txtts="结束";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="相位";
            }else if(hreflang_toppersystem == "he"){
                txtts="סוֹף";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="שלב";
            }else if(hreflang_toppersystem == "la"){
                txtts="End";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Phase";
            }else{
                txtts="End";
                txtts0="&pr;";
                txtts1="&sc;";
                txtts2="Step";
            }

            if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 0){
                setTimeout("StartProcessGuideToppersystem()", 80);

            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 1){
                if(hreflang_toppersystem == "it"){
                    txtts3="Aggiornamento lista url";
                    txtts4="Cliccando il link \"aggiorna lista url\" puoi aggiungere alla lista delle url tutte le pagine non elencate e presenti nella sitemap del sito.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تحديث قائمة عناوين url";
                    txtts4="بالنقر على رابط  تحديث قائمة url  ، يمكنك إضافة كافة الصفحات غير المدرجة والموجودة في خريطة موقع الموقع إلى قائمة عناوين url.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="URL-Liste wird aktualisiert";
                    txtts4="Durch Klicken auf den Link \"URL-Liste aktualisieren\" können Sie alle Seiten, die nicht aufgeführt und in der Sitemap der Site vorhanden sind, zur URL-Liste hinzufügen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Actualizando lista de URL";
                    txtts4="Al hacer clic en el enlace \"actualizar lista de URL\" puede agregar a la lista de URL todas las páginas que no aparecen en la lista y que están presentes en el mapa del sitio del sitio.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Mise à jour de la liste d'URL";
                    txtts4="En cliquant sur le lien \"mettre à jour la liste des url\" vous pouvez ajouter toutes les pages non listées et présentes dans le plan du site du site à la liste des url.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="यूआरएल सूची अद्यतन कर रहा है";
                    txtts4="\"अपडेट यूआरएल सूची\" लिंक पर क्लिक करके आप साइट के साइटमैप में सूचीबद्ध नहीं और मौजूद सभी पेजों को यूआरएल सूची में जोड़ सकते हैं।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="URLリストを更新中";
                    txtts4="「URL リストの更新」リンクをクリックすると、サイトのサイトマップにリストされていないすべてのページを URL リストに追加できます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Aktualizowanie listy adresów URL";
                    txtts4="Klikając łącze \"zaktualizuj listę adresów URL\", możesz dodać do listy adresów URL wszystkie strony niewymienione i obecne w mapie witryny.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Atualizando lista de urls";
                    txtts4="Ao clicar no link \"atualizar lista de urls\" você pode adicionar todas as páginas não listadas e presentes no mapa do site à lista de urls.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Обновление списка URL-адресов";
                    txtts4="Нажав на ссылку \"обновить список URL-адресов\", вы можете добавить все страницы, не перечисленные и присутствующие в карте сайта, в список URL-адресов.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="更新网址列表";
                    txtts4="通过单击\"更新 url 列表\"链接，您可以将站点站点地图中未列出和存在的所有页面添加到 url 列表。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="מעדכן רשימת כתובות אתרים";
                    txtts4="על ידי לחיצה על הקישור -עדכן רשימת כתובות אתרים- תוכלו להוסיף את כל הדפים שאינם רשומים ונוכחים במפת האתר לרשימת הכתובות.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Updating url list";
                    txtts4="strepitando in indice url\" paginas omnes paginas non recensitas et praesentes addere potes in situ ad indicem url";
                }else{
                    txtts3="Updating url list";
                    txtts4="By clicking the \"update url list\" link you can add all the pages not listed and present in the site's sitemap to the url list.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 1/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts4\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts1')){
                    document.getElementById('guideboxts1').className="link_loader_toppersystem guidebox_selected_ts";
                    document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem guidebox_selected_ts";
                    document.getElementById("guideboxts1").focus();
                }               
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 2){
                if(hreflang_toppersystem == "it"){
                    txtts3="Selezione delle pagine da ottimizzare";
                    txtts4="Spuntando uno o più campi checkbox è possibile selezionare le pagine che desideri ottimizzare.";
                    txtts5="Cliccando il simbolo [&rarr;] sarai rediretto verso la url corrispondente per ottimizzare la pagina in modo ottimale.";
                    txtts6="Importante:";
                    txtts7="in caso la url corrisponda a una pagina di carrello, di pagamento, di white list ecc consigliamo di verificare dopo essere stata ottimizzata il corretto funzionamento. In caso di problemi ti informiamo che la ottimizzazione della pagina potrà essere rimossa cliccando su [&cross;] che compare in corrispondenza di ogni pagina ottimizzata.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تحديد الصفحات لتحسينها";
                    txtts4="من خلال تحديد حقل واحد أو أكثر في خانة الاختيار ، يمكنك تحديد الصفحات التي تريد تحسينها.";
                    txtts5="بالنقر فوق الرمز [& rarr؛] ستتم إعادة توجيهك إلى عنوان url المقابل لتحسين الصفحة على النحو الأمثل.";
                    txtts6="مهم:";
                    txtts7="إذا كان عنوان url يتوافق مع صفحة عربة التسوق ، أو صفحة الدفع ، أو صفحة القائمة البيضاء ، وما إلى ذلك ، فإننا نوصي بالتحقق من أنها تعمل بشكل صحيح بعد تحسينها. في حالة حدوث مشاكل ، نعلمك أنه يمكن إزالة تحسين الصفحة بالنقر فوق [&cross;] الذي يظهر في كل صفحة محسّنة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Auswahl der zu optimierenden Seiten";
                    txtts4="Durch Aktivieren eines oder mehrerer Kontrollkästchenfelder können Sie die Seiten auswählen, die Sie optimieren möchten.";
                    txtts5="Durch Klicken auf das [&rarr;]-Symbol werden Sie zur entsprechenden URL weitergeleitet, um die Seite optimal zu optimieren.";
                    txtts6="Wichtig:";
                    txtts7="Wenn die URL einer Warenkorbseite, Zahlungsseite, Whitelist-Seite usw. entspricht, empfehlen wir, nach der Optimierung zu überprüfen, ob sie ordnungsgemäß funktioniert. Bei Problemen informieren wir Sie darüber, dass die Seitenoptimierung entfernt werden kann, indem Sie auf [&cross;] klicken, das auf jeder optimierten Seite erscheint.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Selección de páginas a optimizar";
                    txtts4="Al marcar uno o más campos de casilla de verificación, puede seleccionar las páginas que desea optimizar.";
                    txtts5="Al hacer clic en el símbolo [&rarr;], será redirigido a la URL correspondiente para optimizar la página de manera óptima.";
                    txtts6="Importante:";
                    txtts7="si la url corresponde a una página de carrito, página de pago, página de lista blanca, etc., recomendamos revisar que funcione correctamente después de optimizarla. En caso de problemas, le informamos que la optimización de la página se puede eliminar haciendo clic en [&cross;] que aparece en cada página optimizada.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Sélection des pages à optimiser";
                    txtts4="En cochant un ou plusieurs champs de case à cocher, vous pouvez sélectionner les pages que vous souhaitez optimiser.";
                    txtts5="En cliquant sur le symbole [&rarr;] vous serez redirigé vers l'url correspondante pour optimiser la page de manière optimale.";
                    txtts6="Important:";
                    txtts7="si l'url correspond à une page de panier, page de paiement, page de liste blanche, etc., nous vous conseillons de vérifier son bon fonctionnement après optimisation. En cas de problème, nous vous informons que l'optimisation de la page peut être supprimée en cliquant sur [&cross;] qui apparaît sur chaque page optimisée.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="अनुकूलन हेतु पृष्ठों का चयन";
                    txtts4="एक या अधिक चेकबॉक्स फ़ील्ड पर टिक करके आप उन पृष्ठों का चयन कर सकते हैं जिन्हें आप अनुकूलित करना चाहते हैं।";
                    txtts5="[&rarr;] प्रतीक पर क्लिक करके आपको पृष्ठ को सर्वोत्तम रूप से अनुकूलित करने के लिए संबंधित यूआरएल पर पुनः निर्देशित किया जाएगा।";
                    txtts6="महत्वपूर्ण:";
                    txtts7="यदि यूआरएल कार्ट पेज, भुगतान पेज, श्वेत सूची पेज इत्यादि से मेल खाता है, तो हम यह जांचने की सलाह देते हैं कि अनुकूलित होने के बाद यह सही ढंग से काम करता है या नहीं। समस्याओं के मामले में, हम आपको सूचित करते हैं कि पृष्ठ अनुकूलन को [&cross;] पर क्लिक करके हटाया जा सकता है जो प्रत्येक अनुकूलित पृष्ठ पर दिखाई देता है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="最適化するページの選択";
                    txtts4="1 つ以上のチェックボックス フィールドにチェックを入れることで、最適化するページを選択できます。";
                    txtts5="[&rarr;] 記号をクリックすると、ページを最適化するために対応する URL にリダイレクトされます。";
                    txtts6="重要：";
                    txtts7="URLがカートページ、支払いページ、ホワイトリストページなどに該当する場合は、最適化後に正しく動作することを確認することをお勧めします。 問題が発生した場合は、最適化された各ページに表示される [&cross;] をクリックすると、ページの最適化を削除できることをお知らせします。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Wybór stron do optymalizacji";
                    txtts4="Zaznaczając jedno lub więcej pól wyboru, możesz wybrać strony, które chcesz zoptymalizować.";
                    txtts5="Kliknięcie symbolu [&rarr;] spowoduje przekierowanie do odpowiedniego adresu URL w celu optymalnej optymalizacji strony.";
                    txtts6="Ważny:";
                    txtts7="jeśli url odpowiada stronie koszyka, stronie płatności, białej liście itp., zalecamy sprawdzenie, czy po optymalizacji działa poprawnie. W przypadku problemów informujemy, że optymalizację strony można usunąć, klikając na [&cross;], który pojawia się na każdej zoptymalizowanej stronie.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Seleção de páginas para otimizar";
                    txtts4="Ao marcar uma ou mais caixas de seleção, você pode selecionar as páginas que deseja otimizar.";
                    txtts5="Ao clicar no símbolo [&rarr;], você será redirecionado para a url correspondente para otimizar a página de maneira otimizada.";
                    txtts6="Importante:";
                    txtts7="se a url corresponder a uma página de carrinho, página de pagamento, página de lista branca, etc., recomendamos verificar se funciona corretamente após a otimização. Em caso de problemas, informamos que a otimização da página pode ser removida clicando em [&cross;] que aparece em cada página otimizada.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Выбор страниц для оптимизации";
                    txtts4="Установив галочку в одном или нескольких полях, вы можете выбрать страницы, которые хотите оптимизировать.";
                    txtts5="Нажав на символ [&rarr;], вы будете перенаправлены на соответствующий URL-адрес для оптимальной оптимизации страницы.";
                    txtts6="Важный:";
                    txtts7="если URL-адрес соответствует странице корзины, странице оплаты, странице белого списка и т. д., мы рекомендуем проверить его корректную работу после оптимизации. В случае возникновения проблем сообщаем вам, что оптимизацию страницы можно удалить, нажав на [&cross;], который появляется на каждой оптимизированной странице.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="选择要优化的页面";
                    txtts4="通过勾选一个或多个复选框字段，您可以选择要优化的页面。";
                    txtts5="通过单击 [&rarr;] 符号，您将被重定向到相应的 URL 以优化页面。";
                    txtts6="重要的：";
                    txtts7="如果url对应的是购物车页面、支付页面、白名单页面等，建议优化后检查是否正常。 如果出现问题，我们通知您可以通过单击每个优化页面上显示的 [&cross;] 来删除页面优化。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="בחירת דפים לאופטימיזציה";
                    txtts4="על ידי סימון שדה אחד או יותר של תיבת סימון תוכל לבחור את הדפים שברצונך לבצע אופטימיזציה.";
                    txtts5="על ידי לחיצה על הסמל [&rarr;] תופנה לכתובת האתר המתאימה כדי לייעל את הדף בצורה מיטבית.";
                    txtts6="חָשׁוּב:";
                    txtts7="אם כתובת האתר מתאימה לדף עגלת קניות, דף תשלום, דף רשימה לבנה וכו', אנו ממליצים לבדוק שהיא פועלת כהלכה לאחר ביצוע אופטימיזציה. במקרה של בעיות, אנו מודיעים לך שניתן להסיר את אופטימיזציית העמוד על ידי לחיצה על [&cross;] המופיע בכל עמוד שעבר אופטימיזציה.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Selection paginarum ad optimize";
                    txtts4="utilatate unum vel plures schedularum agrorum paginas quas vis optimize eligere potes";
                    txtts5="Strepitando [&rarr;] symbolum redirectum eris ad URL correspondentem ad optimam paginam optimize.";
                    txtts6="Maximus:";
                    txtts7="si URL paginae cartulae, paginae solutionis, paginae albae, etc. In casu quaestionum, tibi notificamus paginam optimiizationis strepitando in [&cross;] amoveri posse, quae in unaquaque pagina optimized apparet.";
                }else{
                    txtts3="Selection of pages to optimize";
                    txtts4="By ticking one or more checkbox fields you can select the pages you want to optimize.";
                    txtts5="By clicking the [&rarr;] symbol you will be redirected to the corresponding url to optimize the page optimally.";
                    txtts6="Important:";
                    txtts7="if the url corresponds to a cart page, payment page, white list page, etc., we recommend checking that it works correctly after being optimized. In case of problems, we inform you that the page optimization can be removed by clicking on [&cross;] which appears on each optimized page.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 2/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>" + txtts5 + "<br><br><strong>" + txtts6 + "</strong><br>" + txtts7 + "<div id=\"index_guide_ts5\">&nbsp;</div></div>";
                }

                if(document.getElementById('nmaxcanonical_toppersystem')){
                    for(i=0;i<=parseFloat(document.getElementById('nmaxcanonical_toppersystem').value);i++){ 
                        if(document.getElementById("canonical_toppersystem" + i.toString())){
                            if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                                document.getElementById("check_canonical_toppersystem_send" + i.toString()).className="guidebox_checkbox_selected_ts";							    
                            }
                        }
                    }
                }

                if(document.getElementById("checkurl_mode_ts")){
                    if(parseFloat(document.getElementById("checkurl_mode_ts").value) == "0"){    
                        document.getElementById("guideboxts2").focus();
                    }
                    document.getElementById("checkurl_mode_ts").value="0";
                }

                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 3){
                if(hreflang_toppersystem == "it"){
                    txtts3="Impostazione della lingua";
                    txtts4="La dichiarazione della lingua deve corrispondere alle pagine selezionate che desideri ottimizzare in modo da includerla correttamente nel codice sorgente.";
                    txtts5="In caso di sito multilingua seleziona e ottimizza una lista di url per ogni lingua.";
                    txtts6="Es: it-IT";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="إعداد اللغة";
                    txtts4="يجب أن يتطابق إعلان اللغة مع الصفحات المحددة التي تريد تحسينها من أجل تضمينها بشكل صحيح في التعليمات البرمجية المصدر."; 
                    txtts5="إذا كان الموقع متعدد اللغات ، فحدد قائمة عناوين url لكل لغة وقم بتحسينها.";
                    txtts6="مثال: ar-AR";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Spracheinstellung";
                    txtts4="Die Sprachdeklaration muss mit den ausgewählten Seiten übereinstimmen, die Sie optimieren möchten, um sie korrekt in den Quellcode einzubinden.";
                    txtts5="Wenn die Website mehrsprachig ist, wählen Sie eine URL-Liste für jede Sprache aus und optimieren Sie sie.";
                    txtts6="Beispiel: de-DE";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Configuración de idioma";
                    txtts4="La declaración del idioma debe coincidir con las páginas seleccionadas que desea optimizar para poder incluirlo correctamente en el código fuente.";
                    txtts5="Si el sitio es multilingüe, seleccione y optimice una lista de URL para cada idioma.";
                    txtts6="Ej: es-ES";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Paramètre de langue";
                    txtts4="La déclaration de langue doit correspondre aux pages sélectionnées que vous souhaitez optimiser afin de l'inclure correctement dans le code source.";
                    txtts5="Si le site est multilingue, sélectionner et optimiser une liste d'url pour chaque langue.";
                    txtts6="Ex: fr-FR";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="भाषा सेटिंग";
                    txtts4="स्रोत कोड में इसे सही ढंग से शामिल करने के लिए भाषा घोषणा को उन चयनित पृष्ठों से मेल खाना चाहिए जिन्हें आप अनुकूलित करना चाहते हैं।";
                    txtts5="यदि साइट बहुभाषी है, तो प्रत्येक भाषा के लिए यूआरएल की एक सूची चुनें और अनुकूलित करें।";
                    txtts6="Ex: hi-IN";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="言語設定";
                    txtts4="言語宣言をソース コードに正しく含めるには、最適化する選択したページと言語宣言が一致する必要があります。";
                    txtts5="サイトが多言語の場合は、言語ごとに URL のリストを選択して最適化します。";
                    txtts6="例：ja-JP";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Ustawienie języka";
                    txtts4="Deklaracja języka musi pasować do wybranych stron, które chcesz zoptymalizować, aby poprawnie umieścić ją w kodzie źródłowym.";
                    txtts5="Jeśli witryna jest wielojęzyczna, wybierz i zoptymalizuj listę adresów URL dla każdego języka.";
                    txtts6="Np: pl-PL";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Configuração de idioma";
                    txtts4="A declaração de idioma deve corresponder às páginas selecionadas que você deseja otimizar para incluí-lo corretamente no código-fonte.";
                    txtts5="Se o site for multilíngue, selecione e otimize uma lista de url para cada idioma.";
                    txtts6="Ex: pt-BR";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Настройка языка";
                    txtts4="Объявление языка должно соответствовать выбранным страницам, которые вы хотите оптимизировать, чтобы правильно включить их в исходный код.";
                    txtts5="Если сайт многоязычный, выберите и оптимизируйте список URL-адресов для каждого языка.";
                    txtts6="Пример: ru-RU";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="语言设置";
                    txtts4="语言声明必须与您要优化的所选页面相匹配，才能将其正确包含在源代码中。";
                    txtts5="如果网站是多语言的，请选择并优化每种语言的 url 列表。";
                    txtts6="例如：zh-CN";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="הגדרת שפה";
                    txtts4="הצהרת השפה חייבת להתאים לדפים הנבחרים שברצונכם לבצע אופטימיזציה כדי לכלול אותו כהלכה בקוד המקור.";
                    txtts5="אם האתר הוא רב לשוני, בחר ובצע אופטימיזציה של רשימה של כתובות אתרים עבור כל שפה.";
                    txtts6="שפת: he-IL";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Language setting";
                    txtts4="Lingua declaratio paginas selectas inserere debet ut optimize velis ut eam recte in fonte codice includas.";
                    txtts5="Si situs multilingui est, elenchum domicilii pro unaquaque lingua elige et optimize";
                    txtts6="Ex: la-VA";
                }else{
                    txtts3="Language setting";
                    txtts4="The language declaration must match the selected pages you want to optimize in order to include it correctly in the source code.";
                    txtts5="If the site is multilingual, select and optimize a list of url for each language.";
                    txtts6="Ex: en-GB";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 3/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><strong>" + txtts6 + "</strong><br>" + txtts5 + "<div id=\"index_guide_ts6\">&nbsp;</div></div>";
                }
                if(document.getElementById('language_toppersystem_send')){
                    document.getElementById('language_toppersystem_send').className="inputform_toppersystem guidebox_checkbox_selected_ts";
                    document.getElementById("language_toppersystem_send").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 4){
                if(hreflang_toppersystem == "it"){
                    txtts3="Parola chiave principale";
                    txtts4="Dichiarando la parola chiave principale a cui desideri avere maggiore visibilità sui Motori di Ricerca aumenti le probabilità di successo.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="الكلمة الأساسية الرئيسية";
                    txtts4="من خلال إعلان الكلمة الرئيسية الرئيسية ، فإنك تريد الحصول على مزيد من الرؤية على محركات البحث ، فإنك تزيد من فرص النجاح.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Hauptschlüsselwort";
                    txtts4="Durch die Angabe des Hauptschlüsselworts, mit dem Sie mehr Sichtbarkeit in Suchmaschinen erzielen möchten, erhöhen Sie die Erfolgschancen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Palabra clave principal";
                    txtts4="Al declarar la palabra clave principal que desea tener más visibilidad en los motores de búsqueda, aumenta las posibilidades de éxito.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Mot-clé principal";
                    txtts4="En déclarant le mot clé principal vous souhaitez avoir plus de visibilité sur les moteurs de recherche vous augmentez les chances de succès.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="मुख्य कीवर्ड";
                    txtts4="उस मुख्य कीवर्ड की घोषणा करके जिसे आप खोज इंजन पर अधिक दृश्यता देना चाहते हैं, आपकी सफलता की संभावनाएँ बढ़ जाती हैं।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="メインキーワード";
                    txtts4="検索エンジンでの露出を増やしたいメインキーワードを宣言すると、成功の可能性が高まります。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Główne słowo kluczowe";
                    txtts4="Deklarując główne słowo kluczowe, które chcesz zwiększyć widoczność w wyszukiwarkach, zwiększasz szanse na sukces.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Palavra-chave principal";
                    txtts4="Ao declarar a palavra-chave principal que você deseja ter mais visibilidade nos buscadores você aumenta as chances de sucesso.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Основное ключевое слово";
                    txtts4="Объявляя основное ключевое слово, которое вы хотите сделать более заметным в поисковых системах, вы увеличиваете шансы на успех.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="主关键字";
                    txtts4="通过声明您希望在搜索引擎上获得更多可见性的主要关键字，您可以增加成功的机会。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="מילת מפתח עיקרית";
                    txtts4="על ידי הצהרת מילת המפתח העיקרית אתה רוצה לקבל יותר נראות במנועי חיפוש אתה מגדיל את סיכויי ההצלחה.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Main keyword";
                    txtts4="Per keyword principale vis plus visibilitatis habere vis in Engines Quaerere casus prosperitatis auges";
                }else{
                    txtts3="Main keyword";
                    txtts4="By declaring the main keyword you want to have more visibility on Search Engines you increase the chances of success.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 4/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts7\">&nbsp;</div></div>";
                }
                if(document.getElementById('keyword_toppersystem_send')){
                    document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem guidebox_checkbox_selected_ts";
                    document.getElementById("keyword_toppersystem_send").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 5){
                if(hreflang_toppersystem == "it"){
                    txtts3="Livello di ottimizzazione delle immagini";
                    txtts4="Selezionando il livello delle immagini da ottimizzare tra intermedia o avanzata saranno ridimensionate nativamente secondo il dispositivo utilizzato e convertite nei formati webp e jp2. Le immagini possono essere ottimizzate al livello di compressione preferito. Selezionando la modalità di visualizzazione delay saranno rendirizzate alla fine dei processi di caricamento della pagina.";
                    txtts5="Maggiori approfondimenti sono descritti cliccando i link presenti nel pannello di controllo.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="مستوى تحسين الصورة"; 
                    txtts4="من خلال تحديد مستوى الصور للتحسين بين المستوى المتوسط أو المتقدم ، سيتم تغيير حجمها محليًا وفقًا للجهاز المستخدم وتحويلها إلى تنسيقات webp و jp2. يمكن تحسين الصور إلى مستوى الضغط المفضل لديك. ومن خلال تحديد وضع العرض المؤجل، سيتم عرضها في نهاية عمليات تحميل الصفحة."; 
                    txtts5="مزيد من التفاصيل موصوفة من خلال النقر على الروابط في لوحة التحكم.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Bildoptimierungsstufe";
                    txtts4="Durch Auswahl der zu optimierenden Bildstufe zwischen Mittelstufe und Fortgeschritten wird die Größe nativ entsprechend dem verwendeten Gerät angepasst und in die Formate WebP und JP2 konvertiert. Bilder können auf Ihre bevorzugte Komprimierungsstufe optimiert werden. Durch Auswahl des Verzögerungsanzeigemodus werden sie am Ende des Seitenladevorgangs gerendert.";
                    txtts5="Weitere Details werden durch Klicken auf die Links im Kontrollfeld beschrieben.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Nivel de optimización de la imagen";
                    txtts4="Al seleccionar el nivel de las imágenes a optimizar entre intermedio o avanzado, se redimensionarán de forma nativa según el dispositivo utilizado y se convertirán a formatos webp y jp2. Las imágenes se pueden optimizar a su nivel de compresión preferido. Al seleccionar el modo de visualización retrasada, se representarán al final de los procesos de carga de la página.";
                    txtts5="Más detalles se describen haciendo clic en los enlaces en el panel de control.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Niveau d'optimisation de l'image";
                    txtts4="En sélectionnant le niveau des images à optimiser entre intermédiaire ou avancé elles seront redimensionnées nativement en fonction de l'appareil utilisé et converties aux formats webp et jp2. Les images peuvent être optimisées selon votre niveau de compression préféré. En sélectionnant le mode d'affichage différé, ils seront rendus à la fin des processus de chargement des pages.";
                    txtts5="Plus de détails sont décrits en cliquant sur les liens dans le panneau de contrôle.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="छवि अनुकूलन स्तर";
                    txtts4="मध्यवर्ती या उन्नत के बीच अनुकूलित करने के लिए छवियों के स्तर का चयन करके उन्हें उपयोग किए गए डिवाइस के अनुसार मूल रूप से आकार दिया जाएगा और वेबपी और जेपी2 प्रारूपों में परिवर्तित किया जाएगा। छवियों को आपके पसंदीदा संपीड़न स्तर के अनुसार अनुकूलित किया जा सकता है। विलंब प्रदर्शन मोड का चयन करके उन्हें पृष्ठ लोडिंग प्रक्रियाओं के अंत में प्रस्तुत किया जाएगा।";
                    txtts5="नियंत्रण कक्ष में लिंक पर क्लिक करके अधिक विवरण वर्णित हैं।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="画像の最適化レベル";
                    txtts4="中級または上級の間で最適化する画像のレベルを選択すると、使用するデバイスに応じてネイティブにサイズが変更され、webp および jp2 形式に変換されます。 画像は好みの圧縮レベルに最適化できます。 遅延表示モードを選択すると、ページ読み込みプロセスの最後に表示されます。";
                    txtts5="コントロール パネルのリンクをクリックすると詳細が説明されます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Poziom optymalizacji obrazu";
                    txtts4="Po wybraniu poziomu obrazów do optymalizacji między średniozaawansowanym a zaawansowanym, ich rozmiar zostanie natywnie zmieniony zgodnie z używanym urządzeniem i przekonwertowany na formaty webp i jp2. Obrazy można optymalizować do preferowanego poziomu kompresji. Wybierając tryb wyświetlania z opóźnieniem, będą one renderowane na końcu procesów ładowania strony.";
                    txtts5="Więcej szczegółów można znaleźć po kliknięciu łączy w panelu sterowania.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Nível de otimização da imagem";
                    txtts4="Ao selecionar o nível das imagens para otimizar entre intermediário ou avançado elas serão redimensionadas nativamente de acordo com o dispositivo utilizado e convertidas nos formatos webp e jp2. As imagens podem ser otimizadas para o nível de compactação de sua preferência. Ao selecionar o modo de exibição de atraso eles serão renderizados ao final dos processos de carregamento da página.";
                    txtts5="Mais detalhes são descritos clicando nos links no painel de controle.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Уровень оптимизации изображения";
                    txtts4="Выбирая уровень изображений для оптимизации между средним или продвинутым, они будут изменены в исходном размере в соответствии с используемым устройством и преобразованы в форматы webp и jp2. Изображения можно оптимизировать до предпочитаемого вами уровня сжатия. При выборе режима отображения с задержкой они будут отображаться в конце процессов загрузки страницы.";
                    txtts5="Более подробно описано по ссылкам в панели управления.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="图像优化级别";
                    txtts4="通过选择要在中级或高级之间进行优化的图像级别，它们将根据所使用的设备本地调整大小并转换为 webp 和 jp2 格式。 图像可以优化到您首选的压缩级别。 通过选择延迟显示模式，它们将在页面加载过程结束时呈现。";
                    txtts5="点击控制面板中的链接可了解更多详细信息。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="רמת אופטימיזציה של תמונה";
                    txtts4="על ידי בחירת רמת התמונות לאופטימיזציה בין בינונית או מתקדמת הן ישונו באופן מקורי בהתאם למכשיר שבו נעשה שימוש ויומרו לפורמטים webp ו-jp2. ניתן לבצע אופטימיזציה של תמונות לרמת הדחיסה המועדפת עליך. על ידי בחירה במצב תצוגה עיכוב הם יוצגו בסוף תהליכי טעינת העמוד.";
                    txtts5="פרטים נוספים מתוארים על ידי לחיצה על הקישורים בלוח הבקרה.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Image optimization level";
                    txtts4="Seligendis imaginum planitiem ad optimize inter medium vel progressum, sponte resecari erunt secundum fabricam adhibitam et in webp et jp2 formas convertendas. Imagines optimized esse possunt ad gradum compressionis praelatae. Modum morae eligentes, in fine paginae processuum onerantium reddentur.";
                    txtts5="Mores details are described by clicking on the links in the control panel";
                }else{
                    txtts3="Image optimization level";
                    txtts4="By selecting the level of the images to optimize between intermediate or advanced they will be resized natively according to the device used and converted into webp and jp2 formats. Images can be optimized to your preferred compression level. By selecting the delay display mode they will be rendered at the end of the page loading processes.";
                    txtts5="More details are described by clicking on the links in the control panel.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 5/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br>" + txtts5 + "<div id=\"index_guide_ts8\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts4')){
                    document.getElementById('guideboxts4').className="guidebox_selected_ts";
                }
                if(document.getElementById('guideboxts3')){
                    document.getElementById("guideboxts3").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 6){
                if(hreflang_toppersystem == "it"){
                    txtts3="Ottimizzazione risorse Javascript";
                    txtts4="Durante la fase di ottimizzazione delle pagine del sito i file Javascript interni sono minimizzati nativamente e possono essere richiamati nei codici sorgenti in modalità automatic, preload o defer. Inoltre è possibile applicare una funzione che ritarda il caricamento e esecuzione delle risorse a vantaggio dei tempi di caricamento della pagina.";
                    txtts5="In caso sia selezionata la modalità defer o applicata la funzionalità di delay è raccomandabile verificare la compatibilità con il template dopo aver ottimizzato le pagine del sito.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تحسين موارد جافا سكريبت";
                    txtts4="أثناء مرحلة تحسين صفحات الموقع، يتم تصغير ملفات Javascript الداخلية بشكل أصلي ويمكن استدعاؤها في أكواد المصدر في الوضع التلقائي أو التحميل المسبق أو التأجيل. علاوة على ذلك، من الممكن تطبيق وظيفة تؤخر تحميل الموارد وتنفيذها لصالح أوقات تحميل الصفحة.";
                    txtts5="إذا تم تحديد وضع التأجيل أو تم تطبيق وظيفة التأخير، فمن المستحسن التحقق من التوافق مع القالب بعد تحسين صفحات الموقع.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Javascript-Ressourcen optimieren";
                    txtts4="Während der Optimierungsphase der Site-Seiten werden die internen Javascript-Dateien nativ minimiert und können im automatischen, Vorlade- oder Verzögerungsmodus in den Quellcodes abgerufen werden. Darüber hinaus ist es möglich, eine Funktion anzuwenden, die das Laden und Ausführen von Ressourcen zugunsten der Seitenladezeiten verzögert.";
                    txtts5="Wenn der Verzögerungsmodus ausgewählt oder die Verzögerungsfunktion angewendet wird, wird empfohlen, nach der Optimierung der Site-Seiten die Kompatibilität mit der Vorlage zu überprüfen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Optimizar los recursos de Javascript";
                    txtts4="Durante la fase de optimización de las páginas del sitio, los archivos Javascript internos se minimizan de forma nativa y se pueden recuperar en los códigos fuente en modo automático, precargado o aplazado. Además, es posible aplicar una función que retrase la carga y ejecución de recursos en beneficio de los tiempos de carga de la página.";
                    txtts5="Si se selecciona el modo de aplazamiento o se aplica la funcionalidad de retraso, se recomienda verificar la compatibilidad con la plantilla después de optimizar las páginas del sitio.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Optimiser les ressources Javascript";
                    txtts4="Lors de la phase d'optimisation des pages du site, les fichiers Javascript internes sont nativement minimisés et peuvent être rappelés dans les codes sources en mode automatique, préchargement ou différé. De plus, il est possible d'appliquer une fonction qui retarde le chargement et l'exécution des ressources au profit des temps de chargement des pages.";
                    txtts5="Si le mode différé est sélectionné ou si la fonctionnalité de délai est appliquée, il est recommandé de vérifier la compatibilité avec le modèle après avoir optimisé les pages du site.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="जावास्क्रिप्ट संसाधनों को अनुकूलित करें";
                    txtts4="साइट पृष्ठों के अनुकूलन चरण के दौरान, आंतरिक जावास्क्रिप्ट फ़ाइलों को मूल रूप से छोटा किया जाता है और स्वचालित, प्रीलोड या स्थगित मोड में स्रोत कोड में वापस बुलाया जा सकता है। इसके अलावा, ऐसे फ़ंक्शन को लागू करना संभव है जो पेज लोडिंग समय के लाभ के लिए संसाधनों की लोडिंग और निष्पादन में देरी करता है।";
                    txtts5="यदि डिफ़र मोड का चयन किया गया है या विलंब कार्यक्षमता लागू की गई है, तो साइट पृष्ठों को अनुकूलित करने के बाद टेम्पलेट के साथ संगतता की जांच करने की अनुशंसा की जाती है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="JavaScript リソースの最適化";
                    txtts4="サイト ページの最適化フェーズ中に、内部 Javascript ファイルはネイティブに最小化され、自動、プリロード、または遅延モードでソース コード内で呼び出すことができます。 さらに、ページの読み込み時間を有利にするために、リソースの読み込みと実行を遅らせる機能を適用することもできます。";
                    txtts5="遅延モードが選択されている場合、または遅延機能が適用されている場合は、サイト ページを最適化した後、テンプレートとの互換性を確認することをお勧めします。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Optymalizuj zasoby Javascript";
                    txtts4="Podczas fazy optymalizacji stron witryny wewnętrzne pliki JavaScript są natywnie minimalizowane i można je przywołać w kodach źródłowych w trybie automatycznym, wstępnym ładowaniu lub opóźnionym. Ponadto możliwe jest zastosowanie funkcji opóźniającej ładowanie i wykonanie zasobów na korzyść czasu ładowania strony.";
                    txtts5="Jeżeli wybrany jest tryb odroczenia lub zastosowana jest funkcja opóźnienia, zaleca się sprawdzenie zgodności z szablonem po optymalizacji stron serwisu.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Otimizar Recursos Javascript";
                    txtts4="Durante a fase de otimização das páginas do site, os arquivos Javascript internos são minimizados nativamente e podem ser recuperados nos códigos-fonte em modo automático, pré-carregamento ou adiamento. Além disso, é possível aplicar uma função que atrasa o carregamento e a execução de recursos aproveitando o tempo de carregamento da página.";
                    txtts5="Se o modo de adiamento estiver selecionado ou a funcionalidade de atraso for aplicada, é recomendável verificar a compatibilidade com o modelo após otimizar as páginas do site.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Оптимизировать ресурсы Javascript";
                    txtts4="На этапе оптимизации страниц сайта внутренние файлы Javascript изначально сворачиваются и могут быть вызваны в исходных кодах в автоматическом режиме, в режиме предварительной загрузки или отсрочки. Кроме того, можно применить функцию, которая задерживает загрузку и выполнение ресурсов, чтобы сократить время загрузки страницы.";
                    txtts5="Если выбран режим отсрочки или применен функционал задержки, рекомендуется после оптимизации страниц сайта проверить совместимость с шаблоном.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="优化Javascript资源";
                    txtts4="在网站页面的优化阶段，内部 Javascript 文件会被本地最小化，并且可以自动、预加载或延迟模式在源代码中调用。 此外，可以应用延迟资源加载和执行的功能，以节省页面加载时间。";
                    txtts5="如果选择延迟模式或应用了延迟功能，建议优化站点页面后检查与模板的兼容性。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="בצע אופטימיזציה של משאבי Javascript";
                    txtts4="במהלך שלב האופטימיזציה של דפי האתר, קבצי ה-Javascript הפנימיים ממוזערים באופן טבעי וניתן להיזכר בהם בקודי המקור במצב אוטומטי, טעינה מוקדמת או דחייה. יתרה מזאת, ניתן ליישם פונקציה המעכבת את הטעינה והביצוע של משאבים לטובת זמני טעינת הדפים.";
                    txtts5="אם נבחר מצב הדחייה או הפעלת פונקציונליות ההשהיה, מומלץ לבדוק תאימות לתבנית לאחר ביצוע אופטימיזציה של דפי האתר.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Optimize Javascript Resources";
                    txtts4="Durante periodo optimization situs paginae, fasciculi Javascript interni in patria minimi sunt et revocari possunt in codicibus fons automati, preload vel differendi modum. Praeterea munus applicari potest, quod onerationem et executionem opum tardat ad commodum paginae temporis loading.";
                    txtts5="Si modus differendi seligitur vel applicatur functionis dilatio, suadetur compatibilitas cohibendae cum Formulario post optimizing paginas situs.";
                }else{
                    txtts3="Optimize Javascript Resources";
                    txtts4="During the optimization phase of the site pages, the internal Javascript files are natively minimized and can be recalled in the source codes in automatic, preload or defer mode. Furthermore, it is possible to apply a function that delays the loading and execution of resources to the advantage of page loading times.";
                    txtts5="If the defer mode is selected or the delay functionality is applied, it is recommended to check compatibility with the template after optimizing the site pages.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 6/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br>" + txtts5 + "<div id=\"index_guide_ts9\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts5')){
                    document.getElementById('guideboxts5').className="guidebox_selected_ts";
                    document.getElementById("guideboxts5").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 7){
                if(hreflang_toppersystem == "it"){
                    txtts3="Ottimizzazione delle risorse CSS";
                    txtts4="Durante la fase di ottimizzazione delle pagine del sito i file CSS interni sono minimizzati nativamente.";
                    txtts5="Tutti i file CSS, interni ed esterni, sono richiamati dai browser in modalità performante come indicato dalle best practices.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تحسين موارد CSS";
                    txtts4="أثناء تحسين صفحة الموقع ، يتم تصغير ملفات CSS الداخلية أصلاً.";
                    txtts5="يتم استدعاء جميع ملفات CSS ، الداخلية والخارجية ، بواسطة المستعرضات في وضع الأداء كما هو مبين في أفضل الممارسات.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="CSS-Ressourcen optimieren";
                    txtts4="Während der Seitenoptimierung der Website werden interne CSS-Dateien nativ minimiert.";
                    txtts5="Alle internen und externen CSS-Dateien werden von Browsern im Leistungsmodus aufgerufen, wie durch Best Practices angegeben.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Optimizando recursos CSS";
                    txtts4="Durante la optimización de la página del sitio, los archivos CSS internos se minimizan de forma nativa.";
                    txtts5="Todos los archivos CSS, internos y externos, son llamados por los navegadores en modo de rendimiento según lo indicado por las mejores prácticas.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Optimisation des ressources CSS";
                    txtts4="Pendant l'optimisation des pages du site, les fichiers CSS internes sont minifiés nativement.";
                    txtts5="Tous les fichiers CSS, internes et externes, sont appelés par les navigateurs en mode performance comme indiqué par les meilleures pratiques.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="सीएसएस संसाधनों का अनुकूलन";
                    txtts4="साइट पृष्ठ अनुकूलन के दौरान आंतरिक सीएसएस फाइलों को मूल रूप से छोटा किया जाता है।";
                    txtts5="सभी सीएसएस फ़ाइलें, आंतरिक और बाहरी, ब्राउज़र द्वारा सर्वोत्तम प्रथाओं के अनुसार प्रदर्शन मोड में कॉल की जाती हैं।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="CSS リソースの最適化";
                    txtts4="サイト ページの最適化中、内部 CSS ファイルはネイティブに縮小されます。";
                    txtts5="内部および外部のすべての CSS ファイルは、ベスト プラクティスで示されているパフォーマンス モードでブラウザによって呼び出されます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Optymalizacja zasobów CSS";
                    txtts4="Podczas optymalizacji strony witryny wewnętrzne pliki CSS są minimalizowane natywnie.";
                    txtts5="Wszystkie pliki CSS, wewnętrzne i zewnętrzne, są wywoływane przez przeglądarki w trybie wydajności, zgodnie z najlepszymi praktykami.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Otimizando recursos CSS";
                    txtts4="Durante a otimização da página do site, os arquivos CSS internos são minificados nativamente.";
                    txtts5="Todos os arquivos CSS, internos e externos, são chamados pelos navegadores em modo de desempenho conforme indicado pelas melhores práticas.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Оптимизация ресурсов CSS";
                    txtts4="Во время оптимизации страницы сайта внутренние CSS-файлы минимизируются изначально.";
                    txtts5="Все файлы CSS, внутренние и внешние, вызываются браузерами в режиме производительности, как указано в рекомендациях.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="优化 CSS 资源";
                    txtts4="在网站页面优化期间，内部 CSS 文件会原生缩小。";
                    txtts5="所有 CSS 文件，无论是内部还是外部，都由浏览器以性能模式调用，如最佳实践所示。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="אופטימיזציה של משאבי CSS";
                    txtts4="במהלך אופטימיזציה של דפי האתר קבצי CSS פנימיים מוקטנים באופן מקורי.";
                    txtts5="כל קובצי ה-CSS, פנימיים וחיצוניים, נקראים על ידי דפדפנים במצב ביצועים כפי שמצוין על ידי שיטות עבודה מומלצות.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Optimizing CSS resources";
                    txtts4="Per situs pagina optimization interna CSS lima in paterno minuuntur".
                    txtts5="Omnes fasciculi CSS, interni et externi, vocantur a navigatoribus in agendis modus, sicut per optimos usus demonstratur.";
                }else{
                    txtts3="Optimizing CSS resources";
                    txtts4="During site page optimization internal CSS files are minified natively.";
                    txtts5="All CSS files, internal and external, are called by browsers in performance mode as indicated by best practices.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 7/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br>" + txtts5 + "<div id=\"index_guide_ts10\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts6')){
                    document.getElementById('guideboxts6').className="guidebox_selected_ts";
                    document.getElementById("guideboxts6").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 8){
                if(hreflang_toppersystem == "it"){
                    txtts3="Dati salvati precedentemente";
                    txtts4="Durante le successive ottimizzazioni è possibile ripristinare le informazioni precedentemente salvate selezionando \"ripristina\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="البيانات المحفوظة مسبقًا";
                    txtts4="أثناء عمليات التحسين اللاحقة ، من الممكن استعادة المعلومات المحفوظة مسبقًا بتحديد  استعادة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Zuvor gespeicherte Daten";
                    txtts4="Bei späteren Optimierungen ist es möglich, zuvor gespeicherte Informationen wiederherzustellen, indem Sie \"Wiederherstellen\" auswählen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Datos guardados anteriormente";
                    txtts4="Durante las optimizaciones posteriores, es posible restaurar la información previamente guardada seleccionando \"restaurar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Données précédemment enregistrées";
                    txtts4="Lors des optimisations ultérieures, il est possible de restaurer les informations précédemment enregistrées en sélectionnant \"restaurer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="पहले से सहेजा गया डेटा";
                    txtts4="बाद के अनुकूलन के दौरान \"restore\" का चयन करके पहले से सहेजी गई जानकारी को पुनर्स्थापित करना संभव है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="以前に保存したデータ";
                    txtts4="後続の最適化中に、「復元」を選択すると、以前に保存した情報を復元できます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Wcześniej zapisane dane";
                    txtts4="Podczas kolejnych optymalizacji możliwe jest przywrócenie wcześniej zapisanych informacji poprzez wybranie \"przywróć\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Dados salvos anteriormente";
                    txtts4="Durante otimizações subseqüentes é possível restaurar informações salvas anteriormente selecionando \"restaurar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Ранее сохраненные данные";
                    txtts4="Во время последующих оптимизаций можно восстановить ранее сохраненную информацию, выбрав \"восстановить\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="之前保存的数据";
                    txtts4="在后续优化过程中，可以通过选择\"恢复\"来恢复以前保存的信息。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="נתונים שנשמרו בעבר";
                    txtts4="במהלך אופטימיזציות עוקבות ניתן לשחזר מידע שנשמר בעבר על ידי בחירת -שחזור-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Previous data servavit";
                    txtts4="In optimizations subsequentes, notitias antea servatas excerpendo \"restituere\", restituere potest";
                }else{
                    txtts3="Previously saved data";
                    txtts4="During subsequent optimizations it is possible to restore previously saved information by selecting \"restore\".";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 8/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts11\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts7')){
                    document.getElementById('guideboxts7').className="guidebox_selected_ts";
                    document.getElementById("guideboxts7").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 9){
                if(hreflang_toppersystem == "it"){
                    txtts3="Termini e condizioni";
                    txtts4="Spuntando il campo checkbox accetti i termini e condizioni del servizio erogato.";
                    txtts5="Ci raccomandiamo di verificare eventuali aggiornamenti cliccando sul link \"termini e condizioni\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="الشروط والأحكام";
                    txtts4="من خلال تحديد حقل مربع الاختيار ، فإنك تقبل شروط وأحكام الخدمة المقدمة.";
                    txtts5="نوصي بالتحقق من أي تحديثات بالنقر فوق الرابط  الشروط والأحكام.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Allgemeine Geschäftsbedingungen";
                    txtts4="Durch Aktivieren des Kontrollkästchens akzeptieren Sie die Allgemeinen Geschäftsbedingungen des bereitgestellten Dienstes.";
                    txtts5="Wir empfehlen Ihnen, nach Updates zu suchen, indem Sie auf den Link \"Allgemeine Geschäftsbedingungen\" klicken.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Términos y condiciones";
                    txtts4="Al marcar la casilla de verificación, acepta los términos y condiciones del servicio prestado.";
                    txtts5="Le recomendamos que busque actualizaciones haciendo clic en el enlace \"términos y condiciones\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Termes et conditions";
                    txtts4="En cochant le champ de la case à cocher, vous acceptez les termes et conditions du service fourni.";
                    txtts5="Nous vous recommandons de vérifier les mises à jour en cliquant sur le lien \"termes et conditions\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="नियम एवं शर्तें";
                    txtts4="चेकबॉक्स फ़ील्ड पर टिक करके आप प्रदान की गई सेवा के नियमों और शर्तों को स्वीकार करते हैं।";
                    txtts5="हम अनुशंसा करते हैं कि आप \"नियम और शर्तें\" लिंक पर क्लिक करके किसी भी अपडेट की जांच करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="利用規約";
                    txtts4="チェックボックスフィールドにチェックを入れると、提供されるサービスの利用規約に同意したことになります。";
                    txtts5="「利用規約」リンクをクリックして、更新があるかどうかを確認することをお勧めします。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Warunki";
                    txtts4="Zaznaczając pole wyboru, akceptujesz warunki świadczonej usługi.";
                    txtts5="Zalecamy sprawdzenie dostępności aktualizacji, klikając link \"warunki\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Termos e condições";
                    txtts4="Ao marcar a caixa de seleção, você aceita os termos e condições do serviço prestado.";
                    txtts5="Recomendamos que você verifique se há atualizações clicando no link \"termos e condições\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Положения и условия";
                    txtts4="Установив флажок в поле, вы принимаете условия предоставления услуги.";
                    txtts5="Мы рекомендуем проверять наличие обновлений, нажав на ссылку \"условия и положения\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="条款和条件";
                    txtts4="勾选复选框即表示您接受所提供服务的条款和条件。";
                    txtts5="我们建议您通过单击\"条款和条件\"链接来检查是否有任何更新。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="תנאים והגבלות";
                    txtts4="על ידי סימון שדה תיבת הסימון אתה מקבל את התנאים וההגבלות של השירות שניתן.";
                    txtts5="אנו ממליצים לבדוק אם יש עדכונים על ידי לחיצה על הקישור -תנאים והגבלות-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Terms and Conditions";
                    txtts4="Per ticking the box you accept the terms and conditions of service provided."
                    txtts5="Lorem commendamus ut quaslibet updates strepitando in ligamen leges condicionesque reprimas.";
                }else{
                    txtts3="Terms and conditions";
                    txtts4="By ticking the checkbox field you accept the terms and conditions of the service provided.";
                    txtts5="We recommend that you check for any updates by clicking on the \"terms and conditions\" link.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 9/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br>" + txtts5 + "<div id=\"index_guide_ts12\">&nbsp;</div></div>";
                }
                
                if(document.getElementById('check_privacy_toppersystem_send')){
                    if(document.getElementById('check_privacy_toppersystem_send').className == "border_red"){
                        document.getElementById('check_privacy_toppersystem_send').className="border_red guidebox_checkbox_selected_ts";
                    }else{
                        document.getElementById('check_privacy_toppersystem_send').className="guidebox_checkbox_selected_ts";
                    }

                    document.getElementById("check_privacy_toppersystem_send").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 10){
                if(hreflang_toppersystem == "it"){
                    txtts3="Ottimizzazione delle pagine";
                    txtts4="Cliccando su \"Invia\" le url precedentemente selezionate sono ottimizzate dai nostri server.";
                    txtts5="Nota bene:";
                    txtts6="le url ottimizzate sono contrassegnate da un simbolo verde (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) e da un simbolo [&cross;] che ti permette di eliminare la ottimizzazione e riportare la pagina allo stato originale.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تحسين الصفحات";
                    txtts4="بالنقر فوق  إرسال  ، يتم تحسين عناوين url المحددة مسبقًا بواسطة خوادمنا.";
                    txtts5="يرجى الملاحظة:";
                    txtts6="يتم تمييز عناوين url المحسّنة برمز أخضر (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) وبرمز [&cross;] يسمح لك بإلغاء التحسين وإعادة الصفحة إلى حالتها الأصلية.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Seiten optimieren";
                    txtts4="Durch Klicken auf \"Senden\" werden die zuvor ausgewählten URLs von unseren Servern optimiert.";
                    txtts5="Bitte beachten Sie:";
                    txtts6="Die optimierten URLs sind durch ein grünes Symbol (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) und durch ein Symbol [&cross;] gekennzeichnet, mit dem Sie die Optimierung entfernen und die Seite in ihren ursprünglichen Zustand zurückversetzen können.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Optimizando páginas";
                    txtts4="Al hacer clic en \"Enviar\", nuestros servidores optimizan las URL previamente seleccionadas.";
                    txtts5="Tenga en cuenta:";
                    txtts6="las urls optimizadas están marcadas con un símbolo verde (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) y con un símbolo [&cross;] que permite eliminar la optimización y devolver la página a su estado original.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Optimisation des pages";
                    txtts4="En cliquant sur \"Soumettre\" les urls précédemment sélectionnées sont optimisées par nos serveurs.";
                    txtts5="Veuillez noter:";
                    txtts6="les URL optimisées sont marquées par un symbole vert (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) et par un symbole [&cross;] qui vous permet d'éliminer l'optimisation et de remettre la page dans son état d'origine.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="पेजों को अनुकूलित करना";
                    txtts4="\"सबमिट\" पर क्लिक करने से पहले से चयनित यूआरएल हमारे सर्वर द्वारा अनुकूलित हो जाते हैं।";
                    txtts5="कृपया ध्यान दें:";
                    txtts6="अनुकूलित यूआरएल को एक हरे प्रतीक (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) और एक प्रतीक [&cross;] द्वारा चिह्नित किया जाता है जो आपको अनुकूलन को खत्म करने और पृष्ठ को उसकी मूल स्थिति में वापस लाने की अनुमति देता है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="ページの最適化";
                    txtts4="「送信」をクリックすると、以前に選択した URL がサーバーによって最適化されます。";
                    txtts5="ご注意ください：";
                    txtts6="最適化された URL は緑色のシンボル (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) とシンボル [&cross;] でマークされており、最適化を削除してページを元の状態に戻すことができます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Optymalizacja stron";
                    txtts4="Klikając \"Prześlij\" nasze serwery optymalizują wcześniej wybrane adresy URL.";
                    txtts5="Proszę zanotować:";
                    txtts6="zoptymalizowane adresy URL są oznaczone zielonym symbolem (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) oraz symbolem [&cross;], który umożliwia wyeliminowanie optymalizacji i przywrócenie strony do pierwotnego stanu.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Otimizando páginas";
                    txtts4="Ao clicar em \"Enviar\" as urls previamente selecionadas são otimizadas pelos nossos servidores.";
                    txtts5="Observe:";
                    txtts6="os urls otimizados são marcados por um símbolo verde (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) e por um símbolo [&cross;] que permite eliminar a otimização e retornar a página ao seu estado original.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Оптимизация страниц";
                    txtts4="При нажатии на \"Отправить\" ранее выбранные URL-адреса оптимизируются нашими серверами.";
                    txtts5="Пожалуйста, обрати внимание:";
                    txtts6="оптимизированные URL-адреса отмечены зеленым символом (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) и символом [&cross;], что позволяет устранить оптимизацию и вернуть страницу в исходное состояние.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="优化页面";
                    txtts4="通过点击\"提交\"，之前选择的网址将由我们的服务器进行优化。";
                    txtts5="请注意：";
                    txtts6="优化后的网址标有绿色符号 (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) 和符号 [&cross;]，它允许您消除优化并将页面返回到其原始状态。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="אופטימיזציה של דפים";
                    txtts4="על ידי לחיצה על -שלח- כתובות האתרים שנבחרו בעבר עוברות אופטימיזציה על ידי השרתים שלנו.";
                    txtts5="שימו לב:";
                    txtts6="כתובות האתרים האופטימליות מסומנות בסמל ירוק (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) ובסמל [&cross;] המאפשר לך לבטל את האופטימיזציה ולהחזיר את הדף למצבו המקורי.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Optimizing pages";
                    txtts4="Deprimendo in \"Invia\" antea delatae delatae a servientibus nostris optimized sunt.";
                    txtts5="Si vis, nota:";
                    txtts6="URLs optimized notantur signo viridi (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) et symbolo [&cross;] quo permittit ut optimiizationem tollere et paginam in statum pristinum reddere.";
                }else{
                    txtts3="Optimizing pages";
                    txtts4="By clicking on \"Send\" the previously selected urls are optimized by our servers.";
                    txtts5="Please note:";
                    txtts6="the optimized urls are marked by a green symbol (<span id=\"point_render_list_toppersystem2\" class=\"status_ok_point_all_ts\">&bull;</span>) and by a symbol [&cross;] which allows you to eliminate the optimization and return the page to its original state.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 10/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br><strong>" + txtts5 + "</strong><br>" + txtts6 + "<div id=\"index_guide_ts14\">&nbsp;</div></div>";
                }

                if(document.getElementById('go_all_toppersystem_send')){
                    document.getElementById('go_all_toppersystem_send').className="button-primary white_color_toppersystem guidebox_checkbox_selected_ts";
                }

                if(document.getElementById("sending_mode_ts")){
                    if(parseFloat(document.getElementById("sending_mode_ts").value) == "0"){    
                        document.getElementById("go_all_toppersystem_send").focus();
                    }
                }

                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 11){
                if(hreflang_toppersystem == "it"){
                    txtts3="Richiesta di assistenza tramite email";
                    txtts4="Cliccando il link \"@\" hai l'opportunità di richiedere assistenza tramite email al nostro servizio di assistenza dedicato support@toppersystem.com";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="طلب الدعم عبر البريد الإلكتروني";
                    txtts4="بالنقر فوق الرابط  @  ، لديك فرصة لطلب المساعدة عبر البريد الإلكتروني إلى خدمة المساعدة المخصصة لدينا support@toppersystem.com";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Support per E-Mail anfordern";
                    txtts4="Durch Klicken auf den Link \"@\" haben Sie die Möglichkeit, Hilfe per E-Mail an unseren speziellen Assistenzdienst support@toppersystem.com anzufordern";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Solicitar soporte por correo electrónico";
                    txtts4="Al hacer clic en el enlace \"@\" tiene la oportunidad de solicitar asistencia por correo electrónico a nuestro servicio de asistencia dedicado support@toppersystem.com";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Demande d'assistance par e-mail";
                    txtts4="En cliquant sur le lien \"@\" vous avez la possibilité de demander une assistance par e-mail à notre service d'assistance dédié support@toppersystem.com";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="ईमेल द्वारा समर्थन का अनुरोध करें";
                    txtts4="\"@\" लिंक पर क्लिक करके आपको हमारी समर्पित सहायता सेवा support@toppersystem.com पर ईमेल द्वारा सहायता का अनुरोध करने का अवसर मिलता है";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="電子メールでサポートをリクエスト";
                    txtts4="\"@\" リンクをクリックすると、専用のサポート サービス support@toppersystem.com に電子メールでサポートをリクエストできます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Poproś o wsparcie przez e-mail";
                    txtts4="Klikając łącze \"@\" możesz poprosić o pomoc e-mailem na nasz dedykowany serwis wsparcia support@toppersystem.com";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Solicitar suporte por e-mail";
                    txtts4="Ao clicar no link \"@\" você tem a oportunidade de solicitar assistência por e-mail para nosso serviço de assistência dedicado support@toppersystem.com";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Запросить поддержку по электронной почте";
                    txtts4="Нажав на ссылку \"@\", у вас есть возможность запросить помощь по электронной почте в нашу специальную службу поддержки support@toppersystem.com";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="通过电子邮件请求支持";
                    txtts4="通过单击\"@\"链接，您有机会通过电子邮件向我们的专用帮助服务 support@toppersystem.com 请求帮助";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="בקש תמיכה בדוא-ל";
                    txtts4="בלחיצה על הקישור -@- יש לכם הזדמנות לבקש סיוע בדוא-ל לשירות הסיוע הייעודי שלנו support@toppersystem.com";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Request support by email";
                    txtts4="Creando in \"@\" liga facultatem habes auxilium petendi per electronicam ad auxilium nostrum dedicatum servitium support@toppersystem.com";
                }else{
                    txtts3="Request support by email";
                    txtts4="By clicking the \"@\" link you have the opportunity to request assistance by email to our dedicated assistance service support@toppersystem.com";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 11/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "</div>";
                }
                if(document.getElementById('guideboxts8')){
                    document.getElementById('guideboxts8').className="guidebox_selected_ts";
                }
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 12){
                if(hreflang_toppersystem == "it"){
                    txtts3="Supporto anti-spam compatibile ASPMTS";
                    txtts4="Previene il sovraccarico del server in quanto blocca la navigazione e le richieste di risorse ai robot non autorizzati. E' possibile visualizzare l'elenco delle richieste bloccate e applicare eccezioni ai blocchi attraverso un intuitivo pannello di controllo che sarà descritto nelle successive fasi di questa guida.";
                    txtts5="L'attivazione del servizio è gratuita e descritta successivamente";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="دعم مكافحة البريد العشوائي المتوافق مع ASPMTS";
                    txtts4="يمنع التحميل الزائد للخادم لأنه يحظر التنقل وطلبات الموارد للروبوتات غير المصرح بها. يمكنك عرض قائمة الطلبات المحظورة وتطبيق استثناءات الحظر من خلال لوحة تحكم بديهية سيتم وصفها في الخطوات التالية من هذا الدليل.";
                    txtts5="تنشيط الخدمة مجاني وسيتم وصفه لاحقًا";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="ASPMTS-kompatible Anti-Spam-Unterstützung";
                    txtts4="Verhindert Serverüberlastung, da Navigations- und Ressourcenanfragen an nicht autorisierte Roboter blockiert werden. Sie können die Liste der blockierten Anfragen anzeigen und Blockausnahmen über ein intuitives Bedienfeld anwenden, das in den nächsten Schritten dieses Handbuchs beschrieben wird.";
                    txtts5="Die Aktivierung des Dienstes ist kostenlos und wird später beschrieben";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Soporte antispam compatible con ASPMTS";
                    txtts4="Evita la sobrecarga del servidor ya que bloquea la navegación y las solicitudes de recursos a robots no autorizados. Puede ver la lista de solicitudes bloqueadas y aplicar excepciones de bloqueo a través de un panel de control intuitivo que se describirá en los próximos pasos de esta guía.";
                    txtts5="La activación del servicio es gratuita y se describe más adelante";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Prise en charge anti-spam compatible ASPMTS";
                    txtts4="Évite la surcharge du serveur car il bloque la navigation et les demandes de ressources aux robots non autorisés. Vous pouvez afficher la liste des demandes bloquées et appliquer des exceptions de blocage via un panneau de contrôle intuitif qui sera décrit dans les prochaines étapes de ce guide.";
                    txtts5="L'activation du service est gratuite et décrite plus loin";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="ASPMTS संगत एंटी-स्पैम समर्थन";
                    txtts4="सर्वर ओवरलोड को रोकता है क्योंकि यह अनधिकृत रोबोटों के लिए नेविगेशन और संसाधन अनुरोधों को अवरुद्ध करता है। आप अवरुद्ध अनुरोधों की सूची देख सकते हैं और एक सहज नियंत्रण पैनल के माध्यम से ब्लॉक अपवाद लागू कर सकते हैं जिसका वर्णन इस गाइड के अगले चरणों में किया जाएगा।";
                    txtts5="सेवा का सक्रियण निःशुल्क है और इसका वर्णन बाद में किया जाएगा";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="ASPMTS 互換のスパム対策サポート";
                    txtts4="不正なロボットへのナビゲーションおよびリソース要求をブロックするため、サーバーの過負荷を防ぎます。ブロックされた要求のリストを表示し、直感的なコントロール パネルからブロック例外を適用できます。これについては、このガイドの次の手順で説明します。";
                    txtts5="サービスのアクティブ化は無料ですが、後で説明します";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Wsparcie antyspamowe kompatybilne z ASPMTS";
                    txtts4="Zapobiega przeciążeniu serwera, ponieważ blokuje nawigację i żądania zasobów dla nieautoryzowanych robotów. Możesz przeglądać listę zablokowanych żądań i stosować wyjątki blokowe za pomocą intuicyjnego panelu sterowania, który zostanie opisany w kolejnych krokach tego przewodnika.";
                    txtts5="Aktywacja usługi jest bezpłatna i opisana później";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Suporte anti-spam compatível com ASPMTS";
                    txtts4="Evita a sobrecarga do servidor, pois bloqueia a navegação e solicitações de recursos para robôs não autorizados. Você pode visualizar a lista de solicitações bloqueadas e aplicar exceções de bloqueio por meio de um painel de controle intuitivo que será descrito nas próximas etapas deste guia.";
                    txtts5="A ativação do serviço é gratuita e descrita posteriormente";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="ASPMTS-совместимая поддержка защиты от спама";
                    txtts4="Предотвращает перегрузку сервера, поскольку блокирует навигацию и запросы ресурсов неавторизованным роботам. Вы можете просмотреть список заблокированных запросов и применить исключения блокировки через интуитивно понятную панель управления, которая будет описана в следующих шагах этого руководства.";
                    txtts5="Активация услуги бесплатна и описана далее";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="ASPMTS 兼容反垃圾邮件支持";
                    txtts4="防止服务器过载，因为它会阻止对未经授权的机器人的导航和资源请求。您可以通过直观的控制面板查看阻止的请求列表并应用阻止例外，这将在本指南的后续步骤中进行描述。";
                    txtts5="该服务的激活是免费的，稍后描述";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="תמיכה נגד ספאם תואמת ASPMTS";
                    txtts4="מונע עומס יתר של השרת מכיוון שהוא חוסם בקשות ניווט ומשאבים לרובוטים לא מורשים. אתה יכול להציג את רשימת הבקשות החסומות ולהחיל חריגים לחסימה דרך לוח בקרה אינטואיטיבי שיתואר בשלבים הבאים של מדריך זה.";
                    txtts5="הפעלת השירות היא בחינם ומתוארת מאוחר יותר";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="ASPMTS compatible anti-spam subsidium";
                    txtts4="Prohibet servo onerare ut navigationem impedit et facultates petitiones non legitimis robotis. Potes inspicere petitiones clausarum inspicere et exceptiones clausulas adhibere per tabulam intuitivam quae in proximis gradibus huius ductoris describetur".
                    txtts5="Activatio servitii libera et perscripta";
                }else{
                    txtts3="ASPMTS compatible anti-spam support";
                    txtts4="Prevents server overload as it blocks navigation and resource requests to unauthorized robots. You can view the list of blocked requests and apply block exceptions through an intuitive control panel which will be described in the next steps of this guide.";
                    txtts5="The activation of the service is free and described later";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 12/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>" + txtts5 + " <a rel=\"nofollow\" href=\"javascript:go_to_aspmts_js_toppersystem();\">(" + txtts2 + " 14.2/31)</a>.<div id=\"index_guide_ts1\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts9')){
                    document.getElementById('guideboxts9').className="pos_opera_all guidebox_selected_ts";
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 13){
                if(hreflang_toppersystem == "it"){
                    txtts3="Elenco delle attività di ottimizzazione";
                    txtts4="Cliccando il link \"[&rlarr;]\" hai la possibilità di visualizzare e scaricare il flusso di tutte le richieste di ottimizzazione e cancellazione.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="قائمة مهام التحسين";
                    txtts4="بالنقر فوق الرابط  [& rlarr]  لديك إمكانية عرض وتنزيل تدفق جميع طلبات التحسين والإلغاء.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Liste der Optimierungsaufgaben";
                    txtts4="Durch Klicken auf den Link \"[&rlarr;]\" haben Sie die Möglichkeit, den Ablauf aller Optimierungs- und Stornierungsanfragen einzusehen und herunterzuladen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Lista de tareas de optimización";
                    txtts4="Al hacer clic en el enlace \"[&rlarr;]\" tiene la posibilidad de ver y descargar el flujo de todas las solicitudes de optimización y cancelación.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Liste des tâches d'optimisation";
                    txtts4="En cliquant sur le lien \"[&rlarr;]\" vous avez la possibilité de visualiser et de télécharger le flux de toutes les demandes d'optimisation et d'annulation.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="अनुकूलन कार्यों की सूची";
                    txtts4="\"लिंक \"[&rlarr;]\" पर क्लिक करके आपके पास सभी अनुकूलन और रद्दीकरण अनुरोधों के प्रवाह को देखने और डाउनलोड करने की संभावना है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="最適化タスクのリスト";
                    txtts4="リンク \"[&rlarr;]\" をクリックすると、すべての最適化リクエストとキャンセル リクエストのフローを表示およびダウンロードできます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Lista zadań optymalizacyjnych";
                    txtts4="Klikając link \"[&rlarr;]\" masz możliwość przeglądania i pobierania przebiegu wszystkich próśb o optymalizację i anulowanie.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Lista de tarefas de otimização";
                    txtts4="Ao clicar no link \"[&rlarr;]\" você tem a possibilidade de visualizar e baixar o fluxo de todas as solicitações de otimização e cancelamento.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Список задач по оптимизации";
                    txtts4="Нажав на ссылку \"[&rlarr;]\", вы можете просмотреть и загрузить поток всех запросов на оптимизацию и отмену.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="优化任务列表";
                    txtts4="通过单击链接\"[&rlarr;]\"，您可以查看和下载所有优化和取消请求的流程。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="רשימת משימות אופטימיזציה";
                    txtts4="על ידי לחיצה על הקישור -[&rlarr;]- יש לך אפשרות לצפות ולהוריד את זרימת כל בקשות האופטימיזציה והביטול.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="List of optimization tasks";
                    txtts4="Per strepitando nexum \"[&rlarr;]\" facultatem habes ad videndum ac detrahe fluxum omnium optimizationis et indultum petitionum.";
                }else{
                    txtts3="List of optimization tasks";
                    txtts4="By clicking the link \"[&rlarr;]\" you have the possibility to view and download the flow of all optimization and cancellation requests.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 13/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts2\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts10')){
                    document.getElementById('guideboxts10').className="pos_opera_all guidebox_selected_ts";
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 14){
                if(hreflang_toppersystem == "it"){
                    txtts3="Stato dei servizi e funzionalità";
                    txtts4="Oltre a fornire il servizio di ottimizzazione delle pagine pubbliche del tuo sito in questo plugin sono inclusi altri servizi e funzionalità combinabili tra loro a supporto della SEO.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="حالة الخدمات والميزات"; 
                    txtts4="بالإضافة إلى توفير خدمة التحسين للصفحات العامة لموقعك ، يتضمن هذا المكون الإضافي خدمات وميزات أخرى يمكن دمجها مع بعضها البعض لدعم تحسين محركات البحث.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Status der Dienste und Funktionen";
                    txtts4="Zusätzlich zur Bereitstellung des Optimierungsdienstes für die öffentlichen Seiten Ihrer Website umfasst dieses Plugin weitere Dienste und Funktionen, die miteinander kombiniert werden können, um SEO zu unterstützen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Estado de servicios y funcionalidades";
                    txtts4="Además de proporcionar el servicio de optimización para las páginas públicas de su sitio, este complemento incluye otros servicios y funciones que se pueden combinar entre sí para respaldar el SEO.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Statut des services et fonctionnalités";
                    txtts4="En plus de fournir le service d'optimisation des pages publiques de votre site, ce plugin inclut d'autres services et fonctionnalités qui peuvent être combinés entre eux pour prendre en charge le référencement.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="सेवाओं और सुविधाओं की स्थिति";
                    txtts4="आपकी साइट के सार्वजनिक पृष्ठों के लिए अनुकूलन सेवा प्रदान करने के अलावा, इस प्लगइन में अन्य सेवाएँ और सुविधाएँ शामिल हैं जिन्हें SEO का समर्थन करने के लिए एक दूसरे के साथ जोड़ा जा सकता है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="サービスと機能のステータス";
                    txtts4="サイトの公開ページに最適化サービスを提供することに加えて、このプラグインには、SEO をサポートするために相互に組み合わせることができる他のサービスや機能が含まれています。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Stan usług i funkcji";
                    txtts4="Oprócz usługi optymalizacji publicznych stron Twojej witryny, ta wtyczka zawiera inne usługi i funkcje, które można łączyć ze sobą w celu wspierania SEO.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Estado dos serviços e funcionalidades";
                    txtts4="Além de fornecer o serviço de otimização para as páginas públicas do seu site, este plug-in inclui outros serviços e recursos que podem ser combinados entre si para oferecer suporte ao SEO.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Статус услуг и функций";
                    txtts4="Помимо предоставления услуг по оптимизации общедоступных страниц вашего сайта, этот плагин включает в себя другие услуги и функции, которые можно комбинировать друг с другом для поддержки SEO.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="服务和功能的状态";
                    txtts4="除了为您网站的公共页面提供优化服务外，该插件还包括其他可以相互组合以支持 SEO 的服务和功能。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="סטטוס של שירותים ותכונות";
                    txtts4="בנוסף למתן שירות האופטימיזציה עבור הדפים הציבוריים של האתר שלך, תוסף זה כולל שירותים ותכונות נוספים שניתן לשלב זה עם זה כדי לתמוך ב-SEO.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Status of services and features";
                    txtts4="In addition ut optimam operam praebeat paginae publicae tui situs, haec plugin includit alia officia et lineamenta quae inter se ad auxilium SEO coniungi possunt";
                }else{
                    txtts3="Status of services and features";
                    txtts4="In addition to providing the optimization service for the public pages of your site, this plugin includes other services and features that can be combined with each other to support SEO.";
                }
                if(document.getElementById('guideresponsets1')){
                    document.getElementById('guideresponsets1').className="guidebox_info_ts";
                    document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:events_management_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts3\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts11')){
                    document.getElementById('guideboxts11').className="pos_opera_all guidebox_selected_ts";
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 15){
                if(hreflang_toppersystem == "it"){
                    txtts3="Elenco delle attività di ASPMTS";
                    txtts4="Da qui è possibile visualizzare l'elenco delle richieste HTTP bloccate da ASPMTS.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="قائمة أنشطة ASPMTS";
                    txtts4="هنا يمكنك عرض قائمة طلبات HTTP المحظورة بواسطة ASPMTS.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="ASPMTS-Aktivitätsliste";
                    txtts4="Hier können Sie die Liste der von ASPMTS blockierten HTTP-Anfragen anzeigen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Lista de actividades ASPMTS";
                    txtts4="Aquí puede ver la lista de solicitudes HTTP bloqueadas por ASPMTS.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Liste des activités ASPMTS";
                    txtts4="Ici vous pouvez voir la liste des requêtes HTTP bloquées par ASPMTS.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="ASPMTS गतिविधि सूची";
                    txtts4="यहां आप ASPMTS द्वारा अवरुद्ध HTTP अनुरोधों की सूची देख सकते हैं।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="ASPMTS アクティビティ リスト";
                    txtts4="ここでは、ASPMTS によってブロックされた HTTP リクエストのリストを表示できます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Lista działań ASPMTS";
                    txtts4="Tutaj możesz zobaczyć listę żądań HTTP zablokowanych przez ASPMTS.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Lista de atividades ASPMTS";
                    txtts4="Aqui você pode visualizar a lista de requisições HTTP bloqueadas pelo ASPMTS.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Список действий ASPMTS";
                    txtts4="Здесь вы можете просмотреть список HTTP-запросов, заблокированных ASPMTS.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="ASPMTS 活动列表";
                    txtts4="这里可以查看被ASPMTS阻止的HTTP请求列表。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="רשימת פעילויות ASPMTS";
                    txtts4="כאן אתה יכול להציג את רשימת בקשות ה-HTTP שנחסמו על ידי ASPMTS.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="ASPMTS actio list";
                    txtts4="Hic inspicere potes indicem petitionum HTTP ab ASPMTS inclusis";
                }else{
                    txtts3="ASPMTS activity list";
                    txtts4="Here you can view the list of HTTP requests blocked by ASPMTS.";
                }
                if(document.getElementById('guideresponsets2')){
                    document.getElementById('guideresponsets2').className="guidebox_info_ts";
                    document.getElementById('guideresponsets2').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 12.1/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_events_all_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts26\">&nbsp;</div></div>";
                }
                if(document.getElementById('box_page_request_events_toppersystem').className == ""){
                    document.getElementById('guideboxts12').className="marginrxghtl16 vertxcall4 guidebox_selected_ts";
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 16){
                if(hreflang_toppersystem == "it"){
                    txtts3="ASPMTS gestione delle eccezioni";
                    txtts4="Con ASPMTS hai la possibilità di aggiungere eccezioni per escludere dal blocco di eventuali richieste HTTP che potrebbero entrare in conflitto con altri plugin.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="معالجة استثناءات ASPMTS"; 
                    txtts4="مع ASPMTS لديك إمكانية إضافة استثناءات للاستبعاد من حظر أي طلبات HTTP قد تتعارض مع المكونات الإضافية الأخرى.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="ASPMTS-Ausnahmebehandlung";
                    txtts4="Mit ASPMTS haben Sie die Möglichkeit, Ausnahmen hinzuzufügen, um HTTP-Anfragen, die mit anderen Plugins in Konflikt geraten könnten, von der Blockierung auszuschließen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Manejo de excepciones ASPMTS";
                    txtts4="Con ASPMTS tiene la posibilidad de agregar excepciones para excluir del bloqueo cualquier solicitud HTTP que pueda entrar en conflicto con otros complementos.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Gestion des exceptions ASPMTS";
                    txtts4="Avec ASPMTS, vous avez la possibilité d'ajouter des exceptions pour exclure du blocage toute requête HTTP qui pourrait entrer en conflit avec d'autres plugins.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="ASPMTS अपवाद प्रबंधन";
                    txtts4="एएसपीएमटीएस के साथ आपके पास किसी भी HTTP अनुरोध को अवरुद्ध करने से रोकने के लिए अपवाद जोड़ने की संभावना है जो अन्य प्लगइन्स के साथ संघर्ष कर सकता है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="ASPMTS 例外処理";
                    txtts4="ASPMTS を使用すると、他のプラグインと競合する可能性のある HTTP リクエストのブロックから除外する例外を追加できます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Obsługa wyjątków ASPMTS";
                    txtts4="Dzięki ASPMTS masz możliwość dodania wyjątków w celu wykluczenia z blokowania żądań HTTP, które mogłyby kolidować z innymi wtyczkami.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Tratamento de exceções ASPMTS";
                    txtts4="Com ASPMTS você tem a possibilidade de adicionar exceções para impedir o bloqueio de quaisquer solicitações HTTP que possam entrar em conflito com outros plugins.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Обработка исключений ASPMTS";
                    txtts4="С помощью ASPMTS у вас есть возможность добавлять исключения, исключающие блокировку любых HTTP-запросов, которые могут конфликтовать с другими плагинами.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="ASPMTS异常处理";
                    txtts4="使用 ASPMTS，您可以添加例外，以排除阻止任何可能与其他插件冲突的 HTTP 请求。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="טיפול חריג ASPMTS";
                    txtts4="עם ASPMTS יש לך את האפשרות להוסיף חריגים כדי למנוע חסימת כל בקשות HTTP שעלולות להתנגש עם תוספים אחרים.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="ASPMTS exceptio tractatio";
                    txtts4="Cum ASPMTS facultatem habes exceptiones addendi ad excludendum ab impedimentis ullis petitionibus HTTP quae cum aliis plugins repugnare possunt.";
                }else{
                    txtts3="ASPMTS exception handling";
                    txtts4="With ASPMTS you have the possibility to add exceptions to exclude from blocking any HTTP requests that could conflict with other plugins.";
                }
                if(document.getElementById('guideresponsets2')){
                    document.getElementById('guideresponsets2').className="guidebox_info_ts";
                    document.getElementById('guideresponsets2').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 12.2/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_aspmts_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts27\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts14')){
                    document.getElementById('guideboxts14').className="marginrxghtl16 vertxcall4 guidebox_selected_ts";
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 17){
                if(hreflang_toppersystem == "it"){
                    txtts3="Elenco delle attività di ottimizzazione";
                    txtts4="Da qui hai la possibilità di visualizzare l'elenco delle richieste di ottimizzazione e rimozione delle pagine.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="قائمة مهام التحسين";
                    txtts4="من هنا لديك خيار عرض قائمة تحسين الصفحة وطلبات الإزالة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Liste der Optimierungsaufgaben";
                    txtts4="Von hier aus haben Sie die Möglichkeit, die Liste der Seitenoptimierungs- und Entfernungsanfragen anzuzeigen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Lista de tareas de optimización";
                    txtts4="Desde aquí tiene la opción de ver la lista de solicitudes de optimización y eliminación de páginas.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Liste des tâches d'optimisation";
                    txtts4="De là, vous avez la possibilité d'afficher la liste des demandes d'optimisation et de suppression de page.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="अनुकूलन कार्यों की सूची";
                    txtts4="यहां से आपके पास पृष्ठ अनुकूलन और निष्कासन अनुरोधों की सूची देखने का विकल्प है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="最適化タスクのリスト";
                    txtts4="ここから、ページの最適化および削除リクエストのリストを表示するオプションがあります。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Lista zadań optymalizacyjnych";
                    txtts4="Tutaj możesz wyświetlić listę żądań optymalizacji i usunięcia strony.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Lista de tarefas de otimização";
                    txtts4="A partir daqui você tem a opção de visualizar a lista de solicitações de otimização e remoção de página.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Список задач по оптимизации";
                    txtts4="Здесь у вас есть возможность просмотреть список запросов на оптимизацию и удаление страниц.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="优化任务列表";
                    txtts4="从这里您可以选择查看页面优化和删除请求的列表。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="רשימת משימות אופטימיזציה";
                    txtts4="מכאן יש לך אפשרות להציג את רשימת בקשות האופטימיזציה וההסרה של העמוד.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="List of optimization tasks";
                    txtts4="Optionem hinc habes ut indicem paginae optimizationis et remotionis petitiones videas";
                }else{
                    txtts3="ASPMTS exception handling";
                    txtts4="With ASPMTS you have the possibility to add exceptions to exclude from blocking any HTTP requests that could conflict with other plugins.";
                }
                if(document.getElementById('guideresponsets3')){
                    document.getElementById('guideresponsets3').className="guidebox_info_ts";
                    document.getElementById('guideresponsets3').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 13.1/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_events_all_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts28\">&nbsp;</div></div>";
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 18){
                if(hreflang_toppersystem == "it"){
                    txtts3="Download delle attività di ottimizzazione";
                    txtts4="Cliccando su \"Download\" scarichi un file zip contenente l'elenco delle richieste di ottimizzazione e rimozione delle pagine.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تنزيل مهام التحسين";
                    txtts4="بالنقر فوق  تنزيل  ، يتم تنزيل ملف مضغوط يحتوي على قائمة تحسين الصفحة وطلبات الإزالة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Optimierungsaufgaben herunterladen";
                    txtts4="Durch Klicken auf \"Herunterladen\" laden Sie eine ZIP-Datei herunter, die die Liste der Seitenoptimierungs- und Entfernungsanfragen enthält.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Descargar tareas de optimización";
                    txtts4="Al hacer clic en \"Descargar\", se descarga un archivo zip que contiene la lista de solicitudes de optimización y eliminación de páginas.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Télécharger les tâches d'optimisation";
                    txtts4="En cliquant sur \"Télécharger\" vous téléchargez un fichier zip contenant la liste des demandes d'optimisation et de suppression de page.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="अनुकूलन कार्य डाउनलोड करें";
                    txtts4="\"डाउनलोड\" पर क्लिक करके आप एक ज़िप फ़ाइल डाउनलोड करते हैं जिसमें पृष्ठ अनुकूलन और निष्कासन अनुरोधों की सूची होती है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="ダウンロード最適化タスク";
                    txtts4="「ダウンロード」をクリックすると、ページの最適化と削除のリクエストのリストが含まれる zip ファイルがダウンロードされます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Pobierz zadania optymalizacji";
                    txtts4="Klikając \"Pobierz\" pobierasz plik ZIP zawierający listę żądań optymalizacji i usunięcia strony.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Download de tarefas de otimização";
                    txtts4="Ao clicar em \"Baixar\" você baixa um arquivo zip contendo a lista de solicitações de otimização e remoção de página.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Загрузить задачи оптимизации";
                    txtts4="Нажав \"Загрузить\", вы загружаете zip-файл, содержащий список запросов на оптимизацию и удаление страниц.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="下载优化任务";
                    txtts4="通过单击\"下载\"，您将下载一个包含页面优化和删除请求列表的 zip 文件。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="הורד משימות אופטימיזציה";
                    txtts4="בלחיצה על-הורד- אתה מוריד קובץ zip המכיל את רשימת בקשות האופטימיזציה וההסרה של הדפים.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Download optimization tasks";
                    txtts4="Creando \"Download\", te detrahe fasciculum zip continens indicem paginae optimizationis et remotionis petitiones.";
                }else{
                    txtts3="List of optimization tasks";
                    txtts4="From here you have the option to view the list of page optimization and removal requests.";
                }
                if(document.getElementById('guideresponsets3')){
                    document.getElementById('guideresponsets3').className="guidebox_info_ts";
                    document.getElementById('guideresponsets3').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 13.2/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_activity_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts29\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts16')){
                    document.getElementById('guideboxts16').className="marginrxghtl16 vertxcall4 guidebox_selected_ts";
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 19){
                if(hreflang_toppersystem == "it"){
                    txtts3="Stato dei servizi e funzionalità";
                    txtts4="Benvenuto nel pannello di controllo dei servizi e funzionalità integrate in questo plugin.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="حالة الخدمات والميزات";
                    txtts4="مرحبًا بك في لوحة التحكم الخاصة بالخدمات والميزات المدمجة في هذا المكون الإضافي.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Status der Dienste und Funktionen";
                    txtts4="Willkommen im Control Panel der in diesem Plugin integrierten Dienste und Funktionen.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Estado de servicios y funcionalidades";
                    txtts4="Bienvenido al panel de control de servicios y funcionalidades integrados en este plugin.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Statut des services et fonctionnalités";
                    txtts4="Bienvenue dans le panneau de contrôle des services et fonctionnalités intégrés à ce plugin.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="सेवाओं और सुविधाओं की स्थिति";
                    txtts4="इस प्लगइन में एकीकृत सेवाओं और सुविधाओं के नियंत्रण कक्ष में आपका स्वागत है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="サービスと機能のステータス";
                    txtts4="このプラグインに統合されているサービスと機能のコントロール パネルへようこそ。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Stan usług i funkcji";
                    txtts4="Witamy w panelu kontrolnym usług i funkcji zintegrowanych z tą wtyczką.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Estado dos serviços e funcionalidades";
                    txtts4="Bem-vindo ao painel de controle de serviços e recursos integrados neste plugin.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Статус услуг и функций";
                    txtts4="Добро пожаловать в панель управления службами и функциями, интегрированными в этот плагин.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="服务和功能的状态";
                    txtts4="欢迎使用此插件中集成的服务和功能的控制面板。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="סטטוס של שירותים ותכונות";
                    txtts4="ברוכים הבאים ללוח הבקרה של השירותים והתכונות המשולבים בתוסף זה.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Status of services and features";
                    txtts4="Welcome to the control panel of services and features integrated in this plugin.";
                }else{
                    txtts3="Status of services and features";
                    txtts4="Welcome to the control panel of services and features integrated in this plugin.";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.1/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_events_all_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts15\">&nbsp;</div></div>";
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 20){
                if(hreflang_toppersystem == "it"){
                    txtts3="Supporto anti-spam ASPMTS";
                    txtts4="Previene il sovraccarico del server in quanto blocca la navigazione e le richieste di risorse ai robot non autorizzati.";
                    txtts5="Per attivare il servizio gratuito spunta il campo checkbox e clicca su \"Salva\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="دعم مكافحة البريد العشوائي ASPMTS"; 
                    txtts4="يمنع التحميل الزائد للخادم عن طريق حظر التصفح وطلبات الموارد للروبوتات غير المصرح بها.";
                    txtts5="لتنشيط الخدمة المجانية ، حدد خانة الاختيار وانقر على  حفظ.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="ASPMTS Anti-Spam-Unterstützung";
                    txtts4="Verhindert eine Serverüberlastung, indem das Surfen und Ressourcenanfragen an nicht autorisierte Bots blockiert werden.";
                    txtts5="Um den kostenlosen Dienst zu aktivieren, aktivieren Sie das Kontrollkästchen und klicken Sie auf \"Speichern\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Soporte antispam ASPMTS";
                    txtts4="Evita la sobrecarga del servidor al bloquear la navegación y las solicitudes de recursos a bots no autorizados.";
                    txtts5="Para activar el servicio gratuito, marque la casilla de verificación y haga clic en \"Guardar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Prise en charge anti-spam ASPMTS";
                    txtts4="Évite la surcharge du serveur en bloquant la navigation et les demandes de ressources aux bots non autorisés.";
                    txtts5="Pour activer le service gratuit, cochez la case et cliquez sur \"Enregistrer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="ASPMTS एंटी-स्पैम समर्थन";
                    txtts4="अनधिकृत बॉट्स के लिए ब्राउज़िंग और संसाधन अनुरोधों को अवरुद्ध करके सर्वर ओवरलोड को रोकता है।";
                    txtts5="निःशुल्क सेवा सक्रिय करने के लिए, चेकबॉक्स फ़ील्ड पर टिक करें और \"सहेजें\" पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="ASPMTS スパム対策サポート";
                    txtts4="不正なボットへのブラウジングとリソース要求をブロックすることで、サーバーの過負荷を防ぎます。";
                    txtts5="無料サービスを有効にするには、チェックボックス フィールドにチェックを入れ、「保存」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Wsparcie antyspamowe ASPMTS";
                    txtts4="Zapobiega przeciążeniu serwera, blokując przeglądanie i żądania zasobów dla nieautoryzowanych botów.";
                    txtts5="Aby aktywować bezpłatną usługę, zaznacz pole wyboru i kliknij \"Zapisz\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Suporte anti-spam ASPMTS";
                    txtts4="Evita a sobrecarga do servidor bloqueando a navegação e solicitações de recursos para bots não autorizados.";
                    txtts5="Para ativar o serviço gratuito, marque a caixa de seleção e clique em \"Salvar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Поддержка защиты от спама ASPMTS";
                    txtts4="Предотвращает перегрузку сервера, блокируя просмотр и запросы ресурсов неавторизованным ботам.";
                    txtts5="Чтобы активировать бесплатную услугу, установите флажок и нажмите \"Сохранить\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="ASPMTS 反垃圾邮件支持";
                    txtts4="通过阻止未经授权的机器人的浏览和资源请求来防止服务器过载。";
                    txtts5="要激活免费服务，请勾选复选框并单击\"保存\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="תמיכה ב-ASPMTS נגד ספאם";
                    txtts4="מונע עומס יתר על השרת על ידי חסימת בקשות גלישה ובקשות משאבים לבוטים לא מורשים.";
                    txtts5="כדי להפעיל את השירות החינמי, סמן את שדה הסימון ולחץ על-שמור-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="ASPMTS anti-spam firmamentum";
                    txtts4="Prohibet server onerare claudendo pascendo et resource petitiones non legitimis automata.";
                    txtts5="Ad liberum servitium excitandum, reprehendo campum tick et deprime in \"Save\".";
                }else{
                    txtts3="ASPMTS anti-spam support";
                    txtts4="Prevents server overload by blocking browsing and resource requests to unauthorized bots.";
                    txtts5="To activate the free service, tick the checkbox field and click on \"Save\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.2/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>" + txtts5 + "<div id=\"index_guide_ts16\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts20')){
                    document.getElementById('guideboxts20').className="guidebox_selected_ts";
                    document.getElementById("guideboxts20").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 21){
                if(hreflang_toppersystem == "it"){
                    txtts3="Supporto cache";
                    txtts4="Questo servizio permette di applicare richieste di cache delle pagine pubbliche e di tutte le risorse interne, in modo che, se interrogate per una seconda volta saranno direttamente disponibili sul client del dispositivo utilizzato a beneficio di un aumento della velocità di caricamento.";
                    txtts5="Per attivare il servizio gratuito spunta il campo checkbox e clicca su \"Salva\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="دعم التخزين المؤقت";
                    txtts4="تتيح لك هذه الخدمة تطبيق طلبات ذاكرة التخزين المؤقت للصفحات العامة وجميع الموارد الداخلية ، بحيث إذا تم الاستعلام عنها للمرة الثانية ، فستكون متاحة مباشرة على جهاز العميل المستخدم للاستفادة من زيادة سرعة التحميل.";
                    txtts5="لتنشيط الخدمة المجانية ، حدد خانة الاختيار وانقر على  حفظ.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Caching-Unterstützung";
                    txtts4="Mit diesem Dienst können Sie Cache-Anfragen für öffentliche Seiten und alle internen Ressourcen anwenden, sodass diese bei einer zweiten Abfrage direkt auf dem verwendeten Client-Gerät verfügbar sind, um die Ladegeschwindigkeit zu erhöhen.";
                    txtts5="Um den kostenlosen Dienst zu aktivieren, aktivieren Sie das Kontrollkästchen und klicken Sie auf \"Speichern\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Soporte de almacenamiento en caché";
                    txtts4="Este servicio le permite aplicar solicitudes de caché para páginas públicas y todos los recursos internos, de modo que, si se consultan por segunda vez, estarán disponibles directamente en el dispositivo cliente utilizado en beneficio de un aumento en la velocidad de carga." ;
                    txtts5="Para activar el servicio gratuito, marque la casilla de verificación y haga clic en \"Guardar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Prise en charge de la mise en cache";
                    txtts4="Ce service permet d'appliquer des requêtes de cache pour les pages publiques et toutes les ressources internes, afin que, si elles sont interrogées une deuxième fois, elles soient directement disponibles sur l'appareil client utilisé au profit d'une augmentation de la vitesse de chargement." ;
                    txtts5="Pour activer le service gratuit, cochez la case et cliquez sur \"Enregistrer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="कैशिंग समर्थन";
                    txtts4="यह सेवा आपको सार्वजनिक पृष्ठों और सभी आंतरिक संसाधनों के लिए कैश अनुरोध लागू करने की अनुमति देती है, ताकि, यदि दूसरी बार पूछताछ की जाए, तो वे लोडिंग गति में वृद्धि के लाभ के लिए उपयोग किए जाने वाले क्लाइंट डिवाइस पर सीधे उपलब्ध होंगे।" ;
                    txtts5="निःशुल्क सेवा सक्रिय करने के लिए, चेकबॉक्स फ़ील्ड पर टिक करें और \"सहेजें\" पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="キャッシュのサポート";
                    txtts4="このサービスを使用すると、パブリック ページとすべての内部リソースにキャッシュ リクエストを適用できるため、2 回目のクエリが行われた場合、それらのリクエストはクライアント デバイスで直接利用できるようになり、読み込み速度が向上します。" ;
                    txtts5="無料サービスを有効にするには、チェックボックス フィールドにチェックを入れ、「保存」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Obsługa buforowania";
                    txtts4="Ta usługa umożliwia zastosowanie żądań pamięci podręcznej dla stron publicznych i wszystkich zasobów wewnętrznych, dzięki czemu po ponownym zapytaniu będą one bezpośrednio dostępne na używanym urządzeniu klienckim w celu zwiększenia szybkości ładowania." ;
                    txtts5="Aby aktywować bezpłatną usługę, zaznacz pole wyboru i kliknij \"Zapisz\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Suporte de Cache";
                    txtts4="Este serviço permite aplicar pedidos de cache para páginas públicas e todos os recursos internos, de modo que, se forem consultados uma segunda vez, eles estarão disponíveis diretamente no dispositivo cliente usado para o benefício de um aumento na velocidade de carregamento." ;
                    txtts5="Para ativar o serviço gratuito, marque a caixa de seleção e clique em \"Salvar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Поддержка кэширования";
                    txtts4="Эта услуга позволяет применять кеш-запросы для общедоступных страниц и всех внутренних ресурсов, так что при повторном запросе они будут напрямую доступны на клиентском устройстве, используемом для увеличения скорости загрузки." ;
                    txtts5="Чтобы активировать бесплатную услугу, установите флажок и нажмите \"Сохранить\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="缓存支持";
                    txtts4="此服务允许您对公共页面和所有内部资源应用缓存请求，这样，如果第二次查询，它们将直接在所使用的客户端设备上可用，从而提高加载速度。" ;
                    txtts5="要激活免费服务，请勾选复选框并单击\"保存\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="תמיכה בשמירת מטמון";
                    txtts4="שירות זה מאפשר לך להחיל בקשות מטמון עבור דפים ציבוריים וכל המשאבים הפנימיים, כך שאם יישאלו בפעם השנייה, הם יהיו זמינים ישירות במכשיר הלקוח המשמש לטובת עלייה במהירות הטעינה.-" ;
                    txtts5="כדי להפעיל את השירות החינמי, סמן את שדה הסימון ולחץ על-שמור-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Caching Support";
                    txtts4="Hoc officium tibi permittit ut petitiones cache paginas publicas omnesque opes internas adhibeas, ut, si secundo quaesitum fuerit, protinus praesto sint in clientis fabrica adhibita ad augmentum celeritatis plenitudinis.";
                    txtts5="Ad liberum servitium excitandum, reprehendo campum tick et deprime in \"Save\".";
                }else{
                    txtts3="Caching Support";
                    txtts4="This service allows you to apply cache requests for public pages and all internal resources, so that, if queried for a second time, they will be directly available on the client device used for the benefit of an increase in loading speed.";
                    txtts5="To activate the free service, tick the checkbox field and click on \"Save\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.3/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>" + txtts5 + "<div id=\"index_guide_ts17\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts21')){
                    document.getElementById('guideboxts21').className="guidebox_selected_ts";
                    document.getElementById("guideboxts21").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 22){
                if(hreflang_toppersystem == "it"){
                    txtts3="Smart Image Lazy-Loading";
                    txtts4="Questa innovativo servizio messo a disposizione gratuitamente, permette di applicare le regole del Lazy Load a tutte le pagine del tuo sito, senza modificare le url dal corpo del documento html originale. La conversione avviene dinamicamente attraverso un processo di analisi che si avvia durante il caricamento della pagina. L'intero processo è gestito da un leggero script in Javascript, tutto a beneficio della velocità e di una più efficace comunicazione con i Motori di Ricerca.";
                    txtts5="Per attivare il servizio spunta il campo checkbox e clicca su \"Salva\".";
                    txtts6="Per personalizzare il servizio clicca su \"Gestisci\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تحميل الصور الذكية الكسول";
                    txtts4="هذه الخدمة المبتكرة التي تم توفيرها مجانًا ، تتيح لك تطبيق قواعد التحميل البطيء على جميع صفحات موقعك ، دون تغيير عنوان url من نص مستند html الأصلي. يحدث التحويل ديناميكيًا من خلال عملية التحليل تبدأ أثناء تحميل الصفحة. تتم إدارة العملية بأكملها بواسطة برنامج نصي جافا سكريبت خفيف الوزن ، وكل ذلك من أجل الاستفادة من السرعة والتواصل الأكثر فعالية مع محركات البحث.";
                    txtts5="لتنشيط الخدمة ، حدد خانة الاختيار وانقر على  حفظ.";
                    txtts6="لتخصيص الخدمة ، انقر فوق  إدارة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Smart Image Lazy-Loading";
                    txtts4="Dieser innovative, kostenlos zur Verfügung gestellte Dienst ermöglicht es Ihnen, die Regeln des Lazy Load auf alle Seiten Ihrer Website anzuwenden, ohne die URL des Hauptteils des ursprünglichen HTML-Dokuments zu ändern. Die Konvertierung erfolgt dynamisch durch einen Analyseprozess das beginnt beim Laden der Seite. Der gesamte Prozess wird von einem einfachen Javascript-Skript verwaltet, alles zum Vorteil der Geschwindigkeit und einer effektiveren Kommunikation mit Suchmaschinen.";
                    txtts5="Um den Dienst zu aktivieren, aktivieren Sie das Kontrollkästchen und klicken Sie auf \"Speichern\".";
                    txtts6="Um den Dienst anzupassen, klicken Sie auf \"Verwalten\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Imagen inteligente carga diferida";
                    txtts4="Este innovador servicio, disponible de forma gratuita, le permite aplicar las reglas de Lazy Load a todas las páginas de su sitio, sin cambiar la URL del cuerpo del documento html original. La conversión se realiza dinámicamente a través de un proceso de análisis que comienza mientras se carga la página. Todo el proceso es administrado por un script Javascript liviano, todo en beneficio de una comunicación más rápida y efectiva con los motores de búsqueda.";
                    txtts5="Para activar el servicio, marque la casilla de verificación y haga clic en \"Guardar\".";
                    txtts6="Para personalizar el servicio, haga clic en \"Administrar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Chargement paresseux d'images intelligentes";
                    txtts4="Ce service innovant mis à disposition gratuitement, vous permet d'appliquer les règles du Lazy Load à toutes les pages de votre site, sans modifier l'url du corps du document html d'origine. La conversion s'effectue dynamiquement grâce à un processus d'analyse qui démarre lors du chargement de la page. L'ensemble du processus est géré par un script Javascript léger, le tout au profit de la rapidité et d'une communication plus efficace avec les moteurs de recherche.";
                    txtts5="Pour activer le service, cochez la case à cocher et cliquez sur \"Enregistrer\".";
                    txtts6="Pour personnaliser le service, cliquez sur \"Gérer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="स्मार्ट इमेज लेज़ी-लोडिंग";
                    txtts4="मुफ्त में उपलब्ध कराई गई यह नवोन्मेषी सेवा आपको मूल HTML दस्तावेज़ के मुख्य भाग से यूआरएल को बदले बिना, अपनी साइट के सभी पृष्ठों पर लेज़ी लोड के नियमों को लागू करने की अनुमति देती है। रूपांतरण एक विश्लेषण प्रक्रिया के माध्यम से गतिशील रूप से होता है जो पेज लोड करते समय शुरू होता है। पूरी प्रक्रिया को एक हल्की जावास्क्रिप्ट स्क्रिप्ट द्वारा प्रबंधित किया जाता है, यह सब खोज इंजनों के साथ गति और अधिक प्रभावी संचार के लाभ के लिए किया जाता है।";
                    txtts5="सेवा सक्रिय करने के लिए, चेकबॉक्स फ़ील्ड पर टिक करें और \"सहेजें\" पर क्लिक करें।";
                    txtts6="सेवा को अनुकूलित करने के लिए \"प्रबंधित\" पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="スマートイメージの遅延読み込み";
                    txtts4="この革新的なサービスは無料で利用可能で、元の HTML ドキュメントの本文の URL を変更することなく、遅延読み込みのルールをサイトのすべてのページに適用できます。変換は分析プロセスを通じて動的に行われます。これはページの読み込み中に開始されます。プロセス全体は軽量の Javascript スクリプトによって管理され、すべては検索エンジンとの速度とより効果的な通信の利点を目的としています。";
                    txtts5="サービスを有効にするには、チェックボックス フィールドにチェックを入れ、「保存」をクリックしてください。";
                    txtts6="サービスをカスタマイズするには、「管理」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Inteligentne ładowanie obrazu z opóźnieniem";
                    txtts4="Ta innowacyjna usługa udostępniona za darmo, pozwala zastosować reguły Lazy Load do wszystkich stron Twojej witryny, bez zmiany adresu URL z treści oryginalnego dokumentu html. Konwersja odbywa się dynamicznie poprzez proces analizy który rozpoczyna się podczas ładowania strony. Cały proces jest zarządzany przez lekki skrypt Javascript, a wszystko to z korzyścią dla szybkości i efektywniejszej komunikacji z wyszukiwarkami.";
                    txtts5="Aby aktywować usługę, zaznacz pole wyboru i kliknij \"Zapisz\".";
                    txtts6="Aby dostosować usługę, kliknij \"Zarządzaj\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Carregamento lento de imagem inteligente";
                    txtts4="Este serviço inovador disponibilizado gratuitamente, permite-lhe aplicar as regras do Lazy Load a todas as páginas do seu site, sem alterar a url do corpo do documento html original. A conversão ocorre de forma dinâmica através de um processo de análise que começa durante o carregamento da página. Todo o processo é gerenciado por um script Javascript leve, tudo para o benefício de velocidade e comunicação mais eficaz com os mecanismos de pesquisa.";
                    txtts5="Para ativar o serviço, marque a caixa de seleção e clique em \"Salvar\".";
                    txtts6="Para personalizar o serviço clique em \"Gerenciar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Отложенная загрузка смарт-изображений";
                    txtts4="Этот инновационный сервис, доступный бесплатно, позволяет применять правила отложенной загрузки ко всем страницам вашего сайта без изменения URL-адреса исходного HTML-документа. Преобразование происходит динамически посредством процесса анализа. который начинается при загрузке страницы. Весь процесс управляется облегченным скриптом Javascript, все для повышения скорости и более эффективного взаимодействия с поисковыми системами.";
                    txtts5="Чтобы активировать услугу, поставьте галочку в поле и нажмите \"Сохранить\".";
                    txtts6="Чтобы настроить службу, нажмите \"Управление\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="禁用 WP-CRON";
                    txtts4="此功能可防止 WordPress 对您的 Web 服务器进行过多的异步调用。";
                    txtts5="如果您决定激活它，我们建议您检查添加到您网站的所有功能是否正常运行。";
                    txtts6="要激活此免费功能，请勾选复选框并单击\"保存\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="תמונה חכמה טעינה בעצלתיים";
                    txtts4="שירות חדשני זה זמין בחינם, מאפשר לך להחיל את חוקי ה-Lazy Load על כל דפי האתר שלך, מבלי לשנות את כתובת האתר מגוף מסמך ה-html המקורי. ההמרה מתרחשת באופן דינמי באמצעות תהליך ניתוח שמתחיל בזמן טעינת הדף. כל התהליך מנוהל על ידי סקריפט Javascript קל משקל, הכל לטובת מהירות ותקשורת יעילה יותר עם מנועי חיפוש.";
                    txtts5="כדי להפעיל את השירות, סמן את שדה הסימון ולחץ על-שמור-.";
                    txtts6="כדי להתאים אישית את השירות לחץ על-ניהול-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Smart Image Lazy-Loading";
                    txtts4="Hoc porttitor officium gratis praestitum, permittit te ad omnes paginas situs tui apponere regulas desidiae oneris, sine mutatione url e corpore documenti originalis html. Conversio dynamice fit per processum analysin. qui incipit dum paginam onerant. Totum processum leve scriptoris Javascripte administratur, omnia ad utilitatem celeritatis et communicationis efficacioris cum Engines Quaerere.";
                    txtts5="Servitium movere, reprehendo campum tick et deprime in \"Save\".";
                    txtts6="To customize the service click on \"Manage\".";
                }else{
                    txtts3="Smart Image Lazy-Loading";
                    txtts4="This innovative service made available for free, allows you to apply the rules of the Lazy Load to all pages of your site, without changing the url from the body of the original html document. The conversion takes place dynamically through an analysis process that starts while loading the page. The entire process is managed by a lightweight Javascript script, all for the benefit of speed and more effective communication with Search Engines.";
                    txtts5="To activate the service, tick the checkbox field and click on \"Save\".";
                    txtts6="To customize the service click on \"Manage\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.4/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>" + txtts5 + "<br><br>" + txtts6 + "<div id=\"index_guide_ts18\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts22')){
                    document.getElementById('guideboxts22').className="guidebox_selected_ts";
                    document.getElementById("guideboxts22").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 23){
                if(hreflang_toppersystem == "it"){
                    txtts3="Disabilita WP-CRON";
                    txtts4="Questa funzionalità impedisce a WordPress di effettuare eccessive chiamate asincrone al tuo server web.";
                    txtts5="Se decidi di attivarla ti raccomandiamo di verificare il corretto funzionamento di eventuali funzionalità aggiunte al tuo sito.";
                    txtts6="Per attivare questa funzionalità gratuita spunta il campo checkbox e clicca su \"Salva\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تعطيل WP-CRON";
                    txtts4="تمنع هذه الميزة WordPress من إجراء مكالمات غير متزامنة مفرطة لخادم الويب الخاص بك.";
                    txtts5="إذا قررت تنشيطه ، نوصيك بالتحقق من الأداء الصحيح لأي ميزات تمت إضافتها إلى موقعك.";
                    txtts6="لتنشيط هذه الميزة المجانية ، حدد مربع الاختيار وانقر على  حفظ.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="WP-CRON deaktivieren";
                    txtts4="Diese Funktion verhindert, dass WordPress übermäßig viele asynchrone Aufrufe an Ihren Webserver durchführt.";
                    txtts5="Wenn Sie sich für die Aktivierung entscheiden, empfehlen wir Ihnen, die korrekte Funktion aller Ihrer Website hinzugefügten Funktionen zu überprüfen.";
                    txtts6="Um diese kostenlose Funktion zu aktivieren, aktivieren Sie das Kontrollkästchen und klicken Sie auf \"Speichern\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Desactivar WP-CRON";
                    txtts4="Esta función evita que WordPress realice demasiadas llamadas asincrónicas a su servidor web.";
                    txtts5="Si decide activarlo, le recomendamos que verifique el correcto funcionamiento de las funciones añadidas a su sitio.";
                    txtts6="Para activar esta función gratuita, marque la casilla de verificación y haga clic en \"Guardar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Désactiver WP-CRON";
                    txtts4="Cette fonctionnalité empêche WordPress d'effectuer des appels asynchrones excessifs vers votre serveur Web.";
                    txtts5="Si vous décidez de l'activer, nous vous recommandons de vérifier le bon fonctionnement des éventuelles fonctionnalités ajoutées à votre site.";
                    txtts6="Pour activer cette fonctionnalité gratuite, cochez la case et cliquez sur \"Enregistrer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="WP-CRON अक्षम करें";
                    txtts4="यह सुविधा वर्डप्रेस को आपके वेब सर्वर पर अत्यधिक एसिंक्रोनस कॉल करने से रोकती है।";
                    txtts5="यदि आप इसे सक्रिय करने का निर्णय लेते हैं, तो हम अनुशंसा करते हैं कि आप अपनी साइट पर जोड़े गए किसी भी फीचर की सही कार्यप्रणाली की जांच करें।";
                    txtts6="इस निःशुल्क सुविधा को सक्रिय करने के लिए, चेकबॉक्स पर टिक करें और \"सहेजें\" पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="WP-CRONを無効にする";
                    txtts4="この機能は、WordPress が Web サーバーに対して過剰な非同期呼び出しを行うのを防ぎます。";
                    txtts5="アクティブ化する場合は、サイトに追加された機能が正しく機能するかどうかを確認することをお勧めします。";
                    txtts6="この無料機能を有効にするには、チェックボックスにチェックを入れて「保存」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Wyłącz WP-CRON";
                    txtts4="Ta funkcja zapobiega wykonywaniu przez WordPress nadmiernej liczby asynchronicznych wywołań do Twojego serwera WWW.";
                    txtts5="Jeśli zdecydujesz się go aktywować, zalecamy sprawdzenie poprawności działania wszystkich funkcji dodanych do Twojej witryny.";
                    txtts6="Aby aktywować tę darmową funkcję, zaznacz pole wyboru i kliknij \"Zapisz\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Desativar WP-CRON";
                    txtts4="Este recurso evita que o WordPress faça chamadas assíncronas excessivas para seu servidor web.";
                    txtts5="Caso decida ativá-lo, recomendamos que verifique o correto funcionamento de quaisquer funcionalidades adicionadas ao seu site.";
                    txtts6="Para ativar este recurso gratuito, marque a caixa de seleção e clique em \"Salvar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Отключить WP-CRON";
                    txtts4="Эта функция предотвращает чрезмерные асинхронные вызовы WordPress к вашему веб-серверу.";
                    txtts5="Если вы решите активировать его, мы рекомендуем вам проверить правильность работы любых функций, добавленных на ваш сайт.";
                    txtts6="Чтобы активировать эту бесплатную функцию, установите флажок и нажмите \"Сохранить\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="禁用 WP-CRON";
                    txtts4="此功能可防止 WordPress 对您的 Web 服务器进行过多的异步调用。";
                    txtts5="如果您决定激活它，我们建议您检查添加到您网站的所有功能是否正常运行。";
                    txtts6="要激活此免费功能，请勾选复选框并单击\"保存\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="השבת את WP-CRON";
                    txtts4="תכונה זו מונעת מ-WordPress לבצע שיחות אסינכרוניות מוגזמות לשרת האינטרנט שלך.";
                    txtts5="אם תחליט להפעיל אותו, אנו ממליצים לך לבדוק את התפקוד הנכון של כל תכונות שנוספו לאתר שלך.";
                    txtts6="כדי להפעיל תכונה חינמית זו, סמן את תיבת הסימון ולחץ על-שמור-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Disable WP-CRON";
                    txtts4="Hoc pluma prohibet WordPress ne nimiam asynchronam vocat ad servo tuo telam";
                    txtts5="Si eam movere volueris, commendamus ut te rectam operationem cuiuslibet notae ad locum tuum additae reprimas.";
                    txtts6="Ut hanc liberam plumam activate, pressione liga et deprime in \"Save\".";
                }else{
                    txtts3="Disable WP-CRON";
                    txtts4="This feature prevents WordPress from making excessive asynchronous calls to your web server.";
                    txtts5="If you decide to activate it, we recommend that you check the correct functioning of any features added to your site.";
                    txtts6="To activate this free feature, tick the checkbox and click on \"Save\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.5/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>" + txtts5 + "<br><br>" + txtts6 + "<div id=\"index_guide_ts19\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts23')){
                    document.getElementById('guideboxts23').className="guidebox_selected_ts";
                    document.getElementById("guideboxts23").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 24){
                if(hreflang_toppersystem == "it"){
                    txtts3="CO2 Application";
                    txtts4="Con questo servizio andiamo a calcolare la percentuale di abbattimento della CO2 per ogni pagina ottimizzata. Con CO2 Application andiamo a:";
                    txtts5="misurare le dimensioni della pagina e delle risorse che la costituiscono";
                    txtts6="confrontare i risultati con quelli precedenti ai processi di ottimizzazione eseguiti";
                    txtts7="restituire ai visitatori del sito web la differenza espressa in percentuale in modo preciso e in tempo reale";
                    txtts8="Per attivare il servizio gratuito spunta il campo checkbox e clicca su \"Salva\".";
                    txtts9="Per personalizzare il servizio clicca su \"Gestisci\".";                   
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="CO2 Application";
                    txtts4="مع هذه الخدمة نذهب لحساب النسبة المئوية لخفض ثاني أكسيد الكربون لكل صفحة محسّنة. مع تطبيق CO2 نذهب إلى:";
                    txtts5="قم بقياس حجم الصفحة والموارد التي تتكون منها";
                    txtts6="قارن النتائج بمهام التحسين السابقة المنجزة";
                    txtts7="أعد إلى زوار الموقع الفرق معبرًا عنه كنسبة مئوية بدقة وفي الوقت الفعلي";
                    txtts8="لتنشيط الخدمة المجانية ، حدد خانة الاختيار وانقر على  حفظ.";
                    txtts9="لتخصيص الخدمة ، انقر فوق  إدارة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="CO2 Application";
                    txtts4="Mit diesem Service berechnen wir den Prozentsatz der CO2-Einsparung für jede optimierte Seite. Mit der CO2-Anwendung gehen wir zu:";
                    txtts5="Messen Sie die Größe der Seite und die Ressourcen, aus denen sie besteht";
                    txtts6="Ergebnisse mit zuvor durchgeführten Optimierungsjobs vergleichen";
                    txtts7="den Website-Besuchern die prozentuale Differenz genau und in Echtzeit zurückgeben";
                    txtts8="Um den kostenlosen Dienst zu aktivieren, aktivieren Sie das Kontrollkästchen und klicken Sie auf \"Speichern\".";
                    txtts9="Um den Dienst anzupassen, klicken Sie auf \"Verwalten\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="CO2 Application";
                    txtts4="Con este servicio vamos a calcular el porcentaje de reducción de CO2 por cada página optimizada. Con Aplicación CO2 vamos a:";
                    txtts5="medir el tamaño de la página y los recursos que la componen";
                    txtts6="comparar resultados con trabajos de optimización anteriores realizados";
                    txtts7="devolver a los visitantes del sitio web la diferencia expresada en porcentaje de forma precisa y en tiempo real";
                    txtts8="Para activar el servicio gratuito, marque la casilla de verificación y haga clic en \"Guardar\".";
                    txtts9="Para personalizar el servicio, haga clic en \"Administrar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="CO2 Application";
                    txtts4="Avec ce service nous allons calculer le pourcentage de réduction de CO2 pour chaque page optimisée. Avec CO2 Application nous allons :";
                    txtts5="mesurer la taille de la page et les ressources qui la composent";
                    txtts6="comparer les résultats avec les tâches d'optimisation précédentes effectuées";
                    txtts7="renvoie aux visiteurs du site la différence exprimée en pourcentage avec précision et en temps réel";
                    txtts8="Pour activer le service gratuit, cochez la case et cliquez sur \"Enregistrer\".";
                    txtts9="Pour personnaliser le service, cliquez sur \"Gérer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="CO2 Application";
                    txtts4="\"इस सेवा के साथ हम प्रत्येक अनुकूलित पृष्ठ के लिए CO2 कमी के प्रतिशत की गणना करते हैं। CO2 अनुप्रयोग के साथ हम इस पर जाते हैं:";
                    txtts5="पेज का आकार और इसे बनाने वाले संसाधनों को मापें";
                    txtts6="पिछले किए गए अनुकूलन कार्यों के साथ परिणामों की तुलना करें";
                    txtts7="वेबसाइट आगंतुकों को प्रतिशत के रूप में व्यक्त अंतर को सटीक और वास्तविक समय में लौटाएं";
                    txtts8="निःशुल्क सेवा सक्रिय करने के लिए, चेकबॉक्स फ़ील्ड पर टिक करें और \"सहेजें\" पर क्लिक करें।";
                    txtts9="सेवा को अनुकूलित करने के लिए \"प्रबंधित\" पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="CO2 Application";
                    txtts4="このサービスを使用して、最適化された各ページの CO2 削減のパーセンテージを計算します。CO2 アプリケーションでは次のようになります。";
                    txtts5="ページとそれを構成するリソースのサイズを測定します";
                    txtts6="結果を以前に実行した最適化ジョブと比較します";
                    txtts7="Web サイト訪問者に、パーセンテージとして表現された差異を正確かつリアルタイムで返します";
                    txtts8="無料サービスを有効にするには、チェックボックス フィールドにチェックを入れ、「保存」をクリックしてください。";
                    txtts9="サービスをカスタマイズするには、「管理」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="CO2 Application";
                    txtts4="Dzięki tej usłudze przechodzimy do obliczenia procentowej redukcji emisji CO2 dla każdej zoptymalizowanej strony. Z aplikacją CO2 przechodzimy do:";
                    txtts5="zmierz rozmiar strony i zasoby, które ją tworzą";
                    txtts6="porównaj wyniki z poprzednimi wykonanymi zadaniami optymalizacji";
                    txtts7="zwróć odwiedzającym stronę różnicę wyrażoną w procentach dokładnie iw czasie rzeczywistym";
                    txtts8="Aby aktywować bezpłatną usługę, zaznacz pole wyboru i kliknij \"Zapisz\".";
                    txtts9="Aby dostosować usługę, kliknij \"Zarządzaj\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="CO2 Application";
                    txtts4="Com este serviço vamos calcular a percentagem de redução de CO2 para cada página optimizada. Com CO2 Application vamos para:";
                    txtts5="meça o tamanho da página e os recursos que a compõem";
                    txtts6="compare os resultados com trabalhos de otimização anteriores executados";
                    txtts7="retorna aos visitantes do site a diferença expressa em porcentagem com precisão e em tempo real";
                    txtts8="Para ativar o serviço gratuito, marque a caixa de seleção e clique em \"Salvar\".";
                    txtts9="Para personalizar o serviço clique em \"Gerenciar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="CO2 Application";
                    txtts4="С помощью этой услуги мы идем, чтобы рассчитать процент сокращения выбросов CO2 для каждой оптимизированной страницы. С приложением CO2 мы переходим к:";
                    txtts5="измерьте размер страницы и ресурсы, из которых она состоит";
                    txtts6="сравнить результаты с предыдущими выполненными заданиями по оптимизации";
                    txtts7="возвращать посетителям сайта разницу, выраженную в процентах точно и в режиме реального времени";
                    txtts8="Чтобы активировать бесплатную услугу, установите флажок и нажмите \"Сохранить\".";
                    txtts9="Чтобы настроить службу, нажмите \"Управление\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="二氧化碳应用";
                    txtts4="通过这项服务，我们可以计算每个优化页面的二氧化碳减排百分比。通过二氧化碳应用程序，我们可以：";
                    txtts5="测量页面的大小以及组成页面的资源";
                    txtts6="将结果与之前执行的优化作业进行比较";
                    txtts7="向网站访问者返回准确且实时的以百分比表示的差异";
                    txtts8="要激活免费服务，请勾选复选框并单击\"保存\"。";
                    txtts9="要自定义服务，请单击\"管理\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="CO2 Application";
                    txtts4="עם שירות זה אנו הולכים לחישוב אחוז הפחתת CO2 עבור כל עמוד מותאם. עם יישום CO2 אנו הולכים אל:";
                    txtts5="מדוד את גודל העמוד והמשאבים המרכיבים אותו";
                    txtts6="השווה תוצאות עם עבודות אופטימיזציה קודמות שבוצעו";
                    txtts7="החזר למבקרים באתר את ההפרש מבוטא באחוזים במדויק ובזמן אמת";
                    txtts8="כדי להפעיל את השירות החינמי, סמן את שדה הסימון ולחץ על-שמור-.";
                    txtts9="כדי להתאים אישית את השירות לחץ על-ניהול-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="CO2 Application";
                    txtts4="Cum hoc officium recipis CO2 remissionis computare pro pagina optimizata unaquaque. Cum CO2 applicatione itur ad:";
                    txtts5="metiri magnitudinem paginae et facultates quae componunt";
                    txtts6="conferre proventus cum priorem optimizationem jobs peractis";
                    txtts7="redire ad website visitatores differentiam expressam recipis accurate et in tempore reali";
                    txtts8="Ad liberum servitium excitandum, reprehendo campum tick et deprime in \"Save\".";
                    txtts9="To customize the service click on \"Manage\".";
                }else{
                    txtts3="CO2 Application";
                    txtts4="With this service we go to calculate the percentage of CO2 abatement for each optimized page. With CO2 Application we go to:";
                    txtts5="measure the size of the page and the resources that make it up";
                    txtts6="compare results with previous optimization jobs performed";
                    txtts7="return to website visitors the difference expressed as a percentage accurately and in real time";
                    txtts8="To activate the free service, tick the checkbox field and click on \"Save\".";
                    txtts9="To customize the service click on \"Manage\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.6/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>&bull; " + txtts5 + "<br><br>&bull; " + txtts6 + "<br><br>&bull; " + txtts7 + "<br><br>" + txtts8 + "<br><br>" + txtts9 + "<div id=\"index_guide_ts20\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts24')){
                    document.getElementById('guideboxts24').className="guidebox_selected_ts";
                    document.getElementById("guideboxts24").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 25){
                if(hreflang_toppersystem == "it"){
                    txtts3="Ottimizzazione risorse Javascript";
                    txtts4="Durante la fase di ottimizzazione delle pagine del sito i file Javascript interni sono minimizzati nativamente e possono essere richiamati nei codici sorgenti in modalità automatic, preload o defer. Inoltre è possibile applicare una funzione che ritarda il caricamento e esecuzione delle risorse a vantaggio dei tempi di caricamento della pagina.";
                    txtts5="Per impostare la modalità preferita clicca su \"Gestisci\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تحسين موارد جافا سكريبت";
                    txtts4="أثناء مرحلة تحسين صفحات الموقع، يتم تصغير ملفات Javascript الداخلية بشكل أصلي ويمكن استدعاؤها في أكواد المصدر في الوضع التلقائي أو التحميل المسبق أو التأجيل. علاوة على ذلك، من الممكن تطبيق وظيفة تؤخر تحميل الموارد وتنفيذها لصالح أوقات تحميل الصفحة.";
                    txtts5="لتعيين الوضع المفضل لديك ، انقر فوق  إدارة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Javascript-Ressourcen optimieren";
                    txtts4="Während der Optimierungsphase der Site-Seiten werden die internen Javascript-Dateien nativ minimiert und können im automatischen, Vorlade- oder Verzögerungsmodus in den Quellcodes abgerufen werden. Darüber hinaus ist es möglich, eine Funktion anzuwenden, die das Laden und Ausführen von Ressourcen zugunsten der Seitenladezeiten verzögert.";
                    txtts5="Um Ihren bevorzugten Modus festzulegen, klicken Sie auf \"Verwalten\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Optimizar los recursos de Javascript";
                    txtts4="Durante la fase de optimización de las páginas del sitio, los archivos Javascript internos se minimizan de forma nativa y se pueden recuperar en los códigos fuente en modo automático, precargado o aplazado. Además, es posible aplicar una función que retrase la carga y ejecución de recursos en beneficio de los tiempos de carga de la página.";
                    txtts5="Para configurar su modo preferido, haga clic en \"Administrar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Optimiser les ressources Javascript";
                    txtts4="Lors de la phase d'optimisation des pages du site, les fichiers Javascript internes sont nativement minimisés et peuvent être rappelés dans les codes sources en mode automatique, préchargement ou différé. De plus, il est possible d'appliquer une fonction qui retarde le chargement et l'exécution des ressources au profit des temps de chargement des pages.";
                    txtts5="Pour définir votre mode préféré, cliquez sur \"Gérer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="जावास्क्रिप्ट संसाधनों को अनुकूलित करें";
                    txtts4="साइट पृष्ठों के अनुकूलन चरण के दौरान, आंतरिक जावास्क्रिप्ट फ़ाइलों को मूल रूप से छोटा किया जाता है और स्वचालित, प्रीलोड या स्थगित मोड में स्रोत कोड में वापस बुलाया जा सकता है। इसके अलावा, ऐसे फ़ंक्शन को लागू करना संभव है जो पेज लोडिंग समय के लाभ के लिए संसाधनों की लोडिंग और निष्पादन में देरी करता है।";
                    txtts5="अपना पसंदीदा मोड सेट करने के लिए \"मैनेज\" पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="JavaScript リソースの最適化";
                    txtts4="サイト ページの最適化フェーズ中に、内部 Javascript ファイルはネイティブに最小化され、自動、プリロード、または遅延モードでソース コード内で呼び出すことができます。 さらに、ページの読み込み時間を有利にするために、リソースの読み込みと実行を遅らせる機能を適用することもできます。";
                    txtts5="優先モードを設定するには、「管理」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Optymalizuj zasoby Javascript";
                    txtts4="Podczas fazy optymalizacji stron witryny wewnętrzne pliki JavaScript są natywnie minimalizowane i można je przywołać w kodach źródłowych w trybie automatycznym, wstępnym ładowaniu lub opóźnionym. Ponadto możliwe jest zastosowanie funkcji opóźniającej ładowanie i wykonanie zasobów na korzyść czasu ładowania strony.";
                    txtts5="Aby ustawić preferowany tryb, kliknij \"Zarządzaj\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Otimizar Recursos Javascript";
                    txtts4="Durante a fase de otimização das páginas do site, os arquivos Javascript internos são minimizados nativamente e podem ser recuperados nos códigos-fonte em modo automático, pré-carregamento ou adiamento. Além disso, é possível aplicar uma função que atrasa o carregamento e a execução de recursos aproveitando o tempo de carregamento da página.";
                    txtts5="Para configurar seu modo preferido clique em \"Gerenciar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Оптимизировать ресурсы Javascript";
                    txtts4="На этапе оптимизации страниц сайта внутренние файлы Javascript изначально сворачиваются и могут быть вызваны в исходных кодах в автоматическом режиме, в режиме предварительной загрузки или отсрочки. Кроме того, можно применить функцию, которая задерживает загрузку и выполнение ресурсов, чтобы сократить время загрузки страницы.";
                    txtts5="Чтобы установить предпочитаемый режим, нажмите \"Управление\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="优化Javascript资源";
                    txtts4="在网站页面的优化阶段，内部 Javascript 文件会被本地最小化，并且可以自动、预加载或延迟模式在源代码中调用。 此外，可以应用延迟资源加载和执行的功能，以节省页面加载时间。";
                    txtts5="要设置您的首选模式，请单击\"管理\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="בצע אופטימיזציה של משאבי Javascript";
                    txtts4="במהלך שלב האופטימיזציה של דפי האתר, קבצי ה-Javascript הפנימיים ממוזערים באופן טבעי וניתן להיזכר בהם בקודי המקור במצב אוטומטי, טעינה מוקדמת או דחייה. יתרה מזאת, ניתן ליישם פונקציה המעכבת את הטעינה והביצוע של משאבים לטובת זמני טעינת הדפים.";
                    txtts5="כדי להגדיר את המצב המועדף עליך לחץ על-ניהול-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Optimize Javascript Resources";
                    txtts4="Durante periodo optimization situs paginae, fasciculi Javascript interni in patria minimi sunt et revocari possunt in codicibus fons automati, preload vel differendi modum. Praeterea munus applicari potest, quod onerationem et executionem opum tardat ad commodum paginae temporis loading.";
                    txtts5="To pone modum praelatum strepita in \"Manage\".";
                }else{
                    txtts3="Optimize Javascript Resources";
                    txtts4="During the optimization phase of the site pages, the internal Javascript files are natively minimized and can be recalled in the source codes in automatic, preload or defer mode. Furthermore, it is possible to apply a function that delays the loading and execution of resources to the advantage of page loading times.";
                    txtts5="To set your preferred mode click on \"Manage\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.7/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>" + txtts5 + "<div id=\"index_guide_ts21\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts25')){
                    document.getElementById('guideboxts25').className="guidebox_selected_ts";
                    document.getElementById("guideboxts25").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 26){
                if(hreflang_toppersystem == "it"){
                    txtts3="Ottimizzazione delle risorse CSS";
                    txtts4="Durante la fase di ottimizzazione tutti i file CSS sono richiamati dai browser in modalità performante come indicato dalle best practices.";
                    txtts5="Per escludere i file non compatibili con il tuo sito clicca su \"Gestisci\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="تحسين موارد CSS";
                    txtts4="أثناء مرحلة التحسين ، يتم استدعاء جميع ملفات CSS بواسطة المستعرضات في وضع الأداء كما هو موضح في أفضل الممارسات.";
                    txtts5="لاستبعاد الملفات غير المتوافقة مع موقعك ، انقر فوق  إدارة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="CSS-Ressourcen optimieren";
                    txtts4="Während der Optimierungsphase werden alle CSS-Dateien von Browsern im Leistungsmodus aufgerufen, wie durch Best Practices angegeben.";
                    txtts5="Um Dateien auszuschließen, die nicht mit Ihrer Website kompatibel sind, klicken Sie auf \"Verwalten\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Optimizando recursos CSS";
                    txtts4="Durante la fase de optimización, todos los archivos CSS son llamados por los navegadores en modo de rendimiento según lo indicado por las mejores prácticas.";
                    txtts5="Para excluir archivos no compatibles con su sitio, haga clic en \"Administrar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Optimisation des ressources CSS";
                    txtts4="Pendant la phase d'optimisation, tous les fichiers CSS sont appelés par les navigateurs en mode performance comme indiqué par les meilleures pratiques.";
                    txtts5="Pour exclure les fichiers non compatibles avec votre site, cliquez sur \"Gérer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="सीएसएस संसाधनों का अनुकूलन";
                    txtts4="अनुकूलन चरण के दौरान सभी सीएसएस फाइलों को ब्राउज़र द्वारा सर्वोत्तम प्रथाओं के अनुसार प्रदर्शन मोड में कॉल किया जाता है।";
                    txtts5="अपनी साइट के साथ संगत नहीं होने वाली फ़ाइलों को बाहर करने के लिए \"प्रबंधित\" पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="CSS リソースの最適化";
                    txtts4="最適化フェーズでは、ベスト プラクティスに示されているように、すべての CSS ファイルがパフォーマンス モードでブラウザによって呼び出されます。";
                    txtts5="サイトと互換性のないファイルを除外するには、「管理」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Optymalizacja zasobów CSS";
                    txtts4="Podczas fazy optymalizacji wszystkie pliki CSS są wywoływane przez przeglądarki w trybie wydajności, zgodnie z najlepszymi praktykami.";
                    txtts5="Aby wykluczyć pliki niezgodne z Twoją witryną, kliknij \"Zarządzaj\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Otimizando recursos CSS";
                    txtts4="Durante a fase de otimização, todos os arquivos CSS são chamados pelos navegadores em modo de desempenho conforme indicado pelas melhores práticas.";
                    txtts5="Para excluir arquivos incompatíveis com seu site clique em \"Gerenciar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Оптимизация ресурсов CSS";
                    txtts4="На этапе оптимизации все файлы CSS вызываются браузерами в режиме производительности, как указано в рекомендациях.";
                    txtts5="Чтобы исключить файлы, несовместимые с вашим сайтом, нажмите \"Управление\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="优化 CSS 资源";
                    txtts4="在优化阶段，浏览器将按照最佳实践所示以性能模式调用所有 CSS 文件。";
                    txtts5="要排除与您的网站不兼容的文件，请单击\"管理\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="אופטימיזציה של משאבי CSS";
                    txtts4="במהלך שלב האופטימיזציה כל קובצי ה-CSS נקראים על ידי דפדפנים במצב ביצועים כפי שמצוין על ידי שיטות עבודה מומלצות.";
                    txtts5="כדי לא לכלול קבצים שאינם תואמים לאתר שלך לחץ על-ניהול-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Optimizing CSS resources";
                    txtts4="Per optimizationem periodi omnes fasciculi CSS vocantur ab navigatoribus in modo perficiendi sicut per optimos usus demonstratur";
                    txtts5="Excludere files not compatible with your site click on \"Manage\".";
                }else{
                    txtts3="Optimizing CSS resources";
                    txtts4="During the optimization phase all CSS files are called by browsers in performance mode as indicated by best practices.";
                    txtts5="To exclude files not compatible with your site click on \"Manage\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.8/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<div id=\"index_guide_ts22\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts26')){
                    document.getElementById('guideboxts26').className="guidebox_selected_ts";
                    document.getElementById("guideboxts26").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 27){
                if(hreflang_toppersystem == "it"){
                    txtts3="Aggiornamento automatico delle pagine ottimizzate";
                    txtts4="A qualsiasi variazione dei codici sorgenti di ogni pagina ottimizzata sarà richiesto automaticamente una nuova ottimizzazione. I dati precedentemente salvati saranno ripristinati durante il processo. ";
                    txtts5="Ti consigliamo di utilizzare questa funzionalità con un piano di abbonamento attivo anche se è usufruibile con il piano dei crediti.";
                    txtts6="Per attivare questa funzionalità spunta il campo checkbox e clicca su \"Salva\".";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="التحديث التلقائي للصفحات المحسنة";
                    txtts4="أي تغيير في أكواد المصدر لكل صفحة محسّنة سيتطلب تحسينًا جديدًا تلقائيًا. ستتم استعادة البيانات المحفوظة مسبقًا أثناء العملية.";
                    txtts5="نوصي باستخدام هذه الميزة مع خطة اشتراك نشطة حتى لو كانت متوفرة مع خطة الائتمان.";
                    txtts6="لتنشيط هذه الميزة ، حدد خانة الاختيار وانقر على  حفظ.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Automatische Aktualisierung optimierter Seiten";
                    txtts4="Jede Variation des Quellcodes jeder optimierten Seite erfordert automatisch eine neue Optimierung. Zuvor gespeicherte Daten werden während des Vorgangs wiederhergestellt. ";
                    txtts5="Wir empfehlen die Verwendung dieser Funktion mit einem aktiven Abonnementplan, auch wenn sie mit dem Kreditplan verfügbar ist.";
                    txtts6="Um diese Funktion zu aktivieren, aktivieren Sie das Kontrollkästchen und klicken Sie auf \"Speichern\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Actualización automática de páginas optimizadas";
                    txtts4="Cualquier variación de los códigos fuente de cada página optimizada requerirá automáticamente una nueva optimización. Los datos previamente guardados se restaurarán durante el proceso. ";
                    txtts5="Recomendamos usar esta función con un plan de suscripción activo incluso si está disponible con el plan de crédito.";
                    txtts6="Para activar esta función, marque la casilla de verificación y haga clic en \"Guardar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Mise à jour automatique des pages optimisées";
                    txtts4="Toute variation des codes sources de chaque page optimisée nécessitera automatiquement une nouvelle optimisation. Les données précédemment enregistrées seront restaurées au cours du processus. ";
                    txtts5="Nous vous recommandons d'utiliser cette fonctionnalité avec un plan d'abonnement actif même si elle est disponible avec le plan de crédit.";
                    txtts6="Pour activer cette fonctionnalité, cochez la case et cliquez sur \"Enregistrer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="अनुकूलित पृष्ठों का स्वचालित अद्यतन";
                    txtts4="प्रत्येक अनुकूलित पृष्ठ के स्रोत कोड में किसी भी बदलाव के लिए स्वचालित रूप से एक नए अनुकूलन की आवश्यकता होगी। प्रक्रिया के दौरान पहले से सहेजा गया डेटा पुनर्स्थापित किया जाएगा।";
                    txtts5="हम सक्रिय सदस्यता योजना के साथ इस सुविधा का उपयोग करने की सलाह देते हैं, भले ही यह क्रेडिट योजना के साथ उपलब्ध हो।";
                    txtts6="इस सुविधा को सक्रिय करने के लिए, चेकबॉक्स फ़ील्ड पर टिक करें और \"सहेजें\"पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="最適化されたページの自動更新";
                    txtts4="最適化された各ページのソース コードのバリエーションには、自動的に新しい最適化が必要になります。以前に保存したデータはプロセス中に復元されます。 ";
                    txtts5="この機能は、クレジット プランで利用できる場合でも、有効なサブスクリプション プランで使用することをお勧めします。";
                    txtts6="この機能を有効にするには、チェックボックス フィールドにチェックを入れ、「保存」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Automatyczna aktualizacja zoptymalizowanych stron";
                    txtts4="Każda odmiana kodów źródłowych każdej zoptymalizowanej strony będzie automatycznie wymagać nowej optymalizacji. Wcześniej zapisane dane zostaną przywrócone podczas procesu. ";
                    txtts5="Zalecamy korzystanie z tej funkcji z aktywnym planem subskrypcji, nawet jeśli jest ona dostępna z planem kredytowym.";
                    txtts6="Aby aktywować tę funkcję, zaznacz pole wyboru i kliknij \"Zapisz\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Atualização automática de páginas otimizadas";
                    txtts4="Qualquer variação dos códigos-fonte de cada página otimizada exigirá automaticamente uma nova otimização. Os dados salvos anteriormente serão restaurados durante o processo. ";
                    txtts5="Recomendamos usar este recurso com um plano de assinatura ativo, mesmo que esteja disponível com o plano de crédito.";
                    txtts6="Para ativar este recurso, marque a caixa de seleção e clique em \"Salvar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Автоматическое обновление оптимизированных страниц";
                    txtts4="Любая вариация исходных кодов каждой оптимизированной страницы автоматически потребует новой оптимизации. В процессе будут восстановлены ранее сохраненные данные.";
                    txtts5="Мы рекомендуем использовать эту функцию с активным планом подписки, даже если она доступна с кредитным планом.";
                    txtts6="Чтобы активировать эту функцию, установите флажок и нажмите \"Сохранить\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="自动更新优化页面";
                    txtts4="每个优化页面源代码的任何变化都将自动需要新的优化。在此过程中将恢复之前保存的数据。";
                    txtts5="我们建议在有效的订阅计划中使用此功能，即使该功能可与信用计划一起使用。";
                    txtts6="要激活此功能，请勾选复选框字段并单击\"保存\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="עדכון אוטומטי של דפים מותאמים";
                    txtts4="כל וריאציה של קודי המקור של כל עמוד שעבר אופטימיזציה תדרוש אוטומטית אופטימיזציה חדשה. הנתונים שנשמרו בעבר ישוחזרו במהלך התהליך.";
                    txtts5="אנו ממליצים להשתמש בתכונה זו עם תוכנית מנוי פעילה גם אם היא זמינה עם תוכנית האשראי.";
                    txtts6="כדי להפעיל תכונה זו, סמן את שדה הסימון ולחץ על-שמור-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Automatic renovatio paginarum optimized";
                    txtts4="Quaelibet variatio fontium Codicum cuiusque paginae optimized statim novam optimizationem requiret. Data antea servatae in processu restituentur";
                    txtts5=" commendamus hoc pluma utentes cum consilio subscriptionis activae, etiam si cum consilio fidei praesto est";
                    txtts6="Ut hanc plumam strenue, pressione campi tick et deprime in \"Save\".";
                }else{
                    txtts3="Automatic update of optimized pages";
                    txtts4="Any variation of the source codes of each optimized page will automatically require a new optimization. The previously saved data will be restored during the process. ";
                    txtts5="We recommend using this feature with an active subscription plan even if it is available with the credit plan.";
                    txtts6="To activate this feature, tick the checkbox field and click on \"Save\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.9/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br><br>" + txtts5 + "<br><br>" + txtts6 + "<div id=\"index_guide_ts23\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts27')){
                    document.getElementById('guideboxts27').className="guidebox_selected_ts";
                    document.getElementById("guideboxts27").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 28){
                if(hreflang_toppersystem == "it"){
                    txtts3="Rimozione cache delle ottimizzazioni";
                    txtts4="Il processo di rimozione della cache del plugin include:";
                    txtts5="tutte le immagini ottimizzate";
                    txtts6="tutte le risorse Javascript ottimizzate";
                    txtts7="tutte le risorse CSS ottimizzate";
                    txtts8="tutte le pagine ottimizzate";
                    txtts9="tutti i file di log";
                    txtts10="Si ricorda che la rimozione della cache del plugin è un processo irreversile. Successivamente sarà necessario eseguire nuovamente le ottimizzazioni delle pagine.";
                    txtts11="Per avviare il processo clicca su \"Gestisci\".";                   
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="إزالة ذاكرة التخزين المؤقت للتحسينات";
                    txtts4="تتضمن عملية إزالة ذاكرة التخزين المؤقت للمكونات الإضافية:";
                    txtts5="تم تحسين كافة الصور";
                    txtts6="تم تحسين كافة موارد جافا سكريبت";
                    txtts7="تم تحسين كافة أصول CSS";
                    txtts8="تم تحسين كافة الصفحات";
                    txtts9="كافة ملفات السجل";
                    txtts10="تذكر أن إزالة ذاكرة التخزين المؤقت للملحق هي عملية لا رجوع فيها. بعد ذلك ستحتاج إلى إجراء تحسينات على الصفحة مرة أخرى.";
                    txtts11="لبدء العملية ، انقر فوق  إدارة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Optimierungscache wird entfernt";
                    txtts4="Plugin-Cache-Entfernungsprozess umfasst:";
                    txtts5="alle Bilder optimiert";
                    txtts6="alle Javascript-Ressourcen optimiert";
                    txtts7="alle CSS-Assets optimiert";
                    txtts8="alle Seiten optimiert";
                    txtts9="alle Protokolldateien";
                    txtts10="Denken Sie daran, dass das Entfernen des Plugin-Cache ein irreversibler Vorgang ist. Anschließend müssen Sie die Seitenoptimierungen erneut durchführen.";
                    txtts11="Um den Vorgang zu starten, klicken Sie auf \"Verwalten\".";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Eliminando caché de optimizaciones";
                    txtts4="El proceso de eliminación de caché del complemento incluye:";
                    txtts5="todas las imágenes optimizadas";
                    txtts6="todos los recursos Javascript optimizados";
                    txtts7="todos los recursos CSS optimizados";
                    txtts8="todas las páginas optimizadas";
                    txtts9="todos los archivos de registro";
                    txtts10="Recuerde que eliminar el caché del complemento es un proceso irreversible. Luego deberá realizar optimizaciones de página nuevamente.";
                    txtts11="Para iniciar el proceso haga clic en \"Gestionar\".";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Suppression du cache des optimisations";
                    txtts4="Le processus de suppression du cache du plugin inclut :";
                    txtts5="toutes les images optimisées";
                    txtts6="toutes les ressources Javascript optimisées";
                    txtts7="tous les éléments CSS optimisés";
                    txtts8="toutes les pages optimisées";
                    txtts9="tous les fichiers journaux";
                    txtts10="N'oubliez pas que la suppression du cache du plugin est un processus irréversible. Ensuite, vous devrez à nouveau effectuer des optimisations de page.";
                    txtts11="Pour démarrer le processus, cliquez sur \"Gérer\".";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="अनुकूलन कैश हटा रहा है";
                    txtts4="प्लगइन कैश हटाने की प्रक्रिया में शामिल हैं:";
                    txtts5="सभी छवियाँ अनुकूलित";
                    txtts6="सभी जावास्क्रिप्ट संसाधन अनुकूलित";
                    txtts7="सभी सीएसएस संपत्तियां अनुकूलित";
                    txtts8="सभी पृष्ठ अनुकूलित";
                    txtts9="सभी लॉग फ़ाइलें";
                    txtts10="याद रखें कि प्लगइन कैश को हटाना एक अपरिवर्तनीय प्रक्रिया है। बाद में आपको फिर से पेज ऑप्टिमाइज़ेशन करने की आवश्यकता होगी।";
                    txtts11="प्रक्रिया शुरू करने के लिए \"प्रबंधित\" पर क्लिक करें।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="最適化キャッシュを削除しています";
                    txtts4="プラグイン キャッシュの削除プロセスには以下が含まれます:";
                    txtts5="すべての画像が最適化されました";
                    txtts6="すべての Javascript リソースが最適化されました";
                    txtts7="すべての CSS アセットが最適化されました";
                    txtts8="すべてのページが最適化されました";
                    txtts9="すべてのログ ファイル";
                    txtts10="プラグイン キャッシュの削除は元に戻せないプロセスであることに注意してください。その後、ページの最適化を再度実行する必要があります。";
                    txtts11="プロセスを開始するには、「管理」をクリックしてください。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Usuwanie pamięci podręcznej optymalizacji";
                    txtts4="Proces usuwania pamięci podręcznej wtyczek obejmuje:";
                    txtts5="zoptymalizowane wszystkie obrazy";
                    txtts6="zoptymalizowane wszystkie zasoby Javascript";
                    txtts7="zoptymalizowane wszystkie zasoby CSS";
                    txtts8="wszystkie strony zoptymalizowane";
                    txtts9="wszystkie pliki dziennika";
                    txtts10="Pamiętaj, że usunięcie pamięci podręcznej wtyczek jest procesem nieodwracalnym. Następnie będziesz musiał ponownie przeprowadzić optymalizację strony.";
                    txtts11="Aby rozpocząć proces, kliknij \"Zarządzaj\".";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Removendo cache de otimizações";
                    txtts4="O processo de remoção do cache do plug-in inclui:";
                    txtts5="todas as imagens otimizadas";
                    txtts6="todos os recursos Javascript otimizados";
                    txtts7="todos os recursos CSS otimizados";
                    txtts8="todas as páginas otimizadas";
                    txtts9="todos os arquivos de registro";
                    txtts10="Lembre-se que a remoção do cache do plug-in é um processo irreversível. Posteriormente, você precisará executar as otimizações da página novamente.";
                    txtts11="Para iniciar o processo clique em \"Gerenciar\".";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Удаление кэша оптимизаций";
                    txtts4="Процесс удаления кеша плагинов включает в себя:";
                    txtts5="все изображения оптимизированы";
                    txtts6="оптимизированы все ресурсы Javascript";
                    txtts7="оптимизированы все ресурсы CSS";
                    txtts8="все страницы оптимизированы";
                    txtts9="все файлы журнала";
                    txtts10="Помните, что удаление кеша плагинов — необратимый процесс. После этого вам нужно будет снова выполнить оптимизацию страницы.";
                    txtts11="Чтобы начать процесс, нажмите \"Управление\".";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="正在删除优化缓存";
                    txtts4="插件缓存清除过程包括：";
                    txtts5="所有图像均已优化";
                    txtts6="所有 Javascript 资源均已优化";
                    txtts7="所有 CSS 资源均已优化";
                    txtts8="所有页面均已优化";
                    txtts9="所有日志文件";
                    txtts10="请记住，删除插件缓存是一个不可逆的过程。之后您将需要再次执行页面优化。";
                    txtts11="要启动该过程，请单击\"管理\"。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="הסרת מטמון אופטימיזציות";
                    txtts4="תהליך הסרת מטמון תוסף כולל:";
                    txtts5="כל התמונות מותאמות";
                    txtts6="כל משאבי Javascript מותאמים";
                    txtts7="כל נכסי ה-CSS מותאמים";
                    txtts8="כל הדפים מותאמים";
                    txtts9="כל קובצי היומן";
                    txtts10="זכור שהסרת מטמון הפלאגין היא תהליך בלתי הפיך. לאחר מכן תצטרך לבצע שוב אופטימיזציות של העמוד.";
                    txtts11="כדי להתחיל את התהליך לחץ על-ניהול-.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="optimizations removere cache";
                    txtts4="Plugin cache processus includit remotionem:";
                    txtts5="all images optimized";
                    txtts6="all Javascript resources optimized";
                    txtts7="all CSS res optimized";
                    txtts8="all pages optimized";
                    txtts9="omnia stipes lima";
                    txtts10="Memento te globosum cella removere processus irreversibilis est. Postea pagina optimizations iterum conficere debes";
                    txtts11="Incipere processum deprime in \"Manage\".";
                }else{
                    txtts3="Removing optimizations cache";
                    txtts4="Plugin cache removal process includes:";
                    txtts5="all images optimized";
                    txtts6="all Javascript resources optimized";
                    txtts7="all CSS assets optimized";
                    txtts8="all pages optimized";
                    txtts9="all log files";
                    txtts10="Remember that removing the plugin cache is an irreversible process. Afterwards you will need to perform page optimizations again.";
                    txtts11="To start the process click on \"Manage\".";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.10/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</strong></big><br><br>" + txtts4 + "<br>&bull; " + txtts5 + "<br>&bull; " + txtts6 + "<br>&bull; " + txtts7 + "<br>&bull; " + txtts8 + "<br>&bull; " + txtts9 + "<br><br>" + txtts10 + "<br><br>" + txtts11 + "<div id=\"index_guide_ts24\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts28')){
                    document.getElementById('guideboxts28').className="guidebox_selected_ts";
                    document.getElementById("guideboxts28").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 29){
                if(hreflang_toppersystem == "it"){
                    txtts3="Indirizzo versione di stage e di produzione del sito";
                    txtts4="Cliccando su \"Gestisci\" puoi modificare l'indirizzo stage del sito.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="عنوان المرحلة وإصدار الإنتاج للموقع";
                    txtts4="بالنقر فوق  إدارة  يمكنك تغيير عنوان المرحلة للموقع.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Adresse der Bühnen- und Produktionsversion der Site";
                    txtts4="Durch Klicken auf \"Verwalten\" können Sie die Bühnenadresse der Site ändern.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Dirección del escenario y versión de producción del sitio";
                    txtts4="Al hacer clic en \"Administrar\" puede cambiar la dirección de etapa del sitio.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Adresse de la version scénique et de production du site";
                    txtts4="En cliquant sur \"Gérer\" vous pouvez changer l'adresse d'étape du site.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="साइट के मंच और उत्पादन संस्करण का पता";
                    txtts4="\"मैनेज\" पर क्लिक करके आप साइट का स्टेज एड्रेस बदल सकते हैं।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="ステージおよび本番バージョンのサイトのアドレス";
                    txtts4="「管理」をクリックすると、サイトのステージ アドレスを変更できます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Adres wersji scenicznej i produkcyjnej strony";
                    txtts4="Klikając \"Zarządzaj\" możesz zmienić adres sceny witryny.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Endereço do palco e versão de produção do site";
                    txtts4="Ao clicar em \"Gerenciar\" você pode alterar o endereço de palco do site.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Адрес сценической и рабочей версии сайта";
                    txtts4="Нажав на \"Управление\", вы можете изменить сценический адрес сайта.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="站点的舞台和生产版本地址";
                    txtts4="通过点击\"管理\"，您可以更改站点的阶段地址。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="כתובת הבמה וגרסת ההפקה של האתר";
                    txtts4="בלחיצה על-ניהול- תוכלו לשנות את כתובת הבמה של האתר.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Oratio scaenae et productionis situs";
                    txtts4="strepitando in \"Manage\" mutare potes electronicam scaenam situs.";
                }else{
                    txtts3="Address of the stage and production version of the site";
                    txtts4="By clicking on \"Manage\" you can change the stage address of the site.";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.11/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</big></strong><br><br>" + txtts4 + "<div id=\"index_guide_ts25\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts29')){
                    document.getElementById('guideboxts29').className="guidebox_selected_ts";
                    document.getElementById("guideboxts29").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 30){
                if(hreflang_toppersystem == "it"){
                    txtts3="Importa o Esporta dataset CSV";
                    txtts4="Cliccando su \"Gestisci\", puoi esportare il dataset delle pagine ottimizzate in un file CSV. Questo file può essere importato per applicare rapidamente le modifiche alle pagine ottimizzate.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="استيراد أو تصدير مجموعات بيانات CSV";
                    txtts4="من خلال النقر على إدارة، يمكنك تصدير مجموعة بيانات الصفحات المحسنة إلى ملف CSV. يمكن استيراد هذا الملف لتطبيق التغييرات بسرعة على الصفحات المحسنة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="CSV-Datensätze importieren oder exportieren";
                    txtts4="Durch Klicken auf „Verwalten“ können Sie den Datensatz der optimierten Seiten in eine CSV-Datei exportieren. Diese Datei kann importiert werden, um Änderungen schnell auf optimierte Seiten anzuwenden.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Importar o exportar conjuntos de datos CSV";
                    txtts4="Al hacer clic en \"Administrar\", puede exportar el conjunto de datos de páginas optimizadas a un archivo CSV. Este archivo se puede importar para aplicar cambios rápidamente a páginas optimizadas.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Importer ou exporter des ensembles de données CSV";
                    txtts4="En cliquant sur \"Gérer\", vous pouvez exporter le jeu de données des pages optimisées vers un fichier CSV. Ce fichier peut être importé pour appliquer rapidement les modifications aux pages optimisées.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="सीएसवी डेटासेट आयात या निर्यात करें";
                    txtts4="\"प्रबंधित करें\" पर क्लिक करके, आप अनुकूलित पृष्ठों के डेटासेट को CSV फ़ाइल में निर्यात कर सकते हैं। अनुकूलित पृष्ठों पर परिवर्तनों को शीघ्रता से लागू करने के लिए इस फ़ाइल को आयात किया जा सकता है।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="CSV データセットのインポートまたはエクスポート";
                    txtts4="「管理」をクリックすると、最適化されたページのデータセットを CSV ファイルにエクスポートできます。 このファイルをインポートすると、最適化されたページに変更をすぐに適用できます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Importuj lub eksportuj zestawy danych CSV";
                    txtts4="Klikając „Zarządzaj” możesz wyeksportować zbiór danych zoptymalizowanych stron do pliku CSV. Plik ten można zaimportować, aby szybko zastosować zmiany w zoptymalizowanych stronach.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Importar ou exportar conjuntos de dados CSV";
                    txtts4="Ao clicar em \"Gerenciar\", você pode exportar o conjunto de dados de páginas otimizadas para um arquivo CSV. Este arquivo pode ser importado para aplicar alterações rapidamente nas páginas otimizadas.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Импорт или экспорт наборов данных CSV";
                    txtts4="Нажав «Управление», вы можете экспортировать набор данных оптимизированных страниц в файл CSV. Этот файл можно импортировать, чтобы быстро применить изменения к оптимизированным страницам.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="导入或导出 CSV 数据集";
                    txtts4="通过点击“管理”，您可以将优化页面的数据集导出到CSV文件。 可以导入此文件以快速将更改应用到优化页面。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="ייבא או ייצא מערכי נתונים של CSV";
                    txtts4="על ידי לחיצה על ניהול, תוכלו לייצא את מערך הנתונים של דפים שעברו אופטימיזציה לקובץ CSV. ניתן לייבא קובץ זה כדי להחיל שינויים במהירות על דפים שעברו אופטימיזציה.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Importo vel Import CSV datasets";
                    txtts4="Strepitando in \"Manage\", dataset paginarum optimizedium ad fasciculum CSV exportare potes. Hic fasciculus importari potest ut cito mutationes in paginis optimizedis applicetur.";
                }else{
                    txtts3="Import or Export CSV datasets";
                    txtts4="By clicking on \"Manage\", you can export the dataset of optimized pages to a CSV file. This file can be imported to quickly apply changes to optimized pages.";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " 14.12/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</big></strong><br><br>" + txtts4 + "<div id=\"index_guide_ts50\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts30')){
                    document.getElementById('guideboxts30').className="guidebox_selected_ts";
                    document.getElementById("guideboxts30").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 31){
                if(hreflang_toppersystem == "it"){
                    txtts3="Intelligenza Artificiale";
                    txtts4="Cliccando su \"Gestisci\", puoi inserire la tua Api Key di Chat GPT per correggere i meta dati title e description durante l'ottimizzazione delle pegine.";
                }else if(hreflang_toppersystem == "ar"){
                    txtts3="الذكاء الاصطناعي";
                    txtts4="من خلال النقر على إدارة، يمكنك إدخال مفتاح GPT Chat Api الخاص بك لتصحيح البيانات الوصفية للعنوان والوصف أثناء تحسين الصفحة.";
                }else if(hreflang_toppersystem == "de"){
                    txtts3="Künstliche Intelligenz";
                    txtts4="Durch Klicken auf Verwalten können Sie Ihren GPT-Chat-API-Schlüssel eingeben, um die Titel- und Beschreibungsmetadaten während der Seitenoptimierung zu korrigieren.";
                }else if(hreflang_toppersystem == "es"){
                    txtts3="Inteligencia artificial";
                    txtts4="Al hacer clic en \"Administrar\", puede ingresar su clave API de chat GPT para corregir los metadatos del título y la descripción durante la optimización de la página.";
                }else if(hreflang_toppersystem == "fr"){
                    txtts3="Intelligence artificielle";
                    txtts4="En cliquant sur \"Gérer\", vous pouvez saisir votre clé API GPT Chat pour corriger les métadonnées de titre et de description lors de l'optimisation de la page.";
                }else if(hreflang_toppersystem == "hi"){
                    txtts3="कृत्रिम होशियारी";
                    txtts4="\"प्रबंधित करें\" पर क्लिक करके, आप पृष्ठ अनुकूलन के दौरान शीर्षक और विवरण मेटा डेटा को सही करने के लिए अपनी जीपीटी चैट एपीआई कुंजी दर्ज कर सकते हैं।";
                }else if(hreflang_toppersystem == "ja"){
                    txtts3="人工知能";
                    txtts4="「管理」をクリックすると、GPT Chat API キーを入力して、ページの最適化中にタイトルと説明のメタデータを修正できます。";
                }else if(hreflang_toppersystem == "pl"){
                    txtts3="Sztuczna inteligencja";
                    txtts4="Klikając Zarządzaj, możesz wprowadzić klucz GPT Chat Api Key, aby poprawić metadane tytułu i opisu podczas optymalizacji strony.";
                }else if(hreflang_toppersystem == "pt"){
                    txtts3="Inteligência artificial";
                    txtts4="Ao clicar em \"Gerenciar\", você pode inserir sua chave de API do GPT Chat para corrigir os metadados de título e descrição durante a otimização da página.";
                }else if(hreflang_toppersystem == "ru"){
                    txtts3="Искусственный интеллект";
                    txtts4="Нажав Управление, вы можете ввести свой ключ API чата GPT, чтобы исправить метаданные заголовка и описания во время оптимизации страницы.";
                }else if(hreflang_toppersystem == "zh"){
                    txtts3="人工智能";
                    txtts4="通过单击“管理”，您可以输入 GPT Chat Api 密钥，以在页面优化期间更正标题和描述元数据。";
                }else if(hreflang_toppersystem == "he"){
                    txtts3="בינה מלאכותית";
                    txtts4="על ידי לחיצה על ניהול, תוכל להזין את מפתח ה-GPT Chat Api שלך כדי לתקן את המטא נתונים של הכותרת והתיאור במהלך אופטימיזציית העמוד.";
                }else if(hreflang_toppersystem == "la"){
                    txtts3="Intelligentia artificialis";
                    txtts4="Strepitando in \"Manage\", GPT Chat Api Key inire potes ut titulum et descriptionem meta notitiarum in pagina optimizationis corrigas.";
                }else{
                    txtts3="Artificial intelligence";
                    txtts4="By clicking on \"Manage\", you can enter your GPT Chat Api Key to correct the title and description meta data during page optimization.";
                }
                if(document.getElementById('guideresponsets4')){
                    document.getElementById('guideresponsets4').className="guidebox_info_ts";
                    document.getElementById('guideresponsets4').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\">" + txtts2 + " End/31 &nbsp;<a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('0');\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:back_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem('1');\">" + txtts + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts3 + "</big></strong><br><br>" + txtts4 + "<div id=\"index_guide_ts51\">&nbsp;</div></div>";
                }
                if(document.getElementById('guideboxts31')){
                    document.getElementById('guideboxts31').className="guidebox_selected_ts";
                    document.getElementById("guideboxts31").focus();
                }
                setTimeout("index_guide_toppersystem()", 20);
            }else{
                //niente
            }
        }
	}
}

function StartProcessGuideToppersystem()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('idguideboxnow_toppersystem')){
            var id_now=parseFloat(document.getElementById('idguideboxnow_toppersystem').value);

            if((id_now >= 0)&&(id_now <= 14)){

                if(document.getElementById('guideboxts1')){
                    document.getElementById('guideboxts1').className="link_loader_toppersystem";                    
                    document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem";
                }
                if(document.getElementById('check_canonical_toppersystem_send0')){
                    if(document.getElementById('nmaxcanonical_toppersystem')){
                        for(i=0;i<=parseFloat(document.getElementById('nmaxcanonical_toppersystem').value);i++){ 
                            if(document.getElementById("canonical_toppersystem" + i.toString())){
                                if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                                    document.getElementById("check_canonical_toppersystem_send" + i.toString()).className="";							    
                                }
                            }
                        }
                    }
                }
                if(document.getElementById('language_toppersystem_send')){
                    if(document.getElementById('language_toppersystem_send').className == "inputform_toppersystem border_red"){
                        document.getElementById('language_toppersystem_send').className="inputform_toppersystem border_red";
                    }else{
                        document.getElementById('language_toppersystem_send').className="inputform_toppersystem";
                    }
                }
                if(document.getElementById('keyword_toppersystem_send')){
                    if(document.getElementById('keyword_toppersystem_send').className == "inputform_toppersystem border_red"){
                        document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem border_red";
                    }else{
                        document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem";
                    }
                }
                if(document.getElementById('guideboxts4')){
                    document.getElementById('guideboxts4').className="";
                }
                if(document.getElementById('guideboxts5')){
                    document.getElementById('guideboxts5').className="";
                }
                if(document.getElementById('guideboxts6')){
                    document.getElementById('guideboxts6').className="";
                }
                if(document.getElementById('guideboxts7')){
                    document.getElementById('guideboxts7').className="";
                }
                if(document.getElementById('check_privacy_toppersystem_send')){
                    if(document.getElementById('check_privacy_toppersystem_send').className != "border_red"){
                        document.getElementById('check_privacy_toppersystem_send').className="";
                    }
                }
                if(document.getElementById('go_all_toppersystem_send')){
                    document.getElementById('go_all_toppersystem_send').className="button-primary white_color_toppersystem";
                }
                if(document.getElementById('guideboxts8')){
                    document.getElementById('guideboxts8').className="";
                }
                if(document.getElementById('guideboxts9')){
                    document.getElementById('guideboxts9').className="pos_opera_all";
                }
                if(document.getElementById('guideboxts10')){
                    document.getElementById('guideboxts10').className="pos_opera_all";
                }
                if(document.getElementById('guideboxts11')){
                    document.getElementById('guideboxts11').className="pos_opera_all";
                }

            }

            if((id_now >= 15)&&(id_now <= 16)){
                if(document.getElementById('guideresponsets2')){

                    if(document.getElementById('guideboxts12')){
                        document.getElementById('guideboxts12').className="marginrxghtl16 vertxcall4";
                    }

                    if(document.getElementById('guideboxts14')){
                        document.getElementById('guideboxts14').className="marginrxghtl16 vertxcall4";
                    }
                   
                }
            }

            if((id_now >= 17)&&(id_now <= 18)){
                if(document.getElementById('guideresponsets3')){

                    if(document.getElementById('guideboxts15')){
                        document.getElementById('guideboxts15').className="marginrxghtl16 vertxcall4";
                    }

                    if(document.getElementById('guideboxts16')){
                        document.getElementById('guideboxts16').className="marginrxghtl16 vertxcall4";
                    }
                  
                }
            }

            if((id_now >= 19)&&(id_now <= 30)){
                if(document.getElementById('guideresponsets4')){

                    if(document.getElementById('guideboxts17')){
                        document.getElementById('guideboxts17').className="marginrxghtl16 vertxcall4";
                    }

                    if(document.getElementById('guideboxts18')){
                        document.getElementById('guideboxts18').className="marginrxghtl16 vertxcall4";
                    }

                    if(document.getElementById('guideboxts20')){
                        document.getElementById('guideboxts20').className="";
                    }

                    if(document.getElementById('guideboxts21')){
                        document.getElementById('guideboxts21').className="";
                    }

                    if(document.getElementById('guideboxts22')){
                        document.getElementById('guideboxts22').className="";
                    }

                    if(document.getElementById('guideboxts23')){
                        document.getElementById('guideboxts23').className="";
                    }

                    if(document.getElementById('guideboxts24')){
                        document.getElementById('guideboxts24').className="";
                    }

                    if(document.getElementById('guideboxts25')){
                        document.getElementById('guideboxts25').className="";
                    }

                    if(document.getElementById('guideboxts26')){
                        document.getElementById('guideboxts26').className="";
                    }

                    if(document.getElementById('guideboxts27')){
                        document.getElementById('guideboxts27').className="";
                    }

                    if(document.getElementById('guideboxts28')){
                        document.getElementById('guideboxts28').className="";
                    }

                    if(document.getElementById('guideboxts29')){
                        document.getElementById('guideboxts29').className="";
                    }

                    if(document.getElementById('guideboxts30')){
                        document.getElementById('guideboxts30').className="";
                    }

                    if(document.getElementById('guideboxts31')){
                        document.getElementById('guideboxts31').className="";
                    }
                  
                }
            }
         }

         var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
         var txtts0;
         var txtts1;
         var txtts2;
         var txtts3;
         var txtts4;
         if(hreflang_toppersystem == "it"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Ti diamo il benvenuto nella Guida interattiva di Topper System SEO";
            txtts3="Imparerai a ottimizzare le pagine del sito per ottenere una maggiore velocità di caricamento, una maggiore visibilità sui Motori di Ricerca, un risparmio energetico e come utilizzare tutti i servizi e funzionalità integrate nel plugin.";
            txtts4="Inizia adesso";
        }else if(hreflang_toppersystem == "ar"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="مرحبًا بك في الدليل التفاعلي لتحسين محركات البحث لنظام Topper System SEO";
            txtts3="ستتعلم كيفية تحسين صفحات الموقع للحصول على سرعة تحميل أسرع وزيادة الرؤية على محركات البحث وتوفير الطاقة وكيفية استخدام جميع الخدمات والميزات المدمجة في المكون الإضافي.";
            txtts4="ابدأ الآن";
        }else if(hreflang_toppersystem == "de"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Willkommen beim interaktiven Leitfaden Topper System SEO";
            txtts3="Sie erfahren, wie Sie die Seiten der Website optimieren, um eine schnellere Ladegeschwindigkeit, eine bessere Sichtbarkeit in Suchmaschinen, Energieeinsparungen und die Nutzung aller im Plugin integrierten Dienste und Funktionen zu erzielen.";
            txtts4="Jetzt starten";
        }else if(hreflang_toppersystem == "es"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Bienvenido a la Guía Interactiva Topper System SEO";
            txtts3="Aprenderás a optimizar las páginas del sitio para obtener una mayor velocidad de carga, mayor visibilidad en los motores de búsqueda, ahorro de energía y cómo utilizar todos los servicios y funciones integrados en el plugin.";
            txtts4="Empezar ahora";
        }else if(hreflang_toppersystem == "fr"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Bienvenue dans le guide interactif Topper System SEO";
            txtts3="Vous apprendrez comment optimiser les pages du site pour obtenir une vitesse de chargement plus rapide, une plus grande visibilité sur les moteurs de recherche, des économies d'énergie et comment utiliser tous les services et fonctionnalités intégrés dans le plugin.";
            txtts4="Commencez maintenant";
        }else if(hreflang_toppersystem == "hi"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Topper System SEO इंटरैक्टिव गाइड में आपका स्वागत है";
            txtts3="आप सीखेंगे कि उच्च लोडिंग गति, खोज इंजन पर अधिक दृश्यता, ऊर्जा बचत और प्लगइन में एकीकृत सभी सेवाओं और सुविधाओं का उपयोग करने के लिए साइट के पृष्ठों को कैसे अनुकूलित किया जाए।";
            txtts4="अभी प्रारंभ करें";
        }else if(hreflang_toppersystem == "ja"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Topper System SEO インタラクティブ ガイドへようこそ";
            txtts3="サイトのページを最適化して読み込み速度を向上させ、検索エンジンでの可視性を高め、エネルギーを節約し、プラグインに統合されているすべてのサービスと機能を使用する方法を学びます。";
            txtts4="今すぐ開始";
        }else if(hreflang_toppersystem == "pl"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Witamy w interaktywnym przewodniku Topper System SEO";
            txtts3="Dowiesz się, jak zoptymalizować strony serwisu, aby uzyskać wyższą prędkość ładowania, lepszą widoczność w wyszukiwarkach, oszczędność energii oraz jak korzystać ze wszystkich usług i funkcji zintegrowanych z wtyczką.";
            txtts4="Rozpocznij teraz";
        }else if(hreflang_toppersystem == "pt"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Bem-vindo ao Guia Interativo de Topper System SEO";
            txtts3="Você aprenderá como otimizar as páginas do site para obter maior velocidade de carregamento, maior visibilidade nos buscadores, economia de energia e como utilizar todos os serviços e funcionalidades integrados no plugin.";
            txtts4="Comece agora";
        }else if(hreflang_toppersystem == "ru"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Добро пожаловать в интерактивное Topper System SEO";
            txtts3="Вы узнаете, как оптимизировать страницы сайта, чтобы получить более высокую скорость загрузки, большую видимость в поисковых системах, экономию энергии и как использовать все службы и функции, интегрированные в плагин.";
            txtts4="Начать сейчас";
        }else if(hreflang_toppersystem == "zh"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="欢迎来到Topper System SEO互动指南";
            txtts3="您将学习如何优化网站页面以获得更高的加载速度、搜索引擎上更大的可见性、节能以及如何使用插件中集成的所有服务和功能。";
            txtts4="立即开始";
        }else if(hreflang_toppersystem == "he"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="ברוכים הבאים למדריך האינטראקטיבי של Topper System SEO";
            txtts3="תלמד כיצד לבצע אופטימיזציה של דפי האתר כדי להשיג מהירות טעינה גבוהה יותר, נראות רבה יותר במנועי חיפוש, חיסכון באנרגיה וכיצד להשתמש בכל השירותים והתכונות המשולבות בתוסף.";
            txtts4="התחל עכשיו";
        }else if(hreflang_toppersystem == "la"){
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Welcome to the Topper System SEO Interactive Guide";
            txtts3=" Disces quomodo optimize paginas situs obtinendi maiorem celeritatem loading, maiorem visibilitatem in quaero engines, industria compendia et quomodo omnia officia et lineamenta in plugin integrata utere";
            txtts4="Start Now";
        }else{
            txtts0="&pr;";
            txtts1="&sc;";
            txtts2="Welcome to the Topper System SEO Interactive Guide";
            txtts3="You will learn how to optimize the site's pages to obtain a higher loading speed, greater visibility on Search Engines, energy savings and how to use all the services and features integrated in the plugin.";
            txtts4="Start Now";
        }

        document.getElementById('idguideboxnow_toppersystem').value="0";
        if(document.getElementById('guideresponsets1')){
            document.getElementById('guideresponsets1').className = "guidebox_info_ts";
            document.getElementById('guideresponsets1').innerHTML="<div class=\"guidebox_info_menu_ts\"><label class=\"guidebox_info_menu_close_ts\"><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:close_guide_toppersystem();\">&cross;</a></label><label><a rel=\"nofollow\" class=\"button-primary none_guide_toppersystem\" href=\"javascript:none_guide_toppersystem();\">" + txtts0 + "</a> <a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts1 + "</a></label></div><div class=\"guidebox_message_ts\"><big><strong>" + txtts2 + "</strong></big><br><br>" + txtts3 + "<br><br><center><a rel=\"nofollow\" class=\"button-primary\" href=\"javascript:go_guide_toppersystem();\">" + txtts4 + "</a></center><div id=\"index_guide_ts0\">&nbsp;</div></div>";
        }
        setTimeout("index_guide_toppersystem()", 20);
	}
}

function StartProcessGuideCPToppersystem()
{
	if(ControllerFunction2() == true){
        setTimeout("StartProcessWhileToppersystem()", 20);
        setTimeout("StartProcessGuideToppersystem()", 1600);
    }
}

function StartProcessGuideCPT1oppersystem()
{
	if(ControllerFunction2() == true){
        setTimeout("StartProcessGuideToppersystem()", 800);
    }
}

function StartProcessGuideCPT2oppersystem()
{
	if(ControllerFunction2() == true){
        setTimeout("StartProcessGuideToppersystem()", 20);
        setTimeout("StartProcessGuideCPT2oppersystem2()", 400);
    }
}
function StartProcessGuideCPT2oppersystem2()
{
	if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="14";
        setTimeout("go_guide_toppersystem()", 400);
    }
}
function ForceProcessGuideCPT2oppersystem()
{
    if(document.getElementById('idguideboxnow_toppersystem')){
        if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
            if(document.getElementById('guideresponsets2')){
                if(!document.getElementById('index_guide_ts26')){
                    setTimeout("StartProcessGuideCPT2oppersystem2()", 20);
                }
            }
        }
    }
}
function StartExceptionsProcessGuideCPT2oppersystem3()
{
	if(ControllerFunction2() == true){
        document.getElementById('guideboxts14').className = "marginrxghtl16 vertxcall4";
    }
}
function StartExceptionsProcessGuideCPT2oppersystem2()
{
	if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="15";
        setTimeout("go_guide_toppersystem()", 400);
        setTimeout("StartExceptionsProcessGuideCPT2oppersystem3()", 600);
    }
}
function ForceExceptionsProcessGuideCPT2oppersystem()
{
    if(document.getElementById('idguideboxnow_toppersystem')){
        if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
            if(document.getElementById('guideresponsets2')){
                if(!document.getElementById('index_guide_ts27')){
                    setTimeout("StartExceptionsProcessGuideCPT2oppersystem2()", 20);
                }
            }
        }
    }
}

function StartProcessGuideCPT3oppersystem()
{
	if(ControllerFunction2() == true){
        setTimeout("StartProcessGuideToppersystem()", 20);
        setTimeout("StartProcessGuideCPT3oppersystem2()", 400);
    }
}
function StartProcessGuideCPT3oppersystem2()
{
	if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="16";
        setTimeout("go_guide_toppersystem()", 400);
    }
}
function ForceProcessGuideCPT3oppersystem()
{
    if(document.getElementById('idguideboxnow_toppersystem')){
        if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
            if(document.getElementById('guideresponsets3')){                                                
                if((document.getElementById('guideresponsets3').innerHTML) == "&nbsp;"){
                    setTimeout("StartProcessGuideCPT3oppersystem()", 20);
                }
            }
        }
    }
}
function ForceDownloadProcessGuideCPT3oppersystem()
{
    if(document.getElementById('idguideboxnow_toppersystem')){
        if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
            if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 18){
            }else{
                if(document.getElementById('guideresponsets3')){                                                
                    if((document.getElementById('guideresponsets3').innerHTML) != "&nbsp;"){
                        document.getElementById('idguideboxnow_toppersystem').value="17";
                        setTimeout("go_guide_toppersystem()", 20);
                    }
                }
            }
        }
    }
}

function StartProcessGuideCPT4oppersystem()
{
	if(ControllerFunction2() == true){
        setTimeout("StartProcessGuideToppersystem()", 20);
        setTimeout("StartProcessGuideCPT4oppersystem2()", 400);
    }
}
function StartProcessGuideCPT4oppersystem2()
{
	if(ControllerFunction2() == true){
        document.getElementById('idguideboxnow_toppersystem').value="18";
        setTimeout("go_guide_toppersystem()", 400);
    }
}
function ForceProcessGuideCPT4oppersystem()
{
    if(document.getElementById('idguideboxnow_toppersystem')){
        if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
            if(document.getElementById('guideresponsets4')){                                                 
                if((document.getElementById('guideresponsets4').innerHTML) == "&nbsp;"){
                    setTimeout("StartProcessGuideCPT4oppersystem()", 20);
                }
            }
        }
    }
}
//-->