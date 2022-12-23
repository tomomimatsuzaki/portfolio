<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
?> 
<div class="quick-nav project-flex">
    <div>
        <p>Quick Nav</p>
        <a href="#safe-discover"><div class="quick-btn">1. Discover</div></a>
        <a href="#safe-define"><div class="quick-btn">2. Define</div></a>
        <a href="#safe-ideate"><div class="quick-btn">3. Ideate</div></a>
        <a href="#safe-prototype"><div class="quick-btn">4. Prototype</div></a>
        <a href="#safe-test"><div class="quick-btn">5. Test</div></a>
        <a href="#safe-final-design"><div class="quick-btn">6. Final Design</div></a>
    </div>
</div>

<section class="project-box">
<!---    
<div class="safe-heading project-flex">
    <div class="safe-heading-left">
        <img src="/images/safehaven-heading.png" alt="Safe Haven" width="100%"> 
    </div>
    <div class="safe-heading-right"> 
            <h3>Safe Haven</h3> 
            <p>A digital volunteer board application that aims to bridge the disconnect between local opportunities available to support Afghan refugees and individuals who want to help them. </p>  
    </div>
</div> 
--->
<div class="project-step">
    <img src="/images/safehaven_thumbnail.png" alt="Safe Haven Project Header Image" class="header-img">
    <div class="step-left">
        
        <h1 class="project-title">Safe Haven</h1>
        <p>#AppDesign #CaseStudy</p>
    </div>
    
    <div class="step-right">
        
        <div class="title-box"> 
                <h3 class="small-title">Background</h3> 
            </div>
            <p>Decades of conflict in Afghanistan, including the recent political takeover of the country and the evacuation of American troops in 2021, have contributed to a growing global refugee crisis. With tens of thousands of displaced Afghans arriving in the United States this year, there exists a major opportunity for communities to work alongside local refugee relief organizations to support and welcome resettled individuals and families.</p><br>
            <p>We wanted to help them and we were also hesitant to pursue this project because of the potential difficulty of engaging stakeholders and the uncertainty over what a possible design solution might look like. But when it came time to choose, we were unanimous: we all wanted to pursue a purposeful, impact-driven project.</p>
        
            <table class="project-info-table">
                <tr>
                    <th>Duration</th>
                    <td><p>10 weeks (Sep-Dec 2021)</p></td>
                </tr>
                <tr>
                    <th>Project Type</th>
                    <td><p>Course Project <br>Team: Tomomi Matsuzaki, Connie Yang, Kevin Glatt, Warisha Soomro</p></td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td><p>UX Design Lead <br>Major contributions - user flow, sketching, wireframe, lo-fi/hi-fi prototyping, usability test, visual design, video prototyping</p></td>
                </tr>
                <tr>
                    <th>Tools</th>
                    <td><p>Figma, Illustrator, Premirer Pro</p></td>
                </tr>
        
            </table>
    </div>
</div> 
    
<div class="project-step project-flex">
        <div class="step-left">
            
        </div>
        <div class="step-right">
            
            <div class="title-box">
                <h3 class="small-title">Initial Design Question</h3> 
            </div>
            <p>Our project started with this simple design question:</p>
            <p class="emphasize"><mark>How might we help Afghan refugee resettlement <br>in Washington state?</mark></p>
        </div>
</div>
    
<div class="project-step project-flex">
        <div class="step-left">
            
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Design Thinking Process</h3>
            </div>
            <p>To tackle complex problems, we applied the iterative design thinking process.</p>
        </div>
