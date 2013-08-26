      <div class="jumbotron">
        <h1><?php print $this->view['survey_name']; ?></h1>
        <h2>Wie andere geantwortet haben</h2>
			<table class="table table-bordered">
			<?php
			foreach ($this->view['survey_result'] as $key=>$value) {
				$width = $key * 5;
				print "<tr><td>$value</td><td><div style='background-color:grey; width:{$width}px;'>$key %</div></td></tr>";	
			}
			?>
			</table>
      </div>