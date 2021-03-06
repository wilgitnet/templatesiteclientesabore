<?PHP 
session_start();
header("Content-type: text/css");
$banner = $_SESSION['banner1'];
$banner2 = $_SESSION['banner2'];
?>


/**
  * Name: Saboreweb
  * Version: 1.0
  * Author: Allan Santos
  * Author URI: http://www.allandss.com.br
*/

@import url("flexslider.css");

*,
*:before,
*:after {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}

body {
    font: 14px/24px "Source Sans Pro", sans-serif;
    background: #fff;
    color: #767676;
    -webkit-font-smoothing: antialiased !important;
}

a {
    color: #0B588D;
    text-decoration: none;
    -webkit-transition: all 0.3s ease-in-out;
       -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
}

a:hover,
a:focus {
    color: #443f3f;
    text-decoration: none;
    outline: 0;
    -webkit-transition: all 0.3s ease-in-out;
       -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
}

img {
    max-width: 100%;
    height: auto;
}

.img-left {
    margin: 0 33px 0 0 !important;
    float: left;
}

.img-right {
    margin: 0 0 0 33px !important;
    float: right;
}

strong {
    font-weight: 700;
}

.margint1 { margin-top: 10px; }
.margint2 { margin-top: 20px; }
.margint3 { margin-top: 30px; }
.margint4 { margin-top: 40px; }
.margint5 { margin-top: 50px; }
.margint6 { margin-top: 60px; }
.marginb1 { margin-bottom: 10px; }
.marginb2 { margin-bottom: 20px; }
.marginb3 { margin-bottom: 30px; }
.marginb4 { margin-bottom: 40px; }
.marginb5 { margin-bottom: 50px; }
.marginb6 { margin-bottom: 60px; }

h1, h2, h3, h4, h5, h6 {
    color: #443f3f;
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
    font-weight: inherit;
    color: #0B588D;
}

h1 { font: 52px/56px "Raleway", sans-serif;}
h2 { font: 42px/46px "Raleway", sans-serif;}
h3 { font: 32px/36px "Raleway", sans-serif;}
h4 { font: 25px/30px "Raleway", sans-serif;}
h5 { font: 22px/26px "Raleway", sans-serif;}
h6 { font: 18px/22px "Raleway", sans-serif;}

.text-color { color: #0B588D !important; }
.text-white { color: #fff !important; }
.text-dark { color: #443f3f !important;}

button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
    position: relative;
    display: inline-block;
    font-family: "Raleway", sans-serif;
    font-size: 14px;
    line-height: 24px;
    font-weight: 700;
    background-color: #d91d2d;
    padding: 12px 34px;
    color: #fff;
    text-transform: uppercase;
    border: 1px solid #d91d2d;
    -webkit-transition: all 0.3s;
       -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
         -o-transition: all 0.3s;
            transition: all 0.3s;
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
    background-color: #fff;
    color: #d91d2d;
    -webkit-box-shadow: 200px 0 0 0 #fff inset;
       -moz-box-shadow: 200px 0 0 0 #fff inset;
            box-shadow: 200px 0 0 0 #fff inset;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"] {
    color: #767676;
    background-color: #fafafa;
    border: 1px solid #dbdbdb;
    height: 50px;
    padding: 4px 20px;
    border-radius: 0;
    -webkit-transition: all 0.3s ease-in-out;
       -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus {
    border: 1px solid #0B588D;
    -webkit-box-shadow: none;
       -moz-box-shadow: none;
            box-shadow: none;
}

input, button, select, textarea {
    font-family: "Source Sans Pro",sans-serif;
}

textarea {
    width: 100%;
    height: 120px;
    padding: 15px 20px;
}

input[type="checkbox"] {
    display: inline;
}

input:-moz-placeholder,
textarea:-moz-placeholder,
input::-moz-placeholder,
textarea::-moz-placeholder {
  color: #a3a2a2;
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
  color: #c3c3c3;
}

input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
  color: #cacaca;
}

.orches-animation {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
}
.orches-animation.animated {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
}

@-webkit-keyframes pop-scale { 0% { -webkit-transform: scale(0.7) } 100% { -webkit-transform: scale(1) } }
@-moz-keyframes pop-scale { 0% { -moz-transform: scale(0.7) } 100% { -moz-transform: scale(1) } }
@keyframes pop-scale { 0% { transform: scale(0.7) } 100% { transform: scale(1) } }

@-webkit-keyframes pop-scale2 { 0% { -webkit-transform: scale(0.5) } 100% { -webkit-transform: scale(1) } }
@-moz-keyframes pop-scale2 { 0% { -moz-transform: scale(0.5) } 100% { -moz-transform: scale(1) } }
@keyframes pop-scale2 { 0% { transform: scale(0.5) } 100% { transform: scale(1) } }

/* Bootstrap Resetting Elements */
.btn {
    background-image: none;
}

textarea, 
input[type="text"],
input[type="submit"],
input[type="password"], 
input[type="datetime"], 
input[type="datetime-local"], 
input[type="date"], 
input[type="month"], 
input[type="time"], 
input[type="week"], 
input[type="number"], 
input[type="email"], 
input[type="url"], 
input[type="search"], 
input[type="tel"], 
input[type="color"], 
.uneditable-input,
.dropdown-menu,
.navbar .nav > .active > a, 
.navbar .nav > .active > a:hover, 
.navbar .nav > .active > a:focus {
    -webkit-appearance: none;
    text-shadow: none;
    -webkit-box-shadow: none;
       -moz-box-shadow: none;
         -o-box-shadow: none;
            box-shadow: none;
}

.color {
    color: #0B588D;
}

/* Header
-------------------------------------------------------------- */
.header {
    position: relative;
    z-index: 1000;
    background-color: transparent;
    padding: 20px 0;
    -webkit-transition: all 0.3s ease-out;
       -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
         -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
}

.header .col-md-2,
.header .col-md-10 {
    min-height: 0;
}

.header .logo {
    margin: 40px 0;
    float: left;
    -webkit-transition: all 0.3s ease-out;
       -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
         -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
}

.header .logo a {
    display: block;
    height: 100%;
}

.header .logo {
    width: 169px;
    height: 35px;
}

.header.header-sticky {
    position: relative;
    width: 100%;
    z-index: 1000;
}

.header.float-header {
    background-color: rgba(0,0,0,0.9);
}

.header.float-header #mainnav {
    padding: 0;
}

.header.float-header #mainnav > ul > li > a {
    height: 35px;
    line-height: 35px;
}

.header.float-header .logo {
    margin: 0;
}

/* Navigation */
#mainnav {
    display: block;
    float: right;
    padding: 27px 0 20px;
    -webkit-transition: all 0.3s ease-out;
       -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
         -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
}

#mainnav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#mainnav ul li {
    position: relative;
}

#mainnav > ul > li {
    display: block;
    float: left;
}

#mainnav > ul > li > a {
    position: relative;
    display: block;
    font-size: 14px;
    font-family: "Raleway", sans-serif;
    color: #fff;
    text-decoration: none;
    height: 60px;
    line-height: 60px;
    padding: 0 15px;
    outline: none;
}

#mainnav > ul > li > a.active,
#mainnav > ul > li > a:hover {
    color: #0B588D;
}

/* Submenu */
#mainnav ul.sub-menu {
    position: absolute;
    left: 0;
    top: 100%;
    width: 200px;
    background-color: #10101d;
    z-index: 9999;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    margin-top: 5px;
    visibility: hidden;
    -webkit-transition: all .2s ease-out;
       -moz-transition: all .2s ease-out;
        -ms-transition: all .2s ease-out;
         -o-transition: all .2s ease-out;
            transition: all .2s ease-out;
}

/* Right sub-menu */
#mainnav ul.right-sub-menu {
    left: auto;
    right: 0;
}

#mainnav ul li:hover > ul.sub-menu {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    margin-top: 0;
    visibility: visible;
}

#mainnav ul li ul li {
    margin-left: 0;
}

#mainnav ul.sub-menu li ul {
    position: absolute;
    left: 150px;
    top: 0;
}

#mainnav ul.sub-menu > li {
    border-top: 1px solid #24243d;  
}

#mainnav ul.sub-menu li:first-child {
    border-top: none;
}

#mainnav ul.sub-menu > li > a {
    display: block;
    color: #fff;
    text-decoration: none;
    padding: 6px 0 6px 20px;
    line-height: 35px;
    -webkit-transition: all .2s ease-out;
       -moz-transition: all .2s ease-out;
        -ms-transition: all .2s ease-out;
         -o-transition: all .2s ease-out;
            transition: all .2s ease-out;
}

#mainnav ul.sub-menu > li > a:hover,
#mainnav > ul > li > ul > li.active > a {
    color: #0B588D !important;
}

/* Mobile Navigation
---------------------------------------- */
#mainnav-mobi {
    display: block;
    margin: 0 auto;
    width: 100%;
    position: absolute;
    background-color: #000;
    z-index: 1000;
    margin-top: 20px;
}

#mainnav-mobi ul {
    display: block;
    list-style: none;
    margin: 0;
    padding: 0;
}

#mainnav-mobi ul li {
    margin:0;
    position: relative;
    text-align: left;
    border-top: 1px solid #24243d;
    cursor: pointer;
}

