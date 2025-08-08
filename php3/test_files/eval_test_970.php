<?php
// Eval injection test variation #970
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>