<?php
// XSS test variation #788
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>