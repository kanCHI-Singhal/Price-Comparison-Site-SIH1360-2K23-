<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>CompareSphere_Website</title>
    <script src="https://kit.fontawesome.com/0049c3d35c.js"></script>
    <style> 
    *{
      margin:0;
      padding:0;
    }
    @import url('https://fonts.googleapis.com/css2?family=spartan:wght@100;200;300;400;500;600;700;800;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'spartan',sans-serif;
}

h1{
    font-size: 50px;
    line-height: 64px;
    color: #222;
}

h2{
    font-size: 46px;
    line-height: 54px;
    color: #222;
}

h4{
    font-weight: 700;
    font-size: 12px;
}

h6{
    font-weight: 700;
    font-size: 12px;
}

P{
    font-size: 16px;
    color: #465b52;
    margin: 15px 0 20px 0;
}

.section-p1 {
    padding: 40px 80px;
}

.section-m1 {
    margin: 40px 0;
}

button.normal{
  font-size: 14px;
  font-weight: 600;
  padding: 15px 30px;
  color: #000;
  background-color: #fff;
  border-radius: 4px;
  cursor: pointer;
  border: none;
  outline: none;
  transition: 0.2s;
}

body {
    width: 100%;
}


/* Header start */

#header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background: #E3E6F3;
    box-shadow: 0 5px 15px rgba(0,0,0,0.06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
    z-index: 0;
}

#navbar {
    display: flex;
    align-items: center;
    justify-content: center;
}

#navbar li{
    list-style: none;
    padding: 0 20px;
    position: relative;
}

#navbar li a{
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3s ease;
}

#navbar li a:hover,
#navbar li a.active {
    color: #088178;
}

#navbar li a.active::after,
#navbar li a:hover::after {
    content:"";
    width: 30%;
    height: 2px;
    background: #088178;
    position: absolute;
    bottom: -4px;
    left:20px;

}





    </style>
</head>
<body>
<div>
            <ul id="navbar">
                <li><a class="active" href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
                
                <li> <i class="fa-solid fa-building"></i> Category</li>
                 
                <li><a href="about.html"><i class="fa-solid fa-building"></i>About</a></li>
                <li><a href="contact.html"><i class="fa-solid fa-address-book"></i>Contact</a></li>
                
                <li><a href="signup.php"> signup</a></li>
                <li><a href="login.php"> login</a></li>
            </ul>
        </div>
  
</body>
</html>

 