

<?php 


if (isset($_POST['nimi']) && isset($_POST['sahkoposti']) && isset($_POST['palaute'])) {

   
    $data = 'palautteet.html' . $_POST['nimi'] . ' ' . $_POST['sahkoposti'] . ' ' . $_POST['palaute'] . "\n";
    $ret = file_put_contents('palautteet.html', $data, FILE_APPEND) ;
   
   
    if ($ret === false) {
      echo "Ongelma palautetta lähettäessä";
    } 
  
    else {
      echo "Palaute on lähetetty!";
    }
   

  }



?>

