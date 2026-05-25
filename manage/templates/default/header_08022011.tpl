{php}
   global $Main_URL, $Whmcs_URL;
  		//For Local
	/*$Main_URL = "http://".$_SERVER['HTTP_HOST']."/webedge/";
	$Whmcs_URL = $Main_URL."whmcs/";   
  */
	
	
	$Main_URL = "http://".$_SERVER['HTTP_HOST']."/";
	$Whmcs_URL = $Main_URL."whmcs/";   
	include_once("./../main_include.php");
  $this->assign('Main_URL',$Main_URL);         
  $this->assign('Whmcs_URL',$Whmcs_URL);     

  $this->assign('meta_desc',@$meta_desc);         
  $this->assign('meta_keywords',@$meta_keywords);     
  
{/php}    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset={$charset}" />

<meta content="{$meta_desc}" name="description"/>

<meta content="{$meta_keywords}" name="keywords"/>

<meta content="index,follow" name="robots"/>

<meta name="revisit" content="2 days"/>

<meta name="rating" content="General"/>

<meta name="resource-type" content="document"/>

<meta name="distribution" content="global"/>

<meta name="verify-v1" content="jvhXmnQ8k1gHy2m+t5LuOwH4G8uAMh+mqh5ZpghPuKw="/>

<title>{$companyname} - {$pagetitle}{if $kbarticle.title} - {$kbarticle.title}{/if}</title>
{if $systemurl}<base href="{$systemurl}" />
{/if}<link rel="stylesheet" type="text/css" href="templates/{$template}/style.css" />
<link rel="stylesheet" type="text/css" href="templates/{$template}/my_style.css" /> 
<script type="text/javascript" src="includes/jscript/jquery.js"></script>
<script type="text/javascript" src="./../js/comman.js"></script>
<script>
var Main_URL = "{$Main_URL}";
var Whmcs_URL =  "{$Whmcs_URL}";
</script>
<script language="javascript1.5" src="./../js/mm_menu.js" type="text/javascript"></script>  

</head>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<div class="wrapper">

<div id="header">
     <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tbody><tr bgcolor="#cbd1d4"> 
                  <td width="52%" valign="bottom" rowspan="2"><img class="noborder"  src="./../images/topleft.jpg"  usemap="#logoMap" style="vertical-align:bottom" />
                  <map id="logoMap" name="logoMap"> <area shape="rect" coords="30,0,275,105" href="{$Main_URL}"/></map>
