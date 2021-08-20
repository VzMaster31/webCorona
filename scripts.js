// Api
$(document).ready(function() {

    //panggil fungsi menampilkan data semua global
    semuaData();
    dataNegara();
    dataProvinsi();
    dataGlobal();

    addCommas();

    //refresh otomatis
    setInterval(function() {
        semuaData();
        dataNegara();
    }, 3000);


    function semuaData() {
        $.ajax({
            url: 'https://coronavirus-19-api.herokuapp.com/all',
            success: function(data) {
                try {
                    var json = data;
                    var kasus = addCommas(data.cases);
                    var meninggal = addCommas(data.deaths);
                    var sembuh = addCommas(data.recovered);

                    $('#data-kasus').html(kasus);
                    $('#data-mati').html(meninggal);
                    $('#data-sembuh').html(sembuh);

                } catch {
                    alert('Errorr');
                }
            }

        });
    }

    function dataNegara() {
        $.ajax({
            url: 'https://coronavirus-19-api.herokuapp.com/countries/indonesia',
            success: function(data) {
                try {

                    var json = data;

                    var kasus = addCommas(data.cases);
                    var mati = addCommas(data.deaths);
                    var sembuh = addCommas(data.recovered);
                    
                    $('#data-id').html('Positif : ' + kasus + ' orang <br> Meninggal : ' + mati + ' orang <br> Sembuh : ' + sembuh + ' orang')

                    // var html = [];

                    // if (json.length > 0) {
                    //     var i;
                    //     for (i = 0; i < json.length; i++) {
                    //         var dataNegara = json[i];
                    //         var namaNegara = dataNegara.country;

                    //         if (namaNegara === 'Indonesia') {
                    //             var kasus = addCommas(dataNegara.cases);
                    //             var mati = addCommas(dataNegara.deaths);
                    //             var sembuh = addCommas(dataNegara.recovered);
                    //             $('#data-id').html('Positif : ' + kasus + ' orang <br> Meninggal : ' + mati + ' orang <br> Sembuh : ' + sembuh + ' orang')

                    //         }
                    //     }

                    // }

                } catch {
                    alert('Errorr');
                }
            }
        });
    }

    function dataProvinsi() {
        $.ajax({
            url: 'curl.php',
            type: 'GET',
            success: function(data) {
                try {
                    $('#table-data').html(data);
                } catch {
                    alert('Errorr');
                }
            }

        });
    }

    function dataGlobal() {
        $.ajax({
            url: 'curl2.php',
            type: 'GET',
            success: function(dataCountry) {
                try {
                    $('#table-data_glob').html(dataCountry);
                } catch {
                    alert('Errorr');
                }
            }

        });
    }


    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

});