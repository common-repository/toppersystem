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
	
	if((document.getElementById('canonical_toppersystem'))&&(document.getElementById('language_toppersystem'))&&(document.getElementById('title_toppersystem'))&&(document.getElementById('description_toppersystem'))&&(document.getElementById('keywords_toppersystem'))&&(document.getElementById('hreflang_toppersystem'))&&(document.getElementById('deletepage_req_toppersystem'))&&(document.getElementById('connect_req_toppersystem'))&&(document.getElementById('downloadx_req_toppersystem'))&&(document.getElementById('download_req_toppersystem'))&&(document.getElementById('events_req_toppersystem'))&&(document.getElementById('status_req_toppersystem'))&&(document.getElementById('terms_condictions_req_toppersystem'))&&(document.getElementById('send_req_toppersystem'))){
		var result = true;	
	}else{
		var result = false;
	}
	
	return result;
}

function urldecode_url_toppersystem(url) {
  return decodeURIComponent(url.replace(/\+/g, ' '));
}

function decode_html_toppersystem(html){
	var txt = document.createElement("textarea");
	txt.innerHTML = html;
    var txtok = txt.value.replace('<textarea>', '');
    var txtok2 = txtok.replace('</textarea>', '');
	return txtok2;
}

function ok_write_language()
{
	if(ControllerFunction2() == true){
            if((document.getElementById('language_toppersystem_send').className == "inputform_toppersystem border_red")||(document.getElementById('language_toppersystem_send').className == "inputform_toppersystem guidebox_checkbox_selected_ts")){		
                document.getElementById('language_toppersystem_send').className="inputform_toppersystem";
            }
	}
}

function ok_write_keyword()
{
	if(ControllerFunction2() == true){
		    if(document.getElementById('keyword_toppersystem_send')){		
                document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem";
            }
	}
}

function ok_write_title()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('check_title_toppersystem_send').checked == false){
		    if(document.getElementById('title_toppersystem_send')){		
                document.getElementById('title_toppersystem_send').className="inputform_toppersystem";
                document.getElementById('check_title_toppersystem_send').className="";
            }
        }
	}
}

function ok_write_description()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('check_description_toppersystem_send').checked == false){
		    if(document.getElementById('description_toppersystem_send')){		
                document.getElementById('description_toppersystem_send').className="inputform_toppersystem";
                document.getElementById('check_description_toppersystem_send').className="";
            }
        }
	}
}

function ok_write_keywords()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('check_keywords_toppersystem_send').checked == false){
		    if(document.getElementById('keywords_toppersystem_send')){		
                document.getElementById('keywords_toppersystem_send').className="inputform_toppersystem";
                document.getElementById('check_keywords_toppersystem_send').className="";
            }
        }
	}
}

function ok_write_privacy()
{
	if(ControllerFunction2() == true){
		if(document.getElementById('check_privacy_toppersystem_send')){		
			document.getElementById('check_privacy_toppersystem_send').className="";
        }
	}
}

function ChangeDisplayToppersystemTitle()
{
	if(document.getElementById('check_title_toppersystem_send').checked == false){
        document.getElementById('title_toppersystem_send').className="inputform_toppersystem";
        document.getElementById('check_title_toppersystem_send').className="";
	}else{        
        document.getElementById('title_toppersystem_send').className="inputform_toppersystem opacity_toppersystem";
        document.getElementById('check_title_toppersystem_send').className="";
	}
}

function ChangeDisplayToppersystemDescription()
{
	if(document.getElementById('check_description_toppersystem_send').checked == false){
        document.getElementById('description_toppersystem_send').className="inputform_toppersystem";
        document.getElementById('check_description_toppersystem_send').className="";
	}else{        
        document.getElementById('description_toppersystem_send').className="inputform_toppersystem opacity_toppersystem";
        document.getElementById('check_description_toppersystem_send').className="";
	}
}

function ChangeDisplayToppersystemKeywords()
{
	if(document.getElementById('check_keywords_toppersystem_send').checked == false){
        document.getElementById('keywords_toppersystem_send').className="inputform_toppersystem";
        document.getElementById('check_keywords_toppersystem_send').className="";
	}else{        
        document.getElementById('keywords_toppersystem_send').className="inputform_toppersystem opacity_toppersystem";
        document.getElementById('check_keywords_toppersystem_send').className="";
	}
}

function clean_page_toppersystem() {

	if(ControllerFunction2() == true){
		setTimeout("clean_page_toppersystem2()", 80);
	}

}

function clean_page_toppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
			
				var http = new XMLHttpRequest();

				http.onreadystatechange = function() {					
					if(http.readyState == 4 && http.status == 200) {
						if(http.responseText.trim() == "ok"){							
                            setTimeout("SendStatusToppersystem()", 2);					
						}
					}else{
						if(http.readyState == 1) {						
							
						}else if(http.readyState == 2) {

						}else if(http.readyState == 3) {
						
						}else{							
							
						}				        
					}
				}	

                var url = ajax_components_toppersystem.url;
                var params = "action=componentstoppersystem9ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem_send').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
				http.open("POST", url, true);				
				http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				http.send(params);
			}
			
		}else{
			
		}
	}
}

function request_clean_page_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;

            if(hreflang_toppersystem == "it"){
                txtts0="Desideri rimuovere l'ottimizzazione di questa pagina?";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="هل تريد إزالة التحسين من هذه الصفحة؟";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Möchten Sie die Optimierung von dieser Seite entfernen?";
            }else if(hreflang_toppersystem == "es"){
                txtts0="¿Desea eliminar la optimización de esta página?";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Voulez-vous supprimer l'optimisation de cette page?";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="क्या आप इस पृष्ठ से अनुकूलन हटाना चाहते हैं?";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="このページから最適化を削除しますか？";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Czy chcesz usunąć optymalizację z tej strony?";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Deseja remover a otimização desta página?";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="Вы хотите удалить оптимизацию с этой страницы?";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="您要从此页面删除优化吗？";
            }else if(hreflang_toppersystem == "he"){
                txtts0="האם ברצונך להסיר את האופטימיזציה מדף זה?";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Vis ad removendum ipsum de hac pagina?";
            }else{
                txtts0="Do you want to remove the optimization from this page?";
            }

            var r = confirm(txtts0);
            if (r == true) {    
                setTimeout("clean_page_toppersystem()", 2);
            } 
         }
      }
   }
}

function RemoveDownload() {
	if(ControllerFunction2() == true){
		if(document.getElementById('downloadtoppersystem')){
			
			var screen = document.getElementById("downloadtoppersystem");
			document.body.removeChild(screen);
		}
	}
}

function download_events_toppersystem()
{
	if(ControllerFunction2() == true){
		setTimeout("download_events_toppersystem2()", 80);
	}
}

function download_events_toppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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

									if(http.responseText.trim() == "ok") {                      
										
										var div2 = document.createElement("iframe");
										div2.src=document.getElementById('resend_toppersystem').value.trim() + document.getElementById('downloadx_req_toppersystem').value.trim();
										div2.setAttribute("id", "downloadtoppersystem");	
										document.body.appendChild(div2);
										
										setTimeout("RemoveDownload()", 16000);

									}

								}else{
									if(http.readyState == 1) {						
										
									}else if(http.readyState == 2) {

									}else if(http.readyState == 3) {
									
									}else{							
						
									}				        
								}
							}

				            var url = ajax_components_toppersystem.url;
							var params = "action=componentstoppersystem6ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem_send').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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

function close_events_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_toppersystem')){
			
			var screen = document.getElementById("render_events_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function current_events_toppersystem()
{
	if(ControllerFunction2() == true){

        if((document.getElementById('box_general_request_events_toppersystem'))&&(document.getElementById('box_page_request_events_toppersystem'))){
        
            document.getElementById('box_general_request_events_toppersystem').className="display_none_ts";  
            document.getElementById('box_page_request_events_toppersystem').className="";     
		    
        }
	}
}

function all_events_toppersystem()
{
	if(ControllerFunction2() == true){

        if((document.getElementById('box_general_request_events_toppersystem'))&&(document.getElementById('box_page_request_events_toppersystem'))){
        
            document.getElementById('box_general_request_events_toppersystem').className="";  
            document.getElementById('box_page_request_events_toppersystem').className="display_none_ts";     
		    
        }
	}
}

function request_events_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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

									if(http.responseText.trim() != "") {                           
										newtxt = http.responseText.trim().replace(/box_general_request_events_toppersystem/, '');                                
										if(http.responseText.trim() != newtxt) {                                
											document.getElementById('request_events_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());           
										}	
									}

								}else{
									if(http.readyState == 1) {						
										
									}else if(http.readyState == 2) {

									}else if(http.readyState == 3) {
									
									}else{
							
									}				        
								}
							}
							
                            var url = ajax_components_toppersystem.url;
							var params = "action=componentstoppersystem4ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem_send').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);

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
							if(document.getElementById('render_events_toppersystem')){								
								var screen = document.getElementById("render_events_toppersystem");
								document.body.removeChild(screen);
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

function events_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
            var txtts2;
            var txtts3;
            var txtts4;

            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Pagina corrente";
                txtts2="Tutti";
                txtts3="Download";
                txtts4="Elenco delle attivit&agrave; Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="الصفحة الحالية";
                txtts2="جميع";
                txtts3="تحميل";
                txtts4="قائمة أنشطة نظام Topper";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Aktuelle Seite";
                txtts2="Alle";
                txtts3="Herunterladen";
                txtts4="Liste der Topper Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Página actual";
                txtts2="Todos";
                txtts3="Descargar";
                txtts4="Lista de actividades del Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Page courante";
                txtts2="Tous";
                txtts3="Télécharger";
                txtts4="Liste des activités du Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="वर्तमान पृष्ठ";
                txtts2="सब";
                txtts3="डाउनलोड";
                txtts4="टॉपर सिस्टम गतिविधियों की सूची";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="現在のページ";
                txtts2="全て";
                txtts3="ダウンロード";
                txtts4="トッパーシステムアクティビティのリスト";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Bieżąca strona";
                txtts2="Wszystko";
                txtts3="Pobierz";
                txtts4="Lista działań Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Página atual";
                txtts2="Tudo";
                txtts3="Baixar";
                txtts4="Lista de atividades do Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Текущая страница";
                txtts2="все";
                txtts3="скачать";
                txtts4="Список действий системы Topper";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="当前页面";
                txtts2="所有";
                txtts3="下载";
                txtts4="Topper系统活动列表";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="עמוד נוכחי";
                txtts2="כל";
                txtts3="הורדה";
                txtts4="רשימת פעילויות מערכת טופר";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Pagina";
                txtts2="Omnia";
                txtts3="Download";
                txtts4="Index Topper System<sup> SEO</sup> actiones";
            }else{
                txtts0="Close";
                txtts1="Current page";
                txtts2="All";
                txtts3="Download";
                txtts4="List of Topper System<sup> SEO</sup> activities";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_toppersystem\" class=\"stxle_menu_events_toppersystem\"><strong>" + txtts4 + "</strong> <span class=\"mxnu_ok_toppersystem\"><a rel=\"nofollow\" href=\"javascript:current_events_toppersystem();\">" + txtts1 + "</a> | <a rel=\"nofollow\" href=\"javascript:all_events_toppersystem();\">" + txtts2 + "</a> | <a rel=\"nofollow\" href=\"javascript:download_events_toppersystem();\">" + txtts3 + "</a> | <a rel=\"nofollow\" href=\"javascript:close_events_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";	
			document.body.appendChild(add);

            setTimeout("request_events_toppersystem()", 20);
         }
      }
   }
}

function SendStatusToppersystem()
{
	if(ControllerFunction2() == true){
		setTimeout("SendStatusToppersystem2()", 80);
	}
}

function SendStatusToppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
			
				var http = new XMLHttpRequest();

				http.onreadystatechange = function() {					
					if(http.readyState == 4 && http.status == 200) {

                        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
                        var txtts0;
                        var txtts1;
                        var txtts2;
                        var txtts3;
                        var txtts4;
                       if(hreflang_toppersystem == "it"){
                            txtts0="Rimuovi";
                            txtts1="Pagina ottimizzata";
                            txtts2="Pagina non ottimizzata";
                            txtts3="Status";
                            txtts4="Visualizza storico";
                        }else if(hreflang_toppersystem == "ar"){
                            txtts0="إزالة";
                            txtts1="صفحة محسنة";
                            txtts2="الصفحة غير محسنة";
                            txtts3="تصريح";
                            txtts4="عرض تاريخي";
                        }else if(hreflang_toppersystem == "de"){
                            txtts0="Remove";
                            txtts1="Optimierte Seite";
                            txtts2="Seite nicht optimiert";
                            txtts3="STATUS";
                            txtts4="Historisch anzeigen";
                        }else if(hreflang_toppersystem == "es"){
                            txtts0="Quitar";
                            txtts1="Página optimizada";
                            txtts2="Página no optimizada";
                            txtts3="ESTADO";
                            txtts4="Ver histórico";
                        }else if(hreflang_toppersystem == "fr"){
                            txtts0="Supprimer";
                            txtts1="Page optimisée";
                            txtts2="Page non optimisée";
                            txtts3="ÉTAT";
                            txtts4="Afficher l'historique";
                        }else if(hreflang_toppersystem == "hi"){
                            txtts0="निकालें";
                            txtts1="अनुकूलित पृष्ठ";
                            txtts2="पृष्ठ अनुकूलित नहीं है";
                            txtts3="स्थिति";
                            txtts4="ऐतिहासिक देखें";
                        }else if(hreflang_toppersystem == "ja"){
                            txtts0="削除";
                            txtts1="最適化されたページ";
                            txtts2="ページが最適化されていません";
                            txtts3="STATUS";
                            txtts4="歴史を見る";
                        }else if(hreflang_toppersystem == "pl"){
                            txtts0="Usunąć";
                            txtts1="Zoptymalizowana strona";
                            txtts2="Strona nie jest zoptymalizowana";
                            txtts3="STATUS";
                            txtts4="Zobacz historyczny";
                        }else if(hreflang_toppersystem == "pt"){
                            txtts0="Remove";
                            txtts1="Página otimizada";
                            txtts2="Página não otimizada";
                            txtts3="STATUS";
                            txtts4="Ver histórico";
                        }else if(hreflang_toppersystem == "ru"){
                            txtts0="Удалить";
                            txtts1="Оптимизированная страница";
                            txtts2="Страница не оптимизирована";
                            txtts3="СТАТУС";
                            txtts4="Посмотреть исторический";
                        }else if(hreflang_toppersystem == "zh"){
                            txtts0="删除";
                            txtts1="优化页面";
                            txtts2="页面未优化";
                            txtts3="STATUS";
                            txtts4="查看历史";
                        }else if(hreflang_toppersystem == "he"){
                            txtts0="הסר";
                            txtts1="עמוד מיטוב";
                            txtts2="הדף לא מותאם";
                            txtts3="STATUS";
                            txtts4="הצג היסטורי";
                        }else if(hreflang_toppersystem == "la"){
                            txtts0="Aufer";
                            txtts1="Page optimized";
                            txtts2="Unoptimized page";
                            txtts3="STATUS";
                            txtts4="Historiam inspicere";
                        }else{
                            txtts0="Remove";
                            txtts1="Optimized page";
                            txtts2="Page not optimized";
                            txtts3="Status";
                            txtts4="View historical";
                        }

						if(http.responseText.trim() == "ok"){							
                            document.getElementById('status_toppersystem_box').innerHTML= "<a class=\"decoration_none\" href=\"javascript:events_toppersystem();\"><small><span class=\"pos_opera\" title=\"" + txtts4 + "\">&rlarr;</span></small></a> &nbsp;<span class=\"status_title\"><small>" + txtts3 + ":</small></span> <span class=\"status_title pos_status_remove_cursor_ts\" onclick=\"request_clean_page_toppersystem()\" title=\"" + txtts0 + "\"> <small>" + txtts0 + "</small> </span> <span class=\"status_off_0\" onclick=\"request_clean_page_toppersystem()\" title=\"" + txtts0 + "\">&bull;</span> <span class=\"status_on_1\" title=\"" + txtts1 + "\">&bull;</span>";
                            document.getElementById('look_lighthouse_toppersystem').className="";						
						}else{
				            document.getElementById('status_toppersystem_box').innerHTML= "<a class=\"decoration_none\" href=\"javascript:events_toppersystem();\"><small><span class=\"pos_opera\" title=\"" + txtts4 + "\">&rlarr;</span></small></a> &nbsp;<span class=\"status_title\"><small>" + txtts3 + ":</small></span> <span class=\"status_off_1\" title=\"" + txtts2 + "\">&bull;</span> <span class=\"status_on_0\" title=\"" + txtts2 + "\">&bull;</span>";
                            document.getElementById('look_lighthouse_toppersystem').className="display_none_ts";	
					    }
					}else{
						if(http.readyState == 1) {
							
						}else if(http.readyState == 2) {

						}else if(http.readyState == 3) {
						
						}else{
							
						}				        
					}
				}
				
				var url = ajax_components_toppersystem.url;
				var params = "action=componentstoppersystem3ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem_send').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);

				http.open("POST", url, true);
				http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				http.send(params);
			}

		}else{
			
		}
	}
}

function close_help_images_toppersystem()
{
	if(ControllerFunction2() == true){
		if(document.getElementById('box_check_images_a')){ 
			document.getElementById('box_check_images_a').className="display_none_ts";
			document.getElementById('box_check_images_b').className="display_none_ts";
			document.getElementById('box_check_images_c').className="display_none_ts";
			document.getElementById('images_toppersystem_a').href="javascript:help_images_toppersystem('0');";
			document.getElementById('images_toppersystem_b').href="javascript:help_images_toppersystem('1');";
			document.getElementById('images_toppersystem_c').href="javascript:help_images_toppersystem('2');";			
		}
	}
}

function help_images_toppersystem(n)
{
	if(ControllerFunction2() == true){
		if(n == "0"){
			if(document.getElementById('box_check_images_a')){ 
				document.getElementById('box_check_images_a').className="";
				document.getElementById('box_check_images_b').className="display_none_ts";
				document.getElementById('box_check_images_c').className="display_none_ts";
				document.getElementById('images_toppersystem_a').href="javascript:close_help_images_toppersystem();";
				document.getElementById('images_toppersystem_b').href="javascript:help_images_toppersystem('1');";
				document.getElementById('images_toppersystem_c').href="javascript:help_images_toppersystem('2');";
			}
		}else if(n == "1"){			
			if(document.getElementById('box_check_images_b')){ 
				document.getElementById('box_check_images_a').className="display_none_ts";
				document.getElementById('box_check_images_b').className="";
				document.getElementById('box_check_images_c').className="display_none_ts";
				document.getElementById('images_toppersystem_a').href="javascript:help_images_toppersystem('0');";
				document.getElementById('images_toppersystem_b').href="javascript:close_help_images_toppersystem();";
				document.getElementById('images_toppersystem_c').href="javascript:help_images_toppersystem('2');";
			}
		}else if(n == "2"){
			if(document.getElementById('box_check_images_c')){ 
				document.getElementById('box_check_images_a').className="display_none_ts";
				document.getElementById('box_check_images_b').className="display_none_ts";
				document.getElementById('box_check_images_c').className="";
				document.getElementById('images_toppersystem_a').href="javascript:help_images_toppersystem('0');";
				document.getElementById('images_toppersystem_b').href="javascript:help_images_toppersystem('1');";
				document.getElementById('images_toppersystem_c').href="javascript:close_help_images_toppersystem();";
			}			
		}else{
			
		} 
	}
}

function CloseProcessToppersystem()
{
	if(document.getElementById('management_toppersystem')){        
        var p=document.getElementById('management_toppersystem');       
		document.body.removeChild(p);
		setTimeout("start_optimization_toppersystem()", 80);
	}
}

function StartProcessToppersystem()
{
	if(ControllerFunction() == true){
        
        var p=document.getElementById('button_toppersystem');       
		document.body.removeChild(p);
		setTimeout("StartProcessToppersystem2()", 80);
	}
}

function render_view_terms_condictions_toppersystem()
{
	if(ControllerFunction2() == true){
		document.getElementById("frame_terms_condictions_toppersystem").className="termsandcondictions_toppersystem";
	}
}

function terms_condictions_toppersystem2(hreflang_toppersystem)
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('render_events_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(hreflang_toppersystem.trim() != "")){

				var xhr = new XMLHttpRequest();
                xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
				xhr.send();
				xhr.addEventListener("readystatechange", processRequest, false);
				function processRequest(e) {
					if (xhr.readyState == 4) {
						if (xhr.status >= 200 && xhr.status < 304) {
                            document.getElementById('request_events_toppersystem').innerHTML="<iframe id=\"frame_terms_condictions_toppersystem\" sandbox src=\"" + document.getElementById('idtermsandcondictionslink_toppersystem').value.trim() + "\" width=\"100%\" height=\"100%\" class=\"termsandcondictions_toppersystem_hidden\" onload=\"render_view_terms_condictions_toppersystem()\">" + document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim() + "</iframe>";							

						}else{
							
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
							if(document.getElementById('render_events_toppersystem')){								
								var screen = document.getElementById("render_events_toppersystem");
								document.body.removeChild(screen);
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

function terms_condictions_toppersystem(hreflang_toppersystem)
{
	if(ControllerFunction2() == true){
	    if(hreflang_toppersystem.trim() != ""){

            var txtts1;
            var txtts2;
			if(hreflang_toppersystem == "it"){
				txtts1="CONDIZIONI D&acute;USO TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Chiudi";
			}else if(hreflang_toppersystem == "ar"){
				txtts1="شروط الاستخدام";
				txtts2="قريب";
			}else if(hreflang_toppersystem == "de"){
				txtts1="NUTZUNGSBEDINGUNGEN";
				txtts2="Schließen";
			}else if(hreflang_toppersystem == "es"){
				txtts1="TÉRMINOS DE USO";
				txtts2="Cerca";
			}else if(hreflang_toppersystem == "fr"){
				txtts1="CONDITIONS D'UTILISATION";
				txtts2="Proche";
			}else if(hreflang_toppersystem == "hi"){
				txtts1="उपयोग का नियम";
				txtts2="पास";
			}else if(hreflang_toppersystem == "ja"){
				txtts1="利用規約";
				txtts2="近いです";
			}else if(hreflang_toppersystem == "pl"){
				txtts1="WARUNKI UŻYTKOWANIA";
				txtts2="Blisko";
			}else if(hreflang_toppersystem == "pt"){
				txtts1="TERMOS DE USO";
				txtts2="Perto";
			}else if(hreflang_toppersystem == "ru"){
				txtts1="УСЛОВИЯ ИСПОЛЬЗОВАНИЯ";
				txtts2="близко";
			}else if(hreflang_toppersystem == "zh"){
				txtts1="使用条款";
				txtts2="关闭";
			}else if(hreflang_toppersystem == "he"){
				txtts1="תנאי השימוש";
				txtts2="סגירה";
			}else if(hreflang_toppersystem == "la"){
				txtts1="All Products";
				txtts2="Prope";
			}else{
				txtts1="TERMS OF USE TOPPER SYSTEM<sup> SEO</sup>";
				txtts2="Close";
			}  
        
            var add = document.createElement("div");
			add.setAttribute("id", "render_events_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_toppersystem\" class=\"stxle_menu_events_toppersystem\"><strong>" + txtts1 + "</strong> <span class=\"mxnu_ok_toppersystem\"><a rel=\"nofollow\" href=\"javascript:close_events_toppersystem();\">" + txtts2 + "</a>&nbsp;&nbsp;</span></div><div id=\"request_events_toppersystem\" class=\"stxle_request_events_toppersystem pxdding8\" style=\"overflow-y:hidden;\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);
			
			setTimeout("terms_condictions_toppersystem2('" + hreflang_toppersystem + "')", 80);
	    }		
	}
}

function request_load_status_defer_toppersystem()
{
	if(ControllerFunction2() == true){	
		setTimeout("request_load_status_defer_toppersystem2()", 80);
	}
}

function request_load_status_defer_toppersystem2()
{
	if(ControllerFunction2() == true){
				if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('loadstatusdefer_req_toppersystem'))&&(document.getElementById('domain_toppersystem'))){

			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('loadstatusdefer_req_toppersystem').value.trim() != "")&&(document.getElementById('domain_toppersystem').value.trim() != "")){

				var xhr = new XMLHttpRequest();
                xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
				xhr.send();
				xhr.addEventListener("readystatechange", processRequest, false);
				function processRequest(e) {
					if (xhr.readyState == 4) {
						if (xhr.status >= 200 && xhr.status < 304) {
							
							var http = new XMLHttpRequest();
							var textfile = "";
							http.onreadystatechange = function() {					
								if(http.readyState == 4 && http.status == 200) {

									if(http.responseText.trim() != "") {
										if(decode_html_toppersystem(http.responseText.trim() != "")) {
											textfile = decode_html_toppersystem(http.responseText.trim());
                                            if(textfile == "ok"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Defer model"; 
                                                }
                                            }else if(textfile == "no"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Preload model";
                                                }
                                            }else if(textfile == "noset"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Automatic model";
                                                }
                                            }else if(textfile == "okd"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Defer model &amp; Delay"; 
                                                }
                                            }else if(textfile == "nod"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Preload model &amp; Delay";
                                                }
                                            }else if(textfile == "nosetd"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Automatic model &amp; Delay";
                                                }
                                            }else{

                                            }
											
										}	
									}

								}else{
									if(http.readyState == 1) {						

									}else if(http.readyState == 2) {

									}else if(http.readyState == 3) {
									
									}else{
							
									}				        
								}
							}
							
				            var url = ajax_components_toppersystem.url;
							var params = "action=componentstoppersystem7ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem_send').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&domain_toppersystem=" + encodeURIComponent(document.getElementById('domain_toppersystem').value);
							http.open("POST", url, true);
							http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							http.send(params);
						}
					}
				}			
			}

		}else{

		}
	}
}

function request_load_status_cssfilests_toppersystem()
{
	if(ControllerFunction2() == true){	
		setTimeout("request_load_status_cssfilests_toppersystem2()", 80);
	}
}

function request_load_status_cssfilests_toppersystem2()
{
	if(ControllerFunction2() == true){		
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('loadstatusdefer_req_toppersystem'))&&(document.getElementById('domain_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('loadstatusdefer_req_toppersystem').value.trim() != "")&&(document.getElementById('domain_toppersystem').value.trim() != "")){

				var xhr = new XMLHttpRequest();
                xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
				xhr.send();
				xhr.addEventListener("readystatechange", processRequest, false);
				function processRequest(e) {
					if (xhr.readyState == 4) {
						if (xhr.status >= 200 && xhr.status < 304) {
							
							var http = new XMLHttpRequest();
							var textfile = "";
							http.onreadystatechange = function() {					
								if(http.readyState == 4 && http.status == 200) {

									if(http.responseText.trim() != "") {
										if(decode_html_toppersystem(http.responseText.trim() != "")) {
											textfile = decode_html_toppersystem(http.responseText.trim());
                                            if(textfile == "ok"){						
												if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Esclusion set"; 
                                                }												
                                            }else if(textfile == "no"){
                                                if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Not esclusion set"; 
                                                }												
                                            }else if(textfile == "okinline"){						
												if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Inline &amp; Esclusion set"; 
                                                }												
                                            }else if(textfile == "noinline"){
                                                if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Inline &amp; Not esclusion set"; 
                                                }												
                                            }else if(textfile == "okstlyeexsternalok"){						
												if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Separate styles &amp; Esclusion set"; 
                                                }												
                                            }else if(textfile == "nostlyeexsternalok"){
                                                if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Separate styles &amp; Not esclusion set"; 
                                                }												
                                            }else if(textfile == "okinlinestlyeexsternalok"){						
												if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Separate styles, Inline &amp; Esclusion set"; 
                                                }												
                                            }else if(textfile == "noinlinestlyeexsternalok"){
                                                if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Separate styles, Inline &amp; Not esclusion set"; 
                                                }												
                                            }else{

                                            }
											
										}	
									}

								}else{
									if(http.readyState == 1) {						

									}else if(http.readyState == 2) {

									}else if(http.readyState == 3) {
									
									}else{
							
									}				        
								}
							}
							
                            var url = ajax_components_toppersystem.url;
							var params = "action=componentstoppersystem38ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&domain_toppersystem=" + encodeURIComponent(document.getElementById('domain_toppersystem').value);
							http.open("POST", url, true);
							http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							http.send(params);
						}
					}
				}			
			}

		}else{

		}
	}
}

