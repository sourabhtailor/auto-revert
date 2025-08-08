<?php
// XSS test variation #529
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>