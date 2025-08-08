<?php
// XSS test variation #509
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>