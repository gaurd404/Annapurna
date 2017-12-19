<?php
$page_title = "FAQ";
include('login_home.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FAQ's</title>
        <!-- CSS -->
        <link rel="stylesheet" href="FAQ.css">
    </head>
	<style>
	body {
	font-family: montserrat, arial, opensans;	
}
	</style>
    <body>
        <h1>Frequently Asked Questions</h1>
        <div class="panel">
            <div id="q1" class="question">1.  I am unable to register on the website what should  i do?
                <img id="arrow1-down" class="arrow down" src="arrow-down.svg">
                <img id="arrow1-up" class="arrow up collapse" src="arrow-up.svg">
            </div>
            <div id="a1" class="answer collapse">
            Answer1: There might be reason that you have not provide the correct details about yourself. Details like AADHAR number, permanent address, E-mail address are mandatory.
            </div>
        </div>
        <br>
        <div class="panel">
            <div id="q2" class="question">2.I have booked the compartment can i come one day earlier for storage?
                <img id="arrow2-down" class="arrow down" src="arrow-down.svg">
                <img id="arrow2-up" class="arrow up collapse" src="arrow-up.svg">
            </div>
            <div id="a2" class="answer collapse">
                Answer2: No, you must adhere to the time table provided to you.Any such action will not be tolerated , we will be not answerable to any kind of inconvenience.
            </div>
        </div>
        <br>
        <div class="panel">
            <div id="q3" class="question">3.I am not getting the transport facility available for my account?
                <img id="arrow3-down" class="arrow down" src="arrow-down.svg">
                <img id="arrow3-up" class="arrow up collapse" src="arrow-up.svg">
            </div>
            <div id="a3" class="answer collapse">
                Answer3: Our transport facility covers 750km of radius for nearby warehouse transport.Those who are outside this range can't avail the facility.
            </div>
            <br>
            <div class="panel">
            <div id="q3" class="question">4.Can i withdrawl my crops for selling in market,if i am getting high price and profit for my crop?
                <img id="arrow3-down" class="arrow down" src="arrow-down.svg">
                <img id="arrow3-up" class="arrow up collapse" src="arrow-up.svg">
            </div>
            <div id="a3" class="answer collapse">
                Answer4: Yes, you can withdraw your crops in case you get more price as well as profit for your crops but you have to pay nominal charges for storage of the crops till withdrawl date
            </div>
                <br>
                <div class="panel">
            <div id="q3" class="question">5. Do You change your prices during any season or particular events?
                <img id="arrow3-down" class="arrow down" src="arrow-down.svg">
                <img id="arrow3-up" class="arrow up collapse" src="arrow-up.svg">
            </div>
            <div id="a3" class="answer collapse">
                Answer5: No, we never indulge in this kind of activity, our moto is customer satisfaction with beleive in excellence.Any such issue, if found must be brought to notice of the warehouse administration.
            </div>
                    <br>
                  <div class="panel">
            <div id="q3" class="question">6.Do you have any kind of tie up with any other warehouse for storing purposes? 
                <img id="arrow3-down" class="arrow down" src="arrow-down.svg">
                <img id="arrow3-up" class="arrow up collapse" src="arrow-up.svg">
            </div>
            <div id="a3" class="answer collapse">
                Answer7:No,we don't have any kind of tie-up with any other warehouse,although our chain of warehouse full-fills most of the demands. 
            </div>    
            
        </div>
        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="FAQ.js"></script>
    </body>
</html>
