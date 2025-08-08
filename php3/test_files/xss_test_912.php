<?php
// XSS test variation #912
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>