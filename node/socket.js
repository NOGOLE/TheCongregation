var app = require('http').createServer(handler);
var io = require('socket.io')(app);

var Redis = require('ioredis');
var redis = new Redis();

app.listen(6001, function() {
    console.log('Server is running!');
});

function handler(req, res) {
    res.writeHead(200);
    res.end('');
};

redis.subscribe('account-created', function(err,count) {


});

redis.subscribe('church-created', function(err,count) {


});

redis.subscribe('event-created', function(err,count) {


});

redis.subscribe('bulletin-created', function(err,count) {


});

redis.on('message', function(channel,message){

  console.log('Message Recieved!');
  message = JSON.parse(message);
  console.log(channel);
  io.emit(channel, message);
});
