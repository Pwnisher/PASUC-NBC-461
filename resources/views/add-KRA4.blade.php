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

    if (option === "criterionA") {
        addPageTitle.innerHTML = "Criterion A: Involvement in Professional Organizations";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";
        //since walang choice sa ISS ung criteria A, always show part1
        /*// Event Listener
        const kra4_cA = document.getElementById('sel_kra4_cA');
        kra4_cA.addEventListener('change', function() {
        var categ_kra4_cA = kra4_cA.value;

            // Hide all parts initially    // Show Part Container
            part1.style.display = 'none';  if (categ_kra4_cA === 'part1') part1.style.display = 'block';
        });*/

        
      // Individual Membership -------------------------------------
      const in_indMem_nameOrg = ['input','indMem_nameOrg', 'Name of Organization', 'text'];
        const in_indMem_typeOrg = ['input','indMem_typeOrg', 'Type of Organization', 'text'];
        const in_indMem_actOrg = ['input','indMem_actOrg', 'Activity of the Organization Participated by the Faculty', 'text'];
        const sel_indMem_role = ['select','indMem_role', 'Role or Contribution to the activity of the Organization', [
            { value: 'BOARD MEMBER', label: 'BOARD MEMBER' },
            { value: 'OFFICER', label: 'OFFICER' },
            { value: 'LEAD ORGANIZER', label: 'LEAD ORGANIZER' },
            { value: 'CO-ORGANIZER', label: 'CO-ORGANIZER' },
            { value: 'COMMITTEE CHAIR', label: 'COMMITTEE CHAIR' },
            { value: 'COMMITTEE MEMBER', label: 'COMMITTEE MEMBER' },
            { value: 'MODERATOR', label: 'MODERATOR' },
            { value: 'FACILITATOR', label: 'FACILITATOR' }
        ]]; 
        const in_indMem_dateAct = ['input','indMem_dateAct', 'Date of Activity', 'date'];

        // Note: need id in label

        wrapElements([in_indMem_nameOrg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_indMem_typeOrg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_indMem_actOrg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_indMem_role], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_indMem_dateAct], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('indMem_SD1', 'Copy of Certification of Engagement, Role, Assignment from the Head of the Organization', 'form-container1');
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion B: Continuing Development";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";

        // KRA 4 : Criterion B Categories
        const sel_kra4_cB = ['select','sel_kra4_cB', 'Type of Continuing Development:', [
            { value: 'part1', label: 'Educational Qualification - Doctorate Degree (First Time)' },
            { value: 'part2', label: 'Educational Qualification - Additional Degree' },
            { value: 'part3', label: 'Participation in Conferences, Seminars, Workshops, Industry Immersion' },
            { value: 'part4', label: 'Paper Presentation in Conferences' }
        ]]; 
        wrapElements([sel_kra4_cB], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');

        // Event Listener
        const kra4_cB = document.getElementById('sel_kra4_cB');
        kra4_cB.addEventListener('change', function() {
        var categ_kra4_cB = kra4_cB.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none';
            part3.style.display = 'none'; part4.style.display = 'none';

            // Show the selected part
            if (categ_kra4_cB === 'part1') part1.style.display = 'block';
            else if (categ_kra4_cB === 'part2') part2.style.display = 'block';
            else if (categ_kra4_cB === 'part3') part3.style.display = 'block';
            else if (categ_kra4_cB === 'part4') part4.style.display = 'block';
        });


      // Educational Qualification -------------------------------------
        // Doctorate Degree --------------------------------------------
        const in_eq_dd_nameDegree = ['input','eq_dd_nameDegree', 'Complete Name of the Doctorate Degree', 'text'];
        const in_eq_dd_nameInst = ['input','eq_dd_nameInst', 'Name of the Institution Where the Degree was Earned', 'text'];
        const in_eq_dd_dateComp = ['input','eq_dd_dateComp', 'Date Completed', 'date'];
        const sel_eq_dd_isQualified = ['select','eq_dd_isQualified', 'Is the Faculty Qualified for the Automatic 1 Sub-Rank Increase?', [
            { value: 'YES', label: 'YES' },
            { value: 'NO', label: 'NO' },
        ]];

        wrapElements([in_eq_dd_nameDegree], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_eq_dd_nameInst], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_eq_dd_dateComp], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_eq_dd_isQualified], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('eq_dd_SD1', 'Copy of Transcript of Records, Diploma or Certificate', 'form-container1');     

        // Additional Degree ----------------------------------------------        
        const sel_eq_ad_degree = ['select','eq_ad_degree', 'Degree', [
            { value: 'ADDITIONAL DOCTORATE DEGREE', label: 'ADDITIONAL DOCTORATE DEGREE' },
            { value: 'ADDITIONAL MASTER DEGREE', label: 'ADDITIONAL MASTER DEGREE' },
            { value: 'POST-DOCTORATE DIPLOMA/CERTIFICATE', label: 'POST-DOCTORATE DIPLOMA/CERTIFICATE' },
            { value: 'POST-MASTERS DIPLOMA/CERTIFICATE', label: 'POST-MASTERS DIPLOMA/CERTIFICATE' },
        ]];
        const in_eq_ad_degreeName = ['input','eq_ad_degreeName', 'Degree Name', 'text'];
        const in_eq_ad_nameHEI = ['input','eq_ad_nameHEI', 'Name of HEI', 'text'];
        const in_eq_ad_dateComp = ['input','eq_ad_dateComp', 'Date Completed', 'date'];        
        
        wrapElements([sel_eq_ad_degree, in_eq_ad_degreeName], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_eq_ad_nameHEI], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_eq_ad_dateComp], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');


        // Participation in Conferences, Seminars, Workshops, Industry Immersion ----------------------------------------------
        const in_partconf_nameConf = ['input','partconf_nameConf', 'Name of Conference/Training', 'text'];
        const sel_partconf_scope = ['select','partconf_scope', 'Scope', [
              { value: 'LOCAL', label: 'LOCAL' },
              { value: 'INTERNATIONAL', label: 'INTERNATIONAL' },
        ]];
        const in_partconf_orgnzr = ['input','partconf_orgnzr', 'Organizer', 'text']; //di ko knows if organizer lang or organizer name
        const in_partconf_dateAct = ['input','partconf_dateAct', 'Date of Activity', 'date'];

        wrapElements([in_partconf_nameConf], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([sel_partconf_scope, in_partconf_orgnzr], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_partconf_dateAct], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');

        // Paper Presentation in Conferences ----------------------------------------------
        const in_presconf_titlePaper = ['input','presconf_titlePaper', 'Title of Paper', 'text'];
        const sel_presconf_scope = ['select','presconf_scope', 'Local or International', [
              { value: 'LOCAL', label: 'LOCAL' },
              { value: 'INTERNATIONAL', label: 'INTERNATIONAL' },
        ]];
        const in_presconf_titleConf = ['input','presconf_titleConf', 'Title of Conference', 'text'];
        const in_presconf_orgnzr = ['input','presconf_orgnzr', 'Conference Organizer', 'text'];
        const in_presconf_datePres = ['input','presconf_datePres', 'Date Presented', 'date'];

        wrapElements([in_presconf_titlePaper], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([sel_presconf_scope, in_presconf_titleConf], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_presconf_orgnzr], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_presconf_datePres], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');

        createDynamicLabel('Supporting Documents', 'form-container4');
        createDynamicCheckbox('presconf_SD1', 'Copy of Letter/Certificate of Acceptance', 'form-container4');
    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion C: Awards and Recognition";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";
        //since walang choice sa ISS ung criteria A, always show part1
        // Event Listener
        const kra4_cC = document.getElementById('sel_kra4_cC');
        kra4_cC.addEventListener('change', function() {
        var categ_kra4_cC = kra4_cC.value;

            // Hide all parts initially    // Show Part Container
            part1.style.display = 'none';  if (categ_kra4_cC === 'part1') part1.style.display = 'block';
        });
        
        const in_award_nameAward = ['input','award_nameAward', 'Name of the Award', 'text'];
        const sel_award_scope = ['select','award_scope', 'Scope of the Award', [
              { value: 'INSTITUTIONAL', label: 'INSTITUTIONAL' },
              { value: 'LOCAL', label: 'LOCAL' },
              { value: 'REGIONAL', label: 'REGIONAL' },
        ]];
        const in_award_agBody = ['input','award_agBody', 'Award-Giving Body/Organization', 'text'];
        const in_award_dateAward = ['input','award_dateAward', 'Date the Award was Given', 'date'];
        const in_award_venueAward = ['input','award_venueAward', 'Venue of the Award Ceremony', 'text'];

        wrapElements([in_award_nameAward], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');   
        wrapElements([sel_award_scope, in_award_agBody], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');   
        wrapElements([in_award_dateAward], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');   
        wrapElements([in_award_venueAward], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');   

        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('award_SD1', 'Copy of the picture of plaque, trophy, medal, or other similar items', 'form-container1');
    }
    else if (option === "criterionD") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion D: Bonus Indicators for Newly Appointed Faculty";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";

        // KRA 4 : Criterion D Categories
        const sel_kra4_cD = ['select','sel_kra4_cD', 'Type of Appointment/Designation: ', [
            { value: 'part1', label: 'Every Year of Full-Time Academic Service in an Institution of Higher Learning' },
            { value: 'part2', label: 'Every Year of Industry Experience' }
        ]]; 
        wrapElements([sel_kra4_cD], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');

        // Event Listener
        const kra4_cD = document.getElementById('sel_kra4_cD');
        kra4_cD.addEventListener('change', function() {
        var categ_kra4_cD = kra4_cD.value;

            // Hide all parts initially
            part1.style.display = 'none';
            part2.style.display = 'none';            

            // Show the selected part
            if (categ_kra4_cD === 'part1') part1.style.display = 'block';
            else if (categ_kra4_cD === 'part2') part2.style.display = 'block';            
        });

        // Every Year of Full-Time Academic Service in an Institution of Higher Learning ---------------------------------------------
        const sel_yracad_pos = ['select','yracad_pos', 'Designation/Position', [
            { value: 'PRESIDENT', label: 'PRESIDENT' },
            { value: 'VICE PRESIDENT, DEAN OR DIRECTOR', label: 'VICE PRESIDENT, DEAN OR DIRECTOR' },  
            { value: 'DEPARTMENT/PROGRAM HEAD', label: 'DEPARTMENT/PROGRAM HEAD' },  
            { value: 'FACULTY MEMBER', label: 'FACULTY MEMBER' },
        ]];
        const in_yracad_nameHEI = ['input','yracad_nameHEI', 'Name of HEI', 'text'];
        const in_yracad_numYrs = ['input','yracad_numYrs', 'Number of Years', 'number'];
        const in_yracad_start = ['input','yracad_start', 'Start', 'date'];
        const in_yracad_end = ['input','yracad_end', 'End', 'date'];

        wrapElements([sel_yracad_pos], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_yracad_nameHEI, in_yracad_numYrs], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('Period Covered', 'form-container1');
        wrapElements([in_yracad_start, in_yracad_end], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('yracad_SD1', 'Copy of Service Record, Certificate of Employment, Notice of Appointment/Designation or similar documents', 'form-container1');

        // Every Year of Industry Experience (Non-Academic Organization) ---------------------------------------------
        const in_yrindus_nameOrg = ['input','yrindus_nameOrg', 'Name of Company/Organization', 'text'];
        const sel_yrindus_pos = ['select','yrindus_pos', 'Designation/Position', [
            { value: 'MANAGERIAL/SUPERVISORY', label: 'MANAGERIAL/SUPERVISORY' },
            { value: 'TECHNICAL/SKILLED', label: 'TECHNICAL/SKILLED' },  
            { value: 'SUPPORT/ADMINISTRATIVE', label: 'SUPPORT/ADMINISTRATIVE' },
        ]];        
        const in_yrindus_numYrs = ['input','yrindus_numYrs', 'Number of Years', 'number'];
        const in_yrindus_start = ['input','yrindus_start', 'Start', 'date'];
        const in_yrindus_end = ['input','yrindus_end', 'End', 'date'];

        wrapElements([in_yrindus_nameOrg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([sel_yrindus_pos, in_yrindus_numYrs], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
          createDynamicLabel('Period Covered', 'form-container2');
        wrapElements([in_yrindus_start, in_yrindus_end], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('Supporting Documents', 'form-container2');
        createDynamicCheckbox('yrindus_SD1', 'Copy of Service Record, Certificate of Employment, Notice of Appointment/Designation or similar documents', 'form-container2');
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
                  <br>

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