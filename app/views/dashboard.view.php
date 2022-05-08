<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Home.css" rel="stylesheet" type="text/css">
<?php require 'partials/start_content.php' ?>

<?php require 'components/navbar.php' ?>


<h3 class="text-center mt-2"><?= auth()->type == 1 ? "Professor " : ""?><?= auth()->first_name . " " . auth()->last_name ?> </h3>


<div> 
  <h2 class="px-4">Courses</h2>
  <hr class="mx-4 bg-danger border-3 border-top border-black">
  <?php require 'components/card.php' ?>
</div>


<?php if(auth()->type == 0 && count($invitations) > 0) : ?>
  <h2 class="px-4">Active Invitations</h2>
  <div class="invitations d-flex flex-column flex-wrap px-4"> 
    <?php foreach($invitations as $invitation) : ?>
      <form method="POST" action="invitation/accept">
      <div class="toast show fade <?=$invitation->course_id?> <?=$invitation->instructor_id ?>" id="basic-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-stacking="true" data-mdb-autohide="false">
        <div class="toast-header .bg-dark">
          <strong class="me-auto"><?= $invitation->course_name ?></strong>
          <small><?= $invitation->instructor_name ?></small>
          <button type="button" class="btn-close" data-mdb-dismiss="toast" aria-label="Close" onclick="denyInvitation(event)"></button>
        </div>
        <div class="toast-body"><?= $invitation->course_description ?></div>
        <div class="d-flex justify-content-end">
        <input type="hidden" value="<?= $invitation->instructor_id?>" name="instructor_id">
        <input type="hidden" value="<?= $invitation->course_id?>" name="course_id">
        <button type="submit" class="btn btn-sm btn-primary btn-rounded mb-2 me-1">Join</button>
        </div>
      </div>
      </form>
    
    <?php endforeach ?>
    
  </div>  
  

<?php endif ?>


<script src="public/js/flash.js"></script>
<script src="public/js/invitation.js"></script>

<?php require 'components/flash.php' ?>

<?php require 'partials/footer.php' ?>
