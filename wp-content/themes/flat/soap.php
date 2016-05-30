<?php
/*
Template Name: SOAP
*/
?>

<?php get_header(); ?>

<div id="pagina">

	<section class="container" id="soap">

		<div class="heading">
			<h1><?php the_title(); ?></h1>
			<hr>
		</div>

		<h2>Installing and setting up SOAP UI</h2>
		<p>During this section we will learn how to:</p>
		<ol>
			<li>Download/Install SOAP UI</li>
			<li>Setting up Project</li>
			<li>Adding WSDL</li>
			<li>Loading Web Service Requests</li>
		</ol>

		<h3>Download/Install SOAP UI</h3>
		<p>Installer can be found under the following 2 areas</p>
		<ul>
			<li><a href="https://www.soapui.org/downloads/latest-release.html" target="_blank">Soap UI.org</a></li>
			<li>W:\tss\fxrs\FXRS\Training Install Files</li>
		</ul>

		<h3>Setting up Project</h3>
		<p>We now have SOAP UI installed, we can now import a sample project.</p>
		<p>You can download a sample project that includes the most commonly used standard and advance services, all you have to do is <a href="">clicking here!</a></p>
		<p>Make sure to save the project to your local system. Now, let's import the project via SOAP UI.</p>
		<ul>
			<li>File > Import Project <b>OR</b> Keyboard shortcut Ctrl + I</li>
		</ul>
		<p>We should then be able to see the project loaded on the left side aka "Navigator" sidebar.</p>

		<h2 class="title">The basic concepts of SOAP</h2>
		<p>You may have had this question in the past or now. What does SOAP actually stand for? Well this is the technical definition:</p>
		<p><b>SOAP (Simple Object Access Protocol) is a messaging protocol that allows programs that run on disparate operating systems (such as Windows and Linux) to communicate using Hypertext Transfer Protocol (HTTP) and its Extensible Markup Language (XML).</b></p>
		<p>That being said, lets break down a SOAP request so you can better understand the format.</p>

		<h2>SOAP Building Blocks</h2>
		<p>A SOAP message is an ordinary XML document containing the following 
			<dfn>
				<abbr class="def" title="An individual component of an HTML document or web page.">elements:</abbr>
			</dfn>
		</p>
		<ol>
			<li>An Envelope element that identifies the XML document as a SOAP message</li>
			<li>A Header element that contains header information</li>
			<li>A Body element that contains call and response information</li>
		</ol>
		<p>Don't freak out, lets explain each section one by one.</p>

		<h3>Envelope Element</h3>
		<p>The required SOAP Envelope element is the root element of a SOAP message. This element defines the XML document as a SOAP message. Meaning, this section makes the request a SOAP request.</p>

		<h4>Example</h4>
		<pre><code class="language-markup">
			<xmp>
<soap:Envelope
xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"
xmlns:v16="http://fedex.com/ws/rate/v16">
  ...
  Web Service Request goes here
  ...
</soap:Envelope>
			</xmp>
		</code></pre>

		<h5>The xmlns:soap Namespace</h5>
		<p>Notice the xmlns:soap namespace in the example above. It should always have the value of: "http://schemas.xmlsoap.org/soap/envelope/" when using SOAP UI.</p>
		<p>The namespace defines the Envelope as a SOAP Envelope. Namespaces' are also case sensitive and must be used exactly like you specified in the Envelope element.</p>

		<h5>The xmlns:v16 Namespace</h5>
		<p>As mentioned above the xmlns section is always needed. This is with or without the namespace being declared. So wait? We can remove the namespace of v16 in this example and still validate the request? Yes you can. A few things to keep in mind. If you do declare a namespace, like the example above, your request will also have to have the name space declared per element. Uhh, what does this mean. Let me show you an example with and without namespace declaration with your request.</p>
		
		<h5>With Namespace</h5>
				<pre><code class="language-markup">
			<xmp>
