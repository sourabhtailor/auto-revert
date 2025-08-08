<?php
// XSS test variation #918
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>