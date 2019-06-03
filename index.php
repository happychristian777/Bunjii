<?php
    $page_title = 'Home';
    $home = 'active';
    $facilities = '';
    $about = '';
    $contact = '';
    require_once ("initialize.php");
    include ('header.php');
?>

<main class="homepage">
  <div class="container mainscreen">
    <div class="row">
      <div class="introcontent col-md-8">
        <h1>BOOK ANY FACILITY WITH US</h1>
        <?php  if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
            echo "<h2 class='text-primary'>Welcome $name</h2>"; }?>
        <p><italic>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend a mauris ut tempus. Etiam lacinia lobortis tristique. Quisque dapibus sapien quis nunc consequat convallis.
        </italic></p>
      </div>
      <div class="container col-md-4">
        <form class="mainform">
          <input class="form-control" type="text" placeholder="Sport"/>
          <input class="form-control" type="text" placeholder="Location" />
          <input class="btn btn-primary" type="Submit" style="position: absolute; left: 40%"/>
        </form>
      </div>
    </div>
  </div>
</main>
<section>
  <div class="container">
    <h1>FACILITIES</h1>
    <hr class="bg-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
  </div>
</section>


<?php include ('footer.php'); ?>
