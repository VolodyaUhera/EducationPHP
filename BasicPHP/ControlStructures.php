<!doctype html>
<html lang="en">
    <head>

    </head>
    <body>
        <?php $score = 96 ?>

        <?php if ($score >= 90): ?>
            <strong style="color: red; font-size: 160px">A</strong>
                <?php if ($score >= 95): ?>
                    <strong style="color: red">+</strong>
                <?php endif ?>
        <?php elseif ($score >= 80): ?>
            <strong style="color: green">B</strong>
        <?php else : ?>
            <strong style="color: purple">NO</strong>

        <?php endif ?>
    </body>
</html>