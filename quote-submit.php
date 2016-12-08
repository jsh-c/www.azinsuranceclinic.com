<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="JavaScript" type="text/javascript">
<!-- hide JavaScript from non-JavaScript browsers
// This script is a simplified adaptation from the
// JavaScript Browser Sniffer
// Eric Krok, Andy King, Michel Plungjan
// see http://www.webreference.com/ for more information

var agt=navigator.userAgent.toLowerCase();
var appVer = navigator.appVersion.toLowerCase();
var is_minor = parseFloat(appVer);
var is_major = parseInt(is_minor);
var iePos = appVer.indexOf('msie');
if (iePos !=-1) {
is_minor = parseFloat(appVer.substring(iePos+5,appVer.indexOf(';',iePos)))
is_major = parseInt(is_minor);
}
var is_getElementById = (document.getElementById) ? "true" : "false";
var is_getElementsByTagName = (document.getElementsByTagName) ? "true" : "false";
var is_documentElement = (document.documentElement) ? "true" : "false";
var is_ie = ((iePos!=-1));
var is_ie6 = (is_ie && is_major == 6);

if(is_ie6) {
     document.write("<link href='arizonaclinicie6.css' type='text/css' rel='stylesheet' />");
} else {
     document.write("<link href='arizonaclinic.css' type='text/css' rel='stylesheet' />");
}
// -->
</script>
<title>Arizona Clinic Insurance</title>
</head>
<body>
<div id='header'>
     <a href='index.html'
          onmouseout='document.products.src="images/products-1.gif";'
          onmouseover='document.products.src="images/products-2.gif";'>
          <img alt='products' name='products' border='0' src='images/products-1.gif' />
     </a>
     <a href='free-quote.html'>
          <img alt='free quotes' name='freequote' border='0' src='images/free-quote-3.gif' />
     </a>
     <a href='customer-service.html'
          onmouseout='document.customerservice.src="images/customer-service-1.gif";'
          onmouseover='document.customerservice.src="images/customer-service-2.gif";'>
          <img alt='customer service' name='customerservice' border='0' src='images/customer-service-1.gif' />
     </a>
     <a href='contact-us.html'
          onmouseout='document.contactus.src="images/contact-us-1.gif";'
          onmouseover='document.contactus.src="images/contact-us-2.gif";'>
          <img alt='contact us' name='contactus' border='0' src='images/contact-us-1.gif' />
     </a>
</div>
<div id='wrapper'>
     <div id='sidebar'>
          <div style='text-align: center;'>
               <img alt='Arizona Clinic Insurace' src='images/arizona-clinic-logo.jpg' />
               <img alt='Arizona Insurance Clinic' src='images/trans.png' height='16' width='40'/>
               <a href='form-auto-quote.html'
                    onmouseover='document.autoquote.src="images/fq-autoquote-2.gif";'
                    onmouseout='document.autoquote.src="images/fq-autoquote-1.gif";'>
                    <img alt='Auto Quote' name='autoquote' style='padding-top:5px; padding-bottom:5px;' src='images/fq-autoquote-1.gif'/>
               </a>
               <a href='form-home-quote.html'
                    onmouseover='document.homequote.src="images/fq-homequote-2.gif";'
                    onmouseout='document.homequote.src="images/fq-homequote-1.gif";'>
                    <img alt='Home Quote' name='homequote' style='padding-top:5px; padding-bottom:5px;' src='images/fq-homequote-1.gif'/>
               </a>
               <a href='form-umbrella-quote.html'
                    onmouseover='document.umbrellaquote.src="images/fq-umbrellaquote-2.gif";'
                    onmouseout='document.umbrellaquote.src="images/fq-umbrellaquote-1.gif";'>
                    <img alt='Umbrella Quote' name='umbrellaquote' style='padding-top:5px; padding-bottom:5px;' src='images/fq-umbrellaquote-1.gif'/>
               </a>
               <a href='form-life-quote.html'
                    onmouseover='document.lifequote.src="images/fq-lifequote-2.gif";'
                    onmouseout='document.lifequote.src="images/fq-lifequote-1.gif";'>
                    <img alt='Life Quote' name='lifequote' style='padding-top:5px; padding-bottom:5px;' src='images/fq-lifequote-1.gif'/>
               </a>
               <a href='form-health-quote.html'
                    onmouseover='document.healthquote.src="images/fq-healthquote-2.gif";'
                    onmouseout='document.healthquote.src="images/fq-healthquote-1.gif";'>
                    <img alt='Health Quote' name='healthquote' style='padding-top:5px; padding-bottom:5px;' src='images/fq-healthquote-1.gif'/>
               </a>
               <a href='form-business-owners-quote.html'
                    onmouseover='document.businessownersquote.src="images/fq-businessownersquote-2.gif";'
                    onmouseout='document.businessownersquote.src="images/fq-businessownersquote-1.gif";'>
                    <img alt='Business Owners Quote' name='businessownersquote' style='padding-top:5px; padding-bottom:5px;' src='images/fq-businessownersquote-1.gif'/>
               </a>
               <a href='form-business-auto-quote.html'
                    onmouseover='document.businessautoquote.src="images/fq-businessautoquote-2.gif";'
                    onmouseout='document.businessautoquote.src="images/fq-businessautoquote-1.gif";'>
                    <img alt='Business Auto Quote' name='businessautoquote' style='padding-top:5px; padding-bottom:5px;' src='images/fq-businessautoquote-1.gif'/>
               </a>
          </div>
     </div>
     <div id='main'>
          <h1>Form submission</h1>
               <br />
			<?php
                    include "_incSubmit.php";
			?>
     </div>
     
     <div id='clearboth'></div>
     
</div>

<div id='footer'>
     <div class='footeritem'><a class='footerlink' href='index.html'>Products</a></div>
     <div class='footeritem'><a class='footerlink' href='free-quote.html'>Free Quote</a></div>
     <div class='footeritem'><a class='footerlink' href='customer-service.html'>Customer Service</a></div>                
     <div class='footeritem'><a class='footerlink' href='contact-us.html'>Contact Us</a></div>
     <div class='footeritem'>
          © Arizona Insurance Clinic
     </div>
</div>
         
     <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-88692912-1', 'auto');
       ga('send', 'pageview');

     </script>
</body>
</html>
