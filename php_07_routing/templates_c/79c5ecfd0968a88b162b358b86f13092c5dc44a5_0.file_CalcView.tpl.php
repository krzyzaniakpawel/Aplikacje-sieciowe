<?php
/* Smarty version 5.4.1, created on 2024-11-28 22:09:56
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6748dc24321634_75376853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79c5ecfd0968a88b162b358b86f13092c5dc44a5' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1732821131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6748dc24321634_75376853 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_07a/app/views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6574168486748dc24317fc8_75898331', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_6574168486748dc24317fc8_75898331 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_07a/app/views';
?>


<!-- Form -->
<section>
	<header>
		<h3>Kalkulator</h3>
	</header>
	<div class="content">

	<form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute">
		<div class="fields">
			<div class="field third">
				<label>Kwota kredytu</label>
				<input type="text" name="loan" value="<?php echo $_smarty_tpl->getValue('form')->loan;?>
">
			</div>
			<div class="field third">
				<label>Okres kredytowania</label>
				<input type="text" name="months" value="<?php echo $_smarty_tpl->getValue('form')->months;?>
">
			</div>
			<div class="field third">
				<label>Oprocentowanie</label>
				<input type="text" name="interest_rate" value="<?php echo $_smarty_tpl->getValue('form')->interest_rate;?>
">
			</div>

			<div class="field" >
				<label style="margin-bottom: 0;">Rodzaj raty</label>
			</div>
			<div class="field half">
				<input id='choice1' type="radio" name="installment" value="decreasing" checked>
				<label for="choice1">Malejąca</label>
			</div>
			<div class="field half">
				<input id='choice2' type="radio" name="installment" value="equal">
				<label for="choice2">Równa</label>
			</div>
		</div>
		<ul class="actions">
			<li><input type="submit" name="submit" id="submit" value="Oblicz"></li>
		</ul>
	</form>
</div>
</section>

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ((null !== ($_smarty_tpl->getValue('result')->table ?? null))) {?>
<section>
	<header>
		<h3>Wynik</h3>
	</header>
	<div class="content">
		<div class="table-wrapper">
			<table class="alt">
				<thead>
					<tr>
						<th>Nr raty</th>
						<th>Część kapitałowa</th>
						<th>Część odsetkowa</th>
						<th>Wysokość raty</th>
					</tr>
				</thead>
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('result')->table, 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
				<?php echo $_smarty_tpl->getValue('row');?>

				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</table>
		</div>
	</div>
</section>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}