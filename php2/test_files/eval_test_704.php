<?php
// Eval injection test variation #704
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>