<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
	<div class="background_aboutus">
		<img src="{{ url('../storage/app/upload/background-about-us1.jpg') }}">
	</div>
	<div class="col-sm-12 aboutus_content">

		<h2>About Us</h2>
		<p>Beautiful tools for self-care and mind harmony.

			There’s a sixteen year old girl named Jordana with low blood sugar walking through the halls at her high school, and it’s time that she uses her glucose monitor to check her blood levels. But she resists the obligation. Maybe she’s embarrassed to do it in front of her friends or stressed about an assignment or preoccupied by a crush she has on a boy. For whatever reason, she leaves the glucose monitor in her locker. Instead, she checks her Instagram.

			In this scenario, Jordana needs two things: to check her glucose level and, on an immediate level, to be comforted. Instagram fulfills one of these needs, but what if there was a service that fulfilled both?

			Lapka reimagines and redesigns the scientific devices used to do so as affordable, accessible and innovative accessories and services for self-care and mind harmony. It can be an uncomfortable and scary experience dealing with health that discourages people from engaging with the intimate moments of their daily lives. Instead of bringing medical aspects to your everyday life, we want to replace them altogether with a new kind of experience.
		</p>
		<div class="aboutus_intro_staff">
			<div class="col-sm-6 aboutus_staff">
				<h4>Vadik Marmeladov</h4>
				<p>CEO</p>
			</div>
			<div class="col-sm-6 aboutus_staff">
				<h4>Sergey Philippov</h4>
				<p>CTO</p>
			</div>
			<div class="col-sm-6 aboutus_staff">
				<h4>James Gardner</h4>
				<p>Partner</p>
			</div>
			<div class="col-sm-6 aboutus_staff">
				<h4>Sergey Kosarev</h4>
				<p>Hardware Engineer, Science</p>
			</div>
			<div class="col-sm-6 aboutus_staff">
				<h4>Ilya Kolganov</h4>
				<p>3D Artist, Prototyping </p>
			</div>
			<div class="col-sm-6 aboutus_staff">
				<h4>Keaton Ventura</h4>
				<p>Shipping Manager</p>
			</div>
		</div>
	</div>
	@endsection
</body>
</html>