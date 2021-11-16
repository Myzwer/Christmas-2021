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
    <div id="modal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-top bg-no-repeat bg-scroll bg-cover relative"
                 style="background: url('http://christmas-2021.local/wp-content/uploads/2021/11/Modal-header.jpg') center center;">

                <span class="close">
                    <i class="far fa-times-circle"></i>
                </span>

                <div class="modal-icon">
                    <img src="http://christmas-2021.local/wp-content/uploads/2021/11/FC-logo-1.png" alt="">

                </div>
            </div>
            <div class="modal-inner">
                <p class="pb-5">You can add the event to you calendar now or get more information. We can't wait to see
                    you!</p>
                <a download href="http://christmas-2021.local/wp-content/uploads/2021/11/afoothillschristmas.ics">
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
<!--End Modal-->




    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background:
    url('http://christmas-2021.local/wp-content/uploads/2021/11/AFC-Background-Banner.jpg') bottom center;
 height: 60vh;">
        <div class="text-center relative pt-24 lg:p-36">
            <img class = "mx-auto w-11/12 md:w-8/12 lg:w-5/12" src="http://christmas-2021.local/wp-content/uploads/2021/11/A-Foothills-Christmas-Icon-Alt.png" alt="">

            <h1 class = "uppercase text-red text-2xl md:text-3xl py-5 px-10">A place to <span class = "text-green">belong</span> this christmas.</h1>

            <a download href="http://christmas-2021.local/wp-content/uploads/2021/11/afoothillschristmas.ics">
                <button class="mx-auto lg:mx-0  bg-yellow text-black rounded-full my-1 md:my-1 py-4 px-5 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Mark Your Calendar <i class="far fa-calendar-alt"></i>
                </button>
            </a>
        </div>
        <img class = "hidden lg:block absolute left-36 bottom-3" src="http://christmas-2021.local/wp-content/uploads/2021/11/Guy-with-Boxes.png" alt="">
        <img class = "hidden lg:block absolute right-36 bottom-3" src="http://christmas-2021.local/wp-content/uploads/2021/11/GIrl-with-Bags.png" alt="">
    </div>

    <div class="bg-white pb-10">
        <div class=" lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
            <div class="grid">
                <div class=" grid-cols-12">
                    <div class="col-span-12">
                        <div class="text-center md:text-left mb-1">
                            <h1>Color Pod</h1>
                            <p>All fields optional</p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 mt-6">
                <div class="col-span-12 lg:col-span-4 card-gradient-1 rounded-xl shadow-xl">
                    <div class="text-center p-4">
                        <h2 class="font-bold text-2xl">Title</h2>
                        <h4 class="font-semibold">Subtitle</h4>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam
                            commodi consequuntur distinctio doloribus eaque, earum exercitationem, fuga iste labore
                            magni, maxime molestiae nulla pariatur quod sapiente totam vel voluptate?</p>
                        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Call To Action
                        </button>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-4 card-gradient-2 rounded-xl shadow-xl">
                    <div class="text-center p-4">
                        <h2 class="font-bold text-2xl">Title</h2>
                        <h4 class="font-semibold">Subtitle</h4>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam
                            commodi consequuntur distinctio doloribus eaque, earum exercitationem, fuga iste labore
                            magni, maxime molestiae nulla pariatur quod sapiente totam vel voluptate?</p>
                        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Call To Action
                        </button>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-4 card-gradient-3 rounded-xl shadow-xl">
                    <div class="text-center p-4">
                        <h2 class="font-bold text-2xl">Title</h2>
                        <h4 class="font-semibold">Subtitle</h4>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam
                            commodi consequuntur distinctio doloribus eaque, earum exercitationem, fuga iste labore
                            magni, maxime molestiae nulla pariatur quod sapiente totam vel voluptate?</p>
                        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Call To Action
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 mt-20">
                <div class="col-span-12">
                    <div class="text-center md:text-left mb-1">
                        <h1>PDF Download (four-up)</h1>
                        <p>This configuration always shows four PDF's on one row.</p>
                    </div>
                    <hr>
                </div>
            </div>


            <div class="grid grid-cols-12 mt-5 gap-6">
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="text-center mb-1">
                        <div class="w-24 text-center m-auto my-3">
                            <img class="rounded-full"
                                 src="https://images.unsplash.com/photo-1508515053963-70c7cc39dfb5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80"
                                 alt="">
                        </div>
                        <h2 class="font-bold text-2xl">PDF Title</h2>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis
                            cumque doloremque error esse exercitationem explicabo iure iusto magni molestiae, nulla odio
                            quam quo repellat vero. Aliquam possimus repellendus voluptate.</p>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="text-center mb-1">
                        <div class="w-24 text-center m-auto my-3">
                            <img class="rounded-full"
                                 src="https://images.unsplash.com/photo-1508515053963-70c7cc39dfb5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80"
                                 alt="">
                        </div>
                        <h2 class="font-bold text-2xl">PDF Title</h2>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis
                            cumque doloremque error esse exercitationem explicabo iure iusto magni molestiae, nulla odio
                            quam quo repellat vero. Aliquam possimus repellendus voluptate.</p>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="text-center mb-1">
                        <div class="w-24 text-center m-auto my-3">
                            <img class="rounded-full"
                                 src="https://images.unsplash.com/photo-1508515053963-70c7cc39dfb5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80"
                                 alt="">
                        </div>
                        <h2 class="font-bold text-2xl">PDF Title</h2>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis
                            cumque doloremque error esse exercitationem explicabo iure iusto magni molestiae, nulla odio
                            quam quo repellat vero. Aliquam possimus repellendus voluptate.</p>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="text-center mb-1">
                        <div class="w-24 text-center m-auto my-3">
                            <img class="rounded-full"
                                 src="https://images.unsplash.com/photo-1508515053963-70c7cc39dfb5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80"
                                 alt="">
                        </div>
                        <h2 class="font-bold text-2xl">PDF Title</h2>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis
                            cumque doloremque error esse exercitationem explicabo iure iusto magni molestiae, nulla odio
                            quam quo repellat vero. Aliquam possimus repellendus voluptate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();