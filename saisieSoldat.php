<html>
<?php 

$N = $_GET['nbSoldat'] ;
echo '<form action = calculIndemnite.php method="get">' ;


for($i=0 ; $i < $N ; $i++) 
{
    echo'<div class="container">';
    echo '<div class="input-group mb-3">';
    echo '<span class="input-group-text" id="inputGroup-sizing-default">Nom du Soldat</span>'; 
    echo '<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nom" required>';
    echo '</div>';
    echo '</div>';
} ;
echo '<br>' ;

for($w=0;$w<$N;$w++)
{
    echo'<div class="container">';
    echo '<div class="input-group mb-3">';
    echo '<span class="input-group-text" id="inputGroup-sizing-default">Nombre de Jour</span>'; 
    echo '<input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="jour" required>';
    echo '</div>';
    echo '</div>';
}
echo '<br>' ;
echo '<input type=hidden name=Nombre value='.$N.'>' ;
echo '<div class="position-absolute bottom-0 start-50 translate-middle-x">';
echo '<button type="submit" class="btn btn-secondary">Validez</button>';
echo '</div>';
echo '<form>'   


?>

<link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Style.css" type="text/css">
    
</html>