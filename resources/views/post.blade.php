<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first post</title>
    <link rel="stylesheet" href="/app.css">

</head>
<body>
    <h1><?= $post->title ?></h1>

    <div>
        <?= $post->body ?>
    </div>
    <a href="/">Go back</a>
</body>
</html>
