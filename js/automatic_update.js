<!--
function ControllerFunctionTS(){
    if((document.getElementById('aursseddts'))&&(document.getElementById('aursdts'))&&(document.getElementById('auurlts'))&&(document.getElementById('auajaxts'))){
        var result=true;
    }else{
        var result=false
    }
    return result;
}

function getCookie_autoupdate_toppersytem(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}

function setCookie_autoupdate_toppersytem(name, value, minutes){
    if(ControllerFunctionTS() == true){
        var now = new Date();
        var expiration = new Date(now.getTime() + parseInt(minutes)*60*1000);
        var cString = name + '=' + escape(value) + '; expires=' + expiration.toGMTString() + '; path=/';
        document.cookie = cString;
        return cString;
    }
}

function CloseStartAutoUpdatePageToppersystem()
{
	if(ControllerFunctionTS() == true){
		if(document.getElementById('alertmsgreloadts')){
            setCookie_autoupdate_toppersytem('banner_auto_update_toppersystem_seo','active','44');			
			var screen = document.getElementById("alertmsgreloadts");
			document.body.removeChild(screen);
		}
	}
}

function ReloadStartAutoUpdatePageToppersystem()
{
	if(ControllerFunctionTS() == true){
        location.reload(true);
	}
}

function ProcessStartAutoUpdatePageToppersystem(ltl)
{
	if(ControllerFunctionTS() == true){
        setTimeout("ProcessStartAutoUpdatePageToppersystem2('" + ltl + "')", 80);	
	}
}

