<?php
// XSS test variation #681
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>