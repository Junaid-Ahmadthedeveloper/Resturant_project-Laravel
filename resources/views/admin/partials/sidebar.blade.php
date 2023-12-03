<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Admin Panel</span>
        </a>



					<li class="sidebar-item">
    <a class="sidebar-link" href="{{ url('/logged.in')}}" >
        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Main Dashboard</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('chef')}}" >
        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dishes</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('cook.main')}}" >
        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Cooks</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('reservation_tbl')}}" >
        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Reservation</span>
    </a>
</li>




				</ul>


			</div>
		</nav>
