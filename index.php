<!DOCTYPE html>
<html>
<head>
  <title>Company</title>
	<meta name=»robots» content=»noindex»>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./styles/header.css">
<link rel="stylesheet" type="text/css" href="./styles/product.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
  <header class="header">
    <h1 class="header__name-company"><span class="big-letter">COM</span>PAN<span class="big-letter">Y</span> <span class="big-letter">TE</span> CH</h1>
    <nav class="nav">
      <a href="" class="nav__logo">
        <img src="assets/icons8-document-30.png" alt="COMPANY TECH" class="nav__img">
        <h2 class="nav__name-project">COMPANY TECH</h2>
      </a>
      <div class="links">
        <a href="" class="links__login">Log In</a>
        <a href="" class="links__register">Register</a>
      </div>
    </nav>
  </header>
  
    <main>
      <section class="product">
        <article>
          <h2 class="product__title">Company Dictionary Volume I: Functional Areas</h2>
          <h3 class="product__subtitle">3,200+ Key Performance Indicator Definitions for an in-depth view on performance measurement</h3>
          <p  class="product__description">Company Dictionary - Please note that this website is a development test and not a real project. It serves as a showcase for my skills and capabilities as a developer. The collection contains the most relevant means for measuring performance, throughout the most common departments in either public, private, or non-profit organizations, such as: Finance, Sales, Human Resources, Marketing, and IT.</p>
        </article>
        <article class="benefits">
          <div class="benefits__info">
            
            <div class="benefits__left">
              <div class="benefits__title">
                <img src="assets/Icon1_03.png" alt="SKI RESEARCH LIBRARY" class="benefits__title-img">
                <h3 class="benefits__title-text">KEY BENEFITS OF THE FUNCTIONAL AREAS Company DICTIONARY</h3>
              </div>
              <div class="benefits__list-wrapper">
              
                <ul class="benefits__list">
                  <li class="benefits__item-list">
                    <span class="benefits__item-list-title">SELECT - </span>the critical to drive operational success
                  </li>
                  <li class="benefits__item-list">
                    <span class="benefits__item-list-title">ACCESS - </span> a full collection of Companys, specific for each functional areas
                  </li>
                  <li class="benefits__item-list">
                    <span class="benefits__item-list-title">CONFIGURE - </span>your own customized department scorecard and dashboard
                  </li>
                  <li class="benefits__item-list">
                    <span class="benefits__item-list-title">IMPROVE - </span>your current Company framework
                  </li>
                  <li class="benefits__item-list">
                    <span class="benefits__item-list-title">BUILD - </span>your internal Company library
                  </li>
                </ul>
                <div class="benefits__book">
                  <img class="benefits__book-img" src="assets/Icon1_07.png" alt="">
                </div>
              </div>
            </div>
            
            <div class="benefits__right">
              <div class="form-wrapper">
                <a href="#" class="form-title">DOWNLOAD A FREE PREVIEW</a>
                <p class="form-description">To proceed with your order, please take a moment to fill in the fields below:</p>
                <form id="form" class="form" method="POST">
                  <input type="text" name="first-name" class="input" placeholder="First Name" required>
                  <input type="text" name="last-name" class="input" placeholder="Last Name" required>
                  <input type="text" name="company" class="input" placeholder="Company">
                  <select name="country" class="input" id="country">
                    <option value="RO">Romania</option>
                    <option value="ID">Indonesia</option>
                    <option value="ES">Spain</option>
                    <option value="US">United States</option>
                    <option value="GB">United Kingdom</option>
                  </select>
                  <div class="two-inputs">
                    <input type="text"  name="prefix" class="input" placeholder="Prefix" id="prefix" required>
                    <input type="text" name="phone" class="input" placeholder="Phone Number" required>
                  </div>
                  <input type="email" name="email" class="input" placeholder="Email Address" required>
                  <p class="form__privacy">We value your privacy and will never disclose your data to third parties without your consent.</p>
                  <div class="download-button-wrapper">
                    <div class="download-preview-msg">
                      DOWNLOAD YOUR PREVIEW
                      <div class="triangle"></div>
                    </div>
                      <button id="download-preview-button" class="download-preview-button" type="submit">DOWNLOAD</button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </article>
      </section>
      <section class="stats">
        <h3 class="stats__title">SKI FACTS AND FIGURES</h3>
      
        <div class="stats__data">
          <div class="stats__item">
            <img src="./assets/icons8-man-100.png" alt="" class="stats__item-icon">
            <h3 class="stats__item-number">75,000+</h3>
            <p class="stats__item-label">COMMUNITY MEMBERS</p>
          </div>
          <div class="stats__item">
            <img src="./assets/icons8-document-30.png" alt="" class="stats__item-icon">
            <h3 class="stats__item-number">240+</h3>
            <p class="stats__item-label">RESOURCES PROVIDED</p>
          </div>
          <div class="stats__item">
            <img src="./assets/icons8-person-64.png" alt="" class="stats__item-icon">
            <h3 class="stats__item-number">20+</h3>
            <p class="stats__item-label">BUSINESS ANALYSTS</p>
          </div>
          <div class="stats__item">
            <img src="./assets/icons8-strategy-50.png" alt="" class="stats__item-icon">
            <h3 class="stats__item-number">12+</h3>
            <p class="stats__item-label">PRACTICE DOMAINS</p>
          </div>
          <div class="stats__item">
            <img src="./assets/icons8-document-30.png" alt="" class="stats__item-icon">
            <h3 class="stats__item-number">11+</h3>
            <p class="stats__item-label">YEARS OF RESEARCH</p>
          </div>
        </div>
      
        <div class="contact">
          <div class="contact__item">
            <div class="contact__icon-wrapper">
              <img src="assets/icons8-chat-30.png" alt="" class="contact__item-icon">
              <h3 class="contact__item-title">CHAT WITH US</h3>
            </div>
            <p class="contact__item-description">Have questions? A customer service representative is online to help you via Live Chat. Join in the conversation.</p>
          </div>
          <div class="contact__item">
            <div class="contact__icon-wrapper">
              <img src="assets/icons8-phone-100.png" alt="" class="contact__item-icon">
              <h3 class="contact__item-title">CALL US</h3>
            </div>
            <p class="contact__item-description">Get in touch with us. For immediate assistance, we're available to take your call at +61 3 9028 2223.</p>
          </div>
          <div class="contact__item">
            <div class="contact__icon-wrapper">
              <img src="assets/icons8-email-100.png" alt="" class="contact__item-icon">
              <h3 class="contact__item-title">EMAIL US</h3>
            </div>
            <p class="contact__item-description">We'd love to help. Send us an email at office@Companyinstitute.org and a representative will get back to you.</p>
          </div>
        </div>
      </section>
      
    </main>
    <footer class="footer">
      <p class="footer-paragraph">Copyright © 2009-2015 Company Ltd. All rights Reserved</p>
      <a target="_blank" href="https://icons8.com/icon/30872/strategy">Strategy</a> icon by <a target="_blank" href="https://icons8.com">Icons used from Icons8</a>
    </footer>

    <script>
      $(document).ready(function() {

        $('#form').submit(function(event) {
          event.preventDefault();

          var link = document.createElement('a');
          link.href = './assets/testpdf.pdf';
          link.download = 'testpdf.pdf';
          link.target = '_blank';
          link.click();

          var formData = $(this).serialize();

          $.ajax({
            url: 'senddata.php',
            method: 'POST',
            data: formData,
            success: function(response) {

            },
            error: function() {
              console.log('Ha ocurrido un error en la solicitud');
            }
          });
        });

        $('#country').change(function() {
            var countryCode = $(this).val();

            $.ajax({
                url: 'getPrefix.php',
                type: 'POST',
                data: { country: countryCode },
                dataType: 'json',
                success: function(response) {
                    $('#prefix').val(response.prefix);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
      });
    </script>
</body>
</html>