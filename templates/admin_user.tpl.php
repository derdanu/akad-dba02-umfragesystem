		<h1>Benutzer Adminstration</h1>
		<table class="table table-hover">
			<tr><th>Benutername</th><th>Letzer Login</th><th></th></tr>
  			<?php
			foreach ($this->view['users'] as $userid=>$lastlogin) {
				print   "<tr><td>$userid</td>" .
						"<td>$lastlogin</td>" .
						"<td class='text-right'><a href=\"?controller=Admin\User&action=Delete&user=$userid\" class='btn btn-danger'>Löschen</button></td></tr>";	
			}
			?>
		</table>
		<a data-toggle="modal" href="#addUserModal" class="btn btn-success">Hinzufügen</a>

	  <!-- Modal -->
	  <form class="form-user" method="post" action="?controller=Admin\User&action=Add">
	  
	  <div class="modal" id="addUserModal">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title">Neuen Benutzer hinzufügen</h4>
	        </div>
	        <div class="modal-body">
	          <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="Umfragename eingeben">
			  </div>
			  <div class="form-group">
			    <label for="pass">Passwort</label>
			    <input type="text" class="form-control" id="pass" name="pass" placeholder="Passwort eingeben">
			  </div>
	        </div>
	        <div class="modal-footer">
	          <a href="#" class="btn" data-dismiss="modal">Verwerfen</a>
        	  <button class="btn btn-primary" type="submit">Speichern</button>
	        </div>
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
	  
	  </form>