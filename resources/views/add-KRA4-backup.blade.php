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
        addPageTitle.innerHTML = "Involvement in Professional Organizations";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";

      // TODO:ADD DIFFERENT ID NAME -------------------------------------
        createDynamicInput('indivMember-NameOrg', 'Name of Organization', 'text');
        createDynamicInput('indivMember-TypeOrg', 'Type of Organization', 'text');
        createDynamicInput('indivMember-ActivityOrg', 'Activity of the Organization Participated by the Faculty', 'text');
        createDynamicSelect('indivMember-Role', 'Role or Contribution to the activity of the Organization', [
            { value: 'BOARD MEMBER', label: 'BOARD MEMBER' },
            { value: 'OFFICER', label: 'OFFICER' },
            { value: 'LEAD ORGANIZER', label: 'LEAD ORGANIZER' },
            { value: 'CO-ORGANIZER', label: 'CO-ORGANIZER' },
            { value: 'COMMITTEE CHAIR', label: 'COMMITTEE CHAIR' },
            { value: 'COMMITTEE MEMBER', label: 'COMMITTEE MEMBER' },
            { value: 'MODERATOR', label: 'MODERATOR' },
            { value: 'FACILITATOR', label: 'FACILITATOR' },            
        ]);
        createDynamicInput('indivMember-DateActivity', 'DATE OF ACTIVITY', 'date');      
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Continuing Development";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";

      // Educational Qualifications -------------------------------------
        // For Doctorate Degree --------------------------------------------
        createDynamicInput('qualDoc-NameDegree', 'Complete Name of the Doctorate Degree', 'text');
        createDynamicInput('qualDoc-NameInstitution', 'Name of the Institution Where the Degree was Earned', 'text');
        createDynamicInput('qualDoc-DateComp', 'Date Completed', 'date');
        createDynamicSelect('qualDoc-IsQualified', 'Is the Faculty Qualified for the Automatic 1 Sub-Rank Increase?', [
            { value: 'YES', label: 'YES' },
            { value: 'NO', label: 'NO' },
        ]);        

        // Additional Degrees ----------------------------------------------
        //Note: not sure if ^ should be repeated
        createDynamicSelect('qualAdd-Degree', 'Degree', [
            { value: 'ADDITIONAL DOCTORATE DEGREE', label: 'ADDITIONAL DOCTORATE DEGREE' },
            { value: 'ADDITIONAL MASTER DEGREE', label: 'ADDITIONAL MASTER DEGREE' },
            { value: 'POST-DOCTORATE DIPLOMA/CERTIFICATE', label: 'POST-DOCTORATE DIPLOMA/CERTIFICATE' },
            { value: 'POST-MASTERS DIPLOMA/CERTIFICATE', label: 'POST-MASTERS DIPLOMA/CERTIFICATE' },
        ]);     
        createDynamicInput('qualAdd-DegreeName', 'Degree Name', 'text');
        createDynamicInput('qualAdd-NameHEI', 'Name of HEI', 'text');
        createDynamicInput('qualAdd-DateComp', 'Date Completed', 'date');

        // For Every Participation in Conferences, Seminars, Workshops, Industry Immersion ----------------------------------------------
        createDynamicInput('participate-NameConference', 'Name of Conference/Training', 'text');
        createDynamicSelect('participate-Scope', 'Scope', [
            { value: 'LOCAL', label: 'LOCAL' },
            { value: 'INTERNATIONAL', label: 'INTERNATIONAL' },            
        ]);
        createDynamicInput('participate-Organizer', 'Organizer', 'text');
        createDynamicInput('participate-DateActivity', 'Date of Activity', 'date');

        // For Every Paper Presentation in Conferences ----------------------------------------------
        createDynamicInput('paperPresent-TitlePaper', 'Title of Paper', 'text');
        createDynamicSelect('paperPresent-LocalInternational', 'Local or International', [
            { value: 'LOCAL', label: 'LOCAL' },
            { value: 'INTERNATIONAL', label: 'INTERNATIONAL' },  
        ]);
        createDynamicInput('paperPresent-TitleConference', 'Title of Conference', 'text');
        createDynamicInput('paperPresent-ConferenceOrg', 'Conference Organizer', 'text');
        createDynamicInput('paperPresent-DatePresent', 'Date Presented', 'date');
    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Awards and Recognition";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";

        // For Every Award of Distinction Received in Recognition of Achievement in Relevant Areas of Specialization, Profession and/or Assignment of the Faculty Concerned ---------------------------------------------
        createDynamicInput('distinct-NameAward', 'Name of the Award', 'text');
        createDynamicSelect('distinct-ScopeAward', 'Scope of the Award', [
            { value: 'INSTITUTIONAL', label: 'INSTITUTIONAL' },
            { value: 'LOCAL', label: 'LOCAL' },  
            { value: 'REGIONAL', label: 'REGIONAL' },  
        ]);
        createDynamicInput('distinct-AwardBody', 'Award-Giving Body/Organization', 'text');
        createDynamicInput('distinct-DateGiven', 'Date the Award was Given', 'date');
        createDynamicInput('distinct-VenueAward', 'Venue of the Award Ceremony', 'text');
    }
    else if (option === "criterionD") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Bonus Indicators for Newly Appointed Faculty";
        addPageKRA.innerHTML = "KRA IV - PROFESSIONAL DEVELOPMENT";

        // For Every Year of Full-Time Academic Service in an Institution of Higher Learning As ---------------------------------------------
        createDynamicSelect('fullTime-Position', 'Designation/Position', [
            { value: 'PRESIDENT', label: 'PRESIDENT' },
            { value: 'VICE PRESIDENT, DEAN OR DIRECTOR', label: 'VICE PRESIDENT, DEAN OR DIRECTOR' },  
            { value: 'DEPARTMENT/PROGRAM HEAD', label: 'DEPARTMENT/PROGRAM HEAD' },  
            { value: 'FACULTY MEMBER', label: 'FACULTY MEMBER' },  
        ]);
        createDynamicInput('fullTime-NameHEI', 'Name of HEI', 'text');
        createDynamicInput('fullTime-NoYears', 'No. of Years', 'number');

        //Period Covered
        createDynamicInput('fullTime-PeriodStart', 'Start', 'date');
        createDynamicInput('fullTime-PeriodEnd', 'End', 'date');

        // For Every Year of Industry Experience (Non-Academic Organization) ---------------------------------------------
        createDynamicInput('industry-NameCompany', 'Name of Company/Organization', 'text');
        createDynamicSelect('industry-Designation', 'Designation/Position', [
            { value: 'MANAGERIAL/SUPERVISORY', label: 'MANAGERIAL/SUPERVISORY' },
            { value: 'TECHNICAL/SKILLED', label: 'TECHNICAL/SKILLED' },  
            { value: 'SUPPORT/ADMINISTRATIVE', label: 'SUPPORT/ADMINISTRATIVE' },  
        ]);        
        createDynamicInput('industry-NoYears', 'No. of Years', 'number');

        //Period Covered
        createDynamicInput('industry-PeriodStart', 'Start', 'date');
        createDynamicInput('industry-PeriodEnd', 'End', 'date');
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



