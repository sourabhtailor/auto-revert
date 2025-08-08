<?php
// XSS test variation #916
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>