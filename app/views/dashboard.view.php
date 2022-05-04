<?php require 'partials/session.php' ?>
<?php require 'partials/head.php' ?>
<link href="public/css/Home.css" rel="stylesheet" type="text/css">
<?php require 'partials/start_content.php' ?>

<h1>Hello <?= auth()->first_name ?>! </h1>

<?php 

var_dump(auth())

?>
<div>
    <a type="submit" href="create-class" class="btn btn-primary btn-block mb-4">Create a Class</a>
</div>  



<?php require 'partials/footer.php' ?>
