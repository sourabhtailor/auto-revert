<?php
// XSS test variation #356
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>