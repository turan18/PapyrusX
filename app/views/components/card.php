<div class="d-flex d-flex-row flex-wrap px-2">
<?php foreach($courses as $course) : ?>  
<div class="card text-white bg-primary mb-3 ms-3 w-card px-2">
  <div class="card-header"><?= $course->start_time . "-" . $course->end_time ?></div>
  <div class="card-body">
    <h5 class="card-title">
      <a class="text-decoration-none text-white" href="/course?name=<?=$course->name?>&id=<?=$course->id?>">
      <?=$course->name ?>
    </a></h5>
    <p class="card-text"><?= $course->description ?></p>
  </div>
</div>
<?php endforeach; ?>
</div>