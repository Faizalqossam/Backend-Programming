const showDownload = (result) => {
    console.log("Download selesai");
    console.log(`Hasil Download : ${result}`); //refactor menggunakan template literals
}

let download = (callShowDonwload) => {
    //refactor callback dengan producing promise
    return new Promise(function(resolve,reject) {
        setTimeout(() =>{
        const result = "windows-10.exe";
        resolve(callShowDonwload(result))
        },5000)
    })
}

//refactor consuming promise dengan async await
async function main(){
    await download(showDownload);
}

main()
