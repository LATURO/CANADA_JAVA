<meta charset="utf8">
<?php
if ($handle = opendir('./')) {
    while (false !== ($entry = readdir($handle))) {
        echo "<a href=".$entry.">$entry</a> <br>";
    }
    while ($entry = readdir($handle)) {
        echo "$entry <br>";
    }

    closedir($handle);
}
?>