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
                
                    <h3>What transaction code should I be using for an End of day close?</h3>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-A" value="A" />
                        <label for="q1-answers-A">001</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-B" value="B" />
                        <label for="q1-answers-B">004</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-C" value="C" />
                        <label for="q1-answers-C">007</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-D" value="D" />
                        <label for="q1-answers-D">009</label>
                    </div>
                
                </li>
                
               <li>
                
                    <h3>What would be a properly configured transaction for requesting a tracking number?</h3>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-A" value="A" />
                        <label for="q2-answers-A">0,"004"1,"Assign Tracking Number"498,"550192"499,"1"99,""</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-B" value="B" />
                        <label for="q2-answers-B">0,"004"1,"Assign Tracking Number"498,"550192"499,"1"99</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-C" value="C" />
                        <label for="q2-answers-C">0,"007"1,"Assign Tracking Number"498,"550192"499,"1"99,""</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-D" value="D" />
                        <label for="q2-answers-D">"004"1,"Assign Tracking Number"498,"550192"499,"1"99,""</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Using a version 5 URSA table, what file is formated correctly?</h3>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-A" value="A" />
                        <label for="q3-answers-A">Z9081951</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-B" value="B" />
                        <label for="q3-answers-B">V9081951</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-C" value="C" />
                        <label for="q3-answers-C">X9081951</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-D" value="D" />
                        <label for="q3-answers-D">Z5081941</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>What tool allows you to validate server transactions?</h3>
                    
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
                
                    <h3>What to recommended fields are used to save shipping label to customers desktop?</h3>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-A" value="A" />
                        <label for="q5-answers-A">187 & 535</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-B" value="B" />
                        <label for="q5-answers-B">137 & 537</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-C" value="C" />
                        <label for="q5-answers-C">187 & 538</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-D" value="D" />
                        <label for="q5-answers-D">187 & 537</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>When using field 1670, what value would be used for 1lbs?</h3>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-A" value="A" />
                        <label for="q6-answers-A">100</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-B" value="B" />
                        <label for="q6-answers-B">10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-C" value="C" />
                        <label for="q6-answers-C">1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-D" value="D" />
                        <label for="q6-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>What value should be used, for Smartpost service type, when using field 1274?</h3>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-A" value="A" />
                        <label for="q7-answers-A">SPXREF</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q7-answers-B" value="B" />
                        <label for="q7-answers-B">SmartPost</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-C" value="C" />
                        <label for="q7-answers-C">1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-D" value="D" />
                        <label for="q7-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>What transaction code should I be using for a ship request?</h3>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-A" value="A" />
                        <label for="q8-answers-A">007</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-B" value="B" />
                        <label for="q8-answers-B">020</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-C" value="C" />
                        <label for="q8-answers-C">023</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-D" value="D" />
                        <label for="q8-answers-D">120</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>When using field 23, what value should be used when billing recipient for a ground shipment?</h3>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-A" value="A" />
                        <label for="q9-answers-A">5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-B" value="B" />
                        <label for="q9-answers-B">3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-C" value="C" />
                        <label for="q9-answers-C">2</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-D" value="D" />
                        <label for="q9-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Anyone can use FSMS?</h3>
                    
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