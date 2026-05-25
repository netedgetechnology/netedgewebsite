<?php
/* Smarty version 4.5.3, created on 2026-05-20 00:47:43
  from '/home/netedge/public_html/manage/templates/six/includes/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a0d04af0ffa61_85692383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '521ed48d0898f2affbff647ec7d84ad1ef9fad23' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/includes/panel.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0d04af0ffa61_85692383 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
    <?php if ((isset($_smarty_tpl->tpl_vars['headerTitle']->value))) {?>
        <div class="panel-heading">
            <h3 class="panel-title"><strong><?php echo $_smarty_tpl->tpl_vars['headerTitle']->value;?>
</strong></h3>
        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['bodyContent']->value))) {?>
        <div class="panel-body<?php if ((isset($_smarty_tpl->tpl_vars['bodyTextCenter']->value))) {?> text-center<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['bodyContent']->value;?>

        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['footerContent']->value))) {?>
        <div class="panel-footer<?php if ((isset($_smarty_tpl->tpl_vars['footerTextCenter']->value))) {?> text-center<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['footerContent']->value;?>

        </div>
    <?php }?>
</div>
<?php }
}
