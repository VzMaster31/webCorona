<?php 

//Buat fungsi http_request
function http_request($url){
    
    //persiapkan CURL
    $ch = curl_init();

    //set url
    curl_setopt($ch, CURLOPT_URL, $url);

    //aktifkan fungsi transfer nilai yang berupa string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //Srtting agar dapat dijalankan dengan locahost
    //matikan ssl verify(https)
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    //tampung hasil kedalam variabel $output
    $output = curl_exec($ch);

    //tutup url
    curl_close($ch);

    //mengembalikan hasil curl
    return $output;

}

//panggil fungsi http_request(url/api)
    $dataCountry = http_request("https://coronavirus-19-api.herokuapp.com/countries");

//ubah format jadi json
$dataCountry = json_decode($dataCountry, TRUE);


//tampung jumlah data
$jumlah_glob = count($dataCountry);

$nomor = 1; 

for($i = 0; $i < $jumlah_glob; $i++){

    $country_name = $dataCountry[$i]['country']; 
    $case = $dataCountry[$i]['cases'];
    $death = $dataCountry[$i]['deaths'];
    $recovered = $dataCountry[$i]['recovered'];
    
?>

    <tr>
        <td><?=$nomor++?></td>
        <td><?=$country_name?></td>
        <td><?=$case?></td>
        <td><?=$recovered?></td>
        <td><?=$death?></td>
    </tr>

<?php

}

?>