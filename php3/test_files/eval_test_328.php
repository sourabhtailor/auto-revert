<?php
// Eval injection test variation #328
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>