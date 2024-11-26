<?php

include __DIR__ . "/../services/func.php";
include __DIR__ . "/../services/http.php";
include __DIR__ . "/../services/upload_file.php";

setup_header();
validate_method("POST");

if (!isset($_POST["id"]) || !$_POST['id']) {
   create_response(null,  "Id wajib diisi", 400, null);
   return;
}

$id = $_POST['id'];
$service = get_home_service_item_by_id($mysqli, $id);
if (!$service) {
   create_response(null, 'not found',404, null);
   return;
}

$result = delete_home_service_item($mysqli, $id);
if (!$result) {
   create_response(null, '', 500, null);
   return;
}

$result_delete_file = delete_file($service['icon_path']);
create_response(["id" => $id, "delete_file" => $result_delete_file], 'success');