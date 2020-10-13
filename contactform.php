<link rel="stylesheet" href="style.css">
<?php 
 


if (isset($_POST['nimi']) && isset($_POST['sahkoposti']) && isset($_POST['palaute'])) {

  
   
    $data =  $_POST['nimi'] . " " . " " . $_POST['sahkoposti'] . "<br>" . $_POST['palaute'] . "</br>" ."\n\r" ;
    $ret = file_put_contents('palautteet.html', $data, FILE_APPEND) ;
    
     
   

    if (empty($_POST['nimi']) && empty($_POST['sahkoposti']) && empty($_POST['palaute'])) {
      echo  "<p style='font-size:30px;'>" . "Ongelma palautetta lähettäessä" . "</p>";
         $link_addresskaks = 'index.html';
      echo "<a href='".$link_addresskaks."'>Takaisin etusivulle</a>";
    }
     

  
    else {
      echo "<p style='font-size:30px;'>" . "Palaute on lähetetty!" . "</p>";
         $link_address = 'palautteet.html';
      echo "<a href='".$link_address."'>Katso palautteet</a>";
    }
   

  }



?>

