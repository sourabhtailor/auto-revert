<?php
// XSS test variation #682
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>