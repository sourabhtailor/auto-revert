<?php
// XSS test variation #508
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>