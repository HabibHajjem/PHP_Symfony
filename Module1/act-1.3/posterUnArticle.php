<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include('header.php') ?>
    <main class=" container content">        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titre de l'article">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Texte </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Texte de l'article"></textarea>
        </div> 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Auteur</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Auteur de l'article">
        </div>
        <a class="btn btn-primary">Publier</a>
    </main>
    <?php include('footer.php') ?>
</body>
</html>