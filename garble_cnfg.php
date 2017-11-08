<?php

function header_check() {
  if(check_logged_in() == false)  {
    include 'header.php';
  } else {
    include 'header_logged.php';
  };
}

// database functions
function get_connected()  {
  $dbaddy = "mysql.ofcounseltn.com";
  $dbuser = "ofcounseltncom";
  $dbpw = "dkKBVJHx";
  $dbdb = "ofcounseltn_com";
  $conn = mysqli_connect($dbaddy, $dbuser, $dbpw, $dbdb);
  if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
  }
  return $conn;
}


// login functions
function get_hash_by_name ($username)  {
  $conn = get_connected();
  $query = "SELECT hash from users where username = '" . $username . "' limit 1";
  $results = mysqli_query($conn, $query);
  $all = mysqli_fetch_array($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all[hash];
}

function verify_me($username, $password)  {
  $hash = get_hash_by_name($username);
  if (password_verify($password, $hash))  {
    return true;
  } else {
    return false;
  }
}

function create_session($username, $password) {
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  if (isset($_POST['remember']))  {
    setcookie("octnname", $_SESSION['username'], time()+60*60*24*100, "/");
    setcookie("octnpassword", $_SESSION['password'], time()+60*60*24*100, "/"); //TODO: may need to encode this password for storing
    return;
  }
  return;
}

function clear_session_cookies()  {
  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['password']);
  session_unset();
  session_destroy();
  setcookie("octnname", "", time()-60*60*24*100, "/");
  setcookie("octnpassword", "", time()-60*60*24*100, "/");
  return;
}

function check_logged_in() {
  session_start();
  if(isset($_SESSION['username']) && isset($_SESSION['password']))  {
    return true;
  } else if(isset($_COOKIE['octnname']) && isset($_COOKIE['octnpassword'])) {
    if(verify_me($_COOKIE['octnname'], $_COOKIE['octnpassword'])) {
      create_session($_COOKIE['octnname'], $_COOKIE['octnpassword']);
      return true;
    } else {
      clear_session_cookies();
      return false;
    }
  } else {
    return false;
  }
}

function register_user($name, $password, $email)  {
  $conn = get_connected();
  $pw_hash = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT into users(username, hash, email)
            VALUES ('$name', '$pw_hash', '$email')";

  if($conn->query($sql) === TRUE) {
    create_session($name, $pw_hash);
    mysqli_close($conn);
    return;
  } else {
    echo "error registering: " . $conn->error;
    mysqli_close($conn);
  }
}

function protected_page() {
  if(check_logged_in() == false)  {
    header("Location: login.php");
    die();
  };
}

function get_courtId() {
  if (isset($_POST['courtId']))  {
   $courtId = $_POST['courtId'];
 } elseif (isset($_GET['courtId'])){
   $courtId = $_GET['courtId'];
  }
  return $courtId;
}

