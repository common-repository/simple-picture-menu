<?php { ?>



<style>

.PETER_P
{
width:320px;
height:480px;
overflow:auto;
}

.PETER_P img
{
height:100px;
width:100px;
}
 

.PETER_P input
{
color:black;
border:solid 1px #00bce1;
width:150px;

}

#FLYING_MAN 
{
margin:15px;
}

.poweronoff
{
margin:10px;
padding:15px;
}

.funny {
border-top-left-radius:5px;
border-top-right-radius:5px;
border-bottom-right-radius:5px;
border-bottom-left-radius:5px;

-moz-border-top-left-radius:5px;
-moz-border-top-right-radius:5px;
-moz-border-bottom-right-radius:5px;
-moz-border-bottom-left-radius:5px;

-webkit-border-top-left-radius:5px;
-webkit-border-top-right-radius:5px;
-webkit-border-bottom-right-radius:5px;
-webkit-border-bottom-left-radius:5px;
}


#EP_main
{
position:relative;
height:150px;
width:150px;
top:0px;
left:0px;
background-color:yellow;
}

.EP_inner
{

}



.EP_left {top:0px;left:0px;}
.EP_right {top:0px;right:0px;}
.EP_top {top:0px;left:0px;}
.EP_bottom {bottom:0px;left:0px;}

.EP_top, .EP_bottom { width:100%; height:25px;}
.EP_left, .EP_right { height:100%; width:25px; }


.EP_left, .EP_top, .EP_bottom, .EP_right {transition:all 1s;-moz-transition:all 1s;-webkit-transition:all 1s;-o-transition:all 1s;background-color:#51978e;opacity:0.5;position:absolute;cursor:pointer;color:white;}

.EP_left:hover, .EP_top:hover, .EP_bottom:hover, .EP_right:hover
{
opacity:1;
}


.styled-select select {
background: transparent;
   width: 120px;
   font-size: 16px;
line-height:1;
   border: 0;
   border-radius: 0;
   height: 50px;
   -webkit-appearance: none;
   color:white;
   border-radius:5px;
padding-top:0px;
   padding-left:10px;
font-weight:100;
   cursor:pointer;
   }

.styled-select {
   width: 100px;
   height: 50px;
   overflow: hidden;
<?php echo "background-image: url('" . plugins_url( 'pictures/onoffblank.png' , __FILE__ ) . "');  "; ?>


background-size:100% 100%;
border-top-left-radius:5px;
border-top-right-radius:5px;
border-bottom-right-radius:5px;
border-bottom-left-radius:5px;

-moz-border-top-left-radius:5px;
-moz-border-top-right-radius:5px;
-moz-border-bottom-right-radius:5px;
-moz-border-bottom-left-radius:5px;

-webkit-border-top-left-radius:5px;
-webkit-border-top-right-radius:5px;
-webkit-border-bottom-right-radius:5px;
-webkit-border-bottom-left-radius:5px;
   }

.pictures img
{
height:50px;
width:50px;
}


.HIRO_FREEZE
{
margin:20px;
text-align:center;
font-size:30px;
float:left;
width:100px;
background-size:100% 100%;
border-top-left-radius:5px;
border-top-right-radius:5px;
border-bottom-right-radius:5px;
border-bottom-left-radius:5px;

-moz-border-top-left-radius:5px;
-moz-border-top-right-radius:5px;
-moz-border-bottom-right-radius:5px;
-moz-border-bottom-left-radius:5px;

-webkit-border-top-left-radius:5px;
-webkit-border-top-right-radius:5px;
-webkit-border-bottom-right-radius:5px;
-webkit-border-bottom-left-radius:5px;
}

.HIRO_FREEZE input
{
width:100px;
font-size:16px;
}

#wpfooter
{
display:none;
}

#Save-Button
{
text-align:center;
font-size:20px;
color:white;
font-weight:100;

<?php echo "background-image: url('" . plugins_url( 'pictures/blankbutton.png' , __FILE__ ) . "');  "; ?>
height:50px;
width:100px;
background-size:100% 100%;
border-top-left-radius:5px;
border-top-right-radius:5px;
border-bottom-right-radius:5px;
border-bottom-left-radius:5px;

-moz-border-top-left-radius:5px;
-moz-border-top-right-radius:5px;
-moz-border-bottom-right-radius:5px;
-moz-border-bottom-left-radius:5px;

-webkit-border-top-left-radius:5px;
-webkit-border-top-right-radius:5px;
-webkit-border-bottom-right-radius:5px;
-webkit-border-bottom-left-radius:5px;
cursor:pointer;
}

.LOCATE_ABILITY {
float:left;
height:44px;
width:44px;
background-color:yellow;
margin:5px;
text-align:center;
cursor:pointer;
}

#LOC1 {
background-image: url('<?php echo get_option('HEROES1'); ?>');
background-size:100% 100%;
}

#LOC2 {
background-image: url('<?php echo get_option('HEROES2'); ?>');
background-size:100% 100%;
}

