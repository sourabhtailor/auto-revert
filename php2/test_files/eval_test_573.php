<?php
// Eval injection test variation #573
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>