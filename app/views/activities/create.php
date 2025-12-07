<?php
ob_start();
?>

<h2>เพิ่มกิจกรรมใหม่</h2>

<form action="index.php?controller=activities&action=store" method="post" class="mt-3">
    <div class="mb-3">
        <label for="student_id" class="form-label">นักศึกษา</label>
        <select name="student_id" id="student_id" class="form-select" required>
            <option value="">-- เลือกนักศึกษา --</option>
            <?php foreach($students as $student): ?>
                <option value="<?= $student['student_id'] ?>"><?= $student['student_name'] ?> (<?= $student['student_id'] ?>)</option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="activity_name" class="form-label">ชื่อกิจกรรม</label>
        <input type="text" class="form-control" id="activity_name" name="activity_name" required>
    </div>

    <div class="mb-3">
        <label for="activity_date" class="form-label">วันที่</label>
        <input type="date" class="form-control" id="activity_date" name="activity_date" required>
    </div>

    <div class="mb-3">
        <label for="hours" class="form-label">จำนวนชั่วโมงจิตอาสา</label>
        <input type="number" class="form-control" id="hours" name="hours" min="1" required>
    </div>

    <button type="submit" class="btn btn-primary">บันทึกกิจกรรม</button>
    <a href="index.php?controller=activities&action=index" class="btn btn-secondary">ยกเลิก</a>
</form>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';
?>
