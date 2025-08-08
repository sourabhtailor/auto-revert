<?php
// XSS test variation #45
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>