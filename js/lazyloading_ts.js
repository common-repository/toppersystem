/*! Smart Lazy Load Images by toppersystem.com v1.0.4 | Author: Andrea Bagordo | (c) toppersytem.com | https://www.gnu.org/licenses/gpl-3.0.html */
function startlazy_ts2(){var images_ts=document.querySelectorAll('img');for(var i=0;i<images_ts.length;i++){if(images_ts[i].alt){if(images_ts[i].alt.trim()!=""){images_ts[i].setAttribute('alt','');}}if(images_ts[i].title){if(images_ts[i].title.trim()!=""){images_ts[i].setAttribute('title','');}}images_ts[i]="";}
var link_ts=document.querySelectorAll('a');for(var i=0;i<link_ts.length;i++){if(link_ts[i].title){if(link_ts[i].title.trim()!=""){link_ts[i].setAttribute('title','');}}link_ts[i]="";}
var article_ts=document.querySelectorAll('article');for(var i=0;i<article_ts.length;i++){if(article_ts[i].title){if(article_ts[i].title.trim()!=""){article_ts[i].setAttribute('title','');}}article_ts[i]="";}
var aside_ts=document.querySelectorAll('aside');for(var i=0;i<aside_ts.length;i++){if(aside_ts[i].title){if(aside_ts[i].title.trim()!=""){aside_ts[i].setAttribute('title','');}}aside_ts[i]="";}}
function startlazy_ts(level){const imageObserver=new IntersectionObserver((entries,imgObserver)=>{entries.forEach((entry)=>{if(entry.isIntersecting===true){const lazyImage2=entry.target;if(lazyImage2.getAttribute("data-src")){lazyImage2.setAttribute("src",lazyImage2.getAttribute("data-src"));lazyImage2.removeAttribute('data-src');if(lazyImage2.getAttribute("data-srcset")){lazyImage2.setAttribute("srcset",lazyImage2.getAttribute("data-srcset"));lazyImage2.removeAttribute('data-srcset');if(lazyImage2.getAttribute("data-sizes")){lazyImage2.setAttribute("sizes",lazyImage2.getAttribute("data-sizes"));lazyImage2.removeAttribute('data-sizes');}}
imgObserver.unobserve(lazyImage2);console.log('Resolve total smart lazy load ts:'+lazyImage2.getAttribute("src"));}}})});const absolute=function(rel){link=document.createElement("a");link.href=rel;newfile=link.href;link.remove();return(newfile);}
var pass=0;var look=1;var icsyl=0;var res="";var lazyImage="";var versrcset="";var imagepathts="";var arr_srcset="";var str_srcset="";for(var im=0;im<document.images.length;im++){pass=0;if(level=="hight"){if((document.images[im].src)&&(!document.images[im].getAttribute("data-src"))){pass=1;}}else if(level=="medium"){if((document.images[im].src)&&((document.images[im].getAttribute("width"))||(document.images[im].getAttribute("height"))||(document.images[im].getAttribute("class"))||(document.images[im].getAttribute("style"))||(document.images[im].getAttribute("loading")))&&(!document.images[im].getAttribute("data-src"))){pass=1;}}else if(level=="low"){if((document.images[im].src)&&((document.images[im].getAttribute("width"))||(document.images[im].getAttribute("height"))||(document.images[im].getAttribute("loading")))&&(!document.images[im].getAttribute("data-src"))){pass=1;}}else{pass=0;}
if(pass==1){lazyImage=document.images[im];look=1;if(performance.getEntriesByType('resource')){if(performance.getEntriesByType('resource').length>0){if(lazyImage.getAttribute("srcset")){if(lazyImage.getAttribute("srcset").trim()!=""){arr_srcset=lazyImage.getAttribute("srcset").trim().split(",");if((arr_srcset[0])){if((arr_srcset[0].trim().length>=1)){str_srcset="";for(nsrcset=0;nsrcset<arr_srcset.length;nsrcset++){if(arr_srcset[nsrcset]){if(arr_srcset[nsrcset].trim().length>=1){if(arr_srcset[nsrcset].trim().split(" ")[0]){if(arr_srcset[nsrcset].trim().split(" ")[0].length>=1){if((arr_srcset[nsrcset].trim().split("http:")[1])||(arr_srcset[nsrcset].trim().split("https:")[1])){str_srcset+=arr_srcset[nsrcset].trim().split(" ")[0].trim()+",";}else{str_srcset+=absolute(arr_srcset[nsrcset].trim().split(" ")[0].trim())+",";}}}}}}}}
arr_srcset="";}}
res=performance.getEntriesByType('resource');for(icsyl=0;icsyl<res.length;icsyl++){if(look==1){if(res[icsyl]){if(lazyImage.getAttribute("src")){if(lazyImage.src==res[icsyl].name){look=0;}else if(lazyImage.getAttribute("srcset")){if(str_srcset!=""){imagepathts=res[icsyl].name+",";versrcset=str_srcset.replace(imagepathts,'');if(str_srcset!=versrcset){look=0;}
imagepathts="";versrcset="";}}else{}}}}}
str_srcset="";}}
if(look==1){lazyImage.setAttribute("data-src",lazyImage.getAttribute("src"));lazyImage.src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPgo8cGF0aCBmaWxsPSJub25lIiBkPSJtMCwwaDQ4MHYyNzBIMHoiLz4KPC9zdmc+";if(!lazyImage.getAttribute("data-srcset")){if(lazyImage.getAttribute("srcset")){lazyImage.setAttribute("data-srcset",lazyImage.getAttribute("srcset"));lazyImage.removeAttribute('srcset');if(!lazyImage.getAttribute("data-sizes")){if(lazyImage.getAttribute("sizes")){lazyImage.setAttribute("data-sizes",lazyImage.getAttribute("sizes"));lazyImage.removeAttribute('sizes');}}}}
imageObserver.observe(lazyImage);console.log('Observe smart lazy load ts:'+lazyImage.getAttribute("data-src"));}}}
if(document.getElementById('load_screen')){var load_screen=document.getElementById("load_screen");document.body.removeChild(load_screen);}
var items=document.querySelectorAll("img[data-ts-width],img[data-ts-height]");for(var i=0;i<items.length;i++){if(items[i]){var lazyImage=items[i];lazyImage.style="width:100%; height:100%; max-width:"+lazyImage.getAttribute("width")+"px; max-height:"+lazyImage.getAttribute("height")+"px;";items[i]="";lazyImage="";}}}
document.addEventListener("DOMContentLoaded",startlazy_ts("medium"));
document.addEventListener("DOMContentLoaded",startlazy_ts2());