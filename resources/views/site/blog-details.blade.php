@extends('site.layouts.master')

@section('title', 'Blog Detayları')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/blog-details.css') }}">
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
                        <h1 class="display-3 fw-bold">Understanding Child Custody Laws</h1>
                    </div>
                    <div class="hero-slogan-container">
                        <div class="hero-slogan-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <p class="lead mb-0">A comprehensive guide to navigating child custody arrangements</p>
                    </div>
                    <p class="hero-subtitle mb-5">Learn about different types of custody, factors courts consider, and how to prepare for custody hearings.</p>
                    <div class="d-flex gap-3">
                        <a href="#blog-content" class="btn btn-primary btn-lg">Read Article</a>
                        <a href="blogs.html" class="btn btn-outline-light btn-lg">Back to Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Detail Section -->
    <section id="blog-content" class="blog-detail-section">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="blog-content-wrapper">
                        <div class="blog-header">
                            <span class="blog-category">Family Law</span>
                            <h1 class="blog-title">Understanding Child Custody Laws: A Comprehensive Guide</h1>
                            <div class="blog-meta">
                                <div class="blog-meta-item">
                                    <i class="fas fa-user"></i>
                                    <span>Jane Smith</span>
                                </div>
                                <div class="blog-meta-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>April 15, 2025</span>
                                </div>
                                <div class="blog-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>5 min read</span>
                                </div>
                                <div class="blog-meta-item">
                                    <i class="fas fa-comments"></i>
                                    <span>12 Comments</span>
                                </div>
                            </div>
                        </div>

                        <div class="blog-featured-image">
                            <img src="https://images.pexels.com/photos/5668859/pexels-photo-5668859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Child Custody">
                        </div>

                        <div class="blog-content">
                            <p>Navigating child custody arrangements can be one of the most emotionally challenging aspects of family law. Whether you're going through a divorce, separation, or are unmarried parents seeking a formal custody arrangement, understanding the legal framework is crucial for protecting your rights and ensuring the best interests of your children.</p>

                            <p>This comprehensive guide aims to demystify child custody laws, explain the different types of custody arrangements, outline the factors courts consider when making custody decisions, and provide practical advice on preparing for custody hearings.</p>

                            <h2>Types of Child Custody Arrangements</h2>

                            <p>Child custody is typically divided into two main categories: legal custody and physical custody. Each can be awarded solely to one parent or jointly to both parents, creating several possible custody arrangements.</p>

                            <h3>Legal Custody</h3>

                            <p>Legal custody refers to a parent's right to make important decisions about their child's upbringing, including:</p>

                            <ul>
                                <li>Education (choice of schools, tutoring, special education services)</li>
                                <li>Medical care (selection of doctors, consent for treatments, management of health conditions)</li>
                                <li>Religious instruction</li>
                                <li>Extracurricular activities</li>
                            </ul>

                            <p>When parents share joint legal custody, they must consult with each other and reach agreements on these major decisions. If one parent has sole legal custody, they can make these decisions independently without consulting the other parent.</p>

                            <div class="info-box">
                                <h4>Important Note</h4>
                                <p>Even when parents share joint legal custody, day-to-day decisions typically remain with the parent who has physical custody at that time. Only major decisions require consultation between both parents.</p>
                            </div>

                            <h3>Physical Custody</h3>

                            <p>Physical custody determines where the child primarily lives and which parent is responsible for daily care. There are several common arrangements:</p>

                            <ul>
                                <li><strong>Joint physical custody:</strong> The child spends significant time living with both parents. This doesn't necessarily mean a 50/50 split, but rather a substantial division of time.</li>
                                <li><strong>Primary physical custody:</strong> The child lives primarily with one parent (the custodial parent), while the other parent (non-custodial parent) has visitation rights.</li>
                                <li><strong>Sole physical custody:</strong> The child lives exclusively or almost exclusively with one parent, while the other parent may have limited or supervised visitation.</li>
                            </ul>

                            <blockquote>
                                <p>The goal of any custody arrangement should be to foster the child's relationship with both parents while providing stability and consistency in the child's life.</p>
                            </blockquote>

                            <h2>Factors Courts Consider in Custody Decisions</h2>

                            <p>When determining custody arrangements, courts are guided by one overarching principle: the best interests of the child. While specific factors vary by jurisdiction, courts typically consider:</p>

                            <h3>The Child's Needs</h3>

                            <ul>
                                <li>Age and developmental stage</li>
                                <li>Physical and emotional health</li>
                                <li>Special needs or requirements</li>
                                <li>Established routines and need for stability</li>
                            </ul>

                            <h3>Parental Factors</h3>

                            <ul>
                                <li>Each parent's physical and mental health</li>
                                <li>Each parent's ability to provide for the child's basic needs</li>
                                <li>Each parent's willingness to support the child's relationship with the other parent</li>
                                <li>History of domestic violence, substance abuse, or child neglect/abuse</li>
                                <li>Work schedules and availability to care for the child</li>
                            </ul>

                            <div class="warning-box">
                                <h4>Things to Note</h4>
                                <p>Courts generally favor maintaining stability in a child's life. This includes considering the child's current living situation, school, community ties, and relationships with siblings and extended family members.</p>
                            </div>

                            <h3>The Child's Preferences</h3>

                            <p>Depending on the child's age and maturity, the court may consider their preferences regarding custody arrangements. The weight given to a child's preference typically increases with age, but it's rarely the sole determining factor.</p>

                            <h2>Preparing for a Custody Hearing</h2>

                            <p>If you're facing a custody hearing, thorough preparation is essential. Here are some steps to help you prepare:</p>

                            <h3>Document Your Involvement</h3>

                            <p>Keep detailed records of your involvement in your child's life, including:</p>

                            <ul>
                                <li>Attendance at school events, medical appointments, and extracurricular activities</li>
                                <li>Communication with teachers, healthcare providers, and other caregivers</li>
                                <li>Daily routines and responsibilities you handle for your child</li>
                                <li>Special activities or traditions you share with your child</li>
                            </ul>

                            <h3>Create a Parenting Plan</h3>

                            <p>Develop a comprehensive parenting plan that addresses:</p>

                            <ul>
                                <li>Physical custody schedule (including holidays, school breaks, and special occasions)</li>
                                <li>Decision-making processes for major issues</li>
                                <li>Communication methods between parents</li>
                                <li>Transportation arrangements for exchanges</li>
                                <li>Provisions for handling changes or disputes</li>
                            </ul>

                            <p>A well-thought-out parenting plan demonstrates your commitment to your child's well-being and your willingness to cooperate with the other parent.</p>

                            <div class="info-box">
                                <h4>Professional Tip</h4>
                                <p>Consider working with a mediator to develop a parenting plan. Mediation can help parents reach agreements outside of court, which often leads to more sustainable arrangements and reduces conflict.</p>
                            </div>

                            <h3>Gather Supporting Evidence</h3>

                            <p>Collect evidence that supports your position, such as:</p>

                            <ul>
                                <li>School records showing your involvement</li>
                                <li>Medical records demonstrating your attention to your child's health needs</li>
                                <li>Testimonials from teachers, neighbors, or other individuals familiar with your relationship with your child</li>
                                <li>Photos or videos documenting your activities with your child</li>
                                <li>Communication records showing your efforts to co-parent effectively</li>
                            </ul>

                            <h2>Modifying Custody Arrangements</h2>

                            <p>Custody orders are not necessarily permanent. As children grow and circumstances change, modifications may become necessary. To modify an existing custody order, you typically need to demonstrate:</p>

                            <ul>
                                <li>A substantial change in circumstances since the original order was issued</li>
                                <li>That the proposed modification is in the child's best interests</li>
                            </ul>

                            <p>Examples of substantial changes might include:</p>

                            <ul>
                                <li>Relocation of either parent</li>
                                <li>Significant changes in a parent's work schedule or availability</li>
                                <li>Development of health issues that affect parenting capacity</li>
                                <li>Evidence of substance abuse, neglect, or domestic violence</li>
                                <li>The child's changing needs as they grow older</li>
                            </ul>

                            <blockquote>
                                <p>Remember that custody arrangements should evolve as your child grows and their needs change. Flexibility and a willingness to adapt are key to successful co-parenting.</p>
                            </blockquote>

                            <h2>Conclusion</h2>

                            <p>Navigating child custody matters requires patience, preparation, and a focus on your child's best interests. While the legal process can be challenging, keeping your child's well-being at the center of all decisions will help guide you toward arrangements that support their healthy development and maintain their relationships with both parents.</p>

                            <p>If you're facing custody issues, consulting with an experienced family law attorney can provide invaluable guidance tailored to your specific situation and jurisdiction. Remember that the goal is not to "win" against the other parent, but to create a stable, nurturing environment where your child can thrive.</p>

                            <div class="blog-tags">
                                <a href="#" class="blog-tag">Child Custody</a>
                                <a href="#" class="blog-tag">Family Law</a>
                                <a href="#" class="blog-tag">Parenting</a>
                                <a href="#" class="blog-tag">Divorce</a>
                                <a href="#" class="blog-tag">Legal Rights</a>
                            </div>

                            <div class="blog-share">
                                <h4 class="blog-share-title">Share This Article</h4>
                                <div class="blog-share-links">
                                    <a href="#" class="blog-share-link"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="blog-share-link"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="blog-share-link"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="blog-share-link"><i class="fab fa-pinterest"></i></a>
                                    <a href="#" class="blog-share-link"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-author">
                        <div class="blog-author-avatar">
                            <img src="https://images.pexels.com/photos/5669602/pexels-photo-5669602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Jane Smith">
                        </div>
                        <div class="blog-author-info">
                            <h3 class="blog-author-name">Jane Smith</h3>
                            <p class="blog-author-title">Family Law Attorney</p>
                            <p class="blog-author-bio">Jane Smith is a family law attorney with over 15 years of experience specializing in child custody cases. She is dedicated to helping parents navigate the complex legal system while keeping their children's best interests at heart.</p>
                            <div class="blog-author-social">
                                <a href="#" class="blog-author-social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="blog-author-social-link"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="blog-author-social-link"><i class="fas fa-globe"></i></a>
                                <a href="#" class="blog-author-social-link"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Related Posts -->
                    <div class="related-posts">
                        <h2 class="related-posts-title">Related Articles</h2>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="related-post-card">
                                    <div class="related-post-image">
                                        <img src="https://images.pexels.com/photos/5668467/pexels-photo-5668467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Related Post">
                                        <div class="related-post-category">Family Law</div>
                                        <div class="related-post-date">April 10, 2025</div>
                                    </div>
                                    <div class="related-post-content">
                                        <h3 class="related-post-title">
                                            <a href="#">Co-Parenting After Divorce: Strategies for Success</a>
                                        </h3>
                                        <p class="related-post-excerpt">Effective co-parenting strategies to help your children thrive after divorce.</p>
                                        <a href="#" class="related-post-link">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="related-post-card">
                                    <div class="related-post-image">
                                        <img src="https://images.pexels.com/photos/5668468/pexels-photo-5668468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Related Post">
                                        <div class="related-post-category">Family Law</div>
                                        <div class="related-post-date">April 5, 2025</div>
                                    </div>
                                    <div class="related-post-content">
                                        <h3 class="related-post-title">
                                            <a href="#">Child Support Guidelines: What Parents Need to Know</a>
                                        </h3>
                                        <p class="related-post-excerpt">Understanding how child support is calculated and what factors affect payment amounts.</p>
                                        <a href="#" class="related-post-link">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="related-post-card">
                                    <div class="related-post-image">
                                        <img src="https://images.pexels.com/photos/5669619/pexels-photo-5669619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Related Post">
                                        <div class="related-post-category">Family Law</div>
                                        <div class="related-post-date">March 28, 2025</div>
                                    </div>
                                    <div class="related-post-content">
                                        <h3 class="related-post-title">
                                            <a href="#">Parenting Plans: Creating a Framework for Shared Custody</a>
                                        </h3>
                                        <p class="related-post-excerpt">How to develop a comprehensive parenting plan that works for everyone involved.</p>
                                        <a href="#" class="related-post-link">
                                            Read More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <!-- Search Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Search</h3>
                            <form class="search-form">
                                <input type="text" class="search-input" placeholder="Search articles...">
                                <button type="submit" class="search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Categories</h3>
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Family Law</span>
                                        <span class="category-count">12</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Criminal Law</span>
                                        <span class="category-count">9</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Real Estate Law</span>
                                        <span class="category-count">8</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Constitutional Law</span>
                                        <span class="category-count">6</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Labor Law</span>
                                        <span class="category-count">7</span>
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-link">
                                        <span>Debt Law</span>
                                        <span class="category-count">5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Recent Posts</h3>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <img src="https://images.pexels.com/photos/5668859/pexels-photo-5668859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">
                                        <a href="#">Understanding Child Custody Laws</a>
                                    </h4>
                                    <div class="recent-post-date">April 15, 2025</div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <img src="https://images.pexels.com/photos/5668467/pexels-photo-5668467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">
                                        <a href="#">Your Rights During a Police Encounter</a>
                                    </h4>
                                    <div class="recent-post-date">April 10, 2025</div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <img src="https://images.pexels.com/photos/5668468/pexels-photo-5668468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Recent Post">
                                </div>
                                <div class="recent-post-content">
                                    <h4 class="recent-post-title">
                                        <a href="#">Essential Legal Considerations When Buying Your First Home</a>
                                    </h4>
                                    <div class="recent-post-date">April 5, 2025</div>
                                </div>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popular Tags</h3>
                            <div class="tag-cloud">
                                <a href="#" class="tag-link">Family</a>
                                <a href="#" class="tag-link">Criminal</a>
                                <a href="#" class="tag-link">Real Estate</a>
                                <a href="#" class="tag-link">Rights</a>
                                <a href="#" class="tag-link">Divorce</a>
                                <a href="#" class="tag-link">Custody</a>
                                <a href="#" class="tag-link">Employment</a>
                                <a href="#" class="tag-link">Property</a>
                                <a href="#" class="tag-link">Legal Advice</a>
                                <a href="#" class="tag-link">Constitution</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Subscribe to Our Newsletter</h2>
                <p>Stay updated with our latest legal insights, articles, and news. We'll send you valuable information directly to your inbox.</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('site-assets/js/blog-details.js') }}"></script>
@endsection

