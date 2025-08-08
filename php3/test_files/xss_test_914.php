<?php
// XSS test variation #914
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>