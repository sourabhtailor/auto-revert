<?php
// XSS test variation #667
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>