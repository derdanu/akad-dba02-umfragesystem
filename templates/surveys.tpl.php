      
      <div class="jumbotron">
        <h1>Bitte Umfrage ausw&auml;hlen</h1>
		<ul class="list-group">
			<?php 
			foreach ($this->view['surveys'] as $key=>$value) {
				print "<li class='list-group-item'><a href='?controller=Survey&survey=$key'>$value</a></li>";	
			}
			?>
		</ul>
      </div>