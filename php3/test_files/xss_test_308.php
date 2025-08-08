<?php
// XSS test variation #308
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>