</div>
    
        <div class="project-step more-space">
            
            <img src="/images/design-thinking.svg" alt="Design Thinking" class="process-image">
        </div>
      

    
    <div class="project-step project-flex" id="safe-discover">
        <div class="step-left">
                <h3 class="safehaven-pink">Discover</h3>
        </div>
        <div class="step-right">
            <h4 class="smaller-heading" style="margin-top:10px;">Initial Target Users</h4>
            <p style="margin-bottom:40px;">Due to proximity, lack of a language barrier, and ease of access within our 10-week timeline, we decided against targeting the refugees themselves and <mark>opted to target people who want to help incoming refugees</mark>.
            
            
            <table class="survey-table">
                <tr class="table-center">
                    <td><img src="/images/safehaven-org.png" alt="Afghan Refugee Relief Organizations" width="80px"></td>
                    <td><img src="/images/safehaven-community.png" alt="Community Individuals" width="80px"></td>
                </tr>
                <tr class="table-center">
                    <td><p>Afghan refugee relief organizations</p></td>
                    <td><p>Individuals in the Seattle Communities</p></td>
                </tr>
            </table>
            
            <div class="title-box">
                <h3 class="small-title" style="margin-top:120px;">User Survey<br>with Community Individuals</h3> 
            </div> 
            <p>We sent out an online survey to the individuals in Seattle communities to gather data quickly and flexibly from a large population of users through remote-friendly convenience sampling. We collected 30 responses.</p>
            <h4 class="smaller-heading" style="margin-bottom:20px;">Goals</h4>
            <ul class="research-list">
                <li>Understand individuals' awareness levels</li>
                <li>Assess individuals' interest in volunteering</li>
                <li>Identify barriers to volunteering</li>
            </ul> 
            
            <h4 class="smaller-heading" style="margin-bottom:20px;">Key Findings</h4>
            
            <p class="emphasize">1. Motivations - <mark>High Interest Level</mark></p>
                        <p style="margin-bottom:50px;">88% of survey respondents are interested in volunteering or offering support for refugees.</p>
            <table class="survey-table">
                <tr class="table-center">
                    <td><img src="/images/user.png" alt="empathy" width="55px"></td>
                    <td><img src="/images/diamond.png" alt="personal reward & value" width="55px"></td>
                    <td><img src="/images/world.png" alt="social responsibility" width="55px"></td>
                </tr>
                <tr class="table-center">
                    <td width="33.3%"><p><b>Empathy</b></p></td>
                    <td width="33.3%"><p><b>Personal Reward or Value</b></p></td>
                    <td width="33.3%"><p><b>Social Responsibility</b></p></td>
                </tr>
                <tr>
                    <td>
                        <p><i>“Because I'm an immigrant and I can empathize with the pain of leaving your country and going to a foreign one.”</i></p>
                    </td>
                    <td>
                        <p><i>“Gives me Happiness.” “Feel good knowing I contributed to helping someone.”</i></p>
                    </td>
                    <td>
                        <p><i>“Social justice and general sense of responsibility for humanity.” </i></p>
                    </td>
                </tr>
            </table>
            
            <p class="emphasize" style="margin-top:60px;">2. Pain Points - <mark>Low Awareness & Barriers</mark></p>
                        <p>66% of respondents have low to moderate familarity of the Afghan refugee crisis.</p><br>
                    <p style="margin-bottom:30px;"><b>Major concerns & obstacles</b></p>
            
            <table class="survey-table" style="margin-top:50px;">
                <tr class="table-center">
                    <td><img src="/images/92.png" alt="Pain Point" class="chart"></td>
                    <td><img src="/images/62.png" alt="Pain Point" class="chart"></td>
                    <td><img src="/images/62.png" alt="Pain Point" class="chart"></td>
                    <td><img src="/images/43.png" alt="Pain Point" class="chart"></td>
                </tr>
                <tr class="table-center">
                    <td>
                        <p>Time</p>
                    </td>
                    <td>
                        <p>Don't know where to start</p>
                    </td>
                    <td>
                        <p>Language barrier</p>
                    </td>
                    <td>
                        <p>Cultural awareness / knowledge of the Afghan refugee crisis </p>
                    </td>
                </tr>
                
            
            </table>
            
            <div class="title-box">
                <h3 class="small-title" style="margin-top:150px;">User Interviews<br>with Refugee Relief Organizations</h3> 
            </div> 
            <p>We recruited administrative staff and volunteer program coordinators from local refugee relief organizations in Seattle, including the International Rescue Committee (IRC) and Jewish Family Services (JFS), to participate in discovery interviews. These individuals have first-hand experiences interacting and working with the Afghan refugee population and the Seattle community.</p>
            <h4 class="smaller-heading">Goals</h4>
            <ul class="research-list">
                <li>Organizations’ Needs and goals in supporting the refugee resettlement process</li>
                <li>Organizational pain points and challenges with providing support and services</li>
                <li>Opportunities to volunteer or help that is available to community members</li>
            </ul> 
            
            <h4 class="smaller-heading">Key Findings</h4>
            <table class="interview-table">
                <tr>
                    <th>Needs & Goals</th>
                    <th>Pain Points</th>
                </tr>
                <tr>
                    <td><p><b>Organizational Context</b></p>
                        <p>1. The first 90 days when Afghan refugees arrive in Seattle are characterized by intensive case management. </p>
                        <br>
                        <p>2. <mark>Organizations leans heavily on their community partners and donors</mark> for financial and resources support</p>
                        <br>
                        <p><b>Volunteer Opportunities</b></p>
                        <p>1. The types of opportunities to help Afghan refugee resettlement were mainly <mark>monetary donations, resources donation, and volunteering</mark>.</p>
                        <br>
                        <p>2. Some volunteering opportunities <mark>require a minimum time commitment, qualifications, and experience</mark>.</p>
                    </td>
                    <td>
                        <p>1. Given how sudden the Afghanistan evacuation was, refugee relief organizations and government agencies are overwhelmed capacity-wise.</p>
                        <br>
                        <p>2. <mark>Administrative capacity at the organization is also limited.</mark> There is a small amount of staff to handle volunteer intake and training.</p>
                        <br>
                        <p>3. Only receives around 24 hours notice before a refugee arrives at Sea-Tac</p>
                        <br>
                        <p>4. <mark>Many volunteers get by with the minimal amount of training</mark> necessary to do the job.</p>
                    </td>
                </tr>
            </table>
            
            <div class="title-box">
                <h3 class="small-title" style="margin-top:150px;">Competitive Analysis</h3> 
            </div>
            <p>Given the early stage in our design process and challenges accessing Afghan refugees and refugee relief organizational staff as end users, the competitive analysis was a preferred, low-cost secondary research method for gathering more context into our problem space. <mark>We reviewed and walked through the online volunteer application processes of resettlement agencies and general social service organizations.</mark></p>
            <h4 class="smaller-heading">Goals</h4>
            <ul class="research-list">
                <li>Learn the process by which refugee relief organizations and other non-profits accept, onboard, and coordinate volunteers</li>
                <li>Identify strengths and areas of friction in the process</li>
            </ul> 
            
            <h4 class="smaller-heading" style="margin-bottom:20px;">Key Findings</h4>
            <ul class="research-list">
                <li>Organizations have variable quality UI for exposing volunteer opportunities and contextual volunteer program information.</li>
                <li>Most organizations’ <mark>application processes are more likely to be traditional</mark> (online form, email, etc.)</li>
                <li><mark>Volunteer applications can be fairly burdensome</mark> to complete with multiple sections and requirements</li>
                <li>Most organizations are working individually to collect volunteer applicants.</li>
            </ul> 
        </div>
    </div>
    
    <div class="project-step project-flex" id="safe-define">
        <div class="step-left">
                <h3 class="safehaven-pink">Define</h3>
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">User Personas<br>Who are we designing for?</h3> 
            </div>
            <p>To specify our targeted users, our team created user personas that represent different user archetypes.</p>
            <ul class="research-list">
                <li class="my-work">I revised the first draft to make it more aligned with our user research findings.</li>
                <li class="my-work">I created the persona template.</li>
            </ul>
            
            <figure style="margin-bottom:30px;">
                <img src="/images/persona-1.png" alt="Persona 1" class="persona-img">
                <figcaption style="text-align:left;"><b>Primary User</b> - David is a community member in Seattle who's interested in volunteering to support Afghan refugee resettlement. </figcaption>
            </figure>
                
            <figure style="margin-bottom:30px;">
                <img src="/images/persona-2.png" alt="Persona 2" class="persona-img">
                <figcaption style="text-align:left;"><b>Secondary User</b> - Sarah works at a refugee relief orabanization as a director outreach.</figcaption>
            </figure>
            
            <h3 class="small-title" style="padding-top:150px;">Defined core problems.<br>Refined our design questions.</h3>
            <p>We analyzed user research findings and synthesized them to define the core problems we need to solve. Here is how we refined our initial design question: </p>
            <ul class=design-questions>
                <li><span style="text-decoration:line-through;">How might we help the Afghan refugee resettlement in Washington state?</span></li>
                <li>1. How might we <mark>increase awareness</mark> of the Afghan refugee crisis?</li>
                <li>2. How might we enable interested individuals to <mark>access opportunities</mark>?</li>
                <li>3. How might we <mark>reduce barriers</mark> to volunteering?</li>
                <li>4. How might we <mark>increase administrative efficiency</mark> of organizations?</li>
            </ul>
        </div>
    </div>
    
    
    <div class="project-step project-flex" id="safe-ideate">
        <div class="step-left">
            <h3 class="safehaven-pink">Ideate</h3>    
        </div>
        <div class="step-right">
            <div class="title-box">
            <h3 class="small-title">From brainstorming<br>to decision making.</h3>
            </div>
            
            <h4 class="smaller-heading">Rapid Sketch Session</h4>
            <p style="margin-top:20px;">We generated 24 design ideas through the team sketching session and discussed each idea's strengths and weaknesses.</p>
            <figure>
                <img src="/images/safehaven-sketches.png" alt="Ideation Sketches" width="100%">
                <figcaption>Sketch session with the team</figcaption>
            </figure>
            
            <h4 class="smaller-heading" style="margin-top:120px;">Design Concept</h4>
            <p class="emphasize" style="margin-top:20px;">Digital Volunteer Board at a Bus Stop</p>
            <p style="margin-bottom:30px;">While this idea could be implemented in a wide range of settings, the team identified a bus stop as a quintessential public space that many people pass in their daily routine. Our design aims to <mark>turn the time spent waiting at a bus stop into an opportunity to learn about the Afghan refugee crisis and get involved in addressing it</mark>.</p>
            <figure>
                <img src="/images/bus-stop-kiosk.png" alt="Bus stop kiosk sample image" id="bus-kiosk-img" >
                <figcaption style="text-align:left;">Sample image from steem KR</figcaption>
            </figure>
            <br>
            <div class="title-box">
            <h3 class="small-title" style="margin-top:120px;">Let's embody our idea by specifying more details.</h3>
            </div>
            <h4 class="smaller-heading" style="margin-bottom:60px;">Methods</h4>
            
            <table class="survey-table">
                <tr class="table-center">
                    <td><img src="/images/design-goals.png" alt="Design Goals" width="55px"></td>
                    <td><img src="/images/storyboard.png" alt="Storyboard" width="55px"></td>
                    <td><img src="/images/user-flow.png" alt="User Flow" width="55px"></td>
                </tr>
                <tr class="table-center">
                    <td><p><b>Design Goals</b></p></td>
                    <td><p><b>Storyboard</b></p></td>
                    <td><p><b>User Flow</b></p></td>
                </tr>
                <tr>
                    <td>
                        <p>Clarify what our design solution needs to offer to meet users' needs</p>
                    </td>
                    <td>
                        <p>Visually imagine and explore a user's experience in specific scenario</p>
                    </td>
                    <td>
                        <p>Map out each and every step the users take to complete tasks</p>
                    </td>
                </tr>
            </table>
        
        <div class="title-box" style="margin-top:120px;">
            
            <h3 class="small-title" >Design Goals</h3>
        </div>
            <p>We found that <mark>the average amount of time people wait at a bus stop in the Seattle area on a weekday was <b>15 mins</b></mark>. We set the following design requirements by ensuring that we meet users' needs and goals in time.</p>
            <table class="designgoal-table">
                <tr>
                    <th>High Visibility</th>
                    <td>
                        <p>Draw attention in a highly trafficked space for impact reach</p>
                    </td>
                </tr>
                <tr>
                    <th>Digestible Educational Information</th>
                    <td>
                        <p>Information-rich but minimalistic to prioritize the most important content to educate bystanders</p>
                    </td>
                </tr>
                <tr>
                    <th>Flexibile Opportunity Search</th>
                    <td>
                        <p>Make it easy to find volunteer opportunities that meet users' preference from a wide range of types of support</p>
                    </td>
                </tr>
                <tr>
                    <th>Seamless Activation</th>
                    <td>
                        <p>Facilitates easy access to additional resources and clear, specific next steps to take action</p>
                    </td>
                </tr>
            </table>
        
            
        <div class="title-box" style="margin-top:120px;">
            <h3 class="small-title">Storyboard</h3> 
        </div>
            <p style="margin-bottom:30px;">User Case - David finds potential opportunities to help Afghan refugee resettlement in his community while waiting for his bus at the bus stop.</p>
            <figure>
                <img src="/images/storyboard.jpg" alt="Storyboard" width="90%">
                <figcaption class="my-work" style="text-align:left;">* My storyboard sketch</figcaption>
            </figure>
            
        <div class="title-box" style="margin-top:120px;">
            <h3 class="small-title">User Flow Diagram</h3> 
        </div>
            <p>Mapping out each step to take in two main pathways, “Learn” and “Get Involved.”</p>
            <p><b>Learn:</b> Users learn about the cultural background of Afghanistan and the story of the recent Afghan refugee crisis.</p>
            <p><b>Action:</b> Users explore available opportunities to support the Afghan refugee resettlement by using 4 filters: time, stuff, skills, and money.</p>
            
            <p><span class="my-work">I created the diagrams below.</span></p>
        
        </div>
    </div>
    
    <div class="sub-project-step" style="margin-top:0px;">
        <div class="ab-left">
            <figure>
                <img src="/images/user-flow1.svg" alt="User Flow (Learn)" alt="User Flow (Learn)" class="ab-img">
                <figcaption>Learn Pathway</figcaption>   
            </figure>   
        </div>
        <div class="ab-right">
            <img src="/images/user-flow2.svg" alt="User Flow (Learn)" alt="User Flow (Learn)" class="ab-img">
                <figcaption>Action Pathway</figcaption> 
        </div>
    </div>

    <div class="project-step project-flex" id="safe-prototype">
        <div class="step-left">
            <div class="step-left">
            <h3 class="safehaven-pink">Prototype</h3>    
            </div>        
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Lo-Fi Prototype</h3> 
            </div> 
            <p style="margin-bottom:30px;">We have now a better understanding of how users interact with the digital board in real-world scenarios and how we navigate users to complete their tasks. With that in mind, I started off with sketching wireframes and then built a lo-fi prototype using Figma.</p>
            <figure>
                <img src="/images/safehaven-wireframe-sketch.jpg" alt="Wireframe sketch" width="100%">
                <figcaption class="my-work" style="text-align:left;">* My wireframe sketch</figcaption>   
            </figure>
            <figure style="margin-top:30px;">
                <img src="/images/lo-fi-prototype.png" alt="Lo-Fi Prototype" width="100%">
                <figcaption class="my-work" style="text-align:left;">* I created the lo-fi prototype except "Action(Map)"</figcaption>
            </figure>
        </div>
    </div>
    
    <div class="project-step project-flex" id="safe-test">
        <div class="step-left">
            <div class="step-left">
            <h3 class="safehaven-pink">Test & Evaluate</h3>    
        </div>        
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Concept Testing</h3> 
            </div> 

            <h4 class="smaller-heading" style="margin-bottom:20px;">Goals</h4>
            <ul class="research-list" style="margin-bottom:40px;">
                <li>Learn users' screen-to-screen experience from the Home page to the Learn and Action page</li>
                <li>Collect impressions and feedback on each page</li>
            </ul>
             
            <p class="emphasize red" style="margin-top:20px;">Major change in the information architecture</p> 
            
            <table class="interview-table" style="margin-top:20px;">
                <tr>
                    <td><b>Findings</b><br>
                        <p>Monetary donation should be a simpler and easier action instead of placing under the ‘action’ pathway</p><br>
                        <p>Some participants didn't feel comfortable with clicking the "Money" filter in a public place</p>
                    </td>
                    <td>
                        <b>Design Changes</b><br>
                        <p><mark>Removed the 'Money' filter from the "Action" flow and added the ‘Donate’ CTA on the home screen as its own pathway.</mark> <br><br>The Home screen will have three main pathways, which we renamed ‘Learn,’ ‘Get Involved’ and ‘Donate’ now</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="/images/IA-before.svg" alt="Information Architecture - begore"  width="100%">    
                    </td>
                    <td>
                        <img src="/images/IA-after.svg" alt="Information Architecture - after"  width="100%">
                    </td>
                </tr>
            </table>
            
            <div class="title-box">
                <h3 class="small-title" style="margin-top:150px;">Usability Test & Improvement</h3> 
            </div> 
            
            <h4 class="smaller-heading" style="margin-bottom:20px;">Goals</h4>
            <ul class="research-list">
                <li>Evaluate the ease of use of the touch screen navigation and controls</li>
                <li>Understand the learnability and understandability of the interface</li>
                <li>Learn users' satisfaction with the content</li>
            </ul>
            
            <table class="interview-table" style="margin-top:60px;">
                <tr>
                    <td style="padding-top:15px;" colspan="2">
                        <p class="emphasize red">1. A little more context built trust and improved learnability</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <b>Findings</b><br>
                        <ul class="research-list">
                            <li>All participants preferred to start with the ‘Learn’ pathway to get some basic knowledge before searching for opportunities in the ‘Get involved’ pathway.</li>
                            <li>Some titles and phrases weren't immediately clear to many participants. (ex;  Story of the first 90 days)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <b>Design Changes</b><br>
                        <ul class="research-list">
                            <li>Adjusted header text and added learning content to the Home screen to provide context for users and draw them into both ‘Learn’ and ‘Get Involved’ pathways with some basis of information.</li>
                            <li><mark>Adding brief descriptions</mark> to some pages gave more context and <mark>increased users' confidence in the interaction</mark></li>    
                        </ul>
                        <img src="/images/safehaven-design-changes2.png" alt="Usability Test Findings" width="100%">
                    </td>
                </tr>
                
                <tr>
                    <td style="padding-top:60px;" colspan="2">
                        <p class="emphasize red">2. Simple and intuitive one-click filter design</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Findings</b><br>
                        <ul class="research-list" >
                            <li>Filters and their function were unclear to some users, and some users may not want to use them at all.</li>
                            <li>The search function in the filter was not useful during a short interaction.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Design Changes</b><br>
                        <ul class="research-list">
                            <li><mark>Removed the search bar to reduce the complexity</mark> of the filter feature</li>
                            <li><mark>Made icons more descriptive </mark> to help users visually and quickly understand what each label refers to</li>
                            <li><mark>Limiting users to choose one filter at a time</mark> instead of selecting multiple filters reduced the complexity</li>
                        </ul>
                        <img src="/images/safehaven-design-changes3.png" alt="Iterative design progress for the filters" width="100%">
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:60px;" colspan="2">
                        <p class="emphasize red">3. Better cross device interactions and information exchange</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Findings</b><br>
                        <ul class="research-list">
                            <li>"Not sure what ‘Share with phone’ means, I think that would bring the page to phone…" </li>
                            <li>“I really like that there’s a QR code in the description of each opportunity. I wonder if that could be a more direct thing."</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Design Changes</b><br><br>
                        <img src="/images/safehaven-design-changes1.png" alt="Safe Haven Design Changes" width="100%">
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:60px;" colspan="2">
                        <p class="emphasize red">4. Increased consistency & reduced destructions</p>
                        <p>Our initial idea was to incorporate images or videos into our design to get people's attention and increase user engagement. However, I realized that <mark>the way we combined images and texts was causing some accesibility issues and making it hard for users to quickly digest information</mark>. After this project was done, I made the following design changes.</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <img src="/images/safehaven-design-changes.png" alt="Safe Haven Design Changes" width="100%">
                    </td>
                </tr>
            </table>
            </div>
        </div>

    
    <div class="project-step project-flex" id="safe-final-design">
        <div class="step-left">
            <h3 class="safehaven-pink">Hi-Fi Prototype</h3>             
        </div>
        <div class="step-right">
            <h4 class="smaller-heading">My Contributions</h4>
            <ul class="research-list my-work">
                <li>I was responsible for creating the visual design including icons and graphics</li>
                <li>I was responsible for building the interactive prototype with Figma</li>
            </ul> 
        </div>
    </div>
    
    <div class="project-step project-flex">
        <div class="prototype-left">
            <img src="/images/safehaven-home1.png" alt="Home Screen" class="prototype-img">                
        </div>
        <div class="prototype-right">
            <div class="title-box">
                <h3 class="small-title">Home Screen</h3> 
                <p>Presents the user with three calls to action - Learn, Get Involved, and Donate - over a soft background with rotating images that gently capture attention.</p>
                
            </div> 
        </div>
    </div>
    
    <div class="project-step">
        <div class="prototype-left prototype-flex">
            <img src="/images/safe-haven-learn1.png" alt="Learn Screen" class="prototype-img">  
            <img src="/images/safe-haven-learn2.png" alt="Learn Screen" class="prototype-img"> 
        </div>
        <div class="prototype-right">
            <div class="title-box">
                <h3 class="small-title">Learn Pathway</h3> 
                <p>Provides two educational paths to increase their understanding of the issue locally and globally. </p>
                <h4 class="smaller-heading" style="margin-top:40px;">10 Facts About the Afghan Refugee Crisis</h4>
                <p>Help users gain basic knowledge of the Afghan culture and the Afghan refugee crisis</p>
                <h4 class="smaller-heading" style="margin-top:40px;">Story of the First 90 Days</h4>
                <p>Create emotional connections with users to drive their actions by leverage the power of storytelling focusing on single character.</p>
            </div> 
        </div>
    </div>
    
    <div class="project-step">
        <div class="prototype-left prototype-flex">
            <img src="/images/safehaven-getinvolved1.png" alt="Get Involved Screen" class="prototype-img">  
            <img src="/images/safehaven-opportunity-card.png" alt="Get Involved Screen" class="prototype-img"> 
        </div>
        <div class="prototype-right">
            <div class="title-box">
                <h3 class="small-title">Get Involved Pathway</h3> 
                <p>Users can easily discover available opportunities to support Afghan refugee resettlement that match their preferences, time commitment and experience using the one-click filters.</p>
                
                <h4 class="smaller-heading" style="margin-top:40px;">Expanded Opportunity Card</h4>
                <p>The expanded card allows users find more information about the opportunity details. Users can scan QR code to get more information and complete the application process on their phone.</p>
            </div> 
        </div>
    </div>
    
    <div class="project-step project-flex">
        <div class="prototype-left prototype-flex">
            <img src="/images/safehaven-getinvolved2.png" alt="Get Involved Screen" class="prototype-img">   
        </div>
        <div class="prototype-right">
            <div class="title-box">
                <h3 class="small-title">Get Involved Pathway<br>Map View</h3> 
                <p>Users can switch to the map view to find location-oriented information.</p>
            </div> 
        </div>
    </div>
    
    <div class="project-step project-flex">
        <div class="prototype-left">
            <img src="/images/bus-qr.png" alt="Bus Notification $ QR Code" class="prototype-img">                
        </div>
        <div class="prototype-right">
            <div class="title-box">
                <h3 class="small-title">Bus Notification</h3> 
                <p>A bus Notification allows users to have enough time to scan QR code.</p>
                
                <h3 class="small-title" style="margin-top:40px;">Accessible Menu bar</h3> 
                <p>Considering the accessibility of the digital board, we placed the menu bar at the bottom of the screen. We also avoided placing any buttons on the upper side of the screen.</p>
                
                <h3 class="small-title" style="margin-top:40px;">QR Code</h3> 
                <p>The QR code is exposed on every screen to allow users to quickly scan the code to continue information exploration when they have to leave.</p>
            </div> 
        </div>
    </div>
    
    <div class="project-center" style="margin-top:150px;">
        <h3 class="small-title" style="margin-bottom:30px;">UI Style Guide</h3>
        <img src="/images/ui-design-system.png" alt="UI Design System Image" class="ui-guide">
    </div>
    
    <div class="project-center">
        <h3 class="small-title" style="margin-top:60px;">Experience Mockup</h3>
        <img src="/images/safehaven-heading.png" alt="Lo-Fi Prototype" class="ui-guide">
    </div>
    
    <div class="project-center">
        <h3 class="small-title" style="margin-top:60px;">Figma Prototype</h3>
        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="550" height="700" class="figma-iframe" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2F04o0rn1h1b9RaAepXqwOwh%2FSafe-Haven%3Fnode-id%3D2%253A837%26scaling%3Dscale-down%26page-id%3D0%253A1%26starting-point-node-id%3D2%253A837" allowfullscreen></iframe>
        <div class="btn-container">
            <a href="https://www.figma.com/proto/04o0rn1h1b9RaAepXqwOwh/Safe-Haven?node-id=2%3A837&scaling=scale-down&page-id=0%3A1&starting-point-node-id=2%3A837" target="_blank"><button class="btn">Try Prototype</button></a>
        </div>
    </div>
    
    <div class="project-center">
        <h3 class="small-title">Video Prototype</h3>
        <p class="my-work" style="margin-top:30px;">I was responsible for creating the video prototype with Adobe Premiere Pro except for the narrations.</p>
        <iframe width="800" height="450" class="prototype-iframe" src="https://www.youtube.com/embed/J_tW42zirr0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <div class="project-step project-flex">
        <div class="step-left">
                     
        </div>
        <div class="step-right">
            <div class="title-box">
                <h3 class="small-title">Impact</h3> 
            </div> 
            <p>Although it was an academic case study project, we saw the potential that Safe Haven could <mark>increase a sense of community and drive individuals' action towards volunteering</mark> from feedback we received.</p><br>
            <ul class="reflection-list">
                <li><i>"Kudos to this team for pushing us towards new designed interactions that foster community."</i></li>
                <li><i>"Love how you took the initiatives to put thoughts into action in an easier way."</i></li>
            </ul>
            
            <p style="margin-top:60px;">We saw the possibilities to <mark>turn people's spair time into the opportunity to learn about social problems and discover ways to make a positive impact in their community</mark>.</p><br>
            <ul class="reflection-list">
                <li><i>"Love working in those micro moment."</i></li>
                <li><i>"For me, QR code works great since I don’t have much time here at the bus stop."</i></li>
                <li><i>"I also like that there's a 'Learn' button there because I don't know much about the Afghan Refugee Crisis."</i></li>
            </ul>
            <div class="title-box">
                <h3 class="small-title" style="margin-top:90px;">Next Step</h3> 
            </div> 
            <p>If I had more time...</p><br>
            <ul class="reflection-list">
                <li>I would <mark>conduct further usability testing on the map view</mark> to understand how users would interact with the application to collect location-oriented information and see how useful the filter feature is to help users find opportunities that meet their preferences.</li>
                <li>I would explore how we can craft <mark>story-driven content for the Learn pathway</mark> that successfully grabs users’ emotions and drives their actions toward volunteering. I’d examine how we can <mark>incorporate CTA in the stories</mark> to lead them to the Get Involved pathway.</li>
                <li>In the concept testing, we found some people might hesitate to give monetary donations using their credit cards at a public bus station. However, since donations are vital for the refugee relief organizations, I’d like to further explore <mark>how we can achieve safer and easier donation process design</mark> to solve this challenge.</li>
            </ul>
        
        <div class="title-box">
            <h3 class="small-title" style="margin-top:90px;">Reflection</h3> 
        </div>
            <ul class="reflection-list">
                <li>While not without challenges, choosing this path was immensely rewarding, both in the experiences it led to and the lessons learned from those experiences. Among those lessons, the most important was that the value of human-centered design is not just in the creation of more appropriate and usable design solutions that result from the involvement of users but in <mark>bringing together diverse stakeholders in pursuit of more inspiring and inclusive futures</mark>.</li>
                <li>Designing an application for a kiosk <mark>requires different perspectives and considerations</mark> than designing a mobile app (Context, environment, accessibility, etc.)</li>
                <li><mark>Iterative tests and evaluations are critical for designers</mark> to continuously developed our understanding of what works the best for the users.</li>
                <li>Always <mark>having clear design goals and requirements was key</mark> to keep ourselves aligned with what we need to achieve while making design changes through the iterative design process. </li>
            </ul>
        </div>
    </div>
    
    
    <div class="btn-container">
    <section class="color-1">
        <p>
            <a href="/calligraphy-work/"><button class="btn">&larr; Back</button></a>
            <a href="/seattle_central_covid19/"><button class="btn">Next &rarr;</button></a>
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

 