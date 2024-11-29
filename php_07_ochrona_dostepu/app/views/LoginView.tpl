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

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<section>
		<header>
			<h3>Informacje</h3>
		</header>
		<div class="content">
		<ol>
			{foreach $msgs->getInfos() as $info}
			{strip}
				<li>{$info}</li>
			{/strip}
			{/foreach}
			</ol>
		</div>
	</section>
{/if}

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<section>
		<header>
			<h3>Błędy</h3>
		</header>
		<div class="content">
			<ol>
			{foreach $msgs->getErrors() as $err}
			{strip}
				<li>{$err}</li>
			{/strip}
			{/foreach}
			</ol>
		</div>
	</section>
{/if}

{/block}