function run_lighthouse_toppersystem() {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;			
            if(hreflang_toppersystem == "it"){
                txtts0="Attendere il completamento dell'analisi di LightHouse";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="انتظر حتى يكتمل فحص LightHouse";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Warten Sie, bis der LightHouse-Scan abgeschlossen ist";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Espere a que se complete el escaneo de LightHouse";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Attendez la fin de l'analyse LightHouse";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="लाइटहाउस स्कैन पूरा होने तक प्रतीक्षा करें";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="LightHouse スキャンが完了するまで待ちます";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Poczekaj na zakończenie skanowania LightHouse";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Aguarde a conclusão da verificação do LightHouse";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="Дождитесь завершения сканирования LightHouse.";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="等待 LightHouse 扫描完成";
            }else if(hreflang_toppersystem == "he"){
                txtts0="המתן עד שהסריקה של LightHouse תסתיים";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Exspecta Pharus scan ad perficiendam";
            }else{
                txtts0="Wait for the LightHouse scan to complete";
            }
            document.getElementById('respons_txt').innerHTML="<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            document.getElementById('cicle_lighthouse_toppersystem').value="";
            setTimeout("analisy_lighthouse_toppersystem()", 80);
        }
    }  
}

function analisy_lighthouse_toppersystem() {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
          document.getElementById('start_verify_lighthouse_toppersystem').setAttribute("onclick","not_run_lighthouse_toppersystem()");
          const url = setUpQueryLightHouseToppersystem();
          fetch(url)
            .then(response => response.json())
            .then(json => {
                if(json.lighthouseResult){
                    document.getElementById('result_lighthouse_1_toppersystem').value=json.lighthouseResult.categories.performance.score;

                    const url = setUpQuery2LightHouseToppersystem();
                    fetch(url)
                      .then(response => response.json())
                      .then(json => {
                          if(json.lighthouseResult){
                              document.getElementById('result_lighthouse_2_toppersystem').value=json.lighthouseResult.categories.performance.score;
                              setTimeout("calcolate_different_lighthouse_toppersystem()", 80);
                          }else{
                              setTimeout("error_lighthouse_toppersystem()", 80);
                          }
                      });
                }else{
                    setTimeout("error_lighthouse_toppersystem()", 80);
                }
            });
        }
    }
}

function setUpQueryLightHouseToppersystem() {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
             const api = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed';
             const parameters = {
                url: encodeURIComponent(document.getElementById('pagefirst_lighthouse_toppersystem').value)
             };
             let query = `${api}?`;
             for (key in parameters) {
                query += `${key}=${parameters[key]}`;
             }
             return query;
        }
    }
}

function setUpQuery2LightHouseToppersystem() {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
             const api = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed';
             const parameters = {
                url: encodeURIComponent(document.getElementById('pagesecond_lighthouse_toppersystem').value)
             };
             let query = `${api}?`;
             for (key in parameters) {
                query += `${key}=${parameters[key]}`;
             }
             return query;
        }
    }
}

function not_run_lighthouse_toppersystem() {
}

function error_lighthouse_toppersystem() {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;	
            var txtts1;		
            if(hreflang_toppersystem == "it"){
                txtts0="Analisi Performance LightHouse";
                txtts1="Si è verificato un errore durante l'elaborazione! Ti invitiamo a riprovare.";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="تحليل أداء المنارة";
                txtts1="حدث خطأ أثناء معالجة! حاول مرة اخرى.";
            }else if(hreflang_toppersystem == "de"){
                txtts0="LightHouse-Leistungsanalyse";
                txtts1="Bei der Verarbeitung ist ein Fehler aufgetreten! Bitte versuche es erneut.";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Análisis de rendimiento de LightHouse";
                txtts1="¡Ocurrió un error durante el procesamiento! Inténtalo de nuevo.";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Analyse des performances de LightHouse";
                txtts1="Une erreur s'est produite lors du traitement ! Veuillez réessayer.";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="लाइटहाउस प्रदर्शन विश्लेषण";
                txtts1="प्रोसेस करने के दौरान एक एरर आ गया! कृपया पुन: प्रयास करें।";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="LightHouse のパフォーマンス分析";
                txtts1="処理中にエラーが発生しました。 もう一度試してください。";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Analiza wydajności LightHouse";
                txtts1="Wystąpił błąd podczas przetwarzania! Proszę spróbuj ponownie.";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Análise de desempenho do LightHouse";
                txtts1="Ocorreu um erro durante o processamento! Por favor, tente novamente.";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="Анализ производительности LightHouse";
                txtts1="Во время обработки произошла ошибка! Пожалуйста, попробуйте еще раз.";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="灯塔性能分析";
                txtts1="在处理过程中发生错误！ 请再试一次。";
            }else if(hreflang_toppersystem == "he"){
                txtts0="ניתוח ביצועים של LightHouse";
                txtts1="אירעה שגיאה במהלך העיבוד! בבקשה נסה שוב.";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Pharus euismod Analysis";
                txtts1="Error in processui occurrit! Quaero, iterum conare.";
            }else{
                txtts0="LightHouse Performance Analysis";
                txtts1="An error occurred during processing! Please try again.";
            }
            alert(txtts0 + "\n" + document.getElementById('pagefirst_lighthouse_toppersystem').value + "\n\n" + txtts1);
            document.getElementById('start_verify_lighthouse_toppersystem').setAttribute("onclick","run_lighthouse_toppersystem()");
            document.getElementById('respons_txt').innerHTML="&nbsp;";
            document.getElementById('result_lighthouse_1_toppersystem').value="";
            document.getElementById('result_lighthouse_2_toppersystem').value="";
        }
    }
}

function calcolate_different_lighthouse_toppersystem() {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;	
            var txtts1;	
            var txtts2;
            var txtts3;
            var txtts4;
            var txtts5;	
            if(hreflang_toppersystem == "it"){
                txtts0="Prima:";
                txtts1="Dopo:";
                txtts2="Miglioramento:";
                txtts3="Analisi Performance LightHouse";
                txtts4="Sembra che l'ottimizzazione non abbia prodotto significativi miglioramenti durante il processo di analisi!";
                txtts5="Ti invitiamo a riprovare a effettuare una nuova analisi oppure a modificare i parametri di ottimizzazione (immagini, css, javascript, cache)!";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قبل:";
                txtts1="بعد:";
                txtts2="تحسين:";
                txtts3="تحليل أداء المنارة";
                txtts4="يبدو أن التحسين لم ينتج عنه تحسينات كبيرة أثناء عملية التحليل!";
                txtts5="نحن ندعوك لتجربة تحليل جديد أو تغيير معلمات التحسين (الصور، CSS، جافا سكريبت، ذاكرة التخزين المؤقت)!";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Vor:";
                txtts1="Nach:";
                txtts2="Verbesserung:";
                txtts3="LightHouse-Leistungsanalyse";
                txtts4="Es scheint, dass die Optimierung während des Analyseprozesses keine wesentlichen Verbesserungen gebracht hat!";
                txtts5="Wir laden Sie ein, eine neue Analyse auszuprobieren oder die Optimierungsparameter (Bilder, CSS, Javascript, Cache) zu ändern!";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Antes:";
                txtts1="Después:";
                txtts2="Mejora:";
                txtts3="Análisis de rendimiento de LightHouse";
                txtts4="¡Parece que la optimización no produjo mejoras significativas durante el proceso de análisis!";
                txtts5="¡Te invitamos a probar un nuevo análisis o cambiar los parámetros de optimización (imágenes, css, javascript, caché)!";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Avant:";
                txtts1="Après:";
                txtts2="Amélioration:";
                txtts3="Analyse des performances de LightHouse";
                txtts4="Il semble que l’optimisation n’ait pas produit d’améliorations significatives lors du processus d’analyse !";
                txtts5="Nous vous invitons à tenter une nouvelle analyse ou à modifier les paramètres d'optimisation (images, css, javascript, cache) !";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पहले:";
                txtts1="बाद में:";
                txtts2="सुधार:";
                txtts3="लाइटहाउस प्रदर्शन विश्लेषण";
                txtts4="ऐसा लगता है कि विश्लेषण प्रक्रिया के दौरान अनुकूलन ने महत्वपूर्ण सुधार नहीं किए!";
                txtts5="हम आपको एक नया विश्लेषण आज़माने या अनुकूलन पैरामीटर (चित्र, सीएसएस, जावास्क्रिप्ट, कैश) बदलने के लिए आमंत्रित करते हैं!";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="前に：";
                txtts1="後：";
                txtts2="改善：";
                txtts3="LightHouse のパフォーマンス分析";
                txtts4="最適化によって分析プロセス中に大幅な改善がもたらされなかったようです。";
                txtts5="ぜひ新しい分析を試すか、最適化パラメータ (画像、CSS、JavaScript、キャッシュ) を変更してみてください。";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Zanim:";
                txtts1="Po:";
                txtts2="Poprawa:";
                txtts3="Analiza wydajności LightHouse";
                txtts4="Wydaje się, że optymalizacja nie przyniosła znaczących ulepszeń w procesie analizy!";
                txtts5="Zapraszamy do wypróbowania nowej analizy lub zmiany parametrów optymalizacji (obrazy, css, javascript, pamięć podręczna)!";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Antes:";
                txtts1="Depois:";
                txtts2="Melhoria:";
                txtts3="Análise de desempenho do LightHouse";
                txtts4="Parece que a otimização não produziu melhorias significativas durante o processo de análise!";
                txtts5="Convidamos você a experimentar uma nova análise ou alterar os parâmetros de otimização (imagens, css, javascript, cache)!";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="До:";
                txtts1="После:";
                txtts2="Улучшение:";
                txtts3="Анализ производительности LightHouse";
                txtts4="Похоже, оптимизация не дала существенных улучшений в процессе анализа!";
                txtts5="Приглашаем вас попробовать новый анализ или изменить параметры оптимизации (изображения, css, javascript, кеш)!";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="前：";
                txtts1="后：";
                txtts2="改进：";
                txtts3="灯塔性能分析";
                txtts4="看来优化在分析过程中并没有产生明显的提升！";
                txtts5="我们邀请您尝试新的分析或更改优化参数（图像、CSS、JavaScript、缓存）！";
            }else if(hreflang_toppersystem == "he"){
                txtts0="לפני:";
                txtts1="לאחר:";
                txtts2="הַשׁבָּחָה:";
                txtts3="ניתוח ביצועים של LightHouse";
                txtts4="נראה שהאופטימיזציה לא הניבה שיפורים משמעותיים במהלך תהליך הניתוח!";
                txtts5="אנו מזמינים אותך לנסות ניתוח חדש או לשנות את פרמטרי האופטימיזציה (תמונות, css, javascript, cache)!";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Ante:";
                txtts1="Post:";
                txtts2="Emendatio:";
                txtts3="Pharus euismod Analysis";
                txtts4="Videtur quod meliorizationis notabiles emendationes in analysi processu non protulerit!";
                txtts5="Invitamus te ut novam analysin experias vel parametros meliorizationis mutes (imagines, css, javascript, cache)!";
            }else{
                txtts0="Before:";
                txtts1="After:";
                txtts2="Improvement:";
                txtts3="LightHouse Performance Analysis";
                txtts4="It seems that the optimization did not produce significant improvements during the analysis process!";
                txtts5="We invite you to try a new analysis or change the optimization parameters (images, css, javascript, cache)!";
            }

            var optimize=Math.round(parseFloat(document.getElementById('result_lighthouse_1_toppersystem').value * 100));
            var original=Math.round(parseFloat(document.getElementById('result_lighthouse_2_toppersystem').value * 100));
            var difference=optimize - original;

            var class_original_result="";
            if(original <= 49){
                class_original_result="resultc_lighthouse_toppersystem_red";
            }else if (original >= 90){
                class_original_result="resultc_lighthouse_toppersystem_green";
            }else{
                class_original_result="resultc_lighthouse_toppersystem_orange";
            }

            var class_optimize_result="";
            if(optimize <= 49){
                class_optimize_result="resultc_lighthouse_toppersystem_red";
            }else if (optimize >= 90){
                class_optimize_result="resultc_lighthouse_toppersystem_green";
            }else{
                class_optimize_result="resultc_lighthouse_toppersystem_orange";
            }

            if(difference >= 1){
                document.getElementById('respons_txt').innerHTML="<strong>" + txtts0 + "</strong>&nbsp;<span class=\"" + class_original_result + "\">" + original + "</span>&nbsp;&nbsp;<strong>" + txtts1 + "</strong>&nbsp;<span class=\"" + class_optimize_result + "\">" + optimize + "</span>&nbsp;&nbsp;<strong>" + txtts2 + "</strong>&nbsp;<span class=\"resultc_lighthouse_toppersystem_green\">" + difference + "</span>";
            }else{
                if(document.getElementById('cicle_lighthouse_toppersystem').value == ""){
                    document.getElementById('cicle_lighthouse_toppersystem').value="1";
                    setTimeout("analisy_lighthouse_toppersystem()", 8000);
                }else{
                    //document.getElementById('respons_txt').innerHTML="&nbsp;";
                    document.getElementById('respons_txt').innerHTML="<strong>" + txtts0 + "</strong>&nbsp;<span class=\"" + class_original_result + "\">" + original + "</span>&nbsp;&nbsp;<strong>" + txtts1 + "</strong>&nbsp;<span class=\"" + class_optimize_result + "\">" + optimize + "</span>";
                    alert(txtts3 + "\n" + document.getElementById('pagefirst_lighthouse_toppersystem').value + "\n\n" + txtts4 + "\n\n" + txtts5);
                }
            }
            document.getElementById('start_verify_lighthouse_toppersystem').setAttribute("onclick","run_lighthouse_toppersystem()");
            document.getElementById('result_lighthouse_1_toppersystem').value="";
            document.getElementById('result_lighthouse_2_toppersystem').value="";
        }
    }
}

function url_original_toppersystem(url){
	var returnx="";
	if(url.trim() != ""){		
		var urlver = url.trim().replace('?', '');
		if(url.trim() != urlver.trim()){
			returnx=url + "&ts=no";
		}else{
			returnx=url + "?ts=no";
		}	
		urlver="";
		url="";
	}
	return returnx;
}

