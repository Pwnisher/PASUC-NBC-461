<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Accomplishments</title>

        @vite('resources/css/app.css')
        <script src="{{ asset('js/addDocs.js') }}"></script>
    </head>
<script>

// CHANGE CONTENT PER CRITERIA OPTION
function showAddForm(option) {
    var addPageTitle = document.getElementById("add_page_title");
    var addPageKRA = document.getElementById("add_page_kra");
    var part1 = document.getElementById('form-container1');
    var part2 = document.getElementById('form-container2');
    var part3 = document.getElementById('form-container3');
    var part4 = document.getElementById('form-container4');

    // Clear the elements in dynamic form and category container
    clearFormContainer('form-container1'); clearFormContainer('form-container2');
    clearFormContainer('form-container3'); clearFormContainer('form-container4');
    clearFormContainer('category-container');

    if (option === "criterionA") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion A: Involvement in Professional Organizations";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";
        //since walang choice sa ISS ung criteria A, always show part1
        part1.style.display = 'block'
        
      // Student Evaluation -------------------------------------
        const in_stdEval_semDed = ['input','stdEval-semDed', 'Name of Organization', 'text'];
        const in_stdEval_semDed2 = ['input','stdEval-semDed2', 'Type of Organization', 'text'];
        const in_stdEval_semDed3 = ['input','stdEval-semDed3', 'Activity of the Organization Participated by the Faculty', 'text'];
        const sel_stdEval_reason = ['select','stdEval-reason', 'Role or Contribution to the Activity', [
            { value: 'BOARD MEMBER', label: 'BOARD MEMBER' },
            { value: 'OFFICER', label: 'OFFICER' },
            { value: 'LEAD ORGANIZER', label: 'LEAD ORGANIZER' },
            { value: 'CO-ORGANIZER', label: 'CO-ORGANIZER' },
            { value: 'COMMITTEE CHAIR', label: 'COMMITTEE CHAIR' },
            { value: 'COMMITTEE MEMBER', label: 'COMMITTEE MEMBER' },
            { value: 'MODERATOR', label: 'MODERATOR' },
            { value: 'FACILITATOR', label: 'FACILITATOR' }
        ]]; 
        const in_stdEval_semDed4 = ['input','stdEval_semDed4', 'Date of Activity', 'date'];

        wrapElements([in_stdEval_semDed], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_stdEval_semDed2], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_stdEval_semDed3], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_stdEval_reason, in_stdEval_semDed4], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');

        //createDynamicCheckbox('stdEval-SD1', 'Student Evaluation Rating using prescribed template');
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion B: Continuing Development";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";

        // KRA 4 : Criterion B Categories
        const sel_kra1_cB = ['select','sel_kra1_cB', 'Type of Continuing Development:', [
            { value: 'part1', label: 'Educational Qualification - Doctorate Degree (First Time)' },
            { value: 'part2', label: 'Educational Qualification - Additional Degree' },
            { value: 'part3', label: 'Participation in Conferences, Seminars, Workshops, Industry Immersion' },
            { value: 'part4', label: 'Paper Presentation in Conferences' }
        ]]; 
        wrapElements([sel_kra1_cB], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');

        // Event Listener
        const kra1_cB = document.getElementById('sel_kra1_cB');
        kra1_cB.addEventListener('change', function() {
        var categ_kra1_cB = kra1_cB.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none';
            part3.style.display = 'none'; part4.style.display = 'none';

            // Show the selected part
            if (categ_kra1_cB === 'part1') part1.style.display = 'block';
            else if (categ_kra1_cB === 'part2') part2.style.display = 'block';
            else if (categ_kra1_cB === 'part3') part3.style.display = 'block';
            else if (categ_kra1_cB === 'part4') part4.style.display = 'block';
        });


      // Educational Qualification -------------------------------------
        // Doctorate Degree --------------------------------------------
        const in_im_title_sole = ['input','im-title-sole', 'Complete Name of the Doctorate Degree', 'text'];
        const in_im_title_sole2 = ['input','im-title-sole2', 'Name of the Institution Where the Degree was Earned', 'text'];
        const in_im_title_sole3 = ['input','in_im_title_sole3', 'Date Completed', 'date'];
        const sel_im_type_sole = ['select','im-type-sole', 'Is the Faculty Qualified for the Automatic 1 Sub-Rank Increase?', [
            { value: 'YES', label: 'YES' },
            { value: 'NO', label: 'NO' },
        ]];

        wrapElements([in_im_title_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_im_title_sole2], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_im_title_sole3], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_im_type_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');        

        // Additional Degree ----------------------------------------------        
        const sel_im_type_co = ['select','im-type-co', 'Degree', [
            { value: 'ADDITIONAL DOCTORATE DEGREE', label: 'ADDITIONAL DOCTORATE DEGREE' },
            { value: 'ADDITIONAL MASTER DEGREE', label: 'ADDITIONAL MASTER DEGREE' },
            { value: 'POST-DOCTORATE DIPLOMA/CERTIFICATE', label: 'POST-DOCTORATE DIPLOMA/CERTIFICATE' },
            { value: 'POST-MASTERS DIPLOMA/CERTIFICATE', label: 'POST-MASTERS DIPLOMA/CERTIFICATE' },
        ]];
        const in_im_reviewer_co = ['input','im-reviewer-co', 'Degree Name', 'text'];
        const in_im_reviewer_co2 = ['input','im-reviewer-co', 'Name of HEI', 'text'];
        const in_im_reviewer_co3 = ['input','im-reviewer-co', 'Date Completed', 'date'];        
        
        wrapElements([sel_im_type_co, in_im_reviewer_co], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_im_reviewer_co2], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_im_reviewer_co3], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');


        // Participation in Conferences, Seminars, Workshops, Industry Immersion ----------------------------------------------
        const in_ap_name = ['input','ap-name', 'Name of Conference/Training', 'text'];
        const sel_ap_type = ['select','ap-type', 'Scope', [
              { value: 'LOCAL', label: 'LOCAL' },
              { value: 'INTERNATIONAL', label: 'INTERNATIONAL' },
        ]];
        const in_ap_name2 = ['input','ap-name2', 'Organizer', 'text']; //di ko knows if organizer lang or organizer name
        const in_ap_name3 = ['input','ap-name3', 'Date of Activity', 'date'];

        wrapElements([in_ap_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([sel_ap_type, in_ap_name2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_ap_name3], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');

        // Paper Presentation in Conferences ----------------------------------------------
        const in_conf_name = ['input','conf-name', 'Title of Paper', 'text'];
        const sel_conf_type = ['select','conf-type', 'Local or International', [
              { value: 'LOCAL', label: 'LOCAL' },
              { value: 'INTERNATIONAL', label: 'INTERNATIONAL' },
        ]];
        const in_conf_name2 = ['input','conf-name2', 'Title of Conference', 'text'];
        const in_conf_name3 = ['input','conf-name2', 'Conference Organizer', 'text'];
        const in_conf_name4 = ['input','conf-name3', 'Date Presented', 'date'];

        wrapElements([in_conf_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([sel_conf_type, in_conf_name2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_conf_name3], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_conf_name4], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion C: Awards and Recognition";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";
        //since walang choice sa ISS ung criteria A, always show part1
        part1.style.display = 'block'
        
        const in_award_recog = ['input','award_recog', 'Name of the Award', 'text'];
        const sel_award_recog = ['select','award_recog', 'Scope of the Award', [
              { value: 'INSTITUTIONAL', label: 'INSTITUTIONAL' },
              { value: 'LOCAL', label: 'LOCAL' },
              { value: 'REGIONAL', label: 'REGIONAL' },
        ]];
        const in_award_recog2 = ['input','award_recog2', 'Award-Giving Body/Organization', 'text'];
        const in_award_recog3 = ['input','award_recog3', 'Date the Award was Given', 'date'];
        const in_award_recog4 = ['input','award_recog4', 'Venue of the Award Ceremony', 'text'];

        wrapElements([in_award_recog], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');   
        wrapElements([sel_award_recog, in_award_recog2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');   
        wrapElements([in_award_recog3], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');   
        wrapElements([in_award_recog4], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');   
    }
    else if (option === "criterionD") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion D: Bonus Indicators for Newly Appointed Faculty";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";

        // KRA 4 : Criterion C Categories
        const sel_kra1_cC = ['select','sel_kra1_cC', 'Type of Appointment/Designation: ', [
            { value: 'part1', label: 'Every Year of Full-Time Academic Service in an Institution of Higher Learning' },
            { value: 'part2', label: 'Every Year of Industry Experience' }
        ]]; 
        wrapElements([sel_kra1_cC], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');

        // Event Listener
        const kra1_cC = document.getElementById('sel_kra1_cC');
        kra1_cC.addEventListener('change', function() {
        var categ_kra1_cC = kra1_cC.value;

            // Hide all parts initially
            part1.style.display = 'none';
            part2.style.display = 'none';            

            // Show the selected part
            if (categ_kra1_cC === 'part1') part1.style.display = 'block';
            else if (categ_kra1_cC === 'part2') part2.style.display = 'block';            
        });

        // Every Year of Full-Time Academic Service in an Institution of Higher Learning ---------------------------------------------
        const sel_year_acad = ['select','year_acad', 'Designation/Position', [
            { value: 'PRESIDENT', label: 'PRESIDENT' },
            { value: 'VICE PRESIDENT, DEAN OR DIRECTOR', label: 'VICE PRESIDENT, DEAN OR DIRECTOR' },  
            { value: 'DEPARTMENT/PROGRAM HEAD', label: 'DEPARTMENT/PROGRAM HEAD' },  
            { value: 'FACULTY MEMBER', label: 'FACULTY MEMBER' },
        ]];
        const in_year_acad = ['input','year_acad', 'Name of HEI', 'text'];
        const in_year_acad2 = ['input','year_acad2', 'Number of Years', 'number'];
        const in_year_acad3 = ['input','year_acad3', 'Start', 'date'];
        const in_year_acad4 = ['input','year_acad4', 'End', 'date'];

        wrapElements([sel_year_acad], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_year_acad, in_year_acad2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('Period Covered', 'form-container1');
        wrapElements([in_year_acad3, in_year_acad4], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');

        // Every Year of Industry Experience (Non-Academic Organization) ---------------------------------------------
        const in_year_indus = ['input','year_indus', 'Name of Company/Organization', 'text'];
        const sel_year_indus = ['select','year_indus', 'Designation/Position', [
            { value: 'MANAGERIAL/SUPERVISORY', label: 'MANAGERIAL/SUPERVISORY' },
            { value: 'TECHNICAL/SKILLED', label: 'TECHNICAL/SKILLED' },  
            { value: 'SUPPORT/ADMINISTRATIVE', label: 'SUPPORT/ADMINISTRATIVE' },
        ]];        
        const in_year_indus2 = ['input','year_indus', 'Number of Years', 'number'];
        const in_year_indus3 = ['input','year_indus', 'Start', 'date'];
        const in_year_indus4 = ['input','year_indus', 'End', 'date'];

        wrapElements([in_year_indus], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([sel_year_indus, in_year_indus2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
          createDynamicLabel('Period Covered', 'form-container2');
        wrapElements([in_year_indus3, in_year_indus4], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
    }
}
</script>
<!------------------------------------------------------------------------------------------------------->
<body class="bg-ghostwhite">
    <ul> <!-- for links from accomplishments tab -->
        <li><a href="#" onclick="showAddForm('criterionA')">Show Page 1</a></li>
        <li><a href="#" onclick="showAddForm('criterionB')">Show Page 2</a></li>
        <li><a href="#" onclick="showAddForm('criterionC')">Show Page 3</a></li>
        <li><a href="#" onclick="showAddForm('criterionD')">Show Page 4</a></li>
    </ul>
        
<!-- DYNAMIC PAGE CONTENT -->
    <div id="main_container" class="flex flex-col items-center h-full mt-16">
      <div id="title_bar-container" class="bg-transparent text-left w-5/6">
        <h3 id="add_page_title" class="mb-2 font-bold text-xl font-sans">Criterion</h3>
      </div>
            
        <div id="add_form_container" class="bg-white rounded-md p-4 shadow-lg w-5/6 border border-gray-300 relative mb-16">
          <div class="flex flex-col items-stretch space-y-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3"> <!-- form content -->
              <div class="text-gray-600">
                <p id="add_page_kra" class="font-bold text-lg">Key Result Area (KRA)</p>
                <p class="my-1">Please fill in the necessary details. No abbreviations.</p>
                <p class="my-1">All inputs with the symbol (*) are required.</p>
                
                  <div id="category-container" class="mt-6"> <!-- CONTENT CHANGES HERE --> </div>
              </div>
          
              <div class="lg:col-span-2">
              <!-- START DYNAMIC FORM -->
              <form>
                  <div id="form-container1" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                  <div id="form-container2" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                  <div id="form-container3" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                  <div id="form-container4" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>

                <!-- must always be present in all pages -->
                <!-- box design for upload document -->
                <div class="flex flex-wrap -mx-3 mb-6"> 
                  <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="file">
                      Upload Documents
                    </label>
                    <input type="file" name="file" id="file" class="sr-only" />
                      <label for="file" class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-gray-300 p-12 text-center">
                        <div>
                          <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                            Drag & Drop Files Here
                          </span>
                          <span class="mb-2 block text-base font-medium text-[#6B7280]">
                            or
                          </span>
                          <span class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                            Browse
                          </span>
                        </div>
                      </label>
                  </div>
                </div>

                <!-- SAVE?CANCEL BUTTON -->
                <div class="md:col-span-5 text-right">
                  <div class="inline-flex items-end">
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold ml-3 py-2 px-4 rounded">Submit</button>
                    </div>
                </div>
                <!-- END DYNAMIC FORM -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END DYNAMIC PAGE CONTENT -->
    </body>
</html>