<?php
// Eval injection test variation #1445
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>