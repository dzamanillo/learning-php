<?php
require_once 'src/variables.php';
?>
<!doctype html>
<html class="no-js" lang="">

<?php include 'templates/head.php'; ?>
<?php include 'templates/header.php'; ?>

<main>
    <h2>About <?php echo $author; ?></h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam praesentium molestiae sequi facere, libero perferendis dolorum ullam. Alias deserunt nesciunt neque molestiae mollitia veniam delectus magni, rem ducimus vel quam tempora est libero provident magnam. Neque corporis, ipsam cum, nulla totam atque dolor beatae blanditiis quidem illo ut voluptate perspiciatis.
    </p>
</main>

<?php include 'templates/footer.php'; ?>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</html>