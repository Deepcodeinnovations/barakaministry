@extends('layouts.frontend')
@section('title', 'Donate')
@section('content')




			<div class="page_content_wrap page_paddings_yes">
				<div class="content_wrap wrapper">
					<div class="row">
					<div class="content col-md-8">
						<div class="post_item post_item_excerpt post_featured_default post_format_standard odd post-470 post type-post status-publish format-standard has-post-thumbnail hentry category-gallery tag-adoption tag-donation">
							<div class="post_featured">
								<div class="post_thumb" data-image="/frontassets/images/sponsorchild1.jpg" data-title="American Humane Association">
									<a class="hover_icon hover_icon_link" href="javascript:void(0)"><img width="770" height="434" alt="American Humane Association" src="/frontassets/images/sponsorchild2.jpg"></a>
								</div>

							</div>
							<h5 class="sc_testimonial_author_name">Sponsoring a child is a personal way to show God’s love to a child in need</h5>
							<div class="post_content clearfix">
								<hr/>
								<h3 class="post_title"><a href="javascript:void(0)">How child sponsorship works</a></h3>
								<hr/>
								<p>Sponsorship is a long-term, monthly commitment that will have a direct impact on the life of a child, and on the lives of their families and communities. It is an opportunity to develop a one-on-one relationship; to get to know your child and share your love; prayers and financial support to help him or her complete their education.</p>

							<hr/>	
							<h3 class="post_title"><a href="javascript:void(0)">Choosing a child to sponsor</a></h3>
							<hr/>
								<div class="post_descr">
									<p>Most times choosing a child a sponsor is not as easy as you hear. We take all precautions to protect the children under our care. You will be requested to send us information about you. Then you will wait for us to confirm the information</p><p>

We will give you feedback of the list of children that need help of which you can choose from any of them

We connect you with the child since we are the legal guardians of the child</p>
<p>
You can look forward to getting the first letter from your child within 6-12 weeks. It’s the start of an uplifting relationship, and a more abundant life for you both.</p>
								
								</div>
							</div>
							<hr/>
							<h2 class="post_title"><a href="javascript:void(0)">Why you should Help</a></h2>
							<hr/>
								<div class="post_featured">
								<div class="post_thumb" data-image="/frontassets/images/sponsorchild1.jpg" data-title="American Humane Association">
									<a class="hover_icon hover_icon_link" href="javascript:void(0)"><img width="770" height="434" alt="American Humane Association" src="/frontassets/images/sponsorchild.jpg"></a>
								</div>
							</div>
								<div class="post_content clearfix">
								
								<p>All children possess a unique potential given to them by God to fulfill their calling in life. In the United States, it is reasonable to say that 80% of students will go on to develop their talents and find their life’s purpose.</p><p>

In Africa, that percentage is much lower due to the lack of education, high levels of poverty and limited resources. Fortunately Baraka Ministries has answered the call by stepped in to help those children and students, giving them the education, resources and skills needed to help turn them into the servant leaders that they were meant to be. Leaders, who can transform their societies for Christ.</p><p>

For as little as $35.00 a month, you can help us on this mission to develop Christian leaders in Uganda and in the process, dramatically change a child’s life forever.</p><p>

Sponsoring a child is more than just giving money. Your sponsored child will regard you as a gift from God and will pray for you each day as well as write letters to you. A relationship will begin that will change you and your child’s life forever!</p>

								<hr/>
							<h3 class="post_title"><a href="javascript:void(0)">Write to your Child</a></h3>
							<hr/>
								<div class="post_descr">
									<div class="post_featured">
								<div class="post_thumb" data-image="/frontassets/images/sponsorchild1.jpg" data-title="American Humane Association">
									<a class="hover_icon hover_icon_link" href="javascript:void(0)"><img width="770" height="434" alt="American Humane Association" src="/img/blog/4.jpg"></a>
								</div>
							</div>
									<p>While it’s not required that you write to your child, we strongly encourage you do to so. Letters let your sponsored child know that they are important to you.</p><p> Letters also help increase the child’s literacy and communication skills. You may write to your child as often as you like.</p><p>

Topics that will interest your child include:Church, school or work Favorite pastimes, Family, customs and traditions Prayer requests & praises</p>
									<a href="{{ route('web.contact')}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Request a Child to Sponsor</a>
								</div>
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