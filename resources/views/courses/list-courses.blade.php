<div class="col-sm-6">
    <div class="card mb-5">
        <div class="card-body">
            <div class="d-flex">
                <img class="list-courses-img" src="{{$course->logo_path}}" alt="{{$course->title}}">
                <div class="">
                    <div class="list-courses-title">{{ $course->title }}</div>
                    <div class="list-courses-intro">{{ $course->introduction }}</div>
                </div>
            </div>
            <input class="btn-list-courses" type="submit" value="More">
            <div class="row d-flex justify-content-center align-items-center list-courses-statistic">
                <div class="col-sm-4">
                    <div class="name-statistic">Learners</div>
                    <div class="quantity-statistic">{{ $course->number_users }}</div>
                </div>
                <div class="col-sm-4">
                    <div class="name-statistic">Lessons</div>
                    <div class="quantity-statistic">{{ $course->number_lessons }}</div>
                </div>
                <div class="col-sm-4">
                    <div class="name-statistic">Times</div>
                    <div class="quantity-statistic">{{ $course->total_times }} (h)</div>
                </div>
            </div>
        </div>
    </div>
</div>