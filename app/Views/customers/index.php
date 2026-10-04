<?= view('templates/header', ['title' => 'Customer Management']); ?>

<div class="pos-card">
    <div class="pos-card-header">
        <h2 class="pos-card-title">Customer Records</h2>
        <span class="badge-role">Active Database: tfa2_db</span>
    </div>

    <table class="pos-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($customers) && is_array($customers)): ?>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><strong>#<?= esc($customer['id']); ?></strong></td>
                        <td><?= esc($customer['name'] ?? $customer['customer_name'] ?? ''); ?></td>
                        <td><?= esc($customer['email'] ?? ''); ?></td>
                        <td><?= esc($customer['phone'] ?? ''); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align: center;">No customer records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= view('templates/footer'); ?>