<?php
/* Smarty version 3.1.36, created on 2020-06-21 22:28:54
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eefb4f6b7e781_09861159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5d65c360432f55fc5e5dfe1c7bae8b027b61feb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\blog.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_sidebar.tpl' => 1,
    'file:svg.tpl' => 1,
    'file:post_list.tpl' => 1,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_5eefb4f6b7e781_09861159 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>$_smarty_tpl->tpl_vars['route_name']->value,'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>

<div class="clearfix">
        <div class="fn_mobile_toogle sidebar sidebar--right d-lg-flex flex-lg-column">
        <?php $_smarty_tpl->_subTemplateRender('file:blog_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

        <div class="blog_container blog_container--left d-flex flex-column">
        <div class="blog_container__boxed">
            <h1 class="blog__heading h1">
                <span <?php if ($_smarty_tpl->tpl_vars['page']->value->id) {?>data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>data-blog_category="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </h1>

                        <div class="fn_switch_mobile_filter switch_mobile_filter hidden-lg-up">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"catalog_icon"), 0, false);
?>
                <span data-language="blog_catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_catalog;?>
</span>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                <div class="boxed boxed--big">
                    <div class="fn_readmore">
                        <div class="block__description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
                    </div>
                </div>
            <?php }?>

            <div class="article_list f_row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                <div class="article_item f_col-sm-6 f_col-lg-4"><?php $_smarty_tpl->_subTemplateRender('file:post_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

                        <div class="products_pagination">
                <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</div>
<?php }
}
