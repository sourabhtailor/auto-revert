<?php
// XSS test variation #1471
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>