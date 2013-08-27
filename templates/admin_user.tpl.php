		<h1>Benutzer Adminstration</h1>
		<table class="table table-hover">
			<tr><th>Benutername</th><th>Letzer Login</th><th></th></tr>
  			<?php
			foreach ($this->view['users'] as $userid=>$lastlogin) {
				print   "<tr><td>$userid</td>" .
						"<td>$lastlogin</td>" .
						"<td class='text-right'><button type='button' class='btn btn-success''>Passwort ändern</button>" .
						"&nbsp;<button type='button' class='btn btn-danger'>Löschen</button></td></tr>";	
			}
			?>
		</table>
		<button type="button" class="btn btn-success">Hinzufügen</button>
		
