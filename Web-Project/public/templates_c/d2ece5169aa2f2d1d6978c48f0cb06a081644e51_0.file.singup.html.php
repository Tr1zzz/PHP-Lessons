<?php
/* Smarty version 4.3.4, created on 2024-06-03 16:25:11
  from 'E:\XAMP\htdocs\Web-Project\app\views\singup.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665dd2477a51e2_03503493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2ece5169aa2f2d1d6978c48f0cb06a081644e51' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\singup.html',
      1 => 1717424708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665dd2477a51e2_03503493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1623490759665dd2477a17b7_88509268', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_1623490759665dd2477a17b7_88509268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1623490759665dd2477a17b7_88509268',
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
                        <h2 class="major">Sign Up</h2>
                        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"singup"),$_smarty_tpl ) );?>
"> 
                            <div class="fields">
                                <div class="field">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" required />
                                </div>
                                <div class="field">
                                    <label for="username">First name</label>
                                    <input type="text" name="firstName" id="firstName" required />
                                </div>
                                <div class="field">
                                    <label for="username">Last name</label>
                                    <input type="text" name="lastName" id="lastName" required />
                                </div>
                                <div class="field">
                                    <label for="username">Phone number</label>
                                    <input type="tel" name="phoneNumber" id="phoneNumber" required />
                                </div>
                                <div class="field">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" required />
                                </div>
                                <div class="field">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" name="confirm-password" id="confirm-password" required />
                                </div>
                            </div>
                            <ul class="actions">
                                <li><input type="submit" value="Sign Up" class="primary" /></li>
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