function get_courtInfo_byId($courtId) {
  $courtId = $courtId;
  $conn = get_connected();
  $query = "SELECT court.court_name, court.court_type, court.county_id,
              court.time, court.clerk_id, addresses.court_id, addresses.street1,
              addresses.street2, addresses.city, addresses.state, addresses.zip
              from court
              inner join addresses
              on court.id=addresses.court_id
              where court.id ='" . $courtId . "'";
  $results = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_county_byId($countyId) {
  $countyId = $countyId;
  $conn = get_connected();
  $query = "SELECT * from county WHERE id ='" . $countyId . "'";
  $results = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_courtType($number) {
  $number = $number;
  $conn = get_connected();
  $query = "SELECT * from court_type WHERE id ='" . $number . "'";
  $results = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_courts()  {
  $conn = get_connected();
  $getCourt = "SELECT * from court order by court_name asc";
  $resultsCourt = mysqli_query( $conn, $getCourt );
  $allCourts = mysqli_fetch_all($resultsCourt, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $allCourts;
}

function get_courts_byClerk($clerkId) {
  $conn = get_connected();
  $clerkId = $clerkId;
  $query = "SELECT * from court where clerk_id = '$clerkId'";
  $results = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_court_info($jobId) {
  $conn = get_connected();
  $jobId = $jobId;
  $query = "SELECT jobs.jobDate, jobs.id, FullCourt.court_name, FullCourt.time, FullCourt.name, FullCourt.id as court_id FROM jobs RIGHT JOIN FullCourt ON jobs.court_id_job = FullCourt.id where jobs.id = '" . $jobId . "' limit 1";
  $results = mysqli_query( $conn, $query );
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_court_address($court_id)  {
  $conn = get_connected();
  $court_id = $court_id;
  $queryCourt = "SELECT * from addresses where court_id = $court_id";
  $resultsCourt = mysqli_query( $conn, $queryCourt );
  $allCourt = mysqli_fetch_all($resultsCourt, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $allCourt;
}

function get_ct_cty_ids($ctName)  {
  $conn = get_connected();
  $ctName = $ctName;
  $query = "SELECT id, county_id from court where court_name = '" . $ctName . "'";
  $results = mysqli_query( $conn, $query );
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_all_counties() {
  $conn = get_connected();
  $query = "SELECT * from county";
  $results = mysqli_query( $conn, $query );
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_all_clerks() {
  $conn = get_connected();
  $query = "SELECT * from clerk order by clerk_name";
  $results = mysqli_query( $conn, $query );
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_clerk_byId($clerkId) {
  $clerkId = $clerkId;
  $conn = get_connected();
  $query = "SELECT * from clerk WHERE id ='" . $clerkId . "'";
  $results = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_court_types()  {
  $conn = get_connected();
  $query = "SELECT * from court_type";
  $results = mysqli_query( $conn, $query );
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_job_info($jobId) {
  $conn = get_connected();
  $jobId = $jobId;
  $query = "SELECT * from jobs where id ='" . $jobId . "' limit 1";
  $results = mysqli_query( $conn, $query );
  $all = mysqli_fetch_all($results, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_jobId () {
  if (isset($_POST['jobId']))  {
   $jobId = $_POST['jobId'];
  } elseif (isset($_GET['jobId'])){
   $jobId = $_GET['jobId'];
  }
  return $jobId;
}

function get_clients()  {
  $conn = get_connected();
  $query = "SELECT * from client ORDER by name asc";
  $result = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_client_byId($clientId)  {
  $conn = get_connected();
  $query = "SELECT * from client where id='$clientId'";
  $result = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all[0];
}

function get_phone_byId($phoneId) {
  $phoneId = $phoneId;
  $conn = get_connected();
  $query = "SELECT * from phone_num where id='$phoneId'";
  $result = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all[0];
}

function get_address_byId($addressId) {
  $addressId = $addressId;
  $conn = get_connected();
  $query = "SELECT * from addresses where id='$addressId'";
  $result = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all[0];
}

function get_email_byId($emailId) {
  $emailId = $emailId;
  $conn = get_connected();
  $query = "SELECT * from email where id='$emailId'";
  $result = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all[0];
}

function get_appearances_byClientId($clientId)  {
  $clientId = $clientId;
  $conn = get_connected();
  $query = "SELECT * from appearance where client_id='$clientId'";
  $result = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

function get_appearances_byJobId($jobId)  {
  $jobId = $jobId;
  $conn = get_connected();
  $query = "SELECT * from appearance where job_id='$jobId'";
  $result = mysqli_query($conn, $query);
  $all = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_close($conn);
  return $all;
}

// Insert functions

function insert_phone($phone) {
  $phone = $phone;
  $conn = get_connected();
  $query = "INSERT into phone_num (number, phone_type_id)
              Values ('$phone', '1')";
  $result = mysqli_query($conn, $query);
  $last_id = mysqli_insert_id($conn);
  mysqli_close($conn);
  return $last_id;
}

function insert_email($email) {
  $email = $email;
  $conn = get_connected();
  $query = "INSERT into email (email)
              Values ('$email')";
  $result = mysqli_query($conn, $query);
  $last_id = mysqli_insert_id($conn);
  mysqli_close($conn);
  return $last_id;
}

function insert_address($street1, $street2, $city, $state, $zip)  {
  $street1 = $street1;
  $street2 = $street2;
  $city = $city;
  $state = $state;
  $zip = $zip;
  $conn = get_connected();
  $query = "INSERT into addresses
              (street1, street2, city, state, zip)
              VALUES ('$street1', '$street2', '$city', '$state', '$zip')";
  $result = mysqli_query($conn, $query);
  $last_id = mysqli_insert_id($conn);
  mysqli_close($conn);
  return $last_id;
}

function insert_client($client_name, $contact, $address_id, $phone_id, $email_id) {
  $client_name = $client_name;
  $contact = $contact;
  $address_id = $address_id;
  $phone_id = $phone_id;
  $email_id = $email_id;
  $conn = get_connected();
  $query = "INSERT into client
              (name, contact_name, address_id, phone_id, email_id)
              VALUES ('$client_name', '$contact', '$address_id', '$phone_id', '$email_id')";
  $result = mysqli_query($conn, $query);
  if ($result)  {
    return $result;
  } else {
    print(mysqli_error($conn));
  }
}

function insert_appearance($clientId, $jobId, $numCases) {
  $clientId = $clientId;
  $jobId  = $jobId;
  $numCases = $numCases;
  $conn = get_connected();
  $query = "INSERT into appearance
              (client_id, job_id, num_cases)
              VALUES ('$clientId', '$jobId', '$numCases')";
  $result = mysqli_query($conn, $query);
  if ($result)  {
    return $result;
  } else {
    print(mysqli_error($conn));
  }
}

// Update functions

function update_phone($phone, $clientId)  {
  $phone = $phone;
  $clientId = $clientId;
  $conn = get_connected();
  $client = get_client_byId($clientId);
  $phoneId = $client['phone_id'];
  $query = "UPDATE phone_num
              SET number='$phone' WHERE id = '$phoneId'";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
  return $phoneId;
}

function update_email($email, $clientId)  {
  $email = $email;
  $clientId = $clientId;
  $conn = get_connected();
  $client = get_client_byId($clientId);
  $emailId = $client['email_id'];
  $query = "UPDATE email
              SET email='$email'
              WHERE id = '$emailId'";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
  return $emailId;
}

function update_address($street1, $street2, $city, $state, $zip, $clientId)  {
  $street1 = $street1;
  $street2 = $street2;
  $city = $city;
  $state = $state;
  $zip = $zip;
  $clientId = $clientId;
  $conn = get_connected();
  $client = get_client_byId($clientId);
  $addressId = $client['address_id'];
  $query = "UPDATE addresses
              SET street1='$street1', street2='$street2', city='$city', state='$state',
              zip='$zip'
              WHERE id = '$addressId'";
  $result = mysqli_query($conn, $query);
  $last_id = mysqli_insert_id($conn);
  mysqli_close($conn);
  return $addressId;
}

function update_client($clientId, $client_name, $contact, $address_id, $phone_id, $email_id) {
  $clientId = $clientId;
  $client_name = $client_name;
  $contact = $contact;
  $address_id = $address_id;
  $phone_id = $phone_id;
  $email_id = $email_id;
  $conn = get_connected();
  $query = "UPDATE client
              SET name='$client_name', address_id='$address_id', phone_id='$phone_id',
                  email_id='$email_id', contact_name='$contact'
              WHERE id='$clientId'";
  $result = mysqli_query($conn, $query);
  if ($result)  {
    return $result;
  } else {
    print(mysqli_error($conn));
  }
}

 ?>
