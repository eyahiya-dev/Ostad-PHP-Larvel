<?php
$current_date = date("d-m-y-l ". " " ."h:i:sa");
$writing_in_file = fopen("LiveTest-Module-06/ostad.txt", "w+");
$write = fwrite($writing_in_file, $current_date);
