<?php
/**
 * Template Name: Experience Page
 *
 * The experience page of the letitsnow Theme
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
                <h1 class="uppercase text-red text-6xl lg:text-6xl font-black leading-ish">It's Going To Be Amazing</h1>
                <p class="capitalize text-red font-bold text-lg lg:text-2xl  pr-10">We’d love to see you and your
                    family
                    for A Foothills Christmas!</p>
                <button id="two"
                        class="button mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-4 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                    Mark Your Calendar <i class="far fa-calendar-alt"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="bg-white py-5 relative">
        <div class="lg:w-9/12 mx-auto relative">
            <div class="grid grid-cols-12 gap-4 p-5">
                <div class="col-span-12 md:col-span-11 text-left">
                    <h2 class="uppercase text-2xl lg:text-4xl">You have a place to <span class="text-red">belong</span>
                        this christmas</h2>
                    <p class="text-md lg:text-xl">Invite Blurb! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum ornare at egestas nisi, pretium netus in nisl. Porttitor fermentum iaculis auctor sed.</p>
                </div>

                <div class="col-span-12 md:col-span-12">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 md:col-span-6 pb-5">
                            <h4 class="font-black text-2xl">Maryville</h4>
                            <p>9am & 11am - December 19</p>
                            <div class="text-left mb-5">
                                <button id="three"
                                        class="button mx-auto lg:mx-0 bg-yellow text-black rounded-full my-1 md:my-1 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                    Mark Your Calendar <i class="far fa-calendar-alt"></i>
                                </button>
                                <button class="mx-auto lg:mx-0 border-black border-2 text-black font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <i class="fas fa-map-marker-alt"></i> Get Directions
                                </button>
                            </div>
                        </div>

                        <div class="col-span-12 md:col-span-6">
                            <h4 class="font-black text-2xl">Bearden</h4>
                            <p>11am - December 19</p>
                            <div class="text-left mb-5">
                                <button id="four"
                                        class="button mx-auto lg:mx-0 bg-yellow text-black rounded-full my-1 md:my-1 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out z-5">
                                    Mark Your Calendar <i class="far fa-calendar-alt"></i>
                                </button>
                                <button class="mx-auto lg:mx-0 border-black border-2 text-black font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <i class="fas fa-map-marker-alt"></i> Get Directions
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green relative py-10">
        <div class="lg:w-10/12 mx-auto">
            <div class="grid grid-cols-12 gap-4 lg:gap-10 mx-4 text-black">
                <div class="col-span-12 md:col-span-6 xl:col-span-4">
                    <div class="shadow-lg">
                        <img class="rounded-t-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Experience-Cookies-Thumbnail.jpg" alt="">
                        <div class="bg-red text-center text-white py-5 px-5 rounded-b-lg lg:h-64">
                            <h3 class="text-2xl font-bold uppercase">Moonshine Mountain Cookies</h3>
                            <p class = "text-left">Moonshine Mountain Cookies are a gourmet cookie bakery located right here in East Tennessee. Their handcrafted small-batch cookies will keep you coming back for more!</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 xl:col-span-4">
                    <div class="shadow-lg">
                        <img class="rounded-t-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Experience-Hot-Chocolate-Thumbnail.jpg"
                             alt="">
                        <div class="bg-red text-center text-white py-5 px-5 rounded-b-lg lg:h-64">
                            <h3 class="text-2xl font-bold uppercase">Hot Chocolate Bar</h3>
                            <p class = "text-left">Nothing says "Christmas Season" like a warm cup of hot chocolate and some peppermint sticks. You won't want to miss this special treat at A Foothills Christmas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="hidden xl:block"
                         src="http://christmas-2021.local/wp-content/uploads/2021/11/Single-Person-1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-red p-5 relative">
        <div class="lg:w-9/12 mx-auto">
            <div class="border-2 border-white rounded-md md:p-5">
                <div class="grid grid-cols-12 gap-4 lg:gap-4 py-4 text-white">
                    <div class="col-span-12 md:col-span-7 px-4 md:pt-10 z-5 relative">
                        <div class="content-middle-medium">
                            <h2 class="text-lg md:text-2xl lg:text-4xl uppercase font-black text-left">tell your friends you’re coming!</h2>
                            <p class="text-md mb-2">Download Instagram story photos, Facebook headers and more!</p>
                            <button class="mx-auto lg:mx-0 border-white border-2 text-white font-light rounded-full my-1 md:my-1 py-1 px-7 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                <i class="fas fa-download"></i> Download Photos
                            </button>
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

    <div class="bg-green relative py-10">
        <div class="lg:w-8/12 mx-auto">
            <div class="grid grid-cols-12 gap-4 lg:gap-10 mx-4 text-black">

                <div class="col-span-12 md:col-span-4">
                    <img class="hidden lg:block"
                         src="http://christmas-2021.local/wp-content/uploads/2021/11/Single-Person-1.png" alt="">
                </div>

                <div class="col-span-12 md:col-span-4">
                    <div class="shadow-lg">
                        <img class="rounded-t-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Experience-FTG-Thumbnail.jpg"
                             alt="">
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

                <div class="col-span-12 md:col-span-4">
                    <div class="shadow-lg">
                        <img class="rounded-t-lg"
                             src="http://christmas-2021.local/wp-content/uploads/2021/11/Experience-Kids-Thumbnail.jpg" alt="">
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

            </div>
        </div>
    </div>


<?php
get_footer();
