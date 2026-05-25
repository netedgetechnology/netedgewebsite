{if $langchange}<div align="right">{$setlanguage}</div><br />{/if}
  </div>
  <div id="side_menu">
    <p class="header">{$LANG.quicknav}</p>
    <ul>
      <li><a href="index.php"><img src="templates/{$template}/images/icons/support.gif" alt="{$LANG.globalsystemname}" width="16" height="16" border="0" class="absmiddle" /></a> <a href="index.php" title="{$LANG.globalsystemname}">{$LANG.globalsystemname}</a></li>
      <li><a href="clientarea.php"><img src="templates/{$template}/images/icons/clientarea.gif" alt="{$LANG.clientareatitle}" width="16" height="16" border="0" class="absmiddle" /></a> <a href="clientarea.php" title="{$LANG.clientareatitle}">{$LANG.clientareatitle}</a></li>
      <li><a href="announcements.php" title="{$LANG.announcementstitle}"><img src="templates/{$template}/images/icons/announcement.gif" alt="{$LANG.announcementstitle}" width="16" height="16" border="0" class="absmiddle" /></a> <a href="announcements.php" title="{$LANG.announcementstitle}">{$LANG.announcementstitle}</a></li>
      <li><a href="knowledgebase.php" title="{$LANG.knowledgebasetitle}"><img src="templates/{$template}/images/icons/knowledgebase.gif" alt="{$LANG.knowledgebasetitle}" width="16" height="16" border="0" class="absmiddle" /></a> <a href="knowledgebase.php" title="{$LANG.knowledgebasetitle}">{$LANG.knowledgebasetitle}</a></li>
      <li><a href="submitticket.php" title="{$LANG.supportticketssubmitticket}"><img src="templates/{$template}/images/icons/submit-ticket.gif" alt="{$LANG.supportticketssubmitticket}" width="16" height="16" border="0" class="absmiddle" /></a> <a href="submitticket.php" title="{$LANG.supportticketspagetitle}">{$LANG.supportticketssubmitticket}</a></li>
      <li><a href="downloads.php" title="{$LANG.downloadstitle}"><img src="templates/{$template}/images/icons/downloads.gif" alt="{$LANG.downloadstitle}" width="16" height="16" border="0" class="absmiddle" /></a> <a href="downloads.php" title="{$LANG.downloadstitle}">{$LANG.downloadstitle}</a></li>
      <li><a href="cart.php" title="{$LANG.ordertitle}"><img src="templates/{$template}/images/icons/order.gif" alt="{$LANG.ordertitle}" width="16" height="16" border="0" class="absmiddle" /></a> <a href="cart.php" title="{$LANG.ordertitle}">{$LANG.ordertitle}</a></li>
    </ul>
{if $livehelp}
<p class="header">{$LANG.chatlivehelp}</p>
{$livehelp}
{/if}
{if $loggedin}
    <p class="header">{$LANG.accountinfo}</p>
<p><strong>{$clientsdetails.firstname} {$clientsdetails.lastname} {if $clientsdetails.companyname}({$clientsdetails.companyname}){/if}</strong><br />
{$clientsdetails.address1}, {$clientsdetails.address2}<br />
{$clientsdetails.city}, {$clientsdetails.state}, {$clientsdetails.postcode}<br />
{$clientsdetails.countryname}<br />
{$clientsdetails.email}<br /><br />
{if $condlinks.addfunds}<img src="templates/{$template}/images/icons/money.gif" alt="Add Funds" width="22" height="22" border="0" class="absmiddle" /> <a href="clientarea.php?action=addfunds">{$LANG.addfunds}</a>{/if}</p>
    <p class="header">{$LANG.accountstats}</p>
    <p>{$LANG.statsnumproducts}: <strong>{$clientsstats.productsnumactive}</strong> ({$clientsstats.productsnumtotal})<br />
{$LANG.statsnumdomains}: <strong>{$clientsstats.numactivedomains}</strong> ({$clientsstats.numdomains})<br />
{$LANG.statsnumtickets}: <strong>{$clientsstats.numtickets}</strong><br />
{$LANG.statsnumreferredsignups}: <strong>{$clientsstats.numaffiliatesignups}</strong><br />
{$LANG.statscreditbalance}: <strong>{$clientsstats.creditbalance}</strong><br />
{$LANG.statsdueinvoicesbalance}: <strong>{if $clientsstats.numdueinvoices>0}<span class="red">{/if}{$clientsstats.dueinvoicesbalance}{if $clientsstats.numdueinvoices>0}</span>{/if}</strong></p>
{else}
<form method="post" action="{$systemsslurl}dologin.php">
  <p class="header">{$LANG.clientlogin}</p>
  <p><strong>{$LANG.email}</strong><br />
    <input name="username" type="text" size="25" />
  </p>
  <p><strong>{$LANG.loginpassword}</strong><br />
    <input name="password" type="password" size="25" />
  </p>
  <p>
    <input type="checkbox" name="rememberme" />
    {$LANG.loginrememberme}</p>
  <p>
    <input type="submit" class="submitbutton" value="{$LANG.loginbutton}" />
  </p>
