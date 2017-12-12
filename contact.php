<?php include("includes/head.php"); ?>

	<body>
		<!--Header:-->
		<?php include("includes/header.php"); ?>
		<!--Navigation:-->
		<?php include("includes/navigation.php"); ?>
			
		<!--Content here-->
		<article>
			<h1>Contact us</h1>
			
			<h2>Have a question?</h2>
			<p>Check out our Frequently Asked Questions (or use the search box at the top of the site).</p>
			
			<h2>Send us a message by filling out this form: </h2>
            
            <form action="mailto:eaasfk@students.eaaa.dk" method="post" enctype="text/plain">
                Your name: <br/>
                <input type="text" name="name"/>
                <br/>
                Email: <br/>
                <input type="email" name="email"/>
                <br/>
                Reason for contacting us: <br/>
                <select name="reasonForContact">
                    <option value="genEnquiry">General Enquiry</option>
                    <option value="prblmPath">Problem with the paths</option>
                    <option value="prblmPlant">Problem with trees/ the vegetation</option>
                    <option value="rprtRepair">Report somthing that needs repairing</option>
                    <option value="rptrWebsite">Report an issue with the website</option>
                    <option value="project">Enquiry about a project</option>
                    <option value="event">Enquiry about an event</option>
                    <option value="other">Other reason</option>
                </select>
                <br/>
                <textarea name="message" rows="10" cols="30">Please enter your message here.</textarea> 
                <br/>
                <input type="submit" value="Submit"/>
                <input type="reset" value="Reset"/>
            </form>
            
			<!--Place for a Contact Form containing
			Name:
			Email:
			Reason for contacting us:
			General enquiry
			Problem with the paths
			Problem with trees/ the vegetation
			Report something that needs repairing
			Report an issue with the website
			Enquiry about a project
			Enquiry about an event
			Other reason
			Include option to subscribe to newsletter here as well
			SUBMIT
			
			Example thank you message:

			Thank you for for contacting us. We really value your input, and will get back to you as soon as we can. We try to answer all messages by the end of the next working day.-->
			
			<h2>Need to reach the Kommune?</h2>
			<p>Call: 89 40 44 00
			
			<h2>Spotted something that needs fixing?</h2>
			<p>You can download the <a href="http://www.aarhus.dk/borgertip">BorgerTip App</a> to report any damage or lack of maintenance within the Kommune. 
			Available on <a href="https://itunes.apple.com/dk/app/skyhost-borger-tip/id1124427859?l=da&mt=8">iOS</a> or <a href="https://play.google.com/store/apps/details?id=com.skyhost.citizentip">Android</a>.
			</p>
			
			<h2>Thinking of hosting an event?</h2>
			<p>You can get more information on how to book your event through the Brug Aarhus website.</p>
			
			<h2>Want to receive the latest news?</h2>
			<p>You can subscribe to our newsletter to be informed about events, maintenance and changes. It is sent out monthly and only contains information relevant to the Botanical Park.
			<!--SUBSCRIBE button here-->
			</p>
			
			<!--Include the option SUBSCRIBE for a Newsletter + SoMe-->
			
		</article>
		
		
		<!--Footer:-->
		<?php include("includes/footer.php"); ?>
	</body>

</html>