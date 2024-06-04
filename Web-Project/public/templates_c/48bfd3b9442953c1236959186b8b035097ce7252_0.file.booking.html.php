<?php
/* Smarty version 4.3.4, created on 2024-05-28 08:21:23
  from 'E:\XAMP\htdocs\Web-Project\app\views\booking.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665577e3465246_38541434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48bfd3b9442953c1236959186b8b035097ce7252' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\booking.html',
      1 => 1716877281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665577e3465246_38541434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16836651665577e34554b1_32910267', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_16836651665577e34554b1_32910267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16836651665577e34554b1_32910267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Main -->
    <section id="wrapper">
        <section class="wrapper spotlight style1">
            <div class="inner">
                <div class="content">
                    <h2 class="major">Available Classes</h2>
                    <p>Select and book your preferred classes.</p>
                    <div id="class-list">
                        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"booking"),$_smarty_tpl ) );?>
">
                            <div class="field">
                                <label for="class-select">Choose a Class:</label>
                                <select name="class-select" id="class-select">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['service']->value['id_service'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['service']->value['time'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <ul class="actions">
                                <li><input type="submit" value="Book Class" class="primary" /></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>

        <?php
}
}
/* {/block 'content'} */
}
