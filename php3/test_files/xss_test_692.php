<?php
// XSS test variation #692
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>