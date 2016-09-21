//== Browser Detect
var isIE = navigator.userAgent.search("MSIE") > -1;
var isIE7 = navigator.userAgent.search("MSIE 7") > -1;
var isFirefox = navigator.userAgent.search("Firefox") > -1;
var isOpera = navigator.userAgent.search("Opera") > -1;
var isSafari = navigator.userAgent.search("Safari") > -1;//Google瀏覽器是用這核心
var browser="";
if (isIE7) {
	browser="IE";
	alert("請更換先進的瀏覽器");
} else if (isIE) {
	browser="IE";
	alert("請更換先進的瀏覽器");
} else if (isFirefox) {
	browser="Firefox";
} else if (isOpera) {
	browser="Opera";
} else if (isSafari) {
	browser="Safari or Chrome";
}
	//alert(browser);
