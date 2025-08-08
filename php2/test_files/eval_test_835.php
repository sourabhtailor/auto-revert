<?php
// Eval injection test variation #835
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>