<?php
    $seo = [
        'title' => 'Terms of Service | Divaine Tech Website Terms & Conditions',
        'description' => 'Read Divaine Tech terms of service to understand the rules, conditions, and guidelines for using our website, IT services, and technology solutions.',
        'keywords' => 'Divaine Tech terms of service, terms and conditions, IT service agreement, website terms, technology services policy',
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
						<h1 class="text-anime-style-3">Terms Of Services</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Terms Of Services</li>
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
        /* CONTENT: numbered accordion cards, single column, centered */
        .content-wrap{ 
            margin:0 auto;
            padding:70px 0px 100px;
        }
        .intro-note{
            color:#6B7280;
            font-size:1rem;
            margin:0 0 44px;
            padding:22px 26px;
            background:#F2F6FA;
            border-left:4px solid var(--accent-color);
            border-radius:0 12px 12px 0;
        }

        .term-card{
            border:1px solid #E4E9EF;
            border-radius:16px;
            margin-bottom:16px;
            overflow:hidden;
            transition:border-color 0.2s ease;
        }
        .term-card.open{
            border-color:var(--accent-color);
        }
        .term-card summary{
            list-style:none;
            cursor:pointer;
            display:flex;
            align-items:center;
            gap:18px;
            padding:22px 26px;
            font-weight:800;
            font-size:1rem;
        }
        .term-card summary::-webkit-details-marker{display:none;}
        .term-card .num{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            width:38px;
            height:38px;
            min-width:38px;
            border-radius:50%;
            background:#F2F6FA;
            color:var(--accent-color);
            font-size:15px;
            font-weight:800;
        }
        .term-card summary .chevron{
            margin-left:auto;
            width:22px;
            height:22px;
            min-width:22px;
            border-radius:50%;
            background:#F2F6FA;
            display:flex;
            align-items:center;
            justify-content:center;
            transition:transform 0.25s ease;
        }
        .term-card[open] summary .chevron{
            transform:rotate(180deg);
            background:var(--accent-color);
        }
        .term-card[open] summary .chevron svg path{stroke:#1B2430;}
        .term-card[open] summary .chevron svg{
            filter:none;
        }
        .term-card[open] summary .chevron svg path{stroke:#fff;}
        .term-body{
            padding:0 26px 26px 82px;
        }
        .term-body p{
            color:#6B7280;
            font-size:1rem;
            margin:0 0 14px;
        }
        .term-body ul{
            color:#6B7280;
            font-size:15px;
            padding-left:0;
            list-style:none;
            margin:0 0 14px;
        }
        .term-body ul li{
            position:relative;
            padding-left:24px;
            margin-bottom:10px;
            font-size: 1rem;
        }
        .term-body ul li::before{
            content:"—";
            position:absolute;
            left:0;
            color:var(--accent-color);
            font-weight:800;
        } 
        .contact-box{
            background:#F2F6FA;
            border-radius:16px;
            padding:34px 38px;
            margin-top:36px;
            text-align:center;
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
        .expand-toggle{
            max-width:840px;
            margin:0 auto 20px;
            display:flex;
            justify-content:flex-end;
            padding:0 60px;
        }
        .expand-toggle button{
            background:none;
            border:none;
            color:var(--accent-color);
            font-size:13px;
            font-weight:700;
            cursor:pointer;
            padding:6px 0;
        }
        .expand-toggle button:hover{text-decoration:underline;}
        
        @media (max-width:768px){ 
            h1.page-title{font-size:30px;}
            .term-body{padding-left:26px;} 
        }
    </style>

    <div class="container content-wrap">

        <p class="intro-note">Welcome to Divaine Tech. By accessing our website or engaging our web design, SEO, digital marketing, or app development services, you agree to be bound by the following Terms of Service. Tap any section below to expand it.</p>

            <div class="term-card">
                <summary><span class="num">1</span>Acceptance of Terms</summary>
                <div class="term-body">
                <p>By accessing or using our website and services, you agree to comply with and be bound by these Terms of Service, along with our Privacy Policy and Cookie Policy. If you do not agree with any part of these terms, please discontinue use of our website and services.</p>
                </div>
            </div>

            <div class="term-card">
                <summary><span class="num">2</span>Our Services</summary>
                <div class="term-body">
                <p>Divaine Tech provides web design, search engine optimization, digital marketing, and mobile app development services. Specific deliverables, timelines, and pricing for any engagement will be set out in a separate proposal, quote, or contract agreed upon between you and Divaine Tech.</p>
                <ul>
                    <li>Services are provided on a project or retainer basis as agreed in writing</li>
                    <li>We reserve the right to refuse or discontinue service to any client at our discretion</li>
                    <li>Free consultations do not constitute a binding service agreement</li>
                </ul>
                </div>
            </div>

        <div class="term-card">
            <summary><span class="num">3</span>Accounts &amp; Consultations</summary>
            <div class="term-body">
            <p>When you request a consultation or create an account with us, you agree to provide accurate, current, and complete information. You are responsible for maintaining the confidentiality of any login credentials and for all activity that occurs under your account.</p>
            </div>
        </div>

        <div class="term-card">
            <summary><span class="num">4</span>Payment Terms</summary>
            <div class="term-body">
            <p>Fees for services will be outlined in your project proposal or contract. Unless otherwise agreed:</p>
            <ul>
                <li>Invoices are due within the timeframe stated on the invoice</li>
                <li>Late payments may result in paused work or additional fees</li>
                <li>Deposits or upfront payments for new projects are non-refundable once work has begun</li>
                <li>All fees are exclusive of applicable taxes unless stated otherwise</li>
            </ul>
            </div>
        </div>

        <div class="term-card">
            <summary><span class="num">5</span>Intellectual Property</summary>
            <div class="term-body">
            <p>Unless otherwise agreed in writing, Divaine Tech retains ownership of all pre-existing tools, frameworks, and proprietary code used in delivering services. Upon full payment, clients receive ownership or a license to use the final deliverables as specified in their project agreement.</p>
            <p>All content on our website, including text, graphics, logos, and design, is the property of Divaine Tech and may not be reproduced without permission.</p>
            </div>
        </div>

        <div class="term-card">
            <summary><span class="num">6</span>Acceptable Use</summary>
            <div class="term-body">
            <p>When using our website or services, you agree not to:</p>
            <ul>
                <li>Violate any applicable local, national, or international law</li>
                <li>Transmit harmful code, malware, or engage in unauthorized access attempts</li>
                <li>Use our services to build products or content that infringe on third-party rights</li>
                <li>Misrepresent your identity or affiliation with any person or entity</li>
            </ul>
            </div>
        </div>

        <div class="term-card">
            <summary><span class="num">7</span>Disclaimers &amp; Warranty</summary>
            <div class="term-body">
            <p>Our website and services are provided "as is" and "as available" without warranties of any kind, either express or implied. We do not guarantee that our services will be uninterrupted, error-free, or that specific marketing or SEO results will be achieved, as outcomes depend on factors outside our control.</p>
            </div>
        </div>

        <div class="term-card">
            <summary><span class="num">8</span>Limitation of Liability</summary>
            <div class="term-body">
            <p>To the fullest extent permitted by law, Divaine Tech shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of our website or services. Our total liability for any claim shall not exceed the amount you paid us for the service giving rise to the claim.</p>
            </div>
        </div>

        <div class="term-card">
            <summary><span class="num">9</span>Termination</summary>
            <div class="term-body">
            <p>We reserve the right to suspend or terminate access to our website or services at any time, with or without notice, for conduct that we believe violates these Terms or is harmful to other users, us, or third parties. Either party may terminate an ongoing service agreement as outlined in the relevant contract.</p>
            </div>
        </div>

        <div class="term-card">
            <summary><span class="num">10</span>Governing Law</summary>
            <div class="term-body">
            <p>These Terms of Service shall be governed by and construed in accordance with the laws of the jurisdiction in which Divaine Tech is registered, without regard to its conflict of law provisions. Any disputes arising under these terms will be subject to the exclusive jurisdiction of the courts in that location.</p>
            </div>
        </div>

        <div class="term-card">
            <summary><span class="num">11</span>Changes to Terms</summary>
            <div class="term-body">
            <p>We may revise these Terms of Service from time to time. Updates will be posted on this page with a revised "Last updated" date. Continued use of our website or services after changes are posted constitutes acceptance of the revised terms.</p>
            </div>
        </div>

        <div class="contact-box">
            <h3>Questions about these terms?</h3>
            <p>Reach out to our team and we'll be happy to help.</p>
            <p><a class="email" href="mailto:Info@Domainname.com">Info@Domainname.com</a> &nbsp;•&nbsp; (+0) 123 456 789</p>
        </div>

    </div>
 
<?php
    include_once ('elements/footer.php')
?>