</form>
  <p class="header">{$LANG.knowledgebasesearch}</p>
<form method="post" action="knowledgebase.php?action=search">
  <p>
    <input name="search" type="text" size="25" /><br />
    <select name="searchin">
      <option value="Knowledgebase">{$LANG.knowledgebasetitle}</option>
      <option value="Downloads">{$LANG.downloadstitle}</option>
    </select>
    <input type="submit" value="{$LANG.go}" />
  </p>
</form>
{/if}
{if $twitterusername}<br />
<p align="center"><a href="http://twitter.com/{$twitterusername}" target="_blank"><img src="images/twitterfollow.png" width="150" border="0" alt="{$LANG.twitterfollow}" /></a></p>
{/if}
  </div>
  <div class="clear"></div>
</div>
{$footeroutput}
<div class="footer">
   <div class="footer_resize">
     <div style="height:auto;" class="bo1">
    
      <h2 style="padding-left:28px; color:#605f5f;border:none;font-size:20px;font-weight:bold;">Services</h2>
      
      <ul>  
      
      
<li>      <a href="http://www.netedgetechnology.com/monthly_server_management.php"> Monthly Server Management</a></li>
<li>  <a href="http://www.netedgetechnology.com/controlpanel_server_management.php">  Controlpanel Server Management</a></li>
<li>  <a href="http://www.netedgetechnology.com/hourly_technical_support.php">Hourly Technical Support</a></li>
    <!--<a href="desktop_support.php">Desktop Management</a> -->
<li>     <a href="http://www.netedgetechnology.com/infrastructure_management.php">Infrastructure Management </a>  </li>
      
      
<li>      <a href="http://www.netedgetechnology.com/remote_desktop_support.php">Remote Desktop Support</a></li>
<li><a href="http://www.netedgetechnology.com/webhosting_support.php">Webhosting Support</a></li>
          
        <li><a href="http://www.netedgetechnology.com/onetime_server_setup.php">Onetime Server Setup</a></li>
       <li><a href="http://www.netedgetechnology.com/server_migration.php">Server Migration</a>  </li>
<li>    <a href="http://www.netedgetechnology.com/server_security.php">Server Security</a> </li>
<li><a href="http://www.netedgetechnology.com/software_development.php"> Software Development </a></li>
<li><a href="http://www.netedgetechnology.com/search_engine_optimization.php"> Search Engine Optimization </a></li>
<li><a href="http://www.netedgetechnology.com/content_writing.php"> Content Writing </a></li>
     </ul>
<p>&nbsp;</p>
    </div>
    
    <div style="width:200px;" class="bo1">
      <h2 style="padding-left:28px; color:#605f5f;border:none;font-size:20px;font-weight:bold;"> About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
      <ul>
      <li><a href="http://www.netedgetechnology.com/our_expertise.php">Our Expertise</a>
       </li><li><a href="http://www.netedgetechnology.com/whyus.php"><span> Why us ? </span></a></li>       
         <li><a href="http://www.netedgetechnology.com/company.php"> Company </a></li>
      
        
         <li><a href="http://www.netedgetechnology.com/term.php">Terms</a></li>
       
          <li><a href="http://www.netedgetechnology.com/affiliate.php">Affiliate  </a></li>
         
          <li><a href="http://www.netedgetechnology.com/career.php">  Career </a></li>
          <li><a href="http://www.netedgetechnology.com/contact_us.php">  Contact us </a></li>

      </ul>
      <p>&nbsp;</p>
    </div>
    
    <div style="width:170px;" class="bo1">
      <h2 style="padding-left:28px; color:#605f5f;border:none;font-size:20px;font-weight:bold;">General</h2>
      <ul>
        <li><a href="http://blog.netedgetechnology.com/">Blog </a></li>
        <li><a href="http://www.netedgetechnology.com/testimonial.php">Testimonial </a></li>
        <li><a href="http://www.netedgetechnology.com/get_a_quote.php">Get A Quote</a></li>
        <li><a href="http://www.netedgetechnology.com/sitemap.php">Sitemap</a></li>
      </ul>
      <p>&nbsp;</p>
    </div>
    
    
       <div id="livechat_box">
         <div style="width:213px; height:85px;" class="bo1"> <a href="javascript:void(window.open('http://www.netedgetechnology.com/livesupport/livezilla.php','','width=590,height=550,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img border="0" alt="LiveZilla Live Help" src="http://www.netedgetechnology.com/livesupport/image.php?id=03"></a>
             <noscript>
             &lt;div&gt;&lt;a href="http://www.netedgetechnology.com/livesupport/livezilla.php" target="_blank"&gt;Start
               
               Live Help Chat&lt;/a&gt;&lt;/div&gt;
           </noscript>
         </div>
         <div id="callnow_box">Call On: 079-65492378</div>
         </div>
       <div class="clr"></div>
  </div>
</div>
</body>
</html>