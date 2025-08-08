<?php
// XSS test variation #1242
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>