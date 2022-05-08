
<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Roster.css" rel="stylesheet" type="text/css">

<?php require 'partials/start_content.php' ?>

<?php require 'components/navbar.php' ?>

<a href="course?name=<?=$_GET["name"]?>&id=<?=$_GET["id"]?>">Course</a>
<h1></h1>
		<div class="flex-container">
		  <div class="flex-child">
			<h2>All Students</h2>

                <input type="text" id="search" onkeyup="search(event)">
                <form method="POST">
                    <div class="innerdiv">

                    <div id="all_students">
                        <?php foreach($invitable_students as $student) : ?>
                            <li class="students" id="<?= $student->id ?>"><?=$student->first_name ?><input type="checkbox" value="<?=$student->id?>" name="students[]" class="addbutton"></input></li>
                        <?php endforeach ?>
                        </div>
                    </div>
                    <button type="submit" class="subbut">Submit Changes</button>

                </form>
		  </div>

		  
		  <div class="flex-child">
			<h2>Invited Students</h2>
            <input type="text" id="searchInvites" onkeyup="searchInvites(event)">
            <div class="innerdiv">
                <div id="invite_students">
                <?php foreach($invited_students as $student) : ?>
                    <li class="inv_students" id="<?= $student->id ?>"><?=$student->first_name ?></li>
                <?php endforeach ?>
                </div>
            </div>
		  </div> 
		</div>

<script src="public/js/search.js"></script>
<script src="public/js/flash.js"></script>

<?php require 'components/flash.php' ?>

<?php require 'partials/footer.php' ?>
