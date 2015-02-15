<FORM METHOD="LINK" ACTION="message_add.php">
<INPUT TYPE="submit" class="button" VALUE="<? echo "$amess"?>">
</FORM>
<div class="guestbook">
<?
   $file = fopen("../guestbook/messages/counter.txt", "r"); 
   $counter = fgets($file, 4096); 
   fclose($file);

   for ($i = $counter; $i > 0; $i--) 
   { 
           if ($i < 10) 
           $i = "000" . $i; 
        elseif ($i < 100) 
           $i = "00" . $i; 
        elseif ($i < 1000) 
           $i = "0" . $i; 
       
       $get_file = "../guestbook/messages/$i _bericht.txt"; 
       if (file_exists($get_file)) 
       {
           include($get_file);
           echo "<br>";
       }
   } 
?> 
</div>