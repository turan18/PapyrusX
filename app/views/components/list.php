<li class="list-group-item d-flex justify-content-between align-items-center students">
    <div>
      <div class="fw-bold"><?= $student->first_name . " " . $student->last_name ?></div>
      <div class="text-muted"><?= $student->email ?></div>
    </div>
    <?php if(auth()->type == 1) : ?>
        <input type="checkbox" class="btn-check" id="btn-check-<?=$student->id ?>" autocomplete="off" value=<?=$student->id?>  name="students[]" />
        <label class="btn btn-danger" for="btn-check-<?=$student->id ?>">Remove Student</label>
    <?php endif?>
  </li>