<?php
// XSS test variation #226
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>