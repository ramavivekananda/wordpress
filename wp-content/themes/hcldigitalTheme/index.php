<?php
 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
 $link = "https"; 
else
 $link = "http"; 

// Here append the common URL characters. 
$link .= "://"; 

// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 

// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 
   
    get_header();
   // require('header.php');
  
?>

      <?php
    // echo "-----".$link. "----";
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
<h2><!-- <a href="<?php //the_permalink(); ?> <?php the_title(); ?></a> --></h2>
<?php the_content(); ?>
<?php get_template_part('content','page'); ?> 
<?php    endwhile;
    else :
        echo '<h3>No content found </h3>';
endif;
   ?>
   <div class="jumbotron jumbotron-fluid">
  <div class="container-fluid">
    <div class="row p-0">
      <div class="col-12 col-md-6 headingTxt"> 
          <h3><?php echo get_theme_mod('hclDigitalHack-content-headLine')?></h3>
          <h4 class="display-4"><strong><?php echo get_theme_mod('hclDigitalHack-content-headLine2')?></strong></h4>
          <p class="display-5"><?php echo get_theme_mod('hclDigitalHack-content-date')?></p>
          <p class="display-5"><?php echo get_theme_mod('hclDigitalHack-content-place')?></p>
          <p><a href="#Register" class="btn registerButn">Register Now</a></p>
          <p ><?php echo get_theme_mod('hclDigitalHack-content-condition')?></p>
        </div>
        <div class="col-12 col-md-6 float-md-right p-0"> <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-content-image'))?>"  class="img-fluid" alt="Banner" /> </div>

</div>
</div>
</div>
  
<!-- Second section Started  -->
<div class="container-fluid">
  <div class="row pl5">
    <div class="col-12">
        <p><?php echo get_theme_mod('hclDigitalHack-content-area')?></p>

        <div class="card cardBox">
        <div class="card-header">
          <h3>Upcoming Hackathons</h3>
        </div>
        <div class="card-body">
          <div class="row justify-content-between pl5">
            <div class="col-12 col-md-5 justify-content-center">
                <p class="text-center" style="color:#5853d1; font-size:16px;">We are excited at the prospect of hosting you at <br />the HCL Seattle Campus, for the Hackthon. <br />Please register if you are:</p>
                <p class="text-center"><img src="<?php echo $link;?>wp-content/uploads/2019/10/seattle-icon1.png" /><br />Front-end Engineer (UI)</p>
                <p>&nbsp;</p>
                <p class="text-center"><img src="<?php echo $link;?>wp-content/uploads/2019/10/seattle-icon2.png" /><br />API Engineer (APIs + Integration)</p>
                <p>&nbsp;</p>
                <p class="text-center"><img src="<?php echo $link;?>wp-content/uploads/2019/10/seattle-icon3.png" /><br />Full Stack Engineer</p>
                <p>&nbsp;</p>
                <p class="text-center"><img src="<?php echo $link;?>wp-content/uploads/2019/10/seattle-icon4.png" /><br />DevOps Engineer</p>
                <p>&nbsp;</p>
                <p>The full agenda of the Hackathon along with further details, will be communicated to all shortlisted candidated before the event.</p>
              
            </div>
            <div class="col-12 col-md-5">
              <div class="card-columns card">
                <div class="card-body">
                  <div class="row justify-content-center" style="background-color: #FFFFFF;">
                    <div class="col-12 col-md-10 col-lg-10 col-xl-10">
                      <div class="row" id="Register">
                        <div class="col text-center">
                          <h3 class="driveHeading1">Registration</h3>
                        </div>
                      </div>
                      <div class="row align-items-center">
                        <div class="col-12 mt-4">
							<input name="txtName" type="text" id="txtName" class="form-control formField" placeholder="Name *" />
							 <span id="rfvName" style="color:Red;font-size:Small;display:none;">*</span>	
                        </div>
                      </div>
                      <div class="row align-items-center">
                        <div class="col-md-6 col-12 mt-4">
                             <select name="DDLocation" id="DDLocation" class="form-control formField">
	<option selected="selected" value="Location *">Location *</option>
	<option value="Seattle">Seattle</option>

