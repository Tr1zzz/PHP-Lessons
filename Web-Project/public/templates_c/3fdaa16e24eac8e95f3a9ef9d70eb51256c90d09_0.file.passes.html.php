<?php
/* Smarty version 4.3.4, created on 2024-06-02 10:58:46
  from 'E:\XAMP\htdocs\Web-Project\app\views\passes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665c344639ceb1_26645631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fdaa16e24eac8e95f3a9ef9d70eb51256c90d09' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\passes.html',
      1 => 1717318715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665c344639ceb1_26645631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1834289210665c34463925f4_54723610', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_1834289210665c34463925f4_54723610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1834289210665c34463925f4_54723610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main Content -->
<section id="passes" class="wrapper alt style2">
    <div class="inner">
        <h2 class="major">Choose Your Pass</h2>
        <p>Select the best gym pass for your lifestyle and start your fitness journey today.</p>
        <div class="features">
            <article>
                <span class="icon solid fa-sun"></span>
                <h3 class="major">Day Pass</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['day']->value['description'];?>
</p>
                <p><strong>Price: $<?php echo $_smarty_tpl->tpl_vars['day']->value['price'];?>
/month</strong><br>Duration: <?php echo $_smarty_tpl->tpl_vars['day']->value['duration'];?>
 month</p>
                <ul class="actions">
                    <li><button class="button" onclick="addToCart('<?php echo $_smarty_tpl->tpl_vars['day']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['day']->value['price'];?>
', '<?php echo $_smarty_tpl->tpl_vars['day']->value['id_type'];?>
')">Add
                            to Cart</button></li>
                </ul>
            </article>
            <article>
                <span class="icon solid fa-moon"></span>
                <h3 class="major">Night Pass</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['night']->value['description'];?>
</p>
                <p><strong>Price: $<?php echo $_smarty_tpl->tpl_vars['night']->value['price'];?>
/month</strong><br>Duration: <?php echo $_smarty_tpl->tpl_vars['night']->value['duration'];?>
 month</p>
                <ul class="actions">
                    <li><button class="button"
                            onclick="addToCart('<?php echo $_smarty_tpl->tpl_vars['night']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['night']->value['price'];?>
', '<?php echo $_smarty_tpl->tpl_vars['night']->value['id_type'];?>
')">Add to
                            Cart</button></li>
                </ul>
            </article>
            <article>
                <span class="icon solid fa-clock"></span>
                <h3 class="major">24-Hour Pass</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['forall']->value['description'];?>
</p>
                <p><strong>Price: $<?php echo $_smarty_tpl->tpl_vars['forall']->value['price'];?>
/month</strong><br>Duration: <?php echo $_smarty_tpl->tpl_vars['forall']->value['duration'];?>
 month</p>
                <ul class="actions">
                    <li><button class="button"
                            onclick="addToCart('<?php echo $_smarty_tpl->tpl_vars['forall']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['forall']->value['price'];?>
', '<?php echo $_smarty_tpl->tpl_vars['forall']->value['id_type'];?>
')">Add to
                            Cart</button></li>
                </ul>
            </article>
        </div>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
