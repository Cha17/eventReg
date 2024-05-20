<?php
require 'db_conn.php';

if(isset($_POST["submit"])){
    $fullname = $_POST['fullname'];
    $student_num = $_POST['student_num'];
    $program = $_POST['program'];
    $yr_sec = $_POST['yr_sec'];
    $dob = $_POST['dob'];
    $sem = $_POST['sem']; 
    $purpose = $_POST['purpose'];


  $query = "INSERT INTO request (fullname,student_num,program,yr_sec,dob,sem,purpose,reqtype) 
  VALUES ('$fullname','$student_num','$program','$yr_sec','$dob','$sem', '$purpose', 'Transcript of Records')";


  mysqli_query($conn,$query);
  ?><script type = "text/javascript">alert("Keep in mind that your request is subject to assessment, and approval is not guaranteed.");



window.location.href="qrgenerator.php";
</script><?php




  //header("location: formrequest.html");
}
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Request Transcript of Records</title>
    <link rel="icon" type="image/x-icon" href="images/papsicon.png" />
    <link href="/dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="modal.css">
    
  </head>
  <body
    class="bg-fixed bg-no-repeat bg-cover bg-center bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#f3f4f5] via-[#e0e8ed] to-[#d0dde6]"
  >
    <div class="flex flex-col items-stretch pl-12 pr-12 max-md:px-5">
      <header>
        <nav
          class="flex w-full items-center justify-between gap-20 mt-10 max-md:max-w-full max-md:flex-wrap"
        >
          <a
            href="Student_Home.html"
            class="flex items-stretch justify-between gap-5 my-auto max-md:max-w-full max-md:flex-wrap max-md:justify-center"
          >
            <img
              loading="lazy"
              srcset="
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=100   100w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=200   200w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=400   400w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=800   800w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=1200 1200w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=1600 1600w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&width=2000 2000w,
                https://cdn.builder.io/api/v1/image/assets/TEMP/c10b870d-61d6-41cd-9b5e-f87b8fb9b9eb?apiKey=00d7018a335e46bbabd3ad8844351700&
              "
              class="aspect-[4.09] object-contain object-center w-[143px] overflow-hidden shrink-0 max-w-full"
              alt="Logo"
            />
            <div
              class="justify-center self-start flex gap-10 my-auto max-md:max-w-full max-md:flex-wrap max-md:justify-center"
            >
              <a
                href="Student_Home.html"
                class="text-stone-900 text-center text-base font-medium leading-5"
                >Home</a
              >
              <a
                href="formrequest.html"
                class="text-black text-center text-base font-extrabold leading-5"
                >Form Request</a
              >
              <a
                href="Students_Programs.html"
                class="text-black text-center text-base font-medium leading-5"
                >Programs</a
              >
              <a
                href="Students_About.html"
                class="text-black text-center text-base font-medium leading-5 whitespace-nowrap"
                >About</a
              >
            </div>
          </a>
         
        </nav>
      </header>
      <h1
        class="text-orange-950 text-4xl font-extrabold leading-[54px] w-[1012px] ml-4 mt-20 max-md:max-w-full max-md:mt-10"
      >
        Request Transcript of Records
      </h1>
      <div class="pr-12 pl-4">
      <p
        class="text-orange-950 text-lg leading-8 w-full ml-4 mr-5 mt-6 max-md:max-w-full"
      >
        <span
          >Please ensure that you have already submitted your
        </span>
        <span class="font-bold">Form 137</span>
        <span>
        to the registrar before proceeding to fill out this form.
        </span>
        <span> </br>
        </span
          >Once submitted, leave the rest to us, and your transcript will be ready within
        <span class="font-bold">7 working days</span>
        <span>.</span>
      </p>
    </div>
    <div>
      <form class="" method="post" autocomplete="off">
      <section>
        <div class="flex flex-col items-stretch px-5">
          <div
            class="justify-center items-stretch bg-slate-300 flex w-full flex-col -mr-5 mt-12 px-7 py-8 rounded-[30px] max-md:max-w-full max-md:mt-10 max-md:px-5"
          >
            <div class="justify-between max-md:max-w-full">
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="fullname"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Full Name</label
                    >
                    <input
                      type="text"
                      name="fullname"
                      id="fullname"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="Full Name"
                      required
                    />
                  </div>
                </div>
                <div
                  class="flex flex-col items-stretch w-[35%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="student_num"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Student Number</label
                    >
                    <input
                      id="student_num"
                      name="student_num"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="Student Number"
                      required
                    />
                  </div>
                </div>
                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="program"
                      class="text-[#401b1b] text-base font-extrabold leading-6 whitespace-nowrap"
                      >Program</label
                    >
                    <div
                      class="w-88 relative"
                      
                    >
                      <input
                        type="text"
                        id="program"
                        name="program"
                        placeholder="Program"
                        class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                        onkeyup="onkeyUp(event)"
                        autocomplete="off"
                      />
                      <div
                        id="dropdown"
                        class="w-full h-60 border border-gray-300 rounded-md bg-[#eff0f2] absolute overflow-y-auto hidden"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="justify-between mt-10 max-md:max-w-full">
              <div
                class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
              >
                <div
                  class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="yr_sec"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Year and Section</label
                    >

                    <div
                      class="w-88 relative"
                    >
                      <select
                        type="text"
                        id="yr_sec"
                        name="yr_sec"
                        placeholder="Year and Section"
                        class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"                        autocomplete="off"
                        >
                        <option value=" "> </option>
                        <option value="1-1">1-1</option>
                        <option value="1-2">1-2</option>
                        <option value="1-3">1-3</option>
                        <option value="1-4">1-4</option>
                        <option value="1-5">1-5</option>

                        <option value="2-1">2-1</option>
                        <option value="2-2">2-2</option>
                        <option value="2-3">2-3</option>
                        <option value="2-4">2-4</option>
                        <option value="2-5">2-5</option>

                        <option value="3-1">3-1</option>
                        <option value="3-2">3-2</option>
                        <option value="3-3">3-3</option>
                        <option value="3-4">3-4</option>
                        <option value="3-5">3-5</option>

                        <option value="4-1">4-1</option>
                        <option value="4-2">4-2</option>
                        <option value="4-3">4-3</option>
                        <option value="4-4">4-4</option>
                        <option value="4-5">4-5</option>
                      
                      
                      </select>

                      

                      <div
                        id="dropdown_yr_sec"
                        class="w-full h-60 border border-gray-300 rounded-md bg-[#eff0f2] absolute overflow-y-auto hidden"
                      ></div>
                    </div>
                  </div>
                </div>
                <div
                  class="flex flex-col items-stretch w-[34%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="dob"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Date of Birth</label
                    >
                    <input
                      type="date"
                      id="dob"
                      name="dob"
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                      placeholder="Date of Birth"
                      required
                    />
                  </div>
                </div>
                <div
                  class="flex flex-col items-stretch w-[33%] ml-5 max-md:w-full max-md:ml-0"
                >
                  <div class="items-stretch flex grow flex-col max-md:mt-10">
                    <label
                      for="sem"
                      class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                      >Semester currently taking</label
                    >

                    <input
                      type="text"
                      id="sem"
                      name="sem"
                      placeholder="Semester currently taking"
                      required
                      class="bg-[#eff0f2] mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[50px] max-md:pl-1"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="flex flex-col items-stretch px-5">
          <div
            class="justify-center items-stretch bg-slate-300 flex w-full flex-col -mr-5 mt-12 px-7 py-8 rounded-[30px] max-md:max-w-full max-md:mt-10 max-md:px-5"
          >
            <div class="items-stretch flex grow flex-col max-md:mt-10">
              <label
                for="purpose"
                class="text-[#401b1b] text-base font-bold leading-6 whitespace-nowrap"
                >Purpose</label
              >

