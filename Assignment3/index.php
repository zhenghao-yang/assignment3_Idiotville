<?php include "inc/html-top.inc"; ?>
<?php $thisPage="home"; ?>
<!--General direction:
The 3 students that I select are those who have abundant extracurricular activities or/and professional experiences. I filled the 3 individual pages with their experiences only, which are what I wish to highlight. Therefore, my intention is to create a clean, artifully simple but professional page. Please design accordingly to suit this style. As for typefaces/fonts, I would suggest using Geometric Sans or Humanist Sans to reflect the modern, professional feeling.-->

  <body>
   <?php include "inc/nav.inc"; ?>

    <!-- Page Header -->
    <!-- Here goes the header, please use background pictures as opposed to single-color backgrounds, as a part of the header. If you(designer) are using a colorful, complex background picture, then please make the layout straightforward, for example, simply one column is enough, so the page won't look overwhelming. Of course, whether to use multiple columns or not is your freedom. -->
    <header class="masthead" style="background-image: url('img/bg1.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Be professional</h1>
              <span class="subheading">Students With Entrepreneurial Insight and Professional Experiences</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <!-- Please use a accordion to display the brief intros of the 3 guys. There is no need to include their photos which go to their individual pages. That should satisfy the JS feature required by this assignment. Any additional feature would be greatly appreciated, for example a rotating background or something with the nav bar. -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <div id="accordion">  

              <h2 class='thesis'>Alejandro Abreu</h2>
              <p>Alejandro Abreu was born on September 6th, 1995. He was born in Monte Sinai hospital in Manhattan, and a few months later moved to the Bronx where he currently resides. He's from New York City, more specifically, the Bronx. As a youth, he was very active and in love with sports. He spent most of my time at the park or at the gym either playing baseball or basketball. He attended the P.S 220 for elementary school and later moved on the school for Applied Mathematics and Technology, AAMT, for middle school. At AAMT, he played basketball and ran track for the school team. After completing middle school, he moved on and attended high school at A Philip Randolph High School Campus. In high school, he was rejected from joining the varsity baseball team which led him to pursue other sports. This led him to playing Varsity Lacrosse and Bowling. He graduated from A Philip Randolph in Spring 2013. He was accepted to various university but none call out to him like the one that he currently attends. At the moment, He is a senior at the University of Rochester pursuing a degree in Computer Science. He is anticipated to graduate from the University of Rochester in May 2018. In his lifetime he has worked in about 5 different location varying from a gym to a school.</p>                
             
              <h2 class='thesis'>Fiyinfoluwa Oluyinka</h2>
              <p>Fiyinfoluwa Oluyinka (born November 29, 1995 in Lagos Nigeria) is from a family of six consisting of his parents, his 3 siblings, and himself. He began boarding school (at Loyola Jesuit College Abuja) at the age of 10, and six years later, upon his graduation, he moved to India, where he attended the Mahindra United World College. It was during his time at UWC, with friends from over 80 different countries, he learned to appreciate people's cultures, opinions and beliefs. It was also at UWC that he got his first taste into the world of Engineering. He worked with his team members on a go-kart project. His experiences, coupled with his passion for electronics prompted him to apply to the University of Rochester, to pursue a bachelor's in Electrical and Computer Engineering.</p>

              <h2 class="thesis">Jonathan Hirsch</h2>
              <p>He was born in New Orleans in July, 1997 but moved to Greensboro, NC shortly after. He grew up in Greensboro and went to a few different schools including a catholic school, a Montessori School and finally the Greensboro Day School through high school. Now, He is a student at the University of Rochester studying mathematics and computer science.</p>
              
              </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <p class="copyright text-muted">Copyright &copy; Information Architect: Zhenghao Yang, Designer: Yidi Fan, Coder: Yuanzhuo Wang</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="sss/sss.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/menu-highlighter.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    <script>
              $( "#accordion" ).accordion({
              heightStyle: "content"
              });
              </script>

  </body>

</html>
