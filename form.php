<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="container">

    <form action="index.php" method="POST" enctype="multipart/form-data">
    
 
    <label for="file">Choisir un fichier</label>
    <input type="file" id="file" name="file" accept="image/png, image/jpeg"><br>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
</body>
</html>