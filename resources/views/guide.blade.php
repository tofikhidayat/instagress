@extends('layouts.main')

@section('content')


	

<section class="page guide">
	<div class="container">
		<h1 class="title-big">Guide</h1>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7">
				<img src="{{ asset('img/guide-1-v=203.png') }}" class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h3>Is it safe to use Instagress? Yes, if you do it correctly.</h3>
				<p>
					The best and most natural way to attract attention to your
					Instagram account is to interact with other users. But what
					if you can't give this all your time?
				</p>
				<p>
					That's why we have created Instagress — a service that automates
					your Instagram activity and works even when you are sleeping.
				</p>
				<p>
					If you follow our recommendations, the use of our service will
					be completely safe for you!
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5">
				<img src="{{ asset('img/guide-2-v=203.png') }} " class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7">
				<h3>Before you start:</h3>
				<p>
					1. Make sure that e-mail, which you used for registration in
					Instagram is real, and you have access to it.

					This is important in case if Instagram will suspect unusual
					activity on your account and forcibly change your password.
				</p>
				<p>
					2. Upload avatar and fill in your profile.
				</p>
				<p>
					3. Add at least 5 photos to your account.

					If your account has only one picture, but you are very active — you
					are more likely to be blocked. This account can be regarded as robot.
				</p>
				<p>
					4. Add photos regularly.

					The more alive your account looks — the more likes and comments you can get.
				</p>
				<p>
					5. Ensure that your content does not violate the rules of Instagram.
					We are not responsible for your actions and their consequences.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7">
				<img src="{{ asset('img/guide-3-v=203.png') }}" class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h3>It's time to start:</h3>
				<p>
					1. To get on Activity page you need to be logged in. We won't store your
					password and use it only to obtain required information for Instagram API.
				</p>
				<p>
					<!--A problem with Login? Try to find the cause in our FAQ or contact us.-->
					A problem with Login? Feel free to
					<a href="guide.html#" class="link-ajax" data-popup-open="#popup-support">contact with us</a>.
				</p>
				<p>
					2. You can see what inside without registration by click on "Try our demo".
				</p>
				<p>
					3. Each new user gets 3 free days. You can try it right now and decide is it
					really what you are looking for.
				</p>
				<p>
					4. We have also established optimal settings for your quickstart.
				</p>
				<p>
					5. Choice of the pay packages of 3, 10, 30 and more days will appear as soon
					as you press the Start button. You also can see all packages by clicking on
					the “View time packages” under the icon “3 free days” on your Activity page.
				</p>
				<p>
					If you want to pay for 5 or more accounts — please
					<a href="guide.html#" class="link-ajax" data-popup-open="#popup-support">contact us</a>.
					We will give you a discount!
				</p>
				<p>
					6. Time is counting down only when your Activity is started and you
					can use it whenever you want.
				</p>
			</div>
		</div>

		<h2>How to choose settings?</h2>

		<div class="row">
			<div class="col-xs-12 col-md-5">
				<img src="{{ asset('img/guide-settings-1-v=203.png') }}" class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7">
				<h4>1. Actions</h4>
				<p>
					Select what do you want to do: like, comment, follow or unfollow.
				</p>
				<p>
					To do this, press on the button next to each action, so its color
					changes to red.
				</p>
				<p>
					You can't follow and unfollow at the same time. All other operations
					may be enabled simultaneously.
				</p>
				<p>
					We strongly recommend you not to like, comment follow or unfollow from
					your phone, as well as use other bots simultaneously with Instagress.
					Instagram limits are very strict and you can not get around them.
				</p>
				<p>
					You can upload new pictures without stopping bot.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7">
				<img src="{{ asset('img/guide-settings-2-v=203.png') }}" class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h4>2. Activity speed</h4>
				<p>
					We recommend to use Normal.
				</p>
				<p>
					This setting controls how quickly you spend your Instagram limits.
					When creating speeds we tried to recreate real activity — such as
					if you are doing it on your own phone.
				</p>
				<p>
					We are constantly making improvements in speed settings.
				</p>
				<p>
					Try to not have liking, commenting and following activity on your
					phone during your activity is started on Instagress.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5">
				<img src="{{ asset('img/guide-settings-3-v=203.png') }}" class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7">
				<h4>3. Media source</h4>
				<p>
					Select the source from which will take photos or videos:
				</p>
				<p>
					● Tags — you interact with new users whose photos or videos are
					selected from the tags that you specify.
				</p>
				<p>
					● My Feed — you interact with photos or videos of the users you
					already follow. It is very convenient in case if you do not
					have time put likes to your friends! By selecting this option you
					can not follow, as well as settings of "Tags" will be unavailable.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7">
				<img src="{{ asset('img/guide-settings-4-v=203.png') }}" class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h4>4. Minimum likes filter & Maximum likes filter</h4>
				<p>
					We have created this setting, in order that you can be sure that you
					like or comment only popular photos or videos, if it is important for you.
				</p>
				<p>
					If you put Min. likes: 10 and Max. likes: 0, you will like or comment
					photos/videos that already have 10 likes or more.
				</p>
				<p>
					If you want to be one of the first who puts a like or comment — put these
					settings: Min. likes: 0, Max. likes: 10.
				</p>
				<p>
					If you put Min. likes: 0, Max. likes: 0 — filtering will be removed.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5">
				<img src="{{ asset('img/guide-settings-5-v=203.png') }}" class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7">
				<h4>5. New media only</h4>
				<p>
					Select "New media only" if you want to interact only with new photos
					or videos that recently appeared in tags that you specify.
				</p>
				<p>
					If tags that you choose not very popular this process can take a little bit
					more time. Because new photos and videos will appear with the long time interval.
				</p>
				<p>
					We also recommend you not to use high numbers in "Min. likes" and "Max. likes"
					settings because it takes time to get likes for new media. Try to use Min. likes: 0
					and Max. likes: 10 to achieve the maximum results.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7">
				<img src="{{  asset('img/guide-settings-unfollow-v=203.png')  }}" class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h4>6. Unfollow source & Unfollow who don't follow me:</h4>
				<p>
					Select the source from which will unfollow users:
				</p>
				<p>
					● Instagress — you will unfollow only users which were followed only by our service.
				</p>
				<p>
					● All — you will unfollow all users which you follow.
				</p>
				<p>
					Select "Unfollow who don't follow me" if you want to unfollow users only who don't
					follow you back. You can use it with "Instagress" or "All" source.
				</p>
				<p>
					Remember that you can't follow and unfollow at the same time. You can choose only
					one action.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5">
				<img src="{{ asset('img/guide-settings-dontcomment-v=203.png') }} " class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7">
				<h4>7. Don't comment same users</h4>
				<p>
					This setting will not allow you to comment more than one photo or video of the same user.
				</p>
				<p>
					For example, you can find it useful if your comments contain advertising and you do not
					want to look intrusive. Or you just do not want to spend your comments to the same user twice.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7">
				<img src="{{ asset('img/guide-settings-6-v=203.png') }} " class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h4>8. Tags</h4>
				<p>
					We recommend using at least 10 tags.
				</p>
				<p>
					When you choose tags of a specific topic — you target your activity.
					This helps to attract the attention of those people who are really
					interested in your account.
				</p>
				<p>
					For example, if you are photographing nature, interact with the people
					who are interested in same. Or if you have a women's clothing shop in
					Barcelona, ​​be sure to add tags such as: #spain #barcelona #girls. This
					will help you attract more customers and fans.
				</p>
				<p>
					Try to use popular tags. The less popular tag, the slower your
					activity. This is due to the fact that new photos with such tags
					appear less frequently.
				</p>
				<p>
					To delete all tags — click on the arrow next to the Add button.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5">
				<img src="{{ asset('img/guide-settings-7-v=203.png') }} " class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7">
				<h4>9. Comments</h4>
				<p>
					You can use comments, we have added for you or write your own.
					We recommend using at least 10 different neutral comments like:
					Nice, Like it, Beautiful, etc.
				</p>
				<p>
					If you leave spam comments — your account may be suspended.
					For such purposes, we recommend to use additional accounts.
				</p>
				<p>
					Photos are commented only once. Our system remembers photos that
					you have already commented.
				</p>
				<p>
					You can use an unlimited number of comments. For each photo or
					video comment is selected randomly.
				</p>
				<p>
					To delete all the comments — click on the arrow next to the Add button.
				</p>
				<p class="well well-small">
					The total length of the comment cannot exceed 300 characters.<br/>
					The comment cannot contain more than 4 hashtags.<br/>
					The comment cannot contain more than 1 URL.<br/>
					The comment cannot consist of all capital letters.<br/>
					The comments must be different as much as possible.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7">
				<img src="{{ asset('img/guide-settings-8-v=203.png') }} " class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h4>10. Like, Comment, Follow and Unfollow counters</h4>
				<p>
					If you want to control how many actions you make during the day — this options
					is for you. When selected number of actions will be done your activity will be
					stopped automatically.
				</p>
				<p>
					We recommend to make not more than 1000 likes, 250 comments, 300 follows and
					150 unfollows for 24 hour. Set zero for no limit.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5">
				<img src="{{ asset('img/guide-settings-9-v=203.png') }} " class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7">
				<h4>11. Timer</h4>
				<p>
					This setting works as a timer — your Activity will be stopped once specified
					amount of time will pass.
				</p>
				<p>
					For example, put 02:00 and your activity will turn off after 2 hours.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-5 col-md-push-7">
				<img src="{{ asset('img/guide-footnote-v=203.png') }} " class="img-responsive img-center"/>
			</div>
			<div class="col-xs-12 col-md-7 col-md-pull-5">
				<h5>
					We're monitoring work of our service every day and always try to be
					informed about all changes in the work of Instagram.
				</h5>
			</div>
		</div>

		
		<div class="text-align-center mt40">
			<a href="http://www.instagressalternative.com/app/" class="btn btn-plain btn-big btn-main btn-danger btn-fw-xs-max">
				Sign up
			</a>
		</div>
		
	</div>
</section>

@endsection