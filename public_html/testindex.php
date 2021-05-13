<html>
    <title> coraldefense test </title>

    <head>
        <!--//I've used bootstrap for the tables, so I inport the CSS files for taht as well...-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>





    <body style='background:linear-gradient(to right, #6600cc 0%, #33ccff 81%);'>



<?php
include("connect_db.php");
?>
            <table class='table' style='background: linear-gradient(to right, #6600cc 0%, #33ccff 81%); font-size: 30px'>

                </style>
                <thead>
                    <tr>
                        <th style='color: rgb(255,255,255);'>Sensor Monitor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class='active'>
                        <td style='border-right: solid 2px gray;'>Timeid</td>
                        <td style='border-right: solid 2px gray;' align='center'>Temperature</td>
                        <td style='border-right: solid 2px gray;' align='center'>Humidity</td>
                        <td style='border-right: solid 2px gray;' align='center'>Flow Frequency</td>
                        <td style='border-right: solid 2px gray;' align='center'>Flow Total ml</td>
                        <td style='border-right: solid 2px gray;' align='center'>Flow Rate ml</td>
                        <td style='border-right: solid 2px gray;' align='center'>Hall Effect State</td>
                        <td style='border-right: solid 2px gray;' align='center'>Level Switch State</td>
                        <td align='center'>UV State</td>
                    </tr>

                    <?php $row = mysqli_fetch_array($result);?>

                        <tr id="info" class='info'>

                            <td id="timeid" style='border-right: solid 2px gray;' align='left'>
                                <?php echo $row['timeid'];?> </td>
                            <td id="timeid"  style='border-right: solid 2px gray;' align='center'>
                                <?php echo $row['temperature'];?>  </td>
                            <td id="timeid"  style='border-right: solid 2px gray;' align='center'>
                                <?php echo $row['humidity']?>  </td>
                            <td id="timeid"  style='border-right: solid 2px gray;' align='center'>
                                <?php echo $row['flow_frequency']?>  </td>
                            <td id="timeid"  style='border-right: solid 2px gray;' align='center'>
                                <?php echo $row['flow_total_ml']?>  </td>
                            <td id="timeid"  style='border-right: solid 2px gray;' align='center'>
                                <?php echo $row['flow_rate_ml']?>  </td>
                            <td id="timeid"  style='border-right: solid 2px gray;' align='center'>
                                <?php echo $row['hall_effect_state']?>  </td>
                            <td id="timeid"  style='border-right: solid 2px gray;' align='center'>
                                <?php echo $row['level_switch_state']?>  </td>
                            <td id="timeid"  style='border-right: solid 2px gray;' align='center'>
                                <?php echo $row['uv_state']?>  </td>
                        </tr>
                </tbody>
            </table>
    <script type="text/javascript">
    var table = $("#info");
    $(document).ready(setInterval(function refreshdata(){
    table.load("get_data.php");
    },5000));
    </script>


            <table class='table' style='background: linear-gradient(to right, #6600cc 0%, #33ccff 81%); font-size: 30px'>
                <thead>
                    <tr>
                        <th style='color: rgb(255,255,255);'>Sensor Controls</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class='active'>
                        <td>Coral Defense ID</td>
                        <td align='center'>Uv light</td>
                        <td align='center'>Water Fill Pump</td>
                        <td align='center'>Airpump</td>
                        <td align='center'>BTF Light Strip</td>
                        <td align='center'>Flow Meter</td>
                    </tr>
                    <tr>
                        <td style='color: rgb(255,255,255);'>CID=9999</td>
                        <td align='center'>
                            <form id= "uv_on">
                                <input style='border-radius:10px 10px 10px 10px; background-color: lightgreen;' type='submit' value='on'></form>
                            <form id= "uv_off"action=test_send_arduino_data.php method='post'>
                                <input type='hidden' name='command' value='#113' size='15'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: red;' type='submit' value='off'></form>
                        </td>
                        <td align='center'>
                            <form action=test_send_arduino_data.php method='post'>
                                <input type='hidden' name='command' value='#114' size='15'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: lightgreen;' type='submit' value='on'></form>
                            <form action=test_send_arduino_data.php method='post'>
                                <input type='hidden' name='command' value='#115' size='15'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: red;' type='submit' value='off'></form>
                        </td>
                        <td align='center'>
                            <form action=test_send_arduino_data.php method='post'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: lightgreen;' type='submit' value='on'></form>
                            <form action=test_send_arduino_data.php method='post'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: red;' type='submit' value='off'></form>
                        </td>
                        <td align='center'>
                            <form action=test_send_arduino_data.php method='post'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: lightgreen;' type='submit' value='on'></form>
                            <form action=test_send_arduino_data.php method='post'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: red;' type='submit' value='off'></form>
                        </td>
                        <td align='center'>
                            <form action=test_send_arduino_data.php method='post'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: lightgreen;' type='submit' value='on'></form>
                            <form action=test_send_arduino_data.php method='post'>
                                <input style='border-radius:10px 10px 10px 10px; background-color: red;' type='submit' value='off'></form>
                        </td>

                    </tr>
                </tbody>
         <script type="text/javascript">
    $("uv_on").click(function(){
  $.ajax({url: "test_send_arduino_data.php", 
  data:"#112"
  });
}); 
        </script>
            </table>


            <table class='table' style='font-size: 30px;'>

                <tbody>
                    <tr class='active'>
                        <td>Coral Defense ID</td>
                        <td>Indicator 1</td>
                        <td>Indicator 2 </td>
                        <td>Indicator 3 </td>
                    </tr>
            </tbody>
            </table>
</html>