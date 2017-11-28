<br><br>
<?php
$region=$_GET['region'];
?>
<form action='index.php?controleur=statistiques&action=statRegionVisiteur&region=<?php echo $region ?>' method='post'>
<label for="dateDebut">
    Rechercher les visiteurs ayant commencé à travailler entre le</label> <input type="date" id="date" name="dateDebut">
<label for="dateFin">
    et le
</label>
<input type="date" id="date" name="dateFin">
<input type="submit" value="rechercher">
</form>
