<table><tr>
<td><a href="index.php">Home</a>&nbsp;/&nbsp;<a href="https://opus.nlpl.eu/legacy/trac">Wiki</a>&nbsp;&nbsp;&nbsp;</td>
<td>
<?php
$corpora = array();
if ($handle = opendir('.')) {
    while ($entry = readdir($handle)) {
        if (substr_compare($entry, '.php', -strlen('.php'))==0){
            if (is_link($entry)){
                array_push($corpora,basename($entry,'.php'));
            }
        }
    }
    closedir($handle);
    asort($corpora);
    foreach ($corpora as $corpus){
        echo "[<a href='$corpus.php'>";
        echo $corpus;
        echo "</a>] ";
    }
}
?>
</td></tr></table>
<br/>
