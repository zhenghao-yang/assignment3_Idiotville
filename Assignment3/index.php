<?php include "inc/html-top.inc"; ?>
<?php $thisPage="home"; ?>
       
       <body>
       	
        <div class="container">
       	
        <header>
        <?php include "inc/nav.inc"; ?>
                        
        </header>

        <div class = "lead">
          <div class = "wrapper">
          <h1 class = "shanghai">Good Evening, Shanghai!</h1>
              

              
          <div class="slider">
              <img src="images/yuanzhuo.jpg" alt="Yuanzhuo Wang">
              <img src="images/zhenghao.jpg" alt="Zhenghao Yang">                    
              <img src="images/yidi.jpg" alt="Yidi Fan">
          </div>

          <div class = "intro">
            Our Team:<br>
            Information Architect: Yuanzhuo Wang
            <ul>
              <li>Re-architect the content from three individual assignment1 websites, decide the ontology, create a structure using the taxonomy, choose an appropriate choreography for the content. </li>
              <li>Create three sub-webpages of the assignment, using same subheadings like "About me, Hobbies, Other information.",build the document outline and makes it consistent across three sub-webpages, set up the structure. </li>
              <li>Create the homepage, modify three pictures to the same size for the slider javascript.,set up the layout, create the navigation part.</li>
            </ul><br>

            Coder: Yidi Fan
            <ul>
              <li>Design and make the Java Script slider show plugin on the homepage. </li>
              <li>Work with the Information Architect and Designer for coding for the php, css, inc and js files. </li>
              <li>Check the webpages and styles meet W3C standards, the html and css pass validation, make sure the files and file system must be clean and follow industry best practices.</li>
            </ul><br>

            Design Artisit: Zhenghao Yang
            <ul>
              <li>Responsible for maintaining readability of web pages and ensuring a professional and stylish presentation of the content.</li>
              <li>Set up the consistant layout on the three student pages. Modify the layout on the homepage to make the slider javascript best fit for the homepage.</li>
              <li>Create the css style of all the articles, headings, and background on all four webpages.</li>
              <li>Create the style for navigation part, hover and is-current effect.</li>
            </ul>

           </div>
          </div>
        </div>


        </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="sss/sss.min.js"></script>
<script>
$('.slider').sss();
</script>              
              
       </body>
</html>
