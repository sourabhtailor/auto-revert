<?php
// XSS test variation #486
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>