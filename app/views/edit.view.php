
<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Roster.css" rel="stylesheet" type="text/css">




<?php require 'partials/start_content.php' ?>
<a href="course?name=<?=$_GET["name"]?>&id=<?=$_GET["id"]?>">Course</a>
<h1></h1>
		<div class="flex-container">
		  <div class="flex-child">
			<h2>All Students</h2>

                <input type="text" class="search">
                <form method="POST">

                    <div class="innerdiv">
                        <?php foreach($invitable_students as $student) : ?>
                            <li id="<?= $student->id ?>"><?=$student->first_name ?><input type="checkbox" value="<?=$student->id?>" name="students[]" class="addbutton"></input></li>
                        <?php endforeach ?>
                    </div>
                    <button type="submit" class="subbut">Submit Changes</button>

                </form>
		  </div>

		  
		  <div class="flex-child">
			<h2>Invited Students</h2>
            <input type="text" class="search">
            <div class="innerdiv">
                <?php foreach($invited_students as $student) : ?>
                    <li id="<?= $student->id ?>"><?=$student->first_name ?></li>
                <?php endforeach ?>
            </div>
		  </div> 
		</div>


<?php require 'partials/footer.php' ?>
