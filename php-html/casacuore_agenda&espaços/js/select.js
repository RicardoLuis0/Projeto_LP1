// select
var dado = document.getElementById("dado");
// input
var chave = document.getElementById("chave");
console.log(dado);
// quando o select muda
function dadoChange() {
    var dado = dado.options[select.selectedIndex].value;
	console.log(dado);
    input.value = valor == 'Jurídica' ? '* Nome de sua Empresa' : '* Nome Completo';
}