<?php
// XSS test variation #889
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>