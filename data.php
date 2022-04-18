<?php

function search($array, $key, $value)
{
    $results = array();

    if (is_array($array)) {
        if (isset($array[$key]) && $array[$key] == $value) {
            $results[] = $array;
        }

        foreach ($array as $subarray) {
            $results = array_merge($results, search($subarray, $key, $value));
        }
    }

    return $results;
}

$makanan = array(
    [
      'id'   => '1',
      'nama' => 'Jagung Rebus',
      'jumlah' => '250 gram',
      'berat' => '90.2'
    ],
    [
      'id'   => '2',
      'nama' => 'Kentang Rebus',
      'jumlah' => '200 gram',
      'berat' => '166'
    ],
    [
      'id'   => '3',
      'nama' => 'Ketupat',
      'jumlah' => '160 gram',
      'berat' => '217'
    ],
    [
      'id'   => '4',
      'nama' => 'Lontong',
      'jumlah' => '200 gram',
      'berat' => '38'
    ],
    [
      'id'   => '5',
      'nama' => 'Nasi Putih',
      'jumlah' => '100 gram',
      'berat' => '175'
    ],
    [
      'id'   => '6',
      'nama' => 'Roti Tawar Serat Tinggi',
      'jumlah' => '100 gram',
      'berat' => '146'
    ],
    
    
  );