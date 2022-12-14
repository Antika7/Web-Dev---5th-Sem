<!--INFO-->

<?php

    $cupsErr = "";
    $cups = "";
    $gramsErr = "";
    $grams = "";

    

    if(isset($_POST['Convert']))
    {
      $convtype = $_POST['Convert'];
      // table 2
      if($convtype == "Convert To Ounces")
      {
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          if (empty($_POST["cups"])) 
          {
            $cupsErr = "Value is required";
          }
          else 
          {
            $cups = test_input($_POST["cups"]) * 8;
          }
        }
      }

      // table 1
      if($convtype == "Convert To Cups")
      {
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          if (empty($_POST["grams"])) 
          {
            $gramsErr = "Value is required";
          }
          else 
          {
            $grams = test_input($_POST["grams"]) /236.5 ;
          }
        }
      }
    }

        function test_input($data) 
        {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
    

?>

<!DOCTYPE html> 
<html lang="en"> 

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="icon" type="image/x-icon" href="images\STIRRED FAVICON.png">
 <title>Info Page</title>

 <style>
    body {font-family: "Times New Roman", Georgia, Serif;}
    h1, h2, h3, h4, h5, h6 {
      font-family: "Playfair Display";
      font-size: large;
    }
</style>
</head>

<ul class="topbar">
  <a href="index.html"><img src="images\STIRRED FAVICON.png" class="left" ></img></a>
  <li><a href="index.html"> Home </a></li>
  <li><a href="Recipes.html"> Recipes </a></li>
  <div class="dropdown">
      <button class="dropbtn">Info</button>
      <div class="dropdown-content">
        <a href="Help.php">Measurements</a>
        <a href="Promotions.html">Equipments</a>
      </div>
  </div>
  <li><a href="Contents.html"> About Us </a> </li>
  <li><a href="Contact.html"> Contact Us </a> </li>
</ul>

<!-- <style>
      ul.topbar {
        background-color: #F5E8C7;
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        align-items: center;
      }
      
      .topbar li {
        float: left;
      }
      
      .topbar li a {
        display: block;
        color: #9E7777;
        text-align: center;
        font-size: 15px;
        letter-spacing: 5px;
        padding: 12px 12px;
        text-decoration: none;
        font-family: 'Times New Roman', Times, serif;
      }
      
      /* Change the link color on hover */
      .topbar li a:hover {
        background-color: #6F4C5B;
        color: #F5E8C7;
      }
</style> -->

<style>
  body{
    background-attachment: fixed;
  }
</style>

<body background="images\measurements-bg.jpg">

<!--HEADING-->
<style>
  h1{
    font-size: 4rem;
    color: #F5E8C7;
    text-align: center;
    letter-spacing: 0.2em;
    padding-top: 00.2em;
  }
</style>

<h1>A Little Bit Of Extra Help...</h1>
</br></br></br>

<!--CONTENTS-->
<!-- <h3 style="color: #6F4C5B; text-align: center; background-color: #9E7777; font-size: 24px;">CONTENTS</h3> -->
<style>
  ul.contentul{
    font-size: 18px ;
    font-family: 'Times New Roman', Times, serif ;
    color: #F5E8C7;
    text-align: center;
    list-style: none;
    background-color: #6f4c5b;
  }

  .contentul li{
    padding-top: 7px;
    padding-bottom: 5px;
  }

  .contentul a{
    text-decoration: none;
    color: #F5E8C7;
  }

  .contentul li a:hover{
        color: #3f2933;
    }

    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 60%;
    margin: 0 auto;
    }

    .contentul .heading{
      font-size: 30px;
      margin-bottom: 9px;
      letter-spacing: 4.5px;
      text-decoration: overline;

    }

</style>
<ul class="contentul card">
  <li class="heading">CONTENTS</li>
  <li><a href="#table1">Grams to Cups Conversion</a></li>
  <li><a href="#table2">Cups to Ounces Conversion</a></li>
  <li><a href="#audio1">50 Tips to Cooking</a></li>
</ul>

<style>
  h2{
    font-size: 1.6rem;
    font-family: 'Times New Roman', Times, serif;
    text-align: left;
    letter-spacing: 00.2em;
    padding-left: 1em;
    color: #9E7777;
  }
</style>

