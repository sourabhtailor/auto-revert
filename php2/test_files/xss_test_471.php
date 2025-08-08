<?php
// XSS test variation #471
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>