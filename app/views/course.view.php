<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Roster.css" rel="stylesheet" type="text/css">

<?php require 'partials/start_content.php' ?>
<a href="course-edit?name=<?=$_GET["name"]?>&id=<?=$_GET["id"]?>">Edit</a>
<h1></h1>
		<div class="flex-container">
		  <div class="flex-child">
			<h2>All Students</h2>
            <input type="text" class="search">
            <div class="innerdiv">
            <form method="POST">
                <?php foreach($current_students as $student) : ?>
                    <li id="<?= $student->id ?>"><?=$student->first_name ?><input type="checkbox" value=<?=$student->id?> name="students[]" class="addbutton"></button></li>
                <?php endforeach ?>
                <button type="submit" class="submit">Submit Changes</button>
            </form>

            </div>
		  </div>
		</div>




<?php require 'partials/footer.php' ?>
