function persiapan(){
    return new Promise(function(resolve,reject){
        setTimeout(() => {
            resolve("Persiapan...")
        },3000);
    })
}

function rebusAir(){
    return new Promise(function(resolve,reject){
        setTimeout(() => {
            resolve("Rebus air....")
        },7000);
    })
}

function masak(){
return new Promise(function(resolve,reject){
        setTimeout(() => {
            resolve("Masak,Selesai....")
        },3000);
    })
}

//menggunakan asnyc await harus menambahkan asnyc dalam function
async function main(){
//callback
//    setTimeout(() => {
//     persiapan()

//     setTimeout(() => {
//     rebusAir()

//      setTimeout(() => {
//       masak()
//      }, 5000);
//     }, 7000);
//    },3000);

//promise
// persiapan()
// .then(function(result){
//     console.log(result);
//     return rebusAir()
// })
// .then(function(result){
//     console.log(result);
//     return masak()
// })
// .then(function(result){
//     console.log(result);
// })
console.log(await persiapan());
console.log(await rebusAir());
console.log(await masak());
}

main()