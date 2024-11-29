<?php
/* Smarty version 5.4.1, created on 2024-11-29 01:39:01
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67490d2544d6a4_64268052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8b3d7b7b90dde01e7b3f81285ccfdfa85313970' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1732821152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_67490d2544d6a4_64268052 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_07b/app/views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_147693440367490d25448913_07586986', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_147693440367490d25448913_07586986 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_07b/app/views';
?>


<section>
	<header>
		<h2>Logowanie</h2>
	</header>
	<form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
login" method="post">
		<div class="fields">
			<div class="field">
				<label for="id_login">Login</label>
				<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->getValue('form')->login;?>
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

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php
}
}
/* {/block 'content'} */
}
