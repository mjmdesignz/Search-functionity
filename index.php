<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Table or list item search query results</title>
<!-- CSS layout and styles -->
<link type="text/css" href="/css/layout.css" />
<script language="javascript">
function myFunction() {
  var input, filter, table, tr, td, i, t; //Tables variables
  input = document.getElementById("myInput"); 
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    var filtered = false;
    var tds = tr[i].getElementsByTagName("td");
    for(t=0; t<tds.length; t++) {
        var td = tds[t];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            filtered = true;
          }
        }     
    }
    if(filtered===true) {
        tr[i].style.display = '';
    }
    else {
        tr[i].style.display = 'none';
    }
  }
}
</script>
</head>
<body>
<h1 style="margin-bottom: 0px;">Insurance Plans and Coverage</h1>
Keck Medicine of USC accepts most insurance plans, working in collaboration with many local and national managed care networks. Please check the list below to see if your insurance plan is accepted at our Keck Medicine of USC locations.
[separator style_type="none" top_margin="0" bottom_margin="20" sep_color="" icon="" icon_circle="" icon_circle_color="" width="" alignment="center" class="" id=""]
<div class="fusion-table table-1">
<input type="text" id="myInput" onKeyUp="myFunction()" placeholder="Search"> 
<table width="100%">
  <thead>
   <tr class="header">
   <th style="background-color: #990000; color: #fff; width: 371px;">Payor Name</th>
   <th style="background-color: #990000; color: #fff; width: 258px;">MSO or Affiliated Health Plan</th>
   <th style="background-color: #990000; color: #fff; width: 193px;">Contract Type</th>
   <th style="background-color: #990000; color: #fff;">Entities</th>
  </tr>
  </thead>
