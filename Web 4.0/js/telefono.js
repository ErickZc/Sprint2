var numero = document.getElementById('numero');

function comprueba(valor){
  if(valor.value < 0){
    valor.value = 1;
  }
}