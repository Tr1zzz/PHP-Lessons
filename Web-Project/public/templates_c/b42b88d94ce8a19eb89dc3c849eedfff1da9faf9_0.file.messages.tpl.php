<?php
/* Smarty version 4.3.4, created on 2024-06-03 16:12:34
  from 'E:\XAMP\htdocs\Web-Project\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665dcf52a8b910_45040273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b42b88d94ce8a19eb89dc3c849eedfff1da9faf9' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\templates\\messages.tpl',
      1 => 1717423950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665dcf52a8b910_45040273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\XAMP\\htdocs\\Web-Project\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
    <div class="messages">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
            <div class="message <?php echo $_smarty_tpl->tpl_vars['message']->value->type;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value->text;?>
</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
