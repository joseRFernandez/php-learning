<?php

if (isset($_POST['submit'])) {
  if(empty($_POST['email'])) {
    echo 'What the fuck bro --- enter an email';
  }
}

?>

<!DOCTYPE html>
<?php include('templates/header.php'); ?>

<section class="container grey-text">
  <h2 class="grey-text center">Add a Pizza</h2>
  <form class="white" action="add.php" method="POST">
    <label>Your Email:</label>
    <input type="text" name="email"><input>
    <label>Pizza Title:</label>
    <input type="text" name="title"><input>
    <label>Ingedients (comma-seperated):</label>
    <input type="text" name="ingredients"><input>
    <div class="center">
      <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
      </input>
    </div>
  </form>
</section>

<?php include('templates/footer.php'); ?>
