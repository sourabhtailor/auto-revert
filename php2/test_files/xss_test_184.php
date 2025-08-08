<?php
// XSS test variation #184
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>