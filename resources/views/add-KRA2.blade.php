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
    var part1 = document.getElementById('form-container1'); var part2 = document.getElementById('form-container2');
    var part3 = document.getElementById('form-container3'); var part4 = document.getElementById('form-container4');
    var part5 = document.getElementById('form-container5'); var part6 = document.getElementById('form-container6');

    var part7 = document.getElementById('form-container7'); var part8 = document.getElementById('form-container8');
    var part9 = document.getElementById('form-container9'); var part10 = document.getElementById('form-container10');
    var part11 = document.getElementById('form-container11'); 

    // Clear the elements in dynamic form and category container
    clearFormContainer('form-container1'); clearFormContainer('form-container2'); clearFormContainer('form-container3'); 
    clearFormContainer('form-container4'); clearFormContainer('form-container5'); clearFormContainer('form-container6');
    clearFormContainer('form-container7'); clearFormContainer('form-container8'); clearFormContainer('form-container9'); 
    clearFormContainer('form-container10'); clearFormContainer('form-container11'); 
    clearFormContainer('category-container');

    if (option === "criterionA") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion A: Research Output Published";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";

        // KRA 2 : Criterion A Categories
        const sel_kra2_cA = ['select','sel_kra2_cA', 'Type of Research Outputs:', [
            { value: 'part1', label: 'Research Outputs Published - Sole Authorship' }, { value: 'part2', label: 'Research Outputs Published - Co-Authorship' },
            { value: 'part3', label: 'Research Outputs Translated - Lead Researcher' }, { value: 'part4', label: 'Research Outputs Translated - Contributor' },
            { value: 'part5', label: 'Research Publication Cited - Local Authors' }, { value: 'part6', label: 'Research Publication Cited - International Authors' }
        ]]; 
        wrapElements([sel_kra2_cA], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');
        
        // Event Listener
        const kra2_cA = document.getElementById('sel_kra2_cA');
        kra2_cA.addEventListener('change', function() {
        var categ_kra2_cA = kra2_cA.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none'; part3.style.display = 'none';
            part4.style.display = 'none'; part5.style.display = 'none'; part6.style.display = 'none';

            // Show the selected part
            if (categ_kra2_cA === 'part1') part1.style.display = 'block'; else if (categ_kra2_cA === 'part2') part2.style.display = 'block';
            else if (categ_kra2_cA === 'part3') part3.style.display = 'block'; else if (categ_kra2_cA === 'part4') part4.style.display = 'block';
            else if (categ_kra2_cA === 'part5') part5.style.display = 'block'; else if (categ_kra2_cA === 'part6') part6.style.display = 'block';
        });

      // Research Output Published --------------------------------------------------------------------
        // Sole Authorship --------------------------------------------
        const in_rePub_title_sole = ['input', 'rePub-title-sole', 'Title of Research Ouput', 'text'];
        const sel_rePub_type_sole = [
          'select', 'rePub-type-sole', 'Type of Research Ouput', [
            { value: 'Book', label: 'Book' },
            { value: 'Journal Article', label: 'Journal Article' },
            { value: 'Book Chapter', label: 'Book Chapter' },
            { value: 'Monograph', label: 'Monograph' },
            { value: 'Other Peer-reviewed Scholarly Output', label: 'Other Peer-reviewed Scholarly Output' }
        ]];
        const in_rePub_journal_sole = ['input', 'rePub-journal-sole', 'Name of Journal/Publisher', 'text'];
        const in_rePub_reviewer_sole = ['input','rePub-reviewer-sole', 'Reviewer or its Equivalent', 'text'];
        const in_rePub_intIndex_sole = ['input','rePub-intIndex-sole', 'Intl. Indexing Body', 'text'];
        const in_rePub_datePubl_sole = ['input','rePub-datePubl-sole', 'Date Published', 'date'];

        wrapElements([in_rePub_title_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_rePub_type_sole, in_rePub_journal_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_rePub_reviewer_sole, in_rePub_intIndex_sole, in_rePub_datePubl_sole], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'form-container1');
        
        // Co Authorship ----------------------------------------------
        //Note: not sure if ^ should be repeated
        const in_rePub_title_co = ['input', 'rePub-title-co', 'Title of Research Ouput', 'text'];
        const sel_rePub_type_co = [
          'select', 'rePub-type-co', 'Type of Research Ouput', [
            { value: 'Book', label: 'Book' },
            { value: 'Journal Article', label: 'Journal Article' },
            { value: 'Book Chapter', label: 'Book Chapter' },
            { value: 'Monograph', label: 'Monograph' },
            { value: 'Other Peer-reviewed Scholarly Output', label: 'Other Peer-reviewed Scholarly Output' }
        ]];
        const in_rePub_journal_co = ['input', 'rePub-journal-co', 'Name of Journal/Publisher', 'text'];
        const in_rePub_reviewer_co = ['input','rePub-reviewer-co', 'Reviewer or its Equivalent', 'text'];
        const in_rePub_intIndex_co = ['input','rePub-intIndex-co', 'Intl. Indexing Body', 'text'];
        const in_rePub_datePubl_co = ['input','rePub-datePubl-co', 'Date Published', 'date'];

        const in_rePub_contri_co = ['input','rePub-contri-co', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_rePub_title_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([sel_rePub_type_co, in_rePub_journal_co], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_rePub_reviewer_co, in_rePub_intIndex_co, in_rePub_datePubl_co], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'form-container2');
        
        wrapElements([in_rePub_contri_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        

      // Research Output Translated --------------------------------------------------------------------
        // Lead Researcher --------------------------------------------
        const in_reTrans_title_lead = ['input','reTrans-title-lead', 'Title of Research', 'text'];
        const in_reTrans_dateComp_lead = ['input','reTrans-dateComp-lead', 'Date Completed', 'date'];
        const in_reTrans_namePPP_lead = ['input','reTrans-namePPP-lead', 'Name of Project, Policy, or Product', 'text'];
        const in_reTrans_fundSource_lead = ['input','reTrans-fundSource-lead', 'Funding Source', 'text'];
        const in_reTrans_dateIAD_lead = ['input','reTrans-dateIAD-lead', 'Date Implemented, Adopted, or Developed', 'date'];

        wrapElements([in_reTrans_title_lead], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_reTrans_dateComp_lead], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_reTrans_namePPP_lead, in_reTrans_fundSource_lead], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_reTrans_dateIAD_lead], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');

        // Contributor ------------------------------------------------
        //Note: not sure if ^ should be repeated
        const in_reTrans_title_co = ['input','reTrans-title-co', 'Title of Research', 'text'];
        const in_reTrans_dateComp_co = ['input','reTrans-dateComp-co', 'Date Completed', 'date'];
        const in_reTrans_namePPP_co = ['input','reTrans-namePPP-co', 'Name of Project, Policy, or Product', 'text'];
        const in_reTrans_fundSource_co = ['input','reTrans-fundSource-co', 'Funding Source', 'text'];
        const in_reTrans_dateIAD_co = ['input','reTrans-dateIAD-co', 'Date Implemented, Adopted, or Developed', 'date'];

        const in_reTrans_contri_co = ['input','reTrans-contri-co', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_reTrans_title_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_reTrans_dateComp_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_reTrans_namePPP_co, in_reTrans_fundSource_co], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_reTrans_dateIAD_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        
        wrapElements([in_reTrans_contri_co], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
      

      // Research Output Cited -------------------------------------------------------------------------
        // Local Authors ----------------------------------------------
        const in_reCited_titleJA_loc = ['input','reCited-titleJA-loc', 'Title of Journal Article', 'text'];
        const in_reCited_datePubl_loc = ['input','reCited-datePubl-loc', 'Date Published', 'date'];
        const in_reCited_nameJ_loc = ['input','reCited-nameJ-loc', 'Name of Journal', 'text'];
        const in_reCited_citeNo_loc = ['input','reCited-citeNo-loc', 'No. of Citation', 'text'];
        const in_reCited_citeIndex_loc = ['input','reCited-citeIndex-loc', 'Citation Index', 'text'];
        const in_reCited_citeYears_loc = ['input','reCited-citeYears-loc', 'Year/s Citation Published', 'text'];

        wrapElements([in_reCited_titleJA_loc], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container5');
        wrapElements([in_reCited_datePubl_loc], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container5');
        wrapElements([in_reCited_nameJ_loc], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container5');
        wrapElements([in_reCited_citeNo_loc, in_reCited_citeIndex_loc, in_reCited_citeYears_loc], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'form-container5');

        // International Authors --------------------------------------
        //Note: not sure if ^ should be repeated (completely same lng) 
        const in_reCited_titleJA_intl = ['input','reCited-titleJA-intl', 'Title of Journal Article', 'text'];
        const in_reCited_datePubl_intl = ['input','reCited-datePubl-intl', 'Date Published', 'date'];
        const in_reCited_nameJ_intl = ['input','reCited-nameJ-intl', 'Name of Journal', 'text'];
        const in_reCited_citeNo_intl = ['input','reCited-citeNo-intl', 'No. of Citation', 'text'];
        const in_reCited_citeIndex_intl = ['input','reCited-citeIndex-intl', 'Citation Index', 'text'];
        const in_reCited_citeYears_intl = ['input','reCited-citeYears-intl', 'Year/s Citation Published', 'text'];

        wrapElements([in_reCited_titleJA_intl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container6');
        wrapElements([in_reCited_datePubl_intl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container6');
        wrapElements([in_reCited_nameJ_intl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container6');
        wrapElements([in_reCited_citeNo_intl, in_reCited_citeIndex_intl, in_reCited_citeYears_intl], 'w-full md:w-1/3 px-3 mb-6 md:mb-0', 'form-container6');

    } 
    else if (option === "criterionB") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion B: Inventions";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";

        // KRA 2 : Criterion B Categories
        const sel_kra2_cB = ['select','sel_kra2_cB', 'Type of Inventions:', [
            { value: 'part1', label: 'Invention Patents - Sole Inventor' }, { value: 'part2', label: 'Invention Patents - Multiple Inventors' },
            { value: 'part3', label: 'Utility Models and Industrial Designs - Sole Inventor' }, { value: 'part4', label: 'Utility Models and Industrial Designs - Multiple Inventors' },
            { value: 'part5', label: 'Commercialized Patented Products - Local' }, { value: 'part6', label: 'Commercialized Patented Producs - International' },
            { value: 'part7', label: 'New Software Products - Sole Developer' }, { value: 'part8', label: 'New Software Products - Multiple Developers' },
            { value: 'part9', label: 'Updated Software Products' }, { value: 'part10', label: 'New Variety/Breed/Strains - Sole Developer' },
            { value: 'part11', label: 'New Variety/Breed/Strains - Multiple Developers' }
        ]]; 
        wrapElements([sel_kra2_cB], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');
        
        // Event Listener
        const kra2_cB = document.getElementById('sel_kra2_cB');
        kra2_cB.addEventListener('change', function() {
        var categ_kra2_cB = kra2_cB.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none'; part3.style.display = 'none';
            part4.style.display = 'none'; part5.style.display = 'none'; part6.style.display = 'none';
            part7.style.display = 'none'; part8.style.display = 'none'; part9.style.display = 'none';
            part10.style.display = 'none'; part11.style.display = 'none'; 

            // Show the selected part
            if (categ_kra2_cB === 'part1') part1.style.display = 'block'; else if (categ_kra2_cB === 'part2') part2.style.display = 'block';
            else if (categ_kra2_cB === 'part3') part3.style.display = 'block'; else if (categ_kra2_cB === 'part4') part4.style.display = 'block';
            else if (categ_kra2_cB === 'part5') part5.style.display = 'block'; else if (categ_kra2_cB === 'part6') part6.style.display = 'block';
            else if (categ_kra2_cB === 'part7') part7.style.display = 'block'; else if (categ_kra2_cB === 'part8') part8.style.display = 'block';
            else if (categ_kra2_cB === 'part9') part9.style.display = 'block'; else if (categ_kra2_cB === 'part10') part10.style.display = 'block';
            else if (categ_kra2_cB === 'part11') part11.style.display = 'block'; 
        });
      
      
      // PATENTED --------------------------------------------------------------------------------------------------
      // Invention Patents ------------------------------------------
        // Sole Inventor ----------------------------------------------
        const in_invP_name_sole = ['input','invP-name-sole', 'Name of the Invention', 'text'];
        const in_invP_appDate_sole = ['input','invP-appDate-sole', 'Application Date', 'date'];
        const sel_invP_appStage_sole = ['select','invP-appStage-sole', 'Patent Application Stage', [
            { value: 'Accepted', label: 'Accepted' },
            { value: 'Published', label: 'Published' },
            { value: 'Granted', label: 'Granted' }
        ]];
        const in_invP_dateAPG_sole = ['input','invP-dateAPG-sole', 'Date Accepted, Published, or Granted', 'date'];

        wrapElements([in_invP_name_sole, in_invP_appDate_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_invP_appStage_sole, in_invP_dateAPG_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');

        // Multiple Inventors -----------------------------------------
        //Note: not sure if ^ should be repeated
        const in_invP_name_mult = ['input','invP-name-mult', 'Name of the Invention', 'text'];
        const in_invP_appDate_mult = ['input','invP-appDate-mult', 'Application Date', 'date'];
        const sel_invP_appStage_mult = ['select','invP-appStage-mult', 'Patent Application Stage', [
            { value: 'Accepted', label: 'Accepted' },
            { value: 'Published', label: 'Published' },
            { value: 'Granted', label: 'Granted' }
        ]];
        const in_invP_dateAPG_mult = ['input','invP-dateAPG-mult', 'Date Accepted, Published, or Granted', 'date'];
        const in_invP_contri_mult = ['input','invP-contri-mult', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_invP_name_mult, in_invP_appDate_mult], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([sel_invP_appStage_mult, in_invP_dateAPG_mult], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_invP_contri_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');


      // Utility Models and Industrial Designs ----------------------
        // Sole Inventor ----------------------------------------------
        const in_umidP_name_sole = ['input','umidP-name-sole', 'Name of the Invention', 'text'];
        const sel_umidP_type_sole = ['select','umidP-type-sole', 'Type of Patent', [
            { value: 'Utility Model', label: 'Utility Model' },
            { value: 'Industrial Design', label: 'Industrial Design' }
        ]];
        const in_umidP_dateApp_sole = ['input','umidP-dateApp-sole', 'Date of Application', 'date'];
        const in_umidP_dateGrant_sole = ['input','umidP-dateGrant-sole', 'Date Granted', 'date'];

        wrapElements([in_umidP_name_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([sel_umidP_type_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_umidP_dateApp_sole, in_umidP_dateGrant_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
        
        // Multiple Inventors -----------------------------------------
        //Note: not sure if ^ should be repeated
        const in_umidP_name_mult = ['input','umidP-name-mult', 'Name of the Invention', 'text'];
        const sel_umidP_type_mult = ['select','umidP-type-mult', 'Type of Patent', [
            { value: 'Utility Model', label: 'Utility Model' },
            { value: 'Industrial Design', label: 'Industrial Design' }
        ]];
        const in_umidP_dateApp_mult = ['input','umidP-dateApp-mult', 'Date of Application', 'date'];
        const in_umidP_dateGrant_mult = ['input','umidP-dateGrant-mult', 'Date Granted', 'date'];
        const in_umidP_contri_mult = ['input','umidP-contri-mult', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_umidP_name_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([sel_umidP_type_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_umidP_dateApp_mult, in_umidP_dateGrant_mult], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_umidP_contri_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');

        
      // Commercialized Patented ------------------------------------
        // Local ----------------------------------------------
        const in_comP_name_loc = ['input','comP-name-loc', 'Name of the Patented Product', 'text'];
        const in_comP_type_loc = ['input','comP-type-local', 'Type of Product', 'text'];
        const in_comP_datePat_loc = ['input','comP-datePat-loc', 'Date Patented', 'date'];
        const in_comP_dateCom_loc = ['input','comP-dateCom-loc', 'Date First Commercialized', 'date'];
        const in_comP_areaCom_loc = ['input','comP-areaCom-loc', 'Area/Place Commercialized', 'text'];

        wrapElements([in_comP_name_loc], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container5');
        wrapElements([in_comP_type_loc], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container5');
        wrapElements([in_comP_datePat_loc, in_comP_dateCom_loc], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container5');
        wrapElements([in_comP_areaCom_loc], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container5');

        // International --------------------------------------
        //Note: not sure if ^ should be repeated (completely same sa local)
        const in_comP_name_intl = ['input','comP-name-intl', 'Name of the Patented Product', 'text'];
        const in_comP_type_intl = ['input','comP-type-intl', 'Type of Product', 'text'];
        const in_comP_datePat_intl = ['input','comP-datePat-intl', 'Date Patented', 'date'];
        const in_comP_dateCom_intl = ['input','comP-dateCom-intl', 'Date First Commercialized', 'date'];
        const in_comP_areaCom_intl = ['input','comP-areaCom-intl', 'Area/Place Commercialized', 'text'];

        wrapElements([in_comP_name_intl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container6');
        wrapElements([in_comP_type_intl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container6');
        wrapElements([in_comP_datePat_intl, in_comP_dateCom_intl], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container6');
        wrapElements([in_comP_areaCom_intl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container6');



      // NON-PATENTABLE --------------------------------------------------------------------------------------------
      // New Software Products --------------------------------------
        // Sole Developer ---------------------------------------------
        const in_newspNP_name_sole = ['input','newspNP-name-sole', 'Name of the Software', 'text'];
        const in_newspNP_dateCop_sole = ['input','newspNP-dateCop-sole', 'Date Copyrighted', 'date'];
        const in_newspNP_dateUtil_sole = ['input','newspNP-dateUtil-sole', 'Date Utilized', 'date'];
        const in_newspNP_endUser_sole = ['input','newspNP-endUser-sole', 'Name of End User/s', 'text'];

        wrapElements([in_newspNP_name_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container7');
        wrapElements([in_newspNP_dateCop_sole, in_newspNP_dateUtil_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container7');
        wrapElements([in_newspNP_endUser_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container7');


        // Multiple Developer -----------------------------------------
        //Note: not sure if ^ should be repeated
        const in_newspNP_name_mult = ['input','newspNP-name-mult', 'Name of the Software', 'text'];
        const in_newspNP_dateCop_mult = ['input','newspNP-dateCop-mult', 'Date Copyrighted', 'date'];
        const in_newspNP_dateUtil_mult = ['input','newspNP-dateUtil-mult', 'Date Utilized', 'date'];
        const in_newspNP_endUser_mult = ['input','newspNP-endUser-mult', 'Name of End User/s', 'text'];
        const in_newspNP_contri_mult = ['input','newspNP-contri-mult', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_newspNP_name_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container8');
        wrapElements([in_newspNP_dateCop_mult, in_newspNP_dateUtil_mult], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container8');
        wrapElements([in_newspNP_endUser_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container8');

        wrapElements([in_newspNP_contri_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container8');

      // Updated Software Products ----------------------------------
        // Sole/Co Developer ------------------------------------------
        const in_upspNP_name = ['input','upspNP-name', 'Name of the Software', 'text'];
        const in_upspNP_dateCop = ['input','upspNP-dateCop', 'Date Copyrighted', 'date'];
        const in_upspNP_dateUtil = ['input','upspNP-dateUtil', 'Date Utilized', 'date'];
        const sel_upspNP_contri = ['select','upspNP-contri', 'Contribution', [
            { value: 'Sole Developer', label: 'Sole Developer' },
            { value: 'Co-Developer', label: 'Co-Developer' }
        ]];
        const in_upspNP_newFeat = ['input','upspNP-newFeat', 'Specify New Features', 'text'];
        const in_upspNP_endUser = ['input','upspNP-endUser', 'Name of End User/s', 'text'];

        wrapElements([in_upspNP_name], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container9');
        wrapElements([in_upspNP_dateCop, in_upspNP_dateUtil], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container9');
        wrapElements([sel_upspNP_contri], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container9');
        wrapElements([in_upspNP_newFeat], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container9');
        wrapElements([in_upspNP_endUser], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container9');


      // New Variety, Breed, Strain ---------------------------------
        // Sole Developer ---------------------------------------------
        const in_vbsNP_name_sole = ['input','vbsNP-name-sole', 'Name of the Plant Variety, Animal Breed, or Microbial Strain', 'text'];
        const in_vbsNP_type_sole = ['input','vbsNP-type-sole', 'Type (Plant, Animal, or Microbe)', 'text'];
        const in_vbsNP_dateComp_sole = ['input','vbsNP-dateComp-sole', 'Date Completed', 'date'];
        const in_vbsNP_dateReg_sole = ['input','vbsNP-dateReg-sole', 'Date Registered', 'date'];
        const in_vbsNP_dateProp_sole = ['input','vbsNP-dateProp-sole', 'Date of Propagation based on Certification', 'date'];
        
        wrapElements([in_vbsNP_name_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container10');
        wrapElements([in_vbsNP_type_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container10');
        wrapElements([in_vbsNP_dateComp_sole, in_vbsNP_dateReg_sole], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container10');
        wrapElements([in_vbsNP_dateProp_sole], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container10');
        
        // Multiple Developer -----------------------------------------
        //Note: not sure if ^ should be repeated
        const in_vbsNP_name_mult = ['input','vbsNP-name-mult', 'Name of the Plant Variety, Animal Breed, or Microbial Strain', 'text'];
        const in_vbsNP_type_mult = ['input','vbsNP-type-mult', 'Type (Plant, Animal, or Microbe)', 'text'];
        const in_vbsNP_dateComp_mult = ['input','vbsNP-dateComp-mult', 'Date Completed', 'date'];
        const in_vbsNP_dateReg_mult = ['input','vbsNP-dateReg-mult', 'Date Registered', 'date'];
        const in_vbsNP_dateProp_mult = ['input','vbsNP-dateProp-mult', 'Date of Propagation based on Certification', 'date'];
        const in_vbsNP_contri_mult = ['input','vbsNP-contri-mult', 'Percentage (%) Contribution', 'number'];

        wrapElements([in_vbsNP_name_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container11');
        wrapElements([in_vbsNP_type_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container11');
        wrapElements([in_vbsNP_dateComp_mult, in_vbsNP_dateReg_mult], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container11');
        wrapElements([in_vbsNP_dateProp_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container11');
        wrapElements([in_vbsNP_contri_mult], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container11');
        
        

        

    } 
    else if (option === "criterionC") { //------------------------------------------------------------------
        addPageTitle.innerHTML = "Criterion C: Creative Works";
        addPageKRA.innerHTML = "KRA II - RESEARCH, INVENTION, AND CREATIVE WORK";

        // KRA 2 : Criterion C Categories
        const sel_kra2_cC = ['select','sel_kra2_cC', 'Type of Creative Work:', [
            { value: 'part1', label: 'Creative Performing Artwork' }, { value: 'part2', label: 'Exhibition' },
            { value: 'part3', label: 'Juried or Peer-reviewed Designs' }, { value: 'part4', label: 'Literary Publications' }
        ]]; 
        wrapElements([sel_kra2_cC], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'category-container');
        
        // Event Listener
        const kra2_cC = document.getElementById('sel_kra2_cC');
        kra2_cC.addEventListener('change', function() {
        var categ_kra2_cC = kra2_cC.value;

            // Hide all parts initially
            part1.style.display = 'none'; part2.style.display = 'none'; 
            part3.style.display = 'none'; part4.style.display = 'none'; 

            // Show the selected part
            if (categ_kra2_cC === 'part1') part1.style.display = 'block'; else if (categ_kra2_cC === 'part2') part2.style.display = 'block';
            else if (categ_kra2_cC === 'part3') part3.style.display = 'block'; else if (categ_kra2_cC === 'part4') part4.style.display = 'block';
        });

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

        wrapElements([in_cpa_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([sel_cpa_type, sel_cpa_class], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_cpa_dateCop], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container1');
        wrapElements([in_cpa_venue, in_cpa_org], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container1');


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

        wrapElements([in_exh_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([sel_exh_type, sel_exh_class], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_exh_dateExh], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container2');
        wrapElements([in_exh_venue, in_exh_org], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container2');


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

        wrapElements([in_des_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([sel_des_class, in_des_reviewer], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_des_dateAct], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container3');
        wrapElements([in_des_venue, in_des_org], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container3');


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

        wrapElements([in_lit_title], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([sel_lit_type, in_lit_reviewer], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_lit_namePubli, in_lit_namePress], 'w-full md:w-1/2 px-3 mb-6 md:mb-0', 'form-container4');
        wrapElements([in_lit_datePubl], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'form-container4');
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

                <div id="category-container" class="mt-6">
                  <!-- CONTENT CHANGES HERE -->
                </div>
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
                  <div id="form-container7" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                  <div id="form-container8" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                  <div id="form-container9" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                  <div id="form-container10" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>
                  <div id="form-container11" style="display: none;"> <!-- CONTENT CHANGES HERE --> </div>

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



