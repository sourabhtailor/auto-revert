<?php
// XSS test variation #814
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>