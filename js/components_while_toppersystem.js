/*! Topper System SEO | Author: Andrea Bagordo | (c) toppersytem.com | https://www.gnu.org/licenses/gpl-3.0.html */
<!--
function ControllerFunction() {	
	
	if((document.getElementById('nmaxcanonical_toppersystem'))&&(document.getElementById('nmaxcanonical_toppersystem'))){
		var result = true;	
	}else{
		var result = false;
	}
	
	return result;
}

function ControllerFunction2() {	
	
	if((document.getElementById('nmaxcanonical_toppersystem'))&&(document.getElementById('hreflang_toppersystem'))&&(document.getElementById('domain_toppersystem'))&&(document.getElementById('connect_req_toppersystem'))&&(document.getElementById('downloadx_req_toppersystem'))&&(document.getElementById('download_req_toppersystem'))&&(document.getElementById('events_req_toppersystem'))&&(document.getElementById('terms_condictions_req_toppersystem'))&&(document.getElementById('send_req_toppersystem'))){
		var result = true;	
	}else{
		var result = false;
	}
	
	return result;
}

function urldecode_url_toppersystem(url) {
  return decodeURIComponent(url.replace(/\+/g, ' '));
}

function myBrowserTypeTS() { 
    var browser="";
	if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 ) 
    {
        browser="Opera";
    }
    else if(navigator.userAgent.indexOf("Chrome") != -1 )
    {
		browser="Chrome";
    }
    else if(navigator.userAgent.indexOf("Safari") != -1)
    {
		browser="Safari";
    }
    else if(navigator.userAgent.indexOf("Firefox") != -1 ) 
    {
		 browser="Firefox";
    }
    else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true ))
    {
	  browser="IE";
    }  
    else 
    {
	   browser="unknown";
    }
	
	return browser;
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
        if(document.getElementById('language_toppersystem_send')){
            if((document.getElementById('language_toppersystem_send').className == "inputform_toppersystem border_red")||(document.getElementById('language_toppersystem_send').className == "inputform_toppersystem guidebox_checkbox_selected_ts")){		
                document.getElementById('language_toppersystem_send').className="inputform_toppersystem";
            }
            if(document.getElementById('idguideboxnow_toppersystem')){
                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if(document.getElementById('menu_events_all_toppersystem')){
                        setTimeout("Go3fromMenuGuideToppersystem()", 20);
                    }
                }
            }
	    }
    }
}

function ok_write_keyword()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('keyword_toppersystem_send')){		
            document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem";

            if(document.getElementById('idguideboxnow_toppersystem')){
                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if(document.getElementById('menu_events_all_toppersystem')){
                        setTimeout("Go4fromMenuGuideToppersystem()", 20);
                    }
                }
            }
        }
    }
}

function ok_write_privacy()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('check_privacy_toppersystem_send')){		
            document.getElementById('check_privacy_toppersystem_send').className="";

            if(document.getElementById('idguideboxnow_toppersystem')){
                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if(document.getElementById('menu_events_all_toppersystem')){
                        setTimeout("Go9fromMenuGuideToppersystem()", 20);
                    }
                }
            }
        }
	}
}

function ChangeCheckToppersystemAll()
{
    if(ControllerFunction2() == true){

if((document.getElementById('render_events_toppersystem'))&&(document.getElementById('menu_events_all_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('stxle_request_events_all_toppersystem'))){
		    
			if((document.getElementById('nmaxcanonical_toppersystem').value.trim() != "")&&(document.getElementById('nmaxcanonical_toppersystem').value.trim() != "0")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){ 

                var setvalor="";
	            if(document.getElementById('check_canonical_toppersystem_send_all').checked == false){
                    setvalor=0;
	            }else{        
                    setvalor=1;
	            }
                
                for(i=0;i<=document.getElementById('nmaxcanonical_toppersystem').value;i++){ 
                    if(document.getElementById("canonical_toppersystem" + i.toString())){
                        if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                            if(document.getElementById("check_canonical_toppersystem_send" + i.toString())){
								if(document.getElementById("box_render_list_toppersystem" + i.toString()).className == "yescheckts display_none_ts"){

								}else if(document.getElementById("box_render_list_toppersystem" + i.toString()).className == "nocheckts display_none_ts"){

								}else{
									document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked=setvalor;
								}
                            }
                        }
                    }
                }
                document.getElementById('check_canonical_toppersystem_send_allf').checked = setvalor;         
            }
        }
    }
}

function ChangeCheckToppersystemAllf()
{
    if(ControllerFunction2() == true){

if((document.getElementById('render_events_toppersystem'))&&(document.getElementById('menu_events_all_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('stxle_request_events_all_toppersystem'))){
		    
			if((document.getElementById('nmaxcanonical_toppersystem').value.trim() != "")&&(document.getElementById('nmaxcanonical_toppersystem').value.trim() != "0")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){ 

                var setvalor="";
	            if(document.getElementById('check_canonical_toppersystem_send_allf').checked == false){
                    setvalor=0;
	            }else{        
                    setvalor=1;
	            }
                
                for(i=0;i<=document.getElementById('nmaxcanonical_toppersystem').value;i++){ 
                    if(document.getElementById("canonical_toppersystem" + i.toString())){
                        if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                            if(document.getElementById("check_canonical_toppersystem_send" + i.toString())){
								if(document.getElementById("box_render_list_toppersystem" + i.toString()).className == "yescheckts display_none_ts"){

								}else if(document.getElementById("box_render_list_toppersystem" + i.toString()).className == "nocheckts display_none_ts"){

								}else{
									document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked=setvalor;
								}
                            }
                        }
                    }
                } 
                document.getElementById('check_canonical_toppersystem_send_all').checked = setvalor;
            }
        }
    }
}

function close_events_fast_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_toppersystem')){
            if(document.getElementById('idguideboxnow_toppersystem')){
                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == 1){
                    if(document.getElementById('guideboxts1')){
                        document.getElementById('guideboxts1').className="link_loader_toppersystem";                    
                        document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem";
                    }
                }
                document.getElementById('idguideboxnow_toppersystem').value="";
            }
			var screen = document.getElementById("render_events_toppersystem");
			document.body.removeChild(screen);
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

function close_terms_and_condictions_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_terms_and_condictions_toppersystem')){
			var screen = document.getElementById("render_terms_and_condictions_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function set_norescrive_toppersystem(){
	if(ControllerFunction2() == true){
		if(document.querySelector('input[name="check_norescrive_toppersystem_send"]:checked')) {
			if(document.querySelector('input[name="check_norescrive_toppersystem_send"]:checked').value.trim() == "true"){
				document.getElementById('true_norescrive_toppersystem').className="";
				document.getElementById('false_norescrive_toppersystem').className="display_none_ts";
			}else{
				document.getElementById('false_norescrive_toppersystem').className="";
				document.getElementById('true_norescrive_toppersystem').className="display_none_ts";
			}		
		}else{
			document.getElementById('true_norescrive_toppersystem').className="";
			document.getElementById('false_norescrive_toppersystem').className="display_none_ts";
		}
	}
}

function url_preview_toppersystem(url){
	var returnx="";
	if(url.trim() != ""){		
		var urlver = url.trim().replace('?', '');
		if(url.trim() != urlver.trim()){
			returnx=url + "&previewts=true";
		}else{
			returnx=url + "?previewts=true";
		}	
		urlver="";
		url="";
	}
	return returnx;
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

function start_cleansearch_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('destination_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('language_toppersystem_send'))&&(document.getElementById('nmaxcanonical_toppersystem'))&&(document.getElementById('search_url_toppersystem'))){

            if((document.getElementById('nmaxcanonical_toppersystem').value.trim() != "")&&(document.getElementById('nmaxcanonical_toppersystem').value.trim() != "0")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				document.getElementById('search_url_toppersystem').value="";
				document.getElementById('box_cleansearch_toppersystem').className="inlinerelative_toppersystem display_none_ts";
				setTimeout("start_search_url_toppersystem()", 20);				
			}
		}
	}
}

function start_search_url_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('destination_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('language_toppersystem_send'))&&(document.getElementById('nmaxcanonical_toppersystem'))&&(document.getElementById('search_url_toppersystem'))){

            if((document.getElementById('nmaxcanonical_toppersystem').value.trim() != "")&&(document.getElementById('nmaxcanonical_toppersystem').value.trim() != "0")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				document.getElementById("noresultfoundsearchts").className="pxdding12 bgcxlxrffffff display_none_ts";
				setTimeout("start_search_url_toppersystem2()", 20);				
			}
		}
	}
}

function start_search_url_toppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('destination_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('language_toppersystem_send'))&&(document.getElementById('nmaxcanonical_toppersystem'))&&(document.getElementById('search_url_toppersystem'))){

            if((document.getElementById('nmaxcanonical_toppersystem').value.trim() != "")&&(document.getElementById('nmaxcanonical_toppersystem').value.trim() != "0")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){ 

				var n_pass_ok=0;
                for(i=0;i<=document.getElementById('nmaxcanonical_toppersystem').value;i++){ 
                    if(document.getElementById("canonical_toppersystem" + i.toString())){
                        if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                            if(document.getElementById("check_canonical_toppersystem_send" + i.toString())){
                                valore=document.getElementById('search_url_toppersystem').value.trim();
								
								valore_ver = document.getElementById('search_url_toppersystem').value.trim().replace(/ /, '');
								
                                canonical_val_decode_toppersystem=urldecode_url_toppersystem(document.getElementById("canonical_toppersystem" + i.toString()).value.trim());
								ny=0;
								if(valore != valore_ver){									
									arr_valore=valore.split(" ");
									for(a=0;a<=arr_valore.length;a++){ 
										if(arr_valore[a]){
											if(arr_valore[a].trim() != ""){
												newtxtarray = canonical_val_decode_toppersystem.replace(arr_valore[a].trim(), '');
												if(canonical_val_decode_toppersystem != newtxtarray){
													ny=ny + 1;
												}
											}
										}
									}									
								}
								
								newtxt = canonical_val_decode_toppersystem.replace(valore, '');
								
								if((canonical_val_decode_toppersystem != newtxt) || (document.getElementById('search_url_toppersystem').value.trim() == "") || (ny >= 1)) {
									if(n_pass_ok % 2 == 0) {
										bg="bgcxlxrffffff";        
									} else {
										bg="bgcxlxrf0f0f0";      
									}
									if(document.getElementById("box_render_list_toppersystem" + i.toString()).className == "yescheckts display_none_ts"){
										document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked=1;
									}else if(document.getElementById("box_render_list_toppersystem" + i.toString()).className == "nocheckts display_none_ts"){
										document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked=0;
									}else{
										
									}
									
									document.getElementById("box_render_list_toppersystem" + i.toString()).className="pxdding12 " + bg;
									n_pass_ok=n_pass_ok + 1;
								}else{								
									if(document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked == false){
										savecheched="nocheckts";
									}else{
										document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked=0;
										savecheched="yescheckts";
									}
									
									if(document.getElementById("box_render_list_toppersystem" + i.toString()).className == "yescheckts display_none_ts"){
										savecheched="yescheckts";
									}else if(document.getElementById("box_render_list_toppersystem" + i.toString()).className == "nocheckts display_none_ts"){
										savecheched="nocheckts";
									}else{
										
									}									
									
									document.getElementById("box_render_list_toppersystem" + i.toString()).className=savecheched + " display_none_ts";
								}
								
								
                            }
                        }
                    }
                }
				if(n_pass_ok == 0){
					document.getElementById("noresultfoundsearchts").className="pxdding12 bgcxlxrffffff";
				}
		    }else{

		    }
	    }
    }
}

function VerifyCleanButton_toppersystem()
{
	if(ControllerFunction2() == true){
		if(document.getElementById('search_url_toppersystem')){		
			if(document.getElementById('search_url_toppersystem').value != ""){
				if(document.getElementById('box_cleansearch_toppersystem').className == "inlinerelative_toppersystem display_none_ts"){		
					document.getElementById('box_cleansearch_toppersystem').className="inlinerelative_toppersystem";			
				}
			}else{
				if(document.getElementById('box_cleansearch_toppersystem').className == "inlinerelative_toppersystem"){		
					document.getElementById('box_cleansearch_toppersystem').className="inlinerelative_toppersystem display_none_ts";			
				}
			}
		}
	}
}

function clean_page_toppersystem(n) {
	if(n){
		if(ControllerFunction2() == true){
			setTimeout("clean_page_toppersystem2('" + n.toString() + "')", 80);
		}
	}
}

function clean_page_toppersystem2(n) {
	if(n){
		if(ControllerFunction2() == true){
			if((document.getElementById('authcode_toppersystem' + n.toString()))&&(document.getElementById('canonical_toppersystem' + n.toString()))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('hreflang_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))){
				
				if((document.getElementById('authcode_toppersystem' + n.toString()).value.trim() != "")&&(document.getElementById('canonical_toppersystem' + n.toString()).value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
					var http = new XMLHttpRequest();

					http.onreadystatechange = function() {					
						if(http.readyState == 4 && http.status == 200) {
							if(http.responseText.trim() == "ok"){							
								document.getElementById("point_render_list_toppersystem" + n.toString()).className = "status_no_point_all_ts";
								document.getElementById("box_remove_toppersystem_page" + n.toString()).className = "display_none_ts";
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
                    var params = "action=componentstoppersystem9ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem' + n.toString()).value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem' + n.toString()).value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
					http.open("POST", url, true);
					http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					http.send(params);			
				}
				
			}else{
				
			}
		}
	}
}

function request_clean_page_toppersystem(n) {
	if(n){
	   	
	   if(ControllerFunction2() == true){
			if((document.getElementById('authcode_toppersystem' + n.toString()))&&(document.getElementById('canonical_toppersystem' + n.toString()))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))){
				
			if((document.getElementById('authcode_toppersystem' + n.toString()).value.trim() != "")&&(document.getElementById('canonical_toppersystem' + n.toString()).value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
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

				var r = confirm(txtts0 + "\n" + urldecode_url_toppersystem(document.getElementById('canonical_toppersystem' + n.toString()).value));
				if (r == true) {    
					setTimeout("clean_page_toppersystem('" + n.toString() + "')", 2);
				} 
			 }
		  }
	   }
   }
}

function close_events_deferts_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_deferts_toppersystem')){
			var screen = document.getElementById("render_events_deferts_toppersystem");
			document.body.removeChild(screen);
            setTimeout("request_load_status_defer_toppersystem()", 20);
		}
	}
}

function save_events_deferts_toppersystem()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_deferts_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_deferts_toppersystem").className="";
		setTimeout("save_events_deferts_toppersystem2()", 2);
	}
}

function save_events_deferts_toppersystem2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_deferts_toppersystem'))&&(document.getElementById('exclusionlink_defer_toppersystem'))&&(document.getElementById('sel_delayjavascript_toppersystem_send'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if(document.querySelector('input[name="pos_sel_deferts_toppersystem_send"]:checked')){  
					check_pos_deferts=document.querySelector('input[name="pos_sel_deferts_toppersystem_send"]:checked').value.trim();
					
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
                                        document.getElementById("block_save_details_deferts_toppersystem").className="";
                                        document.getElementById("block_save_details_loading_deferts_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
											alert(decode_html_toppersystem(http.responseText.trim()));
                                            setTimeout("close_events_deferts_toppersystem()", 400);
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
							    var params = "action=componentstoppersystem24ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&save_pos_deferts_toppersystem=" + check_pos_deferts + "&exclude_toppersystem=" + (document.getElementById('exclusionlink_defer_toppersystem').value) + "&delayjavascript_toppersystem_send=" + document.getElementById('sel_delayjavascript_toppersystem_send').checked;
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
                                document.getElementById("block_save_details_deferts_toppersystem").className="";
                                document.getElementById("block_save_details_loading_deferts_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_deferts_toppersystem')){
									//var screen = document.getElementById("render_events_deferts_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}					
				}
			}

		}else{

		}
		
	}

}

function request_events_deferts_setting_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_deferts_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_deferts_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim()).replace(/<textareatoppersystem/, '<textarea').replace(/<\/textareatoppersystem/, '<\/textarea');

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_deferts_toppersystem')){
                                                        if(document.getElementById('render_events_all_toppersystem')){                                                        
                                                            setTimeout("GoInt26fromMenuGuideToppersystem()", 20);
                                                        }else{
                                                            setTimeout("Go6fromMenuGuideToppersystem()", 20);
                                                        }
                                                    }
                                                }
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
							var params = "action=componentstoppersystem16ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_deferts_toppersystem')){
								var screen = document.getElementById("render_events_deferts_toppersystem");
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

function events_deferts_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Ottimizzazione risorse Javascript - Settaggio";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="تحسين موارد جافا سكريبت - جلسة";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Javascript-Ressourcenoptimierung - Einstellung";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Optimización de recursos Javascript - Ajuste";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Optimisation des ressources Javascript - Réglage";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="जावास्क्रिप्ट संसाधन अनुकूलन - स्थापना";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="Javascript リソースの最適化 - 設定";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Optymalizacja zasobów JavaScript - Ustawienie";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Otimização de recursos Javascript - Contexto";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Оптимизация ресурсов Javascript - Параметр";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="Javascript资源优化 - 环境";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="אופטימיזציה של משאבי Javascript - הגדרה";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Javascript resource ipsum - Occasum";
            }else{
                txtts0="Close";
                txtts1="Javascript resource optimization - Setting";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_deferts_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_deferts_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_deferts_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_deferts_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_exceptions_deferts()
{
	if(ControllerFunction2() == true){
				if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('menu_events_all_toppersystem'))){
   
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_deferts_toppersystem()", 20);		
			}

		}else{

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
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('loadstatusdefer_req_toppersystem'))&&(document.getElementById('domain_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('loadstatusdefer_req_toppersystem').value.trim() != "")&&(document.getElementById('domain_toppersystem').value.trim() != "")){

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
                                                if(document.getElementById('check_defer_management_toppersystem')){
                                                    document.getElementById('check_defer_management_toppersystem').innerHTML= "Defer model"; 
                                                }
                                            }else if(textfile == "no"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Preload model";
                                                }
                                                if(document.getElementById('check_defer_management_toppersystem')){
                                                    document.getElementById('check_defer_management_toppersystem').innerHTML= "Preload model"; 
                                                }
                                            }else if(textfile == "noset"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Automatic model";
                                                }
                                                if(document.getElementById('check_defer_management_toppersystem')){
                                                    document.getElementById('check_defer_management_toppersystem').innerHTML= "Automatic model"; 
                                                }
                                            }else if(textfile == "okd"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Defer model &amp; Delay"; 
                                                }
                                                if(document.getElementById('check_defer_management_toppersystem')){
                                                    document.getElementById('check_defer_management_toppersystem').innerHTML= "Defer model &amp; Delay"; 
                                                }
                                            }else if(textfile == "nod"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Preload model &amp; Delay";
                                                }
                                                if(document.getElementById('check_defer_management_toppersystem')){
                                                    document.getElementById('check_defer_management_toppersystem').innerHTML= "Preload model &amp; Delay"; 
                                                }
                                            }else if(textfile == "nosetd"){
                                                if(document.getElementById('check_defer_toppersystem')){
                                                    document.getElementById('check_defer_toppersystem').innerHTML= "Automatic model &amp; Delay";
                                                }
                                                if(document.getElementById('check_defer_management_toppersystem')){
                                                    document.getElementById('check_defer_management_toppersystem').innerHTML= "Automatic model &amp; Delay"; 
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
							var params = "action=componentstoppersystem7ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&domain_toppersystem=" + encodeURIComponent(document.getElementById('domain_toppersystem').value);
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

function close_events_cssfilests_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_deferts_toppersystem')){
			var screen = document.getElementById("render_events_deferts_toppersystem");
			document.body.removeChild(screen);
            setTimeout("request_load_status_cssfilests_toppersystem()", 20);
		}
	}
}

function save_events_cssfilests_toppersystem()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_cssfilests_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_cssfilests_toppersystem").className="";	
		setTimeout("save_events_cssfilests_toppersystem2()", 2);
	}
}

function save_events_cssfilests_toppersystem2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_deferts_toppersystem'))&&(document.getElementById('exclusionlink_defer_toppersystem'))&&(document.getElementById('sel_csscriticalinline_toppersystem_send'))&&(document.getElementById('sel_cssforstyle_toppersystem_send'))){
					
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){				
					
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
                                    document.getElementById("block_save_details_cssfilests_toppersystem").className="";
                                    document.getElementById("block_save_details_loading_cssfilests_toppersystem").className="display_none_ts";
									if(http.responseText.trim() != ""){
										alert(decode_html_toppersystem(http.responseText.trim()));
                                        setTimeout("close_events_cssfilests_toppersystem()", 400);
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
							var params = "action=componentstoppersystem37ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&exclude_toppersystem=" + (document.getElementById('exclusionlink_defer_toppersystem').value) + "&csscriticalinline_toppersystem_send=" + document.getElementById('sel_csscriticalinline_toppersystem_send').checked + "&cssforstyle_toppersystem_send=" + document.getElementById('sel_cssforstyle_toppersystem_send').checked;
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
                            document.getElementById("block_save_details_cssfilests_toppersystem").className="";
                            document.getElementById("block_save_details_loading_cssfilests_toppersystem").className="display_none_ts";
							if(document.getElementById('render_events_deferts_toppersystem')){
								//var screen = document.getElementById("render_events_deferts_toppersystem");
								//document.body.removeChild(screen);
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

function request_events_cssfilests_setting_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_deferts_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_deferts_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim()).replace(/<textareatoppersystem/, '<textarea').replace(/<\/textareatoppersystem/, '<\/textarea');

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_deferts_toppersystem')){
                                                        if(document.getElementById('render_events_all_toppersystem')){                                                        
                                                            setTimeout("GoInt27fromMenuGuideToppersystem()", 20);
                                                        }else{
                                                            setTimeout("Go7fromMenuGuideToppersystem()", 20);
                                                        }
                                                    }
                                                }
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
							var params = "action=componentstoppersystem36ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_deferts_toppersystem')){
								var screen = document.getElementById("render_events_deferts_toppersystem");
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

function events_cssfilests_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Ottimizzazione risorse CSS - Settaggio";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="تحسين مCSSافا سكريبت - جلسة";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="CSS-Ressourcenoptimierung - Einstellung";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Optimización de recursos CSS - Ajuste";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Optimisation des ressources CSS - Réglage";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="जावास्क्रिप्ट संसाधन अनुकूलन - स्थापना";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="CSS リソースの最適化 - 設定";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Optymalizacja zasobów CSS - Ustawienie";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Otimização de recursos CSS - Contexto";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Оптимизация ресурсов CSS - Параметр";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="CSS资源优化 - 环境";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="אופטימיזציה של משאבי CSS - הגדרה";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="CSS resource ipsum - Occasum";
            }else{
                txtts0="Close";
                txtts1="CSS resource optimization - Setting";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_deferts_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_cssfilests_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_deferts_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_cssfilests_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_exceptions_cssfilests()
{
	if(ControllerFunction2() == true){
				if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('menu_events_all_toppersystem'))){
   
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_cssfilests_toppersystem()", 20);		
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
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('loadstatusdefer_req_toppersystem'))&&(document.getElementById('domain_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('loadstatusdefer_req_toppersystem').value.trim() != "")&&(document.getElementById('domain_toppersystem').value.trim() != "")){

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
                                                if(document.getElementById('check_cssfiles_management_toppersystem')){
                                                    document.getElementById('check_cssfiles_management_toppersystem').innerHTML= "Esclusion set"; 
                                                }
												if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Esclusion set"; 
                                                }												
                                            }else if(textfile == "no"){
                                                if(document.getElementById('check_cssfiles_management_toppersystem')){
                                                    document.getElementById('check_cssfiles_management_toppersystem').innerHTML= "Not esclusion set"; 
                                                }
                                                if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Not esclusion set"; 
                                                }												
                                            }else if(textfile == "okinline"){						
                                                if(document.getElementById('check_cssfiles_management_toppersystem')){
                                                    document.getElementById('check_cssfiles_management_toppersystem').innerHTML= "Inline &amp; Esclusion set"; 
                                                }
												if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Inline &amp; Esclusion set"; 
                                                }												
                                            }else if(textfile == "noinline"){
                                                if(document.getElementById('check_cssfiles_management_toppersystem')){
                                                    document.getElementById('check_cssfiles_management_toppersystem').innerHTML= "Inline &amp; Not esclusion set"; 
                                                }
                                                if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Inline &amp; Not esclusion set"; 
                                                }												
                                            }else if(textfile == "okstlyeexsternalok"){						
                                                if(document.getElementById('check_cssfiles_management_toppersystem')){
                                                    document.getElementById('check_cssfiles_management_toppersystem').innerHTML= "Separate styles &amp; Esclusion set"; 
                                                }
												if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Separate styles &amp; Esclusion set"; 
                                                }												
                                            }else if(textfile == "nostlyeexsternalok"){
                                                if(document.getElementById('check_cssfiles_management_toppersystem')){
                                                    document.getElementById('check_cssfiles_management_toppersystem').innerHTML= "Separate styles &amp; Not esclusion set"; 
                                                }
                                                if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Separate styles &amp; Not esclusion set"; 
                                                }												
                                            }else if(textfile == "okinlinestlyeexsternalok"){						
                                                if(document.getElementById('check_cssfiles_management_toppersystem')){
                                                    document.getElementById('check_cssfiles_management_toppersystem').innerHTML= "Separate styles, Inline &amp; Esclusion set"; 
                                                }
												if(document.getElementById('check_cssfiles_toppersystem')){
                                                    document.getElementById('check_cssfiles_toppersystem').innerHTML= "Separate styles, Inline &amp; Esclusion set"; 
                                                }												
                                            }else if(textfile == "noinlinestlyeexsternalok"){
                                                if(document.getElementById('check_cssfiles_management_toppersystem')){
                                                    document.getElementById('check_cssfiles_management_toppersystem').innerHTML= "Separate styles, Inline &amp; Not esclusion set"; 
                                                }
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
							var params = "action=componentstoppersystem38ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&domain_toppersystem=" + encodeURIComponent(document.getElementById('domain_toppersystem').value);
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

function close_events_clean_cachets_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_clean_cachets_toppersystem')){
			var screen = document.getElementById("render_events_clean_cachets_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function save_events_clean_cachets_toppersystem()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_clean_cachets_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_clean_cachets_toppersystem").className="";
		setTimeout("save_events_clean_cachets_toppersystem2()", 2);
	}
}

