		<h1>Umfragen Adminstration</h1>
		<table class="table table-hover">
			<tr><th>ID</th><th>Umfrage</th><th></th></tr>
  			<?php
			foreach ($this->view['surveys'] as $key=>$value) {
				print   "<tr><td>$key</td>" .
						"<td>$value</td>" .
						"<td class='text-right'><button type='button' class='btn btn-danger'>Löschen</button></td></tr>";	
			}
			?>
		</table>
		<button type="button" class="btn btn-success">Hinzufügen</button>