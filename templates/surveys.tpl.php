      
      <div class="jumbotron">
        <h1>Bitte Umfrage auswählen</h1>
		<ul>
			<?php 
			foreach ($this->view['surveys'] as $key=>$value) {
				print "<li><a href='?controller=Survey&survey=$key'>$value</a></li>";	
			}
			?>
		</ul>
      </div>