function save_events_clean_cachets_toppersystem2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_clean_cachets_toppersystem'))&&(document.getElementById('clean_cachets_service_save1'))&&(document.getElementById('clean_cachets_service_save2'))&&(document.getElementById('clean_cachets_service_save3'))&&(document.getElementById('clean_cachets_service_save4'))&&(document.getElementById('clean_cachets_service_save5'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				if((document.getElementById('clean_cachets_service_save1').checked == true)||(document.getElementById('clean_cachets_service_save2').checked == true)||(document.getElementById('clean_cachets_service_save3').checked == true)||(document.getElementById('clean_cachets_service_save4').checked == true)||(document.getElementById('clean_cachets_service_save5').checked == true)){					
					
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
                                        document.getElementById("block_save_details_clean_cachets_toppersystem").className="";
                                        document.getElementById("block_save_details_loading_clean_cachets_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
											alert(decode_html_toppersystem(http.responseText.trim()));
                                            var select_redirect="";
                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    select_redirect="guide";
                                                }
                                            }
                                            if(select_redirect == "guide"){
                                                window.location.assign(document.getElementById('redirectpage_toppersystem_register').value.trim() + "&guide_ts=go&idgde_ts=27");
                                            }else{
                                                window.location.assign(document.getElementById('redirectpage_toppersystem_register').value.trim());
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
							    var params = "action=componentstoppersystem40ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&clean_cachets_service_save1_toppersystem_send=" + document.getElementById('clean_cachets_service_save1').checked + "&clean_cachets_service_save2_toppersystem_send=" + document.getElementById('clean_cachets_service_save2').checked + "&clean_cachets_service_save3_toppersystem_send=" + document.getElementById('clean_cachets_service_save3').checked + "&clean_cachets_service_save4_toppersystem_send=" + document.getElementById('clean_cachets_service_save4').checked + "&clean_cachets_service_save5_toppersystem_send=" + document.getElementById('clean_cachets_service_save5').checked;
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
                                document.getElementById("block_save_details_clean_cachets_toppersystem").className="";
                                document.getElementById("block_save_details_loading_clean_cachets_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_clean_cachets_toppersystem')){
									//var screen = document.getElementById("render_events_clean_cachets_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}					
				}else{
                    var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
                    var txtts0;
                    if(hreflang_toppersystem == "it"){    
                       txtts0="Per avviare il processo selezionare almeno un campo !";
                    }else if(hreflang_toppersystem == "ar"){ 
                       txtts0="لبدء العملية حدد حقل واحد على الأقل!";
                    }else if(hreflang_toppersystem == "de"){ 
                       txtts0="Um den Vorgang zu starten, wählen Sie mindestens ein Feld aus!";
                    }else if(hreflang_toppersystem == "es"){ 
                       txtts0="¡Para iniciar el proceso seleccione al menos un campo!";
                    }else if(hreflang_toppersystem == "fr"){ 
                       txtts0="Pour démarrer le processus sélectionnez au moins un champ !";
                    }else if(hreflang_toppersystem == "hi"){ 
                       txtts0="प्रक्रिया शुरू करने के लिए कम से कम एक फ़ील्ड चुनें!";
                    }else if(hreflang_toppersystem == "ja"){ 
                       txtts0="プロセスを開始するには、少なくとも 1 つのフィールドを選択してください!";
                    }else if(hreflang_toppersystem == "pl"){ 
                       txtts0="Aby rozpocząć proces, wybierz co najmniej jedno pole!";
                    }else if(hreflang_toppersystem == "pt"){ 
                       txtts0="Para iniciar o processo selecione pelo menos um campo!";
                    }else if(hreflang_toppersystem == "ru"){ 
                       txtts0="Для запуска процесса выберите хотя бы одно поле!";
                    }else if(hreflang_toppersystem == "zh"){ 
                       txtts0="要启动该过程，请至少选择一个字段！";
                    }else if(hreflang_toppersystem == "he"){ 
                       txtts0="כדי להתחיל את התהליך בחר לפחות שדה אחד!";
                    }else if(hreflang_toppersystem == "la"){ 
                       txtts0="Incipere processum eligere saltem unum campum !";
                    }else{   
                       txtts0="To start the process select at least one field !";
                    }
                    document.getElementById("block_save_details_clean_cachets_toppersystem").className="";
                    document.getElementById("block_save_details_loading_clean_cachets_toppersystem").className="display_none_ts";
                    alert(txtts0);
		        }
			}

		}else{

		}
		
	}

}

function request_events_clean_cachets_setting_toppersystem()
{

	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_clean_cachets_toppersystem'))){		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_clean_cachets_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim()).replace(/<textareatoppersystem/, '<textarea').replace(/<\/textareatoppersystem/, '<\/textarea');

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_clean_cachets_toppersystem')){
                                                        setTimeout("GoInt29fromMenuGuideToppersystem()", 20);
                                                    }
                                                }
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
							var params = "action=componentstoppersystem39ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_clean_cachets_toppersystem')){
								var screen = document.getElementById("render_events_clean_cachets_toppersystem");
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

function events_clean_cachets_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Puluzia cache delle ottimizzazioni";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="مسح ذاكرة التخزين المؤقت للتحسينات";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Optimierungscache leeren";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Borrar caché de optimizaciones";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Effacer le cache des optimisations";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="अनुकूलन कैश साफ़ करें";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="最適化キャッシュをクリア";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Wyczyść pamięć podręczną optymalizacji";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Limpar cache de otimizações";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Очистить кеш оптимизации";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="清除优化缓存";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="נקה מטמון אופטימיזציות";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Clar optimizations cache";
            }else{
                txtts0="Close";
                txtts1="Clear optimizations cache";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_clean_cachets_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_clean_cachets_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_clean_cachets_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_clean_cachets_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_clean_cachets()
{
	if(ControllerFunction2() == true){
				if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('menu_events_all_toppersystem'))){
   
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_clean_cachets_toppersystem()", 20);		
			}

		}else{

		}
	}
}

function close_events_block_stage_websitets_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_block_stage_websitets_toppersystem')){
			var screen = document.getElementById("render_events_block_stage_websitets_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function save_events_block_stage_websitets_toppersystem()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_block_stage_websitets_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_block_stage_websitets_toppersystem").className="";
		setTimeout("save_events_block_stage_websitets_toppersystem2()", 2);
	}
}

function save_events_block_stage_websitets_toppersystem2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_block_stage_websitets_toppersystem'))&&(document.getElementById('block_stage_websitets_service_save'))&&(document.getElementById('block_stage_websitets_service_save_old'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				if((document.getElementById('block_stage_websitets_service_save').value.trim() != "")&&(document.getElementById('block_stage_websitets_service_save_old').value.trim() != "")){					
					
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
                                        document.getElementById("block_save_details_block_stage_websitets_toppersystem").className="";
                                        document.getElementById("block_save_details_loading_block_stage_websitets_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
											alert(decode_html_toppersystem(http.responseText.trim()));
                                            window.location.assign(document.getElementById('redirectpage_toppersystem_register').value.trim());
                                            var select_redirect="";
                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    select_redirect="guide";
                                                }
                                            }
                                            if(select_redirect == "guide"){
                                                window.location.assign(document.getElementById('redirectpage_toppersystem_register').value.trim() + "&guide_ts=go&idgde_ts=28");
                                            }else{
                                                window.location.assign(document.getElementById('redirectpage_toppersystem_register').value.trim());
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
							    var params = "action=componentstoppersystem42ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&block_stage_websitets_service_save_toppersystem_send=" + document.getElementById('block_stage_websitets_service_save').value.trim() + "&block_stage_websitets_service_old_save_toppersystem_send=" + document.getElementById('block_stage_websitets_service_save_old').value.trim();
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
                                document.getElementById("block_save_details_block_stage_websitets_toppersystem").className="";
                                document.getElementById("block_save_details_loading_block_stage_websitets_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_block_stage_websitets_toppersystem')){
									//var screen = document.getElementById("render_events_block_stage_websitets_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}					
				}
			}

		}else{

		}
		
	}

}

function request_events_block_stage_websitets_setting_toppersystem()
{

	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_block_stage_websitets_toppersystem'))){		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_block_stage_websitets_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim()).replace(/<textareatoppersystem/, '<textarea').replace(/<\/textareatoppersystem/, '<\/textarea');

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_block_stage_websitets_toppersystem')){
                                                        setTimeout("GoInt30fromMenuGuideToppersystem()", 20);
                                                    }
                                                }
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
							var params = "action=componentstoppersystem41ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_block_stage_websitets_toppersystem')){
								var screen = document.getElementById("render_events_block_stage_websitets_toppersystem");
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

function events_block_stage_websitets_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Indirizzo versione di stage e di produzione del sito";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="عنوان إصدار الموقع والإنتاج المسرحي";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Stage- und Produktionsversionsadresse der Site";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Dirección de versión de etapa y producción del sitio";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Adresse de la version d'étape et de production du site";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="साइट का चरण और उत्पादन संस्करण पता";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="サイトのステージング バージョンと製品バージョンのアドレス";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Adres wersji scenicznej i produkcyjnej strony";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Endereço da versão de palco e produção do site";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Адрес рабочей и рабочей версии сайта";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="站点的阶段和生产版本地址";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="כתובת גרסת הבמה והפקה של האתר";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Stage and production version address of the site";
            }else{
                txtts0="Close";
                txtts1="Stage and production version address of the site";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_block_stage_websitets_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_block_stage_websitets_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_block_stage_websitets_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_block_stage_websitets_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_block_stage_websitets()
{
	if(ControllerFunction2() == true){
				if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('menu_events_all_toppersystem'))){
   
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_block_stage_websitets_toppersystem()", 20);		
			}

		}else{

		}
	}
}

function close_events_intelligence_artificial_ts_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_intelligence_artificial_ts_toppersystem')){
			var screen = document.getElementById("render_events_intelligence_artificial_ts_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function save_events_intelligence_artificial_ts_toppersystem()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_intelligence_artificial_ts_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_intelligence_artificial_ts_toppersystem").className="";
		setTimeout("save_events_intelligence_artificial_ts_toppersystem2()", 80);
	}
}

function save_events_intelligence_artificial_ts_toppersystem2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_intelligence_artificial_ts_toppersystem'))&&(document.getElementById('intelligence_artificial_ts_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){									
					
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
                                        document.getElementById("block_save_details_intelligence_artificial_ts_toppersystem").className="";
                                        document.getElementById("block_save_details_loading_intelligence_artificial_ts_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
                                            var newtxt = http.responseText.trim().replace('[empty]', '');                                
										    if(http.responseText.trim() != newtxt) {
                                                document.getElementById("view_intelligence_artificial_toppersystem").className="display_none_ts";
                                            }else{
                                                document.getElementById("view_intelligence_artificial_toppersystem").className="";
                                            }
											alert(decode_html_toppersystem(newtxt.trim()));
                                            setTimeout("close_events_intelligence_artificial_ts_toppersystem()", 80);
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
							    var params = "action=componentstoppersystem53ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&intelligence_artificial_ts_service_save_toppersystem_send=" + document.getElementById('intelligence_artificial_ts_service_save').value.trim();
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
                                document.getElementById("block_save_details_intelligence_artificial_ts_toppersystem").className="";
                                document.getElementById("block_save_details_loading_intelligence_artificial_ts_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_intelligence_artificial_ts_toppersystem')){
									//var screen = document.getElementById("render_events_intelligence_artificial_ts_toppersystem");
									//document.body.removeChild(screen);
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

function request_events_intelligence_artificial_ts_setting_toppersystem()
{

	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_intelligence_artificial_ts_toppersystem'))){		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_intelligence_artificial_ts_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim()).replace(/<textareatoppersystem/, '<textarea').replace(/<\/textareatoppersystem/, '<\/textarea');

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_intelligence_artificial_ts_toppersystem')){
                                                        setTimeout("GoInt32fromMenuGuideToppersystem()", 20);
                                                    }
                                                }
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
							var params = "action=componentstoppersystem52ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_intelligence_artificial_ts_toppersystem')){
								var screen = document.getElementById("render_events_intelligence_artificial_ts_toppersystem");
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

function events_intelligence_artificial_ts_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Connetti Topper System SEO all'Intelligenza Artificiale";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="قم بتوصيل Topper System SEO بالذكاء الاصطناعي";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Verbinden Sie Topper System SEO mit künstlicher Intelligenz";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Conecte Topper System SEO a la inteligencia artificial";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Connectez Topper System SEO à l’intelligence artificielle";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="Topper System SEO को आर्टिफिशियल इंटेलिजेंस से कनेक्ट करें";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="Topper System SEOを人工知能に接続する";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Połącz Topper System SEO ze sztuczną inteligencją";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Conecte Topper System SEO à Inteligência Artificial";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Подключите Topper System SEO к искусственному интеллекту";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="将 Topper System SEO 连接到人工智能";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="חבר את Topper System SEO לבינה מלאכותית";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Connect Topper System SEO to Artificial Intelligence";
            }else{
                txtts0="Close";
                txtts1="Connect Topper System SEO to Artificial Intelligence";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_intelligence_artificial_ts_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_intelligence_artificial_ts_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_intelligence_artificial_ts_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_intelligence_artificial_ts_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_intelligence_artificial_ts()
{
	if(ControllerFunction2() == true){
				if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('menu_events_all_toppersystem'))){
   
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_intelligence_artificial_ts_toppersystem()", 20);		
			}

		}else{

		}
	}
}

function delete_download_file_csv_toppersystem()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('uploadurlbase_toppersystem')){
            if(document.getElementById('uploadurlbase_toppersystem').value != ""){
                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
                var txtts0;
                if(hreflang_toppersystem == "it"){    
                   txtts0="Attendere ancora qualche istante la conclusione del processo...";
                }else if(hreflang_toppersystem == "ar"){ 
                   txtts0="انتظر بضع دقائق أخرى حتى تنتهي العملية...";
                }else if(hreflang_toppersystem == "de"){ 
                   txtts0="Warten Sie noch einen Moment, bis der Vorgang abgeschlossen ist ...";
                }else if(hreflang_toppersystem == "es"){ 
                   txtts0="Espere unos momentos más para que concluya el proceso...";
                }else if(hreflang_toppersystem == "fr"){ 
                   txtts0="Attendez encore quelques instants pour que le processus se termine...";
                }else if(hreflang_toppersystem == "hi"){ 
                   txtts0="प्रक्रिया समाप्त होने के लिए कुछ क्षण और प्रतीक्षा करें...";
                }else if(hreflang_toppersystem == "ja"){ 
                   txtts0="プロセスが完了するまでしばらくお待ちください...";
                }else if(hreflang_toppersystem == "pl"){ 
                   txtts0="Poczekaj jeszcze kilka chwil, aż proces się zakończy...";
                }else if(hreflang_toppersystem == "pt"){ 
                   txtts0="Aguarde mais alguns instantes para que o processo seja concluído...";
                }else if(hreflang_toppersystem == "ru"){ 
                   txtts0="Подождите еще несколько минут, пока процесс завершится...";
                }else if(hreflang_toppersystem == "zh"){ 
                   txtts0="再等一会儿，该过程就会结束......";
                }else if(hreflang_toppersystem == "he"){ 
                   txtts0="המתן עוד כמה רגעים עד שהתהליך יסתיים...";
                }else if(hreflang_toppersystem == "la"){ 
                   txtts0="Exspecta aliquot momenta pro processu ad concludendum...";
                }else{   
                   txtts0="Wait a few more moments for the process to conclude...";
                }
                document.getElementById('status_download_file_csv_toppersystem').innerHTML=txtts0;
		        setTimeout("delete_download_file_csv_toppersystem2()", 80);
            }
        }
	}
}

function delete_download_file_csv_toppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_block_import_export_csvts_toppersystem'))&&(document.getElementById('name_fileexport_csv_toppersystem'))){		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('name_fileexport_csv_toppersystem').value.trim() != "")){

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
                                  document.getElementById('name_fileexport_csv_toppersystem').value="";
                                  document.getElementById('status_download_file_csv_toppersystem').innerHTML="&nbsp;";
								}else{
									if(http.readyState == 1) {						

									}else if(http.readyState == 2) {

									}else if(http.readyState == 3) {
									
									}else{
							
									}				        
								}
							}
							
							var url = ajax_components_toppersystem.url;
							var params = "action=componentstoppersystem51ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&name_fileexport_csv_toppersystem=" + encodeURIComponent(document.getElementById('name_fileexport_csv_toppersystem').value);
							http.open("POST", url, true);
							http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							http.send(params);
						}else{
                            document.getElementById('status_download_file_csv_toppersystem').innerHTML="&nbsp;";
                            document.getElementById('name_fileexport_csv_toppersystem').value="";	
						}
					}
				}			
			}

		}else{

		}
	}
}

function downloadFile_toppersystem(){
    if(ControllerFunction2() == true){
        if((document.getElementById('name_fileexport_csv_toppersystem'))&&(document.getElementById('uploadurlbase_toppersystem'))){
            if((document.getElementById('name_fileexport_csv_toppersystem').value != "")&&(document.getElementById('uploadurlbase_toppersystem').value != "")){
                var fileName=document.getElementById('name_fileexport_csv_toppersystem').value;
                var url=document.getElementById('uploadurlbase_toppersystem').value + "/toppersystem/nosql/download/" + fileName;
                fetch(url, { method: 'get', mode: 'no-cors', referrerPolicy: 'no-referrer' })
                .then(res => res.blob())
                .then(res => {
                      const aElement = document.createElement('a');
                      aElement.setAttribute('download', fileName);
                      const href = URL.createObjectURL(res);
                      aElement.href = href;
                      // aElement.setAttribute('href', href);
                      aElement.setAttribute('target', '_blank');
                      aElement.click();
                      URL.revokeObjectURL(href);
                })
                .then(res => {
                      setTimeout("delete_download_file_csv_toppersystem()", 80);
                });
            }
        }
    }
}

function start_download_file_csv_toppersystem()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('uploadurlbase_toppersystem')){
            if(document.getElementById('uploadurlbase_toppersystem').value != ""){
                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
                var txtts0;
                if(hreflang_toppersystem == "it"){    
                   txtts0="Avvio alla generazione del file CSV...";
                }else if(hreflang_toppersystem == "ar"){ 
                   txtts0="جارٍ البدء في إنشاء ملف CSV...";
                }else if(hreflang_toppersystem == "de"){ 
                   txtts0="Die Generierung der CSV-Datei beginnt...";
                }else if(hreflang_toppersystem == "es"){ 
                   txtts0="Empezando a generar el archivo CSV...";
                }else if(hreflang_toppersystem == "fr"){ 
                   txtts0="Début de la génération du fichier CSV...";
                }else if(hreflang_toppersystem == "hi"){ 
                   txtts0="CSV फ़ाइल जनरेट करना प्रारंभ हो रहा है...";
                }else if(hreflang_toppersystem == "ja"){ 
                   txtts0="CSV ファイルの生成を開始しています...";
                }else if(hreflang_toppersystem == "pl"){ 
                   txtts0="Rozpoczynam generowanie pliku CSV...";
                }else if(hreflang_toppersystem == "pt"){ 
                   txtts0="Iniciando a geração do arquivo CSV...";
                }else if(hreflang_toppersystem == "ru"){ 
                   txtts0="Начинаем генерировать CSV-файл...";
                }else if(hreflang_toppersystem == "zh"){ 
                   txtts0="开始生成 CSV 文件...";
                }else if(hreflang_toppersystem == "he"){ 
                   txtts0="מתחיל ליצור את קובץ ה-CSV...";
                }else if(hreflang_toppersystem == "la"){ 
                   txtts0="Satus generare CSV lima...";
                }else{   
                   txtts0="Starting to generate the CSV file...";
                }
                document.getElementById('status_download_file_csv_toppersystem').innerHTML=txtts0;
		        setTimeout("start_download_file_csv_toppersystem2()", 80);
            }
        }
	}
}

function start_download_file_csv_toppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_block_import_export_csvts_toppersystem'))&&(document.getElementById('name_fileexport_csv_toppersystem'))){		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('name_fileexport_csv_toppersystem').value.trim() == "")){

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
                                        newtxt = http.responseText.trim().replace('[startdownloadnow]', '');                                
										if(http.responseText.trim() != newtxt) {
                                            document.getElementById('name_fileexport_csv_toppersystem').value=newtxt;
							                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
							                var txtts0;
							                if(hreflang_toppersystem == "it"){    
							                   txtts0="è pronto per essere scaricato... Attendi il completamento del download!";
							                }else if(hreflang_toppersystem == "ar"){ 
							                   txtts0="جاهز للتنزيل... انتظر حتى يكتمل التنزيل!";
							                }else if(hreflang_toppersystem == "de"){ 
							                   txtts0="ist zum Download bereit... Warten Sie, bis der Download abgeschlossen ist!";
							                }else if(hreflang_toppersystem == "es"){ 
							                   txtts0="está listo para descargar... ¡Espera a que se complete la descarga!";
							                }else if(hreflang_toppersystem == "fr"){ 
							                   txtts0="est prêt à être téléchargé... Attendez la fin du téléchargement !";
							                }else if(hreflang_toppersystem == "hi"){ 
							                   txtts0="डाउनलोड करने के लिए तैयार है... डाउनलोड पूरा होने तक प्रतीक्षा करें!";
							                }else if(hreflang_toppersystem == "ja"){ 
							                   txtts0="ダウンロードの準備ができました...ダウンロードが完了するまで待ちます。";
							                }else if(hreflang_toppersystem == "pl"){ 
							                   txtts0="jest gotowy do pobrania... Poczekaj na zakończenie pobierania!";
							                }else if(hreflang_toppersystem == "pt"){ 
							                   txtts0="está pronto para download... Aguarde a conclusão do download!";
							                }else if(hreflang_toppersystem == "ru"){ 
							                   txtts0="готов к загрузке... Дождитесь завершения загрузки!";
							                }else if(hreflang_toppersystem == "zh"){ 
							                   txtts0="已准备好下载...等待下载完成！";
							                }else if(hreflang_toppersystem == "he"){ 
							                   txtts0="מוכן להורדה... המתן לסיום ההורדה!";
							                }else if(hreflang_toppersystem == "la"){ 
							                   txtts0="paratus est ad download... Exspecta download ad perficiendum!";
							                }else{   
							                   txtts0="is ready to download... Wait for the download to complete!";
							                } 
                                            document.getElementById('status_download_file_csv_toppersystem').innerHTML=newtxt + " " + txtts0;

                                            setTimeout("downloadFile_toppersystem()", 2000);
                                        }else{
                                            alert(http.responseText.trim());
                                        }
                                        document.getElementById('status_download_file_csv_toppersystem').innerHTML="&nbsp;";
                                        document.getElementById('name_file_csv_toppersystem').value="";	
									}else{
							            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
							            var txtts0;
							            if(hreflang_toppersystem == "it"){    
							               txtts0="Qualcosa è andato storto! Ti invitiamo a riprovare.";
							            }else if(hreflang_toppersystem == "ar"){ 
							               txtts0="هناك خطأ ما! حاول مرة اخرى.";
							            }else if(hreflang_toppersystem == "de"){ 
							               txtts0="Etwas ist schief gelaufen! Bitte versuche es erneut.";
							            }else if(hreflang_toppersystem == "es"){ 
							               txtts0="¡Algo salió mal! Inténtalo de nuevo.";
							            }else if(hreflang_toppersystem == "fr"){ 
							               txtts0="Quelque chose s'est mal passé ! Veuillez réessayer.";
							            }else if(hreflang_toppersystem == "hi"){ 
							               txtts0="कुछ गलत हो गया! कृपया पुन: प्रयास करें।";
							            }else if(hreflang_toppersystem == "ja"){ 
							               txtts0="何か問題が発生しました! もう一度試してください。";
							            }else if(hreflang_toppersystem == "pl"){ 
							               txtts0="Coś poszło nie tak! Proszę spróbuj ponownie.";
							            }else if(hreflang_toppersystem == "pt"){ 
							               txtts0="Algo deu errado! Por favor, tente novamente.";
							            }else if(hreflang_toppersystem == "ru"){ 
							               txtts0="Что-то пошло не так! Пожалуйста, попробуйте еще раз.";
							            }else if(hreflang_toppersystem == "zh"){ 
							               txtts0="出了些问题！ 请再试一次。";
							            }else if(hreflang_toppersystem == "he"){ 
							               txtts0="משהו השתבש! בבקשה נסה שוב.";
							            }else if(hreflang_toppersystem == "la"){ 
							               txtts0="Aliquid abiit iniuriam! Quaero, iterum conare.";
							            }else{   
							               txtts0="Something went wrong! Please try again.";
							            }                    
                                        alert(txtts0);
                                        document.getElementById('status_download_file_csv_toppersystem').innerHTML="&nbsp;";
                                        document.getElementById('name_fileexport_csv_toppersystem').value="";	
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
							var params = "action=componentstoppersystem50ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
                            document.getElementById('status_download_file_csv_toppersystem').innerHTML="&nbsp;";
                            document.getElementById('name_fileexport_csv_toppersystem').value="";	
						}
					}
				}			
			}

		}else{

		}
	}
}

function save_upload_file_csv_toppersystem()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('file_csv_toppersystem')){
            if(document.getElementById('file_csv_toppersystem').value != ""){
                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
                var txtts0;
                if(hreflang_toppersystem == "it"){    
                   txtts0="Avvio upload file...";
                }else if(hreflang_toppersystem == "ar"){ 
                   txtts0="جارٍ بدء تحميل الملف...";
                }else if(hreflang_toppersystem == "de"){ 
                   txtts0="Datei-Upload wird gestartet...";
                }else if(hreflang_toppersystem == "es"){ 
                   txtts0="Iniciando carga de archivos...";
                }else if(hreflang_toppersystem == "fr"){ 
                   txtts0="Démarrage du téléchargement du fichier...";
                }else if(hreflang_toppersystem == "hi"){ 
                   txtts0="फ़ाइल अपलोड प्रारंभ हो रहा है...";
                }else if(hreflang_toppersystem == "ja"){ 
                   txtts0="ファイルのアップロードを開始しています...";
                }else if(hreflang_toppersystem == "pl"){ 
                   txtts0="Rozpoczynam przesyłanie pliku...";
                }else if(hreflang_toppersystem == "pt"){ 
                   txtts0="Iniciando upload do arquivo...";
                }else if(hreflang_toppersystem == "ru"){ 
                   txtts0="Начинаю загрузку файла...";
                }else if(hreflang_toppersystem == "zh"){ 
                   txtts0="开始文件上传...";
                }else if(hreflang_toppersystem == "he"){ 
                   txtts0="מתחיל להעלות קובץ...";
                }else if(hreflang_toppersystem == "la"){ 
                   txtts0="Satus fasciculi onerarii...";
                }else{   
                   txtts0="Starting file upload...";
                }
                document.getElementById('status_upload_file_csv_toppersystem').innerHTML=txtts0;
		        setTimeout("save_upload_file_csv_toppersystem2()", 80);
            }
        }
	}
}

