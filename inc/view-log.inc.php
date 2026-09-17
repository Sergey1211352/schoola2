<h3>Журнал посещений</h3>
<?php
if (file_exists(PATH_LOG)) {
    // Получаем содержимое файла в виде массива строк
    $lines = file(PATH_LOG, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    echo "<ul>";
    foreach ($lines as $line) {
        // Разделяем строку по разделителю |
        $data = explode('|', $line);
        if (count($data) >= 3) {
            $time = date('d-m-Y H:i:s', (int) $data[0]);
            $uri = htmlspecialchars($data[1]);
            $referer = htmlspecialchars($data[2]);

            echo "<li>{$time} - {$uri} -> {$referer}</li>";
        }
    }
    echo "</ul>";
} else {
    echo "<p>Журнал посещений пока пуст.</p>";
}
?>