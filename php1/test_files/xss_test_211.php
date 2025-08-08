<?php
// XSS test variation #211
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>