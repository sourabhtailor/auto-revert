<?php
// XSS test variation #948
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>