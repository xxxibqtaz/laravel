@extends('index')
@section('course-intro')
<div class="course-details-wrapper topic-1 uk-light pt-5">

    <div class="container p-sm-0">

        <div uk-grid>
            <div class="uk-width-2-3@m">

                <div class="course-details">
                    <h1> Learn JavaScript From Scratch</h1>
                    <p> Master JavaScript with the most complete course! Projects
                        Excellent
                        course. we
                        explain the core concepts in javascript that are usually glossed over in other
                        courses </p>

                    <div class="course-details-info mt-4">
                        <ul>
                            <li>
                                <div class="star-rating"><span class="avg"> 4.9 </span> <span
                                        class="star"></span><span class="star"></span><span
                                        class="star"></span><span class="star"></span><span
                                        class="star"></span>
                                </div>
                            </li>
                            <li> <i class="icon-feather-users"></i> 1200 Enerolled </li>
                        </ul>
                    </div>

                    <div class="course-details-info">

                        <ul>
                            <li> Created by <a href="#"> Jonathan Madano </a> </li>
                            <li> Last updated 10/2019</li>
                        </ul>

                    </div>
                </div>
                <nav class="responsive-tab style-5">
                    <ul
                        uk-switcher="connect: #course-intro-tab ;animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">Curriculum</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Announcement</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </nav>

            </div>
        </div>

    </div>
</div>

