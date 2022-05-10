
<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Roster.css" rel="stylesheet" type="text/css">

<?php require 'partials/start_content.php' ?>

<?php require 'components/navbar.php' ?>

<div class="d-flex justify-content-center py-3">
    <a class="btn btn-primary" href="course?name=<?=$_GET["name"]?>&id=<?=$_GET["id"]?>">Back To Course Page</a>
</div>
<div class="content">
<div class="d-flex justify-content-evenly">
    <div class="roster d-flex flex-column w-25">
        <div class="d-flex flex-column">
            <h2>All Students</h2>
            <input type="text" class="px-2 py-2" placeholder="Search for students..." id="search" onkeyup="search(event)">
        </div>
            <form method="POST">
            <div id="all_students" class="d-flex flex-column">
                    <?php foreach($invitable_students as $student) : ?>
                        <?php require 'components/all_list.php' ?> 
                    <?php endforeach ?>
            </div>
            <div class="d-flex justify-content-star w-100 my-4">
                <button type="submit" class="btn btn-primary">Submit Changes</button>
            </div>
        </form>

    </div>

    <div class="invited w-25">
        <div class="d-flex flex-column">
                <h2>Invited Students</h2>
                <input type="text" class="px-2 py-2" placeholder="Search for students..." id="searchInvites" onkeyup="searchInvites(event)">
        </div>
        <div class="d-flex flex-column" id="invite_students">
            <?php foreach($invited_students as $student) : ?>
                <?php require 'components/inv_list.php' ?> 
            <?php endforeach ?>
        </div>
    </div>
</div>
<script src="public/js/search.js"></script>
<script src="public/js/flash.js"></script>

<?php require 'components/flash.php' ?>

<?php require 'partials/footer.php' ?>
