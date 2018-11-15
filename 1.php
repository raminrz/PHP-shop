<?php
$random_string = substr(md5( microtime()),-8,8 );
echo $random_string;
?>