<?php
// XSS test variation #519
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>