<html><head><title>Main PAGE</title><style>
*        {
        margin:1px;
        padding:0px;
        box-sizing:border-box;
       }
html        {
        font-size:calc(1.5vw + 1.5vh);
        overflow-wrap:break-word;
       }
body        {
    position:relative;
        width:100%;
        min-height:100vh;
        border:2px dashed green;
        background-color:lightgray;
       }
main        {
        border:dashed blue;
        width:100%;
     }
main header         {
        width:100%;
        height:auto;
        border :2px dashed rgb(205, 7, 7);
        padding:5% 1% 0% 1%;
        position:relative;
        background-color:cornflowerblue;

    }
.crumbs        {
        color:midnightblue;
        position:absolute;
        top:0;
        left:5%;
    }
.phone        {
        color:lightgray;
        position:absolute;
        top:0;
        right:10%
    }
header .logo    {
        border:1px dashed beige;
        font-size:calc(3vw + 3vh);
        color:midnightblue;
        display:inline;
        float:left;
        width:100%;
    }
header small        {
        font-size:calc(.7vw + .7vh);
        /*position:absolute;*/
       margin-top:auto;
        border:1px solid yellow;
        display:inline-block;
        float:right;
        /*transform:translate(0% -10px);*/
    }
header span        {
        color:aliceblue;
    }
nav        {
        border:solid red;
        display:inline-flex;
        /*flex-wrap:wrap*/
        margin-bottom:0;
        margin-top:1%;
        /*margin-bottom:0px;*/
        width:100%;
        flex-wrap:wrap;
        justify-content:space-around;
    }
button        {
        background-color:#555;
        color:#fff;
        border:none;
        border-radius:5px;
        cursor:pointer;
        font-size:x-large;
        padding:0 2% 0 2%;
      }
button:hover        {
        background-color:#777;
      }
    .prro    {
      background-color: black;
    color:white;
    display:inline;
    margin-right:10%;
      }
    summary{
        display:inline;
        float:right;
    }
    .hiddendiv {
        display: none;
    }
    .testA:focus ~ #testA {
        display: block;
        position: fixed;
        z-index:1;
    }
    .testB:focus ~ #testB {
        display: block;
        position:fixed;
        z-index:-1;
    }
    .img        {
        background-color:beige;
        width:80vw;
        height:auto;
        border:solid black;
        color:red;
    }
    #footer{
        position:absolute;
        bottom:0;
        width:100%;
        background-color :darkcyan;
        text-align:center;
    }

</style>
</head>
<body>
<main>
<header>
    <span class="crumbs">Service&nbsp;Parts&nbsp;Software</span>
    <span class="phone">phone#</span>
    <div class="logo"><span>LA</span>tinos<span>PC</span>.com
    <small>PC is for Personal Computer</small></div>
    <br />
    <nav><button href="#" class ="prro"><a tabindex="1" class="testA">&#9776;</a><div class="hiddendiv" id="testA">
    <div class="img"><a href="latinospc.com">lol</a>
    </div>
    </button>
        <button>Home</button><button><a href="./spanish/">Español</a></button><button><a href="./services/">Services</a></button><button><a href="./contact">Contact&nbsp;Us</a></button><button><a href="./reviews">Reviews</a></button>
</nav>
    <!-- old nav
    <nav>
    <button>Home</button><button>Español</button><button>Services</button><button>Contact Us</button><button>Reviews</button>
   </nav> -->
</header>
<!--articles and what not-->
    <article>
        <section>
            <h2>Index File</h2>
                <p>a bit of code or perhaps articles that are entertaining</p>
                <div>
<a tabindex="1" class="testA">
Test A</a> |
<a tabindex="2" class="testB">
Test B</a>
<div class="hiddendiv" id="testA">
<img src="https://i.pinimg.com/236x/ab/8a/af/ab8aaf55c586d79a0097526b5cfd0860.jpg" width="100px" height="100px">
</div>
<div class="hiddendiv" id="testB">
<img src="" alt="image place holder">
</div>
</div>
<details><summary>&#9776;</summary>
Nulla eleifend dolor et fermentum
malesuada. Donec ac dignissim sapien. Nullam bibendum
augue a est semper, elementum tristique mauris pretium.
Praesent convallis hendrerit nisl a tempor. Aenean laoreet
enim mauris, in malesuada nulla faucibus id. Cras
hendrerit a tortor egestas feugiat.
</details>

<details><summary>&#9776;</summary>
Nulla eleifend dolor et fermentum
malesuada. Donec ac dignissim sapien. Nullam bibendum
augue a est semper, elementum tristique mauris pretium.
Praesent convallis hendrerit nisl a tempor. Aenean laoreet
enim mauris, in malesuada nulla faucibus id. Cras
hendrerit a tortor egestas feugiat.
</details>

<details><summary>&#9776;</summary>
Nulla eleifend dolor et fermentum
malesuada. Donec ac dignissim sapien. Nullam bibendum
augue a est semper, elementum tristique mauris pretium.
Praesent convallis hendrerit nisl a tempor. Aenean laoreet
enim mauris, in malesuada nulla faucibus id. Cras
hendrerit a tortor egestas feugiat.
</details>

<details><summary>&#9776;</summary>
Nulla eleifend dolor et fermentum
malesuada. Donec ac dignissim sapien. Nullam bibendum
augue a est semper, elementum tristique mauris pretium.
Praesent convallis hendrerit nisl a tempor. Aenean laoreet
enim mauris, in malesuada nulla faucibus id. Cras
hendrerit a tortor egestas feugiat.
</details>



<p class="testA">
<a href="#" class="hiddendiv" id="testB">
&#9776;
</a>
     efficitur nisi erat, in sodales tortor dapibus quis.
    Aenean eget justo in ipsum blandit hendrerit.
    Phasellus nisl ante, scelerisque eu massa a,
    venenatis pharetra sapien. Sed ultricies efficitur consequat.
    Sed elementum id arcu vel commodo. Pellentesque
    condimentum eros lectus, nec egestas velit venenatis nec.
    Quisque sagittis metus non tortor dignissim, et pulvinar metus pulvinar
</p>
</section></article>



<?php
include("./code/footer.php");
?>