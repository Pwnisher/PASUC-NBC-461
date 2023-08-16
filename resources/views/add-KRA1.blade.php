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
        addPageTitle.innerHTML = "Teaching Effectiveness";
        addPageKRA.innerHTML = "KRA I - INSTRUCTION";

      // Student Evaluation -------------------------------------
        createDynamicInput('stdEval-semDed', 'Number of Semesters Deducted from the Divisor, If Applicable', 'number');
        createDynamicSelect('stdEval-reason', 'Reason for Reducing the Divisor', [
            { value: 'NOT APPLICABLE', label: 'NOT APPLICABLE' },
            { value: 'ON APPROVED STUDY LEAVE', label: 'ON APPROVED STUDY LEAVE' },
            { value: 'ON APPROVED SABBATICAL LEAVE', label: 'ON APPROVED SABBATICAL LEAVE' },
            { value: 'ON APPROVED MATERNITY LEAVE', label: 'ON APPROVED MATERNITY LEAVE' }
        ]);
        // Note: need flexible
        createDynamicSelect('stdEval-period', 'Evaluation Period', [
            { value: 'AY 2019-2020', label: 'AY 2019-2020' },
            { value: 'AY 2020-2021', label: 'AY 2020-2021' },
            { value: 'AY 2021-2022', label: 'AY 2021-2022' },
            { value: 'AY 2022-2023', label: 'AY 2022-2023' }
        ]);
        createDynamicCheckbox('stdEval-SD1', 'Student Evaluation Rating using prescribed template');

      // Supervisor Evaluation -----------------------------------
        createDynamicInput('supEval-semDed', 'Number of Semesters Deducted from the Divisor, If Applicable', 'number');

        createDynamicSelect('supEval-reason', 'Reason for Reducing the Divisor', [
            { value: 'NOT APPLICABLE', label: 'NOT APPLICABLE' },
            { value: 'ON APPROVED STUDY LEAVE', label: 'ON APPROVED STUDY LEAVE' },
            { value: 'ON APPROVED SABBATICAL LEAVE', label: 'ON APPROVED SABBATICAL LEAVE' },
            { value: 'ON APPROVED MATERNITY LEAVE', label: 'ON APPROVED MATERNITY LEAVE' }
        ]);
        // Note: need flexible
        createDynamicSelect('supdEval-period', 'Evaluation Period', [
            { value: 'AY 2019-2020', label: 'AY 2019-2020' },
            { value: 'AY 2020-2021', label: 'AY 2020-2021' },
            { value: 'AY 2021-2022', label: 'AY 2021-2022' },
            { value: 'AY 2022-2023', label: 'AY 2022-2023' }
        ]);
        createDynamicCheckbox('supEval-SD1', 'Supervisor Evaluation Rating using prescribed template');
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Curriculum and Instructional Materials Developed";
        addPageKRA.innerHTML = "KRA I - INSTRUCTION";

      // Instructional Material -------------------------------------
        // Sole Authorship --------------------------------------------
        createDynamicInput('im-title-sole', 'Title of Instructional Material', 'text');
        createDynamicSelect('im-type-sole', 'Type of Instructional Material', [
            { value: 'Textbook', label: 'Textbook' },
            { value: 'Textbook Chapter', label: 'Textbook Chapter' },
            { value: 'Manual/Module', label: 'Manual/Module' },
            { value: 'Multimedia Teaching Materials', label: 'Multimedia Teaching Materials' },
            { value: 'Testing Materials', label: 'Testing Materials' }
        ]);
        createDynamicInput('im-reviewer-sole', 'Reviewer of Its Equivalent', 'text');
        createDynamicInput('im-pubrepo-sole', 'Publisher/Repository', 'text');
        createDynamicInput('im-datePublished-sole', 'Date Published', 'date');
        createDynamicInput('im-dateApproved-sole', 'Date Approved For Use', 'date');

        // Co Authorship ----------------------------------------------
        //Note: not sure if ^ should be repeated
        createDynamicInput('im-contribution-co', 'Percentage (%) Contribution', 'number');


      // Acadmic Programs -------------------------------------------
      createDynamicInput('ap-name', 'Complete Name of Academic Degree Program', 'text');
      createDynamicSelect('ap-type', 'Type of Program', [
            { value: 'New Program', label: 'New Program' },
            { value: 'Revised Program', label: 'Revised Program' }
        ]);
      createDynamicInput('ap-boardReso', 'Board Approval (Board Resolution No.)', 'text');
      createDynamicSelect('ap-acadYear', 'Academic Year Implemented', [
            { value: '2019-2020', label: '2019-2020' },
            { value: '2020-2021', label: '2020-2021' },
            { value: '2021-2022', label: '2021-2022' },
            { value: '2022-2023', label: '2022-2023' }
        ]);
        createDynamicSelect('ap-role', 'Role', [
            { value: 'Lead', label: 'Lead' },
            { value: 'Contributor', label: 'Contributor' }
        ]);

    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services";
        addPageKRA.innerHTML = "KRA I - INSTRUCTION";

        // Adviser/Panel ---------------------------------------------
        createDynamicLabel('SPECIAL/CAPSTONE PROJECT');
        // Note: find a way to make it 4 column
          createDynamicInput('adviser-studentNum-q1', 'AY 2019-2020', 'number');
          createDynamicInput('adviser-studentNum-q2', 'AY 2020-2021', 'number');
          createDynamicInput('adviser-studentNum-q3', 'AY 2021-2022', 'number');
          createDynamicInput('adviser-studentNum-q4', 'AY 2022-2023', 'number');

        createDynamicLabel('UNDERGRADUATE THESIS');
          createDynamicInput('adviser-studentNum-q1', 'AY 2019-2020', 'number');
          createDynamicInput('adviser-studentNum-q2', 'AY 2020-2021', 'number');
          createDynamicInput('adviser-studentNum-q3', 'AY 2021-2022', 'number');
          createDynamicInput('adviser-studentNum-q4', 'AY 2022-2023', 'number');

        createDynamicLabel('MASTERS THESIS');
        createDynamicInput('adviser-studentNum-q1', 'AY 2019-2020', 'number');
        createDynamicInput('adviser-studentNum-q2', 'AY 2020-2021', 'number');
        createDynamicInput('adviser-studentNum-q3', 'AY 2021-2022', 'number');
        createDynamicInput('adviser-studentNum-q4', 'AY 2022-2023', 'number');

        createDynamicLabel('DISSERTATION');
          createDynamicInput('adviser-studentNum-q1', 'AY 2019-2020', 'number');
          createDynamicInput('adviser-studentNum-q2', 'AY 2020-2021', 'number');
          createDynamicInput('adviser-studentNum-q3', 'AY 2021-2022', 'number');
          createDynamicInput('adviser-studentNum-q4', 'AY 2022-2023', 'number');
        
        // Repeat ^ to Panel -----------------------------------------

        // Mentor ----------------------------------------------------
        createDynamicInput('mentor-compeName', 'Name of Academic Competition', 'text');
        createDynamicInput('mentor-sponsorOrg', 'Name of Sponsor Organization', 'text');
        createDynamicInput('mentor-awardName', 'Award Received', 'text');
        createDynamicInput('mentor-awardDate', 'Date Awarded', 'date');
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



