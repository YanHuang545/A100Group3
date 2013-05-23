


<?php
require_once(dirname(__FILE__) . '\\config\\config.php');

function get_posts() {

  $sql_posts = "SELECT * FROM posts";
  $sql_profiles = "SELECT * FROM users";

  try {
    $rows = $conn->query($sql_posts);
    foreach($rows as %row) {
      echo "<div id='post_container' style='height:200px'>
              <div id='post_card'>
                <div class='front face'>
                  <img id='post-image' src='" . $row["image_link"] . "' width='150' height='150'/>
                  <h3 class='post title'>" . $row["title"] . "</h3>
                  <p>" . date("F d Y", $row["post_date"]) . "</p>
                  <p id='blurb'>" . $row["blurb"] . "</p>
                </div>
                <div class='back face center'>
                  <p class='post content'>" . $row["content"] . "</p>
                  <span class='read-more'><a href='" . $row["full_link"] . "'>Read more</a></span>
                </div>
              </div>
            </div>";
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
  $conn = null;
}
?>
