//DOM
const rendaFixa = document.querySelector("#renda-fixa");
const fundoInvest = document.querySelector("#fundo-investimentos");
const acoes = document.querySelector("#acoes");
const fundoImob = document.querySelector("#fundo-imobiliario");
const coe = document.querySelector("#coe");
const box = document.querySelectorAll(".box");
const saiba = document.querySelectorAll(".saiba");

//box
box[0].addEventListener("click",function(){
    rendaFixa.classList.toggle("show")
})
box[1].addEventListener("click",function(){
    fundoInvest.classList.toggle("show")
})
box[2].addEventListener("click",function(){
    acoes.classList.toggle("show")
})
box[3].addEventListener("click",function(){
    fundoImob.classList.toggle("show")
})
box[4].addEventListener("click",function(){
    coe.classList.toggle("show")
})


