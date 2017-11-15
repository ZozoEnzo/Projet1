<h2>Listes des secteurs</h2>
<section>
	<table><tr><th>Secteur</th><th>Nombre de visiteurs</th></tr>
		<?php
			for($inc=0; $inc<sizeof($lesStatsSecteurs); $inc++)
            {
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
