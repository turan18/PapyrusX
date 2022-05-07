<?php require 'partials/head.php' ?>
<link href="public/css/Home.css" rel="stylesheet" type="text/css">
<?php require 'partials/start_content.php' ?>

<h1>Hello <?= auth()->last_name ?>! </h1>



<?php foreach($courses as $course) : ?>
    
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header"><?= $course->start_time . "-" . $course->end_time ?></div>
  <div class="card-body">
    <h5 class="card-title">
      <a href="course?name=<?=$course->name?>&id=<?=$course->id?>">
      <?=$course->name ?>
    </a></h5>
    <p class="card-text"><?= $course->description ?></p>
  </div>
</div>
<?php endforeach; ?>

<div>
    <a type="submit" href="create-class" class="btn btn-primary btn-block mb-4">Create a Class</a>
</div>  



<?php require 'partials/footer.php' ?>
