<?php
/* Smarty version 3.1.36, created on 2020-06-21 22:28:00
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\desktop_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eefb4c028b947_41993092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca139b4c3e4a7abe4e66924260bfc482db97db4b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\desktop_categories.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_5eefb4c028b947_41993092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_tree3' => 
  array (
    'compiled_filepath' => 'C:\\OSPanel\\domains\\test-tasks\\compiled\\okay_shop\\ca139b4c3e4a7abe4e66924260bfc482db97db4b_0.file.desktop_categories.tpl.php',
    'uid' => 'ca139b4c3e4a7abe4e66924260bfc482db97db4b',
    'call_name' => 'smarty_template_function_categories_tree3_12584876845eefb4c024f460_28758803',
  ),
));
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree3', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1), true);?>

<?php }
/* smarty_template_function_categories_tree3_12584876845eefb4c024f460_28758803 */
if (!function_exists('smarty_template_function_categories_tree3_12584876845eefb4c024f460_28758803')) {
function smarty_template_function_categories_tree3_12584876845eefb4c024f460_28758803(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
        <div class="level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>categories_nav__menu<?php } else { ?>categories_nav__subcategory<?php }?>">
            <ul class="fn_category_scroll <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>categories_menu <?php } else { ?>subcategory <?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['c']->value->visible && ($_smarty_tpl->tpl_vars['c']->value->has_products || $_smarty_tpl->tpl_vars['settings']->value->show_empty_categories)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories && $_smarty_tpl->tpl_vars['c']->value->count_children_visible && $_smarty_tpl->tpl_vars['level']->value < 3) {?>
                            <li class="categories_menu__item has_child">
                                <a class="d-flex align-items-center categories_menu__link<?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>
                                            <span class="categories_menu__icon lazy" data-bg="url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,22,22,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
)" ></span>
                                        <?php }?>
                                    <?php }?>
                                    <span class="categories_menu__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'arrow_right'), 0, true);
?>
                                </a>
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree3', array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                            </li>
                        <?php } else { ?>
                            <li class="categories_menu__item">
                                <a class="categories_menu__link d-flex align-items-center d-flex align-items-center<?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['level']->value == 3) {?>
                                        <div class="d-flex align-items-center justify-content-center categories_menu__image">
                                            <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                                <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,65,65,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,90,90,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir,null,null,true ));?>
"/>
                                            <?php } else { ?>
                                                <div class="categories__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 1) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                            <span class="categories_menu__icon lazy" data-bg="url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,22,22,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
)"></span>
                                        <?php }?>
                                    <?php }?>
                                    <span class="d-flex align-items-center categories_menu__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }
}}
/*/ smarty_template_function_categories_tree3_12584876845eefb4c024f460_28758803 */
}
