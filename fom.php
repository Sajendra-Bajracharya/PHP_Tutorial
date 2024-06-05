<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <!--  -->
        <?php
        // $a = 'test';
        // echo "Hello World, {$a}";


        /**
         * This if condition is not required. 
         * form submit ko method timle afaile halne ho so either POST or GET huncha jun hamlai pailai thaha huncha so adding this condition is not necessary.
         */
        if($_SERVER['REQUEST_METHOD']=='POST')  // ($_SERVER['REQUEST_METHOD'] returns the  request method used to access the page such as post and get.
        {
            /**
             * To print array type variables
             */
            // print_r($_POST);

            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            
            // var_dump($_POST);

            /**
             * add condition to check whether the data exists and set a default value.
             * for example instead of writing:
             * $name = $_POST['username'];
             */

            $name = ( isset( $_POST['username'] ) && $_POST['username'] ) ? $_POST['username'] : '';

            $name = $_POST['username'];    //$_POST[''] superglobal array used to collect all the form data sent by using Post method 
            $password =$_POST['pass'];
            $subject =$_POST['subject'];
            $class=$_POST['class'];
            $city = $_POST['city'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>Sucessful</strong> your user_name:'.$name.'  and  '.$password.' also :' .$subject. $class .$city.'has been submitted!!!
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
        }

        ?>

        <?php 
        /**
         * - if you want to submit the form to the same page as the form then you can leave the action empty.
         * - Add indentation when writing HTML so that you can easily determine the opening and closing tags. This will reduce the chance of missing a closing tag.
         */
        ?>
        <!-- <form action="/helo/fom.php" method="post"> -->
        <form action="/" method="post">
            <h1>Form for the admission:</h1>
            
            <b>USER NAME: </b>
            <input type="text" placeholder="name" name="username[]">
            <input type="text" placeholder="name" name="username[]">
            <br>
            
            <b>PASSWORD: </b>
            <input type="password" placeholder="password" name="pass">
            <br>
            
            <h3>Select your Class</h3>
            <label for="101">
                <input type="radio"  value="classXI" name="class" id="101">ClassXI
            </lable>
            <br>
            <label for="102">
                <input type="radio"  value="classXII" name="class" id="102">ClassXII
            </lable>
            <br>
            <label for="103">
                <input type="radio"  value="classXII" name="class" id="103">ClassXIII
            </lable>
            <br>
            <br>

            <h3>Select the subjects you want to choose</h3>
            <label for="111">
                <input type="checkbox" value="physics" name="subject" id="111">Physics
            </label>
            <br>
            <label for="112">
                <input type="checkbox" value="maths" name="subject" id="112">maths
            </label>
            <br>
            <label for="113">
                <input type="checkbox" value="Computer" name="subject" id="113">Computer
            </label>
            <br>
            <label for="114">
                <input type="checkbox" value="Biology" name="subject" id="114">Biology
            </label>
            <h3>Select your hometown</h3>
            <select name="city">
                <option value="kathmandu">kathmandu</option>
                <option value="Biratnagar">Biratnagar</option>
                <option value="pokhara">Pokhara</option>
                <option value="Birgunj">Birgunj</option>
            </select>
            <br>
            
            <button>Submit</Button>
        </form>

        <?php 
        /**
         * form should not be inside head tag. It should be inside body tag.
         * Read this: https://www.w3schools.com/tags/tag_head.asp
         */
        ?>
    </head>
    <body>
        
    </body>
</html>
