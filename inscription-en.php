<?php
include("header/tete-en.php");
?>

<body style="background-image: url(assets/images/background.png);">
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <?php
    include("header/header-en.php");
    ?>
    <!-- End Header Area -->


    <section style="direction:rtl;text-align: right;" id="home" class="hero-area">
      
              
      <h1 style="color: white;text-align: center;">Registration on the platform</h1>
    </section>

    

   
    <section id="features" style="background-color: rgba(255, 255, 255, 0.7);backdrop-filter: blur(10px);" class="features section">
      <div class="content1">
        <!--content inner-->
        <div class="content__inner1">
          
          <div class="container overflow-hidden1">
            <!--multisteps-form-->
            <div class="multisteps-form1">
              <!--progress bar-->
              <br><br><br>
              <div class="row">
                <div class="col-15 col-lg-8 m-auto">
                  <div class="multisteps-form__progress1">
                    <button class="multisteps-form__progress-btn1 js-active1" type="button" title="User Info">User Info</button>
                    <button class="multisteps-form__progress-btn1" type="button" title="Address">Label</button>
                    <button class="multisteps-form__progress-btn1" type="button" title="Order Info">Questionnaire</button>
                    <button class="multisteps-form__progress-btn1" type="button" title="Comments">Confiramtion        </button>
                  </div>
                </div>
              </div>
              <br><br>
              

              <!--form panels-->
              <div class="row">
                <div class="col-12 col-lg-8 m-auto">
                  <form class="multisteps-form__form1">
                    <!--single form panel-->
                    <div class="multisteps-form__panel1 shadow p-4 rounded bg-white js-active1" data-animation="scaleIn">
                      <h3 class="multisteps-form__title1">Your user Infomation</h3>
                      <div class="multisteps-form__content1">

                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-6">
                            <input class="multisteps-form__input1 form-control" type="text" placeholder="First Name"/>
                          </div>
                          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                            <input class="multisteps-form__input1 form-control" type="text" placeholder="Last Name"/>
                          </div>
                        </div>
                        

                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-12">
                            <input class="multisteps-form__input1 form-control" type="text" placeholder="Email"/>
                          </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-12">
                              <input class="multisteps-form__input1 form-control" type="text" placeholder="Nationality"/>
                            </div>
                          </div>
                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-6">
                            <input class="multisteps-form__input1 form-control" type="password" placeholder="Password"/>
                          </div>
                          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                            <input class="multisteps-form__input1 form-control" type="password" placeholder="Repeat Password"/>
                          </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                          <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                        </div>
                      </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                      <h3 class="multisteps-form__title1">Your Label</h3>
                      <div class="multisteps-form__content1">

                        <div class="form-row mt-4">
                            <div class="col">
                              <label for="">Do you have Label  ? (if Yes , enter the title of the label)</label>
                              
                                <div class="col-12 col-sm-6">
                                    <input type="checkbox" placeholder=""/> Yes
                                </div>
                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                    <input type="checkbox" placeholder=""/> No
                                </div>
                              
                              
                            </div>
                        </div>

                        <div class="form-row mt-4">
                          <div class="col">
                            <input class="multisteps-form__input1 form-control" type="text" placeholder="Title of Label"/>
                          </div>
                        </div>
                        
                        
                        <div class="button-row d-flex mt-4">
                          <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                          <button class="btn btn-primary1 ml-auto js-btn-next" type="button" title="Next">Next</button>
                        </div>
                      </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                      <h3 class="multisteps-form__title1">Your Order Info</h3>
                      <div class="multisteps-form__content1">
                        <div class="row">
                          <div class="col-12 col-md-6 mt-4">
                            <div class="card shadow-sm">
                              <div class="card-body">
                                <h5 class="card-title">Item Title</h5>
                                <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 mt-4">
                            <div class="card shadow-sm">
                              <div class="card-body">
                                <h5 class="card-title">Item Title</h5>
                                <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="button-row d-flex mt-4 col-12">
                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                      <h3 class="multisteps-form__title1">Additional Comments</h3>
                      <div class="multisteps-form__content1">
                        <div class="form-row mt-4">
                          <textarea class="multisteps-form__textarea1 form-control" placeholder="Additional Comments and Requirements"></textarea>
                        </div>
                        <div class="button-row d-flex mt-4">
                          <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                          <button class="btn btn-success ml-auto" type="button" title="Send">Send</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                      <!-- Single Widget -->
                      <div class="single-footer f-about">
                          <div class="logo">
                              <a href="index.html">
                                  <img src="assets/images/logo/logo-cde.png" alt="#">
                              </a>
                          </div>
                          <p>Making the world a better place through constructing elegant hierarchies.</p>
                          <ul class="social">
                              <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                              <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
                          </ul>
                          <p class="copyright-text">Designed and Developed by <a href="https://uideck.com/"
                                  rel="nofollow" target="_blank">UIdeck</a>
                          </p>
                      </div>
                      <!-- End Single Widget -->
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                      <div class="row">
                          <div class="col-lg-3 col-md-6 col-12">
                              <!-- Single Widget -->
                              <div class="single-footer f-link">
                                  <h3>Solutions</h3>
                                  <ul>
                                      <li><a href="javascript:void(0)">Marketing</a></li>
                                      <li><a href="javascript:void(0)">Analytics</a></li>
                                      <li><a href="javascript:void(0)">Commerce</a></li>
                                      <li><a href="javascript:void(0)">Insights</a></li>
                                      <li><a href="javascript:void(0)">Promotion</a></li>
                                  </ul>
                              </div>
                              <!-- End Single Widget -->
                          </div>
                          <div class="col-lg-3 col-md-6 col-12">
                              <!-- Single Widget -->
                              <div class="single-footer f-link">
                                  <h3>Support</h3>
                                  <ul>
                                      <li><a href="javascript:void(0)">Pricing</a></li>
                                      <li><a href="javascript:void(0)">Documentation</a></li>
                                      <li><a href="javascript:void(0)">Guides</a></li>
                                      <li><a href="javascript:void(0)">API Status</a></li>
                                      <li><a href="javascript:void(0)">Live Support</a></li>
                                  </ul>
                              </div>
                              <!-- End Single Widget -->
                          </div>
                          <div class="col-lg-3 col-md-6 col-12">
                              <!-- Single Widget -->
                              <div class="single-footer f-link">
                                  <h3>Company</h3>
                                  <ul>
                                      <li><a href="javascript:void(0)">About Us</a></li>
                                      <li><a href="javascript:void(0)">Our Blog</a></li>
                                      <li><a href="javascript:void(0)">Jobs</a></li>
                                      <li><a href="javascript:void(0)">Press</a></li>
                                      <li><a href="javascript:void(0)">Contact Us</a></li>
                                  </ul>
                              </div>
                              <!-- End Single Widget -->
                          </div>
                          <div class="col-lg-3 col-md-6 col-12">
                              <!-- Single Widget -->
                              <div class="single-footer f-link">
                                  <h3>Legal</h3>
                                  <ul>
                                      <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                      <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                      <li><a href="javascript:void(0)">Catering Services</a></li>
                                      <li><a href="javascript:void(0)">Customer Relations</a></li>
                                      <li><a href="javascript:void(0)">Innovation</a></li>
                                  </ul>
                              </div>
                              <!-- End Single Widget -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--/ End Footer Top -->
  </footer>
  <!--/ End Footer Area -->

  <!-- ========================= scroll-top ========================= -->
  <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
  </a>

  <!-- ========================= JS here ========================= -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/count-up.min.js"></script>
  <script src="assets/js/main1.js"></script>
  <script type="text/javascript">

      //====== counter up 
      var cu = new counterUp({
          start: 0,
          duration: 2000,
          intvalues: true,
          interval: 100,
          append: " ",
      });
      cu.start();
  </script>


  <script>
    //DOM elements
  const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn1',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn1`),
    stepsBar: document.querySelector('.multisteps-form__progress1'),
    stepsForm: document.querySelector('.multisteps-form__form1'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea1'),
    stepFormPanelClass: 'multisteps-form__panel1',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel1'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
  };
  
  //remove class from a set of items
  const removeClasses = (elemSet, className) => {
    
    elemSet.forEach(elem => {
      
      elem.classList.remove(className);
      
    });
    
  };
  
  //return exect parent node of the element
  const findParent = (elem, parentClass) => {
    
    let currentNode = elem;
  
    while(! (currentNode.classList.contains(parentClass))) {
      currentNode = currentNode.parentNode;
    }
    
    return currentNode;
    
  };
  
  //get active button step number
  const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
  };
  
  //set all steps before clicked (and clicked too) to active
  const setActiveStep = (activeStepNum) => {
    
    //remove active state from all the state
    removeClasses(DOMstrings.stepsBtns, 'js-active1');
    
    //set picked items to active
    DOMstrings.stepsBtns.forEach((elem, index) => {
      
      if(index <= (activeStepNum) ) {
        elem.classList.add('js-active1');
      }
      
    });
  };
  
  //get active panel
  const getActivePanel = () => {
    
    let activePanel;
    
    DOMstrings.stepFormPanels.forEach(elem => {
      
      if(elem.classList.contains('js-active1')) {
        
        activePanel = elem;
        
      }
      
    });
    
    return activePanel;
                                      
  };
  
  //open active panel (and close unactive panels)
  const setActivePanel = activePanelNum => {
    
    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'js-active1');
    
    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
      if(index === (activePanelNum)) {
        
        elem.classList.add('js-active1');
     
        setFormHeight(elem);
        
      }
    })
    
  };
  
  //set form height equal to current panel height
  const formHeight = (activePanel) => {
    
    const activePanelHeight = activePanel.offsetHeight;
    
    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
    
  };
  
  const setFormHeight = () => {
    const activePanel = getActivePanel();
  
    formHeight(activePanel);
  }
  
  //STEPS BAR CLICK FUNCTION
  DOMstrings.stepsBar.addEventListener('click', e => {
    
    //check if click target is a step button
    const eventTarget = e.target;
    
    if(!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
      return;
    }
    
    //get active button step number
    const activeStep = getActiveStep(eventTarget);
    
    //set all steps before clicked (and clicked too) to active
    setActiveStep(activeStep);
    
    //open active panel
    setActivePanel(activeStep);
  });
  
  //PREV/NEXT BTNS CLICK
  DOMstrings.stepsForm.addEventListener('click', e => {
    
    const eventTarget = e.target;
    
    //check if we clicked on `PREV` or NEXT` buttons
    if(! ( (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) || (eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)) ) ) 
    {
      return;
    }
    
    //find active panel
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
    
    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
    
    //set active step and active panel onclick
    if(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
      activePanelNum--;
    
    } else {
      
      activePanelNum++;
    
    }
    
    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);
    
  });
  
  //SETTING PROPER FORM HEIGHT ONLOAD
  window.addEventListener('load', setFormHeight, false);
  
  //SETTING PROPER FORM HEIGHT ONRESIZE
  window.addEventListener('resize', setFormHeight, false);
  
  //changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)
  
  const setAnimationType = (newType) => {
    DOMstrings.stepFormPanels.forEach(elem => {
      elem.dataset.animation = newType;
    })
  };
  
  //selector onchange - changing animation
  const animationSelect = document.querySelector('.pick-animation__select1');
  
  animationSelect.addEventListener('change', () => {
    const newAnimationType = animationSelect.value;
    
    setAnimationType(newAnimationType);
  });
  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</body>

</html>
