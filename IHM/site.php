<?php include "entete.html"; ?>


<div class="mainStream" id="stream"></div>

<input id ="tweet" type="text" name="InputTweet" size="50px" placeholder="What's happening ?"> 
<button name="btnSubmit" id="submit">Envoyer</button>



<script> 

let button = document.getElementById("submit");
let tweetContent = document.getElementById("stream");
let input = document.getElementById("tweet");




input.addEventListener("change", function(event) {   
    button.addEventListener("click", function(){
        tweetContent.innerHTML = "<div>"+event.target.value+"</div>";
    });
});
</script>
























<?php require ("footer.html"); ?>