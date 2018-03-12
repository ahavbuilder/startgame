<?php
class News
{
    public $goodnews ='Хорошие новости';
    public $badnews = 'Плохие новости';
    public $wecalltopresident = 'Мы позвонили президенту';
    public $endofbeginning = 'Это начало конца!';

    public function __construct($goodnews) {

        $this->goodnews = $goodnews;


    }



}
$goodnews = new News(10);
$badnews = new News(15);
$wecalltopresident = new News(20);
$endofbeginning = new News(25);


echo $goodnews->goodnews;
echo $badnews->badnews;
echo $wecalltopresident->wecalltopresident;
echo $endofbeginning->endofbeginning;
