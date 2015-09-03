<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

        <script src="http://congregation.app:6001/socket.io/socket.io.js"></script>
<script>
  var socket = io('http://congregation.app:6001');
  console.log(socket);
  socket.on('account-created', function(message){
    console.log(message);
  });
  socket.on('church-created', function(message){
    console.log(message);
  });
  socket.on('event-created', function(message){
    console.log(message);
  });
  socket.on('bulletin-created', function(message){
    console.log(message);
  });

</script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
