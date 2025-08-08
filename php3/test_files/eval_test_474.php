<?php
// Eval injection test variation #474
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>