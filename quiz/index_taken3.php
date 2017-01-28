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
		
		<form action="Grade.php" method="post" id="quizie">
		
            <ol>
            
                <li>
                
                    <h3>Customer is requesting their HUB ID for SmartPost. They are using TEST credentials. What HUB ID should you provide?</h3>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-A" value="A" />
                        <label for="q1-answers-A">5185</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-B" value="B" />
                        <label for="q1-answers-B">5531</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-C" value="C" />
                        <label for="q1-answers-C">5061</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-D" value="D" />
                        <label for="q1-answers-D">None of the above</label>
                    </div>
                
                </li>
                
               <li>
                
                    <h3>When creating a certificaiton request, what is the main question, if not answered correclty, that could cause delays?</h3>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-A" value="A" />
                        <label for="q2-answers-A">Will the customer's application be generating shipping labels?</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-B" value="B" />
                        <label for="q2-answers-B">Will the customer register as a "Corporate Developer" or a "Consultant"?</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-C" value="C" />
                        <label for="q2-answers-C">Will the customer be shipping Express, Ground, or both?</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-D" value="D" />
                        <label for="q2-answers-D">Is the Customer requesting Pickup Services?</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>When creating a consultation request, what item MUST the customer have before we can submit the request?</h3>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-A" value="A" />
                        <label for="q3-answers-A">Authentication Key</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-B" value="B" />
                        <label for="q3-answers-B">Meter Number</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-C" value="C" />
                        <label for="q3-answers-C">Test Account</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-D" value="D" />
                        <label for="q3-answers-D">Production Account</label>
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
                
                    <h3>Choose a Web Service Advance Service</h3>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-A" value="A" />
                        <label for="q5-answers-A">Address Validation</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-B" value="B" />
                        <label for="q5-answers-B">Rating</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-C" value="C" />
                        <label for="q5-answers-C">Tracking</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-D" value="D" />
                        <label for="q5-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>When adding an LTL account to FXCT, what address should the customer use?</h3>
                    
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
                
                    <h3>A customer has provided you with a test account, what screen should you login to via BlueZone/3270?</h3>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-A" value="A" />
                        <label for="q7-answers-A">PTSB</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-B" value="B" />
                        <label for="q7-answers-B">IMS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-C" value="C" />
                        <label for="q7-answers-C">ITSB</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-D" value="D" />
                        <label for="q7-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>When creating a ship request via Web Services, what value should be used for an international ground shipment?</h3>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-A" value="A" />
                        <label for="q8-answers-A">INTERNATIONAL_GROUND</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-B" value="B" />
                        <label for="q8-answers-B">SAME_DAY</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-C" value="C" />
                        <label for="q8-answers-C">FEDEX_INTERNATIONAL_GROUND</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-D" value="D" />
                        <label for="q8-answers-D">FEDEX_GROUND</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>What data sources are available when running a batch rate request via FXCT?</h3>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-A" value="A" />
                        <label for="q9-answers-A">ODBC, quickbooks and Excel</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-B" value="B" />
                        <label for="q9-answers-B">HTML, CSV and Excel</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-C" value="C" />
                        <label for="q9-answers-C">ODBC, Delimited Text and Excel</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-D" value="D" />
                        <label for="q9-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Can we track LIVE shipments via L6 in Web Services?</h3>
                    
                    <div>
                        <input type="radio" name="q10-answers" id="q10-answers-A" value="A" />
                        <label for="q10-answers-A">True</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q10-answers" id="q10-answers-B" value="B" />
                        <label for="q10-answers-B">False</label>
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