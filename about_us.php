<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> About us </title>

  <!-- JS and CSS -->
  <link rel = "stylesheet" href = "assets/css/about_us.css">
</head>



<body>
  
<?php require "views/nav.php"; ?>

<div class="aboutusMain">
  <div class="who">
    <div class="text">
      <h1> Ewaste Express </h1>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sint vitae ipsam. Minus error esse saepe ex adipisci harum facere commodi officiis fugit assumenda, quas, corrupti nisi ad possimus repellendus? </p>
    </div>
    <div class="image-container">
      <img src="images/Ewaste.png" alt="Ewaste Image">
    </div>
  </div>


 <div class="more">
  <h1 class="section-title">Know more about Ewaste Express</h1>
  <div class="row">

    <div class="container">
        <div class="circle-wrapper">
          <img src="images/aboutus.png" alt="Our Story">
        </div>
        <p>Our Story and </p>
        <p>Sustainability </p>
    </div>

    <div class="container">
      <div class="circle-wrapper">
        <img src="images/purpose.png" alt="Purpose">
      </div>
      <p>Powered by Purpose </p>
    </div>

    <div class="container">
      <div class="circle-wrapper">
        <img src="images/partner.png" alt="Partner">
      </div>
      <p>Your Trusted Partner </p>
    </div>

    <div class="container">
      <div class="circle-wrapper">
        <img src="images/experts.png" alt="Experts">
      </div>
      <p> Meet the Experts </p>
    </div>

  </div>
</div>

  <div class = "ourStory">
    <div class = "ourStory_container">
      <img src = "images/story.jpg">
    </div>
    <div class= "text_OurStory">
      <h1> Our Story </h1>
        <p> At E-Waste Express, we believe that protecting the planet shouldn't be complicated. Our journey began with a simple observation: homes and businesses 
          everywhere were filled with obsolete, damaged, or unused electronics taking up space, collecting dust, and eventually becoming harmful to the environment. 
          What started as a local initiative to help friends and neighbors responsibly dispose of their old electronics quickly grew into a full-fledged mission.
          We saw the need for a more convenient, eco-friendly solution so we built one.
        </p>
      <div class= "learnMore"> <h7> Learn more </h7> </div>
    </div>
  </div>

   <div class = "sustainability">
    <div class= "text_sustainability">
      <h1> Sustainability </h1>
      <p> Electronic waste is one of the fastest-growing environmental challenges, and much of it ends up in landfills, leaking toxic materials into our soil and water. 
        At E-Waste Express, we’re committed to interrupting that cycle by ensuring every item we collect is processed through certified recycling partners or responsibly 
        refurbished. Our goal isn’t just to remove clutter it’s to reduce the carbon and chemical footprint of discarded electronics.
      </p>
      <div class= "learnMore"> <h7> Learn more </h7> </div>
    </div>
    <div class = "sustainability_container">
      <img src = "images/sustainability.jpg">
    </div>
  </div>

  <div class = "ourStory">
    <div class = "ourStory_container">
      <img src = "images/purpose.jpeg">
    </div>
    <div class= "text_OurStory">
      <h1> Powered by Purpose </h1>
      <p> Our purpose drives everything we do from partnering with certified recyclers to educating communities about responsible tech disposal. When you choose us, you're 
          not just clearing space you're contributing to real, measurable change. 
      </p>
      <div class= "learnMore"> <h7> Learn more </h7> </div>
    </div>
  </div>

  <div class = "sustainability">
    <div class= "text_sustainability">
      <h1> Your Trusted Partner </h1>
      <p> E-Waste Express is more than just a pickup service we’re your reliable partner in responsible electronics disposal. Whether you're a household clearing out old 
        devices or a business managing tech upgrades, we ensure your e-waste is handled securely, ethically, and sustainably. With transparent processes, certified recycling 
        partners, and a commitment to customer care, you can count on us to do the right thing every time. Trust us to make e-waste disposal easy, safe, and impactful. 
      </p>
      <div class= "learnMore"> <h7> Learn more </h7> </div>
    </div>
    <div class = "sustainability_container">
      <img src = "images/partner.jpg">
    </div>
  </div>

  <div class = "ourStory">
    <div class = "ourStory_container">
      <img src = "images/expert.jpg">
    </div>
    <div class= "text_OurStory">
      <h1> Meet the Experts </h1>
      <p> Behind E-Waste Express is a passionate team of environmental advocates, tech specialists, and logistics pros dedicated to solving the e-waste crisis. With years of 
        experience in electronics handling, recycling compliance, and sustainable practices, our experts make sure every item is managed with precision and purpose. We're not 
        just here to pick up devices we’re here to guide, inform, and ensure your e-waste journey is responsible from start to finish. Get to know the people turning old 
        electronics into new opportunities.
      </p>
      <div class= "learnMore"> <h7> Learn more </h7> </div>
    </div>
  </div>

  <div class = "newsletter"> 
   <h1> Interested? sign up for our news letter </h1>
   <p> Stay updated for our latest news </p>
  </div>


  <div class="form-container">
        <form action="#" method="post">
            <div class="input-group-grid">
                <div class="input-field">
                    <label for="email">Email<span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-field">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name">
                </div>
                <div class="input-field">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name">
                </div>
            </div>

            <div class="input-field">
                <label for="topic">Topic of Interest<span class="required">*</span></label>
                <select id="topic" name="topic" required>
                    <option value="" disabled selected> Please Select </option>
                    <option value="general-news"> General E-Waste News </option>
                    <option value="recycling-tips"> Recycling Tips & How-To </option>
                    <option value="sustainability"> Sustainability & Environmental Impact </option>
                </select>
            </div>

            <p class="privacy-text">
                Ewaste Exprees needs the contact information you provide to us to contact you about our latest news. You may 
                unsubscribe from these notification at any time. For information on how to unsubscribe, as well as our privacy 
                practices and commitment to protecting your privacy, please review our Privacy Policy.
            </p>

            <button type="submit" class="subscribe-btn">SUBSCRIBE FOR UPDATES</button>
        </form>
    </div>

</div>

<?php require "views/footer.php"; ?>
<script src="assets/js/nav.js"></script>
</body>


</html>