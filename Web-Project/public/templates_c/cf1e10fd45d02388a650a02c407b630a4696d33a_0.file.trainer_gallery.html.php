<?php
/* Smarty version 4.3.4, created on 2024-05-22 15:57:45
  from 'E:\XAMP\htdocs\Web-Project\app\views\trainer_gallery.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664df9d9e2c931_03614430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1e10fd45d02388a650a02c407b630a4696d33a' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\trainer_gallery.html',
      1 => 1716386264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664df9d9e2c931_03614430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2009373965664df9d9e28690_57819549', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "defaultforall.html");
}
/* {block 'content'} */
class Block_2009373965664df9d9e28690_57819549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2009373965664df9d9e28690_57819549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <!-- Main -->
        <section id="three" class="wrapper spotlight style3">
            <div class="inner">
                <div class="content">
                    <h2 class="major">Meet Our Trainers</h2>
                    <p>Our certified trainers are here to guide you through every step of your fitness journey. Get to
                        know them:</p>
                    <div class="features">
                        <article>
                            <a href="#" class="imagess"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/images/SAMANTHA-STONE.jpg" alt="Samantha Stone" /></a>
                            <h3 class="major">Samantha Stone</h3>
                            <p>Specializing in weight training and nutritional advice, Samantha helps you build strength
                                and eat right.</p>
                        </article>
                        <article>
                            <a href="#" class="imagess"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/images/MARK-RENO.jpg" alt="Mark Reno" /></a>
                            <h3 class="major">Mark Reno</h3>
                            <p>A former competitive boxer, Mark will get your heart rate up and push you to your limits
                                with high-intensity workouts.</p>
                        </article>
                        <article>
                            <a href="#" class="imagess"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/images/trainer03.jpg" alt="Lucy Heart" /></a>
                            <h3 class="major">Lucy Heart</h3>
                            <p>Lucy specializes in aerobic workouts and endurance training to help you stay active and
                                energized.</p>
                        </article>
                        <article>
                            <a href="#" class="imagess"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/images/trainer04.jpg" alt="John Power" /></a>
                            <h3 class="major">John Power</h3>
                            <p>John's focus is on functional training to improve your everyday health and physical
                                ability.</p>
                        </article>
                        <!-- add more articles here as needed -->
                    </div>
                </div>
            </div>
        </section>

        <?php
}
}
/* {/block 'content'} */
}
