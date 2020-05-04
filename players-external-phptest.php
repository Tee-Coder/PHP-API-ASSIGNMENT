<?php
  // Submit a request to the API endpoint.
$playerJSONString =  file_get_contents( 'https://www.balldontlie.io/api/v1/players/' );
  // Convert the response to a PHP object.
$playerObject = json_decode($playerJSONString);
 // Collect the first user in the data array.
$playerTeam = $playerObject->data;
?> <!DOCTYPE html>
<html lang = "en">
<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>External API PHP Assignment</title>
</head>
<body>
  <h1> External API PHP Assignment</h1>
  <?php include './includes/navigation.php'; ?>
  <h2>players profile</h2>
  <dl>
    <?php foreach( $playerTeam as $playerTeam) : ?>

    <dt>ID</dt>
    <dd><?php echo $playerTeam->id;?> </dd>
     <dt>last name</dt>
    <dd><?php echo $playerTeam->last_name;?> </dd>
    <dt>first name</dt>
    <dd><?php echo $playerTeam->first_name;?> </dd>
    <dt>position</dt>
    <dd><?php echo $playerTeam->position;?> </dd>
    <dt> Team ID</dt>
    <dd>
        <?php echo $playerTeam->team->id;?>
    </dd>
      <dt>Team Abbreviation</dt>
      <dd> 
        <?php echo $playerTeam->team->abbreviation;?>
      </dd>
      <dt> Team City</dt>
      <dd>
         <?php echo $playerTeam->team->city;?>
      </dd>
          <dt> Team Conference</dt>
         <dd><?php echo $playerTeam->team->conference;?></dd>
             <dt> Team Division</dt>
         <dd><?php echo $playerTeam->team->division;?><dd>
             <dt> Team Fullname</dt>
         <dd><?php echo $playerTeam->team->full_name;?></dd>
         <dt> Team ID</dt>
    <dd>
         <?php echo $playerTeam->team->name;?>
    </dd>

   
      <br> </br>
     <?php endforeach?>


</dl>

     

 
   

</body>
</html>