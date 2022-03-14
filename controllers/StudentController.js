//import model
const Student = require("../models/Student")

class StudentController {
    async index(req,res){
        const students = await Student.all()
        //cek apakah data array tidak kosong
        if(students.length > 0){
            const data ={
                message : "Menampilkan data student",
                data : students,
            };

        return res.status(200).json(data);
        }
        //else
        const data = {
            message : "Data is empty",
        }

        return res.status(200).json(data);
    }

    async store(req,res){
        //handle validasi
        //jika data kosong maka kirim response eror
        const {nama, nim, email, jurusan} = req.body
        // nama -> undefined -> adalah boolean yang nilainya false -> if true = apakah benar namanya tidak ada?
        if(!nama ||!nim ||!email || !jurusan){
            const data = {
                message :"Semua data wajib diisi"
            };

            return res.status(422).json(data)
        }
        //jika nim bukan angka
        else if(isNaN(nim)){ 
            const data = {
                message :"Nim harus berupa angka"
            };

            return res.status(422).json(data)
        }
        //else
        const student = await Student.create(req.body)
        const data ={
            message : `Menambahkan data student:`,
            data : student,
        };
        
        return res.status(201).json(data);

        }


    async update(req,res){
        //cek apakah id student ada
        //jika ada,lakukan update
        //jika tidak,kirim data tidak ada
        const {id} = req.params;
        const student = await Student.find(id)
        
        if (student){
            const studentUpdated = await Student.update(id,req.body)
            const data = {
                message : "Mengupdate data student",
                data : studentUpdated,
            }
            
            res.status(201).json(data);
        }else{
            const data = {
                message : "Student not found"
            }

            res.status(404).json(data)
        }

        
    }

    async destroy(req,res){
        const {id} = req.params;
        //cari id
        //jika ada ,hapus data
        //jika tidak,kirim data tidak ada

        const student = await Student.find(id)

        if(student){
            await Student.delete(id);

            const data ={
                message : "Menghapus data student"
            }

            res.status(200).json(data)
        }else{
            const data = {
                message : "Data tidak ada"
            }

            res.status(404).json(data)
        }
    }

    async show(req,res){
        const {id} = req.params
        //cari id
        //jika ada,tampilkan data
        //jika tidak,data tidak ada
        const student = await Student.find(id)
        if(student){
            const data = {
                message : "Menampilkan detail student",
                data : student,
            }

            res.status(200).json(data)
        }else{
            const data = {
                message :"data tidak ada"
            }
            
            res.status(404).json(data)
        }

    }
}

//membuat object controller
const object = new StudentController;

//export controller
module.exports = object;