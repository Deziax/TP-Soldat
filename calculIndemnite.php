<html>
<?php 

$N = $_GET ['Nombre'];


for ($i=0 ; $i < $N ; $i++)
{

    $leTabjour[$i]=$_GET['jour'.$i];
    if ($leTabjour[$i]> 20)
    {
        $indem[$i]=(10*15)+(10*25)+(($leTabjour[$i])-20)*35;
        echo '<br>';   
    }else
    {
        if ($leTabjour[$i] < 20 && $leTabjour[$i] > 10 )
        {
            $indem[$i]=(10*15)+(($leTabjour[$i])-10)*25;
            echo '<br>'; 
        }else
        {
            if ($leTabjour[$i] <= 10)
            {
                $indem[$i] = $leTabjour[$i] * 10;
                echo '<br>'; 
            }
        }
    }

    $leTab [$i] = $_GET['nom'.$i];
    echo  $leTab[$i]. ' a une indémnité de '.$indem[$i]. '€ <br>';
};



?>
<link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</html>