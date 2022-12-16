<!DOCTYPE html>
<html>
<head>
    <title>Syamaail Suhaimi</title>

    <style>
        nav {
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 5%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            background-color: #333;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            margin-right: 300px;
        }


        a {
            color: white;
            text-decoration: none;
            padding: 20px;
        }

        body {
            margin-top: 50px;
            background-color: cornflowerblue;
        }
        img {
            float: right;
            margin-left: 20px;
        }

    </style>

</head>
<body>

<h1>Welcome to my Syamaail Suhaimi website!</h1>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<p>My name is <?php echo "John Doe"; ?> and I am a software developer. I created this website to share information about myself and my work.</p>
<img src="https://i.ibb.co/jGGRyCG/DP.png" alt="My profile picture" width="300" height="150">

<p>I have included my profile picture on the right side of this page. You can learn more about me by browsing the rest of the website.</p>
<p>Please feel free to browse the site and learn more about me. If you have any questions, you can contact me using the form on the "Contact" page.</p>


</body>
</html>
