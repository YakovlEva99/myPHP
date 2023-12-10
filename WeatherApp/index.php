<?php
$error = "";
$weather = "";
if(isset($_GET['city'])){
  $urlContent = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&units=metric&appid=fdeb0a1904c65368f1a56f8e088c092d');
  $forcastArray = json_decode($urlContent, true);
  
  if($forcastArray['cod'] == 200){
  $weather = $forcastArray['weather'][0]['description'];
  $weather = $weather.'.  The temperature is '.$forcastArray['main']['temp'].'&#8451;'. ' The speed of wind is '.$forcastArray['wind']['speed'].' m/sec';
  } else {
    $error = "The city name in incorrect";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href ="style.css">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 id = "Weather_title"class = "Weather_title">Weather in your city</h1>
    
    <form>
  <div class="mb-3">
    <label for="city" class="form-label">Input a City name</label>
    <input class="form-control id = "City" name = "city" aria-describedby="Forcast city">
    
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<div>

  <?php
  if($weather){
    echo '<div class="alert alert-primary" role="alert">'.'The weather in'.' '.$_GET['city'].' is ' .$weather.'.'.'</div>';
  } else if($error){
    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';

  }
  

  ?>


</div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>