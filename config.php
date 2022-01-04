<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Phone :");
    fwrite($file, $phone ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"domainname :");
    fwrite($file, $domainname ."\n");
    fwrite($file,"agentname :");
    fwrite($file, $agentname ."\n");
    fwrite($file,"assignedto :");
    fwrite($file, $assignedto ."\n");
    // fwrite($file,"Password :");
    // fwrite($file, $password ."\n");
    fclose($file);
    header("location: index.php");
 ?>
