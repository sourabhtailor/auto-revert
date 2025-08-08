<?php
// XSS test variation #370
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>