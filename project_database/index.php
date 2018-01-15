<?php
  include_once 'header.php';

  if (isset($_SESSION['u_id'])) {
    echo '<div class="w3-row-padding w3-padding-64 w3-container">
              <div class="w3-content">
              <div class="w3-twothird">
              <h1>You are logged in</h1>
              <h5 class="w3-padding-32">Welcome. You can now acces the search functions, and perform queries. A complete list of all studies can be found under "all studies"</h5>
              <p class="w3-text-grey">To access the database and all other fucntions, researchers must first register. Registered users can search the database for all past studies. 
              Registered users can also insert new studies</p>
              </div>
              <div class="w3-third w3-center">
              <i class="fa fa-check w3-padding-64 w3-text-blue-grey"></i>
              </div>
              </div>
              </div>
              <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
              <div class="w3-content">
              <div class="w3-third w3-center">
              <i class="fa fa-search w3-padding-64 w3-text-blue-grey w3-margin-right"></i>
              </div>
              <div class="w3-twothird">
              <h1><a href="search.php" style="text-decoration: none">Search</a></h1>
              <h5 class="w3-padding-32">Click on "Search" takes you to the search page. There, you can perform queries to gather lists in accordance with your specfici needs</h5>
              </div>
              </div>
              </div>
              <div class="w3-row-padding w3-padding-64 w3-container">
              <div class="w3-content">
              <div class="w3-twothird">
              <h1><a href="studies.php" style="text-decoration: none">All Studies</a></h1>
              <h5 class="w3-padding-32">Click on "All Studies" to access the complete list of all past and current studies at the ABS behavioral laboratory</h5>
              </div>
              <div class="w3-third w3-center">
              <i class="fa fa-book w3-padding-64 w3-text-blue-grey"></i>
              </div>
              </div>
              </div>
              <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
              <div class="w3-content">
              <div class="w3-third w3-center">
              <i class="fa fa-clipboard w3-padding-64 w3-text-blue-grey w3-margin-right"></i>
              </div>
              <div class="w3-twothird">
              <h1><a href="insert.php" style="text-decoration: none">Insert New Study</a></h1>
              <h5 class="w3-padding-32">Click on "Insert New Study" to upload a new study.</h5>
              </div>
              </div>
              </div>';
               } else {
        echo '<div class="w3-row-padding w3-padding-64 w3-container">
              <div class="w3-content">
              <div class="w3-twothird">
              <h1>ABS Database</h1>
              <h5 class="w3-padding-32">Welcome, this database is meant for researchers at the Amsterdam Business School who conduct experiments in the behavioral laboratory.</h5>
              <p class="w3-text-grey">To access the database and all other fucntions, researchers must first register. Registered users can search the database for all past studies. 
              Registered users can also insert new studies</p>
              </div>
              <div class="w3-third w3-center">
              <i class="fa fa-database w3-padding-64 w3-text-blue-grey"></i>
              </div>
              </div>
              </div>';
              }
?>

<!-- Footer -->
<?php
  include 'footer.php';
?>
