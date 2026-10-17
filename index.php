<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $page_title = 'Главная — лабораторная работа № 3'; ?>
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Виды фотографии</h1>
        <nav>
            <a href="<?php
                $name = 'Главная';
                $link = 'index.php';
                $current_page = true;
                echo $link;
            ?>" class="<?php
                if ($current_page) echo 'selected_menu';
                echo '">';
                echo $name;
            ?></a>
            <a href="<?php
                $name = 'Виды фотографии';
                $link = 'types.php';
                $current_page = false;
                echo $link;
            ?>" class="<?php
                if ($current_page) echo 'selected_menu';
                echo '">';
                echo $name;
            ?></a>
            <a href="<?php
                $name = 'Объекты съёмки';
                $link = 'objects.php';
                $current_page = false;
                echo $link;
            ?>" class="<?php
                if ($current_page) echo 'selected_menu';
                echo '">';
                echo $name;
            ?></a>
        </nav>
    </header>

    <main>
        <h2>Что такое фотография?</h2>
        <p>Фотография — это способ получения и сохранения изображения с помощью света. Она помогает передавать события, эмоции, красоту природы и особенности окружающего мира. Фотографии используют в искусстве, журналистике, науке, рекламе и повседневной жизни. Даже обычный снимок может сохранить важный момент и рассказать историю без большого количества слов.</p>
        <p>Чтобы получить выразительный кадр, фотограф учитывает освещение, композицию, точку съёмки и настройки камеры. Важно обращать внимание на то, что находится на переднем и заднем плане, куда направлен взгляд зрителя и какие детали могут отвлекать от главного объекта. Хороший результат не всегда зависит от дорогой техники: наблюдательность и понимание основ часто важнее.</p>
        <h2>Основные правила съёмки</h2>
        <ul>
            <?php
            $rules = array(
                'Следите за направлением и мягкостью света.',
                'Продумывайте расположение главного объекта в кадре.',
                'Проверяйте фон и убирайте лишние детали из композиции.',
                'Делайте несколько вариантов кадра с разных точек.',
                'Сохраняйте оригиналы снимков и сортируйте фотографии.'
            );
            foreach ($rules as $rule) {
                echo '<li>' . htmlspecialchars($rule, ENT_QUOTES, 'UTF-8') . '</li>';
            }
            ?>
        </ul>
        <h2>Фотография по текущей секунде</h2>
        <?php
            echo '<img src="fotos/photo' . (date('s') % 2 + 1 ) . '.jpg" alt=" ">';
            echo '<img src="fotos/photo.jpg" alt=" ">';
        ?>

    </main>

    <footer>
        <?php
        date_default_timezone_set('Europe/Moscow');
        echo 'Сформировано ' . date('d.m.Y в H:i:s');
        ?>
    </footer>
</body>
</html>
