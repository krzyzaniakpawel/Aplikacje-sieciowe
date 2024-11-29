<?php
/* Smarty version 5.4.1, created on 2024-11-18 23:47:28
  from 'file:/opt/lampp/htdocs/php_05/app/../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673bc40098e948_78346563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05013521e66b600ce2cac5f7a4715d3e32e35446' => 
    array (
      0 => '/opt/lampp/htdocs/php_05/app/../templates/main.html',
      1 => 1731969710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673bc40098e948_78346563 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_05/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/css/main.css">
    <noscript>
        <link rel="stylesheet" href="../css/noscript.css" />
    </noscript>
    <style> .demo-animate-all:not(.gallery), .demo-animate-all:not(.gallery) *, .demo-animate-all:not(.gallery) *:before, .demo-animate-all:not(.gallery) *:after { transition: all 0.5s ease-in-out; } .demo-controls .property .classes { display: none; } .demo-controls .property[data-requires] { display: none; } .demo-controls .property[data-requires].active { display: inline; } .demo-controls .property .tooltip { position: relative; } .demo-controls .property .tooltip:before { content: 'Click to change!'; font-size: 0.7rem; position: absolute; bottom: 100%; left: 0; background: #47D3E5; color: #ffffff; line-height: 1; white-space: nowrap; font-weight: bold; border-radius: 0.125rem; padding: 0.325rem 0.425rem; animation: demo-controls-tooltip 1.5s forwards; animation-delay: 1s; opacity: 0; } .demo-controls .property .tooltip:after { content: ''; position: absolute; bottom: calc(100% - 0.25rem); left: 0.5rem; border-left: solid 0.5rem transparent; border-right: solid 0.5rem transparent; border-top: solid 0.5rem #47D3E5; width: 0.5rem; height: 0.5rem; animation: demo-controls-tooltip 1.5s forwards; animation-delay: 1s; opacity: 0; } @keyframes demo-controls-tooltip { 0% { opacity: 0; transform: translateY(0); } 10% { opacity: 1; transform: translateY(0.125rem); } 20% { opacity: 1; transform: translateY(-0.125rem); } 30% { opacity: 1; transform: translateY(0.125rem); } 40% { opacity: 1; transform: translateY(-0.125rem); } 50% { opacity: 1; transform: translateY(0.125rem); } 60% { opacity: 1; transform: translateY(0); } 90% { opacity: 1; } 100% { opacity: 0; } } </style>
</head>
<body>

<div class="header">

	<section
		class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
		<div class="content">

			<a style="margin-right: 10px;" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc.php">Kalkulator kredytowy</a>
			<a style="margin-right: 10px;" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/inna_chroniona.php">Inna chroniona strona</a>
			<a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/security/logout.php">Wyloguj</a>

			<h1><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
			<p class="major">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<p>Praesent imperdiet, libero a eleifend placerat, ligula est mattis justo, ac pulvinar ligula dolor quis purus. </p>
			<ul class="actions stacked">
				<li><a href="#first" class="button large wide smooth-scroll-middle">Get Started</a></li>
			</ul>
		</div>
		<div class="image">
			<img src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/banner.jpg" alt="">
		</div>
	</section>
</div>

<div class="content">
	<section class="wrapper style1 align-center">
		<div class="inner">
			<div class="index align-left">
				<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_848541844673bc40098d7c2_38349633', 'content');
?>

			</div>
		</div>
	</section>
</div><!-- content -->

<div class="footer">
	<footer class="wrapper style1 align-center is-inactive">
		<div class="inner">
			<p>
				<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1040060976673bc40098dff3_39811724', 'footer');
?>

			</p>
			<ul class="icons">
				<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a>
				</li>
				<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a>
				</li>
				<li><a href="#" class="icon brands style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
				<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<p>© Untitled. Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a
					href="https://html5up.net">HTML5 UP</a>.</p>
		</div>
	</footer>
</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_848541844673bc40098d7c2_38349633 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_05/templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1040060976673bc40098dff3_39811724 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_05/templates';
?>
Domyślna treść stopki.<?php
}
}
/* {/block 'footer'} */
}
