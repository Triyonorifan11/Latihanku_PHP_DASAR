var keysearch = document.getElementById('keysearch');
var button_search = document.getElementById('button-search');
var table = document.getElementById('table');

keysearch.addEventListener('keyup', function () {

    // buat objek ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            table.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/menuAjax.php?keysearch=' + keysearch.value, true);
    xhr.send();
});