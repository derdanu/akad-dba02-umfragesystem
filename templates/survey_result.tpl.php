      <div class="jumbotron">
        <h1><?php print $this->view['survey_name']; ?></h1>
        <h2>Wie andere geantwortet haben</h2>
			<table class="table table-bordered">
			<?php
			foreach ($this->view['survey_result'] as $key=>$value) {
				print "<tr><td>$value</td><td>$key %</td></tr>";	
			}
			?>
			</table>
      </div>