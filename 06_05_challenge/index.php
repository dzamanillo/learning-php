<?php
require_once 'src/variables.php';
?>
<!doctype html>
<html class="no-js" lang="">

<?php include 'templates/head.php'; ?>
<body>
	<div class="wrapper">
		<?php include 'templates/header.php'; ?>
		<main>
            <h2>Welcome!</h2>
            <p>Hello world! This is my PHP website!</p>
        </main>
	</div>
	<?php include 'templates/footer.php'; ?>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>