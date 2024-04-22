<?php
/* Smarty version 4.3.2, created on 2024-04-16 15:42:55
  from 'E:\XAMP\htdocs\6.Ochrona-zasobów\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_661e805fe8c6e1_45309315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '651b7a2a991ddf9492e9916b3a6de42cd3740be0' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\6.Ochrona-zasobów\\app\\views\\CalcView.tpl',
      1 => 1713274741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_661e805fe8c6e1_45309315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_796984379661e805fe758f4_59180700', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_431606116661e805fe76220_55197146', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/views/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_796984379661e805fe758f4_59180700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_796984379661e805fe758f4_59180700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Example footer content inserted into the main template from the calculator template<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_431606116661e805fe76220_55197146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_431606116661e805fe76220_55197146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Simple Loan Calculator</h2>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

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

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