</div>
              <input
                type="text"
                name="purpose"
                id="purpose"
                class="bg-[#eff0f2] align-text-top mt-3 py-3 px-5 w-full border border-gray-300 p-3 focus:outline-none focus:ring-[#ab644d] focus:ring-1 rounded-[10px] max-md:pl-1"
                placeholder="Please type your specific reason of requesting a Transcript of Records here..."
                required
              />
            </div>
            <!--
        <div class="container">
          <h2 class="title">
            Purpose (State the specific reason for your request for this
            document)
          </h2>
          <div class="input-container">
            <label for="address">Please type your address here...</label>
            <input type="text" id="address" name="address" />
          </div>
        </div>
        -->
          </div>
          

<!-- component -->

          <section class="mb-20">
            <div class="flex flex-col items-stretch px-16">
              <div
                class="justify-center items-stretch  flex w-full flex-col -mr-5 px-7 mt-12 rounded-[30px] max-md:max-w-full max-md:mt-10 max-md:px-5"
              ><span class="font-extrabold ">PLEASE READ BEFORE PROCEEDING</span> <br />
              <ul class="list-disc pl-5">
          <li>Keep in mind that your request is subject to assessment, and approval is not guaranteed.</li>
          <li>Be ready to make a payment at the cashier's office upon collection of this document.</li>
          <li>Please note that the price for the document may vary depending on the number of pages.</li>
          <li>You will receive an email notification at the provided email address to update you on the status of your request.</li>
          <li>Please ensure that the email address you provided is active and regularly checked for updates.</li>
        </ul>
        <button type="submit"
              name="submit" class="justify-center items-center shadow-2xl bg-[#AC644C] flex w-[244px] max-w-full gap-2 mt-20 px-12 py-7 rounded-[40px] self-center max-md:mt-10 max-md:px-5">
               
              <h2 class="text-gray-200 text-center text-lg font-extrabold leading-6">Submit</h2>
                <a href="https://cdn.builder.io/api/v1/image/assets/TEMP/95614cd9-381a-458f-b521-21c69ed9a189?apiKey=00d7018a335e46bbabd3ad8844351700" class="aspect-square object-contain object-center w-[18px] justify-center items-center overflow-hidden self-center shrink-0 max-w-full my-auto">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/95614cd9-381a-458f-b521-21c69ed9a189?apiKey=00d7018a335e46bbabd3ad8844351700&" alt="" />
                </a>
              </button>
              <!--
              <button data-toggle="modal"
              name="submit"
          type="button" class="justify-center items-center shadow-2xl bg-[#AC644C] flex w-[244px] max-w-full hover:bg-[#7d4836] gap-2 mt-20 px-12 py-7 rounded-[40px] self-center max-md:mt-10 max-md:px-5">
                <h2 class="text-gray-200 text-center text-lg font-extrabold leading-6">Submit</h2>
                <a href="https://cdn.builder.io/api/v1/image/assets/TEMP/95614cd9-381a-458f-b521-21c69ed9a189?apiKey=00d7018a335e46bbabd3ad8844351700" class="aspect-square object-contain object-center w-[18px] justify-center items-center overflow-hidden self-center shrink-0 max-w-full my-auto">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/95614cd9-381a-458f-b521-21c69ed9a189?apiKey=00d7018a335e46bbabd3ad8844351700&" alt="" />
                </a>
              </button>
