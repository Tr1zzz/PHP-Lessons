<?php
/* Smarty version 4.3.2, created on 2024-03-25 21:22:45
  from 'E:\XAMP\htdocs\php_04_szablony_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6601dd15f24f23_79554156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f702b27e92be566f8bd3c27c4293bb5f344f3c0e' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\php_04_szablony_smarty\\templates\\main.html',
      1 => 1711398161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6601dd15f24f23_79554156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Default description' ?? null : $tmp);?>
">

    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? 'Default title' ?? null : $tmp);?>
</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid.css">
    <!--<![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
    <?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style_hide_intro.css">
    <?php }?>

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"><?php echo '</script'; ?>
>

</head>

<body>

    <div id="app_top" class="header">
        <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? 'Default title' ?? null : $tmp);?>
</a>
            <ul>
                <li class="pure-menu-selected"><a href="#app_top">Up</a></li>
                <li><a href="#app_content">Go to calculator</a></li>
            </ul>
        </div>
    </div>

    <div class="splash-container">
        <div class="splash">
            <h1 class="splash-head"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? 'Default title' ?? null : $tmp);?>
</h1>
            <p class="splash-subhead">
                <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Default description' ?? null : $tmp);?>

            </p>
            <p>
                <a href="#app_content" class="pure-button pure-button-primary">Go to calculator</a>
            </p>
        </div>
    </div>

    <div class="content-wrapper">

        <div id="app_content" class="content">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3329347246601dd15f242a9_78767339', 'content');
?>


        </div>

        <div class="footer l-box is-center">
            
            <p>Work was created by Davyd Chuiko PAW1</p>
        </div>

    </div>


</body>

</html><?php }
/* {block 'content'} */
class Block_3329347246601dd15f242a9_78767339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3329347246601dd15f242a9_78767339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default content goes here .... <?php
}
}
/* {/block 'content'} */
}
