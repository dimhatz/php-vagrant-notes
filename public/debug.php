<?php
for ($i = 0; $i<5; $i++){
    echo $i . "<br>";

    // When output buffering is correctly disabled, this will result in line-by-line printing each second in browser.
    // If it doesn't behave like this, it means that buffering is enabled (or compression or other settings in php
    // or server are involved -> see my install-debug txt file for notes how to set it up)
    sleep(1);
}
phpinfo();