function save_upload_file_csv_toppersystem2()
{

	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_block_import_export_csvts_toppersystem'))&&(document.getElementById('file_import_csv_form_toppersystem'))&&(document.getElementById('file_csv_toppersystem'))){		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

				var xhr = new XMLHttpRequest();
                xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
				xhr.send();
				xhr.addEventListener("readystatechange", processRequest, false);
				function processRequest(e) {
					if (xhr.readyState == 4) {
						if (xhr.status >= 200 && xhr.status < 304) {

							var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
							var txtts0;
                            var txtts1;
							if(hreflang_toppersystem == "it"){    
							   txtts0="Sono ammessi solo file CSV";
                               txtts1="La dimensione massima del file è di 2 MB";
							}else if(hreflang_toppersystem == "ar"){ 
							   txtts0="يُسمح فقط بملفات CSV";
                               txtts1="الحد الأقصى لحجم الملف هو 2 ميغابايت";
							}else if(hreflang_toppersystem == "de"){ 
							   txtts0="Es sind nur CSV-Dateien zulässig";
                               txtts1="Die maximale Dateigröße beträgt 2 MB";
							}else if(hreflang_toppersystem == "es"){ 
							   txtts0="Sólo se permiten archivos CSV";
                               txtts1="El tamaño máximo de archivo es 2 MB.";
							}else if(hreflang_toppersystem == "fr"){ 
							   txtts0="Seuls les fichiers CSV sont autorisés";
                               txtts1="La taille maximale du fichier est de 2 Mo";
							}else if(hreflang_toppersystem == "hi"){ 
							   txtts0="केवल CSV फ़ाइलों की अनुमति है";
                               txtts1="अधिकतम फ़ाइल आकार 2 एमबी है";
							}else if(hreflang_toppersystem == "ja"){ 
							   txtts0="CSV ファイルのみが許可されます";
                               txtts1="最大ファイルサイズは2MBです";
							}else if(hreflang_toppersystem == "pl"){ 
							   txtts0="Dozwolone są tylko pliki CSV";
                               txtts1="Maksymalny rozmiar pliku to 2 MB";
							}else if(hreflang_toppersystem == "pt"){ 
							   txtts0="Somente arquivos CSV são permitidos";
                               txtts1="O tamanho máximo do arquivo é 2 MB";
							}else if(hreflang_toppersystem == "ru"){ 
							   txtts0="Разрешены только файлы CSV.";
                               txtts1="Максимальный размер файла 2 МБ.";
							}else if(hreflang_toppersystem == "zh"){ 
							   txtts0="仅允许 CSV 文件";
                               txtts1="最大文件大小为 2 MB";
							}else if(hreflang_toppersystem == "he"){ 
							   txtts0="רק קובצי CSV מותרים";
                               txtts1="גודל הקובץ המרבי הוא 2 MB";
							}else if(hreflang_toppersystem == "la"){ 
							   txtts0="Tantum CSV files sunt concessa";
                               txtts1="Maxime lima amplitudo est II MB";
							}else{   
							   txtts0="Only CSV files are allowed";
                               txtts1="The maximum file size is 2 MB";
							}

                            var form = document.getElementById('file_import_csv_form_toppersystem');
                            var fileSelect = document.getElementById('file_csv_toppersystem');
                            
                            var files = fileSelect.files;
                            var formData = new FormData();
                            var file = files[0];
 
                            if(file.name != ""){
                                if (!file.type.match('csv.*')) {
                                    alert(txtts0);
                                    document.getElementById('status_upload_file_csv_toppersystem').innerHTML="&nbsp;";
                                    return;
                                }
                                if (file.size >= 2000000 ) {
                                    alert(txtts1);
                                    document.getElementById('status_upload_file_csv_toppersystem').innerHTML="&nbsp;";
                                    return;
                                }

                                formData.append('file_csv_toppersystem', file, file.name);

                                var http = new XMLHttpRequest();
                                http.onreadystatechange = function() {					
	                                if(http.readyState == 4 && http.status == 200) {
		                                if(http.responseText.trim() != "") {

							                var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
							                var txtts2;
                                            var txtts3;
							                if(hreflang_toppersystem == "it"){    
							                   txtts2="Il file è stato importato con successo. Attendere ancora qualche istante il completamento del processo!";
                                               txtts3="Upload non andato a buon fine. Riprova!";
							                }else if(hreflang_toppersystem == "ar"){ 
							                   txtts2="تم استيراد الملف بنجاح. انتظر بضع دقائق أخرى حتى تكتمل العملية!";
                                               txtts3="التحميل فشل. حاول ثانية!";
							                }else if(hreflang_toppersystem == "de"){ 
							                   txtts2="Die Datei wurde erfolgreich importiert. Warten Sie noch einen Moment, bis der Vorgang abgeschlossen ist!";
                                               txtts3="Upload fehlgeschlagen. Versuchen Sie es erneut!";
							                }else if(hreflang_toppersystem == "es"){ 
							                   txtts2="El archivo se importó correctamente. ¡Espera unos momentos más para que se complete el proceso!";
                                               txtts3="Subida fallida. ¡Intentar otra vez!";
							                }else if(hreflang_toppersystem == "fr"){ 
							                   txtts2="Le fichier a été importé avec succès. Attendez encore quelques instants pour que le processus se termine!";
                                               txtts3="Le téléchargement a échoué. Essayer à nouveau!";
							                }else if(hreflang_toppersystem == "hi"){ 
							                   txtts2="फ़ाइल सफलतापूर्वक आयात की गई. प्रक्रिया पूरी होने के लिए कुछ क्षण और प्रतीक्षा करें!";
                                               txtts3="अपलोड विफल। पुनः प्रयास करें!";
							                }else if(hreflang_toppersystem == "ja"){ 
							                   txtts2="ファイルは正常にインポートされました。 プロセスが完了するまでしばらくお待ちください。";
                                               txtts3="アップロードに失敗しました。 もう一度やり直してください！";
							                }else if(hreflang_toppersystem == "pl"){ 
							                   txtts2="Plik został pomyślnie zaimportowany. Poczekaj jeszcze kilka chwil na zakończenie procesu!";
                                               txtts3="Przesyłanie nie powiodło się. Spróbuj ponownie!";
							                }else if(hreflang_toppersystem == "pt"){ 
							                   txtts2="O arquivo foi importado com sucesso. Aguarde mais alguns instantes para que o processo seja concluído!";
                                               txtts3="Falha no upload. Tente novamente!";
							                }else if(hreflang_toppersystem == "ru"){ 
							                   txtts2="Файл был успешно импортирован. Подождите еще несколько минут, пока процесс завершится!";
                                               txtts3="Загрузка не удалась. Попробуйте еще раз!";
							                }else if(hreflang_toppersystem == "zh"){ 
							                   txtts2="文件已成功导入。 再等一会儿，该过程就会完成！";
                                               txtts3="上传失败。 再试一次！";
							                }else if(hreflang_toppersystem == "he"){ 
							                   txtts2="הקובץ יובא בהצלחה. המתן עוד כמה רגעים עד שהתהליך יסתיים!";
                                               txtts3="העלאה נכשלה. נסה שוב!";
							                }else if(hreflang_toppersystem == "la"){ 
							                   txtts2="Tabella feliciter importata est. Exspecta aliquot momenta pro processu ad perficiendum!";
                                               txtts3="Upload defuit. Iterum conare!";
							                }else{   
							                   txtts2="The file was imported successfully. Wait a few more moments for the process to complete!";
                                               txtts3="Upload failed. Try again!";
							                }

                                            const myArray = http.responseText.trim().split("||||");                                
			                                if(myArray[0] == "ok") {
                                                document.getElementById('name_file_csv_toppersystem').value=myArray[1];
                                                document.getElementById('status_upload_file_csv_toppersystem').innerHTML=txtts2;
                                                setTimeout("save_upload_file_csv_toppersystem3()", 80);                                            
			                                }else{
                                                alert(txtts3);
                                                document.getElementById('status_upload_file_csv_toppersystem').innerHTML="&nbsp;";
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

		                        var url = ajax_components_toppersystem.url + '?action=componentstoppersystem48ajax&_nonce=' + ajax_components_toppersystem.nonce;
                                http.open('POST', url, true);
                                http.send(formData);
                            }else{
                                document.getElementById('status_upload_file_csv_toppersystem').innerHTML="";
                            }
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
                            document.getElementById('status_upload_file_csv_toppersystem').innerHTML="&nbsp;";
						}
					}
				}
            }				        
        }
    }
}

function save_upload_file_csv_toppersystem3()
{
	if(ControllerFunction2() == true){
		setTimeout("save_upload_file_csv_toppersystem4()", 80);
	}
}

function save_upload_file_csv_toppersystem4()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_block_import_export_csvts_toppersystem'))&&(document.getElementById('name_file_csv_toppersystem'))){		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('name_file_csv_toppersystem').value.trim() != "")){

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

                                    if(http.responseText.trim() == "repeatciclets") {
                                        setTimeout("save_upload_file_csv_toppersystem3()", 2000);
									}else if(http.responseText.trim() != "") {                       
                                        //risposta finale
                                        newtxt = http.responseText.trim().replace('[optimizenow]', '');                                
										if(http.responseText.trim() != newtxt) {
                                            alert(newtxt);
                                            var select_redirect="";
                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    select_redirect="guide";
                                                }
                                            }
                                            if(select_redirect == "guide"){
                                                window.location.assign(document.getElementById('redirectpage_toppersystem_register').value.trim() + "&restorets=ok&guide_ts=go");
                                            }else{
                                                window.location.assign(document.getElementById('redirectpage_toppersystem_register').value.trim() + "&restorets=ok");
                                            } 

                                        }else{
                                            alert(http.responseText.trim());
                                        }
                                        document.getElementById('status_upload_file_csv_toppersystem').innerHTML="&nbsp;";
                                        document.getElementById('name_file_csv_toppersystem').value="";	
									}else{
							            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
							            var txtts0;
							            if(hreflang_toppersystem == "it"){    
							               txtts0="Qualcosa è andato storto! Ti invitiamo a riprovare.";
							            }else if(hreflang_toppersystem == "ar"){ 
							               txtts0="هناك خطأ ما! حاول مرة اخرى.";
							            }else if(hreflang_toppersystem == "de"){ 
							               txtts0="Etwas ist schief gelaufen! Bitte versuche es erneut.";
							            }else if(hreflang_toppersystem == "es"){ 
							               txtts0="¡Algo salió mal! Inténtalo de nuevo.";
							            }else if(hreflang_toppersystem == "fr"){ 
							               txtts0="Quelque chose s'est mal passé ! Veuillez réessayer.";
							            }else if(hreflang_toppersystem == "hi"){ 
							               txtts0="कुछ गलत हो गया! कृपया पुन: प्रयास करें।";
							            }else if(hreflang_toppersystem == "ja"){ 
							               txtts0="何か問題が発生しました! もう一度試してください。";
							            }else if(hreflang_toppersystem == "pl"){ 
							               txtts0="Coś poszło nie tak! Proszę spróbuj ponownie.";
							            }else if(hreflang_toppersystem == "pt"){ 
							               txtts0="Algo deu errado! Por favor, tente novamente.";
							            }else if(hreflang_toppersystem == "ru"){ 
							               txtts0="Что-то пошло не так! Пожалуйста, попробуйте еще раз.";
							            }else if(hreflang_toppersystem == "zh"){ 
							               txtts0="出了些问题！ 请再试一次。";
							            }else if(hreflang_toppersystem == "he"){ 
							               txtts0="משהו השתבש! בבקשה נסה שוב.";
							            }else if(hreflang_toppersystem == "la"){ 
							               txtts0="Aliquid abiit iniuriam! Quaero, iterum conare.";
							            }else{   
							               txtts0="Something went wrong! Please try again.";
							            }                      
                                        alert(txtts0);
                                        document.getElementById('status_upload_file_csv_toppersystem').innerHTML="&nbsp;";
                                        document.getElementById('name_file_csv_toppersystem').value="";	
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
							var params = "action=componentstoppersystem49ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&name_file_csv_toppersystem=" + encodeURIComponent(document.getElementById('name_file_csv_toppersystem').value);
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
                            document.getElementById('status_upload_file_csv_toppersystem').innerHTML="&nbsp;";
                            document.getElementById('name_file_csv_toppersystem').value="";	
						}
					}
				}			
			}

		}else{

		}
	}
}

function request_events_block_import_export_csvts_setting_toppersystem()
{

	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_block_import_export_csvts_toppersystem'))){		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_block_import_export_csvts_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim()).replace(/<textareatoppersystem/, '<textarea').replace(/<\/textareatoppersystem/, '<\/textarea');

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_block_import_export_csvts_toppersystem')){
                                                        setTimeout("GoInt31fromMenuGuideToppersystem()", 20);
                                                    }
                                                }
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
							var params = "action=componentstoppersystem47ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_block_import_export_csvts_toppersystem')){
								var screen = document.getElementById("render_events_block_import_export_csvts_toppersystem");
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

function close_events_block_import_export_csvts_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_block_import_export_csvts_toppersystem')){
			var screen = document.getElementById("render_events_block_import_export_csvts_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function close_box_listlanguage_importexportcsv_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_block_import_export_csvts_toppersystem')){
            document.getElementById("box_listlanguage_importexportcsv_toppersystem").className = "display_none_ts";
            document.getElementById("box_nolistlanguage_importexportcsv_toppersystem").className = "";
            document.getElementById("id_close_render_events_block_import_export_csvts_toppersystem").setAttribute("href","javascript:close_events_block_import_export_csvts_toppersystem();");
		}
	}
}

function open_box_listlanguage_importexportcsv_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_block_import_export_csvts_toppersystem')){
            document.getElementById("box_nolistlanguage_importexportcsv_toppersystem").className = "display_none_ts";
			document.getElementById("box_listlanguage_importexportcsv_toppersystem").className = "";
            document.getElementById("id_close_render_events_block_import_export_csvts_toppersystem").setAttribute("href","javascript:close_box_listlanguage_importexportcsv_toppersystem();");
		}
	}
}

function events_block_import_export_csvts_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Importa o esporta lista CSV";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="استيراد أو تصدير قائمة CSV";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="CSV-Liste importieren oder exportieren";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Importar o exportar lista CSV";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Importer ou exporter une liste CSV";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="CSV सूची आयात या निर्यात करें";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="CSVリストのインポートまたはエクスポート";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Importuj lub eksportuj listę CSV";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Importar ou exportar lista CSV";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Импортировать или экспортировать список CSV";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="导入或导出 CSV 列表";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="ייבוא ​​או ייצא רשימת CSV";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Importo vel export CSV list";
            }else{
                txtts0="Close";
                txtts1="Import or export CSV list";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_block_import_export_csvts_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a id=\"id_close_render_events_block_import_export_csvts_toppersystem\" class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_block_import_export_csvts_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_block_import_export_csvts_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_block_import_export_csvts_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_import_export_csvts()
{
	if(ControllerFunction2() == true){
				if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('menu_events_all_toppersystem'))){
   
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_block_import_export_csvts_toppersystem()", 20);		
			}

		}else{

		}
	}
}

function request_load_status_pages_toppersystem()
{
	if(ControllerFunction2() == true){	
		setTimeout("request_load_status_pages_toppersystem2()", 80);
	}
}

function request_load_status_pages_toppersystem2()
{
	if(ControllerFunction2() == true){
		domain_toppersystem
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('loadstatuspages_req_toppersystem'))&&(document.getElementById('loadstatuspages_req_toppersystem'))&&(document.getElementById('domain_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('loadstatuspages_req_toppersystem').value.trim() != "")&&(document.getElementById('domain_toppersystem').value.trim() != "")){

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
											
											var arr=textfile.split("\n");
											var n_arr = arr.length;											
											var status_page_ts = "";
											var class_point_write = "";
											
											for(i=0;i<=document.getElementById('nmaxcanonical_toppersystem').value;i++){ 
												if(document.getElementById("canonical_toppersystem" + i.toString())){
													if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){

														status_page_ts = "";
														for(v=0;v<=n_arr;v++){
															if(status_page_ts == ""){
																if(arr[v]){																
																	if(arr[v].trim() != ""){
																		if(arr[v].trim().split("||||")[0] == document.getElementById("canonical_toppersystem" + i.toString()).value.trim()){
																			if(arr[v].trim().split("||||")[1]){
																				if(arr[v].trim().split("||||")[1] != ""){
																					status_page_ts = arr[v].trim().split("||||")[1];
																				}																			
																			}
																		}																		
																	}
																}
															}
														}										

														if(status_page_ts.trim() != ""){
															if(status_page_ts.trim() == "0"){
																class_point_write="status_no_point_all_ts";
															}else if(status_page_ts.trim() == "1"){
																class_point_write="status_ok_point_all_ts";																
																document.getElementById("box_remove_toppersystem_page" + i.toString()).className = "";
															}else if(status_page_ts.trim() == "2"){
																class_point_write="status_ok2_point_all_ts";
																document.getElementById("box_remove_toppersystem_page" + i.toString()).className = "";
															}else{
																class_point_write="";
															}
															if(class_point_write != ""){
																document.getElementById("point_render_list_toppersystem" + i.toString()).className = class_point_write;
															}else{
																document.getElementById("point_render_list_toppersystem" + i.toString()).className = "status_no_point_all_ts";
															}
														}else{
															document.getElementById("point_render_list_toppersystem" + i.toString()).className = "status_no_point_all_ts";
														}
													}
												}
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
                            var params = "action=componentstoppersystem30ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&domain_toppersystem=" + encodeURIComponent(document.getElementById('domain_toppersystem').value);
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

function remove_guidebox_selected_ts()
{
	if(ControllerFunction2() == true){
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

            if(document.getElementById('idguideboxnow_toppersystem')){
                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if(document.getElementById('menu_events_all_toppersystem')){
                        setTimeout("Go2fromMenuGuideToppersystem()", 20);
                    }
                }
            }

        }
	}
}

function remove2_guidebox_selected_ts()
{
	if(ControllerFunction2() == true){
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

            if(document.getElementById('idguideboxnow_toppersystem')){
                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if(document.getElementById('menu_events_all_toppersystem')){
                        document.getElementById('checkurl_mode_ts').value="1";
                        setTimeout("Go2fromMenuGuideToppersystem()", 20);
                    }
                }
            }

        }
	}
}

function request_guidebox_images_ts()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('guideboxts4')){
            if(document.getElementById('idguideboxnow_toppersystem')){
                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if(document.getElementById('menu_events_all_toppersystem')){
                        setTimeout("Go5fromMenuGuideToppersystem()", 20);
                    }
                }
            }
        }
	}
}

function request_guidebox_norescrive_ts()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('guideboxts7')){
            if(document.getElementById('idguideboxnow_toppersystem')){
                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if(document.getElementById('menu_events_all_toppersystem')){
                        setTimeout("Go8fromMenuGuideToppersystem()", 20);
                    }
                }
            }
        }
	}
}

function remove_focus_mode_ts()
{
    if(ControllerFunction2() == true){
        if(document.getElementById('focus_mode_ts')){
            document.getElementById("focus_mode_ts").value="0";
        }
    } 
}

function run_lighthouse_toppersystem(n) {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + n)){
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
            document.getElementById('respons_txt' + n.toString()).innerHTML="<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            document.getElementById('cicle_lighthouse_toppersystem_' + n.toString()).value="";
            setTimeout("analisy_lighthouse_toppersystem('" + n.toString() + "')", 80);
        }
    }  
}

function analisy_lighthouse_toppersystem(n) {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + n)){
          document.getElementById('start_verify_lighthouse_toppersystem_' + n.toString()).setAttribute("onclick","not_run_lighthouse_toppersystem()");
          const url = setUpQueryLightHouseToppersystem(n);
          fetch(url)
            .then(response => response.json())
            .then(json => {
                if(json.lighthouseResult){
                    document.getElementById('result_lighthouse_1_toppersystem_' + n.toString()).value=json.lighthouseResult.categories.performance.score;

                    const url = setUpQuery2LightHouseToppersystem(n);
                    fetch(url)
                      .then(response => response.json())
                      .then(json => {
                          if(json.lighthouseResult){
                              document.getElementById('result_lighthouse_2_toppersystem_' + n.toString()).value=json.lighthouseResult.categories.performance.score;
                              setTimeout("calcolate_different_lighthouse_toppersystem('" + n.toString() + "')", 80);
                          }else{
                              setTimeout("error_lighthouse_toppersystem('" + n.toString() + "')", 80);
                          }
                      });
                }else{
                    setTimeout("error_lighthouse_toppersystem('" + n.toString() + "')", 80);
                }
            });
        }
    }
}

function setUpQueryLightHouseToppersystem(n) {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + n)){
             const api = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed';
             const parameters = {
                url: encodeURIComponent(document.getElementById('pagefirst_lighthouse_toppersystem_' + n.toString()).value)
             };
             let query = `${api}?`;
             for (key in parameters) {
                query += `${key}=${parameters[key]}`;
             }
             return query;
        }
    }
}

function setUpQuery2LightHouseToppersystem(n) {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + n)){
             const api = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed';
             const parameters = {
                url: encodeURIComponent(document.getElementById('pagesecond_lighthouse_toppersystem_' + n.toString()).value)
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

function error_lighthouse_toppersystem(n) {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + n)){
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
            alert(txtts0 + "\n" + document.getElementById('pagefirst_lighthouse_toppersystem_' + n.toString()).value + "\n\n" + txtts1);
            document.getElementById('start_verify_lighthouse_toppersystem_' + n.toString()).setAttribute("onclick","run_lighthouse_toppersystem('" + n + "')");
            document.getElementById('respons_txt' + n.toString()).innerHTML="&nbsp;";
            document.getElementById('result_lighthouse_1_toppersystem_' + n.toString()).value="";
            document.getElementById('result_lighthouse_2_toppersystem_' + n.toString()).value="";
        }
    }
}

function calcolate_different_lighthouse_toppersystem(n) {
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + n)){
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

            var optimize=Math.round(parseFloat(document.getElementById('result_lighthouse_1_toppersystem_' + n.toString()).value * 100));
            var original=Math.round(parseFloat(document.getElementById('result_lighthouse_2_toppersystem_' + n.toString()).value * 100));
            var difference=optimize - original;

            var class_original_result="";
            if(original <= 49){
                class_original_result="result_lighthouse_toppersystem_red";
            }else if (original >= 90){
                class_original_result="result_lighthouse_toppersystem_green";
            }else{
                class_original_result="result_lighthouse_toppersystem_orange";
            }

            var class_optimize_result="";
            if(optimize <= 49){
                class_optimize_result="result_lighthouse_toppersystem_red";
            }else if (optimize >= 90){
                class_optimize_result="result_lighthouse_toppersystem_green";
            }else{
                class_optimize_result="result_lighthouse_toppersystem_orange";
            }

            if(difference >= 1){
                document.getElementById('respons_txt' + n.toString()).innerHTML="<strong>" + txtts0 + "</strong>&nbsp;<span class=\"" + class_original_result + "\">" + original + "</span>&nbsp;&nbsp;<strong>" + txtts1 + "</strong>&nbsp;<span class=\"" + class_optimize_result + "\">" + optimize + "</span>&nbsp;&nbsp;<strong>" + txtts2 + "</strong>&nbsp;<span class=\"result_lighthouse_toppersystem_green\">" + difference + "</span>";
            }else{
                if(document.getElementById('cicle_lighthouse_toppersystem_' + n.toString()).value == ""){
                    document.getElementById('cicle_lighthouse_toppersystem_' + n.toString()).value="1";
                    setTimeout("analisy_lighthouse_toppersystem('" + n.toString() + "')", 8000);
                }else{
                    //document.getElementById('respons_txt' + n.toString()).innerHTML="&nbsp;";
                    document.getElementById('respons_txt' + n.toString()).innerHTML="<strong>" + txtts0 + "</strong>&nbsp;<span class=\"" + class_original_result + "\">" + original + "</span>&nbsp;&nbsp;<strong>" + txtts1 + "</strong>&nbsp;<span class=\"" + class_optimize_result + "\">" + optimize + "</span>";
                    alert(txtts3 + "\n" + document.getElementById('pagefirst_lighthouse_toppersystem_' + n.toString()).value + "\n\n" + txtts4 + "\n\n" + txtts5);
                }
            }
            document.getElementById('start_verify_lighthouse_toppersystem_' + n.toString()).setAttribute("onclick","run_lighthouse_toppersystem('" + n + "')");
            document.getElementById('result_lighthouse_1_toppersystem_' + n.toString()).value="";
            document.getElementById('result_lighthouse_2_toppersystem_' + n.toString()).value="";
        }
    }
}

