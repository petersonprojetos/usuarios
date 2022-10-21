const express = require('express');
const app = express();

const moment = require('moment')

const bodyParser = require('body-parser')
app.use(bodyParser.urlencoded({extended:false}))
app.use(bodyParser.json())
 

const Cadastro = require('./models/Cadastro')

const {engine} = require('express-handlebars');
const { helpers } = require('handlebars');
app.engine('handlebars', engine(
    {runtimeOptions:{
        allowProtoPropertiesByDefault: true,
        allowProtoMethodsByDefault: true,
    }}
));
app.set('view engine', 'handlebars');
app.set("views", "./views");

//css
app.use('/css', express.static(__dirname + '/css'))
app.use('/script', express.static(__dirname + '/script'))

app.get('/index', (req, res) => {
    res.render('index');
});

app.get('/log', (req, res) => {
    Cadastro.findAll().then(function(cadastros){
        res.render('log', {cadastros: cadastros} );
    })
});

app.get('/novousuario', (req, res) => {
   res.render('novousuario');
}); 

app.get('/novosetor', (req, res) => {
    res.render('novosetor');
});

app.get('/setor', (req, res) => {
    res.render('setor');
});

app.get('/usuarios', (req, res) => {
    res.render('usuarios');
});

app.get('/perfilusuario', (req, res) => {
    res.render('perfilusuario');
});

app.get('/novoperfildeusuario', (req, res) => {
    res.render('novoperfildeusuario');
});

app.get('/tipousuario', (req, res) => {
    res.render('tipousuario');
});

app.get('/novotipodeusuario', (req, res) => {
    res.render('novotipodeusuario');
});

app.get('/funcao', (req, res) => {
    res.render('funcao');
});

app.get('/novofuncao', (req, res) => {
    res.render('novofuncao');
});

const importModules = require('import-modules')


app.post('/cad',(req, res)=>{
   //res.send('Nome: ' + req.body.nome + '<br> Login: ' + req.body.login + '<br> CPF: ' + req.body.cpf + '<br> E-mail: ' + req.body.email + '<br> Senha: ' + req.body.senha + '<br> Bloqueado: ' + req.body.bloqueado + '<br> Perfis: ' + req.body.perfis) 
 Cadastro.create({
    nome: req.body.nome ,
    login: req.body.login ,
    cpf: req.body.cpf ,
    email: req.body.email ,
    senha: req.body.senha ,
    bloqueado: req.body.bloqueado ,
    perfis: req.body.perfis
 }).then(function() {
    res.redirect('/log')
    //res.send('cadastro com sucesso')
 }).catch(function(erro) {
    res.send('ERRO '+erro)
 })
});



app.listen(8080)

