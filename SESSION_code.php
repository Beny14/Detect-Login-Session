<!-- Il punem la inceputul fiecarei pagini pentru a ne tine minte serverul -->
<?php
  session_start();
?>

<!-- Verifica daca esti logat sau nu -->
<?php
$_SESSION['username'] = "Alex97";
echo $_SESSION['username'];

  if(!isset($_SESSION['username'])){
    echo "Nu esti logat !";
  }else{
    echo " - Esti logat !";
  }
?>

<!-- Pus in alta pagina pentru a verifica daca s-a mentinut username-ul -->
<?php
  echo "Session Name: " . $_SESSION['username'];
?>
