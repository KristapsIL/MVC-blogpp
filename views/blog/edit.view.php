<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
</head>
<body>
    <h1>Visi bloga ieraksti</h1>
    <div>
        <form method="POST" action="/update" enctype="multipart/form-data">
            <label for="content">Content:</label>
            <input type="text" name="content" id="content" value="<?= htmlspecialchars($_POST["content"] ?? '') ?>" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>