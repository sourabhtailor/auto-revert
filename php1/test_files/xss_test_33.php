<?php
// XSS test variation #33
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>