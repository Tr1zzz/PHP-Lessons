<?php
/* Smarty version 4.3.4, created on 2024-05-22 15:32:20
  from 'E:\XAMP\htdocs\Web-Project\app\views\templates\defaultforcart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664df3e450e4b3_86853242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ea760361793320398bf49b2fbfefc11bb8b54e3' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\templates\\defaultforcart.html',
      1 => 1716384739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664df3e450e4b3_86853242 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h1><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"index"),$_smarty_tpl ) );?>
">GymFlex</a></h1>
            <nav>
                <a href="#menu">Menu</a>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"index"),$_smarty_tpl ) );?>
" class="button">Back to Home</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <div class="inner">
                <h2>Menu</h2>
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="trainer_gallery.html">Trainers</a></li>
                    <li><a href="booking.html">Book Classes</a></li>
                    <li><a href="manage_classes.html">Manage Classes</a></li>
                    <li><a href="passes.html">Passes</a></li>
                    <li><a href="staff_passes.html">Staff Passes</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html">Log In</a></li>
                    <li><a href="signup.html">Sign Up</a></li>
                </ul>
                <a href="#" class="close">Close</a>
            </div>
        </nav>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39524765664df3e450c347_31121977', 'content');
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
class Block_39524765664df3e450c347_31121977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_39524765664df3e450c347_31121977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
