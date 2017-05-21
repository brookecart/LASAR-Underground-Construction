<div class="top-bar">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text">DB Demo</li>
          <?php
            $sql = "SELECT ContentID, Nav_Name FROM content";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<li><a href="index.php?pg=' . $row["ContentID"].'">'.
                          $row["Nav_Name"]."</a></li>";
                }
            } else {
                echo "Failed to load navigation.";
            }
        ?>
        </ul>
      </div>
      <div class="top-bar-right">
        
        <ul class="menu">
         <li><a href="db_list.php">Admin</a></li>
         <!-- 
          <li><input type="search" placeholder="Search"></li>
          <li><button type="button" class="button">Search</button></li>
          -->
        </ul>
      </div>
</div>