</table>
<table width="100%" id="myTable">
 <tr>
  <td width="371">Accountable Healthcare IPA</td>
  <td width="258">MedPoint Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Advantage Health Network</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Adventist Health Physicians Network</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Adventist Health Physicians Network (Perinatal Services)</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Aetna HMO</td>
  <td width="258">Aetna Healthcare </td>
  <td width="193">HMO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Aetna Institutes of Excellence/Transplant</td>
  <td width="258">Aetna Healthcare </td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Aetna Healthcare PPO</td>
  <td width="258">Aetna Healthcare </td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Affiliated Doctors of Orange County</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">AIDS Healthcare Foundation</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">AKM Medical Group (Perinatal Services)</td>
  <td width="258">Conifer Health</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Alamitos IPA</td>
  <td width="258">Coast Healthcare Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Alaska Medicaid</td>
  <td width="258">&nbsp;</td>
  <td width="193">Government</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Alhambra Hospital Medical Center</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO - Hospital</td>
  <td>Keck, Norrism, Verdugo</td>
  </tr>
  <tr>
  <td width="371">All Care Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>Norris Only</td>
  </tr>
  <tr>
  <td width="371">Alliance IPA</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Allied Pacific of California IPA</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">AltaMed Health Network</td>
  <td width="258">&nbsp;</td>
  <td width="193">LOA</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">AltaMed Health Services Corporation (Medi-Cal, Seniors)</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">America's Health Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">AMVI Care Health Network</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">AMVI/Prospect Medical Group (OneCare)</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Angeles IPA</td>
  <td width="258">SynerMed </td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Anaheim Regional Medical Center</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO - Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross Behavioral Health</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">Behavioral Health </td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross COE/Bariatric</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck, Norris </td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross COE/Transplant</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross EPO Covered California</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">Covered California</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross MCS</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross Medi-Cal</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">HMO - Medi-Cal</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross NonMCS</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross Out of State</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross Prudent Buyer</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross Senior</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">HMO - Medicare Advantage</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Anthem Blue Cross State-Sponsored (Perinatal Services)</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">HMO - Medi-Cal</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Apple Care Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Arcadia Health City IPA</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Arizona Medicaid</td>
  <td width="258">&nbsp;</td>
  <td width="193">Government</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Arroyo Vista Family Health Center</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">ASI Fex WC</td>
  <td width="258">Multiplan</td>
  <td width="193">Workers Comp</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">ASI Flex PPO</td>
  <td width="258">Multiplan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">AXA Assistance (International), Commercial</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">AXIS Services, Inc.</td>
  <td width="258">Multiplan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Axminster Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Bakersfield Family Medical Center</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Beech Street Corporation PPO/WC</td>
  <td width="258">Multiplan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Best Doctors</td>
  <td width="258">United Healthcare</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Beverly Hospital </td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Blue Distinction Centers for Transplants</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Blue Cross/Blue Shield (BQCT)--COE</td>
  <td width="258">&nbsp;</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Blue Shield (Bariatric Surgery)</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Blue Shield CalPERS</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">HMO</td>
  <td>Keck, Norris </td>
  </tr>
  <tr>
  <td width="371">Blue Shield HMO</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Blue Shield IFP PPO Covered California</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">Covered California</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Blue Shield of California PPO</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Blue Shield Senior</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">HMO - Medicare Advantage</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Blue Shield Transplant (Solid Organ, BMT)</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Brand New Day</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Bright Health Physicians of PIH</td>
  <td width="258">&nbsp;</td>
  <td width="193">IPA/MG</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Brookshire IPA</td>
  <td width="258">Coast Healthcare Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Bupa</td>
  <td width="258">Anthem Blue Cross</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">California Eye Care</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Calvo's SelectCare</td>
  <td width="258">Multiplan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">CalOptima</td>
  <td width="258">&nbsp;</td>
  <td width="193">Government</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">CalOptima Medicare Advantage (One Care)</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO - Medicare Advantage</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Care1st Health Plan (Perinatal Services)</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Care1st Health Plan, (including Medicare and MediCal for VHH)</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO  </td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Caremore Health Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck</td>
  </tr>
  <tr>
  <td width="371">Caremore Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">CCS (Cochlear and Hearing Implants Only) </td>
  <td width="258">Medi-Cal</td>
  <td width="193">Government</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Choice Medical Group </td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">ChoiceCare Network / Humana</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">CIGNA HMO</td>
  <td width="258">Cigna </td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">CIGNA Bariatric COE</td>
  <td width="258">Cigna </td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">CIGNA LifeSource (Solid Organ and BMT Transplant)</td>
  <td width="258">Cigna </td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck, Norris </td>
  </tr>
  <tr>
  <td width="371">CIGNA PPO</td>
  <td width="258">Cigna </td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">CIGNA Senior</td>
  <td width="258">Cigna </td>
  <td width="193">HMO - Medicare Advantage</td>
  <td>Verdugo</td>
  </tr>
  <tr>
  <td width="371">Citrus Valley Health Partners</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Citrus Valley Independent Physicians, Inc</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Citrus Valley Physicians Group</td>
  <td width="258">Physicians Data Trust</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Clinicas del Camino Real Inc</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Coastal Communities IPA - Physician Network</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Coastal Comp Health Networks</td>
  <td width="258">&nbsp;</td>
  <td width="193">Workers Comp</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Community Medical Group--West Valley</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">CorVel PPO</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>Keck</td>
  </tr>
  <tr>
  <td width="371">CorVel WC</td>
  <td width="258">&nbsp;</td>
  <td width="193">Workers Comp</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Cost Containment WC</td>
  <td width="258">&nbsp;</td>
  <td width="193">Workers Comp</td>
  <td>Keck</td>
  </tr>
  <tr>
  <td width="371">Coventry Health Care</td>
  <td width="258">Aetna Healthcare </td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Coventry/First Health HMO</td>
  <td width="258">First Health</td>
  <td width="193">HMO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Coventry/First Health Leased Network</td>
  <td width="258">First Health</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Coventry/First Health WC</td>
  <td width="258">First Health</td>
  <td width="193">Workers Comp</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Culinary Health Fund </td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Desert Oasis Healthcare Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Dignity Health Medical Network</td>
  <td width="258">Dignity Health Medical Foundation</td>
  <td width="193">Multi-Specialty</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Eastland Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Employee Health Care Systems</td>
  <td width="258">SynerMed </td>
  <td width="193">MG/IPA</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Employers Health Network/Whole Foods Market</td>
  <td width="258">Providence Health Network</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Facey Medical Group</td>
  <td width="258">Providence Medical Mgmt Services</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Family Care Specialists IPA</td>
  <td width="258">Coast Healthcare Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Family Choice IPA</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">First Health PPO</td>
  <td width="258">Aetna Healthcare </td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">First Health Workers Comp</td>
  <td width="258">Aetna Healthcare </td>
  <td width="193">Workers Comp</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Focus Healthcare Management PPO/WC</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">French Hospital Medical Center</td>
  <td width="258">Dignity Health</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Galaxy Health Network</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Garfield Medical Center</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO - Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Gateway Medical Group</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">GEHA</td>
  <td width="258">Aetna Healthcare </td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">GEMCARE A Medical Group Inc</td>
  <td width="258">Managed Care Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">GEMCARE Health Plan</td>
  <td width="258">Managed Care Systems</td>
  <td width="193">HMO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">GEMCARE Health Plan HMO</td>
  <td width="258">Managed Care Systems</td>
  <td width="193">HMO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Genesis Healthcare of Southern California</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Glendale Memorial Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Glendale Physicians Alliance</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Global Excel Management, Inc.</td>
  <td width="258">Multiplan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Gold Coast Health Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO - Medi-Cal</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Golden Shore Medical Group</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Golden State Medicare Health Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">&nbsp;</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Good Samaritan Medical Practice Assoc</td>
  <td width="258">Coast Healthcare Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Greater Covina Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Greater El Monte Community Hospital</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO - Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Greater Newport Physicians Associates Medical Group</td>
  <td width="258">MemorialCare Medical Foundation</td>
  <td width="193">IPA/MG</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Greater Orange County Medical Group </td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Greater San Gabriel Physicians IPA</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Greater Valley Medical Group</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Greater Valley Physicians Assoc Med Grp</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Harriman Jones Medical Group</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Health EOS</td>
  <td width="258">MultiPlan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Healthcare LA IPA</td>
  <td width="258">MedPoint Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Health Net (Bariatric COE)</td>
  <td width="258">Health Net</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Health Net HMO</td>
  <td>Health Net</td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Health Net Latino HMO/PPO/EPO</td>
  <td>Health Net</td>
  <td width="193">HMO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Health Net PPO</td>
  <td>Health Net</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Health Net Senior</td>
  <td>Health Net</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Health Services of the Pacific Central Coast (formerly Marian Health Services)</td>
  <td>Managed Care Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Health Smart Direct PPO/POS/EPO</td>
  <td width="258">HealthSmart  </td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Health Smart WC</td>
  <td width="258">Health Smart</td>
  <td width="193">Workers Comp</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">HealthCare Partners Medical Group</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Heritage Provider Network - Covered California</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Heritage Provider Network MSO</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Heritage Victor Valley Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">High Desert Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">High Desert Primary Care Medical Group</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Hispanic Physicians IPA (Perinatal Services)</td>
  <td>&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Hoag Affiliated Physicians</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Hoag Medical Group</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Horizon Valley Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">HPPN-Arcadia</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">HPPN-Pasadena</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Huntington Memorial Hospital-HCP</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Imperial Health Holdings Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">Medicare, Medi-Cal Medi-Medi HMO</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Independence Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Inland Empire Health Plan and IEHP Health Access</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Inland Healthcare Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">INTERLINK Health Services (Solid Organ Only)</td>
  <td width="258">&nbsp;</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Interplan PPO</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Kaiser Foundation HMO</td>
  <td width="258">Kaiser</td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Kaiser Permanente Medical Group</td>
  <td width="258">Kaiser</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Kaweah Delta Health Care District</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Kern Health Systems</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Key Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Korean American Medical Group</td>
  <td width="258">HealthSmart Mgmt</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">L A Care Health Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO - Medi-Cal</td>
  <td>USC Care, Keck, Norris, VHH</td>
  </tr>
  <tr>
  <td width="371">LA County Mental Health, Medi-Cal and Medicare</td>
  <td width="258">&nbsp;</td>
  <td width="193">Government</td>
  <td>Verdugo Only</td>
  </tr>
  <tr>
  <td width="371">Lakeside Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Lakewood IPA</td>
  <td width="258">Coast Healthcare Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">LaSalle Medical Associates</td>
  <td width="258">Network Medical Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Laundry and Dry Cleaning Workers Health &amp; Welfare</td>
  <td width="258">Affiliated Health Funds</td>
  <td width="193">PPO</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">LifeTrac (Organ Transplant Only)</td>
  <td width="258">&nbsp;</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Los Angeles Community Hospital</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Los Angeles Community Hospital at Bellflower</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Los Angeles Foundation PPO/EPO/WC</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Los Angeles Medical Center IPA (Perinatal Srvs)</td>
  <td>&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Magan Medical Group</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Managed Care Systems</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Managed Health Network Inc</td>
  <td width="258">&nbsp;</td>
  <td width="193">Behavioral Health </td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Marian Regional Medical Center</td>
  <td width="258">Dignity Health</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Maverick Medical Group Inc</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Medi-Cal</td>
  <td>&nbsp;</td>
  <td width="193">Government</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Medicare</td>
  <td width="258">&nbsp;</td>
  <td width="193">Government</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Memorial Care Medical Foundation </td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Memorial Medical Group</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">MGM Direct Care</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">MGM Resorts Health and Welfare Benefit Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Mid-Cities IPA</td>
  <td width="258">Conifer Health</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Mission Community IPA (Perinatal Only)</td>
  <td width="258">Pacific Health MSO</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Mission Heritage Medical Group</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Mission Hospital Affiliated Physicians</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Mission Internal Medical Group</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Monarch HealthCare (Orange County)</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Monarch Health Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">MultiPlan</td>
  <td width="258">MultiPlan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">My Family Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">National Healthcare Solutions Inc. INTERNATIONAL</td>
  <td width="258">MultiPlan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, VHH</td>
  </tr>
  <tr>
  <td width="371">National Provider Network PPO</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">National Transplant Network (Humana)</td>
  <td width="258">&nbsp;</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Networks By Design</td>
  <td width="258">&nbsp;</td>
  <td width="193">Workers Comp</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Northridge Medical Group</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Northwest Orange County Medical Group</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Norwalk Community Hospital</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">NPPN/Plan America</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Nuestra Familia Medical Group Inc</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Olympus Managed Healthcare Inc. International</td>
  <td width="258">MultiPlan</td>
  <td width="193">PPO</td>
  <td>USC Care , Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">OptumHealth Care Solutions, LLC (formerly United Resource Networks)</td>
  <td width="258">United Healthcare</td>
  <td width="193">Centers of Excellence (COE)</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">Orange County Foundation for Medical Care</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Oscar Health Plan/Providence Health Network - Covered California EPO</td>
  <td width="258">&nbsp;</td>
  <td width="193">EPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Paragon Healthcare Network</td>
  <td width="258">Delta Health Systems</td>
  <td width="193">PPO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Pegasus Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Physician Associates of the Greater SGV</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Physicians Choice Medical Group of San Luis Obispo (Formerly SLO Select IPA)</td>
  <td width="258">Managed Care Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Physicians Choice Medical Group of Santa Maria (Formerly Midcoast Care Inc.)</td>
  <td width="258">Managed Care Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">PIH Health Physicians </td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Pioneer Provider Network</td>
  <td width="258">Coast Healthcare Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Pomona Valley MG (ProMed Hlth Network)</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">ppoNEXT</td>
  <td width="258">First Health</td>
  <td width="193">PPO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Preferred Health Network WC</td>
  <td width="258">&nbsp;</td>
  <td width="193">Workers Comp</td>
  <td>Keck</td>
  </tr>
  <tr>
  <td width="371">Preferred IPA</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Premier Healthcare IPA</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Presbyterian Intercommunity Hospital</td>
  <td width="258">&nbsp;</td>
  <td width="193">EPO</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Primary Care Associates of California</td>
  <td width="258">Coast Healthcare Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Prime Health Services PPO/WC/Senior</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Private Health Care Systems</td>
  <td width="258">MultiPlan</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Prospect Health Source Medical Group</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Prospect Medical Group</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Prospect NWOC Medical Group Inc</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Prospect Professional Care Medical Group</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Prudent Medical Group (Perinatal Services)</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Quality Health Management LLC (QHM)</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Redlands Community Hospital</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Regal Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Riverside Medical Clinic</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Riverside Physician Network</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">San Gabriel Valley Medical Center</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO - Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">San Judas Medical Group IPA (Perinatal Services)</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Sansum-Santa Barbara Foundation</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Seaside Health Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Seaview IPA</td>
  <td width="258">MED3000</td>
  <td width="193">MG/IPA</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">SeeChange Health Insurance</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Seoul Medical Group</td>
  <td width="258">&nbsp;</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Sierra Health Plan/Health Plan of Nevada</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO + HMO Medi-Cal</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Sierra Health Services</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Sierra Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Southern California Healthcare Systems, Inc.</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Southern California Hospital at Culver City</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Southern California Hospital at Hollywood</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Southern California Hospital at Van Nuys</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Southland San Gabriel Valley MG</td>
  <td width="258">Pacific Health MSO</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Francis Medical Center</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. John's Pleasant Valley Hospital</td>
  <td width="258">Dignity Health</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. John's Regional Medical Center</td>
  <td width="258">Dignity Health</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Joseph Heritage Medical Group</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Joseph Hospital Affiliated Physicians</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">Hospital</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Jude Affiliated Physicians</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Jude Heritage Medical Group</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Jude Hospital Affiliated Physician</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">Hospital</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Jude Medical Center</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Mary High Desert Medical Group</td>
  <td width="258">St. Joseph Heritage Healthcare</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Mary IPA</td>
  <td width="258">Coast Healthcare Management</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">St. Vincent's IPA Medical Group</td>
  <td width="258">Physicians Data Trust</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">StarCare Medical Group</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">StayWell Guam Inc</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">TakeCare (GUAM)</td>
  <td width="258">PacifiCare Health Insurance Comp of Micronesia, Inc.</td>
  <td width="193">PPO</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Talbert Medical Group</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Three Rivers Provider</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Torrance Hospital IPA (THIPA)</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">Torrance Memorial Medical Center</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">TRICARE</td>
  <td width="258">Health Net Federal Services</td>
  <td width="193">PPO</td>
  <td>Norris Only</td>
  </tr>
  <tr>
  <td width="371">TRICARE (CHAMPVA)</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">PPO</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">TRICARE Health Net Federal Services</td>
  <td width="258">Health Net</td>
  <td width="193">PPN</td>
  <td>USC Care, Norris</td>
  </tr>
  <tr>
  <td width="371">TRICARE West Region</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">PPO</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">TriWest Healthcare Alliance (UHC)</td>
  <td width="258">Blue Shield of California</td>
  <td width="193">PPO</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Unified Physicians of the South Bay</td>
  <td width="258">Healthcare Partners</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Union Roofers Health &amp; Welfare Fund</td>
  <td width="258">Affiliated Health Funds</td>
  <td width="193">PPO</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">United Behavioral Health</td>
  <td width="258">&nbsp;</td>
  <td width="193">Behavioral Health </td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">United Healthcare/OPTUM - Bariatric COE</td>
  <td width="258">United Healthcare</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck</td>
  </tr>
  <tr>
  <td width="371">United Healthcare</td>
  <td width="258">United Healthcare</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">United Healthcare Choice Plus</td>
  <td width="258">United Healthcare</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">United Healthcare HMO Senior</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">United Healthcare Medicare</td>
  <td width="258">United Healthcare</td>
  <td width="193">Medicare</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">United Healthcare Options</td>
  <td width="258">United Healthcare</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Upland Medical Group</td>
  <td width="258">Prospect Medical Systems</td>
  <td width="193">MG/IPA</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">US Behavioral Health</td>
  <td width="258">&nbsp;</td>
  <td width="193">Behavioral Health </td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">USA Managed Care Organization</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">USC Employees Worker's Comp</td>
  <td width="258">Thru Segdwick</td>
  <td width="193">WC</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">USC Network</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Valley Care Physicians IPA Medical Assoc</td>
  <td width="258">Med3000</td>
  <td width="193">MG/IPA</td>
  <td>USC Care</td>
  </tr>
  <tr>
  <td width="371">Valley Presbyterian Hospital</td>
  <td width="258">&nbsp;</td>
  <td width="193">Hospital</td>
  <td>Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">ValueOptions of California Inc</td>
  <td width="258">&nbsp;</td>
  <td width="193">Behavioral Health </td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td width="371">Ventura County Health Care Plan</td>
  <td width="258">&nbsp;</td>
  <td width="193">HMO</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Verdugo Hills Medical Group</td>
  <td width="258">Heritage Provider Network</td>
  <td width="193">MG/IPA</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">VUMI </td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO - Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
  <tr>
  <td width="371">Watchtower</td>
  <td width="258">&nbsp;</td>
  <td width="193">PPO</td>
  <td>USC Care, Keck, Norris</td>
  </tr>
  <tr>
  <td width="371">WellComp Medical Provider Network</td>
  <td width="258">&nbsp;</td>
  <td width="193">Workers Comp</td>
  <td>USC Care </td>
  </tr>
  <tr>
  <td>Whittier Hospital Medical Center</td>
  <td></td>
  <td>HMO - Hospital</td>
  <td>Keck, Norris, Verdugo</td>
  </tr>
</table>
</div>
</body>
</html>