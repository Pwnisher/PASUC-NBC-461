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

    // Clear the dynamic-form-container
    clearDynamicFormContainer();

    if (option === "criterionA") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion A: Research Output Published";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";

      // Research Output Published --------------------------------------------------------------------
        // Sole Authorship --------------------------------------------
        createDynamicInput('rePub-title-sole', 'Title of Research Ouput', 'text');
        createDynamicSelect('rePub-type-sole', 'Type of Research Ouput', [
            { value: 'Book', label: 'Book' },
            { value: 'Journal Article', label: 'Journal Article' },
            { value: 'Book Chapter', label: 'Book Chapter' },
            { value: 'Monograph', label: 'Monograph' },
            { value: 'Other Peer-reviewed Scholarly Output', label: 'Other Peer-reviewed Scholarly Output' }
        ]);
        createDynamicInput('rePub-journal-sole', 'Name of Journal/Publisher', 'text');
        createDynamicInput('rePub-reviewer-sole', 'Reviewer or its Equivalent', 'text');
        createDynamicInput('rePub-intIndex-sole', 'International Indexing Body', 'text');
        createDynamicInput('rePub-datePubl-sole', 'Date Published', 'date');
        
        // Co Authorship ----------------------------------------------
        //Note: not sure if ^ should be repeated
        createDynamicInput('rePub-contribution-co', 'Percentage (%) Contribution', 'number');
      
      // Research Output Translated --------------------------------------------------------------------
        // Lead Researcher --------------------------------------------
        createDynamicInput('reTrans-title-sole', 'Title of Research', 'text');
        createDynamicInput('reTrans-dateComp-sole', 'Date Completed', 'date');
        createDynamicInput('reTrans-namePPP-sole', 'Name of Project, Policy, or Product', 'text');
        createDynamicInput('reTrans-fundSource-sole', 'Funding Source', 'text');
        createDynamicInput('reTrans-dateIAD-sole', 'Date Implemented, Adopted, or Developed', 'date');

        // Contributor ------------------------------------------------
        //Note: not sure if ^ should be repeated
        createDynamicInput('reTrans-contribution-co', 'Percentage (%) Contribution', 'number');

      // Research Output Cited -------------------------------------------------------------------------
        // Local Authors ----------------------------------------------
        createDynamicInput('reCited-titleJA-local', 'Title of Journal Article', 'text');
        createDynamicInput('reCited-datePubl-local', 'Date Published', 'date');
        createDynamicInput('reCited-nameJ-local', 'Name of Journal', 'text');
        createDynamicInput('reCited-citeNo-local', 'No. of Citation', 'text');
        createDynamicInput('reCited-citeIndex-local', 'Citation Index', 'text');
        createDynamicInput('reCited-citeYears-local', 'Year/s Citation Published', 'text');

        // International Authors --------------------------------------
        //Note: not sure if ^ should be repeated (completely same lng)
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion B: Inventions";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";
      
      // PATENTED -----------------------------------------------------------------------
      // Invention Patents ------------------------------------------
        // Sole Inventor ----------------------------------------------
        createDynamicInput('invP-name-sole', 'Name of the Invention', 'text');
        createDynamicInput('invP-appDate-sole', 'Application Date', 'date');
        createDynamicSelect('invP-appStage-sole', 'Patent Application Stage', [
            { value: 'Accepted', label: 'Accepted' },
            { value: 'Published', label: 'Published' },
            { value: 'Granted', label: 'Granted' }
        ]);
        createDynamicInput('invP-dateAPG-sole', 'Date Accepted, Published, or Granted', 'date');

        // Multiple Inventors -----------------------------------------
        //Note: not sure if ^ should be repeated
        createDynamicInput('invP-contribution-mult', 'Percentage (%) Contribution', 'number');


      // Utility Models and Industrial Designs ----------------------
        // Sole Inventor ----------------------------------------------
        createDynamicInput('umidP-name-sole', 'Name of the Invention', 'text');
        createDynamicSelect('umidP-type-sole', 'Type of Patent', [
            { value: 'Utility Model', label: 'Utility Model' },
            { value: 'Industrial Design', label: 'Industrial Design' }
        ]);
        createDynamicInput('umidP-dateApp-sole', 'Date of Application', 'date');
        createDynamicInput('umidP-dateGrant-sole', 'Date Granted', 'date');
        
        // Multiple Inventors -----------------------------------------
        //Note: not sure if ^ should be repeated
        createDynamicInput('umidP-contribution-mult', 'Percentage (%) Contribution', 'number');


      // Commercialized Patented ------------------------------------
        // Local ----------------------------------------------
        createDynamicInput('comP-name-local', 'Name of the Patented Product', 'text');
        createDynamicInput('comP-type-local', 'Type of Product', 'text');
        createDynamicInput('comP-datePat-local', 'Date Patented', 'date');
        createDynamicInput('comP-dateCom-local', 'Date Product was First Commercialized', 'date');
        createDynamicInput('comP-areaCom-local', 'Area/Place Commercialized', 'text');

        // International --------------------------------------
        //Note: not sure if ^ should be repeated (completely same sa local)


      // NON-PATENTABLE -----------------------------------------------------------------
      // New Software Products --------------------------------------
        // Sole Developer ---------------------------------------------
        createDynamicInput('newspNP-name-sole', 'Name of the Software', 'text');
        createDynamicInput('newspNP-dateCop-sole', 'Date Copyrighted', 'date');
        createDynamicInput('newspNP-dateUtil-sole', 'Date Utilized', 'date');
        createDynamicInput('newspNP-endUser-sole', 'Name of End User/s', 'text');
        // Multiple Developer -----------------------------------------
        //Note: not sure if ^ should be repeated
        createDynamicInput('newspNP-contribution-mult', 'Percentage (%) Contribution', 'number');

      // Updated Software Products ----------------------------------
        // Sole/Co Developer ------------------------------------------
        createDynamicInput('upspNP-name', 'Name of the Software', 'text');
        createDynamicInput('upspNP-dateCop', 'Date Copyrighted', 'date');
        createDynamicInput('upspNP-dateUtil', 'Date Utilized', 'date');
        createDynamicSelect('upspNP-contribution', 'Contribution', [
            { value: 'Sole Developer', label: 'Sole Developer' },
            { value: 'Co-Developer', label: 'Co-Developer' }
        ]);
        createDynamicInput('upspNP-newFeat', 'specify New Features', 'text');
        createDynamicInput('upspNP-endUser', 'Name of End User/s', 'text');

      // New Variety, Breed, Strain ---------------------------------
        // Sole Developer ---------------------------------------------
        createDynamicInput('vbsNP-name-sole', 'Name of the Plant Variety, Animal Breed, or Microbial Strain', 'text');
        createDynamicInput('vbsNP-type-sole', 'Type (Plant, Animal, or Microbe)', 'text');
        createDynamicInput('vbsNP-dateComp-sole', 'Date Completed', 'date');
        createDynamicInput('vbsNP-dateReg-sole', 'Date Registered', 'date');
        createDynamicInput('vbsNP-dateProp-sole', 'Date of Propagation based on Certification', 'date');
        // Multiple Developer -----------------------------------------
        //Note: not sure if ^ should be repeated
        createDynamicInput('vbsNP-contribution-mult', 'Percentage (%) Contribution', 'number');

    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion C: Creative Works";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";

      // Creative Performing Artwork --------------------------------
        createDynamicInput('cpa-title', 'Title of Creative Performing Art', 'text');
        createDynamicSelect('cpa-type', 'Type of Performing Art', [
            { value: 'Song/Music', label: 'Song/Music' },
            { value: 'Choreography/Dance', label: 'Choreography/Dance' },
            { value: 'Drama/Theater', label: 'Drama/Theater' },
            { value: 'Others', label: 'Others' }
        ]);
        createDynamicSelect('cpa-class', 'Classification', [
            { value: 'New Creation', label: New Creation },
            { value: 'Own Work', label: 'Own Work' },
            { value: 'Work of Others', label: 'Work of Others' }
        ]);
        createDynamicInput('cpa-dateCop', 'Date Copyrighted/Date Performed', 'date');
        createDynamicInput('cpa-venue', 'Venue of Performance', 'text');
        createDynamicInput('cpa-org', 'Organizer of the Event (or Publisher if Possible)', 'text');

      // Exhibition -------------------------------------------------
      createDynamicInput('exh-title', 'Title of Creative Work', 'text');
      createDynamicSelect('exh-type', 'Type of Creative Work', [
            { value: 'Painting/Drawing', label: 'Painting/Drawing' },
            { value: 'Film/Short Film', label: 'Film/Short Film' },
            { value: 'Architectural Design', label: 'Architectural Design' },
            { value: 'Multimedia', label: 'Multimedia' },
            { value: 'Photography', label: 'Photography' },
            { value: 'Sculpture', label: 'Sculpture' },
            { value: 'Others', label: 'Others' }
      ]);
      createDynamicSelect('exh-class', 'Classification', [
            { value: 'Visual Arts', label: 'Visual Arts' },
            { value: 'Architecture', label: 'Architecture' },
            { value: 'Film', label: 'Film' },
            { value: 'Multimedia', label: 'Multimedia' }
      ]);
      createDynamicInput('exh-dateExh', 'Exhibition Date', 'date');
      createDynamicInput('exh-venue', 'Venue of Exhibit', 'text');
      createDynamicInput('exh-org', 'Organizer of the Event', 'text');

      // Juried or Peer-reviewed Designs ----------------------------
      createDynamicInput('des-title', 'Title of Design', 'text');
      createDynamicSelect('des-class', 'Classification', [
            { value: 'Architecture', label: 'Architecture' },
            { value: 'Engineering', label: 'Engineering' },
            { value: 'Industrial Design', label: 'Industrial Design' }
      ]);
      createDynamicInput('des-reviewer', 'Reviewer, Evaluator or Its Equivalent', 'text');
      createDynamicInput('des-dateAct', 'Activity/Exhibition Date', 'date');
      createDynamicInput('des-venue', 'Venue of Activity/Exhibit', 'text');
      createDynamicInput('des-org', 'Organizer', 'text');

      // Literary Publications --------------------------------------
      createDynamicInput('lit-title', 'Title of Literary Publications', 'text');
      createDynamicSelect('lit-type', 'Type of Literary Publications', [
            { value: 'Novel', label: 'Novel' },
            { value: 'Short Story', label: 'Short Story' },
            { value: 'Essay', label: 'Essay' },
            { value: 'Poetry', label: 'Poetry' },
            { value: 'Others', label: 'Others' }
      ]);
      createDynamicInput('lit-reviewer', 'Reviewer, Evaluator or Its Equivalent', 'text');
      createDynamicInput('lit-namePubli', 'Name of Publication', 'text');
      createDynamicInput('lit-namePress', 'Name of Publisher/Press', 'text');
      createDynamicInput('lit-datePubl', 'Organizer', 'date');
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
                <p>Please fill in the necessary details. No abbreviations.</p>
                <p>All inputs with the symbol (*) are required.</p>
              </div>
          
              <div class="lg:col-span-2">
              <!-- START DYNAMIC FORM -->
              <form>
                <div class="flex flex-wrap -mx-3 mb-6"> 
                  <div class="w-full px-3">
                    <div id="dynamic-form-container">
                        <!-- CONTENT CHANGES HERE -->
                    </div>
                  </div>
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



