<?php
/* Smarty version 4.3.4, created on 2024-06-03 11:08:43
  from 'E:\XAMP\htdocs\Web-Project\app\views\staff_passes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665d881b1623a1_76440243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf8e828d83a805b21eb7c1186deb511d278635bb' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\staff_passes.html',
      1 => 1717405697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665d881b1623a1_76440243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_504585550665d881b15d8b9_04225836', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_504585550665d881b15d8b9_04225836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_504585550665d881b15d8b9_04225836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main Content -->
<section id="passes" class="wrapper alt style2">
    <div class="inner">
        <h2 class="major">Manage Passes</h2>
        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'edit_pass'),$_smarty_tpl ) );?>
">
            <div class="field">
                <label for="pass_type">Select Pass Type:</label>
                <select name="pass_type" id="pass_type">
                    <option value="1">Day Pass</option>
                    <option value="2">Night Pass</option>
                    <option value="3">24-Hour Pass</option>
                </select>
            </div>
            <div class="field half">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" required>
            </div>
            <div class="field half">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" required>
            </div>
            <div class="field half">
                <label for="duration">Duration (months):</label>
                <input type="number" name="duration" id="duration" required>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Update Pass" class="primary" /></li>
            </ul>
        </form>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
