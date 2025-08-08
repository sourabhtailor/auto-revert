<?php
// Eval injection test variation #916
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>