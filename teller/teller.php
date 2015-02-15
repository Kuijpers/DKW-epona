<?php  

// instellingen van de teller

$sinds = "Januari 1th 2009"; // vul hier de datum in, van wanneer de teller telt
$bestand = "teller/teller.txt"; // vul hier de bestandsnaam in, van de logfile 

// controleren of bestand bestaat
if (file_exists($bestand)) {

    // het bestand bestaat, waarde + 1
    $actie = fopen($bestand, "r+");
	$aantal = fgets($actie, 6);
	$aantal++;
	rewind($actie);
	fputs($actie, $aantal, 6);
	fclose($actie);
}else{     
	// het bestand bestaat niet, nieuwe aanmaken met waarde 1
    $actie = fopen($bestand, "w");
	$aantal = 1;
	fputs($actie, $aantal, 6);
	fclose($actie);
}  

// tekst weergeven

echo "You are visitor # <b>".$aantal."</b> since ".$sinds; 

?>