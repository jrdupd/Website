<?php
/**
* @Copyright Copyright (C) 2010- DSTechCafe.com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
* @version 1.1
* @module Stop Copy
**/
class modStopCopy
{
    /**
     * Retrieves embeded script
     */    
    function getStopCopy( $params )
    {
        return '<script language=JavaScript>
<!--
var omitformtags=["input", "textarea", "select"];
    message=""; 
omitformtags=omitformtags.join("|")
function disableselect(e){
if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
return false
}
function reEnable(){
return true
}
if (typeof document.onselectstart!="undefined")
document.onselectstart=new Function ("return false")
else{
document.onmousedown=disableselect
document.onmouseup=disableselect
}
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// --> 
</script>';
       
    }
}

?>