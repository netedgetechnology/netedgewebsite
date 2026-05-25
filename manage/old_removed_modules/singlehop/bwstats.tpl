<h2>This Month Bandwidth Usage</h2>

<p>Below is a summary of the bandwidth usage for your server this month.</p>

<table class="data" width="80%" align="center" border="0" cellpadding="10" cellspacing="0">
<tr><th>Day</th><th>Inbound</th><th>Outbound</th><th>Total</th></tr>
{foreach from=$api.thismonth.inbound key=day item=inval}
<tr><td>{php}echo date("l jS F Y",mktime(0,0,0,date("m"),$this->_tpl_vars['day'],date("Y")));{/php}</td><td>{$inval} GB</td><td>{$api.thismonth.outbound.$day} GB</td><td>{php}$total = round($this->_tpl_vars['inval']+$this->_tpl_vars['api']['thismonth']['outbound'][$this->_tpl_vars['day']],2);echo $total;{/php} GB</td></tr>
{/foreach}
</table>