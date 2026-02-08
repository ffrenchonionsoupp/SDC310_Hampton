<html>

<head>
    <title>Francis Hampton Wk 2 Performance Assessment</title>    
</head>

<body>
    <form method="POST">
        <h3>Enter your name: <input type="text" name="name"></h3>
        <h3>Enter your date of birth: <input type="date" name="birthday"></h3>
        <h3>Enter your favorite color: <input type="text" name="fav_color"></h3>
        <h3>Enter your favorite place to visit: <input type="text" name="fav_place"></h3>
        <h3>Enter your nickname: <input type="text" name="nickname"></h3>
        <input type="submit" value="Submit Values">
    </form>
    <?php
        //Declare and clear variables for display
        $name = '';
        $birthday = '';
        $color = '';
        $place = '';
        $nickname = '';

        //Retrieve values from query string and store in a local variable
        //as long as the query string exists (which it does not on first
        //load of a page)
        if (isset($_POST['name']))
            $name = $_POST['name'];
        if (isset($_POST['birthday']))
            $birthday = $_POST['birthday'];
        if (isset($_POST['fav_color']))
            $color = $_POST['fav_color'];
        if (isset($_POST['fav_place']))
            $place = $_POST['fav_place'];
        if (isset($_POST['nickname']))
            $nickname = $_POST['nickname'];

        //Display the values entered as long as there is a value there
        if (strlen($name) > 0)
            echo "<h3> Your name is $name </h3>";
        else
            echo "<h3> You didn't enter your name! </h3>";

        if (strlen($birthday) > 0)
            echo "<h3> Your birthday is $birthday </h3>";
        else
            echo "<h3> You didn't enter your birthday! </h3>";

        if (strlen($color) > 0)
            echo "<h3> Your favorite color is $color </h3>";
        else
            echo "<h3> You didn't enter your favorite color! </h3>";

        if (strlen($place) > 0)
            echo "<h3> Your favorite place is $place </h3>";
        else
            echo "<h3> You didn't enter your favorite place! </h3>";
        
        if (strlen($nickname) > 0)
            echo "<h3> Your nickname is $nickname </h3>";
        else
            echo "<h3> You didn't enter your nickname! </h3>";
    ?>  
</body>

</html>