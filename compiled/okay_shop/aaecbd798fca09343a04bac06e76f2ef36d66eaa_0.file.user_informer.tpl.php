<?php
/* Smarty version 3.1.36, created on 2020-06-20 18:03:28
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\user_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee2540bb98b3_40034675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaecbd798fca09343a04bac06e76f2ef36d66eaa' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\user_informer.tpl',
      1 => 1592665405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_5eee2540bb98b3_40034675 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user']->value) {?>
	<a class="d-inline-flex align-items-center account__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'user'),$_smarty_tpl ) );?>
">
		<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"user_icon"), 0, false);
?>
        <span class="account__text" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
 </span>
		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<?php echo $_smarty_tpl->tpl_vars['completed_orders_count']->value;?>

	</a>
<?php } else { ?>
	<a class="d-inline-flex align-items-center account__link" href="javascript:;" onclick="document.location.href = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"login"),$_smarty_tpl ) );?>
'" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
">
		<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"user_icon"), 0, true);
?>
        <span class="account__text" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
 </span>
		<span class="account__login" data-language="index_login"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
</span>
	</a>
<?php }
}
}
