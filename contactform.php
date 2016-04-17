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
    <form id='contact info form' action='contactinputs.php' method='post'>
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
        <option value="Alabama">Alabama</option>
        <option value="Alaska">Alaska</option>
        <option value="Arizona">Arizona</option>
        <option value="Arkansas">Arkansas</option>
        <option value="California">California</option>
        <option value="Colorado">Colorado</option>
        <option value="Connecticut">Connecticut</option>
        <option value="Delaware">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="Florida">Florida</option>
        <option value="Georgia">Georgia</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Idaho">Idaho</option>
        <option value="Illinois">Illinois</option>
        <option value="Indiana">Indiana</option>
        <option value="Iowa">Iowa</option>
        <option value="Kansas">Kansas</option>
        <option value="Kentucky">Kentucky</option>
        <option value="Louisiana">Louisiana</option>
        <option value="Maine">Maine</option>
        <option value="Maryland">Maryland</option>
        <option value="Massachusetts">Massachusetts</option>
        <option value="Michigan">Michigan</option>
        <option value="Minnesota">Minnesota</option>
        <option value="Mississippi">Mississippi</option>
        <option value="Missouri">Missouri</option>
        <option value="Montana">Montana</option>
        <option value="Nebraska">Nebraska</option>
        <option value="Nevada">Nevada</option>
        <option value="New Hampshire">New Hampshire</option>
        <option value="New Jersey">New Jersey</option>
        <option value="New Mexico">New Mexico</option>
        <option value="New York">New York</option>
        <option value="North Carolina">North Carolina</option>
        <option value="North Dakota">North Dakota</option>
        <option value="Ohio">Ohio</option>
        <option value="Oklahoma">Oklahoma</option>
        <option value="Oregon">Oregon</option>
        <option value="Pennsylvania">Pennsylvania</option>
        <option value="Rhode Island">Rhode Island</option>
        <option value="South Carolina">South Carolina</option>
        <option value="South Dakota">South Dakota</option>
        <option value="Tennessee">Tennessee</option>
        <option value="Texas">Texas</option>
        <option value="Utah">Utah</option>
        <option value="Vermont">Vermont</option>
        <option value="Viginia">Virginia</option>
        <option value="Washington">Washington</option>
        <option value="West Virginia">West Virginia</option>
        <option value="Wisconsin">Wisconsin</option>
        <option value="Wyoming">Wyoming</option>
      </select> <br>
      <input type='number' name='zip' value="12345" required><br>

      <br>
      <h6>* are required</h6>
      <input type='submit'>
    </form>

  </section>
</body>
</html>
