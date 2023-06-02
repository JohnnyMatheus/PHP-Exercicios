<?php
$linha =1;
while ($linha <=20){
    $coluna =1;
   while($coluna <= $linha){
    echo '-',$coluna; 
   $coluna++;
}
echo '<br>';
$linha++;
}