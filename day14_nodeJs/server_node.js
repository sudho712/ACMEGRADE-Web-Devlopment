var http = require("http");

var server = http.createServer((req, res) => {
    console.log("URL=", req.url);
    res.writeHead(200, { "Content-Type": "text/plain" });
    res.end("<h1>I am nnode response</h1>")
});

server.listen(3000, () => {
    console.log("Server is running on port 3000");
});
