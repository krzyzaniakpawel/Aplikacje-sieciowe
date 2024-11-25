<?php
/* Smarty version 5.4.1, created on 2024-11-08 23:10:31
  from 'file:/opt/lampp/htdocs/php_04/app/security/login.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672e8c57da9266_65229221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd982a2307c880ac65b66e8d460b194753bf0ffa5' => 
    array (
      0 => '/opt/lampp/htdocs/php_04/app/security/login.html',
      1 => 1731103792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672e8c57da9266_65229221 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_04/app/security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_227388451672e8c57d9fa47_93577247', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/login.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_227388451672e8c57d9fa47_93577247 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_04/app/security';
?>


<section>
	<header>
		<h2>Logowanie</h2>
	</header>
	<form action="<?php echo $_smarty_tpl->getValue('app_root');?>
/app/security/login.php" method="post">
		<div class="fields">
			<div class="field">
				<label for="id_login">Login</label>
				<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->getValue('form')['login'];?>
" />
			</div>
			<div class="field">
				<label for="id_pass">Hasło</label>
				<input id="id_pass" type="password" name="pass" />
			</div>
		</div>
		<ul class="actions">
			<li><input type="submit" name="submit" id="submit" value="Zaloguj"></li>
		</ul>
	</form>	
</section>
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

<?php
}
}
/* {/block 'content'} */
}
