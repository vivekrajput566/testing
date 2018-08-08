var express = require('express');
var app = express();
const PORT = 8000;

app.get('/data',function(req,res){
    res.writeHead(200,{"Content-type":"text/html"});
    res.write('your name is '+req.query.name+'' );
    res.write('</br>');
    res.write('your AGE is '+req.query.age+'' );
    res.write('</br>');
    res.write('your email id is '+req.query.email_id+'' );
    res.end();
});

app.get('/',function(req,res){
    res.writeHead(200,{"Content-type":"text/html"});
    res.write('<form action="/data" method="get">');
    res.write('<h1>');
    res.write('ENTER YOUR NAME');
    res.write('<input type="text" name="name">');
    res.write('</br>');
    res.write('ENTER YOUR AGE');
    res.write('<input type="number" name="age">');
    res.write('</br>');
    res.write('ENTER YOUR EMAIL ID');
    res.write('<input type="text" name="email_id">');
    res.write('<input type="submit">');
    res.write('<h1>');
    res.write('</form>');
    res.end();
});

app.listen(PORT);
