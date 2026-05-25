<section class="page-hero v11-page-hero">
  <div class="container v11-page-hero-grid">
    <div>
      <span class="d3-kicker">Get A Quote</span>
      <h1>Send your inquiry</h1>
      <p>Tell us about your server management, cloud infrastructure, software development, hosting support or staffing requirement.</p>
    </div>
    <div class="v11-hero-panel">
      <strong>Sales Inquiry</strong>
      <ul>
        <li>Email: sales@netedgetechnology.com</li>
        <li>Project, support and staffing requirements</li>
        <li>Professional consultation from Netedge Technology</li>
      </ul>
    </div>
  </div>
</section>

<section class="section v11-contact-section">
  <div class="container v11-contact-grid">
    <div class="v11-contact-card">
      <h2>Inquiry Form</h2>
      <p>Use this form for new project inquiries, managed IT services, infrastructure support, software development or staffing requirements.</p>

      <?php if (!empty($_SESSION['flash_success'])): ?>
        <div class="alert success"><?= e($_SESSION['flash_success']); unset($_SESSION['flash_success']); ?></div>
      <?php endif; ?>
      <?php if (!empty($_SESSION['flash_error'])): ?>
        <div class="alert error"><?= e($_SESSION['flash_error']); unset($_SESSION['flash_error']); ?></div>
      <?php endif; ?>

      <form class="form v11-form" method="post" action="<?= e(url('inquire/submit')) ?>">
        <input type="hidden" name="_csrf" value="<?= e(csrf_token()) ?>">
        <div class="form-grid">
          <label>Full Name * <input type="text" name="name" required></label>
          <label>Email * <input type="email" name="email" required></label>
          <label class="phone-field">Phone *
            <div class="phone-combo">
              <select name="country_code" id="country_code" class="country-code-select" required>
                <option value="+91" data-country="IN">🇮🇳 +91</option>
                <option value="+1" data-country="US">🇺🇸 +1</option>
                <option value="+1" data-country="CA">🇨🇦 +1</option>
                <option value="+44" data-country="GB">🇬🇧 +44</option>
                <option value="+61" data-country="AU">🇦🇺 +61</option>
                <option value="+971" data-country="AE">🇦🇪 +971</option>
                <option value="+65" data-country="SG">🇸🇬 +65</option>
                <option value="+49" data-country="DE">🇩🇪 +49</option>
                <option value="+33" data-country="FR">🇫🇷 +33</option>
                <option value="+31" data-country="NL">🇳🇱 +31</option>
                <option value="+27" data-country="ZA">🇿🇦 +27</option>
                <option value="+81" data-country="JP">🇯🇵 +81</option>
                <option value="+86" data-country="CN">🇨🇳 +86</option>
                <option value="+880" data-country="BD">🇧🇩 +880</option>
                <option value="+94" data-country="LK">🇱🇰 +94</option>
                <option value="+977" data-country="NP">🇳🇵 +977</option>
                <option value="+92" data-country="PK">🇵🇰 +92</option>
                <option value="+966" data-country="SA">🇸🇦 +966</option>
                <option value="+974" data-country="QA">🇶🇦 +974</option>
                <option value="+965" data-country="KW">🇰🇼 +965</option>
                <option value="+968" data-country="OM">🇴🇲 +968</option>
                <option value="+973" data-country="BH">🇧🇭 +973</option>
                <option value="+60" data-country="MY">🇲🇾 +60</option>
                <option value="+66" data-country="TH">🇹🇭 +66</option>
                <option value="+62" data-country="ID">🇮🇩 +62</option>
                <option value="+63" data-country="PH">🇵🇭 +63</option>
                <option value="+84" data-country="VN">🇻🇳 +84</option>
                <option value="+82" data-country="KR">🇰🇷 +82</option>
                <option value="+39" data-country="IT">🇮🇹 +39</option>
                <option value="+34" data-country="ES">🇪🇸 +34</option>
                <option value="+55" data-country="BR">🇧🇷 +55</option>
                <option value="+52" data-country="MX">🇲🇽 +52</option>
                <option value="+7" data-country="RU">🇷🇺 +7</option>
                <option value="+90" data-country="TR">🇹🇷 +90</option>
                <option value="+234" data-country="NG">🇳🇬 +234</option>
                <option value="+254" data-country="KE">🇰🇪 +254</option>
                <option value="+20" data-country="EG">🇪🇬 +20</option>
                <option value="+972" data-country="IL">🇮🇱 +972</option>
                <option value="+353" data-country="IE">🇮🇪 +353</option>
                <option value="+46" data-country="SE">🇸🇪 +46</option>
                <option value="+47" data-country="NO">🇳🇴 +47</option>
                <option value="+45" data-country="DK">🇩🇰 +45</option>
                <option value="+41" data-country="CH">🇨🇭 +41</option>
                <option value="+43" data-country="AT">🇦🇹 +43</option>
                <option value="+32" data-country="BE">🇧🇪 +32</option>
                <option value="+48" data-country="PL">🇵🇱 +48</option>
                <option value="+351" data-country="PT">🇵🇹 +351</option>
                <option value="+30" data-country="GR">🇬🇷 +30</option>
              </select>
              <input type="text" name="phone" class="phone-number-input" required placeholder="Phone number">
            </div>
          </label>
          <label>Company <input type="text" name="company"></label>
          <label>Service
            <select name="service">
              <option value="">Select Service</option>
              <option>Webhosting Support</option>
              <option>Staffing Service</option>
              <option>Cloud Infrastructure Management</option>
              <option>Managed Services</option>
              <option>Software Development</option>
              <option>Technical Support</option>
              <option>Other</option>
            </select>
          </label>
        </div>
        <label>Requirement / Message * <textarea name="message" rows="7" required></textarea></label>
        <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off">
        <button class="btn" type="submit">Submit Inquiry</button>
      </form>
    </div>

    <aside class="v11-info-stack">
      <div>
        <h3>Send inquiry to sales</h3>
        <p>This form stores the inquiry in the CMS database and also sends it to sales@netedgetechnology.com.</p>
      </div>
      <div>
        <h3>What to include</h3>
        <p>Share service requirement, number of servers/users, expected timeline and preferred contact details.</p>
      </div>
      <div>
        <h3>Response</h3>
        <p>Netedge Technology sales team can review and respond based on your submitted requirement.</p>
      </div>
    </aside>
  </div>
</section>
