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
	  <form class="form-survey" method="post" action="?controller=Admin\Survey&action=Add">
	  
	  <div class="modal" id="addSurveyModal">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title">Neue Umfrage hinzufügen</h4>
	        </div>
	        <div class="modal-body">
	       	 <div class="form-group">
			    <label for="name">Umfragename</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="Umfragename eingeben">
			  </div>
	    
	       	 <div class="form-group">
			    <label for="answer">Antwort</label>
			    <input type="text" class="form-control" id="answer" name="answer[]" placeholder="Antwort eingeben">
			  </div>
		  
	        </div>	  

			<div style="padding: 20px;">
				<a class="btn btn-default" onClick="newAnswer()">Weitere Antwort hinzufügen</a>
			</div>  		  
	                  
	        <div class="modal-footer">
	          <a href="#" class="btn" data-dismiss="modal">Verwerfen</a>
        	  <button class="btn btn-primary" type="submit">Speichern</button>
	        </div>
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
	  </form>
	  
	  <script>
		  function newAnswer() {
		  	
		  		$('.modal-body').append('<div class="form-group"><input type="text" class="form-control" name="answer[]" placeholder="Antwort eingeben""></div>');
		  
		  }
	  </script>