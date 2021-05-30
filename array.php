<?php
$dataInput = [
    [
        'id' => 'id1',
        'name' => 'hung1'
    ],
    [
        'id' => 2,
        'name' => 'hung2'
    ],
    [
        'id' => 3,
        'name' => 'hung3'
    ],
    [
        'id' => 4,
        'name' => 'hung4'
    ],
];

$ids = [];
for ($i = 0; $i < count($dataInput); $i++) {
    $ids[] = $dataInput[$i]['id'];
}
print_r($ids);

$idHasKey = [];

for ($i = 0; $i < count($dataInput); $i++) {
    $idHasKey[] = [
        'id' => $dataInput[$i]['id']
    ];
}
print_r($idHasKey);

$mapIdToName = [];
for ($i = 0; $i < count($dataInput); $i++) {
    $mapIdToName[] = [
        $dataInput[$i]['id'] => $dataInput[$i]['name']
    ];
}
print_r($mapIdToName);

$listIdAndName = [];
for ($i = 0; $i < count($dataInput); $i++) {
    $idAndName = array($dataInput[$i]['id'], "_",  $dataInput[$i]['name']);
    $idAndName = implode("", $idAndName);
    $listIdAndName[] = $idAndName;
}
print_r($listIdAndName);
