<?php
// XSS test variation #842
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>