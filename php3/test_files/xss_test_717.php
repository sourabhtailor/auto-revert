<?php
// XSS test variation #717
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>