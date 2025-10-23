<div class="dropdown-menu py-0" aria-labelledby="megaMenu">
    <div class="row p-2 p-sm-4 g-4">
        <div class="col-md-3 bg-light p-3 rounded">
            <ul class="list-unstyled">
                <li>
                    <a class="dropdown-item active" href="<?= base_url('ignite') ?>" onmouseover="showContent(1)" onmouseout="hideContent(1)">🔥  Ignite </a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?= base_url('establish') ?>" onmouseover="showContent(2)" onmouseout="hideContent(2)">🛠️  Establish </a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?= base_url('amplify') ?>" onmouseover="showContent(3)" onmouseout="hideContent(3)">📣  Amplify </a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?= base_url('evolve') ?>" onmouseover="showContent(5)" onmouseout="hideContent(5)">🧠  Evolve </a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?= base_url('secure') ?>" onmouseover="showContent(6)" onmouseout="hideContent(6)">🔐  Secure </a>
                </li>
                <li>
                    <a class="dropdown-item" href="j<?= base_url('accelerate') ?>" onmouseover="showContent(7)" onmouseout="hideContent(7)">🚀  Accelerate </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 content-section" id="content-1">
            <div class="row">
                <!-- First Layer -->
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-bullseye heading-color fs-6"></i>
                            <!-- Strategic targeting -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('brand-strategy-and-activation') ?>">
                  Brand Strategy & Activation
                </a>
                            <p class="mb-0 text-body small">
                                Developing strategic approaches for brand growth and engagement with the audience.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-palette heading-color fs-6"></i>
                            <!-- Creative design and identity -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('branding-and-identity-design') ?>">
                  Branding & Identity Design
                </a>
                            <p class="mb-0 text-body small">
                                Crafting unique brand identities and designs to resonate with target audiences.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-image heading-color fs-6"></i>
                            <!-- Represents visual/graphic work -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('graphic-design') ?>">
                  Graphic Design
                </a>
                            <p class="mb-0 text-body small">
                                Creating visually engaging designs for a range of media and marketing materials.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Second Layer -->
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-pencil-square heading-color fs-6"></i>
                            <!-- Writing/content icon -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('content-writing') ?>">
                  Content Writing
                </a>
                            <p class="mb-0 text-body small">
                                Writing compelling and engaging content to enhance brand messaging and communication.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-film heading-color fs-6"></i>
                            <!-- Animation & video production -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('animation-and-motion-graphics') ?>">
                  Animation & Motion Graphics
                </a>
                            <p class="mb-0 text-body small">
                                Designing animated visuals and motion graphics to bring ideas to life in creative formats.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-camera heading-color fs-6"></i>
                            <!-- Photography-related -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('photography-and-visual-production') ?>">
                  Photography & Visual Production
                </a>
                            <p class="mb-0 text-body small">
                                Capturing high-quality photographs and producing visual content for diverse branding needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container row">
                <div class="col-md-4">
                    <div class="image-boxv ">
                        <img src="<?= base_url('assets/frontend/images/img/brand-and-identity.jpg') ?>" alt="Image 1" class="img-fluid  rounded-3 shadow-lg w-100 ">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="<?= base_url('assets/frontend/images/img/brand-strategety.jpg') ?>" alt="Image 2" class="img-fluid  rounded-3 shadow-lg w-100">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="<?= base_url('assets/frontend/images/img/graphic.jpg') ?>" alt="Image 2" class="img-fluid  rounded-3 shadow-lg w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 content-section" id="content-2" style="display:none;">
            <div class="row">
                <!-- First Layer -->
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-window-desktop heading-color fs-6"></i>
                            <!-- Website Design -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('website-design-and-development') ?>">Website Design & Development</a>
                            <p class="mb-0 text-body small">
                                Creating user-friendly websites and applications tailored to your business needs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-vector-pen heading-color fs-6"></i>
                            <!-- UI/UX Design -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('ui-ux-design') ?>">UI/UX Design</a>
                            <p class="mb-0 text-body small">
                                Designing intuitive user interfaces and user experiences for seamless interaction.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-cart4 heading-color fs-6"></i>
                            <!-- E-commerce -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('ecommerce-development') ?>">E-Commerce Development</a>
                            <p class="mb-0 text-body small">
                                Developing e-commerce platforms to help businesses reach more customers online.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Second Layer -->
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-phone heading-color fs-6"></i>
                            <!-- Mobile App -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('mobileapp-development') ?>">Mobile App Development (Android & iOS)</a>
                            <p class="mb-0 text-body small">
                                Building native mobile apps for both Android and iOS platforms to enhance customer engagement.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-code-slash heading-color fs-6"></i>
                            <!-- Software -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('software-development') ?>">Software Development</a>
                            <p class="mb-0 text-body small">
                                Crafting custom software solutions to meet specific business requirements and workflows.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-stack heading-color fs-6"></i>
                            <!-- Technology Stack -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('technology-stack-expertise') ?>">Technology Stack Expertise (PHP, .NET, Angular, React JS, Node)</a>
                            <p class="mb-0 text-body small">
                                Expertise in a wide range of technologies to develop robust and scalable applications.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-cloud-check heading-color fs-6"></i>
                            <!-- Cloud -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('cloud-solutions-and-it-infrastructure') ?>">Cloud Solutions & IT Infrastructure</a>
                            <p class="mb-0 text-body small">
                                Providing cloud services and IT infrastructure solutions for businesses to scale efficiently.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 content-section" id="content-3" style="display:none;">
            <div class="row">
                <!-- First Layer -->
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-bar-chart-line heading-color fs-6"></i>
                            <!-- SEO -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('search-engine-optimization') ?>">Search Engine Optimization (SEO)</a>
                            <p class="mb-0 text-body small">
                                Optimizing your website to rank higher in search engine results and attract organic traffic.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-megaphone heading-color fs-6"></i>
                            <!-- SMM -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('social-media-marketing') ?>">Social Media Marketing (SMM)</a>
                            <p class="mb-0 text-body small">
                                Managing and promoting your brand across various social media platforms to increase engagement.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-phone-landscape heading-color fs-6"></i>
                            <!-- Mobile Ad -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('mobile-ad-networking') ?>">Mobile Ad Networking</a>
                            <p class="mb-0 text-body small">
                                Advertising on mobile networks to target users through apps, mobile websites, and other mobile platforms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Second Layer -->
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-graph-up-arrow heading-color fs-6"></i>
                            <!-- Paid Marketing -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('performance-and-paid-marketing') ?>">Performance & Paid Marketing</a>
                            <p class="mb-0 text-body small">
                                Driving targeted traffic and conversions through paid marketing campaigns and performance-based strategies.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-shield-check heading-color fs-6"></i>
                            <!-- ORM -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('online-reputation-management') ?>">Online Reputation Management (ORM)</a>
                            <p class="mb-0 text-body small">
                                Managing and improving your brand’s online reputation through various techniques and strategies.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-newspaper heading-color fs-6"></i>
                            <!-- PR -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('public-relations') ?>">Public Relations (PR)</a>
                            <p class="mb-0 text-body small">
                                Building and managing your brand's public image and communication with media and stakeholders.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 content-section" id="content-5" style="display:none;">
            <div class="row">
                <!-- First Layer -->
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-people heading-color fs-6"></i>
                            <!-- Team Extension -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('digital-outsourcing-and-team-extension') ?>">Digital Outsourcing & Team Extension</a>
                            <p class="mb-0 text-body small">
                                Expanding your team with skilled professionals remotely to meet project demands and timelines.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-person-check heading-color fs-6"></i>
                            <!-- Dedicated Hiring -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('dedicated-resource-hiring') ?>">Dedicated Resource Hiring (Dev, Design, SEO, etc.)</a>
                            <p class="mb-0 text-body small">
                                Hiring specialized professionals for your business needs, whether in development, design, or SEO.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-cpu heading-color fs-6"></i>
                            <!-- Automation -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('process-automation-support') ?>">Process Automation Support</a>
                            <p class="mb-0 text-body small">
                                Automating routine tasks and processes to improve efficiency and reduce manual work.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Second Layer -->
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-journal-text heading-color fs-6"></i>
                            <!-- Wikipedia -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('wikipedia-page-maintenance') ?>">Wikipedia Page Maintenance</a>
                            <p class="mb-0 text-body small">
                                Ensuring your Wikipedia page remains accurate, up-to-date, and complies with Wikipedia's guidelines.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-diagram-3 heading-color fs-6"></i>
                            <!-- Tech Architecture -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('technology-consultation-and-architecture-design') ?>">Technology Consultation & Architecture Design</a>
                            <p class="mb-0 text-body small">
                                Providing expert guidance in selecting and designing technology solutions to meet your business goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 content-section" id="content-6" style="display:none;">
            <div class="row">
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-shield-lock heading-color fs-6"></i>
                            <!-- VAPT -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('vapt') ?>">VAPT (Vulnerability Assessment & Penetration Testing)</a>
                            <p class="mb-0 text-body small">
                                Conducting assessments and penetration tests to identify vulnerabilities and secure systems from cyber threats.
                            </p>
                        </div>
                    </div>

                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-fingerprint heading-color fs-6"></i>
                            <!-- Cyber Security -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('cyber-security-solutions') ?>">Cyber Security Solutions</a>
                            <p class="mb-0 text-body small">
                                Comprehensive security services to protect digital assets, networks, and sensitive data from threats.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-hdd-network heading-color fs-6"></i>
                            <!-- Server Hardening -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('server-hardening-and-compliance-audits-relations') ?>">Server Hardening & Compliance Audits</a>
                            <p class="mb-0 text-body small">
                                Strengthening server security and performing compliance audits to ensure safe and regulatory-compliant operations.
                            </p>
                        </div>
                    </div>

                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-arrow-repeat heading-color fs-6"></i>
                            <!-- Website Recovery -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('website-and-app-recovery-solutions') ?>">Website & App Recovery Solutions</a>
                            <p class="mb-0 text-body small">
                                Recovering compromised websites and apps, ensuring they are restored with improved security protocols.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-shield-check heading-color fs-6"></i>
                            <!-- Secure Wikipedia -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('secure-wikipedia-management') ?>">Secure Wikipedia Management</a>
                            <p class="mb-0 text-body small">
                                Managing your Wikipedia page securely, ensuring it stays updated, accurate, and adheres to content guidelines.
                            </p>
                        </div>
                    </div>

                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-megaphone heading-color fs-6"></i>
                            <!-- ORM -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('orm-with-crisis-communicationt') ?>">ORM with Crisis Communication</a>
                            <p class="mb-0 text-body small">
                                Managing your online reputation while providing communication strategies to navigate through a crisis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 content-section" id="content-7" style="display:none;">
            <div class="row">
                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-graph-up-arrow heading-color fs-6"></i>
                            <!-- SEO -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('growth-driven-seo-and-content-marketing') ?>">Growth-Driven SEO & Content Marketing</a>
                            <p class="mb-0 text-body small">
                                Implementing SEO strategies and content marketing techniques to drive growth and improve search rankings.
                            </p>
                        </div>
                    </div>

                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-bar-chart-steps heading-color fs-6"></i>
                            <!-- CRO -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('conversion-rate-optimization-cro') ?>">Conversion Rate Optimization (CRO)</a>
                            <p class="mb-0 text-body small">
                                Improving your website's ability to convert visitors into customers through data-driven optimizations.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-diagram-3 heading-color fs-6"></i>
                            <!-- Funnel Design -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('funnel-design-and-performance-ads') ?>">Funnel Design & Performance Ads</a>
                            <p class="mb-0 text-body small">
                                Designing sales funnels and running performance ads that drive conversions and optimize the customer journey.
                            </p>
                        </div>
                    </div>

                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-broadcast-pin heading-color fs-6"></i>
                            <!-- Brand Scaling -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('brand-scaling-with-integrated-campaigns') ?>">Brand Scaling with Integrated Campaigns</a>
                            <p class="mb-0 text-body small">
                                Scaling your brand through integrated marketing campaigns that align across all channels for maximum impact.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-geo-alt heading-color fs-6"></i>
                            <!-- Hyperlocal -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('hyperlocal-marketing-and-gmb-strategies') ?>">Hyperlocal Marketing & GMB Strategies</a>
                            <p class="mb-0 text-body small">
                                Targeting local markets with customized strategies and optimizing your Google My Business profile for local search success.
                            </p>
                        </div>
                    </div>

                    <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                        <div class="icon-md border bg-body rounded flex-shrink-0">
                            <i class="bi bi-speedometer2 heading-color fs-6"></i>
                            <!-- Analytics -->
                        </div>
                        <div class="ms-2">
                            <a class="stretched-link heading-color fw-bold mb-0" href="<?= base_url('advanced-analytics-and-reporting-dashboards') ?>">Advanced Analytics & Reporting Dashboards</a>
                            <p class="mb-0 text-body small">
                                Utilizing advanced analytics and reporting dashboards to track key performance indicators and make data-driven decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>