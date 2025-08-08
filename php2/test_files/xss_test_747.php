<?php
// XSS test variation #747
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>