<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
</head>
<body>
    <header>
        <img class="logo" src="/images/logo.png" />
        <nav> 
          <ul class="nav__links">
            <li><a href="index.php">home</a></li>
            <li><a href="index.php">contact</a></li>
            <li><a href="index.php">contact</a></li>
          </ul>
        </nav>
        <a class="cta" href="contact.php"><button>Contact</button></a>
      </header> 
      <img class="banner" src="/images/banner1.png" />
      <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Netherlands">Netherlands</option>
      <option value="Germany">Germany</option>
      <option value="Belgium">Belgium</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</html>