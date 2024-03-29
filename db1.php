<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>CSC 227 Course</title>
    <style>

body{
    margin: 0;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    width: 100%;
}
#main-navbar{
    display: flex;
    width: 100%;
    background: black;
    padding-inline: 8px;
    justify-content: space-between;
    color: white;
    padding-bottom:20px ;
}
#main-navbar > div > h2{
    color: white;
    margin: 8px 12px 8px 12px;
    font-size: 2.2em;
}
#main-navbar > div > h2>span{
    color: orangered;
}
#main-navbar > div > p{
    color: white;
    margin: 5px 10px;
}
#main-navbar>ul{
    display: flex;
    gap: 20px;
    padding: 0;
    margin-right: 40px;
}
li{
    list-style-type: none;
}
a{
    text-decoration: none;
    color: white;
    transition: 0.2s;
}
a:hover{
    color: red;
}
#cover-img{
    width: 90%;
    height: 250px;
    margin: 30px 5%;
}
#articles{
    display: flex;
    width: 90%;
    margin-inline: 5%;
}
#articles h2{
    color: rgb(37, 37, 37);
}
#side-bar-menu{
    background: rgb(240, 240, 240);
    padding: 30px;
}
#search-bar{
    padding: 5px;
}
#side-bar-menu a{
    color: black;
}
#side-bar-menu > ul > li{
    margin-block: 5px;
    list-style-type:square;
}
#template-licence{
    padding: 20px;
}
#t-licence-body{
    display: flex;
}
#t-licence-body > img{
    width: 250px;
    height: 250px;
    background-size: cover;
}
#t-licence-body p{
    padding: 10px;
}
#t-licence-body div{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
#read-more{
    background-color: orangered;
    border: none;
    padding: 8px;
    font-weight: 600;
    width: 100px;
    align-self: flex-end;
    color: white;
    transition: 0.2s;
}
#read-more:hover{
    color: black;
}
.main{
    color: red;    
}

    </style>
</head>
<body>
    <nav id="main-navbar">
        <div>
            <h2>CSC 227 <span>Course</span></h2>
            <p>By Neche</p>
        </div>
        <ul>
            <li><a href="index.html" class="main">Home</a></li>
            <li><a href="support.html">Support</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="indexa.html">Sign Up</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
    <img id="cover-img" src="./night.jpg" alt="cover-img">
    <section id="articles">
        <section id="side-bar-menu">
            <input type="search" name="" id="search-bar" placeholder="Search">
            <h2>Sidebar Menu</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">TemplateInfo</a></li>
                <li><a href="#">Style Demo</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Archives</a></li>
            </ul>
        </section>
        <section id="template-licence">
            <h2>Template License</h2>
            <p>March 16, 2018 | Published by Neche | Filed under templates, internet</p>
            <div id="t-licence-body">
                <img src="./light.jpg" alt="image3">
                <div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam similique officia optio molestias autem tempore iste ratione, nihil at commodi ipsum sapiente adipisci expedita deserunt perspiciatis veritatis ea ipsa maxime eligendi. Animi perspiciatis sequi non laudantium culpa doloremque labore esse quidem recusandae sunt et tempora, voluptatum aliquam, quod ex. Error!</p>

                    <a id="read-more" href="./indexa.html">Read More</a>
                </div>
                
            </div>
        </section>
    </section>
</body>
</html>