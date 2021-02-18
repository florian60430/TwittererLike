<?php 
    session_start();
    if(isset($_POST["checkbox"]))
    {
       $_SESSION['islike']= true;
       echo "je suis like";
    }else{
       $_SESSION['islike']= false;
       echo"";
    }
?>
<html>

<head>

<link rel="stylesheet" href="testcoeur.css">
</head>


<body>


<form  action="" method="POST">
   
        <input type="text" name="text" value="bjr">
        <input id='heart' type="submit" name="DISlike" value="j'aime po">
   
</form>



<form  action="" method="POST">
    <div class="heartbox">
        <input  
            type="checkbox" 
            <?php if(isset($_SESSION['islike']) && ($_SESSION['islike']==true))
                    {
                        ?>
                        checked
                        <?php
                    }
            ?>
            class="checkbox" 
            id="checkbox" 
            name="checkbox"
            value="j'aime"
            onclick='setTimeout(function(){  submit(); })'
        />
      
        <label for="checkbox"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply" viewBox="0 0 16 16">
                <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                        <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                        <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                    </g>
                    <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                    </g>
                    <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                        <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                        <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                    </g>
                    <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                        <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                        <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                        <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup1" opacity="0" transform="translate(24)">
                        <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                        <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                    </g>
                </g>
            </svg>
        </label>
 </div>
</form>
 

<?php







?>
</body>
</html>