<?PHP 
session_start();
header("Content-type: text/css");

switch ($_SESSION['style']) 
{
    case 'vermelho':
        
        $ColorBack = '#9E191E';
        $BorderSearch = 'red';

    break;
    
    default:
        $BorderSearch = '#00A28A';        
        $ColorBack = '#0CA38B';

    break;
}

?>
/*
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/
/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{ vertical-align:baseline;}/* vertical align baseline */
.vertical-top{  vertical-align:top;}/* vertical align top */
.underline{ padding-bottom:5px; border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{ display:block;}/* vertical menu */
nav.horizontal ul li{   display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
html{
    background: url(../images/light-bg.png);
}
body{
    font-family:Arial, Helvetica, sans-serif;
    background:url(../images/header-bg-<?php echo $_SESSION['style'] ?>.jpg) repeat-x;
}
.top-head{
    padding: 10px;
}
.top-nav{
    text-align: center;
}
.alert {
    padding: 5px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 8px;
}
.warning {
    padding: 5px;
    background-color: #ff9800; /* Red */
    color: white;
    margin-bottom: 8px;
}
.top-nav li a {
    color: #867070;
    font-size: 12px;
    margin: 0 5px;
}
.top-nav li a:hover{
    color:#fff;
}
.top-nav li{
    display:inline;
}
.table>tbody>tr>td, 
.table>tbody>tr>th{
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: middle;
    border-top: 1px solid 
}


.header{
    padding: 10px;
}
.search{
    border: 1px solid <?PHP echo $BorderSearch; ?>;
    background: #fff;
    width:95%;
}
.search input[type="text"]{
    background: none;
    padding:2px 5px;
    border: none;
    outline: none;
    color: #5E5E5E;
    -webkit-appearance: none;
    width: 80%;
}
.search input[type="submit"]{
    background: url(../images/search.png) no-repeat -1px 2px;
    padding:2px 10px;
    width: 16px;
    border: none;
    cursor: pointer;
    float:right;
}
/*--header---*/
#slider{
    text-align:center;
}
.logo{
    text-align: center;
}
.logo a{
    display:block;
    color:#444;
}
.nav{
    background: url(../images/nav-bg.jpg);
    text-align: center;
}
.nav li {
    display:inline-block;
    border-right:1px solid #000; 
}
.nav li a {
    color:#867070;
    font-size:11px;
    display:block;
    padding:8px;
    text-transform:uppercase;
}
.nav li.active a,
.nav li a:hover{
    color:#fff;
}
.main-body{
    background: #fff;
}
.content{
    float:left;
    border-right:1px solid #fff;
}
.slide img{
    padding: 12px;
    background: #fff;
    box-shadow: 0 0 8px #999;
    border-bottom: 1px solid #ffffff;
}
.slide{
    padding-bottom: 10px;
}
.hr{
    height: 2px;
    margin: 20px 0;
    background: url('../images/div.png') repeat-x;
}
/*--grids--*/
.grids{
    margin:15px 0;
    border-top:1px solid #eee; 
    padding-top: 10px;
    padding: 10px;
}
.grids li img{
    padding: 5px;
    box-shadow: 0px 0px 5px #CDCDCD;
}
.grids li img:hover{
    cursor:pointer;
    box-shadow: 0px 0px 5px #777;
}
.grids li{
    background: white;
    padding-bottom: 10px;
    border-radius: .3em;
}
.grids li:first-child{
    margin-left: 0;
}
.grids li.last{
    margin-right: 0;
}
.grids h3{
    color: <?PHP echo $ColorBack; ?>;
    padding: 10px 0 10px 0;
    background: #fff;
    font-size: 13px;
    text-transform: uppercase;
}
.h3St
{
    color: <?php echo $ColorBack; ?>;
}
    #button2{
    padding:10px 8px;
    font-size:14px;
    background:#27ae60;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
    #button1{
    padding:10px 8px;
    font-size:14px;
    background:#c0392b;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}

.grids p{
    color: #888;
    font-size: 12px;
    padding:8px 0;
    background: #fff;
    line-height: 1.5em;
}
.grids span{
    color: #555;
    border: none;
    margin:6px 0;
    font-size:18px;
    border-radius: 1.3em;
    background:none;
}
.grids span:hover{
    color: <?PHP echo $ColorBack; ?>;
    cursor: pointer;
}
.grids h4{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    text-transform: uppercase;
    background-color:<?PHP echo $ColorBack; ?>
    
}
.grids a{
    font-size: 12px;
    margin:0px 8px 10px 0px;
    text-transform:normal;
    background-color: <?PHP echo $ColorBack; ?>;
    padding:5px 7px;
    color:#fff;
}
.grids a:hover{
    text-decoration:underline;
}
/*footer*/
.footer-grids{
    padding: 10px;
}
.footer1{
    border-top:1px solid #999;
    background: url(../images/nav-bg.jpg);
}
.footer1 ul{
    margin:0px;
    padding:0px;
}
.footer-grid1{
    margin-bottom: 10px;
    text-align: center;
}
.footer-grid1 h3{
    color:#8A9997;
    font-size: 14px;
    text-transform: uppercase;
}
.footer-grid1 li{
    display: inline;
}
.footer-grid1 a{
    text-decoration: none;
    font-size: 12px;
    color: #867070;
    text-transform: none;
    line-height: 1.5em;
}
.footer-grid1 a:hover{
    color:#fff;
}
.footer-grid1 img:hover{
    opacity:0.7;
}
/*social icons*/
.footer-grid2 h3{
    color: #8A9997;
    font-size: 14px;
    text-transform: uppercase;
}
.footer-grid2{
    text-align: center;
}
.footer-grid2 a{
    text-decoration: none;
    font-size: 14px;
    color: #444;
    text-transform: none;
    display: block;
    margin: 0px 8px 0px 0px;
}
.footer-grid2 a:hover{
    color:#000;
}
.footer-grid2 img:hover{
    opacity:0.7;
}
.footer-grid2 ul{
    margin-top:10px;
}
.footer-grid2 ul li{
    display: inline-block;
}
/*-----end of footer-----*/

/*-----order------*/
.order h4,.order p{
    border-bottom:1px solid silver;
    padding:10px 0px;
    font-size:16px;
}
.order span{
    color: <?PHP echo $ColorBack; ?>;
}
.order h5{
    font-size:12px;
    color:#888;
    margin:5px 0px;
}
.order h5:hover{
    color: <?PHP echo $ColorBack; ?>;
    cursor: pointer;
}
.order li h3{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    text-transform: uppercase;
    background: url(../images/nav-bg.jpg);
}
.order li a{
    font-size: 12px;
    margin: 0px 8px 10px 0px;
    text-transform: normal;
    background-color: <?PHP echo $ColorBack; ?>;
    padding: 5px 7px;
    color: white;
    margin-top:20px;
    float:right;
}
.order li a:hover{
    text-decoration:underline;
}
/*-----order-cardapio------*/
.order-cardapio h4,.order p{
    border-bottom:1px solid silver;
    padding:10px 0px;
    font-size:16px;
}
.order-cardapio span{
    color: <?PHP echo $ColorBack; ?>;
}
.order-cardapio h5{
    font-size:12px;
    color:#888;
    margin:5px 0px;
}
.order-cardapio h5:hover{
    color: <?PHP echo $ColorBack; ?>;
    cursor: pointer;
}
.order-cardapio li h3{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    text-transform: uppercase;
    background: url(../images/nav-bg.jpg);
}
.order-cardapio li a{
    font-size: 12px;
    margin: 0px 8px 10px 0px;
    text-transform: normal;
    background-color: <?PHP echo $ColorBack; ?>;
    padding: 5px 7px;
    color: white;
    margin-top:20px;
    float:right;
}
.order-cardapio li a:hover{
    text-decoration:underline;
}
/*--boxes--*/
.boxes{
    margin-bottom: 2px;
    padding-bottom: 0px;
    margin: 15px 0;
    border-top: 1px solid #EEE;
    padding-top: 10px;
    padding: 10px;
}
.boxes-cardapio{
    margin: 0px 0;
    border-top: 1px solid #EEE;
    padding-top: 0px;
    padding: 0px;
}
.prev{
    float: left;
}
.prev img{
    width: 150px;
    padding-right: 10px;
}
.text{
    float: right;
    width: 138px;
}
.boxes li{
    display: inline;
    margin: 0 21px 0 0;
    background: white;
    padding-bottom: 10px;
    border-radius: .3em;
}
.boxes li:first-child{
    margin-left: 0;
}
.boxes li.last{
    margin-right: 0;
}
.boxes h3{
    color: <?PHP echo $ColorBack; ?>;
    background: #fff;
    font-size: 14px;
    text-transform: uppercase;
}
.boxes h4{
    color: #888;
    padding: 5px 0 5px 0;
    background: #fff;
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
}
.boxes p{
    color: #888;
    font-size: 12px;
    background: #fff;
    line-height: 1.8em;
}
.boxes button{
    color: #888;
    border: none;
    margin:8px 0;
    font-size: 10px;
    padding: 0;
    font-weight: bold;
    background: none;
}
.boxes button:hover{
    color: #34A300;
    cursor: pointer;
    text-decoration: underline;
}


/*--boxes-cardapio--*/
.boxes-cardapio{
    margin: 0px 0;
    border-top: 1px solid #EEE;
    padding-top: 10px;
    padding: 10px;
}
.prev{
    float: left;
}
.prev img{
    width: 150px;
    padding-right: 10px;
}
.text{
    float: right;
    width: 138px;
}
.boxes li{
    display: inline;
    margin: 0 21px 0 0;
    background: white;
    padding-bottom: 10px;
    border-radius: .3em;
}
.boxes li:first-child{
    margin-left: 0;
}
.boxes li.last{
    margin-right: 0;
}
.boxes h3{
    color: <?PHP echo $ColorBack; ?>;
    background: #fff;
    font-size: 14px;
    text-transform: uppercase;
}
.boxes h4{
    color: #888;
    padding: 5px 0 5px 0;
    background: #fff;
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
}
.boxes p{
    color: #888;
    font-size: 12px;
    background: #fff;
    line-height: 1.8em;
}
.boxes button{
    color: #888;
    border: none;
    margin:8px 0;
    font-size: 10px;
    padding: 0;
    font-weight: bold;
    background: none;
}
.boxes button:hover{
    color: #34A300;
    cursor: pointer;
    text-decoration: underline;
}

/*--gallery--*/
.grids-gallery{
    margin: 15px 0;
    border-top: 1px solid #EEE;
    padding-top: 10px;
    padding: 10px;
}
.gallery li{
    float:left;
}

/*--text-box--*/
.text-box{
    margin: 30px 0 60px 0; 
}
.text-box p{
    font-size: 16px;
    color: #666;
    line-height: 1.9em;
}
/*--feedback-mobile--*/
.feed2{
    padding:0px 0;
    margin-bottom:30px;
    width: 906px;
    font-family: 'Istok Web', sans-serif;
}
.feedback2{
    font-size:16px;
    padding-bottom:0;
    color:#464646;
    margin:30px 0 0 30px;
    margin-
}
.feedback2 input[type="text"]{
    width:250px;
    padding:8px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 50px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback2 input[type="password"]{
    width:250px;
    padding:8px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 50px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
.feedback2 select{
    width:250px;
    padding:8px;
        margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 50px;
    font-size:16px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}

.feedback2 input[type="submit"]:hover{
    background:#2E1A19;
    color: #fff;
}
    #button2{
    width:200px;
    padding:15px 8px;
    font-size:16px;
    background:#27ae60;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
#complement{
    width:120px;
    padding:8px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}
#number{
    width:80px;
    padding:8px;
    font-size:14px;
    color:#333;
    background:#eee;
    box-shadow: 0 0 6px #aaa;
    border:none;
    outline: none;
    font-family: 'Istok Web', sans-serif;
}

    #button3{
    width:250px;
    padding:15px 8px;
    font-size:16px;
    margin-right: 40px;
    background:#27ae60;
    border:none;
    font-size:16px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
    #button4{
    width:200px;
    padding:15px 8px;
    font-size:16px;
    background:#27ae60;
    border:none;
    font-size:16px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
    #button1{
    width:200px;
    padding:15px 8px;
    font-size:16px;
    background:#c0392b;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
.feedback2 input[type="submit"]{
    width:200px;
    padding:15px 8px;
    font-size:16px;
    background:#95a5a6;
    border:none;
    font-size:14px;
    color:#fff;
    cursor:pointer;
    font-family: 'Istok Web', sans-serif;
    -webkit-border-radius:.3em;
       -moz-border-radius:.3em;
            border-radius:.3em;
}
.feedback2 h1{
    font-size:18px;
    padding-bottom:10px;
    color:#464646;
    width: 400px;
}
.feedback2 table{
    border-collapse: collapse;
    width: 100%;
}
.feedback2 td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}
.feedback2 th {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}
.feedback2{
    font-size:16px;
    padding-bottom:0;
    color:#464646;
    margin:0 0 0 0px;
}
.feedback2 table img{
    padding: 2px;
    box-shadow: 0px 0px 2px #CDCDCD;
}

