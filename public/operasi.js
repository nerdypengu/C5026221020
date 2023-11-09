function tambah(){
 var bilangan1=document.getElementById("bil1").value;
 var bilangan2=document.getElementById("bil2").value; //method yang mengembalikan value
 var hasilnya=document.getElementById("hasil"); //returnnya object
    hasilnya.innerHTML=parseInt(bilangan1) + parseInt(bilangan2);
}

function kali(){
    var bilangan1=document.getElementById("bil1").value;
    var bilangan2=document.getElementById("bil2").value; //method yang mengembalikan value
    var hasilnya=document.getElementById("hasil"); //returnnya object
    hasilnya.innerHTML=bilangan1 * bilangan2;
}