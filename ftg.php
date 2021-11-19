<?php
/**
 * Template Name: FTG Page
 *
 * The first time guest page of the letitsnow Theme
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
    url('http://christmas-2021.local/wp-content/uploads/2021/11/AFC-Background-Banner.jpg') bottom center; height: 90vh;">
        <div class=" invisible md:visible bg-no-repeat bg-scroll bg-cover relative" style="background:
    url('http://christmas-2021.local/wp-content/uploads/2021/11/All-People.png') bottom center; height: 90vh;">
            <div class="visible text-left relative pt-10 px-3 z-5">
                <h1 class="uppercase text-red text-6xl lg:text-8xl font-black leading-ish">You Belong here</h1>
                <p class="capitalize text-red font-bold text-lg lg:text-2xl  pr-10">We’d love to see you and your
                    family
                    for A Foothills Christmas!</p>
            </div>
        </div>
    </div>

    <div class="bg-red p-5 relative">
        <div class="lg:w-9/12 mx-auto">
            <div class="border-2 border-white rounded-md md:p-5">
                <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-white">
                    <div class="col-span-12 md:col-span-7 px-4 md:pt-10 z-5 relative">
                        <div class="content-middle-medium">
                            <h2 class="text-lg md:text-2xl lg:text-4xl uppercase font-black text-left">We have a gift
                                for
                                you!</h2>
                            <p class="text-md">If it's your first time, stop by one of our black VIP tents outside and
                                we
                                would
                                love to
                                gift you with a free mug!</p>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-5 px-4 z-5">
                        <img class="rounded-md shadow-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/FTG-Christmas-Mug.jpg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();

