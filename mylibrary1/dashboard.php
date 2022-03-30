<?php
include "db.php";
include "header1.php";
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="admin-heading">Dashboard</h2>
            </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-4">
            <?php 
              $query = "SELECT COUNT(author_name) AS total_author FROM author";
              $run = mysqli_query($conn,$query);
              if(mysqli_num_rows($run) > 0)
              {
                while($row = mysqli_fetch_assoc($run))
                { ?>
               <!-- <div class="card bg-light border border-dark">-->
               <div class="card bg-info bg-gradient border border-dark border-4">
                  <div class="card-body text-center">
                    <b class="card-text">
                      <?php echo $row['total_author']; ?>
                    </b>
                    <h5 class="card-title mb-0">Authors</h5>
                  </div>
                  </div>
                <?php
                }
              }
            ?>
          </div>
          <div class="col-md-3 mb-4">
            <?php 
              $query = "SELECT COUNT(category_name) AS cat_total FROM category";
              $run = mysqli_query($conn,$query);
              if(mysqli_num_rows($run) > 0)
              {
                while($row = mysqli_fetch_assoc($run))
                { ?>
                <!--<div class="card bg-light border border-dark">-->
                <div class="card bg-info bg-gradient border border-dark border-4">
                  <div class="card-body text-center">
                    <b class="card-text">
                      <?php echo $row['cat_total']; ?>
                    </b>
                    <h5 class="card-title mb-0">Category</h5>
                  </div>
                  </div>
                <?php
                }
              }
            ?>
          </div>
          <div class="col-md-3 mb-4">
            <?php 
              $query = "SELECT COUNT(*) AS book_total FROM book";
              $run = mysqli_query($conn,$query);
              if(mysqli_num_rows($run) > 0)
              {
                while($row = mysqli_fetch_assoc($run))
                { ?>
                <!--<div class="card bg-light border border-dark">-->
                <div class="card bg-info bg-gradient border border-dark border-4">
                  <div class="card-body text-center">
                    <b class="card-text">
                      <?php echo $row['book_total']; ?>
                    </b>
                    <h5 class="card-title mb-0">Books</h5>
                  </div>
                  </div>
                <?php
                }
              }
            ?>
          </div>
         
        </div>
   </div>
</div>