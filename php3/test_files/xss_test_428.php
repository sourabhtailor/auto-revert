<?php
// XSS test variation #428
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>