<?php
/* Smarty version 3.1.36, created on 2020-06-20 19:19:11
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\products_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee36ffec5951_07563019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fffca4d7cf1c53816688a38c6fc3cf0a3381982d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\products_content.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:product_list.tpl' => 1,
  ),
),false)) {
function content_5eee36ffec5951_07563019 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="product_item col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
            <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <div class="col-xs-12">
        <div class="boxed boxed--big boxed--notify ">
            <span data-language="products_not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_not_found;?>
</span>
        </div>
    </div>
<?php }
}
}