function ProcessStartAutoUpdatePageToppersystem2(ltl)
{
	if((ControllerFunctionTS() == true)&&(ltl != "")){

        var http = new XMLHttpRequest();
        http.ltl = ltl;
        http.onreadystatechange = function() {
	        if(http.readyState == 4 && http.status == 200) {
		        if(http.responseText != ""){
                    var response="";
		            if(http.responseText.trim() == "ok"){
                        if (getCookie_autoupdate_toppersytem('banner_auto_update_toppersystem_seo') === undefined) {
                            var txtts0;
                            var txtts1;
                            var txtts2;
                            if(ltl == "it"){
                                txtts0="La pagina è stata appena aggiornata!";
                                txtts1="Ricarica";
                                txtts2="Chiudi";
                            }else if(ltl == "ar"){
                                txtts0="تم تحديث الصفحة للتو!";
                                txtts1="إعادة تحميل";
                                txtts2="يغلق";
                            }else if(ltl == "de"){
                                txtts0="Die Seite wurde gerade aktualisiert!";
                                txtts1="Neu laden";
                                txtts2="Schließen";
                            }else if(ltl == "es"){
                                txtts0="¡La página acaba de ser actualizada!";
                                txtts1="Recargar";
                                txtts2="Cerca";
                            }else if(ltl == "fr"){
                                txtts0="La page vient d'être mise à jour!";
                                txtts1="Recharger";
                                txtts2="Fermer";
                            }else if(ltl == "hi"){
                                txtts0="पेज अभी अपडेट किया गया है!";
                                txtts1="पुनः लोड करें";
                                txtts2="बंद करना";
                            }else if(ltl == "ja"){
                                txtts0="ページが更新されました！";
                                txtts1="リロード";
                                txtts2="近い";
                            }else if(ltl == "pl"){
                                txtts0="Strona właśnie została zaktualizowana!";
                                txtts1="Przeładować";
                                txtts2="Zamknąć";
                            }else if(ltl == "pt"){
                                txtts0="A página acaba de ser atualizada!";
                                txtts1="Recarregar";
                                txtts2="Fechar";
                            }else if(ltl == "ru"){
                                txtts0="Страница только что обновлена!";
                                txtts1="Перезагрузить";
                                txtts2="Закрывать";
                            }else if(ltl == "zh"){
                                txtts0="页面刚刚更新！";
                                txtts1="重新加载";
                                txtts2="关闭";
                            }else if(ltl == "he"){
                                txtts0="העמוד עודכן זה עתה!";
                                txtts1="לִטעוֹן מִחָדָשׁ";
                                txtts2="סגור";
                            }else if(ltl == "la"){
                                txtts0="Pagina modo renovata est!";
                                txtts1="Reload";
                                txtts2="Close";
                            }else{
                                txtts0="The page has just been updated!";
                                txtts1="Reload";
                                txtts2="Close";
                            }
                            var add=document.createElement("div");
                            add.setAttribute("id","alertmsgreloadts");
                            add.setAttribute("class","co2tsresult animate_y_bottom_toppersystem");
                            add.setAttribute("style","background: rgba(0, 0, 0, 0.8); border: solid 1px rgba(255,255,255, 0.8);");
                            add.innerHTML="<span>" + txtts0 + "<br><span onclick=\"ReloadStartAutoUpdatePageToppersystem()\"><strong>" + txtts1 + "</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;<span onclick=\"CloseStartAutoUpdatePageToppersystem()\"><strong>" + txtts2 + "</strong></span></span>";
                            document.body.appendChild(add);
                        }                        		            
                    }
		        }
	        }else{
		        if(http.readyState == 1) {						

		        }else if(http.readyState == 2) {

		        }else if(http.readyState == 3) {
		        
		        }                
	        }
        }

        var url = document.getElementById('auajaxts').value.trim();
        var params = "action=componentstoppersystem44ajax&aursdts=" + encodeURIComponent(document.getElementById('aursdts').value) + "&aursseddts=" + encodeURIComponent(document.getElementById('aursseddts').value) + "&auurlts=" + encodeURIComponent(document.getElementById('auurlts').value) + "&hreflang_toppersystem=" + ltl;
        http.open("POST", url, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(params);		

    }
}

async function startautomaticupdatets2(){
    if(ControllerFunctionTS()==true){
        if(document.body){
            var lang=navigator.language||navigator.userLanguage;
            var newlang=lang.replace(/_/,'-');
            var hreflang_toppersystem=newlang.split("-")[0];
            var ltl;
            if(hreflang_toppersystem=="it"){
            ltl="it";
            }else if(hreflang_toppersystem=="ar"){
            ltl="ar";
            }else if(hreflang_toppersystem=="de"){
            ltl="de";
            }else if(hreflang_toppersystem=="es"){
            ltl="es";
            }else if(hreflang_toppersystem=="fr"){
            ltl="fr";
            }else if(hreflang_toppersystem=="hi"){
            ltl="hi";
            }else if(hreflang_toppersystem=="ja"){
            ltl="ja";
            }else if(hreflang_toppersystem=="pl"){
            ltl="pl";
            }else if(hreflang_toppersystem=="pt"){
            ltl="pt";
            }else if(hreflang_toppersystem=="ru"){
            ltl="ru";
            }else if(hreflang_toppersystem=="zh"){
            ltl="zh";
            }else if(hreflang_toppersystem=="he"){
            ltl="he";
            }else if(hreflang_toppersystem=="la"){
            ltl="la";
            }else{
            ltl="en";
            }
            setTimeout("ProcessStartAutoUpdatePageToppersystem('" + ltl +"')", 80);            
        }
    }
}

async function startautomaticupdatets(){
    if(document.getElementById('auurlts')){
        if(document.getElementById('auurlts').value.trim() != ""){
            var url=document.getElementById('auurlts').value.trim();

            var val_header_send_toppersystem="";
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_header_send_toppersystem="Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:72.0; toppersystemnet) Gecko/20100101 Firefox/72.0";
            }else if(randInt == "1"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Windows NT 10.0; Win64; x64; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36";
            }else if(randInt == "2"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Windows NT 10.0; WOW64; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36";
            }else if(randInt == "3"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Windows NT 10.0; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36";
            }else if(randInt == "4"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0; toppersystemnet) Gecko/20100101 Firefox/116.0";
            }else if(randInt == "5"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Macintosh; Intel Mac OS X 13.5; rv:109.0; toppersystemnet) Gecko/20100101 Firefox/116.0";
            }else if(randInt == "6"){ 
               val_header_send_toppersystem="Mozilla/5.0 (X11; Linux i686; rv:109.0; toppersystemnet) Gecko/20100101 Firefox/116.0";
            }else if(randInt == "7"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Macintosh; Intel Mac OS X 13_5; toppersystemnet) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Safari/605.1.15";
            }else if(randInt == "8"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Macintosh; Intel Mac OS X 13_5; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/115.0.1901.203";
            }else if(randInt == "9"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Windows NT 10.0; Win64; x64; toppersystemnet) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/115.0.1901.203";
            }else if(randInt == "10"){ 
               val_header_send_toppersystem="Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:72.0; toppersystemnet) Gecko/20100101 Firefox/72.0";
            }else{   
               val_header_send_toppersystem="Mozilla/5.0 (AppleWebKit/537.36 (KHTML, like Gecko, toppersystemnet) Chrome/120.0.0.0 Safari/537.36";
            }

            let headers = new Headers({
                'Accept'       : '*/*',
                "User-Agent"   : val_header_send_toppersystem
            });

            const formData = new FormData();
            formData.append("toppersystem_update", "ok");

            fetch(url, {
                method: "POST", 
                body: formData,
                mode: "cors", // no-cors, *cors, same-origin
                cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
                credentials: "same-origin", // include, *same-origin, omit
                headers : headers
            })
            .then(function(response) {
                return response.text()
            })
            .then(function(html) {
                // salva in value clhts
                //alert(html.length);
                var nchartpageoriginal=html.length;
                if(document.getElementById('clhts')){
                    document.getElementById('clhts').value=nchartpageoriginal;
                }

                if(document.getElementById('oldchartnumberts')){
                    if(document.getElementById('oldchartnumberts').value.trim() != ""){
                        var nchartpageoriginalold=parseFloat(document.getElementById('oldchartnumberts').value);
                        if(nchartpageoriginalold == nchartpageoriginal){
                            //npt
                        }else{
                            setTimeout("startautomaticupdatets2()", 80);
                            //alert(nchartpageoriginal + "--" + nchartpageoriginalold);
                        }
                    }
                }
            })
            .catch(function(err) {})
        }
    }
    
}

window.addEventListener("load", () => startautomaticupdatets(), false);
//-->