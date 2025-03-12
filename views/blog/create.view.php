<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
</head>
<body>
    <h1>Create a Post</h1>
    <form method="POST" action="/store" enctype="multipart/form-data">
        <label for="content">Content:</label>
        <input type="text" name="content" id="content" value="<?= htmlspecialchars($_POST["content"] ?? '') ?>" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
