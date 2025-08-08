<?php
// Eval injection test variation #300
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>