function request_events_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('render_events_toppersystem'))&&(document.getElementById('menu_events_all_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('stxle_request_events_all_toppersystem'))){
		    
			if((document.getElementById('nmaxcanonical_toppersystem').value.trim() != "")&&(document.getElementById('nmaxcanonical_toppersystem').value.trim() != "0")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){  
			    var check_images_a="";
			    var check_images_b="";
			    var check_images_c="";
                if(document.getElementById('images_save_toppersystem')){ 
                    var images_toppersystem=document.getElementById('images_save_toppersystem').value;
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
                }else{
                    check_images_a="";
                    check_images_b=" checked=\"checked\"";
                    check_images_c="";
                }

			    var resolution_images_toppersystem="76";
                if(document.getElementById('resolution_images_save_toppersystem')){ 
                    resolution_images_toppersystem=document.getElementById('resolution_images_save_toppersystem').value;
                }

			    var check_stronglazyload_images_toppersystem="";
                if(document.getElementById('stronglazyload_images_save_toppersystem')){ 
                    var stronglazyload_images_toppersystem=document.getElementById('stronglazyload_images_save_toppersystem').value;
			        if(stronglazyload_images_toppersystem == "0"){
                        check_stronglazyload_images_toppersystem="";
			        }else if(stronglazyload_images_toppersystem == "1"){
				        check_stronglazyload_images_toppersystem=" checked";
			        }else{
                        check_stronglazyload_images_toppersystem="";
			        }
                }

			    var check_stronglazyload_video_toppersystem="";
                if(document.getElementById('stronglazyload_video_save_toppersystem')){ 
                    var stronglazyload_video_toppersystem=document.getElementById('stronglazyload_video_save_toppersystem').value;
			        if(stronglazyload_video_toppersystem == "0"){
                        check_stronglazyload_video_toppersystem="";
			        }else if(stronglazyload_video_toppersystem == "1"){
				        check_stronglazyload_video_toppersystem=" checked";
			        }else{
                        check_stronglazyload_video_toppersystem="";
			        }
                }

			    var check_text_ia_toppersystem="";
                if(document.getElementById('text_ia_save_toppersystem')){ 
                    var text_ia_toppersystem=document.getElementById('text_ia_save_toppersystem').value;
			        if(text_ia_toppersystem == "0"){
                        check_text_ia_toppersystem="";
			        }else if(text_ia_toppersystem == "1"){
				        check_text_ia_toppersystem=" checked";
			        }else{
                        check_text_ia_toppersystem="";
			        }
                }

			    var check_norescrive_a="";
			    var check_norescrive_b="";
                if(document.getElementById('norescrive_save_toppersystem')){ 
                    var norescrive_save_toppersystem=document.getElementById('norescrive_save_toppersystem').value;
			        if(norescrive_save_toppersystem == "0"){
                        check_norescrive_a=" checked=\"checked\"";
                        check_norescrive_b="";
			        }else{
                        check_norescrive_a="";
                        check_norescrive_b=" checked=\"checked\"";
			        }
                }else{
                    check_norescrive_a=" checked=\"checked\"";
                    check_norescrive_b="";
                }

			    var language_saved="";
                if(document.getElementById('language_save_toppersystem')){ 
                    language_saved=document.getElementById('language_save_toppersystem').value.trim();
                }

			    var keyword_saved="";
                if(document.getElementById('keyword_save_toppersystem')){ 
                    keyword_saved=document.getElementById('keyword_save_toppersystem').value.trim();
                }

				var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
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
				var txtts45;
                var txtts46;
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
				var txtts70;
				var txtts71;
                var italy_ts="Italy";
                var italian_ts="Italian";
                if(hreflang_toppersystem == "it"){
                    italy_ts="Italia";
                    italian_ts="Italiano";

                    txtts0="seleziona tutti";
                    txtts1="Invia";
                    txtts2="Chiudi";
                    txtts3="Attendere la conclusione dei processi di ottimizzazione";
                    txtts4="attendere prego";
                    txtts5="Lingua delle pagine selezionate";
                    txtts6="Campo obbligatorio";
                    txtts7="Parola chiave principale";
                    txtts8="Utilizzando questo modulo i meta dati relativi al titolo, descrizione, keywords e categoria sono automatizzati. Ho letto e accetto le <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('it')\">condizioni d&acute;uso</a> di Topper System SEO.";
					txtts9="I meta dati relativi lingua, titolo, descrizione, keywords, categoria, immagini e parola chiave principale saranno uguali a quelli salvati nella precedente ottimizzazione. In caso la pagina sia ottimizzata per la prima volta titolo, descrizione, keywords e categoria sono automatizzati. Ho letto e accetto le <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('it')\">condizioni d&acute;uso</a> di Topper System SEO.";
					txtts10="Dati salvati precedentemente";
					txtts11="sovrascrivi";
					txtts12="ripristina";
					txtts31="Ottimizzazione immagini";
					txtts32="Help";
					txtts33="nessuna";
					txtts34="intermedia";
					txtts35="avanzata";
					txtts36="<strong>Nessuna immagine sarà ottimizzata con Topper System SEO</strong>.<br>La selezione di &quot;nessuna&quot; è consigliata nel caso siano monitorate attività di rete troppo alte per cui il website subisce sensibili rallenatamenti durante la navigazione oppure siano osservati eccessivi carichi di lavoro del vostro server.";
					txtts37="";
					txtts38="";
					txtts39="Apri dettaglio";
					txtts40="aggiorna lista url";
					txtts41="ricerca url da sitemap";
					txtts42="Inserisci la url da ricercare nella lista";
					txtts43="Cerca";
					txtts44="Nessun risultato trovato";
					txtts45="Rimuovi ottimizzazione";
                    txtts46="Il tempo di attesa potrebbe risultare più lungo del previsto";
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
                    txtts67="Il processo di ottimizzazione è concluso con successo";
                    txtts68="Risoluzione";
                    txtts69="Delay";
                    txtts70="Meta dati title e description riscritti con I.A.";
                    txtts71="Comparazione Performance LightHouse";
                }else if(hreflang_toppersystem == "ar"){
                    txtts0="حدد الكل";
                    txtts1="عرض";
                    txtts2="قريب";
                    txtts3="انتظر حتى تنتهي عمليات التحسين";
                    txtts4="من فضلك انتظر";
                    txtts5="لغة الصفحات المحددة";
                    txtts6="حقل إلزامي";
                    txtts7="الكلمة الرئيسية";
                    txtts8="باستخدام هذا النموذج ، تكون البيانات الوصفية المتعلقة بالعنوان والوصف والكلمات الرئيسية والفئة مؤتمتة. لقد قرأت وأوافق على <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ar')\">شروط الاستخدام</a> بواسطة نظام توبر.";
					txtts9="ستكون البيانات الوصفية المتعلقة باللغة والعنوان والوصف والكلمات الرئيسية والفئة والصور والكلمة الرئيسية الرئيسية هي نفسها تلك المحفوظة في التحسين السابق. إذا تم تحسين الصفحة لأول مرة ، فسيتم تلقائيًا العنوان والوصف والكلمات الرئيسية والفئة. فئة مؤتمتة. لقد قرأت وأوافق على <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ar')\">شروط الاستخدام</a> بواسطة نظام توبر.";
					txtts10="البيانات المحفوظة مسبقًا";
					txtts11="الكتابة فوق";
					txtts12="يستعيد";
					txtts31="تحسين الصورة"; 
					txtts32="الدعم"; 
					txtts33="لا شيء"; 
					txtts34="متوسط ​​(موصى به)"; 
					txtts35="تقدم"; 
					txtts36="<strong>لن يتم تحسين أي صورة باستخدام نظام Topper</strong>.<br>اختيار  لا شيء يوصى إذا تم رصد أنشطة الشبكة عالية جدًا بحيث يتعرض موقع الويب لتباطؤ كبير أثناء التنقل أو لوحظت أحمال عمل مفرطة من الخادم الخاص بك."; 
					txtts37="";
					txtts38="";
					txtts39="افتح التفاصيل";
					txtts40="تحديث قائمة URL";
					txtts41="البحث في عنوان url من خريطة الموقع";
					txtts42="أدخل عنوان url للبحث عنه في القائمة";
					txtts43="البحث عن";
					txtts44="لم يتم العثور على نتائج";
					txtts45="إزالة التحسين";
                    txtts46="قد يكون وقت الانتظار أطول من المتوقع";
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
                    txtts67="تم الانتهاء من عملية التحسين بنجاح";
                    txtts68="دقة";
                    txtts69="Delay";
                    txtts70="تمت إعادة كتابة البيانات الوصفية للعنوان والوصف باستخدام الذكاء الاصطناعي.";
                    txtts71="مقارنة أداء المنارة";
                }else if(hreflang_toppersystem == "de"){
                    txtts0="Alle auswählen";
                    txtts1="einreichen";
                    txtts2="schließen";
                    txtts3="Warten Sie, bis die Optimierungsprozesse abgeschlossen sind";
                    txtts4="Bitte warten Sie";
                    txtts5="Sprache der ausgewählten Seiten";
                    txtts6="Pflichtfeld";
                    txtts7="Hauptschlüsselwort";
                    txtts8="Mit diesem Formular werden die Metadaten zu Titel, Beschreibung, Stichwörtern und Kategorie automatisiert. Ich habe das <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('de')\">gelesen und akzeptiert Nutzungsbedingungen</a> von Topper System SEO.";
					txtts9="Die Metadaten in Bezug auf Sprache, Titel, Beschreibung, Schlüsselwörter, Kategorie, Bilder und Hauptschlüsselwort stimmen mit denen überein, die in der vorherigen Optimierung gespeichert wurden. Wenn die Seite zum ersten Mal optimiert wird, werden Titel, Beschreibung, Schlüsselwörter und Kategorie automatisiert. Ich habe das <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('de')\">gelesen und akzeptiert Nutzungsbedingungen</a> von Topper System SEO.";
					txtts10="Zuvor gespeicherte Daten";
					txtts11="überschreiben";
					txtts12="stellt wieder her";
					txtts31="Bildoptimierung"; 
					txtts32="Unterstützung"; 
					txtts33="keiner"; 
					txtts34="Mittelstufe"; 
					txtts35="voraus"; 
					txtts36="<strong>Mit Topper System SEO</strong> wird kein Bild optimiert.<br>Auswahl von &quot;none&quot; Es wird empfohlen, wenn die Netzwerkaktivitäten zu hoch überwacht werden, damit die Website während der Navigation erheblich verlangsamt wird oder übermäßige Arbeitslasten beobachtet werden Ihres Servers."; 
					txtts37="";
					txtts38="";
					txtts39="Offenes Detail";
					txtts40="URL-Liste aktualisieren";
					txtts41="Suche URL von Sitemap";
					txtts42="Geben Sie die zu suchende URL in die Liste ein";
					txtts43="Suchen";
					txtts44="keine Ergebnisse gefunden";
					txtts45="Optimierung entfernen";
                    txtts46="Die Wartezeit kann länger als erwartet sein";
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
                    txtts67="Der Optimierungsprozess ist erfolgreich abgeschlossen";
                    txtts68="Auflösung";
                    txtts69="Delay";
                    txtts70="Titel- und Beschreibungsmetadaten mit A.I. neu geschrieben";
                    txtts71="LightHouse-Leistungsvergleich";
                }else if(hreflang_toppersystem == "es"){
                    txtts0="seleccionar todo";
                    txtts1="presentar";
                    txtts2="cerca";
                    txtts3="Espere a que finalicen los procesos de optimización.";
                    txtts4="por favor espera";
                    txtts5="Idioma de las páginas seleccionadas";
                    txtts6="Campo obligatorio";
                    txtts7="Palabra clave principal";             
                    txtts8="Con este formulario, los metadatos relacionados con el título, la descripción, las palabras clave y la categoría se automatizan. He leído y acepto el <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('es')\">condiciones de uso</a> por el Topper System SEO.";
					txtts9="Los metadatos relacionados con el idioma, título, descripción, palabras clave, categoría, imágenes y palabra clave principal serán los mismos que los guardados en la optimización anterior. Si la página se optimiza por primera vez, el título, la descripción, las palabras clave y la categoría se automatizan. He leído y acepto el <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('es')\">condiciones de uso</a> por el Topper System SEO.";
					txtts10="Datos guardados previamente";
					txtts11="sobrescribir";
					txtts12="restaura";
					txtts31="Optimización de imagen"; 
					txtts32="Apoyo"; 
					txtts33="ninguna"; 
					txtts34="intermedio"; 
					txtts35="avanzar"; 
					txtts36="<strong>Ninguna imagen se optimizará con Topper System SEO</strong>.<br>Selección de &quot;ninguna&quot; se recomienda si las actividades de la red se monitorean demasiado alto, por lo que el sitio web experimenta ralentizaciones significativas durante la navegación o se observan cargas de trabajo excesivas de su servidor"; 
					txtts37="";
					txtts38="";
					txtts39="Detalle abierto";
					txtts40="actualizar lista de URL";
					txtts41="URL de búsqueda del mapa del sitio";
					txtts42="Ingrese la URL para buscar en la lista";
					txtts43="Buscar";
					txtts44="No se han encontrado resultados";
					txtts45="Quitar optimización";
                    txtts46="El tiempo de espera puede ser más largo de lo esperado";
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
                    txtts67="El proceso de optimización se completa con éxito";
                    txtts68="Resolución";
                    txtts69="Delay";
                    txtts70="Metadatos de título y descripción reescritos con A.I.";
                    txtts71="Comparación de rendimiento de LightHouse";
                }else if(hreflang_toppersystem == "fr"){
                    txtts0="sélectionner tout";
                    txtts1="soumettre";
                    txtts2="proche";
                    txtts3="Attendez la fin des processus d'optimisation";
                    txtts4="veuillez patienter";
                    txtts5="Langue des pages sélectionnées";
                    txtts6="Champ obligatoire";
                    txtts7="Mot-clé principal";
                    txtts8="À l'aide de ce formulaire, les métadonnées relatives au titre, à la description, aux mots clés et à la catégorie sont automatisées. J'ai lu et j'accepte le <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('fr')\">conditions d'utilisation</a> par Topper System SEO.";
					txtts9="Les métadonnées liées à la langue, au titre, à la description, aux mots-clés, à la catégorie, aux images et au mot-clé principal seront les mêmes que celles enregistrées dans l'optimisation précédente. Si la page est optimisée pour la première fois, le titre, la description, les mots-clés et la catégorie sont automatisés. J'ai lu et j'accepte le <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('fr')\">conditions d'utilisation</a> par Topper System SEO.";
					txtts10="Données précédemment enregistrées";
					txtts11="écraser";
					txtts12="restaure";
					txtts31="Optimisation d'image"; 
					txtts32="Soutien"; 
					txtts33="aucun"; 
					txtts34="intermédiaire"; 
					txtts35="avance"; 
					txtts36="<strong>Aucune image ne sera optimisée avec Topper System SEO</strong>.<br>Sélection de &quot;aucune&quot; il est recommandé si les activités du réseau sont surveillées trop haut afin que le site Web subisse des ralentissements importants pendant la navigation ou des charges de travail excessives sont observées de votre serveur."; 
					txtts37="";
					txtts38="";
					txtts39="Détail ouvert";
					txtts40="mettre à jour la liste des URL";
					txtts41="URL de recherche à partir du plan du site";
					txtts42="Entrez l'url à rechercher dans la liste";
					txtts43="Rechercher";
					txtts44="Aucun résultat trouvé";
					txtts45="Supprimer l'optimisation";
                    txtts46="El tiempo de espera puede ser más largo de lo esperado";
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
                    txtts67="Le processus d'optimisation est terminé avec succès";
                    txtts68="Résolution";
                    txtts69="Delay";
                    txtts70="Métadonnées de titre et de description réécrites avec l’I.A.";
                    txtts71="Comparaison des performances de LightHouse";
                }else if(hreflang_toppersystem == "hi"){
                    txtts0="सभी का चयन करें";
                    txtts1="प्रस्तुत करना";
                    txtts2="पास";
                    txtts3="अनुकूलन प्रक्रियाओं के समाप्त होने की प्रतीक्षा करें";
                    txtts4="कृपया प्रतीक्षा करें";
                    txtts5="चयनित पृष्ठों की भाषा";
                    txtts6="अनिवार्य क्षेत्र";
                    txtts7="मुख्य कीवर्ड";
                    txtts8="इस फॉर्म का उपयोग करके शीर्षक, विवरण, कीवर्ड और श्रेणी से संबंधित मेटा डेटा स्वचालित हैं। मैंने पढ़ा और स्वीकार किया है <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('hi')\">उपयोग की शर्तें</a> टॉपर सिस्टम द्वारा।";
					txtts9="भाषा, शीर्षक, विवरण, कीवर्ड, श्रेणी, चित्र और मुख्य कीवर्ड से संबंधित मेटा डेटा वही होगा जो पिछले अनुकूलन में सहेजे गए हैं। यदि पृष्ठ पहली बार अनुकूलित किया गया है, तो शीर्षक, विवरण, कीवर्ड और श्रेणी स्वचालित हैं। <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('hi')\">उपयोग की शर्तें</a> टॉपर सिस्टम द्वारा।";
					txtts10="पहले बचाए गए डेटा";
					txtts11="अधिलेखित";
					txtts12="पुनर्स्थापित";
					txtts31="छवि अनुकूलन"; 
					txtts32="सहयोग"; 
					txtts33="कोई नहीं"; 
					txtts34="मध्यवर्ती "; 
					txtts35="अग्रिम"; 
					txtts36="<strong>कोई छवि टॉपर सिस्टम के साथ अनुकूलित नहीं होगी</strong><br><br>का चयन &quot;कोई नहीं&quot;यह सिफारिश की जाती है यदि नेटवर्क गतिविधियों पर बहुत अधिक निगरानी रखी जाती है तो वेबसाइट नेविगेशन के दौरान महत्वपूर्ण मंदी से गुजरती है या अत्यधिक वर्कलोड मनाया जाता है आपके सर्वर के।"; 
					txtts37="";
					txtts38="";
					txtts39="खुला विवरण";
					txtts40="url सूची अपडेट करें";
					txtts41="साइटमैप से url खोजें";
					txtts42="सूची में खोजने के लिए url दर्ज करें";
					txtts43="निम्न को खोजें";
					txtts44="कोई परिणाम नहीं मिला";
					txtts45="अनुकूलन निकालें";
                    txtts46="प्रतीक्षा समय अपेक्षा से अधिक लंबा हो सकता है";
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
                    txtts67="अनुकूलन प्रक्रिया सफलतापूर्वक पूरी हो गई है";
                    txtts68="संकल्प";
                    txtts69="Delay";
                    txtts70="शीर्षक और विवरण मेटा डेटा को ए.आई. के साथ पुनः लिखा गया।";
                    txtts71="लाइटहाउस प्रदर्शन तुलना";
                }else if(hreflang_toppersystem == "ja"){
                    txtts0="すべて選択";
                    txtts1="提出します";
                    txtts2="近いです";
                    txtts3="最適化プロセスが完了するまで待ちます";
                    txtts4="お待ちください";
                    txtts5="選択したページの言語";                    
                    txtts6="必須フィールド";
                    txtts7="主なキーワード";
                    txtts8="このフォームを使用すると、タイトル、説明、キーワード、カテゴリに関連するメタデータが自動化されます。<a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ja')\">を読み、同意します 使用条件</a> トッパーシステムによる";
					txtts9="言語、タイトル、説明、キーワード、カテゴリ、画像、メインキーワードに関連するメタデータは、以前の最適化で保存されたものと同じになります。 ページが初めて最適化されると、タイトル、説明、キーワード、カテゴリが自動化されます。 <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ja')\">を読み、同意します 使用条件</a> トッパーシステムによる";
					txtts10="以前に保存したデータ";
					txtts11="上書きする";
					txtts12="復元";
					txtts31="画像の最適化"; 
					txtts32="サポート"; 
					txtts33="無し"; 
					txtts34="中間"; 
					txtts35="前進"; 
					txtts36="<strong>トッパーシステムで最適化される画像はありません</strong>。<br>&quot;noneの選択&quot;ネットワークアクティビティの監視が高すぎるため、ナビゲーション中にWebサイトが大幅にスローダウンしたり、過度のワークロードが観察されたりする場合に推奨されますサーバーの。"; 
					txtts37="";
					txtts38="";
					txtts39="詳細を開く";
					txtts40="URLリストを更新する";
					txtts41="サイトマップからURLを検索";
					txtts42="リストで検索するURLを入力します";
					txtts43="検索する";
					txtts44="結果が見つかりません";
					txtts45="最適化を削除する";
                    txtts46="待ち時間が予想以上に長くなる可能性があります";
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
                    txtts67="最適化プロセスが正常に完了しました";
                    txtts68="解決";
                    txtts69="Delay";
                    txtts70="A.I.で書き換えられたタイトルと説明のメタデータ";
                    txtts71="LightHouse のパフォーマンス比較";
                }else if(hreflang_toppersystem == "pl"){
                    txtts0="wybierz wszystko";
                    txtts1="przedkładać";
                    txtts2="blisko";
                    txtts3="Poczekaj na zakończenie procesów optymalizacji";
                    txtts4="proszę czekać";
                    txtts5="Język wybranych stron";
                    txtts6="必須フィールド";
                    txtts7="Główne słowo kluczowe";
                    txtts8="Za pomocą tego formularza metadane dotyczące tytułu, opisu, słów kluczowych i kategorii są zautomatyzowane. Przeczytałem i akceptuję <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('pl')\">warunki użytkowania</a> przez Topper System SEO.";
					txtts9="Metadane dotyczące języka, tytułu, opisu, słów kluczowych, kategorii, obrazów i głównego słowa kluczowego będą takie same, jak te zapisane podczas poprzedniej optymalizacji. Jeśli strona jest optymalizowana po raz pierwszy, tytuł, opis, słowa kluczowe i kategoria są automatycznie. Przeczytałem i akceptuję <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('pl')\">warunki użytkowania</a> przez Topper System SEO.";
					txtts10="Wcześniej zapisane dane";
					txtts11="przepisać";
					txtts12="przywraca";
					txtts31="Optymalizacja obrazu"; 
					txtts32="Wsparcie"; 
					txtts33="Żaden"; 
					txtts34="pośredni"; 
					txtts35="postęp"; 
					txtts36="<strong>Żaden obraz nie zostanie zoptymalizowany dzięki Topper System SEO</strong>.<br>Wybór &quot;brak&quot; zaleca się, jeśli aktywność sieciowa jest monitorowana zbyt wysoko, aby strona uległa znacznemu spowolnieniu podczas nawigacji lub zaobserwowano nadmierne obciążenie pracą twojego serwera."; 
					txtts37="";
					txtts38="";
					txtts39="Otwórz szczegóły";
					txtts40="zaktualizuj listę adresów URL";
					txtts41="Wyszukaj adres URL z mapy witryny";
					txtts42="Wprowadź adres URL do wyszukania na liście";
					txtts43="Szukaj";
					txtts44="Nie znaleziono wyników";
					txtts45="Usuń optymalizację";
                    txtts46="Czas oczekiwania może być dłuższy niż oczekiwano";
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
                    txtts67="Proces optymalizacji został pomyślnie zakończony";
                    txtts68="Rezolucja";
                    txtts69="Delay";
                    txtts70="Metadane tytułu i opisu przepisane za pomocą A.I.";
                    txtts71="Porównanie wydajności LightHouse";
                }else if(hreflang_toppersystem == "pt"){
                    txtts0="selecionar tudo";
                    txtts1="submeter";
                    txtts2="perto";
                    txtts3="Aguarde a conclusão dos processos de otimização";
                    txtts4="por favor aguarde";
                    txtts5="Idioma das páginas selecionadas";
                    txtts6="Campo obrigatório";
                    txtts7="Palavra-chave principal";
                    txtts8="Usando este formulário, os metadados relativos ao título, descrição, palavras-chave e categoria são automatizados. Eu li e aceito o <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('pt')\">condições de uso</a> pelo Topper System SEO.";
					txtts9="Os metadados relacionados ao idioma, título, descrição, palavras-chave, categoria, imagens e palavra-chave principal serão os mesmos que foram salvos na otimização anterior. Se a página for otimizada pela primeira vez, o título, a descrição, as palavras-chave e a categoria serão automatizados. Eu li e aceito o <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('pt')\">condições de uso</a> pelo Topper System SEO.";
					txtts10="Dados salvos anteriormente";
					txtts11="sobrescrever";
					txtts12="restaura";
					txtts31="Otimização de imagem"; 
					txtts32="Apoio, suporte"; 
					txtts33="Nenhum"; 
					txtts34="intermediário"; 
					txtts35="avançar"; 
					txtts36="<strong>Nenhuma imagem será otimizada com o Topper System SEO.</strong>.<br>Seleção de &quot;nenhuma&quot; Recomenda-se que as atividades da rede sejam monitoradas muito alto para que o site sofra lentidão significativa durante a navegação ou observe cargas de trabalho excessivas do seu servidor."; 
					txtts37="";
					txtts38="";
					txtts39="Detalhe aberto";
					txtts40="atualizar lista de urls";
					txtts41="pesquisar url do mapa do site";
					txtts42="Insira o url a ser pesquisado na lista";
					txtts43="Procurar por";
					txtts44="Nenhum resultado encontrado";
					txtts45="Remover otimização";
                    txtts46="O tempo de espera pode ser maior do que o esperado";
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
                    txtts67="O processo de otimização foi concluído com sucesso";
                    txtts68="Resolução";
                    txtts69="Delay";
                    txtts70="Metadados de título e descrição reescritos com I.A.";
                    txtts71="Comparação de desempenho do LightHouse";
                }else if(hreflang_toppersystem == "ru"){
                    txtts0="выбрать все";
                    txtts1="представить";
                    txtts2="близко";
                    txtts3="Дождитесь окончания процессов оптимизации";
                    txtts4="пожалуйста подождите";
                    txtts5="Язык выбранных страниц";
                    txtts6="Обязательное поле";
                    txtts7="Главное ключевое слово";
                    txtts8="Используя эту форму, метаданные, относящиеся к названию, описанию, ключевым словам и категории, автоматизируются. Я прочитал и принимаю <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ru')\">условия использования</a> по Topper System SEO.";
					txtts9="Мета-данные, связанные с языком, заголовком, описанием, ключевыми словами, категорией, изображениями и основным ключевым словом, будут такими же, как и те, которые были сохранены при предыдущей оптимизации. Если страница оптимизируется впервые, заголовок, описание, ключевые слова и категория автоматизируются. Я прочитал и принимаю <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('ru')\">условия использования</a> по Topper System SEO.";
					txtts10="Ранее сохраненные данные";
					txtts11="перезапись";
					txtts12="восстановления";
					txtts31="Оптимизация изображения"; 
					txtts32="Служба поддержки"; 
					txtts33="никто"; 
					txtts34="промежуточный"; 
					txtts35="продвижение"; 
					txtts36="<strong>Ни одно изображение не будет оптимизировано с помощью системы Topper</strong>.<br>Выбор &quot;нет&quot; рекомендуется, если сетевая активность отслеживается слишком высоко, поэтому веб-сайт испытывает значительные замедления во время навигации или наблюдаются чрезмерные нагрузки вашего сервера."; 
					txtts37="";
					txtts38="";
					txtts39="Открыть деталь";
					txtts40="обновить список URL";
					txtts41="поисковый URL из карты сайта";
					txtts42="Введите URL-адрес для поиска в списке";
					txtts43="Искать";
					txtts44="результатов не найдено";
					txtts45="Удалить оптимизацию";
                    txtts46="Время ожидания может быть больше, чем ожидалось";
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
                    txtts67="Процесс оптимизации успешно завершен";
                    txtts68="Разрешение";
                    txtts69="Delay";
                    txtts70="Метаданные заголовка и описания переписаны с помощью A.I.";
                    txtts71="Сравнение производительности LightHouse";
                }else if(hreflang_toppersystem == "zh"){
                    txtts0="全选";
                    txtts1="提交";
                    txtts2="关闭";
                    txtts3="等待优化过程完成";
                    txtts4="请稍等";
                    txtts5="所选页面的语言";
                    txtts6="必填项";
                    txtts7="主要关键字";
                    txtts8="使用这种形式，与标题，描述，关键字和类别有关的元数据将自动执行。我已阅读并接受 <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('zh')\">使用条件</a> 由礼帽系统。";
					txtts9="与语言，标题，描述，关键字，类别，图像和主要关键字相关的元数据将与先前优化中保存的元数据相同。 如果页面是首次优化，则标题，描述，关键字和类别将自动执行。 我已阅读并接受 <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('zh')\">使用条件</a> 由礼帽系统。";
					txtts10="先前保存的数据";
					txtts11="覆写";
					txtts12="恢复";
					txtts31="图像优化"; 
					txtts32="支持"; 
					txtts33="没有"; 
					txtts34="中级"; 
					txtts35="预先"; 
					txtts36="<strong>不会使用Topper系统优化图像</strong>。<br>选择&quot;无&quot;建议对网络活动进行过高监控，以免导航期间网站速度显着下降或观察到过多的工作量您的服务器。"; 
					txtts37="";
					txtts38="";
					txtts39="打开细节";
					txtts40="更新网址列表";
					txtts41="从站点地图搜索网址";
					txtts42="在列表中输入要搜索的网址";
					txtts43="搜索";
					txtts44="未找到结果";
					txtts45="移除优化";
                    txtts46="等待时间可能比预期的要长";
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
                    txtts67="优化过程已成功完成";
                    txtts68="解决";
                    txtts69="Delay";
                    txtts70="使用 A.I. 重写的标题和描述元数据";
                    txtts71="LightHouse 性能比较";
                }else if(hreflang_toppersystem == "he"){
                    txtts0="בחר הכל";
                    txtts1="הגש";
                    txtts2="סגירה";
                    txtts3="המתן לסיום תהליכי האופטימיזציה";
                    txtts4="אנא המתן";
                    txtts5="שפת הדפים שנבחרו";
                    txtts6="שדה חובה";
                    txtts7="מילת מפתח עיקרית";
                    txtts8="בעזרת טופס זה נתוני המטא הנוגעים לכותרת, לתיאור, למילות מפתח ולקטגוריה הם אוטומטיים. קראתי וקיבלתי את <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('he')\">תנאי שימוש</a> Topper System SEO.";
					txtts9="נתוני המטא הקשורים לשפה, כותרת, תיאור, מילות מפתח, קטגוריה, תמונות ומילת מפתח עיקרית יהיו זהים לאלה שנשמרו באופטימיזציה הקודמת. אם הדף מותאם לראשונה, הכותרת, התיאור, מילות המפתח והקטגוריה אוטומטיים. קיבלתי את <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('he')\">תנאי שימוש</a> Topper System SEO.";
					txtts10="נתונים שנשמרו בעבר";
					txtts11="להחליף";
					txtts12="משחזר";
					txtts31="מיטוב תמונה"; 
					txtts32="תמיכה"; 
					txtts33="אף אחד"; 
					txtts34="ביניים (מומלץ)"; 
					txtts35="להתקדם"; 
					txtts36="<strong>שום תמונה לא תוטב עם מערכת טופר</strong>.<br>בחירה של  אין  מומלץ אם פעילויות הרשת מנוטרות גבוה מדי כך שהאתר עובר האטות משמעותיות במהלך הניווט או שנצפות עומסי עבודה מוגזמים. של השרת שלך."; 
					txtts37="";
					txtts38="";
					txtts39="פרט פתוח";
					txtts40="עדכן את רשימת url";
					txtts41="כתובת אתר לחיפוש ממפת האתר";
					txtts42="הזן את כתובת האתר לחיפוש ברשימה";
					txtts43="לחפש אחר";
					txtts44="לא נמצאו תוצאות";
					txtts45="הסר אופטימיזציה";
                    txtts46="זמן ההמתנה עשוי להיות ארוך מהצפוי";
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
                    txtts67="תהליך האופטימיזציה הסתיים בהצלחה";
                    txtts68="פתרון הבעיה";
                    txtts69="Delay";
                    txtts70="מטא נתונים של כותרת ותיאור שנכתבו מחדש עם A.I.";
                    txtts71="השוואת ביצועים של LightHouse";
                }else if(hreflang_toppersystem == "la"){
                    txtts0="select all";
                    txtts1="submit";
                    txtts2="prope";
                    txtts3="Imple hebdomadam dierum hujus processus ipsum";
                    txtts4="placet exspectare";
                    txtts5="Lingua paginarum delectarum";
                    txtts6="Requiritur agris";
                    txtts7="Verbum principalis clavis";
                    txtts8="Cuius moduli rationem titulo usus verbo metadata, descriptio, automated keywords et genus sumus. Legi et ego: et conveniunt ad <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('la')\">conditionibus usus</a> Topper System SEO.";
					txtts9="Et data meta ad lingua, titulo, descriptio, keywords, genus, et imagines principalis keyword eadem erit cum ea servata ipsum priorem. Si page is optimized pro primo tempore in titulum, descriptio, automated keywords et genus sumus. Legi et ego: et conveniunt ad <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('la')\">conditionibus usus</a> Topper System SEO.";
					txtts10="Data antea salvus";
					txtts11="rescribere";
					txtts12="restituimus";
					txtts31="ipsum Image"; 
					txtts32="Support"; 
					txtts33="nemo"; 
					txtts34="medium"; 
					txtts35="antecessum"; 
					txtts36="<strong>Non potest autem imago est optimized Topper Ratio</strong>. Clementine_Vulgate Electio autem non suadetur ut network si actiones sunt monitored excelsa website in ut patitur significant slowdowns navigation in ultionem aut ex laboribus, observari curabis servo tuo."; 
					txtts37="";
					txtts38="";
					txtts39="Aperta detail";
					txtts40="URL album update";
					txtts41="URL quaerere ab Quisque vestibulum";
					txtts42="Url intrare ut quaeram magis quam ad album";
					txtts43="Quaerere";
					txtts44="Non inveni results";
					txtts45="Remove ipsum";
                    txtts46="Expectans tempus sit diutius quam expectata";
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
                    txtts67="Ipsum processus feliciter consummatur";
                    txtts68="Resolution";
                    txtts69="Delay";
                    txtts70="Titulus et descriptio meta data cum A.I.";
                    txtts71="Pharus euismod Comparatio";
                }else{
                    txtts0="select all";
                    txtts1="Send";
                    txtts2="Close";
                    txtts3="Wait for the optimization processes to finish";
                    txtts4="Please wait";
                    txtts5="language of the selected pages";
                    txtts6="Required field";
                    txtts7="Main keyword";
                    txtts8="Using this form the meta data relating to the title, description, keywords and category are automated. I have read and accept the <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('en')\">conditions of use</a> of the Topper System SEO.";
					txtts9="The meta data related to language, title, description, keywords, category, images and main keyword will be the same as those saved in the previous optimization. If the page is optimized for the first time, the title, description, keywords and category are automated. I have read and accept the <a rel=\"nofollow\" href=\"javascript:terms_condictions_toppersystem('en')\">conditions of use</a> of the Topper System SEO.";
					txtts10="Previously saved data";
					txtts11="overwrite";
					txtts12="restores";
					txtts31="Image optimization"; 
					txtts32="Support"; 
					txtts33="none"; 
					txtts34="intermediate"; 
					txtts35="advance"; 
					txtts36="<strong>No image will be optimized with Topper System SEO</strong>.<br>Selection of &quot;none&quot; it is recommended if network activities are monitored too high so the website undergoes significant slowdowns during navigation or excessive workloads are observed of your server."; 
					txtts37="";
					txtts38="";
					txtts39="Open detail";
					txtts40="update url list";
					txtts41="search url from sitemap";
					txtts42="Enter the url to search for in the list";
					txtts43="Search";
					txtts44="No results found";
					txtts45="Remove optimization";
                    txtts46="The waiting time may be longer than expected";
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
                    txtts67="The optimization process is completed successfully";
                    txtts68="Resolution";
                    txtts69="Delay";
                    txtts70="Title and description meta data rewritten with A.I.";
                    txtts71="LightHouse Performance Comparison";
                }
				
				var link_preview="";
                var link_original="";
                var responseText="";
                var cb="";
                for(i=0;i<=document.getElementById('nmaxcanonical_toppersystem').value;i++){ 
                    if(document.getElementById("canonical_toppersystem" + i.toString())){
                        if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){

                            if(i % 2 == 0) {
                                bg="bgcxlxrffffff";        
                            } else {
                                bg="bgcxlxrf0f0f0";      
                            }
                            
                            if(i == 0){
                                cb="<span id=\"guideboxts2\" class=\"\" onclick=\"remove_guidebox_selected_ts()\" tabindex=\"0\"><input id=\"check_canonical_toppersystem_send" + i.toString() + "\" class=\"\" name=\"check_canonical_toppersystem_send" + i.toString() + "\" type=\"checkbox\"></span>";        
                            } else {
                                cb="<input id=\"check_canonical_toppersystem_send" + i.toString() + "\" name=\"check_canonical_toppersystem_send" + i.toString() + "\" type=\"checkbox\" onclick=\"remove2_guidebox_selected_ts()\">";      
                            }
							
							link_preview=url_preview_toppersystem(document.getElementById("canonical_toppersystem" + i.toString()).value);
                            link_original=url_original_toppersystem(document.getElementById("canonical_toppersystem" + i.toString()).value);

                            responseText+="<div id=\"box_render_list_toppersystem" + i.toString() + "\" class=\"pxdding12 " + bg + "\">" + cb + " <span id=\"point_render_list_toppersystem" + i.toString() + "\" class=\"status_whait_point_all_ts\">&bull;</span> " + urldecode_url_toppersystem(document.getElementById("canonical_toppersystem" + i.toString()).value) + "&nbsp;&nbsp;<a target=\"_blank\" class=\"decoration_none\" href=\"" + link_preview + "\" title=\"" + txtts39 + "\"><small><span class=\"pos_status_title\">&rarr;</span></small></a>&nbsp;&nbsp;<span id=\"box_remove_toppersystem_page" + i.toString() + "\" class=\"display_none_ts\"><span  onclick=\"request_clean_page_toppersystem('" + i.toString() + "');\" title=\"" + txtts45 + "\"><small><span class=\"pos_status_title_cursor\">&cross;</span></small></span>&nbsp;&nbsp;<span class=\"pos_status_title_lighthouse\"><span id=\"start_verify_lighthouse_toppersystem_" + i.toString() + "\" onclick=\"run_lighthouse_toppersystem('" + i.toString() + "')\" title=\"" + txtts71 + "\"><small><small>LightHouse</small></small></span></span>&nbsp;&nbsp;</span><div id=\"load_toppersystem" + i.toString() + "\" class=\"box_loader_toppersystem display_none_ts\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;<span class=\"statusload_toppersystem\"><small>" + txtts4 + " <span id=\"waitloading_pagets" + i.toString() + "\" class=\"display_none_ts\">... " + txtts46 + "</span></small></span></div><span id=\"respons_txt" + i.toString() + "\" class=\"fxntsxze60\">&nbsp;</span><input type=\"hidden\" id=\"hiddenrespons_txt" + i.toString() + "\" name=\"hiddenrespons_txt" + i.toString() + "\" value=\"\"><input type=\"hidden\" id=\"cicle_lighthouse_toppersystem_" + i.toString() + "\" name=\"cicle_lighthouse_toppersystem_" + i.toString() + "\" value=\"\"><input type=\"hidden\" id=\"pagefirst_lighthouse_toppersystem_" + i.toString() + "\" name=\"pagefirst_lighthouse_toppersystem_" + i.toString() + "\" value=\"" + urldecode_url_toppersystem(document.getElementById("canonical_toppersystem" + i.toString()).value) + "\"><input type=\"hidden\" id=\"pagesecond_lighthouse_toppersystem_" + i.toString() + "\" name=\"pagesecond_lighthouse_toppersystem_" + i.toString() + "\" value=\"" + link_original + "\"><input type=\"hidden\" id=\"result_lighthouse_1_toppersystem_" + i.toString() + "\" name=\"result_lighthouse_1_toppersystem_" + i.toString() + "\" value=\"\"><input type=\"hidden\" id=\"result_lighthouse_2_toppersystem_" + i.toString() + "\" name=\"result_lighthouse_2_toppersystem_" + i.toString() + "\" value=\"\"></div>";
							
							link_preview="";
                            link_original="";
                        }
                    }
                }
                
                var responseTextOk="";
				var gotoanalitycspage=1;
                if(responseText.trim() != ""){
		            if(myBrowserTypeTS() == "IE"){
			            inputsearch_class = "inputsearch_ie_toppersystem";		
		            }else{
			            inputsearch_class = "inputsearch_toppersystem";
		            }

			        var open_first_banner_toppersystem="";
                    if(document.getElementById('open_first_banner_toppersystem')){ 
                        open_first_banner_toppersystem="<div class=\"pxdding12\" style=\"background-color: #65FFA2;\"><div style=\"width: 80%;\"><small>" + document.getElementById('open_first_banner_toppersystem').value.trim() + "</small></div></div>";
                    }

                    var class_view_intelligence_artificial_toppersystem="display_none_ts";
                    if(document.getElementById('box_intelligence_artificial_toppersystem')){ 
                        if(document.getElementById('box_intelligence_artificial_toppersystem').value == "1"){ 
                            class_view_intelligence_artificial_toppersystem="";
                        }                        
                    }

                    responseTextOk=open_first_banner_toppersystem + "<div class=\"pxdding12 bgcxlxrdcd7ca\"><input id=\"search_url_toppersystem\" name=\"search_url_toppersystem\" onkeypress=\"VerifyCleanButton_toppersystem()\" onfocus=\"VerifyCleanButton_toppersystem()\" onblur=\"VerifyCleanButton_toppersystem()\" onkeydown=\"if(event.keyCode == 13){document.getElementById('inputsearchbutton_toppersystem').click()}\" type=\"text\" placeholder=\"" + txtts42 + "\" value=\"\" class=\"" + inputsearch_class + "\"><div id=\"box_cleansearch_toppersystem\" class=\"inlinerelative_toppersystem display_none_ts\"><input id=\"inputcleansearchbutton_toppersystem\" class=\"inputcleansearchbutton_toppersystem\" type=\"button\" value=\"&nbsp;X&nbsp;\" onclick=\"start_cleansearch_toppersystem()\"></div><input id=\"inputsearchbutton_toppersystem\" class=\"inputsearchbutton_toppersystem\" type=\"button\" value=\"" + txtts43 + "\" onclick=\"start_search_url_toppersystem()\">&nbsp;<div class=\"boxupdate_toppersystem\"><small><div class=\"mxnu_ok_toppersystem box_loader_toppersystem\"><div id=\"link_toppersystem_update_list_url\" class=\"box_loader_toppersystem\"><a href=\"javascript:start_update_url_toppersystem();\" title=\"" + txtts40 + "\"><span class=\"pos_status_title\">&orarr;</span></a>&nbsp;&nbsp;<div id=\"guideboxts1\" class=\"link_loader_toppersystem\" tabindex=\"0\"><a href=\"javascript:start_update_url_toppersystem();\" title=\"" + txtts40 + "\">" + txtts40 + "</a></div></div><div id=\"load_toppersystem_box_list\" class=\"box_loader_toppersystem display_none_ts\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;<span class=\"statusload_toppersystem\"><small>" + txtts41 + "</small></span></div></div></small></div></div> <div class=\"pxdding12 bgcxlxrf0f0f0\"><input id=\"nciclets\" name=\"nciclets\" type=\"hidden\" value=\"\"><input id=\"check_canonical_toppersystem_send_all\" name=\"check_canonical_toppersystem_send_all\" type=\"checkbox\" onclick=\"ChangeCheckToppersystemAll()\"> <small>" + txtts0 + "</small></div><div onclick=\"remove_focus_mode_ts();\">" + responseText.trim() + "</div><div id=\"noresultfoundsearchts\" class=\"pxdding12 bgcxlxrffffff display_none_ts\">" + txtts44 + "</div><div class=\"pxdding12 bgcxlxrf0f0f0\"><input id=\"check_canonical_toppersystem_send_allf\" name=\"check_canonical_toppersystem_send_allf\" type=\"checkbox\" onclick=\"ChangeCheckToppersystemAllf()\"> <small>" + txtts0 + "</small></div><div class=\"pxdding12\"><div class=\"ftoppersystem\"><span style=\"position:relative; left:-4px;\"><span id=\"add_select_form_toppersystem\" onclick=\"ok_write_language()\">&nbsp</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><small>" + txtts6 + "</small></i></span><br><br><input id=\"keyword_toppersystem_send\" name=\"keyword_toppersystem_send\" type=\"text\" placeholder=\"" + txtts7 + "\" value=\"" + keyword_saved + "\" class=\"inputform_toppersystem\" onclick=\"ok_write_keyword()\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><small>" + txtts6 + "</small></i><br><br></div><div id=\"view_intelligence_artificial_toppersystem\" class=\"" + class_view_intelligence_artificial_toppersystem + "\"><input id=\"check_text_ia_toppersystem_send\" name=\"check_text_ia_toppersystem_send\" type=\"checkbox\"" + check_text_ia_toppersystem + " class=\"\"> " + txtts70 + "<br><br></div><span onclick=\"request_guidebox_images_ts()\"><span id=\"guideboxts4\" class=\"\">" + txtts31 + "</span>&nbsp;&nbsp;<small><div class=\"pos_menu_images_ts\"><input type=\"radio\" name=\"images_toppersystem_send\" value=\"0\"" + check_images_a + " onclick=\"close_help_images_toppersystem()\"><span class=\"pos_link_sel_images_ts\"><a id=\"images_toppersystem_a\" rel=\"nofollow\" href=\"javascript:help_images_toppersystem('0');\" class=\"menu_images_toppersystem\" title=\"" + txtts32 + "\">" + txtts33 + "</a> </span><input type=\"radio\" name=\"images_toppersystem_send\" value=\"1\"" + check_images_b + " onclick=\"close_help_images_toppersystem()\"><span class=\"pos_link_sel_images_ts\"><a id=\"images_toppersystem_b\" rel=\"nofollow\" href=\"javascript:help_images_toppersystem('1');\" class=\"menu_images_toppersystem\" title=\"" + txtts32 + "\">" + txtts34 + "</a></span> <input id=\"guideboxts3\" type=\"radio\" name=\"images_toppersystem_send\" value=\"2\"" + check_images_c + " onclick=\"close_help_images_toppersystem()\"><span class=\"pos_link_sel_images_ts\"><a id=\"images_toppersystem_c\" rel=\"nofollow\" href=\"javascript:help_images_toppersystem('2');\" class=\"menu_images_toppersystem\" title=\"" + txtts32 + "\">" + txtts35 + "</a></span></small></div><div id=\"box_check_images_a\" onclick=\"close_help_images_toppersystem()\" class=\"display_none_ts\"><i><small>" + txtts36 + "</small></i></div><div id=\"box_check_images_b\" onclick=\"close_help_images_toppersystem()\" class=\"display_none_ts\"><i><small><strong>" + txtts50 + "</strong><br>" + txtts51 + "<br><span class=\"green_ts\">&check;</span> " + txtts52 + "<br><span class=\"green_ts\">&check;</span> " + txtts53 + "<br><span class=\"green_ts\">&check;</span> " + txtts54 + "<br><span class=\"green_ts\">&check;</span> " + txtts55 + "<br><span class=\"green_ts\">&check;</span> " + txtts65 + "</small></i></div><div id=\"box_check_images_c\" onclick=\"close_help_images_toppersystem()\" class=\"display_none_ts\"><i><small><strong>" + txtts56 + "</strong><br>" + txtts57 + "<br><span class=\"green_ts\">&check;</span> " + txtts58 + "<br><span class=\"green_ts\">&check;</span> " + txtts59 + "<br><span class=\"green_ts\">&check;</span> " + txtts60 + "<br><span class=\"green_ts\">&check;</span> " + txtts61 + "<br><span class=\"green_ts\">&check;</span> " + txtts62 + "<br><span class=\"green_ts\">&check;</span> " + txtts63 + "<br><span class=\"green_ts\">&check;</span> " + txtts64 + "<br><span class=\"green_ts\">&check;</span> " + txtts65 + "</small></i></div>&nbsp;&nbsp;<span style=\"white-space: nowrap;\"><span id=\"add_select_form_resolution_images_toppersystem\">&nbsp</span><small> " + txtts68 + "</small>&nbsp;&nbsp;<input id=\"check_stronglazyload_images_toppersystem_send\" name=\"check_stronglazyload_images_toppersystem_send\" type=\"checkbox\"" + check_stronglazyload_images_toppersystem + " class=\"\"><small>" + txtts69 + " Image</small>&nbsp;&nbsp;<input id=\"check_stronglazyload_video_toppersystem_send\" name=\"check_stronglazyload_video_toppersystem_send\" type=\"checkbox\"" + check_stronglazyload_video_toppersystem + " class=\"\"><small>" + txtts69 + " Video</small></span></span><br><br><span id=\"guideboxts5\" class=\"\" tabindex=\"0\">" + txtts47 + "</span> <span id=\"check_defer_toppersystem\"><a rel=\"nofollow\" href=\"javascript:request_load_status_defer_toppersystem();\">" + txtts48 + "</a></span> <small>| <a rel=\"nofollow\" href=\"javascript:goto_exceptions_deferts();\">" + txtts49 + "</a></small><br><br><span id=\"guideboxts6\" class=\"\" tabindex=\"0\">" + txtts66 + "</span> <span id=\"check_cssfiles_toppersystem\"><a rel=\"nofollow\" href=\"javascript:request_load_status_cssfilests_toppersystem();\">" + txtts48 + "</a></span> <small>| <a rel=\"nofollow\" href=\"javascript:goto_exceptions_cssfilests();\">" + txtts49 + "</a></small><br><br><span onclick=\"request_guidebox_norescrive_ts()\"><span id=\"guideboxts7\" class=\"\" tabindex=\"0\">" + txtts10 + "</span>&nbsp;&nbsp;<small><input type=\"radio\" name=\"check_norescrive_toppersystem_send\" value=\"false\"" + check_norescrive_a + " onclick=\"set_norescrive_toppersystem()\">" + txtts11 + "&nbsp;&nbsp;<input type=\"radio\" name=\"check_norescrive_toppersystem_send\" value=\"true\"" + check_norescrive_b + " onclick=\"set_norescrive_toppersystem()\">" + txtts12 + "</small></span><br><br><input id=\"check_privacy_toppersystem_send\" name=\"check_privacy_toppersystem_send\" type=\"checkbox\" onclick=\"ok_write_privacy()\" class=\"\"> <small><spam id=\"false_norescrive_toppersystem\">" + txtts8 + "</spam><spam id=\"true_norescrive_toppersystem\" class=\"display_none_ts\">" + txtts9 + "</spam></small><br><br><span id=\"end_focus_mode_ts\" tabindex=\"0\"><a rel=\"nofollow\" id=\"go_all_toppersystem_send\" class=\"button-primary white_color_toppersystem\" href=\"javascript:SendProcessAllToppersystem();\">" + txtts1 + "</a></span>&nbsp;&nbsp;<a rel=\"nofollow\" class=\"button-primary white_color_toppersystem\" href=\"javascript:close_events_fast_toppersystem();\">" + txtts2 + "</a>&nbsp;&nbsp;<div id=\"load_toppersystem\" class=\"box_loader_toppersystem display_none_ts\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;<span class=\"statusload_toppersystem\"><small>" + txtts3 + "</small></span></div><span id=\"endrequest_toppersystem\" class=\"endrequest_toppersystem display_none_ts\">&nbsp;</span><input id=\"tot_send_ts\" type=\"hidden\" name=\"tot_send_ts\" value=\"0\"><input id=\"n_send_ts\" type=\"hidden\" name=\"n_send_ts\" value=\"0\"><input id=\"focus_mode_ts\" type=\"hidden\" name=\"focus_mode_ts\" value=\"1\"><input id=\"sending_mode_ts\" type=\"hidden\" name=\"sending_mode_ts\" value=\"0\"><input id=\"checkurl_mode_ts\" type=\"hidden\" name=\"checkurl_mode_ts\" value=\"0\"><input id=\"sendoptimization_results_good_ts\" type=\"hidden\" name=\"sendoptimization_results_good_ts\" value=\"0\"><input id=\"sendoptimization_results_bad_ts\" type=\"hidden\" name=\"sendoptimization_results_bad_ts\" value=\"0\"></div>";    
                } else {
                    responseTextOk="No data";
					gotoanalitycspage=0;
                }
         
                document.getElementById('stxle_request_events_all_toppersystem').innerHTML= responseTextOk.trim();
				
				if(gotoanalitycspage == "1"){
                    var myParent = document.getElementById('add_select_form_toppersystem');

                    var array = [
                        [txtts5, ''],
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
                        if(array[i][1] == language_saved){
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
                    //selectList2.className = "inputform_resolution_toppersystem";
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

					setTimeout("request_load_status_pages_toppersystem()", 80);
                    setTimeout("request_load_status_defer_toppersystem()", 100);
					setTimeout("request_load_status_cssfilests_toppersystem()", 120);
                    setTimeout("set_norescrive_toppersystem()", 140);

                    if(document.getElementById('idguideboxnow_toppersystem')){
                        if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "1"){
                            document.getElementById('guideboxts1').className="link_loader_toppersystem guidebox_selected_ts";
                            document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem guidebox_selected_ts";
                        }
                    }
				}
			}
		}else{

		}
	}
}

