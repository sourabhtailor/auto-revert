<?php
// XSS test variation #423
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>