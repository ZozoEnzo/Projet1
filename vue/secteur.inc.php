<br/><br/>
<section>
	<!-- Affichage du tableau secteur avec un nom de secteur et le nombre de visiteurs par secteur -->
	<table class="listeLegere"><tr><th>Secteur</th><th>Nombre de visiteurs</th></tr>
		<?php
			for($inc=0; $inc<sizeof($lesStatsSecteurs); $inc++) {
                ?>
                    <tr>
                        <td><?php echo $lesStatsSecteurs[$inc][0]; ?></td>
                        <td><?php echo $lesStatsSecteurs[$inc][1]; ?></td>
                    </tr>
                <?php
            }
		?>
	</table>
</section>
<br/><br/>
