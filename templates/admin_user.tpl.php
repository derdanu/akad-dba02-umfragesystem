		<h1>Benutzer Adminstration</h1>
		<table class="table table-hover">
			<tr><th>Benutername</th><th>Passwort</th><th></th></tr>
  			<?php
			foreach ($this->view['users'] as $userid=>$pass) {
				print   "<tr><td>$userid</td>" .
						"<td><span onclick=\"$(this).html('$pass')\">******</span></td>" .
						"<td class='text-right'><button type='button' class='btn btn-success''>Passwort ändern</button>" .
						"&nbsp;<button type='button' class='btn btn-danger'>Löschen</button></td></tr>";	
			}
			?>
		</table>
