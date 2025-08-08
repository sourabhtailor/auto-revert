<?php
// XSS test variation #415
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>