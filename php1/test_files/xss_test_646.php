<?php
// XSS test variation #646
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>