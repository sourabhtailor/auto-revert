<?php
// XSS test variation #632
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>