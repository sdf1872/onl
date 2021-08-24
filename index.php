
<?php
sleep(1);
// when the original isn't as popular as the copy :(
// noone even gets online


// index7.php is where apps are
// click on my name to follow me (will show u how to make app)
$bannedIP=array();
$permbans=array();
if (isset($_SERVER['SCRIPT_NAME'])) {
  file_put_contents(".logs","[".date("Y.m.d h:i.s")."] ".hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 24))." - ".$_SERVER['REQUEST_METHOD']." ".$_SERVER['SCRIPT_NAME']." (permban hash ".hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 12)).")\n".file_get_contents(".logs"));
} else {
  file_put_contents(".logs","[".date("Y.m.d h:i.s")."] ".hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 24))." - ".$_SERVER['REQUEST_METHOD']." undefined - permban ".hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 12))."\n".file_get_contents(".logs"));
}
foreach  ($bannedIP as &$onebannedip) {
  if (hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 24)) == $onebannedip) {
    die("<h1>Sorry, tempbanned.</h1>");
  }
}
foreach ($permbans as &$permban) {
  if (hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 12)) == $onebannedip) {
    die("<h1>Sorry, it seems like this region is banned because someone abused the chat. If you think this is a mistake, contact mayank.charlotte@gmail.com.</h1>");
  }
}

//end 3chat ban script
$serverdown=false;
if ($serverdown==true) {
  header("Location: /index8.html"); // redirects to index8 
};
$trol=false;
// $bannedIP=array(  array('75' , 'Testing mkcodes is banned or not'),  array('1234' , 'Sussy bro amogus, yu have 1234 in Ip??'));
$abc=$_SERVER['HTTP_X_FORWARDED_FOR'];

// foreach ($bannedIP as array($ip,$reason)) {
//   if(strpos($_SERVER['REMOTE_ADDR'], $ip) === 0) {
//     die($reason);
//   } 
//   // if (strpos($abc,$ip) !== false) {
//   //   die("you be ban lmfaoo ".$reason);
//   // }
// }
// // if ($serverdown) {
//   header("Location: /index8.html"); // redirects to index8 
// }
if ($trol) {
  echo "xd";
}
else {
  header("Location: /index7.php");
}
//see [updated] CONTRIBUTING.md 
//ye
//admin acess link: https://zlinux-1.mkcodes.repl.co/index7.php?server_admin=%password.admin%
//if the server is down we can use index8.html
//like for updates and stuff
//and april fools jokes
//good
//huh
//what is happening "trol"