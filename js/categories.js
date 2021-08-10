const btn_gov = document.querySelector('.cat1');
const btn_pig = document.querySelector('.cat2');
const btn_rabbit = document.querySelector('.cat3');
const btn_ind = document.querySelector('.cat4');
const btn_baran = document.querySelector('.cat5');


const gov = document.querySelector(".cat_1");
const pig = document.querySelector(".cat_2");
const rabbit = document.querySelector(".cat_3");
const ind = document.querySelector(".cat_4");
const baran = document.querySelector(".cat_5");


btn_gov.onclick = function(){
    gov.classList.add('visible');
    gov.classList.remove("hidden");


    pig.classList.add('hidden');
    pig.classList.remove('visible');

    rabbit.classList.add('hidden');
    rabbit.classList.remove('visible');

    ind.classList.add('hidden');
    ind.classList.remove('visible');

    baran.classList.add('hidden');
    baran.classList.remove('visible');
}
btn_pig.onclick = function(){
    gov.classList.add("hidden");
    gov.classList.remove("visible");

    pig.classList.add('visible');
    pig.classList.remove('hidden');

    rabbit.classList.add('hidden');
    rabbit.classList.remove('visible');

    ind.classList.add('hidden');
    ind.classList.remove('visible');

    baran.classList.add('hidden');
    baran.classList.remove('visible');
}

btn_rabbit.onclick = function(){
    gov.classList.add("hidden");
    gov.classList.remove("visible");

    pig.classList.add('hidden');
    pig.classList.remove('visible');

    rabbit.classList.remove('hidden');
    rabbit.classList.add('visible');


    ind.classList.add('hidden');
    ind.classList.remove('visible');

    baran.classList.add('hidden');
    baran.classList.remove('visible');
}

btn_ind.onclick = function(){
    gov.classList.add("hidden");
    gov.classList.remove("visible");


    pig.classList.add('hidden');
    pig.classList.remove('visible');

    rabbit.classList.add('hidden');
    rabbit.classList.remove('visible');

    ind.classList.add('visible');
    ind.classList.remove('hidden');

    baran.classList.add('hidden');
    baran.classList.remove('visible');
}

btn_baran.onclick = function(){
    gov.classList.add("hidden");
    gov.classList.remove("visible");


    pig.classList.add('hidden');
    pig.classList.remove('visible');

    rabbit.classList.add('hidden');
    rabbit.classList.remove('visible');

    ind.classList.add('hidden');
    ind.classList.remove('visible');

    baran.classList.add('visible');
    baran.classList.remove('hidden');
}

function standby() {
    document.getElementsByTagName('img').src = 'img/test.jpg';
}