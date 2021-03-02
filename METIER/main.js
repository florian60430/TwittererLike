/*let i;
let j;
nbTweet = 3;
let spanLike = new Array();
const divLikeur = new Array();
let nombre;


for (i = 0; i<nbTweet; i++)
{
    spanLike['liked'+i] = document.getElementById('liked'+i);
}

for (i = 0; i<nbTweet; i++) 
{

    spanLike['liked'+i].addEventListener('click', function (j) {

        divLikeur[j.srcElement.id] = document.createElement("div");
        spanLike[j.srcElement.id].appendChild(divLikeur[j.srcElement.id]);
        divLikeur[j.srcElement.id].innerHTML = "bonjour monsieur";

    });
}*/


spanLike = document.getElementById('liked');

spanLike.addEventListener('click', function(){

    console.log("coucou");
});



/*
    spanLike[1].addEventListener('click', function () {

        divLikeur[1] = document.createElement("div");

        spanLike[1].appendChild(divLikeur[1]);
        divLikeur[1].innerHTML = "bonjour monsieur";

    });

    
    spanLike[2].addEventListener('click', function () {

        divLikeur[2] = document.createElement("div");

        spanLike[2].appendChild(divLikeur[2]);
        divLikeur[2].innerHTML = "bonjour monsieur";

    });
*/