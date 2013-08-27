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
		<a data-toggle="modal" href="#addSurveyModal" class="btn btn-success">Hinzufügen</a>

	  <!-- Modal -->
	  <div class="modal" id="addSurveyModal">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title">Neue Umfrage hinzufügen</h4>
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