@extends('layouts.frontend')
@section('title', 'Volunteer with us')
@section('content')



			<div class="page_content_wrap page_paddings_yes">
				<div class="content_wrap wrapper">
					<div class="row">
					<div class="content col-md-8">
			                            <div class=" ">
                                <img class="img-fluid" src="/img/blog/8.jpg" alt="children's choir">
                                <h1><br>Volunteer With Us </h1>
                                <br>
                                <p>Volunteering to rescue and rehabilitate abandoned babies, street children, orphans, and at-risk children living in the slums of Uganda can be a great thing. It has a two-fold benefit, the recipients benefit and the volunteer is brought closer to the real issues faced by those in need.</p>
                                <p>Whatever your skills and experience, and however much time you can offer, we have a volunteering opportunity for you. You’ll get support and training if you need it, and you’ll make a real difference.</p>
                                <p>There are lots of benefits to becoming a volunteer with Baraka Ministries. You can learn new skills, improve your CV, build your confidence and meet new people. And on top of this, you’ll also be helping support some of our most vulnerable children and families.</p>

                                <h4>URGENT NEEDS</h4>
                                <hr>

                                <h6>Feed Vulnerable Children</h6><br>
                                <img class="img-fluid" src="/img/blog/7.jpg" alt="children's choir">
                                <p><br>Baraka Ministries serves approximately 130 vulnerable children living in our selected homes and also in our center.  These orphans are at the most risk of any in Uganda and we need your help feeding them.</p>
                                <p>$1.00 a day will supplement our nutritional program and go a long way in assisting us as we transition these orphans into forever homes.</p>
                                <p> Please consider a monthly gift of $30.00 or more.  A one-time donation in any amount will help these vulnerable children.</p>
                                <h6>More than 500 Children Need NEW Sponsors</h6>
                                <p><br>Sponsorship cost $35 per month and includes child development, discipleship & biblical foundations, child & youth leadership training, and school fee assistance.</p><br>

                                <h3 class="mb-30">You would Like to Apply!  <i style="font-size: 15px;">Fill the in the information Below</i></h3>


                                <div class="sc_form_fields column-3_5">
                                                                <form id="sc_form_1145226909_form" class="sc_input_hover_default" data-formtype="form_2" method="post" action="contacts.html#">
                                                                    <div class="sc_form_info">
                                                                        <div class="sc_form_item sc_form_field label_over"><input id="sc_form_username" type="text" name="username" placeholder="Name *" aria-required="true"></div>
                                                                        <br>
                                                                        <div class="sc_form_item sc_form_field label_over"><input id="sc_form_email" type="text" name="email" placeholder="E-mail *" aria-required="true"></div>
                                                                        <br>
                                                                        <div class="sc_form_item sc_form_field label_over"><input id="sc_form_subj" type="text" name="subject" placeholder="Subject" aria-required="true"></div>
                                                                        <br>

                                                                        <div class="sc_form_item sc_form_field label_over"><input id="sc_form_subj" type="text" name="subject" placeholder="Country of Origin" aria-required="true"></div>
                                                                        <br>

                                                                        <div class="sc_form_item sc_form_field label_over"><select name="departments">
                                                                            <option value="He Choose Nothing">Available Departments</option>
                                                                            <option value="Music">Music</option>
                                                                            <option value="Dance and Drama">Dance and Drama</option>
                                                                            <option value="Counseling and Guidance">Counseling and Guidance</option>
                                                                            <option value="Children Rehabilitation">Children Rehabilitation</option>
                                                                            <option value="Education">Education</option>
                                                                        </select>
                                                                    </div>
                                                                    </div>
                                                                    <br>
                                                                   
                                                                    <div class="sc_form_item sc_form_button"><button>Apply Now</button></div>
                                                                    <div class="result sc_infobox"></div>
                                                                </form>
                                                            </div>
                            </div>



					</div>
					<!-- </div> class="content"> -->
					<div class="sidebar widget_area scheme_original col-md-4" role="complementary">
				@include('frontend.comps.sidebar')
					</div>
					<!-- /.sidebar -->
				</div>


				<!-- </div> class="content_wrap"> -->
			</div>
		</div>

		@include('frontend.comps.donatecomp')
@endsection