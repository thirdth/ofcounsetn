<?php

$dbaddy = "mysql.ofcounseltn.com";
$dbuser = "ofcounseltncom"
$dbpw = "dkKBVJHx";
$dbdb = "ofcounseltn_com";


// database functions
function get_connected()  {
  $conn = mysqli_connect($dbaddy, $dbuser, $dbpw, $dbdb);
  if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
  }
  return $conn;
}


// login functions
function get_hash_by_name ($name)  {
  $query = "SELECT hash from users where name = '" . $data . "' limit 1";
  $results = mysqli_query($conn, $query);
  $all = mysqli_result($restult);

  return $all;
}

function verify_me($name, $password)  {
  $hash = get_hash_by_name($name);

  if (password_verify($password, $hash))  {
    return true;
  } else {
    return false;
  }
}

function create_session($name, $password) {
  $_SESSION['name'] = $name;
  $_SESSION['password'] = $password;

  if (isset($_POST['remember']))  {
    setcookie("octnname", $_SESSION['name'], time()+60*60*24*100, "/");
    setcookie("octnname", $_SESSION['password'], time()+60*60*24*100, "/"); //TODO: may need to encode this password for storing
    return;
  }
}

function clear_session_cookies()  {
  unset($_SESSION['name']);
  unset($_SESSION['password']);
  session_unset();
  session_destroy();
  setcookie("octnname", "", time()-60*60*24*100, "/");
  setcookie("octnpassword", "", time()-60*60*24*100, "/");
}

function check_logged_in() {
  if(isset($_SESSION['name']) && isset($_SESSION['password']))  {
    return true;
  } else if(isset($_COOKIE['octnname']) && isset($_COOKIE['octnpassword'])) {
    if(verify_me($_COOKIE['octnname'], $_COOKIE['octnpassword'])) {
      create_session($_COOKIE['octnname'], $_COOKIE['octnpassword']);
    } else {
      clear_session_cookies();
      return false;
    }
  } else {
    return false;
  }
}

 ?>
