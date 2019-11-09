<div class="container">
    <section class="col-md-12 content" id="home">
        <div class="col-lg-6 col-md-6 content-item">
            <img src="images/1.jpg" alt="Image" class="tm-image">
        </div>
        <div class="col-lg-6 col-md-6 content-item content-item-1 background">
            <h2 class="main-title text-center dark-blue-text">Website Teste PHP</h2>
            <p>HTML e CSS não foram criados por mim, e sim pela <span class="light-blue-text">templatemo</span>. A utilização do mesmo é exclusivamente para praticar PHP.</p>
            <p>Créditos também para <span class="light-blue-text">Unsplash</span> pelas imagens usadas no layout.</p>               
            <button type="button" class="btn btn-big dark-blue-bordered-btn">Big Button</button>
            <button type="button" class="btn btn-big dark-blue-btn">Download</button>
        </div>
    </section>

    <section class="col-md-12 content padding" id="services">
        <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/2.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <h2 class="section-title">Quility Services</h2>
           <p class="section-text">Morbi auctor tristique mattis. Vestibulum vitae sapien a ligula mollis ullamcorper ac a nisi. Ut a dignissim est, sodales pellentesque purus. Pellentesque porttitor ante at nulla ornare, eget sagittis sapien pulvinar. In semper mi ut enim mollis, ut auctor lectus posuere.</p>
           <ul class="dark-blue-text">
               <li>+ Cras id dui eu tortor eleifend gravida</li>
               <li>+ Maecenas tempus nisi in arcu</li>
               <li>+ Nulla eget sem sit amet turpis tempus</li>
               <li>+ Crasvel eros id ipsum accumsan</li>
           </ul>
           <p>Nulla odio nunc, rhoncus quis porttitor quis, convallis sed tortor. Quisque dui mews, euismod vel sapien at, maximus feugiat tellus. </p>
           <p>Curabitur vel rutrum augue, id tristique diam. Sed imperdiet quis ipsum a vulputate. Suspendisse sit amet nibh mi. </p>
       </div>

   </section>


   <section class="col-md-12 content" id="clients">
       <div class="col-lg-6 col-md-6 content-item">
           <img src="images/3.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 content-item background flexbox">
           <h2 class="section-title">Our Clients</h2>
           <p>Maecenas tempus nisi in arcu facilisis venenatis. Fusce ac turpis sem. Nulla eget sem sit amet turpis tempus viverra at et odio. Crasvel eros id ipsum accumsan venenatis ut nec ipsum. </p>
           <p>Nulla odio nunc, rhoncus quis porttitor quis, convallis sed tortor. Quisque dui metus, euismod vel sapien at, maximus feugiat tellus. </p>
           <p>Curabitur vel rutrum augue, id tristique diam. Sed imperdiet quis ipsum a vulputate. Suspendisse sit amet nibh mi. In quis sapien a metus interdum hendrerit. </p>
           <p>Ut a dignissim est, sodales pellentesque purus. Pellentesque porttitor ante at nulla ornare, eget sagittis sapien pulvinar.</p>
           <div>
               <button type="button" class="btn dark-blue-bordered-btn normal-btn">Small Button</button>
               <button type="button" class="btn yellow-btn normal-btn">Download</button>
               <button type="button" class="btn green-btn normal-btn">Demo</button>    
           </div>             
       </div>
   </section>


   <section class="col-md-12 content" id="contact">
       <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/4.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <h2 class="section-title">Contact Us</h2>
           <p class="margin-b-25">Nulla eget sem sit amet turpis tempus viverra at et odio. Cras vel eros id ipsum accumsan venenatis ut nec ipsum.</p>

           <!--<div class="row"> -->
           <form method="post" name="contact-form" class="contact-form">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name..." required>
                </div>    
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-l-3">
                <div class="form-group contact-field">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email..." required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject..." required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..." required></textarea>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group margin-b-0">
                    <button type="submit" id="form-submit" class="btn no-bg btn-contact">Submit</button>
                </div>    
            </div>
        </form>
        <!--</div> -->
        <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
    </section>
</div>
    