<?php
/**
 * Template Name: Kids Page
 *
 * The kids page of the letitsnow Theme
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
    url('http://christmas-2021.local/wp-content/uploads/2021/11/AFC-Background-Banner.jpg') no-repeat bottom center scroll; background-size: cover; height: 90vh;">
        <div class="visible text-left relative pt-10 px-3 md:pl-10 z-5">
            <h1 class="uppercase text-red text-5xl lg:text-6xl font-black leading-ish">Free parent resource</h1>
            <p class="capitalize text-red font-bold text-lg lg:text-2xl pr-10">5 ways you can talk to you child about the Christmas Season</p>
            <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-black">
                <div class="col-span-12 md:col-span-4 z-5">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <img class="hidden lg:block absolute left-36 bottom-3 z-5"
             src="http://christmas-2021.local/wp-content/uploads/2021/11/Guy-with-Boxes.png" alt="">
        <img class="hidden lg:block absolute right-36 bottom-3 z-5"
             src="http://christmas-2021.local/wp-content/uploads/2021/11/GIrl-with-Bags.png" alt="">
        <img class="hidden lg:block absolute right-1/2 bottom-3 z-5"
             src="http://christmas-2021.local/wp-content/uploads/2021/11/GIrl-with-Bags.png" alt="">
    </div>

    <div class="bg-red p-5 relative">
        <div class="lg:w-9/12 mx-auto">
            <div class="border-2 border-white rounded-md md:p-5">
                <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-white">

                    <div class="col-span-12 md:col-span-4 px-4 z-5">
                        <img class="rounded-md shadow-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Kids-Main-Invite-Section.jpg"
                             alt="">
                    </div>
                    <div class="col-span-12 md:col-span-8 px-4 md:pt-10 z-5 relative">
                        <div class="content-middle-medium">
                            <h2 class="text-lg md:text-2xl lg:text-4xl uppercase font-black text-left">Don’t let your
                                kids miss out!</h2>
                            <p class="text-md mb-2">Your kids are not going to want to miss A Foothills Christmas. On
                                top of hot chocolate and Moonshine Mountain cookies, FC Kids will have some special
                                reindeer-themed activities that they won't forget!</p>
                            <button id="two"
                                    class="button mx-auto lg:mx-0 bg-yellow text-black rounded-full my-1 md:my-1 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                Mark Your Calendar <i class="far fa-calendar-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green p-5 relative">
        <div class="lg:w-9/12 mx-auto">
            <div class="border-2 border-white rounded-md md:p-5">
                <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-white">

                    <div class="col-span-12 md:col-span-8 px-4 md:pt-10 z-5 relative">
                        <div class="content-middle-medium">
                            <h2 class="text-lg md:text-2xl lg:text-4xl uppercase font-black text-left">Jingle Jam
                                2021</h2>
                            <p class="text-md mb-2">Jingle Jam will be an unforgettable Christmas experience complete
                                with fun, games, music, and lights! This will be an evening full of laughs, games,
                                prizes, and Christmas cheer! We can't wait to see you there!</p>
                            <button class="mx-auto lg:mx-0 border-white border-2 text-white font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                <i class="fas fa-external-link-alt"></i> View Event
                            </button>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-4 px-4 z-5">
                        <img class="rounded-md shadow-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Kids-Jingle-Jam-Section.jpg"
                             alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
get_footer();

