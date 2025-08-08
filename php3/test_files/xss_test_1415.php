<?php
// XSS test variation #1415
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>