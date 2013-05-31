<?php require_once("header.php"); ?>

<?php
  $user = $_GET["user_name"];
  $sql = "SELECT * FROM users WHERE user_name='".$user."' limit 1";

  try { 
    $rows = $conn->query($sql);
    foreach ($rows as $row) {
      echo "
      <div class='section group'>
        <div class='col span_1_of_3'>
          <h2>".$row['first_name']." ".$row['last_name']."</h2>
        </div>
        <div class='col span_2_of_3'>
          <h2>Info</h2>
        </div>
      </div>
      <div class='section group'>
        <div class='col span_1_of_3'>
          <img id='profile-image' src='".$row['image_link']."'/>
        </div>
        <div class='col span_2_of_3'>
          <h3>".$row['occupation']."</h3>
          <h4>".$row['employer'].", ".$row['city']."</h4>
          <br><br>
          About me
        </div>
      </div>

      ";
    }
  } catch (PDOException $e) {
    echo "QUery failed: " . $e->getMessage();
  }

?>




<?php require_once("footer.php"); ?>
