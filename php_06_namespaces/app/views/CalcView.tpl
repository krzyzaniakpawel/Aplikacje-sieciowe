{extends file="main.tpl"}

{block name=content}

<!-- Form -->
<section>
	<header>
		<h3>Kalkulator</h3>
	</header>
	<div class="content">

	<form method="post" action="{$conf->action_root}calcCompute">
		<div class="fields">
			<div class="field third">
				<label>Kwota kredytu</label>
				<input type="text" name="loan" value="{$form->loan}">
			</div>
			<div class="field third">
				<label>Okres kredytowania</label>
				<input type="text" name="months" value="{$form->months}">
			</div>
			<div class="field third">
				<label>Oprocentowanie</label>
				<input type="text" name="interest_rate" value="{$form->interest_rate}">
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


{if isset($result->table)}
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
				{foreach $result->table as $row}
				{strip}
					{$row}
				{/strip}
				{/foreach}
			</table>
		</div>
	</div>
</section>
{/if}

{/block}