<?php
$title = "Total Recall";
require_once "./blocks/header.php";
require_once "./blocks/main.php";?>
   <div class="container">
   <h1>php file is here
<?php
$num= "0.5";
$text = 'eto text!';
floatval($num);
echo 'Peremennyye: ' . $num . $text;
define('MY_AGE', "34");
//creating constant:

echo MY_AGE;
$num +=11;
$num %=10;
echo '<br>'. $num .'<br>'. M_PI.'<br>'. ceil(M_PI).'<br>'. floor(M_PI).'<br>'. round(M_PI,1);
//random number generated
echo '<br>'.  mt_rand(1,20);
echo '<br>'.  min(21,20,56,67);
echo '<br>'.  max(21,20,56,67);
$str ="stroka12";

$length = strlen($str);
echo "<br> VaR: $str Length: $length";
?>
</h1>
<?php
echo "<img src='./img/flr2.gif' />";
echo strtoupper(trim('    soAe sRtr   '));
echo mb_strtoupper('    some str   ');
echo '<br>' .  md5('dfh') ;
$nums = [1,2,3,4,5,"6",7,8.88, true];
echo '<h1>the first el of array is ' . $nums[0] . '</h1>'
 ?>
  <h2>one-dimentional arrays</h2>
 <?php
 $nums = [1,2,3,4,5,"6",7,8.88, "cv"];
echo '<h1>the first el of array is ' . $nums[0] . '</h1>'
 ?>
 <h2>Ассоциативные массивы</h2>
 <?php 
 $user =  ["name" => "Alex", "age" => 150, 5 => 8, true => 90];
 $user["name"] = "Amphybiy Ivanofitch";
 $user[2] = 'kapusta';
 $user[true]=true;
 echo '<h3><b>User name: </b>' . $user["name"] . $user[true].  '</h3>'
 ?>
   <h2>multi-dimentional arrays</h2>
 <?php
 $matrix = [
    ["tralala", 9, true, -1],
    [0, null, 0.567, false],
    [12345, 'aliluyyah']
 ];
 echo '<h4>'. $matrix[2][1] . '</h4>';
 $matrix[2][0] = 'yes, we can'
 ?>
 <h1>tsykly</h1>
 <ul>
 <?php 
 for($i=0; $i<count($nums); $i++){
echo '<li>'."Element $i:  $nums[$i]".'</li>';
 }
echo "<hr />";
foreach($user as $item => $value){
echo "<p>$item : <b>$value</b></p>";
}
echo "<hr />";
foreach($nums as $value){
    echo "<p>it iz : <b>$value</b></p>";
    }
    echo "<hr />";
    foreach($nums as $i => $value){
        echo "<p> $i : <b>$value</b></p>";
        }
        ?>
  </ul>
  <hr />
  <h3>
  <?php
  $list = [1.2, 23,-3, "dfg", 4.4, false];
  print_r( $list);
  //substruct
  unset($list[0]);
  echo "<br />";
  print_r( $list);
  //refresh indexes
  $list = array_values($list);
  echo "<br />";
  print_r( $list);
  //sorting from min to max
  sort($nums);
  echo "<br />";
  print_r( $nums);
    //sorting from max to min
    rsort($nums);
    echo "<br />";
    print_r( $nums);
    //chaotic 
    shuffle($nums);
    echo "<br />";
    print_r( $nums);
    //search
    echo "<br />";
    echo in_array(67 , $list);
    echo "<br />";
    
  function search($el, $arr){
    echo "<br />";
    if (in_array($el , $arr)==1)
    echo "found";
else
    echo " not found";
  }

  search("dfg",$list);
  search("dfg",$nums);
  $arrr=["ya","khochu","SPAT", "ochen","silno",true,22.02, 1];
  //vyvod s tipom 
  echo "<hr />";
  var_dump($arrr);
  echo "<br />";
    //obrezka massiva
    echo "<br />";
    print_r($arrr);
    echo "<br /> Dlina massiva ". count($arrr);
    $new = array_slice($arrr,0,3);
    echo "<br />";
    print_r($new);
    echo "<br /> Dlina massiva ". count($new);
    echo "<hr />";
    $arr_1 = [3,5,6];
    $arr_2 = [0,50,60];
    $arr_3 = array_merge($arr_1 , $arr_2);
    echo "<br />";
    print_r($arr_3);
  ?>
    </h3>
   </div> 
   <?php
require_once "./blocks/footer.php";

?>

