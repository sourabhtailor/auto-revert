<?php
// XSS test variation #762
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>