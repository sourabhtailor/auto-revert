<?php
// Eval injection test variation #891
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>