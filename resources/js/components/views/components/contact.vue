
<template>
  
    <div id="contact">
      <div class="inner-banner bg-shape2 bg-color2">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="conatiner">
            <div class="inner-title text-center">
              <h3>Contact Us</h3>
              <ul>
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <i class="fas fa-chevron-right"></i>
                </li>
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-form pb-70 pl-5">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6 p-0">
            <div class="contact-img">
              <img src="assets/img/contact.png" alt="Contact Images" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-area">
              <div class="form-section">
                <h2>What Do You Want to Know?</h2>
                <form id="contactForm">
                  <div class="row">
                    <div class="col-lg-6 col-sm-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="name"
                          id="name"
                          class="form-control"
                          required
                          data-error="Please enter your name"
                          placeholder="Your Name"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <div class="form-group">
                        <input
                          type="email"
                          name="email"
                          id="email"
                          class="form-control"
                          required
                          data-error="Please enter your email"
                          placeholder="Your Email"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="phone_number"
                          id="phone_number"
                          required
                          data-error="Please enter your number"
                          class="form-control"
                          placeholder="Your Phone"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="msg_subject"
                          id="msg_subject"
                          class="form-control"
                          required
                          data-error="Please enter your subject"
                          placeholder="Subject"
                        />
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                        <textarea
                          name="message"
                          class="form-message textarea-hight"
                          id="message"
                          cols="30"
                          rows="5"
                          required
                          data-error="Write your message"
                          placeholder="Your Message"
                        ></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <button type="submit" class="default-btn1 btn-two">
                        Submit
                      </button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

</template>