function StartProcessToppersystem2()
{
    if(ControllerFunction2() == true){	
        if(!document.getElementById('button_toppersystem')){

            var canonical_toppersystem=document.getElementById('canonical_toppersystem').value;
            var canonical_preview_toppersystem=document.getElementById('canonical_preview_toppersystem').value;
            var language_toppersystem=document.getElementById('language_toppersystem').value;
            var title_toppersystem=document.getElementById('title_toppersystem').value;
            var description_toppersystem=document.getElementById('description_toppersystem').value;
            var keywords_toppersystem=document.getElementById('keywords_toppersystem').value;
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value;
            var pageplugin_req_toppersystem=document.getElementById('pageplugin_req_toppersystem').value;
			var pageplugin_reqcss_toppersystem=document.getElementById('pageplugin_reqcss_toppersystem').value;
            
            var check_title_toppersystem=document.getElementById('check_title_toppersystem').value;
            var check_description_toppersystem=document.getElementById('check_description_toppersystem').value;
            var check_keywords_toppersystem=document.getElementById('check_keywords_toppersystem').value;            
            var keyword_toppersystem=document.getElementById('keyword_toppersystem').value;
            var category_toppersystem=document.getElementById('category_toppersystem').value;
			var images_toppersystem=document.getElementById('images_toppersystem').value;
			var check_images_a="";
			var check_images_b="";
			var check_images_c="";
			if(images_toppersystem == "0"){
				check_images_b="";
				check_images_a=" checked=\"checked\"";
				check_images_c="";
			}else if(images_toppersystem == "2"){
				check_images_a="";
				check_images_c=" checked=\"checked\"";
				check_images_b="";
			}else{
				check_images_a="";
				check_images_b=" checked=\"checked\"";
				check_images_c="";
			}

            var resolution_images_toppersystem="76";
            if(document.getElementById('resolution_images_toppersystem')){ 
                resolution_images_toppersystem=document.getElementById('resolution_images_toppersystem').value;
            }

            var check_stronglazyload_images_toppersystem="";
            if(document.getElementById('stronglazyload_images_toppersystem')){ 
                var stronglazyload_images_toppersystem=document.getElementById('stronglazyload_images_toppersystem').value;
                if(stronglazyload_images_toppersystem == "0"){
                    check_stronglazyload_images_toppersystem="";
                }else if(stronglazyload_images_toppersystem == "1"){
	                check_stronglazyload_images_toppersystem=" checked";
                }else{
                    check_stronglazyload_images_toppersystem="";
                }
            }

            var check_stronglazyload_video_toppersystem="";
            if(document.getElementById('stronglazyload_video_toppersystem')){ 
                var stronglazyload_video_toppersystem=document.getElementById('stronglazyload_video_toppersystem').value;
                if(stronglazyload_video_toppersystem == "0"){
                    check_stronglazyload_video_toppersystem="";
                }else if(stronglazyload_video_toppersystem == "1"){
	                check_stronglazyload_video_toppersystem=" checked";
                }else{
                    check_stronglazyload_video_toppersystem="";
                }
            }

            var check_text_ia_toppersystem="";
            if(document.getElementById('text_ia_toppersystem')){ 
                var text_ia_toppersystem=document.getElementById('text_ia_toppersystem').value;
                if(text_ia_toppersystem == "0"){
                    check_text_ia_toppersystem="";
                }else if(text_ia_toppersystem == "1"){
	                check_text_ia_toppersystem=" checked";
                }else{
                    check_text_ia_toppersystem="";
                }
            }
			
            var st_check_title_toppersystem;
            var st_css_title_toppersystem;
            if(check_title_toppersystem == "true"){
                st_check_title_toppersystem=" checked"; 
                st_css_title_toppersystem=" opacity_toppersystem";
            }else{
                st_check_title_toppersystem="";
                st_css_title_toppersystem="";
            }

            var st_check_description_toppersystem;
            var st_css_description_toppersystem;
            if(check_description_toppersystem == "true"){
                st_check_description_toppersystem=" checked"; 
                st_css_description_toppersystem=" opacity_toppersystem";
            }else{
                st_check_description_toppersystem="";
                st_css_description_toppersystem="";
            }

            var st_check_keywords_toppersystem;
            var st_css_keywords_toppersystem;
            if(check_keywords_toppersystem == "true"){
                st_check_keywords_toppersystem=" checked";
                st_css_keywords_toppersystem=" opacity_toppersystem";
            }else{
                st_check_keywords_toppersystem="";
                st_css_keywords_toppersystem="";
            }

            var class_view_intelligence_artificial_toppersystem="display_none_ts";
            if(document.getElementById('box_intelligence_artificial_toppersystem')){ 
                if(document.getElementById('box_intelligence_artificial_toppersystem').value == "1"){ 
                    class_view_intelligence_artificial_toppersystem="";
                }                        
            }

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
			var txtts31; 
			var txtts32; 
			var txtts33; 
			var txtts34; 
			var txtts35; 
			var txtts36; 
			var txtts37; 
			var txtts38;
			var txtts39; 
			var txtts40; 
			var txtts41; 
			var txtts42; 
			var txtts43; 
			var txtts44;
			var txtts47; 
			var txtts48; 
			var txtts49;
			var txtts50; 
			var txtts51; 
			var txtts52; 
			var txtts53; 
			var txtts54;
			var txtts55; 
			var txtts56; 
			var txtts57;
            var txtts58;
            var txtts59;
            var txtts60;
            var txtts61;
            var txtts62;
            var txtts63;
            var txtts64;
            var txtts65;
			var txtts66;
			var txtts67;
			var txtts68;
			var txtts69;
            var italy_ts="Italy";
            var italian_ts="Italian";
            if(hreflang_toppersystem == "it"){
                italy_ts="Italia";
                italian_ts="Italiano";

                txtts0="Lingua della pagina";
                txtts1="Campo obbligatorio";
                txtts2="Titolo di massimo 90 caratteri";
                txtts3="Lascia decidere a Topper System<sup> SEO</sup>";
                txtts4="Descrizione di massimo 120 caratteri";
                txtts5="Keywords massimo 8. Es: parola 1, parola 2, parola 3, ecc..";
                txtts6="Parola chiave principale";
                txtts7="Categoria della pagina oppure del sito. Es: servizi, intrattenimento, sport, ecc...";
                txtts8="Invia";
                txtts9="Chiudi";
                txtts10="Ottimizza questa pagina con Topper System<sup> SEO</sup>";
                txtts11="Per aumentare la sua velocit&agrave; e avere pi&ugrave; visibilit&agrave; in rete";
                txtts12="ATTENZIONE !!";
                txtts14="Per ottimizzare una pagina con Topper System SEO &egrave; necessario sia <i>&quot;Pubblica&quot;</i> !";
                txtts15="a) Clicca su &quot;Modifica pagina&quot;.";
                txtts16="b) Clicca su &quot;Pubblica&quot;.";
                txtts17="Suggerimenti per rendere &quot;Pubblica&quot; questa pagina:";
                txtts18="Ho letto e accetto le <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('it')\">condizioni d&acute;uso</a> di Topper System SEO.";
                txtts19="Pagina pubblica";
                txtts20="Attendere la conclusione del processo ...";
				txtts31="Ottimizzazione immagini";
				txtts32="Help";
				txtts33="nessuna";
				txtts34="intermedia";
				txtts35="avanzata";
				txtts36="<strong>Nessuna immagine sarà ottimizzata con Topper System SEO</strong>.<br>La selezione di &quot;nessuna&quot; è consigliata nel caso siano monitorate attività di rete troppo alte per cui il website subisce sensibili rallenatamenti durante la navigazione oppure siano osservati eccessivi carichi di lavoro del vostro server.";
				txtts37="";
				txtts38="";
				txtts39="Risulta mancante il tag canonical nel corpo della pagina.";
				txtts40="Il tag canonical è importante sia presente in tutte le pagine pubbliche del sito.";
				txtts41="Ti invitiamo ad aggiungere il tag canonical per questa pagina e riprovare.";
				txtts42="La url indicata nel tag canonical della pagina risulta non conforme con gli standard seo.";
				txtts43="Il tag canonical è importante corrisponda alla url della pagina.";
				txtts44="Ti invitiamo ad apportare la modifica suggerita in questa pagina e riprovare.";
                txtts47="Ottimizzazione risorse Javascript:";
                txtts48="Check";
                txtts49="Modifica";
                txtts50="La soluzione intermedia";
                txtts51="La selezione di &quot;intermedia&quot; è utile quando desideriamo che tutte le immagini rilevate nei tag img con larghezza maggiore di 100px e non ancora ottimizzate siano automaticamente ottimizzate per stage di 1200px, 1080px, 960px, 780px, 480px e 320px.";
                txtts52="Analisi e riscrittura attributi: src";
                txtts53="Analisi e riscrittura attributi: src-set";
                txtts54="Analisi e riscrittura css inline attributi: url";
                txtts55="Analisi e inserimento attributo: loading (moderno lazy load nativo)";
                txtts56="La soluzione avanzata";
                txtts57="La selezione di &quot;avanzata&quot; è consigliata se desideri che tutte le immagini rilevate nei tag img con larghezza maggiore di 100px e non ancora ottimizzate siano automaticamente ottimizzate per stage di 1200px, 1080px, 960px, 780px, 480px e 320px.";
                txtts58="Analisi e riscrittura attributi: src";
                txtts59="Analisi e riscrittura attributi: src-set";
                txtts60="Analisi e riscrittura attributi: data-src";
                txtts61="Analisi e riscrittura attributi: data-lazyload";
                txtts62="Analisi e riscrittura css inline attributi: url";
                txtts63="Analisi e inserimento attributo: width e hight";
                txtts64="Analisi e inserimento attributo: loading (moderno lazy load nativo)";
                txtts65="Analisi e dichiarazione mata dato preload per Largest Contentful Paint element";
				txtts66="Ottimizzazione risorse css:";
				txtts67="Risoluzione";
				txtts68="Delay";
				txtts69="Meta dati title e description riscritti con I.A.";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="لغة ال";
                txtts1="حقل إلزامي";
                txtts2="عنوان 90 حرفًا كحد أقصى";
                txtts3="دع نظام Topper يقرر";
                txtts4="وصف حتى 120 حرفًا";
                txtts5="الحد الأقصى للكلمات الرئيسية 8. مثال: الكلمة 1 ، الكلمة 2 ، الكلمة 3 ، إلخ.";
                txtts6="الكلمة الرئيسية";
                txtts7="فئة الصفحة أو الموقع. مثال: الخدمات ، الترفيه ، الرياضة ، إلخ ...";
                txtts8="عرض";
                txtts9="قريب";
                txtts10="تحسين هذه الصفحة مع نظام Topper";
                txtts11="لزيادة سرعته والحصول على مزيد من الرؤية على الشبكة";
                txtts12="انتباه !!";
                txtts14="لتحسين صفحة باستخدام Topper System SEO ، من الضروري <i>نشر</ i>!";
                txtts15="أ) انقر على  تحرير الصفحة";
                txtts16="ب) انقر فوق نشر";
                txtts17="نصائح لجعل هذه الصفحة نشر:";
                txtts18="لقد قرأت وأوافق على <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ar')\">شروط الاستخدام</a> بواسطة نظام توبر.";
                txtts19="الصفحة العامة";
                txtts20="انتظر حتى تنتهي العملية ...";
				txtts31="تحسين الصورة"; 
				txtts32="الدعم"; 
				txtts33="لا شيء"; 
				txtts34="متوسط ​​(موصى به)"; 
				txtts35="تقدم"; 
				txtts36="<strong>لن يتم تحسين أي صورة باستخدام نظام Topper</strong>.<br>اختيار  لا شيء يوصى إذا تم رصد أنشطة الشبكة عالية جدًا بحيث يتعرض موقع الويب لتباطؤ كبير أثناء التنقل أو لوحظت أحمال عمل مفرطة من الخادم الخاص بك."; 
				txtts37="";
				txtts38="";
				txtts39="العلامة الأساسية في نص الصفحة مفقودة.";
				txtts40="من المهم أن تكون العلامة الأساسية موجودة في جميع الصفحات العامة للموقع.";
				txtts41="الرجاء إضافة العلامة الأساسية لهذه الصفحة والمحاولة مرة أخرى.";
				txtts42="عنوان url المشار إليه في العلامة الأساسية للصفحة غير متوافق مع معايير تحسين محركات البحث.";
				txtts43="تعتبر العلامة الأساسية مهمة لمطابقة عنوان url للصفحة.";
				txtts44="يرجى إجراء التغيير المقترح على هذه الصفحة والمحاولة مرة أخرى.";
                txtts47="تحسين موارد جافا سكريبت:";
                txtts48="يفحص";
                txtts49="يحرر";
                txtts50="الحل الوسيط"; 
                txtts51="يكون التحديد الوسيط مفيدًا عندما نريد اكتشاف جميع الصور في علامات img بعرض أكبر من 100 بكسل ولم يتم تحسينها بعد ليتم تحسينها تلقائيًا لمراحل 1200 بكسل و 1080 بكسل و 960 بكسل و 780 بكسل و 480 بكسل و 320 بكسل."; 
                txtts52="تحليل وإعادة كتابة السمات: src"; 
                txtts53="تحليل وإعادة كتابة السمات: src-set"; 
                txtts54="تحليل وإعادة كتابة السمات المضمنة لـ css: url";
                txtts55="تحليل السمات وإدخالها: التحميل (الحمل البطيء الأصلي الحديث)"; 
                txtts56="الحل المتقدم"; 
                txtts57="يوصى بتحديد خيارات متقدمة إذا كنت تريد جميع الصور الموجودة في علامات img بعرض أكبر من 100 بكسل ولم يتم تحسينها بعد ليتم تحسينها تلقائيًا لمراحل 1200 بكسل و 1080 بكسل و 960 بكسل و 780 بكسل و 480 بكسل و 320 بكسل.";
                txtts58="تحليل وإعادة كتابة السمات: src";
                txtts59="تحليل وإعادة كتابة السمات: src-set";
                txtts60="تحليل وإعادة كتابة السمات: data-src";
                txtts61="تحليل وإعادة كتابة السمات: data-lazyload";
                txtts62="تحليل وإعادة كتابة السمات المضمنة لـ css: url";
                txtts63="تحليل وإدخال السمات: العرض والارتفاع";
                txtts64="تحليل السمات وإدخالها: التحميل (الحمل البطيء الأصلي الحديث)";
                txtts65="تحليل وإعلان بيانات التحميل المسبق لبيانات أكبر عنصر Contentful Paint";
				txtts66="تحسين موارد جافا سcss:";
				txtts67="دقة";
				txtts68="Delay";
				txtts69="تمت إعادة كتابة البيانات الوصفية للعنوان والوصف باستخدام الذكاء الاصطناعي.";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Sprache der Seite";
                txtts1="Pflichtfeld";
                txtts2="Titel mit maximal 90 Zeichen";
                txtts3="Lassen Sie Topper System<sup> SEO</sup> entscheiden";
                txtts4="Beschreibung von bis zu 120 Zeichen";
                txtts5="Maximale Schlüsselwörter 8. Beispiel: Wort 1, Wort 2, Wort 3 usw.";
                txtts6="Hauptschlüsselwort";
                txtts7="Kategorie der Seite oder Site. Bsp.: Dienstleistungen, Unterhaltung, Sport usw.";
                txtts8="einreichen";
                txtts9="schließen";
                txtts10="Optimieren Sie diese Seite mit Topper System<sup> SEO</sup>";
                txtts11="Um die Geschwindigkeit zu erhöhen und mehr Sichtbarkeit im Netz zu haben";
                txtts12="ACHTUNG !!";
                txtts14="Um eine Seite mit Topper System SEO zu optimieren, muss <i>&quot;Veröffentlichen&quot;</i> !";
                txtts15="a) Klicken Sie auf &quot;Seite bearbeiten&quot;.";
                txtts16="b) Klicken Sie auf &quot;Veröffentlichen&quot;.";
                txtts17="Tipps, um diese Seite zum &quot;Veröffentlichen&quot; zu machen:";
                txtts18="Ich habe das <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('de')\">gelesen und akzeptiert Nutzungsbedingungen</a> von Topper System SEO.";
                txtts19="Öffentliche Seite";
                txtts20="Warten Sie, bis der Vorgang beendet ist ...";
				txtts31="Bildoptimierung"; 
				txtts32="Unterstützung"; 
				txtts33="keiner"; 
				txtts34="Mittelstufe"; 
				txtts35="voraus"; 
				txtts36="<strong>Mit Topper System SEO</strong> wird kein Bild optimiert.<br>Auswahl von &quot;none&quot; Es wird empfohlen, wenn die Netzwerkaktivitäten zu hoch überwacht werden, damit die Website während der Navigation erheblich verlangsamt wird oder übermäßige Arbeitslasten beobachtet werden Ihres Servers."; 
				txtts37="";
				txtts38="";
				txtts39="Das Canonical-Tag im Body der Seite fehlt.";
				txtts40="Das Canonical-Tag muss auf allen öffentlichen Seiten der Website vorhanden sein.";
				txtts41="Bitte fügen Sie das Canonical-Tag für diese Seite hinzu und versuchen Sie es erneut.";
				txtts42="Die im Canonical-Tag der Seite angegebene URL entspricht nicht den SEO-Standards.";
				txtts43="Das Canonical-Tag ist wichtig, um mit der URL der Seite übereinzustimmen.";
				txtts44="Bitte nehmen Sie die vorgeschlagene Änderung auf dieser Seite vor und versuchen Sie es erneut.";
                txtts47="Javascript-Ressourcenoptimierung:";
                txtts48="Prüfen";
                txtts49="Bearbeiten";
                txtts50="Die Zwischenlösung"; 
                txtts51="Die Zwischenauswahl ist nützlich, wenn alle Bilder, die in img-Tags mit einer Breite von mehr als 100 Pixel erkannt und noch nicht optimiert wurden, automatisch für Stufen von 1200 Pixel, 1080 Pixel, 960 Pixel, 780 Pixel, 480 Pixel und 320 Pixel optimiert werden sollen."; 
                txtts52="Attribute parsen und umschreiben: src"; 
                txtts53="Analysieren und Umschreiben von Attributen: src-set"; 
                txtts54="Parsen und Umschreiben von CSS-Inline-Attributen: url";
                txtts55="Attributanalyse und Eingabe: Laden (modernes natives Lazy Load)"; 
                txtts56="Die fortschrittliche Lösung"; 
                txtts57="Die Auswahl von Erweitert wird empfohlen, wenn Sie möchten, dass alle Bilder, die in img-Tags mit einer Breite von mehr als 100 Pixel gefunden werden und noch nicht optimiert sind, automatisch für Stufen von 1200 Pixel, 1080 Pixel, 960 Pixel, 780 Pixel, 480 Pixel und 320 Pixel optimiert werden sollen.";
                txtts58="Attribute parsen und umschreiben: src";
                txtts59="Analysieren und Umschreiben von Attributen: src-set";
                txtts60="Attribute parsen und umschreiben: data-src";
                txtts61="Analysieren und Umschreiben von Attributen: Data-Lazyload";
                txtts62="Parsen und Umschreiben von CSS-Inline-Attributen: url";
                txtts63="Attribut-Parsing und -Eingabe: Breite und Höhe";
                txtts64="Attributanalyse und Eingabe: Laden (modernes natives Lazy Load)";
                txtts65="Analyse und Deklaration von vorab geladenen Daten für das Largest Contentful Paint-Element";
				txtts66="css-Ressourcenoptimierung:";
				txtts67="Auflösung";
				txtts68="Delay";
				txtts69="Titel- und Beschreibungsmetadaten mit A.I. neu geschrieben";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Idioma de la página";
                txtts1="Campo obligatorio";
                txtts2="Título de un máximo de 90 caracteres.";
                txtts3="Deje que el sistema Topper decida";
                txtts4="Descripción de hasta 120 caracteres.";
                txtts5="Máximo de palabras clave 8. Ej: palabra 1, palabra 2, palabra 3, etc.";
                txtts6="Palabra clave principal";
                txtts7="Categoría de la página o sitio. Ej: servicios, entretenimiento, deportes, etc.";
                txtts8="presentar";
                txtts9="cerca";
                txtts10="Optimice esta página con Topper System<sup> SEO</sup>";
                txtts11="Para aumentar su velocidad y tener más visibilidad en la red.";
                txtts12="ATENCION !!";
                txtts14="¡Para optimizar una página con Topper System SEO es necesario <i>&quot;Publicar&quot;</i> !";
                txtts15="a) Haga clic en &quot;Editar página&quot;.";
                txtts16="b) Haga clic en &quot;Publicar&quot;.";
                txtts17="Consejos para hacer esta página &quot;Publicar&quot;";
                txtts18="He leído y acepto el <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('es')\">condiciones de uso</a> por el Topper System SEO.";
                txtts19="Página pública";
                txtts20="Espera a que termine el proceso ...";
				txtts31="Optimización de imagen"; 
				txtts32="Apoyo"; 
				txtts33="ninguna"; 
				txtts34="intermedio"; 
				txtts35="avanzar"; 
				txtts36="<strong>Ninguna imagen se optimizará con Topper System SEO</strong>.<br>Selección de &quot;ninguna&quot; se recomienda si las actividades de la red se monitorean demasiado alto, por lo que el sitio web experimenta ralentizaciones significativas durante la navegación o se observan cargas de trabajo excesivas de su servidor"; 
				txtts37="";
				txtts38="";
				txtts39="Falta la etiqueta canónica en el cuerpo de la página.";
				txtts40="Es importante que la etiqueta canónica esté presente en todas las páginas públicas del sitio.";
				txtts41="Agregue la etiqueta canónica para esta página y vuelva a intentarlo.";
				txtts42="La url indicada en la etiqueta canónica de la página no cumple con los estándares de SEO.";
				txtts43="La etiqueta canónica es importante para que coincida con la URL de la página.";
				txtts44="Realice el cambio sugerido en esta página y vuelva a intentarlo.";
                txtts47="Optimización de recursos Javascript:";
                txtts48="Controlar";
                txtts49="Editar";
                txtts50="La solución intermedia"; 
                txtts51="La selección intermedia es útil cuando queremos que todas las imágenes detectadas en etiquetas img con un ancho superior a 100 px y aún no optimizadas se optimicen automáticamente para etapas de 1200 px, 1080 px, 960 px, 780 px, 480 px y 320 px."; 
                txtts52="Analizando y reescribiendo atributos: src"; 
                txtts53="Analizando y reescribiendo atributos: src-set"; 
                txtts54="Análisis y reescritura de atributos en línea css: url";
                txtts55="Análisis y entrada de atributos: carga (carga diferida nativa moderna)"; 
                txtts56="La solución avanzada"; 
                txtts57="Se recomienda seleccionar avanzado si desea que todas las imágenes que se encuentran en etiquetas img con un ancho superior a 100 px y aún no optimizadas se optimicen automáticamente para etapas de 1200 px, 1080 px, 960 px, 780 px, 480 px y 320 px.";
                txtts58="Analizando y reescribiendo atributos: src";
                txtts59="Analizando y reescribiendo atributos: src-set";
                txtts60="Analizando y reescribiendo atributos: data-src";
                txtts61="Analizando y reescribiendo atributos: data-lazyload";
                txtts62="Análisis y reescritura de atributos en línea css: url";
                txtts63="Análisis y entrada de atributos: ancho y alto";
                txtts64="Análisis y entrada de atributos: carga (carga diferida nativa moderna)";
                txtts65="Análisis y declaración de mata de datos de precarga para el elemento de pintura con contenido más grande";
				txtts66="Optimización de recursos css:";
				txtts67="Resolución";
				txtts68="Delay";
				txtts69="Metadatos de título y descripción reescritos con A.I.";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Langue de la page";
                txtts1="Champ obligatoire";
                txtts2="Titre de 90 caractères maximum";
                txtts3="Laissez Topper System<sup> SEO</sup> décider";
                txtts4="Description de jusqu'à 120 caractères";
                txtts5="Mots clés maximum 8. Ex: mot 1, mot 2, mot 3, etc.";
                txtts6="Mot-clé principal";
                txtts7="Catégorie de la page ou du site. Ex: services, divertissement, sports, etc ...";
                txtts8="soumettre";
                txtts9="proche";
                txtts10="Optimisez cette page avec Topper System<sup> SEO</sup>";
                txtts11="Augmenter sa vitesse et avoir plus de visibilité sur le net";
                txtts12="ATTENTION !!";
                txtts14="Pour optimiser une page avec Topper System SEO il faut <i>&quot;Publier&quot;</i> !";
                txtts15="a) Cliquez sur &quot;Modifier la page&quot;";
                txtts16="b) Cliquez sur &quot;Publier&quot;.";
                txtts17="Conseils pour rendre cette page &quot;Publiée&quot;";
                txtts18="J'ai lu et j'accepte le <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('fr')\">conditions d'utilisation</a> par Topper System SEO.";
                txtts19="Page publique";
                txtts20="Attendez la fin du processus ...";
				txtts31="Optimisation d'image"; 
				txtts32="Soutien"; 
				txtts33="aucun"; 
				txtts34="intermédiaire"; 
				txtts35="avance"; 
				txtts36="<strong>Aucune image ne sera optimisée avec Topper System SEO</strong>.<br>Sélection de &quot;aucune&quot; il est recommandé si les activités du réseau sont surveillées trop haut afin que le site Web subisse des ralentissements importants pendant la navigation ou des charges de travail excessives sont observées de votre serveur."; 
				txtts37="";
				txtts38="";
				txtts39="La balise canonique dans le corps de la page est manquante.";
				txtts40="La balise canonique est importante pour être présente sur toutes les pages publiques du site.";
				txtts41="Veuillez ajouter la balise canonique pour cette page et réessayer.";
				txtts42="L'url indiquée dans la balise canonique de la page n'est pas conforme aux normes seo.";
				txtts43="La balise canonique est importante pour correspondre à l'url de la page.";
				txtts44="Veuillez apporter la modification suggérée sur cette page et réessayer.";
                txtts47="Optimisation des ressources Javascript:";
                txtts48="Vérifier";
                txtts49="Éditer";
                txtts50="La solution intermédiaire"; 
                txtts51="La sélection intermédiaire est utile lorsque nous voulons que toutes les images détectées dans les balises img avec une largeur supérieure à 100px et non encore optimisées soient automatiquement optimisées pour les étapes de 1200px, 1080px, 960px, 780px, 480px et 320px."; 
                txtts52="Attributs d'analyse et de réécriture: src"; 
                txtts53="Attributs d'analyse et de réécriture: src-set"; 
                txtts54="Analyse et réécriture des attributs css inline : url";
                txtts55="Analyse et saisie des attributs : chargement (lazy load natif moderne)"; 
                txtts56="La solution avancée"; 
                txtts57="La sélection avancée est recommandée si vous souhaitez que toutes les images trouvées dans les balises img avec une largeur supérieure à 100px et non encore optimisées soient automatiquement optimisées pour les étapes de 1200px, 1080px, 960px, 780px, 480px et 320px.";
                txtts58="Attributs d'analyse et de réécriture: src";
                txtts59="Attributs d'analyse et de réécriture: src-set";
                txtts60="Attributs d'analyse et de réécriture: data-src";
                txtts61="Attributs d'analyse et de réécriture: data-lazyload";
                txtts62="Analyse et réécriture des attributs css inline: url";
                txtts63="Analyse et saisie d'attribut: largeur et hauteur";
                txtts64="Analyse et saisie des attributs : chargement (lazy load natif moderne)";
                txtts65="Analyse et déclaration des mata de données de préchargement pour l'élément Largest Contentful Paint";
				txtts66="Optimisation des ressources css:";
				txtts67="Résolution";
				txtts68="Delay";
				txtts69="Métadonnées de titre et de description réécrites avec l’I.A.";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पृष्ठ की";
                txtts1="अनिवार्य क्षेत्र";
                txtts2="अधिकतम 90 वर्णों का शीर्षक";
                txtts3="टॉपर सिस्टम तय करें";
                txtts4="अधिकतम 120 वर्णों का वर्णन";
                txtts5="अधिकतम कीवर्ड 8. पूर्व: शब्द 1, शब्द 2, शब्द 3, आदि।";
                txtts6="मुख्य कीवर्ड";
                txtts7="पृष्ठ या साइट की श्रेणी। पूर्व: सेवाएं, मनोरंजन, खेल, आदि ...";
                txtts8="प्रस्तुत करना";
                txtts9="पास";
                txtts10="इस पेज को टॉपर सिस्टम से ऑप्टिमाइज़ करें";
                txtts11="इसकी गति बढ़ाने के लिए और नेट पर अधिक दृश्यता है";
                txtts12="ध्यान !!";
                txtts14="टॉपर सिस्टम वाले पेज को ऑप्टिमाइज़ करने के लिए यह आवश्यक है कि <i>&quot;प्रकाशित क&quot;</i> !";
                txtts15="a) पेज संपादित करें  &quot;पर क्लिक करें&quot;.";
                txtts16="बी) &quot;प्रकाशित करें&quot; पर क्लिक करें";
                txtts17="इस पृष्ठ को &quot;प्रकाशित&quot;करने के लिए सुझाव:";
                txtts18="मैंने पढ़ा और स्वीकार किया है <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('hi')\">उपयोग की शर्तें</a> टॉपर सिस्टम द्वारा।";
                txtts19="सार्वजनिक पृष्ठ";
                txtts20="प्रक्रिया समाप्त होने की प्रतीक्षा करें ...";
				txtts31="छवि अनुकूलन"; 
				txtts32="सहयोग"; 
				txtts33="कोई नहीं"; 
				txtts34="मध्यवर्ती "; 
				txtts35="अग्रिम"; 
				txtts36="<strong>कोई छवि टॉपर सिस्टम के साथ अनुकूलित नहीं होगी</strong><br><br>का चयन &quot;कोई नहीं&quot;यह सिफारिश की जाती है यदि नेटवर्क गतिविधियों पर बहुत अधिक निगरानी रखी जाती है तो वेबसाइट नेविगेशन के दौरान महत्वपूर्ण मंदी से गुजरती है या अत्यधिक वर्कलोड मनाया जाता है आपके सर्वर के।"; 
				txtts37="";
				txtts38="";
				txtts39="पेज के मुख्य भाग में कैननिकल टैग मौजूद नहीं है.";
				txtts40="विहित टैग साइट के सभी सार्वजनिक पृष्ठों पर मौजूद होना महत्वपूर्ण है।";
				txtts41="कृपया इस पृष्ठ के लिए कैननिकल टैग जोड़ें और पुनः प्रयास करें।";
				txtts42="पेज के कैननिकल टैग में दर्शाया गया यूआरएल एसईओ मानकों के अनुरूप नहीं है।";
				txtts43="कैनोनिकल टैग पेज के यूआरएल से मेल खाने के लिए महत्वपूर्ण है।";
				txtts44="कृपया इस पृष्ठ पर सुझाए गए परिवर्तन करें और पुनः प्रयास करें।";
                txtts47="जावास्क्रिप्ट संसाधन अनुकूलन:";
                txtts48="जांच";
                txtts49="संपादन करना";
                txtts50="मध्यवर्ती समाधान"; 
                txtts51="मध्यवर्ती चयन तब उपयोगी होता है जब हम चाहते हैं कि 100px से अधिक चौड़ाई वाले img टैग में सभी छवियों का पता लगाया जाए और अभी तक 1200px, 1080px, 960px, 780px, 480px और 320px के चरणों के लिए स्वचालित रूप से अनुकूलित नहीं किया गया हो।"; 
                txtts52="पार्सिंग और पुनर्लेखन विशेषताएँ: src"; 
                txtts53="पार्सिंग और पुनर्लेखन विशेषताएँ: src-set"; 
                txtts54="सीएसएस इनलाइन विशेषताओं को पार्सिंग और पुनर्लेखन: यूआरएल";
                txtts55="विशेषता विश्लेषण और प्रविष्टि: लोड हो रहा है (आधुनिक देशी आलसी लोड)"; 
                txtts56="उन्नत समाधान"; 
                txtts57="उन्नत का चयन करने की अनुशंसा की जाती है यदि आप चाहते हैं कि img टैग में 100px से अधिक चौड़ाई वाली सभी छवियां पाई जाएं और अभी तक 1200px, 1080px, 960px, 780px, 480px और 320px के चरणों के लिए स्वचालित रूप से अनुकूलित न हों।";
                txtts58="पार्सिंग और पुनर्लेखन विशेषताएँ: src";
                txtts59="पार्सिंग और पुनर्लेखन विशेषताएँ: src-set";
                txtts60="पार्सिंग और पुनर्लेखन विशेषताएँ: डेटा-src";
                txtts61="पार्सिंग और पुनर्लेखन विशेषताएँ: data-lazyload";
                txtts62="सीएसएस इनलाइन विशेषताओं को पार्सिंग और पुनर्लेखन: यूआरएल";
                txtts63="विशेषता पार्सिंग और इनपुट: चौड़ाई और ऊंचाई";
                txtts64="विशेषता विश्लेषण और प्रविष्टि: लोड हो रहा है (आधुनिक देशी आलसी लोड)";
                txtts65="सबसे बड़े कंटेंटफुल पेंट एलिमेंट के लिए प्रीलोड डेटा मैटा का विश्लेषण और घोषणा";
				txtts66="जावास्क्रिप्ट संसाधन css:";
				txtts67="संकल्प";
				txtts68="Delay";
				txtts69="शीर्षक और विवरण मेटा डेटा को ए.आई. के साथ पुनः लिखा गया।";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="ページの言語。 ";
                txtts1="必須フィールド";
                txtts2="最大90文字のタイトル";
                txtts3="トッパーシステムに決定させる";
                txtts4="120文字までの説明";
                txtts5="キーワードの最大数8.例：ワード1、ワード2、ワード3など。";
                txtts6="主なキーワード";
                txtts7="ページまたはサイトのカテゴリ。 例：サービス、エンターテイメント、スポーツなど...";
                txtts8="提出します";
                txtts9="近いです";
                txtts10="トッパーシステムでこのページを最適化する";
                txtts11="速度を上げてネット上での視認性を高める";
                txtts12="注意!!";
                txtts14="Topper System SEOでページを最適化するには、<i>「公開」</ i>する必要があります。";
                txtts15="a）＆quot;Edit page＆quot;をクリックします";
                txtts16="b）「公開」をクリックします";
                txtts17="このページを「公開」するためのヒント：";
                txtts18="<a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ja')\">を読み、同意します 使用条件</a> トッパーシステムによる";
                txtts19="公開ページ";
                txtts20="プロセスが終了するのを待ちます...";
				txtts31="画像の最適化"; 
				txtts32="サポート"; 
				txtts33="無し"; 
				txtts34="中間"; 
				txtts35="前進"; 
				txtts36="<strong>トッパーシステムで最適化される画像はありません</strong>。<br>&quot;noneの選択&quot;ネットワークアクティビティの監視が高すぎるため、ナビゲーション中にWebサイトが大幅にスローダウンしたり、過度のワークロードが観察されたりする場合に推奨されますサーバーの。"; 
				txtts37="";
				txtts38="";
				txtts39="ページの本文に正規タグがありません。";
				txtts40="正規タグは、サイトのすべての公開ページに存在することが重要です。";
				txtts41="このページの正規タグを追加して、再試行してください。";
				txtts42="ページの正規タグに示されているURLは、seo標準に準拠していません。";
				txtts43="正規タグは、ページのURLと一致させるために重要です。";
				txtts44="このページで提案された変更を行って、再試行してください。";
                txtts47="Javascript リソースの最適化:";
                txtts48="小切手";
                txtts49="編集";
                txtts50="中間ソリューション"; 
                txtts51="中間選択は、幅が 100px を超え、まだ最適化されていない img タグで検出されたすべての画像を、1200px、1080px、960px、780px、480px、および 320px の段階で自動的に最適化する場合に便利です。"; 
                txtts52="属性の解析と書き換え: src"; 
                txtts53="属性の解析と書き換え: src-set"; 
                txtts54="css インライン属性の解析と書き換え: url";
                txtts55="属性の分析と入力: 読み込み (最新のネイティブ遅延読み込み)"; 
                txtts56="高度なソリューション"; 
                txtts57="幅が 100px を超え、まだ最適化されていない img タグ内のすべての画像を、1200px、1080px、960px、780px、480px、および 320px の段階で自動的に最適化する場合は、詳細を選択することをお勧めします。";
                txtts58="属性の解析と書き換え: src";
                txtts59="属性の解析と書き換え: src-set";
                txtts60="属性の解析と書き換え: data-src";
                txtts61="属性の解析と書き換え: data-lazyload";
                txtts62="css インライン属性の解析と書き換え: url";
                txtts63="属性の解析と入力: 幅と高さ";
                txtts64="属性の分析と入力: 読み込み (最新のネイティブ遅延読み込み)";
                txtts65="Largest Contentful Paint 要素のプリロード データの分析と宣言";
				txtts66="css リソースの最適化:";
				txtts67="解決";
				txtts68="Delay";
				txtts69="A.I.で書き換えられたタイトルと説明のメタデータ";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Język strony";
                txtts1="Pole obowiązkowe";
                txtts2="Tytuł maksymalnie 90 znaków";
                txtts3="Niech Topper System SEO zdecyduje";
                txtts4="Opis do 120 znaków";
                txtts5="Maksymalne słowa kluczowe 8. Np .: słowo 1, słowo 2, słowo 3 itd.";
                txtts6="Główne słowo kluczowe";
                txtts7="Kategoria strony lub witryny. Np .: usługi, rozrywka, sport itp.";
                txtts8="przedkładać";
                txtts9="blisko";
                txtts10="Zoptymalizuj tę stronę za pomocą Topper System<sup> SEO</sup>";
                txtts11="Aby zwiększyć prędkość i mieć lepszą widoczność w sieci";
                txtts12="UWAGA !!";
                txtts14="Aby zoptymalizować stronę za pomocą Topper System SEO, należy <i>&quot;Publikuj&quot;</i> !";
                txtts15="a) Kliknij &quot;Edytuj stronę&quot;.";
                txtts16="b) Kliknij &quot;Publikuj&quot;.";
                txtts17="Wskazówki dotyczące tworzenia tej strony &quot;Publikuj&quot;";
                txtts18="Przeczytałem i akceptuję <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('pl')\">warunki użytkowania</a> przez Topper System SEO.";
                txtts19="Strona publiczna";
                txtts20="Poczekaj na zakończenie procesu ...";
				txtts31="Optymalizacja obrazu"; 
				txtts32="Wsparcie"; 
				txtts33="Żaden"; 
				txtts34="pośredni"; 
				txtts35="postęp"; 
				txtts36="<strong>Żaden obraz nie zostanie zoptymalizowany dzięki Topper System SEO</strong>.<br>Wybór &quot;brak&quot; zaleca się, jeśli aktywność sieciowa jest monitorowana zbyt wysoko, aby strona uległa znacznemu spowolnieniu podczas nawigacji lub zaobserwowano nadmierne obciążenie pracą twojego serwera."; 
				txtts37="";
				txtts38="";
				txtts39="Brak tagu kanonicznego w treści strony.";
				txtts40="Znacznik kanoniczny jest ważny, aby był obecny na wszystkich publicznych stronach witryny.";
				txtts41="Dodaj tag kanoniczny dla tej strony i spróbuj ponownie.";
				txtts42="Adres URL wskazany w tagu kanonicznym strony jest niezgodny ze standardami SEO.";
				txtts43="Tag kanoniczny jest ważny, aby pasował do adresu URL strony.";
				txtts44="Wprowadź sugerowaną zmianę na tej stronie i spróbuj ponownie.";
                txtts47="Optymalizacja zasobów JavaScript:";
                txtts48="Sprawdzać";
                txtts49="Edytować";
                txtts50="Rozwiązanie pośrednie"; 
                txtts51="Wybór pośredni jest przydatny, gdy chcemy, aby wszystkie obrazy wykryte w tagach img o szerokości większej niż 100px i jeszcze niezoptymalizowane zostały automatycznie zoptymalizowane dla etapów 1200px, 1080px, 960px, 780px, 480px i 320px."; 
                txtts52="Analizowanie i przepisywanie atrybutów: src"; 
                txtts53="Analizowanie i przepisywanie atrybutów: src-set"; 
                txtts54="Analizowanie i przepisywanie wbudowanych atrybutów css: url";
                txtts55="Analiza i wprowadzanie atrybutów: ładowanie (nowoczesne natywne lazy load)"; 
                txtts56="Zaawansowane rozwiązanie"; 
                txtts57="Wybranie opcji zaawansowane jest zalecane, jeśli chcesz, aby wszystkie obrazy znalezione w tagach img o szerokości większej niż 100 pikseli i jeszcze niezoptymalizowane były automatycznie optymalizowane dla etapów 1200 pikseli, 1080 pikseli, 960 pikseli, 780 pikseli, 480 pikseli i 320 pikseli.";
                txtts58="Analizowanie i przepisywanie atrybutów: src";
                txtts59="Analizowanie i przepisywanie atrybutów: src-set";
                txtts60="Analizowanie i przepisywanie atrybutów: data-src";
                txtts61="Parsowanie i przepisywanie atrybutów: data-lazyload";
                txtts62="Analizowanie i przepisywanie wbudowanych atrybutów css: url";
                txtts63="Analiza i wprowadzanie atrybutów: szerokość i wysokość";
                txtts64="Analiza i wprowadzanie atrybutów: ładowanie (nowoczesne natywne lazy load)";
                txtts65="Analiza i deklaracja preload data mat dla elementu Largest Contentful Paint";
				txtts66="Optymalizacja zasobów css:";
				txtts67="Rezolucja";
				txtts68="Delay";
				txtts69="Metadane tytułu i opisu przepisane za pomocą A.I.";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Idioma da página";
                txtts1="Campo obrigatório";
                txtts2="Título com no máximo 90 caracteres";
                txtts3="Deixe o Topper System<sup> SEO</sup> decidir";
                txtts4="Descrição de até 120 caracteres";
                txtts5="Máximo de palavras-chave 8. Ex: palavra 1, palavra 2, palavra 3, etc.";
                txtts6="Palavra-chave principal";
                txtts7="Categoria da página ou site. Ex: serviços, entretenimento, esportes, etc ...";
                txtts8="submeter";
                txtts9="perto";
                txtts10="Otimize esta página com o Topper System<sup> SEO</sup>";
                txtts11="Para aumentar sua velocidade e ter mais visibilidade na rede";
                txtts12="ATENÇÃO !!";
                txtts14="Para otimizar uma página com o Topper System SEO, é necessário <i>&quot;Publicar&quot;</i> !";
                txtts15="a) Clique em &quot;Editar página&quot;.";
                txtts16="b) Clique em &quot;Publicar&quot;.";
                txtts17="Dicas para tornar esta página &quot;Publicar&quot;:";
                txtts18="Eu li e aceito o <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('pt')\">condições de uso</a> pelo Topper System SEO.";
                txtts19="Página pública";
                txtts20="Aguarde o processo terminar ...";
				txtts31="Otimização de imagem"; 
				txtts32="Apoio, suporte"; 
				txtts33="Nenhum"; 
				txtts34="intermediário"; 
				txtts35="avançar"; 
				txtts36="<strong>Nenhuma imagem será otimizada com o Topper System SEO.</strong>.<br>Seleção de &quot;nenhuma&quot; Recomenda-se que as atividades da rede sejam monitoradas muito alto para que o site sofra lentidão significativa durante a navegação ou observe cargas de trabalho excessivas do seu servidor."; 
				txtts37="";
				txtts38="";
				txtts39="A tag canônica no corpo da página está ausente.";
				txtts40="A canonical tag é importante para estar presente em todas as páginas públicas do site.";
				txtts41="Adicione a tag canônica para esta página e tente novamente.";
				txtts42="A url indicada na tag canônica da página não está em conformidade com os padrões de SEO.";
				txtts43="A tag canônica é importante para corresponder ao URL da página.";
				txtts44="Faça a alteração sugerida nesta página e tente novamente.";
                txtts47="Otimização de recursos Javascript:";
                txtts48="Verificar";
                txtts49="Editar";
                txtts50="A solução intermediária"; 
                txtts51="A seleção intermediária é útil quando queremos que todas as imagens detectadas em img tags com largura maior que 100px e ainda não otimizadas sejam otimizadas automaticamente para estágios de 1200px, 1080px, 960px, 780px, 480px e 320px."; 
                txtts52="Analisando e reescrevendo atributos: src"; 
                txtts53="Analisando e reescrevendo atributos: src-set"; 
                txtts54="Analisando e reescrevendo atributos inline CSS: url";
                txtts55="Análise e entrada de atributo: carregamento (carga preguiçosa nativa moderna)"; 
                txtts56="A solução avançada"; 
                txtts57="A seleção avançada é recomendada se você deseja que todas as imagens encontradas em tags img com largura maior que 100px e ainda não otimizadas sejam otimizadas automaticamente para estágios de 1200px, 1080px, 960px, 780px, 480px e 320px.";
                txtts58="Analisando e reescrevendo atributos: src";
                txtts59="Analisando e reescrevendo atributos: src-set";
                txtts60="Analisando e reescrevendo atributos: data-src";
                txtts61="Analisando e reescrevendo atributos: data-lazyload";
                txtts62="Analisando e reescrevendo atributos inline CSS: url";
                txtts63="Análise e entrada de atributo: largura e altura";
                txtts64="Análise e entrada de atributo: carregamento (carga preguiçosa nativa moderna)";
                txtts65="Análise e declaração de dados de pré-carregamento mata para o elemento de pintura de maior conteúdo";
				txtts66="Otimização de recursos css:";
				txtts67="Resolução";
				txtts68="Delay";
				txtts69="Metadados de título e descrição reescritos com IA";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="Язык страницы";
                txtts1="Обязательное поле";
                txtts2="Название максимум 90 символов";
                txtts3="Позвольте Системе Тоpper System<sup> SEO</sup>";
                txtts4="Описание до 120 символов";
                txtts5="Максимальное количество ключевых слов 8. Пример: слово 1, слово 2, слово 3 и т. Д.";
                txtts6="Главное ключевое слово";
                txtts7="Категория страницы или сайта. Пример: услуги, развлечения, спорт и т.д ...";
                txtts8="представить";
                txtts9="близко";
                txtts10="Оптимизируйте эту страницу с помощью системы Topper";
                txtts11="Чтобы увеличить его скорость и иметь большую видимость в сети";
                txtts12="ВНИМАНИЕ !!";
                txtts14="Для оптимизации страницы с помощью системы Topper System SEO <i>&quot;Опубликовать&quot;</i> !";
                txtts15="а) Нажмите &quot;Изменить страницу&quot;.";
                txtts16="б) Нажмите &quot;Опубликовать&quot;.";
                txtts17="Советы по созданию этой страницы &quot;Публикация&quot;:";
                txtts18="Я прочитал и принимаю <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ru')\">условия использования</a> по Topper System SEO.";
                txtts19="Общедоступная страница";
                txtts20="Подождите, пока процесс закончится ...";
				txtts31="Оптимизация изображения"; 
				txtts32="Служба поддержки"; 
				txtts33="никто"; 
				txtts34="промежуточный"; 
				txtts35="продвижение"; 
				txtts36="<strong>Ни одно изображение не будет оптимизировано с помощью системы Topper</strong>.<br>Выбор &quot;нет&quot; рекомендуется, если сетевая активность отслеживается слишком высоко, поэтому веб-сайт испытывает значительные замедления во время навигации или наблюдаются чрезмерные нагрузки вашего сервера."; 
				txtts37="";
				txtts38="";
				txtts39="Канонический тег в теле страницы отсутствует.";
				txtts40="Канонический тег важно присутствовать на всех публичных страницах сайта.";
				txtts41="Пожалуйста, добавьте канонический тег для этой страницы и повторите попытку.";
				txtts42="URL-адрес, указанный в каноническом теге страницы, не соответствует стандартам SEO.";
				txtts43="Канонический тег важен для соответствия URL-адресу страницы.";
				txtts44="Внесите предлагаемое изменение на этой странице и повторите попытку.";
                txtts47="Оптимизация ресурсов Javascript:";
                txtts48="Проверять";
                txtts49="Редактировать";
                txtts50="Промежуточное решение"; 
                txtts51="Промежуточный выбор полезен, когда мы хотим, чтобы все изображения, обнаруженные в тегах img с шириной более 100 пикселей и еще не оптимизированные, автоматически оптимизировались для этапов 1200 пикселей, 1080 пикселей, 960 пикселей, 780 пикселей, 480 пикселей и 320 пикселей."; 
                txtts52="Разбор и перезапись атрибутов: src"; 
                txtts53="Разбор и перезапись атрибутов: src-set"; 
                txtts54="Разбор и переписывание встроенных атрибутов css: url";
                txtts55="Анализ и ввод атрибутов: загрузка (современная нативная отложенная загрузка)"; 
                txtts56="Передовое решение"; 
                txtts57="Если вы хотите, чтобы все изображения, найденные в тегах img шириной более 100 пикселей и еще не оптимизированные, автоматически оптимизировались для этапов 1200 пикселей, 1080 пикселей, 960 пикселей, 780 пикселей, 480 пикселей и 320 пикселей.";
                txtts58="Разбор и перезапись атрибутов: src";
                txtts59="Разбор и перезапись атрибутов: src-set";
                txtts60="Разбор и перезапись атрибутов: data-src";
                txtts61="Разбор и перезапись атрибутов: data-lazyload";
                txtts62="Разбор и переписывание встроенных атрибутов css: url";
                txtts63="Разбор и ввод атрибутов: ширина и высота";
                txtts64="Анализ и ввод атрибутов: загрузка (современная нативная отложенная загрузка)";
                txtts65="Анализ и объявление мата данных предварительной загрузки для элемента Largest Contentful Paint";
				txtts66="Оптимизация ресурсов css:";
				txtts67="Разрешение";
				txtts68="Delay";
				txtts69="Метаданные заголовка и описания переписаны с помощью A.I.";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="页面语言。 ";
                txtts1="必填项";
                txtts2="标题，最多90个字符";
                txtts3="让Topper系统决定";
                txtts4="最多120个字符的描述";
                txtts5="关键字上限为8。例如：单词1，单词2，单词3等。";
                txtts6="主要关键字";
                txtts7="页面或网站的类别。 例如：服务，娱乐，体育等...";
                txtts8="提交";
                txtts9="关闭";
                txtts10="使用礼帽系统优化此页面";
                txtts11="提高速度并在网络上具有更多可见性";
                txtts12="注意！";
                txtts14="要使用Topper System SEO优化页面，必须<i>＆quot;发布＆quot;</i>！";
                txtts15="a）点击&quot;编辑页面＆quot;";
                txtts16="b）点击&quot;发布&quot;";
                txtts17="将此页面设置为 &quot;发布&quot; 的提示：";
                txtts18="我已阅读并接受 <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('zh')\">使用条件</a> 由礼帽系统。";
                txtts19="公开页面";
                txtts20="等待过程结束...";
				txtts31="图像优化"; 
				txtts32="支持"; 
				txtts33="没有"; 
				txtts34="中级"; 
				txtts35="预先"; 
				txtts36="<strong>不会使用Topper系统优化图像</strong>。<br>选择&quot;无&quot;建议对网络活动进行过高监控，以免导航期间网站速度显着下降或观察到过多的工作量您的服务器。"; 
				txtts37="";
				txtts38="";
				txtts39="页面正文中的规范标签丢失。";
				txtts40="规范标签对于出现在网站的所有公共页面上很重要。";
				txtts41="请为此页面添加规范标签，然后重试。";
				txtts42="页面规范标签中指示的 url 不符合 seo 标准。";
				txtts43="规范标签对于匹配页面的 url 很重要。";
				txtts44="请在此页面上进行建议的更改，然后重试。";
                txtts47="Javascript资源优化：";
                txtts48="查看";
                txtts49="编辑";
                txtts50="中间解决方案"; 
                txtts51="当我们希望在 img 标签中检测到的所有宽度大于 100px 且尚未优化的图像自动针对 1200px、1080px、960px、780px、480px 和 320px 的阶段进行优化时，中间选择很有用。"; 
                txtts52="解析和重写属性：src"; 
                txtts53="解析和重写属性：src-set"; 
                txtts54="解析重写css内联属性：url";
                txtts55="属性分析及入口：loading（现代原生懒加载）"; 
                txtts56="先进的解决方案"; 
                txtts57="如果您希望在 img 标签中找到的所有宽度大于 100px 且尚未优化的图像自动针对 1200px、1080px、960px、780px、480px 和 320px 的阶段进行优化，建议选择高级。";
                txtts58="解析和重写属性：src";
                txtts59="解析和重写属性：src-set";
                txtts60="解析和重写属性：data-src";
                txtts61="解析和重写属性：data-lazyload";
                txtts62="解析重写css内联属性：url";
                txtts63="属性解析和输入：宽度和高度";
                txtts64="属性分析及入口：loading（现代原生懒加载）";
                txtts65="Largest Contentful Paint 元素的预加载数据 mata 的分析和声明";
				txtts66="css资源优化：";
				txtts67="解决";
				txtts68="Delay";
				txtts69="使用 A.I. 重写的标题和描述元数据";
            }else if(hreflang_toppersystem == "he"){
                txtts0="שפת ה";
                txtts1="שדה חובה";
                txtts2="כותרת של מקסימום 90 תווים";
                txtts3="תן למערכת טופר להחליט";
                txtts4="תיאור של עד 120 תווים";
                txtts5="מילות מפתח מרביות 8. דוגמה: מילה 1, מילה 2, מילה 3 וכו '.";
                txtts6="מילת מפתח עיקרית";
                txtts7="קטגוריה של הדף או האתר. דוגמה: שירותים, בידור, ספורט וכו '...";
                txtts8="הגש";
                txtts9="סגירה";
                txtts10="בצע אופטימיזציה של דף זה באמצעות מערכת טופר";
                txtts11="להגדיל את המהירות שלו ולראות יותר ברשת";
                txtts12="שימו לב !!";
                txtts14="כדי לבצע אופטימיזציה של דף עם מערכת טופר יש צורך ב <i> לפרסם </i>!";
                txtts15="א) לחץ על ציטוט ערוך דף וציטוט";
                txtts16="ב) לחץ על פרסם";
                txtts17=":טיפים להכנת דף זה לפרסם:";
                txtts18="קראתי וקיבלתי את <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('he')\">תנאי שימוש</a> Topper System SEO.";
                txtts19="עמוד ציבורי";
                txtts20="המתן לסיום התהליך ...";
				txtts31="מיטוב תמונה"; 
				txtts32="תמיכה"; 
				txtts33="אף אחד"; 
				txtts34="ביניים (מומלץ)"; 
				txtts35="להתקדם"; 
				txtts36="<strong>שום תמונה לא תוטב עם מערכת טופר</strong>.<br>בחירה של  אין  מומלץ אם פעילויות הרשת מנוטרות גבוה מדי כך שהאתר עובר האטות משמעותיות במהלך הניווט או שנצפות עומסי עבודה מוגזמים. של השרת שלך."; 
				txtts37="";
				txtts38="";
				txtts39="התג הקנוני בגוף הדף חסר.";
				txtts40="התג הקנוני חשוב שיהיה קיים בכל הדפים הציבוריים של האתר.";
				txtts41="הוסף את התג הקנוני עבור דף זה ונסה שוב.";
				txtts42="כתובת האתר המצוינת בתג הקנוני של הדף אינה תואמת את תקני SEO.";
				txtts43="התג הקנוני חשוב כדי להתאים לכתובת ה-URL של העמוד.";
				txtts44="אנא בצע את השינוי המוצע בדף זה ונסה שוב.";
                txtts47="אופטימיזציה של משאבי Javascript:";
                txtts48="חשבון";
                txtts49="לַעֲרוֹך";
                txtts50="פתרון הביניים"; 
                txtts51="בחירת הביניים שימושית כאשר אנו רוצים שכל התמונות יתגלו בתגיות img עם רוחב גדול מ-100 פיקסלים ועדיין לא מותאמת לאופטימיזציה אוטומטית לשלבים של 1200px, 1080px, 960px, 780px, 480px ו-320px."; 
                txtts52="מאפייני ניתוח ושכתוב: src"; 
                txtts53="תכונות ניתוח ושכתוב: src-set"; 
                txtts54="ניתוח ושכתוב של תכונות מוטבעות של css: url";
                txtts55="ניתוח והזנת תכונות: טעינה (עומס ילידים מודרני)"; 
                txtts56="הפתרון המתקדם"; 
                txtts57="בחירה במתקדם מומלצת אם ברצונך שכל התמונות שנמצאות בתגיות img ברוחב העולה על 100 פיקסלים ועדיין לא מותאמת לאופטימיזציה אוטומטית לשלבים של 1200 פיקסלים, 1080 פיקסלים, 960 פיקסלים, 780 פיקסלים, 480 פיקסלים ו-320 פיקסלים.";
                txtts58="מאפייני ניתוח ושכתוב: src";
                txtts59="תכונות ניתוח ושכתוב: src-set";
                txtts60="מאפייני ניתוח וכתיבה מחדש: data-src";
                txtts61="תכונות ניתוח וכתיבה מחדש: data-lazyload";
                txtts62="ניתוח ושכתוב של תכונות מוטבעות של css: url";
                txtts63="ניתוח וקלט של תכונה: רוחב וגובה";
                txtts64="ניתוח והזנת תכונות: טעינה (עומס ילידים מודרני)";
                txtts65="ניתוח והכרזה על טעינת נתונים מראש עבור רכיב ה-Contentful Paint הגדול ביותר";
				txtts66="אופטימיזציה של משאבי css:";
				txtts67="פתרון הבעיה";
				txtts68="Delay";
				txtts69="מטא נתונים של כותרת ותיאור שנכתבו מחדש עם A.I.";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Lingua paginae";
                txtts1="Requiritur agris";
                txtts2="Title ingenia maxime XC";
                txtts3="Relinquere decernere Topper System<sup> SEO</sup>";
                txtts4="CXX ingenia maxime Description";
                txtts5="8. ex maxime keywords: verbum I, verbum II, verbum III, etc ..";
                txtts6="Verbum principalis clavis";
                txtts7="Genus situs aut paginae. Ex: servicia, hospitii, ludis, etc ...";
                txtts8="submit";
                txtts9="prope";
                txtts10="Haec pagina optimize Topper System<sup> SEO</sup>";
                txtts11="Ut crescat suo cursu plus visibility et in rete";
                txtts12="MONITUM !!";
                txtts14="Est ad optimize pagina Topper System SEO egrave debet esse <i>&quot;Publica&quot;</i> !";
                txtts15="a) Click on &quot;Edit&quot;.";
                txtts16="b) Click on &quot;Publica&quot;.";
                txtts17="Tips ut &quot;Publica&quot; Haec pagina";
                txtts18="Legi et ego: et conveniunt ad <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('la')\">conditionibus usus</a> Topper System SEO.";
                txtts19="Page publicae";
                txtts20="Exspecta processus ...";
				txtts31="ipsum Image"; 
				txtts32="Support"; 
				txtts33="nemo"; 
				txtts34="medium"; 
				txtts35="antecessum"; 
				txtts36="<strong>Non potest autem imago est optimized Topper Ratio</strong>. Clementine_Vulgate Electio autem non suadetur ut network si actiones sunt monitored excelsa website in ut patitur significant slowdowns navigation in ultionem aut ex laboribus, observari curabis servo tuo."; 
				txtts37="";
				txtts38="";
				txtts39="Corpus paginae canonicae deest.";
				txtts40="Canonicum tag refert ad omnes paginas publicas situs adesse.";
				txtts41="Quaeso adde tag canonicum huius paginae et iterum conare.";
				txtts42="Domicilium in pagina canonica indicatum non obtemperat signis seo.";
				txtts43="Canonicum tag refert ad domicilium paginae aequare.";
				txtts44="Quaeso, ut suggesserant in hac pagina mutationem ac iterum tenta.";
                txtts47="Javascript ipsum resource:";
                txtts48="Check";
                txtts49="Edit";
                txtts50="Media solutio"; 
                txtts51="Media lectio utilis est cum omnes imagines in img tags deteguntur cum latitudine quam 100px et nondum optimized ut sponte optimized sint pro gradibus 1200px, 1080px, 960px, 780px, 480px et 320px."; 
                txtts52="Parsing et rescribo attributa: src"; 
                txtts53="Parsing et rescribo attributa: src-set"; 
                txtts54="Parsing et rewriting css inline attributis: url";
                txtts55="Analysis et viscus attributum: loading (iners onus indigena moderni)"; 
                txtts56="Provectus solution"; 
                txtts57="Electio provecta commendatur si vis omnes imagines img tags inventas cum latitudine maior quam 100px et nondum optimized ut sponte optimized pro stadiis 1200px, 1080px, 960px, 780px, 480px et 320px.";
                txtts58="Parsing et rescribo attributa: src";
                txtts59="Parsing et rescribo attributa: src-set";
                txtts60="Parsing et rescribo attributa: data-src";
                txtts61="Parsing et rescribo attributa: data-lazyload";
                txtts62="Parsing et rewriting css inline attributis: url";
                txtts63="Parsing attributum et input: latitudo et altitudo";
                txtts64="Analysis et viscus attributum: loading (iners onus indigena moderni)";
                txtts65="Analysis et declaratio preload mata data ad elementum maximum contentful Poena";
				txtts66="css ipsum resource:";
				txtts67="Resolution";
				txtts68="Delay";
				txtts69="Titulus et descriptio meta data cum A.I.";
            }else{
                txtts0="Language of the page";
                txtts1="Required field";
                txtts2="Title of maximum 90 characters";
                txtts3="Let Topper System<sup> SEO</sup> decide";
                txtts4="Description of up to 120 characters";
                txtts5="Maximum keywords 8. Ex: word 1, word 2, word 3, etc.";
                txtts6="Main keyword";
                txtts7="Category of the page or site. Ex: services, entertainment, sports, etc ...";
                txtts8="Send";
                txtts9="Close";
                txtts10="Optimize this page with Topper System<sup> SEO</sup>";
                txtts11="To increase its speed and have more visibility on the net";
                txtts12="NOTICE !!";
                txtts14="To optimize a page with Topper System SEO you need both <i>&quot;Publish&quot;</i> !";
                txtts15="a) Click on &quot;Edit page&quot;.";
                txtts16="b) Click on &quot;Publish&quot;.";
                txtts17="Tips for making this page &quot;Publish&quot;:";
                txtts18="I have read and accept the <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('en')\">conditions of use</a> of the Topper System SEO.";
                txtts19="Public page";
                txtts20="Wait for the process to end ...";
				txtts31="Image optimization"; 
				txtts32="Support"; 
				txtts33="none"; 
				txtts34="intermediate"; 
				txtts35="advance"; 
				txtts36="<strong>No image will be optimized with Topper System SEO</strong>.<br>Selection of &quot;none&quot; it is recommended if network activities are monitored too high so the website undergoes significant slowdowns during navigation or excessive workloads are observed of your server."; 
				txtts37="";
				txtts38="";
				txtts39="The canonical tag in the body of the page is missing.";
				txtts40="The canonical tag is important to be present on all public pages of the site.";
				txtts41="Please add the canonical tag for this page and try again.";
				txtts42="The url indicated in the canonical tag of the page is not compliant with the seo standards.";
				txtts43="The canonical tag is important to match the url of the page.";
				txtts44="Please make the suggested change on this page and try again.";
                txtts47="Javascript resource optimization:";
                txtts48="Check";
                txtts49="Edit";
                txtts50="The intermediate solution"; 
                txtts51="Selecting intermediate is useful when we want all images found in img tags with width greater than 100px and not yet optimized to be automatically optimized for stages of 1200px, 1080px, 960px, 780px, 480px and 320px."; 
                txtts52="Parsing and rewriting attributes: src"; 
                txtts53="Parsing and rewriting attributes: src-set"; 
                txtts54="Parsing and rewriting css inline attributes: url";
                txtts55="Attribute analysis and entry: loading (modern native lazy load)"; 
                txtts56="The advanced solution"; 
                txtts57="Selecting advanced is recommended if you want all images found in img tags with a width greater than 100px and not yet optimized to be automatically optimized for stages of 1200px, 1080px, 960px, 780px, 480px and 320px.";
                txtts58="Parsing and rewriting attributes: src";
                txtts59="Parsing and rewriting attributes: src-set";
                txtts60="Parsing and rewriting attributes: data-src";
                txtts61="Parsing and rewriting attributes: data-lazyload";
                txtts62="Parsing and rewriting css inline attributes: url";
                txtts63="Attribute parsing and input: width and hight";
                txtts64="Attribute analysis and entry: loading (modern native lazy load)";
                txtts65="Analysis and declaration of preload data mata for Largest Contentful Paint element";
				txtts66="css resource optimization:";
				txtts67="Resolution";
				txtts68="Delay";
				txtts69="Title and description meta data rewritten with A.I.";
            }

		    var add = document.createElement("div");
		    add.setAttribute("id", "management_toppersystem");            
            if(canonical_toppersystem == ""){               
			   
				if(document.getElementById('status_canonical_toppersystem')){
					if(document.getElementById('status_canonical_toppersystem').value.toString().trim() != ""){
						add.setAttribute("class", "management_toppersystem_activation animate_y_bottom");
						
						if(document.getElementById('status_canonical_toppersystem').value.toString().trim() == "1"){
						   add.innerHTML= "<div><big><strong>"+ txtts12 + "</strong></big><br><br>"+ txtts42 + "<br><br><small><i>"+ txtts43 + "<br>"+ txtts44 + "</i></small></div><br><a rel=\"nofollow\" id=\"close_toppersystem_send\" class=\"close_toppersystem_send\" href=\"javascript:CloseProcessToppersystem();\">" + txtts9 + "</a>";
						}else if(document.getElementById('status_canonical_toppersystem').value.toString().trim() == "2"){
						   add.innerHTML= "<div><big><strong>"+ txtts12 + "</strong></big><br><br>"+ txtts39 + "<br><br><small><i>"+ txtts40 + "<br>"+ txtts41 + "</i></small></div><br><a rel=\"nofollow\" id=\"close_toppersystem_send\" class=\"close_toppersystem_send\" href=\"javascript:CloseProcessToppersystem();\">" + txtts9 + "</a>";
						}else{
						   add.innerHTML= "<div><big><strong>"+ txtts12 + "</strong></big><br><br>"+ txtts14 + "<br><br><small><i>"+ txtts17 + "<br>"+ txtts15 + "<br>"+ txtts16 + "</i></small></div><br><a rel=\"nofollow\" id=\"close_toppersystem_send\" class=\"close_toppersystem_send\" href=\"javascript:CloseProcessToppersystem();\">" + txtts9 + "</a>";	
						}
						
					}
				}

            }else{
                add.setAttribute("class", "management_toppersystem animate_y_bottom");
		        add.innerHTML= "<div><big><div id=\"status_toppersystem_box\" class=\"status_toppersystem\">&nbsp;</div><strong>"+ txtts10 + "</strong></big><br><small>"+ txtts11 + "</small></div><br>" + urldecode_url_toppersystem(canonical_toppersystem) + "&nbsp;&nbsp;<a target=\"_blank\" class=\"decoration_none\" href=\"" + canonical_preview_toppersystem + "\"><small><span class=\"pos_status_title\" title=\"" + txtts19 + "\">&nearr;</span></small></a><input id=\"canonical_toppersystem_send\" name=\"canonical_toppersystem_send\" type=\"hidden\" value=\"" + canonical_toppersystem + "\"><br><br><div class=\"ftoppersystem\"><span style=\"position:relative; left:-4px;\"><span id=\"add_select_form_toppersystem\" onclick=\"ok_write_language()\">&nbsp</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><small>" + txtts1 + "</small></i></span><br><br><input id=\"title_toppersystem_send\" name=\"title_toppersystem_send\" type=\"text\" placeholder=\"" + txtts2 + "\" value=\"" + title_toppersystem + "\" class=\"inputform_toppersystem" + st_css_title_toppersystem + "\" onclick=\"ok_write_title()\">&nbsp;<input id=\"check_title_toppersystem_send\" onclick=\"ChangeDisplayToppersystemTitle()\" name=\"check_title_toppersystem_send\" type=\"checkbox\"" + st_check_title_toppersystem + "> <i><small>" + txtts3 + "</small></i><br><br><input id=\"description_toppersystem_send\" name=\"description_toppersystem_send\" type=\"text\" placeholder=\"" + txtts4 + "\" value=\"" + description_toppersystem + "\" class=\"inputform_toppersystem" + st_css_description_toppersystem + "\" onclick=\"ok_write_description()\">&nbsp;<input id=\"check_description_toppersystem_send\" onclick=\"ChangeDisplayToppersystemDescription()\" name=\"check_description_toppersystem_send\" type=\"checkbox\"" + st_check_description_toppersystem + "> <i><small>" + txtts3 + "</small></i><br><br><input id=\"keywords_toppersystem_send\" name=\"keywords_toppersystem_send\" type=\"text\" placeholder=\"" + txtts5 + "\" value=\"" + keywords_toppersystem + "\" class=\"inputform_toppersystem" + st_css_keywords_toppersystem + "\" onclick=\"ok_write_keywords()\">&nbsp;<input id=\"check_keywords_toppersystem_send\" onclick=\"ChangeDisplayToppersystemKeywords()\" name=\"check_keywords_toppersystem_send\" type=\"checkbox\"" + st_check_keywords_toppersystem + "> <i><small>" + txtts3 + "</small></i><br><br><input id=\"keyword_toppersystem_send\" name=\"keyword_toppersystem_send\" type=\"text\" placeholder=\"" + txtts6 + "\" value=\"" + keyword_toppersystem + "\" class=\"inputform_toppersystem\" onclick=\"ok_write_keyword()\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><small>" + txtts1 + "</small></i><br><br><input id=\"category_toppersystem_send\" name=\"category_toppersystem_send\" type=\"text\" placeholder=\"" + txtts7 + "\" value=\"" + category_toppersystem + "\" class=\"inputform_toppersystem\"><br><br></div><div id=\"view_intelligence_artificial_toppersystem\" class=\"" + class_view_intelligence_artificial_toppersystem + "\"><input id=\"check_text_ia_toppersystem_send\" name=\"check_text_ia_toppersystem_send\" type=\"checkbox\"" + check_text_ia_toppersystem + " class=\"\"> " + txtts69 + "<br><br></div>" + txtts31 + "&nbsp;&nbsp;<small><div class=\"pos_menu_images_ts\"><input type=\"radio\" name=\"images_toppersystem_send\" value=\"0\"" + check_images_a + " onclick=\"close_help_images_toppersystem()\"><span class=\"pos_link_sel_images_ts\"><a id=\"images_toppersystem_a\" rel=\"nofollow\" href=\"javascript:help_images_toppersystem('0');\" class=\"menu_images_toppersystem\" title=\"" + txtts32 + "\">" + txtts33 + "</a> </span><input type=\"radio\" name=\"images_toppersystem_send\" value=\"1\"" + check_images_b + " onclick=\"close_help_images_toppersystem()\"><span class=\"pos_link_sel_images_ts\"><a id=\"images_toppersystem_b\" rel=\"nofollow\" href=\"javascript:help_images_toppersystem('1');\" class=\"menu_images_toppersystem\" title=\"" + txtts32 + "\">" + txtts34 + "</a></span> <input type=\"radio\" name=\"images_toppersystem_send\" value=\"2\"" + check_images_c + " onclick=\"close_help_images_toppersystem()\"><span class=\"pos_link_sel_images_ts\"><a id=\"images_toppersystem_c\" rel=\"nofollow\" href=\"javascript:help_images_toppersystem('2');\" class=\"menu_images_toppersystem\" title=\"" + txtts32 + "\">" + txtts35 + "</a></span></small></div><div id=\"box_check_images_a\" onclick=\"close_help_images_toppersystem()\" class=\"display_none_ts\"><i><small>" + txtts36 + "</small></i></div><div id=\"box_check_images_b\" onclick=\"close_help_images_toppersystem()\" class=\"display_none_ts\"><i><small><strong>" + txtts50 + "</strong><br>" + txtts51 + "<br><span class=\"green_ts\">&check;</span> " + txtts52 + "<br><span class=\"green_ts\">&check;</span> " + txtts53 + "<br><span class=\"green_ts\">&check;</span> " + txtts54 + "<br><span class=\"green_ts\">&check;</span> " + txtts55 + "<br><span class=\"green_ts\">&check;</span> " + txtts65 + "</small></i></div><div id=\"box_check_images_c\" onclick=\"close_help_images_toppersystem()\" class=\"display_none_ts\"><i><small><strong>" + txtts56 + "</strong><br>" + txtts57 + "<br><span class=\"green_ts\">&check;</span> " + txtts58 + "<br><span class=\"green_ts\">&check;</span> " + txtts59 + "<br><span class=\"green_ts\">&check;</span> " + txtts60 + "<br><span class=\"green_ts\">&check;</span> " + txtts61 + "<br><span class=\"green_ts\">&check;</span> " + txtts62 + "<br><span class=\"green_ts\">&check;</span> " + txtts63 + "<br><span class=\"green_ts\">&check;</span> " + txtts64 + "<br><span class=\"green_ts\">&check;</span> " + txtts65 + "</small></i></div>&nbsp;&nbsp;<span style=\"white-space: nowrap;\"><span id=\"add_select_form_resolution_images_toppersystem\">&nbsp</span><small> " + txtts67 + "</small>&nbsp;&nbsp;<input id=\"check_stronglazyload_images_toppersystem_send\" name=\"check_stronglazyload_images_toppersystem_send\" type=\"checkbox\"" + check_stronglazyload_images_toppersystem + " class=\"\"><small>" + txtts68 + " Image</small>&nbsp;&nbsp;<input id=\"check_stronglazyload_video_toppersystem_send\" name=\"check_stronglazyload_video_toppersystem_send\" type=\"checkbox\"" + check_stronglazyload_video_toppersystem + " class=\"\"><small>" + txtts68 + " Video</small></span><br><br>" + txtts47 + " <span id=\"check_defer_toppersystem\"><a rel=\"nofollow\" href=\"javascript:request_load_status_defer_toppersystem();\">" + txtts48 + "</a></span> <small>| <a rel=\"nofollow\" target=\"_blank\" href=\"" + pageplugin_req_toppersystem + "\">&nearr; " + txtts49 + "</a></small><br><br>"      + txtts66 + " <span id=\"check_cssfiles_toppersystem\"><a rel=\"nofollow\" href=\"javascript:request_load_status_cssfilests_toppersystem();\">" + txtts48 + "</a></span> <small>| <a rel=\"nofollow\" href=\"" + pageplugin_reqcss_toppersystem + "\">&nearr; " + txtts49 + "</a></small><br><br><input id=\"check_privacy_toppersystem_send\" name=\"check_privacy_toppersystem_send\" type=\"checkbox\" onclick=\"ok_write_privacy()\" class=\"\"> <small>" + txtts18 + "</small><br><br><a rel=\"nofollow\" id=\"go_toppersystem_send\" class=\"button-primary_toppersystem white_color_toppersystem\" href=\"javascript:SendProcessToppersystem();\">" + txtts8 + "</a>&nbsp;&nbsp;<a rel=\"nofollow\" id=\"close_toppersystem_send\" class=\"button-primary_toppersystem white_color_toppersystem\" href=\"javascript:CloseProcessToppersystem();\">" + txtts9 + "</a>&nbsp;&nbsp;<span id=\"look_lighthouse_toppersystem\" class=\"display_none_ts\"><span class=\"posc_status_title_lighthouse\"><span id=\"start_verify_lighthouse_toppersystem\" onclick=\"run_lighthouse_toppersystem()\" title=\"\">LightHouse</span></span>&nbsp;&nbsp;</span><div id=\"load_toppersystem\" class=\"box_loader_toppersystem display_none_ts\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;<span class=\"statusload_toppersystem\"><small>" + txtts20 + "</small></span></div><span id=\"respons_txt\">&nbsp;</span><input type=\"hidden\" id=\"hiddenrespons_txt\" name=\"hiddenrespons_txt\" value=\"\"> <input type=\"hidden\" id=\"cicle_lighthouse_toppersystem\" name=\"cicle_lighthouse_toppersystem\" value=\"\"><input type=\"hidden\" id=\"pagefirst_lighthouse_toppersystem\" name=\"pagefirst_lighthouse_toppersystem\" value=\"" + urldecode_url_toppersystem(canonical_toppersystem) + "\"><input type=\"hidden\" id=\"pagesecond_lighthouse_toppersystem\" name=\"pagesecond_lighthouse_toppersystem\" value=\"" + url_original_toppersystem(urldecode_url_toppersystem(canonical_toppersystem)) + "\"><input type=\"hidden\" id=\"result_lighthouse_1_toppersystem\" name=\"result_lighthouse_1_toppersystem\" value=\"\"><input type=\"hidden\" id=\"result_lighthouse_2_toppersystem\" name=\"result_lighthouse_2_toppersystem\" value=\"\">";
            }
		    document.body.appendChild(add);
            var myParent = document.getElementById('add_select_form_toppersystem');

            var array = [
                [txtts0, ''],
                ['Abkhazian (ab)', 'ab'],
                ['Abkhazian - Russian Federation (ab-RU)', 'ab-RU'],
                ['Afar (aa)', 'aa'],
                ['Afar - Ethiopia (aa-ET)', 'aa-ET'],
                ['Afrikaans (af)', 'af'],
                ['Afrikaans - South Africa (af-ZA)', 'af-ZA'],
                ['Akan (ak)', 'ak'],
                ['Akan - Ghana (ak-GH)', 'ak-GH'],
                ['Albanian (sq)', 'sq'],
                ['Albanian - Albania (sq-AL)', 'sq-AL'],
                ['Albanian - Kosovo (sq-KS)', 'sq-KS'],
                ['Amharic (am)', 'am'],
                ['Amharic - Ethiopia (am-ET)', 'am-ET'],
                ['Arabic (ar)', 'ar'],
                ['Arabic - Arabic (ar-AR)', 'ar-AR'],
                ['Arabic - Algeria (ar-DZ)', 'ar-DZ'],
                ['Arabic - Bahrain (ar-BH)', 'ar-BH'],
                ['Arabic - Chad (ar-TD)', 'ar-TD'],
                ['Arabic - Comoros (ar-KM)', 'ar-KM'],
                ['Arabic - Djibouti (ar-DJ)', 'ar-DJ'],
                ['Arabic - Egypt (ar-EG)', 'ar-EG'],
                ['Arabic - Eritrea (ar-ER)', 'ar-ER'],
                ['Arabic - Iraq (ar-IQ)', 'ar-IQ'],
                ['Arabic - Israel (ar-IL)', 'ar-IL'],
                ['Arabic - Jordan (ar-JO)', 'ar-JO'],
                ['Arabic - Kuwait (ar-KW)', 'ar-KW'],
                ['Arabic - Lebanon (ar-LB)', 'ar-LB'],
                ['Arabic - Libya (ar-LY)', 'ar-LY'],
                ['Arabic - Mauritania (ar-MR)', 'ar-MR'],
                ['Arabic - Morocco (ar-MA)', 'ar-MA'],
                ['Arabic - Oman (ar-OM)', 'ar-OM'],
                ['Arabic - Qatar (ar-QA)', 'ar-QA'],
                ['Arabic - Saudi Arabia (ar-SA)', 'ar-SA'],
                ['Arabic - Somalia (ar-SO)', 'ar-SO'],
                ['Arabic - Sudan (ar-SD)', 'ar-SD'],
                ['Arabic - Syria (ar-SY)', 'ar-SY'],
                ['Arabic - Tunisia (ar-TN)', 'ar-TN'],
                ['Arabic - United Arab Emirates (ar-AE)', 'ar-AE'],
                ['Arabic - West Bank and Gaza (ar-PS)', 'ar-PS'],
                ['Arabic - Western Sahara (ar-EH)', 'ar-EH'],
                ['Arabic - Yemen (ar-YE)', 'ar-YE'],
                ['Aragonese (an)', 'an'],
                ['Aragonese - Spain (an-ES)', 'an-ES'],
                ['Aragonés - Spain (an-ES)', 'an-ES'],
                ['Armenian (hy)', 'hy'],
                ['Armenian - Armenia (hy-AM)', 'hy-AM'],
                ['Assamese (as)', 'as'],
                ['Assamese - India (as-IN)', 'as-IN'],
                ['Avaric (av)', 'av'],
                ['Avaric - Russian Federation (av-RU)', 'av-RU'],
                ['Avestan (ae)', 'ae'],
                ['Avestan - Afghanistan (ae-AF)', 'ae-AF'],
                ['Avestan - China (ae-CN)', 'ae-CN'],
                ['Avestan - Iran (ae-IR)', 'ae-IR'],
                ['Avestan - Mongolia (ae-MN)', 'ae-MN'],
                ['Avestan - Russian Federation (ae-RU)', 'ae-RU'],
                ['Aymara (ay)', 'ay'],
                ['Aymara - Bolivia (ay-BO)', 'ay-BO'],
                ['Aymara - Chile (ay-CL)', 'ay-CL'],
                ['Aymara - Peru (ay-PE)', 'ay-PE'],
                ['Azerbaijani (az)', 'az'],
                ['Azerbaijani - Azerbaijan (az-AZ)', 'az-AZ'],
                ['Azerbaijani - Afghanistan (az-AF)', 'az-AF'],
                ['Azerbaijani - Georgia (az-GE)', 'az-GE'],
                ['Azerbaijani - Iran (az-IR)', 'az-IR'],
                ['Azerbaijani - Iraq (az-IQ)', 'az-IQ'],
                ['Azerbaijani - Kazakhstan (az-KZ)', 'az-KZ'],
                ['Azerbaijani - Kyrgyzstan (az-KZ)', 'az-KZ'],
                ['Azerbaijani - Russian Federation (az-RU)', 'az-RU'],
                ['Azerbaijani - Turkey (az-TR)', 'az-TR'],
                ['Azerbaijani - Turkmenistan (az-TM)', 'az-TM'],
                ['Azerbaijani - Ukraine (az-UA)', 'az-UA'],
                ['Azerbaijani - Uzbekistan (az-UZ)', 'az-UZ'],
                ['Bambara (bm)', 'bm'],
                ['Bambara - Mali (bm-ML)', 'bm-ML'],
                ['Bashkir (ba)', 'ba'],
                ['Bashkir - Bashkortostan (ba-BA)', 'ba-BA'],
                ['Bashkir - Russian Federation (ba-RU)', 'ba-RU'],
                ['Basque (eu)', 'eu'],
                ['Basque - Spain (eu-ES)', 'eu-ES'],
                ['Belarusian (be)', 'be'],
                ['Belarusian - Belarus (be-BY)', 'be-BY'],
                ['Bengali (Bangla)', 'bn'],
                ['Bengali - Bangladesh (bn-BD)', 'bn-BD'],
                ['Bengali - India (bn-IN)', 'bn-IN'],
                ['Bihari (bh)', 'bh'],
                ['Bihari - Asia (bh-AS)', 'bh-AS'],
                ['Bihari - Belize (bh-BZ)', 'bh-BZ'],
                ['Bihari - Colombia (bh-CO)', 'bh-CO'],
                ['Bihari - Costa Rica (bh-CR)', 'bh-CR'],
                ['Bihari - Guatemala (bh-GT)', 'bh-GT'],
                ['Bihari - Honduras (bh-HN)', 'bh-HN'],
                ['Bihari - Mexico (bh-MX)', 'bh-MX'],
                ['Bihari - Nicaragua (bh-NI)', 'bh-NI'],
                ['Bihari - United States (bh-US)', 'bh-US'],
                ['Bihari - Venezuela (bh-VE)', 'bh-VE'],
                ['Bislama (bi)', 'bi'],
                ['Bislama - Australia (bi-AU)', 'bi-AU'],
                ['Bislama - Vanuatu (bi-VU)', 'bi-VU'],
                ['Bosnian (bs)', 'bs'],
                ['Bosnian - Bosnia and Herzegovina (bs-BA)', 'bs-BA'],
                ['Breton (br)', 'br'],
                ['Breton - France (br-FR)', 'br-FR'],
                ['Bulgarian (bg)', 'bg'],
                ['Bulgarian - Bulgaria (bg-BG)', 'bg-BG'],
                ['Burmese (my)', 'my'],
                ['Burmese (my-MM)', 'my-MM'],
                ['Catalan (ca)', 'ca'],
                ['Catalan - Andorra (ca-AD)', 'ca-AD'],
                ['Catalan - Spain (ca-ES)', 'ca-ES'],
                ['Cebuano - Philippines (ceb-CH)', 'ceb-CH'],
                ['Chamorro (ch)', 'ch'],
                ['Chamorro - Guam (ch-GU)', 'ch-GU'],
                ['Chamorro - United States (ch-US)', 'ch-US'],
                ['Chechen (ce)', 'ce'],
                ['Chechen - Russian Federation (ce-RU)', 'ce-RU'],
                ['Chichewa - Malawi (ny-MW)', 'ny-MW'],
                ['Chichewa - Mozambique (ny-MZ)', 'ny-MZ'],
                ['Chichewa - Zambia (ny-ZM)', 'ny-ZM'],
                ['Chichewa - Zimbabwe (ny-ZW)', 'ny-ZW'],
                ['Chichewa - Chewa - Nyanja (ny)', 'ny'],
                ['Chinese (zh)', 'zh'],
                ['Chinese - China (zh-CN)', 'zh-CN'],
                ['Chinese (Simplified)', 'zh-Hans'],
                ['Chinese (Traditional)', 'zh-Hant'],
                ['Chinese - Hong Kong (zh-HK)', 'zh-HK'],
                ['Chinese - Macao (zh-MO)', 'zh-MO'],
                ['Chinese - Singapore (zh-SG)', 'zh-SG'],
                ['Chinese - Taiwan (zh-TW)', 'zh-TW'],
                ['Chuvash (cv)', 'cv'],
                ['Chuvash - Russian Federation (cv-RU)', 'cv-RU'],
                ['Cornish (kw)', 'kw'],
                ['Corsican (co)', 'co'],
                ['Corsican - France (co-FR)', 'co-FR'],
                ['Corsican - ' + italy_ts + ' (co-IT)', 'co-IT'],
                ['Cree (cr)', 'cr'],
                ['Cree - Canada (cr-CA)', 'cr-CA'],
                ['Croatian (hr)', 'hr'],
                ['Croatian - Croatia (hr-HR)', 'hr-HR'],
                ['Croatian - Bosnia and Herzegovina (hr-BA)', 'hr-BA'],
                ['Czech (cs)', 'cs'],
                ['Czech - Czech Republic (cs-CZ)', 'cs-CZ'],
                ['Czech - Slovak Republic (cs-SK)', 'cs-SK'],
                ['Danish (da)', 'da'],
                ['Danish - Denmark (da-DK)', 'da-DK'],
                ['Danish - Faeroe Islands (da-FO)', 'da-FO'],
                ['Danish - Greenland (da-GL)', 'da-GL'],
                ['Divehi - India (dv-IN)', 'dv-IN'],
                ['Divehi - Dhivehi - Maldivian (dv)', 'dv'],
                ['Dutch (nl)', 'nl'],
                ['Dutch - Netherlands (nl-NL)', 'nl-NL'],
                ['Dutch - Aruba (nl-AW)', 'nl-AW'],
                ['Dutch - Belgium (nl-BE)', 'nl-BE'],
                ['Dutch - Curaçao (nl-CW)', 'nl-CW'],
                ['Dutch - Netherlands Antilles (nl-AN)', 'nl-AN'],
                ['Dutch - Sint Maarten - Dutch part) (nl-SX)', 'nl-SX'],
                ['Dutch - Suriname (nl-SR)', 'nl-SR'],
                ['Dzongkha (dz)', 'dz'],
                ['Dzongkha - Bhutan (dz-BT)', 'dz-BT'],
                ['English (en)', 'en'],
                ['English - United Kingdom (en-GB)', 'en-GB'],
                ['English - United States (en-US)', 'en-US'],
                ['English - American Samoa (en-AS)', 'en-AS'],
                ['English - Anguilla (en-AI)', 'en-AI'],
                ['English - Antigua and Barbuda (en-AG)', 'en-AG'],
                ['English - Australia (en-AU)', 'en-AU'],
                ['English - Bangladesh (en-BD)', 'en-BD'],
                ['English - Barbados (en-BB)', 'en-BB'],
                ['English - Belize (en-BZ)', 'en-BZ'],
                ['English - Bermuda (en-BM)', 'en-BM'],
                ['English - Botswana (en-BW)', 'en-BW'],
                ['English - British Virgin Islands (en-VG)', 'en-VG'],
                ['English - Cameroon (en-CM)', 'en-CM'],
                ['English - Canada (en-CA)', 'en-CA'],
                ['English - Cayman Islands (en-KY)', 'en-KY'],
                ['English - Cook Islands (en-CK)', 'en-CK'],
                ['English - Curaçao (en-CW)', 'en-CW'],
                ['English - Dominica (en-DM)', 'en-DM'],
                ['English - Eritrea (en-ER)', 'en-ER'],
                ['English - Falkland Islands (en-FK)', 'en-FK'],
                ['English - Fiji (en-FJ)', 'en-FJ'],
                ['English - Ghana (en-GH)', 'en-GH'],
                ['English - Gibraltar (en-GI)', 'en-GI'],
                ['English - Grenada (en-GD)', 'en-GD'],
                ['English - Guam (en-GU)', 'en-GU'],
                ['English - Guernsey (en-GG)', 'en-GG'],
                ['English - Guyana (en-GY)', 'en-GY'],
                ['English - Hong Kong (en-HK)', 'en-HK'],
                ['English - India (en-IN)', 'en-IN'],
                ['English - Ireland (en-IE)', 'en-IE'],
                ['English - Isle of Man (en-IM)', 'en-IM'],
                ['English - Jamaica (en-JM)', 'en-JM'],
                ['English - Jersey (en-JE)', 'en-JE'],
                ['English - Kenya (en-KE)', 'en-KE'],
                ['English - Kiribati (en-KI)', 'en-KI'],
                ['English - Lesotho (en-LS)', 'en-LS'],
                ['English - Liberia (en-LR)', 'en-LR'],
                ['English - Malawi (en-MW)', 'en-MW'],
                ['English - Malaysia (en-MY)', 'en-MY'],
                ['English - Malta (en-MT)', 'en-MT'],
                ['English - Marshall Islands (en-MH)', 'en-MH'],
                ['English - Mauritius (en-MU)', 'en-MU'],
                ['English - Micronesia (en-FM)', 'en-FM'],
                ['English - Montserrat (en-MS)', 'en-MS'],
                ['English - Namibia (en-NA)', 'en-NA'],
                ['English - Nauru (en-NR)', 'en-NR'],
                ['English - New Zealand (en-NZ)', 'en-NZ'],
                ['English - Nigeria (en-NG)', 'en-NG'],
                ['English - Niue (en-NU)', 'en-NU'],
                ['English - Northern Mariana Islands (en-MP)', 'en-MP'],
                ['English - Pakistan (en-PK)', 'en-PK'],
                ['English - Palau (en-PW)', 'en-PW'],
                ['English - Papua New Guinea (en-PG)', 'en-PG'],
                ['English - Philippines (en-PH)', 'en-PH'],
                ['English - Pirate (en-PI)', 'en-PI'],
                ['English - Pitcairn Islands (en-PN)', 'en-PN'],
                ['English - Puerto Rico (en-PR)', 'en-PR'],
                ['English - Rwanda (en-RW)', 'en-RW'],
                ['English - Saint Helena (en-SH)', 'en-SH'],
                ['English - Samoa (en-WS)', 'en-WS'],
                ['English - Seychelles (en-SC)', 'en-SC'],
                ['English - Sierra Leone (en-SL)', 'en-SL'],
                ['English - Singapore (en-SG)', 'en-SG'],
                ['English - Solomon Islands (en-SB)', 'en-SB'],
                ['English - Somalia (en-SO)', 'en-SO'],
                ['English - South Africa (en-ZA)', 'en-ZA'],
                ['English - South Sudan (en-SS)', 'en-SS'],
                ['English - Sri Lanka (en-LK)', 'en-LK'],
                ['English - St. Kitts and Nevis (en-KN)', 'en-KN'],
                ['English - St. Lucia (en-LC)', 'en-LC'],
                ['English - St. Vincent and the Grenadines (en-VC)', 'en-VC'],
                ['English - Sudan (en-SD)', 'en-SD'],
                ['English - Switzerland (en-CH)', 'en-CH'],
                ['English - Tanzania (en-TZ)', 'en-TZ'],
                ['English - The Bahamas (en-BS)', 'en-BS'],
                ['English - The Gambia (en-GM)', 'en-GM'],
                ['English - Tonga (en-TO)', 'en-TO'],
                ['English - Trinidad and Tobago (en-TT)', 'en-TT'],
                ['English - Turks and Caicos Islands (en-TC)', 'en-TC'],
                ['English - Tuvalu (en-TV)', 'en-TV'],
                ['English - Uganda (en-UG)', 'en-UG'],
                ['English - United States Virgin Islands (en-VI)', 'en-VI'],
                ['English - Upside Down (en-UD)', 'en-UD'],
                ['English - Vanuatu (en-VU)', 'en-VU'],
                ['English - Zambia (en-ZM)', 'en-ZM'],
                ['English - Zimbabwe (en-ZW)', 'en-ZW'],
                ['Esperanto (eo)', 'eo'],
                ['Esperanto - Esperanto (eo-EO)', 'eo-EO'],
                ['Estonian (et)', 'et'],
                ['Estonian - Estonia (et-EE)', 'et-EE'],
                ['Ewe (ee)', 'ee'],
                ['Ewe - Ghana (ee-GH)', 'ee-GH'],
                ['Ewe - Togo (ee-TG)', 'ee-TG'],
                ['Faroese (fo)', 'fo'],
                ['Faroese - Faeroe Islands (fo-FO)', 'fo-FO'],
                ['Fijian (fj)', 'fj'],
                ['Fijian - Fiji (fj-FJ)', 'fj-FJ'],
                ['Filipino - Philippines (tl-PH)', 'tl-PH'],
                ['Finnish (fi)', 'fi'],
                ['Finnish - Finland (fi-FI)', 'fi-FI'],
                ['French (fr)', 'fr'],
                ['French - France (fr-FR)', 'fr-FR'],
                ['French - Belgium (fr-BE)', 'fr-BE'],
                ['French - Benin (fr-BJ)', 'fr-BJ'],
                ['French - Burkina Faso (fr-BF)', 'fr-BF'],
                ['French - Burundi (fr-BI)', 'fr-BI'],
                ['French - Cameroon (fr-CM)', 'fr-CM'],
                ['French - Canada (fr-CA)', 'fr-CA'],
                ['French - Central African Republic (fr-CF)', 'fr-CF'],
                ['French - Chad (fr-TD)', 'fr-TD'],
                ['French - Comoros (fr-KM)', 'fr-KM'],
                ['French - Congo (fr-CG)', 'fr-CG'],
                ['French - Côte d’Ivoire (fr-CI)', 'fr-CI'],
                ['French - Democratic Republic of the Congo (fr-CD)', 'fr-CD'],
                ['French - Djibouti (fr-DJ)', 'fr-DJ'],
                ['French - Equatorial Guinea (fr-GQ)', 'fr-GQ'],
                ['French - French Guianna (fr-GF)', 'fr-GF'],
                ['French - French Polynesia (fr-PM)', 'fr-PF'],
                ['French - Gabon (fr-GA)', 'fr-GA'],
                ['French - Grenada (fr-GD)', 'fr-GD'],
                ['French - Guadeloupe (fr-GP)', 'fr-GP'],
                ['French - Guinea (fr-GN)', 'fr-GN'],
                ['French - Haiti (fr-HT)', 'fr-HT'],
                ['French - Luxembourg (fr-LU)', 'fr-LU'],
                ['French - Madagascar (fr-MG)', 'fr-MG'],
                ['French - Mali (fr-ML)', 'fr-ML'],
                ['French - Martinique (fr-MQ)', 'fr-MQ'],
                ['French - Mauritius (fr-MU)', 'fr-MU'],
                ['French - Mayotte (fr-YT)', 'fr-YT'],
                ['French - Monaco (fr-MC)', 'fr-MC'],
                ['French - New Caledonia (fr-NC)', 'fr-NC'],
                ['French - Niger (fr-NE)', 'fr-NE'],
                ['French - Rwanda (fr-RW)', 'fr-RW'],
                ['French - Réunion (fr-RE)', 'fr-RE'],
                ['French - Saint Pierre and Miquelon (fr-PM)', 'fr-PM'],
                ['French - Senegal (fr-SN)', 'fr-SN'],
                ['French - Seychelles (fr-SC)', 'fr-SC'],
                ['French - St. Lucia (fr-LC)', 'fr-LC'],
                ['French - St. Martin - French part) (fr-MF)', 'fr-MF'],
                ['French - Switzerland (fr-CH)', 'fr-CH'],
                ['French - Togo (fr-TG)', 'fr-TG'],
                ['French - Vanuatu (fr-VU)', 'fr-VU'],
                ['French - Wallis and Futuna (fr-WF)', 'fr-WF'],
                ['Frisian - Netherlands (fy-NL)', 'fy-NL'],
                ['Fula - Benin (ff-BJ)', 'ff-BJ'],
                ['Fula - Burkina Faso (ff-BF)', 'ff-BF'],
                ['Fula - Cape Verde (ff-CV)', 'ff-CV'],
                ['Fula - Côte d\'Ivoire (ff-CI)', 'ff-CI'],
                ['Fula - Gambia (ff-GM)', 'ff-GM'],
                ['Fula - Ghana (ff-GH)', 'ff-GH'],
                ['Fula - Guinea (ff-GN)', 'ff-GN'],
                ['Fula - Guinea Bissau (ff-GW)', 'ff-GW'],
                ['Fula - Liberia (ff-LR)', 'ff-LR'],
                ['Fula - Mali (ff-ML)', 'ff-ML'],
                ['Fula - Mauritania (ff-MR)', 'ff-MR'],
                ['Fula - Niger (ff-NE)', 'ff-NE'],
                ['Fula - Nigeria (ff-NG)', 'ff-NG'],
                ['Fula - Senegal (ff-SN)', 'ff-SN'],
                ['Fula - Sierra Leone (ff-SL)', 'ff-SL'],
                ['Fula - Togo (ff-TG)', 'ff-TG'],
                ['Fula - Fulah - Pulaar - Pular (ff)', 'ff'],
                ['Gaelic (Manx)', 'gv'],
                ['Gaelic (Scottish)', 'gd'],
                ['Gaelic Manx - (gv-IM)', 'gv-IM'],
                ['Gaelic Scottish - Canada (gd-CA)', 'gd-CA'],
                ['Gaelic Scottish - United Kingdom (gd-UK)', 'gd-UK'],
                ['Galician (gl)', 'gl'],
                ['Galician - Spain (gl-ES)', 'gl-ES'],
                ['Georgian (ka)', 'ka'],
                ['Georgian - Georgia (ka-GE)', 'ka-GE'],
                ['German (de)', 'de'],
                ['German - Germany (de-DE)', 'de-DE'],
                ['German - Austria (de-AT)', 'de-AT'],
                ['German - Belgium (de-BE)', 'de-BE'],
                ['German - Liechtenstein (de-LI)', 'de-LI'],
                ['German - Luxembourg (de-LU)', 'de-LU'],
                ['German - Namibia (de-NA)', 'de-NA'],
                ['German - Switzerland (de-CH)', 'de-CH'],
                ['Greek (el)', 'el'],
                ['Greek - Greece (el-GR)', 'el-GR'],
                ['Greek - Cyprus (el-CY)', 'el-CY'],
                ['Greenlandic (kl)', 'kl'],
                ['Greenlandic - Greenland (kl-GL)', 'kl-GL'],
                ['Guarani (gn)', 'gn'],
                ['Guarani - Argentina (gn-AR)', 'gn-AR'],
                ['Guarani - Bolivia (gn-BO)', 'gn-BO'],
                ['Guarani - Mercosur (gn-BR)', 'gn-BR'],
                ['Guarani - Paraguay (gn-PY)', 'gn-PY'],
                ['Gujarati (gu)', 'gu'],
                ['Gujarati - India (gu-IN)', 'gu-IN'],
                ['Gujarati - Kenya (gu-KE)', 'gu-KE'],
                ['Gujarati - Pakistan (gu-PK)', 'gu-PK'],
                ['Gujarati - Tanzania (gu-TZ)', 'gu-TZ'],
                ['Haitian Creole (ht)', 'ht'],
                ['Haitian Creole - Bahamas (ht-BS)', 'ht-BS'],
                ['Haitian Creole - Cayman Islands (ht-KY)', 'ht-KY'],
                ['Haitian Creole - Costa Rica (ht-CR)', 'ht-CR'],
                ['Haitian Creole - Cuba (ht-CU)', 'ht-CU'],
                ['Haitian Creole - Dominican Republic (ht-DO)', 'ht-DO'],
                ['Haitian Creole - Florida (ht-US)', 'ht-US'],
                ['Haitian Creole - Haiti (ht-HT)', 'ht-HT'],
                ['Haitian Creole - Jamaica (ht-JM)', 'ht-JM'],
                ['Haitian Creole - United States Minor Outlying Islands (ht-UM)', 'ht-UM'],
                ['Hausa (ha)', 'ha'],
                ['Hausa - Benin (ha-BJ)', 'ha-BJ'],
                ['Hausa - Cameroon (ha-CM)', 'ha-CM'],
                ['Hausa - Chad (ha-TD)', 'ha-TD'],
                ['Hausa - Ghana (ha-GH)', 'ha-GH'],
                ['Hausa - Niger (ha-NE)', 'ha-NE'],
                ['Hausa - Nigeria (ha-NG)', 'ha-NG'],
                ['Hausa - Sudan (ha-SD)', 'ha-SD'],
                ['Hausa - Togo (ha-TG)', 'ha-TG'],
                ['Hebrew (he)', 'he'],
                ['Hebrew - Israel (he-IL)', 'he-IL'],
                ['Herero (hz)', 'hz'],
                ['Herero - Botswana (hz-BW)', 'hz-BW'],
                ['Herero - Namibia (hz-NA)', 'hz-NA'],
                ['Hindi (hi)', 'hi'],
                ['Hindi - India (hi-IN)', 'hi-IN'],
                ['Hindi - Fiji (hi-FJ)', 'hi-FJ'],
                ['Hindi - Pakistan (hi-PK)', 'hi-PK'],
                ['Hiri Motu (ho)', 'ho'],
                ['Hiri Motu - Papua New Guinea (ho-PG)', 'ho-PG'],
                ['Hungarian (hu)', 'hu'],
                ['Hungarian - Hungary (hu-HU)', 'hu-HU'],
                ['Icelandic (is)', 'is'],
                ['Icelandic - Iceland (is-IS)', 'is-IS'],
                ['Ido (io)', 'io'],
                ['Ido - France (io-FR)', 'io-FR'],
                ['Ido - Germany (io-DE)', 'io-DE'],
                ['Igbo (ig)', 'ig'],
                ['Igbo - Cameroon (ig-CM)', 'ig-CM'],
                ['Igbo - Equatorial Guinea (ig-GQ)', 'ig-GQ'],
                ['Igbo - Nigeria (ig-NG)', 'ig-NG'],
                ['Indonesian (id, in)', 'id, in'],
                ['Indonesian - Indonesia (id-ID)', 'id-ID'],
                ['Interlingua (ia)', 'ia'],
                ['Interlingua - Finland (ia-FI)', 'ia-FI'],
                ['Interlingua - Norway (ia-NO)', 'ia-NO'],
                ['Interlingua - Sweden (ia-SE)', 'ia-SE'],
                ['Interlingua - United Kingdom (ia-UK)', 'ia-UK'],
                ['Interlingua - United States (ia-US)', 'ia-US'],
                ['Interlingue (ie)', 'ie'],
                ['Inuktitut (iu)', 'iu'],
                ['Inuktitut - Canada (iu-CA)', 'iu-CA'],
                ['Inupiak (ik)', 'ik'],
                ['Inupiak - Alaska (ik-KK)', 'ik-KK'],
                ['Irish (ga)', 'ga'],
                ['Irish - Ireland (ga-IE)', 'ga-IE'],
                ['Irish - United Kingdom (ga-GB)', 'ga-GB'],
                [italian_ts + ' (it)', 'it'],
                [italian_ts + ' - ' + italy_ts + ' (it-IT)', 'it-IT'],
                [italian_ts + ' - San Marino (it-SM)', 'it-SM'],
                [italian_ts + ' - Switzerland (it-CH)', 'it-CH'],
                [italian_ts + ' - Vatican City (it-VA)', 'it-VA'],
                ['Japanese (ja)', 'ja'],
                ['Japanese - Japan (ja-JP)', 'ja-JP'],
                ['Japanese - Palau (ja-PW)', 'ja-PW'],
                ['Javanese (jv)', 'jv'],
                ['Javanese (jv-ID)', 'jv-ID'],
                ['Kalaallisut - Greenlandic (kl)', 'kl'],
                ['Kannada (kn)', 'kn'],
                ['Kannada - India (kn-IN)', 'kn-IN'],
                ['Kanuri (kr)', 'kr'],
                ['Kanuri - Cameroon (kr-CM)', 'kr-CM'],
                ['Kanuri - Chad (kr-TD)', 'kr-TD'],
                ['Kanuri - Libya (kr-LY)', 'kr-LY'],
                ['Kanuri - Niger (kr-NE)', 'kr-NE'],
                ['Kanuri - Nigeria (kr-NG)', 'kr-NG'],
                ['Kanuri - Sudan (kr-SG)', 'kr-SG'],
                ['Kashmiri (ks)', 'ks'],
                ['Kashmiri - India (ks-IN)', 'ks-IN'],
                ['Kazakh (kk)', 'kk'],
                ['Kazakh - China (kk-CN)', 'kk-CN'],
                ['Kazakh - Kazakhstan (kk-KZ)', 'kk-KZ'],
                ['Kazakh - Kyrgyzstan (kk-KG)', 'kk-KG'],
                ['Kazakh - Mongolia (kk-MN)', 'kk-MN'],
                ['Kazakh - Russian Federation (kk-RU)', 'kk-RU'],
                ['Kazakh - Turkey (kk-TR)', 'kk-TR'],
                ['Kazakh - Turkmenistan (kk-TM)', 'kk-TM'],
                ['Kazakh - Uzbekistan (kk-UZ)', 'kk-UZ'],
                ['Khmer (km)', 'km'],
                ['Khmer - Cambodia (km-KH)', 'km-KH'],
                ['Kikuyu (ki)', 'ki'],
                ['Kikuyu - Kenya (ki-KE)', 'ki-KE'],
                ['Kinyarwanda (Rwanda)', 'rw'],
                ['Kinyarwanda - Democratic Republic of the Congo (rw-CD)', 'rw-CD'],
                ['Kinyarwanda - Rwanda (rw-RW)', 'rw-RW'],
                ['Kinyarwanda - Uganda (rw-UG)', 'rw-UG'],
                ['Kirundi (rn)', 'rn'],
                ['Kirundi - Burundi (rn-BI)', 'rn-BI'],
                ['Komi (kv)', 'kv'],
                ['Komi - Russian Federation (kv-RU)', 'kv-RU'],
                ['Kongo (kg)', 'kg'],
                ['Kongo - Angola (kg-AO)', 'kg-AO'],
                ['Kongo - Democratic Republic of the Congo (kg-CD)', 'kg-CD'],
                ['Kongo - Gabon (kg-GA)', 'kg-GA'],
                ['Korean (ko)', 'ko'],
                ['Korean - DPRK (ko-KP)', 'ko-KP'],
                ['Korean - South Korea (ko-KR)', 'ko-KR'],
                ['Kurdish (ku)', 'ku'],
                ['Kurdish - Turkey (ku-TR)', 'ku-TR'],
                ['Kwanyama (kj)', 'kj'],
                ['Kwanyama - Angola (kj-AO)', 'kj-AO'],
                ['Kwanyama - Namibia (kj-NA)', 'kj-NA'],
                ['Kyrgyz (ky)', 'ky'],
                ['Kyrgyz (ky)', 'ky'],
                ['Kyrgyz - China (ky-CN)', 'ky-CN'],
                ['Kyrgyz - Kyrgyzstan (ky-KG)', 'ky-KG'],
                ['Lao (lo)', 'lo'],
                ['Lao - Cambodia (lo-KH)', 'lo-KH'],
                ['Lao - Laos (lo-LA)', 'lo-LA'],
                ['Lao - Thailand (lo-TH)', 'lo-TH'],
                ['Lao - Vietnam (lo-VN)', 'lo-VN'],
                ['Latin (la)', 'la'],
                ['Latin - Vatican City (la-VA)', 'la-VA'],
                ['Latvian (Lettish)', 'lv'],
                ['Latvian - Latvia (lv-LV)', 'lv-LV'],
                ['Limburgish ( Limburger)', 'li'],
                ['Limburgish (Limburger) - Belgium (li-BE)', 'li-BE'],
                ['Limburgish (Limburger) - Germany (li-DE)', 'li-DE'],
                ['Limburgish (Limburger) - Netherlands (li-NL)', 'li-NL'],
                ['Lingala (ln)', 'ln'],
                ['Lingala - Angola (ln-AO)', 'ln-AO'],
                ['Lingala - Central African Republic (ln-CF)', 'ln-CF'],
                ['Lingala - Congo (ln-CG)', 'ln-CG'],
                ['Lingala - Democratic Republic of the Congo (ln-CD)', 'ln-CD'],
                ['Lingala - South Sudan (ln-SS)', 'ln-SS'],
                ['Lithuanian (lt)', 'lt'],
                ['Lithuanian - Lithuania (fb-LT)', 'lt-LT'],
                ['Luga-Katanga (lu)', 'lu'],
                ['Luga-Katanga - Democratic Republic of the Congo (lu-CD)', 'lu-CD'],
                ['Luganda - Uganda (lg-UG)', 'lg-UG'],
                ['Luganda - Ganda (lg)', 'lg'],
                ['Luxembourgish (lb)', 'lb'],
                ['Luxembourgish - Luxembourg (lb-LU)', 'lb-LU'],
                ['Luxembourgish - Belgium (lb-BE)', 'lb-BE'],
                ['Luxembourgish - France (lb-FR)', 'lb-FR'],
                ['Luxembourgish - Germany (lb-DE)', 'lb-DE'],
                ['Macedonian (mk)', 'mk'],
                ['Macedonian - Macedonia (mk-MK)', 'mk-MK'],
                ['Malagasy (mg)', 'mg'],
                ['Malagasy - Madagascar (mg-MG)', 'mg-MG'],
                ['Malay (ms)', 'ms'],
                ['Malay - Malaysia (ms-MY)', 'ms-MY'],
                ['Malay - Brunei (ms-BN)', 'ms-BN'],
                ['Malay - Indonesia (ms-ID)', 'ms-ID'],
                ['Malay - Singapore (ms-SG)', 'ms-SG'],
                ['Malayalam (ml)', 'ml'],
                ['Malayalam - India (ml-IN)', 'ml-IN'],
                ['Maltese (mt)', 'mt'],
                ['Maltese - Malta (mt-MT)', 'mt-MT'],
                ['Manx (gv)', 'gv'],
                ['Manx - Isle of Man (gv-IM)', 'gv-IM'],
                ['Maori (mi)', 'mi'],
                ['Maori - New Zeland (mi-NZ)', 'mi-NZ'],
                ['Marathi (mr)', 'mr'],
                ['Marathi - India (mr-IN)', 'mr-IN'],
                ['Marshallese (mh)', 'mh'],
                ['Marshallese - Marshall Islands (mh-MH)', 'mh-MH'],
                ['Moldavian (mo)', 'mo'],
                ['Moldavian - Moldova (mo-MD)', 'mo-MD'],
                ['Moldavian - Ukraine (mo-UA)', 'mo-UA'],
                ['Mongolian (mn)', 'mn'],
                ['Mongolian - China (mn-CN)', 'mn-CN'],
                ['Mongolian - Kyrgyzstan (mn-KG)', 'mn-KG'],
                ['Mongolian - Mongolia (mn-MN)', 'mn-MN'],
                ['Mongolian - Russian Federation (mn-RU)', 'mn-RU'],
                ['Nauru (na)', 'na'],
                ['Nauru - Nauru (na-NR)', 'na-NR'],
                ['Navajo (nv)', 'nv'],
                ['Navajo - United States (nv-US)', 'nv-US'],
                ['Ndonga (ng)', 'ng'],
                ['Ndonga - Angola (ng-AO)', 'ng-AO'],
                ['Ndonga - Namibia (ng-NA)', 'ng-NA'],
                ['Nepali (ne)', 'ne'],
                ['Nepali - Nepal (ne-NP)', 'ne-NP'],
                ['Northern Ndebele (nd)', 'nd'],
                ['Northern Ndebele - Zimbabwe (nd-ZW)', 'nd-ZW'],
                ['Norwegian (no)', 'no'],
                ['Norwegian - Norway (no-NO)', 'no-NO'],
                ['Norwegian Bokmål - Norway (nb-NO)', 'nb-NO'],
                ['Norwegian Nynorsk - Norway (nn-NO)', 'nn-NO'],
                ['Norwegian bokmål (nb)', 'nb'],
                ['Norwegian nynorsk (nn)', 'nn'],
                ['Norwegian nynorsk - Norway (nn-NO)', 'nn-NO'],
                ['Nuosu (ii)', 'ii'],
                ['Nuosu - China (ii-CN)', 'ii-CN'],
                ['Occitan (oc)', 'oc'],
                ['Occitan - France (oc-FR)', 'oc-FR'],
                ['Occitan - Spain (oc-ES)', 'oc-ES'],
                ['Ojibwe (oj)', 'oj'],
                ['Ojibwe - Canada (oj-CA)', 'oj-CA'],
                ['Ojibwe - United States (oj-US)', 'oj-US'],
                ['Old Church Slavonic - Bulgaria (cu-BG)', 'cu-BG'],
                ['Old Church Slavonic - Czechia (cu-EZ)', 'cu-EZ'],
                ['Old Church Slavonic - Poland (cu-PL)', 'cu-PL'],
                ['Old Church Slavonic - Russian Federation (cu-RU)', 'cu-RU'],
                ['Old Church Slavonic - Serbia (cu-RS)', 'cu-RS'],
                ['Old Church Slavonic - Slovakia (cu-SK)', 'cu-SK'],
                ['Old Church Slavonic - Slovenia (cu-SI)', 'cu-SI'],
                ['Old Church Slavonic - Old Bulgarian (cu)', 'cu'],
                ['Oriya (or)', 'or'],
                ['Oriya - India (or-IN)', 'or-IN'],
                ['Oromo (Afaan Oromo)', 'om'],
                ['Oromo - Ethiopia (om-ET)', 'om-ET'],
                ['Oromo - Kenya (om-KE)', 'om-KE'],
                ['Ossetian (os)', 'os'],
                ['Ossetian - Georgia (os-GE)', 'os-GE'],
                ['Ossetian - Russian Federation (os-RU)', 'os-RU'],
                ['Pashto - Afghanistan (ps-AF)', 'ps-AF'],
                ['Pashto - Pushto (ps)', 'ps'],
                ['Persian (Farsi)', 'fa'],
                ['Persian - Afghanistan (fa-AF)', 'fa-AF'],
                ['Persian - Iran (fa-IR)', 'fa-IR'],
                ['Polish (pl)', 'pl'],
                ['Polish - Poland (pl-PL)', 'pl-PL'],
                ['Portuguese (pt)', 'pt'],
                ['Portuguese - Portugal (pt-PT)', 'pt-PT'],
                ['Portuguese - Angola (pt-AO)', 'pt-AO'],
                ['Portuguese - Brazil (pt-BR)', 'pt-BR'],
                ['Portuguese - Cape Verde (pt-CV)', 'pt-CV'],
                ['Portuguese - Equatorial Guinea (pt-GQ)', 'pt-GQ'],
                ['Portuguese - Guinea-Bissau (pt-GW)', 'pt-GW'],
                ['Portuguese - Macao (pt-MO)', 'pt-MO'],
                ['Portuguese - Mozambique (pt-MZ)', 'pt-MZ'],
                ['Portuguese - São Tomé and Principe (pt-ST)', 'pt-ST'],
                ['Portuguese - Timor-Leste (pt-TL)', 'pt-TL'],
                ['Punjabi (Eastern)', 'pa'],
                ['Punjabi - India (pa-IN)', 'pa-IN'],
                ['PÄli (pi)', 'pi'],
                ['PÄli - Bangladesh (pi-BD)', 'pi-BD'],
                ['PÄli - Cambodia (pi-KH)', 'pi-KH'],
                ['PÄli - India (pi-IN)', 'pi-IN'],
                ['PÄli - Laos (pi-LA)', 'pi-LA'],
                ['PÄli - Myanmar (pi-MN)', 'pi-MN'],
                ['PÄli - Nepal (pi-NP)', 'pi-NP'],
                ['PÄli - Sri Lanka (pi-LK)', 'pi-LK'],
                ['PÄli - Thailand (pi-TH)', 'pi-TH'],
                ['Quechua (qu)', 'qu'],
                ['Quechua - Argentina (qu-AR)', 'qu-AR'],
                ['Quechua - Bolivia (qu-BO)', 'qu-BO'],
                ['Quechua - Chile (qu-CL)', 'qu-CL'],
                ['Quechua - Colombia (qu-CO)', 'qu-CO'],
                ['Quechua - Ecuador (qu-EC)', 'qu-EC'],
                ['Quechua - Peru (qu-PE)', 'qu-PE'],
                ['Romanian (ro)', 'ro'],
                ['Romanian - Romania (ro-RO)', 'ro-RO'],
                ['Romanian - Moldova (ro-MD)', 'ro-MD'],
                ['Romansh (rm)', 'rm'],
                ['Romansh - ' + italy_ts + ' (rm-IT)', 'rm-IT'],
                ['Romansh - Switzerland (rm-CH)', 'rm-CH'],
                ['Russian (ru)', 'ru'],
                ['Russian - Russian Federation (ru-RU)', 'ru-RU'],
                ['Russian - Belarus (ru-BY)', 'ru-BY'],
                ['Russian - Kazakhstan (ru-KZ)', 'ru-KZ'],
                ['Russian - Kyrgyz Republic (ru-KG)', 'ru-KG'],
                ['Russian - Tajikistan (ru-TJ)', 'ru-TJ'],
                ['Sami (se)', 'se'],
                ['Sami Samoan - Finland (se-FI)', 'se-FI'],
                ['Sami Samoan - Norway (se-NO)', 'se-NO'],
                ['Sami Samoan - Russian Federation (se-RU)', 'se-RU'],
                ['Sami Samoan - Sweden (se-SE)', 'se-SE'],
                ['Samoan (sm)', 'sm'],
                ['Sango (sg)', 'sg'],
                ['Sango - Central African Republic (sg-CF)', 'sg-CF'],
                ['Sango - Chad (sg-TD)', 'sg-TD'],
                ['Sango - Democratic Republic of the Congo (sg-CD)', 'sg-CD'],
                ['Sanskrit (sa)', 'sa'],
                ['Sanskrit - Bangladesh (sa-BD)', 'sa-BD'],
                ['Sanskrit - Brunei Darussalam (sa-BD)', 'sa-BD'],
                ['Sanskrit - Cambodia (sa-KH)', 'sa-KH'],
                ['Sanskrit - India (sa-IN)', 'sa-IN'],
                ['Sanskrit - Indonesia (sa-ID)', 'sa-ID'],
                ['Sanskrit - Laos (sa-LA)', 'sa-LA'],
                ['Sanskrit - Malaysia (sa-MY)', 'sa-MY'],
                ['Sanskrit - Myanmar (sa-MN)', 'sa-MN'],
                ['Sanskrit - Pakistan (sa-PK)', 'sa-PK'],
                ['Sanskrit - Philippines (sa-PH)', 'sa-PH'],
                ['Sanskrit - Singapore (sa-SG)', 'sa-SG'],
                ['Sanskrit - Sri Lanka (sa-LK)', 'sa-LK'],
                ['Sanskrit - Thailand (sa-TH)', 'sa-TH'],
                ['Sanskrit - Timor-Leste (sa-TL)', 'sa-TL'],
                ['Sanskrit - Vietnam (sa-VN)', 'sa-VN'],
                ['Serbian (sr)', 'sr'],
                ['Serbian - Serbia (sr-RS)', 'sr-RS'],
                ['Serbian - Bosnia and Herzegovina (sr-BA)', 'sr-BA'],
                ['Serbian - Montenegro (sr-ME)', 'sr-ME'],
                ['Serbo-Croatian (sh)', 'sh'],
                ['Serbo-Croatian - Serbia (sh-RS)', 'sh-RS'],
                ['Serbo-Croatian - Croatia (sh-HR)', 'sh-HR'],
                ['Serbo-Croatian - Bosnia and Herzegovina (sh-BA)', 'sh-BA'],
                ['Serbo-Croatian - Czech Republic (sh-CZ)', 'sh-CZ'],
                ['Serbo-Croatian - Slovakia (sh-SK)', 'sh-SK'],
                ['Serbo-Croatian - Austria (sh-AT)', 'sh-AT'],
                ['Serbo-Croatian - Hungary (sh-HU)', 'sh-HU'],
                ['Serbo-Croatian - ' + italy_ts + ' (sh-IT)', 'sh-IT'],
                ['Serbo-Croatian - Kosovo (sh-XK)', 'sh-XK'],
                ['Serbo-Croatian - Macedonia (sh-MK)', 'sh-MK'],
                ['Serbo-Croatian - Montenegro (sh-ME)', 'sh-ME'],
                ['Serbo-Croatian - Romania (sh-RO)', 'sh-RO'],
                ['Sesotho (st)', 'st'],
                ['Sesotho - Lesotho (st-LS)', 'st-LS'],
                ['Sesotho - South Africa (st-ZA)', 'st-ZA'],
                ['Sesotho - Zimbabwe (st-ZW)', 'st-ZW'],
                ['Setswana (tn)', 'tn'],
                ['Setswana - Botswana (tn-BW)', 'tn-BW'],
                ['Setswana - Namibia (tn-NA)', 'tn-NA'],
                ['Setswana - South Africa (tn-ZA)', 'tn-ZA'],
                ['Setswana - Zimbabwe (tn-ZW)', 'tn-ZW'],
                ['Shona (sn)', 'sn'],
                ['Shona - Botswana (sn-BW)', 'sn-BW'],
                ['Shona - Mozambique (sn-MZ)', 'sn-MZ'],
                ['Shona - Zimbabwe (sn-ZW)', 'sn-ZW'],
                ['Sichuan Yi (ii)', 'ii'],
                ['Sichuan Yi - China (ii-CN)', 'ii-CN'],
                ['Sindhi (sd)', 'sd'],
                ['Sindhi - India (sd-IN)', 'sd-IN'],
                ['Sindhi - Pakistan (sd-PK)', 'sd-PK'],
                ['Sinhala (si-LK)', 'si-LK'],
                ['Sinhalese (si)', 'si'],
                ['Siswati (ss)', 'ss'],
                ['Siswati - Eswatini (ss-WZ)', 'ss-WZ'],
                ['Siswati - Lesotho (ss-LS)', 'ss-LS'],
                ['Siswati - Mozambique (ss-MZ)', 'ss-MZ'],
                ['Siswati - South Africa (ss-ZA)', 'ss-ZA'],
                ['Slovak (sk)', 'sk'],
                ['Slovak - Czech Republic (sk-CZ)', 'sk-CZ'],
                ['Slovak - Slovakia (sk-SK)', 'sk-SK'],
                ['Slovenian (sl)', 'sl'],
                ['Slovenian - Slovenia (sl-SI)', 'sl-SI'],
                ['Somali (so)', 'so'],
                ['Somali - Somalia (so-SO)', 'so-SO'],
                ['Somali - Djibouti (so-DJ)', 'so-DJ'],
                ['Somali - Ethiopia (so-ET)', 'so-ET'],
                ['Somali - Kenya (so-KE)', 'so-KE'],
                ['Southern Ndebele (nr)', 'nr'],
                ['Southern Ndebele - South Africa (nr-ZA)', 'nr-ZA'],
                ['Spanish (es)', 'es'],
                ['Spanish - Spain (es-ES)', 'es-ES'],
                ['Spanish - Spanish (es-LA)', 'es-LA'],
                ['Spanish - Argentina (es-AR)', 'es-AR'],
                ['Spanish - Bolivia (es-BO)', 'es-BO'],
                ['Spanish - Chile (es-CL)', 'es-CL'],
                ['Spanish - Colombia (es-CO)', 'es-CO'],
                ['Spanish - Costa Rica (es-CR)', 'es-CR'],
                ['Spanish - Cuba (es-CU)', 'es-CU'],
                ['Spanish - Dominican Republic (es-DO)', 'es-DO'],
                ['Spanish - Ecuador (es-EC)', 'es-EC'],
                ['Spanish - El Salvador (es-SV)', 'es-SV'],
                ['Spanish - Equatorial Guinea (es-GQ)', 'es-GQ'],
                ['Spanish - Gibraltar (es-GI)', 'es-GI'],
                ['Spanish - Guatemala (es-GT)', 'es-GT'],
                ['Spanish - Honduras (es-HN)', 'es-HN'],
                ['Spanish - Mexico (es-MX)', 'es-MX'],
                ['Spanish - Nicaragua (es-NI)', 'es-NI'],
                ['Spanish - Panama (es-PA)', 'es-PA'],
                ['Spanish - Paraguay (es-PY)', 'es-PY'],
                ['Spanish - Peru (es-PE)', 'es-PE'],
                ['Spanish - Puerto Rico (es-PR)', 'es-PR'],
                ['Spanish - United States (es-US)', 'es-US'],
                ['Spanish - Uruguay (es-UY)', 'es-UY'],
                ['Spanish - Venezuela (es-VE)', 'es-VE'],
                ['Sundanese (su)', 'su'],
                ['Sundanese - Indonesia (su-ID)', 'su-ID'],
                ['Swahili (Kiswahili)', 'sw'],
                ['Swahili - Kenya (sw-KE)', 'sw-KE'],
                ['Swati (ss)', 'ss'],
                ['Swedish (sv)', 'sv'],
                ['Swedish - Sweden (sv-SE)', 'sv-SE'],
                ['Swedish - Finland (sv-FI)', 'sv-FI'],
                ['Tagalog (tl)', 'tl'],
                ['Tahitian (ty)', 'ty'],
                ['Tahitian - French Polynesia (ty-FP)', 'ty-FP'],
                ['Tajik (tg)', 'tg'],
                ['Tajik - Tajikistan (tg-TJ)', 'tg-TJ'],
                ['Tajik - Afghanistan (tg-AF)', 'tg-AF'],
                ['Tajik - Russian Federation (tg-RU)', 'tg-RU'],
                ['Tajik - Uzbekistan (tg-UZ)', 'tg-UZ'],
                ['Tamil (ta)', 'ta'],
                ['Tamil - India (ta-IN)', 'ta-IN'],
                ['Tamil - Sri Lanka (ta-LK)', 'ta-LK'],
                ['Tatar (tt)', 'tt'],
                ['Tatar - Russian Federation (tt-RU)', 'tt-RU'],
                ['Telugu (te)', 'te'],
                ['Telugu - India (te-IN)', 'te-IN'],
                ['Thai (th)', 'th'],
                ['Thai - Thailand (th-TH)', 'th-TH'],
                ['Tibetan (bo)', 'bo'],
                ['Tibetan - Tibet (bo-CN)', 'bo-CN'],
                ['Tigrinya (ti)', 'ti'],
                ['Tigrinya - Eritrea (ti-ER)', 'ti-ER'],
                ['Tigrinya - Ethiopia (ti-ET)', 'ti-ET'],
                ['Tigrinya - Israel (ti-IL)', 'ti-IL'],
                ['Tonga (to)', 'to'],
                ['Tonga - Tonga (to-TO)', 'to-TO'],
                ['Tsonga (ts)', 'ts'],
                ['Tsonga - Mozambique (ts-MZ)', 'ts-MZ'],
                ['Tsonga - South Africa (ts-ZA)', 'ts-ZA'],
                ['Tsonga - Zimbabwe (ts-ZW)', 'ts-ZW'],
                ['Turkish (tr)', 'tr'],
                ['Turkish - Turkey (tr-TR)', 'tr-TR'],
                ['Turkish - Cyprus (tr-CY)', 'tr-CY'],
                ['Turkmen (tk)', 'tk'],
                ['Turkmen - Turkmenistan (tk-TM)', 'tk-TM'],
                ['Turkmen - Afghanistan (tk-AF)', 'tk-AF'],
                ['Turkmen - Iran (tk-IR)', 'tk-IR'],
                ['Turkmen - Pakistan (tk-PK)', 'tk-PK'],
                ['Turkmen - Russian Federation (tk-RU)', 'tk-RU'],
                ['Turkmen - Tajikistan (tk-TJ)', 'tk-TJ'],
                ['Turkmen - Uzbekistan (tk-UZ)', 'tk-UZ'],
                ['Twi (tw)', 'tw'],
                ['Twi - Ghana (tw-GH)', 'tw-GH'],
                ['Twi - Ivory Coast (tw-IV)', 'tw-IV'],
                ['Uighur - China (ug-CN)', 'ug-CN'],
                ['Ukrainian (uk)', 'uk'],
                ['Ukrainian - Ukraine (uk-UA)', 'uk-UA'],
                ['Urdu (ur)', 'ur'],
                ['Urdu - Afghanistan (ur-AF)', 'ur-AF'],
                ['Urdu - Bangladesh (ur-BD)', 'ur-BD'],
                ['Urdu - India (ur-IN)', 'ur-IN'],
                ['Urdu - Nepal (ur-NP)', 'ur-NP'],
                ['Urdu - Pakistan (ur-PK)', 'ur-PK'],
                ['Urdu - South Africa (ur-ZA)', 'ur-ZA'],
                ['Uyghur (ug)', 'ug'],
                ['Uzbek (uz)', 'uz'],
                ['Uzbek - Uzbekistan (uz-UZ)', 'uz-UZ'],
                ['Venda (ve)', 've'],
                ['Venda - South Africa (ve-ZA)', 've-ZA'],
                ['Venda - Zimbabwe (ve-ZW)', 've-ZW'],
                ['Vietnamese (vi)', 'vi'],
                ['Vietnamese - Vietnam (vi-VN)', 'vi-VN'],
                ['Volapük (vo)', 'vo'],
                ['Volapük - Europe (vo-EU)', 'vo-EU'],
                ['Wallon (wa)', 'wa'],
                ['Wallon - Belgium (wa-BE)', 'wa-BE'],
                ['Wallon - France (wa-FR)', 'wa-FR'],
                ['Wallon - United States (wa-US)', 'wa-US'],
                ['Welsh (cy)', 'cy'],
                ['Welsh - United Kingdom (cy-GB)', 'cy-GB'],
                ['Western Frisian (fy)', 'fy'],
                ['Wolof (wo)', 'wo'],
                ['Wolof - Senegal (wo-SN)', 'wo-SN'],
                ['Wolof - Gambia (wo-GM)', 'wo-GM'],
                ['Wolof - Mauritania (wo-MR)', 'wo-MR'],
                ['Xhosa (xh)', 'xh'],
                ['Xhosa - Lesotho (xh-LS)', 'xh-LS'],
                ['Xhosa - South Africa (xh-ZA)', 'xh-ZA'],
                ['Yiddish (yi, ji)', 'yi, ji'],
                ['Yiddish - Germany (yi-DE)', 'yi-DE'],
                ['Yiddish - Israel (yi-IL)', 'yi-IL'],
                ['Yiddish - Belarus (yi-BY)', 'yi-BY'],
                ['Yiddish - Bosnia and Herzegovina (yi-BA)', 'yi-BA'],
                ['Yiddish - Netherlands (yi-NL)', 'yi-NL'],
                ['Yiddish - Poland (yi-PL)', 'yi-PL'],
                ['Yiddish - Romania (yi-RO)', 'yi-RO'],
                ['Yiddish - Russian Federation (yi-RU)', 'yi-RU'],
                ['Yiddish - Sweden (yi-SE)', 'yi-SE'],
                ['Yiddish - Ukraine (yi-UA)', 'yi-UA'],
                ['Yoruba (yo)', 'yo'],
                ['Yoruba - Benin (yo-BJ)', 'yo-BJ'],
                ['Yoruba - Nigeria (yo-NG)', 'yo-NG'],
                ['Yoruba - Togo (yo-TG)', 'yo-TG'],
                ['Zhuang - China (za-CN)', 'za-CN'],
                ['Zhuang - Chuang (za)', 'za'],
                ['Zulu (zu)', 'zu'],
                ['Zulu - Malawi (zu-MW)', 'zu-MW'],
                ['Zulu - Mozambique (zu-MZ)', 'zu-MZ'],
                ['Zulu - South Africa (zu-ZA)', 'zu-ZA'],
                ['Zulu - Swaziland (zu-SZ)', 'zu-SZ']
            ];

            var selectList = document.createElement("select");
            selectList.id = "language_toppersystem_send";
            selectList.className = "inputform_toppersystem";
            myParent.appendChild(selectList);

            for (var i = 0; i < array.length; i++) {
                var option = document.createElement("option");
                option.value = array[i][1];
                option.text = array[i][0];
                if(array[i][1] == language_toppersystem){
                   option.selected = "selected";
                }
                selectList.appendChild(option);
            }

            var myParent2 = document.getElementById('add_select_form_resolution_images_toppersystem');

            var array2 = [
                ['40', '40'],
                ['41', '41'],
                ['42', '42'],
                ['43', '43'],
                ['44', '44'],
                ['45', '45'],
                ['46', '46'],
                ['47', '47'],
                ['48', '48'],
                ['49', '49'],
                ['50', '50'],
                ['51', '51'],
                ['52', '52'],
                ['53', '53'],
                ['54', '54'],
                ['55', '55'],
                ['56', '56'],
                ['57', '57'],
                ['58', '58'],
                ['59', '59'],
                ['60', '60'],
                ['61', '61'],
                ['62', '62'],
                ['63', '63'],
                ['64', '64'],
                ['65', '65'],
                ['66', '66'],
                ['67', '67'],
                ['68', '68'],
                ['69', '69'],
                ['70', '70'],
                ['71', '71'],
                ['72', '72'],
                ['73', '73'],
                ['74', '74'],
                ['75', '75'],
                ['76', '76'],
                ['77', '77'],
                ['78', '78'],
                ['79', '79'],
                ['80', '80'],
                ['81', '81'],
                ['82', '82'],
                ['83', '83'],
                ['84', '84'],
                ['85', '85'],
                ['86', '86'],
                ['87', '87'],
                ['88', '88'],
                ['89', '89'],
                ['90', '90'],
                ['91', '91'],
                ['92', '92'],
                ['93', '93'],
                ['94', '94'],
                ['95', '95'],
                ['96', '96'],
                ['97', '97'],
                ['98', '98'],
                ['99', '99'],
                ['100', '100']
            ];

            var selectList2 = document.createElement("select");
            selectList2.id = "resolution_images_toppersystem_send";
            selectList2.className = "inputform_resolution_toppersystem";
            myParent2.appendChild(selectList2);

            for (var i = 0; i < array2.length; i++) {
                var option2 = document.createElement("option");
                option2.value = array2[i][1];
                option2.text = array2[i][0];
                if(array2[i][1] == resolution_images_toppersystem){
                   option2.selected = "selected";
                }
                selectList2.appendChild(option2);
            }

            setTimeout("SendStatusToppersystem()", 2);
            setTimeout("request_load_status_defer_toppersystem()", 20);
			setTimeout("request_load_status_cssfilests_toppersystem()", 40);
	    }
    }
}

