<?php
/* Smarty version 4.3.2, created on 2024-04-03 16:24:15
  from 'E:\XAMP\htdocs\php_05_obiektowosc\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660d668f2e0b70_08403282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb88d680c694e961d119b63cc50189ed1c42699' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\php_05_obiektowosc\\app\\CalcView.html',
      1 => 1712154249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d668f2e0b70_08403282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106356936660d668f2cf7e3_19280840', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1232652266660d668f2d08e4_04333894', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_106356936660d668f2cf7e3_19280840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_106356936660d668f2cf7e3_19280840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Example footer content inserted into the main template from the calculator template<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1232652266660d668f2d08e4_04333894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1232652266660d668f2d08e4_04333894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Simple Loan Calculator</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
			<fieldset>
				<label for="x">Amount:</label>
				<input id="x" type="text" placeholder="value x" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">

				<label for="y">Loan term (in years):</label>
				<input id="y" type="text" placeholder="value y" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">

				<label for="z">Interest rate:</label>
				<input id="z" type="text" placeholder="value z" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
">

				<button type="submit" class="pure-button">Calculate</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

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
</div>

<?php
}
}
/* {/block 'content'} */
}
