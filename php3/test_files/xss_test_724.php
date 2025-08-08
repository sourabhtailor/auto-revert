<?php
// XSS test variation #724
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>