<?php
header('Content-Type: application/json');
echo json_encode([
    'status' => 'online',
    'environment' => 'production',
    'timestamp' => date('Y-m-d H:i:s'),
    'message' => 'Deployed via Automated CI/CD & Ansible'
]);
?>
