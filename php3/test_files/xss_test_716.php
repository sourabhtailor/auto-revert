<?php
// XSS test variation #716
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>