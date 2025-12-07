<?php
ob_start();
?>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="bi bi-plus-circle"></i> เพิ่มกิจกรรมใหม่</h4>
        </div>
        <div class="card-body">
            <form action="index.php?controller=activities&action=store" method="post">
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label for="student_id" class="form-label">นักศึกษา</label>
                        <select name="student_id" id="student_id" class="form-select" required>
                            <option value="">-- เลือกนักศึกษา --</option>
                            <?php foreach($students as $student): ?>
                                <option value="<?= $student['student_id'] ?>"><?= htmlspecialchars($student['student_name']) ?> (<?= htmlspecialchars($student['student_id']) ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="activity_name" class="form-label">ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" id="activity_name" name="activity_name" required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="activity_date" class="form-label">วันที่</label>
                        <input type="date" class="form-control" id="activity_date" name="activity_date" required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="hours" class="form-label">จำนวนชั่วโมงจิตอาสา</label>
                        <input type="number" class="form-control" id="hours" name="hours" min="1" required>
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-start gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> บันทึกกิจกรรม
                    </button>
                    <a href="index.php?controller=activities&action=index" class="btn btn-secondary">
                        <i class="bi bi-x-circle"></i> ยกเลิก
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';
?>
