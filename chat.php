<?php
$mysql_host = "localhost";
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
        $this->text = $text;

        private function send() {};
    }
}

if (isser($_GET["action"])) {

    $action = $_GET['action'];

}

if (isset($_get["author"])) {
    $author = $_GET['author'];
}
if (isset($_GET["client"])){
    $client = $_GET['client'];
}
if (isset($_GET["text"])) {

    $text = $_GET['text'];
}
if (isset($_GET["data"])) {
    $data = $_GET['data'];
}

mysqli_connect($mysql_host, $mysql_user,$mysql_password);
mysqli_select_db($mysql_database);
mysqli_set_charset('utf8');

if($action == select) {

if($data == null) {

$q = mysqli_query("SELECT * FROM chat");


}else{
    $q = mysqli_query("SELECT * FROM chat WHERE data > $data");

}
while($e = mysqli_fetch_assoc($q))
        $output[]=$e;
        print(json_encode($output));
}

if($action == insert && $author != null && $client != null && $text != null) {
    $current_time = round(microtime(1) * 1000);

    mysqli_query("INSER INTO" chat (author, client , data , text) VALUES ('$author','$client','$current_time','$text' )");
}

if($action == delete) {
    mysqli_query("TRUNCATE TABLE" chat")
}

mysqli_close();
 ?>
