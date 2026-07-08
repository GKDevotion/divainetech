<?php
    $seo = [
        'title' => 'Cookie Policy | Divaine Tech Website Cookie Usage Information',
        'description' => 'Learn how Divaine Tech uses cookies and similar technologies to improve website performance, user experience, security, and service functionality.',
        'keywords' => 'Divaine Tech cookie policy, website cookies, cookie usage policy, privacy and cookies, technology website policy',
        'author' => 'Divaine Tech'
    ];
    include_once ('elements/header.php')
?> 

    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3">Cookie Policy</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cookie Policy</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <style>
    
        /* MAIN CONTENT */
        .content-wrap{
            flex:1;
            min-width:0;
        }
        .policy-section{
            margin-bottom:42px;
            scroll-margin-top:32px;
        }
        .policy-section h2{
            font-size:24px;
            font-weight:800;
            margin:0 0 14px;
            display:flex;
            align-items:center;
            gap:12px;
        }
        .policy-section h2 .num{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            width:34px;
            height:34px;
            min-width:34px;
            border-radius:50%;
            background:#F2F6FA;
            color:var(--accent-color);
            font-size:20px;
            font-weight:800;
        }
        .policy-section p{
            color:#6B7280;
            font-size:1rem;
            margin:0 0 14px;
        }
        .policy-section ul{
            color:#6B7280;
            font-size:15px;
            padding-left:0;
            list-style:none;
            margin:0 0 14px;
        }
        .policy-section ul li{
            position:relative;
            padding-left:26px;
            font-size: 1rem;
            margin-bottom:10px;
        }
        .policy-section ul li::before{
            content:"";
            position:absolute;
            left:0;
            top:2px;
            width:20px;
            height:20px; 
            border-radius:50%;
            background:var(--accent-color);
            background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3'><path d='M20 6L9 17l-5-5'/></svg>");
            background-size:8px;
            background-repeat:no-repeat;
            background-position:center;
        }
        .divider{
            border:none;
            border-top:1px solid #E4E9EF;
            margin:0 0 42px;
        }
        .contact-box{
            background:#F2F6FA;
            border-radius:16px;
            padding:34px 38px;
            margin-top:20px;
        }
        .contact-box h3{
            margin:0 0 8px;
            font-size:18px;
            font-weight:800;
        }
        .contact-box p{
            margin:0 0 4px;
            color:#6B7280;
            font-size:1rem;
        }
        .contact-box a.email{
            color:var(--accent-color);
            font-weight:700;
        }

        /* TABLE (cookie types) */
        .cookie-table{
            width:100%;
            border-collapse:collapse;
            margin:0 0 14px;
            font-size:14px;
        }
        .cookie-table th{
            text-align:left;
            background:#F2F6FA;
            color:#1B2430;
            font-size:1rem;
            font-weight:800;
            padding:12px 16px;
        }
        .cookie-table th:first-child{border-radius:10px 0 0 10px;}
        .cookie-table th:last-child{border-radius:0 10px 10px 0;}
        .cookie-table td{
            padding:14px 16px;
            color:#6B7280;
            font-size: 1rem;
            border-bottom:1px solid #E4E9EF;
            vertical-align:top;
        }
        .cookie-table tr:last-child td{border-bottom:none;}
        .cookie-table td strong{color:#1B2430;}
        
        @media (max-width:900px){
            
            .cookie-table{font-size:13px;}
        }

        @media (max-width:768px){ 
            h1.page-title{font-size:30px;} 
            .cookie-table{display:block; overflow-x:auto; white-space:nowrap;}
        }
    </style>

    <!-- MAIN CONTENT -->
    <div class="container content-wrap py-5">

        <div class="policy-section">
        <h2><span class="num">1</span>Introduction</h2>
        <p>This Cookie Policy explains how Divaine Tech ("we," "us," or "our") uses cookies and similar tracking technologies on our website. It should be read alongside our Privacy Policy, which explains how we handle personal information more broadly.</p>
        <p>By continuing to browse our site, you agree to our use of cookies as described in this policy, unless you disable them through your browser settings.</p>
        </div>
        <hr class="divider">

        <div class="policy-section">
        <h2><span class="num">2</span>What Are Cookies</h2>
        <p>Cookies are small text files placed on your device when you visit a website. They are widely used to make websites work more efficiently, remember your preferences, and provide information to site owners about how visitors use their site.</p>
        <p>Cookies may be "session" cookies, which are deleted once you close your browser, or "persistent" cookies, which remain on your device for a set period or until manually deleted.</p>
        </div>
        <hr class="divider">

        <div class="policy-section">
        <h2><span class="num">3</span>Types of Cookies We Use</h2>
        <table class="cookie-table">
            <tr>
            <th>Category</th>
            <th>Purpose</th>
            </tr>
            <tr>
            <td><strong>Essential Cookies</strong></td>
            <td>Required for core site functionality, such as page navigation, form submissions, and security. The site cannot function properly without these.</td>
            </tr>
            <tr>
            <td><strong>Performance Cookies</strong></td>
            <td>Collect anonymous data on how visitors use our site, such as pages visited and time spent, helping us improve site performance.</td>
            </tr>
            <tr>
            <td><strong>Functionality Cookies</strong></td>
            <td>Remember choices you make, such as language or region, to provide a more personalized experience.</td>
            </tr>
            <tr>
            <td><strong>Marketing Cookies</strong></td>
            <td>Track browsing activity across sites to deliver relevant advertising and measure the effectiveness of our marketing campaigns.</td>
            </tr>
        </table>
        </div>
        <hr class="divider">

        <div class="policy-section">
        <h2><span class="num">4</span>Third-Party Cookies</h2>
        <p>Some cookies on our site are placed by third-party services we use, including analytics providers, advertising networks, and social media platforms. These third parties may use cookies to collect information about your online activities across different websites.</p>
        <ul>
            <li>Analytics providers (e.g. Google Analytics) to understand site traffic and usage patterns</li>
            <li>Advertising partners to deliver and measure targeted campaigns</li>
            <li>Social media platforms to enable content sharing and embedded features</li>
        </ul>
        <p>We do not control these third-party cookies. Please refer to the relevant third party's own cookie or privacy policy for more information.</p>
        </div>
        <hr class="divider">

        <div class="policy-section">
        <h2><span class="num">5</span>Why We Use Cookies</h2>
        <p>We use cookies to:</p>
        <ul>
            <li>Keep our website secure and functioning correctly</li>
            <li>Understand how visitors interact with our site so we can improve it</li>
            <li>Remember your preferences between visits</li>
            <li>Measure the effectiveness of our marketing and consultation campaigns</li>
            <li>Personalize content and recommendations relevant to your interests</li>
        </ul>
        </div>
        <hr class="divider">

        <div class="policy-section">
        <h2><span class="num">6</span>Managing Your Cookie Preferences</h2>
        <p>When you first visit our site, you may be shown a cookie banner allowing you to accept or decline non-essential cookies. You can change your preferences at any time by clearing your browser's cookies and revisiting the site, or through any cookie preference tool provided on the page.</p>
        <p>Please note that disabling certain cookies may affect the functionality and your experience of our website.</p>
        </div>
        <hr class="divider">

        <div class="policy-section">
        <h2><span class="num">7</span>Browser Controls</h2>
        <p>Most web browsers allow you to control cookies through their settings. You can typically:</p>
        <ul>
            <li>View what cookies are stored and delete them individually</li>
            <li>Block third-party cookies</li>
            <li>Block cookies from particular sites</li>
            <li>Block all cookies from being set</li>
            <li>Delete all cookies when you close your browser</li>
        </ul>
        <p>Refer to your browser's help documentation for specific instructions, as settings vary between Chrome, Firefox, Safari, Edge, and other browsers.</p>
        </div>
        <hr class="divider">

        <div class="policy-section">
        <h2><span class="num">8</span>Updates to This Policy</h2>
        <p>We may update this Cookie Policy from time to time to reflect changes in the cookies we use or for other operational, legal, or regulatory reasons. Any changes will be posted on this page with a revised "Last updated" date.</p>
        </div>
        <hr class="divider">

        <div class="policy-section">
        <h2><span class="num">9</span>Contact Us</h2>
        <p>If you have any questions about our use of cookies, please get in touch using the details below.</p>
        </div>

        <div class="contact-box">
        <h3>Questions about this policy?</h3>
        <p>Reach out to our team and we'll be happy to help.</p>
        <p><a class="email" href="mailto:Info@Domainname.com">Info@Domainname.com</a> &nbsp;•&nbsp; (+0) 123 456 789</p>
        </div>

    </div> 

<?php
    include_once ('elements/footer.php')
?>