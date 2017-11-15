<h2>Listes des régions</h2>
<section>
	<table><tr><th>Région</th><th>Nombre de visiteurs</th><th>Nombre de délégués</th><th>Action</th></tr>
		<?php
			foreach($lesRegions as $Region)
			{
				$id = $Region->getCodeRegion();
				$nom = $Region->getNomRegion();
				?>
				<tr>
					<td><?php echo $nom; ?></td>
					<td class='action' width=15%>
						<a href='index.php?uc=Region&action=select&numreg=<?php echo $id; ?>' class="imageSelectionner" title="Selectionner la région">	</a>
					</td>
				</tr>
			<?php
			}
			foreach($Visit as $laVisit)
			{
				$i = 0;
				$croleVisit = $laVisit->getRoleTravailler();
				$regVisit = $laVisit->getCodeRegion();
				foreach($regVisit as $code)
				{
					$i++;
				}
				var_dump($regVisit);
			}
		?>
	</table>
</section>
