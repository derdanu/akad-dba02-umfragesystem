      
      <div class="jumbotron">
        <h1>Bitte Umfrage ausw&auml;hlen</h1>
		<ul class="list-group">
			<?php 
			foreach ($this->view['surveys'] as $arr) {
				print "<li class='list-group-item'><a href='?controller=Survey&survey={$arr['ID']}''>{$arr['Name']}</a></li>";	
			}
			?>
		</ul>
      </div>