#LOC3 {
background-image: url('<?php echo get_option('HEROES3'); ?>');
background-size:100% 100%;
}
#LOC4 {
background-image: url('<?php echo get_option('HEROES4'); ?>');
background-size:100% 100%;
}

#LOC5 {
background-image: url('<?php echo get_option('HEROES5'); ?>');
background-size:100% 100%;
}

#LOC6 {
background-image: url('<?php echo get_option('HEROES6'); ?>');
background-size:100% 100%;
}

#LOC7 {
background-image: url('<?php echo get_option('HEROES7'); ?>');
background-size:100% 100%;
}
#LOC8 {
background-image: url('<?php echo get_option('HEROES8'); ?>');
background-size:100% 100%;
}
#LOC9 {
background-image: url('<?php echo get_option('HEROES9'); ?>');
background-size:100% 100%;
}

#LOC10 {
background-image: url('<?php echo get_option('HEROES10'); ?>');
background-size:100% 100%;
}

#HEAD {
font-size:36px;
color:white;
}

#FOOT {
font-size:36px;
cursor:pointer;
color:white;
}

/* reset.css */
html {margin:0;padding:0;border:0;}
body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, code, del, dfn, em, img, q, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, dialog, figure, footer, header, hgroup, nav, section {margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure, dialog, footer, header, hgroup, menu, nav, section {display:block;}
body {line-height:1.5;background:white;}
table {border-collapse:separate;border-spacing:0;}
caption, th, td {text-align:left;font-weight:normal;float:none !important;}
table, th, td {vertical-align:middle;}
blockquote:before, blockquote:after, q:before, q:after {content:'';}
blockquote, q {quotes:"" "";}
a img {border:none;}
:focus {outline:0;}

/* typography.css */
html {font-size:100.01%;}
body {font-size:75%;color:#222;background:#fff;font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;}
h1, h2, h3, h4, h5, h6 {font-weight:normal;color:#111;}
h1 {font-size:3em;line-height:1;margin-bottom:0.5em;}
h2 {font-size:2em;margin-bottom:0.75em;}
h3 {font-size:1.5em;line-height:1;margin-bottom:1em;}
h4 {font-size:1.2em;line-height:1.25;margin-bottom:1.25em;}
h5 {font-size:1em;font-weight:bold;margin-bottom:1.5em;}
h6 {font-size:1em;font-weight:bold;}
h1 img, h2 img, h3 img, h4 img, h5 img, h6 img {margin:0;}
p {margin:0 0 1.5em;}
.left {float:left !important;}
p .left {margin:1.5em 1.5em 1.5em 0;padding:0;}
.right {float:right !important;}
p .right {margin:1.5em 0 1.5em 1.5em;padding:0;}
a:focus, a:hover {color:#09f;}
a {color:#06c;text-decoration:underline;}
blockquote {margin:1.5em;color:#666;font-style:italic;}
strong, dfn {font-weight:bold;}
em, dfn {font-style:italic;}
sup, sub {line-height:0;}
abbr, acronym {border-bottom:1px dotted #666;}
address {margin:0 0 1.5em;font-style:italic;}
del {color:#666;}
pre {margin:1.5em 0;white-space:pre;}
pre, code, tt {font:1em 'andale mono', 'lucida console', monospace;line-height:1.5;}
li ul, li ol {margin:0;}
ul, ol {margin:0 1.5em 1.5em 0;padding-left:1.5em;}
ul {list-style-type:disc;}
ol {list-style-type:decimal;}
dl {margin:0 0 1.5em 0;}
dl dt {font-weight:bold;}
dd {margin-left:1.5em;}
table {margin-bottom:1.4em;width:100%;}
th {font-weight:bold;}
thead th {background:#c3d9ff;}
th, td, caption {padding:4px 10px 4px 5px;}
tbody tr:nth-child(even) td, tbody tr.even td {background:#e5ecf9;}
tfoot {font-style:italic;}
caption {background:#eee;}
.small {font-size:.8em;margin-bottom:1.875em;line-height:1.875em;}
.large {font-size:1.2em;line-height:2.5em;margin-bottom:1.25em;}
.hide {display:none;}
.quiet {color:#666;}
.loud {color:#000;}
.highlight {background:#ff0;}
.added {background:#060;color:#fff;}
.removed {background:#900;color:#fff;}
.first {margin-left:0;padding-left:0;}
.last {margin-right:0;padding-right:0;}
.top {margin-top:0;padding-top:0;}
.bottom {margin-bottom:0;padding-bottom:0;}

/* forms.css */
label {font-weight:bold;}
fieldset {padding:0 1.4em 1.4em 1.4em;margin:0 0 1.5em 0;border:1px solid #ccc;}
legend {font-weight:bold;font-size:1.2em;margin-top:-0.2em;margin-bottom:1em;}
fieldset, #IE8#HACK {padding-top:1.4em;}
legend, #IE8#HACK {margin-top:0;margin-bottom:0;}
input[type=text], input[type=password], input[type=url], input[type=email], input.text, input.title, textarea {background-color:#fff;border:1px solid #bbb;color:#000;}
input[type=text]:focus, input[type=password]:focus, input[type=url]:focus, input[type=email]:focus, input.text:focus, input.title:focus, textarea:focus {border-color:#666;}
select {background-color:#fff;border-width:1px;border-style:solid;}
input[type=text], input[type=password], input[type=url], input[type=email], input.text, input.title, textarea, select {margin:0.5em 0;}
input.text, input.title {width:300px;padding:5px;}
input.title {font-size:1.5em;}
textarea {width:390px;height:250px;padding:5px;}
form.inline {line-height:3;}
form.inline p {margin-bottom:0;}
.error, .alert, .notice, .success, .info {padding:0.8em;margin-bottom:1em;border:2px solid #ddd;}
.error, .alert {background:#fbe3e4;color:#8a1f11;border-color:#fbc2c4;}
.notice {background:#fff6bf;color:#514721;border-color:#ffd324;}
.success {background:#e6efc2;color:#264409;border-color:#c6d880;}
.info {background:#d5edf8;color:#205791;border-color:#92cae4;}
.error a, .alert a {color:#8a1f11;}
.notice a {color:#514721;}
.success a {color:#264409;}
.info a {color:#205791;}

.first { clear: left; }

/* grid.css */
.container {width:950px;margin:0 auto;}
.column, .span-1, .span-2, .span-3, .span-4, .span-5, .span-6, .span-7, .span-8, .span-9, .span-10, .span-11, .span-12, .span-13, .span-14, .span-15, .span-16, .span-17, .span-18, .span-19, .span-20, .span-21, .span-22, .span-23, .span-24 {float:left;margin-right:10px;}
.last {margin-right:0;}
.span-1 {width:30px;}
.span-2 {width:70px;}
.span-3 {width:110px;}
.span-4 {width:150px;}
.span-5 {width:190px;}
.span-6 {width:230px;}
.span-7 {width:270px;}
.span-8 {width:310px;}
.span-9 {width:350px;}
.span-10 {width:390px;}
.span-11 {width:430px;}
.span-12 {width:470px;}
.span-13 {width:510px;}
.span-14 {width:550px;}
.span-15 {width:590px;}
.span-16 {width:630px;}
.span-17 {width:670px;}
.span-18 {width:710px;}
.span-19 {width:750px;}
.span-20 {width:790px;}
.span-21 {width:830px;}
.span-22 {width:870px;}
.span-23 {width:910px;}
.span-24 {width:950px;margin-right:0;}
input.span-1, textarea.span-1, input.span-2, textarea.span-2, input.span-3, textarea.span-3, input.span-4, textarea.span-4, input.span-5, textarea.span-5, input.span-6, textarea.span-6, input.span-7, textarea.span-7, input.span-8, textarea.span-8, input.span-9, textarea.span-9, input.span-10, textarea.span-10, input.span-11, textarea.span-11, input.span-12, textarea.span-12, input.span-13, textarea.span-13, input.span-14, textarea.span-14, input.span-15, textarea.span-15, input.span-16, textarea.span-16, input.span-17, textarea.span-17, input.span-18, textarea.span-18, input.span-19, textarea.span-19, input.span-20, textarea.span-20, input.span-21, textarea.span-21, input.span-22, textarea.span-22, input.span-23, textarea.span-23, input.span-24, textarea.span-24 {border-left-width:1px;border-right-width:1px;padding-left:5px;padding-right:5px;}
input.span-1, textarea.span-1 {width:18px;}
input.span-2, textarea.span-2 {width:58px;}
input.span-3, textarea.span-3 {width:98px;}
input.span-4, textarea.span-4 {width:138px;}
input.span-5, textarea.span-5 {width:178px;}
input.span-6, textarea.span-6 {width:218px;}
input.span-7, textarea.span-7 {width:258px;}
input.span-8, textarea.span-8 {width:298px;}
input.span-9, textarea.span-9 {width:338px;}
input.span-10, textarea.span-10 {width:378px;}
input.span-11, textarea.span-11 {width:418px;}
input.span-12, textarea.span-12 {width:458px;}
input.span-13, textarea.span-13 {width:498px;}
input.span-14, textarea.span-14 {width:538px;}
input.span-15, textarea.span-15 {width:578px;}
input.span-16, textarea.span-16 {width:618px;}
input.span-17, textarea.span-17 {width:658px;}
input.span-18, textarea.span-18 {width:698px;}
input.span-19, textarea.span-19 {width:738px;}
input.span-20, textarea.span-20 {width:778px;}
input.span-21, textarea.span-21 {width:818px;}
input.span-22, textarea.span-22 {width:858px;}
input.span-23, textarea.span-23 {width:898px;}
input.span-24, textarea.span-24 {width:938px;}
.append-1 {padding-right:40px;}
.append-2 {padding-right:80px;}
.append-3 {padding-right:120px;}
.append-4 {padding-right:160px;}
.append-5 {padding-right:200px;}
.append-6 {padding-right:240px;}
.append-7 {padding-right:280px;}
.append-8 {padding-right:320px;}
.append-9 {padding-right:360px;}
.append-10 {padding-right:400px;}
.append-11 {padding-right:440px;}
.append-12 {padding-right:480px;}
.append-13 {padding-right:520px;}
.append-14 {padding-right:560px;}
.append-15 {padding-right:600px;}
.append-16 {padding-right:640px;}
.append-17 {padding-right:680px;}
.append-18 {padding-right:720px;}
.append-19 {padding-right:760px;}
.append-20 {padding-right:800px;}
.append-21 {padding-right:840px;}
.append-22 {padding-right:880px;}
.append-23 {padding-right:920px;}
.prepend-1 {padding-left:40px;}
.prepend-2 {padding-left:80px;}
.prepend-3 {padding-left:120px;}
.prepend-4 {padding-left:160px;}
.prepend-5 {padding-left:200px;}
.prepend-6 {padding-left:240px;}
.prepend-7 {padding-left:280px;}
.prepend-8 {padding-left:320px;}
.prepend-9 {padding-left:360px;}
.prepend-10 {padding-left:400px;}
.prepend-11 {padding-left:440px;}
.prepend-12 {padding-left:480px;}
.prepend-13 {padding-left:520px;}
.prepend-14 {padding-left:560px;}
.prepend-15 {padding-left:600px;}
.prepend-16 {padding-left:640px;}
.prepend-17 {padding-left:680px;}
.prepend-18 {padding-left:720px;}
.prepend-19 {padding-left:760px;}
.prepend-20 {padding-left:800px;}
.prepend-21 {padding-left:840px;}
.prepend-22 {padding-left:880px;}
.prepend-23 {padding-left:920px;}
.border {padding-right:4px;margin-right:5px;border-right:1px solid #ddd;}
.colborder {padding-right:24px;margin-right:25px;border-right:1px solid #ddd;}
.pull-1 {margin-left:-40px;}
.pull-2 {margin-left:-80px;}
.pull-3 {margin-left:-120px;}
.pull-4 {margin-left:-160px;}
.pull-5 {margin-left:-200px;}
.pull-6 {margin-left:-240px;}
.pull-7 {margin-left:-280px;}
.pull-8 {margin-left:-320px;}
.pull-9 {margin-left:-360px;}
.pull-10 {margin-left:-400px;}
.pull-11 {margin-left:-440px;}
.pull-12 {margin-left:-480px;}
.pull-13 {margin-left:-520px;}
.pull-14 {margin-left:-560px;}
.pull-15 {margin-left:-600px;}
.pull-16 {margin-left:-640px;}
.pull-17 {margin-left:-680px;}
.pull-18 {margin-left:-720px;}
.pull-19 {margin-left:-760px;}
.pull-20 {margin-left:-800px;}
.pull-21 {margin-left:-840px;}
.pull-22 {margin-left:-880px;}
.pull-23 {margin-left:-920px;}
.pull-24 {margin-left:-960px;}
.pull-1, .pull-2, .pull-3, .pull-4, .pull-5, .pull-6, .pull-7, .pull-8, .pull-9, .pull-10, .pull-11, .pull-12, .pull-13, .pull-14, .pull-15, .pull-16, .pull-17, .pull-18, .pull-19, .pull-20, .pull-21, .pull-22, .pull-23, .pull-24 {float:left;position:relative;}
.push-1 {margin:0 -40px 1.5em 40px;}
.push-2 {margin:0 -80px 1.5em 80px;}
.push-3 {margin:0 -120px 1.5em 120px;}
.push-4 {margin:0 -160px 1.5em 160px;}
.push-5 {margin:0 -200px 1.5em 200px;}
.push-6 {margin:0 -240px 1.5em 240px;}
.push-7 {margin:0 -280px 1.5em 280px;}
.push-8 {margin:0 -320px 1.5em 320px;}
.push-9 {margin:0 -360px 1.5em 360px;}
.push-10 {margin:0 -400px 1.5em 400px;}
.push-11 {margin:0 -440px 1.5em 440px;}
.push-12 {margin:0 -480px 1.5em 480px;}
.push-13 {margin:0 -520px 1.5em 520px;}
.push-14 {margin:0 -560px 1.5em 560px;}
.push-15 {margin:0 -600px 1.5em 600px;}
.push-16 {margin:0 -640px 1.5em 640px;}
.push-17 {margin:0 -680px 1.5em 680px;}
.push-18 {margin:0 -720px 1.5em 720px;}
.push-19 {margin:0 -760px 1.5em 760px;}
.push-20 {margin:0 -800px 1.5em 800px;}
.push-21 {margin:0 -840px 1.5em 840px;}
.push-22 {margin:0 -880px 1.5em 880px;}
.push-23 {margin:0 -920px 1.5em 920px;}
.push-24 {margin:0 -960px 1.5em 960px;}
.push-1, .push-2, .push-3, .push-4, .push-5, .push-6, .push-7, .push-8, .push-9, .push-10, .push-11, .push-12, .push-13, .push-14, .push-15, .push-16, .push-17, .push-18, .push-19, .push-20, .push-21, .push-22, .push-23, .push-24 {float:left;position:relative;}
div.prepend-top, .prepend-top {margin-top:1.5em;}
div.append-bottom, .append-bottom {margin-bottom:1.5em;}
.box {padding:1.5em;margin-bottom:1.5em;background:#e5eCf9;}
hr {background:#ddd;color:#ddd;clear:both;float:none;width:100%;height:1px;margin:0 0 17px;border:none;}
hr.space {background:#fff;color:#fff;visibility:hidden;}
.clearfix:after, .container:after {display:block;height:0;clear:both;visibility:hidden;overflow:hidden;}
.clearfix, .container {display:block;}
.clear {clear:both;}

/* ie.css */
body {text-align:center;}
.container {text-align:left;}
* html .column, * html .span-1, * html .span-2, * html .span-3, * html .span-4, * html .span-5, * html .span-6, * html .span-7, * html .span-8, * html .span-9, * html .span-10, * html .span-11, * html .span-12, * html .span-13, * html .span-14, * html .span-15, * html .span-16, * html .span-17, * html .span-18, * html .span-19, * html .span-20, * html .span-21, * html .span-22, * html .span-23, * html .span-24 {display:inline;overflow-x:hidden;}
* html legend {margin:0px -8px 16px 0;padding:0;}
sup {vertical-align:text-top;}
sub {vertical-align:text-bottom;}
html>body p code {*white-space:normal;}
hr {margin:-8px auto 11px;}
img {-ms-interpolation-mode:bicubic;}
.clearfix, .container {display:inline-block;}
* html .clearfix, * html .container {height:1%;}
fieldset {padding-top:0;}
legend {margin-top:-0.2em;margin-bottom:1em;margin-left:-0.5em;}
textarea {overflow:auto;}
label {vertical-align:middle;position:relative;top:-0.25em;}
input.text, input.title, textarea {background-color:#fff;border:1px solid #bbb;}
input.text:focus, input.title:focus {border-color:#666;}
input.text, input.title, textarea, select {margin:0.5em 0;}
input.checkbox, input.radio {position:relative;top:.25em;}
form.inline div, form.inline p {vertical-align:middle;}
form.inline input.checkbox, form.inline input.radio, form.inline input.button, form.inline button {margin:0.5em 0;}
button, input.button {position:relative;top:0.25em;}

body {
    overflow-x: hidden !important;
}

.container  {
    width: 100% !important;
}

.container > div {
    clear: both !important;
    width: 100% !important;
}

#iconss, #iconss2
{
overflow:auto;
}

#iconss img, #iconss2 img
{
height:50px;
width:50px;
cursor:pointer;
transition:all 1s;
}

#iconss img:hover, #iconss2 img:hover
{
height:55px;
width:55px;
}


#iFind1, #iFind2
{
text-align:center;
cursor:pointer;
margin-top:11px;
margin-bottom:11px;

}


.ABCLASS tr td
{
text-align:center;
background-color:white;
}

.ABCLASS tr 
{
background-color:white;
}

</style>

<?php } ?>