#mainnav-mobi ul > li > a {
    text-decoration: none;
    height: 50px;
    line-height: 50px;
    padding: 0 50px;
    color: #fff;
}

#mainnav-mobi ul.sub-menu {
    top: 100%;
    left: 0;
    z-index: 2000;
    position: relative;
    background-color: #161625;
}

#mainnav-mobi > ul > li > ul > li,
#mainnav-mobi > ul > li > ul > li > ul > li {
    position: relative;
    border-top: 1px solid #24243d;
}

#mainnav-mobi > ul > li > ul > li > ul > li a {
    padding-left: 70px !important
}

#mainnav-mobi ul.sub-menu > li > a {
    display: block;
    text-decoration: none;
    padding: 0 60px;
    border-top-color: rgba(255,255,255,0.1);
    -webkit-transition: all 0.2s ease-out;
       -moz-transition: all 0.2s ease-out;
         -o-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
}

#mainnav-mobi > ul > li > ul > li:first-child a {
    border-top: none;
}

#mainnav-mobi ul.sub-menu > li > a:hover,
#mainnav-mobi > ul > li > ul > li.active > a {
    color: #fff;
}

.btn-menu {
    float: right;
    font-size: 28px;
    font-family: "FontAwesome";
    color: #fff;
    text-align:center;
    width: 28px;
    height: 28px;
    margin-top: 36px;
    cursor: pointer;
    -webkit-transition: all 0.3s ease-out;
       -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
         -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
}

.btn-menu:before{
    content: "\f0c9";
}

.btn-submenu {
    position: absolute;
    right: 20px;
    top: 0;
    font: 20px/50px 'FontAwesome';
    text-align: center;
    cursor: pointer;
    width: 70px;
    height: 44px;
}

.btn-submenu:before {
    content: "\f107";
    color: #fff;
}

.btn-submenu.active:before {
    content: "\f106"
}

.btn-menu {
    display: none 
}

/* Parallax
-------------------------------------------------------------- */
.parallax {
    width: 100%;
    background-attachment: fixed;
    background-position: 50% 0;
    background-size: cover;
}

.parallax-bg1 { background-image: url(<?PHP echo $banner; ?>); height: 500px; }

.header-img { background-image: url(<?PHP echo $banner2; ?>); height: 150px; }


/* Fullscreen
-------------------------------------------------------------- */
#top-slider,
#page-slider {
    position: relative;
}

#page-slider {
    height: 250px;
}

#top-slider .overlay,
#page-slider .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 500px;
    background-color: #000;
    z-index: 10;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=75)";
    filter: alpha(opacity=75);
    opacity: 0.75;
}

.others-pages {
    height: 150px !important;
}

#top-slider .content {
    position: relative;
    padding-top: 0px;
    z-index: 20;
    text-align: center;
}

#top-slider .text-scroll {
    overflow: hidden;
    height: 90px;
    vertical-align: baseline;
}

#top-slider .text-scroll h1 {
    font-family: "Raleway", sans-serif;
    font-size: 80px;
    color: #fff;
    margin: 0px;
    height: 90px;
    line-height: 90px;
    margin-top: 0;
    text-shadow: 1px 1px 3px rgba(0,0,0,.3);
    -webkit-transition: margin-top 0.5s ease-in-out;
       -moz-transition: margin-top 0.5s ease-in-out;
        -ms-transition: margin-top 0.5s ease-in-out;
         -o-transition: margin-top 0.5s ease-in-out;
            transition: margin-top 0.5s ease-in-out;
}

#top-slider .load-video {
    position: absolute;
    background: url('../images/loading.gif');
    width: 32px;
    height: 32px;
    top: 50%;
    left: 50%;
    margin-top: -16px;
    margin-left: -16px;
    z-index: 12;
}

#top-slider.video-bg .buttonBar {
    opacity: 0;
}

/* Control Slider */
.control-slider {
    position: relative;
    z-index: 11;
    text-align: center;
    color: #fff;
    overflow: hidden;
    margin-top: 30px !important;
    padding-bottom: 100px !important;
}

.control-slider h2 {
    color: #fff;
    margin: 0;
    font-size: 48px;
    line-height: 53px;
}

.control-slider .divider {
    width: 370px;
    height: 1px;
    background-color: #0B588D;
    margin: 0 auto;
    margin-top: 10px;
    margin-bottom: 17px;
}

.control-slider .read-more {
    background-color: #0B588D;
    font-weight: 700;
    padding: 14px 54px;
    display: inline-block;
    color: #fff;
}

.control-slider p {
    font-size: 20px;
    font-family: 'Source Sans Pro', sans-serif;
    font-weight: 400;
    margin-bottom: 35px;
}

.control-slider p b {
    font-weight: 700;
}

.control-slider .flexslider {
    position: static;
}

.control-slider .flex-control-nav {
    bottom: 60px;
}

.contact-slider {
    padding: 13px 0;
    background-color: rgba(0,0,0,0.5);
    position: absolute;
    bottom: 20px;
    z-index: 999;
    color: #fff;
    width: 100%;
}

.contact-slider-inner {
    padding: 0  ;
}

.contact-slider-inner span {
    position: relative;
    padding: 0 0px 0 35px;
}

.contact-slider-inner span.address {
    padding-right: 0;
}

.contact-slider-inner span:before {
    color: #0B588D;
    font-family: "FontAwesome";
    font-size: 20px;
    left: 50px;
    position: absolute;
    top: -2px;
}

.contact-slider-inner span.serve:before {
content: "\f017";
}

.contact-slider-inner span.phone:before {
    content: "\f095";       
}

.contact-slider-inner span.address:before {
    content: "\f041";   
}

.contact-slider-inner span:after {
    background-color: #0B588D;
    content: "";
    height: 35px;
    left: -10px;
    position: absolute;
    top: -8px;
    width: 1px;
}

.contact-slider-inner span:first-child:after {
    width: 0;
}

/* Page Title
-------------------------------------------------------------- */
.page-title-container {
    background-color: #0B588D;
    color: #fff;
    font-family: "Raleway", sans-serif;
    font-weight: 700;
    padding: 13px 0;
}

.page-title {
    height: 100%;
}

.page-title .span6{
    float: none;
}

.page-title-wrapper {
    display: table;
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1;
}

.page-title-captions {
    display: table-cell;
    vertical-align: middle;
}

.page-title .breadcrumbs {
    display: table-cell;
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: right;
    vertical-align: middle;
}

.page-title h1 {
    font-size: 18px;
    color: #fff;
    font-weight: 700;
    line-height: normal;
}

.breadcrumbs ul {
    margin: 0;
}

.breadcrumbs ul li {
    display: inline;
}

.breadcrumbs ul li a {
    position: relative;
    display: inline-block;
    color: #fff;
    font-weight: normal;
    padding-right: 12px;
    margin-right: 1px;
}

.breadcrumbs ul li a:hover {
    text-decoration: underline;
}

.breadcrumbs ul li a:after {
    content: "/";
    color: #fff;
    position: absolute;
    right: 0;
    top: 0;
}

/* Pages
-------------------------------------------------------------- */
.page-wrap {
    padding: 83px 0 100px;
    background-color: #f5f5f5;
}

.entry-page p, 
.entry-post p {
    margin-bottom: 24px;
}

.entry-post img {
    margin: 10px 0 20px;
}

/* Blog
-------------------------------------------------------------- */
.blog-post .title-post {
    position: relative;
    font-size: 20px;
    font-weight: 700;
    line-height: normal;
    padding-bottom: 26px;
    margin-bottom: 24px;
}


.blog-post .feature-post {
    margin-bottom: 30px;
}

.blog-post .feature-post iframe {
    border: 0;
}

.blog-post .feature-post img {
    border: 3px solid #fff;
}

.blog-post .title-post:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 1px;
    background-color: #dbdbdb;
}

.blog-post .title-post:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 1px;
    background-color: #dbdbdb;
}

.blog-post blockquote {
    border-left: 2px solid #0B588D;
    padding: 23px 10px 25px 28px;
    margin: 3px 0 32px 0;
    font-size: 16px;
    font-style: italic;
    background-color: #fff;
}

.blog-post .meta-post {
    border-top: 1px solid #dbdbdb;
    border-bottom: 1px solid #dbdbdb;
    padding: 8px 0;
}

.blog-post .meta-post,
.blog-post .meta-post a {
    color: #767676;
    font-size: 12px;
}

.blog-post .meta-post a:hover {
    color: #0B588D;
}

.blog-post .meta-post .author a {
    font-weight: 700;
}

.blog-post .meta-post span {
    position: relative;
    padding-left: 20px;
    margin-right: 18px;
}

.blog-post .meta-post span:before {
    position: absolute;
    left: 0;
    top: 1px;
    font-family: "FontAwesome";
    line-height: normal;
    color: #0B588D;
}

.blog-post .meta-post span.author:before,
.blog-post .meta-post span.date:before,
.blog-post .meta-post span.comment:before,
.blog-post .meta-post span.categories:before {
    content:"\f007";
}

.blog-post .meta-post span.date:before {
    content:"\f133";
}

.blog-post .meta-post span.comment:before {
    content:"\f086";
}

.blog-post .meta-post span.categories:before {
    content:"\f02b";
}

.blog-post .post {
    margin-bottom: 50px;
}

