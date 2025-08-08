<?php
// XSS test variation #399
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>