<?php
// XSS test variation #355
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>