</td>
                  <td height="40" width="48%" valign="top"><div align="right"> 
                      <table cellspacing="0" cellpadding="0" border="0" width="60%">
                        <tbody><tr> 
                          <td height="21" width="55%" class="cellno"></td>
                        </tr>
                        <tr> 
                          <td style="text-align:right;">{if $loggedin}{$LANG.welcomeback} {$clientsdetails.firstname}! <a href="logout.php">{$LANG.clientareanavlogout}</a>{else} <a href="{$Whmcs_URL}clientarea.php" style="color: blue;"><span style="background:url({$Main_URL}images/login_img.png)  no-repeat;padding-left:18px;font-weight:bold"> Client Login</span></a>
						  {/if}</td>
                        </tr>
                      </tbody></table>
                    </div></td>
                </tr> 
                <tr> 
                  <td><img height="194" width="374" src="./../images/top2.jpg"/></td>
                </tr>
                <tr valign="middle" style='background-image:url({$Main_URL}images/menubarbg.gif)'>                 
                  <td height="40" colspan="2"><div align="center"> 
                      <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
                       <tr> 
                         <td width="14%" valign="middle"><div align="center">
						 <a onmouseover="MM_swapImage('home','','{$Main_URL}images/home1.jpg',1)" onmouseout="MM_swapImgRestore()" href="{$Main_URL}index.php"><img  name="home" height="32" width="74" src="./../images/home.jpg"/></a></div></td>
                          <td width="0%"><div align="center"><img src="{$Main_URL}images/menubar.gif" width="2" height="36"></div></td>
                          <td width="14%" valign="middle"><div align="center"><a href="{$Main_URL}linux_shared.php" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage('shared','','{$Main_URL}images/shared1.jpg',1);MM_showMenu(window.mm_menu_0623103733_0,0,32,null,'shared')"><img src="{$Main_URL}images/shared.jpg" name="shared" width="74" height="32" border="0"></a></div></td>
                          <td width="0%"><div align="center"><img src="{$Main_URL}images/menubar.gif" width="2" height="36"></div></td>
                          <td width="10%" valign="middle"><div align="center"><a href="{$Main_URL}linux_vps.php" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage('vps','','{$Main_URL}images/vps1.jpg',1);MM_showMenu(window.mm_menu_0623103901_0,0,32,null,'vps')"><img src="{$Main_URL}images/vps.jpg" name="vps" width="74" height="32" border="0"></a></div></td>
                          <td width="0%"><div align="center"><img src="{$Main_URL}images/menubar.gif" width="2" height="36"></div></td>
                          <td width="14%"><div align="center"><a href="{$Whmcs_URL}cart.php?gid=8" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('dedicated','','{$Main_URL}images/dedicated1.jpg',1)"><img src="{$Main_URL}images/dedicated.jpg" name="dedicated" width="91" height="32" border="0"></a></div></td>
                          <td width="0%"><div align="center"><img src="{$Main_URL}images/menubar.gif" width="2" height="36"></div></td>
                          <td width="14%"><div align="center"><a href="{$Whmcs_URL}domainchecker.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('domains','','{$Main_URL}images/domains1.jpg',1)"><img src="{$Main_URL}images/domains.jpg" name="domains" width="74" height="32" border="0"></a></div></td>
                          <td width="0%"><div align="center"><img src="{$Main_URL}images/menubar.gif" width="2" height="36"></div></td>
                          <td width="14%"><div align="center"><a href="{$Main_URL}linux_reseller.php" onMouseOut="MM_swapImgRestore();MM_startTimeout();" onMouseOver="MM_swapImage('reseller','','{$Main_URL}images/reseller1.jpg',1);MM_showMenu(window.mm_menu_0623104007_0,0,32,null,'reseller')"><img src="{$Main_URL}images/reseller.jpg" name="reseller" width="74" height="32" border="0"></a></div></td>
                          <td width="0%"><div align="center"><img src="{$Main_URL}images/menubar.gif" width="2" height="36"></div></td>
                          <td width="14%"><div align="center"><a href="{$Whmcs_URL}contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('contact','','{$Main_URL}images/contact1.jpg',1)"><img src="{$Main_URL}images/contact.jpg" name="contact" width="74" height="32" border="0"></a></div></td>
                          <td width="0%"><div align="center"><img src="{$Main_URL}images/menubar.gif" width="2" height="36"></div></td>
                          <td width="12%"><div align="center"><a href="{$Whmcs_URL}submitticket.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('support','','{$Main_URL}images/support1.jpg',1)"><img src="{$Main_URL}images/support.jpg" name="support" width="74" height="32" border="0"></a></div></td>
                        </tr>
                      </table>
                    </div></td>
                </tr>
              </tbody></table>
</div>


<table class="topnavbar"><tr class="topnavbar"><td><a href="index.php">{$LANG.globalsystemname}</a></td><td><a href="clientarea.php">{$LANG.clientareatitle}</a></td><td><a href="announcements.php">{$LANG.announcementstitle}</a></td><td><a href="knowledgebase.php">{$LANG.knowledgebasetitle}</a></td><td><a href="supporttickets.php">{$LANG.supportticketspagetitle}</a></td><td><a href="downloads.php">{$LANG.downloadstitle}</a></td>{if $loggedin}<td><a href="logout.php">{$LANG.logouttitle}</a></td>{/if}</tr></table>

<p>{if "templates/$template/images/$filename.png"|file_exists}<img src="templates/{$template}/images/{$filename}.png" align="right" alt="" />{/if}
<span class="heading">{$pagetitle}</span><br />
{$LANG.globalyouarehere}: {$breadcrumbnav}</p>

{if $loggedin}
<p align="center" class="clientarealinks"><a href="clientarea.php"><img src="images/clientarea.gif" border="0" hspace="5" align="absmiddle" alt="" />{$LANG.clientareanavhome}</a><a href="clientarea.php?action=details"><img src="images/details.gif" border="0" hspace="5" align="absmiddle" alt="" />{$LANG.clientareanavdetails}</a><a href="clientarea.php?action=products"><img src="images/products.gif" border="0" hspace="5" align="absmiddle" alt="" />{$LANG.clientareaproducts}</a><a href="clientarea.php?action=domains"><img src="images/domains.gif" border="0" hspace="5" align="absmiddle" alt="" />{$LANG.clientareanavdomains}</a><a href="clientarea.php?action=invoices"><img src="images/invoices.gif" border="0" hspace="5" align="absmiddle" alt="" />{$LANG.invoices}</a><a href="supporttickets.php"><img src="images/supporttickets.gif" border="0" hspace="5" align="absmiddle" alt="" />{$LANG.clientareanavsupporttickets}</a><a href="affiliates.php"><img src="images/affiliates.gif" border="0" hspace="5" align="absmiddle" alt="" />{$LANG.affiliatestitle}</a><a href="clientarea.php?action=emails"><img src="images/emails.gif" border="0" hspace="5" align="absmiddle" alt="" />{$LANG.clientareaemails}</a></p>
{/if}