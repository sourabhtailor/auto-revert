<?php
// XSS test variation #539
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>