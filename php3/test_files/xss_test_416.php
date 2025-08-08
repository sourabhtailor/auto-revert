<?php
// XSS test variation #416
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>