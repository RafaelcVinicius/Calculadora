Trocar o plano de fundo, esse é o que coloquei na prova, hoje iria fazer bem diferente 

<p id="p"></p>
<input type="submit" value="Botão" onclick="timecor()" />
<input type="submit" value="Botão" onclick="parar()" />



<script>
function timecor() {
    var a = red;
    var b = 2;
    var c = 3;
    var d = 4;
    setInterval(function(){document.getElementById('p').innerHTML = b}, 2000);
    setInterval(function(){document.getElementById('p').innerHTML = b}, 4000);
    setInterval(function(){document.getElementById('p').innerHTML = c}, 6000);
    setInterval(function(){document.getElementById('p').innerHTML = d}, 8000);

}

</script>