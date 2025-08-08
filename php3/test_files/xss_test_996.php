<?php
// XSS test variation #996
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>