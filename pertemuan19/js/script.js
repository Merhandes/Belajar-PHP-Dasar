// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function(){
    // console.log(keyword.value);

    // buat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
            // console.log(xhr.responseText);
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true)
    xhr.send();

});