function close_and_open_events_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_toppersystem')){
			var screen = document.getElementById("render_events_toppersystem");
			document.body.removeChild(screen);
			setTimeout("StartProcessWhileToppersystem()", 80);
           
            if(document.getElementById('idguideboxnow_toppersystem')){
                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "1"){
                    document.getElementById('idguideboxnow_toppersystem').value="2";
                    setTimeout("back_guide_toppersystem()", 20);
                }
            }
          
		}
	}
}

function start_update_url_toppersystem()
{
	if(ControllerFunction2() == true){
		document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem display_none_ts";
		document.getElementById('load_toppersystem_box_list').className="box_loader_toppersystem";
		setTimeout("start_update_url_toppersystem2()", 80);
	}
}

function start_update_url_toppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('display_pages_menu_toppersystem'))&&(document.getElementById('updateurl_req_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('display_pages_menu_toppersystem').innerHTML.trim() != "")&&(document.getElementById('updateurl_req_toppersystem').value.trim() != "")){

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
										newtxt = http.responseText.trim().replace(/nmaxcanonical_toppersystem/, '');
										if(http.responseText.trim() != newtxt) {
											document.getElementById('display_pages_menu_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());
											document.getElementById('stxle_request_events_all_toppersystem').innerHTML="<table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table>";
											setTimeout("close_and_open_events_toppersystem()", 1600);
										}else{
											document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem";
											document.getElementById('load_toppersystem_box_list').className="box_loader_toppersystem display_none_ts";
											alert(decode_html_toppersystem(http.responseText.trim()));
										}
										
									}else{
										document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem";
										document.getElementById('load_toppersystem_box_list').className="box_loader_toppersystem display_none_ts";
									}

                                    if(document.getElementById('idguideboxnow_toppersystem')){
                                        if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                            if(document.getElementById('menu_events_all_toppersystem')){
                                                setTimeout("Go1fromMenuGuideToppersystem()", 20);
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
                            var params = "action=componentstoppersystem29ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&pages_menu_toppersystem=" + encodeURIComponent(document.getElementById('display_pages_menu_toppersystem').innerHTML.trim()) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							document.getElementById('link_toppersystem_update_list_url').className="box_loader_toppersystem";
							document.getElementById('load_toppersystem_box_list').className="box_loader_toppersystem display_none_ts";							
							alert(txtts0);
						}
					}
				}		
			}

		}else{

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
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
										setTimeout("ForceDownloadProcessGuideCPT3oppersystem()", 1200);

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
							var params = "action=componentstoppersystem6ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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

                            if(document.getElementById('idguideboxnow_toppersystem')){
                                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                    if((parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "17") || (parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "18")){
                                        document.getElementById('idguideboxnow_toppersystem').value=14;
                                        setTimeout("back_guide_toppersystem()", 20);
                                    }
                                }
                            }
						}
					}
				}		
			}

		}else{

		}
	}
}

function close_events_all_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_all_toppersystem')){
			var screen = document.getElementById("render_events_all_toppersystem");
			document.body.removeChild(screen);

            if(document.getElementById('idguideboxnow_toppersystem')){
                if((parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "15") || (parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "16")){
                    document.getElementById('idguideboxnow_toppersystem').value="13";
                    setTimeout("back_guide_toppersystem()", 20);
                }

                if((parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "17") || (parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "18")){
                    document.getElementById('idguideboxnow_toppersystem').value="14";
                    setTimeout("back_guide_toppersystem()", 20);
                }

                if((parseFloat(document.getElementById('idguideboxnow_toppersystem').value) >= "19") && (parseFloat(document.getElementById('idguideboxnow_toppersystem').value) <= "29")){
                    document.getElementById('idguideboxnow_toppersystem').value="15";
                    setTimeout("back_guide_toppersystem()", 20);
                }
            }
		}
	}
}

function current_events_load_toppersystem()
{
	if(ControllerFunction2() == true){

        if((document.getElementById('box_general_request_events_toppersystem'))&&(document.getElementById('box_page_request_events_toppersystem'))&&(document.getElementById('events_req_exceptions_aspm_toppersystem'))){        
			
			if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('box_exceptions_request_events_toppersystem'))){
				
				if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('box_exceptions_request_events_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());
                                            setTimeout("ForceExceptionsProcessGuideCPT2oppersystem()", 20);
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
                                var params = "action=componentstoppersystem26ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
								if(document.getElementById('render_events_all_toppersystem')){
									var screen = document.getElementById("render_events_all_toppersystem");
									document.body.removeChild(screen);
								}
								alert(txtts0);

                                if(document.getElementById('idguideboxnow_toppersystem')){
                                    if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                        if((parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "15") || (parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "16")){
                                            document.getElementById('idguideboxnow_toppersystem').value=13;
                                            setTimeout("back_guide_toppersystem()", 20);
                                        }
                                    }
                                }

							}
						}
					}			
				}

			}else{

			}			
		    
        }
	}
}

