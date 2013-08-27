      <div class="jumbotron">
        <div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title"><?php print $this->view['survey_name']; ?></h3>
			</div>
			<table class="table table-bordered table-survey">
			<?php
			foreach ($this->view['survey_result'] as $key=>$value) {
				$percent = round($key / $this->view['survey_cnt'] * 100);
				print   "<tr><td>$value</td>" .
						"<td>" .
						"<div style='background-color:#428BCA; width:{$percent}%; padding-left:10px; border-radius: 18px;'>$key ($percent %)</div>" .
						"</td>" .
						"</tr>";	
			}
			?>
			
			</table>
			</div>
		</div>
      </div>