<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="dates.css">
    <title> Trip Dates </title>
  </head>

  <body>
    <section id='Banner'>

    </section>

    <!-- page header -->
    <h2> Input Trip Info </h2>

    <section id="forms">
      <form id="dates info form" action='datesinput.php' method='post'>
        Arrival Time:
        <input type="date" name="startDay">
        <input type="time" name="startTime">

        <br><br>

        Depart Time:
        <input type="date" name="endDay">
        <input type="time" name="endTime">

        <br><br>

        Number of People to Register:
        <input type="integer" name="numPeople">

        <br><br>

        <input type='submit'>
      </form>
    </section>

  </body>
</html>
