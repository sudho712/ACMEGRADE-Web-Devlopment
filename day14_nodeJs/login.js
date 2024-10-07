var http = require("http");

var server = http.createServer((req, res) => {
    if (req.url == "/login") {
        res.writeHead(200, { "Content-Type": "text/html" });
        res.end(`
            <input placeholder='username'>
            <input placeholder='password' type='password'>
            <button>Login</button>
        `);
    } else if (req.url == "/home") {
        res.writeHead(200, { "Content-Type": "text/html" });
        res.end("<h1>Welcome home</h1>");
    } else {
        res.writeHead(404, { "Content-Type": "text/plain" });
        res.end("Invalid path");
    }
});

server.listen(3000, () => {
    console.log("Server is running on port 3000");
});