</select>
                             <span id="rfvDDLocation" style="color:Red;font-size:Small;display:none;">*</span>
                          
                        </div>
                          <div class="col-md-6 col-12 mt-4">
                               <input name="txtEmail" type="text" id="txtEmail" class="form-control formField" placeholder="Email ID *" />
							 <span id="rfvEmail" style="color:Red;font-size:Small;display:none;">*</span>	
							 
							 <span id="revEmailID" style="color:Red;display:none;"></span>
                          </div>
                      </div>
                     <div class="row">
                            <div class="col-md-6 col-12 mt-4">
                                <select name="ddlMainSkillSet" id="ddlMainSkillSet" class="form-control formField">
	<option value="-1">Main Skillset *</option>
	<option value="Front-End">Front-End</option>
	<option value="Server-Side">Server-Side</option>
	<option value="Full-Stack">Full-Stack</option>

</select>
                                <span id="rfvMainSkillset" style="color:Red;display:none;"></span>
                            </div>
                            <div class="col-md-6 col-12 mt-4">
                                <select name="ddlCompetency" id="ddlCompetency" class="form-control formField">
	<option selected="selected" value="-1">Competency *</option>
	<option value="Novice">Novice</option>
	<option value="Advanced Beginner">Advanced Beginner</option>
	<option value="Competent">Competent</option>
	<option value="Proficient">Proficient</option>
	<option value="Expert">Expert</option>

</select>
                                <span id="rfvCompetency" style="color:Red;display:none;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mt-4">
                                <select name="ddlMainSkill" id="ddlMainSkill" class="form-control formField">
	<option value="-1">Main Skill *</option>
	<option value="Front End – Angular">Front End – Angular</option>
	<option value="Front End – React">Front End – React</option>
	<option value="Java + Spring">Java + Spring</option>
	<option value="Java + Springboat">Java + Springboat</option>
	<option value="DotNet MVC">DotNet MVC</option>
	<option value="DotNet Core">DotNet Core</option>
	<option value="Other">Other</option>

</select>
                        
                         <span id="rfvMainSkill" style="color:Red;display:none;"></span>
                            </div>
                            <div class="col-md-6 col-12 mt-4">
                                 <select name="ddlMainSkillCompetency" id="ddlMainSkillCompetency" class="form-control formField">
	<option value="-1">Competency *</option>
	<option value="Novice">Novice</option>
	<option value="Advanced Beginner">Advanced Beginner</option>
	<option value="Competent">Competent</option>
	<option value="Proficient">Proficient</option>
	<option value="Expert">Expert</option>

</select>
                        
                         <span id="rfvMainSkillCompetency" style="color:Red;display:none;"></span>

                            </div>
                        </div>
                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <input name="txtOtherName" type="text" id="txtOtherName" class="form-control formField" />
                          <span id="rfvOtherName" style="color:Red;display:none;"></span>
                        </div>
                      </div>
                    <div class="row align-items-center mt-4">
                        <div class="col">Other areas of expertise/Secondary skills 
                            <textarea name="txtOther" rows="3" cols="20" id="txtOther" class="form-control formField" placeholder="Please enter other technologies you are skilled in.">
