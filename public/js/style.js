/*
Responsive v1.0
criado por Turma SENAC
Data 25/04/2019

Orientado por Docente Nerildo Viana
*/ 
/*----------------Script para o Banner Responsivo*/
function setaImagem(){
    var settings = {
        primeiraImg: function(){
            elemento = document.querySelector("#slider a:first-child");
            elemento.classList.add("ativo");
            this.legenda(elemento);
        },
        slide: function(){
            elemento = document.querySelector(".ativo");
            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
        },
        proximo: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");
            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
            intervalo = setInterval(settings.slide, 4000);
        },

        //Configurando o Botão aterior Prev
        anterior: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");
            if(elemento.previousElementSibling){
                elemento.previousElementSibling.classList.add("ativo");
                settings.legenda(elemento.previousElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                elemento = document.querySelector("#slider a:last-child");
                elemento.classList.add("ativo");
                settings.legenda(elemento);
            }
            intervalo = setInterval(settings.slide,4000);
        },

        //Configurando legenda
        legenda: function(obj){
            var legenda = obj.querySelector("img").getAttribute("alt");
            document.querySelector("figcaption").innerHTML = legenda;
        }
    }

    //Chama o slide
    settings.primeiraImg();

    //Chama a legenda
    settings.legenda(elemento);

    //Chama o slide á um determinado tempo
    var intervalo = setInterval(settings.slide, 4000);
    document.querySelector(".next").addEventListener("click",settings.proximo,false);
    document.querySelector(".prev").addEventListener("click",settings.anterior,false);
}
window.addEventListener("load",setaImagem,false);