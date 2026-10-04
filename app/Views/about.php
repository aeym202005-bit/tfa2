<?= view('templates/header', ['title' => 'About Project']); ?>

<div class="pos-card">
    <div class="pos-card-header">
        <h2 class="pos-card-title">About This Application</h2>
        <span class="badge-role">Academic Project — TFA2</span>
    </div>

    <div style="line-height: 1.7; color: #444;">
        <p>
            This Point of Sale (POS) administrative interface was developed as part of the <strong>TFA2 Assessment</strong> for Web System Technologies.
        </p>

        <h3 style="color: #2c3e50; margin-top: 20px;">Technical Stack</h3>
        <ul style="padding-left: 20px;">
            <li><strong>Framework:</strong> CodeIgniter 4 (PHP)</li>
            <li><strong>Database:</strong> MySQL / MariaDB (`tfa2_db`)</li>
            <li><strong>Architecture:</strong> Model-View-Controller (MVC)</li>
            <li><strong>Environment:</strong> macOS MAMP / Local Development Server</li>
        </ul>

        <h3 style="color: #2c3e50; margin-top: 20px;">Key Features</h3>
        <ul style="padding-left: 20px;">
            <li>Dynamic database retrieval via CodeIgniter Models (Query Builder)</li>
            <li>Shared UI header and navigation layout with active tab highlighting</li>
            <li>Strict schema alignment for <code>customers</code> and <code>users</code> tables</li>
        </ul>
    </div>
</div>

<?= view('templates/footer'); ?>