      
      <div class="jumbotron">
		<form role="form" method="post" action="?controller=Survey&action=Save&survey=<?php print $this->view['survey_id']; ?>">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title"><?php print $this->view['survey_name']; ?></h3>
			</div>
			<div class="panel-body">
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
			</div>
		</div>
		</form>
      </div>