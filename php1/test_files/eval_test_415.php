<?php
// Eval injection test variation #415
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>