<?php
    $page_title = 'Home';
    $home = 'active';
    $facilities = '';
    $about = '';
    $contact = '';
    require_once ("../private/initialize.php");
    include (SHARED_PATH.'/header.php');
?>
<<<<<<< HEAD

<div id="content">
    <h1>Hello</h1>
</div>
=======
<main class="homepage">
  <div class="container mainscreen">
    <div class="row">
      <div class="introcontent col-md-8">
        <h1>BOOK ANY FACILITY WITH US</h1>
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
>>>>>>> 877ba9d16ada42fcc805f90e168fb436f0da7332

<?php include (SHARED_PATH.'/footer.php'); ?>
