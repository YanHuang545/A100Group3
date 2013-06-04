<!--PHP Script for returning recent user data to main page-->
<!--By Robert Rotaru-->

<?php
  $sql_profiles = "SELECT * FROM users;";
  try {
    $rows = $conn->query($sql_profiles);
    $item_column = 0;
    foreach($rows as $row) {
      // Checks if the profile should begin a new row
      if ($item_column < 1) {
        echo "<div class='section group'>
                <div class='col span_1_of_5'>
                  <div class='profile' id='profile_container'>
                    <div id='profile_card'>
                      <div class='front face'>
                        <img src='" . $row["image_link"] . "' width='100%' height='auto'/>
                      </div>
                      <div class='back face'><a href='profile.php?user_name=" . $row["user_name"] . "'>
                      <span></span></a><h4>" . $row["first_name"] . " " . $row["last_name"] . 
                        "</h4><br>" . $row["city"] . "<br>" . $row["occupation"] . 
                     "</div>
                    </div>
                  </div>
                </div>";
        $item_column++;
      }
      // Checks if the profile should end a row
      else if ($item_column > 3) {
        echo "<div class='col span_1_of_5'>
                <div class='profile' id='profile_container'>
                  <div id='profile_card'>
                    <div class='front face'>
                      <img src='" . $row["image_link"] . "' width='100%' height='auto'/>
                    </div>
                    <div class='back face'><a href='profile.php?user_name=" . $row["user_name"] . "'>
                      <span></span></a><h4>" . $row["first_name"] . " " . $row["last_name"] . 
                      "</h4><br>" . $row["city"] . "<br>" . $row["occupation"] . 
                   "</div>
                  </div>
                </div>
              </div>
            </div>";
        $item_column = 0;
      }
      else {
        echo "<div class='col span_1_of_5'>
                <div class='profile' id='profile_container'>
                  <div id='profile_card'>
                    <div class='front face'>
                      <img src='" . $row["image_link"] . "' width='100%' height='auto'/>
                    </div>
                    <div class='back face'><a href='profile.php?user_name=" . $row["user_name"] . "'>
                      <span></span></a><h4>" . $row["first_name"] . " " . $row["last_name"] . 
                      "</h4><br>" . $row["city"] . "<br>" . $row["occupation"] . 
                   "</div>
                  </div>
                </div>
              </div>";
        $item_column++;
      }
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
?>
