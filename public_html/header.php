<table><tr>
<td><a href="index.php">Home</a>&nbsp;/&nbsp;<a href="https://opus.nlpl.eu/legacy/trac">Wiki</a>&nbsp;&nbsp;&nbsp;</td>
<td>
<?php
if ($handle = opendir('.')) {
    while ($entry = readdir($handle)) {
      if (str_ends_with($entry,'.php'){
        if (is_link($entry){
	  echo "[<a href='$entry'>";
	  echo basename($entry);
	  echo "</a>] ";
	}
      }
    }
    closedir($handle);
}
?>
</td></tr></table>
<br/>
