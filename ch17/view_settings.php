<html>
    <head>
        <title>
            view your setting
        </title>
        <style type="text/css">
            body{
              
                    }

        </style>
    </head>
    <body>
    <?php
            if(isset($_COOKIE['font_size']))
            {
                print "\t\tfont_size : ".htmlentities($_COOKIE['font_size'])   ."\n";
            }else
            {
                print"\t\t font_size : medium"."\n";
            }
            //check the color
            if(isset($_COOKIE['font_color']))
            {
                print"\t\t font color #". htmlentities($_COOKIE['font_color'])."\n";
            }else{
                print "\t\t color is : #000"."\n";
            }

             ?>
        <p>
            <a href="customize.php">Customize your Settings</a>
        </p>
        <p><a href="reset.php">Reset Your Settings</a></p>

        <p>yadda yadda yadda yadda yadda
            yadda yadda yadda yadda yadda
            yadda yadda yadda yadda yadda
            yadda yadda yadda yadda yadda
            yadda yadda yadda yadda yadda</p>
        <?php
            echo time();
        ?>

    </body>
</html>