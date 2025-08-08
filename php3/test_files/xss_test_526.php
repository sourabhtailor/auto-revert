<?php
// XSS test variation #526
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>