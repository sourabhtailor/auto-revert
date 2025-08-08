<?php
// XSS test variation #919
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>