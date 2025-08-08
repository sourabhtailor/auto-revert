<?php
// XSS test variation #575
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>