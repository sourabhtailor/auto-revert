<?php
// XSS test variation #465
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>