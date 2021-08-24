<?php
if (isset($_SERVER['SCRIPT_NAME'])) {
  file_put_contents(".logs_manual","[".date("Y.m.d h:i.s")."] ".hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 24))." - ".$_SERVER['REQUEST_METHOD']." ".$_SERVER['SCRIPT_NAME']." (permban hash ".hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 12)).")\n".file_get_contents(".logs"));
} else {
  file_put_contents(".logs_manual","[".date("Y.m.d h:i.s")."] ".hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 24))." - ".$_SERVER['REQUEST_METHOD']." undefined - permban ".hash('sha512',substr($_SERVER["HTTP_X_FORWARDED_FOR"], 0, 12))."\n".file_get_contents(".logs"));
}