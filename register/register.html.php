<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="description"
        content="Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Open+Sans&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts.js"></script>
    <title>Register</title>
</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
    </script>

    <?php require_once("../includes/header.html.php"); ?>

    <main>

        <div id="wrapper">

            <div id="register-grid">

                <div id="register">

                    <h2>Register Here!</h2>

                    <form method="post" action=" ">
                        <label for="fullname">Full Name:</label><br>
                        <input type="text" id="fullname" name="fullname" class="register-inputs" required><br><br>

                        <label for="age">Age:</label><br>
                        <input type="number" id="age" name="age" class="register-inputs" required><br><br>

                        <label for="genders">Gender:</label><br>
                        <select id="genders" name="genders" class="register-inputs-selects">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="nonBinary">Non-binary</option>
                            <option value="other">Other</option>
                        </select><br><br>

                        <label for="role">Choose your role:</label><br>
                        <select id="role" name="roles" class="register-inputs-selects">
                            <option value="athlete">Athlete</option>
                            <option value="volunteer">Volunteer</option>
                        </select><br><br>


                        <label for="email">Email:</label><br>
                        <input type="text" id="email" name="email" class="register-inputs" required><br><br>

                        <label for="ename">Emergency Contact Name:</label><br>
                        <input type="text" id="ename" name="ename" class="register-inputs" required><br><br>

                        <label for="ephone">Emergency Contact Phone:</label><br>
                        <input type="tel" id="ephone" name="ephone" class="register-inputs" required><br><br>

                        <label for="eventsSaturday"><strong>Saturday</strong> Events:</label><br>
                        <select id="eventsSaturday" name="eventsSaturday" class="register-inputs-selects">
                            <option value="long">Long Course Triathlon 7:00 AM</option>
                            <option value="olympic">Olympic Triathlon 7:30 AM</option>
                            <option value="10k">10K 7:15 AM</option>
                            <option value="half">Half Marathon 7:15 AM</option>
                        </select><br><br>

                        <label for="eventsSunday"><strong>Sunday</strong> Events:</label><br>
                        <select id="eventsSunday" name="eventsSunday" class="register-inputs-selects">
                            <option value="spring">Sprint Triathlon 8:00 AM</option>
                            <option value="try-a-tri">Try-a-Tri 8:20 AM</option>
                            <option value="splash">Splash n Dash 12:00 PM</option>
                        </select><br><br>

                        <label for="accommodations">Any special accommodations needed:</label><br>
                        <textarea rows="12" cols="45" name="accommodations" id="accommodations"></textarea><br><br>
                        <input id="submit" type="submit" value="Submit">

                    </form>

                </div>

                <div id="fees">
                    <h3>Registration Fees</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th>Saturday</th>
                                <th>Saturday</th>
                                <th>Saturday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                                <th>Sunday</th>
                                <th>Sunday</th>
                            </tr>
                            <tr>
                                <td class="event">Long Course Triathlon</td>
                                <td class="event">Olympic Triathlon</td>
                                <td class="event">10K</td>
                                <td class="event">Half Marathon</td>
                                <td class="event">Sprint Triathlon</td>
                                <td class="event">Try-a-Tri</td>
                                <td class="event">Splash n' Dash(kids)</td>
                            </tr>
                            <tr>
                                <td>$240</td>
                                <td>$110</td>
                                <td>$50</td>
                                <td>$75</td>
                                <td>$90</td>
                                <td>$65</td>
                                <td>$25 or Free</td>
                            </tr>
                            <tr>
                                <td>7:00 AM</td>
                                <td>7:30 AM</td>
                                <td>7:15 AM</td>
                                <td>7:15 AM</td>
                                <td>8:00 AM</td>
                                <td>8:20 AM</td>
                                <td>12:00 PM</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

            <button onclick="topFunction()" id="up-button" title="Go to top">Top</button>

        </div>

    </main>

    <?php require_once("../includes/footer.html.php"); ?>

</body>

</html>