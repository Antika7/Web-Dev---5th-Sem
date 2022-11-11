
<?php
 function converttoounce()
 {
    if(isset($_POST['Convert']))
    {
      $convtype = $_POST['Convert'];
      if($convtype == "fromcups")
      {
          $cup = $_POST['cups'];
          $ans = $cup * 5;
          echo $ans;
      }
    }
}
?>