<?php
// XSS test variation #155
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>