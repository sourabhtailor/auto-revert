<?php
// XSS test variation #498
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>