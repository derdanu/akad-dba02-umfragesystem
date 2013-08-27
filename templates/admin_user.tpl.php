		<h1>Benutzer Adminstration</h1>
		<table class="table table-hover">
			<tr><th>Benutername</th><th>Letzer Login</th><th></th></tr>
  			<?php
			foreach ($this->view['users'] as $userid=>$lastlogin) {
				print   "<tr><td>$userid</td>" .
						"<td>$lastlogin</td>" .
						"<td class='text-right'><a data-toggle='modal' href='#changePassModal' class='btn btn-success'>Passwort ändern</a>" .
						"&nbsp;<button type='button' class='btn btn-danger'>Löschen</button></td></tr>";	
			}
			?>
		</table>
		<a data-toggle="modal" href="#addUserModal" class="btn btn-success">Hinzufügen</a>

	  <!-- Modal -->
	  <div class="modal" id="addUserModal">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title">Neuen Benutzer hinzufügen</h4>
	        </div>
	        <div class="modal-body">
	          ...
	        </div>
	        <div class="modal-footer">
	          <a href="#" class="btn" data-dismiss="modal">Verwerfen</a>
	          <a href="#" class="btn btn-primary">Speichern</a>
	        </div>
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
	  
	  <!-- Modal -->
	  <div class="modal" id="changePassModal">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title">Passwort ändern</h4>
	        </div>
	        <div class="modal-body">
	          ...
	        </div>
	        <div class="modal-footer">
	          <a href="#" class="btn" data-dismiss="modal">Verwerfen</a>
	          <a href="#" class="btn btn-primary">Speichern</a>
	        </div>
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->