<link rel="icon" type="image/png" href="logop.png"/>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<button type="button" id="b2" style="display:none;"> </button>
<script>document.getElementById('b2').onclick = function(){
	swal("What's new", "Made by mkcodes/mayank. What's new in 2.0.1: \n - added the what's new panel \n - added minimalwikia \n - added credits")
};
function fds() {
  document.getElementById('b2').click()
};
function cds() {
  swal("Credits","Bing - Microsoft @ company \n Ace9 - ajaxorg @ github \n RMTrollbox - ShyGuyMask (NiceJsProgrammer) , NT_Cat (FBI OPEN DOWN []) , and me @ trollbox\n Backgrounds - Endermanch (malwarewatch.org) @ discord \n sweetalert - t4t5 @ github \nThe rest is by me.")
}
function lcn() {
  swal("License","This code is licensed under the terms of the MIT license. You should have received a copy of this license in an included file named ../LICENSE. If you did not receive this file, you may obtain a copy of the license at http://opensource.org/licenses/MIT")
}
</script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"><script type="module" src="https://unpkg.com/x-frame-bypass"></script>
<body onload="addCSS('')">
<style>
body {
  background-image: url("https://malwarewatch.org/images/backgrounds/background<?php echo rand(1,20);?>.jpg");
}
.loadFrame {
  background-color:black;
}
/*"*/

titletwo {
  color:white;
  position: absolute; top: 5px; right: 5px; text-align: right; padding-top:0%;
}
  button{font-size:13.6px;}
</style><?php
$abc=$_SERVER['HTTP_X_FORWARDED_FOR'];
$abc=hash('sha512',$abc);
// $abc = substr($abc, 0, -1);  // returns "abcde"
?>
<titletwo><b><i><u>m-os &lt;v2.0.1&gt;</b></i></u><div id="time"> Time here. </div><div id="name"><input type="textbox" style="outline:none;border:none;6t" value="<?php echo $abc;?>" /> - userID</div></titletwo>
<script>
function updateTime() {
  const timeElapsed = Date.now();
  const today = new Date(timeElapsed);
  const today2= today.toUTCString();
  document.getElementById("time").innerHTML=today2; 
  setTimeout(updateTime, 1000); /* setting timer */
}
function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}
updateTime()