.pagination {
    list-style: none;
    margin: 0;
    padding: 0;
}

.pagination li {
    width: 50px;
    height: 50px;
    background-color: #fff;
    border: 1px solid #dbdbdb;
    color: #0B588D;
    display: inline-block;
    margin-right: 7px;
    text-align: center;
    -webkit-transition: all 0.3s;
       -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
         -o-transition: all 0.3s;
            transition: all 0.3s;
}

.pagination li a {
    font-weight: 700;
    font-family: "Raleway";
    font-size: 18px;
    margin-top: 14px;
    display: inline-block;
}

.pagination li:hover,
.pagination li.active {
    border-color: #0B588D;
    background-color: #0B588D;
}

.pagination li:hover a,
.pagination li.active a {
    color: #fff;
}

/* Widgets
-------------------------------------------------------------- */
.sidebar .widget {
    margin-bottom: 27px;
}

.sidebar .widget-search {
    margin-bottom: 44px;
}

.widget .widget-title {
    font-size: 18px;
    color: #0B588D;
    font-weight: 700;
    padding-bottom: 23px;
    border-bottom: 1px solid #dbdbdb;
    margin-bottom: 0;
}

.widget ul li {
    padding: 15px 0;
    border-top: 1px solid #dbdbdb;
}

.widget ul li:first-child {
    border-top: 0;
}

.widget ul li a {
    color: #767676;
}

.widget-flickr .flickr-photos .thumb .overlay-pop,
.widget-recent-news .news .thumb .overlay-pop {
    height:100%;
    width:100%;
    position:absolute;
    left:0;
    top:0;
    background: url(../images/plus.svg) no-repeat center center;
    background-color: rgba(217,29,29,0.85);
    cursor: pointer;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    -webkit-transition: all 0.3s;
       -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
         -o-transition: all 0.3s;
            transition: all 0.3s;
}

.widget-flickr .flickr-photos .thumb:hover .overlay-pop,
.widget-recent-news .news .thumb:hover .overlay-pop {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    -webkit-animation: pop-scale2 0.3s 1 cubic-bezier(0.15, 0.85, 0.35, 1.5);
       -moz-animation: pop-scale2 0.3s 1 cubic-bezier(0.15, 0.85, 0.35, 1.5);
            animation: pop-scale2 0.3s 1 cubic-bezier(0.15, 0.85, 0.35, 1.5);
}

/* Widget Search */
.widget-search #search-form {
    position: relative;
    width: 100%;
    height: 50px;
    margin-bottom: 17px;
}

.widget-search .search-input {
    width: 100%;
    margin: 0;
}

.widget-search #search-form #search-submit {
    position: absolute;
    right: 2px;
    top: 2px;
    font-family: "FontAwesome";
    font-size: 18px;
    color: #c3c3c3;
    font-weight: normal;
    background-color: transparent;
    height: 46px;
    width: 46px;
    padding: 0;
    border: none;
    -webkit-transition: all 0.3s;
       -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
         -o-transition: all 0.3s;
            transition: all 0.3s;
}

.widget-search #search-form #search-submit:hover {
    background-color: transparent;
    color: #0B588D;
}

/* Widget Recent News */
.widget-recent-news .news li:before,
.widget-recent-news .news li:after {
    display: table;
    content:"";
    clear: both;

}

.widget-recent-news .news li {
    border: none;
    padding-top: 0;
    clear: both;
    margin-top: 17px;
    padding: 0;
}

.widget-recent-news .news li:first-child {
    margin-top: 25px;
}

.widget-recent-news .news li:last-child {
    margin-bottom: 35px;
}

.widget-recent-news .news .thumb {
    position: relative;
    width: 82px;
    height: auto;
    margin-right: 18px;
    margin-top: 7px;
    float: left;
}

.widget-recent-news .news h6 {
    font-size: 14px;
    font-weight: 700;
    line-height: 24px;
    margin: 0 0 2px;
}

.widget-recent-news .news h6:hover a {
    color: #0B588D;
}

.widget-recent-news .news p {
    line-height: 22px;
}

/* Widget Categories */
.widget-categories .categories li a {
    position: relative;
    display: block;
}

.widget-categories .categories li span {
    position: absolute;
    right: 0;
    top: 0;
}

.widget-categories .categories li a:hover {
    color: #0B588D;
}

/* Widget Tweets */
.widget-twitter .latest-tweets {
    padding-bottom: 17px;
}

.widget-twitter ul li {
    position: relative;
    padding: 0 0 0 40px;
    margin-top: 23px;
    border: none !important;
    line-height: 24px;
}

.widget-twitter ul li:before {
    content: "\f099";
    font-family: "Fontawesome";
    font-size: 22px;
    position: absolute;
    left: 0;
    top: 3px;
    color: #0B588D;
}

.widget-twitter ul li a {
    font-weight: 700;
    color: #767676;
}

/* Widget Flickr Photo */
.widget-flickr .flickr-photos {
    margin: 30px -3px 0;
}

.widget-flickr .flickr-photos li {
    float: left;
    margin: 0 3px 6px;
    padding: 0;
    position: relative;
    width: 63px;
    border: none;
}

/* Blog Single
-------------------------------------------------------------- */
.single-post .share-post {
    float: right;
}

.single-post .share-post .share {
    float: right;
    margin-right: 9px;
}

.single-post .share-post .socials {
    float: right;
}

.single-post .share-post .socials li {
    display: inline-block;
    padding: 0 10px;
}

.single-post .share-post .socials li i {
    font-size: 14px;
}

.single-post .author-post {
    margin-top: 50px;
}

.single-post .author-post .author-avatar {
    float: left;
    width: 160px;
    border: 3px solid #fff;
}

.single-post .author-post .author-info {
    background-color: #0B588D;
    color: #fff;
    padding: 26px 40px 21px;
    margin-left: 160px;
}

.single-post .author-post .name {
    margin-bottom: 16px;
}

.single-post .author-post .name h6 {
    font-size: 20px;
    font-weight: 700;
    display: inline-block;
    padding-right: 5px;
    margin: 0;
}

.single-post .author-post .name h6 a {
    color: #fff;
}

.single-post .author-info {
    position: relative;
}

.single-post .author-info ul {
    display: inline-block;
    position: absolute;
    right: 100px;
    bottom: -25px;
    list-style: none;
}

.single-post .author-info ul li {
    float: left;
    text-align: center;
    margin-right: 5px;
}

.single-post .author-info ul li a {
    display: block;
    width: 30px;
    height: 30px;
    line-height: 26px;
    background-color: #ededed;
    border: 2px solid #fff;
    color: #0B588D;
}

.single-post .author-info .intro {
    margin: 0;
}

.single-post .author-info ul li a:hover {
    background-color: #0B588D;
    color: #fff;
}

/* Comment Post */
.comment-post {
    margin-top: 90px;
}

.comment-post .comment-title {
    position: relative;
    font-size: 18px;
    font-weight: 700;
    color: #0B588D;
    padding-bottom: 22px;
    margin-bottom: 30px;
}

.comment-post .comment-title:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 1px;
    background-color: #ddd;
}

.comment-list {
    margin-left: 0;
}

.comment {
    clear: both;
    margin-bottom: 30px;
}

.comment-list .children {
    margin-left: 120px;
}

.comment .comment-avatar {
    float: left;
    width: 96px;
    margin-right: 22px;
    margin-top: 2px;
}

.comment .comment-detail {
    overflow: hidden;
    padding-left: 19px;
    border-left: 2px solid #0B588D;
}

.comment .comment-body {
    line-height: 24px;
    margin-top: -7px;
    margin-bottom: 23px;
}

.comment .comment-meta {
    position: relative;
    border-bottom: 1px solid #dbdbdb;
    border-top: 1px solid #dbdbdb;
    padding: 9px 0 8px 0;
}

.comment .comment-meta .comment-reply {
    font-family: "Raleway", sans-serif;
    line-height: 38px;
    font-size: 12px;
    font-weight: 700;
    position: absolute;
    right: 0;
    bottom: 0;
}

.comment .comment-meta span {
    position: relative;
    padding-left: 20px;
    margin-right: 18px;
    display: inline-block;
    font-size: 12px;
    font-family: "Raleway", sans-serif;
}

.comment .comment-meta .comment-author a {
    font-weight: 700;
    color: #767676;
}

.comment .comment-meta span:before {
    position: absolute;
    left: 0;
    top: 4px;
    font-family: "FontAwesome";
    line-height: normal;
    color: #0B588D;
}

.comment .comment-meta span.comment-author:before,
.comment .comment-meta span.comment-date:before,
.comment .comment-meta span.comment-website:before {
    content:"\f007";
}

.comment .comment-meta span.comment-date:before {
    content:"\f133";
}

.comment .comment-meta span.comment-website:before {
    content:"\f0ac";
}

.comment-respond {
    margin-top: 92px;
}

.comment-form .input-wrap.name,
.comment-form .input-wrap.website {
    width: 48.27%;
    float: left;
    margin-right: 3.44%;
}

.comment-form .input-wrap.website {
    margin-right: 0;
}

.comment-form .input-wrap input {
    width: 100%;
    margin-bottom: 30px;
    background-color: transparent;
}

.comment-form .textarea-wrap textarea {
    background-color: transparent;
}

.comment-form .submit-comment {
    text-align: right;
}

