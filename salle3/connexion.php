<?php
	function connectDb(){
      $host = 'localhost'; // ou sql.hebergeur.com
      $user = 'p1803091';      // ou login
      $pwd = '366575';      // ou xxxxxx
      $db = 'p1803091';
	try {
       $bdd = new PDO('mysql:host='.$host.';dbname='.$db.
                      ';charset=utf8', $user, $pwd,
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       return $bdd;
      } catch (Exception $e) {
       exit('Erreur : '.$e->getMessage());
  }
 }
?>