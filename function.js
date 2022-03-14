// Function declaration
/**
 * Membuat fungsi menghitung luas lingkaran
 * @param {number} jari - jari jari lingkaran
 * @returns {number} hasil - hasil luas lingkaran
 */
// function hitungLuas(jari){
//     const hasil = 3.14 * jari * jari ;

//     return hasil;
// }

// Function expressrion
/**
 * 
 * @param {number} jari 
 * @returns {number} hasil
 */
// const hitungLuas = function(jari){
//     const hasil = 3.14 * jari * jari ;

//     return hasil;
// };

// Arrow function
const hitungLuas = (jari) => {
    const hasil = 3.14 * jari * jari ;

    return hasil;
};
// const hitungLuas = (jari) => 3.14 *jari *jari ; - untuk satu baris/satu statement
console.log(hitungLuas(5));
console.log(hitungLuas(8));