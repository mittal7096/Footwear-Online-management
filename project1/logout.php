<?php
session_start();
session_abort();
session_destroy();
setcookie("globalemail2","",time()-20);
header("location:home.html");

?>