/* Footer
-------------------------------------------------------------- */
.footer.simple {
    padding: 95px 0;
    text-align: center;
    background-color: #fafafa;
}

.footer.simple .thanks {
    position: relative;
    font-size: 20px;
    font-weight: 700;
    padding-bottom: 13px;
    margin-bottom: 13px;
}

.footer.simple .thanks:after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    margin-left: -15px;
    width: 30px;
    height: 1px;
    background-color: #0B588D;
}

.footer.simple .copyr {
    color: #a8a8a8;
    margin-bottom: 0;
}

/* Botttom
-------------------------------------------------------------- */
.bottom {
    text-align: center;
    background-color: #f5f5f5;
    border-top: 1px solid #fff;
    padding: 48px 0 40px 0;
}

/* Elements
-------------------------------------------------------------- */
.notification_error {
    color: #0B588D;
}

.subscribe-form .notification_error {
    margin-top: 5px;
}

.notification_ok {
    color: #46b809;
}

.mail-subscribe.dark .notification_error {
    color: #fc6d6d;
}

.mail-subscribe.dark .notification_ok {
    color: #bbf999;
}

/* GoTop Button
-------------------------------------------------------------- */
.go-top {
    position: fixed !important;
    right: 12px;
    bottom: -45px;
    background-color: #0B588D;
    border: 1px solid #0B588D;
    color: #fff; 
    display: block;
    font-size: 22px;
    line-height: 35px;
    text-align: center;
    width: 40px;
    height: 40px;
    visibility: hidden;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    z-index: 9999;
    cursor: pointer;
    -webkit-transition: all 0.5s;
       -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
         -o-transition: all 0.5s;
            transition: all 0.5s;
}

.go-top:hover {
    color: #0B588D;
    -webkit-box-shadow: 200px 0 0 0 #fff inset;
       -moz-box-shadow: 200px 0 0 0 #fff inset;
            box-shadow: 200px 0 0 0 #fff inset;
}

.go-top.show {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    visibility: visible;
    bottom : 12px;
}

/* Media Queries
-------------------------------------------------------------- */
@media only screen and (min-width: 1930px) {
    .parallax {
        background-size: cover;
    }
}

/* Smaller than standard 1200 */
@media only screen and (max-width: 1199px) {
    .roll-menu .food-filter {
        padding-left: 0;
    }

    .roll-menu .food-filter li {
        width: 120px;
    }

    .roll-menu .food-filter li a {
        font-size: 12px;
    }

    .roll-blog-slider .roll-blog {
        width: 220px;
        margin: 0 10px;
    }

    .mail-subscribe {
        text-align: center;
        padding: 0;
    }

    .mail-subscribe .text {
        text-align: inherit;
        float: none;
        margin-bottom: 15px;
        margin-right: 0;
    }

    .mail-subscribe #subscribe-form {
        width: auto;
    }

    .mail-subscribe.dark #subscribe-form #subscribe-email,
    .mail-subscribe.dark #subscribe-form .input-wrap,
    .mail-subscribe.dark #subscribe-form .button-wrap {
        display: inline-block;
    }

    .mail-subscribe.dark #subscribe-form #subscribe-button {
        position: relative;
        display: inline-block;
        padding: 12px 34px 11px 34px;
        margin-left: 10px;
    }

    .roll-gallery.fullwidth .gallery-item {
        width: 25%;
    }

    .contact-slider {
        bottom: 10px;
        padding: 0;
    }

    .contact-slider-inner span {
        padding: 0 30px 0 35px;
        line-height: 30px;
    }

    .contact-slider-inner span:before {
        left: 0;
        top: 0;
        line-height: 20px;
    }

    .single-post .share-post .socials {
        margin-left: 0;
    }

    .single-post .share-post .share {
        margin-right: 5px;
        margin-left: 4px;
    }

    .single-post .share-post .socials li {
        padding: 0 7px;
    }

    .roll-event .event-detail {
        padding-left: 30px;
    }
}

/* Smaller than standard 980 */
@media only screen and (max-width: 979px) {
    .parallax {
        background-size: cover;
        background-attachment: scroll;
        background-position: top center!important;
    }

    .btn-menu {
        display: block ;
    }

    #header .socials-list,
    #mainnav {
        display: none;
    }

    .header-wrap .col-md-2,
    .header-wrap .col-md-10 {
        width: auto;
    }

    .control-slider p {
        margin-bottom: 70px;
    }

    .contact-slider-inner {
        text-align: center;
    }

    .contact-slider-inner span {
        padding: 0 70px 0 75px;
    }

    .contact-slider-inner span:before {
        top: 0;
        left: 50px;
    }

    .roll-menu .food-filter li {
        margin-bottom: 1px;
    }

    .roll-menu .food-wrap .food-item .food-detail .food-info {
        width: 80%;
    }

    .roll-menu .food-wrap .food-item .food-price,
    .roll-menu .food-wrap .food-item .food-rate {
        right: 10px;
    }

    .roll-menu .food-wrap .food-item .food-detail {
        padding-left: 120px;
    }

    .menu-section .span12 {
        padding: 70px 15px 70px !important;
    }

    .roll-menu .food-filter li {
        width: 110px;
    }

    .roll-gallery.fullwidth .gallery-item {
        width: 33.33%;
    }

    .events-section .offset1 {
        margin-left: 0;
    }

    .events-section .span10 {
        width: 100%;
    }

    .roll-event .event-detail {
        padding-left: 5px;
    }

    .roll-blog-slider .roll-blog {
        width: 98%;
        padding-left: 20px;
        margin: 0;
    }

    .roll-reserve .contact-form {
        padding: 20px 5px;
    }

    .contact-form .send-wrap input {
        padding: 8px 15px;
        font-size: 12px;
    }

    .notification_ok, 
    .notification_error { 
        margin-bottom: 15px 
    }

    .control-slider p {
        margin-bottom: 60px;
    }

    .blog-post .meta-post {
        float: left;
        width: 100%;
    }

    .blog-post .meta-post span {
        display: inline-block;
    }

    .blog-post .meta-post .comment,
    .single-post .share-post .socials {
        margin-bottom: 0;
    }

    .single-post .share-post {
        float: none;
        display: inline-block;
    }

    .blog-post .meta-post {
        padding-bottom: 0;
    }

    .blog-post .meta-post span:before {
        top: 5px;
    }

    .single-post .author-post .author-info {
        padding: 20px 30px 21px;
    }

    .widget-flickr .flickr-photos li {
        width: 50px;
    }
}

/* All Mobile Sizes */
@media only screen and (max-width: 767px) {
    body {
        padding: 0;
    }

    .roll-row {
        padding-left: 10px;
        padding-right: 10px;
    }

    .about-section {
        text-align: center;
    }

    .about-section .span6 p,
    .about-section .roll-icon-list {
        text-align: left;
    }

    .roll-gallery .gallery-filter li {
        margin-bottom: 1px;
    }

    .roll-gallery.fullwidth .gallery-item {
        width: 50%;
    }

    .roll-event .countdown {
        width: 100%;
    }

    .roll-reserve {
        margin-bottom: 30px;
    }

    .contact-slider-inner {
        padding: 0 10px;
    }

    .contact-slider-inner span {
        padding: 0 30px 0 35px;
        display: inline-block;
    }

    .contact-slider-inner span:before {
        left: 10px;
        top: 15px;
    }

    .contact-slider-inner span:after {
        top: 5px;
    }

    .roll-contact .contact-form {
        margin-top: 30px;
    }

    .page-title-container {
        padding: 0 10px;
    }

    .page-title-captions {
        width: 35%;
    }

    .single-post .share-post {
        float: right;
    }

    .blog-post .meta-post {
        text-align: center;
        padding-bottom: 8px;
    }

    .pagination {
        margin-bottom: 30px;
    }

    .page-wrap {
        padding-left: 10px;
        padding-right: 10px;
    }

    .single-post .author-post {
        text-align: center;
    }

    .single-post .author-post .author-avatar {
        float: none;
        display: inline;
    }

    .single-post .author-post .author-info {
        margin-left: 0;
        text-align: left;
    }
}

/* Mobile Landscape Size */
@media only screen and (min-width: 480px) and (max-width: 767px) {

}

