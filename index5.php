<!--
Save test (test if saved): test1033                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
             `````````````````````                  ``````````         `````````                    
             yMMMMMMMMMMMMMMMMMMMM`                 oMMMMMMMMd         MMMMMMMMM-                   
             yMMMMhhhhmMMMMdhhhdMM/:`             -:sMNhhhhmMd::    `::MMdhhhdMM+:.                 
             yMMMM    +MMMM-   -MMMM+             dMMMm    sMMMM`   /MMMM:   .MMMMo                 
             yMMMM    +MMMM-   -MMMM+ .+++++++++  dMMMm    sMMMM`   /MMMM:   `ssss:                 
             yMMMM    +MMMM-   -MMMM+ :MMMMMMMMN  dMMMm    sMMMM`   /MMMM:                          
             yMMMM    +MMMM-   -MMMM+ .++++++++/  dMMMm    sMMMM`   .++MMhssssss.                   
             yMMMM    +MMMM-   -MMMM+             dMMMm    sMMMM`      MMMMMMMMM-                   
             yMMMM    +MMMM-   -MMMM+             dMMMm    sMMMM`      ------/MMdd/                 
             yMMMM    +MMMM-   -MMMM+             dMMMm    sMMMM`            .MMMMo                 
             yMMMM    +MMMM-   -MMMM+             dMMMm    sMMMM`   :NNNN:   .MMMMo                 
             yMMMM    +MMMM-   -MMMM+             ymNMm....sMMmm`   :mmMM/...-MMNm+                 
             yMMMM    +MMMM-   -MMMM+               oMMMMMMMMd         MMMMMMMMM-                   
             +hhhh    :hhhh.   .hhhh:               /hhhhhhhhs         hhhhhhhhh.                   
           ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssso               
           hddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddy               
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
-->
<link rel="icon" type="image/ico" href="/favicon.ico"/>

<!--endloader-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<button type="button" id="b2" style="display:none;"> </button>
<script>document.getElementById('b2').onclick = function(){
	swal("What's new", "Made by mkcodes/mayank. What's new in v5: \n - debloated it all \n - added minimise feature \n - fixed close button glitch \n - (unintentionally) added blue scrollbars on firefox \n - added maximize feature")
};
function fds() {
  document.getElementById('b2').click()
};
// goal: %id%so button if bg grey then show , return 0 else pass
function cds() {
  swal("Credits","Bing - Microsoft @ company \n Ace9 - ajaxorg @ github \n RMTrollbox - ShyGuyMask (NiceJsProgrammer) , NT_Cat (FBI OPEN DOWN []) , and me @ trollbox\n Backgrounds - Endermanch (malwarewatch.org) @ discord \n sweetalert - t4t5 @ github \n - pheditor -  pheditor @ github (slightly modified) \n The rest is by me.")
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
<titletwo><b><i><u>m-os &lt;v0.5&gt;</b></i></u><div id="time"> Time here. </div><div id="name"><input type="textbox" style="outline:none;border:none;6t" value="<?php echo $abc;?>" /> - userID</div>

<br/> (Note that after minimizing a tab, you must double click to open it.) </titletwo>
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
    function %id%min() {
      document.getElementById('%id%button').style.backgroundColor = 'grey';
    }
      %id%z=0
      %id%x=0
      //this is min and max function, not close xddd
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
      function %id%maxm() {
        document.getElementById('%id%draggable').style.width = '100%';
        document.getElementById('%id%draggable').style.height = '100%';
        document.getElementById('%id%frame').style.width = '100%';
        document.getElementById('%id%frame').style.height = '100%';
        $('#%id%frame').css('top', 200);
        $('#%id%frame').css('left', 200);
      }
      
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
    <!--reload and close = x
    cache refresh feature ?? i was to lazy to properly code refresh so i call it feature xd-->
    <style>
    
      </style>
  <f style='color:white;'>[%name%]</f> <a onclick=\"%id%hide();%id%min();\" style=\"color:white;\"> [_]</a> <a onclick=\"%id%maxm();%id%show();\" style=\"color:white;\"> [☐]</a>  <a onclick=\"%id%hide();document.getElementById('%id%frame').src+=''\" style=\"color:white;\"> [x]</a> <focus id='%id%focus'> ‪ ‪</focus> <a style=\"color:white;text-decoration:none;\" id='%id%reload' href='javascript:%id%reload()'> [reload] </button> <a style=\"color:white;text-decoration:none;\" href='%url%'> [link] </a>
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
add("http://rmtrollbox.eu-gb.mybluemix.net","Trollbox [not 100% by me]","tb","tb");
add("https://3chat-1.mkcodes.repl.co/index-mos.php?room=default","3chat","trcht","trcht");
add("https://zbin.mkcodes.repl.co/","Public files","zbin","zbin");
add("/asset-html/browser/index.html","Waterfox (Browser)","fffox","fffox");
add("https://minimalwikia.mkcodes.repl.co/","minimalWikia","wkphp","wkphp");
add("/","M-OS Simulator","msim","msim");
add("https://gtdict-1.mkcodes.repl.co/","dictionary","gtdic","gtdic");
add("/Notes.html","Notes","ntes","ntes");
add("/phedit/index.php","My files (edit acess mode) (not 100% by me)","mfeam","mfeam");

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
