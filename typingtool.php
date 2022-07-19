<?php
require 'php/db.php';

$query1="SELECT * FROM typingtools WHERE id={$_GET['lang']}";
$run1=mysqli_query($db,$query1);
$tool=mysqli_fetch_assoc($run1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jsapi.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png">
    <title><?=$tool['lang_name']?> Typing Tool - TypingNinja</title>
    <script type="text/javascript">
google.load("elements","1",{
packages:"transliteration"
});


function onLoad(){
    var options = {
        sourceLanguage:google.elements.transliteration.LanguageCode.ENGLISH,
        destinationLanguage:[google.elements.transliteration.LanguageCode.<?=$tool['lang_value']?>],
        shortcutKey:'ctrl+g',
        transliterationEnabled:true
    };

    var control = new google.elements.transliteration.TransliterationControl(options);
    control.makeTransliteratable(['typingtool']);

    
}

google.setOnLoadCallback(onLoad);
    </script>
    
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

<div class="container">
<div class="card mt-4">
  <h5 class="card-header"></i><?=$tool['lang_name']?> Typing Tool</h5>
  <div class="card-body d-flex justify-content-around col-12 row">
  <div class="input-group">
  <textarea id="typingtool" class="form-control" rows="8" aria-label="With textarea"></textarea>
</div>
<p>Start Typing in english & it automatically converts in <?=$tool['lang_name']?>, press <kbd>Ctrl</kbd> + <kbd>G</kbd> for toggle between English and <?=$tool['lang_name']?></p>


  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>