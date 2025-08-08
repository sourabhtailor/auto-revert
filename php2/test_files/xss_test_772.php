<?php
// XSS test variation #772
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>