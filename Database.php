

<?php
 include 'PHP/INSERT_Forfatter.php';
 include 'PHP/INSERT_Artikkel.php';
 include 'PHP/INSERT_F_AV_A.php';
 ?>

</p>
<form method="POST">
 <input type="integer" name="idForfatter">
 Forfatter ID
 </p>
 <input type="text" name="Fornavn">
 Forfatter fornavn
 </p>
 <input type="text" name="Etternavn">
 Forfatter etternavn
</p>
 <input type="text" name="id">
 Artikkel id
 </p>
 <input type="text" name="title">
 Tittel for nettside
 </p>
 <input type="text" name="link">
 Link til nettsiden
 </p>
 <input type="text" name="id_subject">
 Subject
 </p>
 <input type="text" name="publish_date">
 Publish date
 </p>



 <input type="submit" name="leggtil" value="Legg til">
</form>
 </p>
</body>
 </html>