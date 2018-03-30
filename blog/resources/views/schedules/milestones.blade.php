@extends('main')

@section('content')
	<div id = "Resident Form">
		<h4>Resident Preferences</h4>
		<form>
		  <div class="form-group">
		  	<!-- First Preference -->
			    <label for="FirstPreference">First Preference</label>
			    <select onchange = "changeDescription(this);" class="form-control" id="FirstPreference">
			      <option selected="selected" disabled="">Select Milestone</option>
			      <option value = "F PC1">PC1 - Patient Care 1</option>
	  		      <option value = "F PC2">PC2 - Patient Care 2</option>
			      <option value = "F PC3">PC3 - Patient Care 3</option>
			      <option value = "F PC4">PC4 - Patient Care 4</option>
			      <option value = "F PC5">PC5 - Patient Care 5</option>
			      <option value = "F PC6">PC6 - Patient Care 6</option>
			      <option value = "F PC7">PC7 - Patient Care 7</option>
			      <option value = "F PC8">PC8 - Patient Care 8</option>
			      <option value = "F PC9">PC9 - Patient Care 9</option>
			      <option value = "F PC10">PC10 - Patient Care 10</option>
			      <option value = "F MK1">MK1 - Medical Knowledge</option>	      
			      <option value = "F SBP1">SBP1 - Systems-based Practice 1</option>
			      <option value = "F SBP2">SBP2 - Systems-based Practice 2</option>
			      <option value = "F PBLI1">PBLI1 - Practice-based Learning and Improvement 1</option>
			      <option value = "F PBLI2">PBLI2 - Practice-based Learning and Improvement 2</option>
			      <option value = "F PBLI3">PBLI3 - Practice-based Learning and Improvement 3</option>
			      <option value = "F PBLI4">PBLI4 - Practice-based Learning and Improvement 4</option>
			      <option value = "F PRO1">PRO1 - Professionalism 1</option>
			      <option value = "F PRO2">PRO2 - Professionalism 2</option>
			      <option value = "F PRO3">PRO3 - Professionalism 3</option>
			      <option value = "F PRO4">PRO4 - Professionalism 4</option>
			      <option value = "F PRO5">PRO5 - Professionalism 5</option>
			      <option value = "F ICS1">ICS1 - Interpersonal and Communication Skills 1</option>
			      <option value = "F ICS2">ICS2 - Interpersonal and Communication Skills 2</option>
			      <option value = "F ICS3">ICS3 - Interpersonal and Communication Skills 3</option>
			    </select>
			    <br>
			    
			    <div id = "FirstDescription">
			    	<p class = "hidden PC1"> 
				    	<strong>Description: </strong>Pre-anesthetic Patient Evaluation, Assessment, and Preparation
				    </p>

				    <p class = "hidden PC2"> 
				    	<strong>Description: </strong>Anesthetic Plan and Conduct
				    </p>
				    <p class = "hidden PC3"> 
				    	<strong>Description: </strong>Peri-procedural pain management
				    </p>
				    <p class = "hidden PC4"> 
				    	<strong>Description: </strong>Management of peri-anesthetic complications
				    </p>

				    <p class = "hidden PC5"> 
				    	<strong>Description: </strong>Crisis management
				    </p>
				    <p class = "hidden PC6"> 
				    	<strong>Description: </strong>Triage and management of the critically-ill patient in a non-operative setting
				    </p>
				    <p class = "hidden PC7"> 
				    	<strong>Description: </strong>Acute, chronic, and cancer-related pain consultation and management
				    </p>

				    <p class = "hidden PC8"> 
				    	<strong>Description: </strong>Technical skills: Airway management
				    </p>
				    <p class = "hidden PC9"> 
				    	<strong>Description: </strong>Technical skills: Use and Interpretation of Monitoring and Equipment
				    </p>
				    <p class = "hidden PC10"> 
				    	<strong>Description: </strong>Technical skills: Regional anesthesia
				    </p>

				    <p class = "hidden MK1"> 
				    	<strong>Description: </strong>Knowledge of biomedical, clinical, epidemiological, and social-behavioral sciences as outlined in the American Board of Anesthesiology Content Outline
				    </p>
				    <p class = "hidden SBP1"> 
				    	<strong>Description: </strong>Coordination of patient care within the health care system
				    </p>
				    <p class = "hidden SBP2"> 
				    	<strong>Description: </strong>Patient Safety and Quality Improvement
				    </p>

				    <p class = "hidden PBLI1"> 
				    	<strong>Description: </strong>Incorporation of quality improvement and patient safety initiatives into personal practice
				    </p>
				    <p class = "hidden PBLI2"> 
				    	<strong>Description: </strong>Analysis of practice to identify areas in need of improvement
				    </p>
				    <p class = "hidden PBLI3"> 
				    	<strong>Description: </strong>Self-directed learning
				    </p>

				    <p class = "hidden PBLI4"> 
				    	<strong>Description: </strong>Education of patient, families, students, residents, and other health professionals
				    </p>
				    <p class = "hidden PRO1"> 
				    	<strong>Description: </strong>Responsibility to patients, families, and society
				    </p>
				    <p class = "hidden PRO2"> 
				    	<strong>Description: </strong>Honesty, integrity, and ethical behavior
				    </p>

				    <p class = "hidden PRO3"> 
				    	<strong>Description: </strong>Commitment to institution, department, and colleagues
				    </p>
				    <p class = "hidden PRO4"> 
				    	<strong>Description: </strong>Receiving and giving feedback
				    </p>
				    <p class = "hidden PRO5"> 
				    	<strong>Description: </strong>Responsibility to maintain personal emotional, physical, and mental health
				    </p>

				    <p class = "hidden ICS1"> 
				    	<strong>Description: </strong>Communication with patients and families
				    </p>
				    <p class = "hidden ICS2"> 
				    	<strong>Description: </strong>Communication with other professionals
				    </p>
				    <p class = "hidden ICS3"> 
				    	<strong>Description: </strong>Team and leadership skills
				    </p>
			    </div>	
			    
			    <!-- Second Preference -->
			    <label for="SecondPreference">Second Preference</label>
			    <select onchange = "changeDescription(this);" class="form-control" id="SecondPreference">
			     <option selected="selected" disabled="">Select Milestone</option>
			      <option value = "S PC1">PC1 - Patient Care 1</option>
	  		      <option value = "S PC2">PC2 - Patient Care 2</option>
			      <option value = "S PC3">PC3 - Patient Care 3</option>
			      <option value = "S PC4">PC4 - Patient Care 4</option>
			      <option value = "S PC5">PC5 - Patient Care 5</option>
			      <option value = "S PC6">PC6 - Patient Care 6</option>
			      <option value = "S PC7">PC7 - Patient Care 7</option>
			      <option value = "S PC8">PC8 - Patient Care 8</option>
			      <option value = "S PC9">PC9 - Patient Care 9</option>
			      <option value = "S PC10">PC10 - Patient Care 10</option>
			      <option value = "S MK1">MK1 - Medical Knowledge</option>	      
			      <option value = "S SBP1">SBP1 - Systems-based Practice 1</option>
			      <option value = "S SBP2">SBP2 - Systems-based Practice 2</option>
			      <option value = "S PBLI1">PBLI1 - Practice-based Learning and Improvement 1</option>
			      <option value = "S PBLI2">PBLI2 - Practice-based Learning and Improvement 2</option>
			      <option value = "S PBLI3">PBLI3 - Practice-based Learning and Improvement 3</option>
			      <option value = "S PBLI4">PBLI4 - Practice-based Learning and Improvement 4</option>
			      <option value = "S PRO1">PRO1 - Professionalism 1</option>
			      <option value = "S PRO2">PRO2 - Professionalism 2</option>
			      <option value = "S PRO3">PRO3 - Professionalism 3</option>
			      <option value = "S PRO4">PRO4 - Professionalism 4</option>
			      <option value = "S PRO5">PRO5 - Professionalism 5</option>
			      <option value = "S ICS1">ICS1 - Interpersonal and Communication Skills 1</option>
			      <option value = "S ICS2">ICS2 - Interpersonal and Communication Skills 2</option>
			      <option value = "S ICS3">ICS3 - Interpersonal and Communication Skills 3</option>
			    </select>
			    <br>
				<div id = "SecondDescription">
			    	<p class = "hidden PC1"> 
				    	<strong>Description: </strong>Pre-anesthetic Patient Evaluation, Assessment, and Preparation
				    </p>

				    <p class = "hidden PC2"> 
				    	<strong>Description: </strong>Anesthetic Plan and Conduct
				    </p>
				    <p class = "hidden PC3"> 
				    	<strong>Description: </strong>Peri-procedural pain management
				    </p>
				    <p class = "hidden PC4"> 
				    	<strong>Description: </strong>Management of peri-anesthetic complications
				    </p>

				    <p class = "hidden PC5"> 
				    	<strong>Description: </strong>Crisis management
				    </p>
				    <p class = "hidden PC6"> 
				    	<strong>Description: </strong>Triage and management of the critically-ill patient in a non-operative setting
				    </p>
				    <p class = "hidden PC7"> 
				    	<strong>Description: </strong>Acute, chronic, and cancer-related pain consultation and management
				    </p>

				    <p class = "hidden PC8"> 
				    	<strong>Description: </strong>Technical skills: Airway management
				    </p>
				    <p class = "hidden PC9"> 
				    	<strong>Description: </strong>Technical skills: Use and Interpretation of Monitoring and Equipment
				    </p>
				    <p class = "hidden PC10"> 
				    	<strong>Description: </strong>Technical skills: Regional anesthesia
				    </p>

				    <p class = "hidden MK1"> 
				    	<strong>Description: </strong>Knowledge of biomedical, clinical, epidemiological, and social-behavioral sciences as outlined in the American Board of Anesthesiology Content Outline
				    </p>
				    <p class = "hidden SBP1"> 
				    	<strong>Description: </strong>Coordination of patient care within the health care system
				    </p>
				    <p class = "hidden SBP2"> 
				    	<strong>Description: </strong>Patient Safety and Quality Improvement
				    </p>

				    <p class = "hidden PBLI1"> 
				    	<strong>Description: </strong>Incorporation of quality improvement and patient safety initiatives into personal practice
				    </p>
				    <p class = "hidden PBLI2"> 
				    	<strong>Description: </strong>Analysis of practice to identify areas in need of improvement
				    </p>
				    <p class = "hidden PBLI3"> 
				    	<strong>Description: </strong>Self-directed learning
				    </p>

				    <p class = "hidden PBLI4"> 
				    	<strong>Description: </strong>Education of patient, families, students, residents, and other health professionals
				    </p>
				    <p class = "hidden PRO1"> 
				    	<strong>Description: </strong>Responsibility to patients, families, and society
				    </p>
				    <p class = "hidden PRO2"> 
				    	<strong>Description: </strong>Honesty, integrity, and ethical behavior
				    </p>

				    <p class = "hidden PRO3"> 
				    	<strong>Description: </strong>Commitment to institution, department, and colleagues
				    </p>
				    <p class = "hidden PRO4"> 
				    	<strong>Description: </strong>Receiving and giving feedback
				    </p>
				    <p class = "hidden PRO5"> 
				    	<strong>Description: </strong>Responsibility to maintain personal emotional, physical, and mental health
				    </p>

				    <p class = "hidden ICS1"> 
				    	<strong>Description: </strong>Communication with patients and families
				    </p>
				    <p class = "hidden ICS2"> 
				    	<strong>Description: </strong>Communication with other professionals
				    </p>
				    <p class = "hidden ICS3"> 
				    	<strong>Description: </strong>Team and leadership skills
				    </p>
			    </div>	

			    <!-- Third Preference -->
			    <label for="FirstPreference">Third Preference</label>
			    <select onchange = "changeDescription(this);" class="form-control" id="ThirdPreference">
			      <option selected="selected" disabled="">Select Milestone</option>
			      <option value = "T PC1">PC1 - Patient Care 1</option>
	  		      <option value = "T PC2">PC2 - Patient Care 2</option>
			      <option value = "T PC3">PC3 - Patient Care 3</option>
			      <option value = "T PC4">PC4 - Patient Care 4</option>
			      <option value = "T PC5">PC5 - Patient Care 5</option>
			      <option value = "T PC6">PC6 - Patient Care 6</option>
			      <option value = "T PC7">PC7 - Patient Care 7</option>
			      <option value = "T PC8">PC8 - Patient Care 8</option>
			      <option value = "T PC9">PC9 - Patient Care 9</option>
			      <option value = "T PC10">PC10 - Patient Care 10</option>
			      <option value = "T MK1">MK1 - Medical Knowledge</option>	      
			      <option value = "T SBP1">SBP1 - Systems-based Practice 1</option>
			      <option value = "T SBP2">SBP2 - Systems-based Practice 2</option>
			      <option value = "T PBLI1">PBLI1 - Practice-based Learning and Improvement 1</option>
			      <option value = "T PBLI2">PBLI2 - Practice-based Learning and Improvement 2</option>
			      <option value = "T PBLI3">PBLI3 - Practice-based Learning and Improvement 3</option>
			      <option value = "T PBLI4">PBLI4 - Practice-based Learning and Improvement 4</option>
			      <option value = "T PRO1">PRO1 - Professionalism 1</option>
			      <option value = "T PRO2">PRO2 - Professionalism 2</option>
			      <option value = "T PRO3">PRO3 - Professionalism 3</option>
			      <option value = "T PRO4">PRO4 - Professionalism 4</option>
			      <option value = "T PRO5">PRO5 - Professionalism 5</option>
			      <option value = "T ICS1">ICS1 - Interpersonal and Communication Skills 1</option>
			      <option value = "T ICS2">ICS2 - Interpersonal and Communication Skills 2</option>
			      <option value = "T ICS3">ICS3 - Interpersonal and Communication Skills 3</option>
			    </select>
			    <br>

			    <div id = "ThirdDescription">
			    	<p class = "hidden PC1"> 
				    	<strong>Description: </strong>Pre-anesthetic Patient Evaluation, Assessment, and Preparation
				    </p>

				    <p class = "hidden PC2"> 
				    	<strong>Description: </strong>Anesthetic Plan and Conduct
				    </p>
				    <p class = "hidden PC3"> 
				    	<strong>Description: </strong>Peri-procedural pain management
				    </p>
				    <p class = "hidden PC4"> 
				    	<strong>Description: </strong>Management of peri-anesthetic complications
				    </p>

				    <p class = "hidden PC5"> 
				    	<strong>Description: </strong>Crisis management
				    </p>
				    <p class = "hidden PC6"> 
				    	<strong>Description: </strong>Triage and management of the critically-ill patient in a non-operative setting
				    </p>
				    <p class = "hidden PC7"> 
				    	<strong>Description: </strong>Acute, chronic, and cancer-related pain consultation and management
				    </p>

				    <p class = "hidden PC8"> 
				    	<strong>Description: </strong>Technical skills: Airway management
				    </p>
				    <p class = "hidden PC9"> 
				    	<strong>Description: </strong>Technical skills: Use and Interpretation of Monitoring and Equipment
				    </p>
				    <p class = "hidden PC10"> 
				    	<strong>Description: </strong>Technical skills: Regional anesthesia
				    </p>

				    <p class = "hidden MK1"> 
				    	<strong>Description: </strong>Knowledge of biomedical, clinical, epidemiological, and social-behavioral sciences as outlined in the American Board of Anesthesiology Content Outline
				    </p>
				    <p class = "hidden SBP1"> 
				    	<strong>Description: </strong>Coordination of patient care within the health care system
				    </p>
				    <p class = "hidden SBP2"> 
				    	<strong>Description: </strong>Patient Safety and Quality Improvement
				    </p>

				    <p class = "hidden PBLI1"> 
				    	<strong>Description: </strong>Incorporation of quality improvement and patient safety initiatives into personal practice
				    </p>
				    <p class = "hidden PBLI2"> 
				    	<strong>Description: </strong>Analysis of practice to identify areas in need of improvement
				    </p>
				    <p class = "hidden PBLI3"> 
				    	<strong>Description: </strong>Self-directed learning
				    </p>

				    <p class = "hidden PBLI4"> 
				    	<strong>Description: </strong>Education of patient, families, students, residents, and other health professionals
				    </p>
				    <p class = "hidden PRO1"> 
				    	<strong>Description: </strong>Responsibility to patients, families, and society
				    </p>
				    <p class = "hidden PRO2"> 
				    	<strong>Description: </strong>Honesty, integrity, and ethical behavior
				    </p>

				    <p class = "hidden PRO3"> 
				    	<strong>Description: </strong>Commitment to institution, department, and colleagues
				    </p>
				    <p class = "hidden PRO4"> 
				    	<strong>Description: </strong>Receiving and giving feedback
				    </p>
				    <p class = "hidden PRO5"> 
				    	<strong>Description: </strong>Responsibility to maintain personal emotional, physical, and mental health
				    </p>

				    <p class = "hidden ICS1"> 
				    	<strong>Description: </strong>Communication with patients and families
				    </p>
				    <p class = "hidden ICS2"> 
				    	<strong>Description: </strong>Communication with other professionals
				    </p>
				    <p class = "hidden ICS3"> 
				    	<strong>Description: </strong>Team and leadership skills
				    </p>
			    </div>	
				<label for="Comments">Additional Comments</label>
	      		<textarea class="form-control" rows="3" id="Comments"></textarea>
	      		<br>
	      		<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form>
		</div>
@endsection