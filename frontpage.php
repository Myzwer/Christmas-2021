<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the letitsnow Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Letitsnow
 * @since 1.0.0
 */

get_header(); ?>

    <!-- The Modal -->
    <div id="modal-container">
        <div class="modal-background">
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-top bg-no-repeat bg-scroll bg-cover relative"
                         style="background: url('http://christmas-2021.local/wp-content/uploads/2021/11/Modal-header.jpg') center center;">

                        <div class="modal-icon">
                            <img src="http://christmas-2021.local/wp-content/uploads/2021/11/FC-logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="modal-inner">
                        <p class="pb-5">You can add the event to you calendar now or get more information. We can't wait
                            to see
                            you!</p>
                        <a download
                           href="http://christmas-2021.local/wp-content/uploads/2021/11/afoothillschristmas.ics">
                            <button class="mx-auto lg:mx-0 w-full bg-yellow text-black font-bold rounded-full my-1 md:my-1 py-4 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                <i class="far fa-calendar-alt"></i> Add To Calendar
                            </button>
                        </a>

                        <a href="#">
                            <button class="mx-auto lg:mx-0 w-full border-black border-2 text-black font-bold rounded-full my-1 md:my-1 py-3 px-6 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                More Information
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal-->

    <div id="particles-js"></div>
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background:
    url('http://christmas-2021.local/wp-content/uploads/2021/11/AFC-Background-Banner.jpg') no-repeat bottom center scroll; background-size: cover; height: 70vh;">
        <div class="text-center relative pt-24 lg:p-36 z-5">
            <img class="mx-auto w-11/12 md:w-8/12 lg:w-5/12"
                 src="http://christmas-2021.local/wp-content/uploads/2021/11/A-Foothills-Christmas-Icon-Alt.png" alt="">
            <h1 class="uppercase text-red text-2xl md:text-3xl py-5 px-10 z-5">A place to <span class="text-green">belong</span>
                this christmas.</h1>
            <button id="two"
                    class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-4 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                Mark Your Calendar <i class="far fa-calendar-alt"></i>
            </button>
        </div>
        <img class="hidden lg:block absolute left-36 bottom-3 z-5"
             src="http://christmas-2021.local/wp-content/uploads/2021/11/Guy-with-Boxes.png" alt="">
        <img class="hidden lg:block absolute right-36 bottom-3 z-5"
             src="http://christmas-2021.local/wp-content/uploads/2021/11/GIrl-with-Bags.png" alt="">
    </div>

    <div class="bg-no-repeat bg-scroll bg-cover relative pb-10" style="background:
    url('http://christmas-2021.local/wp-content/uploads/2021/11/Home-Noise-Background.jpg') no-repeat bottom center scroll; background-size: cover; ">
        <div class="grid grid-cols-12 gap-4 lg:gap-4 lg:w-7/12 mx-4 lg:mx-auto pt-10 text-white">
            <div class="col-span-12 md:col-span-6 bg-red rounded-lg shadow-xl p-4 z-5">
                <div class="border-2 rounded-md">
                    <div class="text-left uppercase p-2">
                        <h2 class=" text-xl text-center pb-5">Join us in Maryville</h2>
                        <p class="font-light"><span class="font-black">When:</span> December 19th</p>
                        <p><span class="font-black">Time:</span> 9am & 11am</p>
                        <p><span class="font-black">Where:</span> 1551 W. lamar Alexander Pkwy. <br/>maryville tn 37801
                        </p>
                    </div>
                    <div class="text-center mb-5">
                        <div class = "block">
                            <button id="three"
                                    class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-3 px-5 md:px-6 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                Mark Your Calendar <i class="far fa-calendar-alt"></i>
                            </button>
                        </div>
                        <div class = "block">
                            <button class="mx-auto lg:mx-0  border-white border-2 text-white font-bold rounded-full my-1 md:my-1 py-2 px-6 md:px-6 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                More Information
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 bg-green rounded-lg shadow-xl p-4 z-5">
                <div class="border-2 rounded-md">
                    <div class="text-left uppercase p-2">
                        <h2 class=" text-xl text-center pb-5">Join us in Bearden</h2>
                        <p class="font-light"><span class="font-black">When:</span> December 19th</p>
                        <p><span class="font-black">Time:</span> 11am</p>
                        <p><span class="font-black">Where:</span> 1000 Francis Rd. <br/> Knoxville, TN 37909</p>
                    </div>
                    <div class="text-center mb-5">
                        <div class = "block">
                            <button id="four"
                                    class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-3 px-5 md:px-6 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                Mark Your Calendar <i class="far fa-calendar-alt"></i>
                            </button>
                        </div>
                        <div class = "block">
                            <button class="mx-auto lg:mx-0  border-white border-2 text-white font-bold rounded-full my-1 md:my-1 py-2 px-6 md:px-6 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                More Information
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white relative">
        <div class="lg:w-7/12 mx-auto relative">
            <img class="absolute tree-girl"
                 src="http://christmas-2021.local/wp-content/uploads/2021/11/Single-Person-1.png" alt="">
            <div class="grid grid-cols-12 gap-4 mx-2 text-black">
                <div class="col-span-12 md:col-span-8 px-4 pt-4 text-left">
                    <h2 class="uppercase text-3xl lg:text-4xl">Free Parent Resource</h2>
                    <p class="capitalize text-lg lg:text-xl">5 ways you can talk to your child about the Christmas
                        Story</p>
                </div>

                <div class="col-start-5 col-span-10 md:col-start-1 md:col-span-6 p-4">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green relative py-10">
        <div class="lg:w-10/12 mx-auto">
            <div class="grid grid-cols-12 gap-4 lg:gap-10 mx-4 text-black">
                <div class="col-span-12 md:col-span-4">
                    <div class="shadow-lg">
                        <img class="rounded-t-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Home-FTG-Thumbnail.jpg" alt="">
                        <div class="bg-red text-center text-white py-10 rounded-b-lg">
                            <h3 class="text-2xl font-bold uppercase">First Time?</h3>
                            <a href="#">
                                <button class="mx-auto lg:mx-0 border-white border-2 text-white font-bold rounded-full my-1 md:my-1 py-2 px-7 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <i class="fas fa-gift"></i> Plan Your Visit
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <div class="shadow-lg">
                        <img class="rounded-t-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Home-Kids-Thumbnail.jpg" alt="">
                        <div class="bg-red text-center text-white py-10 rounded-b-lg">
                            <h3 class="text-2xl font-bold uppercase">Bring The Family!</h3>
                            <a href="#">
                                <button class="mx-auto lg:mx-0 border-white border-2 text-white font-bold rounded-full my-1 md:my-1 py-2 px-7 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <i class="fas fa-gift"></i> Kids Activities
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <div class="shadow-lg">
                        <img class="rounded-t-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Home-Experience-Thumbnail.jpg" alt="">
                        <div class="bg-red text-center text-white py-10 rounded-b-lg">
                            <h3 class="text-2xl font-bold uppercase">Things To Do</h3>
                            <a href="#">
                                <button class="mx-auto lg:mx-0 border-white border-2 text-white font-bold rounded-full my-1 md:my-1 py-2 px-7 md:px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <i class="fas fa-gift"></i> See All Activities
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php
get_footer();