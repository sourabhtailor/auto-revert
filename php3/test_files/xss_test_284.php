<?php
// XSS test variation #284
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>