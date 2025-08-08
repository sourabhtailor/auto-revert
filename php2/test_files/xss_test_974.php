<?php
// XSS test variation #974
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>