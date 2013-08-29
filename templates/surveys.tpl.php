      
      <div class="jumbotron">
        <h1>Bitte Umfrage ausw&auml;hlen</h1>
		<ul class="list-group">
			<?php foreach ($this->view['surveys'] as $arr) { ?>
				<li class="list-group-item"><a href="?controller=Survey&survey=<?php print $arr['ID'] ?>"><?php print $arr['Name'] ?></a></li>	
			<?php } ?>
		</ul>
      </div>