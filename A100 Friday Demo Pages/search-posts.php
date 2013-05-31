<!--PHP Script to return search results from posts table-->
<?php

  $search_term=$_POST["search"];
  $sql_posts_search = "SELECT * FROM posts WHERE title LIKE '%".$search_term."%' OR blurb LIKE '%".$search_term."%' OR content LIKE '%".$search_term."%' OR post_date LIKE '%".$search_term."%'";
  try {
    $rows = $conn->query($sql_posts_search);
    $count = $rows->rowCount();
    if ($count == 0) {
      echo "<p>No matching profiles found.</p>";
    }
    foreach($rows as $row) {
      echo "<div id='search-post'>
                  <img id='post-image' src='" . $row["image_link"] . "' width='150' height='150'/>
                  <h3 class='post title'><a href='" . $row["full_link"] . "'>" . $row["title"] . "</a></h3>
                  <p>" . date("F d Y", $row["post_date"]) . "</p>
                  <p class='search-content'>" . $row["content"] . "</p>
            </div>";
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
?>
