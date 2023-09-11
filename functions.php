<?php
$title = "Functions";
require_once "./blocks/header.php";
require_once "./blocks/main.php";?>
<div class="container">
    <?php 
    function summary($arr){
        $summa = 0;
        foreach($arr as $value){
            $summa += $value;
        }
        return $summa;
    }
    echo "<h2> The sum is ".summary([1,2,3])."</h2>";

    function blabla(){
       global $x;
       echo $x;
    }
    $x=10;
blabla();


echo "<hr />";
function click(){
    static $counter;
    $counter++;
    echo $counter .'<br />';
 }
click();
click();
click();
echo "<hr />";
$num = 12;
$num1 =is_numeric(10);
$num2 =floatval("10.64");
echo gettype($num1) . " ," . gettype($num2);
//is_array(), is_string(), is_double(), is_bool( )
echo "<br />". is_integer($num);
$str ="To be or not to be - that is a question";
echo "<br />".strpos($str, "be");
$string = "josef, paul, whatson";
$array = explode(", ",$string);
print_r($array);
$string = implode(" | ", $array);
echo '<br />'.$string;
echo "<hr />";

//writing into file
// $file = fopen("text.txt","w");
// fwrite($file, "New\n Text example");
// fclose($file);

//appending to file
// $file = fopen("text.txt","a");
// fwrite($file, "\n See you next time");
// fclose($file);

//reading from file
$filename = "text.txt";
$file = fopen($filename,"r");
$content = fread($file, filesize($filename));
fclose($file);
echo '<h3><pre>'.$content.'</pre></h3>';

//putting content into file
//file_put_contents("newText.txt","Hello!\nIt's me");

//getting content from file
echo '<h3><pre>'.file_get_contents("newText.txt").'</pre></h3>';

//checking up if file exists
echo '<br />'.file_exists("newText.txt");
//renaming file
//rename("newText.txt","a.txt");
//rename("a.txt","newText.txt");

//deleting file
//unlink("a.txt");

//file location
echo '<h3>'.__FILE__.'</h3>';

//file permitions
echo '<h3>'.fileperms(__FILE__).'</h3>';

//changing file permitions
//i think it works normally only on unix
chmod(__FILE__,0777);
echo "<hr />";
echo "<h2>$ _SERVER array:</h2>";
// echo "<pre>";
// print_r($_SERVER);
// echo "<pre>";


// foreach($_SERVER as $item => $value){
//     echo "<p>$item : <b>$value</b></p>";
//     }

//doesn't work on windows, I suppose:
//echo '<br />'.$_SERVER['HTTPS'];

echo '<br />'.$_SERVER['HTTP_HOST'].' - '.$_SERVER['REQUEST_URI'];
echo '<br />'.$_SERVER['HTTP_USER_AGENT'];
    ?>
</div>
<?php
require_once "./blocks/footer.php";

?>
