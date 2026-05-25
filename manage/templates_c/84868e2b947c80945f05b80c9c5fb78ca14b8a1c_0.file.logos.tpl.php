<?php
/* Smarty version 4.5.3, created on 2026-05-16 05:55:09
  from '/home/netedge/public_html/manage/templates/six/store/ssl/shared/logos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a0806bdced333_41303847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84868e2b947c80945f05b80c9c5fb78ca14b8a1c' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/store/ssl/shared/logos.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0806bdced333_41303847 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-block standout-2 standout">
    <div class="container">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.trusted'),$_smarty_tpl ) );?>

        <br><br>
        <div class="logos">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/rapidssl-logo.png">
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/geotrust-logo.png">
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/symantec-logo.png">
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
