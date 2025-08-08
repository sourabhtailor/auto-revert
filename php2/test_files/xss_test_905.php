<?php
// XSS test variation #905
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>