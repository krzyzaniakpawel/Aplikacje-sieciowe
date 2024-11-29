<?php
/* Smarty version 5.4.1, created on 2024-11-08 23:10:07
  from 'file:/opt/lampp/htdocs/php_04/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672e8c3f272fc0_16653012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78049f1ed37b784bde5bdaba9d85d51daa09704b' => 
    array (
      0 => '/opt/lampp/htdocs/php_04/app/calc.html',
      1 => 1731103310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672e8c3f272fc0_16653012 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_04/app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_632858076672e8c3f237fc1_20652691', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_632858076672e8c3f237fc1_20652691 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_04/app';
?>


<!-- Form -->
<section>
	<header>
		<h3>Kalkulator</h3>
	</header>
	<div class="content">

	<form method="post" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php">
		<div class="fields">
			<div class="field third">
				<label>Kwota kredytu</label>
				<input type="text" name="loan" value="<?php echo $_smarty_tpl->getValue('form')['loan'];?>
">
			</div>
			<div class="field third">
				<label>Okres kredytowania</label>
				<input type="text" name="months" value="<?php echo $_smarty_tpl->getValue('form')['months'];?>
">
			</div>
			<div class="field third">
				<label>Oprocentowanie</label>
				<input type="text" name="interest_rate" value="<?php echo $_smarty_tpl->getValue('form')['interest_rate'];?>
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

<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?> 
		<section>
			<header>
				<h3>Informacje</h3>
			</header>
			<div class="content">
			<ol>
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
				<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</ol>
			</div>
		</section>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
	<section>
		<header>
			<h3>Błędy</h3>
		</header>
		<div class="content">
			<ol>
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
			<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ol>
		</div>
	</section>
	<?php }
}?>


<?php if ((null !== ($_smarty_tpl->getValue('table') ?? null))) {?>
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
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('table'), 'row');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach2DoElse = false;
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
