<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset={$charset}" />
<title>{$companyname} - {$pagetitle}{if $kbarticle.title} - {$kbarticle.title}{/if}</title>
{if $systemurl}<base href="{$systemurl}" />
{/if}<link rel="stylesheet" type="text/css" href="templates/{$template}/style.css" />
<script type="text/javascript" src="includes/jscript/jquery.js"></script>
<script src="http://www.netedgetechnology.com/dropdowntabfiles/dropdowntabs.js" type="text/javascript"></script>
<link href="http://www.netedgetechnology.com/dropdowntabfiles/glowtabs.css" type="text/css" rel="stylesheet">
<link href="http://www.netedgetechnology.com/dropdowntabfiles/halfmoontabs.css" type="text/css" rel="stylesheet">
{$headoutput}
{if $livehelpjs}{$livehelpjs}
{/if}</head>
<body>
{$headeroutput}
<div id="top_container">
  <div id="top">
    <div id="company_title"><a href="http://www.netedgetechnology.com/"><img src="http://www.netedgetechnology.com/images/logo.jpg" width="341" height="129" border="0" alt="logo" /></a></div>
    <div id="welcome_box">
    <div style="height:64px; text-align:right">
    {if $loggedin}{$LANG.welcomeback}, <strong>{$loggedinuser.firstname}</strong>&nbsp;&nbsp;&nbsp;<img src="templates/{$template}/images/icons/details.gif" alt="{$LANG.clientareanavdetails}" width="16" height="16" border="0" class="absmiddle" /> <a href="clientarea.php?action=details" title="{$LANG.clientareanavdetails}"><strong>{$LANG.clientareanavdetails}</strong></a>&nbsp;&nbsp;&nbsp;<img src="templates/{$template}/images/icons/logout.gif" alt="{$LANG.logouttitle}" width="16" height="16" border="0" class="absmiddle" /> <a href="logout.php" title="Logout"><strong>{$LANG.logouttitle}</strong></a>{else}{$LANG.please} <a href="clientarea.php" title="{$LANG.loginbutton}"><strong>{$LANG.loginbutton}</strong></a> {$LANG.or} <a href="register.php" title="{$LANG.clientregistertitle}"><strong>{$LANG.clientregistertitle}</strong></a>{/if}
    &nbsp;    &nbsp;
    <a href="javascript:void(window.open('http://www.netedgetechnology.com/livesupport/livezilla.php','','width=590,height=550,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img border="0" alt="LiveZilla Live Help" src="http://www.netedgetechnology.com/livesupport/image.php?id=03"></a>
    <noscript>

          <a href="http://www.netedgetechnology.com/livesupport/livezilla.php" target="_blank">

            Live Help Chat&lt;/a&gt;&lt;/div&gt;
          </noscript></div>
    <div class="menu">
      
       <div class="glowingtabs" id="glowmenu">
        <ul>                                                
          <li><a class="active" href="http://netedgetechnology.com/index.php"><span>Home</span></a></li>
         <li class=""> <a rel="dropmenu1_d" href="#"><span>Server Management</span></a></li>
         <li class=""> <a rel="dropmenu1_e" href="#"><span>Support System</span></a></li>
         <li class=""> <a rel="dropmenu1_f" href="#"><span>Services</span></a></li>
<!--        <li><a href="career.php"><span>Career</span></a></li>-->
         <!--<li><a href="#" rel="dropmenu1_f"> <span>Onetime Consulting</span></a></li>-->
        <li><a href="http://manage.netedgetechnology.com/clientarea.php"><span>Client Login</span></a></li>
        
        </ul>
         </div>
         <br class="IEonlybr">
      <!--1st drop down menu -->
       <div align="left" class="dropmenudiv_d" id="dropmenu1_d" style="top: 120px; left: 687px; visibility: hidden;">
     <a href="http://netedgetechnology.com/monthly_server_management.php" style="border-top-width: 0pt;"> Monthly Server Management</a>
   <a href="http://netedgetechnology.com/controlpanel_server_management.php">  Controlpanel Server Management</a>
  <a href="http://netedgetechnology.com/hourly_technical_support.php">Hourly Technical Support</a>
    <!--<a href="desktop_support.php">Desktop Management</a> -->
     <a href="http://netedgetechnology.com/infrastructure_management.php">Infrastructure Management </a>          
        </div>
    
    
     <div align="left" class="dropmenudiv_d" id="dropmenu1_e" style="top: 120px; left: 843px; visibility: hidden;">
<!-- <a href="dedicated_support.php">Dedicated Support</a> -->
 <a href="http://netedgetechnology.com/remote_desktop_support.php" style="border-top-width: 0pt;">Remote Desktop Support</a>
<a href="http://netedgetechnology.com/webhosting_support.php">Webhosting Support</a> </div>
    
     <div align="left" class="dropmenudiv_d" id="dropmenu1_f" style="top: 120px; left: 972px; visibility: hidden;">
<a href="http://netedgetechnology.com/onetime_server_setup.php" style="border-top-width: 0pt;">Onetime Server Setup</a>
    <a href="http://netedgetechnology.com/server_migration.php">Server Migration</a>  
    <a href="http://netedgetechnology.com/server_security.php">Server Security</a>  
    <a href="http://netedgetechnology.com/software_development.php"> Software Development </a>
    <a href="http://netedgetechnology.com/search_engine_optimization.php"> Search Engine Optimization </a>
    <a href="http://netedgetechnology.com/content_writing.php"> Content Writing </a>
    
    </div>
    {literal}
      <script type="text/javascript">
//SYNTAX: tabdropdown.init("menu_id", [integer OR "auto"])
tabdropdown.init("glowmenu", "auto")
    </script>   {/literal}
        
        
      </div>
    </div>
  </div>
</div>
<div id="content_container">
{if $loggedin}
  <div id="top_menu">
    <ul>
      <li><a href="clientarea.php" title="{$LANG.clientareanavhome}">{$LANG.clientareanavhome}</a></li>
      <li><a href="clientarea.php?action=details" title="{$LANG.clientareanavdetails}">{$LANG.clientareanavdetails}</a></li>
      <li><a href="clientarea.php?action=products" title="{$LANG.clientareanavservices}">{$LANG.clientareanavservices}</a></li>
      <li><a href="clientarea.php?action=domains" title="{$LANG.clientareanavdomains}">{$LANG.clientareanavdomains}</a></li>
      <li><a href="clientarea.php?action=quotes" title="{$LANG.quotestitle}">{$LANG.quotestitle}</a></li>
      <li><a href="clientarea.php?action=invoices" title="{$LANG.invoices}">{$LANG.invoices}</a></li>
      <li><a href="supporttickets.php" title="{$LANG.clientareanavsupporttickets}">{$LANG.clientareanavsupporttickets}</a></li>
      <li><a href="affiliates.php" title="{$LANG.affiliatestitle}">{$LANG.affiliatestitle}</a></li>
      <li><a href="clientarea.php?action=emails" title="{$LANG.clientareaemails}">{$LANG.clientareaemails}</a></li>
    </ul>
    <div class="clear"></div>
  </div>
{/if}
  <div id="content_left">
    <h1>{$pagetitle}</h1>
	<p class="breadcrumb">{$breadcrumbnav}</p>