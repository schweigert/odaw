<HTML>
 <HEAD>
   <TITLE> Introdu��o ao Javascript </TITLE>
 </HEAD>

<BODY>
	
<H1> Exemplos para a Aula de Javascript </H1>	

<! ******************************************************>

<!--
<! Exemplo 1 >
<script>

valor = 30 
document.write ("<p>Minha primeira linha</p>") 
document.write ("<p>Nesta linha aparecer� o resultado de : " + (10 * 10 + valor) + "</p>") 

</script> 
-->
<! ******************************************************>

<!--
<! Exemplo 2 >

<script>

if (confirm ("Algo est� errado...devo continuar??")) 
   { alert("Continuando") } 
else 
   { alert("Parando") }

</script>
-->

<! ******************************************************>


<! Exemplo 3 >
<!--
<script>

Entrada = prompt("Informe uma express�o matem�tica", "num*num") 
Resultado = eval(Entrada) 
document.write("O resultado � = " + Resultado) 

</script>
-->

<! ******************************************************>

<!--
<! Exemplo 4 >

<script>

function Idade (Anos)
{ 
	if  (Anos > 17) 
		{ alert ("Maior de Idade") } 
	else 
                { alert ("menor de Idade") } 
}

</script>

<! USAR TAB PARA SAIR DO CAMPO >
<form>
	<input type=text size=2 maxlength=2 name="Tempo" onchange="Idade(Tempo.value)"> 
</form>
-->

<! ******************************************************>

<!--
<! Exemplo 5 >

<! TEXT >
<form name="TText"> 
<p>Entrada de Texto <input type=text size=20 maxlength=30 name="CxTexto" value="" onchange="alert ('Voce digitou ' + CxTexto.value)"> 
</p> 
</form> 
-->

<! ******************************************************>

<!--
<! Exemplo 6 >

<!  CHECKBOX >
<SCRIPT> 

function AltMaiusc () { 
    document.TCheck.Muda.value = document.TCheck.Muda.value.toUpperCase()     
    document.TCheck.Opt1.checked = false 
} 
function AltMinusc () { 
   document.TCheck.Muda.value = document.TCheck.Muda.value.toLowerCase()    
   document.TCheck.Opt2.checked = false 
} 
</SCRIPT> 

<p> 
<form name="TCheck"> 
Muda Case <input type=text size=20 maxlength=20 name="Muda"> </p> 
<p> 
Minusculo<input type=checkbox name="Opt1" value="1" checked 
                  onclick="if (this.checked) 
                                   { AltMinusc() } "> 
Maiusculo<input type=checkbox name="Opt2" value="2" 
                  onclick="if (this.checked) 
                                   { AltMaiusc() } "> 
Demo valor<input type=checkbox name="Opt3" 
                    onclick="if (Opt3.checked) 
                                     {alert ('Server recebera = ' + Opt3.value) } "> 
</p> 
</form> 
-->

<! ******************************************************>

<!--
<! Exemplo 7 >

<! RADIO >
<p>Radio</p> 
<p>         
 <input type=radio name="Rad" value="1" onclick="document.bgColor='green'"> Fundo Verde 
 <input type=radio name="Rad" value="2" onclick="document.bgColor='blueviolet'"> Fundo Violeta 
 <input type=radio name="Rad" value="3" onclick="document.bgColor='#FFFF00'"> Fundo Amarelo 
</p> 
-->

<! ******************************************************>

<!--
<! Exemplo 8 >

<! INPUT BUTTON >
<p> 
  <form method="POST" name="TstButton"> 
     Digite um Texto 
     <input type=text size=30 maxlength=30 name="Teste" value=""> 
</p>
<p> 
    Click no Botao 
    <input type=button name="Bteste" value="Botao de teste" onclick="alert ('Voce digitou: ' + TstButton.Teste.value)"> 
</p> 
 </form> 
-->

<! ******************************************************>
<!--
<! Exemplo 9 >

<!  INPUT RESET >
<p> 
<form method="POST" name="TesteRes"> 
	Digite um Texto
	<input type=text size=10 maxlength=20 name="Teste" value=""> 
</p><p>
	Apague o Texto 
	<input type=reset name="Bres" value="Reset"> 
</form> 
</p> 
-->

<! ******************************************************>

<!--
<! Exemplo 10 >

<! SUBMIT >
<script> 

function TestaVal() { 
if (document.TesteSub.Teste.value == "") { 
    alert ("Campo nao Preenchido...Form nao Submetido") 
    return false } 
else { 
    alert ("Tudo Ok....Form Submetido") 
    return true } } 

</script> 

<p> 
<form method="POST" name="TesteSub" onSubmit="return TestaVal()" action="teste.html"> 
Digite um Texto 
<input type=text size=10 maxlength=10 name="Teste" value=""> 
Botao Submit 
<input type=submit name="Bsub" value="Manda p/Server"> 
</p> 
</form> 
-->

<! ******************************************************>
<!--
<! Exemplo 11 >

<H3> SELECT - EXEMPLO 1 </H3>
<script> 

function Verselect(Campo) { 
Icombo = Campo.selectedIndex 
alert ("Voce escolheu " + Campo.options[Icombo].text) } 

</script> 

<p> 
Objeto Select <select name="Combo1" size=1 onchange="Verselect(this)"> 
<option>Opcao 1 
<option>Opcao 2 
<option>Opcao 3 
<option selected>Opcao 4 (recomendada) 
<option>Opcao 5 
<option>Opcao 6 
</select> 
</p> 
-->
<! ******************************************************>
<!--
<! Exemplo 12 >

<H3> SELECT - EXEMPLO 2 </H3>

<script> 

function Vermult(Lista) { 
var opcoes = "" 
for (i = 0 ; i < Lista.length ; i++) { 
if (Lista.options[i].selected) { 
opcoes += (Lista.options[i].value + ", ") } 
} 
alert ("As opcoes escolhidas foram : " + opcoes) } 

</script> 

<p> 
Objeto Select2 <select name="Combo2" size=4 multiple onblur="Vermult(this)"> 
<option value="List1">Escolha 1 </option> 
<option value="List2">Escolha 2 </option> 
<option value="List3">Escolha 3 </option> 
<option value="List4">Escolha 4 </option> 
</select> 
</p> 
-->
<! ******************************************************>

 </BODY>
</HTML>
