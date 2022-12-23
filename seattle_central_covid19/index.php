<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
?> 

<div class="quick-nav project-flex">
    <div>
        <p>Quick Nav</p>
        <a href="#scc-plan"><div class="quick-btn">1. Plan</div></a>
        <a href="#scc-research"><div class="quick-btn">2. Research</div></a>
        <a href="#scc-design"><div class="quick-btn">3. Design</div></a>
        <a href="#scc-prototype"><div class="quick-btn">4. Prototype</div></a>
        <a href="#scc-prototype"><div class="quick-btn">5. Test</div></a>
        <a href="#scc-final-design"><div class="quick-btn">6. Final Design</div></a>
    </div>
</div>

<section class="project-box">
<div class="project-heading">
    <img src="/images/scccovid19.png" alt="SCC COVID-19 Web Design Project Header" class="header-img">
    <div class="step-left">
        
        <h1 class="project-title">Seattle Central College Redesigning COVID-19 Page</h1>
        <p>#WebDesign #CaseStudy</p>
    </div>
    
    <div class="step-right">
        
        <div class="title-box">
                <h3 class="small-title">Background</h3> 
            </div>
        <img src="/images/scc-logo.png" alt="Seattle Central Logo" width="150px">
            <p>Due to the coronavirus outbreak, the Seattle Central College moved to the remote operation in early March 2020. While the college set up the COVID-19 Update page on their website to provide the latest information, many students faced stress, anxiety, and frustration due to a lack of accessibility on the page. The page needed to be redesigned to help users navigate college more smoothly and provide a better experience with Seattle Central.</p>
        
            <table class="project-info-table">
                <tr>
                    <th>Duration</th>
                    <td><p>10 weeks (Sep-Dec 2020)</p></td>
                </tr>
                <tr>
                    <th>Project Type</th>
                    <td><p>Course Project (Individual)</p></td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td><p>UX Designer</p></td>
                </tr>
                <tr>
                    <th>Tools</th>
                    <td><p>Figma, Adobe XD, Google Form</p></td>
                </tr>
        
            </table>
           
    </div>
    </div>
    
    
    <div class="project-step project-flex">
        <div class="step-left">
            <figure style="margin-bottom:60px;">
                <img src="/images/original-design.png" alt="COVID-19 Update original page design" class="img-shadow">
                <figcaption>COVID-19 Update page original design</figcaption>
            </figure>
        </div>
        <div class="step-right">            
                <div class="title-box"> 
                <h3 class="small-title">Problem Statement</h3> 
            </div>
                <p class="p-space">The current COVID-19 Update page <mark>failed to effectively navigate users and provide the information they needed</mark> to cope with an uncertain situation surrounding COVID-19. It also caused users' undue worry and the increase of inquiries for the student service departments.</p>
            
                <div class="title-box">
                <h3 class="small-title">Design Question</h3> 
            </div>
                <p class="emphasize">How can we increase ease of use of the website?</p>
                <p class="emphasize">How can we allow users to access the information they need more easily?</p>
        </div>
    </div>
    
    <div class="project-center more-space">
            <h3 class="small-title" style="margin-top:40px;">Design Process</h3> 
            <img src="/images/webdesign-process.svg" alt="Web Design Process" class="process-image">
    </div>
    
    <div class="project-step project-flex" id="scc-plan">
        <div class="step-left">
                <h3 class="scc-blue">Plan</h3>  
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Competitive Analysis</h3> 
            </div>
            
            <p>The COVID-19 outbreak and campus closure was unprecedented event. I decided to employ competitive analysis as the first research method to learn how other schools were managing this situation and have a better understanding of the college operation during the pandemic.</p>
            
            <h4 class="smaller-heading">Competitors</h4>
            <img src="/images/competitors.png" alt="COVID-19 page design sketcj" class="competitors"> 
            
            <h4 class="smaller-heading">Goals</h4>
            <ul class="research-list">
                <li>Identify what competitors offer as primary information</li>
                <li>Learn how they organize high volume information</li>
                <li>Evaluate the design patterns, visual elements, interaction opportunities to determine best practice</li>
            </ul> 
            
            <h4 class="smaller-heading">Findings</h4>
            
            <table class="competitive-table">
                <tr>
                    <th>Strengths</th>
                    <th>Weaknesses</th>
                </tr>
                
                <tr>
                    <td>
                        <ul>
                            <li>The <mark>current campus status</mark> and <mark>school safety procedure</mark> were the top two primary information</li>
                            <li>A large amount of information was nicely <mark>categorized</mark>.</li>
                            <li><mark>Accordion forms</mark> were used to provide a large amount of information while keeping the design clean</li>
                            <li><mark>FAQ page</mark> was utilized to provide additional or miscellaneous information to answer more specific questions users may have.</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Large images took a lot of space, which made the main page less informative</li>
                            <li>Unfamiliar or unclear words may confuse users, such as “COVID-19 Ready,” “Coug Life,” etc.</li>
                            <li>Too much text made it hard for users to scan the page and find the information they need quickly</li>
                        </ul>
                    </td>
                </tr>
            
            </table>
        </div>
    </div>
    
    <div class="project-step project-flex" id="scc-research">
        <div class="step-left">
                <h3 class="scc-blue">Research</h3> 
        </div>
        <div class="step-right">
            <div class="title-box"> 
                <h3 class="small-title">User Survey & Contextual Interview</h3> 
            </div>
            <p>Understanding users' needs and problems from multiple aspects was crucial in a chaotic situation that none of us had experienced before. I decided to send out online user surveys and conduct user interviews on Zoom.</p>
            
            <h4 class="smaller-heading">Goals</h4>
            <ul class="research-list">
                <li>Identify primary and secondary information that users are looking for</li>
                <li>Understand users' concerns and pain points during the pandemic</li>
            </ul> 
            
            <h4 class="smaller-heading">Methods</h4>
            <table class="survey-table">
                <tr class="table-center">
                    <td><img src="/images/survey-icon.svg" alt="User Survey" width="80px"></td>
                    <td><img src="/images/interview-icon.svg" alt="Contextual Interview" width="120px"></td>
                </tr>
                <tr class="table-center">
                    <td><p><b>User Survey</b></p></td>
                    <td><p><b>Contextual Interview</b></p></td>
                </tr>
                <tr class="table-center">
                    <td><p>Gather data quickly and flexibly <br>from a large population of users<br>(n=20)</p></td>
                    <td><p>Collect qualitative, observed data<br>(n=6)</p></td>
                </tr>
            </table>
            
            <h4 class="smaller-heading">Participant Types</h4>
            <p style="margin-bottom:20px;">current students, faculty, employees and people outside of school</p>
            
            
            <h4 class="smaller-heading" style="margin-bottom:20px;">Findings</h4>
            
            <p class="emphasize">1. Expectations & Preferences</p>
            <p>The following items are essential information that users want to know</p>
                        <ul class="research-list">
                            <li><b>Primary information:</b><br>Campus status, class status, campus operation procedures, safety measures</li>
                            <li><b>Secondary information:</b><br>College re-opening plan, resources for students/faculties, financial/mental health support, remote learning support</li>
                        </ul>
            
            <p class="emphasize" style="margin-top:60px;">2. Problems and Concerns</p>
                        <ul class="research-list">
                            <li>2 interview participants expressed their concerns that they might be missing out on some important information about the school, but <mark>don't know what they need to know</mark></li>
                            <li>30% of survey/interview participants were concerned about the <mark>quality of remote learning</mark></li>
                            <li>40% of survey/interview participants <mark>expressed their anxiety and worries</mark> about the uncertain situation</li>
                            <li>15% of participants were concerned about the tuitions and their financial situations</li>
                            <li>Information is not often up-to-date or they can't tell if the information is updated in a timely manner</li>
                        </ul>
        </div>
    </div>
    
    <div class="project-step project-flex">
        <div class="step-left">
                
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Baseline Usability Testing</h3> 
            </div>        
            <p>I conducted usability testing with 6 representative users to <mark>evaluate the quality of the original design</mark>. I first allowed the participants to explore the site to <mark>collect their impressions and feedback</mark> on the page. I then gave participants <mark>tasks to find the essential information</mark>, which I identified from the survey and interview findings, to evaluate the ease of use of the original design. </p>
            
            <h4 class="smaller-heading">Goals</h4>
            <ul class="research-list"> 
                <li>Learn users' initial impressions and satisfaction with the original design</li>
                <li>Identify design problems that prevent users from finding information quickly</li>
                <li>Establish an initial benchmark to measure usability and user satisfaction</li>
            </ul> 
            
            <h4 class="smaller-heading" style="margin-bottom:30px;">Findings</h4>
            <p>The most critical issue was that all participants failed to find the essential information or took a significant amount of time to find it.</p>
            <br>
            <p><b>Successes and Failures Per Task</b></p>
            <img src="/images/baseline-test.png" alt="Basline Test" width="500px">
            
            <table class="competitive-table">
                <tr>
                    <th class="baseline-th">Problem</th>
                    <th>Severity/Scope</th>
                </tr>
                <tr>
                    <td>
                        <b>1. Scattered Information</b><br><br>
                        The information was not categorized, and each information was randomly placed all over the page. Since there were no category names, users had to read each item from top to bottom until they find the information they were looking for.
                    </td>
                    <td>
                        <b>Severity: <span class="high-severity">High</span></b><br><br>
                        
                        <b>Scope: <span class="high-severity">High</span></b>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <b>2. Unclear visual hierarchy</b><br><br>
                        Since the page barely had a visual hierarchy such as titles and headings, images/graphics, or color code, users were not able to scan the page to anticipate where the information that they need was located. All participants went through each item from the top until they find the information they were looking for.

                    </td>
                    <td>
                        <b>Severity: <span class="high-severity">High</span></b><br><br>
                        
                        <b>Scope: <span class="high-severity">High</span></b>
                    </td>
                </tr>
                
                <tr>
                    <td>
                         <b>3. Too much text and complicated words</b><br><br>
                        The page was densely packed with too much text. Participants had to spend a significant amount of time reading large bodies of text to find the information. Some participants had difficulties with reading paragraphs that contain complicated/unfamiliar words.    
                    </td>
                    <td>
                        <b>Severity: <span class="high-severity">High</span></b><br><br>
                        
                        <b>Scope: <span class="medium-severity">Medium</span></b>
                    </td>
                </tr>
            </table>
            
            <div class="title-box">
            <h3 class="small-title" style="margin-top:120px;">Design Goals</h3>
        </div>
            <p>Before moving to the design phase, I set design goals by specifying my initial design goal.</p>
            <table class="designgoal-table seattle-blue">
                <tr>
                    <th>Quick access to primary information</th>
                    <td>
                        <p>Keeping users updated with primary information is essential in this circumstance. The new design should prioritize the primary information and allow users to easily access it.</p>
                    </td>
                </tr>
                <tr>
                    <th>Logical and effective content organization</th>
                    <td>
                        <p>Organizing the content in a way that makes the most logical sense to the users will contribute to optimizing the site's navigation</p>
                    </td>
                </tr>
                <tr>
                    <th>Scannable content</th>
                    <td>
                        <p>Make the page more easily scannable by utilizing a clear visual hierarchy, graphics, etc.</p>
                    </td>
                </tr>
                <tr>
                    <th>Up-to-date information</th>
                    <td>
                        <p>Providing the latest information is crucial to reduce users' undue worry under constantly changing situations. It is also important to let users know the information on the website is correct and up-to-date</p>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>
    

    <div class="project-step project-flex" id="scc-design">
        <div class="step-left">
            <h3 class="scc-blue">Design</h3>            
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Affinity Diagram</h3> 
            </div> 
            <p style="margin-bottom:20px;">Based on the findings from user research, I organized the data and information, prioritized features, and established a logical site structure and page layout. Since I was designing specifically for the COVID-19 Update page, my main focus was to <mark>categorize, prioritize, and map out the information to achieve the most logical page layout</mark> instead of building a whole site structure.</p>
          <img src="/images/affinity-diagram.png" alt="COVID-19 page design sketch" >
            
            <h4 class="smaller-heading">Findings</h4>
            <table class="affinity-table">
                <tr>
                    <th>Primary information on the main page</th>
                    <td>
                        <ul class="affinity-list">
                            <li>Campus status</li>
                            <li>Class status</li>
                            <li>Health and safety<br>(campus operation protocols, safety measures, campus reopening plan, etc.)</li>
                            <li>Latest update from school</li>
                        </ul>
                    </td>
                </tr>
            
            </table>
            
            <h4 class="smaller-heading">Sub Categories</h4>
            <table class="affinity-table">
                <tr>
                    <th>Remote Learning Support</th>
                    <td>
                        <ul class="affinity-list">
                            <li>Get ready for remote learning</li>
                            <li>How to use Canvas</li>
                            <li>Tutoring & student learning support</li>
                            <li>IT support</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Faculty / Employee Support</th>
                    <td>Working prograss</td>
                </tr>
                <tr>
                    <th>COVID-19 Resources</th>
                    <td>
                        <ul class="affinity-list">
                            <li>Mental health</li>
                            <li>Basic life support</li>
                            <li>Unemployment worker retraining</li>
                            <li>Technology resources</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Student Services & Contact</th>
                    <td>
                        <ul class="affinity-list">
                            <li>List of student service divisions</li>
                            <li>Contact information</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>FAQ</th>
                    <td>Millennials and additional information</td>
                </tr>
            
            </table>
            
            <div class="title-box" style="margin-top:120px;">
                <h3 class="small-title">Information Architecture</h3> 
            </div> 
            <img src="/images/scc-ia.svg" alt="COVID-19 page Information Architecture" width="90%">
        </div>
    </div>
    
    
    
    <div class="project-center">
        <div class="center-content">
            <h3 class="small-title">Design Sketch</h3>
            <img src="/images/design-sketch.jpg" alt="COVID-19 page design sketch" id="sketch-img">
        </div>
    </div>
    
    
    
    
     <div class="project-step project-flex" id="scc-prototype">
        <div class="step-left">
            <h3 class="scc-blue">Prototype & Test</h3>           
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Lo-Fi Prototype & A/B Testing</h3> 
            </div> 
            <p>Based on the design sketch, I crafted a lo-fi prototype using Figma. To allow users to easily navigate and increase the accessibility of the website, I decided to employ "Quick Links" where users can find the most frequently used links quickly. To help users find it more easily, I <mark></mark>conducted A/B testing and determined the best place for the 'Quick Links.'”/mark>.</p><br>
            
            
        </div>
    </div>
    
    <div class="sub-project-step project-flex">
        <div class="ab-left">
            
            <img src="/images/design-a.png" alt="Design A" class="ab-img">
            <p class="emphasize">Design A</p>
            <p>Placed the Quick Links bar <mark>in the right column</mark>.</p>
                <h4 class="small-title" style="margin-top:20px;">Pros</h4>
                <p>- The page looks cleaner with white space and less text on top of the page</p>
        
                <h4 class="small-title" style="margin-top:20px;">Cons</h4>
                <p>- The Quick Links might not be very explicit</p>
                <p>- The users have to scroll down the page to see the latest updates</p>
            
        </div>
        <div class="ab-right">
            
            <img src="/images/design-b.png" alt="Design B" class="ab-img">
            <p class="emphasize">Design B</p>
            <p>The Quick Links bar is placed <mark>on top of the page</mark>.</p>
            
            <h4 class="small-title" style="margin-top:20px;">Pros</h4>
                <p>- Easier to find Quick Links</p>
                <p>- Users could find more information without scrolling the page down</p>
            
            
            <h4 class="small-title" style="margin-top:20px;">Cons</h4>
                    <p>Some users may feel there are a lot of information to process on top of the page</p>
            
            <h4 class="small-title blue" style="margin-top:20px;">Findings</h4>
            <p><mark>4 out of 5 participants found the Quick Links bar quicker with Design B</mark>. The page density in Design B wasn't a problem either.</p>
        </div>
    </div>
    
    <div class="project-step project-flex" id="scc-final-design">
        <div class="prototype-left">
            <img src="/images/home.png" alt="Home page design" class="img-shadow scc-final-design">                
        </div>
        <div class="prototype-right">
            <div class="title-box">
                <h3 class="small-title">Final Visual Design</h3> 
            </div>
            <p>Users were able to find the essential information more quickly than the baseline usability testing. It suggested that I achieved the overall improvement of accessibility, scannability, and usability of the website.</p>
            <ul class="research-list">
                <li>The <mark>primary information is more explicit</mark>  and easy to find</li>
                <li><mark>Improved the efficiency</mark> of the page with the "Quick Links" bar</li>
                <li><mark>Improved the scannability</mark> of the page with a clear visual hierarchy and color-coded labels</li>
                <li><mark>Enhanced readability</mark> of the page by minimizing the amount of text and using plain English
                </li>
            </ul>
            
            <div class="title-box">
                <h3 class="small-title" style="margin-top:60px;">Why I went against simplifying the design more.</h3> 
            </div>
            <p>During the user research, I learned some people had no idea what information they needed to know in an uncertain situation. I found it critical to <mark>make the essential information visible and explicit</mark> instead of hiding it under each category.</p>
            
        </div>
    </div>

    <div class="project-center">
        <div class="center-content">
            <img src="/images/visual-design-primary.png" alt="Visual Design" class=visual-design-img>
            <img src="/images/visual-design-1.png" alt="Visual Design" class=visual-design-img>
            <img src="/images/visual-design-2.png" alt="Visual Design" class=visual-design-img>
            <img src="/images/visual-design-sub.png" alt="Visual Design" class=visual-design-img>
            <img src="/images/visual-design-overview.png" alt="Visual Design" class=visual-design-img>
        </div>
    </div>
    
    <div class="project-center">
        <h3 class="small-title">Prototype Site</h3>
        <p>Created a prototype site with Adobe XD</p>
        <iframe width="750" height="500" class="prototype-iframe" src="https://www.youtube.com/embed/JBHpcn6hY7w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="btn-container">
            <a href="https://xd.adobe.com/view/2f89d5f5-f80e-432d-8e10-d599714e3c9e-7ada/" target="_blank"><button class="btn">Try Prototype Site</button></a>
        </div>
    </div>
    
    <div class="project-step project-flex">
        <div class="step-left">
                     
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Next Step</h3> 
            </div> 
            <ul class="reflection-list">
                <li>Due to proximity and time restrictions, I decided to mainly focus on designing for the primary user - current and incoming students - in this project. If I had more time, I would conduct further <mark>user research with faculty and employees to achieve a better inclusive design</mark> that works for all user types.</li>
                <li>Since the goal of this project was to redesign only the COVID-19 Update page, the content outside of this page was out of scope. If I had more time, I would reexamine this final design by considering the content and site structures associated with the entire Seattle Central website as well as the Seattle Colleges website to make the design work as a whole website rather than just a single page. </li>
            </ul>
            
            <div class="title-box">
                <h3 class="small-title" style="margin-top:40px;">What I learned</h3> 
            </div> 
            <ul class="reflection-list">
                <li>User surveys and contextual interviews with participants representing various user types helped me understand the needs and pain points of different user archetypes. While they helped me determine how to prioritize and organize a large amount of information, they also made me <mark>realize the importance and difficulty of achieving inclusive design</mark>.</li>
                <li>The most challenging was <mark>conducting user research remotely</mark> due to the pandemic. When I conducted usability tests on Zoom, I was not able to observe the participants' behaviors properly such as their facial expressions or eye movements, etc. I figured out the way to get the most out of it by asking them to <mark>think out loud</mark> during the session.</li>
                <li>This project made me realize the importance of iterative design evaluations and refinements to fix emerging errors and create the best end results.</li>
            </ul>
        
        </div>
    </div>
    
    <div class="btn-container">
    <section class="color-1">
        <p>
            <a href="/safe-haven/"><button class="btn">&larr; Back</button></a>
            <a href="/grow-together/"><button class="btn">Next &rarr;</button></a>
        </p>
    </section>
    </div>
</section>

   
<!-- Footer -->
<footer>
    <small>©2022 Website Desinged & Coded by Tomomi Matsuzaki</small>
</footer>    

  
        
</body>
</html>

 