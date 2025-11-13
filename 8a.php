<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Visitor Counter</title>
        <h1>Shriramakrishna Bhat-4MW23CS157</h1>
        <style>
            body{font-family:Arial,sans-serif;text-align:center;margin-top:50px;}
            h1{color:#333;}
            p{font-family:1.2em;}
            
        </style>
     </head>
     <body>
     <?php
         $file='counter.txt';
         $count=file_exists($file)?(int)file_get_contents($file):0;
         file_put_contents($file,data:++$count);
     ?>
         <h1>Visitor Counter</h1>
         <P>Number of Visitor:<strong><?php echo $count;?></strong></p>
</body>         
</html>