/* Mobile Portrait Size */
@media only screen and (max-width: 479px) {
    .header .logo {
        margin: 0 0 0 10px;
    }

    .btn-menu {
        margin-top: 0;
        margin-right: 5px;
    }

    .control-slider {
        margin-top: 10px !important;
        padding: 0 0 50px 0 !important;
    }

    .control-slider .divider {
        width: 200px;
    }

    .control-slider p {
        margin-bottom: 30px;
    }

    .control-slider h2 {
        font-size: 30px;
        line-height:  40px;
    }

    .contact-slider-inner span {
        padding: 0 0 0 35px;
        line-height: 20px;
    }

    .contact-slider-inner span:before {
        top: 0;
    }

    .contact-slider-inner span:after {
        width: 0;
    }

    .contact-slider {
        bottom: 0;
    }

    .control-slider .flex-control-nav {
        display: none;
    }

    .roll-menu .food-wrap .food-item {
        text-align: center;
    }

    .roll-menu .food-wrap .food-item .food-thumb {
        float: none;
        display: inline-block;
    }

    .roll-menu .food-wrap .food-item .food-detail {
        padding: 0 0 5px 0;
    }

    .roll-menu .food-wrap .food-item .food-detail .food-info {
        width: 100%;
    }

    .roll-menu .food-wrap .food-item .food-price,
    .roll-menu .food-wrap .food-item .food-rate {
        position: relative;
    }

    .roll-menu .food-wrap .food-item p.food-price {
        top: 0;
        right: 0;
        margin-top: 10px;
    }

    .roll-menu .food-wrap .food-item .food-rate {
        bottom: 0;
        margin-left: 0;
        right: 0;
        margin-top: 5px;
    }

    .roll-gallery .gallery-filter li {
        width: 135px;
    }

    .roll-gallery.fullwidth .gallery-item,
    .roll-reserve .input-wrap.date, 
    .roll-reserve .input-wrap.people,
    .roll-blog-slider .roll-blog,
    .mail-subscribe #subscribe-form #subscribe-email,
    .roll-event .event-thumb {
        width: 100%;
    }

    .roll-event .event-detail {
        padding-right: 5px;
    }

    .roll-blog-slider .roll-blog {
        padding: 10px;
    }

    .roll-blog-slider {
        margin: 0;
    }

    .mail-subscribe.dark #subscribe-form .input-wrap {
        width: 100%;
        padding: 0 10px;
        margin-bottom: 5px;
    }

    .mail-subscribe.dark #subscribe-form #subscribe-button {
        margin-left: 0;
    }

    .roll-icon-list .icon {
        margin-right: 10px;
    }

    .roll-menu .food-filter li {
        width: 122px;
    }

    .roll-menu .food-filter li a {
        font-size: 14px;
    }

    .roll-reserve {
        padding: 10px;
    }

    .single-post .share-post {
        float: none;
    }

    .pagination {
        text-align: center;
    }

    .pagination li {
        margin-bottom: 1px;
    }

    .single-post .author-post .author-info {
        padding: 20px 15px 30px;
    }

    .single-post .author-info ul {
        margin-left: 0;
        right: 0;
        text-align: center;
        width: 100%;
    }

    .single-post .author-info ul li {
        float: none;
        display: inline-block;
    }

    .comment .comment-avatar {
        width: 50px;
        margin-right: 5px;
    }

    .comment .comment-detail {
        padding-left: 5px;
    }

    .comment-list .children {
        margin-left: 55px;
    }
}

/* Retina Devices */
@media only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {

}



.logo-img {
    max-height: 110px;
    width: auto !important;
}

 .logo {
margin-top: 0px !important;
}

.border-right-color {
    border-right: 1px solid #0B588D;
}


.icon-banner-color {
    color: #0B588D;
    margin-right: 10px;
}

.img-user-logado {
    margin-right: -15px;
}

.img-user {
    width: 30px;
    height: 30px;
    border-radius: 15px;
    border: 2px solid #0B588D;
    margin-right: 5px; 
}

.img-user-logado a{
    padding-left: 50px !important;
    padding-right: 5px !important;
}

.img-name-logado a{
    padding-left: 0px !important;
}

.title-home {
    text-align: center;
    color: #0B588D;
    font-weight: bold;
    padding-top: 50px;
    font-family: 'Montserrat', sans-serif;
    font-size: 25px;
}

.sub-title-home {
    font-size: 16px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: Montserrat;
    font-weight: 700;
    font-style: normal;
}

.content{
    background: #f0eee9;
}

.nz-separator{
    width:100%;  
    margin-top:10px; 
    margin-bottom:15px; 
}

.description {
    width: 100%;
    min-height: 155px;
    background: #FFF;
    padding: 20px 20px 20px 0px;
    float: left;
}

.more-buy {
    box-shadow: 0px 0px 1px 1px #ddd;
    float: left;
}

.name-product {
    font-family: 'Montserrat';
    font-size: 18px;
    color: #333;
}

.ingredientes-produto {
    font-size: 15px;
    min-height: 60px;
}

.ingredientes-produto-home {
    font-size: 15px;
    min-height: 48px;
}


.preco {
    color: #0B588D;
    font-family: 'Montserrat';
    float: right;
    font-size: 20px;
    margin-top: 8px;
}

.add-pizza{
    width: 40px;
    height: 40px;
    margin: 0 auto;
    background: #0B588D;
    color: #fff;
    border-radius: 20px;
}

.mgT50 {
    margin-top: 50px;
}

.acordion {
    cursor: pointer;
    width: 100%;
    margin-bottom: 5px;
    position: relative;
    font-size: 14px;
    text-transform: uppercase;
    color: #444;
    background-color: #f9f8f6;
    background-image: url(../images/texture.png);
    background-repeat: repeat;
    background-position: left top;
    display: block;
    padding: 15px 80px 15px 20px;
    width: 100%;
    border: 1px solid #e0e0e0;
}

.opcoes-cardapio{
    color: #333;
    font-family: 'Montserrat';
    font-size: 18px;
}

.arrow-acordion {
    display: block;
    font-weight: bold;
    font-size: 16px;
    text-align: center;
    width: 20px;
    height: 20px;
    text-align: center;
    position: absolute;
    top: 50%;
    margin-top: -10px;
    right: 20px;
    box-shadow: inset 0 0 0 2px #e0e0e0;
}


.arrow-acordion {
    display: block;
    font-weight: bold;
    font-size: 16px;
    text-align: center;
    width:20px;
    height: 20px;
    text-align: center;
    position: absolute;
    top: 50%;
    margin-top: -10px;
    right: 20px;
    box-shadow: inset 0 0 0 2px #e0e0e0;
}


.arrow-acordion:before,
.arrow-acordion:after {
    width: 10px;
    height: 2px;
    background-color: #e0e0e0;
    content: "";
    display: block;
    position:absolute;
    top: 50%;
    margin-top: -1px;
    left: 50%;
    margin-left:-5px;
}

.arrow-acordion:after {
    width: 2px;
    height: 10px;
    margin-top: -5px;
    margin-left: -1px;
}

.meus-pedidos {
    width: 100%;
}

.meus-pedidos th{
    padding: 15px;
    background-color: #0B588D;
    color: #FFF;
    font-family: Montserrat;
    text-align: center;
    font-size: 16px;
}

.meus-pedidos td {
    border: 1px solid #eaeaea;
    background-color: #fff;
    padding: 15px;
}

.carrinho-valor{
    float: right;
    color: #0B588D;
    font-family: 'Montserrat';
    float: right;
    font-size: 18px;
}

.sub-titulo-carrinho {
    color: #333;
    display: inline;
    font-family: 'Montserrat';
    font-size: 18px;
}

.buy{
    float: left;
    font-family: 'Montserrat';
    font-size: 16px;
    color: #FFF;
    background-color: #0B588D;
    padding: 7px 14px;
}

.finalizar-pedido{
    float: left;
    font-family: 'Montserrat';
    font-size: 16px;
    color: #FFF;
    background-color: #0B588D;
    padding: 7px 14px;
    margin-top: 10px;
    margin-left: 2px;
}

a:hover{
    color: #fff;
}

.footer{
    width: 100%;
    min-height: 380px;
    background: #0B588D;
    color: #FFF;
    padding-top: 60px;
}

.content{
    padding-bottom: 120px;
}

/*Sign */

.sign {
  float:left;
  width: 100%;
  border: 5px solid #fff;
  padding: 0.15em 1em .65em;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.4), 0 5px 10px rgba(0, 0, 0, 0.4);
  background-color: #333;
  border-radius: 15px;
}

.sign p {
  text-transform: uppercase;
  font-weight: bold;
  color: #fff;
  text-align: center;
  text-shadow: 0 0 2px rgba(0,0,0,1);
  margin: 0 auto;
  line-height: normal;
}

.sign:before {
  position: absolute;
  content: "";
  border: 2px dotted #444;
  border-bottom: none;
  border-left: none;
  width: 100px;
  height: 100px;
  top: -55px;
  left: 50%;
  margin-left: -50px;
  transform: rotate(-45deg);
  border-radius: 0 5px 0 0;
}

.sign:after {
  position: absolute;
  content: "";
  width: 10px;
  height: 10px;
  border-radius: 50%;
  top: -75px;
  left: 50%;
  margin-left: -4px;
  background: #4c4c4c;
}



.list-footer{
    list-style: none;
    padding: 0px !important;
}



.footer-widget-area a:not(.button):not(.ui-slider-handle),
.sidebar a:not(.button):not(.ui-slider-handle) {
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
}

.widget {
    padding-bottom: 50px;
}

.widget_title {
    margin-bottom: 25px;
    padding-bottom: 5px;
    font-weight:400;
    font-size: 20px;
    line-height: 30px;
    position:relative;
    text-transform: uppercase;
    font-family: 'Montserrat';

    color: #FFF;
}

.footer .widget_title {
    color: #fff;
    font-size: 14px;
}

.widget_title:after,
.widget_title:before {
    content: "";
    display: block;
    position: absolute;
    bottom: -1px;
    left: 0px;
    width: 70px;
    background-color: #FFF;
    height: 1px;
}

.widget_title:before {
    bottom: -4px;
    left: 10px;
    background-color: #FFF;
}

.border-footer {
    border-bottom: 1px solid #c1c1c1;
}

