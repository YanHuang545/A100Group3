<!--PHP Script to return search results from users table-->
<?php

  $search_term=$_POST["search"];
  $sql_users_search = "SELECT * FROM users WHERE first_name LIKE '%".$search_term."%' OR last_name LIKE '%".$search_term."%' OR city LIKE '%".$search_term."%' OR occupation LIKE '%".$search_term."%' OR employer LIKE '%".$search_term."%'";
  try {
    $rows = $conn->query($sql_users_search);
    $count = $rows->rowCount();
    if ($count == 0) {
      echo "<p>No matching profiles found.</p>";
    }
    foreach($rows as $row) {
        echo "<div class='search_profile' id='search-profile'>
                    <img href='' src='" . $row["image_link"] . "' width='100%' height='100%'/><h4>"
                    . $row["first_name"] . " " . $row["last_name"] . "</h4></div>";
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
?>
