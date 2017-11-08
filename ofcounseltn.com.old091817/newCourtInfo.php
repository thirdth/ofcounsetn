<?php
get_connected();

$getCounties = "SELECT * from county";
$getClerks = "SELECT * from clerk";

$resultsCounties = mysqli_query( $conn, $getCounties );
$allCounties = mysqli_fetch_all($resultsCounties, MYSQLI_ASSOC);

$resultsClerks = mysqli_query( $conn, $getClerks );
$allClerks = mysqli_fetch_all($resultsClerks, MYSQLI_ASSOC);

mysqli_close($conn);
?>
<div class='col-md-12' id='newCourt'>
        <form method='POST' action='insertCourt.php'>
          <div class='row'>
            <div class='col-md-3'>
              <label for='courtName'>Court Name:</label>
              <input class='form-control' name='courtName'>
            </div>
            <div class='col-md-3'>
              <label for='county'>County</label>
              <select class='form-control' type='text' name='county'>
                <?php
                foreach ($allCounties as $row) {
                  echo "<option value='" . $row[name] . "'>" . $row[name] . "</option>";
                };
                ?>
              </select>
            </div>
            <div class='col-md-3'>
              <label for='clerk'>Clerk</label>
              <select class='form-control' type='text' name='clerk'>
                <?php
                foreach ($allClerks as $row) {
                  echo "<option value='" . $row[name] . "'>" . $row[name] . "</option>";
                };
                ?>
              </select>
              <a href="newClerk.php">add clerk</a>
            </div>
            <div class='col-md-3'>
              <label for='date'>Time</label>
              <input class='form-control' type='text' name='time' placeholder='HH:MM am/pm'>
            </div>
            <div class='col-md-3 text-right'>
              <button class='btn btn-success' style='margin-top: 25px;' type='submit'>Add</button>
            </div>
          </div>
        </form>
      </div>
