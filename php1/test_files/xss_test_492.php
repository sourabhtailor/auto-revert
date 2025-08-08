<?php
// XSS test variation #492
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>