<?php
// Eval injection test variation #793
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>