<h2>Listes des régions</h2>
<section>
	<table><tr><th>Région</th><th>Nombre de visiteurs</th><th>Nombre de délégués</th><th>Action</th></tr>
		<?php
			foreach($lesRegions as $Region)
			{
				$id = $Region->getCode();
				$nom = $Region->getNom();
				?>
				<tr>
					<td><?php echo $nom; ?></td>
					<td class='action' width=15%>
						<a href='index.php?uc=Region&action=select&numreg=<?php echo $id; ?>' class="imageSelectionner" title="Selectionner la région">	</a>
					</td>
				</tr>
			<?php
			}
		?>
	</table>
</section>