</script>
<?php
// file_put_contents("xd",file_get_contents("xd")."\n".$_SERVER['HTTP_X_FORWARDED_FOR'])
?>
<?php
function add($appURL,$appName,$iconURL,$id) {
  $a="<script src=\"https:\/\/code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https:\/\/code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <style>
  #%id%draggable {outline:1px solid black;}
  iframe {outline:none;border:none;  resize: both;  overflow: auto;position:auto;}
  // .%id%button:hover {background-color:black;color:green;}
  #%id%draggable {position:absolute;
  top: 0; /*[wherever you want it]*/
  left:50%; /*[wherever you want it]*/
    position: absolute !important;}
    img{display:inline-block;}
  </style>
    <script>
    $( function() {
      $( \"#%id%draggable\" ).draggable();
    } );
      $( function() {
      $( \"#%id%button\" ).draggable();
    } );

  $( function() {
    $( '\#%id%draggable' ).resizable();
  } );
    function %id%show() {
      $( \"#%id%draggable\" ).show();
      document.getElementById('%id%button').style.backgroundColor = '#91c4ed';
    }
    function %id%hide() {
      $( \"#%id%draggable\" ).hide();
      document.getElementById('%id%button').style.backgroundColor = 'transparent';
      }
      %id%z=0
      %id%x=0
      function %id%so() {
        if (%id%z==0) {
              %id%z=1
              %id%show()
          } else {
            %id%z=0
            %id%hide()
          }
        %id%x=%id%x+1
        if (%id%x==1) {
          document.getElementById('%id%frame').src='%url%';
        }
      }
   $('#%id%close').click(function(e) {  
        alert('1');
    });

    document.getElementById(\"%id%button\").style.top = Math.floor((Math.random() * 230) + 1) + \"px\";
    document.getElementById(\"%id%button\").style.left = Math.floor((Math.random() * 200) + 1) + \"px\";
  $(function(){
  $(\"#%id%frame\").focusin(function() {
    document.getElementById('%id%focus').style.backgroundColor = '#91c4ed';
  });
  });
  $(\"%id%frame\").focusout(function() {
    document.getElementById('%id%focus').style.backgroundColor = 'transparent';
  });
  function %id%reload() {
    document.getElementById('%id%frame').src+=''
  }
    </script>
    <button type=\"button\" id=\"%id%button\" onclick=\"%id%so()\" style=\"border:1px solid grey;;outline:none;background-color:transparent;color:white;position:fixed;\">%name%</button> 
    <br/>
  <div id=\"%id%draggable\" class=\"ui-widget-content\" style=\"width:50%;height:50%;\">
  <f style='color:white;'>[%name%]</f> <a onclick=\"%id%hide()\" style=\"color:white;\"> [x]</a> <focus id='%id%focus'> ‪ ‪</focus> <button type='button' style='background-color:transparent;color:white;outline:none;border:none;' id='%id%reload' onclick='%id%reload()' style='color:white;'> [reload] </button> <a href='%url%'> [link] </a>
    <iframe id=\"%id%frame\" src=\"about:blank\" style=\"width:100%;height:89%;\"> </iframe>
  <!--is=\"x-frame-bypass\" breaks it-->
    <script>
  $( function() {
    $( '\#%id%draggable' ).resizable();
  } );
  </script>
  </div>
  <script>
  $( \"#%id%button \" ).draggable({cancel:false});
  %id%hide();
  </script>
  ";
  //%id %name %url
  $a=str_replace("%id%",$id,$a);
  $a=str_replace("%name%",$appName,$a);
  $a=str_replace("%url%",$appURL,$a);
  $a=str_replace("%img%",$iconURL,$a);
  echo $a;
}

add("https://stuff.mkcodes.repl.co","sdfOS","sdfos","sdfos");//
add("https://bing.com","bing","bing","bing");
add("https://fstest.mkcodes.repl.co","My Files","fstest","fstest");
add("https://rocky-believed-tarp.glitch.me/index.php","Ace9 IDE","aceide","aceide");
add("https://rmtrollbox.herokuapp.com","Trollbox [not 100% by me]","tb","tb");
add("https://turbowarp.org/501394297/embed","[scratch]Wiki","scwiki","scwiki");
add("https://turbowarp.org/513439678/embed","[scratch]Terminal","scterm","scterm");
add("https://turbowarp.org/474482166/embed","[scratch]orangeOS","scoos","scoos");
add("https://turbowarp.org/532522351/embed/","[scratch]orangeOS V2","scostwo","scostwo");
add("https://turbowarp.org/523960082/embed","[scratch]War sim","scwar","scwar");
add("https://turbowarp.org/524998794/embed","[scratch]Story engine","scsto","scsto");
add("https://turbowarp.org/531879726/embed","[scratch]Trollbox","sctrl","sctrl");
add("https://trollbox.fun/media/d4b19b35ac5c7b8c618509c4066dd948/image.png","sdfRoleplay","sdfrp","sdfrp");
add("https://3chat-1.mkcodes.repl.co/index-mos.php?room=default","3chat","trcht","trcht");
add("https://zbin.mkcodes.repl.co/","zbin files","zbin","zbin");
add("https://articles.mkcodes.repl.co/","articles!","artic","artic");
add("/asset-html/browser/index.html","Waterfox","fffox","fffox");
add("https://minimalwikia.mkcodes.repl.co/","minimalWikia","wkphp","wkphp");
add("/","M-OS Simulator","msim","msim");
add("https://ff.mkcodes.repl.co/","td-artiles","tdict","tdict");
add("https://gtdict-1.mkcodes.repl.co/","dictionary","gtdic","gtdic");
add("/Notes.html","notes","ntes","ntes");

// add("https://sanskritdict.mkcodes.repl.co/","Sanskrit Dictionary","sd","sd");
// add("https://youtube.com","Youtube [not by me]","tb","tb");
?>

<style>*{opacity:90%;}body{opacity:100%;}
body {
    /* border-bottom: 30px solid; */
    margin-bottom: -1px;
    -webkit-background-clip: padding-box; /* for Safari */
    background-clip: padding-box; /* for IE9+, Firefox 4+, Opera, Chrome */
}
fd{  vertical-align: bottom;
}
</style>
<!--<fd>hi</fd>
-->

<style>
.center{
  //position fixed
  bottom:100%;
}
</style><div class="btn-toolbar center fixed-bottom" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
<?php
function addTaskbar($appurl,$appname) {
  echo '    <button type="button" class="btn btn-secondary"><a href="'.$appurl.'" style="color:white;">'.$appname.'</a></button>';
}
addtaskbar("/","update and restart");
echo '    <button type="button" class="btn btn-secondary" onclick="fds()">'.'what\'s new'.'</a></button>';
echo '    <button type="button" class="btn btn-secondary" onclick="cds()">'.'credits'.'</a></button>';
echo '    <button type="button" class="btn btn-secondary" onclick="lcn()">'.'license'.'</a></button>';

?>
  </div>
</div>
<style>body{background-color:#003166;}</style>
