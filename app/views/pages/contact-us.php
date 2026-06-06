<?php
$title = 'Contact Netedge Technology | IT Infrastructure & Software Development Experts';
$description = 'Contact Netedge Technology for server management, cloud infrastructure, software development, technical staffing and IT support services.';
?>
<section class="page-hero v11-page-hero sm58-page-hero batch68-page-hero">
  <div class="container sm58-hero-grid batch68-hero-grid">
    <div class="sm58-hero-copy">
      <span class="d3-kicker">Contact</span>
      <h1>Contact Us</h1>
      <p>Contact Us services from Netedge Technology, designed for stable, secure and scalable technology operations.</p>
      <div class="sm58-hero-pills"><span>Share</span><span>Get</span><span>Discuss</span><span>Request</span></div>
    </div>
    <div class="sm58-hero-visual sm60-hero-visual batch68-hero-visual" aria-hidden="true">
      <div class="sm60-network-ring"><i class="dot d1"></i><i class="dot d2"></i><i class="dot d3"></i><i class="dot d4"></i><i class="line l1"></i><i class="line l2"></i><i class="line l3"></i></div>
      <div class="batch68-visual-core"><div class="batch68-screen"><span></span><span></span><span></span></div><div class="batch68-mini m1"></div><div class="batch68-mini m2"></div><div class="batch68-mini m3"></div></div>
      <div class="sm58-hero-badge badge-one">24x7</div><div class="sm58-hero-badge badge-two">Managed</div><div class="sm58-hero-badge badge-three">Secure</div>
    </div>
  </div>

</section>

<?php if (!empty($_SESSION['flash_success'])): ?>
<section class="section" style="padding-top:25px;padding-bottom:0">
<div class="container">
<div class="notice success" style="font-size:16px;padding:18px 24px">
<?= e($_SESSION['flash_success']); unset($_SESSION['flash_success']); ?>
</div>
</div>
</section>
<?php endif; ?>

<section class="section">

  <div class="container content-page v48-static-page server-management-content server-management-v56 batch68-page" data-cms-slug="contact-us">
    
<div class="contact-page">

<div class="testimonials-intro">
<span class="section-label">Trusted Since 2007</span>
<h2>Let's Discuss Your Requirement</h2>
<p>
Whether you need server management, cloud infrastructure, software development, technical support or dedicated technical staffing, our team is ready to help.
</p>
</div>

<div class="testimonial-stats">

<div class="stat-box">
<strong>20+</strong>
<span>Years Experience</span>
</div>

<div class="stat-box">
<strong>400+</strong>
<span>Projects Delivered</span>
</div>

<div class="stat-box">
<strong>36+</strong>
<span>Countries Served</span>
</div>

<div class="stat-box">
<strong>24x7</strong>
<span>Support Operations</span>
</div>

</div>

<h2 style="margin:60px 0 20px">Get In Touch</h2>

<div class="featured-testimonials">

<div class="featured-card">
<div class="author">Sales Enquiries</div>
<div class="testimonial-text">
sales@netedgetechnology.com
</div>
</div>

<div class="featured-card">
<div class="author">Technical Support</div>
<div class="testimonial-text">
support@netedgetechnology.com
</div>
</div>

<div class="featured-card">
<div class="author">Office Address</div>
<div class="testimonial-text">
10, Amrapali Axiom<br>
4th Floor, Opp. Bopal Bridge<br>
Ambli, Bopal<br>
Ahmedabad (Bharat) - 380058
</div>
</div>

</div>

<h2 style="margin:70px 0 20px">Send Us Your Requirement</h2>

<div class="contact-form-wrapper">



<?php if (!empty($_SESSION['flash_error'])): ?>
<div class="notice error">
<?= e($_SESSION['flash_error']); unset($_SESSION['flash_error']); ?>
</div>
<?php endif; ?>

<form method="post" action="<?= e(url('contact-us/submit')) ?>" class="enterprise-contact-form">

<?= csrf_field() ?>
<input type="hidden" name="form_started" value="<?= time() ?>">

<input type="text" name="website" class="hp" tabindex="-1" autocomplete="off">

<div class="form-grid">

<div>
<label>First Name *</label>
<input type="text" id="first_name" name="first_name" required>
</div>

<div>
<label>Last Name *</label>
<input type="text" id="last_name" name="last_name" required>
</div>

<div>
<label>Email-ID *</label>
<input type="email" name="email" required>
</div>

<div>
<label>Mobile Number *</label>
<input type="text" name="phone" required>
</div>

<div>
<label>Company Name</label>
<input type="text" name="company">
</div>

<div>
<label>Service Required</label>
<select name="service">
<option value="">Select Service</option>
<option>Server Management</option>
<option>Cloud Infrastructure</option>
<option>Technical Support</option>
<option>Software Development</option>
<option>Security Services</option>
<option>Dedicated Technical Staff</option>
</select>
</div>

</div>


<div style="margin-top:20px">
<label>Country *</label>
<select id="country" required>
<option value="+91">India (+91)</option>
<option value="+1">United States (+1)</option>
<option value="+44">United Kingdom (+44)</option>
<option value="+61">Australia (+61)</option>
<option value="+49">Germany (+49)</option>
<option value="+33">France (+33)</option>
<option value="+971">United Arab Emirates (+971)</option>
<option value="+65">Singapore (+65)</option>
<option value="+1">Canada (+1)</option>
</select>
</div>

<input type="hidden" name="country_code" id="country_code" value="+91">


<input type="hidden" name="name" id="full_name">

<div style="margin-top:20px">
<label>Comments *</label>
<textarea name="message" rows="6" required></textarea>
</div>

<button class="btn" type="submit" style="margin-top:20px">
Submit Enquiry
</button>

</form>

<script>
document.addEventListener('submit', function(e){
  var f=document.getElementById('first_name').value.trim();
  var l=document.getElementById('last_name').value.trim();
  document.getElementById('full_name').value=(f+' '+l).trim();
});

document.getElementById('country').addEventListener('change', function(){
  document.getElementById('country_code').value=this.value;
});
</script>

</div>

<h2 style="margin:70px 0 20px">Why Businesses Choose Netedge Technology</h2>

<div class="featured-testimonials">

<div class="featured-card">
<div class="author">Server Management</div>
<div class="testimonial-text">
Comprehensive Linux, Windows and hosting infrastructure management.
</div>
</div>

<div class="featured-card">
<div class="author">Cloud & DevOps</div>
<div class="testimonial-text">
AWS, Azure, automation and modern cloud operations.
</div>
</div>

<div class="featured-card">
<div class="author">Software Development</div>
<div class="testimonial-text">
Custom web applications, enterprise portals and SaaS solutions.
</div>
</div>

<div class="featured-card">
<div class="author">Dedicated Technical Staff</div>
<div class="testimonial-text">
Experienced engineers available for long-term technical engagements.
</div>
</div>

</div>

</div>

<section class="content-cta-block"><div><h2>Need contact us support?</h2><p>Share your requirement and our team will review the right support model for your business.</p></div><a class="btn" href="<?= e(url('discuss-a-requirement')) ?>">Discuss A Requirement</a></section>
  </div>
</section>
