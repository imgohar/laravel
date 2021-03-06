{{-- HEADER --}}

<header id="main-header" class="header-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand text-light" href="/">
                        {{-- <img class="img-fluid" src="{{URL::asset("images/darkcloud.io.png")}}" width="120px" height="59px" alt="img"> --}}
                        DarkCloud.io
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-btn d-inline-block" id="menu-btn">
<span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        </span>
                        <span class="ion-navicon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link  {{Request::is('/')? 'active' : ''}}" href="/">Home</a>
                            </li>
                            <li class="nav-item {{Request::is('services')||Request::is('team')||Request::is('pricing')||Request::is('about-us')||Request::is('clients')||Request::is('faq')? 'active' : ''}} dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                                    <a class="dropdown-item {{Request::is('about-us')? 'active' : ''}}" href="/about-us">About Us</a>
                                    <a class="dropdown-item {{Request::is('services')? 'active' : ''}}" href="/services">Services</a>
                                    <a class="dropdown-item {{Request::is('team')? 'active' : ''}}" href="/team">Team</a>
                                    <a class="dropdown-item {{Request::is('pricing')? 'active' : ''}}" href="/pricing">Pricing Plan</a>
                                    <a class="dropdown-item {{Request::is('clients')? 'active' : ''}}" href="/clients">Clients</a>
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">FAQ</a>
                                </div>
                            </li>
                            <li class="nav-item {{Request::is('bare-metal-game')||Request::is('bare-metal/storage')||Request::is('bare-metal/rise')||Request::is('bare-metal/advance')||Request::is('managed-bare-metal')||Request::is('vps')||Request::is('network-and-security')? 'active' : ''}} dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bare Metal Cloud</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-3">
                                    <a class="dropdown-item {{Request::is('bare-metal-game')? 'active' : ''}}" href="/bare-metal-game">Dedicated Servers - Game Servers</a>
                                    <a class="dropdown-item {{Request::is('bare-metal/game')? 'active' : ''}}" href="/bare-metal/rise">Dedicated Servers - Rise Servers</a>
                                    <a class="dropdown-item {{Request::is('bare-metal/storage')? 'active' : ''}}" href="/bare-metal/storage">Dedicated Servers - Storage Servers</a>
                                    <a class="dropdown-item {{Request::is('bare-metal/advance')? 'active' : ''}}" href="/bare-metal/advance">Dedicated Servers - Advance Servers</a>
                                    <a class="dropdown-item {{Request::is('managed-bare-metal')? 'active' : ''}}" href="/managed-bare-metal">Managed Bare Metal</a>
                                    
                                    <a class="dropdown-item {{Request::is('vps')? 'active' : ''}}" href="/vps">VPS</a>
                                    <a class="dropdown-item {{Request::is('network-and-security')? 'active' : ''}}" href="/network-and-security">Network and security solutions</a>
                                    {{-- <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">Plesk-as-a-service</a>
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">Distributions et lisence</a>
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">Network Solution</a> --}}
                                    {{-- <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">Failover IP</a>
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">vRack</a>
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">Bandwidth</a>
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">Load Balancers</a>
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">Anti ddos</a> --}}
                                    {{-- 
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">VPS help</a>
                                     --}}
                                </div>
                            </li>
                            
                            <li class="nav-item {{Request::is('public-cloud-pricing')||Request::is('public-cloud-compute')||Request::is('public-cloud-storage')||Request::is('public-cloud-network')||Request::is('public-cloud-data-analytics')||Request::is('public-cloud-data-ai-machine-learning')? 'active' : ''}} dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown-4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Public Cloud</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-4">
                                    <a class="dropdown-item {{Request::is('public-cloud-compute') ? 'active' : ''}}" href="/public-cloud-compute">Compute</a>
                                    
                                    <a class="dropdown-item {{Request::is('public-cloud-storage')? 'active' : ''}}" href="/public-cloud-storage">Storage</a>

                                    <a class="dropdown-item {{Request::is('public-cloud-network')? 'active' : ''}}" href="/public-cloud-network">Network</a>

                                    <a class="dropdown-item {{Request::is('public-cloud-orchestration')? 'active' : ''}}" href="/public-cloud-orchestration">Containers & Orchestration</a>

                                    <a class="dropdown-item {{Request::is('public-cloud-data-analytics')? 'active' : ''}}" href="/public-cloud-data-analytics">Data Analytics</a>

                                    <a class="dropdown-item {{Request::is('public-cloud-ai-machine-learning')? 'active' : ''}}" href="/public-cloud-ai-machine-learning">AI & Machine Learning</a>

                                    <a class="dropdown-item {{Request::is('public-cloud-pricing')? 'active' : ''}}" href="/public-cloud-pricing">Public Cloud Pricing</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  {{Request::is('web-hosting')||Request::is('domain-names')? 'active' : ''}} dropdown-toggle" href="javascript:void(0)" id="navbarDropdown-5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Web Cloud</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-5">
                                    <a class="dropdown-item  {{Request::is('domain-names')? 'active' : ''}}" href="/domain-names">Domain Names</a>
                                    <a class="dropdown-item  {{Request::is('web-hosting')? 'active' : ''}}" href="/web-hosting">Web Hosting</a>
                                </div>
                            </li>
                            <li class="nav-item  {{Request::is('contact-us')? 'active' : ''}} dropdown">
                                <a class="nav-link" href="/contact-us" >Contact Us</a>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="sub-main">
                        <ul>
                            <li class="d-inline"><a href="javascript:void(0)" class="login iq-button iq-btn-outline iq-btn-round" target="_blank">Login</a></li>
                            <li class="d-inline"><a href="javascript:void(0)" class="signup iq-button default iq-btn-round" target="_blank">Sign Up</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
{{-- HEADER END --}}