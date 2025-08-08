<?php
// XSS test variation #458
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>