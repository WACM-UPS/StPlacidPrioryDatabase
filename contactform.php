<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="dates.css">
  <title> Contact info and Program Info Form </title>
  <!--link css-->
</head>
<body>
  <!--header here-->
  <section id='Banner'>

  </section>

  <h2>Enter Contact Info</h2>

  <section id='forms'>
    <!--form to contact info table-->
    <form id='contact info form' action='contactinput.php' method='post'>
      * First Name:
      <input type='text' name='fname' value="First Name" required>
      <br><br>
      * Last Name:
      <input type='text' name='lname' value="Last Name" required>
      <br><br>
      * Daytime Phone Number or Cellphone Number:
      <input type='tel' name='cellNum' value="e.g. (303) 867 - 5309" required>
      <br><br>
      Home Phone Number:
      <input type='tel' name='homeNum' value="e.g. (303) 867 - 5309">
      <br><br>
      * Email:
      <input type='email' name='email' value="e.g. myname@gmail.com" required>
      <br><br>
      * Address: <br>
      <input type='text' name='street' value="Street" required><br>
      <input type='text' name='apartment' value="Apartment" required><br>
      <input type='text' name='city' value="City" required>
      <select name='state'>
        <option value="state">Alabama</option>
        <option value="state">Alaska</option>
        <option value="state">Arizona</option>
        <option value="state">Arkansas</option>
        <option value="state">California</option>
        <option value="state">Colorado</option>
        <option value="state">Connecticut</option>
        <option value="state">Delaware</option>
        <option value="state">District Of Columbia</option>
        <option value="state">Florida</option>
        <option value="state">Georgia</option>
        <option value="state">Hawaii</option>
        <option value="state">Idaho</option>
        <option value="state">Illinois</option>
        <option value="state">Indiana</option>
        <option value="state">Iowa</option>
        <option value="state">Kansas</option>
        <option value="state">Kentucky</option>
        <option value="state">Louisiana</option>
        <option value="state">Maine</option>
        <option value="state">Maryland</option>
        <option value="state">Massachusetts</option>
        <option value="state">Michigan</option>
        <option value="state">Minnesota</option>
        <option value="state">Mississippi</option>
        <option value="state">Missouri</option>
        <option value="state">Montana</option>
        <option value="state">Nebraska</option>
        <option value="state">Nevada</option>
        <option value="state">New Hampshire</option>
        <option value="state">New Jersey</option>
        <option value="state">New Mexico</option>
        <option value="state">New York</option>
        <option value="state">North Carolina</option>
        <option value="state">North Dakota</option>
        <option value="state">Ohio</option>
        <option value="state">Oklahoma</option>
        <option value="state">Oregon</option>
        <option value="state">Pennsylvania</option>
        <option value="state">Rhode Island</option>
        <option value="state">South Carolina</option>
        <option value="state">South Dakota</option>
        <option value="state">Tennessee</option>
        <option value="state">Texas</option>
        <option value="state">Utah</option>
        <option value="state">Vermont</option>
        <option value="state">Virginia</option>
        <option value="state">Washington</option>
        <option value="state">West Virginia</option>
        <option value="state">Wisconsin</option>
        <option value="state">Wyoming</option>
      </select> <br>
      <input type='number' name='zip' value="12345" required><br>

      <br>
      <h6>* are required</h6>
      <input type='submit'>
    </form>

  </section>
</body>
</html>
