<section>
	<table>
			<!--Affichage du tableau avec les regions le nombre de visiteurs, le nombre délégué et les actions possible-->
			<th>Région</th>
			<th>Nombre de visiteurs</th>
			<th>Nombre de délégués</th>
			<th>Action</th>
			<?php
			$i = 0;
			foreach($lesRegions as $Region){ ?>
				<tr>
					<td><?php echo $Region->getNomRegion(); ?></td> <!--Affichage des noms de regions-->
					<td><?php echo Travailler::getVisiteurRegionById($Region->getCodeRegion()); ?></td> <!--Affichage du nombre de visiteur par région-->
					<td><?php echo Travailler::getDeleguerRegionById($Region->getCodeRegion()); ?></td> <!--Affichage du nombre de délégué par région-->
					<td><a href="index.php?controleur=statistiques&action=statRegionVisiteur&region=<?php echo $Region->getCodeRegion(); ?>">Afficher les visiteurs de la région</a></td> <!--Le lien se trouvant dans l'action pour afficher les visiteurs d'une région-->
				</tr>
			<?php
				$i++;
			}
			?>
	</table>
</section>






































