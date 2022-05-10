<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Roster.css" rel="stylesheet" type="text/css">

<?php require 'partials/start_content.php' ?>

<?php require 'components/navbar.php' ?>


<!-- $course_info->instructor_name -->


    <h1 class="text-center"><?php echo $course_info->name ?> - <?php echo $course_info->instructor_name ?></h1>

		<div class="flex-container py-4">
		  <div class="flex-child d-flex flex-column align-items-center w-100">
        <h3>All Students</h3>
        <input type="text" class="w-50 px-2 py-1" id="search" onkeyup="search(event)" placeholder="Search for students...">
		  </div>
		</div>
    <div class="d-flex w-100 justify-content-center">
        <div class="w-50 all_students">
            <form method="POST" class="d-flex flex-column">
            <ul class="list-group list-group-light" id="all_students">
                <?php foreach($current_students as $student) : ?>
                  <?php require 'components/list.php' ?>
                <?php endforeach ?>
                <?php if(auth()->type == 1) : ?>
                <?php endif?>
            </ul>
            <div class="d-flex w-100 justify-content-end py-3">
                  <button type="submit" class="submit btn-primary btn me-2">Remove Selected</button>
                  <?php if(auth()->type == 1) : ?>
                  <a class="btn btn-primary"href="course-edit?name=<?=$_GET["name"]?>&id=<?=$_GET["id"]?>">Add Students</a>
                <?php endif?> 
                </div>
            </form>

            </div>

      </div>

<script src="public/js/search.js"></script>

<script src="public/js/flash.js"></script>
<?php require 'components/flash.php' ?>

<?php require 'partials/footer.php' ?>
