<?php
// XSS test variation #729
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>