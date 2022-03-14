function formatName(nama){
    const result = nama.toUpperCase();
    return result;
}

function getName(nama,callformatName){
    const result = callformatName(nama);
    console.log(result);
}

getName("faiz",formatName);

