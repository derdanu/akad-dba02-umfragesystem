      <div class="jumbotron">
        <div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title"><?php print $this->view['survey_name']; ?></h3>
			</div>
			<table class="table table-bordered">
			<?php
			foreach ($this->view['survey_result'] as $key=>$value) {
				$width = $key * 5;
				print "<tr><td>$value</td><td><div style='background-color:grey; width:{$width}px; padding-left:10px;'>$key %</div></td></tr>";	
			}
			?>
			</table>
			</div>
		</div>
      </div>