const express=require ('express');
const app = express();
const carro = [

    { id: 1, name:'juan',age: 26,enroll: true},
    { id: 1, name:'miguel',age: 26,enroll: false},



];


app.get('/',(req,res)=>{
    res.send('Node JS api');
});

app.get('/api/carro', (req, res)=>{
    res.send(students);
});