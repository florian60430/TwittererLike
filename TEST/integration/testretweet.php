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

<link rel="stylesheet" href="testretweet.css">
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>


<body>






<form  action="" method="POST">
    <div class="heartbox">
        <input  
            type="checkbox" 
            <?php if(isset($_SESSION['islike']) && $_SESSION['islike']==true)
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
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false"><g fill="#626262">
               
                <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822c.984.624 1.99 1.76 2.595 3.876c-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306a7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028a.147.147 0 0 1 0-.252a.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006c.434.02 1.034.086 1.7.271c1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66c-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/> 
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
               
            </svg>
        </label>
 </div>
</form>
 

<?php







?>
</body>
</html>





</g></svg>


</body>
</html>