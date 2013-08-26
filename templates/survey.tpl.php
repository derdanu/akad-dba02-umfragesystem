      
      <div class="jumbotron">
        <h1><?php print $this->view['survey_name']; ?></h1>
			<form class="form-signin" method="post" action="?controller=Survey&action=Save&survey=<?php print $this->view['survey_id']; ?>">
		
			<?php 
			foreach ($this->view['survey_items'] as $key=>$value) {
				print 	"<div class='checkbox'>" .
						"<label>" .
						"<input type='checkbox' value='$key' name='items[]'>$value" .
						"</label>" .
						"</div>";	
			}
			?>
			<button type="submit" class="btn btn-primary">Absenden</button>
			
			</form>
      </div>