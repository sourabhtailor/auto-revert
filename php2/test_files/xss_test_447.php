<?php
// XSS test variation #447
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>