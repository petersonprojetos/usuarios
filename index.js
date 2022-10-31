const express = require ('express')
const bodyparser = require('body-parser')
const cors = require('cors')
const app = express()
const mysql = require('mysql2')

app.use( cors() )
app.use(bodyparser.json())

//conexao
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'cadastro',
    port: 3306
})

//checa conexao
db.connect(err=>{
    if (err){
        console.log(err,'dberr (erro no banco)')
    }
    console.log('conexao funcionando')
})

//pega todos os dados
app.get('/user', (req,res)=>{
    //res.render('novousuario')
    //console.log('user')  
    let qr = 'select * from cadastro'

    db.query(qr,(err,result)=>{
        if(err){
            console.log(err, 'errs')
        }

        if(result.length > 0){
            res.send({
                message: 'todos os dados de cadastro',
                data:result
            })
        }
    })

})

//pega um dado
app.get('/user/:id',(req,res)=>{
    let gID = req.params.id;

    let qr = `select * from cadastro where id = ${gID}`

    db.query(qr,(err,result)=>{
        if(err){
            console.log(err)
        }

        if(result.length > 0 ){
            res.send({
                message: 'pegar um dado',
                data:result
            })
        }else{
            res.send({
                message: 'dados não encontrados'
            })
        }
    })

})

//criar dado
app.post('/user',(req,res)=>{
    console.log(req.body, 'createdata')

    let nome = req.body.nome 
    let login = req.body.login 
    let cpf = req.body.cpf 
    let email = req.body.email 
    let senha = req.body.senha 
    let bloqueado = req.body.bloqueado 
    let perfis = req.body.perfis

    let qr = `insert into cadastro(nome, login, cpf, email,senha, bloqueado, perfis)
     values('${nome}','${login}','${cpf}','${email}','${senha}','${bloqueado}','${perfis}')` ;

    db.query(qr,(err,result)=>{
        if(err){console.log(err)}
        console.log(result,'result')
        res.send({
            message: 'dados inseridos'
        })
    })
})

//atualizar dado
app.put('/user/:id',(req,res)=>{
    console.log(req.body, 'updatedata')

    let gID = req.params.id;
    let nome = req.body.nome 
    let login = req.body.login 
    let cpf = req.body.cpf 
    let email = req.body.email 
    let senha = req.body.senha 
    let bloqueado = req.body.bloqueado 
    let perfis = req.body.perfis

    let qr = `update cadastro set nome = '${nome}', login = '${login}', cpf = '${cpf}', email = '${email}',
     senha = '${senha}', bloqueado = '${bloqueado}', perfis = '${perfis}' where id = ${gID}`

    db.query(qr,(err,result)=>{
        if(err){console.log(err)}
        
        res.send({
            message: 'dados atualizados'
        })
    })
})

//port
app.listen(3000 , ()=>{
    console.log('servidor rodando')
})