<?php
// XSS test variation #1373
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>