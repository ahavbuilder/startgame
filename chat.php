<?php
$mysql_host = "localhost"; //серверная часть sql сервер
$mysql_user = "BlackBot";
$mysql_password = "123456789";
$mysql_database = "1234_chat"

class NewChat{

    private $to = "user@mail.ru";
    protected $subject = "";
    protected $text = "";

    $mes->to = "user@mail.ru";

    function set_attr($to, $subj, $text) {

        $this->to = $to;
        $this->subject = $subject;
        $this->text = $text;//здесь я реализовал простейший чат с использованием ООП

        private function send() {};
    }
}
//проверил переданные в строке запроса параметры
if (isser($_GET["action"])) {//получил переданный action

    $action = $_GET['action'];

}
//если action=insert прошел получаем author/client/text/
if (isset($_get["author"])) {
    $author = $_GET['author'];
}
if (isset($_GET["client"])){
    $client = $_GET['client'];
}
if (isset($_GET["text"])) {

    $text = $_GET['text'];
}
//если action=select(получили выборку)то получаем данные из БД
if (isset($_GET["data"])) {
    $data = $_GET['data'];
}

mysqli_connect($mysql_host, $mysql_user,$mysql_password);//здесь все консательно БД,подсоединение,выборка,кодировка
mysqli_select_db($mysql_database);
mysqli_set_charset('utf8');
//обрабатываем запрос если он был
if($action == select) {

if($data == null) {
//выберем из таблицы chat ВСЕ данные что есть и вернем их в JSON
$q = mysqli_query("SELECT * FROM chat");


}else{// выбераем из таблицы данные и возвращаем их в JSON
    $q = mysqli_query("SELECT * FROM chat WHERE data > $data");

}
while($e = mysqli_fetch_assoc($q))
        $output[]=$e;
        print(json_encode($output));
}

if($action == insert && $author != null && $client != null && $text != null) {
    $current_time = round(microtime(1) * 1000);//время отклика сервера

    mysqli_query("INSER INTO" chat (author, client , data , text) VALUES ('$author','$client','$current_time','$text' )");
}

if($action == delete) {
    mysqli_query("TRUNCATE TABLE" chat")//обнуляем таблицу записей
}

mysqli_close();
 ?>