function current_events_toppersystem()
{
	if(ControllerFunction2() == true){

        if((document.getElementById('box_general_request_events_toppersystem'))&&(document.getElementById('box_page_request_events_toppersystem'))){
        
            document.getElementById('box_general_request_events_toppersystem').className="display_none_ts";  
            document.getElementById('box_page_request_events_toppersystem').className="";

            if(document.getElementById('idguideboxnow_toppersystem')){
                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if((parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "15")||(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "16")){
                        document.getElementById('guideboxts14').className="marginrxghtl16 vertxcall4";
                    }
                }
            }

			setTimeout("current_events_load_toppersystem()", 2);	    
        }
	}
}

function all_events_toppersystem()
{
	if(ControllerFunction2() == true){

        if((document.getElementById('box_general_request_events_toppersystem'))&&(document.getElementById('box_page_request_events_toppersystem'))){
        
            document.getElementById('box_general_request_events_toppersystem').className="";  
            document.getElementById('box_page_request_events_toppersystem').className="display_none_ts";

            if(document.getElementById('idguideboxnow_toppersystem')){
                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                    if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "15"){
                        document.getElementById('guideboxts12').className="marginrxghtl16 vertxcall4";
                    }else{
                        setTimeout("ForceProcessGuideCPT2oppersystem()", 1200);
                    }                                              

                }
            }

        }
	}
}

function request_events_all_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "13"){
                                                    document.getElementById('idguideboxnow_toppersystem').value="16";
                                                    setTimeout("go_guide_toppersystem()", 800);
                                                }else{
                                                    setTimeout("ForceProcessGuideCPT3oppersystem()", 1200);                                                
                                                }
                                            }
                            
											document.getElementById('request_events_all_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());
                                            setTimeout("all_events_toppersystem()", 2);
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
							var params = "action=componentstoppersystem4ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_all_toppersystem')){

								var screen = document.getElementById("render_events_all_toppersystem");
								document.body.removeChild(screen);
							}
							alert(txtts0);

                            if(document.getElementById('idguideboxnow_toppersystem')){
                                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                    if((parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "17") || (parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "18")){
                                        document.getElementById('idguideboxnow_toppersystem').value=14;
                                        setTimeout("back_guide_toppersystem()", 20);
                                    }
                                }
                            }
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
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
            var txtts2;

            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Download";
                txtts2="Elenco delle attivit&agrave; Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="تحميل";
                txtts2="قائمة أنشطة نظام Topper";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Herunterladen";
                txtts2="Liste der Topper Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Descargar";
                txtts2="Lista de actividades del Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Télécharger";
                txtts2="Liste des activités du Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="डाउनलोड";
                txtts2="टॉपर सिस्टम गतिविधियों की सूची";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="ダウンロード";
                txtts2="トッパーシステムアクティビティのリスト";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Pobierz";
                txtts2="Lista działań Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Baixar";
                txtts2="Lista de atividades do Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="скачать";
                txtts2="Список действий системы Topper";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="下载";
                txtts2="Topper系统活动列表";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="הורדה";
                txtts2="רשימת פעילויות מערכת טופר";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Download";
                txtts2="Index Topper System<sup> SEO</sup> actiones";
            }else{
                txtts0="Close";
                txtts1="Download";
                txtts2="List of Topper System<sup> SEO</sup> activities";
            }

            var render_guide_toppersystem="";
            if(document.getElementById('idguideboxnow_toppersystem')){
                render_guide_toppersystem="<a id=\"id_guide_ts3\" class=\"decoration_none marginrxghtl16 vertxcall4\" href=\"javascript:StartProcessGuideCPT3oppersystem();\"><small><span class=\"pos_opera_all2\" title=\"\">&nbsp;<strong>i</strong>&nbsp;</span></small></a>";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_all_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts2 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a id=\"guideboxts16\" class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:download_events_toppersystem();\">" + txtts1 + "</a>&nbsp;" + render_guide_toppersystem + "<a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_all_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_all_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div><div id=\"guideresponsets3\" class=\"\">&nbsp;</div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_all_toppersystem()", 20);
         }
      }
   }
}

function delete_exception_aspmts(req)
{
	if((ControllerFunction2() == true)&&(req != "")){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('box_page_request_events_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
										setTimeout("current_events_load_toppersystem()", 2);
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
                            var params = "action=componentstoppersystem28ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&req=" + encodeURIComponent(req);
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
							if(document.getElementById('render_events_all_toppersystem')){
								//var screen = document.getElementById("render_events_all_toppersystem");
								//document.body.removeChild(screen);
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

function save_exception_aspmts()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_aspmts_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_aspmts_toppersystem").className="";
		setTimeout("save_exception_aspmts2()", 2);
	}
}

function save_exception_aspmts2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('box_page_request_events_toppersystem'))&&(document.getElementById('ip_aspmts_save'))&&(document.getElementById('page_aspmts_save'))&&(document.getElementById('useragent_aspmts_save'))&&(document.getElementById('servername_aspmts_save'))&&(document.getElementById('ipservername_aspmts_save'))&&(document.getElementById('value_ts'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if((document.getElementById('value_ts').value.trim() != "")&&((document.getElementById("ip_aspmts_save").checked == true)||(document.getElementById("page_aspmts_save").checked == true)||(document.getElementById("useragent_aspmts_save").checked == true)||(document.getElementById("servername_aspmts_save").checked == true)||(document.getElementById("ipservername_aspmts_save").checked == true))){  

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
                                        document.getElementById("block_save_details_aspmts_toppersystem").className="";
                                        document.getElementById("block_save_details_loading_aspmts_toppersystem").className="display_none_ts";
										if(http.responseText.trim() == "ok") {
											document.getElementById('value_ts').value = "";
											document.getElementById('ip_aspmts_save').checked = false;
											document.getElementById('page_aspmts_save').checked = false;
											document.getElementById('useragent_aspmts_save').checked = false;
											document.getElementById('servername_aspmts_save').checked = false;
											document.getElementById('ipservername_aspmts_save').checked = false;
											setTimeout("current_events_load_toppersystem()", 2);
										}else{
											alert(http.responseText.trim());
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
                                var params = "action=componentstoppersystem27ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&value_ts=" + encodeURIComponent(document.getElementById('value_ts').value) + "&ip_aspmts_save=" + document.getElementById('ip_aspmts_save').checked + "&page_aspmts_save=" + document.getElementById('page_aspmts_save').checked + "&useragent_aspmts_save=" + document.getElementById('useragent_aspmts_save').checked + "&servername_aspmts_save=" + document.getElementById('servername_aspmts_save').checked + "&ipservername_aspmts_save=" + document.getElementById('ipservername_aspmts_save').checked;
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
                                document.getElementById("block_save_details_aspmts_toppersystem").className="";
                                document.getElementById("block_save_details_loading_aspmts_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}
				}else{
					var hreflang_toppersystemx=document.getElementById('hreflang_toppersystem').value.trim();                            
					var txtts0x;
					if(hreflang_toppersystemx == "it"){    
					   txtts0x="Il form non è compilato correttamente";
					}else if(hreflang_toppersystemx == "ar"){ 
					   txtts0x="لم يتم ملء النموذج بشكل صحيح";
					}else if(hreflang_toppersystemx == "de"){ 
					   txtts0x="Das Formular ist nicht korrekt ausgefüllt";
					}else if(hreflang_toppersystemx == "es"){ 
					   txtts0x="El formulario no se completó correctamente";
					}else if(hreflang_toppersystemx == "fr"){ 
					   txtts0x="Le formulaire n'est pas correctement rempli";
					}else if(hreflang_toppersystemx == "hi"){ 
					   txtts0x="फॉर्म सही तरीके से नहीं भरा गया है";
					}else if(hreflang_toppersystemx == "ja"){ 
					   txtts0x="フォームが正しく入力されていません";
					}else if(hreflang_toppersystemx == "pl"){ 
					   txtts0x="Formularz nie jest poprawnie wypełniony";
					}else if(hreflang_toppersystemx == "pt"){ 
					   txtts0x="O formulário não foi preenchido corretamente";
					}else if(hreflang_toppersystemx == "ru"){ 
					   txtts0x="Форма заполнена неправильно";
					}else if(hreflang_toppersystemx == "zh"){ 
					   txtts0x="表格未正确填写";
					}else if(hreflang_toppersystemx == "he"){ 
					   txtts0x="הטופס לא מולא כראוי";
					}else if(hreflang_toppersystemx == "la"){ 
					   txtts0x="Et ex species non recte repleti";
					}else{   
					   txtts0x="The form is not correctly filled out";
					}
                    document.getElementById("block_save_details_aspmts_toppersystem").className="";
                    document.getElementById("block_save_details_loading_aspmts_toppersystem").className="display_none_ts";				
					alert(txtts0x);
					
				}
			}

		}else{

		}
		
	}

}

function request_events_aspm_all_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "12"){
                                                    document.getElementById('idguideboxnow_toppersystem').value="14";
                                                    setTimeout("go_guide_toppersystem()", 800);
                                                }
                                            }
                               
											document.getElementById('request_events_all_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());  
											setTimeout("all_events_toppersystem()", 2);       
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
                            var params = "action=componentstoppersystem25ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_all_toppersystem')){

								var screen = document.getElementById("render_events_all_toppersystem");
								document.body.removeChild(screen);
                                if(document.getElementById('idguideboxnow_toppersystem')){
                                    if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "15"){
                                        document.getElementById('idguideboxnow_toppersystem').value="13";
                                        setTimeout("back_guide_toppersystem()", 20);
                                    }
                                }

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

function events_aspm_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
            var txtts2;
			var txtts3;
			var txtts4;
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Download";
                txtts2="Aspm TS - Antispam integrato Topper System<sup> SEO</sup>";
				txtts3="Attività";
				txtts4="Eccezioni";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="تحميل";
                txtts2="Aspm TS - نظام ممتاز لمكافحة البريد العشوائي";
				txtts3="سجل";
				txtts4="الاستثناءات";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Herunterladen";
                txtts2="Aspm TS - Integriertes Antispam-Topper-System<sup> SEO</sup>";
				txtts3="Log";
				txtts4="Ausnahmen";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Descargar";
                txtts2="Aspm TS - Sistema integrado de protección contra correo no deseado";
				txtts3="Iniciar sesión";
				txtts4="Excepciones";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Télécharger";
                txtts2="Aspm TS - Système antispam Topper intégré";
				txtts3="Journal";
				txtts4="Des exceptions";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="डाउनलोड";
                txtts2="एस्पम टीएस - इंटीग्रेटेड एंटीस्पैम टॉपर सिस्टम";
				txtts3="लॉग";
				txtts4="अपवाद";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="ダウンロード";
                txtts2="Aspm TS-統合スパム対策トッパーシステム";
				txtts3="ログ";
				txtts4="例外";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Pobierz";
                txtts2="Aspm TS - Zintegrowany system usuwania spamu";
				txtts3="Log";
				txtts4="Wyjątki";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Baixar";
                txtts2="Aspm TS - Sistema integrado de proteção antispam";
				txtts3="Registro";
				txtts4="Exceções";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="скачать";
                txtts2="Aspm TS - интегрированная система защиты от спама";
				txtts3="Журнал";
				txtts4="Исключения";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="下载";
                txtts2="Aspm TS-集成的反垃圾邮件礼帽系统";
				txtts3="记录";
				txtts4="例外情况";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="הורדה";
                txtts2="Aspm TS - מערכת טופר אנטי ספאם משולבת";
				txtts3="עֵץ";
				txtts4="חריגים";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Download";
                txtts2="Aspm TS - Ratio Integrated Antispam Topper";
				txtts3="Iniuriarum";
				txtts4="Exceptiones";
            }else{
                txtts0="Close";
                txtts1="Download";
                txtts2="Aspm TS - Integrated Antispam Topper System<sup> SEO</sup>";
				txtts3="Log";
				txtts4="Exceptions";
            }

            var render_guide_toppersystem="";
            if(document.getElementById('idguideboxnow_toppersystem')){
                render_guide_toppersystem="<a id=\"id_guide_ts2\" class=\"decoration_none marginrxghtl16 vertxcall4\" href=\"javascript:StartProcessGuideCPT2oppersystem();\"><small><span class=\"pos_opera_all2\" title=\"\">&nbsp;<strong>i</strong>&nbsp;</span></small></a>";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_all_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts2 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a id=\"guideboxts12\" class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:all_events_toppersystem();\">" + txtts3 + "</a>&nbsp<a id=\"guideboxts14\" class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:current_events_toppersystem();\">" + txtts4 + "</a>&nbsp" + render_guide_toppersystem + "<a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_all_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_all_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div><div id=\"guideresponsets2\" class=\"\">&nbsp;</div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_aspm_all_toppersystem()", 20);
         }
      }
   }
}

function goto_exceptions_aspmts()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('events_management_req_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){				
				var screen = document.getElementById("render_events_all_toppersystem");
				document.body.removeChild(screen);				
				setTimeout("events_aspm_toppersystem()", 20);
                setTimeout("current_events_toppersystem()", 1600);			
			}

		}else{

		}
	}
}

function close_events_co2application_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_co2application_toppersystem')){
			var screen = document.getElementById("render_events_co2application_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function request_events_co2application_setting_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_co2application_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_co2application_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_co2application_toppersystem')){
                                                        setTimeout("GoInt25fromMenuGuideToppersystem()", 20);
                                                    }
                                                }
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
							var params = "action=componentstoppersystem12ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_co2application_toppersystem')){
								var screen = document.getElementById("render_events_co2application_toppersystem");
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

function events_co2application_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="CO2 Application TS - Settaggio";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="CO2 Application TS - جلسة";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="CO2 Application TS - Einstellung";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="CO2 Application TS - Ajuste";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="CO2 Application TS - Réglage";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="CO2 Application TS - स्थापना";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="CO2 Application TS - 設定";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="CO2 Application TS - Ustawienie";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="CO2 Application TS - Contexto";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="CO2 Application TS - Параметр";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="CO2 Application TS - 环境";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="CO2 Application TS - הגדרה";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="CO2 Application TS - Occasum";
            }else{
                txtts0="Close";
                txtts1="CO2 Application TS - Setting";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_co2application_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_co2application_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_co2application_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_co2application_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_exceptions_co2application()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('events_management_req_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_co2application_toppersystem()", 20);		
			}

		}else{

		}
	}
}

function save_events_co2application_toppersystem()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_co2application_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_co2application_toppersystem").className="";
		setTimeout("save_events_co2application_toppersystem2()", 2);
	}
}

function save_events_co2application_toppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('co2application_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if(document.querySelector('input[name="pos_sel_co2application_toppersystem_send"]:checked')){  
					check_pos_co2application=document.querySelector('input[name="pos_sel_co2application_toppersystem_send"]:checked').value.trim();
					
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
                                        document.getElementById("block_save_details_co2application_toppersystem").className="";
                                        document.getElementById("block_save_details_loading_co2application_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
											alert(decode_html_toppersystem(http.responseText.trim()));
                                            setTimeout("close_events_co2application_toppersystem()", 2);
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
							    var params = "action=componentstoppersystem14ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&save_pos_co2application_toppersystem=" + check_pos_co2application;
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
                                document.getElementById("block_save_details_co2application_toppersystem").className="";
                                document.getElementById("block_save_details_loading_co2application_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}					
				}
			}

		}else{

		}
		
	}

}

function close_events_autoupdatetimes_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_autoupdatetimes_toppersystem')){
			var screen = document.getElementById("render_events_autoupdatetimes_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function request_events_autoupdatetimes_setting_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_autoupdatetimes_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_autoupdatetimes_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_autoupdatetimes_toppersystem')){
                                                        setTimeout("GoInt28fromMenuGuideToppersystem()", 20);
                                                    }
                                                }
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
							var params = "action=componentstoppersystem45ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_autoupdatetimes_toppersystem')){
								var screen = document.getElementById("render_events_autoupdatetimes_toppersystem");
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

function events_autoupdatetimes_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Aggiornamento automatico TS - Settaggio";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="تحديث أوتوماتيكي TS - جلسة";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Automatisches Update TS - Einstellung";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Actualización automática TS - Ajuste";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Mise à jour automatique TS - Réglage";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="स्वचालित अपडेट TS - स्थापना";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="自動更新 TS - 設定";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Automatyczna aktualizacja TS - Ustawienie";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Atualização automática TS - Contexto";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Автоматическое обновление TS - Параметр";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="自动更新 TS - 环境";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="עדכון אוטומטי TS - הגדרה";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Lorem update TS - Occasum";
            }else{
                txtts0="Close";
                txtts1="Automatic update TS - Setting";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_autoupdatetimes_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_autoupdatetimes_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_autoupdatetimes_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_autoupdatetimes_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_exceptions_autoupdatetimes()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('events_management_req_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_autoupdatetimes_toppersystem()", 20);		
			}

		}else{

		}
	}
}

function save_events_autoupdatetimes_toppersystem()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_autoupdatetimes_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_autoupdatetimes_toppersystem").className="";
		setTimeout("save_events_autoupdatetimes_toppersystem2()", 2);
	}
}

function save_events_autoupdatetimes_toppersystem2()
{
	if(ControllerFunction2() == true){
	if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('pos_sel_autoupdatetimes1_toppersystem_send'))&&(document.getElementById('pos_sel_autoupdatetimes2_toppersystem_send'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if((document.getElementById('pos_sel_autoupdatetimes1_toppersystem_send').value.trim() != "")&&(document.getElementById('pos_sel_autoupdatetimes2_toppersystem_send').value.trim() != "")){  
					var pos_sel_autoupdatetimes1_toppersystem_send=document.getElementById('pos_sel_autoupdatetimes1_toppersystem_send').value.trim();
                    var pos_sel_autoupdatetimes2_toppersystem_send=document.getElementById('pos_sel_autoupdatetimes2_toppersystem_send').value.trim();
					
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
                                        document.getElementById("block_save_details_autoupdatetimes_toppersystem").className="";
                                        document.getElementById("block_save_details_loading_autoupdatetimes_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
											alert(decode_html_toppersystem(http.responseText.trim()));
                                            setTimeout("close_events_autoupdatetimes_toppersystem()", 2);
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
							    var params = "action=componentstoppersystem46ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&pos_sel_autoupdatetimes1_toppersystem_send=" + encodeURIComponent(pos_sel_autoupdatetimes1_toppersystem_send) + "&pos_sel_autoupdatetimes2_toppersystem_send=" + encodeURIComponent(pos_sel_autoupdatetimes2_toppersystem_send);
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
                                document.getElementById("block_save_details_autoupdatetimes_toppersystem").className="";
                                document.getElementById("block_save_details_loading_autoupdatetimes_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}					
				}
			}
		}else{

		}		
	}
}

function close_events_lazyloadingts_toppersystem()
{
	if(ControllerFunction2() == true){	
		if(document.getElementById('render_events_lazyloadingts_toppersystem')){
			var screen = document.getElementById("render_events_lazyloadingts_toppersystem");
			document.body.removeChild(screen);
		}
	}
}

function request_events_lazyloadingts_setting_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_lazyloadingts_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){

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
											document.getElementById('request_events_lazyloadingts_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());

                                            if(document.getElementById('idguideboxnow_toppersystem')){
                                                if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                                                    if(document.getElementById('render_events_all_toppersystem')){
                                                        setTimeout("GoInt23fromMenuGuideToppersystem()", 20);
                                                    }
                                                }
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
							var params = "action=componentstoppersystem15ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_lazyloadingts_toppersystem')){
								var screen = document.getElementById("render_events_lazyloadingts_toppersystem");
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

function events_lazyloadingts_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
			
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Smart Image Lazy-Loading TS - Settaggio";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="Smart Image Lazy-Loading TS - جلسة";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Smart Image Lazy-Loading TS - Einstellung";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Smart Image Lazy-Loading TS - Ajuste";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Smart Image Lazy-Loading TS - Réglage";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="Smart Image Lazy-Loading TS - स्थापना";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="Smart Image Lazy-Loading TS - 設定";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Smart Image Lazy-Loading TS - Ustawienie";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Smart Image Lazy-Loading TS - Contexto";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Smart Image Lazy-Loading TS - Параметр";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="Smart Image Lazy-Loading TS - 环境";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="Smart Image Lazy-Loading TS - הגדרה";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Smart Image Lazy-Loading TS - Occasum";
            }else{
                txtts0="Close";
                txtts1="Smart Image Lazy-Loading TS - Setting";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_lazyloadingts_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_lazyloadingts_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_lazyloadingts_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_lazyloadingts_setting_toppersystem()", 20);
         }
      }
   }
}

function goto_exceptions_lazyloadingts()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('events_management_req_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){
				setTimeout("events_lazyloadingts_toppersystem()", 20);		
			}

		}else{

		}
	}
}

function save_events_lazyloadingts_toppersystem()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_details_lazyloadingts_toppersystem").className="display_none_ts";
        document.getElementById("block_save_details_loading_lazyloadingts_toppersystem").className="";
		setTimeout("save_events_lazyloadingts_toppersystem2()", 2);
	}
}

function save_events_lazyloadingts_toppersystem2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('wpcron_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if(document.querySelector('input[name="pos_sel_lazyloadingts_toppersystem_send"]:checked')){  
					check_pos_lazyloadingts=document.querySelector('input[name="pos_sel_lazyloadingts_toppersystem_send"]:checked').value.trim();
					
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
                                        document.getElementById("block_save_details_lazyloadingts_toppersystem").className="";
                                        document.getElementById("block_save_details_loading_lazyloadingts_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
											alert(decode_html_toppersystem(http.responseText.trim()));
                                            setTimeout("close_events_lazyloadingts_toppersystem()", 2);
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
							    var params = "action=componentstoppersystem17ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&save_pos_lazyloadingts_toppersystem=" + check_pos_lazyloadingts;
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
                                document.getElementById("block_save_details_lazyloadingts_toppersystem").className="";
                                document.getElementById("block_save_details_loading_lazyloadingts_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}					
				}
			}
		}else{

		}		
	}
}

function save_status_wpcron()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_wpcron_toppersystem").className="display_none_ts";
        document.getElementById("block_save_loading_wpcron_toppersystem").className="";
		setTimeout("save_status_wpcron2()", 2);
	}
}

function save_status_wpcron2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('wpcron_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if((document.getElementById("wpcron_service_save").checked == true)||(document.getElementById("wpcron_service_save").checked == false)){  

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
                                        document.getElementById("block_save_wpcron_toppersystem").className="";
                                        document.getElementById("block_save_loading_wpcron_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
											alert(decode_html_toppersystem(http.responseText.trim()));
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
							    var params = "action=componentstoppersystem19ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&wpcron_service_save=" + document.getElementById('wpcron_service_save').checked;
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
                                document.getElementById("block_save_wpcron_toppersystem").className="";
                                document.getElementById("block_save_loading_wpcron_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}
				}
			}

		}else{

		}		
	}
}

function save_status_co2application()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_co2application_toppersystem").className="display_none_ts";
        document.getElementById("block_save_loading_co2application_toppersystem").className="";
		setTimeout("save_status_co2application2()", 2);
	}
}

function save_status_co2application2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('co2application_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if((document.getElementById("co2application_service_save").checked == true)||(document.getElementById("co2application_service_save").checked == false)){  

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
                                        document.getElementById("block_save_co2application_toppersystem").className="";
                                        document.getElementById("block_save_loading_co2application_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
                                            var text_result_ts=decode_html_toppersystem(http.responseText.trim());

											var text_result_ts_true = text_result_ts.trim().replace('code1tsresp', ''); 
                                            var text_result_ts_false = text_result_ts.trim().replace('code0tsresp', ''); 
                               
											if(text_result_ts != text_result_ts_true){                                
												text_result_ts=text_result_ts_true.trim();
                                                document.getElementById("look_link_toppersystem_goto_exceptions_co2application").className="";
                                                document.getElementById("nolook_link_toppersystem_goto_exceptions_co2application").className="colorgreytext_toppersystem display_none_ts";                 
											}else if(text_result_ts != text_result_ts_false){                                
												text_result_ts=text_result_ts_false.trim();
                                                document.getElementById("look_link_toppersystem_goto_exceptions_co2application").className="display_none_ts";
                                                document.getElementById("nolook_link_toppersystem_goto_exceptions_co2application").className="colorgreytext_toppersystem";
											}else{
                                                //npt
                                            }

											alert(text_result_ts);
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
							    var params = "action=componentstoppersystem20ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&co2application_service_save=" + document.getElementById('co2application_service_save').checked;
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
                                document.getElementById("block_save_co2application_toppersystem").className="";
                                document.getElementById("block_save_loading_co2application_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}
				}
			}

		}else{

		}
		
	}

}

function save_status_lazyloadingts()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_smartlazyloadts_toppersystem").className="display_none_ts";
        document.getElementById("block_save_loading_smartlazyloadts_toppersystem").className="";        
		setTimeout("save_status_lazyloadingts2()", 2);
	}
}

function save_status_lazyloadingts2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('smartlazyloadts_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if((document.getElementById("smartlazyloadts_service_save").checked == true)||(document.getElementById("smartlazyloadts_service_save").checked == false)){  

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
                                        document.getElementById("block_save_smartlazyloadts_toppersystem").className="";
                                        document.getElementById("block_save_loading_smartlazyloadts_toppersystem").className="display_none_ts"; 
										if(http.responseText.trim() != ""){
                                            var text_result_ts=decode_html_toppersystem(http.responseText.trim());

											var text_result_ts_true = text_result_ts.trim().replace('code1tsresp', ''); 
                                            var text_result_ts_false = text_result_ts.trim().replace('code0tsresp', ''); 
                               
											if(text_result_ts != text_result_ts_true){                                
												text_result_ts=text_result_ts_true.trim();
                                                document.getElementById("look_link_toppersystem_goto_exceptions_lazyloadingts").className="";
                                                document.getElementById("nolook_link_toppersystem_goto_exceptions_lazyloadingts").className="colorgreytext_toppersystem display_none_ts";                 
											}else if(text_result_ts != text_result_ts_false){                                
												text_result_ts=text_result_ts_false.trim();
                                                document.getElementById("look_link_toppersystem_goto_exceptions_lazyloadingts").className="display_none_ts";
                                                document.getElementById("nolook_link_toppersystem_goto_exceptions_lazyloadingts").className="colorgreytext_toppersystem";
											}else{
                                                //npt
                                            }

											alert(text_result_ts);
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
							    var params = "action=componentstoppersystem21ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&smartlazyloadts_service_save=" + document.getElementById('smartlazyloadts_service_save').checked;
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
                                document.getElementById("block_save_smartlazyloadts_toppersystem").className="";
                                document.getElementById("block_save_loading_smartlazyloadts_toppersystem").className="display_none_ts"; 
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}
				}
			}

		}else{

		}
		
	}
}

function save_status_autoupdate()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_autoupdate_toppersystem").className="display_none_ts";
        document.getElementById("block_save_loading_autoupdate_toppersystem").className="";
		setTimeout("save_status_autoupdate2()", 2);
	}
}

