// JavaScript Document
/**
* @Copyright Copyright (C) 2010- DSTechCafe.com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
* @version 1.1
* @module Stop Copy
**/

window.onload = function() {
  document.onselectstart = function() {return false;} // ie
  document.onmousedown = function() {return false;} // mozilla
}


/* You can attach the events to any element. In the following example
I'll disable selecting text in an element with the id 'content'. */

window.onload = function() {
  var element = document.getElementById('content');
  element.onselectstart = function () { return false; } // ie
  element.onmousedown = function () { return false; } // mozilla
}