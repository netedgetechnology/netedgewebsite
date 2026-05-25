<?php
/* Smarty version 4.5.3, created on 2026-05-16 05:56:07
  from '/home/netedge/public_html/manage/templates/six/store/ssl/shared/features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a0806f7dec0b1_02150214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cd9b7d16bceaa1ab23a93082ce33b296bd9e1da' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/store/ssl/shared/features.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0806f7dec0b1_02150214 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-block standout-features standout">
    <div class="container">
        <div class="row text-center">
            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'ev') {?>
                <div class="col-sm-4">
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ev.visualVerification'),$_smarty_tpl ) );?>
</h4>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ev.visualVerificationDescription'),$_smarty_tpl ) );?>
</p>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'ov') {?>
                <div class="col-sm-4">
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ov.ov'),$_smarty_tpl ) );?>
</h4>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ov.ovDescription'),$_smarty_tpl ) );?>
</p>
                </div>
            <?php } else { ?>
                <div class="col-sm-4">
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.delivery'),$_smarty_tpl ) );?>
</h4>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.deliveryDescription'),$_smarty_tpl ) );?>
</p>
                </div>
            <?php }?>
            <div class="col-sm-4">
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.siteSeal'),$_smarty_tpl ) );?>
</h4>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.siteSealDescription'),$_smarty_tpl ) );?>
</p>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'ev') {?>
                <div class="col-sm-4">
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ev.warranty'),$_smarty_tpl ) );?>
</h4>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ev.warrantyDescription'),$_smarty_tpl ) );?>
</p>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'ov') {?>
                <div class="col-sm-4">
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ov.warranty'),$_smarty_tpl ) );?>
</h4>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ov.warrantyDescription'),$_smarty_tpl ) );?>
</p>
                </div>
            <?php } else { ?>
                <div class="col-sm-4">
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.googleRanking'),$_smarty_tpl ) );?>
</h4>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.googleRankingDescription'),$_smarty_tpl ) );?>
</p>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<div class="content-block features">
    <div class="container">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.features'),$_smarty_tpl ) );?>
</h3>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature">
                    <i class="fas fa-lock"></i>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.encryptData'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature">
                    <i class="fas fa-credit-card"></i>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.secureTransactions'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature">
                    <i class="fas fa-trophy"></i>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.legitimacy'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature">
                    <i class="fas fa-certificate"></i>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.fastestSsl'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature">
                    <i class="fas fa-window-maximize"></i>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.browserCompatability'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature">
                    <i class="fas fa-search"></i>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.seoRank'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature">
                    <i class="far fa-clock"></i>
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'ev') {?>
                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ev.issuance'),$_smarty_tpl ) );?>
</h4>
                    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'ov') {?>
                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.ov.issuance'),$_smarty_tpl ) );?>
</h4>
                    <?php } else { ?>
                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.issuance'),$_smarty_tpl ) );?>
</h4>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature">
                    <i class="fas fa-sync"></i>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.shared.freeReissues'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
