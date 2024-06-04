<?php
/* Smarty version 4.3.4, created on 2024-05-24 14:49:14
  from 'E:\XAMP\htdocs\Web-Project\app\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66508cca533af9_72099878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '061dc97168709582b3d5c802d9d4ef08440daeef' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\login.html',
      1 => 1716554951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66508cca533af9_72099878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107340699966508cca531259_84245293', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_107340699966508cca531259_84245293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107340699966508cca531259_84245293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- Main -->
        <div id="main">
            <section class="wrapper style1">
                <div class="inner">
                    <!-- Form -->
                    <section>
                        <h2 class="major">Log In</h2>
                        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"login"),$_smarty_tpl ) );?>
">
                            <div class="fields">
                                <div class="field">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" required />
                                </div>
                                <div class="field">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" required />
                                </div>
                            </div>
                            <ul class="actions">
                                <li><input type="submit" value="Log In" class="primary" /></li>
                            </ul>
                        </form>
                    </section>
                </div>
            </section>
        </div>

    <?php
}
}
/* {/block 'content'} */
}
