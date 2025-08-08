<?php
// XSS test variation #665
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>