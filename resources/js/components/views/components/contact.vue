<script setup>

</script>


<template>
   
    <div id="contact">
      <div class="parallax-section">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="conatiner">
            <div class="apply-text">
              <h3 style="color: rgb(253, 253, 253);">Contact</h3>
              
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
                <h2>Que souhaitez-vous savoir ?</h2>
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
                          data-error="Nom"
                          placeholder="Nom"
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
                          data-error="Email"
                          placeholder="Email"
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
                          placeholder="Numero"
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
                          placeholder="Suject"
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
                          placeholder="Messages"
                        ></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="g-recaptcha mb-4" data-sitekey="6Lf3IXIoAAAAAKOgCOQngU0j5zzF28PqvE7s_BNQ"></div>
                    
                    <div class="col-lg-12 col-md-12">
                      <button type="submit" class="default-btn1 btn-two">
                        Envoyer
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

<style scoped>
.parallax-section {
  background-image: url('./imgs/apply-bg-2.png'); /* Assurez-vous que le chemin vers votre image de fond est correct */
  background-size: cover;
  background-attachment: fixed;
  background-position: center center;
  color: #ffffff; /* Couleur du texte sur l'image de fond */
  /* Ajoutez d'autres styles selon vos besoins */
}

.apply-text {
  padding: 100px 0; /* Ajustez la valeur de remplissage selon vos besoins */
}

/* Ajoutez d'autres styles pour le texte et les éléments de la section ici */
</style>