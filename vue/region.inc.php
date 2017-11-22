<section>
	<table>
		<thead>
			<th>Région</th>
			<th>Nombre de visiteurs</th>
			<th>Nombre de délégués</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php
			$i = 0;
			foreach($lesRegions as $Region){ ?>
				<tr>
					<td><?php echo $Region->getNomRegion(); ?></td>
					<td><?php echo Travailler::getVisiteurRegionById($Region->getCodeRegion()); ?></td>
					<td><?php echo Travailler::getDeleguerRegionById($Region->getCodeRegion()); ?></td>
					<td><a href="index.php?controleur=statistiques&action=statRegionVisiteur&region=<?php echo $Region->getNomRegion(); ?>">Afficher les visiteurs de la région</a></td>
				</tr>
			<?php
				$i++;
			}
			?>
		</tbody>
	</table>
</section>






