.footer > .container{
    padding-bottom: 55px;
}

.copyrights {
    text-align: center;
    font-size: 14px;
    line-height: 60px;
}

.list-footer li {
        font-family: 'Montserrat';
    font-size: 13px;
    text-transform: uppercase;
    padding: 5px 0px;
}

.social-links{
    margin-top: 15px;
}

.social-links a {
    display: inline-block;
    width: 36px;
    height: 36px;
    line-height: 36px;
    font-size: 14px;
    text-align: center;
    color: #999 !important;
    border:1px solid #e0e0e0;
    margin: 0 4px 3px 0;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    overflow: hidden;
}

.social-links a {
    color: #ffffff !important;
    border:1px solid #ffffff;
}

.more-buy-carpadio{
    background: #FFF;
    box-shadow: 0px 0px 1px 1px #ddd;
    margin-bottom: 20px;
}

.pdL0{
    padding-left: 0px !important;
}

.preco-two {
    color: #0B588D;
    font-family: 'Montserrat';
    float: left;
    font-size: 22px;
    margin-top: 8px;
}

.buy-two {
    float: right;
    font-family: 'Montserrat';
    font-size: 16px;
    color: #FFF;
    background-color: #0B588D;
    padding: 7px 14px;
    margin-top: 9px;
}

.comprar {
    margin-top: 20px;
}

.img-product-cardapio{
    min-height: 155px;
}

.contact-form input {
    width: 100%;
    margin-bottom: 20px;
    font-family: 'Raleway';
}

.contact-form textarea {
    width: 100%;
    margin-bottom: 10px;
    font-family: 'Raleway';
}

.button-contact-form{
    width: 200px !important;
}

.title-send-message h2 {
    font-size: 17px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: 'Montserrat';
    font-weight: 700;
    font-style: normal;
    margin-top: 15px;
}

.title-send-message p {
    font-family: 'Raleway';
}

.title-info-contact {
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 0px;
}

.info-contact h2 {
    font-size: 17px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: 'Montserrat';
    font-weight: 700;
    font-style: normal;
    margin-top: 0px !important;
    margin-bottom: 20px;
}

.info-contact h4 {
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 0px;
}

.info-contact p {
    font-family: 'Raleway';
    margin-bottom: 15px;
    font-size: 15px;
}


.pdL70 {
    padding-left: 70px;
}

.title-contact {
    text-align: left;
    color: #0B588D;
    font-weight: bold;
    padding-top: 50px;
    font-family: 'Montserrat', sans-serif;
    font-size: 28px;
}


.mgT0 {
    margin-top: 0px !important;
}

.maps {
    height: 250px;
    width: 100%;
    background: #FFF;
}

.pdB60 {
    padding-bottom: 60px !important;
}
    .nz-breadcrumbs {
        padding: 7px 0;
        position: relative;
        background-color: #fff;
        text-align: right;
        z-index: 79;
    }

    .nz-breadcrumbs {
        background-color: #f0eee9;
    }

    .header-img + .nz-breadcrumbs:after {
        background: url(../images/zigzag_top_grey.png) repeat-x left bottom;
    }

    .nz-breadcrumbs > .container > a {
        color: #999;
        text-transform: uppercase;
        font-size: 12px;
        padding-right: 20px;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        position: relative;
        font-family: Montserrat;
    }

        .nz-breadcrumbs > .container > span {
        color: #999;
        text-transform: uppercase;
        font-size: 12px;
        padding-right: 20px;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        position: relative;
        font-family: Montserrat;
    }

        .nz-breadcrumbs > .container > i {
        padding-right: 20px;
        color: #0B588D;
    }

    .nz-breadcrumbs a {
        color: #999 !important;
    } 

    .nz-breadcrumbs > .container > *:after {
        left: 8px;
    }

    .nz-breadcrumbs > .container > :first-child:before,
    .nz-breadcrumbs > .container > :first-child:after {
        display: none;
    }

    .nz-breadcrumbs:after {
        content: "";
        display: block;
        width: 100%;
        height: 8px;
        position: absolute;
        left: 0;
        bottom: -8px;
        background: url(../images/zigzag_top.png) repeat-x left bottom;
    }

.content-checkout {
    background: #FFF !important;
    padding-bottom: 100px;
}

.table-cart {
    width: 100%;
    max-width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    margin-top: 20px;
}

.table-cart tr {    
    border: 1px solid #e1e1e1;
}

.table-cart thead {
    line-height: 50px;
    font-family: 'Montserrat';
    font-size: 13px;
}

.product-type ul{
    list-style: none;
    width: 150px;
    margin: 0px !important;
    padding: 0px 0px 0px 50px !important;
}

.product-type {
    width: 150px;
    padding-top: 25px !important;
}

.product-type-th {
    padding-left: 50px;
}


.product-remove-th {
    width: 130px;
    text-align: center;
}

.product-remove {
    text-align: center;
}

.product-thumbnail a img {
    padding: 5px;
    height: 100px;
    width: 120px !important;
}

.product-thumbnail {
    width: 120px !important;
    display: block;
    border: 0 none !important;
}

.options-cart {
    width: 100%;
    height: 50px;
    border: 1px solid #e1e1e1;
    margin-top: -1px;
    padding-left: 50px;
}

.options-cart h6 {
    display: inline-block;
    font-size: 13px;
    font-family: 'Montserrat';
    margin-right: 50px;
    font-weight: bold;
    color: #777;
}

.options-cart p {
    display: inline-block;
}

.cart-next {
    width: 100%;
    height: 50px;
    border: 1px solid #e1e1e1;
    margin-top: -1px;
    padding-left: 50px;
    background: #eee;
    margin-bottom: 20px;
}

.cart-next h5 {
    text-align: right;
    margin-right: 20px;
    font-family: 'Montserrat';
}

.cart-next span{
    color: #0B588D;
    margin-left: 20px;
}

.list-footer li a  {
    color: #FFF !important;
}

.limpar-carrinho {
    float: left;
}

.dados-de-entrega {
    float: right;
    background: #6dab3c !important;
    border: 1px solid #6dab3c !important;
}

.dados-de-entrega:hover {
    color: #6dab3c !important;
}

.cart-header h4 {
    font-size: 19px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: 'Montserrat';
    font-weight: 700;
    font-style: normal;
    margin-top: 50px;
    margin-bottom: 30px;
    float: left;
}

.cart-header select{
    float: right;
    margin-top: 40px;
    width: 200px;
    text-align: center;
    height: 45px;
}

.product-thumbnail-th {
    width: 150px;
}

.login {
    max-width: 400px;
    margin: 120px auto;
}

.login input {
    width: 100%;
}


.login label {
    font-size: 15px;
    line-height: 26px;
    font-family: 'Raleway';
    font-weight: 400;
    margin-bottom: 0px !important;
    margin-top: 10px;
}

.login .button {
    margin-top: 15px;
}

.login h4 {
    color: #0B588D;
    text-align: center;
    font-weight: bold;
}

.login h5 {
    font-size: 16px;
    text-align: center;
    margin-top: 50px;
    color: #767676;
}

.login h5 a{
    color: #0B588D !important;
}

.login h5 a:hover{
    color: #0B588D !important;
}

.remember{
    width: 15px !important;
    margin-top: 15px !important;
    display: inline-block;
    float: left;
}

.text-remember {
    float: left;
    margin-top: 8px;
    margin-left: 5px;
}

.request-password {
    float: right;
    margin-top: 10px;
}

.request-password:hover {
color: #0B588D;
}

.alert {
    padding:20px 70px 20px 20px;
    position: relative;
    border-width:1px;
    border-style: solid;
    margin-bottom: 25px;
    border-radius: 0px !important;
    margin-top: 15px;
}

.alert.error {
    border-color:#e1a197;
    background: #fcd4cb;
    color: #8e4438;
}

.alert.error .close-alert {
    color: #8e4438;
}
.alert .close-alert {
    position: absolute;
    top: 20px;
    right: 20px;
    cursor: pointer;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border-radius: 3px;
}

.register h4 {
    font-size: 22px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: 'Montserrat';
    font-weight: 700;
    font-style: normal;
    margin-top: 50px;
    margin-bottom: 25px;
    text-transform: uppercase;
}

.register p {
    font-size: 15px;
}

.register p a{
    color: #0B588D;
}

.register label {
    display: block;
    font-size: 15px;
    line-height: 26px;
    font-family: 'Raleway';
    font-weight: 400;
    margin-bottom: 0px !important;
    margin-top: 15px;
    margin-left: 1px;
}

.register input {
    width: 100%;
    height: 40px;
}

.register select {
    width: 100%;
    height: 40px;
}

.required {
    color: #0B588D;
}

.register input[type="checkbox"] {
    display: inline-block;
    height: 15px;
    width: 15px;
    margin-right: 5px;
    float: left;
    margin-left: 1px;
}

.register input[type="radio"] {
    display: inline-block;
    height: 15px;
    width: 15px;
    margin-right: 5px;
    float: left;
    margin-left: 1px;
}


.options-checkbox {
    float: left;
    line-height: 20px;
    margin-right: 15px;
}

.options-radio {
    float: left;
    line-height: 20px;
    margin-right: 15px;
}

.newsletter-register {
    width: 100%;
    float: left;
    margin-top: 20px;
}

