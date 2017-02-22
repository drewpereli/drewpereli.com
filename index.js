const http = require('http');
const pug = require('pug');
const fs = require('fs');
const path = require('path')
http.createServer(function (req, res) {
	if (req.url === "/"){
  		res.writeHead(200, {'Content-Type': 'text/html'});
  		res.end(pug.renderFile('./templates/index.pug'));
  		return;
  	}
  	else{
      var type = path.extname(req.url);
      var contentTypes = {
        ".css": "text/css",
        ".js": "text/javascript",
        ".jpg": "image/jpeg",
        ".jpeg": "image/jpeg",
        ".png": "image/png"
      }
      console.log(req.url);
  		res.writeHead(200, {'Content-Type': contentTypes[type]});
  		fs.readFile("./public" + req.url, (err, data) => {
        if (err){
          //console.log(err);
          data = null;
        }
  			res.end(data);
  		})
  	}
}).listen(8000, 'localhost');


