<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="social.css">
        <link rel="stylesheet" href="box.css">
        <title>Karnataka Cases</title>
        <script src="https://cdnjs.com/libraries/Chart.js "></script>
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">--> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
      <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>
      <script type="text/javascript" src="scroll.js">
      </script>    
             <div class="title">
              <h1 style="text-align: center;"><a href="covid.php"><span class="headcov">COVID19 </span></a><a href="https://en.wikipedia.org/wiki/Karnataka">
                  <span class="headcoi">Karnataka</span></font> </a></h1></div>
                  <div class="header"><div id="mySidepanel" class="sidepanel">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                          <a href="index.php">Home</a>
                          <a href="about us new.php">About us</a>                    
                          <a href="#contact">Contact</a>
                        </div>
                      <p style="float: left;background-color: black;"><button class="openbtn" onclick="openNav()" >☰ Menu</button></p></div>
                      <script>
                          function openNav() {
                            document.getElementById("mySidepanel").style.width = "250px";
                          }
                          
                          function closeNav() {
                            document.getElementById("mySidepanel").style.width = "0";
                          }
                      
                          </script><br><br>
                        <br>
       <h1 style="text-align: center;font-family:cursive;"><font color="black" size="8">Karnataka</font></h1>
       <hr>
       <marquee behavior="scroll" direction="left"><font face="Times New Roman" color="black" size="4">Helpline: 91+ 9889223311    Toll: 911 Helpline E-mail: covidhelp@gov.in</font></marquee>
        <br><br>
        <div class="center-screen">
        <div class="box">
             <a href="1.php"><div style="text-align:right;"></font><a href="#AreaWiseCases"><font color="black">  Area wise  </font></a> </div></a>
            <h3 style="text-align:center;">7800 </h3>
            <h4 style="text-align:center;">cases in CBE </h4>
            <div class="flex-container">
                <div class="row">
                  <div class="box1"><div class="flex-item">'
                  
                  <h4 style="text-align:center;">1,99,009 </h3>
                    <h5 style="text-align:center;">Total cases in CBE </h4>
                  </div> </div>
                </div>
                <div class="box2">
                  <div class="flex-item">'
                    <h4 style="text-align:center;">1,91,121 </h3>
                        <h5 style="text-align:center;">Discharged </h4>
                </div>
                </div>
                <div class="row">
                  <div class="box3"><div class="flex-item">'
                      <br>
                      <h4 style="text-align:center;">104 </h3>
            <h5 style="text-align:center;">Deceased </h4>

                  </div></div>
                </div>
                </div>
               </div>
        </div>
        <hr>
        <div class="container" style="text-align: center;float:left;width: 35%;background: #F49F1C;">  
        <p style="font-size: 100px;color: #0d1137;margin-top: 200px;margin-bottom: 557px;">Confirmed <br> Cases</p>
        </div>
              <div class="container" style="width: 65%;float:left;background: #F49F1C;" >
                <canvas id="myChart" width="40px" height="40px"></canvas>
      
      
                </canvas>
              </div>
        
        <script>
          let myChart= document.getElementById('myChart').getContext('2d'); 
          let massPopChart= new Chart(myChart,{
            type:'pie',
            data:{
              labels:['Bangalore-North','Bangalore-South','Mysore','Tumakuru','Dakshina kannada','Hassan'],
              datasets:[ {label:'Confirmed',data:[66789,44567,32009,19808,1099,35838 ],backgroundColor:['blue','green','pink','purple','red','white'],
              hoverBorderWidth:3,
              hoverBorderColor:'#000'
            }]
            }});

        </script>
      <br><br><br><br>
        <p style="text-align: center;" id="AreaWiseCases"><font size="10" face="Times New Roman" color="black">Area wise cases</font></p>
       
        <table class="center" style="background:yellow ;">
          <thead>
          <th>Zone</th>
          <th>Confirmed</th>
          <th>Active Cases</th>
          <th>Recovered</th>
          <th>Deceased</th>
          </thead>
          <tbody>
          <tr>
          <td><a href ="1.php">Bangalore-North</a></td><td>66789</td>
          <td>4511</td>
          <td>76980</td>
          <td>33</td>
          </tr>
          <tr>
          <td><a href ="2.php">Bangalore-South</a></td>
          <td>44567</td>
          <td>267</td>
          <td>44531</td>
          <td>12</td>
          </tr>
          <tr>
          <td><a href ="3.php">Mysore</a></td>
          <td>32009</td>
          <td>667</td>
          <td>33122</td>
          <td>13</td>
          </tr>
          <tr>
          <td><a href ="4.php">Tumakuru</a</td>
          <td>19808</td>
          <td>32</td>
          <td>16789</td>
          <td>34</td>
          </tr>
          <tr>
            <td><a href ="5.php">Dakshina kannada</a></td>
            <td>10999</td>
            <td>7</td>
            <td>16799</td>
            <td>4</td>
            </tr>
            <tr>
              <td><a href ="6.php">Hassan</a></td>
              <td>35838</td>
              <td>2284</td>
              <td>2900</td>
              <td>8</td>
              </tr>
          </tbody>
          </table>
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
                                         <p style="text-align: center;font-size: 15px;"><i class="fa fa-address-book-o" style="font-size:20px;margin-top: -100px"></i>jithendra-xxxxxxxxxx</p>
                                             
                                             <p style="text-align: center;font-size: 15px;"><i class="fa fa-address-book-o" style="font-size:20px;margin-top: -100px"></i>raju-xxxxxxxxx</p>
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