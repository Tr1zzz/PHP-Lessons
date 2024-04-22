{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-form pure-form-stacked">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-form pure-form-stacked">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>

		<div class="pure-button pure-button-primary">
			<button type="submit" class="pure-button pure-button-primary">Press Me</button>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{/block}
