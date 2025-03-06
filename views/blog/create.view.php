<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
</head>
<body>
    <h1>Create a post</h1>
    <form method="POST" enctype="multipart/form-data">
        <Label>Content: </Label>
        <input type="text" name="text" value="<?= $_POST["text"] ?? '' ?>">
        <button>Submit</button>
    </form>
</body>
</html>