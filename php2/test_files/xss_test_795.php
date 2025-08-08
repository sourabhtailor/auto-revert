<?php
// XSS test variation #795
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>