@extends('layouts.head')

<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="{{ route('welcome') }}">Simple Events</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			</ul>

			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2 offset-md-1 row">

			<ul class="list-group mt-3">
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 list-group-item-action">
					Dashboard &nbsp;&nbsp;&nbsp;
					<span class="badge badge-primary badge-pill">3</span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 list-group-item-action">
					Profile
					<span class="badge badge-primary badge-pill"></span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 list-group-item-action">
					Bookings
					<span class="badge badge-primary badge-pill">2</span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 list-group-item-action">
					Messages
					<span class="badge badge-primary badge-pill">1</span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 list-group-item-action">
					Calendar
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 list-group-item-action">
					Logout
				</li>
			</ul>

		</div>

		<div class="col-md-8">
			<h1 class="pl-3 mt-4">Dashboard</h1>


		</div>
	</div>
</div>

