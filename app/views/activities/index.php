<?php
ob_start();
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">กิจกรรมทั้งหมด</h2>
    <a href="index.php?controller=activities&action=create" class="btn btn-success btn-lg">เพิ่มกิจกรรม</a>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover align-middle rounded shadow-sm">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>รหัสนักศึกษา</th>
                <th>ชื่อนักศึกษา</th>
                <th>ชื่อกิจกรรม</th>
                <th>วันที่</th>
                <th>ชั่วโมงจิตอาสา</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($activities as $index => $act): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $act['student_id'] ?></td>
                <td><?= $act['student_name'] ?></td>
                <td><?= $act['activity_name'] ?></td>
                <td><?= $act['activity_date'] ?></td>
                <td><?= $act['hours'] ?></td>
                <td>
                    <a href="index.php?controller=activities&action=edit&id=<?= $act['id'] ?>" class="btn btn-sm btn-warning">แก้ไข</a>
                    <a href="index.php?controller=activities&action=delete&id=<?= $act['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณแน่ใจว่าจะลบกิจกรรมนี้?')">ลบ</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';
?>
