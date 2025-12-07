<?php
ob_start();
?>

<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
    <h2 class="mb-0">กิจกรรมทั้งหมด</h2>
    <a href="index.php?controller=activities&action=create" class="btn btn-success btn-lg">
        <i class="bi bi-plus-lg"></i> เพิ่มกิจกรรม
    </a>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="mb-3">
            <input type="text" id="search" class="form-control" placeholder="ค้นหากิจกรรม / นักศึกษา...">
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle text-center">
                <thead class="table-primary text-uppercase">
                    <tr>
                        <th>ลำดับ</th>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อนักศึกษา</th>
                        <th>ชื่อกิจกรรม</th>
                        <th>วันที่</th>
                        <th>ชั่วโมงจิตอาสา</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody id="activityTable">
                    <?php foreach($activities as $index => $act): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($act['student_id']) ?></td>
                        <td><?= htmlspecialchars($act['student_name']) ?></td>
                        <td><?= htmlspecialchars($act['activity_name']) ?></td>
                        <td><?= date('d M Y', strtotime($act['activity_date'])) ?></td>
                        <td>
                            <span class="badge bg-info text-dark"><?= $act['hours'] ?> ชั่วโมง</span>
                        </td>
                        <td>
                            <a href="index.php?controller=activities&action=edit&id=<?= $act['id'] ?>" class="btn btn-sm btn-outline-warning me-1" title="แก้ไข">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="index.php?controller=activities&action=delete&id=<?= $act['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('คุณแน่ใจว่าจะลบกิจกรรมนี้?')" title="ลบ">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
document.getElementById('search')?.addEventListener('input', function() {
    const query = this.value.toLowerCase();
    const rows = document.querySelectorAll('#activityTable tr');
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(query) ? '' : 'none';
    });
});
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';
?>
