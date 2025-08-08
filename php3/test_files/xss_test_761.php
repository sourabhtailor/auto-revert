<?php
// XSS test variation #761
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>