.register input[type="button"] {
    height: 50px;
    width: 300px;
}

.mT30 {
    margin-top: 30px !important;
}

.title-data-delivery {
    font-size: 19px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: 'Montserrat';
    font-weight: 700;
    font-style: normal;
    margin-top: 50px;
    margin-bottom: 30px;
}

.data-delivery label {
    display: block;
    font-size: 15px;
    line-height: 26px;
    font-family: 'Raleway';
    font-weight: 400;
    margin-bottom: 0px !important;
    margin-top: 15px;
    margin-left: 1px;
}

.data-delivery input[type="text"] {
    width: 90%;
}

.label-number {
    width: 34% !important;
    display: inline-block !important;
}

.input-number {
    width: 30% !important;
}

.label-complement {
    width: 56% !important;
    display: inline-block !important;
    margin-left: 4%;
}

.input-complement {
    width: 56% !important;
    margin-left: 4%;
}



.btn-next {
    float: right;
    background: #6dab3c !important;
    border: 1px solid #6dab3c !important;
    margin-right: 10%;
    margin-top: 40px;
}

.btn-next:hover {
    color: #6dab3c !important;
    background-color: #FFF !important;
}

.btn-red {
    margin-top: 40px;
}

.money {
    background-color: #87b960;
    width: 190px;
    height: 100px;
    border-radius: 5px;
}

.money span {
    width: 70px;
    height: 70px;
    display: block;
    margin-top: 15px;
    border: 4px solid #fff;
    float: left;
    margin-left: 60px;
    line-height: 65px;
    text-align: center;
    border-radius: 40px;
    font-size: 40px;
    color: #FFF;
}

.cart-deb {
    height: 100px;
}

.cart-cred {
    height: 100px;
    
}

.money-option {
    width: 190px;
    margin: 0 auto;
}

.cred {
    width: 190px;
    margin: 0 auto;
}

.options-checkout {
    background: #f2f2f2;
    width: 100%;
    float: left;
    padding: 40px 20px 20px 20px;
    margin-bottom: 40px;
}

.deb {
    width: 190px;
    margin: 0 auto;
}


.sub-title-money {
    color: #87b960;
    font-family: 'Montserrat';
    font-size: 17px;
    margin-top: 14px;
    text-align: center;
}

.sub-title-cred {
    color: #e7a414;
    font-family: 'Montserrat';
    font-size: 17px;
    margin-top: 14px;
    text-align: center;   
}

.sub-title-deb {
    color: #009bdb;
    font-family: 'Montserrat';
    font-size: 17px;
    margin-top: 14px;
    text-align: center;   
}

.troco p {
    font-family: 'Montserrat';
    font-size: 18px;
    color: #333;
    text-transform: uppercase;
    display: inline-block;
    margin-right: 20px;
}

.troco input {
    width: 200px !important;
    margin-bottom: 40px;
    height: 45PX;
}

.title-info {
    font-size: 19px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: 'Montserrat';
    font-weight: 700;
    font-style: normal;
    margin-top: 50px;
    margin-bottom: 30px;
    text-transform: uppercase;
}

.table-historic {
    width: 100%;
    max-width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    margin-top: 20px
}

.historic-table th {
    text-align: center !important;
}

.historic-table td {
    text-align: center !important;
    line-height: 50px;
}

.historic-table thead {
    background: #eee;
}

.pdB150 {
    padding-bottom: 150px;
}

.botao-voltar {
    margin-top: 20px;
}

.cart-next h6 {
    text-align: left;
    margin-right: 20px;
    font-family: 'Montserrat';
    display: inline-block;
    line-height: 50px;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-left: 20px;
}

.info-pedido h3{
    font-family: 'Montserrat';
    font-size: 16px;
    text-align: left;
    margin-bottom: 0px;
    margin-top: 0px;
    line-height: 18px;
}

.info-pedido h4{
    font-family: 'Montserrat';
    font-size: 16px;
    text-align: right;
    margin-bottom: 0px;
    margin-top: 0px;
    line-height: 18px;
}

.info-pedido h5{
    font-family: 'Montserrat';
    font-size: 16px;
    text-align: right;
    margin-top: 10px;
    margin-bottom: 0px;
}

.info-pedido {
    padding: 20px;
    background: #f1f1f1;
    border: 1px solid #e1e1e1;
    margin-top: -1px;
}

.info-pedido h4 span{
    width: 100px;
    display: inline-block;
    color: #0B588D;
    font-size: 20px;
}

.info-pedido h5 span{
    width: 100px;
    display: inline-block;
    color: #444;
    font-size: 20px;
}

.info-cliente i {
   color: #333;
    margin-right: 5px;
    font-size: 16px;
    margin-left: 2px;

}

.info-cliente p {
    display: inline;
    margin-right: 30px;
    font-size: 14px;
    font-family: 'Montserrat';
}

.about {
    margin-top: 50px;
}

.about h4 {
    font-size: 22px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: 'Montserrat';
    margin-top: 50px;
    margin-bottom: 30px;
}

.about img {
    width: 342px;
    margin: 0 auto;
    display: block;
}

.itens-produto-home {
    float: left;
    margin-bottom: 20px;
}

.description-home {
    width: 100%;
    min-height: 155px;
    background: #FFF;
    padding: 20px 20px 20px 20px;
    float: left;
}


.carrinho-vazio h3 {
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
    background-color: #eee;
    margin-top: 0px !important;
    padding: 20px;
    border: 1px solid #ddd;
}

.dados-de-entrega:hover {
    background-color: #FFF !important; 
}

@media only screen and (max-width: 479px) {
    #mainnav-mobi {
        margin-top: 35px !important;
    }
    .logo-img {
        max-height: 70px;
    }
    .btn-menu {
        margin-top: 15px;
    }
    .content-slider {
    margin-top: 20px;
    }
    .header-img {
        height: 110px;
    }
    .others-pages {
     height: 110px !important;
    }
    .sub-title-home {
        text-align: center;
    }

    .product-type ul {
    width: 120px;
    padding: 0px 0px 0px 37px !important;
    }
    input[type="submit"] {
    width: 100%;
    margin-bottom: 13px;
    }

    .contact-slider-inner span {
    padding-left: 0px !important;;
    }

    .info-cliente p {
        display: block;
    }
    
    .info-pedido h4 {
      text-align: left;
      margin-top: 10px;
    }

    .about {
        margin-top: 0px;
    }

    .about img {
    margin-top: 40px;
    }

    .title-info {
    margin-top: 35px;
    }
}


@media only screen and (max-width: 689px) {
    .cart-header select {
    display: none;
    }
}


@media only screen and (max-width: 991px) {
    .border-right-color {
    border-right: none;
    }

    .contact-slider-inner span {
    height: 30px;
    }
    .control-slider p{
    margin-bottom: 20px;
    }
    .description {
    padding-left: 20px;
    }

    .logo-img {
        padding-left: 15px;
    }

    .btn-menu {
    margin-right: 15px;
    }

    .cart-header h4 {
    font-size: 17px;
    line-height: 17px;
    margin-top: 30px;
    
    }

    .cart-header select {
    margin-top: 15px;
    margin-bottom: 15px;
    }
    
    .data-delivery input[type="submit"] {
    width: 100%;
    padding: 16px 34px;
    }

   .data-delivery input[type="button"] {
    width: 100% !important;
    margin-top: 15px;
    margin-bottom: 30px;
    float: left;
    padding: 16px 34px;
    }

    .data-delivery input[type="text"] {
        width: 100%;
    }

    .data-delivery input[type="password"] {
        width: 100% !important;
    }

    .input-complement {
    width: 65% !important;
    }

    .title-data-delivery {
    font-size: 17px;
    line-height: 17px;
    margin-top: 30px;
    }

    .options-checkout .col-md-4 {
        margin-bottom: 30px;
    }

    .data-delivery .buttons-cart {
        margin-bottom: 70px;
        min-height: 100px;
        float: left;
        width: 100%;
    }

    .info-contact {
        padding-left: 0px;
        margin-top: 80px;
    }

    .title-contact {
        padding-top: 20px;
        font-size: 23px;
    }

    .two-grid-register {
    margin-top: 40px;
    }

}

@media only screen and (max-width: 1199px){
    .contact-slider{
    padding: 10px 0px !important;
    }
            
}


.table-responsive {
    margin-bottom: 0px !important;
    border: 0px none;
}

.table-cart {
    margin: 0px !important;
}

.table {
    margin: 0px !important;
}

.table > tbody > tr > td {
    padding: 0px;
}

.table > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 1px solid #ddd !important;
    line-height: 25px;
}

.historic-table > tbody > tr > td {
    line-height: 50px !important;
    padding: 0px 5px;
}

.product-type-th {
    text-align: center !important;
}

.product-name {
    line-height: 90px !important;
    padding: 0px 15px !important;
}

.product-name-th {
    padding-left: 15px !important;
}

.product-price {
    line-height: 90px !important;
    padding: 0px 15px !important;
}

.product-price-th {
    padding-left: 15px !important;
    padding-right: 15px !important;
}

.product-remove {
    line-height: 90px !important;
    padding: 0px 15px !important;
}

.product-remove-th {
    padding-left: 15px !important;
    padding-right: 15px !important;
}

.data-delivery input[type="password"] {
    width: 90%;
}

