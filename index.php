<!DOCTYPE html>
<html>
  <body>
    <h1>My first PHP page</h1>
    <p>this is  a test on updating a branch on github and what that means.</p>
    <p>Another <?php echo 'another' ?> second shot</p>

    <p>let us see who makes this commit</p>

    <?php
    //Scalar types
    $name = 'David Andrew'; //string
    $int = 1235; //integer
    $float = 1.234;
    $boolean = false;
    // always initialise your variables to know the kind of data that it will contain.

    //Array types
    $array = array('rolland', 'mutamba ', 'stedy');
    $array2 = ['new', 'way'];

    //Object types
    // $object = new Object();
    echo "Hello World!";
    echo '<br>';
    echo $name;
    echo '<br>';

    // Superglobals pre-defined variables
    echo $_SERVER['DOCUMENT_ROOT']; //access server functions
    echo $_GET['name']; // gets data submited in the website
    $_POST['name']; //submiting data to a website or database
    echo $_REQUEST['name']; //looks for get, post and cookies in a website.. looks for everything.
    echo $_FILES['size']; // get data on a submited file
    echo $_COOKIE['name']; // small files stored in the user computer...get the cookie data.
    echo $_SESSION['username']; //stores the session data for the user.
    echo $_ENV['name']; //get access to environment variables.
    ?>

  </body>
</html>