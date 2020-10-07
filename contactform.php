<?php 


if (isset($_POST['nimi']) && isset($_POST['sahkoposti']) && isset($_POST['palaute'])) {

    $data = 'palaute.txt' . $_POST['nimi'] . ' ' . $_POST['sahkoposti'] . ' ' . $_POST['palaute'] . "\n";
    $ret = file_put_contents('palaute.txt', $data FILE_APPEND);
  
    if ($ret === false) {
      echo('Ongelma palautetta lähettäessä');
    } 
  
    else {
      echo "Palaute on lähetetty!";
    }
   

  }



?>