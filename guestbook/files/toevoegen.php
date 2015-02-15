<?

if ($_POST['submit'] && $_POST['naam'] && $_POST['bericht'])
{
    $post_naam = htmlentities($_POST['naam']);
    $post_bericht = htmlentities($_POST['bericht']);
    $post_bericht = nl2br($post_bericht);
    
    $gastenboek_tekst = "<fieldset><legend><b>$written</b> " . $post_naam . " <b>$on</b> " . date('d.m.Y , H:i') . "<br>\n</legend><br>" . $post_bericht . "<p>\n\n</fieldset>\n\n";
    
    $file = fopen("../guestbook/messages/counter.txt", "r"); 
    $num = fgets($file, 4096); 
    fclose($file); 
    
    $ornum = $num + 1; 
    $num = $num + 1;
    
    if ($num < 10) 
       $num = "000" . $num; 
    elseif ($num < 100) 
       $num = "00" . $num; 
    elseif ($num < 1000) 
       $num = "0" . $num; 
    
    $filetoopen = "../guestbook/messages/$num _bericht.txt"; 
    
    $file = fopen($filetoopen, "a");
    fwrite($file, $gastenboek_tekst); 
    fclose($file);
    
    $cfile = fopen("../guestbook/messages/counter.txt", "w");
    fwrite($cfile, $ornum);
    fclose($cfile);
    
	echo "<div class='guestbook'>";
    echo "$messa<p>";
	echo "$thanmess<p>";
	    
    echo "<FORM METHOD=\"LINK\" ACTION=\"guest_book.php\">";
	echo "<INPUT TYPE=\"submit\" class=\"button\" VALUE=\"$bmess\">";
	echo "</FORM>";
	echo "</div>";


}
else
{	
	echo "<FORM METHOD=\"LINK\" ACTION=\"guest_book.php\">";
	echo "<INPUT TYPE=\"submit\" class=\"button\" VALUE=\"$bmess\">";
	echo "</FORM>";

    
    echo "<form method=\"POST\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
    echo "<br><br>Name:&nbsp;&nbsp;&nbsp;<input class=\"input\" type=\"text\" size=\"38\" name=\"naam\" value=\"" . htmlentities($_POST['naam']) . "\"><br><br>";
    echo "Message:<br><textarea class=\"input\" name=\"bericht\" rows=\"10\" cols=\"45\">" . htmlentities($_POST['bericht']) . "</textarea><br>";
    echo "<input class=\"button\" type=\"submit\" name=\"submit\" value=\"$smess\">";
    echo "</form>";
}
?> 