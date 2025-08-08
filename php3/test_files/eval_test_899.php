<?php
// Eval injection test variation #899
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>