<v16:WebAuthenticationDetail> 
	<v16:UserCredential> 
		<v16:Key>XXXXXXXXXX</v16:Key> 
		<v16:Password>XXXXXXXXXX</v16:Password> 
	</v16:UserCredential> 
</v16:WebAuthenticationDetail> 
			</xmp>
		</code></pre>

		<h5>Without Namespace</h5>
				<pre><code class="language-markup">
			<xmp>
<WebAuthenticationDetail> 
	<UserCredential> 
		<Key>XXXXXXXXXX</Key> 
		<Password>XXXXXXXXXX</Password> 
	</UserCredential> 
</WebAuthenticationDetail> 
			</xmp>
		</code></pre>

		<p>Now, how would the Envelope Element look like without v16 namespace? Example is listed below.</p>

				<pre><code class="language-markup">
			<xmp>
<soap:Envelope
xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"
xmlns="http://fedex.com/ws/rate/v16">
  ...
  Web Service Request goes here
  ...
</soap:Envelope>
			</xmp>
		</code></pre>

		<p>Its understood that we must include both items</p>
		<ul>
			<li>xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"</li>
			<li>xmlns="http://fedex.com/ws/rate/v16"</li>
		</ul>
		<p>You may ask yourself what are these used for? Simple explanation, the following urls validate the request passed in the body section.</p>
		<p>We know that "http://schemas.xmlsoap.org/soap/envelope/" is always a fixed value. How do we know what url to use for the next line? This is depending on the type of request one is sending. In this example I will be using a rate request. For a ship request you will need to use "http://fedex.com/ws/ship/v15".</p>

		<h3>Header Element</h3>
		<p>The optional SOAP Header element contains application-specific information (like authentication, payment, etc) about the SOAP message.</p>
		<p>This section is rarely used by WIS requests.</p>

		<h3>The SOAP Body Element</h3>
		<p>The required SOAP Body element contains the actual SOAP message intended for the ultimate endpoint of the message. Meaning this is where the XML Web Service request is placed.</p>

				<h4>Example</h4>
				<p>In this example I used a simple Address Validation request.</p>
		<pre><code class="language-markup">
			<xmp>
<soapenv:Envelope 
xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" 
xmlns="http://fedex.com/ws/addressvalidation/v3">
   <soapenv:Header/>
   <soapenv:Body>
      <AddressValidationRequest>
         <WebAuthenticationDetail>
            <UserCredential>
               <Key>MFGF2ccFtEEJgwOH</Key>
               <Password>jLiMsso0dSkRXVxuEVqQ24Jdq</Password>
            </UserCredential>
         </WebAuthenticationDetail>
         <ClientDetail>
            <AccountNumber>510087968</AccountNumber>
            <MeterNumber>1199450</MeterNumber>
         </ClientDetail>
         <TransactionDetail>
            <CustomerTransactionId>***Address Validation Request***</CustomerTransactionId>
         </TransactionDetail>
         <Version>
            <ServiceId>aval</ServiceId>
            <Major>3</Major>
            <Intermediate>0</Intermediate>
            <Minor>0</Minor>
         </Version>
         <InEffectAsOfTimestamp>2016-02-02T12:38:26.1312556-05:00</InEffectAsOfTimestamp>
         <AddressesToValidate>
            <Address>
               <StreetLines>2800 Wells Branch PKWY</StreetLines>
               <City>Austin</City>
               <StateOrProvinceCode>TX</StateOrProvinceCode>
               <PostalCode>78728</PostalCode>
               <CountryCode>US</CountryCode>
            </Address>
         </AddressesToValidate>
      </AddressValidationRequest>
   </soapenv:Body>
</soapenv:Envelope>
			</xmp>
		</code></pre>
		<p>Notice how this Address Validation request shows all the required fields for a "SOAP" request.</p>
		<ul>
			<li>Envelope Element</li>
			<li>Header Element</li>
			<li>Body Element</li>
		</ul>

	</section>

</div>

<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backtotop.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/prism.js"></script>