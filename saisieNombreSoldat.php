<!DOCTYPE html>
<html html data-bs-theme="dark">
<html lang="fr">
<form action="saisieSoldat.php" method=GET>
<head>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Style.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres de Soldats</title>
</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle">
    <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NOMBRE DE SOLDATS</span> 
  <input type="number" name="nbSoldat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
  <button type="reset" class="btn btn-secondary">Annuler</button>
    <button type="submit" class="btn btn-secondary">Validez</button>
    </div>      
    </div>

    
</body>
</form>
</html>