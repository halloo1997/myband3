<h1>Hallo Smarty</h1>
<p>De mailadressen zijn:
    {foreach from=$mailadresses item=mail}
<li>{$mail}</li>
{/foreach}
</p>

<a href="index.php?page=contact">Contact</a>