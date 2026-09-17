<?php
// Инициализация счетчика посещений
$visitCounter = 0;
if (isset($_COOKIE['visitCounter'])) {
    $visitCounter = (int) $_COOKIE['visitCounter'];
}
$visitCounter++;

// Инициализация времени последнего посещения
$lastVisit = "";
if (isset($_COOKIE['lastVisit'])) {
    $lastVisit = date('d-m-Y H:i:s', (int) $_COOKIE['lastVisit']);
}

// Ограничение: обновляем куки только один раз в день (по условию из задания)
if (!isset($_COOKIE['lastVisit']) || date('d-m-Y', (int) $_COOKIE['lastVisit']) != date('d-m-Y')) {
    setcookie('visitCounter', $visitCounter, time() + 3600 * 24 * 30);
    setcookie('lastVisit', time(), time() + 3600 * 24 * 30);
}
?>