<?php
// XSS test variation #792
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>