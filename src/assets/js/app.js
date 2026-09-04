var MenuItens = document.getElementById("MenuItens");
MenuItens.style.maxHeight = "0px";
function menucelular(){
    if(MenuItens.style.maxHeight == "0px"){
        MenuItens.style.maxHeight = "200px";
    }else{
        MenuItens.style.maxHeight = "0px";
    }
}

// Função para alternar entre os formulários de cadastro e login
function mostrarFormulario(formulario) {
    if (formulario === 'cadastro') {
        document.getElementById('cadastro').style.display = 'block';
        document.getElementById('login').style.display = 'none';
    } else if (formulario === 'login') {
        document.getElementById('cadastro').style.display = 'none';
        document.getElementById('login').style.display = 'block';
    }
}
