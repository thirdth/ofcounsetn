<?php
  $conn = get_connected();

  $date = date('Y-m-d', strtotime(today));

  if (isset($_POST['byDate']))  {
    $date = date("Y-m-d", strtotime($_POST["datepicker"]));
    $query = "SELECT jobs.jobDate, jobs.id, FullCourt.court_name, FullCourt.time, FullCourt.name FROM jobs RIGHT JOIN FullCourt ON jobs.court_id_job = FullCourt.id where jobs.jobDate = '" . $date . "' limit 6";
    $results = mysqli_query( $conn, $query );
    $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  } else {
    $date = date('Y-m-d', strtotime(today));
    $courtName = $_POST['ctName'];
    $queryCourt =  "SELECT jobs.jobDate, jobs.id, FullCourt.court_name, FullCourt.time, FullCourt.name FROM jobs RIGHT JOIN FullCourt ON jobs.court_id_job = FullCourt.id where FullCourt.court_name = '" . $courtName . "' and jobs.jobDate > '" . $date . "' limit 6";
    $results = mysqli_query( $conn, $queryCourt );
    $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  };

  $mdate = date('Y-m', strtotime($date));

  $calquery = "SELECT jobs.jobDate, jobs.id, FullCourt.time, FullCourt.name, FullCourt.court_name
              FROM jobs
                RIGHT JOIN FullCourt on jobs.court_id_job = FullCourt.id
                  WHERE jobs.jobDate LIKE '" . $mdate . "%' ";

  $calresults = mysqli_query( $conn, $calquery );
  $calall = mysqli_fetch_all($calresults, MYSQLI_ASSOC);



  mysqli_close($conn);

  if ($all) {
    foreach ($all as $value)  {
      echo  "<div class='col-xs-3 results'>
              <form method='POST' action='jobView.php'>
                <input type='text' style='font-size: 1.75em;' name='county' value='" . date('m-d-y', strtotime($value[jobDate])) . "' readonly='readonly'>
                <input type='text' name='time' value='@ " . $value[time] . "' readonly='readonly'>
                <input type='hidden' name='jobId' value='" . $value[id] . "'>
                <textarea rows='3' col='40' wrap='hard' name='ctName'>" . $value[court_name] . "</textarea>

                <input style='color: #d9603b;' type='submit' value='Select'>
              </form>
              </div>";
    };
  } else {
    echo "<div class='text-center'><h3>Please use the search function to find an appearance by either County or Date.</h3></div>";
  };


 ?>
