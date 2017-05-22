<?php
if (isset($_POST['logout'])) {
   // empty the $_SESSION array
   $_SESSION = [];
   // invalidate the session cookie
   if (isset($_COOKIE[session_name()])) {
       setcookie(session_name(), '', time()-86400, '/');
   }
   // end session and redirect
   session_destroy();
   header('Location: https://www.rrbconcepts.com/discographyPHP/login.php');
   exit;
}
