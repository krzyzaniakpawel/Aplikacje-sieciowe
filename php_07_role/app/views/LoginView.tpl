{extends file="main.tpl"}
{block name=content}

<section>
	<header>
		<h2>Logowanie</h2>
	</header>
	<form action="{$conf->action_root}login" method="post">
		<div class="fields">
			<div class="field">
				<label for="id_login">Login</label>
				<input id="id_login" type="text" name="login" value="{$form->login}" />
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

{include file='messages.tpl'}

{/block}