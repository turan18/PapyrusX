<li class="list-group-item d-flex justify-content-between align-items-center students" id="<?= $student->id ?>">
    <div>
      <div class="fw-bold"><?= $student->first_name . " " . $student->last_name ?></div>
      <div class="text-muted"><?= $student->email ?></div>
    </div>    
    <input type="checkbox" class="btn-check btn-sm" id="btn-check-<?=$student->id ?>"autocomplete="off" value=<?=$student->id?>  name="students[]" />
    <label class="btn btn-primary" for="btn-check-<?=$student->id ?>">Invite</label>
</li>