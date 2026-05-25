<?php
/* Smarty version 4.5.3, created on 2026-05-16 05:55:09
  from '/home/netedge/public_html/manage/templates/six/store/ssl/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a0806bdca9a86_83195030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4300255c749d0487cba7e806e7d9d558dd10a15' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/store/ssl/index.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0806bdca9a86_83195030 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'store.css'),$_smarty_tpl ) );?>
" rel="stylesheet">

<div class="landing-page ssl">

    <div class="hero">
        <div class="container">
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.title"),$_smarty_tpl ) );?>
</h2>
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.tagline1"),$_smarty_tpl ) );?>
<br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.tagline2"),$_smarty_tpl ) );?>
</h3>

        </div>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['certificatesToDisplay']->value['dv']) || !empty($_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ov']) || !empty($_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ev'])) {?>
        <div class="validation-levels">
            <div class="container">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.chooseLevel"),$_smarty_tpl ) );?>
</h3>
                <div class="row">
                    <?php if (!empty($_smarty_tpl->tpl_vars['certificatesToDisplay']->value['dv'])) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/store/ssl/shared/certificate-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>"store.ssl.landingPage.rapidSSL.title",'recommendedFor'=>"store.ssl.landingPage.rapidSSL.recommended",'certificate'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['dv']['certificate'],'features'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['dv']['features'],'description'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['dv']['description'],'logo'=>$_smarty_tpl->tpl_vars['certificateFeatures']->value[$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['dv']['certificate']->configoption1]["logo"]), 0, true);
?>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ov'])) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/store/ssl/shared/certificate-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>"store.ssl.landingPage.geoTrust.title",'recommendedFor'=>"store.ssl.landingPage.geoTrust.recommended",'certificate'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ov']['certificate'],'features'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ov']['features'],'description'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ov']['description'],'logo'=>$_smarty_tpl->tpl_vars['certificateFeatures']->value[$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ov']['certificate']->configoption1]["logo"]), 0, true);
?>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ev'])) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/store/ssl/shared/certificate-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>"store.ssl.landingPage.digicert.title",'recommendedFor'=>"store.ssl.landingPage.digicert.recommended",'certificate'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ev']['certificate'],'features'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ev']['features'],'description'=>$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ev']['description'],'logo'=>$_smarty_tpl->tpl_vars['certificateFeatures']->value[$_smarty_tpl->tpl_vars['certificatesToDisplay']->value['ev']['certificate']->configoption1]["logo"]), 0, true);
?>
                    <?php }?>
                </div>
                <p class="help-me-choose">
                    <a href="#viewall" id="btnViewAllCerts"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.viewAll"),$_smarty_tpl ) );?>
</a>
                    |
                    <a href="#helpmechoose" id="btnHelpMeChoose"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.choose"),$_smarty_tpl ) );?>
</a>
                </p>
            </div>
        </div>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/store/ssl/shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('current'=>''), 0, true);
?>

    <div class="content-block what-is-ssl standout">
        <div class="container">

            <div class="row">
                <div class="col-sm-4 col-md-3 col-sm-push-8 col-md-push-9 text-right hidden-xs">
                    <br><br>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/ssl-multi.png">
                </div>
                <div class="col-sm-8 col-md-9 col-sm-pull-4 col-md-pull-3">

                    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.what"),$_smarty_tpl ) );?>
</h2>

                    <div class="text-center visible-xs">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/ssl-multi.png">
                        <br><br>
                    </div>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.whatInfo"),$_smarty_tpl ) );?>
</p>

                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.secureConnection"),$_smarty_tpl ) );?>

                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.encrypts"),$_smarty_tpl ) );?>

                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.padlock"),$_smarty_tpl ) );?>

                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.authenticates"),$_smarty_tpl ) );?>

                        </li>
                    </ul>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.certTypeInfo",'dvLink'=>routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'dv'),'ovLink'=>routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'ov'),'evLink'=>routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'ev')),$_smarty_tpl ) );?>
</p>

                </div>
            </div>

        </div>
    </div>

    <div class="content-block ssl-benefits standout">
        <div class="container">

            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.title"),$_smarty_tpl ) );?>
</h2>

            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.subtitle"),$_smarty_tpl ) );?>
</h4>

            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.higherResults"),$_smarty_tpl ) );?>
</p>

            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.reasons"),$_smarty_tpl ) );?>
:</p>

            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <i class="fas fa-globe"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.encrypt"),$_smarty_tpl ) );?>

                </div>
                <div class="col-md-2 col-sm-4">
                    <i class="fas fa-user"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.privacy"),$_smarty_tpl ) );?>

                </div>
                <div class="col-md-2 col-sm-4">
                    <i class="fas fa-credit-card"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.secure"),$_smarty_tpl ) );?>

                </div>
                <div class="col-md-2 col-sm-4">
                    <i class="fas fa-lock"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.https"),$_smarty_tpl ) );?>

                </div>
                <div class="col-md-2 col-sm-4">
                    <i class="fas fa-trophy"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.legitimacy"),$_smarty_tpl ) );?>

                </div>
                <div class="col-md-2 col-sm-4">
                    <i class="fas fa-search"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.benefits.seo"),$_smarty_tpl ) );?>

                </div>
            </div>

        </div>
    </div>

    <div class="standout-1">
        <div class="container browser">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.browser.title"),$_smarty_tpl ) );?>
</h3>
            <div class="browser-image">
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/browser-warning.jpg">
            </div>
        </div>
        <div class="browser-notice">
            <div class="wrapper-container">
                <div class="wrapper">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/padlock-x.png">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.browser.insecureNotice"),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="content-block competitive-upgrade-promo">
        <div class="container">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.secureInMinutes"),$_smarty_tpl ) );?>

        </div>
    </div>

    <div class="content-block standout">
        <div class="container secure-wildcard">
            <div class="col-md-8">
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.secureTitle"),$_smarty_tpl ) );?>
</h2>
                <br>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.wildcardSubtitle"),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.wildcardDescription"),$_smarty_tpl ) );?>
</p>

            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.protectSubdomain"),$_smarty_tpl ) );?>
</p>
                <ul>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.emailServer"),$_smarty_tpl ) );?>
</li>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.webmailAccess"),$_smarty_tpl ) );?>
</li>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.ftpAccess"),$_smarty_tpl ) );?>
</li>
                    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.websiteControl"),$_smarty_tpl ) );?>
</li>
                </ul>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.dontLeave"),$_smarty_tpl ) );?>
</p>
            <p class="text-left"><a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'wildcard');?>
" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.compare"),$_smarty_tpl ) );?>
</a></p>
            </div>
            <div class="col-md-push-1 col-md-3 quote-section">
                <q class="google-quote"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.evs.googleQuote"),$_smarty_tpl ) );?>
</q>
                <p>~Pierre Far, Product Manager,<br>
                    Google</p>
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/auth/google_signin.png" alt="Google">
            </div>
        </div>
    </div>

    <div class="content-block detailed-info" id="sslDetail">
        <div class="container">

            <div class="panel">
                <div class="panel-heading">
                    <h4 data-toggle="collapse" data-parent="#accordion" href="#collapseHelpMeChoose" class="panel-title expand">
                       <span class="arrow"><i class="fas fa-chevron-down"></i></span>
                      <a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.title"),$_smarty_tpl ) );?>
</a>
                    </h4>
                </div>
                <div id="collapseHelpMeChoose" class="panel-collapse collapse in">
                <div class="panel-body">

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.guide"),$_smarty_tpl ) );?>
</p>

                    <div class="row help-me-choose">
                        <div class="col-sm-4">
                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.dv.title"),$_smarty_tpl ) );?>
</h4>

                            <ul>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.dv.verify"),$_smarty_tpl ) );?>
</li>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.dv.issued"),$_smarty_tpl ) );?>
</li>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.dv.compliance"),$_smarty_tpl ) );?>
</li>
                            </ul>

                            <p class="ideal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.dv.for"),$_smarty_tpl ) );?>
</p>

                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/card-library.png" class="img-responsive">

                            <p class="ssl-types-expl"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.dv.type"),$_smarty_tpl ) );?>
</p>

                            <a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'dv');?>
" class="btn btn-primary btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.dv.browse"),$_smarty_tpl ) );?>
</a>
                        </div>
                        <div class="col-sm-4">
                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ov.title"),$_smarty_tpl ) );?>
</h4>

                            <ul>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ov.verify"),$_smarty_tpl ) );?>
</li>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ov.issued"),$_smarty_tpl ) );?>
</li>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ov.compliance"),$_smarty_tpl ) );?>
</li>
                            </ul>

                            <p class="ideal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ov.for"),$_smarty_tpl ) );?>
</p>

                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/card-driving.png" class="img-responsive">

                            <p class="ssl-types-expl"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ov.type"),$_smarty_tpl ) );?>
</p>

                            <a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'ov');?>
" class="btn btn-primary btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ov.browse"),$_smarty_tpl ) );?>
</a>
                        </div>
                        <div class="col-sm-4">
                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ev.title"),$_smarty_tpl ) );?>
</h4>

                            <ul>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ev.verify"),$_smarty_tpl ) );?>
</li>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ev.issued"),$_smarty_tpl ) );?>
</li>
                                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ev.compliance"),$_smarty_tpl ) );?>
</li>
                            </ul>

                            <p class="ideal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ev.for"),$_smarty_tpl ) );?>
</p>

                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/card-passport.png" class="img-responsive">

                            <p class="ssl-types-expl"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ev.type"),$_smarty_tpl ) );?>
</p>

                            <a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'ev');?>
" class="btn btn-primary btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.help.ev.browse"),$_smarty_tpl ) );?>
</a>
                        </div>
                    </div>

                </div>
              </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapseAllCerts" class="panel-title expand">
                   <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                  <a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.viewAll"),$_smarty_tpl ) );?>
</a>
                </h4>
              </div>
                <div id="collapseAllCerts" class="panel-collapse collapse">
                <div class="panel-body">

                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/store/ssl/shared/currency-chooser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                    <ul class="ssl-certs-all">
                        <?php if (count($_smarty_tpl->tpl_vars['certificates']->value) > 0) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['certificates']->value, 'products', false, 'type');
$_smarty_tpl->tpl_vars['products']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->do_else = false;
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h4>
                                                <p><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</p>
                                            </div>
                                            <div class="col-sm-3 col-sm-offset-1">
                                                <div class="padded-cell price">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'from'),$_smarty_tpl ) );?>
<br>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['product']->value->pricing()->best()->yearlyPrice();?>
</strong>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="padded-cell">
                                                    <form method="post" action="<?php echo routePath('cart-order');?>
">
                                                        <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                                                        <button type="submit" class="btn btn-success btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.buyNow"),$_smarty_tpl ) );?>
</button>
                                                    </form>
                                                    <a href="<?php echo routePath("store-product-group",$_smarty_tpl->tpl_vars['routePathSlug']->value,$_smarty_tpl->tpl_vars['type']->value);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"learnmore"),$_smarty_tpl ) );?>
</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['inPreview']->value) {?>
                            <div class="lead text-center">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.shared.noProducts"),$_smarty_tpl ) );?>

                            </div>
                        <?php }?>
                    </ul>

                </div>
              </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title expand" data-toggle="collapse" data-parent="#accordion" data-target="#collapseMultiYear">
                        <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.title'),$_smarty_tpl ) );?>

                    </h4>
                </div>
                <div id="collapseMultiYear" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.p1'),$_smarty_tpl ) );?>
</p>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.p2'),$_smarty_tpl ) );?>
</p>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.p3'),$_smarty_tpl ) );?>
</p>
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.p4'),$_smarty_tpl ) );?>

                            <div class="text-center margin-10">
                                <img alt="SSL certificate lifecycle" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/symantec/multi-year-flow.png">
                            </div>
                        </p>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.p5'),$_smarty_tpl ) );?>
</p>
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.benefits.title'),$_smarty_tpl ) );?>
</h3>
                        <ul>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.benefits.b1'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.benefits.b2'),$_smarty_tpl ) );?>
</li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.ssl.landingPage.multiYear.benefits.b3'),$_smarty_tpl ) );?>
</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapseFaq" class="panel-title expand">
                    <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                  <a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.title"),$_smarty_tpl ) );?>
</a>
                </h4>
              </div>
                <div id="collapseFaq" class="panel-collapse collapse">
                <div class="panel-body">

                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.q1"),$_smarty_tpl ) );?>
</h4>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.a1"),$_smarty_tpl ) );?>
</p>

                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.q2"),$_smarty_tpl ) );?>
</h4>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.a2"),$_smarty_tpl ) );?>
</p>

                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.q3"),$_smarty_tpl ) );?>
</h4>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.a3"),$_smarty_tpl ) );?>
</p>

                    <?php if ($_smarty_tpl->tpl_vars['inPreview']->value || $_smarty_tpl->tpl_vars['certTypes']->value['wildcard'] > 0) {?>

                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.q4"),$_smarty_tpl ) );?>
</h4>

                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.a4"),$_smarty_tpl ) );?>
 <a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['routePathSlug']->value,'wildcard');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"learnmore"),$_smarty_tpl ) );?>
</a></p>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['inPreview']->value || $_smarty_tpl->tpl_vars['certTypes']->value['ev'] > 0) {?>

                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.q5"),$_smarty_tpl ) );?>
</h4>

                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.ssl.landingPage.faq.a5"),$_smarty_tpl ) );?>
</p>

                    <?php }?>
                </div>
              </div>
            </div>

        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/store/ssl/shared/logos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>

<?php echo '<script'; ?>
>
jQuery(document).ready(function() {
    jQuery(".panel-heading .panel-title[data-toggle='collapse']").on("click", function() {
        const expand = jQuery(this).find('span.arrow:first-child i');
        if (expand.hasClass('fa-chevron-right')) {
            expand.removeClass('fa-chevron-right').addClass('fa-chevron-down');
        } else {
            expand.removeClass('fa-chevron-down').addClass('fa-chevron-right');
        }
    });

    function handleAccordionNavigation(targetId, offset = 75) {
        const targetSection = jQuery('#' + targetId);

        if (targetSection.length) {
            jQuery('.collapse.show').collapse('hide');

            targetSection.collapse('show');

            targetSection.prev('.panel-heading')
                .find('span.arrow i')
                .removeClass('fa-chevron-right')
                .addClass('fa-chevron-down');

            setTimeout(() => {
                jQuery('html, body').animate({
                    scrollTop: targetSection.offset().top - offset
                }, 500);
            }, 300)
        }
    }
    
    jQuery('#btnViewAllCerts').click(function(e) {
        e.preventDefault();
        handleAccordionNavigation('collapseAllCerts');
    });
    
    jQuery('#btnHelpMeChoose').click(function(e) {
        e.preventDefault();
        handleAccordionNavigation('collapseHelpMeChoose');
    });
    
    const hash = location.hash.replace('#', '');
    if (hash === 'viewall') {
        handleAccordionNavigation('collapseAllCerts');
    } else if (hash === 'helpmechoose') {
        handleAccordionNavigation('collapseHelpMeChoose');
    }
});
<?php echo '</script'; ?>
>
<?php }
}
