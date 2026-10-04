<?= view('templates/header', ['title' => 'POS Dashboard']); ?>

<div class="pos-card">
    <div class="pos-card-header">
        <h2 class="pos-card-title">Welcome to POS Terminal</h2>
        <span class="badge-role">System Online</span>
    </div>

    <p style="font-size: 1.05rem; line-height: 1.6; color: #555;">
        This is the main dashboard for the <strong>TFA2 CodeIgniter 4 POS Management System</strong>. Use the navigation menu above to manage customer accounts or view system user details.
    </p>

    <div style="display: flex; gap: 20px; margin-top: 25px;">
        <div style="flex: 1; background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #27ae60;">
            <h3 style="margin-top: 0; color: #2c3e50;">👥 Customers</h3>
            <p style="color: #666; font-size: 0.9rem;">View and manage registered customer records loaded dynamically from the MySQL database.</p>
            <a href="<?= site_url('customers'); ?>" style="display: inline-block; padding: 8px 14px; background: #27ae60; color: #fff; text-decoration: none; border-radius: 4px; font-weight: 600; font-size: 0.85rem;">Manage Customers →</a>
        </div>

        <div style="flex: 1; background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #2c3e50;">
            <h3 style="margin-top: 0; color: #2c3e50;">🔐 User Accounts</h3>
            <p style="color: #666; font-size: 0.9rem;">Inspect system user credentials, roles, and administrative access levels.</p>
            <a href="<?= site_url('users'); ?>" style="display: inline-block; padding: 8px 14px; background: #2c3e50; color: #fff; text-decoration: none; border-radius: 4px; font-weight: 600; font-size: 0.85rem;">Manage Users →</a>
        </div>
    </div>
</div>

<?= view('templates/footer'); ?>