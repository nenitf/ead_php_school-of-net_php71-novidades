<?php

$files = scandir('.');
foreach($files as $file) {
    if (!is_dir($file) && $file !== "index.php"){
        echo "<a href='/" . $file . "'>$file</a><br>";
    }
}

phpinfo(); 
