<?php
// XSS test variation #779
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>