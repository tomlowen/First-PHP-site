<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?= $content["title\n"]; ?>
    </h1>
    <p><?php var_dump($content) ?></p>
    <p><?= $content["completed"] ? "done\n" : "to do\n" ?></p>
    <p><?= $content["completed"] ? "done" : "to do" ?></p>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strikethrough><?= $task->description ?></strikethrough>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>


</html>