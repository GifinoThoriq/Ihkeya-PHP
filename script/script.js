let keyword = document.getElementById('keyword');
let tombolCari = document.getElementById('tombol-cari');
let container = document.getElementById('container');

//event di dalam search bar
keyword.addEventListener('keyup', function(){
    

    //buat object ajax
    let xhr =  new XMLHttpRequest();

    //cek objek ajax
    xhr.onreadystatechange = function(){
        if( xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }

    //ekseskusi ajax
    xhr.open('GET', 'ajax/item.php?keyword='+ keyword.value, true);
    xhr.send();
})