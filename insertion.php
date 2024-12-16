<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post creation</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label for="titre">Titre</label><input type="text" name="titre" id="titre"><br>

        <label for="commentary">Commentaire</label><textarea name="commentary" id="commentary"></textarea><br>

        <label for="image">Image</label><input type="file" name="image" id="image"><br>

        <input type="submit">
    </form>
</body>
</html>