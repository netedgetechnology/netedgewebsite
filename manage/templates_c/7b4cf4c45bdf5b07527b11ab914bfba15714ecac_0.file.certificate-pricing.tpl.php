<?php
/* Smarty version 4.5.3, created on 2026-05-16 05:56:07
  from '/home/netedge/public_html/manage/templates/six/store/ssl/shared/certificate-pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a0806f7ddb4b3_83424361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b4cf4c45bdf5b07527b11ab914bfba15714ecac' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/store/ssl/shared/certificate-pricing.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0806f7ddb4b3_83424361 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-block certificate-options <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
    <div class="container">

        <h3 class="pull-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.pricing'),$_smarty_tpl ) );?>
</h3>

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/store/ssl/shared/currency-chooser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <div class="clearfix"></div>

        <br>

        <div class="row">
            <div class="<?php if (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) == 1) {?>col-md-6 col-md-offset-3<?php } elseif (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) == 2) {?>col-md-10 col-md-offset-1<?php } else { ?>col-sm-12<?php }?>">
                <div class="row row-pricing-table">
                    <div class="col-sm-<?php if (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) == 1) {?>6<?php } elseif (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) == 2) {?>4<?php } else { ?>3<?php }?> sidebar hidden-xs">
                        <div class="header"></div>
                        <ul>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.encryption256'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.issuanceTime'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.greatFor'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.warrantyValue'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.siteSeal'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.freeReissues'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.browserSupport'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.oneYearPrice'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.twoYearPrice'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.threeYearPrice'),$_smarty_tpl ) );?>
</li>
                        </ul>
                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) > 0) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <div class="col-sm-<?php if (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) == 1) {?>6<?php } elseif (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) == 2) {?>4<?php } else { ?>3<?php }?>">
                                <div class="header">
                                    <h4><?php echo $_smarty_tpl->tpl_vars['certificateFeatures']->value[$_smarty_tpl->tpl_vars['product']->value->configoption1]['displayName'];?>
</h4>
                                </div>
                                <ul>
                                    <li><i class="fas fa-check"></i></li>
                                    <li><?php echo $_smarty_tpl->tpl_vars['certificateFeatures']->value[$_smarty_tpl->tpl_vars['product']->value->configoption1]['issuance'];?>
</li>
                                    <li><?php echo $_smarty_tpl->tpl_vars['certificateFeatures']->value[$_smarty_tpl->tpl_vars['product']->value->configoption1]['for'];?>
</li>
                                    <li>USD $<?php echo $_smarty_tpl->tpl_vars['certificateFeatures']->value[$_smarty_tpl->tpl_vars['product']->value->configoption1]['warranty'];?>
</li>
                                    <li><i class="fas fa-check"></i></li>
                                    <li><i class="fas fa-check"></i></li>
                                    <li>99.9%</li>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->pricing()->annual()) {?>
                                        <li class="price 1yr"><?php echo $_smarty_tpl->tpl_vars['product']->value->pricing()->annual()->yearlyPrice();?>
</li>
                                    <?php } else { ?>
                                        <li class="price 1yr na">-</li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->pricing()->biennial()) {?>
                                        <li class="price 2yr"><?php echo $_smarty_tpl->tpl_vars['product']->value->pricing()->biennial()->yearlyPrice();?>
</li>
                                    <?php } else { ?>
                                        <li class="price 2yr na">-</li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->pricing()->triennial()) {?>
                                        <li class="price 3yr"><?php echo $_smarty_tpl->tpl_vars['product']->value->pricing()->triennial()->yearlyPrice();?>
</li>
                                    <?php } else { ?>
                                        <li class="price 3yr na">-</li>
                                    <?php }?>
                                </ul>
                                <form method="post" action="<?php echo routePath('cart-order');?>
">
                                    <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                                    <button type="submit" class="btn btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.buyNow'),$_smarty_tpl ) );?>
</button>
                                </form>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <div class="col-xs-9">
                            <div class="lead preview-text">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.noProducts'),$_smarty_tpl ) );?>

                            </div>
                        </div>
                    <?php }?>
                </div>
                <br>
                <div class="row">
                    <div class="<?php if (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) == 1) {?>col-sm-6 col-sm-offset-6<?php } elseif (count($_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['type']->value]) == 2) {?>col-sm-8 col-sm-offset-4<?php } else { ?>col-sm-9 col-sm-offset-3<?php }?> text-center">
                        <a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value);?>
#helpmechoose" class="help-me-choose">
                            <i class="fas fa-question-circle"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.helpMeChoose'),$_smarty_tpl ) );?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
