<!--PHP Script to return search results from users table-->
<?php

  $search_term=$_POST["search"];
  $sql_users_search = "SELECT * FROM users WHERE first_name LIKE '%".$search_term."%' OR last_name LIKE '%".$search_term."%' OR city LIKE '%".$search_term."%' OR occupation LIKE '%".$search_term."%' OR employer LIKE '%".$search_term."%'";
  try {
    $rows = $conn->query($sql_users_search);
    foreach($rows as $row) {
        echo "<div id='search-profile'>
                    <img href='' src='" . $row["image_link"] . "' width='100%' height='200px'/>"
                    . $row["first_name"] . " " . $row["last_name"] . "</div>";
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
?>
