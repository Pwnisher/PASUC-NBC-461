import { wrapElements, createDynamicLabel, clearFormContainer } from './addDocs.js';


// KRA I - INSTRUCTION
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


        //createDynamicCheckbox('stdEval-SD1', 'Student Evaluation Rating using prescribed template');
        
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

        //createDynamicCheckbox('supEval-SD1', 'Supervisor Evaluation Rating using prescribed template', 'form-container');
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

        wrapElements([in_im_title_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_im_type_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_im_reviewer_sole, in_im_pubrepo_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_im_datePubl_sole, in_im_dateApprv_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        

        // Co Authorship ----------------------------------------------
        const in_im_title_co = ['input','im-title-co', 'Title of Instructional Material', 'text'];
        const sel_im_type_co = ['select','im-type-co', 'Type of Instructional Material', [
            { value: 'Textbook', label: 'Textbook' },
            { value: 'Textbook Chapter', label: 'Textbook Chapter' },
            { value: 'Manual/Module', label: 'Manual/Module' },
            { value: 'Multimedia Teaching Materials', label: 'Multimedia Teaching Materials' },
            { value: 'Testing Materials', label: 'Testing Materials' }
        ]];
        const in_im_reviewer_co = ['input','im-reviewer-co', 'Reviewer of Its Equivalent', 'text'];
        const in_im_pubrepo_co = ['input','im-pubrepo-co', 'Publisher/Repository', 'text'];
        const in_im_datePubl_co = ['input','im-datePubl-co', 'Date Published', 'date'];
        const in_im_dateApprv_co = ['input','im-dateApprv-co', 'Date Approved For Use', 'date'];

        const in_im_contri_co = ['input','im-contri-co', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_im_title_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([sel_im_type_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_im_reviewer_co, in_im_pubrepo_co], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_im_datePubl_co, in_im_dateApprv_co], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        
        wrapElements([in_im_contri_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');


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

      wrapElements([in_ap_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
      wrapElements([sel_ap_type, in_ap_boardReso], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
      wrapElements([sel_ap_acadYear, sel_ap_role], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');

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
          const in_adv_CstdNum_q1 = ['input','adv-CstdNum-q1', 'AY 2019-2020', 'number'];
          const in_adv_CstdNum_q2 = ['input','adv-CstdNum-q2', 'AY 2020-2021', 'number'];
          const in_adv_CstdNum_q3 = ['input','adv-CstdNum-q3', 'AY 2021-2022', 'number'];
          const in_adv_CstdNum_q4 = ['input','adv-CstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_CstdNum_q1, in_adv_CstdNum_q2, in_adv_CstdNum_q3, in_adv_CstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('UNDERGRADUATE THESIS', 'form-container1');
          const in_adv_UstdNum_q1 = ['input','adv-UstdNum-q1', 'AY 2019-2020', 'number'];
          const in_adv_UstdNum_q2 = ['input','adv-UstdNum-q2', 'AY 2020-2021', 'number'];
          const in_adv_UstdNum_q3 = ['input','adv-UstdNum-q3', 'AY 2021-2022', 'number'];
          const in_adv_UstdNum_q4 = ['input','adv-UstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_UstdNum_q1, in_adv_UstdNum_q2, in_adv_UstdNum_q3, in_adv_UstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('MASTERS THESIS', 'form-container1');
          const in_adv_MstdNum_q1 = ['input','adv-MstdNum-q1', 'AY 2019-2020', 'number'];
          const in_adv_MstdNum_q2 = ['input','adv-MstdNum-q2', 'AY 2020-2021', 'number'];
          const in_adv_MstdNum_q3 = ['input','adv-MstdNum-q3', 'AY 2021-2022', 'number'];
          const in_adv_MstdNum_q4 = ['input','adv-MstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_MstdNum_q1, in_adv_MstdNum_q2, in_adv_MstdNum_q3, in_adv_MstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('DISSERTATION', 'form-container1');
          const in_adv_DstdNum_q1 = ['input','adv-DstdNum-q1', 'AY 2019-2020', 'number'];
          const in_adv_DstdNum_q2 = ['input','adv-DstdNum-q2', 'AY 2020-2021', 'number'];
          const in_adv_DstdNum_q3 = ['input','adv-DstdNum-q3', 'AY 2021-2022', 'number'];
          const in_adv_DstdNum_q4 = ['input','adv-DstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_DstdNum_q1, in_adv_DstdNum_q2, in_adv_DstdNum_q3, in_adv_DstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container1');
        
        
        // Panel -----------------------------------------------------
        createDynamicLabel('SPECIAL/CAPSTONE PROJECT', 'form-container2');
          const in_pan_CstdNum_q1 = ['input','adv-CstdNum-q1', 'AY 2019-2020', 'number'];
          const in_pan_CstdNum_q2 = ['input','adv-CstdNum-q2', 'AY 2020-2021', 'number'];
          const in_pan_CstdNum_q3 = ['input','adv-CstdNum-q3', 'AY 2021-2022', 'number'];
          const in_pan_CstdNum_q4 = ['input','adv-CstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_adv_CstdNum_q1, in_adv_CstdNum_q2, in_adv_CstdNum_q3, in_adv_CstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('UNDERGRADUATE THESIS', 'form-container2');
          const in_pan_UstdNum_q1 = ['input','adv-UstdNum-q1', 'AY 2019-2020', 'number'];
          const in_pan_UstdNum_q2 = ['input','adv-UstdNum-q2', 'AY 2020-2021', 'number'];
          const in_pan_UstdNum_q3 = ['input','adv-UstdNum-q3', 'AY 2021-2022', 'number'];
          const in_pan_UstdNum_q4 = ['input','adv-UstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_pan_UstdNum_q1, in_pan_UstdNum_q2, in_pan_UstdNum_q3, in_pan_UstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('MASTERS THESIS', 'form-container2');
          const in_pan_MstdNum_q1 = ['input','adv-MstdNum-q1', 'AY 2019-2020', 'number'];
          const in_pan_MstdNum_q2 = ['input','adv-MstdNum-q2', 'AY 2020-2021', 'number'];
          const in_pan_MstdNum_q3 = ['input','adv-MstdNum-q3', 'AY 2021-2022', 'number'];
          const in_pan_MstdNum_q4 = ['input','adv-MstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_pan_MstdNum_q1, in_pan_MstdNum_q2, in_pan_MstdNum_q3, in_pan_MstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('DISSERTATION', 'form-container2');
          const in_pan_DstdNum_q1 = ['input','adv-DstdNum-q1', 'AY 2019-2020', 'number'];
          const in_pan_DstdNum_q2 = ['input','adv-DstdNum-q2', 'AY 2020-2021', 'number'];
          const in_pan_DstdNum_q3 = ['input','adv-DstdNum-q3', 'AY 2021-2022', 'number'];
          const in_pan_DstdNum_q4 = ['input','adv-DstdNum-q4', 'AY 2022-2023', 'number'];
          wrapElements([in_pan_DstdNum_q1, in_pan_DstdNum_q2, in_pan_DstdNum_q3, in_pan_DstdNum_q4], 'w-full md:w-1/4 px-3 mb-6 md:mb-0', 'form-container2');
        

        // Mentor ----------------------------------------------------
        const in_ment_compeName = ['input','ment-compeName', 'Name of Academic Competition', 'text'];
        const in_ment_sponsorOrg = ['input','ment-sponsorOrg', 'Name of Sponsor Organization', 'text'];
        const in_ment_awardName = ['input','ment-awardName', 'Award Received', 'text'];
        const in_ment_awardDate = ['input','ment-awardDate', 'Date Awarded', 'date'];

        wrapElements([in_ment_compeName], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_ment_sponsorOrg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_ment_awardName, in_ment_awardDate], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
    }
}