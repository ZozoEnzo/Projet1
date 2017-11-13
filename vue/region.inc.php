				<h2>Listes des régions</h2>
				<a class="btn" href='index.php?uc=Region&action=unique'>Séléctionner cette région</a>
				<section>
					<table><tr><th>Code Région</th><th>Code Section</th><th>Nom Région</th><th>Action</th></tr>
						<?php
							foreach($lesRegions as $Region)
							{
								$id = $Region->getCode();
								$nom = $Region->getNom();
								$sec = $Region->getCodeSec();
								?>
								<tr>
									<td width=5%><?php echo $id; ?></td><td><?php echo $nom; ?></td><td><?php echo $sec; ?></td>
									<td class='action' width=15%>
										<a href='index.php?uc=Region&action=select&numreg=<?php echo $id; ?>' class="imageSelectionner" title="Selectionner la région">	</a>
									</td>
								</tr>
							<?php
							}
						?>
					</table>
				</section>
