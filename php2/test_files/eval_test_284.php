<?php
// Eval injection test variation #284
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>