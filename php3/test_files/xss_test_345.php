<?php
// XSS test variation #345
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>