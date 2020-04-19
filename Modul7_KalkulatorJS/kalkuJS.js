let result;


/*
Function resetButton() merupakan fungsi untuk kemudian mereset textbox serta hasil InnerHTML hasil. Pertama tama yang harus dilakukan adalah mengubah nilai
elemen HTML yang memiliki id "angkaSatu", "angkaDua" menjadi "" (kosong/hanya berisi spasi) serta mengubah inner HTMl dengan memilih ID menjadi "Hasil : "
*/
function resetButton(){
    document.getElementById("angkaSatu").value="";
    document.getElementById("angkaDua").value="";
    document.getElementById("result").innerHTML="Hasil : ";

}

/*
Function tambah() merupakan fungsi yang berperan sebagai operator "tambah". Adapun yang dilakukan adalah mendefinisikan sebuah variabel a dan variabel b
yang kemudian mengisi variabel a dan b sesuai dengan isi yang tertera pada input. Selector yang digunakan adalah "getElementbyId" (mencari elemen dengan
    id yang diinginkan). Tentu user juga harus mengganti tipe variabel dari yang awalnya string menjadi integer dengan menggunakan syntax "parseInt()",
    hal ini dikarenakan pada input, tipe data yang diminta adalah string, namun pada operasinya user memerlukan tipe data integer.

    Setelah itu nilai dari variabel a dan b dilakukan operasi penambahan serta disimpan dalam variabel "result". Kemudian dengan variabel "rs" javascript
    akan memodifikasi DOM HTML pada Id "result" menjadi "Hasil = (result)"
*/

function tambah(){
    let a = parseFloat(document.getElementById("angkaSatu").value);
    let b = parseFloat(document.getElementById("angkaDua").value);
    result = a+b;
    let rs = document.getElementById("result").innerHTML = "Hasil : "+result;

}

/*
Function kurang() merupakan fungsi yang berperan sebagai operator "kurang". Adapun yang dilakukan adalah mendefinisikan sebuah variabel a dan variabel b
yang kemudian mengisi variabel a dan b sesuai dengan isi yang tertera pada input. Selector yang digunakan adalah "getElementbyId" (mencari elemen dengan
    id yang diinginkan). Tentu user juga harus mengganti tipe variabel dari yang awalnya string menjadi integer dengan menggunakan syntax "parseInt()",
    hal ini dikarenakan pada input, tipe data yang diminta adalah string, namun pada operasinya user memerlukan tipe data integer.

    Setelah itu nilai dari variabel a dan b dilakukan operasi pengurangan serta disimpan dalam variabel "result". Kemudian dengan variabel "rs" javascript
    akan memodifikasi DOM HTML pada Id "result" menjadi "Hasil = (result)"
*/

function kurang(){
    let a = parseFloat(document.getElementById("angkaSatu").value);
    let b = parseFloat(document.getElementById("angkaDua").value);
    result = a-b;
    let rs = document.getElementById("result").innerHTML = "Hasil : "+result;

}

/*
Function kali() merupakan fungsi yang berperan sebagai operator "kali". Adapun yang dilakukan adalah mendefinisikan sebuah variabel a dan variabel b
yang kemudian mengisi variabel a dan b sesuai dengan isi yang tertera pada input. Selector yang digunakan adalah "getElementbyId" (mencari elemen dengan
    id yang diinginkan). Tentu user juga harus mengganti tipe variabel dari yang awalnya string menjadi integer dengan menggunakan syntax "parseInt()",
    hal ini dikarenakan pada input, tipe data yang diminta adalah string, namun pada operasinya user memerlukan tipe data integer.

    Setelah itu nilai dari variabel a dan b dilakukan operasi perkalian serta disimpan dalam variabel "result". Kemudian dengan variabel "rs" javascript
    akan memodifikasi DOM HTML pada Id "result" menjadi "Hasil = (result)"
*/

function kali(){
    let a = parseFloat(document.getElementById("angkaSatu").value);
    let b = parseFloat(document.getElementById("angkaDua").value);
    result = a*b;
    let rs = document.getElementById("result").innerHTML = "Hasil : "+result;
    
}

/*
Function bagi() merupakan fungsi yang berperan sebagai operator "bagi". Adapun yang dilakukan adalah mendefinisikan sebuah variabel a dan variabel b
yang kemudian mengisi variabel a dan b sesuai dengan isi yang tertera pada input. Selector yang digunakan adalah "getElementbyId" (mencari elemen dengan
    id yang diinginkan). Tentu user juga harus mengganti tipe variabel dari yang awalnya string menjadi integer dengan menggunakan syntax "parseInt()",
    hal ini dikarenakan pada input, tipe data yang diminta adalah string, namun pada operasinya user memerlukan tipe data integer.

    Setelah itu nilai dari variabel a dan b dilakukan operasi pembagian serta disimpan dalam variabel "result". Kemudian dengan variabel "rs" javascript
    akan memodifikasi DOM HTML pada Id "result" menjadi "Hasil = (result)"
*/

function bagi(){
    let a = parseFloat(document.getElementById("angkaSatu").value);
    let b = parseFloat(document.getElementById("angkaDua").value);
    result = a/b;
    let rs = document.getElementById("result").innerHTML = "Hasil : "+result;

}