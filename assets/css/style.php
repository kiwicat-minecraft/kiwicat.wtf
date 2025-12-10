<?php header("Content-type: text/css"); ?>
<?php
$host = $_SERVER['HTTP_HOST'];

if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
    $base_path = '/kiwicat.wtf/';
} else {
    $base_path = '/';
}
?>

@font-face {
    font-family: Comic;
    src: url(assets/fonts/Comic_Neue/ComicNeue-Regular.ttf);
}

body{
    background-color: pink;
    background-image: url('<?= $base_path ?>assets/images/background_pink.webp');
    background-repeat: repeat-y;
}
.title{
    color: palevioletred;
    font-family: "Comic", Arial;
}
.icons{
    border-radius: 100%;
}
.text{
    border-style: solid;
    border-width: 3px;
    border-color: violet;
    border-radius: 20px;
    box-shadow: 3px 3px 3px;
    background-image: url(assets/images/background_purple.webp);
    margin: auto;
    margin-top: 25px;
    margin-bottom: 25px;
    display: flow-root;
    overflow: auto;
    text-shadow: 3px 3px 3px violet;
    margin-left: 30px;
    margin-right: 30px;
    padding: 10px;
    text-align: center;
}

#me{
    width: auto;
}

#kiwi{
    float: left;
    width: 10%;
}
#kiwi:hover{
    
    cursor: grab;
    animation-name: Bat;
    animation-duration: 1s;
}

#kiwi_review{
    float: right;
    display: inline;
    width: 10%;
}
#kiwi_review:hover{
    cursor: grab;
    animation-name: Bat;
    animation-duration: 1s;
}

.link{
    color: rgb(194, 49, 194);
    cursor: pointer;
    font-family: "Comic",Arial;
    text-decoration: none;
}

#link:hover{
    color: rgb(231, 73, 231);
    font-size: 1.1em;
    font-family: "Comic",Arial;
}

#link:visited{
    color: rgb(184, 87, 184);
    font-family: "Comic",Arial;
}

.imp{
    margin-top: auto;
}

.news{
    width: 96%;
    background-image: url(assets/images/background_blue.webp);
    border-style: solid;
    border-radius: 10px;
    margin: auto;
    margin-top: 25px;
    display: block;
    max-width: 1190px;
}

#newsb{
    max-width: 1100px;
}

#s_change{
    border-style: solid;
    display: block;
    width: 75%;
    border-color: black;
    
    background-image: url(assets/images/background_blue.webp);
    padding: 5px;
    border-radius: 15px;
    margin: auto;
    margin-top: 15px;
}
#s_change:hover{
    border-style: solid;
    display: block;
    width: 90%;
    border-color: black;
    margin-top: 10px;
    background-image: url(assets/images/background_purple.webp);
    padding: 10px;
    font-size: 20px;
    border-radius: 15px;
}
#s_change:active{
    border-style: solid;
    display: block;
    width: 90%;
    border-color: black;
    margin-top: 10px;
    background-image: url(assets/images/background_purple.webp);
    padding: 10px;
    font-size: 20px;
    border-radius: 15px;
}

#cat{
    border-style: solid;
    border-width: 2px;
    border-radius: 9px;
    background-image: url(assets/images/background_purple.webp);
    display: inline;
    min-width: fit-content;
}

.dropdown button{
    background-image: url(assets/images/background_blue.webp);
    color: black;
    padding: 10px 15px;
    border: solid;
    border-width: 2px;
    border-radius: 50px;
    cursor: pointer;
}
.dropdown a{
    display: block;
    color: black;
    text-decoration: none;
    padding: 10px 15px;
}
.dropdown .content{
    border-radius: 5px;
    display: none;
    background-image: url(assets/images/background_purple.webp);
    position: absolute;
    min-width: 100px;
    box-shadow: 2px 2px 5px black;

}
.dropdown:hover .content{
    display: block;
}

.dropdown:hover button{
    background-image: url(assets/images/background_purple.webp);
}
.dropdown a:hover{
    background-image: url(assets/images/background_blue.webp);
}
.dropdown{
    display: inline;
}

@keyframes Bat{
    100%{transform: rotateZ(360deg);}
}

#nyan_cat{
    height: 100px;
    display: inline;
    transform: rotateZ(100px);
    animation-name: nyan_cat;
    animation-duration: 5s;
    animation-iteration-count: infinite;
}

@keyframes nyan_cat{
    from{transform: translateX(-1000px);}
    100%{transform: translateX(2000px);}
}

.calculator{
    background-image: url(assets/images/background_green.webp);
    border-style: solid;
    border-radius: 10px;
    width: 300px;
    height: 350px;
    padding: 10px;
    margin: auto;
    align-items: center;
}

.c_button{
    width: 50px;
    height: 50px;
    font-size: 2em;
    background-image: url(assets/images/background_blue.webp);
    border-width: 1px;
    border-radius: 10px;
}
.c_button:hover{
    background-image: url(assets/images/background_purple.webp);
}
.c_row{
    padding-top: 10px ;
    display: block;
    margin: auto;
    
}

#c_in{
    margin-top: 30px;
    background-image: url(assets/images/background_blue.webp);
    border-style: solid;
    border-radius: 10px;
    border-width: 2px;
    height: 25px;
}

.nav_b{
    border: 2px solid;
    border-radius: 4px;
    padding: 3px;
    margin-left: auto;
    background-image: url(assets/images/background_blue.webp);
    text-decoration: none;
    color: black;
    width: 10%;
    height: 10%;
}
.nav_b:hover{
    background-image: url(assets/images/background_green.webp);
}
#navbar{
    border-radius: 0px;
    width: 90%;
    margin: auto;
    background-image: url(assets/images/background_purple.webp);
}

.review{
    border-radius: 8px;
    border-style: solid;
    border-width: 2px;
    background-image: url(assets/images/background_blue.webp);
    height: 50px;
    box-shadow: 3px 3px 3px;
    width: 230px;
    display: inline-block;
    margin: auto;
    padding: 6px;
    margin-top: 5px;
}

#review_icon{
    height: 50px;
    display: inline;
    position: absolute;
    transform: translateX(-50px);
}


.review_link{
    cursor: pointer;
    font-family: "Comic",Arial;
    text-decoration: none;
    color: black;
}

.review_link:hover{
    font-size: 1.1em;
    font-family: "Comic",Arial;
}

.review_link:visited{
    font-family: "Comic",Arial;
}
.spoiler{
    border-radius: 4px;
    background-color: black;
    text-shadow: none;
}

.spoiler:hover{
    background-color: white;
}