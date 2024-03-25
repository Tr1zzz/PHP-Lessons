<?php
/* Smarty version 4.3.2, created on 2024-03-25 21:22:24
  from 'E:\XAMP\htdocs\php_04_szablony_smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6601dd00c89981_05186257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5fb2dfed6ddcba317ca1ee8077706257e2c9ee3' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\php_04_szablony_smarty\\app\\calc.html',
      1 => 1711398074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6601dd00c89981_05186257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6888470236601dd00c79a20_87484202', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12881352426601dd00c7a533_10129483', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_6888470236601dd00c79a20_87484202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6888470236601dd00c79a20_87484202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sample footer content integrated into the main template from the calculator template<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_12881352426601dd00c7a533_10129483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12881352426601dd00c7a533_10129483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Simple Loan Calculator</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
			<fieldset>
				<label for="x">Loan Amount:</label>
				<input id="x" type="text" placeholder="Amount" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
">

				<label for="y">Loan Term (in years):</label>
				<input id="y" type="text" placeholder="Term" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
">

				<label for="z">Interest Rate (%):</label>
				<input id="z" type="text" placeholder="Rate" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
">

				<button type="submit" class="pure-button">Calculate</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

				<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
		<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
		<h4>Errors Detected: </h4>
		<ol class="err">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
		<?php }?>
		<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
		<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
		<h4>Information: </h4>
		<ol class="inf">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
		<?php }?>
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
		<h4>Result</h4>
		<p class="res">
			<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

		</p>
		<?php }?>

	</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
