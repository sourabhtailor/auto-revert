<?php
// XSS test variation #923
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>