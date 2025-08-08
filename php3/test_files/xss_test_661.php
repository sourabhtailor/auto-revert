<?php
// XSS test variation #661
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>