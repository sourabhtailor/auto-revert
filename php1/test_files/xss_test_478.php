<?php
// XSS test variation #478
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>