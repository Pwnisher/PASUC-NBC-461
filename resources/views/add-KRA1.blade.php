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
        const in_stdEval_semDed = ['input','stdEval-semDed', 'Number of Semesters Deducted from the Divisor, If Applicable', 'number'];
        const sel_stdEval_reason = ['select','stdEval-reason', 'Reason for Reducing the Divisor', [
            { value: 'NOT APPLICABLE', label: 'NOT APPLICABLE' },
            { value: 'ON APPROVED STUDY LEAVE', label: 'ON APPROVED STUDY LEAVE' },
            { value: 'ON APPROVED SABBATICAL LEAVE', label: 'ON APPROVED SABBATICAL LEAVE' },
            { value: 'ON APPROVED MATERNITY LEAVE', label: 'ON APPROVED MATERNITY LEAVE' }
        ]]; 
        // Note: need flexible
        const in_stdEval_1sem_q1 = ['input','stdEval-1sem-q1', '1ST SEMESTER', 'number'];
        const in_stdEval_2sem_q1 = ['input','stdEval-2sem-q1', '2ND SEMESTER', 'number'];

        const in_stdEval_1sem_q2 = ['input','stdEval-1sem-q2', '1ST SEMESTER', 'number'];
        const in_stdEval_2sem_q2 = ['input','stdEval-2sem-q2', '2ND SEMESTER', 'number'];

        const in_stdEval_1sem_q3 = ['input','stdEval-1sem-q3', '1ST SEMESTER', 'number'];
        const in_stdEval_2sem_q3 = ['input','stdEval-2sem-q3', '2ND SEMESTER', 'number'];

        const in_stdEval_1sem_q4 = ['input','stdEval-1sem-q4', '1ST SEMESTER', 'number'];
        const in_stdEval_2sem_q4 = ['input','stdEval-2sem-q4', '2ND SEMESTER', 'number'];

        // Note: need id in label
        wrapElements([in_stdEval_semDed], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
        wrapElements([sel_stdEval_reason], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
          createDynamicLabel('AY 2019-2020');
        wrapElements([in_stdEval_1sem_q1, in_stdEval_2sem_q1], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
          createDynamicLabel('AY 2020-2021');
        wrapElements([in_stdEval_1sem_q2, in_stdEval_2sem_q2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
          createDynamicLabel('AY 2021-2022');
        wrapElements([in_stdEval_1sem_q3, in_stdEval_2sem_q3], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
          createDynamicLabel('AY 2022-2023');
        wrapElements([in_stdEval_1sem_q4, in_stdEval_2sem_q4 ], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');


        createDynamicCheckbox('input','stdEval-SD1', 'Student Evaluation Rating using prescribed template');
      
      // Supervisor Evaluation -----------------------------------
        const in_supEval_semDed = ['input','supEval-semDed', 'Number of Semesters Deducted from the Divisor, If Applicable', 'number'];

        const in_supEval_reason = ['select','supEval-reason', 'Reason for Reducing the Divisor', [
            { value: 'NOT APPLICABLE', label: 'NOT APPLICABLE' },
            { value: 'ON APPROVED STUDY LEAVE', label: 'ON APPROVED STUDY LEAVE' },
            { value: 'ON APPROVED SABBATICAL LEAVE', label: 'ON APPROVED SABBATICAL LEAVE' },
            { value: 'ON APPROVED MATERNITY LEAVE', label: 'ON APPROVED MATERNITY LEAVE' }
        ]];
        // Note: need flexible 
        
        const in_supEval_1sem_q1 = ['input','supEval-1sem-q1', '1ST SEMESTER', 'number'];
        const in_supEval_2sem_q1 = ['input','supEval-2sem-q1', '2ND SEMESTER', 'number'];

        const in_supEval_1sem_q2 = ['input','supEval-1sem-q2', '1ST SEMESTER', 'number'];
        const in_supEval_2sem_q2 = ['input','supEval-2sem-q2', '2ND SEMESTER', 'number'];

        const in_supEval_1sem_q3 = ['input','supEval-1sem-q3', '1ST SEMESTER', 'number'];
        const in_supEval_2sem_q3 = ['input','supEval-2sem-q3', '2ND SEMESTER', 'number'];

        const in_supEval_1sem_q4 = ['input','supEval-1sem-q4', '1ST SEMESTER', 'number'];
        const in_supEval_2sem_q4 = ['input','supEval-2sem-q4', '2ND SEMESTER', 'number'];

        wrapElements([in_supEval_semDed], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
        wrapElements([in_supEval_reason], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
          createDynamicLabel('AY 2019-2020');
        wrapElements([in_supEval_1sem_q1, in_supEval_2sem_q1], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
          createDynamicLabel('AY 2020-2021');
        wrapElements([in_supEval_1sem_q2, in_supEval_2sem_q2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
          createDynamicLabel('AY 2021-2022');
        wrapElements([in_supEval_1sem_q3, in_supEval_2sem_q3], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
          createDynamicLabel('AY 2022-2023');
        wrapElements([in_supEval_1sem_q4, in_supEval_2sem_q4], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');

        createDynamicCheckbox('supEval-SD1', 'Supervisor Evaluation Rating using prescribed template');
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Curriculum and Instructional Materials Developed";
        addPageKRA.innerHTML = "KRA I - INSTRUCTION";

      // Instructional Material -------------------------------------
        // Sole Authorship --------------------------------------------
        const in_im_title_sole = ['input','im-title-sole', 'Title of Instructional Material', 'text'];
        const sel_im_type_sole = ['select','im-type-sole', 'Type of Instructional Material', [
            { value: 'Textbook', label: 'Textbook' },
            { value: 'Textbook Chapter', label: 'Textbook Chapter' },
            { value: 'Manual/Module', label: 'Manual/Module' },
            { value: 'Multimedia Teaching Materials', label: 'Multimedia Teaching Materials' },
            { value: 'Testing Materials', label: 'Testing Materials' }
        ]];
        const in_im_reviewer_sole = ['input','im-reviewer-sole', 'Reviewer of Its Equivalent', 'text'];
        const in_im_pubrepo_sole = ['input','im-pubrepo-sole', 'Publisher/Repository', 'text'];
        const in_im_datePubl_sole = ['input','im-datePubl-sole', 'Date Published', 'date'];
        const in_im_dateApprv_sole = ['input','im-dateApprv-sole', 'Date Approved For Use', 'date'];

        wrapElements([in_im_title_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
        wrapElements([sel_im_type_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
        wrapElements([in_im_reviewer_sole, in_im_pubrepo_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
        wrapElements([in_im_datePubl_sole, in_im_dateApprv_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');

        // Co Authorship ----------------------------------------------
        //Note: not sure if ^ should be repeated
        const in_im_contribution_co = ['input','im-contribution-co', 'Percentage (%) Contribution', 'number'];
        wrapElements([in_im_contribution_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');


      // Acadmic Programs -------------------------------------------
      const in_ap_name = ['input','ap-name', 'Complete Name of Academic Degree Program', 'text'];
      const sel_ap_type = ['select','ap-type', 'Type of Program', [
            { value: 'New Program', label: 'New Program' },
            { value: 'Revised Program', label: 'Revised Program' }
      ]];
      const in_ap_boardReso = ['input','ap-boardReso', 'Board Approval (Board Resolution No.)', 'text'];
      const sel_ap_acadYear = ['select','ap-acadYear', 'Academic Year Implemented', [
            { value: '2019-2020', label: '2019-2020' },
            { value: '2020-2021', label: '2020-2021' },
            { value: '2021-2022', label: '2021-2022' },
            { value: '2022-2023', label: '2022-2023' }
      ]];
      const sel_ap_role = ['select','ap-role', 'Role', [
            { value: 'Lead', label: 'Lead' },
            { value: 'Contributor', label: 'Contributor' }
      ]];

      wrapElements([in_ap_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
      wrapElements([sel_ap_type, in_ap_boardReso], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
      wrapElements([sel_ap_acadYear, sel_ap_role], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');

    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services";
        addPageKRA.innerHTML = "KRA I - INSTRUCTION";

        // Adviser/Panel ---------------------------------------------
        createDynamicLabel('SPECIAL/CAPSTONE PROJECT');
          const in_adv_CstdNum_q1 = ['input','adv-CstdNum-q1', 'AY 2019-2020', 'number'];
          const in_adv_CstdNum_q2 = ['input','adv-CstdNum-q2', 'AY 2020-2021', 'number'];
          const in_adv_CstdNum_q3 = ['input','adv-CstdNum-q3', 'AY 2021-2022', 'number'];
          const in_adv_CstdNum_q4 = ['input','adv-CstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_CstdNum_q1, in_adv_CstdNum_q2, in_adv_CstdNum_q3, in_adv_CstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0');

        createDynamicLabel('UNDERGRADUATE THESIS');
          const in_adv_UstdNum_q1 = ['input','adv-UstdNum-q1', 'AY 2019-2020', 'number'];
          const in_adv_UstdNum_q2 = ['input','adv-UstdNum-q2', 'AY 2020-2021', 'number'];
          const in_adv_UstdNum_q3 = ['input','adv-UstdNum-q3', 'AY 2021-2022', 'number'];
          const in_adv_UstdNum_q4 = ['input','adv-UstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_UstdNum_q1, in_adv_UstdNum_q2, in_adv_UstdNum_q3, in_adv_UstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0');

        createDynamicLabel('MASTERS THESIS');
          const in_adv_MstdNum_q1 = ['input','adv-MstdNum-q1', 'AY 2019-2020', 'number'];
          const in_adv_MstdNum_q2 = ['input','adv-MstdNum-q2', 'AY 2020-2021', 'number'];
          const in_adv_MstdNum_q3 = ['input','adv-MstdNum-q3', 'AY 2021-2022', 'number'];
          const in_adv_MstdNum_q4 = ['input','adv-MstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_MstdNum_q1, in_adv_MstdNum_q2, in_adv_MstdNum_q3, in_adv_MstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0');

        createDynamicLabel('DISSERTATION');
          const in_adv_DstdNum_q1 = ['input','adv-DstdNum-q1', 'AY 2019-2020', 'number'];
          const in_adv_DstdNum_q2 = ['input','adv-DstdNum-q2', 'AY 2020-2021', 'number'];
          const in_adv_DstdNum_q3 = ['input','adv-DstdNum-q3', 'AY 2021-2022', 'number'];
          const in_adv_DstdNum_q4 = ['input','adv-DstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_DstdNum_q1, in_adv_DstdNum_q2, in_adv_DstdNum_q3, in_adv_DstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0');
        
        // Repeat ^ to Panel -----------------------------------------

        // Mentor ----------------------------------------------------
        const in_ment_compeName = ['input','ment-compeName', 'Name of Academic Competition', 'text'];
        const in_ment_sponsorOrg = ['input','ment-sponsorOrg', 'Name of Sponsor Organization', 'text'];
        const in_ment_awardName = ['input','ment-awardName', 'Award Received', 'text'];
        const in_ment_awardDate = ['input','ment-awardDate', 'Date Awarded', 'date'];

        wrapElements([in_ment_compeName], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
        wrapElements([in_ment_sponsorOrg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
        wrapElements([in_ment_awardName, in_ment_awardDate], 'w-full md:w-1/2 px-3 mb-6 md:mb-0');
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



