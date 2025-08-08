<?php
// Eval injection test variation #1038
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>