function VerifyLanguageTS()
{
	if(ControllerFunction2() == true){
		if(document.getElementById('language_toppersystem_send')){
			if(document.getElementById('language_toppersystem_send').value.trim() != ""){
                return 1;
		    }else{
			    return 0;
		    }
		}else{
			return 0;
		}		
	}else{
		return 0;
	}
}

function NotSendProcessToppersystem()
{
    //niente
}

function StatusOptimizationToppersystem()
{
	if(ControllerFunction2() == true){

		if(document.getElementById('CountCicleStatusOptimizationToppersystem')){			
			var screen = document.getElementById("CountCicleStatusOptimizationToppersystem");
			document.body.removeChild(screen);
		}

		setTimeout("StatusOptimizationToppersystem2()", 80);
	}
}

function StatusOptimizationToppersystem2()
{
	if(ControllerFunction2() == true){

		if(!document.getElementById('CountCicleStatusOptimizationToppersystem')){
			var add = document.createElement("INPUT");
			add.setAttribute("id", "CountCicleStatusOptimizationToppersystem");
            add.setAttribute("type", "hidden");
            add.setAttribute("name", "CountCicleStatusOptimizationToppersystem");
            add.setAttribute("value", "1");
			document.body.appendChild(add);
		}else{
            if(parseInt(document.getElementById('CountCicleStatusOptimizationToppersystem').value.trim()) != "NaN"){
                document.getElementById('CountCicleStatusOptimizationToppersystem').value = parseInt(document.getElementById('CountCicleStatusOptimizationToppersystem').value.trim()) + 1;
            }else{
                document.getElementById('CountCicleStatusOptimizationToppersystem').value="1";
            }
        }
		setTimeout("StatusOptimizationToppersystem3()", 80);
	}
}

