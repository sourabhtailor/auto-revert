<?php
// XSS test variation #865
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>