</textarea>
                        </div>
                      </div>
                      <div class="row align-items-center mt-4">
                        <div class="col small">This is a technical event and you should be a coder in order to participate. Further instructions will be communicated through mailers.</div>
                      </div>
                      <div class="row align-items-center">
                        <div class="col mt-4">
                             <select name="ddlCountry" id="ddlCountry" class="form-control formField">
	<option value="-1">Select Country</option>
	<option value="1">Afghanistan</option>
	<option value="2">Aland Islands</option>
	<option value="3">Albania</option>
	<option value="4">Algeria</option>
	<option value="5">American Samoa</option>
	<option value="6">Andorra</option>
	<option value="7">Angola</option>
	<option value="8">Anguilla</option>
	<option value="9">Antarctica</option>
	<option value="10">Antigua and Barbuda</option>
	<option value="11">Argentina</option>
	<option value="12">Armenia</option>
	<option value="13">Aruba</option>
	<option value="14">Australia</option>
	<option value="15">Austria</option>
	<option value="16">Azerbaijan</option>
	<option value="17">Bahamas</option>
	<option value="18">Bahrain</option>
	<option value="19">Bangladesh</option>
	<option value="20">Barbados</option>
	<option value="21">Belarus</option>
	<option value="22">Belgium</option>
	<option value="23">Belize</option>
	<option value="24">Benin</option>
	<option value="25">Bermuda</option>
	<option value="26">Bhutan</option>
	<option value="27">Bolivia</option>
	<option value="28">Bosnia and Herzegovina</option>
	<option value="29">Botswana</option>
	<option value="30">Bouvet Island</option>
	<option value="31">Brazil</option>
	<option value="32">British Indian Ocean Territory</option>
	<option value="33">British Virgin Islands</option>
	<option value="34">Brunei</option>
	<option value="35">Bulgaria</option>
	<option value="36">Burkina Faso</option>
	<option value="37">Burundi</option>
	<option value="38">Cambodia</option>
	<option value="39">Cameroon</option>
	<option value="40">Canada</option>
	<option value="41">Cape Verde</option>
	<option value="42">Caribbean Netherlands</option>
	<option value="43">Cayman Islands</option>
	<option value="44">Central African Republic</option>
	<option value="45">Chad</option>
	<option value="46">Chile</option>
	<option value="47">China</option>
	<option value="48">Christmas Island</option>
	<option value="49">Cocos (Keeling) Islands</option>
	<option value="50">Colombia</option>
	<option value="51">Comoros</option>
	<option value="52">Congo (Brazzaville)</option>
	<option value="53">Congo (Kinshasa)</option>
	<option value="54">Cook Islands</option>
	<option value="55">Costa Rica</option>
	<option value="56">Croatia</option>
	<option value="57">Cuba</option>
	<option value="58">Cura&#231;ao</option>
	<option value="59">Cyprus</option>
	<option value="60">Czech Republic</option>
	<option value="61">Denmark</option>
	<option value="62">Djibouti</option>
	<option value="63">Dominica</option>
	<option value="64">Dominican Republic</option>
	<option value="65">Ecuador</option>
	<option value="66">Egypt</option>
	<option value="67">El Salvador</option>
	<option value="68">Equatorial Guinea</option>
	<option value="69">Eritrea</option>
	<option value="70">Estonia</option>
	<option value="71">Ethiopia</option>
	<option value="72">Falkland Islands</option>
	<option value="73">Faroe Islands</option>
	<option value="74">Fiji</option>
	<option value="75">Finland</option>
	<option value="76">France</option>
	<option value="77">French Guiana</option>
	<option value="78">French Polynesia</option>
	<option value="79">French Southern Territories</option>
	<option value="80">Gabon</option>
	<option value="81">Gambia</option>
	<option value="82">Georgia</option>
	<option value="83">Germany</option>
	<option value="84">Ghana</option>
	<option value="85">Gibraltar</option>
	<option value="86">Greece</option>
	<option value="87">Greenland</option>
	<option value="88">Grenada</option>
	<option value="89">Guadeloupe</option>
	<option value="90">Guam</option>
	<option value="91">Guatemala</option>
	<option value="92">Guernsey</option>
	<option value="93">Guinea</option>
	<option value="94">Guinea-Bissau</option>
	<option value="95">Guyana</option>
	<option value="96">Haiti</option>
	<option value="97">Heard Island and McDonald Islands</option>
	<option value="98">Honduras</option>
	<option value="99">Hong Kong S.A.R., China</option>
	<option value="100">Hungary</option>
	<option value="101">Iceland</option>
	<option value="102">India</option>
	<option value="103">Indonesia</option>
	<option value="104">Iran</option>
	<option value="105">Iraq</option>
	<option value="106">Ireland</option>
	<option value="107">Isle of Man</option>
	<option value="108">Israel</option>
	<option value="109">Italy</option>
	<option value="110">Ivory Coast</option>
	<option value="111">Jamaica</option>
	<option value="112">Japan</option>
	<option value="113">Jersey</option>
	<option value="114">Jordan</option>
	<option value="115">Kazakhstan</option>
	<option value="116">Kenya</option>
	<option value="117">Kiribati</option>
	<option value="118">Kuwait</option>
	<option value="119">Kyrgyzstan</option>
	<option value="120">Laos</option>
	<option value="121">Latvia</option>
	<option value="122">Lebanon</option>
	<option value="123">Lesotho</option>
	<option value="124">Liberia</option>
	<option value="125">Libya</option>
	<option value="126">Liechtenstein</option>
	<option value="127">Lithuania</option>
	<option value="128">Luxembourg</option>
	<option value="129">Macao S.A.R., China</option>
	<option value="130">Macedonia</option>
	<option value="131">Madagascar</option>
	<option value="132">Malawi</option>
	<option value="133">Malaysia</option>
	<option value="134">Maldives</option>
	<option value="135">Mali</option>
	<option value="136">Malta</option>
	<option value="137">Marshall Islands</option>
	<option value="138">Martinique</option>
	<option value="139">Mauritania</option>
	<option value="140">Mauritius</option>
	<option value="141">Mayotte</option>
	<option value="142">Mexico</option>
	<option value="143">Micronesia</option>
	<option value="144">Moldova</option>
	<option value="145">Monaco</option>
	<option value="146">Mongolia</option>
	<option value="147">Montenegro</option>
	<option value="148">Montserrat</option>
	<option value="149">Morocco</option>
	<option value="150">Mozambique</option>
	<option value="151">Myanmar</option>
	<option value="152">Namibia</option>
	<option value="153">Nauru</option>
	<option value="154">Nepal</option>
	<option value="155">Netherlands</option>
	<option value="156">Netherlands Antilles</option>
	<option value="157">New Caledonia</option>
	<option value="158">New Zealand</option>
	<option value="159">Nicaragua</option>
	<option value="160">Niger</option>
	<option value="161">Nigeria</option>
	<option value="162">Niue</option>
	<option value="163">Norfolk Island</option>
	<option value="165">North Korea</option>
	<option value="164">Northern Mariana Islands</option>
	<option value="166">Norway</option>
	<option value="167">Oman</option>
	<option value="168">Pakistan</option>
	<option value="169">Palau</option>
	<option value="170">Palestinian Territory</option>
	<option value="171">Panama</option>
	<option value="172">Papua New Guinea</option>
	<option value="173">Paraguay</option>
	<option value="174">Peru</option>
	<option value="175">Philippines</option>
	<option value="176">Pitcairn</option>
	<option value="177">Poland</option>
	<option value="178">Portugal</option>
	<option value="179">Puerto Rico</option>
	<option value="180">Qatar</option>
	<option value="181">Reunion</option>
	<option value="182">Romania</option>
	<option value="183">Russia</option>
	<option value="184">Rwanda</option>
	<option value="185">Saint Barth&#233;lemy</option>
	<option value="186">Saint Helena</option>
	<option value="187">Saint Kitts and Nevis</option>
	<option value="188">Saint Lucia</option>
	<option value="189">Saint Martin (French part)</option>
	<option value="190">Saint Pierre and Miquelon</option>
	<option value="191">Saint Vincent and the Grenadines</option>
	<option value="192">Samoa</option>
	<option value="193">San Marino</option>
	<option value="194">Sao Tome and Principe</option>
	<option value="195">Saudi Arabia</option>
	<option value="196">Senegal</option>
	<option value="197">Serbia</option>
	<option value="198">Seychelles</option>
	<option value="199">Sierra Leone</option>
	<option value="200">Singapore</option>
	<option value="201">Sint Maarten</option>
	<option value="202">Slovakia</option>
	<option value="203">Slovenia</option>
	<option value="204">Solomon Islands</option>
	<option value="205">Somalia</option>
	<option value="206">South Africa</option>
	<option value="207">South Georgia and the South Sandwich Islands</option>
	<option value="208">South Korea</option>
	<option value="209">South Sudan</option>
	<option value="210">Spain</option>
	<option value="211">Sri Lanka</option>
	<option value="212">Sudan</option>
	<option value="213">Suriname</option>
	<option value="214">Svalbard and Jan Mayen</option>
	<option value="215">Swaziland</option>
	<option value="216">Sweden</option>
	<option value="217">Switzerland</option>
	<option value="218">Syria</option>
	<option value="219">Taiwan</option>
	<option value="220">Tajikistan</option>
	<option value="221">Tanzania</option>
	<option value="222">Thailand</option>
	<option value="223">Timor-Leste</option>
	<option value="224">Togo</option>
	<option value="225">Tokelau</option>
	<option value="226">Tonga</option>
	<option value="227">Trinidad and Tobago</option>
	<option value="228">Tunisia</option>
	<option value="229">Turkey</option>
	<option value="230">Turkmenistan</option>
	<option value="231">Turks and Caicos Islands</option>
	<option value="232">Tuvalu</option>
	<option value="233">U.S. Virgin Islands</option>
	<option value="234">Uganda</option>
	<option value="235">Ukraine</option>
	<option value="236">United Arab Emirates</option>
	<option value="237">United Kingdom</option>
	<option value="238">United States</option>
	<option value="239">United States Minor Outlying Islands</option>
	<option value="240">Uruguay</option>
	<option value="241">Uzbekistan</option>
	<option value="242">Vanuatu</option>
	<option value="243">Vatican</option>
	<option value="244">Venezuela</option>
	<option value="245">Vietnam</option>
	<option value="246">Wallis and Futuna</option>
	<option value="247">Western Sahara</option>
	<option value="248">Yemen</option>
	<option value="249">Zambia</option>
	<option value="250">Zimbabwe</option>

