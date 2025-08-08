<?php
// XSS test variation #557
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>