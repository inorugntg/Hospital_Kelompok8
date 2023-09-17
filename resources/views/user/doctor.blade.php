<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach ($doctor as $doctors)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img height="300px" src="doctorimage/{{$doctors->image}}" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{ $doctors->name }}</p>
                        <span class="text-sm text-grey">{{ $doctors->speciality }}</span>
                        <p class="card-text">Practice Schedule:</p>
                        <ul>
                            <li>Monday: 09.00 AM - 04.00 PM</li>
                            <li>Tuesday: 09.00 AM - 04.00 PM</li>
                            <li>Wednesday: 09.00 AM - 12.00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>