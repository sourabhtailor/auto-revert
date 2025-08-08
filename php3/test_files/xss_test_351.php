<?php
// XSS test variation #351
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>