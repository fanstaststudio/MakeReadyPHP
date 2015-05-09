<?php include('lock.php'); ?>

<?php 
include("include/header.php");
include("css/admin.php"); 
?>
	
<div class="content">
<div class="panel panel-default">
	
<div class="panel-heading">Admins</div>
	
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Fornavn </th>
<th>Efternavn</th>
<th>Brugernavn</th>
</tr>
</thead>
<tbody>
	
<?php
	//vælger tabellen
	$resultat = $mysql->query("SELECT * FROM Admin ORDER BY id_admin asc") or die ($mysql->error);

	//Bruger fetch_object
	if($resultat) {	
	while($row = $resultat->fetch_object()) {
	$id_admin = $row->id_admin;
	$Username = $row->Username;
	$First_name = $row->First_name;
	$Last_name = $row->Last_name;
	$Harshed_Passcode = $row->Harshed_Passcode;
	echo "<tr><td>$id_admin</td><td>$First_name</td><td>$Last_name</td><td>$Username</td></tr>";
	}}
?>
	
</tbody>
</table>
</div>
</div>

<?php include("include/footer.php"); ?>