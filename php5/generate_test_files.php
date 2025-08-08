<?php
// Directory to store generated files
$testDir = __DIR__ . '/test_files';

if (!is_dir($testDir)) {
    mkdir($testDir, 0755, true);
}

// Templates of vulnerabilities with variations
$templates = [
    'xss' => <<<PHP
<?php
// XSS test variation #{n}
\$input = \$_GET['input'] ?? '';
echo "<div>User input: {\$input}</div>";
?>
PHP,

    'sqli' => <<<PHP
<?php
// SQLi test variation #{n}
\$conn = new mysqli("localhost", "root", "", "test_db");
\$user = \$_GET['user'] ?? '';
\$sql = "SELECT * FROM accounts WHERE username = '\$user'";
\$conn->query(\$sql);
?>
PHP,

    'lfi' => <<<PHP
<?php
// LFI test variation #{n}
\$page = \$_GET['page'] ?? 'home.php';
include(\$page);
?>
PHP,

    'rce' => <<<PHP
<?php
// RCE test variation #{n}
\$cmd = \$_GET['cmd'] ?? 'ls';
echo shell_exec(\$cmd);
?>
PHP,

    'csrf' => <<<PHP
<?php
// CSRF test variation #{n}
if (\$_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Changed password for user!";
}
?>
<form method="POST">
    <input type="hidden" name="password" value="newpass123">
    <input type="submit" value="Submit">
</form>
PHP,

    'upload' => <<<PHP
<?php
// Upload test variation #{n}
if (\$_SERVER['REQUEST_METHOD'] === 'POST' && isset(\$_FILES['file'])) {
    move_uploaded_file(\$_FILES['file']['tmp_name'], 'uploads/' . basename(\$_FILES['file']['name']));
    echo "File uploaded!";
} else {
    echo '<form method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" value="Upload">
          </form>';
}
?>
PHP,

    'cmd_inject' => <<<PHP
<?php
// Command Injection test variation #{n}
\$user = \$_GET['user'] ?? 'guest';
system("echo Welcome \$user");
?>
PHP,

    'eval' => <<<PHP
<?php
// Eval injection test variation #{n}
\$code = \$_GET['code'] ?? 'echo "test";';
eval(\$code);
?>
PHP,
];

// Number of files per vulnerability type
$filesPerType = 30;
$count = 20;

foreach ($templates as $type => $template) {
    for ($i = 1; $i <= $filesPerType; $i++) {
        $filename = "{$type}_test_{$i}.php";
        $content = str_replace('{n}', $i, $template);
        file_put_contents($testDir . '/' . $filename, $content);
        echo "Created: $filename\n";
        $count++;
    }
}

echo "\nTotal files created: " . ($count - 1) . "\n";
echo "All test files are in: $testDir\n";
?>
