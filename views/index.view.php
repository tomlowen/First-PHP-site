<?php require('partials/head.php'); ?>

<body>

    <?php foreach ($users as $user) : ?>
        <li><?= $user->name; ?></li>
    <?php endforeach; ?>

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

    <form method="POST" action="/names">
        <input name="name"></input>
        <button type="submit">Submit</button>
    </form>
</body>


<?php require('partials/footer.php'); ?>