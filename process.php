<?php

$dataFile = 'data.json';

// Function to Read Data from JSON File
function readData()
{
    global $dataFile;
    if (file_exists($dataFile)) {
        $jsonData = file_get_contents($dataFile);
        return json_decode($jsonData, true);
    }
    return [];
}

// Function to Save Data to JSON File
function saveData($data)
{
    global $dataFile;
    file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
}

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'create':
        $input = json_decode(file_get_contents('php://input'), true);
        $data = readData();
        $data[] = [
            'nama' => $input['nama'],
            'pesan' => $input['pesan']
        ];
        saveData($data);
        echo json_encode(['message' => 'Data berhasil ditambahkan!']);
        break;

    case 'read':
        echo json_encode(readData());
        break;

    case 'update':
        $input = json_decode(file_get_contents('php://input'), true);
        $data = readData();
        $index = $input['index'];
        if (isset($data[$index])) {
            $data[$index]['nama'] = $input['nama'];
            $data[$index]['pesan'] = $input['pesan'];
            saveData($data);
            echo json_encode(['message' => 'Data berhasil diubah!']);
        } else {
            echo json_encode(['message' => 'Data tidak ditemukan!']);
        }
        break;

    case 'delete':
        $index = isset($_GET['index']) ? $_GET['index'] : '';
        $data = readData();
        if (isset($data[$index])) {
            array_splice($data, $index, 1);
            saveData($data);
            echo json_encode(['message' => 'Data berhasil dihapus!']);
        } else {
            echo json_encode(['message' => 'Data tidak ditemukan!']);
        }
        break;

    default:
        echo json_encode(['message' => 'Aksi tidak valid!']);
        break;
}
?>
