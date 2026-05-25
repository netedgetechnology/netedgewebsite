<?php
/* Smarty version 4.5.3, created on 2026-05-16 05:55:09
  from '/home/netedge/public_html/manage/templates/six/store/ssl/shared/certificate-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a0806bdcbd385_20556840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5c24a0ea695ceb2f2c45f47324c439faae9508' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/store/ssl/shared/certificate-item.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0806bdcbd385_20556840 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 col-lg-4">
    <div class="item">
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>$_smarty_tpl->tpl_vars['blockTitle']->value),$_smarty_tpl ) );?>
</h4>
        <div class="logo-wrapper">
            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
">
            <span><?php echo $_smarty_tpl->tpl_vars['certificate']->value->name;?>
</span>
        </div>
        <p class="first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>$_smarty_tpl->tpl_vars['description']->value),$_smarty_tpl ) );?>
</p>
        <p class="second"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.recommendedFor"),$_smarty_tpl ) );?>
:</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>$_smarty_tpl->tpl_vars['recommendedFor']->value),$_smarty_tpl ) );?>
</p>
        <ul class="item-features">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/safety-icon.png">
                    <span><?php echo $_smarty_tpl->tpl_vars['feature']->value;?>
</span>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <form method="post" action="<?php echo routePath('cart-order');?>
">
            <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['certificate']->value->id;?>
">
            <button type="submit" class="btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.buy"),$_smarty_tpl ) );?>
</button>
        </form>
    </div>
</div>
<?php }
}
