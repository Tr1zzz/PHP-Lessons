<?php
/* Smarty version 4.3.4, created on 2024-05-31 10:21:02
  from 'E:\XAMP\htdocs\Web-Project\app\views\manage_classes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6659886e72c9f3_89572354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '514fc9e3beb1635a2df1d49ce44b95340841c974' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\manage_classes.html',
      1 => 1717143659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659886e72c9f3_89572354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15351412536659886e4b4149_22298903', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_15351412536659886e4b4149_22298903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15351412536659886e4b4149_22298903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main -->
<section id="wrapper">
    <section class="wrapper spotlight style1">
        <div class="inner">
            <div class="content">
                <h2 class="major">Manage Classes</h2>
                <p>Add and manage classes offered at GymFlex.</p>

                <?php if ((isset($_smarty_tpl->tpl_vars['msgs']->value))) {?>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>

                <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'manage_classes'),$_smarty_tpl ) );?>
">
                    <div class="fields">
                        <div class="field">
                            <label for="name">Class Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field">
                            <label for="class-time">Time</label>
                            <input type="datetime-local" name="time" id="time" />
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Add Class" class="primary" /></li>
                    </ul>
                </form>
                <hr>
                <h3>Existing Classes</h3>
                <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'delete_service'),$_smarty_tpl ) );?>
">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                        <li>
                            <?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['service']->value['time'];?>

                            <button type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['service']->value['id_service'];?>
">Delete</button>
                        </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </form>
            </div>
        </div>
    </section>
</section>
<?php
}
}
/* {/block 'content'} */
}
