<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>FXRS Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <?php
        require "inc/usertest.php";
        date_default_timezone_set('America/Chicago');
        $user = strtolower($user);

        echo '<h2>Hello, ' . $user . '!</h2>';
    ?>

	<div id="page-wrap">

		<h1>FXRS Quiz</h1>

        <hr />
		
		<form action="grade.php" method="post" id="quizie">
		
            <ol>
            
                <li>
                
                    <h3>What are the 2 recommended fields that must be added to produce a shipping label and save on desktop</h3>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-A" value="A" />
                        <label for="q1-answers-A">187 & 538</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-B" value="B" />
                        <label for="q1-answers-B">498 & 3025</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-C" value="C" />
                        <label for="q1-answers-C">187 & 537</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-D" value="D" />
                        <label for="q1-answers-D">None of the above</label>
                    </div>
                
                </li>
                
               <li>
                
                    <h3>Please choose the correct query that would allow you to locate an express shipment from the database</h3>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-A" value="A" />
                        <label for="q2-answers-A">SELECT * FROM "FEDEX"."DomesticShipment" where TrackingNumber = 123456789</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-B" value="B" />
                        <label for="q2-answers-B">SELECT * FROM "FEDEX"."DomesticShipment" where TrkngNbr = 123456789</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-C" value="C" />
                        <label for="q2-answers-C">SELECT * FROM "FEDEX"."ExpressShipment" where TrkngNbr = 123456789</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-D" value="D" />
                        <label for="q2-answers-D">SELECT * FROM "FEDEX"."Shipment" TrkngNbr = 123456789</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>What application allows you to validate a server transaction?</h3>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-A" value="A" />
                        <label for="q3-answers-A">AdminTool</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-B" value="B" />
                        <label for="q3-answers-B">ESB Production</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-C" value="C" />
                        <label for="q3-answers-C">ESB Test</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-D" value="D" />
                        <label for="q3-answers-D">TransEdit</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>What tool allows you to view what WIS services are enabled by the authentication key?</h3>
                    
                    <div>
                        <input type="radio" name="q4-answers" id="q4-answers-A" value="A" />
                        <label for="q4-answers-A">AdminTool</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4-answers" id="q4-answers-B" value="B" />
                        <label for="q4-answers-B">ESB Production</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4-answers" id="q4-answers-C" value="C" />
                        <label for="q4-answers-C">ESB Test</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4-answers" id="q4-answers-D" value="D" />
                        <label for="q4-answers-D">TransEdit</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Chose a Web Service Standard Service</h3>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-A" value="A" />
                        <label for="q5-answers-A">Shipping</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-B" value="B" />
                        <label for="q5-answers-B">Tracking</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-C" value="C" />
                        <label for="q5-answers-C">Pickup</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-D" value="D" />
                        <label for="q5-answers-D">Both B and C</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Jason is adding an LTL account to FXCT, what address should he use?</h3>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-A" value="A" />
                        <label for="q6-answers-A">Shipping</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-B" value="B" />
                        <label for="q6-answers-B">Mailing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-C" value="C" />
                        <label for="q6-answers-C">Billing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-D" value="D" />
                        <label for="q6-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Customer is moving from L6 to Production. What steps should you follow to change the communication level?</h3>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-A" value="A" />
                        <label for="q7-answers-A">Navigate to FedEx_Comm > commsetup > ctrl + T > change level</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-B" value="B" />
                        <label for="q7-answers-B">Open AdminTool > search by account > switch level</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-C" value="C" />
                        <label for="q7-answers-C">Have the customer contact CSP</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-D" value="D" />
                        <label for="q7-answers-D">Navigate to FedEx_bin > open commsetup > ctrl + T > change level</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>When creating a Ground shipment billing Collect. What value should be used for payment type?</h3>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-A" value="A" />
                        <label for="q8-answers-A">1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-B" value="B" />
                        <label for="q8-answers-B">2</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-C" value="C" />
                        <label for="q8-answers-C">3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-D" value="D" />
                        <label for="q8-answers-D">4</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Pick a query that would allow you to find, by tracking #, how the shipment was billed. This is a ground shipment</h3>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-A" value="A" />
                        <label for="q9-answers-A">SELECT PayType, * FROM "FEDEX"."DomesticShipment" where TrackingNumber = 653548379559</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-B" value="B" />
                        <label for="q9-answers-B">SELECT PayType, * FROM "FEDEX"."GroundShipments" where TrkNbr = 653548379559</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-C" value="C" />
                        <label for="q9-answers-C">SELECT PaymentType, * FROM "FEDEX"."GroundShipment" where TrackingNumber = 653548379559</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-D" value="D" />
                        <label for="q9-answers-D">SELECT PayType, * FROM "FEDEX"."GroundShipment" where TrackingNumber = 653548379559</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Lets assume you found the shipment above, great. What status code should be seen if the shipment was deleted?</h3>
                    
                    <div>
                        <input type="radio" name="q10-answers" id="q10-answers-A" value="A" />
                        <label for="q10-answers-A">1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q10-answers" id="q10-answers-B" value="B" />
                        <label for="q10-answers-B">3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q10-answers" id="q10-answers-C" value="C" />
                        <label for="q10-answers-C">5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q10-answers" id="q10-answers-D" value="D" />
                        <label for="q10-answers-D">7</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input id="submitAnswers" type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>

    <script>
        var form = document.getElementById("quizie");
            form.reset();
    </script>

</body>

</html>