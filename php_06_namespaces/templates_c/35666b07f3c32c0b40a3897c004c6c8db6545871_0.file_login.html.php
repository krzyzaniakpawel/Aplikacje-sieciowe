<?php
/* Smarty version 5.4.1, created on 2024-11-24 01:14:32
  from 'file:/opt/lampp/htdocs/php_06/app/security/login.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67426fe8963d11_76502869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35666b07f3c32c0b40a3897c004c6c8db6545871' => 
    array (
      0 => '/opt/lampp/htdocs/php_06/app/security/login.html',
      1 => 1732407126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67426fe8963d11_76502869 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_06/app/security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_37210576967426fe89558b3_13368382', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/login.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_37210576967426fe89558b3_13368382 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_06/app/security';
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
<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
	<section>
		<header>
			<h3>Błędy</h3>
		</header>
		<div class="content">
			<ol>
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'msg');
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
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
