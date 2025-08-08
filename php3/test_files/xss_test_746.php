<?php
// XSS test variation #746
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>