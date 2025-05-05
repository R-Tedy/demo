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
    $object = new Object();
    echo "Hello World!";
    echo $name;
    ?>

  </body>
</html>