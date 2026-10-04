<?= view('templates/header', ['title' => 'User Management']); ?>

<div class="pos-card">
    <div class="pos-card-header">
        <h2 class="pos-card-title">System Users</h2>
        <span class="badge-role">Active Database: tfa2_db</span>
    </div>

    <table class="pos-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users) && is_array($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><strong>#<?= esc($user['id']); ?></strong></td>
                        <td><?= esc($user['username']); ?></td>
                        <td><?= esc($user['full_name']); ?></td>
                        <td><?= esc($user['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align: center;">No user records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= view('templates/footer'); ?>