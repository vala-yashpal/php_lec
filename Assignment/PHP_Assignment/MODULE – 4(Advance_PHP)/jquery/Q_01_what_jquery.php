<?php

$Ans = " ";
echo "<h4 style=color:black;>Answer =".$Ans."<h4>";









    $Question1 = "01: What is jQuery?"; 
    $Ans1 = " jQuery is a JavaScript framework designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax";        
    echo "<h3 style=color:red;>Question =".$Question1."<h3>";
    echo "<h4 style=color:black;>Answer =".$Ans1."<h4>";

    $Question2 = "02: How are JavaScript and jQuery different?";
    $Ans2 = " JavaScript is an independent language and can exist on its own. jQuery is a JavaScript library. It would not have been invented had JavaScript was not there.";         
    echo "<h3 style=color:red;>Question =".$Question2."<h3>";
    echo "<h4 style=color:black;>Answer =".$Ans2."<h4>";

    $Question3 = "03: Which is the starting point of code execution in jQuery?";    
    $Ans3 = "  $(document). ready() function is the starting point of jQuery code.";     
    echo "<h3 style=color:red;>Question =".$Question3."<h3>";
    echo "<h4 style=color:black;>Answer =".$Ans3."<h4>";


    $Question4 = "04: Document Load Vs Window. Load() jQuery";
    $Ans4 = " The key difference between $(document). ready() and $(window). load() event is that the code included inside onload function will run once the entire page(images, iframes, stylesheets,etc) are loaded whereas the $(document). ready() event fires before all images,iframes etc.";
    echo "<h3 style=color:red;>Question =".$Question4."<h3>";
    echo "<h4 style=color:black;>Answer =".$Ans4."<h4>";         

    $Ans5 = " prop() method provides a way to explicitly retrieve property values, while . attr() retrieves attributes. For example, selectedIndex, tagName, nodeName, nodeType, ownerDocument, defaultChecked, and defaultSelected should be retrieved and set with the . prop() method.";
    $Question5 = "05: What is the difference between prop and attr?";         
    echo "<h3 style=color:red;>Question =".$Question5."<h3>";
    echo "<h4 style=color:black;>Answer =".$Ans5."<h4>";

    $Question6 = "06: Explain Difference Between JQuery And JavaScript?"; 
    $Ans6 = " JavaScript is an independent language and can exist on its own. jQuery is a JavaScript library. It would not have been invented had JavaScript was not there. jQuery is still dependent on JavaScript as it has to be converted to JavaScript for the browser in-built JavaScript engine to interpret and run it";
    echo "<h3 style=color:red;>Question =".$Question6."<h3>";
    echo "<h4 style=color:black;>Answer =".$Ans6."<h4>";        

    $Question7 = "07: How We Can Select The Specified li Element From The List Of li Elements In ul?";     
    $Ans7 = " '<'ul'>''<'li id='id-1' class='id-1' data-id='1''>'Element'<'/li'>''<'/ul'>' li.id-1{ // something...}";
    echo "<h3 style=color:red;>Question =".$Question7."<h3>";
    echo "<h4 style=color:black;>Answer =".$Ans7."<h4>";    

    $Question8 = "08: In <table> Design Change The Color Of Even <tr> Elements To “green”And Change The Color Of Odd <tr> Elements To “blue” Color? Give An Example Code?";         
    echo "<h3 style=color:red;>Question =".$Question8."<h3>";

    $Question9 = "09: How We Can Implement Animation Effects In Jquery?";         
    echo "<h3 style=color:red;>Question =".$Question9."<h3>";

    $Question10 = "10: Apply jQuery validation using library.";         
    echo "<h3 style=color:red;>Question =".$Question10."<h3>";

    $Question11 = "11: Create custom dynamic function for require field validator.";         
    echo "<h3 style=color:red;>Question =".$Question11."<h3>";

    $Question12 = "12:Get state data by country selection (Ajax).";         
    echo "<h3 style=color:red;>Question =".$Question12."<h3>";

    $Question13 = "13: Image uploading with preview.";         
    echo "<h3 style=color:red;>Question =".$Question13."<h3>";
    
?>