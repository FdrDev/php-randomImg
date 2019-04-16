<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <style>
  img{border-radius: 12px;}
  h1{color:white}
  body{
  font-family: 'Montserrat',sans-serif;
  background: radial-gradient(#03a9f4, #050dff);
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  }
  </style>
    <title>Hello World from PHP</title>
  </head>
  <body>

    <?php
    function rndImg(){

      $rdn=rand(0,4);

      $rdnImg=[
        'https://images.unsplash.com/photo-1553901753-215db344677a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=clip&w=400&h=600',

        'https://images.unsplash.com/photo-1553618551-fba689030290?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=clip&w=400&h=600',

        'https://images.unsplash.com/photo-1553129738-0eae80232e7c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=clip&w=400&h=600',

        'https://images.unsplash.com/photo-1548400125-639ed6149e5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjE3MzYxfQ&auto=format&fit=clip&w=400&h=600',

        'https://images.unsplash.com/photo-1548404412-f27160c85ecb?ixlib=rb-1.2.1&auto=format&fit=clip&w=400&h=600'
      ];

      echo "<h1>REFRESH FOR NEW IMAGE</h1>";
      echo "<img src=$rdnImg[$rdn]";

    }

    rndImg();

     ?>
  </body>
</html>
