<?php
/* Smarty version 4.3.2, created on 2024-04-14 18:21:43
  from 'E:\XAMP\htdocs\5.A-B\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661c0297314590_56655929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeeb595a1b052b2a2a7bd8d590a91072dd506c4f' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\5.A-B\\app\\views\\CalcView.tpl',
      1 => 1713111697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661c0297314590_56655929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1727071561661c0297305169_95603976', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_975759338661c0297305df1_02278793', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/views/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_1727071561661c0297305169_95603976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1727071561661c0297305169_95603976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Example footer content inserted into the main template from the calculator template<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_975759338661c0297305df1_02278793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_975759338661c0297305df1_02278793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Simple Loan Calculator</h2>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <fieldset>
        <label for="x">Amount:</label>
        <input id="x" type="text" placeholder="value x" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">

        <label for="y">Loan period (in years):</label>
        <input id="y" type="text" placeholder="value y" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">

        <label for="z">Interest rate:</label>
        <input id="z" type="text" placeholder="value z" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
">
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Calculate</button>
</form>

<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <h4>Errors occurred: </h4>
    <ol class="err">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <h4>Information: </h4>
    <ol class="inf">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    <h4>Result</h4>
    <p class="res">
    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

    </p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
