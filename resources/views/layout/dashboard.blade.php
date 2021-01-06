@extends('index')
@section('dashboard')
    <!-- course card resume sliders  -->
    <div class="home-hero" data-src="{{$banner->image}}" uk-img>
        <div class="uk-width-1-1">
            <div class="page-content-inner uk-position-z-index">
                <h1>Learn HTML , CSS , iphone <br> Apps & More</h1>
                <h4 class="my-lg-4"> Learn how to build websites & apps <br> write a code or start a business
                </h4>
                <a href="#" class="btn btn-default">Free trailer </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-small">

            <div uk-slider="finite: true" class="course-grid-slider">

                <div class="grid-slider-header">
                    <div>
                        <h4 class="uk-text-truncate"> Progress Courses</a>
                        </h4>
                    </div>
                    <div class="grid-slider-header-link">

                        <a href="courses" class="button transparent uk-visible@m"> View all </a>
                        <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
                        <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

                    </div>
                </div>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-grid">
                    @foreach($course as $item)
                        <li>
                            <a href="course-intro">
                                <div class="course-card">
                                    <div class="course-card-thumbnail ">
                                        <img src="{{asset('upload/'.$item->image)}}">
                                        <span class="play-button-trigger"></span>
                                    </div>
                                    <div class="course-card-body">
                                        <div class="course-card-info">
                                            <div>
                                                <span class="catagory">{{$item->CataName}}</span>
                                            </div>
                                            <div>
                                                <i class="icon-feather-bookmark icon-small"></i>
                                            </div>
                                        </div>
                                        <h4>{{$item->name}}</h4>
                                        <p style="overflow: hidden; max-height: 100px">{{$item->preview}}</p>
                                        <div class="course-card-footer">
                                            <h5> <i class="icon-feather-film"></i> {{$item->total_lessons}} Lectures </h5>
                                            <h5> <i class="icon-feather-clock"></i> {{$item->time}} Hours </h5>
                                        </div>
                                    </div>

                                </div>
                            </a>

                        </li>
                    @endforeach
                    <li> <a href="course-lesson-1">
                            <div class="course-card-resume">
                                <div class="course-card-resume-thumbnail">
                                    <img src="../frontend/images/course/1.png">
                                </div>
                                <div class="course-card-resume-body">
                                    <h5> Ultimate Web Designer And Developer Course </h5>
                                    <span class="number"> 3/20 </span>
                                    <div class="course-progressbar">
                                        <div class="course-progressbar-filler" style="width:65%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li> <a href="course-lesson-1">
                            <div class="course-card-resume">
                                <div class="course-card-resume-thumbnail">
                                    <img src="../frontend/images/course/7.png">
                                </div>
                                <div class="course-card-resume-body">
                                    <h5> Bootstrap Framework From Scratch To Experts </h5>
                                    <span class="number"> 3/20 </span>
                                    <div class="course-progressbar">
                                        <div class="course-progressbar-filler" style="width:65%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="course-lesson-1">
                            <div class="course-card-resume">
                                <div class="course-card-resume-thumbnail">
                                    <img src="../frontend/images/course/3.png">
                                </div>
                                <div class="course-card-resume-body">
                                    <h5> Ultimate Web Designer And Developer Course </h5>
                                    <span class="number"> 3/20 </span>
                                    <div class="course-progressbar">
                                        <div class="course-progressbar-filler" style="width:65%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="course-lesson-1">
                            <div class="course-card-resume">
                                <div class="course-card-resume-thumbnail">
                                    <img src="../frontend/images/course/4.png">
                                </div>
                                <div class="course-card-resume-body">
                                    <h5>Angular Fundamentals From Scratch To Experts</h5>
                                    <span class="number"> 3/20 </span>
                                    <div class="course-progressbar">
                                        <div class="course-progressbar-filler" style="width:65%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li> <a href="course-lesson-1">
                            <div class="course-card-resume">
                                <div class="course-card-resume-thumbnail">
                                    <img src="../frontend/images/course/1.png">
                                </div>
                                <div class="course-card-resume-body">
                                    <h5> Ultimate Web Designer And Developer Course </h5>
                                    <span class="number"> 3/20 </span>
                                    <div class="course-progressbar">
                                        <div class="course-progressbar-filler" style="width:65%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>

        </div>


        <div class="section-small pt-0">

            <div class="course-grid-slider" uk-slider="finite: true">

                <div class="grid-slider-header">
                    <div>
                        <h4 class="uk-text-truncate"> popular <a href="#" class="text-muted">Topics</a> </h4>
                    </div>
                    <div class="grid-slider-header-link">

                        <a href="course-path" class="button transparent uk-visible@m"> View all </a>
                        <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
                        <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

                    </div>
                </div>

                <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
                    <li>
                        <a href="course-path-level" class="skill-card">
                            <i class="icon-brand-angular skill-card-icon" style="color:#dd0031"></i>
                            <div>
                                <h2 class="skill-card-title"> Angular Courses</h2>
                                <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                                    bundles
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="course-path-level" class="skill-card">
                            <i class="icon-brand-js-square skill-card-icon" style="color:#f7df1e"></i>
                            <div>
                                <h2 class="skill-card-title"> Angular Courses</h2>
                                <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                                    bundles
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="course-path-level" class="skill-card">
                            <i class="icon-brand-html5 skill-card-icon" style="color:#f0653f"></i>
                            <div>
                                <h2 class="skill-card-title"> Angular Courses</h2>
                                <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                                    bundles
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="course-path-level" class="skill-card">
                            <i class="icon-brand-node-js skill-card-icon" style="color:#64d25d"></i>
                            <div>
                                <h2 class="skill-card-title"> NodeJS Courses</h2>
                                <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                                    bundles
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="course-path-level" class="skill-card">
                            <i class="icon-brand-angular skill-card-icon" style="color:#dd0031"></i>
                            <div>
                                <h2 class="skill-card-title"> Angular Courses</h2>
                                <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                                    bundles
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>

        </div>


        <div class="section-small pt-0">

            <div class="course-grid-slider" uk-slider="finite: true">

                <div class="grid-slider-header">
                    <div>
                        <h4 class="uk-text-truncate"> Browse Web Development
                            <a href="episode" class="text-muted">Episodes</a> </h4>
                    </div>
                    <div class="grid-slider-header-link">

                        <a href="courses" class="button transparent uk-visible@m"> View all </a>
                        <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
                        <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

                    </div>
                </div>

                <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
                    <li>
                        <a href="episode-details">
                            <div class="course-card episode-card animate-this">
                                <div class="course-card-thumbnail ">
                                    <span class="item-tag">HTML</span>
                                    <span class="duration">2:39</span>
                                    <img src="../frontend/images/episodes/2.png">
                                    <span class="play-button-trigger"></span>
                                </div>
                                <div class="course-card-body">
                                    <h4 class="mb-0"> Creating sticky in HTML </h4>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="episode-details">
                            <div class="course-card episode-card animate-this">
                                <div class="course-card-thumbnail ">
                                    <span class="item-tag">Tips</span>
                                    <span class="duration">5:39</span>
                                    <img src="../frontend/images/episodes/3.png">
                                    <span class="play-button-trigger"></span>
                                </div>
                                <div class="course-card-body">
                                    <h4 class="mb-0"> er Creating a Laravel Package </h4>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="episode-details">
                            <div class="course-card episode-card animate-this">
                                <div class="course-card-thumbnail ">
                                    <span class="item-tag">PHP</span>
                                    <span class="duration">5:39</span>
                                    <img src="../frontend/images/episodes/1.png">
                                    <span class="play-button-trigger"></span>
                                </div>
                                <div class="course-card-body">
                                    <h4 class="mb-0"> The PHP Singleton class </h4>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="episode-details">
                            <div class="course-card episode-card animate-this">
                                <div class="course-card-thumbnail ">
                                    <span class="item-tag">Design</span>
                                    <span class="duration">2:39</span>
                                    <img src="../frontend/images/episodes/5.png">
                                    <span class="play-button-trigger"></span>
                                </div>
                                <div class="course-card-body">
                                    <h4 class="mb-0"> Dev Design Quickie </h4>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="episode-details">
                            <div class="course-card episode-card animate-this">
                                <div class="course-card-thumbnail ">
                                    <span class="item-tag">HTML</span>
                                    <span class="duration">2:39</span>
                                    <img src="../frontend/images/episodes/2.png">
                                    <span class="play-button-trigger"></span>
                                </div>
                                <div class="course-card-body">
                                    <h4 class="mb-0"> Creating sticky in HTML </h4>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>

        </div>


    @endsection
