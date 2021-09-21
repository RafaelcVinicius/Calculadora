Essa eu não achei o codigo completo.

somar valores  * / - + 

<p id="p"></p>
<input type="button" value="+" onclick="parametro('+')" />
<input type="button" value="+" onclick="parametro('-')" />
<input type="button" value="+" onclick="parametro('*')" />
<input type="button" value="+" onclick="parametro('/')" />
<script>

function parametro(op){
    document.getElementById('p').innerHTML = op;
}
</script>