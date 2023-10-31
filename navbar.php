<?php include_once('config.php'); ?>

<div class="container">
	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
		<ul class="nav nav-pills">
			
			<li class="nav-item"><a href="index.html" class="nav-link active" aria-current="page">Home</a></li>
			
			<?php
				
				
				
				$selectdatabase = "SELECT * FROM questions";
				$show = (connect()->query($selectdatabase));
				$allrows = $show->fetchAll(PDO::FETCH_ASSOC);
				
				foreach ($allrows as $row) {
					?>
							 
					<li class="nav-item"><a href="questions.php?question=<?php echo $row['ID']; ?>" class="nav-link">Question <?php echo $row['ID']; ?></a></li>
					
					<?php
				}						
				?>
			
			
			
			
			<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
		</ul>
	</header>
</div>

<!-- 192.168.56.112 -->
