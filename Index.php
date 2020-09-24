<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include('Student.php');
        $students = array(); 
        
        
       $first = new Student();
       $first->surname = "Doe";
       $first->first_name = "John";
       $first->add_email('home','john@doe.com');
       $first->add_email('work','jdoe@mcdonalds.com');
       $first->add_grade(65);
       $first->add_grade(75);
       $first->add_grade(55);
       $first->add_status('status', 'Senior');
       $students['j123'] = $first;

        
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->add_status('status', 'Freshman');
        $students['a456'] = $second;
        //My name
        $third = new Student();
        $third->surname =  "Liu";
        $third->first_name = "Zhaohang";
        $third->add_email('work', '1079886401@qq.com');
        $third->add_grade(99);
        $third->add_status('status', 'Junior');
        $students['a1'] = $third;
        
        $forth = new Student();
        $forth->surname =  "white";
        $forth->first_name = "peter";
        $forth->add_email('work', '07698888@qq.com');
        $forth->add_grade(10);
        $forth->add_grade(22);
        $forth->add_grade(33);
        $forth->add_status('status', 'Junior');
        $students['a419'] = $forth;
        
        ksort($students);
        foreach($students as $student)
        echo $student->toString();
        ?>
    </body>
</html>
