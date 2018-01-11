<?php
$title= "The Botanical Park | Contact";
$description="The different ways of reaching or contacting the The Botanical Park.";
$keywords="botanical, park, aarhus, green, nature, denmark, city center, email, telephone, borgertip, newsletter ";
include("includes/head.php"); ?>

	<body>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        
		<!--Header:-->
		<?php include("includes/header.php"); ?>
		<!--Navigation:-->
		<?php include("includes/navigation.php"); ?>

		<!--Content here-->
		<article>
			<h1>Contact Us</h1>

			<h2>Have a question?</h2>
			<p>We’re always happy to hear from you, and depending on the nature of your enquiry, there are a number of different ways to reach us. For a quick answer to questions related to the Botanical Park, make sure you check out our <a href="faq.php">Frequently Asked Questions</a>, otherwise keep reading to see how to get in touch.</p>

			<h2>Send us a message by filling out this form: </h2>
            
            <div class="contactForm">
                <form action="mailto:kraftsa60869@th-nuernberg.de" id="contactForm" onsubmit="sendEMail()" enctype="text/plain"> 
                    Your name: <br/>
                    <input type="text" name="name" id="name" size=60/>
                    <br/>
                    Your email: <br/>
                    <input type="email" name="email" id="senderEMail" size=60/>
                    <br/>
                    Your reason for contacting us: <br/>
                    <select name="reasonForContact" id="rsnCntct">
                        <option value="genEnquiry">General Enquiry</option>
                        <option value="prblmPath">Problem with the paths</option>
                        <option value="prblmPlant">Problem with trees/ the vegetation</option>
                        <option value="rprtRepair">Report with something that needs repairing</option>
                        <option value="rptrWebsite">Report an issue with the website</option>
                        <option value="project">Enquiry about a project</option>
                        <option value="event">Enquiry about an event</option>
                        <option value="other">Any other reason</option>
                    </select>
                    <br/>
                    <textarea name="message" rows="10" cols="60" id="msgContact">Please enter your message here.</textarea>
                    <br/>
                    <input type="submit" value="Submit" />
                    <input type="reset" value="Reset"/>
                </form>
            </div>
                        
            <script src="javascript/contactMail.js"></script>
            <!--Contact Table-->
			<table id="contactTable">
			  <tr class="greyRow">
				<th>Need to reach the Kommune?</th>
				<th>Thinking of hosting an event?</th> 
			  </tr>
			  <tr>
				<td>Call: 89 40 44 00</td>
				<td>You can get more information on how to book your event through the Brug Aarhus <a href="http://brugaarhus.dk/"></a>website.</td>

			  </tr>
			  <tr class="greyRow">
				<th>Spotted something that needs fixing?</th>
				<th>Want to receive the latest news?</th>
			  </tr>
			  <tr>
				<td>You can download the <a href="http://www.aarhus.dk/borgertip">BorgerTip App</a> to report any damage or lack of maintenance within the Kommune.
						Available on <a href="https://itunes.apple.com/dk/app/skyhost-borger-tip/id1124427859?l=da&mt=8">iOS</a> or <a href="https://play.google.com/store/apps/details?id=com.skyhost.citizentip">Android</td>
				<td>You can subscribe to our newsletter to be informed about events, maintenance and changes. It is sent out monthly and only contains information relevant to the Botanical Park.</td>

			  </tr>
			</table>

			<!--Need to reach the Kommune?</h2>
            <p>Call: 89 40 44 00</p>

			<h2>Spotted something that needs fixing?</h2>
			<p>You can download the <a href="http://www.aarhus.dk/borgertip">BorgerTip App</a> to report any damage or lack of maintenance within the Kommune.
			Available on <a href="https://itunes.apple.com/dk/app/skyhost-borger-tip/id1124427859?l=da&mt=8">iOS</a> or <a href="https://play.google.com/store/apps/details?id=com.skyhost.citizentip">Android</a>.
			</p>

			<h2>Thinking of hosting an event?</h2>
			<p>You can get more information on how to book your event through the Brug Aarhus website.</p>

			<h2>Want to receive the latest news?</h2>
			<p>You can subscribe to our newsletter to be informed about events, maintenance and changes. It is sent out monthly and only contains information relevant to the Botanical Park.
			</p>
			<!--SUBSCRIBE button here-->
			

			<!--Include the option SUBSCRIBE for a Newsletter + SoMe-->

		</article>


		<!--Footer:-->
		<?php include("includes/footer.php"); include("includes/mobileNav.php"); ?>
	</body>

</html>
