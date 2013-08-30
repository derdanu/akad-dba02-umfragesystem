      <div class="jumbotron">
        <div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title"><?php print $this->view['survey_name']; ?></h3>
			</div>
			<table class="table table-bordered table-survey">
			<?php
			foreach ($this->view['survey_result'] as $arr) {
			
				if ($this->view['survey_cnt'] > 0) {
					$percent = round($arr['cnt'] / $this->view['survey_cnt'] * 100);	
				} else {
					$percent = 0;
				}
			?>	
				<tr><td><?php print $arr['Name']; ?></td><td>
				
				<?php if ($arr['cnt'] > 0) { ?>
					<div style="background-color:#428BCA; width:<?php print $percent; ?>%; padding-left:10px; border-radius: 18px;"><?php print $arr['cnt']; ?> <small>(<?php print $percent; ?>%)</small></div>
				<?php } else { ?>
					<div>bisher keine Stimmen</div>
				<?php }	?>				
				
				</td></tr>	
			
			<?php }	?>
			
			</table>
			</div>
		</div>
      </div>