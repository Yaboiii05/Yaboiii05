<?php
 // Tilkoblingsinformasjon
 // Localhost = databasen ligger på lokal pc
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "maindatabase";
 $port = "8889";
 
 // Opprette en kobling

 $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);


//Norsk: Inkluderer bokstaver som Æ, Ø Å
$kobling->set_charset("utf8");


$sql = "SELECT F.idForfatter, F.Fornavn, F.Etternavn, A.id, A.title, A.link, A.id_subject, A.publish_date
FROM maindatabase.Forfatter F, maindatabase.Artikkel A, maindatabase.Forfatter_has_Artikkel FA
WHERE F.idForfatter=FA.Forfatter_idForfatter
AND A.id=FA.Artikkel_id";


$resultat = $kobling->query($sql);

// Visning av tabell
echo "<table>"; // Starter tabellen
echo "<table border=\"1\" cellpadding=\"2\">";
echo "<tr>"; // Lager en rad med overskrifter
 echo "<th>idForfatter</th>";
 echo "<th>Fornavn</th>";
 echo "<th>Etternavn</th>";
 echo "<th>id</th>";
 echo "<th>title</th>";
 echo "<th>link</th>";
 echo "<th>id_subject</th>";
 echo "<th>publish_date</th>";

//funksjon henter resultat fra databasen
echo "</tr>";
while($rad = $resultat->fetch_assoc()) {
 $idForfatter = $rad["idForfatter"];
 $Fornavn = $rad["Fornavn"];
 $Etternavn = $rad["Etternavn"];
 $id = $rad["id"];
 $title = $rad["title"];
 $link = $rad["link"];
 $id_subject = $rad["id_subject"];
 $publish_date = $rad["publish_date"];

 echo "<tr>";
 echo "<td style=\"width:100px\">$idForfatter</td>";
 echo "<td style=\"width:100px\">$Fornavn</td>";
 echo "<td style=\"width:100px\">$Etternavn</td>";
 echo "<td style=\"width:100px\">$id</td>";
 echo "<td style=\"width:100px\">$title</td>";
 echo "<td style=\"width:100px\">$link</td>";
 echo "<td style=\"width:100px\">$id_subject</td>";
 echo "<td style=\"width:100px\">$publish_date</td>";

 echo "</tr>";
}
echo "</table>"; // Avslutter tabellen
?>