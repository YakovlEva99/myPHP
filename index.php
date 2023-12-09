<?php 
// echo "Hello PHP!"; 
// $name = "<h1>John</h1>";
// echo $name;
// echo "My name is $name";
// $lastname = 'Black';
// echo $name." ".$lastname;
// $x = 23;
// echo "<p>$x</p>";
// $sum = $x + $y;
// echo "<p>$sum</p>";

// $variableName = "lastname";
// echo $$variableName;


// $colors = array("red", "orange", "blue");
// print_r($colors);
// echo $colors[1];

// echo "<br>";

// $names[0] = "Jane";
// $names[1] = "Jake";
// $names["name"] = "Jime";

// print_r($names);

// echo "<br>";
// echo $names["name"];


// $years["Jane"]= 1999;
// $years["Jare"] = 1989;

// echo "<br>";



// unset($names[1]);//delete 
// echo sizeof($names);//size array


// echo "<br>";

// $userName = "Joe";
// $isUserLogin = false;

// if($isUserLogin) {
//   echo "Hello ".$userName;
// }else {
//   echo "You have to login";
// };



// // for($i = 0; $i < 10; $i++) {
// //   echo $i." ";
// // }
// // ;

// for($i = 0; $i < 20; $i++) {
//   if($i%2 == 1) {
//     echo $i." ";
//   }else {

//   }
// };

// for($i = 0; $i<= sizeof($colors); $i++) {
//   echo $colors[$i]." ";

// }


// foreach ($colors as $key => $value) {
//   // echo $value." ";
//   $colors[$key] = $value." color";
//   echo $key." ".$value." ";
// }




// $i = 0;
// while($i<=10) {
//   echo $i*7;
//   echo "<br>";
//   $i++;
// };


//print_r($_GET);
//echo $_GET["userName"];//получить из урла данные
//echo "Hello ".$_GET["userName"]."!";

// if(isset($_GET['number'])) {//если существует ключ number
//   $value = $_GET["number"];
// }

// if(is_numeric($value) && floor($value) == $value){
//   if($value%2){
//     echo $value.' Четное число';
//   }else {
//     echo $value.' Нечетное число';
//   }
// } else {
//   echo 'Input the number';
// }
//print_r($_POST);//распечатать, что находится в массиве
$loginPasswordArray = array(
  "Jane" => "1111",
  "Simona" => "8909"
);
$loginPasswordCorrect = false;
if(isset($_POST["login"]) && isset($_POST["password"])){
  foreach ($loginPasswordArray as $key => $value) {
    if($key == $_POST["login"] && $value == $_POST["password"]) {
      $loginPasswordCorrect = true;
          
    } 
  }

    if($loginPasswordCorrect == true) {
      echo "cool";
    } else {
      echo "password or login is not true";
    }
  }



?>
<p>Input your number</p>
 <form method="post"> <!--Get по умолчанию -->

<p><input type="text" name="login"></p>
<p><input type="password" name="password"></p>
<p><input type="submit" name=""></p>
</form>


