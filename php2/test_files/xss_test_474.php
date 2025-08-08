<?php
// XSS test variation #474
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>