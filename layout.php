<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>

    <style>
    *{
        margin:0;
        padding:0;
    }


    #container
    {
        border:1px solid black;
        
        
    }
    #header
    {
        padding:10px;
        height:100px;
        background-color:orange;

    }
    #logo{
        background-color: brown;
        height:80px;
        width:100px;
        padding:10px;
    }


    #navbar
    {
        background-color: cadetblue;
        height:50px;
        margin-top: 10px;

    }
    
    #container-2{
    
        
    }
    #container-2::after{
        content: "";
        display: block;
        clear: both;
    }
    #l-sidebar{
        background-color: rgb(20, 157, 220);
        width:25%;
        height: 600px;
        margin-top:10px;
        float:left;

    }
    #r-sidebar{
        background-color:burlywood;
        width:74%;
        height: 600px;
        margin-top: 10px;
        float:right;
    }

    #footer
    {
        background-color: blueviolet;
        height: 100px; 
        margin-top:10px;

           }

    
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <div id="logo">

            </div>
            <div id="header-other-part">

            </div>
        </div>
        <div id="navbar">

        </div>
        <div id="container-2">

        
        <div id="l-sidebar">

        </div>
        <div id="r-sidebar"></div>
    </div>
    

    <div id="footer">

    </div>
</div>
    
</body>
</html>
