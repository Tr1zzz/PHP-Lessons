<?php
/* Smarty version 4.3.4, created on 2024-06-01 11:29:52
  from 'E:\XAMP\htdocs\Web-Project\app\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665aea109981e4_91439286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17afc40b6b5c25d1f425d4d2244d299a8d526a87' => 
    array (
      0 => 'E:\\XAMP\\htdocs\\Web-Project\\app\\views\\index.html',
      1 => 1717234187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665aea109981e4_91439286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1870547576665aea107dc7d4_80121432', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.html");
}
/* {block 'content'} */
class Block_1870547576665aea107dc7d4_80121432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1870547576665aea107dc7d4_80121432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<div class="logo"><span class="fas fa-dumbbell"></span></div>
				<h2>Welcome to GymFlex</h2>
				<p>Your ultimate destination for fitness and well-being.</p>
			</div>
		</section>

		<!-- Wrapper -->
		<section id="wrapper">

			<!-- Gym Introduction -->
			<section id="one" class="wrapper spotlight style1">
				<div class="inner">
					<div class="content">
						<h2 class="major">About GymFlex</h2>
						<p>At GymFlex, we are dedicated to providing you with the best facilities and training to help
							you achieve your fitness goals. Whether you're a beginner or a seasoned athlete, our wide
							range of equipment and classes ensures there's something for everyone.</p>
					</div>
				</div>
			</section>

			<!-- Gym Schedule -->
			<section id="two" class="wrapper alt spotlight style2">
				<div class="inner">
					<div class="content">
						<h2 class="major">Weekly Schedule</h2>
						<p>Maximize your results by joining our classes that suit your schedule. Here’s what our typical
							week looks like:</p>
						<table>
							<tr>
								<th>Day</th>
								<th>Class</th>
								<th>Time</th>
							</tr>
							<tr>
								<td>Monday</td>
								<td>Yoga</td>
								<td>07:00 AM - 08:00 AM</td>
							</tr>
							<tr>
								<td>Tuesday</td>
								<td>Cardio Blast</td>
								<td>06:00 PM - 07:00 PM</td>
							</tr>
							<tr>
								<td>Wednesday</td>
								<td>Weight Training</td>
								<td>07:00 PM - 08:00 PM</td>
							</tr>
							<tr>
								<td>Thursday</td>
								<td>Pilates</td>
								<td>06:00 PM - 07:00 PM</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>Boot Camp</td>
								<td>07:00 AM - 08:00 AM</td>
							</tr>
							<tr>
								<td>Saturday/Sunday</td>
								<td>Open Gym</td>
								<td>09:00 AM - 09:00 PM</td>
							</tr>
						</table>
					</div>
				</div>
			</section>

			<!-- Meet the Trainers -->
			<section id="three" class="wrapper spotlight style3">
				<div class="inner">
					<div class="content">
						<h2 class="major">Meet Our Trainers</h2>
						<p>Our certified trainers are here to guide you through every step of your fitness journey. Get
							to know them:</p>
						<div class="features">
							<article>
								<a href="#" class="imagess"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/images/SAMANTHA-STONE.jpg" alt="" /></a>
								<h3 class="major">Samantha Stone</h3>
								<p>Specializing in weight training and nutritional advice, Samantha helps you build
									strength and eat right.</p>
							</article>
							<article>
								<a href="#" class="imagess"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
/../app/views/templates/images/MARK-RENO.jpg" alt="" /></a>
								<h3 class="major">Mark Reno</h3>
								<p>A former competitive boxer, Mark will get your heart rate up and push you to your
									limits with high-intensity workouts.</p>
							</article>
						</div>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"trainer_gallery"),$_smarty_tpl ) );?>
" class="special">Learn more</a>
					</div>
				</div>
			</section>

		</section>
		<!-- Passes Section -->
		<section id="passes" class="wrapper alt style2">
			<div class="inner">
				<h2 class="major">Our Passes</h2>
				<p>Choose the pass that fits your schedule and enjoy working out at your convenience.</p>
				<div class="features">
					<article>
						<span class="icon solid fa-sun"></span>
						<h3 class="major">Day Pass</h3>
						<p>Access to the club until 4 PM every day. Ideal for those who prefer to train during the day.</p>
					</article>
					<article>
						<span class="icon solid fa-moon"></span>
						<h3 class="major">Night Pass</h3>
						<p>Access from 9 PM to 6 AM. Perfect for those who like to train at night.</p>
					</article>
					<article>
						<span class="icon solid fa-clock"></span>
						<h3 class="major">24-Hour Pass</h3>
						<p>Unlimited access at any time. Maximum flexibility for your schedule.</p>
					</article>
				</div>
				<ul class="actions">
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'passes_display'),$_smarty_tpl ) );?>
" class="button special">Choose Your Pass</a></li>
				</ul>
			</div>
		</section>


<?php
}
}
/* {/block 'content'} */
}
