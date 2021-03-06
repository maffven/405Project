<html>

<head>
    <title>FCIT Activities Home Page</title>
    <link rel="stylesheet" type="text/css" href="Mystyle.css">
</head>
<body>
<?php
   session_start();
?>
    <header>
        <nav id="menu">
            <label class="logo"><a href="home.php"><img src="image/logo.png" alt="FCIT logo" height="77" width="60"></a></label>
            <ul>
                <li><a calss="active" href="home.php">Home</a></li>
                <li><a href="workshops.php">Workshops</a></li>
                
                <li>
                    <?php if(!isset($_SESSION['userEmail'])){
                     echo "<a href='login.php'>Login</a>";
                    } else{
                        echo "<a href='logout.php'>Logout</a>"; }?>
                </li>
            </ul>
        </nav>
    </header>

    <table>

        <tbody>
            <tr>
                <div class="homeDiv">
                    <h1>About</h1>
                    <div id="about">

                        <div>
                            <h1>Students' Activities</h1>
                            <p>
                                The general philosophy of student activity is based on
                                the rule that the participation should come from students themselves,
                                and this cannot be achieved unless there is a body in which Faculty
                                members take part in it a long with students, so it was necessary to
                                establish the so-called multi-committees that fall under the student activity.
                            </p>
                        </div>

                        <div>
                            <h1>Committees of Students' Activities</h1>
                            <p>
                                The Faculty has a number of students’ committees headed by the Vice Dean.
                                Each committee is headed by a faculty member in addition to a specialized
                                supervisor and five students in which one of them is the secretary of the
                                Committee. These committees propose the annual student activity programs that
                                are approved by the College Council. It is to be noted that the current
                                committees at the Faculty are:
                            </p>

                            <ul>
                                <li>Islamic Awareness Committee.</li>
                                <li>Cultural and Technical Committee.</li>
                                <li> Social Committee.</li>
                                <li>Sports Committee.</li>
                            </ul>
                        </div>

                        <div>
                            <h1>Student Clubs</h1>
                            <p>
                                The University has a set of clubs that satisfy all the needs of studentswhether
                                they are academic or for recreation.The Faculty sponsors the Computer Club which
                                offers courses in the different fields of computer and information technology.
                                The Deanship of Students Affairs also sponsors a variety of clubs including.
                            </p>

                            <ul>
                                <li>Computer Club</li>
                                <li>TechMasters Club</li>
                                <li>Programming Club</li>
                                <li>Designing Club</li>
                                <li>Documentation and Advertising Club</li>
                                <li>Organizing Club</li>
                                <li>IEEE Club</li>
                            </ul>

                        </div>

                        <div>
                            <h1>Competitions</h1>
                            <p>
                                The Faculty also organizes many competitions among college students,
                                such as: Public Cultural competition in which the departments of the
                                Faculty compete with each other, and the Faculty Star contest.
                                The students who represent the Faculty in public competitions at the
                                university level are selected through the talents that appear in these
                                competitions. Moreover, the Faculty organizes a sports competition in
                                football among college students in order to form the Faculty team who that
                                takes part in public sports competition held among the university colleges.
                            </p>
                        </div>



                    </div>
                </div>
            </tr>
            
            <tr>
                <div class="homeDiv">
                    <h1>How to contact us</h1>
                    <div>
                        <img src="image/contact.png" alt="contact us" width="600">
                        <p></p>
                        <a href="mailto:fcit@kau.edu.sa"><img src="image/icons8-mail-50.png" alt="email"></a>
                        <a href="https://www.facebook.com/groups/FCIT.KAU"><img src="image/icons8-facebook-50.png"
                                alt="facebook"></a>
                        <a href="https://twitter.com/FCITKAU"><img src="image/icons8-twitter-50.png" alt="twitter"></a>

                    </div>
                </div>
            </tr>
        </tbody>
    </table>

</body>
<footer>
    <nav id="footerNav">
        <p>CREATED BY Manar Hennawi
            <a href="Mhennawi0006@stu.kau.edu.sa">Mhennawi0006@stu.kau.edu.sa</a>,
            Amal Alsomali <a href="aalsomali0026@stu.kau.edu.sa">Aalsomali0026@stu.kau.edu.sa</a>,
            Lina Almansour <a href="Lalmansour0003@stu.kau.edu">Lalmansour0003@stu.kau.edu</a>,
            Rawan Alghamdi <a href="Ralghmadi0926@stu.kau.edu.sa">Ralghmadi0926@stu.kau.edu.sa</a>
        </p>
    </nav>
</footer>

</html>