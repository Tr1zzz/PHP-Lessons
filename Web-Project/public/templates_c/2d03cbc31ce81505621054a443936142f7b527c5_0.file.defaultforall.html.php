<?php
/* Smarty version 4.3.4, created on 2024-06-03 12:47:26
  from 'E:\XAMP\htdocs\Web-Project\app\views\templates\defaultforall.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665d9f3ebd4655_60910714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d03cbc31ce81505621054a443936142f7b527c5' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\templates\\defaultforall.html',
      1 => 1717411611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665d9f3ebd4655_60910714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <div id="page-wrapper">
        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'index'),$_smarty_tpl ) );?>
">GymFlex</a></h1>
            <nav>
                <a href="#menu">Menu</a>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'cart_display'),$_smarty_tpl ) );?>
" class="button">Cart</a>
                <?php if ($_smarty_tpl->tpl_vars['isUser']->value == null && $_smarty_tpl->tpl_vars['isWorker']->value == null && $_smarty_tpl->tpl_vars['isAdmin']->value == null) {?>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'login_display'),$_smarty_tpl ) );?>
" class="button">Log In</a>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'singup_display'),$_smarty_tpl ) );?>
" class="button">Sign Up</a>
                <?php } else { ?>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
" class="button">Log Out</a>
                <?php }?>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>" index"),$_smarty_tpl ) );?>
" class="button">Back to Home</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <div class="inner">
                <h2>Menu</h2>
            <ul class="links">
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'index'),$_smarty_tpl ) );?>
">Home</a></li>
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'trainer_gallery'),$_smarty_tpl ) );?>
">Trainers</a></li>
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'booking_display'),$_smarty_tpl ) );?>
">Book Classes</a></li>
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'passes_display'),$_smarty_tpl ) );?>
">Passes</a></li>
                <?php if ($_smarty_tpl->tpl_vars['isWorker']->value) {?>
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'manage_classes'),$_smarty_tpl ) );?>
">Manage Classes</a></li>
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'staff_passes_display'),$_smarty_tpl ) );?>
">Staff Passes</a></li>
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'roles_display'),$_smarty_tpl ) );?>
">Roles</a></li>
                <?php }?>
            </ul>
                <a href="#" class="close">Close</a>
            </div>
        </nav>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1555144055665d9f3ebcfe27_07573948', 'content');
?>


        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <h2 class="major">Get in touch</h2>
                <p>Join us today and transform your life. For more information or to book a class, contact us:</p>
                <ul class="contact">
                    <li class="icon solid fa-home">GymFlex<br />123 Fitness St, Wellness City, 90000</li>
                    <li class="icon solid fa-phone">(123) 456-7890</li>
                    <li class="icon solid fa-envelope"><a href="mailto:contact@gymflex.com">contact@gymflex.com</a></li>
                </ul>
            </div>
        </footer>
        </div>
        
        <!-- Scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/assets/js/main.js"><?php echo '</script'; ?>
>
        </body>
        
        </html><?php }
/* {block 'content'} */
class Block_1555144055665d9f3ebcfe27_07573948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1555144055665d9f3ebcfe27_07573948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
