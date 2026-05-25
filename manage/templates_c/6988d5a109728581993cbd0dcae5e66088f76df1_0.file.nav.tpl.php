<?php
/* Smarty version 4.5.3, created on 2026-05-16 05:55:09
  from '/home/netedge/public_html/manage/templates/six/store/ssl/shared/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a0806bdccefc3_36053421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6988d5a109728581993cbd0dcae5e66088f76df1' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/store/ssl/shared/nav.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0806bdccefc3_36053421 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-ssl" aria-expanded="false">
        <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'toggleNav'),$_smarty_tpl ) );?>
</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="nav-ssl">
      <ul class="nav navbar-nav">
          <li <?php if (empty($_smarty_tpl->tpl_vars['current']->value)) {?> class="active"<?php }?>><a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'overview'),$_smarty_tpl ) );?>
</a></li>
          <?php if ($_smarty_tpl->tpl_vars['certTypes']->value['dv'] > 0 || $_smarty_tpl->tpl_vars['inPreview']->value) {?>
              <li<?php if ($_smarty_tpl->tpl_vars['current']->value == 'dv') {?> class="active"<?php }?>><a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'dv');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.dvSsl'),$_smarty_tpl ) );?>
</a></li>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['certTypes']->value['wildcard'] > 0 || $_smarty_tpl->tpl_vars['inPreview']->value) {?>
              <li<?php if ($_smarty_tpl->tpl_vars['current']->value == 'wildcard') {?> class="active"<?php }?>><a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'wildcard');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.wcSsl'),$_smarty_tpl ) );?>
</a></li>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['certTypes']->value['ov'] > 0 || $_smarty_tpl->tpl_vars['inPreview']->value) {?>
              <li<?php if ($_smarty_tpl->tpl_vars['current']->value == 'ov') {?> class="active"<?php }?>><a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'ov');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ovSsl'),$_smarty_tpl ) );?>
</a></li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['certTypes']->value['ev'] > 0 || $_smarty_tpl->tpl_vars['inPreview']->value) {?>
              <li<?php if ($_smarty_tpl->tpl_vars['current']->value == 'ev') {?> class="active"<?php }?>><a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'ev');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.evSsl'),$_smarty_tpl ) );?>
</a></li>
          <?php }?>

      </ul>
    </div>
  </div>
</nav>

<?php if ($_smarty_tpl->tpl_vars['inCompetitiveUpgrade']->value) {?>
    <div class="competitive-upgrade-banner" id="competitiveUpgradeBanner">
        <div class="container">
            <button class="btn btn-default btn-sm pull-right" onclick="$('#competitiveUpgradeBanner').slideUp()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"dismiss"),$_smarty_tpl ) );?>
</button>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.competitiveUpgrade"),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.competitiveUpgradeBannerMsg",'domain'=>$_smarty_tpl->tpl_vars['competitiveUpgradeDomain']->value),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
<?php }
}
}
