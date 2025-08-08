<?php
// XSS test variation #637
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>