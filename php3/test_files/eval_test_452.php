<?php
// Eval injection test variation #452
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>