<div class="container">

    <div class="uk-grid-large mt-4" uk-grid>
        <div class="uk-width-2-3@m">
            <ul id="course-intro-tab" class="uk-switcher mt-4">

                <!-- course description -->
                <li class="course-description-content">

                    <h4> Description </h4>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                        quis
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        commodo
                        consequat</p>
                    <p> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                        exerci</p>


                    <h4> What you’ll learn </h3>
                        <div class="uk-child-width-1-2@s" uk-grid>
                            <div>
                                <ul class="list-2">
                                    <li>Setting up the environment </li>
                                    <li>Advanced HTML Practices</li>
                                    <li>Build a portfolio website</li>
                                    <li>Responsive Designs</li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-2">
                                    <li>Understand HTML Programming</li>
                                    <li>Code HTML</li>
                                    <li>Start building beautiful websites</li>
                                </ul>
                            </div>
                        </div>


                        <h4> Requirements </h4>
                        <ul class="list-1">
                            <li>Any computer will work: Windows, macOS or Linux</li>
                            <li>Basic programming HTML and CSS.</li>
                            <li>Basic/Minimal understanding of JavaScript</li>
                        </ul>

                        <h4> Here is exactly what we cover in this course: </h4>
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                            enim ad
                            minim laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam,
                            quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo
                            consequat</p>

                        <p> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                            laoreet
                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud
                            exerci</p>

                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                            enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut
                            aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend
                            option
                            congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                            Lorem
                            ipsum
                            dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim
                            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip
                            ex
                            ea commodo consequat.</p>


                </li>

                <!-- course Curriculum-->
                <li>

                    <ul class="course-curriculum" uk-accordion="multiple: true">

                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#"> Html Introduction </a>
                            <div class="uk-accordion-content">

                                <!-- course-video-list -->
                                <ul class="course-curriculum-list">
                                    <li> What is HTML <span> 23 min </span>
                                    <li> What is a Web page? <span> 23 min </span> </li>
                                    <li> Your First Web Page <a href="#trailer-modal" uk-toggle> Preview
                                        </a> <span> 23 min </span>
                                    </li>
                                    <li> Brain Streak <span> 23 min </span> </li>
                                </ul>

                            </div>
                        </li>

                        <li>
                            <a class="uk-accordion-title" href="#"> Your First webpage   </a>
                            <div class="uk-accordion-content">

                                <!-- course-video-list -->
                                <ul class="course-curriculum-list">
                                    <li> Headings <span> 23 min </span>
                                    <li> Paragraphs <span> 23 min </span> </li>
                                    <li> Emphasis and Strong Tag <a href="#trailer-modal" uk-toggle>
                                            Preview
                                        </a> <span> 23 min
                                        </span>
                                    </li>
                                    <li> Brain Streak <span> 23 min </span> </li>
                                    <li> Live Preview Feature <span> 23 min </span> </li>
                                </ul>

                            </div>
                        </li>

                        <li>
                            <a class="uk-accordion-title" href="#"> Some Special Tags  </a>
                            <div class="uk-accordion-content">

                                <!-- course-video-list -->
                                <ul class="course-curriculum-list">
                                    <li> The paragraph tag <span> 23 min </span> </li>
                                    <li> The break tag <a href="#trailer-modal" uk-toggle> Preview </a>
                                        <span> 23 min </span> </li>
                                    <li> Headings in HTML <span> 23 min </span> </li>
                                    <li> Bold, Italics Underline <span> 23 min </span>
                                    </li>
                                </ul>

                            </div>
                        </li>

                        <li>
                            <a class="uk-accordion-title" href="#"> HTML Advanced level   </a>
                            <div class="uk-accordion-content">

                                <!-- course-video-list -->
                                <ul class="course-curriculum-list">
                                    <li> Something to Ponder<span> 23 min </span> </li>
                                    <li> Tables <span> 23 min </span> </li>
                                    <li> HTML Entities <a href="#trailer-modal" uk-toggle> Preview
                                        </a><span> 23 min </span> </li>
                                    <li> HTML Iframes <span> 23 min </span> </li>
                                    <li> Some important things <span> 23 min </span> </li>
                                </ul>

                            </div>
                        </li>

                    </ul>

                </li>

                <!-- course Faq-->
                <li>

                    <h4 class="my-4"> Course Faq</h4>

                    <ul class="course-faq" uk-accordion>

                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#"> Html Introduction </a>
                            <div class="uk-accordion-content">
                                <p> The primary goal of this quick start guide is to introduce you to
                                    Unreal
                                    Engine 4`s (UE4) development environment. By the end of this guide,
                                    you`ll
                                    know how to set up and develop C++ Projects in UE4. This guide shows
                                    you
                                    how
                                    to create a new Unreal Engine project, add a new C++ class to it,
                                    compile
                                    the project, and add an instance of a new class to your level. By
                                    the
                                    time
                                    you reach the end of this guide, you`ll be able to see your
                                    programmed
                                    Actor
                                    floating above a table in the level. </p>
                            </div>
                        </li>

                        <li>
                            <a class="uk-accordion-title" href="#"> Your First webpage</a>
                            <div class="uk-accordion-content">
                                <p> The primary goal of this quick start guide is to introduce you to
                                    Unreal
                                    Engine 4`s (UE4) development environment. By the end of this guide,
                                    you`ll
                                    know how to set up and develop C++ Projects in UE4. This guide shows
                                    you
                                    how
                                    to create a new Unreal Engine project, add a new C++ class to it,
                                    compile
                                    the project, and add an instance of a new class to your level. By
                                    the
                                    time
                                    you reach the end of this guide, you`ll be able to see your
                                    programmed
                                    Actor
                                    floating above a table in the level. </p>
                            </div>
                        </li>

                        <li>
                            <a class="uk-accordion-title" href="#"> Some Special Tags </a>
                            <div class="uk-accordion-content">
                                <p> The primary goal of this quick start guide is to introduce you to
                                    Unreal
                                    Engine 4`s (UE4) development environment. By the end of this guide,
                                    you`ll
                                    know how to set up and develop C++ Projects in UE4. This guide shows
                                    you
                                    how
                                    to create a new Unreal Engine project, add a new C++ class to it,
                                    compile
                                    the project, and add an instance of a new class to your level. By
                                    the
                                    time
                                    you reach the end of this guide, you`ll be able to see your
                                    programmed
                                    Actor
                                    floating above a table in the level. </p>
                            </div>
                        </li>

                        <li>
                            <a class="uk-accordion-title" href="#"> Html Introduction </a>
                            <div class="uk-accordion-content">
                                <p> The primary goal of this quick start guide is to introduce you to
                                    Unreal
                                    Engine 4`s (UE4) development environment. By the end of this guide,
                                    you`ll
                                    know how to set up and develop C++ Projects in UE4. This guide shows
                                    you
                                    how
                                    to create a new Unreal Engine project, add a new C++ class to it,
                                    compile
                                    the project, and add an instance of a new class to your level. By
                                    the
                                    time
                                    you reach the end of this guide, you`ll be able to see your
                                    programmed
                                    Actor
                                    floating above a table in the level. </p>
                            </div>
                        </li>

                    </ul>

                </li>

                <!-- course Announcement-->
                <li>
                    <h4> Announcement </h4>

                    <div class="user-details-card">
                        <div class="user-details-card-avatar">
                            <img src="../public/frontend/images/avatars/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-details-card-name">
                            Stella Johnson <span> Instructor <span> 1 year ago </span> </span>
                        </div>
                    </div>



                    <article class="uk-article">

                        <p class="lead"> Nam liber tempor cum soluta nobis eleifend option
                            congue  imperdiet doming id quod mazim placerat facer possim assum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum.</p>

                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                            enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut
                            aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend
                            option congue nihil imperdiet doming id quod mazim placerat facer possim
                            assum.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                            enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut
                            aliquip ex ea commodo consequat.</p>


                    </article>
                </li>

                <!-- course Reviews-->
                <li>

                    <div class="review-summary">
                        <h4 class="review-summary-title"> Student feedback </h4>
                        <div class="review-summary-container">
                            <div class="review-summary-avg">
                                <div class="avg-number">
                                    4.8
                                </div>
                                <div class="review-star">
                                    <div class="star-rating"><span class="star"></span><span
                                            class="star"></span><span class="star"></span><span
                                            class="star"></span><span class="star half"></span></div>
                                </div>
                                <span>Course Rating</span>
                            </div>


                            <div class="review-summary-rating">
                                <div class="review-summary-rating-wrap">
                                    <div class="review-bars">
                                        <div class="full_bar">
                                            <div class="bar_filler" style="width:95%"></div>
                                        </div>
                                    </div>
                                    <div class="review-stars">
                                        <div class="star-rating"><span class="star"></span><span
                                                class="star"></span><span class="star"></span><span
                                                class="star"></span><span class="star"></span></div>
                                    </div>
                                    <div class="review-avgs">
                                        95 %
                                    </div>
                                </div>
                                <div class="review-summary-rating-wrap">
                                    <div class="review-bars">
                                        <div class="full_bar">
                                            <div class="bar_filler" style="width:80%"></div>
                                        </div>
                                    </div>
                                    <div class="review-stars">
                                        <div class="star-rating"><span class="star"></span><span
                                                class="star"></span><span class="star"></span><span
                                                class="star"></span><span class="star empty"></span>
                                        </div>
                                    </div>
                                    <div class="review-avgs">
                                        80 %
                                    </div>
                                </div>
                                <div class="review-summary-rating-wrap">
                                    <div class="review-bars">
                                        <div class="full_bar">
                                            <div class="bar_filler" style="width:60%"></div>
                                        </div>
                                    </div>
                                    <div class="review-stars">
                                        <div class="star-rating"><span class="star"></span><span
                                                class="star"></span><span class="star"></span><span
                                                class="star empty"></span><span class="star empty"></span>
                                        </div>
                                    </div>
                                    <div class="review-avgs">
                                        60 %
                                    </div>
                                </div>
                                <div class="review-summary-rating-wrap">
                                    <div class="review-bars">
                                        <div class="full_bar">
                                            <div class="bar_filler" style="width:45%"></div>
                                        </div>
                                    </div>
                                    <div class="review-stars">
                                        <div class="star-rating"><span class="star"></span><span
                                                class="star"></span><span class="star empty"></span><span
                                                class="star empty"></span><span class="star empty"></span>
                                        </div>
                                    </div>
                                    <div class="review-avgs">
                                        45 %
                                    </div>
                                </div>
                                <div class="review-summary-rating-wrap">
                                    <div class="review-bars">
                                        <div class="full_bar">
                                            <div class="bar_filler" style="width:25%"></div>
                                        </div>
                                    </div>
                                    <div class="review-stars">
                                        <div class="star-rating"><span class="star"></span><span
                                                class="star empty"></span><span
                                                class="star empty"></span><span
                                                class="star empty"></span><span class="star empty"></span>
                                        </div>
                                    </div>
                                    <div class="review-avgs">
                                        25 %
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="comments">
                        <h4>Reviews <span class="comments-amount"> (4610) </span> </h4>

                        <ul>
                            <li>
                                <div class="comments-avatar"><img src="../public/frontend/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-by">Stella Johnson<span>Student</span>
                                        <div class="comment-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star"></span><span
                                                    class="star"></span><span class="star"></span></div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                        erat
                                        volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                        tation
                                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <div class="comment-footer">
                                        <span> Was this review helpful? </span>
                                        <button> Yes </button>
                                        <button> No </button>
                                        <a href="#"> Report</a>
                                    </div>
                                </div>

                            </li>

                            <li>
                                <div class="comments-avatar"><img src="../public/frontend/images/avatars/avatar-3.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-by"> Adrian Mohani <span>Instructor </span>
                                        <div class="comment-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star"></span><span
                                                    class="star"></span><span class="star half"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                        ullamcorper
                                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam
                                        liber
                                        tempor cum soluta nobis eleifend
                                    </p>
                                    <div class="comment-footer">
                                        <span> Was this review helpful? </span>
                                        <button> Yes </button>
                                        <button> No </button>
                                        <a href="#"> Report</a>
                                    </div>
                                </div>

                            </li>

                            <li>
                                <div class="comments-avatar"><img src="../public/frontend/images/avatars/avatar-3.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-by"> Adrian Mohani <span>Student</span>
                                        <div class="comment-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star"></span><span
                                                    class="star"></span><span class="star"></span></div>
                                        </div>
                                    </div>
                                    <p> Nam liber tempor cum soluta nobis eleifend option congue nihil
                                        imperdiet doming id quod mazim placerat facer possim assum.
                                        Lorem
                                        ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                        volutpat.
                                    </p>
                                    <div class="comment-footer">
                                        <span> Was this review helpful? </span>
                                        <button> Yes </button>
                                        <button> No </button>
                                        <a href="#"> Report</a>
                                    </div>
                                </div>

                            </li>

                            <li>
                                <div class="comments-avatar"><img src="../public/frontend/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-by">Stella Johnson<span>Student</span>
                                        <div class="comment-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star"></span><span
                                                    class="star"></span><span class="star"></span></div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                        erat
                                        volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                        tation
                                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <div class="comment-footer">
                                        <span> Was this review helpful? </span>
                                        <button> Yes </button>
                                        <button> No </button>
                                        <a href="#"> Report</a>
                                    </div>
                                </div>

                            </li>

                        </ul>

                    </div>

                    <div class="comments">
                        <h3>Submit Review </h3>
                        <ul>
                            <li>
                                <div class="comments-avatar"><img src="../public/frontend/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <form class="uk-grid-small" uk-grid>
                                        <div class="uk-width-1-2@s">
                                            <label class="uk-form-label">Name</label>
                                            <input class="uk-input" type="text" placeholder="Name">
                                        </div>
                                        <div class="uk-width-1-2@s">
                                            <label class="uk-form-label">Email</label>
                                            <input class="uk-input" type="text" placeholder="Email">
                                        </div>
                                        <div class="uk-width-1-1@s">
                                            <label class="uk-form-label">Comment</label>
                                            <textarea class="uk-textarea"
                                                placeholder="Enter Your Comments her..."
                                                style=" height:160px"></textarea>
                                        </div>
                                        <div class="uk-grid-margin">
                                            <input type="submit" value="submit" class="btn btn-default">
                                        </div>
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </div>

                </li>

            </ul>
        </div>

        <div class="uk-width-1-3@m">
            <div class="course-card-trailer" uk-sticky="top: 10 ;offset:95 ; media: @m ; bottom:true">

                <div class="course-thumbnail">
                    <img src="../public/frontend/images/course/1.png" alt="">
                    <a class="play-button-trigger show" href="#trailer-modal" uk-toggle> </a>
                </div>

                <!-- video demo model -->
                <div id="trailer-modal" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-default mt-2  mr-1" type="button" uk-close></button>
                        <div class="uk-modal-header">
                            <h4> Trailer video </h4>
                        </div>
                        <div class="video-responsive">
                            <iframe src="https://www.youtube.com/embed/nOCXXHGMezU"
                                class="uk-padding-remove" uk-video="automute: true" frameborder="0"
                                allowfullscreen uk-responsive></iframe>
                        </div>

                        <div class="uk-modal-body">
                            <h3>Build Responsive Websites </h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident,
                                sunt
                                in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>

                <div class="p-3">

                    <p class="my-3 text-center">
                        <span class="uk-h1"> $12.99 </span>
                        <s class="uk-h4 text-muted"> $19.99 </s>
                        <s class="uk-h6 ml-1 text-muted"> $32.99 </s>
                    </p>

                    <p> ! Hour Left This price</p>

                    <div class="uk-child-width-1-2 uk-grid-small mb-4" uk-grid>
                        <div>
                            <a href="course-lesson"
                                class="uk-width-1-1 btn btn-default transition-3d-hover"> <i
                                    class="uil-play"></i> Start </a>
                        </div>
                        <div>
                            <a href="course-lesson"
                                class="btn btn-danger uk-width-1-1 transition-3d-hover"> <i
                                    class="uil-heart"></i> Add wishlist </a>
                        </div>
                    </div>

                    <p class="uk-text-bold"> This Course Incluce </p>

                    <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                        <div>
                            <span><i class="uil-youtube-alt"></i> 28 hours video</span>
                        </div>
                        <div>
                            <span> <i class="uil-award"></i> Certificate </span>
                        </div>
                        <div>
                            <span> <i class="uil-file-alt"></i> 12 Article </span>
                        </div>
                        <div>
                            <span> <i class="uil-video"></i> Watch Offline </span>
                        </div>
                        <div>
                            <span> <i class="uil-award"></i> Certificate </span>
                        </div>
                        <div>
                            <span> <i class="uil-clock-five"></i> Lifetime access </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>
@endsection
