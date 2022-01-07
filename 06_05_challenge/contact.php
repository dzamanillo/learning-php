<?php
require_once 'src/variables.php';
?>
<!doctype html>
<html class="no-js" lang="">

<?php include 'templates/head.php'; ?>
<?php include 'templates/header.php'; ?>

<main>
    <h2>Contact <?php echo $author; ?></h2>
    <strong>Phone: </strong><span>555-555-5555</span>
    <strong>Email: </strong><span>email@example.com</span>
    <strong>Website: </strong><span><a href="#">Click Here</a></span>

</main>

<?php include 'templates/footer.php'; ?>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</html>