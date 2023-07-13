<?php

$title = " Documentation";
$description = config("APP_NAME") . " is the best choise for a developer new to php. It is easy to grasp the " . config("APP_NAME") . " framwork and made by using the basic concepts of php.";
$app_author = config("APP_AUTHOR");

$body_class = "docs-page";

?>

<?php require_once __DIR__ . "/layouts/start.php"; ?>

<?php require_once __DIR__ . "/layouts/navbar-docs.php"; ?>

<div class="docs-wrapper">

	<?php require_once __DIR__ . "/layouts/sidebar.php"; ?>

	<div class="docs-content">
		<div class="container">

			<?php require_once __DIR__ . "/components/docs/" . $page . ".php"; ?>

			<?php require_once __DIR__ . "/layouts/footer.php"; ?>

		</div>
	</div>
</div><!--//docs-wrapper-->

<?php require_once __DIR__ . "/layouts/end.php"; ?>