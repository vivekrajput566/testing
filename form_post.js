var express = require('express');
var bodyParser=require('body-parser');
var app=express();
app.use(bodyParser.urlencoded({ extended: true }));
app.post('/data',function(req,res,err)
{
  res.writeHead(200,{"Content-type":"text/html"});
  res.write('your name is '+req.body.name+'' );
  res.write('</br>');
  res.write('your AGE is '+req.body.age+'' );
  res.write('</br>');
  res.write('your email id is '+req.body.email_id+'' );
  res.end();
}
);
app.get('/',function(req,res)
{
  res.writeHead(200,{"Content-type":"text/html"});
res.write('<form action="/data" method="post">');
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
}
);
app.listen('8000');
