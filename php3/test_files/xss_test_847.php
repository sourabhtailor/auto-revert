<?php
// XSS test variation #847
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>