<?php
	
	$translationIndex = array(
		"Home",
		"FAQ",
		"A service from .SE",
		"Test your DNS-server and find errors",
		"Enter your domain name in the field below to test the DNS-servers that are used.",
		"Test now",
		"Basic results",
		"Advanced results",
		"Test history",
		"Error loading history",
		"No test history found",
		"Page",
		".SE (The Internet Infrastructure Foundation)",
		"Domain doesn't exist",
		"The domain you entered doesn't seem to be registered",
		"Loading",
		"Waiting for the test results to be loaded",
		"All tests are ok",
		"Warnings found in test",
		"Errors found in test",
		"About DNSCheck",
		"DNSCheck info",
		"About DNS",
		"DNS info",
		"DNSCheck FAQ",
		"DNSCheck FAQ contents",
		"Explanation",
		"Test was ok",
		"Test contains warnings",
		"Test contains errors",
		"Test was not performed",
		"Delegation",
		"Nameserver",
		"Consistency",
		"SOA",
		"Connectivity",
		"DNSSEC",
		"Link to this test"
	);
	
	$translationMap = array(
		"en" => array(
			"Home",
			"FAQ",
			"A service from .SE",
			"Test your DNS-server and find errors",
			"Enter your domain name in the field below to test the DNS-servers that are used. Example: iis.se",
			"Test now",
			"Basic results",
			"Advanced results",
			"Test history",
			"Error loading history",
			"No test history found",
			"Page",
			".SE (The Internet Infrastructure Foundation)",
			"Domain doesn't exist",
			"The domain you provided doesn't seem to be delegated or was entered incorrectly. You need to enter only the domain name, like �iis.se�, not the name of a subdomain, like �dev.iis.se� or a webserver like �www.iis.se�.",
			"Loading",
			"Waiting for the test results to be loaded",
			"All tests are ok",
			"Warnings found in test",
			"Errors found in test",
			"About DNSCheck",
			"<img src='_img/img_trafficlight.png' alt='Trafficlight' class='right' /><p>DNSCheck is a program that was designed to help people check, measure and hopefully also understand the workings of the Domain Name System, DNS. When a domain (aka zone) is submitted to DNSCheck it will investigate the domain's general health by traversing the DNS from root (.) to the TLD (Top Level Domain, like .SE) to eventually the nameserver(s) that holds the information about the specified domain (like iis.se). Some other sanity checks, for example measuring host connectivity, validity of IP-addresses and control of DNSSEC signatures will also be performed.</p>",
			"About the domain name system, DNS",
			"<p>The domain name system (DNS in short) is what could be called the �phone book� of the Internet. It keeps track of the mapping of, for example, a human-readable website name (like www.iis.se) to the slightly more arcane form of an IP-address that the computer needs to initiate communication (in this case 212.247.7.229). </p><p>Besides browsing the Internet with your web browser using website names instead of IP-addresses the DNS also makes sure your emails find their way. In short, a stable DNS is vital for most companies to maintain a working and efficient operation.</p>",
			"DNSCheck FAQ",
			'<h5 id="findex">Index</h5> 
			<ol>

				<li><a href="#f1">What is DNSCheck?</a></li>
				<li><a href="#f2">What is DNS?</a></li>
				<li><a href="#f3">What about www.dnscheck.se?</a></li>
				<li><a href="#f4">Why a new DNSCheck?</a></li>
				<li><a href="#f5">How does DNSCheck work?</a></li>
				<li><a href="#f6">How can DNSCheck help me?</a></li>
				<li><a href="#f7">DNSCheck goes �Error�/�Warning� on my domain, what does it mean?</a></li>
				<li><a href="#f8">How can DNSCheck judge what is right and wrong?</a></li>
				<li><a href="#f9">Does DNSCheck handle IPv6?</a></li>
				<li><a href="#f10">Does DNSCheck handle DNSSEC?</a></li>
				<li><a href="#f11">What makes DNSCheck differ from other zone controlling software?</a></li>
				<li><a href="#f12">Will DNSCheck work for my non-.se-domain?</a></li>
				<li><a href="#f13">DNSCheck and privacy</a></li>
				<li><a href="#f14">How come I can�t test my domain?</a></li>
				<li><a href="#f15">What kind of queries does DNSCheck generate?</a></li>

			</ol>
			<div class="divider"></div>

			<h5 id="f1">What is DNSCheck?</h5>

			<p>DNSCheck is a program that was designed to help people check, measure and hopefully also understand the workings of the Domain Name System, DNS. When a domain (aka zone) is submitted to DNSCheck it will investigate the domain�s general health by traversing the DNS from root (.) to the TLD (Top Level Domain, like .SE) to eventually the nameserver(s) that holds the information about the specified domain (like iis.se). Some other sanity checks, for example measuring host connectivity, validity of IP-addresses and control of DNSSEC signatures will also be performed. </p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f2">What is DNS?</h5>

			<p>The domain name system (DNS in short) is what could be called the �phone book� of the Internet. It keeps track of the mapping of, for example, a human-readable website name (like www.iis.se) to the slightly more arcane form of an IP-address that the computer needs to initiate communication (in this case 212.247.7.229). <br />
	        Besides browsing the Internet with your web browser using website names instead of IP-addresses the DNS also makes sure your emails find their way to the right recipient. In short, a stable DNS is vital for most companies to maintain a working and efficient operation.</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f3">What about www.dnscheck.se?</h5>

			<p>The webpage <a href="http://www.dnscheck.se">www.dnscheck.se</a> points to an earlier version of DNSCheck that .SE developed with the help of Patrik F�ltsr�m of Frobbit AB. The new version of DNSCheck resides in <a href="http://dnscheck.iis.se">dnscheck.iis.se</a> and was developed by Jakob Schlyter of Kirei AB.</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f4">Why a new DNSCheck?</h5>

			<p>.SE wanted a better control of the code and also the ability to reuse parts of the DNSCheck code in other projects. Thus we came to the conclusion that it was a better idea to start from scratch and build a modular codebase that we could also add new features to, like for example ipv6- and dnssec-controls.</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f5">How does DNSCheck work?</h5>

			<p>If you want the technical information about how DNSCheck operates you are advised to check the wiki/trac connected to the DNSCheck open source project. This is the URL: <a href="http://opensource.iis.se/trac/dnscheck/wiki/Architecture">http://opensource.iis.se/trac/dnscheck/wiki/Architecture</a> . If you want a less technical answer you should check the first FAQ-question: �What is DNSCheck�.</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f6">How can DNSCheck help me?</h5>

			<p>The current version of DNSCheck was made for technicians or at least people who are interested to learn more about how the DNS operates. If you merely want to show whoever is in charge of your domain (the tech-c or technical staff at your name server provider) that there in fact is a problem with your domain you can use the link that appears on the bottom of the page after each test. So if you have run a test and want to show someone the result of that specific test you can just copy the link at the bottom of the page that displays your test results. The link below, for example, points at a previous test on "iis.se":</p> <p> <a href="http://dnscheck.iis.se/?time=1220357126&id=66&view=basic">http://dnscheck.iis.se/?time=1220357126&id=66&view=basic </p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f7">DNSCheck goes �Error�/�Warning� on my domain, what does it mean?</h5>

			<p>Of course, this depends on what kind of test failed for your zone. In most cases you can press the actual error/warning-message and in so doing get more detailed information about what kind of problem that was found.</p>
			<p>As an example if we test the domain "iis.se" and recieve an error titled �<strong>Name server ns.nic.se (212.247.7.228) does not answer queries over UDP</strong>�. What does this mean? After we click this message more detailed information become visible. More specific this: �<strong>The name server failed to answer queries sent over UDP. This is probably due to the name server not correctly set up or due to misconfigured filtering in a firewall.</strong>�. Luckily this was just an example, that error basically means the name server is down so it�s not the most harmless error around. </p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f8">How can DNSCheck judge what is right and wrong?</h5>

			<p>There is no  final judgement of the health of a domain that can be bestowed by anyone. This  is very important. .SE and the people behind DNSCheck do not claim that  DNSCheck is correct in every aspect. Sometimes opinions differ, especially  between countries, but sometimes also locally. We have had the luck to have the  help of an extremely competent DNS-group here in Sweden. Hopefully their opinions in  combination with ours have made a good compromise between what is an actual  potentially dangerous error and what could be merely seen as a notice or  warning.</p>
			<p>But as with  all things as evolving as DNS the situation is most likely changing, what is a  notice today could be an error tomorrow. If you really think we�ve made a  mistake in our judgement please don�t hesitate to drop us an email at <a href="mailto:dnscheck@iis.se">dnscheck@iis.se</a> with a link to your test and an explanation why you think it shows something that you consider incorrect. ( If you don�t know how to find the link to your test, check the "How can DNSCheck help me"-part of this FAQ ).</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f9">Does DNSCheck handle IPv6?</h5>

			<p>Yes, it  does. However, since .SE currently doesn�t have IPv6-connectivity these tests  cannot be performed. As soon as IPv6-connectivity is established we will test  IPv6 in the same way we test IPv4.</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f10">Does DNSCheck handle DNSSEC?</h5>

			<p>Yes, if  DNSSEC is available on a domain that is sent to DNSCheck it will be checked  automatically.</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f11">What makes DNSCheck differ from other zone controlling software?</h5>

			<p>First of  all this DNSCheck saves all history from earlier tests, which means you can go  back to a test you did a week ago and compare it to the test you ran a moment  ago.<br />
			<br />
			DNSCheck also controls that the name servers a zone has used previously no longer  contains information about the zone you�re testing (this only applies to  .SE-domains that have been redelegated after February 2007). </p>
			<p>DNSCheck  will also try and explain the error/warning to you in a good way, although these  messages can be difficult to understand for a non-technician. The next version  of DNSCheck, that will be launched later this year, will be more compliant to  non-technician users.</p>
			<p>DNSCheck  will continuously scan the .SE-zone and report its health into the database.</p>
			<p>There�s an  �advanced� tab for technicians who might want to use DNSCheck without the �basic� view.</p>
			<p>Lastly, this  open source version of DNSCheck was built using modular code which, basically,  means you can use parts of it in your systems, if you�d want to. It�s quite  rare that you�d want a complete program just to check for example redelegations.</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f12">Will DNSCheck work for my non-.se-domain?</h5>

			<p>Yes. All  the checks that occur for .SE-domains will be used on your zone as well.  However, the periodic sweep of the database (automatic checks basically) only  happens on .SE-domains, other than that it�s identical.</p>
			<p><a href="#findex">Back to the top </a></p>

			<h5 id="f13">DNSCheck and privacy</h5>

                        <p>Since DNSCheck is open to everyone it is possible for anyone to check your domain and also see history from previous tests, however there is no way to tell who has run a specific test since nothing is logged except the time of the test.    </p>
                        <p><a href="#findex">Back to the top </a></p>

			<h5 id="f14">How come I can�t test my domain?</h5>
                        
                        <p>If we skip the situation where the domain doesn�t exist, as in you input a non-existing domain to DNSCheck, there are 2 other possibilites:  <br />
                        <br />

			1. To protect the engine from multiple identical inputs, that is the same IP checking the same zone several times, there is a delay of 5 minutes between identical subsequent tests. Which practically means that you can only test the same domain once every 5 minutes, if you try and test it again within 5 minutes the last results will be displayed instead.</p>
			
			 <p>2. Because DNSCheck was made to check domains (like iis.se) and not hostnames in a domain (like www.iis.se) the DNSCheck webpage will do a pre-control of your domain before it sends it on to the engine for testing. This shouldn�t effect the great majority of domains out there but it CAN do so, because if the webpage decides a domain doesn�t exist the check wont run. Sofar the only time we�ve seen this is when a domains� nameservers all lie within the domain that�s being tested and these are very broken. We need to fix this, and please do report if you cannot check your domain so that we can see if anything else is wrong. This control will be improved, that�s a promise.</p>

                        <p><a href="#findex">Back to the top </a></p>
			
			<h5 id="f15">What kind of queries does DNSCheck generate?</h5>

			<p>This  question is very hard to answer since DNSCheck will generate different queries  depending on how your name servers answer. The easiest way to get a full view  of what queries and results are generated is to run the �dnscheck� CLI command  and add the flag �--raw�. This will result in quite thorough information on  what is happening. However the output from this CLI-tool is quite heavily  technical so unless you�re into bits and bytes you might want to skip this  step. :)</p>
			<p><a href="#findex">Back to the top </a></p>',
			"Explanation",
			"Test was ok",
			"Test contains warnings",
			"Test contains errors",
			"Test was not performed",
			"Delegation",
			"Nameserver",
			"Consistency",
			"SOA",
			"Connectivity",
			"DNSSEC",
			"Link to this test"
		),
		"se" => array(
			"Hem",
			"Vanliga fr�gor",
			"En tj�nst fr�n .SE",
			"Testa din DNS-server och uppt�ck fel",
			"Ange ditt dom�nnamn nedan f�r att testa dess DNS-servrar.",
			"Testa nu",
			"F�renklat resultat",
			"Avancerat resultat",
			"Tidigare test",
			"Historiken kunde ej laddas",
			"Ingen historik finns",
			"Sida",
			".SE (Stiftelsen f�r Internetinfrastruktur)",
			"Dom�nen finns inte",
			"Dom�nen du angav verkar inte vara registrerad",
			"Laddar",
			"V�ntar p� testresultat",
			"Alla test �r ok",
			"Testet inneh�ll varningar",
			"Testet inneh�ll fel",
			"Om DNSCheck",
			"<img src='_img/img_trafficlight.png' alt='Trafficlight' class='right' /><p>DNSCheck �r ett program designat f�r att hj�lpa m�nniskor  att kontrollera, m�ta och f�rhoppningsvis ocks� b�ttre f�rst� hur DNS, domain name  system, fungerar. N�r en dom�n (�ven kallad zon) skickas till DNSCheck s�  kommer programmet att unders�ka dom�nens h�lsotillst�nd genom att g� igenom DNS  fr�n roten (.) till TLD:n (toppdom�nen, till exempel .SE) och till slut de  DNS-servrar som inneh�ller information om den specificerade dom�nen (till  exempel iis.se). DNSCheck utf�r �ven en hel del andra test, s� som att  kontrollera DNSSEC-signaturer, att de olika v�rdarna g�r att komma �t och att  IP-adresser �r giltiga.</p>",
			"Om domain name system, DNS",
			"<p>Domain name system (f�rkortat DNS) skulle kunna kallas  Internets �telefonbok�. Det ser till att l�sbara namn p� webbsidor (som www.iis.se) kan �vers�ttas till de mer  sv�rbegripliga IP-adresser som datorerna beh�ver f�r att kommunicera med  varandra (i detta fall 212.247.7.229).</p><p>F�rutom att l�ta dig surfa p� Internet med din webbl�sare  med hj�lp av namn p� webbsidor ist�llet f�r IP-adresser ser DNS �ven till att  din e-post hittar r�tt. Med andra ord, ett stabilt DNS �r n�dv�ndigt f�r att de  flesta f�retag ska kunna fungera och arbeta effektivt.</p>",
			"Vanliga fr�gor om DNSCheck",
			'<h5 id="findex">Index</h5> 
			<ol>

				<li><a href="#f1">Vad �r DNSCheck?</a></li>
				<li><a href="#f2">Vad �r DNS?</a></li>
				<li><a href="#f3">Vad h�nder med www.dnscheck.se?</a></li>
				<li><a href="#f4">Varf�r en ny DNSCheck?</a></li>
				<li><a href="#f5">Hur fungerar DNSCheck?</a></li>
				<li><a href="#f6">Hur kan DNSCheck hj�lpa mig?</a></li>
				<li><a href="#f7">DNSCheck visar �Fel�/�Varning� f�r min dom�n.  Vad inneb�r det?</a></li>
				<li><a href="#f8">Hur kan DNSCheck bed�ma vad som �r r�tt och fel?</a></li>
				<li><a href="#f9">Hanterar DNSCheck IPv6?</a></li>
				<li><a href="#f10">Hanterar DNSCheck DNSSEC?</a></li>
				<li><a href="#f11">Vad skiljer DNSCheck fr�n annan mjukvara som  testar zoner?</a></li>
				<li><a href="#f12">Fungerar DNSCheck f�r dom�nnamn som inte slutar  med .se?</a></li>
				<li><a href="#f13">DNSCheck och personlig integritet</a></li>
				<li><a href="#f14">Varf�r kan jag inte testa min dom�n?</a></li>
				<li><a href="#f15">Vilka slags anrop genereras av DNSCheck?</a></li>

			</ol>
			<div class="divider"></div>

			<h5 id="f1">Vad �r DNSCheck?</h5>

			<p>DNSCheck �r ett program designat f�r att hj�lpa m�nniskor  att kontrollera, m�ta och f�rhoppningsvis ocks� b�ttre f�rst� hur DNS, domain  name system, fungerar. N�r en dom�n (�ven kallad zon) skickas till DNSCheck s�  kommer programmet att unders�ka dom�nens h�lsotillst�nd genom att g� igenom DNS  fr�n roten (.) till TLD:n (toppdom�nen, till exempel .SE) och till slut de  DNS-servrar som inneh�ller information om den specificerade dom�nen (till  exempel iis.se). DNSCheck utf�r �ven en hel del andra test, s� som att  kontrollera DNSSEC-signaturer, att de olika v�rdarna g�r att komma �t och att  IP-adresser �r giltiga.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f2">Vad �r DNS?</h5>

			<p>Domain name system (f�rkortat DNS) skulle kunna kallas  Internets �telefonbok�. Det ser till att l�sbara namn p� webbsidor (som www.iis.se) kan �vers�ttas till de mer  sv�rbegripliga IP-adresser som datorerna beh�ver f�r att kommunicera med  varandra (i detta fall 212.247.7.229).</p>
			<p>F�rutom att l�ta dig surfa p� Internet med din webbl�sare  med hj�lp av namn p� webbsidor ist�llet f�r IP-adresser ser DNS �ven till att  din e-post hittar r�tt. Med andra ord, ett stabilt DNS �r n�dv�ndigt f�r att de  flesta f�retag ska kunna fungera och arbeta effektivt.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f3">Vad h�nder med www.dnscheck.se?</h5>

			<p>Webbadressen <a href="http://www.dnscheck.se">www.dnscheck.se</a> pekar till en tidigare version av DNSCheck som .SE utvecklade tillsammans med  Patrik F�ltstr�m fr�n Frobbit AB. Den nya versionen av DNSCheck ligger p�  <a href="http://dnscheck.iis.se">dnscheck.iis.se</a> och utvecklades av Jakob Schlyter fr�n Kirei AB.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f4">Varf�r en ny  DNSCheck?</h5>

			<p>.SE ville ha mer kontroll �ver koden och kunna �teranv�nda  delar av DNSCheck-koden i andra projekt. Vi kom s�ledes till slutsatsen att det  var b�ttre att b�rja om fr�n grunden och bygga en modul�r kodbas som vi ocks�  kunde ut�ka med ny funktionalitet, till exempel IPv6- och DNSSEC-tester.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f5">Hur fungerar  DNSCheck?</h5>

			<p>Om du vill ha den tekniska informationen om hur DNSCheck  fungerar r�der vi dig att kolla den wiki/trac som �r kopplad till  DNSCheck-projektet (som �r �ppen k�llkod). Du hittar den p� f�rljande URL: <a href="http://opensource.iis.se/trac/dnscheck/wiki/Architecture">http://opensource.iis.se/trac/dnscheck/wiki/Architecture</a>. Om du �r ute efter ett mindre tekniskt svar b�r du f�rst l�sa svaret till fr�gan �Vad �r DNSCheck� p� denna sida.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f6">Hur  kan DNSCheck hj�lpa mig?</h5>

			<p>Den nuvarande versionen av DNSCheck �r avsedd f�r tekniker  eller �tminstone de som �r intresserade av att l�ra sig mer om hur DNS  fungerar. Om du enbart vill l�ta den som �r ansvarig f�r din dom�n (tech-c  eller teknisk personal hos din DNS-leverant�r) veta att det finns problem med  din dom�n kan du anv�nda l�nken som finns l�ngst ner p� resultatsidan efter att  ett test utf�rts. Om du har k�rt ett test kan du s�ledes l�nka till just det  specifika testresultatet genom att kopiera l�nken som d� finns l�ngst ner p�  sidan. Till exempel, l�nken h�r nedanf�r pekar p� ett tidigare utf�rt test av  �iis.se�:<br />
  <a href="http://dnscheck.iis.se/?time=1220357126&amp;id=66&amp;view=basic">http://dnscheck.iis.se/?time=1220357126&amp;id=66&amp;view=basic </a></p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f7">DNSCheck visar  �Fel�/�Varning� f�r min dom�n. Vad inneb�r det?</h5>

			<p>Det beror p� vilket test det g�ller. I de flesta fall kan du  klicka p� fel- eller varningsmeddelandet f�r att f� mer information om vad det  var f�r problem.</p>
			<p>Till exempel, om vi skulle testa dom�nen �iis.se� och f� ett  felmeddelande som s�ger <strong>�DNS-servern  ns.nic.se (212.247.7.228) svarar inte p� anrop �ver UDP�</strong>. Vad inneb�r  detta? Efter att vi klickar p� meddelandet f�r vi mer detaljerad information. I  det h�r fallet: <strong>�DNS-servern svarade  inte p� anrop �ver UDP. Detta beror troligtvis p� att DNS-servern inte �r  korrekt uppsatt eller en felaktigt konfigurerad brandv�gg.�</strong> Lyckligtvis var  detta bara ett exempel eftersom det d�r felet i praktiken betyder att en  DNS-server �r otillg�nglig, s� det �r inte direkt ett harml�st fel.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f8">Hur kan DNSCheck  bed�ma vad som �r r�tt och fel?</h5>

			<p>Ingen kan ge ett definitivt, slutgiltigt utl�tande om en  dom�ns h�lsa. Detta �r viktigt att po�ngtera. .SE och m�nniskorna bakom  DNSCheck p�st�r inte att DNSCheck alltid har helt r�tt. I vissa fall g�r  �sikter is�r, speciellt mellan olika l�nder, men ibland �ven lokalt. Vi har  haft turen att ha hj�lp av en extremt kompetent grupp DNS-experter h�r i  Sverige. Vi hoppas att deras �sikter i kombination med v�ra egna har resulterat  i en bra kompromiss mellan vad som �r potentiellt farliga fel och vad som bara  beh�ver en varning eller en anm�rkning.</p>
			<p>Eftersom DNS utvecklas hela tiden kan situationer som idag  bara kr�ver en varning r�knas som riktiga fel imorgon. Om du tror du hittat  n�got som vi felbed�mt, tveka d� inte att kontakta oss p� <a href="mailto:dnscheck@iis.se">dnscheck@iis.se</a> med en l�nk till ditt test  och en f�rklaring av varf�r du anser att resultatet inte �r korrekt. (Hur man  l�nkar till ett test hittar du i �Hur kan DNSCheck hj�lpa mig?�-delen av denna  FAQ.)</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f9">Hanterar DNSCheck  IPv6?</h5>

			<p>Ja, fast eftersom .SE f�r n�rvarande inte har st�d f�r IPv6  kan vi inte utf�ra dessa test. S� snart vi har IPv6-st�d f�rdigt kommer vi att  testa IPv6 p� samma s�tt som IPv4 testas av DNSCheck idag.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f10">Hanterar DNSCheck  DNSSEC?</h5>

			<p>Ja. Om DNSSEC �r tillg�ngligt f�r en dom�n som testas av  DNSCheck s� kommer detta att testas automatiskt.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f11">Vad skiljer DNSCheck  fr�n annan mjukvara som testar zoner?</h5>

			<p>F�rst och fr�mst sparar DNSCheck all testhistoria. Det  inneb�r att du kan g� tillbaka och titta p� ett test du gjorde f�r en vecka  sedan och j�mf�ra det med ett test du nyss gjorde.</p>
			<p>DNSCheck kontrollerar �ven att en zons tidigare anv�nda  (f�re detta) DNS-servrar inte l�ngre inneh�ller information om zonen du testar.  (Detta g�ller enbart f�r .SE-dom�ner som �r ompekade efter februari 2007.)</p>
			<p>DNSCheck f�rs�ker ocks� f�rklara fel och varningar p� ett  tydligt s�tt, �ven om dessa meddelanden kan vara sv�ra att f�rst� f�r en  icke-tekniker. N�sta version av DNSCheck, som kommer att lanseras senare detta  �r, kommer att vara mer informativ f�r mindre tekniska anv�ndare.</p>
			<p>DNSCheck kollar kontinuerligt igenom .SE-zonen och  rapporterar in dess h�lsa till databasen.</p>
			<p>Det finns en �avancerad� flik tillg�nglig f�r de tekniker  som f�redrar mer detaljerad testinformation.</p>
			<p>Den h�r versionen av DNSCheck �r �ppen k�llkod och �r  modul�rt uppbyggd. Du kan med andra ord �teranv�nda delar av koden i dina egna  system om du vill.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f12">Fungerar DNSCheck f�r  dom�nnamn som inte slutar med .se?</h5>

			<p>Ja. Alla test som utf�rs p� .SE-dom�ner kommer utf�ras p�  din zon ocks�. Det som inte g�rs f�r andra dom�ner �n .SE �r dock den  periodiska, automatiska genomg�ngen av alla dom�ner i zonen som vi utf�r. Allt  annat fungerar exakt likadant.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f13">DNSCheck och personlig  integritet</h5>

                        <p>Eftersom DNSCheck �r tillg�nglig f�r alla �r det ocks� m�jligt  f�r vem som helst att kontrollera din dom�n och ocks� se testhistoria f�r din  dom�n. Det finns dock inget s�tt att se vem som har gjort ett test eftersom det  enda som loggas �r tidpunken d� testet gjordes.</p>
                        <p><a href="#findex">Tillbaka till b�rjan</a></p>

			<h5 id="f14">Varf�r kan jag inte  testa min dom�n?</h5>
                        
			<p>Om vi utg�r fr�n att dom�nen du f�rs�ker testa faktiskt  existerar s� finns det tv� saker som kan orsaka detta:</p>
			<p>1. F�r att f�rhindra att flera test g�rs samtidigt  p� samma zon fr�n samma IP-adress finns det en p�tvingad f�rdr�jning p� 5  minuter mellan identiska test. Detta inneb�r att du inte kan testa en dom�n  oftare �n var 5:e minut. Om du testar din dom�n igen innan 5 minuter f�rflutit  s� visas det senast sparade resultatet.</p>
			<p>2. Eftersom DNSCheck �r designad f�r att testa  dom�ner (som iis.se) och inte v�rdnamn i en dom�n (som www.iis.se) kontrollerar DNSChecks webbsida  dom�nen du skrivit in innan den skickas vidare till DNSChecks testmotor f�r att  se att det verkligen �r en dom�n. Denna kontroll kan i vissa s�llsynta fall  misslyckas (och zonen s�ledes inte godk�nns som korrekt). De enda g�nger vi  sett detta h�nda �r ifall de DNS-servrar som tillh�r den zon du f�rs�ker testa  �r v�ldigt trasiga. H�r g�rna av dig ifall detta h�nt dig s� vi f�r mer  information om hur vi kan korrigera hur detta test av dom�nen utf�rs. Det h�r testet  kommer att f�rb�ttras, det lovar vi.</p>

                        <p><a href="#findex">Tillbaka till b�rjan</a></p>
			
			<h5 id="f15">Vilka slags anrop genereras av DNSCheck?</h5>

			<p>Det h�r �r en sv�r fr�ga att svara p� eftersom DNSCheck  kommer att generera olika typer av anrop beroende p� hur dina DNS-servrar  svarar. Det enklaste s�ttet att se exakt vad DNSCheck testar �r att k�ra  �dnscheck� CLI-kommandot och l�gga till flaggan �--raw�. Resultatet ger  grundlig information om vad som h�nder under testet. Det b�r dock n�mnas att  utmatningen fr�n CLI-verktyget �r v�ldigt tekniskt utmanande s� ifall du inte  gillar bits och bytes kanske du vill undvika det.</p>
			<p><a href="#findex">Tillbaka till b�rjan</a></p>',
			"F�rklaring",
			"Testet var ok",
			"Testet inneh�ll varningar",
			"Testet inneh�ll fel",
			"Testet utf�rdes inte",
			"Delegering",
			"DNS-server",
			"Konsekventa inst�llningar",
			"SOA",
			"Uppkoppling",
			"DNSSEC",
			"L�nk till det h�r testresultatet"
		)
	);
	
	
	function translate($translateString)
	{
		global $languageId;
		global $translationMap;
		global $translationIndex;
		
		if (!isset($translationMap[$languageId]))
		{
			return $translateString;
		}
		
		$index = array_search($translateString, $translationIndex);
		if (false === $index)
		{
			return $translateString;
		}
		
		if ((!isset($translationMap[$languageId][$index])) || (is_null($translationMap[$languageId][$index])))
		{
			return $translateString;
		}
		
		return $translationMap[$languageId][$index];
	}
?>
