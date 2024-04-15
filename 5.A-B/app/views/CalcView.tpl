{extends file=$conf->root_path|cat:"/app/views/templates/main.tpl"}

{block name=footer}Example footer content inserted into the main template from the calculator template{/block}

{block name=content}

<h2 class="content-head is-center">Simple Loan Calculator</h2>

<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
    <fieldset>
        <label for="x">Amount:</label>
        <input id="x" type="text" placeholder="value x" name="x" value="{$form->x}">

        <label for="y">Loan period (in years):</label>
        <input id="y" type="text" placeholder="value y" name="y" value="{$form->y}">

        <label for="z">Interest rate:</label>
        <input id="z" type="text" placeholder="value z" name="z" value="{$form->z}">
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Calculate</button>
</form>

<div class="messages">

{* display list of errors, if any exist *}
{if $msgs->isError()}
    <h4>Errors occurred: </h4>
    <ol class="err">
    {foreach $msgs->getErrors() as $err}
    {strip}
        <li>{$err}</li>
    {/strip}
    {/foreach}
    </ol>
{/if}

{* display list of messages, if any exist *}
{if $msgs->isInfo()}
    <h4>Information: </h4>
    <ol class="inf">
    {foreach $msgs->getInfos() as $inf}
    {strip}
        <li>{$inf}</li>
    {/strip}
    {/foreach}
    </ol>
{/if}

{if isset($res->result)}
    <h4>Result</h4>
    <p class="res">
    {$res->result}
    </p>
{/if}

</div>

{/block}
