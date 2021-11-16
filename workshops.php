<html>

<head>
    <title>Workshops</title>
    <link rel="stylesheet" type="text/css" href="Mystyle.css">
</head>

<body>
    <header>
        <nav id="menu">
            <label class="logo"><a href="home.php"><img src="image/logo.png" alt="FCIT logo" height="77" width="60"></a></label>
            <ul>
                <li><a calss="active" href="home.php">Home</a></li>
                <li><a href="workshops.php">Workshops</a></li>

                <li>
                    <?php if (!isset($_SESSION['userEmail'])) {
                        echo "<a href='logout.php'>Logout</a>";
                    } else {
                        echo "<a href='login.php'>Login</a>";
                    } ?>
                </li>
            </ul>
        </nav>
    </header>
    <a class="active" href="HomePage.html">
        <img class="arrow" src="image/back-4.png" width="50px" height="50px"></a>
    <h1>Workshops available</h1>
    <table id="workshopTable" border="2px">
        <tbody>
            <tr>
                <td class="workshopsection" onmouseover="writeText('The ability to understand color can easily be broken down into logical methodical elements.br>First, we will learn how to mix what we see by defining a color in terms of hue, saturation,and value.<br>With this method, students will gain the capability to match any color with ease.<br>Next, we will discuss the use for a split primary palette,and the effects of transparent color.Students will understand the strengths and limitations of every color on and off their palette.', 'painting')">
                    <img src="image/painting.png" height="300" width="400">
                    <h2>Painting Workshop</h2>
                    <p id="painting">
                    </p>

                    <button id="paintingButt" onmouseup="changeColor(this,'white','#60B350')" onmousedown="changeColor(this,'orange','white')" type="button" onclick="return false"> Register</button>

                    <?php

                    session_start();
                    include 'func.php';
                    $title = 'Painting Workshop';
                    $seatNum = checkSeats($title);

                    if ($seatNum > 0) {
                        echo "Available seats: " . $seatNum;
                    } else {
                        echo "No available seats. ";
                    }
                    ?>
                </td>
                <td class="workshopsection" onmouseover="writeText('The workshop will include hands-on demonstrations with the camera as well as basic digital image editing techniques. <br> We will discuss the work of great photographers alongside your own photographs in order to better understand the fundamentals of composition to create compelling imagery.<br> Expect to leave the class with a project you are proud of and a working knowledge of your camera.','camera')">
                    <img src="image/Camera.png" height="300" width="400">
                    <h2>Photography Workshop</h2>
                    <p id="camera">
                    </p>
                    <button id="Photography" onmouseup="changeColor(this,'white','#60B350')" onmousedown="changeColor(this,'orange','white')">Register</button>
                </td>
            </tr>
            <tr>
                <td class="workshopsection" onmouseup="changeColor(this,'white','#60B350')" onmouseover="writeText('Whether you fancy learning something new for fun, you’re new to cake decorating and want to learn new skills or you’re a cake business owner and would like to take your skills to the next level we have something for you. <br> If you’d like to learn how to properly decorate a cake with sugarpaste fondant then this class is for you. It’s perfect for beginners and improvers.','cake')">
                    <img src="image/Cake.png" height="300" width="400">
                    <h2>Cake Decoration Workshop</h2>
                    <p id="cake">
                    </p>
                    <button id="cakeButt" onmouseup="changeColor(this,'white','#60B350')" onmousedown="changeColor(this,'orange','white')">Register</button>
                </td>
                <td class="workshopsection" onmouseover="writeText('Workshops emphasize poster design principles, appropriate sections for a research poster, presenting your poster, understanding your audience, and evaluating a poster.','poster')">
                    <img src="image/Design.png" height="300" width="400">
                    <h2>Poster Design Workshop</h2>
                    <p id="poster">
                    </p>
                    <button id="posterButt" onmouseup="changeColor(this,'white','#60B350')" onmousedown="changeColor(this,'orange','white')">Register</button>
                </td>
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
<script>
    function writeText(txt, id) {
        document.getElementById(id).innerHTML = txt;
    }

    function changeColor(button, color1, color2) {
        button.style.backgroundColor = color1;
        button.style.color = color2;

    }

    document.getElementById("cakeButt").addEventListener("click", function() {
        window.alert("succesfully registered in the cake workshop");
    });

    document.getElementById("posterButt").addEventListener("click", function() {
        window.alert("succesfully registered in the poster workshop");
    });

    document.getElementById("Photography").addEventListener("click", function() {
        window.alert("succesfully registered in the photography workshop");

    });

    document.getElementById("paintingButt").addEventListener("click", function() {
        <?php
    if (isset($_SESSION["userEmail"]) && $seatNum > 0) {
        if(!isset($_SESSION['isreg'])){
        updateSeat($seatNum, $title); 
        ?>
        window.alert("succesfully registered in the painting workshop");
        location.reload();
                

            <?php 
        }else{
            ?>
            window.alert("you already reg in one of the workshop");
            <?php
        }
    } else {
            ?>
            window.alert("you have to login!!");
        <?php
        }

        ?>
    });
</script>

</html>