 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>echo $title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
body {
    background-color:#EF92D5;
    font-family:'Courier New', Courier, monospace;
    color:#680a11;
    font-size: 13.5px;
    width: 1080px;
    margin:auto;
    display: flex;
    justify-content: space-between;

}
h1{
    font-size: 20px;
    text-align: justify;
}
/*sentence*/
h2{
    background-color:#EF92D5;
    height: 0px;
    padding-top: 20px;
    padding-bottom:20px ;
    padding-left: 20px;
    text-align: center;
    font-size: 22px;
    font-size: 18px;
    
}
/*lcard text*/
h3{ 
    color:#680a11;
    font-size: 12px;
    font-weight: bold;
    padding-top: 0px;
    padding-bottom:00px ;
    padding-left: 160px;
    margin-top: 325px;
}
/*links*/
img{
    margin-right: 50px;
    margin-left:5px;
    margin-bottom: 0px;
}
nav li {
    font-size: 20px;
    display:inline-block;
    margin-right:60.5px;
    margin-left: 10px;
    margin-bottom:0px;
}
nav li:last-child {
    margin-right: 0px;
}
nav ul {
    padding-left: 0;    
}
.nav-item {
    font-size: 20px;
    text-align: center;

}

/*.header-image {
    width: 100%;
    height: auto;
}*/

/*footer*/

footer{
    margin-top:50px;
    background-color:#FD0DBA;
    margin-left: 9px;
    margin-bottom: 0px;
}

p{

    height: 0px;
    padding-top: 20px;
    padding-bottom:30px ;
    padding-left: 20px;
    text-align: center;
    font-size: 15px;
    text-align: justify;
    font-weight: bold;

}

.img-fluid {
    width:fit-content;
}

@media  (max-width: 450px) {

    body {
        width: fit-content;
        margin: 0 16px 16px 16px;
            
    }
    
    .wrapper {
        display : flex ;
        justify-content : center ;
        align-items:center ;
        height : auto;
        width: 100%;
    }
    
    img {
        display: block;
        margin: 0 0 16px 0;
    
    }
}
    /* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v139/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-smoothing: antialiased;
}

</style>
</head>
<body>
  <div class="container">
    <header class="site_header">
        <div class="wrapper"></div>
        <nav>

            <ul>
              <ul>
                <li><a href="#"><i><b>Twinkling Stars<br>Kindergarten</a></i></b></li>
                <img src="image/logo.jpg" class="rounded" alt="Logo" width="100" height="75">
                <li><a href="index.php">Home</a></li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="contact.php">Contact</a></li>
                <a class="btn btn-danger" href="enrollment.php" role="button">Enroll Today</a>
              </ul>
                   
            </ul>
                </nav>


