<?php
/* Smarty version 4.5.3, created on 2026-05-16 06:07:30
  from '/home/netedge/public_html/manage/templates/six/knowledgebasearticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6a0809a2a56f22_80970329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '004f96f570897db6482e8750ead4f4e026b82f47' => 
    array (
      0 => '/home/netedge/public_html/manage/templates/six/knowledgebasearticle.tpl',
      1 => 1778505712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a0809a2a56f22_80970329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/netedge/public_html/manage/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="kb-article-title">
    <a href="#" class="btn btn-link btn-print" onclick="window.print();return false"><i class="fas fa-print"></i></a>
    <h2><?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
</h2>
</div>

<?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['voted']) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"knowledgebaseArticleRatingThanks"),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success alert-bordered-left",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
}?>

<div class="kb-article-content">
    <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['text'];?>

</div>

<?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['editLink']) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['editLink'];?>
" class="btn btn-default btn-sm pull-right">
        <i class="fas fa-pencil-alt fa-fw"></i>
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['edit'];?>

    </a>
<?php }?>

<ul class="kb-article-details">
    <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['tags']) {?>
        <li><i class="fas fa-tag"></i> <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['tags'];?>
</li>
    <?php }?>
    <li><i class="fas fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['useful'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaseratingtext'];?>
</li>
</ul>
<div class="clearfix"></div>

<div class="kb-rate-article hidden-print">
    <form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['urlfriendlytitle'];
$_prefixVariable3 = ob_get_clean();
echo routePath('knowledgebase-article-view',$_prefixVariable2,$_prefixVariable3);?>
" method="post">
        <input type="hidden" name="useful" value="vote">
        <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['voted']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaserating'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasehelpful'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['voted']) {?>
            <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['useful'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaseratingtext'];?>
 (<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['votes'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasevotes'];?>
)
        <?php } else { ?>
            <button type="submit" name="vote" value="yes" class="btn btn-lg btn-link"><i class="far fa-thumbs-up"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaseyes'];?>
</button>
            <button type="submit" name="vote" value="no" class="btn btn-lg btn-link"><i class="far fa-thumbs-down"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaseno'];?>
</button>
        <?php }?>
    </form>
</div>

<?php if ($_smarty_tpl->tpl_vars['kbarticles']->value) {?>
    <div class="kb-also-read">
        <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaserelated'];?>
</h3>
        <div class="kbarticles">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbarticles']->value, 'kbarticle', false, 'num');
$_smarty_tpl->tpl_vars['kbarticle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['kbarticle']->value) {
$_smarty_tpl->tpl_vars['kbarticle']->do_else = false;
?>
                <div>
                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['urlfriendlytitle'];
$_prefixVariable5 = ob_get_clean();
echo routePath('knowledgebase-article-view',$_prefixVariable4,$_prefixVariable5);?>
">
                        <i class="glyphicon glyphicon-file"></i> <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>

                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['editLink']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['editLink'];?>
" class="admin-inline-edit">
                            <i class="fas fa-pencil-alt fa-fw"></i>
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['edit'];?>

                        </a>
                    <?php }?>
                    <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kbarticle']->value['article'],100,"...");?>
</p>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
