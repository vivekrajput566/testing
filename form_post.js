const express = require('express');
const file_system = require('fs');
const bodyParser = require('body-parser');
const PORT = 8000;
const app=express();

app.use(bodyParser.urlencoded({ extended: true }));

const display_form_data = function(req,res){
  res.writeHead(200,{"Content-type":"text/html"});
res.write(`your name is ${req.body.name}` );
  res.write('</br>');
  res.write(`your AGE is ${req.body.age}` );
  res.write('</br>');
  res.write(`your email id is ${req.body.email_id}` );
  res.end();
}
const display_form = function(req,res){
	const _form = file_system.readFileSync('./form_post.html');
res.write(_form);
  res.end();

	}
app.post('/data',display_form_data);

app.get('/',display_form);

app.listen(PORT,() => console.log(`Server is listening at ${PORT}`));
