<?php
    if(isset($_POST['font_size']) && isset($_POST['font_color']))
    {
        //if the form has value send the cookies
        setcookie('font_size',$_POST['font_size'],time()+10000000,'/','',0);
        setcookie('font_color',$_POST['font_color'],time()+10000000,'/','',0);
        //message printed
        $msg ='<p> your setting have been entered <a href= "view_settings.php">here is the link </a>  </p>';
    }


?>
<html>
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
    <title>Customize Your Settings  </title>

</head>
<body>
    <?php
        if(isset($msg))
        {
            print $msg;
        }
    ?>
    <p>Use this form to set your preferences:</p>
    <form action="customize.php" method="POST">
        <select name="font_size">
            <option value=""> Font Size </option>
            <option value="xx-small">xx-small </option>
            <option value="x-small">x-small </option>
            <option value="small">small </option>
            <option value="medium">medium</option>
            <option value="large">large</option>
        </select>
        <select name="font_color">
            <option value="">Font Color</option>
            <option value="999">Gray</option>
            <option value="0c0">Green</option>
            <option value="00f">Blue</option>
            <option value="c00">Red</option>
            <option value="000">Black</option>
        </select>
        <input type="submit" name="submit" value="set my performance">
    </form>

</body>
</html>