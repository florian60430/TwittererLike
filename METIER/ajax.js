//ajax se lancera que sur un clic de la balise qui porte id GoAjax
function loadAjax() {   
$("#btn0").click(function() {

        //appel fonction ajax de jQuery
        $.ajax(
            //données aux format JSON
            {
                url: 'traitement.php',
                type: 'POST',
                dataType: 'html',
                data: 'idUser =' + idUser + "idTweet=" + idTweet,
                //success est lancé si ajax ok
                //code_html sera envoyé par ajax vers la fonction c’est le retour //du server web
                success: function(code_html, statut) {
                    $("#btn0").html(code_html);
                    // On passe code_html à jQuery() qui va nous créer l'arbre DOM !
                    loadAjax();
                },
                //error est lancé si ajax à eu une effeur
                error: function(resultat, statut, erreur) {},
                //complete est lancé si ajax a fini 
                complete: function(resultat, statut) {}
                    //fin des données jSon
            });
        //fin de l’appel ajax 
    });
}
