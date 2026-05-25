<?php
/* Smarty version 4.5.3, created on 2026-05-16 06:25:04
  from '/home/netedge/public_html/manage/templates/six/store/spamexperts/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a080dc0e76b24_45146318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b373117e1698cf19f1dcf1d3238e034dfe6a38fe' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/store/spamexperts/index.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a080dc0e76b24_45146318 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'store.css'),$_smarty_tpl ) );?>
" rel="stylesheet">

<div class="landing-page mail-services">

    <div class="hero">
        <div class="container">
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.headline"),$_smarty_tpl ) );?>
</h2>
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.tagline"),$_smarty_tpl ) );?>
</h3>
        </div>
    </div>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-landing-page" aria-expanded="false">
            <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"toggleNav"),$_smarty_tpl ) );?>
</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-landing-page">
          <ul class="nav navbar-nav">
            <li><a href="#" onclick="smoothScroll('#overview');return false"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.tab.overview"),$_smarty_tpl ) );?>
</a></li>
            <li><a href="#" onclick="smoothScroll('#howitworks');return false"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.tab.howitworks"),$_smarty_tpl ) );?>
</a></li>
            <li><a href="#" onclick="smoothScroll('#pricing');return false"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.tab.pricing"),$_smarty_tpl ) );?>
</a></li>
            <li><a href="#" onclick="smoothScroll('#faq');return false"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.tab.faq"),$_smarty_tpl ) );?>
</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="product-options" id="overview">
        <div class="container">
            <?php if ($_smarty_tpl->tpl_vars['numberOfFeaturedProducts']->value > 0) {?>
                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['products']->value['incoming']) {?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['numberOfFeaturedProducts']->value == 1) {?>col-sm-6 col-sm-offset-3<?php } elseif ($_smarty_tpl->tpl_vars['numberOfFeaturedProducts']->value == 2) {?>col-sm-6<?php } else { ?>col-sm-6 col-md-4<?php }?>">
                            <div class="item">
                                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.incoming.title"),$_smarty_tpl ) );?>
</h4>
                                <div class="icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.incoming.tagline"),$_smarty_tpl ) );?>
</span>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.incoming.headline"),$_smarty_tpl ) );?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['products']->value['incoming']->pricing()->best()) {?>
                                    <div class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"from"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['products']->value['incoming']->pricing()->best()->toFullString();?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.domain"),$_smarty_tpl ) );?>
</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['inPreview']->value) {?>
                                    <div class="price">-</div>
                                <?php }?>
                                <a href="#" class="btn btn-learn-more" data-target="incoming">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.learn"),$_smarty_tpl ) );?>

                                </a>
                                <a href="#" class="btn btn-buy" data-target="incoming">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.buy"),$_smarty_tpl ) );?>

                                </a>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['products']->value['outgoing']) {?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['numberOfFeaturedProducts']->value == 1) {?>col-sm-6 col-sm-offset-3<?php } elseif ($_smarty_tpl->tpl_vars['numberOfFeaturedProducts']->value == 2) {?>col-sm-6<?php } else { ?>col-sm-6 col-md-4<?php }?>">
                            <div class="item">
                                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.outgoing.title"),$_smarty_tpl ) );?>
</h4>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.outgoing.tagline"),$_smarty_tpl ) );?>
</span>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.outgoing.headline"),$_smarty_tpl ) );?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['products']->value['outgoing']->pricing()->best()) {?>
                                    <div class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"from"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['products']->value['outgoing']->pricing()->best()->toFullString();?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.domain"),$_smarty_tpl ) );?>
</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['inPreview']->value) {?>
                                    <div class="price">-</div>
                                <?php }?>
                                <a href="#" class="btn btn-learn-more" data-target="outgoing">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.learn"),$_smarty_tpl ) );?>

                                </a>
                                <a href="#" class="btn btn-buy" data-target="outgoing">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.buy"),$_smarty_tpl ) );?>

                                </a>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['products']->value['incomingarchiving'] || $_smarty_tpl->tpl_vars['products']->value['outgoingarchiving'] || $_smarty_tpl->tpl_vars['products']->value['incomingoutgoingarchiving']) {?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['numberOfFeaturedProducts']->value == 1) {?>col-sm-6 col-sm-offset-3<?php } elseif ($_smarty_tpl->tpl_vars['numberOfFeaturedProducts']->value == 2) {?>col-sm-6<?php } else { ?>col-sm-6 col-md-4<?php }?>">
                            <div class="item">
                                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.archiving.title"),$_smarty_tpl ) );?>
</h4>
                                <div class="icon">
                                    <i class="fas fa-cube"></i>
                                </div>
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.archiving.tagline"),$_smarty_tpl ) );?>
</span>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.archiving.headline"),$_smarty_tpl ) );?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['products']->value['incomingarchiving'] && $_smarty_tpl->tpl_vars['products']->value['incomingarchiving']->pricing()->best()) {?>
                                    <div class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"from"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['products']->value['incomingarchiving']->pricing()->best()->toFullString();?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.domain"),$_smarty_tpl ) );?>
</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['products']->value['outgoingarchiving'] && $_smarty_tpl->tpl_vars['products']->value['outgoingarchiving']->pricing()->best()) {?>
                                    <div class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"from"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['products']->value['outgoingarchiving']->pricing()->best()->toFullString();?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.domain"),$_smarty_tpl ) );?>
</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['products']->value['incomingoutgoingarchiving']->pricing()->best()) {?>
                                    <div class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"from"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['products']->value['incomingoutgoingarchiving']->pricing()->best()->toFullString();?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.domain"),$_smarty_tpl ) );?>
</div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['inPreview']->value) {?>
                                    <div class="price">-</div>
                                <?php }?>
                                <a href="#" class="btn btn-learn-more" data-target="archiving">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.learn"),$_smarty_tpl ) );?>

                                </a>
                                <a href="#" class="btn btn-buy" data-target="incomingoutgoingarchiving">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.overview.buy"),$_smarty_tpl ) );?>

                                </a>
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['inPreview']->value) {?>
                <div class="text-center lead preview-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.preview"),$_smarty_tpl ) );?>
</div>
            <?php }?>
            <div class="powered-by">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'store.poweredBy','service'=>''),$_smarty_tpl ) );?>
<img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/spamexperts/logo_white.png">
            </div>
        </div>
    </div>

    <div class="content-block text20 text-center">
        <div class="container">
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.blockSpamHeadline"),$_smarty_tpl ) );?>
</h2>
        </div>
    </div>

    <div class="content-block tabs light-grey-bg" id="howitworks">
        <div class="container">
                <ul class="nav nav-tabs" role="tablist">
                    <?php if ($_smarty_tpl->tpl_vars['products']->value['incoming'] || $_smarty_tpl->tpl_vars['inPreview']->value) {?>
                        <li role="presentation" class="active">
                            <a href="#incoming" aria-controls="incoming" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.incoming.title"),$_smarty_tpl ) );?>
</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['products']->value['outgoing'] || $_smarty_tpl->tpl_vars['inPreview']->value) {?>
                        <li role="presentation">
                            <a href="#outgoing" aria-controls="outgoing" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.outgoing.title"),$_smarty_tpl ) );?>
</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['products']->value['incomingarchiving'] || $_smarty_tpl->tpl_vars['products']->value['outgoingarchiving'] || $_smarty_tpl->tpl_vars['products']->value['incomingoutgoingarchiving'] || $_smarty_tpl->tpl_vars['inPreview']->value) {?>
                        <li role="presentation">
                            <a href="#archiving" aria-controls="archiving" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.archiving.title"),$_smarty_tpl ) );?>
</a>
                        </li>
                    <?php }?>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="incoming">

                        <div class="benefits">
                            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.title"),$_smarty_tpl ) );?>
</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.1"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.2"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.3"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.4"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.5"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.6"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.7"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.8"),$_smarty_tpl ) );?>

                                </div>
                            </div>
                        </div>

                        <h3<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.q1"),$_smarty_tpl ) );?>
</h3>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.a1"),$_smarty_tpl ) );?>
</p>

                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.q2"),$_smarty_tpl ) );?>
</h3>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.a2"),$_smarty_tpl ) );?>
</p>

                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.q3"),$_smarty_tpl ) );?>
</h3>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.incoming.a3"),$_smarty_tpl ) );?>
</p>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="outgoing">

                        <div class="benefits">
                            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.title"),$_smarty_tpl ) );?>
</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.1"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.2"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.3"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.4"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.5"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.6"),$_smarty_tpl ) );?>

                                </div>
                            </div>
                        </div>

                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.q1"),$_smarty_tpl ) );?>
</h3>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.a1"),$_smarty_tpl ) );?>
</p>

                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.q2"),$_smarty_tpl ) );?>
</h3>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.outgoing.a2"),$_smarty_tpl ) );?>
</p>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="archiving">

                        <div class="benefits">
                            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.title"),$_smarty_tpl ) );?>
</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.1"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.2"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.3"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.4"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.5"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.6"),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-6">
                                    <i class="fas fa-check"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.7"),$_smarty_tpl ) );?>

                                </div>
                            </div>
                        </div>

                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.q1"),$_smarty_tpl ) );?>
</h3>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.a1"),$_smarty_tpl ) );?>
</p>

                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.q2"),$_smarty_tpl ) );?>
</h3>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.a2a"),$_smarty_tpl ) );?>
</p>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.benefits.archiving.a2b"),$_smarty_tpl ) );?>
</p>

                    </div>
                </div>
        </div>
    </div>

    <div class="content-block get-started" id="pricing">
        <div class="container">
            <form method="post" action="<?php echo routePath('cart-order');?>
">
                <input type="hidden" name="productkey" value="<?php echo $_smarty_tpl->tpl_vars['products']->value['incoming']->productKey;?>
" id="productKey">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.signup.title"),$_smarty_tpl ) );?>
</h2>
                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.signup.choose"),$_smarty_tpl ) );?>
</h4>
                        <?php if ($_smarty_tpl->tpl_vars['numberOfFeaturedProducts']->value > 0) {?>
                            <div class="btn-group choose-product" role="group">
                                <?php if ($_smarty_tpl->tpl_vars['products']->value['incoming']) {?>
                                    <button type="button" class="btn btn-default active" data-product="incoming"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.options.incomingFilter"),$_smarty_tpl ) );?>
</button>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['products']->value['outgoing']) {?>
                                    <button type="button" class="btn btn-default" data-product="outgoing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.options.outgoingFilter"),$_smarty_tpl ) );?>
</button>
                                <?php }?>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['inPreview']->value) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.preview"),$_smarty_tpl ) );?>

                        <?php }?>
                        <br><br>
                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.signup.additional"),$_smarty_tpl ) );?>
</h4>
                        <div class="additional-options">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productOptions']->value, 'options', false, 'productKey');
$_smarty_tpl->tpl_vars['options']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productKey']->value => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->do_else = false;
?>
                                <div class="option options-<?php echo $_smarty_tpl->tpl_vars['productKey']->value;?>
">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="options" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['product'];?>
">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.options.addFor",'description'=>$_smarty_tpl->tpl_vars['option']->value['description'],'pricing'=>$_smarty_tpl->tpl_vars['option']->value['pricing']->toFullString()),$_smarty_tpl ) );?>

                                        </label><br>
                                    <?php
}
if ($_smarty_tpl->tpl_vars['option']->do_else) {
?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.signup.none"),$_smarty_tpl ) );?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right">
                        <?php if ($_smarty_tpl->tpl_vars['products']->value['incoming'] && $_smarty_tpl->tpl_vars['products']->value['incoming']->pricing()->best()) {?>
                            <span class="price price-incoming"><?php echo $_smarty_tpl->tpl_vars['products']->value['incoming']->pricing()->best()->toFullString();?>
</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['products']->value['incomingarchiving'] && $_smarty_tpl->tpl_vars['products']->value['incomingarchiving']->pricing()->best()) {?>
                            <span class="price price-incomingarchiving"><?php echo $_smarty_tpl->tpl_vars['products']->value['incomingarchiving']->pricing()->best()->toFullString();?>
</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['products']->value['outgoing'] && $_smarty_tpl->tpl_vars['products']->value['outgoing']->pricing()->best()) {?>
                            <span class="price price-outgoing"><?php echo $_smarty_tpl->tpl_vars['products']->value['outgoing']->pricing()->best()->toFullString();?>
</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['products']->value['outgoingarchiving'] && $_smarty_tpl->tpl_vars['products']->value['outgoingarchiving']->pricing()->best()) {?>
                            <span class="price price-outgoingarchiving"><?php echo $_smarty_tpl->tpl_vars['products']->value['outgoingarchiving']->pricing()->best()->toFullString();?>
</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['products']->value['incomingoutgoing'] && $_smarty_tpl->tpl_vars['products']->value['incomingoutgoing']->pricing()->best()) {?>
                            <span class="price price-incomingoutgoing"><?php echo $_smarty_tpl->tpl_vars['products']->value['incomingoutgoing']->pricing()->best()->toFullString();?>
</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['products']->value['incomingoutgoingarchiving'] && $_smarty_tpl->tpl_vars['products']->value['incomingoutgoingarchiving']->pricing()->best()) {?>
                            <span class="price price-incomingoutgoingarchiving"><?php echo $_smarty_tpl->tpl_vars['products']->value['incomingoutgoingarchiving']->pricing()->best()->toFullString();?>
</span>
                        <?php }?>
                        <br><br><br><br><br>
                        <button type="submit" class="btn btn-order-now btn-lg">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.signup.order"),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
            </form>

            <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['currencies']->value) {?>
                <br>
                <form method="post" action="">
                    <select name="currency" class="form-control ssl-currency-selector" onchange="submit()" style="width:250px;">
                        <option><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"changeCurrency"),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['prefix'];?>
 <?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['code'];?>
)</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['prefix'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </form>
            <?php }?>

        </div>
    </div>

    <div class="content-block faq" id="faq">
        <div class="container">
            <h3 class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.title"),$_smarty_tpl ) );?>
</h3>
            <div class="row">
                <div class="col-md-4">
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.q1"),$_smarty_tpl ) );?>
</h4>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.a1"),$_smarty_tpl ) );?>
</p>
                <hr>
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.q2"),$_smarty_tpl ) );?>
</h4>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.a2"),$_smarty_tpl ) );?>
</p>
                <div class="hidden-md hidden-lg"><hr></div>
                </div>
                <div class="col-md-4">
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.q3"),$_smarty_tpl ) );?>
</h4>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.a3"),$_smarty_tpl ) );?>
</p>
                <hr>
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.q4"),$_smarty_tpl ) );?>
</h4>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.a4"),$_smarty_tpl ) );?>
</p>
                <div class="hidden-md hidden-lg"><hr></div>
                </div>
                <div class="col-md-4">
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.q5"),$_smarty_tpl ) );?>
</h4>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.a5"),$_smarty_tpl ) );?>
</p>
                <hr>
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.q6"),$_smarty_tpl ) );?>
</h4>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"store.emailServices.faqs.a6"),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block">
        <div class="container text-center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/marketconnect/spamexperts/logo.png">
        </div>
    </div>

</div>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#inputDomainChooser').multiselect({
            buttonWidth: '250px',
            dropRight: true,
            nonSelectedText: 'Choose domain(s)'
        });

        $('.landing-page.mail-services .get-started .choose-product button').click(function(e) {
            var product = $(this).data('product');
            $('.landing-page.mail-services .get-started .choose-product button').removeClass('active');
            $(this).addClass('active');
            $('.landing-page.mail-services .get-started .additional-options .option').hide();
            $('.landing-page.mail-services .get-started .additional-options .options-' + product).show();
            $('.landing-page.mail-services .get-started .price').hide();
            $('.landing-page.mail-services .get-started .price-' + product).show();
            $('#productKey').val('spamexperts_' + product);
        });

        $('.landing-page.mail-services .get-started .additional-options input[type="checkbox"]').click(function(e) {
            if ($(this).is(":checked")) {
                $('.landing-page.mail-services .get-started .additional-options input[type="checkbox"]').not($(this)).prop('checked', false);
                $('.landing-page.mail-services .get-started .price').hide();
                $('.landing-page.mail-services .get-started .price-' + $(this).val()).show();
                $('#productKey').val('spamexperts_' + $(this).val());
            } else {
                var product = $('.landing-page.mail-services .get-started .choose-product button.active').data('product');
                $('.landing-page.mail-services .get-started .price').hide();
                $('.landing-page.mail-services .get-started .price-' + product).show();
                $('#productKey').val('spamexperts_' + product);
            }
        });

        $('.btn-learn-more').click(function(e) {
            e.preventDefault();
            $('#howitworks a[href="#' + $(this).data('target') + '"]').tab('show');
            smoothScroll('#howitworks');
        });

        $('.btn-buy').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target'),
                pricing = $('#pricing');
            if (target === 'incomingoutgoingarchiving') {
                if (pricing.find('button[data-product="incoming"]').length) {
                    pricing.find('button[data-product="incoming"]').click();
                } else {
                    pricing.find('button[data-product="outgoing"]').click();
                }
                var option = $('input[name="options"][value="incomingoutgoingarchiving"]').first();
                if (option.is(':checked')) {
                    option.click();
                }
                option.click();
            } else {
                pricing.find('button[data-product="' + $(this).data('target') + '"]').click();
            }
            smoothScroll('#pricing');
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
