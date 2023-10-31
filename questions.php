 <?php 
include_once('config.php');
$ID = $_GET['question'];
$selectdatabase = "SELECT * FROM questions";
$show = (connect()->query($selectdatabase));
$allrows = $show->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Question <?php echo $ID ?></title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<?php
        include_once('navbar.php');
        foreach ($allrows as $row) {
            if ($row['ID'] == $ID) {
                ?>
                <div class="container-fluid">
                    <h2>
                        <tr><td><?php echo $row['Question']; ?></td></tr>
                    </h2>
					<!-- Descriptions -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="One">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Description
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <tr><td><?php echo $row['Description']; ?></td></tr>
                                </div>
                            </div>
                        </div>
                        <!-- Answers. --> 
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="Two">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Answer
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <tr><td><?php echo $row['Answer']; ?></td></tr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
	</body>
</html>