function StatusOptimizationToppersystem3()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('status_optimization_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
			
				var http = new XMLHttpRequest();

				http.onreadystatechange = function() {					
					if(http.readyState == 4 && http.status == 200) {

                       var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
                       var txtts0;
                       var txtts1;
                       if(hreflang_toppersystem == "it"){
                            txtts0="Abbiamo trovato un problema di dialogo con il tuo server. Il codice di stato rilevato è: 524";
                            txtts1="Pagina ottimizzata";
                        }else if(hreflang_toppersystem == "ar"){
                            txtts0="وجدنا مشكلة حوار مع الخادم الخاص بك. رمز الحالة المكتشف هو: 524";
                            txtts1="صفحة محسنة";
                        }else if(hreflang_toppersystem == "de"){
                            txtts0="Wir haben ein Dialogproblem mit Ihrem Server gefunden. Der erkannte Statuscode lautet: 524";
                            txtts1="Optimierte Seite";
                        }else if(hreflang_toppersystem == "es"){
                            txtts0="Encontramos un problema de diálogo con su servidor. El código de estado detectado es: 524";
                            txtts1="Página optimizada";
                        }else if(hreflang_toppersystem == "fr"){
                            txtts0="Nous avons trouvé un problème de dialogue avec votre serveur. Le code d'état détecté est: 524";
                            txtts1="Page optimisée";
                        }else if(hreflang_toppersystem == "hi"){
                            txtts0="हमें आपके सर्वर के साथ एक संवाद समस्या मिली। पता चला स्थिति कोड है0: 524";
                            txtts1="अनुकूलित पृष्ठ";
                        }else if(hreflang_toppersystem == "ja"){
                            txtts0="サーバーとの対話の問題が見つかりました。検出されたステータスコードは次のとおりです。 524";
                            txtts1="最適化されたページ";
                        }else if(hreflang_toppersystem == "pl"){
                            txtts0="Znaleźliśmy problem z dialogiem na Twoim serwerze. Wykryty kod stanu to: 524";
                            txtts1="Zoptymalizowana strona";
                        }else if(hreflang_toppersystem == "pt"){
                            txtts0="Encontramos um problema de diálogo com seu servidor. O código de status detectado é: 524";
                            txtts1="Página otimizada";
                        }else if(hreflang_toppersystem == "ru"){
                            txtts0="Мы обнаружили проблему диалога с вашим сервером. Обнаруженный код состояния: 524";
                            txtts1="Оптимизированная страница";
                        }else if(hreflang_toppersystem == "zh"){
                            txtts0="我们发现您的服务器存在对话问题。检测到的状态码为：524";
                            txtts1="优化页面";
                        }else if(hreflang_toppersystem == "he"){
                            txtts0="מצאנו בעיית דיאלוג עם השרת שלך. קוד המצב שזוהה הוא: 524";
                            txtts1="עמוד מיטוב";
                        }else if(hreflang_toppersystem == "la"){
                            txtts0="Difficultas dialogi invenimus cum servo tuo. Deprehensio status codice is: 524";
                            txtts1="Page optimized";
                        }else{
                            txtts0="We found a dialogue problem with your server. The detected status code is: 524";
                            txtts1="Optimized page";
                        }

						if(http.responseText.trim() == "ok"){
                            document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                            document.getElementById('CountCicleStatusOptimizationToppersystem').value="0";
                            document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:SendProcessToppersystem();');						
                            alert(txtts1.trim());
                            setTimeout("SendStatusToppersystem()", 2);					
						}else{
                            if(parseInt(document.getElementById('CountCicleStatusOptimizationToppersystem').value.trim()) != "NaN"){
                                if(parseInt(document.getElementById('CountCicleStatusOptimizationToppersystem').value.trim()) <= 40){
                                    setTimeout("StatusOptimizationToppersystem2()", 9500);
                                }else{
                                    document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";	
                                    document.getElementById('CountCicleStatusOptimizationToppersystem').value="0";
                                    document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:SendProcessToppersystem();');				
                                    alert(txtts0.trim());
                                }
                            }else{
                                document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                                document.getElementById('CountCicleStatusOptimizationToppersystem').value="0";
                                document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:SendProcessToppersystem();');				
                                alert(txtts0.trim());
                            }
                            
					    }
					}else if(http.readyState == 4 && http.status != 200) {
                        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
                        var txtts0;
                        if(hreflang_toppersystem == "it"){
                            txtts0="Abbiamo trovato un problema di dialogo con il tuo server. Il codice di stato rilevato è: 524";
                        }else if(hreflang_toppersystem == "ar"){
                            txtts0="وجدنا مشكلة حوار مع الخادم الخاص بك. رمز الحالة المكتشف هو: 524";
                        }else if(hreflang_toppersystem == "de"){
                            txtts0="Wir haben ein Dialogproblem mit Ihrem Server gefunden. Der erkannte Statuscode lautet: 524";
                        }else if(hreflang_toppersystem == "es"){
                            txtts0="Encontramos un problema de diálogo con su servidor. El código de estado detectado es: 524";
                        }else if(hreflang_toppersystem == "fr"){
                            txtts0="Nous avons trouvé un problème de dialogue avec votre serveur. Le code d'état détecté est: 524";
                        }else if(hreflang_toppersystem == "hi"){
                            txtts0="हमें आपके सर्वर के साथ एक संवाद समस्या मिली। पता चला स्थिति कोड है0: 524";
                        }else if(hreflang_toppersystem == "ja"){
                            txtts0="サーバーとの対話の問題が見つかりました。検出されたステータスコードは次のとおりです。 524";
                        }else if(hreflang_toppersystem == "pl"){
                            txtts0="Znaleźliśmy problem z dialogiem na Twoim serwerze. Wykryty kod stanu to: 524";
                        }else if(hreflang_toppersystem == "pt"){
                            txtts0="Encontramos um problema de diálogo com seu servidor. O código de status detectado é: 524";
                        }else if(hreflang_toppersystem == "ru"){
                            txtts0="Мы обнаружили проблему диалога с вашим сервером. Обнаруженный код состояния: 524";
                        }else if(hreflang_toppersystem == "zh"){
                            txtts0="我们发现您的服务器存在对话问题。检测到的状态码为：524";
                        }else if(hreflang_toppersystem == "he"){
                            txtts0="מצאנו בעיית דיאלוג עם השרת שלך. קוד המצב שזוהה הוא: 524";
                        }else if(hreflang_toppersystem == "la"){
                            txtts0="Difficultas dialogi invenimus cum servo tuo. Deprehensio status codice is: 524";
                        }else{
                            txtts0="We found a dialogue problem with your server. The detected status code is: 524";
                        }  
                        document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                        document.getElementById('CountCicleStatusOptimizationToppersystem').value="0";
                        document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:SendProcessToppersystem();');				
                        alert(txtts0.trim());                      
                    }else{
						if(http.readyState == 1) {
							
						}else if(http.readyState == 2) {

						}else if(http.readyState == 3) {
						
						}else{
							
						}				        
					}
				}
				
                var url = ajax_components_toppersystem.url;
                var params = "action=componentstoppersystem10ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem_send').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
				http.open("POST", url, true);
				http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				http.send(params);
			}

		}else{
			
		}
	}
}

function SendProcessToppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('destination_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('resolution_images_toppersystem_send'))&&(document.getElementById('check_stronglazyload_images_toppersystem_send'))&&(document.getElementById('check_stronglazyload_video_toppersystem_send'))&&(document.getElementById('check_text_ia_toppersystem_send'))){
          
            var pass_title="ok";
            if(document.getElementById('check_title_toppersystem_send').checked != true){		
                if(document.getElementById('title_toppersystem_send').value.trim() == ""){		
                    pass_title="no";
                }
            }
            
            var pass_description="ok";
            if(document.getElementById('check_description_toppersystem_send').checked != true){		
                if(document.getElementById('description_toppersystem_send').value.trim() == ""){		
                    pass_description="no";
                }
            }

            var pass_keywords="ok";
            if(document.getElementById('check_keywords_toppersystem_send').checked != true){		
                if(document.getElementById('keywords_toppersystem_send').value.trim() == ""){		
                    pass_keywords="no";
                }
            }
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('destination_toppersystem').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('keyword_toppersystem_send').value.trim() != "")&&(document.getElementById('language_toppersystem_send').value.trim() != "")&&(VerifyLanguageTS() == 1)&&(pass_title == "ok")&&(pass_description == "ok")&&(pass_keywords == "ok")&&(document.getElementById('check_privacy_toppersystem_send').checked == true)){
			    document.getElementById('load_toppersystem').className = "box_loader_toppersystem"; 
                document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:NotSendProcessToppersystem();');
                document.getElementById('respons_txt').innerHTML="&nbsp;";
			}
            
		}else{
			
		}

        setTimeout("SendProcessToppersystem2()", 80);

	}
}

function SendProcessToppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem'))&&(document.getElementById('canonical_toppersystem_send'))&&(document.getElementById('destination_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('resolution_images_toppersystem_send'))&&(document.getElementById('check_stronglazyload_images_toppersystem_send'))&&(document.getElementById('check_stronglazyload_video_toppersystem_send'))&&(document.getElementById('check_text_ia_toppersystem_send'))){
            if((document.getElementById('language_toppersystem_send').value.trim() == "")||(VerifyLanguageTS() == 0)){		
                document.getElementById('language_toppersystem_send').className="inputform_toppersystem border_red";
            }
            
            var pass_title="ok";
            if(document.getElementById('check_title_toppersystem_send').checked != true){		
                if(document.getElementById('title_toppersystem_send').value.trim() == ""){		
                    document.getElementById('title_toppersystem_send').className="inputform_toppersystem border_red";
                    document.getElementById('check_title_toppersystem_send').className="border_red";
                    pass_title="no";
                }
            }
            
            var pass_description="ok";
            if(document.getElementById('check_description_toppersystem_send').checked != true){		
                if(document.getElementById('description_toppersystem_send').value.trim() == ""){		
                    document.getElementById('description_toppersystem_send').className="inputform_toppersystem border_red";
                    document.getElementById('check_description_toppersystem_send').className="border_red";
                    pass_description="no";
                }
            }

            var pass_keywords="ok";
            if(document.getElementById('check_keywords_toppersystem_send').checked != true){		
                if(document.getElementById('keywords_toppersystem_send').value.trim() == ""){		
                    document.getElementById('keywords_toppersystem_send').className="inputform_toppersystem border_red";
                    document.getElementById('check_keywords_toppersystem_send').className="border_red";
                    pass_keywords="no";
                }
            }

            if(document.getElementById('keyword_toppersystem_send').value.trim() == ""){		
                document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem border_red";
            }

			var query_images="";
			if(document.querySelector('input[name="images_toppersystem_send"]:checked')) {
				query_images=document.querySelector('input[name="images_toppersystem_send"]:checked').value.trim();
			}else{
				query_images="1";
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
		    
			if((document.getElementById('authcode_toppersystem').value.trim() != "")&&(document.getElementById('canonical_toppersystem_send').value.trim() != "")&&(document.getElementById('destination_toppersystem').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('keyword_toppersystem_send').value.trim() != "")&&(document.getElementById('language_toppersystem_send').value.trim() != "")&&(VerifyLanguageTS() == 1)&&(pass_title == "ok")&&(pass_description == "ok")&&(pass_keywords == "ok")&&(document.getElementById('check_privacy_toppersystem_send').checked == true)){

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

									if(decode_html_toppersystem(http.responseText.trim()) != ""){
										newtxtrequest = decode_html_toppersystem(http.responseText.trim()).replace(/ErrorRequestTS ServiceNotAvailable/, '');                                
										if(decode_html_toppersystem(http.responseText.trim()) != newtxtrequest) {                                
											setTimeout("SendProcessToppersystem()", 2400);
										}else{
											document.getElementById('check_privacy_toppersystem_send').checked = false;
											document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts"; 
                                            document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:SendProcessToppersystem();');

											newtxtverifyspam = decode_html_toppersystem(http.responseText.trim()).replace(/</, '');                                
											if(decode_html_toppersystem(http.responseText.trim()) != newtxtverifyspam) {                                
												alert(txtts0);
                                                //txtts1
											}else{

											    if(decode_html_toppersystem(http.responseText.trim()) != "") {                           
												    newtxt = decode_html_toppersystem(http.responseText.trim()).replace(/Topper the Top/, '');                                
												    if(decode_html_toppersystem(http.responseText.trim()) != newtxt) {  
                                                        document.getElementById('hiddenrespons_txt').value = decode_html_toppersystem(http.responseText.trim());                              
													    setTimeout("SendStatusToppersystem()", 2);
                                                        setTimeout("ChangeStateOptimizationToppersystem()", 80);
												    }else{
                                                        alert(decode_html_toppersystem(http.responseText.trim())); 
                                                    }
											    }

												
											}																	   
										}
									}else{
										document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                                        document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:SendProcessToppersystem();');
										alert(txtts0);										
									}
								}else if(http.readyState == 4 && http.status != 200) {
                                    if(ControllerFunction2() == true){
                                        if(http.status == 524){
                                            setTimeout("StatusOptimizationToppersystem()", 80);
                                        }else{                                          
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
                                            document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";	
                                            document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:SendProcessToppersystem();');					
                                            alert(txtts1.trim());
                                        }
                                    }
					            }else{
									if(http.readyState == 1) {
										
									}else if(http.readyState == 2) {
										
									}else if(http.readyState == 3) {
									
									}else{

									}				        
								}
							}

                            var check_stronglazyload_images_toppersystem_send="";
                            if(document.getElementById('check_stronglazyload_images_toppersystem_send').checked == true){
								check_stronglazyload_images_toppersystem_send="1";	
                            }else{
						        check_stronglazyload_images_toppersystem_send="0";                    
                            }

                            var check_stronglazyload_video_toppersystem_send="";
                            if(document.getElementById('check_stronglazyload_video_toppersystem_send').checked == true){
								check_stronglazyload_video_toppersystem_send="1";	
                            }else{
						        check_stronglazyload_video_toppersystem_send="0";                    
                            }

                            var check_text_ia_toppersystem_send="";
                            if(document.getElementById('check_text_ia_toppersystem_send').checked == true){
								check_text_ia_toppersystem_send="1";	
                            }else{
						        check_text_ia_toppersystem_send="0";                    
                            }

							var url = ajax_components_toppersystem.url;
                            var params = "action=componentstoppersystem31ajax&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem_send').value) + "&language_toppersystem_send=" + encodeURIComponent(document.getElementById('language_toppersystem_send').value) + "&title_toppersystem_send=" + encodeURIComponent(document.getElementById('title_toppersystem_send').value) + "&check_title_toppersystem_send=" + document.getElementById('check_title_toppersystem_send').checked + "&description_toppersystem_send=" + encodeURIComponent(document.getElementById('description_toppersystem_send').value) + "&check_description_toppersystem_send=" + document.getElementById('check_description_toppersystem_send').checked + "&keywords_toppersystem_send=" + encodeURIComponent(document.getElementById('keywords_toppersystem_send').value) + "&check_keywords_toppersystem_send=" + document.getElementById('check_keywords_toppersystem_send').checked + "&keyword_toppersystem_send=" + encodeURIComponent(document.getElementById('keyword_toppersystem_send').value) + "&category_toppersystem_send=" + encodeURIComponent(document.getElementById('category_toppersystem_send').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem').value) + "&images_toppersystem_send=" + query_images + "&resolution_images_toppersystem_send=" + encodeURIComponent(document.getElementById('resolution_images_toppersystem_send').value) + "&stronglazyload_images_toppersystem_send=" + encodeURIComponent(check_stronglazyload_images_toppersystem_send) + "&stronglazyload_video_toppersystem_send=" + encodeURIComponent(check_stronglazyload_video_toppersystem_send) + "&text_ia_toppersystem_send=" + encodeURIComponent(check_text_ia_toppersystem_send) + "&destination_toppersystem=" + encodeURIComponent(document.getElementById('destination_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&check_privacy_toppersystem_send=" + document.getElementById('check_privacy_toppersystem_send').checked + "&reqcentral_toppersystem_send=" + encodeURIComponent(document.getElementById('send_reqcentral_toppersystem').value);
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
							document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                            document.getElementById('go_toppersystem_send').setAttribute('href', 'javascript:SendProcessToppersystem();');
							alert(txtts0);
						}
					}
				}	
			}
			
		}else{
			
		}
	}
}


