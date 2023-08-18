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

    // Clear the elements in dynamic form and category container
    clearDynamicFormContainer('dynamic-form-container');
    clearDynamicFormContainer('dynamic-category-container');

    if (option === "criterionA") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion A: Research Output Published";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";

      // Research Output Published --------------------------------------------------------------------
        // Sole Authorship --------------------------------------------
        const in_rePub_title = ['input', 'rePub-title-sole', 'Title of Research Ouput', 'text'];
        const sel_rePub_type = [
          'select', 'rePub-type-sole', 'Type of Research Ouput', [
            { value: 'Book', label: 'Book' },
            { value: 'Journal Article', label: 'Journal Article' },
            { value: 'Book Chapter', label: 'Book Chapter' },
            { value: 'Monograph', label: 'Monograph' },
            { value: 'Other Peer-reviewed Scholarly Output', label: 'Other Peer-reviewed Scholarly Output' }
        ]];
        const in_rePub_journal = ['input', 'rePub-journal-sole', 'Name of Journal/Publisher', 'text'];
        const in_rePub_reviewer = ['input','rePub-reviewer-sole', 'Reviewer or its Equivalent', 'text'];
        const in_rePub_intIndex = ['input','rePub-intIndex-sole', 'Intl. Indexing Body', 'text'];
        const in_rePub_datePubl = ['input','rePub-datePubl-sole', 'Date Published', 'date'];

        wrapElements([in_rePub_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([sel_rePub_type, in_rePub_journal], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_rePub_reviewer, in_rePub_intIndex, in_rePub_datePubl], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        
        // Co Authorship ----------------------------------------------
        //Note: not sure if ^ should be repeated
        const in_rePub_contribution = ['input','rePub-contribution-co', 'Percentage (%) Contribution', 'number'];
        wrapElements([in_rePub_contribution], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        

      // Research Output Translated --------------------------------------------------------------------
        // Lead Researcher --------------------------------------------
        const in_reTrans_title = ['input','reTrans-title-sole', 'Title of Research', 'text'];
        const in_reTrans_dateComp = ['input','reTrans-dateComp-sole', 'Date Completed', 'date'];
        const in_reTrans_namePPP = ['input','reTrans-namePPP-sole', 'Name of Project, Policy, or Product', 'text'];
        const in_reTrans_fundSource = ['input','reTrans-fundSource-sole', 'Funding Source', 'text'];
        const in_reTrans_dateIAD = ['input','reTrans-dateIAD-sole', 'Date Implemented, Adopted, or Developed', 'date'];

        wrapElements([in_reTrans_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_reTrans_dateComp], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_reTrans_namePPP, in_reTrans_fundSource], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_reTrans_dateIAD], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');

        // Contributor ------------------------------------------------
        //Note: not sure if ^ should be repeated
        const in_reTrans_contribution = ['reTrans-contribution-co', 'Percentage (%) Contribution', 'number'];
        wrapElements([in_reTrans_contribution], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
      

      // Research Output Cited -------------------------------------------------------------------------
        // Local Authors ----------------------------------------------
        const in_reCited_titleJA = ['input','reCited-titleJA-local', 'Title of Journal Article', 'text'];
        const in_reCited_datePubl = ['input','reCited-datePubl-local', 'Date Published', 'date'];
        const in_reCited_nameJ = ['input','reCited-nameJ-local', 'Name of Journal', 'text'];
        const in_reCited_citeNo = ['input','reCited-citeNo-local', 'No. of Citation', 'text'];
        const in_reCited_citeIndex = ['input','reCited-citeIndex-local', 'Citation Index', 'text'];
        const in_reCited_citeYears = ['input','reCited-citeYears-local', 'Year/s Citation Published', 'text'];

        wrapElements([in_reCited_titleJA], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_reCited_datePubl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_reCited_nameJ], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_reCited_citeNo, in_reCited_citeIndex, in_reCited_citeYears], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'dynamic-form-container');

        // International Authors --------------------------------------
        //Note: not sure if ^ should be repeated (completely same lng) 
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion B: Inventions";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";
      
      // PATENTED -----------------------------------------------------------------------
      // Invention Patents ------------------------------------------
        // Sole Inventor ----------------------------------------------
        const in_invP_name = ['input','invP-name-sole', 'Name of the Invention', 'text'];
        const in_invP_appDate = ['input','invP-appDate-sole', 'Application Date', 'date'];
        const sel_invP_appStage = ['select','invP-appStage-sole', 'Patent Application Stage', [
            { value: 'Accepted', label: 'Accepted' },
            { value: 'Published', label: 'Published' },
            { value: 'Granted', label: 'Granted' }
        ]];
        const in_invP_dateAPG = ['input','invP-dateAPG-sole', 'Date Accepted, Published, or Granted', 'date'];

        wrapElements([in_invP_name, in_invP_appDate], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([sel_invP_appStage, in_invP_dateAPG], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');

        // Multiple Inventors -----------------------------------------
        //Note: not sure if ^ should be repeated
        const in_invP_contribution = ['input','invP-contribution-mult', 'Percentage (%) Contribution', 'number'];
        wrapElements([in_invP_contribution], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');


      // Utility Models and Industrial Designs ----------------------
        // Sole Inventor ----------------------------------------------
        const in_umidP_name = ['input','umidP-name-sole', 'Name of the Invention', 'text'];
        const sel_umidP_type = ['select','umidP-type-sole', 'Type of Patent', [
            { value: 'Utility Model', label: 'Utility Model' },
            { value: 'Industrial Design', label: 'Industrial Design' }
        ]];
        const in_umidP_dateApp = ['input','umidP-dateApp-sole', 'Date of Application', 'date'];
        const in_umidP_dateGrant = ['input','umidP-dateGrant-sole', 'Date Granted', 'date'];

        wrapElements([in_umidP_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([sel_umidP_type], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_umidP_dateApp, in_umidP_dateGrant], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        
        // Multiple Inventors -----------------------------------------
        //Note: not sure if ^ should be repeated
        const in_umidP_contribution = ['input','umidP-contribution-mult', 'Percentage (%) Contribution', 'number'];
        wrapElements([in_umidP_contribution], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');

        
      // Commercialized Patented ------------------------------------
        // Local ----------------------------------------------
        const in_comP_name = ['input','comP-name-local', 'Name of the Patented Product', 'text'];
        const in_comP_type = ['input','comP-type-local', 'Type of Product', 'text'];
        const in_comP_datePat = ['input','comP-datePat-local', 'Date Patented', 'date'];
        const in_comP_dateCom = ['input','comP-dateCom-local', 'Date First Commercialized', 'date'];
        const in_comP_areaCom = ['input','comP-areaCom-local', 'Area/Place Commercialized', 'text'];

        wrapElements([in_comP_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_comP_type], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_comP_datePat, in_comP_dateCom], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_comP_areaCom], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');

        // International --------------------------------------
        //Note: not sure if ^ should be repeated (completely same sa local)



      // NON-PATENTABLE -----------------------------------------------------------------
      // New Software Products --------------------------------------
        // Sole Developer ---------------------------------------------
        const in_newspNP_name = ['input','newspNP-name-sole', 'Name of the Software', 'text'];
        const in_newspNP_dateCop = ['input','newspNP-dateCop-sole', 'Date Copyrighted', 'date'];
        const in_newspNP_dateUtil = ['input','newspNP-dateUtil-sole', 'Date Utilized', 'date'];
        const in_newspNP_endUser = ['input','newspNP-endUser-sole', 'Name of End User/s', 'text'];

        wrapElements([in_newspNP_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_newspNP_dateCop,in_newspNP_dateUtil ], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_newspNP_endUser], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');


        // Multiple Developer -----------------------------------------
        //Note: not sure if ^ should be repeated
        const in_newspNP_contribution = ['input','newspNP-contribution-mult', 'Percentage (%) Contribution', 'number'];
        wrapElements([], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');

      // Updated Software Products ----------------------------------
        // Sole/Co Developer ------------------------------------------
        const in_upspNP_name = ['input','upspNP-name', 'Name of the Software', 'text'];
        const in_upspNP_dateCop = ['input','upspNP-dateCop', 'Date Copyrighted', 'date'];
        const in_upspNP_dateUtil = ['select','upspNP-dateUtil', 'Date Utilized', 'date'];
        const sel_upspNP_contribution = ['upspNP-contribution', 'Contribution', [
            { value: 'Sole Developer', label: 'Sole Developer' },
            { value: 'Co-Developer', label: 'Co-Developer' }
        ]];
        const in_upspNP_newFeat = ['input','upspNP-newFeat', 'specify New Features', 'text'];
        const in_upspNP_endUser = ['input','upspNP-endUser', 'Name of End User/s', 'text'];

        wrapElements([in_upspNP_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_upspNP_dateCop, in_upspNP_dateUtil], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([sel_upspNP_contribution], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_upspNP_newFeat], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_upspNP_endUser], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');


      // New Variety, Breed, Strain ---------------------------------
        // Sole Developer ---------------------------------------------
        const in_vbsNP_name = ['input','vbsNP-name-sole', 'Name of the Plant Variety, Animal Breed, or Microbial Strain', 'text'];
        const in_vbsNP_type = ['input','vbsNP-type-sole', 'Type (Plant, Animal, or Microbe)', 'text'];
        const in_vbsNP_dateComp = ['input','vbsNP-dateComp-sole', 'Date Completed', 'date'];
        const in_vbsNP_dateReg = ['input','vbsNP-dateReg-sole', 'Date Registered', 'date'];
        const in_vbsNP_dateProp = ['input','vbsNP-dateProp-sole', 'Date of Propagation based on Certification', 'date'];
        // Multiple Developer -----------------------------------------
        //Note: not sure if ^ should be repeated
        const in_vbsNP_contribution = ['input','vbsNP-contribution-mult', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_vbsNP_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_vbsNP_type], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_vbsNP_dateComp, in_vbsNP_dateReg], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_vbsNP_dateProp], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');

    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion C: Creative Works";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";

      // Creative Performing Artwork --------------------------------
        const in_cpa_title = ['input','cpa-title', 'Title of Creative Performing Art', 'text'];
        const sel_cpa_type = ['select','cpa-type', 'Type of Performing Art', [
            { value: 'Song/Music', label: 'Song/Music' },
            { value: 'Choreography/Dance', label: 'Choreography/Dance' },
            { value: 'Drama/Theater', label: 'Drama/Theater' },
            { value: 'Others', label: 'Others' }
        ]]; 
        const sel_cpa_class = ['select','cpa-class', 'Classification', [
            { value: 'New Creation', label: 'New Creation' },
            { value: 'Own Work', label: 'Own Work' },
            { value: 'Work of Others', label: 'Work of Others' }
        ]];
        const in_cpa_dateCop = ['input','cpa-dateCop', 'Date Copyrighted/Date Performed', 'date'];
        const in_cpa_venue = ['input','cpa-venue', 'Venue of Performance', 'text'];
        const in_cpa_org = ['input','cpa-org', 'Organizer of the Event (or Publisher)', 'text'];

        wrapElements([in_cpa_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([sel_cpa_type, sel_cpa_class], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_cpa_dateCop], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_cpa_venue, in_cpa_org], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');


      // Exhibition -------------------------------------------------
        const in_exh_title = ['input','exh-title', 'Title of Creative Work', 'text'];
        const sel_exh_type = ['select','exh-type', 'Type of Creative Work', [
            { value: 'Painting/Drawing', label: 'Painting/Drawing' },
            { value: 'Film/Short Film', label: 'Film/Short Film' },
            { value: 'Architectural Design', label: 'Architectural Design' },
            { value: 'Multimedia', label: 'Multimedia' },
            { value: 'Photography', label: 'Photography' },
            { value: 'Sculpture', label: 'Sculpture' },
            { value: 'Others', label: 'Others' }
        ]];
        const sel_exh_class = ['select','exh-class', 'Classification', [
            { value: 'Visual Arts', label: 'Visual Arts' },
            { value: 'Architecture', label: 'Architecture' },
            { value: 'Film', label: 'Film' },
            { value: 'Multimedia', label: 'Multimedia' }
        ]];
        const in_exh_dateExh = ['input','exh-dateExh', 'Exhibition Date', 'date'];
        const in_exh_venue = ['input','exh-venue', 'Venue of Exhibit', 'text'];
        const in_exh_org = ['input','exh-org', 'Organizer of the Event', 'text'];

        wrapElements([in_exh_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([sel_exh_type, sel_exh_class], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_exh_dateExh], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_exh_venue, in_exh_org], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');


      // Juried or Peer-reviewed Designs ----------------------------
        const in_des_title = ['input','des-title', 'Title of Design', 'text'];
        const sel_des_class = ['select','des-class', 'Classification', [
            { value: 'Architecture', label: 'Architecture' },
            { value: 'Engineering', label: 'Engineering' },
            { value: 'Industrial Design', label: 'Industrial Design' }
        ]];
        const in_des_reviewer = ['input','des-reviewer', 'Reviewer, Evaluator or Its Equivalent', 'text'];
        const in_des_dateAct = ['input','des-dateAct', 'Activity/Exhibition Date', 'date'];
        const in_des_venue = ['input','des-venue', 'Venue of Activity/Exhibit', 'text'];
        const in_des_org = ['input','des-org', 'Organizer', 'text'];

        wrapElements([in_des_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([sel_des_class, in_des_reviewer], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_des_dateAct], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_des_venue, in_des_org], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');


      // Literary Publications --------------------------------------
        const in_lit_title = ['input','lit-title', 'Title of Literary Publications', 'text'];
        const sel_lit_type = ['select','lit-type', 'Type of Literary Publications', [
            { value: 'Novel', label: 'Novel' },
            { value: 'Short Story', label: 'Short Story' },
            { value: 'Essay', label: 'Essay' },
            { value: 'Poetry', label: 'Poetry' },
            { value: 'Others', label: 'Others' }
        ]];
        const in_lit_reviewer = ['input','lit-reviewer', 'Reviewer, Evaluator or Its Equivalent', 'text'];
        const in_lit_namePubli = ['input','lit-namePubli', 'Name of Publication', 'text'];
        const in_lit_namePress = ['input','lit-namePress', 'Name of Publisher/Press', 'text'];
        const in_lit_datePubl = ['input','lit-datePubl', 'Organizer', 'date']; 

        wrapElements([in_lit_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([sel_lit_type, in_lit_reviewer], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_lit_namePubli, in_lit_namePress], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'dynamic-form-container');
        wrapElements([in_lit_datePubl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container');
    } 
}
</script>
<!------------------------------------------------------------------------------------------------------->
<body class="bg-ghostwhite">
    <ul> <!-- for links from accomplishments tab -->
        <li><a href="#" onclick="showAddForm('criterionA')">Show Page 1</a></li>
        <li><a href="#" onclick="showAddForm('criterionB')">Show Page 2</a></li>
        <li><a href="#" onclick="showAddForm('criterionC')">Show Page 3</a></li>
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
                <p id="add_page_kra" class="font-bold text-lg">KRA I - INSTRUCTION</p>
                <p class="my-1">Please fill in the necessary details. No abbreviations.</p>
                <p class="my-1">All inputs with the symbol (*) are required.</p>

                <div id="dynamic-category-container" class="mt-6">
                  <!-- CONTENT CHANGES HERE -->
                </div>
              </div>
          
              <div class="lg:col-span-2">
              <!-- START DYNAMIC FORM -->
              <form>
                    <div id="dynamic-form-container">
                        <!-- CONTENT CHANGES HERE -->
                    </div>
                  

                <!-- must always be present in all pages -->
                <!-- box design for upload document -->
                <div class="flex flex-wrap -mx-3 mb-6"> 
                  <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="grid-state">
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



