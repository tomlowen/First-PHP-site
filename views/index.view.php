<?php require('partials/head.php'); ?>

<body>
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


<?php require('partials/footer.php'); ?>