<?php
// XSS test variation #485
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>