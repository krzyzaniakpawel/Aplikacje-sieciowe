<!doctype html>
<html lang="pl">
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{$conf->app_url}/css/main.css">
    <noscript>
        <link rel="stylesheet" href="{$conf->app_url}/css/noscript.css" />
    </noscript>
    <style> .demo-animate-all:not(.gallery), .demo-animate-all:not(.gallery) *, .demo-animate-all:not(.gallery) *:before, .demo-animate-all:not(.gallery) *:after { transition: all 0.5s ease-in-out; } .demo-controls .property .classes { display: none; } .demo-controls .property[data-requires] { display: none; } .demo-controls .property[data-requires].active { display: inline; } .demo-controls .property .tooltip { position: relative; } .demo-controls .property .tooltip:before { content: 'Click to change!'; font-size: 0.7rem; position: absolute; bottom: 100%; left: 0; background: #47D3E5; color: #ffffff; line-height: 1; white-space: nowrap; font-weight: bold; border-radius: 0.125rem; padding: 0.325rem 0.425rem; animation: demo-controls-tooltip 1.5s forwards; animation-delay: 1s; opacity: 0; } .demo-controls .property .tooltip:after { content: ''; position: absolute; bottom: calc(100% - 0.25rem); left: 0.5rem; border-left: solid 0.5rem transparent; border-right: solid 0.5rem transparent; border-top: solid 0.5rem #47D3E5; width: 0.5rem; height: 0.5rem; animation: demo-controls-tooltip 1.5s forwards; animation-delay: 1s; opacity: 0; } @keyframes demo-controls-tooltip { 0% { opacity: 0; transform: translateY(0); } 10% { opacity: 1; transform: translateY(0.125rem); } 20% { opacity: 1; transform: translateY(-0.125rem); } 30% { opacity: 1; transform: translateY(0.125rem); } 40% { opacity: 1; transform: translateY(-0.125rem); } 50% { opacity: 1; transform: translateY(0.125rem); } 60% { opacity: 1; transform: translateY(0); } 90% { opacity: 1; } 100% { opacity: 0; } } </style>
</head>
<body>

<div class="header">

	<section
		class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
		<div class="content">

			<a style="margin-right: 10px;" href="{$conf->action_root}calcCompute">Kalkulator kredytowy</a>
			<!-- <a style="margin-right: 10px;" href="{$conf->action_root}innaChroniona">Inna chroniona strona</a> -->
			<a href="{$conf->action_root}logout">Wyloguj</a>

			<h1>{$page_title|default:"Tytuł domyślny"}</h1>
			<p class="major">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<p>Praesent imperdiet, libero a eleifend placerat, ligula est mattis justo, ac pulvinar ligula dolor quis purus. </p>
			<ul class="actions stacked">
				<li><a href="#first" class="button large wide smooth-scroll-middle">Get Started</a></li>
			</ul>
		</div>
		<div class="image">
			<img src="{$conf->app_url}/images/banner.jpg" alt="">
		</div>
	</section>
</div>

<div class="content">
	<section class="wrapper style1 align-center">
		<div class="inner">
			<div class="index align-left">
				{block name=content} Domyślna treść zawartości .... {/block}
			</div>
		</div>
	</section>
</div><!-- content -->

<div class="footer">
	<footer class="wrapper style1 align-center is-inactive">
		<div class="inner">
			<p>
				{block name=footer}Domyślna treść stopki.{/block}
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
</html>