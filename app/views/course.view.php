<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Roster.css" rel="stylesheet" type="text/css">

<?php require 'partials/start_content.php' ?>

<?php require 'components/navbar.php' ?>



<?php if(auth()->type == 1) : ?>
  <a href="course-edit?name=<?=$_GET["name"]?>&id=<?=$_GET["id"]?>">Edit</a>
<?php endif?>

		<div class="flex-container">
		  <div class="flex-child">
			<h2>All Students</h2>
            <input type="text" id="search" onkeyup="search(event)">
            <div class="innerdiv">
            <form method="POST">
              <div id="all_students">
                <?php foreach($current_students as $student) : ?>
                    <li class="students" id="<?= $student->id ?>"><?=$student->first_name ?>
                    <?php if(auth()->type == 1) : ?>

                    <input type="checkbox" value=<?=$student->id?> name="students[]" class="addbutton" />
                    <?php endif?>

                  </li>
                    </div>
                <?php endforeach ?>
                <?php if(auth()->type == 1) : ?>
                 <button type="submit" class="submit">Submit Changes</button>
                <?php endif?>
            </form>

            </div>
		  </div>
		</div>

<script src="public/js/search.js"></script>

<script src="public/js/flash.js"></script>
<?php require 'components/flash.php' ?>

<?php require 'partials/footer.php' ?>
