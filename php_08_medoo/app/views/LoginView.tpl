{extends file="elements.html"}
{block name=title} Logowanie do systemu {/block}
{block name=content}



<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
        <div class="pure-control-group">
			<input id="id_login" type="text" name="login" placeholder="Login"/>
		</div>
		<br/>
        <div class="pure-control-group">
			<input id="id_pass" type="password" name="pass" placeholder="Hasło"/><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="primary"/>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{/block}
