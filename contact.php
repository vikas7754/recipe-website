<?php
$page_title = "Contact us";
include_once "includes/header.php";
?>

<style>
#fname,#lname,#email,#country,#subject{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

#submit {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#submit:hover {
  background-color: #45a049;
}

.cu-container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin: 20px;
  background: rgba(255,255,255,0.1);
  border-left: 1px solid white;
  border-top: 1px solid white;
  box-shadow: 5px 5px 10px black;
}
</style>

<h3 style="text-align: center;">Contact Form</h3>

<div class="cu-container">
  <form method="post" action="action.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email.." required>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="india">India</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" id="submit">
  </form>
</div>

<?php
include_once "includes/footer.php";
?>
