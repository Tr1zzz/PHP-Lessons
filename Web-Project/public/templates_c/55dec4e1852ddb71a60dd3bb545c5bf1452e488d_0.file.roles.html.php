<?php
/* Smarty version 4.3.4, created on 2024-06-03 13:37:03
  from 'E:\XAMP\htdocs\Web-Project\app\views\roles.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665daadf2781f4_87071124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55dec4e1852ddb71a60dd3bb545c5bf1452e488d' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\roles.html',
      1 => 1717414621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665daadf2781f4_87071124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1020202352665daadf26ceb4_66957151', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_1020202352665daadf26ceb4_66957151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1020202352665daadf26ceb4_66957151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="roles" class="wrapper style1">
    <div class="inner">
        <h2 class="major">Manage User Roles</h2>
        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'search_user'),$_smarty_tpl ) );?>
">
            <div class="field">
                <label for="search">Search Username:</label>
                <input type="text" name="search" id="search" placeholder="Enter username" required>
                <ul class="actions">
                    <li><input type="submit" value="Search" class="primary" /></li>
                </ul>
            </div>
        </form>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td><input type="text" name="role" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
" form="form<?php echo $_smarty_tpl->tpl_vars['user']->value['id_account'];?>
"></td>
                        <td>
                            <form id="form<?php echo $_smarty_tpl->tpl_vars['user']->value['id_account'];?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'update_role'),$_smarty_tpl ) );?>
" method="post">
                                <input type="hidden" name="id_account" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_account'];?>
">
                                <input type="submit" value="Edit">
                            </form>
                        </td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
