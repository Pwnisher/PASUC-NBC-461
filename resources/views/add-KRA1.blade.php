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

    // Clear the elements in dynamic form and category container
    clearFormContainer('form-container1'); clearFormContainer('form-container2'); clearFormContainer('form-container3');
    clearFormContainer('category-container');

    if (option === "criterionA") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion A: Teaching Effectiveness";
        addPageKRA.innerHTML = "KRA I - INSTRUCTION";
        
        // KRA 1 : Criterion A Categories
        const sel_kra1_cA = ['select','sel_kra1_cA', 'Type of Evaluation:', [
            { value: 'part1', label: 'Student Evaluation' },
            { value: 'part2', label: 'Supervisor Evaluation' }
        ]]; 
        wrapElements([sel_kra1_cA], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');
        
        // Event Listener
        const kra1_cA = document.getElementById('sel_kra1_cA');
        kra1_cA.addEventListener('change', function() {
        var categ_kra1_cA = kra1_cA.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none';

            // Show the selected part
            if (categ_kra1_cA === 'part1') part1.style.display = 'block';
            else if (categ_kra1_cA === 'part2') part2.style.display = 'block';
        });
        
      // Student Evaluation -------------------------------------
        const in_stdEval_semDed = ['input','stdEval_semDed', 'Number of Semesters Deducted from the Divisor, If Applicable', 'number'];
        const sel_stdEval_reason = ['select','stdEval_reason', 'Reason for Reducing the Divisor', [
            { value: 'NOT APPLICABLE', label: 'NOT APPLICABLE' },
            { value: 'ON APPROVED STUDY LEAVE', label: 'ON APPROVED STUDY LEAVE' },
            { value: 'ON APPROVED SABBATICAL LEAVE', label: 'ON APPROVED SABBATICAL LEAVE' },
            { value: 'ON APPROVED MATERNITY LEAVE', label: 'ON APPROVED MATERNITY LEAVE' }
        ]]; 
        // Note: need flexible
        const in_stdEval_1sem_q1 = ['input','stdEval_1sem_q1', '1ST SEMESTER', 'number'];
        const in_stdEval_2sem_q1 = ['input','stdEval_2sem_q1', '2ND SEMESTER', 'number'];

        const in_stdEval_1sem_q2 = ['input','stdEval_1sem_q2', '1ST SEMESTER', 'number'];
        const in_stdEval_2sem_q2 = ['input','stdEval_2sem_q2', '2ND SEMESTER', 'number'];

        const in_stdEval_1sem_q3 = ['input','stdEval_1sem_q3', '1ST SEMESTER', 'number'];
        const in_stdEval_2sem_q3 = ['input','stdEval_2sem_q3', '2ND SEMESTER', 'number'];

        const in_stdEval_1sem_q4 = ['input','stdEval_1sem_q4', '1ST SEMESTER', 'number'];
        const in_stdEval_2sem_q4 = ['input','stdEval_2sem_q4', '2ND SEMESTER', 'number'];

        // Note: need id in label
        wrapElements([in_stdEval_semDed], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_stdEval_reason], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('AY 2019-2020', 'form-container1');
        wrapElements([in_stdEval_1sem_q1, in_stdEval_2sem_q1], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('AY 2020-2021', 'form-container1');
        wrapElements([in_stdEval_1sem_q2, in_stdEval_2sem_q2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('AY 2021-2022', 'form-container1');
        wrapElements([in_stdEval_1sem_q3, in_stdEval_2sem_q3], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('AY 2022-2023', 'form-container1');
        wrapElements([in_stdEval_1sem_q4, in_stdEval_2sem_q4 ], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('stdEval_SD1', 'Student Evaluation Rating using prescribed template', 'form-container1');
        
      // Supervisor Evaluation -----------------------------------
        const in_supEval_semDed = ['input','supEval_semDed', 'Number of Semesters Deducted from the Divisor, If Applicable', 'number'];
        const in_supEval_reason = ['select','supEval_reason', 'Reason for Reducing the Divisor', [
            { value: 'NOT APPLICABLE', label: 'NOT APPLICABLE' },
            { value: 'ON APPROVED STUDY LEAVE', label: 'ON APPROVED STUDY LEAVE' },
            { value: 'ON APPROVED SABBATICAL LEAVE', label: 'ON APPROVED SABBATICAL LEAVE' },
            { value: 'ON APPROVED MATERNITY LEAVE', label: 'ON APPROVED MATERNITY LEAVE' }
        ]];
        // Note: need flexible 
        
        const in_supEval_1sem_q1 = ['input','supEval_1sem_q1', '1ST SEMESTER', 'number'];
        const in_supEval_2sem_q1 = ['input','supEval_2sem_q1', '2ND SEMESTER', 'number'];

        const in_supEval_1sem_q2 = ['input','supEval_1sem_q2', '1ST SEMESTER', 'number'];
        const in_supEval_2sem_q2 = ['input','supEval_2sem_q2', '2ND SEMESTER', 'number'];

        const in_supEval_1sem_q3 = ['input','supEval_1sem_q3', '1ST SEMESTER', 'number'];
        const in_supEval_2sem_q3 = ['input','supEval_2sem_q3', '2ND SEMESTER', 'number'];

        const in_supEval_1sem_q4 = ['input','supEval_1sem_q4', '1ST SEMESTER', 'number'];
        const in_supEval_2sem_q4 = ['input','supEval_2sem_q4', '2ND SEMESTER', 'number'];

        wrapElements([in_supEval_semDed], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_supEval_reason], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
          createDynamicLabel('AY 2019-2020', 'form-container2');
        wrapElements([in_supEval_1sem_q1, in_supEval_2sem_q1], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
          createDynamicLabel('AY 2020-2021', 'form-container2');
        wrapElements([in_supEval_1sem_q2, in_supEval_2sem_q2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
          createDynamicLabel('AY 2021-2022', 'form-container2');
        wrapElements([in_supEval_1sem_q3, in_supEval_2sem_q3], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
          createDynamicLabel('AY 2022-2023', 'form-container2');
        wrapElements([in_supEval_1sem_q4, in_supEval_2sem_q4], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('Supporting Documents', 'form-container2');
        createDynamicCheckbox('supEval_SD1', 'Supervisor Evaluation Rating using prescribed template', 'form-container2');
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion B: Curriculum and Instructional Materials Developed";
        addPageKRA.innerHTML = "KRA I - INSTRUCTION";

        // KRA 1 : Criterion B Categories
        const sel_kra1_cB = ['select','sel_kra1_cB', 'Materials/Programs Developed:', [
            { value: 'part1', label: 'Instructional Material - Sole Authorship' },
            { value: 'part2', label: 'Instructional Material - Co-Authorship' },
            { value: 'part3', label: 'Academic programs' }
        ]]; 
        wrapElements([sel_kra1_cB], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');

        // Event Listener
        const kra1_cB = document.getElementById('sel_kra1_cB');
        kra1_cB.addEventListener('change', function() {
        var categ_kra1_cB = kra1_cB.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none'; part3.style.display = 'none';

            // Show the selected part
            if (categ_kra1_cB === 'part1') part1.style.display = 'block';
            else if (categ_kra1_cB === 'part2') part2.style.display = 'block';
            else if (categ_kra1_cB === 'part3') part3.style.display = 'block';
        });


      // Instructional Material -------------------------------------
        // Sole Authorship --------------------------------------------
        const in_im_title_sole = ['input','im_title_sole', 'Title of Instructional Material', 'text'];
        const sel_im_type_sole = ['select','im_type_sole', 'Type of Instructional Material', [
            { value: 'Textbook', label: 'Textbook' },
            { value: 'Textbook Chapter', label: 'Textbook Chapter' },
            { value: 'Manual/Module', label: 'Manual/Module' },
            { value: 'Multimedia Teaching Materials', label: 'Multimedia Teaching Materials' },
            { value: 'Testing Materials', label: 'Testing Materials' }
        ]];
        const in_im_reviewer_sole = ['input','im_reviewer_sole', 'Reviewer of Its Equivalent', 'text'];
        const in_im_pubrepo_sole = ['input','im_pubrepo_sole', 'Publisher/Repository', 'text'];
        const in_im_datePubl_sole = ['input','im_datePubl_sole', 'Date Published', 'date'];
        const in_im_dateApprv_sole = ['input','im_dateApprv_sole', 'Date Approved For Use', 'date'];

        wrapElements([in_im_title_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_im_type_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_im_reviewer_sole, in_im_pubrepo_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_im_datePubl_sole, in_im_dateApprv_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        
        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('im_sole_SD1', 'Copy of instructional material developed', 'form-container1');
        createDynamicCheckbox('im_sole_SD2', 'Copy of evidence that the instructional material has undergone peer-review or evaluation process', 'form-container1');
        createDynamicCheckbox('im_sole_SD3', 'Copy of approval for use of the instructional material in the department/institution', 'form-container1');
        createDynamicCheckbox('im_sole_SD4', 'Copy of the Testing Material (if Testing Material)', 'form-container1');
        createDynamicCheckbox('im_sole_SD5', 'Copy of evidence that the testing material has been validated, reliability tested, secured, and verified by the authorized body within the institution', 'form-container1');

        // Co Authorship ----------------------------------------------
        const in_im_title_co = ['input','im_title_co', 'Title of Instructional Material', 'text'];
        const sel_im_type_co = ['select','im_type_co', 'Type of Instructional Material', [
            { value: 'Textbook', label: 'Textbook' },
            { value: 'Textbook Chapter', label: 'Textbook Chapter' },
            { value: 'Manual/Module', label: 'Manual/Module' },
            { value: 'Multimedia Teaching Materials', label: 'Multimedia Teaching Materials' },
            { value: 'Testing Materials', label: 'Testing Materials' }
        ]];
        const in_im_reviewer_co = ['input','im_reviewer_co', 'Reviewer of Its Equivalent', 'text'];
        const in_im_pubrepo_co = ['input','im_pubrepo_co', 'Publisher/Repository', 'text'];
        const in_im_datePubl_co = ['input','im_datePubl_co', 'Date Published', 'date'];
        const in_im_dateApprv_co = ['input','im_dateApprv_co', 'Date Approved For Use', 'date'];

        const in_im_contri_co = ['input','im_contri_co', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_im_title_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([sel_im_type_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_im_reviewer_co, in_im_pubrepo_co], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_im_datePubl_co, in_im_dateApprv_co], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        
        wrapElements([in_im_contri_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('Supporting Documents', 'form-container2');
        createDynamicCheckbox('im_co_SD1', 'Copy of instructional material developed', 'form-container2');
        createDynamicCheckbox('im_co_SD2', 'Copy of evidence that the instructional material has undergone peer-review or evaluation process', 'form-container2');
        createDynamicCheckbox('im_co_SD3', 'Copy of approval for use of the instructional material in the department/institution', 'form-container2');
        createDynamicCheckbox('im_sole_SD3', 'Copy of the Testing Material (if Testing Material)', 'form-container1');
        createDynamicCheckbox('im_sole_SD3', 'Copy of evidence that the testing material has been validated, reliability tested, secured, and verified by the authorized body within the institution', 'form-container1');
        createDynamicCheckbox('im_co_SD4', '[Multiple Authors] Copy of certification signed by all the authors indicating their contribution in the development of the instructional material using prescribed template', 'form-container2');


      // Acadmic Programs -------------------------------------------
      const in_ap_name = ['input','ap_name', 'Complete Name of Academic Degree Program', 'text'];
      const sel_ap_type = ['select','ap_type', 'Type of Program', [
            { value: 'New Program', label: 'New Program' },
            { value: 'Revised Program', label: 'Revised Program' }
      ]];
      const in_ap_boardReso = ['input','ap_boardReso', 'Board Approval (Board Resolution No.)', 'text'];
      const sel_ap_acadYear = ['select','ap_acadYear', 'Academic Year Implemented', [
            { value: '2019-2020', label: '2019-2020' },
            { value: '2020-2021', label: '2020-2021' },
            { value: '2021-2022', label: '2021-2022' },
            { value: '2022-2023', label: '2022-2023' }
      ]];
      const sel_ap_role = ['select','ap_role', 'Role', [
            { value: 'Lead', label: 'Lead' },
            { value: 'Contributor', label: 'Contributor' }
      ]];

      wrapElements([in_ap_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
      wrapElements([sel_ap_type, in_ap_boardReso], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
      wrapElements([sel_ap_acadYear, sel_ap_role], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');

      createDynamicLabel('Supporting Documents', 'form-container3');
      createDynamicCheckbox('ap_SD1', 'Copy of certification signed by the academic unit head indicating the role of the faculty in the development/revision of academic degree program using prescribed template', 'form-container3');
      createDynamicCheckbox('ap_SD2', 'Copy of governing board resolution approving the implementation of the academic program developed/revised', 'form-container3');

    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion C: Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services";
        addPageKRA.innerHTML = "KRA I - INSTRUCTION";

        // KRA 1 : Criterion C Categories
        const sel_kra1_cC = ['select','sel_kra1_cC', 'Services Rendered: ', [
            { value: 'part1', label: 'As Adviser (to student/s)' },
            { value: 'part2', label: 'As Panel (to student/s)' },
            { value: 'part3', label: 'As Mentor' }
        ]]; 
        wrapElements([sel_kra1_cC], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');

        // Event Listener
        const kra1_cC = document.getElementById('sel_kra1_cC');
        kra1_cC.addEventListener('change', function() {
        var categ_kra1_cC = kra1_cC.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none'; part3.style.display = 'none';

            // Show the selected part
            if (categ_kra1_cC === 'part1') part1.style.display = 'block';
            else if (categ_kra1_cC === 'part2') part2.style.display = 'block';
            else if (categ_kra1_cC === 'part3') part3.style.display = 'block';
        });


        // Adviser ---------------------------------------------------
        createDynamicLabel('SPECIAL/CAPSTONE PROJECT', 'form-container1');
          const in_adv_CstdNum_q1 = ['input','adv_CstdNum_q1', 'AY 2019-2020', 'number'];
          const in_adv_CstdNum_q2 = ['input','adv_CstdNum_q2', 'AY 2020-2021', 'number'];
          const in_adv_CstdNum_q3 = ['input','adv_CstdNum_q3', 'AY 2021-2022', 'number'];
          const in_adv_CstdNum_q4 = ['input','adv_CstdNum_q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_CstdNum_q1, in_adv_CstdNum_q2, in_adv_CstdNum_q3, in_adv_CstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('UNDERGRADUATE THESIS', 'form-container1');
          const in_adv_UstdNum_q1 = ['input','adv_UstdNum_q1', 'AY 2019-2020', 'number'];
          const in_adv_UstdNum_q2 = ['input','adv_UstdNum_q2', 'AY 2020-2021', 'number'];
          const in_adv_UstdNum_q3 = ['input','adv_UstdNum_q3', 'AY 2021-2022', 'number'];
          const in_adv_UstdNum_q4 = ['input','adv_UstdNum_q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_UstdNum_q1, in_adv_UstdNum_q2, in_adv_UstdNum_q3, in_adv_UstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('MASTERS THESIS', 'form-container1');
          const in_adv_MstdNum_q1 = ['input','adv_MstdNum_q1', 'AY 2019-2020', 'number'];
          const in_adv_MstdNum_q2 = ['input','adv_MstdNum_q2', 'AY 2020-2021', 'number'];
          const in_adv_MstdNum_q3 = ['input','adv_MstdNum_q3', 'AY 2021-2022', 'number'];
          const in_adv_MstdNum_q4 = ['input','adv_MstdNum_q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_MstdNum_q1, in_adv_MstdNum_q2, in_adv_MstdNum_q3, in_adv_MstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('DISSERTATION', 'form-container1');
          const in_adv_DstdNum_q1 = ['input','adv_DstdNum_q1', 'AY 2019-2020', 'number'];
          const in_adv_DstdNum_q2 = ['input','adv_DstdNum_q2', 'AY 2020-2021', 'number'];
          const in_adv_DstdNum_q3 = ['input','adv_DstdNum_q3', 'AY 2021-2022', 'number'];
          const in_adv_DstdNum_q4 = ['input','adv_DstdNum_q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_DstdNum_q1, in_adv_DstdNum_q2, in_adv_DstdNum_q3, in_adv_DstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container1');
        
        createDynamicLabel('Supporting Documents', 'form-container1');
          createDynamicCheckbox('adv_SD1', 'Copy of appointment/invitation as adviser or panel membe', 'form-container1');
          createDynamicCheckbox('adv_SD2', 'Copy of evidence that the advisee passed the special project, capstone project, thesis, or dissertation', 'form-container1');

        
        // Panel -----------------------------------------------------
        createDynamicLabel('SPECIAL/CAPSTONE PROJECT', 'form-container2');
          const in_pan_CstdNum_q1 = ['input','pan_CstdNum_q1', 'AY 2019-2020', 'number'];
          const in_pan_CstdNum_q2 = ['input','pan_CstdNum_q2', 'AY 2020-2021', 'number'];
          const in_pan_CstdNum_q3 = ['input','pan_CstdNum_q3', 'AY 2021-2022', 'number'];
          const in_pan_CstdNum_q4 = ['input','pan_CstdNum_q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_CstdNum_q1, in_adv_CstdNum_q2, in_adv_CstdNum_q3, in_adv_CstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('UNDERGRADUATE THESIS', 'form-container2');
          const in_pan_UstdNum_q1 = ['input','pan_UstdNum_q1', 'AY 2019-2020', 'number'];
          const in_pan_UstdNum_q2 = ['input','pan_UstdNum_q2', 'AY 2020-2021', 'number'];
          const in_pan_UstdNum_q3 = ['input','pan_UstdNum_q3', 'AY 2021-2022', 'number'];
          const in_pan_UstdNum_q4 = ['input','pan_UstdNum_q4', 'AY 2022-2023', 'number'];
          wrapElements([in_pan_UstdNum_q1, in_pan_UstdNum_q2, in_pan_UstdNum_q3, in_pan_UstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('MASTERS THESIS', 'form-container2');
          const in_pan_MstdNum_q1 = ['input','pan_MstdNum_q1', 'AY 2019-2020', 'number'];
          const in_pan_MstdNum_q2 = ['input','pan_MstdNum_q2', 'AY 2020-2021', 'number'];
          const in_pan_MstdNum_q3 = ['input','pan_MstdNum_q3', 'AY 2021-2022', 'number'];
          const in_pan_MstdNum_q4 = ['input','pan_MstdNum_q4', 'AY 2022-2023', 'number'];
          wrapElements([in_pan_MstdNum_q1, in_pan_MstdNum_q2, in_pan_MstdNum_q3, in_pan_MstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('DISSERTATION', 'form-container2');
          const in_pan_DstdNum_q1 = ['input','pan_DstdNum_q1', 'AY 2019-2020', 'number'];
          const in_pan_DstdNum_q2 = ['input','pan_DstdNum_q2', 'AY 2020-2021', 'number'];
          const in_pan_DstdNum_q3 = ['input','pan_DstdNum_q3', 'AY 2021-2022', 'number'];
          const in_pan_DstdNum_q4 = ['input','pan_DstdNum_q4', 'AY 2022-2023', 'number'];
          wrapElements([in_pan_DstdNum_q1, in_pan_DstdNum_q2, in_pan_DstdNum_q3, in_pan_DstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container2');
        
        createDynamicLabel('Supporting Documents', 'form-container2');
          createDynamicCheckbox('pan_SD1', 'Copy of appointment/invitation as adviser or panel member', 'form-container2');
          createDynamicCheckbox('pan_SD2', 'Copy of proof of participation', 'form-container2');


        // Mentor ----------------------------------------------------
        const in_ment_compeName = ['input','ment_compeName', 'Name of Academic Competition', 'text'];
        const in_ment_sponsorOrg = ['input','ment_sponsorOrg', 'Name of Sponsor Organization', 'text'];
        const in_ment_awardName = ['input','ment_awardName', 'Award Received', 'text'];
        const in_ment_awardDate = ['input','ment_awardDate', 'Date Awarded', 'date'];

        wrapElements([in_ment_compeName], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_ment_sponsorOrg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_ment_awardName, in_ment_awardDate], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
        
        createDynamicLabel('Supporting Documents', 'form-container3');
        createDynamicCheckbox('ment_SD1', 'Copy of appointment/designation as mentor for a student or a team of students', 'form-container3');
        createDynamicCheckbox('ment_SD2', 'Copy of the award/certificate received by student/group of students mentored', 'form-container3');
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
        <h3 id="add_page_title" class="mb-2 font-bold text-xl font-sans">Specific Criteria</h3>
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



