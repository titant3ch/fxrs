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

		<h1>Entry FXRS Quiz</h1>

        <hr />
		
		<form action="grade.php" method="post" id="quizie">
		
            <ol>
            
                <li>
                
                    <h3>An IP address is best defined as...</h3>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-A" value="A" />
                        <label for="q1-answers-A">An IP Address is a unique number consisting of 4 parts separated by dots (eg: 217.247.84.89) associated with every system connected to a network</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-B" value="B" />
                        <label for="q1-answers-B">Internet Provider Address. The address of a company that provides individuals and other company’s access to the Internet.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-C" value="C" />
                        <label for="q1-answers-C">The location of Internet Packets measured in kilobytes on a network.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1-answers" id="q1-answers-D" value="D" />
                        <label for="q1-answers-D">All of the above.</label>
                    </div>
                
                </li>
                
               <li>
                
                    <h3>Malware is best defined as...</h3>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-A" value="A" />
                        <label for="q2-answers-A">A computer program designed to protect the operating system from viruses.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-B" value="B" />
                        <label for="q2-answers-B">Microsoft Arithmetic LAN software. Software run in the background of any Windows based computer system used to manage network connections</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-C" value="C" />
                        <label for="q2-answers-C">Software designed to infiltrate or damage a computer system without the owner's informed consent</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2-answers" id="q2-answers-D" value="D" />
                        <label for="q2-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Which one of the following best defines the term Operating System?</h3>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-A" value="A" />
                        <label for="q3-answers-A">The software that allows computer users to run applications with the hardware of a specific system. Microsoft® Windows® or Apple® Computer's OS are examples of operating systems</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-B" value="B" />
                        <label for="q3-answers-B">The master control program that manages a computer's internal functions and provides a means of control to the computer's operations and file system</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-C" value="C" />
                        <label for="q3-answers-C">The software that manages the hardware and software interface of a computer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3-answers" id="q3-answers-D" value="D" />
                        <label for="q3-answers-D">All of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Bandwidth</h3>
                    
                    <div>
                        <input type="radio" name="q4-answers" id="q4-answers-A" value="A" />
                        <label for="q4-answers-A">The speed at which data can be transferred from the server to the client</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4-answers" id="q4-answers-B" value="B" />
                        <label for="q4-answers-B">A measurement of how much information can be carried in a given time period (usually a seconover a wired or wireless communications link</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4-answers" id="q4-answers-C" value="C" />
                        <label for="q4-answers-C">A unit of information or computer storage equal to one billion bytes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4-answers" id="q4-answers-D" value="D" />
                        <label for="q4-answers-D">None of the above</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Select the URL from the list below</h3>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-A" value="A" />
                        <label for="q5-answers-A">Spiderm0nkey@gmail.com</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-B" value="B" />
                        <label for="q5-answers-B">http://www.yahoo.com</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-C" value="C" />
                        <label for="q5-answers-C">D:\downloads\standard</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5-answers" id="q5-answers-D" value="D" />
                        <label for="q5-answers-D">192.168.0.1</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>

    <script>
        var form = document.getElementById("quizie");
            form.reset();
    </script>

</body>

</html>