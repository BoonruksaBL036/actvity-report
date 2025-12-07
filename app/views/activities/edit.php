<?php ob_start(); ?>

<h2>แก้ไขกิจกรรม</h2>

<form action="index.php?controller=activities&action=update" method="post">

    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <div class="mb-3">
        <label class="form-label">ชื่อกิจกรรม</label>
        <input type="text" name="activity_name" class="form-control" value="<?= $data['activity_name'] ?>">
    </div>

    <div class="mb-3">
        <label>วันที่</label>
        <input type="date" name="activity_date" class="form-control" value="<?= $data['activity_date'] ?>">
    </div>

    <div class="mb-3">
        <label>ชั่วโมง</label>
        <input type="number" name="hours" class="form-control" value="<?= $data['hours'] ?>">
    </div>

    <button class="btn btn-primary">อัปเดต</button>

</form>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';
?>