function ChangeStateOptimizationToppersystem()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var val_wait=1000;
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_wait=1000;
            }else if(randInt == "1"){ 
               val_wait=1100;
            }else if(randInt == "2"){ 
               val_wait=1200;
            }else if(randInt == "3"){ 
               val_wait=1300;
            }else if(randInt == "4"){ 
               val_wait=1400;
            }else if(randInt == "5"){ 
               val_wait=1500;
            }else if(randInt == "6"){ 
               val_wait=1200;
            }else if(randInt == "7"){ 
               val_wait=1300;
            }else if(randInt == "8"){ 
               val_wait=1400;
            }else if(randInt == "9"){ 
               val_wait=800;
            }else if(randInt == "10"){ 
               val_wait=900;
            }else{   
               val_wait=1000;
            }

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
            var txtts0;
            if(hreflang_toppersystem == "it"){    
               txtts0="Ottimizzazione e compressione CSS in corso..";
            }else if(hreflang_toppersystem == "ar"){ 
               txtts0="جارٍ تحسين CSS والضغط..";
            }else if(hreflang_toppersystem == "de"){ 
               txtts0="CSS-Optimierung und -Komprimierung in Bearbeitung..";
            }else if(hreflang_toppersystem == "es"){ 
               txtts0="Optimización y compresión de CSS en progreso..";
            }else if(hreflang_toppersystem == "fr"){ 
               txtts0="Optimisation CSS et compression en cours..";
            }else if(hreflang_toppersystem == "hi"){ 
               txtts0="सीएसएस अनुकूलन और संपीड़न प्रगति पर है...";
            }else if(hreflang_toppersystem == "ja"){ 
               txtts0="CSS の最適化と圧縮が進行中です。";
            }else if(hreflang_toppersystem == "pl"){ 
               txtts0="Optymalizacja i kompresja CSS w toku..";
            }else if(hreflang_toppersystem == "pt"){ 
               txtts0="Otimização e compactação de CSS em andamento..";
            }else if(hreflang_toppersystem == "ru"){ 
               txtts0="Выполняется оптимизация и сжатие CSS..";
            }else if(hreflang_toppersystem == "zh"){ 
               txtts0="CSS 优化和压缩正在进行中..";
            }else if(hreflang_toppersystem == "he"){ 
               txtts0="אופטימיזציה ודחיסה של CSS בתהליך..";
            }else if(hreflang_toppersystem == "la"){ 
               txtts0="CSS optimization et compressio in progress..";
            }else{   
               txtts0="CSS optimization and compression in progress..";
            }
            document.getElementById('respons_txt').innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            setTimeout("ChangeStateOptimizationToppersystem2()", val_wait);
        }
	}
}
function ChangeStateOptimizationToppersystem2()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var val_wait=1000;
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_wait=1000;
            }else if(randInt == "1"){ 
               val_wait=1100;
            }else if(randInt == "2"){ 
               val_wait=1200;
            }else if(randInt == "3"){ 
               val_wait=1300;
            }else if(randInt == "4"){ 
               val_wait=1400;
            }else if(randInt == "5"){ 
               val_wait=1500;
            }else if(randInt == "6"){ 
               val_wait=1200;
            }else if(randInt == "7"){ 
               val_wait=1300;
            }else if(randInt == "8"){ 
               val_wait=1400;
            }else if(randInt == "9"){ 
               val_wait=800;
            }else if(randInt == "10"){ 
               val_wait=900;
            }else{   
               val_wait=1000;
            }

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
            var txtts0;
            if(hreflang_toppersystem == "it"){    
               txtts0="Separazione degli styles dalla pagina in corso..";
            }else if(hreflang_toppersystem == "ar"){ 
               txtts0="فصل الأنماط عن الصفحة الحالية..";
            }else if(hreflang_toppersystem == "de"){ 
               txtts0="Trennung der Stile von der aktuellen Seite..";
            }else if(hreflang_toppersystem == "es"){ 
               txtts0="Separación de estilos de la página actual..";
            }else if(hreflang_toppersystem == "fr"){ 
               txtts0="Séparation des styles de la page en cours..";
            }else if(hreflang_toppersystem == "hi"){ 
               txtts0="वर्तमान पृष्ठ से शैलियों को अलग करना..";
            }else if(hreflang_toppersystem == "ja"){ 
               txtts0="現在のページからスタイルを分離します。";
            }else if(hreflang_toppersystem == "pl"){ 
               txtts0="Oddzielenie stylów od bieżącej strony..";
            }else if(hreflang_toppersystem == "pt"){ 
               txtts0="Separação de estilos da página atual..";
            }else if(hreflang_toppersystem == "ru"){ 
               txtts0="Отделение стилей от текущей страницы..";
            }else if(hreflang_toppersystem == "zh"){ 
               txtts0="样式与当前页面的分离。";
            }else if(hreflang_toppersystem == "he"){ 
               txtts0="הפרדת סגנונות מהעמוד הנוכחי..";
            }else if(hreflang_toppersystem == "la"){ 
               txtts0="Styli separatio a pagina hodierna..";
            }else{   
               txtts0="Separation of styles from the current page..";
            }
            newcontrollertxt = document.getElementById('check_cssfiles_toppersystem').innerHTML.replace(/Separate/, '');
            if(document.getElementById('check_cssfiles_toppersystem').innerHTML != newcontrollertxt) {
                document.getElementById('respons_txt').innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
                setTimeout("ChangeStateOptimizationToppersystem3()", val_wait);
            }else{
                setTimeout("ChangeStateOptimizationToppersystem3()", 80);                
            }


        }
	}
}
function ChangeStateOptimizationToppersystem3()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var val_wait=1000;
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_wait=1000;
            }else if(randInt == "1"){ 
               val_wait=1100;
            }else if(randInt == "2"){ 
               val_wait=1200;
            }else if(randInt == "3"){ 
               val_wait=1300;
            }else if(randInt == "4"){ 
               val_wait=1400;
            }else if(randInt == "5"){ 
               val_wait=1500;
            }else if(randInt == "6"){ 
               val_wait=1200;
            }else if(randInt == "7"){ 
               val_wait=1300;
            }else if(randInt == "8"){ 
               val_wait=1400;
            }else if(randInt == "9"){ 
               val_wait=800;
            }else if(randInt == "10"){ 
               val_wait=900;
            }else{   
               val_wait=1000;
            }

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
            var txtts0;
            if(hreflang_toppersystem == "it"){    
               txtts0="Importazione CSS critici inline in corso..";
            }else if(hreflang_toppersystem == "ar"){ 
               txtts0="استيراد CSS الحرجة المضمنة..";
            }else if(hreflang_toppersystem == "de"){ 
               txtts0="Kritisches Inline-CSS wird importiert..";
            }else if(hreflang_toppersystem == "es"){ 
               txtts0="Importando CSS crítico en línea..";
            }else if(hreflang_toppersystem == "fr"){ 
               txtts0="Importation de CSS critiques en ligne..";
            }else if(hreflang_toppersystem == "hi"){ 
               txtts0="इनलाइन क्रिटिकल सीएसएस आयात किया जा रहा है..";
            }else if(hreflang_toppersystem == "ja"){ 
               txtts0="インラインクリティカル CSS をインポートしています。";
            }else if(hreflang_toppersystem == "pl"){ 
               txtts0="Importowanie wbudowanego krytycznego CSS..";
            }else if(hreflang_toppersystem == "pt"){ 
               txtts0="Importando CSS crítico in-line..";
            }else if(hreflang_toppersystem == "ru"){ 
               txtts0="Импорт встроенного критического CSS..";
            }else if(hreflang_toppersystem == "zh"){ 
               txtts0="导入内联关键 CSS..";
            }else if(hreflang_toppersystem == "he"){ 
               txtts0="ייבוא ​​CSS קריטי מוטבע..";
            }else if(hreflang_toppersystem == "la"){ 
               txtts0="Inlineatio inline critica CSS..";
            }else{   
               txtts0="Importing inline critical CSS..";
            }
            newcontrollertxt = document.getElementById('check_cssfiles_toppersystem').innerHTML.replace(/Inline/, '');
            if(document.getElementById('check_cssfiles_toppersystem').innerHTML != newcontrollertxt) {
                document.getElementById('respons_txt').innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
                setTimeout("ChangeStateOptimizationToppersystem4()", val_wait);
            }else{
                setTimeout("ChangeStateOptimizationToppersystem4()", 80);                
            }


        }
	}
}
function ChangeStateOptimizationToppersystem4()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var val_wait=1000;
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_wait=1000;
            }else if(randInt == "1"){ 
               val_wait=1100;
            }else if(randInt == "2"){ 
               val_wait=1200;
            }else if(randInt == "3"){ 
               val_wait=1300;
            }else if(randInt == "4"){ 
               val_wait=1400;
            }else if(randInt == "5"){ 
               val_wait=1500;
            }else if(randInt == "6"){ 
               val_wait=1200;
            }else if(randInt == "7"){ 
               val_wait=1300;
            }else if(randInt == "8"){ 
               val_wait=1400;
            }else if(randInt == "9"){ 
               val_wait=800;
            }else if(randInt == "10"){ 
               val_wait=900;
            }else{   
               val_wait=1000;
            }

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
            var txtts0;
            if(hreflang_toppersystem == "it"){    
               txtts0="Ottimizzazione e compressione risorse JavaScript in corso..";
            }else if(hreflang_toppersystem == "ar"){ 
               txtts0="تحسين وضغط موارد جافا سكريبت..";
            }else if(hreflang_toppersystem == "de"){ 
               txtts0="Optimierung und Komprimierung von JavaScript-Ressourcen..";
            }else if(hreflang_toppersystem == "es"){ 
               txtts0="Optimización y compresión de recursos JavaScript..";
            }else if(hreflang_toppersystem == "fr"){ 
               txtts0="Optimisation et compression des ressources JavaScript..";
            }else if(hreflang_toppersystem == "hi"){ 
               txtts0="जावास्क्रिप्ट संसाधनों को अनुकूलित और संपीड़ित करना...";
            }else if(hreflang_toppersystem == "ja"){ 
               txtts0="JavaScript リソースの最適化と圧縮。";
            }else if(hreflang_toppersystem == "pl"){ 
               txtts0="Optymalizacja i kompresja zasobów JavaScript..";
            }else if(hreflang_toppersystem == "pt"){ 
               txtts0="Otimizando e compactando recursos JavaScript..";
            }else if(hreflang_toppersystem == "ru"){ 
               txtts0="Оптимизация и сжатие ресурсов JavaScript..";
            }else if(hreflang_toppersystem == "zh"){ 
               txtts0="优化和压缩 JavaScript 资源..";
            }else if(hreflang_toppersystem == "he"){ 
               txtts0="אופטימיזציה ודחיסת משאבי JavaScript..";
            }else if(hreflang_toppersystem == "la"){ 
               txtts0="Optimising et comprimendi JavaScript opes..";
            }else{   
               txtts0="Optimizing and compressing JavaScript resources..";
            }
            document.getElementById('respons_txt').innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            setTimeout("ChangeStateOptimizationToppersystem5()", val_wait);
        }
	}
}
function ChangeStateOptimizationToppersystem5()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var val_wait=1000;
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_wait=1000;
            }else if(randInt == "1"){ 
               val_wait=1100;
            }else if(randInt == "2"){ 
               val_wait=1200;
            }else if(randInt == "3"){ 
               val_wait=1300;
            }else if(randInt == "4"){ 
               val_wait=1400;
            }else if(randInt == "5"){ 
               val_wait=1500;
            }else if(randInt == "6"){ 
               val_wait=1200;
            }else if(randInt == "7"){ 
               val_wait=1300;
            }else if(randInt == "8"){ 
               val_wait=1400;
            }else if(randInt == "9"){ 
               val_wait=800;
            }else if(randInt == "10"){ 
               val_wait=900;
            }else{   
               val_wait=1000;
            }

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
            var txtts0;
            if(hreflang_toppersystem == "it"){    
               txtts0="Ottimizzazione immagini e tag img in corso..";
            }else if(hreflang_toppersystem == "ar"){ 
               txtts0="جارٍ تحسين الصور وعلامات img..";
            }else if(hreflang_toppersystem == "de"){ 
               txtts0="Bilder und IMG-Tags werden gerade optimiert..";
            }else if(hreflang_toppersystem == "es"){ 
               txtts0="Optimización de imágenes y etiquetas img en progreso..";
            }else if(hreflang_toppersystem == "fr"){ 
               txtts0="Optimisation des images et des balises img en cours..";
            }else if(hreflang_toppersystem == "hi"){ 
               txtts0="छवियों और आईएमजी टैग का अनुकूलन प्रगति पर है..";
            }else if(hreflang_toppersystem == "ja"){ 
               txtts0="画像と img タグを最適化中です。";
            }else if(hreflang_toppersystem == "pl"){ 
               txtts0="Trwa optymalizacja obrazów i tagów img..";
            }else if(hreflang_toppersystem == "pt"){ 
               txtts0="Otimizando imagens e tags img em andamento..";
            }else if(hreflang_toppersystem == "ru"){ 
               txtts0="Выполняется оптимизация изображений и тегов img..";
            }else if(hreflang_toppersystem == "zh"){ 
               txtts0="正在优化图像和 img 标签。";
            }else if(hreflang_toppersystem == "he"){ 
               txtts0="מתבצע אופטימיזציה של תמונות ותגיות img..";
            }else if(hreflang_toppersystem == "la"){ 
               txtts0="Imagines optimizing et img tags in progress..";
            }else{   
               txtts0="Optimizing images and img tags in progress..";
            }
            if(document.querySelector('input[name="images_toppersystem_send"]:checked').value.trim() != "0"){ 
                document.getElementById('respons_txt').innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
                setTimeout("ChangeStateOptimizationToppersystem6()", val_wait);
            }else{
                setTimeout("ChangeStateOptimizationToppersystem6()", 80);
            }
        }
	}
}
function ChangeStateOptimizationToppersystem6()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var val_wait=1000;
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_wait=2000;
            }else if(randInt == "1"){ 
               val_wait=2100;
            }else if(randInt == "2"){ 
               val_wait=2200;
            }else if(randInt == "3"){ 
               val_wait=2300;
            }else if(randInt == "4"){ 
               val_wait=2400;
            }else if(randInt == "5"){ 
               val_wait=2500;
            }else if(randInt == "6"){ 
               val_wait=1800;
            }else if(randInt == "7"){ 
               val_wait=2300;
            }else if(randInt == "8"){ 
               val_wait=2400;
            }else if(randInt == "9"){ 
               val_wait=1800;
            }else if(randInt == "10"){ 
               val_wait=1900;
            }else{   
               val_wait=2000;
            }

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
            var txtts0;
            if(hreflang_toppersystem == "it"){    
               txtts0="Iniezione parola chiave principale in corso..";
            }else if(hreflang_toppersystem == "ar"){ 
               txtts0="إدخال الكلمة الرئيسية..";
            }else if(hreflang_toppersystem == "de"){ 
               txtts0="Hauptschlüsselwort wird eingefügt.";
            }else if(hreflang_toppersystem == "es"){ 
               txtts0="Inyectando palabra clave principal..";
            }else if(hreflang_toppersystem == "fr"){ 
               txtts0="Injection du mot-clé principal..";
            }else if(hreflang_toppersystem == "hi"){ 
               txtts0="मुख्य कीवर्ड इंजेक्ट किया जा रहा है..";
            }else if(hreflang_toppersystem == "ja"){ 
               txtts0="メインキーワードの挿入..";
            }else if(hreflang_toppersystem == "pl"){ 
               txtts0="Wstrzykiwanie głównego słowa kluczowego..";
            }else if(hreflang_toppersystem == "pt"){ 
               txtts0="Injetando palavra-chave principal..";
            }else if(hreflang_toppersystem == "ru"){ 
               txtts0="Ввод основного ключевого слова..";
            }else if(hreflang_toppersystem == "zh"){ 
               txtts0="注入主关键字..";
            }else if(hreflang_toppersystem == "he"){ 
               txtts0="מזריקים מילת מפתח ראשית..";
            }else if(hreflang_toppersystem == "la"){ 
               txtts0="Praecipua keyword injiciunt..";
            }else{   
               txtts0="Injecting main keyword..";
            }
            document.getElementById('respons_txt').innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            setTimeout("ChangeStateOptimizationToppersystem7()", val_wait);
        }
	}
}
function ChangeStateOptimizationToppersystem7()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var val_wait=1000;
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_wait=1000;
            }else if(randInt == "1"){ 
               val_wait=1100;
            }else if(randInt == "2"){ 
               val_wait=1200;
            }else if(randInt == "3"){ 
               val_wait=1300;
            }else if(randInt == "4"){ 
               val_wait=1400;
            }else if(randInt == "5"){ 
               val_wait=1500;
            }else if(randInt == "6"){ 
               val_wait=1200;
            }else if(randInt == "7"){ 
               val_wait=1300;
            }else if(randInt == "8"){ 
               val_wait=1400;
            }else if(randInt == "9"){ 
               val_wait=800;
            }else if(randInt == "10"){ 
               val_wait=900;
            }else{   
               val_wait=1000;
            }

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
            var txtts0;
            if(hreflang_toppersystem == "it"){    
               txtts0="Riscrittura meta-dati con ChatGPT in corso..";
            }else if(hreflang_toppersystem == "ar"){ 
               txtts0="إعادة كتابة البيانات الوصفية باستخدام ChatGPT قيد التقدم..";
            }else if(hreflang_toppersystem == "de"){ 
               txtts0="Metadaten werden mit ChatGPT neu geschrieben..";
            }else if(hreflang_toppersystem == "es"){ 
               txtts0="Reescribiendo metadatos con ChatGPT en progreso..";
            }else if(hreflang_toppersystem == "fr"){ 
               txtts0="Réécriture des métadonnées avec ChatGPT en cours..";
            }else if(hreflang_toppersystem == "hi"){ 
               txtts0="ChatGPT के साथ मेटा-डेटा को फिर से लिखने का कार्य प्रगति पर है..";
            }else if(hreflang_toppersystem == "ja"){ 
               txtts0="ChatGPT でメタデータを書き換え中です。";
            }else if(hreflang_toppersystem == "pl"){ 
               txtts0="Trwa przepisywanie metadanych za pomocą ChatGPT..";
            }else if(hreflang_toppersystem == "pt"){ 
               txtts0="Reescrevendo metadados com ChatGPT em andamento..";
            }else if(hreflang_toppersystem == "ru"){ 
               txtts0="Выполняется перезапись метаданных с помощью ChatGPT..";
            }else if(hreflang_toppersystem == "zh"){ 
               txtts0="正在使用 ChatGPT 重写元数据..";
            }else if(hreflang_toppersystem == "he"){ 
               txtts0="שכתוב מטא נתונים עם ChatGPT בתהליך..";
            }else if(hreflang_toppersystem == "la"){ 
               txtts0="Rescribo meta-data cum ChatGPT in progress..";
            }else{   
               txtts0="Rewriting meta-data with ChatGPT in progress..";
            }
            if((document.getElementById('view_intelligence_artificial_toppersystem').className == "")&&(document.getElementById('check_text_ia_toppersystem_send').checked == true)){ 
                document.getElementById('respons_txt').innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
                setTimeout("ChangeStateOptimizationToppersystem8()", val_wait);
            }else{
                setTimeout("ChangeStateOptimizationToppersystem8()", 80);
            }
        }
	}
}
function ChangeStateOptimizationToppersystem8()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            var val_wait=1000;
            var randInt = Math.floor(Math.random()*10);
            if(randInt == "0"){    
               val_wait=1000;
            }else if(randInt == "1"){ 
               val_wait=600;
            }else if(randInt == "2"){ 
               val_wait=700;
            }else if(randInt == "3"){ 
               val_wait=800;
            }else if(randInt == "4"){ 
               val_wait=900;
            }else if(randInt == "5"){ 
               val_wait=1100;
            }else if(randInt == "6"){ 
               val_wait=1200;
            }else if(randInt == "7"){ 
               val_wait=1300;
            }else if(randInt == "8"){ 
               val_wait=1400;
            }else if(randInt == "9"){ 
               val_wait=800;
            }else if(randInt == "10"){ 
               val_wait=900;
            }else{   
               val_wait=1000;
            }

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
            var txtts0;
            if(hreflang_toppersystem == "it"){    
               txtts0="Compressione pagina HTML in corso..";
            }else if(hreflang_toppersystem == "ar"){ 
               txtts0="ضغط صفحة HTML قيد التقدم..";
            }else if(hreflang_toppersystem == "de"){ 
               txtts0="HTML-Seitenkomprimierung läuft..";
            }else if(hreflang_toppersystem == "es"){ 
               txtts0="Compresión de página HTML en curso..";
            }else if(hreflang_toppersystem == "fr"){ 
               txtts0="Compression des pages HTML en cours..";
            }else if(hreflang_toppersystem == "hi"){ 
               txtts0="HTML पृष्ठ संपीड़न प्रगति पर है..";
            }else if(hreflang_toppersystem == "ja"){ 
               txtts0="HTML ページの圧縮が進行中です。";
            }else if(hreflang_toppersystem == "pl"){ 
               txtts0="Trwa kompresja strony HTML..";
            }else if(hreflang_toppersystem == "pt"){ 
               txtts0="Compressão de página HTML em andamento..";
            }else if(hreflang_toppersystem == "ru"){ 
               txtts0="Выполняется сжатие HTML-страницы..";
            }else if(hreflang_toppersystem == "zh"){ 
               txtts0="HTML 页面压缩正在进行中。";
            }else if(hreflang_toppersystem == "he"){ 
               txtts0="דחיסת דף HTML מתבצעת..";
            }else if(hreflang_toppersystem == "la"){ 
               txtts0="HTML pagina pressio in progress..";
            }else{   
               txtts0="HTML page compression in progress..";
            }
            document.getElementById('respons_txt').innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            setTimeout("ChangeStateOptimizationToppersystem9()", val_wait);
        }
	}
}
function ChangeStateOptimizationToppersystem9()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt')){
            document.getElementById('respons_txt').innerHTML = "&nbsp;";
            alert(document.getElementById('hiddenrespons_txt').value);
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
                txtts0="Avvio processo Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="بدء تشغيل نظام Topper";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Starten Sie das Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Start Topper System SEO";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Démarrer le Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="शुरू Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ja"){
                 txtts0="開始 Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Uruchom Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Iniciar o Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="Запустить Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="开始 Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "he"){
                txtts0="התחל Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Initium Topper System<sup> SEO</sup>";
            }else{
                txtts0="Start Topper System<sup> SEO</sup>";
            }

			var add = document.createElement("div");
			add.setAttribute("id", "button_toppersystem");
            add.setAttribute("class", "button_toppersystem");
			add.innerHTML="<a rel=\"nofollow\" href=\"javascript:StartProcessToppersystem();\">" + txtts0 + "</a>";	
			document.body.appendChild(add);
		}
	}
}
//-->