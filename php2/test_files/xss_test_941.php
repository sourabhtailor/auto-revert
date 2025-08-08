<?php
// XSS test variation #941
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>