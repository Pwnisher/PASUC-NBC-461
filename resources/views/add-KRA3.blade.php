<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Supporting Documents</title>

        @vite('resources/css/app.css')
        <script src="{{ asset('js/addDocs.js') }}"></script>
    </head>
<script>

// CHANGE CONTENT PER CRITERIA OPTION
function showAddForm(option) {
    var addPageTitle = document.getElementById("add_page_title");
    var addPageKRA = document.getElementById("add_page_kra");
    var part1 = document.getElementById('form-container1'); var part2 = document.getElementById('form-container2');
    var part3 = document.getElementById('form-container3'); var part4 = document.getElementById('form-container4');
    var part5 = document.getElementById('form-container5'); var part6 = document.getElementById('form-container6');

    // Clear the elements in dynamic form and category container
    clearFormContainer('form-container1'); clearFormContainer('form-container2'); clearFormContainer('form-container3'); 
    clearFormContainer('form-container4'); clearFormContainer('form-container5'); clearFormContainer('form-container6');
    clearFormContainer('category-container');

    // Hide all parts initially
    part1.style.display = 'none'; part2.style.display = 'none'; part3.style.display = 'none';
    part4.style.display = 'none'; part5.style.display = 'none'; part6.style.display = 'none';

    if (option === "criterionA") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion A: Service to the Institution";
        addPageKRA.innerHTML = "KRA III - EXTENSION SERVICES";
        
        // KRA 3 : Criterion A Categories
        const sel_kra3_cA = ['select','sel_kra3_cA', 'Type of Service to the Institution:', [
            { value: 'part1', label: 'Linkages/Networking/Partnership activity' },
            { value: 'part2', label: 'Total Contribution to Income Generation' }
        ]]; 
        wrapElements([sel_kra3_cA], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');
        
        // Event Listener
        const kra3_cA = document.getElementById('sel_kra3_cA');
        kra3_cA.addEventListener('change', function() {
        var categ_kra3_cA = kra3_cA.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none';

            // Show the selected part
            if (categ_kra3_cA === 'part1') part1.style.display = 'block';
            else if (categ_kra3_cA === 'part2') part2.style.display = 'block';
        });
        
      // Linkages/Networking/Partnership activity -------------------------------------
        const in_partner_name = ['input','partner_name', 'Name of Partner', 'text'];
        const in_partner_nature = ['input','partner_nature', 'Nature of Partnership', 'text'];
        const sel_partner_role = ['select','partner_role', 'Faculty Role in the Forging of Partnership', [
            { value: 'Lead Coordinator', label: 'Lead Coordinator' },
            { value: 'Assistant Coordinator', label: 'Assistant Coordinator' }
        ]]; 
        const in_partner_moaS = ['input','partner_moaS', 'Start', 'date'];
        const in_partner_moaE = ['input','partner_moaE', 'Expiration', 'date'];
        const in_partner_act = ['input','partner_act', 'Activities Conducted Based on MOA', 'text'];
        const in_partner_date = ['input','partner_date', 'Date of Activity', 'date'];

        wrapElements([in_partner_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_partner_nature, sel_partner_role], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
            createDynamicLabel('MOA', 'form-container1');
        wrapElements([in_partner_moaS, in_partner_moaE], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_partner_act], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_partner_date], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('partner_SD1', 'Copy of MOA', 'form-container1');
        createDynamicCheckbox('partner_SD2', 'Certification from the President that the partnership was initiated/implemented successfully by the faculty', 'form-container1');
        createDynamicCheckbox('partner_SD3', 'Copy of implementation report or activity terminal report', 'form-container1');
        
        
      // Total Contribution to Income Generation -----------------------------------
        const in_contriIn_name = ['input','contriIn_name', 'Name of Commercialized Product, Funded Project, or Project with Industry', 'text'];
        const in_contriIn_role = ['select','contriIn_role', 'Role', [
            { value: 'Lead Contributor', label: 'Lead Contributor' },
            { value: 'Co-Contributor', label: 'Co-Contributor' }
        ]];
        const in_contriIn_perS = ['input','contriIn_perS', 'Start', 'date'];
        const in_contriIn_perE = ['input','contriIn_perE', 'End', 'date'];
        const in_contriIn_amt = ['input','contriIn_amt', 'Total Amount', 'text'];

        wrapElements([in_contriIn_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_contriIn_role], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
          createDynamicLabel('Coverage Period', 'form-container2');
        wrapElements([in_contriIn_perS, in_contriIn_perE], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_contriIn_amt], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
          
        createDynamicLabel('Supporting Documents', 'form-container2');
        createDynamicCheckbox('contriIn_SD1', 'Copy of financial reports showing income generated from the sale of the product developed by the faculty', 'form-container2');
        createDynamicCheckbox('contriIn_SD2', 'Certification from the President acknowledging the faculty’s contribution to income generation', 'form-container2');
        
    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion B: Service to the Community";
        addPageKRA.innerHTML = "KRA III - EXTENSION SERVICES";

        // KRA 3 : Criterion B Categories
        const sel_kra3_cB = ['select','sel_kra3_cB', 'Type of Services:', [
            { value: 'part1', label: 'Services in Accreditation, Evaluation, Assessment Works, and other related Educational Quality Assurance Activities' },
            { value: 'part2', label: 'Services as Judge/Examiner for Local/International Research Awards and Academic Competitions' },
            { value: 'part3', label: 'Services rendered as a short-term consultant/expert' },
            { value: 'part4', label: 'Services through Media' },
            { value: 'part5', label: 'For every hour of training Course/Seminar/Workshop conducted as Resource Person/Convenor/Facilitator/ Moderator/Keynote Speaker/ Plenary Speaker/Panelist' },
            { value: 'part6', label: 'For every service-oriented project in the community participated in including advocacy initiatives.' }
        ]]; 
        wrapElements([sel_kra3_cB], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');

        // Event Listener
        const kra3_cB = document.getElementById('sel_kra3_cB');
        kra3_cB.addEventListener('change', function() {
        var categ_kra3_cB = kra3_cB.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none'; part3.style.display = 'none';
            part4.style.display = 'none'; part5.style.display = 'none'; part6.style.display = 'none';

            // Show the selected part
            if (categ_kra3_cB === 'part1') part1.style.display = 'block'; else if (categ_kra3_cB === 'part2') part2.style.display = 'block';
            else if (categ_kra3_cB === 'part3') part3.style.display = 'block'; else if (categ_kra3_cB === 'part4') part4.style.display = 'block';
            else if (categ_kra3_cB === 'part5') part5.style.display = 'block'; else if (categ_kra3_cB === 'part6') part6.style.display = 'block';
        });


      // Accreditation, Evaluation, Assessment Works, and other related -------------------------------------
        const in_accred_agency = ['input','accred_agency', 'Name of Agency/Organization', 'text'];
        const in_accred_perS = ['input','accred_perS', 'Start', 'date'];
        const in_accred_perE = ['input','accred_perE', 'End', 'date'];
        const in_accred_QAserv = ['input','accred_QAserv', 'QA-related Services Provided', 'text'];
        const sel_accred_scope = ['select','accred_scope', 'Scope', [
            { value: 'Local', label: 'Local' },
            { value: 'International', label: 'International' }
        ]];
        const in_accred_deploy = ['input','accred_deploy', 'No. of Deployment', 'number'];

        wrapElements([in_accred_agency], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
            createDynamicLabel('Appointment Period', 'form-container1');
        wrapElements([in_accred_perS, in_accred_perE], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_accred_QAserv], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_accred_scope, in_accred_deploy], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        
        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('accred_SD1', 'Copy of appointment from the organization/agency', 'form-container1');
        createDynamicCheckbox('accred_SD2', 'Copy of proof of engagement (e.g. certificate of participation)', 'form-container1');
        

      // Judge/Examiner for Local/International ------------------------------------------------------------
        const in_judge_title = ['input','judge_title', 'Title of the Event/Activity', 'text'];
        const in_judge_org = ['input','judge_org', 'Organizer', 'text'];
        const in_judge_date = ['input','judge_date', 'Date of the Event', 'date'];
        const sel_judge_nature = ['select','judge_nature', 'Nature of the Award', [
            { value: 'Academic Competition', label: 'Academic Competition' },
            { value: 'Research Award', label: 'Research Award' }
        ]];
        const in_judge_venue = ['input','judge_venue', 'Venue', 'text'];
        
        wrapElements([in_judge_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_judge_org], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_judge_date, sel_judge_nature], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_judge_venue], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');

        createDynamicLabel('Supporting Documents', 'form-container2');
        createDynamicCheckbox('judge_SD1', 'Copy of proof of engagement (e.g. official invitation, certificate of appreciation)', 'form-container2');
        

      // Short-term Consultant/Expert ----------------------------------------------------------------------
        const in_consult_title = ['input','consult_title', 'Title of the Project/Consultancy', 'text'];
        const in_consult_org = ['input','consult_org', 'Name of Organization', 'text'];
        const in_consult_perS = ['input','consult_perS', 'Start', 'date'];
        const in_consult_perE = ['input','consult_perE', 'End', 'date'];
        const sel_consult_scope = ['select','consult_scope', 'Scope', [
              { value: 'Local', label: 'Local' },
              { value: 'International', label: 'International' }
        ]];
        const in_consult_role = ['input','consult_role', 'Role', 'text'];

        wrapElements([in_consult_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_consult_org], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
          createDynamicLabel('Period of Engagement', 'form-container3');
        wrapElements([in_consult_perS, in_consult_perE], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_consult_role], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');

        createDynamicLabel('Supporting Documents', 'form-container3');
        createDynamicCheckbox('consult_SD1', 'Copy of contract of service or its equivalent', 'form-container3');
        createDynamicCheckbox('consult_SD2', 'Copy of proof of engagement', 'form-container3');
        
      
      // Services through Media ----------------------------------------------------------------------------
        createDynamicLabel('Writer of Occassional Newspaper Column', 'form-container4');
          const in_med_name_oc = ['input','med_name_oc', 'Name of Media', 'text'];
          const in_med_title_oc = ['input','med_title_oc', 'Title of Newspaper Column or TV/Radio Program', 'text'];
          const in_med_perS_oc = ['input','med_perS_oc', 'Engagement - Start', 'date'];
          const in_med_perE_oc = ['input','med_perE_oc', 'Engagement - End', 'date'];
          const in_med_eng_oc = ['input','med_eng_oc', 'No. of Engagements', 'number'];
          wrapElements([in_med_name_oc], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
          wrapElements([in_med_title_oc], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
          wrapElements([in_med_perS_oc, in_med_perE_oc, in_med_eng_oc], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'form-container4');

        createDynamicLabel('Writer of Regular Newspaper Column', 'form-container4');
          const in_med_name_reg = ['input','med_name_reg', 'Name of Media', 'text'];
          const in_med_title_reg = ['input','med_title_reg', 'Title of Newspaper Column or TV/Radio Program', 'text'];
          const in_med_perS_reg = ['input','med_perS_reg', 'Engagement - Start', 'date'];
          const in_med_perE_reg = ['input','med_perE_reg', 'Engagement - End', 'date'];
          const in_med_eng_reg = ['input','med_eng_reg', 'No. of Engagements', 'number'];
          wrapElements([in_med_name_reg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
          wrapElements([in_med_title_reg], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
          wrapElements([in_med_perS_reg, in_med_perE_reg, in_med_eng_reg], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'form-container4');

        createDynamicLabel('Host of TV/Radio Program', 'form-container4');
          const in_med_name_host = ['input','med_name_host', 'Name of Media', 'text'];
          const in_med_title_host = ['input','med_title_host', 'Title of Newspaper Column or TV/Radio Program', 'text'];
          const in_med_perS_host = ['input','med_perS_host', 'Engagement - Start', 'date'];
          const in_med_perE_host = ['input','med_perE_host', 'Engagement - End', 'date'];
          const in_med_eng_host = ['input','med_eng_host', 'No. of Engagements', 'number'];
          wrapElements([in_med_name_host], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
          wrapElements([in_med_title_host], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
          wrapElements([in_med_perS_host, in_med_perE_host, in_med_eng_host], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'form-container4');

        createDynamicLabel('Guesting as Technical Expert for TV or Radio', 'form-container4');
          const in_med_name_guest = ['input','med_name_guest', 'Name of Media', 'text'];
          const in_med_title_guest = ['input','med_title_guest', 'Title of Newspaper Column or TV/Radio Program', 'text'];
          const in_med_perS_guest = ['input','med_perS_guest', 'Engagement - Start', 'date'];
          const in_med_perE_guest = ['input','med_perE_guest', 'Engagement - End', 'date'];
          const in_med_eng_guest = ['input','med_eng_guest', 'No. of Engagements', 'number'];
          wrapElements([in_med_name_guest], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
          wrapElements([in_med_title_guest], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
          wrapElements([in_med_perS_guest, in_med_perE_guest, in_med_eng_guest], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'form-container4');
        
        createDynamicLabel('Supporting Documents', 'form-container4');
        createDynamicCheckbox('med_SD1', 'Copy of the newspaper article for Writer of Occasional Newspaper Column', 'form-container4');
        createDynamicCheckbox('med_SD2', 'Copy of compiled articles for Writer of Regular Newspaper Column', 'form-container4');
        createDynamicCheckbox('med_SD3', 'Copy of contract, invitation letter, or similar documents for Host of TV/Radio Program', 'form-container4');
        createDynamicCheckbox('med_SD4', 'Copy of Invitation letter for Guesting as Technical Expert', 'form-container4');


      // For every hour of training Course/Seminar/Workshop ------------------------------------------------
        const in_train_title = ['input','train_title', 'Title of the Training', 'text'];
        const in_train_type = ['input','train_type', 'Type of PArticipation', 'text'];
        const in_train_org = ['input','train_org', 'Organizer', 'text'];
        const in_train_perS = ['input','train_perS', 'Start Date', 'date'];
        const in_train_perE = ['input','train_perE', 'End Date', 'date'];
        const sel_train_scope = ['select','sel_train_scope', 'Scope', [
            { value: 'Local', label: 'Local' },
            { value: 'International', label: 'International' }
        ]];
        const in_train_hrs = ['input','train_hrs', 'Total No. of Hours', 'number'];

        wrapElements([in_train_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container5');
        wrapElements([in_train_type, in_train_org], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container5');
          createDynamicLabel('Period of Engagement', 'form-container5');
        wrapElements([in_train_perS, in_train_perE], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container5');
        wrapElements([sel_train_scope, in_train_hrs], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container5');

        createDynamicLabel('Supporting Documents', 'form-container5');
        createDynamicCheckbox('train_SD1', 'Copy of invitation letter', 'form-container5');
        createDynamicCheckbox('train_SD2', 'Copy of program', 'form-container5');
        createDynamicCheckbox('train_SD3', 'Copy of certificate of appreciation or similar documents', 'form-container5');

      
      // For every service-oriented project in the community -----------------------------------------------
        const in_servcom_act = ['input','servcom_act', 'Name of Community Extention Activity', 'text'];
        const in_servcom_com = ['input','servcom_com', 'Name of Community', 'text'];
        const in_servcom_ben = ['input','servcom_ben', 'No. of Beneficiary', 'number'];
        const sel_servcom_role = ['select','servcom_role', 'Role', [
            { value: 'Head', label: 'Head' },
            { value: 'Participant', label: 'Participant' }
        ]];
        const in_servcom_date = ['input','servcom_date', 'Activity Date', 'date'];

        wrapElements([in_servcom_act], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container6');
        wrapElements([in_servcom_com, in_servcom_ben], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container6');
        wrapElements([sel_servcom_role, in_servcom_date], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container6');

        createDynamicLabel('Supporting Documents', 'form-container6');
        createDynamicCheckbox('servcom_SD1', 'Copy of approval for the conduct of the outreach or extension activity/ project/ program (governing board resolution, memorandum, official communication, etc.)', 'form-container6');
        createDynamicCheckbox('servcom_SD2', 'Copy of appointment/designation as head of the activity/project/program', 'form-container6');
        createDynamicCheckbox('servcom_SD3', 'Copy of extension activity/project/program report', 'form-container6');

    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion C: Quality of Extension Services";
        addPageKRA.innerHTML = "KRA III - EXTENSION SERVICES";

        part1.style.display = 'block';

        // Client Satisfaction Rating ---------------------------------------------------
        const in_cliSatRate_semDed = ['input','cliSatRate_semDed', 'Number of Semesters Deducted from the Divisor, If Applicable', 'number'];
        const sel_cliSatRate_reason = ['select','cliSatRate_reason', 'Reason for Reducing the Divisor', [
            { value: 'NOT APPLICABLE', label: 'NOT APPLICABLE' },
            { value: 'ON APPROVED STUDY LEAVE', label: 'ON APPROVED STUDY LEAVE' },
            { value: 'ON APPROVED SABBATICAL LEAVE', label: 'ON APPROVED SABBATICAL LEAVE' },
            { value: 'ON APPROVED MATERNITY LEAVE', label: 'ON APPROVED MATERNITY LEAVE' }
        ]]
        // Note: need flexible
        const in_cliSatRate_1sem_q1 = ['input','cliSatRate_1sem_q1', '1ST SEMESTER', 'number'];
        const in_cliSatRate_2sem_q1 = ['input','cliSatRate_2sem_q1', '2ND SEMESTER', 'number'];

        const in_cliSatRate_1sem_q2 = ['input','cliSatRate_1sem_q2', '1ST SEMESTER', 'number'];
        const in_cliSatRate_2sem_q2 = ['input','cliSatRate_2sem_q2', '2ND SEMESTER', 'number'];

        const in_cliSatRate_1sem_q3 = ['input','cliSatRate_1sem_q3', '1ST SEMESTER', 'number'];
        const in_cliSatRate_2sem_q3 = ['input','cliSatRate_2sem_q3', '2ND SEMESTER', 'number'];

        const in_cliSatRate_1sem_q4 = ['input','cliSatRate_1sem_q4', '1ST SEMESTER', 'number'];
        const in_cliSatRate_2sem_q4 = ['input','cliSatRate_2sem_q4', '2ND SEMESTER', 'number'];

        // Note: need id in label
        wrapElements([in_cliSatRate_semDed], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_cliSatRate_reason], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('AY 2019-2020', 'form-container1');
        wrapElements([in_cliSatRate_1sem_q1, in_cliSatRate_2sem_q1], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('AY 2020-2021', 'form-container1');
        wrapElements([in_cliSatRate_1sem_q2, in_cliSatRate_2sem_q2], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('AY 2021-2022', 'form-container1');
        wrapElements([in_cliSatRate_1sem_q3, in_cliSatRate_2sem_q3], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('AY 2022-2023', 'form-container1');
        wrapElements([in_cliSatRate_1sem_q4, in_cliSatRate_2sem_q4 ], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('cliSatRate_SD1', 'Summary of satisfaction/ evaluation ratings per evaluation period of the outreach and extension activities and its computed average using prescribed template', 'form-container1');
      
    }
    else if (option === "criterionD") { //------------------------------------------------------------------
      addPageTitle.innerHTML = "Criterion D: Bonus Criterion";
        addPageKRA.innerHTML = "KRA III - EXTENSION SERVICES";

        part1.style.display = 'block';

        // Highest Administrative Designation Held ---------------------------------------------------
        const sel_adminDesig_Desig = ['select','adminDesig_Desig', 'Designation', [
            { value: 'President or OIC President', label: 'President or OIC President' },
            { value: 'Vice-President', label: 'Vice-President' },
            { value: 'Chancellor', label: 'Chancellor' },
            { value: 'Vice-Chancellor', label: 'Vice-Chancellor' },
            { value: 'Campus Director/Administrator/Head', label: 'Campus Director/Administrator/Head' },
            { value: 'Faculty Regent', label: 'Faculty Regent' },
            { value: 'Office Director', label: 'Office Director' },
            { value: 'University/College Secretary', label: 'University/College Secretary' },
            { value: 'Project Head', label: 'Project Head' },
            { value: 'Institution-Level Committee Chair', label: 'Institution-Level Committee Chair' },
            { value: 'Institution-Level Committee Member', label: 'Institution-Level Committee Member' },
            { value: 'Dean', label: 'Dean' },
            { value: 'Associate Dean', label: 'Associate Dean' },
            { value: 'College Secretary', label: 'College Secretary' },
            { value: 'Department Head', label: 'Department Head' },
            { value: 'Program Chair/Project Head', label: 'Program Chair/Project Head' },
            { value: 'Department-level Committee Chair', label: 'Department-level Committee Chair' },
            { value: 'Department-level Committee Member', label: 'Department-level Committee Member' }
        ]]
        const in_adminDesig_perS = ['input','adminDesig_perS', 'Start', 'date'];
        const in_adminDesig_perE = ['input','adminDesig_perE', 'End', 'date'];

        wrapElements([sel_adminDesig_Desig], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
          createDynamicLabel('Effectivity Period', 'form-container1');
        wrapElements([in_adminDesig_perS, in_adminDesig_perE], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');

        createDynamicLabel('Supporting Documents', 'form-container1');
        createDynamicCheckbox('adminDesig_SD1', 'Copy of Appointment or Designation with effectivity period (e.g. memorandum order, appointment letter, board resolution, notice of designation, etc.)', 'form-container1');
        createDynamicCheckbox('adminDesig_SD1', 'Copy of accomplishment report per designation duly submitted to the authorized official/supervisor', 'form-container1');
        
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
                <div id="form-container4" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                <div id="form-container5" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                <div id="form-container6" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
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



