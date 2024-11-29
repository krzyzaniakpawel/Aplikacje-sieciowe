<?php
/* Smarty version 5.4.1, created on 2024-11-22 15:09:19
  from 'file:/opt/lampp/htdocs/php_06/app/calc/CalcView.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6740908f124c95_35912249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45fb414d45d2297bf5554a1428fc118ad498ff50' => 
    array (
      0 => '/opt/lampp/htdocs/php_06/app/calc/CalcView.html',
      1 => 1732284558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6740908f124c95_35912249 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_06/app/calc';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12286448746740908f113d21_15335800', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_12286448746740908f113d21_15335800 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_06/app/calc';
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

<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
	<section>
		<header>
			<h3>Informacje</h3>
		</header>
		<div class="content">
		<ol>
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'info');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('info')->value) {
$foreach0DoElse = false;
?>
			<li><?php echo $_smarty_tpl->getValue('info');?>
</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ol>
		</div>
	</section>
<?php }?>

<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
	<section>
		<header>
			<h3>Błędy</h3>
		</header>
		<div class="content">
			<ol>
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach1DoElse = false;
?>
			<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ol>
		</div>
	</section>
<?php }?>


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