</select>
                <span id="rfvCountry" style="color:Red;display:none;">*</span> 
                          
                        </div>
                      </div>
                      <div class="row justify-content-start mt-4">
                        <div class="col">
                         
                           
                              <input id="chkConfirm" type="checkbox" name="chkConfirm" /><span class="small"> I have read HCL Technologies’ <a href="https://www.hcltech.com/privacy-statement" target="_blank">Privacy Policy</a> and agree to the terms and conditions*</span><br /> 
                                      <span id="CustomValidator1" style="color:Red;display:none;">Privacy policy field is required.</span>
                          
                          <p><br />
                               <a id="lbSubmit" class="btn btn1 registerButn mt-4" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;lbSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Register Now</a></p>
                              
							<p class="text-black-50 small">By providing your contact information and clicking 'submit', you authorize HCL Technologies to store your contact details and contact you with information on case studies, whitepapers, events, webinars, newsletters, announcements and other relevant updates.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12">
                <h3 class="driveHeading"><?php echo get_theme_mod('hclDigitalHack-tSection-heading')?><br />
                <small><?php echo get_theme_mod('hclDigitalHack-tSection-heading2')?></small></h3>
                
			</div>
		</div>
    </div>
    
    <div class="container-fluid">
		  <div class="row pl10 justify-content-between">
			
					<div class="col-md-5 col-12 cardBox1 justify-content-center" style="padding: 3% 0;">
						<p class="text-center">
                      
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-content-image'))?>" class="img-fluid" alt="More than $1000 worth of prizes for the winners" /></p>
						<br />
						<h4 class="text-center">
                        <?php echo get_theme_mod('hclDigitalHack-tscontent-offer')?>
							 <strong class="colortxt"><?php echo get_theme_mod('hclDigitalHack-tscontent-offer2')?></strong> <?php echo get_theme_mod('hclDigitalHack-tscontent-offer3')?>
						</h4>
			  		
						
					</div>
              <div class="col-md-5 col-12 cardBox1 justify-content-center" style="padding: 3% 0;">
						
						<div class="row justify-content-center">
                            <div class="col-12 col-md-3 justify-content-center"><p style="padding:10px;" align="center">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-rightcontent-image'))?>" class="img-fluid" alt="For all participants" /></p></div>
							<div class="col-12 col-md-8"><p class="display-5 mobtxt" style="padding-top:30px;"><?php echo get_theme_mod('hclDigitalHack-tscontent-right-offer')?></p></div>
                            </div>
                  <p>&nbsp;</p>
                  <div class="row justify-content-center">
							<div class="col-12 col-md-3 justify-content-center"><p style="padding:10px;" align="center"><img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-tSection-rightcontent-image1'))?>" class="img-fluid" alt="Complimentary food" /></p></div>
							<div class="col-12 col-md-8"><p class="display-5 mobtxt" style="padding-top:30px;"><?php echo get_theme_mod('hclDigitalHack-tscontent-right-offer1')?></p></div>
						</div>
					</div>	
					
		</div>
	</div>
	
	<div class="container-fluid">
  <div class="row pl5">
			<div class="col-12 col-md-12">
				<h3 class="driveHeading">Snaps From Past Hackathons</h3>
				
				<div class="event">
		
		<div id="eventCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#eventCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#eventCarousel" data-slide-to="1"></li>
                            
          </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                         <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image1'))?>"" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image1'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center">
                                       
                                         <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image1'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image2'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-right">
                                         <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image1'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image3'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                    </div>                                   
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                         <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image4'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image4'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                      
                                    </div>
                                    <div class="col-md-4 text-center">
                                       <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image5'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image5'))?>" alt="Event Pictures" class="img-fluid eventPic" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a href="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image6'))?>" class="html5lightbox" title="Event Pictures" data-group="myEvents">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('hclDigitalHack-fSection-slideshow-image6'))?>" alt="Event Pictures" class="img-fluid" />
                                        </a>
                                    </div>
                                    
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
							

                        </div>
                        <!--.carousel-inner-->
                    </div>
			</div>
		</div>
		</div>

			</div>
    <div>
        <p></p>
</div>
<?php 
get_footer();
?>