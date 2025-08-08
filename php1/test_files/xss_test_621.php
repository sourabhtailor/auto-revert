<?php
// XSS test variation #621
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>