function save_status_autoupdate2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('autoupdate_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if((document.getElementById("autoupdate_service_save").checked == true)||(document.getElementById("autoupdate_service_save").checked == false)){  

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
                                        document.getElementById("block_save_autoupdate_toppersystem").className="";
                                        document.getElementById("block_save_loading_autoupdate_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
                                            var text_result_ts=decode_html_toppersystem(http.responseText.trim());

											var text_result_ts_true = text_result_ts.trim().replace('code1tsresp', ''); 
                                            var text_result_ts_false = text_result_ts.trim().replace('code0tsresp', ''); 
                               
											if(text_result_ts != text_result_ts_true){                                
												text_result_ts=text_result_ts_true.trim();
                                                document.getElementById("look_link_toppersystem_goto_exceptions_activateautoupdatets").className="";
                                                document.getElementById("nolook_link_toppersystem_goto_exceptions_activateautoupdatets").className="colorgreytext_toppersystem display_none_ts";                 
											}else if(text_result_ts != text_result_ts_false){                                
												text_result_ts=text_result_ts_false.trim();
                                                document.getElementById("look_link_toppersystem_goto_exceptions_activateautoupdatets").className="display_none_ts";
                                                document.getElementById("nolook_link_toppersystem_goto_exceptions_activateautoupdatets").className="colorgreytext_toppersystem";
											}else{
                                                //npt
                                            }

											alert(text_result_ts);
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
							    var params = "action=componentstoppersystem22ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&autoupdate_service_save=" + document.getElementById('autoupdate_service_save').checked;
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
                                document.getElementById("block_save_autoupdate_toppersystem").className="";
                                document.getElementById("block_save_loading_autoupdate_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}
				}
			}

		}else{

		}
		
	}

}

function save_status_cache()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_cache_toppersystem").className="display_none_ts";
        document.getElementById("block_save_loading_cache_toppersystem").className="";        
		setTimeout("save_status_cache2()", 2);
	}
}

function save_status_cache2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('cache_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if((document.getElementById("cache_service_save").checked == true)||(document.getElementById("cache_service_save").checked == false)){  

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
                                        document.getElementById("block_save_cache_toppersystem").className="";
                                        document.getElementById("block_save_loading_cache_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
											alert(decode_html_toppersystem(http.responseText.trim()));
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
							    var params = "action=componentstoppersystem18ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&cache_service_save=" + document.getElementById('cache_service_save').checked;
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
                                document.getElementById("block_save_cache_toppersystem").className="";
                                document.getElementById("block_save_loading_cache_toppersystem").className="display_none_ts";
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}
				}
			}

		}else{

		}
		
	}

}

function save_status_aspmts()
{
	if(ControllerFunction2() == true){
        document.getElementById("block_save_aspmts_toppersystem").className="display_none_ts";
        document.getElementById("block_save_loading_aspmts_toppersystem").className=""; 
		setTimeout("save_status_aspmts2()", 2);
	}
}

function save_status_aspmts2()
{
	if(ControllerFunction2() == true){
		
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('aspmts_service_save'))){
						
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
				
				if((document.getElementById("aspmts_service_save").checked == true)||(document.getElementById("aspmts_service_save").checked == false)){  

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
                                        document.getElementById("block_save_aspmts_toppersystem").className="";
                                        document.getElementById("block_save_loading_aspmts_toppersystem").className="display_none_ts";
										if(http.responseText.trim() != ""){
                                            var text_result_ts=decode_html_toppersystem(http.responseText.trim());

											var text_result_ts_true = text_result_ts.trim().replace('code1tsresp', ''); 
                                            var text_result_ts_false = text_result_ts.trim().replace('code0tsresp', ''); 
                               
											if(text_result_ts != text_result_ts_true){                                
												text_result_ts=text_result_ts_true.trim();
                                                document.getElementById("look_link_toppersystem_goto_exceptions_aspmts").className="";
                                                document.getElementById("nolook_link_toppersystem_goto_exceptions_aspmts").className="colorgreytext_toppersystem display_none_ts";                 
											}else if(text_result_ts != text_result_ts_false){                                
												text_result_ts=text_result_ts_false.trim();
                                                document.getElementById("look_link_toppersystem_goto_exceptions_aspmts").className="display_none_ts";
                                                document.getElementById("nolook_link_toppersystem_goto_exceptions_aspmts").className="colorgreytext_toppersystem";
											}else{
                                                //npt
                                            }

											alert(text_result_ts);
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
							    var params = "action=componentstoppersystem23ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&aspmts_service_save=" + document.getElementById('aspmts_service_save').checked;
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
                                document.getElementById("block_save_aspmts_toppersystem").className="";
                                document.getElementById("block_save_loading_aspmts_toppersystem").className="display_none_ts"; 
								if(document.getElementById('render_events_all_toppersystem')){
									//var screen = document.getElementById("render_events_all_toppersystem");
									//document.body.removeChild(screen);
								}
								alert(txtts0);
							}
						}
					}
				}
			}

		}else{

		}
		
	}

}