<!--TABLE 1-->
<style>
  h3{
    color: #F5E8C7;
    font-size: 40px;
    text-align: center;
    letter-spacing: 00.2em;
    font-family: 'Times New Roman', Times, serif;
    background-color: #3f2933;
    margin-left: 15%;
    margin-right: 15%;
    padding: 15px;
    border-radius: 13px;
    border: #9E7777;
    border: 2px;
    opacity: 80%;

  }

  table{
    text-align: center;
    color: #9E7777;
    background-color: #F5E8C7;
    font-size: large;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    border-color: #6f4c5b;
  }

  form{
    margin-left: 40%;
    color: #F5E8C7;
  }
</style>

</br></br>

<div id='table1' slot="table1">
  <h3>Grams to cups conversion</h3>
</br></br>
  <table border=3 align=center style="border: 1; width: 70%; align-items: center;" >
    <th style="color: #F5E8C7; font-size: larger; background-color: #3f2933; width: 50%;">Grams</th>
    <th style="color: #F5E8C7; font-size: larger; background-color: #3f2933; width: 50%;">Cups</th>

    <tr>
      <td>136</td>
      <td>1</td>
    </tr>

    <tr>
      <td>68</td>
      <td>1/2</td>
    </tr>

    <tr>
      <td>45</td>
      <td>1/3</td>
    </tr>

    <tr>
      <td>34</td>
      <td>1/4</td>
    </tr>

  </table>

  <br><br>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <table>
    <tr>
      <td><label for="grams">ENTER GRAMS: </label> </td>
      <td><input type="number" id="grams" name="grams" /></td>
      <td><input type="submit" name="Convert" value="Convert To Cups"> </td>
    </tr>
    <tr>
      <td>
        <?php
         echo ("CUPS: ");
        ?>
    </td>
    <td>
      <?php
      echo("$grams")
      ?>
    </td>
    </tr>
  </table>
</form> 

</div>

</br></br>

<!--TABLE 2-->

</br></br>

<div id='table2' slot="table2">
  <h3>Cups to ounces conversion</h3>
</br></br>
  <table border=3 align=center style="border: 1; width: 70%; align-items: center;" >
    <th style="color: #F5E8C7; font-size: larger; background-color: #3f2933; width: 50%;">Cups</th>
    <th style="color: #F5E8C7; font-size: larger; background-color: #3f2933; width: 50%;">Ounces</th>

    <tr>
      <td>1</td>
      <td>8</td>
    </tr>

    <tr>
      <td>1/2</td>
      <td>2</td>
    </tr>

    <tr>
      <td>1/3</td>
      <td>2.66</td>
    </tr>

    <tr>
      <td>1/4</td>
      <td>1</td>
    </tr>

  </table>

<br><br>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <table>
    <tr>
      <td><label for="cups">ENTER CUPS: </label> </td>
      <td><input type="number" id="cups" name="cups" /></td>
      <td><input type="submit" name="Convert" value="Convert To Ounces"> </td>
    </tr>
    <tr>
      <td>
        <?php
         echo ("OUNCES: ");
        ?>
    </td>
    <td>
      <?php
      echo("$cups")
      ?>
    </td>
    </tr>
  </table>
</form> 

  

</div>

</br></br>

<!--AUDIO-->
<div id="audio1" slot="audio1" style="align-items: center;">
<h3>50 tips to cooking</h3>
<audio src="audio\50 Cooking Tips With Gordon Ramsay _ Part Two.mp3" controls style="align-content: center; margin-left: 40%;">
  <p>If you are reading this, it is because your browser does not support the audio element.</p>
  </audio>
</div>

<br><br>

<!--FOOTER-->
<footer>
  <i class="material-icons" >mail</i> &nbsp;
  <a href="mailto:antika.burman@science.christuniversity.in">antika.burman@science.christuniversity.in</a>
  </br></br>
  <i class="material-icons">call</i> &nbsp; +91 9876543210
  </br></br></br></br>
  <i class="material-icons">copyright</i> &nbsp; Antika Pvt Ltd.
</footer>

<!-- <style>
  footer {
      background-color: #6f4c5b;
      color:#F5E8C7;
      display: block;
      height: 100%;
      font-size: medium;
      align-content: center;
      text-align: center;
      text-decoration: none;
      padding-bottom: 0.5em;
      padding-top: 4em;
      font-family: 'Times New Roman', Times, serif;
  }
</style> -->

</body>
</html>