.feedback2 h4{
    color: #fff;
    padding: 10px 0 10px 10px;
    background: white;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
    background-color:<?php echo $ColorBack; ?>
}

.feedback2 h3{
    color: <?php echo $ColorBack; ?>;
    padding: 10px 0 10px 0;
    background: #fff;
    font-size: 13px;
    font-family: 'Libre Baskerville', serif;
    text-transform: uppercase;
}
/*--feedback--*/
.feed{
    padding:10px;
    margin-bottom:30px;
}
.feedback{
    font-size:16px;
    color:#464646;
}
.feedback h1{
    font-size:25px;
    padding-bottom:10px;
    color:#464646;
}
.feedback label{
    color: #222;
    font-size:12px;
}
.feedback span{ 
    display:block;
    padding:3px 0;
}
.feedback input[type="text"]{
    width:95%;
    padding:5px;
    font-size:12px;
    color:#333;
    background:#eee;
    border:none;
    outline: none;
    -webkit-appearance: none;
}
.feedback select{
    width:95%;
    padding:5px;
    font-size:12px;
    color:#333;
    background:#eee;
    border:none;
    outline: none;
    -webkit-appearance: none;
}
.feedback input[type="password"]{
    width:95%;
    padding:5px;
    font-size:12px;
    color:#333;
    background:#eee;
    border:none;
    outline: none;
    -webkit-appearance: none;
}
.feedback textarea{
    width:95%;
    height:100px;
    padding:5px;
    font-size:12px;
    background:#eee;
    border:none;
    color:#333;
    outline: none;
    resize: none;
    -webkit-appearance: none;
    font-family:Arial, Helvetica, sans-serif;
}
.feedback input[type="submit"]{
    padding:7px 10px;
    font-size:16px;
    background:#333;
    border:none;
    font-size:12px;
    color:#fff;
    cursor:pointer;
}
.feedback input[type="submit"]:hover{
    background:#2E1A19;
    color: #fff;
}
.map{
    margin-top:20px;
}
/*--Copy--*/
.copy{
    text-align:center;
    word-spacing:3px;
    padding-bottom:10px;
    color:#444;
    font-size:12px;
}
.copy a{
    color:#867070;
}
.copy a:hover{
    color: #fff;
    border-bottom:1px solid #867070;
}
/*----about----*/
.about-grid1 p{
    text-align:justify;
}
.about-grid1 img{
    background:#fffff;
    padding:5px;
}
.about-grid1 img:hover{
    box-shadow: 0px 0px 4px #cdcdcd;
    cursor:pointer;
}
/*-----gallery----*/
.gallery li img{
    background: #fff;
    padding: 0px;
    box-shadow: 0px 0px 5px #CDCDCD;
    display:block;
}
.gallery a{
    background-color:#fff;
    padding:5px;
}
