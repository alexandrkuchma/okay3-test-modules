<?php
/* Smarty version 3.1.36, created on 2020-06-20 17:45:44
  from 'C:\OSPanel\domains\test-tasks\design\okay_shop\html\cart_coupon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eee2118c56620_06170682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681683221e2adaa0819754c372499402e6279938' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test-tasks\\design\\okay_shop\\html\\cart_coupon.tpl',
      1 => 1591208405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eee2118c56620_06170682 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['coupon_request']->value) {?>
    <div class="coupon">
        <div class="fn_switch coupon__title" data-language="cart_coupon"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['coupon_error']->value) {?>
            <div class="message_error">
                <?php if ($_smarty_tpl->tpl_vars['coupon_error']->value == 'invalid') {?>
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon_error;?>

                <?php } elseif ($_smarty_tpl->tpl_vars['coupon_error']->value == 'empty') {?>
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_empty_coupon_error;?>

                <?php }?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['cart']->value->coupon->min_order_price > 0) {?>
            <div class="message_success">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->code, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon_min;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value->coupon->min_order_price ));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        <?php }?>

        <div class="d-flex align-items-center coupon__group">
            <div class="form__group form__group--coupon <?php if (!$_smarty_tpl->tpl_vars['coupon_error']->value) {?>filled<?php }?>">
                <input class="fn_coupon form__input form__input--coupon form__placeholder--focus" type="text" name="coupon_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->code, ENT_QUOTES, 'UTF-8', true);?>
">
                <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
</span>
            </div>
            <input class="form__button form__button--coupon fn_sub_coupon" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_purchases_coupon_apply;?>
">
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['cart']->value->coupon_discount > 0) {?>
        <div class="purchase_detail__item">
            <div class="purchase_detail__column_name">
                <div class="purchase_detail__name" data-language="cart_coupon"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
:</div>
            </div>
            <div class="purchase_detail__column_value">
                <div class="purchase_detail__price">
                    <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->coupon_percent, ENT_QUOTES, 'UTF-8', true);?>
 %</i>
                    &minus; <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value->coupon_discount ));?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </div>
            </div>
        </div>
    <?php }
}
}
}
