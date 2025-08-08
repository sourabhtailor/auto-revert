<?php
// XSS test variation #585
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>