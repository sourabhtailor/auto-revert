<?php
// XSS test variation #452
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>