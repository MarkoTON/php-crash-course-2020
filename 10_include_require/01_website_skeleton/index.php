<?php

// 1. Generate html boilerplate code
// 2. Create <header> and <footer> html elements
// 3. Create about.php
// 4. Move header.php and footer.php in partials folder
// 5. Create variable $companyName which can be accessed in footer.php

// 7.
$companyName = 'TraversyMedia';
?>
<!-- 6. Rename header.php to  show Fatal error-->
<p>Ovde je rquire PHP ubecen za Header. Takodje ostatak fila se ne ucitava ako ovaj file nije ucitan</p>
<?php require "partials/header.php"; ?>
<!-- 7. Create weather.php in partials-->
<!-- 8. Rename weather.php to show warning-->
<p>Ovde je include PHP ubecen za weather</p>
<?php include "partials/weather.php" ?>
<h1>Welcome to my cool website</h1>
<p>Ovde je rquire PHP ubecen za footer</p>
<?php require "partials/footer.php"; ?>
