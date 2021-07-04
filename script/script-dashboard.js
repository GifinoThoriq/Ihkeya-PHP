let keyword = document.getElementById('keyword');
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
    xhr.open('GET', 'ajax/item-dashboard.php?keyword='+ keyword.value, true);
    xhr.send();
})