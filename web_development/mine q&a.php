<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.header1{
  background-color: grey;
  color: white;
  padding: 15px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
p,ul{
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    cursor: text;
}
h1{
    line-height: 35px;
    font-family: Arial, Helvetica, sans-serif;
}

.button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button:hover{
  background-color: red;
  color: black;
}
.button1{
  background-color: greenyellow;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 33.33%;
  height: 500px;
  padding: 20px;
  line-height: 30px;
}

</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="social.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<Script type="text/javascript">
       function func(){
         var r=window.prompt("Post your question here");
         if(r){
           window.open("question.php");
         }
       }
</Script>
<script type="text/javascript">
  window.onload = function(){ 
                  alert("Welcome to our COVID-19 information page : Q&A");
                  }   
                  function fun(){
                     var t= window.confirm("Are you sure want to go back?");
                     if(t){
                         return true;
                     }
                     else{
                         return false;
                     }
                  } 
</script>
</head>
<body style="font-family: 'Times New Roman', Times, serif;overflow-x: hidden;" onbeforeunload="return tq()">  
  <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>
  <script type="text/javascript" src="scroll.js"></script>
  
  <div class="title">
      <h1 style="text-align: center;"><a href="covid.php"><span class="headcov">COVID19 </span></a><a href="https://en.wikipedia.org/wiki/Karnataka">
          <span class="headcoi">Bangalore</span></a></h1></div>
          <div class="header"><div id="mySidepanel" class="sidepanel">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
              <a href="index.php">Home</a>
              <a href="about us new.php">About us</a>
              <a href="#contact">Contact</a>
            </div>
          <p style="float: left;background-color: black;"><button class="openbtn" onclick="openNav()" >☰ Menu</button></p></div>
          <!--<ul><font size="4">
              <li><a href="#">Home</a></li><p style="color: red;">&emsp; + &emsp;</p>
              <li><a href="about us new.php">About us</a></li><p style="color: red;">&emsp; + &emsp;</p>
              <li><a href="#contact">Contact us</a></li>
          </font></ul>--> 
          <br><br><br><br>
          <script>
              function openNav() {
                document.getElementById("mySidepanel").style.width = "250px";
              }
              
              function closeNav() {
                document.getElementById("mySidepanel").style.width = "0";
              }
              </script><br>
<div class="header1">
  <h1>Q&A SESSION</h1>
  <a href="#q1" class="button"class="new">COVID-19</a>
  <a href="#q2" class="button"class="new">SAFETY AT WORPLACE</a>
  <a href="#q3" class="button"class="new">SELF CARE</a>
  <a href="#q4" class="button"class="new">TRANSMISSION</a>
  <a href="#q5" class="button"class="new">CHILDREN</a>
  <a href="#q6" class="button" class="new">VACCINE</a>
  <input type="button" class="button1" onclick="func()"  style="color: black;" name="RESOLVE YOUR QUERIES!" value="RESOLVE YOUR QUERIES!"/>
</div>
<br><br>
<div class="header1" id="#q1">
    <h1>COVID</h1>
</div>
<div class="clearfix">
  <div class="box" style="background-color:#bbb">
    <h1>What is COVID?</h1>
  <p>COVID-19 is the disease caused by a new coronavirus called SARS-CoV-2.
    WHO first learned of this new virus on 31 December 2019, following a report of a cluster of cases of ‘viral pneumonia’ 
    in Wuhan, People’s Republic of China.</p>
  </div>
  <div class="box" style="background-color:#ccc">
    <h1>What are the symptoms of COVID-19?</h2>
        <p>The most common symptoms of COVID-19 are Fever,Dry cough and Fatigue. </p>
        <p>Symptoms of severe COVID‐19 disease include:
           <ul > 
            <li>Shortness of breath</li> 
            <li>Loss of appetite</li> 
            <li>Confusion</li> 
            <li>Persistent pain or pressure in the chest</li> 
            <li>High temperature (above 38 °C).</li> 
        </ul></p>
  </div>
  <div class="box" style="background-color:#ddd">
  <h1>How long it takes to develop symptoms?</h1>
    <p>The time from exposure to COVID-19 to the moment when symptoms begin is, on average, 5-6 days and can range from 
            1-14 days. This is why people who have been exposed to the virus are advised to remain at home and stay away from others, for 14 days,
            in order to prevent the spread of the virus, especially where testing is not easily available.</p>
  </div>
</div>
<br><br>
<div class="header1" id="q2">
    <h1>SAFETY AT WORKPLACE</h1>
</div>
<div class="clearfix">
    <div class="box" style="background-color:#bbb">
      <h1>What key measures to protect against COVID-19 <br> should be undertaken in all workplaces?</h1>
    <p> Measures to prevent transmission of COVID-19  include frequent hand-washing or disinfection with hand sanitizer, respiratory hygiene such as covering coughs,
        physical distancing of at least 1 metre, wearing of masks where distancing is not possible, regular environmental
       cleaning and disinfection, and limiting unnecessary travel.</p>
    </div>
    <div class="box" style="background-color:#ccc">
    <h1>What are the rights,duties and responsibilities of workers?</h1>
        <p>Workers are responsible to follow the measures for occupational safety and health and 
            infection prevention ,and to participate in training provided by the employer. Workers should report 
            to their supervisor any situation which may present an imminent and serious danger to their life or health. Workers have the right to remove themselves 
            from any work situation with reasonable justification.</p>
    </div>
    <div class="box" style="background-color:#ddd">
    <h1>What type of mask should a employee wear at workplace?</h1>
        <p>Wearing masks depends on the risk assessment. For jobs and tasks that carry a medium or high risk, for people aged 60 and older, and
            for those with underlying health conditions, a medical mask and other personal protective equipment should be provided. Fabric masks or face coverings are currently 
            recommended for younger people. This prevents the spread of virus from the wearer to others.
           The policy on wearing a mask or face covering in low risk workplaces should be in line with national or local guidelines.
          <u> Masks may carry some risks if not used properly.</u></p>
    </div>
  </div>
  <br><br>
  <div class="header1" id="q3">
    <h1>SELF CARE</h1>
</div>
  <div class="clearfix">
    <div class="box" style="background-color:#bbb">
      <h1>How should I wash fruits and vegetables in time of COVID-19?</h1>
    <p> Wash fruit and vegetables the same way you would in any other circumstance. Before handling them, wash your hands
        with soap and water. Then wash fruits and vegetables thoroughly with clean water, especially if you eat them raw. </p>
    </div>
    <div class="box" style="background-color:#ccc">
    <h1> What is the best household disinfectant for surfaces?</h1> 
        <p>Regular household cleaning and disinfection products will effectively eliminate the virus from household surfaces.For cleaning and disinfecting 
            households with suspected or confirmed COVID19, surface virucidal disinfectants, such as 0.05% sodium hypochlorite (NaClO) and products based on
             ethanol (at least 70%), should be used.</p>
    </div>
    <div class="box" style="background-color:#ddd">
    <h1>What foods should be consumed to support the immune system?</h1>
        <p > The immune system requires the support of many nutrients. It is recommended to consume a variety of foods for a healthy and
             balanced diet, including whole grains, legumes, vegetables, fruits, nuts and animal source foods. There is no single food that will prevent you from catching 
             COVID-19.  For more information on a healthy diet</p>
    </div>
  </div>
  <br><br>
  <div class="header1" id="q4">
    <h1>TRANSMISSION</h1>
</div>
<div class="clearfix" >
    <div class="box" style="background-color:#bbb;height: 600px;">
      <h1> How does COVID-19 spread between people?</h1>
    <p> Current evidence suggests that the virus spreads mainly between people who are in close contact with each other, typically within 1 metre (short-range). A person 
        can be infected when aerosols or droplets containing the virus are inhaled or come directly into contact with the eyes, nose, or mouth.
        The virus can also spread in poorly ventilated and/or crowded indoor settings, where people tend to spend longer periods of time. This is because aerosols remain
         suspended in the air or travel farther than 1 metre (long-range).
         </p>
    </div>
    <div class="box" style="background-color:#ccc;height: 600px;">
    <h1>When do infected people transmit the virus?</h1>
        <p>Whether or not they have symptoms, infected people can be contagious and the virus can spread from them to other people.

            Laboratory data suggests that infected people appear to be most infectious just before they develop symptoms (namely 2 days before they develop symptoms)
         and early in their illness. People who develop severe disease can be infectious for longer.</p>
    </div>
    <div class="box" style="background-color:#ddd;height: 600px;">
    <h1>Are there certain cases where COVID-19 can spread more easily?</h1>
        <p>The “Three C’s” are a useful way to think about this. They describe settings where transmission of the COVID-19 virus spreads more easily:</p>
            <ul>
            <li>Crowded places.</li>
            <li>Close-contact settings, especially where people have conversations very near each other.</li>
           <li> Confined and enclosed spaces with poor ventilation.  </li>
           </ul></p>
            <p>The risk of COVID-19 spreading is especially high in places where these “3Cs” overlap.</li></p>
    </div>
  </div>
  <br><br>
  <div class="header1" id="q5">
    <h1>CHILDREN</h1>
</div>
<div class="clearfix">
    <div class="box" style="background-color:#bbb;height: 600px;">
      <h1>What is the incubation period for children?</h1>
    <p> The incubation period for children is the same as in adults.
         The time between exposure to COVID-19 and when symptoms start is commonly around 5 to 6 days, and ranges from 1 to 14 days.</p>
    </div>
    <div class="box" style="background-color:#ccc;height: 600px;">
    <h1>Are there any specific recommendation on school ventilation and air conditioning use?</h1>
        <p>Yes, ensure adequate ventilation and increase total airflow supply to occupied spaces, if possible. Clean, natural ventilation (i.e., opening windows) should be used 
            inside buildings where possible, without re-circulating the air. If heating, ventilation and air conditioning systems are used they should be regularly inspected,
             maintained and cleaned. Rigorous standards for installation, maintenance and filtration are essential to make sure they are effective and safe. Consider running the
              systems at maximum outside airflow for two hours before and after times when the building is occupied, according to the manufacturer’s recommendations.</p>
    </div>
    <div class="box" style="background-color:#ddd;height: 600px;">
    <h1>Are children at low risk of COVID-19 than adults?</h1>
        <p>So far, data suggests that children under the age of 18 years represent about 8.5% of reported cases, with relatively few deaths compared to other age groups and
             usually mild disease. However, cases of critical illness have been reported. As with adults, pre-existing medical conditions have been suggested as a risk factor
              for severe disease and intensive care admission in children.</p>
    </div>
  </div>
  <br><br>
  <div class="header1" id="q6">
    <h1>VACCINE</h1>
</div>
<div class="clearfix">
    <div class="box" style="background-color:#bbb;height: 600px;">
      <h1>Will COVID-19 vaccines provide long-term protection?</h1>
    <p>Because COVID vaccines have only been developed in the past months, it’s too early to know the duration of protection of COVID-19 vaccines. Research is ongoing
         to answer this question. However, it’s encouraging that available data suggest that most people who recover from COVID-19 develop an immune response that provides
          at least some period of protection against reinfection – although we’re still learning how strong this protection is, and how long it lasts. </p>
    </div>
    <div class="box" style="background-color:#ccc;height: 600px;">
    <h1>What are the benefits of getting vaccinated?</h1>
        <p>The COVID-19 vaccines produce protection against the disease, as a result of developing an immune response to the SARS-Cov-2 virus.  Developing immunity through 
            vaccination means there is a reduced risk of developing the  illness and its consequences. This immunity helps you fight the virus if exposed. Getting vaccinated
             may also protect people around you, because if you are protected from getting infected and from disease, you are less likely to infect someone else. This is
              particularly important to protect people at increased risk for severe illness from COVID-19, such as healthcare providers, older or elderly adults, and people
               with other medical conditions.</p>
    </div>
    <div class="box" style="background-color:#ddd;height: 600px;">
    <h1>Can I have the second dose with a different vaccine than the first dose?</h1>
        <p>Clinical trials in some countries are looking at whether you can have a first dose from one vaccine and a second dose from a different vaccine. There isn't enough data yet 
            to recommend this type of Bangalore. </p>
    </div>
  </div>
  <br><br>
 <center><a href="covid.php" class="button" onclick="fun()">BACK</a></center>
 
 <footer class="footer1">
  <p>
<div class="footerl">

   <h3 style="font-family:cursive;margin-top:99px;">Covid<span style="color: red;">Bangalore</span></h3>
   
   <p class="footer-links">
   <a href="index.php">Home</a>
   +
   <a href="about us new.php">About us</a>
   +
   <a href="#contact">Contact</a>
   </p>
   <p style=" color:  #8f9296;
font-size: 14px;
font-weight: normal;">Covid Bangalore &copy; 2021</p>
   </div>
                       <div class="footerc" style="height: 263px;">
                            <p id="contact" style="text-align: center;font-family:cursive;color: red;"><u>CONTACT US</u></p><br>
                               <p style="text-align: center;font-size: 15px;"><i class="fa fa-address-book-o" style="font-size:20px;margin-top: -100px"></i>kalyan-xxxxxxxxxx</p>                                 
                               <p style="text-align: center;font-size: 15px;"><i class="fa fa-address-book-o" style="font-size:20px;margin-top: -100px"></i>raju-xxxxxxxxxx</p>
                                   
                                   <p style="text-align: center;font-size: 15px;"><i class="fa fa-address-book-o" style="font-size:20px;margin-top: -100px"></i>jethendra-xxxxxxxxx</p>
                                   </div>
                               <div class="footerr" style="vertical-align: middle;margin-top:60px;">
                                   <h3 style="font-family:cursive;">Follow us on:</h3>
                                   <p style="text-align: center;vertical-align: middle;"><a href="https://www.facebook.com/" class="fa fa-facebook" style="vertical-align: middle;"></a>
                                   <a href="https://www.instagram.com/" class="fa fa-instagram" style="vertical-align:middle ;"></a>
                                   <a href="https://www.twitter.com/" class="fa fa-twitter" style="vertical-align: middle;"></a></p>
                              </div>                       
                               </p></footer>
</body>
</html>