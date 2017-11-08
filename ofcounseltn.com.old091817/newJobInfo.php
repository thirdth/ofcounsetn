<?php

get_connected();

$getCourt = "SELECT * from court";

$resultsCourt = mysqli_query( $conn, $getCourt );
$allCourts = mysqli_fetch_all($resultsCourt, MYSQLI_ASSOC);

mysqli_close($conn);

echo "<div class='col-md-12' id='newJob'>
        <form method='POST' action='insertJob.php'>
          <div class='row'>
            <div class='col-md-3'>
              <label for='ctName'>Court</label>
              <select class='form-control' name='ctName'>";
              foreach ($allCourts as $row) {
                echo "<option value='" . $row[court_name] . "'>" . $row[court_name] . "</option>";
              };
  echo "      </select>
              <a href='newCourt.php'>add new court</a>
            </div>
            <div class='col-md-3'>
              <label for='date'>Date</label>
              <input class='form-control' type='text' name='date' id='datepicker'>
            </div>
            <div class='col-md-3 text-right'>
              <button class='btn btn-success' style='margin-top: 25px;' type='submit'>Add</button>
            </div>
          </div>
        </form>
      </div>"

 ?>
