<?php
// require 'php/db.php';
// $query1="SELECT * FROM typinglessons WHERE id={$_GET['lesson']}";
// $run1=mysqli_query($db,$query1);
// $lesson=mysqli_fetch_assoc($run1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/main.css"/>
    <title>TypingNinja - Learn & Practice Online</title>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-center">
      TypingNinja
    </a>
  </div>
</nav>

<div class="modal" id="modalui2" tabindex="-1" style="display:none;background-color:rgba(0,0,0,0.8)">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Typing Test Result</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <h1 id="wname"></h1>
     <h3 id="acc" class="badge bg-danger"></h3>
     <h3 id="wpm" class="badge bg-warning"></h3>
      </div>
      <div class="modal-footer">
       
        <a href="typingtest.php" class="btn btn-primary">Take Test Again</a>
      </div>
    </div>
  </div>
</div>








<div class="modal" id="modalui" tabindex="-1" style="display:block;background-color:rgba(0,0,0,0.8)">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Take Typing Test</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <select name="time" id="time" class="form-select" aria-label="Default select example">
  <option selected disabled>Time Duration</option>
  <option value="60">1 Minute</option>
  <option value="300">5 Minute</option>
  <option value="600">10 Minute</option>
</select>
<div class="input-group mt-3">
  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name..">
</div>
      </div>
      <div class="modal-footer">
       
        <button type="button" id="stbutton" class="btn btn-primary">Start Test</button>
      </div>
    </div>
  </div>
</div>




<div class="container">
<div class="card mt-4">
  <h5 class="card-header">Take Typing Test


  <div class="progress mt-3">
  <div class="progress-bar-animated progress-bar-striped bg-danger" role="progressbar" id="timebar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>



</h5>
  <div class="card-body col-12 row">
  
<div class="lessonwords ms text-start">
The primary mission of the Indian Army is to ensure national security and national unity, to defend the nation from external aggression and internal threats, and to maintain peace and security within its borders. It conducts humanitarian rescue operations during natural calamities and other disturbances, such as Operation Surya Hope, and can also be requisitioned by the government to cope with internal threats. It is a major component of national power, alongside the Indian Navy and the Indian Air Force. The army has been involved in four wars with neighbouring Pakistan and one with China. Other major operations undertaken by the army include Operation Vijay, Operation Meghdoot, and Operation Cactus. The army has conducted large peace time exercises such as Operation Brasstacks and Exercise Shoorveer, and it has also been an active participant in numerous United Nations peacekeeping missions, including those in Cyprus, Lebanon, Congo, Angola, Cambodia, Vietnam, Namibia, El Salvador, Liberia, Mozambique, South Sudan, and Somalia.
</div>   


  </div>


</div>

<div class="card mt-4 keycover">
  <div class="card-body col-12 row">
  <div class="input-group">
  <textarea id="typingtool" class="form-control" rows="8" aria-label="With textarea"></textarea>
</div>
  </div>


</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/typingtest.js"></script>



</body>
</html>