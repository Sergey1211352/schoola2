<?php
$dt = time();
$page = $_SERVER['REQUEST_URI'];
$ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'прямой заход';

// Формируем строку с разделителем и переводом строки
userData:
$path = "$dt|$page|$ref\n";

// Убедимся, что папка log существует, если нет — создадим
if (!is_dir('log')) {
    mkdir('log', 0777, true);
}

// Записываем данные в файл журнала
file_put_contents(PATH_LOG, $path, FILE_APPEND);
?>