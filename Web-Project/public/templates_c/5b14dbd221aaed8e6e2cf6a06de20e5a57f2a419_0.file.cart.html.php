<?php
/* Smarty version 4.3.4, created on 2024-06-02 11:46:07
  from 'E:\XAMP\htdocs\Web-Project\app\views\cart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665c3f5f1bd790_53410583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b14dbd221aaed8e6e2cf6a06de20e5a57f2a419' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\cart.html',
      1 => 1717321564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665c3f5f1bd790_53410583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1133469507665c3f5f01d343_23745003', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_1133469507665c3f5f01d343_23745003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1133469507665c3f5f01d343_23745003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="cart" class="wrapper alt style2">
    <div class="inner">
        <h2 class="major">Your Cart</h2>
        <p>Review the items in your cart and proceed to checkout.</p>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                <button class="remove-item" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_type'];?>
" onclick="removeFromCart(this)">Remove</button>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <p>Total: $<span id="total">
                <?php $_smarty_tpl->_assignInScope('total', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['item']->value['price']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

            </span></p>
        <ul class="actions">
            <li><button class="button" onclick="checkout()">Proceed to Checkout</button></li>
        </ul>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
