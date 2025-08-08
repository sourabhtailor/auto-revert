<?php
// XSS test variation #112
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>