<?php

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=game_on", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$sql = "select * from item";

foreach($dbh->query($sql) as $row){
    echo $row['name'];
}

?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" media="all" href="stylesheet.css">
    <script type="text/javascript" src="jquery-2.1.4.min.js"></script>


</head>
<body>
<div id="nav">
    <div id="name1"><a href="index.php"><h1>Game<img id="on" src="pictures/on.png" alt="on" style="width:40px;height:40px;">n</h1></a></div>
    <div id="n4me">
        <h2>Home</h2>
    </div>
    <div class="right">
        <a href="SignUp.php"> <p id="su">Sign up</p></a>
        <a href="SignIn.php"><p id="si">Sign in</p></a>
        <a href="cart.php"><p id="ct">Cart</p></a>
        <div style="clear: both;"></div>
    </div>

</div>
<div id="row1">
    <div id="wrapper">
        <div id="first">
            <div id="item1">
                <p>Just Cause 3</p>
                <p>$60</p>
                <div id="slider-wrapper">
                    <div class="inner-wrapper">
                        <input checked type="radio" name="slide" class="control" id="Slide1"/>
                        <label for="Slide1" id="s1"></label>
                        <input type="radio" name="slide" class="control" id="Slide2"/>
                        <label for="Slide2" id="s2"></label>
                        <input type="radio" name="slide" class="control" id="Slide3"/>
                        <label for="Slide3" id="s3"></label>
                        <input type="radio" name="slide" class="control" id="Slide4"/>
                        <label for="Slide4" id="s4"></label>

                        <div class="overflow-wrapper">
                            <a class="slide1" href=""><img src="pictures/1.jpg"></a>
                            <a class="slide1" href=""><img src="pictures/jc31.jpg" width="350" height="444"></a>
                            <a class="slide1" href=""><img src="pictures/jc32.jpg" width="350" height="444"></a>
                            <a class="slide1" href=""><img src="pictures/jc33.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="second">
                <div id="item2">
                    <p>Star Wars: Battle Front 3</p>
                    <p>$60</p>
                    <div id="slider-wrapper">
                        <div class="inner-wrapper">
                            <input checked type="radio" name="slide" class="control" id="Slide5"/>
                            <label for="Slide5" id="s5"></label>
                            <input type="radio" name="slide" class="control" id="Slide6"/>
                            <label for="Slide6" id="s6"></label>
                            <input type="radio" name="slide" class="control" id="Slide7"/>
                            <label for="Slide7" id="s7"></label>
                            <input type="radio" name="slide" class="control" id="Slide8"/>
                            <label for="Slide8" id="s8"></label>

                            <div class="overflow-wrapper">
                                <a class="slide2" href=""><img src="pictures/2.jpg"></a>
                                <a class="slide2" href=""><img src="pictures/bf31.jpg" width="350" height="444"></a>
                                <a class="slide2" href=""><img src="pictures/bf32.jpg" width="350" height="444"></a>
                                <a class="slide2" href=""><img src="pictures/bf33.jpg" width="350" height="444"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="third">
                <div id="item3">
                    <p>Middle Earth: Shadow Of Mordor</p>
                    <p>$20</p>
                    <div id="slider-wrapper">
                        <div class="inner-wrapper">
                            <input checked type="radio" name="slide" class="control" id="Slide9"/>
                            <label for="Slide9" id="s9"></label>
                            <input type="radio" name="slide" class="control" id="Slide10"/>
                            <label for="Slide10" id="s10"></label>
                            <input type="radio" name="slide" class="control" id="Slide11"/>
                            <label for="Slide11" id="s11"></label>
                            <input type="radio" name="slide" class="control" id="Slide12"/>
                            <label for="Slide12" id="s12"></label>

                            <div class="overflow-wrapper">
                                <a class="slide3" href=""><img src="pictures/3.jpg"></a>
                                <a class="slide3" href=""><img src="pictures/md1.jpg" width="350" height="444"></a>
                                <a class="slide3" href=""><img src="pictures/md2.jpg" width="350" height="444"></a>
                                <a class="slide3" href=""><img src="pictures/md3.jpg" width="350" height="444"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="row2">
    <div id="wrapper">
        <div id="first">
            <div id="item4">
                <p>Dead Pool</p>
                <p>$30</p>
                <div id="slider-wrapper">
                    <div class="inner-wrapper">
                        <input checked type="radio" name="slide" class="control" id="Slide13"/>
                        <label for="Slide13" id="s13"></label>
                        <input type="radio" name="slide" class="control" id="Slide14"/>
                        <label for="Slide14" id="s14"></label>
                        <input type="radio" name="slide" class="control" id="Slide15"/>
                        <label for="Slide15" id="s15"></label>
                        <input type="radio" name="slide" class="control" id="Slide16"/>
                        <label for="Slide16" id="s16"></label>

                        <div class="overflow-wrapper">
                            <a class="slide4" href=""><img src="pictures/4.jpg"></a>
                            <a class="slide4" href=""><img src="pictures/dp1.jpg" width="350" height="444"></a>
                            <a class="slide4" href=""><img src="pictures/dp2.jpg" width="350" height="444"></a>
                            <a class="slide4" href=""><img src="pictures/dp3.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="second">
                <div id="item5">
                    <p> Grand Theft Auto: 5</p>
                    <p>$60</p>
                    <div id="slider-wrapper">
                        <div class="inner-wrapper">
                            <input checked type="radio" name="slide" class="control" id="Slide17"/>
                            <label for="Slide17" id="s17"></label>
                            <input type="radio" name="slide" class="control" id="Slide18"/>
                            <label for="Slide18" id="s18"></label>
                            <input type="radio" name="slide" class="control" id="Slide19"/>
                            <label for="Slide19" id="s19"></label>
                            <input type="radio" name="slide" class="control" id="Slide20"/>
                            <label for="Slide20" id="s20"></label>

                            <div class="overflow-wrapper">
                                <a class="slide4" href=""><img src="pictures/5.jpg"></a>
                                <a class="slide4" href=""><img src="pictures/gta51.jpg" width="350" height="444"></a>
                                <a class="slide4" href=""><img src="pictures/gta52.jpg" width="350" height="444"></a>
                                <a class="slide4" href=""><img src="pictures/gta53.jpg" width="350" height="444"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="third">
                <div id="item6">
                    <p>Call Of Duty: Black Ops 3</p>
                    <p>$60</p>
                    <div id="slider-wrapper">
                        <div class="inner-wrapper">
                            <input checked type="radio" name="slide" class="control" id="Slide21"/>
                            <label for="Slide21" id="s21"></label>
                            <input type="radio" name="slide" class="control" id="Slide22"/>
                            <label for="Slide22" id="s22"></label>
                            <input type="radio" name="slide" class="control" id="Slide23"/>
                            <label for="Slide23" id="s23"></label>
                            <input type="radio" name="slide" class="control" id="Slide24"/>
                            <label for="Slide24" id="s24"></label>

                            <div class="overflow-wrapper">
                                <a class="slide6" href=""><img src="pictures/bo3.jpg"></a>
                                <a class="slide6" href=""><img src="pictures/bo31.jpg" width="350" height="444"></a>
                                <a class="slide6" href=""><img src="pictures/bo32.jpg" width="350" height="444"></a>
                                <a class="slide6" href=""><img src="pictures/bo33.jpg" width="350" height="444"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="row3">
    <div id="wrapper">
        <div id="first">
            <div id="item7">
                <p>Fallout 4</p>
                <p>$60</p>
                <div id="slider-wrapper">
                    <div class="inner-wrapper">
                        <input checked type="radio" name="slide" class="control" id="Slide25"/>
                        <label for="Slide25" id="s25"></label>
                        <input type="radio" name="slide" class="control" id="Slide26"/>
                        <label for="Slide26" id="s26"></label>
                        <input type="radio" name="slide" class="control" id="Slide27"/>
                        <label for="Slide27" id="s27"></label>
                        <input type="radio" name="slide" class="control" id="Slide28"/>
                        <label for="Slide28" id="s28"></label>

                        <div class="overflow-wrapper">
                            <a class="slide7" href=""><img src="pictures/fo4.jpg"></a>
                            <a class="slide7" href=""><img src="pictures/fo41.jpg" width="350" height="444"></a>
                            <a class="slide7" href=""><img src="pictures/fo42.jpg" width="350" height="444"></a>
                            <a class="slide7" href=""><img src="pictures/fo43.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="second">
                <div id="item8">
                    <div id="slider-wrapper">
                        <div class="inner-wrapper">
                            <input checked type="radio" name="slide" class="control" id="Slide29"/>
                            <label for="Slide29" id="s29"></label>
                            <input type="radio" name="slide" class="control" id="Slide30"/>
                            <label for="Slide30" id="s30"></label>
                            <input type="radio" name="slide" class="control" id="Slide31"/>
                            <label for="Slide31" id="s31"></label>
                            <input type="radio" name="slide" class="control" id="Slide32"/>
                            <label for="Slide32" id="s32"></label>

                            <div class="overflow-wrapper">
                                <a class="slide8" href=""><img src="pictures/MGSV.jpg"></a>
                                <a class="slide8" href=""><img src="pictures/mg1.jpg" width="350" height="444"></a>
                                <a class="slide8" href=""><img src="pictures/mg2.jpg" width="350" height="444"></a>
                                <a class="slide8" href=""><img src="pictures/mg3.jpg" width="350" height="444"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="third">
                <div id="item9">
                    <div id="slider-wrapper">
                        <div class="inner-wrapper">
                            <input checked type="radio" name="slide" class="control" id="Slide33"/>
                            <label for="Slide33" id="s33"></label>
                            <input type="radio" name="slide" class="control" id="Slide34"/>
                            <label for="Slide34" id="s34"></label>
                            <input type="radio" name="slide" class="control" id="Slide35"/>
                            <label for="Slide35" id="s35"></label>
                            <input type="radio" name="slide" class="control" id="Slide36"/>
                            <label for="Slide36" id="s36"></label>

                            <div class="overflow-wrapper">
                                <a class="slide9" href=""><img src="pictures/twwh.jpg"></a>
                                <a class="slide9" href=""><img src="pictures/w1.jpg" width="350" height="444"></a>
                                <a class="slide9" href=""><img src="pictures/w2.jpg" width="350" height="444"></a>
                                <a class="slide9" href=""><img src="pictures/w3.jpg" width="350" height="444"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
