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
                <!-- Question 1 -->
            
                <li>
                
                    <h3>What file references the URSA files and is used for troubleshooting URSA?</h3>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-A" value="A" />
                        <label for="q1-answers-A">cfg.ini</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-B" value="B" />
                        <label for="q1-answers-B">config.ini</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-C" value="C" />
                        <label for="q1-answers-C">svc.ini</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-D" value="D" />
                        <label for="q1-answers-D">server.ini</label>
                    </div>
                
                </li>
                
                <!-- Question 2 -->

               <li>
                
                    <h3>What is the URSA check digit for a 1D enabled meter for todays month?</h3>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-A" value="A" />
                        <label for="q2-answers-A">1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-B" value="B" />
                        <label for="q2-answers-B">3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-C" value="C" />
                        <label for="q2-answers-C">5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-D" value="D" />
                        <label for="q2-answers-D">8</label>
                    </div>
                
                </li>

                <!-- Question 3 -->

                <li>
                
                    <h3>Using a version 4 URSA table, what file is formated correctly?</h3>
                    
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

                <!-- Question 4 -->

                <li>
                
                    <h3>What tool is used to validate server transactions?</h3>
                    
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

                <!-- Question 5 -->

                <li>
                
                    <h3>Customer has an ASTRA enabled meter. When checking their check digit, what field should we look for in the reply?</h3>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-A" value="A" />
                        <label for="q5-answers-A">159</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-B" value="B" />
                        <label for="q5-answers-B">65</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-C" value="C" />
                        <label for="q5-answers-C">187</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-D" value="D" />
                        <label for="q5-answers-D">664</label>
                    </div>
                
                </li>

                <!-- Question 6 -->

                <li>
                
                    <h3>What fields, in the reply, return discount rates?</h3>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-A" value="A" />
                        <label for="q6-answers-A">34-37</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-B" value="B" />
                        <label for="q6-answers-B">25-26</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-C" value="C" />
                        <label for="q6-answers-C">1221-1226</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q6-answers" id="q6-answers-D" value="D" />
                        <label for="q6-answers-D">None of the above</label>
                    </div>
                
                </li>

                <!-- Question 7 -->

                <li>
                
                    <h3>What is the default port that server is listening on?</h3>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-A" value="A" />
                        <label for="q7-answers-A">443</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-B" value="B" />
                        <label for="q7-answers-B">127.0.0.1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-C" value="C" />
                        <label for="q7-answers-C">2000</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q7-answers" id="q7-answers-D" value="D" />
                        <label for="q7-answers-D">None of the above</label>
                    </div>
                
                </li>

                <!-- Question 8 -->

                <li>
                
                    <h3>In field 3062, what value would return list rates only?</h3>
                    
                    <div>
                        <input type="radio" name="q8-answers" id="q8-answers-A" value="A" />
                        <label for="q8-answers-A">7</label>
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
                        <label for="q8-answers-D">None of the above</label>
                    </div>
                
                </li>

                <!-- Question 9 -->

                <li>
                
                    <h3>What 2 services must be set to local system and not a local admin account?</h3>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-A" value="A" />
                        <label for="q9-answers-A">Configmanager and shipmanager</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-B" value="B" />
                        <label for="q9-answers-B">Admin and Cls</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-C" value="C" />
                        <label for="q9-answers-C">Route and Shipmanager</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q9-answers" id="q9-answers-D" value="D" />
                        <label for="q9-answers-D">Configmanager and SQL</label>
                    </div>
                
                </li>

                <!-- Question 10 -->

                <li>
                
                    <h3>Restarting shipmanager will not halt a customers shipping?</h3>
                    
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
            
            <input id="submitAnswers" type="submit" value="Submit Answers" />
		
		</form>
	
	</div>

    <script>
        var form = document.getElementById("quizie");
            form.reset();
    </script>

</body>

</html>