function request_events_management_all_toppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('render_events_all_toppersystem'))&&(document.getElementById('events_management_req_toppersystem'))){
		    
			if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")&&(document.getElementById('events_management_req_toppersystem').value.trim() != "")){

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

                                        if(document.getElementById('idguideboxnow_toppersystem')){
                                            if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "14"){
                                                document.getElementById('idguideboxnow_toppersystem').value="18";
                                                setTimeout("go_guide_toppersystem()", 800);
                                            }else{
                                                setTimeout("ForceProcessGuideCPT4oppersystem()", 1200);                                                
                                            }
                                        }
                             
                                        document.getElementById('request_events_all_toppersystem').innerHTML=decode_html_toppersystem(http.responseText.trim());
                                        setTimeout("request_load_status_defer_toppersystem()", 400);
                                        setTimeout("request_load_status_cssfilests_toppersystem()", 800);
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
							var params = "action=componentstoppersystem11ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem0').value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem0').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
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
							if(document.getElementById('render_events_all_toppersystem')){

								var screen = document.getElementById("render_events_all_toppersystem");
								document.body.removeChild(screen);

                                if(document.getElementById('idguideboxnow_toppersystem')){
                                    if(parseFloat(document.getElementById('idguideboxnow_toppersystem').value) == "19"){
                                        document.getElementById('idguideboxnow_toppersystem').value="15";
                                        setTimeout("back_guide_toppersystem()", 20);
                                    }
                                }
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

function events_management_toppersystem() {
   if(ControllerFunction2() == true){
        if((document.getElementById('authcode_toppersystem0'))&&(document.getElementById('canonical_toppersystem0'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
		    
        if((document.getElementById('authcode_toppersystem0').value.trim() != "")&&(document.getElementById('canonical_toppersystem0').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
            if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Servizi supplementari Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="خدمات إضافية نظام توبر";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Zusätzliche Dienstleistungen Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Servicios adicionales Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Services supplémentaires Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="अतिरिक्त सेवाएं टॉपर सिस्टम";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="追加サービストッパーシステム";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Dodatkowe usługi Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Serviços adicionais Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Дополнительные услуги Topper System<sup> SEO</sup>";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="附加服务Topper系统";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="שירותים נוספים מערכת טופר";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Topper additional muneris system";
            }else{
                txtts0="Close";
                txtts1="Additional services Topper System<sup> SEO</sup>";
            }

            var render_guide_toppersystem="";
            if(document.getElementById('idguideboxnow_toppersystem')){
                render_guide_toppersystem="<a id=\"id_guide_ts4\" class=\"decoration_none marginrxghtl16 vertxcall4\" href=\"javascript:StartProcessGuideCPT4oppersystem();\"><small><span class=\"pos_opera_all2\" title=\"\">&nbsp;<strong>i</strong>&nbsp;</span></small></a>";
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_all_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\">" + render_guide_toppersystem + "<a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_all_toppersystem();\">" + txtts0 + "</a></span></div><div id=\"request_events_all_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div><div id=\"guideresponsets4\" class=\"\">&nbsp;</div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_management_all_toppersystem()", 20);
         }
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

function close_help_services_toppersystem(n)
{
	if(ControllerFunction2() == true){
		if(n.toString() != ""){
			if(document.getElementById('box_services_a' + n.toString())){ 
				document.getElementById('box_services_b' + n.toString()).innerHTML="&oplus;";
				document.getElementById('box_services_c' + n.toString()).className="display_none_ts";
				document.getElementById('box_services_a' + n.toString()).onclick=function(){help_services_toppersystem(n)};
			}
		}
	}
}

function help_services_toppersystem(n)
{
	if(ControllerFunction2() == true){
		if(n.toString() != ""){
			if(document.getElementById('box_services_a' + n.toString())){ 
				document.getElementById('box_services_b' + n.toString()).innerHTML="&otimes;";
				document.getElementById('box_services_c' + n.toString()).className="";
				document.getElementById('box_services_a' + n.toString()).onclick=function(){close_help_services_toppersystem(n)};
			}
		}
	}
}

function StartProcessWhileToppersystem()
{
	if(ControllerFunction() == true){
		setTimeout("StartProcessWhileToppersystem2()", 80);
	}
}

function render_view_terms_condictions_toppersystem()
{
	if(ControllerFunction() == true){
		document.getElementById("frame_terms_condictions_toppersystem").className="termsandcondictions_toppersystem";
	}
}

function terms_condictions_toppersystem2(hreflang_toppersystem)
{	
	if(ControllerFunction2() == true){
		
		if((document.getElementById('resend_toppersystem'))&&(document.getElementById('render_terms_and_condictions_toppersystem'))){
		    
			if((document.getElementById('resend_toppersystem').value.trim() != "")&&(hreflang_toppersystem.trim() != "")){
				
				var xhr = new XMLHttpRequest();
                xhr.open('HEAD', ajax_components_toppersystem.url + '?action=componentstoppersystem5ajax&_nonce=' + ajax_components_toppersystem.nonce, true);
				xhr.send();
				xhr.addEventListener("readystatechange", processRequest, false);
				function processRequest(e) {
					if (xhr.readyState == 4) {
						if (xhr.status >= 200 && xhr.status < 304) {
							document.getElementById('stxle_request_terms_condiction_all_toppersystem').innerHTML="<iframe id=\"frame_terms_condictions_toppersystem\" sandbox src=\"" + document.getElementById('idtermsandcondictionslink_toppersystem').value.trim() + "\" width=\"100%\" height=\"100%\" class=\"termsandcondictions_toppersystem_hidden\" onload=\"render_view_terms_condictions_toppersystem()\">" + document.getElementById('idtermsandcondictionslinkweb_toppersystem').value.trim() + "</iframe>";
							
							if(document.getElementById('idguideboxnow_toppersystem')){
								if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
									if(document.getElementById('menu_events_all_toppersystem')){
										setTimeout("Go9fromMenuGuideToppersystem()", 20);
									}
								}
							}							
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
							if(document.getElementById('render_terms_and_condictions_toppersystem')){								
								var screen = document.getElementById("render_terms_and_condictions_toppersystem");
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
			add.setAttribute("id", "render_terms_and_condictions_toppersystem");
            add.setAttribute("class", "events_toppersystem");
			add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><strong>" + txtts1 + "</strong></span><span class=\"mxnu_ok_toppersystem\"><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_terms_and_condictions_toppersystem();\">" + txtts2 + "</a></span></div><div id=\"stxle_request_terms_condiction_all_toppersystem\" class=\"stxle_request_events_terms_condictions_toppersystem\" style=\"overflow-y:hidden;\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div></center>";
			document.body.appendChild(add);
			
			setTimeout("terms_condictions_toppersystem2('" + hreflang_toppersystem + "')", 80);
	    }        

	}
}

function StartProcessWhileToppersystem2()
{
    if(ControllerFunction2() == true){	
        if(!document.getElementById('button_toppersystem')){

            var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
            var txtts0;
            var txtts1;
            var txtts2;
			var txtts3;	
			var txtts4;
            var txtts5;
             if(hreflang_toppersystem == "it"){
                txtts0="Chiudi";
                txtts1="Gestione rapida Topper System<sup> SEO</sup>";
                txtts2="Elenco delle attivit&agrave; di Topper System SEO";
				txtts3="Accesso AspmTS";
				txtts4="Stato dei servizi";
                txtts5="Impostazioni";
            }else if(hreflang_toppersystem == "ar"){
                txtts0="قريب";
                txtts1="إدارة سريعة Topper System<sup> SEO</sup>";
                txtts2="قائمة أنشطة نظام Topper";
				txtts3="الوصول إلى AspmTS";
				txtts4="حالة الخدمات";
                txtts5="إعدادات";
            }else if(hreflang_toppersystem == "de"){
                txtts0="Schließen";
                txtts1="Schnelle Verwaltung Topper System<sup> SEO</sup>";
                txtts2="Liste der Topper Topper System SEO";
				txtts3="Zugriff auf AspmTS";
				txtts4="Status der Dienste";
                txtts5="Einstellungen";
            }else if(hreflang_toppersystem == "es"){
                txtts0="Cerca";
                txtts1="Gestión rápida Topper System<sup> SEO</sup>";
                txtts2="Lista de actividades del Topper System SEO";
				txtts3="AspmTS de acceso";
				txtts4="Estado de los servicios";
                txtts5="Ajustes";
            }else if(hreflang_toppersystem == "fr"){
                txtts0="Proche";
                txtts1="Gestion rapide Topper System<sup> SEO</sup>";
                txtts2="Liste des activités du Topper System SEO<";
				txtts3="Accéder à AspmTS";
				txtts4="Statut des services";
                txtts5="Paramètres";
            }else if(hreflang_toppersystem == "hi"){
                txtts0="पास";
                txtts1="त्वरित प्रबंधन Topper System<sup> SEO</sup>";
                txtts2="टॉपर सिस्टम गतिविधियों की सूची";
				txtts3="AspmTS पर पहुँचें";
				txtts4="सेवाओं की स्थिति";
                txtts5="समायोजन";
            }else if(hreflang_toppersystem == "ja"){
                txtts0="近いです";
                txtts1="迅速な管理Topper System<sup> SEO</sup>";
                txtts2="トッパーシステムアクティビティのリスト";
				txtts3="AspmTSにアクセスする";
				txtts4="サービスの状況";
                txtts5="設定";
            }else if(hreflang_toppersystem == "pl"){
                txtts0="Blisko";
                txtts1="Szybkie zarządzanie Topper System<sup> SEO</sup>";
                txtts2="Lista działań Topper System SEO";
				txtts3="Uzyskaj dostęp do AspmTS";
				txtts4="Status usług";
                txtts5="Ustawienia";
            }else if(hreflang_toppersystem == "pt"){
                txtts0="Perto";
                txtts1="Gerenciamento rápido Topper System<sup> SEO</sup>";
                txtts2="Lista de atividades do Topper System SEO";
				txtts3="Acesse o AspmTS";
				txtts4="Status dos serviços";
                txtts5="Configurações";
            }else if(hreflang_toppersystem == "ru"){
                txtts0="близко";
                txtts1="Быстрое управление Topper System<sup> SEO</sup>";
                txtts2="Список действий системы Topper";
				txtts3="Доступ к AspmTS";
				txtts4="Статус услуг";
                txtts5="Настройки";
            }else if(hreflang_toppersystem == "zh"){
                txtts0="关闭";
                txtts1="快速管理Topper System<sup> SEO</sup>";
                txtts2="Topper System SEO系统活动列表";
				txtts3="存取AspmTS";
				txtts4="服务状况";
                txtts5="设置";
            }else if(hreflang_toppersystem == "he"){
                txtts0="סגירה";
                txtts1="ניהול מהיר Topper System<sup> SEO</sup>";
                txtts2="רשימת פעילויות מערכת טופר";
				txtts3="גישה ל- AspmTS";
				txtts4="מצב השירותים";
                txtts5="הגדרות";
            }else if(hreflang_toppersystem == "la"){
                txtts0="Prope";
                txtts1="Celeri Management Topper System<sup> SEO</sup>";
                txtts2="Index Topper System SEO actiones";
				txtts3="Aditus AspmTS";
				txtts4="Status De officiis";
                txtts5="Occasus";
            }else{
                txtts0="Close";
                txtts1="Quick management Topper System<sup> SEO</sup>";
                txtts2="List of Topper System SEO activities";
				txtts3="Access AspmTS";
				txtts4="Status of services";
                txtts5="Settings";
            }

            var render_contact_email_toppersystem="";
            if(document.getElementById('contact_email_send_toppersystem')){
                render_contact_email_toppersystem=document.getElementById('contact_email_send_toppersystem').value.trim();
            }

            var add = document.createElement("div");
			add.setAttribute("id", "render_events_toppersystem");
            add.setAttribute("class", "events_toppersystem");
            add.innerHTML="<center><div id=\"menu_events_all_toppersystem\" class=\"stxle_menu_events_all_toppersystem\"><span class=\"marginleft16 vertxcall4\"><big><strong>" + txtts1 + "</strong></big></span><span class=\"mxnu_ok_toppersystem\"><a class=\"decoration_none marginrxghtl16 vertxcall4\" href=\"javascript:events_management_toppersystem();\"><small><span id=\"guideboxts11\" class=\"pos_opera_all\" title=\"" + txtts4 + "\">" + txtts5 + " &check;</span></small></a><a class=\"decoration_none marginrxghtl16 vertxcall4\" href=\"javascript:events_toppersystem();\"><small><span id=\"guideboxts10\" class=\"pos_opera_all\" title=\"" + txtts2 + "\">&rlarr;</span></small></a><a class=\"decoration_none marginrxghtl16 vertxcall4\" href=\"javascript:events_aspm_toppersystem();\"><small><span id=\"guideboxts9\" class=\"pos_opera_all\" title=\"" + txtts3 + "\">A</span></small></a><span id=\"guideboxts8\" class=\"\">" + render_contact_email_toppersystem + "</span><a id=\"id_guide_ts\" class=\"decoration_none marginrxghtl16 vertxcall4\" href=\"javascript:StartProcessGuideCPT1oppersystem();\"><small><span class=\"pos_opera_all2\" title=\"\">&nbsp;<strong>i</strong>&nbsp;</span></small></a><a class=\"marginrxghtl16 vertxcall4\" rel=\"nofollow\" href=\"javascript:close_events_fast_toppersystem();\">" + txtts0 + "</a></span><div id=\"status_send_progress\" class=\"status_send_progress display_none_ts\">&nbsp;</div></div><div id=\"stxle_request_events_all_toppersystem\" class=\"stxle_request_events_all_toppersystem\"><table class=\"wait_load_ts\"><tr><td class=\"wait_load_ts\"><div class=\"wait_load_ts\"><div class=\"loader_toppersystem\"></div></div></td></tr></table></div><div id=\"guideresponsets1\" class=\"display_none_ts\">&nbsp;</div></center>";
			document.body.appendChild(add);

            setTimeout("request_events_toppersystem()", 20);
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

function NotSendProcessAllToppersystem()
{
    //niente
}

function StatusOptimizationToppersystem()
{
	if(ControllerFunction2() == true){
        if(document.getElementById('nciclets')){
		    if(document.getElementById('CountCicleStatusOptimizationToppersystem')){			
			    var screen = document.getElementById("CountCicleStatusOptimizationToppersystem");
			    document.body.removeChild(screen);
		    }

		    setTimeout("StatusOptimizationToppersystem2()", 80);
        }
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

        var nciclets_w=document.getElementById('nciclets').value;		
if((document.getElementById('authcode_toppersystem' + nciclets_w.toString()))&&(document.getElementById('canonical_toppersystem' + nciclets_w.toString()))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('status_optimization_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))){	    
			if((document.getElementById('authcode_toppersystem' + nciclets_w.toString()).value.trim() != "")&&(document.getElementById('canonical_toppersystem' + nciclets_w.toString()).value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
			
				var http = new XMLHttpRequest();

				http.onreadystatechange = function() {
                    nciclets_w=document.getElementById('nciclets').value;
			
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
                            document.getElementById('CountCicleStatusOptimizationToppersystem').value="0";
                            document.getElementById('load_toppersystem' + nciclets_w.toString()).className = "box_loader_toppersystem display_none_ts";
                            document.getElementById('n_send_ts').value=document.getElementById('n_send_ts').value - 1;
                            document.getElementById('respons_txt' + nciclets_w.toString()).innerHTML = txtts1.trim();                           						
                            document.getElementById('waitloading_pagets' + nciclets_w.toString()).className = "display_none_ts";
                            setTimeout("SendProcessAllToppersystem2()", 2400);				
						}else{
                            if(parseInt(document.getElementById('CountCicleStatusOptimizationToppersystem').value.trim()) != "NaN"){
                                if(parseInt(document.getElementById('CountCicleStatusOptimizationToppersystem').value.trim()) <= 40){
                                    setTimeout("StatusOptimizationToppersystem2()", 9500);
                                }else{                                    
                                    document.getElementById('CountCicleStatusOptimizationToppersystem').value="0";
                                    document.getElementById('load_toppersystem' + nciclets_w.toString()).className = "box_loader_toppersystem display_none_ts";
                                    document.getElementById('n_send_ts').value=document.getElementById('n_send_ts').value - 1;
                                    document.getElementById('respons_txt' + nciclets_w.toString()).innerHTML = txtts0.trim(); 
                                    document.getElementById('waitloading_pagets' + nciclets_w.toString()).className = "display_none_ts";			
                                    alert(txtts0.trim());
                                    setTimeout("SendProcessAllToppersystem2()", 2400);
                                }
                            }else{
                                document.getElementById('CountCicleStatusOptimizationToppersystem').value="0";
                                document.getElementById('load_toppersystem' + nciclets_w.toString()).className = "box_loader_toppersystem display_none_ts";
                                document.getElementById('n_send_ts').value=document.getElementById('n_send_ts').value - 1;
                                document.getElementById('respons_txt' + nciclets_w.toString()).innerHTML = txtts0.trim();
                                document.getElementById('waitloading_pagets' + nciclets_w.toString()).className = "display_none_ts";		
                                alert(txtts0.trim());
                                setTimeout("SendProcessAllToppersystem2()", 2400);
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
                        document.getElementById('CountCicleStatusOptimizationToppersystem').value="0";
                        document.getElementById('load_toppersystem' + nciclets_w.toString()).className = "box_loader_toppersystem display_none_ts";
                        document.getElementById('n_send_ts').value=document.getElementById('n_send_ts').value - 1;
                        document.getElementById('respons_txt' + nciclets_w.toString()).innerHTML = txtts0.trim();
                        document.getElementById('waitloading_pagets' + nciclets_w.toString()).className = "display_none_ts";			
                        alert(txtts0.trim());
                        setTimeout("SendProcessAllToppersystem2()", 2400);
                    }else{
						if(http.readyState == 1) {
							
						}else if(http.readyState == 2) {

						}else if(http.readyState == 3) {
						
						}else{
							
						}				        
					}
				}
				
                var url = ajax_components_toppersystem.url;
                var params = "action=componentstoppersystem10ajax&_nonce=" + ajax_components_toppersystem.nonce + "&canonical_toppersystem_send=" + encodeURIComponent(document.getElementById('canonical_toppersystem' + nciclets_w.toString()).value) + "&authcode_toppersystem=" + encodeURIComponent(document.getElementById('authcode_toppersystem' + nciclets_w.toString()).value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value);
				http.open("POST", url, true);
				http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				http.send(params);
			}

		}else{
			
		}
	}
}

function StartSendProcessAllToppersystem(){
    if(ControllerFunction2() == true){
        document.getElementById('endrequest_toppersystem').className="endrequest_toppersystem display_none_ts";
    }
}

function EndSendProcessAllToppersystem(){
    if(ControllerFunction2() == true){

        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
        var txtts0; 
        var txtts1;
        var txtts2;         
        if(hreflang_toppersystem == "it"){
	        txtts0="Nessuna richiesta di ottimizzazione è andata a buon fine";
	        txtts1="Non tutte le richieste di ottimizzazione sono andate a buon fine";
	        txtts2="Il processo di ottimizzazione è concluso con successo";
        }else if(hreflang_toppersystem == "ar"){
	        txtts0="لم تكن أية طلبات تحسين ناجحة";
	        txtts1="لم تكن كافة طلبات التحسين ناجحة";
	        txtts2="تم إكمال عملية التحسين بنجاح";
        }else if(hreflang_toppersystem == "de"){
	        txtts0="Keine Optimierungsanfragen waren erfolgreich";
	        txtts1="Nicht alle Optimierungsanfragen waren erfolgreich";
	        txtts2="Der Optimierungsprozess ist erfolgreich abgeschlossen";
        }else if(hreflang_toppersystem == "es"){
	        txtts0="Ninguna solicitud de optimización tuvo éxito";
	        txtts1="No todas las solicitudes de optimización tuvieron éxito";
	        txtts2="El proceso de optimización se completa con éxito";
        }else if(hreflang_toppersystem == "fr"){
	        txtts0="Aucune demande d'optimisation n'a abouti";
	        txtts1="Toutes les demandes d'optimisation n'ont pas abouti";
	        txtts2="Le processus d'optimisation est terminé avec succès";
        }else if(hreflang_toppersystem == "hi"){
	        txtts0="कोई भी अनुकूलन अनुरोध सफल नहीं हुआ";
	        txtts1="सभी अनुकूलन अनुरोध सफल नहीं हुए";
	        txtts2="अनुकूलन प्रक्रिया सफलतापूर्वक पूरी हो गई";
        }else if(hreflang_toppersystem == "ja"){
	        txtts0="成功した最適化リクエストはありませんでした";
	        txtts1="すべての最適化リクエストが成功したわけではありません";
	        txtts2="最適化プロセスが正常に完了しました";
        }else if(hreflang_toppersystem == "pl"){
	        txtts0="Żadne żądania optymalizacji nie powiodły się";
	        txtts1="Nie wszystkie żądania optymalizacji zakończyły się sukcesem";
	        txtts2="Proces optymalizacji został pomyślnie zakończony";
        }else if(hreflang_toppersystem == "pt"){
	        txtts0="Nenhuma solicitação de otimização foi bem-sucedida";
	        txtts1="Nem todas as solicitações de otimização foram bem-sucedidas";
	        txtts2="O processo de otimização foi concluído com sucesso";
        }else if(hreflang_toppersystem == "ru"){
	        txtts0="Ни один запрос на оптимизацию не был успешным";
	        txtts1="Не все запросы на оптимизацию были успешными";
	        txtts2="Процесс оптимизации завершен успешно";
        }else if(hreflang_toppersystem == "zh"){
	        txtts0="没有优化请求成功";
	        txtts1="并非所有优化请求都成功";
	        txtts2="优化过程已成功完成";
        }else if(hreflang_toppersystem == "he"){
	        txtts0="שום בקשות אופטימיזציה לא הצליחו";
	        txtts1="לא כל בקשות האופטימיזציה הצליחו";
	        txtts2="תהליך האופטימיזציה הסתיים בהצלחה";
        }else if(hreflang_toppersystem == "la"){
	        txtts0="Nulla ipsum petitiones erant felix";
	        txtts1="Non omnes ipsum petitiones prospere";
	        txtts2="Processus ipsum feliciter consummarunt";
        }else{
	        txtts0="No optimization requests were successful";
	        txtts1="Not all optimization requests were successful";
	        txtts2="The optimization process is completed successfully";
        }

        if((parseFloat(document.getElementById("sendoptimization_results_bad_ts").value) >= 1)&&(parseFloat(document.getElementById("sendoptimization_results_good_ts").value) == 0)){    
            document.getElementById('endrequest_toppersystem').className="red_endrequest_toppersystem";
            document.getElementById('endrequest_toppersystem').innerHTML="<small>" + txtts0 + "</small>";                               
        }else if((parseFloat(document.getElementById("sendoptimization_results_bad_ts").value) >= 1)&&(parseFloat(document.getElementById("sendoptimization_results_good_ts").value) >= 1)){
            document.getElementById('endrequest_toppersystem').className="orange_endrequest_toppersystem";
            document.getElementById('endrequest_toppersystem').innerHTML="<small>" + txtts1 + "</small>";                         
        }else{
            document.getElementById('endrequest_toppersystem').className="endrequest_toppersystem";
            document.getElementById('endrequest_toppersystem').innerHTML="<small>" + txtts2 + "</small>";

        }

        document.getElementById('sendoptimization_results_bad_ts').value="0";
        document.getElementById('sendoptimization_results_good_ts').value="0";

        if(document.getElementById("sending_mode_ts")){
            if(parseFloat(document.getElementById("sending_mode_ts").value) == "1"){    
                document.getElementById("sending_mode_ts").value="0";                                
            }
        }
    }
}

function SendProcessAllToppersystem()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('destination_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('language_toppersystem_send'))&&(document.getElementById('nmaxcanonical_toppersystem'))&&(document.getElementById('resolution_images_toppersystem_send'))&&(document.getElementById('check_stronglazyload_images_toppersystem_send'))&&(document.getElementById('check_stronglazyload_video_toppersystem_send'))&&(document.getElementById('check_text_ia_toppersystem_send'))){

            if((document.getElementById('nmaxcanonical_toppersystem').value.trim() != "")&&(document.getElementById('nmaxcanonical_toppersystem').value.trim() != "0")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){
                if(document.getElementById('idguideboxnow_toppersystem')){
                    if((document.getElementById('idguideboxnow_toppersystem').value) != ""){
                        if(document.getElementById('menu_events_all_toppersystem')){
                            if(document.getElementById("sending_mode_ts")){
                                if(parseFloat(document.getElementById("sending_mode_ts").value) == "0"){    
                                    document.getElementById("sending_mode_ts").value="1";
                                }
                            }                            
                            setTimeout("Go10fromMenuGuideToppersystem()", 20);
                        }
                    }
                }

                setTimeout("StartSendProcessAllToppersystem()", 80);

                if(document.getElementById("focus_mode_ts")){
                    if(document.getElementById("focus_mode_ts").value == "0"){    
                        document.getElementById("focus_mode_ts").value="1";
                    }
                }
                var pass_check_canonical="";
				var n_pass_check_canonical=0;
                for(i=0;i<=document.getElementById('nmaxcanonical_toppersystem').value;i++){ 
                    if(document.getElementById("canonical_toppersystem" + i.toString())){
                        if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                            if(document.getElementById("check_canonical_toppersystem_send" + i.toString())){
                                if(document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked == false){

                                }else{
                                    pass_check_canonical+="ok";
									n_pass_check_canonical=n_pass_check_canonical + 1;
									document.getElementById('respons_txt' + i.toString()).innerHTML = ""; 
                                }
                            }
                        }
                    }
                }
				document.getElementById('tot_send_ts').value=n_pass_check_canonical;
				document.getElementById('n_send_ts').value=n_pass_check_canonical;
				if(n_pass_check_canonical != "0"){
					document.getElementById('status_send_progress').className="status_send_progress";
				}
                if(pass_check_canonical.trim() == ""){
					var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();
					var txtts0;           
					if(hreflang_toppersystem == "it"){
						txtts0="Selezionare almeno una pagina";
					}else if(hreflang_toppersystem == "ar"){
						txtts0="حدد صفحة واحدة على الأقل";
					}else if(hreflang_toppersystem == "de"){
						txtts0="Wählen Sie mindestens eine Seite aus";
					}else if(hreflang_toppersystem == "es"){
						txtts0="Seleccione al menos una página";
					}else if(hreflang_toppersystem == "fr"){
						txtts0="Sélectionnez au moins une page";
					}else if(hreflang_toppersystem == "hi"){
						txtts0="कम से कम एक पृष्ठ का चयन करें";
					}else if(hreflang_toppersystem == "ja"){
						 txtts0="少なくとも1つのページを選択してください";
					}else if(hreflang_toppersystem == "pl"){
						txtts0="Wybierz co najmniej jedną stronę";
					}else if(hreflang_toppersystem == "pt"){
						txtts0="Selecione pelo menos uma página";
					}else if(hreflang_toppersystem == "ru"){
						txtts0="Выберите хотя бы одну страницу";
					}else if(hreflang_toppersystem == "zh"){
						txtts0="选择至少一页";
					}else if(hreflang_toppersystem == "he"){
						txtts0="בחר עמוד אחד לפחות";
					}else if(hreflang_toppersystem == "la"){
						txtts0="Select saltem unus page";
					}else{
						txtts0="Select at least one page";
					}
                    alert(txtts0);
                }
		    }else{

		    }
            document.getElementById('sendoptimization_results_bad_ts').value="0";
            document.getElementById('sendoptimization_results_good_ts').value="0";
            setTimeout("SendProcessAllToppersystem2()", 80);
	    }
    }
}

function SendProcessAllToppersystem2()
{
	if(ControllerFunction2() == true){
		if((document.getElementById('destination_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('check_privacy_toppersystem_send'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('language_toppersystem_send'))&&(document.getElementById('nmaxcanonical_toppersystem'))&&(document.getElementById('resolution_images_toppersystem_send'))&&(document.getElementById('check_stronglazyload_images_toppersystem_send'))&&(document.getElementById('check_stronglazyload_video_toppersystem_send'))&&(document.getElementById('check_text_ia_toppersystem_send'))){

            if((document.getElementById('nmaxcanonical_toppersystem').value.trim() != "")&&(document.getElementById('nmaxcanonical_toppersystem').value.trim() != "0")&&(document.getElementById('hreflang_toppersystem').value.trim() != "")){ 

                var pass_check_canonical="";
                for(i=0;i<=document.getElementById('nmaxcanonical_toppersystem').value;i++){ 
                    if(document.getElementById("canonical_toppersystem" + i.toString())){
                        if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                            if(document.getElementById("check_canonical_toppersystem_send" + i.toString())){
                                if(document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked == false){

                                }else{
                                    pass_check_canonical+="ok";
                                }
                            }
                        }
                    }
                }
				
				var n_send_ok=parseInt(document.getElementById('tot_send_ts').value) - parseInt(document.getElementById('n_send_ts').value);
				if(n_send_ok == 0){
					document.getElementById('status_send_progress').setAttribute("style", "width:0%");
				}else if(n_send_ok == parseInt(document.getElementById('tot_send_ts').value)){
					document.getElementById('status_send_progress').className="status_send_progress display_none_ts";
					document.getElementById('status_send_progress').style.width="0%";
				}else{
					var perc=Math.round((100 * parseInt(n_send_ok)) / parseInt(document.getElementById('tot_send_ts').value));
					if(n_send_ok + 1 == parseInt(document.getElementById('tot_send_ts').value)){
						document.getElementById('status_send_progress').style.width="100%";
					}else{
						document.getElementById('status_send_progress').style.width=perc + "%";
					}
				}
				
			    if((document.getElementById('destination_toppersystem').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('language_toppersystem_send').value.trim() != "")&&(VerifyLanguageTS() == 1)&&(document.getElementById('keyword_toppersystem_send').value.trim() != "")&&(pass_check_canonical.trim() != "")&&(document.getElementById('check_privacy_toppersystem_send').checked == true)){				    
                    document.getElementById('load_toppersystem').className = "box_loader_toppersystem"; 
                    document.getElementById('go_all_toppersystem_send').setAttribute('href', 'javascript:NotSendProcessAllToppersystem();');			    
			    }else{
                    document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                    document.getElementById('go_all_toppersystem_send').setAttribute('href', 'javascript:SendProcessAllToppersystem();');
                }
                if(pass_check_canonical.trim() == ""){
                    document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                    document.getElementById('go_all_toppersystem_send').setAttribute('href', 'javascript:SendProcessAllToppersystem();');
                    if(document.getElementById("focus_mode_ts")){
                        if(document.getElementById("focus_mode_ts").value == "1"){    
                            document.getElementById("end_focus_mode_ts").focus();
                        }
                    }                   
                }
		    }else{

		    }
            setTimeout("SendProcessAllToppersystem3()", 80);
	    }
    }
}

function SendProcessAllToppersystem3()
{
	if(ControllerFunction2() == true){

        var canonical_toppersystem_send="";
        var authcode_toppersystem="";
        var nciclets="";
        var pass_check_canonical="";
        for(i=0;i<=document.getElementById('nmaxcanonical_toppersystem').value;i++){
            if(pass_check_canonical.trim() == ""){
                if(document.getElementById("canonical_toppersystem" + i.toString())){
                    if(document.getElementById("canonical_toppersystem" + i.toString()).value.trim() != ""){
                        if(document.getElementById("authcode_toppersystem" + i.toString())){
                            if(document.getElementById("authcode_toppersystem" + i.toString()).value.trim() != ""){
                                if(document.getElementById("check_canonical_toppersystem_send" + i.toString())){
                                    if(document.getElementById("check_canonical_toppersystem_send" + i.toString()).checked == false){
                                     
                                    }else{
                                        nciclets=i.toString();
                                        canonical_toppersystem_send=document.getElementById("canonical_toppersystem" + i.toString()).value.trim();
                                        authcode_toppersystem=document.getElementById("authcode_toppersystem" + i.toString()).value.trim();
                                        pass_check_canonical+="ok";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }


		if((authcode_toppersystem.trim() != "")&&(canonical_toppersystem_send.trim() != "")&&(document.getElementById('destination_toppersystem'))&&(document.getElementById('resend_toppersystem'))&&(document.getElementById('keyword_toppersystem_send'))&&(document.getElementById('check_privacy_toppersystem_send'))){
            if((document.getElementById('language_toppersystem_send').value.trim() == "")||(VerifyLanguageTS() == 0)){		
                document.getElementById('language_toppersystem_send').className="inputform_toppersystem border_red";
            }
            
            var pass_title="ok";            
            var pass_description="ok";
            var pass_keywords="ok";

            if(document.getElementById('keyword_toppersystem_send').value.trim() == ""){		
                document.getElementById('keyword_toppersystem_send').className="inputform_toppersystem border_red";
            }
			
			var query_images="";
			if(document.querySelector('input[name="images_toppersystem_send"]:checked')) {
				query_images=document.querySelector('input[name="images_toppersystem_send"]:checked').value.trim();
			}else{
				query_images="1";
			}

			var query_norescrive="";
			if(document.querySelector('input[name="check_norescrive_toppersystem_send"]:checked')) {
				query_norescrive=document.querySelector('input[name="check_norescrive_toppersystem_send"]:checked').value.trim();
			}else{
				query_norescrive="false";
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
		    
			if((authcode_toppersystem.trim() != "")&&(canonical_toppersystem_send.trim() != "")&&(document.getElementById('destination_toppersystem').value.trim() != "")&&(document.getElementById('resend_toppersystem').value.trim() != "")&&(document.getElementById('keyword_toppersystem_send').value.trim() != "")&&(document.getElementById('language_toppersystem_send').value.trim() != "")&&(VerifyLanguageTS() == 1)&&(pass_title == "ok")&&(pass_description == "ok")&&(pass_keywords == "ok")&&(document.getElementById('resolution_images_toppersystem_send').value.trim() != "")&&(document.getElementById('check_privacy_toppersystem_send').checked == true)){			

                document.getElementById('nciclets').value = nciclets;
                document.getElementById('load_toppersystem' + nciclets).className = "box_loader_toppersystem";
                document.getElementById('respons_txt' + nciclets).innerHTML = "";
                document.getElementById("check_canonical_toppersystem_send" + nciclets).checked=0;
                if(document.getElementById("focus_mode_ts")){
                    if(document.getElementById("focus_mode_ts").value == "1"){    
                        document.getElementById("check_canonical_toppersystem_send" + nciclets).focus();
                    }
                }
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
										nciclets_w=document.getElementById('nciclets').value;										
										newtxtrequest = decode_html_toppersystem(http.responseText.trim()).replace(/ErrorRequestTS ServiceNotAvailable/, '');
										if(decode_html_toppersystem(http.responseText.trim()) != newtxtrequest) {
											document.getElementById("check_canonical_toppersystem_send" + nciclets_w).checked=1;
											document.getElementById('n_send_ts').value=document.getElementById('n_send_ts').value;
										}else{
											document.getElementById('load_toppersystem' + nciclets_w).className = "box_loader_toppersystem display_none_ts";
											newtxtverifyspam = decode_html_toppersystem(http.responseText.trim()).replace(/</, '');                                
											if(decode_html_toppersystem(http.responseText.trim()) != newtxtverifyspam) {                                
												document.getElementById('respons_txt' + nciclets_w).innerHTML = txtts0;
                                                //txtts1
											}else{
												//document.getElementById('respons_txt' + nciclets_w).innerHTML = decode_html_toppersystem(http.responseText.trim());
												
												newcontrollertxt = decode_html_toppersystem(http.responseText.trim()).replace(/Topper the Top/, '');
												if(decode_html_toppersystem(http.responseText.trim()) != newcontrollertxt) {                                
													//document.getElementById("point_render_list_toppersystem" + nciclets_w.toString()).innerHTML = "&bull;";
													//document.getElementById("point_render_list_toppersystem" + nciclets_w.toString()).className = "status_ok_point_all_ts";
													//document.getElementById("box_remove_toppersystem_page" + nciclets_w.toString()).className = "";
                                                    document.getElementById('sendoptimization_results_good_ts').value=parseFloat(document.getElementById('sendoptimization_results_good_ts').value) + 1;
                                                    document.getElementById('hiddenrespons_txt' + nciclets_w).value = decode_html_toppersystem(http.responseText.trim());
                                                    setTimeout("ChangeStateOptimizationToppersystem('" + nciclets_w.toString() + "')", 20);
												}else{
                                                    document.getElementById('respons_txt' + nciclets_w).innerHTML = decode_html_toppersystem(http.responseText.trim());                                                   
                                                    document.getElementById('sendoptimization_results_bad_ts').value=parseFloat(document.getElementById('sendoptimization_results_bad_ts').value) + 1;
                                                }											

											}
											document.getElementById('n_send_ts').value=document.getElementById('n_send_ts').value - 1;
										}
										
										setTimeout("SendProcessAllToppersystem2()", 2400);

                                        if(parseInt(document.getElementById('n_send_ts').value) == "0"){
                                            setTimeout("EndSendProcessAllToppersystem()", 2400);
                                        }  						
									}else{
										nciclets_w=document.getElementById('nciclets').value;
										document.getElementById('load_toppersystem' + nciclets_w).className = "box_loader_toppersystem display_none_ts";
										document.getElementById('respons_txt' + nciclets_w).innerHTML = "";
										document.getElementById("check_canonical_toppersystem_send" + nciclets_w).checked=1;  
										document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                                        document.getElementById('go_all_toppersystem_send').setAttribute('href', 'javascript:SendProcessAllToppersystem();');
										alert(txtts0);										
									}
								}else if(http.readyState == 4 && http.status != 200) {
                                    if(ControllerFunction2() == true){
                                        nciclets_w=document.getElementById('nciclets').value;
                                        if(http.status == 524){
                                            document.getElementById('waitloading_pagets' + nciclets_w).className = "";
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
										    document.getElementById('load_toppersystem' + nciclets_w).className = "box_loader_toppersystem display_none_ts";
										    document.getElementById('respons_txt' + nciclets_w).innerHTML = txtts1.trim();
										    document.getElementById("check_canonical_toppersystem_send" + nciclets_w).checked=0;  
										    document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                                            document.getElementById('go_all_toppersystem_send').setAttribute('href', 'javascript:SendProcessAllToppersystem();');
                                            document.getElementById('n_send_ts').value=document.getElementById('n_send_ts').value - 1;	
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
                            var params = "action=componentstoppersystem31ajax&canonical_toppersystem_send=" + encodeURIComponent(canonical_toppersystem_send) + "&language_toppersystem_send=" + encodeURIComponent(document.getElementById('language_toppersystem_send').value) + "&title_toppersystem_send=&check_title_toppersystem_send=true&description_toppersystem_send=&check_description_toppersystem_send=true&keywords_toppersystem_send=&check_keywords_toppersystem_send=true&keyword_toppersystem_send=" + encodeURIComponent(document.getElementById('keyword_toppersystem_send').value) + "&images_toppersystem_send=" + query_images + "&resolution_images_toppersystem_send=" + encodeURIComponent(document.getElementById('resolution_images_toppersystem_send').value) + "&stronglazyload_images_toppersystem_send=" + encodeURIComponent(check_stronglazyload_images_toppersystem_send) + "&stronglazyload_video_toppersystem_send=" + encodeURIComponent(check_stronglazyload_video_toppersystem_send) + "&text_ia_toppersystem_send=" + encodeURIComponent(check_text_ia_toppersystem_send) + "&category_toppersystem_send=&authcode_toppersystem=" + encodeURIComponent(authcode_toppersystem) + "&destination_toppersystem=" + encodeURIComponent(document.getElementById('destination_toppersystem').value) + "&resend_toppersystem=" + encodeURIComponent(document.getElementById('resend_toppersystem').value) + "&hreflang_toppersystem=" + encodeURIComponent(document.getElementById('hreflang_toppersystem').value) + "&check_privacy_toppersystem_send=" + document.getElementById('check_privacy_toppersystem_send').checked + "&class_all_toppersystem_send=ok" + "&check_norescrive_toppersystem=" + query_norescrive + "&reqcentral_toppersystem_send=" + encodeURIComponent(document.getElementById('send_reqcentral_toppersystem').value) + "&tsr_toppersystem=ok";
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
							nciclets_w=document.getElementById('nciclets').value;
							document.getElementById('load_toppersystem' + nciclets_w).className = "box_loader_toppersystem display_none_ts";
							document.getElementById('respons_txt' + nciclets_w).innerHTML = "";
							document.getElementById("check_canonical_toppersystem_send" + nciclets_w).checked=1;  
							document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts";
                            document.getElementById('go_all_toppersystem_send').setAttribute('href', 'javascript:SendProcessAllToppersystem();');
							alert(txtts0);
						}
					}
				}				
			}

		}else{
            document.getElementById('check_privacy_toppersystem_send').checked = false;
            document.getElementById('load_toppersystem').className = "box_loader_toppersystem display_none_ts"; 
            document.getElementById('go_all_toppersystem_send').setAttribute('href', 'javascript:SendProcessAllToppersystem();');             
            document.getElementById('check_canonical_toppersystem_send_all').checked = false;
            document.getElementById('check_canonical_toppersystem_send_allf').checked = false;
		}
	}
}

function ChangeStateOptimizationToppersystem(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
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
            document.getElementById('respons_txt' + nciclets_w).innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            setTimeout("ChangeStateOptimizationToppersystem2('" + nciclets_w.toString() + "')", val_wait);
        }
	}
}
function ChangeStateOptimizationToppersystem2(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
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
                document.getElementById('respons_txt' + nciclets_w).innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
                setTimeout("ChangeStateOptimizationToppersystem3('" + nciclets_w.toString() + "')", val_wait);
            }else{
                setTimeout("ChangeStateOptimizationToppersystem3('" + nciclets_w.toString() + "')", 80);                
            }


        }
	}
}
function ChangeStateOptimizationToppersystem3(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
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
                document.getElementById('respons_txt' + nciclets_w).innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
                setTimeout("ChangeStateOptimizationToppersystem4('" + nciclets_w.toString() + "')", val_wait);
            }else{
                setTimeout("ChangeStateOptimizationToppersystem4('" + nciclets_w.toString() + "')", 80);                
            }


        }
	}
}
function ChangeStateOptimizationToppersystem4(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
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
            document.getElementById('respons_txt' + nciclets_w).innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            setTimeout("ChangeStateOptimizationToppersystem5('" + nciclets_w.toString() + "')", val_wait);
        }
	}
}
function ChangeStateOptimizationToppersystem5(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
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
                document.getElementById('respons_txt' + nciclets_w).innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
                setTimeout("ChangeStateOptimizationToppersystem6('" + nciclets_w.toString() + "')", val_wait);
            }else{
                setTimeout("ChangeStateOptimizationToppersystem6('" + nciclets_w.toString() + "')", 80);
            }
        }
	}
}
function ChangeStateOptimizationToppersystem6(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
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
            document.getElementById('respons_txt' + nciclets_w).innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            setTimeout("ChangeStateOptimizationToppersystem7('" + nciclets_w.toString() + "')", val_wait);
        }
	}
}
function ChangeStateOptimizationToppersystem7(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
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
                document.getElementById('respons_txt' + nciclets_w).innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
                setTimeout("ChangeStateOptimizationToppersystem8('" + nciclets_w.toString() + "')", val_wait);
            }else{
                setTimeout("ChangeStateOptimizationToppersystem8('" + nciclets_w.toString() + "')", 80);
            }
        }
	}
}
function ChangeStateOptimizationToppersystem8(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
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
            document.getElementById('respons_txt' + nciclets_w).innerHTML = "<div class=\"box_loader_toppersystem\"><div class=\"loader_toppersystem\"></div>&nbsp;&nbsp;</div>" + txtts0;
            setTimeout("ChangeStateOptimizationToppersystem9('" + nciclets_w.toString() + "')", val_wait);
        }
	}
}
function ChangeStateOptimizationToppersystem9(nciclets_w)
{
	if(ControllerFunction2() == true){
        if(document.getElementById('respons_txt' + nciclets_w)){
            document.getElementById("point_render_list_toppersystem" + nciclets_w.toString()).innerHTML = "&bull;";
            document.getElementById("point_render_list_toppersystem" + nciclets_w.toString()).className = "status_ok_point_all_ts";
            document.getElementById("box_remove_toppersystem_page" + nciclets_w.toString()).className = "";
            document.getElementById('respons_txt' + nciclets_w).innerHTML = document.getElementById('hiddenrespons_txt' + nciclets_w).value;
        }
	}
}

function StartProcessServicesToppersystem()
{
	if(ControllerFunction2() == true){
		setTimeout("StartProcessWhileToppersystem()", 80);
        setTimeout("events_management_toppersystem()", 1400);
	}
}

function StartProcessOpenGuideToppersystem()
{
	if(ControllerFunction2() == true){	
        setTimeout("StartProcessWhileToppersystem()", 20);
        setTimeout("StartProcessGuideToppersystem()", 1400);
	}
}

function StartProcessOpenManagementJavascriptToppersystem()
{
	if(ControllerFunction2() == true){	
        setTimeout("StartProcessWhileToppersystem()", 20);
        setTimeout("goto_exceptions_deferts()", 1400);
	}
}

function StartProcessOpenManagementCSSToppersystem()
{
	if(ControllerFunction2() == true){	
        setTimeout("StartProcessWhileToppersystem()", 20);
        setTimeout("goto_exceptions_cssfilests()", 1400);
	}
}

function StartProcessOpenCleanCachesToppersystem()
{
	if(ControllerFunction2() == true){	
        setTimeout("StartProcessWhileToppersystem()", 20);
        setTimeout("events_management_toppersystem()", 1400);
        setTimeout("goto_clean_cachets()", 2200);
	}
}

function StartProcessOpenStagingServiceToppersystem()
{
	if(ControllerFunction2() == true){	
        setTimeout("StartProcessWhileToppersystem()", 20);
        setTimeout("events_management_toppersystem()", 1400);
        setTimeout("goto_block_stage_websitets()", 2200);
	}
}

function StartProcessOpenImportExportToppersystem()
{
	if(ControllerFunction2() == true){	
        setTimeout("StartProcessWhileToppersystem()", 20);
        setTimeout("events_management_toppersystem()", 1400);
        setTimeout("goto_import_export_csvts()", 2200);
	}
}

function StartProcessOpenTecnicalSupportToppersystem()
{
	if(ControllerFunction2() == true){	
        alert("support@toppersystem.com");
	}
}

function StartProcessOpenAgrementToppersystem()
{
	if(ControllerFunction2() == true){
        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
        var txtts0;
        if(hreflang_toppersystem == "it"){    
           txtts0="it";
        }else if(hreflang_toppersystem == "ar"){ 
           txtts0="ar";
        }else if(hreflang_toppersystem == "de"){ 
           txtts0="de";
        }else if(hreflang_toppersystem == "es"){ 
           txtts0="es";
        }else if(hreflang_toppersystem == "fr"){ 
           txtts0="fr";
        }else if(hreflang_toppersystem == "hi"){ 
           txtts0="hi";
        }else if(hreflang_toppersystem == "ja"){ 
           txtts0="ja";
        }else if(hreflang_toppersystem == "pl"){ 
           txtts0="pl";
        }else if(hreflang_toppersystem == "pt"){ 
           txtts0="pt";
        }else if(hreflang_toppersystem == "ru"){ 
           txtts0="ru";
        }else if(hreflang_toppersystem == "zh"){ 
           txtts0="zh";
        }else if(hreflang_toppersystem == "he"){ 
           txtts0="he";
        }else if(hreflang_toppersystem == "la"){ 
           txtts0="la";
        }else{   
           txtts0="en";
        }	
		setTimeout("StartProcessWhileToppersystem()", 80);
        setTimeout("terms_condictions_toppersystem('" + txtts0 + "')", 1400);
	}
}

function StartProcessOpenApiCenterToppersystem()
{
	if(ControllerFunction2() == true){
        var hreflang_toppersystem=document.getElementById('hreflang_toppersystem').value.trim();                            
        var txtts0;
        if(hreflang_toppersystem == "it"){    
           txtts0="it";
        }else if(hreflang_toppersystem == "ar"){ 
           txtts0="ar";
        }else if(hreflang_toppersystem == "de"){ 
           txtts0="de";
        }else if(hreflang_toppersystem == "es"){ 
           txtts0="es";
        }else if(hreflang_toppersystem == "fr"){ 
           txtts0="fr";
        }else if(hreflang_toppersystem == "hi"){ 
           txtts0="hi";
        }else if(hreflang_toppersystem == "ja"){ 
           txtts0="ja";
        }else if(hreflang_toppersystem == "pl"){ 
           txtts0="pl";
        }else if(hreflang_toppersystem == "pt"){ 
           txtts0="pt";
        }else if(hreflang_toppersystem == "ru"){ 
           txtts0="ru";
        }else if(hreflang_toppersystem == "zh"){ 
           txtts0="zh";
        }else if(hreflang_toppersystem == "he"){ 
           txtts0="he";
        }else if(hreflang_toppersystem == "la"){ 
           txtts0="la";
        }else{   
           txtts0="en";
        }
        window.location.assign(document.getElementById('idapicenterloginlinkweb_toppersystem').value.trim() + txtts0);
	}
}
//-->