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
        <?php foreach($posts as $post){ ?>
            <p><a href="/show?id=<?= $post['id']?>">Post <?= $post['id']?></a></p>
            <p><?= $post['content']?></p>
        <?php } ?>
    </div>
</body>
</html>