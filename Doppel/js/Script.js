    function validar() {
        var senha = cadastro.senha.value;
        var confirmasenha = cadastro.confirmasenha.value;
        if (senha != confirmasenha) {
            alert('Senhas diferentes');
            cadastro.confirmasenha.focus();
            return false;
        }

    }
    window.onscroll = function () {
        myFunction()
    };

    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("fixed-top");
        } else {
            header.classList.remove("fixed-top");
        }
    }