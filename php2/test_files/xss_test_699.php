<?php
// XSS test variation #699
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>