<?php ob_start(); ?>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0"><i class="bi bi-pencil-square"></i> แก้ไขกิจกรรม</h4>
        </div>
        <div class="card-body">
            <form action="index.php?controller=activities&action=update" method="post">
                <input type="hidden" name="id" value="<?= htmlspecialchars($data['id']) ?>">

                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label for="activity_name" class="form-label">ชื่อกิจกรรม</label>
                        <input type="text" name="activity_name" id="activity_name" class="form-control" 
                               value="<?= htmlspecialchars($data['activity_name']) ?>" required>
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="activity_date" class="form-label">วันที่</label>
                        <input type="date" name="activity_date" id="activity_date" class="form-control" 
                               value="<?= htmlspecialchars($data['activity_date']) ?>" required>
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="hours" class="form-label">ชั่วโมง</label>
                        <input type="number" name="hours" id="hours" class="form-control" 
                               value="<?= htmlspecialchars($data['hours']) ?>" min="1" required>
                    </div>
                </div>

                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> อัปเดต
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
