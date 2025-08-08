<?php
// XSS test variation #727
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>