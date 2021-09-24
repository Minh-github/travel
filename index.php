<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" id="home">
        <div class="header"> 
            <div class="logo">
                LOGO
            </div>
            <div class="demo"></div>
            <div class="nav__bar">
                <ul style="background: none;">
                    <li class="item"><a href="#home" style="background: none; text-decoration: none; color: inherit;">Home</a></li>
                    <li class="item"><a href="#footer" style="background: none; text-decoration: none; color: inherit;">About</a></li>
                    <li class="item">Contact</li>
                    <label for="check__search" class="item"><i class="far fa-search"></i></label>
                    <li class="item item_box">
                        <div class="box" onclick="myFun()">
                            <div class="block">
                                <i class="fas fa-sun sun"></i>
                                <i class="fal fa-moon moon"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <input type="checkbox" name="" hidden class="check__input" id="check__search">
                <label for="check__search" class="over__lay"></label>
                <div class="search">
                    <input type="text">
                    <i class="far fa-search"></i>
                </div>
            </div>
            <div class="icon" onclick="myFun4()">
                <i class="fas fa-bars open"></i>
            </div>
            <div class="nav_mobile">
                <i class="fas fa-times close" onclick="myFun2()"></i>
                <ul>
                    <div>Home</div>
                    <div>About</div>
                    <div>Contact</div>
                    <div>
                        <input type="text" placeholder="Tìm kiếm">
                    </div>
                </ul>
            </div>
        </div>
        <div class="warrper">
            <div class="content">
                <div class="one">
                    <ul>
                        <a href="#two" class="place">
                            <img src="">
                            <div class="text"></div>
                        </a>
                        <a href="#three" class="place">
                            <img src="">
                            <div class="text"></div>
                        </a>
                        <a href="#forth" class="place">
                            <img src="">
                            <div class="text"></div>
                        </a>
                    </ul>
                    <div class="choise">Travel Now</div>
                </div>
                <div class="row two" id="two">
                    <div class="father">
                    <div class="title"></div>
                    <div class="text">
                        <div class="column">
                            <div class="tag"></div>
                            <div class="info">
                            </div>
                        </div>
                        <div class="column">
                            <div class="tag"></div>
                            <div class="info">
                            </div>
                        </div>
                        <div class="column">
                            <div class="tag"></div>
                            <div class="info">
                                </div>
                        </div>
                        <div class="column">
                            <div class="tag"></div>
                            <div class="info">
                            </div>
                        </div>    
                    </div>
                </div>
                </div>
                <div class="row three" id="three">
                <div class="father">
                <div class="title" style="color: #434979; text-shadow: none;"></div>
                <div class="text">
                    <div class="column">
                        <div class="tag"></div>
                        <div class="info">
                        </div>
                    </div>
                    <div class="column">
                        <div class="tag"></div>
                        <div class="info">
                        </div>
                    </div>
                    <div class="column">
                        <div class="tag"></div>
                        <div class="info">
                        </div>
                    </div>
                    <div class="column">
                        <div class="tag"></div>
                        <div class="info">
                        </div>
                    </div>    
                </div>
            </div>
            </div>
                <div class="row forth" id="forth">
                <div class="father">    
                <div class="title"></div>
                <div class="text">
                    <div class="column">
                        <div class="tag"></div>
                        <div class="info">
                        </div>
                    </div>
                    <div class="column">
                        <div class="tag"></div>
                        <div class="info">
                        </div>
                    </div>
                    <div class="column">
                        <div class="tag"></div>
                        <div class="info">
                        </div>
                    </div>    
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="footer" id="footer">
            <div class="top">
                <div class="left">
                    <div class="end">
                    <div>
                        <div class="title">PHAM MINH</div>
                        <div class="text">Teardown</div>
                        <div class="text">News</div>
                        <div class="text">Partners</div>
                        <div class="text">About Us</div>
                        <div class="text">Contact to Us</div>
                        <div class="text">Team of Use</div>
                    </div>
                    <div>
                        <div class="title">Social</div>
                        <div class="text">Facebook</div>
                        <div class="text">Twitter</div>
                        <div class="text">Youtube</div>
                    </div>
                    <div>
                        <div class="title">Service</div>
                        <div class="text">Compare</div>
                        <div class="text">Download</div>
                        <div class="text">Feedback</div>
                        <div class="text">Bug Report</div>
                    </div>
                    <div>
                        <div class="title">Activity</div>
                        <div class="text">Influencer</div>
                        <div class="text">Affiliate</div>
                        <div class="text">Co-branding</div>
                        <div class="text">Honor</div>
                        <div class="text">Giveaway</div>
                    </div>
                    </div>
                </div>
                <div class="right">
                    <div class="title">Newsletter Subscription</div>
                    <div class="input">
                        <input type="text" placeholder="subscribe to our newsletter">
                        <div>subscribe</div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>Copyright© 2021 PHAMMINH. All rights reserved</p>
            </div>
        </div>
        <div class="gotoTop">
            <a href="#home">
                <i class="far fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <script src="text.js"></script>
    <script src="script.js"></script>
</body>
</html>