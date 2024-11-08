<?php
/* Smarty version 5.4.1, created on 2024-11-08 23:02:35
  from 'file:/opt/lampp/htdocs/php_04/app/security/../../templates/login.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672e8a7bc88731_85356957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ccfef041407d5706bc9652e560956f8c0b0e6df' => 
    array (
      0 => '/opt/lampp/htdocs/php_04/app/security/../../templates/login.html',
      1 => 1731103348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672e8a7bc88731_85356957 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_04/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <title>Zaloguj się do kalkulatora kredytowego</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/css/main.css">
    <noscript>
        <link rel="stylesheet" href="../css/noscript.css" />
    </noscript>
    <style> .demo-animate-all:not(.gallery), .demo-animate-all:not(.gallery) *, .demo-animate-all:not(.gallery) *:before, .demo-animate-all:not(.gallery) *:after { transition: all 0.5s ease-in-out; } .demo-controls .property .classes { display: none; } .demo-controls .property[data-requires] { display: none; } .demo-controls .property[data-requires].active { display: inline; } .demo-controls .property .tooltip { position: relative; } .demo-controls .property .tooltip:before { content: 'Click to change!'; font-size: 0.7rem; position: absolute; bottom: 100%; left: 0; background: #47D3E5; color: #ffffff; line-height: 1; white-space: nowrap; font-weight: bold; border-radius: 0.125rem; padding: 0.325rem 0.425rem; animation: demo-controls-tooltip 1.5s forwards; animation-delay: 1s; opacity: 0; } .demo-controls .property .tooltip:after { content: ''; position: absolute; bottom: calc(100% - 0.25rem); left: 0.5rem; border-left: solid 0.5rem transparent; border-right: solid 0.5rem transparent; border-top: solid 0.5rem #47D3E5; width: 0.5rem; height: 0.5rem; animation: demo-controls-tooltip 1.5s forwards; animation-delay: 1s; opacity: 0; } @keyframes demo-controls-tooltip { 0% { opacity: 0; transform: translateY(0); } 10% { opacity: 1; transform: translateY(0.125rem); } 20% { opacity: 1; transform: translateY(-0.125rem); } 30% { opacity: 1; transform: translateY(0.125rem); } 40% { opacity: 1; transform: translateY(-0.125rem); } 50% { opacity: 1; transform: translateY(0.125rem); } 60% { opacity: 1; transform: translateY(0); } 90% { opacity: 1; } 100% { opacity: 0; } } </style>
</head>
<body>

<div class="content">
	<section class="wrapper style1 align-center">
		<div class="inner">
			<div class="index align-left">
				<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1061740959672e8a7bc7ec01_92044314', 'content');
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_592266213672e8a7bc86670_64478963', 'footer');
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
class Block_1061740959672e8a7bc7ec01_92044314 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_04/templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_592266213672e8a7bc86670_64478963 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/php_04/templates';
?>
Domyślna treść stopki.<?php
}
}
/* {/block 'footer'} */
}
