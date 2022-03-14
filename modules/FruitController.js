const fruits = require("./data.js");

function index(){
    for (const fruit of fruits){
        console.log(fruit);
    }
}

function store(name){
    fruits.push(name);
    index()
}

module.exports = {index,store};