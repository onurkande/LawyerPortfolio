@extends('site.layouts.master')

@section('title', 'Hizmet Detayları')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/service-details.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="hero-title-container">
                        <div class="hero-title-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h1 class="display-3 fw-bold">Family Law Services</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <p class="lead mb-0">Compassionate legal support for families during life's most challenging transitions.</p>
                    </div>
                    <p class="hero-subtitle mb-5">Our experienced family law attorneys provide personalized guidance and strong advocacy to protect what matters most to you.</p>
                    <div class="d-flex gap-3">
                        <a href="#service-detail" class="btn btn-primary btn-lg">Learn More</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Detail Content -->
    <section id="service-detail" class="service-detail">
        <div class="container" style="max-width: 1300px;">
            <div class="service-detail-content">
                <h2>Comprehensive Family Law Services</h2>
                <p>At Jane Smith Law Firm, we understand that family legal matters are often emotionally challenging and deeply personal. Our dedicated team of family law attorneys brings decades of combined experience to help you navigate these complex situations with compassion, discretion, and strategic legal guidance.</p>
                
                <p>We believe in a client-centered approach that prioritizes your unique needs and goals. Whether you're facing divorce, child custody disputes, or other family law matters, we're committed to protecting your rights and helping you achieve the best possible outcome for you and your loved ones.</p>
                
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/5668468/pexels-photo-5668468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Family Law Consultation">
                </div>
                
                <h2>Divorce Proceedings</h2>
                <p>Divorce is often one of life's most challenging transitions. Our attorneys provide comprehensive legal support throughout the entire process, from initial filing to final resolution. We handle both contested and uncontested divorces with the sensitivity and legal expertise they require.</p>
                
                <h3>Contested Divorce</h3>
                <p>When spouses cannot agree on key issues such as property division, child custody, or support, a contested divorce may be necessary. Our attorneys are skilled litigators who will vigorously advocate for your interests in court while still pursuing opportunities for settlement when possible.</p>
                
                <h3>Uncontested Divorce</h3>
                <p>For couples who can reach agreement on major issues, an uncontested divorce offers a more streamlined and cost-effective approach. We can help you navigate the legal requirements and paperwork to ensure a smooth process that protects your interests.</p>
                
                <div class="info-box">
                    <h4>Did You Know?</h4>
                    <p>Mediation can significantly reduce the time, cost, and emotional stress of divorce proceedings. Our attorneys are skilled in mediation techniques that can help you reach amicable solutions while preserving important family relationships.</p>
                </div>
                
                <h2>Child Custody and Visitation</h2>
                <p>Nothing is more important than your children's wellbeing. Our family law attorneys help parents establish custody and visitation arrangements that serve the best interests of their children while protecting parental rights.</p>
                
                <h3>Types of Custody Arrangements</h3>
                <ul>
                    <li><strong>Legal Custody:</strong> The right to make important decisions about your child's upbringing, including education, healthcare, and religious instruction.</li>
                    <li><strong>Physical Custody:</strong> Determines where the child will primarily reside.</li>
                    <li><strong>Joint Custody:</strong> Parents share decision-making responsibilities and/or physical custody.</li>
                    <li><strong>Sole Custody:</strong> One parent has primary decision-making authority and/or physical custody.</li>
                </ul>
                
                <h3>Visitation Rights</h3>
                <p>We help non-custodial parents establish meaningful visitation schedules that allow them to maintain strong relationships with their children. We also assist custodial parents in ensuring that visitation arrangements protect their children's safety and wellbeing.</p>
                
                <div class="warning-box">
                    <h4>Important Consideration</h4>
                    <p>Courts make custody decisions based on the "best interests of the child" standard. Factors considered include the child's relationship with each parent, stability of each home environment, and each parent's ability to provide for the child's physical and emotional needs.</p>
                </div>
                
                <h2>Child Support</h2>
                <p>Child support ensures that both parents contribute financially to their children's upbringing. Our attorneys help clients understand their rights and obligations regarding child support.</p>
                
                <h3>Calculating Child Support</h3>
                <p>Child support calculations typically consider factors such as:</p>
                <ul>
                    <li>Each parent's income</li>
                    <li>The number of children requiring support</li>
                    <li>Custody arrangements</li>
                    <li>Children's healthcare and educational needs</li>
                    <li>Other relevant financial factors</li>
                </ul>
                
                <h3>Modification of Child Support</h3>
                <p>When circumstances change significantly, child support orders may need modification. We assist clients in seeking appropriate adjustments to support orders based on changes in income, custody arrangements, or children's needs.</p>
                
                <h2>Alimony/Spousal Support</h2>
                <p>Alimony, also known as spousal support or maintenance, may be awarded to help a financially dependent spouse maintain their standard of living after divorce. Our attorneys advocate for fair spousal support arrangements, whether you're seeking support or being asked to provide it.</p>
                
                <h3>Factors Affecting Alimony</h3>
                <ul>
                    <li>Length of the marriage</li>
                    <li>Each spouse's income and earning capacity</li>
                    <li>Age and health of each spouse</li>
                    <li>Standard of living established during the marriage</li>
                    <li>Contributions to the marriage, including homemaking</li>
                </ul>
                
                <h2>Property Division</h2>
                <p>Dividing marital assets and debts is often one of the most complex aspects of divorce. Our attorneys help clients identify, value, and equitably divide marital property while protecting their financial interests.</p>
                
                <h3>Marital vs. Separate Property</h3>
                <p>Generally, assets acquired during the marriage are considered marital property subject to division, while property owned before marriage or received as gifts or inheritance may be considered separate property. Our attorneys help clients distinguish between these categories and advocate for fair treatment of complex assets.</p>
                
                <div class="service-image">
                    <img src="https://images.pexels.com/photos/5668859/pexels-photo-5668859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Family Law Documents">
                </div>
                
                <h2>Prenuptial and Postnuptial Agreements</h2>
                <p>Marital agreements can provide clarity and protection for both spouses. We help clients negotiate and draft comprehensive prenuptial and postnuptial agreements that address property rights, support obligations, and other financial matters.</p>
                
                <h3>Benefits of Marital Agreements</h3>
                <ul>
                    <li>Protection of separate property, including family businesses or inheritances</li>
                    <li>Clarity regarding financial responsibilities during marriage</li>
                    <li>Predetermined arrangements for property division and support in case of divorce</li>
                    <li>Reduction of conflict and litigation expenses if the marriage ends</li>
                </ul>
                
                <h2>Adoption and Guardianship</h2>
                <p>Building or expanding your family through adoption or guardianship is a joyful but legally complex process. Our family law attorneys guide clients through every step, from initial application to finalization.</p>
                
                <h3>Types of Adoption We Handle</h3>
                <ul>
                    <li>Stepparent adoptions</li>
                    <li>Private adoptions</li>
                    <li>Agency adoptions</li>
                    <li>International adoptions</li>
                    <li>Foster care adoptions</li>
                </ul>
                
                <h3>Guardianship</h3>
                <p>When parents are unable to care for their children, guardianship may be necessary. We help family members and other caregivers establish legal guardianship to provide stability and proper care for children in need.</p>
                
                <div class="info-box">
                    <h4>Our Commitment to You</h4>
                    <p>Family law matters require not only legal expertise but also sensitivity and understanding. At Jane Smith Law Firm, we're committed to providing compassionate guidance while vigorously protecting your rights and interests. We'll be by your side every step of the way, helping you navigate these challenging times and move forward with confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Services -->
    <section class="related-services py-6">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Related Legal Services</h2>
                    <p class="section-subtitle">Explore other areas of law that may be relevant to your family situation</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="related-service-card">
                        <div class="related-service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Real Estate Law</h3>
                        <p>Our real estate attorneys can help with property transfers, mortgage refinancing, and other real estate matters that often arise during divorce or family transitions.</p>
                        <a href="real-estate-law.html" class="related-service-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="related-service-card">
                        <div class="related-service-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3>Estate Planning</h3>
                        <p>Protect your family's future with comprehensive estate planning, including wills, trusts, and powers of attorney tailored to your family's unique needs.</p>
                        <a href="estate-planning.html" class="related-service-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="related-service-card">
                        <div class="related-service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Domestic Violence Protection</h3>
                        <p>We provide immediate legal assistance for those facing domestic violence, including restraining orders and safety planning for you and your children.</p>
                        <a href="domestic-violence.html" class="related-service-link">
                            Learn More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Section -->
    <section class="subscription">
        <div class="container">
            <div class="subscription-content">
                <h2>Stay Informed</h2>
                <p>Subscribe to our newsletter for the latest legal insights, tips, and updates on family law matters.</p>
                <form class="subscription-form">
                    <input type="email" class="form-control" placeholder="Your Email Address" required>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/service-details.js') }}"></script>
@endsection