.mensagem-escolha-pagamento {
    margin: 20px 0px;
}

.valor-total-compra {
    margin-bottom: 20px;
}

.valor-total-compra p{
    display: inline;
    font-size: 18px;
    font-family: 'Montserrat';
    text-transform: uppercase;
    color: #222;
}

.status-pedido {
    margin-top: 10px;
    font-size: 15px;
    color: #555;
}

.info-cliente {
    margin-bottom: 15px;
}

.title-register {
    font-size: 22px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    font-family: 'Montserrat';
    font-weight: 700;
    font-style: normal;
    margin-top: 50px;
    margin-bottom: 20px;
    float: left;
    text-transform: uppercase;
}

.button-regiter {
    width: 230px;
    margin-top: 30px;
    float: right;
}

.mgT30 {
    margin-top: 30px;
}

.confirmar-add {
    border-radius: 0px !important;
}

.confirmar-add h4{
    font-size: 16px;
    color: #0B588D;
    line-height: 26px;
    text-align: left;
    font-family: Montserrat;
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;
}

.confirmar-add p{
    font-family: 'Montserrat';
    font-size: 17px;
    color: #777;
}

.modal-confirma-add {
    margin-top: 15% !important;
}

.finalizar-compra {
    background-color: #6dab3c;
    border-color: #6dab3c;
    padding: 5px 15px;
    font-size: 14px;
    font-family: "Raleway", sans-serif;
}

.finalizar-compra:hover {
    color:  #6dab3c;
}

.continuar-comprando {
    padding: 5px 15px;
    font-size: 14px;
    font-family: "Raleway", sans-serif;
}

.search-grid {
    margin-bottom: 30px;
}

.search-grid input {
    width: 100%;
}

/* Browser Resets */
.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus  {outline: none;}
.slides,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none;} 

/* FlexSlider Necessary Styles
*********************************/ 
.flexslider {margin: 0; padding: 0;}
.flexslider .slides > li {display: none; -webkit-backface-visibility: hidden;} /* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider .slides img {max-width: 100%; display: block;}
.flex-pauseplay span {text-transform: capitalize;}

/* Clearfix for the .slides element */
.slides:after {content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;} 
html[xmlns] .slides {display: block;} 
* html .slides {height: 1%;}

/* No JavaScript Fallback */
/* If you are not using another script, such as Modernizr, make sure you
 * include js that eliminates this class on page load */
.no-js .slides > li:first-child {display: block;}


/* FlexSlider Default Theme
*********************************/
.flexslider {margin: 0; position: relative; zoom: 1;}

.flex-viewport {
   max-height: 2000px; 
    -webkit-transition: all 0.2s ease-out;
       -moz-transition: all 0.2s ease-out;
         -ms-transition: all 0.2s ease-out;
          -o-transition: all 0.2s ease-out;
              transition: all 0.2s ease-out;
}

.loading .flex-viewport {max-height: 300px;}

.flexslider .slides {zoom: 1;}

/* Direction Nav
*********************************/
.flexslider .flex-direction-nav a {
   text-align: center;
   display: inline-block;
   width: 50px;
   height: 50px;
   outline: 0;
   opacity: 1;
   z-index: 99;
   background-color: #0B588D;
   color: #fff;
   top: 50%;
   margin-top: -25px;
   opacity: 0;
}

.flexslider:hover .flex-direction-nav a {
   opacity: 1;
}

.flexslider .flex-direction-nav a:hover,
.flexslider .flex-direction-nav a:focus {
   text-decoration: none;
}

.flexslider .flex-direction-nav .flex-prev {
   position: absolute;
   left: 27px;
}

.flexslider .flex-direction-nav .flex-next {
   position: absolute;
   right: 27px;
}

.flexslider .flex-direction-nav .flex-next:before {
   position: absolute;
}

.flexslider .flex-direction-nav .flex-prev:hover {
  opacity: 1;
}

.flexslider .flex-direction-nav .flex-next:hover {
  opacity: 1;
}

.flexslider .flex-direction-nav li a i {
  margin-top: 17px;
}

.flexslider .flex-direction-nav li a.flex-next {
  margin-left: 2px;
}

.flexslider .flex-direction-nav li a.flex-prev {
  margin-right: 2px;
}

.flexslider .flex-direction-nav a:hover {
  background-color: #fff;
  border: 1px solid #dbdbdb;
  color: #0B588D;
}

/* Control Nav
*********************************/
.flex-control-nav {
    width: 100%;
    text-align: center;
    position: absolute;
    left: 0;
    bottom: 20px;
    height: 12px;
    overflow: hidden;
}

.flex-control-nav li {
    margin: 0 0 0 10px;
    display: inline-block;
}

.flex-control-nav li:first-child {
    margin:0;
}

.flex-control-nav li a {
    width: 10px;
    height: 10px;
    display: block;
    cursor: pointer;
    border-radius: 50%;
    border: 2px solid #0B588D;
    background-color: transparent;
    text-indent: 9999px;
}

.flex-control-nav li a.flex-active {
    border: 2px solid #0B588D;
    background: #0B588D;
}

.GhostIn, .FromTop, .FromRight, .FromBottom, .FromLeft, .roll-bounceInDown, .roll-bounceOutDown,
.roll-bounceInLeft, .roll-bounceInRight, .roll-tada, .roll-zoomIn, .roll-zoomOut {opacity: 0; transition: all 0.3s ease-in-out; -webkit-transition: all 0.3s ease-in-out;}

.flexslider li.flex-active-slide .GhostIn {opacity: 1;}

.flexslider li .FromTop {transform: translateY(-100%); -o-transform: translateY(-100%); -ms-transform: translateY(-100%); -webkit-transform: translateY(-100%);}
.flexslider li.flex-active-slide .FromTop {opacity: 1; transform: translateY(0); -o-transform: translateY(0%); -ms-transform: translateY(0); -webkit-transform: translateY(0);}

.flexslider li .FromBottom {transform: translateY(100%); -o-transform: translateY(100%); -ms-transform: translateY(100%); -webkit-transform: translateY(100%);}
.flexslider li.flex-active-slide .FromBottom {opacity: 1; transform: translateY(0); -o-transform: translateY(0); -ms-transform: translateY(0); -webkit-transform: translateY(0);}

.flexslider li .FromLeft {transform: translateX(-100%); -o-transform: translateX(-100%); -ms-transform: translateX(-100%); -webkit-transform: translateX(-100%);}
.flexslider li.flex-active-slide .FromLeft {opacity: 1; transform: translateX(0); -o-transform: translateX(0); -ms-transform: translateX(0); -webkit-transform: translateX(0);}

.flexslider li .FromRight {transform: translateX(100%); -o-transform: translateX(100%); -ms-transform: translateX(100%); -webkit-transform: translateX(100%);}
.flexslider li.flex-active-slide .FromRight {opacity: 1; transform: translateX(0); -o-transform: translateX(0); -ms-transform: translateX(0); -webkit-transform: translateX(0);}

.captionDelay1 {transition-delay: 0.1s; -webkit-transition-delay: 0.1s;}
.captionDelay2 {transition-delay: 0.2s; -webkit-transition-delay: 0.2s;}
.captionDelay3 {transition-delay: 0.3s; -webkit-transition-delay: 0.3s;}
.captionDelay4 {transition-delay: 0.4s; -webkit-transition-delay: 0.4s;}
.captionDelay5 {transition-delay: 0.5s; -webkit-transition-delay: 0.5s;}
.captionDelay6 {transition-delay: 0.6s; -webkit-transition-delay: 0.6s;}
.captionDelay7 {transition-delay: 0.7s; -webkit-transition-delay: 0.7s;}
.captionDelay8 {transition-delay: 0.8s; -webkit-transition-delay: 0.8s;}
.captionDelay9 {transition-delay: 0.9s; -webkit-transition-delay: 0.9s;}
.captionDelay10 {transition-delay: 1s; -webkit-transition-delay: 1s;}
.captionDelay11 {transition-delay: 1.1s; -webkit-transition-delay: 1.1s;}
.captionDelay12 {transition-delay: 1.2s; -webkit-transition-delay: 1.2s;}


.button-contact-form {
    background-color: #0B588D !important;
    border-color: #0B588D !important;
}

.button-contact-form:hover{
    color: #0B588D !important;
}

.item-meus-pedidos {
    float: left;
    line-height: 30px;   
}

.valor-meus-pedidos {
    float: right;
    color: #0B588D;
    line-height: 30px;
}

.cardapio_rapido {
    display: none;
}

.money-option {
    cursor: pointer;
}

.cred {
    cursor: pointer;
}

.deb {
   cursor: pointer; 
}

.button-regiter {
    background-color: #0B588D !important;
    border-color: #0B588D !important;
}

.button-regiter:hover {
    color: #0B588D !important;
}

.register button{
    background-color: #0B588D !important;
    border-color: #0B588D !important;
}

.register button:hover{
    color:  #0B588D !important;
}

.login .button {
    background-color: #0B588D !important;
    border-color: #0B588D !important;
}

.login .button:hover {
    color: #0B588D !important;
}

.register .button {
    background-color: #0B588D !important;
    border-color: #0B588D !important;
}

.register .button:hover {
    color: #0B588D !important;
}


<!-- BLUE COLOR   #0B588D -->