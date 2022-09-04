<?php
                        echo 'Сколько дней осталось для проверки практического задания';
                    ?> 


<?php
$date_start = '04.09.2022';
$date_end = '15.09.2022';
 
$interval_date = date_diff(date_create($date_start), date_create($date_end))->days+1;
 
for($i = 1; $i <= $interval_date ; $i++){
    $date_new = date('d.m.Y',(strtotime($date_start)+86400*($i-1)));
    echo $date_new.'<br>';
}
 
echo "<br> Стартовый день = ".$date_start."<br>";
echo "<br> День дедлайна = ".$date_end."<br>";
echo "<br> Осталось дней = ".$interval_date."<br>";
?>