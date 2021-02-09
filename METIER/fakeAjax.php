<?php 
if(!isset($i))
{
    $i = 1;
    $index = 0;
}

while ($i <= 5)
{
    if (!isset(${"like".$i}))
    {

        ${"like".$i} = $i;
    } 

    if (isset($_POST[$i]))
    {
        ${"like".$i}++;
    }


    ?>
    <form method='POST' action=''>
    <?php echo  ${"like".$i};?>
            <input type='submit' id="btn1" name= <?php echo $i;?> value='Like'>
    </form>

<?php
$i++;
}