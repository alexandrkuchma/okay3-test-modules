<?php
/* Smarty version 3.1.36, created on 2020-06-20 16:41:26
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee1206352b95_91931352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '360007ebdfd2c747a03ac073c2b7be7920c28ed6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\menu.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee1206352b95_91931352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu_items_tree' => 
  array (
    'compiled_filepath' => 'C:\\OSPanel\\domains\\test-tasks\\compiled\\okay_shop\\360007ebdfd2c747a03ac073c2b7be7920c28ed6_0.file.menu.tpl.php',
    'uid' => '360007ebdfd2c747a03ac073c2b7be7920c28ed6',
    'call_name' => 'smarty_template_function_menu_items_tree_5616361515eee1204ed0000_87176962',
  ),
));
if ($_smarty_tpl->tpl_vars['menu_items']->value) {?>
    
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_items_tree', array('menu_items'=>$_smarty_tpl->tpl_vars['menu_items']->value,'level'=>1), true);?>

<?php }
}
/* smarty_template_function_menu_items_tree_5616361515eee1204ed0000_87176962 */
if (!function_exists('smarty_template_function_menu_items_tree_5616361515eee1204ed0000_87176962')) {
function smarty_template_function_menu_items_tree_5616361515eee1204ed0000_87176962(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['menu_items']->value) {?>
    <ul class="fn_menu_list menu_group__list menu_group__list--<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 menu_group--<?php echo $_smarty_tpl->tpl_vars['menu']->value->group_id;?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->visible == 1) {?>
        <li class="menu_group__item menu_group__item--<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value->submenus && $_smarty_tpl->tpl_vars['item']->value->count_children_visible > 0) {?>menu_eventer<?php }?>">
            <a class="menu_group__link" <?php if ($_smarty_tpl->tpl_vars['item']->value->url) {?> href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->url;
$_prefixVariable1 = ob_get_clean();
if (preg_match('~^https?://~',$_prefixVariable1)) {
echo $_smarty_tpl->tpl_vars['item']->value->url;
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'page','url'=>$_smarty_tpl->tpl_vars['item']->value->url),$_smarty_tpl ) );
}?>"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['item']->value->submenus && $_smarty_tpl->tpl_vars['item']->value->is_target_blank) {?>target="_blank"<?php }?>>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </a>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_items_tree', array('menu_items'=>$_smarty_tpl->tpl_vars['item']->value->submenus,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

        </li>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php }?>
    <?php
}}
/*/ smarty_template_function_menu_items_tree_5616361515eee1204ed0000_87176962 */
}
