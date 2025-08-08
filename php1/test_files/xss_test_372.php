<?php
// XSS test variation #372
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>