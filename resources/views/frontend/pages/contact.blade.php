@extends('frontend.master')
@section('content')
 <style>
     :root {
            --primary-color: #0d3b66;
            --secondary-color: #1a5f8c;
            --accent-color: #4fc3f7;
            --light-accent: #e3f2fd;
            --text-dark: #333;
            --text-light: #666;
            --text-white: #fff;
            --background-light: #f5f7fa;
            --card-bg: #fff;
            --border-color: #e0e0e0;
            --success-color: #4caf50;
        }

           * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h3,p,h1,h2
        {
             margin: 0;
            padding: 0;
        }


        .zhongshi-container {
    max-width: 1200px;
    margin: 0 auto;
   
}
     /* Hero Section */
        .hero1 {
            background: url('https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3') no-repeat center center/cover;
            height: 150px;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .hero1::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(13, 59, 102, 0.7);
        }
        
        .hero-content1 {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            width: 100%;
        }
        
        .hero-content1 h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        .hero-content1 p {
            font-size: 1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
      


          /* Contact Section */
        .zhongshi-contact-section {
            padding: 30px 0;
        }
        
        .zhongshi-section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .zhongshi-section-title h2 {
            font-size: 2.8rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .zhongshi-section-title p {
            color: var(--text-light);
            max-width: 750px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        .zhongshi-title-divider {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
        }
        
        .zhongshi-contact-container {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }
        
        .zhongshi-contact-info {
            flex: 1;
            min-width: 300px;
            background: var(--card-bg);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }
        
        .zhongshi-contact-info:hover {
            transform: translateY(-5px);
        }
        
        .zhongshi-contact-form {
            flex: 1;
            min-width: 300px;
            background: var(--card-bg);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .zhongshi-info-item {
            display: flex;
            margin-bottom: 20px;
            align-items: flex-start;
        }
        
        .zhongshi-info-icon {
            width: 55px;
            height: 55px;
            background: var(--light-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
            color: var(--primary-color);
            font-size: 22px;
        }
        
        .zhongshi-info-text h3 {
            color: var(--primary-color);
            margin-bottom: 8px;
            font-size: 1.3rem;
        }
        
        .zhongshi-info-text p {
            color: var(--text-light);
            line-height: 1.7;
        }
        
        .zhongshi-social-links {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }
        
        .zhongshi-social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            background: var(--primary-color);
            color: var(--text-white);
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 18px;
        }
        
        .zhongshi-social-link:hover {
            background: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .zhongshi-form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .zhongshi-form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary-color);
            font-weight: 500;
            font-size: 16px;
        }
        
        .zhongshi-form-control {
            width: 100%;
            padding: 5px 16px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s;
            background: #f9f9f9;
        }
        
        .zhongshi-form-control:focus {
            border-color: var(--accent-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(79, 195, 247, 0.2);
            background: var(--text-white);
        }
        
        .zhongshi-form-control:focus + .zhongshi-input-icon {
            color: var(--accent-color);
        }
        
        .zhongshi-textarea {
            height: 100px;
            resize: vertical;
        }
        
        .zhongshi-input-icon {
            position: absolute;
            right: 15px;
            top: 38px;
            color: var(--text-light);
            font-size: 18px;
        }
        
        .zhongshi-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--primary-color);
            color: var(--text-white);
            padding: 6px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(13, 59, 102, 0.25);
        }
        
        .zhongshi-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(13, 59, 102, 0.35);
        }
        
        .zhongshi-btn i {
            margin-right: 10px;
        }
        
        /* Map Section */
        .zhongshi-map-section {
            padding: 0 0 80px;
        }
        
        .zhongshi-map-container {
            height: 450px;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .1);
            background: var(--light-accent); 
        }
        
        .zhongshi-map-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--text-white);
            padding: 30px;
            text-align: center;
        }
        
        .zhongshi-map-placeholder i {
            font-size: 60px;
            margin-bottom: 25px;
            color: var(--accent-color);
        }
        
        .zhongshi-map-placeholder h3 {
            font-size: 28px;
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .zhongshi-map-placeholder p {
            font-size: 18px;
            max-width: 600px;
            opacity: 0.9;
        }
        
        /* Stats Section */
        .zhongshi-stats-section {
            background: var(--primary-color);
            padding: 70px 0;
            color: var(--text-white);
        }
        
        .zhongshi-stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
        }
        
        .zhongshi-stat-item {
            text-align: center;
            min-width: 200px;
        }
        
        .zhongshi-stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--accent-color);
            font-family: 'Montserrat', sans-serif;
        }
        
        .zhongshi-stat-label {
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
        }



     /* Responsive */
        @media (max-width: 992px) {
            .zhongshi-hero-title {
                font-size: 2.8rem;
            }
            
            .zhongshi-section-title h2 {
                font-size: 2.4rem;
            }
        }
        
        @media (max-width: 768px) {
          
            .zhongshi-hero {
                height: 300px;
            }
            
            .zhongshi-hero-title {
                font-size: 2.3rem;
            }
            
            .zhongshi-hero-subtitle {
                font-size: 1.1rem;
            }
            
            .zhongshi-section-title h2 {
                font-size: 2rem;
            }
            
            .zhongshi-contact-container {
                flex-direction: column;
            }
            
            .zhongshi-map-container {
                height: 350px;
            }
            
            .zhongshi-stats-container {
                flex-direction: column;
                align-items: center;
            }
           
        }
        
        @media (max-width: 480px) {
            .zhongshi-hero-title {
                font-size: 2rem;
            }
            
            .zhongshi-hero-subtitle {
                font-size: 1rem;
            }
            
            .zhongshi-section-title h2 {
                font-size: 1.8rem;
            }
            
            .zhongshi-contact-info,
            .zhongshi-contact-form {
                padding: 25px;
            }
            
            .zhongshi-info-item {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .zhongshi-info-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .zhongshi-social-links {
                justify-content: center;
            }
            
            .zhongshi-stat-number {
                font-size: 2.8rem;
            }
         
            
        }

</style>
 <!-- Hero Section -->
    <section class="hero1">
        <div class="container hero-content1">
            <h1>Contact Us</h1>
            <p>We're here to answer any questions you may have about our products and services. Reach out to us and we'll respond as soon as we can.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container zhongshi-contact-section">
        <div class="zhongshi-container">
            <div class="zhongshi-section-title">
                <h2>Connect With Our Team</h2>
                <p>Whether you have a technical question, need product specifications, or want to discuss partnership opportunities, our team is ready to assist you.</p>
                <div class="zhongshi-title-divider"></div>
            </div>
            <div class="zhongshi-contact-container">
                <div class="zhongshi-contact-info">
                    <div class="zhongshi-info-item">
                        <div class="zhongshi-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="zhongshi-info-text">
                            <h3>Office Location</h3>
                            <p>Jessore–Benapole Highway, beside Navaron Old Market Bus Stand, opposite to Mosque Road, Jhikargacha, Jashore-7420.</p>
                        </div>
                    </div>
                    
                    <div class="zhongshi-info-item">
                        <div class="zhongshi-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="zhongshi-info-text">
                            <h3>Contact Numbers</h3>
                            <p>01721917774 (General)</p>
                            <p>01841917774 (Sales)</p>
                            <p>01730673648 (Support)</p>
                        </div>
                    </div>
                    
                    <div class="zhongshi-info-item">
                        <div class="zhongshi-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="zhongshi-info-text">
                            <h3>Email Addresses</h3>
                            <p>airbasenavaron@gmail.com</p>
                            <p>mustafizurrhman.nu.isdb@gmail.com</p> 
                        </div>
                    </div>
                    
                    <div class="zhongshi-info-item">
                        <div class="zhongshi-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="zhongshi-info-text">
                            <h3>Business Hours</h3>
                            <p>Satarday-Friday: 8:30 AM - 6:00 PM</p> 
                            <p>Sunday: Closed</p>
                        </div>
                    </div>
                    
                    <div class="zhongshi-social-links">
                        <a href="#" class="zhongshi-social-link"><i class="fab fa-weixin"></i></a>
                        <a href="#" class="zhongshi-social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="zhongshi-social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="zhongshi-social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="zhongshi-contact-form">
                    <form id="zhongshiContactForm">
                        <div class="zhongshi-form-group">
                            <label for="zhongshiName">Full Name *</label>
                            <input type="text" id="zhongshiName" class="zhongshi-form-control" placeholder="Enter your name" required>
                            <span class="zhongshi-input-icon"><i class="fas fa-user"></i></span>
                        </div>
                        
                        
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="zhongshi-form-group">
                            <label for="zhongshiPhone">Phone Number</label>
                            <input type="tel" id="zhongshiPhone" class="zhongshi-form-control" placeholder="Enter your phone number">
                            <span class="zhongshi-input-icon"><i class="fas fa-phone"></i></span>
                        </div>
                            </div>
                            <div class="col-md-6">
<div class="zhongshi-form-group">
                            <label for="zhongshiEmail">Email Address *</label>
                            <input type="email" id="zhongshiEmail" class="zhongshi-form-control" placeholder="Enter your email" required>
                            <span class="zhongshi-input-icon"><i class="fas fa-envelope"></i></span>
                        </div>
                            </div>
                        </div>
                        
                        
                        <div class="zhongshi-form-group">
                            <label for="zhongshiCompany">Company Name</label>
                            <input type="text" id="zhongshiCompany" class="zhongshi-form-control" placeholder="Enter your company name">
                            <span class="zhongshi-input-icon"><i class="fas fa-building"></i></span>
                        </div>
                        
                        <div class="zhongshi-form-group">
                            <label for="zhongshiSubject">Inquiry Type *</label>
                            <select id="zhongshiSubject" class="zhongshi-form-control" required>
                                <option value="">Select inquiry type</option>
                                <option value="sales">Product Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="career">Career Opportunity</option>
                                <option value="distributor">Distributor Inquiry</option>
                                <option value="other">Other</option>
                            </select>
                            <span class="zhongshi-input-icon"><i class="fas fa-tag"></i></span>
                        </div>
                        
                        <div class="zhongshi-form-group">
                            <label for="zhongshiMessage">Your Message *</label>
                            <textarea id="zhongshiMessage" class="zhongshi-form-control zhongshi-textarea" placeholder="How can we assist you today?" required></textarea>
                            <span class="zhongshi-input-icon"><i class="fas fa-comment"></i></span>
                        </div>
                        
                        <button type="submit" class="zhongshi-btn"><i class="fas fa-paper-plane"></i> Send Message</button>
                    </form>
                </div>
            </div>
        </div>
  </section>

    <!-- Map Section -->
   <section class="container zhongshi-map-section">
    <div class="zhongshi-container">
        <div class="zhongshi-map-container">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.580451803499!2d89.02457127588251!3d23.075838114337305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff3eb0ac8847a3%3A0x9fcc8dad7ca44c86!2s7432%20Charatala%20-%20Shimulia%20Rd!5e0!3m2!1sen!2sbd!4v1755095615882!5m2!1sen!2sbd"
            width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
    </div>
</section>













@endsection