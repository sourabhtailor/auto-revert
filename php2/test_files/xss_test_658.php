<?php
// XSS test variation #658
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>