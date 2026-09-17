<?php
// Безопасно получаем id, если он не передан — будет пустая строка
$id = isset($_GET['id']) ? trim(strip_tags($_GET['id'])) : '';

$title = 'Сайт нашей школы';
$header = 'Добро пожаловать на наш сайт!';

switch($id){
    case 'about':
        $title = 'О сайте';
        $header = 'О нашем сайте';
        break;
    case 'contact':
        $title = 'Контакты';
        $header = 'Обратная связь';
        break;
    case 'table':
        $title = 'Таблица умножения';
        $header = 'Таблица умножения';
        break;
    case 'calc':
        $title = 'Он-лайн калькулятор';
        $header = 'Калькулятор';
        break;
    case 'log':
        $title = 'Журнал посещений';
        $header = 'Журнал посещений сайта';
        break;
}
?>