-->
               </div></div>
        </section>
      </form>
      </div>
        </div>
      
      <!--3rd sec-->
      
<!--
  
  <div
    role="dialog"
    id="modal-example"
    aria-hidden="false"
    style="display: flex;"
    class="modal fixed top-0 left-0 z-50 w-screen h-screen bg-black/30 flex items-center flex-col justify-center p-6 fade"
    tabindex="-1"
  >
    
    <div
      class="absolute top-0 left-0 z-[0] w-full h-full"
      tabindex="-1"
    ></div>
    
    <article
      class="modal-content flex flex-col relative m-0 rounded-md bg-stone-100 sm:my-16"
      aria-labelledby="modal-title"
      aria-describedby="modal-body"
    >
      
      <header class="flex p-4 items-center justify-between">
        <h2 class="m-0 text-xl font-medium max-w-[calc(100%_-_3rem)]">REMINDERS</h2>
        <button
          type="button"
          class="flex items-center justify-center w-8 h-8 rounded-full bg-transparent transition-colors duration-300 hover:bg-black/10"
          data-dismiss="modal"
          aria-label="Close"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="22"
            height="22"
            viewBox="0 0 24 24"
            fill="none"
            stroke="#000000"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            style="--size: 32rem"
          >
            <line x1="18" y1="6" x2="6" y2="18" style="--size: 32rem"></line>
            <line x1="6" y1="6" x2="18" y2="18" style="--size: 32rem"></line>
          </svg>
        </button>
      </header>
      <main class="relative flex-[1_1_auto] p-4" style="--size: 32rem">
        <ul class="list-disc pl-5">
          <li>Keep in mind that your request is subject to assessment, and approval is not guaranteed.</li>
          <li>Be ready to make a payment at the cashier's office upon collection of this document.</li>
          <li>Please note that the price for the document may vary depending on the number of pages.</li>
          <li>You will receive an email notification at the provided email address to update you on the status of your request.</li>
          <li>Please ensure that the email address you provided is active and regularly checked for updates.</li>
        </ul>
      </main>
      <footer class="flex flex-shrink-0 flex-wrap items-center justify-end flex-row p-4 gap-5" style="--size: 32rem">
        <button
          type="button"
          class="flex items-center justify-center px-4 font-medium bg-gray-200 text-black h-9 rounded-3xl rounded md hover:bg-gray-300 transition-all duration-300"
          data-dismiss="modal"
        >
          <span class="flex items-center justify-center space-x-2"
            >Cancel</span
          ></button
        >
        
        <button
          type="submit"
          name="submit" 
          class="bg-[#AC644C] flex items-center justify-center px-4 font-medium text-white h-9 rounded-3xl rounded md hover:bg-[#7d4836] transition-all duration-300"
        >
          <span class="flex items-center justify-center space-x-2"
            >Submit</span
          >
    
        </button>
        
      </footer>
    </article>
  </div>
  
