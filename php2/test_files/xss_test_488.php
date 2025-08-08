<?php
// XSS test variation #488
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>