const express = require('express');
const fs = require('fs');
const PORT = 8000;
const app = express();

const displayUserData = function(req,res){
    res.writeHead(200,{"Content-type":"text/html"});
    res.write(`your Name is ${req.query.name}`);
    res.write('</br>');
    res.write(`your AGE is ${req.query.age}`);
    res.write('</br>');
    res.write(`your Email id is ${req.query.email_id}`);
    res.end();
}

const displayForm = function(req,res){
    const formContent = fs.readFileSync('./form_get.html');
    res.write(formContent);
    res.end();
}

app.get('/data',displayUserData);
app.get('/',displayForm);

app.listen(PORT,() => console.log(`Server is listening at ${PORT}`));