</main>

<script>
    
    const buttonClose = document.querySelectorAll('[data-dismiss="modal"]')
    const modal = document.querySelector('.modal')
    const trigger = document.querySelector('[data-toggle="modal"]')
    
    
    
    // Static backdrop

    function getStaticClass (modal) {
        modal.classList.add('astroui-modal-static')
        document.body.style.overflow = 'hidden'
        document.body.classList.add('astroui-modal-open')
        setTimeout(() => {
        modal.classList.remove('astroui-modal-static')
        }, 100)
    }

    // Show modal

    function showModal (modal) {
        modal.style.display = 'flex'
        setTimeout(() => {
        modal.classList.add('show')
        }, 100)
        modal.setAttribute('aria-hidden', 'false')
        document.body.style.overflow = 'hidden'
        document.body.classList.add('astroui-modal-open')
    }

    
    // Remove modal

    function dismissModal (modal) {
        modal.classList.remove('show')
        setTimeout(() => {
        modal.style.display = 'none'
        }, 200)
        modal.setAttribute('aria-hidden', 'true')
        document.body.style.overflow = ''
        document.body.classList.remove('astroui-modal-open')
    }

    dismissModal(modal)

    //
    // Function on dismissing modal by button close

    const getDismiss = (buttonClose, modal) => {
        buttonClose.addEventListener('click', () => {
        dismissModal(modal)
        })
    }
    
    buttonClose.forEach((buttonClose) => {
        getDismiss(buttonClose, modal)
    })

    
    // Open modal

    trigger.addEventListener('click', () => {
        showModal(modal)
    })

    // Close modal with press escape

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && modal.classList.contains('show')) {
        dismissModal(modal)
        }
        
    })

</script>
  -->
  </body>
  <script src="programs.js"></script>
  <!--<script src="yearsec.js"></script>-->
</html>
